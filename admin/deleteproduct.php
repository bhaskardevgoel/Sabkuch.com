<?php
session_start();
include('database.php');
$id=$_REQUEST['del'];
$qry="delete from products where id=$id";
$res=mysql_query($qry);
if($res>0)
  {
  echo "<script> alert('Product Removed');
  window.location.href='products.php';</script>";
 }
 else
 {
 echo "<script> alert('Product Cant be Removed');
 window.location.href='products.php';</script>";
 }
?>