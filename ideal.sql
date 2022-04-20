-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-04-2022 a las 17:28:21
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ideal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnosb`
--

CREATE TABLE `alumnosb` (
  `matricula` varchar(30) NOT NULL,
  `nombre_com` varchar(100) NOT NULL,
  `ap_pa` varchar(30) NOT NULL,
  `ap_ma` varchar(30) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `curp` varchar(18) NOT NULL,
  `fec_nac` date NOT NULL,
  `sexo` varchar(30) NOT NULL,
  `sem_act` varchar(30) NOT NULL,
  `sem_ini` varchar(30) NOT NULL,
  `responsable` varchar(30) NOT NULL,
  `documentos` varchar(30) NOT NULL,
  `id_proc` varchar(30) NOT NULL,
  `1` int(11) NOT NULL,
  `2` int(11) NOT NULL,
  `3` int(11) NOT NULL,
  `4` int(11) NOT NULL,
  `5` int(11) NOT NULL,
  `6` int(11) NOT NULL,
  `7` int(11) NOT NULL,
  `8` int(11) NOT NULL,
  `9` int(11) NOT NULL,
  `10` int(11) NOT NULL,
  `11` int(11) NOT NULL,
  `12` int(11) NOT NULL,
  `13` int(11) NOT NULL,
  `14` int(11) NOT NULL,
  `15` int(11) NOT NULL,
  `16` int(11) NOT NULL,
  `17` int(11) NOT NULL,
  `18` int(11) NOT NULL,
  `19` int(11) NOT NULL,
  `20` int(11) NOT NULL,
  `21` int(11) NOT NULL,
  `22` int(11) NOT NULL,
  `23` int(11) NOT NULL,
  `24` int(11) NOT NULL,
  `25` int(11) NOT NULL,
  `26` int(11) NOT NULL,
  `27` int(11) NOT NULL,
  `28` int(11) NOT NULL,
  `29` int(11) NOT NULL,
  `30` int(11) NOT NULL,
  `31` int(11) NOT NULL,
  `promedio` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnosc`
--

