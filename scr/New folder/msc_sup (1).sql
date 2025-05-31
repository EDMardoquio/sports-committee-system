-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2022 at 06:08 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `msc_sup`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `con_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `email`, `pass`, `con_pass`) VALUES
(1, 'jer@gmail.com', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `barangay`
--

CREATE TABLE IF NOT EXISTS `barangay` (
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
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `registration_no` int(11) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `mid_name` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `age` varchar(20) NOT NULL,
  `sports` varchar(30) NOT NULL,
  `barangay` varchar(100) NOT NULL,
  `date_register` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11125 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`registration_no`, `last_name`, `first_name`, `mid_name`, `gender`, `age`, `sports`, `barangay`, `date_register`) VALUES
(11122, 'Ferrer', 'Jerremie', 'Concepcion', 'Male', '19 and above', 'Chess', 'Poblacion I', '2022-11-19'),
(11123, 'Olivete', 'Genesis', 'O', 'Male', '19 and above', 'Tennis', 'Poblacion III', '2022-11-20'),
(11124, 'kjjkkjk', '', ',nnkknnknk', 'Male', '7-11 years old', 'Basketball', 'Palasan', '2022-12-02');

-- --------------------------------------------------------

--
-- Table structure for table `new_user`
--

CREATE TABLE IF NOT EXISTS `new_user` (
  `user_id` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `barangay` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `con_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_user`
--

INSERT INTO `new_user` (`user_id`, `full_name`, `barangay`, `pass`, `con_pass`) VALUES
(1, 'Jerremie', 'Poblacion III', 'jer', 'jer'),
(2, 'Jerremie', 'Poblacion V', 'jeje', 'jeje'),
(3, 'Ferrer', 'Duhat', 'Ferrer', 'Ferrer'),
(4, 'gen', 'Labuin', 'gen', 'gen'),
(5, 'Brgy. Capt Lenie Robredo', 'Alipit', 'lenie', 'lenie'),
(44, 'Aivan', 'Patimbao', 'aivan', 'aivan');

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE IF NOT EXISTS `sports` (
  `sports_code` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10244 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sports`
--

INSERT INTO `sports` (`sports_code`, `title`, `description`, `start_date`, `end_date`, `time`) VALUES
(10236, 'Badminton', 'Duhat Vs. Pob II', '2022-11-23', '2022-11-23', '15:30:00'),
(10237, 'Tennis', 'Brgy Pob II VS Brgy Pob III', '2022-11-20', '2022-11-20', '16:00:00'),
(10243, 'Badminton', 'nnjnn', '2022-12-29', '2022-12-23', '05:30:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`registration_no`);

--
-- Indexes for table `new_user`
--
ALTER TABLE `new_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `sports`
--
ALTER TABLE `sports`
  ADD PRIMARY KEY (`sports_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `registration_no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11125;
--
-- AUTO_INCREMENT for table `sports`
--
ALTER TABLE `sports`
  MODIFY `sports_code` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10244;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
