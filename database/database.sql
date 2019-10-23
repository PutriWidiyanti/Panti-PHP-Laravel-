/*
SQLyog Enterprise - MySQL GUI v7.02 
MySQL - 5.5.5-10.1.10-MariaDB : Database - db_panti
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_panti` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_panti`;

/*Table structure for table `diri` */

DROP TABLE IF EXISTS `diri`;

CREATE TABLE `diri` (
  `id` char(5) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nama_orangtua` varchar(255) NOT NULL,
  `pendidikan` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `tanggal_masuk` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `diri` */

insert  into `diri`(`id`,`alamat`,`nama`,`nama_orangtua`,`pendidikan`,`status`,`tanggal_masuk`) values ('001','jln. masjid al abror pondok aren','hanip indrata','abu','SMK','Dhuafa','2019-04-14'),('002','jln. graha bintaro sektor 2','Yuliyani','Yanti','SMP','Yatim','2019-05-20'),('003','jln. pondok betung Rt.001/001 No.20','Siti Nurlela','Suhanih','SMK','Dhuafa','2019-05-25'),('004','jln. pondok pucung regensi','Dewi Shintia Ahmad','Ani','SMP','Yatim','2019-06-02'),('005','jln. bintaro jaya sektor 1','hilman fadillah','Cecep','SMK','Dhuafa','2019-06-17'),('006','jln. pln Rt.002/001 no.20','M. Abdul Balad','Siti Aminah','SMK','Yatim','2019-06-27'),('007','jln. pln Rt.008/001 no.28','Ainnaya Nuriani','Sutini','SMK','Yatim','2019-07-10'),('008','iiiiiiiiiiiii','jjj','ccccccccccc','dddd','wwww','2019-08-02'),('009','hhhh','jjj','bbbbbb','dddd','wwww','2019-08-02'),('010','mmmmmmmmmmmmm','jjj','bbbbbb','dddd','iiiiiiiiiiiii','2019-08-02');

/*Table structure for table `donasi` */

DROP TABLE IF EXISTS `donasi`;

CREATE TABLE `donasi` (
  `id` char(5) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `nama_donatur` varchar(100) DEFAULT NULL,
  `jumlah_donasi` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `donasi` */

insert  into `donasi`(`id`,`tanggal`,`nama_donatur`,`jumlah_donasi`) values ('001','2019-08-02','uuuuuuuuuuuuuuuu',1000000),('005','2019-08-02','pppppppppppppp',3000000);

/*Table structure for table `donatur` */

DROP TABLE IF EXISTS `donatur`;

CREATE TABLE `donatur` (
  `id_donatur` char(5) NOT NULL,
  `nama_donatur` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `telp` char(20) DEFAULT NULL,
  PRIMARY KEY (`id_donatur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `donatur` */

insert  into `donatur`(`id_donatur`,`nama_donatur`,`alamat`,`telp`) values ('001','kkkkkkkkkk','pppppppppppp','0987654333');

/*Table structure for table `kegiatan` */

DROP TABLE IF EXISTS `kegiatan`;

CREATE TABLE `kegiatan` (
  `id` char(5) NOT NULL,
  `nama_kegiatan` varchar(100) DEFAULT NULL,
  `hari` varchar(10) DEFAULT NULL,
  `tanggal_jam` datetime DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `pemberi_kegiatan` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `kegiatan` */

insert  into `kegiatan`(`id`,`nama_kegiatan`,`hari`,`tanggal_jam`,`status`,`pemberi_kegiatan`,`alamat`) values ('001','Santunan','Senin','2019-10-10 14:00:00','belum terlaksana','PT.ABC','Pondok Aren');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
