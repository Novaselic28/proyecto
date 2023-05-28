-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-05-2023 a las 20:18:59
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id` int(255) NOT NULL,
  `Metodo` varchar(255) NOT NULL,
  `Titular` varchar(255) NOT NULL,
  `Numero` int(11) NOT NULL,
  `FECHA` varchar(255) NOT NULL,
  `CVV` int(11) NOT NULL,
  `Codigo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `telefono` int(10) DEFAULT NULL,
  `asunto` varchar(255) DEFAULT NULL,
  `mensaje` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`telefono`, `asunto`, `mensaje`) VALUES
(444455, 'UTYU', 'GTHGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGG');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rentas`
--

CREATE TABLE `rentas` (
  `id` int(255) NOT NULL,
  `Metodo` varchar(255) NOT NULL,
  `Titular` varchar(255) NOT NULL,
  `Numero` int(255) NOT NULL,
  `Fecha` varchar(255) NOT NULL,
  `CVV` int(255) NOT NULL,
  `Codigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(10) NOT NULL,
  `usuario` varchar(20) DEFAULT NULL,
  `nombres` varchar(30) DEFAULT NULL,
  `apellidos` varchar(30) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `contraseña` varchar(40) DEFAULT NULL,
  `tarjeta` bigint(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `nombres`, `apellidos`, `correo`, `contraseña`, `tarjeta`) VALUES
