<html>
<head>
<title>
	Purchase Successful
</title>
<link rel="stylesheet" href="css/main.css"/>
<link rel="icon" href="photos/icon.png" />
</head>
<body class="home">
	<center><div class="container">
		<div class="bg">
			<?php
	include('header.php');
	?>
	<br><p class="font"><h1>Thankyou </h1></p>
							<hr/><br><br><br>
							<p class="font"><h3>Hello <?php echo "<b>".$_SESSION["username"]."</b>"; ?>,Your payment process is 
							successfully completed and your Transaction id is <b><?php echo $id; ?></b><br/>
							you can continue your Shopping <br/></h3></p>
							<button class="box_1"><a href="index.php">Continue Shopping</a></button>
		</div>
	</div>
</body>
</html>