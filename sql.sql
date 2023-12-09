-- Active: 1681936226530@@127.0.0.1@3306


CREATE TABLE IF NOT EXISTS `flujo` (
  `flujo` varchar(2) DEFAULT NULL,
  `proceso` varchar(3) DEFAULT NULL,
  `procesosiguiente` varchar(3) DEFAULT NULL,
  `tipo` varchar(1) DEFAULT NULL,
  `rol` varchar(10) DEFAULT NULL,
  `pantalla` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `flujo`
--

INSERT INTO `flujo` (`flujo`, `proceso`, `procesosiguiente`, `tipo`, `rol`, `pantalla`) VALUES
('F1', 'P1', 'P2', 'I', 'estudiante', 'anuncio'),
('F1', 'P2', 'P3', 'P', 'estudiante', 'listado'),
('F1', 'P3', NULL, 'C', 'kardex', 'verifica'),
('F1', 'P4', 'P6', 'P', 'estudiante', 'correcto'),
('F1', 'P5', 'P7', 'P', 'estudiante', 'devolver'),
('F2', 'P1', 'P2', 'I', 'kardex', 'anunciok'),
('F3', 'P1', 'P2', 'I', 'estudiante', 'anuncioe');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `flujopregunta`
--

CREATE TABLE IF NOT EXISTS `flujopregunta` (
  `flujo` varchar(2) DEFAULT NULL,
  `proceso` varchar(3) DEFAULT NULL,
  `si` varchar(3) DEFAULT NULL,
  `no` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `flujopregunta`
--

INSERT INTO `flujopregunta` (`flujo`, `proceso`, `si`, `no`) VALUES
('F1', 'P3', 'P4', 'P5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguimiento`
--

CREATE TABLE IF NOT EXISTS `seguimiento` (
  `secuencia` int(11) DEFAULT NULL,
  `usuario` varchar(10) DEFAULT NULL,
  `fechahorainicio` datetime DEFAULT NULL,
  `fechahorafin` datetime DEFAULT NULL,
  `flujo` varchar(2) DEFAULT NULL,
  `proceso` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `seguimiento`
--

INSERT INTO `seguimiento` (`secuencia`, `usuario`, `fechahorainicio`, `fechahorafin`, `flujo`, `proceso`) VALUES
(1, '11', '2023-11-07 15:00:00', '2023-11-07 15:01:00', 'F1', 'P1'),
(1, '11', '2023-11-07 15:01:00', NULL, 'F1', 'P2'),
(2, '12', '2023-11-04 15:01:00', NULL, 'F2', 'P1'),
(3, '11', '2023-11-01 12:01:00', NULL, 'F3', 'P1'),
(14, '13', '2023-11-07 15:00:00', '2023-11-07 15:01:00', 'F1', 'P1'),
(14, '13', '2023-11-07 15:02:00', NULL, 'F1', 'P2');

CREATE DATABASE workflow
    DEFAULT CHARACTER SET = 'utf8mb4';
use academico;
CREATE TABLE IF NOT EXISTS `alumno` (
  `ci` varchar(20) DEFAULT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `departamento` varchar(2) DEFAULT NULL,
  `nota1` float DEFAULT NULL,
  `nota2` float DEFAULT NULL,
  `nota3` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`ci`, `nombre`, `departamento`, `nota1`, `nota2`, `nota3`) VALUES
('11', 'moi2', '02', 10, 20, 30),
('12', 'maria', '01', 11, 25, 20),
('13', 'juan', '03', 13, 25, 30),
('14', 'julio', '02', 15, 25, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `ci` varchar(10) DEFAULT NULL,
  `clave` varchar(10) DEFAULT NULL,
  `rol` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ci`, `clave`, `rol`) VALUES
('11', '123456', 'estudiante'),
('12', '123456', 'kardex'),
('13', '123456', 'estudiante');