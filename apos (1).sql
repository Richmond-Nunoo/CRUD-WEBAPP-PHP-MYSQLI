-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2021 at 04:13 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

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
  `avail` varchar(255) NOT NULL,
  `comment` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`userid`, `emboss`, `stype`, `station`, `department`, `town`, `region`, `snumber`, `avail`, `comment`) VALUES
(87, 'Gis/hq/chp/lpt/21/42', 'Laptop', 'hq', 'chaplaincy', 'N/A', 'greater accra', 'cndo266dhd', 'ISSUED', 'N/A'),
(112, 'GIS/ELP/PC/341', 'System Unit', 'ELUBO', 'NOT APPLICABLE', 'N/A', 'WESTERN rEGION', 'N/A', 'NOT ISSUED', 'N/A'),
(113, 'GIS/OKK/PC/342', 'System Unit', 'OSEI KOJO KROM', 'NOT APPLICABLE', 'N/A', 'WESTERN NORTH', 'N/A', 'NOT ISSUED', 'N/A'),
(114, 'GIS/ECH/PC/343', 'System Unit', 'ENCHI', 'NOT APPLICABLE', 'N/A', 'WESTERN NORTH', 'N/A', 'NOT ISSUED', 'N/A'),
(115, 'GIS/OKK/PC/344', 'System Unit', 'OSSEIKOJOKROM', 'NOT APPLICABLE', 'N/A', 'WESTERN NORTH', 'N/A', 'NOT ISSUED', 'N/A'),
(116, 'GIS/SWW/PC/345', 'System Unit', 'SEFWI WIASO', 'NOT APPLICABLE', 'N/A', 'WESTERN NORTH', 'N/A', 'NOT ISSUED', 'N/A'),
(117, 'GIS/SWW/PC/346', 'System Unit', 'SEFWI WIASO', 'NOT APPLICABLE', 'N/A', 'WESTERN NORTH', 'N/A', 'NOT ISSUED', 'N/A'),
(118, 'GIS/ECH/PC/347', 'System Unit', 'ENCHI', 'NOT APPLICABLE', 'N/A', 'WESTERN NORTH', 'N/A', 'NOT ISSUED', 'N/A'),
(119, 'GIS/YKS/PC/348', 'System Unit', 'YAAKESE', 'NOT APPLICABLE', 'N/A', 'WESTERN NORTH', 'N/A', 'NOT ISSUED', 'N/A'),
(120, 'GIS/YKS/PC/349', 'System Unit', 'YAAKESE', 'NOT APPLICABLE', 'N/A', 'WESTERN NORTH', 'N/A', 'NOT ISSUED', 'N/A'),
(121, 'GIS/DDS/PC/350', 'System Unit', 'DADIESO', 'NOT APPLICABLE', 'N/A', 'WESTERN NORTH', 'N/A', 'NOT ISSUED', 'N/A'),
(122, 'GIS/BBN/PC/351', 'System Unit', 'BIBIANI', 'NOT APPLICABLE', 'N/A', 'WESTERN NORTH', 'N/A', 'NOT ISSUED', 'N/A'),
(123, 'GIS/BBN/PC/352', 'System Unit', 'BIBIANI', 'NOT APPLICABLE', 'N/A', 'WESTERN NORTH', 'N/A', 'NOT ISSUED', 'N/A'),
(124, 'GIS/DDS/PC/353', 'System Unit', 'DADIESO', 'NOT APPLICABLE', 'N/A', 'WESTERN NORTH', 'N/A', 'NOT ISSUED', 'N/A'),
(125, 'GIS/SWW/PRT/155', 'Printer(Big)', 'SEFWI WIASO', 'NOT APPLICABLE', 'N/A', 'WESTERN NORTH', 'N/A', 'NOT ISSUED', 'N/A'),
(126, 'GIS/OKK/PRT/156', 'Printer(Big)', 'OSSEIKOJOKROM', 'NOT APPLICABLE', 'N/A', 'WESTERN NORTH', 'N/A', 'NOT ISSUED', 'N/A'),
(127, 'GIS/ECH/PRT/157', 'Printer(Big)', 'ENCHI', 'NOT APPLICABLE', 'N/A', 'WESTERN NORTH', 'N/A', 'NOT ISSUED', 'N/A'),
(128, 'GIS/DDS/PRT/158', 'Printer(Small)', 'DADIESO', 'NOT APPLICABLE', 'N/A', 'WESTERN NORTH', 'N/A', 'NOT ISSUED', 'N/A'),
(129, 'GIS/YKS/PRT/159', 'Printer(Big)', 'YAAKESI', 'NOT APPLICABLE', 'N/A', 'WESTERN NORTH', 'N/A', 'NOT ISSUED', 'N/A'),
(130, 'GIS/BBN/PRT/160', 'Printer(Small)', 'BIBIANI', 'NOT APPLICABLE', 'N/A', 'WESTERN NORTH', 'N/A', 'NOT ISSUED', 'N/A'),
(131, 'GIS/SWW/UPS/184', 'UPS', 'SEFWI WIASO', 'NOT APPLICABLE', 'N/A', 'WESTERN NORTH', 'N/A', 'NOT ISSUED', 'N/A'),
(132, 'GIS/OKK/UPS/185', 'UPS', 'OSSEIKOJOKROM', 'NOT APPLICABLE', 'N/A', 'WESTERN NORTH', 'N/A', 'NOT ISSUED', 'N/A'),
(133, 'GIS/ECH/UPS/186', 'UPS', 'ENCHI', 'NOT APPLICABLE', 'N/A', 'WESTERN NORTH', 'N/A', 'NOT ISSUED', 'N/A'),
(134, 'GIS/DDS/UPS/187', 'UPS', 'DADIESO', 'NOT APPLICABLE', 'N/A', 'WESTERN NORTH', 'N/A', 'NOT ISSUED', 'N/A'),
(135, 'GIS/YKS/UPS/188', 'UPS', 'YAAKESE', 'NOT APPLICABLE', 'N/A', 'WESTERN NORTH', 'N/A', 'NOT ISSUED', 'N/A'),
(136, 'GIS/BBN/UPS/189', 'UPS', 'BIBIANI', 'NOT APPLICABLE', 'N/A', 'WESTERN NORTH', 'N/A', 'NOT ISSUED', 'N/A'),
(137, 'GIS/BLE/PC/354', 'System Unit', 'BOLE', 'NOT APPLICABLE', 'N/A', 'SAVANNA REGION', 'FM2MKG2', 'NOT ISSUED', 'N/A'),
(138, 'GIS/BCC/PC/355', 'System Unit', 'BOLECHACHE', 'NOT APPLICABLE', 'N/A', 'SAVANNA REGION', '3Q14BR2', 'NOT ISSUED', 'N/A'),
(139, 'GIS/DMG/PC/356', 'System Unit', 'DAMANGO', 'NOT APPLICABLE', 'N/A', 'SAVANNA REGION', 'FLJLKG2', 'NOT ISSUED', 'N/A'),
(140, 'GIS/DMG/PC/357', 'System Unit', 'DAMANGO', 'NOT APPLICABLE', 'N/A', 'SAVANNA REGION', '4W6K2J2', 'NOT ISSUED', 'N/A'),
(141, 'GIS/BLE/PC/358', 'System Unit', 'BOLE', 'NOT APPLICABLE', 'N/A', 'SAVANNA REGION', '4XSC2J2', 'NOT ISSUED', 'N/A'),
(142, 'GIS/BLE/PRT/161', 'Printer(Big)', 'BOLE', 'NOT APPLICABLE', 'N/A', 'SAVANNA REGION', 'N/A', 'NOT ISSUED', 'N/A'),
(143, 'GIS/BCC/PRT/162', 'Printer(Big)', 'BOLECHACHE', 'NOT APPLICABLE', 'N/A', 'SAVANNA REGION', 'N/A', 'NOT ISSUED', 'N/A'),
(144, 'GIS/dmg/PRT/163', 'Printer(Big)', 'DAMANGO', 'NOT APPLICABLE', 'N/A', 'SAVANNA REGION', 'N/A', 'NOT ISSUED', 'N/A'),
(145, 'GIS/Ble/UPS/190', 'UPS', 'BOLE', 'NOT APPLICABLE', 'N/A', 'SAVANNA REGION', 'N/A', 'NOT ISSUED', 'N/A'),
(146, 'GIS/BCC/UPS/191', 'UPS', 'BOLECHACHE', 'NOT APPLICABLE', 'N/A', 'SAVANNA REGION', 'N/A', 'NOT ISSUED', 'N/A'),
(147, 'GIS/dmg/UPS/192', 'UPS', 'DAMANGO', 'NOT APPLICABLE', 'N/A', 'SAVANNA REGION', 'N/A', 'NOT ISSUED', 'N/A'),
(148, 'GIS/ELP/PC/341', 'Monitor', 'ELUBO', 'NOT APPLICABLE', 'N/A', 'WESTERN REGION', 'N/A', 'NOT ISSUED', 'N/A'),
(149, 'GIS/OKK/PC/342', 'Monitor', 'OSSEIKOJOKROM', 'NOT APPLICABLE', 'N/A', 'WESTERN NORTH', 'N/A', 'NOT ISSUED', 'N/A'),
(150, 'GIS/ECH/PC/343', 'Monitor', 'ENCHI', 'NOT APPLICABLE', 'N/A', 'WESTERN NORTH', 'N/A', 'NOT ISSUED', 'N/A'),
(151, 'GIS/OKK/PC/344', 'Monitor', 'OSSEIKOJOKROM', 'NOT APPLICABLE', 'N/A', 'WESTERN NORTH', 'N/A', 'NOT ISSUED', 'N/A'),
(152, 'GIS/SWW/PC/345', 'Monitor', 'SEFWI WIASO', 'NOT APPLICABLE', 'N/A', 'WESTERN NORTH', 'N/A', 'NOT ISSUED', 'N/A'),
(153, 'GIS/SWW/PC/346', 'Monitor', 'SEFWI WIASO', 'NOT APPLICABLE', 'N/A', 'WESTERN NORTH', 'N/A', 'NOT ISSUED', 'N/A'),
(154, 'GIS/ECH/PC/347', 'Monitor', 'ENCHI', 'NOT APPLICABLE', 'N/A', 'WESTERN NORTH', 'N/A', 'NOT ISSUED', 'N/A'),
(155, 'GIS/YKS/PC/348', 'Monitor', 'YAAKESE', 'NOT APPLICABLE', 'N/A', 'WESTERN NORTH', 'N/A', 'NOT ISSUED', 'N/A'),
(156, 'GIS/YKS/PC/349', 'Monitor', 'YAAKESE', 'NOT APPLICABLE', 'N/A', 'WESTERN NORTH', 'N/A', 'NOT ISSUED', 'N/A'),
(157, 'GIS/DDS/PC/350', 'Monitor', 'DADIESO', 'NOT APPLICABLE', 'N/A', 'WESTERN NORTH', 'N/A', 'NOT ISSUED', 'N/A'),
(158, 'GIS/BBN/PC/351', 'Monitor', 'BIBIANI', 'NOT APPLICABLE', 'N/A', 'WESTERN NORTH', 'N/A', 'NOT ISSUED', 'N/A'),
(159, 'GIS/BBN/PC/352', 'Monitor', 'BIBIANI', 'NOT APPLICABLE', 'N/A', 'WESTERN NORTH', 'N/A', 'NOT ISSUED', 'N/A'),
(160, 'GIS/DDS/PC/353', 'Monitor', 'DADIESO', 'NOT APPLICABLE', 'N/A', 'WESTERN NORTH', 'N/A', 'NOT ISSUED', 'N/A'),
(161, 'GIS/BLE/PC/354', 'Monitor', 'BOLE', 'NOT APPLICABLE', 'N/A', 'SAVANNA REGION', 'N/A', 'NOT ISSUED', 'N/A'),
(162, 'GIS/BCC/PC/355', 'Monitor', 'BOLECHACHE', 'NOT APPLICABLE', 'N/A', 'SAVANNA REGION', 'N/A', 'NOT ISSUED', 'N/A'),
(163, 'GIS/DMG/PC/356', 'Monitor', 'DAMANGO', 'NOT APPLICABLE', 'N/A', 'SAVANNA REGION', 'N/A', 'NOT ISSUED', 'N/A'),
(164, 'GIS/DMG/PC/357', 'Monitor', 'DAMANGO', 'NOT APPLICABLE', 'N/A', 'SAVANNA REGION', 'N/A', 'NOT ISSUED', 'N/A'),
(165, 'GIS/BLE/PC/358', 'Monitor', 'BOLE', 'NOT APPLICABLE', 'N/A', 'SAVANNA REGION', 'N/A', 'NOT ISSUED', 'N/A'),
(172, 'GIS/ELU/PRT/21/01', 'Printer(Big)', 'ELUBO', 'N/A', 'HP LASERJET PRO MFP M227FDW', 'WESTERN REGION', 'VNH4G11175', 'Not Issued', 'from spanish government.'),
(173, 'GIS/KBK/PRT/21/02', 'Printer(Big)', 'KOFIBADUKROM', 'N/A', 'HP LASERJET PRO MFP M227FDW', 'BONO REGION', 'VNH4G11176', 'Not Issued', 'from spanish government.'),
(174, 'GIS/ATU/PRT/21/03', 'Printer(Big)', 'ATUNA', 'N/A', 'HP LASERJET PRO MFP M227FDW', 'BONO REGION', 'VNH4910831', 'Not Issued', 'from spanish government.'),
(175, 'GIS/SSB/PRT/21/04', 'Printer(Big)', 'SABOBA', 'N/A', 'HP LASERJET PRO MFP M227FDW', 'NORTHERN REGION', 'VNH4910953', 'Not Issued', 'from spanish government.'),
(176, 'GIS/BKM/PRT/21/05', 'Printer(Big)', 'BAWKU MISSIGA', 'N/A', 'HP LASERJET PRO MFP M227FDW', 'UPPER EAST REGION', 'VNH4910946', 'Not Issued', 'from spanish government.'),
(177, 'GIS/PUL/PRT/21/06', 'Printer(Big)', 'PULIMAKOM', 'N/A', 'HP LASERJET PRO MFP M227FDW', 'UPPER EAST REGION', 'VNH4G11169', 'Not Issued', 'from spanish government.'),
(178, 'GIS/BGL/PRT/21/07', 'Printer(Big)', 'BAGLO', 'N/A', 'HP LASERJET PRO MFP M227FDW', 'OTI REGION', 'VNH4910919', 'Not Issued', 'from spanish government.'),
(179, 'GIS/BAT/PRT/21/08', 'Printer(Big)', 'BATUME JUNCTION', 'N/A', 'HP LASERJET PRO MFP M227FDW', 'VOLTA REGION', 'VNH4G11167', 'Not Issued', 'from spanish government.'),
(180, 'GIS/HFA/PRT/21/09', '4in1 Printer', 'HALF-ASSINI', 'N/A', 'HP', 'WESTERN REGION', 'E75406J9N258977', 'Not Issued', 'from spanish government.'),
(181, 'GIS/SPA/PRT/21/10', '4in1 Printer', 'SAMPA', 'N/A', 'HP ', 'BONO REGION', 'E75406J9N258982', 'Not Issued', 'from spanish government.'),
(182, 'GIS/BKG/PRT/21/11', '4in1 Printer', 'BUNKPURUGU', 'N/A', 'HP', 'NORTH EAST REGION', 'E75406J9N258999', 'Not Issued', 'from spanish government.'),
(183, 'GIS/WON/PRT/21/12', '4 in 1 printer', 'WONJUGA', 'N/A', 'HP', 'NORTH EAST REGION', 'E75406J9N258928', 'Not Issued', 'from spanish government.'),
(184, 'GIS/TJS/PRT/21/13', '4 in 1 printer', 'TINJASE', 'N/A', 'HP', 'OTI REGION', 'E75406J9N258979', 'Not Issued', 'from spanish government.'),
(185, 'GIS/AKA/PRT/21/14', '4 in 1 printer', 'AKANU', 'N/A', 'HP', 'VOLTA REGION', 'E75406J9N258976', 'Not Issued', 'from spanish government.'),
(186, 'GIS/AGT/PRT/21/15', '4 in 1 printer', 'AGORTIME-AFEGAME', 'N/A', 'HP', 'VOLTA REGION', 'E75406J9N258981', 'Not Issued', 'from spanish government.'),
(187, 'GIS/HQ/IPSE/PRT/21/178', 'Printer(Big)', 'HQ', 'IPSE', 'HP', 'GREATER ACCRA', 'CNDKN7S8ZB', 'Not Issued', 'N/A.'),
(188, 'GIS/SPA/PC/21/351', '3in1 Desktop Computer', 'SAMPA', 'N/A', 'hp-all in one', 'BONO REGION', '8CG94189R4', 'Not Issued', 'from spanish government.'),
(189, 'GIS/KBK/PC/21/352', '3in1 Desktop Computer', 'KOFIBADUKROM', 'N/A', 'hp-all in one', 'BONO REGION', ' 8CG94189QW', 'Not Issued', 'from spanish government.'),
(190, ' GIS/ATU/PC/21/353', '3in1 Desktop Computer', 'ATUNA', 'N/A', 'hp-all in one', 'BONO REGION', '8CG94189R9', 'Not Issued', 'from spanish government.'),
(191, 'GIS/KSK/PC/21/354', '3in1 Desktop Computer', 'kwameseikrom', 'N/A', 'hp-all in one', 'BONO REGION', '8CG94189RB', 'Not Issued', 'from spanish government.'),
(192, 'GIS/NKT/PC/21/355', '3in1 Desktop Computer', 'NKRANKWANTA', 'N/A', 'hp-all in one', 'BONO REGION', '8CG94189R6', 'Not Issued', 'from spanish government.'),
(193, 'GIS/GON/PC/21/356', '3in1 Desktop Computer', 'GONOKROM', 'N/A', 'hp-all in one', 'BONO REGION', '8CG94189RK', 'Not Issued', 'from spanish government.'),
(194, ' GIS/BKG/PC/21/340', '3in1 Desktop Computer', 'BUNKPURUGU ', 'N/A', 'hp-all in one', 'north-east REGION', '8CG94189QY', 'Not Issued', 'from spanish government.'),
(195, 'GIS/WON/PC/21/357', '3in1 Desktop Computer', 'WONJUGA', 'N/A', 'hp-all in one', 'north-east REGION', '8CG94189QK ', 'Not Issued', 'from spanish government.'),
(196, 'GIS/TAT/PC/21/358', '3in1 Desktop Computer', 'TATALE ', 'N/A', 'hp-all in one', 'northern REGION', '8CG94189RD ', 'Not Issued', 'from spanish government.'),
(197, 'GIS/TJS/PC/21/343', '3in1 Desktop Computer', 'TINJASE', 'N/A', 'hp-all in one', 'oti REGION', '8CG94189QT', 'Not Issued', 'from spanish government.'),
(198, 'GIS/BGL/PC/21/366', '3in1 Desktop Computer', 'BAGLO ', 'N/A', 'hp-all in one', 'oti REGION', '8CN03701Q6', 'Not Issued', 'from spanish government.'),
(199, ' GIS/CHA/PC/21/347', '3in1 Desktop Computer', 'CHACHA KABLA', 'N/A', 'hp-all in one', 'savanna REGION', '8CG94189R5 ', 'Not Issued', 'from spanish government.'),
(200, 'GIS/ZEB/PC/21/341', '3in1 Desktop Computer', 'Zebilla ', 'N/A', 'hp-all in one', 'upper east REGION', '8CG94189QP', 'Not Issued', 'from spanish government.'),
(201, 'GIS/PUL/PC/21/342', '3in1 Desktop Computer', 'PULIMAKOM', 'N/A', 'hp-all in one', 'upper east REGION', '8CG94189QS', 'Not Issued', 'from spanish government.'),
(202, 'GIS/BKM/PC/21/359', '3in1 Desktop Computer', 'BOKU-MISSIGA', 'N/A', 'hp-all in one', 'upper east REGION', '8CN03701QF ', 'Not Issued', 'from spanish government.'),
(203, 'GIS/MOG/PC/21/360', '3in1 Desktop Computer', 'MOGNORI', 'N/A', 'hp-all in one', 'upper east REGION', '8CN03701Q3', 'Not Issued', 'from spanish government.'),
(204, 'GIS/KGG/PC/21/361', '3in1 Desktop Computer', 'KULUGUNU', 'N/A', 'hp-all in one', 'upper east REGION', '8CN03701PB ', 'Not Issued', 'from spanish government.'),
(205, 'GIS/PAGA/PC/21/362', '3in1 Desktop Computer', 'PAGA', 'N/A', 'hp-all in one', 'upper east REGION', '8CN03701R2 ', 'Not Issued', 'from spanish government.'),
(206, 'GIS/NMO/PC/21/363', '3in1 Desktop Computer', 'NAMOO', 'N/A', 'hp-all in one', 'upper east REGION', '8CN03701QM', 'Not Issued', 'from spanish government.'),
(207, 'GIS/TUM/PC/21/365 ', '3in1 Desktop Computer', 'TUMU ', 'N/A', 'hp-all in one', 'upper west REGION', '8CN03701PQ ', 'Not Issued', 'from spanish government.'),
(208, 'GIS/HML/PC/21/364 ', '3in1 Desktop Computer', 'HAMILA ', 'N/A', 'hp-all in one', 'upper west REGION', '8CN03701QJ ', 'Not Issued', 'from spanish government.'),
(209, 'GIS/BAT/PC/21/344  ', '3in1 Desktop Computer', 'BATUME JUNCTION', 'N/A', 'hp-all in one', 'VOLTA REGION', '8CG94189RT ', 'Not Issued', 'from spanish government.'),
(210, 'GIS/HON/PC/21/345', '3in1 Desktop Computer', 'HONUTA ', 'N/A', 'hp-all in one', 'VOLTA REGION', '8CG94189QV ', 'Not Issued', 'from spanish government.'),
(211, 'GIS/ASI/PC/21/346', '3in1 Desktop Computer', 'ASIKUMA ', 'N/A', 'hp-all in one', 'VOLTA REGION', '8CG94189QR', 'Not Issued', 'from spanish government.'),
(212, 'GIS/DAD/PC/21/348', '3in1 Desktop Computer', 'DADIESO', 'N/A', 'hp-all in one', 'WESTERN NORTH REGION', '8CG94189R3', 'Not Issued', 'from spanish government.'),
(213, 'GIS/OKK/PC/21/349', '3in1 Desktop Computer', 'OSSEI KOJOKROM', 'N/A', 'hp-all in one', 'WESTERN NORTH REGION', '8CG94189RG', 'Not Issued', 'from spanish government.'),
(214, ' GIS/HFA/PC/21/350', '3in1 Desktop Computer', 'HALF ASSIN', 'N/A', 'hp-all in one', 'WESTERN  REGION', '8CG94189QJ ', 'Not Issued', 'from spanish government.');

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

