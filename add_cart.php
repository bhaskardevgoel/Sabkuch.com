<?php
include('database.php');
$id = $_REQUEST['id'];
$id_qry="select * from products where id = '$id'";
$id_res= mysql_query($id_qry);
$id_row = mysql_fetch_array($id_res);
$product_name = $id_row['name']; 
$price=$id_row['price'];
$path=$id_row['image'];

$qry="insert into cart(name,price,image) values('$product_name','$price','$path')";
$res=mysql_query($qry);
if($res>0)
{
include('cart.php');
}
else
{
echo  
"<head>
<link rel='stylesheet' href='css/main.css'>
</head>
<body class='back_2'>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<center>
<p class='font'><font color='black'>Add to Cart Failed</font></p>
</center>
</body>";
}
?>