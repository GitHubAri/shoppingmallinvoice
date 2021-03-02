-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2021 at 03:19 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `sl_no` int(11) NOT NULL,
  `particulars` varchar(255) NOT NULL,
  `unit_price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `gst` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`sl_no`, `particulars`, `unit_price`, `quantity`, `gst`, `subtotal`) VALUES
(24, 'Sugar', 44, 2, 1, 88),
(25, 'Rice', 29, 1, 0, 29),
(26, 'svdkj', 0, 0, 0, 0),
(27, 'nmn', 0, 0, 0, 0),
(28, 'klndfkn', 54, 456, 26, 2),
(29, '454', 56, 55, 5, 0),
(30, '11', 12, 13, 15, 0),
(31, 'fnbnb', 0, 0, 0, 0),
(32, 'fnbnb', 0, 0, 0, 0),
(33, 'mbfjdshvbs', 22, 55, 8, 97),
(34, '976483', 10, 5, 1, 1),
(35, 'fbmb n', 0, 0, 0, 0),
(36, 'ddbjhbdg', 5, 7, 2, 1),
(37, 'ddbjhbdg', 5, 7, 2, 35),
(38, 'jnknv', 2, 3, 1, 6),
(39, 'bjhbdjhg', 5, 222, 22, 1110);

-- --------------------------------------------------------

--
-- Table structure for table `item_details`
--

CREATE TABLE `item_details` (
  `id` int(11) NOT NULL,
  `Item_name` varchar(255) NOT NULL,
  `purchase_amount` int(50) NOT NULL,
  `sales_amount` int(50) NOT NULL,
  `purchase_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_details`
--

INSERT INTO `item_details` (`id`, `Item_name`, `purchase_amount`, `sales_amount`, `purchase_date`) VALUES
(1, 'Rice', 900, 960, '2017-10-01'),
(2, 'Oil', 1500, 1590, '2017-10-01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `trn_date`) VALUES
(1, 'aritra', 'aritraghosh.41@gmail.com', '900150983cd24fb0d6963f7d28e17f72', '2017-10-04 08:35:13'),
(2, 'abc', 'aritraghosh.41@gmail.com', '900150983cd24fb0d6963f7d28e17f72', '2017-12-17 20:29:41'),
(3, 'aritraghosh.41@gmail.com', 'aritraghosh.41@gmail.com', '900150983cd24fb0d6963f7d28e17f72', '2018-04-28 16:02:54'),
(4, 'hello', 'bdkjsbg@abc.com', '34819d7beeabb9260a5c854bc85b3e44', '2018-04-28 16:15:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`sl_no`);

--
-- Indexes for table `item_details`
--
ALTER TABLE `item_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `sl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `item_details`
--
ALTER TABLE `item_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
