<html>
<head>
<title>Admin Panel</title>
<link rel="stylesheet" href="../css/admin_main.css" />
<link rel="icon" href="../photos/icon.png" />
</head>
</head>
<body class="back_2">
<div class="admin_div_3">
<?php
include('admin_div.php');
?>
<div class="admin_div_4">
<?php 
session_start();
?><br><br><br>
<center><img src="../photos/icon.png" width="30%"></center><br><br><br>
<center><b><p class="font"><font color="black">Welcome <?php echo $_SESSION['username'] ?></font></p></b></center>
</div>
</div>
</body>
</html>