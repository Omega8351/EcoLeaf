-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-10-2019 a las 09:43:19
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_ecoleaf`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_catalogo`
--

CREATE TABLE `tb_catalogo` (
  `codigo_catalogo` int(11) NOT NULL COMMENT 'Código del catálogo',
  `codigo_empresa` int(11) NOT NULL COMMENT 'Código de la empresa a la que pertenece el catálogo',
  `nombre_catalogo` varchar(75) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Nombre del catalogo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tb_catalogo`
--

INSERT INTO `tb_catalogo` (`codigo_catalogo`, `codigo_empresa`, `nombre_catalogo`) VALUES
(1, 1, 'Listado de Productos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_empresa`
--

CREATE TABLE `tb_empresa` (
  `codigo_empresa` int(11) NOT NULL COMMENT 'Código de la empresa',
  `nombre_empresa` varchar(75) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Nombre de la empresa',
  `mision` varchar(500) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Misión de la empresa',
  `vision` varchar(500) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Visión de la empresa',
  `descripcion_empresa` varchar(800) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Descripción de la empresa',
  `logo_empresa` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'URL de la ubicación del logo de la empresa',
  `correo_empresa` varchar(75) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Correo de contacto de la empresa'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tb_empresa`
--

INSERT INTO `tb_empresa` (`codigo_empresa`, `nombre_empresa`, `mision`, `vision`, `descripcion_empresa`, `logo_empresa`, `correo_empresa`) VALUES
(1, 'ECOLEAF S.A. de C.V.', 'Ser reconocidos por ofrecer a nuestros clientes una nueva alternativa ecológica, para reducir el impacto ambiental en nuestra vida cotidiana, a través de la fabricación y comercialización de platos desechables de palma areca y fibras naturales, incorporando tecnología ecológica y diseños innovadores, 100% orgánicos y de excelente calidad.', 'Ser una empresa rentable de biocomercio, líder en el mercado, ofreciendo la más amplia gama de productos amigables con el medio ambiente y manteniendo la calidad de nuestros productos, para satisfacer el sector alimenticio del mercado nacional e internacional. Esto con el fin de reducir la generación de basura, y con ello mejorar nuestro entorno.', 'En nuestro país existe un consumo masivo de productos desechables que generan un gran impacto al medio ambiente es por ello que hemos decidido desarrollar nuevos procesos de producción que contribuyan al desarrollo sustentable de la economía y la sociedad. De esta forma, ha surgido la consideración de la ecología como un componente básico de la filosofía o forma de pensar de nuestro proyecto que da lugar al concepto de Marketing Ecológico y Biocomercio Sostenible a nuestra Empresa denominada ECOLEAF, SA. DE CV. Nuestra empresa EcoLeaf ofrece una alternativa y solución ecológica perfecta para la reducción de desechos generados por la vajilla desechable tradicional, brindándoles a nuestros clientes una alternativa inocua, biodegradable, compostable y de alta calidad.', 'img/Imagen1.png', 'ecoleaf.sa.de.cv@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_productos`
--

CREATE TABLE `tb_productos` (
  `codigo_producto` int(11) NOT NULL COMMENT 'Código del producto',
  `codigo_catalogo` int(11) NOT NULL COMMENT 'Código del catálogo al que pertenece el producto',
  `nombre_producto` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Nombre del producto',
  `descripcion_producto` varchar(300) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Descripción del producto',
  `imagen_producto` varchar(200) COLLATE utf8_unicode_ci NOT NULL COMMENT 'URL de la ubicación de la imagen del producto'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tb_productos`
--

INSERT INTO `tb_productos` (`codigo_producto`, `codigo_catalogo`, `nombre_producto`, `descripcion_producto`, `imagen_producto`) VALUES
(1, 1, 'Plato Cuadrado de Hoja de Palma (8\"x8\")', 'Plato cuadrado desechable de  8”x8” fabricado de hoja de palma 100% Biodegradable. Es apto para utilizar en horno, microondas y congelador, lo que lo convierte en un plato muy versátil y resistente.', 'img/eco1.jpg'),
(2, 1, 'Plato Redondo de Hoja de Palma (6\")', 'Plato redondo desechable de 6” fabricado de hoja de palma. 100% Biodegradable y apto para su uso en horno, microondas y congelador.', 'img/eco2.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_catalogo`
--
ALTER TABLE `tb_catalogo`
  ADD PRIMARY KEY (`codigo_catalogo`),
  ADD KEY `FK_Codigo_Empresa` (`codigo_empresa`);

--
-- Indices de la tabla `tb_empresa`
--
ALTER TABLE `tb_empresa`
  ADD PRIMARY KEY (`codigo_empresa`);

--
-- Indices de la tabla `tb_productos`
--
ALTER TABLE `tb_productos`
  ADD PRIMARY KEY (`codigo_producto`),
  ADD KEY `FK_Codigo_Catalogo` (`codigo_catalogo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tb_catalogo`
--
ALTER TABLE `tb_catalogo`
  MODIFY `codigo_catalogo` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Código del catálogo', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tb_empresa`
--
ALTER TABLE `tb_empresa`
  MODIFY `codigo_empresa` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Código de la empresa', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tb_productos`
--
ALTER TABLE `tb_productos`
  MODIFY `codigo_producto` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Código del producto', AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tb_catalogo`
--
ALTER TABLE `tb_catalogo`
  ADD CONSTRAINT `FK_Codigo_Empresa` FOREIGN KEY (`codigo_empresa`) REFERENCES `tb_empresa` (`codigo_empresa`);

--
-- Filtros para la tabla `tb_productos`
--
ALTER TABLE `tb_productos`
  ADD CONSTRAINT `FK_Codigo_Catalogo` FOREIGN KEY (`codigo_catalogo`) REFERENCES `tb_catalogo` (`codigo_catalogo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
