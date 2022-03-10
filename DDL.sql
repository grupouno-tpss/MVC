-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-03-2022 a las 20:44:49
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mvc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE `contactos` (
  `id_contacto` int(11) NOT NULL,
  `num_telefono` varchar(45) DEFAULT NULL,
  `num_celular` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`id_contacto`, `num_telefono`, `num_celular`) VALUES
(3289904, '123', '3227519202'),
(756664359, '123', '123'),
(1892417910, '32454335', '3227519202'),
(1901861112, '32454335', '324654');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dates`
--

CREATE TABLE `dates` (
  `id_date` int(11) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `dates`
--

INSERT INTO `dates` (`id_date`, `date`, `status`) VALUES
(4522733, '0000-00-00', 'AVAILABLE'),
(17447870, '2022-02-27', 'AVAILABLE'),
(33453405, '0000-00-00', 'AVAILABLE'),
(58533182, '0000-00-00', 'AVAILABLE'),
(72174119, '2022-03-27', 'AVAILABLE'),
(108280255, '2022-03-31', 'AVAILABLE'),
(126570817, '2022-03-31', 'AVAILABLE'),
(140966820, '2022-03-24', 'AVAILABLE'),
(167721885, '0000-00-00', 'AVAILABLE'),
(215959958, '2022-03-24', 'AVAILABLE'),
(242087203, '0000-00-00', 'AVAILABLE'),
(250289486, '2022-03-31', 'AVAILABLE'),
(296372277, '0000-00-00', 'AVAILABLE'),
(297397179, '0000-00-00', 'AVAILABLE'),
(349592806, '2022-03-23', 'AVAILABLE'),
(351933612, '2022-03-26', 'AVAILABLE'),
(372659762, '2022-03-06', 'NOT AVAILABLE'),
(374289326, '2022-03-27', 'AVAILABLE'),
(378562580, '2022-03-30', 'AVAILABLE'),
(430740673, '2022-03-25', 'AVAILABLE'),
(431346781, '0000-00-00', 'AVAILABLE'),
(462722013, '2022-03-15', 'AVAILABLE'),
(465324775, '2022-03-09', 'AVAILABLE'),
(481711711, '2022-03-27', 'AVAILABLE'),
(490102472, '2022-02-27', 'AVAILABLE'),
(513627525, '0000-00-00', 'AVAILABLE'),
(529075174, '2022-02-06', 'AVAILABLE'),
(531549844, '2022-02-13', 'AVAILABLE'),
(533698196, '2022-02-26', 'AVAILABLE'),
(536027015, '2022-03-27', 'AVAILABLE'),
(538975356, '2022-03-27', 'AVAILABLE'),
(629988144, '0000-00-00', 'AVAILABLE'),
(677252598, '2022-02-20', 'AVAILABLE'),
(680730804, '0000-00-00', 'AVAILABLE'),
(686652933, '2022-03-31', 'AVAILABLE'),
(734897455, '0000-00-00', 'AVAILABLE'),
(762189186, '0000-00-00', 'AVAILABLE'),
(798306034, '0000-00-00', 'AVAILABLE'),
(803680268, '0000-00-00', 'AVAILABLE'),
(841014254, '0000-00-00', 'AVAILABLE'),
(919533303, '0000-00-00', 'AVAILABLE'),
(965035691, '2022-03-25', 'AVAILABLE'),
(969218437, '0000-00-00', 'AVAILABLE'),
(999788886, '2022-03-27', 'AVAILABLE'),
(1041314947, '2022-03-27', 'AVAILABLE'),
(1048496955, '0000-00-00', 'AVAILABLE'),
(1079693562, '0000-00-00', 'AVAILABLE'),
(1087014497, '2022-03-31', 'AVAILABLE'),
(1097710641, '2022-03-26', 'AVAILABLE'),
(1133141444, '0000-00-00', 'AVAILABLE'),
(1144656945, '0000-00-00', 'AVAILABLE'),
(1148284481, '0000-00-00', 'AVAILABLE'),
(1193455683, '2022-03-27', 'AVAILABLE'),
(1197495169, '2022-03-27', 'AVAILABLE'),
(1208164047, '0000-00-00', 'AVAILABLE'),
(1211372926, '0000-00-00', 'AVAILABLE'),
(1246486309, '2022-02-16', 'AVAILABLE'),
(1258317500, '0000-00-00', 'AVAILABLE'),
(1290826813, '2022-02-27', 'AVAILABLE'),
(1317351991, '0000-00-00', 'AVAILABLE'),
(1318382884, '0000-00-00', 'AVAILABLE'),
(1319721773, '2022-02-28', 'AVAILABLE'),
(1332569679, '2022-03-27', 'AVAILABLE'),
(1336729315, '0000-00-00', 'AVAILABLE'),
(1350724015, '0000-00-00', 'AVAILABLE'),
(1375451006, '0000-00-00', 'AVAILABLE'),
(1388331478, '0000-00-00', 'AVAILABLE'),
(1394942221, '2022-03-27', 'AVAILABLE'),
(1441543272, '0000-00-00', 'AVAILABLE'),
(1447829012, '0000-00-00', 'AVAILABLE'),
(1493414869, '2022-02-24', 'AVAILABLE'),
(1494522246, '2022-03-31', 'AVAILABLE'),
(1599352918, '2022-03-30', 'AVAILABLE'),
(1736129010, '2022-03-27', 'AVAILABLE'),
(1775966296, '0000-00-00', 'AVAILABLE'),
(1791347565, '0000-00-00', 'AVAILABLE'),
(1822941855, '2022-03-30', 'AVAILABLE'),
(1824430330, '2022-03-31', 'AVAILABLE'),
(1825881804, '0000-00-00', 'AVAILABLE'),
(1859285587, '2022-03-27', 'AVAILABLE'),
(1893501637, '0000-00-00', 'AVAILABLE'),
(1942912411, '2022-03-15', 'AVAILABLE'),
(2029577268, '2022-03-31', 'AVAILABLE'),
(2036968612, '2022-03-27', 'AVAILABLE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `details`
--

CREATE TABLE `details` (
  `id_detail` int(11) NOT NULL,
  `detail` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `details`
--

INSERT INTO `details` (`id_detail`, `detail`) VALUES
(4522733, ''),
(33453405, ''),
(58533182, ''),
(72174119, 'dfasdfas'),
(108280255, 'dfsasdfasd'),
(126570817, 'dfasdfas'),
(140966820, 'fasdfa'),
(167721885, ''),
(215959958, 'gsdfgsd'),
(242087203, ''),
(250289486, 'vbcj'),
(296372277, ''),
(297397179, ''),
(349592806, 'gsdfgsd'),
(351933612, 'fasdfa'),
(374289326, 'dfasdfas'),
(378562580, 'dfasdfa'),
(430740673, 'mgj'),
(431346781, ''),
(462722013, 'Dos mesas'),
(465324775, 'dfasdfa'),
(481711711, 'dfasdfas'),
(490102472, 'gsdfgsd'),
(513627525, ''),
(533698196, ''),
(536027015, 'gsdfgsd'),
(538975356, 'fasdfa'),
(629988144, ''),
(680730804, ''),
(686652933, 'fasdfa'),
(734897455, ''),
(762189186, ''),
(798306034, ''),
(803680268, ''),
(841014254, ''),
(919533303, ''),
(965035691, 'sdfas'),
(969218437, ''),
(999788886, 'dfasdfas'),
(1041314947, 'dfasdfas'),
(1048496955, ''),
(1079693562, ''),
(1087014497, 'hola'),
(1097710641, 'gsfgdf'),
(1133141444, ''),
(1144656945, ''),
(1148284481, ''),
(1193455683, 'dfasdfas'),
(1197495169, 'dfsasdfasd'),
(1208164047, ''),
(1211372926, ''),
(1258317500, ''),
(1290826813, ''),
(1317351991, ''),
(1318382884, ''),
(1332569679, 'dfasdfas'),
(1336729315, ''),
(1350724015, ''),
(1375451006, ''),
(1388331478, ''),
(1394942221, 'gsdfgsd'),
(1441543272, ''),
(1447829012, ''),
(1493414869, ''),
(1494522246, 'gsdfgsd'),
(1599352918, 'Hola bros'),
(1736129010, 'fasdfa'),
(1775966296, ''),
(1791347565, ''),
(1822941855, 'Hola bros'),
(1824430330, 'gsfgdf'),
(1825881804, ''),
(1859285587, 'dfasdfas'),
(1893501637, ''),
(1942912411, 'x'),
(2029577268, 'hola');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menus`
--

