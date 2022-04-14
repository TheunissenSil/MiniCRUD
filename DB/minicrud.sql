-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 12 apr 2022 om 12:37
-- Serverversie: 10.4.22-MariaDB
-- PHP-versie: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minicrud`
--
CREATE DATABASE IF NOT EXISTS `minicrud` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `minicrud`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `bestellingen`
--

CREATE TABLE `bestellingen` (
  `id` int(11) NOT NULL,
  `producten` text NOT NULL,
  `prijs` double NOT NULL,
  `aantal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `bestellingen`
--

INSERT INTO `bestellingen` (`id`, `producten`, `prijs`, `aantal`) VALUES
(3, 'Pollo 2x, Salami 2x, Tonno 1x, ', 57.55, 5);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `naam` text NOT NULL,
  `email` text NOT NULL,
  `onderwerp` text NOT NULL,
  `bericht` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `contact`
--

INSERT INTO `contact` (`id`, `naam`, `email`, `onderwerp`, `bericht`) VALUES
(4, 'Sil Theunissen', 'theunissensil@gmail.com', 'Kortinsbon', 'Beste medewerkers ik heb nog een kortingsbon deze zou ik graag willen gebruiken maar ik vroeg mij of dat mogelijk was en wanneer ik deze kon activeren. Ik hoop snel bericht van u terug te zien.'),
(5, 'Kathleen C. Jones', 'KathleenCJones@armyspy.com', 'Neque porro quisquam', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ullamcorper arcu in sodales suscipit. Nulla eget convallis urna. Nunc rutrum sodales consectetur. Donec vel arcu at massa bibendum bibendum. Donec a elementum tortor. Maecenas congue arcu nec hendrerit facilisis. Etiam sed vulputate sem, quis condimentum enim. Pellentesque vitae dictum tellus. Vivamus in arcu magna. Sed consequat vestibulum elit in elementum. Nam dignissim purus nec ligula gravida rutrum.\r\n\r\n\r\n'),
(6, 'Iloy Puister', 'IloyPuister@jourrapide.com', 'quia dolor sit amet', 'In a lectus tempus, venenatis ante vel, rhoncus sapien. Sed eu aliquam turpis, in condimentum tellus. Duis auctor odio lectus, sed condimentum leo facilisis id. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Praesent nec pharetra neque. Praesent faucibus eu magna eget egestas. Nunc in ullamcorper libero, vel tempus metus. Aliquam et vulputate orci, at tristique sapien. Fusce ac lacus mi. Cras ipsum turpis, molestie vel facilisis at, imperdiet auctor ex. Donec varius non elit non vehicula.'),
(7, 'Daan Theunisen', 'daan@gmail.com', 'Zoek formulier', 'Kan je met het zoek formulier gewoon enter klikken en zoekt die dan naar alle resultaten die daar op lijken en ik zie ook geen zoek knop dus ik was een beetje in de war eigenlijk\r\n\r\n\r\n');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `drankjes`
--

CREATE TABLE `drankjes` (
  `id` int(11) NOT NULL,
  `drankNaam` text NOT NULL,
  `drankPrijs` double NOT NULL,
  `category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `drankjes`
--

INSERT INTO `drankjes` (`id`, `drankNaam`, `drankPrijs`, `category`) VALUES
(4, 'Chaudfontaine Blauw of Rood', 1.5, 'Frisdranken'),
(5, 'Coca-cola (Zero)', 1.5, 'Frisdranken'),
(6, 'Sprite', 1.5, 'Frisdranken'),
(7, 'Fanta orange', 1.5, 'Frisdranken'),
(8, 'Fanta cassis', 1.5, 'Frisdranken'),
(9, 'Appelsap', 1.75, 'Frisdranken'),
(10, 'Fuse tea ', 1.75, 'Frisdranken'),
(11, 'Finley tonic', 1.75, 'Frisdranken'),
(12, 'Fristi, Chocomel', 2, 'Frisdranken'),
(13, 'Verse Jus d\'Orange ', 2.5, 'Frisdranken'),
(14, 'Ranja', 1, 'Frisdranken'),
(15, 'Water ', 0.5, 'Frisdranken'),
(16, 'Espresso', 1.25, 'Warme Dranken'),
(17, 'Espresso doppio ', 1.75, 'Warme Dranken'),
(18, 'Espresso machiato', 1.5, 'Warme Dranken'),
(19, 'Lungo', 1.5, 'Warme Dranken'),
(20, 'Cappucciano', 1.75, 'Warme Dranken'),
(21, 'Latte machiato', 2, 'Warme Dranken'),
(22, 'Thee', 1.5, 'Warme Dranken'),
(23, 'Verse munt thee', 1.75, 'Warme Dranken'),
(24, 'Warme chocomel', 2, 'Warme Dranken'),
(25, 'Slagroom', 0.5, 'Warme Dranken'),
(26, 'Grolsch pilsner 0.2L', 1.5, 'Bierkaart'),
(27, 'Grolsch pilsner 0.3L', 2.25, 'Bierkaart'),
(28, 'Peroni Nastro  Azzuro', 2.25, 'Bierkaart'),
(29, 'Grolsch Weizen ', 4, 'Bierkaart'),
(30, 'Grimbergen blond', 4, 'Bierkaart'),
(31, 'Grimbergen dubbel', 4, 'Bierkaart'),
(32, 'Grolsch Weizen 0.0%', 3.25, 'Bierkaart'),
(33, 'Peroni Libera 0.0%', 3.25, 'Bierkaart'),
(34, 'Grolsch Radler 0.0%', 2.75, 'Bierkaart'),
(35, 'Grolsch Radler 2.0%', 2.75, 'Bierkaart'),
(36, 'Palm 0.0%', 2.5, 'Bierkaart'),
(37, 'Meantime Session IPA 3.5%', 2.75, 'Bierkaart'),
(38, 'Ikalesken Blanc de Noir | Bobal | Wit', 6.5, 'Wijnkaart'),
(39, 'Care Sobre Lias | Chardonnay, Garnacha | Wit', 6.95, 'Wijnkaart'),
(40, 'Medusa | Viognier | Wit', 10, 'Wijnkaart'),
(41, 'Codice | Tempranillo | Rood', 7.5, 'Wijnkaart'),
(42, 'Gran Trio Rosso | Primitivo, Malvasia Nera, Negroamaro | Rood', 8.5, 'Wijnkaart'),
(43, 'Más Treintaycuatro (+34) | Chardonnay | Wit', 7, 'Wijnkaart'),
(44, 'Tarima | Monastrell | Rood', 8.95, 'Wijnkaart'),
(45, 'Care Crianza | Tempranillo, Merlot | Rood', 9.5, 'Wijnkaart'),
(46, 'Max Lions | Grenache | Rood', 10, 'Wijnkaart'),
(47, ' La Calla | Nero d\'Avola | Rood', 9.95, 'Wijnkaart');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gerechten`
--

CREATE TABLE `gerechten` (
  `id` int(11) NOT NULL,
  `gerechtNaam` varchar(255) NOT NULL,
  `gerechtBeschrijving` text NOT NULL,
  `gerechtPrijs` double NOT NULL,
  `category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `gerechten`
--

INSERT INTO `gerechten` (`id`, `gerechtNaam`, `gerechtBeschrijving`, `gerechtPrijs`, `category`) VALUES
(2, 'Margherita', 'marinarasaus, mozzarella, oregano', 8.5, 'Pizzas'),
(3, 'Pollo', 'marinarasaus, kip, mozzarella, ui en paprika', 9, 'Pizzas'),
(4, 'Salami', 'marinarasaus, salami, mozzarella', 9, 'Pizzas'),
(5, 'Tonno', 'marinarasaus, tonijn, rode ui, kappertjes, mozzarella', 9.5, 'Pizzas'),
(6, 'Prosciutto di parma', 'marinarasaus, mozzarella, parmaham, rucola, parmezaan', 9.5, 'Pizzas'),
(7, 'Funghi', 'marinarasaus, mozzarella, champignons', 9.5, 'Pizzas'),
(8, 'Quattro formaggi', 'marinarasaus, mozzarella, gorgonzola, parmezaan, tallegio', 10, 'Pizzas'),
(9, 'Pomodoro', 'marinarasaus, mozzarella, panchetta, gekarameliseerde ui, gorgonzola', 10, 'Pizzas'),
(10, 'Torteloni tartufo e mozzarella', 'gevuld met mozzarella, zwarte truffel en paddestoelen', 9, 'Pastas'),
(11, 'Spaghetti meatballs', 'ambachtelijke gehaktballetjes, arrabiatasaus', 9, 'Pastas'),
(12, 'Tagliatelle prosciutto di parma', 'tomatensaus, krokante parmaham, mozzarella, rucola', 9, 'Pastas'),
(13, 'Penne pollo pesto', 'kipfi let, pesto, zongedroogde tomaatjes, roomsaus', 9, 'Pastas'),
(14, 'Spaghetti con gamberetti', 'gamba’s, knofl ook, rode peper, peterselie ', 9, 'Pastas'),
(15, 'Ravioli quattro formaggi', ' gevuld met 4 kazen, roomboter, walnoten, parmezaan', 9, 'Pastas');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `reserveringen`
--

CREATE TABLE `reserveringen` (
  `id` int(11) NOT NULL,
  `naam` text NOT NULL,
  `email` text NOT NULL,
  `personen` int(11) NOT NULL,
  `datum` text NOT NULL,
  `tijd` text NOT NULL,
  `bijzonderheden` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `reserveringen`
--

INSERT INTO `reserveringen` (`id`, `naam`, `email`, `personen`, `datum`, `tijd`, `bijzonderheden`) VALUES
(5, 'Gerrie Derksen', 'gerrie@gmail.com', 4, '2022-04-08', '19:30', 'Mijn vrouw is allergisch voor ui.'),
(6, 'Julian Wessels', 'JulianWessels@gmail.com', 2, '2022-04-06', '18:00', 'Date night!!'),
(7, 'Geert bakker', 'Geertbakker@gmail.com', 1, '2022-04-07', '16:00', ''),
(8, 'Milan Teunissen', 'milanteunissen@gmail.com', 6, '2022-04-03', '21:00', 'Er zit een autistische jongen genaamd Ted aan de tafel.'),
(9, 'Wessel Appelhof', 'wesselaphof@gmail.com', 5, '2022-04-28', '18:30', ''),
(10, 'Sil Theunissen', 'theunissensil@gmail.com', 12, '2022-04-06', '20:00', 'Familie diner');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `email`) VALUES
(4, 'admin', '$2y$10$xoZeM2EfaEvUgUP8/N0gHO6Nb4vfSuqranRcjkZdLxCWfViTEe1we', 'admin@gmail.com'),
(5, 'siltheu', '$2y$10$XxQMx6C0wLQrfwfqsDAbtOMQ1uuO1zPP1xug/fHYydIJYRhB2p6tG', 'Theunissensil@gmail.com'),
(6, 'siltheu123', '$2y$10$wM/EiNsjCgtEAWus2CZr8OdKwgfKCaGpS7rNbEQkL/tqRvN5LUmbW', 'theunissensil@gmail.com');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `bestellingen`
--
ALTER TABLE `bestellingen`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `drankjes`
--
ALTER TABLE `drankjes`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `gerechten`
--
ALTER TABLE `gerechten`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `reserveringen`
--
ALTER TABLE `reserveringen`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `bestellingen`
--
ALTER TABLE `bestellingen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT voor een tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT voor een tabel `drankjes`
--
ALTER TABLE `drankjes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT voor een tabel `gerechten`
--
ALTER TABLE `gerechten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT voor een tabel `reserveringen`
--
ALTER TABLE `reserveringen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
