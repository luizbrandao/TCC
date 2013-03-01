<?php

class Atas_IndexController extends Zend_Controller_Action {

	public function init() {
		/* Initialize action controller here */
		$request = Zend_Controller_Front::getInstance()->getRequest();
		$SessaoUsuario = new Zend_Session_Namespace('usuario');
        if (Zend_Session::namespaceIsset('usuario')) {
            $this->view->usuario = $SessaoUsuario;
        } else {
            $this->_helper->redirector('login', 'index', 'index');
        }

	}

	public function indexAction() {
		$ata = new Atas_Model_Ata();
		$this->view->atas = $ata->findAll();
	}

	public function addAction() {
		$this->request = $this->getRequest();
		
		$ata = new Application_Model_Ata();
		$ata->assunto = $this->request->getParam('assunto');
		$ata->data = $this->request->getParam('data');
		$ata->presentes[] = $this->request->getParam('presentes');

		$qtdePautas = $this->request->getParam('qtdPautas');
		for($i = 0; $i <= $qtdePautas; $i++) {
			if($this->request->getParam('pontos'.$i)){
				$ata->pautas[] = $this->request->getParam('pontos'.$i);
				$ata->descricaoPontos[] = $this->request->getParam('descPontos'.$i);
			}
		}
		$ata->descricao = $this->request->getParam('descricao');		
		
		if($this->request->getParam('salvar')){
			$ata->status = 0;
			$ataSalvar = new Atas_Model_Ata();
			$ataSalvar->add($ata);
			$this->_helper->redirector('index', 'index', 'atas');
		}
		if($this->request->getParam('homologar')){
			$ata->status = 1;
			$ataSalvar = new Atas_Model_Ata();
			$ataSalvar->add($ata);
			$this->_helper->redirector('index', 'index', 'atas');
		}
	}

	public function viewAction() {
		$this->request = $this->getRequest();
		$ata = new Application_Model_Ata();
		$ata->id = $this->request->getParam('id');

		$a = new Atas_Model_Ata();
		
		$this->view->ata = $a->find($ata);		
	}

}

