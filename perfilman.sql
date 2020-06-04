-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2020 at 02:39 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perfilman`
--

-- --------------------------------------------------------

--
-- Table structure for table `aktor`
--

CREATE TABLE `aktor` (
  `id_aktor` int(11) NOT NULL,
  `peran` varchar(255) NOT NULL,
  `jenis_kl` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tgl_lahir` datetime NOT NULL,
  `umur` int(11) NOT NULL,
  `biografu` varchar(255) NOT NULL,
  `id_film` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id_film` int(11) NOT NULL,
  `namaFilm` varchar(255) NOT NULL,
  `rating` double NOT NULL,
  `genre` varchar(255) NOT NULL,
  `durasi` varchar(255) NOT NULL,
  `tgl_rilis` date NOT NULL,
  `poster_film` varchar(255) NOT NULL,
  `overview` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id_film`, `namaFilm`, `rating`, `genre`, `durasi`, `tgl_rilis`, `poster_film`, `overview`) VALUES
(2, 'Ad Astra (2019)', 86, 'Cerita Fiksi, Drama', '2h 3m', '2019-09-20', 'ad astra.jpg', 'Seorang astronot melakukan perjalanan ke tepi luar tata surya untuk menemukan ayahnya dan mengungkap misteri yang mengancam kelangsungan hidup planet kita. Dia mengungkap rahasia yang menantang sifat keberadaan manusia dan tempat kita di kosmos.'),
(3, 'Bloodshot (2020)', 70, 'Aksi, Cerita Fiksi', '1h 49m', '2020-03-13', 'bloodshot.jpg', 'Ray Garrison Bloodshot adalah seorang prajurit yang dihidupkan kembali oleh sebuah nanoteknologi. Karena teknologi ini ia memiliki kemampuan baru yang luar biasa. Namun masa lalu Ray tiba-tiba muncul dan membuatnya penasaran dengan jati dirinya. Dengan ke'),
(4, 'Scoob! (2020)', 80, 'Keluarga, Animasi, Komedi, Misteri, Petualangan', '1h 34m', '2020-05-15', 'scoob!.jpg', 'Film ini menceritakan bagaimana awal pertemuan Scooby dan Shaggy. Shaggy yang coba menyelamatkan Scooby dari seorang polisi hingga mereka berdua akhirnya bersahabat. Mereka berdua pun bertemu Freddie, Velma dan Daphne dan menjadi anggota geng Mystery Inc.'),
(5, 'The Hunt (2020)', 67, 'Aksi, Cerita Seru, Kengerian\r\n', '1h 30m', '2020-03-13', 'TheHunt.jpg', 'Twelve strangers wake up in a clearing. They don\'t know where they are—or how they got there. In the shadow of a dark internet conspiracy theory, ruthless elitists gather at a remote location to hunt humans for sport. But their master plan is about to be ');

-- --------------------------------------------------------

--
-- Table structure for table `film_favorite`
--

CREATE TABLE `film_favorite` (
  `id_film_favorite` int(11) NOT NULL,
  `id_film` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `film_mendatang`
--

CREATE TABLE `film_mendatang` (
  `id_film_mendatang` int(11) NOT NULL,
  `id_film` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `film_tayang`
--

CREATE TABLE `film_tayang` (
  `id_film_tayang` int(11) NOT NULL,
  `id_film` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aktor`
--
ALTER TABLE `aktor`
  ADD PRIMARY KEY (`id_aktor`),
  ADD KEY `id_film` (`id_film`);

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id_film`);

--
-- Indexes for table `film_favorite`
--
ALTER TABLE `film_favorite`
  ADD PRIMARY KEY (`id_film_favorite`),
  ADD KEY `id_film` (`id_film`);

--
-- Indexes for table `film_mendatang`
--
ALTER TABLE `film_mendatang`
  ADD PRIMARY KEY (`id_film_mendatang`),
  ADD KEY `id_film` (`id_film`);

--
-- Indexes for table `film_tayang`
--
ALTER TABLE `film_tayang`
  ADD PRIMARY KEY (`id_film_tayang`),
  ADD KEY `id_film` (`id_film`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aktor`
--
ALTER TABLE `aktor`
  MODIFY `id_aktor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id_film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `film_favorite`
--
ALTER TABLE `film_favorite`
  MODIFY `id_film_favorite` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `film_mendatang`
--
ALTER TABLE `film_mendatang`
  MODIFY `id_film_mendatang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `film_tayang`
--
ALTER TABLE `film_tayang`
  MODIFY `id_film_tayang` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `aktor`
--
ALTER TABLE `aktor`
  ADD CONSTRAINT `aktor_ibfk_1` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`) ON DELETE CASCADE;

--
-- Constraints for table `film_favorite`
--
ALTER TABLE `film_favorite`
  ADD CONSTRAINT `film_favorite_ibfk_1` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`) ON DELETE CASCADE;

--
-- Constraints for table `film_mendatang`
--
ALTER TABLE `film_mendatang`
  ADD CONSTRAINT `film_mendatang_ibfk_1` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`) ON DELETE CASCADE;

--
-- Constraints for table `film_tayang`
--
ALTER TABLE `film_tayang`
  ADD CONSTRAINT `film_tayang_ibfk_1` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
