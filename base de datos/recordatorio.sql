-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 10-08-2014 a las 21:10:31
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6

-- 
-- Base de datos: `proyecto`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `recordatorio`
-- 

CREATE TABLE `recordatorio` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  `fechaEvento` date NOT NULL,
  `horaInicio` datetime NOT NULL,
  `horaFinal` datetime NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `idRECORDATORIO_UNIQUE` (`id`)
) TYPE=MyISAM;

-- 
-- Volcar la base de datos para la tabla `recordatorio`
-- 

INSERT INTO `recordatorio` VALUES (1, 'Entrega de Notas', '2014-08-21', '2014-08-10 10:00:09', '2014-08-10 12:59:23');
INSERT INTO `recordatorio` VALUES (2, 'Ensayo del Coro', '2014-08-19', '2014-08-10 14:30:43', '2014-08-10 16:00:51');
