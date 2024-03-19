<?php

class Sales_Controller_Quote extends Core_Controller_Front_Action
{
    public function getCss()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')
            ->addCss('header.css')
            ->addCss('footer.css')
            ->addCss('1columnMain.css');
    }

    public function addAction()
    {
        $data = $this->getRequest()->getParams();
        $quote = Mage::getSingleton('sales/quote')->addProduct($data);
        $this->setRedirect('cart/index/view');
    }


    public function deleteAction()
    {
        $deleteId = $this->getRequest()->getParams('id');
        $quote = Mage::getSingleton('sales/quote')->removeProduct($deleteId);
        $this->setRedirect('cart/index/view');
    }

    public function updateAction()
    {
        $updateData = $this->getRequest()->getParams();
        $quote = Mage::getSingleton('sales/quote')->updateProduct($updateData);
        $this->setRedirect('cart/index/view');
    }

    public function saveAction()
    {
        echo "<pre>";
        $addressInfo = $this->getRequest()->getParams('quote_customer');
        // print_r($addressInfo);
        Mage::getSingleton('sales/quote')->addAddress($addressInfo);

        $shippingInfo = $this->getRequest()->getParams('quote_shipping');
        // print_r($shippingInfo);
        $shippingObject = Mage::getSingleton('sales/quote')->addShipping($shippingInfo);
        Mage::getSingleton('sales/quote')->addShippingId($shippingObject->getId());

        $paymentInfo = $this->getRequest()->getParams('quote_payment');
        // print_r($paymentInfo);
        $paymentObject = Mage::getSingleton('sales/quote')->addPayment($paymentInfo);
        Mage::getSingleton('sales/quote')->addPaymentId($paymentObject->getId());

        Mage::getSingleton('sales/quote')->convert();

        // Mage::getSingleton('core/session')->remove('quote_id');

    }

}