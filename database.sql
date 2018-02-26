
CREATE DATABASE `kecipir_task`;

USE `kecipir_task`;

DROP TABLE IF EXISTS `master_playground`;

CREATE TABLE `master_playground` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL COMMENT 'Nama karyawan',
  `alamat` varchar(255) NOT NULL COMMENT 'Alamat Karyawan',
  `telp` varchar(30) NOT NULL COMMENT 'No telepon',
  `tanggal_lahir` date NOT NULL COMMENT 'Tanggal lahir',
  `created_at` datetime NOT NULL COMMENT 'Tanggal terdaftar',
  `updated_at` datetime DEFAULT NULL COMMENT 'Tanggal update',
  `is_deleted` tinyint(1) DEFAULT '0' COMMENT 'Soft delete',
  `deleted_at` datetime DEFAULT NULL COMMENT 'Tanggal delete',
  `created_by` int(11) DEFAULT NULL COMMENT 'Siapa yang input',
  `updated_by` int(11) DEFAULT NULL COMMENT 'Siapa yg update',
  `deleted_by` int(11) DEFAULT NULL COMMENT 'Siapa yang delete',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

