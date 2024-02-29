<?php

class Customer_Model_Account extends Core_Model_Abstract
{
    public function init()
    {
        $this->_resourceClass = 'Customer_Model_Resource_Account';
        $this->_collectionClass = 'Customer_Model_Resource_Collection_Account';
        $this->_modelClass = 'customer/account';
    }

    public function mapStatus()
    {
        $mapping = [
            1 => "Enable",
            0 => "Disable"
        ];
        if (isset($this->_data['status']))   //condition for null value of status
            return $mapping[$this->_data['status']];
    }

}