-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 13 nov 2020 om 10:08
-- Serverversie: 10.4.14-MariaDB
-- PHP-versie: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gastenboek`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gasten`
--

CREATE TABLE `gasten` (
  `id` int(10) NOT NULL,
  `voornaam` varchar(20) NOT NULL,
  `tussenvoegsel` varchar(10) NOT NULL,
  `achternaam` varchar(40) NOT NULL,
  `telefoonnummer` int(15) NOT NULL,
  `emailadres` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `gasten`
--

INSERT INTO `gasten` (`id`, `voornaam`, `tussenvoegsel`, `achternaam`, `telefoonnummer`, `emailadres`) VALUES
(1, 'Luka', '', 'Mijailovic', 681404300, 'lukabazuka10@gmail.com'),
(2, 'Pieter', '', 'Omzicht', 681404300, 'lukabazuka10@gmail.com'),
(3, 'Jitske', '', 'Tielema', 681404300, 'lukabazuka10@gmail.com');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `registratie`
--

CREATE TABLE `registratie` (
  `id` int(30) NOT NULL,
  `naam` varchar(30) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `registratie`
--

INSERT INTO `registratie` (`id`, `naam`, `username`, `password`) VALUES
(1, 'test', 'lukabazuka10@gmail.com', 'Luka12345'),
(3, 'test2', 'luka123', 'luka123');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `gasten`
--
ALTER TABLE `gasten`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `registratie`
--
ALTER TABLE `registratie`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `gasten`
--
ALTER TABLE `gasten`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT voor een tabel `registratie`
--
ALTER TABLE `registratie`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
