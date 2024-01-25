<html>

<body>
    <form action="" method="POST">
        <label for="name">Category Name</label>
        <input type="text" name="name">
        <input type="submit" value="submit" name="submit">
    </form>
    <div class="anch">

        <a style="margin:30px;" href="product_list.php">Product List</a>
        <a style="margin:30px;" href="category_list.php">Category List</a>
    </div>
</body>

</html>
<?php
include 'sql/connection.php'; // Include database connection file
include 'sql/functions.php'; // Include the file with functions

if (isset($_POST['submit'])) {
    $category_data = [
        'name' => $_POST['name']
    ];

    // Assuming you have a table named 'ccc_category'
    $table_name = 'ccc_category';

    // Use the insert function to create the SQL query for insertion
    $insert_query = insert($table_name, $category_data);

    // Execute the query
    $result = mysqli_query($conn, $insert_query);

    if ($result) {
        echo "Category added successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

// ... Rest of your HTML and PHP code ...

?>