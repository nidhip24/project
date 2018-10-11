-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2018 at 08:23 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car`
--

-- --------------------------------------------------------

--
-- Table structure for table `car_info`
--

CREATE TABLE `car_info` (
  `id` int(11) NOT NULL,
  `sold` varchar(6) NOT NULL DEFAULT 'false',
  `company` varchar(40) NOT NULL,
  `model` varchar(40) NOT NULL,
  `fuel` varchar(10) NOT NULL,
  `year` int(10) NOT NULL,
  `kms` int(10) NOT NULL,
  `state` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `details` varchar(200) NOT NULL,
  `price` bigint(20) NOT NULL,
  `phone_number` bigint(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `img` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car_info`
--

INSERT INTO `car_info` (`id`, `sold`, `company`, `model`, `fuel`, `year`, `kms`, `state`, `city`, `details`, `price`, `phone_number`, `username`, `img`) VALUES
(2, 'false', 'Hyundai', 'Volvo XC90', 'Petrol', 543, 15909, 'Maharashtra', 'mumbai', 'sddddddddddddddddddddddddddddddddcccccccccccccccccccccccccccc', 4000001131, 9967188022, 'nidhip_24', 'nidhip_24_'),
(3, 'false', 'BMW', 'BMW 5 Series 520d Luxury Line', 'Petrol', 543, 10000, 'maharashtra', 'mumbai', 'kqjlwjdhksmcq jnrunxc hqiewf wdwjfsdd', 1891236, 1234567890, 'nk', 'nk_2'),
(4, 'false', 'Audi', 'Audi R8', 'Petrol', 543, 10000, 'maharashtra', 'mumbai', 'kqjlwjdhksmcq jnrunxc hqiewf wdwjfsdd', 1891236, 1234567890, 'nk', 'nk_3'),
(5, 'false', 'Volkswagen', 'Volkswagen Polo GTI', 'Petrol', 543, 10000, 'maharashtra', 'mumbai', 'kqjlwjdhksmcq jnrunxc hqiewf wdwjfsdd', 1891236, 1234567890, 'nk', 'nk_4');

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`username`, `password`, `email`, `name`) VALUES
('nidhip_24', '1234', 'nidhipkathiriya@gmail.com', 'nidhip kathiriya'),
('nk', '1234', 'nidhipkathiriya@gmail.com', 'nidhip');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car_info`
--
ALTER TABLE `car_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car_info`
--
ALTER TABLE `car_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `car_info`
--
ALTER TABLE `car_info`
  ADD CONSTRAINT `car_info_ibfk_1` FOREIGN KEY (`username`) REFERENCES `userdata` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
