-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2020 at 10:06 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lamborghini_registro`
--
CREATE DATABASE IF NOT EXISTS `lamborghini_registro` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `lamborghini_registro`;

-- --------------------------------------------------------

--
-- Table structure for table `datos_contacto`
--

CREATE TABLE `datos_contacto` (
  `id` int(7) NOT NULL,
  `nombre` varchar(600) NOT NULL,
  `correo` varchar(600) NOT NULL,
  `tema` varchar(1200) NOT NULL,
  `mensaje` varchar(600) NOT NULL,
  `fecha` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datos_contacto`
--

INSERT INTO `datos_contacto` (`id`, `nombre`, `correo`, `tema`, `mensaje`, `fecha`) VALUES
(1, 'pamela', 'frayjunior-03183@hotmail.com', 'fray', 'holaaaaaaaaaaaaaaaaa', '01/12/20');

-- --------------------------------------------------------

--
-- Table structure for table `datos_subscripciones`
--

CREATE TABLE `datos_subscripciones` (
  `id` int(7) NOT NULL,
  `nombre` varchar(600) NOT NULL,
  `correo` varchar(600) NOT NULL,
  `fecha` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datos_subscripciones`
--

INSERT INTO `datos_subscripciones` (`id`, `nombre`, `correo`, `fecha`) VALUES
(1, 'pamela', 'frayjunior-03183@hotmail.com', '01/12/20'),
(2, 'pamela', 'frayjunior-03183@hotmail.com', '01/12/20'),
(3, 'pamela', 'frayjunior-03183@hotmail.com', '01/12/20'),
(4, 'pamela', 'frayjunior-03183@hotmail.com', '01/12/20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datos_contacto`
--
ALTER TABLE `datos_contacto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datos_subscripciones`
--
ALTER TABLE `datos_subscripciones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datos_contacto`
--
ALTER TABLE `datos_contacto`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `datos_subscripciones`
--
ALTER TABLE `datos_subscripciones`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
