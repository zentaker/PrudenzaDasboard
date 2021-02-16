-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-02-2021 a las 18:22:50
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prudenzav1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admins`
--

CREATE TABLE `admins` (
  `id_admin` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `password` varchar(60) NOT NULL,
  `editado` datetime DEFAULT NULL,
  `nivel` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `admins`
--

INSERT INTO `admins` (`id_admin`, `usuario`, `nombre`, `password`, `editado`, `nivel`) VALUES
(18, 'admin', 'Administrador Prudenza', '$2y$12$A0W0ifRO.v4Q/qjPJ3XTyO8fp2XEwufey3DHWPUP7iV.o64RBirZG', NULL, 2),
(20, 'JimenesP', 'pedro jimenez', '$2y$12$LeztEUXpcKyTr8r0upcOLOL9VRG5mLQnCGHWZ5acdQbcFF40SA8ui', NULL, 0),
(21, 'zencode', 'miguel herrera', '$2y$12$KM8Twza2aeP2j7EFN/SUGeEVtzdKV9/o6xCRPIXw3QC1IEj/T0/a6', NULL, 0),
(23, 'el mercader', 'eduardo', '$2y$12$YyAS8Q35ZKT0pmcrHSygie3WLHhb0VAueA7b9Ag4Auspb540g2Xye', NULL, 0),
(24, 'prudenza', 'alerjandr', '$2y$12$MEtrz03pwINPDR2TMP5Fv.gdro7WAHJjhWjLFn2Lti29SqZfNTp.e', NULL, 0),
(156, 'asesor', 'Pedro Martinez', '$2y$12$6SqP0gmlzxyASuAHE9NRluG8nft8ycxCrZJRUt5l3TJJjJq/jAkAW', '2021-02-15 18:02:27', 1),
(157, 'blitzenger', 'Alejandro Palomino', '$2y$12$kQAtBXsZeaJ5cepZaqK9.u2uJcchClRdCfbKR.ToEe4ofR1lwusUi', '2021-02-15 18:09:15', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coberturas`
--

