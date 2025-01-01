-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2023 at 07:11 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php`
--
CREATE DATABASE php;
use php;
-- --------------------------------------------------------

--
-- Table structure for table `tbadmin`
--

CREATE TABLE `tbadmin` (
  `ID` varchar(20) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `Paasword` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbadmin`
--

INSERT INTO `tbadmin` (`ID`, `Name`, `Phone`, `Paasword`, `Email`) VALUES
('123', 'Alaa Barazi', '0504337676', 'alaa123', 'brazialaa@gmail.com'),
('456', 'Hajouj', '0504337676', 'hajouj', 'hajoujf@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbbranch`
--

CREATE TABLE `tbbranch` (
  `BranchID` varchar(20) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `Address` text NOT NULL,
  `Open` time(6) NOT NULL,
  `Close` time(6) NOT NULL,
  `AdminID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbbranch`
--

INSERT INTO `tbbranch` (`BranchID`, `Name`, `Phone`, `Address`, `Open`, `Close`, `AdminID`) VALUES
('1', 'Big Restaurant', '04654325', 'Karmiel, Big Center 51', '10:00:00.000000', '20:00:00.000000', '123'),
('2', 'ShawarmaKing', '043256487', 'Der el Asad, Center 51,1882', '10:00:00.000000', '20:00:00.000000', '456');

-- --------------------------------------------------------

--
-- Table structure for table `tbcontacts`
--

CREATE TABLE `tbcontacts` (
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `Subject` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbcontacts`
--

INSERT INTO `tbcontacts` (`FirstName`, `LastName`, `Subject`) VALUES
('Alaa Barazi', 'Co_Founder', 'alaa@gmail.com'),
('Mohammad Hajouj', 'Co_Founder', 'Hajouj@gmail.com'),
('alaa', 'barazi', 'was wonderful'),
('Alaa', 'Barazi', 'hi,\r\nit was wonderful thank you for everything.\r\n'),
('dsf', 'sdsfg', 'asdef'),
('Alaa', 'Barazi', 'aa'),
('swd', 'sad', 'sad'),
('Alaa', 'Barazi', 'sawdefsdgrft');

-- --------------------------------------------------------

--
-- Table structure for table `tbcoupon`
--

CREATE TABLE `tbcoupon` (
  `CouponNumber` varchar(20) NOT NULL,
  `Username` varchar(30) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbcoupon`
--

INSERT INTO `tbcoupon` (`CouponNumber`, `Username`) VALUES
('517759424944444', 'alaa'),
('8356032755945207', 'alaa');

-- --------------------------------------------------------

--
-- Table structure for table `tbcreditcard`
--

CREATE TABLE `tbcreditcard` (
  `Number` varchar(16) NOT NULL,
  `OwnerID` varchar(10) NOT NULL,
  `OwnerName` varchar(30) NOT NULL,
  `ExpiryDate` date NOT NULL,
  `CVV` int(3) NOT NULL,
  `Username` varchar(30) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbcreditcard`
--

INSERT INTO `tbcreditcard` (`Number`, `OwnerID`, `OwnerName`, `ExpiryDate`, `CVV`, `Username`) VALUES
('1111222233334444', '123453', 'alaa barazi', '2029-08-01', 369, 'alaa'),
('1111222255559999', '123453', 'alaa barazi', '2029-08-01', 789, 'alaa'),
('12', '122', 'alaa barazi', '2022-02-01', 457, 'alaa'),
('1234567812345678', '122', 'alaa barazi', '2029-02-01', 589, 'alaa'),
('1234567887654321', '12', 'alaa barazi', '2025-02-01', 589, 'alaa'),
('1234568932165498', '123453', 'alaa barazi', '2028-08-01', 369, 'alaa'),
('14522', '1425', 'alaa barazi', '2028-01-01', 477, 'alaa'),
('177765', '4567', 'alaa barazi', '2026-02-01', 455, 'alaa'),
('1963258745693214', '123453', 'alaa barazi', '2028-08-01', 236, 'alaa');

-- --------------------------------------------------------

--
-- Table structure for table `tblastpasswords`
--

CREATE TABLE `tblastpasswords` (
  `Password` varchar(20) CHARACTER SET utf8 NOT NULL,
  `Date` date NOT NULL,
  `Username` varchar(30) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblastpasswords`
--

INSERT INTO `tblastpasswords` (`Password`, `Date`, `Username`) VALUES
('145', '2023-01-05', 'alaa'),
('236', '2023-01-09', 'alaa'),
('265', '2023-01-05', 'alaa');

-- --------------------------------------------------------

--
-- Table structure for table `tbmonday`
--

CREATE TABLE `tbmonday` (
  `BookingOption` varchar(10) NOT NULL,
  `Day` varchar(40) NOT NULL DEFAULT 'Monday',
  `Hour` varchar(20) NOT NULL,
  `Booked` varchar(20) NOT NULL DEFAULT 'FALSE',
  `TableNumber` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbmonday`
--

INSERT INTO `tbmonday` (`BookingOption`, `Day`, `Hour`, `Booked`, `TableNumber`) VALUES
('1', 'Monday', '16', 'TRUE', '2'),
('10', 'Monday', '18', 'FALSE', '2'),
('11', 'Monday', '20', 'FALSE', '2'),
('12', 'Monday', '12', 'FALSE', '10'),
('13', 'Monday', '13', 'FALSE', '10'),
('14', 'Monday', '14', 'FALSE', '10'),
('15', 'Monday', '18', 'FALSE', '10'),
('16', 'Monday', '12', 'FALSE', '4'),
('17', 'Monday', '16', 'FALSE', '4'),
('18', 'Monday', '20', 'FALSE', '4'),
('19', 'Monday', '13', 'FALSE', '4'),
('2', 'Monday', '12', 'TRUE', '25'),
('20', 'Monday', '10', 'FALSE', '25'),
('21', 'Monday', '14', 'FALSE', '25'),
('22', 'Monday', '18', 'FALSE', '25'),
('23', 'Monday', '17', 'FALSE', '25'),
('3', 'Monday', '14', 'TRUE', '2'),
('4', 'Monday', '13', 'FALSE', '1'),
('5', 'Monday', '10', 'FALSE', '1'),
('6', 'Monday', '15', 'FALSE', '1'),
('7', 'Monday', '17', 'FALSE', '1'),
('8', 'Monday', '19', 'FALSE', '1'),
('9', 'Monday', '11', 'FALSE', '2');

-- --------------------------------------------------------

--
-- Table structure for table `tborder`
--

CREATE TABLE `tborder` (
  `Number` int(11) NOT NULL,
  `Status` varchar(10) NOT NULL DEFAULT 'Active',
  `Time` time NOT NULL,
  `Date` varchar(30) NOT NULL,
  `Day` varchar(40) CHARACTER SET utf8 NOT NULL,
  `PartySize` int(3) NOT NULL DEFAULT 0,
  `TimeRemaining` time NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Username` varchar(30) CHARACTER SET utf8 NOT NULL,
  `TableNumber` varchar(20) NOT NULL,
  `BranchID` varchar(20) NOT NULL,
  `CreditCardNumber` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tborder`
--

INSERT INTO `tborder` (`Number`, `Status`, `Time`, `Date`, `Day`, `PartySize`, `TimeRemaining`, `Name`, `Username`, `TableNumber`, `BranchID`, `CreditCardNumber`) VALUES
(621, 'InActive', '10:00:00', '2023-01-06', '', 5, '00:00:00', 'alaabarazi', 'alaa', '1', '1', '177765'),
(690, 'Active', '18:00:00', '2023-01-30', 'thursday', 2, '00:00:00', 'alaabarazi', 'alaa', '25', '1', '1234568932165498'),
(703, 'Active', '12:00:00', '2023-01-31', 'monday', 5, '00:00:00', 'alaabarazi', 'alaa', '25', '1', '1111222255559999');

-- --------------------------------------------------------

--
-- Table structure for table `tbreviews`
--

CREATE TABLE `tbreviews` (
  `Name` varchar(50) NOT NULL,
  `Comment` varchar(300) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbreviews`
--

INSERT INTO `tbreviews` (`Name`, `Comment`, `Date`) VALUES
('Alaa Barazi', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it', '2023-01-05'),
('Muhammad Hajouj', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it', '2023-01-05'),
('Verified User ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it', '2023-01-05');

-- --------------------------------------------------------

--
-- Table structure for table `tbsunday`
--

CREATE TABLE `tbsunday` (
  `BookingOption` varchar(10) NOT NULL,
  `Day` varchar(40) CHARACTER SET utf8 NOT NULL DEFAULT 'Sunday',
  `Hour` varchar(20) CHARACTER SET utf8 NOT NULL,
  `Booked` varchar(20) CHARACTER SET utf8 NOT NULL DEFAULT 'FALSE',
  `TableNumber` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbsunday`
--

INSERT INTO `tbsunday` (`BookingOption`, `Day`, `Hour`, `Booked`, `TableNumber`) VALUES
('1', 'Sunday', '10', 'FALSE', '1'),
('10', 'Sunday', '13', 'FALSE', '10'),
('11', 'Sunday', '14', 'FALSE', '10'),
('12', 'Sunday', '18', 'FALSE', '10'),
('13', 'Sunday', '10', 'FALSE', '25'),
('14', 'Sunday', '14', 'FALSE', '25'),
('15', 'Sunday', '18', 'FALSE', '25'),
('16', 'Sunday', '17', 'FALSE', '4'),
('17', 'Sunday', '12', 'FALSE', '4'),
('18', 'Sunday', '16', 'FALSE', '4'),
('19', 'Sunday', '20', 'FALSE', '4'),
('2', 'Sunday', '15', 'TRUE', '1'),
('20', 'Sunday', '13', 'FALSE', '4'),
('3', 'Sunday', '17', 'FALSE', '1'),
('4', 'Sunday', '19', 'FALSE', '1'),
('5', 'Sunday', '11', 'FALSE', '2'),
('6', 'Sunday', '16', 'FALSE', '2'),
('7', 'Sunday', '18', 'FALSE', '2'),
('8', 'Sunday', '20', 'FALSE', '2'),
('9', 'Sunday', '12', 'FALSE', '10');

-- --------------------------------------------------------

--
-- Table structure for table `tbtable`
--

CREATE TABLE `tbtable` (
  `Number` varchar(20) NOT NULL,
  `BranchID` varchar(20) NOT NULL,
  `PartySize` int(3) NOT NULL DEFAULT 1,
  `Place` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbtable`
--

INSERT INTO `tbtable` (`Number`, `BranchID`, `PartySize`, `Place`) VALUES
('1', '1', 4, 'Near a big Window, with option of smoking, child seat'),
('10', '1', 5, 'just come and you will see'),
('2', '1', 2, 'Inseide the restauran, near the Kitchen'),
('25', '2', 6, 'we can add more places if you want'),
('4', '2', 7, 'whatever');

-- --------------------------------------------------------

--
-- Table structure for table `tbthursday`
--

CREATE TABLE `tbthursday` (
  `BookingOption` varchar(10) NOT NULL,
  `Day` varchar(40) NOT NULL DEFAULT 'Thursday',
  `Hour` varchar(20) NOT NULL,
  `Booked` varchar(20) NOT NULL DEFAULT 'FALSE',
  `TableNumber` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbthursday`
--

INSERT INTO `tbthursday` (`BookingOption`, `Day`, `Hour`, `Booked`, `TableNumber`) VALUES
('1', 'Thursday', '10', 'FALSE', '1'),
('10', 'Thursday', '13', 'FALSE', '10'),
('11', 'Thursday', '14', 'FALSE', '10'),
('12', 'Thursday', '18', 'FALSE', '10'),
('13', 'Thursday', '10', 'FALSE', '25'),
('14', 'Thursday', '14', 'FALSE', '25'),
('15', 'Thursday', '18', 'FALSE', '25'),
('16', 'Thursday', '17', 'FALSE', '25'),
('17', 'Thursday', '12', 'FALSE', '4'),
('18', 'Thursday', '16', 'FALSE', '4'),
('19', 'Thursday', '13', 'FALSE', '4'),
('2', 'Thursday', '15', 'FALSE', '1'),
('20', 'Thursday', '20', 'FALSE', '4'),
('3', 'Thursday', '17', 'FALSE', '1'),
('4', 'Thursday', '19', 'FALSE', '1'),
('5', 'Thursday', '11', 'FALSE', '2'),
('6', 'Thursday', '16', 'FALSE', '2'),
('7', 'Thursday', '18', 'FALSE', '2'),
('8', 'Thursday', '20', 'FALSE', '2'),
('9', 'Thursday', '12', 'FALSE', '10');

-- --------------------------------------------------------

--
-- Table structure for table `tbtuesday`
--

CREATE TABLE `tbtuesday` (
  `BookingOption` varchar(10) NOT NULL,
  `Day` varchar(40) NOT NULL DEFAULT 'Tuesday',
  `Hour` varchar(20) NOT NULL,
  `Booked` varchar(20) NOT NULL DEFAULT 'FALSE',
  `TableNumber` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbtuesday`
--

INSERT INTO `tbtuesday` (`BookingOption`, `Day`, `Hour`, `Booked`, `TableNumber`) VALUES
('1', 'Tuesday', '10', 'FALSE', '1'),
('10', 'Tuesday', '13', 'FALSE', '10'),
('11', 'Tuesday', '14', 'FALSE', '10'),
('12', 'Tuesday', '18', 'FALSE', '10'),
('13', 'Tuesday', '10', 'FALSE', '25'),
('14', 'Tuesday', '14', 'FALSE', '25'),
('15', 'Tuesday', '18', 'FALSE', '25'),
('16', 'Tuesday', '17', 'FALSE', '25'),
('17', 'Tuesday', '12', 'FALSE', '4'),
('18', 'Tuesday', '16', 'FALSE', '4'),
('19', 'Tuesday', '13', 'FALSE', '4'),
('2', 'Tuesday', '15', 'FALSE', '1'),
('20', 'Tuesday', '20', 'FALSE', '4'),
('3', 'Tuesday', '17', 'FALSE', '1'),
('4', 'Tuesday', '19', 'FALSE', '1'),
('5', 'Tuesday', '11', 'FALSE', '2'),
('6', 'Tuesday', '16', 'FALSE', '2'),
('7', 'Tuesday', '18', 'FALSE', '2'),
('8', 'Tuesday', '20', 'FALSE', '2'),
('9', 'Tuesday', '12', 'FALSE', '10');

-- --------------------------------------------------------

--
-- Table structure for table `tbusers`
--

CREATE TABLE `tbusers` (
  `Username` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `RandomPassword` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `Attempt` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbusers`
--

INSERT INTO `tbusers` (`Username`, `Password`, `RandomPassword`, `Email`, `Phone`, `Attempt`) VALUES
('Admin', 'Admin', '', 'admin@gmail.com', '0504337676', 0),
('alaa', '236', 'mbYRwaal', 'brazialaa@gmail.com', '0504337676', 0),
('hajouj', 'hajouj', '', 'hajouj@gmail.com', '0504596831', 0),
('Mohammad', 'hajouj', '', 'hajouj@gmail.com', '0506545889', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbwednesday`
--

CREATE TABLE `tbwednesday` (
  `BookingOption` varchar(10) NOT NULL,
  `Day` varchar(40) NOT NULL DEFAULT 'Wednesday',
  `Hour` varchar(20) NOT NULL,
  `Booked` varchar(20) NOT NULL DEFAULT 'FALSE',
  `TableNumber` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbwednesday`
--

INSERT INTO `tbwednesday` (`BookingOption`, `Day`, `Hour`, `Booked`, `TableNumber`) VALUES
('1', 'Wednesday', '10', 'FALSE', '1'),
('10', 'Wednesday', '13', 'FALSE', '10'),
('11', 'Wednesday', '14', 'FALSE', '10'),
('12', 'Wednesday', '18', 'FALSE', '10'),
('13', 'Wednesday', '10', 'FALSE', '25'),
('14', 'Wednesday', '14', 'FALSE', '25'),
('15', 'Wednesday', '18', 'FALSE', '25'),
('16', 'Wednesday', '17', 'FALSE', '25'),
('17', 'Wednesday', '12', 'FALSE', '4'),
('18', 'Wednesday', '16', 'FALSE', '4'),
('19', 'Wednesday', '13', 'FALSE', '4'),
('2', 'Wednesday', '15', 'FALSE', '1'),
('20', 'Wednesday', '20', 'FALSE', '4'),
('3', 'Wednesday', '17', 'FALSE', '1'),
('4', 'Wednesday', '19', 'FALSE', '1'),
('5', 'Wednesday', '11', 'FALSE', '2'),
('6', 'Wednesday', '16', 'FALSE', '2'),
('7', 'Wednesday', '18', 'FALSE', '2'),
('8', 'Wednesday', '20', 'FALSE', '2'),
('9', 'Wednesday', '12', 'FALSE', '10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbadmin`
--
ALTER TABLE `tbadmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbbranch`
--
ALTER TABLE `tbbranch`
  ADD PRIMARY KEY (`BranchID`),
  ADD KEY `AdminBranch` (`AdminID`);

--
-- Indexes for table `tbcoupon`
--
ALTER TABLE `tbcoupon`
  ADD PRIMARY KEY (`CouponNumber`),
  ADD KEY `couponforuser` (`Username`);

--
-- Indexes for table `tbcreditcard`
--
ALTER TABLE `tbcreditcard`
  ADD PRIMARY KEY (`Number`),
  ADD KEY `UserPayungWithCredit` (`Username`);

--
-- Indexes for table `tblastpasswords`
--
ALTER TABLE `tblastpasswords`
  ADD PRIMARY KEY (`Password`),
  ADD KEY `tblastpasswords_ibfk_1` (`Username`);

--
-- Indexes for table `tbmonday`
--
ALTER TABLE `tbmonday`
  ADD PRIMARY KEY (`BookingOption`),
  ADD KEY `TableNumber` (`TableNumber`);

--
-- Indexes for table `tborder`
--
ALTER TABLE `tborder`
  ADD PRIMARY KEY (`Number`),
  ADD KEY `CreditForOrder` (`CreditCardNumber`),
  ADD KEY `OrderForBranch` (`BranchID`),
  ADD KEY `OrderForTable` (`TableNumber`),
  ADD KEY `OrderForUser` (`Username`);

--
-- Indexes for table `tbsunday`
--
ALTER TABLE `tbsunday`
  ADD PRIMARY KEY (`BookingOption`),
  ADD KEY `TableNumber` (`TableNumber`);

--
-- Indexes for table `tbtable`
--
ALTER TABLE `tbtable`
  ADD PRIMARY KEY (`Number`),
  ADD KEY `TableInBranch` (`BranchID`);

--
-- Indexes for table `tbthursday`
--
ALTER TABLE `tbthursday`
  ADD PRIMARY KEY (`BookingOption`),
  ADD KEY `TableNumber` (`TableNumber`);

--
-- Indexes for table `tbtuesday`
--
ALTER TABLE `tbtuesday`
  ADD PRIMARY KEY (`BookingOption`);
ALTER TABLE `tbtuesday` ADD FULLTEXT KEY `TableNumber` (`TableNumber`);

--
-- Indexes for table `tbusers`
--
ALTER TABLE `tbusers`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `tbwednesday`
--
ALTER TABLE `tbwednesday`
  ADD PRIMARY KEY (`BookingOption`),
  ADD KEY `TableNumber` (`TableNumber`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tborder`
--
ALTER TABLE `tborder`
  MODIFY `Number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9979;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbbranch`
--
ALTER TABLE `tbbranch`
  ADD CONSTRAINT `AdminBranch` FOREIGN KEY (`AdminID`) REFERENCES `tbadmin` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbcoupon`
--
ALTER TABLE `tbcoupon`
  ADD CONSTRAINT `couponforuser` FOREIGN KEY (`Username`) REFERENCES `tbusers` (`Username`) ON UPDATE CASCADE;

--
-- Constraints for table `tbcreditcard`
--
ALTER TABLE `tbcreditcard`
  ADD CONSTRAINT `UserPayungWithCredit` FOREIGN KEY (`Username`) REFERENCES `tbusers` (`Username`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `tblastpasswords`
--
ALTER TABLE `tblastpasswords`
  ADD CONSTRAINT `tblastpasswords_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `tbusers` (`Username`) ON UPDATE CASCADE;

--
-- Constraints for table `tbmonday`
--
ALTER TABLE `tbmonday`
  ADD CONSTRAINT `tbmonday_ibfk_1` FOREIGN KEY (`TableNumber`) REFERENCES `tbtable` (`Number`);

--
-- Constraints for table `tborder`
--
ALTER TABLE `tborder`
  ADD CONSTRAINT `CreditForOrder` FOREIGN KEY (`CreditCardNumber`) REFERENCES `tbcreditcard` (`Number`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `OrderForBranch` FOREIGN KEY (`BranchID`) REFERENCES `tbbranch` (`BranchID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `OrderForTable` FOREIGN KEY (`TableNumber`) REFERENCES `tbtable` (`Number`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `OrderForUser` FOREIGN KEY (`Username`) REFERENCES `tbusers` (`Username`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `tbsunday`
--
ALTER TABLE `tbsunday`
  ADD CONSTRAINT `tbsunday_ibfk_1` FOREIGN KEY (`TableNumber`) REFERENCES `tbtable` (`Number`);

--
-- Constraints for table `tbtable`
--
ALTER TABLE `tbtable`
  ADD CONSTRAINT `TableInBranch` FOREIGN KEY (`BranchID`) REFERENCES `tbbranch` (`BranchID`);

--
-- Constraints for table `tbthursday`
--
ALTER TABLE `tbthursday`
  ADD CONSTRAINT `tbthursday_ibfk_1` FOREIGN KEY (`TableNumber`) REFERENCES `tbtable` (`Number`);

--
-- Constraints for table `tbtuesday`
--
ALTER TABLE `tbtuesday`
  ADD CONSTRAINT `BookedForTable` FOREIGN KEY (`TableNumber`) REFERENCES `tbtable` (`Number`);

--
-- Constraints for table `tbwednesday`
--
ALTER TABLE `tbwednesday`
  ADD CONSTRAINT `tbwednesday_ibfk_1` FOREIGN KEY (`TableNumber`) REFERENCES `tbtable` (`Number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
