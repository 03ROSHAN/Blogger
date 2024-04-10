-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2024 at 07:11 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Sr_no` int(10) UNSIGNED ZEROFILL NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(500) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Sr_no`, `username`, `email`, `password`, `time`) VALUES
(0000000001, 'kajare', 'roshankajare8@gmail.com', '0', '2024-03-02 10:05:40'),
(0000000002, 'asdfg', 'roshankajare28@gmail.com', 'fd2cc6c54239c40495a0d3a93b6380eb', '2024-03-02 10:05:40'),
(0000000003, 'qwert', 'asd45@gmail.com', '912ec803b2ce49e4a541068d495ab570', '2024-03-02 10:05:40'),
(0000000004, 'royalroshan03', 'roshankajare98@gmail.com', '4534344e975e9af0132fcad81a550b27', '2024-03-02 10:05:40'),
(0000000005, 'roshan', 'roshankajare9@gmail.com', 'd6dfb33a2052663df81c35e5496b3b1b', '2024-03-02 10:05:40'),
(0000000006, '', '', '$2y$10$xN7O6swbf1cRwLipuQ2wjeqhZ0PRNEQdmHSGMgOcs2d', '2024-03-02 10:07:54'),
(0000000007, 'roshan kajare', 'roshankajare982@gmail.com', '$2y$10$IsXtl6ShfQ.4YLHTMsVJ.eKYBkbgFEsxdE1XfkdscX.', '2024-03-02 10:24:28'),
(0000000008, 'roshan', 'roshan@gmail.com', '$2y$10$E1cEclBuRcbSW9ZTKtgAzuWCD2okFeKU7cGcqSJ14TM', '2024-03-02 10:51:16'),
(0000000009, 'roshan kajare', 'roshan2@gmail.com', '$2y$10$e.2QEDGq03vqDL2JvwX/jO62qtO92kdJwFhkd2ZY4zf', '2024-03-02 10:59:31'),
(0000000011, 'Sahil Mane', 'sahilmane025@gmail.com', '$2y$10$dPawguQbFY9uQvGnGXP3XONmuEcabqXvM.QEK6fTDgx', '2024-03-02 11:14:34'),
(0000000012, 'Sahil Manoj Mane', 'sahil@gmail.com', '$2y$10$911O0YFfO5LHOjS2qrBGt.AIvp9Q1AiPjzWQKXD7cyK', '2024-03-02 11:20:18'),
(0000000013, 'Sahil Mane', 'sahil2@gmail.com', '$2y$10$KPi1D6NiWewjv.4Q7aBLo.G.6TOyl5QGKAtKKXVXCx2OWyZ6aq5ze', '2024-03-02 11:27:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Sr_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Sr_no` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
