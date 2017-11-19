-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2017 at 02:51 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php201702`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `picture` varchar(512) DEFAULT NULL,
  `dob` date NOT NULL,
  `class` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `gender`, `picture`, `dob`, `class`) VALUES
(1, 'Shahid', 'male', NULL, '2017-10-22', 'ICS'),
(2, 'zahid', 'male', NULL, '2017-10-22', 'BSCS'),
(3, 'Salman', 'male', NULL, '2000-10-10', 'MCS'),
(4, 'Akbar', 'male', NULL, '2009-12-12', 'ICS'),
(5, 'Shahzad', 'male', NULL, '2009-09-18', 'BCS'),
(6, 'Nouman', 'male', NULL, '2010-04-11', 'MCS'),
(7, 'Muhammad Ali', 'male', NULL, '1995-10-10', 'BSIT'),
(8, '', 'male', NULL, '0000-00-00', ''),
(9, 'ASDFASDF%', 'male', NULL, '0000-00-00', ''),
(10, 'Faisal Kaleem', 'male', 'cnic-front.jpg', '2017-10-10', 'MSCS'),
(11, 'Faisal Kaleem', 'male', 'cnic-front.jpg', '2017-10-10', 'MSCS'),
(12, 'Faisal Kaleem', 'male', '1511083655_cnic-front.jpg', '2017-10-10', 'MSCS'),
(13, 'Faisal Kaleem', 'male', '1511084121_cnic-front.jpg', '2017-10-10', 'MSCS'),
(14, 'Faisal Kaleem', 'male', '1511084132_cnic-front.jpg', '2017-10-10', 'MSCS'),
(15, 'Faisal Kaleem', 'male', '1511084153_cnic-front.jpg', '2017-10-10', 'MSCS'),
(16, 'Faisal Kaleem', 'male', '1511084263_cnic-front.jpg', '2017-10-10', 'MSCS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
