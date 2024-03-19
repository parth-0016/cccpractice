<?php

class Core_Controller_Front_Action
{
    protected $_layout = null;

    public function __construct()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')->addCss('header.css');
        $layout->getChild('head')->addCss('footer.css');
        $this->init();
    }

    public function init(){
        return $this;
    }

    public function getLayout()
    {
        if (is_null($this->_layout)) {
            $this->_layout = Mage::getBlock('core/layout');

        }

        return $this->_layout;
    }

    public function getRequest()
    {
        return Mage::getModel('core/request');
    }

    public function setRedirect($url)
    {
        return header("Location: " . Mage::getBaseUrl($url));
    }

}