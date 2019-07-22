<html>
<head>
<title>
search
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
<table class="products_table" width="90%" height="auto">
		<?php
	include('database.php');
		$search_value =$_REQUEST['search'];
		$qry ="SELECT * from products WHERE category = '$search_value'";
		$res=mysql_query($qry);	
		while($row=mysql_fetch_array($res))
		{	
			
?>
		<br><br><tr border="2px">
				<tr>
					<th class="product_name" colspan="2"rowspan="2">
						<?php echo $row['name'] ?>
					</th>
				</tr>
				<tr>
					<td>
						<img src="<?php echo $row['image'] ?>" height="200" width="300">
					</td>
					<td rowspan="3" colspan="5">
						<font size="4px"><?php echo $row['product_description']?></font>
					</td>
				</tr>
				<tr><td colspan="2">
					</td>
					<td>
						<font size="5px"><b>Rs. <?php echo $row['price'] ?></b></font>
					</td>
					<td  align="left">
						<button class="buy"><a href="add_cart.php?id=<?php echo $row['id']?>">Buy Now</a></button>
					</td>
				</tr>
			</tr>
			<?php
			}
			?>
			</table>
	</body>
</html>