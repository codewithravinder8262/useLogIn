-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2021 at 01:54 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bgt`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cname`, `status`) VALUES
(1, 'Test', 0),
(2, 'Test', 0),
(3, 'shop', 0),
(4, 'hello', 0),
(5, 'Test', 0),
(6, 'Test', 0),
(7, 'Test', 0),
(8, 'Test', 0),
(9, 'hello', 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `subcategory` varchar(50) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `pimage` varchar(50) NOT NULL,
  `descrip` varchar(500) NOT NULL,
  `descrip1` varchar(500) NOT NULL,
  `descrip2` varchar(500) NOT NULL,
  `descrip3` varchar(500) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `pdf1` varchar(50) NOT NULL,
  `pdf2` varchar(50) NOT NULL,
  `pdf3` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category`, `subcategory`, `pname`, `pimage`, `descrip`, `descrip1`, `descrip2`, `descrip3`, `content`, `pdf1`, `pdf2`, `pdf3`, `status`) VALUES
(9, 'javascript', 'TEST', 'sdf', 'Screenshot_2021-03-09-19-11-25-45.png', 'ghj', 'html', 'php', 'drf', 'CKghjk', 'sst', 'sse1', 'ssw1', 'deactive'),
(10, 'javascript', 'NAME', 'welcome', 'Screenshot_2021-03-09-19-11-25-45.png', 'dfghj', 'html2', 'cvbn', 'ghj', 'CKdfghjk', 'sst', 'sse', 'you', 'deactive'),
(11, 'PHP', 'SHOP', 'hello', 'Screenshot_2021-03-09-19-11-25-45.png', 'ghjk', 'nj', 'jh', 'kjk', 'CKfhbjmkj', 'sst', 'sse1', 'you', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `id` int(11) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `subname` varchar(50) NOT NULL,
  `substatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `cname`, `subname`, `substatus`) VALUES
(1, 'TEST', 'name', 0),
(2, 'SHOP', 'Hello', 0),
(4, 'SHOP', 'name', 0),
(5, 'SHOP', 'name', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sub_category1`
--

CREATE TABLE `sub_category1` (
  `id` int(11) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `subname` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_category1`
--

INSERT INTO `sub_category1` (`id`, `cname`, `subname`, `status`) VALUES
(1, 'SHOP', 'Hello', 'Active'),
(2, 'HELLO', 'name', 'Deactive'),
(5, 'TEST', 'developer', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `users1`
--

CREATE TABLE `users1` (
  `id` int(11) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users1`
--

INSERT INTO `users1` (`id`, `cname`, `status`) VALUES
(4, 'hello', 'deactive'),
(7, 'bye', 'active'),
(8, 'shop', 'deactive'),
(9, 'Test', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_category1`
--
ALTER TABLE `sub_category1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users1`
--
ALTER TABLE `users1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sub_category1`
--
ALTER TABLE `sub_category1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users1`
--
ALTER TABLE `users1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
