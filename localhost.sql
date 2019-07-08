-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 08, 2019 at 08:17 AM
-- Server version: 10.3.14-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id8739737_xitkj6baru`
--
CREATE DATABASE IF NOT EXISTS `id8739737_xitkj6baru` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id8739737_xitkj6baru`;

-- --------------------------------------------------------

--
-- Table structure for table `absensi_karyawan`
--

CREATE TABLE `absensi_karyawan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `absen` int(11) NOT NULL,
  `hadir` int(11) NOT NULL,
  `alpa` int(11) NOT NULL,
  `izin` int(11) NOT NULL,
  `sakit` int(11) NOT NULL,
  `terakhir_diupdate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absensi_karyawan`
--

INSERT INTO `absensi_karyawan` (`id`, `nama`, `absen`, `hadir`, `alpa`, `izin`, `sakit`, `terakhir_diupdate`) VALUES
(16, 'AHMAD MAULANA FAHRUDIN', 0, 0, 0, 0, 0, ''),
(17, 'AHMAD MUHIDIN	', 0, 0, 0, 0, 0, ''),
(18, 'ALBANI ALIF SAPUTRA	', 0, 0, 0, 0, 0, ''),
(19, 'ANTON WIJAYA', 0, 0, 0, 0, 0, ''),
(20, 'DANU FAUZIL HAKIM', 0, 0, 0, 0, 0, '19:07:52'),
(21, 'DARUL FALAH', 0, 0, 0, 0, 0, ''),
(22, 'DIKA APRIANSYAH', 0, 0, 0, 0, 0, '17:00:58'),
(23, 'FIKRY FAHRUL ROJI', 0, 0, 0, 0, 0, ''),
(24, 'FIRMAN IRAWAN SIREGAR', 0, 0, 0, 0, 0, ''),
(25, 'GILANG ALAMSYAH', 0, 0, 0, 0, 0, ''),
(26, 'ILHAM NASRULLAH', 0, 0, 0, 0, 0, ''),
(27, 'ISYAR IBRAHIM SUPUSEPA', 0, 0, 0, 0, 0, ''),
(28, 'KAMILAH SITA ASAROH	', 0, 0, 0, 0, 0, ''),
(29, 'MELA AMALIA', 0, 0, 0, 0, 0, ''),
(30, 'MUHAMMAD ALDI RAHMADANI	', 0, 0, 0, 0, 0, '18:41:03'),
(31, 'MUHAMMAD MAULANA ISWAHYUDI', 0, 0, 0, 0, 0, ''),
(32, 'MUHAMMAD RIZKI KHOIRUL KOSASIH', 0, 0, 0, 0, 0, ''),
(33, 'MUHAMMAD ZIKRULLAH', 0, 0, 0, 0, 0, ''),
(34, 'MUHAMMAD ATO	', 0, 0, 0, 0, 0, ''),
(35, 'MUHAMMAD DWI SYAFIQ', 0, 0, 0, 0, 0, ''),
(36, 'MUHAMMAD SULFAN KARIMULLAH	', 0, 0, 0, 0, 0, ''),
(37, 'PARIDA ARIANI', 0, 0, 0, 0, 0, ''),
(38, 'PUBI DWI DAMARA', 0, 0, 0, 0, 0, ''),
(39, 'PUTRI AWALIAH', 0, 0, 0, 0, 0, ''),
(40, 'RAEHANY NURFADILLAH	', 0, 0, 0, 0, 0, ''),
(41, 'REZKY ADITYA', 0, 0, 0, 0, 0, ''),
(42, 'RIFKI AZIKRI', 0, 0, 0, 0, 0, ''),
(43, 'RIFQI ALFARIZI', 0, 0, 0, 0, 0, ''),
(44, 'RIZKI FADILAH	', 0, 0, 0, 0, 0, ''),
(45, 'ROBY GUNANTO', 0, 0, 0, 0, 0, ''),
(46, 'SILVIANA NOVITA', 0, 0, 0, 0, 0, ''),
(47, 'SUCI RAMADANTI', 0, 0, 0, 0, 0, ''),
(48, 'VIKI ARDIYANSYAH', 0, 0, 0, 0, 0, ''),
(49, 'WAHID ARFANI RAMADHAN', 0, 0, 0, 0, 0, ''),
(50, 'SULTAN FARROS BRAHMANTYO', 0, 0, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `alasan_karyawan`
--

CREATE TABLE `alasan_karyawan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alasan` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alasan_karyawan`
--

