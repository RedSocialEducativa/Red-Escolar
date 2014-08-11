-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 10-08-2014 a las 21:02:12
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `proyecto`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `archivo`
-- 

CREATE TABLE `archivo` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `idARCHIVO_UNIQUE` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Volcar la base de datos para la tabla `archivo`
-- 

INSERT INTO `archivo` VALUES (1, 'Docuemnto de Matematica.docx');
INSERT INTO `archivo` VALUES (2, 'Balance General.xls');
