<?php

namespace App;

class BaseUrlsModel extends \App\BaseModel{

    public function __construct($tableName, \Nette\Database\Context $db) {

            parent::__construct($tableName, $db);
      }
}