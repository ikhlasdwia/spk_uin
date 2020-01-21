-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2019 at 01:57 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_uin`
--

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE `fakultas` (
  `id_fak` int(3) NOT NULL,
  `nama_fak` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fakultas`
--

INSERT INTO `fakultas` (`id_fak`, `nama_fak`) VALUES
(1, 'Ekonomi dan Bisnis Islam'),
(2, 'Sains dan Teknologi'),
(3, 'Adab dan Humaniora'),
(4, 'Dakwah dan Komunikasi'),
(5, 'Kedokteran dan Ilmu Kesehatan'),
(6, 'Syari\'ah dan Hukum'),
(7, 'Tarbiah dan Keguruan'),
(8, 'Ushuluddin, Filsafat dan Politik');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jur` int(3) NOT NULL,
  `nama_jur` varchar(50) NOT NULL,
  `id_fak` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jur`, `nama_jur`, `id_fak`) VALUES
(1, 'Akuntansi', 1),
(2, 'Manajemen', 1),
(3, 'Teknik Informatika', 2),
(4, 'Teknik Perencanaan Wilayah dan Kota', 2),
(5, 'Ekonomi Islam', 1),
(6, 'Ilmu Ekonomi', 1),
(7, 'Biologi', 2),
(8, 'Fisika', 2),
(9, 'Ilmu Peternakan', 2),
(10, 'Kimia', 2),
(11, 'Matematika', 2),
(12, 'Sistem Informasi', 2),
(13, 'Teknik Arsitek', 2),
(14, 'Bahasa dan Sastra Arab', 3),
(15, 'Bahasa dan Sastra Inggris', 3),
(16, 'Ilmu Perpustakaan', 3),
(17, 'Sejarah Kebudayaan Islam', 3),
(18, 'Sejarah Peradaban Islam', 3),
(19, 'Bimbingan dan Penyuluhan Islam', 4),
(20, 'Ilmu Komunikasi', 4),
(21, 'Jurnalistik', 4),
(22, 'Kesejahteraan Sosial', 4),
(23, 'Komunikasi dan Penyiaran Islam', 4),
(24, 'Manajemen Dakwah', 4),
(25, 'PMI / Kesejahteraan Sosial', 4),
(26, 'Pengembangan Masyarakat Islam', 4),
(28, 'Farmasi', 5),
(29, 'Kebidanan', 5),
(30, 'Kedokteran', 5),
(31, 'Keperawatan', 5),
(32, 'Kesehatan Masyarakat', 5),
(33, 'Hukum Acara Peradilan dan Kekeluargaan', 6),
(34, 'Hukum Acara Perdata dan Ketatanegaraan', 6),
(35, 'Ilmu Falak', 6),
(36, 'Ilmu Hukum', 6),
(37, 'Peradilan Agama', 6),
(38, 'Perbandingan Mazhab dan  Hukum', 6),
(39, 'Pidana dan Ketatanegaraan', 6),
(40, 'Aqidah dan Filsafat Islam', 7),
(41, 'Ilmu Al-Qur\'an dan Tafsir', 7),
(42, 'Ilmu Hadis', 8),
(43, 'Ilmu Politik', 8),
(44, 'Sosiologi Agana', 8),
(45, 'Studi Agama-agama', 8);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `version` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`version`) VALUES
(0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `date_create` date NOT NULL,
  `id_admin` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`username`, `password`, `email`, `nama_lengkap`, `no_hp`, `date_create`, `id_admin`) VALUES
