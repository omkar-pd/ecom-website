-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2021 at 03:54 PM
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
(1, 1, 1, 'PARAGON Men Flip-Flop', '45', 'Closure: Pull On\r\nShoe Width: Medium\r\nOuter Material: Nylon\r\nClosure Type: Slip On, Rub gently with a damp cloth and mild soap\r\nToe Style: Open Toe\r\nWarranty Type: Manufacturer, Warranty Description: 30 days\r\nThe product color and look & feel may vary from the visual representation on the Website.'),
(2, 2, 6, ' SERA Women\'s Georgette A-Line Mini Dress', '86', 'Care Instructions: Machine Wash\r\nFit Type: Regular\r\nColor Name: Black\r\nMaterial: Georgette\r\nmachine wash\r\nA-Line\r\nHalf Sleeve\r\nMini\r\nGeorgette, Half Sleeve, Round Neck, A-Line Dresses. Cold Machine wash with similar colors, Do not Bleach');

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
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `subcategoryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

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
