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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
