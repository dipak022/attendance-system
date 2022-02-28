-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2022 at 07:49 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_attendance_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `attendance_date` varchar(255) NOT NULL,
  `is_present` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `student_id`, `attendance_date`, `is_present`) VALUES
(89, 11, '2022-02-27', 'absent'),
(90, 12, '2022-02-27', 'present'),
(91, 13, '2022-02-27', 'present'),
(92, 14, '2022-02-27', 'present'),
(93, 15, '2022-02-27', 'present'),
(94, 16, '2022-02-27', 'present'),
(95, 17, '2022-02-27', 'present'),
(96, 18, '2022-02-27', 'present'),
(97, 20, '2022-02-27', 'present'),
(98, 21, '2022-02-27', 'absent'),
(99, 11, '2022-02-28', 'present'),
(100, 12, '2022-02-28', 'present'),
(101, 13, '2022-02-28', 'present'),
(102, 14, '2022-02-28', 'present'),
(103, 15, '2022-02-28', 'absent'),
(104, 16, '2022-02-28', 'absent'),
(105, 17, '2022-02-28', 'absent'),
(106, 18, '2022-02-28', 'absent'),
(107, 20, '2022-02-28', 'absent'),
(108, 21, '2022-02-28', 'present');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`) VALUES
(11, 'Dipak Debnath'),
(12, 'sandip sarker'),
(13, 'Sattay Debnath'),
(14, 'Mitu Debnath'),
(15, 'Rai Debnath'),
(16, 'Shabrul Islam'),
(17, 'Dipty Debnath'),
(18, 'Raihanul Islam'),
(20, 'Riad Islam'),
(21, 'Nandu Debnath'),
(23, 'DIPANKAR DEBNATH');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
