<?php

// include 'SQLfunctions.php';

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
// if (isset($_POST['submit'])) {
//     // echo "abcde";
//     // var_dump($_POST);
//     $product_name = $_POST['group1']["product_name"];
//     $sku = $_POST['group1']['sku'];
//     $product_type = $_POST['group1']['product_type'];
//     $category = $_POST['group1']['category'];
//     $manufacture_cost = $_POST['manufacturer_cost'];
//     $shipping_cost = $_POST['shipping_cost'];
//     $total_cost = $_POST['total_cost'];
//     $price = $_POST['price'];
//     $status = $_POST['status'];
//     $date_created = $_POST['created_at'];
//     $date_updated = $_POST['updated_at'];


    $servername = "localhost";
    $usrname = "root";
    $password = "";
    $database = "ccc_practice";

    $conn = mysqli_connect($servername, $usrname, $password, $database);
    if (!$conn) {
        echo " not Connected";
    } else {
        // $sql = "INSERT INTO `ccc_product` (`product_name`, `sku`, `product_type`, `category`, `manufacture_cost`, `shipping_cost`, `total_cost`, `price`, `status`, `date_created`, `date_updated`) VALUES ('$product_name', '$sku', '$product_type', '$category', '$manufacture_cost', '$shipping_cost', '$total_cost', '$price', '$status', '$date_created', '$date_updated')";

        // $result = mysqli_query($conn, $sql);
        // if ($result) {
        //     echo "Submitted";
        // } else {
        //     echo "Not submmitted";
        // }
        // echo "Connected";
    }
// }

// grouping practice  -  array format of data
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     echo '<pre>';
//     $eleArr = $_POST['group1'];
//     print_r($eleArr);
// }