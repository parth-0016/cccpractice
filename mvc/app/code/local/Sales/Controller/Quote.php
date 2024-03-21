<?php

class Sales_Controller_Quote extends Core_Controller_Front_Action
{
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
        Mage::getSingleton('sales/quote')->addAddress($addressInfo);

        $shippingInfo = $this->getRequest()->getParams('quote_shipping');
        $shippingObject = Mage::getSingleton('sales/quote')->addShipping($shippingInfo);
        Mage::getSingleton('sales/quote')->addShippingId($shippingObject->getId());

        $paymentInfo = $this->getRequest()->getParams('quote_payment');
        $paymentObject = Mage::getSingleton('sales/quote')->addPayment($paymentInfo);
        Mage::getSingleton('sales/quote')->addPaymentId($paymentObject->getId());

        Mage::getSingleton('sales/quote')->convert();

        // Mage::getSingleton('core/session')->remove('quote_id');

        $this->setRedirect('sales/order/success');
    }

}