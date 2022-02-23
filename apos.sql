-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2021 at 07:34 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apos`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `userid` int(11) NOT NULL,
  `emboss` varchar(250) NOT NULL,
  `stype` varchar(150) NOT NULL,
  `station` varchar(250) NOT NULL,
  `department` varchar(255) NOT NULL,
  `town` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `snumber` varchar(255) NOT NULL,
  `avail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`userid`, `emboss`, `stype`, `station`, `department`, `town`, `region`, `snumber`, `avail`) VALUES
(87, 'Gis/hq/chp/lpt/21/42', 'Laptop', 'hq', 'chaplaincy', 'accra', 'greater accra', 'cndo266dhd', 'ISSUED'),
(112, 'GIS/ELP/PC/341', 'System Unit', 'ELUBO', 'NOT APPLICABLE', 'ELUBO', 'WESTERN rEGION', 'N/A', 'NOT ISSUED'),
(113, 'GIS/OKK/PC/342', 'System Unit', 'OSEI KOJO KROM', 'NOT APPLICABLE', 'OSEI KOJO KROM', 'WESTERN NORTH', 'N/A', 'NOT ISSUED'),
(114, 'GIS/ECH/PC/343', 'System Unit', 'ENCHI', 'NOT APPLICABLE', 'ENCHI', 'WESTERN NORTH', 'N/A', 'NOT ISSUED'),
(115, 'GIS/OKK/PC/344', 'System Unit', 'OSSEIKOJOKROM', 'NOT APPLICABLE', 'OSSEIKOJOKROM', 'WESTERN NORTH', 'N/A', 'NOT ISSUED'),
(116, 'GIS/SWW/PC/345', 'System Unit', 'SEFWI WIASO', 'NOT APPLICABLE', 'SEFWI WIASO', 'WESTERN NORTH', 'N/A', 'NOT ISSUED'),
(117, 'GIS/SWW/PC/346', 'System Unit', 'SEFWI WIASO', 'NOT APPLICABLE', 'SEFWI WIASO', 'WESTERN NORTH', 'N/A', 'NOT ISSUED'),
(118, 'GIS/ECH/PC/347', 'System Unit', 'ENCHI', 'NOT APPLICABLE', 'ENCHI', 'WESTERN NORTH', 'N/A', 'NOT ISSUED'),
(119, 'GIS/YKS/PC/348', 'System Unit', 'YAAKESE', 'NOT APPLICABLE', 'YAAKESE', 'WESTERN NORTH', 'N/A', 'NOT ISSUED'),
(120, 'GIS/YKS/PC/349', 'System Unit', 'YAAKESE', 'NOT APPLICABLE', 'YAAKESE', 'WESTERN NORTH', 'N/A', 'NOT ISSUED'),
(121, 'GIS/DDS/PC/350', 'System Unit', 'DADIESO', 'NOT APPLICABLE', 'DADIESO', 'WESTERN NORTH', 'N/A', 'NOT ISSUED'),
(122, 'GIS/BBN/PC/351', 'System Unit', 'BIBIANI', 'NOT APPLICABLE', 'BIBIANI', 'WESTERN NORTH', 'N/A', 'NOT ISSUED'),
(123, 'GIS/BBN/PC/352', 'System Unit', 'BIBIANI', 'NOT APPLICABLE', 'BIBIANI', 'WESTERN NORTH', 'N/A', 'NOT ISSUED'),
(124, 'GIS/DDS/PC/353', 'System Unit', 'DADIESO', 'NOT APPLICABLE', 'DADIESO', 'WESTERN NORTH', 'N/A', 'NOT ISSUED'),
(125, 'GIS/SWW/PRT/155', 'Printer(Big)', 'SEFWI WIASO', 'NOT APPLICABLE', 'SEFWI WIASO', 'WESTERN NORTH', 'N/A', 'NOT ISSUED'),
(126, 'GIS/OKK/PRT/156', 'Printer(Big)', 'OSSEIKOJOKROM', 'NOT APPLICABLE', 'OSSEIKOJOKROM', 'WESTERN NORTH', 'N/A', 'NOT ISSUED'),
(127, 'GIS/ECH/PRT/157', 'Printer(Big)', 'ENCHI', 'NOT APPLICABLE', 'ENCHI', 'WESTERN NORTH', 'N/A', 'NOT ISSUED'),
(128, 'GIS/DDS/PRT/158', 'Printer(Small)', 'DADIESO', 'NOT APPLICABLE', 'DADIESO', 'WESTERN NORTH', 'N/A', 'NOT ISSUED'),
(129, 'GIS/YKS/PRT/159', 'Printer(Big)', 'YAAKESI', 'NOT APPLICABLE', 'YAAKESI', 'WESTERN NORTH', 'N/A', 'NOT ISSUED'),
(130, 'GIS/BBN/PRT/160', 'Printer(Small)', 'BIBIANI', 'NOT APPLICABLE', 'BIBIANI', 'WESTERN NORTH', 'N/A', 'NOT ISSUED'),
(131, 'GIS/SWW/UPS/184', 'UPS', 'SEFWI WIASO', 'NOT APPLICABLE', 'SEFWI WIASO', 'WESTERN NORTH', 'N/A', 'NOT ISSUED'),
(132, 'GIS/OKK/UPS/185', 'UPS', 'OSSEIKOJOKROM', 'NOT APPLICABLE', 'OSSEIKOJOKROM', 'WESTERN NORTH', 'N/A', 'NOT ISSUED'),
(133, 'GIS/ECH/UPS/186', 'UPS', 'ENCHI', 'NOT APPLICABLE', 'ENCHI', 'WESTERN NORTH', 'N/A', 'NOT ISSUED'),
(134, 'GIS/DDS/UPS/187', 'UPS', 'DADIESO', 'NOT APPLICABLE', 'DADIESO', 'WESTERN NORTH', 'N/A', 'NOT ISSUED'),
(135, 'GIS/YKS/UPS/188', 'UPS', 'YAAKESE', 'NOT APPLICABLE', 'YAAKESE', 'WESTERN NORTH', 'N/A', 'NOT ISSUED'),
(136, 'GIS/BBN/UPS/189', 'UPS', 'BIBIANI', 'NOT APPLICABLE', 'BIBIANI', 'WESTERN NORTH', 'N/A', 'NOT ISSUED'),
(137, 'GIS/BLE/PC/354', 'System Unit', 'BOLE', 'NOT APPLICABLE', 'BOLE', 'SAVANNA REGION', 'FM2MKG2', 'NOT ISSUED'),
(138, 'GIS/BCC/PC/355', 'System Unit', 'BOLECHACHE', 'NOT APPLICABLE', 'BOLECHACHE', 'SAVANNA REGION', '3Q14BR2', 'NOT ISSUED'),
(139, 'GIS/DMG/PC/356', 'System Unit', 'DAMANGO', 'NOT APPLICABLE', 'DAMANGO', 'SAVANNA REGION', 'FLJLKG2', 'NOT ISSUED'),
(140, 'GIS/DMG/PC/357', 'System Unit', 'DAMANGO', 'NOT APPLICABLE', 'DAMANGO', 'SAVANNA REGION', '4W6K2J2', 'NOT ISSUED'),
(141, 'GIS/BLE/PC/358', 'System Unit', 'BOLE', 'NOT APPLICABLE', 'BOLE', 'SAVANNA REGION', '4XSC2J2', 'NOT ISSUED'),
(142, 'GIS/BLE/PRT/161', 'Printer(Big)', 'BOLE', 'NOT APPLICABLE', 'BOLE', 'SAVANNA REGION', 'N/A', 'NOT ISSUED'),
(143, 'GIS/BCC/PRT/162', 'Printer(Big)', 'BOLECHACHE', 'NOT APPLICABLE', 'BOLECHACHE', 'SAVANNA REGION', 'N/A', 'NOT ISSUED'),
(144, 'GIS/dmg/PRT/163', 'Printer(Big)', 'DAMANGO', 'NOT APPLICABLE', 'DAMANGO', 'SAVANNA REGION', 'N/A', 'NOT ISSUED'),
(145, 'GIS/Ble/UPS/190', 'UPS', 'BOLE', 'NOT APPLICABLE', 'BOLE', 'SAVANNA REGION', 'N/A', 'NOT ISSUED'),
(146, 'GIS/BCC/UPS/191', 'UPS', 'BOLECHACHE', 'NOT APPLICABLE', 'BOLECHACHE', 'SAVANNA REGION', 'N/A', 'NOT ISSUED'),
(147, 'GIS/dmg/UPS/192', 'UPS', 'DAMANGO', 'NOT APPLICABLE', 'DAMANGO', 'SAVANNA REGION', 'N/A', 'NOT ISSUED'),
(148, 'GIS/ELP/PC/341', 'Monitor', 'ELUBO', 'NOT APPLICABLE', 'ELUBO', 'WESTERN REGION', 'N/A', 'NOT ISSUED'),
(149, 'GIS/OKK/PC/342', 'Monitor', 'OSSEIKOJOKROM', 'NOT APPLICABLE', 'OSSEIKOJOKROM', 'WESTERN NORTH', 'N/A', 'NOT ISSUED'),
(150, 'GIS/ECH/PC/343', 'Monitor', 'ENCHI', 'NOT APPLICABLE', 'ENCHI', 'WESTERN NORTH', 'N/A', 'NOT ISSUED'),
(151, 'GIS/OKK/PC/344', 'Monitor', 'OSSEIKOJOKROM', 'NOT APPLICABLE', 'OSSEIKOJOKROM', 'WESTERN NORTH', 'N/A', 'NOT ISSUED'),
(152, 'GIS/SWW/PC/345', 'Monitor', 'SEFWI WIASO', 'NOT APPLICABLE', 'SEFWI WIASO', 'WESTERN NORTH', 'N/A', 'NOT ISSUED'),
(153, 'GIS/SWW/PC/346', 'Monitor', 'SEFWI WIASO', 'NOT APPLICABLE', 'SEFWI WIASO', 'WESTERN NORTH', 'N/A', 'NOT ISSUED'),
(154, 'GIS/ECH/PC/347', 'Monitor', 'ENCHI', 'NOT APPLICABLE', 'ENCHI', 'WESTERN NORTH', 'N/A', 'NOT ISSUED'),
(155, 'GIS/YKS/PC/348', 'Monitor', 'YAAKESE', 'NOT APPLICABLE', 'YAAKESE', 'WESTERN NORTH', 'N/A', 'NOT ISSUED'),
(156, 'GIS/YKS/PC/349', 'Monitor', 'YAAKESE', 'NOT APPLICABLE', 'YAAKESE', 'WESTERN NORTH', 'N/A', 'NOT ISSUED'),
(157, 'GIS/DDS/PC/350', 'Monitor', 'DADIESO', 'NOT APPLICABLE', 'DADIESO', 'WESTERN NORTH', 'N/A', 'NOT ISSUED'),
(158, 'GIS/BBN/PC/351', 'Monitor', 'BIBIANI', 'NOT APPLICABLE', 'BIBIANI', 'WESTERN NORTH', 'N/A', 'NOT ISSUED'),
(159, 'GIS/BBN/PC/352', 'Monitor', 'BIBIANI', 'NOT APPLICABLE', 'BIBIANI', 'WESTERN NORTH', 'N/A', 'NOT ISSUED'),
(160, 'GIS/DDS/PC/353', 'Monitor', 'DADIESO', 'NOT APPLICABLE', 'DADIESO', 'WESTERN NORTH', 'N/A', 'NOT ISSUED'),
(161, 'GIS/BLE/PC/354', 'Monitor', 'BOLE', 'NOT APPLICABLE', 'BOLE', 'SAVANNA REGION', 'N/A', 'NOT ISSUED'),
(162, 'GIS/BCC/PC/355', 'Monitor', 'BOLECHACHE', 'NOT APPLICABLE', 'BOLECHACHE', 'SAVANNA REGION', 'N/A', 'NOT ISSUED'),
(163, 'GIS/DMG/PC/356', 'Monitor', 'DAMANGO', 'NOT APPLICABLE', 'DAMANGO', 'SAVANNA REGION', 'N/A', 'NOT ISSUED'),
(164, 'GIS/DMG/PC/357', 'Monitor', 'DAMANGO', 'NOT APPLICABLE', 'DAMANGO', 'SAVANNA REGION', 'N/A', 'NOT ISSUED'),
(165, 'GIS/BLE/PC/358', 'Monitor', 'BOLE', 'NOT APPLICABLE', 'BOLE', 'SAVANNA REGION', 'N/A', 'NOT ISSUED');

