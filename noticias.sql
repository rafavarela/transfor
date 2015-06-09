-- phpMyAdmin SQL Dump
-- version 4.2.6deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 09-06-2015 a las 04:10:14
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
-- Volcado de datos para la tabla `cms_noticias`
--

INSERT INTO `cms_noticias` (`id`, `titulo`, `encabezado`, `detalle`, `seccion_id`, `created_at`, `updated_at`) VALUES
(1, 'Presentación de nuestra empresa', '', '<p><img alt="" src="/images/images/puente-pumarejo-barranquilla.jpg" style="float:left; height:140px; margin:5px; width:140px" /><strong>REPRESENTACIONES TRANSFOR S.A.S.</strong> Es una empresa importadora y comercializadora de acero y materiales para la construcci&oacute;n, contamos con una estructura organizativa eficiente, s&oacute;lida y fortalecida que nos permite responder ante las exigencias del consumidor brindando respuestas inmediatas a los cambios y necesidades del mercado.</p>\r\n', 2, '2015-06-07 20:05:30', '2015-06-08 16:18:27'),
(2, 'Indice', '', '<p>L&iacute;deres en la industria del acero</p>\r\n', 1, '2015-06-07 20:32:21', '2015-06-07 20:32:21'),
(3, 'Info de contacto', '', '<script src="http://maps.google.com/maps/api/js?sensor=false&callback=iniciar">\r\n</script>\r\n\r\n<script>\r\nfunction iniciar() {\r\nvar mapOptions = {\r\ncenter: new google.maps.LatLng(25.80, -80.30),\r\nzoom: 10,\r\nmapTypeId: google.maps.MapTypeId.ROADMAP};\r\nvar map = new google.maps.Map(document.getElementById("map"),mapOptions);}              \r\n</script>\r\n\r\n<div id="map"></div>', 3, '2015-06-08 20:28:21', '2015-06-08 20:28:21');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
