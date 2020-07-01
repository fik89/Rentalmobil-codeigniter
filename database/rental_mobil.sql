-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2020 at 07:36 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rental_mobil`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id_admin` int(11) NOT NULL,
  `nama_admin` varchar(120) NOT NULL,
  `username` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
`id_customer` int(11) NOT NULL,
  `nama` varchar(120) NOT NULL,
  `username` varchar(120) NOT NULL,
  `alamat` varchar(120) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `no_ktp` varchar(50) NOT NULL,
  `password` varchar(120) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nama`, `username`, `alamat`, `gender`, `no_telp`, `no_ktp`, `password`, `role_id`) VALUES
(4, 'a', 'a', 'a', 'Laki-laki', 'a', 'a', '0cc175b9c0f1b6a831c399e269772661', 2),
(5, 'q', 'q', 'q', 'Laki-laki', 'q', 'q', '7694f4a66316e53c8cdd9d9954bd611d', 2),
(7, 'fikri', 'admin', 'lamongan', 'laki-laki', '085706555122', '112233344455656', '21232f297a57a5a743894a0e4a801fc3', 1),
(8, 'w', 'w', 'w', 'Perempuan', 'w', 'w', 'f1290186a5d0b1ceab27f4e77c0c5d68', 2),
(9, 'fery', 'fery123', 'Mojokerto', 'laki-laki', '081112222', '12222222222', 'dfd1f77aa12baacdba90554cc7cf4529', 0),
(10, 'alan', 'alan', 'sidoarjo', 'Laki-laki', '081111', '123233', '02558a70324e7c4f269c69825450cec8', 2);

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE IF NOT EXISTS `mobil` (
`id_mobil` int(11) NOT NULL,
  `kode_type` varchar(120) NOT NULL,
  `merk` varchar(120) NOT NULL,
  `no_plat` varchar(20) NOT NULL,
  `warna` varchar(20) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `status` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `denda` int(11) NOT NULL,
  `supir` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id_mobil`, `kode_type`, `merk`, `no_plat`, `warna`, `tahun`, `status`, `harga`, `denda`, `supir`, `gambar`) VALUES
(6, 'SDN', 'honda civic', 's 2000 ms', 'Biru', '2019', '1', 300000, 9000, 1, 'civic2.jpg'),
(7, 'SDN', 'toyota camryy', 'w 3000 ms', 'hitam', '2018', '0', 300000, 100000, 1, 'camry1.jpg'),
(9, 'SDN', 'pinguin', 'q', 'q', '1', '1', 1222, 2222, 0, 'Penguins1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `rental`
--

CREATE TABLE IF NOT EXISTS `rental` (
`id_rental` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `tanggal_rental` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `status_rental` varchar(50) NOT NULL,
  `status_pengembalian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
`id_rental` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `id_mobil` int(11) NOT NULL,
  `tanggal_rental` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `harga` varchar(120) NOT NULL,
  `denda` varchar(120) NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `status_pengembalian` varchar(50) NOT NULL,
  `status_rental` varchar(50) NOT NULL,
  `bukti_pembayaran` varchar(120) NOT NULL,
  `status_pembayaran` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_rental`, `id_customer`, `id_mobil`, `tanggal_rental`, `tanggal_kembali`, `harga`, `denda`, `tanggal_pengembalian`, `status_pengembalian`, `status_rental`, `bukti_pembayaran`, `status_pembayaran`) VALUES
(3, 5, 6, '2020-06-01', '2020-06-03', '300000', '100000', '0000-00-00', 'Belum Selesai', 'Selesai', '', 0),
(4, 5, 7, '2020-06-16', '2020-06-09', '300000', '100000', '0000-00-00', 'Belum Selesai', 'Belum Selesai', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE IF NOT EXISTS `type` (
`id_type` int(11) NOT NULL,
  `kode_type` varchar(20) NOT NULL,
  `nama_type` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id_type`, `kode_type`, `nama_type`) VALUES
(1, 'SDN', 'Sedan'),
(3, 'MNV', 'Minivan'),
(4, 'SPR', 'sport');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
 ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
 ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `rental`
--
ALTER TABLE `rental`
 ADD PRIMARY KEY (`id_rental`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
 ADD PRIMARY KEY (`id_rental`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
 ADD PRIMARY KEY (`id_type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
MODIFY `id_mobil` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `rental`
--
ALTER TABLE `rental`
MODIFY `id_rental` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
MODIFY `id_rental` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
