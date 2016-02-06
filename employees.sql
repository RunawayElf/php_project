-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 06, 2016 at 06:42 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employees`
--

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `name` varchar(50) NOT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`name`, `description`) VALUES
('admin', 'almost like the superuser'),
('content editor', 'can edit web content'),
('moderator', 'is my best friend');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `PASSWORD` varchar(32) NOT NULL,
  `role` varchar(30) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `PASSWORD`, `role`) VALUES
(1, 'ravindu', 'ravi@gmail.com', '1234', 'admin'),
(2, 'addidas', 'adidas@gmail.com', 'asdf', 'admin'),
(3, 'rachel', 'rach@gmail.com', 'rachel', 'admin'),
(4, 'srimal', 'srimal@dsdssa.com', 'uuuuu', 'admin'),
(5, 'srimal', 'sri@lanka.lk', 'daraa', 'content editor'),
(8, 'hiru', 'h@gmail.com', 'adre', 'moderator'),
(10, 'milan', 'milan@milano.it', 'yolo', 'content editor'),
(12, 'bugz', 'bugz@gmail.com', 'buggy', 'content editor'),
(13, 'gine', 'gine@aussi.com', '12345', 'moderator'),
(14, 'piusah', 'piush@pussy.com', 'pussy', 'moderator'),
(15, 'hiru', 'h@gmail.com', 'adre', 'content editor'),
(18, 'desh', 'desh@derana.com', 'sfaksa', 'admin'),
(19, 'danidu', 'danu@fff.com', '!sdkonfsao', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
