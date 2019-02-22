-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-02-2019 a las 14:05:01
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `futbol`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equips`
--

CREATE TABLE `equips` (
  `codi` int(10) NOT NULL,
  `nom` varchar(30) COLLATE utf8_bin NOT NULL,
  `localitat` varchar(30) COLLATE utf8_bin NOT NULL,
  `web` varchar(100) COLLATE utf8_bin NOT NULL,
  `escut` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `equips`
--

INSERT INTO `equips` (`codi`, `nom`, `localitat`, `web`, `escut`) VALUES
(1, 'Real Madrid Club de Futbol', 'Madrid', 'https://www.realmadrid.com/', 'https://www.bdfutbol.com/i/eg/2.png'),
(4, 'Futbol Club Barcelonalona', 'Barcelona', 'https://www.fcbarcelona.com/en/', 'https://www.bdfutbol.com/i/eg/1.png'),
(5, 'Club Atletico de Madrid', 'Madrid', 'http://www.atleticodemadrid.com', 'https://www.bdfutbol.com/i/eg/7.png'),
(6, 'Valencia Club de Futbol', 'Valencia ', 'http://www.valenciacf.com/portadas/splash', 'https://www.bdfutbol.com/i/eg/36.png'),
(7, 'Athletic Club', 'Bilbao ', 'https://www.athletic-club.eus/', 'https://www.bdfutbol.com/i/eg/6.png'),
(8, 'Sevilla Futbol Club', 'Sevilla ', 'https://www.sevillafc.es/', 'https://www.bdfutbol.com/i/eg/33.png'),
(9, 'Real Club Deportiu Espanyol', 'Barcelona', 'https://www.rcdespanyol.com/', 'https://www.bdfutbol.com/i/eg/14.png'),
(10, 'Real Sociedad de Futbol', 'Donostia', 'https://www.realsociedad.eus/', 'https://www.bdfutbol.com/i/eg/30.png'),
(11, 'Zaragoza', 'Zaragoza', 'https://www.realzaragoza.com/', 'https://www.bdfutbol.com/i/eg/39.png'),
(12, 'Betis', 'Sevilla ', 'https://www.realbetisbalompie.es/', 'https://www.bdfutbol.com/i/eg/8.png'),
(13, 'Real Club Celta de Vigo', 'Vigo ', 'http://www.rccelta.es/index.php/es/', 'https://www.bdfutbol.com/i/eg/11.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `titols`
--

CREATE TABLE `titols` (
  `codi` int(10) NOT NULL,
  `nom` varchar(30) COLLATE utf8_bin NOT NULL,
  `codiequip` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `titols`
--

INSERT INTO `titols` (`codi`, `nom`, `codiequip`) VALUES
(1, '25 Ligas, 30 Copas del Rey', '4'),
(2, '33 Ligas, 19 Copas del Rey', '7'),
(3, '8 Ligas, 23 Copas del Rey', '1'),
(4, '1 Liga, 5 Ligas', '12'),
(5, '10 Ligas, 1 Liga', '5'),
(6, '2 Ligas 2a, 1 Intertoto', '13'),
(7, '1 Liga 2a, 4 Copas', '9'),
(8, '2 Ligas, 4 Ligas', '10'),
(9, '1 Liga, 2 Ligas', '8'),
(10, '6 Ligas, 1 Liga', '6'),
(11, '1 Liga 2a, 6 Copas', '11');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `equips`
--
ALTER TABLE `equips`
  ADD PRIMARY KEY (`codi`);

--
-- Indices de la tabla `titols`
--
ALTER TABLE `titols`
  ADD PRIMARY KEY (`codi`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `equips`
--
ALTER TABLE `equips`
  MODIFY `codi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `titols`
--
ALTER TABLE `titols`
  MODIFY `codi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
