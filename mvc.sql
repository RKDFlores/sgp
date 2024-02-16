-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-02-2024 a las 23:12:51
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mvc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `terrenos`
--

CREATE TABLE `terrenos` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(10) NOT NULL,
  `precioVenta` double NOT NULL,
  `inicial` int(4) NOT NULL,
  `numCuotas` int(4) NOT NULL,
  `importeCuotas` double NOT NULL,
  `tpPago` int(4) NOT NULL,
  `tamano` varchar(25) NOT NULL,
  `numPagos` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `terrenos`
--

INSERT INTO `terrenos` (`id`, `descripcion`, `precioVenta`, `inicial`, `numCuotas`, `importeCuotas`, `tpPago`, `tamano`, `numPagos`) VALUES
(1, 'PROPIEDAD1', 25000, 1500, 12, 1000, 1, '12x45', 0),
(2, 'PROPIEDAD2', 25000, 1500, 12, 800, 1, '12x45', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `terrenospagos`
--

CREATE TABLE `terrenospagos` (
  `idPago` int(11) NOT NULL,
  `idTerreno` int(11) NOT NULL,
  `importePagado` int(11) NOT NULL,
  `fechaPago` date NOT NULL,
  `fechaPagada` datetime NOT NULL,
  `UsuarioRegistra` varchar(5) NOT NULL,
  `Observacion` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoventa`
--

CREATE TABLE `tipoventa` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(30) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipoventa`
--

INSERT INTO `tipoventa` (`id`, `descripcion`, `estado`) VALUES
(1, 'CONTADO', 0),
(2, 'CUOTAS', 0),
(3, 'CONTADO', 1),
(4, 'CUOTAS', 2),
(5, 'EN OFERTA', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `vehiculos` (
  `id` int(11) NOT NULL,
  `placa` varchar(10) NOT NULL,
  `marca` varchar(25) NOT NULL,
  `modelo` varchar(25) NOT NULL,
  `anio` int(4) NOT NULL,
  `color` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`id`, `placa`, `marca`, `modelo`, `anio`, `color`) VALUES
(1, 'MVC1234', 'VOLVO', 'G45', 2015, 'NEGRO'),
(2, 'ASS1535', 'VOLVO', 'GFGF5', 2016, 'BLANCO'),
(3, 'ASDAD', 'VOLVO', 'G45', 2017, 'GRIS'),
(4, 'TRD5', 'VOLVO', 'GFGF5', 2018, 'VERDE');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `terrenos`
--
ALTER TABLE `terrenos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `terrenospagos`
--
ALTER TABLE `terrenospagos`
  ADD PRIMARY KEY (`idPago`);

--
-- Indices de la tabla `tipoventa`
--
ALTER TABLE `tipoventa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `terrenos`
--
ALTER TABLE `terrenos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `terrenospagos`
--
ALTER TABLE `terrenospagos`
  MODIFY `idPago` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipoventa`
--
ALTER TABLE `tipoventa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
