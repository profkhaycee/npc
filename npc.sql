-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2022 at 04:37 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `npc`
--

-- --------------------------------------------------------

--
-- Table structure for table `citizens`
--

CREATE TABLE `citizens` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `address` varchar(300) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `ward` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `citizens`
--

INSERT INTO `citizens` (`id`, `name`, `gender`, `address`, `phone`, `ward`) VALUES
(1, 'hannah', 'female', '23, black street', '09012345678', 1),
(2, 'kel', 'male', 'grtv we', '67891234567', 1),
(3, 'peter abu', 'male', '12, when str', '09123456780', 3),
(4, 'jogn ugo', 'male', 'wer, tye street', '01234567890', 3),
(5, 'collins', 'female', '123, retage str', '09012345667', 6);

-- --------------------------------------------------------

--
-- Table structure for table `lga`
--

CREATE TABLE `lga` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `state` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lga`
--

INSERT INTO `lga` (`id`, `name`, `state`) VALUES
(1, 'offa', 1),
(2, 'ogbomosho', 3),
(3, 'alimosho', 2),
(4, 'agege', 2),
(5, 'ejigbo', 2),
(6, 'ilorin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`) VALUES
(1, 'kwara'),
(2, 'lagos'),
(3, 'ibadan'),
(4, 'abuja'),
(5, 'ogun');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `state_code` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `state_code`, `password`) VALUES
(1, 'khaycee', 'ske@gkc', 'kw/18b/1025', '$2y$10$jWM304rGmXMVgC2ULCQI0OUSyEwXBTUI7xAQrfLptgSVX3t16BypS'),
(2, 'frend', 'wer@rtry', 'lg/18b/1025', '$2y$10$lUO6fq5mNOJTTRKKxEpj1.CaeTfP9SJ/fJhxBDWlB9i.1Ht0pn8h2'),
(3, 'chinenya ruth', 'ruth@fre.com', 'ab/12a/3456', '$2y$10$6EHc/lzyJso0ee4t2lhVYOyVJkN6X0cvGayLm0jmuxCgO6WPTNM/e'),
(4, 'desmond anayo', 'dd@ayt.com', 'og/20c/2123', '$2y$10$05eTLUItI1lgoaNoSb/4nuoGuh6A2vAezezMIArmqYFJ7rC.IpvxG'),
(5, 'peter lee', 'lee@chinko.com', 'ib/17a/2345', '$2y$10$a7BdsmQ.t475x6LlIef7/O94QQ6CVIkkdzGa4hvQ51NpnuvJZJiXG');

-- --------------------------------------------------------

--
-- Table structure for table `wards`
--

CREATE TABLE `wards` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `lga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wards`
--

INSERT INTO `wards` (`id`, `name`, `lga`) VALUES
(1, 'ijagbo', 1),
(2, 'abc', 5),
(3, 'igando', 3),
(4, 'idimu', 3),
(5, 'egbeda', 3),
(6, 'oyun', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `citizens`
--
ALTER TABLE `citizens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lga`
--
ALTER TABLE `lga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wards`
--
ALTER TABLE `wards`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `citizens`
--
ALTER TABLE `citizens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lga`
--
ALTER TABLE `lga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `wards`
--
ALTER TABLE `wards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
