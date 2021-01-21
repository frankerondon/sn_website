-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-11-2020 a las 06:05:05
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sn_clients`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `potential_clients`
--

CREATE TABLE `potential_clients` (
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `potential_clients`
--

INSERT INTO `potential_clients` (`name`, `email`, `subject`, `message`) VALUES
('Cecile Morissette', 'hbrekke@becker.com', 'Janitor', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
('Liliana Langosh', 'hudson.kelton@rice.info', 'Morbi luctus', 'facilisis magna, a bibendum elit vehicula non.'),
('Rashad Douglas', 'francesca10@walker.com', 'Phasellus vestibulum', 'posuere velit a euismod. Nunc sodales sodales ex, quis egestas lorem vestibulum commodo.'),
('Olin Moen', 'skyla.ledner@oberbrunner.com', 'Ut eu diam et erat', 'ullamcorper tempus in id lectus.'),
('Abner Raynor', 'dicki.susanna@batz.org', 'Lorem ipsum', 'dolor sit amet, consectetur adipiscing elit.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `webinar_suscribers`
--

CREATE TABLE `webinar_suscribers` (
  `fname` varchar(500) DEFAULT NULL,
  `lname` varchar(500) DEFAULT NULL,
  `company` varchar(500) DEFAULT NULL,
  `jobtitle` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `webinar_suscribers`
--

INSERT INTO `webinar_suscribers` (`fname`, `lname`, `company`, `jobtitle`, `email`) VALUES
('Matteo', 'Boehm', 'Spinka, Terry and Stracke', 'Painter', 'lesch.douglas@abshire.com'),
('Crystal', 'Ortiz', 'Rath, Hammes and Barrows', 'Aerospace Engineer', 'beaulah81@feil.info'),
('Columbus', 'Emard', 'Parisian-Emmerich', 'Rehabilitation Counselor', 'jayme88@will.biz'),
('Juanita', 'Waelchi', 'Jakubowski, Lockman and Crona', 'Ship Carpenter and Joiner', 'leonora63@leffler.com'),
('Pete', 'Wyman', 'Dietrich PLC', 'Boat Builder and Shipwright', 'newell.emmerich@king.com'),
('Vernie', 'Trantow', 'Monahan-Gerhold', 'Signal Repairer OR Track Switch Repairer', 'thad.christiansen@mohr.info');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
