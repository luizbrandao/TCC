<?php

class Usuarios_Model_Usuario
{
	public function find($id){
		$conexao = new Atas_Model_Banco();
		$db = $conexao->getConnection();
		$usuario = $db->usuarios->findOne(array('_id' => new MongoId($id)));
		return $usuario;
	}
	
	public function adicionar($usuario){
		try{
			$conexao = new Atas_Model_Banco();
			$db = $conexao->getConnection();
			$usuario = $db->usuarios->save($usuario);
			return true;
		}catch(Exception $e){
			return false;
			throw new Exception($e->getMessage());
		}
	}
	
	public function apagar($id){
		try{
			$conexao = new Atas_Model_Banco();
			$db = $conexao->getConnection();
			$db->usuarios->remove(array('_id'=>new MongoId($id)));
			return true;
		}catch(Exception $e){
			return false;
			throw new Exception($e->getMessage());
		}
	}
	
	public function findAll(){
		try{
			$conexao = new Atas_Model_Banco();
			$db = $conexao->getConnection();
			$usuarios = $db->usuarios->find();
			return $usuarios;
		}catch(Exception $e){
			throw new Exception($e->getMessage());
		}
	}

	public function atualizar($usuario){
		try{
			$conexao = new Atas_Model_Banco();
			$db = $conexao->getConnection();
			$db->usuarios->update(
				array('_id'=> new MongoId($usuario['_id'])),
				array(
					'$set' => array(
						'nome'=>$usuario['nome'],
						'email'=>$usuario['email'],
						'username'=>$usuario['username'],
						'password'=>$usuario['password'],
					)
				)
			);
			return true;
		}catch(Exception $e){
			throw new Exception($e->getMessage());
		}
	}
	
	public function login($usuario){
		$conexao = new Atas_Model_Banco();
		$db = $conexao->getConnection();
		$usuario = $db->usuarios->find(array(
							'username'=>$usuario['username'],
							'password'=>$usuario['password']));
		return $usuario;
	}
}
