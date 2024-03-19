<?php
include "connect.php";
$error=0;
if(isset($_POST['submit'])){
$user=$_POST["fname"];
$email=$_POST["email"];
$userName=$_POST["uname"];
$pass=$_POST["password"];

$result=mysqli_query($mysqli,"INSERT INTO student(FullName,Email,UserName,Password) VALUES('$user','$email','$userName',md5('$pass'))")
or die(mysqli_error($mysqli));
header("Location:login.php");
}

function validate($x, $error){
    if(isset($_POST['submit'])){
        if($x == ''){
            echo("This field is empty<br>");
            $error = $error + 1;
        }
    }
}
?>