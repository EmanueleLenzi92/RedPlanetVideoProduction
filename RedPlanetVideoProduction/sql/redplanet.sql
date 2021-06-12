-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Giu 12, 2021 alle 12:20
-- Versione del server: 10.4.6-MariaDB
-- Versione PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `redplanet`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `password` varchar(100) COLLATE utf8_bin NOT NULL,
  `username` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Struttura della tabella `videoclip`
--

CREATE TABLE `videoclip` (
  `id` int(11) NOT NULL,
  `urlvideo` varchar(100) COLLATE utf8_bin NOT NULL,
  `urlimg` varchar(100) COLLATE utf8_bin NOT NULL,
  `titolo` varchar(40) COLLATE utf8_bin NOT NULL,
  `posizione` int(2) NOT NULL,
  `tipo` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Struttura della tabella `videocorti`
--

CREATE TABLE `videocorti` (
  `id` int(11) NOT NULL,
  `urlvideo` varchar(100) COLLATE utf8_bin NOT NULL,
  `urlimg` varchar(100) COLLATE utf8_bin NOT NULL,
  `titolo` varchar(40) COLLATE utf8_bin NOT NULL,
  `posizione` int(2) NOT NULL,
  `tipo` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Struttura della tabella `videoeventi`
--

CREATE TABLE `videoeventi` (
  `id` int(11) NOT NULL,
  `urlvideo` varchar(100) COLLATE utf8_bin NOT NULL,
  `urlimg` varchar(100) COLLATE utf8_bin NOT NULL,
  `titolo` varchar(40) COLLATE utf8_bin NOT NULL,
  `posizione` int(2) NOT NULL,
  `tipo` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Struttura della tabella `videohome`
--

CREATE TABLE `videohome` (
  `id` int(11) NOT NULL,
  `urlvideo` varchar(100) COLLATE utf8_bin NOT NULL,
  `urlimg` varchar(100) COLLATE utf8_bin NOT NULL,
  `titolo` varchar(40) COLLATE utf8_bin NOT NULL,
  `posizione` int(2) NOT NULL,
  `tipo` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Struttura della tabella `videopresentazioni`
--

CREATE TABLE `videopresentazioni` (
  `id` int(11) NOT NULL,
  `urlvideo` varchar(100) COLLATE utf8_bin NOT NULL,
  `urlimg` varchar(100) COLLATE utf8_bin NOT NULL,
  `titolo` varchar(40) COLLATE utf8_bin NOT NULL,
  `posizione` int(2) NOT NULL,
  `tipo` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Struttura della tabella `videospettacoli`
--

CREATE TABLE `videospettacoli` (
  `id` int(11) NOT NULL,
  `urlvideo` varchar(100) COLLATE utf8_bin NOT NULL,
  `urlimg` varchar(100) COLLATE utf8_bin NOT NULL,
  `titolo` varchar(40) COLLATE utf8_bin NOT NULL,
  `posizione` int(2) NOT NULL,
  `tipo` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Struttura della tabella `videospot`
--

CREATE TABLE `videospot` (
  `id` int(11) NOT NULL,
  `urlvideo` varchar(100) COLLATE utf8_bin NOT NULL,
  `urlimg` varchar(100) COLLATE utf8_bin NOT NULL,
  `titolo` varchar(40) COLLATE utf8_bin NOT NULL,
  `posizione` int(2) NOT NULL,
  `tipo` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `videoclip`
--
ALTER TABLE `videoclip`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `videocorti`
--
ALTER TABLE `videocorti`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `videoeventi`
--
ALTER TABLE `videoeventi`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `videohome`
--
ALTER TABLE `videohome`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `videopresentazioni`
--
ALTER TABLE `videopresentazioni`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `videospettacoli`
--
ALTER TABLE `videospettacoli`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `videospot`
--
ALTER TABLE `videospot`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
