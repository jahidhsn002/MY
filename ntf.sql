-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2016 at 11:54 AM
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
-- Table structure for table `pms_diagnosis`
--

CREATE TABLE `pms_diagnosis` (
  `Diagnosis_Id` int(10) UNSIGNED NOT NULL,
  `Diagnosis_Name` varchar(100) NOT NULL,
  `Diagnosis_Description` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pms_medicine`
--

CREATE TABLE `pms_medicine` (
  `Medicine_Id` int(10) UNSIGNED NOT NULL,
  `Medicine_Name` varchar(100) NOT NULL,
  `Scientific_Name` varchar(100) NOT NULL,
  `Manufacturer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Dumping data for table `pms_patient`
--

INSERT INTO `pms_patient` (`Patient_Id`, `Patient_Name`, `Patient_Age`, `Patient_Sex`, `C/O`, `Phone`, `Patient_Address`) VALUES
(4, 'ftedfdf', '341', 'female', 'ytrt', '4123132', 'hygygjhkgkjh');

-- --------------------------------------------------------

--
-- Table structure for table `pms_setting`
--

CREATE TABLE `pms_setting` (
  `Setting_Id` int(10) UNSIGNED NOT NULL,
  `Doctor_Name` varchar(50) NOT NULL,
  `Doctor_Speciality` varchar(300) NOT NULL,
  `Doctor_Qualification` varchar(300) NOT NULL,
  `Doctor_Phone` varchar(30) NOT NULL,
  `Doctor_Email` varchar(50) NOT NULL,
  `Chamber_Name` varchar(100) NOT NULL,
  `Chamber_Address` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pms_diagnosis`
--
ALTER TABLE `pms_diagnosis`
  ADD PRIMARY KEY (`Diagnosis_Id`);

--
-- Indexes for table `pms_medicine`
--
ALTER TABLE `pms_medicine`
  ADD PRIMARY KEY (`Medicine_Id`);

--
-- Indexes for table `pms_patient`
--
ALTER TABLE `pms_patient`
  ADD PRIMARY KEY (`Patient_Id`);

--
-- Indexes for table `pms_setting`
--
ALTER TABLE `pms_setting`
  ADD PRIMARY KEY (`Setting_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pms_diagnosis`
--
ALTER TABLE `pms_diagnosis`
  MODIFY `Diagnosis_Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pms_medicine`
--
ALTER TABLE `pms_medicine`
  MODIFY `Medicine_Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pms_patient`
--
ALTER TABLE `pms_patient`
  MODIFY `Patient_Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pms_setting`
--
ALTER TABLE `pms_setting`
  MODIFY `Setting_Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
