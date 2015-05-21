-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-05-2015 a las 14:39:46
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
  `done` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumno_has_curso`
--

INSERT INTO `alumno_has_curso` (`Alumno_idAlumno`, `Curso_idCurso`, `done`) VALUES
(1, 1, 0),
(2, 1, 0),
(3, 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE IF NOT EXISTS `curso` (
`idCurso` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `lenguaje` varchar(15) DEFAULT NULL,
  `duracion` varchar(5) NOT NULL,
  `modalidad` varchar(10) NOT NULL,
  `comienzoCurso` varchar(12) NOT NULL,
  `descripcion` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`idCurso`, `nombre`, `lenguaje`, `duracion`, `modalidad`, `comienzoCurso`, `descripcion`) VALUES
(1, 'Curso básico de HTML', 'HTML', '20', 'online', 'abril', 'Curso básico de HTML donde aprenderas los conceptos básicos de este lenguaje y obtendras los conocimientos necesarios para poder desarollar tu primera web estática. <br> HTML es un lenguaje básico para la creación de páginas web. Es usado para definir la estructutra y el contenido de páginas web con texto, imagenes, tablas, enlaces...'),
(2, 'Curso CSS avanzado', 'CSS', '25', 'presencial', 'enero', 'Curso avanzado de CSS donde aprenderás a aplicar los estilos necesarios a los elementos HTML para definir su distribución, su forma, color, tamaño, posición etc.. Mediante el establecimiento de reglas CSS tanto el linea, como de forma externa e interna.'),
(3, 'Javascript desde cero', 'Javascript', '30', 'online', 'enero', 'Descubre Javascript desde cero. En este curso de Javascript aprenderás las características del lenguaje, como la sintaxis, variables, estructuras de control, funciones, arrays, etc.'),
(4, 'Prestashop', 'CMS', '120', 'online', 'enero', 'En este curso de Prestashop aprenderás a crear una tienda online desde cero sin conocimientos de programación. Prestashop una de las herramientas más utilizadas a nivel mundial para la creación de tiendas online ¿Tienes algo que vender? ¡Comienza a venderlo por internet hoy mismo!');

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
(5, 'Módulo 5: Listas.', 'Utilización de listas ordenadas, no ordenadas y de definición.', 1, 'Modulo_5', 'Modulo_5_ejercicios'),
(6, 'Módulo 1: Técnicas imprescindibles.', 'Técnicas imprescindibles para aplicar estilos básicos a los elementos HTML', 2, 'Modulo_1', 'Modulo_1_ejercicios'),
(7, 'Módulo 2: Buenas prácticas.', 'Te enseñaremos buenas prácticas a la hora de aplicar estilos para elaborar una hoja de estilo limpia, coherente y depurada.', 2, 'Modulo_2', 'Modulo_2_ejercicios'),
(8, 'Módulo 3: Selectores.', 'Aprenderás a conocer y dominar todos los selectores de CSS tanto básicos como avanzados.', 2, 'Modulo_3', 'Modulo_3_ejercicios'),
(9, 'Módulo 4: Propiedades avanzadas.', 'Propiedades avanzadas de los elementos que abarcan el modelo de cajas, la tipografia, las ablas, las listas, el posicionamiento de los elemntos', 2, 'Modulo_4', 'Modulo_4_ejercicios'),
(10, 'Módulo 1: Introducción a javascript.', 'Veremos qué es javascript y las posibilidades que nos ofrece utilizar este lenguaje a la hora de desarrollar páginas web.', 3, 'Modulo_1', 'Modulo_1_ejercicios'),
(11, 'Módulo 2: Historia de javascript.', 'Algunas curiosidades relativas a la historia de Javascript. Relatamos los orígenes y etimologías de este lenguaje de programación de páginas web.', 3, 'Modulo_2', 'Modulo_2_ejercicios'),
(12, 'Módulo 3: Primero pasos.', 'Aprenderás como se escribe el código, las maneras de ejecutar los scripts, como ocultar scripts en navegadores antiguos, su sintaxis, etc.', 3, 'Modulo_3', 'Modulo_3_ejercicios'),
(13, 'Módulo 4: Variables y tipos de datos.', 'Veremos que son las variables, los tipos de datos en javascript y como se trabaja con ellos.', 3, 'Modulo_4', 'Modulo_4_ejercicios'),
(14, 'Módulo 5: Operadores.', 'Veremos los tipos de operadores que podemos encontrar en javascript como aritméticos, de asignación, de cadenas, lógicos y condicionales.', 3, 'Modulo_5', 'Modulo_5_ejercicios'),
(15, 'Modulo 6: Estructuras de control.', 'Las estructuras de control nos permitiran controlar el flujo de nuestro script. Forman parte de los asuntos más básicos de Javascript y de cualquier lenguaje de programación.', 3, 'Modulo_6', 'Modulo_6_ejercicios'),
(16, 'Módulo 7: Funciones.', 'En este módulo definimos el concepto de función y aprendemos a crearlas y a invocarlas. Veremos sus parámetros, valores de retorno, dónde colocarlas, etc.', 3, 'Modulo_7', 'Modulo_7_ejercicios'),
(17, 'Modulo 8: Arrays.', 'Aprenderemos para que sirven y como se utilizan los arrays, como controlar su longitud, los tipos que existen, etc.', 3, 'Modulo_8', 'Modulo_8_ejercicios'),
(18, 'Módulo 1: Introducción a Prestashop.', 'Aprenderás qué es Prestashop, como funciona, las caracteristicas que lo diferencian de otros gestores de contenido y que empresas lo utilizan.', 4, 'Modulo_1', 'Modulo_1_ejercicios'),
(19, 'Módulo 2: Instalación de Prestashop.', 'Analizaremos los requisitos de instalación, la elección del dominio, del hosting y su instalación en un hosting real.', 4, 'Modulo_2', 'Modulo_2_ejercicios'),
(20, 'Módulo 3: Estructurando mi tienda online.', 'Se debe definir como se va a distribuir por la página la oferta de nuestros productos. Sus categorias y subcategorias.', 4, 'Modulo_3', 'Modulo_3_ejercicios'),
(21, 'Módulo 4: Productos.', 'Definiremos sus tipos, nuestros primeros productos, su descripción, su precio...', 4, 'Modulo_4', 'Modulo_4_ejercicios'),
(22, 'Módulo 5: Atributos y valores.', 'Analizaremos qué son y cómo crear los atributos y valores.', 4, 'Modulo_5', 'Modulo_5_ejercicios'),
(23, 'Módulo 6: Transporte.', 'De que manera trabaja prestashop los envios, creación de un transportista y de las tarifas de transporte.', 4, 'Modulo_6', 'Modulo_6_ejercicios'),
(24, 'Módulo 7: Medios de pago.', 'Módulos de pago disponibles para prestashop, paypal, transferencia bancaria, contra reembolso y con cheque.', 4, 'Modulo_7', 'Modulo_7_ejercicios'),
(25, 'Módulo 8: Gestión de pedidos.', 'Como gestionar con prestashop tus pedidos, aprenderemos tambien a configurar los módulos por defecto y sus posiciones.', 4, 'Modulo_8', 'Modulo_8_ejercicios'),
(26, 'Módulo 9: Clientes y fidelización.', 'Aprenderemos a administrar los datos de nuestros clientes, los grupos a los que pertenecen, los carros de la compra abandonados, el servicio al cliente y los medios de contacto.', 4, 'Modulo_9', 'Modulo_9_ejercicios');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor_has_curso`
--

