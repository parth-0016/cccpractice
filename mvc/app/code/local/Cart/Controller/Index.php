<?php

class Cart_Controller_Index extends Core_Controller_Front_Action
{
    public function viewAction()
    {
        // if(Mage::getSingleton('core/session')->get('quote_id')){
        $layout = $this->getLayout();
        $layout->getChild('head')
            ->addCss('cart/view.css');

        $child = $layout->getChild('content');
        $viewCart = $layout->createBlock('cart/cart');
        $child->addChild('viewCart', $viewCart);

        $layout->toHtml();
        // }else{
        //     $layout = $this->getLayout();
        //     $layout->getChild('head')
        //         ->addCss('header.css')
        //         ->addCss('cart/view.css');

        //     $child = $layout->getChild('content');
        //     $viewEmptyCart = $layout->createBlock('cart/emptyCart');
        //     $child->addChild('viewCart', $viewEmptyCart);

        //     $layout->toHtml();
        // }
    }
}