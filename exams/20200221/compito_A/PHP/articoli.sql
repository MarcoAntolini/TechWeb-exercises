-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creato il: Feb 20, 2020 alle 13:45
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
-- Database: `febbraio`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `articoli`
--

CREATE TABLE `articoli` (
  `id` int(10) NOT NULL,
  `titolo` varchar(255) NOT NULL,
  `descrizione` varchar(2500) NOT NULL,
  `categoria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `articoli`
--

INSERT INTO `articoli` (`id`, `titolo`, `descrizione`, `categoria`) VALUES
(1, 'Titolo 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque blandit elit fermentum bibendum elementum. Quisque vel lobortis eros. Sed vel est venenatis, convallis dolor vel, interdum ipsum. Aenean consequat placerat porttitor. Duis non leo in ante ullamcorper ultrices quis et eros. Donec iaculis libero quis molestie hendrerit. Aliquam nec odio commodo, iaculis lacus sed, consectetur ex. Vestibulum accumsan lorem eu neque vestibulum condimentum. Duis mollis diam vitae sem placerat, vel facilisis lacus facilisis.', 'sport'),
(2, 'Titolo 2', 'Pellentesque finibus, nunc quis tincidunt iaculis, massa libero semper metus, vitae faucibus tortor turpis nec mi. Mauris et libero sagittis, vehicula metus vitae, feugiat nisl. Donec non mattis massa. Donec ut libero vitae purus finibus sollicitudin ut ut elit. Nulla vel sapien vitae elit malesuada maximus. Proin felis dui, tempus eget egestas eget, lobortis id neque. Nulla ut lobortis diam.', 'politica'),
(3, 'Titolo 3', 'In hac habitasse platea dictumst. Vivamus efficitur ipsum at semper interdum. Curabitur faucibus mi non gravida varius. Proin pretium felis a ex sagittis sodales. Fusce id nulla eu nisi blandit sagittis at non tellus. Vestibulum in ligula elementum, ornare nisi eget, efficitur eros. Pellentesque iaculis porta eros, sed cursus nulla euismod eget. Mauris vitae velit at nisl consectetur scelerisque et sit amet dolor. Curabitur non quam ligula. Aliquam venenatis velit justo, eget posuere augue sollicitudin nec. Sed at ipsum ex.', 'politica'),
(4, 'Titolo 4', 'Cras posuere, mi nec eleifend tempor, justo ligula porttitor massa, a maximus felis lacus aliquet turpis. Morbi sollicitudin facilisis lacus, et consectetur risus imperdiet eu. Nulla et turpis non tortor maximus rhoncus. Mauris ut mattis nisi. Fusce erat mi, iaculis ultricies ligula at, maximus vestibulum sapien. Praesent dignissim turpis nec lorem imperdiet, eu vestibulum quam facilisis. Nunc condimentum nisi vel dapibus maximus. Integer euismod velit quis odio aliquam, vel dictum lorem luctus.', 'attualità'),
(5, 'Titolo 5', 'Curabitur nec ultrices nunc, et molestie dui. Vestibulum erat ipsum, pellentesque ac sodales sit amet, venenatis ac ante. Maecenas ultricies consequat nisi, non consectetur dui sodales fermentum. Cras eleifend tincidunt pharetra. Praesent sapien enim, suscipit et aliquam iaculis, posuere a urna. Praesent at pulvinar ipsum, ac accumsan justo. In eget molestie purus. Sed porta vitae ex eget porttitor. Aliquam et ornare ex. Donec sit amet ullamcorper est. Nulla nec laoreet lorem. Morbi interdum metus mi, vel dictum ipsum commodo facilisis.', 'scienze'),
(6, 'Titolo 6', 'Curabitur gravida sit amet quam eu molestie. Nullam mattis nulla mattis neque vulputate, in suscipit est accumsan. Donec libero urna, facilisis sit amet auctor ut, placerat vel risus. Cras egestas ipsum sit amet nunc aliquam imperdiet. Curabitur vitae lacus nec nisi vulputate consectetur sit amet quis massa. Nunc ac suscipit augue. Aliquam condimentum euismod nisl, nec tincidunt libero placerat quis. Fusce dictum nisl mauris, at luctus neque bibendum in. ', 'scienze');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `articoli`
--
ALTER TABLE `articoli`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `articoli`
--
ALTER TABLE `articoli`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
