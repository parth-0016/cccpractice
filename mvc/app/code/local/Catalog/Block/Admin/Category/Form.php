<?php

class Catalog_Block_Admin_Category_Form extends Core_Block_Template
{
    public function __construct()
    {
        $this->setTemplate('catalog/admin/category/form.phtml');
    }

    public function getCategory()
    {
        $productModel = Mage::getModel('catalog/category');
        $id = $this->getRequest()->getParams('id');
        if ($id != '')
            $productModel->load($id);

        return $productModel;
    }
}