CREATE TABLE `menus` (
  `id_menu` int(11) NOT NULL,
  `title_menu` varchar(70) NOT NULL,
  `description_menu` varchar(1000) NOT NULL,
  `price_menu` int(45) DEFAULT NULL,
  `img_menu` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `menus`
--

INSERT INTO `menus` (`id_menu`, `title_menu`, `description_menu`, `price_menu`, `img_menu`) VALUES
(1847997509, 'RAMEN 2', 'Si quisiéramos definirlo de una manera más o menos rápida, podríamos decir que el ramen (ラーメン) es una sopa de fideos, de origen chino, normalmente preparada con una base de caldo de carne, que se sirve con una gran variedad de toppings', 30000, 'https://img.freepik.com/vector-gratis/menu-restaurante-moderno-comida-rapida_52683-48982.jpg?size=626&ext=jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menus_categories`
--

CREATE TABLE `menus_categories` (
  `id_category` int(11) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `menus_categories`
--

INSERT INTO `menus_categories` (`id_category`, `category`) VALUES
(1228154616, 'ENTRADAS'),
(1303517700, 'BEBIDAS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menus_has_menus_categories`
--

CREATE TABLE `menus_has_menus_categories` (
  `menus_id_menu` int(11) NOT NULL,
  `menus_categories_id_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `menus_has_menus_categories`
--

INSERT INTO `menus_has_menus_categories` (`menus_id_menu`, `menus_categories_id_category`) VALUES
(1847997509, 1228154616);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservations`
--

CREATE TABLE `reservations` (
  `id_reservation` int(11) NOT NULL,
  `amount_people` int(3) NOT NULL,
  `status` varchar(20) DEFAULT NULL,
  `dates_id_date` int(11) NOT NULL,
  `details_id_detail` int(11) NOT NULL,
  `services_id_service` int(11) NOT NULL,
  `schedules_id_schedule` int(11) NOT NULL,
  `users_id_users` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reservations`
--

INSERT INTO `reservations` (`id_reservation`, `amount_people`, `status`, `dates_id_date`, `details_id_detail`, `services_id_service`, `schedules_id_schedule`, `users_id_users`) VALUES
(378562580, 3, 'ACTIVE', 378562580, 378562580, 2, 1112181601, 756664359),
(430740673, 3, 'ACTIVE', 430740673, 430740673, 2, 1980260745, 1901861112),
(465324775, 3, 'ACTIVE', 465324775, 465324775, 2, 1980260745, 756664359),
(965035691, 3, 'ACTIVE', 965035691, 965035691, 1, 1112181601, 3289904),
(1097710641, 3, 'NOT ACTIVE', 1097710641, 1097710641, 2, 1112181601, 3289904),
(1824430330, 3, 'ACTIVE', 1824430330, 1824430330, 2, 1980260745, 3289904),
(2029577268, 3, 'NOT ACTIVE', 2029577268, 2029577268, 2, 1112181601, 3289904);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservations_has_menus`
--

CREATE TABLE `reservations_has_menus` (
  `reservations_id_reservation` int(11) NOT NULL,
  `menus_id_menu` int(11) NOT NULL,
  `user_id` int(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reservations_has_menus`
--

INSERT INTO `reservations_has_menus` (`reservations_id_reservation`, `menus_id_menu`, `user_id`) VALUES
(378562580, 1847997509, 756664359),
(430740673, 1847997509, 1901861112),
(465324775, 1847997509, 756664359),
(965035691, 1847997509, 3289904),
(1097710641, 1847997509, 3289904),
(1824430330, 1847997509, 3289904),
(2029577268, 1847997509, 3289904);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservations_has_menus1`
--

CREATE TABLE `reservations_has_menus1` (
  `reservations_id_reservation` int(11) NOT NULL,
  `menus_id_menu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_rol` int(11) NOT NULL,
  `rol` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `rol`) VALUES
(1, 'CLIENTE'),
(2, 'EMPLEADO'),
(3, 'ADMINISTRADOR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `schedules`
--

CREATE TABLE `schedules` (
  `id_schedule` int(11) NOT NULL,
  `schedule` time NOT NULL,
  `status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `schedules`
--

INSERT INTO `schedules` (`id_schedule`, `schedule`, `status`) VALUES
(460759279, '01:58:00', 'AVAILABLE'),
(1112181601, '19:31:00', 'AVAILABLE'),
(1980260745, '22:55:00', 'AVAILABLE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `services`
--

CREATE TABLE `services` (
  `id_service` int(11) NOT NULL,
  `service` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `services`
--

INSERT INTO `services` (`id_service`, `service`) VALUES
(1, 'Alice'),
(2, 'Saber'),
(3, 'Shinobu');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(75) NOT NULL,
  `p_nombre` varchar(45) NOT NULL,
  `s_nombre` varchar(45) DEFAULT NULL,
  `p_apellido` varchar(45) NOT NULL,
  `s_apellido` varchar(45) DEFAULT NULL,
  `contactos_id_contacto` int(11) NOT NULL,
  `roles_id_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_users`, `email`, `password`, `p_nombre`, `s_nombre`, `p_apellido`, `s_apellido`, `contactos_id_contacto`, `roles_id_rol`) VALUES
(3289904, 'jhostriana11@misena.edu.co', '$2y$10$OtRWRoSNtnzbiLqPEubtBO9LN.Ae7G4jAEPf9G', 'Jhojann', 'Estiven ', 'Triana', 'Quiroga', 3289904, 1),
(756664359, 'andresricaute98@gmail.com', '$2y$10$Wb8bAN4P.ELz4/wsztb.T.yt/SjPD86zy4WrqFu2iGKzxt31Psmvm', 'Andres', 'Felipo', 'Ramos', '', 756664359, 1),
(1892417910, 'delfina@gmail.com', '$2y$10$5teKGSyUWWaOehQOShoSHeffpPxG7QDy2SIhwQpe9nDU8GeOrCYrK', 'Delfina', 'Quiroga', 'Gualdron', 'Quiroga', 1892417910, 2),
(1901861112, 'stivenjhojan011@gmail.com', '$2y$10$ewCwYcuOq5/srEXWCpkrbOGRRU2HUw1XAsDi0wmczwGIOUVNgY.CC', 'Jhojann', 'Estiven ', 'Triana', '', 1901861112, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id_contacto`);

--
-- Indices de la tabla `dates`
--
ALTER TABLE `dates`
  ADD PRIMARY KEY (`id_date`);

--
-- Indices de la tabla `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indices de la tabla `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indices de la tabla `menus_categories`
--
ALTER TABLE `menus_categories`
  ADD PRIMARY KEY (`id_category`);

--
-- Indices de la tabla `menus_has_menus_categories`
--
ALTER TABLE `menus_has_menus_categories`
  ADD PRIMARY KEY (`menus_id_menu`,`menus_categories_id_category`),
  ADD KEY `fk_menus_has_menus_categories_menus_categories1_idx` (`menus_categories_id_category`),
  ADD KEY `fk_menus_has_menus_categories_menus1_idx` (`menus_id_menu`);

--
-- Indices de la tabla `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id_reservation`),
  ADD KEY `fk_reservations_dates1_idx` (`dates_id_date`),
  ADD KEY `fk_reservations_details1_idx` (`details_id_detail`),
  ADD KEY `fk_reservations_services1_idx` (`services_id_service`),
  ADD KEY `fk_reservations_schedules1_idx` (`schedules_id_schedule`),
  ADD KEY `fk_reservations_users1_idx` (`users_id_users`);

--
-- Indices de la tabla `reservations_has_menus`
--
ALTER TABLE `reservations_has_menus`
  ADD PRIMARY KEY (`reservations_id_reservation`,`menus_id_menu`),
  ADD KEY `fk_reservations_has_menus_menus1_idx` (`menus_id_menu`),
  ADD KEY `fk_reservations_has_menus_reservations1_idx` (`reservations_id_reservation`);

--
-- Indices de la tabla `reservations_has_menus1`
--
ALTER TABLE `reservations_has_menus1`
  ADD PRIMARY KEY (`reservations_id_reservation`,`menus_id_menu`),
  ADD KEY `fk_reservations_has_menus1_menus1_idx` (`menus_id_menu`),
  ADD KEY `fk_reservations_has_menus1_reservations1_idx` (`reservations_id_reservation`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id_schedule`);

--
-- Indices de la tabla `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id_service`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`),
  ADD KEY `fk_users_contactos1_idx` (`contactos_id_contacto`),
  ADD KEY `fk_users_roles1_idx` (`roles_id_rol`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `menus_has_menus_categories`
--
ALTER TABLE `menus_has_menus_categories`
  ADD CONSTRAINT `fk_menus_has_menus_categories_menus1` FOREIGN KEY (`menus_id_menu`) REFERENCES `menus` (`id_menu`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_menus_has_menus_categories_menus_categories1` FOREIGN KEY (`menus_categories_id_category`) REFERENCES `menus_categories` (`id_category`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `fk_reservations_dates1` FOREIGN KEY (`dates_id_date`) REFERENCES `dates` (`id_date`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_reservations_details1` FOREIGN KEY (`details_id_detail`) REFERENCES `details` (`id_detail`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_reservations_schedules1` FOREIGN KEY (`schedules_id_schedule`) REFERENCES `schedules` (`id_schedule`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_reservations_services1` FOREIGN KEY (`services_id_service`) REFERENCES `services` (`id_service`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_reservations_users1` FOREIGN KEY (`users_id_users`) REFERENCES `users` (`id_users`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `reservations_has_menus`
--
ALTER TABLE `reservations_has_menus`
  ADD CONSTRAINT `fk_reservations_has_menus_menus1` FOREIGN KEY (`menus_id_menu`) REFERENCES `menus` (`id_menu`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_reservations_has_menus_reservations1` FOREIGN KEY (`reservations_id_reservation`) REFERENCES `reservations` (`id_reservation`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `reservations_has_menus1`
--
ALTER TABLE `reservations_has_menus1`
  ADD CONSTRAINT `fk_reservations_has_menus1_menus1` FOREIGN KEY (`menus_id_menu`) REFERENCES `menus` (`id_menu`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_reservations_has_menus1_reservations1` FOREIGN KEY (`reservations_id_reservation`) REFERENCES `reservations` (`id_reservation`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_users_contactos1` FOREIGN KEY (`contactos_id_contacto`) REFERENCES `contactos` (`id_contacto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_users_roles1` FOREIGN KEY (`roles_id_rol`) REFERENCES `roles` (`id_rol`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
