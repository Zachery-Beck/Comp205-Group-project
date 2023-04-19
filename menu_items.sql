-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 19, 2023 at 10:22 AM
-- Server version: 10.6.12-MariaDB-0ubuntu0.22.04.1
-- PHP Version: 8.1.2-1ubuntu2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tal6010`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(11) NOT NULL,
  `category` varchar(10) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `category`, `title`, `price`) VALUES
(1, 'appetizer', 'Mozzerella Sticks', '4.49'),
(2, 'appetizer', 'Spinach and Artichoke Dip', '6.99'),
(3, 'appetizer', 'Brew Pub Pretzles & Beer Cheese Dip', '6.99'),
(4, 'appetizer', 'Fried Pickles', '4.99'),
(5, 'appetizer', 'Chicken Caesar Salad', '5.49'),
(6, 'appetizer', 'Tater Skins', '3.49'),
(7, 'appetizer', 'Grilled Chicken Salad', '6.49'),
(8, 'entree', 'Make your Own Pizza', '12.99'),
(9, 'entree', 'Five Cheese Pizza', '13.99'),
(10, 'entree', 'Meat Lovers Pizza', '16.99'),
(11, 'entree', 'Spicy Italian Sausage Pizza', '14.99'),
(12, 'entree', 'Supreme Pizza', '12.99'),
(13, 'entree', 'Dozen Bone in Wings', '12.99'),
(14, 'entree', 'Half Dozen Bone in Wings', '6.99'),
(15, 'entree', '5 Piece Chicken Tenders', '10.99'),
(16, 'entree', '3 Piece Chicken Tenders', '6.99'),
(17, 'sides', 'Fries', '3.49'),
(18, 'sides', 'Cheese Fries', '4.49'),
(19, 'sides', 'Onion Rings', '3.49'),
(20, 'sides', 'Breadsticks', '5.99'),
(21, 'sides', 'Cheese Sticks', '5.29'),
(22, 'drink1', 'Pepsi', '2.50'),
(23, 'drink1', 'Diet Pepsi', '2.50'),
(24, 'drink1', 'Pepsi Wild Cherry', '2.50'),
(25, 'drink1', 'Diet Wild Cherry Pepsi', '2.50'),
(26, 'drink1', 'Ice Tea', '2.50'),
(27, 'drink2', 'Sierra Mist', '2.50'),
(28, 'drink2', 'Diet Sierra Mist', '2.50'),
(29, 'drink2', 'Dr. Pepper', '2.50'),
(30, 'drink2', 'DIet Dr. Pepper', '2.50'),
(31, 'drink2', 'Water', '1.00'),
(32, 'drink3', 'Mountain Dew', '2.50'),
(33, 'drink3', 'Diet Mountain Dew', '2.50'),
(34, 'drink3', 'MUG Root Beer', '2.50'),
(35, 'drink3', 'Crush Orange', '2.50'),
(36, 'drink3', 'Baja Blast', '2.50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
