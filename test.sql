-- phpMyAdmin SQL Dump
-- version 4.5.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 13, 2018 at 07:29 PM
-- Server version: 5.7.10
-- PHP Version: 7.1.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'cat1'),
(2, 'cat2'),
(3, 'cat3'),
(4, 'cat4'),
(15, 'demo1'),
(16, 'demo1'),
(67, 'demo1'),
(68, 'demo1'),
(78, 'demo1'),
(79, 'demo1'),
(81, 'demo1'),
(88, 'demo1');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` decimal(65,0) NOT NULL,
  `category_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`, `category_id`, `type_id`) VALUES
(1, 'name1', '10', 1, 1),
(2, 'name2', '11', 1, 2),
(3, 'name3', '10', 2, 1),
(4, 'name4', '11', 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `name`) VALUES
(1, 'type1'),
(2, 'type2'),
(3, 'type3'),
(4, 'type4');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(40) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `options` varchar(255) DEFAULT NULL,
  `sections` varchar(255) DEFAULT NULL,
  `createdAt` date DEFAULT NULL,
  `updatedAt` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `options`, `sections`, `createdAt`, `updatedAt`) VALUES
(1, 'traian', 'alex', 'victor_traian@yahoo.com', '["canReadNews","canPostNews","canDeleteNews"]', 'news|companyNews', NULL, '2017-11-23'),
(2, 'vic', 'alex', 'victortraian92@gmail.com', NULL, NULL, NULL, NULL),
(3, 'traian', 'demo', 'alex@usa.com', '["canReadNews","canPostNews","canDeleteNews"]', 'news|companyNews', '2017-11-23', '2018-05-13'),
(4, 'demo', 'demo', 'alex@usa.com', '["canReadNews","canPostNews","canDeleteNews"]', 'news|companyNews', '2017-11-23', NULL),
(5, 'demo', 'demo', 'alex@usa.com', '["canReadNews","canPostNews","canDeleteNews"]', 'news|companyNews', '2017-11-23', NULL),
(6, 'demo', 'demo', 'alex@usa.com', '["canReadNews","canPostNews","canDeleteNews"]', 'news|companyNews', '2017-11-23', NULL),
(7, 'demo', 'demo', 'alex@usa.com', '["canReadNews","canPostNews","canDeleteNews"]', 'news|companyNews', '2017-11-23', NULL),
(8, 'demo', 'demo', 'alex@usa.com', '["canReadNews","canPostNews","canDeleteNews"]', 'news|companyNews', '2017-11-24', NULL),
(9, 'demo', 'demo', 'alex@usa.com', '["canReadNews","canPostNews","canDeleteNews"]', 'news|companyNews', '2017-11-26', NULL),
(10, 'demo', 'demo', 'alex@usa.com', '["canReadNews","canPostNews","canDeleteNews"]', 'news|companyNews', '2017-11-26', NULL),
(11, 'demo', 'demo', 'alex@usa.com', '["canReadNews","canPostNews","canDeleteNews"]', 'news|companyNews', '2017-11-26', NULL),
(12, 'demo', 'demo', 'alex@usa.com', '["canReadNews","canPostNews","canDeleteNews"]', 'news|companyNews', '2017-11-27', NULL),
(13, 'demo', 'demo', 'alex@usa.com', '["canReadNews","canPostNews","canDeleteNews"]', 'news|companyNews', '2017-11-27', NULL),
(14, 'demo', 'demo', 'alex@usa.com', '["canReadNews","canPostNews","canDeleteNews"]', 'news|companyNews', '2017-11-28', NULL),
(15, 'demo', 'demo', 'alex@usa.com', '["canReadNews","canPostNews","canDeleteNews"]', 'news|companyNews', '2017-11-28', NULL),
(16, 'demo', 'demo', 'alex@usa.com', '["canReadNews","canPostNews","canDeleteNews"]', 'news|companyNews', '2017-11-28', NULL),
(17, 'demo', 'demo', 'alex@usa.com', '["canReadNews","canPostNews","canDeleteNews"]', 'news|companyNews', '2018-05-13', NULL),
(18, 'demo', 'demo', 'alex@usa.com', '["canReadNews","canPostNews","canDeleteNews"]', 'news|companyNews', '2018-05-13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users2`
--

CREATE TABLE `users2` (
  `user_id` int(11) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `passcode` varchar(100) DEFAULT NULL,
  `profile_background` text,
  `profile_background_position` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users2`
--

INSERT INTO `users2` (`user_id`, `username`, `email`, `name`, `passcode`, `profile_background`, `profile_background_position`) VALUES
(1, 'victor92', 'alex@usa.com', 'Traian', '1111', '15118285331.jpg', '0px');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `type_id` (`type_id`),
  ADD KEY `type_id_2` (`type_id`),
  ADD KEY `type_id_3` (`type_id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users2`
--
ALTER TABLE `users2`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `users2`
--
ALTER TABLE `users2`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
