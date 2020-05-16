-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2020 at 08:26 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `candidate`
--

-- --------------------------------------------------------

--
-- Table structure for table `personalinfo`
--

CREATE TABLE `personalinfo` (
  `Id` int(1) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personalinfo`
--

INSERT INTO `personalinfo` (`Id`, `Username`, `Password`, `Email`) VALUES
(1, 'Suraj', '16sSS15#', 'suraj@gmail.com'),
(2, 'Suraj', '16sSS15#', 'suraj@gmail.com'),
(3, 'Suraj', '16sSS15#', 'suraj@gmail.com'),
(4, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `recuiter`
--

CREATE TABLE `recuiter` (
  `Id` int(1) NOT NULL,
  `Jobtitle` varchar(25) NOT NULL,
  `Location` varchar(35) NOT NULL,
  `Packege` varchar(25) NOT NULL,
  `Experiance` varchar(11) NOT NULL,
  `Hours` varchar(25) NOT NULL,
  `Company` varchar(25) NOT NULL,
  `Applied` varchar(20) NOT NULL,
  `Candidate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recuiter`
--

INSERT INTO `recuiter` (`Id`, `Jobtitle`, `Location`, `Packege`, `Experiance`, `Hours`, `Company`, `Applied`, `Candidate`) VALUES
(1, 'Full Stack Web Developer,', 'Israel', '20-25lakh', '7-10Years', 'Full-time', 'Google,Tel Aviv-Yafo,', '245789', 3),
(2, 'Interaction Designer', 'Mountain View, CA, USA', '10-15lakh', '1-3Years', 'Full-time', 'Google', '245789', 3),
(3, 'UX Design Lead, Payments', 'Bengaluru,Karnataka, India', '10-15lakh', '1-3Years', 'Full-time', 'Google', '245789', 3);

-- --------------------------------------------------------

--
-- Table structure for table `reject`
--

CREATE TABLE `reject` (
  `Id` int(1) NOT NULL,
  `Jobtitle` varchar(25) NOT NULL,
  `Location` varchar(25) NOT NULL,
  `Packege` varchar(30) NOT NULL,
  `Experiance` varchar(11) NOT NULL,
  `Hours` varchar(25) NOT NULL,
  `Company` varchar(25) NOT NULL,
  `Applied` varchar(20) NOT NULL,
  `Candidate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reject`
--

INSERT INTO `reject` (`Id`, `Jobtitle`, `Location`, `Packege`, `Experiance`, `Hours`, `Company`, `Applied`, `Candidate`) VALUES
(1, 'Full Stack Web Developer,', 'Israel', '20-25lakh', '7-10Years', 'Full-time', 'Google,Tel Aviv-Yafo,', '245789', 3),
(2, 'Web Developer, Legal Onli', 'Mountain View, CA, USA', '20-20lakh', '0-2Years', 'Full-time', 'Google,Tel Aviv-Yafo,', '245789', 3),
(3, 'Web Developer, Legal Onli', 'Mountain View, CA, USA', '20lakh', '2-3Years', 'Full-time', 'Google', '245789', 3),
(4, 'Web Developer, Legal Onli', 'Mountain View, CA, USA', '20lakh', '2-3Years', 'Full-time', 'Google', '245789', 3),
(5, 'UX Design Lead, Payments', 'Bengaluru,Karnataka, Indi', '10-15lakh', '1-3Years', 'Full-time', 'Google', '245789', 3),
(6, 'Interaction Designer', 'Mountain View, CA, USA', '10-15lakh', '1-3Years', 'Full-time', 'Google', '245789', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `personalinfo`
--
ALTER TABLE `personalinfo`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `recuiter`
--
ALTER TABLE `recuiter`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `reject`
--
ALTER TABLE `reject`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `personalinfo`
--
ALTER TABLE `personalinfo`
  MODIFY `Id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `recuiter`
--
ALTER TABLE `recuiter`
  MODIFY `Id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reject`
--
ALTER TABLE `reject`
  MODIFY `Id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
