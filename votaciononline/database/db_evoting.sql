-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-12-2025 a las 05:07:24
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
-- Base de datos: `db_evoting`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `aid` int(11) NOT NULL,
  `admin_username` varchar(30) NOT NULL,
  `admin_password` varchar(30) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `tbl_admin`
--

INSERT INTO `tbl_admin` (`aid`, `admin_username`, `admin_password`, `time_stamp`) VALUES
(1, 'admin', 'admin123', '2025-12-02 05:50:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(5) NOT NULL,
  `full_name` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `voter_id` int(10) NOT NULL,
  `voted_for` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `full_name`, `email`, `voter_id`, `voted_for`) VALUES
(3, 'Mariana Torres Delgado', 'cgaleano@cweb.com', 65786, 'IDM'),
(4, 'Alejandro Ramírez Quiroga', 'dcamargo@cweb.com', 896740, 'IDM'),
(5, 'Mariana Torres Delgado', 'verazo@cweb.com', 45432, 'IDM'),
(6, 'Alejandro Ramírez Quiroga', 'dgonzalez@cweb.com', 87430, 'IDM'),
(7, 'Mariana Torres Delgado', 'mmendoza@cweb.com', 74629, 'GP'),
(8, 'Ricardo Huamán Paredes', 'cperez@cweb.com', 89378, 'PV'),
(9, 'Alejandro Ramírez Quiroga', 'eesteban@cweb.com', 94940, 'JMS'),
(10, 'Valeria Rojas Salazar', 'dlumen@cweb.com', 6483, 'JMS'),
(12, 'Mariana Torres Delgado', 'dgarzon@cweb.com', 95678, 'JMS'),
(13, 'Ricardo Huamán Paredes', 'hmorales@cweb.com', 5, 'IDM'),
(14, 'Valeria Rojas Salazar', 'jgarcia@cweb.com', 12345, 'PV'),
(15, 'Alejandro Ramírez Quiroga', 'apaez@cweb.com', 12345, 'PV'),
(18, 'Juan Manuel Galindo', 'jgalindo@cweb.com', 12334210, 'IDM'),
(20, 'Ricardo Huamán Paredes', 'nbonaparte@cweb.com', 12668740, 'GP'),
(21, 'Mariana Torres Delgado', 'nbonaparte@cweb.com', 12668740, 'GP'),
(22, 'Valeria Rojas Salazar', 'carbelaez@cweb', 1017564872, 'GP'),
(23, 'Valeria Rojas Salazar', 'rledezma@cweb.com', 1019567841, 'INC'),
(24, 'Valeria Rojas Salazar', 'hmeza@cweb.com', 12645970, 'PV'),
(25, 'Mariana Torres Delgado', 'dmelendez@cweb.com', 14638975, 'IDM'),
(26, 'Ricardo Huamán Paredes', 'dpedrozo@cweb.com', 1023648579, 'GP'),
(27, 'Mariana Torres Delgado', 'etorregrosa@cweb.com', 17258796, 'JMS'),
(28, 'Alejandro Ramírez Quiroga', 'msevilla@cweb.com', 14567894, 'JMS'),
(29, 'Mariana Torres Delgado', 'michael_32@gmail.com', 74938277, 'PV'),
(31, 'Juan Alejos', 'Alejos_34@gmail.com', 23456789, 'JMS'),
(32, 'Julia Martinez', 'julia_23@gmail.com', 12345678, 'PV');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indices de la tabla `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
