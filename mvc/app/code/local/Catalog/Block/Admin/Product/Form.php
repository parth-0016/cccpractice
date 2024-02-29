<?php

class Catalog_Block_Admin_Product_Form extends Core_Block_Template
{
    public function __construct()
    {
        $this->setTemplate('catalog/admin/product/form.phtml');
    }

    public function getProduct()
    {
        $productModel = Mage::getModel('catalog/product');
        $id = $this->getRequest()->getParams('id');
        if ($id != '')
            $productModel->load($id);

        return $productModel;
    }

    public function getCategory()
    {
        $categoryModel = Mage::getModel('catalog/category')->getCollection();
        // $id = $this->getRequest()->getParams('category_id');
        // if ($id != '')
        //     $categoryModel->load($id);s
        return $categoryModel;
    }    
}