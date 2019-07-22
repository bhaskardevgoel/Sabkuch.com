<html>
<head>
<title>Users</title>
<link rel="stylesheet" href="../css/admin_main.css" />
<link rel="icon" href="../photos/icon.png" />
</head>
<body class="back_2">
<div class="admin_div_3">
<?php
include('admin_div.php');
?>
<div class="admin_div_4"><br><br>
	<center><p class="font"><font color="black">Products List</font></p></center><br><br><br>
	<center><br><br>
	<div class="scroll" style="width:97%; height:70%;">
	<table class="table" style="width:97%; height:70%;">
	<tr height="10%">
	<td>Name</td>
	<td>Category</td>
	<td>Price</td>
	<td>Image</td>
	<td>Delete Product</td>
	</tr>
	<?php
	include('database.php');
			$qry="select * from products";
			$res=mysql_query($qry);
			while($row=mysql_fetch_array($res))
			{
			?>
	<tr>
	<td><?php echo $row['name'] ?></td>
	<td><?php echo $row['category'] ?></td>
	<td><?php echo $row['price'] ?></td>
	<th><img src="../<?php echo $row['image'] ?>" height="130" width="150"></th>
	<th><a href="deleteproduct.php?del=<?php echo $row['id']?>"><img src="../photos/del1.jpg"></img></a></th>
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