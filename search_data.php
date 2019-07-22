<?php
	include('database.php');
		$search_value =$_REQUEST['search'];
		$qry ="SELECT * from products WHERE category = '$search_value'";
		$res=mysql_query($qry);	
		while($row=mysql_fetch_array($res))
		{	
			header('location:search.php');
		}
?>