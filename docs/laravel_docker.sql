-- Adminer 4.8.1 MySQL 8.2.0 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;



DROP TABLE IF EXISTS `players`;
CREATE TABLE `players` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `rol_id` bigint unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wallet_doc_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `players_wallet_doc_number_unique` (`wallet_doc_number`),
  KEY `players_rol_id_foreign` (`rol_id`),
  CONSTRAINT `players_rol_id_foreign` FOREIGN KEY (`rol_id`) REFERENCES `rols` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `players` (`id`, `rol_id`, `name`, `wallet_doc_number`, `created_at`, `updated_at`) VALUES
(1,	1,	'Juan Garza Cliente',	'91239118',	'2023-11-23 23:27:44',	'2023-11-23 23:27:44'),
(2,	2,	'Mario Zapata Promotor',	'61593996',	'2023-11-23 23:27:44',	'2023-11-23 23:27:44'),
(3,	3,	'Ruben Medrano Validador',	'96408592',	'2023-11-23 23:27:44',	'2023-11-23 23:27:44'),
(4,	1,	'Julio Meza',	'28715066',	'2023-11-23 23:27:44',	'2023-11-23 23:27:44'),
(5,	1,	'Pepe Client333',	'68556840',	'2023-11-23 23:27:44',	'2023-11-23 23:29:54');

DROP TABLE IF EXISTS `promotor_comunications`;
CREATE TABLE `promotor_comunications` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `transaction_id` bigint unsigned DEFAULT NULL,
  `player_promotor_id` bigint unsigned NOT NULL,
  `contact_channel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `promotor_comunications_transaction_id_foreign` (`transaction_id`),
  KEY `promotor_comunications_player_promotor_id_foreign` (`player_promotor_id`),
  CONSTRAINT `promotor_comunications_player_promotor_id_foreign` FOREIGN KEY (`player_promotor_id`) REFERENCES `players` (`id`),
  CONSTRAINT `promotor_comunications_transaction_id_foreign` FOREIGN KEY (`transaction_id`) REFERENCES `transactions` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `promotor_comunications` (`id`, `transaction_id`, `player_promotor_id`, `contact_channel`, `created_at`, `updated_at`) VALUES
(1,	1,	2,	'whatsapp',	'2023-11-23 23:27:44',	'2023-11-23 23:27:44'),
(2,	2,	2,	'whatsapp',	'2023-11-23 23:27:44',	'2023-11-23 23:27:44'),
(3,	3,	2,	'whatsapp',	'2023-11-23 23:27:44',	'2023-11-23 23:27:44'),
(4,	4,	2,	'telegram',	'2023-11-23 23:27:44',	'2023-11-23 23:27:44'),
(5,	5,	2,	'telegram',	'2023-11-23 23:27:44',	'2023-11-23 23:27:44');

DROP TABLE IF EXISTS `rols`;
CREATE TABLE `rols` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `rols` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1,	'cliente',	'2023-11-23 23:27:44',	'2023-11-23 23:27:44'),
(2,	'promotor',	'2023-11-23 23:27:44',	'2023-11-23 23:27:44'),
(3,	'validador',	'2023-11-23 23:27:44',	'2023-11-23 23:27:44');

DROP TABLE IF EXISTS `transactions`;
CREATE TABLE `transactions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `player_id` bigint unsigned DEFAULT NULL,
  `player_validador_id` bigint unsigned DEFAULT NULL,
  `voucher_amount` decimal(8,2) NOT NULL DEFAULT '0.00',
  `voucher_bank_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `player_validador_status` int DEFAULT '0' COMMENT 'aprobado?',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `transactions_player_id_foreign` (`player_id`),
  KEY `transactions_player_validador_id_foreign` (`player_validador_id`),
  CONSTRAINT `transactions_player_id_foreign` FOREIGN KEY (`player_id`) REFERENCES `players` (`id`),
  CONSTRAINT `transactions_player_validador_id_foreign` FOREIGN KEY (`player_validador_id`) REFERENCES `players` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `transactions` (`id`, `player_id`, `player_validador_id`, `voucher_amount`, `voucher_bank_name`, `player_validador_status`, `created_at`, `updated_at`) VALUES
(1,	1,	3,	10.00,	'bcp',	0,	'2023-11-23 23:27:44',	'2023-11-23 23:27:44'),
(2,	1,	3,	5.00,	'bcp',	1,	'2023-11-23 23:27:44',	'2023-11-23 23:27:44'),
(3,	1,	3,	15.00,	'bbva',	1,	'2023-11-23 23:27:44',	'2023-11-23 23:27:44'),
(4,	1,	NULL,	10.00,	'interbank',	0,	'2023-11-23 23:27:44',	'2023-11-23 23:27:44'),
(5,	1,	NULL,	10.00,	'interbank',	0,	'2023-11-23 23:27:44',	'2023-11-23 23:27:44');


-- 2023-11-24 00:05:15
