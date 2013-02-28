<?php

class AtaTest extends PHPUnit_Framework_TestCase{
	
	//Test para verificar se a classe Ata existe
	public function testClassAtaExist(){
		$ata = new Atas_Model_Ata();
		$this->assertTrue(!empty($ata));
	}
}
