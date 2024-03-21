<?php

class Sales_Controller_Order extends Core_Controller_Front_Action
{

    public function successAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')
            ->addCss('sales/success.css');

        $child = $layout->getChild('content');
        $success = $layout->createBlock('sales/order_success');
        $child->addChild('success', $success);

        $layout->toHtml();
    }
}