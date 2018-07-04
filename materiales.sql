-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-07-2018 a las 18:22:00
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
-- Base de datos: `materiales`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dosificaciones_por_m3`
--

CREATE TABLE `dosificaciones_por_m3` (
  `id` char(4) COLLATE utf8_swedish_ci NOT NULL,
  `cemento_kg` float NOT NULL,
  `ripio_kg` float NOT NULL,
  `arena_kg` float NOT NULL,
  `agua_lts` int(4) NOT NULL,
  `uso_carga` char(10) COLLATE utf8_swedish_ci NOT NULL,
  `espesor_m` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

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
  `material` char(15) COLLATE utf8_swedish_ci NOT NULL,
  `precio` float NOT NULL,
  `kilos` int(5) NOT NULL,
  `sacos` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

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
  `id_proyecto` int(4) NOT NULL,
  `cod_us` int(4) NOT NULL,
  `largo` float NOT NULL,
  `ancho` float NOT NULL,
  `espesor` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `cod_us` int(4) NOT NULL,
  `usuario` varchar(20) COLLATE utf8_swedish_ci NOT NULL,
  `clave` varchar(20) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`cod_us`, `usuario`, `clave`) VALUES
(1, 'kesalazar', '123'),
(3, 'kesalazar', '34'),
(4, '12', '12'),
(5, '12', '12'),
(6, '122', '122'),
(7, '122', '122');

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
  ADD PRIMARY KEY (`cod_us`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `cod_us` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
