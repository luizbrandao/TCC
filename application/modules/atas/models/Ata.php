<?php

class Atas_Model_Ata {
	public function add($ata) {
		$banco = new Ata_Model_Banco();
		$colecao = $banco->atas;
		$coleacao->save($ata);
	}
}

