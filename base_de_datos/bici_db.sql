-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-12-2019 a las 11:08:52
-- Versión del servidor: 10.3.15-MariaDB
-- Versión de PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bici_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caracteristica_prod`
--

CREATE TABLE `caracteristica_prod` (
  `id_producto` int(11) NOT NULL,
  `categoria_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `nombre` varchar(100) NOT NULL,
  `precio_compra` int(50) NOT NULL,
  `precio_venta` int(50) NOT NULL,
  `stock` int(50) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `id` int(50) NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='imagen';

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`nombre`, `precio_compra`, `precio_venta`, `stock`, `descripcion`, `id`, `imagen`, `updated_at`, `created_at`) VALUES
('Mountain Negra', 6000, 9999, 7, 'Bicicleta eléctrica montañera color negro, de 2 velocidades y 45 minutos de autonomía', 1, '', '2019-12-15 09:48:50', '2019-12-15 09:49:13'),
('Mountain negra', 5000, 5000, 5, 'Bicicleta montañera de aluminio reforzado, con 70 minutos de autonomía', 2, '', '2019-12-15 12:56:42', '2019-12-15 09:49:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8_bin NOT NULL,
  `lastname` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `avatar` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `password` varchar(100) COLLATE utf8_bin NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `email`, `avatar`, `password`, `updated_at`, `created_at`) VALUES
(1, 'juan', 'fratta', 'juan@gmail.com', '', '$2y$10$7ssFwr0sHIQRpk8lr1KzBOMJlzhDshb2PpYsXF9rratSMXHl9Nl8q', '2019-12-15 05:31:00', '2019-12-15 05:38:03'),
(3, 'Jose', 'Abdallah', 'jose.abdallah@gmail.com', '', '$2y$10$t7xzYm\\/qTYRrEtOI09wxxueocYT0QVAssVgntdYIflCGosogo2why', '2019-12-15 05:31:00', '2019-12-15 05:38:03'),
(4, 'Juan', 'fratta', 'juan@gmail.com', '', '$2y$10$7ssFwr0sHIQRpk8lr1KzBOMJlzhDshb2PpYsXF9rratSMXHl9Nl8q', '2019-12-15 05:31:00', '2019-12-15 05:38:03'),
(5, 'optimus', 'prime', 'optimus@prime.com', '', '$2y$10$v4ipf.o6Pxf7fnrdLpKqIOLGd9pK4Z3mxxMe4qr9jNCemqlgBrwKC', '2019-12-15 05:31:00', '2019-12-15 05:38:03'),
(6, 'Christian', 'Campranteda', 'campranteda@gmail.com', '', '2y$10$RI1WkQ.aU6ueRft2qcSSCeF5\\/2Olt7wwHKercmOS3ShFCpECWtO92', '2019-12-15 05:54:13', '2019-12-15 05:54:13'),
(7, 'joseprueba1', NULL, 'joseprueba1@gmail.com', NULL, '$2y$10$OME62bpR4MKHFN2.Hvt8cux8wwtpjjsp8.vZ3mlDsQh9uG7sVV2Gm', '2019-12-15 09:02:50', '2019-12-15 09:02:50');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
