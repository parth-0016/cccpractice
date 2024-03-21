<?php 

class Order_Controller_Order extends Core_Controller_Front_Action{

    public function listAction(){

        $layout = $this->getLayout();
        $layout->getChild('head')
            ->addCss('order/list.css');

        $child = $layout->getChild('content');
        $orderList = $layout->createBlock('order/list');
        $child->addChild('orderList', $orderList);

        $layout->toHtml();
    }
}