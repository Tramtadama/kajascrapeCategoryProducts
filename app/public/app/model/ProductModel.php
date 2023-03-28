<?php

namespace App;

class ProductModel extends \App\BaseModel{

    public function __construct($tableName, \Nette\Database\Context $db) {

            parent::__construct($tableName, $db);
      }

      public function insertProduct($name, $category, $price, $article_no){
            $this->getTable()->insert(['name' => $name, 'category' => $category, 'price' => $price, 'article_no' => $article_no]);
      }

      public function getCategories(){
            return $this->getTable()->select('category')->group('category')->fetchPairs('category', 'category');
      }

      public function getTotalCount(){
            return $this->getTable()->count('*');
      }

      public function getAllProducts(){
            return $this->getTable()->fetchAll();
      }
      
      public function get10Products(){
            return $this->getTable()->limit(10)->fetchAll();
      }
}