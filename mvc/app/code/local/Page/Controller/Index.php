<?php

class Page_Controller_Index extends Core_Controller_Front_Action
{
    public function indexAction()
    {
        // echo '<pre>';
        $layout = $this->getLayout();
        // $layout->getChild('head')
        //     ->addCss('header.css');
        // $layout->getChild('head')
        //     ->addCss('footer.css');
        $layout->getChild('head')
            ->addCss('productForm.css');
        
        // $layout->getChild('head')->addJs('js/navigation.js');
        // $layout->getChild('head')->addJs('js/page.js');
        // $layout->getChild('head')->addCss('js/navigation.js');
        // $layout->getChild('head')->addCss('js/page.js');

        $banner = $layout->createBlock('core/template')
                        ->setTemplate('banner/banner.phtml');
        $layout->getChild('content')
            ->addChild('banner',$banner)
            ->addChild('banner1', $banner);

        // print_r($layout->getChild('head'));
        $layout->toHtml();
        // print_r($layout);
    }

}