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

$sql = "SELECT * FROM `customers`";
$result = mysqli_query($conn, $sql);

$n = mysqli_num_rows($result);

echo $n;
echo "<br>";

while($row = mysqli_fetch_array($result)){
    echo var_dump($row);
    echo "<br>";
}

mysqli_close($conn);



?>