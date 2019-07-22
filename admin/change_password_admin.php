<html>
<head>
<title>
Password Change(ADMIN)
</title>
<script type="text/javascript" src="JavaScript/jS.js">
</script>
<script type="text/javascript" src="JavaScript/java.js">
</script>
<link rel="stylesheet" href="../css/main.css" />
<link rel="icon" href="../photos/account.png" />
</head>
<body class="snup">
<form action="change_password_check.php" method="POST" name="change_password" onSubmit="return val_chk();">
<center>
	<div class="container">
		<div class="bg">
			<div class="head_1"><br><br>
<center><p class="head2"><p class="font"><font color="black">Change Password(ADMIN)</font></p></p></center>
<div >
<center><br><br><br><div class="account_change">
<table class="signin" width="350" height="300" bgcolor="white" >
<tr><td><br><pre class="input">    Old Password:</pre>
<center>
<input class="box_1" type="password" name="old_password" size="40" required>
<br><center>
</td></tr>
<tr><td><br><pre class="input">    New Password:</pre>
<center>
<input class="box_1" type="password" name="new_password" size="40" required>
<br><center>
</td></tr>
<tr><td><br><pre class="input">    Confrim New Password:</pre>
<center>
<input class="box_1" type="password" name="password_2" size="40" required>
<br><center>
</td></tr>
<tr><td><br><br>
<center><input type="submit" class="button2" value="change"></center>
</td></tr>
</table></div>
</center>
</center>
</div>
</div>
</form>
</body>
</html>
