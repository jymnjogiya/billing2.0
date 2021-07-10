-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 10, 2021 at 09:24 AM
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
-- Database: `crm2`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `GST` varchar(24) NOT NULL,
  `bank` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `bank_number` varchar(255) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `address3` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `ifsc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `company_name`, `customer_name`, `mobile`, `GST`, `bank`, `email_address`, `bank_number`, `address1`, `address2`, `address3`, `website`, `ifsc`) VALUES
(1, 'Progragon', 'Varuday libong', '9879879875', '150815081508', 'Axis ', '', '', '', '', '', '', ''),
(2, 'lembo', 'jimish jamal', '9879879873', '150815081509', 'ICICI', '', '', '', '', '', '', ''),
(3, 'balija', 'husikea', '9897198798', '11111111111111', 'SBI', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
