<?php

include 'conn.php';

$query = "SELECT * FROM ccc_product ORDER BY sno DESC LIMIT 10";
$result = mysqli_query($conn, $query);

echo '<table>
<tr>
<th>product name</th>
<th>sku</th>
<th>category</th>
</tr>';
if(mysqli_num_rows($result)>0){
    while ($row = mysqli_fetch_assoc($result)){
        echo '<tr>';
        echo '<td>'.$row['product_name'].'</td>';
        echo '<td>'.$row['sku'].'</td>';
        echo '<td>'.$row['category'].'</td>';
        echo '</tr>';
    }
}
echo "</table>";

mysqli_close($conn);

?>