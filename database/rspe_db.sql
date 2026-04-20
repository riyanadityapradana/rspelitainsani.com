-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Mar 2026 pada 13.01
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rspe_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_berita`
--

CREATE TABLE `t_berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(200) DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `gambar` text DEFAULT NULL,
  `tgl_berita` date DEFAULT NULL,
  `kategori` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `t_berita`
--

INSERT INTO `t_berita` (`id_berita`, `judul`, `isi`, `gambar`, `tgl_berita`, `kategori`, `status`) VALUES
(4, 'berita hanyar', '<p>hanyar banar hanyar banarhanyar banarhanyar banarhanyar banarhanyar banarhanyar banarhanyar banarhanyar banarhanyar banarhanyar banarhanyar banarhanyar banarhanyar banarhanyar banar</p>\r\n', '4.jpg', '2019-10-31', 1, 1),
(7, 'berita baru', '<p>berita baru</p>\r\n', '7.jpg', '2019-11-25', 1, 1),
(8, 'stok obat menipis', '<p>kebutuhan akan obat makin hari makin sangat dibutuhkan.</p>\r\n\r\n<p>tolong dapat ditindaklanjuti segera.</p>\r\n\r\n<p>terima kasih</p>\r\n', '8.jpg', '2019-11-25', 1, 1),
(9, 'kemajuan desa makmur', '<p>desa makmur merupakan sebuah desa yang berada di kabupaten banjar. banyak ditinggali warga, dan sumber daya alam yang sangat melimpah pada desa tersebut</p>\r\n', '9.jpg', '2019-11-25', 1, 1),
(10, 'pengumuman libur', '<p>pengumuman libur bekerja hari senin sampai selasa</p>\r\n', '10.jpg', '2019-11-25', 2, 1),
(11, 'pengumuman esok selasa', '<p>esok selasa banyak yang dikerjakan</p>\r\n', '11.jpg', '2019-11-25', 2, 1),
(12, 'Menanam Jambu', '<p>Menanam Jambu dengan hidroponik</p>\r\n', '12.jpg', '2019-11-25', 3, 1),
(13, 'Bank Kalsel Berikan Ambulans ke RSPI Martapura', '<p>BANJARBARU - Bank Kalsel Cabang Banjarbaru memberikan apresiasi kepada Rumah Sakit Pelita Insani (RSPI) Martapura berupa penyerahan mobil ambulans untuk operasional rumah sakit tersebut. Penyerahan dilaksanakan di halaman RSPI Martapura, Senin (22/10)pukul 09.00 Wita. Acara ini diikuti Owner RSPI Martapura H Hulaifi, Direktur RSPI dr H Gabril Taufiq Basri SpPD Finasim beserta jajaran managemen RSPI, jajaran Bank Kalsel seperti &nbsp;Hambali Kepala Cabang Bank Kalsel Banjarbaru, Izhar Kepala Kelompok Sekretaris Perusahaan Bank Kalsel, Ahmad &nbsp;Fatria Putra &nbsp;Kepala Divisi Unit Usaha Syariah Bank Kalsel serta jajarannya.<br />\r\nDalam sambutannya Direktur RSPI dr H Gabril menyatakan terima kasih kepada Bank Kalsel yang memberikan apresiasi berupa mobil ambulans yang tentunya akan sangat membantu operasional rumah sakit sehingga dengan demikian akan dapat meningkatkan bentuk pelayanan kepada masyarakat yang membutuhkan pelayanan kesehatan.</p>\r\n', '13.jpg', '2019-12-24', 3, 1),
(14, 'Bank Kalsel Berikan Ambulans ke RSPI Martapura', '<p>BANJARBARU - Bank Kalsel Cabang Banjarbaru memberikan apresiasi kepada Rumah Sakit Pelita Insani (RSPI) Martapura berupa penyerahan mobil ambulans untuk operasional rumah sakit tersebut. Penyerahan dilaksanakan di halaman RSPI Martapura, Senin (22/10)pukul 09.00 Wita. Acara ini diikuti Owner RSPI Martapura H Hulaifi, Direktur RSPI dr H Gabril Taufiq Basri SpPD Finasim beserta jajaran managemen RSPI, jajaran Bank Kalsel seperti &nbsp;Hambali Kepala Cabang Bank Kalsel Banjarbaru, Izhar Kepala Kelompok Sekretaris Perusahaan Bank Kalsel, Ahmad &nbsp;Fatria Putra &nbsp;Kepala Divisi Unit Usaha Syariah Bank Kalsel serta jajarannya.<br />\r\nDalam sambutannya Direktur RSPI dr H Gabril menyatakan terima kasih kepada Bank Kalsel yang memberikan apresiasi berupa mobil ambulans yang tentunya akan sangat membantu operasional rumah sakit sehingga dengan demikian akan dapat meningkatkan bentuk pelayanan kepada masyarakat yang membutuhkan pelayanan kesehatan.</p>\r\n', '14.jpg', '2019-12-24', 3, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_dirgaleri`
--

CREATE TABLE `t_dirgaleri` (
  `id_direktori` varchar(3) NOT NULL,
  `nama_direktori` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `t_dirgaleri`
--

INSERT INTO `t_dirgaleri` (`id_direktori`, `nama_direktori`) VALUES
('001', 'Grand Opening'),
('002', 'Haul Guru Sekumpul 14'),
('003', 'Bakti Sosial'),
('004', 'Launching Website RSPI'),
('005', 'Mahasiswa/i PKL Stikes Husada Borneo'),
('006', 'Jogging dan Senam Crew RSPI'),
('007', 'Penanggulangan Covid-19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_dokter`
--

CREATE TABLE `t_dokter` (
  `id_dokter` varchar(20) NOT NULL,
  `nama_dokter` text DEFAULT NULL,
  `foto` varchar(200) DEFAULT NULL,
  `tempat_lahir` varchar(20) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jk` varchar(1) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `no_izin` varchar(20) DEFAULT NULL,
  `id_spesialis` varchar(10) DEFAULT NULL,
  `status_praktik` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `t_dokter`
--

INSERT INTO `t_dokter` (`id_dokter`, `nama_dokter`, `foto`, `tempat_lahir`, `tgl_lahir`, `jk`, `keterangan`, `no_izin`, `id_spesialis`, `status_praktik`) VALUES
('001', 'dr. H. GABRIL TAUFIQ BASRI, Sp.PD.,FINASIM', 'FT DR (5).png', '', '0000-00-00', '', '', '', '37', ''),
('003', 'dr. HARI SUPARJO. Sp.OG. M.Kes. S.H.', 'dr. HARI SUPARJO. Sp.OG. M.Kes. S.H..png', '', '0000-00-00', 'l', '', '', '29', ''),
('004', 'dr. FATHURRAHMAN, Sp.OG.,M.Kes', 'FT DR (7).png', '', '0000-00-00', '', '', '', '29', ''),
('006', 'dr. SYIHAB FAYUMI, Sp.A', 'FT DR (9).png', '', '0000-00-00', '', '', '', '1', ''),
('008', 'dr. HENDRA AGUS SETIAWAN, Sp.P.,M.Kes', 'FT DR (11).png', '', '0000-00-00', 'l', '', '', '34', 'Aktif'),
('009', 'dr. NORMAWATI, Sp.P', 'FT DR (12).png', '', '0000-00-00', '', '', '', '34', ''),
('012', 'Dr. dr. I Made Dwi Jayanegara, Sp.N, F.MIN, MH.', 'IMG_2540.PNG', '', '0000-00-00', 'l', '', '', '44', 'Aktif'),
('013', 'dr. WINNY MARTALINA SIMANJUNTAK, Sp.S', 'FT DR (42).png', '', '0000-00-00', 'p', '', '', '44', 'Aktif'),
('015', 'dr. DYAH PARAMITA, Sp.B', 'FT DR (17).png', '', '0000-00-00', 'p', '', '', '5', 'Aktif'),
('016', 'dr. SRI SOFHIA WAHYUNI, Sp.THT-KL', 'FT DR (18).png', '', '0000-00-00', 'p', '', '', '45', 'Aktif'),
('018', 'dr. YURNIAH TANZIL, Sp.PK.,M.Kes', 'FT DR (19).png', '', '0000-00-00', 'p', '', '', '39', 'Aktif'),
('019', 'dr. DIANA HARYATI KUSUMASTUTI, Sp.M', 'FT DR (44).png', '', '0000-00-00', 'p', '', '', '27', 'Aktif'),
('020', 'drg. NINA ARYUNANI	', 'FT DR (22).png', '', '0000-00-00', 'p', '', '', '11', 'Aktif'),
('021', 'drg. ARI DWI LAKSANA', 'FT DR (23).png', '', '0000-00-00', 'l', '', '', '11', 'Aktif'),
('022', 'dr. MAMI LOSA RAMA SUSILAWATI, Sp.K.F.R', 'FT DR (24).png', '', '0000-00-00', 'p', '', '', '18', 'Aktif'),
('023', 'dr. SURYANTO LAUW, Sp.Rad', 'FT DR (25).png', '', '0000-00-00', 'l', '', '', '42', 'Aktif'),
('032', 'dr.FAIZAL RAHMAN, Sp.JP,FIHA,FAPSC', 'FT DR (26).png', '', '0000-00-00', 'l', '', '', '17', 'AKTIF'),
('033', 'dr. MUHAMMAD HAFIDZ MAULANA SETIAWAN, Sp.An-Ti', 'dr Hafiz.png', '', '0000-00-00', 'l', '', '', '3', 'Aktif'),
('036', 'dr. SYAFITRI YULIANI, Sp. PD.,FINASIM', 'dr Syafitri.png', '', '0000-00-00', 'p', '', '', '37', 'Aktif'),
('038', 'dr. WINDA OKTARI A., Sp. KJ', 'FT DR (29).png', '', '0000-00-00', 'p', '', '', '21', 'Aktif'),
('044', 'dr. IAN OSCAR PRIMA, M.Biomed.,Sp. B', 'FT DR (31).png', '', '0000-00-00', 'l', '', '', '5', 'Aktif'),
('049', 'drg. RAHARSHANTI INGGAR HAYUNING HAPSARI, Sp.KG', 'FT DR (32).png', '', '0000-00-00', 'p', '', '', '19', 'Aktif'),
('050', 'drg. GABILA AULIANA', 'FT DR (43).png', '', '0000-00-00', 'p', '', '', '11', 'Aktif'),
('051', 'dr. ALVINA ROSANA', 'FT DR (34).png', '', '0000-00-00', 'p', '', '', '', 'Aktif'),
('054', 'dr. ANIS RESTUWATY', 'FT DR anis.png', '', '0000-00-00', 'p', '', '', '', 'Aktif'),
('056', 'dr. HELNA AMALIA', 'FT DR (36).png', '', '0000-00-00', 'p', '', '', '', 'Aktif'),
('057', 'dr. AHMAD RIFQI RIZAL', 'FT DR (38).png', '', '0000-00-00', 'l', '', '', '', 'Aktif'),
('059', 'dr. Hj. NOORHASANAH', 'FT DR (4).png', '', '0000-00-00', 'p', '', '', '', 'Aktif'),
('060', 'dr. KARTIKA PURNAMA SARI', 'FT DR (33).png', '', '0000-00-00', 'p', '', '', '', 'Aktif'),
('061', 'dr. SULISTYO RINNY, Sp.M', 'FT DR (45).png', '', '0000-00-00', 'p', '', '', '27', 'Aktif'),
('062', 'dr. RAHMATULLOH PUJO WIDODO', 'FT DR (1).png', '', '1996-10-10', 'l', '', '', '', 'Aktif'),
('063', 'dr. H. MUHAMMAD ADIJAYANSYAH, Sp. OT', 'dr Adi.png', '', '0000-00-00', 'l', '', '', '33', 'AKTIF'),
('064', 'dr. JIMMI DIWINDANG PUTRA, Sp.PD', 'FT DR.png', '', '0000-00-00', 'l', '', '', '37', 'Aktif'),
('065', 'dr. CHOIRUL ANAM, Sp. A (K), M. Biomed', 'dokter Sub Spesialis Anak.png', '-', '0000-00-00', 'l', '-', '-', '47', 'Aktif'),
('066', 'dr. DWI SEPTWO RUSTAMINTA TARIGAN, Sp.An-Ti', 'Dokter Spesialis Anestesi dr Tarigan.png', '-', '0000-00-00', 'l', '-', '-', '3', 'Aktif'),
('067', 'drg. HANRI, Sp.BMM', 'Dokter Gigi Spesialis Bedah Mulut & Maksiofasial.png', '-', '0000-00-00', 'l', '-', '-', '7', 'Aktif'),
('068', 'dr. RAHMAD RAMADHANI, Sp.A', 'dokter spesialis anak baru.png', '-', '0000-00-00', 'l', '-', '-', '1', 'Aktif'),
('070', 'dr. SHANIA INDAH CHINEKO', 'Shania Indah Chineko.png', '-', '0000-00-00', 'p', '-', '-', '', 'Aktif'),
('071', 'dr. RITA ERVINA, Sp.PA', 'dokter rita.png', '-', '0000-00-00', 'p', '-', '-', '35', 'Aktif'),
('072', 'dr.  Edwin Pratama', 'dr. Edwin.png', 'Bogor', '1986-06-24', 'l', '-', 'MR63032509000131', '3', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_fasilitas`
--

CREATE TABLE `t_fasilitas` (
  `id_fasilitas` int(11) NOT NULL,
  `nama` text NOT NULL,
  `menu` varchar(15) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` text NOT NULL,
  `kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `t_fasilitas`
--

INSERT INTO `t_fasilitas` (`id_fasilitas`, `nama`, `menu`, `deskripsi`, `gambar`, `kategori`) VALUES
(1, 'Unit Gawat Darurat', 'UGD', 'Sesuai dengan visi Rumah Sakit Pelita Insani yaitu Rumah Sakit yang memberikan pelayanan kesehatan berkualitas, professional dan ramah, maka UGD Rumah Sakit Pelita Insani menyediakan pelayanan emergency yang dilakukan secara cepat dan akurat oleh tenaga medik dan perawat yang professional yang ahdir selama 24 jam untuk melayani anda.', 'ugd.jpg', 1),
(2, 'Intensive Care Unit', 'ICU', 'ICU (Intensive Care Unit) Rumah Sakit Pelita Insani dikhususkan untuk pasien dengan kondisi yang mengancam jiwa. Pasien yang mengalami kondisi kritis atau mengancam jiwa akan dipantau secara intensif dengan peralatan khusus dan modern oleh tenaga medis yang sudah terampil dan terlatih.', 'icu.jpg', 1),
(3, 'Neonatal Intensive Care Unit', 'NICU', 'NICU (Neonatal Intensive Care Unit) Rumah Sakit Pelita Insani adalah unit perawatan intensif yang disediakan khusus untuk bayi baru lahir dengan kondisi kritis atau memiliki gangguan kesehatan berat. Rentang usia pasien yang dirawat diruang NICU ini adalah bayi baru lahir hingga bayi berusia 28 hari.', 'nicu.jpg', 1),
(4, 'Ruang Operasi', 'Ruang OK', 'Ruang Operasi adalah suatu unit khusus di Rumah Sakit yang mengutamakan aspek hirarki zonasi sterilitas. Ruang OPerasi Rumah Sakit Pelita Insani adalah salah satu fasilitas yang dirancang sesuai dengan standart akreditasi Rumah Sakit yang dilengkapi dengan peralatan canggih dan modern serta tim dokter dan tenaga paramedic yang professional dan kompeten.', 'ok.jpg', 1),
(5, 'Ruang Bersalin', 'Ruang VK', 'Ruang VK atau kamar bersalin adalah sebuah unit layanan di Rumah Sakit pelita Insani yang berfungsi sebagai ruang persalinan selama 24 jam, didukung oleh fasilitas peralatan dan tenaga bidan yang handal.', 'vk.jpg', 1),
(6, 'Hemodialisa', 'Ruang HD', 'Ruang Hemodialisa atau cuci darah Rumah Sakit Pelita Insani dilengkapi dengan alat dengan system terbaru untuk pasien gagal ginjal. Didikung oleh dokter penanggung jawab yang bersertifikat HD, serta perawat yang terampil dan bersertifikat.', 'hd.jpg', 1),
(7, 'Radiologi', 'Radiologi', 'Pemeriksaan Radiologi adalah pemeriksaan dengan menggunakan tekhnologi pencitraan untuk mendiagnosis dan mengobati suatu penyakit. Pemeriksaan radiologi dijalankan untuk mengetahui kondisi bagian dalam tubuh pasien dan menentukan penyebab penyakit yang diderita oleh pasien.', 'rad.jpg', 2),
(8, 'Laboratorium', 'Laboratorium', 'Laboratorium Rumah Sakit Pelita Insani memberikan layanan 24 jam. Jenis-jenis pemeriksaan yang dapat dilakukan Hematologi, Urine, Kimia Darah, Immunologi, Sekret Vagina, Faeses, Sputum, Narkoba dan Koagulasi.', 'lab.jpg', 2),
(9, 'Farmasi', 'Farmasi', 'Pelayanan farmasi di Rumah Sakit Pelita Insani merupakan bagian yang tidak dapat dipisahkan dari sistem pelayanan rumah sakit yang berorientasi kepada pelayanan pasien, penyediaan obat yang bermutu, termasuk pelayanan farmasi yang terjangkau bagi semua lapisan masyarakat.', 'farmasi.jpg', 2),
(10, 'Sanitasi', 'Sanitasi', 'Sanitasi rumah sakit merupakan upaya dan bagian yang tidak terpisahkan dari sistem pelayanan kesehatan rumah sakit dalam memberikan layanan dan asuhan pasien yang sebaik-baiknya, karena tujuan dari sanitasi rumah sakit tersebut adalah menciptakan kondisi lingkungan rumah sakit agar tetap bersih, nyaman dan dapat mencegah terjadinya infeksi silang serta tidak mencemari lingkungan.', 'sanitasi.jpg', 2),
(11, 'Gizi', 'Gizi', 'Pelayanan gizi rumah sakit adalah pelayanan gizi yang disesuaikan dengan keadaan pasien dan berdasarkan keadaan klinis, status gizi dan status metabolisme tubuhnya. Keadaan gizi pasien sangat berpengaruh pada proses penyembuhan penyakit.', 'gizi.jpg', 2),
(12, 'Resepsionis', 'Resepsionis', 'Resepsionis Rumah Sakit Pelita Insani saat ini telah memberikan layanan 24 jam. Resepsionis Rumah Sakit Pelita Insani berpedoman pada visi Rumah Sakit, yaitu memberikan pelayanan kesehatan berkualitas, profesional, dan ramah kepada pasien serta keluarga.', 'resepsionis.jpg', 2),
(13, 'Ruang Berlian', '', '<ul>\r\n	<li>1 buah bed pasien VVIP</li>\r\n	<li>1 buah sofa penunggu</li>\r\n	<li>1 buah bedside table/nakas</li>\r\n	<li>1 unit AC</li>\r\n	<li>1 unit TV</li>\r\n	<li>1 unit kulkas</li>\r\n	<li>1 buah dispenser</li>\r\n	<li>1 buah lemari pakaian</li>\r\n	<li>1 buah meja makan pasien</li>\r\n	<li>1 buah wastafel + cermin</li>\r\n	<li>Paket mandi</li>\r\n</ul>\r\n', 'BerliaN.jpg', 3),
(14, 'Ruang Safir', '', '<ul> 	<li>1 unit bed pasien VIP</li> 	<li>1 buah bed/kursi penunggu</li> 	<li>1 buah bedside table/nakas</li> 	<li>1 unit AC</li> 	<li>1 unit kulkas</li> 	<li>1 unit TV</li> 	<li>1 buah dispenser</li> 	<li>1 buah meja makan pasien</li> 	<li>1 buah wastafel + cermin</li> 	<li>Paket mandi</li> </ul>', 'safir.jpg', 3),
(15, 'Ruang Ruby', '', '<ul> 	<li>1 unit bed pasien Kelas 1</li> 	<li>1 buah bed penunggu</li> 	<li>1 buah bedside table/nakas</li> 	<li>1 unit AC</li> 	<li>1 unit TV</li> 	<li>1 unit kulkas</li> 	<li>1 buah lemari</li> 	<li>1 buah meja makan pasien</li> 	<li>1 buah wastafel + cermin</li> 	<li>Paket mandi</li> </ul>', 'ruby.jpg', 3),
(16, 'Ruang Zamrud', '', '<ul> 	<li>2 unit bed pasien</li> 	<li>2 buah bedside table/nakas</li> 	<li>2 buah meja makan pasien</li> 	<li>1 unit AC</li> 	<li>1 unit TV</li> 	<li>1 buah wastafel + cermin</li> 	<li>1 buah kamar mandi</li> </ul>', 'zamrud.jpg', 3),
(17, 'Ruang Yakut-C', '', '<ul> 	<li>14 unit bed pasien</li> 	<li>14 buah bedside table/nakas</li> 	<li>3 unit AC</li> </ul>', 'yakut-c.jpg', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_galeri`
--

CREATE TABLE `t_galeri` (
  `id_galeri` int(11) NOT NULL,
  `judul` text NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` text NOT NULL,
  `direktori` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `t_galeri`
--

INSERT INTO `t_galeri` (`id_galeri`, `judul`, `deskripsi`, `gambar`, `direktori`) VALUES
(1, 'Bibir Sumbing', '', 'bibir-sumbing.jpg', '003'),
(2, 'Donor Darah', '', 'donor-darah.jpg', '003'),
(3, 'Katarak', '', 'katarak.jpg', '003'),
(4, 'Khitanan Masal', '', 'khitanan-masal.jpg', '003'),
(5, 'Grand Opening', '', 'grand-opening1.jpg', '001'),
(6, 'Grand Opening', '', 'grand-opening2.jpg', '001'),
(7, 'Grand Opening', '', 'grand-opening3.jpg', '001'),
(8, 'Grand Opening', '', 'grand-opening4.jpg', '001'),
(9, 'Grand Opening', '', 'grand-opening5.jpg', '001'),
(10, 'Grand Opening', '', 'grand-opening6.jpg', '001'),
(11, 'Grand Opening', '', 'grand-opening7.jpg', '001'),
(12, 'Grand Opening', '', 'grand-opening8.jpg', '001'),
(13, 'Grand Opening', '', 'grand-opening9.jpg', '001'),
(14, 'Grand Opening', '', 'grand-opening10.jpg', '001'),
(15, 'Grand Opening', '', 'grand-opening11.jpg', '001'),
(16, 'Haul Guru Sekumpul 14', '', 'haul14-1.jpg', '002'),
(17, 'Haul Guru Sekumpul 14', '', 'haul14-2.jpg', '002'),
(18, 'Haul Guru Sekumpul 14', '', 'haul14-3.jpg', '002'),
(19, 'Haul Guru Sekumpul 14', '', 'haul14-4.jpg', '002'),
(20, 'Haul Guru Sekumpul 14', '', 'haul14-6.jpg', '002'),
(21, 'Haul Guru Sekumpul 14', '', 'haul14-7.jpg', '002'),
(22, 'Haul Guru Sekumpul 14', '', 'haul14-5.jpg', '002'),
(23, 'Launching Website RSPI', 'Semangat Teamwork RSPI menyongsong era 4.0', 'WhatsApp Image 2020-01-15 at 10.01.36(1).jpeg', '004'),
(24, 'Foto Bersama Owner, Direktur, Beserta Team RSPI', '', 'WhatsApp Image 2020-01-15 at 10.01.35.jpeg', '004'),
(26, 'Mahasiswa/i PKL Stikes Husada Borneo di RS Pelita Insani', '', '5BF2216A-43D5-477D-A809-EE575F3004FD.jpeg', '005'),
(27, 'Mahasiswa/i STIKES HUSADA BORNEO di RS Pelita insani', '', 'E7348F72-B6AD-41C2-8373-E4BA5AAD4165.jpeg', '005'),
(28, 'Mahasiswa/i STIKES HUSADA BORNEO di RS Pelita insani', '', '4CCA4950-0E5B-417D-BA40-EA33296ACD17.jpeg', '005'),
(29, 'Mahasiswa/i STIKES HUSADA BORNEO di RS Pelita insani', '', 'D524CA04-2C04-4A36-A891-4F858A10FBAF.jpeg', '005'),
(30, 'Launching Website RSPI', '', 'E1CDF7D0-8436-4ADA-A664-D86B590BB62E.jpeg', '004'),
(31, 'Launching Website RSPI', '', 'DB4D76AF-45AE-4583-8D78-1F6B127DD461.jpeg', '004'),
(32, 'Jogging dan Senam Pagi', '', '3463FD0E-6FBD-4811-A497-8B50C1702151.jpeg', '006'),
(33, 'Jogging dan Senam Pagi', '', '90BC1C18-3392-4906-8F07-4F04776CE9CD.jpeg', '006'),
(34, 'Jogging dan Senam Pagi', '', '95FF1F7B-D79A-4518-AE88-620962D064EA.jpeg', '006'),
(35, 'Jogging dan Senam Pagi', '', '7BBCF9BE-E17C-47C3-9339-E09D94BC5841.jpeg', '006'),
(36, 'Jogging dan Senam Pagi', '', '1199AF28-A834-499F-8131-3EB51B38F41C.jpeg', '006'),
(37, 'Jogging dan Senam Pagi', '', 'A16AF617-CCD0-43A1-BB24-6F2571589BE9.jpeg', '006'),
(38, 'Jogging dan Senam Pagi', '', '10B0566D-EAA1-4376-A5CD-5C5367E75AB1.jpeg', '006'),
(39, 'Jogging dan Senam Pagi', '', 'A92FDD1B-D266-4784-BBFF-BB6A2F9B0BA3.jpeg', '006'),
(40, 'I Stay At Work For You and You Stay At Home For Us ', '', 'WhatsApp Image 2020-03-23 at 12.30.15(1).jpeg', '007'),
(41, 'I Stay At Work For You and You Stay At Home For Us', '', 'WhatsApp Image 2020-03-23 at 12.30.15(2).jpeg', '007'),
(42, 'I Stay At Work For You and You Stay At Home For Us', '', 'WhatsApp Image 2020-03-23 at 12.30.15(3).jpeg', '007'),
(43, 'I Stay At Work For You and You Stay At Home For Us', '', 'WhatsApp Image 2020-03-23 at 12.30.15(4).jpeg', '007'),
(44, 'I Stay At Work For You and You Stay At Home For Us', '', 'WhatsApp Image 2020-03-23 at 12.30.15(5).jpeg', '007'),
(45, 'I Stay At Work For You and You Stay At Home For Us', '', 'WhatsApp Image 2020-03-23 at 12.30.15(5).jpeg', '007'),
(46, 'I Stay At Work For You and You Stay At Home For Us', '', 'WhatsApp Image 2020-03-23 at 12.30.15(6).jpeg', '007'),
(47, 'I Stay At Work For You and You Stay At Home For Us', '', 'WhatsApp Image 2020-03-23 at 12.30.15(8).jpeg', '007'),
(48, 'I Stay At Work For You and You Stay At Home For Us', '', 'WhatsApp Image 2020-03-20 at 10.02.01.jpeg', '007'),
(49, 'I Stay At Work For You and You Stay At Home For Us', '', 'WhatsApp Image 2020-03-20 at 10.01.29.jpeg', '007'),
(50, 'I Stay At Work For You and You Stay At Home For Us', '', 'WhatsApp Image 2020-03-20 at 10.01.01.jpeg', '007');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_jadwalpoli`
--

CREATE TABLE `t_jadwalpoli` (
  `id_jadwal` int(11) NOT NULL,
  `klinik` int(2) NOT NULL,
  `dokter` varchar(20) NOT NULL,
  `hari` text NOT NULL,
  `jam` text NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `t_jadwalpoli`
--

INSERT INTO `t_jadwalpoli` (`id_jadwal`, `klinik`, `dokter`, `hari`, `jam`, `keterangan`) VALUES
(102, 18, '071', 'Senin, Kamis, Jum\'at', '15.00 - 17.00 WITA', 'Pasien Umum'),
(103, 1, '019', 'Senin - Jum\'at', '15.00 WITA - Selesai', 'Pasien BPJS, Umum, Asuransi dan Pihak ke-3'),
(105, 1, '061', 'Rabu, Kamis', '09.00 - 11.00 WITA', 'Pasien BPJS, Umum, Asuransi dan Pihak ke-3'),
(106, 2, '015', 'Senin, Selasa, Rabu, dan Jum\'at', '17:00-Selesai', 'Pasien BPJS, Umum, Asuransi dan Pihak ke-3'),
(107, 2, '044', 'Selasa, Kamis, Sabtu', '12:00 - 14:00 WITA', 'Pasien BPJS, Umum, Asuransi dan Pihak ke-3'),
(110, 3, '003', 'Rabu, Kamis, Sabtu', '11.00 - 12.00 WITA', 'Pasien BPJS'),
(111, 3, '003', 'Selasa & Kamis', '20.00 - 21.00 WITA', 'Pasien BPJS'),
(112, 3, '003', 'Senin s/d Sabtu', '09.00 - 11.00 WITA', 'Pasien Umum'),
(113, 3, '003', 'Senin s/d Sabtu', '17.00 - 21.00 WITA', 'Pasien Umum'),
(114, 3, '004', 'Senin, Selasa', '11.00 - 13.00 WITA', 'Pasien BPJS'),
(115, 3, '004', 'Jum\'at', '17.00 - 21.00 WITA', 'Pasien Umum'),
(116, 4, '001', 'Senin, Rabu, Jum\'at', '14:00 - 15:30 WITA', 'Pasien BPJS, Umum, Asuransi dan Pihak ke-3'),
(117, 4, '001', 'Rabu, Kamis, Sabtu', '09:30 - 10:30 WITA', 'Pasien BPJS, Umum, Asuransi dan Pihak ke-3'),
(119, 4, '036', 'Senin, Selasa', '10:00 - 12:00 WITA', 'Pasien BPJS, Umum, Asuransi dan Pihak ke-3'),
(120, 4, '036', 'Selasa, Kamis', '14:00 WITA - 16:00 WITA', 'Pasien BPJS, Umum, Asuransi dan Pihak ke-3'),
(121, 4, '036', 'Sabtu', '10:30-13:00 WITA', 'Pasien BPJS, Umum, Asuransi dan Pihak ke-3'),
(122, 5, '020', 'Senin s/d Kamis', '15:00 - 16:00 WITA', 'Pasien BPJS, Umum, Asuransi dan Pihak ke-3'),
(123, 5, '021', 'Senin s/d Kamis', '16:00 - 20:00 WITA', 'Pasien BPJS, Umum, Asuransi dan Pihak ke-3'),
(124, 5, '021', 'Jum\'at', '13:30 - 15:00', 'Pasien BPJS, Umum, Asuransi dan Pihak ke-3'),
(125, 5, '021', 'Sabtu', '11:00 - 13:00 WITA', 'Pasien BPJS, Umum, Asuransi dan Pihak ke-3'),
(126, 5, '050', 'Senin s/d Kamis', '08:00 - 13:00 WITA', 'Pasien BPJS, Umum, Asuransi dan Pihak ke-3'),
(127, 17, '049', 'Senin, Rabu, dan Sabtu', '14:00 - 18:00 WITA', 'Pasien BPJS'),
(128, 17, '049', 'Selasa, Kamis, dan Jum\'at', '14:00 - 18:00 WITA', 'Pasien Umum'),
(129, 6, '008', 'Senin, Rabu, Jum\'at', '15.00 - 17.00 WITA', 'Pasien BPJS, Umum, Asuransi dan Pihak ke-3'),
(130, 6, '009', 'Selasa, Kamis', '16.00 - 18.00 WITA', 'Pasien BPJS, Umum, Asuransi dan Pihak ke-3'),
(131, 7, '012', 'Senin s/d Sabtu', '15:00 - 17:00 WITA', 'Pasien BPJS, Umum, Asuransi dan Pihak ke-3'),
(132, 7, '013', 'Kamis, Jum\'at', '15:00-17:00 WITA', 'Pasien BPJS, Umum, Asuransi dan Pihak ke-3'),
(133, 8, '016', 'Senin s/d Sabtu', '16:30 -18:00 WITA', 'Pasien BPJS, Umum, Asuransi dan Pihak ke-3'),
(134, 9, '065', 'Senin-Jum\'at', '15:30 - 17:30 WITA', 'Pasien BPJS, Umum, Asuransi dan Pihak ke-3'),
(135, 9, '068', 'Senin, Rabu, Jum\'at', '19:30 - 21:00  WITA', 'Pasien BPJS, Umum, Asuransi dan Pihak ke-3'),
(136, 9, '006', 'Selasa & Kamis', '12:00 WITA - Selesai', 'Pasien BPJS, Umum, Asuransi dan Pihak ke-3'),
(137, 10, '022', 'Selasa, Jum\'at (Konsultasi Dokter)', '14:00 WITA - Selesai', 'Pasien BPJS, Umum, Asuransi dan Pihak ke-3'),
(138, 10, '022', 'Senin-Jum\'at (Fisioterapi/Terapi Lanjutan)', '10:00 - 17:00 WITA', 'Pasien BPJS, Umum, Asuransi dan Pihak ke-3'),
(139, 10, '022', 'Sabtu (Fisioterapi/Terapi Lanjutan)', '09:00 - 16:00 WITA', 'Pasien BPJS, Umum, Asuransi dan Pihak ke-3'),
(140, 11, '032', '-', '(Tutup Sementara)', 'Pasien BPJS, Umum, Asuransi dan Pihak ke-3'),
(142, 14, '038', 'Senin, Rabu, Jum\'at', '16.00 - 18.00 WITA', 'Pasien BPJS, Umum, Asuransi dan Pihak ke-3'),
(143, 16, '067', 'Selasa, Kamis', '17.00 - 20.00 WITA', 'Pasien BPJS, Umum, Asuransi dan Pihak ke-3'),
(145, 16, '067', 'Sabtu', '09.00 - 12.00 WITA', 'Pasien BPJS, Umum, Asuransi dan Pihak ke-3'),
(146, 15, '063', 'Senin s/d Jum\'at', '19:00 - 20:30 WITA', 'Pasien BPJS, Umum, Asuransi dan Pihak ke-3'),
(147, 4, '064', 'Senin, Rabu, Jum\'at', '19:00 WITA - Selesai', 'Pasien BPJS, Umum, Asuransi dan Pihak ke-3'),
(149, 3, '003', 'Jumat (Sore)', 'Libur Praktek', 'Libur Praktek'),
(150, 1, '061', 'Sabtu', '16.00 - 18.00 WITA', 'Pasien BPJS, Umum, Asuransi dan Pihak ke-3'),
(151, 7, '013', 'Selasa', '14.00 - 16.00 WITA', 'Pasien BPJS, Umum, Asuransi dan Pihak ke-3'),
(152, 7, '013', 'Sabtu', '15:30 - 18:00 WITA', 'Pasien BPJS, Umum, Asuransi dan Pihak ke-3'),
(153, 17, '049', 'Kamis', '13:00-15:00 WITA', 'Pasien BPJS'),
(154, 2, '044', 'Kamis', '19:00-21:00 WITA', 'Pasien BPJS, Umum, Asuransi dan Pihak ke-3'),
(155, 3, '004', 'Jum\'at', '10.00 - 12.00 WITA', 'Pasien BPJS'),
(156, 5, '067', 'Jum\'at', '16.00 - 18.00 WITA', 'Pasien Umum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_kategori`
--

CREATE TABLE `t_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(200) DEFAULT NULL,
  `isi_kategori` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `t_kategori`
--

INSERT INTO `t_kategori` (`id_kategori`, `nama_kategori`, `isi_kategori`) VALUES
(1, 'Berita', 'Berita'),
(2, 'Pengumuman', 'Pengumuman'),
(3, 'Artikel', 'Artikel');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_kegiatan`
--

CREATE TABLE `t_kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `nama_kegiatan` varchar(200) DEFAULT NULL,
  `tgl_mulai` date DEFAULT NULL,
  `tgl_selesai` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_kelfasilitas`
--

CREATE TABLE `t_kelfasilitas` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `t_kelfasilitas`
--

INSERT INTO `t_kelfasilitas` (`id`, `nama`) VALUES
(1, 'Fasilitas Ruang Khusus'),
(2, 'Fasilitas Ruang Penunjang'),
(3, 'Ruang Inap');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_klinik`
--

CREATE TABLE `t_klinik` (
  `id_klinik` int(2) NOT NULL,
  `nama_klinik` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `t_klinik`
--

INSERT INTO `t_klinik` (`id_klinik`, `nama_klinik`) VALUES
(1, 'Poli Mata'),
(2, 'Poli Bedah'),
(3, 'Poli Kandungan'),
(4, 'Poli Penyakit Dalam'),
(5, 'Poli Gigi dan Mulut'),
(6, 'Poli Spesialis Paru'),
(7, 'Poli Syaraf'),
(8, 'Poli THT'),
(9, 'Poli Anak\r\n'),
(10, 'Poli Rehabilitasi Medik'),
(11, 'Poliklinik Jantung dan Pembuluh Darah'),
(14, 'Poli Kesehatan JIwa (Psikiatri)'),
(15, 'Poli Ortopedi dan Traumatologi'),
(16, 'Poli Gigi Spesialis Bedah Mulut'),
(17, 'Poli Gigi & Mulut Spesialis Konservasi Gigi'),
(18, 'Poli Patologi Anatomi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_konten`
--

CREATE TABLE `t_konten` (
  `id_konten` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `isi` text NOT NULL,
  `gambar` text NOT NULL,
  `tgl_entry` date NOT NULL,
  `kategori` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `t_konten`
--

INSERT INTO `t_konten` (`id_konten`, `judul`, `isi`, `gambar`, `tgl_entry`, `kategori`, `status`) VALUES
(1, 'Bank Kalsel Berikan Ambulans ke RSPI Martapura', '<p><strong>BANJARBARU</strong> - Bank Kalsel Cabang Banjarbaru memberikan apresiasi kepada Rumah Sakit Pelita Insani (RSPI) Martapura berupa penyerahan mobil ambulans untuk operasional rumah sakit tersebut. Penyerahan dilaksanakan di halaman RSPI Martapura, Senin (22/10)pukul 09.00 Wita. Acara ini diikuti Owner RSPI Martapura H Hulaifi, Direktur RSPI dr H Gabril Taufiq Basri SpPD Finasim beserta jajaran managemen RSPI, jajaran Bank Kalsel seperti &nbsp;Hambali Kepala Cabang Bank Kalsel Banjarbaru, Izhar Kepala Kelompok Sekretaris Perusahaan Bank Kalsel, Ahmad &nbsp;Fatria Putra &nbsp;Kepala Divisi Unit Usaha Syariah Bank Kalsel serta jajarannya.<br />\r\nDalam sambutannya Direktur RSPI dr H Gabril menyatakan terima kasih kepada Bank Kalsel yang memberikan apresiasi berupa mobil ambulans yang tentunya akan sangat membantu operasional rumah sakit sehingga dengan demikian akan dapat meningkatkan bentuk pelayanan kepada masyarakat yang membutuhkan pelayanan kesehatan.</p>\r\n', '3-1.jpeg', '2019-12-24', 3, 1),
(3, 'RSPI Martapura Patut Diacungi Jempol', '<p><strong>MARTAPURA </strong>&ndash; Kepedulian Rumah Sakit Pelita Insani (RSPI) Martapura terhadap pasien katarak patut diacungi jempol. Betapa tidak, rumah sakit yang berlokasi di Jl Sekumpul Martapura ini melayani operasi gratis untuk pasien katarak.&nbsp;<br />\r\nSeperti Selasa (14/8) kemarin dengan bekerjasama dengan Pemerintah Kabupaten Banjar, ada 10 pasien katarak yang dioperasi. Kegiatan bakti sosial ini dalam rangka Hari Jadi Kabupaten Banjar ke-68 serta HUT RS Pelita Insani yang ke-5 tahun.&nbsp;<br />\r\nBupati Banjar KH Khalilurrahman mengaku berterima kasih karena sudah berbakti kepada warga Kabupaten Banjar. Menurutnya, kontribusi RS Pelita Insani Martapura terhadap masyarakat Kabupaten Banjar sudah cukup bagus.&nbsp;<br />\r\n&ldquo;Di Kabupaten Banjar penderita katarak cukup banyak. Yang bisa kita operasi, kita lakukan. Tentunya, saya sangat berterima kasih kepada petugas kesehatan dan juga RS Pelita Insani,&rdquo; pungkasnya didampingi Sekretaris Daerah Banjar Ir Nasrunsyah, Kepala Dinas Komunikasi, Informatika, Statistik dan Persandian Dr Ir HM Farid Soufian dan Kepala Dinas Kesehatan Ikhwansyah.&nbsp;<br />\r\nTerpisah, Direktur RS Pelita Insani dr Gabril Taufik Basri mengatakan, selain melaksanakan operasi katarak, RSPI Martapura juga kerap menggelar kegiatan bakti sosial lainnya seperti operasi bibir sumbing, sunatan masal ,donor darah dan acara gembira bersama berupa fun bike ataupun jalan santai berhadia.<br />\r\nSejak tahun 2013 hingga tahun 2018 ini, total ada 85 pasien katarak yang dilakukan operasi di RS Pelita Insani. Kemudian operasi bibir sumbing ada 108 pasien. Sementara khitanan sebanyak 219 pasien.&nbsp;<br />\r\n&ldquo;Operasi katarak kali ini kami bekerjasama dengan Pemkab Banjar dalam rangka hari jadi dan HUT RS Pelita Insani ke-5,&rdquo; ujarnya seraya mengatakan akan terus meningkatkan pelayanan kesehatan di rumah sakit.&nbsp;<br />\r\nTak dapat dipungkiri, jumlah bed yang tersedia di Martapura saat ini masih dirasa kurang. Karena itulah, peran RSPI Martapura sangat diharapkan untuk melayani masyarakat terutama bidang kesehatan di Martapura.&nbsp;<br />\r\nSelama empat tahun terakhir ini, RSPI Martapura terus menambah jumlah tempat tidur. Selain melayani masyarakat di Martapura, RSPI juga kerap melayani masyarakat di Banjarbaru bahkan Hulu Sungai. Kendati rumah sakit swasta yang tergolong sangat muda, fasilitasnya tidak kalah dengan sejumlah sakit terkenal di Banjarmasin.&nbsp;<br />\r\ndr Gabril Taufik Basri mengaku bersyukur dengan pencapaian RSPI Martapura hingga berusia empat tahun saat ini. Bangganya lagi, Komisi Akredirasi Rumah Sakit (KARS) menyatakan lulus akreditasi. Sehingga, RSPI Martapura menyabet gelar rumah sakit swasta pertama di Kalselteng yang mendapatkan akreditasi dari KARS.&nbsp;<br />\r\nTentunya ini juga sebuah kebanggaan bagi Pemkab Banjar yang sudah berusia 68 tahun. Pemkab Banjar memiliki rumah sakit swasta yang mampu mengharumkan nama kota berjuluk Serambi Mekkah dan Kota Santri tersebut. &ldquo;Alhamdulillah, kita diakui KARS. Ini sebuah kebanggaan kita bersama,&rdquo; ujar dr Gabril kepada Radar Banjarmasin.&nbsp;<br />\r\nDi sisi lain ungkap dr Gabril, RSPI Martapura juga turut membantu pemerintah daerah di bidang ketenaga kerjaan. Total ada 210 orang tenaga kerja di RSPI Martapura. Sebagian besar adalah warga Pemkab Banjar. &ldquo;Kemampuan warga kita di bidang kesehatan, tidak kalah dengan kabupaten/kota lainnya. Alhamdulillah, selama ini berjalan baik,&rdquo; ujarnya.&nbsp;<br />\r\nSebagai apresiasi RSPI Martapura, tak sedikit tenaga medis dan paramedisyang diikutkan dalam bebagai seminar, simposium ataupun pelatihan lainnys. Hal ini dalam rangka peningkatan pengetahuan dan ketetampilan dalam melaksanakan pelayanan kesehatan di Kabupaten Banjar. Dengan adanya peningkatan keilmuan tenaga medis dan paramedis tsb akan membantu pemerintah daerah dalam memberikan pelayanan kesehatan terbaik untuk masyarakatnya.&nbsp;<br />\r\n&ldquo;Ada beberapa dokter dari Rumah sakit ini yang kemudian melanjutka studi spesial. Semoga setelah selesai nanti, mereka akan mengabdi untuk masyarakat di Kabupaten Banjar,&rdquo; pungkasnya. &nbsp;(adv/mat)<br />\r\n&nbsp;</p>\r\n', '3-3.jpg', '2019-12-26', 3, 1),
(4, 'Posko Kesehatan No 18 Relawan Haul di RS Pelita Insani Sekumpul Martapura', '<p>Seperti tahun tahun sebelumnya RS Pelita Insani Sekumpul, Martapura menyediakan Posko Kesehatan untuk menyambut Haul Abah Guru Sekumpul yg ke 14. Untuk mengantisipasi jamaah yang semakin banyak, pihak RSPI menambah tenaga di posko menjadi 52 orang, yang terdiri dari 15 orang tenaga medis dan paramedis serta 37 orang non medis. Untuk tenaga medis terdiri dari dokter spesialis dan dokter umum, bidan dan perawat yang diketuai oleh dr Diana Kusumastuti.<br />\r\nPosko ini adalah yg ke 18 dari 99 posko yang dibentuk oleh para relawan haul untuk menyambut para jamaah yang berdatangan dari seluruh indonesia.<br />\r\nKhusus posko 18, selain sebagai posko kesehatan yang melayani jamaah haul yang memerlukan bantuan kesehatan (rawat jalan) juga menyediakan posko yang berfungsi sebagai media center untuk para jurnalis yang meliput acara haul.&nbsp;<br />\r\n&nbsp;Yudi selaku koordinator lapangan posko 18 RSPI dan Kemenag Kabupaten Banjar mengucapkan Selamat Datang kepada para jamaah haul abah guru sekumpul. Diharapkan para jamaah berhati hati dalam berkendaraan, menyiapkan kesehatan dan fisik dari rumah, jangan memaksakan diri untuk berdesak desakan. Sehingga para jamaah bisa lancar menjalankan acara haul dan kembali ke rumah dengan selamat.</p>\r\n', '3-4.jpeg', '2019-12-26', 3, 1),
(5, 'Pembukaan Operasional Hemodialisa atau Cuci Darah di RS Pelita Insani Martapura', '<p>RS Pelita Insani Martapura kembali menambah fasilitas kesehatan untuk membantu masyarakat Martapura dan Banjarbaru berupa Pengoperasionalan alat cuci darah untuk pasien gagal ginjal. Pembukaan dilaksanakan secara sederhana pada hari senin, 23 September 2019 di ruangan Hemodialisa lantai 1 RS Pelita Insani. Dipimpin oleh Direktur RSPI dr H Gabril Taufik Basri Sp PD FINASIM, acara diisi dengan sambutan singkat Direktur RSPI yang sangat berharap operasional alat berjalan lancar. Kemudian sambutan dari Owner RSPI ibu Hj Nurjannah yang menginginkan kebaikan dan keberkahan selalu dalam kegiatan RSPI.<br />\r\nSelanjutnya pasien segera dimasukkan ke ruangan, dan disambut oleh para perawat yang khusus dilatih untuk merawat pasien dan operasional alat cuci darah. Dengan beroperasinya alat hemodialisa atau cuci darah di RSPI ini menambah pilihan bagi masyarakat yang ingin cuci darah di wilayah Martapura dan Banjarbaru. Alat cuci darah yang dimiliki RSPI adalah alat dengan sistem terbaru, sehingga lebih canggih dan diharapkan bisa lebih mudah operasionalnya. Lama cuci darah berlangsung 4 sampai 5 jam. RSPI membuka Pelayanan Hemodialisa ini untuk Pasien Umum dan Pasien BPJS sehingga memudahkan atau membantu masyarakat dari segi finansial. Semoga RSPI selalu terus maju dan membantu masyarakat.</p>\r\n', '3-5.jpg', '2019-12-26', 3, 1),
(6, 'Jalan Sehat RSPI Martapura, Seru!', '<p>MARTAPURA &ndash; Jalan Sehat Rumah Sakit Pelita Insani (RSPI) Martapura berlangsung seru dan meriah, Minggu (9/9) pagi kemarin. Bangganya, agenda puncak Hari Ulang Tahun (HUT) RSPI Martapura ke-5 tahun itu dibuka langsung oleh Bupati Banjar KH Khalilurrahman.<br />\r\nAgenda pun dikemas menarik. Selain jalan sehat, juga ada senam sehat dan pemotongan tumpeng yang dilakukan oleh Sekretaris Daerah (Sekda) Banjar Ir Nasrunsyah. Tidak ketinggalan dooprize dengan hadiah utama satu unit sepeda motor.<br />\r\nBupati Banjar KH Khalilurrahman berharap RSPI Martapura semakin meningkat pelayanannya, begitu juga kualitas rumah sakitnya. &ldquo;Semoga RS Pelita Insani dapat menjadi tauladan para rumah sakit lain untuk dapat meningkatkan pelayanannya serta fasilitas untuk masyarakat yang kurang mampu,&rdquo; ujarnya.<br />\r\nDalam sambutannya, ia juga menyerukan seluruh elemen masyarakat dan pemilik rumah sakit atau fasilitas kesehatan yang memiliki kegiatan di Kabupaten Banjar aktif menyukseskan<br />\r\npeningkatan kesehatan di tanah Banjar. Pembangunan bidang kesehatan Kabupaten Banjar yang sejahtera dan barokah.<br />\r\n&ldquo;Pembangunan bidang kesehatan, merupakan salah satu program prioritas Pemerintah Kabupaten Banjar. Karena kesehatan merupakan bagian yang sangat penting dan terkait langsung dengan peningkatan kualitas sumber daya manusia,&rdquo; pesannya.<br />\r\nDitambahkannya, bidang kesehatan salah satu dari tiga program unggulan yang menjadi prioritas yaitu kesehatan, pendidikan, dan infrastruktur. Kesehatan, katanya harus didukung seluruh elemen seperti RSPI yang sangat dirasakan kontribusinya untuk masyarakat Kabupaten Banjar dan daerah sekitarnya. Tiap ulang tahun sebuah rumah sakit, harus ikut menyosialisasikan hidup sehat dan mengonsumsi makan bergizi dan seimbang.<br />\r\n&ldquo;Karena kesehatan merupakan modal utama bagi kita untuk bisa membangun dan mewujudkan Kabupaten Banjar yang Sejahtera dan Barokah,&rdquo; pungkasnya.<br />\r\nTerpisah, Direktur RS Pelita Insani dr Gabril Taufik Basri mengapresiasi seluruh masyarakat yang hadir dalam acara puncak HUT RSPI Martapura yang ke-5 tersebut. &ldquo;Kami mengucapkan terimakasih kepada masyarakat yang telah berpartisipasi dalam acara bakti sosial dan juga kepada media partner Radar Banjarmasin yang telah berkenan bekerja sama dengan pihak RSPI Martapura beberapa tahun belakangan ini,&rdquo; ujarnya.<br />\r\nHadiah utama sendiri didapatkan Sekar Sugianti. Warga Bincau Martapura ini begitu senang karena bisa membawa pulang satu unit sepeda motor dari panitia. &ldquo;Terimakasih banyak, tentu kami sangat senang sekali,&rdquo; ujarnya. (ks-1/ij/mat)</p>\r\n', '3-6.jpg', '2019-12-26', 3, 1),
(7, 'Launching Website Resmi RS Pelita Insani', '<p>Tepat pada tanggal 15 Januari 2020, RS Pelita Insani <em>Launching </em>website resmi www.rspelitainsani.com , yang dengan begitu website tersebut sudah dapat dikunjungi oleh masyarakat guna mendapatkan informasi terkini seputar kegiatan, pengumuman, dan banyak lagi yang lainnya, diharapkan wesite ini dapat berguna bagi masyarakat luas, ucapan terimakasih juga tidak lupa kami sampaikan kepada rekan rekan media Radar Banjarmasin, Banjarmasin Post, dan Duta TV yang juga ikut berkontribusi untuk memperluas informasi perihal peluncuran website www.rspelitainsani.com</p>\r\n', '3-7.jpeg', '2020-01-17', 3, 1),
(8, 'HUT IIDI Ke- 65 dan Silaturrahmi Ketua GOW Banjarbaru ', '<p>Bertempat di Aula RS Pelita Insani HUT IIDI yang Ke-65 diselenggarakan bersamaan dengan Acara Silaturrahmi Ketua GOW Banjarbaru Ibu Wakil Walikota Banjarbaru (Hj. Eny Apriyati Darmawan Jaya). Alhamdulillah Event ini sukses dan berjalan lancar sesuai dengan yang diharapkan.</p>\r\n', '3-8.jpeg', '2020-01-17', 3, 1),
(9, 'Jogging dan Senam pagi crew RS Pelita Insani', '<p>Sabtu pagi ini, Menjadi penting bagi kami untuk tetap menjaga stamina serta kesehatan sebagai petugas-petugas yang memberikan pelayanan kesehatan kepada mereka yang sedang sakit dengan jogging dan senam pagi, dengan begitu juga kami dapat memper-erat teamwork dan kebersamaan antar rekan sejawat.&nbsp;</p>\r\n', '3-9.jpeg', '2020-01-18', 3, 1),
(10, 'Serah Terima Mahasiswa/i Stikes Husada Borneo dalam agenda Praktik Kerja Lapangan di RS Pelita Insani', '<p>Foto bersama seusai <em>briefing </em>dan Penandatanganan MOU perihal agenda PKL (Praktik Kerja Lapangan) mahasiswa/i Stikes HB, yang akan berlangsung 30 hari terhitung sejak hari ini.&nbsp;</p>\r\n', '3-10.jpeg', '2020-01-20', 3, 1),
(11, 'GRATIS!! BAKTI SOSIAL RS PELITA INSANI  (OPERASI BIBIR SUMBING, OPERASI KATARAK, KHITAN MASSAL, OPERASI TUBEKTOMI) ', '<p>DALAM RANGKA HUT YANG KE 7, RS PELITA INSANI KEMBALI MENGADAKAN KEGIATAN BAKTI SOSIAL&nbsp; DIANTARANYA OPERASI BIBIR SUMBING, OPERASI KATARAK, KHITAN MASSAL, OPERASI TUBEKTOMI SECARA <strong>GRATIS</strong> UNTUK INFO LEBIH LANJUT BISA MENGHUBUNGI PIHAK RUMAH SAKIT PELITA INSANI DI NOMOR 081-255-111-116</p>\r\n', '2-11.jpeg', '2020-02-13', 2, 1),
(12, 'UMROH GRATIS UNTUK KARYAWAN TELADAN RS PELITA INSANI', '<p>TEAM MANAJEMEN RS PELITA INSANI MEMEBERIKAN HADIAH UMROH GRATIS KEPADA KARYAWAN TELADAN. MUH. SANJAYA YANG LEBIH DI KENAL DENGAN SEBUTAN &quot;MANG UJANG&quot; INI SANGAT BAHAGIA BERCAMPUR HARU SAAT NAMANYA DI SEBUTKAN SEBAGAI KARYAWAN TERPILIH UNTUK DIBERANGKATKAN UMROH GRATIS. PIHAK MANAJEMEN PELITA INSANI TELAH MEMBERIKAN PENILAIAN DARI BERBAGAI INDIKATOR PENIALAIAN YANG MEMANG MEMANTASKAN MANG UJANG TERPILIH SEBAGAI PENERIMA HADIAH TERSEBUT. TEAM MANAJEMEN MENGHARAPKAN DENGAN ADANYA REWARD YANG RENCANANYA AKAN DIBERIKAN RUTIN SETAHUN SEKALI INI MENJADI MOTIVASI KERJA KARYAWAN RS PELITA INSANI.</p>\r\n', '1-12.jpeg', '2020-02-18', 1, 1),
(13, 'Umroh Gratis untuk Mang Ujang', '<p>Muhamamad Sanjaya yang lebih populer di panggil&nbsp;Mang Ujang. Berada di kolom Tribun activity Banjarmasinpost hal. 13&nbsp;</p>\r\n\r\n<p>Usaha tidak pernah mengkhianati hasil. Mungkin istilah ini pantas sekali untuk Mang Ujang yang terpilih sebagai karyawan berprestasi&nbsp;RS Pelita Insani, atas dedikasinya selama ini kepada RS Pelita Insani.</p>\r\n', '3-13.jpeg', '2020-02-19', 3, 1),
(14, 'INFORMASI KETERSEDIAAN KAMAR INAP RS PELITA INSANI', '<p>BERIKUT KAMI SEDIAKAN LINK SEBAGAI INFORMASI KEPADA MASYARAKAT UNTUK MENGETAHUI KETERSEDIAAN KAMAR INAP YANG TERSEDIA DI RS PELITA INSANI<br />\r\n<a href=\"http://simrs-pelitainsani.rumahsakit.online/webapps/bed3.php\" target=\"_blank\">INFORMASI KETERSEDIAAN KAMAR</a></p>\r\n', '1-14.png', '2020-02-22', 1, 1),
(15, 'Rapat Final Persiapan  Haul Abah Guru Sekumpul Ke-15 RSPI', '<p>Keikutsertaan RS Pelita Insani sebagai Posko Kesehatan pada acara Haul Abah Guru Sekumpul yg ke-15, dan hari ini kami mengadakan rapat final untuk membahas berkenaan tentang teknis-teknis saat saat acara berlangsung. Kami dari RS Pelita Insani mengucapkan Selamat Datang Para Jama&#39;ah Haul Abah Guru Sekumpul yg Ke-15.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '1-15.jpeg', '2020-02-27', 1, 1),
(16, 'PENDAFTARAN ONLINE PELITA INSANI RUN ', '<p><a href=\"https://forms.gle/VD6KwBSws2shMeSi9\">Pendaftaran Online</a></p>\r\n\r\n<p>Klik link diatas untuk melanjutkan pendaftaran</p>\r\n\r\n<p>1. Peserta masuk ke website rspelitainsani.com &gt;&gt; Info &gt;&gt; Pengumuman &gt;&gt; pendaftaran online Peserta Pelita Insani Run<br />\r\n2. Peserta mengisi form pendaftaran lengkap dengan upload KTP dan bukti transfer<br />\r\n3. <strong>Tanpa upload bukti transfer peserta tidak akan tervalidasi, bahkan tidak akan dapat menyelesaikan pendaftaran</strong><br />\r\n4. Setelah form diisi lengkap peserta akan menerima rekap pendaftaran yang telah dilakukan dan otomatis akan masuk di email peserta<br />\r\n5. Dalam 1x24 jam, validator akan mengkonfirmasi ulang ke peserta via whatsapp</p>\r\n', '2-16.jpg', '2020-03-03', 2, 1),
(18, 'HIMBAUAN KEPADA PELANGGAN DAN PENGUNJUNG PASIEN RS PELITA INSANI', '<p>RS Pelita Insani - Dalam upaya siaga dan pengantisipasian dini terkait virus COVID 19.</p>\r\n', '2-18.jpeg', '2020-03-17', 2, 1),
(19, 'UPAYA PENCEGAHAN COVID 19 RS PELITA INSANI', '<p>Dalam upaya pencehagan dan penyebaran Covid-19, petugas kebersihan Rumah Sakit Pelita Insani&nbsp; melakukan &ldquo;Desinfeksi Pada Permukaan&rdquo; dengan menggunakan cairan desinfektan. Cairan desinfektan merupakan zat kimia yang digunakan untuk membersihkan dan membunuh mikroorganisme pada benda tak hidup. Ini dilakukan sampai 2 pekan kedepan sesuai dengan himbauan pemerintah.</p>\r\n', '3-19.jpeg', '2020-03-20', 3, 1),
(20, 'POLIKLINIK JANTUNG DAN PEMBULUH DARAH DI RS PELITA INSANI', '<p>Terhitung mulai senin 23 Maret 2020 dibuka Poliklinik Jantung dan Pembuluh darah dan&nbsp;akan dapat memberikan pelayanan rawat jalan maupun rawat inap oleh&nbsp;dr. Faisal Rahman, Sp.JP di RS Pelita Insani.</p>\r\n', '2-20.jpeg', '2020-03-21', 2, 1),
(21, 'KLARIFIKASI DIREKTUR RS PELITA INSANI TERKAIT BROADCAST VOICE NOTE YANG BEREDAR', '<p>Beberapa waktu lalu ramai broadcast di media sosial mengenai voice note pasien yg terinfeksi Virus Corona, di rawat di RS Pelita Insani dan beberapa penjelasan lain yang tidak benar dan dapat meningkatkan keresahan di masyarakat. Foto diatas adalah klarifikasi mengenai voice note tersebut, semoga dapat menurunkan keresahan.</p>\r\n\r\n<p>Tetap waspada dengan menjaga kesehatan kita ya.</p>\r\n', '2-21.jpg', '2020-03-22', 2, 1),
(22, 'LET\'S  STOP COVID-19', '<p>RS Pelita Insani ingin terus mensosialisasikan kepada masyarakat betapa pentingnya bila kita di rumah saja. Tetap Jaga Kesehatan dan Hindari Tempat Ramai !!</p>\r\n', '3-22.jpeg', '2020-03-23', 3, 1),
(23, 'JAM BESUK PASIEN RS PELITA INSANI DI TIADAKAN', '<p>Dalam upaya pencegahan Covid-19 kami rasa menjadi penting untuk meniadakan jam besuk. Pemberlakuan kebijakan ini terhitung sejak hari ini sampai waktu yang belum ditentukan. Kami harap pasien dan keluarga pasien khususnya serta masyarakat luas pada umumnya dapat memaklumi kebijakan yang telah kami buat dengan pertimbangan dan perhitungan - perhitungan yang telah kami kalkulasi sebelumnya demi kebaikan kita bersama.</p>\r\n\r\n<p>Tetap jaga kesehatan &amp; Tetap berada dirumah</p>\r\n\r\n<p>Terimakasih</p>\r\n', '2-23.jpeg', '2020-03-24', 2, 1),
(24, 'SOSIALISASI INTERNAL & KORDINASI RS PELITA INSANI TERKAIT PENANGGULANGAN COVID 19', '<p>Tepat Jum&#39;at/20 Maret 2020 lalu, Kami Mengadakan Sosialisasi dan Kordinasi Terkait Covid-19 mulai dari Alur penanganan sampai upaya yang bisa dilakukan untuk pencegahan covid-19 itu sendiri bersama dr. Norma,Sp. P selaku narasumber.</p>\r\n\r\n<p>Sebagai Fasilitas Kesehatan, menjadi wajib bagi kami untuk terus melakukan sosialisai dan upaya-upaya pencegahan berkenaan dengan Covid-19.</p>\r\n\r\n<p>Tetap Jaga Kesehatan &amp; Tetap Dirumah, STOP COVID-19</p>\r\n', '3-24.jpg', '2020-03-24', 3, 1),
(25, 'KEJUJURAN ANDA SANGAT BERHARGA BAGI KAMI', '<p>Saat ini kami sangat memohon kepada anda yanng memang harus kontrol ataupun periksa di RS Pelita Insani untuk memberikan pernyataan perihal keluhan, riwayat penyakit, dan riwayat perjalanan anda. Saat ini itu sangat berharga bagi kami, namun bila anda tidak memberikan pernyataan yang sebenarnya maka saat itu keluarga kami sedang terancam. Mohon untuk kerjasama nya.</p>\r\n\r\n<p>Terimakasih banyak semua.</p>\r\n\r\n<p>Tetap Jaga Kesehatan dan Jangan Lupa Cuci tangan.</p>\r\n', '2-25.jpeg', '2020-03-27', 2, 1),
(26, 'SAAT INI KAMI MENERIMA BANTUAN ALAT PELINDUNG DIRI (APD)', '<p>Melihat peningkatan ODP/PDP covid-19 kami merasa perlu untuk menerima bantuan berupa Alat Pelindung Diri. Bagi rekan-rekan yang ingin membantu dapat mengirimkan bantuannya&nbsp; langsung ke RS Pelita Insani atau menghubungi nomor yang tertera pada image di atas.</p>\r\n\r\n<p>Terimakasih.</p>\r\n', '2-26.jpeg', '2020-03-27', 2, 1),
(27, 'BIJAKSANA DALAM BERSOSIAL MEDIA ITU PERLU', '<p>Dewasa ini seiring perkembangan tekhnologi, informasi dapat dengan sangat supercepat kita dapatkan, perihal tentang apapun mulai dari peristiwa kecil sampai kejadian yang sangat penting akan kita dapatkan sekarang ini. Namun itu juga membuat kita wajib untuk melakukan filtering terhadap informasi yang kita dapatkan dan yang ingin kita bagikan.</p>\r\n\r\n<p>Selamat Pagi !!</p>\r\n\r\n<p>RS Pelita Insani - Tetap Jaga Kesehatan &amp; Jangan Lupa Cuci Tangan Yaa !!</p>\r\n\r\n<p>&nbsp;</p>\r\n', '3-27.jpeg', '2020-03-28', 3, 1),
(28, 'JADWAL PRAKTEK SEMENTARA DALAM UPAYA KEWASPADAAN PENYEBARAN COVID-19', '<p>Dalam upaya kewaspadaan penyebaran covid-19 dan dalam upaya percepatan penanggulangan covid-19 kami saat ini mengeluarkan kebijakan mengenai jadwal praktek poliklinik sementara seperti image diatas dan ini akan efektif sampai ada pemberitahuan selanjutnya.</p>\r\n\r\n<p>Salam Hangat,</p>\r\n\r\n<p>RS Pelita Insani, <em>Stay For Healty</em></p>\r\n', '2-28.jpeg', '2020-03-31', 2, 1),
(30, 'Rapid Test Covid-19 Gratis Bagi Pegawai RS Pelita Insani', '<p>RS Pelita Insani melaksanakan Rapid Test Covid-19 bagi pegawai RS Pelita Insani yang ada kontak langsung saat menangani pasien suspect ODP dan/ PDP Covid-19 di UGD RS Pelita Insani. Tidak hanya itu mereka petugas-petugas dengan risiko tinggi&nbsp; garda depan RS Pelita Insani juga diberikan asupan gizi tambahan seperti Susu, Kacang ijo, Vit. C, Buah-buahan, dsb. yang di harapkan itu dapat membantu untuk ketahanan tubuh mereka saat bertugas di pintu paling depan RS Pelita Insani.</p>\r\n\r\n<p>Tetap Jaga Kesehatan And Stay At Home</p>\r\n\r\n<p>&nbsp;</p>\r\n', '1-30.jpeg', '2020-04-08', 1, 1),
(31, 'Layanan Rapid Test Covid-19 RS Pelita Insani ', '<p><em>&quot;Rapid test</em> adalah metode skrining awal untuk mendeteksi antibodi, yaitu IgM dan IgG, yang diproduksi oleh tubuh untuk melawan virus Corona. Antibodi ini akan dibentuk oleh tubuh bila ada paparan virus Corona.</p>\r\n\r\n<p>Dengan kata lain, bila antibodi ini terdeteksi di dalam tubuh seseorang, artinya tubuh orang tersebut pernah terpapar atau dimasuki oleh virus Corona.&quot;</p>\r\n\r\n<p>Sumber&nbsp; : https://www.alodokter.com/kenali-apa-itu-rapid-test-untuk-virus-corona</p>\r\n\r\n<p>Saat ini RS Pelita Insani menyediakan layanan pemeriksaan dengan metode <em>Rapid Test </em>tersebut untuk masyarakat yang ingin dilakukan pemeriksaan <em>Rapid Test</em>.</p>\r\n\r\n<p>Syarat dan Ketentuan :</p>\r\n\r\n<p>1. Hanya untuk pasien reguler/pribadi</p>\r\n\r\n<p>2. Untuk pemeriksaan yang kedua kali nya akan terdapat potongan 15%&nbsp;</p>\r\n\r\n<p>3. Untuk dokter ada harga khusus</p>\r\n\r\n<p>Informasi lebih lanjut dapat menghubungi : 0812 - 513 - 98030 a/n. Tyna</p>\r\n\r\n<p>Rs Pelita Insani,</p>\r\n\r\n<p>Tetap Jaga Kesehatan &amp; Stay At Home</p>\r\n', '2-31.jpeg', '2020-04-14', 2, 1),
(32, 'Layanan Online Telemedicine di Masa Pandemic Covid-19 RS Pelita Insani', '<p>Dengan adanya layanan Telemedicine ini, diharapkan dapat menjadi solusi bagi masyarakat yang ingin berobat sambil tetap #dirumahaja. Info lebih lanjut dapat menghubungi nomor telpon yang tertera pada <em>image</em> diatas, atau dengan mengirimkan Direct Message ke <a href=\"https://www.instagram.com/rspelitainsani/\">Instagram</a> kami yang juga tertera pada <em>image</em> diatas.</p>\r\n', '1-32.jpeg', '2020-05-06', 1, 1),
(33, 'No Pendaftaran Telemedicine RS Pelita Insani', '<p>Hadirnya Telemedicine RS Pelita Insani ini diharapkan dapat menjadi alternatif dan juga solusi untuk masyarakat yang ingin berobat di masa pandemik ini. Kami juga Share info terkait Telemedicine ini di <a href=\"https://www.instagram.com/rspelitainsani/\">Instagram</a> serta media sosial kami lainnya.</p>\r\n', '2-33.jpg', '2020-05-06', 2, 1),
(34, 'Dokter Telemedicine RS Pelita Insani', '<p>Berikut Dokter yang saat ini dapat melayani konsultasi melalui layanan terbaru yaitu Telemedicine RS Pelita Insani</p>\r\n\r\n<p>1. Spesialis Penyakit Dalam ( dr. H. Gabril Taufiq Basri, Sp. PD, Finasim ) <a href=\"https://www.instagram.com/p/B_v7HOLg3UI/\">Tap For Detail Instagram</a></p>\r\n\r\n<p>2. Spesialis Mata ( dr. Diana Haryati Kusumastuti, Sp. M ) <a href=\"https://www.instagram.com/p/B_v7DNigYHi/\">Tap For Detail Instagram</a></p>\r\n\r\n<p>3. Spesialis Jantung dan Pembuluh Darah ( dr. Faisal Rahman, Sp. JP) <a href=\"https://www.instagram.com/p/B_yokiFAJJg/\">Tap For Detail Instagram</a></p>\r\n\r\n<p>4. Spesialis Syaraf ( dr. I Made Dwi Jayantara, Sp. S ) <a href=\"https://www.instagram.com/p/B_y61RgAxus/\">Tap For Detail Instagram</a></p>\r\n\r\n<p>5. Spesialis Anak ( dr. Yanuar Nusca Permana, Sp. A ) <a href=\"https://www.instagram.com/p/B_v6pO9AX1e/\">Tap For Detail Instagram</a></p>\r\n\r\n<p>6. Dokter Gigi ( drg. Ari Dwi Laksana ) <a href=\"https://www.instagram.com/p/B_yaPUlgZb9/\">Tap For Detail Instagram</a></p>\r\n\r\n<p>7. Dokter Umum ( Sesuai Shift ) <a href=\"https://www.instagram.com/p/B_qnFsJg6BC/\">Tap For Detail Instagram</a></p>\r\n\r\n<p>Untuk informasi lebih lanjut dapat mengunjungi <a href=\"https://www.instagram.com/rspelitainsani/\">Instagram RS Pelita Insani</a> atau menghubungi (0511) 4722210 / 4722220</p>\r\n', '1-34.jpg', '2020-05-14', 1, 1),
(35, 'Tidak Mudik Dulu Sebagai Upaya Pemutusan Rantai Penyebaran Covid-19', '<p>Himbauan kepada masyarakat untuk tidak mudik dulu sebagai upaya kita memerangi covid-19. Lebaran tahun&nbsp;ini memang terasa sangat berbeda dari lebaran - lebaran kita sebelumnya, dikarenakan penyebaran virus Covid-19 ini. Mau tidak mau faktanya memang seperti demikian. Rindu orang tua, sanak, famili di kampung halaman itu sudah pasti, siapa yang tidak? tapi dengan kondisi pandemik seperti sekarang ini, tindakan yang paling bijak dan terbaik adalah untuk tidak mudik.</p>\r\n\r\n<p>- Penuh Cinta</p>\r\n\r\n<p>RS Pelita Insani&nbsp;&nbsp;</p>\r\n', '3-35.jpeg', '2020-05-19', 3, 1),
(36, 'UPDATE JAM PELAYANAN POLI BEDAH RS PELITA INSANI', '<p>Diberitahukan kepada masyarakat Kab. Banjar dan sekitarnya, saat ini kami&nbsp;telah menambah durasi Jam Pelayanan&nbsp;Poli Bedah yg kami miliki, yg semula buka pelayanan mulai pukul 19.30 - 21.00, dan saat ini pelayanan poli bedah sudah bisa di mulai pelayanan pukul 17.30 - 21.00. Semoga penambahan jam pelayanan ini dapat bermanfaat bagi masyarakat Kab. Banjar dan sekitarnya.</p>\r\n', '2-36.jpg', '2021-02-15', 2, 1),
(37, 'UPDATE JAM PELAYANAN POLI JANTUNG DI RS PELITA INSANI', '<p>Halo Masyarakat Banua,</p>\r\n\r\n<p>Mulai Sekarang Poli Jantung RS Pelita Insani Telah Dapat Memberikan Pelayanan Mulai Senin - Jum&#39;at, Pukul 17.00 - 19.00</p>\r\n\r\n<p>Bersama dr. Faisal Rahman, Sp. JP.,FIHA<br />\r\nSemoga Kami Dapat Terus Memberi Manfaat Bagi Warga Banua Barataan.</p>\r\n\r\n<p>_Stay For Health_</p>\r\n', '2-37.jpeg', '2021-02-19', 2, 1),
(39, 'H-1 PERSIAPAN EVENT DONOR DARAH RS PELITA INSANI BERSAMA UDD PMI KAB.BANJAR', '<p>Halo Masyarakat Banua,</p>\r\n\r\n<p>Dengan mengangkat tema &quot;Bergerak Bersama Untuk Sesama&quot; RS Pelita Insani bersinergi dengan UDD PMI Kab. Banjar, akan menggelar event Donor Darah yang akan dilaksanakan pada hari Sabtu tanggal 04 Desember 2021 dari pukul 09:00 WITA sampai dengan kurang lebih pukul 13:00 WITA.</p>\r\n\r\n<p>Dalam event ini RS Pelita Insani bersama UDD PMI Kab.Banjar menyediakan total 100 kantong darah. Dan juga akan ada pembagian sembako untuk 50 orang peserta pertama yang sudah berhasil mendonorkan darahnya.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<pre>\r\n<tt><small>- IT RSPI | 03-12-2021 -</small></tt></pre>\r\n', '1-39.jpeg', '2021-12-03', 1, 1),
(40, 'SUASANA PELAKSANAAN DONOR DARAH RS PELITA INSANI BERSAMA UDD PMI KAB.BANJAR', '<p>Pada hari ini Sabtu tanggal 04 Desember 2021 telah berlangsung event Donor Darah yang diselenggarakan oleh RS Pelita Insani yang bekerjasama dengan UDD PMI Kab. Banjar. Pada event ini RS Pelita Insani bersama UDD PMI Kab.Banjar&nbsp; yang mengangkat tema &quot;Bergerak Bersama Untuk Sesama&quot; menyediakan total 100 kantong darah dan juga pembagian sembako untuk 50 orang peserta pertama yang sudah berhasil mendonorkan darahnya.</p>\r\n\r\n<p>Saat ini event masih berlangsung sejak pukul 09:00 WITA dan akan berakhir kurang lebih pukul 13:00 WITA dengan Mematuhi Protokol Kesehatan, Memakai Masker &amp; juga Menjaga Jarak.</p>\r\n\r\n<p>Ayo bagi masyarakat yang ingin mendonorkan darahnya, bisa langsung datang ke RS Pelita Insani (Sebelah ATM Center RS Pelita Insani).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<pre>\r\n<tt><small>- IT RSPI | 04-12-2021 -</small></tt></pre>\r\n', '1-40.jpeg', '2021-12-04', 1, 1),
(41, 'Silaturahmi & Diskusi Jajaran Manajemen RS.Pelita Insani dengan DISNAKER Kab. Banjar & Provinsi Kal-Sel', '<p>Martapura, 09 Desember 2021</p>\r\n\r\n<p>Alhamdulillah hari ini berkesempatan silaturahmi dan diskusi dengan Dinas Tenaga Kerja Kab. Banjar dan Provinsi Kalimantan Selatan. Rumah Sakit Pelita Insani langsung disambut oleh Sekretaris Disnaker Kab. Banjar dan jajaran begitupun rombongan dari Disnaker Prov. Kalsel hadir langsung perwakilan bidang Hubungan Industrial dll. Pertemuan yang sangat berkualitas karena kami melakukan diskusi dan pendalaman-pendalaman mengenai UUK No. 13 Tahun 2003 begitupun pembahasan detail mengenai UCK 2021 beserta Peraturan Turunan nya salah satunya Peraturan Pemerintah RI No. 35 Tahun 2021. Banyak hal yang bisa dimaksimalkan dari hasil pertemuan ini termasuk input/masukan Disnaker Kab. Banjar dan Prov. Kalsel untuk kemajuan Rumah Sakit Pelita Insani.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<pre>\r\n<small>-IT RSPI-</small></pre>\r\n', '3-41.jpeg', '2021-12-09', 3, 1),
(42, 'Persalinan Lebih Aman & Cepat Dengan Metode ERACS Di RS Pelita Insani', '<p>Apa itu metode ERACS?<br />\r\nEnchanced Recovery After Caesarean Section, atau Metode Operasi Caesar Dengan Pemulihan Lebih Cepat.<br />\r\nTerdapat Berbagai Kelebihan Dari Metode ERACS ini, diantaranya Pemulihan Lebih Cepat dan Meminimalisir Rasa Nyeri Pasca Operasi.</p>\r\n\r\n<p>Keuntungan metode ERACS dibandingkan SC biasa, yaitu;</p>\r\n\r\n<ul>\r\n	<li>Masa pemulihan lebih cepat, aman bagi ibu &amp; bayi</li>\r\n	<li>Masa perawatan di rumah sakit lebih singkat</li>\r\n	<li>Nyeri pasca operasi lebih minim</li>\r\n	<li>Mengurangi komplikasi bayi kuning pasca operasi</li>\r\n	<li>Laktasi ibu lebih optimal</li>\r\n	<li>Hemat biaya</li>\r\n</ul>\r\n\r\n<p>Jadikan Momen Melahirkan Lebih Menyenangkan Dengan Metode ERACS di RS Pelita Insani. Didukung Tim Kebidanan &amp; Anastesi&nbsp; yang kompeten dibidangnya, serta dilengkapi dengan peralatan yang canggih.</p>\r\n\r\n<p>Informasi lebih lanjut dapat menghubungi : 0812 - 513 - 98030 a/n. TYNA</p>\r\n\r\n<p>RS Pelita Insani,</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<pre>\r\n<tt><small>- IT RSPI | 10-12-2021 -</small></tt></pre>\r\n', '2-42.jpeg', '2021-12-10', 2, 1),
(43, 'Silaturahmi Jajaran Manajemen RS Pelita Insani dengan Ibu Dr. Hj. Siti Ma’rifah Ma’ruf Amin, M.M. M.H.', '<p>Alhamdulillah pada hari jum&#39;at sore tanggal 10 Desember 2021, jajaran manajemen RS Pelita Insani berkesempatan silaturahmi dengan Ibu Dr. Hj. Siti Ma&rsquo;rifah Ma&rsquo;ruf Amin, M.M. M.H..</p>\r\n\r\n<p>Terima kasih Ibu, atas waktu dan kesempatannya.</p>\r\n\r\n<p>Barakallah..</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<pre>\r\n<small>-IT RSPI-</small></pre>\r\n', '3-43.jpeg', '2021-12-11', 3, 1),
(44, 'Suasana Webinar RS Pelita Insani dengan Prenagen (Kalbe Nutrionals)', '<p>Hari ini sabtu 11 Desember 2021, sedang berlangsung acara live Webinar seputar kehamilan dan nutrisi untuk anak melalui aplikasi Zoom. Acara dimulai sejak pukul 13:00 sampai pukul 16:00 WITA.</p>\r\n\r\n<p>Webinar materi 1, disampaikan oleh dr.HARI SUPARJO, Sp.OG, M.Kes., dokter spesialis kebidanan dan kandungan di RS Pelita Insani dengan tema: &quot;Kenali Dampak Komplikasi Kehamilan dan Melahirkan Karena Kekurangan Nutrisi&quot;.</p>\r\n\r\n<p>Webinar materi 2, akan disampaikan oleh Irwan Sujarwo, S. Psi, CT, psikolog dengan tema: Mindful Parenting: &quot; Berikan Nutrisi dan Stimulasi terbaik untuk Si Kecil&quot;.</p>\r\n\r\n<p>Bagi peserta yang sudah mendaftar&nbsp;dan mengikuti acara, dengan biaya Rp 40.000,- per orang, akan mendapatkan paket Goodie Bag berisi:</p>\r\n\r\n<p>- Seminar Kit (Pulpen+Notes Prenagen)<br />\r\n- 1 Box Prenagen Powder 200gr senilai Rp. 40,000<br />\r\n- 2 Pc&#39;s Prenagen Liquid (UHT/Juice) Rp. 20,000<br />\r\n- Berkesempatan mendapatkan ???? DOORPRIZE menarik*.</p>\r\n\r\n<p>~Salam Sehat untuk Ibu dan Buah Hati~<br />\r\n<a href=\"https://www.instagram.com/explore/tags/prenagenxrspelitainsanimartapura/\">#PrenagenXRS.PelitaInsani</a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<pre>\r\n<tt><small>- IT RSPI -</small></tt></pre>\r\n', '1-44.jpeg', '2021-12-11', 1, 1),
(45, 'Gathering Karyawan RS Pelita Insani', '<p>Suasana kegiatan yang sangat menyenangkan dan menggembirakan Outbond dalam rangka Gathering Karyawan RS Pelita Insani, pada hari Sabtu lalu 18 Des 2021 bertempat di The Breeze Waterpark Banjarbaru.</p>\r\n\r\n<p>Terima kasih diucapkan kepada panitia, pegawai dan para sponsor dari Kalbe Nutrionals.<br />\r\n<br />\r\nWe are ONE!! We are FAMILY !!!!!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<pre>\r\n<tt><small>- IT RSPI -</small></tt></pre>\r\n', '1-45.jpg', '2021-12-20', 1, 1),
(46, 'Sosialisasi tentang \"Pencegahanan & Pengendalian Infeksi (PPI) dan Program Pengendalian Resistensi Antimikroba (PPRA) Sesuai Standart  Akreditasi RS\"', '<p>Pada hari <em>Rabu tanggal 2 Maret 2022</em>, diadakan acara Sosialisasi tentang &quot;Pencegahanan &amp; Pengendalian Infeksi (PPI) dan Program Pengendalian Resistensi Antimikroba (PPRA) Sesuai Standart&nbsp; Akreditasi Rumah Sakit&quot;, yang disampaikan oleh Narasumber : <strong>Surya Astuti Dian, S. Kep., Ners</strong> dan <strong>Yeni Sulistiani, S. Kep., Ners</strong>. Acara yang dimulai dari pukul 08.30 WITA sampai dengan selesai dan bertempat di Ruang Aula Lt. 4, RS. Pelita Insani Martapura.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><tt><small>- IT RSPI -</small></tt></p>\r\n', '1-46.jpeg', '2022-03-02', 1, 1),
(47, 'Saksikan Live IG RS Pelita Insani & RSI Sultan Agung Banjarbaru, 22 Maret 2022 \" Rumah Sakit Berbasis Syariah\"', '<p>RS Pelita Insani Martapura dan RSI Sultan Agung Banjarbaru proudly present: Industri syariah di Indonesia semakin ramai, setelah bank dan lembaga keuangan syariah saat ini mulai berkembang ke arah bisnis real seperti hotel syariah, supermarket syariah dan yang terbaru adalah rumah sakit syariah.<br />\r\n<br />\r\nIndonesia dengan mayoritas penduduknya yang beragama Islam merupakan pangsa pasar yang luas bagi basis syariah dari sisi kebutuhan pemenuhan aturan agama.<br />\r\n<br />\r\nKeberadaan rumah sakit syariah ini juga sangat baik untuk mendorong pasien yang beragama Islam untuk tahu bahwa pengobatan medis juga sesuai dengan aturan Islam.</p>\r\n\r\n<p>Untuk itu RS Pelita Insani dan RSI Sultan Agung Banjarbaru akan membahas detail mengenai &quot;Rumah Sakit Berbasis Syariah&quot;. Saksikan Live IG dari <a href=\"https://www.instagram.com/rspelitainsani/\">@rspelitainsani</a> dan <a href=\"https://www.instagram.com/rsi.sultanagung_banjarbaru/\">@rsi.sultanagung_banjarbaru</a> Selasa 22 Maret 2022 Pukul 09.00 WITA bersama moderator dr. Gralia Rizky dan Narasumber dr. Rifqiannor, M. A. R. S Direktur RSI Sultan Agung Banjarbaru.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<pre>\r\n<tt><small>- IT RSPI -</small></tt></pre>\r\n', '1-47.jpg', '2022-03-21', 1, 1),
(48, 'Daftar Online Antrian di RS Pelita Insani Menggunakan Applikasi Mobile JKN', '<p>Sekarang Daftar Online Antrian di RS Pelita Insani bagi peserta BPJS, bisa menggunakan aplikasi via Mobile JKN.</p>\r\n\r\n<p>Ayo! Download sekarang aplikasinya via Playstore dan Appstore.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2-48.jpeg', '2022-04-06', 2, 1),
(49, '[Tips Selama Puasa] Anjuran Minum Saat Berpuasa.', '<p>Cara agar tidak haus saat puasa, yaitu rutin meminum air putih dan mengonsumsi buah-buahan.</p>\r\n\r\n<p>Selama berpuasa, menjaga kadar cairan dalam tubuh merupakan hal penting. Ada berbagai cara agar tidak haus saat puasa, termasuk cara mencegah dehidrasi. Cara agar tidak haus saat puasa adalah dengan memulai kebiasaan minum air putih.</p>\r\n\r\n<p>Rutinitas minum air putih ketika berbuka hingga sahur, diyakini mampu mencegah dehidrasi. Berikut tips agar puasa tidak cepat haus.<br />\r\n&nbsp;</p>\r\n', '3-49.jpg', '2022-04-07', 3, 1),
(50, 'Umroh Gratis Dari RS. Pelita Insani Martapura Kepada Karyawan Teladan/Berprestasi', '<p>Marhaban Ya Ramadhan. Menghargai jasa setiap pegawai teladan yang telah mengabdikan diri dan berjasa besar dalam berbagai bidang, menumbuhkembangkan sikap keteladanan dan mendorong semangat melahirkan pelayanan terbaik bagi kemajuan RS Pelita Insani Martapura. Umroh Gratis adalah Bentuk dan Wujud Pengharagaan dari PT. Pelita Insani Mulia dan RS Pelita Insani kepada pegawainya.<br />\r\n<br />\r\nMuhammad Sanjaya yang akrab disapa Ujang Insyaa Allah akan diberangkatkan <a href=\"https://www.instagram.com/pancartour/\">@pancartour</a> <a href=\"https://www.instagram.com/rspelitainsani/\">@rspelitainsani</a> Ibadah Umroh Gratis pada bulan Syawal 1443 H.</p>\r\n\r\n<p>Barakallah</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><tt><small>- IT RSPI -</small></tt></p>\r\n', '1-50.jpg', '2022-04-09', 1, 1),
(51, 'Bela Sungkawa Atas Musibah Robohnya Bangunan di KM. 14 Gambut, Kab.Banjar.', '<p>Kelurga Besar RS Pelita Insani Turut berbela sungkawa atas musibah korban robohnya bangunan di KM.14 Gambut Kab. Banjar, Kalimantan Selatan.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '1-51.jpg', '2022-04-21', 1, 1),
(52, 'Ramadhan Quotes', '<p>Marhaban Yaa Ramadhan..</p>\r\n\r\n<p>&quot;Ramadhan itu seperti teman. Kamu mungkin berjumpa dengannya hari ini, tapi belum tentu kamu bisa berjumpa lagi dengannya di lain waktu.&quot;<br />\r\n<br />\r\nBulan Ramadhan merupakan Bulan yang mulia dan juga diantara peluang yang baik untuk mengubah diri menjadi lebih baik. Oleh itu, janganlah kita mensia-siakan kehadiran Bulan Ramadhan seperti hari biasa, namun cobalah ambil peluang untuk cukupkan segala kawajiban yang Allah telah perintahkan dan juga untuk tingkatkan amal ibadah menjadi lebih baik Insyaa Allah. Aamiin Ya Rabbal Alamin..</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><tt><small>- IT RSPI -</small></tt></p>\r\n', '3-52.jpg', '2022-04-21', 3, 1),
(53, 'POLI GIGI DAN MULUT RS. PELITA INSANI', '<p>Selamat Bergabung&nbsp;di RS. Pelita Insani Martapura drg. Raharshanti Inggar Hayuning Hapsari, Sp. KG, beliau dokter Gigi Spesialis Konservasi Gigi.</p>\r\n\r\n<p>Konservasi Gigi adalah cabang kedokteran gigi dengan menjaga dan mempertahankan gigi, baik fungsi maupun estetiknya. Dokter spesialis konservasi gigi atau biasa disebut Endodontis adalah mereka yang telah belajar secara khusus mengenai metode konservasi gigi.</p>\r\n\r\n<p>Perawatan pada bidang ini meliputi perawatan dan pencegahan gigi berlubang, penambalan sewarna gigi, penambalan dengan inlay/onlay, perawatan gigi berlubang yang sudah mencapai saraf gigi, perawatan gigi yang patah, gigi lepas, bedah endodontik, pemutihan gigi (bleaching), veneer dan mahkota jaket.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '1-53.jpeg', '2022-04-28', 1, 1),
(55, 'JADWAL CUTI DOKTER SPESIALIS, SELAMA HARI RAYA IDUL FITRI 1443 H', '', '2-55.jpg', '2022-04-28', 2, 1),
(56, 'Info Update Jadwal Praktik Dokter Spesialis RS. Pelita Insani', '', '2-56.jpg', '2022-05-10', 2, 1),
(58, 'Bakti Sosial Operasi Katarak & Donor Darah Dalam Rangkaian Menuju HUT RS. PELITA INSANI Yang Ke-9 Tahun', '<p>Mengusung Tema &quot;PEDULI SESAMA UNTUK BANUA&quot; Dalam Rangkaian Hari Ulang Tahun Rumah Sakit Pelita Insani ke-9 Rumah Sakit Pelita Insani bekerjasama dengan PMI Kab. Banjar, Himpunan Pengusaha Muda Kab. Banjar, Pemerintah Daerah Kab. Banjar dan TP PKK Kab. Banjar mengadakan Bakti Sosial Operasi Katarak &amp; Donor Darah (Gratis).<br />\r\n<br />\r\nKegiatan Bakti Sosial Inshaa Allah diadakan:</p>\r\n\r\n<ul>\r\n	<li>Sabtu, 11 Juni 2022</li>\r\n	<li>Jam 08.00 WITA - Selesai</li>\r\n	<li>Tempat RS. Pelita Insani Martapura</li>\r\n</ul>\r\n\r\n<p><br />\r\nJadilah bagian dari kebaikan! <a href=\"https://www.instagram.com/explore/tags/pedulisesamauntukbanua/\">#pedulisesamauntukbanua</a> <a href=\"https://www.instagram.com/explore/tags/hutrspike9/\">#hutrspike9</a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>- IT RSPI -</p>\r\n', '1-58.jpg', '2022-05-17', 1, 1),
(59, 'Pertemuan & Koordinasi Persiapan Pelaksanaan Bakti Sosial Operasi Katarak Gratis dan Donor Darah dalam rangkaian HUT RSPI ke 9', '<p>Pada hari Juma&#39;at tanggal 27 Mei 2022, Tim RS. Pelita Insani melakukan pertemuan dan koordinasi terkait pelaksanaan Bakti Sosial Operasi Katarak Gratis dan Donor Darah dalam rangkaian HUT RSPI ke 9 di Kantor Sekretariat PKK Kab. Banjar hadir langsung Kabag. Adpem Setda Banjar, PMI Kab. Banjar, Dinas Kesehatan, dan wakil dari TP. PKK Kab. Banjar serta rekan Media dari Radar Banjarmasin semoga Baksos di tanggal 11 Juni 2022 berjalan lancar amin.</p>\r\n', '1-59.jpg', '2022-05-28', 1, 1),
(60, 'Pelaksanaan Operasi Bibir Sumbing Gratis di RS.Pelita Insani bersama Smile Train Indonesia & Kodim 1006 Martapura', '<p><strong>Alhamdulillah</strong>, sudah dilangsungkan Operasi Bibir Sumbing Gratis kerjasama RS Pelita Insani, Smile Train Indonesia dan Kodim 1006 Martapura sejumlah 6 orang pasien bayi, balita (anak). Berkat doa semua operasi berjalan lancar dan sukses.</p>\r\n\r\n<p>Ucapan terima kasih tak henti juga selalu disampaikan dari keluarga orang tua pasien. Dengan penuh haru mereka menyampaikan <em>&ldquo;Terima kasih banyak sudah mengadakan acara baksos ini, kami mengucap syukur kepada Allah SWT dan RSPI serta tim terlibat. Semoga Allah balas kebaikan ini dengan sebanyak-banyak nya kebaikan.&rdquo;</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<pre>\r\n<small>-IT RSPI-</small></pre>\r\n', '1-60.jpg', '2022-05-30', 1, 1),
(61, 'RESMI MENJADI RUMAH SAKIT PARIPURNA ', '<p>Alhamdulillah, semua usaha dan kerja keras terbayarkan. RSPI mendapatkan predikat Bintang 5 PARIPURNA untuk semua penilaian, baik secara administratif maupun teknis pelayanan,&rdquo; ujar Kepala RSPI, H Gabril Taufiq Basri SpPD FINASIM.<br />\r\n<br />\r\n&ldquo;Semoga amanah baru ini menjadi motivasi kami untuk memberikan pelayanan terbaik berkualitas untuk masyarakat,&rdquo;</p>\r\n', '1-61.png', '2023-01-05', 1, 1),
(62, ' PELATIHAN PENDIDIKAN (IN HOUSE TRAINING) SERVICE WITH HEART', '<p>Alhamdulillah sudah berlangsung Pelatihan Pendidikan (In House Training) Service with Heart sesi 1 bersama Ibu Neka Erlyani, M. Psi., Psikolog<br />\r\n<br />\r\nDengan detail pembahasan seputar<br />\r\na. Mengenali diri<br />\r\nb. Mengenali Pekerjaan<br />\r\nc. Memahami pelanggan<br />\r\nd. Pelayanan dengan hati<br />\r\n<br />\r\nPegawai RS Pelita Insani yang ikut hadir sejumlah 40 orang dengan latar belakang unit divisi Pelayanan Medis, Penunjang dan Non Medis turut serta mengikuti acara ini. Concern Bagian Kepegawaian dan SDM RSPI ditahun 2023 ini adalah senantiasa meningkatkan kualitas SDM demi output pelayanan terbaik untuk masyarakat.</p>\r\n', '1-62.JPG', '2023-02-27', 1, 1),
(63, 'Aksi Sosial Pancar Tour Travel Rumah Sakit Pelita Insani Martapura dan PMI UDD Kab. Banjar', '<p><strong>Ayo Donor Darah!</strong></p>\r\n\r\n<p><strong>Aksi Sosial Pancar Tour Travel Rumah Sakit Pelita Insani Martapura dan PMI UDD Kab. Banjar</strong><br />\r\n<br />\r\nPELAKSANAAN DONOR DARAH<br />\r\nHari : Sabtu, 18 Maret 2023<br />\r\nPukul : 08.00 s.d 12.00 WITA (selesai)<br />\r\nTempat : Halaman Kantor Pancar Tour Travel Jalan A. Yani KM 39 Martapura</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;(Lokasi sebelah Rumah Dinas Wakil Bupati Kab. Banjar)<br />\r\n<br />\r\n<em><strong>100 Pendonor Pertama mendapatkan Paket Sembako</strong></em><br />\r\n<br />\r\n<strong>&quot;Setetes Darah Sejuta Harapan&quot;</strong></p>\r\n\r\n<p><a href=\"https://www.instagram.com/rspelitainsani/\">IG RS PELITA INSANI</a></p>\r\n', '1-63.jpg', '2023-03-16', 1, 1),
(64, 'PROMO MEDICAL CHECK UP TAHUN 2023', '<p>Medical Check Up Rumah Sakit Pelita Insani 2023<br />\r\n<br />\r\nMencegah lebih baik daripada mengobati. Sebagai langkah pencegahan, medical check-up dapat dilakukan untuk mengetahui kondisi kesehatan, sekaligus mendeteksi suatu penyakit sejak dini.&nbsp;<a href=\"https://www.instagram.com/explore/tags/stayforhealth/\">#stayforhealth</a></p>\r\n\r\n<p>Sumber :&nbsp;<a href=\"https://www.instagram.com/rspelitainsani\">IG RS PELITA INSANI</a></p>\r\n', '2-64.jpg', '2023-03-16', 2, 1),
(65, 'TELAH HADIR LAYANAN PENDAFTARAN ONLINE PI-Care', '<p><strong>Telah hadir, PI-Care (Pelita Insani Care) !!!</strong><br />\r\nLayanan pendaftaran online via whatsapp untuk pasien Rawat Jalan yang mau berobat ke Rumah Sakit Pelita Insani.<br />\r\n<br />\r\nLayanan ini memberikan kemudahan untuk pasien yang mau berobat Rawat Jalan ke Rumah Sakit Pelita Insani tanpa harus antri.<br />\r\n<br />\r\nSilahkan daftar ke nomer WhatsApp 0811-5800-059 dan ikuti arahannya.<br />\r\n<br />\r\n&quot;Kalau ada yang online, kenapa harus antri&quot;<br />\r\n<br />\r\n<em><strong>Catatan: lakukan pendaftaran di whatsapp PI Care H-1 sebelum berobat</strong></em></p>\r\n\r\n<p>Sumber :&nbsp;<a href=\"https://www.instagram.com/rspelitainsani/\">IG RS PELITA INSANI</a></p>\r\n', '2-65.jpg', '2023-03-16', 2, 1),
(66, 'JASA LAYANAN ANTAR OBAT & HASIL MEDIS', '<p>&nbsp;</p>\r\n\r\n<p><strong>Tidak perlu antri di Rumah Sakit, Kurir kami siap ambil dan antar kerumah anda!</strong><br />\r\n<br />\r\nJasa Layanan Antar Obat dan Hasil Medis dari Rumah Sakit Pelita Insani ke rumah pasien tanpa harus menunggu di rumah sakit. Tarif disesuaikan dengan ketentuan jarak.&nbsp;<a href=\"https://www.instagram.com/explore/tags/stayforhealth/\">#stayforhealth</a></p>\r\n\r\n<p>Sumber :&nbsp;<a href=\"https://www.instagram.com/rspelitainsani/\">IG RS PELITA INSANI</a></p>\r\n', '2-66.jpg', '2023-03-16', 2, 1),
(67, 'PELAKSANAAN AKSI SOSIAL DONOR DARAH', '<p><strong>Alhamdulillah sudah terlaksana Aksi Sosial Donor Darah</strong> kerjasama Pancar Tour Travel&nbsp;RS Pelita Insani dan PMI Kab. Banjar Terkumpul kantong darah sejumlah :<br />\r\n<strong>Golongan A= 23 kantong<br />\r\nGolongan B= 25 kantong<br />\r\nGolongan O= 37 kantong<br />\r\nGolongan AB= 7 kantong</strong><br />\r\nDiucapkan terima masih banyak untuk semua tim yang terlibat juga pendonor yang sudah mendonorkan darah nya. Semoga Allah selalu memberkahi kita semua amin.<br />\r\n<br />\r\nBanyak sekali manfaat dari donor darah antara lain: Bentuk kepedulian terhadap sesama, Memperpanjang hidup oran lain, Membantu hidup orang lain, Satu kantong darah dapat menyelamatkan 3 nyawa, Melindungi jantung, Mencegah stroke, Mengatur kontrol kesehatan, Meningkatkan sel darah merah, Meningkatkan kapasitas paru-paru dan ginjal, Meningkatkan kesehatan psikologis, Membantu sirkulasi darah, Memaksimalkan darah dalam paru-paru, Menurunkan zat seng dalam darah, Memperbaharui sel darah baru, Mencegah resiko kesehatan, Mencegah penyakit langka dll.</p>\r\n\r\n<p>Sumber :&nbsp;<a href=\"https://www.instagram.com/rspelitainsani/\">IG RSPI</a></p>\r\n', '1-67.JPG', '2023-03-20', 1, 1),
(68, 'JADWAL POLIKLINIK SELAMA BULAN RAMADHAN 1444H/2023M', '<p>Berikut terlampir jadwal poliklinik RS Pelita Insani selama bulan Ramadhan 1444H/2023M</p>\r\n', '2-68.jpg', '2023-03-20', 2, 1);
INSERT INTO `t_konten` (`id_konten`, `judul`, `isi`, `gambar`, `tgl_entry`, `kategori`, `status`) VALUES
(69, 'DIRGAHAYU PPNI KE-49', '<p><em><strong>&quot;Selamat hari ulang tahun PPNI 2023. Maju terus Persatuan Perawat Nasional Indonesia&quot;</strong></em></p>\r\n\r\n<p>Di Indonesia,&nbsp;<a href=\"https://www.suara.com/tag/hari-perawat-nasional\">Hari Perawat Nasional</a>&nbsp;diperingati saban 17 Maret.&nbsp;<a href=\"https://www.suara.com/tag/sejarah-hari-perawat-nasional\">Sejarah Hari Perawat Nasional</a>&nbsp;tidak bisa dilepaskan dari lahirnya Persatuan Perawat Nasional Indonesia (<a href=\"https://www.suara.com/tag/ppni\">PPNI</a>) pada 17 Maret 1974. Tanggal tersebut kemudian menjadi tonggak diperingatinya&nbsp;<a href=\"https://www.suara.com/tag/hari-perawat\">Hari Perawat</a>&nbsp;Nasional.&nbsp;</p>\r\n\r\n<p>Pada 2023 ini, peringatan Hari Perawat Nasional memasuki tahun ke-49 dengan mengambil tema Gapai Sejahtera dengan Profesionalisme. Tema ini diambil dengan harapan peningkatan kesejahteraan di kalangan perawat yang diimbangi profesionalisme dalam bekerja.</p>\r\n\r\n<p>Cikal bakal organisasi keperawatan di Indonesia sebenarnya sudah dimulai sejak masa kolonial. Melansir ppni-inna.org organisasi keperawatan berkembang pesat dimulai dengan adanya rumah sakit Residen Vpabst (1819) di Batavia (Jakarta).</p>\r\n\r\n<p>Saat itu, Residen Vpabst berubah menjadi Stadsverband (1919) dan berkembang lagi menjadi Central Burgerlijke Zieken Inrichting (CBZ) di daerah Salemba. Kini, rumah sakit tersebut dikenal dengan Rumah Sakit Cipto Mangunkusumo (RSCM).</p>\r\n\r\n<p>Pembangunan rumah sakit berjalan beriringan dengan lahirnya perkumpulan profesi keperawatan. Di RSCM saat itu terdapat sedikitnya empat organisasi keperawatan yakni Perkumpulan Kaum Verpleger fster Indonesia (PKVI), Persatuan Djuru Kesehatan Indonesia (PDKI), Persatuan Perawat Indonesia (PPI), dan Ikatan Perawat Indonesia (IPI).</p>\r\n\r\n<p>Organisasi-organisasi perawat saat itu mengadakan pertemuan yang juga dihadiri oleh tokoh-tokoh keperawatan berpengaruh saat itu, di antaranya Ojo Radiat, HB. Barnas dan Drs. Maskoed Soerjasumantri. Mereka sepakat untuk melakukan fusi dan menyatukan diri dalam satu wadah organisasi yang saat itu masih bernama Persatuan Perawat Nasional.</p>\r\n\r\n<p>Penggabungan atau fusi organisasi perawat tersebut dilakukan di Ruang Demontration Jl. Prof Eykman Bandung No.34 Bandung Jawa Barat, sejak saat itu Tanggal 17 Maret 1974 disetujui dan dilakukan pernyataan bersama terbentuknya Persatuan Perawat Nasional Indonesia, serta membentuk suatu kepanitian untuk mempersiapkan Kongres Pertama yang dilangsungkan pada tahun 1976.</p>\r\n\r\n<p>PPNI berkomitmen untuk memberikan perlindungan bagi masyarakat dan profesi keperawatan dengan menyusun RUU keperawatan yang saat ini terus diperjuangkan untuk disyahkan menjadi undang-undang. Dalam usianya yang tergolong usia produktif, PPNI telah tumbuh untuk menjadi organisasi yang mandiri.</p>\r\n\r\n<p>PPNI saat ini berproses pada kematangan organisasi dan mempersiapkan anggotanya dalam berperan nyata pada masyarakat dengan memperkecil kesenjangan dalam pelayanan kesehatan.</p>\r\n\r\n<p>Selain itu, untuk mempermudah masyarakat dalam mendapatkan akses pelayanan kesehatan, serta mendapatkan kesamaan pelayanan yang berkualitas.</p>\r\n\r\n<p>PPNI bersama anggotanya akan besama mengawal profesi keperawatan Indonesia pada arah yang benar, sehingga profesi keperawatan dapat mandiri dan bermartabat serta bersaing secara nasional dan international.</p>\r\n\r\n<p>Sumber :&nbsp;<a href=\"https://www.suara.com/news/2023/03/16/181000/sejarah-hari-perawat-nasional-terbentuknya-ppni-dan-tema-tahun-2023\">suara.com</a></p>\r\n', '3-69.jpg', '2023-03-20', 3, 1),
(70, 'OUTBOND DAN GATHERING RUMAH SAKIT PELITA INSANI MARTAPURA DENGAN KALBE NUTRITIONALS', '<p><strong>Outbond dan Gathering Rumah Sakit Pelita Insani Martapura dengan Kalbe Nutritionals dengan tema&nbsp;&quot;Refresh and Recharge&quot;</strong> diadakan di Pesona Modern Waterboom Sabtu 20 Mei 2023. Kegiatan ini diadakan rutin program dari Kepegawaian dan SDM (Pengembangan SDM) untuk seluruh keluarga besar Rumah Sakit Pelita Insani Martapura dalam rangka road to HUT RSPI ke 10, kegiatan ini dihadiri langsung oleh Pemilik RS Pelita Insani dalam hal ini Direktur Utama PT. Pelita Insani Mulia Ibu Hj. Nurjannah dan keluarga serta pembukaan acara dibuka langsung oleh Direktur RS Pelita Insani dr. Gabril Taufiq Basri, Sp. PD., FINASIM hadir juga Brand Head Operational Kalbe Nutrionals. Dengan konsep interaktif Outbond dilead langsung oleh Professional Trainer dari Kalbe Academia, acara berlangsung sangat seru dan meriah karena dihadiri oleh 240 orang untuk 2 sesi pagi dan siang. Kegiatan ini diharapkan memberikan makna untuk semua pegawai bagaimana arti kebersamaan, kerjasama tim membangun lagi kebersamaan, kekompakan, kekeluargaan serta berguna dalam meningkatkan soft skills bagi peserta. Berikut tujuan outbond:</p>\r\n\r\n<ol>\r\n	<li>Meningkatnya Produktivitas Karyawan</li>\r\n	<li>Kerja Sama Tim Semakin Solid</li>\r\n	<li>Meningkatkan Kemampuan Sumber Daya Manusia (SDM)</li>\r\n	<li>Memunculkan Potensi Leader Baru</li>\r\n	<li>Menghasilkan Ide Kreatif dan Inovatif</li>\r\n</ol>\r\n\r\n<p>Output dari keseluruhan kegiatan adalah untuk memastikan pegawai memberikan pelayanan kesehatan terbaik kepada masyarakat kab. Banjar khususnya Kalimantan Selatan umumnya.&nbsp;<a href=\"https://www.instagram.com/explore/tags/roadtohutrspike10/\">#roadtoHUTRSPIke10</a></p>\r\n\r\n<p><strong><a href=\"https://www.instagram.com/p/Csh4MLwvsSK/\">Sumber : Instagram RS Pelita Insani</a></strong></p>\r\n', '1-70.png', '2023-05-23', 1, 1),
(71, 'BAKTI SOSIAL DONOR DARAH HUT KE-10', '<p><strong>Dalam Rangka Merayakan Hari Ulang Tahun ke 10 Rumah Sakit Pelita Insani</strong> bekerjasama dengan PMI UDD Kab. Banjar mengadakan <strong>Bakti Sosial Donor Darah</strong> :</p>\r\n\r\n<ul>\r\n	<li><strong>Hari : Sabtu 17 Juni 2023</strong></li>\r\n	<li><strong>Pukul : 08.00 WITA s.d Selesai</strong></li>\r\n	<li><strong>Tempat : Rumah Sakit Pelita Insani</strong></li>\r\n</ul>\r\n\r\n<p><strong>Dapatkan 100 Paket Sembako untuk 100 Pendonor</strong> yang mendonorkan darahnya. Ayo bersama-sama bergerak dari <strong>&ldquo;LANGKAH KECIL untuk PERUBAHAN BESAR&rdquo;</strong></p>\r\n\r\n<p><strong>Sumber :&nbsp;<a href=\"https://www.instagram.com/p/Cs0EvnvvKwy/\">Instagram RSPI</a></strong></p>\r\n', '1-71.jpg', '2023-05-31', 1, 1),
(72, 'KHITANAN MASSAL HUT KE-10 RS PELITA INSANI', '<p><strong>KHITANAN MASSAL (Gratis Tidak Dipungut Biaya Apapun)&nbsp;</strong>Dalam rangkaian HUT RS Pelita Insani ke 10<br />\r\n<br />\r\n<strong>Waktu Pelaksanaan</strong></p>\r\n\r\n<ul>\r\n	<li>Hari/Tgl : Sabtu, 24 Juni 2023</li>\r\n	<li>Waktu : 08.00 WITA</li>\r\n	<li>Tempat : Rumah Sakit Pelita Insani</li>\r\n</ul>\r\n\r\n<p><strong>Periode Pendaftaran dan Skrining </strong>(Peserta langsung dibawa saat melaksanakan pendaftaran)</p>\r\n\r\n<ul>\r\n	<li>Hari/Tgl : Jumat, 16 Juni 2023</li>\r\n	<li>Waktu : 08.30 WITA</li>\r\n	<li>Tempat : Rumah Sakit Pelita insani</li>\r\n</ul>\r\n\r\n<p>Lengkapi syarat pendaftaran dan syarat peserta seperti yang tertera diatas.&nbsp;</p>\r\n\r\n<p><a href=\"https://www.instagram.com/explore/tags/stayforhealth/?hl=en\">#stayforhealth</a>&nbsp;<a href=\"https://www.instagram.com/explore/tags/roadtohutrspike10/?hl=en\">#RoadtoHUTRSPIke10</a></p>\r\n\r\n<p>Sumber :&nbsp;<a href=\"https://www.instagram.com/p/CtGdfGkPh-G/?hl=en\">Instagram RSPI</a></p>\r\n', '1-72.jpg', '2023-06-15', 1, 1),
(73, 'FUN RUN 10K FOR 10TH KOLABORASI RS PELITA INSANI DENGAN KOMUNITAS LARI BANJARBARU RUNNING COMMUNITY', '<p>Alhamdulillah Sabtu 17 Juni 2023 terselenggaranya <strong>Fun Run 10K for 10TH Kolaborasi RS Pelita Insani dengan Komunitas Lari</strong>&nbsp;<strong>Banjarbaru Running Community</strong>. Acara ini dihadiri lebih kurang sekitar 50-70 peserta, para runners berlari sejauh 10KM untuk merayakan 1 dekade atau HUT RSPI ke 10 tahun ini.<br />\r\n<br />\r\nAcara ini juga disponsori oleh Pocari Sweat&nbsp;(merupakan salah satu minuman isotonic yang mengandung berbagai ion penting untuk menggantikan cairan yang hilang dalam tubuh),&nbsp;One Eighty Run turut serta mensponsori hadiah-hadiah doorprize para pemenang seperti Bidon, Socks dari Saysky dan Topi Ciele serta Ninetie Coffe&nbsp;berkontribusi menyediakan refreshment buah. Terima kasih diucapkan untuk para runners yang sudah bergabung dengan acara ini, terima kasih juga untuk para sponsor dan semua yang terlibat (panitia penyelenggara) semoga acara ini bisa terus dilaksanakan. Mengingat banyak sekali manfaat dari lari merupakan olahraga yang baik bagi tubuh. Lari merupakan kategori olahraga kardiovaskular yang sempurna. Manfaat lari:<br />\r\n1. Meningkatkan Stamina<br />\r\n2. Mencegah Obesitas<br />\r\n3. Mengatasi Stress<br />\r\n4. Menyehatkan Jantung</p>\r\n', '1-73.jpg', '2023-06-27', 1, 1),
(74, 'PELAKSANAAN BAKTI SOSIAL DONOR DARAH DALAM RANGKA RANGKAIAN KEGIATAN HUT KE-10 RS PELITA INSANI', '<p>Alhamdulillah, <strong>Pelaksanaan Bakti Sosial Donor Darah kerjasama Rumah Sakit Pelita Insani dengan PMI UDD Kab. Banjar dalam rangkaian HUT RSPI ke 10</strong>. Terima kasih untuk semua pendonor, panitia dan semua pihak yang terlibat yang turut serta ikut berpartisipasi dalam Bakti Sosial Donor Darah. Kantong Darah yang terkumpul sejumlah:<br />\r\n<strong>A. 24 kantong<br />\r\nB. 38 kantong<br />\r\nO. 35 kantong<br />\r\nAB. 8 kantong<br />\r\nTotal 105</strong><br />\r\n<br />\r\nSemoga Allah membalas dengan berjuta kebaikan dan keberkahan dalam hidup kita Aamiin Yaa Rabbal Alamin</p>\r\n', '1-74.jpg', '2023-06-27', 1, 1),
(75, 'BAKTI SOSIAL KHITANAN MASSAL DALAM RANGKA HARI BHAYANGKARA YANG KE 77 BERSAMA POLRES BANJAR DAN PUSKESMAS ARANIO', '<p>Alhamdulillah Telah terlaksana Kegiatan Khitanan Massal yang dimana Tim Medis Rumah Sakit Pelita Insani Martapura turut serta membantu penyelenggaraan dan pelaksanaan <strong>Bakti sosial Khitanan Massal dalam Rangka Hari Bhayangkara yang ke 77 bersama Polres Banjar dan Puskesmas Aranio</strong><br />\r\n<br />\r\nKami&nbsp;Segenap Direksi dan Keluarga Besar RS Pelita Insani mengucapkan Selamat HUT Bhayangkara ke-77, semoga semangat Presisi terus terpatri dalam setiap langkah Polri untuk mewujudkan keadilan dan keamanan bagi seluruh rakyat Indonesia.</p>\r\n', '1-75.jpg', '2023-06-27', 1, 1),
(76, 'PELAKSANAAN KEGIATAN BAKTI SOCIAL KHITANAN MASSAL DALAM RANGKA RANGKAIAN MENUJU HUT RS PELITA INSANI KE-10', '<p>Alhamdulillah telah terlaksana kegiatan&nbsp;rangkaian HUT RS Pelita Insani Martapura ke 10&nbsp;<strong>Khitan Massal sesi 1 </strong>secara gratis yang dilaksanakan Sabtu tanggal 24 Juni 2023. Alhamdulillah sejumlah 50 peserta yang mengikuti khitanan massal RS Pelita Insani, kegiatan ini rutin diadakan Rumah Sakit Pelita Insani Martapura Kegiatan khitanan massal atau sunatan massal merupakan bentuk perhatian RSPI kepada masyarakat yang membutuhkan. Khitanan massal atau sunatan massal dari pandangan Islam adalah merupakan bagian dari syariat Islam, yang diyakini dan wajib hukumnya bagi anak laki laki. Fungsi khitan itu sendiri adalah untuk mempermudah maupun mempercepat proses pembersihan fisik sebagai salah satu syarat sahnya ibadah.<br />\r\n<br />\r\nSedangkan dari sudut pandang medis seperti yang diungkapkan para ahli, khitanan atau sunatan mempunyai faedah yang sangat penting bagi kesehatan , karena membuang anggota tubuh yang menjadi tempat persembunyian kotoran, virus bakteri dan lain lain yang dapat membahayakan kesehatan.&nbsp;<a href=\"https://www.instagram.com/explore/tags/stayforhealth/?hl=en\">#stayforhealth</a></p>\r\n', '1-76.jpg', '2023-06-27', 1, 1),
(77, 'KUNJUNGAN STUDI BANDING DARI RUMAH SAKIT DAERAH IDAMAN KOTA BANJARBARU', '<p>RS Pelita Insani menerima kunjungan Studi Banding dari Rumah Sakit Daerah Idaman Kota Banjarbaru pada hari Senin, 26 Juni 2023 pukul 09.30 Wita, sehubungan dengan persiapan Elektronik Rekam Medik dan Antrian Online yang sudah dijalankan Rumah Sakit Pelita Insani, mudah-mudahan kerjasama yang baik ini akan selalu berkesinambungan dimasa yang akan datang</p>\r\n', '3-77.jpg', '2023-06-27', 3, 1),
(78, 'PELAKSANAAN KEGIATAN BAKTI SOCIAL KHITANAN MASSAL (SESI 2) DALAM RANGKA RANGKAIAN MENUJU HUT RS PELITA INSANI KE-10', '<p>Alhamdulillah pelaksanaan Khitan Massal Gratis sesi 2 Rumah Sakit Pelita Insani terselenggara dengan baik dan lancar lebih kurang 100 peserta (sesi 1 &amp; 2) yang mengikuti kegiatan ini dalam rangkaian HUT RSPI ke 10. Kegiatan ini merupakan bentuk kepedulian RSPI kepada masyarakat. Terima kasih diucapkan untuk semua yang terlibat dari penyelenggara, panitia , sponsor dan bapak ibu orang tua serta peserta khitan, semoga RSPI dapat terus memberikan manfaat sebesar-besarnya untuk masyarakat Aamiin Yaa Rabbal Alamin</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Sumber&nbsp;:&nbsp;<a href=\"https://www.instagram.com/p/CuT4rFoP9KM/?hl=en\">IG RSPI</a></p>\r\n', '1-78.jpg', '2023-07-06', 1, 1),
(79, 'PELATIHAN COMMUNICATION AND INTERPERSONAL SKILLS', '<p>Komunikasi adalah proses pertukaran informasi, pendapat, perasaan atau ide melalui lisan atau tulisan agar pesan yang disampaikan mencapai sasaran atau dipahami oleh orang lain. Komunikasi yang bermakna adalah komunikasi yang efektif dimana proses komunikasi tersebut berhasil mencapai sasaran dengan feedback (respon) yang sesuai dengan tujuan individu berkomunikasi. Untuk itu Rumah Sakit Pelita Insani mengadakan <strong>Pelatihan Communication and Interpersonal Skills dengan pembicara Ibu Neka E, M. Psi, Psikolog dan Dian Hasrie A. S.</strong> Si Rabu 2 Agustus 2023 di Aula RS Pelita Insani. Peserta yang mengikuti pelatihan ini terdiri dari unsur tenaga kesehatan Dokter, Perawat, Radiografer, Analis Kesehatan, Apoteker, Front Office dll.</p>\r\n', '1-79.png', '2023-08-11', 1, 1),
(80, 'KUNJUNGAN BPJS BADAN PENYELENGGARA JAMINAN SOSIAL KESEHATAN DALAM RANGKA SUPERVISI DISKUSI DAN IMPLEMENTASI ANTRIAN ONLINE DI FKTRL ', '<p>Kunjungan BPJS Badan Penyelenggara Jaminan Sosial Kesehatan dalam rangka Supervisi Diskusi dan Implementasi Antrian Online di FKTRL Mitra RS Pelita Insani Martapura. RSPI Martapura adalah salah satu FKRTL dengan sistem antrean online yang telah terintegrasi dengan sistem BPJS Kesehatan.<br />\r\n<br />\r\nRSPI dan BPJS Kesehatan selalu berkolaborasi untuk mengedepankan pelayanan terkhusus untuk pasien-pasien BPJS Kesehatan. Peserta BPJS Kesehatan kini tak perlu repot untuk antre pendaftaran berobat. Pertama antrean faskes bisa didaftarkan melalui situs resmi BPJS Kesehatan. Kedua, antrean online faskes BPJS Kesehatan melalui aplikasi Mobile JKN.<br />\r\n<br />\r\nDengan hadirnya sistem antrian online BPJS Kesehatan ini pastinya sangat memudahkan peserta BPJS kesehatan untuk menghemat waktu. Peserta BPJS Kesehatan bisa mendapatkan antrean di mana dan kapan saja asalkan tersedia jaringan internet.</p>\r\n', '1-80.png', '2023-08-11', 1, 1),
(81, 'SELAMAT BERGABUNG DOKTER SPESIALIS ANAK DR. WAHYU BAGUS HANDOKO, SP. A DI RUMAH SAKIT PELITA INSANI MARTAPURA.', '<p>Selamat Bergabung Dokter Spesialis Anak dr. Wahyu Bagus Handoko, Sp. A di Rumah Sakit Pelita Insani Martapura.<br />\r\nBerikut Jadwal Praktek Poliklinik Spesialis Anak hari Selasa dan Jumat (untuk Jam Praktek silahkan Konfirmasi ke Pendaftaran).</p>\r\n\r\n<p>Terima kasih</p>\r\n', '2-81.png', '2023-08-11', 2, 1),
(82, 'RS PELITA INSANI MARTAPURA MENJALIN KERJASAMA DI BIDANG PELAYANAN KESEHATAN DENGAN PONDOK MODERN AL JAUHAR TUNGKARAN MARTAPURA', '<p>Alhamdulillah Rumah Sakit Pelita Insani Martapura berkesempatan silaturahmi dan sepakat menjalin kerjasama di bidang pelayanan kesehatan dengan Pondok Modern Al Jauhar Tungkaran Martapura. Penandatanganan kerjasama ini dihadiri langsung oleh Pimpinan PM Al Jauhar yaitu Ustad H. Ruhul Jihad Fisabilillah, MIRKH selanjutnya Ustad H. Hulaifi Muhammad, BIRKH dan Ustad H. Ahya Ulumiddin, MA serta perwakilan RS Pelita Insani hadir Kabag. Keuangan dan Logistik Kabag. Umum, SDM dan Pemasaran turut hadir juga Direktur Utama PT. Pelita Insani Mulia Ibu Hj. Nurjannah persis dimomen Apel Tahunan Pekan Perkenalan Khutbatul Arsy PM Al Jauhar Tungkaran Martapura Ahad 23 Juli 2023.<br />\r\n<br />\r\nKomitmen RS Pelita Insani dalam upaya memberikan pelayanan kesehatan tidak hanya promotif kuratif dan rehabilitatif penekanan juga kami lakukan dari segi preventif. RS Pelita Insani sepakat melakukan edukasi penyuluhan kesehatan kepada santri-santi, juga melakukan skrining kesehatan serta pemeriksaan rutin dan konsultasi oleh Dokter kepada santri-santri PM Al Jauhar.<br />\r\n<br />\r\nSuatu kehormatan dan kebanggaan serta RS Pelita Insani mengucapkan terima kasih telah ditunjuk sebagai mitra dalam memberikan pelayanan kesehatan bagi santri di PM Al Jauhar Tungkaran Martapura.</p>\r\n', '1-82.png', '2023-08-11', 1, 1),
(83, 'ACARA CEREMONIAL DALAM RANGKA 1 DEKADE HUT RUMAH SAKIT PELITA INSANI', '<p>Alhamdulillah telah berlangsung Acara Ceremonial Dalam Rangka 1 Dekade HUT Rumah Sakit Pelita Insani ke 10 Minggu 13 Agustus 2023 di Hotel Q Grand Daffam. Acara dihadiri langsung oleh Jajaran Komisaris PT. Pelita Insani Mulia dan Direksi RS Pelita Insani serta tamu kehormatan Bupati Kab. Banjar Bapak H. Saidi Mansyur, S. Ikom dan Ketua TP PKK Kab. Banjar Ibu Hj. Nur Gita Tiyas, S. Pd,. M. Pd. Tamu yang hadir seperti Sekertaris Daerah Kab. Banjar, Ketua DPRD Kab. Banjar juga ikut memeriahkan acara 1 Dekade RS Pelita Insani, hadir juga dari unsur Rumah Sakit Mitra Kab. Banjar dan Banjarbaru diwakili oleh Direktur Rumah Sakit, Perusahaan, Asuransi, Perbankan, Dokter Spesialis, Alim Ulama, Rekan Media dan seluruh keluarga besar RS Pelita Insani. Acara dibuka dengan tarian yang dipersembahkan langsung oleh pegawai RSPI dari unit Rawat Jalan, lalu doa disampaikan oleh Pimpinan PM Al Jauhar KH. Ruhul Jihad F. M. IRKH. Selanjutnya Sambutan-Sambutan dari Direktus RS Pelita Insani dan dilanjutkan oleh Bupati Kab. Banjar. Puncak Acara ditandai dengan pemutaran video perjalanan 10 Tahun RS Pelita Insani serta pemotongan tumpeng. Tak lupa juga pemberian plakat bentuk apresiasi kepda mitra-mitra RSPI.<br />\r\n<br />\r\nDan momen berbahagia serta haru datang dari pegawai teladan RS Pelita Insani yang terpilih untuk diberangkatkan umrah atas nama Risfi Aditya, AMK dan pengharagaan setara umrah diberikan kepada pegawai non muslim RS Pelita Insani atas nama Ivan Pele Simare Mare, Amd., KL. Sebagai bentuk ucapan terima kasih PT. Pelita Insani Mulia atas dedikasi Direktur RSPI reward umrah juga diberikan kepada pimpinan RS Pelita Insani. Terakhir acara ditutup dengan pembagian doorprize yang diundi untuk semua tamu undangan.&nbsp;<a href=\"https://www.instagram.com/explore/tags/rspelitainsani1dekade/?hl=en\">#RSPelitaInsani1Dekade</a></p>\r\n', '1-83.png', '2023-08-21', 1, 1),
(84, 'JALAN SEHAT DALAM RANGKA 1 DEKADE HUT RS PELITA INSANI', '<p>Ikuti dan Meriahkan, Jalan Sehat Dalam Rangka 1 Dekade HUT RS Pelita Insani Yang ke 10 Pada Tanggal 17 September 2023.<br />\r\n<br />\r\nPendaftaran Dibuka Mulai :<br />\r\nHari Selasa, 15 Agustus 2023<br />\r\nPagi : 09.00 - 15.00 WITA (Di Pos Security)<br />\r\nMalam : 19.00 - 21.00 WITA (Resepsionis)<br />\r\nTiket: Rp 40.000 (Dapatkan Kaos Acara, Goodie Bag dan Kesempatan memenangkan Grand Prize 1 Unit Motor dan Doorprize Hadiah Total Jutaan Rupiah)<br />\r\n<br />\r\nDaftarkan Diri Anda!!<br />\r\nPESERTA TERBATAS !!!</p>\r\n', '2-84.png', '2023-08-21', 2, 1),
(85, 'PERAYAAN HUT KEMERDEKAAN REPUBLIK INDONESIA KE 78', '<p>Keseruan perayaan memperingati kemerdekaan Republik Indonesia ke 78, keluarga besar RS Pelita Insani mengadakan Senam Sehat dan Lomba-Lomba hari ini Sabtu 19 Agustus 2023. Semua perwakilan unit layanan turut serta mengikuti lomba pagi ini, estafet tepung, estafet kardus untuk grup. Selanjutnya lomba individu terdiri dari makan kerupuk, makan biskuit menggunakan wajah, tiup balon dalam gelas dan lomba monyong sedotan. Perlombaan 17 Agustus merupakan ekspresi dari semangat patriotisme, kebersamaan, dan semangat juang semua keluarga besar RS Pelita Insani.</p>\r\n', '1-85.png', '2023-08-21', 1, 1),
(86, 'RS PELITA INSANI MEMBUKA KELAS DANCE FOR PREGNANCY', '<p>Ada banyak manfaat menari untuk ibu hamil. Selain bisa mengurangi stres dan memperbaiki mood, menari juga bisa menyehatkan tubuh, memperkuat otot, dan menjaga kebugaran tubuh selama kehamilan.<br />\r\n<br />\r\nUntuk itu RS Pelita Insani membuka kelas Dance for Pregnancy. Biaya pendaftaran hanya Rp 35.000 per pertemuan (dengan fasilitas paket Johnson&rsquo;s Baby Maternity Kit dan Edukasi Kehamilan) bersama Bidan Halimah, S. Keb.<br />\r\n<br />\r\nKuota Terbatas untuk 30 orang saja. Informasi pendaftaran hub. 0853 9329 8616.<br />\r\n<br />\r\nBerikut adalah beberapa manfaat menari untuk ibu hamil yang penting untuk diketahui:</p>\r\n\r\n<ol>\r\n	<li>Membantu mengurangi rasa nyeri punggung</li>\r\n	<li>Menjaga berat badan tetap aman</li>\r\n	<li>Melatih dan memperkuat otot dasar panggul</li>\r\n	<li>Mengatasi stres saat hamil</li>\r\n	<li>Membantu memperbaiki pola tidur</li>\r\n	<li>Mendukung proses tumbuh kembang janin</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Sumber <strong><a href=\"https://www.instagram.com/p/CwOe38vPVKs/?igshid=MzRlODBiNWFlZA%3D%3D\">IG RS Pelita Insani</a></strong></p>\r\n', '1-86.png', '2023-08-22', 1, 1),
(87, 'PELAKSANAAN EDUKASI DAN SKRINING TIM MEDIS RS PELITA INSANI KEPADA SANTRI-SANTRI PM AL JAUHAR ', '<p>Kerjasama Layanan Kesehatan antara RS Pelita Insani dan PM Al Jauhar Tungkaran Martapura dengan bentuk pelaksanaan Edukasi dan Skrining Tim Medis RS Pelita Insani kepada Santri-Santri PM Al Jauhar berjumlah lebih kurang 100 Santri diskrining kesehatannya bertujuan untuk mendeteksi dini santri yang memiliki masalah kesehatan agar segera mendapatkan penanganan sedini mungkin serta tersedianya data atau informasi untuk menilai perkembangan kesehatan para santri.</p>\r\n\r\n<p>Sumber :&nbsp;<a href=\"https://www.instagram.com/p/CwMJ4jXPraC/?hl=en\">IG RS Pelita Insani</a></p>\r\n', '1-87.JPG', '2023-08-23', 1, 1),
(89, 'SELAMAT BERGABUNG DOKTER GIGI drg. GABILA AULIANA', '<p>Selamat Bergabung Dokter Gigi drg. Gabila Auliana di Rumah Sakit Pelita Insani Martapura.<br />\r\nBerikut Jadwal Senin Poliklinik Spesialis Gigi hari Selasa s.d Kamis Pukul 08.00 s.d 13.00 WITA. Terima kasih</p>\r\n', '2-89.png', '2023-09-01', 2, 1),
(90, 'KEGIATAN KAJI BANDING RUMAH SAKIT PELITA INSANI MARTAPURA KE RUMAH SAKIT UMUM DAERAH H. DAMANHURI BARABAI', '<p>Kegiatan Kaji Banding Rumah Sakit Pelita Insani Martapura ke Rumah Sakit Umum Daerah H. Damanhuri Barabai berlangsung selama 2 hari Senin dan Selasa tanggal 19 dan 20 September 2023. RSPI dan RSHD memiliki kesamaan dari segi penggunaan Sistem Rumah Sakit, kaji banding yang dilakukan terkait memaskimalkan lagi secara efektif efisien pelaksanaan IT Informasi Teknologi yang sudah berjalan di masing-masing Rumah Sakit. Terima kasih diucapkan kepada RSUD H. Damanhuri Barabai yang sudah berkenan menyambut RSPI dan berbagi informasi diskusi, semoga silaturahmi ini tetap terjaga selalu.</p>\r\n', '1-90.png', '2023-09-20', 1, 1),
(91, 'SELAMAT BERGABUNG DOKTER SPESIALIS OBSTETRI DAN GINEKOLOGI', '<p>Selamat Bergabung Dokter Spesialis Obstetri dan Ginekologi dr. H. Gusti Irawan, Sp.OG di Rumah Sakit Pelita Insani Martapura.<br />\r\n<br />\r\nBerikut Jadwal Senin Poliklinik Spesialis Kebidanan dan Kandungan hari Sabtu Pukul 14.00 s.d 16.00 WITA. Terima kasih</p>\r\n', '2-91.png', '2023-10-17', 2, 1),
(92, 'SELAMAT BERGABUNG DOKTER SPESIALIS MATA', '<p>Selamat Bergabung Dokter Spesialis Mata dr. H. Sulistyo Rinny, Sp. M di Rumah Sakit Pelita Insani Martapura.<br />\r\n<br />\r\nBerikut Jadwal Senin Poliklinik Spesialis Mata hari Rabu dan Kamis Pukul 09.00 s.d 11.00 WITA. Terima kasih</p>\r\n', '2-92.png', '2023-10-17', 2, 1),
(93, 'DUTA MOBILE JKN RS PELITA INSANI', '<p>Hanya dengan satu genggaman aplikasi Mobile JKN, memudahkan peserta JKN mengakses informasi dan layanan.<br />\r\n<br />\r\nMobile JKN menawarkan kemudahan bagi peserta dengan menyediakan menu peserta yang berisi fitur peserta, kartu peserta, ubah data peserta, dan pendaftaran peserta: menu tagihan yang berisi fitur premi, catatan pembayaran, cek virtual account, dan pembayaran: menu pelayanan yang berisi riwayat pelayanan, pendaftaran pelayanan, dan skrining; dan yang terakhir adalah menu umum yang berisi fitur info JKN, lokasi, pengaduan dan pengaturan aplikasi.<br />\r\n<br />\r\nRimawati Eka P, A. Md. RIMK<br />\r\nDuta Mobile JKN RS Pelita Insani</p>\r\n', '1-93.png', '2023-10-17', 1, 1),
(94, 'BOKING ANTRIAN RAWAT JALAN MENGGUNAKAN MOBILE JKN', '<p>Mobile JKN merupakan aplikasi yang dirilis oleh BPJS Kesehatan untuk mempermudah akses dari setiap anggota BPJS untuk mengakses berbagai macam informasi terkait Kesehatan.<br />\r\n<br />\r\nMobile JKN merupakan aplikasi yang dirancang khusus untuk pelanggan BPJS, dengan aplikasi ini anda dapat dengan mudah mengakses berbagai layanan dari BPJS.</p>\r\n', '3-94.png', '2023-10-17', 3, 1),
(95, 'DAFTAR RAWAT JALAN KE RS PELITA INSANI MELALUI PI-CARE', '<p>Halo Sobat RSPI, sekarang pendaftaran berobat Rawat Jalan ke RS Pelita Insani bisa lebih mudah dengan menggunakan layanan WhatsApp PI-Care (Pelita Insani Care). Layanan ini memberikan kemudahan bagi pasien Rawat Jalan untuk mendaftar ke Poliklinik RSPI (pendaftaran H-1) dari rumah untuk pasien Rawat Jalan Umum, BPJS, Asuransi &amp; Pihak ke 3, serta pasien sudah bisa mendapatkan nomor antrian pelayanan di Poliklinik RSPI</p>\r\n', '2-95.png', '2023-10-17', 2, 1),
(96, 'Media Workshop “Transformasi Mutu Layanan JKN, Wujudkan Layanan JKN Berkesinambungan”', '<p>Alhamdulillah Rumah Sakit Pelita Insani Martapura Terpilih Sebagai Tuan Rumah Untuk Acara Media Workshop &ldquo;Transformasi Mutu Layanan JKN, Wujudkan Layanan JKN Berkesinambungan&rdquo; acara dihadiri langsung oleh yang terhormat Direktur Utama BPJS Pusat Prof. dr. Ali Ghufron Mukti, M.Sc., Ph.D, AAK dan tamu kehormatan lain sekaligus menjadi narasumber yaitu Tulus Abadi (Ketua Yayasan Lembaga Konsumen Indonesia), Timboel Siregar (Koorinator Advokasi BPJS Watch), Diah Setyani Saminarsih (CEO and Faunder CISDI), serta dr. Gabril Taufiq Basri, Sp. PD, FINASIM( Direktur RS Pelita Insani Martapura).<br />\r\n<br />\r\nAcara Tersebut Juga Dihadiri Oleh 40 Media Nasional, dan 10 Media Lokal. Acara Yang Berlangsung Dari Jam 10.30 s.d 12.30 WITA berjalan lancar.</p>\r\n', '1-96.JPG', '2023-12-07', 1, 1),
(97, 'Kegiatan Visitasi Pelayanan Dialisis', '<p>Kegiatan Visitasi Pelayanan Dialisis dalam rangka Penilaian Izin Penyelenggaraan Pelayanan Dialisis di Rumah Sakit Pelita Insani Martapura. Tim Visitasi terdiri dari unsur Kementrian Kesehatan RI, Dinas Kesehatan Prov. Kalimantan Selatan, Dinas Kesehatan Kab. Banjar dan Perhimpunan Nefrologi Indonesia. Acara ditutup dengan Penyampaian hasil Berita Acara oleh Tim Perizinan dan Pengembangan Fasyankes dan alhamdulillah Rumah Sakit Pelita Insani mendapatkan hasil baik. Harapannya semoga RS Pelita Insani senantiasa memberikan pelayanan kesehatan terbaik berkualitas untuk masyarakat Kab. Banjar khususnya dan Kalimantan Selatan umumnya.</p>\r\n', '1-97.JPG', '2023-12-07', 1, 1),
(98, 'Workshop Peran Kesehatan Mental Ibu dan Optimalisasi Potensi Tumbuh Kembang Anak untuk mencegah Stunting', '<p>Dalam Rangka Hari Kesehatan Nasional alhamdulillah telah berlangsung Workshop Peran Kesehatan Mental Ibu dan Optimalisasi Potensi Tumbuh Kembang Anak untuk mencegah Stunting diselenggarakan berkat kerjasama Rumah Sakit Pelita Insani Martapura dengan Persit Kartika Chandra Kirana Kodim 1006/Banjar. Acara ini dihadiri dan dibuka langsung oleh Bupati Kab. Banjar dalam hal ini diwakili oleh Kepala Dinas Kesehatan Kab. Banjar.<br />\r\n<br />\r\nHadir juga memberi sambutan Direktur RS Pelita Insani dr. H. Gabril Taufiq Basri, Sp. PD. FINASIM, Ketua Perait Chandra Kirana Kodim 1006/Banjar Ny. Alin Zulfiker Sembiring. Turut serta hadir Komisaris PT. Pelita Insani Mulia Ibu Hj. Nabila Farhana, Ketua DWP Kab. Banjar Ibu Tantri Verawati Hilman, S. IP, M. Si, Ketua DWP Kota Banjarbaru Ibu Syarifah Mariatul Qiftiah, Ketua IIDI Kab. Banjar Banjarbaru Ibu Bardiati Ulfah Atjo, S.ST., M.Keb dll. Peserta yang hadir kali ini perwakilan dari Anggota Persit Chandra Kirana Kodim 1006/Banjar serta dari unsur Tenaga Kesehatan, Kelurahan, Kecamatan serta Masyarakat Umum. Keseluruhan acara berlangsung sangat interaktif antara narasumber dan para peserta banyak sekali materi-materi yang sangat bermanfaat dan tentunya aplikatif terkait pentingnya kesehatan mental ibu hamil maupun pasca melahirkan dalam optimalisasi tumbuh kembang anak. Sampai berjumpa dikesemlatan selanjutnya.<br />\r\n<br />\r\nTerima kasih diucapkan untuk seluruh pihak yang terkait sponsor, panitia, narasumber dan para peserta.</p>\r\n', '1-98.JPG', '2023-12-07', 1, 1),
(99, 'Rumah Sakit Pelita Insani Martapura menjadi salah satu bagian dari Aksi Bela Palestina Pawai Akbar (Jalan Sehat for Palestine)', '<p>Alhamdulillah Rumah Sakit Pelita Insani Martapura menjadi salah satu bagian dari Aksi Bela Palestina Pawai Akbar (Jalan Sehat for Palestine) Ahad 3 Des 2023 di Lapangan Murjani Banjarbaru. RSPI mendirikan posko kesehatan untuk memfasilitasi layanan kesehatan para peserta Aksi Bela Palestina. RSPI juga berkolaborasi dengan Dinas Kesehatan Kota Banjarbaru serta RSUD Idaman Banjarbaru. Kegiatan ini dihadiri ribuan peserta dan dibuka langsung oleh Walikota Banjarbaru serta suatu kehormatan untuk semua warga Banjarbaru karena Aksi Bela Palestina ini bergabung bersama kita Duta Besar Palestina dan Tokoh Nasional Ustadz Bactiar Nasir</p>\r\n', '1-99.jpeg', '2023-12-07', 1, 1),
(100, 'LAYANAN VAKSIN MENINGITIS DAN INFLUENZA ', '<p>RS Pelita Insani Martapura sekarang sudah bisa melayani Vaksin Meningitis &amp; Influenza untuk&nbsp;ibadah umroh, haji dan perjalanan internasional.</p>\r\n\r\n<p><strong>Sudah Mendapatkan :</strong></p>\r\n\r\n<ul>\r\n	<li>Buku Kuning / ICV</li>\r\n	<li>Konsultasi Dokter</li>\r\n</ul>\r\n\r\n<p><strong>Jam Pelayanan Vaksin</strong></p>\r\n\r\n<ul>\r\n	<li>Hari : Senin s/d Sabtu</li>\r\n	<li>Jam : 09.00 - 12.00 WITA</li>\r\n</ul>\r\n\r\n<p><strong>Informasi dan Pendaftaran : 081251398030</strong></p>\r\n', '1-100.png', '2024-01-08', 1, 1),
(101, 'LAYANAN POLIKLINIK BEDAH', '<p>Layanan Spesialis Poliklinik Bedah Rumah Sakit Pelita Insani Martapura. Menerima Pasien Umum, BPJS dan Asuransi.</p>\r\n', '2-101.png', '2024-01-29', 2, 1),
(102, 'LAYANAN POLIKLINIK SARAF', '<p>Layanan Dokter Spesialis&nbsp;Poliklinik Syaraf Rumah Sakit Pelita Insani Martapura. Menerima Pasien Umum, BPJS dan Asuransi.<br />\r\n&nbsp;</p>\r\n', '2-102.png', '2024-01-29', 2, 1),
(103, 'LAYANAN POLIKLINIK MATA', '<p>Layanan Dokter Spesialis Poliklinik Mata Rumah Sakit Pelita Insani Martapura. Menerima Pasien Umum, BPJS dan Asuransi.</p>\r\n', '2-103.png', '2024-01-29', 2, 1),
(104, 'LAYANAN POLIKLINIK GIGI & MULUT', '<p>Layanan Umum Spesialis Dokter Poliklinik Gigi dan Mulut Rumah Sakit Pelita Insani Martapura, menerima pasien BPJS, Umum, &amp; Asuransi<br />\r\n&nbsp;</p>\r\n', '2-104.png', '2024-01-29', 2, 1),
(105, 'LAYANAN POLIKLINIK OBSTETRI & GINEKOLOGI', '<p>Layanan Praktek Poliklinik Dokter Spesialis&nbsp;Obstetri dan Ginekologi (Kandungan dan Kebidanan) RS Pelita Insani Martapura, Menerima pasien BPJS, Umum, &amp; Asuransi</p>\r\n', '2-105.png', '2024-01-29', 2, 1),
(106, 'LAYANAN POLIKLINIK ANAK', '<p>Layanan Dokter Spesialis Poliklinik Anak Rumah Sakit Pelita Insani Martapura. Menerima Pasien Umum, BPJS dan Asuransi.<br />\r\n&nbsp;</p>\r\n', '2-106.png', '2024-02-03', 2, 1),
(107, 'LAYANAN POLIKLINIK REHABILITASI MEDIK', '<p>Layanan Dokter Spesialis Poliklinik Rehabilitasi Medik Rumah Sakit Pelita Insani Martapura. Menerima Pasien Umum, BPJS dan Asuransi.<br />\r\n&nbsp;</p>\r\n', '2-107.png', '2024-02-03', 2, 1),
(108, 'LAYANAN POLIKLINIK PENYAKIT DALAM', '<p>Layanan Dokter Spesialis Poliklinik Penyakit Dalam Rumah Sakit Pelita Insani Martapura. Menerima Pasien Umum, BPJS dan Asuransi.<br />\r\n&nbsp;</p>\r\n', '2-108.png', '2024-02-03', 2, 1),
(109, 'PAKET MEDICAL CHECK UP 2024 RS PELITA INSANI', '<p>Dalam dunia kesehatan, MCU merupakan singkatan dari Medical Check Up. Medical Check Up adalah sebuah prosedur yang ditujukan untuk mengetahui kondisi kesehatan secara menyeluruh.<br />\r\n<br />\r\nTujuan Medical Check Up biasanya untuk evaluasi kesehatan agar bisa mencegah penyakit sedari dini sebelum bertambah parah.<br />\r\n<br />\r\nManfaat Medical Check Up untuk kesehatan<br />\r\nPemeriksaan menyeluruh dengan Medical Check Up (MCU) bisa dilakukan mulai dari remaja usia 18 tahun hingga dewasa. American Medical Association merekomendasikan Anda untuk MCU rutin minimal 1 tahun sekali.<br />\r\n<br />\r\nBerikut Paket Medical Check Up Rumah Sakit Pelita Insani Martapura. Informasi Pendaftaran Hubungi 0812 5139 8030</p>\r\n', '1-109.png', '2024-02-03', 1, 1),
(110, 'PAKET MEDICAL CHECK UP PRAKERJA', '<p>Dalam dunia kesehatan, MCU merupakan singkatan dari Medical Check Up. Medical Check Up adalah sebuah prosedur yang ditujukan untuk mengetahui kondisi kesehatan secara menyeluruh.<br />\r\n<br />\r\nTujuan Medical Check Up biasanya untuk evaluasi kesehatan agar bisa mencegah penyakit sedari dini sebelum bertambah parah.<br />\r\n<br />\r\nManfaat Medical Check Up untuk kesehatan<br />\r\nPemeriksaan menyeluruh dengan Medical Check Up (MCU) bisa dilakukan mulai dari remaja usia 18 tahun hingga dewasa. American Medical Association merekomendasikan Anda untuk MCU rutin minimal 1 tahun sekali.<br />\r\n<br />\r\nBerikut Paket Medical Check Up Rumah Sakit Pelita Insani Martapura. Informasi Pendaftaran Hubungi 0812 5139 8030</p>\r\n', '1-110.png', '2024-02-03', 1, 1),
(111, 'PAKET MEDICAL CHECK UP PENDIDIKAN', '<p>Dalam dunia kesehatan, MCU merupakan singkatan dari Medical Check Up. Medical Check Up adalah sebuah prosedur yang ditujukan untuk mengetahui kondisi kesehatan secara menyeluruh.<br />\r\n<br />\r\nTujuan Medical Check Up biasanya untuk evaluasi kesehatan agar bisa mencegah penyakit sedari dini sebelum bertambah parah.<br />\r\n<br />\r\nManfaat Medical Check Up untuk kesehatan<br />\r\nPemeriksaan menyeluruh dengan Medical Check Up (MCU) bisa dilakukan mulai dari remaja usia 18 tahun hingga dewasa. American Medical Association merekomendasikan Anda untuk MCU rutin minimal 1 tahun sekali.<br />\r\n<br />\r\nBerikut Paket Medical Check Up Rumah Sakit Pelita Insani Martapura. Informasi Pendaftaran Hubungi 0812 5139 8030</p>\r\n', '1-111.png', '2024-02-03', 1, 1),
(112, 'KELAS PRENATAL EXERCISE (OLAHRAGA UNTUK IBU HAMIL)', '<p><strong>Banyak ibu hamil yang mengabaikan olahraga selama kehamilan,</strong> padahal manfaatnya sangat bagus buat ibu hamil dan janin.<br />\r\n<br />\r\nSeringnya pas hamil itu ngerasa capek, lelah, lesu, apalagi bumil masih sambil kerja.<br />\r\nTapi persiapan fisik, nafas, dan mental selama hamil itu sangat penting, terutama untuk mengurangi kecemasan saat persalinan nanti.<br />\r\nDisini juga sangat diperlukan peran para suami<br />\r\n<br />\r\nInsyaAllah ini akan terekam oleh janin bahwa Cinta Ayah bundanya itu luar biasa, dan bumil nantinya akan terhindar dari postpartum blues (depresi setelah melahirkan). Karna sudah dibangun komunikasi sejak kehamilan dengan pasangan dan juga janin.<br />\r\n<br />\r\nYuk pak suami dukung istrinya buat ikut kelas prenatal exercise di Rs pelita Insani.<br />\r\n<strong>Info dan pendaftaran<br />\r\nBidan Halimah : 0853-9329-8616</strong></p>\r\n', '1-112.jpg', '2024-02-03', 1, 1),
(113, 'LAYANAN POLIKLINIK JANTUNG & PEMBULUH DARAH', '<p>Layanan Dokter Spesialis Poliklinik Jantung dan Pembuluh Darah Rumah Sakit Pelita Insani Martapura. Menerima Pasien Umum, BPJS dan Asuransi.</p>\r\n', '2-113.png', '2024-02-07', 2, 1),
(114, 'AKSI SOSIAL DONOR DARAH', '<p>Menjelang Bulan Suci Ramadhan Pancar Tour Travel&nbsp;<a href=\"https://www.instagram.com/pancartour/\">@pancartour</a>&nbsp;bersama Rumah Sakit Pelita Insani Martapura dan UDD Palang Merah Indonesia Kab. Banjar&nbsp;<a href=\"https://www.instagram.com/pmikabbanjar/\">@pmikabbanjar</a>&nbsp;mengadakan Aksi Sosial Donor Darah yang Insyaa Allah diadakan pada<br />\r\nHari/ Tanggal: Sabtu/9 Maret 2024<br />\r\nPukul: 07.30-12.00 WITA<br />\r\nTempat: Halaman Kantor Pancar Tour Travel Jalan A. Yani KM. 39 Martapura Kab. Banjar<br />\r\n(Pendaftaran langsung ditempat sesuai kehadiran)<br />\r\n<br />\r\nDapatkan Paket Sembako untuk 100 Pendonor Pertama.</p>\r\n', '2-114.png', '2024-03-05', 2, 1),
(118, 'JADWAL PRAKTEK DOKTER SPESIALIS RUMAH SAKIT PELITA INSANI MARTAPURA', '', '2-118.png', '2025-07-13', 2, 1),
(119, 'JADWAL LIBUR PRAKTEK DOKTER POLIKLINIK SARAF', '', '2-119.jpeg', '2025-08-05', 2, 1);

--
-- Trigger `t_konten`
--
DELIMITER $$
CREATE TRIGGER `time_t_konten` BEFORE INSERT ON `t_konten` FOR EACH ROW set new.tgl_entry=now()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_layanan`
--

CREATE TABLE `t_layanan` (
  `kd_layanan` varchar(20) NOT NULL,
  `nama_layanan` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `t_layanan`
--

INSERT INTO `t_layanan` (`kd_layanan`, `nama_layanan`) VALUES
('K001', 'Layanan Medis');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_mitra`
--

CREATE TABLE `t_mitra` (
  `id_mitra` int(11) NOT NULL,
  `nama` text NOT NULL,
  `gambar` text NOT NULL,
  `jenis` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `t_mitra`
--

INSERT INTO `t_mitra` (`id_mitra`, `nama`, `gambar`, `jenis`) VALUES
(1, 'Adira Insurance', 'Adira-insurance.png', '1'),
(2, 'AIA the real life company', 'AIA.png', '1'),
(3, 'Allianz', 'Allianz.png', '1'),
(4, 'Astra Life', 'Astra-Life.png', '1'),
(5, 'ACA Asuransi', 'ASURANSI-ACA.png', '1'),
(6, 'Asuransi jiwa sinarmas', 'Asuransi-Jiwa-Sinarmas.png', '1'),
(7, 'Asuransi MAG', 'asuransi-MAG.png', '1'),
(8, 'Asuransi RAMA', 'Asuransi-Rama-Satria-Wibawa.jpeg', '1'),
(9, 'Aviva', 'AVIVA.png', '1'),
(10, 'Avrist', 'AVRIST.png', '1'),
(11, 'AXA Financial', 'Axa-Financial-Indonesia.png', '1'),
(12, 'AXA Mandiri', 'AXA-mandiri.png', '1'),
(13, 'BNI Life', 'bni-life.jpg', '1'),
(14, 'CAR Life', 'CAR-life-insurance.png', '1'),
(15, 'Dayin Mitra', 'Dayin-Mitra.png', '1'),
(16, 'FWD Insurance', 'FWD.png', '1'),
(17, 'Garda Medika', 'Garda-Medika.png', '1'),
(18, 'Hanwha Life', 'Hanwha-Life.png', '1'),
(19, 'Jasa Raharja', 'JASA-RAHARJA.png', '1'),
(20, 'Jiwasraya', 'Jiwasraya.png', '1'),
(21, 'Lippo Insurance', 'lippo-insurance.png', '1'),
(22, 'Mandiri in Health', 'Mandiri-Health.jpg', '1'),
(23, 'Manulife', 'Manulife.png', '1'),
(24, 'Medicillin', 'Medicillin.png', '1'),
(25, 'Mega Insurance', 'Mega-Insurance.png', '1'),
(26, 'Pan Pacific Insurance', 'Pan-Pacific.png', '1'),
(27, 'Asuransi ABDA', 'PT-Asuransi-Bina-dana-Arta.png', '1'),
(28, 'Asuransi Bintang', 'PT-Asuransi-Bintang.png', '1'),
(29, 'Relife ', 'RELIFE-pt-asuransi-recapital-life-insurance.png', '1'),
(30, 'Sequislie', 'SEQUISLIFE.png', '1'),
(31, 'Tugu Mandiri', 'Tugu-Mandiri.png', '1'),
(32, 'WanaArtha Life', 'WANA-ARTHA-LIFE.png', '1'),
(33, 'AA International Indonesia', 'AA-International-Indonesia.png', '2'),
(34, 'AdMedika by Telkom Indonesia', 'AdMedika-Telkom.png', '2'),
(35, 'PT. COB Medika Indonesia', 'cob-assistance.jpg', '2'),
(36, 'Cynergy Care', 'cynergy-care.png', '2'),
(37, 'I\'m Care 177', 'imcare177.png', '2'),
(38, 'Medilum', 'Medilum.png', '2'),
(39, 'MP+ Medika Plaza', 'MP-Medika-Plaza.png', '2'),
(40, 'NTT Data', 'NTT-Data.png', '2'),
(41, 'Owlexa Healthcare', 'owlexa.png', '2'),
(42, 'Platinum Healthcare LLC', 'platinum-health-care-LLC.png', '2'),
(43, 'TMS Healthcare', 'TMS-Healthcare.png', '2'),
(44, 'Angkasa Pura', 'angkasa-pura.png', '3'),
(45, 'Astra International', 'Astra.png', '3'),
(46, 'Auto 2000', 'Auto-2000.png', '3'),
(47, 'Bank Kalsel', 'Bank-Kalsel.png', '3'),
(48, 'Bhumi Rantau Energi', 'BHUMI-RANTAU-ENERGI.png', '3'),
(49, 'BRI', 'bri.png', '3'),
(50, 'BTN Syariah', 'btn-syariah.png', '3'),
(51, 'Cipta Kridatama', 'CIPTA-KRIDATAMA.jpg', '3'),
(52, 'CJ', 'CJ.png', '3'),
(53, 'Hasnur Sinergi', 'Hasnur-sinergi.png', '3'),
(54, 'Hasnur Group', 'Hasnur_Group.png', '3'),
(55, 'Hexindo', 'hexindo.png', '3'),
(56, 'Indo Traktor', 'indo-traktor.png', '3'),
(57, 'Japfa', 'Japfa1.png', '3'),
(58, 'Japfa PT Ciomas Adisatwa', 'japfa-PT-ciomas-Adisatwa.png', '3'),
(59, 'KPP', 'kpp.png', '3'),
(60, 'PAMA', 'PAMA.png', '3'),
(61, 'PLN', 'PLN.png', '3'),
(62, 'Prima Multi Mineral', 'pRIMA-mULTI-MINERAL.jpg', '3'),
(63, 'PT Arutmin', 'PT-Arutmin.png', '3'),
(64, 'Suzuki', 'suzuki.png', '3'),
(65, 'THIESS', 'THIESS.png', '3'),
(66, 'Trakindo CAT', 'trakindo.png', '3'),
(67, 'UD Trucks', 'UD-Trucks.png', '3'),
(68, 'Yayasan Kesehatan Pertamina', 'yayasan-kesehatan-pertamina.jpg', '3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_ruanginap`
--

CREATE TABLE `t_ruanginap` (
  `id_ruanginap` int(11) NOT NULL,
  `nama_ruang` text NOT NULL,
  `harga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `t_ruanginap`
--

INSERT INTO `t_ruanginap` (`id_ruanginap`, `nama_ruang`, `harga`) VALUES
(1, 'Berlian', 700000),
(2, 'Safir', 550000),
(3, 'Ruby', 480000),
(4, 'Zamrud A & Ruby B', 325000),
(5, 'Zamrud B, C, D (Isolasi)', 260000),
(6, 'Yakut A (Anak)', 170000),
(7, 'Yakut B (OB-GYN)', 170000),
(8, 'Yakut C', 150000),
(9, 'ICU', 495000),
(10, 'NICU', 375000),
(11, 'Perinatologi', 165000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_slider`
--

CREATE TABLE `t_slider` (
  `id_slider` int(1) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `t_slider`
--

INSERT INTO `t_slider` (`id_slider`, `gambar`) VALUES
(2, 'slider2.jpg'),
(3, 'slider1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_spesialis`
--

CREATE TABLE `t_spesialis` (
  `kd_spesialis` int(10) NOT NULL,
  `nama_spesialis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `t_spesialis`
--

INSERT INTO `t_spesialis` (`kd_spesialis`, `nama_spesialis`) VALUES
(1, 'Spesialis Anak'),
(2, 'Spesialis Akupunktur Klinik'),
(3, 'Spesialis Anestesiologi dan Terapi Intensif'),
(4, 'Spesialis Andrologi'),
(5, 'Spesialis Bedah'),
(6, 'Spesialis Bedah Anak'),
(7, 'Spesialis Bedah Mulut dan Maksilofasial'),
(8, 'Spesialis Bedah Plastik Rekonstruksi dan Estetik'),
(9, 'Spesialis Bedah Saraf'),
(10, 'Spesialis Bedah Toraks dan Kardiovaskular'),
(11, 'Dokter Gigi'),
(12, 'Spesialis Emergency Medic (Kedaruratan Medik)'),
(13, 'Spesialis Kedokteran Forensik & Medikolegal'),
(14, 'Spesialis Farmakologi Klinik'),
(15, 'Spesialis Geriatri'),
(16, 'Spesialis Gizi Klinik'),
(17, 'Spesialis Jantung dan Pembuluh Darah'),
(18, 'Spesialis Kedokteran Fisik dan Rehabilitasi'),
(19, 'Spesialis Konservasi Gigi'),
(20, 'Spesialis Kedokteran Gigi Anak'),
(21, 'Spesialis Kedokteran Jiwa atau Psikiatri'),
(22, 'Spesialis Penyakit Kulit dan Kelamin'),
(23, 'Spesialis Kedokteran Nuklir'),
(24, 'Spesialis Kedokteran Olahraga'),
(25, 'Spesialis Kedokteran Penerbangan'),
(26, 'Spesialis Layanan Primer'),
(27, 'Spesialis Mata'),
(28, 'Spesialis Mikrobiologi Klinik'),
(29, 'Spesialis Obstetri & Ginekologi (Kebidanan dan Kandungan)'),
(30, 'Spesialis Kedokteran Okupasi (Kerja)'),
(31, 'Spesialis Onkologi Radiasi'),
(32, 'Spesialis Ortodonsia'),
(33, 'Spesialis Bedah Orthopaedi dan Traumatologi'),
(34, 'Spesialis Pulmonologi dan Kedokteran Respirasi (Paru)'),
(35, 'Spesialis Patologi Anatomi'),
(36, 'Spesialis Parasitologi Klinik'),
(37, 'Spesialis Penyakit Dalam'),
(38, 'Spesialis Periodonsia'),
(39, 'Spesialis Patologi Klinik'),
(40, 'Spesialis Penyakit Mulut'),
(41, 'Spesialis Prostodonsia'),
(42, 'Spesialis Radiologi'),
(43, 'Spesialis Radiologi Kedokteran Gigi'),
(44, 'Spesialis Saraf'),
(45, 'Spesialis THT'),
(46, 'Spesialis Urologi'),
(47, 'Sub Spesialis Konsultan Emergensi & Rawat Intensif Anak'),
(48, 'Dokter Gigi Spesialis Bedah Mulut & Maksiofasial');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_user`
--

CREATE TABLE `t_user` (
  `id_user` bigint(20) NOT NULL,
  `username` varchar(200) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `level` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `t_user`
--

INSERT INTO `t_user` (`id_user`, `username`, `password`, `nama`, `level`) VALUES
(1, 'admin', '6db0c5da6b4aca12d06c4c77990e69fe', 'Admin RS Pelita Insani', 1),
(3, 'superadmin', '21232f297a57a5a743894a0e4a801fc3', 'Borneo Media Teknologi', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_utils`
--

CREATE TABLE `t_utils` (
  `id` int(128) NOT NULL,
  `field` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `t_utils`
--

INSERT INTO `t_utils` (`id`, `field`, `url`) VALUES
(1, 'vedika-lite', 'satutitiklima.rspelitainsani.com/vedika-lite'),
(2, 'veda', 'https://7896-36-75-19-59.ngrok-free.app/vedika-lite/veda'),
(3, 'docklaim', 'satutitiklima.rspelitainsani.com/docclaim');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `t_berita`
--
ALTER TABLE `t_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `t_dirgaleri`
--
ALTER TABLE `t_dirgaleri`
  ADD PRIMARY KEY (`id_direktori`);

--
-- Indeks untuk tabel `t_dokter`
--
ALTER TABLE `t_dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indeks untuk tabel `t_fasilitas`
--
ALTER TABLE `t_fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indeks untuk tabel `t_galeri`
--
ALTER TABLE `t_galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indeks untuk tabel `t_jadwalpoli`
--
ALTER TABLE `t_jadwalpoli`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `dokter` (`dokter`),
  ADD KEY `klinik` (`klinik`);

--
-- Indeks untuk tabel `t_kategori`
--
ALTER TABLE `t_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `t_kegiatan`
--
ALTER TABLE `t_kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indeks untuk tabel `t_kelfasilitas`
--
ALTER TABLE `t_kelfasilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_klinik`
--
ALTER TABLE `t_klinik`
  ADD PRIMARY KEY (`id_klinik`);

--
-- Indeks untuk tabel `t_konten`
--
ALTER TABLE `t_konten`
  ADD PRIMARY KEY (`id_konten`);

--
-- Indeks untuk tabel `t_layanan`
--
ALTER TABLE `t_layanan`
  ADD PRIMARY KEY (`kd_layanan`);

--
-- Indeks untuk tabel `t_mitra`
--
ALTER TABLE `t_mitra`
  ADD PRIMARY KEY (`id_mitra`);

--
-- Indeks untuk tabel `t_ruanginap`
--
ALTER TABLE `t_ruanginap`
  ADD PRIMARY KEY (`id_ruanginap`);

--
-- Indeks untuk tabel `t_slider`
--
ALTER TABLE `t_slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indeks untuk tabel `t_spesialis`
--
ALTER TABLE `t_spesialis`
  ADD PRIMARY KEY (`kd_spesialis`);

--
-- Indeks untuk tabel `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `t_utils`
--
ALTER TABLE `t_utils`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `t_berita`
--
ALTER TABLE `t_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `t_fasilitas`
--
ALTER TABLE `t_fasilitas`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `t_galeri`
--
ALTER TABLE `t_galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `t_jadwalpoli`
--
ALTER TABLE `t_jadwalpoli`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- AUTO_INCREMENT untuk tabel `t_kategori`
--
ALTER TABLE `t_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `t_kegiatan`
--
ALTER TABLE `t_kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `t_kelfasilitas`
--
ALTER TABLE `t_kelfasilitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `t_klinik`
--
ALTER TABLE `t_klinik`
  MODIFY `id_klinik` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `t_konten`
--
ALTER TABLE `t_konten`
  MODIFY `id_konten` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT untuk tabel `t_mitra`
--
ALTER TABLE `t_mitra`
  MODIFY `id_mitra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT untuk tabel `t_ruanginap`
--
ALTER TABLE `t_ruanginap`
  MODIFY `id_ruanginap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `t_slider`
--
ALTER TABLE `t_slider`
  MODIFY `id_slider` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `t_spesialis`
--
ALTER TABLE `t_spesialis`
  MODIFY `kd_spesialis` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT untuk tabel `t_user`
--
ALTER TABLE `t_user`
  MODIFY `id_user` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `t_utils`
--
ALTER TABLE `t_utils`
  MODIFY `id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `t_jadwalpoli`
--
ALTER TABLE `t_jadwalpoli`
  ADD CONSTRAINT `t_jadwalpoli_ibfk_1` FOREIGN KEY (`dokter`) REFERENCES `t_dokter` (`id_dokter`),
  ADD CONSTRAINT `t_jadwalpoli_ibfk_2` FOREIGN KEY (`klinik`) REFERENCES `t_klinik` (`id_klinik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
