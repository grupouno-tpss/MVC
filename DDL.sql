-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-02-2022 a las 21:13:30
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
(231941234, '32454335', '324654'),
(383403847, '32454335', '324654'),
(457513813, '32454335', '324654'),
(628976969, '32454335', '324654'),
(1612171322, '45345', '5435');

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
(127750032, '2022-02-27', 'AVAILABLE'),
(142805129, '0000-00-00', 'AVAILABLE'),
(167798704, '2022-02-27', 'AVAILABLE'),
(322421313, '0000-00-00', 'AVAILABLE'),
(416101879, '2022-02-27', 'DISPONIBLE'),
(494015758, '0000-00-00', 'AVAILABLE'),
(540206956, '2022-02-27', 'AVAILABLE'),
(583955245, '2022-02-27', 'AVAILABLE'),
(693708409, '2022-02-27', 'AVAILABLE'),
(761319632, '2022-02-01', 'AVAILABLE'),
(886666732, '2022-02-27', 'AVAILABLE'),
(990965086, '2022-02-27', 'AVAILABLE'),
(1100417561, '0000-00-00', 'AVAILABLE'),
(1142908134, '0000-00-00', 'AVAILABLE'),
(1264032189, '0000-00-00', 'AVAILABLE'),
(1326771938, '0000-00-00', 'AVAILABLE'),
(1702783497, '0000-00-00', 'AVAILABLE'),
(1792643572, '2022-02-27', 'AVAILABLE'),
(2072428118, '0000-00-00', 'AVAILABLE');

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
(127750032, 'HOLA A TODOOOS'),
(142805129, ''),
(167798704, 'HOLA A TODOOOS'),
(322421313, ''),
(416101879, ''),
(494015758, ''),
(540206956, ''),
(583955245, ''),
(693708409, ''),
(761319632, ''),
(886666732, ''),
(990965086, ''),
(1100417561, ''),
(1142908134, ''),
(1264032189, ''),
(1326771938, ''),
(1702783497, ''),
(1717870534, ''),
(1758254297, ''),
(1791620972, ''),
(1792643572, 'HOLA A TODOOOS'),
(1889884882, ''),
(1960921179, ''),
(1963077339, ''),
(1989253137, ''),
(2072428118, ''),
(2081762740, ''),
(2107199814, ''),
(2121236418, ''),
(2146882582, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menus`
--

CREATE TABLE `menus` (
  `id_menu` int(11) NOT NULL,
  `title_menu` varchar(70) NOT NULL,
  `description_menu` varchar(250) NOT NULL,
  `price_menu` varchar(45) DEFAULT NULL,
  `img_menu` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `menus`
--

INSERT INTO `menus` (`id_menu`, `title_menu`, `description_menu`, `price_menu`, `img_menu`) VALUES
(1, 'ONIGIRI', 'Riquísima bola de arroz rellena de diferentes ingredientes como el salmón o la ciruela encurtida. Normalmente tiene una forma triangular y está envuelto en una pequeña tira de alga nori.', '50000', 'https://www.sal-pimienta.com/wp-content/uploads/2020/05/27_onigiri-blog-500x500.jpg'),
(2, 'SASHIM', 'Es una delicia japonesa que consiste principalmente en marisco o pescado crudo. Se sirve junto a él salsa de soja, wasabi, y un aderezo simple como rábano daikon rallado.', '50000', 'https://www.196flavors.com/wp-content/uploads/2019/12/sashimi-1-FP.jpeg'),
(3, 'UDON', 'Es un tipo de fideo grueso hecho de harina. Fue importado a Japón desde China en el siglo VI. Son normalmente servidos en un caldo a base de dashi, salsa de soja, y mirin. Según los ingredientes con los que se acompañe se diferencia entre los distint', '50000', 'https://www.196flavors.com/wp-content/uploads/2019/11/yaki-udon-1-FP.jpg'),
(4, 'SOBA', 'Este término se utiliza para referirse a los fideos finos  elaborados con harina de alforfón. Se sirven fríos con una salsa o caldo en que se los sumerge, o en caldo caliente como elramen. Por otra parte, es muy común en Japón referirse a los fideos ', '50000', 'https://i2.wp.com/golososdelmundo.com/wp-content/uploads/2017/07/zaru-soba.jpg?fit=1024%2C683');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menus_has_menu_categories`
--

CREATE TABLE `menus_has_menu_categories` (
  `menus_id_menu` int(11) NOT NULL,
  `menu_categories_id_menu_categories` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `menus_has_menu_categories`
--

INSERT INTO `menus_has_menu_categories` (`menus_id_menu`, `menu_categories_id_menu_categories`) VALUES
(1, 2),
(2, 2),
(3, 1),
(4, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu_categories`
--

CREATE TABLE `menu_categories` (
  `id_menu_categories` int(11) NOT NULL,
  `category` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `menu_categories`
--

INSERT INTO `menu_categories` (`id_menu_categories`, `category`) VALUES
(1, 'GRANOS'),
(2, 'VERDURAS'),
(3, 'BEBIDAS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservations`
--

CREATE TABLE `reservations` (
  `id_reservation` int(11) NOT NULL,
  `amount_people` int(3) NOT NULL,
  `status` varchar(20) DEFAULT NULL,
  `dates_id_date` int(11) NOT NULL,
  `schedules_id_schedule` int(11) NOT NULL,
  `users_id_users` int(11) NOT NULL,
  `details_id_detail` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reservations`
--

INSERT INTO `reservations` (`id_reservation`, `amount_people`, `status`, `dates_id_date`, `schedules_id_schedule`, `users_id_users`, `details_id_detail`) VALUES
(127750032, 3, 'NOT ACTIVE', 127750032, 3, 383403847, 127750032),
(167798704, 6, 'ACTIVE', 167798704, 4, 383403847, 167798704),
(693708409, 7, 'ACTIVE', 693708409, 1, 231941234, 693708409),
(761319632, 3, 'NOT ACTIVE', 127750032, 1, 383403847, 761319632),
(990965086, 3, 'NOT ACTIVE', 127750032, 1, 383403847, 990965086),
(1792643572, 3, 'NOT ACTIVE', 1792643572, 1, 231941234, 1792643572);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservations_has_menus`
--

CREATE TABLE `reservations_has_menus` (
  `reservations_id_reservation` int(11) NOT NULL,
  `menus_id_menu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reservations_has_menus`
--

INSERT INTO `reservations_has_menus` (`reservations_id_reservation`, `menus_id_menu`) VALUES
(127750032, 2),
(127750032, 3),
(167798704, 1),
(167798704, 2),
(167798704, 3),
(167798704, 4),
(693708409, 2),
(693708409, 3),
(693708409, 4),
(761319632, 2),
(990965086, 1),
(990965086, 2),
(990965086, 3),
(990965086, 4),
(1792643572, 2),
(1792643572, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservations_has_services`
--

CREATE TABLE `reservations_has_services` (
  `reservations_id_reservation` int(11) NOT NULL,
  `services_id_services` int(11) NOT NULL
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
(2, 'TRABAJADOR'),
(3, 'ADMINISTRADOR'),
(316, 'prueba'),
(389, 'prueba'),
(647, 'prueba'),
(978, 'prueba');

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
(1, '03:30:00', 'NOT AVAILABLE'),
(2, '04:30:00', 'AVAILABLE'),
(3, '05:30:00', 'AVAILABLE'),
(4, '06:30:00', 'AVAILABLE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `services`
--

CREATE TABLE `services` (
  `id_services` int(11) NOT NULL,
  `service` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `p_nombre` varchar(45) NOT NULL,
  `s_nombre` varchar(45) DEFAULT NULL,
  `p_apellido` varchar(45) NOT NULL,
  `s_apellido` varchar(45) DEFAULT NULL,
  `roles_id_rol` int(11) NOT NULL,
  `contactos_id_contacto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_users`, `email`, `password`, `p_nombre`, `s_nombre`, `p_apellido`, `s_apellido`, `roles_id_rol`, `contactos_id_contacto`) VALUES
(231941234, 'jhostriana11@misena.edu.co', '1022322859', 'Jhojann', 'Estiven ', 'Triana ', 'Quiroga', 1, 231941234),
(383403847, 'stivenjhojan011@gmail.com', '1022322859', 'Pinky', 'Estiven ', 'Triana ', 'Quiroga', 1, 383403847),
(457513813, 'cualquiera@gmail.com', '1022322859', 'Jhojann', 'Alberto', 'Pelaez', 'Quiroga', 1, 457513813),
(1612171322, 'diego@gmail.com', '1022322859', 'Pinky', 'Estiven ', 'Casallas', '', 2, 1612171322);

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
-- Indices de la tabla `menus_has_menu_categories`
--
ALTER TABLE `menus_has_menu_categories`
  ADD PRIMARY KEY (`menus_id_menu`,`menu_categories_id_menu_categories`),
  ADD KEY `fk_menus_has_menu_categories_menu_categories1_idx` (`menu_categories_id_menu_categories`),
  ADD KEY `fk_menus_has_menu_categories_menus1_idx` (`menus_id_menu`);

--
-- Indices de la tabla `menu_categories`
--
ALTER TABLE `menu_categories`
  ADD PRIMARY KEY (`id_menu_categories`);

--
-- Indices de la tabla `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id_reservation`),
  ADD KEY `fk_reservations_dates1_idx` (`dates_id_date`),
  ADD KEY `fk_reservations_schedules1_idx` (`schedules_id_schedule`),
  ADD KEY `fk_reservations_users1_idx` (`users_id_users`),
  ADD KEY `fk_reservations_details1_idx` (`details_id_detail`);

--
-- Indices de la tabla `reservations_has_menus`
--
ALTER TABLE `reservations_has_menus`
  ADD PRIMARY KEY (`reservations_id_reservation`,`menus_id_menu`),
  ADD KEY `fk_reservations_has_menus_menus1_idx` (`menus_id_menu`),
  ADD KEY `fk_reservations_has_menus_reservations1_idx` (`reservations_id_reservation`);

--
-- Indices de la tabla `reservations_has_services`
--
ALTER TABLE `reservations_has_services`
  ADD PRIMARY KEY (`reservations_id_reservation`,`services_id_services`),
  ADD KEY `fk_reservations_has_services_services1_idx` (`services_id_services`),
  ADD KEY `fk_reservations_has_services_reservations1_idx` (`reservations_id_reservation`);

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
  ADD PRIMARY KEY (`id_services`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`),
  ADD KEY `fk_users_roles_idx` (`roles_id_rol`),
  ADD KEY `fk_users_contactos1_idx` (`contactos_id_contacto`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `menus_has_menu_categories`
--
ALTER TABLE `menus_has_menu_categories`
  ADD CONSTRAINT `fk_menus_has_menu_categories_menu_categories1` FOREIGN KEY (`menu_categories_id_menu_categories`) REFERENCES `menu_categories` (`id_menu_categories`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_menus_has_menu_categories_menus1` FOREIGN KEY (`menus_id_menu`) REFERENCES `menus` (`id_menu`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `fk_reservations_dates1` FOREIGN KEY (`dates_id_date`) REFERENCES `dates` (`id_date`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_reservations_details1` FOREIGN KEY (`details_id_detail`) REFERENCES `details` (`id_detail`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_reservations_schedules1` FOREIGN KEY (`schedules_id_schedule`) REFERENCES `schedules` (`id_schedule`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_reservations_users1` FOREIGN KEY (`users_id_users`) REFERENCES `users` (`id_users`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `reservations_has_menus`
--
ALTER TABLE `reservations_has_menus`
  ADD CONSTRAINT `fk_reservations_has_menus_menus1` FOREIGN KEY (`menus_id_menu`) REFERENCES `menus` (`id_menu`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_reservations_has_menus_reservations1` FOREIGN KEY (`reservations_id_reservation`) REFERENCES `reservations` (`id_reservation`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `reservations_has_services`
--
ALTER TABLE `reservations_has_services`
  ADD CONSTRAINT `fk_reservations_has_services_reservations1` FOREIGN KEY (`reservations_id_reservation`) REFERENCES `reservations` (`id_reservation`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_reservations_has_services_services1` FOREIGN KEY (`services_id_services`) REFERENCES `services` (`id_services`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_users_contactos1` FOREIGN KEY (`contactos_id_contacto`) REFERENCES `contactos` (`id_contacto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_roles` FOREIGN KEY (`roles_id_rol`) REFERENCES `roles` (`id_rol`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
