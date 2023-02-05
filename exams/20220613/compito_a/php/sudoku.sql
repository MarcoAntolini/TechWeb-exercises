-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Giu 10, 2022 alle 15:49
-- Versione del server: 10.4.22-MariaDB
-- Versione PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `esami`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `sudoku`
--

CREATE TABLE `sudoku` (
  `id` int(11) NOT NULL,
  `statoiniziale` varchar(81) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `sudoku`
--

INSERT INTO `sudoku` (`id`, `statoiniziale`) VALUES
(1, '000005000000020000000006000000070000001000000000003000000000000008000000000000004');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `sudoku`
--
ALTER TABLE `sudoku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `sudoku`
--
ALTER TABLE `sudoku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
