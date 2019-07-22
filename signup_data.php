<html>
<head>
</head>
<body>
<table border="1" width="100%" height="auto" >
<tr>
<th>First Name</th>
<th>Last Name</th>
<th>Username</th>
<th>Birthday</th>
<th>Gender</th>
<th>Mobile</th>
<th>ID Card</th>
</tr>

<?php

mysql_connect('localhost','root','');
mysql_select_db('my_project');
$qry="select * from sign_up";
$res=mysql_query($qry);

while( $row=mysql_fetch_array($res))
{
echo "<tr><td>".$row['first_name']."</td><td>"
.$row['last_name']. "</td><td>"
.$row['username']. "</td><td>"
.$row['dob']."</td><td>"
.$row['gender']." </td><td>"
.$row['mobile_number']."</td><td>"
."<img src='".$row['image']."' height='200' width='200'> </td></tr>";
}
?>
</table>
</body>
</html>