INSERT INTO `alasan_karyawan` (`id`, `nama`, `alasan`, `tanggal`) VALUES
(2, '1', '[S] a', '29/06/2019');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id_chat` int(11) NOT NULL,
  `user` varchar(20) NOT NULL,
  `waktu` varchar(100) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id_chat`, `user`, `waktu`, `pesan`) VALUES
(1, 'admin', '02-07-2019 08:43:50', 'Tanggal 4 Juli Daftar ulang yoo'),
(2, 'admin', '08-07-2019 02:01:55', 'woy\n'),
(3, 'admin', '08-07-2019 02:02:00', 'kunyuk'),
(4, 'Fikri', '', 'Woy'),
(5, 'Fikri', '', 'Fff');

-- --------------------------------------------------------

--
-- Table structure for table `data_absen`
--

CREATE TABLE `data_absen` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(100) NOT NULL,
  `Ket` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_absen`
--

INSERT INTO `data_absen` (`id`, `name`, `date`, `time`, `Ket`) VALUES
(27, 'aldi', '27/06/2019', '10:29:09', 'hadir'),
(28, 'd', '27/06/2019', '10:41:18', 'hadir'),
(30, '1', '29/06/2019', '08:52:54', 'sakit');

-- --------------------------------------------------------

--
-- Table structure for table `data_karyawan`
--

CREATE TABLE `data_karyawan` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` varchar(255) NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `handphone` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `tentang` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_karyawan`
--

INSERT INTO `data_karyawan` (`id`, `name`, `position`, `gender`, `age`, `start_date`, `salary`, `email`, `handphone`, `nik`, `tentang`, `image_name`) VALUES
(16, 'AHMAD MAULANA FAHRUDIN', 'Ahmade', 'Laki-laki', 'Dramaga', '', '', '', '62895355210279', '1718100818', '', '+62_882-2380-2443_20190701_173105.jpg'),
(17, 'AHMAD MUHIDIN	', 'Muhidin', 'Laki-laki', 'Bogor', '', '', '', '', '1718100819', '', 'nophoto.png'),
(18, 'ALBANI ALIF SAPUTRA	', 'Bani', 'Laki-laki', 'Bogor', '', '', '', '', '1718100828', '', 'nophoto.png'),
(19, 'ANTON WIJAYA', 'Anton', 'Laki-laki', 'Ciampea Bogor', '', '', '', '', '1718100842', '', '+62_882-2380-2443_20190701_173853.jpg'),
(20, 'DANU FAUZIL HAKIM', 'Danu', 'Laki-laki', 'Bogor', '', '', '', '', '1718100864', '', 'nophoto.png'),
(21, 'DARUL FALAH', 'Darul', 'Laki-laki', 'Bogor', '', '', '', '', '1718100865', '', 'nophoto.png'),
(22, 'DIKA APRIANSYAH', 'Dika', 'Laki-laki', 'Bogor', '', '', '', '', '1718100876', '', 'nophoto.png'),
(23, 'FIKRY FAHRUL ROJI', 'Fikri', 'Laki-laki', 'Bogor', '', '', '', '6283890829418', '1718100895', '', '+62_882-2380-2443_20190701_173719.jpg'),
(24, 'FIRMAN IRAWAN SIREGAR', 'Firman', 'Laki-laki', 'Bogor', '', '', '', '', '1718100896', '', 'nophoto.png'),
(25, 'GILANG ALAMSYAH', 'Gilang', 'Laki-laki', 'Bogor', '', '', '', '', '1718100899', '', 'nophoto.png'),
(26, 'ILHAM NASRULLAH', 'Ilham', 'Laki-laki', 'Bogor', '', '', '', '', '1718100911', '', 'nophoto.png'),
(27, 'ISYAR IBRAHIM SUPUSEPA', 'Isyar', 'Laki-laki', 'Bogor', '', '', '', '', '1718100921', '', 'nophoto.png'),
(28, 'KAMILAH SITA ASAROH	', 'Kamilah', 'Perempuan', 'Bogor', '', '', '', '62895330017674', '1718100928', '', 'nophoto.png'),
(29, 'MELA AMALIA', 'Mela', 'Perempuan', 'Bogor', '', '', '', '6289516659468', '1718100944', '', '+62_882-2380-2443_20190701_085437.jpg'),
(30, 'MUHAMMAD ALDI RAHMADANI	', 'Aldi', 'Laki-laki', 'Bogor', '31 Mei 2001', 'Anonymous', 'muhammadaldirahmadani@gmail.com', '6288223802443', '1718100956', 'ig : mhmmdaldirhmdni', '+62_882-2380-2443_20190701_124545.jpg'),
(31, 'MUHAMMAD MAULANA ISWAHYUDI', 'Iswahyudi', 'Laki-laki', 'Bogor', '', '', '', '', '1718100973', '', 'nophoto.png'),
(32, 'MUHAMMAD RIZKI KHOIRUL KOSASIH', 'Rizky Khoirul', 'Laki-laki', 'Bogor', '', '', '', '', '1718100982', '', 'nophoto.png'),
(33, 'MUHAMMAD ZIKRULLAH', 'Zikrullah', 'Laki-laki', 'Bogor', '', '', '', '6289624450931', '1718100987', '', '+62_882-2380-2443_20190701_173602.jpg'),
(34, 'MUHAMMAD ATO	', 'Ato', 'Laki-laki', 'Bogor', '', '', '', '', '1718100988', '', 'nophoto.png'),
(35, 'MUHAMMAD DWI SYAFIQ', 'Syafiq', 'Laki-laki', 'Bogor', '', '', '', '6282123780454', '1718100989', '', 'IMG-20190701-WA0000.jpg'),
(36, 'MUHAMMAD SULFAN KARIMULLAH	', 'Sulfan', 'Laki-laki', 'Bogor', '', '', '', '628151891403', '1718100997', '', '+62_882-2380-2443_20190701_003541.jpg'),
(37, 'PARIDA ARIANI', 'Parida', 'Perempuan', 'Bogor', '', '', '', '6289671020262', '1718101017', '', '+62_882-2380-2443_20190701_083858.jpg'),
(38, 'PUBI DWI DAMARA', 'Pubi', 'Laki-laki', 'Bogor', '', '', '', '', '1718101020', '', 'nophoto.png'),
(39, 'PUTRI AWALIAH', 'Putri', 'Perempuan', 'Bogor', '', '', '', '6285890313045', '1718101021', '', '+62_882-2380-2443_20190701_165740.jpg'),
(40, 'RAEHANY NURFADILLAH	', 'Hany', 'Perempuan', 'Bogor', '', '', '', '', '1718101023', '', 'nophoto.png'),
(41, 'REZKY ADITYA', 'Ekiii?', 'Laki-laki', 'Bogor', '', '', 'rezkyrditya@gmail.com', '6285771413378', '1718101034', '', '+62_882-2380-2443_20190701_173742.jpg'),
(42, 'RIFKI AZIKRI', 'Rifki', 'Laki-laki', 'Bogor', '', '', '', '', '1718101035', '', 'nophoto.png'),
(43, 'RIFQI ALFARIZI', 'Rifqi', 'Laki-laki', 'Bogor', '', '', '', '', '1718101036', '', 'nophoto.png'),
(44, 'RIZKI FADILAH	', 'Rizki Fadilah', 'Laki-laki', 'Bogor', '', '', '', '', '1718101111', '', 'nophoto.png'),
(45, 'ROBY GUNANTO', 'Roby', 'Laki-laki', 'Bogor', '', '', '', '628559828639', '1718101048', '', 'nophoto.png'),
(46, 'SILVIANA NOVITA', 'Silvi', 'Perempuan', 'Bogor', '', '', '', '', '1718101056', '', 'nophoto.png'),
(47, 'SUCI RAMADANTI', 'Suci', 'Perempuan', 'Bogor', '', '', '', '6283819511135', '1718101061', '', '+62_882-2380-2443_20190701_172433.jpg'),
(48, 'VIKI ARDIYANSYAH', 'Viki', 'Laki-laki', 'Bogor', '', '', '', '', '1718101081', '', 'nophoto.png'),
(49, 'WAHID ARFANI RAMADHAN', 'Wahid', 'Laki-laki', 'Bogor', '', '', '', '', '1718101082', '', 'nophoto.png'),
(50, 'SULTAN FARROS BRAHMANTYO', 'Sultan Mah Bebas', 'Laki-laki', 'Bogor', '', '', '', '', '1718101063', '', 'nophoto.png');

-- --------------------------------------------------------

--
-- Table structure for table `data_wali_kelas`
--

CREATE TABLE `data_wali_kelas` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `handphone` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `tentang` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_wali_kelas`
--

