<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h2 {
            color: #333;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>

    <h2>Category List</h2>
    <?php

    include 'sql/connection.php';
    include 'sql/functions.php'; 
    $table_name = 'ccc_category';
    $select_query = select($table_name,['*']); // Assuming to select all records
    $result = mysqli_query($conn, $select_query);
    if ($result) {
        echo '<table>';
        echo '<tr>';
        echo '<th>Category Id</th>';
        echo '<th>Category Name</th>';
        echo '</tr>';

        while ($row = mysqli_fetch_assoc($result)) {

            echo '<tr>';
            echo '<td>' . $row['cat_id'] . '</td>';
            echo '<td>' . $row['name'] . '</td>';
            echo '</tr>';
        }

        echo '</table>';
    } else {
        echo 'Error: ' . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);

    ?>
    <form><input type="button" value="Add Category" onclick="pList()"></form>
    <script>
        function pList() {
            window.location.href = 'category.php';
        }
    </script>
</body>

</html>