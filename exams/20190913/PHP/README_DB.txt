Istruzioni per creare il database e la tabella

Andare in phpmyAdmin e andare nella voce di menu a tab "SQL".

1. Creare il DB

CREATE DATABASE settembre

2. Andare nel database appena creato e create la tabella 

CREATE TABLE `starwars` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `height` int(10) NOT NULL,
  `mass` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `starwars`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `starwars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

3. Popolare il DB

INSERT INTO `starwars` (`id`, `name`, `height`, `mass`) VALUES
(1, 'Luke Skywalker', 172, 77),
(2, 'C-3PO', 167, 75),
(3, 'R2-D2', 96, 32),
(4, 'Darth Vader', 202, 136);


