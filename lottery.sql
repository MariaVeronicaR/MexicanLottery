-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 27-04-2020 a las 22:54:41
-- Versión del servidor: 8.0.17
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lottery`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cards_tbl`
--

CREATE TABLE `cards_tbl` (
  `id` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `cards_tbl`
--

INSERT INTO `cards_tbl` (`id`, `number`, `name`) VALUES
(1, 1, 'el gallo'),
(2, 2, 'el diablito'),
(3, 3, 'la dama'),
(4, 4, 'el catrin'),
(5, 5, 'el paraguas'),
(6, 6, 'la sirena'),
(7, 7, 'la escalera'),
(8, 8, 'la botella'),
(9, 9, 'el barril'),
(10, 10, 'el arbol'),
(11, 11, 'el melon'),
(12, 12, 'el valiente'),
(13, 13, 'el gorrito'),
(14, 14, 'la muerte'),
(15, 15, 'la pera'),
(16, 16, 'la bandera'),
(17, 17, 'el bandolon'),
(18, 18, 'el violoncello'),
(19, 19, 'la garza'),
(20, 20, 'el pajaro'),
(21, 21, 'la mano'),
(22, 22, 'la bota'),
(23, 23, 'la luna'),
(24, 24, 'el cotorro'),
(25, 25, 'el borracho'),
(26, 26, 'el negrito'),
(27, 27, 'el corazon'),
(28, 28, 'la sandia'),
(29, 29, 'el tambor'),
(30, 30, 'el camaron'),
(31, 31, 'las jaras'),
(32, 32, 'el musico'),
(33, 33, 'la arana'),
(34, 34, 'el soldado'),
(35, 35, 'la estrella'),
(36, 36, 'el cazo'),
(37, 37, 'el mundo'),
(38, 38, 'el apache'),
(39, 39, 'el nopal'),
(40, 40, 'el alacran'),
(41, 41, 'la rosa'),
(42, 42, 'la calavera'),
(43, 43, 'el campana'),
(44, 44, 'el cantarito'),
(45, 45, 'el venado'),
(46, 46, 'el sol'),
(47, 47, 'la corona'),
(48, 48, 'la chalupa'),
(49, 49, 'el pino'),
(50, 50, 'el pescado'),
(51, 51, 'la palma'),
(52, 52, 'la maceta'),
(53, 53, 'el arpa'),
(54, 54, 'la rana');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `records_tbl`
--

CREATE TABLE `records_tbl` (
  `id` int(11) NOT NULL,
  `name` varchar(90) NOT NULL,
  `lastName` varchar(90) NOT NULL,
  `userName` varchar(90) NOT NULL,
  `email` varchar(90) NOT NULL,
  `pass` varchar(90) NOT NULL,
  `cardNumber` varchar(18) NOT NULL,
  `CVV` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `records_tbl`
--

INSERT INTO `records_tbl` (`id`, `name`, `lastName`, `userName`, `email`, `pass`, `cardNumber`, `CVV`) VALUES
(1, 'Maria Veronica', 'Rodriguez Millan', 'mariavero', 'mvrm10@gmail.com', '12345AS', '139056348078909237', '678');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cards_tbl`
--
ALTER TABLE `cards_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `records_tbl`
--
ALTER TABLE `records_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cards_tbl`
--
ALTER TABLE `cards_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT de la tabla `records_tbl`
--
ALTER TABLE `records_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
