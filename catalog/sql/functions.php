<?php

function update($t, $data, $wh)
{
    foreach ($data as $feild => $value) {
        $columns[] = "`$feild` = '$value'";
    }
    foreach ($wh as $feild => $value) {
        $whereCon[] = "`$feild` = '$value'";
    }
    $columns = implode(", ", $columns);
    $whereCon = implode(" AND ", $whereCon);

    $updVar = "UPDATE {$t} SET {$columns} WHERE {$whereCon};";
    return $updVar;
}
// update('asd', ['name' => 'Parth', 'feild' => 'value'], ['id' => 7, 'email' => 'parth@.com']);

function insert($t, $data)
{
    $columns = $values = [];
    foreach ($data as $feild => $val) {
        $columns[] = "`$feild`";
        $values[] = "'$val'";
    }
    $colStr = implode(", ", $columns);
    $valStr = implode(", ", $values);

    $inser = "INSERT INTO $t($colStr) VALUES($valStr)";
    return $inser;
}
// function insert($table, $data)
// {
//     $columns = [];
//     $values = [];
//     foreach ($data as $col => $val) {
//         $columns[] = "$col";
//         $values[] = "'" . addslashes($val) . "'";
//     }
//     $columns = implode(",", $columns);
//     $values = implode(",", $values);
//     return "INSERT INTO {$table} ({$columns}) VALUES ({$values})";
// }
// insert('asd', ['name' => 'parth', 'fvfggb'=>'refffb']);

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
$select = select('dds', ['*'], ['dssdd' => 'dsds']);
// echo $select;
