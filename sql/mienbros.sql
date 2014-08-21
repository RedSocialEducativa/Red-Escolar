-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 19-08-2014 a las 11:34:27
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `proyecto`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `mienbros`
-- 

CREATE TABLE `mienbros` (
  `id` tinyint(4) NOT NULL auto_increment,
  `idGrupo` int(11) NOT NULL,
  `idPerfil` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `idGrupo` (`idGrupo`,`idPerfil`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- 
-- Volcar la base de datos para la tabla `mienbros`
-- 

INSERT INTO `mienbros` VALUES (1, 1, 1);
