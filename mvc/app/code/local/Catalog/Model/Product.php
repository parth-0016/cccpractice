<?php

class Catalog_Model_Product extends Core_Model_Abstract
{
    public function init()
    {
        $this->_resourceClass = 'Catalog_Model_Resource_Product';
        $this->_collectionClass = 'Catalog_Model_Resource_Collection_Product';
        $this->_modelClass = 'catalog/product';
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

    public function getCategoryArray()
    {
        if (!isset($this->_data) || empty($this->_data)) {
            // $category = Mage::getModel('catalog/category')->getCollection();
            $category = Mage::getModel('catalog/category')->getCollection();
            $cat = $category->getData();
            foreach ($category->getData() as $cat) {
                // print_r($cat->getCategoryName());
                $this->_data[$cat->getCategoryId()] = $cat->getCategoryName();
            }
        }
        // print_r($cat);
        // print_r($this->_data);
        return $this->_data;
    }


}