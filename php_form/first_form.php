<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <h1>Production Form</h1>
    <form method="post">
        <label>Product Name</label>
        <input type="text" name="product_name"><br><br>

        <label>SKU</label>
        <input type="text" name="sku"><br><br>

        <label>Product Type</label>
        <input type="radio" name="product_type" value="Simple" id="simple" checked>
        <label for="simple">Simple</label>
        <input type="radio" name="product_type" value="Bundle" id="bundle">
        <label for="bundle">Bundle</label><br><br>

        <label>Category:</label>
        <select name="category" id="category">
            <option value="bar&game_room">Bar & Game Room</option>
            <option value="bedroom">Bedroom</option>
            <option value="decor">Decor</option>
            <option value="dining&kitchen">Dining & Kitchen</option>
            <option value="lightning">Lightning</option>
            <option value="living_room">Living Room</option>
            <option value="mattresses">Mattresses</option>
            <option value="office">Office</option>
            <option value="outddor">Outdoor</option>
        </select><br><br>

        <label>Manufacturer Cost</label>
        <input type="text" name="manufacturer_cost" id="manufacture_cost"><br><br>

        <label>Shipping Cost</label>
        <input type="text" name="shipping_cost" id="shipping_cost"><br><br>

        <label>Total Cost</label>
        <input type="text" name="total_cost" id="total_cost"><br><br>

        <label for="price">Price</label>
        <input type="text" name="price" id="price"><br><br>

        <label for="status">Status:</label>
        <select name="status" id="status">
            <option value="enabled">Enabled</option>
            <option value="disabled">Disabled</option>
        </select><br><br>

        <label for="created_at">Created at</label>
        <input type="date" name="created_at" id="created_at"><br><br>

        <label for="updated_at">Updated at</label>
        <input type="date" name="updated_at" id="updated_at"><br><br>

        <!-- <button type="submit">Submit</button> -->
        <input type="submit" name="submit"><br><br>

    </form>

</body>

</html>

<?php

use function PHPSTORM_META\type;

// function update($t, $data, $wh){
//     foreach($data as $feild => $value){
//         $columns[]="`$feild` = '$value'";
//     }
//     foreach($wh as $feild => $value){
//         $whereCon[] = "`$feild` = '$value'";
//     }
//     implode(",",$columns);
//     implode("AND", $whereCon);
//     echo "UPDATE {$t} SET {$columns} WHERE {$whereCon}";
// }

// update('asd', ['name'=>'Parth', 'sdhsgd'=>'cjhcgf'], ['id=>3','email'=>'sdsa@.com']);

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
if (isset($_POST['submit'])) {
    echo "abcde";
    // var_dump($_POST);
    $product_name = $_POST['product_name'];
    $sku = $_POST['sku'];
    $product_type = $_POST['product_type'];
    $category = $_POST['category'];
    $manufacture_cost = $_POST['manufacturer_cost'];
    $shipping_cost = $_POST['shipping_cost'];
    $total_cost = $_POST['total_cost'];
    $price = $_POST['price'];
    $status = $_POST['status'];
    $date_created = $_POST['created_at'];
    $date_updated = $_POST['updated_at'];


    $servername = "localhost";
    $usrname = "root";
    $password = "";
    $database = "ccc_practice";

    $conn = mysqli_connect($servername, $usrname, $password, $database);
    if (!$conn) {
        echo " not Connected";
    } else {
        $sql = "INSERT INTO `ccc_product` (`product_name`, `sku`, `product_type`, `category`, `manufacture_cost`, `shipping_cost`, `total_cost`, `price`, `status`, `date_created`, `date_updated`) VALUES ('$product_name', '$sku', '$product_type', '$category', '$manufacture_cost', '$shipping_cost', '$total_cost', '$price', '$status', '$date_created', '$date_updated')";

        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "Submitted";
        } else {
            echo "Not submmitted";
        }
        // echo "Connected";
    }
}


?>