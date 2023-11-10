-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Nov-2023 às 01:40
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ladysteel_db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contatos`
--

CREATE TABLE `contatos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `contact` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `contatos`
--

INSERT INTO `contatos` (`id`, `id_user`, `contact`, `created_at`, `updated_at`) VALUES
(1, 4, 11959955896, '2023-11-10 00:38:59', '2023-11-10 00:38:59'),
(2, 4, 11992931601, '2023-11-10 00:38:59', '2023-11-10 00:38:59'),
(3, 5, 11932212110, '2023-11-10 00:38:59', '2023-11-10 00:38:59'),
(4, 5, 11949388127, '2023-11-10 00:38:59', '2023-11-10 00:38:59'),
(5, 6, 11959955896, '2023-11-10 00:39:00', '2023-11-10 00:39:00'),
(6, 6, 11992931601, '2023-11-10 00:39:00', '2023-11-10 00:39:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `denuncias`
--

CREATE TABLE `denuncias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_victim` bigint(20) UNSIGNED NOT NULL,
  `id_attendant` bigint(20) UNSIGNED DEFAULT NULL,
  `latitude` decimal(11,8) NOT NULL,
  `longitude` decimal(11,8) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `denuncias`
--

INSERT INTO `denuncias` (`id`, `id_victim`, `id_attendant`, `latitude`, `longitude`, `status`, `created_at`, `updated_at`) VALUES
(1, 4, NULL, -23.50432300, -46.49782400, 0, '2023-11-10 00:39:00', NULL),
(2, 5, NULL, -23.52190500, -46.47592400, 0, '2023-11-10 00:39:00', NULL),
(3, 6, NULL, -23.53106400, -46.46194800, 0, '2023-11-10 00:39:00', NULL),
(4, 4, 2, -23.50432300, -46.49782400, 1, '2023-08-15 03:00:00', '2023-08-15 03:00:00'),
(5, 5, 2, -23.52190500, -46.47592400, 1, '2023-08-15 03:00:00', '2023-08-15 03:00:00'),
(6, 6, 2, -23.53106400, -46.46194800, 1, '2023-08-15 03:00:00', '2023-08-15 03:00:00'),
(7, 6, 2, -23.50432300, -46.49782400, 0, '2023-06-12 02:19:29', '2023-11-10 00:39:00'),
(8, 6, 2, -23.50432300, -46.49782400, 1, '2023-01-20 02:35:48', '2023-11-10 00:39:00'),
(9, 6, 3, -23.50432300, -46.49782400, 0, '2023-05-26 17:32:21', '2023-11-10 00:39:00'),
(10, 4, 2, -23.50432300, -46.49782400, 0, '2023-02-17 11:47:22', '2023-11-10 00:39:00'),
(11, 6, 3, -23.50432300, -46.49782400, 1, '2023-05-11 18:39:18', '2023-11-10 00:39:00'),
(12, 4, 3, -23.50432300, -46.49782400, 0, '2023-10-29 11:31:30', '2023-11-10 00:39:00'),
(13, 5, 3, -23.50432300, -46.49782400, 0, '2023-09-23 09:51:32', '2023-11-10 00:39:00'),
(14, 4, 3, -23.50432300, -46.49782400, 1, '2023-08-26 02:36:56', '2023-11-10 00:39:00'),
(15, 5, 3, -23.50432300, -46.49782400, 1, '2023-10-26 17:00:39', '2023-11-10 00:39:00'),
(16, 4, 3, -23.50432300, -46.49782400, 1, '2023-06-20 16:37:19', '2023-11-10 00:39:00'),
(17, 6, 2, -23.50432300, -46.49782400, 0, '2023-06-23 21:14:41', '2023-11-10 00:39:00'),
(18, 6, 2, -23.50432300, -46.49782400, 0, '2023-04-17 06:39:22', '2023-11-10 00:39:00'),
(19, 5, 2, -23.50432300, -46.49782400, 1, '2023-02-09 13:52:31', '2023-11-10 00:39:00'),
(20, 4, 2, -23.50432300, -46.49782400, 1, '2023-09-30 08:27:42', '2023-11-10 00:39:00'),
(21, 5, 2, -23.50432300, -46.49782400, 1, '2023-05-24 10:07:51', '2023-11-10 00:39:01'),
(22, 4, 2, -23.50432300, -46.49782400, 1, '2023-06-13 18:51:46', '2023-11-10 00:39:01'),
(23, 4, 3, -23.50432300, -46.49782400, 0, '2023-03-04 22:01:49', '2023-11-10 00:39:01'),
(24, 6, 3, -23.50432300, -46.49782400, 0, '2023-04-12 04:50:46', '2023-11-10 00:39:01'),
(25, 5, 3, -23.50432300, -46.49782400, 0, '2023-05-08 11:24:49', '2023-11-10 00:39:01'),
(26, 6, 2, -23.50432300, -46.49782400, 0, '2023-04-21 05:57:38', '2023-11-10 00:39:01'),
(27, 5, 3, -23.50432300, -46.49782400, 0, '2023-03-27 09:24:51', '2023-11-10 00:39:01'),
(28, 5, 2, -23.50432300, -46.49782400, 0, '2023-05-19 01:37:38', '2023-11-10 00:39:01'),
(29, 6, 2, -23.50432300, -46.49782400, 0, '2023-09-28 23:27:52', '2023-11-10 00:39:01'),
(30, 5, 2, -23.50432300, -46.49782400, 0, '2023-01-31 02:14:14', '2023-11-10 00:39:01'),
(31, 5, 3, -23.50432300, -46.49782400, 1, '2023-01-24 21:43:33', '2023-11-10 00:39:01'),
(32, 5, 2, -23.50432300, -46.49782400, 1, '2023-09-22 17:38:02', '2023-11-10 00:39:01'),
(33, 4, 2, -23.50432300, -46.49782400, 0, '2023-09-26 02:02:36', '2023-11-10 00:39:01'),
(34, 5, 3, -23.50432300, -46.49782400, 1, '2023-01-07 10:14:41', '2023-11-10 00:39:01'),
(35, 6, 3, -23.50432300, -46.49782400, 0, '2023-04-17 01:09:30', '2023-11-10 00:39:02'),
(36, 5, 2, -23.50432300, -46.49782400, 0, '2023-06-03 09:18:52', '2023-11-10 00:39:02'),
(37, 4, 2, -23.50432300, -46.49782400, 0, '2023-05-16 08:40:40', '2023-11-10 00:39:02'),
(38, 6, 3, -23.50432300, -46.49782400, 0, '2023-06-12 17:23:57', '2023-11-10 00:39:02'),
(39, 6, 2, -23.50432300, -46.49782400, 0, '2023-01-15 09:04:28', '2023-11-10 00:39:02'),
(40, 4, 2, -23.50432300, -46.49782400, 0, '2023-07-26 02:51:15', '2023-11-10 00:39:02'),
(41, 5, 3, -23.50432300, -46.49782400, 1, '2023-07-07 13:35:22', '2023-11-10 00:39:02'),
(42, 5, 2, -23.50432300, -46.49782400, 0, '2023-11-06 08:31:30', '2023-11-10 00:39:02'),
(43, 4, 3, -23.50432300, -46.49782400, 1, '2023-02-02 06:03:50', '2023-11-10 00:39:02'),
(44, 6, 3, -23.50432300, -46.49782400, 0, '2023-01-31 11:51:49', '2023-11-10 00:39:02'),
(45, 6, 2, -23.50432300, -46.49782400, 0, '2023-03-05 17:49:41', '2023-11-10 00:39:02'),
(46, 6, 2, -23.50432300, -46.49782400, 0, '2023-07-11 00:54:28', '2023-11-10 00:39:02'),
(47, 6, 3, -23.50432300, -46.49782400, 1, '2023-04-20 23:33:01', '2023-11-10 00:39:02'),
(48, 4, 3, -23.50432300, -46.49782400, 1, '2023-08-24 09:34:05', '2023-11-10 00:39:02'),
(49, 5, 2, -23.50432300, -46.49782400, 0, '2023-03-26 15:07:30', '2023-11-10 00:39:02'),
(50, 6, 2, -23.50432300, -46.49782400, 0, '2023-02-19 13:55:55', '2023-11-10 00:39:02'),
(51, 6, 2, -23.50432300, -46.49782400, 0, '2023-07-02 16:11:44', '2023-11-10 00:39:02'),
(52, 6, 2, -23.50432300, -46.49782400, 1, '2023-02-07 17:12:37', '2023-11-10 00:39:02'),
(53, 4, 3, -23.50432300, -46.49782400, 0, '2023-06-25 12:56:32', '2023-11-10 00:39:02'),
(54, 5, 2, -23.50432300, -46.49782400, 1, '2023-10-29 04:36:38', '2023-11-10 00:39:02'),
(55, 6, 3, -23.50432300, -46.49782400, 1, '2023-03-16 13:59:39', '2023-11-10 00:39:02'),
(56, 4, 3, -23.50432300, -46.49782400, 1, '2023-10-10 01:05:20', '2023-11-10 00:39:02');

-- --------------------------------------------------------

--
-- Estrutura da tabela `dispositivos`
--

CREATE TABLE `dispositivos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `dispositivos`
--

INSERT INTO `dispositivos` (`id`, `created_at`, `updated_at`) VALUES
(1, '2023-11-10 00:38:58', '2023-11-10 00:38:58'),
(2, '2023-11-10 00:38:58', '2023-11-10 00:38:58'),
(3, '2023-11-10 00:38:58', '2023-11-10 00:38:58');

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2023_08_07_224533_tipos', 1),
(5, '2023_08_08_181446_create_dispositivos_table', 1),
(6, '2023_08_08_330000_create_users_table', 1),
(7, '2023_08_08_343855_create_contatos_table', 1),
(8, '2023_08_09_221312_create_denuncias_table', 1),
(9, '2023_11_05_225237_create_protocolos_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `protocolos`
--

CREATE TABLE `protocolos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_report` bigint(20) UNSIGNED NOT NULL,
  `protocol` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Protocolo Enviado!',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `protocolos`
--

INSERT INTO `protocolos` (`id`, `id_report`, `protocol`, `status`, `created_at`, `updated_at`) VALUES
(1, 4, 'BO321321321321321', 'Protocolo Enviado!', '2023-08-15 03:00:00', '2023-08-15 03:00:00'),
(2, 5, 'BO123123123123123', 'Protocolo Enviado!', '2023-08-15 03:00:00', '2023-08-15 03:00:00'),
(3, 6, NULL, 'Sem Coordenadas', '2023-08-15 03:00:00', '2023-08-15 03:00:00'),
(4, 7, 'BO123123123123123', 'Protocolo Enviado!', '2023-11-10 00:39:02', '2023-11-10 00:39:02'),
(5, 8, 'BO123123123123123', 'Protocolo Enviado!', '2023-11-10 00:39:02', '2023-11-10 00:39:02'),
(6, 9, 'BO123123123123123', 'Protocolo Enviado!', '2023-11-10 00:39:02', '2023-11-10 00:39:02'),
(7, 10, 'BO123123123123123', 'Protocolo Enviado!', '2023-11-10 00:39:02', '2023-11-10 00:39:02'),
(8, 11, 'BO123123123123123', 'Protocolo Enviado!', '2023-11-10 00:39:02', '2023-11-10 00:39:02'),
(9, 12, 'BO123123123123123', 'Protocolo Enviado!', '2023-11-10 00:39:02', '2023-11-10 00:39:02'),
(10, 13, 'BO123123123123123', 'Protocolo Enviado!', '2023-11-10 00:39:02', '2023-11-10 00:39:02'),
(11, 14, 'BO123123123123123', 'Protocolo Enviado!', '2023-11-10 00:39:03', '2023-11-10 00:39:03'),
(12, 15, 'BO123123123123123', 'Protocolo Enviado!', '2023-11-10 00:39:03', '2023-11-10 00:39:03'),
(13, 16, 'BO123123123123123', 'Protocolo Enviado!', '2023-11-10 00:39:03', '2023-11-10 00:39:03'),
(14, 17, 'BO123123123123123', 'Protocolo Enviado!', '2023-11-10 00:39:03', '2023-11-10 00:39:03'),
(15, 18, 'BO123123123123123', 'Protocolo Enviado!', '2023-11-10 00:39:03', '2023-11-10 00:39:03'),
(16, 19, 'BO123123123123123', 'Protocolo Enviado!', '2023-11-10 00:39:03', '2023-11-10 00:39:03'),
(17, 20, 'BO123123123123123', 'Protocolo Enviado!', '2023-11-10 00:39:03', '2023-11-10 00:39:03'),
(18, 21, 'BO123123123123123', 'Protocolo Enviado!', '2023-11-10 00:39:03', '2023-11-10 00:39:03'),
(19, 22, 'BO123123123123123', 'Protocolo Enviado!', '2023-11-10 00:39:03', '2023-11-10 00:39:03'),
(20, 23, 'BO123123123123123', 'Protocolo Enviado!', '2023-11-10 00:39:03', '2023-11-10 00:39:03'),
(21, 24, 'BO123123123123123', 'Protocolo Enviado!', '2023-11-10 00:39:03', '2023-11-10 00:39:03'),
(22, 25, 'BO123123123123123', 'Protocolo Enviado!', '2023-11-10 00:39:03', '2023-11-10 00:39:03'),
(23, 26, 'BO123123123123123', 'Protocolo Enviado!', '2023-11-10 00:39:03', '2023-11-10 00:39:03'),
(24, 27, 'BO123123123123123', 'Protocolo Enviado!', '2023-11-10 00:39:03', '2023-11-10 00:39:03'),
(25, 28, 'BO123123123123123', 'Protocolo Enviado!', '2023-11-10 00:39:03', '2023-11-10 00:39:03'),
(26, 29, 'BO123123123123123', 'Protocolo Enviado!', '2023-11-10 00:39:03', '2023-11-10 00:39:03'),
(27, 30, 'BO123123123123123', 'Protocolo Enviado!', '2023-11-10 00:39:03', '2023-11-10 00:39:03'),
(28, 31, 'BO123123123123123', 'Protocolo Enviado!', '2023-11-10 00:39:03', '2023-11-10 00:39:03'),
(29, 32, 'BO123123123123123', 'Protocolo Enviado!', '2023-11-10 00:39:03', '2023-11-10 00:39:03'),
(30, 33, 'BO123123123123123', 'Protocolo Enviado!', '2023-11-10 00:39:03', '2023-11-10 00:39:03'),
(31, 34, 'BO123123123123123', 'Protocolo Enviado!', '2023-11-10 00:39:03', '2023-11-10 00:39:03'),
(32, 35, 'BO123123123123123', 'Protocolo Enviado!', '2023-11-10 00:39:03', '2023-11-10 00:39:03'),
(33, 36, 'BO123123123123123', 'Protocolo Enviado!', '2023-11-10 00:39:03', '2023-11-10 00:39:03'),
(34, 37, 'BO123123123123123', 'Protocolo Enviado!', '2023-11-10 00:39:03', '2023-11-10 00:39:03'),
(35, 38, 'BO123123123123123', 'Protocolo Enviado!', '2023-11-10 00:39:03', '2023-11-10 00:39:03'),
(36, 39, 'BO123123123123123', 'Protocolo Enviado!', '2023-11-10 00:39:03', '2023-11-10 00:39:03'),
(37, 40, 'BO123123123123123', 'Protocolo Enviado!', '2023-11-10 00:39:03', '2023-11-10 00:39:03'),
(38, 41, 'BO123123123123123', 'Protocolo Enviado!', '2023-11-10 00:39:03', '2023-11-10 00:39:03'),
(39, 42, 'BO123123123123123', 'Protocolo Enviado!', '2023-11-10 00:39:03', '2023-11-10 00:39:03'),
(40, 43, 'BO123123123123123', 'Protocolo Enviado!', '2023-11-10 00:39:03', '2023-11-10 00:39:03'),
(41, 44, 'BO123123123123123', 'Protocolo Enviado!', '2023-11-10 00:39:04', '2023-11-10 00:39:04'),
(42, 45, 'BO123123123123123', 'Protocolo Enviado!', '2023-11-10 00:39:04', '2023-11-10 00:39:04'),
(43, 46, 'BO123123123123123', 'Protocolo Enviado!', '2023-11-10 00:39:04', '2023-11-10 00:39:04'),
(44, 47, 'BO123123123123123', 'Protocolo Enviado!', '2023-11-10 00:39:04', '2023-11-10 00:39:04'),
(45, 48, 'BO123123123123123', 'Protocolo Enviado!', '2023-11-10 00:39:04', '2023-11-10 00:39:04'),
(46, 49, 'BO123123123123123', 'Protocolo Enviado!', '2023-11-10 00:39:04', '2023-11-10 00:39:04'),
(47, 50, 'BO123123123123123', 'Protocolo Enviado!', '2023-11-10 00:39:04', '2023-11-10 00:39:04'),
(48, 51, 'BO123123123123123', 'Protocolo Enviado!', '2023-11-10 00:39:04', '2023-11-10 00:39:04'),
(49, 52, 'BO123123123123123', 'Protocolo Enviado!', '2023-11-10 00:39:04', '2023-11-10 00:39:04'),
(50, 53, 'BO123123123123123', 'Protocolo Enviado!', '2023-11-10 00:39:04', '2023-11-10 00:39:04'),
(51, 54, 'BO123123123123123', 'Protocolo Enviado!', '2023-11-10 00:39:04', '2023-11-10 00:39:04'),
(52, 55, 'BO123123123123123', 'Protocolo Enviado!', '2023-11-10 00:39:04', '2023-11-10 00:39:04'),
(53, 56, 'BO123123123123123', 'Protocolo Enviado!', '2023-11-10 00:39:04', '2023-11-10 00:39:04');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipos`
--

CREATE TABLE `tipos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` enum('Vitima','Atendente','Supervisor') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tipos`
--

INSERT INTO `tipos` (`id`, `type`) VALUES
(1, 'Vitima'),
(2, 'Atendente'),
(3, 'Supervisor');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_type` bigint(20) UNSIGNED NOT NULL DEFAULT 1,
  `id_supervisor` bigint(20) UNSIGNED DEFAULT NULL,
  `id_device` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `message` varchar(255) DEFAULT NULL,
  `birthday` date NOT NULL,
  `img` varchar(255) NOT NULL DEFAULT 'img/avatares/avatar-one.png',
  `remember_token` varchar(100) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `id_type`, `id_supervisor`, `id_device`, `name`, `lastname`, `username`, `email`, `email_verified_at`, `password`, `message`, `birthday`, `img`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 3, NULL, NULL, 'Victor', 'Cardoso', '@vek', 'vektromboni@gmail.com', NULL, '$2y$10$o.vfVT.7WL.QQuXiPgEbAege2jmHGPJyu8z3Maa.sEoW./WZJ6jQ2', NULL, '2005-12-19', 'img/avatares/avatar-one.png', NULL, NULL, '2023-08-15 03:00:00', '2023-11-10 00:38:59'),
