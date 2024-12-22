-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Dec 16, 2024 at 01:05 PM
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
-- Database: `recipe_manager`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_queries`
--

CREATE TABLE `contact_queries` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_queries`
--

INSERT INTO `contact_queries` (`id`, `name`, `email`, `message`, `created_at`) VALUES
(1, 'cc', 'omarlagon2003@yahoo.com', 'dcdd', '2024-12-13 13:49:36'),
(2, 'omaar', 'omarlagon2003@yahoo.com', 'eeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeewrljno;vn;jnvWSV;N ASFJKL; VFLA;SVNJ;LAV;ASJV;L', '2024-12-13 13:50:09'),
(3, 'omaar', 'omarlagon2003@yahoo.com', 'ugbjvjc,,,,,,,,,c,jjjjjjjjjjj', '2024-12-14 11:51:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `created_at`) VALUES
(1, 'kkkk@ss', 'omarlagon.oa@gmail.com', '$2y$10$00ctNzSFclYnNrb/ryTZ8u/EL9q1K07i.o1t9UXJ1D7w.Xgw7ytqe', '2024-12-12 14:10:42'),
(3, 'kkkk@ss', 'omarlagon2003@yahoo.com', '$2y$10$gIKfBnXupItdhfSrMQKgletCK1CsUVuBFA1yCpgISqzg78.JUPchG', '2024-12-12 14:12:27'),
(5, 'haneen', 'haneen@gmail.com', '$2y$10$tlL60L09Q0tStPHDCpIJWurfKhDpS4ZXTyxU6VyUfh.dtmUj/9NdK', '2024-12-12 14:28:01'),
(6, 'kkkk@ss', 'omarlagon.oa@gmai.com', '$2y$10$cahjkzvHe6Btb05DnjmpxOrCzaHa/Jqczimt2ns0.9iU0YxXMAsYq', '2024-12-12 14:41:55'),
(7, 'zeyad', 'zeyad@gmail.com', '$2y$10$bEemrIezsu/3f8jc2EURuuQoA5.JjYKdNK32U1llZwRlr/UZlyLGK', '2024-12-13 14:07:56'),
(8, 'tasneem', 'tasneem@gmail.com', '$2y$10$VrVU7c6m20E/65T7WchYO.r2F/B9i2qzi2Y1024WUSwjCgX.IVxdy', '2024-12-13 14:14:26'),
(9, 'mentos', 'menna@com', '$2y$10$aHP9nbCqlrLo0KOR4GrXfOWwQ9u48VzevZEX9I2jUZVgf9rNpWzOy', '2024-12-14 11:49:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_queries`
--
ALTER TABLE `contact_queries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_queries`
--
ALTER TABLE `contact_queries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
