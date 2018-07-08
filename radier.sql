-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-07-2018 a las 06:45:17
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `radier`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dosificaciones_por_m3`
--

CREATE TABLE `dosificaciones_por_m3` (
  `id` text COLLATE utf8_spanish_ci NOT NULL,
  `cemento_kg` int(11) NOT NULL,
  `ripio_kg` int(11) NOT NULL,
  `arena_kg` int(11) NOT NULL,
  `agua_lts` int(11) NOT NULL,
  `uso_carga` text COLLATE utf8_spanish_ci NOT NULL,
  `espesor_m` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `dosificaciones_por_m3`
--

INSERT INTO `dosificaciones_por_m3` (`id`, `cemento_kg`, `ripio_kg`, `arena_kg`, `agua_lts`, `uso_carga`, `espesor_m`) VALUES
('h5', 170, 1025, 910, 195, 'liviana', 0.05),
('h15', 275, 1070, 800, 195, 'media', 0.08),
('h25', 380, 1120, 645, 200, 'pesada', 0.12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `precios`
--

CREATE TABLE `precios` (
  `material` text COLLATE utf8_spanish_ci NOT NULL,
  `precio` float NOT NULL,
  `kilos` int(4) NOT NULL,
  `sacos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `precios`
--

INSERT INTO `precios` (`material`, `precio`, `kilos`, `sacos`) VALUES
('cemento', 3580, 25, 1),
('arena', 950, 25, 1),
('gravilla', 990, 25, 1),
('agua', 577.27, 1000, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `cod_us` int(4) NOT NULL,
  `proyecto` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `largo` float NOT NULL,
  `ancho` float NOT NULL,
  `uso` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`cod_us`, `proyecto`, `largo`, `ancho`, `uso`) VALUES
(3, 'leo 1', 1, 1, 'liviana'),
(1, 'cris 1', 2, 2, 'media'),
(2, 'kevin 1', 3, 3, 'liviana');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `cod_us` int(4) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `clave` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`cod_us`, `nombre`, `clave`) VALUES
(1, 'cristobal', '1234'),
(2, 'kevin', '1234'),
(3, 'leonardo', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD KEY `cod_us` (`cod_us`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`cod_us`),
  ADD UNIQUE KEY `cod_us` (`cod_us`,`nombre`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `cod_us` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `cod_us` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD CONSTRAINT `proyectos_ibfk_1` FOREIGN KEY (`cod_us`) REFERENCES `usuarios` (`cod_us`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
