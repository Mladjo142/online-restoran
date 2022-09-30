-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2021 at 10:41 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bazaprojekt`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `ID` int(50) UNSIGNED NOT NULL,
  `IDKorisnika` int(50) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dnevnaponuda`
--

CREATE TABLE `dnevnaponuda` (
  `ID` int(50) UNSIGNED NOT NULL,
  `Naziv` varchar(255) NOT NULL,
  `Cijena` decimal(5,2) NOT NULL,
  `IDJela` int(50) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dnevnaponuda`
--

INSERT INTO `dnevnaponuda` (`ID`, `Naziv`, `Cijena`, `IDJela`) VALUES
(1, 'Piletina&Sprite', '6.50', 2);

-- --------------------------------------------------------

--
-- Table structure for table `jelo/pice`
--

CREATE TABLE `jelo/pice` (
  `ID` int(50) UNSIGNED NOT NULL,
  `Naziv` varchar(255) NOT NULL,
  `Cijena` decimal(5,2) NOT NULL,
  `Kolicina` int(50) NOT NULL,
  `IDNarudzbe` int(50) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jelo/pice`
--

INSERT INTO `jelo/pice` (`ID`, `Naziv`, `Cijena`, `Kolicina`, `IDNarudzbe`) VALUES
(1, 'Hamburger', '5.00', 0, 3),
(2, 'Piletina', '6.00', 0, NULL),
(3, '', '0.00', 0, NULL),
(4, 'Cedevita', '5.00', 5, 5),
(5, 'Hamburger', '8.00', 2, 5),
(6, 'Wings', '12.00', 3, 5),
(8, 'Hamburger', '4.00', 1, 5),
(34, 'Hamburger', '8.00', 2, 30),
(35, 'Kebab', '5.00', 3, 30),
(36, 'Pizza', '8.00', 1, 30),
(37, 'Cheesebuger', '5.00', 1, 30),
(38, 'Sprite', '2.00', 1, 30),
(39, 'Kebab', '5.00', 3, 31),
(40, 'Pizza', '8.00', 1, 31),
(41, 'Cheesebuger', '5.00', 1, 32),
(42, 'Wings', '4.00', 1, 32),
(43, 'Cedevita', '1.00', 1, 32);

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `ID` int(50) UNSIGNED NOT NULL,
  `KorisnickoIme` varchar(255) NOT NULL,
  `Lozinka` varchar(255) NOT NULL,
  `Uloga` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`ID`, `KorisnickoIme`, `Lozinka`, `Uloga`) VALUES
(29, 'admin@sum.ba', '123', 'Administrator'),
(34, 'registracija@sum.ba', '123', 'Administrator'),
(36, 'musterija@sum.ba', '123', 'Musterija'),
(46, 'bla@gmail.com', '123', 'Musterija'),
(47, 'blabla@gmail.com', '123', 'Musterija');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2021_01_23_190245_create_administrator_table', 0),
(2, '2021_01_23_190245_create_dnevnaponuda_table', 0),
(3, '2021_01_23_190245_create_jelo_table', 0),
(4, '2021_01_23_190245_create_korisnik_table', 0),
(5, '2021_01_23_190245_create_musterija_table', 0),
(6, '2021_01_23_190245_create_narudzba_table', 0),
(7, '2021_01_23_190245_create_pice_table', 0),
(8, '2021_01_23_190245_create_restoran_table', 0),
(9, '2021_01_23_190246_add_foreign_keys_to_administrator_table', 0),
(10, '2021_01_23_190246_add_foreign_keys_to_dnevnaponuda_table', 0),
(11, '2021_01_23_190246_add_foreign_keys_to_musterija_table', 0),
(12, '2021_01_23_190246_add_foreign_keys_to_narudzba_table', 0),
(13, '2021_01_23_190246_add_foreign_keys_to_restoran_table', 0);

-- --------------------------------------------------------

--
-- Table structure for table `musterija`
--

