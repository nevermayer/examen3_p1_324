-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-12-2022 a las 06:25:37
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
-- Base de datos: `segundoparcial2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `flujo`
--

CREATE TABLE `flujo` (
  `flujo` varchar(4) DEFAULT NULL,
  `proceso` varchar(4) DEFAULT NULL,
  `proceso_siguiente` varchar(4) DEFAULT NULL,
  `tipo` varchar(2) DEFAULT NULL,
  `rol` varchar(20) DEFAULT NULL,
  `pantalla` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `flujo`
--

INSERT INTO `flujo` (`flujo`, `proceso`, `proceso_siguiente`, `tipo`, `rol`, `pantalla`) VALUES
('F1', 'P1', 'P2', 'I', 'Alumno', 'inicial'),
('F1', 'P2', 'P3', 'P', 'Alumno', 'datos'),
('F1', 'P3', 'P4', 'P', 'Alumno', 'envio'),
('F1', 'P4', NULL, 'C', 'Kardex', 'revision'),
('F1', 'P5', 'P2', 'P', 'Kardex', 'no'),
('F1', 'P6', NULL, 'C', 'Caja', 'si'),
('F1', 'P7', 'P2', 'P', 'Caja', 'fallocaja'),
('F1', 'P8', 'P9', 'P', 'Kardex', 'generacertificado'),
('F1', 'P9', NULL, 'F', 'Alumno', 'vercertificado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `flujocondicion`
--

CREATE TABLE `flujocondicion` (
  `flujo` varchar(3) DEFAULT NULL,
  `proceso` varchar(3) DEFAULT NULL,
  `procesoSI` varchar(3) DEFAULT NULL,
  `procesoNO` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `flujocondicion`
--

INSERT INTO `flujocondicion` (`flujo`, `proceso`, `procesoSI`, `procesoNO`) VALUES
('F1', 'P4', 'P6', 'P5'),
('F1', 'P6', 'P8', 'P7');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `flujotramite`
--

CREATE TABLE `flujotramite` (
  `Flujo` varchar(5) DEFAULT NULL,
  `proceso` varchar(5) DEFAULT NULL,
  `nro_tramite` varchar(10) DEFAULT NULL,
  `fechaini` datetime DEFAULT NULL,
  `fechafin` datetime DEFAULT NULL,
  `usuario` varchar(30) DEFAULT NULL,
  `usuario_tarea` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `flujotramite`
--

INSERT INTO `flujotramite` (`Flujo`, `proceso`, `nro_tramite`, `fechaini`, `fechafin`, `usuario`, `usuario_tarea`) VALUES
('F1', 'P1', '1000', '2022-11-23 23:55:00', '2022-12-05 05:54:27', 'FuryAlumno', 'FuryAlumno'),
('F1', 'P1', '1001', '2022-10-23 21:55:00', '2022-12-05 06:17:19', 'FuryAlumno', 'FuryAlumno'),
('F1', 'P1', '1002', '2022-11-29 13:55:00', NULL, 'FuryAlumno', 'FuryAlumno'),
('F1', 'P2', '1000', '2022-12-05 05:54:27', '2022-12-05 05:54:56', 'FuryAlumno', 'FuryAlumno'),
('F1', 'P3', '1000', '2022-12-05 05:54:56', '2022-12-05 05:54:57', 'FuryAlumno', 'FuryAlumno'),
('F1', 'P4', '1000', '2022-12-05 05:54:57', '2022-12-05 05:55:38', 'JuanKardex', 'FuryAlumno'),
('F1', 'P5', '1000', '2022-12-05 05:55:38', '2022-12-05 05:55:51', 'JuanKardex', 'JuanKardex'),
('F1', 'P2', '1000', '2022-12-05 05:55:51', '2022-12-05 05:56:01', 'FuryAlumno', 'JuanKardex'),
('F1', 'P3', '1000', '2022-12-05 05:56:01', '2022-12-05 05:56:02', 'FuryAlumno', 'FuryAlumno'),
('F1', 'P4', '1000', '2022-12-05 05:56:02', '2022-12-05 05:56:19', 'JuanKardex', 'FuryAlumno'),
('F1', 'P6', '1000', '2022-12-05 05:56:19', '2022-12-05 05:56:37', 'AlanCaja', 'JuanKardex'),
('F1', 'P7', '1000', '2022-12-05 05:56:37', '2022-12-05 05:56:53', 'AlanCaja', 'AlanCaja'),
('F1', 'P2', '1000', '2022-12-05 05:56:53', '2022-12-05 05:57:05', 'FuryAlumno', 'AlanCaja'),
('F1', 'P3', '1000', '2022-12-05 05:57:05', '2022-12-05 05:57:06', 'FuryAlumno', 'FuryAlumno'),
('F1', 'P4', '1000', '2022-12-05 05:57:06', '2022-12-05 05:57:18', 'JuanKardex', 'FuryAlumno'),
('F1', 'P6', '1000', '2022-12-05 05:57:18', '2022-12-05 05:57:27', 'AlanCaja', 'JuanKardex'),
('F1', 'P8', '1000', '2022-12-05 05:57:27', '2022-12-05 05:57:50', 'JuanKardex', 'AlanCaja'),
('F1', 'P9', '1000', '2022-12-05 05:57:50', '2022-12-05 05:58:11', 'FuryAlumno', 'JuanKardex'),
('F1', 'P2', '1001', '2022-12-05 06:17:19', '2022-12-05 06:17:22', 'FuryAlumno', 'FuryAlumno'),
('F1', 'P3', '1001', '2022-12-05 06:17:22', '2022-12-05 06:17:23', 'FuryAlumno', 'FuryAlumno'),
('F1', 'P4', '1001', '2022-12-05 06:17:23', '2022-12-05 06:17:36', 'JuanKardex', 'FuryAlumno'),
('F1', 'P6', '1001', '2022-12-05 06:17:36', '2022-12-05 06:17:44', 'AlanCaja', 'JuanKardex'),
('F1', 'P8', '1001', '2022-12-05 06:17:44', NULL, 'JuanKardex', 'AlanCaja');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id` varchar(11) NOT NULL,
  `descipcion` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id`, `descipcion`) VALUES
('1', 'Alumno'),
('2', 'Kardex'),
('3', 'Caja');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rolusuario`
--

CREATE TABLE `rolusuario` (
  `IdRol` varchar(11) DEFAULT NULL,
  `IdUsuario` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rolusuario`
--

INSERT INTO `rolusuario` (`IdRol`, `IdUsuario`) VALUES
('1', '1'),
('2', '4'),
('3', '5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` varchar(11) NOT NULL,
  `descripcion` varchar(20) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `descripcion`, `pass`) VALUES
('1', 'FuryAlumno', '7c4a8d09ca3762af61e59520943dc26494f8941b'),
('4', 'JuanKardex', '7c4a8d09ca3762af61e59520943dc26494f8941b'),
('5', 'AlanCaja', '7c4a8d09ca3762af61e59520943dc26494f8941b');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
