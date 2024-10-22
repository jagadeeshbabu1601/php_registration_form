<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";
try{
    $conn = mysqli_connect($servername, $username, $password, $dbname);
}
catch(mysqli_sql_exception) {
    echo "Unable to Connect to server";
}
?>