/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 5.1.53-community-log : Database - atpl
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`atpl` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `atpl`;

/*Table structure for table `bkbus` */

DROP TABLE IF EXISTS `bkbus`;

CREATE TABLE `bkbus` (
  `pnr` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `mail` varchar(20) DEFAULT NULL,
  `bno` int(11) DEFAULT NULL,
  `source` varchar(20) DEFAULT NULL,
  `destination` varchar(20) DEFAULT NULL,
  `seats` int(11) DEFAULT NULL,
  `doj` date DEFAULT NULL,
  `price` float DEFAULT NULL,
  `tot_price` float DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`pnr`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

/*Data for the table `bkbus` */

insert  into `bkbus`(`pnr`,`username`,`mail`,`bno`,`source`,`destination`,`seats`,`doj`,`price`,`tot_price`,`status`) values 
(1,'shant','sk@gmail.com',2,'Howrah','Patna',1,'2021-09-30',300,600,'CANCELLED'),
(44,'santosh','gk@gmail.com',13,'howrah','Patna',3,'2021-09-17',399,1197,'CANCELLED'),
(51,'santosh','s@gmail.com',25,'howrah','delhi',1,'2021-09-15',1999,1999,'CANCELLED');

/*Table structure for table `bus_schedule` */

DROP TABLE IF EXISTS `bus_schedule`;

CREATE TABLE `bus_schedule` (
  `bno` int(11) NOT NULL AUTO_INCREMENT,
  `source` varchar(20) DEFAULT NULL,
  `destination` varchar(20) DEFAULT NULL,
  `doj` date DEFAULT NULL,
  `seat` int(20) DEFAULT NULL,
  `price` float DEFAULT NULL,
  PRIMARY KEY (`bno`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

/*Data for the table `bus_schedule` */

insert  into `bus_schedule`(`bno`,`source`,`destination`,`doj`,`seat`,`price`) values 
(20,'howrah','delhi','2021-09-15',48,3333),
(25,'howrah','delhi','2021-09-15',35,1999);

/*Table structure for table `cancel_history` */

DROP TABLE IF EXISTS `cancel_history`;

CREATE TABLE `cancel_history` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(20) DEFAULT NULL,
  `pnr` int(11) DEFAULT NULL,
  `cancel_request_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `cancel_approve_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `amount` float DEFAULT NULL,
  `remark` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`cid`),
  KEY `c15` (`pnr`),
  KEY `c16` (`uname`),
  KEY `c17` (`amount`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `cancel_history` */

insert  into `cancel_history`(`cid`,`uname`,`pnr`,`cancel_request_date`,`cancel_approve_date`,`amount`,`remark`) values 
(1,'santosh',45,'2021-09-14 19:30:45','0000-00-00 00:00:00',0,'APPROVE'),
(8,'santosh',51,'2021-09-14 21:01:38','2021-09-14 21:01:38',1999,'APPROVE');

/*Table structure for table `userdetails` */

DROP TABLE IF EXISTS `userdetails`;

CREATE TABLE `userdetails` (
  `username` varchar(20) NOT NULL,
  `pswd` varchar(20) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `phone_no` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `securityQ` varchar(35) DEFAULT NULL,
  `ans` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `userdetails` */

insert  into `userdetails`(`username`,`pswd`,`role`,`phone_no`,`email`,`securityQ`,`ans`) values 
('shant','123','admin','8912898765','abc@ymail.com','How old are you','24'),
('sss','12345','user','8912898765','abc@ymail.com','How old are you','21'),
('santosh','111','user','8997898765','abc@ymail.com','How old are you','25'),
('rahul','12345',NULL,'7865873647','lkj@gmail.com','how old are you','26');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
