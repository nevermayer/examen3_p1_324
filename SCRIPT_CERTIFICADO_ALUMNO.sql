-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-12-2022 a las 06:23:02
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `academico2p`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `id` int(11) NOT NULL,
  `nombrecompleto` varchar(70) DEFAULT NULL,
  `coddepto` varchar(5) DEFAULT NULL,
  `codBachiller` varchar(50) DEFAULT NULL,
  `cnacimiento` varchar(50) DEFAULT NULL,
  `cidentidad` varchar(50) DEFAULT NULL,
  `nacionalidad` varchar(10) DEFAULT NULL,
  `usuario` varchar(20) DEFAULT NULL,
  `ci` varchar(30) DEFAULT NULL,
  `fechanacimiento` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id`, `nombrecompleto`, `coddepto`, `codBachiller`, `cnacimiento`, `cidentidad`, `nacionalidad`, `usuario`, `ci`, `fechanacimiento`) VALUES
(1, 'Grover Osvaldo Rodriguez Apaza', '03', '1.JPG', '1.JPG', '1.JPG', '', 'FuryAlumno', '13814701', '2022-12-08'),
(2, 'Osvaldo3', '04', '42343', 'si', '34123', 'Argentinia', 'OsvaldoAlumno', NULL, '1988-11-11'),
(3, 'Gennady Korotevich', '03', '3.JPG', '3.JPG', '3.JPG', 'Polonia', 'TouristAlumno', '23434', '2022-12-08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `certificado_conclusion`
--

CREATE TABLE `certificado_conclusion` (
  `id` int(11) NOT NULL,
  `cartadecano` varchar(50) DEFAULT NULL,
  `cedulaidentidad` varchar(50) DEFAULT NULL,
  `certificadocalficaciones` varchar(50) DEFAULT NULL,
  `solicitudconclusionestudios` varchar(50) DEFAULT NULL,
  `caratulatrabajogrado` varchar(50) DEFAULT NULL,
  `resolucionperfilgrado` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `certificado_conclusion`
--

INSERT INTO `certificado_conclusion` (`id`, `cartadecano`, `cedulaidentidad`, `certificadocalficaciones`, `solicitudconclusionestudios`, `caratulatrabajogrado`, `resolucionperfilgrado`) VALUES
(1, '1.pdf', '1.pdf', '1.pdf', '1.pdf', '1.pdf', '1.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `certificado_generado`
--

CREATE TABLE `certificado_generado` (
  `id` int(11) DEFAULT NULL,
  `nombre_certificado` varchar(50) DEFAULT NULL,
  `nro_tramite` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `certificado_generado`
--

INSERT INTO `certificado_generado` (`id`, `nombre_certificado`, `nro_tramite`) VALUES
(1, '1.pdf', '1000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deposito_caja`
--

CREATE TABLE `deposito_caja` (
  `id` int(11) DEFAULT NULL,
  `usuario` varchar(30) DEFAULT NULL,
  `monto` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `deposito_caja`
--

INSERT INTO `deposito_caja` (`id`, `usuario`, `monto`) VALUES
(1, 'FuryAlumno', 65);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

CREATE TABLE `notas` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `periodo` varchar(15) DEFAULT NULL,
  `gestion` year(4) DEFAULT NULL,
  `materia` varchar(15) DEFAULT NULL,
  `nota` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `notas`
--

INSERT INTO `notas` (`id`, `id_usuario`, `periodo`, `gestion`, `materia`, `nota`) VALUES
(1, 1, 'primero', 2017, 'INF-111', 90),
(2, 1, 'primero', 2017, 'LAB-111', 99),
(5, 1, 'primero', 2017, 'INF-112', 89),
(6, 1, 'primero', 2017, 'INF-113', 89),
(7, 1, 'primero', 2017, 'MAT-114', 89),
(8, 1, 'primero', 2017, 'MAT-115', 89),
(9, 1, 'primero', 2017, 'LIN-116', 89),
(10, 1, 'segundo', 2017, 'INF-121', 80),
(11, 1, 'segundo', 2017, 'LAB-121', 70),
(12, 1, 'segundo', 2017, 'FIS-122', 60),
(13, 1, 'segundo', 2017, 'LAB-122', 53),
(14, 1, 'segundo', 2017, 'MAT-123', 89),
(15, 1, 'segundo', 2017, 'MAT-124', 82),
(16, 1, 'segundo', 2017, 'MAT-125', 81),
(17, 1, 'primero', 2018, 'INF-131', 80),
(18, 1, 'primero', 2018, 'LAB-131', 70),
(19, 1, 'primero', 2018, 'FIS-132', 60),
(20, 1, 'primero', 2018, 'LAB-132', 53),
(21, 1, 'primero', 2018, 'EST-133', 89),
(22, 1, 'primero', 2018, 'MAT-134', 82),
(23, 1, 'primero', 2018, 'MAT-135', 81),
(24, 1, 'segundo', 2018, 'INF-141', 80),
(25, 1, 'segundo', 2018, 'INF-142', 70),
(26, 1, 'segundo', 2018, 'INF-143', 60),
(27, 1, 'segundo', 2018, 'INF-144', 53),
(28, 1, 'segundo', 2018, 'EST-145', 81),
(29, 1, 'primero', 2019, 'INF-151', 81),
(30, 1, 'primero', 2019, 'INF-152', 79),
(31, 1, 'primero', 2019, 'INF-153', 70),
(32, 1, 'primero', 2019, 'INF-154', 83),
(33, 1, 'primero', 2019, 'EST-155', 93),
(34, 1, 'primero', 2019, 'MAT-156', 81),
(35, 1, 'segundo', 2019, 'INF-161', 71),
(36, 1, 'segundo', 2019, 'INF-162', 70),
(37, 1, 'segundo', 2019, 'INF-163', 70),
(38, 1, 'segundo', 2019, 'INF-164', 53),
(39, 1, 'segundo', 2019, 'EST-165', 100),
(40, 1, 'segundo', 2019, 'INF-166', 81),
(41, 1, 'primero', 2020, 'INF-271', 71),
(42, 1, 'primero', 2020, 'INF-272', 70),
(43, 1, 'primero', 2020, 'INF-273', 70),
(44, 1, 'primero', 2020, 'LAB-273', 53),
(45, 1, 'primero', 2020, 'INF-311', 100),
(46, 1, 'primero', 2020, 'INF-312', 81),
(47, 1, 'segundo', 2020, 'INF-281', 71),
(48, 1, 'segundo', 2020, 'INF-282', 70),
(49, 1, 'segundo', 2020, 'INF-313', 70),
(50, 1, 'segundo', 2020, 'INF-314', 53),
(51, 1, 'segundo', 2020, 'INF-315', 100),
(52, 1, 'segundo', 2020, 'INF-316', 81),
(53, 1, 'primero', 2021, 'INF-391', 71),
(54, 1, 'primero', 2021, 'INF-398', 70),
(55, 1, 'primero', 2021, 'INF-318', 70),
(56, 1, 'primero', 2021, 'INF-319', 53),
(57, 1, 'primero', 2021, 'INF-320', 100),
(59, 1, 'segundo', 2021, 'INF-399', 81);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `certificado_conclusion`
--
ALTER TABLE `certificado_conclusion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `notas`
--
ALTER TABLE `notas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
