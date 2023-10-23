-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2023 at 11:35 AM
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
-- Table structure for table `admin_details`
--

CREATE TABLE `admin_details` (
  `Admin_Id` int(11) NOT NULL,
  `Admin_Name` varchar(255) DEFAULT NULL,
  `Admin_Email` varchar(255) DEFAULT NULL,
  `Admin_Password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `Answer_Id` int(11) NOT NULL,
  `Answer_Content` blob DEFAULT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `Question_Id` int(11) DEFAULT NULL,
  `Tutor_Id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `Question_id` int(11) NOT NULL,
  `Question_Content` blob DEFAULT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `Answered` tinyint(1) DEFAULT NULL,
  `Student_Id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `session_details`
--

CREATE TABLE `session_details` (
  `Session_Id` int(11) NOT NULL,
  `Session_Name` varchar(255) DEFAULT NULL,
  `Session_Day` text DEFAULT NULL,
  `Session_Start` time DEFAULT NULL,
  `Session_End` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `session_details`
--

INSERT INTO `session_details` (`Session_Id`, `Session_Name`, `Session_Day`, `Session_Start`, `Session_End`) VALUES
(2, 'Math', 'Monday', '14:00:00', '16:00:00'),
(3, 'History', 'Tuesday', '14:00:00', '16:00:00'),
(4, 'Physics', 'Wednesday', '14:00:00', '16:00:00'),
(5, 'English', 'Thursday', '14:00:00', '16:00:00'),
(6, 'Chemistry', 'Friday', '14:00:00', '16:00:00'),
(7, 'Biology', 'Monday', '16:00:00', '18:00:00'),
(8, 'Art', 'Tuesday', '16:00:00', '18:00:00'),
(9, 'Geography', 'Wednesday', '16:00:00', '18:00:00'),
(10, 'Spanish', 'Thursday', '16:00:00', '18:00:00'),
(11, 'Physical Ed.', 'Friday', '16:00:00', '18:00:00'),
(12, 'Computer Science', 'Monday', '18:00:00', '20:00:00'),
(13, 'Music', 'Tuesday', '18:00:00', '20:00:00'),
(14, 'Literature', 'Wednesday', '18:00:00', '20:00:00'),
(15, 'French', 'Thursday', '18:00:00', '20:00:00'),
(16, 'Economics', 'Friday', '18:00:00', '20:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `session_student`
--

CREATE TABLE `session_student` (
  `student_id` int(11) DEFAULT NULL,
  `session_id` int(11) DEFAULT NULL,
  `session_name` varchar(255) DEFAULT NULL,
  `status` enum('attending','attended') DEFAULT 'attending',
  `entry_date` date DEFAULT curdate(),
  `entry_time` time DEFAULT curtime()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `session_student`
--

INSERT INTO `session_student` (`student_id`, `session_id`, `session_name`, `status`, `entry_date`, `entry_time`) VALUES
(10, 2, 'Math', 'attending', '2023-10-23', '20:30:30'),
(11, 3, 'History', 'attending', '2023-10-23', '20:30:59');

-- --------------------------------------------------------

--
-- Table structure for table `session_tutor_details`
--

CREATE TABLE `session_tutor_details` (
  `Session_Tutor_Id` int(11) NOT NULL,
  `Session_Id` int(11) DEFAULT NULL,
  `Tutor_Id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Student_Id` int(11) NOT NULL,
  `Student_Name` varchar(255) DEFAULT NULL,
  `Student_School` varchar(255) DEFAULT NULL,
  `Student_Email` varchar(255) DEFAULT NULL,
  `Student_Password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subject_details`
--

CREATE TABLE `subject_details` (
  `Subject_Id` int(11) NOT NULL,
  `Subject` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subject_tutor_details`
--

CREATE TABLE `subject_tutor_details` (
  `Subject_Tutor_id` int(11) NOT NULL,
  `Subject_id` int(11) DEFAULT NULL,
  `Tutor_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tutor_details`
--

CREATE TABLE `tutor_details` (
  `Tutor_Id` int(11) NOT NULL,
  `Tutor_Name` varchar(255) DEFAULT NULL,
  `Tutor_Email` varchar(255) DEFAULT NULL,
  `Tutor_Password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_details`
--
ALTER TABLE `admin_details`
  ADD PRIMARY KEY (`Admin_Id`);

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`Answer_Id`),
  ADD KEY `Question_Id` (`Question_Id`),
  ADD KEY `Tutor_Id` (`Tutor_Id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`Question_id`),
  ADD KEY `Student_Id` (`Student_Id`);

--
-- Indexes for table `session_details`
--
ALTER TABLE `session_details`
  ADD PRIMARY KEY (`Session_Id`);

--
-- Indexes for table `session_tutor_details`
--
ALTER TABLE `session_tutor_details`
  ADD PRIMARY KEY (`Session_Tutor_Id`),
  ADD KEY `Session_Id` (`Session_Id`),
  ADD KEY `Tutor_Id` (`Tutor_Id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Student_Id`);

--
-- Indexes for table `subject_details`
--
ALTER TABLE `subject_details`
  ADD PRIMARY KEY (`Subject_Id`);

--
-- Indexes for table `subject_tutor_details`
--
ALTER TABLE `subject_tutor_details`
  ADD PRIMARY KEY (`Subject_Tutor_id`),
  ADD KEY `Subject_id` (`Subject_id`),
  ADD KEY `Tutor_id` (`Tutor_id`);

--
-- Indexes for table `tutor_details`
--
ALTER TABLE `tutor_details`
  ADD PRIMARY KEY (`Tutor_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_details`
--
ALTER TABLE `admin_details`
  MODIFY `Admin_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `Answer_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `Question_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `session_details`
--
ALTER TABLE `session_details`
  MODIFY `Session_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `session_tutor_details`
--
ALTER TABLE `session_tutor_details`
  MODIFY `Session_Tutor_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `Student_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subject_details`
--
ALTER TABLE `subject_details`
  MODIFY `Subject_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subject_tutor_details`
--
ALTER TABLE `subject_tutor_details`
  MODIFY `Subject_Tutor_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tutor_details`
--
ALTER TABLE `tutor_details`
  MODIFY `Tutor_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_ibfk_1` FOREIGN KEY (`Question_Id`) REFERENCES `questions` (`Question_id`),
  ADD CONSTRAINT `answers_ibfk_2` FOREIGN KEY (`Tutor_Id`) REFERENCES `tutor_details` (`Tutor_Id`);

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `Student_Id` FOREIGN KEY (`Student_Id`) REFERENCES `student` (`Student_Id`);

--
-- Constraints for table `session_tutor_details`
--
ALTER TABLE `session_tutor_details`
  ADD CONSTRAINT `session_tutor_details_ibfk_1` FOREIGN KEY (`Session_Id`) REFERENCES `session_details` (`Session_Id`),
  ADD CONSTRAINT `session_tutor_details_ibfk_2` FOREIGN KEY (`Tutor_Id`) REFERENCES `tutor_details` (`Tutor_Id`);

--
-- Constraints for table `subject_tutor_details`
--
ALTER TABLE `subject_tutor_details`
  ADD CONSTRAINT `subject_tutor_details_ibfk_1` FOREIGN KEY (`Subject_id`) REFERENCES `subject_details` (`Subject_Id`),
  ADD CONSTRAINT `subject_tutor_details_ibfk_2` FOREIGN KEY (`Tutor_id`) REFERENCES `tutor_details` (`Tutor_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
