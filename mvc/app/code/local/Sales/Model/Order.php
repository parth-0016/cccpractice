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
        $randomNumber = 70001;
        $orderNumber = 'Order' . $randomNumber;
        $this->addData('order_number', $orderNumber);
    }

}