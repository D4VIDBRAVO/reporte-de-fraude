-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-01-2025 a las 23:21:43
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `reportes_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reportes`
--

CREATE TABLE `reportes` (
  `id_reportado` int(15) NOT NULL,
  `descripcion_reporte` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `id_reporta` int(11) NOT NULL,
  `pais` varchar(40) NOT NULL,
  `canal_reporte` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `reportes`
--

INSERT INTO `reportes` (`id_reportado`, `descripcion_reporte`, `fecha`, `id_reporta`, `pais`, `canal_reporte`, `status`) VALUES
(0, '', '0000-00-00', 0, 'venezuela', '', ''),
(1717171, 'dsalkjdlkjsaljdlasjdljska', '2025-01-24', 2147483647, 'brasil', 'kekeke', 'kljkljwj'),
(1717171, 'dsalkjdlkjsaljdlasjdljska', '2025-01-24', 2147483647, 'brasil', 'kekeke', 'kljkljwj'),
(1717171, 'dsalkjdlkjsaljdlasjdljska', '2025-01-24', 2147483647, 'brasil', 'kekeke', 'kljkljwj'),
(0, '', '0000-00-00', 0, 'venezuela', '', ''),
(0, '', '0000-00-00', 0, 'venezuela', '', ''),
(0, '', '0000-00-00', 0, 'venezuela', '', ''),
(0, '', '0000-00-00', 0, '', '', ''),
(0, '', '0000-00-00', 0, '', '', ''),
(0, '', '0000-00-00', 0, '', '', ''),
(0, '', '0000-00-00', 0, 'venezuela', '', ''),
(0, '', '0000-00-00', 0, '', '', ''),
(0, '', '0000-00-00', 0, '', '', ''),
(1717171, 'kshdsa', '2025-01-01', 2147483647, 'venezuela', 'kekeke', 'kljkljwj'),
(0, '', '0000-00-00', 0, 'venezuela', '', ''),
(765757, 'uiwye8238y8732y78ey327ye8723y78', '2025-01-14', 0, 'colombia', 'kekeke', 'kdhfkwhkfjdkjf'),
(0, '', '0000-00-00', 0, 'venezuela', '', ''),
(1717171, 'sdsda', '2025-01-08', 0, 'venezuela', 'kekeke', 'kljkljwj'),
(1717171, 'wqewq', '2025-01-01', 0, 'venezuela', 'kekeke', 'kljkljwj'),
(1717171, 'khhk', '2025-01-06', 97857, 'colombia', 'kekeke', 'kljkljwj'),
(2147483647, 'ksadksahdkashdkhsadhsah', '1985-11-16', 2147483647, 'chile', 'telegram', 'olvidado'),
(2147483647, 'iyih', '2025-01-07', 2147483647, 'venezuela', 'telegram', 'olvidado'),
(1717171, 'DJSAKJDKLSAJDL', '2025-01-09', 2147483647, 'colombia', 'kekeke', 'LISTO'),
(1717171, 'asdasds', '2025-01-28', 2147483647, 'brasil', 'kekeke', 'kljkljwj'),
(1717171, 'sdsds', '2025-01-08', 2147483647, 'Panama', 'kekeke', 'kljkljwj'),
(1717171, 'dsds', '2024-12-31', 2147483647, 'Puerto_Rico', 'kekeke', 'LISTO'),
(17366577, 'maluco', '2025-01-28', 2147483647, 'Dominicana', 'encuentra24', 'LISTO');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
