<?php
session_start();
include 'connect.php';
$user = $_POST['index'];
$status = $_POST['status'];

if($status == 1){
    $stat = 0;
}else{
    $stat = 1;
}
$change = mysqli_query($mysqli, "UPDATE `student` SET `Authentication Level`='$stat' WHERE UserName = '$user'");
header("Location: client.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    <form action="" method="post">
        <?php echo($user) ?><br>
        <input type="text" name="new">
        <input type="submit" name="change">
    </form>
</body>
</html>