CREATE TABLE `coberturas` (
  `id_coberturas` int(11) NOT NULL,
  `beneficio` varchar(50) NOT NULL,
  `tipo` varchar(10) NOT NULL,
  `detalle` varchar(600) NOT NULL,
  `direccion` varchar(60) DEFAULT NULL,
  `pago_extra` double(7,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `coberturas`
--

INSERT INTO `coberturas` (`id_coberturas`, `beneficio`, `tipo`, `detalle`, `direccion`, `pago_extra`) VALUES
(1, 'chofer de remplazo', 'cobertura', 'ante una eventualidad estas protegido', 'Av, los pinos', 15.00),
(2, 'Acidente de trafico', 'cobertura', 'Aquel evento que ocasione pérdida parcial o total del vehículo asegurado, a consecuencia de los riesgos\r\nantes mencionados, independientemente de si el vehículo se encontraba en circulación', '', 0.00),
(3, 'Robo o hurto', 'cobertura', 'No se considera robo o hurto, la apropiación ilícita,\r\nel abuso de confianza o la retención indebida del vehículo asegurado por quien está autorizado para\r\nconducirlo o a quien se le hubiere encargado su custodia.', '', 0.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compania`
--

CREATE TABLE `compania` (
  `id_compania` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `ruc` int(20) NOT NULL,
  `telefonoEmer` int(20) NOT NULL,
  `telefonoAsis` int(20) NOT NULL,
  `telefonoChof` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `compania`
--

INSERT INTO `compania` (`id_compania`, `nombre`, `ruc`, `telefonoEmer`, `telefonoAsis`, `telefonoChof`) VALUES
(1, 'Rimac', 232324342, 998383743, 99483432, 99484342),
(2, 'Pasifico', 992827362, 992838231, 33123123, 2312223),
(3, 'positiva', 44342342, 43234234, 342342, 3423423),
(4, 'mapre', 3434523, 352354, 4523452, 34234234),
(5, 'Rimac - vehicular', 44342342, 998383743, 99483432, 99484342);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `exclusiones`
--

CREATE TABLE `exclusiones` (
  `id_exclusion` int(11) NOT NULL,
  `exclusion` varchar(50) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `detalle` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugaratencion`
--

CREATE TABLE `lugaratencion` (
  `idLugAtencion` int(11) NOT NULL,
  `nombreestablecimiento` varchar(50) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `deducible` decimal(7,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `lugaratencion`
--

INSERT INTO `lugaratencion` (`idLugAtencion`, `nombreestablecimiento`, `direccion`, `deducible`) VALUES
(1, 'taller1', 'av. los poino 123', '14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguros`
--

CREATE TABLE `seguros` (
  `id_seguro` int(11) NOT NULL,
  `nombre_comercial` varchar(50) NOT NULL,
  `id_compania` int(11) NOT NULL,
  `ramo` varchar(60) NOT NULL,
  `ramo_prudenza` varchar(60) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `img` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `seguros`
--

INSERT INTO `seguros` (`id_seguro`, `nombre_comercial`, `id_compania`, `ramo`, `ramo_prudenza`, `descripcion`, `img`) VALUES
(1, 'Póliza Plateada', 4, 'vehiculos', 'Seguro Vehicular', 'Cía. garantiza a asegurado la indemnización o reparación de daños y/o pérdidas que sufra el vehículo asegurado por los riesgos enumerados. Coberturas: Resp. Civil de Daños Materiales Hasta US$ 50,000 y de ocupantes hasta US$ 30,000. Pérdida Total/Daño Propio por: Accidente, Incendio, Robo hasta valor comercial. Hay Deducibles.', ''),
(2, 'Póliza Dorada', 4, 'vehiculos', 'seguro Vehicular', 'Cía. garantiza a asegurado indemnización o reparación de daños y/o pérdidas al vehículo asegurado por los riesgos enumerados. Cubre: Accid. Personales. Resp. Civil de Daños Materiales Hasta US$100,000 y de ocupantes hasta US$ 30,000. Pérdida Total/Daño Propio por: Accidente, Incendio, Robo hasta valor comercial. Hay Deducibles.', ''),
(3, 'Multiauto Full Nuevo', 2, 'vehiculos', 'Seguro Vehicular', 'Compañía garantiza indemnización y/o reparación de daños o pérdidas por uso y circulación del auto por: Daño Propio; Responsabilidad Civil a terceros por daños personales y materiales; Accidentes Personales; Huelgas y Terrorismo. Cláusulas especiales para empresas. Hay exclusiones.', ''),
(4, 'Autos Financiados ', 2, 'vehiculos', 'seguro Vehicular', 'Compañía garantiza indemnización y/o reparación de daños o pérdidas por uso y circulación del auto por: Daño Propio; Responsabilidad Civil a terceros por daños personales y materiales; Accidentes Personales; Huelgas y Terrorismo. Hay exclusiones.', ''),
(5, 'Seguro de Autos Robo Total', 2, 'vehiculos', 'Seguro Vehicular', 'Coberturas: 1. Daños al vehículo (incendio por combustión espontánea y abrasamiento con llama, cualquier fuerza externa, repentina y violenta que resulte de un caso fortuito que no sea choque, vuelco o despiste), 2. Robo total del vehículo. Aplican exclusiones. Aplican cláusulas adicionales y condición especial.', ''),
(6, 'Integral del Hogar', 3, 'Domiciliario', 'Seguro Hogar', 'Seguro que paga una indemnización en caso de daños y pérdidas materiales accidentales, súbitas e imprevistas causados al hogar.', ''),
(7, 'Auto Total Líder', 3, 'vehiculos', 'seguro Vehicular', 'Seguro que cubre daños al vehículo, responsabilidad civil frente a terceros o para ocupantes, accidentes personales de los ocupantes, muerte e invalidez permanente, gastos de curación, seguro de asistencia y servicio, accesorios musicales.', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguros-coberturas`
--

CREATE TABLE `seguros-coberturas` (
  `id` int(11) NOT NULL,
  `id_seguro` int(11) NOT NULL,
  `id_cobertura` int(11) NOT NULL,
  `detalle` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `seguros-coberturas`
--

INSERT INTO `seguros-coberturas` (`id`, `id_seguro`, `id_cobertura`, `detalle`) VALUES
(1, 1, 2, ''),
(2, 1, 1, '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- Indices de la tabla `coberturas`
--
ALTER TABLE `coberturas`
  ADD PRIMARY KEY (`id_coberturas`);

--
-- Indices de la tabla `compania`
--
ALTER TABLE `compania`
  ADD PRIMARY KEY (`id_compania`);

--
-- Indices de la tabla `exclusiones`
--
ALTER TABLE `exclusiones`
  ADD PRIMARY KEY (`id_exclusion`);

--
-- Indices de la tabla `lugaratencion`
--
ALTER TABLE `lugaratencion`
  ADD PRIMARY KEY (`idLugAtencion`);

--
-- Indices de la tabla `seguros`
--
ALTER TABLE `seguros`
  ADD PRIMARY KEY (`id_seguro`),
  ADD KEY `id_compania` (`id_compania`);

--
-- Indices de la tabla `seguros-coberturas`
--
ALTER TABLE `seguros-coberturas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_seguro` (`id_seguro`),
  ADD KEY `id_cobertura` (`id_cobertura`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admins`
--
ALTER TABLE `admins`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT de la tabla `coberturas`
--
ALTER TABLE `coberturas`
  MODIFY `id_coberturas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `compania`
--
ALTER TABLE `compania`
  MODIFY `id_compania` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `exclusiones`
--
ALTER TABLE `exclusiones`
  MODIFY `id_exclusion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `lugaratencion`
--
ALTER TABLE `lugaratencion`
  MODIFY `idLugAtencion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `seguros`
--
ALTER TABLE `seguros`
  MODIFY `id_seguro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `seguros-coberturas`
--
ALTER TABLE `seguros-coberturas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `seguros`
--
ALTER TABLE `seguros`
  ADD CONSTRAINT `seguros_ibfk_1` FOREIGN KEY (`id_compania`) REFERENCES `compania` (`id_compania`);

--
-- Filtros para la tabla `seguros-coberturas`
--
ALTER TABLE `seguros-coberturas`
  ADD CONSTRAINT `seguros-coberturas_ibfk_1` FOREIGN KEY (`id_seguro`) REFERENCES `seguros` (`id_seguro`),
  ADD CONSTRAINT `seguros-coberturas_ibfk_2` FOREIGN KEY (`id_cobertura`) REFERENCES `coberturas` (`id_coberturas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
