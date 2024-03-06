<?php

class Calculator_Controller_Calculator extends Core_Controller_Front_Action
{

    public function formAction()
    {
        $layout = $this->getLayout();

        $layout->getChild('head')
            ->addCss('product/productForm.css');

        $child = $layout->getChild('content');

        $productForm = $layout->createBlock('calculator/userInterface');
        $child->addChild('form', $productForm);
        $layout->toHtml();
    }

    public function saveAction()
    {
        echo 23232;
        echo "<pre>";
        $data = $this->getRequest()->getParams('calc');
        // echo 11111;
        // print_r($data);
        $product = Mage::getModel('calculator/calculator')
            ->setData($data)
            ->save();
        print_r($product);
        $loc = Mage::getBaseUrl('calculator/calculator/form');
        header("Location: $loc");
    }
}