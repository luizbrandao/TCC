<?php

class Usuarios_IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
	$request = Zend_Controller_Front::getInstance()->getRequest();
    }

    public function indexAction()
    {
        // action body
	$usuario = new Usuarios_Model_Usuario();
	$usuarios = $usuario->findAll();
	$this->view->usuarios = $usuarios;
    }

    public function addAction()
    {
    	$this->request = $this->getRequest();
	
	$usuario = array(
		'nome'=>$this->request->getParam('nome'),
		'email'=>$this->request->getParam('email'),
		'username'=>$this->request->getParam('username'),
		'password'=>$this->request->getParam('password'),
	);
	
	$usuarios = new Usuarios_Model_Usuario();
	if($this->request->getParam('password') != "" && $this->request->getParam('password') == $this->request->getParam('re-password')){
		if($usuarios->adicionar($usuario)){
			echo "Usuario inserido com Sucesso";
			$this->_helper->redirector('index','index','usuarios');
		}else{
			echo "Nao foi possivel inserir usuario";
		}
   	
    	}
    }

    public function viewAction()
    {
        // action body
	$usuario = new Usuarios_Model_Usuario();
	$this->request = $this->getRequest();
	$id = $this->request->getParam('id');

	$resultado = $usuario->find($id);
	$this->view->usuario = $resultado;
    }

    public function updateAction()
    {
        // action body
	$usuario = new Usuarios_Model_Usuario();
	$this->request = $this->getRequest();
	$id = $this->request->getParam('id');
	$resultado = $usuario->find($id);
	$this->view->usuario = $resultado;
	if($this->request->getParam('password') != "" && $this->request->getParam('password') == $this->request->getParam('re-password')){
		$usuarios = array(
			'_id' => $this->request->getParam('id'),
			'nome'=> $this->request->getParam('nome'),
			'email'=>$this->request->getParam('email'),
			'password'=>$this->request->getParam('password'),
		);
                if($usuario->atualizar($usuarios)){
                        echo "Usuario inserido com Sucesso";
                        $this->_helper->redirector('index','index','usuarios');
                }else{
                        echo "Nao foi possivel inserir usuario";
                }
        
    	}
    }

    public function deleteAction()
    {
        // action body
	$this->request = $this->getRequest();
	$id = $this->request->getParam('id');
	$usuario = new Usuarios_Model_Usuario();
	$resultado = $usuario->apagar($id);
	$this->_helper->redirector('index','index','usuarios');
    }

    public function listAjaxAction()
    {
        // action body
	$this->_helper->layout()->disableLayout();
	$this->_helper->viewRenderer->setNoRender(true);
	if(isset($_POST)){
		$usuario = new Usuarios_Model_Usuario();
        	$usuarios = $usuario->findAll();
		echo json_encode($usuarios);
	}
    }


}






