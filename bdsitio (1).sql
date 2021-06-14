-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-06-2021 a las 20:48:21
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdsitio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compraventa`
--

CREATE TABLE `compraventa` (
  `idcompraventa` int(11) NOT NULL,
  `fechaCompraVenta` datetime NOT NULL,
  `tipoPago` tinyint(1) NOT NULL,
  `tipoOperacion` tinyint(1) NOT NULL,
  `estadoCompraVenta` bit(1) NOT NULL,
  `usuarioCreacion` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `fechaCreacion` datetime NOT NULL,
  `usuarioModificados` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fechaModificacion` datetime DEFAULT NULL,
  `conceptoCompraVenta` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `identificacionTercero` varchar(25) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `codigosProducto` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `nombreProducto` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `descripcionProducto` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `unidadMedida` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `marcaProducto` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `productoActual` float NOT NULL,
  `cantidadActual` int(11) NOT NULL,
  `usuarioCreacion` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `FechaCreacion` datetime NOT NULL,
  `UsuarioModificacion` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fechaModificacion` datetime DEFAULT NULL,
  `estadoProducto` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`codigosProducto`, `nombreProducto`, `descripcionProducto`, `unidadMedida`, `marcaProducto`, `productoActual`, `cantidadActual`, `usuarioCreacion`, `FechaCreacion`, `UsuarioModificacion`, `fechaModificacion`, `estadoProducto`) VALUES
('123', 'hj', 'fgfdg', '2', 'cf', 1, 1, 'system', '2021-06-04 22:17:54', NULL, NULL, b'1'),
('2433', 'gfhgfh', 'ghgfhg', '3', 'gfdg', 0, 0, 'system', '2021-06-04 22:20:31', NULL, NULL, b'1'),
('545545', 'hj', '32ewrrgf', '2', 'cf', 1, 0, 'system', '2021-06-07 19:29:17', NULL, NULL, b'1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productosporcompraventa`
--

