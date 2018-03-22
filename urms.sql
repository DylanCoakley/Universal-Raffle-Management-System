-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2018 at 02:17 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `urms`
--

-- --------------------------------------------------------

--
-- Table structure for table `raffle`
--

CREATE TABLE `raffle` (
  `RaffleID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `StartDate` date NOT NULL,
  `EndDate` date NOT NULL,
  `MaxTickets` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `raffle`
--

INSERT INTO `raffle` (`RaffleID`, `Name`, `StartDate`, `EndDate`, `MaxTickets`) VALUES
(1, '485 Raffle', '2018-03-01', '2018-03-24', 255),
(2, 'Man Lin Raffle', '2018-03-01', '2018-03-28', 255);

-- --------------------------------------------------------

--
-- Table structure for table `raffle_jnct_vendor`
--

CREATE TABLE `raffle_jnct_vendor` (
  `Role` varchar(255) NOT NULL,
  `RaffleID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `raffle_jnct_vendor`
--

INSERT INTO `raffle_jnct_vendor` (`Role`, `RaffleID`, `UserID`) VALUES
('Admin', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `RequestID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Notes` text NOT NULL,
  `Quantity` int(255) NOT NULL,
  `RequestDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Resolved` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`RequestID`, `UserID`, `Type`, `Notes`, `Quantity`, `RequestDate`, `Resolved`) VALUES
(1, 2014, 'SignUP', 'pls sign me up, thx', 0, '2018-03-20 22:29:00', 0),
(5, 6969, 'AddTickets', 'pls add tickets thx', 0, '2018-03-20 22:29:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `TicketID` int(11) NOT NULL,
  `RaffleID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Sold` tinyint(1) NOT NULL DEFAULT '0',
  `DatePurchased` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`TicketID`, `RaffleID`, `UserID`, `Name`, `Address`, `Phone`, `Email`, `Sold`, `DatePurchased`) VALUES
(1, 1, 1, 'Logan Brown', '123 Hall Way', '111-111-1111', 'logan@logan.com', 1, '2018-03-20'),
(2, 2, 1, 'Max Jennings', '123 Hall Street', '222-222-2222', 'max@max.com', 1, '2018-03-19'),
(3, 1, 2, 'Sam Mckinnon', '123 Hall Crescent', '333-333-3333', 'sam@sam.com', 1, '2018-03-18'),
(4, 1, 2, 'Max Jennings', '123 Hall Street', '222-222-2222', 'max@max.com', 1, '2018-03-19'),
(5, 2, 2, 'Sam Mckinnon', '123 Hall Crescent', '333-333-3333', 'sam@sam.com', 1, '2018-03-18');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `Username`, `Password`, `Name`, `Address`, `Phone`, `Email`) VALUES
(1, 'dylan', 'd_coakes420', 'Dylan Coakley', '1 Infinity Loop', '444-444-4444', 'ilovecomputers@dylan.com'),
(2, 'KatieCBLovr', 'katieroxs1997', 'Katie', 'MacEachern', '555-555-5555', '1015TheHawk1Fan@katie.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `raffle`
--
ALTER TABLE `raffle`
  ADD PRIMARY KEY (`RaffleID`);

--
-- Indexes for table `raffle_jnct_vendor`
--
ALTER TABLE `raffle_jnct_vendor`
  ADD PRIMARY KEY (`Role`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`RequestID`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`TicketID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `RequestID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `TicketID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
