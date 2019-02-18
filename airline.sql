-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2018 at 08:05 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airline`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookingdetails`
--

CREATE TABLE `bookingdetails` (
  `TicketId` int(11) NOT NULL,
  `Cid` int(11) NOT NULL,
  `NoAdult` int(11) NOT NULL,
  `NoChild` int(11) NOT NULL,
  `Cclass` varchar(15) NOT NULL,
  `ArrTime` datetime NOT NULL,
  `DepTime` datetime NOT NULL,
  `DeptCust` varchar(20) NOT NULL,
  `DestCust` varchar(20) NOT NULL,
  `Payment` double DEFAULT NULL,
  `FlightNo` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `carddetails`
--

CREATE TABLE `carddetails` (
  `Cid` int(11) NOT NULL,
  `TicketId` int(11) NOT NULL,
  `Cname` varchar(20) NOT NULL,
  `CVV` int(11) NOT NULL,
  `Cnum` varchar(20) NOT NULL,
  `Cbalance` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `FirstName` varchar(25) NOT NULL,
  `LastName` varchar(25) NOT NULL,
  `Cid` int(11) NOT NULL,
  `PhoneNo` varchar(15) NOT NULL,
  `Mail` varchar(10) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `flightdetails`
--

CREATE TABLE `flightdetails` (
  `FlightNo` int(11) NOT NULL,
  `Eseat` int(11) NOT NULL,
  `Bseat` int(11) NOT NULL,
  `Eprice` int(11) NOT NULL,
  `Bprice` int(11) NOT NULL,
  `DepTime` datetime NOT NULL,
  `ArrivTime` datetime NOT NULL,
  `DepCity` varchar(20) NOT NULL,
  `ArrivCity` varchar(20) NOT NULL,
  `class` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flightdetails`
--

INSERT INTO `flightdetails` (`FlightNo`, `Eseat`, `Bseat`, `Eprice`, `Bprice`, `DepTime`, `ArrivTime`, `DepCity`, `ArrivCity`, `class`) VALUES
(1500, 55, 30, 1500, 3000, '2018-10-01 06:00:00', '2018-10-01 08:30:00', 'Bengaluru', 'Hyderabad', ''),
(1598, 23, 13, 650, 1200, '2018-11-12 15:15:00', '2018-11-12 16:15:00', 'Trivandrum', 'Chennai', ''),
(1623, 45, 16, 2000, 4500, '2018-11-03 18:45:00', '2018-10-11 21:45:00', 'Chennai', 'Delhi', ''),
(1763, 34, 23, 1677, 4589, '2018-11-11 17:45:00', '2018-11-12 21:45:00', 'Mumbai', 'Delhi', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookingdetails`
--
ALTER TABLE `bookingdetails`
  ADD PRIMARY KEY (`TicketId`),
  ADD KEY `Cid` (`Cid`),
  ADD KEY `bookingdetails_ibfk_1` (`FlightNo`);

--
-- Indexes for table `carddetails`
--
ALTER TABLE `carddetails`
  ADD PRIMARY KEY (`Cid`,`TicketId`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Cid`);

--
-- Indexes for table `flightdetails`
--
ALTER TABLE `flightdetails`
  ADD PRIMARY KEY (`FlightNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookingdetails`
--
ALTER TABLE `bookingdetails`
  MODIFY `TicketId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `flightdetails`
--
ALTER TABLE `flightdetails`
  MODIFY `FlightNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1764;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookingdetails`
--
ALTER TABLE `bookingdetails`
  ADD CONSTRAINT `bookingdetails_ibfk_1` FOREIGN KEY (`FlightNo`) REFERENCES `flightdetails` (`FlightNo`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
