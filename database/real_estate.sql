-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3325
-- Generation Time: Jul 03, 2022 at 06:04 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `real_estate`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_c`
--

CREATE TABLE `admin_c` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_c`
--

INSERT INTO `admin_c` (`id`, `admin_name`, `admin_pass`) VALUES
(1, 'angel', 'a123');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `tenant_id` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `time` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `property_id`, `tenant_id`, `date`, `time`) VALUES
(14, 21, 1, '2022-07-03', '04:22:01'),
(15, 23, 1, '2022-07-03', '04:29:44');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `message` varchar(500) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `tenant_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `message`, `owner_id`, `tenant_id`) VALUES
(1, 'hi', 19, 1),
(2, 'hi', 19, 1),
(3, 'ji', 39, 1),
(4, 'lako', 40, 1),
(5, 'zdravo', 40, 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `gmap` varchar(100) NOT NULL,
  `pn1` bigint(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fb` varchar(100) NOT NULL,
  `insta` varchar(100) NOT NULL,
  `tw` varchar(100) NOT NULL,
  `iframe` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `address`, `gmap`, `pn1`, `email`, `fb`, `insta`, `tw`, `iframe`) VALUES
(1, 'Subotica', 'https://goo.gl/maps/FgJdGsWNcfacPu6Y8', 381628398017, 'andjelajokic82@gmail.com', 'as', 'da', 'sd', 'fdfg');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `property_id` int(10) NOT NULL,
  `picture` varchar(500) NOT NULL,
  `picture1` varchar(255) NOT NULL,
  `picture2` varchar(255) NOT NULL,
  `picture3` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `district` varchar(50) NOT NULL,
  `street` varchar(100) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `property_type` varchar(50) NOT NULL,
  `price` bigint(10) NOT NULL,
  `total_rooms` int(10) NOT NULL,
  `bedroom` int(10) NOT NULL,
  `living_room` int(10) NOT NULL,
  `kitchen` int(10) NOT NULL,
  `bathroom` int(10) NOT NULL,
  `booked` varchar(100) NOT NULL DEFAULT 'No',
  `description` varchar(200) NOT NULL,
  `id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'deny'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`property_id`, `picture`, `picture1`, `picture2`, `picture3`, `city`, `district`, `street`, `contact`, `property_type`, `price`, `total_rooms`, `bedroom`, `living_room`, `kitchen`, `bathroom`, `booked`, `description`, `id`, `status`) VALUES
(21, '5.jpg', 'lr.jpg', 'br.jpg', 'bt.jpg', 'Subotica', 'Centar', 'Braca Radic 17', 381629641325, 'House Rent', 55, 5, 2, 1, 1, 1, 'Yes', 'Comfor and nice', 39, 'approved'),
(23, '6.jpg', 'kit.jpg', 'bt3.jpg', 'lr3.jpg', 'Subotica', 'Centar', 'Bele Gabrica 4', 6325126945, 'Apartment Rent', 34, 5, 2, 1, 1, 1, 'Yes', 'Very nice', 40, 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `full_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`full_name`, `username`, `email`, `password`) VALUES
('jj', 'andjea12', '26120008@vts.su.ac.rs', '$2y$10$gHnoFR6BaIxpHZd3JqfSNOHmoL2mIfhHKALz13zBotBJrbD92pZv.'),
('aa', 'andjea56', 'andjelajokic08@gmail.com', '$2y$10$49sNKwLjmWXlObUroxy4iuc.yJ86Sx02jCK0kHvWRcq8oZgfkisHe'),
('gola', 'andjea5', 'asf@gmail.com', '$2y$10$HMV63mGzNEulStQKamEQYeRAH/eUuVBGwUNdjDqx8VjbCjpIDVI5W'),
('bjha', 'andjeaa', 'nikeshtiwari3230@gmail.com', '$2y$10$11fzfx7ksGB8GctiyBVVPeriggTJdcPDS83r4lhVxkrW0Q2ciwj5a');

-- --------------------------------------------------------

--
-- Table structure for table `revieww`
--

CREATE TABLE `revieww` (
  `review_id` int(11) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `rating` varchar(10) NOT NULL,
  `property_id` int(11) NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `revieww`
--

INSERT INTO `revieww` (`review_id`, `comment`, `rating`, `property_id`, `status`) VALUES
(10, 'cao', '5', 21, 'no'),
(14, 'mama ima zute oci', '5', 21, 'no');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `site_title` varchar(50) NOT NULL,
  `site_about` varchar(250) NOT NULL,
  `shutdown` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_title`, `site_about`, `shutdown`) VALUES
(1, 'aaaangela', 'alala', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tenant`
--

CREATE TABLE `tenant` (
  `tenant_id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tenant`
--

INSERT INTO `tenant` (`tenant_id`, `full_name`, `email`, `password`, `code`) VALUES
(1, 'andjela', 'andjelajokic82@gmail.com', '0cc175b9c0f1b6a831c399e269772661', '477307ecb015e992a7071bafe3e36d9f'),
(5, 'andjela', 'jokicandjela0@gmail.com', '0cc175b9c0f1b6a831c399e269772661', '98d1dba2910ed54e9674e51e8dca04b1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` text NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `code`, `status`) VALUES
(39, 'andjela1', 'jokicandjela0@gmail.com', '0cc175b9c0f1b6a831c399e269772661', '13fe4471cd1707c71c7bb83290743546', 'approved'),
(40, 'beba', 'bat@gmail.com', '0cc175b9c0f1b6a831c399e269772661', '2027a3a0590c75dcfff82788e335a67d', 'approved'),
(43, 'andjela', 'andjea15555555555@gmail.com', '0cc175b9c0f1b6a831c399e269772661', '4ac8c792d0d40f619b9fe1acf5cb89a1', 'approved'),
(45, 'andjela', 'andjelajokic82@gmail.com', '0cc175b9c0f1b6a831c399e269772661', 'f5f68eee70a0d19b9d8d8645cdf6eb78', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `user_q`
--

CREATE TABLE `user_q` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(300) NOT NULL,
  `message` varchar(500) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `seen` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_q`
--

INSERT INTO `user_q` (`id`, `name`, `email`, `subject`, `message`, `date`, `seen`) VALUES
(20, 'andjela', 'andjelajokic82@gmail.com', 'd', 'f', '2022-07-01', 0),
(21, 'd', 'ddew@gmail.com', 'f', 'f', '2022-07-01', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_c`
--
ALTER TABLE `admin_c`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`property_id`),
  ADD KEY `add` (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `revieww`
--
ALTER TABLE `revieww`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `f` (`property_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tenant`
--
ALTER TABLE `tenant`
  ADD PRIMARY KEY (`tenant_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_q`
--
ALTER TABLE `user_q`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_c`
--
ALTER TABLE `admin_c`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `property_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `revieww`
--
ALTER TABLE `revieww`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tenant`
--
ALTER TABLE `tenant`
  MODIFY `tenant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `user_q`
--
ALTER TABLE `user_q`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `property`
--
ALTER TABLE `property`
  ADD CONSTRAINT `add` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Constraints for table `revieww`
--
ALTER TABLE `revieww`
  ADD CONSTRAINT `f` FOREIGN KEY (`property_id`) REFERENCES `property` (`property_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
