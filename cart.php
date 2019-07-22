<html>
<head>
<title>
	Cart
</title>
<link rel="stylesheet" href="css/main.css"/>
<link rel="stylesheet" href="css/admin_main.css"/>
<link rel="icon" href="photos/icon.png" />
</head>
<body class="acc">
	<center>
	<div>
	<div>
	<?php
	include('header.php');
	?>
<div class="head_1"><br><br>
	<center><p class="font"><font color="black">Products List</font></p></center><br>
	<center><br><br>
	<div class="scroll" style="width:97%; height:70%;">
	<table class="table" style="width:97%; height:70%;">
	<tr height="10%">
	<th>Name</th>
	<th>Product Image</th>
	<th>Product Price</th>
	<th> BUY </th>
	<th> Remove form Cart</th>
	</tr>
	<?php
	include('database.php');
			$qry="select * from cart";
			$res=mysql_query($qry);
			while($row=mysql_fetch_array($res))
			{
			?>
	<tr>
	<th><br><br><h3><?php echo $row['name'] ?></h3></th>
	<th><img src="<?php echo $row['image'] ?>" height="130" width="150"></th>
	<th><br><br><h2>Rs. <?php echo $row['price'] ?></h2></th>
	<th><br><br><button class="box_1">
	<?php
		if(empty($_SESSION['username']))
						{
						?>
						<a href="login.php">
						<?php
						}
						else
						{
						?>
						<a href="buy.php?id=<?php echo $row['id']?>">
						<?php
						}
						?>BUY THE PRODUCT</a></button></th>
	<th><br><br><a href="deletecart.php?del=<?php echo $row['id']?>"><img src="photos/del1.jpg"></img></a></th>
	</tr>
	<?php
			}
			?>
		</table>
		</div>
		</center>
</div>
</div>
</body>
</html>