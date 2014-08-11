-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 10-08-2014 a las 21:04:16
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6

-- 
-- Base de datos: `proyecto`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `grupo`
-- 

CREATE TABLE `grupo` (
  `id` int(11) NOT NULL auto_increment,
  `nombre` varchar(45) NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  UNIQUE KEY `id` (`id`)
) TYPE=MyISAM  AUTO_INCREMENT=3 ;

-- 
-- Volcar la base de datos para la tabla `grupo`
-- 

INSERT INTO `grupo` VALUES (1, 'Grupo de Matematica', 'Ejercicios Algebra');
INSERT INTO `grupo` VALUES (2, 'Grupo Musica', 'Coro del Colegio');
