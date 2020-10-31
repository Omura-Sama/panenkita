/*
 Navicat Premium Data Transfer

 Source Server         : Serverset
 Source Server Type    : MySQL
 Source Server Version : 100411
 Source Host           : localhost:3306
 Source Schema         : panenkita

 Target Server Type    : MySQL
 Target Server Version : 100411
 File Encoding         : 65001

 Date: 31/10/2020 08:10:17
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin`  (
  `id_admin` smallint(6) NOT NULL,
  `nama_admin` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `username_admin` char(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `email_admin` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `password_admin` char(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `foto_admin` mediumblob NULL,
  PRIMARY KEY (`id_admin`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of admin
-- ----------------------------

-- ----------------------------
-- Table structure for kategori
-- ----------------------------
DROP TABLE IF EXISTS `kategori`;
CREATE TABLE `kategori`  (
  `id_kategori` smallint(6) NOT NULL AUTO_INCREMENT,
  `name_kategori` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tipe_panen` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `PPN` int(20) NULL DEFAULT NULL,
  `kategori` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `deskripsi` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_kategori`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kategori
-- ----------------------------
INSERT INTO `kategori` VALUES (1, 'namanya', 'tipenya', 0, NULL, 'Ujicoba1');
INSERT INTO `kategori` VALUES (2, 'Buah', 'Musim', 5, NULL, 'Kategori Panen Buah-buahan, merupakan panen yang terjadi pada saat musim buah tertentu. ');

-- ----------------------------
-- Table structure for member
-- ----------------------------
DROP TABLE IF EXISTS `member`;
CREATE TABLE `member`  (
  `id_mmb` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `name_firts` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `name_sec` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `hp` int(44) NOT NULL,
  `is_active` int(1) NOT NULL,
  `group_mmb` int(1) NOT NULL,
  PRIMARY KEY (`id_mmb`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of member
-- ----------------------------

-- ----------------------------
-- Table structure for pemasukan
-- ----------------------------
DROP TABLE IF EXISTS `pemasukan`;
CREATE TABLE `pemasukan`  (
  `id_pemasukan` smallint(6) NOT NULL AUTO_INCREMENT,
  `tanggal_pemasukan` datetime(0) NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0),
  `keuntungan` int(20) NULL DEFAULT NULL,
  `id_petani` smallint(6) NULL DEFAULT NULL,
  PRIMARY KEY (`id_pemasukan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pemasukan
-- ----------------------------
INSERT INTO `pemasukan` VALUES (1, '2020-10-31 06:19:29', 10000, 1);
INSERT INTO `pemasukan` VALUES (4, '2020-10-31 06:22:56', 10000, 1);

-- ----------------------------
-- Table structure for pembelian
-- ----------------------------
DROP TABLE IF EXISTS `pembelian`;
CREATE TABLE `pembelian`  (
  `id_pembelian` smallint(6) NOT NULL AUTO_INCREMENT,
  `kuantiti_pembelian` int(11) NULL DEFAULT NULL,
  `tanggal_pembelian` datetime(0) NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0),
  `id_petani` smallint(6) NULL DEFAULT NULL,
  `id_tengkulak` smallint(6) NULL DEFAULT NULL,
  `id_transaksi` smallint(6) NULL DEFAULT NULL,
  PRIMARY KEY (`id_pembelian`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pembelian
-- ----------------------------
INSERT INTO `pembelian` VALUES (1, 1, '2020-10-31 07:55:14', 1, 1, 1);
INSERT INTO `pembelian` VALUES (5, 12, '2020-10-31 07:26:51', 1, 1, 6);

-- ----------------------------
-- Table structure for penjualan
-- ----------------------------
DROP TABLE IF EXISTS `penjualan`;
CREATE TABLE `penjualan`  (
  `id_penjualan` smallint(6) NOT NULL,
  `kuantiti_penjualan` int(11) NULL DEFAULT NULL,
  `tanggal_penjualan` datetime(0) NULL DEFAULT NULL,
  `total_harga_penjualan` int(20) NULL DEFAULT NULL,
  PRIMARY KEY (`id_penjualan`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of penjualan
-- ----------------------------

-- ----------------------------
-- Table structure for pesan
-- ----------------------------
DROP TABLE IF EXISTS `pesan`;
CREATE TABLE `pesan`  (
  `id_pesan` smallint(6) NOT NULL,
  `tanggal_pesan` datetime(0) NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0),
  `isi_pesan` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `unicode` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `penerima` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_user` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `pengirim` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `status` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_pesan`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pesan
-- ----------------------------
INSERT INTO `pesan` VALUES (1, '2020-10-24 00:00:00', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis minima enim fugiat optio assumenda harum dolorem ducimus eaque, vitae vel veritatis sunt molestiae repellat architecto cupiditate exercitationem molestias autem ipsa.', 'AT11', 'admin', NULL, 'tengkulak', 'D');
INSERT INTO `pesan` VALUES (2, '2020-10-24 00:00:00', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis minima enim fugiat optio assumenda harum dolorem ducimus eaque, vitae vel veritatis sunt molestiae repellat architecto cupiditate exercitationem molestias autem ipsa.', 'AT11', 'tengkulak', NULL, 'admin', 'D');
INSERT INTO `pesan` VALUES (3, '2020-10-24 00:00:00', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis minima enim fugiat optio assumenda harum dolorem ducimus eaque, vitae vel veritatis sunt molestiae repellat architecto cupiditate exercitationem molestias autem ipsa.', 'AT11', 'admin', NULL, 'petani', 'D');
INSERT INTO `pesan` VALUES (4, '2020-10-24 00:00:00', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis minima enim fugiat optio assumenda harum dolorem ducimus eaque, vitae vel veritatis sunt molestiae repellat architecto cupiditate exercitationem molestias autem ipsa.', 'AT11', 'petani', NULL, 'admin', 'D');

-- ----------------------------
-- Table structure for petani
-- ----------------------------
DROP TABLE IF EXISTS `petani`;
CREATE TABLE `petani`  (
  `id_petani` smallint(6) NOT NULL AUTO_INCREMENT,
  `nama_depan_petani` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama_belakang_petani` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nik_petani` char(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `email_petani` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `password_petani` char(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tanggal_lahir_petani` date NULL DEFAULT NULL,
  `alamat_petani` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kontak_petani` char(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `foto_petani` mediumblob NULL,
  `id_user` int(12) NULL DEFAULT NULL,
  PRIMARY KEY (`id_petani`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of petani
-- ----------------------------
INSERT INTO `petani` VALUES (1, 'Deni ', '(Testing)', '12303121219960004', 'deni@gmail.com', '1234567', '1996-12-12', 'Kp. Amismadu, RT.01, RW.02', '087583918*****', '', 3);

-- ----------------------------
-- Table structure for produk
-- ----------------------------
DROP TABLE IF EXISTS `produk`;
CREATE TABLE `produk`  (
  `id_produk` smallint(6) NOT NULL AUTO_INCREMENT,
  `nama_produk` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama_petani` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `name_kategori` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `foto_produk` longblob NULL,
  `tanggal_panen` datetime(0) NULL DEFAULT NULL,
  `stok_produk` int(11) NULL DEFAULT NULL,
  `deskripsi_produk` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `harga_produk` int(20) NULL DEFAULT NULL,
  `id_petani` smallint(6) NULL DEFAULT NULL,
  `id_kategori` smallint(6) NULL DEFAULT NULL,
  PRIMARY KEY (`id_produk`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of produk
-- ----------------------------
INSERT INTO `produk` VALUES (1, 'Pisang', 'Deni (Testing)', 'Buah', '', '2020-10-13 00:25:54', 0, 'Pisang Tanduk ditanam sendiri tanpa pupuk kimia', 10000, 1, 2);

-- ----------------------------
-- Table structure for role
-- ----------------------------
DROP TABLE IF EXISTS `role`;
CREATE TABLE `role`  (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `is_status` int(1) NOT NULL,
  PRIMARY KEY (`role_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of role
-- ----------------------------
INSERT INTO `role` VALUES (1, 'Development', 1);
INSERT INTO `role` VALUES (2, 'Admin', 1);
INSERT INTO `role` VALUES (3, 'Tengkulak', 1);
INSERT INTO `role` VALUES (4, 'Petani', 1);

-- ----------------------------
-- Table structure for simpan
-- ----------------------------
DROP TABLE IF EXISTS `simpan`;
CREATE TABLE `simpan`  (
  `id_simpan` smallint(6) NOT NULL AUTO_INCREMENT,
  `id_produk` smallint(6) NULL DEFAULT NULL,
  `id_petani` smallint(6) NULL DEFAULT NULL,
  `id_tengkulak` smallint(6) NULL DEFAULT NULL,
  `date_simpan` timestamp(0) NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id_simpan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of simpan
-- ----------------------------
INSERT INTO `simpan` VALUES (1, 1, NULL, 2, '2020-10-29 18:50:16');
INSERT INTO `simpan` VALUES (4, 1, NULL, 1, '2020-10-29 19:39:47');

-- ----------------------------
-- Table structure for tengkulak
-- ----------------------------
DROP TABLE IF EXISTS `tengkulak`;
CREATE TABLE `tengkulak`  (
  `id_tengkulak` smallint(6) NOT NULL AUTO_INCREMENT,
  `nama_depan_tengkulak` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama_belakang_tengkulak` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tanggal_lahir_tengkulak` date NULL DEFAULT NULL,
  `alamat_tengkulak` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kontak_tengkulak` char(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `foto_tengkulak` mediumblob NULL,
  `id_user` int(12) NULL DEFAULT NULL,
  PRIMARY KEY (`id_tengkulak`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tengkulak
-- ----------------------------
INSERT INTO `tengkulak` VALUES (1, 'Badrul', 'Alam', '2020-10-12', 'Jalan sawah besar', '098781818111', NULL, 2);

-- ----------------------------
-- Table structure for transaksi
-- ----------------------------
DROP TABLE IF EXISTS `transaksi`;
CREATE TABLE `transaksi`  (
  `id_transaksi` smallint(6) NOT NULL AUTO_INCREMENT,
  `tanggal_transaksi` datetime(0) NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0),
  `metode_transaksi` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `status` smallint(6) NULL DEFAULT NULL,
  `id_petani` smallint(6) NULL DEFAULT NULL,
  `id_tengkulak` smallint(6) NULL DEFAULT NULL,
  PRIMARY KEY (`id_transaksi`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of transaksi
-- ----------------------------
INSERT INTO `transaksi` VALUES (1, '2020-10-30 06:34:21', 'COD', 0, 1, 1);
INSERT INTO `transaksi` VALUES (6, '2020-10-31 06:34:23', 'COD', 0, 1, 1);

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id_user` int(12) NOT NULL AUTO_INCREMENT,
  `username` varchar(125) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(125) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `stat` int(1) NOT NULL,
  `email` varchar(125) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`id_user`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, 'admin', '1234567', 1, 'admin.software@gmail.com', 2);
INSERT INTO `user` VALUES (2, 'tengkulak', '1234567', 1, 'tengkulak.software@gmail.com', 3);
INSERT INTO `user` VALUES (3, 'petani', '1234567', 1, 'petani.software@gmail.com', 4);

SET FOREIGN_KEY_CHECKS = 1;
