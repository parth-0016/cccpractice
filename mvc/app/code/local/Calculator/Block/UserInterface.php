<?php

class Calculator_Block_UserInterface extends Core_Block_Template
{
    public function __construct()
    {
        $this->setTemplate('calculator/2column.phtml');
    }

    public function getCal()
    {
        $calcModel = Mage::getModel('calculator/calculator');
        $id = $this->getRequest()->getParams('calc');
        if ($id != '')
            $calcModel->load($id);
        // echo "<pre>";
        // var_dump($productModel);
        return $calcModel;
    }
}