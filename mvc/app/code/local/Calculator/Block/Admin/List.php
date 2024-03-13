<?php

class Calculator_Block_Admin_List extends Core_Block_Template
{
    public function __construct()
    {
        $this->setTemplate('calculator/Adminlist.phtml');
    }

    public function getCal()
    {
        $calcModel = Mage::getModel('calculator/calculator')->getCollection();
        return $calcModel;
    }
}