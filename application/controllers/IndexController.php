<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
    	/* Initialize action controller here */
    	$this->request = $this->getRequest();
    }

    public function indexAction()
    {
        // action body
		$SessaoUsuario = new Zend_Session_Namespace('usuario');
		if(Zend_Session::namespaceIsset('usuario')){
			$this->view->usuario = $SessaoUsuario;
		} else {
			$this->_helper->redirector('login', 'index');
		}
		
    }

    public function loginAction()
    {
        // action body
    	$request = $this->getRequest();
    	$usuario = new Usuarios_Model_Usuario();
    	if ($this->getRequest()->isPost()) {
    		$formData = $this->getRequest()->getPost();
    		$usuarioModel = new Application_Model_Usuario();
    		$usuarioModel->username = $formData['username'];
    		$usuarioModel->password = $formData['password'];
    		$login = $usuario->login($usuarioModel);

    		$SessaoUsuario = new Zend_Session_Namespace('usuario');

			foreach($login as $row){
				$SessaoUsuario->id = $row['_id'];
				$SessaoUsuario->nome = $row['nome'];
                $SessaoUsuario->email= $row['email'];
            }

			if(!empty($SessaoUsuario->nome)){
    			$this->_helper->redirector('index','index');
			} else {
				$this->view->erro = "<div class='alert alert-error'>Login incorreto</div>";
			}
    	
    	}
    }

    public function logoutAction()
    {
        // action body
    	$SessionNamespace = new Zend_Session_Namespace();
    	
    	if (Zend_Session::namespaceIsset('usuario')) {
    		$SessaoUsuario = new Zend_Session_Namespace('usuario');
    		$SessaoUsuario->unsetAll('');
    		$this->_helper->redirector('login','index');
    	}
    }

}



