<?php
include 'UserModel.php';
$username = $_POST['username'];
$_SESSION['UserName'] = $username;
$pass = $_POST['password'];
$usertype = "user";
$Obj = new users();
$Obj->Login($username,$pass,$usertype);

?>