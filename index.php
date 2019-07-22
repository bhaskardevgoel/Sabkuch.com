<html>
<head>
<title>
	SHOP
</title>
<link rel="stylesheet" href="css/main.css"/>
<link rel="icon" href="photos/icon.png" />
</head>
<body class="home">
	<center><div class="container">
		<div class="bg">
			<?php
	include('header.php');
	?>
			<br><br><div class="back_5">
			<div class="bar_high"></div>
				<div class="myslides fade"><br>
				<div><img class="slide" src="photos/slide_1.png"height="95%" width="100%"></div>
				</div>
				<div class="myslides fade"><br>
				<div><img class="slide" src="photos/slide_2.png"height="95%" width="100%"></div>
				</div>
				<div class="myslides fade"><br>
				<div><img class="slide" src="photos/slide_3.png"height="95%" width="100%"></div>
				</div>
				<div class="myslides fade"><br>
				<div><img class="slide" src="photos/slide_4.png"height="95%" width="100%"></div>
				</div>
				<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
				<a class="next" onclick="plusSlides(1)">&#10095;</a>
				<br>
				<div class="bar_low"></div>
			</div>
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<div style="text-align:center">
			<span class="dots" onclick="currentSlide(1)"></span> 
			<span class="dots" onclick="currentSlide(2)"></span> 
			<span class="dots" onclick="currentSlide(3)"></span> 
			<span class="dots" onclick="currentSlide(4)"></span> 
			</div><br><br><br><br><br><br>
			<script src="javaScript/javascript.js"></script>
			<div class="back_6">
			<div class="back_6_1">		
				<div class="front_1">
					<a href="home_and_living.php"><img src="photos/home.png" height="150px" width="150px"></a>
				</div>
			</div>
			<div class="back_6_1">		
				<div class="front_1">
					<a href="books_and_music.php"><img src="photos/book.png" height="150px" width="150px"></a>
				</div>
			</div>
			<div class="back_6_1">		
				<div class="front_1">
					<a href="electronics.php"><img src="photos/electronics.png" height="150px" width="150px"></a>
				</div>
			</div>
			<div class="back_6_1">		
				<div class="front_1">
					<a href="sports.php"><img src="photos/sports.png" height="150px" width="150px"></a>
				</div>
			</div>
			<div class="back_6_1">		
				<div class="front_1">
					<a href="fashion.php"><img src="photos/fashion.png" height="150px" width="150px"></a>
				</div>
			 </div>
			</div>
		</div>
	</div>
</body>
</html>