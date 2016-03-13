-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-03-2016 a las 16:11:56
-- Versión del servidor: 10.1.8-MariaDB
-- Versión de PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mundocente`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `academic_institution`
--

CREATE TABLE `academic_institution` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(60) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `EMAIL` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `PHONE` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `DESCRIPTION` varchar(120) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `UBICATION` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `TYPE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrator`
--

CREATE TABLE `administrator` (
  `USERNAME` varchar(60) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `PASSWORD` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `AREA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE `area` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(60) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `DESCRIPTION` varchar(120) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `PARENT` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enroll`
--

CREATE TABLE `enroll` (
  `DESCRIPTION` varchar(120) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `USERNAME` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `AREA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publication`
--

CREATE TABLE `publication` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(60) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `URL` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `START_DATE` date NOT NULL,
  `END_DATE` date DEFAULT NULL,
  `PLACE` varchar(60) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `CALIFICATION` int(11) DEFAULT NULL,
  `POSITION` varchar(60) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `TYPE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `register`
--

CREATE TABLE `register` (
  `DATE_PUBLICATION` date NOT NULL,
  `PUBLICATION` int(11) NOT NULL,
  `AREA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `type_of_academic_institution`
--

CREATE TABLE `type_of_academic_institution` (
  `ID` int(11) NOT NULL,
  `VALUE` varchar(40) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `type_of_academic_institution`
--

INSERT INTO `type_of_academic_institution` (`ID`, `VALUE`) VALUES
(1, 'UNIVERSIDAD'),
(2, 'INSTITUCIÓN PÚBLICA'),
(3, 'INSTITUCIÓN PRIVADA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `type_of_publication`
--

CREATE TABLE `type_of_publication` (
  `ID` int(11) NOT NULL,
  `VALUE` varchar(40) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `type_of_publication`
--

INSERT INTO `type_of_publication` (`ID`, `VALUE`) VALUES
(1, 'CONVOCATORIA DOCENTE'),
(2, 'REVISTA CIENTIFICA'),
(3, 'EVENTO ACADEMICO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `type_of_user`
--

CREATE TABLE `type_of_user` (
  `ID` int(11) NOT NULL,
  `VALUE` varchar(40) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `type_of_user`
--

INSERT INTO `type_of_user` (`ID`, `VALUE`) VALUES
(1, 'DOCENTE'),
(2, 'PUBLICADOR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `USERNAME` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `PASSWORD` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `FULLNAME` varchar(60) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `EMAIL` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `PHONE` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `TYPE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `academic_institution`
--
ALTER TABLE `academic_institution`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `TYPE` (`TYPE`);

--
-- Indices de la tabla `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`USERNAME`);

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `enroll`
--
ALTER TABLE `enroll`
  ADD KEY `USERNAME` (`USERNAME`),
  ADD KEY `AREA` (`AREA`);

--
-- Indices de la tabla `publication`
--
ALTER TABLE `publication`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `TYPE` (`TYPE`);

--
-- Indices de la tabla `register`
--
ALTER TABLE `register`
  ADD KEY `PUBLICATION` (`PUBLICATION`),
  ADD KEY `AREA` (`AREA`);

--
-- Indices de la tabla `type_of_academic_institution`
--
ALTER TABLE `type_of_academic_institution`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `type_of_publication`
--
ALTER TABLE `type_of_publication`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `type_of_user`
--
ALTER TABLE `type_of_user`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`USERNAME`),
  ADD KEY `TYPE` (`TYPE`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `academic_institution`
--
ALTER TABLE `academic_institution`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `area`
--
ALTER TABLE `area`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `publication`
--
ALTER TABLE `publication`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `type_of_academic_institution`
--
ALTER TABLE `type_of_academic_institution`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `type_of_publication`
--
ALTER TABLE `type_of_publication`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `type_of_user`
--
ALTER TABLE `type_of_user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `academic_institution`
--
ALTER TABLE `academic_institution`
  ADD CONSTRAINT `academic_institution_ibfk_1` FOREIGN KEY (`TYPE`) REFERENCES `type_of_academic_institution` (`ID`);

--
-- Filtros para la tabla `enroll`
--
ALTER TABLE `enroll`
  ADD CONSTRAINT `enroll_ibfk_1` FOREIGN KEY (`USERNAME`) REFERENCES `user` (`USERNAME`),
  ADD CONSTRAINT `enroll_ibfk_2` FOREIGN KEY (`AREA`) REFERENCES `area` (`ID`);

--
-- Filtros para la tabla `publication`
--
ALTER TABLE `publication`
  ADD CONSTRAINT `publication_ibfk_1` FOREIGN KEY (`TYPE`) REFERENCES `type_of_publication` (`ID`);

--
-- Filtros para la tabla `register`
--
ALTER TABLE `register`
  ADD CONSTRAINT `register_ibfk_1` FOREIGN KEY (`PUBLICATION`) REFERENCES `publication` (`ID`),
  ADD CONSTRAINT `register_ibfk_2` FOREIGN KEY (`AREA`) REFERENCES `area` (`ID`);

--
-- Filtros para la tabla `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`TYPE`) REFERENCES `type_of_user` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
