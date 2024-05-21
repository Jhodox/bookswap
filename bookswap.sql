-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-05-2024 a las 11:29:40
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
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`id_administrador`, `id_usuario`) VALUES
(1, 1),
(2, 2);

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
(1, 'Ingeniería Informática'),
(2, 'Ingeniería Biomédica'),
(3, 'Ingeniería Civil'),
(4, 'Ingeniería en Alimentos y Biotecnología'),
(5, 'Ingeniería en Computación'),
(6, 'Ingeniería en Comunicaciones y Electrónica'),
(7, 'Ingeniería en Logística y Transporte'),
(8, 'Ingeniería en Topografía Geomática'),
(9, 'Ingeniería Fotónica'),
(10, 'Ingeniería Industrial'),
(11, 'Ingeniería Mecánica Eléctrica'),
(12, 'Licenciatura en Químico Farmacéutico Biólogo'),
(13, 'Ingeniería Química'),
(14, 'Ingeniería Robótica'),
(15, 'Licenciatura en Ciencia de Materiales'),
(16, 'Licenciatura en Física'),
(17, 'Licenciatura en Matemáticas'),
(18, 'Licenciatura en Química'),
(19, 'Ingeniería Biomédica'),
(20, 'Ingeniería Civil'),
(21, 'Ingeniería en Alimentos y Biotecnología'),
(22, 'Ingeniería en Computación'),
(23, 'Ingeniería en Comunicaciones y Electrónica'),
(24, 'Ingeniería en Logística y Transporte'),
(25, 'Ingeniería en Topografía Geomática'),
(26, 'Ingeniería Fotónica'),
(27, 'Ingeniería Industrial'),
(28, 'Ingeniería Mecánica Eléctrica'),
(29, 'Licenciatura en Químico Farmacéutico Biólogo'),
(30, 'Ingeniería Química'),
(31, 'Ingeniería Robótica'),
(32, 'Licenciatura en Ciencia de Materiales'),
(33, 'Licenciatura en Física'),
(34, 'Licenciatura en Matemáticas'),
(35, 'Licenciatura en Química');

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
  `id_usuario` int(11) NOT NULL,
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

