-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2017 at 02:00 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookrecords`
--

CREATE TABLE `bookrecords` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `author` varchar(500) NOT NULL,
  `title` varchar(500) NOT NULL,
  `batchid` varchar(500) NOT NULL,
  `edition` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookrecords`
--

INSERT INTO `bookrecords` (`id`, `name`, `author`, `title`, `batchid`, `edition`) VALUES
(49, 'Discrete Mathematics', 'Sam Henderk', 'Logics and analysis', 'bg85ad2', '1st'),
(50, 'Hybrid Computer', 'Stuk Kent', 'Computer basics', 'dsd54dfv', '2nd'),
(51, 'Digital logic Design', 'Skan Krift', 'Dld', 'dvfd6v2df3v', '7th'),
(52, 'Web coding', 'Tunet Kistel', 'Learn coding is easy', 'dvdvd51125', '6th'),
(53, 'Pak studies for BSC', 'Hiner Craft', 'History of Pakistan', 'dff254541', '1st'),
(54, 'Crime Analysis', 'Jogn ', 'Law basic principles', 'lkj8523', '2nd'),
(55, 'Web Marketting', 'Kitten Stark', 'Basic of marketting', 'ol746s', '6th'),
(58, 'Web design and development', 'Sparrow Doe', 'Learn web complete', 'dv2fd65cxv', '1st'),
(59, 'Wordpress Development', 'Richard Knite', 'Learn wordpress development', '854cs35', '5th');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookrecords`
--
ALTER TABLE `bookrecords`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookrecords`
--
ALTER TABLE `bookrecords`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
