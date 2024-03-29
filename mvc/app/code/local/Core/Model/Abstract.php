<?php

class Core_Model_Abstract
{
    protected $_data = [];
    protected $_resourceClass = '';
    protected $_collectionClass = '';
    protected $_resource = null;
    protected $_collection = null;
    protected $_modelClass = null;
    public function __construct()
    {
        $this->init();
    }

    public function init()
    {

    }

    public function setResourceClass($resourceClass)
    {

    }
    public function setCollectionClass($collectionClass)
    {

    }
    public function setId($id)
    {
        $this->_data[$this->getResource()->getPrimaryKey()] = $id;
    }
    public function getId()
    {
        // $this->getResource();
        return $this->_data[$this->getResource()->getPrimaryKey()];
    }
    public function getResource()
    {
        // $modelClass = get_class($this);
        // $class = substr($modelClass, 0, strpos($modelClass, '_Model_') + 6) . '_Resource_' . substr($modelClass, strpos($modelClass, '_Model_') + 7);
        // return new $class;
        return new $this->_resourceClass();
        // return $this;
    }

    // public function getCollection()
    // {
    //     return new $this->_collectionClass;
    // }

    public function getCollection()
    {
        $collection = new $this->_collectionClass();
        $collection->setResource($this->getResource());
        $collection->setModelClass($this->_modelClass);
        $collection->select();
        return $collection;
    }
    public function getTableName()
    {

    }
    public function camelCase2UnderScore($str, $separator = "_")
    {
        if (empty($str)) {
            return $str;
        }
        $str = lcfirst($str);
        $str = preg_replace("/[A-Z]/", $separator . "$0", $str);
        return strtolower($str);
    }
    public function __call($method, $args) //magic method for sku productname 
    {
        $name = $this->camelCase2UnderScore(substr($method, 3));
        return isset($this->_data[$name])
            ? $this->_data[$name]
            : '';
    }
    public function __set($key, $value)
    {

    }
    public function __get($key)
    {

    }
    public function __unset($key)
    {

    }
    public function getData($key = null)
    {
        return $this->_data;
    }
    public function setData($data)
    {
        $this->_data = $data;
        return $this;
    }
    public function addData($key, $value)
    {
        $this->_data[$key] = $value;
        return $this;
    }
    public function removeData($key = null)
    {
        if ($key === null) {
            $this->_data = array(); // Remove all data
        } else {
            unset($this->_data[$key]); // Remove specific key-value pair
        }
        return $this;
    }

    protected function _beforeSave()
    {

    }
    protected function _afterSave()
    {

    }
    public function save()
    {
        $this->_beforeSave(); 
        $this->getResource()->save($this); //getResource resource no object apse
        $this->_afterSave();
        return $this;
    }
    
    // public function save()
    // {
    //     $this->getResource()->save($this);
    //     return $this;
    // }
    
    public function load($id, $column = null)
    {
        // print_r($this->getResource());
        $this->_data = $this->getResource()->load($id, $column);
        return $this;
    }

    public function delete()
    {
        if($this->getId()){
            $this->getResource()->delete($this);
        }
        return $this;
    }

}