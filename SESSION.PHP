<?php
include('conn.php');
session_start();
$check=$_SESSION['login_username'];
$session=mysqli_query($conn,"SELECT username FROM `accounts` WHERE username='$check'");
$row=mysqli_fetch_array($session);
$login_session=$row['username'];
if(!isset($login_session))
header("location:Login.php");
?>