/*
SQLyog Enterprise - MySQL GUI v8.18 
MySQL - 5.7.17-log : Database - homestead
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`homestead` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `homestead`;

/*Table structure for table `books` */

DROP TABLE IF EXISTS `books`;

CREATE TABLE `books` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `typebooks_id` int(10) unsigned NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'nopic.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `books_typebooks_id_foreign` (`typebooks_id`),
  CONSTRAINT `books_typebooks_id_foreign` FOREIGN KEY (`typebooks_id`) REFERENCES `typebooks` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `books` */

insert  into `books`(`id`,`title`,`price`,`typebooks_id`,`image`,`created_at`,`updated_at`) values (1,'การ์ตูนโดเรมอน','100.00',2,'doraemon-nobita-space.jpg',NULL,NULL),(2,'คอมพิวเตอร์เบื้องต้น','250.00',11,'nopic.png',NULL,NULL),(3,'การทำงานอย่างมีความสุข','85.00',5,'nopic.png',NULL,NULL),(6,'ทำกับข้าวอย่างมืออาชีพ','200.00',4,'nopic.png',NULL,NULL),(7,'ตะลุยอวกาศ','129.00',3,'deep-space-gateway.jpg',NULL,'2017-11-28 02:05:14'),(11,'การเขียนโปรแกรมเบื้องต้น','300.00',11,'jbMAmIM6AH.JPG','2017-11-17 08:52:52','2017-11-17 08:53:23'),(13,'การออกกำลังกายให้เกิดประโยชน์','125.00',5,'UvPYolk8S6.jpg','2017-11-20 02:01:18','2017-11-20 02:01:18'),(25,'PHP เบื้องต้น','350.00',11,'upc981a1Mw.png','2017-11-23 02:52:21','2017-11-23 02:52:21'),(32,'นิทานก่อนนอน','59.00',3,'wn3QbbhmJR.JPG','2017-11-24 08:36:00','2017-11-24 08:36:00'),(33,'โยคะ','120.00',12,'6SXW2RZL4A.jpg','2017-12-12 02:45:54','2017-12-12 02:45:54');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values (8,'2014_10_12_000000_create_users_table',1),(9,'2014_10_12_100000_create_password_resets_table',1),(10,'2017_11_08_072110_create_typebooks_table',1),(11,'2017_11_08_072144_create_books_table',1);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `typebooks` */

DROP TABLE IF EXISTS `typebooks`;

CREATE TABLE `typebooks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `typebooks` */

insert  into `typebooks`(`id`,`name`,`created_at`,`updated_at`) values (1,'นวนิยาย',NULL,'2017-11-27 05:28:31'),(2,'การ์ตูน',NULL,NULL),(3,'สำหรับเด็ก',NULL,NULL),(4,'ทำอาหาร',NULL,NULL),(5,'ผู้สูงอายุ',NULL,NULL),(6,'การเงิน',NULL,NULL),(7,'บัญชี',NULL,NULL),(8,'เตรียมสอบ',NULL,NULL),(9,'หนังสือเรียนประถม',NULL,NULL),(10,'หนังสือเรียนมัธยม',NULL,NULL),(11,'คอมพิวเตอร์',NULL,NULL),(12,'กีฬา','2017-12-12 02:44:42','2017-12-12 02:44:42'),(13,'ศาสนา','2017-12-12 02:45:01','2017-12-12 02:45:01');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`password`,`remember_token`,`created_at`,`updated_at`) values (1,'Piyapong Kaewnan','mailtopiyapong@gmail.com','$2y$10$tACa5mvNJirbe3BxBHMHa.VvlwNMfoSCI2Xm.4s4J5inN7RDPwCju','kGUpIlMvb4HAdbf5ROXVqZFbxiuCRLaD1FYnYXaBDmXeUn8u5rX1WJqfwD0g','2017-11-08 07:35:26','2017-11-08 07:35:26');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
