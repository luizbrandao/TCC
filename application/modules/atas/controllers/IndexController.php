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
	
    }

    public function addAction()
    {
        // action body
	// Para pegar os parametros submetidos via form
	//$request->getParam('pautas');
    }
}
