<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Welcome</h1>
    <p>To use my website you need to login</p>
    <form id="blank"  method="post">
    <label>Username</label>
    <input type="text" id="uname" name="uname" >
    <br><br>
    <label>Password</label>
    <input type="password" id="pass" name="password">
    <br><br>
    <input type="submit"  name="submit" value="Login">
</form>
</body>
</html>

<?php 
include "connect.php";

if(isset($_POST['submit'])){
    $user=$_POST['uname'];
    $pass=$_POST['password'];

    $result=mysqli_query($mysqli,"SELECT * FROM student WHERE UserName=('$user') AND Password=md5('$pass')")
    or die("cannot select from table");
    $row=mysqli_fetch_assoc($result);

    if(is_array($row) && !empty($row)){
        $valid=$row['UserName'];
        $_SESSION['valid']=$valid;
        $_SESSION['name']=$row['FullName'];
        $_SESSION['id']=$row['ID'];
        $_SESSION['level']=$row['Authentication Level'];
        header("Location:go.php");
    }

    else{
        echo "It is invalid";
    }
}
?>