-- phpMyAdmin SQL Dump
-- version 4.2.6deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 09-06-2015 a las 04:09:59
-- Versión del servidor: 5.6.19-1~exp1ubuntu2
-- Versión de PHP: 5.6.6-1+deb.sury.org~utopic+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `transforcms`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_secciones`
--

CREATE TABLE IF NOT EXISTS `cms_secciones` (
`id` int(10) unsigned NOT NULL,
  `nombre` varchar(245) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `cms_secciones`
--

INSERT INTO `cms_secciones` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'INICIO', '2015-06-07 12:17:51', '2015-06-07 18:59:27'),
(2, 'NOSOTROS', '2015-06-07 12:23:02', '2015-06-07 18:59:34'),
(3, 'CONTACTENOS', '2015-06-08 20:27:33', '2015-06-08 20:27:33');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cms_secciones`
--
ALTER TABLE `cms_secciones`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cms_secciones`
--
ALTER TABLE `cms_secciones`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
