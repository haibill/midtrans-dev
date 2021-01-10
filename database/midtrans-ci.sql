-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2021 at 06:48 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `midtrans-ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_year`
--

CREATE TABLE `academic_year` (
  `id` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  `created_date` varchar(50) NOT NULL,
  `created_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `academic_year`
--

INSERT INTO `academic_year` (`id`, `name`, `status`, `created_date`, `created_by`) VALUES
('5485569818', '2021/2022', 'ACTIVE', '02-01-2021 08:42:48', 'admin_fe'),
('9358162611', '2020/2021', 'ACTIVE', '29-12-2020 10:05:26', 'admin_fe');

-- --------------------------------------------------------

--
-- Table structure for table `class_name`
--

CREATE TABLE `class_name` (
  `id` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `fullname` text NOT NULL,
  `description` text NOT NULL,
  `grade_id` varchar(10) NOT NULL,
  `majors_id` varchar(10) NOT NULL,
  `academic_year_id` varchar(10) NOT NULL,
  `homeroom_teacher_id` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `created_date` varchar(50) NOT NULL,
  `created_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class_name`
--

INSERT INTO `class_name` (`id`, `name`, `fullname`, `description`, `grade_id`, `majors_id`, `academic_year_id`, `homeroom_teacher_id`, `status`, `created_date`, `created_by`) VALUES
('7001771212', 'THE RAID', 'Republik Anak IPS Dua', 'empty', '2434136911', '5782691953', '5485569818', '5139933563', 'ACTIVE', '07-01-2021 12:02:58', 'admin_fe');

-- --------------------------------------------------------

--
-- Table structure for table `coa`
--

CREATE TABLE `coa` (
  `coa_code` varchar(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `header` varchar(1) NOT NULL,
  `status` varchar(10) NOT NULL,
  `created_date` varchar(50) NOT NULL,
  `created_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coa`
--

INSERT INTO `coa` (`coa_code`, `name`, `header`, `status`, `created_date`, `created_by`) VALUES
('111', 'Kas', '1', 'ACTIVE', '29-12-2020 07:53:56', 'admin_fe'),
('112', 'Piutang', '1', 'ACTIVE', '30-12-2020 09:46:31', 'admin_fe');

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `id` varchar(10) NOT NULL,
  `name` varchar(2) NOT NULL,
  `label` varchar(50) NOT NULL,
  `roman_numerals` varchar(5) NOT NULL,
  `status` varchar(25) NOT NULL,
  `created_date` varchar(50) NOT NULL,
  `created_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`id`, `name`, `label`, `roman_numerals`, `status`, `created_date`, `created_by`) VALUES
('2434136911', '12', 'Dua Belas', 'XII', 'ACTIVE', '29-12-2020 06:44:32', 'admin_fe'),
('4298863705', '10', 'Sepuluh', 'X', 'ACTIVE', '29-12-2020 06:05:59', 'admin_fe'),
('6689363010', '11', 'Sebelas', 'XI', 'ACTIVE', '29-12-2020 06:39:37', 'admin_fe');

-- --------------------------------------------------------

--
-- Table structure for table `homeroom_teacher`
--

