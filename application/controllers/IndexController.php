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
    }

    public function logarAction()
    {
        // action body
        $request = $this->getRequest();

        if ($this->getRequest()->isPost()) {
        	$formData = $this->getRequest()->getPost();
        
	        echo '<pre>';
	        print_r($formData);
	        die;
        }
    }
}





