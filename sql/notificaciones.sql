-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 19-08-2014 a las 11:34:41
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `proyecto`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `notificaciones`
-- 

CREATE TABLE `notificaciones` (
  `id` tinyint(4) NOT NULL,
  `idPerfil` int(11) NOT NULL,
  `texto` varchar(500) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `idPerfil` (`idPerfil`),
  FULLTEXT KEY `texto` (`texto`),
  FULLTEXT KEY `status` (`status`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `notificaciones`
-- 

INSERT INTO `notificaciones` VALUES (1, 1, 'Hola que hace', 'activo');
