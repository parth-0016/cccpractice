<?php

class Calculator_Block_UserInterface extends Core_Block_Template
{
    public function __construct()
    {
        $this->setTemplate('calculator/form.phtml');
    }

    public function getCal()
    {
        return Mage::getModel('calculator/calculator')
            ->load($this->getRequest()->getParams('id', 0));
    }

    public function getOperators()
    {
        $mapping = [
            "add" => '+',
            "minus" => '-',
            "multiply" => '*',
            "divide" => '/',
            "percentage" => '%'

        ];
        return $mapping;
    }

    public function getUserName()
    {
        $session = Mage::getSingleton('core/session');
        $session_id = $session->getId();
        $data = Mage::getModel('calculator/calculator')
            ->getCollection()
            ->addFieldToFilter('session_id', $session_id)->getData();
        // print_r($data[0]);
        $userName = '';
        if (isset($data[0])) {
            $userName = $data[0]->getUserName();
        }
        return $userName;
    }
}