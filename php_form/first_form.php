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
    
    <?php include 'conn.php'; ?>

</body>

</html>