CREATE TABLE `homeroom_teacher` (
  `id` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone_number` varchar(14) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `available` varchar(3) NOT NULL,
  `status` varchar(10) NOT NULL,
  `created_date` varchar(50) NOT NULL,
  `created_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `homeroom_teacher`
--

INSERT INTO `homeroom_teacher` (`id`, `name`, `gender`, `phone_number`, `email`, `address`, `available`, `status`, `created_date`, `created_by`) VALUES
('0117576671', 'Minerva McGonagall', 'Female', '083824316898', 'minervacantik@gmail.com', 'Jl. Jatihandap', 'YES', 'ACTIVE', '02-01-2021 07:26:50', 'admin_fe'),
('3818811321', 'Sibyll Patricia Trelawney', 'Female', '081510737039', 'sibyl@gmail.com', 'Geger Kalong Tengah', 'YES', 'ACTIVE', '02-01-2021 07:32:15', 'admin_fe'),
('4453607775', 'Alastor \"Mad-Eye\" Moody', 'Male', '08985386660', 'madeye98@gmail.com', 'Jl. Cibaduyut', 'YES', 'ACTIVE', '02-01-2021 07:29:15', 'admin_fe'),
('4636733096', 'Horace Slughorn', 'Male', '081320583371', 'horace_bijaksana@gmail.com', 'Jl. Moh.Toha Bandung Kidul', 'YES', 'ACTIVE', '02-01-2021 07:30:24', 'admin_fe'),
('5139933563', 'Albus Dumbledore', 'Male', '081221576542', 'albusdumbledore@gmail.com', 'Komplek Perumahan Golf Garden Estate', 'NO', 'ACTIVE', '01-01-2021 11:36:07', 'admin_fe');

-- --------------------------------------------------------

--
-- Table structure for table `majors`
--

CREATE TABLE `majors` (
  `id` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `status` varchar(25) NOT NULL,
  `created_date` varchar(50) NOT NULL,
  `created_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `majors`
--

INSERT INTO `majors` (`id`, `name`, `description`, `status`, `created_date`, `created_by`) VALUES
('1268832635', 'IPA', 'Belajar tentang matematika, biologi, kimia, fisika', 'ACTIVE', '29-12-2020 07:14:52', 'admin_fe'),
('1828132993', 'Bahasa Indonesia', 'Penulisan, pengucapan kalimat bahasa indonesia', 'ACTIVE', '01-01-2021 10:57:18', 'admin_fe'),
('5782691953', 'IPS', 'Belajar tentang sosiologi, geografi, sejarah', 'ACTIVE', '29-12-2020 07:16:32', 'admin_fe');

-- --------------------------------------------------------

--
-- Table structure for table `midtrans`
--

CREATE TABLE `midtrans` (
  `order_id` varchar(255) NOT NULL,
  `student_id` varchar(10) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `gross_amount` int(11) NOT NULL,
  `payment_type` varchar(50) NOT NULL,
  `transaction_time` varchar(50) NOT NULL,
  `bank` varchar(50) NOT NULL,
  `va_number` text NOT NULL,
  `pdf_url` text NOT NULL,
  `status_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `id` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  `created_date` varchar(50) NOT NULL,
  `created_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`id`, `name`, `status`, `created_date`, `created_by`) VALUES
('7441777084', 'Semester Genap', 'ACTIVE', '29-12-2020 08:12:59', 'admin_fe'),
('8791530016', 'Semester Ganjil', 'ACTIVE', '29-12-2020 08:12:50', 'admin_fe');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone_number` varchar(14) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `available` varchar(3) NOT NULL,
  `parent_name` varchar(50) NOT NULL,
  `income` int(11) NOT NULL,
  `parent_phone_number` varchar(14) NOT NULL,
  `status` varchar(10) NOT NULL,
  `created_date` varchar(50) NOT NULL,
  `created_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `gender`, `phone_number`, `email`, `address`, `available`, `parent_name`, `income`, `parent_phone_number`, `status`, `created_date`, `created_by`) VALUES
('1882908289', 'Nadya Saphira Esfandiari', 'Female', '087702056725', 'nadyasaphira@gmail.com', 'Jl. Raya Ujung Berung', 'YES', 'Sugianto', 4000000, '087702056725', 'ACTIVE', '02-01-2021 08:03:13', 'admin_fe'),
('7967712782', 'Hilda Nathaniela', 'Female', '083134674553', 'hildaatobing@gmail.com', 'Ds. Pasir Jati', 'YES', 'Satromo', 2500000, '087752585512', 'ACTIVE', '02-01-2021 08:01:22', 'admin_fe'),
('9327233580', 'Denis Muhammad Irfan', 'Male', '081235122574', 'muhammadirfandenis@gmail.com', 'Perumnas Islamic Centre', 'YES', 'Didik', 2500000, '081235122574', 'ACTIVE', '02-01-2021 08:04:48', 'admin_fe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_year`
--
ALTER TABLE `academic_year`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_name`
--
ALTER TABLE `class_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coa`
--
ALTER TABLE `coa`
  ADD PRIMARY KEY (`coa_code`);

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homeroom_teacher`
--
ALTER TABLE `homeroom_teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `majors`
--
ALTER TABLE `majors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `midtrans`
--
ALTER TABLE `midtrans`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
