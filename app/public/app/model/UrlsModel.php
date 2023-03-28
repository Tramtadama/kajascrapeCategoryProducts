<?php

namespace App;

class UrlsModel extends \App\BaseModel{

    public function __construct($tableName, \Nette\Database\Context $db) {

            parent::__construct($tableName, $db);
      }

    // public function insertUrls($urls, $type, $processed){
    //     if ($processed){
    //         $processed = new \DateTime();
    //     }else{
    //         $processed = null;
    //     }
    //     foreach ($urls as $url){
    //         $this->getTable()->insert(['url' => $url, 'type' => $type, 'processed' => $processed]);
    //     }
    // }

    public function insertUrl($url, $type, $category, $downloaded, $processed){
        if ($processed){
            $processed = new \DateTime();
        }else{
            $processed = null;
        }
        if ($downloaded){
            $downloaded = new \DateTime();
        }else{
            $downloaded = null;
        }
        return $this->getTable()->insert(['url' => $url, 'type' => $type, 'category' => $category,
                'downloaded' => $downloaded, 'processed' => $processed]);
    }

    public function updateProcessed($id){
        $this->getTable()->where('id = ?', $id)->update(['processed' => new \DateTime()]);
    }

    public function getUnprocessedDetails(){
        return $this->getTable()->where('processed IS NULL')->where('type = ?', self::URL_TYPE_DETAIL)->fetchAll();
    }

    public function getUnprocessed(){
        return $this->getTable()->where('processed IS NULL')->fetchAll();
    }
}