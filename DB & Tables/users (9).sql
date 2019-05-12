-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2018 at 12:32 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_role_id` int(11) DEFAULT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `joining_date` varchar(20) NOT NULL,
  `emp_leave_enjoy` decimal(7,2) NOT NULL,
  `emp_leave_balance` decimal(7,2) NOT NULL,
  `last_leave_date` varchar(255) NOT NULL,
  `regDate` datetime NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_role_id`, `user_name`, `email`, `pass`, `image`, `department`, `designation`, `joining_date`, `emp_leave_enjoy`, `emp_leave_balance`, `last_leave_date`, `regDate`, `status`) VALUES
(1, 1, 'admin', 'admin@jsbl.com', '202cb962ac59075b964b07152d234b70', '1544606657_6800.jpg', 'Marketing', 'Manager', '2013-01-01', '19.00', '19.00', '2018-12-03', '2018-10-16 11:37:26', 'active'),
(2, 2, 'aalim', 'aalim@jsbl.com', '202cb962ac59075b964b07152d234b70', '1543737685_1863.jpg', 'Admin', 'COO', '2014-04-24', '0.00', '20.00', '2018-11-19', '2018-11-01 00:00:00', 'active'),
(3, 2, 'imam', 'imam@jsbl.com', '202cb962ac59075b964b07152d234b70', '1545474448_3040.jpg', 'IT', 'Head of IT', '2016-02-20', '15.00', '21.00', '2018-08-30', '2018-11-12 09:23:24', 'deactive');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
