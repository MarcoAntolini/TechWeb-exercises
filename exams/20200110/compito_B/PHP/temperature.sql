-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creato il: Gen 07, 2020 alle 17:56
-- Versione del server: 10.1.32-MariaDB
-- Versione PHP: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `climate`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `temperature`
--

CREATE TABLE `temperature` (
  `id_temp` int(255) NOT NULL,
  `min` varchar(10) NOT NULL,
  `max` varchar(10) NOT NULL,
  `citta` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `temperature`
--

INSERT INTO `temperature` (`id_temp`, `min`, `max`, `citta`) VALUES
(1, '1', '3', 'torino'),
(2, '', '', 'milano'),
(3, '', '', 'genova'),
(4, '', '', 'trento'),
(5, '', '', 'roma'),
(6, '10', '18', 'bologna'),
(7, '', '', 'firenze'),
(8, '14', '22', 'napoli'),
(9, '', '', 'bari');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `temperature`
--
ALTER TABLE `temperature`
  ADD PRIMARY KEY (`id_temp`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `temperature`
--
ALTER TABLE `temperature`
  MODIFY `id_temp` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
