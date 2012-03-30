<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{

    /**
     * Store config in registry
     *
     * @return void
     */
    protected function _initConfig()
    {
        /** Get Config */
        $config = new Zend_Config_Ini(
                        APPLICATION_PATH . '/configs/application.ini',
                        APPLICATION_ENV
        );

        /** Put Config in Registry */
        Zend_Registry::set('config', $config);
    }
    
    protected function _initJQuery()
    {
        $this->bootstrap('view');

    }
    
    public function _initViewHelpers()
    {
        $this->bootstrap('view');
        $view = $this->getResource('view');
        $view->headMeta()->appendHttpEquiv('Content-Type', 'text/html; charset=utf-8');
        $view->addHelperPath('ZendX/JQuery/View/Helper/', 'ZendX_JQuery_View_Helper_');
    }
    

}

