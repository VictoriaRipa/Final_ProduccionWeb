-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3463
-- Tiempo de generación: 14-06-2023 a las 15:01:39
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `alojamientos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alojamientos`
--

CREATE TABLE `alojamientos` (
  `idAlojamiento` int(12) UNSIGNED NOT NULL,
  `nombreAlojamiento` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `precioAlojamiento` float(9,2) UNSIGNED DEFAULT NULL,
  `disponibilidad` smallint(5) DEFAULT NULL,
  `fotoAlojamiento` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcionAlojamiento` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `detallesAlojamiento` text COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `alojamientos`
--

INSERT INTO `alojamientos` (`idAlojamiento`, `nombreAlojamiento`, `precioAlojamiento`, `disponibilidad`, `fotoAlojamiento`, `descripcionAlojamiento`, `detallesAlojamiento`) VALUES
(1, 'Hotel San Carlos', 100.00, 10, 'hotel_sc.jpg', 'Hotel lujoso en Rio Areco', 'Excelente alojamiento'),
(2, 'Departamento MEF', 200.00, 5, 'depto_MEF.jpg', 'Departamento muy bien ubicado', 'Pleno centro'),
(3, 'Habitacion familiar', 150.00, 8, 'hab_fam123.jpg', 'Habitacion familiar', 'Comoda y espaciosa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `idCliente` int(12) UNSIGNED NOT NULL,
  `nombreCliente` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `emailCliente` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefonoCliente` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`idCliente`, `nombreCliente`, `emailCliente`, `telefonoCliente`) VALUES
(1, 'Juan Perez', 'juan@perez.com', '123456789'),
(2, 'Maria Lopez', 'maria@lopez.com', '987654321'),
(3, 'Pedro Gomez', 'pedro@gomez.com', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alojamientos`
--
ALTER TABLE `alojamientos`
  ADD PRIMARY KEY (`idAlojamiento`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idCliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alojamientos`
--
ALTER TABLE `alojamientos`
  MODIFY `idAlojamiento` int(12) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `idCliente` int(12) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
