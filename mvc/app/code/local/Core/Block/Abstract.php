<?php

class Core_Block_Abstract
{

    public $template;
    public $data = [];

    public function __get($key)
    {

    }

    public function __unset($key)
    {

    }

    public function __set($key, $value)
    {


    }

    public function addData($key, $value)
    {


    }

    public function getData($key = null)
    {
        // if ($key === null) {
        //     return $this->data;
        // }
        // return isset($this->data[$key]) ? $this->data[$key] : null;
    }

    public function setData($data)
    {
        // $this->data = $data;
    }

    // public function getUrl($action = null, $controller = null, $params = [], $resetParams = false)
    // {
    // }

    public function getUrl($path){
        return "http://localhost/practice/mvc/".$path;
    }

    public function getRequest()
    {

    }

    public function render()
    {
        include Mage::getBaseDir('app') . '/design/frontend/template/' . $this->getTemplate();
    }
}