<html>
<head>
<title>Add Products</title>
<link rel="stylesheet" href="css/main.css" />
<link rel="icon" href="image/icon.png" />
</head>
<body class="sell">
	<center>
	<div class="container">
		<div class="bg">
			<?php
	include('header.php');
	?>
<div class="admin_div_4"><br><br><br>
	<center><p class="font"><font color="black">Add Products Here.</font></p></center><br><br><br>
	<center><div style="height:70%; width:50%; background-color:rgba(200,200,200,0.7);
	box-shadow:5px 10px 10px rgba(0,0,0,0.5); border-radius:30px;"><br><br><table>
	<form name="pro" method="POST" action="add_product_data.php" enctype="multipart/form-data">
		<tr><td colspan="2"><pre class="input">Product Name:</pre><br>
		<input class="box_1" size="76" type="text" name="product_name" placeholder="Product Name" required><br><br></td></tr>
		<tr><td>
		<pre class="input">Category:</pre><br>
		<select class="box_1" name="category" style="width:150px;"required>
		<option>Category Name:</option>
		<option>Men FASHION</option>
		<option>Women FASHION</option>
		<option>Kids FASHION</option>
		<option>Men Watches</option>
		<option>Women Watches</option>
		<option>Kids Watches</option>
		<option>Men Shoes</option>
		<option>Women Shoes</option>
		<option>Kids Shoes</option>
		<option>Furniture</option>
		<option>Daily Use</option>
		<option>Home Decoration</option>
		<option>Books</option>
		<option>Musical Instruments</option>
		<option>Sports</option>
		<option>Nutrition</option>
		<option>Gym</option>
		<option>Mobiles</option>
		<option>Big electronics</option>
		</select><br><br>
		</td>
		<td>
		<pre class="input">Place:</pre><br>
		<select class="box_1" name="place" style="width:150px;"required>
		<option>Place of Selling:</option>
		<option>Amritsar</option>
		<option>Barnala</option>
		<option>Bathinda</option>
		<option>Faridkort</option>
		<option>Fathegarh Saheb</option>
		<option>Firozpur</option>
		<option>Fazilka</option>
		<option>Gurdaspur</option>
		<option>Hoshiarpur</option>
		<option>Jalandhar</option>
		<option>Kapurthala</option>
		<option>Ludhiana</option>
		<option>Mansa</option>
		<option>Moga</option>
		<option>Shri Muktsar Sahib</option>
		<option>Pathankot</option>
		<option>Patiala</option>
		<option>Ropnagar</option>
		<option>Mohali</option>
		<option>Sangrur</option>
		<option>Nawansahar</option>
		<option>Taran Taran</option>
		</select><br><br>
		</td>	
		</tr>
			<tr><td>
		<pre class="input">Upload the image of Product</pre><br>
		<input type="file" name="cover_image"required><br><br>
				</td>
				<td>
		<br><pre class="input">PRICE:</pre>
				<input class="box_1" type="text" name="price"required><br><br>
				</td></tr>
				<tr>
					<td><pre class="input">Product Description (Max Length 50 words)</pre><br>
						<textarea class="box_1" cols="50" rows="5" name="product_description" required>
						</textarea>
					</td>
				</tr>
				<tr>
				<td colspan="2"><br><br><pre>							<input type="submit" class="button2" value="Add Product"></pre></td></tr>
		</form>
		</table>
		</div>
		</center>
</div>
</div>
</body>
</html>