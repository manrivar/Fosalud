-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-10-2020 a las 16:07:13
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `estadistica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accesos`
--

CREATE TABLE `accesos` (
  `id` int(12) NOT NULL,
  `descripcion` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `accesos`
--

INSERT INTO `accesos` (`id`, `descripcion`) VALUES
(1, 'Administrador de Sistema');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acos`
--

CREATE TABLE `acos` (
  `id` int(10) NOT NULL,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aros`
--

CREATE TABLE `aros` (
  `id` int(10) NOT NULL,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aros_acos`
--

CREATE TABLE `aros_acos` (
  `id` int(10) NOT NULL,
  `aro_id` int(10) NOT NULL,
  `aco_id` int(10) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacoras`
--

CREATE TABLE `bitacoras` (
  `id` int(1) NOT NULL,
  `descripcion` varchar(2500) NOT NULL,
  `user_id` int(250) NOT NULL,
  `fechahora_reg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `bitacoras`
--

INSERT INTO `bitacoras` (`id`, `descripcion`, `user_id`, `fechahora_reg`) VALUES
(1, 'ejemplo de bitacora', 1, '2020-10-14 14:06:50'),
(2, 'ejemplo 2', 1, '2020-10-14 14:06:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `groups`
--

INSERT INTO `groups` (`id`, `name`, `created`, `modified`) VALUES
(1, 'Global', '2013-07-30 21:24:40', '2013-08-23 10:03:51'),
(2, 'Administrador', '2013-07-30 21:33:31', '2013-08-23 10:03:59'),
(3, 'Usuario', '2013-07-30 21:33:38', '2013-08-23 10:04:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nombre_usuario` varchar(250) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` char(40) NOT NULL,
  `password2` varchar(1500) DEFAULT NULL,
  `acceso_id` int(12) NOT NULL,
  `group_id` int(11) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `fechahorapassword` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombre_usuario`, `username`, `email`, `password`, `password2`, `acceso_id`, `group_id`, `estado`, `created`, `modified`, `fechahorapassword`) VALUES
(1, 'Administrador', 'admin', 'administrador@dominio.com', '00618e04ad920ae424617d5ba46e7e285fa44724', NULL, 1, 1, 1, '2013-08-22 10:40:47', '2020-10-14 15:25:38', '2020-10-14 20:25:38');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `accesos`
--
ALTER TABLE `accesos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `acos`
--
ALTER TABLE `acos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `aros`
--
ALTER TABLE `aros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `aros_acos`
--
ALTER TABLE `aros_acos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ARO_ACO_KEY` (`aro_id`,`aco_id`);

--
-- Indices de la tabla `bitacoras`
--
ALTER TABLE `bitacoras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `accesos`
--
ALTER TABLE `accesos`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `acos`
--
ALTER TABLE `acos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `aros`
--
ALTER TABLE `aros`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `aros_acos`
--
ALTER TABLE `aros_acos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `bitacoras`
--
ALTER TABLE `bitacoras`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
