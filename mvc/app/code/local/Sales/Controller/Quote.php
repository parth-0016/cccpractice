<?php

class Sales_Controller_Quote extends Core_Controller_Front_Action
{
    public function getCss()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')
            ->addCss('header.css');
        // ->addCss('footer.css')
        // ->addCss('1columnMain.css');
    }

    // public function addAction()
    // {
    //     echo $this->getRequest()->getParams('id');
    //     echo "<br>";
    //     echo $this->getRequest()->getParams('qty');
    // }

    public function addAction()
    {
        $data = $this->getRequest()->getParams();
        $quote = Mage::getSingleton('sales/quote')->addProduct($data);
        $this->setRedirect('cart/checkout/view');
    }


    public function deleteAction()
    {
        $deleteId = $this->getRequest()->getParams('id');
        $quote = Mage::getSingleton('sales/quote')->removeProduct($deleteId);
        $this->setRedirect('cart/checkout/view');
    }

    public function updateAction()
    {
        $updateData = $this->getRequest()->getParams();
        $quote = Mage::getSingleton('sales/quote')->updateProduct($updateData);
        $this->setRedirect('cart/checkout/view');
    }

}