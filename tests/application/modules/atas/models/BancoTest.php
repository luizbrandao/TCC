<?php

require_once('/var/www/GeraAta/application/modules/atas/models/Banco.php');

class BancoTest extends PHPUnit_Framework_TestCase {
	
	public function testgetConnection(){
		$mongo = new Atas_Model_Banco();
		$this->assertTrue(!empty($mongo));
	}

}
