<?php
include 'connection.php';
class QueryString{
    public function updateQueryString($t, $data, $wh)
    {
        $columns = $whereCon =[];
        foreach ($data as $feild => $value) {
            $columns[] = "`$feild` = '$value'";
        }
        foreach ($wh as $feild => $value) {
            $whereCon[] = "`$feild` = '$value'";
        }
        $columns = implode(", ", $columns);
        $whereCon = implode(" AND ", $whereCon);

        return "UPDATE {$t} SET {$columns} WHERE {$whereCon};";
    }

    public function insertQueryString($t, $data)
    {
        $columns = $values = [];
        foreach ($data as $feild => $val) {
            $columns[] = "`$feild`";
            $values[] = "'$val'";
        }
        $colStr = implode(", ", $columns);
        $valStr = implode(", ", $values);

        return "INSERT INTO $t($colStr) VALUES($valStr)";
    }

    public function deleteQueryString($t, $wh)
    {
        foreach ($wh as $feild => $value) {
            $whereCol[] = "`$feild` = '$value'";
        }
        $whereColSrt = implode(" AND ", $whereCol);

        return "DELETE FROM {$t} WHERE {$whereColSrt}";
    }

    public function selectQueryString($t, $col = ['*'], $wh=[])
    {
        $colStr = implode(", ", $col);
        $where=$sel=[];
        foreach ($wh as $feild => $value) {
            $where[] = "`$feild` = '$value'";
        }
        $whereStr = implode(", ", $where);
        $sel = "SELECT {$colStr} FROM {$t}";

        if (!empty($wh)) {
            $sel .= " WHERE ({$whereStr});";
        }
        return $sel;
    }
}

class QueryExecution{
    
    public function executeQuery($conn, $query){
        $result = mysqli_query($conn, $query);
        if($result == false){
            echo "Kuch error h bhai <br>";
            echo mysqli_error($conn);
        }else{
            return $result;
        }
    }

    public function fetchRecords($result){
        $data = [];
        while($row=mysqli_fetch_assoc($result)){
            $data = $row;
        }
        return $data;
    }
}

?>