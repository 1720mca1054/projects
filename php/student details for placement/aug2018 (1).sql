-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2018 at 08:02 PM
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

INSERT INTO `students` (`name`, `email`, `passing_year`, `linkedin`, `twitter`, `github`, `photo`) VALUES
('Neeraj Kumar Maurya', 'neeraj.1720mca@kiet.edu', 2018, 'x', 'z', 'y', 'youtube/munibji1_neeraj.1720mca@kiet.edu.jpg'),
('', '', 0000, '', '', '', 'youtube/munibji1_.jpg'),
('', '', 0000, '', '', '', 'youtube/_.'),
('x', 'y@z.com', 0000, 'x', 'shashanktwitter', 'shashankgithub', 'photos/_y@z.com.'),
('kapil123', 'kapil@123.com', 2019, 'shasha233li', 'shash12345677', '', 'photos/Screenshot (36)_kapil@123.com.png'),
('', '', 0000, '', '', '', 'photos/_.'),
('', '', 0000, '', '', '', 'photos/_.'),
('', '', 0000, '', '', '', 'photos/_.'),
('Neeraj Kumar Maurya', 'neeraj.1720mca@kiet.edu', 2018, 'x', 'z', 'y', 'photos/Screenshot (36)_neeraj.1720mca@kiet.edu.png'),
('', '', 0000, '', '', '', 'photos/munibji1_.jpg'),
('Neeraj Kumar Maurya', 'neeraj.1720mca11@kiet.edu', 2020, 'linkedin.com/neerajmaurya/', 'twitter.com/neerajmaurya', 'github.com/neerajmaurya/', 'photos/Screenshot (36)_neeraj.1720mca11@kiet.edu.png'),
('lucky', 'lucky.1720mca@kiet.edu', 2050, 'linkedin.com/lucky', 'twitter.com/lucky', 'github.com/lucky', 'photos/Delhi-University-DU-Logo-1_lucky.1720mca@kiet.edu.png'),
('', '', 0000, '', '', '', 'photos/_.');

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
('neeraj.1720mca@kiet.edu', '60', '62', '64', '66', '68', 'b.sc', '69', '84', '78'),
('kapil@123.com', '90', '90', '91', '98', '', 'bca', '34', '56', '78'),
('', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '69', '', '', '', '', ''),
('neeraj.1720mca11@kiet.edu', '90', '62', '91', '66', '68', 'b.sc', '69', '56', '78'),
('lucky.1720mca@kiet.edu', '60', '62', '64', '66', '68', 'bca', '34', '56', '78'),
('', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `students_project`
--

CREATE TABLE `students_project` (
  `email` varchar(30) DEFAULT NULL,
  `project_summary` varchar(1000) DEFAULT NULL,
  `back_end` varchar(30) DEFAULT NULL,
  `front_end` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students_project`
--

INSERT INTO `students_project` (`email`, `project_summary`, `back_end`, `front_end`) VALUES
('y@z.com', ' \r\n              kjvhkdfhvkfd', NULL, NULL),
('y@z.com', ' hrfhrkef\r\nfrif\r\nrhflrif\r\nrbfkw\r\n              ', NULL, NULL),
('y@z.com', ' hrfhrkef\r\nfrif\r\nrhflrif\r\nrbfkw\r\n              ', NULL, NULL),
('y@z.com', ' \r\n              df', 'php', 'html'),
('y@z.com', ' cjhc\r\n              ', 'php', 'html'),
('kapil@123.com', ' tt\r\n              ', 'R', 'R'),
('', ' \r\n              ', '', ''),
('', ' \r\n              ', '', ''),
('', '', '', ''),
('', '', 'R', 'R'),
('', '', '', ''),
('', '', 'php', 'R'),
('', '', '', ''),
('', '', '', ''),
('neeraj.1720mca11@kiet.edu', '', 'php', 'html'),
('neeraj.1720mca11@kiet.edu', 'bnmbb', '', ''),
('lucky.1720mca@kiet.edu', 'no description', 'R', 'html'),
('', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `students_youtube`
--

CREATE TABLE `students_youtube` (
  `email` varchar(30) DEFAULT NULL,
  `youtube1` varchar(1000) DEFAULT NULL,
  `youtube2` varchar(1000) DEFAULT NULL,
  `youtube3` varchar(1000) DEFAULT NULL,
  `youtube_title` varchar(50) DEFAULT NULL,
  `thumbnail` varchar(1000) DEFAULT NULL,
  `thumbnail2` varchar(1000) DEFAULT NULL,
  `thumbnail3` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students_youtube`
--

INSERT INTO `students_youtube` (`email`, `youtube1`, `youtube2`, `youtube3`, `youtube_title`, `thumbnail`, `thumbnail2`, `thumbnail3`) VALUES
('y@z.com', 'dwe', 'dgdgdfgt', 'dhbcjsdb', 'bdcjdab', NULL, NULL, NULL),
('y@z.com', 'kjcdzkcd', 'djckdsfc', 'dhbcjsdb', 'bdcjdab', 'youtube/neeraj_y@z.com.JPG', NULL, NULL),
('kapil@123.com', 'https://www.w3schools.com/html/html_form_elements.asp', 'https://web.whatsapp.com/', '', '', 'youtube/_kapil@123.com.', NULL, NULL),
('', '', '', '', '', 'youtube/_.', NULL, NULL),
('', '', '', '', '', 'youtube/_.', NULL, NULL),
('', '', '', '', '', 'youtube/_.', NULL, NULL),
('', '', '', '', '', 'youtube/_.', NULL, NULL),
('', 'kjcdzkcd', 'dgdgdfgt', 'dhbcjsdb', 'bdcjdab', 'youtube/_.', NULL, NULL),
('', 'kjcdzkcd', 'dgdgdfgt', 'dhbcjsdb', 'bdcjdab', 'youtube/_.', NULL, NULL),
('neeraj.1720mca@kiet.edu', 'kjcdzkcd', 'dgdgdfgt', 'tgr', 'Kiet YouTube', 'youtube/_neeraj.1720mca@kiet.edu.', NULL, NULL),
('neeraj.1720mca@kiet.edu', '', '', '', '', 'youtube/_neeraj.1720mca@kiet.edu.', NULL, NULL),
('neeraj.1720mca@kiet.edu', 'dwe', 'dgdgdfgt', 'http://moodleit.kiet.edu/live/youtube.php', 'bdcjdab', 'youtube/_neeraj.1720mca@kiet.edu.', NULL, NULL),
('', '', '', '', '', 'youtube/Screenshot (36)_.png', NULL, NULL),
('', '', '', '', '', 'youtube/neeraj_.JPG', 'youtube/munibji1_.jpg', 'youtube/munibji (1)_.jpg'),
('', '', '', '', '', 'youtube/munibji (1)_.jpg', 'youtube/munibji1_.jpg', 'youtube/neeraj_.JPG'),
('', '', '', '', '', 'youtube/munibji (1)_.jpg', 'youtube/munibji1_.jpg', 'youtube/neeraj_.JPG'),
('neeraj.1720mca11@kiet.edu', 'dwe', 'djckdsfc', 'http://moodleit.kiet.edu/live/youtube.php', 'Kiet YouTube', 'youtube/munibji (1)_neeraj.1720mca11@kiet.edu.jpg', 'youtube/munibji1_neeraj.1720mca11@kiet.edu.jpg', 'youtube/neeraj_neeraj.1720mca11@kiet.edu.JPG'),
('lucky.1720mca@kiet.edu', 'https://www.google.co.in/search?q=how+to+send+multiple+photos+in+database+using+php&rlz=1C1CHBD_enIN772IN772&oq=how+to+send+multiple+photos+in+database+using+php&aqs=chrome..69i57.20472j0j7&sourceid=chrome&ie=UTF-8', 'http://localhost/phpmyadmin/sql.php?server=1&db=aug2018&table=students_project&pos=0', 'http://localhost/aug2018/youtube.php', 'no title', 'youtube/banner_lucky.1720mca@kiet.edu.jpg', 'youtube/banner2_lucky.1720mca@kiet.edu.jpg', 'youtube/logo_lucky.1720mca@kiet.edu.jpg'),
('', '', '', '', '', 'youtube/_.', 'youtube/_.', 'youtube/_.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
