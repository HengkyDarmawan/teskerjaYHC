-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2023 at 02:33 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teskerja`
--

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id_project` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `client` varchar(128) NOT NULL,
  `project_lead` varchar(128) NOT NULL,
  `email_lead` varchar(128) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `progress` int(11) NOT NULL,
  `image_lead` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id_project`, `name`, `client`, `project_lead`, `email_lead`, `start_date`, `end_date`, `progress`, `image_lead`) VALUES
(1, 'Learning Management System', 'Ruang Guru', 'Hengky', 'hengkydarmawan66@gmail.com', '2023-01-01', '2023-01-31', 80, 'hengky.jpg'),
(3, 'Company Profile', 'Andira', 'Hengky Darmawan', 'hengkydarmawan66@gmail.com', '2023-01-01', '2023-01-31', 70, 'default.png'),
(4, 'tes', 'tes', 'yuli', 'yuli@gmail.com', '2023-01-03', '2023-01-10', 100, 'default.png'),
(5, 'HRIS', 'Budi', 'Ani', 'ani@gmail.com', '2023-01-04', '2023-01-05', 20, 'default.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id_project`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id_project` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
