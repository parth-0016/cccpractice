<?php

class Admin_Controller_User extends Core_Controller_Admin_Action
{
    protected $_allowedAction = ['login', 'loginPost', 'save', 'register', 'forgot'];

    public function loginAction()
    {
        $layout = $this->getLayout();

        $layout->getChild('head')
            ->addCss('admin/login.css');

        $child = $layout->getChild('content');
        $login = $layout->createBlock('admin/account_login');
        $child->addChild('login', $login);

        $layout->toHtml();
    }
    public function loginPostAction()
    {
        $data = $this->getRequest()->getParams('admin');

        $email = $data['admin_email'];
        $password = $data['password'];
        // var_dump($email);
        // var_dump($password);

        $adminCollection = Mage::getModel('admin/user')->getCollection()
            ->addFieldToFilter('admin_email', $email)
            ->addFieldToFilter('password', $password);

        $count = 0;
        $adminId = 0;

        foreach ($adminCollection->getData() as $customer) {
            $count++;
            $adminId = $customer->getId();
            // print_r($adminId); 
        }

        if ($count == 1) {
            Mage::getSingleton('core/session')->set('logged_in_admin_id', $adminId);
            $this->setRedirect('admin/catalog_product/list');
        } else {
            echo "You are not allowed to view this page.";
        }
    }

    public function forgotAction()
    {
        $layout = $this->getLayout();

        $layout->getChild('head')->addCss('admin/forgot.css');

        $child = $layout->getChild('content');
        $forgot = $layout->createBlock('admin/account_forgot');
        $child->addChild('forgot', $forgot);
        $layout->toHtml();
    }

    public function registerAction()
    {
        $layout = $this->getLayout();

        $layout->getChild('head')->addCss('admin/register.css');

        $child = $layout->getChild('content');
        $register = $layout->createBlock('admin/account_register');
        $child->addChild('register', $register);
        $layout->toHtml();
    }
    public function saveAction()
    {
        // echo "<pre>";
        $data = $this->getRequest()->getParams('admin'); //error here write catalog product 
        $adminData = Mage::getModel('admin/user')
            ->setData($data)
            ->save();
        print_r($adminData);
        // $loc = Mage::getBaseUrl('admin/catalog_category/list');
        // header("Location: $loc");

    }
}