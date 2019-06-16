-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-06-2019 a las 00:21:15
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
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adopcion`
--

CREATE TABLE `adopcion` (
  `id` int(11) NOT NULL,
  `id_mascota` int(11) NOT NULL,
  `nombres` varchar(200) NOT NULL,
  `dni` varchar(200) NOT NULL,
  `direccion` varchar(300) NOT NULL,
  `distrito` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `adopcion`
--

INSERT INTO `adopcion` (`id`, `id_mascota`, `nombres`, `dni`, `direccion`, `distrito`) VALUES
(1, 0, 'Jose Fabrizio Manco Cornejo', '73110253', 'Av.Separadora Industrial 3074', 'LM');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascotas`
--

CREATE TABLE `mascotas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `especie` varchar(100) NOT NULL,
  `raza` varchar(300) NOT NULL,
  `edad` varchar(200) NOT NULL,
  `imagen` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mascotas`
--

INSERT INTO `mascotas` (`id`, `nombre`, `sexo`, `especie`, `raza`, `edad`, `imagen`) VALUES
(5, 'Luchito', 'Hembra', 'PE', 'Mestiza', '3 años', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombres` varchar(200) NOT NULL,
  `fecha_n` date NOT NULL,
  `dni` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `contraseña` varchar(300) NOT NULL,
  `contacto` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombres`, `fecha_n`, `dni`, `email`, `contraseña`, `contacto`) VALUES
(5, 'Jose', '1993-02-01', '7894561', 'pepe.hernandez@usil.pe', '$2y$10$qbA8C5g2OQdcl92WFKOX0.uq6MJLO0kR/B5LYxCxfEjJ.BKkge3M.', '99685765'),
(6, 'admin', '1999-02-01', '11234564', 'admin@admin.pe', '$2y$10$539unqPyCTo.AmlZ4Afqv.ci8si1Ok1wCMLYg2W5lUdHGh8EHQgXu', '8898849849'),
(7, 'Sara Claro', '2000-07-15', '78994512', 'sara.claro@usil.pe', '$2y$10$amjASkA3/ddiMMYPyFgVCOhbc7a6ZPSG1MhRuszqNTe0SC.76lhoG', '995465165');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `adopcion`
--
ALTER TABLE `adopcion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mascotas`
--
ALTER TABLE `mascotas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `adopcion`
--
ALTER TABLE `adopcion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `mascotas`
--
ALTER TABLE `mascotas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