CREATE TABLE `musterija` (
  `ID` int(50) UNSIGNED NOT NULL,
  `Ime` varchar(255) NOT NULL,
  `Prezime` varchar(255) NOT NULL,
  `BrojTelefona` varchar(50) NOT NULL,
  `Adresa` varchar(255) NOT NULL,
  `IDKorisnika` int(50) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `musterija`
--

INSERT INTO `musterija` (`ID`, `Ime`, `Prezime`, `BrojTelefona`, `Adresa`, `IDKorisnika`) VALUES
(4, 'Mate', 'Matic', '', '', NULL),
(10, 'Ante', 'Antić', '063/123-456', 'Adresa 23', 29),
(15, 'Marko', 'Markić', '063/123-456', 'Adresa 99', 34),
(20, '', '', '', '', 46),
(21, '', '', '', '', 47);

-- --------------------------------------------------------

--
-- Table structure for table `narudzba`
--

CREATE TABLE `narudzba` (
  `ID` int(50) UNSIGNED NOT NULL,
  `IDKorisnika` int(50) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `narudzba`
--

INSERT INTO `narudzba` (`ID`, `IDKorisnika`) VALUES
(3, NULL),
(4, NULL),
(5, NULL),
(7, NULL),
(9, 36),
(11, 36),
(17, 36),
(18, 36),
(20, 36),
(26, 36),
(28, 36),
(30, 36),
(31, 36),
(32, 36);

-- --------------------------------------------------------

--
-- Table structure for table `restoran`
--

CREATE TABLE `restoran` (
  `ID` int(50) UNSIGNED NOT NULL,
  `Naziv` varchar(255) NOT NULL,
  `BrojTelefona` varchar(255) NOT NULL,
  `Adresa` varchar(255) NOT NULL,
  `IDKorisnika` int(50) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDKorisnika` (`IDKorisnika`);

--
-- Indexes for table `dnevnaponuda`
--
ALTER TABLE `dnevnaponuda`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDJela` (`IDJela`);

--
-- Indexes for table `jelo/pice`
--
ALTER TABLE `jelo/pice`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDNarudzbe` (`IDNarudzbe`);

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `musterija`
--
ALTER TABLE `musterija`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDKorisnika` (`IDKorisnika`);

--
-- Indexes for table `narudzba`
--
ALTER TABLE `narudzba`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDKorisnika` (`IDKorisnika`);

--
-- Indexes for table `restoran`
--
ALTER TABLE `restoran`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDKorisnika` (`IDKorisnika`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `ID` int(50) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dnevnaponuda`
--
ALTER TABLE `dnevnaponuda`
  MODIFY `ID` int(50) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jelo/pice`
--
ALTER TABLE `jelo/pice`
  MODIFY `ID` int(50) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `ID` int(50) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `musterija`
--
ALTER TABLE `musterija`
  MODIFY `ID` int(50) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `narudzba`
--
ALTER TABLE `narudzba`
  MODIFY `ID` int(50) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `restoran`
--
ALTER TABLE `restoran`
  MODIFY `ID` int(50) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `administrator`
--
ALTER TABLE `administrator`
  ADD CONSTRAINT `administratorKorisnikFK` FOREIGN KEY (`IDKorisnika`) REFERENCES `korisnik` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dnevnaponuda`
--
ALTER TABLE `dnevnaponuda`
  ADD CONSTRAINT `dpJelo` FOREIGN KEY (`IDJela`) REFERENCES `jelo/pice` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jelo/pice`
--
ALTER TABLE `jelo/pice`
  ADD CONSTRAINT `NarJeloFK` FOREIGN KEY (`IDNarudzbe`) REFERENCES `narudzba` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `musterija`
--
ALTER TABLE `musterija`
  ADD CONSTRAINT `musterijaKorisnikFK` FOREIGN KEY (`IDKorisnika`) REFERENCES `korisnik` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `narudzba`
--
ALTER TABLE `narudzba`
  ADD CONSTRAINT `narKorisnikFK` FOREIGN KEY (`IDKorisnika`) REFERENCES `korisnik` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `restoran`
--
ALTER TABLE `restoran`
  ADD CONSTRAINT `restoranKorisnikFK` FOREIGN KEY (`IDKorisnika`) REFERENCES `korisnik` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
