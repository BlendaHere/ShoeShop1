-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2023 at 03:03 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contactusdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `usercontactdata`
--

CREATE TABLE `usercontactdata` (
  `id` int(255) NOT NULL,
  `emri` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usercontactdata`
--

INSERT INTO `usercontactdata` (`id`, `emri`, `email`, `phone`, `message`) VALUES
(1, 'Anesa', 'anesazhegrova6@gmail.com', '045252128', 'Faleminderit'),
(2, 'Anesaa', 'az58119@ubt-uni.net', '02455358', 'Test'),
(3, 'anesa', 'az58119@ubt-uni.net', '021254866', 'Test2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usercontactdata`
--
ALTER TABLE `usercontactdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usercontactdata`
--
ALTER TABLE `usercontactdata`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
