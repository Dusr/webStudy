-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-05-2015 a las 09:57:43
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
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE IF NOT EXISTS `alumno` (
`idAlumno` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(45) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellidos` varchar(50) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `avatar` mediumblob
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`idAlumno`, `login`, `password`, `nombre`, `apellidos`, `direccion`, `avatar`) VALUES
(1, 'david.a.u@hotmail.com', 'goyeneche33', 'David', 'Ãlvaro Ucedaa', 'Calle Goyeneche, 33, Bajo', ''),
(2, 'xxx', 'xxx', 'xxx', 'xxx', NULL, NULL),
(3, 'aaaa', 'aaaa', 'aaaa', 'aaaa', NULL, NULL),
(5, 'bbbb', 'bbbb', 'bbbb', 'bbbb bbbb', NULL, NULL),
(6, 'juanito@hotmail.com', 'juanito', 'Juanito', 'Perez Perez', 'Calle Luna, 7', NULL),
(7, 'prueba@hotmail.com', 'prueba', 'Juanito', 'Prueba Prueba', NULL, NULL),
(8, 'Juanito', 'juanito', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno_has_curso`
--

CREATE TABLE IF NOT EXISTS `alumno_has_curso` (
  `Alumno_idAlumno` int(11) NOT NULL,
  `Curso_idCurso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE IF NOT EXISTS `curso` (
`idCurso` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `lenguaje` varchar(15) DEFAULT NULL,
  `duracion` varchar(5) NOT NULL,
  `descripcion` varchar(300) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`idCurso`, `nombre`, `lenguaje`, `duracion`, `descripcion`) VALUES
(1, 'Curso básico de HTML', 'HTML', '10', 'Curso básico de HTML donde aprenderas los conceptos básicos de este lenguaje y obtendras los conocimientos necesarios para poder desarollar tu primera web estática.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso_has_alumno`
--

CREATE TABLE IF NOT EXISTS `curso_has_alumno` (
  `Curso_idCurso` int(11) NOT NULL,
  `Alumno_idAlumno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulo`
--

CREATE TABLE IF NOT EXISTS `modulo` (
  `idModulo` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `Curso_idCurso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `modulo`
--

INSERT INTO `modulo` (`idModulo`, `nombre`, `descripcion`, `Curso_idCurso`) VALUES
(1, 'Módulo 1: Introducción.', 'Introducción al lenguaje HTML, a su historia y  a sus aplicaciones en la web.', 1),
(2, 'Módulo 2: Características básicas.', 'Descripción de los elementos del lenguaje HTML como lenguaje de marcas(etiquetas y atributos), sintaxis y XHTML.', 1),
(3, 'Módulo 3: Texto.', 'Estructura, formateo básico, avanzado y genérico del texto en HTML. Espacios en blanco, saltos de linea y codificación de caracteres.', 1),
(4, 'Módulo 4: Enlaces.', 'URL''s, enlaces básicos y avanzados, así como otro tipo de enlaces (Relativos, absolutos...). Cuenta con ejemplos de enlazado a otras páginas.', 1),
(5, 'Módulo 5: Listas', 'Utilización de listas ordenadas, no ordenadas y de definición.', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE IF NOT EXISTS `profesor` (
`idProfesor` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(45) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellidos` varchar(45) DEFAULT NULL,
  `avatar` mediumblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor_has_alumno`
--

CREATE TABLE IF NOT EXISTS `profesor_has_alumno` (
  `Profesor_idProfesor` int(11) NOT NULL,
  `Alumno_idAlumno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor_has_curso`
--

CREATE TABLE IF NOT EXISTS `profesor_has_curso` (
  `Profesor_idProfesor` int(11) NOT NULL,
  `Curso_idCurso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
 ADD PRIMARY KEY (`idAlumno`), ADD UNIQUE KEY `login_UNIQUE` (`login`);

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
-- Indices de la tabla `curso_has_alumno`
--
ALTER TABLE `curso_has_alumno`
 ADD PRIMARY KEY (`Curso_idCurso`,`Alumno_idAlumno`), ADD KEY `fk_Curso_has_Alumno_Alumno1_idx` (`Alumno_idAlumno`), ADD KEY `fk_Curso_has_Alumno_Curso1_idx` (`Curso_idCurso`);

--
-- Indices de la tabla `modulo`
--
ALTER TABLE `modulo`
 ADD PRIMARY KEY (`idModulo`,`Curso_idCurso`), ADD KEY `fk_Modulo_Curso_idx` (`Curso_idCurso`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
 ADD PRIMARY KEY (`idProfesor`), ADD UNIQUE KEY `login_UNIQUE` (`login`);

--
-- Indices de la tabla `profesor_has_alumno`
--
ALTER TABLE `profesor_has_alumno`
 ADD PRIMARY KEY (`Profesor_idProfesor`,`Alumno_idAlumno`), ADD KEY `fk_Profesor_has_Alumno_Alumno1_idx` (`Alumno_idAlumno`), ADD KEY `fk_Profesor_has_Alumno_Profesor1_idx` (`Profesor_idProfesor`);

--
-- Indices de la tabla `profesor_has_curso`
--
ALTER TABLE `profesor_has_curso`
 ADD PRIMARY KEY (`Profesor_idProfesor`,`Curso_idCurso`), ADD KEY `fk_Profesor_has_Curso_Curso1_idx` (`Curso_idCurso`), ADD KEY `fk_Profesor_has_Curso_Profesor1_idx` (`Profesor_idProfesor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
MODIFY `idAlumno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `curso`
--
ALTER TABLE `curso`
MODIFY `idCurso` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `profesor`
--
ALTER TABLE `profesor`
MODIFY `idProfesor` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno_has_curso`
--
ALTER TABLE `alumno_has_curso`
ADD CONSTRAINT `fk_Alumno_has_Curso_Alumno1` FOREIGN KEY (`Alumno_idAlumno`) REFERENCES `alumno` (`idAlumno`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Alumno_has_Curso_Curso1` FOREIGN KEY (`Curso_idCurso`) REFERENCES `curso` (`idCurso`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `curso_has_alumno`
--
ALTER TABLE `curso_has_alumno`
ADD CONSTRAINT `fk_Curso_has_Alumno_Alumno1` FOREIGN KEY (`Alumno_idAlumno`) REFERENCES `alumno` (`idAlumno`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Curso_has_Alumno_Curso1` FOREIGN KEY (`Curso_idCurso`) REFERENCES `curso` (`idCurso`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `modulo`
--
ALTER TABLE `modulo`
ADD CONSTRAINT `fk_Modulo_Curso` FOREIGN KEY (`Curso_idCurso`) REFERENCES `curso` (`idCurso`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `profesor_has_alumno`
--
ALTER TABLE `profesor_has_alumno`
ADD CONSTRAINT `fk_Profesor_has_Alumno_Alumno1` FOREIGN KEY (`Alumno_idAlumno`) REFERENCES `alumno` (`idAlumno`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Profesor_has_Alumno_Profesor1` FOREIGN KEY (`Profesor_idProfesor`) REFERENCES `profesor` (`idProfesor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `profesor_has_curso`
--
ALTER TABLE `profesor_has_curso`
ADD CONSTRAINT `fk_Profesor_has_Curso_Curso1` FOREIGN KEY (`Curso_idCurso`) REFERENCES `curso` (`idCurso`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Profesor_has_Curso_Profesor1` FOREIGN KEY (`Profesor_idProfesor`) REFERENCES `profesor` (`idProfesor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
