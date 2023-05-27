-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2023 at 12:28 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gametopia`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_franchise` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_franchise`) VALUES
(1, 'Sony'),
(2, 'Microsoft'),
(3, 'MSI'),
(4, 'Asus'),
(5, 'Lenovo');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(100) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Consoles'),
(2, 'Laptops'),
(3, 'Games'),
(4, 'Computer Hardware'),
(5, 'Accessories');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_list`
--

CREATE TABLE `order_list` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(100) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_list`
--

INSERT INTO `order_list` (`order_id`, `user_id`, `product_id`, `quantity`) VALUES
(21, 1, 3, 0),
(22, 1, 4, 0),
(23, 1, 8, 0),
(24, 1, 4, 0),
(25, 10, 4, 0),
(26, 10, 3, 0),
(27, 10, 2, 0),
(28, 10, 8, 0),
(29, 1, 4, 0),
(30, 1, 4, 0),
(31, 1, 4, 0),
(32, 1, 1, 0),
(33, 1, 3, 0),
(34, 1, 2, 0),
(35, 1, 1, 0),
(36, 1, 7, 0),
(40, 15, 1, 0),
(41, 15, 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `product_name` varchar(300) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_name`, `product_price`, `product_desc`, `product_image`) VALUES
(1, 1, 1, 'PS5', 450, 'Sony PlayStation 5', 'prod-imgs/ps5.png'),
(2, 1, 2, 'Xbox Series S', 399, 'Microsoft Xbox Series S', 'prod-imgs/xboxs.png'),
(3, 5, 1, 'PS5 Controller', 250, 'PS5 Dualshock 5 Wireless Controller', 'prod-imgs/ps5controller.png'),
(4, 2, 3, 'MSI GE76 Raider', 2100, 'MSI GE76 12UE-456 Raider Gaming Laptop', 'prod-imgs/msiraider.png'),
(5, 2, 4, 'ASUS TUF Dash F15', 2099, 'ASUS TUF Dash F15 15.6 FHD 144Hz Gaming Laptop', 'prod-imgs/asustufdash.png'),
(6, 3, 1, 'FIFA 23', 60, 'FIFA 23 Deluxe Edition English - PS5', 'prod-imgs/fifa23.png'),
(7, 3, 2, 'FIFA 22', 49, 'Fifa 22 Standard Edition - XBOX One & Xbox Series X', 'prod-imgs/fifa22.png'),
(8, 5, 3, 'MSI GC30 Controller', 190, 'MSI FORCE GC30 DualSense Wireless Controller', 'prod-imgs/msicontroller.png'),
(9, 5, 5, 'SADES Wired Gaming Headset', 270, 'SADES Cpower Wired Gaming Headset (SA-716) For Multiple-Platforms', 'prod-imgs/headset.png'),
(10, 5, 2, 'Xbox Controller', 230, 'Xbox Series X|S Controller - Electric Volt Green', 'prod-imgs/xboxcontroller.png'),
(11, 2, 5, 'Lenovo Legion', 1900, 'Lenovo LEGION 5 15.6 165Hz QHD Gaming Laptop ', 'prod-imgs/lenovolegion.png'),
(12, 4, 4, 'ASUS PRIME Motherboard', 300, 'ASUS PRIME Z790-P DDR4 MOTHERBOARD', 'prod-imgs/asusmotherboard.png'),
(13, 4, 3, 'MSI PRO Motherboard', 330, 'MSI PRO B660M-P WIFI DDR4\r\nMotherboard', 'prod-imgs/msimotherboard.png'),
(14, 1, 1, 'PS4', 499, 'Sony playstation 4', 'prod-imgs/ps4.png');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `addr` varchar(14) DEFAULT NULL,
  `email` varchar(300) NOT NULL,
  `pass` varchar(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `mobile`, `addr`, `email`, `pass`) VALUES
(1, 'mazen', 'samer', '01024568997', 'abou qir', 'mazen.samer.2000@gmail.com', 'mazen3042000'),
(2, 'mostafa', 'aly', '01122343799', 'miami', 'mostafadesha@gmail.com', 'desha777'),
(3, 'ahmed', 'khaled', '01225469875', 'Siuf', 'ahmedkhaled@gmail.com', 'aryan333'),
(4, 'omar', 'hashim', '01023654985', 'esawy', 'omarhashim@gmail.com', 'mora5544'),
(5, 'mohamed', 'nasser', '01123654879', 'Sporting', 'mohamednasser@gmail.com', 'falconmo9'),
(6, 'ahmed', 'salah', '01026589423', 'fleming', 'ahmedsalah@gmail.com', 'sparkieka8'),
(7, 'mahmoud', 'mostafa', '01025423698', 'seiuf', 'mahmoudmostafa@gmail.com', '7oda6666'),
(8, 'mahmoud', 'adel', '01223654896', 'smouha', 'mahmoudadel@gmail.com', 'smillyx10'),
(9, 'omar', 'salah', '01123654789', 'Omar', 'omarsalah@gmail.com', 'morasalah2'),
(10, 'mohamed', 'ehab', '01275827643', 'tharwat', 'mohamedehab@gmail.com', 'wolfteam1'),
(11, 'samer', 'abdallah', '01227220605', 'abouqir', 'samer@gmail.com', 'samer123456'),
(12, 'ammar', 'ehab', '01234567899', 'tharwat', 'ammarehab@gmail.com', 'wolfteam2'),
(13, 'zeyad', 'yasser', '01234567899', 'gleem', 'zeyad@gmail.com', 'zeyad123456'),
(14, 'loay', 'hafez', '01234567899', 'smouha', 'loayhafez@gmail.com', 'loay123456'),
(15, 'menna ', 'tarek', '01000993681', 'tharwat', 'menna@gmail.com', 'witchart123');
-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `w_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`w_id`, `user_id`, `product_id`) VALUES
(13, 10, 3),
(18, 15, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`,`user_id`,`product_id`),
  ADD KEY `order_id` (`order_id`,`user_id`,`product_id`);

--
-- Indexes for table `order_list`
--
ALTER TABLE `order_list`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `order_products` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product_cat` (`product_cat`),
  ADD KEY `product_brand` (`product_brand`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`w_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order_list`
--
ALTER TABLE `order_list`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `w_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `user_info` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_list`
--
ALTER TABLE `order_list`
  ADD CONSTRAINT `order_products` FOREIGN KEY (`user_id`) REFERENCES `user_info` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `product_brand` FOREIGN KEY (`product_brand`) REFERENCES `brands` (`brand_id`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `product_cat` FOREIGN KEY (`product_cat`) REFERENCES `categories` (`cat_id`) ON UPDATE NO ACTION;

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_info` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `wishlist_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
