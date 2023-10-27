-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2023 at 07:20 AM
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
-- Table structure for table `answer_table`
--

CREATE TABLE `answer_table` (
  `Answer_ID` int(11) NOT NULL,
  `Question_ID` int(255) NOT NULL,
  `Answer_Content` varchar(1000) NOT NULL,
  `Timestamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `answer_table`
--

INSERT INTO `answer_table` (`Answer_ID`, `Question_ID`, `Answer_Content`, `Timestamp`) VALUES
(5, 1, 'Pushing the answer to the database', '0000-00-00 00:00:00'),
(6, 2, 'Answer entered', '0000-00-00 00:00:00'),
(7, 6, 'HTML, CSS, JAVASCRIPT, PHP, SQL', '0000-00-00 00:00:00'),
(8, 8, 'Java', '0000-00-00 00:00:00'),
(9, 8, 'Python, R, Ruby', '0000-00-00 00:00:00'),
(10, 2, 'Answered', '0000-00-00 00:00:00'),
(11, 3, 'Wen applications', '2023-10-26 21:38:26'),
(12, 2, 'abc', '0000-00-00 00:00:00'),
(13, 2, 'abc', '0000-00-00 00:00:00'),
(14, 2, 'abc', '0000-00-00 00:00:00'),
(15, 2, 'efg', '2023-10-27 14:59:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer_table`
--
ALTER TABLE `answer_table`
  ADD PRIMARY KEY (`Answer_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer_table`
--
ALTER TABLE `answer_table`
  MODIFY `Answer_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
