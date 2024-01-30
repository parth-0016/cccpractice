<html>

<body>
    <form action="" method="POST">
        <label for="name">Category Name</label>
        <input type="text" name="name">
        <input type="submit" value="submit" name="submit">
    </form>
    <!-- <div class="anch">

        <a style="margin:30px;" href="product_list.php">Product List</a>
        <a style="margin:30px;" href="category_list.php">Category List</a>
    </div> -->
</body>

</html>
<?php
include 'sql/connection.php'; 
include 'sql/functions.php';
// echo "<a href='category_list.php'><button>Category list</button>";
if (isset($_POST['submit'])) {
    $category_data = [
        'name' => $_POST['name']
    ];
    // var_dump($category_data);
    $table_name = 'ccc_category';
    $insertQuery = insert($table_name, $category_data);
        $result = mysqli_query($conn, $insertQuery);
        if ($result) {
            echo "Category added successfully! <br>";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
echo "<a href='category_list.php'><button>Category List</button>";

?>