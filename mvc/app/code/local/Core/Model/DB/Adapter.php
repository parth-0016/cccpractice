<?php
class Core_Model_DB_Adapter
{
    public $config = [
        "db" => "ccc_practice",
        "host" => "localhost",
        "password" => "",
        "user" => "root",
    ];
    public $connect = null;
    public function connect()
    {
        if (is_null($this->connect)) {
            $this->connect = mysqli_connect(
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
        $row = [];
        $this->connect();
        // var_dump($this->connect);
        $result = mysqli_query($this->connect, $query);
        while ($_row = mysqli_fetch_assoc($result)) {
            $row = $_row;
        }
        return $row;
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