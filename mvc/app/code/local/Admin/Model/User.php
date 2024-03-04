<?php

class Admin_Model_User extends Core_Model_Abstract
{
    public function init()
    {
        $this->_resourceClass = 'Admin_Model_Resource_User';
        $this->_collectionClass = 'Admin_Model_Resource_Collection_User';
        $this->_modelClass = 'admin/user';
    }
}