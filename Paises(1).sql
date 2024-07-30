-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 28, 2024 at 07:56 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Paises`
--

-- --------------------------------------------------------

--
-- Table structure for table `ciudades`
--

CREATE TABLE `ciudades` (
  `Continente` varchar(50) NOT NULL,
  `Pais` varchar(50) NOT NULL,
  `Ciudad` varchar(50) NOT NULL,
  `Latitud` decimal(8,4) NOT NULL,
  `Longitud` decimal(8,4) NOT NULL,
  `Habitantes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ciudades`
--

INSERT INTO `ciudades` (`Continente`, `Pais`, `Ciudad`, `Latitud`, `Longitud`, `Habitantes`) VALUES
('América', 'Argentina', 'Buenos Aires', -34.6037, -58.3816, 3075646),
('América', 'Argentina', 'Córdoba', -31.4201, -64.1888, 1452000),
('América', 'Argentina', 'Mendoza', -32.8895, -68.8458, 115041),
('América', 'Argentina', 'Rosario', -32.9442, -60.6505, 1236000),
('América', 'Brasil', 'Brasilia', -15.7942, -47.8822, 3055149),
('América', 'Brasil', 'Río de Janeiro', -22.9068, -43.1729, 6748000),
('América', 'Brasil', 'Salvador', -12.9714, -38.5014, 2677000),
('América', 'Brasil', 'São Paulo', -23.5505, -46.6333, 12300000),
('América', 'Canadá', 'Calgary', 51.0447, -114.0719, 1239220),
('América', 'Canadá', 'Montreal', 45.5017, -73.5673, 1780000),
('América', 'Canadá', 'Toronto', 43.6532, -79.3832, 2930000),
('América', 'Canadá', 'Vancouver', 49.2827, -123.1207, 2463431),
('América', 'Chile', 'Antofagasta', -23.6524, -70.3950, 425725),
('América', 'Chile', 'Concepción', -36.8270, -73.0498, 889725),
('América', 'Chile', 'Santiago', -33.4489, -70.6693, 6158080),
('América', 'Chile', 'Valparaíso', -33.0472, -71.6127, 967000),
('América', 'Colombia', 'Bogotá', 4.7110, -74.0721, 7743955),
('América', 'Colombia', 'Cali', 3.4516, -76.5319, 2471474),
('América', 'Colombia', 'Cartagena', 10.3910, -75.4794, 914552),
('América', 'Colombia', 'Medellín', 6.2442, -75.5812, 2569000),
('América', 'Ecuador', 'Cuenca', -2.9001, -79.0059, 329928),
('América', 'Ecuador', 'Guayaquil', -2.1700, -79.9224, 2762000),
('América', 'Ecuador', 'Manta', -0.9540, -80.7330, 217553),
('América', 'Ecuador', 'Quito', -0.1807, -78.4678, 2852390),
('América', 'Estados Unidos', 'Chicago', 41.8781, -87.6298, 2695600),
('América', 'Estados Unidos', 'Houston', 29.7604, -95.3698, 2325500),
('América', 'Estados Unidos', 'Los Ángeles', 34.0522, -118.2437, 3967000),
('América', 'Estados Unidos', 'Nueva York', 40.7128, -74.0060, 8419000),
('América', 'México', 'Ciudad de México', 19.4326, -99.1332, 9209944),
('América', 'México', 'Guadalajara', 20.6597, -103.3496, 1385621),
('América', 'México', 'Monterrey', 25.6866, -100.3161, 1135512),
('América', 'México', 'Puebla', 19.0414, -98.2063, 1434062),
('América', 'Perú', 'Arequipa', -16.3989, -71.5370, 1008000),
('América', 'Perú', 'Cusco', -13.5319, -71.9675, 428450),
('América', 'Perú', 'Lima', -12.0464, -77.0428, 10719048),
('América', 'Perú', 'Trujillo', -8.1150, -79.0290, 919899),
('América', 'Venezuela', 'Barquisimeto', 10.0672, -69.3467, 1208305),
('América', 'Venezuela', 'Caracas', 10.4806, -66.9036, 1943901),
('América', 'Venezuela', 'Maracaibo', 10.6417, -71.6295, 2083000),
('América', 'Venezuela', 'Valencia', 10.1579, -67.9972, 1385083),
('Europa', 'Alemania', 'Berlín', 52.5200, 13.4050, 3669491),
('Europa', 'Alemania', 'Colonia', 50.9375, 6.9603, 1085664),
('Europa', 'Alemania', 'Hamburgo', 53.5511, 9.9937, 1841179),
('Europa', 'Alemania', 'Múnich', 48.1351, 11.5820, 1488202),
('Europa', 'España', 'Barcelona', 41.3851, 2.1734, 1620343),
('Europa', 'España', 'Madrid', 40.4168, -3.7038, 3223334),
('Europa', 'España', 'Sevilla', 37.3891, -5.9845, 688711),
('Europa', 'España', 'Valencia', 39.4699, -0.3763, 794288),
('Europa', 'Francia', 'Lyon', 45.7640, 4.8357, 515695),
('Europa', 'Francia', 'Marsella', 43.2965, 5.3698, 861635),
('Europa', 'Francia', 'París', 48.8566, 2.3522, 2161000),
('Europa', 'Francia', 'Toulouse', 43.6047, 1.4442, 486828),
('Europa', 'Grecia', 'Atenas', 37.9838, 23.7275, 664046),
('Europa', 'Grecia', 'Heraklion', 35.3387, 25.1442, 173993),
('Europa', 'Grecia', 'Patras', 38.2466, 21.7346, 213984),
('Europa', 'Grecia', 'Tesalónica', 40.6401, 22.9444, 315196),
('Europa', 'Italia', 'Milán', 45.4642, 9.1900, 1378689),
('Europa', 'Italia', 'Nápoles', 40.8518, 14.2681, 967069),
('Europa', 'Italia', 'Roma', 41.9028, 12.4964, 2872800),
('Europa', 'Italia', 'Turín', 45.0703, 7.6869, 870456),
('Europa', 'Países Bajos', 'Ámsterdam', 52.3676, 4.9041, 821752),
('Europa', 'Países Bajos', 'La Haya', 52.0705, 4.3007, 545163),
('Europa', 'Países Bajos', 'Róterdam', 51.9225, 4.4792, 623652),
('Europa', 'Países Bajos', 'Utrecht', 52.0907, 5.1214, 357179),
('Europa', 'Polonia', 'Cracovia', 50.0647, 19.9450, 779115),
('Europa', 'Polonia', 'Lodz', 51.7592, 19.4560, 679941),
('Europa', 'Polonia', 'Varsovia', 52.2297, 21.0122, 1790658),
('Europa', 'Polonia', 'Wroclaw', 51.1079, 17.0385, 642869),
('Europa', 'Reino Unido', 'Birmingham', 52.4862, -1.8904, 1141816),
('Europa', 'Reino Unido', 'Glasgow', 55.8642, -4.2518, 633120),
('Europa', 'Reino Unido', 'Liverpool', 53.4084, -2.9916, 498042),
('Europa', 'Reino Unido', 'Londres', 51.5074, -0.1278, 8982000),
('Europa', 'Rusia', 'Ekaterimburgo', 56.8389, 60.6057, 1493749),
('Europa', 'Rusia', 'Moscú', 55.7558, 37.6173, 12506468),
('Europa', 'Rusia', 'Novosibirsk', 55.0084, 82.9357, 1618039),
('Europa', 'Rusia', 'San Petersburgo', 59.9343, 30.3351, 5351935),
('Europa', 'Suecia', 'Estocolmo', 59.3293, 18.0686, 975551),
('Europa', 'Suecia', 'Gotemburgo', 57.7089, 11.9746, 572799),
('Europa', 'Suecia', 'Malmö', 55.6050, 13.0038, 347949),
('Europa', 'Suecia', 'Uppsala', 59.8586, 17.6389, 233839);

-- --------------------------------------------------------

--
-- Table structure for table `Continentes`
--

CREATE TABLE `Continentes` (
  `continente` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Continentes`
