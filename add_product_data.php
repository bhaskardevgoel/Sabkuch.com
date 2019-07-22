<?php
$product_name=$_REQUEST['product_name'];
$category=$_REQUEST['category'];
$product_description=$_REQUEST['product_description'];
$place=$_REQUEST['place'];
$price=$_REQUEST['price'];
$image=$_FILES['cover_image']['name'];
$temp_image=$_FILES['cover_image']['tmp_name'];
$path="products/".$image;
move_uploaded_file($temp_image,$path);
include('database.php');
$qry="insert into products(name,category,product_description,place,price,image) values('$product_name','$category','$product_description','$place','$price','$path')";
$res=mysql_query($qry);
if($res>0)
{
include('index.php');
}
else
{
echo  "<head>
<link rel='stylesheet' href='css/main.css'>
</head>
<body class='back_2'>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><center>
<p class='font'><font color='black'>Product Add Failed</font></p>
</center>
</body>";
}
?>