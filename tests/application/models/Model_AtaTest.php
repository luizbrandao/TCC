<?php

require_onde('/var/www/GeraAta/application/model/Ata.php');

class Model_AtaTest extends PHPUnit_Framework_TestCase {
	public function ataAppModel(){
		$a = new Application_Model_Ata();
		$this->assertTrue(!empty($a));
	}
	
	public function ataModuleModel(){
		$ata = new Atas_Model_Ata();
		$this->assertTrue(!empty($ata));
	}
}