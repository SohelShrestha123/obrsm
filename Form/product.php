<?php
include "connect.php";
session_start();
if(isset($_SESSION['valid'])){
    if(isset($_POST['submit'])){
$name=$_POST["pname"];
$qty=$_POST["quan"];
$price=$_POST["price"];
$login=$_POST["login"];
$result=mysqli_query($mysqli,"INSERT INTO product(Name,Quantity,Price,Login_Id) VALUES('$name','$qty','$price','$login')")
or die(mysqli_error($mysqli));
echo("Product has been added.");
        header('Location: go.php');
    }
}

else{
    header('Location: index.html');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>
<body>
    <form  method="post">
        <label>Name</label>
        <input type="text"  id="pname" name="pname">
        <br><br>
        <label>Quantity</label>
        <input type="text"  id="quan" name="quan">
        <br><br>
        <label>Price</label>
        <input type="text" id="price" name="price">
        <br><br>
        <label>Login_Id</label>
        <input type="text" id="login" name="login">
        <br><br>
        <input type="submit" value="submit">
</form>
</body>
</html>