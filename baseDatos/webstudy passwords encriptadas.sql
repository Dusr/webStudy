-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-06-2015 a las 12:16:31
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `webstudy`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `idAlumno` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(45) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellidos` varchar(50) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `avatar` varchar(100) NOT NULL DEFAULT 'avatar_profe.png',
  `profesor` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idAlumno`, `login`, `password`, `nombre`, `apellidos`, `direccion`, `avatar`, `profesor`) VALUES
(1, 'david.a.u@hotmail.com', 'ZGF2aWRhbHZhcm8=', 'David', 'Álvaro Uceda', NULL, 'avatar_1.png', 0),
(2, 'juancarlosg2812@gmail.com', 'anVhbmNhcmxvcw==', 'Juan Carlos', 'González Sánchez', NULL, 'avatar_1.png', 0),
(3, 'velillamoralcris@gmail.com', 'Y3Jpc3RpbmE=', 'Cristina', 'Velilla Moral', NULL, 'avatar_1.png', 0),
(4, 'profehtml@hotmail.com', 'cHJvZmVodG1s', 'ProfeHTML', 'WebStudy WebStudy', NULL, 'avatar_profe.png', 1),
(5, 'profecss@hotmail.com', 'cHJvZmVjc3M=', 'ProfeCSS', 'WebStudy WebStudy', NULL, 'avatar_profe.png', 1),
(6, 'profejs@hotmail.com', 'cHJvZmVqcw==', 'ProfeJS', 'WebStudy WebStudy', NULL, 'avatar_profe.png', 1),
(7, 'profeprestashop@hotmail.com', 'cHJvZmVwcmVzdGFzaG9w', 'ProfePrestashop', 'WebStudy WebStudy', NULL, 'avatar_profe.png', 1),
(8, 'profejquery@hotmail.com', 'cHJvZmVqcXVlcnk=', 'ProfeJQuery', 'WebStudy WebStudy', NULL, 'avatar_profe.png', 1),
(9, 'profeajax@hotmail.com', 'cHJvZmVhamF4', 'ProfeAjax', 'WebStudy WebStudy', NULL, 'avatar_profe.png', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idAlumno`), ADD UNIQUE KEY `login_UNIQUE` (`login`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idAlumno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
