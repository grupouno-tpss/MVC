-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-03-2022 a las 21:55:27
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
(129346812, '6987457', '3168594859'),
(194491129, '6987457', '3168594859'),
(315192503, '32454335', '324654'),
(427318569, '6487911', '3158965827'),
(441616206, '6958742', '3489657814'),
(459769172, '32454335', '324654'),
(621929363, '32454335', '324654'),
(651235022, '32454335', '324654'),
(662021904, '2708664', '3212243319'),
(709096698, '6489754', '3194896507'),
(739496694, '6478597', '3133059806'),
(739544277, '32454335', '324654'),
(889996061, '6498754', '3156984729'),
(912701116, '32454335', '324654'),
(976204529, '32454335', '324654'),
(997028372, '', '324654'),
(1319186859, '3214027931', '3214027931'),
(1661447119, '3214027931', '3214027931'),
(1765021230, '3214027931', '3214027931'),
(1842030796, '123', '1223'),
(1869790832, '32454335', '324654'),
(2050730869, '32454335', '324654');

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
(17447870, '2022-02-27', 'AVAILABLE'),
(32532954, '2022-03-31', 'AVAILABLE'),
(58533182, '0000-00-00', 'AVAILABLE'),
(74266449, '2022-03-31', 'AVAILABLE'),
(87055488, '0000-00-00', 'AVAILABLE'),
(104431665, '0000-00-00', 'AVAILABLE'),
(163530864, '0000-00-00', 'AVAILABLE'),
(215194570, '2022-03-31', 'AVAILABLE'),
(227302909, '0000-00-00', 'AVAILABLE'),
(305811520, '0000-00-00', 'AVAILABLE'),
(323115418, '0000-00-00', 'AVAILABLE'),
(400611039, '0000-00-00', 'AVAILABLE'),
(442197623, '2022-03-31', 'AVAILABLE'),
(453660749, '0000-00-00', 'AVAILABLE'),
(484824005, '2022-03-31', 'AVAILABLE'),
(490102472, '2022-02-27', 'AVAILABLE'),
(515934618, '0000-00-00', 'AVAILABLE'),
(520508722, '2022-03-15', 'AVAILABLE'),
(529075174, '2022-02-06', 'AVAILABLE'),
(531549844, '2022-02-13', 'AVAILABLE'),
(533698196, '2022-02-26', 'AVAILABLE'),
(536027015, '2022-03-27', 'AVAILABLE'),
(567821724, '0000-00-00', 'AVAILABLE'),
(648506529, '0000-00-00', 'AVAILABLE'),
(661304800, '0000-00-00', 'AVAILABLE'),
(677252598, '2022-02-20', 'AVAILABLE'),
(682384857, '0000-00-00', 'AVAILABLE'),
(683020007, '2022-03-31', 'AVAILABLE'),
(684964767, '0000-00-00', 'AVAILABLE'),
(803680268, '0000-00-00', 'AVAILABLE'),
(808787465, '2022-03-31', 'AVAILABLE'),
(833458360, '0000-00-00', 'AVAILABLE'),
(860383811, '0000-00-00', 'AVAILABLE'),
(936660714, '0000-00-00', 'AVAILABLE'),
(980978703, '2022-03-31', 'AVAILABLE'),
(1025743293, '0000-00-00', 'AVAILABLE'),
(1071668742, '0000-00-00', 'AVAILABLE'),
(1079693562, '0000-00-00', 'AVAILABLE'),
(1144562970, '0000-00-00', 'AVAILABLE'),
(1208951457, '2022-03-24', 'AVAILABLE'),
(1246486309, '2022-02-16', 'AVAILABLE'),
(1255668367, '2022-03-31', 'AVAILABLE'),
(1258752099, '2022-03-31', 'AVAILABLE'),
(1290826813, '2022-02-27', 'AVAILABLE'),
(1291807934, '2022-03-31', 'AVAILABLE'),
(1292555103, '0000-00-00', 'AVAILABLE'),
(1297160061, '2022-03-31', 'AVAILABLE'),
(1309399576, '2022-03-31', 'AVAILABLE'),
(1318382884, '0000-00-00', 'AVAILABLE'),
(1319721773, '2022-02-28', 'AVAILABLE'),
(1328233687, '0000-00-00', 'AVAILABLE'),
(1354630722, '2022-03-31', 'AVAILABLE'),
(1388331478, '0000-00-00', 'AVAILABLE'),
(1398514154, '2022-03-31', 'AVAILABLE'),
(1442574503, '2022-03-12', 'NOT AVAILABLE'),
(1474078413, '0000-00-00', 'AVAILABLE'),
(1493414869, '2022-02-24', 'AVAILABLE'),
(1528952008, '0000-00-00', 'AVAILABLE'),
(1548166819, '2022-04-02', 'NOT AVAILABLE'),
(1617803991, '2022-03-31', 'AVAILABLE'),
(1705788854, '2022-03-31', 'AVAILABLE'),
(1743342533, '2022-03-31', 'AVAILABLE'),
(1772079363, '2022-03-31', 'AVAILABLE'),
(1774803533, '2022-05-13', 'NOT AVAILABLE'),
(1782964961, '0000-00-00', 'AVAILABLE'),
(1809640900, '2022-03-31', 'AVAILABLE'),
(1861766844, '2022-03-31', 'AVAILABLE'),
(1983815842, '2022-03-31', 'AVAILABLE'),
(2036968612, '2022-03-27', 'AVAILABLE'),
(2052633810, '0000-00-00', 'AVAILABLE'),
(2095147553, '2022-03-31', 'AVAILABLE');

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
(32532954, 'sfdgsdf'),
(58533182, ''),
(74266449, 'sfdgsdf'),
(87055488, ''),
(104431665, ''),
(163530864, ''),
(215194570, 'gsdfg'),
(227302909, ''),
(305811520, ''),
(323115418, ''),
(400611039, ''),
(442197623, 'sfdgsdf'),
(453660749, ''),
(484824005, 'gsdfg'),
(490102472, 'gsdfgsd'),
(515934618, ''),
(520508722, ''),
(533698196, ''),
(536027015, 'gsdfgsd'),
(567821724, ''),
(648506529, 'No seleccionada'),
(661304800, ''),
(682384857, ''),
(683020007, 'sfdgsdf'),
(684964767, ''),
(803680268, ''),
(808787465, 'sfdgsdf'),
(833458360, ''),
(860383811, ''),
(936660714, ''),
(980978703, 'fsasdfa'),
(1025743293, ''),
(1071668742, ''),
(1079693562, ''),
(1144562970, ''),
(1208951457, 'fsadf'),
(1255668367, 'sfdgsdf'),
(1258752099, 'sfdgsdf'),
(1290826813, ''),
(1291807934, 'sfdgsdf'),
(1292555103, ''),
(1297160061, 'fasdf'),
(1309399576, ''),
(1318382884, ''),
(1328233687, ''),
(1354630722, 'Hola Mundo'),
(1388331478, ''),
(1398514154, 'gfdsfg'),
(1474078413, ''),
(1493414869, ''),
(1528952008, ''),
(1617803991, 'fasdf'),
(1705788854, 'fasdf'),
(1743342533, 'sfdgsdf'),
(1772079363, 'sfdgsdf'),
(1782964961, ''),
(1809640900, 'fasdf'),
(1861766844, 'gsdfg'),
(1983815842, 'sfdgsdf'),
(2052633810, ''),
(2095147553, 'fasdf');

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
(603061056, 'Ramen Naruto', 'El ramen es un plato de fideos japonés. Si bien cada región de Japón tiene su propia receta de ramen, la preparación básica consiste en distintos tipos de fideos japoneses servidos en un caldo preparado ', 20000, 'https://cdn2.cocinadelirante.com/sites/default/files/styles/gallerie/public/images/2021/08/origen-del-ramen-portada1.jpg'),
(1138977219, 'Sushi', 'Sushi es un plato típico de origen japonés basado en arroz aderezado con vinagre de arroz, azúcar y sal y combinado con otros ingredientes como pescados crudos, mariscos, verduras, etc.​​​ Este plato es uno de los más reconocidos de la gastronomía japonesa y uno de los más populares internacionalmente.​', 14000, 'https://assets.tmecosys.com/image/upload/t_web767x639/img/recipe/ras/Assets/0749D9BC-260D-40F4-A07F-54814C4A82B4/Derivates/A73A7793-F3EE-4B90-ABA4-1CC1A0C3E18F.jpg'),
(1153159356, 'Tempura', 'La tempura se refiere a la fritura rápida típica japonesa, en especial a los mariscos y verduras, que fue introducida por los portugueses en el siglo XVI. Cada trozo de comida debe tener el tamaño de un bocado y se fríe en aceite a 180 ℃ tan solo durante dos o tres minutos.', 3500, 'https://www.lavanguardia.com/files/og_thumbnail/uploads/2021/10/20/61701aeb1a33e.jpeg'),
(1221820592, 'Sushi', 'Sushi es un plato típico de origen japonés basado en arroz aderezado con vinagre de arroz, azúcar y sal y combinado con otros ingredientes como pescados crudos, mariscos, verduras, etc.​​​ Este plato es uno de los más reconocidos de la gastronomía japonesa y uno de los más populares internacionalmente.​', 12000, 'https://assets.tmecosys.com/image/upload/t_web767x639/img/recipe/ras/Assets/0749D9BC-260D-40F4-A07F-54814C4A82B4/Derivates/A73A7793-F3EE-4B90-ABA4-1CC1A0C3E18F.jpg'),
(1294008557, 'Gyozas', 'Un jiaozi y también conocido como mandu, es un tipo de dumpling o ravioli típico de la cocina china muy popular en China, Japón y Corea, así como fuera de Asia. Los jiaozi se elaboran rellenos de carne picada o verduras enrollados en una delgada y fina masa, que se suele sellar con los dedos.', 11000, 'https://www.recetasdesbieta.com/wp-content/uploads/2019/08/gyozas_11.jpg'),
(1310795764, 'Postobon', 'es una bebida azucarada gaseosa vendida a nivel mundial en tiendas, restaurantes y máquinas expendedoras en más de doscientos países o territorios. Es el principal producto de The Coca-Cola Company, de origen estadounidense.', 3500, 'https://www.postobon.com/sites/default/files/styles/848x600/public/salaprensa/sala_de_prensa_manzana.png?itok=7INXA5eg'),
(1503906294, 'Ramen Hinata', 'El ramen es un plato de fideos japonés. Si bien cada región de Japón tiene su propia receta de ramen, la preparación básica consiste en distintos tipos de fideos japoneses servidos en un caldo preparado ', 20000, 'https://www.cocinatis.com/media/photologue/photos/cache/huevos-cocidos-escalfado-ramen_desktop_horizontal_full_width.jpg'),
(1621837392, 'Cococola', 'es una bebida azucarada gaseosa vendida a nivel mundial en tiendas, restaurantes y máquinas expendedoras en más de doscientos países o territorios. Es el principal producto de The Coca-Cola Company, de origen estadounidense.', 3000, 'https://www.eluniverso.com/resizer/XDCSRrWf-mQVhi9fw2igV2hzPg8=/1005x670/smart/filters:quality(70)/cloudfront-us-east-1.images.arcpublishing.com/eluniverso/6O3SHHDC55GTHHHGY4HAWTVD5A.jpg'),
(1847997509, 'RAMEN', 'la preparación básica consiste en distintos tipos de fideos japoneses servidos en un caldo preparado comúnmente a base de hueso de cerdo o pollo y distintas verduras, sus sabores varían entre la pasta de miso, salsa de soya [Shoyu] o sal [shio], contiene diferentes guarniciones como rebanadas de carne de cerdo', 17600, 'https://laroussecocina.mx/wp-content/uploads/2019/08/S050419-30-RAMEL-0614-1.jpg'),
(2093422488, 'Onigiri', 'Onigiri también conocido como Omusubi es un plato japonés que consiste en una bola de arroz rellena o mezclada con otros ingredientes. Suele tener forma triangular u oval, y a veces está envuelta en una pequeña tira de alga nori. ', 16500, 'https://www.sal-pimienta.com/wp-content/uploads/2020/05/27_onigiri-blog-500x500.jpg');

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
(457346048, 'Pasabocas'),
(600453791, 'Postres'),
(1228154616, 'ENTRADAS'),
(1303517700, 'BEBIDAS'),
(1518879386, 'Sopas');

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
(603061056, 1228154616),
(603061056, 1518879386),
(1138977219, 1228154616),
(1221820592, 457346048),
(1221820592, 1228154616),
(1294008557, 1228154616),
(1310795764, 1303517700),
(1503906294, 1228154616),
(1503906294, 1518879386),
(1621837392, 1303517700),
(1847997509, 1228154616),
(2093422488, 1228154616);

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
(520508722, 3, 'ACTIVE', 520508722, 520508722, 3, 460759279, 739544277),
(1208951457, 3, 'ACTIVE', 1208951457, 1208951457, 2, 1112181601, 739544277),
(1354630722, 3, 'ACTIVE', 1354630722, 1354630722, 3, 1112181601, 739544277);

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
(520508722, 603061056, NULL),
(1354630722, 1221820592, 739544277),
(1354630722, 1310795764, 739544277);

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
  `roles_id_rol` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `token` varchar(75) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_users`, `email`, `password`, `p_nombre`, `s_nombre`, `p_apellido`, `s_apellido`, `contactos_id_contacto`, `roles_id_rol`, `created_at`, `token`) VALUES
(194491129, 'Mariagomez12@gmail.com', '$2y$10$xKlmmN4Vbt/NEfOoBXG3DuaTZVkTvCmczF2L1T', 'Maria', 'Alejandra', 'Gomez ', '', 194491129, 1, '2022-03-14 17:24:32', NULL),
(315192503, 'diego@gmail.com', '1022322859', 'Diego', 'Andrés', 'Triana', '', 315192503, 2, '2022-03-14 17:24:32', NULL),
(427318569, 'camilorodriguez@gmail.com', '$2y$10$XiL/muAS/1MK4nkOS7sLTuYxC/A24T.vXh1pev', 'camilo ', 'Andres', 'Saenz ', 'rodriguez ', 427318569, 1, '2022-03-14 17:24:32', NULL),
(441616206, 'marcelaGgozo@gmail.com', '$2y$10$bUJgIuMV7OZgeFVSUsFVgubPyg2.Ipn0PWBhEF', 'Alma ', 'Marcela', 'Gozo', 'Areas', 441616206, 1, '2022-03-14 17:24:32', NULL),
(459769172, 'stivenjhojan011@gmail.com', '$2y$10$YmU.kdcOnu1Qz0880E4SVOh2MQE6UGheFx2RJlxETM6bBugA7xla2', 'Jhojann', 'Estiven ', 'Triana', 'Quiroga', 459769172, 1, '2022-03-14 19:17:45', NULL),
(662021904, 'dieacasallas111@misena.edu.co', 'Diego123', 'Diego ', 'Andrés ', 'Casallas ', 'Suárez', 662021904, 3, '2022-03-14 17:24:32', NULL),
(709096698, 'danielserrano@gmail.com', '$2y$10$Or82.VgZhm3p.wjEiUdj3.rp8RaseoAHsDDHY0', 'Daniel ', 'Santiago ', 'Serrano ', 'Bohorquez ', 709096698, 1, '2022-03-14 17:24:32', NULL),
(739496694, 'solgama12@gmail.com', '$2y$10$V0cgGg6tB/f1s1bM1SrWRe2ho6Qmda4sXuDN4T', 'Sol', 'Anne', 'Gama', 'Roso', 739496694, 1, '2022-03-14 17:24:32', NULL),
(739544277, 'jhostriana11@misena.edu.co', '$2y$10$UIBLZJj/Mps.8QhRGvNIjeKzJnimiQPJiBx641H8IdBe.jTmvxb.a', 'Jhojann', 'Estiven ', 'Triana', 'Quiroga', 739544277, 3, '2022-03-14 20:02:43', 'ac45a291991abeb6779dc34d9b98c56b1621933018'),
(889996061, 'julianagaitan@gmail.com', '$2y$10$nnSeQzP1YyBL.HHDpxAUNO455vaBJfnWltvCFi', 'Deysi ', 'Juliana ', 'Gaitan ', 'Florez', 889996061, 1, '2022-03-14 17:24:32', NULL),
(912701116, 'estiven@gmail.com', '123', 'estiven', 'Andrés', 'Triana', '', 912701116, 2, '2022-03-14 17:24:32', NULL),
(976204529, 'pepito@gmail.com', '1022322859', 'Pepito', 'Perez', 'Ortiz', '', 976204529, 1, '2022-03-14 17:24:32', NULL),
(1319186859, 'andresricaute98@gmail.com', '$2y$10$7JPvbjDDbFYEd54aFoI9e.Kbc0yueo7JCNlZpr', 'andres ', 'felipe', 'ramos', 'ricaurte', 1319186859, 1, '2022-03-14 17:24:32', NULL),
(1842030796, 'ramos@gmail.com', '1022322859', 'Andres', 'Felipe', 'Ramos', 'Ricaurte', 1842030796, 1, '2022-03-14 17:24:32', NULL),
(2050730869, 'delfina@gmail.com', '1022322859', 'Delfina', 'Andrés', 'Triana', 'Osorio', 2050730869, 3, '2022-03-14 17:24:32', NULL);

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
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_users_contactos1` FOREIGN KEY (`contactos_id_contacto`) REFERENCES `contactos` (`id_contacto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_users_roles1` FOREIGN KEY (`roles_id_rol`) REFERENCES `roles` (`id_rol`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
