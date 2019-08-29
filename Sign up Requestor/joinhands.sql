-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2018 at 07:19 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `joinhands`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `organization` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `country_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hash` varchar(32) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `country_name`, `email`, `password`, `hash`, `active`) VALUES
(1, 'test', 'test', 'test@gml.com', '$2y$10$WLnNEUZduJWHIYeSeRYuYu5vtGPEtEnkPs4.k1vhlHgx5WfuvSa0S', 'eb163727917cbba1eea208541a643e74', 0),
(2, 'ddg', 'gddgf', 'dg@gmail.com', '$2y$10$guQTt.efPEkEy8w30MXkCO2yeyPx/.bc7AYadirdh2dSGK/cvrUyK', '5705e1164a8394aace6018e27d20d237', 1),
(3, 'test', 'test', 'test@yaoo.com', '$2y$10$.9MtlgKYuIAWindv6/tTROAWA7CS3nUmoeLjcc8hVO4g8UdHQrB2K', '4a47d2983c8bd392b120b627e0e1cab4', 0),
(4, 'sanjeevan', '', 'sanjeevan@ceffectz.com', '$2y$10$s97fWruA/zYOaY5MFJzpX.Mhqampn5hnqyCEQMKkms6OWyV4JnWry', 'c8fbbc86abe8bd6a5eb6a3b4d0411301', 0),
(5, 'qwe', 'qwer', 'sanju@gmail.com', '$2y$10$4j3asr.ywqHzq6JjzW0vFuwSsRlHxdBSrXndlHmcmCfvLQ6b3omnm', '9b70e8fe62e40c570a322f1b0b659098', 0),
(6, 'shahan', 'SriLanka', 'shahan@gmail.com', '$2y$10$Snlk/3BVMVdWKUSIJhpmR.7/cEVR.58XfPDDUrEyV/bINDo2nswzy', '8065d07da4a77621450aa84fee5656d9', 0),
(7, 'shahan', 'Armenia', 'shahan1@gmail.com', '$2y$10$SrG0uvNwfx39vIYsnwm9bunyHlxTLAnOUTZ0mLl5biiXOtjt6bK2C', '877a9ba7a98f75b90a9d49f53f15a858', 1),
(8, 'buwa', 'Somalia', 'buwa@gmail.com', '$2y$10$jc2qEKQWq9MLA6s96agObeuxry4EeveJ/77zum8LCedIuDgadA94O', 'a86c450b76fb8c371afead6410d55534', 0),
(9, 'mali', 'Somalia', 'mali@gmail.com', '$2y$10$CG2ZsRHMHoII6myuQ/R.fO2Ah3u7n5chZbPsYlsYbUInA8REdijuy', '6c4b761a28b734fe93831e3fb400ce87', 0);

--
-- Indexes for dumped tables
--

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
