<?php

include 'sql/connection.php';
global $row;
$query = "SELECT name FROM ccc_category ORDER BY cat_id";
$result = mysqli_query($conn, $query);
// var_dump($result);
echo '<table border="1px solid" style="border-collapse: collapse; margin: auto; margin-top: 70px;">
<tr style="background-color: #A9A9A9">
<th>category</th>
</tr>'; 
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>' . $row['name'] . '</td>';
        echo '</tr>';
    }
}
echo "</table>";
echo "<a href='category.php'><button>Add Category</button>";

mysqli_close($conn);

?>