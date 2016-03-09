-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2016 at 10:04 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ntf`
--

-- --------------------------------------------------------

--
-- Table structure for table `pms_patient`
--

CREATE TABLE `pms_patient` (
  `Patient_Id` int(10) UNSIGNED NOT NULL,
  `Patient_Name` varchar(50) NOT NULL,
  `Patient_Age` varchar(5) NOT NULL,
  `Patient_Sex` varchar(10) NOT NULL,
  `C/O` varchar(50) NOT NULL,
  `Phone` varchar(30) NOT NULL,
  `Patient_Address` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pms_patient`
--
ALTER TABLE `pms_patient`
  ADD PRIMARY KEY (`Patient_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pms_patient`
--
ALTER TABLE `pms_patient`
  MODIFY `Patient_Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
