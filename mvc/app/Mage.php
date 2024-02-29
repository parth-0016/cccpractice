<?php

class Mage
{
    private static $registry = [];
    private static $_singleTon = [];
    private static $baseDir = '/Applications/XAMPP/xamppfiles/htdocs/practice/mvc';
    private static $baseUrl = 'http://localhost/practice/mvc/';
    public static function init()
    {
        $frontController = new Core_Controller_Front();
        $frontController->init();
        // $obj= new Core_Model_Request();
        // $obj=Mage::getModel("core/request");   //only this is passed in get model so whole url is not replaced with model
        // $url=$obj->getRequestUri();
        // echo $url;
    }

    public static function getSingleton($className)
    {
        if (isset($_singleTon[$className])) {
            return self::$_singleTon[$className];
        } else {
            return self::$_singleTon[$className] = self::getModel($className);
        }
    }

    public static function getModel($className)
    {
        $className = "" . ucwords(str_replace("/", "_Model_", $className), "_");
        return new $className();
    }

    public static function getBlock($className)
    {
        $className = "" . ucwords(str_replace("/", "_Block_", $className), "_");
        return new $className();
    }

    public static function register($key, $value)
    {
        self::$registry[$key] = $value;
    }

    public static function getBaseDir($subDir = null)
    {
        if ($subDir) {
            return self::$baseDir . '/' . $subDir;
        }
        return self::$baseDir;
    }

    public static function getBaseUrl($subUrl = null)
    {
        if ($subUrl) {
            return self::$baseUrl . $subUrl;
        }
        return self::$baseUrl;
    }
}

?>