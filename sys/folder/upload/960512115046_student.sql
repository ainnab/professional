-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2022 at 09:16 AM
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
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(10) NOT NULL,
  `stud_name` varchar(80) NOT NULL,
  `stud_ic` varchar(12) NOT NULL,
  `password` varchar(100) NOT NULL,
  `stud_email` varchar(50) NOT NULL,
  `stud_nation` varchar(5) NOT NULL,
  `pob` varchar(5) NOT NULL,
  `gender` varchar(4) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `marital` varchar(4) NOT NULL,
  `stud_race` varchar(4) NOT NULL,
  `stud_religion` varchar(4) NOT NULL,
  `nooku` varchar(14) NOT NULL,
  `okutype` varchar(4) NOT NULL,
  `about` varchar(150) NOT NULL,
  `height` varchar(3) NOT NULL,
  `weight` varchar(3) NOT NULL,
  `role` varchar(10) NOT NULL,
  `app_status` varchar(10) NOT NULL,
  `intake` varchar(20) NOT NULL,
  `date` varchar(10) NOT NULL,
  `app_option` varchar(5) NOT NULL,
  `file` varchar(50) NOT NULL,
  `agent` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `stud_name`, `stud_ic`, `password`, `stud_email`, `stud_nation`, `pob`, `gender`, `dob`, `marital`, `stud_race`, `stud_religion`, `nooku`, `okutype`, `about`, `height`, `weight`, `role`, `app_status`, `intake`, `date`, `app_option`, `file`, `agent`) VALUES
