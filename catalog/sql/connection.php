<?php
$servername = "localhost";
$usrname = "root";
$password = "";
$database = "ccc_practice";

$conn = mysqli_connect($servername, $usrname, $password, $database);
if (!$conn) {
echo " not Connected";
}else{
    // echo "Connected";
}

?>