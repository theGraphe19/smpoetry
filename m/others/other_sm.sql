-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2019 at 04:29 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `other_sm`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `country_id` int(5) NOT NULL,
  `country_name` varchar(50) NOT NULL,
  `country_price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`country_id`, `country_name`, `country_price`) VALUES
(1, 'United Arab Emirates', 11.66),
(2, 'Egypt', 30.32),
(3, 'Lebanon', 30.33),
(4, 'Jordan', 30.33),
(5, 'Qatar', 31.51),
(6, 'Kuwait', 29.44),
(7, 'Bahrain', 19.87),
(8, 'Oman', 19.87),
(9, 'Saudi Arabia', 34.52),
(10, 'Australia', 28.18),
(11, 'New Zealand', 36.55),
(12, 'United Kigndom', 20.40),
(13, 'Spain', 34.51),
(14, 'Austria', 43.05),
(15, 'Belgium', 30.38),
(16, 'France', 31.10),
(17, 'Germany', 29.18),
(18, 'Luxembourg', 34.34),
(19, 'Netherlands', 26.02),
(20, 'Portugal', 33.13),
(21, 'Northern Ireland', 35.70),
(22, 'Italy', 35.70),
(23, 'Switzerland', 42.46),
(24, 'Singapore', 11.72),
(25, 'Malaysia', 18.70),
(26, 'Indonesia', 41.08),
(27, 'Thailand', 34.25),
(28, 'Vietnam', 49.71),
(29, 'Philippines', 60.17),
(30, 'United States', 44.16),
(31, 'Canada', 44.16),
(32, 'Mexico', 44.16);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(10) NOT NULL,
  `order_id` varchar(50) NOT NULL,
  `customer_id` varchar(50) NOT NULL,
  `tid` varchar(50) NOT NULL,
  `quantity` varchar(10) NOT NULL,
  `language` varchar(10) NOT NULL,
  `delivery_price` varchar(20) NOT NULL,
  `total_price` varchar(20) NOT NULL,
  `currency` varchar(10) NOT NULL,
  `order_date` varchar(20) NOT NULL,
  `order_time` varchar(20) NOT NULL,
  `bill_name` varchar(100) NOT NULL,
  `bill_email` varchar(100) NOT NULL,
  `bill_tel` varchar(20) NOT NULL,
  `bill_address` varchar(500) NOT NULL,
  `bill_city` varchar(50) NOT NULL,
  `bill_state` varchar(50) NOT NULL,
  `bill_country` varchar(50) NOT NULL,
  `bill_zip` varchar(10) NOT NULL,
  `ship_name` varchar(100) NOT NULL,
  `ship_tel` varchar(20) NOT NULL,
  `ship_address` varchar(500) NOT NULL,
  `ship_city` varchar(50) NOT NULL,
  `ship_state` varchar(50) NOT NULL,
  `ship_country` varchar(50) NOT NULL,
  `ship_zip` varchar(10) NOT NULL,
  `order_method` varchar(50) NOT NULL,
  `order_status` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `customer_id`, `tid`, `quantity`, `language`, `delivery_price`, `total_price`, `currency`, `order_date`, `order_time`, `bill_name`, `bill_email`, `bill_tel`, `bill_address`, `bill_city`, `bill_state`, `bill_country`, `bill_zip`, `ship_name`, `ship_tel`, `ship_address`, `ship_city`, `ship_state`, `ship_country`, `ship_zip`, `order_method`, `order_status`) VALUES
(9, '74964', '1391659', '1564589031111', '1', '', '0', '4500', 'INR', '31/07/19', '09:33:53 PM', 'Monalisa Malani', 'monalisamalani@hotmail.com', '9740096225', '5 JBS Halden Avenue', 'Kolkata', 'West Bengal', 'India', '700105', 'Monalisa Malani', '9740096225', '5 JBS Halden Avenue', 'Kolkata', 'West Bengal', 'India', '700105', '', '0'),
(21, '14434', '1733894', '1565011415972', '4', 'EN', '0', '18000', 'INR', '05/08/19', '06:53:49 PM', 'erter', 'tr@g.com', '3567', 'dftjh', 'dfgnj', 'Meghalaya', 'India', 'dfnjt', 'erter', '3567', 'dftjh', 'dfgnj', 'Meghalaya', 'India', 'dfnjt', '', '0'),
(22, '47495', '1901357', '1565027483050', '1', 'EN', '0', '4500', 'INR', '05/08/19', '11:21:50 PM', 'Rohit', 'rohit@thegraphe.com', '5675', 'dtgjtxdn', 'ghmg', 'Maharashtra', 'India', '344446', 'Rohit', '5675', 'dtgjtxdn', 'ghmg', 'Maharashtra', 'India', '344446', '', '0'),
(23, '73124', '1923554', '1565346881416', '1', 'EN', '0', '4500', 'INR', '09/08/19', '04:05:09 PM', 'cfgndfgh', 'r@f.com', '3563', 'dfgndfg', 'dfgn', 'Manipur', 'India', 'dfgn', 'cfgndfgh', '3563', 'dfgndfg', 'dfgn', 'Manipur', 'India', 'dfgn', '', '0'),
(24, '77697', '1436083', '1565349094759', '3', 'EN', '0', '13500', 'INR', '09/08/19', '04:41:56 PM', 'fcghmfgh', 'fcghm@g.com', 'h vc', 'bgh ', 'cghm', 'Karnataka', 'India', 'vchm ', 'fcghmfgh', 'h vc', 'bgh ', 'cghm', 'Karnataka', 'India', 'vchm ', '', '0'),
(25, '33881', '2043704', '1565349237638', '7', 'EN', '0', '31500', 'INR', '09/08/19', '04:44:17 PM', 'dftgjnfgyhj', 'gnjdc@g.com', '4567456', 'dfgndg', 'dftgnh', 'Manipur', 'India', 'dfgn', 'dftgjnfgyhj', '4567456', 'dfgndg', 'dftgnh', 'Manipur', 'India', 'dfgn', 'online', '0'),
(26, '86423', '1290098', '1565358255950', '4', 'EN', '0', '18000', 'INR', '09/08/19', '07:14:34 PM', 'xfbh', 'se@g.com', '4567', 'dsftghnb', 'dftghb', 'Madhya Pradesh', 'India', '3567', 'xfbh', '4567', 'dsftghnb', 'dftghb', 'Madhya Pradesh', 'India', '3567', 'cod', '0'),
(27, '51062', '2247854', '1565358302152', '1', 'EN', '0', '4500', 'INR', '09/08/19', '07:15:20 PM', 'dftghb', 'dfbh@g.com', '24356', 'dftgnh', 'dfxtgnbh', 'Meghalaya', 'India', '55563', 'dftghb', '24356', 'dftgnh', 'dfxtgnbh', 'Meghalaya', 'India', '55563', 'online', '0');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `code` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, 'SHE : SKIN AND SOUL', 'smpoBook123', 'assets/images/PNG.jpg', 90.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
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
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `country_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
