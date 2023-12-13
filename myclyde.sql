-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2023 at 10:43 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myclyde`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(16) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$tFsxSzE4JyRWk/lxlctLyuQFyDOoq4g9W31BzBt.mxiWT9WbOyYCS');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `name` varchar(32) DEFAULT NULL,
  `award` varchar(16) DEFAULT NULL,
  `year` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `name`, `award`, `year`) VALUES
(1, 'HNDWEBEN-F232A-L', 'HND', '23/24'),
(2, 'HNDWEBEN-F231A-L', 'HNC', '23/24');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `events_id` int(11) NOT NULL,
  `added_by` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `description` text DEFAULT NULL,
  `added_on` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`events_id`, `added_by`, `date`, `description`, `added_on`, `updated_by`) VALUES
(1, 1, '2023-12-15 10:00:00', 'Welcome Orientation', '2023-12-10 08:30:00', NULL),
(2, 1, '2023-12-18 14:30:00', 'Guest Lecture on Science and Technology', '2023-12-12 09:45:00', NULL),
(3, 1, '2023-12-20 09:00:00', 'Sports Day Kick-off', '2023-12-15 11:20:00', NULL),
(4, 1, '2023-12-22 18:00:00', 'Annual Talent Show', '2023-12-18 15:10:00', NULL),
(5, 1, '2023-12-25 12:30:00', 'Holiday Celebration', '2023-12-20 14:55:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `title` varchar(32) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `added_on` datetime DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `title`, `description`, `added_on`, `added_by`) VALUES
(1, 'New Campus Initiatives', 'Exciting new initiatives are coming to our campus to enhance the overall student experience.', '2023-12-15 09:15:00', 1),
(2, 'Research Symposium Announcement', 'The annual research symposium is scheduled for next month. Submit your abstracts and be a part of this intellectual event.', '2023-12-18 14:00:00', 1),
(3, 'Career Fair Success', 'Our recent career fair was a tremendous success, with students securing internships and job opportunities from top companies.', '2023-12-20 11:30:00', 1),
(4, 'Upcoming Alumni Reunion', 'Calling all alumni! Don’t miss the upcoming reunion on January 5th. Reconnect with old friends and share your success stories.', '2023-12-22 17:45:00', 1),
(5, 'Student Achievements', 'Congratulations to our students for their outstanding achievements in various fields. We are proud of your hard work and dedication!', '2023-12-25 13:45:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_num` int(11) NOT NULL,
  `firstname` varchar(32) DEFAULT NULL,
  `surname` varchar(64) DEFAULT NULL,
  `email` varchar(32) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `postcode` varchar(11) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `psw` varchar(255) DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `fk_course` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_num`, `firstname`, `surname`, `email`, `address`, `postcode`, `dob`, `psw`, `active`, `fk_course`) VALUES
(123456, 'Santa', 'Clause', 'santa@email.com', '123', 'g15EH', '2023-12-06', '$2y$10$tFsxSzE4JyRWk/lxlctLyuQFyDOoq4g9W31BzBt.mxiWT9WbOyYCS', 1, 2),
(12345678, 'Karen', 'Sturgeon', 'asdf@eamil.com', '123', '123', '2023-12-02', '$2y$10$tFsxSzE4JyRWk/lxlctLyuQFyDOoq4g9W31BzBt.mxiWT9WbOyYCS', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_comment`
--

CREATE TABLE `student_comment` (
  `nc_id` int(11) NOT NULL,
  `fk_news_id` int(11) DEFAULT NULL,
  `student_email` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_enrolment`
--

CREATE TABLE `student_enrolment` (
  `enrol_id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `fk_unit` int(11) DEFAULT NULL,
  `fk_student` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_enrolment`
--

INSERT INTO `student_enrolment` (`enrol_id`, `date`, `fk_unit`, `fk_student`) VALUES
(1, '2023-12-05', 1, 12345678),
(2, '2023-12-10', 3, 12345678),
(5, '2023-12-04', 5, 123456),
(6, '2023-12-04', 4, 123456);

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `unit_id` int(11) NOT NULL,
  `name` varchar(11) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`unit_id`, `name`, `description`) VALUES
(1, 'Unit One', 'description of unit one'),
(2, 'Unit Two', 'description of unit Two'),
(3, 'Unit Three', 'description of unit three'),
(4, 'Unit Four', 'description of unit four'),
(5, 'Unit Five', 'description of unit Five');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`events_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_num`),
  ADD KEY `fk_course` (`fk_course`);

--
-- Indexes for table `student_comment`
--
ALTER TABLE `student_comment`
  ADD PRIMARY KEY (`nc_id`),
  ADD KEY `fk_news_id` (`fk_news_id`);

--
-- Indexes for table `student_enrolment`
--
ALTER TABLE `student_enrolment`
  ADD PRIMARY KEY (`enrol_id`),
  ADD KEY `fk_unit` (`fk_unit`),
  ADD KEY `fk_student` (`fk_student`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`unit_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `events_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `student_comment`
--
ALTER TABLE `student_comment`
  MODIFY `nc_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_enrolment`
--
ALTER TABLE `student_enrolment`
  MODIFY `enrol_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `unit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`fk_course`) REFERENCES `course` (`course_id`);

--
-- Constraints for table `student_comment`
--
ALTER TABLE `student_comment`
  ADD CONSTRAINT `student_comment_ibfk_1` FOREIGN KEY (`fk_news_id`) REFERENCES `news` (`news_id`);

--
-- Constraints for table `student_enrolment`
--
ALTER TABLE `student_enrolment`
  ADD CONSTRAINT `student_enrolment_ibfk_1` FOREIGN KEY (`fk_unit`) REFERENCES `unit` (`unit_id`),
  ADD CONSTRAINT `student_enrolment_ibfk_2` FOREIGN KEY (`fk_student`) REFERENCES `student` (`student_num`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
