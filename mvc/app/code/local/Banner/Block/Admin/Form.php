<?php

class Banner_Block_Admin_Form extends Core_Block_Template
{
    public function __construct()
    {
        $this->setTemplate('banner/admin/form.phtml');
    }

    public function getBanner()
    {
        $bannerModel = Mage::getModel('banner/banner');
        $id = $this->getRequest()->getParams('id');
        if ($id != '')
        {
            $bannerModel->load($id);
        }
        return $bannerModel;
    }
}