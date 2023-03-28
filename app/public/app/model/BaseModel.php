<?php

namespace App;

class BaseModel {
/** 
   * @var \Nette\Database\Context
   */
  public $db;
  
  /**
   * Název tabulky
   * @var type 
   */
  private $tableName = '';
  
/**
 * 
 * @param \Nette\Database\Context $db
 */
public function __construct($tableName, \Nette\Database\Context $db) {
  $this->db = $db;
      $this->tableName = $tableName;
}
  
  /**
   * Vrátí název tabulky
   * @return string
   */
  public function getTableName(){
      return $this->tableName;
  }

    /**
	 * Vrátí tabulku
	 * @return \Nette\Database\Table
	 */
	public function getTable(){
		return $this->db->table($this->getTableName());
	}
}