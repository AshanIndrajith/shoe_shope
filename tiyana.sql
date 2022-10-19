-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2022 at 01:45 PM
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
-- Database: `tiyana`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `Telephone` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL,
  `district_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `user_name`, `Telephone`, `email`, `password`, `district_id`) VALUES
(0, 'Ashan', 768958547, 'power@gail.com', '$2y$10$eddCLQPDgJtlc2x6X9umr.YsTdlGUXFJ9Ls5w6T2LyZQtyXlRrYIq', 0),
(0, 'keshan', 124545985, 'keshan@gmail.com', '$2y$10$G1sLs2R/vC334Efo478Z0epgJZYfcqqZa9wgZlp2yFzD1jZZvMDDu', 0),
(0, 'Ashan', 786525487, 'nethmirashmika@gmail.com', '$2y$10$pon33c2wJunnCJBKK2v1Nevzqll4eEuqRa1kh0Gln5WldS/rE0QTy', 0),
(0, 'Ashan', 786525487, 'nethmirashmika@gmail.com', '$2y$10$PPqX6PubrGqSzPowIpv/CexSpIgrsaAxPrE/v/Eds0Z9B0k028M9O', 0),
(0, 'Ashan', 798587458, 'ashanindrajith610@gmail.com', '$2y$10$O2heO4qwnd2Z5aJACKNDHeTeKLK2TC9PduT990jRmg4f3Zj.b7vaG', 6);

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `id` int(11) NOT NULL,
  `name` char(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `name`) VALUES
(1, 'Ampara'),
(2, 'Anuradhapura'),
(3, 'Badulla'),
(4, 'Batticaloa'),
(5, 'Colombo'),
(6, 'Galle'),
(7, 'Gampaha'),
(8, 'Hambantota'),
(9, 'Jaffna'),
(10, 'Kalutara'),
(11, 'Kandy'),
(12, 'Kegalle'),
(13, 'Kilinochchi'),
(14, 'Kurunegala'),
(15, 'Mannar'),
(16, 'Matale'),
(17, 'Matara'),
(18, 'Moneragala'),
(19, 'Mullaitivu'),
(20, 'Nuwara Eliya'),
(21, 'Polonnaruwa'),
(22, 'Puttalam'),
(23, 'Ratnapura'),
(24, 'Trincomalee'),
(25, 'Vavuniya');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `category` varchar(100) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `description` varchar(200) NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `category`, `price`, `description`, `quantity`, `image`) VALUES
(1, 'Ankle strap block  heel', 'women', '1452', 'This is a beautiful shoe for women. be smart.', 11, 'p6.jpg'),
(2, 'Black suede ankle shoe ', 'women', '1750', 'This is a beautiful shoe for women. be smart.', 11, 'p11.jpg'),
(3, 'Black strappy tie up shoe', 'women', '1980', 'This is a beautiful shoe for women. be smart.', 11, 'p10.jpg'),
(4, 'Black suede ankle shoe ', 'women', '1750', 'This is a beautiful shoe for women. be smart.', 11, 'p2.jpg'),
(5, 'Ankle strap block  heel', 'women', '1750', 'This is a beautiful shoe for women. be smart.', 15, 'p5.jpg'),
(6, 'Ankle strap block  heel', 'women', '1850', 'This is a beautiful shoe for women. be smart.', 10, 'p7.jpg'),
(7, 'Black suede ankle shoe ', 'women', '1450', 'This is a beautiful shoe for women. be smart.', 11, 'p4.jpg'),
(8, 'Ankle strap block  heel', 'women', '1850', 'This is a beautiful shoe for women. be smart.', 14, 'p8.jpg'),
(9, 'Black suede ankle shoe ', 'women', '1452', 'This is a beautiful shoe for women. be smart.', 4, 'p9.jpg'),
(10, 'Ankle strap block  heel', 'women', '1850', 'This is a beautiful shoe for women. be smart.', 8, 'p3.jpg'),
(11, 'Resly want shoes black', 'women', '1350', 'This is a beautiful shoe for women. be smart.', 15, 'p1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
