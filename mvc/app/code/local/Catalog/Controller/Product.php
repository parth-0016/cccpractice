<?php

class Catalog_Controller_Product extends Core_Controller_Front_Action
{
    public function viewAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')->addCss('catalog/product/view.css');

        $child = $layout->getChild('content');
        $viewProduct = $layout->createBlock('catalog/product_view');
        $child->addChild('viewProduct', $viewProduct);

        $layout->toHtml();
    }

}