('admin', 'admin', 'ikhlasdwia@gmail.com', 'Nur Ikhlas Dwi Amiruddin', '889', '2019-08-03', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_akademik`
--

CREATE TABLE `tb_akademik` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `date_create` date NOT NULL,
  `id_admin` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_akademik`
--

INSERT INTO `tb_akademik` (`username`, `password`, `email`, `nama_lengkap`, `no_hp`, `date_create`, `id_admin`) VALUES
('saintek', 'saintek', 'nurihsan@gmail.com', 'Nur Ihsan', '085311904456', '2019-08-04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kriteria`
--

CREATE TABLE `tb_kriteria` (
  `id_kriteria` bigint(20) NOT NULL,
  `nama_kriteria` varchar(50) NOT NULL,
  `kriteria_eigen` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kriteria`
--

INSERT INTO `tb_kriteria` (`id_kriteria`, `nama_kriteria`, `kriteria_eigen`) VALUES
(14, 'Lama Studi', 0.40451540489969684),
(15, 'Indeks Prestasi Akademik (IPK)', 0.2636195476972328),
(17, 'Olimpiade', 0.14554071602646215),
(18, 'Karir Organisasi Intra', 0.09313343279549406),
(19, 'Karir Organisasi Ekstra', 0.06360354849053075),
(20, 'Akhlak', 0.029587350090583373);

-- --------------------------------------------------------

--
-- Table structure for table `tb_mhs`
--

CREATE TABLE `tb_mhs` (
  `id_mhs` bigint(20) NOT NULL,
  `nim` varchar(12) NOT NULL,
  `nama_mhs` varchar(50) NOT NULL,
  `id_fak` int(3) NOT NULL,
  `id_jur` int(3) NOT NULL,
  `jk` enum('Laki-laki','Perempuan','','') NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `tgl_terdaftar` date NOT NULL,
  `st` enum('terdaftar','belum','','') DEFAULT 'belum'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mhs`
--

INSERT INTO `tb_mhs` (`id_mhs`, `nim`, `nama_mhs`, `id_fak`, `id_jur`, `jk`, `tempat_lahir`, `tgl_lahir`, `alamat`, `tgl_terdaftar`, `st`) VALUES
(7, '60200115053', 'Nur Ikhlas Dwi Amiruddin', 2, 3, 'Perempuan', 'Palopo', '2019-08-26', 'Antang', '2019-08-26', 'belum'),
(8, '60200115001', 'Andi Muhammad Sofyan,S.Kom', 2, 3, 'Laki-laki', 'Bone', '2019-09-04', 'Samata', '2019-09-02', 'belum'),
(10, '60900115045', 'Rinaldi Ihwal', 2, 3, 'Laki-laki', 'Takalar', '2019-09-02', 'Samata', '2019-09-10', 'belum'),
(11, '70200115053', 'Suci Nurzakinah', 5, 28, 'Perempuan', 'Palopo', '2019-09-16', 'Samata', '2019-09-23', 'belum');

-- --------------------------------------------------------

--
-- Table structure for table `tb_periode`
--

CREATE TABLE `tb_periode` (
  `id_periode` bigint(20) NOT NULL,
  `nama_periode` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_periode`
--

INSERT INTO `tb_periode` (`id_periode`, `nama_periode`) VALUES
(1, 'Deptember 2019'),
(3, 'September 2019');

-- --------------------------------------------------------

--
-- Table structure for table `tb_subkriteria`
--

CREATE TABLE `tb_subkriteria` (
  `id_subkriteria` bigint(20) NOT NULL,
  `nama_subkriteria` varchar(100) NOT NULL,
  `id_kriteria` bigint(20) NOT NULL,
  `nilai` enum('Sangat Baik','Baik','Cukup','Kurang','Sangat Kurang') NOT NULL,
  `subkriteria_eigen` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_subkriteria`
--

INSERT INTO `tb_subkriteria` (`id_subkriteria`, `nama_subkriteria`, `id_kriteria`, `nilai`, `subkriteria_eigen`) VALUES
(30, '3 Tahun D3 / 3,5 - 4 Tahun S1', 14, 'Sangat Baik', 0.5028194957704966),
(31, '4 Tahun S1 (Pengulangan)', 14, 'Baik', 0.2602315877866833),
(33, '5 Tahun S1', 14, 'Cukup', 0.1343504405731109),
(34, '6 Tahun S1', 14, 'Kurang', 0.06777766684747813),
(35, '>6 Tahun S1', 14, 'Sangat Kurang', 0.03482080902223112),
(36, '3,75 - 4,00', 15, 'Sangat Baik', 0.5028194957704966),
(37, '3,51 - 3,74', 15, 'Baik', 0.2602315877866833),
(38, '3,01 - 3,50', 15, 'Cukup', 0.1343504405731109),
(39, '2,76 - 3,00', 15, 'Kurang', 0.06777766684747813),
(40, '2,00 - 2,75', 15, 'Sangat Kurang', 0.03482080902223112),
(41, 'Internasional', 17, 'Sangat Baik', 0.5028194957704966),
(42, 'Nasional', 17, 'Baik', 0.2602315877866833),
(43, 'Regional', 17, 'Cukup', 0.1343504405731109),
(44, 'Lokal', 17, 'Kurang', 0.06777766684747813),
(45, 'Universitas', 17, 'Sangat Kurang', 0.03482080902223112),
(46, 'Dewan Mahasiswa - Presidium', 18, 'Sangat Baik', 0.633345720302242),
(47, 'Dewan Mahasiswa - Anggota', 18, 'Baik', 0.2604979561501301),
(48, 'Tidak Mengikuti Organisasi', 18, 'Kurang', 0.1061563235476279),
(49, 'HMI - Ketua', 19, 'Sangat Baik', 0.633345720302242),
(50, 'HMI - Sekretaris', 19, 'Baik', 0.2604979561501301),
(51, 'HMI - Bendahara', 19, 'Cukup', 0.1061563235476279),
(56, 'Hafalan >5 Juz', 20, 'Sangat Baik', 0.633345720302242),
(57, 'Hafalan 1-5 Juz', 20, 'Baik', 0.2604979561501301),
(58, 'BTQ (Nilai A)', 20, 'Cukup', 0.1061563235476279);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id_fak`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jur`),
  ADD KEY `id_fak` (`id_fak`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_akademik`
--
ALTER TABLE `tb_akademik`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `tb_mhs`
--
ALTER TABLE `tb_mhs`
  ADD PRIMARY KEY (`id_mhs`),
  ADD KEY `id_fak` (`id_fak`),
  ADD KEY `id_jur` (`id_jur`),
  ADD KEY `nim` (`nim`),
  ADD KEY `nim_2` (`nim`);

--
-- Indexes for table `tb_periode`
--
ALTER TABLE `tb_periode`
  ADD PRIMARY KEY (`id_periode`);

--
-- Indexes for table `tb_subkriteria`
--
ALTER TABLE `tb_subkriteria`
  ADD PRIMARY KEY (`id_subkriteria`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fakultas`
--
ALTER TABLE `fakultas`
  MODIFY `id_fak` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jur` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_akademik`
--
ALTER TABLE `tb_akademik`
  MODIFY `id_admin` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  MODIFY `id_kriteria` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tb_mhs`
--
ALTER TABLE `tb_mhs`
  MODIFY `id_mhs` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_periode`
--
ALTER TABLE `tb_periode`
  MODIFY `id_periode` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_subkriteria`
--
ALTER TABLE `tb_subkriteria`
  MODIFY `id_subkriteria` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD CONSTRAINT `jurusan_ibfk_1` FOREIGN KEY (`id_fak`) REFERENCES `fakultas` (`id_fak`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_mhs`
--
ALTER TABLE `tb_mhs`
  ADD CONSTRAINT `tb_mhs_ibfk_1` FOREIGN KEY (`id_fak`) REFERENCES `fakultas` (`id_fak`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_mhs_ibfk_2` FOREIGN KEY (`id_jur`) REFERENCES `jurusan` (`id_jur`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_subkriteria`
--
ALTER TABLE `tb_subkriteria`
  ADD CONSTRAINT `tb_subkriteria_ibfk_1` FOREIGN KEY (`id_kriteria`) REFERENCES `tb_kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
