-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-03-2024 a las 10:01:37
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
-- Base de datos: `bookswap`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `id_administrador` int(11) NOT NULL,
  `codigo_usuario` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`id_administrador`, `codigo_usuario`) VALUES
(1, '222790641'),
(2, '219552306');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras`
--

CREATE TABLE `carreras` (
  `id_carrera` int(11) NOT NULL,
  `carrera` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `carreras`
--

INSERT INTO `carreras` (`id_carrera`, `carrera`) VALUES
(1, 'Ingeniería Informática');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciclos`
--

CREATE TABLE `ciclos` (
  `id_ciclo` int(11) NOT NULL,
  `ciclo` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ciclos`
--

INSERT INTO `ciclos` (`id_ciclo`, `ciclo`) VALUES
(1, '2017A'),
(2, '2017B'),
(3, '2018A'),
(4, '2018B'),
(5, '2019A'),
(6, '2019B'),
(7, '2020A'),
(8, '2020B'),
(9, '2021A'),
(10, '2021B'),
(11, '2022A'),
(12, '2022B'),
(13, '2023A'),
(14, '2023B'),
(15, '2024A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id_libro` int(11) NOT NULL,
  `codigo_usuario` varchar(9) NOT NULL,
  `titulo` varchar(60) NOT NULL,
  `autor` varchar(60) NOT NULL,
  `editorial` varchar(30) NOT NULL,
  `year` varchar(4) DEFAULT NULL,
  `sinopsis` text DEFAULT NULL,
  `num_visitas` int(11) NOT NULL DEFAULT 0,
  `num_prestamos` int(11) NOT NULL DEFAULT 0,
  `ruta_foto_portada` varchar(90) DEFAULT NULL,
  `fecha_agregado` date DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id_libro`, `codigo_usuario`, `titulo`, `autor`, `editorial`, `year`, `sinopsis`, `num_visitas`, `num_prestamos`, `ruta_foto_portada`, `fecha_agregado`, `status`) VALUES
(1, '222790641', 'Juego de Tronos', 'George R. R. Martin', 'Debolsillo', '', 'Tras el largo verano, el invierno se acerca a los Siete Reinos. Lord Eddars Stark, señor de Invernalia, deja sus dominios para unirse a la corte del rey Robert Baratheon el Usurpador, hombre díscolo y otrora guerrero audaz cuyas mayores aficiones son comer, beber y engendrar bastardos. Eddard Stark desempeñará el cargo de Mano del Rey e intentará desentrañar una maraña de intrigas que pondrá en peligro su vida... y la de los suyos. En un mundo cuyas estaciones duran décadas y en el que retazos de una magia inmemorial y olvidada surgen en los rincones más sombrios y maravillosos, la traición y la lealtad, la compasión y la sed de venganza, el amor y el poder hacen del juego de tronos una poderosa trampa que atrapa en sus fauces a los personajes... y al lector.', 0, 0, 'imagenes/libros/juego_de_tronos_1.jpg', '2024-03-26', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamos`
--

CREATE TABLE `prestamos` (
  `id_prestamo` int(11) NOT NULL,
  `codigo_usuario_origen` varchar(9) NOT NULL,
  `codigo_usuario_destino` varchar(9) NOT NULL,
  `id_libro` int(11) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reseñas`
--

CREATE TABLE `reseñas` (
  `id_reseña` int(11) NOT NULL,
  `codigo_usuario_evaluador` varchar(9) NOT NULL,
  `codigo_usuario_evaluado` varchar(9) NOT NULL,
  `id_prestamo` int(11) NOT NULL,
  `puntuacion` varchar(5) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `status_usuario`
--

CREATE TABLE `status_usuario` (
  `id_status` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `status_usuario`
--

INSERT INTO `status_usuario` (`id_status`, `status`) VALUES
(1, 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `strikes`
--

CREATE TABLE `strikes` (
  `id_strike` int(11) NOT NULL,
  `codigo_usuario` varchar(9) NOT NULL,
  `id_administrador` int(11) NOT NULL,
  `detalles` varchar(50) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombres` varchar(40) NOT NULL,
  `apellidos` varchar(40) NOT NULL,
  `codigo_usuario` varchar(9) NOT NULL,
  `carrera` int(11) NOT NULL,
  `ciclo_ingreso` int(11) NOT NULL,
  `correo` varchar(45) NOT NULL,
  `password` varchar(255) NOT NULL,
  `ruta_foto_perfil` varchar(100) NOT NULL,
  `ruta_foto_credencial` varchar(100) NOT NULL,
  `num_prestamos` int(11) NOT NULL DEFAULT 0,
  `num_prestados` int(11) NOT NULL DEFAULT 0,
  `num_strikes` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombres`, `apellidos`, `codigo_usuario`, `carrera`, `ciclo_ingreso`, `correo`, `password`, `ruta_foto_perfil`, `ruta_foto_credencial`, `num_prestamos`, `num_prestados`, `num_strikes`, `status`) VALUES
(0, 'Anónimo', '', '0', 0, 0, '', '', '', '', 0, 0, 0, 1),
(1, 'Luis Angel', 'De La Cruz Ascencio', '222790641', 1, 12, 'luis.delacruz9064@alumnos.udg.mx', '1234', '', '', 0, 0, 0, 1),
(2, 'Diego Ivan', 'Hernandez Muñoz', '219552306', 1, 12, 'diego.hernandez5523@alumnos.udg.mx', '1234', '', '', 0, 0, 0, 1),
(3, 'Brandon', 'Herrera Hernandez', '218535254', 1, 12, 'brandon.herrera5352@alumnos.udg.mx', '1234', '', '', 0, 0, 0, 1),
(4, 'Jorge Isaac', 'Aguilar Olivares', '219528685', 1, 12, 'jorge.aguilar5286@alumnos.udg.mx', '1234', '', '', 0, 0, 0, 1),
(5, 'Cristian Isai', 'Orozco Jimenez', '222790978', 1, 12, 'cristian.orozco9097@alumnos.udg.mx', '1234', '', '', 0, 0, 0, 1),
(6, 'Gerson Ismael', 'Flores Sanchez', '222791192', 1, 12, 'gerson.flores9119@alumnos.udg.mx', '1234', '', '', 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `waitlist`
--

CREATE TABLE `waitlist` (
  `id_waitlist` int(11) NOT NULL,
  `codigo_usuario` varchar(9) NOT NULL,
  `id_libro` int(11) NOT NULL,
  `turno` int(11) NOT NULL,
  `fecha_inicio_turno` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wishlist`
--

CREATE TABLE `wishlist` (
  `id_wishlist` int(11) NOT NULL,
  `codigo_usuario` varchar(9) NOT NULL,
  `id_libro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `wishlist`
--

INSERT INTO `wishlist` (`id_wishlist`, `codigo_usuario`, `id_libro`) VALUES
(1, '222790641', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id_administrador`);

--
-- Indices de la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD PRIMARY KEY (`id_carrera`);

--
-- Indices de la tabla `ciclos`
--
ALTER TABLE `ciclos`
  ADD PRIMARY KEY (`id_ciclo`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id_libro`);

--
-- Indices de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD PRIMARY KEY (`id_prestamo`);

--
-- Indices de la tabla `reseñas`
--
ALTER TABLE `reseñas`
  ADD PRIMARY KEY (`id_reseña`);

--
-- Indices de la tabla `status_usuario`
--
ALTER TABLE `status_usuario`
  ADD PRIMARY KEY (`id_status`);

--
-- Indices de la tabla `strikes`
--
ALTER TABLE `strikes`
  ADD PRIMARY KEY (`id_strike`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `waitlist`
--
ALTER TABLE `waitlist`
  ADD PRIMARY KEY (`id_waitlist`);

--
-- Indices de la tabla `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id_wishlist`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `id_administrador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `carreras`
--
ALTER TABLE `carreras`
  MODIFY `id_carrera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `ciclos`
--
ALTER TABLE `ciclos`
  MODIFY `id_ciclo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id_libro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  MODIFY `id_prestamo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reseñas`
--
ALTER TABLE `reseñas`
  MODIFY `id_reseña` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `status_usuario`
--
ALTER TABLE `status_usuario`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `strikes`
--
ALTER TABLE `strikes`
  MODIFY `id_strike` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `waitlist`
--
ALTER TABLE `waitlist`
  MODIFY `id_waitlist` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id_wishlist` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
