/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1_3306
Source Server Version : 50505
Source Host           : 127.0.0.1:3306
Source Database       : sikap

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-11-18 13:49:54
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for sk_det_jadwal
-- ----------------------------
DROP TABLE IF EXISTS `sk_det_jadwal`;
CREATE TABLE `sk_det_jadwal` (
  `kd_jadwal` int(11) DEFAULT NULL,
  `hari` varchar(10) DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `jam` time DEFAULT NULL,
  `kd_ruang` varchar(10) DEFAULT NULL,
  `catatan` text,
  `sts_jadwal` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sk_det_jadwal
-- ----------------------------

-- ----------------------------
-- Table structure for sk_dosen
-- ----------------------------
DROP TABLE IF EXISTS `sk_dosen`;
CREATE TABLE `sk_dosen` (
  `nip` varchar(50) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `notelp` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sk_dosen
-- ----------------------------

-- ----------------------------
-- Table structure for sk_jadwal
-- ----------------------------
DROP TABLE IF EXISTS `sk_jadwal`;
CREATE TABLE `sk_jadwal` (
  `kd_jadwal` int(11) NOT NULL AUTO_INCREMENT,
  `kd_matkul` varchar(10) DEFAULT NULL,
  `kd_prodi` varchar(5) DEFAULT NULL,
  `kelas` varchar(2) DEFAULT NULL,
  `nip` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kd_jadwal`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sk_jadwal
-- ----------------------------

-- ----------------------------
-- Table structure for sk_matkul
-- ----------------------------
DROP TABLE IF EXISTS `sk_matkul`;
CREATE TABLE `sk_matkul` (
  `kd_matkul` varchar(10) NOT NULL,
  `matkul` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kd_matkul`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sk_matkul
-- ----------------------------

-- ----------------------------
-- Table structure for sk_prodi
-- ----------------------------
DROP TABLE IF EXISTS `sk_prodi`;
CREATE TABLE `sk_prodi` (
  `kd_prodi` varchar(5) NOT NULL,
  `prodi` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`kd_prodi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sk_prodi
-- ----------------------------
INSERT INTO `sk_prodi` VALUES ('DKV', 'Desain Komunikasi Visual');
INSERT INTO `sk_prodi` VALUES ('MI', 'Management Informatika');
INSERT INTO `sk_prodi` VALUES ('SI', 'Sistem Informasi');
INSERT INTO `sk_prodi` VALUES ('TI', 'Tehnik Informatika');

-- ----------------------------
-- Table structure for sk_ruang
-- ----------------------------
DROP TABLE IF EXISTS `sk_ruang`;
CREATE TABLE `sk_ruang` (
  `kd_ruang` varchar(10) NOT NULL,
  `ruang` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`kd_ruang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sk_ruang
-- ----------------------------
