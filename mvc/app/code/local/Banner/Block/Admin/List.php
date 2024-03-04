<?php

class Banner_Block_Admin_List extends Core_Block_Template
{

    public function __construct()
    {
        $this->setTemplate('banner/admin/list.phtml');
    }

    public function getBanner()
    {
        return Mage::getModel('banner/banner')->getCollection();
    }

    public function getImage($img)
    {
        return Mage::getBaseUrl('media/banner') . '/' . $img;
    }

}