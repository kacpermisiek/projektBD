-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 10 Cze 2022, 23:34
-- Wersja serwera: 10.4.24-MariaDB
-- Wersja PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `spedycja`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kierowca`
--

CREATE TABLE `kierowca` (
  `id_kierowcy` int(10) UNSIGNED NOT NULL,
  `nr_identyfikacyjny` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `samochod_id` int(10) UNSIGNED DEFAULT NULL,
  `imie` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `nazwisko` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `telefon` varchar(25) COLLATE utf8mb4_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `kierowca`
--

INSERT INTO `kierowca` (`id_kierowcy`, `nr_identyfikacyjny`, `samochod_id`, `imie`, `nazwisko`, `telefon`) VALUES
(1, '13595633293', 5, 'Jan', 'Kowalski', '752629322'),
(2, '52626326126', 2, 'Mateusz', 'Kowalczyk', '497831185'),
(3, '95859376678', 1, 'Adam', 'Czerwony', '294849656'),
(4, '49285686234', 4, 'Roman', 'Stary', NULL),
(5, '32293573738', 3, 'Tomasz', 'Czerwony', '534988284');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klient`
--

CREATE TABLE `klient` (
  `id_klienta` int(10) UNSIGNED NOT NULL,
  `nazwa` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `miasto` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `adres` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `telefon` varchar(25) COLLATE utf8mb4_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `klient`
--

INSERT INTO `klient` (`id_klienta`, `nazwa`, `miasto`, `adres`, `telefon`) VALUES
(1, 'Astro2', 'Wrocław', 'Braniborska 4', '726564543'),
(2, 'BCA', 'Wrocław', 'Pomorska 321/12', '716142332'),
(3, 'XYZ', 'Wrocław', 'Pl. Borna 5/1', '392725894'),
(4, 'ERE', 'Warszawa', 'Marszałkowska 1/2', '146496654'),
(5, 'OCY', 'Łódź', 'Piotrkowska 111/1', '893439595'),
(6, 'JAFO', 'Toruń', 'Wirtualna', '622187126'),
(7, 'CESOFT', 'Wrocław', 'Rynek 0', '216257784'),
(8, 'INNOV', 'Warszawa', 'Marszałkowska 1', '458361758'),
(9, 'Jan Kowalczyk', 'Wrocław', 'Opolska 119c', '331454487'),
(10, 'SP201', 'Wrocław', 'Borna 4', '111254235'),
(17, 'asd', 'asd', 'asd', '213');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kurs`
--

CREATE TABLE `kurs` (
  `id_kursu` int(10) UNSIGNED NOT NULL,
  `kierowca_id` int(10) UNSIGNED DEFAULT NULL,
  `ladunek_id` int(10) UNSIGNED DEFAULT NULL,
  `data_kursu` date NOT NULL,
  `cena` int(10) UNSIGNED DEFAULT NULL,
  `miasto_poczatkowe` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `adres_poczatkowy` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `miasto_docelowe` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `adres_docelowy` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `kurs`
--

INSERT INTO `kurs` (`id_kursu`, `kierowca_id`, `ladunek_id`, `data_kursu`, `cena`, `miasto_poczatkowe`, `adres_poczatkowy`, `miasto_docelowe`, `adres_docelowy`) VALUES
(2, 2, 2, '2022-02-01', 4881, 'Poznań', 'Długa 36', 'Leszno', 'Motornicza 35'),
(3, 1, 3, '2022-05-09', 1977, 'Warszawa', 'Narodowa 85', 'Białystok', 'Szkolna 18'),
(4, 5, 4, '2022-04-14', 9957, 'Wrocław', 'Cybulskiego 12/2', 'Toruń', 'Wirtualna 1'),
(5, 4, 5, '2022-05-11', 9116, 'Wrocław', 'Rynek 0', 'Warszawa', 'Marszałkowska 1'),
(6, 4, 6, '2022-05-09', 2176, 'Poznań', 'Bułgarska 131', 'Białystok', 'Szkolna 16'),
(7, 4, 7, '2022-05-02', 5251, 'Wrocław', 'Tramwajowa 3', 'Wrocław', 'Autobusowa 1'),
(9, 3, 8, '2022-05-05', 4535, 'Toruń', 'Piernikowa 3', 'Gdańsk', 'Stoczniowa 3'),
(12, 1, 1, '2022-06-02', 2137, 'Rawicz', 'asd 3', 'Wałbrzych', 'def 4');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ladunek`
--

CREATE TABLE `ladunek` (
  `id_ladunku` int(10) UNSIGNED NOT NULL,
  `klient_id` int(10) UNSIGNED DEFAULT NULL,
  `zawartosc_ladunku` varchar(50) COLLATE utf8mb4_polish_ci DEFAULT NULL,
  `waga` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `ladunek`
--

INSERT INTO `ladunek` (`id_ladunku`, `klient_id`, `zawartosc_ladunku`, `waga`) VALUES
(1, 1, 'Leki', 10),
(2, 1, 'Leki', 12),
(3, 2, 'Żwyność', 13),
(4, 4, 'Broń', 16),
(5, 9, 'Samochody', 20),
(6, 10, 'Leki', 6),
(7, 7, 'Pieniądze', NULL),
(8, 6, 'Palety', 4);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `samochod`
--

CREATE TABLE `samochod` (
  `id_samochodu` int(10) UNSIGNED NOT NULL,
  `nazwa` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `rejestracja` varchar(25) COLLATE utf8mb4_polish_ci NOT NULL,
  `przebieg` int(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `samochod`
--

INSERT INTO `samochod` (`id_samochodu`, `nazwa`, `rejestracja`, `przebieg`) VALUES
(1, 'Volvo FH500', 'DW12345', 100000),
(2, 'Mercedes Actros', 'DW65432', 250000),
(3, 'Scania Jakakolwiek', 'PO123456', NULL),
(4, 'Renault asd', 'WA564321', 800000),
(5, 'DAF qwerty', 'PL576322', 92345623),
(7, 'Volvo FH', 'PZ 123456', 123456);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `kierowca`
--
ALTER TABLE `kierowca`
  ADD PRIMARY KEY (`id_kierowcy`),
  ADD UNIQUE KEY `nr_identyfikacyjny` (`nr_identyfikacyjny`),
  ADD UNIQUE KEY `samochod_id` (`samochod_id`);

--
-- Indeksy dla tabeli `klient`
--
ALTER TABLE `klient`
  ADD PRIMARY KEY (`id_klienta`),
  ADD UNIQUE KEY `nazwa` (`nazwa`);

--
-- Indeksy dla tabeli `kurs`
--
ALTER TABLE `kurs`
  ADD PRIMARY KEY (`id_kursu`),
  ADD UNIQUE KEY `ladunek_id` (`ladunek_id`),
  ADD KEY `ogr1` (`kierowca_id`);

--
-- Indeksy dla tabeli `ladunek`
--
ALTER TABLE `ladunek`
  ADD PRIMARY KEY (`id_ladunku`),
  ADD KEY `ogr3` (`klient_id`);

--
-- Indeksy dla tabeli `samochod`
--
ALTER TABLE `samochod`
  ADD PRIMARY KEY (`id_samochodu`),
  ADD UNIQUE KEY `rejestracja` (`rejestracja`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `kierowca`
--
ALTER TABLE `kierowca`
  MODIFY `id_kierowcy` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT dla tabeli `klient`
--
ALTER TABLE `klient`
  MODIFY `id_klienta` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT dla tabeli `kurs`
--
ALTER TABLE `kurs`
  MODIFY `id_kursu` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT dla tabeli `ladunek`
--
ALTER TABLE `ladunek`
  MODIFY `id_ladunku` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT dla tabeli `samochod`
--
ALTER TABLE `samochod`
  MODIFY `id_samochodu` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `kierowca`
--
ALTER TABLE `kierowca`
  ADD CONSTRAINT `ogr_1` FOREIGN KEY (`samochod_id`) REFERENCES `samochod` (`id_samochodu`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `kurs`
--
ALTER TABLE `kurs`
  ADD CONSTRAINT `ogr1` FOREIGN KEY (`kierowca_id`) REFERENCES `kierowca` (`id_kierowcy`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `ogr2` FOREIGN KEY (`ladunek_id`) REFERENCES `ladunek` (`id_ladunku`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `ladunek`
--
ALTER TABLE `ladunek`
  ADD CONSTRAINT `ogr3` FOREIGN KEY (`klient_id`) REFERENCES `klient` (`id_klienta`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


DELETE FROM kurs;
DELETE FROM ladunek;
DELETE FROM klient;


INSERT INTO `klient` (`id_klienta`, `nazwa`, `miasto`, `adres`, `telefon`) VALUES
(1, 'Astro2', 'Wrocław', 'Braniborska 4', '726564543'),
(2, 'BCA', 'Wrocław', 'Pomorska 321/12', '716142332'),
(3, 'XYZ', 'Wrocław', 'Pl. Borna 5/1', '392725894'),
(4, 'ERE', 'Warszawa', 'Marszałkowska 1/2', '146496654'),
(5, 'OCY', 'Łódź', 'Piotrkowska 111/1', '893439595'),
(6, 'JAFO', 'Toruń', 'Wirtualna', '622187126'),
(7, 'CESOFT', 'Wrocław', 'Rynek 0', '216257784'),
(8, 'INNOV', 'Warszawa', 'Marszałkowska 1', '458361758'),
(9, 'Jan Kowalczyk', 'Wrocław', 'Opolska 119c', '331454487'),
(10, 'SP201', 'Wrocław', 'Borna 4', '111254235'),
(17, 'asd', 'asd', 'asd', '213');

INSERT INTO `ladunek` (`id_ladunku`, `klient_id`, `zawartosc_ladunku`, `waga`) VALUES
(1, 1, 'Leki', 10),
(2, 1, 'Leki', 12),
(3, 2, 'Żwyność', 13),
(4, 4, 'Broń', 16),
(5, 9, 'Samochody', 20),
(6, 10, 'Leki', 6),
(7, 7, 'Pieniądze', NULL),
(8, 6, 'Palety', 4);

INSERT INTO `kurs` (`id_kursu`, `kierowca_id`, `ladunek_id`, `data_kursu`, `cena`, `miasto_poczatkowe`, `adres_poczatkowy`, `miasto_docelowe`, `adres_docelowy`) VALUES
(2, 2, 2, '2022-02-01', 4881, 'Poznań', 'Długa 36', 'Leszno', 'Motornicza 35'),
(3, 1, 3, '2022-05-09', 1977, 'Warszawa', 'Narodowa 85', 'Białystok', 'Szkolna 18'),
(4, 5, 4, '2022-04-14', 9957, 'Wrocław', 'Cybulskiego 12/2', 'Toruń', 'Wirtualna 1'),
(5, 4, 5, '2022-05-11', 9116, 'Wrocław', 'Rynek 0', 'Warszawa', 'Marszałkowska 1'),
(6, 4, 6, '2022-05-09', 2176, 'Poznań', 'Bułgarska 131', 'Białystok', 'Szkolna 16'),
(7, 4, 7, '2022-05-02', 5251, 'Wrocław', 'Tramwajowa 3', 'Wrocław', 'Autobusowa 1'),
(9, 3, 8, '2022-05-05', 4535, 'Toruń', 'Piernikowa 3', 'Gdańsk', 'Stoczniowa 3'),
(12, 1, 1, '2022-06-02', 2137, 'Rawicz', 'asd 3', 'Wałbrzych', 'def 4');