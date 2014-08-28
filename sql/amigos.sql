-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 17-08-2014 a las 13:44:15
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `proyecto`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `amigos`
-- 

CREATE TABLE `amigos` (
  `idDueño` int(11) NOT NULL,
  `idAmigo` int(11) NOT NULL,
  PRIMARY KEY  (`idDueño`,`idAmigo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `amigos`
-- 

