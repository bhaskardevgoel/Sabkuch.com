<?php
session_start();
include('database.php');
$admin_username=$_POST['username'];
$admin_password=$_POST['password'];
$qry="Select * from admin where username='$admin_username' and password='$admin_password'";
$result=mysql_query($qry);

if($row=mysql_fetch_array($result)){
$_SESSION['username']=$admin_username;
$_SESSION['password']=$admin_password;
header('location:admin_panel.php');
}
else
{
header('location:signin_fail_admin.php');
}
?>