INSERT INTO `data_wali_kelas` (`id`, `name`, `position`, `start_date`, `address`, `email`, `handphone`, `nik`, `tentang`, `image_name`) VALUES
(1, '', '', '', 'Alamat', 'email@mail.com', '08xxxxxxxxx', '', 'Ini Wali Kelass', '71U1nBOAwpL__SY879_1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `history_karyawan`
--

CREATE TABLE `history_karyawan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `info` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history_karyawan`
--

INSERT INTO `history_karyawan` (`id`, `nama`, `info`, `tanggal`) VALUES
(1, 'Guru', 'Guru telah melakukan login', '30/06/2019 21:53:04'),
(3, 'Guru', 'Guru telah melakukan login', '01/07/2019 11:58:32'),
(4, 'Guru', 'Guru telah melakukan login', '01/07/2019 17:05:50');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id` int(11) NOT NULL,
  `name_jabatan` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `max` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id`, `name_jabatan`, `jabatan`, `jumlah`, `max`) VALUES
(27, 'Ketua kelas', 'ketua_kelas', 1, 1),
(28, 'Wakil ketua kelas', 'wakil_ketua_kelas', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_piket`
--

CREATE TABLE `jadwal_piket` (
  `id` int(11) NOT NULL,
  `value` varchar(200) NOT NULL,
  `senin` varchar(200) NOT NULL,
  `selasa` varchar(200) NOT NULL,
  `rabu` varchar(200) NOT NULL,
  `kamis` varchar(200) NOT NULL,
  `jumat` varchar(200) NOT NULL,
  `sabtu` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal_piket`
--

INSERT INTO `jadwal_piket` (`id`, `value`, `senin`, `selasa`, `rabu`, `kamis`, `jumat`, `sabtu`) VALUES
(1, '', '1.Hany\r\n2.Mela\r\n3.Sulfan\r\n4.Rizky.k.k\r\n5.Syafiq\r\n6.Dika', '1.Milah\r\n2.Ahmad\r\n3.Maul\r\n4.Pubi\r\n5.Rifqi azzikri', '1.Putri\r\n2.Anton\r\n3.Zikrullah\r\n4.Wahid\r\n5.Viki\r\n6.Firman', '1.Parida\r\n2.Sultan\r\n3.Danu\r\n4.Isyar', '1.Suci\r\n2.Fikri\r\n3.Gilang\r\n4.Darul\r\n5.Albani', '1.Silvi\r\n2.Eki\r\n3.Aldi\r\n4.Ilham\r\n5.Roby\r\n6.Rizky fadhilah\r\n7.Ato');

-- --------------------------------------------------------

--
-- Table structure for table `libur`
--

CREATE TABLE `libur` (
  `id` int(11) NOT NULL,
  `dari` varchar(200) NOT NULL,
  `sampai` varchar(200) NOT NULL,
  `kenapa` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `libur`
--

INSERT INTO `libur` (`id`, `dari`, `sampai`, `kenapa`) VALUES
(1, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `organisasi`
--

CREATE TABLE `organisasi` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `ketua_kelas` int(11) NOT NULL,
  `wakil_ketua_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organisasi`
--

INSERT INTO `organisasi` (`id`, `name`, `foto`, `ketua_kelas`, `wakil_ketua_kelas`) VALUES
(1, 'REZKY ADITYA', 'nophoto.png', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `setting_absensi`
--

CREATE TABLE `setting_absensi` (
  `id` int(11) NOT NULL,
  `mulai_absen` varchar(255) NOT NULL,
  `selesai_absen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting_absensi`
--

INSERT INTO `setting_absensi` (`id`, `mulai_absen`, `selesai_absen`) VALUES
(1, '07:00', '12:00');

-- --------------------------------------------------------

--
-- Table structure for table `users_karyawan`
--

CREATE TABLE `users_karyawan` (
  `id` int(11) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_karyawan`
--

INSERT INTO `users_karyawan` (`id`, `nik`, `password`, `level`) VALUES
(1, '3105013802443', '6e36dfb32a43c8c95ac9c3be608546a8', 'Admin'),
(2, '12345678', '77e69c137812518e359196bb2f5e9bb9', 'Guru'),
(18, '1718100818', '54576a0687b292a2f5630f1437a36c80', 'Karyawan'),
(19, '1718100819', '5f34a677e269afca2640664356d15949', 'Karyawan'),
(20, '1718100828', 'a403cc71f030214d579611e53aed7ef9', 'Karyawan'),
(21, '1718100842', '66bb2a4aec1637baa817a75df22062ef', 'Karyawan'),
(22, '1718100864', '59d8ee11c53583e742b044da57193034', 'Karyawan'),
(23, '1718100865', '1f575e310c2039e6bb70fcf1889abfbf', 'Karyawan'),
(24, '1718100876', '6391687a678fa2c00b7d577b25714652', 'Karyawan'),
(25, '1718100895', '06209e347e41ae44828b4da414c26f7f', 'Karyawan'),
(26, '1718100896', '67048d42afed5ce531ff844b602954c2', 'Karyawan'),
(27, '1718100899', '29e30f6d97510c5181ec4d446d0ad78b', 'Karyawan'),
(28, '1718100911', '69e58126f03b2705f1bf1b43b3294c38', 'Karyawan'),
(29, '1718100921', 'ebcf0ad16690a326ff30c4f75c8df746', 'Karyawan'),
(30, '1718100928', '8e25a165df79d375ea282a24eb2ba1c5', 'Karyawan'),
(31, '1718100944', '8b1a2a84ec6868c006e14295dc4a5481', 'Karyawan'),
(32, '1718100956', '213b0a338683037f686a946667b674dd', 'Karyawan'),
(33, '1718100973', 'd153b8b82840c109600890220a805a7a', 'Karyawan'),
(34, '1718100982', 'e8e4ba506b642c6e134aa913a5cbda1d', 'Karyawan'),
(35, '1718100987', 'a4aca35dc740a3f00de2420c8cdf4f32', 'Karyawan'),
(36, '1718100988', '2a4def7adb58a49f7d2d0917f1c1ad5e', 'Karyawan'),
(37, '1718100989', 'ee3eef419e3b8ecf5ed40efd48bd330c', 'Karyawan'),
(38, '1718100997', '0b583962510c17d29ac0cd9914a68105', 'Karyawan'),
(39, '1718101017', 'f7a342f9bbfbbd05bb8938a750d14b8b', 'Karyawan'),
(40, '1718101020', '6012583cddc0d4df703f6f2ac4df10b0', 'Karyawan'),
(41, '1718101021', '48cca3ed8421fa6676b12c9187e29cd6', 'Karyawan'),
(42, '1718101023', 'c4ab16e7da55507e678d7c18f2852b98', 'Karyawan'),
(43, '1718101034', 'c4e804307d934c7c489d8d132f70f00e', 'Karyawan'),
(44, '1718101035', 'ea57fe392abaa702c70c955bdbe885d0', 'Karyawan'),
(45, '1718101036', '71f404d27c6f873adf0c868bb7beac95', 'Karyawan'),
(46, '1718101111', '25401d847cc5dd410beed58c73544615', 'Karyawan'),
(47, '1718101048', '9e78616b6192e15cd4b265129edd95c3', 'Karyawan'),
(48, '1718101056', 'c8b0f56610c2f072e7661ffeece96d36', 'Karyawan'),
(49, '1718101061', 'c4a91b88336d7ac55f4f312b274b9540', 'Karyawan'),
(50, '1718101081', '6c1d4cd2b486a4027c9d3250162e667f', 'Karyawan'),
(51, '1718101082', '140863b5bbd91cb544c1403cfba5bd7c', 'Karyawan'),
(52, '1718101063', '510df39e3477156a1a27ccd59cee6288', 'Karyawan');

-- --------------------------------------------------------

--
-- Table structure for table `user_online`
--

CREATE TABLE `user_online` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `online` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_online`
--

INSERT INTO `user_online` (`id`, `name`, `date`, `online`) VALUES
(16, 'AHMAD MAULANA FAHRUDIN', '04/07/2019 09:50:53', 1),
(17, 'AHMAD MUHIDIN	', '30/06/2019 16:35:15', 0),
(18, 'ALBANI ALIF SAPUTRA	', '30/06/2019 16:50:15', 0),
(19, 'ANTON WIJAYA', '', 0),
(20, 'DANU FAUZIL HAKIM', '', 0),
(21, 'DARUL FALAH', '', 0),
(22, 'DIKA APRIANSYAH', '', 0),
(23, 'FIKRY FAHRUL ROJI', '08/07/2019 15:10:56', 1),
(24, 'FIRMAN IRAWAN SIREGAR', '30/06/2019 18:49:03', 0),
(25, 'GILANG ALAMSYAH', '', 0),
(26, 'ILHAM NASRULLAH', '', 0),
(27, 'ISYAR IBRAHIM SUPUSEPA', '', 0),
(28, 'KAMILAH SITA ASAROH	', '30/06/2019 20:58:37', 1),
(29, 'MELA AMALIA', '01/07/2019 08:16:25', 1),
(30, 'MUHAMMAD ALDI RAHMADANI	', '08/07/2019 14:42:54', 0),
(31, 'MUHAMMAD MAULANA ISWAHYUDI', '29/06/2019 23:07:06', 0),
(32, 'MUHAMMAD RIZKI KHOIRUL KOSASIH', '', 0),
(33, 'MUHAMMAD ZIKRULLAH', '30/06/2019 16:51:19', 0),
(34, 'MUHAMMAD ATO	', '', 0),
(35, 'MUHAMMAD DWI SYAFIQ', '01/07/2019 00:55:09', 1),
(36, 'MUHAMMAD SULFAN KARIMULLAH	', '', 0),
(37, 'PARIDA ARIANI', '30/06/2019 23:10:31', 1),
(38, 'PUBI DWI DAMARA', '', 0),
(39, 'PUTRI AWALIAH', '01/07/2019 17:19:48', 1),
(40, 'RAEHANY NURFADILLAH	', '', 0),
(41, 'REZKY ADITYA', '04/07/2019 11:26:31', 1),
(42, 'RIFKI AZIKRI', '', 0),
(43, 'RIFQI ALFARIZI', '', 0),
(44, 'RIZKI FADILAH	', '', 0),
(45, 'ROBY GUNANTO', '', 0),
(46, 'SILVIANA NOVITA', '', 0),
(47, 'SUCI RAMADANTI', '01/07/2019 08:16:39', 1),
(48, 'VIKI ARDIYANSYAH', '', 0),
(49, 'WAHID ARFANI RAMADHAN', '', 0),
(50, 'SULTAN FARROS BRAHMANTYO', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi_karyawan`
--
ALTER TABLE `absensi_karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alasan_karyawan`
--
ALTER TABLE `alasan_karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id_chat`);

--
-- Indexes for table `data_absen`
--
ALTER TABLE `data_absen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_karyawan`
--
ALTER TABLE `data_karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_wali_kelas`
--
ALTER TABLE `data_wali_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history_karyawan`
--
ALTER TABLE `history_karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal_piket`
--
ALTER TABLE `jadwal_piket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `libur`
--
ALTER TABLE `libur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organisasi`
--
ALTER TABLE `organisasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting_absensi`
--
ALTER TABLE `setting_absensi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_karyawan`
--
ALTER TABLE `users_karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_online`
--
ALTER TABLE `user_online`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi_karyawan`
--
ALTER TABLE `absensi_karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `alasan_karyawan`
--
ALTER TABLE `alasan_karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id_chat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `data_absen`
--
ALTER TABLE `data_absen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `data_karyawan`
--
ALTER TABLE `data_karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `data_wali_kelas`
--
ALTER TABLE `data_wali_kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `history_karyawan`
--
ALTER TABLE `history_karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `jadwal_piket`
--
ALTER TABLE `jadwal_piket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `libur`
--
ALTER TABLE `libur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `organisasi`
--
ALTER TABLE `organisasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `setting_absensi`
--
ALTER TABLE `setting_absensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users_karyawan`
--
ALTER TABLE `users_karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `user_online`
--
ALTER TABLE `user_online`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
