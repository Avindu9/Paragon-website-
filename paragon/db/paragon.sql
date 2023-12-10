-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2023 at 06:32 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paragon`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookingstatus`
--

CREATE TABLE `bookingstatus` (
  `idbookingstatus` int(11) NOT NULL,
  `status` varchar(45) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `bookingid` int(11) UNSIGNED ZEROFILL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `birthday` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `telephone` varchar(45) DEFAULT NULL,
  `password1` varchar(45) DEFAULT NULL,
  `password2` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `username`, `age`, `birthday`, `email`, `telephone`, `password1`, `password2`) VALUES
(1, 'admin', 24, '1999/01/26', 'avindudilshan99999@gmail.com', '0779291667', 'admin123', 'admin123'),
(2, 'Avindu', 24, '1999/01/26', 'avindudilshan99999@gmail.com', '0779291667', 'avindu8068', 'avindu8068');

-- --------------------------------------------------------

--
-- Table structure for table `customerbooking`
--

CREATE TABLE `customerbooking` (
  `bookingid` int(11) NOT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `telephone` int(11) DEFAULT NULL,
  `arrialdate` date DEFAULT NULL,
  `depaturedate` date DEFAULT NULL,
  `time` varchar(45) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `noguest` int(11) DEFAULT NULL,
  `roomcatagory` varchar(45) DEFAULT NULL,
  `standerd` varchar(45) DEFAULT NULL,
  `message` varchar(450) DEFAULT NULL,
  `acceptation` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customerbooking`
--

INSERT INTO `customerbooking` (`bookingid`, `firstname`, `lastname`, `email`, `telephone`, `arrialdate`, `depaturedate`, `time`, `date`, `noguest`, `roomcatagory`, `standerd`, `message`, `acceptation`) VALUES
(2, 'avindu', 'dilshan', 'avindudilshan99999@gmail.com', 779291667, '2023-10-09', '2023-10-14', '20:5:30', '2023-10-08', 2, 'Standerd Room', 'yes', 'Your Massage', 'waiting'),
(3, 'sangeeth', 'jayawarna', 'davindu141@gmail.com', 2147483647, '2023-10-18', '2023-10-20', '19:3:56', '2023-10-15', 2, 'Standerd Room', 'yes', 'Your Massage', 'waiting');

-- --------------------------------------------------------

--
-- Table structure for table `customercontact`
--

CREATE TABLE `customercontact` (
  `idcustomercontact` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `message` varchar(450) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customercontact`
--

INSERT INTO `customercontact` (`idcustomercontact`, `name`, `email`, `message`, `date`, `time`) VALUES
(1, 'avindu', 'avindudilshan99999@gmail.com', 'Your Massage', '2023-10-08', '21:37:12'),
(2, 'pasindu', 'davindu141@gmail.com', 'Your Massage', '2023-10-08', '21:37:24');

-- --------------------------------------------------------

--
-- Table structure for table `management`
--

CREATE TABLE `management` (
  `idmanagement` int(11) NOT NULL,
  `admin_name` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `management`
--

INSERT INTO `management` (`idmanagement`, `admin_name`, `password`) VALUES
(1, 'admin', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookingstatus`
--
ALTER TABLE `bookingstatus`
  ADD PRIMARY KEY (`idbookingstatus`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customerbooking`
--
ALTER TABLE `customerbooking`
  ADD PRIMARY KEY (`bookingid`);

--
-- Indexes for table `customercontact`
--
ALTER TABLE `customercontact`
  ADD PRIMARY KEY (`idcustomercontact`);

--
-- Indexes for table `management`
--
ALTER TABLE `management`
  ADD PRIMARY KEY (`idmanagement`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookingstatus`
--
ALTER TABLE `bookingstatus`
  MODIFY `idbookingstatus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customerbooking`
--
ALTER TABLE `customerbooking`
  MODIFY `bookingid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customercontact`
--
ALTER TABLE `customercontact`
  MODIFY `idcustomercontact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `management`
--
ALTER TABLE `management`
  MODIFY `idmanagement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
