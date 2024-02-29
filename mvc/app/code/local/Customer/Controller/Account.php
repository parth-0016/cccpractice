<?php

class Customer_Controller_Account extends Core_Controller_Front_Action
{
    // public function __construct(){
    //     $form = $this->createBlock('catalog/admin_product');
    //     $this->addChild('form', $form);
    // }
    public function loginAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')
            ->addCss('customer/login.css');

        $child = $layout->getChild('content');

        $loginForm = $layout->createBlock('customer/account_login');
        $child->addChild('form', $loginForm);
        $layout->toHtml();

    }
    public function registerAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')
            ->addCss('customer/register.css');

        $child = $layout->getChild('content');

        $registerForm = $layout->createBlock('customer/account_register');
        $child->addChild('form', $registerForm);
        $layout->toHtml();

    }
    public function forgotAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')
            ->addCss('product/productForm.css');

        $child = $layout->getChild('content');

        $forgotForm = $layout->createBlock('customer/account_forgot');
        $child->addChild('form', $forgotForm);
        $layout->toHtml();

    }
    public function dashboardAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')
            ->addCss('product/productForm.css');

        $child = $layout->getChild('content');

        $dashboardForm = $layout->createBlock('customer/account_dashboard');
        $child->addChild('form', $dashboardForm);
        $layout->toHtml();

    }

    public function saveAction()
    {
        echo "<pre>";
        $data = $this->getRequest()->getParams('customer');
        // echo 11111;
        print_r($data);
        // die;
        $product = Mage::getModel('customer/account')
            ->setData($data)
            ->save();
        print_r($product);
        // $loc = Mage::getBaseUrl('admin/catalog_product/list');
        // header("Location: $loc");
    }

    public function deleteAction()
    {
        $id = $this->getRequest()->getParams("id");
        $product = Mage::getModel("catalog/product")
            ->load($id);
        $product->delete($id);
        // $loc = Mage::getBaseUrl('admin/catalog_product/list');
        // header("Location: $loc");
    }

    public function listAction()
    {
        $layout = $this->getLayout();
        $child = $layout->getChild('content');

        $layout->getChild('head')
            ->addCss('product/list.css');

        $productList = $layout->createBlock('catalog/admin_product_list');
        $child->addChild('list', $productList);

        $layout->toHtml();
    }

}