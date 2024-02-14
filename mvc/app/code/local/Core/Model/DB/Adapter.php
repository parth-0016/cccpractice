<?php
class Core_Model_DB_Adapter
{
    public $config = [
        "db" => "ccc_practice",
        "host" => "localhost",
        "password" => "",
        "user" => "root"
    ];
    public $connect = null;
    public function connect()
    {
        if (is_null($this->connect == null)) {
            $this->connect = mysql_connect(
                $this->config['host'],
                $this->config['user'],
                $this->config['password'],
                $this->config['db']
            );
        }
    }

    public function fetchAll($query)
    {

    }

    public function fetchPairs($query)
    {

    }

    public function fetchOne($query)
    {

    }

    public function fetchRow($query)
    {

    }

    public function insert($query)
    {

    }

    public function update($query)
    {

    }

    public function delete($query)
    {

    }

    public function query($query)
    {

    }

}