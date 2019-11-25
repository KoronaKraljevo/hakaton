-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 25, 2019 at 08:07 PM
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
CREATE DATABASE IF NOT EXISTS `hakaton` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `hakaton`;

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

-- --------------------------------------------------------

--
-- Table structure for table `komentari`
--

DROP TABLE IF EXISTS `komentari`;
CREATE TABLE IF NOT EXISTS `komentari` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `komentar` varchar(500) NOT NULL,
  `datum` varchar(20) NOT NULL,
  `ime` varchar(20) NOT NULL,
  `prezime` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentari`
--

INSERT INTO `komentari` (`id`, `komentar`, `datum`, `ime`, `prezime`, `email`) VALUES
(8, 'Ovo je jedan kul komentar!', '11.25.2019', 'Korona', 'Tim', 'korona@gmail.com'),
(3, 'Jako kul komentar', '11.24.2019', 'Nevena', 'Gligorov', 'nenakv3@gmail.com'),
(4, 'Pozdrav od tima Korona!', '11.25.2019', 'Strahinja', 'Pantic', 'pantic@gmail.com'),
(9, 'Primer komentara', '11.25.2019', 'Andrija', 'Slovic', 'andrija@gmail.com'),
(10, 'Kraljevo still rules!', '11.25.2019', 'Tim', 'Korona', 'timkorona@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `korisnikevents`
--

DROP TABLE IF EXISTS `korisnikevents`;
CREATE TABLE IF NOT EXISTS `korisnikevents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naziv` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `br_tel` int(15) NOT NULL,
  `mesto_odr` varchar(50) NOT NULL,
  `dat_odr` date NOT NULL,
  `naziv_dog` varchar(50) NOT NULL,
  `kategorija` varchar(20) NOT NULL,
  `opis` varchar(150) NOT NULL,
  `slika` longblob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=92 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `korisnikevents`
--

INSERT INTO `korisnikevents` (`id`, `naziv`, `email`, `br_tel`, `mesto_odr`, `dat_odr`, `naziv_dog`, `kategorija`, `opis`, `slika`) VALUES
(88, 'Tim Korona12', 'korona@gmail.com', 614579864, 'Kraljevo', '2020-12-12', 'Sajam nauke', 'Naucnik', 'Prikaz 1. Sajma nauke!', 0x433a77616d703634096d70706870393539372e746d70),
(89, 'asdsad1111', 'strahinjapantic133@gmail.com', 614579864, 'sdadas', '2001-11-12', 'asdsad', 'Naucnik', 'asdadf', 0x433a77616d703634096d70706870343233422e746d70);

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
