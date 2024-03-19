<?php

class Sales_Model_Order extends Core_Model_Abstract
{
    public function init()
    {
        $this->_resourceClass = 'Sales_Model_Resource_Order';
        $this->_collectionClass = 'Sales_Model_Resource_Collection_Order';
        $this->_modelClass = 'sales/order';
    }

    protected function _beforeSave()
    {
        $fixedString = 'CCC-';

        $randomNumber = mt_rand(10000, 99999);
        $orderNumber = $fixedString . $randomNumber;
        $this->addData('order_number', $orderNumber);
    }

}