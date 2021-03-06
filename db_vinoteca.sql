-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-10-2020 a las 17:13:48
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_vinoteca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `tipo`, `color`) VALUES
(1, 'Tinto', ' Rojo purpúreo'),
(2, 'Espumoso', 'Rosado'),
(3, 'Blanco', 'Amarillo'),
(4, 'Espumoso', 'Rosado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `admin`) VALUES
(1, 'asdfasdf@gmail.com', '$2y$10$M8C8uO1mwLj6XCl5zk9eDuJCr5fZsBaeMuVO8D.UJiopyhyg.iXXa', NULL),
(3, 'hola@gmail.com', '$2y$10$zfSo2lFROun97mbQTWEyIuDiPbfmnX.mWTJYQA0vgDS31H2bsYxZe', NULL),
(6, 'admin@gmail.com', '$2y$10$SecyWR4GYEgtxZoIzA9Z9u9RqFClBdusWbM6voGAvXWoCJ0HCt3Xa', 1),
(7, 'admin@gmail.com', '$2y$10$9KA0vLgGKPoT61btIlQhgeNwrNeQvPcykMNluM0iJJQdcKxe4fYli', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vino`
--

CREATE TABLE `vino` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `ano_cosecha` date NOT NULL,
  `origen` varchar(50) NOT NULL,
  `alcohol` double NOT NULL,
  `stock` tinyint(1) DEFAULT NULL,
  `id_categoria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `vino`
--

INSERT INTO `vino` (`id`, `nombre`, `descripcion`, `ano_cosecha`, `origen`, `alcohol`, `stock`, `id_categoria`) VALUES
(8, 'Malbecc', 'Vainilla. Delicado blend de color rojo intenso. Su pasaje por roble americano de tostado medio, le entrega aromas a vainilla que se integran en la boca con frutos rojos maduros.', '2020-03-09', 'Mendoza', 13, 0, 1),
(11, 'Dadá', 'Blend de uvas blancas que se cosechan de forma tardía otorgando un color dorado brillante. Su paso por roble, otorga delicadas notas a vainillas junto con la miel logran untuosidad y frescura. En boca, se destacan los sabores a caramelo que recuerdan', '2020-04-12', 'Mendoza', 14, 1, 3),
(12, 'Dadá', 'Delicadisimo espumante dulce natural elaborado con método Charmat. De color amarillo verdoso con aromas florales y sabor muy frutado.', '2020-05-03', 'Mendoza', 7, 1, 2),
(15, 'Toro Lacrado', 'Siempre hay un Toro Lacrado en la mesa de los argentinos cuando queremos celebrar un momento único. Su lacre lo hace especial, protegiendo y resaltando algo tan valioso que es símbolo y mensaje de unión a través de las generaciones.', '2020-08-14', 'Mendoza', 13, 0, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vino`
--
ALTER TABLE `vino`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_categoria` (`id_categoria`),
  ADD KEY `id_categoria_2` (`id_categoria`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `vino`
--
ALTER TABLE `vino`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `vino`
--
ALTER TABLE `vino`
  ADD CONSTRAINT `vino_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
