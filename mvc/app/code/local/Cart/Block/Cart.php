<?php

class Cart_Block_Cart extends Core_Block_Template
{

    public function __construct()
    {
        $this->setTemplate('cart/cart.phtml');
    }

    public function getItemData()
    {
        return Mage::getModel('sales/quote_item')->getCollection();
    }

    public function getProduct($id)
    {
        return Mage::getModel('catalog/product')->load($id);
    }

    public function getQuoteData($quoteId)
    {
        return Mage::getModel('sales/quote')->load($quoteId);
    }
}