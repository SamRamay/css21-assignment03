-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2018 at 09:40 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cvs`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `id` int(20) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(25) NOT NULL,
  `linkedin` varchar(100) NOT NULL,
  `job_title` varchar(100) NOT NULL,
  `job_date_from` date NOT NULL,
  `job_date_to` date NOT NULL,
  `job_desc` text NOT NULL,
  `degree` varchar(50) NOT NULL,
  `deg_year` int(10) NOT NULL,
  `school` varchar(50) NOT NULL,
  `deg_desc` text NOT NULL,
  `objectives` varchar(100) NOT NULL,
  `Skills` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`id`, `f_name`, `l_name`, `email`, `mobile`, `linkedin`, `job_title`, `job_date_from`, `job_date_to`, `job_desc`, `degree`, `deg_year`, `school`, `deg_desc`, `objectives`, `Skills`) VALUES
(1, 'usama', 'zubair', 'sam_ramay@yahoo.com', '03231145122', 'ashuiaysqq8qihqssbasmas.com', 'hsuaihsuaisi', '2016-10-30', '2018-08-24', 'nsasdnjsdsad duiqwwwwwwwwwww wuuuuuuuuuuuuuuuuh', 'duihuwqidq', 2016, 'dqwdgywqgdq', 'sinqqqqqqqqqqq iqwwwwwwwwwwwws wbuqqqqqqqqqq', 'djiwhduiwhq', 'dyqwdguqwg,hdwquiyqwiduh,wduygwd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
