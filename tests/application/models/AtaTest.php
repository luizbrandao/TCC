<?php

require_once '/var/www/GeraAta/application/model/Ata.php';
require_once '/var/www/GeraAta/application/modules/atas/models/Ata.php';

class AtaTest extends PHPUnit_Framework_TestCase {
	public function testAtaAppModel() {
		$a = new Application_Model_Ata();
		$this->assertTrue(!empty($a));
	}

	public function testAtaModuleModel() {
		$ata = new Atas_Model_Ata();
		$this->assertTrue(!empty($ata));
	}
}