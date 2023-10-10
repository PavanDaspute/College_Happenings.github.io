-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2022 at 04:08 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college_happenings`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(50) NOT NULL,
  `post_profile` varchar(200) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `post_topic` varchar(200) NOT NULL,
  `post_type` varchar(100) NOT NULL,
  `teacher_pos` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `post_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `reg_link` varchar(200) NOT NULL,
  `org_by` varchar(200) NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `post_profile`, `name`, `email`, `post_topic`, `post_type`, `teacher_pos`, `date`, `post_time`, `reg_link`, `org_by`, `time`) VALUES
(1, 'posts/bucky.jpg', 'Pavan Daspute', 'pavandaspute@gmail.com', 'webinar', 'Educational', 'sdjkshakjdh', '2002-05-20', '2022-05-16 18:15:22', 'www.google.com', 'Dr. Pavan Daspute', '21:02:00'),
(2, 'posts/capton_america.jpg', 'Pavan Daspute', 'pavandaspute@gmail.com', 'webinar', 'Educational', 'hod', '2021-02-01', '2022-05-16 18:15:58', 'www.google.com', 'fahjgdfjhg', '12:52:00'),
(3, 'posts/falcon.jpg', 'Pavan Daspute', 'pavandaspute@gmail.com', 'webinar', '', 'sadad', '2022-12-14', '2022-05-16 18:16:32', 'dasdadasd', 'Dr. Pavan Daspute', '00:00:00'),
(4, 'posts/ironman.jpg', 'Pavan Daspute', 'pavandaspute@gmail.com', '', '', '', '0000-00-00', '2022-05-16 19:01:39', '', '', '00:00:00'),
(5, 'posts/thor.jpg', 'Pavan Daspute', 'pavandaspute@gmail.com', '', '', '', '0000-00-00', '2022-05-16 19:02:34', '', '', '00:00:00'),
(6, 'posts/bucky.jpg', 'Pavan Daspute', 'pavandaspute@gmail.com', '', '', '', '0000-00-00', '2022-05-16 19:04:01', '', '', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

CREATE TABLE `signin` (
  `id` int(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Pwd` varchar(50) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `profile_img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signin`
--

INSERT INTO `signin` (`id`, `user_id`, `Name`, `Email`, `Pwd`, `contact`, `address`, `profile_img`) VALUES
(1, 1, 'Pavan Daspute', 'pavandaspute@gmail.com', 'pppppp', '9511883462', 'Plot No.23/B, shaitan galli, Shaitanpur, New York', 'posts/profile-user.png'),
(2, 2, 'Siddhant Bilange', 'siddhantbilange@gmail.com', 'ssssss', '9326923344', 'satara', 'posts/profile-user.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signin`
--
ALTER TABLE `signin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `signin`
--
ALTER TABLE `signin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
