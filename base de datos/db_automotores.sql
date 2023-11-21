-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-11-2023 a las 15:37:15
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_automotores`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autos`
--

CREATE TABLE `autos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titular_id` bigint(20) UNSIGNED NOT NULL,
  `marca` varchar(100) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `patente` varchar(15) NOT NULL,
  `tipo` enum('standar','suv','camioneta','camion') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `autos`
--

INSERT INTO `autos` (`id`, `titular_id`, `marca`, `modelo`, `patente`, `tipo`, `created_at`, `updated_at`) VALUES
(1, 2, 'Toyota', 'consequatur', 'JJU477', 'suv', '2023-11-21 04:23:56', '2023-11-21 04:23:56'),
(2, 4, 'Mercedes Benz', 'occaecati', 'RGE215', 'camion', '2023-11-21 04:23:56', '2023-11-21 04:23:56'),
(3, 10, 'Citroën', 'non', 'RYG786', 'standar', '2023-11-21 04:23:56', '2023-11-21 04:23:56'),
(4, 10, 'Peugeot', 'aut', 'SOB364', 'camioneta', '2023-11-21 04:23:56', '2023-11-21 04:23:56'),
(5, 9, 'Nissan', 'earum', 'GQS269', 'camion', '2023-11-21 04:23:56', '2023-11-21 04:23:56'),
(6, 9, 'Peugeot', 'impedit', 'UYC605', 'suv', '2023-11-21 04:23:56', '2023-11-21 04:23:56'),
(7, 3, 'Citroën', 'libero', 'DXR999', 'suv', '2023-11-21 04:23:56', '2023-11-21 04:23:56'),
(8, 13, 'Mercedes Benz', 'nihil', 'OUI563', 'suv', '2023-11-21 04:23:56', '2023-11-21 04:23:56'),
(9, 4, 'Ford', 'odit', 'QLD442', 'camion', '2023-11-21 04:23:56', '2023-11-21 04:23:56'),
(10, 15, 'Citroën', 'dolores', 'SLT275', 'camion', '2023-11-21 04:23:56', '2023-11-21 04:23:56'),
(11, 3, 'Ford', 'aut', 'NUQ506', 'suv', '2023-11-21 04:23:56', '2023-11-21 04:23:56'),
(12, 7, 'Honda', 'et', 'HAS740', 'camion', '2023-11-21 04:23:56', '2023-11-21 04:23:56'),
(13, 12, 'Fiat', 'incidunt', 'LTP019', 'camioneta', '2023-11-21 04:23:56', '2023-11-21 04:23:56'),
(14, 3, 'Honda', 'voluptates', 'WPS281', 'camioneta', '2023-11-21 04:23:56', '2023-11-21 04:23:56'),
(15, 11, 'Fiat', 'alias', 'HOX652', 'camioneta', '2023-11-21 04:23:56', '2023-11-21 04:23:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
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
-- Estructura de tabla para la tabla `infracciones`
--

CREATE TABLE `infracciones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `auto_id` bigint(20) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `desripcion` text NOT NULL,
  `tipo` enum('alta velocidad','doble fila','alcoholemia','falta de documentacion') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `infracciones`
--

INSERT INTO `infracciones` (`id`, `auto_id`, `fecha`, `desripcion`, `tipo`, `created_at`, `updated_at`) VALUES
(1, 4, '2000-01-16', 'Illum voluptas itaque saepe sit nulla aspernatur.', 'alcoholemia', '2023-11-21 04:29:45', '2023-11-21 04:29:45'),
(2, 9, '1996-03-04', 'Sed ipsa quasi rerum et.', 'alta velocidad', '2023-11-21 04:29:45', '2023-11-21 04:29:45'),
(3, 13, '1995-07-18', 'Alias provident ipsam recusandae nobis.', 'doble fila', '2023-11-21 04:29:45', '2023-11-21 04:29:45'),
(4, 14, '1978-06-05', 'Repellendus ut facere labore animi excepturi inventore est.', 'doble fila', '2023-11-21 04:29:45', '2023-11-21 04:29:45'),
(5, 6, '1974-03-12', 'Iure repellendus est voluptatem minima.', 'alcoholemia', '2023-11-21 04:29:45', '2023-11-21 04:29:45'),
(6, 11, '1981-05-08', 'Modi aut non dolorem aspernatur voluptates aut.', 'doble fila', '2023-11-21 04:29:45', '2023-11-21 04:29:45'),
(7, 15, '2007-06-09', 'Blanditiis veniam impedit laborum.', 'doble fila', '2023-11-21 04:29:45', '2023-11-21 04:29:45'),
(8, 5, '2007-10-23', 'Alias amet veniam delectus quae.', 'alcoholemia', '2023-11-21 04:29:45', '2023-11-21 04:29:45'),
(9, 3, '2004-09-10', 'Est non corporis quo veritatis et.', 'doble fila', '2023-11-21 04:29:45', '2023-11-21 04:29:45'),
(10, 8, '1998-06-06', 'Mollitia quia fuga culpa architecto dolorum ratione debitis.', 'alta velocidad', '2023-11-21 04:29:45', '2023-11-21 04:29:45'),
(11, 2, '1988-10-17', 'Accusamus tenetur rem aut vitae voluptatum.', 'alcoholemia', '2023-11-21 04:29:45', '2023-11-21 04:29:45'),
(12, 1, '1995-08-03', 'Qui tempore ducimus magnam eius non dolorum.', 'alta velocidad', '2023-11-21 04:29:45', '2023-11-21 04:29:45'),
(13, 7, '1984-05-02', 'Voluptate similique aut est aut ipsam.', 'alcoholemia', '2023-11-21 04:29:45', '2023-11-21 04:29:45'),
(14, 12, '1996-03-25', 'Velit quis distinctio ex.', 'alcoholemia', '2023-11-21 04:29:45', '2023-11-21 04:29:45'),
(15, 10, '2004-09-03', 'Maxime qui amet adipisci aliquid.', 'alcoholemia', '2023-11-21 04:29:45', '2023-11-21 04:29:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(197, '2014_10_12_000000_create_users_table', 1),
(198, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(199, '2019_08_19_000000_create_failed_jobs_table', 1),
(200, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(201, '2023_11_06_212151_create_titulares_table', 1),
(202, '2023_11_06_212312_create_autos_table', 1),
(203, '2023_11_06_212435_create_infracciones_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
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
-- Estructura de tabla para la tabla `titulares`
--

CREATE TABLE `titulares` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `dni` char(8) NOT NULL,
  `domicilio` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `titulares`
--

INSERT INTO `titulares` (`id`, `apellido`, `nombre`, `dni`, `domicilio`, `created_at`, `updated_at`) VALUES
(1, 'Effertz', 'Providenci', '88770492', '5246 Schmitt Roads\nPort Eulaliahaven, MN 38961-5368', '2023-11-21 02:36:42', '2023-11-21 02:36:42'),
(2, 'Rogahn', 'Edmond', '24649177', '553 Kyleigh Pine Suite 930\nWest Eloisa, MA 99044', '2023-11-21 02:36:42', '2023-11-21 02:36:42'),
(3, 'Veum', 'Rafaela', '13132371', '97925 Ransom Club Suite 214\nLindhaven, NJ 43106-1309', '2023-11-21 02:36:42', '2023-11-21 02:36:42'),
(4, 'Haag', 'Celine', '34011316', '1378 Felicita Estates Apt. 694\nSouth Velvaberg, MN 97657-2895', '2023-11-21 02:36:42', '2023-11-21 02:36:42'),
(5, 'Harvey', 'Jaylen', '77463471', '63047 Celestine Shoals\nMozellside, ND 02647', '2023-11-21 02:36:42', '2023-11-21 02:36:42'),
(6, 'Balistreri', 'Akeem', '77467402', '238 Feest Dam Suite 585\nKaceymouth, AR 43415-9517', '2023-11-21 02:36:42', '2023-11-21 02:36:42'),
(7, 'Kohler', 'Jaycee', '93083021', '1579 Goldner Greens Apt. 355\nWest Wilfrid, OH 99376-4902', '2023-11-21 02:36:42', '2023-11-21 02:36:42'),
(8, 'Doyle', 'Antonietta', '68428275', '7693 Royce Hill\nChasitymouth, SC 91832-3905', '2023-11-21 02:36:42', '2023-11-21 02:36:42'),
(9, 'Kohler', 'Diana', '33212717', '573 Rolando Dale Suite 385\nWest Isac, KY 80731-1578', '2023-11-21 02:36:42', '2023-11-21 02:36:42'),
(10, 'Runte', 'Burnice', '14563970', '29341 Korbin Turnpike Suite 062\nHalvorsonbury, SD 07728', '2023-11-21 02:36:42', '2023-11-21 02:36:42'),
(11, 'Jacobson', 'Marcus', '41180283', '7735 Lemke Port\nNorth Gunnerfurt, MD 27382', '2023-11-21 02:36:42', '2023-11-21 02:36:42'),
(12, 'Gleason', 'Jared', '43350169', '307 Wiza Lodge Apt. 932\nEast Deborahmouth, MO 30961-5989', '2023-11-21 02:36:42', '2023-11-21 02:36:42'),
(13, 'Bins', 'Savanah', '99584787', '136 Russel Avenue\nNew Howardfurt, DE 47967-8432', '2023-11-21 02:36:42', '2023-11-21 02:36:42'),
(14, 'O\'Reilly', 'Wilhelm', '49833338', '62918 Ullrich Falls Suite 642\nAllyhaven, WA 56690-3217', '2023-11-21 02:36:42', '2023-11-21 02:36:42'),
(15, 'Nitzsche', 'Sandra', '58100409', '68016 Ryan Valleys Apt. 923\nNew Kristin, CA 49048', '2023-11-21 02:36:42', '2023-11-21 02:36:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Jonathan', 'chauquejonathanemmanuel@gmail.com', '2023-11-21 04:32:22', '$2y$12$cgToO2yDiAirifqRPTpwXObkUUctPNw9LgJLeSHfdUKFBt0gPY95C', 'Z5uC5S0tZ2', '2023-11-21 04:32:23', '2023-11-21 04:32:23');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autos`
--
ALTER TABLE `autos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `autos_titular_id_foreign` (`titular_id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `infracciones`
--
ALTER TABLE `infracciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `infracciones_auto_id_foreign` (`auto_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `titulares`
--
ALTER TABLE `titulares`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autos`
--
ALTER TABLE `autos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `infracciones`
--
ALTER TABLE `infracciones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `titulares`
--
ALTER TABLE `titulares`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `autos`
--
ALTER TABLE `autos`
  ADD CONSTRAINT `autos_titular_id_foreign` FOREIGN KEY (`titular_id`) REFERENCES `titulares` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `infracciones`
--
ALTER TABLE `infracciones`
  ADD CONSTRAINT `infracciones_auto_id_foreign` FOREIGN KEY (`auto_id`) REFERENCES `autos` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
