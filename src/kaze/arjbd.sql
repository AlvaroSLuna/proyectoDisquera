-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-03-2025 a las 18:37:20
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `arjbd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `albumes`
--

CREATE TABLE `albumes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `numCanciones` int(11) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `fechaLanzamiento` date NOT NULL,
  `idArtista` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `albumes`
--

INSERT INTO `albumes` (`id`, `nombre`, `numCanciones`, `foto`, `fechaLanzamiento`, `idArtista`) VALUES
(1, 'Donde quiero estar', 16, '\"\\src\\quevedo\\dondeQuieroEstar.webp\"', '2023-01-20', 1),
(2, 'Buenas noches', 18, '\"\\src\\quevedo\\BUENAS NOCHES.webp\"', '2024-11-22', 1),
(3, 'DAMN.', 14, '\"\\src\\kendric\\damn.webp\"', '2017-04-14', 2),
(4, 'To Pimp a Butterfly', 16, '\"\\src\\kendric\\topimp.webp\"', '2015-03-15', 2),
(5, 'good kid, m.A.A.d city', 17, '\"\\src\\kendric\\goodKid.webp\"', '2012-10-22', 2),
(6, 'Mr. Morale & the Big Steppers', 19, '\"\\src\\kendric\\Mr. Morale & The Big Steppers_album_cover.webp\"', '2022-05-13', 2),
(7, 'GNX', 12, '\"\\src\\kendric\\GNX_album_cover.webp\"', '2024-01-01', 2),
(8, 'No Encajes', 17, '\"\\src\\kaze\\No Encajes_album_cover.webp\"', '2016-06-10', 3),
(9, 'Suspiros', 8, '\"\\src\\kaze\\Suspiros_album_cover.webp\"', '2015-09-05', 3),
(10, 'Flowsica', 16, '\"\\src\\kaze\\Flowsica_album_cover.webp\"', '2012-01-01', 3),
(11, 'Nombre Dirección', 21, '\"\\src\\kaze\\nombre_direccion.webp\"', '2023-01-01', 3),
(12, 'ANTIPOP', 9, '\"\\src\\kaze\\ANTIPOP_album_cover.webp\"', '2024-12-20', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artistas`
--

CREATE TABLE `artistas` (
  `nombre` varchar(100) NOT NULL,
  `foto` varchar(250) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `id` int(11) NOT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `X` varchar(255) DEFAULT NULL,
  `spotify` varchar(255) DEFAULT NULL,
  `deezer` varchar(255) DEFAULT NULL,
  `tidal` varchar(255) DEFAULT NULL,
  `music` varchar(255) DEFAULT NULL,
  `videoclip` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `artistas`
--

INSERT INTO `artistas` (`nombre`, `foto`, `descripcion`, `id`, `instagram`, `youtube`, `facebook`, `X`, `spotify`, `deezer`, `tidal`, `music`, `videoclip`) VALUES
('Quevedo', '\"\\src\\quevedo\\perfilQuevedo2.webp\"', 'Quevedo nació en Madrid, pero a los pocos meses su familia se trasladó a Brasil, donde vivió hasta los cinco años. Posteriormente, regresaron a España y se establecieron en Las Palmas de Gran Canaria. Allí cursó sus estudios en el Colegio San Antonio', 1, 'https://www.instagram.com/quevedo.pd/', 'https://www.youtube.com/channel/UCYEmGiiM21tGuCEtDJTfP1w', 'https://www.facebook.com/quevedopd/', 'https://x.com/pedrodquevedo?lang=es', 'https://open.spotify.com/intl-es/artist/52iwsT98xCoGgiGntTiR7K?si=63IbesucTCKRWJvm8G5reg', 'https://www.deezer.com/es/artist/6705223', 'https://tidal.com/browse/artist/8997487', 'https://music.apple.com/es/artist/quevedo/377761784', 'https://www.youtube.com/embed/Y9ycSXqtkQ4?si=fvxgjGp3jMq3gV50'),
('Kendrick lamar', '\"\\src\\kendric\\perfilKendric2.webp\"', 'Kendrick Lamar Duckworth (Compton, California, 17 de junio de 1987) es un rapero estadounidense. Lamar es ampliamente considerado como uno de los mejores raperos de su generación gracias a su aclamada obra discográfica que envuelven sus experiencias ', 2, 'https://www.instagram.com/kendricklamar/', 'https://www.youtube.com/channel/UC3lBXcrKFnFAFkfVk5WuKcQ', 'https://www.facebook.com/kendricklamar/?locale=es_ES', 'https://x.com/kendricklamar?lang=es', 'https://open.spotify.com/intl-es/artist/2YZyLoL8N0Wb9xBt1NhZWg?si=21KOJNGkT2itXYKdA5iUWg', 'https://www.deezer.com/es/artist/525046', 'https://tidal.com/browse/artist/3816041', 'https://music.apple.com/cr/artist/kendrick-lamar/368183298', 'https://www.youtube.com/embed/H58vbez_m4E?si=zkM8H3ns8WCVuSz6'),
('Kaze', '\"\\src\\kaze\\perfilKaze2.webp\"', 'Cristian, MC cartagenero de 24 años lleva dándole fuerte al rap desde los 13 años, a base de esfuerzo, constancia y dedicación. Con 16 años empezó a formar parte de carteles acompañando a artistas de nivel internacional como Gordo Master, Duo ', 3, 'https://www.instagram.com/criskaz/', 'https://www.youtube.com/@KazeOficial/featured', 'https://www.facebook.com/kazeoficial/?locale=es_ES', 'https://x.com/kaze_cartagena?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor', 'https://open.spotify.com/intl-es/artist/2X11x8C63wCzAf1WwsIuLg?si=6uCnlKXNQGuw2HakT3hUCg', 'https://www.deezer.com/es/artist/471564', 'https://tidal.com/browse/artist/3613396', 'https://music.apple.com/es/artist/kaze/1404374609', 'https://www.youtube.com/embed/gBF2TqxjJSk?si=yh7pnvKQBcOel3Ws');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `canciones`
--

CREATE TABLE `canciones` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `reproducciones` varchar(250) NOT NULL,
  `idArtista` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `canciones`
--

INSERT INTO `canciones` (`id`, `nombre`, `foto`, `reproducciones`, `idArtista`) VALUES
(1, 'Quevedo: Bzrp Music Sessions, Vol. 52', '\"\\src\\quevedo\\Quevedo_ Bzrp Music Sessions, Vol. 52.webp\"', '697.711.842', 1),
(2, 'Columbia', '\"\\src\\quevedo\\columbia.webp\"', '243.674.130', 1),
(3, 'Sin Señal', '\"\\src\\quevedo\\SIN_SEÑAL.webp\"', '54.005.005', 1),
(4, 'Punto G', '\"\\src\\quevedo\\PUNTO_G.webp\"', '143.535.936', 1),
(5, 'VISTA AL MAR', '\"\\src\\quevedo\\dondeQuieroEstar.webp\"', '147.002.058', 1),
(6, 'HUMBLE.', '\"\\src\\kendric\\damn.webp\"', '1.040.238.290', 2),
(7, 'DNA.', '\"\\src\\kendric\\damn.webp\"', '271.371.651', 2),
(8, 'Alright', '\"\\src\\kendric\\topimp.webp\"', '185.088.860', 2),
(9, 'King Kunta', '\"\\src\\kendric\\topimp.webp\"', '180.182.234', 2),
(10, 'Money Trees', '\"\\src\\kendric\\Money_Trees.webp\"', '21.334.288', 2),
(11, 'CUANDO DESPERTÓ.', '\"\\src\\kaze\\nombre_direccion.webp\"', '2.196.441', 3),
(12, 'EL CIELO', '\"\\src\\kaze\\EL_CIELO.webp\"', '2.126.376', 3),
(13, 'Uueeeee', '\"\\src\\kaze\\Uueeeee.webp\"', '371.427', 3),
(14, 'Modo turbio', '\"\\src\\kaze\\Modo_Turbio.webp\"', '20.230.152', 3),
(15, 'Cómete mi exito', '\"\\src\\kaze\\Cómete_Mi_Éxito.webp\"', '6.791.541', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `nombre` varchar(12) NOT NULL,
  `contraseña` varchar(18) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`nombre`, `contraseña`, `id`) VALUES
('jose', '12345', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `albumes`
--
ALTER TABLE `albumes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idArtista` (`idArtista`);

--
-- Indices de la tabla `artistas`
--
ALTER TABLE `artistas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `foto` (`foto`);

--
-- Indices de la tabla `canciones`
--
ALTER TABLE `canciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idArtista` (`idArtista`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `albumes`
--
ALTER TABLE `albumes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `canciones`
--
ALTER TABLE `canciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `albumes`
--
ALTER TABLE `albumes`
  ADD CONSTRAINT `albumes_ibfk_1` FOREIGN KEY (`idArtista`) REFERENCES `artistas` (`id`);

--
-- Filtros para la tabla `canciones`
--
ALTER TABLE `canciones`
  ADD CONSTRAINT `canciones_ibfk_1` FOREIGN KEY (`idArtista`) REFERENCES `artistas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
