-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `cities`;
CREATE TABLE `cities` (
  `cities_id` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `packs`;
CREATE TABLE `packs` (
  `packs_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `grana` float NOT NULL,
  `old_wind` float NOT NULL,
  `trent` float NOT NULL,
  `epheria` float NOT NULL,
  `calf` float NOT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`packs_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `packs` (`packs_id`, `name`, `grana`, `old_wind`, `trent`, `epheria`, `calf`, `type`) VALUES
(1,	'Steel',	84998,	81111,	79430,	77220,	74895,	1),
(2,	'Brass',	127679,	121840,	119315,	115995,	112502,	1),
(5,	'Calf timber',	205281,	195893,	191833,	186495,	180880,	1),
(7,	'Balenos Timber',	116039,	110732,	108437,	105420,	102246,	1);

DROP TABLE IF EXISTS `packstype`;
CREATE TABLE `packstype` (
  `id` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `packstype` (`id`, `name`) VALUES
(1,	'Дорогой'),
(2,	'Дешевый');

DROP TABLE IF EXISTS `packs_cites`;
CREATE TABLE `packs_cites` (
  `packs_id` int(11) DEFAULT NULL,
  `cities_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `resource`;
CREATE TABLE `resource` (
  `resource_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  PRIMARY KEY (`resource_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `resource` (`resource_id`, `name`, `price`) VALUES
(1,	'Порошок черного камня',	2720),
(2,	'Brass Ingot',	13000),
(3,	'Steel Ingot',	7980),
(4,	'Beer',	625),
(5,	'Birch Plywood',	12650),
(6,	'Fir Plywood',	13900),
(7,	'Cedar Plywood',	15111),
(8,	'Ash Plywood',	11652),
(9,	'Maple Plywood',	11500);

DROP TABLE IF EXISTS `respacks`;
CREATE TABLE `respacks` (
  `packs_id` int(11) DEFAULT NULL,
  `resource_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  KEY `id_packs` (`packs_id`),
  KEY `id_res` (`resource_id`),
  CONSTRAINT `respacks_ibfk_1` FOREIGN KEY (`packs_id`) REFERENCES `packs` (`packs_id`),
  CONSTRAINT `respacks_ibfk_2` FOREIGN KEY (`resource_id`) REFERENCES `resource` (`resource_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `respacks` (`packs_id`, `resource_id`, `quantity`) VALUES
(2,	1,	1),
(2,	2,	10),
(1,	3,	10),
(1,	1,	1),
(2,	4,	1),
(1,	4,	1),
(5,	1,	1),
(5,	4,	1),
(5,	6,	5),
(5,	7,	5),
(5,	5,	5),
(7,	8,	5),
(7,	9,	5),
(7,	4,	1),
(7,	1,	1);

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `auth_key` varchar(50) NOT NULL,
  `token` varchar(50) NOT NULL,
  `leveloftrade` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `user` (`id_user`, `name`, `password`, `auth_key`, `token`, `leveloftrade`) VALUES
(1,	'admin',	'123',	'',	'',	12);

DROP TABLE IF EXISTS `user_packs`;
CREATE TABLE `user_packs` (
  `id_user` int(11) DEFAULT NULL,
  `packs_id` int(11) DEFAULT NULL,
  `quntity_grana` int(11) DEFAULT NULL,
  `quntity_old_wind` int(11) DEFAULT NULL,
  `quntity_trent` int(11) DEFAULT NULL,
  `quntity_epheria` int(11) DEFAULT NULL,
  `quntity_calf` int(11) DEFAULT NULL,
  `begins_time` date DEFAULT NULL,
  `end_time` date DEFAULT NULL,
  KEY `id_user` (`id_user`),
  KEY `packs_id` (`packs_id`),
  CONSTRAINT `user_packs_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  CONSTRAINT `user_packs_ibfk_2` FOREIGN KEY (`packs_id`) REFERENCES `packs` (`packs_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `user_packs` (`id_user`, `packs_id`, `quntity_grana`, `quntity_old_wind`, `quntity_trent`, `quntity_epheria`, `quntity_calf`, `begins_time`, `end_time`) VALUES
(1,	7,	1,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(1,	2,	5,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(1,	5,	2,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL);

-- 2019-02-02 07:44:54
