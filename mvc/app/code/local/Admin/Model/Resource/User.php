<?php
class Admin_Model_Resource_User extends Core_Model_Resource_Abstract
{
    public function __construct()
    {
        $this->init('admin', 'admin_id');
    }
    public function init($tableName, $primaryKey)
    {
        $this->_tableName = $tableName;
        $this->_primaryKey = $primaryKey;
    }
}