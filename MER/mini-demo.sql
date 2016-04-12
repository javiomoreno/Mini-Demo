-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 12-04-2016 a las 19:34:37
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mini-demo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_assignment`
--

CREATE TABLE IF NOT EXISTS `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('administrador', '1', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_item`
--

CREATE TABLE IF NOT EXISTS `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('administrador', 1, 'Administrador del Sistema', NULL, NULL, NULL, NULL),
('usuario', 1, 'Usuario del Sistema', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_item_child`
--

CREATE TABLE IF NOT EXISTS `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_rule`
--

CREATE TABLE IF NOT EXISTS `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mid_categorias`
--

CREATE TABLE IF NOT EXISTS `mid_categorias` (
  `cateiden` int(10) unsigned NOT NULL,
  `mid_usuarios_usuaiden` int(10) unsigned NOT NULL,
  `catenomb` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `catedesc` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mid_sexos`
--

CREATE TABLE IF NOT EXISTS `mid_sexos` (
  `sexoiden` int(10) unsigned NOT NULL,
  `sexonomb` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sexodesc` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `mid_sexos`
--

INSERT INTO `mid_sexos` (`sexoiden`, `sexonomb`, `sexodesc`) VALUES
(1, 'Femenino', 'Sexo de las Mujeres'),
(2, 'Masculino', 'Sexo de los Hombre');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mid_subCategorias`
--

CREATE TABLE IF NOT EXISTS `mid_subCategorias` (
  `sucaiden` int(10) unsigned NOT NULL,
  `mid_categorias_cateiden` int(10) unsigned NOT NULL,
  `sucanomb` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sucadesc` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mid_tiposUsuarios`
--

CREATE TABLE IF NOT EXISTS `mid_tiposUsuarios` (
  `tiusiden` int(10) unsigned NOT NULL,
  `tiusnomb` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tiusdesc` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `mid_tiposUsuarios`
--

INSERT INTO `mid_tiposUsuarios` (`tiusiden`, `tiusnomb`, `tiusdesc`) VALUES
(1, 'Administrador', 'Administrador del Sistema'),
(2, 'Usuario', 'Usuario del Sistema');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mid_usuarios`
--

CREATE TABLE IF NOT EXISTS `mid_usuarios` (
  `usuaiden` int(10) unsigned NOT NULL,
  `mid_sexos_sexoiden` int(10) unsigned NOT NULL,
  `mid_tiposUsuarios_tiusiden` int(10) unsigned NOT NULL,
  `usuanomb` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `usuaapel` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `usuacedu` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `usuatele` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `usuadire` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `usuaemai` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `usuauser` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `usuapass` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `mid_usuarios`
--

INSERT INTO `mid_usuarios` (`usuaiden`, `mid_sexos_sexoiden`, `mid_tiposUsuarios_tiusiden`, `usuanomb`, `usuaapel`, `usuacedu`, `usuatele`, `usuadire`, `usuaemai`, `usuauser`, `usuapass`) VALUES
(1, 2, 1, 'administrador', 'administrador', NULL, NULL, NULL, '', 'admin', 'MTIzNDU2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1460385993),
('m140506_102106_rbac_init', 1460385998);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`);

--
-- Indices de la tabla `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `idx-auth_item-type` (`type`);

--
-- Indices de la tabla `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Indices de la tabla `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Indices de la tabla `mid_categorias`
--
ALTER TABLE `mid_categorias`
  ADD PRIMARY KEY (`cateiden`),
  ADD KEY `mid_categorias_FKIndex1` (`mid_usuarios_usuaiden`);

--
-- Indices de la tabla `mid_sexos`
--
ALTER TABLE `mid_sexos`
  ADD PRIMARY KEY (`sexoiden`);

--
-- Indices de la tabla `mid_subCategorias`
--
ALTER TABLE `mid_subCategorias`
  ADD PRIMARY KEY (`sucaiden`),
  ADD KEY `mid_subCategorias_FKIndex1` (`mid_categorias_cateiden`);

--
-- Indices de la tabla `mid_tiposUsuarios`
--
ALTER TABLE `mid_tiposUsuarios`
  ADD PRIMARY KEY (`tiusiden`);

--
-- Indices de la tabla `mid_usuarios`
--
ALTER TABLE `mid_usuarios`
  ADD PRIMARY KEY (`usuaiden`),
  ADD KEY `mid_usuarios_FKIndex1` (`mid_tiposUsuarios_tiusiden`),
  ADD KEY `mid_usuarios_FKIndex2` (`mid_sexos_sexoiden`);

--
-- Indices de la tabla `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `mid_categorias`
--
ALTER TABLE `mid_categorias`
  MODIFY `cateiden` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `mid_sexos`
--
ALTER TABLE `mid_sexos`
  MODIFY `sexoiden` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `mid_subCategorias`
--
ALTER TABLE `mid_subCategorias`
  MODIFY `sucaiden` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `mid_tiposUsuarios`
--
ALTER TABLE `mid_tiposUsuarios`
  MODIFY `tiusiden` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `mid_usuarios`
--
ALTER TABLE `mid_usuarios`
  MODIFY `usuaiden` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `mid_categorias`
--
ALTER TABLE `mid_categorias`
  ADD CONSTRAINT `mid_categorias_ibfk_1` FOREIGN KEY (`mid_usuarios_usuaiden`) REFERENCES `mid_usuarios` (`usuaiden`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `mid_subCategorias`
--
ALTER TABLE `mid_subCategorias`
  ADD CONSTRAINT `mid_subCategorias_ibfk_1` FOREIGN KEY (`mid_categorias_cateiden`) REFERENCES `mid_categorias` (`cateiden`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `mid_usuarios`
--
ALTER TABLE `mid_usuarios`
  ADD CONSTRAINT `mid_usuarios_ibfk_1` FOREIGN KEY (`mid_tiposUsuarios_tiusiden`) REFERENCES `mid_tiposUsuarios` (`tiusiden`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `mid_usuarios_ibfk_2` FOREIGN KEY (`mid_sexos_sexoiden`) REFERENCES `mid_sexos` (`sexoiden`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
