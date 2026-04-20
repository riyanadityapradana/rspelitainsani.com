-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2019 at 11:39 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pelitainsani`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_berita`
--

CREATE TABLE IF NOT EXISTS `t_berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(200) DEFAULT NULL,
  `isi` text,
  `gambar` text,
  `tgl_berita` date DEFAULT NULL,
  `kategori` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_dokter`
--

CREATE TABLE IF NOT EXISTS `t_dokter` (
  `id_dokter` varchar(20) NOT NULL,
  `nama_dokter` text,
  `foto` varchar(200) DEFAULT NULL,
  `tempat_lahir` varchar(20) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jk` varchar(1) DEFAULT NULL,
  `keterangan` text,
  `no_izin` varchar(20) DEFAULT NULL,
  `id_spesialis` varchar(3) DEFAULT NULL,
  `status_praktik` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_dokter`
--

INSERT INTO `t_dokter` (`id_dokter`, `nama_dokter`, `foto`, `tempat_lahir`, `tgl_lahir`, `jk`, `keterangan`, `no_izin`, `id_spesialis`, `status_praktik`) VALUES
('001', 'dr. H. GABRIL TAUFIQ BASRI, Sp.PD.,FINASIM', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('002', 'dr. RULLY NOVIYAN, Sp. PD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('003', 'dr. HARI SUPARJO, Sp.OG.,M.Kes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('004', 'dr. FATHURRAHMAN, Sp.OG.,M.Kes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('005', 'dr. H. GUSTI IRWAN NOVIANSYAH, Sp.OG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('006', 'dr. SYIHAB FAYUMI, Sp.A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('007', 'dr. YANUAR NUSCA PERMANA, Sp.A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('008', 'dr. HENDRA AGUS SETIAWAN, Sp.P.,M.Kes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('009', 'dr. NORMAWATI, Sp.P', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('010', 'dr. RANATA AGRIANTO, Sp.An', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('011', 'dr. DATU ABDUL RAHMAN HAKIM, Sp.AN', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('012', 'dr. I MADE DWI JAYANTARA, Sp.S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('013', 'dr. WINNY MARTALINA SIMANJUNTAK, Sp.S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('014', 'dr. FARIZA HAKIM RIO BRANKO, Sp.B	', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('015', 'dr. DYAH PARAMITA, Sp.B', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('016', 'dr. SRI SOFHIA WAHYUNI, Sp.THT-KL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('017', 'dr. DEVIA ARNITA, Sp.THT-KL	', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('018', 'dr. YURNIAH TANZIL, Sp.PK.,M.Kes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('019', 'dr. DIANA HARYATI KUSUMASTUTI, Sp.M', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('020', 'drg. NINA ARYUNANI	', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('021', 'drg. ARI DWI LAKSANA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('022', 'dr. MAMI LOSA RAMA SUSILAWATI, Sp.K.F.R', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('023', 'dr. SURYANTO LAUW, Sp.Rad', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('024', 'dr. CONI SENOPADANG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('025', 'dr. AKHMAD NOVAL DENNY IRAWAN', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('026', 'dr. KARTIKA PURNAMA SARI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('027', 'dr. ALVINA ROSANA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('028', 'dr. DEVI RAHMA YULIANTI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('029', 'dr. LINA RAHMIATI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('030', 'dr. GRIFAN RABILAH', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_jadwalpoli`
--

CREATE TABLE IF NOT EXISTS `t_jadwalpoli` (
  `id_jadwal` int(11) NOT NULL,
  `klinik` varchar(5) NOT NULL,
  `dokter` varchar(20) NOT NULL,
  `hari` text NOT NULL,
  `jam` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_kategori`
--

CREATE TABLE IF NOT EXISTS `t_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(200) DEFAULT NULL,
  `isi_kategori` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_kegiatan`
--

CREATE TABLE IF NOT EXISTS `t_kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `nama_kegiatan` varchar(200) DEFAULT NULL,
  `tgl_mulai` date DEFAULT NULL,
  `tgl_selesai` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_klinik`
--

CREATE TABLE IF NOT EXISTS `t_klinik` (
  `id_klinik` varchar(5) NOT NULL,
  `nama_klinik` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_layanan`
--

CREATE TABLE IF NOT EXISTS `t_layanan` (
  `kd_layanan` varchar(20) NOT NULL,
  `nama_layanan` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_spesialis`
--

CREATE TABLE IF NOT EXISTS `t_spesialis` (
  `kd_spesialis` varchar(3) NOT NULL,
  `nama_spesialis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE IF NOT EXISTS `t_user` (
  `id_user` bigint(20) NOT NULL,
  `username` varchar(200) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `level` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_berita`
--
ALTER TABLE `t_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `t_dokter`
--
ALTER TABLE `t_dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `t_jadwalpoli`
--
ALTER TABLE `t_jadwalpoli`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `t_kategori`
--
ALTER TABLE `t_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `t_kegiatan`
--
ALTER TABLE `t_kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `t_klinik`
--
ALTER TABLE `t_klinik`
  ADD PRIMARY KEY (`id_klinik`);

--
-- Indexes for table `t_layanan`
--
ALTER TABLE `t_layanan`
  ADD PRIMARY KEY (`kd_layanan`);

--
-- Indexes for table `t_spesialis`
--
ALTER TABLE `t_spesialis`
  ADD PRIMARY KEY (`kd_spesialis`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_berita`
--
ALTER TABLE `t_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_kategori`
--
ALTER TABLE `t_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_kegiatan`
--
ALTER TABLE `t_kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_user`
--
ALTER TABLE `t_user`
  MODIFY `id_user` bigint(20) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
