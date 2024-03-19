<?php session_start();
if(!$_SESSION['valid']){
    header('Location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo($_SESSION['name'])?></title>
</head>
<body>
<h1><?php echo ('Hello'.$_SESSION['name']); ?></h1>

        <form action="" method='post'>
            <button name='out'>Log out</button>
        </form>
</body>
</html>

<?php 
if(isset($_POST['out'])){
session_destroy();
header('Location:index.php');
}
?>