<?php

class Admin_Controller_Banner extends Core_Controller_Admin_Action
{
    protected $_allowedAction = [];
    public function formAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')
            ->addCss('header.css');

        $child = $layout->getChild('content');
        $bannerForm = $layout->createBlock('banner/admin_form');
        $child->addChild('form', $bannerForm);
        $layout->toHtml();
    }

    public function saveAction()
    {
        echo "<pre>";
        $data = $this->getRequest()->getParams('banner');
        $fileName = $_FILES['banner']['name']['banner_image'];
        $data['banner_image'] = $fileName;
        move_uploaded_file($_FILES['banner']['tmp_name']['banner_image'], Mage::getBaseDir('media/banner/') . $fileName);
        // echo Mage::getBaseDir('media/banner/') . $fileName;
        $banner = Mage::getModel('banner/banner')
            ->setData($data)
            ->save();
        $loc = Mage::getBaseUrl('admin/banner/list');
        header("Location: $loc");
        // print_r($_FILES);
    }

    public function deleteAction()
    {
        $id = $this->getRequest()->getParams("id");
        $product = Mage::getModel("banner/banner")->load($id);
        $product->delete();
        $loc = Mage::getBaseUrl('admin/banner/list');
        header("Location: $loc");
    }

    public function listAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')->addCss('banner/list.css');
        $child = $layout->getChild('content');
        $bannerList = $layout->createBlock('banner/admin_list');
        $child->addChild('list', $bannerList);
        $layout->toHtml();
    }

}