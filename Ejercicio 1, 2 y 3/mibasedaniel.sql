-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 04-10-2021 a las 08:25:53
-- Versión del servidor: 8.0.18
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mibasedaniel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nota`
--

CREATE TABLE `nota` (
  `ci` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `sigla` varchar(8) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nota1` float(6,0) DEFAULT NULL,
  `nota2` float(6,0) DEFAULT NULL,
  `nota3` float(6,0) DEFAULT NULL,
  `notafinal` float(6,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `nota`
--

INSERT INTO `nota` (`ci`, `sigla`, `nota1`, `nota2`, `nota3`, `notafinal`) VALUES
('8347087', 'INF-111', 30, 20, 15, 65),
('8347087', 'INF-112', 20, 20, 30, 70),
('8347087', 'INF-113', 30, 30, 20, 80),
('8347087', 'INF-114', 20, 20, 15, 55),
('8347087', 'INF-115', 20, 20, 20, 60),
('8347087', 'INF-116', 30, 30, 25, 85),
('8347087', 'LAB-111', 25, 30, 30, 85),
('7984561', 'INF-111', 20, 25, 20, 65),
('7984561', 'INF-112', 15, 30, 20, 65),
('7984561', 'INF-113', 15, 15, 25, 55),
('7984561', 'INF-114', 20, 25, 30, 75),
('7984561', 'INF-115', 20, 10, 30, 60),
('7984561', 'INF-116', 30, 20, 20, 70),
('7984561', 'LAB-111', 20, 30, 30, 80),
('4561237', 'INF-111', 20, 25, 25, 70),
('4561237', 'INF-112', 15, 20, 25, 60),
('4561237', 'INF-113', 20, 25, 25, 70),
('4561237', 'INF-114', 20, 25, 30, 75),
('4561237', 'INF-115', 20, 20, 35, 75),
('4561237', 'INF-116', 20, 20, 20, 60),
('4561237', 'LAB-111', 30, 30, 30, 90),
('5829641', 'INF-111', 20, 20, 20, 60),
('5829641', 'INF-112', 20, 25, 25, 70),
('5829641', 'INF-113', 20, 25, 30, 75),
('5829641', 'INF-114', 25, 20, 20, 65),
('5829641', 'INF-115', 30, 30, 20, 80),
('5829641', 'INF-116', 20, 20, 20, 60),
('5829641', 'LAB-111', 25, 20, 20, 65),
('9875462', 'INF-111', 20, 10, 25, 55),
('9875462', 'INF-112', 20, 25, 20, 65),
('9875462', 'INF-113', 10, 25, 30, 65),
('9875462', 'INF-114', 25, 20, 20, 65),
('9875462', 'INF-115', 30, 30, 20, 80),
('9875462', 'INF-116', 20, 20, 20, 60),
('9875462', 'LAB-111', 25, 20, 20, 65),
('6543217', 'INF-111', 30, 20, 25, 75),
('6543217', 'INF-112', 25, 25, 20, 70),
('6543217', 'INF-113', 10, 25, 35, 70),
('6543217', 'INF-114', 25, 20, 20, 65),
('6543217', 'INF-115', 30, 20, 20, 70),
('6543217', 'INF-116', 20, 20, 20, 60),
('6543217', 'LAB-111', 25, 20, 20, 65);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `ci` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `nombre` varchar(80) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fechanac` date DEFAULT NULL,
  `departamento` varchar(2) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `personaje` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`ci`, `nombre`, `fechanac`, `departamento`, `personaje`) VALUES
('11023654', 'Enrique Apaza Carrillo', '1995-03-26', '02', 'est'),
('12345678', 'Moises Martin Silva Choque', '1970-02-01', '02', 'doc'),
('1254896', 'Luis Fernando Apaza Ticona', '1996-08-03', '09', 'est'),
('14725836', 'Rodrigo Moises Machaca Mamani', '1996-05-10', '03', 'est'),
('4561237', 'Franz Freddy Larico Luque', '1995-10-19', '01', 'est'),
('5556423', 'Jarol Elio Alanoca Calcinas', '1998-09-14', '04', 'est'),
('5829641', 'Ariel Aruata Quispe', '1998-03-26', '03', 'est'),
('5986123', 'Cristian Turian Castro Magnani', '1998-07-15', '05', 'est'),
('6543217', 'Yerko Aquiles Luna Chipana', '1994-07-10', '07', 'est'),
('7485962', 'Jorge Manuel Singa Silva', '1998-10-10', '08', 'est'),
('7984561', 'Indrack Asvins Vega Pacheco', '1997-09-10', '01', 'est'),
('8347087', 'Daniel Velarde Quispe', '1998-12-03', '02', 'est'),
('9875462', 'Marlon Cordero Luque', '1992-06-10', '06', 'doc');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ci` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `usuario` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `contrasena` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ci`, `usuario`, `contrasena`) VALUES
('11023654', 'albertmq', 'albert123'),
('12345678', 'moisessc', '123456'),
('14725836', 'moisesmm', 'moises123'),
('4561237', 'franzll', 'franz123'),
('5829641', 'arielaq', 'ariel123'),
('6543217', 'yerkolc', 'yerko123'),
('7984561', 'indrackvp', 'indrack123'),
('8347087', 'danielvq', '123456'),
('9875462', 'marloncl', '123456');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`ci`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ci`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
