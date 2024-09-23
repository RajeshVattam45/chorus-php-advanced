-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2024 at 03:34 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `animals`
--

CREATE TABLE `animals` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `weight` varchar(100) NOT NULL,
  `lifespan` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `animals`
--

INSERT INTO `animals` (`id`, `name`, `color`, `weight`, `lifespan`, `type`) VALUES
(1, 'African Elephant', ' Gray', '6000', ' 60-70', ' Mammal'),
(2, 'Bald Eagle', ' Brown and White', '6', ' 20-30', ' Bird'),
(3, 'Great White Shark', ' Gray and White', '1100', ' 70', ' Fish'),
(4, 'Bengal Tiger', ' Orange with Black Stripes', '250', ' 10-15', ' Mammal'),
(5, 'Green Anaconda', ' Green', '250', ' 10', ' Reptile'),
(6, 'Blue Whale', ' Blue-Gray', '150000', ' 80-90', ' Mammal'),
(7, 'Peregrine Falcon', ' Blue-Gray', '1', ' 15-20', ' Bird'),
(8, 'Clownfish', ' Orange and White', '0', ' 6-10', ' Fish'),
(9, 'Komodo Dragon', ' Brown and Green', '70', ' 30', ' Reptile'),
(10, 'Red Kangaroo', ' Reddish-Brown', '90', ' 23', ' Mammal'),
(11, 'Emperor Penguin', ' Black and White', '45', ' 15-20', ' Bird'),
(12, 'Cheetah', ' Yellow with Black Spots', '72', ' 10-12', ' Mammal'),
(13, 'Giraffe', ' Tan with Brown Spots', '1200', ' 25', ' Mammal'),
(14, 'King Cobra', ' Brown and Black', '6', ' 20', ' Reptile'),
(15, 'Atlantic Bluefin Tuna', ' Metallic Blue', '680', ' 35', ' Fish'),
(16, 'Scarlet Macaw', ' Red', '0', ' Yellow', ' 1'),
(17, 'Great Hammerhead', ' Gray-Brown', '450', ' 20-30', ' Fish'),
(18, 'Saltwater Crocodile', ' Greenish-Gray', '1000', ' 70-100', ' Reptile'),
(19, 'Snow Leopard', ' White with Black Spots', '55', ' 15-18', ' Mammal'),
(20, 'Giant Panda', ' Black and White', '160', ' 20', ' Mammal'),
(21, 'African Elephant', ' Gray', '6000', ' 60-70', ' Mammal'),
(22, 'Bald Eagle', ' Brown and White', '6', ' 20-30', ' Bird'),
(23, 'Great White Shark', ' Gray and White', '1100', ' 70', ' Fish'),
(24, 'Bengal Tiger', ' Orange with Black Stripes', '250', ' 10-15', ' Mammal'),
(25, 'Green Anaconda', ' Green', '250', ' 10', ' Reptile'),
(26, 'Blue Whale', ' Blue-Gray', '150000', ' 80-90', ' Mammal'),
(27, 'Peregrine Falcon', ' Blue-Gray', '1', ' 15-20', ' Bird'),
(28, 'Clownfish', ' Orange and White', '0', ' 6-10', ' Fish'),
(29, 'Komodo Dragon', ' Brown and Green', '70', ' 30', ' Reptile'),
(30, 'Red Kangaroo', ' Reddish-Brown', '90', ' 23', ' Mammal'),
(31, 'Emperor Penguin', ' Black and White', '45', ' 15-20', ' Bird'),
(32, 'Cheetah', ' Yellow with Black Spots', '72', ' 10-12', ' Mammal'),
(33, 'Giraffe', ' Tan with Brown Spots', '1200', ' 25', ' Mammal'),
(34, 'King Cobra', ' Brown and Black', '6', ' 20', ' Reptile'),
(35, 'Atlantic Bluefin Tuna', ' Metallic Blue', '680', ' 35', ' Fish'),
(36, 'Scarlet Macaw', ' Red', '0', ' Yellow', ' 1'),
(37, 'Great Hammerhead', ' Gray-Brown', '450', ' 20-30', ' Fish'),
(38, 'Saltwater Crocodile', ' Greenish-Gray', '1000', ' 70-100', ' Reptile'),
(39, 'Snow Leopard', ' White with Black Spots', '55', ' 15-18', ' Mammal'),
(40, 'Giant Panda', ' Black and White', '160', ' 20', ' Mammal'),
(41, 'hello', ' hello Gray', '10000', ' 6-7', ' animal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animals`
--
ALTER TABLE `animals`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `animals`
--
ALTER TABLE `animals`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