CREATE TABLE IF NOT EXISTS `profesor_has_curso` (
  `Alumno_idAlumno` int(11) NOT NULL,
  `Curso_idCurso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `profesor_has_curso`
--

INSERT INTO `profesor_has_curso` (`Alumno_idAlumno`, `Curso_idCurso`) VALUES
(9, 1);

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
  `avatar` varchar(100) NOT NULL DEFAULT 'avatar_1.png',
  `profesor` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idAlumno`, `login`, `password`, `nombre`, `apellidos`, `direccion`, `avatar`, `profesor`) VALUES
(1, 'david.a.u@hotmail.com', 'goyeneche33', 'David', 'Álvaro Uceda', 'Calle Goyeneche, 33, Bajo', '', 0),
(2, 'xxx', 'xxx', 'xxx', 'xxx', NULL, '', 0),
(3, 'aaaa', 'aaaa', 'aaaa', 'aaaa', NULL, '', 0),
(5, 'bbbb', 'bbbb', 'bbbb', 'bbbb bbbb', NULL, '', 0),
(6, 'juanito@hotmail.com', 'juanito', 'Juanito', 'Perez Perez', 'Calle Luna, 7', '', 0),
(7, 'prueba@hotmail.com', 'prueba', 'Juanito', 'Prueba Prueba', NULL, '', 0),
(8, 'Juanito', 'juanito', '', '', NULL, '', 0),
(9, 'profesor@hotmail.com', 'soyprofesor', 'Profesor1', 'Profe Profe', 'Calle del profesor, 1,', '', 1),
(12, 'profe1@hotmail.com', 'profesor1', 'profe1', 'profe profe', NULL, 'avatar_1.png', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno_has_curso`
--
ALTER TABLE `alumno_has_curso`
 ADD PRIMARY KEY (`Alumno_idAlumno`,`Curso_idCurso`), ADD KEY `fk_Alumno_has_Curso_Curso1` (`Curso_idCurso`);

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
-- Indices de la tabla `profesor_has_curso`
--
ALTER TABLE `profesor_has_curso`
 ADD PRIMARY KEY (`Alumno_idAlumno`,`Curso_idCurso`), ADD KEY `fk_Profesor_has_Curso` (`Curso_idCurso`);

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
MODIFY `idCurso` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
MODIFY `idAlumno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
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

--
-- Filtros para la tabla `profesor_has_curso`
--
ALTER TABLE `profesor_has_curso`
ADD CONSTRAINT `fk_Profesor_has_Curso_Alumno1` FOREIGN KEY (`Alumno_idAlumno`) REFERENCES `usuario` (`idAlumno`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Profesor_has_Curso_Curso1` FOREIGN KEY (`Curso_idCurso`) REFERENCES `curso` (`idCurso`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
