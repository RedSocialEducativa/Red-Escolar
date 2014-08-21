-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 19-08-2014 a las 11:34:57
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `proyecto`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `perfiles`
-- 

CREATE TABLE `perfiles` (
  `id` tinyint(4) NOT NULL auto_increment,
  `nombres` varchar(45) NOT NULL,
  `apellidos` varchar(45) NOT NULL,
  `foto` longblob NOT NULL,
  `ciudad` varchar(45) NOT NULL,
  `colegio` varchar(45) NOT NULL,
  `profesion` varchar(45) NOT NULL,
  `correo` varchar(45) NOT NULL,
  `contraseña` varchar(45) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `perfiles`
-- 

