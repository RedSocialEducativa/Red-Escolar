-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 10-08-2014 a las 21:06:22
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6

-- 
-- Base de datos: `proyecto`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `mensaje`
-- 

CREATE TABLE `mensaje` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `idMENSAJE_UNIQUE` (`id`)
) TYPE=MyISAM;

-- 
-- Volcar la base de datos para la tabla `mensaje`
-- 

INSERT INTO `mensaje` VALUES (1, 'hola como estas');
INSERT INTO `mensaje` VALUES (2, 'hola como estas');
INSERT INTO `mensaje` VALUES (3, 'Hola');
INSERT INTO `mensaje` VALUES (4, 'Necesito revisar los ejercicios de algebra pa');
INSERT INTO `mensaje` VALUES (5, 'Traer el libro de computacion para el ejercic');
