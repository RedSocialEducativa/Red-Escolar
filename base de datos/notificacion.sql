-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 10-08-2014 a las 21:07:48
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6

-- 
-- Base de datos: `proyecto`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `notificacion`
-- 

CREATE TABLE `notificacion` (
  `id` int(11) NOT NULL auto_increment,
  `descripcion` varchar(45) NOT NULL,
  PRIMARY KEY  (`id`)
) TYPE=MyISAM  AUTO_INCREMENT=3 ;

-- 
-- Volcar la base de datos para la tabla `notificacion`
-- 

INSERT INTO `notificacion` VALUES (1, 'Manuel Cedeño comento en el grupo de Musica');
INSERT INTO `notificacion` VALUES (2, 'Carlos Suarez ha dado me gusta');
