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
	<form action="delete_account.php" method="POST" name="delete_account" onSubmit="return val_chk();">
	<center>
	<div class="container">
		<div class="bg">
			<?php
			include('header.php');
			?><br>
<div class="head_1"><br><br><br>
<center><p class="head2"><p class="font">Confirm your Password to <font color="red">DELETE</font> your Account</p></p></center>
<div >
<center><br><br><br><br><br><div class="account_change">
<table class="signin" width="350" height="300" bgcolor="white" >
<tr><td><br><pre class="input">    Password:</pre><br>
<center>
<input class="box_1" type="password" name="password2" size="40" required>
<br><center>
</td></tr>
<tr><td><br><br>
<center><input type="submit" class="button2" value="Delete"></center>
</td></tr>
</table></div>
</center>
</center>
</div><br><br><br><br><br><br><br>
</div>
</form>
</body>
</html>