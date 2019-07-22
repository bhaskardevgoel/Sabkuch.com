<?php
$old_password=$_REQUEST['old_password'];
$new_password=$_REQUEST['new_password'];
$confirm_password=$_REQUEST['old_password'];
session_start();
$username=$_SESSION['username'];
$pass=$_SESSION['password'];
$qry="select from sign_up where password='$pass'";
$res=mysql_query($qry);
if($old_password == $pass)
{ 
if($new_password != $confirm_password)
{
echo "<script>alert('Password confirmation failed');
</script>";
header('location:change_password.php');
}
else
{ 
include('database.php');
$change="UPDATE sign_up SET password='$new_password' where username='$username'";
mysql_query($change);
echo "<script>alert('password changed');</script>";
header('location:my_account.php');
}
}
else
{
echo "<script>alert('You have entered a wrong password');</script>";
header('location:my_account.php');
}
?>