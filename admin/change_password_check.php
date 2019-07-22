<?php
$old_password=$_REQUEST['old_password'];
$new_password=$_REQUEST['new_password'];
$confirm_password=$_REQUEST['password_2'];
session_start();
$username=$_SESSION['username'];
$pass=$_SESSION['password'];
include('database.php');
	if($old_password==$pass)
	{
		if($new_password==$confirm_password)
		{
			$change="update admin set password='$new_password' where username='$username'";
			$r=mysql_query($change);
			if($r>0)
			{
			$_SESSION['password']=$new_password;
			echo "<script> alert('your password has been changed');
			window.location.href='admin_panel.php';
			</script>";
			}
			else{
			echo "Error";
			}
		}
		else
		{
			echo "<script> alert('Password does not match');
			window.location.href='admin_panel.php';
			</script>";
		}
	}
	else
	{
		echo "<script> alert('Please check your Password');
		window.location.href='change_password_admin.php';
		</script>";
	}
?>