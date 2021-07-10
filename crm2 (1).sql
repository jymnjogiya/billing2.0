-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2021 at 01:12 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

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
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(15) NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `cat_remark` varchar(50) NOT NULL,
  `isDeleted` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_remark`, `isDeleted`) VALUES
(1, 'Sheets', 'Copper clad Sheets', 0);

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
  `ifsc` varchar(255) NOT NULL,
  `isDeleted` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `company_name`, `customer_name`, `mobile`, `GST`, `bank`, `email_address`, `bank_number`, `address1`, `address2`, `address3`, `website`, `ifsc`, `isDeleted`) VALUES
(3, 'balija', 'husikea', '9897198798', '11111111111111', 'SBI', '', '', '', '', '', '', '', 1),
(8, 'ABCD', 'Mohan', '7744112255', '1155997755', 'SBI', 'mohan@xyz.com', '2597864239', 'ahmedabad', 'gujarat', 'india', 'mohan.com', 'UTIVB0062', 0),
(10, 'xyz', 'Rohan', '1122334455', '22335566', 'ICICI', 'abc@g.com', '54896782', 'mumbai', 'maharashtra', 'india', 'rohan.com', 'UTIBB7788', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prod_id` int(15) NOT NULL,
  `prod_name` varchar(50) NOT NULL,
  `prod_cat` int(15) NOT NULL,
  `prod_unit` varchar(50) NOT NULL,
  `prod_size` text NOT NULL,
  `prod_quantity` int(15) NOT NULL,
  `prod_remarks` varchar(50) NOT NULL,
  `isDeleted` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prod_id`, `prod_name`, `prod_cat`, `prod_unit`, `prod_size`, `prod_quantity`, `prod_remarks`, `isDeleted`) VALUES
(1, 'XPC', 1, 'nos', '1024*1024', 1000, 'XPC 35Micro-1.5mm', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prod_id`),
  ADD KEY `category_product` (`prod_cat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prod_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `category_product` FOREIGN KEY (`prod_cat`) REFERENCES `category` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
