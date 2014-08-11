-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 10-08-2014 a las 21:08:49
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6

-- 
-- Base de datos: `proyecto`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `persona`
-- 

CREATE TABLE `persona` (
  `id` int(11) NOT NULL,
  `primerNombre` varchar(45) NOT NULL,
  `segundoNombre` varchar(45) NOT NULL,
  `primerApellido` varchar(45) NOT NULL,
  `segundoApellido` varchar(45) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `profesion` varchar(45) NOT NULL,
  `ciudad` varchar(45) NOT NULL,
  `genero` varchar(45) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `idPERSONA_UNIQUE` (`id`)
) TYPE=MyISAM;

-- 
-- Volcar la base de datos para la tabla `persona`
-- 

INSERT INTO `persona` VALUES (1, 'Maria ', 'Carolina', 'Reto', 'Sanchez', '2014-08-06', 'estudiante', 'Quito', 'femenino');
INSERT INTO `persona` VALUES (2, 'Luis', 'David', 'Castro', 'Moreira', '2014-09-09', 'profesor', 'Guayaquil', 'masculino');
INSERT INTO `persona` VALUES (3, 'Matias', 'Benjamin', 'Pinos', 'Reto', '2014-10-14', 'estudiante', 'Quito', 'masculino');
