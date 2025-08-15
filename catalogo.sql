-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-08-2025 a las 03:16:05
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `catalogo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `director`
--

CREATE TABLE `director` (
  `id_director` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `fecnac` date NOT NULL,
  `nacionalidad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `director`
--

INSERT INTO `director` (`id_director`, `nombre`, `apellido`, `fecnac`, `nacionalidad`) VALUES
(1, 'James', 'Wan', '1977-02-26', 'Malayo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE `genero` (
  `id_genero` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`id_genero`, `nombre`) VALUES
(1, 'Terror'),
(2, 'Drama'),
(3, 'Comedia'),
(4, 'Suspenso'),
(5, 'Ciencia Ficción'),
(6, 'Romance'),
(7, 'Aventuras'),
(8, 'Acción'),
(9, 'Musical'),
(10, 'Documental'),
(11, 'Bélico'),
(12, 'Western'),
(13, 'Animación'),
(14, 'Fantasía'),
(15, 'Thriller de Crimen');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `aniopubli` int(11) NOT NULL,
  `id_genero` int(11) NOT NULL,
  `id_director` int(11) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`id`, `nombre`, `aniopubli`, `id_genero`, `id_director`, `descripcion`) VALUES
(1, 'El conjuro', 2013, 1, 1, '\"El conjuro\" es una película de terror estadounidense de 2013 dirigida por James Wan y protagonizada por Vera Farmiga y Patrick Wilson como los investigadores paranormales Ed y Lorraine Warren.\r\nLa historia se basa en un caso inspirado en la realidad que ocurrió en la década de 1970, cuando la familia Perron, compuesta por Roger, Carolyn y sus cinco hijas, se mudó a una granja en Harrisville, Rhode Island.\r\nPronto, la familia comenzó a experimentar fenómenos sobrenaturales, como movimientos de objetos, apariciones y ataques de una presencia maligna, lo que los llevó a buscar ayuda de los Warren.\r\nLos investigadores descubren que la casa está poseída por un espíritu malvado relacionado con una misteriosa caja de música y el espíritu de un niño.\r\n La película, que se estrenó el 23 de agosto de 2013, es la primera de la franquicia The Conjuring Universe, un universo cinematográfico de terror que incluye secuelas y spin-offs centrados en otros casos y entidades que los Warren han enfrentado.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `director`
--
ALTER TABLE `director`
  ADD PRIMARY KEY (`id_director`);

--
-- Indices de la tabla `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`id_genero`);

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `director`
--
ALTER TABLE `director`
  MODIFY `id_director` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `genero`
--
ALTER TABLE `genero`
  MODIFY `id_genero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
