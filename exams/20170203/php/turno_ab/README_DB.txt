Istruzioni per creare il database e la tabella

Andare in phpmyAdmin e andare nella voce di menu a tab "SQL".

1. Creare il DB

CREATE DATABASE matematica

2. Andare nel database appena creato e create la tabella 

CREATE TABLE `numeri` (
  `idnumero` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `sequenza` int(11) NOT NULL,
  `ordine` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

3. Popolare il DB

INSERT INTO `numeri` (`idnumero`, `numero`, `sequenza`, `ordine`) VALUES
(1, 1, 1, 1),
(2, 1, 1, 2),
(3, 2, 1, 3),
(4, 3, 1, 4),
(5, 5, 1, 5),
(6, 8, 1, 6),
(7, 13, 1, 7),
(8, 21, 1, 8),
(9, 34, 1, 9),
(10, 55, 1, 10),
(11, 89, 1, 11),
(12, 144, 1, 12),
(13, 0, 2, 1),
(14, 1, 2, 2),
(15, 1, 2, 3),
(16, 2, 2, 4),
(17, 1, 2, 5),
(18, 3, 2, 6),
(19, 2, 2, 7),
(20, 3, 2, 8),
(21, 1, 2, 9),
(22, 4, 2, 10);