(2, 2, 1, NULL, 'João', 'Cabral', '@jp', 'jp@gmail.com', NULL, '$2y$10$qH3m4a.nBvWswZ9dvT88MO96yCNMH5Zww3q/FSL.VIiesSlMI3zuK', NULL, '2006-02-26', 'img/avatares/avatar-two.png', NULL, NULL, '2023-08-15 03:00:00', '2023-11-10 00:38:59'),
(3, 2, 1, NULL, 'Cristiny', 'Orleans', '@cris', 'cris@gmail.com', NULL, '$2y$10$X0Frh4/S0QWyv/SIl9vM3uudk71hqRop2TRv6Trj4J2x9g0XEvCMu', NULL, '2002-05-22', 'img/avatares/avatar-four.png', NULL, NULL, '2023-08-15 03:00:00', '2023-11-10 00:38:59'),
(4, 1, NULL, 1, 'Mariane', 'Souza', '@mari', 'mari@gmail.com', NULL, '$2y$10$kfgzirtvxXnu6MMJKINgwuha4vK9KINuTbVI96faDUBrGtRO.uyC2', 'Socorro! Preciso de ajuda!', '2004-04-04', 'img/avatares/avatar-three.png', NULL, NULL, '2023-08-15 03:00:00', '2023-11-10 00:38:59'),
(5, 1, NULL, 2, 'Ana', 'Lima', '@najuju', 'ana@gmail.com', NULL, '$2y$10$FbvF3ojx72I82MEElhwJ3O81Z/huJaLbQ5te//U7vcvWVZM15hH0m', 'Socorro! Preciso de ajuda!', '2006-02-27', 'img/avatares/avatar-four.png', NULL, NULL, '2023-08-15 03:00:00', '2023-11-10 00:38:59'),
(6, 1, NULL, 3, 'Nair', 'Santos', '@nair', 'nair@gmail.com', NULL, '$2y$10$XF9WCQccNoSTRelsrwEiaeNgZdYF.gdtetxxG9BMg5LWAev5Aq.6G', 'Socorro! Preciso de ajuda!', '2000-07-05', 'img/avatares/avatar-one.png', NULL, NULL, '2023-08-15 03:00:00', '2023-11-10 00:38:59');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `contatos`
--
ALTER TABLE `contatos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contatos_id_user_foreign` (`id_user`);

