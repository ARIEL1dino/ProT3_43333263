-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-07-2025 a las 16:29:42
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `garcia_ariel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--

CREATE TABLE `perfiles` (
  `id_tabla_perfil` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `perfiles`
--

INSERT INTO `perfiles` (`id_tabla_perfil`, `descripcion`) VALUES
(1, 'admin'),
(2, 'cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `contraseña` varchar(100) NOT NULL,
  `id_perfil` varchar(11) NOT NULL DEFAULT '2',
  `baja` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `correo`, `usuario`, `contraseña`, `id_perfil`, `baja`) VALUES
(1, 'Ariel', 'Garcia', 'ariele@gmail.com', 'ariel', '$2y$10$soITw..QGl.a9XGXun2qXOXtD6WHQyqAIqDEvx4//3SpVzGSfOBb6', '1', ''),
(2, 'Dino', 'Jurassik', 'dinoj@sd.com', 'Grr', '$2y$10$D9nI0Ta3Y5XNUH0b.jIi8.wwr23GAYm3vIOSTgWLoI9KK9jbQu.Ci', '2', ''),
(3, 'Ernesto', 'Glonb', 'erne@sd.com', 'Sto', '$2y$10$wosaz0opZ7PlQa.lWJFl0u/KVtkuHqQPChodEJS6gWPMNYeWRM23y', '2', ''),
(4, 'Any', 'Mountau', 'moun@jan.com', 'Any', '$2y$10$LnYNaLcO8y6sTLTi6IrBBeX/6Bo/XAOMS0rY46DxKOj1R67ZjpD46', '2', ''),
(5, 'Ernesto', 'Glonb', 'easdsarne@sd.com', 'Sto', '$2y$10$jpT1VqxEVZb1YUKBCHgHhugsHvRm24DcJvW1z124qdSVbPxoE.nT.', '2', ''),
(6, 'Marta', 'Schan', 'schan@mar.com', 'Marti', '$2y$10$lwFaNLnH18KeefOPsFMnyOl3xdLmWDQdzVJ41aYMJOT0BovQZmSMS', '2', ''),
(7, 'Emir Ariel', 'Garcia', 'arielemir94@gmail.com', 'Emirr', '$2y$10$EHm/GFlKfIlDmV0A2sST0uQ9PJ5Jhe/x9QQDjXVoRhyyub.a2ndum', '2', ''),
(8, 'Marcos', 'Garcia', 'marcos94@gmail.com', 'Mar', '$2y$10$tu2ehhHGnCjUlei5LJY/NeAZGnocE7mbV9zSgIVJVFq37BdQd7oKO', '2', ''),
(9, 'Martin', 'Gallao', 'marti@gmail.com', 'Mitin', '$2y$10$ymwG3ClybpVf8P7Djms1/.isHcGLZDtvuaC2sw9jg7LF/.g4oF8UC', '2', ''),
(10, 'Mica', 'Perez', 'mica@g.com', 'mica', '$2y$10$.e.Frpmzy2qTMdjVxlNXhunyQVoTR8vbP42knG5YZFEpA3MYOgIui', '2', ''),
(11, 'Juan', 'Lopez', 'juan@g.com', 'juancho', '$2y$10$nPlk4V1qfEqd79cjq.KsJuTdE1p7Pxrc1nvYuedif5p9O6n3gBNXS', '2', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  ADD PRIMARY KEY (`id_tabla_perfil`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  MODIFY `id_tabla_perfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
