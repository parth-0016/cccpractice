<?php

class Sales_Block_Order_Success extends Core_Block_Template
{
    public function __construct()
    {
        $this->setTemplate('sales/orderSuccess.phtml');
    }

    public function getCustomerOrder()
    {
        $customerId = Mage::getSingleton('core/session')->get('logged_in_customer_id');
        return Mage::getModel('sales/order')
            ->getCollection()->addFieldToFilter('customer_id', $customerId);
    }

    public function getOrderId()
    {
        $quote = Mage::getSingleton('core/session')->get('quote_id');
        $orderId = Mage::getModel('sales/quote')->load($quote)->getOrderId();
        if ($orderId) {
            return $orderId;
        }
        header("Location: " . Mage::getBaseUrl(''));
    }

    public function getOrder($id)
    {
        return Mage::getModel('sales/order')->load($id);
    }

    public function getPayMethod($id)
    {
        return Mage::getModel('sales/order_payment')->load($id);
    }
    public function getShipAdd($id)
    {
        return Mage::getModel('sales/order_shipping')->load($id);
    }
}