--

INSERT INTO `Continentes` (`continente`) VALUES
('America'),
('Europa');

-- --------------------------------------------------------

--
-- Table structure for table `Paises`
--

CREATE TABLE `Paises` (
  `continente` varchar(50) NOT NULL,
  `pais` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Paises`
--

INSERT INTO `Paises` (`continente`, `pais`) VALUES
('America', 'Argentina'),
('America', 'Brasil'),
('America', 'Canadá'),
('America', 'Chile'),
('America', 'Colombia'),
('America', 'Ecuador'),
('America', 'Estados Unidos'),
('America', 'México'),
('America', 'Perú'),
('America', 'Venezuela'),
('Europa', 'Alemania'),
('Europa', 'España'),
('Europa', 'Francia'),
('Europa', 'Grecia'),
('Europa', 'Italia'),
('Europa', 'Países Bajos'),
('Europa', 'Polonia'),
('Europa', 'Reino Unido'),
('Europa', 'Rusia'),
('Europa', 'Suecia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ciudades`
--
ALTER TABLE `ciudades`
  ADD PRIMARY KEY (`Continente`,`Pais`,`Ciudad`),
  ADD KEY `fk_paises` (`Pais`);

--
-- Indexes for table `Continentes`
--
ALTER TABLE `Continentes`
  ADD PRIMARY KEY (`continente`);

--
-- Indexes for table `Paises`
--
ALTER TABLE `Paises`
  ADD PRIMARY KEY (`continente`,`pais`),
  ADD KEY `idx_pais` (`pais`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ciudades`
--
ALTER TABLE `ciudades`
  ADD CONSTRAINT `fk_continentes` FOREIGN KEY (`Continente`) REFERENCES `Continentes` (`continente`),
  ADD CONSTRAINT `fk_paises` FOREIGN KEY (`Pais`) REFERENCES `Paises` (`pais`);

--
-- Constraints for table `Paises`
--
ALTER TABLE `Paises`
  ADD CONSTRAINT `fk_continente` FOREIGN KEY (`continente`) REFERENCES `Continentes` (`continente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
