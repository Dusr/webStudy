-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-05-2015 a las 17:58:08
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

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
-- Estructura de tabla para la tabla `alumno_has_curso`
--

CREATE TABLE IF NOT EXISTS `alumno_has_curso` (
  `Alumno_idAlumno` int(11) NOT NULL,
  `Curso_idCurso` int(11) NOT NULL,
  `done` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alumno_has_curso`
--

INSERT INTO `alumno_has_curso` (`Alumno_idAlumno`, `Curso_idCurso`, `done`) VALUES
(1, 1, 0),
(9, 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE IF NOT EXISTS `curso` (
`idCurso` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `lenguaje` varchar(15) DEFAULT NULL,
  `duracion` varchar(5) NOT NULL,
  `modalidad` varchar(10) NOT NULL,
  `comienzoCurso` varchar(12) NOT NULL,  
  `descripcion` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`idCurso`, `nombre`, `lenguaje`, `duracion`,`modalidad`, `comienzoCurso`, `descripcion`) VALUES
(1, 'Curso básico de HTML', 'HTML', '20','online', 'abril' ,'Curso básico de HTML donde aprenderas los conceptos básicos de este lenguaje y obtendras los conocimientos necesarios para poder desarollar tu primera web estática. <br> HTML es un lenguaje básico para la creación de páginas web. Es usado para definir la estructutra y el contenido de páginas web con text'),
(2, 'Css basico', 'Css', '20', 'presencial','enero','Curso básico de Css donde aprenderas los conceptos básicos de este lenguaje'),
(3, 'Javascript desde cero', 'Javascript', '30', 'personalizado','diciembre','Curso básico de Javascript donde aprenderas.....');


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulo`
--

CREATE TABLE IF NOT EXISTS `modulo` (
  `idModulo` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `Curso_idCurso` int(11) NOT NULL,
  `apuntes` varchar(30) DEFAULT NULL,
  `ejercicios` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `modulo`
--

INSERT INTO `modulo` (`idModulo`, `nombre`, `descripcion`, `Curso_idCurso`, `apuntes`, `ejercicios`) VALUES
(1, 'Módulo 1: Introducción.', 'Introducción al lenguaje HTML, a su historia y  a sus aplicaciones en la web.', 1, 'Modulo_1', 'Modulo_1_ejercicios'),
(2, 'Módulo 2: Características básicas.', 'Descripción de los elementos del lenguaje HTML como lenguaje de marcas(etiquetas y atributos), sintaxis y XHTML.', 1, 'Modulo_2', 'Modulo_2_ejercicios'),
(3, 'Módulo 3: Texto.', 'Estructura, formateo básico, avanzado y genérico del texto en HTML. Espacios en blanco, saltos de linea y codificación de caracteres.', 1, 'Modulo_3', 'Modulo_3_ejercicios'),
(4, 'Módulo 4: Enlaces.', 'URL''s, enlaces básicos y avanzados, así como otro tipo de enlaces (Relativos, absolutos...). Cuenta con ejemplos de enlazado a otras páginas.', 1, 'Modulo_4', 'Modulo_4_ejercicios'),
(5, 'Módulo 5: Listas', 'Utilización de listas ordenadas, no ordenadas y de definición.', 1, 'Modulo_5', 'Modulo_5_ejercicios');

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
  `avatar` varchar(30) DEFAULT NULL,
  `profesor` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idAlumno`, `login`, `password`, `nombre`, `apellidos`, `direccion`, `avatar`, `profesor`) VALUES
(1, 'david.a.u@hotmail.com', 'goyeneche33', 'David', 'Álvaro Uceda', 'Calle Goyeneche, 33, Bajo', '', 0),
(2, 'xxx', 'xxx', 'xxx', 'xxx', NULL, NULL, 0),
(3, 'aaaa', 'aaaa', 'aaaa', 'aaaa', NULL, NULL, 0),
(5, 'bbbb', 'bbbb', 'bbbb', 'bbbb bbbb', NULL, NULL, 0),
(6, 'juanito@hotmail.com', 'juanito', 'Juanito', 'Perez Perez', 'Calle Luna, 7', NULL, 0),
(7, 'prueba@hotmail.com', 'prueba', 'Juanito', 'Prueba Prueba', NULL, NULL, 0),
(8, 'Juanito', 'juanito', '', '', NULL, NULL, 0),
(9, 'profesor@hotmail.com', 'soyprofesor', 'Profesor1', 'Profe Profe', 'Calle del profesor, 1,', '', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno_has_curso`
--
ALTER TABLE `alumno_has_curso`
 ADD PRIMARY KEY (`Alumno_idAlumno`,`Curso_idCurso`), ADD KEY `fk_Alumno_has_Curso_Curso1_idx` (`Curso_idCurso`), ADD KEY `fk_Alumno_has_Curso_Alumno1_idx` (`Alumno_idAlumno`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
 ADD PRIMARY KEY (`idCurso`);

--
-- Indices de la tabla `modulo`
--
ALTER TABLE `modulo`
 ADD PRIMARY KEY (`idModulo`,`Curso_idCurso`), ADD KEY `fk_Modulo_Curso_idx` (`Curso_idCurso`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`idAlumno`), ADD UNIQUE KEY `login_UNIQUE` (`login`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `curso`
--
ALTER TABLE `curso`
MODIFY `idCurso` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
MODIFY `idAlumno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno_has_curso`
--
ALTER TABLE `alumno_has_curso`
ADD CONSTRAINT `fk_Alumno_has_Curso_Alumno1` FOREIGN KEY (`Alumno_idAlumno`) REFERENCES `usuario` (`idAlumno`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Alumno_has_Curso_Curso1` FOREIGN KEY (`Curso_idCurso`) REFERENCES `curso` (`idCurso`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `modulo`
--
ALTER TABLE `modulo`
ADD CONSTRAINT `fk_Modulo_Curso` FOREIGN KEY (`Curso_idCurso`) REFERENCES `curso` (`idCurso`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
