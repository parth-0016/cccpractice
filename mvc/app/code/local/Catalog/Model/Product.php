<?php

class Catalog_Model_Product extends Core_Model_Abstract
{
    public function init()
    {
        $this->_resourceClass = 'Catalog_Model_Resource_Product';
        $this->_collectionClass = 'Catalog_Model_Resource_Collection_Product';
        $this->_modelClass = '';
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