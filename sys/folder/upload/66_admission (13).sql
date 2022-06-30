-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2022 at 05:22 AM
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
-- Database: `admission`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic`
--

CREATE TABLE `academic` (
  `id` int(10) NOT NULL,
  `stud_ic` varchar(12) NOT NULL,
  `edu_type` varchar(20) NOT NULL,
  `edu_school` varchar(20) NOT NULL,
  `edu_start` date NOT NULL,
  `edu_end` date NOT NULL,
  `edu_gred` varchar(50) NOT NULL,
  `edu_major` varchar(50) NOT NULL,
  `fileA` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `academic`
--

INSERT INTO `academic` (`id`, `stud_ic`, `edu_type`, `edu_school`, `edu_start`, `edu_end`, `edu_gred`, `edu_major`, `fileA`) VALUES
(9, '951108065573', 'Award', 'ump', '2022-04-15', '2022-04-05', 'f', 'gr', 'MEDICAL CLAIM (7).pdf'),
(10, '970426115444', 'Course', 'ump', '2022-04-08', '2022-04-07', 'dg', 'gr', 'UAT ILMU +.pdf'),
(11, '970426115444', 'IT Skill', 'ump', '2022-04-02', '2022-04-04', 'test', 'gr', 'UAT ILMU +.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `additional_qualification`
--

CREATE TABLE `additional_qualification` (
  `id` int(11) NOT NULL,
  `stud_ic` varchar(12) NOT NULL,
  `subject_code` varchar(5) NOT NULL,
  `grade_code` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `additional_qualification`
--

INSERT INTO `additional_qualification` (`id`, `stud_ic`, `subject_code`, `grade_code`) VALUES
(2, '051007065030', '1103', '1'),
(17, '051007065030', '1249', '5'),
(18, '051007065030', '2205', '8'),
(21, '970906335113', '3755', '2'),
(37, '970906335113', '2280', '4'),
(41, '970906335113', '3528', '6'),
(42, '970906335113', '3529', '5'),
(50, '051007065030', '2621', '4'),
(51, '051007065030', ' ', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `aliran`
--

CREATE TABLE `aliran` (
  `id` int(11) NOT NULL,
  `ALIRAN_CODE` varchar(1) NOT NULL,
  `ALIRAN_NAME` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aliran`
--

INSERT INTO `aliran` (`id`, `ALIRAN_CODE`, `ALIRAN_NAME`) VALUES
(1, 'A', 'SASTERA'),
(2, 'S', 'SAINS');

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `stud_ic` varchar(12) NOT NULL,
  `intake` varchar(10) NOT NULL,
  `first_choice` varchar(20) NOT NULL,
  `firstList` varchar(20) NOT NULL,
  `second_choice` varchar(20) NOT NULL,
  `secList` varchar(20) NOT NULL,
  `third_choice` varchar(20) NOT NULL,
  `thirdList` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`stud_ic`, `intake`, `first_choice`, `firstList`, `second_choice`, `secList`, `third_choice`, `thirdList`) VALUES
('051007065030', 'sem1 22/23', 'FOUNDATION', 'FOUNDATION', 'DRM', 'DRA,DRA,DRM', 'FOUNDATION', 'FOUNDATION'),
('951108065572', 'sem1 22/23', '', '', '', '', '', ''),
('951108065573', 'sem1 22/23', '', '', '', '', '', ''),
('970426115444', 'sem1 22/23', '', '', '', '', '', ''),
('970906335112', '', 'PREDIP', 'PREDIP', 'DIP', 'DRM,DRC,DRK', 'FOUNDATION', 'FOUNDATION'),
('970906335113', 'sem1 22/23', 'FOUNDATION', 'FOUNDATION', 'DRA', '', 'DRK', ''),
('970906335114', 'sem1 22/23', '', '', '', '', '', ''),
('970906335115', 'sem1 22/23', 'FOUNDATION', '', 'DRM', '', 'DRK', ''),
('970906335118', 'sem1 22/23', 'FOUNDATION', '', 'DRM', '', 'DRA', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `stud_ic` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `home` varchar(12) NOT NULL,
  `mailaddress` varchar(150) NOT NULL,
  `postcode` varchar(5) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `stud_ic`, `email`, `phone`, `home`, `mailaddress`, `postcode`, `city`, `state`, `country`) VALUES
(1, '970426115444', 'nabylarosman@gmail.com', '01137448055', '1212', '848-1 JALAN ORKID KAMPUNG BARU\r\nKERTEH', '24300', 'KEMAMAN', 'MYS11', 'Malaysia');

-- --------------------------------------------------------

--
-- Table structure for table `data_ptmk`
--

CREATE TABLE `data_ptmk` (
  `NOKP` varchar(12) NOT NULL,
  `NOKPFIN` varchar(12) DEFAULT NULL,
  `NOKPBP` varchar(12) DEFAULT NULL,
  `NOKPIB` varchar(12) DEFAULT NULL,
  `NAMA` varchar(80) DEFAULT NULL,
  `TRKLAHIR_JPN` varchar(10) DEFAULT NULL,
  `NAMAKPBP_JPN` varchar(80) DEFAULT NULL,
  `NAMAKPIB_JPN` varchar(80) DEFAULT NULL,
  `KAUM_JPN` varchar(4) DEFAULT NULL,
  `KAUMBP_JPN` varchar(4) DEFAULT NULL,
  `KAUMIB_JPN` varchar(4) DEFAULT NULL,
  `JANTINA_JPN` varchar(1) DEFAULT NULL,
  `AGAMA_JPN` varchar(1) DEFAULT NULL,
  `WARGA_JPN` varchar(1) DEFAULT NULL,
  `WARGABP_JPN` varchar(1) DEFAULT NULL,
  `WARGAIB_JPN` varchar(1) DEFAULT NULL,
  `HK_JPN` varchar(1) DEFAULT NULL,
  `NOKPBP_LAHIR` varchar(12) DEFAULT NULL,
  `NAMABP_LAHIR` varchar(80) DEFAULT NULL,
  `WARGABP_LAHIR` varchar(1) DEFAULT NULL,
  `KAUMBP_LAHIR` varchar(4) DEFAULT NULL,
  `AGAMABP_LAHIR` varchar(1) DEFAULT NULL,
  `NOKPIB_LAHIR` varchar(12) DEFAULT NULL,
  `NAMAIB_LAHIR` varchar(80) DEFAULT NULL,
  `WARGAIB_LAHIR` varchar(1) DEFAULT NULL,
  `KAUMIB_LAHIR` varchar(4) DEFAULT NULL,
  `AGAMAIB_LAHIR` varchar(1) DEFAULT NULL,
  `PERTALIANBP` varchar(1) DEFAULT NULL,
  `PERTALIANIB` varchar(1) DEFAULT NULL,
  `KODTARAF` varchar(1) DEFAULT NULL,
  `KODTARAFB4` varchar(1) DEFAULT NULL,
  `KODTARAFTD` varchar(1) DEFAULT NULL,
  `CACAT` varchar(1) DEFAULT NULL,
  `JENCACAT` varchar(1) DEFAULT NULL,
  `JENCACAT2` varchar(1) DEFAULT NULL,
  `CACATDETAIL` varchar(100) DEFAULT NULL,
  `CACATLL` varchar(40) DEFAULT NULL,
  `NOOKU` varchar(14) DEFAULT NULL,
  `NOOKUBP` varchar(14) DEFAULT NULL,
  `NOOKUIB` varchar(14) DEFAULT NULL,
  `KAHWIN` varchar(1) DEFAULT NULL,
  `TMPTLAHIR` varchar(5) DEFAULT NULL,
  `UMUR` varchar(2) DEFAULT NULL,
  `BERAT` varchar(5) DEFAULT NULL,
  `TINGGI` varchar(3) DEFAULT NULL,
  `ALAM1` varchar(40) DEFAULT NULL,
  `ALAM2` varchar(40) DEFAULT NULL,
  `BANDAR` varchar(20) DEFAULT NULL,
  `POSKOD` varchar(5) DEFAULT NULL,
  `NEGERI` varchar(5) DEFAULT NULL,
  `TELBIMBIT` varchar(12) DEFAULT NULL,
  `TELEFON` varchar(12) DEFAULT NULL,
  `TELBIMBITIBP` varchar(12) DEFAULT NULL,
  `EMAIL` varchar(40) DEFAULT NULL,
  `TEMTINGGAL` varchar(1) DEFAULT NULL,
  `PDAPATK` varchar(9) DEFAULT NULL,
  `TANGGUNG` varchar(1) DEFAULT NULL,
  `PAGENSI` varchar(1) DEFAULT NULL,
  `PWPP` varchar(1) DEFAULT NULL,
  `PDATA` varchar(1) DEFAULT NULL,
  `KATAG` varchar(1) DEFAULT NULL,
  `PIL1` varchar(9) DEFAULT NULL,
  `LAY1` varchar(1) DEFAULT NULL,
  `PPIL1` varchar(9) DEFAULT NULL,
  `PIL2` varchar(9) DEFAULT NULL,
  `LAY2` varchar(1) DEFAULT NULL,
  `PPIL2` varchar(9) DEFAULT NULL,
  `PIL3` varchar(9) DEFAULT NULL,
  `LAY3` varchar(1) DEFAULT NULL,
  `PPIL3` varchar(9) DEFAULT NULL,
  `PIL4` varchar(9) DEFAULT NULL,
  `LAY4` varchar(1) DEFAULT NULL,
  `PPIL4` varchar(9) DEFAULT NULL,
  `PIL5` varchar(9) DEFAULT NULL,
  `LAY5` varchar(1) DEFAULT NULL,
  `PPIL5` varchar(9) DEFAULT NULL,
  `PIL6` varchar(9) DEFAULT NULL,
  `LAY6` varchar(1) DEFAULT NULL,
  `PPIL6` varchar(9) DEFAULT NULL,
  `PIL7` varchar(9) DEFAULT NULL,
  `LAY7` varchar(1) DEFAULT NULL,
  `PPIL7` varchar(9) DEFAULT NULL,
  `PIL8` varchar(9) DEFAULT NULL,
  `LAY8` varchar(1) DEFAULT NULL,
  `PPIL8` varchar(9) DEFAULT NULL,
  `PIL9` varchar(9) DEFAULT NULL,
  `LAY9` varchar(1) DEFAULT NULL,
  `PPIL9` varchar(9) DEFAULT NULL,
  `PIL10` varchar(9) DEFAULT NULL,
  `LAY10` varchar(1) DEFAULT NULL,
  `PPIL10` varchar(9) DEFAULT NULL,
  `PIL11` varchar(9) DEFAULT NULL,
  `LAY11` varchar(1) DEFAULT NULL,
  `PPIL11` varchar(9) DEFAULT NULL,
  `PIL12` varchar(9) DEFAULT NULL,
  `LAY12` varchar(1) DEFAULT NULL,
  `PPIL12` varchar(9) DEFAULT NULL,
  `PSTTDUGA1` varchar(9) DEFAULT NULL,
  `PSTTDUGA2` varchar(9) DEFAULT NULL,
  `PSTTDUGA3` varchar(9) DEFAULT NULL,
  `PSTTDUGA4` varchar(9) DEFAULT NULL,
  `AGILIRSPM` varchar(9) DEFAULT NULL,
  `THNSPM` varchar(4) DEFAULT NULL,
  `SBBAKTIF` varchar(1) DEFAULT NULL,
  `IPTA` varchar(2) DEFAULT NULL,
  `PERINGKAT` varchar(1) DEFAULT NULL,
  `JUMPEL` varchar(2) DEFAULT NULL,
  `MPUTUS` varchar(1) DEFAULT NULL,
  `LISABI` varchar(1) DEFAULT NULL,
  `KODSPM1` varchar(4) DEFAULT NULL,
  `GRDSPM1` varchar(1) DEFAULT NULL,
  `KODSPM2` varchar(4) DEFAULT NULL,
  `GRDSPM2` varchar(1) DEFAULT NULL,
  `KODSPM3` varchar(4) DEFAULT NULL,
  `GRDSPM3` varchar(1) DEFAULT NULL,
  `KODSPM4` varchar(4) DEFAULT NULL,
  `GRDSPM4` varchar(1) DEFAULT NULL,
  `KODSPM5` varchar(4) DEFAULT NULL,
  `GRDSPM5` varchar(1) DEFAULT NULL,
  `KODSPM6` varchar(4) DEFAULT NULL,
  `GRDSPM6` varchar(1) DEFAULT NULL,
  `KODSPM7` varchar(4) DEFAULT NULL,
  `GRDSPM7` varchar(1) DEFAULT NULL,
  `KODSPM8` varchar(4) DEFAULT NULL,
  `GRDSPM8` varchar(1) DEFAULT NULL,
  `KODSPM9` varchar(4) DEFAULT NULL,
  `GRDSPM9` varchar(1) DEFAULT NULL,
  `KODSPM10` varchar(4) DEFAULT NULL,
  `GRDSPM10` varchar(1) DEFAULT NULL,
  `KODSPM11` varchar(4) DEFAULT NULL,
  `GRDSPM11` varchar(1) DEFAULT NULL,
  `KODSPM12` varchar(4) DEFAULT NULL,
  `GRDSPM12` varchar(1) DEFAULT NULL,
  `KODSPM13` varchar(4) DEFAULT NULL,
  `GRDSPM13` varchar(1) DEFAULT NULL,
  `KODSPM14` varchar(4) DEFAULT NULL,
  `GRDSPM14` varchar(1) DEFAULT NULL,
  `KODSPM15` varchar(4) DEFAULT NULL,
  `GRDSPM15` varchar(1) DEFAULT NULL,
  `ALIRAN` varchar(1) DEFAULT NULL,
  `MARKSPM` varchar(6) DEFAULT NULL,
  `MAKED1` varchar(2) DEFAULT NULL,
  `MAKED2` varchar(5) DEFAULT NULL,
  `MARKOKO` varchar(5) DEFAULT NULL,
  `JUMAC` varchar(2) DEFAULT NULL,
  `JUMA` varchar(2) DEFAULT NULL,
  `JUMAT` varchar(2) DEFAULT NULL,
  `JUMLAHA` varchar(2) DEFAULT NULL,
  `JUMCR` varchar(2) DEFAULT NULL,
  `GAGALBM` varchar(1) DEFAULT NULL,
  `KUR5KRE` varchar(1) DEFAULT NULL,
  `MATHTAM_BM` varchar(1) DEFAULT NULL,
  `FIZ_MATH` varchar(1) DEFAULT NULL,
  `KIM_BI` varchar(1) DEFAULT NULL,
  `MERIT` varchar(6) DEFAULT NULL,
  `KODKAT` varchar(3) DEFAULT NULL,
  `KODKAT2` varchar(3) DEFAULT NULL,
  `KURJAYA` varchar(9) DEFAULT NULL,
  `KURJAYA2` varchar(9) DEFAULT NULL,
  `KURJAYA3` varchar(9) DEFAULT NULL,
  `KURJAYA4` varchar(9) DEFAULT NULL,
  `MRKAKADEMIK` varchar(5) DEFAULT NULL,
  `MRKMERIT` varchar(6) DEFAULT NULL,
  `SBBXLYK` varchar(2) DEFAULT NULL,
  `RPIL1` varchar(9) DEFAULT NULL,
  `RLAY1` varchar(1) DEFAULT NULL,
  `RPIL2` varchar(9) DEFAULT NULL,
  `RLAY2` varchar(1) DEFAULT NULL,
  `RPIL3` varchar(9) DEFAULT NULL,
  `RLAY3` varchar(1) DEFAULT NULL,
  `RPIL4` varchar(9) DEFAULT NULL,
  `RLAY4` varchar(1) DEFAULT NULL,
  `RJAYA` varchar(5) DEFAULT NULL,
  `JENPJAYA` varchar(1) DEFAULT NULL,
  `ZONTDUGA` varchar(1) DEFAULT NULL,
  `JUMLAHAB` varchar(2) DEFAULT NULL,
  `GAGALSEJ` varchar(1) DEFAULT NULL,
  `KURJAYAPUSAT` varchar(9) DEFAULT NULL,
  `ATLIT_JSUKAN` varchar(30) DEFAULT NULL,
  `ATLIT_JSUKAN2` varchar(30) DEFAULT NULL,
  `ATLIT_PERINGKAT` varchar(30) DEFAULT NULL,
  `ATLIT_KEJOHANAN` varchar(30) DEFAULT NULL,
  `EK_PDPPGK` varchar(7) DEFAULT NULL,
  `EK_SMISKIN` varchar(1) DEFAULT NULL,
  `JKM_NOOKU` varchar(14) DEFAULT NULL,
  `JKM_KATCACAT` varchar(2) DEFAULT NULL,
  `EK_BTANGGUNG` varchar(2) DEFAULT NULL,
  `EK_JENDIAM` varchar(1) DEFAULT NULL,
  `EK_KEADAANDIAM` varchar(1) DEFAULT NULL,
  `BSH_BTANGGUNG` varchar(2) DEFAULT NULL,
  `BSH_PDPTVERIFY` varchar(15) DEFAULT NULL,
  `IDBSN` varchar(6) DEFAULT NULL,
  `URLVIDEO` varchar(100) DEFAULT NULL,
  `PKHAS` varchar(1) DEFAULT NULL,
  `PONLINE` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_ptmk`
--

INSERT INTO `data_ptmk` (`NOKP`, `NOKPFIN`, `NOKPBP`, `NOKPIB`, `NAMA`, `TRKLAHIR_JPN`, `NAMAKPBP_JPN`, `NAMAKPIB_JPN`, `KAUM_JPN`, `KAUMBP_JPN`, `KAUMIB_JPN`, `JANTINA_JPN`, `AGAMA_JPN`, `WARGA_JPN`, `WARGABP_JPN`, `WARGAIB_JPN`, `HK_JPN`, `NOKPBP_LAHIR`, `NAMABP_LAHIR`, `WARGABP_LAHIR`, `KAUMBP_LAHIR`, `AGAMABP_LAHIR`, `NOKPIB_LAHIR`, `NAMAIB_LAHIR`, `WARGAIB_LAHIR`, `KAUMIB_LAHIR`, `AGAMAIB_LAHIR`, `PERTALIANBP`, `PERTALIANIB`, `KODTARAF`, `KODTARAFB4`, `KODTARAFTD`, `CACAT`, `JENCACAT`, `JENCACAT2`, `CACATDETAIL`, `CACATLL`, `NOOKU`, `NOOKUBP`, `NOOKUIB`, `KAHWIN`, `TMPTLAHIR`, `UMUR`, `BERAT`, `TINGGI`, `ALAM1`, `ALAM2`, `BANDAR`, `POSKOD`, `NEGERI`, `TELBIMBIT`, `TELEFON`, `TELBIMBITIBP`, `EMAIL`, `TEMTINGGAL`, `PDAPATK`, `TANGGUNG`, `PAGENSI`, `PWPP`, `PDATA`, `KATAG`, `PIL1`, `LAY1`, `PPIL1`, `PIL2`, `LAY2`, `PPIL2`, `PIL3`, `LAY3`, `PPIL3`, `PIL4`, `LAY4`, `PPIL4`, `PIL5`, `LAY5`, `PPIL5`, `PIL6`, `LAY6`, `PPIL6`, `PIL7`, `LAY7`, `PPIL7`, `PIL8`, `LAY8`, `PPIL8`, `PIL9`, `LAY9`, `PPIL9`, `PIL10`, `LAY10`, `PPIL10`, `PIL11`, `LAY11`, `PPIL11`, `PIL12`, `LAY12`, `PPIL12`, `PSTTDUGA1`, `PSTTDUGA2`, `PSTTDUGA3`, `PSTTDUGA4`, `AGILIRSPM`, `THNSPM`, `SBBAKTIF`, `IPTA`, `PERINGKAT`, `JUMPEL`, `MPUTUS`, `LISABI`, `KODSPM1`, `GRDSPM1`, `KODSPM2`, `GRDSPM2`, `KODSPM3`, `GRDSPM3`, `KODSPM4`, `GRDSPM4`, `KODSPM5`, `GRDSPM5`, `KODSPM6`, `GRDSPM6`, `KODSPM7`, `GRDSPM7`, `KODSPM8`, `GRDSPM8`, `KODSPM9`, `GRDSPM9`, `KODSPM10`, `GRDSPM10`, `KODSPM11`, `GRDSPM11`, `KODSPM12`, `GRDSPM12`, `KODSPM13`, `GRDSPM13`, `KODSPM14`, `GRDSPM14`, `KODSPM15`, `GRDSPM15`, `ALIRAN`, `MARKSPM`, `MAKED1`, `MAKED2`, `MARKOKO`, `JUMAC`, `JUMA`, `JUMAT`, `JUMLAHA`, `JUMCR`, `GAGALBM`, `KUR5KRE`, `MATHTAM_BM`, `FIZ_MATH`, `KIM_BI`, `MERIT`, `KODKAT`, `KODKAT2`, `KURJAYA`, `KURJAYA2`, `KURJAYA3`, `KURJAYA4`, `MRKAKADEMIK`, `MRKMERIT`, `SBBXLYK`, `RPIL1`, `RLAY1`, `RPIL2`, `RLAY2`, `RPIL3`, `RLAY3`, `RPIL4`, `RLAY4`, `RJAYA`, `JENPJAYA`, `ZONTDUGA`, `JUMLAHAB`, `GAGALSEJ`, `KURJAYAPUSAT`, `ATLIT_JSUKAN`, `ATLIT_JSUKAN2`, `ATLIT_PERINGKAT`, `ATLIT_KEJOHANAN`, `EK_PDPPGK`, `EK_SMISKIN`, `JKM_NOOKU`, `JKM_KATCACAT`, `EK_BTANGGUNG`, `EK_JENDIAM`, `EK_KEADAANDIAM`, `BSH_BTANGGUNG`, `BSH_PDPTVERIFY`, `IDBSN`, `URLVIDEO`, `PKHAS`, `PONLINE`) VALUES
('951108065572', '951108065572', NULL, NULL, '', '08/11/1995', NULL, NULL, '', NULL, NULL, '', '', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N', NULL, NULL, NULL, '', NULL, NULL, '', 'MYS01', '', NULL, NULL, '', '', '', '', '', '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('951108065573', '951108065573', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('970426115444', '970426115444', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('970906335113', '970906335113', '560618065432', '641012065030', 'TESTER2', '06/09/1997', 'PARENT1 TESTER2', 'PARENT2 TESTER2', '0100', '0100', '0100', 'M', '1', '1', '1', '1', NULL, '560618065432', 'PARENT1 TESTER2', '1', '0100', '1', '641012065030', 'PARENT2 TESTER2', '1', '0100', '1', '0', '2', NULL, NULL, NULL, NULL, 'G', NULL, NULL, NULL, '010159', '010156', '010156', 'K', 'MYS01', '25', NULL, NULL, 'DUMMY ', 'DUMMY ', 'KUALA ROMPIN', '26820', 'MYS06', '0129003948', '01901177', '0129003948', 'dummy1@gmail.com', NULL, '2', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'b001', '2020', NULL, NULL, NULL, NULL, NULL, NULL, '1103', '0', '1119', '2', '1149', '3', '1149', '5', '1511', '7', '1225', '8', '8201', '0', '3729', '1', '2205', '3', '2215', '2', '2611', '5', '2280', '7', '2361', '8', '2621', '9', '2215', 'X', 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('970906335114', '970906335114', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('970906335115', '970906335115', '560618065432', '641012065030', 'TESTER4', '06/09/1997', 'PARENT1', 'PARENT2', '0100', '0100', '0100', 'F', '1', '1', '1', '1', NULL, '560618065432', 'PARENT1', '1', '0100', '1', '641012065030', 'PARENT2', '1', '0100', '1', '0', '2', NULL, NULL, NULL, NULL, 'C', NULL, NULL, NULL, '010159', '010156', '010156', 'B', 'MYS06', '25', NULL, NULL, 'BLOK 123', 'LORONG DUMMY', 'KUALA ROMPIN', '26820', 'MYS06', '0189011707', '01901177', '0189011707', 'dummy4@gmail.com', NULL, '3', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'b001', '2020', NULL, NULL, NULL, NULL, NULL, NULL, '1103', '0', '1119', '0', '1149', '0', '1149', '0', '1511', '0', '1225', '0', '3729', '0', '1511', '0', '2205', '0', '2215', '0', '2280', '0', '2361', '0', '2361', '0', '2621', '0', '3472', '0', 'S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('970906335118', '970906335118', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `id` int(11) NOT NULL,
  `stud_ic` varchar(12) NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `fileDoc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`id`, `stud_ic`, `file_name`, `fileDoc`) VALUES
