<html>
<head>
<title>
	Books and Music
</title>
<link rel="stylesheet" href="css/main.css"/>
<link rel="icon" href="photos/icon.png" />
</head>
<body class="acc">
	<center>
	<div class="container">
		<div class="bg">
			<?php
	include('header.php');
	?>
		<div class="head_1">
<br><br><br>
<center><p class="font"><font color="black"><b>WELCOME </b><?php echo $_SESSION['username']?></font></p><br>
</center> <br><br><br><br>
<div class="account"><br>
<center><a href="change_username.php"><img src="photos/change_username.png" height="80%" width="70%"></a><br>
<font size="5"> Change Username</font>
</div>
<div class="account"><br>
<center><a href="change_password.php"><img src="photos/change_password.png" height="80%" width="70%"></a><br>
<font size="5"> Change Password</font>
</div>
<div class="account_delete"><br>
<center><a href="delete_account_confrim.php"><img src="photos/delete_account.png" height="80%" width="70%"></a><br>
<font size="5">Delete Account</font>
</div>
<br><br><br><br><br><br><br><br>
</div>
		</div>
	</div>
	</center>
</body>
</html>