INSERT INTO `libros` (`id_libro`, `id_usuario`, `titulo`, `autor`, `editorial`, `year`, `sinopsis`, `num_visitas`, `num_prestamos`, `ruta_foto_portada`, `fecha_agregado`, `status`) VALUES
(1, 1, 'Juego de Tronos', 'George R. R. Martin', 'Debolsillo', '', 'Tras el largo verano, el invierno se acerca a los Siete Reinos. Lord Eddars Stark, señor de Invernalia, deja sus dominios para unirse a la corte del rey Robert Baratheon el Usurpador, hombre díscolo y otrora guerrero audaz cuyas mayores aficiones son comer, beber y engendrar bastardos. Eddard Stark desempeñará el cargo de Mano del Rey e intentará desentrañar una maraña de intrigas que pondrá en peligro su vida... y la de los suyos. En un mundo cuyas estaciones duran décadas y en el que retazos de una magia inmemorial y olvidada surgen en los rincones más sombrios y maravillosos, la traición y la lealtad, la compasión y la sed de venganza, el amor y el poder hacen del juego de tronos una poderosa trampa que atrapa en sus fauces a los personajes... y al lector.', 53, 0, 'imagenes/libros/1_juego_de_tronos_222790641.jpg', '2024-03-26', 1),
(2, 1, 'Choque de Reyes', 'George R. R. Martin', 'Debolsillo', NULL, 'Choque de reyes continua donde acabó el Juego de Tronos. La guerra civil se ha extendido por los reinos de Poniente y pasará a conocerse como la Guerra de los Cinco Reyes. Mientras, la Guardia de la Noche envía un grupo de reconocimiento al norte, más allá del muro. En el lejano este, Daenerys Targaryen continua con su misión: volver a los Siete Reinos para reconquistarlos.', 47, 0, 'imagenes/libros/2_choque_de_reyes_222790641.jpg', '2024-04-02', 2),
(4, 1, 'Tormenta de Espadas', 'George R. R. Martin', 'DeBolsillo', '2010', 'Las huestes de los fugaces reyes de Poniente, descompuestas en hordas, asuelan y esquilman una tierra castigada por la guerra e indefensa ante un invierno que se anuncia inusitadamente crudo. Las alianzas nacen y se desvanecen como volutas de humo bajo el viento helado del Norte. Ajena a las intrigas palaciegas, e ignorante del auténtico peligro en ciernes, la Guardia de la Noche se ve desbordada por los salvajes. Y al otro lado del mundo, Daenerys Targaryen intenta reclutar en las Ciudades Libres un ejército con el que desembarcar en su tierra.\r\nMartin hace que lo imposible parezca sencillo. Tormenta de espadas confirma Canción de hielo y fuego como un hito de la fantasía épica. Brutal y poética, conmovedora y cruel, la magia de Martin, como la del mundo de Poniente, necesita apenas una pincelada para cautivar al lector, hacerlo reír y llorar, y conseguir que el asombro ceda paso a la más profunda admiración por la serie.', 10, 0, 'imagenes/libros/4_tormenta_de_espadas_222790641.jpg', '2024-04-03', 1),
(7, 2, 'Xochitl', 'Scarlett Lindero', 'Planeta México', '2023', 'De vender gelatinas a buscar la Presidencia de México', 12, 0, 'imagenes/libros/7_xochitl_219552308.jpg', '2024-05-06', 2),
(8, 1, 'Festín de Cuervos', 'George R. R. Martin', 'DeBolsillo', '2009', '', 8, 0, 'imagenes/libros/8_festín_de_cuervos_222790641.jpg', '2024-05-06', 3),
(9, 7, 'Los Juegos del Hambre', 'Suzanne Collins', 'Penguin Random House ', '2021', 'En una oscura versión del futuro próximo, doce chicos y doce chicas se ven obligados a participar en un reality show llamado los Juegos del Hambre.', 3, 0, 'imagenes/libros/9_los_juegos_del_hambre_219552308.jpg', '2024-05-08', 1),
(10, 3, 'El diario de Greg 1', 'Jeff Kinney', 'Rba Serres', '2009', 'Diario de Greg, Libro 1 nos ofrece una visión única y humorística de la vida de un adolescente común y corriente, con todas las dificultades y momentos embarazosos que esto implica. El humor y la escritura de Jeff Kinney hacen que esta serie sea muy entretenida y querida por los lectores', 3, 0, 'imagenes/libros/10_el_diario_de_greg_1_218535254.jpg', '2024-05-11', 1),
(11, 3, 'El diario de Greg 2 La ley de Rodrick', 'Jeff Kinney', 'Rba Serres', '2010', 'En Diario de Greg 2, Greg se enfrenta a un nuevo y emocionante capítulo de su vida, la escuela secundaria. Sin embargo, pronto se da cuenta de que la vida en la secundaria no es tan fácil como esperaba. Durante las vacaciones de verano, Greg pasa por una experiencia vergonzosa que su hermano conoce y amenaza con revelar a sus amigos si Greg se chiva de algo.', 3, 0, 'imagenes/libros/11_el_diario_de_greg_2_218535254.jpg', '2024-05-11', 1),
(12, 3, 'El diario de Greg 3 Es el colmo!', 'Jeff Kinney', 'Rba Serres', '2011', 'Esto es el colmo de Jeff Kinney Seamos realistas, Greg Heffley nunca va a dejar de ser un pringao y alguien debería explicárselo a su padre. Resulta que Frank Heffley cree que su hijo puede cambiar. Y para endurecerlo, a apuntado a Greg a todo tipo de deportes de competición que para Greg es pan comido.', 3, 0, 'imagenes/libros/12_el_diario_de_greg_3_218535254.jpg', '2024-05-11', 1),
(13, 3, 'El diario de Greg 4 Días de perros', 'Jeff Kinney', 'Rba Serres', '2012', 'Durante las vacaciones de verano, suele hacer buen tiempo, y la mayoría de las personas se divierten al aire libre. Sin embargo, nos preguntamos dónde estará Greg, pues en casa, jugando a los videojuegos prácticamente a oscuras. Greg se reconoce como una normal y está viviendo su última fantasía estival, sin responsabilidades ni normas.', 3, 0, 'imagenes/libros/13_el_diario_de_greg_4_218535254.jpg', '2024-05-11', 1),
(14, 3, 'El diario de Greg 5 La cruda Realidad', 'Jeff Kinney', 'Rba Serres', '2013', 'En esta quinta entrega de la serie Diario de Greg, seguimos las peripecias de Greg Heffley mientras enfrenta los desafíos de crecer y lidiar con las responsabilidades de la adolescencia.', 2, 0, 'imagenes/libros/14_el_diario_de_greg_5_218535254.jpg', '2024-05-11', 1),
(15, 3, 'El diario de Greg 6 Sin salida', 'Jeff Kinney', 'Rba Serres', '2014', 'La historia sigue las desventuras de Greg Heffley, quien se encuentra en apuros. Ha lastimado una propiedad de la escuela y lo han declarado principal sospechoso, aunque él insiste en que es inocente o, al menos, algo parecido. Pero justo cuando las autoridades están a punto de atrapar al sospechoso, una gigantesca tormenta de nieve cae en el barrio, dejando a la familia Heffley atrapada en su casa. Greg sabe que, cuando se derrita la nieve, tendrá que enfrentarse a los investigadores de la escuela.', 2, 0, 'imagenes/libros/15_el_diario_de_greg_6_sin_salida_218535254.jpg', '2024-05-11', 1),
(16, 3, 'El diario de Greg 7', 'Jeff Kinney', 'Rba Serres', '2015', 'La fiesta de San Valentín ha puesto el colegio de Greg patas arriba. Greg se ha lanzado a buscar plan, pero enseguida ha empezado a preocuparse por si se queda solo en la fría noche. Su mejor amigo, Rowley, tampoco tiene planes, pero una sorpresa inesperada hará que Greg consiga pareja para el baile y dejará a Rowley como el tercero en discordia. Sin embargo, en una noche tan especial, nunca se sabe quién acabará siendo afortunado en el amor', 2, 0, 'imagenes/libros/16_el_diario_de_greg_7_218535254.jpg', '2024-05-11', 1),
(17, 3, 'El diario de Greg 8 Mala suerte', 'Jeff Kinney', 'Rba Serres', '2016', 'Greg está atravesando por una mala racha. Su mejor amigo, Rowley Jefferson, pasa de él desde que se ha echado novia. La cosa está tan mal que incluso su hermano menor, Manny, tiene más amigos que él. Sin embargo, Greg no piensa rendirse y está dispuesto a todo con tal de convertirse, de una vez por todas, en el tío más popular del colegio.', 2, 0, 'imagenes/libros/17_el_diario_de_greg_8_mala_suerte_218535254.jpg', '2024-05-11', 1),
(18, 3, 'El diario de Greg 9 Carretera y manta', 'Jeff Kinney', 'Rba Serres', '2017', 'En este libro, Greg Heffley narra el comienzo de sus vacaciones escolares de verano en el mes de junio. Su madre, tras hojear un ejemplar de la revista Disfrutar en Familia, decide seguir una de las propuestas contenidas en ella. Viajar por carretera en familia suena divertido, Bueno, eso es lo que dicen, a no ser que se trate de los Heffley.', 2, 0, 'imagenes/libros/18_el_diario_de_greg_9_carretera_y_manta_218535254.jpg', '2024-05-11', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamos`
--

CREATE TABLE `prestamos` (
  `id_prestamo` int(11) NOT NULL,
  `id_usuario_owner` int(11) NOT NULL,
  `id_usuario_destino` int(11) NOT NULL,
  `id_libro` int(11) NOT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `status_prestamo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `prestamos`
--

INSERT INTO `prestamos` (`id_prestamo`, `id_usuario_owner`, `id_usuario_destino`, `id_libro`, `fecha_inicio`, `fecha_fin`, `status_prestamo`) VALUES
(3, 1, 2, 2, NULL, NULL, 2),
(4, 1, 2, 1, NULL, NULL, 6),
(5, 1, 1, 1, NULL, NULL, 6),
(6, 1, 3, 1, '2024-05-21', '2024-05-24', 4),
(7, 2, 1, 7, NULL, NULL, 2),
(8, 1, 0, 4, NULL, NULL, 6),
(9, 3, 4, 18, NULL, NULL, 2),
(10, 1, 6, 1, '2024-05-21', '2024-05-23', 4),
(11, 1, 7, 1, NULL, NULL, 1),
(12, 3, 9, 10, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reseñas`
--

CREATE TABLE `reseñas` (
  `id_reseña` int(11) NOT NULL,
  `id_usuario_evaluador` varchar(9) NOT NULL,
  `id_usuario_evaluado` varchar(9) NOT NULL,
  `id_prestamo` int(11) NOT NULL,
  `puntuacion` varchar(5) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `status_libro`
--

CREATE TABLE `status_libro` (
  `id_status` int(11) NOT NULL,
  `status_nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `status_libro`
--

INSERT INTO `status_libro` (`id_status`, `status_nombre`) VALUES
(1, 'Disponible'),
(2, 'En espera'),
(3, 'Inactivo'),
(4, 'Prestado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `status_prestamos`
--

CREATE TABLE `status_prestamos` (
  `id_status` int(11) NOT NULL,
  `status_nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `status_prestamos`
--

INSERT INTO `status_prestamos` (`id_status`, `status_nombre`) VALUES
(1, 'Solicitado'),
(2, 'Aceptado'),
(3, 'En proceso'),
(4, 'Concluído'),
(5, 'Fecha de entrega excedida'),
(6, 'Denegado');

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
(1, 'Validado'),
(2, 'Sin validar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `strikes`
--

CREATE TABLE `strikes` (
  `id_strike` int(11) NOT NULL,
  `id_usuario` varchar(9) NOT NULL,
  `id_administrador` int(11) NOT NULL,
  `detalles` varchar(50) NOT NULL,
  `fecha` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `strikes`
--

INSERT INTO `strikes` (`id_strike`, `id_usuario`, `id_administrador`, `detalles`, `fecha`, `status`) VALUES
(1, '1', 1, 'Se robó un libro', '2024-05-01', 0),
(2, '5', 0, 'Me cae mal', '2024-05-20', 2),
(3, '9', 0, 'por negro', '0000-00-00', 2),
(4, '9', 0, 'hambreado', '0000-00-00', 2),
(5, '9', 0, 'arrastrado', '0000-00-00', 2);

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
(0, 'Anónimo', '', '0', 0, 0, '', '', 'imagenes/perfil/perfil_jpg', 'imagenes/credenciales/credencial_jpg', 0, 0, 0, 1),
(1, 'Angel', 'De La Cruz', '222790641', 1, 12, 'luis.delacruz9064@alumnos.udg.mx', '81dc9bdb52d04dc20036dbd8313ed055', 'imagenes/perfil/perfil_222790641.gif', 'imagenes/credenciales/credencial_222790641.jpeg', 0, 0, 1, 1),
(2, 'Diego', 'Hernández', '219552306', 1, 12, 'diego.hernandez5523@alumnos.udg.mx', '81dc9bdb52d04dc20036dbd8313ed055', 'imagenes/perfil/perfil_219552306.jpg', '', 0, 0, 0, 2),
(3, 'Brandon', 'Herrera', '218535254', 1, 12, 'brandon.herrera5352@alumnos.udg.mx', '81dc9bdb52d04dc20036dbd8313ed055', 'imagenes/perfil/perfil_218535254.jpg', 'imagenes/credenciales/credencial_218535254.jpg', 0, 0, 0, 1),
(4, 'Jorge', 'Aguilar', '219528685', 1, 12, 'jorge.aguilar5286@alumnos.udg.mx', '81dc9bdb52d04dc20036dbd8313ed055', '', '', 0, 0, 0, 2),
(5, 'Cristian', 'Orozco', '222790978', 1, 12, 'cristian.orozco9097@alumnos.udg.mx', '81dc9bdb52d04dc20036dbd8313ed055', 'imagenes/perfil/perfil_222790978.jpg', 'imagenes/credenciales/credencial_222790978.jpg', 0, 0, 3, 2),
(6, 'Gerson', 'Flores', '222791192', 1, 12, 'gerson.flores9119@alumnos.udg.mx', '81dc9bdb52d04dc20036dbd8313ed055', '', '', 0, 0, 0, 1),
(7, 'Diego', 'Hernandez', '219552308', 1, 12, 'ivan.prueba@alumnos.udg.mx', '25d55ad283aa400af464c76d713c07ad', 'imagenes/perfil/perfil_219552308.jpg', 'imagenes/credenciales/credencial_219552308.jpg', 0, 0, 0, 2),
(8, 'Angel', 'Ramirez Navarro', '219323202', 1, 10, 'angel.ramirez5119@alumnos.udg.mx', '81dc9bdb52d04dc20036dbd8313ed055', '', '', 0, 0, 0, 2),
(9, 'Cristian', 'Baneado', '222790979', 2, 3, 'cristian.orozco9098@alumnos.udg.mx', '81dc9bdb52d04dc20036dbd8313ed055', '', '', 0, 0, 3, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `waitlist`
--

CREATE TABLE `waitlist` (
  `id_waitlist` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_libro` int(11) NOT NULL,
  `turno` int(11) NOT NULL,
  `fecha_inicio_turno` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `waitlist`
--

INSERT INTO `waitlist` (`id_waitlist`, `id_usuario`, `id_libro`, `turno`, `fecha_inicio_turno`) VALUES
(5, 1, 2, 1, '2024-04-02'),
(8, 6, 2, 2, '2024-04-02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wishlist`
--

CREATE TABLE `wishlist` (
  `id_wishlist` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_libro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `wishlist`
--

INSERT INTO `wishlist` (`id_wishlist`, `id_usuario`, `id_libro`) VALUES
(41, 3, 1),
(42, 6, 1),
(45, 2, 1),
(51, 7, 1),
(53, 1, 7);

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
-- Indices de la tabla `status_libro`
--
ALTER TABLE `status_libro`
  ADD PRIMARY KEY (`id_status`);

--
-- Indices de la tabla `status_prestamos`
--
ALTER TABLE `status_prestamos`
  ADD PRIMARY KEY (`id_status`);

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
  MODIFY `id_carrera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `ciclos`
--
ALTER TABLE `ciclos`
  MODIFY `id_ciclo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id_libro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  MODIFY `id_prestamo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `reseñas`
--
ALTER TABLE `reseñas`
  MODIFY `id_reseña` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `status_libro`
--
ALTER TABLE `status_libro`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `status_prestamos`
--
ALTER TABLE `status_prestamos`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `status_usuario`
--
ALTER TABLE `status_usuario`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `strikes`
--
ALTER TABLE `strikes`
  MODIFY `id_strike` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `waitlist`
--
ALTER TABLE `waitlist`
  MODIFY `id_waitlist` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id_wishlist` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
