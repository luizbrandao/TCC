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
		//Metodo de buscar por atas apartir do seu ID
		try{
			$banco = new Ata_Model_Banco();
			$colecao = $banco->atas;
			$array = array(
				'_id' => new MongoId($ata->id)
			);
			$ataRowSet = $colecao->findOne($array);
			$ataResultado = new Application_Model_Ata();
			foreach ($ataRowSet as $row) {
				$ataResultado->id = $row['_id'];
				$ataResultado->assunto = $row['assunto'];
				$ataResultado->data = $row['data'];
				$ataResultado->pautas = $row['pautas'];
				$ataResultado->presentes = $row['presentes'];
				$ataResultado->descricao = $row['descricao'];
				$ataResultado->descricaoPontos = $row['descricaoPontos'];
				$ataResultado->status = $row['descricaoPontos'];
			}
			return $ataResultado;
		}catch(Exception $e){
			throw new Exception($e->getMessage());
		}
	}
}
