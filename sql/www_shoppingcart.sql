-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2021 at 10:07 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `www_shoppingcart`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `p_detail` text COLLATE utf8_turkish_ci NOT NULL,
  `p_price` double(10,2) NOT NULL,
  `p_imgurl` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `p_status` enum('0','1') COLLATE utf8_turkish_ci NOT NULL DEFAULT '1' COMMENT '1: Active | 2: Passive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `p_name`, `p_detail`, `p_price`, `p_imgurl`, `p_status`) VALUES
(1, 'Demo Ürün - 1', 'Bu kısım bir demo açıklamadır - 1', 29.99, 'p-01.jpg', '0'),
(2, 'Demo Ürün - 2', 'Bu kısım bir demo açıklamadır - 2', 24.99, 'p-02.jpg', '1'),
(3, 'Demo Ürün - 3', 'Bu kısım bir demo açıklamadır - 3', 41.99, 'p-03.jpg', '0'),
(4, 'Demo Ürün - 4', 'Bu kısım bir demo açıklamadır - 4', 23.99, 'p-04.jpg', '1'),
(5, 'Demo Ürün - 5', 'Bu kısım bir demo açıklamadır - 5', 14.99, 'p-05.jpg', '0'),
(6, 'Demo Ürün - 6', 'Bu kısım bir demo açıklamadır - 6', 7.99, 'p-06.jpg', '1'),
(7, 'Demo Ürün - 7', 'Bu kısım bir demo açıklamadır - 7', 46.99, 'p-07.jpg', '0'),
(8, 'Demo Ürün - 8', 'Bu kısım bir demo açıklamadır - 8', 63.99, 'p-08.jpg', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
