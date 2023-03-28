<?php

namespace App;

class Config {

	private $wwwDir;
    private $basePath;

    public function __construct($wwwDir, $basePath) {
		$this->wwwDir = $wwwDir;
        $this->basePath = $basePath;
	}

    public function getWwwDir() {
		return $this->wwwDir;
	}

    /**
	 * Vrátí adresu na disku pro aktuální datovou složku když neexistuje tak jí založí
	 * @return string
	 */
	public function getActualDataDir() {
		$d = $this->getWwwDir() . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . date('Y_m_d');
		if (!file_exists($d)) {
			mkdir($d);
			chmod($d, 0777);
		}

		return $d;
	}

	public function getActualDetailsDataDir($category, $sautoId) {
		$d = $this->getWwwDir() . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . date('Y_m_d') . DIRECTORY_SEPARATOR .$category. DIRECTORY_SEPARATOR . 'details'. DIRECTORY_SEPARATOR . $sautoId;
		if (!file_exists($d)) {
			mkdir($d, 0777, true);
		}

		return $d;
	}

	public function getActualListsDataDir($category) {
		$d = $this->getWwwDir() . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . date('Y_m_d') . DIRECTORY_SEPARATOR .$category. DIRECTORY_SEPARATOR . 'lists';
		if (!file_exists($d)) {
			mkdir($d, 0777, true);
		}

		return $d;
	}

    /**
	 * Vrátí adresu na disku pro pro datovou složku na den dle parametru
	 * @param string $date Datum
	 * @return string
	 */
	public function getDataDirByDate($date) {
		if(\is_object($date)){			
			return $this->getWwwDir() . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . $date->format('Y_m_d');
		}
		return $this->getWwwDir() . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . date('Y_m_d', strtotime($date));
	}
}