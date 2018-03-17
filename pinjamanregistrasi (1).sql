-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2018 at 04:58 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pinjamanregistrasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `nim` int(8) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempatlahir` varchar(50) NOT NULL,
  `tanggallahir` date NOT NULL,
  `status` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(1) NOT NULL,
  `username` varchar(100) NOT NULL,
  `fullname` varchar(150) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `fullname`, `email`, `password`) VALUES
(1, 'michell', 'Michell Bernardi', 'michell.bernardi@ti.ukdw.ac.id', '1fb68d1928b308bbb782c6f687259f0eab4254c243754b4fbe5f0abe6209bbab'),
(2, 'yoas', 'yoas maho', 'yoas@ti.ukdw.ac.id', 'a3b4df4379ab61d322bfd671dc4e127962e9a74fe5a68ca029b2712f0a741933'),
(3, 'reiner87', 'Reiner sandrico anglia', 'reiner.sandrico@gmail.com', '62484e5b72e7536217d42d8477137fe88fda8443c66ecc973070b0ee8eb50397'),
(4, 'joshua', 'joshua harefa', 'joshua.harefa@ti.ukdw.ac.id', '09829257ecd63e9c4bad06095f3bc10a9980f872388577ac9308a55311e60fcf'),
(5, 'coba', 'cobacoba', 'coba@gmail.com', '366d48618d0fa09410defb25fe3184de986b7f5260a857f5c16c94cf093236b8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `nim` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
