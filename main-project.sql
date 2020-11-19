-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2020 at 03:34 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `main-project`
--

-- --------------------------------------------------------

--
-- Table structure for table `libadmin`
--

CREATE TABLE `libadmin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `reg_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `libadmin`
--

INSERT INTO `libadmin` (`id`, `name`, `mail`, `pass`, `reg_time`) VALUES
(1, 'Michael', 'mik@gmail.com', '7654321', '2020-09-17 14:37:55'),
(2, 'David Tee', 'david@gmail.com', '7654321', '2020-09-17 17:48:26'),
(3, 'Victor Admin', 'victor@gmail.com', '7654321', '2020-09-17 19:47:20');

-- --------------------------------------------------------

--
-- Table structure for table `libinvoice`
--

CREATE TABLE `libinvoice` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sub` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `paid` varchar(255) NOT NULL,
  `left` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `pay` varchar(255) NOT NULL,
  `entry` varchar(255) NOT NULL,
  `reg_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `libinvoice`
--

INSERT INTO `libinvoice` (`id`, `name`, `sub`, `address`, `paid`, `left`, `status`, `pay`, `entry`, `reg_time`) VALUES
(1, 'Sharon Olaleye', '1 week', 'omark busstop', '1554', '', 'Paid', 'E-Pay', 'David Tee', '2020-10-11 20:03:03'),
(2, 'Ebuka John', '1 day', '40,Wilder  Crescent', '565656', '44', 'Owed', 'Cash', 'David Tee', '2020-10-13 04:09:34'),
(3, 'Owen Beckham', '1 day', '65,Borough Road', '87645', '', 'Paid', 'Cheque', 'Victor Admin', '2020-10-12 14:00:38');

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `id` int(11) NOT NULL,
  `f-name` varchar(255) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `pack` varchar(255) NOT NULL,
  `home-address` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `reg_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`id`, `f-name`, `sname`, `email`, `phone`, `pack`, `home-address`, `dob`, `city`, `password`, `reg_time`) VALUES
(1, 'Alphonso', 'Davies', 'alph@gmail.com', '+2347065432172', '1 month', '222, Belgrade Road', '1988-09-08', 'Aukland', '7654321', '2020-10-11 19:37:53'),
(2, 'Owen', 'Beckham', 'owen@gmail.com', '+2348083766544', '1 day', '65,Borough Road', '1978-04-06', 'London', '7654321', '2020-10-11 19:38:16'),
(3, 'Ebuka', 'John', 'ebuka@gmail.com', '+2348084647647', 'Daily', '40,Wilder  Crescent', '1996-02-14', 'Port Harcourt', 'pointer', '2020-10-11 19:50:36'),
(4, 'Sharon', 'Olaleye', 'sharonolaleye@gmail.com', '07034567812', '1 week', 'omark busstop', '2005-09-14', 'Lagos', 'queen esther', '2020-10-11 19:39:04');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `id` int(11) NOT NULL,
  `f-name` varchar(255) NOT NULL,
  `l-name` varchar(255) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `home-address` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `reg_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `f-name`, `l-name`, `sname`, `course`, `email`, `phone`, `home-address`, `dob`, `city`, `password`, `reg_time`) VALUES
(1, 'Mac', 'Angus', 'Gyver', 'VIDEO AND PHOTO EDITING', 'mac@yahoo.com', '+2348076463636', '556,Jacksonville Way', '1998-06-04', 'California', '7654321', '2020-09-17 17:53:34'),
(2, 'Barry', 'Flash', 'Allen', 'GRAPHIC DESIGN', 'bar@gmail.com', '08056547896', '34,Techet Boulevard', '2000-08-16', 'Osogbo', '7654321', '2020-10-11 19:49:21');

-- --------------------------------------------------------

--
-- Table structure for table `reginvoice`
--

CREATE TABLE `reginvoice` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `paid` varchar(255) NOT NULL,
  `left` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `pay` varchar(255) NOT NULL,
  `entry` varchar(255) NOT NULL,
  `reg_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `libadmin`
--
ALTER TABLE `libadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `libinvoice`
--
ALTER TABLE `libinvoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reginvoice`
--
ALTER TABLE `reginvoice`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `libadmin`
--
ALTER TABLE `libadmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `libinvoice`
--
ALTER TABLE `libinvoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reginvoice`
--
ALTER TABLE `reginvoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
