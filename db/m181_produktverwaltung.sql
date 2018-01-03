-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 03. Jan 2018 um 15:27
-- Server-Version: 10.1.16-MariaDB
-- PHP-Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `m181_produktverwaltung`
--
CREATE DATABASE IF NOT EXISTS `m181_produktverwaltung` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `m181_produktverwaltung`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `produkte`
--

CREATE TABLE `produkte` (
  `id_produkt` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `beschreibung` text NOT NULL,
  `preis` int(11) NOT NULL,
  `link` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `produkte`
--

INSERT INTO `produkte` (`id_produkt`, `name`, `beschreibung`, `preis`, `link`) VALUES
(1, 'Socks', 'Warm socks for cold seasons', 59, 'http://www.birkenstock.com/dw/image/v2/BBBF_PRD/on/demandware.static/-/Sites-master-catalog/default/dw114054f1/001/002/452/1002452/1002452.jpg?sw=2000&sh=2000'),
(2, 'Underpants', 'Beautiful underpants for men and women', 89, 'https://cdn.notonthehighstreet.com/system/product_images/images/002/234/517/original_oekotex-hassle-free-boy-underpants.jpg'),
(3, 'Hat', 'A hat is simply a hat', 785, 'https://theuglysweatershop.com/wp-content/uploads/2014/11/Plush-Turkey-Hat-Tacky-Ugly-Thanksgiving-Accessory-2.jpg'),
(4, 'Sweater', 'Make christmas season cozy with this sweater', 1800, 'http://partycity6.scene7.com/is/image/PartyCity/_ml_p2p_pc_badge_taller15?$_ml_p2p_pc_thumb_taller15$&$product=PartyCity/P652754_full'),
(5, 'Shorts', 'Shorts, when man is hot', 1390, 'https://pixel.nymag.com/imgs/fashion/daily/2016/08/02/02-cargo-shorts.w710.h473.jpg');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `benutzername` varchar(50) NOT NULL,
  `passwort` varchar(128) NOT NULL,
  `admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `user`
--

INSERT INTO `user` (`id_user`, `benutzername`, `passwort`, `admin`) VALUES
(1, 'dennis', '12345678', 1),
(2, 'cassandra', 'panda', 0);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `produkte`
--
ALTER TABLE `produkte`
  ADD PRIMARY KEY (`id_produkt`);

--
-- Indizes für die Tabelle `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `produkte`
--
ALTER TABLE `produkte`
  MODIFY `id_produkt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT für Tabelle `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
