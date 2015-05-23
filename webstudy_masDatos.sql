-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-05-2015 a las 23:36:25
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.5.24

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
(3, 1, 1),
(3, 3, 1),
(3, 6, 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`idCurso`, `nombre`, `lenguaje`, `duracion`, `modalidad`, `comienzoCurso`, `descripcion`) VALUES
(1, 'Curso básico de HTML', 'HTML', '20', 'online', 'abril', 'Curso básico de HTML donde aprenderas los conceptos básicos de este lenguaje y obtendras los conocimientos necesarios para poder desarollar tu primera web estática. <br> HTML es un lenguaje básico para la creación de páginas web. Es usado para definir la estructutra y el contenido de páginas web con texto, imagenes, tablas, enlaces...'),
(2, 'Curso CSS desde cero', 'CSS', '25', 'online', 'enero', 'Curso avanzado de CSS donde aprenderás a aplicar los estilos necesarios a los elementos HTML para definir su distribución, su forma, color, tamaño, posición etc.. Mediante el establecimiento de reglas CSS tanto el linea, como de forma externa e interna.'),
(3, 'Javascript desde cero', 'Javascript', '30', 'online', 'enero', 'Descubre Javascript desde cero. En este curso de Javascript aprenderás las características del lenguaje, como la sintaxis, variables, estructuras de control, funciones, arrays, etc.'),
(4, 'Prestashop', 'CMS', '120', 'online', 'enero', 'En este curso de Prestashop aprenderás a crear una tienda online desde cero sin conocimientos de programación. Prestashop una de las herramientas más utilizadas a nivel mundial para la creación de tiendas online ¿Tienes algo que vender? ¡Comienza a venderlo por internet hoy mismo!'),
(5, 'Fundamentos de JQuery', 'Javascript', '50', 'online', 'octubre', 'Este curso de jQuery te enseñará a utilizar el framework Javascript más popular, de modo que puedas entenderlo por dentro y usarlo con facilidad para crear tus propios plugins y componentes de interfaz de usuario.'),
(6, 'Introducción a AJAX', 'JavaScript', '42', 'online', 'Marzo', 'En este curso aprenderás a construir aplicaciones Web similares a las aplicaciones de escritorio, con la capacidad de consultar información en el servidor y mostrarla en la pagina Web, sin la necesidad de refrescar o redibujar la misma.\r\nAprenderás a construir y leer documentos XML y JSON, desarrollar su estructura, reglas, validaciones y parseo. Desarrollarás diferentes prácticas de casos reales, para luego poder aplicarlas en cualquier desarrollo Web. Utilizando jQuery y las conexiones nativas'),
(7, 'Html 5', 'de marcado', '25', 'presencial', 'Mayo', 'Aprender HTML en forma sencilla viendo un concepto teórico, luego algunos ejercicios resueltos y por último y lo más importante desarrollar otros por usted mismo\r\n\r\nHTML es el lenguaje más básico para la creación de páginas web. Es usado para definir la estructutra y el contenido en forma de texto y complementar el texto de páginas web con imágenes, tablas y formularios. HTML se escribe en forma de «etiquetas». Este curso permite aprender los fundamentos para la creación de páginas web usand'),
(8, 'Bootstrap 3', 'diseño', '105', 'presencial', 'noviembre', 'Existen varias formas diferentes de empezar con Bootstrap, cada una orientada a un tipo de público en función de su nivel técnico.\r\n\r\nNosotros comenzamos desde cero, de esta manera no perderás nada importante.'),
(9, 'Curso Api de Facebook', 'redes sociales', '120', 'presencial', 'junio', 'La API está desarrollada con un extensa compatibilidad a la mayoría de los SDK actuales disponibles, PHP, JavaScript, Android e IOS SDK, ActionScript etc. También está disponible una cantidad básica de plugins para la interacción de nuestros sitios con Facebook en unos simples copy/paste!\r\n\r\nEl problema concreto que se presenta es que al ser tan extensa y al poseer tantas posibilidades a la hora de listar ventajas o a elegir “que lenguaje es el mas adecuado” se puede volver una tarea desalentado'),
(10, 'Curso de programación orientada a objetos', 'Java', '95', 'presencial', 'Septiembre', 'Java es un lenguaje de programación orientado a objetos que se popularizó a partir del lanzamiento de su primera versión comercial de amplia difusión, la JDK 1.0 en 1996. Actualmente es uno de los lenguajes más usados para la programación en todo el mundo. '),
(11, 'Curso de AngularJS', 'JavaScript', '90', 'presencial', 'Mayo', 'AngularJS es un framework creado por Google para desarrollar aplicaciones web de alta calidad y en tiempo récord.\r\n\r\nEn este curso aprenderás a crear tus primeras webapps con AngularJS, descubrirás su configuración, arquitectura y componentes fundamentales y al final del curso habrás creado tu primera aplicación con este potente framework.'),
(12, 'NodeJs', 'JavaScript', '100', 'presencial', 'Septiembre', 'Todos hemos oído hablar de Node.js como tecnología que permite trabajar con Javascript del lado del servidor. Poco a poco Node se está ganando un hueco en la comunidad. Sin embargo hay muchas dudas sobre su funcionamiento. Vamos a intentar en este curso acercarnos un poco más a esta tecnología tan interesante.'),
(13, 'Cursos Personalizados', 'todos', '', 'personaliz', 'Todos', 'No todas las empresas tienen las mismas necesidades. No necesitan los mismos cursos porque cada negocio es único y el suyo aún mas. Nuestros precios le sorprenderán.\r\n\r\nHablando claro y con resultados. Nuestro servicios son tremendamente competitivos tanto en precio como en servicio y se basan en la calidad de nuestros resultados. Conozca todas las soluciones que podemos ofertar a su negocio o para ayudarle.'),
(14, 'Java', 'servidor', 'indet', 'seminario', 'todos', 'Descargaté nuestros seminarios en pdf, y aprende sobre nuevas tecnológias o reclicaté. Nuestros pdf han sido creados por profesionales.'),
(15, 'Android', 'Servidor', 'indet', 'seminario', 'todos', 'Descargaté nuestros seminarios en pdf, y aprende sobre nuevas tecnológias o reclicaté. Nuestros pdf han sido creados por profesionales. '),
(16, 'Css3', 'de marcado', 'indet', 'seminario', 'todos', 'Descargaté nuestros seminarios en pdf, y aprende sobre nuevas tecnológias o reclicaté. Nuestros pdf han sido creados por profesionales.'),
(17, 'Web Design', 'Diseño', 'indet', 'seminario', 'todos', 'Descargaté nuestros seminarios en pdf, y aprende sobre nuevas tecnológias o reclicaté. Nuestros pdf han sido creados por profesionales. '),
(18, 'Responsive Design', 'de marcado', 'indet', 'seminario', 'todos', 'Descargaté nuestros seminarios en pdf, y aprende sobre nuevas tecnológias o reclicaté. Nuestros pdf han sido creados por profesionales'),
(19, 'Comercio Electrónico', 'Web', 'indet', 'seminario', 'todos', 'Descargaté nuestros seminarios en pdf, y aprende sobre nuevas tecnológias o reclicaté. Nuestros pdf han sido creados por profesionales');

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
(26, 'Módulo 9: Clientes y fidelización.', 'Aprenderemos a administrar los datos de nuestros clientes, los grupos a los que pertenecen, los carros de la compra abandonados, el servicio al cliente y los medios de contacto.', 4, 'Modulo_9', 'Modulo_9_ejercicios'),
(27, 'Módulo 1: Introducción.', 'jQuery se está convirtiendo rápidamente en una herramienta que todo desarrollador de interfaces web ', 5, 'modulo_1', 'Modulo_1_ejercicios'),
(28, 'Modúlo 2: Conceptos Básicos de jQuery', 'No es posible interactuar de forma segura con el contenido de una página hasta que el documento no se encuentre preparado para su manipulación.', 5, 'modulo_2', 'Modulo_2_ejercicios'),
(29, 'Módulo 3: El núcleo de jQuery', 'Existen métodos que son parte del espacio de nombres de $ y se consideran como métodos del núcleo de jQuery.', 5, 'modulo_3', 'Modulo_3_ejercicios'),
(30, 'Módulo 4: Eventos', 'jQuery provee métodos para asociar controladores de eventos (en inglés event handlers) a selectores. Cuando un evento ocurre, la función provista es ejecutada.', 5, 'modulo_4', 'Modulo_4_ejercicios'),
(31, 'Módulo 1: Introducción a AJAX', 'El término AJAX es un acrónimo de Asynchronous JavaScript + XML, que se puede traducir como "JavaScript asíncrono + XML".', 6, 'modulo_1', 'Modulo_1_ejercicios'),
(32, 'Modúlo 2: Primeros pasos con AJAX', 'La historia de AJAX está íntimamente relacionada con un objeto de programación llamado XMLHttpRequest.', 6, 'modulo_2', 'Modulo_2_ejercicios'),
(33, 'Módulo 3: Técnicas básicas con AJAX', 'Algunas aplicaciones web disponen de varias listas desplegables encadenadas. En este tipo de listas, cuando se selecciona un elemento de la primera lista desplegable', 6, 'modulo_3', 'Modulo_3_ejercicios'),
(34, 'Módulo 4: Técnicas avanzadas con AJAX', 'Las aplicaciones JavaScript ejecutadas en los navegadores tienen unas restricciones muy estrictas en cuanto a su seguridad.', 6, 'modulo_4', 'Modulo_4_ejercicios'),
(35, 'Módulo 5: Frameworks y librerías ', 'Las aplicaciones web son cada vez más complejas, ya que incluyen efectos e interacciones que hasta hace poco tiempo eran exclusivas de las aplicaciones de escritorio.', 6, 'modulo_5', 'Modulo_5_ejercicios');

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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

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
(12, 'profe1@hotmail.com', 'profesor1', 'profe1', 'profe profe', NULL, 'avatar_1.png', 1),
(13, 'sss@dddd.es', '111111111', 'dessss', '', NULL, 'avatar_1.png', 0),
(14, 'aaaaaa@aaaa.com', '123456', 'Pepe', 'Pepe', NULL, 'avatar_1.png', 0);

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
  MODIFY `idCurso` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idAlumno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
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
