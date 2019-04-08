# Host: localhost  (Version 5.5.5-10.1.36-MariaDB)
# Date: 2019-04-08 14:20:28
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "gotmy_users"
#

DROP TABLE IF EXISTS `gotmy_users`;
CREATE TABLE `gotmy_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_surname_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_surname_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_82AC373718D3E277` (`user_username`),
  UNIQUE KEY `UNIQ_82AC3737550872C` (`user_email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "gotmy_users"
#

INSERT INTO `gotmy_users` VALUES (2,'Nicol','$2y$13$q2TMkyedavlCqZs1mDyjRe6/rO/USy.N5ZAKRjlDEbQPTxz7gbmNe','nicol@nicol.com','Nicoleta Laura','Todoran','Gologan');

#
# Structure for table "migration_versions"
#

DROP TABLE IF EXISTS `migration_versions`;
CREATE TABLE `migration_versions` (
  `version` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `executed_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "migration_versions"
#

INSERT INTO `migration_versions` VALUES ('20190408113717','2019-04-08 11:37:52'),('20190408121852','2019-04-08 12:19:13');
