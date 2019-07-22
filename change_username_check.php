<?php
$new_username=$_REQUEST['new_username'];
session_start();
$username=$_SESSION['username'];
include('database.php');
			$change="update sign_up set username='$new_username' where username='$username'";
			$res=mysql_query($change);
			if($res>0)
			{
			$_SESSION['username']=$new_username;
			echo "<script> alert('your username has been changed');
			window.location.href='index.php';
			</script>";
			unset($_SESSION['username']);
			unset($_SESSION['password']);
			}
			else
			{
			echo "<script> alert('Error');</script>";
	        }
?>