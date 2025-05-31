-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2023 at 02:44 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `msc_sup`
--

-- --------------------------------------------------------

--
-- Table structure for table `barangay`
--

CREATE TABLE `barangay` (
  `barangay_no` varchar(50) NOT NULL,
  `barangay` varchar(50) NOT NULL,
  `Zipcode` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barangay`
--

INSERT INTO `barangay` (`barangay_no`, `barangay`, `Zipcode`) VALUES
('12', 'Jasaan', '4009'),
('12', 'Jasaan', '4009'),
('12', 'Jasaan', '4009'),
('12', 'Jasaan', '4009'),
('12', 'Jasaan', '4009'),
('12', 'Jasaan', '4009'),
('12', 'Jasaan', '4009'),
('12', 'Jasaan', '4009'),
('12', 'Jasaan', '4009'),
('12', 'Jasaan', '4009'),
('12', 'Jasaan', '4009'),
('12', 'Jasaan', '4009'),
('12', 'Jasaan', '4009'),
('12', 'Jasaan', '4009'),
('12', 'Jasaan', '4009'),
('12', 'Jasaan', '4009'),
('12', 'Jasaan', '4009'),
('12', 'Jasaan', '4009'),
('12', 'Jasaan', '4009'),
('12', 'Jasaan', '4009'),
('12', 'Jasaan', '4009'),
('12', 'Jasaan', '4009'),
('12', 'Jasaan', '4009'),
('12', 'Jasaan', '4009'),
('12', 'Jasaan', '4009'),
('12', 'Jasaan', '4009');

-- --------------------------------------------------------

--
-- Table structure for table `borrow`
--

CREATE TABLE `borrow` (
  `trans_id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `barangay` varchar(50) NOT NULL,
  `item` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `date_time_borrow` datetime NOT NULL,
  `date_return` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `borrow`
--

INSERT INTO `borrow` (`trans_id`, `fname`, `lname`, `barangay`, `item`, `quantity`, `date_time_borrow`, `date_return`, `status`, `description`) VALUES
(53, 'Abegail', 'Lunox', 'Gatid', 'Basketball(Ball)', 2, '2023-04-07 14:55:28', '2023-03-10', 'Approved', ''),
(54, 'Beatrix', 'oquialda', 'Bagumbayan', 'VolleyBall(Ball)', 1, '2023-04-07 14:55:53', '2023-03-18', 'Approved', ''),
(55, 'Berto', 'Sanity', 'Oogong', 'VolleyBall Net', 1, '2023-03-21 23:20:57', '2023-03-25', 'Approved', '');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `registration_no` int(11) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `mid_name` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `age` varchar(20) NOT NULL,
  `sports` varchar(30) NOT NULL,
  `barangay` varchar(100) NOT NULL,
  `date_register` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`registration_no`, `last_name`, `first_name`, `mid_name`, `gender`, `age`, `sports`, `barangay`, `date_register`) VALUES
(11145, 'Bacube', 'Jake', 'B', 'Male', '19 and above', 'Basketball', 'Palasan', '2023-01-24'),
(11146, 'Olivete', 'Genesis', 'O', 'Male', '19 and above', 'Table Tennis', 'Poblacion I', '2023-01-24'),
(11147, 'Olivete', 'Genesis', 'O', 'Male', '19 and above', 'Table Tennis', 'Poblacion I', '2023-01-24');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `stocks` int(11) NOT NULL,
  `item` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`stocks`, `item`) VALUES
(2, 'basketball'),
(15, 'basketball'),
(4, 'basketball'),
(4, 'basketball'),
(1, 'basketball'),
(5, '');

-- --------------------------------------------------------

--
-- Table structure for table `item_request`
--

CREATE TABLE `item_request` (
  `trans_id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `barangay` varchar(30) NOT NULL,
  `item` varchar(30) NOT NULL,
  `quantity` int(11) NOT NULL,
  `date_time_borrow` datetime NOT NULL,
  `date_return` date NOT NULL,
  `status` varchar(20) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_request`
--

INSERT INTO `item_request` (`trans_id`, `fname`, `lname`, `barangay`, `item`, `quantity`, `date_time_borrow`, `date_return`, `status`, `description`) VALUES
(58, 'Anthony', 'Malasa', 'Labuin', 'VolleyBall Net', 1, '2023-03-10 00:25:34', '2023-03-31', 'Pending', '');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `post` varchar(2000) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `post`, `datetime`) VALUES
(4, 'hi', '2023-04-07 09:07:48'),
(5, 'hello\r\n', '2023-04-07 09:07:54'),
(6, 'Special announcement', '2023-04-07 09:21:32');

