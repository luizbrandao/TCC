<?php

class Atas_Model_Ata {

	public function add($ata) {
		//Metodo para Adicao de Atas
		try{
			$conexao = new Atas_Model_Banco();
			$db = $conexao->getConnection();
			$array = array(
				'assunto' => $ata->assunto,
				'data' => $ata->data,
				'pautas' => $ata->pautas,
				'presentes' => $ata->presentes,
				'descricao' => $ata->descricao,
				'descricaoPontos' => $ata->descricaoPontos,
				'status' => $ata->status,
			);

			$db->atas->insert($array);
			return true;
		}catch(Exception $e){
			throw new Exception($e->getMessage());			
		}
	}

	public function find($ata){
		//Metodo que tem a finalidade de buscar por atas apartir do seu ID
		try{			
			$conexao = new Atas_Model_Banco();
			$db = $conexao->getConnection();
			$atasResultSet = $db->atas->findOne(array('_id'=>new MongoId($ata->id)));
			return $atasResultSet;
		}catch(Exception $e){
			throw new Exception($e->getMessage());
		}
	}

	public function findAll(){
		try{
			$conexao = new Atas_Model_Banco();
			$db = $conexao->getConnection();
			$atas = $db->atas->find();
			
			return $atas;
		}catch(Exception $e){
			throw new Exception($e->getMessage());
			
		}
	}
}
