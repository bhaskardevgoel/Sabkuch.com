<table class="table table-striped" style="width:97%;">
	<tr>
	<td>Name</td>
	<td>Mobile Number</td>
	<td>DOB</td>
	<td>Delete User</td>
	</tr>
	<?php
	include('database.php');
			$qry="select * from sign_up";
			$res=mysql_query($qry);
			while($row=mysql_fetch_array($res))
			{
			?>
	<tr>
	<td><?php echo $row['first_name'] ?></td>
	<td><?php echo $row['mobile_number'] ?></td>
	<td><?php echo $row['dob'] ?></td>
	<td><a href="deleteuser.php?del=<?php echo $row['id']?>"><img src="../image/del1.jpg"></img></a></td>
	</tr>
	<?php
			}
			?>
		</table>
	