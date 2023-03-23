-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2023 at 03:51 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `health`
--

-- --------------------------------------------------------

--
-- Table structure for table `register_patient`
--

CREATE TABLE `register_patient` (
  `Patient_ID` varchar(8) NOT NULL,
  `First_Name` varchar(15) NOT NULL,
  `Last_Name` varchar(10) NOT NULL,
  `DOB` date NOT NULL,
  `Place_of_Birth` varchar(20) NOT NULL,
  `Place_of_Residence` varchar(20) NOT NULL,
  `Gender` varchar(8) NOT NULL,
  `Date_of_HIV_Diagnosis` date NOT NULL DEFAULT current_timestamp(),
  `Marital_status` varchar(8) NOT NULL,
  `Occupation` varchar(20) NOT NULL,
  `Contact` smallint(13) NOT NULL,
  `CDR_count` int(20) NOT NULL,
  `viral_load` varchar(20) NOT NULL,
  `ART_Regimen` varchar(20) NOT NULL,
  `NoK` varchar(30) NOT NULL,
  `NokContact` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register_patient`
--

INSERT INTO `register_patient` (`Patient_ID`, `First_Name`, `Last_Name`, `DOB`, `Place_of_Birth`, `Place_of_Residence`, `Gender`, `Date_of_HIV_Diagnosis`, `Marital_status`, `Occupation`, `Contact`, `CDR_count`, `viral_load`, `ART_Regimen`, `NoK`, `NokContact`) VALUES
('00000000', 'Odeke', 'peter', '2023-03-05', 'mukono', 'mukono', 'Male', '2023-03-26', 'Single', 'student', 32767, 4, '5', '23', 'Junior', 760195860),
('00000002', 'Odeke', 'peter', '1997-10-12', 'luweero', 'luweero', 'Male', '2010-02-12', 'Single', 'farmer', 32767, 2, '57', '8', 'Umar', 760195860),
('0000034', 'Kayenyparwoth', 'Charity', '1999-08-07', 'Nebi', 'Nebi', 'Female', '2023-03-07', 'Married', 'Teacher', 32767, 4, '45', '23', 'Junior', 760195860),
('00001', 'Taamale', 'Herman', '1999-02-21', 'Masaka', 'Masaka', 'Male', '2019-05-02', 'Single', 'Farmer', 32767, 5, '5', '7', 'Umar', 760195860);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register_patient`
--
ALTER TABLE `register_patient`
  ADD PRIMARY KEY (`Patient_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