(5, 'ADMIN', '970906335112', '$2y$04$LOMfh/ny0EASlAC8F1uf4Ov2CthfrTBXEJx1vlZ7W79o3xD6B0p7y', 'admin@gmail.com', ' ', ' ', ' ', '', ' ', ' ', ' ', '', ' ', '', '', '', 'admin', '', '', '', '', '', ''),
(27, 'mohd', '951108065573', '$2y$04$Pb8kEChRo.2UF9MVMXUez.13I8BTv0MDxMdJWMX4M1cpM2IXTREby', 'ninjag219@gmail.com', '0', 'MYS01', 'F', '04/26/1997', 'B', '0100', '1', '', 'NULL', ' Test ', '161', '55', 'student', 'Approved', 'sem1 22/23', '28/03/2022', 'on', '', ''),
(29, 'ANEES NABYLA', '970426115444', '$2y$04$cTmKGG4RYWulN4.3v/sgRuB7E6cPT9fkmDeZOdS8tgjas6fonaPCq', 'nabylarosman@gmail.com', '1', 'MYS11', 'F', '1997-04-26', 'J', '0100', '1', '', 'NULL', 'hello', '148', '36', 'student', 'Submitted', 'sem1 22/23', '11/04/2022', '1', '', ''),
(30, 'BELLA', '951108065572', '$2y$04$spmz3kNTABr8otDbL.ghdu7PhvlSNwIuCT7lenaAgQwA3qIYtGnga', 'ainbila811@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', 'student', 'Approved', 'sem1 22/23', '12/04/2022', '0', '', ''),
(31, 'AIN NABILA', '951108065578', '$2y$04$0QE0giLwh5yGmy3mSNkr.eI/hHnGQfmXZX8GbjjNK3BW5fRKQu9J.', 'ainb@gmail.com', '1', 'MYS03', 'F', '1996-05-12', 'B', '0200', '1', '', 'NULL', 'saya cantik', '154', '54', 'student', 'Applied', 'sem1 22/23', '12/04/2022', '0', '', ''),
(33, 'ADMIN', '123456789000', '$2y$04$3I0gZMF9a6iTxKnyBHcwHOjCuUJIK4xwJjiaGVCPQoRXx0DIAsXXK', 'admin123@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', 'admin', '', 'sem1 22/23', '20/04/2022', '0', '', ''),
(34, 'UBAIDILLAH BIN', '980078665576', '$2y$04$SB3/LbIFJJfbVry.hGYhqeBBm/Vk/fhL3wwGFvmt/r382zttWtpo.', 'hazim1765@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', 'inst', 'Applied', 'sem1 22/23', '28/04/2022', '0', '', ''),
(35, 'IUTC', '12345678900', '$2y$04$Vfdaql03LMNUxNv0oJW7iu2r75EaUD5fJEmYiwojyWEYryGv1Jena', 'iutc@gmail.com', '2', 'MYS08', 'F', '2022-05-31', 'K', '0104', 'C', '', 'NULL', '', '123', '121', 'inst', 'Submitted', 'sem1 22/23', '28/04/2022', '0', '', ''),
(39, 'AGENT', '1000', '$2y$04$bv5FfYvsO/yrAVBCuV5qJ.tFnRO1M327pHgWuRUnzzXL9TbTrTiV6', 'AGENT@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', 'inst', 'Applied', 'sem1 22/23', '23/05/2022', '0', '', 'rk1000'),
(42, 'NANA', '941108065572', '$2y$04$D5.6FlhUnG7FRIuVJtGiKu4cIF8ponbWFr4GNm.D/OTwLyhNs/266', 'nana@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', 'student', 'Approved', 'sem1 22/23', '23/05/2022', '0', '', 'rk1000'),
(43, 'NURAIN NABILA', '985560992', '$2y$04$nKSxd6mDNV97FXhH0/gP8eDulJMeGnFU9AUimoheSRA7N3WPErln6', 'nabylaro@gmail.com', 'NULL', 'MYS03', 'F', '2022-06-15', 'J', '0105', '3', '', 'NULL', '', '124', '245', 'student', 'Approved', 'sem1 22/23', '23/05/2022', '0', '', 'rk1000'),
(46, 'NURAIN NABILA', '12345', '$2y$04$oBXt6qdBLruLUZbRHA1zVuMgKOh0xmE34o/m978HcP6dw9Cvu2T6O', 'nabylarosman@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', 'student', 'Applied', 'sem1 22/23', '23/05/2022', '0', '', 'rk1000'),
(50, 'alis', '876654987712', '$2y$10$k8x/yhXpWh4iMDk0a2L6p.RyVesfyrV8x.xSm.R7pGauVp04dTMc6', 'alis@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', 'student', 'Applied', 'batch julai 2022', '2022-05-28', '', '', 'ali'),
(51, 'alis', '876654987712', '$2y$10$3SFLcRaY0fGd8lc2SMvQL.DdsQ0IyYmz0OPQDp9x0PmH7FRkUSWta', 'alis@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', 'student', '', 'batch julai 2022', '2022-05-28', '', '', 'ali'),
(52, 'seonho', '89007657443', '$2y$10$t.UJntRaLwislaKI8/QS6.Tf9IV.ih0K0J1jrVf3TrsxQ2.TByDvq', '', '', '', '', '', '', '', '', '', '', '', '', '', 'student', '', 'batch julai 2022', '2022-05-28', '', '', 'IUTC'),
(53, 'kim_seonho', '980076543321', '$2y$10$ulYVWrC4IrDCMSuAiqBN4uhx1c5UsOrzJl7Z.0dzjwNxWFOv4g3BK', 'seonho@gmail.com', '2', 'MYS08', 'F', '2022-05-31', 'K', '0104', 'C', '', 'NULL', '', '123', '121', 'student', 'Submitted', 'batch julai 2022', '2022-05-28', '1', '', 'IUTC'),
(54, 'hwang', '908876542234', '$2y$10$CPx.3s.mGcN465rFX9VYe.p00fOBAEBv9v.Y1vgb51Vo5fZ7aMaHu', 'hwang@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', 'student', 'Register', 'batch julai 2022', '2022-06-06', '', '', 'IUTC'),
(55, 'ADMIN1', '1234', '$2y$04$p0pM7Di1Ki3VTmLUI26LqOfD6Nx5VTTtIYcAEL0ClZaVmn54v1Chq', 'admin1@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', 'admin1', '', '', '07/06/2022', '0', '', ''),
(56, 'ADMIN2', '7890', '$2y$04$KdIt2VfiS55yYWEp/Ng9qORNWWo4w4ou6dVoxqIIKLCTujSlPUfi6', 'admin2@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', 'admin2', '', 'sem1 22/23', '07/06/2022', '0', '', ''),
(57, 'ADMIN3', '1245', '$2y$04$lVZmWfUkiyAn1qTNKhxKieY0QI70hKBU8SoOSPFgrOpWFa64d1KWS', 'admin3@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', 'admin3', '', 'sem1 22/23', '07/06/2022', '0', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
