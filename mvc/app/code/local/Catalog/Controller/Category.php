<?php

class Catalog_Controller_Category extends Core_Controller_Front_Action
{
    public function viewAction()
    {
        $layout = $this->getLayout();
        // $this->getCss();

        $child = $layout->getChild('content');
        $viewProduct = $layout->createBlock('catalog/category_view');
        $child->addChild('viewProduct', $viewProduct);

        $layout->toHtml();
    }
}