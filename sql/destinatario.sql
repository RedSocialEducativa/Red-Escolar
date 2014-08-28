-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 19-08-2014 a las 11:33:45
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `proyecto`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `destinatario`
-- 

CREATE TABLE `destinatario` (
  `idPerfil` int(11) NOT NULL,
  `idMensaje` int(11) NOT NULL,
  UNIQUE KEY `idPerfil` (`idPerfil`,`idMensaje`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `destinatario`
-- 

INSERT INTO `destinatario` VALUES (1, 3);
INSERT INTO `destinatario` VALUES (2, 5);
