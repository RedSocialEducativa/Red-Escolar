-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 15-09-2014 a las 09:30:30
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
  `eventos` varchar(255) NOT NULL,
  `recursos` varchar(255) NOT NULL,
  `idAministradorFK` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `idAdministradoFk_idx` (`idAministradorFK`)
) TYPE=MyISAM  AUTO_INCREMENT=3 ;

-- 
-- Volcar la base de datos para la tabla `grupo`
-- 

INSERT INTO `grupo` VALUES (1, 'Matematicas 2x', 'Lab 405B- Practicas Algebra Avanzada', 'Talleres Texto Matematicas XV', 1);
INSERT INTO `grupo` VALUES (2, 'Literatura', 'Lectura del Libro "La Quinta Montaña"', 'Talleres Literarios', 2);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `imagenes`
-- 

CREATE TABLE `imagenes` (
  `imagen_id` int(35) NOT NULL auto_increment,
  `imagen` varchar(255) NOT NULL,
  PRIMARY KEY  (`imagen_id`)
) TYPE=MyISAM  AUTO_INCREMENT=11 ;

-- 
-- Volcar la base de datos para la tabla `imagenes`
-- 

INSERT INTO `imagenes` VALUES (1, 'usuario1.jpg');
INSERT INTO `imagenes` VALUES (2, '2.jpg');
INSERT INTO `imagenes` VALUES (5, '5.jpg');
INSERT INTO `imagenes` VALUES (4, '4.jpg');
INSERT INTO `imagenes` VALUES (3, '3.jpg');
INSERT INTO `imagenes` VALUES (6, '6.jpg');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `mensaje`
-- 

CREATE TABLE `mensaje` (
  `id` int(11) NOT NULL auto_increment,
  `texto` varchar(500) NOT NULL,
  `nombrePerfilFK` varchar(45) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `idPerfilFK` (`nombrePerfilFK`)
) TYPE=MyISAM  AUTO_INCREMENT=245 ;

-- 
-- Volcar la base de datos para la tabla `mensaje`
-- 

INSERT INTO `mensaje` VALUES (1, 'Debemos traer la calculadora para el deber de algebra lineal', 'Maria Mercedes');
INSERT INTO `mensaje` VALUES (2, 'No te olvides de practicar para la clase del lunes', 'Cindy del Carmen');
INSERT INTO `mensaje` VALUES (3, 'La pr&aacutexima semana tenemos que investigar acerca del tema del proyecto', 'Diana Estefania');
INSERT INTO `mensaje` VALUES (4, 'Ayudame con el deber de ingles, no se como desarrollar el ejercicio de las copias en clase', 'Cindy del Carmen');
INSERT INTO `mensaje` VALUES (5, 'El pr&oacuteximo martes hay reuni&oacuten para elegir el nuevo comite estudiantil, no te olvides', 'Diana Estefania');
INSERT INTO `mensaje` VALUES (6, 'Necesitamos encontrarnos para revisar el documento de historia para avanzar con la exposici&oacuten', 'Diana Estefania');
INSERT INTO `mensaje` VALUES (7, 'Vamos a la biblioteca para encontrar m&aacutes informaci&oacuten acerca del  deber de finanzas', 'Cindy del Carmen');
INSERT INTO `mensaje` VALUES (8, 'Debemos traer el texto gu&iacutea', 'Cindy del Carmen');
INSERT INTO `mensaje` VALUES (243, '', '');
INSERT INTO `mensaje` VALUES (244, '', '');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `perfil`
-- 

CREATE TABLE `perfil` (
  `id` int(11) NOT NULL auto_increment,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `ciudad` varchar(45) NOT NULL,
  `colegio` varchar(45) NOT NULL,
  `profesion` varchar(45) NOT NULL,
  `correo` varchar(45) NOT NULL,
  `contrasena` varchar(45) NOT NULL,
  `imagen_id` int(23) NOT NULL,
  `amigo_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `contraseña_UNIQUE` (`contrasena`),
  UNIQUE KEY `correo_UNIQUE` (`correo`),
  KEY `imagen_id` (`imagen_id`),
  KEY `amigo_id` (`amigo_id`)
) TYPE=MyISAM  AUTO_INCREMENT=7 ;

-- 
-- Volcar la base de datos para la tabla `perfil`
-- 

INSERT INTO `perfil` VALUES (1, 'Cindy del Carmen', 'Rodriguez Reto', 'Guayaquil', 'Cayetano Tarruell', 'Estudiante', 'sandy-1694@hotmail.com', '12345', 1, 2);
INSERT INTO `perfil` VALUES (2, 'Diana Estefania', 'Coello Suarez', 'Catarama', '11 de Octubre', 'Estudiante', 'diascoel@espol.edu.ec', '123456', 2, 1);
INSERT INTO `perfil` VALUES (3, 'Mariuxi', 'Fernandez Hidalgo', 'Quevedo', 'Colegio Americana', 'Estudiante', 'mariuxidesegarra@hotmail.com', '12131415', 3, 2);
INSERT INTO `perfil` VALUES (4, 'Maria Mercedes', 'Baque Leon', 'Guayaquil', 'Amarilis Fuentes Alcivar', 'Estudiante', 'mmbaque@espol.edu.ec', '12345678', 4, 1);
INSERT INTO `perfil` VALUES (5, 'Luis Marcos', 'Orellana Palacio', 'Ambato', '9 de Octubre', 'Profesor', 'lmarcos@hotmail.com', '1213', 5, 2);
INSERT INTO `perfil` VALUES (6, 'Martha Andrea', 'Cortez Zambrano', 'Loja', 'Cristobal Colon', 'Profesor', 'marthazambrano@hotmail.com', '232425', 6, 1);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `publicacion`
-- 

CREATE TABLE `publicacion` (
  `id` int(5) NOT NULL auto_increment,
  `texto` varchar(500) NOT NULL,
  `nombrePerfilFK` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `nombrePerfilFK` (`nombrePerfilFK`)
) TYPE=MyISAM  AUTO_INCREMENT=81 ;

-- 
-- Volcar la base de datos para la tabla `publicacion`
-- 

INSERT INTO `publicacion` VALUES (1, 'El deber de la semana pasada a sido calificado', 'Maria Mercedes');
INSERT INTO `publicacion` VALUES (2, 'Practicas del texto avanzado', 'Martha Andrea');
INSERT INTO `publicacion` VALUES (3, 'Historia de la Revolucion Francesa, videos-documentos', 'Diana Estefania');
INSERT INTO `publicacion` VALUES (4, 'Talleres de Matematicas todos los lunes Lab 105 Cristobal Colon', 'Luis Marcos');
INSERT INTO `publicacion` VALUES (74, '', '');
INSERT INTO `publicacion` VALUES (75, '', '');
INSERT INTO `publicacion` VALUES (76, 'Debes de realizar la tarea de pao', 'Maria Mercedes');
INSERT INTO `publicacion` VALUES (77, '', '');
INSERT INTO `publicacion` VALUES (78, '', '');
INSERT INTO `publicacion` VALUES (79, '', '');
INSERT INTO `publicacion` VALUES (80, '', '');
