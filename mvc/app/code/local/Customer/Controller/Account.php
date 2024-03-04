<?php
// echo "<pre>";
class Customer_Controller_Account extends Core_Controller_Front_Action
{
    // public function __construct(){
    //     $form = $this->createBlock('catalog/admin_product');
    //     $this->addChild('form', $form);
    // }
    protected $_allowedAction = ['register', 'login', 'forgot'];

    public function init()
    {
        $action = $this->getRequest()->getActionName();
        if (
            !in_array($action, $this->_allowedAction) &&
            !Mage::getSingleton('core/session')->get('logged_in_customer_id')
        ) {
            $this->setRedirect('customer/account/login');
        }
    }
    public function loginAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')
            ->addCss('customer/login.css');

        $child = $layout->getChild('content');

        $loginForm = $layout->createBlock('customer/account_login');
        $child->addChild('loing', $loginForm);
        $layout->toHtml();
    }

    public function registerAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')
            ->addCss('customer/register.css');

        $child = $layout->getChild('content');

        $registerForm = $layout->createBlock('customer/account_register');
        $child->addChild('register', $registerForm);
        $layout->toHtml();

    }

    public function loginPostAction()
    {
        $data = $this->getRequest()->getParams('customer');

        $email = $data['customer_email'];
        $password = $data['password'];
        // echo 121212;
        // var_dump($email);
        // var_dump($password);

        $customerCollection = Mage::getModel('customer/account')->getCollection()
            ->addFieldToFilter('customer_email', $email)
            ->addFieldToFilter('password', $password);

        $count = 0;
        $customerId = 0;
        // echo 1234;
        foreach ($customerCollection->getData() as $customer) {
            $count++;
            $customerId = $customer->getId();
            // echo 33433;
            // echo "<br>";
            print_r($customerId);
        }

        if ($count == 1) {
            echo "success";
            Mage::getSingleton('core/session')->set('logged_in_customer_id', $customerId);
            // echo $customerId;
            $this->setRedirect('customer/account/dashboard');
        } else {

            echo "You are not allowed to view this page.";
        }
    }
    public function forgotAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')
            ->addCss('customer/forgot.css');

        $child = $layout->getChild('content');

        $forgotForm = $layout->createBlock('customer/account_forgot');
        $child->addChild('forgot', $forgotForm);
        $layout->toHtml();

    }
    public function dashboardAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')
            ->addCss('customer/dashboard.css');

        $child = $layout->getChild('content');

        $dashboardForm = $layout->createBlock('customer/account_dashboard');
        $child->addChild('dashboard', $dashboardForm);
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
}