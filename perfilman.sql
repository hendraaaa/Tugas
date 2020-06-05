-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2020 at 05:10 AM
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
  `overview` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id_film`, `namaFilm`, `rating`, `genre`, `durasi`, `tgl_rilis`, `poster_film`, `overview`) VALUES
(2, 'Ad Astra (2019)', 86, 'Cerita Fiksi, Drama', '2h 3m', '2019-09-20', 'ad astra.jpg', 'Seorang astronot melakukan perjalanan ke tepi luar tata surya untuk menemukan ayahnya dan mengungkap misteri yang mengancam kelangsungan hidup planet kita. Dia mengungkap rahasia yang menantang sifat keberadaan manusia dan tempat kita di kosmos.'),
(3, 'Bloodshot (2020)', 70, 'Aksi, Cerita Fiksi', '1h 49m', '2020-03-13', 'bloodshot.jpg', 'Ray Garrison Bloodshot adalah seorang prajurit yang dihidupkan kembali oleh sebuah nanoteknologi. Karena teknologi ini ia memiliki kemampuan baru yang luar biasa. Namun masa lalu Ray tiba-tiba muncul dan membuatnya penasaran dengan jati dirinya. Dengan ke'),
(4, 'Scoob! (2020)', 80, 'Keluarga, Animasi, Komedi, Misteri, Petualangan', '1h 34m', '2020-05-15', 'scoob!.jpg', 'Film ini menceritakan bagaimana awal pertemuan Scooby dan Shaggy. Shaggy yang coba menyelamatkan Scooby dari seorang polisi hingga mereka berdua akhirnya bersahabat. Mereka berdua pun bertemu Freddie, Velma dan Daphne dan menjadi anggota geng Mystery Inc.'),
(5, 'The Hunt (2020)', 67, 'Aksi, Cerita Seru, Kengerian\r\n', '1h 30m', '2020-03-13', 'TheHunt.jpg', 'Twelve strangers wake up in a clearing. They don\'t know where they are—or how they got there. In the shadow of a dark internet conspiracy theory, ruthless elitists gather at a remote location to hunt humans for sport. But their master plan is about to be '),
(6, 'Bad Boys for Life (2020)', 72, 'Thriller, Aksi, Kejahatan', '2h 4m', '2020-01-17', 'Bad Boys for Life.jpg', 'Marcus dan Mike dipaksa untuk menghadapi ancaman baru, perubahan karir, dan krisis paruh baya saat mereka bergabung dengan tim elit AMMO yang baru dibentuk oleh Departemen Kepolisian Miami untuk menaklukkan Armando Amas yang kejam, pemimpin dari bandar narkoba Miami yang berbahaya.'),
(7, 'Sonic the Hedgehog (2020)', 75, 'Aksi, Fiksi Ilmiah, Komedi, Keluarga', '1h 39m', '2020-02-14', 'Sonic the Hedgehog.jpg', 'Mengisahkan petualangan Sonic saat ia belajar tentang kompleksitas kehidupan di bumi bersama manusia sahabat barunya, Tom Wachowski. Sonic dan Tom bersatu untuk menghentikan si jahat Dr. Robotnik yang ingin menangkap Sonic dan menggunakan kekuatan istimewanya untuk menguasai dunia.'),
(8, 'The Gentlemen (2020)', 77, 'Aksi, Kejahatan, Komedi', '1h 53m', '2020-01-24', 'The Gentlemen.jpg', 'Pendatang Amerika Mickey Pearson telah membangun kerajaan ganja yang sangat menguntungkan di London. Ketika tersiar kabar bahwa ia ingin mendapatkan uang dari bisnis selamanya, hal itu memicu plot, skema, penyuapan, dan pemerasan dalam upaya untuk mencuri domainnya dari bawahnya.'),
(9, 'Joker (2019)', 82, 'Kejahatan, Thriller, Drama', '2h 2m', '2019-10-04', 'Joker.jpg', 'Selama 1980-an, seorang pelawak berdiri gagal didorong gila dan beralih ke kehidupan kejahatan dan kekacauan di Kota Gotham sambil menjadi tokoh kejahatan psikopat terkenal.'),
(10, 'Birds of Prey (and the Fantabulous Emancipation of One Harley Quinn) (2020)', 72, 'Aksi, Kejahatan, Komedi', '1h 49m', '2020-02-07', 'Birds of Prey (and the Fantabulous Emancipation of One Harley Quinn).jpg', 'Harley Quinn bergabung dengan pasukan dengan seorang penyanyi, seorang pembunuh dan seorang detektif polisi untuk membantu seorang gadis muda yang dipukul setelah dia mencuri berlian langka dari seorang penguasa kejahatan.'),
(11, 'Survive the Night (2020)', 59, 'Aksi, Thriller', '1h 29m', '2020-05-22', 'Survive the Night.jpg', 'Seorang dokter yang dipermalukan dan keluarganya disandera di rumah mereka oleh para penjahat yang sedang melarikan diri, ketika perampokan yang serba salah mengharuskan mereka untuk mencari perhatian medis segera.'),
(12, 'Onward (2020)', 79, 'Animasi, Keluarga, Petualangan, Komedi, Fantasi', '1h 42m', '2020-03-06', 'Onward.jpg', 'Di dunia fantasi pinggiran kota, dua saudara peri remaja memulai sebuah pencarian luar biasa untuk mengetahui apakah masih ada sedikit keajaiban yang tersisa di sana.'),
(13, 'Parasite (2019)', 85, 'Komedi, Thriller, Drama', '2h 13m', '2019-11-01', 'Parasite.jpg', 'Semua menganggur, keluarga Ki-taek memiliki minat khusus pada Taman kaya dan glamor untuk mata pencaharian mereka sampai mereka terjerat dalam insiden tak terduga.'),
(14, 'Intuition (2020)', 59, 'Thriller, Kejahatan', '1h 56m', '2020-05-28', 'Intuition.jpg', 'Petugas polisi Pipa bekerja pada kasus besar pertamanya sambil secara bersamaan menyelidiki bosnya, yang diduga melakukan pembunuhan. Prekuel \"Perdida\".'),
(15, '1917 (2020)', 79, 'Perang, Drama, Aksi, Sejarah', '1h 59m', '2020-01-10', '1917.jpg', 'Pada puncak Perang Dunia Pertama, dua prajurit muda Inggris harus melintasi wilayah musuh dan menyampaikan pesan yang akan menghentikan serangan mematikan pada ratusan tentara.'),
(16, 'The Call of the Wild (2020)', 74, 'Drama, Petualangan, Keluarga', '1h 40m', '2020-02-21', 'The Call of the Wild.jpg', 'Buck adalah anjing berhati besar yang kehidupan rumah tangganya terbalik ketika ia tiba-tiba dicopot dari rumahnya di California dan ditransplantasikan ke belantara eksotis Yukon selama Gold Rush tahun 1890-an. Saat rookie terbaru di tim kereta luncur anjing pengiriman surat — dan kemudian pemimpinnya — Buck mengalami petualangan seumur hidup, akhirnya menemukan tempat sejatinya di dunia dan menjadi tuannya sendiri.'),
(17, 'Aladdin (2019)', 71, 'Petualangan, Fantasi, Roman, Komedi, Keluarga', '2h 8m', '2019-05-24', 'Aladdin.jpg', 'Seorang anak jalanan yang baik hati bernama Aladdin memulai petualangan magis setelah menemukan lampu yang melepaskan jin yang membingungkan sementara Wazir Agung yang haus kekuasaan bersaing untuk lampu yang sama yang memiliki kekuatan untuk membuat harapan terdalam mereka menjadi kenyataan.'),
(18, 'Extraction (2020)', 75, ' Drama, Aksi, Cerita Seru ', '1h 56m', '2020-04-24', 'Extraction.jpg', 'Extraction menceritakan Tyler Rake, seorang tentara bayaran yang menyerahkan segalanya ketika diminta menyelamatkan Ovi, anak dari pengedar narkoba terbesar. Hal itu bermula ketika terjadi persaingan bisnis antara pengedar narkoba terbesar di India dan Bangladesh.'),
(19, 'The Lovebirds (2020)', 64, ' Aksi, Komedi, Percintaan ', '1h 26m', '2020-05-22', 'The Lovebirds.jpg', 'The Lovebirds adalah sebuah film komedi romansa Amerika Serikat tahun 2020, garapan Michael Showalter, dari skenario karya Aaron Abrams dan Brendan Gall, dari sebuah cerita karya Abrams, Gall dan Martin Gero. Film tersebut menampilkan Kumail Nanjiani, Issa Rae, Paul Sparks, Anna Camp dan Kyle Bornheimer'),
(20, 'The Invisible Man (2020)', 71, ' Cerita Seru, Cerita Fiksi, Kengerian ', '2h 4m', '2020-02-28', 'The Invisible Man.jpg', 'Cecilia Kass tidak pernah percaya bahwa mantan kekasihnya yang temperamental bunuh diri dan meninggalkan warisan kepadanya. Cecilia berusaha membuktikan bahwa ia sedang diburu oleh seseorang yang tidak terlihat oleh siapapun.'),
(21, 'Debt Collectors (2020)', 51, ' Aksi, Komedi, Kejahatan ', '1h 37m', '2020-05-29', 'Debt Collectors.jpg', 'Sepasang penagih utang didorong ke dalam situasi berbahaya yang eksplosif, memburu berbagai pekerja rendahan sementara juga menghindari gembong pendendam.'),
(22, 'Dolittle (2020)', 68, 'Komedi, Fantasi, Petualangan, Keluarga ', '1h 41m', '2020-01-17', 'Dolittle.jpg', 'Setelah kehilangan istri tercinta, Dr. John Dolittle (Robert Downey Jr.) yang eksentrik mengasingkan dirinya di balik rumahnya dan hanya ditemani hewan-hewan peliharaannya yang eksotis.'),
(23, 'Justice League Dark: Apokolips War (2020)', 85, 'Animasi, Aksi, Petualangan, Fantasi, Cerita Fiksi ', '1h 30m', '2020-05-05', 'Justice League Dark Apokolips War.jpg', 'Bumi hancur setelah tiran ilegalgal Darkseid telah menghancurkan Liga Keadilan dalam perang yang dieksekusi dengan buruk oleh Pahlawan Super DC. Sekarang sisa benteng kebaikan - Liga Keadilan, Titans Remaja, Pasukan Bunuh Diri dan berbagai macam lainnya - harus menyusun kembali, menyusun strategi, dan membawa perang ke Darkseid untuk menyelamatkan planet dan penghuninya yang masih hidup.'),
(24, 'Jumanji: The Next Level (2019)', 69, ' Petualangan, Komedi, Fantasi ', '2h 3m', '2019-12-13', 'Jumanji The Next Level.jpg', 'Dalam Jumanji: The Next Level, keempat sahabat kembali lagi, tetapi permainannya telah berubah. Saat memutuskan masuk lagi ke Jumanji untuk menyelamatkan salah satu dari mereka, mereka menemukan segalanya tak seperti yang diduga. Para pemain harus melaju ke wilayah-wilayah tersembunyi dan belum dijamah, dari gurun nan gersang ke pegunungan bersalju, demi meloloskan diri dari permainan paling berbahaya di dunia.'),
(25, 'Captain Marvel (2019)', 70, 'Aksi, Petualangan, Cerita Fiksi ', '2h 4m', '2019-03-08', 'Captain Marvel.jpg', 'Kisah ini mengikuti Carol Danvers saat ia menjadi salah satu pahlawan paling kuat di alam semesta ketika Bumi terperangkap di tengah perang galaksi antara dua ras alien. Bertempat di tahun 1990-an, Kapten Marvel adalah petualangan yang sepenuhnya baru dari periode yang sebelumnya tidak terlihat dalam sejarah Marvel Cinematic Universe.'),
(26, 'Fast & Furious Presents: Hobbs & Shaw (2019)', 68, 'Aksi, Petualangan, Komedi ', '2h 17m', '2019-08-02', 'Fast & Furious Presents Hobbs & Shaw.jpg', 'Hobbs & Shaw (2019) cinema film baru barat yang sangat seru Ini bercerita Luke Hobbs (Dwayne Johnson) terpaksa membentuk aliansi yang mustahil dengan Deckard Shaw (Jason Statham). Keduanya terpaksa bersatu membantu Hattie Shaw (Vanessa Kirby) untuk memburu senjata virus berbahaya dan Brixton (Idris Elba). Brixton adalah penjahat jenis baru yang berhasil mengubah dirinya menjadi manusia super. Keberadaanya menjadi ancaman bagi umat manusia.');

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
  MODIFY `id_film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

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
