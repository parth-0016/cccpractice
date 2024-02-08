<?php

class View_Product_List{
    public function __construct(){
        // echo "Parth<br>";
        $this->ShowList();
    }
    
    public function ShowList(){
        $queryObj = new Lib_Sql_Query_Builder();
        $result = $queryObj->fetchData('ccc_product');
        // print_r($result);
        $productList = '<table border="1px solid" style="border-collapse: collapse; margin: auto; margin-top: 70px;">
        <tr style="background-color: #A9A9A9">
        <th>product name</th>
        <th>sku</th>
        <th>category</th>
        </tr>'; 
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $productList .= '<tr>';
                $productList .= '<td>' . $row['product_name'] . '</td>';
                $productList .= '<td>' . $row['sku'] . '</td>';
                $productList .= '<td>' . $row['category'] . '</td>';
                $productList .= "<td><a href='product.php?edit={$row['product_id']}'><button>Edit</button></td>";
                $productList .= "<td><a href='product.php?edit={$row['product_id']}'>Delete</td>";
                $productList .= '</tr>';
            }
        }
        echo $productList;
        // echo "<button style='margin-left: 400px;'>insert</button>";
    }

    public function toHtml(){
        return $this->ShowList();
    }
}

?>