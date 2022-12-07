-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-12-2022 a las 09:12:15
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `desarollo_aplicaciones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `idproducto` int(11) NOT NULL,
  `nombre_producto` varchar(100) COLLATE utf8_bin NOT NULL,
  `precio` float NOT NULL,
  `cantidad` int(11) NOT NULL,
  `url_imagen` varchar(500) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `carrito`
--

INSERT INTO `carrito` (`idproducto`, `nombre_producto`, `precio`, `cantidad`, `url_imagen`) VALUES
(2, 'dfdg', 24000, 5, 'dfgdf'),
(0, 'sdf', 24000, 5, 'sdfsd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `idcategoria` int(11) NOT NULL,
  `nombre_categoria` varchar(100) COLLATE utf8_bin NOT NULL,
  `descripcion` varchar(150) COLLATE utf8_bin NOT NULL,
  `fechacreacion` timestamp NOT NULL DEFAULT current_timestamp(),
  `url_imagen` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`idcategoria`, `nombre_categoria`, `descripcion`, `fechacreacion`, `url_imagen`) VALUES
(1, 'Computadoras', 'Computadoras laptops o desktops', '2022-11-23 05:07:18', 'app/img/laptop7.jpg'),
(2, 'Celulares', 'Smartphones de cualquier marca', '2022-11-23 05:07:18', 'app/img/celular2.png'),
(3, 'Tablets ', 'Tablets Adroid y IOS', '2022-11-23 05:11:49', 'app\\img\\IPAD1.jpg'),
(4, 'Perifericos', 'Teclados, mouses, cables, adaptadores', '2022-11-23 05:11:49', 'app/img/XBOXCONTROL.jpg'),
(5, 'Smarthome', 'Dispositivos para hacer tu casa inteligente, alexa,homepod, bombillos inteligentes, etc', '2022-11-23 05:13:05', 'app\\img\\smarthome1.jpg'),
(9, 'Gamer', 'Dispositivos gamers', '2022-12-06 05:26:08', 'app/img/gamercaregoria.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idproducto` int(11) NOT NULL,
  `nombre_producto` varchar(100) COLLATE utf8_bin NOT NULL,
  `idcategoria` int(11) NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_bin NOT NULL,
  `precio` float NOT NULL,
  `cantidad` int(11) NOT NULL,
  `url_imagen` varchar(100) COLLATE utf8_bin NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idproducto`, `nombre_producto`, `idcategoria`, `descripcion`, `precio`, `cantidad`, `url_imagen`, `fecha_creacion`) VALUES
(7, 'HP 15-DY2033NR', 1, 'i7-1165G7/8GB/256GB SSD/LED 15.6″/W11 12MG', 25995, 8, 'app/img/laptop4.jpg', '2022-11-17 06:00:00'),
(57, 'Dell Vostro 3400', 1, 'i5-1135G7/8GB/SSD 256GB/14″', 17500, 10, 'app\\img\\laptop1.png', '2022-12-06 03:26:01'),
(58, 'Asus TUF', 1, 'I7-11370H/8GB/512GB SSD/LED 15.6″ 144hz/RTX 3050TI/W10 12MG', 32000, 5, 'app/img/laptop3.jpg', '2022-12-06 03:39:37'),
(59, 'Dell Latitude 3520', 1, 'i5-1135G7/8GB/256GB SSD/15.6″/W10P 4G6X1 12MG', 26500, 18, 'app/img/laptop5.jpg', '2022-12-06 04:30:39'),
(60, 'HP Victus', 1, '12500H/8GB/512GB SSD/LED 15.6″/RTX 3050 4GB /W11H 12MG', 28995, 3, 'app/img/laptop6.jpg', '2022-12-06 04:31:42'),
(61, 'HP ProBook 640 G1', 1, '4300/4GB/SSD 128GB/LED 14″/W10P', 10000, 10, 'app/img/laptop7.jpg', '2022-12-06 04:33:18'),
(62, 'Dell Latitude 5420', 1, 'Dell Latitude 5420 i7-1165G7/8GB/256GB SSD/14″/W10P 36MG', 42000, 5, 'app/img/laptop8.jpg', '2022-12-06 04:35:08'),
(63, 'Dell Latitude 5520', 1, 'Dell Latitude 5520 i5-1135G7/8GB/256GB SSD/15.6″/W10P 4G6X1 36MG', 32000, 7, 'app/img/laptop9.jpg', '2022-12-06 04:38:14'),
(64, 'APPLE IPHONE X 256GB', 2, 'Procesador: Apple A11 Bionic/RAM: 3GB/Almacenamiento: 256GB', 7695, 5, 'app/img/celular1.png', '2022-12-06 05:12:12'),
(65, 'APPLE IPHONE 13 PRO', 2, 'A15 Bionic/128GB', 30000, 5, 'app/img/celular2.png', '2022-12-06 05:13:57'),
(66, 'APPLE IPHONE 13 512GB', 2, 'A15 Bionic/128GB', 28500, 3, 'app/img/celular3.png', '2022-12-06 05:15:22'),
(67, 'SAMSUNG GALAXY S21', 2, 'Snapdragon 888 2.84GHz/RAM: 8GB/128GB', 11800, 18, 'app/img/celular4.png', '2022-12-06 05:19:54'),
(68, 'MONITOR MSI OPTIX G241VC', 9, 'CURVO,24 FHD (1920X1080) 75HZ, HDMI', 5500, 10, 'app/img/monitorgamer.png', '2022-12-06 05:32:56'),
(70, 'TARJETA DE VIDEO GEFORCE GTX 1660 OC', 9, '6GB DDR5 GIGABYE GTX GV-N1660OC-6GD', 19000, 5, 'app/img/tarjetav1.jpg', '2022-12-06 05:39:48'),
(71, 'Silla Gamer Vorttek', 9, 'Negro/Rojo serie Pro VK-868 3MG', 7600, 18, 'app/img/silla1.jpg', '2022-12-06 05:42:12'),
(72, 'Kit de Teclado y Mouse USB Razer', 9, 'Layout RZ84-02740300-B311 12MG', 1500, 7, 'app/img/razer1.jpg', '2022-12-06 05:44:09'),
(73, 'Monitor LED 27″ AOC', 9, 'CQ27G2 2HDMI/DP 1ms 144Hz Curvo 12MG', 9495, 5, 'app/img/monitorg2.jpg', '2022-12-06 05:45:17'),
(74, 'Teclado USB Gamer Aula', 9, 'K2 38 Botones RGB', 1000, 2, 'app/img/teclado1.jpg', '2022-12-06 05:46:37'),
(75, 'Mousepad Gaming Vorttek', 9, 'VK-MP3080 Gris/Negro NTG', 500, 30, 'app/img/mousepad1.jpg', '2022-12-06 05:47:45'),
(76, 'Mouse USB Gamer Aula', 9, 'S30 2400DPI RGB 3MG', 700, 15, 'app/img/mouse1.jpg', '2022-12-06 05:48:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuario` varchar(20) COLLATE utf8_bin NOT NULL,
  `usuario` varchar(500) COLLATE utf8_bin NOT NULL,
  `contrasena` varchar(128) COLLATE utf8_bin NOT NULL,
  `email` varchar(128) COLLATE utf8_bin NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `creadoel` timestamp NOT NULL DEFAULT current_timestamp(),
  `modificado_el` timestamp NOT NULL DEFAULT current_timestamp(),
  `es_admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `usuario`, `contrasena`, `email`, `fecha_nacimiento`, `creadoel`, `modificado_el`, `es_admin`) VALUES
('atresk', 'Atreus Kratos ', '1010', '123456@usap.edu', '2000-01-01', '2022-11-18 03:06:47', '2022-11-18 03:06:47', 1),
('juanp', 'Juan Perdomo', '0000', '1165022@usap.edu', '1990-05-02', '2022-11-18 03:04:42', '2022-11-18 03:04:42', 1),
('malemanw', 'Marco Aleman', '123', '219003@usap.edu', '1994-11-07', '2022-11-18 03:01:53', '2022-11-18 03:01:53', 1),
('manzanc', 'Cesar Manzanares', '8888', '1122334@usap.edu', '1994-05-02', '2022-11-18 03:03:28', '2022-11-18 03:03:28', 1),
('pedroz', 'Pedro Zavala', '1111', '2225065@usap.edu', '1900-01-02', '2022-11-18 03:05:29', '2022-11-18 03:05:29', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD KEY `idproducto` (`idproducto`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`idcategoria`),
  ADD KEY `idcategoria` (`idcategoria`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idproducto`),
  ADD KEY `idproducto` (`idproducto`),
  ADD KEY `idcategoria` (`idcategoria`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `idcategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idproducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`idcategoria`) REFERENCES `categorias` (`idcategoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
