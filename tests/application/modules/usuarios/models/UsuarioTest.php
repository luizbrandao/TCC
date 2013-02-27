<?php

require_once '/var/www/GeraAta/application/models/Usuario.php';
require_once '/var/www/GeraAta/application/modules/usuarios/models/Usuario.php';
require_once '/var/www/GeraAta/application/modules/atas/models/Banco.php';

class UsuarioTest extends PHPUnit_Framework_TestCase {
	
	//Teste para saber se a classe Usuario do Module usuario existe
	public function testClassUsuarioExist(){
		$u = new Usuarios_Model_Usuario();
		$this->assertTrue(!empty($u));
	}
	
	//Teste para saber se a classe Usuario do contexto da aplicacao existe
	public function testClassUsuarioAppExiste(){
		$u = new Application_Model_Usuario();
		$this->assertTrue(!empty($u));
	}
	
	//Teste para logind de usuario
	/*public function testLoginUsuario(){
		$usuario = new Application_Model_Usuario();
		$usuario->username = 'luizbrandaoj';
		$usuario->password = '123456';
		
		$u = new Usuarios_Model_Usuario();
		$usuarioModelo = $u->login($usuario);
		$this->assertEquals($usuarioModelo,$usuario);
	}*/
}
