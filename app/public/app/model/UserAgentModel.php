<?php

namespace App;

class UserAgentModel extends \App\BaseModel{

    public function __construct($tableName, $wwwDir, \Nette\Database\Context $db) {
            $this->wwwDir = $wwwDir;

            parent::__construct($tableName, $db);
      }

    public function agentsFromFileToDb(){      
        if ($file = fopen($this->wwwDir. "/user-agents_chrome.txt", "r")) {
            $userAgents = array();
        
            while (!feof($file)) {
              $userAgents[] = fgets($file);
            }
            foreach ($userAgents as $a){
                $this->getTable()->insert(['agent' => $a]);
            }
    }
}
}