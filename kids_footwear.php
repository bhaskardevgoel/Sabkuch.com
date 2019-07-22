<html>
<head>
<title>
	Fashion
</title>
<link rel="stylesheet" href="css/main.css"/>
<link rel="icon" href="photos/icon.png" />
</head>
<body class="fashion_back">
	<center>
	<div class="container">
		<div class="bg">
			<?php
	include('header.php');
	?>
		<form name="sort" method="GET" action="sort_product.php" enctype="multipart/form-data">
		<div class="catg_title_2">
			<span>Kids's Footwear</span>
			</div>	
			<br>
			<table class="products_table" width="90%" height="auto">
			<?php
				include('database.php');
				$qry="select * from products where category='Kids Shoes'";
				$res=mysql_query($qry);
				while($row=mysql_fetch_array($res))
				{
			?>
			<tr border="2px">
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
		</div>
	</div>
	</center>
</body>
</html>