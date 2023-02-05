-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Gen 13, 2022 alle 10:10
-- Versione del server: 10.4.14-MariaDB
-- Versione PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_esami`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `cittadino`
--

CREATE TABLE `cittadino` (
  `idcittadino` int(10) UNSIGNED NOT NULL,
  `nome` varchar(45) NOT NULL,
  `cognome` varchar(45) NOT NULL,
  `codicefiscale` varchar(16) NOT NULL,
  `datanascita` date NOT NULL,
  `sesso` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `cittadino`
--

INSERT INTO `cittadino` (`idcittadino`, `nome`, `cognome`, `codicefiscale`, `datanascita`, `sesso`) VALUES
(1, 'Silvio', 'Berlusconi', 'BRLSLV36P29F205W', '1936-09-29', 'M'),
(2, 'Matteo', 'Renzi', 'RNZMTT75P11F233Q', '1975-01-11', 'M'),
(3, 'Marta', 'Cartabia', 'MRTCRT63K04F763C', '1963-05-14', 'F');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `cittadino`
--
ALTER TABLE `cittadino`
  ADD PRIMARY KEY (`idcittadino`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `cittadino`
--
ALTER TABLE `cittadino`
  MODIFY `idcittadino` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
