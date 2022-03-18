-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2021 at 07:37 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lr`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `roll` int(50) NOT NULL,
  `department` varchar(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `roll`, `department`, `username`, `email`, `password`) VALUES
(1, 'Arifa Akter', 965222, 'CmT', 'arifa', 'arifaafrinar@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'Tahmina Akhter', 965221, 'CmT', 'tahmina', 'tahminalubna910@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(3, 'Afrin', 965212, 'TT', 'afrin', 'arifaafrina@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(4, 'Lubna akhter', 965213, 'ET', 'lubna', 'tahminalubna@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(5, 'Rima akter', 965223, 'ET', 'rima', 'rima@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(6, 'Sornali Rani', 965224, 'TT', 'Sornali', 'sornalirani@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(7, 'Sadia Afrin', 965225, 'ET', 'Swarna', 'sadiaafrinswarna@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(8, 'Tithi Akter', 965226, 'MT', 'mamuni', 'mamuni@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(9, 'Asha Moni', 965227, 'CT', 'asha', 'ashamoni@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(10, 'Taznin Jahan', 965228, 'ST', 'Jahan', 'tazninjahan@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759'),
(11, 'Roton', 965229, 'CmT', 'Das', 'roton@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
