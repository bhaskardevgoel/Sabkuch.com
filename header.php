<?php
include('database.php');
?>
<div class="top_extrm" style="background-color:rgba(255,255,255,0.9);">
	<b>
	<?php
			
						session_start();
						if(empty($_SESSION['username']))
						{
						?><a href="sell.php">
						<?php
						}
						else
						{
						?>
						<a href="sell_products.php">
						<?php
						}
						?><font size="2" color="black">SELL ON SABKUCH.com</font></a></b>
</div>
<div class="back_2">
	<div class="back_2_left">
	<div class="name"><span><a href="index.php">SABKUCH.com<a></span></div>
	</div>
	<div class="back_2_right">
		<form action="search.php" method="GET">
			<select class="search" name="search">
				<option>SEARCH</option>
				<option>Men FASHION</option>
				<option>Women FASHION</option>
				<option>Kids FASHION</option>
				<option>Men Watches</option>
				<option>Women Watches</option>
				<option>Kids Watches</option>
				<option>Men Shoes</option>
				<option>Women Shoes</option>
				<option>Kids Shoes</option>
				<option>Furniture</option>
				<option>Daily Use</option>
				<option>Home Decoration</option>
				<option>Books</option>
				<option>Musical Instruments</option>
				<option>Sports</option>
				<option>Nutrition</option>
				<option>Gym</option>
				<option>Mobiles</option>
				<option>Big electronics</option>
			</select>
			<input class="btn" id="submit" type="submit" value="Search">
		</form>
	</div>
</div><br><br><br><br>
<div class="back_3">
		<div class="back_3_left">
			<div class="grid_left">
				<ul>
					<li><a class="nav" href="index.php">Home</a></li>
					<li><a class="nav" href="about.php">About</a></li>
					<li><a class="nav" href="contact.php">Contact</a></li>
					<li>
					<?php
						if(empty($_SESSION['username']))
						{
						?>
					<a class="nav" href="login.php">Login</a>
					<?php
						}
						else
						{
					?>
					<a class="nav" href="logout.php">Logout</a>
					<?php
						}
						?></li>
				</ul>
			</div>
		</div>
		<div class="back_3_right">
			<div class="grid_right">
				<table class="right_back">
					<tr>
					<td><?php
						if(empty($_SESSION['username']))
						{
						?>
					<a href="login.php">
					<?php
						}
						else
						{
					?>
					<a href="cart.php">
					<?php
						}
						?><img class="icon" src="photos/cart.png"></a></td>
					<td><?php
						if(empty($_SESSION['username']))
						{
						?>
					<a href="login.php">
					<?php
						}
						else
						{
					?>
					<a href="my_account.php">
					<?php
						}
						?><img class="icon" src="photos/account.png"></a></td>
					</tr>
				</table>
			</div>
			</div>
			</div><br><br>