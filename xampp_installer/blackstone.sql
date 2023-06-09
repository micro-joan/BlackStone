-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 08-06-2023 a las 21:52:18
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `blackstone`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `id` int(11) NOT NULL,
  `nombre` text DEFAULT NULL,
  `web` text DEFAULT NULL,
  `dominio_correo` text DEFAULT NULL,
  `logo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`id`, `nombre`, `web`, `dominio_correo`, `logo`) VALUES
(1, 'Example customer', 'https://example.com', NULL, 'logos_clientes/');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informes`
--

CREATE TABLE `informes` (
  `id` int(11) NOT NULL,
  `nombre_doc` varchar(255) DEFAULT NULL,
  `id_empresa_auditada` int(11) DEFAULT NULL,
  `vulnerabilidades` text DEFAULT NULL,
  `estado` text DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `recomendaciones` text DEFAULT NULL,
  `propuestas` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `informes`
--

INSERT INTO `informes` (`id`, `nombre_doc`, `id_empresa_auditada`, `vulnerabilidades`, `estado`, `fecha`, `recomendaciones`, `propuestas`) VALUES
(2, 'Example report', 1, ' 1,2,3,4,', 'En proceso', '2023-06-08', 'Example recommendation 1\r\nExample recommendation 2\r\nExample recommendation 3\r\nExample recommendation 4\r\nExample recommendation 5', 'Example proposal 1\r\nExample proposal 2\r\nExample proposal 3\r\nExample proposal 4\r\nExample proposal 5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `contra` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `contra`) VALUES
(1, 'blackstone', 'blackstone');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vulnerabilidades`
--

CREATE TABLE `vulnerabilidades` (
  `id` int(11) NOT NULL,
  `cve` text DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `solucion` text DEFAULT NULL,
  `nivel` int(11) DEFAULT NULL,
  `esfuerzo` int(11) DEFAULT NULL,
  `seccion_auditoria` int(11) DEFAULT NULL,
  `recomendacion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `vulnerabilidades`
--

INSERT INTO `vulnerabilidades` (`id`, `cve`, `descripcion`, `solucion`, `nivel`, `esfuerzo`, `seccion_auditoria`, `recomendacion`) VALUES
(1, 'Example vuln', 'Example vuln', 'Example vuln', 1, 1, 1, 'Example vuln'),
(2, 'Example vuln', 'Example vuln', 'Example vuln', 2, 1, 1, 'Example vuln'),
(3, 'Example vuln', 'Example vuln', 'Example vuln', 3, 1, 1, 'Example vuln'),
(4, 'Example vuln', 'Example vuln', 'Example vuln', 4, 1, 1, 'Example vuln');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `informes`
--
ALTER TABLE `informes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vulnerabilidades`
--
ALTER TABLE `vulnerabilidades`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

