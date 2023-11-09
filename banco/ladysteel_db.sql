-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Nov-2023 às 21:17
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
(1, 4, 11959955896, '2023-11-08 17:51:54', '2023-11-08 17:51:54'),
(2, 4, 11992931601, '2023-11-08 17:51:54', '2023-11-08 17:51:54'),
(3, 5, 11932212110, '2023-11-08 17:51:54', '2023-11-08 17:51:54'),
(4, 5, 11949388127, '2023-11-08 17:51:54', '2023-11-08 17:51:54'),
(5, 6, 11959955896, '2023-11-08 17:51:54', '2023-11-08 17:51:54'),
(6, 6, 11992931601, '2023-11-08 17:51:54', '2023-11-08 17:51:54');

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
(1, 4, NULL, -23.50432300, -46.49782400, 0, '2023-11-08 19:08:54', NULL),
(2, 5, NULL, -23.52190500, -46.47592400, 0, '2023-11-08 17:51:54', NULL),
(3, 6, NULL, -23.53106400, -46.46194800, 0, '2023-11-08 18:00:54', NULL),
(4, 4, 2, -23.50432300, -46.49782400, 1, '2023-08-15 03:00:00', '2023-08-15 03:00:00'),
(5, 5, 2, -23.52190500, -46.47592400, 1, '2023-08-15 03:00:00', '2023-08-15 03:00:00'),
(6, 6, 2, -23.53106400, -46.46194800, 1, '2023-08-15 03:00:00', '2023-08-15 03:00:00');

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
(1, '2023-11-08 17:51:53', '2023-11-08 17:51:53'),
(2, '2023-11-08 17:51:53', '2023-11-08 17:51:53'),
(3, '2023-11-08 17:51:53', '2023-11-08 17:51:53');

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
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `protocolos`
--

INSERT INTO `protocolos` (`id`, `id_report`, `protocol`, `status`, `created_at`, `updated_at`) VALUES
(1, 4, 'BO321321321321321', 'Protocolo Enviado!', '2023-08-15 03:00:00', '2023-08-15 03:00:00'),
(2, 5, 'BO123123123123123', 'Protocolo Enviado!', '2023-08-15 03:00:00', '2023-08-15 03:00:00'),
(3, 6, NULL, 'Sem Coordenadas', '2023-08-15 03:00:00', '2023-08-15 03:00:00');

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
(1, 3, NULL, NULL, 'Victor', 'Cardoso', '@vek', 'vektromboni@gmail.com', NULL, '$2y$10$y1j/fhCoFm0MT0tUDguDbe6RwpzG70ieHVBUMNxM01OnFSThFM2RC', NULL, '2005-12-19', 'img/avatares/avatar-one.png', NULL, NULL, '2023-08-15 03:00:00', '2023-11-08 17:51:53'),
(2, 2, 1, NULL, 'João', 'Cabral', '@jp', 'jp@gmail.com', NULL, '$2y$10$cdvtg1Apa7ujmv93q.vNselYg4tAwh5xCeXKakGLa4UFVbddRPs9e', NULL, '2006-02-26', 'img/avatares/avatar-two.png', NULL, NULL, '2023-08-15 03:00:00', '2023-11-08 17:51:53'),
(3, 2, 1, NULL, 'Cristiny', 'Orleans', '@cris', 'cris@gmail.com', NULL, '$2y$10$04k98a/Cbuwp77wcmIc5IeAoDFnprrzwJAuG25t8RJ4xrrE6Sd2I.', NULL, '2002-05-22', 'img/avatares/avatar-four.png', NULL, NULL, '2023-08-15 03:00:00', '2023-11-08 17:51:53'),
(4, 1, NULL, 1, 'Mariane', 'Souza', '@mari', 'mari@gmail.com', NULL, '$2y$10$ZHp54PVcldQYFGPsDemMpOqHmqzpxR9kVPR6RrAAOYWhkRXs9xcRa', 'Socorro! Preciso de ajuda!', '2004-04-04', 'img/avatares/avatar-three.png', NULL, NULL, '2023-08-15 03:00:00', '2023-11-08 17:51:53'),
(5, 1, NULL, 2, 'Ana', 'Lima', '@najuju', 'ana@gmail.com', NULL, '$2y$10$THV4pig00P5cSfZWSB2lnORIyoYDeUemYBeF.TSP6odocNpNjGhf.', 'Socorro! Preciso de ajuda!', '2006-02-27', 'img/avatares/avatar-four.png', NULL, NULL, '2023-08-15 03:00:00', '2023-11-08 17:51:53'),
(6, 1, NULL, 3, 'Nair', 'Santos', '@nair', 'nair@gmail.com', NULL, '$2y$10$OxHD19WF5o4iTt0XsFBpHO.gLz/Zw.DG0e72f.Ri/4HkrTzbGBapO', 'Socorro! Preciso de ajuda!', '2000-07-05', 'img/avatares/avatar-one.png', NULL, NULL, '2023-08-15 03:00:00', '2023-11-08 17:51:54');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
