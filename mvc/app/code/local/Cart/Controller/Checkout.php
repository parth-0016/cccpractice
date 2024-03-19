<?php

class Cart_Controller_Checkout extends Core_Controller_Front_Action
{

    public function init()
    {
        if (!Mage::getSingleton('core/session')->get('logged_in_customer_id')) {
            $this->setRedirect('customer/account/login');
        }

        // $this->setRedirect('cart/checkout/checkout');
    }

    public function checkoutAction()
    {
        // if(Mage::getSingleton('core/session')->get('quote_id')){
        $layout = $this->getLayout();
        $layout->getChild('head')
            // ->addCss('header.css')
            ->addCss('cart/view.css')
            ->addCss('cart/checkout.css');

        $child = $layout->getChild('content');
        $Checkout = $layout->createBlock('cart/checkout');
        $child->addChild('viewCart', $Checkout);

        $layout->toHtml();
        // }else{
        // $this->getRequest()->setRedirect('cart/index/view');
        // }
    }

}