-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Gen 04, 2018 alle 23:55
-- Versione del server: 10.1.28-MariaDB
-- Versione PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `impiccato`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `parola`
--

CREATE TABLE `parola` (
  `parola_id` int(5) NOT NULL,
  `parola` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `parola`
--

INSERT INTO `parola` (`parola_id`, `parola`) VALUES
(1, 'casa'),
(2, 'albero'),
(3, 'quarantadue'),
(4, 'etnia'),
(5, 'peraltro');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `parola`
--
ALTER TABLE `parola`
  ADD PRIMARY KEY (`parola_id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `parola`
--
ALTER TABLE `parola`
  MODIFY `parola_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
