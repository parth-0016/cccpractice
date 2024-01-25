<?php

include 'conn.php';

function rec($conn){
    $query = "SELECT * FROM ccc_product ORDER BY sno DESC LIMIT 10";
    $result = mysqli_query($conn, $query);

    if($result){
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }else{
        echo "Error";
    }
}

$records = rec($conn);

if(!empty($records)){
    foreach($records as $rec){
        if (isset($record['group1']['product_name'])) {
            echo 'Product Name: ' . $record['group1']['product_name'] . PHP_EOL;
        } else {
            echo 'Product Name: N/A' . PHP_EOL; // Print a default value if the key is not set
        }
    }
}else{
    echo "No recoeds found";
}

mysqli_close($conn);

?>