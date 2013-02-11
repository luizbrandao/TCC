<?php

class Atas_IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
	$request = Zend_Controller_Front::getInstance()->getRequest();
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

    public function addAction()
    {
        // action body
	// Para pegar os parametros submetidos via form
	//$request->getParam('pautas');
    }

    public function viewAction()
    {
        // action body
    }


}