CREATE TABLE `productosporcompraventa` (
  `idProductosPorCompraVenta` bigint(11) NOT NULL,
  `codigoProducto` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `idCompraVenta` int(11) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `estadoProductosPorCompraVenta` bit(1) DEFAULT NULL,
  `usuarioCreacion` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `fechaCreacion` datetime NOT NULL,
  `usuarioModificacion` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fechaModificacion` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `terceros`
--

CREATE TABLE `terceros` (
  `identificacionTercero` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `nombreTercero` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `emailTercero` varchar(70) COLLATE utf8_spanish_ci DEFAULT NULL,
  `celularTercero` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefonTercero` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `direccionTercero` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estadoTercero` bit(1) NOT NULL,
  `fechaCreacion` datetime NOT NULL,
  `usuarioCreacion` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `fechaModificacion` datetime DEFAULT NULL,
  `usuarioModificacion` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcionTercero` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `esCliente` bit(1) NOT NULL,
  `esproveedor` bit(1) NOT NULL,
  `contactoTercero` varchar(105) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `terceros`
--

INSERT INTO `terceros` (`identificacionTercero`, `nombreTercero`, `emailTercero`, `celularTercero`, `telefonTercero`, `direccionTercero`, `estadoTercero`, `fechaCreacion`, `usuarioCreacion`, `fechaModificacion`, `usuarioModificacion`, `descripcionTercero`, `esCliente`, `esproveedor`, `contactoTercero`) VALUES
('108823', 'dfdfd', 'cristiancamilo.121@gmail.com', '31245676', '34545435', 'crrr', b'1', '2021-06-05 10:27:19', 'system', NULL, NULL, NULL, b'0', b'0', NULL),
('324', 'go', 'cristiancamilo.121@gmail.com', '677', '89909', 'sdfdsfd', b'1', '2021-06-05 10:31:19', 'system', NULL, NULL, NULL, b'0', b'0', NULL),
('5657', 'fran', 'fran@gmail.com', '67895', '5645646', 'hghgfgh', b'1', '2021-06-08 15:36:57', 'system', NULL, NULL, NULL, b'0', b'0', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nombreUsuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `identificacion` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `primerNombre` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `segundoNombre` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `primerApellido` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `segundoApellido` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `email` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `celular` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `perfilUsuario` int(11) NOT NULL,
  `passUsuario` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `usuarioCreacion` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fechaCreacion` datetime DEFAULT NULL,
  `UsuarioModificacion` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fechaModificacion` datetime DEFAULT NULL,
  `estadoUsuario` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombreUsuario`, `identificacion`, `primerNombre`, `segundoNombre`, `primerApellido`, `segundoApellido`, `email`, `celular`, `direccion`, `perfilUsuario`, `passUsuario`, `usuarioCreacion`, `fechaCreacion`, `UsuarioModificacion`, `fechaModificacion`, `estadoUsuario`) VALUES
('camilo 123', '1088354272', 'cristian', 'camilo', 'salinas', 'morales', 'cristiancamilo.121@gmail.com', '3124625201', 'cll 20 # 21-24', 0, 'OS84Z09TSWdHQTdBT1lQKzRXVG1nZz09', 'system', '2021-06-08 14:49:09', NULL, NULL, b'1'),
('carlitos', '990344252', 'carlos', 'andres', 'padilla', 'gomez', 'carlitos@gmail.com', '66756445435', 'diagonal34', 0, 'WllJZXd5RmdBTHlVelVMc1RwNHVhdz09', 'system', '2021-06-08 16:55:36', NULL, NULL, b'1'),
('cc', '778', 'kjk', 'jnnj', 'sdvdsvdvdsv', 'morales', 'carlitos@gmail.com', '4534', 'dghdgh', 2, 'R0RoZ2JnUUZvSHRLeE56ZE91VjJLZz09', 'system', '2021-06-08 21:12:07', NULL, NULL, b'1'),
('ccamilo', '10883542', 'camilo', 'cristian', 'salinas', 'morales', 'cristiancamilo.121@gmail.com', '312445556', 'ghghhgh', 3, 'dExLbG5YYTI4cm5Hc2IwRjVLNHVUQT09', 'system', '2021-06-11 00:08:25', NULL, NULL, b'1'),
('felippp', '89056765', 'felipe', 'andres', 'perez', 'sosa', 'perez@gmail.com', '314567534', 'trans21#56-26', 0, 'bGdyM2dOSldWbFdsbWhjQ3hpeW9Odz09', 'system', '2021-06-08 16:58:46', NULL, NULL, b'1'),
('juanito123', '4545', 'juan', 'esteban', 'rendon', 'morales', 'juan@gmail.com', '6576765765', 'u65', 0, 'S1NLeExEcjZyS1RvYjNBbmdUa2tUUT09', 'system', '2021-06-08 21:09:43', NULL, NULL, b'1'),
('pepitor', '7787878', 'pepito', 'didier', 'gomez', 'pinal', 'pepito@gmail.com', '34443', 'ttrh', 3, 'dExLbG5YYTI4cm5Hc2IwRjVLNHVUQT09', 'system', '2021-06-11 00:43:50', NULL, NULL, b'1'),
('raul', '09545854', 'angel', 'castro', 'anuuel', 'morales', 'anuuel@gmail.com', '322568945', '30 agosto', 1, 'djZYVVhxb0N3ck8rNXY0Sk85bmpNQT09', 'system', '2021-06-08 21:18:08', NULL, NULL, b'1'),
('salinaswilson', '785785955', 'wilson', 'andres', 'salinas', 'muÃ±oz', 'salinaswilson@gmail.com', '313785956', 'gttgtgttg', 4, 'MHQ5aG5WU1dMMkJmMDJRWFdRQ0FhZz09', 'system', '2021-06-10 19:52:00', NULL, NULL, b'1'),
('sarai', '9077657878', 'sara', 'sofia', 'salinas', 'morales', 'sara@gmail.com', '34355654635', 'hffgfgfgh', 0, 'WU9KZGUxL3NQMzRNMk9lMkxRMXI1QT09', 'system', '2021-06-08 17:13:35', NULL, NULL, b'1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `compraventa`
--
ALTER TABLE `compraventa`
  ADD PRIMARY KEY (`idcompraventa`),
  ADD KEY `indx_fechaCompraVenta` (`fechaCompraVenta`),
  ADD KEY `fk_compraventa_Terceros1_idx` (`identificacionTercero`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`codigosProducto`),
  ADD KEY `indx_nombre_producto` (`nombreProducto`);

--
-- Indices de la tabla `productosporcompraventa`
--
ALTER TABLE `productosporcompraventa`
  ADD PRIMARY KEY (`idProductosPorCompraVenta`),
  ADD KEY `fk_compraventa_has_productos_productos1_idx` (`codigoProducto`),
  ADD KEY `fk_compraventa_has_productos_compraventa_idx` (`idCompraVenta`);

--
-- Indices de la tabla `terceros`
--
ALTER TABLE `terceros`
  ADD PRIMARY KEY (`identificacionTercero`),
  ADD KEY `indx_nombre_tercero` (`nombreTercero`),
  ADD KEY `indx_descripcion_tercero` (`descripcionTercero`),
  ADD KEY `indx_contacto_tercero` (`contactoTercero`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`nombreUsuario`),
  ADD KEY `indx_identificacion_usuario` (`identificacion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `compraventa`
--
ALTER TABLE `compraventa`
  MODIFY `idcompraventa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productosporcompraventa`
--
ALTER TABLE `productosporcompraventa`
  MODIFY `idProductosPorCompraVenta` bigint(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compraventa`
--
ALTER TABLE `compraventa`
  ADD CONSTRAINT `fk_compraventa_Terceros1` FOREIGN KEY (`identificacionTercero`) REFERENCES `terceros` (`identificacionTercero`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `productosporcompraventa`
--
ALTER TABLE `productosporcompraventa`
  ADD CONSTRAINT `fk_compraventa_has_productos_compraventa` FOREIGN KEY (`idCompraVenta`) REFERENCES `compraventa` (`idcompraventa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_compraventa_has_productos_productos1` FOREIGN KEY (`codigoProducto`) REFERENCES `productos` (`codigosProducto`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
