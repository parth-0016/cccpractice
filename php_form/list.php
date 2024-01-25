<?php

include 'conn.php';

$query = "SELECT * FROM ccc_product ORDER BY product_id DESC LIMIT 10";
$result = mysqli_query($conn, $query);

echo
'<table border="1px solid" style="border-collapse: collapse; margin: auto; margin-top: 70px;">
<tr style="background-color: #6CB4EE">
<th>Product name</th>
<th>Product Type</th>
<th>sku</th>
<th>category</th>
<th>Manufacture Cost</th>
<th>Shipping Cost</th>
<th>Total Cost</th>
<th>Price</th>
<th>Status</th>
<th>Date Created</th>
<th>Date Updated</th>
</tr>';
if(mysqli_num_rows($result)>0){
    while ($row = mysqli_fetch_assoc($result)){
        echo '<tr>';
        echo '<td>'.$row['product_name'].'</td>';
        echo '<td>'.$row['product_type'].'</td>';
        echo '<td>'.$row['sku'].'</td>';
        echo '<td>'.$row['category'].'</td>';
        echo '<td>'.$row['manufacture_cost'].'</td>';
        echo '<td>'.$row['shipping_cost'].'</td>';
        echo '<td>'.$row['total_cost'].'</td>';
        echo '<td>'.$row['price'].'</td>';
        echo '<td>'.$row['status'].'</td>';
        echo '<td>'.$row['date_created'].'</td>';
        echo '<td>'.$row['date_updated'].'</td>';
        echo '</tr>';
    }
}
echo "</table>";

mysqli_close($conn);

?>