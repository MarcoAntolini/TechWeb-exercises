Istruzioni per creare il database e la tabella

Andare in phpmyAdmin e andare nella voce di menu a tab "SQL".

1. Creare il DB

CREATE DATABASE esami

2. Andare nel database appena creato e create la tabella 

CREATE TABLE `movies` (
  `Id` int(11) NOT NULL,
  `Title` varchar(50) DEFAULT NULL,
  `Year` varchar(4) DEFAULT NULL,
  `Rated` varchar(10) DEFAULT NULL,
  `Released` varchar(20) DEFAULT NULL,
  `Runtime` varchar(20) DEFAULT NULL,
  `Genre` varchar(50) DEFAULT NULL,
  `Director` varchar(50) DEFAULT NULL,
  `Poster` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `movies`
  ADD PRIMARY KEY (`Id`);

ALTER TABLE `movies`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

3. Popolare il DB

INSERT INTO `movies` (`Id`, `Title`, `Year`, `Rated`, `Released`, `Runtime`, `Genre`, `Director`, `Poster`) VALUES
(1, 'Avatar', '2009', 'PG-13', '18 Dec 2009', '162 min', 'Action, Adventure, Fantasy', 'James Cameron', 'http://ia.media-imdb.com/images/M/MV5BMTYwOTEwNjAzMl5BMl5BanBnXkFtZTcwODc5MTUwMw@@._V1_SX300.jpg'),
(2, 'I Am Legend', '2007', 'PG-13', '14 Dec 2007', '101 min', 'Drama, Horror, Sci-Fi', 'Francis Lawrence', 'http://ia.media-imdb.com/images/M/MV5BMTU4NzMyNDk1OV5BMl5BanBnXkFtZTcwOTEwMzU1MQ@@._V1_SX300.jpg'),
(3, '300', '2006', 'R', '09 Mar 2007', '117 min', 'Action, Drama, Fantasy', 'Zack Snyder', 'http://ia.media-imdb.com/images/M/MV5BMjAzNTkzNjcxNl5BMl5BanBnXkFtZTYwNDA4NjE3._V1_SX300.jpg'),
(4, 'The Avengers', '2012', 'PG-13', '04 May 2012', '143 min', 'Action, Sci-Fi, Thriller', 'Joss Whedon', 'http://ia.media-imdb.com/images/M/MV5BMTk2NTI1MTU4N15BMl5BanBnXkFtZTcwODg0OTY0Nw@@._V1_SX300.jpg');


