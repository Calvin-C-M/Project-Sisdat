-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2021 at 07:01 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `be_cipcer`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('140810200053', 'user1'),
('140810200035', 'user2'),
('140810200059', 'user3'),
('140810200034', 'user4');

-- --------------------------------------------------------

--
-- Table structure for table `departemen`
--

CREATE TABLE `departemen` (
  `id_dept` int(2) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `singkatan` varchar(75) NOT NULL,
  `logo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departemen`
--

INSERT INTO `departemen` (`id_dept`, `nama`, `singkatan`, `logo`) VALUES
(0, 'Ring 1', '', 'cipcer.png'),
(1, 'Biro ADK', 'Biro Administrasi dan Kesekretariatan', 'ADK.png'),
(2, 'Biro Keuangan', '', 'Keuangan.png'),
(3, 'Biro Medinfo', 'Biro Media dan Informasi', 'Medinfo.png'),
(4, 'Biro PO', 'Biro Pengembangan Organisasi', 'PO.png'),
(5, 'Departemen Agama', '', 'Agama.png'),
(6, 'Departemen Hubin', 'Departemen Hubungan Internal', 'Hubin.png'),
(7, 'Departemen Hubeks', 'Departemen Hubungan Eksternal', 'Hubeks.png'),
(8, 'Departemen Kaderisasi', '', 'Kader.png'),
(9, 'Departemen Keilmuan', '', 'Keilmuan2.png'),
(10, 'Departemen Keprofesian', '', 'Keprofesian.png'),
(11, 'Departemen Kewirausahaan', '', 'Kewirus.png'),
(12, 'Departemen MIBA', 'Departemen Minat dan Bakat', 'Miba.png'),
(13, 'Departemen PTI', 'Departemen Pengembangan Teknologi Informasi', 'PTI.png'),
(14, 'Departemen Sosial', 'Sosial', 'Sosial.png');

-- --------------------------------------------------------

--
-- Table structure for table `komponen`
--

CREATE TABLE `komponen` (
  `nama` varchar(50) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `logo` varchar(50) NOT NULL,
  `makna_logo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komponen`
--

INSERT INTO `komponen` (`nama`, `visi`, `misi`, `logo`, `makna_logo`) VALUES
('Kabinet Cipta Cerita', 'Mewujudkan Himatif FMIPA Unpad yang Komunikatif serta memiliki nilai PRESISI (Profesional, Apresiatif, Sinergis, Inovatif)', '1. Meningkatkan hubungan internal dan komunikasi yang baik dengan seluruh elemen Prodi Teknik Informatika Unpad&lt;br /&gt;2. Menjadikan Himatif FMIPA Unpad sebagai media komunikasi dan informasi yang aktual&lt;br /&gt;3. Membentuk ruang yang nyaman untuk anggota Himatif FMIPA Unpad guna memaksimalkan berkembangnya potensi akademik dan non akademik&lt;br /&gt;4. Meningkatkan bentuk apresiasi kepada seluruh elemen Prodi Teknik Informatika agar terbentuknya budaya apresiatif dan saling menghargai&lt;br /&gt;5. Meningkatkan dan memaksimalkan potensi anggota Himatif FMIPA Unpad dalam akademik dan non akademik agar dapat membanggakan Prodi Teknik Informatika Unpad baik di dalam maupun diluar Unpad', 'cipcer.png', 'Daun = mengartikan kerja sama<br />Pena = untuk menulis cerita<br />Bulatan = matahari melambangkan sumber energi<br />Gelombang laut = melambangkan tantangan<br />Sobekan daun = ada 8 yang artinya kabinet ke-8 himatif<br />Warna coklat = memiliki arti kehangatan dan kenyamanan');

-- --------------------------------------------------------

--
-- Table structure for table `pimpinan`
--

CREATE TABLE `pimpinan` (
  `npm` char(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `dept` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pimpinan`
--

INSERT INTO `pimpinan` (`npm`, `nama`, `jabatan`, `dept`, `foto`) VALUES
('140810190001', 'Dicky Rahma Hermawan', 'Ketua Biro', 2, '140810190001.jpg'),
('140810190003', 'Muhammad Galang Satria', 'Ketua Departemen', 6, '140810190003.jpg'),
('140810190009', 'Farhan Gunadi', 'Ketua Departemen', 8, '140810190009.jpg'),
('140810190017', 'Saddam Habibi Utomo', 'Ketua', 0, '140810190017.jpg'),
('140810190021', 'Mochammad Ghifari Eka Narayana', 'Ketua Departemen', 12, '140810190021.jpg'),
('140810190028', 'Robby Sobari', 'Ketua Departemen', 14, '140810190028.jpg'),
('140810190031', 'Mochamad Arya Bima Agfian', 'Ketua Biro', 1, '140810190031.jpg'),
('140810190032', 'Akirareka Kinantan Jiraiya', 'Ketua Departemen', 7, '140810190032.jpg'),
('140810190040', 'Gregorius Evangelist Wijayanto', 'Ketua Departemen', 13, '140810190040.jpg'),
('140810190047', 'Matthew Felix Ristanto', 'Ketua Biro', 4, '140810190047.jpg'),
('140810190055', 'Anki Prawira Hidayat', 'Wakil Ketua', 0, '140810190055.jpg'),
('140810190062', 'Muhammad Hilmi Aufarahman', 'Ketua Departemen', 9, '140810190062.jpg'),
('140810190063', 'Ananda Sapta Awedhana', 'Ketua Biro', 3, '140810190063.jpg'),
('140810190069', 'Mohamad Alghaz Hernanda', 'Ketua Departemen', 10, '140810190069.jpg'),
('140810190071', 'Ananda Miftakhul Syifa', 'Ketua Departemen', 5, '140810190071.jpg'),
('140810190074', 'Fahrul Thariq Fadillah', 'Ketua Departemen', 11, '140810190074.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `proker`
--

CREATE TABLE `proker` (
  `nama` varchar(75) NOT NULL,
  `dept` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `proker`
--

INSERT INTO `proker` (`nama`, `dept`) VALUES
('BE Eval dan BE AWARD', 4),
('BK Intern', 8),
('CBS 2021 (Character Building Season)', 8),
('CIA V.7 (Calender Of Informatics Activity)', 3),
('FnC (Fix and Create)', 11),
('Himatif Graduation Day (HGD)', 6),
('Himatif Leadership Training', 8),
('Icompas (Informatics Company Visit)', 10),
('Identity (ID CARD & Jaket Himpunan Mahasiswa Teknik Informatika)', 11),
('Iman (Informasi Keagamaan)', 5),
('Imazine (Informatics Magazine)', 3),
('Informatics Festival (IFest)', 7),
('Informatics Fun Day (IFFD)', 6),
('Informatika Berbakti (INTI)', 14),
('Informatika Peduli (INTEL)', 14),
('Inspirasi Seni', 12),
('Instagram (Informatics Sports Art and Game Tournament)', 12),
('Kilas (Kajian Islam se-Himatif)', 5),
('KKM\'s Care ', 12),
('Konferensi Internasional', 9),
('Outlet KITA (Outlet Keluarga Informatika)', 11),
('Pathways (Problem Solving and Summary for Informatics)', 9),
('Pelatihan PKM', 10),
('PFF (Prepare For Future)', 10),
('Seminar Keorganisasian', 4),
('Studi Banding (Standing)', 7),
('Tecnopreneur ', 10),
('TOEFL Preparation and Test', 9),
('Transparansi Dana', 2),
('WOI (Wall Of Information)', 3),
('Workshop Kesekretariatan', 1),
('Workshop LK (Laporan Keuangan)', 2),
('KKM\'s Care', 13),
('HAITI', 13),
('Coin (Competition of Informatics)', 13),
('Produktif (Product Development of Himatif)', 13);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `npm` char(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `dept` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`npm`, `nama`, `dept`, `foto`) VALUES
('', '', 3, 'Lingkaran Logo.png'),
('140810190002', 'Rizal Herliansyah Hidayat', 3, '140810190002.jpg'),
('140810190005', 'Mohamad Fahrio Ghanial Fatihah', 9, '140810190005.jpg'),
('140810190006', 'Muhammad Fadlan Fasya', 14, '140810190006.jpg'),
('140810190008', 'Daffa Anov Arkan Javier', 10, '140810190008.jpg'),
('140810190010', 'Cut Fazira Zuhra', 6, '140810190010.jpg'),
('140810190012', 'Muhammad Faiq Al Murtadha Abdur Rahman Arif', 12, '140810190012.jpg'),
('140810190013', 'Syakira Rahma Fauziyah', 4, '140810190013.jpg'),
('140810190015', 'Salsabila Karin', 2, '140810190015.jpg'),
('140810190016', 'Muhammad Faishal Dienul Haq', 13, '140810190016.jpg'),
('140810190018', 'Alifa Hafida Anwar', 1, '140810190018.jpg'),
('140810190019', 'Devara Hifzhurrahman', 8, '140810190019.jpg'),
('140810190020', 'Join Valentino Tampubolon', 11, '140810190020.jpg'),
('140810190025', 'Aghniya Abdurrahman Mannan', 13, '140810190025.jpg'),
('140810190026', 'Rian Febriansyah', 5, '140810190026.png'),
('140810190029', 'Rellisa Puspa Kusuma', 14, '140810190029.jpg'),
('140810190034', 'Milyanda Vania', 7, '140810190034.jpg'),
('140810190038', 'Leonardo Septian Dwigantoro', 8, '140810190038.jpg'),
('140810190042', 'Diandha Carnatia Rizsyifaa', 10, '140810190042.jpg'),
('140810190043', 'Marvin Luckianto', 11, '140810190043.jpg'),
('140810190044', 'Ridho Emir Fajar Alam', 10, '140810190044.jpg'),
('140810190046', 'Akmal Syawqi Albar', 4, '140810190046.jpg'),
('140810190049', 'Anastasia Victoria Yuarsa', 7, '140810190049.jpg'),
('140810190050', 'Elshandi Septiawan', 5, '140810190050.jpg'),
('140810190052', 'Putri Ainur Fitri', 9, '140810190052.jpg'),
('140810190054', 'Ruth Rebecca Ovelin', 3, '140810190054.jpg'),
('140810190064', 'Yuela Thahira', 14, '140810190064.jpg'),
('140810190066', 'Johannes Gavin Genesius Nugroho', 12, '140810190066.jpg'),
('140810190068', 'Fadhillah Akbar Indrawan', 12, '140810190068.jpg'),
('140810190073', 'Farhan Maulana Alief', 4, '140810190073.jpg'),
('140810190076', 'Dimas Rahadian Nugraha', 6, '140810190076.jpeg'),
('140810200004', 'Aulia Rahmanita', 3, '140810200004.jpg'),
('140810200005', 'Alfadli Maulana Siddik', 12, '140810200005.jpg'),
('140810200007', 'Rangga Putra', 12, '140810200007.jpeg'),
('140810200008', 'Anggie Forestry', 2, '140810200008.jpg'),
('140810200009', 'Wafi Fahruzzaman', 4, '140810200009.jpg'),
('140810200010', 'Rizky Mahardika Hariyanto', 14, '140810200010.jpg'),
('140810200011', 'Faiq Muhammad', 5, '140810200011.jpg'),
('140810200012', 'Della Fauziyyah Husna', 7, '140810200012.jpg'),
('140810200013', 'Rihlan Lumenda Suherman', 10, '140810200013.jpg'),
('140810200014', 'Nawang Ilmi Adzani', 4, '140810200014.jpg'),
('140810200015', 'Nanda Raihan Sukma', 1, '140810200015.jpg'),
('140810200020', 'Andaru Danurdara Wibisana', 13, '140810200020.jpg'),
('140810200021', 'Rifqi Akmal Fauzi', 11, '140810200021.jpg'),
('140810200023', 'Rheza Pandya Andhikaputra', 6, '140810200023.jpg'),
('140810200024', 'Jonathan Victor Goklas', 3, '140810200024.jpg'),
('140810200025', 'Raihan Fadhlal Aziz', 10, '140810200025.jpg'),
('140810200026', 'Mu\'az Abdul Rohim', 9, '140810200026.jpg'),
('140810200029', 'Adnan Rafiansyah Majid', 9, '140810200029.jpg'),
('140810200031', 'Ahmad Yahya Salim', 5, '140810200031.jpg'),
('140810200032', 'Irfan Kamal', 13, '140810200032.jpg'),
('140810200034', 'Anna Safira Dila', 14, '140810200034.jpg'),
('140810200035', 'Naufal Fahrezi', 14, '140810200035.jpg'),
('140810200036', 'Laura Azra Aprilyanti', 11, '140810200036.png'),
('140810200040', 'Indah Sutriyati', 1, '140810200040.jpg'),
('140810200041', 'Alvaro Dwi Oktaviano', 3, '140810200041.jpg'),
('140810200042', 'Andre Nathaniel Adipraja', 8, '140810200042.jpg'),
('140810200043', 'Johanes Bagus Prasetyo', 9, '140810200043.jpg'),
('140810200045', 'Amalia Nur Fitri', 3, '140810200045.jpg'),
('140810200048', 'Muhammad Attila An Naufal', 13, '140810200048.jpeg'),
('140810200051', 'Wildan Hanif Musyaffa', 2, '140810200051.jpg'),
('140810200052', 'Fasya Nurina Izzati', 4, '140810200052.jpg'),
('140810200053', 'Calvin Calfi Montolalu', 8, '140810200053.jpg'),
('140810200055', 'Wafa Tsabita', 5, '140810200055.jpg'),
('140810200056', 'Rafi Alauddin', 7, '140810200056.jpg'),
('140810200058', 'Amariel Danendra Dagna', 7, '140810200058.jpg'),
('140810200059', 'Deani Puteri Virdiana', 6, '140810200059.jpg'),
('140810200060', 'Alya Raisa Hidayat', 10, '140810200060.jpeg'),
('140810200062', 'Zahran Hanif Fathanmubin', 12, '140810200062.jpg'),
('140810200063', 'Muhamad Davio Athallah', 11, '140810200063.jpg'),
('140810200064', 'Muhammad Ariiq Rakha Shafa', 7, '140810200064.jpg'),
('140810200065', 'Hanifan Ayusti Khairunnisa', 4, '140810200065.jpg'),
('140810200066', 'Muthia Azzahra', 6, '140810200066.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `password` (`password`);

--
-- Indexes for table `departemen`
--
ALTER TABLE `departemen`
  ADD PRIMARY KEY (`id_dept`);

--
-- Indexes for table `komponen`
--
ALTER TABLE `komponen`
  ADD UNIQUE KEY `nama` (`nama`);

--
-- Indexes for table `pimpinan`
--
ALTER TABLE `pimpinan`
  ADD PRIMARY KEY (`npm`),
  ADD KEY `fk` (`dept`);

--
-- Indexes for table `proker`
--
ALTER TABLE `proker`
  ADD KEY `dept` (`dept`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`npm`),
  ADD KEY `dept` (`dept`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pimpinan`
--
ALTER TABLE `pimpinan`
  ADD CONSTRAINT `fk` FOREIGN KEY (`dept`) REFERENCES `departemen` (`id_dept`);

--
-- Constraints for table `proker`
--
ALTER TABLE `proker`
  ADD CONSTRAINT `proker_ibfk_1` FOREIGN KEY (`dept`) REFERENCES `departemen` (`id_dept`);

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`dept`) REFERENCES `departemen` (`id_dept`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
