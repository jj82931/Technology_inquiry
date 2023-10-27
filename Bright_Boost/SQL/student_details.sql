-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2023 at 06:51 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bright_boost`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `id` int(11) NOT NULL,
  `stu_num` varchar(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `school_name` varchar(11) NOT NULL,
  `subscription_plan_from` date NOT NULL DEFAULT current_timestamp(),
  `subscription_plan_to` date NOT NULL DEFAULT current_timestamp(),
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`id`, `stu_num`, `user_name`, `email_id`, `password`, `school_name`, `subscription_plan_from`, `subscription_plan_to`, `created_at`, `updated_at`) VALUES
(2, 'STU-2', 'asd', 'hgh@sdfg.com', NULL, 'ghfg', '2023-10-02', '2023-11-01', '2023-10-26', '2023-10-26'),
(3, 'STU-3', 'abcd', 'sh@gmail.com', NULL, 'jjh', '2023-10-06', '2023-10-31', '2023-10-26', '2023-10-26'),
(4, 'STU-4', 'abcd', 'sh@gmail.com', NULL, 'jjh', '2023-10-06', '2023-10-31', '2023-10-26', '2023-10-26'),
(5, 'STU-5', 'gd', 'bvgc@dfg.com', NULL, 'bn', '2023-10-01', '2023-10-31', '2023-10-26', '2023-10-26'),
(6, 'STU-6', 'asd', 'sd@hjgh.k', NULL, 'fdgd', '2023-10-06', '2023-11-05', '2023-10-26', '2023-10-26'),
(7, 'STU-7', 'test1', 'test1@te.com', NULL, 'swin', '2023-10-25', '2023-11-05', '2023-10-27', '2023-10-27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_details`
--
ALTER TABLE `student_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
