-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 28, 2017 at 04:22 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `crud`
--

CREATE TABLE `users` (
   `user_id` int(11) NULL AUTO_INCREMENT,
   `user_role_id` int(11) DEFAULT NULL,
    
	`user_name` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `pass` VARCHAR(255) NOT NULL,
   
  
   PRIMARY KEY (`user_id`) 
   
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*
--
-- Dumping data for table `crud`
--

INSERT INTO `crud` (`id`, `first_name`, `last_name`, `gender`, `age`, `email_id`) VALUES
(1, 'vivek 3', 'vengala', 'male', '25', 'vivek@pixelw3.com'),
(3, 'vivek 1', 'v', 'male', '20', 'vivek1@pixelw3.com'),
(4, 'vivek 2', 'v', 'male', '21', 'vivek2@pixelw3.com'),
(5, 'vivek 3', 'v', 'male', '22', 'vivek3@pixelw3.com'),
(10, 'Vivek', 'Vengala', 'male', '21', 'vivek@codingcyber.com'),
(11, 'Vivek', 'V', 'male', '25', 'vivek@pixelw3.com1'),
(12, 'Vivek', 'V', 'male', '25', 'vivek@pixelw3.com1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crud`
--
ALTER TABLE `crud`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crud`
--
ALTER TABLE `crud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
