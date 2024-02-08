<?php

class Mage
{

    public static function init()
    {
        // $coreModel = new Core_Model_Request();
        // echo $coreModel->getRequestUri();
        // $request = Mage::getModel("core/request");
        $frontObj = new Core_Controller_Front();
        // $request = $getClassName->getRequestUri();
        // $frontController = new Core_Block_Controller_Front();
        echo $frontObj->init();
        // echo $getClassName;
    }

    public static function getModel($className)
    {
        $model = ucwords(str_replace('/', '_Model_', $className), '_');
        return new $model;
    }

    public static function getSingleton($className)
    {

    }

    public static function register($key, $value)
    {

    }

    public static function registry($key)
    {

    }

    public static function getBaseDir($subDir = null)
    {

    }
}

?>