<?php


class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{

	protected function _initAutoloader(){
                new Zend_Application_Module_Autoloader(array(
                                'namespace' => 'Atas',
                                'basePath'  => APPLICATION_PATH . '/modules/atas',
                ));
		new Zend_Application_Module_Autoloader(array(
                                'namespace' => 'Usuarios',
                                'basePath'  => APPLICATION_PATH . '/modules/usuarios',
                ));
        }
}

