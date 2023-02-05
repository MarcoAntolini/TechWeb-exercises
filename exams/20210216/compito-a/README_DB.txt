Istruzioni per creare il database e la tabella

Andare in phpmyAdmin e andare nella voce di menu a tab "SQL".

1. Creare il DB

CREATE DATABASE febbraio

2. Andare nel database appena creato e create la tabella 

CREATE TABLE `dati` (
  `id` int(11) NOT NULL,
  `chiave` varchar(50) NOT NULL,
  `valore` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


ALTER TABLE `dati`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `dati`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

3. Popolare il DB

INSERT INTO `dati` (`id`, `chiave`, `valore`) VALUES
(1, 'Corso', 'Tecnologie Web'),
(2, 'CFU', '6'),
(3, 'Laurea', 'Triennale');

