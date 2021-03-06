/*
SQLyog Community Edition- MySQL GUI v8.05 
MySQL - 5.5.5-10.1.37-MariaDB : Database - campaign
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`campaign` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;

USE `campaign`;

/*Table structure for table `cam_messages` */

DROP TABLE IF EXISTS `cam_messages`;

CREATE TABLE `cam_messages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `campaign_id` int(11) NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `cam_messages` */

/*Table structure for table `campaign_channels` */

DROP TABLE IF EXISTS `campaign_channels`;

CREATE TABLE `campaign_channels` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `campaign_id` int(11) NOT NULL,
  `channel_id` int(11) NOT NULL,
  `subchannel_id` int(11) NOT NULL,
  `chairman` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stage` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `campaign_channels` */

insert  into `campaign_channels`(`id`,`campaign_id`,`channel_id`,`subchannel_id`,`chairman`,`description`,`stage`,`created_at`,`updated_at`) values (2,11,2,11,'af','this is desdcriptioin',4,'2019-01-28 05:03:07','2019-01-28 11:58:53'),(5,11,2,8,'good','greate',2,'2019-01-28 11:41:21','2019-01-28 11:41:21'),(6,16,2,9,'Stan','This message is come from',2,'2019-01-28 13:43:37','2019-01-28 13:43:37'),(7,16,2,11,'Stan','This message is come from',3,'2019-01-28 13:43:59','2019-01-28 13:43:59'),(8,11,2,8,'ccc','this is desdcriptioin',1,'2019-01-28 18:52:47','2019-01-28 18:52:47'),(9,19,2,8,'aaa','aaaa',1,'2019-01-29 06:53:05','2019-01-29 06:53:05'),(10,21,2,8,'ccccc','cccccccccccccc',3,'2019-01-29 09:21:11','2019-01-29 09:21:11'),(11,22,3,7,'aaaaaaaaa','aaaaaaaaaaaaaaaa',3,'2019-01-29 09:42:58','2019-01-29 09:42:58');

/*Table structure for table `campaigns` */

DROP TABLE IF EXISTS `campaigns`;

CREATE TABLE `campaigns` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tease_start` date NOT NULL,
  `tease_end` date NOT NULL,
  `live_start` date NOT NULL,
  `live_end` date NOT NULL,
  `sustain_start` date NOT NULL,
  `sustain_end` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `campaigns` */

insert  into `campaigns`(`id`,`name`,`message`,`tease_start`,`tease_end`,`live_start`,`live_end`,`sustain_start`,`sustain_end`,`created_at`,`updated_at`) values (11,'TESTING','TESTING WORKS','2019-01-01','2019-01-15','2019-01-16','2019-01-24','2019-01-25','2019-01-31','2019-01-26 17:02:01','2019-01-26 17:02:01'),(16,'Demo Campaign','The world is mine','2019-01-01','2019-01-08','2019-01-09','2019-01-09','2019-01-10','2019-01-31','2019-01-28 13:40:14','2019-01-28 13:40:14'),(17,'subadmin','Good','2019-01-08','2019-01-11','2019-01-12','2019-01-23','2019-01-24','2019-01-31','2019-01-29 03:07:17','2019-01-29 03:07:17'),(19,'aaa','aaaa','2019-01-01','2019-01-09','2019-01-29','2019-01-24','2019-01-21','2019-02-06','2019-01-29 05:50:00','2019-01-29 05:50:00'),(20,'bb','bbbb','2019-01-09','2019-01-17','2019-01-24','2019-01-23','2019-01-28','2019-01-30','2019-01-29 09:19:28','2019-01-29 09:19:28'),(21,'bb','bbbb','2019-01-09','2019-01-17','2019-01-24','2019-01-23','2019-01-28','2019-01-30','2019-01-29 09:20:29','2019-01-29 09:20:29'),(22,'vv','vvvv','2019-01-09','2019-01-16','2019-01-22','2019-01-25','2019-01-28','2019-02-01','2019-01-29 09:42:30','2019-01-29 09:42:30');

/*Table structure for table `cha_messages` */

DROP TABLE IF EXISTS `cha_messages`;

CREATE TABLE `cha_messages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `channel_id` int(11) NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `cha_messages` */

/*Table structure for table `channels` */

DROP TABLE IF EXISTS `channels`;

CREATE TABLE `channels` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `channels` */

insert  into `channels`(`id`,`name`,`color`,`created_at`,`updated_at`) values (2,'Front End','#b3d9ff','2019-01-27 09:25:13','2019-01-27 10:03:02'),(3,'Back End','#4dffff','2019-01-27 09:57:36','2019-01-27 10:03:10');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_01_26_083906_create_campaigns_table',1),(4,'2019_01_26_083926_create_channels_table',1),(5,'2019_01_26_084003_create_campaign_details_table',1),(6,'2019_01_26_091425_create_cam_messages_table',1),(7,'2019_01_26_091441_create_cha_messages_table',1);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `sub_channels` */

DROP TABLE IF EXISTS `sub_channels`;

CREATE TABLE `sub_channels` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `channel_id` int(10) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `sub_channels` */

insert  into `sub_channels`(`id`,`name`,`color`,`channel_id`,`created_at`,`updated_at`) values (7,'django','#129084',3,'2019-01-29 12:11:39','2019-01-27 09:58:33'),(8,'Angular','#125677',2,'2019-01-28 20:18:06','2019-01-27 09:46:29'),(9,'React','#111117',2,'2019-01-28 20:18:08','2019-01-27 09:58:33'),(10,'PHP','#234523',3,'2019-01-29 01:55:31','2019-01-28 04:42:41'),(11,'Vue','#723463',2,'2019-01-28 20:18:11','2019-01-28 04:42:41');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`email_verified_at`,`password`,`remember_token`,`created_at`,`updated_at`) values (4,'admin','admin@gmail.com',NULL,'$2y$10$Kcw3orbGrelAL9kRfpJ/U.qUclQJzof1v.Z/ImLilUC6TUVrLaKG2',NULL,NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
