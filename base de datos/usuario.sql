-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 10-08-2014 a las 21:12:14
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6

-- 
-- Base de datos: `proyecto`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `usuario`
-- 

CREATE TABLE `usuario` (
  `id` varchar(11) NOT NULL,
  `correoElectronico` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `correo_electronico_UNIQUE` (`correoElectronico`),
  UNIQUE KEY `idUSUARIO_UNIQUE` (`id`)
) TYPE=MyISAM;

-- 
-- Volcar la base de datos para la tabla `usuario`
-- 

INSERT INTO `usuario` VALUES ('1', 'ccrr1994@hotmail.com', '12345');
INSERT INTO `usuario` VALUES ('2', 'rosamaria12@hotmail.com', '33453');
INSERT INTO `usuario` VALUES ('3', 'matias1234@hotmail.com', 'matias23');
INSERT INTO `usuario` VALUES ('4', 'stefanycoello12@hotmail.com', 'rosaw4');
