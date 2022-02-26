-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-02-2022 a las 23:40:54
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2
SET
  SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET
  time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */
;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */
;

/*!40101 SET NAMES utf8mb4 */
;

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
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

--
-- Volcado de datos para la tabla `contactos`
--
INSERT INTO
  `contactos` (`id_contacto`, `num_telefono`, `num_celular`)
VALUES
  (315192503, '32454335', '324654'),
  (621929363, '32454335', '324654'),
  (1869790832, '32454335', '324654');

-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `dates`
--
CREATE TABLE `dates` (
  `id_date` int(11) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

--
-- Volcado de datos para la tabla `dates`
--
INSERT INTO
  `dates` (`id_date`, `date`, `status`)
VALUES
  (2036968612, '2022-03-27', 'NOT AVAILABLE');

-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `details`
--
CREATE TABLE `details` (
  `id_detail` int(11) NOT NULL,
  `detail` varchar(250) DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

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
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

--
-- Volcado de datos para la tabla `menus`
--
INSERT INTO
  `menus` (
    `id_menu`,
    `title_menu`,
    `description_menu`,
    `price_menu`,
    `img_menu`
  )
VALUES
  (
    318753853,
    'fgsdf',
    'Si quisiéramos definirlo de una manera más o menos rápida, podríamos decir que el ramen (ラーメン) es una sopa de fideos, de origen chino, normalmente preparada con una base de caldo de carne, que se sirve con una gran variedad de toppings',
    30000,
    'https://www.youtube.com/watch?v=TDRia-Z9Msk&list=PL5oeKjXx5mQTo9hj8pAsL2dCI7MB92-A1&ab_channel=ClaudiaMagaly'
  ),
  (
    873042585,
    'GYOZAS DE CERDO',
    'hola',
    70000,
    'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRzDp_D0waP966Q2mPlHJGqCT-iSTM9GDXZQA&usqp=CAU'
  );

-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `menus_categories`
--
CREATE TABLE `menus_categories` (
  `id_category` int(11) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

--
-- Volcado de datos para la tabla `menus_categories`
--
INSERT INTO
  `menus_categories` (`id_category`, `category`)
VALUES
  (1228154616, 'ENTRADAS');

-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `menus_has_menus_categories`
--
CREATE TABLE `menus_has_menus_categories` (
  `menus_id_menu` int(11) NOT NULL,
  `menus_categories_id_category` int(11) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

--
-- Volcado de datos para la tabla `menus_has_menus_categories`
--
INSERT INTO
  `menus_has_menus_categories` (`menus_id_menu`, `menus_categories_id_category`)
VALUES
  (318753853, 1228154616),
  (873042585, 1228154616);

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
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `reservations_has_menus`
--
CREATE TABLE `reservations_has_menus` (
  `reservations_id_reservation` int(11) NOT NULL,
  `menus_id_menu` int(11) NOT NULL,
  `user_id` int(25) DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `reservations_has_menus1`
--
CREATE TABLE `reservations_has_menus1` (
  `reservations_id_reservation` int(11) NOT NULL,
  `menus_id_menu` int(11) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `roles`
--
CREATE TABLE `roles` (
  `id_rol` int(11) NOT NULL,
  `rol` varchar(45) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--
INSERT INTO
  `roles` (`id_rol`, `rol`)
VALUES
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
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

--
-- Volcado de datos para la tabla `schedules`
--
INSERT INTO
  `schedules` (`id_schedule`, `schedule`, `status`)
VALUES
  (1112181601, '19:31:00', 'AVAILABLE');

-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `services`
--
CREATE TABLE `services` (
  `id_service` int(11) NOT NULL,
  `service` varchar(45) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

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
  `contactos_id_contacto` int(11) NOT NULL,
  `roles_id_rol` int(11) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

--
-- Volcado de datos para la tabla `users`
--
INSERT INTO
  `users` (
    `id_users`,
    `email`,
    `password`,
    `p_nombre`,
    `s_nombre`,
    `p_apellido`,
    `s_apellido`,
    `contactos_id_contacto`,
    `roles_id_rol`
  )
VALUES
  (
    315192503,
    'diego@gmail.com',
    '1022322859',
    'Diego',
    'Andrés',
    'Triana',
    '',
    315192503,
    2
  ),
  (
    1869790832,
    'jhostriana11@misena.edu.co',
    '1022322859',
    'Jhojann',
    'Estiven ',
    'Triana',
    '',
    1869790832,
    3
  );

--
-- Índices para tablas volcadas
--
--
-- Indices de la tabla `contactos`
--
ALTER TABLE
  `contactos`
ADD
  PRIMARY KEY (`id_contacto`);

--
-- Indices de la tabla `dates`
--
ALTER TABLE
  `dates`
ADD
  PRIMARY KEY (`id_date`);

--
-- Indices de la tabla `details`
--
ALTER TABLE
  `details`
ADD
  PRIMARY KEY (`id_detail`);

--
-- Indices de la tabla `menus`
--
ALTER TABLE
  `menus`
ADD
  PRIMARY KEY (`id_menu`);

--
-- Indices de la tabla `menus_categories`
--
ALTER TABLE
  `menus_categories`
ADD
  PRIMARY KEY (`id_category`);

--
-- Indices de la tabla `menus_has_menus_categories`
--
ALTER TABLE
  `menus_has_menus_categories`
ADD
  PRIMARY KEY (`menus_id_menu`, `menus_categories_id_category`),
ADD
  KEY `fk_menus_has_menus_categories_menus_categories1_idx` (`menus_categories_id_category`),
ADD
  KEY `fk_menus_has_menus_categories_menus1_idx` (`menus_id_menu`);

--
-- Indices de la tabla `reservations`
--
ALTER TABLE
  `reservations`
ADD
  PRIMARY KEY (`id_reservation`),
ADD
  KEY `fk_reservations_dates1_idx` (`dates_id_date`),
ADD
  KEY `fk_reservations_details1_idx` (`details_id_detail`),
ADD
  KEY `fk_reservations_services1_idx` (`services_id_service`),
ADD
  KEY `fk_reservations_schedules1_idx` (`schedules_id_schedule`),
ADD
  KEY `fk_reservations_users1_idx` (`users_id_users`);

--
-- Indices de la tabla `reservations_has_menus`
--
ALTER TABLE
  `reservations_has_menus`
ADD
  PRIMARY KEY (`reservations_id_reservation`, `menus_id_menu`),
ADD
  KEY `fk_reservations_has_menus_menus1_idx` (`menus_id_menu`),
ADD
  KEY `fk_reservations_has_menus_reservations1_idx` (`reservations_id_reservation`);

--
-- Indices de la tabla `reservations_has_menus1`
--
ALTER TABLE
  `reservations_has_menus1`
ADD
  PRIMARY KEY (`reservations_id_reservation`, `menus_id_menu`),
ADD
  KEY `fk_reservations_has_menus1_menus1_idx` (`menus_id_menu`),
ADD
  KEY `fk_reservations_has_menus1_reservations1_idx` (`reservations_id_reservation`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE
  `roles`
ADD
  PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `schedules`
--
ALTER TABLE
  `schedules`
ADD
  PRIMARY KEY (`id_schedule`);

--
-- Indices de la tabla `services`
--
ALTER TABLE
  `services`
ADD
  PRIMARY KEY (`id_service`);

--
-- Indices de la tabla `users`
--
ALTER TABLE
  `users`
ADD
  PRIMARY KEY (`id_users`),
ADD
  KEY `fk_users_contactos1_idx` (`contactos_id_contacto`),
ADD
  KEY `fk_users_roles1_idx` (`roles_id_rol`);

--
-- Restricciones para tablas volcadas
--
--
-- Filtros para la tabla `menus_has_menus_categories`
--
ALTER TABLE
  `menus_has_menus_categories`
ADD
  CONSTRAINT `fk_menus_has_menus_categories_menus1` FOREIGN KEY (`menus_id_menu`) REFERENCES `menus` (`id_menu`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD
  CONSTRAINT `fk_menus_has_menus_categories_menus_categories1` FOREIGN KEY (`menus_categories_id_category`) REFERENCES `menus_categories` (`id_category`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `reservations`
--
ALTER TABLE
  `reservations`
ADD
  CONSTRAINT `fk_reservations_dates1` FOREIGN KEY (`dates_id_date`) REFERENCES `dates` (`id_date`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD
  CONSTRAINT `fk_reservations_details1` FOREIGN KEY (`details_id_detail`) REFERENCES `details` (`id_detail`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD
  CONSTRAINT `fk_reservations_schedules1` FOREIGN KEY (`schedules_id_schedule`) REFERENCES `schedules` (`id_schedule`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD
  CONSTRAINT `fk_reservations_services1` FOREIGN KEY (`services_id_service`) REFERENCES `services` (`id_service`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD
  CONSTRAINT `fk_reservations_users1` FOREIGN KEY (`users_id_users`) REFERENCES `users` (`id_users`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `reservations_has_menus`
--
ALTER TABLE
  `reservations_has_menus`
ADD
  CONSTRAINT `fk_reservations_has_menus_menus1` FOREIGN KEY (`menus_id_menu`) REFERENCES `menus` (`id_menu`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD
  CONSTRAINT `fk_reservations_has_menus_reservations1` FOREIGN KEY (`reservations_id_reservation`) REFERENCES `reservations` (`id_reservation`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `reservations_has_menus1`
--
ALTER TABLE
  `reservations_has_menus1`
ADD
  CONSTRAINT `fk_reservations_has_menus1_menus1` FOREIGN KEY (`menus_id_menu`) REFERENCES `menus` (`id_menu`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD
  CONSTRAINT `fk_reservations_has_menus1_reservations1` FOREIGN KEY (`reservations_id_reservation`) REFERENCES `reservations` (`id_reservation`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `users`
--
ALTER TABLE
  `users`
ADD
  CONSTRAINT `fk_users_contactos1` FOREIGN KEY (`contactos_id_contacto`) REFERENCES `contactos` (`id_contacto`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD
  CONSTRAINT `fk_users_roles1` FOREIGN KEY (`roles_id_rol`) REFERENCES `roles` (`id_rol`) ON DELETE CASCADE ON UPDATE CASCADE;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;