-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2017 at 03:44 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itf_kimyora`
--

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `counter` int(11) NOT NULL,
  `BMI` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`counter`, `BMI`) VALUES
(1, 36);

-- --------------------------------------------------------

--
-- Table structure for table `realfood`
--

CREATE TABLE `realfood` (
  `fid` int(11) NOT NULL,
  `FOOD` text NOT NULL,
  `CALORIES` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `realfood`
--

INSERT INTO `realfood` (`fid`, `FOOD`, `CALORIES`) VALUES
(1, 'Prawn Toast', 95),
(2, 'Gang Gai Chicken', 220),
(3, 'Corn Patty', 253),
(4, 'Pad kra tiem', 1024),
(5, 'Chicken & Eggplang ', 272),
(6, 'Sweet and Sour Vegetables With Deep Fried Wheat Gluten', 800),
(7, 'Thai Chicken and Vegetables', 339),
(8, 'Pad Him Ma Parn', 400),
(9, 'Thai Green Curry With Sea Bass', 330),
(10, 'Moo Pad King ', 310),
(11, 'Panang Shrimp Curry', 300),
(12, 'Tom Yam Gung', 142),
(13, 'Mixed Vegetable Stir-Fry With Oyster Sauce', 170),
(14, 'Vegetable Tom Yum', 220),
(15, 'Pao Tak- Fishermans Soup', 150),
(16, 'Yellow Chicken Curry W/Potatoes, Carrots, Onions, Coconut Milk', 217),
(17, 'Tom Yum Gai', 247),
(18, 'Kwit Thieo Laad Nhaa', 356),
(19, 'Thai Stuffed Chicken Breasts', 530),
(20, 'Ginger Rice', 55),
(21, 'Khao Khluk Kapi', 614),
(22, 'Thai Minced Chicken & Prawn Dip', 128),
(23, 'Thai Duck With Veggies In Peanut Sauce', 655),
(24, 'Thai Sweet and Sour Soup With Chicken ', 134),
(25, 'Spring Roll De Kanikama', 490),
(26, 'Wingbean Salad', 660),
(27, 'Cashew Nut Tofu', 287),
(28, 'Vegetarian Tom Yum Soup- No Fish Sauce', 263),
(29, 'Rice Noodles with Chicken', 260),
(30, 'Chicken Cashew Nut', 325),
(31, 'Mixed Vegetable Stir-Fry with Oyster Sauce', 170),
(32, 'Yellow Chicken Curry with Potatoes, Carrots, Onions, Coconut Milk', 217),
(33, 'Rice Noodles with Chicken', 260),
(34, 'Chicken Cashew Nut', 325),
(35, 'Mixed Vegetable Stir-Fry with Oyster Sauce', 170),
(36, 'Yellow Chicken Curry with Potatoes, Carrots, Onions, Coconut Milk ', 217),
(37, 'Massaman Curry With Potatoes & Chicken', 574),
(38, 'Veg Noodles', 429),
(39, 'Shrimp Pad Thai', 350),
(40, 'Bbq Pork (Roasted Fatty)', 211),
(41, 'No_image\r\nChicken Cashew Nut', 325),
(42, 'Pad Thai, Chicken & Tofu', 835),
(43, 'Shrimp Pad See Ew', 350),
(44, 'Kao Tom Pla', 325),
(45, 'Cream chicken soup', 160),
(46, 'Roti with pork curry', 675),
(47, 'Rotu with meat curry', 675),
(48, 'Lap Mu', 310),
(49, 'Gluay bing', 151),
(50, 'Pad Kra pow', 250);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `counter`
--
ALTER TABLE `counter`
  ADD PRIMARY KEY (`counter`);

--
-- Indexes for table `realfood`
--
ALTER TABLE `realfood`
  ADD PRIMARY KEY (`fid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `realfood`
--
ALTER TABLE `realfood`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
