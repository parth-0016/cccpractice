<?php

function update($t, $data, $wh)
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
// $dfff = update('asd', ['name' => 'Parth', 'feild' => 'value'], ['id' => 7, 'email' => 'parth@.com']);
// echo $dfff;

function insert($t, $data)
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

function delete($t, $wh)
{
    foreach ($wh as $feild => $value) {
        $whereCol[] = "`$feild` = '$value'";
    }
    $whereColSrt = implode(" AND ", $whereCol);

    return "DELETE FROM {$t} WHERE {$whereColSrt}";
}
// delete('asd', ['id'=>7,'email'=>'parth@.com']);

function select($t, $col = ['*'], $wh=[])
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
// $select = select('dds', ['*'], ['dssdd' => 'dsds']);
// echo $select;

function updateExecute($t, $data, $wh)
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

    $updateQuery = "UPDATE {$t} SET {$columns} WHERE {$whereCon};";
    $updateQueryResult = mysqli_query($conn, $updateQuery);
    return $updateQueryResult;
}

function insertExecute($t, $data)
{
    $columns = $values = [];
    foreach ($data as $feild => $val) {
        $columns[] = "`$feild`";
        $values[] = "'$val'";
    }
    $colStr = implode(", ", $columns);
    $valStr = implode(", ", $values);

    $insertQuery = "INSERT INTO $t($colStr) VALUES($valStr)";
    $insertQueryResult = mysqli_query($conn, $insertQuery);
    return $insertQueryResult;
}

function deleteExecute($t, $wh)
{
    foreach ($wh as $feild => $value) {
        $whereCol[] = "`$feild` = '$value'";
    }
    $whereColSrt = implode(" AND ", $whereCol);

    $deleteQuery = "DELETE FROM {$t} WHERE {$whereColSrt}";
    $deleteQueryResult = mysqli_query($conn, $deleteQuery);
    return $deleteQueryResult;
}

function selectExecute($t, $col = ['*'], $wh=[])
{
    $colStr = implode(", ", $col);
    $where=$sel=[];
    foreach ($wh as $feild => $value) {
        $where[] = "`$feild` = '$value'";
    }
    $whereStr = implode(", ", $where);

    $selectQuery = "SELECT {$colStr} FROM {$t}";

    if (!empty($wh)) {
        $selectQuery .= " WHERE ({$whereStr});";
    }

    $selectQueryResult = mysqli_query($conn, $selectQuery);
    return $selectQueryResult;
}