-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-05-2026 a las 16:02:06
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
-- Base de datos: `yournextpet`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `donacion`
--

CREATE TABLE `donacion` (
  `id_donacion` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_mascota` int(11) NOT NULL,
  `id_metodo` int(11) NOT NULL,
  `monto` decimal(10,0) NOT NULL,
  `fecha_don` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especie`
--

CREATE TABLE `especie` (
  `id_especie` int(11) NOT NULL,
  `nombre_esp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `especie`
--

INSERT INTO `especie` (`id_especie`, `nombre_esp`) VALUES
(1, 'Perro'),
(2, 'Gato');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascota`
--

CREATE TABLE `mascota` (
  `id_mascota` int(11) NOT NULL,
  `nombre_mas` varchar(50) NOT NULL,
  `edad` int(11) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `raza` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `id_especie` int(11) NOT NULL,
  `id_rescatista` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `mascota`
--

INSERT INTO `mascota` (`id_mascota`, `nombre_mas`, `edad`, `sexo`, `raza`, `descripcion`, `id_especie`, `id_rescatista`) VALUES
(1, 'Luna', 2, 'F', 'Labrador', 'Luna fue rescatada de la calle y ama jugar.', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metodo_pago`
--

CREATE TABLE `metodo_pago` (
  `id_metodo` int(11) NOT NULL,
  `nombre_met` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postulacion`
--

CREATE TABLE `postulacion` (
  `id_postulacion` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_mascota` int(11) NOT NULL,
  `nombre_pos` varchar(50) NOT NULL,
  `correo_pos` varchar(50) NOT NULL,
  `estado` varchar(15) NOT NULL,
  `telefono_pos` varchar(9) NOT NULL,
  `direccion_pos` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rescatista`
--

CREATE TABLE `rescatista` (
  `id_rescatista` int(11) NOT NULL,
  `nombre_res` varchar(50) NOT NULL,
  `organizacion` varchar(50) NOT NULL,
  `telefono_res` varchar(9) NOT NULL,
  `direccion_res` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `rescatista`
--

INSERT INTO `rescatista` (`id_rescatista`, `nombre_res`, `organizacion`, `telefono_res`, `direccion_res`) VALUES
(1, 'Juan', 'AdoptaPet', '999888777', 'Canto Grande');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguimiento_adopcion`
--

CREATE TABLE `seguimiento_adopcion` (
  `id_seguimiento` int(11) NOT NULL,
  `id_postulacion` int(11) NOT NULL,
  `fecha_seg` date NOT NULL,
  `observacion_seg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `clave` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `correo`, `clave`) VALUES
(1, 'Luis Fernando Medina Moreno', 'LuFer@gmail.com', 'luis123'),
(2, 'Saimon Raphael Caballero Castillo', 'SaRa@gmail.com', 'saimon123'),
(3, 'Junior Paul Rodriguez Quispe', 'JuPa@gmail.com', 'junior123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `donacion`
--
ALTER TABLE `donacion`
  ADD PRIMARY KEY (`id_donacion`),
  ADD KEY `usuarios_id_usuario_donacion` (`id_usuario`),
  ADD KEY `mascota_id_mascota_donacion` (`id_mascota`),
  ADD KEY `metodo_pago_id_metodo_donacion` (`id_metodo`);

--
-- Indices de la tabla `especie`
--
ALTER TABLE `especie`
  ADD PRIMARY KEY (`id_especie`);

--
-- Indices de la tabla `mascota`
--
ALTER TABLE `mascota`
  ADD PRIMARY KEY (`id_mascota`),
  ADD KEY `rescatista_id_rescatista_mascota` (`id_rescatista`),
  ADD KEY `especie_id_especie_mascota` (`id_especie`);

--
-- Indices de la tabla `metodo_pago`
--
ALTER TABLE `metodo_pago`
  ADD PRIMARY KEY (`id_metodo`);

--
-- Indices de la tabla `postulacion`
--
ALTER TABLE `postulacion`
  ADD PRIMARY KEY (`id_postulacion`),
  ADD KEY `usuarios_id_usuario_postulacion` (`id_usuario`),
  ADD KEY `mascota_id_mascota_postulacion` (`id_mascota`);

--
-- Indices de la tabla `rescatista`
--
ALTER TABLE `rescatista`
  ADD PRIMARY KEY (`id_rescatista`);

--
-- Indices de la tabla `seguimiento_adopcion`
--
ALTER TABLE `seguimiento_adopcion`
  ADD PRIMARY KEY (`id_seguimiento`),
  ADD KEY `postulacion_id_postulacion_seguimiento_adopcion` (`id_postulacion`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `donacion`
--
ALTER TABLE `donacion`
  MODIFY `id_donacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `especie`
--
ALTER TABLE `especie`
  MODIFY `id_especie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `mascota`
--
ALTER TABLE `mascota`
  MODIFY `id_mascota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `metodo_pago`
--
ALTER TABLE `metodo_pago`
  MODIFY `id_metodo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `postulacion`
--
ALTER TABLE `postulacion`
  MODIFY `id_postulacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `rescatista`
--
ALTER TABLE `rescatista`
  MODIFY `id_rescatista` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `seguimiento_adopcion`
--
ALTER TABLE `seguimiento_adopcion`
  MODIFY `id_seguimiento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `donacion`
--
ALTER TABLE `donacion`
  ADD CONSTRAINT `mascota_id_mascota_donacion` FOREIGN KEY (`id_mascota`) REFERENCES `mascota` (`id_mascota`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `metodo_pago_id_metodo_donacion` FOREIGN KEY (`id_metodo`) REFERENCES `metodo_pago` (`id_metodo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `usuarios_id_usuario_donacion` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `mascota`
--
ALTER TABLE `mascota`
  ADD CONSTRAINT `especie_id_especie_mascota` FOREIGN KEY (`id_especie`) REFERENCES `especie` (`id_especie`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `rescatista_id_rescatista_mascota` FOREIGN KEY (`id_rescatista`) REFERENCES `rescatista` (`id_rescatista`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `postulacion`
--
ALTER TABLE `postulacion`
  ADD CONSTRAINT `mascota_id_mascota_postulacion` FOREIGN KEY (`id_mascota`) REFERENCES `mascota` (`id_mascota`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `usuarios_id_usuario_postulacion` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `seguimiento_adopcion`
--
ALTER TABLE `seguimiento_adopcion`
  ADD CONSTRAINT `postulacion_id_postulacion_seguimiento_adopcion` FOREIGN KEY (`id_postulacion`) REFERENCES `postulacion` (`id_postulacion`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
