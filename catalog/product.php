<?php

include 'sql/connection.php';
include 'sql/functions.php';

echo "<br>";
// var_dump($product_data);
if (isset($_POST['submit'])) {
    $product_data = $_POST['group1'];
    var_dump($product_data);
    $inser = insert('ccc_product', $product_data);
    // $conn->query($inser);
    try{
        mysqli_query($conn, $inser);

    }
    catch(Exception $e){
        echo $e->getMessage();
    }
}
if (isset($_POST['update'])) {
    $product_data = $_POST['product'];
    update("ccc_product", $product_data, $product_id);
    $conn->query($updVar);
}
if (isset($_GET['edit'])) {
    echo "hello fefreg";
    global $conn;
    $product_id = $_GET['edit'];
    $product = $conn->query("SELECT * FROM ccc_product WHERE product_id=$product_id")->fetch_assoc();
    print_r($product);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>


    <h1 style="text-align: center;">Production Form</h1>
    <form method="post" style="align-items :center; justify-content:center;">

        <input type="hidden" name="record_id" id="record_id" value="<?php echo isset($record['id']) ? $record['id'] : ''; ?>">

        <label>Product Name</label>
        <input type="text" name="group1[product_name]"><br><br>

        <label>SKU</label>
        <input type="text" name="group1[sku]"><br><br>

        <label>Product Type</label>
        <input type="radio" name="group1[product_type]" value="Simple" id="simple" checked>
        <label for="simple">Simple</label>
        <input type="radio" name="group1[product_type]" value="Bundle" id="bundle">
        <label for="bundle">Bundle</label><br><br>

        <label>Category:</label>
        <select name="group1[category]" id="category">
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
        <input type="text" name="group1[manufacture_cost]" id="manufacture_cost"><br><br>

        <label>Shipping Cost</label>
        <input type="text" name="group1[shipping_cost]" id="shipping_cost"><br><br>

        <label>Total Cost</label>
        <input type="text" name="group1[total_cost]" id="total_cost"><br><br>

        <label for="price">Price</label>
        <input type="text" name="group1[price]" id="price"><br><br>

        <label for="status">Status:</label>
        <select name="group1[status]" id="status">
            <option value="enabled">Enabled</option>
            <option value="disabled">Disabled</option>
        </select><br><br>

        <label for="created_at">Created at</label>
        <input type="date" name="group1[date_created]" id="created_at"><br><br>

        <label for="updated_at">Updated at</label>
        <input type="date" name="group1[date_updated]" id="updated_at"><br><br>

        <!-- <button type="submit">Submit</button> -->
        <input type="submit" name="<?php echo (isset($_GET['edit'])) ? 'update' : 'submit'; ?>" value="<?php echo (isset($_GET['edit'])) ? 'update' : 'submit'; ?>"><br><br>

    </form>

</body>

</html>