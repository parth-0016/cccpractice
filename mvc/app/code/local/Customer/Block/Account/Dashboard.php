<?php

class Customer_Block_Account_Dashboard extends Core_Block_Template
{
    public function __construct()
    {
        $this->setTemplate('customer/account/dashboard.phtml');
    }

    public function getCustomer()
    {
        $productModel = Mage::getModel('customer/account');
        $id = $this->getRequest()->getParams('id');
        if ($id != '')
            $productModel->load($id);

        return $productModel;
    }
}