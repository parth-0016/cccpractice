<?php

class Admin_Controller_Catalog_Product extends Core_Controller_Front_Action
{
    // public function __construct(){
    //     $form = $this->createBlock('catalog/admin_product');
    //     $this->addChild('form', $form);
    // }
    public function formAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')
            ->addCss('header.css');
        $layout->getChild('head')
            ->addCss('footer.css');
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
    }

    public function deleteAction()
    {
        $id = $this->getRequest()->getParams("id");
        $product = Mage::getModel("catalog/product")
                                ->load($id);
        $product->delete($id);
    }

    public function listAction(){
        $layout = $this->getLayout();
        $child = $layout->getChild('content');

        $productForm = $layout->createBlock('catalog/admin_product_list')
                            ->setTemplate('catalog/admin/list.php');    
        $child->addChild('list', $productForm);
        
        $layout->toHtml();
    }

}