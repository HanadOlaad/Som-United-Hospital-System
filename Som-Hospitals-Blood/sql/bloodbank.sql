-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2024 at 12:42 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `blooddinfo`
--

CREATE TABLE `blooddinfo` (
  `bdid` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `bg` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blooddinfo`
--

INSERT INTO `blooddinfo` (`bdid`, `rid`, `bg`) VALUES
(10, 1, 'A+'),
(11, 1, 'B-'),
(12, 4, 'B+'),
(13, 4, 'O+'),
(14, 5, 'B+'),
(15, 5, 'B-'),
(16, 5, 'O+'),
(17, 6, 'B+'),
(18, 6, 'AB+'),
(19, 6, 'A-'),
(20, 7, 'AB-'),
(21, 7, 'A-'),
(22, 7, 'O-'),
(23, 1, 'A-'),
(27, 9, 'A+'),
(28, 9, 'A-');

-- --------------------------------------------------------

--
-- Table structure for table `blooddonate`
--

CREATE TABLE `blooddonate` (
  `donoid` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `hid` int(11) NOT NULL,
  `bg` varchar(11) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blooddonate`
--

INSERT INTO `blooddonate` (`donoid`, `rid`, `hid`, `bg`, `status`) VALUES
(6, 6, 1, 'B+', 'Accepted'),
(7, 1, 1, 'A+', 'Accepted'),
(8, 7, 1, 'AB-', 'Accepted'),
(9, 7, 1, 'O-', 'Pending'),
(10, 7, 1, 'O-', 'Pending'),
(11, 1, 1, 'A+', 'Pending'),
(12, 1, 1, 'A+', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `bloodinfo`
--

CREATE TABLE `bloodinfo` (
  `bid` int(11) NOT NULL,
  `hid` int(11) NOT NULL,
  `bg` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bloodinfo`
--

INSERT INTO `bloodinfo` (`bid`, `hid`, `bg`) VALUES
(8, 1, 'O+'),
(12, 4, 'A-'),
(13, 4, 'A+'),
(14, 4, 'AB+'),
(16, 5, 'A+'),
(17, 5, 'B-'),
(18, 5, 'O-'),
(20, 5, 'B+'),
(21, 6, 'O+'),
(22, 6, 'A-'),
(23, 6, 'O-'),
(24, 7, 'A-'),
(25, 7, 'A+'),
(26, 7, 'B-'),
(27, 7, 'B+'),
(31, 1, 'B-'),
(32, 1, 'AB+'),
(33, 1, 'B+'),
(34, 1, 'O-'),
(35, 1, 'AB-');

-- --------------------------------------------------------

--
-- Table structure for table `bloodrequest`
--

CREATE TABLE `bloodrequest` (
  `reqid` int(11) NOT NULL,
  `hid` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `bg` varchar(11) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bloodrequest`
--

INSERT INTO `bloodrequest` (`reqid`, `hid`, `rid`, `bg`, `status`) VALUES
(7, 1, 6, 'O+', 'Rejected'),
(8, 7, 7, 'B-', 'Pending'),
(9, 1, 9, 'O+', 'Accepted');

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

CREATE TABLE `hospitals` (
  `id` int(11) NOT NULL,
  `hname` varchar(100) NOT NULL,
  `hemail` varchar(100) NOT NULL,
  `hpassword` varchar(100) NOT NULL,
  `hphone` varchar(100) NOT NULL,
  `hcity` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`id`, `hname`, `hemail`, `hpassword`, `hphone`, `hcity`) VALUES
(1, 'Madina hospital', 'MadinaHospital@gmail.com', 'Madina', '+252619563804', 'Mogadishu'),
(4, 'KalkalHospital', 'Kalkal@gmail.com', 'Kalkal123', '+252615098767', 'Mogadishu'),
(5, 'Somali Sudanes Hospital', 'SomaliSudanes@gmail.com', 'SomSudan', '+252616789087', 'Mogadishu'),
(6, 'HawoAbdi Hospital', 'HawoAbdi@gmail.com', 'HawoAbdi', '+252615764534', 'Mogadishu'),
(7, 'DigferHospital', 'DigferHospital@gmail.com', 'Digfer', '+252614568765', 'Mogadishu');

-- --------------------------------------------------------

--
-- Table structure for table `receivers`
--

CREATE TABLE `receivers` (
  `id` int(11) NOT NULL,
  `rname` varchar(100) NOT NULL,
  `remail` varchar(100) NOT NULL,
  `rpassword` varchar(100) NOT NULL,
  `rphone` varchar(100) NOT NULL,
  `rbg` varchar(10) NOT NULL,
  `rcity` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `receivers`
--

INSERT INTO `receivers` (`id`, `rname`, `remail`, `rpassword`, `rphone`, `rbg`, `rcity`) VALUES
(1, 'test', 'test@gmail.com', 'test', '613459908', 'A+', 'Hirshabele'),
(4, 'Salma', 'xyz@gmail.com', 'xyz@47', '00770099', 'B+', 'Galmudug'),
(5, 'Basra', 'abcd@gmail.com', 'rithish', '614568909', 'B+', 'Hargeisa'),
(6, 'Dahir', 'klmn@gmail.com', 'Dahir74', '615678909', 'B+', 'Kalkaio'),
(7, 'Samara', 'Samara@gmail.com', 'Samara989', '612457689', 'AB-', 'Baido'),
(8, 'Shamso', 'Shamsa@gmail.com', '123456', '624568909', 'AB+', 'Puntland'),
(9, 'Hanad', 'Hanad@gmail.com', '123456', '0613450267', 'A+', 'Mogadishu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blooddinfo`
--
ALTER TABLE `blooddinfo`
  ADD PRIMARY KEY (`bdid`),
  ADD KEY `blooddinfo_ibfk_2` (`rid`);

--
-- Indexes for table `blooddonate`
--
ALTER TABLE `blooddonate`
  ADD PRIMARY KEY (`donoid`),
  ADD KEY `rid` (`rid`);

--
-- Indexes for table `bloodinfo`
--
ALTER TABLE `bloodinfo`
  ADD PRIMARY KEY (`bid`),
  ADD KEY `hid` (`hid`);

--
-- Indexes for table `bloodrequest`
--
ALTER TABLE `bloodrequest`
  ADD PRIMARY KEY (`reqid`),
  ADD KEY `hid` (`hid`);

--
-- Indexes for table `hospitals`
--
ALTER TABLE `hospitals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receivers`
--
ALTER TABLE `receivers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blooddinfo`
--
ALTER TABLE `blooddinfo`
  MODIFY `bdid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `blooddonate`
--
ALTER TABLE `blooddonate`
  MODIFY `donoid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `bloodinfo`
--
ALTER TABLE `bloodinfo`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `bloodrequest`
--
ALTER TABLE `bloodrequest`
  MODIFY `reqid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `hospitals`
--
ALTER TABLE `hospitals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `receivers`
--
ALTER TABLE `receivers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blooddinfo`
--
ALTER TABLE `blooddinfo`
  ADD CONSTRAINT `blooddinfo_ibfk_2` FOREIGN KEY (`rid`) REFERENCES `receivers` (`id`);

--
-- Constraints for table `bloodinfo`
--
ALTER TABLE `bloodinfo`
  ADD CONSTRAINT `bloodinfo_ibfk_1` FOREIGN KEY (`hid`) REFERENCES `hospitals` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