-- --------------------------------------------------------

--
-- Table structure for table `releasenote`
--

CREATE TABLE `releasenote` (
  `userid` int(255) NOT NULL,
  `fstation` varchar(255) NOT NULL,
  `rstation` varchar(255) NOT NULL,
  `equip` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `qty` varchar(255) NOT NULL,
  `snum` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
-- Error reading data for table apos.releasenote: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `apos`.`releasenote`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `tblfiles`
--

CREATE TABLE `tblfiles` (
  `ID` int(11) NOT NULL,
  `FileName` varchar(100) NOT NULL,
  `Location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblfiles`
--

INSERT INTO `tblfiles` (`ID`, `FileName`, `Location`) VALUES
(5, 'From RMGT TO MIS', 'Uploaded_Files/01042021082651rmgtos.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `access` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `password`, `access`) VALUES
(4, 'supplier', '99b0e8da24e29e4ccb5d7d76e677c2ac', 3),
(11, 'admin', 'admin', 1),
(13, '', '', 2),
(14, '', '', 2),
(16, '', '', 2),
(17, '', '', 2),
(19, '', '', 2),
(34, '', '', 2),
(41, '', '', 2),
(42, '', '', 2),
(43, '', '', 2),
(44, '', '', 2),
(45, '', '', 2),
(46, '', '', 2),
(77, '', '', 2),
(87, '', '', 2),
(96, '', '', 2),
(97, '', '', 2),
(98, '', '', 2),
(101, '', '', 2),
(102, '', '', 2),
(103, '', '', 2),
(104, '', '', 2),
(105, '', '', 2),
(109, '', '', 2),
(112, '', '', 2),
(113, '', '', 2),
(114, '', '', 2),
(115, '', '', 2),
(116, '', '', 2),
(117, '', '', 2),
(118, '', '', 2),
(119, '', '', 2),
(120, '', '', 2),
(121, '', '', 2),
(122, '', '', 2),
(123, '', '', 2),
(124, '', '', 2),
(125, '', '', 2),
(126, '', '', 2),
(127, '', '', 2),
(128, '', '', 2),
(129, '', '', 2),
(130, '', '', 2),
(131, '', '', 2),
(132, '', '', 2),
(133, '', '', 2),
(134, '', '', 2),
(135, '', '', 2),
(136, '', '', 2),
(137, '', '', 2),
(138, '', '', 2),
(139, '', '', 2),
(140, '', '', 2),
(141, '', '', 2),
(142, '', '', 2),
(143, '', '', 2),
(144, '', '', 2),
(145, '', '', 2),
(146, '', '', 2),
(147, '', '', 2),
(148, '', '', 2),
(149, '', '', 2),
(150, '', '', 2),
(151, '', '', 2),
(152, '', '', 2),
(153, '', '', 2),
(154, '', '', 2),
(155, '', '', 2),
(156, '', '', 2),
(157, '', '', 2),
(158, '', '', 2),
(159, '', '', 2),
(160, '', '', 2),
(161, '', '', 2),
(162, '', '', 2),
(163, '', '', 2),
(164, '', '', 2),
(165, '', '', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `releasenote`
--
ALTER TABLE `releasenote`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `tblfiles`
--
ALTER TABLE `tblfiles`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;

--
-- AUTO_INCREMENT for table `releasenote`
--
ALTER TABLE `releasenote`
  MODIFY `userid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `tblfiles`
--
ALTER TABLE `tblfiles`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
