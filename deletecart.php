<?php
session_start();
include('database.php');
$id=$_REQUEST['del'];
$qry="delete from cart where id=$id";
$res=mysql_query($qry);
if($res>0)
  {
  echo "<script> alert('Product Removed from cart');
  window.location.href='cart.php';</script>";
 }
 else
 {
 echo "<script> alert('Product Cant be Removed');
 window.location.href='cart.php';</script>";
 }
?>