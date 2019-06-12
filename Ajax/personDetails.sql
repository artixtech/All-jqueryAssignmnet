-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 12, 2019 at 11:35 AM
-- Server version: 5.7.26-0ubuntu0.16.04.1
-- PHP Version: 7.1.30-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `JQueryTable`
--

-- --------------------------------------------------------

--
-- Table structure for table `personDetails`
--

CREATE TABLE `personDetails` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(500) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personDetails`
--

INSERT INTO `personDetails` (`id`, `name`, `email`, `message`, `date`) VALUES
(1, 'Arti kumari', 'arti@excellencetechnologies.in', 'Jr. Web developer\r\n', '2019-06-11'),
(2, 'Gaurav kumar', 'gaurav@excellencetechnologies.in', 'Jr Php developer', '2019-06-12'),
(3, 'Vivek ', 'vivek@excellencetechnologies.in', 'Jr. Web Developer', '2019-06-13'),
(5, 'Nadeem khan', 'nadeem@excellencetechnologies.in', 'Jr. Web Developer', '2019-06-14'),
(6, 'Midul', 'midul@excellencetechnogies.in', 'Jr web Developer', '2019-06-20'),
(7, 'Sagar ', 'Sagar@excellencetechnologies.in', 'Jr Magento Developer', '2019-06-14'),
(8, 'Yogendra singh', 'yogendra@excellencetechnologies.in', 'Jr. Magento developer', '2019-06-13'),
(11, 'Karthik ', 'karthik@excellencetechnoloies.in', 'Magento Developeer', '2019-06-20'),
(12, 'Vishal Thakur', 'vishal@excellencetechnogoies.in', 'Magento Developer', '2019-06-23'),
(13, 'Manish joy', 'manish@excellencetechnologies', 'Sr. Magento Developer', '2019-06-27'),
(14, 'Saurabh Khatri', 'saurabh@excellencetechnologies.in', 'Sr. Magento Developer', '2019-06-26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `personDetails`
--
ALTER TABLE `personDetails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `personDetails`
--
ALTER TABLE `personDetails`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
