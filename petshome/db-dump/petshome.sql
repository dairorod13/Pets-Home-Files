-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-10-2019 a las 23:10:26
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `petshome`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `about_animal`
--

CREATE TABLE `about_animal` (
  `id_informacion` int(11) NOT NULL,
  `fecha` varchar(30) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `especie` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `raza` varchar(30) NOT NULL,
  `edad` int(11) NOT NULL,
  `sexo_id` int(11) NOT NULL,
  `imagen` varchar(500) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `about_animal`
--

INSERT INTO `about_animal` (`id_informacion`, `fecha`, `titulo`, `descripcion`, `especie`, `nombre`, `raza`, `edad`, `sexo_id`, `imagen`, `user_id`) VALUES
(4, '2019-10-25', 'Adopta un amigo', 'Area de Bogotá', 1, 'Chester', 'Schnauzer', 15, 1, 'assets/imagen/chester.jpg', 22),
(6, 'Oct 24, 2019', 'Hamster ', 'Jugeton y fiel', 7, 'Rockie', '', 12, 2, 'assets/imagen/hamster.jpg', 22),
(7, 'Oct 24, 2019', 'Nemo', 'pez, la mejor compañia', 5, 'Nemo', 'Pez australiano', 5, 3, 'assets/imagen/pez.jpg', 22),
(8, 'Oct 23, 2019', 'Un felino', 'Jugueton y gloton', 2, 'Ambar', 'Islandes', 3, 1, 'assets/imagen/gato.jpg', 23),
(9, 'Oct 15, 2019', 'La mejor compañia en la ciudad', 'conejo siberiano', 3, 'Bunny', '', 1, 1, 'assets/imagen/conejo.jpg', 23);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos`
--

CREATE TABLE `documentos` (
  `id_documento` int(11) NOT NULL,
  `nombre_documento` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `documentos`
--

INSERT INTO `documentos` (`id_documento`, `nombre_documento`) VALUES
(1, 'Cedula de ciudadania'),
(2, 'Cedula extrajera'),
(3, 'Tarjeta de identidad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especies`
--

CREATE TABLE `especies` (
  `id_especie` int(11) NOT NULL,
  `nombre_especie` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `especies`
--

INSERT INTO `especies` (`id_especie`, `nombre_especie`) VALUES
(1, 'Perro'),
(2, 'Gato'),
(3, 'Conejo'),
(4, 'Pajaro'),
(5, 'Pescado'),
(6, 'Tortuga'),
(7, 'Hamster');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `id_estado` int(11) NOT NULL,
  `nombre_estado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`id_estado`, `nombre_estado`) VALUES
(1, 'Activo'),
(2, 'Inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_rol` int(11) NOT NULL,
  `nombre_rol` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `nombre_rol`) VALUES
(1, 'Administrador'),
(2, 'Usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sexos`
--

CREATE TABLE `sexos` (
  `id_sexo` int(11) NOT NULL,
  `nombre_sexo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sexos`
--

INSERT INTO `sexos` (`id_sexo`, `nombre_sexo`) VALUES
(1, 'Macho'),
(2, 'Hembra'),
(3, 'Indefinido');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_user` int(11) NOT NULL,
  `nombre_user` varchar(50) NOT NULL,
  `apellido_user` varchar(50) NOT NULL,
  `fecha_user` varchar(20) NOT NULL,
  `documento_id` int(11) NOT NULL,
  `numero_doc` bigint(11) NOT NULL,
  `direccion_ciudad` varchar(50) NOT NULL,
  `telefono_user` bigint(20) NOT NULL,
  `correo_user` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `rol_id` int(11) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_user`, `nombre_user`, `apellido_user`, `fecha_user`, `documento_id`, `numero_doc`, `direccion_ciudad`, `telefono_user`, `correo_user`, `password`, `rol_id`, `estado`) VALUES
(20, 'Carlos', 'King', '2019-10-10', 1, 1020212051, 'Suba la colina', 2147483647, 'sthepen@gmail.com', '$2y$10$JEPcznZkF0zbCbRxCHKHO.grQkb01zF/PdZrBR2hXSWkieDcJhmkq', 1, 1),
(21, 'Camila', 'Ordoñez', '0000-00-00', 2, 15420, 'Miami, Bogota', 312152125, 'camila@gmail.com', '$2y$10$pDMDpuQ0pmZrR4ztDhV/p.TWU6hpmbc6z1pM5hJgea9ACgw3qyGmK', 2, 2),
(22, 'Dairon', 'Ferney', '0000-00-00', 3, 132522123, 'usaquen', 12345, 'usuario@gmail.com', '$2y$10$RDy2QvezB.t1aTze/xZVGOhPp/qLuvvVxX2Dkff47bTEqU5LsvDJG', 2, 1),
(23, 'Usuario', 'Nuevo', 'Oct 22, 2019', 1, 7733, 'USA', 7521320, 'bayron_1@gmail.com', '$2y$10$4UY04IdfAnmOXaU2tAFnUOt9K4qQD01KFEZDOla1hQ/JaOrgzu.u2', 2, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `about_animal`
--
ALTER TABLE `about_animal`
  ADD PRIMARY KEY (`id_informacion`),
  ADD KEY `especie` (`especie`),
  ADD KEY `sexo_id` (`sexo_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indices de la tabla `documentos`
--
ALTER TABLE `documentos`
  ADD PRIMARY KEY (`id_documento`);

--
-- Indices de la tabla `especies`
--
ALTER TABLE `especies`
  ADD PRIMARY KEY (`id_especie`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `sexos`
--
ALTER TABLE `sexos`
  ADD PRIMARY KEY (`id_sexo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `documento_id` (`documento_id`),
  ADD KEY `rol_id` (`rol_id`),
  ADD KEY `estado` (`estado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `about_animal`
--
ALTER TABLE `about_animal`
  MODIFY `id_informacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `documentos`
--
ALTER TABLE `documentos`
  MODIFY `id_documento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `especies`
--
ALTER TABLE `especies`
  MODIFY `id_especie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `sexos`
--
ALTER TABLE `sexos`
  MODIFY `id_sexo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `about_animal`
--
ALTER TABLE `about_animal`
  ADD CONSTRAINT `about_animal_ibfk_1` FOREIGN KEY (`especie`) REFERENCES `especies` (`id_especie`),
  ADD CONSTRAINT `about_animal_ibfk_2` FOREIGN KEY (`sexo_id`) REFERENCES `sexos` (`id_sexo`),
  ADD CONSTRAINT `about_animal_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `usuarios` (`id_user`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`documento_id`) REFERENCES `documentos` (`id_documento`),
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id_rol`),
  ADD CONSTRAINT `usuarios_ibfk_3` FOREIGN KEY (`estado`) REFERENCES `estados` (`id_estado`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