CREATE TABLE `alumnosc` (
  `matricula` varchar(30) NOT NULL,
  `nom_com` varchar(100) NOT NULL,
  `ap_pa` varchar(30) NOT NULL,
  `ap_ma` varchar(30) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `curp` varchar(18) NOT NULL,
  `escuela` varchar(30) NOT NULL,
  `promedio` float NOT NULL,
  `certif_sec` blob NOT NULL,
  `acta_nac` blob NOT NULL,
  `curp_v` blob NOT NULL,
  `doc_dig` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnosj`
--

CREATE TABLE `alumnosj` (
  `matricula` varchar(30) NOT NULL,
  `ap_pa` varchar(30) NOT NULL,
  `ap_ma` varchar(30) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `curp` varchar(18) NOT NULL,
  `fec_nac` date NOT NULL,
  `promedio` float NOT NULL,
  `generacion` varchar(30) NOT NULL,
  `escuela` varchar(30) NOT NULL,
  `responsable` varchar(30) NOT NULL,
  `incidencias` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumnosj`
--

INSERT INTO `alumnosj` (`matricula`, `ap_pa`, `ap_ma`, `nombre`, `curp`, `fec_nac`, `promedio`, `generacion`, `escuela`, `responsable`, `incidencias`) VALUES
('CIUCA27JAOC', 'Ortega', 'Camacho', 'Javier', 'JAOC020427OJCA9803', '1999-04-27', 9.2, '2016-2019', 'uno', 'dos', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `institucion`
--

CREATE TABLE `institucion` (
  `cve_inst` varchar(10) NOT NULL,
  `nombre_inst` varchar(30) NOT NULL,
  `cve_resp` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_alu`
--

CREATE TABLE `registro_alu` (
  `matricula` varchar(30) NOT NULL,
  `ap_pa` varchar(30) NOT NULL,
  `ap_ma` varchar(30) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `curp` varchar(18) NOT NULL,
  `genero` varchar(30) NOT NULL,
  `fec_nac` date NOT NULL,
  `edad` int(2) NOT NULL,
  `fec_cert` date NOT NULL,
  `nivel` varchar(30) NOT NULL,
  `cuatrimestre` int(2) NOT NULL,
  `fec_reg` date NOT NULL,
  `no_app` varchar(15) NOT NULL,
  `especial` varchar(2) NOT NULL,
  `car_tec` varchar(45) NOT NULL,
  `promedio` float NOT NULL,
  `constancia` varchar(2) NOT NULL,
  `estatus` varchar(30) NOT NULL,
  `generacion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registro_alu`
--

INSERT INTO `registro_alu` (`matricula`, `ap_pa`, `ap_ma`, `nombre`, `curp`, `genero`, `fec_nac`, `edad`, `fec_cert`, `nivel`, `cuatrimestre`, `fec_reg`, `no_app`, `especial`, `car_tec`, `promedio`, `constancia`, `estatus`, `generacion`) VALUES
('CIUCA27JAOC', 'Ortega', 'Camacho', 'Javier', 'JAOC020427OJCA9803', 'Hombre', '1999-04-27', 22, '2022-04-08', 'Secundaria', 0, '2022-04-18', ' ', 'on', 'Contabilidad', 10, 'no', ' ', ' '),
('CIUCA2802AAPCS', 'Cañada', 'Solares', 'Ana Patricia', 'APCS123456KOWRSY89', 'Mujer', '2000-07-20', 21, '2022-02-28', 'Secundaria', 2, '2022-04-18', 'EU-SEP 32', '', 'Trabajo Social', 8, 'no', 'POR CERTIFICAR', '2018-2020'),
('CIUCA321MAO', 'Martinez', 'Angeles', 'Oscar', 'MAAO123456JKFKFJ28', 'Hombre', '2002-10-23', 19, '0000-00-00', 'Secundaria', 0, '2022-04-18', ' ', 'on', 'Programación', 9, 'si', ' ', ' '),
('CIUCA546LOV', 'Vaca', 'Gonzalez', 'Lola', 'LOVG098765HTIDW67L', 'Mujer', '1993-02-11', 29, '2018-08-16', 'Secundaria', 9, '2022-02-28', 'EU-SEP 32', 'on', 'Puericultura', 9.6, 'no', 'POR CERTIFICAR', '2019-2021'),
('CIUCA892NCIDK', 'Martinez', 'Paz', 'Karla', 'MAPK011017MQTRZRA7', 'Mujer', '0000-00-00', 20, '0000-00-00', 'Secundaria', 8, '0000-00-00', '1', 'si', 'Programación', 8.7, 'no', 'Activo', '2016-2019'),
('CIUCARETRO124', 'Retroactivo', 'Prueba', 'Hola', '12345678MHHDKY781S', 'Hombre', '2000-06-13', 21, '2022-03-29', 'Secundaria', 6, '2022-04-16', 'EU-SEP 32', 'on', 'Contabilidad', 8.5, 'no', 'POR CERTIFICAR', '2013-2016 - Retroactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `responsable`
--

CREATE TABLE `responsable` (
  `cve_resp` varchar(10) NOT NULL,
  `nombre_resp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnosb`
--
ALTER TABLE `alumnosb`
  ADD PRIMARY KEY (`matricula`);

--
-- Indices de la tabla `alumnosc`
--
ALTER TABLE `alumnosc`
  ADD PRIMARY KEY (`matricula`);

--
-- Indices de la tabla `alumnosj`
--
ALTER TABLE `alumnosj`
  ADD PRIMARY KEY (`matricula`);

--
-- Indices de la tabla `institucion`
--
ALTER TABLE `institucion`
  ADD PRIMARY KEY (`cve_inst`);

--
-- Indices de la tabla `registro_alu`
--
ALTER TABLE `registro_alu`
  ADD PRIMARY KEY (`matricula`);

--
-- Indices de la tabla `responsable`
--
ALTER TABLE `responsable`
  ADD PRIMARY KEY (`cve_resp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
