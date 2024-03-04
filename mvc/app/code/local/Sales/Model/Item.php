<?php

class Sales_Model_Item extends Core_Model_Abstract
{
    public function init()
    {
        $this->_resourceClass = 'Sales_Model_Resource_Item';
        $this->_collectionClass = 'Sales_Model_Resource_Collection_Item';
        $this->_modelClass = 'sales/quote_item';
    }
}