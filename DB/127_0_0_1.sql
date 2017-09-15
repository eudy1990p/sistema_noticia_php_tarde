-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-09-2017 a las 22:41:55
-- Versión del servidor: 10.1.22-MariaDB
-- Versión de PHP: 7.0.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `php_db`
--
CREATE DATABASE IF NOT EXISTS `php_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `php_db`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(70) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `fecha`, `usuario_id`) VALUES
(2, 'ohhhh prueba', '2017-09-05 16:36:32', 3),
(6, 'nuevo ', '2017-09-13 15:10:51', 3),
(7, 'usuado', '2017-09-13 15:10:57', 3),
(8, 'CATEGORIA 1', '2017-09-13 15:19:47', 3),
(9, '', '2017-09-13 16:19:03', 0),
(10, '', '2017-09-13 16:31:31', 0),
(11, '', '2017-09-13 16:33:15', 0),
(12, '', '2017-09-13 16:34:53', 0),
(13, 'COMIDA', '2017-09-15 15:31:23', 3),
(14, 'INFORMATICA', '2017-09-15 15:31:31', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `apado` varchar(70) DEFAULT NULL,
  `mensaje` text,
  `noticia_id` int(11) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `titulo` varchar(70) DEFAULT NULL,
  `cuerpo` text,
  `url_img` varchar(150) DEFAULT NULL,
  `categoria_id` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `cuerpo`, `url_img`, `categoria_id`, `fecha`, `usuario_id`) VALUES
(1, 'kk', 'iii', 'fondoBT.png', 7, '2017-09-13', 3),
(2, 'kk', 'iii', 'fondoBT.png', 7, '2017-09-13', 3),
(3, 'kk', 'iii', 'fondoBT.png', 7, '2017-09-13', 3),
(4, 'kk', 'iii', 'fondoBT.png', 7, '2017-09-13', 3),
(6, 'kk', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.', 'fondoBT.png', 7, '2017-09-13', 3),
(7, 'dddddd', 'cccccccccc', 'fondoBT.png', 2, '2017-09-13', 3),
(8, 'titulo', 'cuerpo', 'fondoBT.png', NULL, '2017-09-09', NULL),
(9, 'titulo', 'cuerpo', 'fondoBT.png', NULL, '2017-09-09', NULL),
(10, 'titulo', 'cuerpo', 'fondoBT.png', NULL, '2017-09-09', NULL),
(11, 'nuevo titulo', 'nuevo cuerpo', 'fondoBT.png', 7, '2017-09-15', 3),
(12, 'COMIDA', 'Es un hecho establecido hace demasiado tiempo que un lector se distraerÃ¡ con el contenido del texto de un sitio mientras que mira su diseÃ±o. El punto de usar Lorem Ipsum es que tiene una distribuciÃ³n mÃ¡s o menos normal de las letras, al contrario de usar textos como por ejemplo \"Contenido aquÃ­, contenido aquÃ­\". Estos textos hacen parecerlo un espaÃ±ol que se puede leer. Muchos paquetes de autoediciÃ³n y editores de pÃ¡ginas web usan el Lorem Ipsum como su texto por defecto, y al hacer una bÃºsqueda de \"Lorem Ipsum\" va a dar por resultado muchos sitios web que usan este texto si se encuentran en estado de desarrollo. Muchas versiones han evolucionado a travÃ©s de los aÃ±os, algunas veces por accidente, otras veces a propÃ³sito (por ejemplo insertÃ¡ndole humor y cosas por el estilo).', 'fondoBT.png', 13, '2017-09-15', 3),
(13, 'INFORMATICA', 'Hay muchas variaciones de los pasajes de Lorem Ipsum disponibles, pero la mayorÃ­a sufriÃ³ alteraciones en alguna manera, ya sea porque se le agregÃ³ humor, o palabras aleatorias que no parecen ni un poco creÃ­bles. Si vas a utilizar un pasaje de Lorem Ipsum, necesitÃ¡s estar seguro de que no hay nada avergonzante escondido en el medio del texto. Todos los generadores de Lorem Ipsum que se encuentran en Internet tienden a repetir trozos predefinidos cuando sea necesario, haciendo a este el Ãºnico generador verdadero (vÃ¡lido) en la Internet. Usa un diccionario de mas de 200 palabras provenientes del latÃ­n, combinadas con estructuras muy Ãºtiles de sentencias, para generar texto de Lorem Ipsum que parezca razonable. Este Lorem Ipsum generado siempre estarÃ¡ libre de repeticiones, humor agregado o palabras no caracterÃ­sticas del lenguaje, etc.', 'fondoBT.png', 14, '2017-09-15', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `clave` varchar(100) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `rol` enum('admin','supervisor','cajero') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `clave`, `fecha`, `rol`) VALUES
(1, 'Julio', '123', '2017-08-28 15:52:05', 'admin'),
(3, 'gadiel', '123', NULL, 'supervisor'),
(5, 'emilio', '123', NULL, 'admin'),
(6, 'emilio', NULL, NULL, 'admin'),
(7, 'emilio', '123', NULL, 'admin'),
(11, 'pepito', 'elduro', NULL, 'supervisor'),
(12, 'juanito', '123456', NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