--
-- Dumping data for table `releasenote`
--

INSERT INTO `releasenote` (`userid`, `fstation`, `rstation`, `equip`, `date`, `qty`, `snum`, `model`) VALUES
(240, '1', '1', '1', '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `stuff`
--

CREATE TABLE `stuff` (
  `userid` int(11) NOT NULL,
  `stname` varchar(200) NOT NULL,
  `cnumber` varchar(200) NOT NULL,
  `depart` varchar(200) NOT NULL,
  `rank` varchar(200) NOT NULL,
  `bimg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stuff`
--

INSERT INTO `stuff` (`userid`, `stname`, `cnumber`, `depart`, `rank`, `bimg`) VALUES
(243, 'Nana Addo', '0245037391', 'president', 'Chief commander', '../boat_image/image_2021-06-11-21-05-15_60c3b3eb4ef97.jpg'),
(244, 'John Mahama', '0245037391', 'ex president', 'ndc', '../boat_image/image_2021-06-13-19-58-07_60c6472fae825.jpg');

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
(215, '', '', 2),
(216, '', '', 2),
(219, '', '', 2),
(220, '', '', 2),
(221, '', '', 2),
(222, '', '', 2),
(223, '', '', 2),
(224, '', '', 2),
(225, '', '', 2),
(226, '', '', 2),
(227, '', '', 2),
(229, '', '', 2),
(230, '', '', 2),
(231, '', '', 2),
(232, '', '', 2),
(233, '', '', 2),
(234, '', '', 2),
(235, '', '', 2),
(240, '', '', 2),
(243, '', '', 2),
(244, '', '', 2);

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
-- Indexes for table `stuff`
--
ALTER TABLE `stuff`
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
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT for table `releasenote`
--
ALTER TABLE `releasenote`
  MODIFY `userid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=242;

--
-- AUTO_INCREMENT for table `stuff`
--
ALTER TABLE `stuff`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=245;

--
-- AUTO_INCREMENT for table `tblfiles`
--
ALTER TABLE `tblfiles`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
