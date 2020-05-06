/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.1.31-MariaDB : Database - midtestprognet
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`midtestprognet` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `midtestprognet`;

/*Table structure for table `kelompok` */

DROP TABLE IF EXISTS `kelompok`;

CREATE TABLE `kelompok` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_anggota` varchar(50) DEFAULT NULL,
  `nim` varchar(25) DEFAULT NULL,
  `umur` int(11) DEFAULT NULL,
  `nohp` varchar(15) DEFAULT NULL,
  `alamat` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `kelompok` */

insert  into `kelompok`(`id`,`nama_anggota`,`nim`,`umur`,`nohp`,`alamat`) values 
(1,'I Putu Yogi Mulyana','1805551066',20,'2147483647','karangasem');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
