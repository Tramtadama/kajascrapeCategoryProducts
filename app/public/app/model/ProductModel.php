<?php

namespace App;

class ProductModel extends \App\BaseModel{

    public function __construct($tableName, \Nette\Database\Context $db) {

            parent::__construct($tableName, $db);
      }

      public function insertProduct($name, $category, $price, $article_no){
            $this->getTable()->insert(['name' => $name, 'category' => $category, 'price' => $price, 'article_no' => $article_no]);
      }
}