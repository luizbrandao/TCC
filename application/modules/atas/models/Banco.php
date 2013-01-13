<?php

class Atas_Model_Banco
{
	public function getConnection(){
		$mongo = new Mongo();
		$db = $mongo->docs;
		return $db;
	}
}
