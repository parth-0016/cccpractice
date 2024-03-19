<?php

class Page_Controller_Index extends Core_Controller_Front_Action
{
    public function indexAction()
    {
        // echo '<pre>';
        $layout = $this->getLayout();
        $layout->getChild('head')
            ->addCss('banner/index.css');

        $banner = $layout->createBlock('banner/admin_banner');
        $layout->getChild('content')
            ->addChild('banner', $banner);
        // ->addChild('banner1', $banner);
        // print_r($layout->getChild('head'));
        $layout->toHtml();
        // print_r($layout);
    }

}