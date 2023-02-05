Istruzioni per creare il database e la tabella

Andare in phpmyAdmin e andare nella voce di menu a tab "SQL".

1. Creare il DB

CREATE DATABASE numeri

2. Andare nel database appena creato e create la tabella 

CREATE TABLE `numeri` (
  `id` int(11) NOT NULL,
  `numero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `numeri`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `numeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

3. Popolare il DB

INSERT INTO `numeri` (`id`, `numero`) VALUES
(1, 32),
(2, 20),
(3, 29330),
(4, 234),
(5, 436),
(6, 1);

