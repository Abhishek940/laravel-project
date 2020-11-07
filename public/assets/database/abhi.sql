-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2019 at 03:06 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abhi`
--

-- --------------------------------------------------------

--
-- Table structure for table `depatt`
--

CREATE TABLE `depatt` (
  `dept_id` int(80) NOT NULL,
  `depart_name` varchar(120) CHARACTER SET utf8 NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0:Blocked, 1:Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `depatt`
--

INSERT INTO `depatt` (`dept_id`, `depart_name`, `status`) VALUES
(1, 'IT', 1),
(2, 'Sales', 1),
(4, 'Finance', 1),
(5, 'Banking', 1);

-- --------------------------------------------------------

--
-- Table structure for table `dept_cat`
--

CREATE TABLE `dept_cat` (
  `cat_id` int(50) NOT NULL,
  `cat_name` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `dept_id` int(80) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0:Blocked, 1:Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dept_cat`
--

INSERT INTO `dept_cat` (`cat_id`, `cat_name`, `dept_id`, `status`) VALUES
(1, 'Software', 1, 1),
(2, 'Hardware', 1, 1),
(3, 'Marketing', 2, 1),
(4, 'Networking', 0, 1),
(5, 'Networking', 0, 1),
(12, 'Account', 4, 1),
(13, 'Operational', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `enq`
--

CREATE TABLE `enq` (
  `id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `depart` varchar(255) NOT NULL,
  `depart_cat` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enq`
--

INSERT INTO `enq` (`id`, `fname`, `lname`, `email`, `dob`, `depart`, `depart_cat`, `gender`, `address`) VALUES
(3, 'Rajan', 'kkk', 'rajan102@gmail.com', '2019-05-10 17:25', '2', '3', 'male', 'hkhk'),
(4, 'neha', 'kumari', 'neha105@yahoo.com', '2019-05-10 17:29', '1', '1', 'female', 'gg'),
(5, 'Abhishek', 'Kumar', 'akabhishek7485@gmail.com', '2019-05-07 17:52', '1', '1', 'male', 'fhdfh'),
(6, 'Neha', 'sinha', 'neha105@yahoo.com', '2019-05-11 18:17', '4', '12', 'female', 'Delhi'),
(8, 'Sonali', 'kumari', 'sonali008@yahoo.com', '2019-05-16 18:25', '5', '13', 'female', 'Patna');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `depatt`
--
ALTER TABLE `depatt`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `dept_cat`
--
ALTER TABLE `dept_cat`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `enq`
--
ALTER TABLE `enq`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `depatt`
--
ALTER TABLE `depatt`
  MODIFY `dept_id` int(80) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dept_cat`
--
ALTER TABLE `dept_cat`
  MODIFY `cat_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `enq`
--
ALTER TABLE `enq`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
