-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2022 at 02:30 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `findly`
--
CREATE DATABASE IF NOT EXISTS `findly` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `findly`;

-- --------------------------------------------------------

--
-- Table structure for table `matching`
--

CREATE TABLE `matching` (
  `match_id` int(255) NOT NULL,
  `person_id` int(255) NOT NULL,
  `matched_person_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matching`
--

INSERT INTO `matching` (`match_id`, `person_id`, `matched_person_id`) VALUES
(19, 1378700747, 1118853566),
(20, 1378700747, 611784336),
(21, 611784336, 1436829592),
(22, 611784336, 1118853566),
(23, 611784336, 1379293060),
(24, 1436829592, 1378700747),
(25, 1436829592, 1560753969),
(26, 1436829592, 611784336),
(27, 1436829592, 1185099212);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(21, 1118853566, 1378700747, 'Czesc'),
(22, 611784336, 1378700747, 'Czesc bartek!'),
(23, 1436829592, 611784336, 'elo kasia'),
(24, 611784336, 1436829592, 'witaj bartku');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(200) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(400) NOT NULL,
  `about` varchar(400) NOT NULL,
  `age` int(2) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `fb` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `dc` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `lol` tinyint(1) DEFAULT 0,
  `cs` tinyint(1) DEFAULT 0,
  `val` tinyint(1) DEFAULT 0,
  `mc` tinyint(1) DEFAULT 0,
  `horror` tinyint(1) DEFAULT 0,
  `comedy` tinyint(1) DEFAULT 0,
  `crime` tinyint(1) DEFAULT 0,
  `drama` tinyint(1) DEFAULT 0,
  `trap` tinyint(1) DEFAULT 0,
  `rap` tinyint(1) DEFAULT 0,
  `pop` tinyint(1) DEFAULT 0,
  `classic` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `about`, `age`, `gender`, `city`, `fb`, `twitter`, `dc`, `status`, `lol`, `cs`, `val`, `mc`, `horror`, `comedy`, `crime`, `drama`, `trap`, `rap`, `pop`, `classic`) VALUES
(57, 1378700747, 'Mateusz', 'Karas', 'mati@gmail.com', '202cb962ac59075b964b07152d234b70', '1668948142IMG_20190419_120006 (1).jpg', 'Czesc jestem Mateusz, pisze inzyniera', 22, 'Mezczyzna', 'Czestochowa', 'facebook.com/mati', 'twitter.com/mati', 'mati#123', 'Offline now', 1, 0, 1, 0, 1, 1, 1, 0, 0, 1, 0, 0),
(58, 1560753969, 'Michal', 'Nowak', 'michal@gmail.com', '202cb962ac59075b964b07152d234b70', '1668948456michal.jpg', 'Czesc jestem Michal i lubie placki', 24, 'Mezczyzna', 'Poznan', 'facebook.com/michal', 'twitter.com/michal', 'michal#1234', 'Offline now', 1, 0, 0, 1, 0, 1, 1, 0, 1, 1, 0, 1),
(59, 611784336, 'Bartek', 'Nowak', 'bartek@gmail.com', '202cb962ac59075b964b07152d234b70', '1668948530bartek.jpg', 'Cześć jestem Bartek ', 18, 'Mezczyzna', 'Wrocław', 'facebook.com/bartek', 'twitter.com/bartek', 'bartek#1234', 'Offline now', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(60, 1436829592, 'Kasia', 'Kowalska', 'kasia@gmail.com', '202cb962ac59075b964b07152d234b70', '1668948578kasia.jpg', 'Cześć jestem Kasia! ', 19, 'Kobieta', 'Kraków', 'facebook.com/kasia', 'twitter.com/kasia', 'Kasia#1243', 'Active now', 1, 0, 0, 0, 0, 1, 0, 0, 1, 0, 0, 1),
(61, 1185099212, 'Sebastian', 'Załóg', 'seba@gmail.com', '202cb962ac59075b964b07152d234b70', '1668948649seba.jpg', 'Siema to ja seba', 18, 'Mezczyzna', 'Ciężkowice', 'facebook.com/seba', 'twitter.com/seba', 'Seba#1234', 'Offline now', 0, 0, 1, 1, 0, 1, 0, 1, 0, 0, 0, 1),
(62, 1118853566, 'Zosia', '', 'zosia@gmail.com', '202cb962ac59075b964b07152d234b70', '1668948729zosia.jpg', 'Cześć jestem zosia.', 21, 'Kobieta', 'Warszawa', 'facebook.com/zosia', 'twitter.com/zosia', 'Zosia#4321', 'Offline now', 1, 1, 0, 0, 1, 1, 0, 0, 1, 1, 1, 0),
(63, 1379293060, 'Karolina', 'Qwerty', 'karo@gmail.com', '202cb962ac59075b964b07152d234b70', '1668948929karolina.jpg', 'Cześć jestem Karolina', 30, 'Kobieta', 'Białystok', 'facebook.com/karo', 'twitter.com/karo', 'Karo#1234', 'Offline now', 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `matching`
--
ALTER TABLE `matching`
  ADD PRIMARY KEY (`match_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `matching`
--
ALTER TABLE `matching`
  MODIFY `match_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
