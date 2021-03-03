-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 03-03-2021 a las 16:51:20
-- Versión del servidor: 5.6.35
-- Versión de PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `galeria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `authors`
--

CREATE TABLE `authors` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `email` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `password` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `enabled` int(2) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `authors`
--

INSERT INTO `authors` (`id`, `name`, `email`, `password`, `enabled`, `created`) VALUES
(13, 'Mario', 'marpul3@hotmail.com', '347f8685238fddcc3d8ee1003d325a09', 1, '2021-02-26 20:23:52'),
(14, 'Carlos', 'carlos@gmail.com', 'dc599a9972fde3045dab59dbd1ae170b', 1, '2021-02-26 20:24:44'),
(7, 'pepa', 'pepa@gmail.com', '281ffbf5eb2a3916b9c1eb8f28637836', 0, '2021-02-13 01:38:31'),
(21, 'Marta', 'marta@gmail.com', 'a763a66f984948ca463b081bf0f0e6d0', 1, '2021-02-26 20:35:40'),
(22, 'Javier', 'javi@gmail.com', 'a14f8a540e78dae706d255750010a0f8', 1, '2021-02-26 20:38:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `name` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `file` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `size` int(11) NOT NULL,
  `text` text COLLATE latin1_spanish_ci NOT NULL,
  `enabled` int(11) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `images`
--

INSERT INTO `images` (`id`, `author_id`, `name`, `file`, `size`, `text`, `enabled`, `created`) VALUES
(26, 7, 'Isla', 'isla.jpg', 21351, 'Foto isla', 1, '2021-02-26 20:38:22'),
(25, 21, 'Puente', 'puente.jpg', 152114, 'Foto puente', 1, '2021-02-26 20:37:44'),
(23, 14, 'Paraiso ', 'paraiso.jpg', 220084, 'foto paraiso', 1, '2021-02-26 20:36:09'),
(24, 13, 'castillo', 'castillo.jpg', 47127, 'foto castillo', 1, '2021-02-26 20:37:13'),
(27, 13, 'Mi foto', 'IMAG0943.jpg', 890086, 'Foto ', 1, '2021-02-26 20:41:28');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT de la tabla `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;