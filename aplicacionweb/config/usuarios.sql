-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 14-05-2020 a las 00:09:04
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `grupo51`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(100) NOT NULL,
  `estatus` int(11) NOT NULL DEFAULT 1,
  `fechaRegistro` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `email`, `username`, `password`, `estatus`, `fechaRegistro`) VALUES
(1, 'Antonio', 'aruiz@gmail.com', 'antonio', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1, '2020-05-11'),
(2, 'Alexis', 'toxqui2403@gmail.com', 'Toxqui', '1fde37f12705e741069be81e1cc24ccc42e6d4cb', 1, '2020-05-11'),
(3, 'Iris', 'irisbecr@gmail.com', 'Iris', 'ed9ece70435bff98aa02579344264190d627a121', 1, '2020-05-11'),
(4, 'Wichito', 'wichito@gmail.com', 'Wichito', '0a21bb43c4175dccf59329fdb73d5a36b53908b0', 1, '2020-05-12'),
(5, 'bety', 'bety@gmail.com', 'bety', 'c01cebb0e8c0239b3c09f0f47193db7e8c3bec4f', 1, '2020-05-12');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
