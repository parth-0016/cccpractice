<?php
class Core_Model_DB_Adapter
{
    public $config = [
        "db" => "ccc_project",
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
        // return $this->connect;
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
        $this->connect();
        $sql = mysqli_query($this->connect, $query);
        // echo $query;
        // print_r($sql);
        // die;
        if ($sql) {
            // echo 546546456;
            // echo "Data Update Succsessfully!";
            return mysqli_insert_id($this->connect);
        } else {
            echo 1233;
            return FALSE;
        }


    }

    public function update($query)
    {
        $this->connect();
        $sql = mysqli_query($this->connect, $query);
        if ($sql) {
            echo "<script>alert('Data Edited Successfully')</script>";
        } else {
            return FALSE;
        }
    }

    public function delete($query)
    {
        $this->connect();
        $sql = mysqli_query($this->connect, $query);
        if ($sql) {
            echo "<script>alert('Data Delete Successfully')</script>";
        } else {
            return FALSE;
        }
    }

    public function query($query)
    {

    }

}