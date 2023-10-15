<?php require_once('connection/connection.php');?>
<?php
$user='nadun';
$password='computer@2006';
$hashed_password=sha1($password);
$query="INSERT INTO admin(username,password)VALUES('{$user}' ,'{$hashed_password}')";
$result=mysqli_query($connection,$query);
?>