(9, 'admin', 'Glenn Mauricio', 'Bello Chacon', 'glennmauriciobellochacon@gmail.com', '12345', NULL),
(10, 'mom', 'Susana', 'Chacon Sanchez', 'susana@gmail.com', '1234', NULL),
(11, 'Lupita', 'Guadalupe', 'Santos Cid', 'guadalupesantos30cid@gmail.com', '2002', NULL),
(12, 'Emma', 'Emmanuel', 'Diaz Vasquez', 'curry160616@gmail.com', '2324', NULL),
(15, 'Teacher', 'Maestra', 'Javier', 'maestra@gmail.com', '0011', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videojuegos`
--

CREATE TABLE `videojuegos` (
  `id` int(255) NOT NULL,
  `Nombre` varchar(255) DEFAULT NULL,
  `Genero` varchar(255) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `Renta` int(255) DEFAULT NULL,
  `Compra` int(255) DEFAULT NULL,
  `Img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `videojuegos`
--

INSERT INTO `videojuegos` (`id`, `Nombre`, `Genero`, `descripcion`, `Renta`, `Compra`, `Img`) VALUES
(1, 'HALO INFINITE', 'ADVENTURA', 'UN JUEGO DE ADVENTURAS EN EL ESPACIO CON DISPAROS', 120, 1200, 'HALO'),
(2, 'PGA Tour 2K23', 'DEPORTES', 'PGA Tour 2K23 es un videojuego deportivo desarrollado por HB Studios y publicado por 2K', 120, 1500, 'PGA'),
(3, 'GEARS', 'ADVENTURA', 'UN JUEGO DE DISPARO SOBRE UN PLANETA EN GUERRA', 120, 1400, 'GEARS'),
(4, 'Star Wars Jedi: Survivor', 'ADVENTURA', 'UN JUEGO DE UNA DE LA SAGA DE PELICULAS MAS FAMOSAS', 120, 1630, 'STAR'),
(5, 'Cult of the Lamb', 'ADVENTURA', 'UN JUEGO DE UNO ANIMALES CONTRUYENDO UNA SOCIEDAD', 120, 1000, 'CULT'),
(6, 'Marvel\'s Spider-Man', 'ADVENTURA', 'UN JUEGO DE UNO DE LOS HEROES MAS RECONOCIDOS', 120, 1499, 'MAN'),
(7, 'FIFA 23', 'DEPORTES', 'UN JUEGO DE DEPORTES SOBRE FUTBOL', 120, 1500, 'FIFA'),
(8, 'NBA 2K23', 'DEPORTES', 'UN JUEGO DE DEPORTE SOBRE BALONCESTO', 120, 1400, 'NBA'),
(9, 'WWE 2K22', 'DEPORTES', 'WWE 2K22 es un videojuego de lucha libre profesional que fue desarrollado por Visual Concepts y publicado por 2K Sports.', 120, 1000, 'WWE'),
(10, 'Skater ', 'DEPORTES', 'Tony Hawk\'s Pro Skater 1 + 2 es un videojuego de monopatinaje desarrollado por Vicarious Visions y publicado por Activision, que se lanzó en Microsoft', 120, 1400, 'TONY'),
(11, 'Elden Ring', 'RPG', 'Elden Ring es un videojuego de rol de acción desarrollado por FromSoftware y publicado por Bandai Namco Entertainment.', 120, 1500, 'ELDEN'),
(12, 'The Witcher 3: Wild Hunt', 'RPG', 'The Witcher 3: Wild Hunt es un videojuego de rol desarrollado y publicado por la compañía polaca CD Projekt RED.', 120, 1630, 'WITCHER'),
(13, 'NieR: Automata', 'RPG', 'NieR:Automata es un videojuego de rol de acción', 120, 1500, 'NIER'),
(14, 'Monster Hunter: World', 'RPG', 'Monster Hunter: World es un videojuego perteneciente al género de rol y acción.', 120, 1400, 'MONSTER'),
(15, 'Mass Effect 2', 'RPG', 'Mass Effect 2 es un videojuego de rol de acción desarrollado por BioWare Edmonton, con la asistencia de BioWare de Montreal, y publicado por Electronic Arts.', 120, 1500, 'MASS'),
(16, 'Age of Empires II: The Age of Kings', 'ESTRATEGIA', 'Además de contar con campañas dedicadas a personajes históricos como William Wallace, Juana de Arco o Gengis Khan', 120, 1432, 'AGE'),
(17, 'XCOM 2', 'ESTRATEGIA', 'XCOM 2 es un videojuego de estrategia por turnos de 2016 desarrollado por Firaxis Games y publicado por 2K Games.', 120, 1500, 'XCOM'),
(18, 'Gears Tactics', 'ESTRATEGIA', 'Gears Tactics es un videojuego de estrategia por turnos desarrollado por Splash Damage en conjunto con The Coalition y publicado por Xbox Game studios.', 120, 1399, 'TACTICS'),
(19, 'Mario + Rabbids Sparks of Hope', 'ESTRATEGIA', 'Mario + Rabbids Sparks of Hope es un videojuego de rol táctico por turnos desarrollado por Ubisoft Milan y publicado por Ubisoft para Nintendo Switch.', 120, 1499, 'MARIO'),
(20, 'Fallout Shelter', 'ESTRATEGIA', 'Fallout Shelter es un videojuego de tipo gratuito para móviles, perteneciente al género de simulación', 120, 1000, 'FALLOUT'),
(21, 'GTA V', 'ACCION', 'Grand Theft Auto V es un videojuego de acción-aventura de mundo abierto en tercera persona desarrollado por el estudio escocés Rockstar North', 120, 1630, 'GTA'),
(22, 'Resident Evil 4', 'ACCION', '​es un videojuego de acción-aventura de disparos en tercera persona perteneciente al subgénero de terror y supervivencia desarrollado por Capcom y estrenado', 120, 1000, 'EVIL'),
(23, 'Hogwarts Legacy', 'ACCION', 'Hogwarts Legacy es un juego de rol de acción de 2023 desarrollado por Avalanche Software y publicado por Warner Bros.', 120, 1432, 'LEGACY'),
(24, 'Devil May Cry 5', 'ACCION', 'Devil May Cry 5 es un videojuego perteneciente al género hack and slash, desarrollado y publicado por la empresa Capcom.', 120, 1500, 'DEVIL'),
(25, 'Dead Space Remake', 'ACCION', 'Dead Space es un videojuego de horror de supervivencia de disparos en tercera persona desarrollado por Motive Studio y publicado por Electronic Arts.', 120, 1399, 'SPACE'),
(26, 'Los Sims 4', 'SIMULACION', 'Los Sims 4 es un videojuego de simulación social y de vida, el cuarto de la serie de juegos de Los Sims', 120, 1499, 'SIMS'),
(27, 'Microsoft Flight Simulator 2020', 'SIMULACION', 'Microsoft Flight Simulator es un simulador de vuelo desarrollado por Asobo Studio y distribuido por Xbox Game Studios para el sistema operativo Windows ', 120, 1392, 'FLIGHT'),
(28, 'Animal Crossing: New Horizons', 'SIMULACION', 'Animal Crossing: New Horizons es un videojuego de simulación social desarrollado y publicado por Nintendo para Nintendo Switch', 120, 1200, 'ANIMAL'),
(29, 'Stardew Valley', 'SIMULACION', 'Stardew Valley es un videojuego indie de simulación de granja desarrollado por Eric \"ConcernedApe\" Barone y publicado por Chucklefish Games.', 120, 1232, 'STARDEW'),
(30, 'Goat Simulator', 'SIMULACION', 'Goat Simulator es un videojuego de acción en tercera persona desarrollado y publicado por Coffee Stain Studios.', 120, 1599, 'GOAT');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rentas`
--
ALTER TABLE `rentas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `videojuegos`
--
ALTER TABLE `videojuegos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `rentas`
--
ALTER TABLE `rentas`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `videojuegos`
--
ALTER TABLE `videojuegos`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
