<?php

class Admin_Controller_Catalog_Product extends Core_Controller_Admin_Action
{
    public function formAction()
    {
        $layout = $this->getLayout();

        $layout->getChild('head')
            ->addCss('product/productForm.css');

        $child = $layout->getChild('content');

        $productForm = $layout->createBlock('catalog/admin_product_form');
        $child->addChild('form', $productForm);
        $layout->toHtml();

    }

    public function saveAction()
    {
        echo "<pre>";
        $data = $this->getRequest()->getParams('product');
        // echo 11111;
        // print_r($data);
        $product = Mage::getModel('catalog/product')
            ->setData($data)
            ->save();
        print_r($product);
        $loc = Mage::getBaseUrl('admin/catalog_product/list');
        header("Location: $loc");
    }

    public function deleteAction()
    {
        $id = $this->getRequest()->getParams("id");
        $product = Mage::getModel("catalog/product")
            ->load($id);
        $product->delete($id);
        $loc = Mage::getBaseUrl('admin/catalog_product/list');
        header("Location: $loc");
    }

    public function listAction()
    {
        $layout = $this->getLayout();
        $child = $layout->getChild('content');

        $layout->getChild('head')
            ->addCss('product/list.css');

        $productList = $layout->createBlock('catalog/admin_product_list');
        $child->addChild('list', $productList);

        $layout->toHtml();
    }

}