<?php

class Atas_IndexController extends Zend_Controller_Action {

	public function init() {
		/* Initialize action controller here */
		$request = Zend_Controller_Front::getInstance()->getRequest();
	}

	public function indexAction() {
		// action body
		$SessaoUsuario = new Zend_Session_Namespace('usuario');
		if (Zend_Session::namespaceIsset('usuario')) {
			$this->view->usuario = $SessaoUsuario;
		} else {
			$this->_helper->redirector('login', 'index', 'index');
		}

	}

	public function addAction() {
		$this->request = $this->getRequest();
		
		$ata = new Application_Model_Ata();
		$ata->assunto = $this->request->getParam('assunto');
		$ata->data = $this->request->getParam('data');
		$ata->presentes[] = $this->request->getParam('presentes');
		$ata->pautas = $this->request->getParam('pontos1');
		$ata->descricao = $this->request->getParam('descricao');
		$ata->descricaoPontos = $this->request->getParam('descPontos1');
		
		if($this->request->getParam('salvar')){
			$ata->status = 0;
			echo '<pre>';
			print_r($ata);
		}
		if($this->request->getParam('homologar')){
			$ata->status = 1;
			echo '<pre>';
			print_r($ata);
		}
	}

	public function viewAction() {
		// action body
	}

}

