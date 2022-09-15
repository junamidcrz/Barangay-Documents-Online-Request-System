-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2021 at 07:52 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdors`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Username`, `Password`) VALUES
(1, 'admin1', '12345'),
(2, 'admin2', 'admin2'),
(3, 'admin3', 'admin3');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `Username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(11) NOT NULL,
  `Fullname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Birthdate` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Age` int(2) NOT NULL,
  `Gender` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `HomeAddress` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Contact` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `DateofRequest` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `Purposes` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Documents` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Fee` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ValidID` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `FrontID` longblob NOT NULL,
  `BackID` longblob NOT NULL,
  `Payment` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Service` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Status` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`Username`, `id`, `Fullname`, `Birthdate`, `Age`, `Gender`, `HomeAddress`, `Contact`, `DateofRequest`, `Purposes`, `Documents`, `Fee`, `ValidID`, `FrontID`, `BackID`, `Payment`, `Service`, `Status`) VALUES
('user1', 14, 'Melanie Martinez', '03/25/1998', 22, 'Female', 'QC', '09123456789', '02/18/2021', 'Try', 'Barangay Certificate', '100 Pesos', 'Driver\'s Licence', '', '', 'Paid', 'Received', 'Completed'),
('user1', 17, 'Melanie Martinez', '03/25/1998', 22, 'Male', 'QC', '09123456789', '02/18/2021', 'Try', 'Community Tax Return', '20 Pesos', 'Barangay ID', '', '', 'Paid', 'Received', 'Completed'),
('user1', 18, 'Melanie Martinez', '03/25/1997', 23, 'Female', 'QC', '09123456789', '02/18/2021', 'Try', 'Certificate of Indigency', '100 Pesos', 'Voter\'s ID', '', '', 'COD', 'For Delivery', 'Approved'),
('user1', 19, 'Melanie Martinez', '02/15/1998', 24, 'Male', 'QC', '09123456789', '02/18/2021', 'Try', 'Barangay ID', '50 Pesos', 'Voter\'s ID', '', '', 'Denied', 'Denied', 'Denied'),
('user2', 20, 'Harry Styles', '02/01/1997', 25, 'Male', 'QC', '09123456789', '02/18/2021', 'Try', 'Community Tax Return', '20 Pesos', 'Driver\'s Licence', '', '', 'Denied', 'Denied', 'Denied'),
('user1', 21, 'Jonna Deocariza', '05/01/2000', 20, 'Female', 'QC', '09123456789', '02/18/2021', 'Try', 'Certificate of Indigency', '100 Pesos', 'School ID', '', '', 'Canceled', 'Canceled', 'Canceled'),
('user1', 24, 'Jonna Deocariza', '05/01/2000', 21, 'Female', 'West Fairview, Quezon City', '09123456789', '07/14/2021', 'School Requirement', 'Certificate of Indigency', '100 Pesos', 'School ID', '', '', 'COD', 'For Delivery', 'Pending for Approval');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(64) NOT NULL,
  `LastName` varchar(64) NOT NULL,
  `Email` varchar(64) NOT NULL,
  `Username` varchar(32) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `FirstName`, `LastName`, `Email`, `Username`, `Password`, `Status`) VALUES
(1, 'user1', 'user1', 'user1@gmail.com', 'user1', 'user1', 'Active'),
(2, 'user2', 'user2', 'user2@gmail.com', 'user2', 'user2', 'Inactive'),
(7, 'user3', 'Cute', 'user3@gmail.com', 'user3', 'user3', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
