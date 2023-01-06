-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2023 at 02:31 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2019131017_candra`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nim` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `prodi` varchar(255) NOT NULL,
  `semester` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nohp` int(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nim`, `nama`, `prodi`, `semester`, `email`, `nohp`, `password`, `level`) VALUES
(1, 2019131017, 'Candra', 'TIF', 7, 'candra@gmial.com', 2147483647, '123', 1),
(2, 2019131013, 'Linda', 'TIF', 7, 'linda@gmail.com', 2147483647, '234', 2),
(4, 2019131011, 'HendraSur', 'TIF', 7, 'hendra@gmail.com', 2147483647, '123', 1),
(5, 2019131015, 'Ajita', 'TIF', 7, 'ajita@gmail.com', 2147483647, '123', 1),
(6, 2019131021, 'Shinta', 'TIF', 7, 'shinta@gmail.com', 2147483647, '123', 1),
(7, 2019131002, 'William', 'TIF', 7, 'william@gmail.com', 2147483647, '123', 1),
(8, 2019123456, 'Antonius', 'TPL', 7, 'antonius@gmail.com', 2147483647, '123', 1),
(9, 2019778899, 'Charless', 'TIF', 7, 'charless@gmail.com', 874477454, '123', 1),
(10, 2018456665, 'Raymond', 'TIF', 7, 'raymond@gmail.com', 2147483647, '123', 1),
(12, 2015456456, 'Jackson', 'TPL', 7, 'jackson@gmail.com', 2147483647, '123', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
