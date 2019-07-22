-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 14, 2018 at 05:33 PM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sabkuch`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'devgoel.bd@gmail.com', 'passwordiscool');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `price` int(10) NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `product_id`) VALUES
(6, 40, 40),
(7, 41, 41),
(8, 43, 43),
(9, 45, 45),
(10, 46, 46);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `category` text NOT NULL,
  `product_description` varchar(1000) NOT NULL,
  `place` text NOT NULL,
  `price` int(10) NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `product_description`, `place`, `price`, `image`) VALUES
(5, 'T-SHIRT', 'Women FASHION', 'Black and white t shirt for women		', 'Shri Muktsar Sahib', 500, 'products/black-and-white-stripe-tee_4460x4460.jpg'),
(7, 'Kids Fancy T-Shirt', 'Kids FASHION', 'Fancy T-shirt for Kids. High Quality Stuff.			', 'Kapurthala', 346, 'products/bright-purple-t-shirt_4460x4460.jpg'),
(8, 'Beautiful Ladies Dress', 'Women FASHION', 'Beautiful ladies dress with complete hand stitching 				', 'Sangrur', 2500, 'products/7475-ladies-casual-dresses-summer-two-colors-pleated.jpg'),
(9, 'Kids Fancy track Suit ', 'Kids FASHION', 'Comfortable kids tracksuit set. the Suit is made up of high quality martial. 		', 'Jalandhar', 350, 'products/1.0x0.jpg'),
(10, 'Lower', 'Men FASHION', 'Lower for Men with extra comfortable grip		', 'Fathegarh Saheb', 151, 'products/41OJZebRUoL._SL246_SX190_CR0,0,190,246_.jpg'),
(11, 'Boys Houddie Black ', 'Kids FASHION', 'Houddie for kids. Branded Houdiee with Company warranty.						', 'Gurdaspur', 3620, 'products/2012-Winter-Sweater-for-Men-for-better-outlook.jpg'),
(12, 'Lenovo Laptop', 'Big electronics', 'Lenovo Laptop with i3 7th gen Processor, 4GB RAM and 500GB HDD.		', 'Moga', 35000, 'products/12039452_525963140912391_6353341236808813360_n.png'),
(13, 'Home Dining Set', 'Furniture', 'Handmade Wooden Dining table with complete set of chairs.		', 'Fazilka', 56000, 'products/amer-furniture.jpg'),
(14, '', '', '', '', 0, 'products/'),
(15, 'fancy showcase', 'Home Decoration', 'fancy showcase for sale.	', 'Jalandhar', 15000, 'products/asian-furniture-250x250.jpg'),
(16, 'Classic flower pot holder for ', 'Home Decoration', 'Flower pot holder with capacity of holding max 6 pots		', 'Mansa', 15130, 'products/back.jpg'),
(17, 'King size Bed ', 'Furniture', 'King Size High quality bed with 1 year for manufacturing defaults guaranty.		', 'Fazilka', 30000, 'products/bedroom-furniture-250x250.jpg'),
(18, 'Blazer for MEN', 'Men FASHION', 'Formal Blazer for men						', 'Kapurthala', 1560, 'products/blazers.png'),
(19, '50 Music Records for Sale', 'Musical Instruments', 'Vintage collection of 50 old and best records for sale.		', 'Sangrur', 125000, 'products/books_and_music.jpg'),
(20, 'Queen Size bed', 'Furniture', 'Queen Size bed with high Quality mattress for sale 			', 'Bathinda', 15130, 'products/cache-furnitures-ltd-cot-j6619q-wos-60x75.jpg'),
(21, 'Canon 80 D DSLR camera ', 'Big electronics', 'Cannon 80D DSLR camera 			', 'Ludhiana', 120000, 'products/camera.jpg'),
(22, 'Fossil quarts watch for sale', 'Men Watches', 'Fossil classic gentleman watch for sale 	', 'Ludhiana', 56000, 'products/classic-quartz-wrist-watch_4460x4460.jpg'),
(23, 'LG refrigrator', 'Big electronics', 'LG refrigerator with 3 cold modes for sale 	', 'Moga', 35000, 'products/CT_WM_BTS-BTC-AppliancesHome_20150723.jpg'),
(24, 'Boys Sherwani', 'Kids FASHION', 'High Quality sherwani for sale\r\n		', 'Mohali', 6546, 'products/download.jpg'),
(25, 'Everrady Emergency lamp', 'Big electronics', 'Everready lamp with long battery life						', 'Jalandhar', 500, 'products/emergency light.JPG'),
(26, 'fancy wooden Showcase ', 'Home Decoration', 'wooden Showcase	', 'Mohali', 15135, 'products/furniture-book-shelf-250x250.jpg'),
(27, 'Men formal Shirt', 'Men FASHION', 'white shirt formal			', 'Nawansahar', 1200, 'products/gents-formal-250x250.jpg'),
(28, 'girls fancy frock ', 'Kids FASHION', '						', 'Kapurthala', 1230, 'products/girls.png'),
(29, 'Girls dress', 'Kids FASHION', 'girls dress green					', 'Patiala', 1352, 'products/GirlsClothing_Widgets.jpg'),
(30, 'ladies beautiful frock for sal', 'Women FASHION', '			', 'Gurdaspur', 13502, 'products/girl-walking.jpg'),
(31, 'kids unisex tees', 'Kids FASHION', 'kids unisex tees in different color						', 'Kapurthala', 200, 'products/green-t-shirt_4460x4460.jpg'),
(32, 'women tracksuit', 'Women FASHION', 'women grey tracksuit for sale						', 'Mansa', 3500, 'products/grey-kids-zip-up_4460x4460.jpg'),
(33, 'boys shirt', 'Kids FASHION', '						', 'Moga', 120, 'products/image28.jpg'),
(34, 'Apple ipad for sale', 'Mobiles', 'Apple Ipad3 for sale						', 'Shri Muktsar Sahib', 46000, 'products/ipad 2.jpg'),
(35, 'iPad 2 for sale', 'Mobiles', '						', 'Mansa', 65500, 'products/ipad.jpg'),
(36, 'iphone 4s', 'Mobiles', 'iPhone 4s black for sale					', 'Ropnagar', 13500, 'products/iphone mobile.jpg'),
(37, 'iphone cases', 'Mobiles', '			', 'Ropnagar', 100, 'products/iphone-6-7-phone-cases_4460x4460.jpg'),
(38, 'Iron', 'Big electronics', '						', 'Mohali', 1500, 'products/iron.JPG'),
(39, 'HP laptop', 'Big electronics', 'HP laptop Red for sale with i5 processor, 8GB RAM and 1TB HDD						', 'Pathankot', 48000, 'products/k2-_ed8b8f8d-e696-4a96-8ce9-d78246f10ed1.v1.jpg-bc204bdaebb10e709a997a8bb4518156dfa6e3ed-optim-450x450.jpg'),
(40, 'unisex watch for both men and ', 'Women Watches', '						', 'Ludhiana', 1500, 'products/round-marble-watches_4460x4460.jpg'),
(41, 'cricket ball', 'Sports', 'season ball 						', 'Ludhiana', 350, 'products/ball.jpg'),
(42, 'gym set', 'Gym', '						', 'Fathegarh Saheb', 50000, 'products/gym pro.jpg'),
(43, 'Whey Protein for sale', 'Nutrition', 'mass gainer for gym freaks						', 'Sangrur', 2500, 'products/mass.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE IF NOT EXISTS `sign_up` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `password2` varchar(200) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `mobile_number` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`id`, `first_name`, `last_name`, `username`, `password`, `password2`, `dob`, `mobile_number`) VALUES
(7, 'Bhaskar Dev', 'Goel', 'devgoel.bd@gmail.com', 'passwordiscool', '', '28/June/1999', '9780940285'),
(8, 'Sakshi', 'Singh', 'sakshisingh', 'qwertyuiop', '', '28/June/1999', '9988895790');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
