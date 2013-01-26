<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
		$this->request = $this->getRequest();
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
    }

    public function loginAction()
    {
        // action body
    	$request = $this->getRequest();
    	$usuario = new Usuarios_Model_Usuario();
    	if ($this->getRequest()->isPost()) {
    		$formData = $this->getRequest()->getPost();
    		
    		$login = $usuario->login($formData);
    		$usuarioEncontrado = '';
    		foreach ($login as $row){
    			$usuarioEncontrado->nome = $row['nome'];
    			$usuarioEncontrado->email = $row['email'];
    		}
    		echo "<pre>";
    		print_r($usuarioEncontrado);
    		
    	}
    }

    public function logarAction()
    {
        // action body
    }
}





