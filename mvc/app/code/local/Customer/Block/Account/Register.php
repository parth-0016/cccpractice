<?php

class Customer_Block_Account_Register extends Core_Block_Template
{
    public function __construct()
    {
        $this->setTemplate('customer/account/register.phtml');
    }

    public function getCategory()
    {
        $productModel = Mage::getModel('customer/account');
        $id = $this->getRequest()->getParams('id');
        if ($id != '')
            $productModel->load($id);

        return $productModel;
    }
}