/*
 Navicat Premium Data Transfer

 Source Server         : Laptop
 Source Server Type    : MySQL
 Source Server Version : 100432 (10.4.32-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : lacikita

 Target Server Type    : MySQL
 Target Server Version : 100432 (10.4.32-MariaDB)
 File Encoding         : 65001

 Date: 08/09/2025 09:13:09
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_reset_tokens_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- ----------------------------
-- Table structure for password_reset_tokens
-- ----------------------------
DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_reset_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `personal_access_tokens_token_unique`(`token` ASC) USING BTREE,
  INDEX `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type` ASC, `tokenable_id` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('Laki-laki','Perempuan') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `nik` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `no_hp` varchar(17) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'admin001', 'Laki-laki', '3329072002970001', '085728080938', 'demo@example.com', NULL, '$2y$12$6wFJsD1gqWh4G0BQ3c6Oz.vK887gMkdEUW9uoJBRN9ElZAXpkdf2e', NULL, '2025-08-24 03:19:31', '2025-08-24 03:19:31');
INSERT INTO `users` VALUES (3, 'admin001', 'Laki-laki', '3329072002970001', '085728080938', 'demo1@example.com', NULL, '$2y$12$6wFJsD1gqWh4G0BQ3c6Oz.vK887gMkdEUW9uoJBRN9ElZAXpkdf2e', NULL, '2025-08-24 03:19:31', '2025-08-24 03:19:31');
INSERT INTO `users` VALUES (4, 'admin001', 'Laki-laki', '3329072002970001', '085728080938', 'demo2@example.com', NULL, '$2y$12$6wFJsD1gqWh4G0BQ3c6Oz.vK887gMkdEUW9uoJBRN9ElZAXpkdf2e', NULL, '2025-08-24 03:19:31', '2025-08-24 03:19:31');
INSERT INTO `users` VALUES (5, 'admin001', 'Laki-laki', '3329072002970001', '085728080938', 'demo3@example.com', NULL, '$2y$12$6wFJsD1gqWh4G0BQ3c6Oz.vK887gMkdEUW9uoJBRN9ElZAXpkdf2e', NULL, '2025-08-24 03:19:31', '2025-08-24 03:19:31');
INSERT INTO `users` VALUES (6, 'admin001', 'Laki-laki', '3329072002970001', '085728080938', 'demo4@example.com', NULL, '$2y$12$6wFJsD1gqWh4G0BQ3c6Oz.vK887gMkdEUW9uoJBRN9ElZAXpkdf2e', NULL, '2025-08-24 03:19:31', '2025-08-24 03:19:31');
INSERT INTO `users` VALUES (7, 'admin001', 'Laki-laki', '3329072002970001', '085728080938', 'demo5@example.com', NULL, '$2y$12$6wFJsD1gqWh4G0BQ3c6Oz.vK887gMkdEUW9uoJBRN9ElZAXpkdf2e', NULL, '2025-08-24 03:19:31', '2025-08-24 03:19:31');
INSERT INTO `users` VALUES (8, 'admin001', 'Laki-laki', '3329072002970001', '085728080938', 'demo6@example.com', NULL, '$2y$12$6wFJsD1gqWh4G0BQ3c6Oz.vK887gMkdEUW9uoJBRN9ElZAXpkdf2e', NULL, '2025-08-24 03:19:31', '2025-08-24 03:19:31');
INSERT INTO `users` VALUES (9, 'admin001', 'Laki-laki', '3329072002970001', '085728080938', 'demo7@example.com', NULL, '$2y$12$6wFJsD1gqWh4G0BQ3c6Oz.vK887gMkdEUW9uoJBRN9ElZAXpkdf2e', NULL, '2025-08-24 03:19:31', '2025-08-24 03:19:31');
INSERT INTO `users` VALUES (10, 'admin001', 'Laki-laki', '3329072002970001', '085728080938', 'demo8@example.com', NULL, '$2y$12$6wFJsD1gqWh4G0BQ3c6Oz.vK887gMkdEUW9uoJBRN9ElZAXpkdf2e', NULL, '2025-08-24 03:19:31', '2025-08-24 03:19:31');
INSERT INTO `users` VALUES (11, 'admin001', 'Laki-laki', '3329072002970001', '085728080938', 'demo9@example.com', NULL, '$2y$12$6wFJsD1gqWh4G0BQ3c6Oz.vK887gMkdEUW9uoJBRN9ElZAXpkdf2e', NULL, '2025-08-24 03:19:31', '2025-08-24 03:19:31');
INSERT INTO `users` VALUES (12, 'azmi nurzaman', 'Laki-laki', '3329072002970001', '085728080938', 'demo10@example.com', NULL, '$2y$12$6wFJsD1gqWh4G0BQ3c6Oz.vK887gMkdEUW9uoJBRN9ElZAXpkdf2e', NULL, '2025-08-24 03:19:31', '2025-08-24 03:19:31');

SET FOREIGN_KEY_CHECKS = 1;
