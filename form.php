<?php
include "database.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form.php" method="post">
        <h2>Welcome to Web</h2> <br>
        <label>Username: <br></labeL>
        <input type="text" name="username"><br>
        <label>Password: <br></label>
        <input type="password" name="password"><br>
        <input type="submit" value="submit" name="register">
    </form>
</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $username = filter_input(INPUT_POST,'username', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST,'password', FILTER_SANITIZE_SPECIAL_CHARS);
    if(empty($username) && empty($password)){
        echo 'Username and Password are required';
    }
    else{
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO `customers` (`username`, `password`) VALUES ('$username','$hash')";
        mysqli_query($conn, $sql);
        echo "You are Registered";
    }


}
?>
<?php
mysqli_close($conn);
?>