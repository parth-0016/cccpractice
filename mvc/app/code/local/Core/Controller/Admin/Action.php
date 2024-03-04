<?php

class Core_Controller_Admin_Action extends Core_Controller_Front_Action
{
    protected $_allowedAction = [];

    public function __construct()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')->addCss('header.css');
        $layout->getChild('head')->addCss('footer.css');
        $this->init();
    }

    public function init()
    {
        $this->getLayout()->setTemplate("core/admin.phtml");
        $action = $this->getRequest()->getActionName();

        if (
            !in_array($action, $this->_allowedAction) &&
            !Mage::getSingleton('core/session')->get("logged_in_admin_id")
        ) {
            $this->setRedirect('admin/user/login');
        }
        return $this;
    }
}