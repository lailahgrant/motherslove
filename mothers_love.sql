-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 30, 2018 at 01:39 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mothers_love`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` int(11) NOT NULL,
  `applicants_full_name` varchar(50) NOT NULL,
  `parents_full_name` varchar(50) NOT NULL,
  `parents_phone` varchar(15) NOT NULL,
  `parents_email` varchar(50) NOT NULL,
  `applicants_dob` date NOT NULL,
  `district` varchar(30) NOT NULL,
  `applicants_gender` varchar(10) NOT NULL,
  `applicants_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `applicants_full_name`, `parents_full_name`, `parents_phone`, `parents_email`, `applicants_dob`, `district`, `applicants_gender`, `applicants_address`) VALUES
(1, 'Lawrence Okongo', 'Mr. okongo Master', '+256755966056', 'larry@mail.com', '0000-00-00', 'Kampala', 'male', 'Kampala');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `full_name` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `full_name`, `email`, `phone`, `subject`, `message`) VALUES
(1, 'Larry', 'larry@mail.com', 'asfadgdfd', 'Trial', 'Hey there'),
(2, 'Larry', 'larry@mail.com', 'jhgfgkkc', 'Trial Again', 'Wow, this is now ok.'),
(3, 'sadasfasf', 'larry@mail.com', '726357ytiugahzj', 'Trial', 'Now working well'),
(4, 'Larry Okongo', 'me@mail.com', 'asddfg', 'Trial', 'Once more with sweet alert'),
(5, 'Larry', 'me@mail.com', 'asdfghjgfdgs', 'Trial', 'Testing with external contact file.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
