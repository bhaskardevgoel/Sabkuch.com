<html>
<head>
</head>
<body>
<table border="1" width="100%" height="auto" >
<tr>
<th>Username</th>
<th>Password</th>
</tr>

<?php
include('database.php');
$qry="select * from sign_in";
$res=mysql_query($qry);

while( $row=mysql_fetch_array($res))
{
	echo '<tr><td>'.$row['username'].'</td><td>'.$row['password'].'</td></tr>';
}
?>
</table>
</body>
</html>