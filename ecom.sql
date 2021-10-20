-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2021 at 10:02 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `name` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `name`) VALUES
(1, 'mens'),
(2, 'women'),
(3, 'baby_and_kids'),
(4, 'electronics'),
(5, 'sports_books_more');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `p_id` int(11) DEFAULT NULL,
  `main_image` varchar(256) DEFAULT NULL,
  `image2` varchar(256) DEFAULT NULL,
  `image3` varchar(256) DEFAULT NULL,
  `image4` varchar(256) DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`p_id`, `main_image`, `image2`, `image3`, `image4`) VALUES
(1, 'men1.jpg', 'men2.jpg', 'men3.jpg', 'men4.jpg'),
(2, 'men_jacket_1.jpg', 'men_jacket_2.jpg', 'men_jacket_3.jpg', 'men_jacket_4.jpg'),
(3, 'women_jogger_1.jpg', 'women_jogger_2.jpg', 'women_jogger_3.jpg', 'women_jogger_4.jpg'),
(4, 'women_trouser_1.jpg', 'women_trouser_2.jpg', 'women_trouser_3.jpg', 'women_trouser_4.jpg'),
(5, 'headphone_1.jpg', 'headphone_2.jpg', 'headphone_3.jpg', 'default.jpg'),
(6, 'mobile_1.jpg', 'mobile_2.jpg', 'mobile_3.jpg', 'mobile_4.jpg'),
(7, 'mockup_1.jpg', 'mockup_2.jpg', 'mockup_3.jpg', 'mockup_4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `subcategory_id` int(11) DEFAULT NULL,
  `name` text DEFAULT NULL,
  `price` decimal(40,0) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `category_id`, `subcategory_id`, `name`, `price`, `description`) VALUES
(1, 1, 2, 'Men\'s Full sleeve hoodie', '55', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente tempore dolor exercitationem deleniti sed odit esse tenetur ipsam provident. Maiores aliquid, libero est sequi totam fuga quia quam molestias nemo cumque aperiam blanditiis reprehenderit labore! Quibusdam, reiciendis. Rem alias veniam libero possimus sapiente ea. Omnis veritatis similique esse adipisci.'),
(2, 1, 2, 'Men\'s Black Solid Sporty Jacket', '110', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente tempore dolor exercitationem deleniti sed odit esse tenetur ipsam provident. Maiores aliquid, libero est sequi totam fuga quia quam molestias nemo cumque aperiam blanditiis reprehenderit labore! Quibusdam, reiciendis. Rem alias veniam libero possimus sapiente ea. Omnis veritatis similique esse adipisci.'),
(3, 2, 9, 'Women\'s Easy Movement Joggers', '120', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente tempore dolor exercitationem deleniti sed odit esse tenetur ipsam provident. Maiores aliquid, libero est sequi totam fuga quia quam molestias nemo cumque aperiam blanditiis reprehenderit labore! Quibusdam, reiciendis. Rem alias veniam libero possimus sapiente ea. Omnis veritatis similique esse adipisci.'),
(4, 2, 9, 'Women\'s Trouser', '200', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente tempore dolor exercitationem deleniti sed odit esse tenetur ipsam provident. Maiores aliquid, libero est sequi totam fuga quia quam molestias nemo cumque aperiam blanditiis reprehenderit labore! Quibusdam, reiciendis. Rem alias veniam libero possimus sapiente ea. Omnis veritatis similique esse adipisci.'),
(5, 4, 19, 'Sony\'s VX-HB900N Wireless Headphones', '250', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente tempore dolor exercitationem deleniti sed odit esse tenetur ipsam provident. Maiores aliquid, libero est sequi totam fuga quia quam molestias nemo cumque aperiam blanditiis reprehenderit labore! Quibusdam, reiciendis. Rem alias veniam libero possimus sapiente ea. Omnis veritatis similique esse adipisci.'),
(6, 4, 17, 'HTC 8gb 256gb Black mobile', '850', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente tempore dolor exercitationem deleniti sed odit esse tenetur ipsam provident. Maiores aliquid, libero est sequi totam fuga quia quam molestias nemo cumque aperiam blanditiis reprehenderit labore! Quibusdam, reiciendis. Rem alias veniam libero possimus sapiente ea. Omnis veritatis similique esse adipisci.'),
(7, 4, 17, 'Apple iPad Pro 3rd Gen 2021 27.96 cm, tablet 8 GB RAM, 128 GB', '1250', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente tempore dolor exercitationem deleniti sed odit esse tenetur ipsam provident. Maiores aliquid, libero est sequi totam fuga quia quam molestias nemo cumque aperiam blanditiis reprehenderit labore! Quibusdam, reiciendis. Rem alias veniam libero possimus sapiente ea. Omnis veritatis similique esse adipisci.');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(11) DEFAULT NULL,
  `subcategoryid` int(11) NOT NULL,
  `name` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `subcategoryid`, `name`) VALUES
(1, 1, 'Foot Wear'),
(1, 2, 'Top Wear'),
(1, 3, 'Bottom Wear'),
(1, 4, 'Men\'s Groming'),
(1, 5, 'Accessories'),
(2, 6, 'Western Wear'),
(2, 7, 'Foot Wear'),
(2, 8, 'Top Wear'),
(2, 9, 'Bottom Wear'),
(2, 10, 'Beauty Groming'),
(2, 11, 'Accessories'),
(3, 12, 'Boys Clothing'),
(3, 13, 'Girls Clothing'),
(3, 14, 'Toys'),
(3, 15, 'Baby Care'),
(3, 16, 'Kids Footwear'),
(4, 17, 'Mobiles'),
(4, 18, 'Laptops'),
(4, 19, 'Gaming & Accessories'),
(4, 20, 'Health Care Appliances'),
(5, 21, 'Books'),
(5, 22, 'Gaming'),
(5, 23, 'Music'),
(5, 24, 'Excerice & Fitness');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `products_ibfk_1` (`category_id`),
  ADD KEY `products_ibfk_2` (`subcategory_id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`subcategoryid`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `subcategoryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `products` (`product_id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategory` (`subcategoryid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `subcategory_ibfk_1` FOREIGN KEY (`id`) REFERENCES `category` (`category_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
