-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2018 at 08:04 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aug2018`
--

-- --------------------------------------------------------

--
-- Table structure for table `discription`
--

CREATE TABLE `discription` (
  `email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discription`
--

INSERT INTO `discription` (`email`) VALUES
('neeraj.1720mca@kiet.edu');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL,
  `passing_year` year(4) DEFAULT NULL,
  `linkedin` varchar(80) DEFAULT NULL,
  `twitter` varchar(80) DEFAULT NULL,
  `github` varchar(80) DEFAULT NULL,
  `photo` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `passing_year`, `linkedin`, `twitter`, `github`, `photo`) VALUES
(10, 'Neeraj Kumar Maurya', 'neeraj.1720mca@kiet.edu', 2018, 'linkedin.com/neerajmaurya/', 'twitter.com/neerajmaurya', 'github.com/neerajmaurya/', ''),
(11, '', '', 0000, 'linkedin.com/neerajmaurya/', 'twitter.com/neerajmaurya', 'github.com/neerajmaurya/', ''),
(12, 'shashank', 'shashank.bhardwaj@kiet.edu', 2019, 'shashanklinkedin', 'shashanktwitter', 'shashankgithub', ''),
(13, 'abc', 'abc@abc.com', 2018, NULL, NULL, NULL, NULL),
(14, 'Neeraj Kumar Maurya', 'neeraj.1720mca@kiet.edu', 2018, 'linkedin.com/neerajmaurya/', 'twitter.com/neerajmaurya', 'github.com/neerajmaurya/', NULL),
(15, 'DEVANTI', 'neeraj.1720m3ca11@kiet.edu', 2020, NULL, NULL, NULL, 'photos/WEBSITE-ROCKET-LAUNCH.png'),
(16, 'PRAMILA', 'neerajitscool@gmail.com', 2018, NULL, NULL, NULL, 'photos/neeraj.JPG_.jpg'),
(17, 'PRAMILA', 'neeraj.17280mca11@kiet.edu', 2018, NULL, NULL, NULL, 'photos/neeraj.JPG_2018-08-15 11:10:06am.jpg'),
(18, 'PRAMILA', 'neeraj.17280mca11@kiet.edu', 2018, NULL, NULL, NULL, 'photos/neeraj_2018-08-15 11:10:41am.JPG'),
(19, 'PRAMILA', 'neeraj.17280mca11@kiet.edu', 2018, NULL, NULL, NULL, 'photos/neeraj_sdsds.JPG'),
(20, 'PRAMILA', 'neeraj.17280mca11@kiet.edu', 2018, NULL, NULL, NULL, 'photos/neeraj_.JPG'),
(21, 'PRAMILA', 'neeraj.17280mca11@kiet.edu', 2018, NULL, NULL, NULL, 'photos/neeraj_neeraj.17280mca11@kiet.edu.JPG'),
(22, 'PRAMILA', 'neeraj.17280mca11@kiet.edu', 2018, NULL, NULL, NULL, 'photos/neeraj_neeraj.17280mca11@kiet.edu.JPG'),
(23, 'joginder', 'joginder.1720mca1053@kiet.edu', 2020, 'shashanklinkedin', 'shashanktwitter', 'shashankgithub', 'photos/Screenshot (36)_joginder.1720mca1053@kiet.edu.png'),
(24, 'nrj', 'neeraj.1720mca@kiet.edu', 2020, 'linkedin.com/neerajmaurya/', 'twitter.com/neerajmaurya', 'github.com/neerajmaurya/', 'photos/neeraj_neeraj.1720mca@kiet.edu.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `students_marks`
--

CREATE TABLE `students_marks` (
  `email` varchar(30) DEFAULT NULL,
  `semester1` varchar(6) DEFAULT NULL,
  `semester2` varchar(6) DEFAULT NULL,
  `semester3` varchar(6) DEFAULT NULL,
  `semester4` varchar(6) DEFAULT NULL,
  `semester5` varchar(6) DEFAULT NULL,
  `graduation_cource` varchar(20) DEFAULT NULL,
  `graduation_per` varchar(6) DEFAULT NULL,
  `12th_per` varchar(6) DEFAULT NULL,
  `10th` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students_marks`
--

INSERT INTO `students_marks` (`email`, `semester1`, `semester2`, `semester3`, `semester4`, `semester5`, `graduation_cource`, `graduation_per`, `12th_per`, `10th`) VALUES
(NULL, '60', '62', '64', '66', '68', NULL, NULL, NULL, NULL),
('neeraj.1720mca@kiet.edu', '60', '62', '64', '66', '68', 'b.sc', '69', '84', '78');

-- --------------------------------------------------------

--
-- Table structure for table `students_project`
--

CREATE TABLE `students_project` (
  `email` varchar(30) DEFAULT NULL,
  `project_id` varchar(30) DEFAULT NULL,
  `project_summary` varchar(1000) DEFAULT NULL,
  `back_end` varchar(30) DEFAULT NULL,
  `front_end` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
