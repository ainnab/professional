-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2022 at 06:42 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ilmuplus`
--

-- --------------------------------------------------------

--
-- Table structure for table `program_diploma`
--

CREATE TABLE `program_diploma` (
  `pg_id` int(11) NOT NULL,
  `mode` varchar(100) NOT NULL,
  `pg_code` varchar(50) DEFAULT NULL,
  `inst_name` varchar(100) NOT NULL,
  `pg_name` varchar(100) DEFAULT NULL,
  `keyin_by` varchar(50) DEFAULT NULL,
  `keyin_date` datetime DEFAULT NULL,
  `file` varchar(100) NOT NULL,
  `common_module` varchar(100) NOT NULL,
  `core_module` varchar(100) NOT NULL,
  `adsName` varchar(100) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `regDate` date DEFAULT NULL,
  `learningCentre` varchar(200) NOT NULL,
  `Specialization` varchar(200) NOT NULL,
  `certificate` varchar(100) NOT NULL,
  `picDip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `program_diploma`
--

INSERT INTO `program_diploma` (`pg_id`, `mode`, `pg_code`, `inst_name`, `pg_name`, `keyin_by`, `keyin_date`, `file`, `common_module`, `core_module`, `adsName`, `duration`, `regDate`, `learningCentre`, `Specialization`, `certificate`, `picDip`) VALUES
(5, 'DIP', 'DPPPD', 'IUTC', 'Diploma Profesional Pengurusan Pemasaran Digital', 'admin', '2022-04-13 09:28:27', '', 'Module 1 : Principles of,Module 2 : Business Communication  Management', 'Module 3 : Digital Marketing Strategy and Planning,Module 4 : Website Building and Optimization', 'july 2022', '1 YEAR 6 MONTHS (18 MONTHS)', '2022-08-31', 'WARISAN AKADEMI KUALA LUMPUR', 'DIGITAL MARKETING', 'Profesional Diploma', ''),
(6, 'MASTER', 'METPRB', 'IUTC', 'Master Eksekutif Teknologi Pintar Rantaian Bekalan dan Logistik', 'admin', '2022-04-13 09:28:51', '', 'int', '', '', '', NULL, '', '', '', ''),
(7, 'MASTER', 'MEPSMI', 'IUTC', 'Master Eksekutif Teknologi Pintar Rantaian Bekalan dan Logistik', NULL, '2022-05-30 16:46:51', '', '', '', '', '', NULL, '', '', '', ''),
(8, 'MASTER', 'MEPP', 'IUTC', 'Master Eksekutif Pengurusan Projek', NULL, '2022-05-30 16:46:51', '', '', '', '', '', NULL, '', '', '', ''),
(9, 'MASTER', 'MEPP(PO)', 'IUTC', 'Master Eksekutif Pentadbiran Perniagaan (Pengurusan Operasi)', NULL, '2022-05-30 16:47:10', '', '', '', '', '', NULL, '', '', '', ''),
(16, 'DIP', 'DI', 'UMPA', 'INFORMATION TECHNOLOGY', NULL, '2022-06-18 00:00:00', '', '', '', 'OCT 2022', '1 YEAR 6 MONTHS', '2022-08-31', 'WARISAN AKADEMI PENDIDIKAN (SEREMBAN)', 'GENERAL MANAGEMENT', 'PROFESSIONAL DIPLOMA', ''),
(19, 'DIP', 'DPK', 'UMPA', 'DIPLOMA PENGURUSAN KORPORAT', NULL, '2022-06-20 00:00:00', '', '', '', 'JULY 2023', '1 YEAR 6 MONTHS', '2022-08-31', 'WARISAN AKADEMI PENDIDIKAN (SEREMBAN)', 'GENERAL MANAGEMENT', 'PROFESSIONAL DIPLOMA', ''),
(20, 'BACHELOR', 'BPK', 'IUTC', 'BACHELOR PENGURUSAN KORPORAT', NULL, '2022-06-21 00:00:00', '', '', '', 'DECEMBER 2023', '1 YEAR 8 MONTHS', '2022-07-31', 'WARISAN AKADEMI PENDIDIKAN (KUALA LOMPO)', 'SYSTEM MANAGEMENT', 'PROFESSIONAL DIPLOMA', ''),
(21, 'BACHELOR', 'DPK', 'UMPA', 'DIPLOMA PENGURUSAN KORPORAT', NULL, '2022-06-19 00:00:00', '', '', '', 'JANUARY 2023', '1 YEAR 6 MONTHS', '2022-08-31', 'WARISAN AKADEMI PENDIDIKAN (KUALA LOMPO)', 'SYSTEM MANAGEMENT', 'EXECUTIVE BACHELOR', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `program_diploma`
--
ALTER TABLE `program_diploma`
  ADD PRIMARY KEY (`pg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `program_diploma`
--
ALTER TABLE `program_diploma`
  MODIFY `pg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
