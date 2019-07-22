<html>
<head>
<title>
	SELL ON SABKUCH
</title>
<link rel="stylesheet" href="css/main.css"/>
<link rel="icon" href="photos/icon.png" />
</head>
<body class="sell">
	<form action="login_check.php" method="POST" name="login" onSubmit="return val_chk();">
	<center><div class="container">
		<div class="bg">
			<?php
			include('header.php');
			?><br>
			<div class="login"><br><br><br><br>
				<center><p class="title"><p class="font"><font color="black">Sell Your Products Here!</font></p></p></center>
				<div >
					<center><br><br><br>
					<table class="signin"  height="300" bgcolor="white" >
						<tr height="15%">
						<th rowspan="4"><img src="photos/icon.png" width="150" height="150"></th></tr>
						<tr><td><pre class="input">      Username:</pre><br>
						<center>
						<input class="box_1" type="text" name="username" placeholder="Username" size="40" maxlength="50" required><br>
						</center>
						</td></tr>
						<tr><td><br><pre class="input">      Password:</pre><br>
						<center>
						<input class="box_1" type="password" name="password" placeholder="Password" size="40" required>
						<br><center>
						</td></tr>
						<tr><td>
						<pre align="left"><br>       <a href="sign_up.php" class="link_2"><b>Sign Up</b></a></pre><br><br> 
						<pre align="left">          <input type="submit" class="button2" value="Proceed"></pre><br>
						</td></tr>
					</table>
					
					</center>
					</center>
				</div>
		</div>
	</div>
	</center>
</body>