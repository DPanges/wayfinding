-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2024 at 01:46 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ged`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_gedung`
--

CREATE TABLE `tb_gedung` (
  `id` int(11) NOT NULL,
  `gedung` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `lantai` varchar(255) NOT NULL,
  `opd` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_gedung`
--

INSERT INTO `tb_gedung` (`id`, `gedung`, `unit`, `lantai`, `opd`, `latitude`, `longitude`) VALUES
(1, 'GEDUNG A', 'UNIT 1', 'Lantai 1', 'Biro Administrasi Pembangunan', '-0.06164894637064733', ' 109.35312806999191'),
(2, 'GEDUNG A', 'UNIT 1', 'Lantai 1', 'Asisten II,\r\nStaf Ahli,\r\nBiro Administrasi Pimpinan\r\n', '-0.06180497102226771', '109.35324508854364'),
(3, 'GEDUNG A', 'UNIT 1', 'Lantai 3', 'Biro Pengadaan Barang dan Jasa', '-0.06192908154027769', '109.35334437701178'),
(4, 'GEDUNG A', 'UNIT 2', 'Lantai 1', 'Asisten III,\r\nBiro Administrasi Pimpinan,\r\nBiro Umum', '-0.061340443080848475', '109.35285148068782'),
(5, 'GEDUNG A', 'UNIT 2', 'Lantai 2', 'Biro Umum,\r\nArwana', '-0.061212786546610415', '109.35276283026984'),
(6, 'GEDUNG B', '-', 'Lantai 1', 'Biro Ekonomi', '-0.06225621875340944', '109.35314509865218'),
(7, 'GEDUNG B', '-', 'Lantai 2', 'Asisten I,\r\nBiro Pemerintahan', '-0.06235799132234714', '109.35301677664692'),
(8, 'GEDUNG A\r\n', 'UNIT 2\r\n', 'Lantai 3\r\n', 'Biro Kesejahteraan Rakyat,\r\nTengkawang\r\n', '-0.06107477196067711', '109.35262738573448'),
(9, 'GEDUNG B\r\n', '-', 'Lantai 3\r\n', 'Biro Hukum\r\n', '-0.06246418878536633', '109.3528751799515'),
(10, 'GEDUNG C\r\n', '-', 'Lantai 1\r\n', 'Badan Kepegawaian Daerah\r\n', '-0.061265042419704874', '109.35225569440895'),
(11, 'GEDUNG C\r\n', '-', 'Lantai 2-3\r\n', 'Biro Organisasi\r\n', '-0.06138893946243413', '109.35206099895272'),
(12, 'GEDUNG D\r\n', '-', '-', 'Badan Penelitian dan Pengembangan\r\n', '-0.06258366093099893', '109.35256986207696'),
(13, 'GEDUNG E\r\n', '-', '-', 'Satuan Polisi Pamong Praja\r\n', '-0.06168540738491364', '109.3518530288063'),
(14, 'GEDUNG F\r\n', '-', '-', 'Badan Kesatuan Bangsa dan Politik', '-0.06236241621664491', '109.3519371018442'),
(15, 'GEDUNG G\r\n', '-', '-', 'Biro Umum (Bagian Rumah Tangga)', '-0.06107477196042266', '109.3515477109047'),
(16, 'GEDUNG H\r\n', '-', '-', 'Unit Pelayanan Kesehatan Masyarakat Kantor Gubernur', '-0.06072520530138283', '109.35195922630079'),
(17, 'GEDUNG I', '-', '-', 'Badan Keuangan Aset Daerah ', '-0.06095972470579277', '109.35172470677398'),
(18, 'GAZEBO', '-', '-', 'Gazebo\r\n', '-0.06188452763431805', '109.3541318506279'),
(19, 'GEDUNG PELAYANAN TERPADU', '-', '-', 'Dinas Kependudukan dan Catatan Sipil,\r\nDinas Penanaman Modal Terpadu Satu Pintu,\r\nBadan Perencanaan Daerah,\r\nDinas Komunikasi dan Informasi\r\n', '-0.06185797827360761', '109.35247693924104');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_gedung`
--
ALTER TABLE `tb_gedung`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_gedung`
--
ALTER TABLE `tb_gedung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
