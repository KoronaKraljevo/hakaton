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
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naziv` varchar(50) DEFAULT NULL,
  `datum` date NOT NULL,
  `mesto` varchar(30) NOT NULL,
  `avatar` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `naziv`, `datum`, `mesto`, `avatar`) VALUES
(1, 'Bunt Rok Festival', '2010-04-20', 'Beograd', 'muzicar'),
(2, 'Festival nauke', '2020-12-20', 'Beograd', 'naucnik'),
(3, 'Tramvaj pab', '2020-12-20', 'Beograd', 'partymaniac'),
(4, 'Istrazivanje tunela Kalemegdana', '2020-11-20', 'Beograd', 'avanturista'),
(5, 'Sajam sporta', '2020-09-20', 'Beograd', 'sportista'),
(6, 'Street Art Festival', '2020-08-20', 'Kraljevo', 'muzicar'),
(7, 'Festival nauke', '2020-10-20', 'Kraljevo', 'naucnik'),
(8, 'Jagger party', '2020-06-30', 'Kraljevo', 'partymaniac'),
(9, 'Maglic fest', '2020-05-21', 'Kraljevo', 'avanturista'),
(10, 'Mali sajam sporta', '2020-10-04', 'Kraljevo', 'sportista'),
(11, 'Exit', '2020-07-11', 'Novi Sad', 'muzicar'),
(12, 'Festival nauke i obrazovanja', '2020-05-19', 'Novi Sad', 'naucnik'),
(13, 'Outlook party', '2020-09-05', 'Novi Sad', 'partymaniac'),
(14, 'Pesacenje po Fruskoj gori', '2020-05-01', 'Novi Sad', 'avanturista'),
(15, 'Novogodisnji festival odbojke', '2019-12-29', 'Novi Sad', 'sportista'),
(16, 'PozitivNI', '2020-05-31', 'Nis', 'muzicar'),
(17, 'Nauk nije bauk', '2019-11-30', 'Nis', 'naucnik'),
(18, 'K-pop party', '2020-07-23', 'Nis', 'partymaniac'),
(19, 'Ekspedicija po Sicevackoj klisuri', '2020-06-15', 'Nis', 'avanturista'),
(20, 'Medijana sport', '2020-09-23', 'Nis', 'sportista'),
(21, 'Arsenal', '2020-06-20', 'Kragujevac', 'muzicar'),
(22, 'Sumadija fest', '2020-10-19', 'Kragujevac', 'partymaniac'),
(23, 'Izvidjanje Rudnika', '2020-04-04', 'Kragujevac', 'avanturista'),
(24, 'Sport fest', '2020-05-28', 'Kragujevac', 'sportista'),
(25, 'Sajam nauke', '2020-03-17', 'Kragujevac', 'naucnik'),
(26, 'Festival prica', '2020-09-09', 'Cacak', 'muzicar'),
(27, 'Festival nauke', '2019-12-04', 'Cacak', 'naucnik'),
(28, 'DUK festival', '2020-06-08', 'Cacak', 'partymaniac'),
(29, 'Pesacenje po Ovcaru', '2020-08-16', 'Cacak', 'avanturista'),
(30, 'Gradski maraton', '2020-04-01', 'Cacak', 'sportista'),
(31, 'Sajam sporta', '2020-09-20', 'Beograd', 'sportista');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
