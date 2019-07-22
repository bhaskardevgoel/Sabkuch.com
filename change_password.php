<html>
<head>
<title>
	Change Password
</title>
<script type="text/javascript" src="JavaScript/jS.js">
</script>
<script type="text/javascript" src="JavaScript/java.js">
</script>
<link rel="stylesheet" href="css/main.css"/>
<link rel="icon" href="photos/icon.png" />
</head>
<body class="snup">
	<form action="change_password_check.php" method="POST" name="change_password" onSubmit="return val_chk();">
	<center>
	<div class="container">
		<div class="bg">
			<?php
			include('header.php');
			?><br>
			<div class="head_3"><br><br>
				<center><p class="head2"><pre class="font">Change Password</pre></p><center><br><br><br><br>
				<center><div class="account_change">
				<table class="signin" width="350" height="300" bgcolor="white" >
				<tr>
				<td><br><pre class="input">    Old Password:</pre>
				<center>
				<input class="box_1" type="password" name="old_password" size="40" required>
				<br><center>
				</td>
				</tr>
				<tr>
				<td><br><pre class="input">    New Password:</pre>
				<center>
				<input class="box_1" type="password" name="new_password" size="40" required>
				<br><center>
				</td>
				</tr>
				<tr>
				<td><br><pre class="input">    Confrim New Password:</pre>
				<center>
				<input class="box_1" type="password" name="password_2" size="40" required>
				<br><center>
				</td>
				</tr>
				<tr>
				<td>
				<center><input type="submit" class="button2" value="change"></center>
				</td>
				</tr>
				</table>
				</div>
				</center>
				</center>
			</div>
		</div>
	</div>
	</center>
</body>
