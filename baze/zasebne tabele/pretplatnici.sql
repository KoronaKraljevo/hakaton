-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 25, 2019 at 07:53 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hakaton`
--

-- --------------------------------------------------------

--
-- Table structure for table `pretplatnici`
--

DROP TABLE IF EXISTS `pretplatnici`;
CREATE TABLE IF NOT EXISTS `pretplatnici` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pretplatnici`
--

INSERT INTO `pretplatnici` (`id`, `email`) VALUES
(23, 'korona@gmail.com'),
(25, 'slovic@gmail.com'),
(26, 'pantic@gmail.com'),
(27, 'gligorov@gmail.com'),
(28, 'jovanovic@gmail.com'),
(44, 'nena@gmail.com'),
(45, 'nenakv@gmail.com'),
(46, 'nenakv3@gmail.com'),
(47, 'korona1@gmail.com'),
(48, 'korrona@gmail.com'),
(49, 'kraljevorules@gmail.com'),
(50, '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
