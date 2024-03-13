<?php

class Cart_Controller_Checkout extends Core_Controller_Front_Action
{
    public function viewAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')
            ->addCss('header.css')
            ->addCss('cart/view.css');

        $child = $layout->getChild('content');
        $viewCart = $layout->createBlock('cart/cart');
        $child->addChild('viewCart', $viewCart);

        $layout->toHtml();
    }

    public function checkoutAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')
            ->addCss('header.css')
            ->addCss('cart/view.css')
            ->addCss('cart/checkout.css');

        $child = $layout->getChild('content');
        $viewCart = $layout->createBlock('cart/checkout');
        $child->addChild('viewCart', $viewCart);

        $layout->toHtml();
    }

}