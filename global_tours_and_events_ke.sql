-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2018 at 10:42 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `global_tours_and_events_ke`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_code`
--

CREATE TABLE `admin_code` (
  `admin_code` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_code`
--

INSERT INTO `admin_code` (`admin_code`) VALUES
(102321);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user_id` int(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `date`, `time`, `comment`) VALUES
(4, 11, '2018-08-06', '16:55:40', 'Hello World!'),
(5, 11, '2018-08-06', '17:03:42', 'Test comment'),
(6, 11, '2018-08-06', '17:03:42', 'Test comment'),
(7, 11, '2018-08-06', '19:41:40', 'Test me\r\n'),
(8, 11, '2018-08-06', '16:55:40', 'Hello World!'),
(9, 11, '2018-08-06', '19:41:40', 'Test me\r\n'),
(10, 11, '2018-08-06', '19:41:40', 'Test me\r\n'),
(11, 11, '2018-08-06', '22:10:41', 'Great service!'),
(12, 11, '2018-08-06', '22:13:27', 'I can comment');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `package_id` int(11) NOT NULL,
  `package_name` varchar(255) NOT NULL,
  `package_price` int(11) NOT NULL,
  `no_of_bookings` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`package_id`, `package_name`, `package_price`, `no_of_bookings`) VALUES
(23, ' 3 Day Samburu Camping adventure', 8000, 0),
(27, '4 Day Maasai Mara Camping Migration Safari', 12000, 1),
(33, '5 Days in Riyadh Package', 75000, 2),
(34, '11 Days Kenya Wildlife Photographic Safari', 23500, 1);

-- --------------------------------------------------------

--
-- Table structure for table `registered-users`
--

CREATE TABLE `registered-users` (
  `user_id` int(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirm_booking` int(255) DEFAULT NULL,
  `reset_password` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registered-users`
--

INSERT INTO `registered-users` (`user_id`, `user_type`, `fname`, `lname`, `email`, `password`, `confirm_booking`, `reset_password`) VALUES
(11, 'Regular', 'Jerry', 'Auvagha', 'jerry.auvagha@strathmore.edu', '$2y$10$5FAP5zvN8syoF6apOsWSmeLGz7PUuSFmsRN0qcHhTaxdMllIggeOG', 0, 0),
(14, 'Admin', 'Admin', 'User', 'admin@gmail.com', '$2y$10$ysztFed4adClnzUaV5Y.teZ49hIfpA41mBcuKFPguf31AJXDEGOJ2', 0, 0),
(16, 'Super User', 'super', 'user', 'super@gmail.com', '$2y$10$tqivOEbnQmtqsZvEdKPjyOHYLyOomFq8a9AW7wpVuO5KB1tRK00ou', 0, 0),
(17, 'Super User', 'super ', 'user2', 'super2@gmail.com', '$2y$10$96.EyQU4C59RzqQD4Q0ZheKrdVuSfSfqkN021.JaU7veE/wx9Upra', 0, 0),
(18, 'Regular', 'Jerry ', 'Auvagha', 'jerrybenjamin007@gmail.com', '$2y$10$/thZ0/Mt9UzJmlsdm9/kA.pMLcC1zp1eOxmXFyk8intpAq.3t3vvy', 0, 0),
(19, 'Regular', 'Bobby', 'Shmurda', 'bobby.shmurda@gmail.com', '$2y$10$YcKoSMjlmAH/cH.v0Vlg9OOAjewHdjiRLRyMOywPyz/nyhm8MJB5u', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `trips`
--

CREATE TABLE `trips` (
  `trip_no` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `date` date NOT NULL,
  `adult_count` int(10) NOT NULL,
  `child_count` int(10) NOT NULL,
  `country` varchar(255) NOT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `package_chosen` varchar(255) NOT NULL,
  `special_requirements` varchar(255) NOT NULL,
  `total_price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trips`
--

INSERT INTO `trips` (`trip_no`, `user_id`, `date`, `adult_count`, `child_count`, `country`, `phone_number`, `package_chosen`, `special_requirements`, `total_price`) VALUES
(288941960, 11, '2018-08-23', 3, 0, 'AF', '0722309497', '4 Day Maasai Mara Camping Migration Safari', '', 36000),
(1841630919, 11, '2018-08-10', 2, 0, 'AF', '0722309497', '11 Days Kenya Wildlife Photographic Safari', 'None', 47000),
(2051780270, 11, '2018-08-24', 3, 0, 'AF', '0722309497', '5 Days in Riyadh Package', 'None, thanks', 225000),
(2093664921, 11, '2018-09-15', 2, 0, 'AF', '0722309497', '5 Days in Riyadh Package', '', 150000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `registered-users`
--
ALTER TABLE `registered-users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `trips`
--
ALTER TABLE `trips`
  ADD PRIMARY KEY (`trip_no`),
  ADD KEY `FOREIGN KEY` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `registered-users`
--
ALTER TABLE `registered-users`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `trips`
--
ALTER TABLE `trips`
  MODIFY `trip_no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2093664922;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `trips`
--
ALTER TABLE `trips`
  ADD CONSTRAINT `trips_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `registered-users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
