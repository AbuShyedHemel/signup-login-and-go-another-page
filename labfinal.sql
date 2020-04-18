-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2020 at 04:38 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `labfinal`
--

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `SLNO.` int(2) NOT NULL,
  `ProductName` varchar(50) NOT NULL,
  `Brand` varchar(50) NOT NULL,
  `EXPDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`SLNO.`, `ProductName`, `Brand`, `EXPDate`) VALUES
(1, 'Mango', 'Pran', '2020-04-10'),
(6, 'Choklate', 'Pran', '2020-05-08'),
(8, 'Potato', 'Pran', '2020-05-08'),
(9, 'Biscut', 'Pran', '2020-05-08');

-- --------------------------------------------------------

--
-- Table structure for table `reg_form`
--

CREATE TABLE `reg_form` (
  `SLNO.` int(2) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Age` int(3) NOT NULL,
  `UserID` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `ContactDetails` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg_form`
--

INSERT INTO `reg_form` (`SLNO.`, `UserName`, `Age`, `UserID`, `Email`, `Password`, `ContactDetails`, `Gender`) VALUES
(1, 'Hemel', 23, 'root01', 'root01@gmail.com', '123', '', ''),
(7, 'Hemel', 23, 'root02', 'root02@gmail.com', '123', 'adsdsf', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`SLNO.`);

--
-- Indexes for table `reg_form`
--
ALTER TABLE `reg_form`
  ADD PRIMARY KEY (`SLNO.`),
  ADD UNIQUE KEY `UserID` (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `SLNO.` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `reg_form`
--
ALTER TABLE `reg_form`
  MODIFY `SLNO.` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
