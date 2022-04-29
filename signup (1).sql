-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2022 at 06:17 PM
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
-- Database: `signup`
--

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

CREATE TABLE `passenger` (
  `srno` int(3) NOT NULL,
  `Source` varchar(255) NOT NULL,
  `Destination` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `Preferred_seat` varchar(5) NOT NULL,
  `Adult` int(3) NOT NULL,
  `Children` int(3) NOT NULL,
  `Infant` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `passenger`
--

INSERT INTO `passenger` (`srno`, `Source`, `Destination`, `Date`, `Preferred_seat`, `Adult`, `Children`, `Infant`) VALUES
(1, '.MADGOAN', '.DELHI-SAFDAR', '2022-04-09', 'Accha', 1, 1, 1),
(2, '.MADGOAN', '.SAWANTWADI', '2022-04-02', 'Accha', 1, 1, 1),
(3, '.MADGOAN', '.SAWANTWADI', '2022-04-02', 'Accha', 1, 1, 1),
(4, '.MADGOAN', '.SAWANTWADI', '2022-04-02', 'Accha', 1, 1, 1),
(5, '.MADGOAN', '.SAWANTWADI', '2022-04-02', 'Accha', 1, 1, 1),
(6, '.MADGOAN', '.SAWANTWADI', '2022-04-02', 'Accha', 1, 1, 1),
(7, '.MADGOAN', '.SAWANTWADI', '2022-04-02', 'Accha', 1, 1, 1),
(8, '.MADGOAN', '.SAWANTWADI', '2022-04-02', 'Accha', 1, 1, 1),
(9, '.JAIPUR', '.CHURU', '2022-04-02', 'Accha', 1, 7, 1),
(10, '.AHMEDABAD', '.JAIPUR', '2022-05-01', 'Accha', 1, 3, 4),
(11, '.AHMEDABAD', '.JAIPUR', '2022-05-07', 'Acsle', 1, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

CREATE TABLE `personal` (
  `srno` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` bigint(10) UNSIGNED NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personal`
--

INSERT INTO `personal` (`srno`, `name`, `number`, `age`, `gender`) VALUES
(1, 'Parth', 7045550271, 19, 'Male'),
(2, 'Harit', 8108015194, 19, 'Male'),
(3, 'Krish', 9220545005, 19, 'Male'),
(4, 'Apurva', 9833457632, 19, 'Male'),
(8, 'Apurva', 8367488466, 33, 'Female'),
(9, 'abc', 4231388392, 70, 'Male'),
(10, 'Gaurav', 7766544230, 21, 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `srno` int(3) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`srno`, `name`, `email`, `password`, `date`) VALUES
(1, 'aryan', 'aryan@gmail.com', 'abc@123', '0000-00-00 00:00:00'),
(2, 'gaurav', 'gaurav@gmail.com', 'Gaurav@123', '2022-04-10 18:35:30'),
(3, 'krish', 'krish@gmail.com', 'Krish@345', '2022-04-10 19:05:28'),
(4, 'soham', 'soham@gmail.com', 'Soham@123', '2022-04-11 05:28:34'),
(5, 'umang', 'umang@gmail.com', 'Umang@123', '2022-04-11 05:31:41'),
(6, 'apurva', 'apurva@gmail.com', 'Apurva@1234', '2022-04-14 08:50:06'),
(8, 'aryan', 'aryanc@gmail.com', 'Test@1234', '2022-04-28 11:31:53'),
(9, 'Yash', 'yash@yahoo.com', 'Yah@1234', '2022-04-29 11:10:03'),
(10, 'deev', 'deev@gmail.com', 'Deev@345', '2022-04-29 11:12:50'),
(11, 'harit', 'harit@gmail.com', 'Harit@345', '2022-04-29 11:15:28'),
(12, 'jatin', 'jatin@gmail.com', 'Jatin@1234', '2022-04-29 12:47:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `passenger`
--
ALTER TABLE `passenger`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`srno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `passenger`
--
ALTER TABLE `passenger`
  MODIFY `srno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal`
--
ALTER TABLE `personal`
  MODIFY `srno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `srno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
