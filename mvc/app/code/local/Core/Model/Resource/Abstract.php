<?php

class Core_Model_Resource_Abstract
{
    protected $_tableName = "";
    protected $_primaryKey = "";

    public function init($tableName, $primaryKey)
    {
        $this->_tableName = $tableName;
        $this->_primaryKey = $primaryKey;
    }

    public function load($id, $column = null)
    {
        $sql = "SELECT * FROM {$this->_tableName} WHERE {$this->_primaryKey}= '{$id}' LIMIT 1";
        return $this->getAdapter()->fetchRow($sql);
    }

    public function save(Core_Model_Abstract $product)
    {
        $data = $product->getData();
        // $id = Mage::getModel('core/request')->getParams('id');
        // print_r($data);

        if (isset($data[$this->getPrimaryKey()]) && !empty($data[$this->getPrimaryKey()])) {
            unset($data[$this->getPrimaryKey()]);
            $sql = $this->updateSql(
                $this->getTableName(),
                $data,
                [$this->getPrimaryKey() => $product->getId()]
            );
            // echo $sql;
            $id = $this->getAdapter()->update($sql);
        } else {
            $sql = $this->insertSql($this->getTableName(), $data);
            $id = $this->getAdapter()->insert($sql);
            $product->setId($id);
        }
        // print_r($product);
    }

    public function insertSql($tbname, $data)
    {
        $columns = $values = [];
        // echo 4342342;
        // print_r($data);
        foreach ($data as $key => $val) {
            $columns[] = "`{$key}`";
            $values[] = "'" . addslashes($val) . "'";
        }
        $columns = implode(" , ", $columns);
        $values = implode(" , ", $values);

        return "INSERT INTO {$tbname} ({$columns}) VALUES ({$values});";
    }

    public function updateSql($tablename, $data, $where)
    {
        $coloumns = $whereCond = [];

        foreach ($data as $_field => $_value) {
            $coloumns[] = "`{$_field}`= " . "'" . ($_value) . "'";
        }
        $coloumns = implode(", ", $coloumns);

        foreach ($where as $_field => $_value) {
            $whereCond[] = "`$_field` = " . "'" . ($_value) . "'";
        }
        $whereCond = implode(" AND ", $whereCond);
        return "UPDATE {$tablename} SET {$coloumns} WHERE {$whereCond}";

        // echo "Your Data is Updated Successfully";
    }

    public function delete(Core_Model_Abstract $abstract)
    {
        $where = [$this->getPrimaryKey() => $abstract->getId()];
        $sql = $this->deleteSql($this->getTableName(), $where);
        $id = $this->getAdapter()->delete($sql);
    }

    public function deleteSql($table, $where)
    {
        foreach ($where as $key => $_value) {
            $whereClause[] = "`$key` = '" . addslashes($_value) . "'";
        }
        $whereClause = implode(" AND ", $whereClause);
        return "DELETE FROM {$table} WHERE {$whereClause}";
    }

    public function getAdapter()
    {
        return new Core_Model_DB_Adapter();
    }
    //above part is abstract

    public function getPrimaryKey()
    {
        return $this->_primaryKey;
    }
    public function getTableName()
    {
        return $this->_tableName;
    }
}