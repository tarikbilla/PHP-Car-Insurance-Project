-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2020 at 07:53 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `insurance_pro`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `parents` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `created_date` varchar(255) NOT NULL,
  `created_user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `parents`, `amount`, `created_date`, `created_user`) VALUES
(1, 'Motor Bicke', ' ', '3500', '04-10-2020', '1'),
(2, 'Track', ' ', '600', '04-10-2020', '1'),
(3, 'vaspa', 'Motor Bicke', '300', '04-10-2020', '1'),
(4, 'vaspa', 'Motor Bicke', '300', '04-10-2020', '1');

-- --------------------------------------------------------

--
-- Table structure for table `insurance`
--

CREATE TABLE `insurance` (
  `id` int(11) NOT NULL,
  `name_of_insured` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `mobile_no` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `vehicle_brand` varchar(255) NOT NULL,
  `reg_no` varchar(255) NOT NULL,
  `hp_cc` varchar(255) NOT NULL,
  `type_of_body` varchar(255) NOT NULL,
  `sets_ton` varchar(255) NOT NULL,
  `year_of_model` varchar(255) NOT NULL,
  `engine_no` varchar(255) NOT NULL,
  `chassis_no` varchar(255) NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `entry_date` varchar(255) NOT NULL,
  `entry_time` varchar(250) NOT NULL,
  `fees` varchar(255) NOT NULL,
  `entry_user_id` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `insurance`
--

INSERT INTO `insurance` (`id`, `name_of_insured`, `father_name`, `mobile_no`, `address`, `vehicle_brand`, `reg_no`, `hp_cc`, `type_of_body`, `sets_ton`, `year_of_model`, `engine_no`, `chassis_no`, `start_date`, `entry_date`, `entry_time`, `fees`, `entry_user_id`, `status`) VALUES
(1, 'tarik', 'mohashin', '01884414000', 'jessore', 'Pulser', '2011456', '654', '1', '1', '2020', '236521', '236522554', '2020-10-15', '04-10-2020', '', '200', '5', 'No'),
(2, 'tarik', 'mohashin', '01884414000', 'jessore', 'Pulser', '2011456', '654', '1', '1', '2020', '236521', '236522554', '2020-10-15', '04-10-2020', '22:43:18', '200', '4', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `memberID` int(11) NOT NULL,
  `rules` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `phone_no` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `first_name` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `gender` varchar(15) COLLATE utf8mb4_bin NOT NULL,
  `address` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `profile_pic_path` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `active` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `resetToken` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `resetComplete` varchar(3) COLLATE utf8mb4_bin DEFAULT 'No',
  `accept_admin_username` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `balance` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `active_status` varchar(50) COLLATE utf8mb4_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`memberID`, `rules`, `username`, `password`, `email`, `phone_no`, `first_name`, `last_name`, `gender`, `address`, `profile_pic_path`, `active`, `resetToken`, `resetComplete`, `accept_admin_username`, `balance`, `active_status`) VALUES
(1, 'admin', 'admin', '$2y$10$6XLt/O9.7LTyKb.PGFms2Oq5g67KA8JS7WtPN67IBsGiSBTVvKxgO', 'admin@admin.com', '017001', 'Admin', ' ', 'male', 'jessore', 'img/profile_pic/admin.jpg', 'Yes', NULL, 'No', '', '5', 'Yes'),
(2, 'engineer', 'tarik', '$2y$10$U.Tq1JqGGQyYLCqsYTWxQOWvZ8snptC.9BFhYJvN/bsYzeZfhnFjy', 'tarik@gmail.com', '01700112233', 'Tarik', 'billa', 'male', 'jessore', 'img/profile_pic/tarik.jpg', 'Yes', NULL, 'No', '', '0', 'Yes'),
(3, 'engineer', 'tarik01', '$2y$10$D7jkUVKiTJYGW3Jkat8Us.pvezqVIbPwY7dGRTst4BV.wy2cNy.B.', 'tarik@gmail.com', '0170011223', 'tarik', 'Billa', 'other', 'jessore', 'img/profile_pic/tarik01.jpg', 'f2e0d6ff7781584730e5dab1db0dab95', NULL, 'No', 'admin', '0', 'Yes'),
(4, '', 'tarikbd', '$2y$10$PEeJcWZU47GbMsD39.soweVvViYuHEZCJjEhz3G6qnipqj2DLijum', 'tarikbilla@gmail.com', '', '', '', '', '', '', 'Yes', NULL, 'No', '', '0', 'No'),
(5, '', 'tarik0001', '$2y$10$6ZYTw9J.42cSzX4LYUgeLu93tvKSUS8Or2QBVxJOABQb7tUQ548CC', 'plabon@gmail.com', '01884414000', 'tarik', 'billa', '', '', '', 'Yes', NULL, 'No', '', '0', 'Yes'),
(6, '', 'tarik0002', '$2y$10$hUypLx8YdekMQWFk0qC0i.my/1e7Ug2.VfKt89/1UMu0vg14Y9r56', 'plabo0n@gmail.com', '01884414000', 'tarik', 'billa', '', '', '', 'Yes', NULL, 'No', '', '0', ''),
(7, '', 'tarik0003', '$2y$10$r2CbxTKaAs8ynvbVsTQuR.dHp52u1a7caGkKHVjMv577Er0cJu3bm', 'plabo00n@gmail.com', '01884414000', 'tarik', 'billa', '', '', 'img/default_profile_pic.png', 'Yes', NULL, 'No', '', '0', 'No'),
(8, '', 'tar', '$2y$10$4HZkS3Uazssbmk.RAI1z7uZf3ADF4fTHXpHrNqAFvAlLOKN4k6TxS', 'tinni.aktar.562@tar.tar', 'tar', 'tarik', 'bd', '', '', 'img/default_profile_pic.png', 'Yes', NULL, 'No', '', '0', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `user_id` int(15) NOT NULL,
  `sender_id` varchar(250) NOT NULL,
  `msg_title` varchar(255) NOT NULL,
  `msg_description` varchar(250) NOT NULL,
  `msg_date` varchar(255) NOT NULL,
  `msg_time` varchar(255) NOT NULL,
  `seen_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `user_id`, `sender_id`, `msg_title`, `msg_description`, `msg_date`, `msg_time`, `seen_status`) VALUES
(1, 3, '1', 'Send', 'At this time we decide that give an 80% Offer for new Insurance.', '05-10-2020', '22:38:00', ''),
(2, 3, '1', 'Send', 'At this time we decide that give an 80% Offer for new Insurance.', '05-10-2020', '22:39:19', ''),
(3, 5, '1', 'Send 2', 'At this time we decide that give an 80% Offer for new Insurance.', '05-10-2020', '22:39:38', 'No'),
(4, 3, '1', 'Send', 'At this time we decide that give an 80% Offer for new Insurance.', '05-10-2020', '22:39:58', ''),
(5, 5, '1', 'Supper Offer!!!', 'Supper Offer!!! Supper Offer!!!Supper Offer!!! Supper Offer!!!Supper Offer!!! Supper Offer!!!Supper Offer!!! Supper Offer!!!Supper Offer!!! Supper Offer!!!', '05-10-2020', '23:28:30', 'No');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `insurance`
--
ALTER TABLE `insurance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`memberID`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `insurance`
--
ALTER TABLE `insurance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `memberID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