-- --------------------------------------------------------

--
-- Table structure for table `returned_item`
--

CREATE TABLE `returned_item` (
  `return_id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `barangay` varchar(30) NOT NULL,
  `item` varchar(30) NOT NULL,
  `quantity` int(11) NOT NULL,
  `date_time_borrow` datetime NOT NULL,
  `date_time_returned` datetime NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `returned_item`
--

INSERT INTO `returned_item` (`return_id`, `fname`, `lname`, `barangay`, `item`, `quantity`, `date_time_borrow`, `date_time_returned`, `status`) VALUES
(46, 'Test1', 'Test1', 'Alipit', 'Basketball(Ball)', 1, '2023-01-24 22:59:15', '2023-01-24 22:59:52', 'Good Condition'),
(47, 'Test2', 'Test2', 'Bagumbayan', 'VolleyBall(Ball)', 3, '2023-01-24 23:27:55', '2023-01-24 23:29:34', 'Good Condition'),
(48, 'test4', 'test4', 'Poblacion I', 'VolleyBall Net', 1, '2023-01-24 23:47:39', '2023-03-21 23:21:41', 'Good Condition'),
(49, 'test6', 'test6', 'Santo Angel Central', 'VolleyBall Net', 2, '2023-03-06 20:33:01', '2023-03-09 13:10:04', 'Good Condition'),
(50, 'Test7', 'test7', 'Palasan', 'VolleyBall(Ball)', 2, '2023-01-25 07:09:03', '2023-03-06 20:33:16', 'Good Condition'),
(52, 'jobert', 'Gusion', 'Poblacion III', 'VolleyBall(Ball)', 5, '2023-03-09 15:52:31', '2023-03-09 16:22:25', 'Bad Condition'),
(56, 'Pedro', 'Penduko', 'Jasaan', 'Basketball(Ball)', 1, '2023-03-21 23:24:41', '2023-03-22 12:31:47', 'Bad Condition');

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE `sports` (
  `sports_code` int(11) NOT NULL,
  `sports_idcode` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `start_date` date NOT NULL,
  `start_time` time NOT NULL,
  `time` time NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sports`
--

INSERT INTO `sports` (`sports_code`, `sports_idcode`, `title`, `description`, `start_date`, `start_time`, `time`, `status`) VALUES
(10263, 'SPORTS-58d6', 'Basketball', 'd', '2023-03-10', '13:00:00', '14:08:00', 'archive'),
(10266, 'SPORTS-ab37', 'Tennis', 'Oogong', '2023-03-11', '23:10:00', '15:10:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `user_log` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `mid_name` varchar(50) NOT NULL,
  `barangay` varchar(100) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `con_pass` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `user_log`, `last_name`, `first_name`, `mid_name`, `barangay`, `pass`, `con_pass`, `role`) VALUES
(1, 'ADMIN-1234', 'Llarena', 'Bernard', 'B', 'Calios', '21232f297a57a5a743894a0e4a801fc3', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(6, 'USER-c275', 'Bacube', 'Ernest Jake', 'Alvarez', 'Poblacion III', 'e81c602454bbe574f7802456e2297495', 'e81c602454bbe574f7802456e2297495', 'barangay'),
(9, 'USER-01be', 'Malasa', 'Johnbert', 'Avila', 'Malinao', 'c37271998a2366075631a390a3073486', 'c37271998a2366075631a390a3073486', 'barangay');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `borrow`
--
ALTER TABLE `borrow`
  ADD PRIMARY KEY (`trans_id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`registration_no`);

--
-- Indexes for table `item_request`
--
ALTER TABLE `item_request`
  ADD PRIMARY KEY (`trans_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `returned_item`
--
ALTER TABLE `returned_item`
  ADD PRIMARY KEY (`return_id`);

--
-- Indexes for table `sports`
--
ALTER TABLE `sports`
  ADD PRIMARY KEY (`sports_code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `registration_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11148;

--
-- AUTO_INCREMENT for table `item_request`
--
ALTER TABLE `item_request`
  MODIFY `trans_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sports`
--
ALTER TABLE `sports`
  MODIFY `sports_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10267;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
