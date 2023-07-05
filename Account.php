<?php 
include('conn.php');
session_start();{
$user=mysqli_real_escape_string($conn,$_POST['username']);
$pass=md5($_POST['password']); 
$fetch=mysqli_query($conn,"SELECT ID FROM `accounts` WHERE username='$user' and password='$pass'");
$count=mysqli_num_rows($fetch);
if($count!="")
{
$_SESSION['login_username']=$user;
header("location:GALLERY.PHP");
}
else{
header('location:Login.php');
}
}
?>