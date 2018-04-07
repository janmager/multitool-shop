-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: 192.168.101.134
-- Czas wygenerowania: 04 Kwi 2018, 22:37
-- Wersja serwera: 5.6.36-82.1-log
-- Wersja PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `jancziii_nauczyciele`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `shop`
--

CREATE TABLE IF NOT EXISTS `shop` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8_polish_ci NOT NULL,
  `stajnia` bit(1) DEFAULT b'0',
  `lacznik` bit(1) DEFAULT b'0',
  `automat` bit(1) DEFAULT b'0',
  `price` float NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=100 ;

--
-- Zrzut danych tabeli `shop`
--

INSERT INTO `shop` (`id`, `name`, `stajnia`, `lacznik`, `automat`, `price`) VALUES
(12, 'Chrupki tygryski', '', '', '\0', 1.9),
(13, 'Przysmacki', '', '', '\0', 3.9),
(14, 'Wafle Sonco', '', '', '\0', 3.8),
(15, 'Sunbites', '', '', '\0', 4.2),
(16, 'Knopers', '', '', '', 1.8),
(17, 'Lubisie', '', '', '\0', 1.4),
(18, 'Kinder Chocolate', '', '', '\0', 2.6),
(19, 'Kinder Bueno', '', '', '\0', 3.4),
(20, '7Days', '', '', '\0', 2.3),
(21, 'M&M', '', '', '\0', 2.4),
(22, 'Malti KEKS', '', '', '\0', 2.5),
(23, '7Days Bake Rolls', '', '', '\0', 5.5),
(24, 'Mareti Bruschette', '', '', '\0', 3.1),
(25, 'Paluszki Beskidzkie', '', '', '\0', 1.3),
(26, 'Andruty', '', '', '\0', 1.5),
(27, 'Petti Beurre', '', '', '\0', 0.9),
(28, 'Leibniz Minis', '', '', '\0', 5),
(29, 'Delicje', '', '', '\0', 3.5),
(30, 'Biszkopty', '', '', '\0', 3.9),
(31, 'Crunchy', '', '', '\0', 1.5),
(32, 'Oshee', '', '', '\0', 2.3),
(33, 'Frugo Super', '', '', '\0', 2.8),
(34, 'Frugo', '', '', '\0', 2.6),
(35, 'IsotOnic', '', '', '\0', 2.9),
(36, 'Oshee Water', '', '', '\0', 3.6),
(37, 'Oshee Water 1L', '', '', '\0', 5.2),
(38, 'Tymbark 500ML', '', '', '\0', 2.7),
(39, 'Tymbark 250ML', '', '', '\0', 1.7),
(40, 'Tymbark Witamina 300ML', '', '', '\0', 2.3),
(41, 'Tarczyn 300ML', '', '', '\0', 2.1),
(42, 'Tymbark Kaktus', '', '', '\0', 4.5),
(49, 'Tymbark 1L', '', '', '\0', 4),
(50, 'Tymbark 400ML', '', '', '\0', 2.3),
(51, 'Aloe Vera', '', '', '\0', 5.2),
(52, 'Nestea 500ML', '', '', '\0', 3.3),
(53, '4move', '', '', '\0', 2.3),
(54, 'Cappy', '', '', '\0', 2.3),
(55, 'Arctic+', '', '', '\0', 3.4),
(56, 'Kubuś 900ML', '', '', '\0', 4.4),
(57, 'Kropla Beskidu 500ML', '', '', '\0', 2.2),
(58, 'Żywiec Zdrój 500ML', '', '', '\0', 1.8),
(59, 'Primavera 500ML', '', '', '\0', 1.7),
(60, 'Cisowianka Niegazowana 500ML', '', '', '\0', 1.4),
(61, 'Cisowianka Gazowana 500ML', '', '', '\0', 1.5),
(62, 'Muszynianka 1,5L', '', '', '\0', 2.1),
(63, 'Primavera niegazowana 1,5L', '', '', '\0', 2),
(64, 'Primavera gazowana 1,5L', '', '', '\0', 2),
(65, 'Nałęczowianka 1,5L', '', '', '\0', 2.3),
(66, 'Żywiec zdrój 1,5L', '', '', '\0', 2.3),
(67, 'Cisowianka 1,5L', '', '', '\0', 2.3),
(68, 'Kinder Bueno', '\0', '\0', '', 2),
(69, 'Oshee Vitamin', '\0', '\0', '', 2.5),
(70, 'Malti KEKS', '\0', '\0', '', 2.2),
(71, 'Beskidzkie Paluszki', '\0', '\0', '', 1.7),
(72, 'Orzeszki Ziemme', '\0', '\0', '', 2.2),
(73, 'Góralki', '\0', '\0', '', 1.5),
(74, 'Sante Crunchy', '\0', '\0', '', 1.8),
(75, 'Grzesiek', '\0', '\0', '', 1.5),
(76, '3Bit', '\0', '\0', '', 2),
(77, 'Princessa', '\0', '\0', '', 1.3),
(78, 'PrincePolo', '\0', '\0', '', 2),
(79, 'Selenka 500ML', '\0', '\0', '', 2),
(80, 'Oshee Vitamin 500ML', '\0', '\0', '', 3.2),
(81, 'Tymbark 300ML', '\0', '\0', '', 2.2),
(82, 'Tarczyn 300ML', '\0', '\0', '', 2.2),
(83, 'Lipton 330ML', '\0', '\0', '', 2.2),
(84, 'Frugo 500ML', '\0', '\0', '', 3.2),
(85, 'Baton Oshee', '\0', '\0', '', 2),
(86, 'Attack', '\0', '\0', '', 1.2),
(87, 'Bounty', '\0', '\0', '', 2.8),
(88, 'Belvita', '\0', '\0', '', 2.2),
(89, '7Days', '\0', '\0', '', 2.2),
(90, 'Oshee Vitamin', '\0', '\0', '', 2.22),
(91, 'Paluszki', '\0', '\0', '', 2),
(92, 'Snickers', '\0', '\0', '', 1.8),
(93, 'M&M', '\0', '\0', '', 2.3),
(94, 'Petit Beurre', '\0', '\0', '', 1),
(95, 'Cymes Tom&Jerry 200ML', '\0', '\0', '', 1.2),
(96, 'Tymbark 250ML', '\0', '\0', '', 2.2),
(97, 'Kubuś Mus', '\0', '\0', '', 2),
(98, 'Krystaliczne Źródła 500ML', '\0', '\0', '', 2),
(99, 'Snack2u', '\0', '\0', '', 2);

DELIMITER $$
--
-- Zdarzenia
--
CREATE DEFINER=`jancziii`@`192.168.101.114` EVENT `resetowanko` ON SCHEDULE AT '2018-03-13 20:23:00' ON COMPLETION NOT PRESERVE ENABLE DO UPDATE `humorki` SET `O1`=0,`O2`=0,`O3`=0,`Glosy`=0 WHERE `id`>0$$

DELIMITER ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
