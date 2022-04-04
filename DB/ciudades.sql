-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-12-2020 a las 20:01:26
-- Versión del servidor: 10.4.16-MariaDB
-- Versión de PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `capitales`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudades`
--

CREATE TABLE `ciudades` (
  `ID` int(11) NOT NULL,
  `Ciudad` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Pais` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Habitantes` bigint(20) NOT NULL,
  `Superficie` bigint(20) NOT NULL,
  `Metro` varchar(3) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `ciudades`
--

INSERT INTO `ciudades` (`ID`, `Ciudad`, `Pais`, `Habitantes`, `Superficie`, `Metro`) VALUES
(79, 'México D.F.', 'México', 8855000, 1485, 'No'),
(80, 'Barcelona', 'España', 5575000, 102, 'Si'),
(81, 'Buenos Aires', 'Argentina', 888111, 333, 'Si'),
(83, 'Londres', 'Inglaterra', 8982000, 1572, 'Si'),
(84, 'Berlin', 'Alemania', 3769000, 892, 'Si'),
(85, 'Villa Allende', 'Argentina', 48762, 23, 'No'),
(86, 'Paris', 'Francia', 2148000, 105, 'Si'),
(87, 'Puerto Principe', 'Haiti', 1164236, 36, 'No'),
(90, '11', '11', 1, 120, 'No');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
