-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2020 at 05:08 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `panenkita`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` smallint(6) NOT NULL,
  `nama_admin` varchar(100) DEFAULT NULL,
  `username_admin` char(15) DEFAULT NULL,
  `email_admin` varchar(50) DEFAULT NULL,
  `password_admin` char(15) DEFAULT NULL,
  `foto_admin` mediumblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` smallint(6) NOT NULL,
  `nama_kategori` varchar(50) DEFAULT NULL,
  `tipe_panen` varchar(50) DEFAULT NULL,
  `PPN` int(20) DEFAULT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `deskripsi` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `tipe_panen`, `PPN`, `kategori`, `deskripsi`) VALUES
(1, 'Kategori Tes 2', 'Panen Tes 2', 10, NULL, 'lorem ipsum dolor sit amet'),
(3, 'Kategori Tes 1', 'Panen Tes 1', 5, NULL, 'lorem ipsum');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_mmb` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `name_firts` varchar(30) NOT NULL,
  `name_sec` varchar(255) DEFAULT NULL,
  `address` varchar(45) NOT NULL,
  `hp` int(44) NOT NULL,
  `is_active` int(1) NOT NULL,
  `group_mmb` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `pemasukan`
--

CREATE TABLE `pemasukan` (
  `id_pemasukan` smallint(6) NOT NULL,
  `tanggal_pemasukan` datetime DEFAULT NULL,
  `keuntungan` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` smallint(6) NOT NULL,
  `kuantiti_pembelian` int(11) DEFAULT NULL,
  `tanggal_pembelian` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id_penjualan` smallint(6) NOT NULL,
  `kuantiti_penjualan` int(11) DEFAULT NULL,
  `tanggal_penjualan` datetime DEFAULT NULL,
  `total_harga_penjualan` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` smallint(6) NOT NULL,
  `tanggal_pesan` datetime DEFAULT NULL,
  `isi_pesan` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `petani`
--

CREATE TABLE `petani` (
  `id_petani` smallint(6) NOT NULL,
  `nama_petani` varchar(100) DEFAULT NULL,
  `nik_petani` char(20) DEFAULT NULL,
  `email_petani` varchar(50) DEFAULT NULL,
  `password_petani` char(15) DEFAULT NULL,
  `tanggal_lahir_petani` date DEFAULT NULL,
  `alamat_petani` varchar(500) DEFAULT NULL,
  `kontak_petani` char(15) DEFAULT NULL,
  `foto_petani` mediumblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `petani`
--

INSERT INTO `petani` (`id_petani`, `nama_petani`, `nik_petani`, `email_petani`, `password_petani`, `tanggal_lahir_petani`, `alamat_petani`, `kontak_petani`, `foto_petani`) VALUES
(1, 'Abdul Rohin', '1122334455', 'abdul@gmail.com', '12345', '1990-01-05', 'Lorem ipsum', '0821133557799', ''),
(2, 'Abdullah', '1122334455', 'abdul@gmail.com', '12345', '1990-01-05', 'Lorem ipsum', '0821133557799', '');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` smallint(6) NOT NULL,
  `nama_produk` varchar(100) DEFAULT NULL,
  `nama_petani` varchar(50) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `foto_produk` longblob,
  `tanggal_panen` date DEFAULT NULL,
  `stok_produk` int(11) DEFAULT NULL,
  `deskripsi_produk` varchar(300) DEFAULT NULL,
  `harga_produk` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(30) NOT NULL,
  `is_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_name`, `is_status`) VALUES
(1, 'Development', 1),
(2, 'Admin', 1),
(3, 'Tengkulak', 1),
(4, 'Petani', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tengkulak`
--

CREATE TABLE `tengkulak` (
  `id_tengkulak` smallint(6) NOT NULL,
  `nama_depan_tengkulak` varchar(50) DEFAULT NULL,
  `nama_belakang_tengkulak` varchar(50) DEFAULT NULL,
  `email_tengkulak` varchar(50) DEFAULT NULL,
  `password_tengkulak` varchar(50) DEFAULT NULL,
  `kontak_tengkulak` char(15) DEFAULT NULL,
  `foto_tengkulak` mediumblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` smallint(6) NOT NULL,
  `tanggal_transaksi` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(12) NOT NULL,
  `username` varchar(125) NOT NULL,
  `password` varchar(125) NOT NULL,
  `stat` int(1) NOT NULL,
  `email` varchar(125) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `stat`, `email`, `role_id`) VALUES
(1, 'admin', '1234567', 1, 'admin.software@gmail.com', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`) USING BTREE;

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`) USING BTREE;

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_mmb`) USING BTREE;

--
-- Indexes for table `pemasukan`
--
ALTER TABLE `pemasukan`
  ADD PRIMARY KEY (`id_pemasukan`) USING BTREE;

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`) USING BTREE;

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_penjualan`) USING BTREE;

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`) USING BTREE;

--
-- Indexes for table `petani`
--
ALTER TABLE `petani`
  ADD PRIMARY KEY (`id_petani`) USING BTREE;

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`) USING BTREE;

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`) USING BTREE;

--
-- Indexes for table `tengkulak`
--
ALTER TABLE `tengkulak`
  ADD PRIMARY KEY (`id_tengkulak`) USING BTREE;

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`) USING BTREE;

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_mmb` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `petani`
--
ALTER TABLE `petani`
  MODIFY `id_petani` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
