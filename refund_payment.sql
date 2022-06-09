-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2022 at 03:23 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

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
-- Table structure for table `refund_payment`
--

CREATE TABLE `refund_payment` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `ic_number` varchar(12) NOT NULL,
  `phone_no` varchar(12) NOT NULL,
  `my_course` varchar(150) NOT NULL,
  `receipt_no` varchar(20) NOT NULL,
  `choose_file` varchar(150) NOT NULL,
  `explanation` varchar(150) NOT NULL,
  `date_refund` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `refund_payment`
--

INSERT INTO `refund_payment` (`id`, `name`, `email`, `ic_number`, `phone_no`, `my_course`, `receipt_no`, `choose_file`, `explanation`, `date_refund`) VALUES
(1, 'NURFADHILAH', 'nurfadhilah@umpadvanced.edu.my', 'ic_number', '0179028731', 'AKDP', '2531fds', 'URS FILL IN LAMPIRAN A (progress).xlsx', 'dfasdfs', '0000-00-00'),
(2, 'NURFADHILAH', 'nurfadhilah@umpadvanced.edu.my', 'ic_number', '0179028731', 'TPP', '2531fdssfsdf', 'UAT ILMU (pemilik kursus).docx', 'sfasdfsd', '0000-00-00'),
(3, 'ain', 'ilmu-support@umpadvanced.edu.my', 'ic_number', '0179028621', 'TPP', '2531fdssfsdf', 'UAT ILMU (pengajar).docx', 'dsgfsdagfasd', '0000-00-00'),
(4, 'NURFADHILAH', 'nurfadhilah@umpadvanced.edu.my', 'ic_number', '0179028731', 'AKDP', '2531fds', 'UAT ILMU (penyelaras).docx', 'aasas', '0000-00-00'),
(5, 'NURFADHILAH', 'nurfadhilah@umpadvanced.edu.my', 'ic_number', '0179028731', 'TPP', '2531fdssfsdf', 'UAT ILMU (pengurus).docx', 'asasa', '2022-02-22'),
(6, 'ain', 'nurfadhilah@umpadvanced.edu.my', 'ic_number', '0179028621', 'AKDP', '2531fds', 'UAT ILMU (pelawat).docx', 'dgdf', '2022-02-22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `refund_payment`
--
ALTER TABLE `refund_payment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `refund_payment`
--
ALTER TABLE `refund_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
