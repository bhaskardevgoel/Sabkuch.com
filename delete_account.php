<?php
$confirm_password=$_REQUEST['password2'];
session_start();
$username=$_SESSION['username'];
$pass=$_SESSION['password'];

if($confirm_password == $pass)
{
echo "<script>confirm('Are you sure to delete your Account?')</script>";
include('database.php');

$del="delete from sign_up where username='$username' and password='$pass'";
mysql_query($del);

echo "<script>alert('account Deleted');</script> ";
unset($_SESSION['username']);
unset($_SESSION['password']);
header('location:index.php');
}
else
{
echo "Password not matched";
}
?>