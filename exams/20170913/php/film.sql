-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Set 12, 2017 alle 15:17
-- Versione del server: 10.1.25-MariaDB
-- Versione PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `settembre`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `film`
--

CREATE TABLE `film` (
  `id` int(11) NOT NULL,
  `titolo` varchar(250) NOT NULL,
  `regista` int(11) NOT NULL,
  `genere` int(11) NOT NULL,
  `mediarecensioni` double NOT NULL,
  `numerorecensioni` int(11) NOT NULL,
  `anno` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dump dei dati per la tabella `film`
--

INSERT INTO `film` (`id`, `titolo`, `regista`, `genere`, `mediarecensioni`, `numerorecensioni`, `anno`) VALUES
(1, 'Inception', 1, 1, 8.8, 1622482, 2010),
(2, 'Interstellar', 1, 2, 8.6, 1088432, 2014),
(3, 'Django Unchained', 2, 3, 8.4, 1065840, 2012),
(4, 'Pulp Fiction', 2, 3, 8.9, 1450833, 1994),
(5, 'Alex lariete', 3, 4, 1.7, 650, 2000),
(6, 'Peppa Pig', 6, 8, 10, 5, 2004);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `film`
--
ALTER TABLE `film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
