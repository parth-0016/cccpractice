<?php

class Sales_Model_Quote extends Core_Model_Abstract
{
    public function init()
    {
        $this->_resourceClass = 'Sales_Model_Resource_Quote';
        $this->_collectionClass = 'Sales_Model_Resource_Collection_Quote';
        $this->_modelClass = 'sales/quote';
    }

    public function initQuote()
    {
        $quoteId = Mage::getSingleton('core/session')->get('quote_id');
        if (!empty ($quoteId)) {
            $this->load($quoteId);
            // print_r($this);
        }
        if (!$this->getId()) {
            $quote = Mage::getModel('sales/quote')
                ->setData(["tax_percent" => 10, "grand_total" => 0])
                ->save();
            Mage::getSingleton('core/session')->set('quote_id', $quote->getId());
            $quoteId = $quote->getId();
            $this->load($quoteId);
        }
    }

    public function getItemCollection()
    {
        return Mage::getModel('sales/quote_item')->getCollection()
            ->addFieldToFilter('quote_id', $this->getId());
    }

    protected function _beforeSave()
    {
        $grandTotal = 0;
        foreach ($this->getItemCollection()->getData() as $_item) {
            $grandTotal += $_item->getRowTotal();
        }
        if ($this->getTaxPercent()) {
            $tax = round($grandTotal / $this->getTaxPercent(), 2);
            $grandTotal = $grandTotal + $tax;
        }
        $this->addData('grand_total', $grandTotal);
    }


    public function addProduct($request)
    {
        $this->initQuote();
        if ($this->getId()) {
            Mage::getModel('sales/quote_item')->addItem($this, $request['id'], $request['qty']);
        }
        $this->save();
    }

    public function removeProduct($itemId)
    {
        $this->initQuote();

        if ($this->getId()) {
            $itemModel = Mage::getModel('sales/quote_item')->load($itemId);
            $itemModel->delete();
            $this->save();
        }
    }

    public function updateProduct($updateData)
    {
        $this->initQuote();

        if ($this->getId()) {
            $itemData = Mage::getModel('sales/quote_item')->load($updateData['item_id']);
            $itemData->addData('qty', $updateData['new_qty']);
            $itemData->save();
            $this->save();
        }
    }

    public function addAddress($address)
    {
        $this->initQuote();

        if ($this->getId()) {
            $id = Mage::getSingleton('core/session')->get('logged_in_customer_id');
            $email = Mage::getModel('customer/account')->load($id)->getCustomerEmail();
            return Mage::getModel('sales/quote_customer')
                ->setData($address)
                ->addData('quote_id', $this->getId())
                ->addData('customer_id', $id)
                ->addData('email', $email)
                ->save();
            // print_r($data);
        }
    }

    public function addShipping($shipping)
    {
        $this->initQuote();

        if ($this->getId()) {
            return Mage::getModel('sales/quote_shipping')
                ->setData($shipping)
                ->addData('quote_id', $this->getId())
                ->save();
        }
    }

    public function addPayment($payment)
    {
        $this->initQuote();

        if ($this->getId()) {
            return Mage::getModel('sales/quote_payment')
                ->setData($payment)
                ->addData('quote_id', $this->getId())
                ->save();
        }
    }

    public function addShippingId($id)
    {
        $this->initQuote();

        if ($this->getId()) {
            $this->addData('shipping_id', $id)
                ->save();
        }
    }

    public function addPaymentId($id)
    {
        $this->initQuote();
        if ($this->getId()) {
            $this->addData('payment_id', $id)
                ->save();
        }
    }

    public function convert()
    {
        $this->initQuote();
        if ($this->getId()) {
            $order = $this->convertQuoteToOrder();
            $orderId = $order->getId();
            $address = $this->convertQuoteAddToOrderAdd($orderId);
            $item = $this->convertItemCollection($orderId);
            $payment = $this->convertPayment($orderId);
            $shipping = $this->convertShipping($orderId);
            $this->addData('order_id', $order->getId())->save();

            Mage::getSingleton('sales/order')->setPayAndShip();
        }
    }

    public function convertQuoteToOrder()
    {
        echo "<pre>";
        print_r($this->getData());
        if (
            Mage::getModel('sales/order')
                ->setData($this->getData())
        ) {
            echo "success";
        } else {
            echo "fail";
        }
        return Mage::getModel('sales/order')
            ->setData($this->getData())
            ->removeData('quote_id')
            ->removeData('order_id')
            ->removeData('payment_id')
            ->removeData('shipping_id')
            ->save();
    }
    public function convertQuoteAddToOrderAdd($orderId)
    {
        if ($this->getId()) {

            $data = Mage::getModel('sales/quote_customer')
                ->getCollection()
                ->addFieldToFilter('quote_id', $this->getId())
                ->getFirstItem();
            return Mage::getModel('sales/order_customer')
                ->setData($data->getData())
                ->removeData('quote_customer_id')
                ->removeData('quote_id')
                ->addData('order_id', $orderId)
                ->save();
        }
    }
    public function convertItemCollection($orderId)
    {
        foreach ($this->getItemCollection()->getData() as $_item) {
            Mage::getModel('sales/order_item')
                ->setData($_item->getData())
                ->removeData('item_id')
                ->removeData('quote_id')
                ->addData('order_id', $orderId)
                ->save();
        }
        return $this;
    }


    public function convertPayment($orderId)
    {
        if ($this->getId()) {
            $data = Mage::getModel('sales/quote_payment')
                ->getCollection()
                ->addFieldToFilter('quote_id', $this->getId())
                ->getFirstItem();
            return Mage::getModel('sales/order_payment')
                ->setData($data->getData())
                ->removeData('payment_id')
                ->removeData('quote_id')
                ->addData('order_id', $orderId)
                ->save();
        }
    }

    public function convertShipping($orderId)
    {
        if ($this->getId()) {
            $data = Mage::getModel('sales/quote_shipping')
                ->getCollection()
                ->addFieldToFilter('quote_id', $this->getId())
                ->getFirstItem();
            return Mage::getModel('sales/order_shipping')
                ->setData($data->getData())
                ->removeData('shipping_id')
                ->removeData('quote_id')
                ->addData('order_id', $orderId)
                ->save();
        }
    }
}