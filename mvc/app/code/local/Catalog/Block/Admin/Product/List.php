<?php

class Catalog_Block_Admin_Product_List extends Core_Block_Template
{
    public function __construct()
    {
        $this->setTemplate('catalog/admin/product/list.phtml');
    }

    public function getProduct()
    {
        return Mage::getModel('catalog/product')->getCollection();
    }

    public function getCategoryNameById($id)
    {
        $cat = Mage::getModel('catalog/product')->getCategoryArray();
        // print_r($cat);
        if (array_key_exists($id, $cat)) {
            return $cat[$id];
        }
        return '';
        // foreach($cat as $k => $v)
        // if($id == $k)
        // {
        //     return $v;
        // }        
    }

}