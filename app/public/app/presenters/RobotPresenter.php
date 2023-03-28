<?php

namespace App\Presenters;

use Nette;
use GuzzleHttp\Client;
use voku\helper\HtmlDomParser;


final class RobotPresenter extends Nette\Application\UI\Presenter
{
    /** @var \App\Config @inject  */
	public $config;

  /** @var \App\UserAgentModel @inject  */
	public $modelUserAgent;

  /** @var \App\UrlsModel @inject  */
	public $modelUrls;

  /** @var \App\BaseUrlsModel @inject  */
	public $modelBaseUrls;

    /** @var \App\ProductModel @inject  */
	public $modelProduct;

  const SHOP_URL = "https://www.hornbach.cz/c/";
  const MAIN_URL = "https://www.hornbach.cz";

    public function actionDefault(){
      // ini_set('max_execution_time', '300');
      set_time_limit(3000000);
      $agent = $this->getRandomUserAgent();
      $client = new Client([
        'timeout'  => 10.0,
        'User-Agent' => $agent,
      ]);

      ###Get Main Page
      if (!file_exists($this->config->getWwwDir().'/pages/main/main.html')){
        $this->getPage($client, self::SHOP_URL, '/pages/main/main.html');
      }

      ###Get Category Links
      $dom = HtmlDomParser::file_get_html($this->config->getWwwDir().'/pages/main/main.html');
      $categoryLinks = $dom->find('a[class^=al-ui-stretchedLink]');
      $text = $categoryLinks->text;
      $href = $categoryLinks->href;
      $categoryLinks = array_combine($text, $href);
      $categoryLinks = array_slice($categoryLinks, 2);
      foreach ($categoryLinks as $category => $firstCatLink) {
            #Save cagegory page to file and insert to DB
            $exploded = explode('/', $firstCatLink);
            $dirname = $exploded[3];
            if (!file_exists($this->config->getWwwDir().'/pages/categories/'.$dirname)){
              mkdir($this->config->getWwwDir().'/pages/categories/'.$dirname);
              // $this->getPage($client, self::MAIN_URL.$firstCatLink, '/pages/categories/'.$dirname."/page_1.html");
            };
            $this->modelUrls->insertUrl(self::MAIN_URL.$firstCatLink, 'category', $category , false, true);
            #Get product links from category page
            $firstCatLink = $firstCatLink."?page=1&pageSize=36";
            $dom = $this->getDomFromUrl($client, self::MAIN_URL.$firstCatLink);
            $productLinks = $dom->find('a[class^=al-ui-product_name]');
            $text = $productLinks->text;
            $href = $productLinks->href;
            $productLinks = array_combine($text, $href);
            #Get next page link
            $nextPage = $dom->find('a[data-testid=pagination-bar-next-button]')->href[0];
            #Replace pageSize=32 with pageSize=72 in long url
            $nextPage = str_replace("amp;", "", $nextPage);
            // dd($nextPage);
            $y = 2;
            $productPageNo = 1;
            while($nextPage != "#"){
              $i = $this->processProducts($productLinks, $dirname, $productPageNo, $client, $category, 1);
              #Save next page to file and insert to DB
              // $this->getPage($client, self::MAIN_URL.$nextPage, '/pages/categories/'.$dirname."/page_".$y.".html");
              $dom = $this->getDomFromUrl($client, self::MAIN_URL.$nextPage);
              // $dom = HtmlDomParser::file_get_html($this->config->getWwwDir().'/pages/categories/'.$dirname."/page_".$y.".html");
              $nextPage = $dom->find('a[data-testid=pagination-bar-next-button]')->href[0];
              $nextPage = str_replace("amp;", "", $nextPage);
              $productLinks = $dom->find('a[class^=al-ui-product_name]');
              $text = $productLinks->text;
              $href = $productLinks->href;
              $productLinks = array_combine($text, $href);
              $y = $y + 1;
              $productPageNo = $productPageNo + 1;
              ##Kdyz je next page #, tak projedu posledni
            }
            $i = $this->processProducts($productLinks, $dirname, $productPageNo, $client, $category, 1);
    }
    }

    public function getPage($client, $url, $dir){
      $response = $client->request('GET', $url);
      $body = $response->getBody()->getContents();
      file_put_contents($this->config->getWwwDir().$dir, $body);
    }

    public function getRandomUserAgent() {
      
        $count = $this->modelUserAgent->getTable()->count();
        $random = rand(1, $count);
        $userAgent = $this->modelUserAgent->getTable()->get($random);
      
        return $userAgent;
      }

    public function processProducts($productLinks, $dirname, $productPageNo, $client, $category, $iparam){
      $i = $iparam;
      foreach ($productLinks as $key => $value) {
        #Save product page to file and insert to DB
        if (!file_exists($this->config->getWwwDir().'/pages/categories/'.$dirname."/products")){
          mkdir($this->config->getWwwDir().'/pages/categories/'.$dirname."/products");
        }
        if (!file_exists($this->config->getWwwDir().'/pages/categories/'.$dirname."/products/".$productPageNo)){
          mkdir($this->config->getWwwDir().'/pages/categories/'.$dirname."/products/".$productPageNo);
        }
        $this->getPage($client, self::MAIN_URL.$value, '/pages/categories/'.$dirname."/products/".$productPageNo."/product_".$i.".html");
        $product_row = $this->modelUrls->insertUrl(self::MAIN_URL.$value, "product" , $category ,  true, false);
        #Process product page and save to DB
        $dom = HtmlDomParser::file_get_html($this->config->getWwwDir().'/pages/categories/'.$dirname."/products/".$productPageNo."/product_".$i.".html");
        $name = $dom->find('h1[class^=ad-ui-headline]')->text;
        $price = $dom->find('span[class^=ad-ui-UnstyledDisplayPrice-price_main]')->text;
        $article_no = $dom->find('em[class^=ad-ui-articleNumber]')->text;
        #Get only numbers from string
        $article_no = preg_replace('/[^0-9]/', '', $article_no[0]);
        #Get only numbers and special characters from string
        $price = preg_replace('/[^0-9,]/', '', $price[0]);
        $this->modelProduct->insertProduct($name[0], $category, $price, $article_no);
        $this->modelUrls->updateProcessed($product_row->id);
        $i = $i+1;
      }
      return $i;
    }

    public function getDomFromUrl($client, $url){
      $response = $client->request('GET', $url);
      $html = $response->getBody()->getContents();
      $dom = HtmlDomParser::str_get_html($html);
      return $dom;
    }
}