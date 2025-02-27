-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2025 at 02:26 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_reservation`
--

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `room_number` varchar(10) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `room_number`, `status`) VALUES
(4, '1', 'Avaiable'),
(5, '2', 'Booked'),
(6, '3', 'Avaiable'),
(7, '4', 'Avaiable'),
(8, '5', 'Booked'),
(9, '6', 'Booked'),
(10, '7', 'Booked');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'amirspahiu00', '$2y$10$CxosW901NhmTjxT6CMUdYub/02AgoeLLBKHujeJWvSdpOVS.y4Zsq'),
(2, 'amirspahiu66', '$2y$10$otfkVQfqE/oQLwOW/cGKxOVSVNjyyh712cIEYIBmsltGa35ao38rS'),
(3, 'amirspahiu11', '$2y$10$lIRftsd.0JDzw.cKkzvdPurng07wed8YyqJYw7iyljpNwJRtm3OfS'),
(4, 'amirspahiu7', '$2y$10$NjDfHRwxu3PK5BpqfddD5eqgE.HeihHT3rfWc33XQ5LttkNc2OTyO'),
(6, 'amir0111', '$2y$10$gpVj1W/Qp3XR0NgX7RLhxeYTsgtDLJAHVRSGyGVc41lffilOhQwKW'),
(7, 'amir.spahiu', '$2y$10$.gC9l0SfAGVkq.X6JechGuTpGHyAAd5RMEXqqqbZClJeQhm2ST6X2'),
(8, 'amirddddspahiu', '$2y$10$MZ4IvJyklsuzriEN78ln0eMrjbI6/7aPkFaVpsBgI9U9PpU.MqEKu'),
(9, 'amirspahiuuu8uu8uu8uuu', '$2y$10$nSSwuPpPPGGalq81fB0ZduPg8IK0qN9kOWk920Pw/nudv7Z/GohLK'),
(10, 'amir0spahiu0', '$2y$10$vMMreCuLR8w2hSNN8rMtD.Fvoxuc6Q2Ekmn5Bld5nY0Gb.FEZllRK'),
(11, 'amirspahiu525252525', '$2y$10$DQfT3W23RYmLQfFLMiyPruGDfj1USIefdhsfXcdMLGyyJnP2YhXNO'),
(12, 'amirspahiu66772357', '$2y$10$r4OjNKaY2TWA983v1WGUKOw5RZxuZd5eU51UbKYhjBa6xDhUi71.i'),
(13, 'amir_amir', '$2y$10$DnDqnpgr3u9uUcZGYGKhfuV0BstcrBfybueP287OX1AyyJvVeC82O'),
(14, 'amirspahiu6712', '$2y$10$KDdS2gESWfroKHIX1M6cNe36y2pniTD/REtZ0vrWODu3dSUTbaNdO'),
(15, 'amir1122', '$2y$10$AVkG4RLjDaH4vsQ5Ggf6/.6gRAR4tjmRhEJ3dYJG/tJtnRJ4bP4Kq'),
(16, 'amirrrr1', '$2y$10$9MHHE5RV2qN3xRla1anFEeDrXMj3PB141By79/bMKFxwSj8.fUvLu'),
(17, 'amirrr11', '$2y$10$M7SZKqD8xLbVBLizCaAv6.7WTH7WaQ4fQuxY5Q6KCBTygngVBQol2'),
(18, 'amir_spahiu', '$2y$10$..LHSi2cHZSboxqafOAQYuCCMRpSBFEftL5xoug.kM7WP3cJfzq6y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
