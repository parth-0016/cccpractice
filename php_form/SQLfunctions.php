<?php

function update($t, $data, $wh){
foreach($data as $feild => $value){
$columns[]="`$feild` = '$value'";
}
foreach($wh as $feild => $value){
$whereCon[] = "`$feild` = '$value'";
}
$columns = implode(", ",$columns);
$whereCon = implode(" AND ", $whereCon);
echo "UPDATE {$t} SET {$columns} WHERE {$whereCon};";
}
// update('asd', ['name'=>'Parth', 'feild'=>'value'], ['id'=>7,'email'=>'parth@.com']);

function insert($t, $data){
    foreach($data as $feild => $value){
        $columns[] = "`$feild`";
        $values[] = "'$value'";
    }

    $colStr = implode(", ", $columns);
    $valStr = implode(", ", $values);

    echo "INSERT INTO {$t} ({$colStr}) VALUES ({$valStr})";
}
insert('asd', ['name' => 'parth', 'fvfggb'=>'refffb']);

function delete($t, $wh){
    foreach($wh as $feild => $value){
        $whereCol[] = "$feild = '$value'"; 
    }

    $whereColSrt = implode(" AND ", $whereCol);

    echo "DELETE FROM {$t} WHERE {$whereColSrt}";
}
// delete('asd', ['id'=>7,'email'=>'parth@.com']);

die;    
?>