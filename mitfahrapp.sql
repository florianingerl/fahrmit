-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Erstellungszeit: 12. Okt 2022 um 14:24
-- Server-Version: 5.7.36
-- PHP-Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `mitfahrapp`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `fahrten`
--

DROP TABLE IF EXISTS `fahrten`;
CREATE TABLE IF NOT EXISTS `fahrten` (
  `fahrtennummer` int(11) NOT NULL AUTO_INCREMENT,
  `zeit` varchar(200) DEFAULT NULL,
  `von` varchar(200) DEFAULT NULL,
  `nach` varchar(200) DEFAULT NULL,
  `plaetze` int(11) DEFAULT NULL,
  `userid` int(10) DEFAULT NULL,
  `datum` date NOT NULL,
  PRIMARY KEY (`fahrtennummer`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `fahrten`
--

INSERT INTO `fahrten` (`fahrtennummer`, `zeit`, `von`, `nach`, `plaetze`, `userid`, `datum`) VALUES
(1, '2324', 'Bremen', 'Hamburg', 3, 1, '2022-10-05'),
(2, '2326', 'Frankfurt', 'Nerdistan', 2, 1, '2022-10-05'),
(3, '2328', 'Bochum', 'Garmisch-Partenkirch', 2, 1, '2022-10-05'),
(4, '2330', 'Muenchen', 'Zuerich', 5, 1, '2022-10-05'),
(5, '2332', 'Berlin', 'Wien', 4, 1, '2022-10-05'),
(6, '2334', 'Kaiserlautern', 'Lissabon', 7, 1, '2022-10-05'),
(7, '2336', 'Guetersloh', 'Marseille', 3, 1, '2022-10-05'),
(8, '2338', 'Pinneberg', 'Duisburg', 6, 1, '2022-10-05'),
(9, '2340', 'Gelsenkirchen', 'Paris', 1, 1, '2022-10-05'),
(10, '2342', 'Kopenhagen', 'Legoland', 4, 1, '2022-10-05'),
(11, NULL, 'MÃ¼nchen', 'Baden-Baden', 8, 1, '2022-10-05'),
(12, '10:00am', 'Munich', 'Hamburg', 4, 9, '2022-10-06'),
(13, '22:00pm', 'Baden-Baden', 'Munich', 4, 9, '2022-10-09');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'florianingerl', 'imelflorianingerl@gmail.com', 'ABC'),
(2, 'fadekemischriefer', 'fadekemi.schriefer@yahoo.com', 'XYZ'),
(3, 'Hermann', 'Ingerl-H@online.de', 'Herbstein'),
(6, 'emmi', 'Emmi@gmail.com', 'ABC'),
(8, 'angela', 'angela@gmail.com', 'ABCD'),
(9, 'christophdaum', 'christophdaum@gmail.com', 'Amen');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
