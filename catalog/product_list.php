<?php

include 'sql/connection.php';
global $row;
$query = "SELECT * FROM ccc_product ORDER BY product_id DESC LIMIT 20";
$result = mysqli_query($conn, $query);
// var_dump($result);
echo '<table border="1px solid" style="border-collapse: collapse; margin: auto; margin-top: 70px;">
<tr style="background-color: #A9A9A9">
<th>product name</th>
<th>sku</th>
<th>category</th>
</tr>'; 
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>' . $row['product_name'] . '</td>';
        echo '<td>' . $row['sku'] . '</td>';
        echo '<td>' . $row['category'] . '</td>';
        echo "<td><a href='product.php?edit={$row['product_id']}'><button>Edit</button></td>";
        echo "<td><a href='product.php?operation=delete&id={$row['product_id']}'>Delete</td>";
        echo '</tr>';
    }
}

echo "</table>";

mysqli_close($conn);

?>