-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2024 at 03:05 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `main`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(11) NOT NULL,
  `c_address` varchar(50) NOT NULL,
  `c_email` varchar(30) NOT NULL,
  `c_phone` varchar(11) NOT NULL,
  `c_gender` varchar(11) NOT NULL,
  `birth_date` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`c_id`, `c_name`, `c_address`, `c_email`, `c_phone`, `c_gender`, `birth_date`) VALUES
(1, 'xyzzz', 'shgdg', 'dfahefgrdh', '4632', 'male', '2351'),
(2, 'xyzzz', 'shgdg', 'dfahefgrdh', '4632', 'male', '2351'),
(3, 'xyzzz', 'shgdg', 'dfahefgrdh', '4632', 'male', '2351'),
(4, 'SANDESH', 'GAIKWAD', 'sandeshgaikwad3033@gmail.com', '3462632464', '2024-03-15', 'Male'),
(5, 'sakshi gora', 'GAIKWAD', 'sandeshgaikwad3033@gmail.com', '341613613', '2024-03-17', 'Male'),
(6, 'sakshi gora', 'dshatajhta', 'sandeshgaikwad3033@gmail.com', '235345632', '2024-03-17', 'Male'),
(7, 'sakshi gora', 'dshatajhta', 'sandeshgaikwad3033@gmail.com', '235345632', '2024-03-17', 'Male'),
(8, 'xyz', 'GAIKWAD', 'sandeshgaikwad3033@gmail.com', '32234444', '2024-03-02', 'Female'),
(9, 'SAGDFDSG', 'GAIKWAD', 'sandeshgaikwad3033@gmail.com', '32523156', 'Male', '2024-03-17'),
(10, 'sonu', 'wadki', 'gaikwadsakshi810@gmail.com', '9112755524', 'Male', '2024-02-28'),
(11, 'sonu', 'wadki', 'gaikwadsakshi810@gmail.com', '9112755524', 'Male', '2024-02-28'),
(12, 'sakshi gora', 'wadki', 'gaikwadsakshi810@gmail.com', '9112755524', 'Female', '2024-02-27'),
(13, 'sakshi gora', 'wadki', 'gaikwadsakshi810@gmail.com', '9112755524', 'Female', '2024-03-01');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `product_code` int(11) NOT NULL,
  `product_name` varchar(15) NOT NULL,
  `base_price` int(20) NOT NULL,
  `seiling_price` int(20) NOT NULL,
  `quantity` int(20) NOT NULL,
  `product_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`product_code`, `product_name`, `base_price`, `seiling_price`, `quantity`, `product_date`) VALUES
(101, 'T_shirts', 200, 350, 24, '2024-02-15 16:24:13'),
(102, 'Track_paitn', 300, 450, 17, '2024-02-15 16:55:53'),
(103, 'formal_shirts', 350, 600, 166, '2024-02-15 16:57:23'),
(104, 'jeans', 400, 800, 32, '2024-02-15 16:58:43'),
(105, 'Armani_paint', 300, 500, 33, '2024-03-19 12:35:19');

-- --------------------------------------------------------

--
-- Table structure for table `inword_data`
--

CREATE TABLE `inword_data` (
  `product_code` int(11) NOT NULL,
  `product_name` varchar(11) NOT NULL,
  `base_price` int(11) NOT NULL,
  `vendor_name` varchar(30) NOT NULL,
  `quantity` int(11) NOT NULL,
  `product_date` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inword_data`
--

INSERT INTO `inword_data` (`product_code`, `product_name`, `base_price`, `vendor_name`, `quantity`, `product_date`) VALUES
(0, '', 0, '', 0, ''),
(101, 'xyz', 233, '', 223, '39==4932='),
(103, 'formal_shir', 350, '', 7, '2002-06-30'),
(103, 'formal_shir', 350, '', 3, '2024-03-15'),
(101, 'pant', 453, 'sandesh', 5, '462'),
(101, 'T_shirts', 200, 'xyz', 5, '2024-03-15'),
(101, 'T_shirts', 200, 'SANDESH', 4, '2024-03-17'),
(103, 'formal_shir', 350, 'SANDESH', 121, '2024-03-19'),
(102, 'Track_paitn', 300, 'SANDESH', 344, ''),
(105, 'Armani_pain', 300, '', 34, ''),
(102, 'Track_paitn', 300, 'SANDESH', 4, '2024-03-20'),
(104, 'jeans', 400, 'xyz', 2, '2024-03-20'),
(105, 'Armani_pain', 300, 'sandesh', 4, '2024-03-20'),
(101, 'T_shirts', 200, 'sandesh', 10, '2024-03-21'),
(102, 'Track_paitn', 300, 'xyz', 10, '2024-03-24'),
(106, 'belt', 50, 'SANDESH', 121, '2024-03-24');

-- --------------------------------------------------------

--
-- Table structure for table `outword_date`
--

CREATE TABLE `outword_date` (
  `product_code` int(11) NOT NULL,
  `product_name` varchar(11) NOT NULL,
  `ceiling_price` int(11) NOT NULL,
  `customer_name` varchar(30) NOT NULL,
  `quantity` int(11) NOT NULL,
  `product_date` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `outword_date`
--

INSERT INTO `outword_date` (`product_code`, `product_name`, `ceiling_price`, `customer_name`, `quantity`, `product_date`) VALUES
(103, 'pant', 453, '', 5, '462'),
(101, 'T_shirts', 350, '', 5, '2024-03-15'),
(104, 'jeans', 800, '', 5, '2024-03-15'),
(101, 'pant', 453, 'sandesh', 5, '462'),
(104, 'jeans', 800, 'SANDESH', 5, '2024-03-17'),
(102, 'Track_paitn', 450, '', 40, ''),
(103, 'formal_shir', 600, '', 2, '2024-03-19'),
(101, 'T_shirts', 350, 'sakshi gora', 50, '2024-03-19'),
(101, 'T_shirts', 350, '', 10, ''),
(102, 'Track_paitn', 450, '', 340, ''),
(102, 'Track_paitn', 450, 'SANDESH', 1, '2024-03-20'),
(105, 'Armani_pain', 500, 'sonu', 10, '2024-03-20'),
(102, 'Track_paitn', 450, 'SANDESH', 10, '2024-03-24'),
(103, 'formal_shir', 600, 'sonu', 2, '2024-03-24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `srno` int(11) NOT NULL,
  `ID` varchar(11) NOT NULL,
  `PASS` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`srno`, `ID`, `PASS`) VALUES
(2, 'sandesh', 'sonu@1085'),
(3, 'yogesh', 'yogesh@123');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `v_id` int(11) NOT NULL,
  `v_name` varchar(11) NOT NULL,
  `v_address` varchar(50) NOT NULL,
  `v_email` varchar(30) NOT NULL,
  `v_phone` varchar(11) NOT NULL,
  `birth_date` varchar(10) NOT NULL,
  `v_gender` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`v_id`, `v_name`, `v_address`, `v_email`, `v_phone`, `birth_date`, `v_gender`) VALUES
(1, 'xyz', 'dgarge', 'sandkji90dksln', '1235246213', '2351', 'Male'),
(2, 'SANDESH', 'dshatajhta', 'sandeshgaikwad3033@gmail.com', '235423135', '2024-03-15', 'Male'),
(3, 'sandesh', 'dshatajhta', 'sandeshgaikwad3033@gmail.com', '24124', '2024-03-15', 'Femal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`v_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `srno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
