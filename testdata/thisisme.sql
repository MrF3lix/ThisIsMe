-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 28. Jun 2016 um 09:40
-- Server-Version: 10.1.13-MariaDB
-- PHP-Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `thisisme`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `title` varchar(256) DEFAULT NULL,
  `content` varchar(10000) DEFAULT NULL,
  `picture` varchar(256) DEFAULT NULL,
  `dateCreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `article`
--

INSERT INTO `article` (`id`, `title`, `content`, `picture`, `dateCreated`, `userId`) VALUES
(1, 'Ich bin #fabioulous', '', './public/img/upload/57712f755116dIMG_2926.jpg', '2016-06-27 14:08:41', 4),
(2, 'Ich bin #devinitif', '<h3>Chasch echt n&ouml;d...?</h3>', './public/img/upload/5771305c67223IMG_2982.jpg', '2016-06-27 14:08:41', 5),
(3, 'Isch es ein Vogel.... Ische es ein A380... NEIN es isch en JIZZZZNNNNAAAAA', '', './public/img/upload/577131b2e6d35IMG_3083.jpg', '2016-06-27 14:08:41', 7),
(4, '#FLUGHAFELIFE', '', './public/img/upload/577131db52e72IMG_3156.jpg', '2016-06-27 14:08:41', 7),
(5, 'A320 is <3 A320 is Life', '', './public/img/upload/577131fdb5ab7IMG_3207.jpg', '2016-06-27 14:08:41', 7);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(256) DEFAULT NULL,
  `image` varchar(256) DEFAULT NULL,
  `name` varchar(256) DEFAULT NULL,
  `surname` varchar(256) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `password` varchar(256) DEFAULT NULL,
  `access` int(11) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `user`
--

INSERT INTO `user` (`id`, `username`, `image`, `name`, `surname`, `email`, `password`, `access`, `description`) VALUES
(1, 'Admin', './public/img/upload/57712e5b7e010IMG_3058.jpg', 'Admin', 'Admin', 'admin@thisisme.com', 'admin', 1, '<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>'),
(3, 'User', './public/img/upload/IMG_2946.jpg', 'User', 'User', 'user@thisisme.com', 'user', 2, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.'),
(4, 'fabioardito', './public/img/upload/57712f3779d7dIMG_3001.jpg', 'Fabio', 'Ardito', 'fabio.ardito@me.com', 'fabio', 2, '<p>Hoi ich bin de Fabio!</p>'),
(5, 'devinmenzi', './public/img/upload/57712fdb7383aIMG_2909.jpg', 'Devin', 'Menzi', 'devin.menzi@me.com', 'devin', 2, '<p>Hoi ich bin de Devin!</p>'),
(6, 'janled', './public/img/upload/577130b0d294dIMG_2931.jpg', 'Jan', 'Ledergerber', 'jan.led@me.com', 'jan', 2, '<p>Hoi ich bin de Jan!</p>'),
(7, 'joelklingler', './public/img/upload/577131862ebb4IMG_3049.jpg', 'Joel', 'Klingler', 'joel.klingler@me.com', 'joel', 2, '');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_userId` (`userId`);

--
-- Indizes für die Tabelle `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT für Tabelle `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `fk_userId` FOREIGN KEY (`userId`) REFERENCES `user` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
