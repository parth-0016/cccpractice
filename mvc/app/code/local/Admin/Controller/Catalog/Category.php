<?php

class Admin_Controller_Catalog_Category extends Core_Controller_Admin_Action
{
    public function formAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')
            ->addCss('category/form.css');

        $child = $layout->getChild('content');

        $categoryForm = $layout->createBlock('catalog/admin_category_form');
        $child->addChild('category', $categoryForm);
        $layout->toHtml();
    }

    public function saveAction()
    {
        echo "<pre>";
        $data = $this->getRequest()->getParams('catalog_category');
        // echo 11111;
        // print_r($data);
        $product = Mage::getModel('catalog/category')
            ->setData($data)
            ->save();
        print_r($product);
        $loc = Mage::getBaseUrl('admin/catalog_category/list');
        header("Location: $loc");
    }
    public function listAction()
    {
        $layout = $this->getLayout();
        $child = $layout->getChild('content');

        $layout->getChild('head')
            ->addCss('category/list.css');

        $CategoryList = $layout->createBlock('catalog/admin_category_list');
        $child->addChild('list', $CategoryList);

        $layout->toHtml();
    }

    public function deleteAction()
    {
        $id = $this->getRequest()->getParams("id");
        $product = Mage::getModel("catalog/category")
            ->load($id);
        $product->delete($id);
        $loc = Mage::getBaseUrl('admin/catalog_category/list');
        header("Location: $loc");

    }
}