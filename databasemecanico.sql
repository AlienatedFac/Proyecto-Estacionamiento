-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:2811
-- Generation Time: Jun 12, 2020 at 03:18 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `databasemecanico`
--

-- --------------------------------------------------------

--
-- Table structure for table `citas`
--

CREATE TABLE `citas` (
  `id` int(200) NOT NULL,
  `Proveedor` varchar(200) NOT NULL,
  `Cantidad` int(200) NOT NULL,
  `Costo` int(50) NOT NULL,
  `Fecha` date NOT NULL,
  `Hora` time(6) NOT NULL,
  `Estado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `citas`
--

INSERT INTO `citas` (`id`, `Proveedor`, `Cantidad`, `Costo`, `Fecha`, `Hora`, `Estado`) VALUES
(36, 'ACdelco', 25, 3000, '2020-10-10', '12:00:00.000000', 'Activa'),
(38, 'MORESA', 10, 600, '2020-10-10', '12:00:00.000000', 'Activa');

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

CREATE TABLE `clientes` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Telefono` int(20) NOT NULL,
  `Fecha` varchar(20) NOT NULL,
  `Diagnostico` varchar(25) NOT NULL,
  `Detalles` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` (`ID`, `Nombre`, `Telefono`, `Fecha`, `Diagnostico`, `Detalles`) VALUES
(4, 'Alberto', 2147483647, '10/10/2020', 'Falla en el motor', 'Se rompiÃ³ algo adentro'),
(5, 'Javier', 2147483647, '10/07/2020', 'DaÃ±o en el rin', 'Rin daÃ±ado por conducir con llanta ponchada, debe cambiarse.');

-- --------------------------------------------------------

--
-- Table structure for table `consulta`
--

CREATE TABLE `consulta` (
  `id` int(200) NOT NULL,
  `id_paciente` varchar(200) NOT NULL,
  `pregunta_1` varchar(200) NOT NULL,
  `pregunta_2` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consulta`
--

INSERT INTO `consulta` (`id`, `id_paciente`, `pregunta_1`, `pregunta_2`) VALUES
(21, 'usuario', '2', 'Recargar gasolina');

-- --------------------------------------------------------

--
-- Table structure for table `inventario`
--

CREATE TABLE `inventario` (
  `ID` int(20) NOT NULL,
  `Cajon` int(5) NOT NULL,
  `Estado` varchar(20) NOT NULL,
  `Llegada` time(6) NOT NULL,
  `Salida` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventario`
--

INSERT INTO `inventario` (`ID`, `Cajon`, `Estado`, `Llegada`, `Salida`) VALUES
(53, 12, 'Reservado', '10:00:00.000000', '11:50:00.000000'),
(54, 55, 'Reservado', '12:50:00.000000', '05:45:00.000000'),
(55, 2, 'Reservado', '08:40:00.000000', '11:10:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(200) NOT NULL,
  `Nombre` varchar(200) NOT NULL,
  `Correo` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Fecha_de_nacimiento` varchar(200) NOT NULL,
  `Sexo` varchar(200) NOT NULL,
  `Fecha_de_alta` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `Nombre`, `Correo`, `Password`, `Fecha_de_nacimiento`, `Sexo`, `Fecha_de_alta`) VALUES
(13, 'Usuario', 'admin@gmail.com', '123456', '04/04/2000', 'M', '10-11-2019');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_paciente` (`id_paciente`);

--
-- Indexes for table `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `citas`
--
ALTER TABLE `citas`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `consulta`
--
ALTER TABLE `consulta`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `inventario`
--
ALTER TABLE `inventario`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
