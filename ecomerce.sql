-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2018 at 06:45 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecomerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(10) NOT NULL,
  `nama_admin` varchar(35) DEFAULT NULL,
  `pass_admin` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `pass_admin`) VALUES
(1, 'hendras', 'pass');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id_banner` varchar(10) DEFAULT NULL,
  `gambar_banner` varchar(30) DEFAULT NULL,
  `nama_banner` varchar(30) DEFAULT NULL,
  `keterangan_banner` text,
  `ban_1` varchar(15) DEFAULT NULL,
  `ban_2` varchar(15) DEFAULT NULL,
  `ban_3` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id_banner`, `gambar_banner`, `nama_banner`, `keterangan_banner`, `ban_1`, `ban_2`, `ban_3`) VALUES
('b1', 'images/banner_pisang.png', 'KERIPIK PISANG', 'Keripik yang dibuat dengan pisang madu memiliki rasa yang manis gurih. Ditambah dengan rempah-rempah yang membuatnya semakin mantap.', 'k0027', 'k0027', 'k0027');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` varchar(25) DEFAULT NULL,
  `nama_depan` varchar(35) DEFAULT NULL,
  `nama_belakang` varchar(35) DEFAULT NULL,
  `provinsi` varchar(35) DEFAULT NULL,
  `kota` varchar(35) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `kode_pos` varchar(15) DEFAULT NULL,
  `telpon` varchar(25) DEFAULT NULL,
  `email` varchar(75) DEFAULT NULL,
  `password` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nama_depan`, `nama_belakang`, `provinsi`, `kota`, `alamat`, `kode_pos`, `telpon`, `email`, `password`) VALUES
('cust', 'virginia', 'hendras', 'jawa timur', 'malang', 'jl.SOEKARNO RT.05 RW.08', '987058', '085655427339', 'hendras@yahoo.com', 'cust'),
('a5ce0532', 'deny', 'sugihanto', 'jawa barat', 'bandung', 'jl.pahlawan RT.05 RW.08', '6151', '089999918', 'deny@gmail.com', 'woho'),
('b1gh4171', 'michael', 'james', 'sumatra barat', 'padang', 'jl.kelapa sawit RT.09 RW.90 NO.18', '9112199', '088408484', '311210026@machung.ac.id', 'mike');

-- --------------------------------------------------------

--
-- Table structure for table `detail_kripik`
--

CREATE TABLE `detail_kripik` (
  `id_jenis` varchar(15) DEFAULT NULL,
  `berat` int(15) DEFAULT NULL,
  `jumlah` int(15) DEFAULT NULL,
  `harga` int(15) DEFAULT NULL,
  `tgl_kadaluarsa` date DEFAULT NULL,
  `keterangan` text,
  `gambar` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_kripik`
--

INSERT INTO `detail_kripik` (`id_jenis`, `berat`, `jumlah`, `harga`, `tgl_kadaluarsa`, `keterangan`, `gambar`) VALUES
('k0027', 24, 5000, 5000, '2018-10-10', 'keripik apel terbuat dari apel asli yang dipetik dari pohon apel pilihan', 'images/apel.png'),
('k0025', 750, 900, 24000, '2018-10-10', 'semangka', 'images/Buah-Semangka.png');

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_transaksi` varchar(25) DEFAULT NULL,
  `id_jenis` varchar(35) DEFAULT NULL,
  `jumlah_item` int(25) DEFAULT NULL,
  `total_per_item` int(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id_transaksi`, `id_jenis`, `jumlah_item`, `total_per_item`) VALUES
('53', 'k0013', 1, 50000),
('984', 'k0027', 1, 5000);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `invoice` varchar(10) DEFAULT NULL,
  `id_customer` varchar(10) DEFAULT NULL,
  `total_item` int(10) DEFAULT NULL,
  `total_harga` int(10) DEFAULT NULL,
  `tgl_trasaksi` date DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `keterangan` text,
  `nama_penerima` varchar(30) DEFAULT NULL,
  `alamat_penerima` text,
  `email_telpon` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `informasi_pembayaran`
--

CREATE TABLE `informasi_pembayaran` (
  `invoice` varchar(15) DEFAULT NULL,
  `id_customer` varchar(15) DEFAULT NULL,
  `email` varchar(75) DEFAULT NULL,
  `tgl_pembayaran` datetime DEFAULT NULL,
  `bank_pengirim` varchar(35) DEFAULT NULL,
  `bank_tujuan` varchar(35) DEFAULT NULL,
  `nomor_rekening` varchar(25) DEFAULT NULL,
  `atas_nama` varchar(75) DEFAULT NULL,
  `keterangan_bayar` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kripik`
--

CREATE TABLE `jenis_kripik` (
  `id_jenis` varchar(15) DEFAULT NULL,
  `keterangan_jenis` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_kripik`
--

INSERT INTO `jenis_kripik` (`id_jenis`, `keterangan_jenis`) VALUES
('k0027', 'keripik apel'),
('k0025', 'keripik semangka');

-- --------------------------------------------------------

--
-- Table structure for table `mailbox`
--

CREATE TABLE `mailbox` (
  `id_mailbox` int(10) NOT NULL,
  `tanggal_masuk` datetime DEFAULT NULL,
  `nama_user` varchar(35) DEFAULT NULL,
  `email_user` varchar(75) DEFAULT NULL,
  `pesan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(5) DEFAULT NULL,
  `deskripsi` text,
  `bbm` varchar(15) DEFAULT NULL,
  `telepon` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `facebook` varchar(25) DEFAULT NULL,
  `twitter` varchar(25) DEFAULT NULL,
  `alamat` text,
  `instagram` text NOT NULL,
  `maps` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id_profil`, `deskripsi`, `bbm`, `telepon`, `email`, `facebook`, `twitter`, `alamat`, `instagram`, `maps`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` varchar(25) DEFAULT NULL,
  `id_customer` varchar(25) DEFAULT NULL,
  `total_item` int(10) DEFAULT NULL,
  `total_harga` int(25) DEFAULT NULL,
  `tgl_transaksi` datetime DEFAULT NULL,
  `status` varchar(15) DEFAULT NULL,
  `keterangan` text,
  `nama_penerima` varchar(35) DEFAULT NULL,
  `provinsi_penerima` varchar(50) DEFAULT NULL,
  `kota_penerima` varchar(50) DEFAULT NULL,
  `alamat_penerima` text,
  `email_telpon` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_customer`, `total_item`, `total_harga`, `tgl_transaksi`, `status`, `keterangan`, `nama_penerima`, `provinsi_penerima`, `kota_penerima`, `alamat_penerima`, `email_telpon`) VALUES
('53', 'cust', 1, 50000, '2016-04-23 05:04:25', 'sukses', '', 'fernandes', 'jawa timur', 'malang', 'jl. wonoluyo', '085655427339'),
('984', 'cust', 1, 5000, '2016-04-27 02:04:30', 'kirim', '', 'uyogo gunawan', 'jawa timur', 'malang', 'perumahan mergan malang block A no.135', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `mailbox`
--
ALTER TABLE `mailbox`
  ADD KEY `id_mailbox` (`id_mailbox`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mailbox`
--
ALTER TABLE `mailbox`
  MODIFY `id_mailbox` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
