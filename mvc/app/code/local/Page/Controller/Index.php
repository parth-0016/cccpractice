<?php

class Page_Controller_Index extends Core_Controller_Front_Action
{
    public function indexAction()
    {
        // echo '<pre>';
        $layout = $this->getLayout();
        $layout->getChild('head');
        $layout->getChild('head')->addJs('js/navigation.js');
        $layout->getChild('head')->addJs('js/page.js');
        $layout->getChild('head')->addCss('js/navigation.js');
        $layout->getChild('head')->addCss('js/page.js');
        // print_r($layout->getChild('head'));
        $layout->toHtml();
        // print_r($layout);
        die;
    }

}