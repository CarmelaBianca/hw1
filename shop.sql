-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 29, 2022 alle 23:16
-- Versione del server: 10.1.36-MariaDB
-- Versione PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop1`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `addtobag`
--
create database shop;
use shop;
CREATE TABLE `addtobag` (
  `username` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `addtobag`
--

INSERT INTO `addtobag` (`username`, `id`) VALUES
('mela', 0);

-- --------------------------------------------------------

--
-- Struttura della tabella `ads`
--

CREATE TABLE `ads` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `descrizione` varchar(255) DEFAULT NULL,
  `prezzo` float DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `ads`
--

INSERT INTO `ads` (`id`, `username`, `nome`, `descrizione`, `prezzo`, `foto`) VALUES
(0, 'melaa', 'orologio', 'antico', 30, 'https://cdn.pixabay.com/photo/2016/03/23/12/53/clock-1274699_150.jpg'),
(1, 'melaa', 'bracciale', 'love', 5.5, 'https://cdn.pixabay.com/photo/2018/05/10/20/03/love-3388626_150.jpg'),
(2, 'melaa', 'telo da mare', 'blu, molto largo', 20, 'http://127.0.0.1/hw1/sfondo5.jpg'),
(3, 'mela', 'collana', 'sdfghasdfghasdfghsdfghssdfgh sdfghsertyhvfrt vdrtyhvfrtyhgtyhbv', 699.99, 'https://cdn.pixabay.com/photo/2014/11/05/19/25/necklace-518268_150.jpg'),
(4, 'mela', 'bracciale', 'wnjqn dcjinqeicn dccojandcoqn', 7.99, 'https://cdn.pixabay.com/photo/2017/03/19/10/49/friendship-2156174_150.jpg');

-- --------------------------------------------------------

--
-- Struttura della tabella `preferiti`
--

CREATE TABLE `preferiti` (
  `username` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `preferiti`
--

INSERT INTO `preferiti` (`username`, `id`) VALUES
('chia104', 1),
('chia104', 2),
('chia104', 3),
('chia104', 4),
('gino', 1),
('gino', 2),
('gino', 4),
('mela', 0),
('mela', 4),
('pino', 0),
('pino', 2),
('pino', 4);

-- --------------------------------------------------------

--
-- Struttura della tabella `prova`
--

CREATE TABLE `prova` (
  `nome` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `prova`
--

INSERT INTO `prova` (`nome`) VALUES
(''),
(''),
('h'),
('h'),
('jjjjjjjj'),
('j'),
('j'),
(''),
(''),
(''),
('gigi');

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE `users` (
  `nome` varchar(50) DEFAULT NULL,
  `cognome` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `data_di_nascita` date DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`nome`, `cognome`, `email`, `data_di_nascita`, `username`, `password`) VALUES
('nb', '', '', '0000-00-00', '', ''),
('d', 'r', 'h@j.j', '2022-05-19', '-', 'f'),
('a', 's', 'h@j.j', '2022-05-19', 'a__a', 'h'),
('chiara', 'spicuglia', 'chiaspicu@gmail.com', '2001-01-07', 'chia104', 'ChiaSpicu104'),
('vittorio', 'giaconia', 'vittoriogiaconia01@gmail.com', '2000-04-07', 'ErMandrillone', 'Ermandrillone07'),
('Gino', 'CGino', 'gc@gmail.com', '1999-08-02', 'gino', 'Password1'),
('jh', 'j', 'j@k.h', '2022-05-07', 'h', ''),
('hh', '', '', '0000-00-00', 'hh', ''),
('j', 'k', 'jkbb@gmail.co', '2000-05-28', 'jjkÃ²jk', 'xcvb58ghjk'),
('Bianca', 'Carmela', 'carmela.bianca@gmail.com', '2000-05-02', 'me', 'ggg111111111'),
('carmela', 'bianca', 'cb@gmail.com', '0000-00-00', 'mela', 'pss'),
('Bianca', 'Carmela', 'carmela.bianca.02@gmail.com', '2000-08-02', 'melaa', 'Password0'),
('j', 'j', 'j@k.h', '2022-05-19', 'nb', 's'),
('giuseppe', 'pisasale', 'giu@gmail.com', '2001-09-07', 'pino', 'Password1'),
('hhkk', '', '', '0000-00-00', 'velocit', ''),
('cfbjh', 'cgbjhnkml', 'cfbjh@dxfghjh.xcvbn', '2000-05-11', 'xdcfgbjhn', '2345678asdfghj'),
('d', 'r', 'h@j.j', '2022-05-19', '_', 'f');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `addtobag`
--
ALTER TABLE `addtobag`
  ADD PRIMARY KEY (`username`,`id`),
  ADD KEY `usernamex` (`username`),
  ADD KEY `idx` (`id`);

--
-- Indici per le tabelle `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

--
-- Indici per le tabelle `preferiti`
--
ALTER TABLE `preferiti`
  ADD PRIMARY KEY (`username`,`id`),
  ADD KEY `usernamex` (`username`),
  ADD KEY `idx` (`id`);

--
-- Indici per le tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `addtobag`
--
ALTER TABLE `addtobag`
  ADD CONSTRAINT `addtobag_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON UPDATE CASCADE,
  ADD CONSTRAINT `addtobag_ibfk_2` FOREIGN KEY (`id`) REFERENCES `ads` (`id`) ON UPDATE CASCADE;

--
-- Limiti per la tabella `ads`
--
ALTER TABLE `ads`
  ADD CONSTRAINT `ads_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

--
-- Limiti per la tabella `preferiti`
--
ALTER TABLE `preferiti`
  ADD CONSTRAINT `preferiti_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON UPDATE CASCADE,
  ADD CONSTRAINT `preferiti_ibfk_2` FOREIGN KEY (`id`) REFERENCES `ads` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
