<?php

class Cart_Controller_Checkout extends Core_Controller_Front_Action
{
    public function viewAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')->addCss('cart/view.css');

        $child = $layout->getChild('content');
        $viewCart = $layout->createBlock('cart/cart');
        $child->addChild('viewCart', $viewCart);

        $layout->toHtml();
    }

}