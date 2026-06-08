-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-06-2026 a las 18:59:06
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

--
-- Volcado de datos para la tabla `donacion`
--

INSERT INTO `donacion` (`id_donacion`, `id_usuario`, `id_mascota`, `id_metodo`, `monto`, `fecha_don`) VALUES
(1, 1, 2, 2, 100, '2026-05-30'),
(2, 1, 1, 1, 500, '2026-05-30'),
(3, 1, 5, 3, 10, '2026-05-30'),
(4, 1, 10, 3, 500, '2026-05-31');

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
  `id_rescatista` int(11) NOT NULL,
  `imagen` varchar(100) DEFAULT NULL,
  `personalidad` varchar(255) DEFAULT NULL,
  `estado` enum('ESPERANDO','ADOPTADO') DEFAULT 'ESPERANDO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `mascota`
--

INSERT INTO `mascota` (`id_mascota`, `nombre_mas`, `edad`, `sexo`, `raza`, `descripcion`, `id_especie`, `id_rescatista`, `imagen`, `personalidad`, `estado`) VALUES
(1, 'Luna', 2, 'F', 'Labrador', 'Luna fue rescatada de la calle y ama jugar.', 1, 3, 'luna.png', 'jugueton,energetico,activo,cariñoso,sociable,inteligente', 'ESPERANDO'),
(2, 'Bruno', 2, 'M', 'Border Collie', 'Muy activo e inteligente.', 1, 2, 'bruno.png', 'leal,inteligente,protector,sociable,activo,adaptable\nleal,inteligente,protector,sociable,activo,adaptable\n', 'ESPERANDO'),
(4, 'Toby', 3, 'M', 'Mestizo', 'Muy juguetón y amigable.', 1, 4, 'toby.png', 'calmado,independiente,relajado,tranquilo,curioso,sociable', 'ESPERANDO'),
(5, 'Kira', 3, 'F', 'Husky', 'Muy energética y le encanta correr.', 1, 3, 'kira.png', 'calmado,independiente,relajado,sociable', 'ESPERANDO'),
(6, 'Daisy', 2, 'F', 'Beagle', 'Le encanta jugar y salir a pasear.', 1, 2, 'daisy.png', 'jugueton,energetico,activo,cariñoso,sociable,inteligente', 'ESPERANDO'),
(7, 'Nina', 1, 'F', 'Gato Siamés', 'Muy juguetona y sociable.', 2, 3, 'nina.png', 'leal,inteligente,protector,sociable,activo,adaptable', 'ESPERANDO'),
(8, 'Oliver', 1, 'M', 'Gato Europeo', 'Muy curioso y le encanta explorar.', 2, 4, 'oliver.png', 'jugueton,activo,cariñosoleal,inteligente,protector,sociable,activo,adaptable', 'ADOPTADO'),
(9, 'Zeus', 5, 'M', 'Doberman', 'Muy atento y protector.', 1, 4, 'zeus.png', 'protector,activo,lealleal,inteligente,protector,sociable,activo,adaptable', 'ESPERANDO'),
(10, 'Kiara', 2, 'F', 'Gato Bengala', 'Muy activa y juguetona durante todo el día.', 2, 2, 'kiara.png', 'jugueton,activo,sociableleal,inteligente,protector,sociable,activo,adaptable', 'ESPERANDO'),
(11, 'Fiona', 2, 'F', 'Gato Mestizo', 'Muy juguetona y llena de energía.', 2, 3, 'fiona.png', 'curioso,activo,juguetonleal,inteligente,protector,sociable,activo,adaptable', 'ESPERANDO'),
(12, 'Max', 4, 'M', 'Pastor Aleman', 'Protector e inteligente.', 1, 4, 'max.png', 'leal,inteligente,protector,sociable,activo,adaptable', 'ESPERANDO'),
(13, 'Thor', 4, 'M', 'Rottweiler', 'Protector y muy leal.', 1, 2, 'thor.png', 'protector,leal,inteligente,leal,inteligente,protector,sociable,activo,adaptable', 'ESPERANDO'),
(14, 'Nala', 2, 'F', 'Gato Siamés', 'Tranquila y muy sociable.', 2, 3, 'nala.png', 'calmado,independiente,relajado,tranquilo,curioso,sociable', 'ESPERANDO'),
(15, 'Milo', 3, 'M', 'Gato Europeo', 'Curioso y muy independiente.', 2, 4, 'milo.png', 'calmado,independiente,relajado,tranquilo,curioso,sociable', 'ESPERANDO'),
(16, 'Bella', 3, 'F', 'Golden Retriever', 'Muy amigable y paciente.', 1, 2, 'bella.png', 'jugueton,energetico,activo,cariñoso,sociable,inteligente', 'ESPERANDO'),
(17, 'Rocky', 5, 'M', 'Bulldog', 'Tranquilo, seria tu mejor amigo.', 1, 3, 'rocky.png', 'calmado,independiente,relajado,tranquilo,curioso,sociable', 'ESPERANDO'),
(18, 'Simba', 1, 'M', 'Gato Europeo', 'Muy tranquilo y curioso.', 2, 4, 'simba.png', 'calmado,independiente,relajado,tranquilo,curioso,sociable', 'ESPERANDO'),
(19, 'Leo', 4, 'M', 'Gato Persa', 'Relajado y cariñoso.', 2, 3, 'leo.png', 'calmado,independiente,relajado,tranquilo,curioso,sociable', 'ESPERANDO'),
(20, 'Lola', 2, 'F', 'Gato Mestizo', 'Muy dulce y tranquila.', 2, 3, 'lola.png', 'calmado,independiente,relajado,tranquilo,curioso,sociable', 'ESPERANDO'),
(21, 'Mia', 2, 'F', 'Gato Persa', 'Muy tranquila y le encanta dormir cerca de las personas.', 2, 4, 'mia.png', 'calmado,independiente,relajado,tranquilo,curioso,sociable', 'ESPERANDO'),
(22, 'Canela', 3, 'F', 'Gato Mestizo', 'Muy tierna y perfecta para hogares tranquilos.', 2, 2, 'canela.png', 'calmado,independiente,relajado,tranquilo,curioso,sociable', 'ESPERANDO'),
(23, 'Tom', 4, 'M', 'Gato Siamés', 'Muy independiente pero cariñoso cuando entra en confianza.', 2, 3, 'tom.png', 'calmado,independiente,relajado,tranquilo,curioso,sociable', 'ESPERANDO'),
(24, 'Princesa', 5, 'F', 'Gato Persa', 'Le encanta descansar y recibir mimos.', 2, 2, 'princesa.png', 'calmado,independiente,relajado,tranquilo,curioso,sociable', 'ESPERANDO'),
(25, 'Lucas', 3, 'M', 'Gato Europeo', 'Muy tranquilo y fácil de adaptar.', 2, 4, 'lucas.png', 'calmado,independiente,relajado,tranquilo,curioso,sociable', 'ESPERANDO'),
(27, 'Luis', 3, 'M', 'Poodle', 'Amigable y le gusta dormir', 1, 3, '27.png', 'jugueton,energetico,activo,cariñoso,sociable,inteligente', 'ADOPTADO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metodo_pago`
--

CREATE TABLE `metodo_pago` (
  `id_metodo` int(11) NOT NULL,
  `nombre_met` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `metodo_pago`
--

INSERT INTO `metodo_pago` (`id_metodo`, `nombre_met`) VALUES
(1, 'tarjeta'),
(2, 'yape'),
(3, 'plin');

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
  `direccion_pos` varchar(100) NOT NULL,
  `fecha_post` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `postulacion`
--

INSERT INTO `postulacion` (`id_postulacion`, `id_usuario`, `id_mascota`, `nombre_pos`, `correo_pos`, `estado`, `telefono_pos`, `direccion_pos`, `fecha_post`) VALUES
(12, 1, 8, 'Luis Fernando Medina Moreno', 'LuFer@gmail.com', 'APROBADA', '999555999', 'Mariscal Caseres Mz j6 L18', '2026-05-31 23:52:06'),
(13, 4, 27, 'Misael Isidro', 'miro@gmail.com', 'APROBADA', '987654321', 'mz j25 l3 SJL', '2026-06-08 11:53:06');

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
(2, 'Rosa', 'PetKausas', '994307326', 'Av. Unión Jicamarca, Cercado de Lima 15446'),
(3, 'Lizbet', 'PorAmorYParaAmar', '901579834', 'Av. 28 de Julio, Lima 15018'),
(4, 'Ximena', 'VidaDigna', '902169132', 'Quinta Av., Lima 15457');

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

--
-- Volcado de datos para la tabla `seguimiento_adopcion`
--

INSERT INTO `seguimiento_adopcion` (`id_seguimiento`, `id_postulacion`, `fecha_seg`, `observacion_seg`) VALUES
(7, 12, '2026-06-07', '    Ahora es Muy Feliz en su nuevo hogar');

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
(3, 'Junior Paul Rodriguez Quispe', 'JuPa@gmail.com', 'junior123'),
(4, 'Misael Isidro Rodriguez', 'MiRo@gmail.com', 'misael123');

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
  MODIFY `id_donacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `especie`
--
ALTER TABLE `especie`
  MODIFY `id_especie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `mascota`
--
ALTER TABLE `mascota`
  MODIFY `id_mascota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `metodo_pago`
--
ALTER TABLE `metodo_pago`
  MODIFY `id_metodo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `postulacion`
--
ALTER TABLE `postulacion`
  MODIFY `id_postulacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `rescatista`
--
ALTER TABLE `rescatista`
  MODIFY `id_rescatista` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `seguimiento_adopcion`
--
ALTER TABLE `seguimiento_adopcion`
  MODIFY `id_seguimiento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