--
-- Índices para tabela `denuncias`
--
ALTER TABLE `denuncias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `denuncias_id_victim_foreign` (`id_victim`),
  ADD KEY `denuncias_id_attendant_foreign` (`id_attendant`);

--
-- Índices para tabela `dispositivos`
--
ALTER TABLE `dispositivos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Índices para tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Índices para tabela `protocolos`
--
ALTER TABLE `protocolos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `protocolos_id_report_foreign` (`id_report`);

--
-- Índices para tabela `tipos`
--
ALTER TABLE `tipos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tipos_type_unique` (`type`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_id_type_foreign` (`id_type`),
  ADD KEY `users_id_supervisor_foreign` (`id_supervisor`),
  ADD KEY `users_id_device_foreign` (`id_device`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `contatos`
--
ALTER TABLE `contatos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `denuncias`
--
ALTER TABLE `denuncias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT de tabela `dispositivos`
--
ALTER TABLE `dispositivos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `protocolos`
--
ALTER TABLE `protocolos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT de tabela `tipos`
--
ALTER TABLE `tipos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `contatos`
--
ALTER TABLE `contatos`
  ADD CONSTRAINT `contatos_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Limitadores para a tabela `denuncias`
--
ALTER TABLE `denuncias`
  ADD CONSTRAINT `denuncias_id_attendant_foreign` FOREIGN KEY (`id_attendant`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `denuncias_id_victim_foreign` FOREIGN KEY (`id_victim`) REFERENCES `users` (`id`);

--
-- Limitadores para a tabela `protocolos`
--
ALTER TABLE `protocolos`
  ADD CONSTRAINT `protocolos_id_report_foreign` FOREIGN KEY (`id_report`) REFERENCES `denuncias` (`id`);

--
-- Limitadores para a tabela `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_id_device_foreign` FOREIGN KEY (`id_device`) REFERENCES `dispositivos` (`id`),
  ADD CONSTRAINT `users_id_supervisor_foreign` FOREIGN KEY (`id_supervisor`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `users_id_type_foreign` FOREIGN KEY (`id_type`) REFERENCES `tipos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