(44, '951108065573', 'Pengesahan Majikan', 'MEDICAL CLAIM (7).pdf'),
(46, '951108065573', 'Salinan SPM/O-Level/Setaraf', 'MEDICAL CLAIM (7).pdf'),
(48, '951108065573', 'salinan spm julai (jika berkaitan)', 'MEDICAL CLAIM (7).pdf'),
(49, '951108065573', 'Gambar Berukuran Passport', 'MEDICAL CLAIM (7).pdf'),
(50, '970426115444', 'Salinan SPM/O-Level/Setaraf', 'UAT ILMU +.pdf'),
(51, '970426115444', 'Pengesahan Majikan', 'UAT ILMU +.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `document_type`
--

CREATE TABLE `document_type` (
  `id` int(4) NOT NULL,
  `document_name` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `document_type`
--

INSERT INTO `document_type` (`id`, `document_name`) VALUES
(1, 'Salinan Kad Pengenalan/Passport'),
(2, 'Salinan SPM/O-Level/Setaraf'),
(3, 'Salinan SPM Julai (Jika berkaitan)'),
(4, 'Gambar Berukuran Passport'),
(5, 'Pengesahan Majikan'),
(6, 'KWSP'),
(7, 'Dokumen Sokongan');

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `gender_id` int(11) NOT NULL,
  `gender_code` varchar(20) DEFAULT NULL,
  `gender_name` varchar(100) DEFAULT NULL,
  `keyin_by` varchar(50) DEFAULT NULL,
  `keyin_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`gender_id`, `gender_code`, `gender_name`, `keyin_by`, `keyin_date`) VALUES
(1, 'F', 'FEMALE', '', '0000-00-00 00:00:00'),
(2, 'M', 'MALE', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `guardian_relations`
--

CREATE TABLE `guardian_relations` (
  `id` int(11) NOT NULL,
  `GUARD_CODE` varchar(1) NOT NULL,
  `GUARD_NAME` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guardian_relations`
--

INSERT INTO `guardian_relations` (`id`, `GUARD_CODE`, `GUARD_NAME`) VALUES
(1, '0', 'BAPA KANDUNG'),
(2, '1', 'BAPA TIRI/ ANGKAT'),
(3, '2', 'IBU KANDUNG'),
(4, '3', 'IBU TIRI/ ANGKAT'),
(5, '4', 'PENJAGA  / AHLI KELUARGA TERDEKAT');

-- --------------------------------------------------------

--
-- Table structure for table `household`
--

CREATE TABLE `household` (
  `household_id` int(11) NOT NULL,
  `household_code` varchar(20) DEFAULT NULL,
  `household_name` varchar(100) DEFAULT NULL,
  `keyin_by` varchar(50) DEFAULT NULL,
  `keyin_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `household`
--

INSERT INTO `household` (`household_id`, `household_code`, `household_name`, `keyin_by`, `keyin_date`) VALUES
(1, '0', 'None', NULL, NULL),
(2, '1', '1', NULL, NULL),
(3, '2', '2', NULL, NULL),
(4, '3', '3', NULL, NULL),
(5, '4', '4', NULL, NULL),
(6, '5', '5', NULL, NULL),
(7, '6', '6', NULL, NULL),
(8, '7', '7', NULL, NULL),
(9, '8', '8', NULL, NULL),
(10, '9', 'More than 9', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `household_income`
--

CREATE TABLE `household_income` (
  `income_id` int(11) NOT NULL,
  `income_code` varchar(20) DEFAULT NULL,
  `income_name` varchar(100) DEFAULT NULL,
  `keyin_by` varchar(50) DEFAULT NULL,
  `keyin_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `household_income`
--

INSERT INTO `household_income` (`income_id`, `income_code`, `income_name`, `keyin_by`, `keyin_date`) VALUES
(1, '0', 'NO INCOME', '', '0000-00-00 00:00:00'),
(2, '1', 'RM1-RM500', '', '0000-00-00 00:00:00'),
(3, '2', 'RM501-RM1000', '', '0000-00-00 00:00:00'),
(4, '3', 'RM1001-RM2000', '', '0000-00-00 00:00:00'),
(5, '4', 'RM2001-RM3000', '', '0000-00-00 00:00:00'),
(6, '5', 'RM3001-RM4000', '', '0000-00-00 00:00:00'),
(7, '6', 'RM4001-RM5000', '', '0000-00-00 00:00:00'),
(8, '7', 'RM5001-RM7500', '', '0000-00-00 00:00:00'),
(9, '8', 'RM7501-RM10000', '', '0000-00-00 00:00:00'),
(10, '9', 'RM10001 AND ABOVE', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `institution`
--

CREATE TABLE `institution` (
  `id` int(2) NOT NULL,
  `inst_code` varchar(2) NOT NULL,
  `inst_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `institution`
--

INSERT INTO `institution` (`id`, `inst_code`, `inst_name`) VALUES
(1, '01', 'UM'),
(2, '02', 'USM'),
(3, '03', 'UKM'),
(4, '04', 'UPM'),
(5, '05', 'UTM'),
(6, '06', 'UIAM'),
(7, '07', 'UUM'),
(8, '08', 'UNIMAS'),
(9, '09', 'UMS'),
(10, '10', 'UPSI'),
(11, '11', 'UITM'),
(12, '12', 'UMT'),
(13, '13', 'UTHM'),
(14, '14', 'USIM'),
(15, '15', 'UTeM'),
(16, '16', 'UMP'),
(17, '17', 'UniMAP'),
(18, '18', 'UniSZA'),
(19, '19', 'UMK'),
(20, '20', 'UPNM'),
(21, '21', 'POLITEKNIK'),
(22, '30', 'POLITEKNIK SULTAN HAJI AHMAD SHAH, KUANTAN, PAHANG'),
(23, '31', 'POLITEKNIK SULTAN ABDUL HALIM MU\'ADZAM SHAH, JITRA, KEDAH'),
(24, '32', 'POLITEKNIK KOTA BHARU, KETEREH, KELANTAN'),
(25, '33', 'POLITEKNIK KUCHING, MATANG, SARAWAK'),
(26, '34', 'POLITEKNIK PORT DICKSON, TELUK KEMANG, NEGERI SEMBILAN'),
(27, '35', 'POLITEKNIK KOTA KINABALU, MENGGATAL, SABAH'),
(28, '36', 'POLITEKNIK SEBERANG PERAI, PERMATANG PAUH, PULAU PINANG'),
(29, '37', 'POLITEKNIK MELAKA, MALIM, MELAKA'),
(30, '38', 'POLITEKNIK KUALA TERENGGANU, TERENGGANU'),
(31, '39', 'POLITEKNIK SULTAN MIZAN ZAINAL ABIDIN, DUNGUN, TERENGGANU'),
(32, '40', 'POLITEKNIK MERLIMAU, MELAKA'),
(33, '41', 'POLITEKNIK SULTAN AZLAN SHAH, BEHRANG, PERAK'),
(34, '42', 'POLITEKNIK TUANKU SULTANAH BAHIYAH, KULIM, KEDAH'),
(35, '43', 'POLITEKNIK SULTAN IDRIS SHAH, SABAK BERNAM, SELANGOR'),
(36, '44', 'POLITEKNIK MUADZAM SHAH, PAHANG'),
(37, '45', 'POLITEKNIK MUKAH, SARAWAK'),
(38, '46', 'POLITEKNIK BALIK PULAU, PULAU PINANG'),
(39, '47', 'POLITEKNIK NILAI, BANDAR ENSTEK, NEGERI SEMBILAN'),
(40, '48', 'POLITEKNIK BANTING, SELANGOR'),
(41, '49', 'POLITEKNIK MERSING, JOHOR'),
(42, '50', 'POLITEKNIK HULU TERENGGANU, KUALA BERANG, TERENGGANU'),
(43, '51', 'POLITEKNIK SANDAKAN, SABAH'),
(44, '52', 'POLITEKNIK METRO KUALA LUMPUR'),
(45, '53', 'POLITEKNIK METRO KUANTAN, PAHANG'),
(46, '54', 'POLITEKNIK METRO JOHOR BAHRU, JOHOR'),
(47, '55', 'POLITEKNIK TUANKU SYED SIRAJUDDIN, ARAU, PERLIS'),
(48, '56', 'POLITEKNIK JELI, KELANTAN'),
(49, '57', 'POLITEKNIK METRO BETONG, SARAWAK'),
(50, '58', 'POLITEKNIK METRO TASEK GELUGOR, PULAU PINANG'),
(51, '59', 'POLITEKNIK PAGOH, JOHOR'),
(52, '60', 'POLITEKNIK UNGKU OMAR (PUO)'),
(53, '61', 'POLITEKNIK IBRAHIM SULTAN (PIS)'),
(54, '62', 'POLITEKNIK SULTAN SALAHUDDIN ABDUL AZIZ SHAH (PSA)'),
(55, '99', 'LAIN-LAIN INSTITUSI');

-- --------------------------------------------------------

--
-- Table structure for table `marital`
--

CREATE TABLE `marital` (
  `id` int(11) NOT NULL,
  `status_code` varchar(1) NOT NULL,
  `status_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marital`
--

INSERT INTO `marital` (`id`, `status_code`, `status_name`) VALUES
(1, 'B', 'BUJANG'),
(2, 'D', 'DUDA'),
(3, 'J', 'JANDA'),
(4, 'K', 'KAHWIN'),
(5, 'L', 'BALU');

-- --------------------------------------------------------

--
-- Table structure for table `nationality`
--

CREATE TABLE `nationality` (
  `id` int(11) NOT NULL,
  `taraf_code` varchar(1) NOT NULL,
  `taraf_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nationality`
--

INSERT INTO `nationality` (`id`, `taraf_code`, `taraf_name`) VALUES
(1, '0', 'BUKAN WARGANEGARA'),
(2, '1', 'WARGANEGARA'),
(3, '2', 'PEMASTAUTIN TETAP');

-- --------------------------------------------------------

--
-- Table structure for table `oku_type`
--

CREATE TABLE `oku_type` (
  `oku_id` int(11) NOT NULL,
  `oku_code` varchar(20) DEFAULT NULL,
  `oku_name` varchar(100) DEFAULT NULL,
  `keyin_by` varchar(50) DEFAULT NULL,
  `keyin_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oku_type`
--

INSERT INTO `oku_type` (`oku_id`, `oku_code`, `oku_name`, `keyin_by`, `keyin_date`) VALUES
(1, 'B', 'KETIDAKUPAYAAN PENGLIHATAN (BUTA)', '', '0000-00-00 00:00:00'),
(2, 'D', 'KETIDAKUPAYAAN PENDENGARAN (PEKAK GUNA ALAT)', '', '0000-00-00 00:00:00'),
(3, 'R', 'KETIIDAKUPAYAAN PENDENGARAN ( RABUN (TIDAK BERKACA MATA))', '', '0000-00-00 00:00:00'),
(4, 'W', 'KETIDAKUPAYAAN PENGLIHATAN (BUTA WARNA)', '', '0000-00-00 00:00:00'),
(5, 'P', 'KETIDAKUPAYAAN PENDENGARAN (PEKAK)', '', '0000-00-00 00:00:00'),
(6, 'S', 'KETIDAKUPAYAAN PERTUTURAN (BISU)', '', '0000-00-00 00:00:00'),
(7, 'J', 'KETIDAKUPAYAAN FIZIKAL (KERDIL)', '', '0000-00-00 00:00:00'),
(8, 'G', 'KETIDAKUPAYAAN PERTUTURAN (GAGAP)', '', '0000-00-00 00:00:00'),
(9, 'K', 'KETIDAKUPAYAAN FIZIKAL (KAKI)', '', '0000-00-00 00:00:00'),
(10, 'T', 'KETIDAKUPAYAAN FIZIKAL (TANGAN)', '', '0000-00-00 00:00:00'),
(11, 'L', 'KETIDAKUPAYAAN FIZIKAL (LUMPUH)', '', '0000-00-00 00:00:00'),
(12, 'C', 'KETIDAKUPAYAAN FIZIKAL ( LAIN - LAIN)', '', '0000-00-00 00:00:00'),
(13, 'N', 'KETIDAKUPAYAAN PERTUTURAN (SENGAU)', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `stud_ic` varchar(12) NOT NULL,
  `p1_name` varchar(80) NOT NULL,
  `p1_ic` varchar(12) NOT NULL,
  `p1_occupation` varchar(100) NOT NULL,
  `p2_name` varchar(80) NOT NULL,
  `p2_ic` varchar(12) NOT NULL,
  `p2_occupation` varchar(100) NOT NULL,
  `household` varchar(4) NOT NULL,
  `income` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`stud_ic`, `p1_name`, `p1_ic`, `p1_occupation`, `p2_name`, `p2_ic`, `p2_occupation`, `household`, `income`) VALUES
('051007065030', 'PARENT1 TESTER1', '560618065432', '1', 'PARENT2 TESTER2', '641012065030', '1', '2', '3'),
('970426115444', 'rosman', '670719115195', 'Working', 'rozima', '710621115072', 'Working', '4', '   RM 100');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `pg_id` int(11) NOT NULL,
  `pg_code` varchar(50) DEFAULT NULL,
  `pg_name` varchar(100) DEFAULT NULL,
  `keyin_by` varchar(50) DEFAULT NULL,
  `keyin_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`pg_id`, `pg_code`, `pg_name`, `keyin_by`, `keyin_date`) VALUES
(1, 'DIP', 'Diploma', '', '0000-00-00 00:00:00'),
(2, 'PREDIP', 'Pre Diploma', '', '0000-00-00 00:00:00'),
(3, 'FOUNDATION', 'Foundation in Science and Technology', '', '0000-00-00 00:00:00'),
(4, 'A', 'A-Level', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `programselection`
--

CREATE TABLE `programselection` (
  `id` int(10) NOT NULL,
  `stud_ic` varchar(12) NOT NULL,
  `program_name` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `programselection`
--

INSERT INTO `programselection` (`id`, `stud_ic`, `program_name`, `status`) VALUES
(22, '951108065573', 'PROFESSIONAL DIPLOMA IN OIL AND GAS TECHNOLOGY', 'final');

-- --------------------------------------------------------

--
-- Table structure for table `program_degree`
--

CREATE TABLE `program_degree` (
  `id` int(11) NOT NULL,
  `pg_code` varchar(5) NOT NULL,
  `pg_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `program_degree`
--

INSERT INTO `program_degree` (`id`, `pg_code`, `pg_name`) VALUES
(1, 'BMM', 'SARJANA MUDA (KEPUJIAN) KEJURUTERAAN MEKANIKAL'),
(2, 'BAA', 'SARJANA MUDA KEJURUTERAAN (KEPUJIAN) AWAM'),
(3, 'BTE', 'SARJANA MUDA TEKNOLOGI KEJURUTERAAN (ELEKTRIKAL) DENGAN KEPUJIAN'),
(4, 'BTM', 'SARJANA MUDA TEKNOLOGI KEJURUTERAAN (PEMBUATAN) DENGAN KEPUJIAN'),
(5, 'SBPS', 'SARJANA MUDA KESELAMATAN & KESIHATAN PEKERJAAN DENGAN KEPUJIAN'),
(6, 'SBCN', 'SARJANA MUDA SAINS KOMPUTER (SISTEM KOMPUTER & RANGKAIAN) DENGAN KEPUJIAN'),
(7, 'SBEE', 'SARJANA MUDA (KEPUJIAN)  KEJURUTERAAN ELEKTRIK (ELEKTRONIK)');

-- --------------------------------------------------------

--
-- Table structure for table `program_diploma`
--

CREATE TABLE `program_diploma` (
  `id` int(11) NOT NULL,
  `pg_code` varchar(10) DEFAULT NULL,
  `pg_name` varchar(200) DEFAULT NULL,
  `pg_faculty` varchar(200) DEFAULT NULL,
  `pg_structure` varchar(50) DEFAULT NULL,
  `pg_overview` varchar(1000) DEFAULT NULL,
  `pg_duration` varchar(100) DEFAULT NULL,
  `pg_level` varchar(50) DEFAULT NULL,
  `pg_link` varchar(500) DEFAULT NULL,
  `des_careers` varchar(500) DEFAULT NULL,
  `future_careers` varchar(1000) DEFAULT NULL,
  `keyin_date` datetime DEFAULT NULL,
  `keyin_by` varchar(100) DEFAULT NULL,
  `local_gen_entry_req` varchar(1000) DEFAULT NULL,
  `pg_campus` varchar(200) DEFAULT NULL,
  `verify_by` varchar(50) DEFAULT NULL,
  `verify_date` datetime DEFAULT NULL,
  `in_status` varchar(30) DEFAULT NULL,
  `local_spec_entry_req` varchar(1000) DEFAULT NULL,
  `int_gen_entry_req` varchar(1000) DEFAULT NULL,
  `int_spec_entry_req` varchar(1000) DEFAULT NULL,
  `eng_lang_qualify` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `program_diploma`
--

INSERT INTO `program_diploma` (`id`, `pg_code`, `pg_name`, `pg_faculty`, `pg_structure`, `pg_overview`, `pg_duration`, `pg_level`, `pg_link`, `des_careers`, `future_careers`, `keyin_date`, `keyin_by`, `local_gen_entry_req`, `pg_campus`, `verify_by`, `verify_date`, `in_status`, `local_spec_entry_req`, `int_gen_entry_req`, `int_spec_entry_req`, `eng_lang_qualify`) VALUES
(1, 'DRM', 'Diploma in Mechanical Engineering', 'Pusat Diploma dan Asasi', 'PROGRAMME STRUCTURE DMM-.pdf', 'Diploma in Mechanical Engineering is aimed to equip the students with strong theoretical foundation in Mechanical Engineering. In addition; students will be exposed to hands-on projects that will enhance practical skills. Students will also develop strong interpersonal skills through language and softskills courses. At the end of the programme; students will undergo a 6-month industrial training for the real engineering world exposure. ', '6 Semester (2 years)', 'Undergraduate', 'http://umpadvanced.ump.edu.my/programDip.php?program_code=DRM', 'Graduates may develop and grow professional career in specific niche areas as ;', 'Project Engineer|\r\nDesign Engineer|\r\nOperation Engineer|\r\nMechatronic Engineer|\r\nManufacturing Engineer|\r\nRobotic Engineer|\r\nResearch & Development Engineer|\r\nEnergy Engineer|\r\nProcess Plant Engineer|\r\nSales Engineer|\r\nQA Engineer|\r\nProduction Engineer|\r\nMaterial Engineer|\r\nConsultant|\r\nInstrumentation & Control Engineer|\r\nCAD/CAM Engineer|\r\nTechnopreneur', '2021-07-16 11:31:28', 'UAE010086', 'SPM / O-Level and any equivalent|\r\nMinimum of THREE (3) credits  including credits in Bahasa Melayu| \r\nPassed in History (started from 2013)', 'gambang', NULL, NULL, NULL, 'Minimum GRADE C in Mathematics AND|\r\nMinimum GRADE C in any subject Science/ Technical/ Vocational| \r\nPassed in English|\r\nAt least passed (GRADE E) in Additional Mathematics \r\n       (If candidates unfulfilled this requirement must   \r\n        complete Bridging Mathematics Course  in semester 1 \r\n        Diploma)|\r\nCandidates must not color blind and physically fit to perform practical works (requirement for not color blind only for diploma in chemical and diploma in electric and electronic only)', 'O-Level / equivalent|\r\nAt least THREE (3) subjects passed with minimum C GRADE ', 'Minimum C GRADE in Mathematics ; AND Science/ Technical/ Vocational| Passed in English Language Subject|\r\n Candidates must be physically fit to perform practical works', 'A minimum score of 500 in TOEFL ; OR|\r\nA minimum score of Band 5.0 in IELTS ; OR|\r\nA minimum score of Band 3 in MUET|\r\n(Candidates who do not possess the above English Language qualification / equivalent are required to undergo Preparatory Intensive English (PIE) programme)'),
(2, 'DRK', 'Diploma in Chemical Engineering', 'Pusat Diploma dan Asasi', 'PROGRAMME STRUCTURE DKC-.pdf', 'Diploma in Chemical Engineering has been developed to provide students with chemical engineering knowledge and also exposed the students to the aspects of humanities and social sciences. To enhance students understanding of the chemical engineering principles; experimental activities are carried out in dedicated chemical engineering laboratories.', '6 Semester (2 years)', 'Undergraduate', 'http://umpadvanced.ump.edu.my/programDip.php?program_code=DRK', 'Graduates may develop and grow professional career in specific niche areas as ;', 'Chemical Engineer/ Technologist|\r\nTechnician|\r\nConsultant|\r\nPlant Engineer|\r\nProduction Engineer|\r\nResearcher/ Research Assistant|\r\nTechnopreneur/ Manager Lecturer/ Trainer|\r\nR&D Engineer/ Assistant Bioprocess Engineer|\r\nTechnical Executive/ Supervisor Process Engineer|\r\nQuality Assurance Engineer Oil & Gas Technical Executive', '2021-07-16 11:33:05', 'UAE010086', 'SPM / O-Level and any equivalent|\r\nMinimum of THREE (3) credits  including credits in Bahasa Melayu| \r\nPassed in History (started from 2013)', 'gambang', NULL, NULL, NULL, 'Minimum GRADE C in Mathematics AND|\r\nMinimum GRADE C in any subject Science/ Technical/ Vocational| \r\nPassed in English|\r\nAt least passed (GRADE E) in Additional Mathematics (If candidates unfulfilled this requirement must   \r\n        complete Bridging Mathematics Course  in semester 1 \r\n        Diploma)|\r\nCandidates must not color blind and physically fit to perform practical works (requirement for not color blind only for diploma in chemical and diploma in electric and electronic only)', 'O-Level / equivalent|\r\nAt least THREE (3) subjects passed with minimum C GRADE ', 'Minimum C GRADE in Mathematics ; AND Science/ Technical/ Vocational| Passed in English Language Subject| Candidates must be physically fit to perform practical works and candidates are NOT color blind', 'A minimum score of 500 in TOEFL ; OR|\r\nA minimum score of Band 5.0 in IELTS ; OR|\r\nA minimum score of Band 3 in MUET|\r\n(Candidates who do not possess the above English Language qualification / equivalent are required to undergo Preparatory Intensive English (PIE) programme)'),
(3, 'DRA', 'Diploma in Civil Engineering', 'Pusat Diploma dan Asasi', 'PROGRAMME STRUCTURE DAA-.pdf', 'The Diploma in Civil Engineering will provide student with a solid foundation in computing; mathematical; drawing and communication skills and the basics of civil engineering. The students will be equipped with skills to design; develop; manufacture; construct and maintain civil engineering products; systems and services.', '6 Semester (2 years)', 'Undergraduate', 'http://umpadvanced.ump.edu.my/programDip.php?program_code=DRA', 'Graduates may develop and grow professional career in specific niche areas as ;', 'Assistant Civil Engineer|\r\nAssistant Project Manager|\r\nSite Supervisor|\r\nCivil & Structural Clerk-of-Works\r\n', '2021-07-16 11:33:43', 'UAE010086', 'SPM / O-Level and any equivalent|\r\nMinimum of THREE (3) credits  including credits in Bahasa Melayu| \r\nPassed in History (started from 2013)', 'gambang', NULL, NULL, NULL, 'Minimum GRADE C in Mathematics AND|\r\nMinimum GRADE C in any subject Science/ Technical/ Vocational| \r\nPassed in English|\r\nAt least passed (GRADE E) in Additional Mathematics (If candidates unfulfilled this requirement must complete Bridging Mathematics Course  in semester 1 Diploma)|\r\nCandidates must not color blind and physically fit to perform practical works (requirement for not color blind only for diploma in chemical and diploma in electric and electronic only)', 'O-Level / equivalent|\r\nAt least THREE (3) subjects passed with minimum C GRADE ', 'Minimum C GRADE in Mathematics ; AND Science/ Technical/ Vocational| Passed in English Language Subject| Candidates must be physically fit to perform practical works\r\n', 'A minimum score of 500 in TOEFL ; OR|\r\nA minimum score of Band 5.0 in IELTS ; OR|\r\nA minimum score of Band 3 in MUET|\r\n(Candidates who do not possess the above English Language qualification / equivalent are required to undergo Preparatory Intensive English (PIE) programme)'),
(4, 'DRE', 'Diploma in Electrical and Electronic ', 'Pusat Diploma dan Asasi', 'PROGRAMME STRUCTURE DEE-.pdf', 'Diploma in Electrical and Electronics Engineering specializes in industrial electronics engineering technology. Upon graduation; the graduates will be equipped with the various set of skills from problem solver via technical investigation; ready-to-apply hands-on skill and ability to work in a multi-disciplinary team. The graduates are expected to be skilled workers in oil and gas; automotive; manufacturing; building services and maintenance; and electronics industry.', '6 Semester (2 years)', 'Undergraduate', 'http://umpadvanced.ump.edu.my/programDip.php?program_code=DRE', 'Graduates may develop and grow professional career in specific niche areas as ;', 'Powersystems| \r\nConsumer and Industrial Electronics| \r\nManufacturing|\r\nEducation', '2021-07-16 11:34:06', 'UAE010086', 'SPM / O-Level and any equivalent|\r\nMinimum of THREE (3) credits  including credits in Bahasa Melayu| \r\nPassed in History (started from 2013)', 'gambang', NULL, NULL, NULL, 'Minimum GRADE C in Mathematics AND|\r\nMinimum GRADE C in any subject Science/ Technical/ Vocational| \r\nPassed in English|\r\nAt least passed (GRADE E) in Additional Mathematics (If candidates unfulfilled this requirement must complete Bridging Mathematics Course  in semester 1 Diploma)|\r\nCandidates must not color blind and physically fit to perform practical works (requirement for not color blind only for diploma in chemical and diploma in electric and electronic only)', 'O-Level / equivalent|\r\nAt least THREE (3) subjects passed with minimum C GRADE ', 'Minimum C GRADE in Mathematics ; AND Science/ Technical/ Vocational| Passed in English Language Subject| Candidates must be physically fit to perform practical works and candidates are NOT color blind', 'A minimum score of 500 in TOEFL ; OR|\r\nA minimum score of Band 5.0 in IELTS ; OR|\r\nA minimum score of Band 3 in MUET|\r\n(Candidates who do not possess the above English Language qualification / equivalent are required to undergo Preparatory Intensive English (PIE) programme)'),
(5, 'DRC', 'Diploma in Computer Science', 'Pusat Diploma dan Asasi', 'PROGRAMME STRUCTURE DCS-.pdf', 'The Diploma in Computer Science is formulated to equip studentsâ€™ knowledge; technical skills and personal attributes. Functional competencies and technical competencies inculcated to establish graduatesâ€™ qualities to benefit the students; community; and industries. Students will acquire major extensive skills in communication through different platforms and under various assessments. The programme meets industrial needs by incorporating Data Science; Internet Technologies Business Management and Marketing Computing. Undergo empowerment communication competencies; graduates well-suited to develop success professions and draw career pathways.', '6 Semester (2 years)', 'Undergraduate', 'http://umpadvanced.ump.edu.my/programDip.php?program_code=DRC', 'Graduates may develop and grow professional career in specific niche areas as ;', 'Computer Systems Analysts|\r\nInformation Security Analysts|\r\nComputer Support Specialists|\r\nDatabase Administrator|\r\nSoftware Developer|\r\nWeb Developer', '2021-07-16 11:35:26', 'UAE010086', 'SPM / O-Level and any equivalent|\r\nMinimum of THREE (3) credits  including credits in Bahasa Melayu| \r\nPassed in History (started from 2013)', 'gambang', NULL, NULL, NULL, 'Minimum GRADE C in Mathematics AND|\r\nMinimum GRADE C in any subject Science/ Technical/ Vocational| \r\nPassed in English|\r\nAt least passed (GRADE E) in Additional Mathematics (If candidates unfulfilled this requirement must complete Bridging Mathematics Course  in semester 1 Diploma)|\r\nCandidates must not color blind and physically fit to perform practical works (requirement for not color blind only for diploma in chemical and diploma in electric and electronic only)', 'O-Level / equivalent|\r\nAt least THREE (3) subjects passed with minimum C GRADE ', 'Minimum C GRED in Mathematics AND|\r\nAny TWO (2) other subjects| Candidates must be physically fit to perform practical works', 'A minimum score of 500 in TOEFL ; OR|\r\nA minimum score of Band 5.0 in IELTS ; OR|\r\nA minimum score of Band 3 in MUET|\r\n(Candidates who do not possess the above English Language qualification / equivalent are required to undergo Preparatory Intensive English (PIE) programme)'),
(6, 'DRO', 'Diploma in Occupational Safety and Health', 'Pusat Diploma dan Asasi', 'PROGRAMME STRUCTURE DPS-.pdf', 'The Diploma in Safety and Health is formulated to equip students to gain a better understanding on the potential safety and health hazards while broadening their skill set to meet the increasing demands of the OSH industry. Subjects covered will include safety requirements; health regulations; proper use of equipment; safety hazard recognition risk assessment; safety systems and team management skills. Graduates of this programme are highly sought after to meet the talent needs in various manufacturing; construction and heavy industries.', '6 Semester (2 years)', 'Undergraduate', 'http://umpadvanced.ump.edu.my/programDip.php?program_code=DRO', 'Graduates may develop and grow professional career in specific niche areas as ;', 'Safety & Health Officers|\r\nSupervisor/ Executives|\r\nSite Safety Supervisor|\r\nProduction Supervisor|\r\nOSH Investigator', '2021-07-16 11:36:33', 'UAE010086', 'SPM / O-Level and any equivalent|\r\nMinimum of THREE (3) credits  including credits in Bahasa Melayu| \r\nPassed in History (started from 2013)', 'gambang', NULL, NULL, NULL, 'Minimum GRADE C in any ONE (1) Mathematics / Science AND|\r\nMinimum GRADE C in any other subject|\r\nPassed in English|\r\nCandidates must not color blind and physically fit to perform practical works', 'O-Level / equivalent|\r\nAt least THREE (3) subjects passed with minimum C GRADE ', 'Minimum C GRADE in Mathematics ; OR Science/ Physic/ Chemistry/ Biology  : AND|\r\nAny TWO (2) other subjects| Candidates must be physically fit to perform practical works and candidates are NOT color blind', 'A minimum score of 500 in TOEFL ; OR|\r\nA minimum score of Band 5.0 in IELTS ; OR|\r\nA minimum score of Band 3 in MUET|\r\n(Candidates who do not possess the above English Language qualification / equivalent are required to undergo Preparatory Intensive English (PIE) programme)');

-- --------------------------------------------------------

--
-- Table structure for table `pro_qualification_level`
--

CREATE TABLE `pro_qualification_level` (
  `pql_id` int(11) NOT NULL,
  `pql_code` varchar(20) NOT NULL,
  `pql_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pro_qualification_level`
--

INSERT INTO `pro_qualification_level` (`pql_id`, `pql_code`, `pql_name`) VALUES
(1, '1', 'SPM'),
(2, '2', 'STPM'),
(3, '3', 'Peringkat Sijil'),
(4, '4', 'Peringkat Diploma'),
(5, '5', 'Peringkat Diploma Lanjutan'),
(6, '6', 'Peringkat Ijazah Sarjana Muda (Bachelor/Degree)'),
(7, '7', 'Peringkat Ijazah Sarjana (Master)'),
(8, '8', 'Peringkat Ijazah Kedoktoran (PhD)'),
(9, '9', 'Lulusan Luar Negara');

-- --------------------------------------------------------

--
-- Table structure for table `qualification_info`
--

CREATE TABLE `qualification_info` (
  `stud_ic` varchar(12) NOT NULL,
  `level` varchar(12) NOT NULL,
  `ipta` varchar(30) NOT NULL,
  `cgpa` varchar(5) NOT NULL,
  `muet` varchar(1) NOT NULL,
  `spm_number` varchar(10) NOT NULL,
  `spm_year` varchar(4) NOT NULL,
  `spm_aliran` varchar(4) NOT NULL,
  `school_type` varchar(1) NOT NULL,
  `school_name` varchar(30) NOT NULL,
  `kodspm1` varchar(4) NOT NULL,
  `gredspm1` varchar(1) NOT NULL,
  `kodspm2` varchar(4) NOT NULL,
  `gredspm2` varchar(1) NOT NULL,
  `kodspm3` varchar(4) NOT NULL,
  `gredspm3` varchar(1) NOT NULL,
  `kodspm4` varchar(4) NOT NULL,
  `gredspm4` varchar(1) NOT NULL,
  `kodspm5` varchar(4) NOT NULL,
  `gredspm5` varchar(1) NOT NULL,
  `kodspm6` varchar(4) NOT NULL,
  `gredspm6` varchar(1) NOT NULL,
  `kodspm7` varchar(4) NOT NULL,
  `gredspm7` varchar(1) NOT NULL,
  `kodspm8` varchar(4) NOT NULL,
  `gredspm8` varchar(1) NOT NULL,
  `kodspm9` varchar(4) NOT NULL,
  `gredspm9` varchar(1) NOT NULL,
  `kodspm10` varchar(4) NOT NULL,
  `gredspm10` varchar(1) NOT NULL,
  `kodspm11` varchar(4) NOT NULL,
  `gredspm11` varchar(1) NOT NULL,
  `kodspm12` varchar(4) NOT NULL,
  `gredspm12` varchar(1) NOT NULL,
  `kodspm13` varchar(4) NOT NULL,
  `gredspm13` varchar(1) NOT NULL,
  `kodspm14` varchar(4) NOT NULL,
  `gredspm14` varchar(1) NOT NULL,
  `kodspm15` varchar(4) NOT NULL,
  `gredspm15` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `qualification_info`
--

INSERT INTO `qualification_info` (`stud_ic`, `level`, `ipta`, `cgpa`, `muet`, `spm_number`, `spm_year`, `spm_aliran`, `school_type`, `school_name`, `kodspm1`, `gredspm1`, `kodspm2`, `gredspm2`, `kodspm3`, `gredspm3`, `kodspm4`, `gredspm4`, `kodspm5`, `gredspm5`, `kodspm6`, `gredspm6`, `kodspm7`, `gredspm7`, `kodspm8`, `gredspm8`, `kodspm9`, `gredspm9`, `kodspm10`, `gredspm10`, `kodspm11`, `gredspm11`, `kodspm12`, `gredspm12`, `kodspm13`, `gredspm13`, `kodspm14`, `gredspm14`, `kodspm15`, `gredspm15`) VALUES
('051007065030', '4', '15', '2.9', '5', 'b001', '2020', 'S', 'A', 'smk dummy', '1103', '2', '1119', '3', '1149', '3', '1249', '7', '1511', '8', '1225', ' ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('951108065572', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('951108065573', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('970426115444', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('970906335112', ' ', 'univerditi dummy', '2.5', '5', 'b002', '2020', '', ' ', 'smk dummy', '1103', '6', '1119', '5', '1149', '5', '1249', '5', '1511', '6', '1225', ' ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('970906335113', '2', 'univerditi dummy', '2.5', '5', 'b001', '2020', 'A', 'A', 'smk dummy', '1103', '0', '1119', '2', '1149', '3', '1249', '5', '1511', '7', '1225', '8', '8201', '0', '3729', '1', '2205', '3', '2215', '2', '2611', '5', '2280', '7', '2361', '8', '2621', '9', '2215', 'X'),
('970906335114', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('970906335115', '', '', '', '', 'b001', '2020', 'S', 'A', 'SMK DUMMY', '1103', '0', '1119', '0', '1149', '0', '1249', '0', '1511', '0', '1225', '0', '3729', '0', '1511', '0', '2205', '0', '2215', '0', '2280', '0', '2361', '0', '2361', '0', '2621', '0', '3472', '0'),
('970906335118', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `race`
--

CREATE TABLE `race` (
  `race_id` int(11) NOT NULL,
  `race_code` varchar(20) DEFAULT NULL,
  `ptmk_race_code` varchar(4) NOT NULL,
  `race_name` varchar(100) DEFAULT NULL,
  `keyin_by` varchar(50) DEFAULT NULL,
  `keyin_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `race`
--

INSERT INTO `race` (`race_id`, `race_code`, `ptmk_race_code`, `race_name`, `keyin_by`, `keyin_date`) VALUES
(1, 'M', '0100', 'MELAYU', '', '0000-00-00 00:00:00'),
(2, 'C', '0200', 'CINA', '', '0000-00-00 00:00:00'),
(3, 'I', '0300', 'INDIA', '', '0000-00-00 00:00:00'),
(4, 'SBH', '0800', 'ANAK NEGERI SABAH', '', '0000-00-00 00:00:00'),
(5, 'SWK', '1000', 'ANAK NEGERI SARAWAK', '', '0000-00-00 00:00:00'),
(6, 'ASLI', '1200', 'ORANG ASLI ', '', '0000-00-00 00:00:00'),
(7, 'L', '0000', 'LAIN-LAIN', '', '0000-00-00 00:00:00'),
(9, 'BUGIS', '0101', 'BUGIS', NULL, '2021-06-09 09:26:55'),
(10, 'BOYAN', '0102', 'BOYAN', NULL, '2021-06-09 09:26:55'),
(11, 'BANJAR', '0103', 'BANJAR', NULL, '2021-06-09 09:26:55'),
(12, 'JAWA', '0104', 'JAWA', NULL, '2021-06-09 09:26:55'),
(13, NULL, '0105', 'JAWI PEKAN', NULL, '2021-06-09 09:26:55'),
(14, NULL, '0106', 'MINANGKABAU', NULL, '2021-06-09 09:26:55'),
(15, NULL, '0201', 'CANTONESE', NULL, '2021-06-09 09:26:55'),
(16, NULL, '0202', 'FOOCHOW', NULL, '2021-06-09 09:26:55'),
(17, NULL, '0203', 'HAINANESE', NULL, '2021-06-09 09:26:55'),
(18, NULL, '0204', 'HENGHUA', NULL, '2021-06-09 09:26:55'),
(19, NULL, '0205', 'HOKCHIA', NULL, '2021-06-09 09:26:55'),
(20, NULL, '0206', 'HOKCHIU', NULL, '2021-06-09 09:26:55'),
(21, NULL, '0207', 'HOKKIEN', NULL, '2021-06-09 09:26:55'),
(22, NULL, '0208', 'KHEK', NULL, '2021-06-09 09:26:55'),
(23, NULL, '0209', 'KWONGSAI ', NULL, '2021-06-09 09:26:55'),
(24, NULL, '0210', 'TEOCHEW', NULL, '2021-06-09 09:26:55'),
(25, NULL, '0211', 'KONGFOO', NULL, '2021-06-09 09:26:55'),
(26, NULL, '0212', 'HYLAM', NULL, '2021-06-09 09:26:55'),
(27, NULL, '0213', 'KENGCHU', NULL, '2021-06-09 09:26:55'),
(28, NULL, '0214', 'KOCHOU', NULL, '2021-06-09 09:26:55'),
(29, NULL, '0301', 'MALAYALI', NULL, '2021-06-09 09:26:55'),
(30, NULL, '302 ', 'PUNJABI', NULL, '2021-06-09 09:26:55'),
(31, NULL, '0303', 'SIKH', NULL, '2021-06-09 09:26:55'),
(32, NULL, '0304', 'TAMIL', NULL, '2021-06-09 09:26:55'),
(33, NULL, '0305', 'TELEGU', NULL, '2021-06-09 09:26:55'),
(34, NULL, '0306', 'MALABARI', NULL, '2021-06-09 09:26:55'),
(35, NULL, '0307', 'INDIA MUSLIM', NULL, '2021-06-09 09:26:55'),
(36, NULL, '0308', 'TELUGU', NULL, '2021-06-09 09:26:55'),
(37, NULL, '0309', 'ORISSA', NULL, '2021-06-09 09:26:55'),
(38, NULL, '0400', 'BANGLADESHI', NULL, '2021-06-09 09:26:55'),
(39, NULL, '0500', 'PAKISTANI', NULL, '2021-06-09 09:26:55'),
(40, NULL, '0600', 'SRI LANKA', NULL, '2021-06-09 09:26:55'),
(41, NULL, '0601', 'TAMIL SRI LANKA', NULL, '2021-06-09 09:26:55'),
(42, NULL, '0602', 'MELAYU SRI LANKA', NULL, '2021-06-09 09:26:55'),
(43, NULL, '0603', 'SINHALESE', NULL, '2021-06-09 09:26:55'),
(44, NULL, '0604', 'CEYLONESE', NULL, '2021-06-09 09:26:55'),
(45, NULL, '0700', 'INDONESIA', NULL, '2021-06-09 09:26:55'),
(46, NULL, '0701', 'TIDUNG', NULL, '2021-06-09 09:26:55'),
(47, NULL, '0801', 'BAJAU', NULL, '2021-06-09 09:26:55'),
(48, NULL, '0802', 'DUSUN', NULL, '2021-06-09 09:26:55'),
(49, NULL, '0803', 'KADAZAN', NULL, '2021-06-09 09:26:55'),
(50, NULL, '0804', 'MURUT', NULL, '2021-06-09 09:26:55'),
(51, NULL, '0805', 'SINO-NATIVE', NULL, '2021-06-09 09:26:55'),
(52, NULL, '0806', 'SULUK', NULL, '2021-06-09 09:26:55'),
(53, NULL, '0807', 'TIDUNG', NULL, '2021-06-09 09:26:55'),
(54, NULL, '0901', 'BINADAN', NULL, '2021-06-09 09:26:55'),
(55, NULL, '0902', 'BISAYA', NULL, '2021-06-09 09:26:55'),
(56, NULL, '0903', 'BONGOL', NULL, '2021-06-09 09:26:55'),
(57, NULL, '0904', 'BRUNEI', NULL, '2021-06-09 09:26:55'),
(58, NULL, '0905', 'DUMPAS', NULL, '2021-06-09 09:26:55'),
(59, NULL, '0906', 'IRANUN', NULL, '2021-06-09 09:26:55'),
(60, NULL, '0907', 'IDAHAN', NULL, '2021-06-09 09:26:55'),
(61, NULL, '0908', 'KWIJAU', NULL, '2021-06-09 09:26:55'),
(62, NULL, '0909', 'KEDAYAN', NULL, '2021-06-09 09:26:55'),
(63, NULL, '0910', 'LINGKABAU', NULL, '2021-06-09 09:26:55'),
(64, NULL, '0911', 'LUNDAYEH', NULL, '2021-06-09 09:26:55'),
(65, NULL, '0912', 'LASAU', NULL, '2021-06-09 09:26:55'),
(66, NULL, '0913', 'MELANAU', NULL, '2021-06-09 09:26:55'),
(67, NULL, '0914', 'MANGKAAK', NULL, '2021-06-09 09:26:55'),
(68, NULL, '0915', 'MATAGANG', NULL, '2021-06-09 09:26:55'),
(69, NULL, '0916', 'MINOKOK', NULL, '2021-06-09 09:26:55'),
(70, NULL, '0917', 'MELAYU SABAH', NULL, '2021-06-09 09:26:55'),
(71, NULL, '0918', 'MOMOGUN', NULL, '2021-06-09 09:26:55'),
(72, NULL, '0919', 'PAITAN', NULL, '2021-06-09 09:26:55'),
(73, NULL, '0920', 'RUMANAU', NULL, '2021-06-09 09:26:55'),
(74, NULL, '0921', 'RUNGUS', NULL, '2021-06-09 09:26:55'),
(75, NULL, '0922', 'SUNGAI', NULL, '2021-06-09 09:26:55'),
(76, NULL, '0923', 'SONSONGAN', NULL, '2021-06-09 09:26:55'),
(77, NULL, '0924', 'SINULIHAN', NULL, '2021-06-09 09:26:55'),
(78, NULL, '0925', 'TOMBONUO', NULL, '2021-06-09 09:26:55'),
(79, NULL, '0926', 'TAGAL', NULL, '2021-06-09 09:26:55'),
(80, NULL, '0927', 'TINAGAS', NULL, '2021-06-09 09:26:55'),
(81, NULL, '0928', 'COCOS', NULL, '2021-06-09 09:26:55'),
(82, NULL, '0929', 'KIMARAGANG', NULL, '2021-06-09 09:26:55'),
(83, NULL, '0930', 'BOLONGAN', NULL, '2021-06-09 09:26:55'),
(84, NULL, '0931', 'BUTON', NULL, '2021-06-09 09:26:55'),
(85, NULL, '0932', 'KAGAYAN', NULL, '2021-06-09 09:26:55'),
(86, NULL, '0933', 'BALABAK', NULL, '2021-06-09 09:26:55'),
(87, NULL, '0934', 'KADAZAN-SINO', NULL, '2021-06-09 09:26:55'),
(88, NULL, '0935', 'DUSUN-SINO', NULL, '2021-06-09 09:26:55'),
(89, NULL, '0936', 'BAJAU-SINO', NULL, '2021-06-09 09:26:55'),
(90, NULL, '0937', 'MURUT-SINO', NULL, '2021-06-09 09:26:55'),
(91, NULL, '0938', 'BRUNEI-SINO', NULL, '2021-06-09 09:26:55'),
(92, NULL, '0939', 'RUNGUS-SINO', NULL, '2021-06-09 09:26:55'),
(93, NULL, '0940', 'BISAYA-SINO', NULL, '2021-06-09 09:26:55'),
(94, NULL, '0941', 'IDAHAN-SINO', NULL, '2021-06-09 09:26:55'),
(95, NULL, '0942', 'IRANUN-SINO', NULL, '2021-06-09 09:26:55'),
(96, NULL, '0943', 'KEDAYAN-SINO', NULL, '2021-06-09 09:26:55'),
(97, NULL, '0944', 'SUNGAI-SINO', NULL, '2021-06-09 09:26:55'),
(98, NULL, '0945', 'LUNDAYEH-SINO', NULL, '2021-06-09 09:26:55'),
(99, NULL, '0946', 'SULUK-SINO', NULL, '2021-06-09 09:26:55'),
(100, NULL, '0947', 'TIDUNG-SINO', NULL, '2021-06-09 09:26:55'),
(101, NULL, '0948', 'BOLONGAN-SINO', NULL, '2021-06-09 09:26:55'),
(102, NULL, '0949', 'BALABAK-SINO', NULL, '2021-06-09 09:26:55'),
(103, NULL, '1001', 'MELAYU SARAWAK', NULL, '2021-06-09 09:26:55'),
(104, NULL, '1002', 'MELANAU', NULL, '2021-06-09 09:26:55'),
(105, NULL, '1003', 'KEDAYAN', NULL, '2021-06-09 09:26:55'),
(106, NULL, '1004', 'IBAN ATAU SEA DAYAK', NULL, '2021-06-09 09:26:55'),
(107, NULL, '0203', 'HAINANESE', NULL, '2021-06-09 09:26:55'),
(108, NULL, '0204', 'HENGHUA', NULL, '2021-06-09 09:26:55'),
(109, NULL, '0205', 'HOKCHIA', NULL, '2021-06-09 09:26:55'),
(110, NULL, '0206', 'HOKCHIU', NULL, '2021-06-09 09:26:55'),
(111, NULL, '0207', 'HOKKIEN', NULL, '2021-06-09 09:26:55'),
(112, NULL, '0208', 'KHEK', NULL, '2021-06-09 09:26:55'),
(113, NULL, '0209', 'KWONGSAI ', NULL, '2021-06-09 09:26:55'),
(114, NULL, '0210', 'TEOCHEW', NULL, '2021-06-09 09:26:55'),
(115, NULL, '0211', 'KONGFOO', NULL, '2021-06-09 09:26:55'),
(116, NULL, '0212', 'HYLAM', NULL, '2021-06-09 09:26:55'),
(117, NULL, '0213', 'KENGCHU', NULL, '2021-06-09 09:26:55'),
(118, NULL, '0214', 'KOCHOU', NULL, '2021-06-09 09:26:55'),
(119, NULL, '0301', 'MALAYALI', NULL, '2021-06-09 09:26:55'),
(120, NULL, '302 ', 'PUNJABI', NULL, '2021-06-09 09:26:55'),
(121, NULL, '0303', 'SIKH', NULL, '2021-06-09 09:26:55'),
(122, NULL, '0304', 'TAMIL', NULL, '2021-06-09 09:26:55'),
(123, NULL, '0305', 'TELEGU', NULL, '2021-06-09 09:26:55'),
(124, NULL, '0306', 'MALABARI', NULL, '2021-06-09 09:26:55'),
(125, NULL, '0307', 'INDIA MUSLIM', NULL, '2021-06-09 09:26:55'),
(126, NULL, '0308', 'TELUGU', NULL, '2021-06-09 09:26:55'),
(127, NULL, '0309', 'ORISSA', NULL, '2021-06-09 09:26:55'),
(128, NULL, '0400', 'BANGLADESHI', NULL, '2021-06-09 09:26:55'),
(129, NULL, '0500', 'PAKISTANI', NULL, '2021-06-09 09:26:55'),
(130, NULL, '0600', 'SRI LANKA', NULL, '2021-06-09 09:26:55'),
(131, NULL, '0601', 'TAMIL SRI LANKA', NULL, '2021-06-09 09:26:55'),
(132, NULL, '0602', 'MELAYU SRI LANKA', NULL, '2021-06-09 09:26:55'),
(133, NULL, '0603', 'SINHALESE', NULL, '2021-06-09 09:26:55'),
(134, NULL, '0604', 'CEYLONESE', NULL, '2021-06-09 09:26:55'),
(135, NULL, '0700', 'INDONESIA', NULL, '2021-06-09 09:26:55'),
(136, NULL, '0701', 'TIDUNG', NULL, '2021-06-09 09:26:55'),
(137, NULL, '0801', 'BAJAU', NULL, '2021-06-09 09:26:55'),
(138, NULL, '0802', 'DUSUN', NULL, '2021-06-09 09:26:55'),
(139, NULL, '0803', 'KADAZAN', NULL, '2021-06-09 09:26:55'),
(140, NULL, '0804', 'MURUT', NULL, '2021-06-09 09:26:55'),
(141, NULL, '0805', 'SINO-NATIVE', NULL, '2021-06-09 09:26:55'),
(142, NULL, '0806', 'SULUK', NULL, '2021-06-09 09:26:55'),
(143, NULL, '0807', 'TIDUNG', NULL, '2021-06-09 09:26:55'),
(144, NULL, '0901', 'BINADAN', NULL, '2021-06-09 09:26:55'),
(145, NULL, '0902', 'BISAYA', NULL, '2021-06-09 09:26:55'),
(146, NULL, '0903', 'BONGOL', NULL, '2021-06-09 09:26:55'),
(147, NULL, '0904', 'BRUNEI', NULL, '2021-06-09 09:26:55'),
(148, NULL, '0905', 'DUMPAS', NULL, '2021-06-09 09:26:55'),
(149, NULL, '0906', 'IRANUN', NULL, '2021-06-09 09:26:55'),
(150, NULL, '0907', 'IDAHAN', NULL, '2021-06-09 09:26:55'),
(151, NULL, '0908', 'KWIJAU', NULL, '2021-06-09 09:26:55'),
(152, NULL, '0909', 'KEDAYAN', NULL, '2021-06-09 09:26:55'),
(153, NULL, '0910', 'LINGKABAU', NULL, '2021-06-09 09:26:55'),
(154, NULL, '0911', 'LUNDAYEH', NULL, '2021-06-09 09:26:55'),
(155, NULL, '0912', 'LASAU', NULL, '2021-06-09 09:26:55'),
(156, NULL, '0913', 'MELANAU', NULL, '2021-06-09 09:26:55'),
(157, NULL, '0914', 'MANGKAAK', NULL, '2021-06-09 09:26:55'),
(158, NULL, '0915', 'MATAGANG', NULL, '2021-06-09 09:26:55'),
(159, NULL, '0916', 'MINOKOK', NULL, '2021-06-09 09:26:55'),
(160, NULL, '0917', 'MELAYU SABAH', NULL, '2021-06-09 09:26:55'),
(161, NULL, '0918', 'MOMOGUN', NULL, '2021-06-09 09:26:55'),
(162, NULL, '0919', 'PAITAN', NULL, '2021-06-09 09:26:55'),
(163, NULL, '0920', 'RUMANAU', NULL, '2021-06-09 09:26:55'),
(164, NULL, '0921', 'RUNGUS', NULL, '2021-06-09 09:26:55'),
(165, NULL, '0922', 'SUNGAI', NULL, '2021-06-09 09:26:55'),
(166, NULL, '0923', 'SONSONGAN', NULL, '2021-06-09 09:26:55'),
(167, NULL, '0924', 'SINULIHAN', NULL, '2021-06-09 09:26:55'),
(168, NULL, '0925', 'TOMBONUO', NULL, '2021-06-09 09:26:55'),
(169, NULL, '0926', 'TAGAL', NULL, '2021-06-09 09:26:55'),
(170, NULL, '0927', 'TINAGAS', NULL, '2021-06-09 09:26:55'),
(171, NULL, '0928', 'COCOS', NULL, '2021-06-09 09:26:55'),
(172, NULL, '0929', 'KIMARAGANG', NULL, '2021-06-09 09:26:55'),
(173, NULL, '0930', 'BOLONGAN', NULL, '2021-06-09 09:26:55'),
(174, NULL, '0931', 'BUTON', NULL, '2021-06-09 09:26:55'),
(175, NULL, '0932', 'KAGAYAN', NULL, '2021-06-09 09:26:55'),
(176, NULL, '0933', 'BALABAK', NULL, '2021-06-09 09:26:55'),
(177, NULL, '0934', 'KADAZAN-SINO', NULL, '2021-06-09 09:26:55'),
(178, NULL, '0935', 'DUSUN-SINO', NULL, '2021-06-09 09:26:55'),
(179, NULL, '0936', 'BAJAU-SINO', NULL, '2021-06-09 09:26:55'),
(180, NULL, '0937', 'MURUT-SINO', NULL, '2021-06-09 09:26:55'),
(181, NULL, '0938', 'BRUNEI-SINO', NULL, '2021-06-09 09:26:55'),
(182, NULL, '0939', 'RUNGUS-SINO', NULL, '2021-06-09 09:26:55'),
(183, NULL, '0940', 'BISAYA-SINO', NULL, '2021-06-09 09:26:55'),
(184, NULL, '0941', 'IDAHAN-SINO', NULL, '2021-06-09 09:26:55'),
(185, NULL, '0942', 'IRANUN-SINO', NULL, '2021-06-09 09:26:55'),
(186, NULL, '0943', 'KEDAYAN-SINO', NULL, '2021-06-09 09:26:55'),
(187, NULL, '0944', 'SUNGAI-SINO', NULL, '2021-06-09 09:26:55'),
(188, NULL, '0945', 'LUNDAYEH-SINO', NULL, '2021-06-09 09:26:55'),
(189, NULL, '0946', 'SULUK-SINO', NULL, '2021-06-09 09:26:55'),
(190, NULL, '0947', 'TIDUNG-SINO', NULL, '2021-06-09 09:26:55'),
(191, NULL, '0948', 'BOLONGAN-SINO', NULL, '2021-06-09 09:26:55'),
(192, NULL, '0949', 'BALABAK-SINO', NULL, '2021-06-09 09:26:55'),
(193, NULL, '1001', 'MELAYU SARAWAK', NULL, '2021-06-09 09:26:55'),
(194, NULL, '1002', 'MELANAU', NULL, '2021-06-09 09:26:55'),
(195, NULL, '1003', 'KEDAYAN', NULL, '2021-06-09 09:26:55'),
(196, NULL, '1004', 'IBAN ATAU SEA DAYAK', NULL, '2021-06-09 09:26:55'),
(197, NULL, '0914', 'MANGKAAK', NULL, '2021-06-09 09:26:55'),
(198, NULL, '0915', 'MATAGANG', NULL, '2021-06-09 09:26:55'),
(199, NULL, '0916', 'MINOKOK', NULL, '2021-06-09 09:26:55'),
(200, NULL, '0917', 'MELAYU SABAH', NULL, '2021-06-09 09:26:55'),
(201, NULL, '0918', 'MOMOGUN', NULL, '2021-06-09 09:26:55'),
(202, NULL, '0919', 'PAITAN', NULL, '2021-06-09 09:26:55'),
(203, NULL, '0920', 'RUMANAU', NULL, '2021-06-09 09:26:55'),
(204, NULL, '0921', 'RUNGUS', NULL, '2021-06-09 09:26:55'),
(205, NULL, '0922', 'SUNGAI', NULL, '2021-06-09 09:26:55'),
(206, NULL, '0923', 'SONSONGAN', NULL, '2021-06-09 09:26:55'),
(207, NULL, '0924', 'SINULIHAN', NULL, '2021-06-09 09:26:55'),
(208, NULL, '0925', 'TOMBONUO', NULL, '2021-06-09 09:26:55'),
(209, NULL, '0926', 'TAGAL', NULL, '2021-06-09 09:26:55'),
(210, NULL, '0927', 'TINAGAS', NULL, '2021-06-09 09:26:55'),
(211, NULL, '0928', 'COCOS', NULL, '2021-06-09 09:26:55'),
(212, NULL, '0929', 'KIMARAGANG', NULL, '2021-06-09 09:26:55'),
(213, NULL, '0930', 'BOLONGAN', NULL, '2021-06-09 09:26:55'),
(214, NULL, '0931', 'BUTON', NULL, '2021-06-09 09:26:55'),
(215, NULL, '0932', 'KAGAYAN', NULL, '2021-06-09 09:26:55'),
(216, NULL, '0933', 'BALABAK', NULL, '2021-06-09 09:26:55'),
(217, NULL, '0934', 'KADAZAN-SINO', NULL, '2021-06-09 09:26:55'),
(218, NULL, '0935', 'DUSUN-SINO', NULL, '2021-06-09 09:26:55'),
(219, NULL, '0936', 'BAJAU-SINO', NULL, '2021-06-09 09:26:55'),
(220, NULL, '0937', 'MURUT-SINO', NULL, '2021-06-09 09:26:55'),
(221, NULL, '0938', 'BRUNEI-SINO', NULL, '2021-06-09 09:26:55'),
(222, NULL, '0939', 'RUNGUS-SINO', NULL, '2021-06-09 09:26:55'),
(223, NULL, '0940', 'BISAYA-SINO', NULL, '2021-06-09 09:26:55'),
(224, NULL, '0941', 'IDAHAN-SINO', NULL, '2021-06-09 09:26:55'),
(225, NULL, '0942', 'IRANUN-SINO', NULL, '2021-06-09 09:26:55'),
(226, NULL, '0943', 'KEDAYAN-SINO', NULL, '2021-06-09 09:26:55'),
(227, NULL, '0944', 'SUNGAI-SINO', NULL, '2021-06-09 09:26:55'),
(228, NULL, '0945', 'LUNDAYEH-SINO', NULL, '2021-06-09 09:26:55'),
(229, NULL, '0946', 'SULUK-SINO', NULL, '2021-06-09 09:26:55'),
(230, NULL, '0947', 'TIDUNG-SINO', NULL, '2021-06-09 09:26:55'),
(231, NULL, '0948', 'BOLONGAN-SINO', NULL, '2021-06-09 09:26:55'),
(232, NULL, '0949', 'BALABAK-SINO', NULL, '2021-06-09 09:26:55'),
(233, NULL, '1001', 'MELAYU SARAWAK', NULL, '2021-06-09 09:26:55'),
(234, NULL, '1002', 'MELANAU', NULL, '2021-06-09 09:26:55'),
(235, NULL, '1003', 'KEDAYAN', NULL, '2021-06-09 09:26:55'),
(236, NULL, '1004', 'IBAN ATAU SEA DAYAK', NULL, '2021-06-09 09:26:55'),
(237, NULL, '0913', 'MELANAU', NULL, '2021-06-09 09:26:55'),
(238, NULL, '0914', 'MANGKAAK', NULL, '2021-06-09 09:26:55'),
(239, NULL, '0915', 'MATAGANG', NULL, '2021-06-09 09:26:55'),
(240, NULL, '0916', 'MINOKOK', NULL, '2021-06-09 09:26:55'),
(241, NULL, '0917', 'MELAYU SABAH', NULL, '2021-06-09 09:26:55'),
(242, NULL, '0918', 'MOMOGUN', NULL, '2021-06-09 09:26:55'),
(243, NULL, '0919', 'PAITAN', NULL, '2021-06-09 09:26:55'),
(244, NULL, '0920', 'RUMANAU', NULL, '2021-06-09 09:26:55'),
(245, NULL, '0921', 'RUNGUS', NULL, '2021-06-09 09:26:55'),
(246, NULL, '0922', 'SUNGAI', NULL, '2021-06-09 09:26:55'),
(247, NULL, '0923', 'SONSONGAN', NULL, '2021-06-09 09:26:55'),
(248, NULL, '0924', 'SINULIHAN', NULL, '2021-06-09 09:26:55'),
(249, NULL, '0925', 'TOMBONUO', NULL, '2021-06-09 09:26:55'),
(250, NULL, '0926', 'TAGAL', NULL, '2021-06-09 09:26:55'),
(251, NULL, '0927', 'TINAGAS', NULL, '2021-06-09 09:26:55'),
(252, NULL, '0928', 'COCOS', NULL, '2021-06-09 09:26:55'),
(253, NULL, '0929', 'KIMARAGANG', NULL, '2021-06-09 09:26:55'),
(254, NULL, '0930', 'BOLONGAN', NULL, '2021-06-09 09:26:55'),
(255, NULL, '0931', 'BUTON', NULL, '2021-06-09 09:26:55'),
(256, NULL, '0932', 'KAGAYAN', NULL, '2021-06-09 09:26:55'),
(257, NULL, '0933', 'BALABAK', NULL, '2021-06-09 09:26:55'),
(258, NULL, '0934', 'KADAZAN-SINO', NULL, '2021-06-09 09:26:55'),
(259, NULL, '0935', 'DUSUN-SINO', NULL, '2021-06-09 09:26:55'),
(260, NULL, '0936', 'BAJAU-SINO', NULL, '2021-06-09 09:26:55'),
(261, NULL, '0937', 'MURUT-SINO', NULL, '2021-06-09 09:26:55'),
(262, NULL, '0938', 'BRUNEI-SINO', NULL, '2021-06-09 09:26:55'),
(263, NULL, '0939', 'RUNGUS-SINO', NULL, '2021-06-09 09:26:55'),
(264, NULL, '0940', 'BISAYA-SINO', NULL, '2021-06-09 09:26:55'),
(265, NULL, '0941', 'IDAHAN-SINO', NULL, '2021-06-09 09:26:55'),
(266, NULL, '0942', 'IRANUN-SINO', NULL, '2021-06-09 09:26:55'),
(267, NULL, '0943', 'KEDAYAN-SINO', NULL, '2021-06-09 09:26:55'),
(268, NULL, '0944', 'SUNGAI-SINO', NULL, '2021-06-09 09:26:55'),
(269, NULL, '0945', 'LUNDAYEH-SINO', NULL, '2021-06-09 09:26:55'),
(270, NULL, '0946', 'SULUK-SINO', NULL, '2021-06-09 09:26:55'),
(271, NULL, '0947', 'TIDUNG-SINO', NULL, '2021-06-09 09:26:55'),
(272, NULL, '0948', 'BOLONGAN-SINO', NULL, '2021-06-09 09:26:55'),
(273, NULL, '0949', 'BALABAK-SINO', NULL, '2021-06-09 09:26:55'),
(274, NULL, '1001', 'MELAYU SARAWAK', NULL, '2021-06-09 09:26:55'),
(275, NULL, '1002', 'MELANAU', NULL, '2021-06-09 09:26:55'),
(276, NULL, '1003', 'KEDAYAN', NULL, '2021-06-09 09:26:55'),
(277, NULL, '1004', 'IBAN ATAU SEA DAYAK', NULL, '2021-06-09 09:26:55'),
(278, NULL, '0102', 'BIDAYUH ATAU LAND DAYAK', NULL, '2021-06-09 09:26:55'),
(279, NULL, '0102', 'KAYAN', NULL, '2021-06-09 09:26:55'),
(280, NULL, '0102', 'KENYAH', NULL, '2021-06-09 09:26:55'),
(281, NULL, '1010', 'PUNAN', NULL, '2021-06-09 09:26:55'),
(282, NULL, '1011', 'PENAN', NULL, '2021-06-09 09:26:55'),
(283, NULL, '1012', 'TRING', NULL, '2021-06-09 09:26:55'),
(284, NULL, '1013', 'LOGAT', NULL, '2021-06-09 09:26:55'),
(285, NULL, '1014', 'BAH MALI', NULL, '2021-06-09 09:26:55'),
(286, NULL, '1015', 'NAROM', NULL, '2021-06-09 09:26:55'),
(287, NULL, '1016', 'BAKONG', NULL, '2021-06-09 09:26:55'),
(288, NULL, '1017', 'MIRIEK', NULL, '2021-06-09 09:26:55'),
(289, NULL, '1018', 'DALI', NULL, '2021-06-09 09:26:55'),
(290, NULL, '1019', 'SEGAN', NULL, '2021-06-09 09:26:55'),
(291, NULL, '1101', 'BISAYA', NULL, '2021-06-09 09:26:55'),
(292, NULL, '1102', 'BERAWAN', NULL, '2021-06-09 09:26:55'),
(293, NULL, '1103', 'BELOT', NULL, '2021-06-09 09:26:55'),
(294, NULL, '1104', 'BHUKET ATAU UKIT', NULL, '2021-06-09 09:26:55'),
(295, NULL, '1105', 'BALAU', NULL, '2021-06-09 09:26:55'),
(296, NULL, '1106', 'BATANG AI', NULL, '2021-06-09 09:26:55'),
(297, NULL, '1107', 'BATU ELAH', NULL, '2021-06-09 09:26:55'),
(298, NULL, '1108', 'BAKETAN', NULL, '2021-06-09 09:26:55'),
(299, NULL, '1109', 'BINTULU', NULL, '2021-06-09 09:26:55'),
(300, NULL, '1110', 'BADENG', NULL, '2021-06-09 09:26:55'),
(301, NULL, '1111', 'DUSUN', NULL, '2021-06-09 09:26:55'),
(302, NULL, '1112', 'JAGOI', NULL, '2021-06-09 09:26:55'),
(303, NULL, '1113', 'LAKIPUT', NULL, '2021-06-09 09:26:55'),
(304, NULL, '1114', 'KAJANG', NULL, '2021-06-09 09:26:55'),
(305, NULL, '1115', 'KEJAMAN', NULL, '2021-06-09 09:26:55'),
(306, NULL, '1116', 'KANOWIT', NULL, '2021-06-09 09:26:55'),
(307, NULL, '1117', 'LIRONG', NULL, '2021-06-09 09:26:55'),
(308, NULL, '1118', 'LEMANAK', NULL, '2021-06-09 09:26:55'),
(309, NULL, '1119', 'LAHANAN', NULL, '2021-06-09 09:26:55'),
(310, NULL, '1120', 'LISUM ATAU LUGUM', NULL, '2021-06-09 09:26:55'),
(311, NULL, '1121', 'MATU', NULL, '2021-06-09 09:26:55'),
(312, NULL, '1122', 'MEMALOH', NULL, '2021-06-09 09:26:55'),
(313, NULL, '1123', 'MELIKIN', NULL, '2021-06-09 09:26:55'),
(314, NULL, '1124', 'MELAING', NULL, '2021-06-09 09:26:55'),
(315, NULL, '1125', 'NGORIK ATAU MUREK', NULL, '2021-06-09 09:26:55'),
(316, NULL, '1126', 'MENONDO', NULL, '2021-06-09 09:26:55'),
(317, NULL, '1127', 'JAMOK', NULL, '2021-06-09 09:26:55'),
(318, NULL, '1128', 'SEBOP', NULL, '2021-06-09 09:26:55'),
(319, NULL, '1129', 'SEDUAN', NULL, '2021-06-09 09:26:55'),
(320, NULL, '1130', 'SEKAPAN', NULL, '2021-06-09 09:26:55'),
(321, NULL, '1131', 'SEGALANG', NULL, '2021-06-09 09:26:55'),
(322, NULL, '1132', 'SIHAN', NULL, '2021-06-09 09:26:55'),
(323, NULL, '1133', 'SEPING', NULL, '2021-06-09 09:26:55'),
(324, NULL, '1134', 'SARIBAS', NULL, '2021-06-09 09:26:55'),
(325, NULL, '1135', 'SEBUYAU', NULL, '2021-06-09 09:26:55'),
(326, NULL, '1136', 'SKRANG', NULL, '2021-06-09 09:26:55'),
(327, NULL, '1137', 'SABAN', NULL, '2021-06-09 09:26:55'),
(328, NULL, '0102', 'BIDAYUH ATAU LAND DAYAK', NULL, '2021-06-09 09:26:55'),
(329, NULL, '0102', 'KAYAN', NULL, '2021-06-09 09:26:55'),
(330, NULL, '0102', 'KENYAH', NULL, '2021-06-09 09:26:55'),
(331, NULL, '1137', 'SABAN', NULL, '2021-06-09 09:26:55'),
(332, NULL, '1138', 'SELAKAN', NULL, '2021-06-09 09:26:55'),
(333, NULL, '1139', 'SELAKO', NULL, '2021-06-09 09:26:55'),
(334, NULL, '1140', 'TAGAL', NULL, '2021-06-09 09:26:55'),
(335, NULL, '1141', 'TABUN', NULL, '2021-06-09 09:26:55'),
(336, NULL, '1142', 'TUTONG', NULL, '2021-06-09 09:26:55'),
(337, NULL, '1143', 'TANJONG', NULL, '2021-06-09 09:26:55'),
(338, NULL, '1144', 'TATAU', NULL, '2021-06-09 09:26:55'),
(339, NULL, '1145', 'TAUP', NULL, '2021-06-09 09:26:55'),
(340, NULL, '1146', 'UKIT', NULL, '2021-06-09 09:26:55'),
(341, NULL, '1147', 'UNKOP', NULL, '2021-06-09 09:26:55'),
(342, NULL, '1148', 'ULU AI', NULL, '2021-06-09 09:26:55'),
(343, NULL, '1149', 'TORAJA', NULL, '2021-06-09 09:26:55'),
(344, NULL, '1150', 'TIMOR', NULL, '2021-06-09 09:26:55'),
(345, NULL, '1151', 'MENADO', NULL, '2021-06-09 09:26:55'),
(346, NULL, '1152', 'MANURA', NULL, '2021-06-09 09:26:55'),
(347, NULL, '1153', 'BATAK', NULL, '2021-06-09 09:26:55'),
(348, NULL, '1154', 'PATHAN', NULL, '2021-06-09 09:26:55'),
(349, NULL, '1155', 'TONGANS', NULL, '2021-06-09 09:26:55'),
(350, NULL, '1201', 'JAKUN', NULL, '2021-06-09 09:26:55'),
(351, NULL, '1202', 'NEGRITO', NULL, '2021-06-09 09:26:55'),
(352, NULL, '1203', 'SAKAI', NULL, '2021-06-09 09:26:55'),
(353, NULL, '1204', 'SEMAI', NULL, '2021-06-09 09:26:55'),
(354, NULL, '1205', 'SEMALAI', NULL, '2021-06-09 09:26:55'),
(355, NULL, '1206', 'TEMIAR', NULL, '2021-06-09 09:26:55'),
(356, NULL, '1207', 'SENOI', NULL, '2021-06-09 09:26:55'),
(357, NULL, '1118', 'LEMANAK', NULL, '2021-06-09 09:26:55'),
(358, NULL, '1119', 'LAHANAN', NULL, '2021-06-09 09:26:55'),
(359, NULL, '1120', 'LISUM ATAU LUGUM', NULL, '2021-06-09 09:26:55'),
(360, NULL, '1121', 'MATU', NULL, '2021-06-09 09:26:55'),
(361, NULL, '1122', 'MEMALOH', NULL, '2021-06-09 09:26:55'),
(362, NULL, '1123', 'MELIKIN', NULL, '2021-06-09 09:26:55'),
(363, NULL, '1124', 'MELAING', NULL, '2021-06-09 09:26:55'),
(364, NULL, '1125', 'NGORIK ATAU MUREK', NULL, '2021-06-09 09:26:55'),
(365, NULL, '1126', 'MENONDO', NULL, '2021-06-09 09:26:55'),
(366, NULL, '1127', 'JAMOK', NULL, '2021-06-09 09:26:55'),
(367, NULL, '1128', 'SEBOP', NULL, '2021-06-09 09:26:55'),
(368, NULL, '1129', 'SEDUAN', NULL, '2021-06-09 09:26:55'),
(369, NULL, '1130', 'SEKAPAN', NULL, '2021-06-09 09:26:55'),
(370, NULL, '1131', 'SEGALANG', NULL, '2021-06-09 09:26:55'),
(371, NULL, '1132', 'SIHAN', NULL, '2021-06-09 09:26:55'),
(372, NULL, '1133', 'SEPING', NULL, '2021-06-09 09:26:55'),
(373, NULL, '1134', 'SARIBAS', NULL, '2021-06-09 09:26:55'),
(374, NULL, '1135', 'SEBUYAU', NULL, '2021-06-09 09:26:55'),
(375, NULL, '1136', 'SKRANG', NULL, '2021-06-09 09:26:55'),
(376, NULL, '1108', 'BAKETAN', NULL, '2021-06-09 09:26:55'),
(377, NULL, '1109', 'BINTULU', NULL, '2021-06-09 09:26:55'),
(378, NULL, '1110', 'BADENG', NULL, '2021-06-09 09:26:55'),
(379, NULL, '1111', 'DUSUN', NULL, '2021-06-09 09:26:55'),
(380, NULL, '1112', 'JAGOI', NULL, '2021-06-09 09:26:55'),
(381, NULL, '1113', 'LAKIPUT', NULL, '2021-06-09 09:26:55'),
(382, NULL, '1114', 'KAJANG', NULL, '2021-06-09 09:26:55'),
(383, NULL, '1115', 'KEJAMAN', NULL, '2021-06-09 09:26:55'),
(384, NULL, '1116', 'KANOWIT', NULL, '2021-06-09 09:26:55'),
(385, NULL, '1117', 'LIRONG', NULL, '2021-06-09 09:26:55'),
(386, NULL, '1017', 'MIRIEK', NULL, '2021-06-09 09:26:55'),
(387, NULL, '1018', 'DALI', NULL, '2021-06-09 09:26:55'),
(388, NULL, '1019', 'SEGAN', NULL, '2021-06-09 09:26:55'),
(389, NULL, '1101', 'BISAYA', NULL, '2021-06-09 09:26:55'),
(390, NULL, '1102', 'BERAWAN', NULL, '2021-06-09 09:26:55'),
(391, NULL, '1103', 'BELOT', NULL, '2021-06-09 09:26:55'),
(392, NULL, '1104', 'BHUKET ATAU UKIT', NULL, '2021-06-09 09:26:55'),
(393, NULL, '1105', 'BALAU', NULL, '2021-06-09 09:26:55'),
(394, NULL, '1106', 'BATANG AI', NULL, '2021-06-09 09:26:55'),
(395, NULL, '1107', 'BATU ELAH', NULL, '2021-06-09 09:26:55'),
(396, NULL, '1008', 'MURUT ATAU LUN BAWANG', NULL, '2021-06-09 09:26:55'),
(397, NULL, '1009', 'KELABIT', NULL, '2021-06-09 09:26:55'),
(398, NULL, '1010', 'PUNAN', NULL, '2021-06-09 09:26:55'),
(399, NULL, '1011', 'PENAN', NULL, '2021-06-09 09:26:55'),
(400, NULL, '1012', 'TRING', NULL, '2021-06-09 09:26:55'),
(401, NULL, '1013', 'LOGAT', NULL, '2021-06-09 09:26:55'),
(402, NULL, '1014', 'BAH MALI', NULL, '2021-06-09 09:26:55'),
(403, NULL, '1015', 'NAROM', NULL, '2021-06-09 09:26:55'),
(404, NULL, '1016', 'BAKONG', NULL, '2021-06-09 09:26:55'),
(405, NULL, '1300', 'LAIN-LAIN ASIA', NULL, '2021-06-09 09:26:55'),
(406, NULL, '1301', 'ARAB', NULL, '2021-06-09 09:26:55'),
(407, NULL, '1302', 'BURMESE', NULL, '2021-06-09 09:26:55'),
(408, NULL, '1303', 'EURASIAN', NULL, '2021-06-09 09:26:55'),
(409, NULL, '1304', 'FIJIAN', NULL, '2021-06-09 09:26:55'),
(410, NULL, '1305', 'FILIPINO', NULL, '2021-06-09 09:26:55'),
(411, NULL, '1306', 'GURKHA', NULL, '2021-06-09 09:26:55'),
(412, NULL, '1307', 'JAPANESE', NULL, '2021-06-09 09:26:55'),
(413, NULL, '1308', 'KHMER', NULL, '2021-06-09 09:26:55'),
(414, NULL, '1309', 'KOREAN', NULL, '2021-06-09 09:26:55'),
(415, NULL, '1310', 'MALTESE', NULL, '2021-06-09 09:26:55'),
(416, NULL, '1311', 'PORTUGESE', NULL, '2021-06-09 09:26:55'),
(417, NULL, '1312', 'THAI', NULL, '2021-06-09 09:26:55'),
(418, NULL, '1313', 'VIETNAMESE', NULL, '2021-06-09 09:26:55'),
(419, NULL, '1314', 'IRANIAN', NULL, '2021-06-09 09:26:55'),
(420, NULL, '1315', 'AFGHAN', NULL, '2021-06-09 09:26:55'),
(421, NULL, '1316', 'CAUCASIAN', NULL, '2021-06-09 09:26:55'),
(422, NULL, '1317', 'KYRGYZ', NULL, '2021-06-09 09:26:55'),
(423, NULL, '1318', 'UBIAN', NULL, '2021-06-09 09:26:55'),
(424, NULL, '1319', 'UZBEKISTAN', NULL, '2021-06-09 09:26:55'),
(425, NULL, '1320', 'AZERBAIJAN', NULL, '2021-06-09 09:26:55'),
(426, NULL, '1321', 'SIAM', NULL, '2021-06-09 09:26:55'),
(427, NULL, '1322', 'KAZAKHSTAN', NULL, '2021-06-09 09:26:55'),
(428, NULL, '1323', 'TAJIKISTAN', NULL, '2021-06-09 09:26:55'),
(429, NULL, '1400', 'EUROPEAN', NULL, '2021-06-09 09:26:55'),
(430, NULL, '1401', 'BRITISH', NULL, '2021-06-09 09:26:55'),
(431, NULL, '1402', 'ALGERIA', NULL, '2021-06-09 09:26:55'),
(432, NULL, '1403', 'ANTIGUA-BARBUDA', NULL, '2021-06-09 09:26:55'),
(433, NULL, '1404', 'AUSTRALIA', NULL, '2021-06-09 09:26:55'),
(434, NULL, '1405', 'ANGOLA', NULL, '2021-06-09 09:26:55'),
(435, NULL, '1406', 'ARGENTINA', NULL, '2021-06-09 09:26:55'),
(436, NULL, '1407', 'ALBANIA', NULL, '2021-06-09 09:26:55'),
(437, NULL, '1408', 'AUSTRIA', NULL, '2021-06-09 09:26:55'),
(438, NULL, '1410', 'MIDDLE AFRICA', NULL, '2021-06-09 09:26:55'),
(439, NULL, '1411', 'SOUTH AFRICA', NULL, '2021-06-09 09:26:55'),
(440, NULL, '1412', 'BAHRAIN', NULL, '2021-06-09 09:26:55'),
(441, NULL, '1413', 'BAHAMAS', NULL, '2021-06-09 09:26:55'),
(442, NULL, '1414', 'BARBADOS', NULL, '2021-06-09 09:26:55'),
(443, NULL, '1415', 'BELIZE', NULL, '2021-06-09 09:26:55'),
(444, NULL, '1416', 'BOTSWANA', NULL, '2021-06-09 09:26:55'),
(445, NULL, '1418', 'BENIN', NULL, '2021-06-09 09:26:55'),
(446, NULL, '1419', 'BHUTAN', NULL, '2021-06-09 09:26:55'),
(447, NULL, '1420', 'BOLIVIA', NULL, '2021-06-09 09:26:55'),
(448, NULL, '1421', 'BRAZIL', NULL, '2021-06-09 09:26:55'),
(449, NULL, '1422', 'BURUNDI', NULL, '2021-06-09 09:26:55'),
(450, NULL, '1423', 'BULGARIA', NULL, '2021-06-09 09:26:55'),
(451, NULL, '1424', 'BELGIUM', NULL, '2021-06-09 09:26:55'),
(452, NULL, '1425', 'BELARUS', NULL, '2021-06-09 09:26:55'),
(453, NULL, '1427', 'BOSNIA-HERZEGOVINA', NULL, '2021-06-09 09:26:55'),
(454, NULL, '1428', 'CAMEROON', NULL, '2021-06-09 09:26:55'),
(455, NULL, '1429', 'CHAD', NULL, '2021-06-09 09:26:55'),
(456, NULL, '1430', 'CANADA', NULL, '2021-06-09 09:26:55'),
(457, NULL, '1431', 'CYPRUS', NULL, '2021-06-09 09:26:55'),
(458, NULL, '1432', 'CAPE VERDE', NULL, '2021-06-09 09:26:55'),
(459, NULL, '1433', 'CROTIA', NULL, '2021-06-09 09:26:55'),
(460, NULL, '1434', 'CHILE', NULL, '2021-06-09 09:26:55'),
(461, NULL, '1435', 'COLOMBIA', NULL, '2021-06-09 09:26:55'),
(462, NULL, '1436', 'COMOROS', NULL, '2021-06-09 09:26:55'),
(463, NULL, '1437', 'COSTA-RICA', NULL, '2021-06-09 09:26:55'),
(464, NULL, '1438', 'CUBA', NULL, '2021-06-09 09:26:55'),
(465, NULL, '1439', 'DJBOUTI', NULL, '2021-06-09 09:26:55'),
(466, NULL, '1440', 'DOMINICA', NULL, '2021-06-09 09:26:55'),
(467, NULL, '1441', 'DAHOMEY', NULL, '2021-06-09 09:26:55'),
(468, NULL, '1442', 'DENMARK', NULL, '2021-06-09 09:26:55'),
(469, NULL, '1443', 'EQUADOR', NULL, '2021-06-09 09:26:55'),
(470, NULL, '1444', 'EL SALVADOR', NULL, '2021-06-09 09:26:55'),
(471, NULL, '1445', 'EQUATORIAL GUINEA', NULL, '2021-06-09 09:26:55'),
(472, NULL, '1446', 'ETOPIA', NULL, '2021-06-09 09:26:55'),
(473, NULL, '1448', 'FRANCE', NULL, '2021-06-09 09:26:55'),
(474, NULL, '1449', 'FINLAND', NULL, '2021-06-09 09:26:55'),
(475, NULL, '1451', 'GABON', NULL, '2021-06-09 09:26:55'),
(476, NULL, '1452', 'GAMBIA', NULL, '2021-06-09 09:26:55'),
(477, NULL, '1453', 'GUINEA', NULL, '2021-06-09 09:26:55'),
(478, NULL, '1454', 'GUINEA-BISSAU', NULL, '2021-06-09 09:26:55'),
(479, NULL, '1455', 'GHANA', NULL, '2021-06-09 09:26:55'),
(480, NULL, '1456', 'GRENADA', NULL, '2021-06-09 09:26:55'),
(481, NULL, '1457', 'GUYANA', NULL, '2021-06-09 09:26:55'),
(482, NULL, '1458', 'GUATEMALA', NULL, '2021-06-09 09:26:55'),
(483, NULL, '1459', 'GREECE', NULL, '2021-06-09 09:26:55'),
(484, NULL, '1460', 'GERMANY', NULL, '2021-06-09 09:26:55'),
(485, NULL, '1461', 'HAITI', NULL, '2021-06-09 09:26:55'),
(486, NULL, '1462', 'HONDURAS', NULL, '2021-06-09 09:26:55'),
(487, NULL, '1463', 'HUNGARY', NULL, '2021-06-09 09:26:55'),
(488, NULL, '1464', 'HONG KONG', NULL, '2021-06-09 09:26:55'),
(489, NULL, '1466', 'IRAQ', NULL, '2021-06-09 09:26:55'),
(490, NULL, '1467', 'IVORY COAST', NULL, '2021-06-09 09:26:55'),
(491, NULL, '1468', 'ISRAEL', NULL, '2021-06-09 09:26:55'),
(492, NULL, '1469', 'IRELAND', NULL, '2021-06-09 09:26:55'),
(493, NULL, '1470', 'ITALY', NULL, '2021-06-09 09:26:55'),
(494, NULL, '1471', 'ICELAND', NULL, '2021-06-09 09:26:55'),
(495, NULL, '1472', 'JORDAN', NULL, '2021-06-09 09:26:55'),
(496, NULL, '1473', 'JAMAICA', NULL, '2021-06-09 09:26:55'),
(497, NULL, '1475', 'KUWAIT', NULL, '2021-06-09 09:26:55'),
(498, NULL, '1476', 'KENYA', NULL, '2021-06-09 09:26:55'),
(499, NULL, '1477', 'KIRIBATI', NULL, '2021-06-09 09:26:55'),
(500, NULL, '1479', 'KOREA(UTARA)', NULL, '2021-06-09 09:26:55'),
(501, NULL, '1480', 'KEMBOJA', NULL, '2021-06-09 09:26:55'),
(502, NULL, '1481', 'LEBANON', NULL, '2021-06-09 09:26:55'),
(503, NULL, '1482', 'LIBYA', NULL, '2021-06-09 09:26:55'),
(504, NULL, '1483', 'LESOTHO', NULL, '2021-06-09 09:26:55'),
(505, NULL, '1484', 'LAOS', NULL, '2021-06-09 09:26:55'),
(506, NULL, '1485', 'LIBERIA', NULL, '2021-06-09 09:26:55'),
(507, NULL, '1486', 'LUXEMBOURG', NULL, '2021-06-09 09:26:55'),
(508, NULL, '1487', 'MALI', NULL, '2021-06-09 09:26:55'),
(509, NULL, '1488', 'MALDIVES', NULL, '2021-06-09 09:26:55'),
(510, NULL, '1489', 'MAURITANIA', NULL, '2021-06-09 09:26:55'),
(511, NULL, '1490', 'MOROCCO', NULL, '2021-06-09 09:26:55'),
(512, NULL, '1491', 'MALAWI', NULL, '2021-06-09 09:26:55'),
(513, NULL, '1493', 'MADAGASCAR', NULL, '2021-06-09 09:26:55'),
(514, NULL, '1494', 'MAURITIUS', NULL, '2021-06-09 09:26:55'),
(515, NULL, '1495', 'MEXICO', NULL, '2021-06-09 09:26:55'),
(516, NULL, '1496', 'MOZAMBIQUE', NULL, '2021-06-09 09:26:55'),
(517, NULL, '1497', 'MONGOLIA', NULL, '2021-06-09 09:26:55'),
(518, NULL, '1498', 'MESIR', NULL, '2021-06-09 09:26:55'),
(519, NULL, '1499', 'MYANMAR', NULL, '2021-06-09 09:26:55'),
(520, NULL, '1500', 'LAIN-LAIN', NULL, '2021-06-09 09:26:55'),
(521, NULL, '1501', 'NAMIBIA', NULL, '2021-06-09 09:26:55'),
(522, NULL, '1502', 'NAURU', NULL, '2021-06-09 09:26:55'),
(523, NULL, '1503', 'NEW ZEALAND', NULL, '2021-06-09 09:26:55'),
(524, NULL, '1504', 'NIGERIA', NULL, '2021-06-09 09:26:55'),
(525, NULL, '1505', 'NEPAL', NULL, '2021-06-09 09:26:55'),
(526, NULL, '1506', 'NICARAGUA', NULL, '2021-06-09 09:26:55'),
(527, NULL, '1507', 'NETHERLAND', NULL, '2021-06-09 09:26:55'),
(528, NULL, '1508', 'NORWAY', NULL, '2021-06-09 09:26:55'),
(529, NULL, '1509', 'OMAN', NULL, '2021-06-09 09:26:55'),
(530, NULL, '1510', 'PAPUA NEW GUINEA', NULL, '2021-06-09 09:26:55'),
(531, NULL, '1511', 'PALESTIN', NULL, '2021-06-09 09:26:55'),
(532, NULL, '1512', 'PANAMA', NULL, '2021-06-09 09:26:55'),
(533, NULL, '1513', 'PARAGUAY', NULL, '2021-06-09 09:26:55'),
(534, NULL, '1514', 'PERU', NULL, '2021-06-09 09:26:55'),
(535, NULL, '1515', 'POLAND', NULL, '2021-06-09 09:26:55'),
(536, NULL, '1517', 'QATAR', NULL, '2021-06-09 09:26:55'),
(537, NULL, '1518', 'ROMANIA', NULL, '2021-06-09 09:26:55'),
(538, NULL, '1519', 'RWANDA', NULL, '2021-06-09 09:26:55'),
(539, NULL, '1520', 'REPUBLIK CZECH', NULL, '2021-06-09 09:26:55'),
(540, NULL, '1521', 'REPUBLIK SLOVAKIA', NULL, '2021-06-09 09:26:55'),
(541, NULL, '1522', 'SENEGAL', NULL, '2021-06-09 09:26:55'),
(542, NULL, '1523', 'SIERRA LEONE', NULL, '2021-06-09 09:26:55'),
(543, NULL, '1524', 'SOMALIA', NULL, '2021-06-09 09:26:55'),
(544, NULL, '1525', 'SUDAN', NULL, '2021-06-09 09:26:55'),
(545, NULL, '1526', 'SYRIA', NULL, '2021-06-09 09:26:55'),
(546, NULL, '1527', 'ST.LUCIA', NULL, '2021-06-09 09:26:55'),
(547, NULL, '1528', 'ST.VINCENT', NULL, '2021-06-09 09:26:55'),
(548, NULL, '1529', 'SYCHELLES', NULL, '2021-06-09 09:26:55'),
(549, NULL, '1530', 'SOLOMON ISLAND', NULL, '2021-06-09 09:26:55'),
(550, NULL, '1531', 'SRI LANKA', NULL, '2021-06-09 09:26:55'),
(551, NULL, '1532', 'SWAZILAND', NULL, '2021-06-09 09:26:55'),
(552, NULL, '1533', 'SAMOA', NULL, '2021-06-09 09:26:55'),
(553, NULL, '1534', 'SAO TOME & PRINCIPE', NULL, '2021-06-09 09:26:55'),
(554, NULL, '1535', 'SURINAM', NULL, '2021-06-09 09:26:55'),
(555, NULL, '1536', 'SAMOA BARAT', NULL, '2021-06-09 09:26:55'),
(556, NULL, '1537', 'SWEDEN', NULL, '2021-06-09 09:26:55'),
(557, NULL, '1538', 'SPAIN', NULL, '2021-06-09 09:26:55'),
(558, NULL, '1539', 'SWITZERLAND', NULL, '2021-06-09 09:26:55'),
(559, NULL, '1540', 'TUNISIA', NULL, '2021-06-09 09:26:55'),
(560, NULL, '1541', 'TURKEY', NULL, '2021-06-09 09:26:55'),
(561, NULL, '1542', 'TANZANIA', NULL, '2021-06-09 09:26:55'),
(562, NULL, '1543', 'TONGA', NULL, '2021-06-09 09:26:55'),
(563, NULL, '1544', 'TRINIDAD & TOBAGO', NULL, '2021-06-09 09:26:55'),
(564, NULL, '1545', 'TUVALI', NULL, '2021-06-09 09:26:55'),
(565, NULL, '1547', 'TOGO', NULL, '2021-06-09 09:26:55'),
(566, NULL, '1548', 'TAIWAN', NULL, '2021-06-09 09:26:55'),
(567, NULL, '1549', 'UGANDA', NULL, '2021-06-09 09:26:55'),
(568, NULL, '1550', 'UNITED ARAB EMIRATES', NULL, '2021-06-09 09:26:55'),
(569, NULL, '1551', 'UPPER VOLTA', NULL, '2021-06-09 09:26:55'),
(570, NULL, '1552', 'URUGUAY', NULL, '2021-06-09 09:26:55'),
(571, NULL, '1553', 'RUSSIA', NULL, '2021-06-09 09:26:55'),
(572, NULL, '1554', 'UKRAINE', NULL, '2021-06-09 09:26:55'),
(573, NULL, '1555', 'UNITED STATES OF AMERICA', NULL, '2021-06-09 09:26:55'),
(574, NULL, '1556', 'VANUATU', NULL, '2021-06-09 09:26:55'),
(575, NULL, '1557', 'VENEZUELA', NULL, '2021-06-09 09:26:55'),
(576, NULL, '1559', 'YEMEN', NULL, '2021-06-09 09:26:55'),
(577, NULL, '1560', 'YUGOSLAVIA', NULL, '2021-06-09 09:26:55'),
(578, NULL, '1561', 'MACEDONIA', NULL, '2021-06-09 09:26:55'),
(579, NULL, '1562', 'ZAIRE', NULL, '2021-06-09 09:26:55'),
(580, NULL, '1563', 'ZAMBIA', NULL, '2021-06-09 09:26:55'),
(581, NULL, '1564', 'ZIMBABWE', NULL, '2021-06-09 09:26:55'),
(582, NULL, '1565', 'SLOVENIA', NULL, '2021-06-09 09:26:55'),
(583, NULL, '1566', 'TURKMENISTAN', NULL, '2021-06-09 09:26:55'),
(584, NULL, '9999', 'MAKLUMAT TIADA', NULL, '2021-06-09 09:26:55'),
(585, NULL, '1300', 'LAIN-LAIN ASIA', NULL, '2021-06-09 09:26:55'),
(586, NULL, '1301', 'ARAB', NULL, '2021-06-09 09:26:55'),
(587, NULL, '1302', 'BURMESE', NULL, '2021-06-09 09:26:55'),
(588, NULL, '1303', 'EURASIAN', NULL, '2021-06-09 09:26:55'),
(589, NULL, '1304', 'FIJIAN', NULL, '2021-06-09 09:26:55'),
(590, NULL, '1305', 'FILIPINO', NULL, '2021-06-09 09:26:55'),
(591, NULL, '1306', 'GURKHA', NULL, '2021-06-09 09:26:55'),
(592, NULL, '1307', 'JAPANESE', NULL, '2021-06-09 09:26:55'),
(593, NULL, '1308', 'KHMER', NULL, '2021-06-09 09:26:55'),
(594, NULL, '1309', 'KOREAN', NULL, '2021-06-09 09:26:55'),
(595, NULL, '1310', 'MALTESE', NULL, '2021-06-09 09:26:55'),
(596, NULL, '1311', 'PORTUGESE', NULL, '2021-06-09 09:26:55'),
(597, NULL, '1312', 'THAI', NULL, '2021-06-09 09:26:55'),
(598, NULL, '1313', 'VIETNAMESE', NULL, '2021-06-09 09:26:55'),
(599, NULL, '1314', 'IRANIAN', NULL, '2021-06-09 09:26:55'),
(600, NULL, '1315', 'AFGHAN', NULL, '2021-06-09 09:26:55'),
(601, NULL, '1316', 'CAUCASIAN', NULL, '2021-06-09 09:26:55'),
(602, NULL, '1317', 'KYRGYZ', NULL, '2021-06-09 09:26:55'),
(603, NULL, '1318', 'UBIAN', NULL, '2021-06-09 09:26:55'),
(604, NULL, '1319', 'UZBEKISTAN', NULL, '2021-06-09 09:26:55'),
(605, NULL, '1320', 'AZERBAIJAN', NULL, '2021-06-09 09:26:55'),
(606, NULL, '1321', 'SIAM', NULL, '2021-06-09 09:26:55'),
(607, NULL, '1322', 'KAZAKHSTAN', NULL, '2021-06-09 09:26:55'),
(608, NULL, '1323', 'TAJIKISTAN', NULL, '2021-06-09 09:26:55'),
(609, NULL, '1400', 'EUROPEAN', NULL, '2021-06-09 09:26:55'),
(610, NULL, '1401', 'BRITISH', NULL, '2021-06-09 09:26:55'),
(611, NULL, '1402', 'ALGERIA', NULL, '2021-06-09 09:26:55'),
(612, NULL, '1403', 'ANTIGUA-BARBUDA', NULL, '2021-06-09 09:26:55'),
(613, NULL, '1404', 'AUSTRALIA', NULL, '2021-06-09 09:26:55'),
(614, NULL, '1405', 'ANGOLA', NULL, '2021-06-09 09:26:55'),
(615, NULL, '1406', 'ARGENTINA', NULL, '2021-06-09 09:26:55'),
(616, NULL, '1407', 'ALBANIA', NULL, '2021-06-09 09:26:55'),
(617, NULL, '1408', 'AUSTRIA', NULL, '2021-06-09 09:26:55'),
(618, NULL, '1410', 'MIDDLE AFRICA', NULL, '2021-06-09 09:26:55'),
(619, NULL, '1411', 'SOUTH AFRICA', NULL, '2021-06-09 09:26:55'),
(620, NULL, '1412', 'BAHRAIN', NULL, '2021-06-09 09:26:55'),
(621, NULL, '1413', 'BAHAMAS', NULL, '2021-06-09 09:26:55'),
(622, NULL, '1414', 'BARBADOS', NULL, '2021-06-09 09:26:55'),
(623, NULL, '1415', 'BELIZE', NULL, '2021-06-09 09:26:55'),
(624, NULL, '1416', 'BOTSWANA', NULL, '2021-06-09 09:26:55'),
(625, NULL, '1418', 'BENIN', NULL, '2021-06-09 09:26:55'),
(626, NULL, '1419', 'BHUTAN', NULL, '2021-06-09 09:26:55'),
(627, NULL, '1420', 'BOLIVIA', NULL, '2021-06-09 09:26:55'),
(628, NULL, '1421', 'BRAZIL', NULL, '2021-06-09 09:26:55'),
(629, NULL, '1422', 'BURUNDI', NULL, '2021-06-09 09:26:55'),
(630, NULL, '1423', 'BULGARIA', NULL, '2021-06-09 09:26:55'),
(631, NULL, '1424', 'BELGIUM', NULL, '2021-06-09 09:26:55'),
(632, NULL, '1425', 'BELARUS', NULL, '2021-06-09 09:26:55'),
(633, NULL, '1427', 'BOSNIA-HERZEGOVINA', NULL, '2021-06-09 09:26:55'),
(634, NULL, '1428', 'CAMEROON', NULL, '2021-06-09 09:26:55'),
(635, NULL, '1429', 'CHAD', NULL, '2021-06-09 09:26:55'),
(636, NULL, '1430', 'CANADA', NULL, '2021-06-09 09:26:55'),
(637, NULL, '1431', 'CYPRUS', NULL, '2021-06-09 09:26:55'),
(638, NULL, '1432', 'CAPE VERDE', NULL, '2021-06-09 09:26:55'),
(639, NULL, '1433', 'CROTIA', NULL, '2021-06-09 09:26:55'),
(640, NULL, '1434', 'CHILE', NULL, '2021-06-09 09:26:55'),
(641, NULL, '1435', 'COLOMBIA', NULL, '2021-06-09 09:26:55'),
(642, NULL, '1436', 'COMOROS', NULL, '2021-06-09 09:26:55'),
(643, NULL, '1437', 'COSTA-RICA', NULL, '2021-06-09 09:26:55'),
(644, NULL, '1438', 'CUBA', NULL, '2021-06-09 09:26:55'),
(645, NULL, '1439', 'DJBOUTI', NULL, '2021-06-09 09:26:55'),
(646, NULL, '1440', 'DOMINICA', NULL, '2021-06-09 09:26:55'),
(647, NULL, '1441', 'DAHOMEY', NULL, '2021-06-09 09:26:55'),
(648, NULL, '1442', 'DENMARK', NULL, '2021-06-09 09:26:55'),
(649, NULL, '1443', 'EQUADOR', NULL, '2021-06-09 09:26:55'),
(650, NULL, '1444', 'EL SALVADOR', NULL, '2021-06-09 09:26:55'),
(651, NULL, '1445', 'EQUATORIAL GUINEA', NULL, '2021-06-09 09:26:55'),
(652, NULL, '1446', 'ETOPIA', NULL, '2021-06-09 09:26:55'),
(653, NULL, '1448', 'FRANCE', NULL, '2021-06-09 09:26:55'),
(654, NULL, '1449', 'FINLAND', NULL, '2021-06-09 09:26:55'),
(655, NULL, '1451', 'GABON', NULL, '2021-06-09 09:26:55'),
(656, NULL, '1452', 'GAMBIA', NULL, '2021-06-09 09:26:55'),
(657, NULL, '1453', 'GUINEA', NULL, '2021-06-09 09:26:55'),
(658, NULL, '1454', 'GUINEA-BISSAU', NULL, '2021-06-09 09:26:55'),
(659, NULL, '1455', 'GHANA', NULL, '2021-06-09 09:26:55'),
(660, NULL, '1456', 'GRENADA', NULL, '2021-06-09 09:26:55'),
(661, NULL, '1457', 'GUYANA', NULL, '2021-06-09 09:26:55'),
(662, NULL, '1458', 'GUATEMALA', NULL, '2021-06-09 09:26:55'),
(663, NULL, '1459', 'GREECE', NULL, '2021-06-09 09:26:55'),
(664, NULL, '1460', 'GERMANY', NULL, '2021-06-09 09:26:55'),
(665, NULL, '1461', 'HAITI', NULL, '2021-06-09 09:26:55'),
(666, NULL, '1462', 'HONDURAS', NULL, '2021-06-09 09:26:55'),
(667, NULL, '1463', 'HUNGARY', NULL, '2021-06-09 09:26:55'),
(668, NULL, '1464', 'HONG KONG', NULL, '2021-06-09 09:26:55'),
(669, NULL, '1466', 'IRAQ', NULL, '2021-06-09 09:26:55'),
(670, NULL, '1467', 'IVORY COAST', NULL, '2021-06-09 09:26:55'),
(671, NULL, '1468', 'ISRAEL', NULL, '2021-06-09 09:26:55'),
(672, NULL, '1469', 'IRELAND', NULL, '2021-06-09 09:26:55'),
(673, NULL, '1470', 'ITALY', NULL, '2021-06-09 09:26:55'),
(674, NULL, '1471', 'ICELAND', NULL, '2021-06-09 09:26:55'),
(675, NULL, '1472', 'JORDAN', NULL, '2021-06-09 09:26:55'),
(676, NULL, '1473', 'JAMAICA', NULL, '2021-06-09 09:26:55'),
(677, NULL, '1475', 'KUWAIT', NULL, '2021-06-09 09:26:55'),
(678, NULL, '1476', 'KENYA', NULL, '2021-06-09 09:26:55'),
(679, NULL, '1477', 'KIRIBATI', NULL, '2021-06-09 09:26:55'),
(680, NULL, '1479', 'KOREA(UTARA)', NULL, '2021-06-09 09:26:55'),
(681, NULL, '1480', 'KEMBOJA', NULL, '2021-06-09 09:26:55'),
(682, NULL, '1481', 'LEBANON', NULL, '2021-06-09 09:26:55'),
(683, NULL, '1482', 'LIBYA', NULL, '2021-06-09 09:26:55'),
(684, NULL, '1483', 'LESOTHO', NULL, '2021-06-09 09:26:55'),
(685, NULL, '1484', 'LAOS', NULL, '2021-06-09 09:26:55'),
(686, NULL, '1485', 'LIBERIA', NULL, '2021-06-09 09:26:55'),
(687, NULL, '1486', 'LUXEMBOURG', NULL, '2021-06-09 09:26:55'),
(688, NULL, '1487', 'MALI', NULL, '2021-06-09 09:26:55'),
(689, NULL, '1488', 'MALDIVES', NULL, '2021-06-09 09:26:55'),
(690, NULL, '1489', 'MAURITANIA', NULL, '2021-06-09 09:26:55'),
(691, NULL, '1490', 'MOROCCO', NULL, '2021-06-09 09:26:55'),
(692, NULL, '1491', 'MALAWI', NULL, '2021-06-09 09:26:55'),
(693, NULL, '1493', 'MADAGASCAR', NULL, '2021-06-09 09:26:55'),
(694, NULL, '1494', 'MAURITIUS', NULL, '2021-06-09 09:26:55'),
(695, NULL, '1495', 'MEXICO', NULL, '2021-06-09 09:26:55'),
(696, NULL, '1496', 'MOZAMBIQUE', NULL, '2021-06-09 09:26:55'),
(697, NULL, '1497', 'MONGOLIA', NULL, '2021-06-09 09:26:55'),
(698, NULL, '1498', 'MESIR', NULL, '2021-06-09 09:26:55'),
(699, NULL, '1499', 'MYANMAR', NULL, '2021-06-09 09:26:55'),
(700, NULL, '1500', 'LAIN-LAIN', NULL, '2021-06-09 09:26:55'),
(701, NULL, '1501', 'NAMIBIA', NULL, '2021-06-09 09:26:55'),
(702, NULL, '1502', 'NAURU', NULL, '2021-06-09 09:26:55'),
(703, NULL, '1503', 'NEW ZEALAND', NULL, '2021-06-09 09:26:55'),
(704, NULL, '1504', 'NIGERIA', NULL, '2021-06-09 09:26:55'),
(705, NULL, '1505', 'NEPAL', NULL, '2021-06-09 09:26:55'),
(706, NULL, '1506', 'NICARAGUA', NULL, '2021-06-09 09:26:55'),
(707, NULL, '1507', 'NETHERLAND', NULL, '2021-06-09 09:26:55'),
(708, NULL, '1508', 'NORWAY', NULL, '2021-06-09 09:26:55'),
(709, NULL, '1509', 'OMAN', NULL, '2021-06-09 09:26:55'),
(710, NULL, '1510', 'PAPUA NEW GUINEA', NULL, '2021-06-09 09:26:55'),
(711, NULL, '1511', 'PALESTIN', NULL, '2021-06-09 09:26:55'),
(712, NULL, '1512', 'PANAMA', NULL, '2021-06-09 09:26:55'),
(713, NULL, '1513', 'PARAGUAY', NULL, '2021-06-09 09:26:55'),
(714, NULL, '1514', 'PERU', NULL, '2021-06-09 09:26:55'),
(715, NULL, '1515', 'POLAND', NULL, '2021-06-09 09:26:55'),
(716, NULL, '1517', 'QATAR', NULL, '2021-06-09 09:26:55'),
(717, NULL, '1518', 'ROMANIA', NULL, '2021-06-09 09:26:55'),
(718, NULL, '1519', 'RWANDA', NULL, '2021-06-09 09:26:55'),
(719, NULL, '1520', 'REPUBLIK CZECH', NULL, '2021-06-09 09:26:55'),
(720, NULL, '1521', 'REPUBLIK SLOVAKIA', NULL, '2021-06-09 09:26:55'),
(721, NULL, '1522', 'SENEGAL', NULL, '2021-06-09 09:26:55'),
(722, NULL, '1523', 'SIERRA LEONE', NULL, '2021-06-09 09:26:55'),
(723, NULL, '1524', 'SOMALIA', NULL, '2021-06-09 09:26:55'),
(724, NULL, '1525', 'SUDAN', NULL, '2021-06-09 09:26:55'),
(725, NULL, '1526', 'SYRIA', NULL, '2021-06-09 09:26:55'),
(726, NULL, '1527', 'ST.LUCIA', NULL, '2021-06-09 09:26:55'),
(727, NULL, '1528', 'ST.VINCENT', NULL, '2021-06-09 09:26:55'),
(728, NULL, '1529', 'SYCHELLES', NULL, '2021-06-09 09:26:55'),
(729, NULL, '1530', 'SOLOMON ISLAND', NULL, '2021-06-09 09:26:55'),
(730, NULL, '1531', 'SRI LANKA', NULL, '2021-06-09 09:26:55'),
(731, NULL, '1532', 'SWAZILAND', NULL, '2021-06-09 09:26:55'),
(732, NULL, '1533', 'SAMOA', NULL, '2021-06-09 09:26:55'),
(733, NULL, '1534', 'SAO TOME & PRINCIPE', NULL, '2021-06-09 09:26:55'),
(734, NULL, '1535', 'SURINAM', NULL, '2021-06-09 09:26:55'),
(735, NULL, '1536', 'SAMOA BARAT', NULL, '2021-06-09 09:26:55'),
(736, NULL, '1537', 'SWEDEN', NULL, '2021-06-09 09:26:55'),
(737, NULL, '1538', 'SPAIN', NULL, '2021-06-09 09:26:55'),
(738, NULL, '1539', 'SWITZERLAND', NULL, '2021-06-09 09:26:55'),
(739, NULL, '1540', 'TUNISIA', NULL, '2021-06-09 09:26:55'),
(740, NULL, '1541', 'TURKEY', NULL, '2021-06-09 09:26:55'),
(741, NULL, '1542', 'TANZANIA', NULL, '2021-06-09 09:26:55'),
(742, NULL, '1543', 'TONGA', NULL, '2021-06-09 09:26:55'),
(743, NULL, '1544', 'TRINIDAD & TOBAGO', NULL, '2021-06-09 09:26:55'),
(744, NULL, '1545', 'TUVALI', NULL, '2021-06-09 09:26:55'),
(745, NULL, '1547', 'TOGO', NULL, '2021-06-09 09:26:55'),
(746, NULL, '1548', 'TAIWAN', NULL, '2021-06-09 09:26:55'),
(747, NULL, '1549', 'UGANDA', NULL, '2021-06-09 09:26:55'),
(748, NULL, '1550', 'UNITED ARAB EMIRATES', NULL, '2021-06-09 09:26:55'),
(749, NULL, '1551', 'UPPER VOLTA', NULL, '2021-06-09 09:26:55'),
(750, NULL, '1552', 'URUGUAY', NULL, '2021-06-09 09:26:55'),
(751, NULL, '1553', 'RUSSIA', NULL, '2021-06-09 09:26:55'),
(752, NULL, '1554', 'UKRAINE', NULL, '2021-06-09 09:26:55'),
(753, NULL, '1555', 'UNITED STATES OF AMERICA', NULL, '2021-06-09 09:26:55'),
(754, NULL, '1556', 'VANUATU', NULL, '2021-06-09 09:26:55'),
(755, NULL, '1557', 'VENEZUELA', NULL, '2021-06-09 09:26:55'),
(756, NULL, '1559', 'YEMEN', NULL, '2021-06-09 09:26:55'),
(757, NULL, '1560', 'YUGOSLAVIA', NULL, '2021-06-09 09:26:55'),
(758, NULL, '1561', 'MACEDONIA', NULL, '2021-06-09 09:26:55'),
(759, NULL, '1562', 'ZAIRE', NULL, '2021-06-09 09:26:55'),
(760, NULL, '1563', 'ZAMBIA', NULL, '2021-06-09 09:26:55'),
(761, NULL, '1564', 'ZIMBABWE', NULL, '2021-06-09 09:26:55'),
(762, NULL, '1565', 'SLOVENIA', NULL, '2021-06-09 09:26:55'),
(763, NULL, '1566', 'TURKMENISTAN', NULL, '2021-06-09 09:26:55'),
(764, NULL, '9999', 'MAKLUMAT TIADA', NULL, '2021-06-09 09:26:55');

-- --------------------------------------------------------

--
-- Table structure for table `religion`
--

CREATE TABLE `religion` (
  `religion_id` int(11) NOT NULL,
  `religion_code` varchar(20) DEFAULT NULL,
  `religion_name` varchar(100) DEFAULT NULL,
  `keyin_by` varchar(50) DEFAULT NULL,
  `keyin_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `religion`
--

INSERT INTO `religion` (`religion_id`, `religion_code`, `religion_name`, `keyin_by`, `keyin_date`) VALUES
(1, '1', 'ISLAM', '', '0000-00-00 00:00:00'),
(2, '2', 'CHRISTIAN', '', '0000-00-00 00:00:00'),
(3, '3', 'BUDDHA', '', '0000-00-00 00:00:00'),
(4, '4', 'HINDU', '', '0000-00-00 00:00:00'),
(5, '5', 'SIKHISM', '', '0000-00-00 00:00:00'),
(6, 'A', 'TAO', '', '0000-00-00 00:00:00'),
(7, 'B', 'CONFUSIANISM', '', '0000-00-00 00:00:00'),
(8, 'C', 'BAHAI', '', '0000-00-00 00:00:00'),
(9, 'D', 'JUDAISM', '', '0000-00-00 00:00:00'),
(10, '6', 'NO RELIGION', '', '0000-00-00 00:00:00'),
(11, '7', 'OTHERS', '', '0000-00-00 00:00:00'),
(12, '9', 'NO INFORMATION', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `school_type`
--

CREATE TABLE `school_type` (
  `id` int(11) NOT NULL,
  `SCHOOL_TYPE_CODE` varchar(1) NOT NULL,
  `SCHOOL_TYPE_NAME` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `school_type`
--

INSERT INTO `school_type` (`id`, `SCHOOL_TYPE_CODE`, `SCHOOL_TYPE_NAME`) VALUES
(1, 'A', 'SEKOLAH MENENGAH KEBANGSAAN HARIAN (SMK)'),
(2, 'B', 'SEKOLAH MENENGAH TEKNIK(SMT)'),
(3, 'C', 'SEKOLAH MENENGAH BERASRAMA PENUH(SBP)'),
(4, 'D', 'SEKOLAH MENENGAH KEBANGSAAN AGAMA(SMKA)'),
(5, 'E', 'SEKOLAH AGAMA BANTUAN KERAJAAN(SMBK)'),
(6, 'F', 'MAKTAB RENDAH SAINS MARA(MRSM)'),
(7, 'G', 'SEKOLAH MENENGAH BESTARI(SMB)'),
(8, 'H', 'SEKOLAH MENENGAH KLUSTER'),
(9, 'I', 'SEKOLAH SUKAN(SS)'),
(10, 'J', 'SEKOLAH MODEL KHAS'),
(11, 'K', 'SEKOLAH MENENGAH PERSENDIRIAN(SWASTA)'),
(12, 'L', 'SEKOLAH MENENGAH PENDIDIKAN KHAS(KHAS)'),
(13, 'M', 'MAKTAB TENTERA DIRAJA MALAYSIA (MTD)'),
(14, 'N', 'LAIN-LAIN');

-- --------------------------------------------------------

--
-- Table structure for table `spm_grade`
--

CREATE TABLE `spm_grade` (
  `spm_id` int(11) NOT NULL,
  `spm_code` varchar(20) DEFAULT NULL,
  `spm_grade` varchar(100) DEFAULT NULL,
  `value_grade` varchar(3) NOT NULL,
  `keyin_by` varchar(50) DEFAULT NULL,
  `keyin_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `spm_grade`
--

INSERT INTO `spm_grade` (`spm_id`, `spm_code`, `spm_grade`, `value_grade`, `keyin_by`, `keyin_date`) VALUES
(1, '0', 'A+', '18', '', '0000-00-00 00:00:00'),
(2, '1', 'A  / 1A / A1', '16', '', '0000-00-00 00:00:00'),
(3, '2', 'A- / 2A / A2', '14', '', '0000-00-00 00:00:00'),
(4, '3', 'B+ / 3B / C3', '12', '', '0000-00-00 00:00:00'),
(5, '4', 'B  / 4B / C4', '10', '', '0000-00-00 00:00:00'),
(6, '5', 'C+ / 5C / C5', '8', '', '0000-00-00 00:00:00'),
(7, '6', 'C  / 6C / C6', '6', '', '0000-00-00 00:00:00'),
(8, '7', 'D  / 7D / P7', '4', '', '0000-00-00 00:00:00'),
(9, '8', 'E  / 8E / P8', '2', '', '0000-00-00 00:00:00'),
(10, '9', 'F  / 9G / F9', '0', '', '0000-00-00 00:00:00'),
(11, 'R', 'Rujukan LPM', '', '', '0000-00-00 00:00:00'),
(12, 'Z', 'Masalah Keputusan', '', '', '0000-00-00 00:00:00'),
(13, 'T', 'Tidak Hadir', '', '', '0000-00-00 00:00:00'),
(14, 'X', 'Tiada', '0', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `spm_subject`
--

CREATE TABLE `spm_subject` (
  `subject_id` int(3) NOT NULL,
  `subject_code_no` varchar(11) DEFAULT NULL,
  `subject_code` varchar(3) DEFAULT NULL,
  `subject_name` varchar(51) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `spm_subject`
--

INSERT INTO `spm_subject` (`subject_id`, `subject_code_no`, `subject_code`, `subject_name`) VALUES
(67, '8201', 'PEE', 'Prinsip Elektrik Dan Elektronik'),
(146, '3729', 'PT', 'PERTANIAN'),
(159, '1103', 'BM', 'BAHASA MELAYU'),
(160, '1119', 'BI', 'BAHASA INGGERIS'),
(161, '1223', 'PI', 'PENDIDIKAN ISLAM'),
(162, '1225', 'PM', 'PENDIDIKAN MORAL'),
(163, '1249', 'SEJ', 'SEJARAH'),
(164, '1449', 'MAT', 'MATHEMATICS'),
(165, '1511', 'SN', 'SCIENCE'),
(166, '2205', 'KSI', 'LITERATURE IN ENGLISH'),
(167, '2215', 'KSM', 'KESUSASTERAAN MELAYU'),
(168, '2280', 'GEO', 'GEOGRAFI'),
(169, '2361', 'BAT', 'BAHASA ARAB / BAHASA ARAB TINGGI'),
(170, '2611', 'LUK', 'PENDIDIKAN SENI VISUAL'),
(171, '2621', 'MUZ', 'PENDIDIKAN MUZIK'),
(172, '3472', 'M-T', 'ADDITIONAL MATHEMATICS'),
(173, '3528', 'SPT', 'SAINS PERTANIAN'),
(174, '3529', 'PGO', 'PENGAJIAN AGROTEKNOLOGI'),
(176, '3754', 'PGW', 'PENGAJIAN KEUSAHAWANAN'),
(177, '3755', 'PDG', 'PERDAGANGAN'),
(178, '3756', 'PAK', 'PRINSIP PERAKAUNAN'),
(179, '3757', 'EKA', 'EKONOMI ASAS'),
(180, '3758', 'ERT', 'EKONOMI RUMAH TANGGA'),
(181, '3759', 'LKJ', 'LUKISAN KEJURUTERAAN'),
(182, '3760', 'PJM', 'PENGAJIAN KEJURUTERAAN MEKANIKAL'),
(183, '3761', 'PJA', 'PENGAJIAN KEJURUTERAAN AWAM'),
(184, '3762', 'PJE', 'PENGAJIAN KEJURUTERAAN ELEKTRIK DAN ELEKTRONIK'),
(185, '3763', 'RKC', 'REKA CIPTA'),
(186, '3764', 'TKJ', 'TEKNOLOGI KEJURUTERAAN'),
(187, '3765', 'TEK', 'INFORMATION AND COMMUNICATION TECHNOLOGY'),
(218, '3766', 'PNG', 'PERNIAGAAN'),
(220, '3768', 'AKS', 'ASAS KELESTARIAN'),
(221, '3769', 'RT', 'SAINS RUMAH TANGGA'),
(222, '3770', 'SK', 'SAINS KOMPUTER'),
(223, '3771', 'GKT', 'GRAFIK KOMUNIKASI TEKNIKAL'),
(224, '4531', 'FIZ', 'PHYSICS'),
(225, '4541', 'KIM', 'CHEMISTRY'),
(226, '4551', 'BIO', 'BIOLOGY'),
(227, '4561', 'SNT', 'ADDITIONAL SCIENCE'),
(228, '4571', 'PSS', 'PENGETAHUAN SAINS SUKAN'),
(229, '4572', 'SS', 'SAINS SUKAN'),
(230, '4581', 'ASN', 'APPLIED SCIENCE'),
(231, '5226', 'TSI', 'TASAWWUR ISLAM'),
(232, '5227', 'PQS', 'PENDIDIKAN AL-QURAN DAN AL-SUNNAH'),
(233, '5228', 'PSI', 'PENDIDIKAN SYARI AH ISLAMIAH'),
(234, '5301', 'HQ', 'HIFZ AL QURAN'),
(235, '5302', 'MQ', 'MAHARAT AL QURAN'),
(236, '5303', 'TQS', 'TURATH AL-QURAN DAN AL-SUNNAH'),
(237, '5304', 'TDI', 'TURATH DIRASAT ISLAMIAH'),
(238, '5305', 'TBA', 'TURATH BAHASA ARAB'),
(239, '5401', 'UAD', 'USUL AL-DIN'),
(240, '5402', 'AS', 'AL-SYARIAH'),
(241, '5403', 'LAM', 'AL-LUGHAH AL-ARABIAH AL-MU ASIRAH'),
(242, '5404', 'MUI', 'MANAHIJ AL-ULUM AL-ISLAMIAH'),
(243, '5405', 'AWB', 'AL-ADAB WA AL-BALAGHAH'),
(244, '6351', 'BC', 'BAHASA CINA'),
(245, '6354', 'BT', 'BAHASA TAMIL'),
(246, '6355', 'EST', 'ENGLISH FOR SCIENCE AND TECHNOLOGY'),
(247, '6356', 'BIB', 'BAHASA IBAN'),
(248, '6362', 'BAK', 'BAHASA ARAB KOMUNIKASI'),
(249, '7101', 'PDM', 'PEMBINAAN DOMESTIK'),
(250, '7102', 'MPR', 'MEMBUAT PERABOT'),
(251, '7103', 'KPD', 'KERJA PAIP DOMESTIK'),
(252, '7104', 'PND', 'PENDAWAIAN DOMESTIK'),
(253, '7105', 'KAG', 'KIMPALAN ARKA DAN GAS'),
(254, '7106', 'MAM', 'MENSERVIS AUTOMOBIL'),
(255, '7107', 'MMS', 'MENSERVIS MOTOSIKAL'),
(256, '7108', 'PPU', 'MENSERVIS PERALATAN PENYEJUKAN DAN PENYAMANAN UDARA'),
(257, '7109', 'MPE', 'MENSERVIS PERALATAN ELEKTRIK DOMESTIK'),
(258, '7201', 'RDJ', 'REKAAN DAN JAHITAN PAKAIAN'),
(259, '7202', 'TKP', 'KATERING DAN PENYAJIAN'),
(260, '7203', 'PGN', 'PEMPROSESAN MAKANAN'),
(261, '7204', 'MDR', 'PENJAGAAN MUKA DAN DANDANAN RAMBUT'),
(262, '7205', 'PKK', 'ASUHAN DAN PENDIDIKAN AWAL KANAK-KANAK'),
(263, '7206', 'GAG', 'GERONTOLOGI ASAS DAN PERKHIDMATAN GERIATRIK'),
(264, '7301', 'LDN', 'LANDSKAP DAN NURSERI'),
(265, '7302', 'AHR', 'AKUAKULTUR DAN HAIWAN REKREASI'),
(266, '7303', 'TNM', 'TANAMAN MAKANAN'),
(267, '7401', 'SRT', 'SENI REKA TANDA'),
(268, '7402', 'HAD', 'HIASAN DALAMAN ASAS'),
(269, '7403', 'MUL', 'PRODUKSI MULTIMEDIA'),
(270, '7404', 'GRA', 'GRAFIK BERKOMPUTER'),
(271, '8101', 'BHB', 'BAHAN BINAAN'),
(272, '8102', 'TKB', 'TEKNOLOGI BINAAN'),
(273, '8201', 'PEE', 'PRINSIP ELEKTRIK DAN ELEKTRONIK'),
(274, '8202', 'AEE', 'APLIKASI ELEKTRIK DAN ELEKTRONIK'),
(275, '8301', 'PBK', 'PEMESINAN BERKOMPUTER'),
(276, '8302', 'ABM', 'AMALAN BENGKEL MEKANIKAL'),
(277, '8311', 'PYJ', 'PENYEJUKAN'),
(282, '8331', 'KRK', 'KIMPALAN ARKA'),
(309, '8870', 'AKK', 'ASUHAN KANAK-KANAK'),
(310, '8871', 'MMK', 'MENGASUH DAN MEMBIMBING KANAK-KANAK'),
(311, '8881 / 8603', 'PTM', 'PENGELUARAN TANAMAN'),
(312, '8882 / 8605', 'PTN', 'PENGELUARAN TERNAKAN'),
(313, '8883 / 8602', 'HHL', 'HORTIKULTUR HIASAN DAN LANDSKAP'),
(314, '8884', 'JLG', 'KEJENTERAAN LADANG'),
(315, '8885', 'LDG', 'PENGURUSAN LADANG'),
(316, '9216', 'KSE', 'KESUSASTERAAN CINA'),
(317, '9217', 'KST', 'KESUSASTERAAN TAMIL'),
(318, '9221', 'BK', 'BIBLE KNOWLEDGE'),
(319, '9303', 'BF', 'BAHASA PERANCIS'),
(320, '9378', 'BPJ', 'BAHASA PUNJABI'),
(321, '2612', 'KVL', 'KOMUNIKASI VISUAL'),
(322, '2613', 'SNH', 'SENI HALUS'),
(323, '2614', 'RKB', 'REKABENTUK'),
(324, '2622', 'MZK', 'MUZIK'),
(325, '2631', 'TRI', 'TARI'),
(326, '2641', 'TAT', 'TEATER'),
(327, '6357', 'BKD', 'BAHASA KADAZAN/DUSUN'),
(328, '8551', 'PDR', 'PELANCONGAN DAN REKREASI'),
(329, '8552', 'AMP', 'ASAS KEMAHIRAN PELANCONGAN'),
(330, '8601', 'JPT', 'KEJENTERAAN PERTANIAN'),
(331, '8604', 'PHP', 'PEMPROSESAN HASIL PERTANIAN'),
(332, '6401', 'BG', 'BAHASA JERMAN'),
(333, '6405', 'BJ', 'BAHASA JEPUN'),
(335, '8830', 'KPU', 'KERJA PENYEJUKAN & PENYAMANAN UDARA'),
(336, '8831', 'LGP', 'LUKISAN GEOMETRI & PENYAMANAN UDARA'),
(337, '8843', 'AMM', 'ASAS PEMEROSESAN MAKLUMAT'),
(338, '8861', 'TKR', 'TEKNOLOGI KATERING'),
(339, '8862', 'PPM', 'PENYEDIAAN & PERKHIDMATAN MAKANAN'),
(340, '8863', 'TRF', 'TEKNOLOGI REKAAN FESYEN & MEMBUAT PAKAIAN'),
(341, '8864', 'RFP', 'REKAAN FESYEN & MEMBUAT PAKAIAN'),
(342, '8865', 'TSK', 'TEKNOLOGI SENI KECANTIKAN'),
(343, '8866', 'PMR', 'PERSOLEKAN & MENDANDAN RAMBUT'),
(344, '8868', 'TBK', 'TEKNOLOGI BAKERI & KONFEKSIONERI'),
(346, '8820', 'TGN', 'TEKNOLOGI ELEKTRONIK'),
(347, '8821', 'RTV', 'MENSERVIS RADIO & TV'),
(348, '8822', 'LGN', 'LUKISAN GEOMETRI & ELEKTRONIK'),
(349, '8823', 'TKL', 'TEKNOLOGI KIMPALAN & FABRIKASI LOGAM'),
(350, '8824', 'KK ', 'KERJA KIMPALAN #'),
(351, '8825', 'LGF', 'LUKISAN GEOMETRI & FABRIKASI LOGAM'),
(352, '8826', 'TGA', 'TEKNOLOGI AUTOMOTIF'),
(353, '8827', 'SMK', 'MENSERVIS & MEMBAIKI KENDERAAN'),
(354, '8828', 'LGA', 'LUKISAN GEOMETRI & AUTOMOTIF'),
(355, '8829', 'TPU', 'TEKNOLOGI PENYEJUKAN & PENYAMANAN UDARA'),
(356, '8312', 'PYU', 'PENYAMANAN UDARA'),
(357, '8321', 'ATK', 'AUTOMOTIF KENDERAAN'),
(358, '8322', 'AED', 'AUTOMOTIF ELEKTRIK DAN DISEL'),
(360, '8332', 'KGS', 'KIMPALAN GAS'),
(361, '8401', 'FOP', 'FUNDAMENTALS OF PROGRAMMING'),
(362, '8402', 'PDT', 'PROGRAMMING AND DEVELOPMENT TOOLS'),
(363, '8501', 'MPK', 'MEMBUAT PAKAIAN'),
(364, '8502', 'POP', 'POLA PAKAIAN'),
(365, '8511', 'MRP', 'ROTI DAN MAKANAN YIS'),
(366, '8512', 'PTS', 'PATISSERIE'),
(367, '8521', 'SOL', 'PERSOLEKAN'),
(368, '8522', 'DDR', 'DANDANAN RAMBUT'),
(369, '8531', 'PPK', 'PENGAJIAN PERKEMBANGAN KANAK-KANAK'),
(370, '8532', 'PKA', 'PERKHIDMATAN AWAL KANAK-KANAK'),
(371, '8541', 'PBT', 'PENYEDIAAN MASAKAN BARAT DAN TIMUR'),
(372, '8542', 'PMM', 'PENYAJIAN MAKANAN DAN MINUMAN'),
(373, '8701', 'AKP', 'APLIKASI KOMPUTER DALAM PERNIAGAAN'),
(374, '8702', 'PAP', 'PERAKAUNAN PERNIAGAAN'),
(375, '8703', 'TPP', 'TEKNOLOGI PEJABAT PERNIAGAAN'),
(376, '8811', 'TBM', 'TEKNOLOGI BENGKEL MESIN'),
(377, '8812', 'KMM', 'KERJA MENGGEGAS & MELARIK'),
(378, '8813', 'LGM', 'LUKISAN GEOMETRI & MESIN'),
(379, '8814', 'TBB', 'TEKNOLOGI BINAAN BANGUNAN'),
(380, '8815', 'KKB', 'KERJA KAYU & BATA'),
(381, '8816', 'LGB', 'LUKISAN GEOMETRI & BINAAN BANGUNAN'),
(382, '8817', 'TGR', 'TEKNOLOGI ELEKTRIK'),
(383, '8818', 'PKE', 'PEMASANGAN & KAWALAN ELEKTRIK'),
(384, '8819', 'LGR', 'LUKISAN GEOMETRI & ELEKTRIK'),
(385, '0000', 'ZZZ', 'MATA PELAJARAN SELAIN DI ATAS'),
(386, '3767', 'EKO', 'EKONOMI');

-- --------------------------------------------------------

--
-- Table structure for table `state_my`
--

CREATE TABLE `state_my` (
  `city_id` int(11) NOT NULL,
  `state_code` varchar(20) DEFAULT NULL,
  `state_name` varchar(50) DEFAULT NULL,
  `city_name` varchar(100) DEFAULT NULL,
  `keyin_by` varchar(50) DEFAULT NULL,
  `keyin_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `state_my`
--

INSERT INTO `state_my` (`city_id`, `state_code`, `state_name`, `city_name`, `keyin_by`, `keyin_date`) VALUES
(1, 'MYS01', 'JOHOR', 'Johor Bahru', '', '0000-00-00 00:00:00'),
(2, 'MYS01', 'JOHOR', 'Tebrau', '', '0000-00-00 00:00:00'),
(3, 'MYS01', 'JOHOR', 'Pasir Gudang', '', '0000-00-00 00:00:00'),
(4, 'MYS01', 'JOHOR', 'Bukit Indah', '', '0000-00-00 00:00:00'),
(5, 'MYS01', 'JOHOR', 'Skudai', '', '0000-00-00 00:00:00'),
(6, 'MYS01', 'JOHOR', 'Kluang', '', '0000-00-00 00:00:00'),
(7, 'MYS01', 'JOHOR', 'Batu Pahat', '', '0000-00-00 00:00:00'),
(8, 'MYS01', 'JOHOR', 'Muar', '', '0000-00-00 00:00:00'),
(9, 'MYS01', 'JOHOR', 'Ulu Tiram', '', '0000-00-00 00:00:00'),
(10, 'MYS01', 'JOHOR', 'Senai', '', '0000-00-00 00:00:00'),
(11, 'MYS01', 'JOHOR', 'Segamat', '', '0000-00-00 00:00:00'),
(12, 'MYS01', 'JOHOR', 'Kulai', '', '0000-00-00 00:00:00'),
(13, 'MYS01', 'JOHOR', 'Kota Tinggi', '', '0000-00-00 00:00:00'),
(14, 'MYS01', 'JOHOR', 'Pontian Kechil', '', '0000-00-00 00:00:00'),
(15, 'MYS01', 'JOHOR', 'Tangkak', '', '0000-00-00 00:00:00'),
(16, 'MYS01', 'JOHOR', 'Bukit Bakri', '', '0000-00-00 00:00:00'),
(17, 'MYS01', 'JOHOR', 'Yong Peng', '', '0000-00-00 00:00:00'),
(18, 'MYS01', 'JOHOR', 'Pekan Nenas', '', '0000-00-00 00:00:00'),
(19, 'MYS01', 'JOHOR', 'Labis', '', '0000-00-00 00:00:00'),
(20, 'MYS01', 'JOHOR', 'Mersing', '', '0000-00-00 00:00:00'),
(21, 'MYS01', 'JOHOR', 'Simpang Renggam', '', '0000-00-00 00:00:00'),
(22, 'MYS01', 'JOHOR', 'Parit Raja', '', '0000-00-00 00:00:00'),
(23, 'MYS01', 'JOHOR', 'Kelapa Sawit', '', '0000-00-00 00:00:00'),
(24, 'MYS01', 'JOHOR', 'Buloh Kasap', '', '0000-00-00 00:00:00'),
(25, 'MYS01', 'JOHOR', 'Chaah', '', '0000-00-00 00:00:00'),
(26, 'MYS02', 'KEDAH', 'Sungai Petani', '', '0000-00-00 00:00:00'),
(27, 'MYS02', 'KEDAH', 'Alor Setar', '', '0000-00-00 00:00:00'),
(28, 'MYS02', 'KEDAH', 'Kulim', '', '0000-00-00 00:00:00'),
(29, 'MYS02', 'KEDAH', 'Jitra', '', '0000-00-00 00:00:00'),
(30, 'MYS02', 'KEDAH', 'Baling', '', '0000-00-00 00:00:00'),
(31, 'MYS02', 'KEDAH', 'Pendang', '', '0000-00-00 00:00:00'),
(32, 'MYS02', 'KEDAH', 'Langkawi', '', '0000-00-00 00:00:00'),
(33, 'MYS02', 'KEDAH', 'Yan', '', '0000-00-00 00:00:00'),
(34, 'MYS02', 'KEDAH', 'Sik', '', '0000-00-00 00:00:00'),
(35, 'MYS02', 'KEDAH', 'Kuala Nerang', '', '0000-00-00 00:00:00'),
(36, 'MYS02', 'KEDAH', 'Pokok Sena', '', '0000-00-00 00:00:00'),
(37, 'MYS02', 'KEDAH', 'Bandar Baharu', '', '0000-00-00 00:00:00'),
(38, 'MYS03', 'KELANTAN', 'Kota Bharu', '', '0000-00-00 00:00:00'),
(39, 'MYS03', 'KELANTAN', 'Pengkalan Kubor', '', '0000-00-00 00:00:00'),
(40, 'MYS03', 'KELANTAN', 'Tanah Merah', '', '0000-00-00 00:00:00'),
(41, 'MYS03', 'KELANTAN', 'Peringat', '', '0000-00-00 00:00:00'),
(42, 'MYS03', 'KELANTAN', 'Wakaf Bharu', '', '0000-00-00 00:00:00'),
(43, 'MYS03', 'KELANTAN', 'Kadok', '', '0000-00-00 00:00:00'),
(44, 'MYS03', 'KELANTAN', 'Pasir Mas', '', '0000-00-00 00:00:00'),
(45, 'MYS03', 'KELANTAN', 'Gua Musang', '', '0000-00-00 00:00:00'),
(46, 'MYS03', 'KELANTAN', 'Kuala Krai', '', '0000-00-00 00:00:00'),
(47, 'MYS03', 'KELANTAN', 'Tumpat', '', '0000-00-00 00:00:00'),
(48, 'MYS04', 'MELAKA', 'Bandaraya Melaka', '', '0000-00-00 00:00:00'),
(49, 'MYS04', 'MELAKA', 'Bukit Baru', '', '0000-00-00 00:00:00'),
(50, 'MYS04', 'MELAKA', 'Ayer Keroh', '', '0000-00-00 00:00:00'),
(51, 'MYS04', 'MELAKA', 'Klebang', '', '0000-00-00 00:00:00'),
(52, 'MYS04', 'MELAKA', 'Masjid Tanah', '', '0000-00-00 00:00:00'),
(53, 'MYS04', 'MELAKA', 'Sungai Udang', '', '0000-00-00 00:00:00'),
(54, 'MYS04', 'MELAKA', 'Batu Berendam', '', '0000-00-00 00:00:00'),
(55, 'MYS04', 'MELAKA', 'Alor Gajah', '', '0000-00-00 00:00:00'),
(56, 'MYS04', 'MELAKA', 'Bukit Rambai', '', '0000-00-00 00:00:00'),
(57, 'MYS04', 'MELAKA', 'Ayer Molek', '', '0000-00-00 00:00:00'),
(58, 'MYS04', 'MELAKA', 'Bemban', '', '0000-00-00 00:00:00'),
(59, 'MYS04', 'MELAKA', 'Kuala Sungai Baru', '', '0000-00-00 00:00:00'),
(60, 'MYS04', 'MELAKA', 'Pulau Sebang', '', '0000-00-00 00:00:00'),
(61, 'MYS05', 'NEGERI SEMBILAN', 'Seremban', '', '0000-00-00 00:00:00'),
(62, 'MYS05', 'NEGERI SEMBILAN', 'Port Dickson', '', '0000-00-00 00:00:00'),
(63, 'MYS05', 'NEGERI SEMBILAN', 'Nilai', '', '0000-00-00 00:00:00'),
(64, 'MYS05', 'NEGERI SEMBILAN', 'Bahau', '', '0000-00-00 00:00:00'),
(65, 'MYS05', 'NEGERI SEMBILAN', 'Tampin', '', '0000-00-00 00:00:00'),
(66, 'MYS05', 'NEGERI SEMBILAN', 'Kuala Pilah', '', '0000-00-00 00:00:00'),
(67, 'MYS06', 'PAHANG', 'Kuantan', '', '0000-00-00 00:00:00'),
(68, 'MYS06', 'PAHANG', 'Pekan', '', '0000-00-00 00:00:00'),
(69, 'MYS06', 'PAHANG', 'Temerloh', '', '0000-00-00 00:00:00'),
(70, 'MYS06', 'PAHANG', 'Bentong', '', '0000-00-00 00:00:00'),
(71, 'MYS06', 'PAHANG', 'Mentakab', '', '0000-00-00 00:00:00'),
(72, 'MYS06', 'PAHANG', 'Raub', '', '0000-00-00 00:00:00'),
(73, 'MYS06', 'PAHANG', 'Jerantut', '', '0000-00-00 00:00:00'),
(74, 'MYS06', 'PAHANG', 'Kuala Lipis', '', '0000-00-00 00:00:00'),
(75, 'MYS06', 'PAHANG', 'Bandar Jengka', '', '0000-00-00 00:00:00'),
(76, 'MYS06', 'PAHANG', 'Bukit Tinggi', '', '0000-00-00 00:00:00'),
(77, 'MYS07', 'PULAU PINANG', 'Bukit Mertajam', '', '0000-00-00 00:00:00'),
(78, 'MYS07', 'PULAU PINANG', 'Georgetown', '', '0000-00-00 00:00:00'),
(79, 'MYS07', 'PULAU PINANG', 'Sungai Ara', '', '0000-00-00 00:00:00'),
(80, 'MYS07', 'PULAU PINANG', 'Gelugor', '', '0000-00-00 00:00:00'),
(81, 'MYS07', 'PULAU PINANG', 'Air Itam', '', '0000-00-00 00:00:00'),
(82, 'MYS07', 'PULAU PINANG', 'Butterworth', '', '0000-00-00 00:00:00'),
(83, 'MYS07', 'PULAU PINANG', 'Perai', '', '0000-00-00 00:00:00'),
(84, 'MYS07', 'PULAU PINANG', 'Nibong Tebal', '', '0000-00-00 00:00:00'),
(85, 'MYS07', 'PULAU PINANG', 'Permatang?Pauh', '', '0000-00-00 00:00:00'),
(86, 'MYS07', 'PULAU PINANG', 'Tanjung Tokong', '', '0000-00-00 00:00:00'),
(87, 'MYS07', 'PULAU PINANG', 'Kepala Batas', '', '0000-00-00 00:00:00'),
(88, 'MYS07', 'PULAU PINANG', 'Tanjung Bungah', '', '0000-00-00 00:00:00'),
(89, 'MYS07', 'PULAU PINANG', 'Juru', '', '0000-00-00 00:00:00'),
(90, 'MYS15', 'WILAYAH PERSEKUTUAN', 'Labuan', '', '0000-00-00 00:00:00'),
(91, 'MYS08', 'PERAK', 'Ipoh', '', '0000-00-00 00:00:00'),
(92, 'MYS08', 'PERAK', 'Taiping', '', '0000-00-00 00:00:00'),
(93, 'MYS08', 'PERAK', 'Sitiawan', '', '0000-00-00 00:00:00'),
(94, 'MYS08', 'PERAK', 'Simpang Empat', '', '0000-00-00 00:00:00'),
(95, 'MYS08', 'PERAK', 'Teluk Intan', '', '0000-00-00 00:00:00'),
(96, 'MYS08', 'PERAK', 'Batu Gajah', '', '0000-00-00 00:00:00'),
(97, 'MYS08', 'PERAK', 'Lumut', '', '0000-00-00 00:00:00'),
(98, 'MYS08', 'PERAK', 'Kampung Koh', '', '0000-00-00 00:00:00'),
(99, 'MYS08', 'PERAK', 'Kuala Kangsar', '', '0000-00-00 00:00:00'),
(100, 'MYS08', 'PERAK', 'Sungai Siput', '', '0000-00-00 00:00:00'),
(101, 'MYS08', 'PERAK', 'Tapah', '', '0000-00-00 00:00:00'),
(102, 'MYS08', 'PERAK', 'Bidor', '', '0000-00-00 00:00:00'),
(103, 'MYS08', 'PERAK', 'Parit Buntar', '', '0000-00-00 00:00:00'),
(104, 'MYS08', 'PERAK', 'Ayer Tawar', '', '0000-00-00 00:00:00'),
(105, 'MYS08', 'PERAK', 'Bagan Serai', '', '0000-00-00 00:00:00'),
(106, 'MYS08', 'PERAK', 'Tanjung Malim', '', '0000-00-00 00:00:00'),
(107, 'MYS08', 'PERAK', 'Lawan Kuda Baharu', '', '0000-00-00 00:00:00'),
(108, 'MYS08', 'PERAK', 'Pantai Remis', '', '0000-00-00 00:00:00'),
(109, 'MYS08', 'PERAK', 'Kampar', '', '0000-00-00 00:00:00'),
(110, 'MYS08', 'PERAK', 'Kampung Gajah', '', '0000-00-00 00:00:00'),
(111, 'MYS09', 'PERLIS', 'Kangar', '', '0000-00-00 00:00:00'),
(112, 'MYS09', 'PERLIS', 'Arau', '', '0000-00-00 00:00:00'),
(113, 'MYS09', 'PERLIS', 'Padang Besar', '', '0000-00-00 00:00:00'),
(114, 'MYS10', 'SELANGOR', 'Subang Jaya', '', '0000-00-00 00:00:00'),
(115, 'MYS10', 'SELANGOR', 'Klang', '', '0000-00-00 00:00:00'),
(116, 'MYS10', 'SELANGOR', 'Ampang Jaya', '', '0000-00-00 00:00:00'),
(117, 'MYS10', 'SELANGOR', 'Shah Alam', '', '0000-00-00 00:00:00'),
(118, 'MYS10', 'SELANGOR', 'Petaling Jaya', '', '0000-00-00 00:00:00'),
(119, 'MYS10', 'SELANGOR', 'Cheras', '', '0000-00-00 00:00:00'),
(120, 'MYS10', 'SELANGOR', 'Kajang', '', '0000-00-00 00:00:00'),
(121, 'MYS10', 'SELANGOR', 'Selayang', '', '0000-00-00 00:00:00'),
(122, 'MYS10', 'SELANGOR', 'Rawang', '', '0000-00-00 00:00:00'),
(123, 'MYS10', 'SELANGOR', 'Taman Greenwood', '', '0000-00-00 00:00:00'),
(124, 'MYS10', 'SELANGOR', 'Semenyih', '', '0000-00-00 00:00:00'),
(125, 'MYS10', 'SELANGOR', 'Banting', '', '0000-00-00 00:00:00'),
(126, 'MYS10', 'SELANGOR', 'Balakong', '', '0000-00-00 00:00:00'),
(127, 'MYS10', 'SELANGOR', 'Gombak Setia', '', '0000-00-00 00:00:00'),
(128, 'MYS10', 'SELANGOR', 'Kuala Selangor', '', '0000-00-00 00:00:00'),
(129, 'MYS10', 'SELANGOR', 'Serendah', '', '0000-00-00 00:00:00'),
(130, 'MYS10', 'SELANGOR', 'Bukit Beruntung', '', '0000-00-00 00:00:00'),
(131, 'MYS10', 'SELANGOR', 'Pengkalan Kundang', '', '0000-00-00 00:00:00'),
(132, 'MYS10', 'SELANGOR', 'Jenjarom', '', '0000-00-00 00:00:00'),
(133, 'MYS10', 'SELANGOR', 'Sungai Besar', '', '0000-00-00 00:00:00'),
(134, 'MYS10', 'SELANGOR', 'Batu Arang', '', '0000-00-00 00:00:00'),
(135, 'MYS10', 'SELANGOR', 'Tanjung Sepat', '', '0000-00-00 00:00:00'),
(136, 'MYS10', 'SELANGOR', 'Kuang', '', '0000-00-00 00:00:00'),
(137, 'MYS10', 'SELANGOR', 'Kuala Kubu Baharu', '', '0000-00-00 00:00:00'),
(138, 'MYS10', 'SELANGOR', 'Batang Berjuntai', '', '0000-00-00 00:00:00'),
(139, 'MYS10', 'SELANGOR', 'Bandar Baru Salak Tinggi', '', '0000-00-00 00:00:00'),
(140, 'MYS10', 'SELANGOR', 'Sekinchan', '', '0000-00-00 00:00:00'),
(141, 'MYS10', 'SELANGOR', 'Sabak', '', '0000-00-00 00:00:00'),
(142, 'MYS10', 'SELANGOR', 'Tanjung Karang', '', '0000-00-00 00:00:00'),
(143, 'MYS10', 'SELANGOR', 'Beranang', '', '0000-00-00 00:00:00'),
(144, 'MYS10', 'SELANGOR', 'Sungai Pelek', '', '0000-00-00 00:00:00'),
(145, 'MYS11', 'TERENGGANU', 'Kuala Terengganu', '', '0000-00-00 00:00:00'),
(146, 'MYS11', 'TERENGGANU', 'Chukai', '', '0000-00-00 00:00:00'),
(147, 'MYS11', 'TERENGGANU', 'Dungun', '', '0000-00-00 00:00:00'),
(148, 'MYS11', 'TERENGGANU', 'Kerteh', '', '0000-00-00 00:00:00'),
(149, 'MYS11', 'TERENGGANU', 'Kuala Berang', '', '0000-00-00 00:00:00'),
(150, 'MYS11', 'TERENGGANU', 'Marang', '', '0000-00-00 00:00:00'),
(151, 'MYS11', 'TERENGGANU', 'Paka', '', '0000-00-00 00:00:00'),
(152, 'MYS11', 'TERENGGANU', 'Jerteh', '', '0000-00-00 00:00:00'),
(153, 'MYS12', 'SABAH', 'Kota Kinabalu', '', '0000-00-00 00:00:00'),
(154, 'MYS12', 'SABAH', 'Sandakan', '', '0000-00-00 00:00:00'),
(155, 'MYS12', 'SABAH', 'Tawau', '', '0000-00-00 00:00:00'),
(156, 'MYS12', 'SABAH', 'Lahad Datu', '', '0000-00-00 00:00:00'),
(157, 'MYS12', 'SABAH', 'Keningau', '', '0000-00-00 00:00:00'),
(158, 'MYS12', 'SABAH', 'Putatan', '', '0000-00-00 00:00:00'),
(159, 'MYS12', 'SABAH', 'Donggongon', '', '0000-00-00 00:00:00'),
(160, 'MYS12', 'SABAH', 'Semporna', '', '0000-00-00 00:00:00'),
(161, 'MYS12', 'SABAH', 'Kudat', '', '0000-00-00 00:00:00'),
(162, 'MYS12', 'SABAH', 'Kunak', '', '0000-00-00 00:00:00'),
(163, 'MYS12', 'SABAH', 'Papar', '', '0000-00-00 00:00:00'),
(164, 'MYS12', 'SABAH', 'Ranau', '', '0000-00-00 00:00:00'),
(165, 'MYS12', 'SABAH', 'Beaufort', '', '0000-00-00 00:00:00'),
(166, 'MYS12', 'SABAH', 'Kinarut', '', '0000-00-00 00:00:00'),
(167, 'MYS12', 'SABAH', 'Kota Belud', '', '0000-00-00 00:00:00'),
(168, 'MYS13', 'SARAWAK', 'Kuching', '', '0000-00-00 00:00:00'),
(169, 'MYS13', 'SARAWAK', 'Miri', '', '0000-00-00 00:00:00'),
(170, 'MYS13', 'SARAWAK', 'Sibu', '', '0000-00-00 00:00:00'),
(171, 'MYS13', 'SARAWAK', 'Bintulu', '', '0000-00-00 00:00:00'),
(172, 'MYS13', 'SARAWAK', 'Limbang', '', '0000-00-00 00:00:00'),
(173, 'MYS13', 'SARAWAK', 'Sarikei', '', '0000-00-00 00:00:00'),
(174, 'MYS13', 'SARAWAK', 'Sri Aman', '', '0000-00-00 00:00:00'),
(175, 'MYS13', 'SARAWAK', 'Kapit', '', '0000-00-00 00:00:00'),
(176, 'MYS13', 'SARAWAK', 'Batu Delapan Bazaar', '', '0000-00-00 00:00:00'),
(177, 'MYS13', 'SARAWAK', 'Kota Samarahan', '', '0000-00-00 00:00:00'),
(178, 'MYS14', 'WILAYAH PERSEKUTUAN', 'Kuala Lumpur', '', '0000-00-00 00:00:00'),
(179, 'MYS16', 'WILAYAH PERSEKUTUAN', 'Putrajaya', '', '0000-00-00 00:00:00'),
(180, 'MYSLL', 'OTHERS', 'OTHERS', '', '0000-00-00 00:00:00'),
(181, 'MYS06', 'PAHANG', 'Bera', NULL, NULL),
(182, 'MYS10', 'SELANGOR', 'Batu Caves', NULL, NULL),
(183, 'MYSO3', 'Kelantan', 'Pasir Putih', NULL, NULL),
(184, 'MYS08', 'PERAK', 'Bagan Datuk', NULL, NULL),
(185, 'MYS08', 'PERAK', 'Hutan Melintang', NULL, NULL),
(186, 'MYS10', 'SELANGOR', 'Sri Petaling', NULL, NULL),
(187, 'MYS11', 'TERENGGANU', 'Kemaman', NULL, NULL),
(189, 'MYS10', 'SELANGOR', 'Gombak', NULL, NULL),
(190, 'MYS01', 'JOHOR', 'Pontian', NULL, NULL),
(191, 'MYS11', 'TERENGGANU', 'Setiu', NULL, NULL),
(192, 'MYS10', 'SELANGOR', 'Bandar Baru Bangi', NULL, NULL);

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
  `file` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `stud_name`, `stud_ic`, `password`, `stud_email`, `stud_nation`, `pob`, `gender`, `dob`, `marital`, `stud_race`, `stud_religion`, `nooku`, `okutype`, `about`, `height`, `weight`, `role`, `app_status`, `intake`, `date`, `app_option`, `file`) VALUES
(5, 'ADMIN', '970906335112', '$2y$04$LOMfh/ny0EASlAC8F1uf4Ov2CthfrTBXEJx1vlZ7W79o3xD6B0p7y', 'admin@gmail.com', ' ', ' ', ' ', '', ' ', ' ', ' ', '', ' ', '', '', '', 'admin', 'apply', '', '', '', ''),
(27, 'mohd', '951108065573', '$2y$04$Pb8kEChRo.2UF9MVMXUez.13I8BTv0MDxMdJWMX4M1cpM2IXTREby', 'ninjag219@gmail.com', '0', 'MYS01', 'F', '04/26/1997', 'B', '0100', '1', '', 'NULL', ' Test ', '161', '55', 'student', 'Applied', 'sem1 22/23', '28/03/2022', 'on', ''),
(29, 'ANEES NABYLA', '970426115444', '$2y$04$cTmKGG4RYWulN4.3v/sgRuB7E6cPT9fkmDeZOdS8tgjas6fonaPCq', 'nabylarosman@gmail.com', '1', 'MYS11', 'F', '1997-04-26', 'B', '0100', '1', '', 'NULL', 'hello', '148', '36', 'student', 'Submitted', 'sem1 22/23', '11/04/2022', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `working_experience`
--

CREATE TABLE `working_experience` (
  `id` int(10) NOT NULL,
  `stud_ic` varchar(12) NOT NULL,
  `type` varchar(30) NOT NULL,
  `position` varchar(30) NOT NULL,
  `year_start` date NOT NULL,
  `year_end` date NOT NULL,
  `category` varchar(30) NOT NULL,
  `organization` varchar(30) NOT NULL,
  `employer_name` varchar(30) NOT NULL,
  `employer_address` varchar(50) NOT NULL,
  `job_scope` varchar(30) NOT NULL,
  `significant` varchar(30) NOT NULL,
  `fileWork` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `working_experience`
--

INSERT INTO `working_experience` (`id`, `stud_ic`, `type`, `position`, `year_start`, `year_end`, `category`, `organization`, `employer_name`, `employer_address`, `job_scope`, `significant`, `fileWork`) VALUES
(31, '951108065573', 'Other', 'ty', '2020-04-19', '2020-04-19', 'wdw', 'ddw', 'dd', '848-1 JALAN ORKID KAMPUNG BARU\r\nKERTEH', 'gr', 'rg', 'MEDICAL CLAIM (7).pdf'),
(32, '970426115444', 'Employment', 'test', '2020-04-19', '2020-04-19', 'wdw', 's', 'sdf', '848-1 JALAN ORKID KAMPUNG BARU\r\nKERTEH', 'rfr', 'rfrf', 'UAT ILMU +.pdf'),
(33, '970426115444', 'test', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic`
--
ALTER TABLE `academic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `additional_qualification`
--
ALTER TABLE `additional_qualification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aliran`
--
ALTER TABLE `aliran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD UNIQUE KEY `stud_ic` (`stud_ic`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_ptmk`
--
ALTER TABLE `data_ptmk`
  ADD PRIMARY KEY (`NOKP`);

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `document_type`
--
ALTER TABLE `document_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`gender_id`);

--
-- Indexes for table `guardian_relations`
--
ALTER TABLE `guardian_relations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `household`
--
ALTER TABLE `household`
  ADD PRIMARY KEY (`household_id`);

--
-- Indexes for table `household_income`
--
ALTER TABLE `household_income`
  ADD PRIMARY KEY (`income_id`);

--
-- Indexes for table `institution`
--
ALTER TABLE `institution`
  ADD UNIQUE KEY `id_2` (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `marital`
--
ALTER TABLE `marital`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nationality`
--
ALTER TABLE `nationality`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oku_type`
--
ALTER TABLE `oku_type`
  ADD PRIMARY KEY (`oku_id`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD UNIQUE KEY `stud_ic` (`stud_ic`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`pg_id`);

--
-- Indexes for table `programselection`
--
ALTER TABLE `programselection`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `program_degree`
--
ALTER TABLE `program_degree`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `program_diploma`
--
ALTER TABLE `program_diploma`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pro_qualification_level`
--
ALTER TABLE `pro_qualification_level`
  ADD PRIMARY KEY (`pql_id`);

--
-- Indexes for table `qualification_info`
--
ALTER TABLE `qualification_info`
  ADD UNIQUE KEY `stud_ic` (`stud_ic`);

--
-- Indexes for table `race`
--
ALTER TABLE `race`
  ADD PRIMARY KEY (`race_id`);

--
-- Indexes for table `religion`
--
ALTER TABLE `religion`
  ADD PRIMARY KEY (`religion_id`);

--
-- Indexes for table `school_type`
--
ALTER TABLE `school_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spm_grade`
--
ALTER TABLE `spm_grade`
  ADD PRIMARY KEY (`spm_id`);

--
-- Indexes for table `spm_subject`
--
ALTER TABLE `spm_subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `state_my`
--
ALTER TABLE `state_my`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `working_experience`
--
ALTER TABLE `working_experience`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic`
--
ALTER TABLE `academic`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `additional_qualification`
--
ALTER TABLE `additional_qualification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `aliran`
--
ALTER TABLE `aliran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `document`
--
ALTER TABLE `document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `document_type`
--
ALTER TABLE `document_type`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `gender_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `guardian_relations`
--
ALTER TABLE `guardian_relations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `household`
--
ALTER TABLE `household`
  MODIFY `household_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `household_income`
--
ALTER TABLE `household_income`
  MODIFY `income_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `marital`
--
ALTER TABLE `marital`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `nationality`
--
ALTER TABLE `nationality`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `oku_type`
--
ALTER TABLE `oku_type`
  MODIFY `oku_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `pg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `programselection`
--
ALTER TABLE `programselection`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `program_degree`
--
ALTER TABLE `program_degree`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pro_qualification_level`
--
ALTER TABLE `pro_qualification_level`
  MODIFY `pql_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `race`
--
ALTER TABLE `race`
  MODIFY `race_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=765;

--
-- AUTO_INCREMENT for table `religion`
--
ALTER TABLE `religion`
  MODIFY `religion_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `school_type`
--
ALTER TABLE `school_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `spm_grade`
--
ALTER TABLE `spm_grade`
  MODIFY `spm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `spm_subject`
--
ALTER TABLE `spm_subject`
  MODIFY `subject_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=387;

--
-- AUTO_INCREMENT for table `state_my`
--
ALTER TABLE `state_my`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=193;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `working_experience`
--
ALTER TABLE `working_experience`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
