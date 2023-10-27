-- --------------------------------------------------------
-- 호스트:                          localhost
-- 서버 버전:                        10.4.28-MariaDB - mariadb.org binary distribution
-- 서버 OS:                        Win64
-- HeidiSQL 버전:                  12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- 테이블 bright_boost.admin_details 구조 내보내기
DROP TABLE IF EXISTS `admin_details`;
CREATE TABLE IF NOT EXISTS `admin_details` (
  `Admin_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Admin_Name` varchar(255) DEFAULT NULL,
  `Admin_Email` varchar(255) DEFAULT NULL,
  `Admin_Password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Admin_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- 테이블 데이터 bright_boost.admin_details:~0 rows (대략적) 내보내기

-- 테이블 bright_boost.answer_table 구조 내보내기
DROP TABLE IF EXISTS `answer_table`;
CREATE TABLE IF NOT EXISTS `answer_table` (
  `Answer_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Question_ID` int(11) NOT NULL,
  `Answer_Content` varchar(1000) NOT NULL,
  `Timestamp` datetime NOT NULL,
  KEY `Answer_ID` (`Answer_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- 테이블 데이터 bright_boost.answer_table:~9 rows (대략적) 내보내기
REPLACE INTO `answer_table` (`Answer_ID`, `Question_ID`, `Answer_Content`, `Timestamp`) VALUES
	(1, 9, 'asdasd', '2023-10-27 17:02:53'),
	(2, 9, 'adasdasd', '2023-10-27 17:02:58'),
	(3, 9, 'adasdasd', '2023-10-27 17:03:47'),
	(4, 9, 'asdasdasd', '2023-10-27 17:03:51'),
	(5, 9, 'asdasdasd', '2023-10-27 17:04:03'),
	(6, 9, 'asdasd', '2023-10-27 17:04:06'),
	(7, 9, 'asdasd', '2023-10-27 17:04:32'),
	(8, 16, 'testing answer', '2023-10-27 19:32:34'),
	(9, 17, 'answer', '2023-10-27 20:40:47');

-- 테이블 bright_boost.questions 구조 내보내기
DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `Question_id` int(11) NOT NULL AUTO_INCREMENT,
  `Question_Content` text DEFAULT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `Answered` tinyint(1) DEFAULT NULL,
  `Student_Id` int(11) DEFAULT NULL,
  `Tutor_Id` int(11) DEFAULT NULL,
  PRIMARY KEY (`Question_id`),
  KEY `Student_Id` (`Student_Id`),
  KEY `Column 6` (`Tutor_Id`),
  CONSTRAINT `Student_Id` FOREIGN KEY (`Student_Id`) REFERENCES `student` (`Student_Id`),
  CONSTRAINT `Tutor_Id` FOREIGN KEY (`Tutor_Id`) REFERENCES `tutor_details` (`Tutor_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- 테이블 데이터 bright_boost.questions:~9 rows (대략적) 내보내기
REPLACE INTO `questions` (`Question_id`, `Question_Content`, `Timestamp`, `Answered`, `Student_Id`, `Tutor_Id`) VALUES
	(8, 'Based on the skills you\'ve observed, you might think I could also tutor others.', '2023-10-23 09:16:19', 0, 1, 3),
	(9, 'asdasd', '2023-10-23 01:18:38', 0, 1, 1),
	(10, 'asdasdasd', '2023-10-23 01:18:54', 0, 1, 3),
	(11, 'Wow', '2023-10-23 10:37:22', 0, 1, 3),
	(12, 'asdasdasd', '2023-10-26 08:28:08', 0, 1, 1),
	(13, '123123', '2023-10-27 05:16:22', 0, 1, 3),
	(14, 'Test1', '2023-10-27 05:16:41', 0, 1, 1),
	(15, 'Question 1', '2023-10-27 08:26:11', 0, 1, 1),
	(16, 'Testing question', '2023-10-27 08:31:37', 0, 1, 1),
	(17, 'qwerty', '2023-10-27 09:39:59', 0, 1, 1);

-- 테이블 bright_boost.session_details 구조 내보내기
DROP TABLE IF EXISTS `session_details`;
CREATE TABLE IF NOT EXISTS `session_details` (
  `Session_Id` int(11) NOT NULL,
  `Session_Name` varchar(255) DEFAULT NULL,
  `Session_Day` text DEFAULT NULL,
  `Session_Start` time DEFAULT NULL,
  `Session_End` time DEFAULT NULL,
  PRIMARY KEY (`Session_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- 테이블 데이터 bright_boost.session_details:~15 rows (대략적) 내보내기
REPLACE INTO `session_details` (`Session_Id`, `Session_Name`, `Session_Day`, `Session_Start`, `Session_End`) VALUES
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

-- 테이블 bright_boost.session_student 구조 내보내기
DROP TABLE IF EXISTS `session_student`;
CREATE TABLE IF NOT EXISTS `session_student` (
  `student_id` int(11) DEFAULT NULL,
  `session_id` int(11) DEFAULT NULL,
  `session_name` varchar(255) DEFAULT NULL,
  `status` enum('attending','attended') DEFAULT 'attending',
  `entry_date` date DEFAULT curdate(),
  `entry_time` time DEFAULT curtime()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- 테이블 데이터 bright_boost.session_student:~28 rows (대략적) 내보내기
REPLACE INTO `session_student` (`student_id`, `session_id`, `session_name`, `status`, `entry_date`, `entry_time`) VALUES
	(10, 2, 'Math', 'attending', '2023-10-23', '20:30:30'),
	(11, 3, 'History', 'attending', '2023-10-23', '20:30:59'),
	(11, 3, 'History', 'attending', '2023-10-23', '21:37:11'),
	(11, 4, 'Physics', 'attending', '2023-10-26', '19:26:16'),
	(11, 4, 'Physics', 'attending', '2023-10-26', '19:27:07'),
	(11, 4, 'Physics', 'attending', '2023-10-26', '19:27:17'),
	(11, 4, 'Physics', 'attending', '2023-10-26', '19:35:36'),
	(10, 4, 'Physics', 'attending', '2023-10-26', '19:56:25'),
	(10, 4, 'Physics', 'attending', '2023-10-26', '20:04:08'),
	(10, 4, 'Physics', 'attending', '2023-10-26', '20:05:56'),
	(10, 4, 'Physics', 'attending', '2023-10-26', '20:06:46'),
	(10, 4, 'Physics', 'attending', '2023-10-26', '20:12:02'),
	(10, 4, 'Physics', 'attending', '2023-10-26', '21:03:55'),
	(10, 4, 'Physics', 'attending', '2023-10-26', '21:09:23'),
	(10, 4, 'Physics', 'attending', '2023-10-26', '21:09:37'),
	(1, 4, 'Physics', 'attending', '2023-10-27', '16:16:16'),
	(1, 4, 'Physics', 'attending', '2023-10-27', '16:43:34'),
	(1, 4, 'Physics', 'attending', '2023-10-27', '16:57:59'),
	(1, 4, 'Physics', 'attending', '2023-10-27', '17:05:00'),
	(1, 4, 'Physics', 'attending', '2023-10-27', '17:20:38'),
	(1, 4, 'Physics', 'attending', '2023-10-27', '17:25:00'),
	(1, 4, 'Physics', 'attending', '2023-10-27', '18:59:27'),
	(1, 16, 'Economics', 'attending', '2023-10-27', '19:10:51'),
	(1, 16, 'Economics', 'attending', '2023-10-27', '19:11:47'),
	(1, 16, 'Economics', 'attending', '2023-10-27', '19:12:40'),
	(1, 16, 'Economics', 'attending', '2023-10-27', '19:25:38'),
	(1, 16, 'Economics', 'attending', '2023-10-27', '19:31:16'),
	(1, 16, 'Economics', 'attending', '2023-10-27', '20:39:35');

-- 테이블 bright_boost.session_tutor_details 구조 내보내기
DROP TABLE IF EXISTS `session_tutor_details`;
CREATE TABLE IF NOT EXISTS `session_tutor_details` (
  `Session_Tutor_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Session_Id` int(11) DEFAULT NULL,
  `Tutor_Id` int(11) DEFAULT NULL,
  PRIMARY KEY (`Session_Tutor_Id`),
  KEY `Session_Id` (`Session_Id`),
  KEY `Tutor_Id` (`Tutor_Id`),
  CONSTRAINT `session_tutor_details_ibfk_1` FOREIGN KEY (`Session_Id`) REFERENCES `session_details` (`Session_Id`),
  CONSTRAINT `session_tutor_details_ibfk_2` FOREIGN KEY (`Tutor_Id`) REFERENCES `tutor_details` (`Tutor_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- 테이블 데이터 bright_boost.session_tutor_details:~0 rows (대략적) 내보내기

-- 테이블 bright_boost.student 구조 내보내기
DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `Student_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Student_Name` varchar(255) DEFAULT NULL,
  `Student_School` varchar(255) DEFAULT NULL,
  `Student_Email` varchar(255) DEFAULT NULL,
  `Student_Password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Student_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- 테이블 데이터 bright_boost.student:~0 rows (대략적) 내보내기
REPLACE INTO `student` (`Student_Id`, `Student_Name`, `Student_School`, `Student_Email`, `Student_Password`) VALUES
	(1, 'Test', 'Bright', 'add123@abc.com', '1234');

-- 테이블 bright_boost.subject_details 구조 내보내기
DROP TABLE IF EXISTS `subject_details`;
CREATE TABLE IF NOT EXISTS `subject_details` (
  `Subject_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Subject` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Subject_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- 테이블 데이터 bright_boost.subject_details:~4 rows (대략적) 내보내기
REPLACE INTO `subject_details` (`Subject_Id`, `Subject`) VALUES
	(1, 'Economics'),
	(2, 'History'),
	(3, 'English'),
	(4, 'Chemistry');

-- 테이블 bright_boost.subject_tutor_details 구조 내보내기
DROP TABLE IF EXISTS `subject_tutor_details`;
CREATE TABLE IF NOT EXISTS `subject_tutor_details` (
  `Subject_Tutor_id` int(11) NOT NULL AUTO_INCREMENT,
  `Subject_id` int(11) DEFAULT NULL,
  `Tutor_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`Subject_Tutor_id`),
  KEY `Subject_id` (`Subject_id`),
  KEY `Tutor_id` (`Tutor_id`),
  CONSTRAINT `subject_tutor_details_ibfk_1` FOREIGN KEY (`Subject_id`) REFERENCES `subject_details` (`Subject_Id`),
  CONSTRAINT `subject_tutor_details_ibfk_2` FOREIGN KEY (`Tutor_id`) REFERENCES `tutor_details` (`Tutor_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- 테이블 데이터 bright_boost.subject_tutor_details:~0 rows (대략적) 내보내기
REPLACE INTO `subject_tutor_details` (`Subject_Tutor_id`, `Subject_id`, `Tutor_id`) VALUES
	(1, 1, 1),
	(2, 2, 1),
	(3, 3, 2),
	(4, 4, 2),
	(5, 1, 3),
	(6, 2, 3),
	(7, 3, 4),
	(8, 4, 4);

-- 테이블 bright_boost.tutor_details 구조 내보내기
DROP TABLE IF EXISTS `tutor_details`;
CREATE TABLE IF NOT EXISTS `tutor_details` (
  `Tutor_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Tutor_Name` varchar(255) DEFAULT NULL,
  `Tutor_Email` varchar(255) DEFAULT NULL,
  `Tutor_Password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Tutor_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- 테이블 데이터 bright_boost.tutor_details:~0 rows (대략적) 내보내기
REPLACE INTO `tutor_details` (`Tutor_Id`, `Tutor_Name`, `Tutor_Email`, `Tutor_Password`) VALUES
	(1, 'Bill', 'abc1@com.au', '1234'),
	(2, 'Youth', 'abc2@com.au', '1234'),
	(3, 'James', 'hhh1@abc.au', '1234'),
	(4, 'Tailor', 'hhh2@abc.au', '1234');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
