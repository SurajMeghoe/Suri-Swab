-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 26 jul 2021 om 20:12
-- Serverversie: 10.4.11-MariaDB
-- PHP-versie: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `suriswab`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `district`
--

CREATE TABLE `district` (
  `id_district` int(11) NOT NULL,
  `districtnaam` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gebruikers`
--

CREATE TABLE `gebruikers` (
  `id_gebruiker` int(11) NOT NULL,
  `role` enum('admin','assistent','laborant') CHARACTER SET utf8mb4 NOT NULL,
  `usernaam` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `id_district` int(11) NOT NULL,
  `Unaam` varchar(30) NOT NULL,
  `Uvoornaam` varchar(30) NOT NULL,
  `geboortedatum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `gebruikers`
--

INSERT INTO `gebruikers` (`id_gebruiker`, `role`, `usernaam`, `password`, `id_district`, `Unaam`, `Uvoornaam`, `geboortedatum`) VALUES
(1, 'admin', 'admin', 'admin', 1, 'admin', 'admin', '2011-06-14'),
(2, 'assistent', 'assistent', 'assistent', 1, 'assistent', 'assistent', '2021-07-05'),
(3, 'laborant', 'laborant', 'laborant', 1, 'laborant', 'laborant', '2021-07-01');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `patient`
--

CREATE TABLE `patient` (
  `id_patient` int(11) NOT NULL,
  `id_gebruikers` int(11) NOT NULL,
  `id_district` int(11) NOT NULL,
  `naam` varchar(30) NOT NULL,
  `voornaam` varchar(30) NOT NULL,
  `nationaliteit` varchar(30) NOT NULL,
  `id_nummer` varchar(30) NOT NULL,
  `geslacht` varchar(30) NOT NULL,
  `adres` varchar(30) NOT NULL,
  `geboortedatum` date NOT NULL,
  `datum` date NOT NULL,
  `beroep` varchar(30) NOT NULL,
  `huisarts` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `resultaat`
--

CREATE TABLE `resultaat` (
  `swabnummer` int(11) NOT NULL,
  `triagenummer` int(11) NOT NULL,
  `id_patient` int(11) NOT NULL,
  `id_gebruikers` int(11) NOT NULL,
  `id_district` int(11) NOT NULL,
  `datum_resultaat` date NOT NULL,
  `uitslag` varchar(30) NOT NULL,
  `overleg` varchar(30) NOT NULL,
  `ziek` varchar(30) NOT NULL,
  `omschrijving` text NOT NULL,
  `transport` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `triage`
--

CREATE TABLE `triage` (
  `triagenummer` int(11) NOT NULL,
  `id_patient` int(11) NOT NULL,
  `id_gebruikers` int(11) NOT NULL,
  `datum_traige` date NOT NULL,
  `ziekten` varchar(30) NOT NULL,
  `contact_naam` varchar(30) NOT NULL,
  `contact_datum` date NOT NULL,
  `contact_omschrijving` text NOT NULL,
  `contact` text NOT NULL,
  `bewezen` varchar(30) NOT NULL,
  `contact_ziek` varchar(30) NOT NULL,
  `roken` varchar(30) NOT NULL,
  `hoesten` varchar(30) NOT NULL,
  `kortademig` varchar(30) NOT NULL,
  `keelpijn` varchar(30) NOT NULL,
  `koorts` varchar(30) NOT NULL,
  `rillingen` varchar(30) NOT NULL,
  `hoofdpijn` varchar(30) NOT NULL,
  `spierpijn` varchar(30) NOT NULL,
  `misselijkheid` varchar(30) NOT NULL,
  `diarree` varchar(30) NOT NULL,
  `Vsmaak` varchar(30) NOT NULL,
  `Vreuk` varchar(30) NOT NULL,
  `Asymp` varchar(30) NOT NULL,
  `omschrijving` text NOT NULL,
  `Zindruk` varchar(30) NOT NULL,
  `Momschrijving` text NOT NULL,
  `swab` varchar(30) NOT NULL,
  `dhoesten` date NOT NULL,
  `dkortademigheid` date NOT NULL,
  `dkeelpijn` date NOT NULL,
  `dkoorts` date NOT NULL,
  `drillingen` date NOT NULL,
  `dhoofdpijn` date NOT NULL,
  `dspierpijn` date NOT NULL,
  `dmisselijkheid` date NOT NULL,
  `ddiarree` date NOT NULL,
  `dsmaak` date NOT NULL,
  `dreuk` date NOT NULL,
  `dsymptomen` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`id_district`);

--
-- Indexen voor tabel `gebruikers`
--
ALTER TABLE `gebruikers`
  ADD PRIMARY KEY (`id_gebruiker`),
  ADD KEY `rel_district` (`id_district`);

--
-- Indexen voor tabel `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id_patient`),
  ADD KEY `rel_district2` (`id_district`),
  ADD KEY `rel_gebruiker2` (`id_gebruikers`);

--
-- Indexen voor tabel `resultaat`
--
ALTER TABLE `resultaat`
  ADD PRIMARY KEY (`swabnummer`),
  ADD KEY `rel_triage` (`triagenummer`),
  ADD KEY `rel_patient2` (`id_patient`),
  ADD KEY `rel_gebruikers3` (`id_gebruikers`),
  ADD KEY `rel_district4` (`id_district`);

--
-- Indexen voor tabel `triage`
--
ALTER TABLE `triage`
  ADD PRIMARY KEY (`triagenummer`),
  ADD KEY `rel_patient` (`id_patient`),
  ADD KEY `rel_gebruiker4` (`id_gebruikers`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `district`
--
ALTER TABLE `district`
  MODIFY `id_district` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `gebruikers`
--
ALTER TABLE `gebruikers`
  MODIFY `id_gebruiker` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT voor een tabel `patient`
--
ALTER TABLE `patient`
  MODIFY `id_patient` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `resultaat`
--
ALTER TABLE `resultaat`
  MODIFY `swabnummer` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `triage`
--
ALTER TABLE `triage`
  MODIFY `triagenummer` int(11) NOT NULL AUTO_INCREMENT;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `gebruikers`
--
ALTER TABLE `gebruikers`
  ADD CONSTRAINT `rel_district` FOREIGN KEY (`id_district`) REFERENCES `district` (`id_district`);

--
-- Beperkingen voor tabel `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `rel_district2` FOREIGN KEY (`id_district`) REFERENCES `district` (`id_district`),
  ADD CONSTRAINT `rel_gebruiker2` FOREIGN KEY (`id_gebruikers`) REFERENCES `gebruikers` (`id_gebruiker`);

--
-- Beperkingen voor tabel `resultaat`
--
ALTER TABLE `resultaat`
  ADD CONSTRAINT `rel_district4` FOREIGN KEY (`id_district`) REFERENCES `district` (`id_district`),
  ADD CONSTRAINT `rel_gebruikers3` FOREIGN KEY (`id_gebruikers`) REFERENCES `gebruikers` (`id_gebruiker`),
  ADD CONSTRAINT `rel_patient2` FOREIGN KEY (`id_patient`) REFERENCES `patient` (`id_patient`),
  ADD CONSTRAINT `rel_triage` FOREIGN KEY (`triagenummer`) REFERENCES `triage` (`triagenummer`);

--
-- Beperkingen voor tabel `triage`
--
ALTER TABLE `triage`
  ADD CONSTRAINT `rel_gebruiker4` FOREIGN KEY (`id_gebruikers`) REFERENCES `gebruikers` (`id_gebruiker`),
  ADD CONSTRAINT `rel_patient` FOREIGN KEY (`id_patient`) REFERENCES `patient` (`id_patient`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
