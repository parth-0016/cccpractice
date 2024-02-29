<?php

class Admin_Controller_User extends Core_Controller_Admin_Action
{

    protected $_allowedAction = ['login'];

    public function getCss()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')
            ->addCss('header.css')
            ->addCss('footer.css')
            ->addCss('product/Productform.css')
            ->addCss('product/list.css')
            ->addCss('customer/account/login.css')
            ->addCss('customer/account/dashboard.css');
    }

    public function loginAction()
    {
        // echo "Hello This is me! Login Here";
        Mage::getSingleton('core/session')->set('logged_in_admin_id', 1);
        $this->setRedirect('admin/catalog_product/form');

    }
}