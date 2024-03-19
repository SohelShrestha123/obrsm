<?php
session_start();
include "connect.php";
if(isset($_SESSION['valid'])){
    header("Location:go.php");
}

if($_SESSION['level']!=1){
    header("Location:go.php");
}

$result=mysqli_query($mysqli,"SELECT * FROM `product`");
$num=0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clients</title>
</head>
<body>
    <table border="1px">
        <tr>
            <td>SN</td><td>Product Name</td><td>Quantity</td><td>Price</td><td>Product ID</td><td>Login ID</td><td>User</td><td>Auth Level</td>
        </tr>

        <?php
           while($row=mysqli_fetch_assoc($result)){
            $auth = $row['login_id'];
            $user = mysqli_query($mysqli, "SELECT `ID`,`UserName`,`Authentication Level` FROM `student` WHERE ID = '$auth'");
            $userData = mysqli_fetch_assoc($user);
            $index = $userData['Username'];
            $status = $userData['Authentication Level'];

            echo ("<tr><td>".$row['product_id'].
            "</td><td>".$row['name'].
            "</td><td>".$row['qty'].
            "</td><td>".$row['price'].
            "</td><td>".$row['product_id'].
            "</td><td>".$row['login_id'].
            "</td><td>".$userData['Username'].
            "<//td><td>"$userData['Authentication Level'].
            "</td><td>
                    <form action='edit.php' method='post'>
                        <input type='hidden' name='index' value='$index'>
                        <input type='hidden' name='status' value='$status'>
                        <input type='submit' value='Edit' name='Edit'></form>".
            "</td></tr>");
           }
        ?>

    </table>
</body>
</html>