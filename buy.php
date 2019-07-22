<?php

		$id = $_REQUEST["id"];
		include_once("database.php");
		$sql = "SELECT id FROM cart WHERE id = '$id'";
		$query = mysql_query($sql);
			while ($row=mysql_fetch_array($query)) {
			$product_id[] = $row["id"];
			}

			for ($i=0; $i < count($product_id); $i++) 
			{ 
				$sql = "INSERT INTO orders (user_id,product_id) VALUES ('$id','".$product_id[$i]."')";
				mysql_query($sql);
			}

			$sql = "DELETE FROM cart WHERE id = '$id'";
			if (mysql_query($sql))
				{
					include('buy_success.php');	
				}
		



?>

















































