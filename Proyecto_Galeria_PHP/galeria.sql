-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.14-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.1.0.6116
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para galeria
CREATE DATABASE IF NOT EXISTS `galeria` /*!40100 DEFAULT CHARACTER SET latin1 COLLATE latin1_spanish_ci */;
USE `galeria`;

-- Volcando estructura para tabla galeria.authors
CREATE TABLE IF NOT EXISTS `authors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `email` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `password` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `enabled` int(2) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- Volcando datos para la tabla galeria.authors: 6 rows
/*!40000 ALTER TABLE `authors` DISABLE KEYS */;
INSERT INTO `authors` (`id`, `name`, `email`, `password`, `enabled`, `created`) VALUES
	(13, 'Mario', 'marpul3@hotmail.com', '347f8685238fddcc3d8ee1003d325a09', 1, '2021-02-26 20:23:52'),
	(14, 'Carlos', 'carlos@gmail.com', 'dc599a9972fde3045dab59dbd1ae170b', 1, '2021-02-26 20:24:44'),
	(7, 'pepa', 'pepa@gmail.com', '281ffbf5eb2a3916b9c1eb8f28637836', 0, '2021-02-13 01:38:31'),
	(21, 'Marta', 'marta@gmail.com', 'a763a66f984948ca463b081bf0f0e6d0', 1, '2021-02-26 20:35:40'),
	(22, 'Javier', 'javi@gmail.com', 'a14f8a540e78dae706d255750010a0f8', 1, '2021-02-26 20:38:59'),
	(23, 'luis', 'luis@gmail.com', '502ff82f7f1f8218dd41201fe4353687', 1, '2021-03-03 15:32:34');
/*!40000 ALTER TABLE `authors` ENABLE KEYS */;

-- Volcando estructura para tabla galeria.images
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author_id` int(11) NOT NULL,
  `name` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `file` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `size` int(11) NOT NULL,
  `text` text COLLATE latin1_spanish_ci NOT NULL,
  `enabled` int(11) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- Volcando datos para la tabla galeria.images: 5 rows
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` (`id`, `author_id`, `name`, `file`, `size`, `text`, `enabled`, `created`) VALUES
	(26, 7, 'Isla', 'isla.jpg', 21351, 'Foto isla', 1, '2021-02-26 20:38:22'),
	(25, 21, 'Puente', 'puente.jpg', 152114, 'Foto puente', 1, '2021-02-26 20:37:44'),
	(23, 14, 'Paraiso ', 'paraiso.jpg', 220084, 'foto paraiso', 1, '2021-02-26 20:36:09'),
	(24, 13, 'castillo', 'castillo.jpg', 47127, 'foto castillo', 1, '2021-02-26 20:37:13'),
	(27, 13, 'Mi foto', 'IMAG0943.jpg', 890086, 'Foto ', 1, '2021-02-26 20:41:28');
/*!40000 ALTER TABLE `images` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
