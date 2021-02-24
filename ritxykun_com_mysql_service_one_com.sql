-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: ritxykun.com.mysql.service.one.com:3306
-- Generation Time: May 16, 2020 at 05:40 PM
-- Server version: 10.3.21-MariaDB-1:10.3.21+maria~bionic
-- PHP Version: 7.2.24-0ubuntu0.18.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ritxykun_com`
--
CREATE DATABASE IF NOT EXISTS `ritxykun_com` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `ritxykun_com`;

-- --------------------------------------------------------

--
-- Table structure for table `Admin`
--

CREATE TABLE `Admin` (
  `ID` int(11) NOT NULL,
  `Username` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Admin`
--

INSERT INTO `Admin` (`ID`, `Username`, `password`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `Booking`
--

CREATE TABLE `Booking` (
  `ID` int(255) NOT NULL,
  `Location` varchar(1000) NOT NULL,
  `Date` varchar(255) NOT NULL,
  `Time` varchar(255) NOT NULL,
  `Name` varchar(1000) NOT NULL,
  `Surname` varchar(1000) NOT NULL,
  `People` varchar(1000) NOT NULL,
  `Email` varchar(1000) NOT NULL,
  `Phone` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Booking`
--

INSERT INTO `Booking` (`ID`, `Location`, `Date`, `Time`, `Name`, `Surname`, `People`, `Email`, `Phone`) VALUES
(63, 'Edinburgh', '2020-05-16', '09:00-09:30', 'Ricardo Marino', 'Marino', '1', 'ricardomarmarino@gmail.com', '07922122885'),
(64, 'Edinburgh', '2020-05-21', '12:00-12:30', 'Francis ', 'Irving', '3', 'frankisbot@gmail.com', '07341839779');

-- --------------------------------------------------------

--
-- Table structure for table `Burgers`
--

CREATE TABLE `Burgers` (
  `ID` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Ingredients` varchar(255) NOT NULL,
  `Allergens` varchar(255) NOT NULL,
  `Cost` decimal(10,2) NOT NULL,
  `Tax` decimal(10,0) NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Burgers`
--

INSERT INTO `Burgers` (`ID`, `Name`, `Description`, `Ingredients`, `Allergens`, `Cost`, `Tax`, `Price`, `Category`, `Image`) VALUES
(3, 'nombre2', 'Feta, chilli oil, black onion seeds, flat bread ', 'burger', 'allergens', '5.00', '3', '11.00', 'Burgers', ''),
(4, 'nombre2', 'burguer', 'Red wine-garlic salami, bourbon-cascabel chorizo, porcini-truffle salami, cornichon, marinated olives, bocconcini, grilled peppers, ciabatta, extra virgin olive oil ', 'allergens', '5.00', '3', '8.00', 'Burgers', 'download.jfif'),
(5, 'nombre2', 'Feta, chilli oil, black onion seeds, flat bread ', 'Red wine-garlic salami, bourbon-cascabel chorizo, porcini-truffle salami, cornichon, marinated olives, bocconcini, grilled peppers, ciabatta, extra virgin olive oil ', 'allergens', '10.00', '1', '25.00', 'Burgers', 'fetatomatosalad.jpg'),
(6, 'test create', 'test description create burger', 'test burger', 'burger test allergen', '50.00', '50', '100.00', 'Burgers', 'pattys.jpg'),
(7, 'Cake', 'Corn tortillas, cheddar, Monterey jack, sour cream, jalapenos, coriander salsa, guacamole ', 'strawberries', 'bi', '10.00', '5', '11.00', 'Burgers', 'bgsquares.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `Customers`
--

CREATE TABLE `Customers` (
  `ID` int(255) NOT NULL,
  `Name` varchar(16) NOT NULL,
  `Surname` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` varchar(16) NOT NULL,
  `Password` varchar(18) NOT NULL,
  `Student` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Postcode` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Customers`
--

INSERT INTO `Customers` (`ID`, `Name`, `Surname`, `Email`, `Phone`, `Password`, `Student`, `Postcode`, `Address`) VALUES
(20, 'Ricardo Marino', 'Marino', 'ricardomarmarino@gmail.com', '07922122885', '1234', '', 'EH4 2PJ', '3 Grigor Drive, Grigor Drive'),
(21, 'andy', 'Mclay', 'Fuckyou@motherfucker.com', '077dickhead', 'andy', '', 'EH32 9BY', '22 North Bank Road'),
(22, 'Try1', 'try', 'try@email.com', '0784548547', '1234', '', 'EH3 2pj', 'edinburgh'),
(23, 'Francis', 'Irving', 'Frankisbot@gmail.com', '07341839779', 'ricardo', '', 'EH4 2PJ', 'EH4 2PJ');

-- --------------------------------------------------------

--
-- Table structure for table `Desserts`
--

CREATE TABLE `Desserts` (
  `ID` int(255) NOT NULL,
  `Name` varchar(1000) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Ingredients` varchar(1000) NOT NULL,
  `Allergens` varchar(1000) NOT NULL,
  `Cost` decimal(10,2) NOT NULL,
  `Tax` decimal(10,2) NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Desserts`
--

INSERT INTO `Desserts` (`ID`, `Name`, `Description`, `Ingredients`, `Allergens`, `Cost`, `Tax`, `Price`, `Category`, `Image`) VALUES
(5, 'nombre', 'description ', 'ingredients', 'allergens', '5.00', '3.00', '8.00', 'Desserts', 'badboys.jpg'),
(6, 'nombre', 'description ', 'ingredients', 'allergens', '5.00', '3.00', '8.00', 'Desserts', 'badboys.jpg'),
(7, 'nombre2', 'Feta, chilli oil, black onion seeds, flat bread ', 'Red wine-garlic salami, bourbon-cascabel chorizo, porcini-truffle salami, cornichon, marinated olives, bocconcini, grilled peppers, ciabatta, extra virgin olive oil ', 'allergens', '10.00', '0.95', '25.00', 'Desserts', 'fetatomatosalad.jpg'),
(8, 'nombre', 'Feta, chilli oil, black onion seeds, flat bread ', 'Red wine-garlic salami, bourbon-cascabel chorizo, porcini-truffle salami, cornichon, marinated olives, bocconcini, grilled peppers, ciabatta, extra virgin olive oil ', 'none', '5.00', '3.00', '11.00', 'Desserts', 'beetroot.jpg'),
(9, 'nombre', 'Feta, chilli oil, black onion seeds, flat bread ', 'Red wine-garlic salami, bourbon-cascabel chorizo, porcini-truffle salami, cornichon, marinated olives, bocconcini, grilled peppers, ciabatta, extra virgin olive oil ', 'none', '5.00', '3.00', '11.00', 'Desserts', 'beetroot.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `Drinks`
--

CREATE TABLE `Drinks` (
  `ID` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Ingredients` varchar(255) NOT NULL,
  `Allergens` varchar(255) NOT NULL,
  `Cost` decimal(10,2) NOT NULL,
  `Tax` decimal(10,2) NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Drinks`
--

INSERT INTO `Drinks` (`ID`, `Name`, `Description`, `Ingredients`, `Allergens`, `Cost`, `Tax`, `Price`, `Category`, `Image`) VALUES
(1, 'nombre2', 'description ', 'ingredients', 'allergens', '5.00', '3.00', '8.00', 'Drinks', 'joker.jpg'),
(2, 'nombre', 'description ', 'ingredients', 'allergens', '5.00', '3.00', '8.00', 'Drinks', 'badboys.jpg'),
(3, 'nombre2', 'Feta, chilli oil, black onion seeds, flat bread ', 'Red wine-garlic salami, bourbon-cascabel chorizo, porcini-truffle salami, cornichon, marinated olives, bocconcini, grilled peppers, ciabatta, extra virgin olive oil ', 'allergens', '10.00', '0.95', '25.00', 'Drinks', 'fetatomatosalad.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ExtraIngredients`
--

CREATE TABLE `ExtraIngredients` (
  `ID` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Cost` decimal(10,2) NOT NULL,
  `Tax` decimal(10,2) NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `Category` varchar(15) NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Hotdogs`
--

CREATE TABLE `Hotdogs` (
  `ID` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Ingredients` varchar(255) NOT NULL,
  `Allergens` varchar(255) NOT NULL,
  `Cost` decimal(10,2) NOT NULL,
  `Tax` decimal(10,0) NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Hotdogs`
--

INSERT INTO `Hotdogs` (`ID`, `Name`, `Description`, `Ingredients`, `Allergens`, `Cost`, `Tax`, `Price`, `Category`, `Image`) VALUES
(3, 'nombre', 'description ', 'ingredients', 'allergens', '5.00', '3', '8.00', 'Hotdogs', 'badboys.jpg'),
(4, 'hot dog', 'description ', 'ingredients', 'allergens', '5.00', '3', '8.00', 'Hotdogs', 'chilli-dog-hot-dog-hotdog-hotdog-and-chips-1059865.jpg'),
(5, 'nombre2', 'Feta, chilli oil, black onion seeds, flat bread ', 'Red wine-garlic salami, bourbon-cascabel chorizo, porcini-truffle salami, cornichon, marinated olives, bocconcini, grilled peppers, ciabatta, extra virgin olive oil ', 'allergens', '10.00', '1', '25.00', 'Hotdogs', 'fetatomatosalad.jpg'),
(6, 'nombre', 'Feta, chilli oil, black onion seeds, flat bread ', 'Red wine-garlic salami, bourbon-cascabel chorizo, porcini-truffle salami, cornichon, marinated olives, bocconcini, grilled peppers, ciabatta, extra virgin olive oil ', 'none', '5.00', '3', '11.00', 'Hotdogs', 'beetroot.jpg'),
(7, 'nombre', 'Feta, chilli oil, black onion seeds, flat bread ', 'Red wine-garlic salami, bourbon-cascabel chorizo, porcini-truffle salami, cornichon, marinated olives, bocconcini, grilled peppers, ciabatta, extra virgin olive oil ', 'none', '5.00', '3', '11.00', 'Hotdogs', 'beetroot.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `MainCourses`
--

CREATE TABLE `MainCourses` (
  `ID` int(255) NOT NULL,
  `Name` varchar(1000) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Ingredients` varchar(1000) NOT NULL,
  `Allergens` varchar(1000) NOT NULL,
  `Cost` decimal(10,2) NOT NULL,
  `Tax` decimal(10,2) NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `Category` text NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `MainCourses`
--

INSERT INTO `MainCourses` (`ID`, `Name`, `Description`, `Ingredients`, `Allergens`, `Cost`, `Tax`, `Price`, `Category`, `Image`) VALUES
(6, 'nombre', 'description ', 'ingredients', 'allergens', '5.00', '3.00', '8.00', 'MainCourses', 'badboys.jpg'),
(7, 'nombre', 'Feta, chilli oil, black onion seeds, flat bread ', 'Red wine-garlic salami, bourbon-cascabel chorizo, porcini-truffle salami, cornichon, marinated olives, bocconcini, grilled peppers, ciabatta, extra virgin olive oil ', 'allergens', '5.00', '0.95', '7.00', 'MainCourses', 'chilli-dog-hot-dog-hotdog-hotdog-and-chips-1059865.jpg'),
(8, 'nombre2', 'Feta, chilli oil, black onion seeds, flat bread ', 'Red wine-garlic salami, bourbon-cascabel chorizo, porcini-truffle salami, cornichon, marinated olives, bocconcini, grilled peppers, ciabatta, extra virgin olive oil ', 'allergens', '10.00', '0.95', '25.00', 'MainCourses', 'fetatomatosalad.jpg'),
(9, 'nombre', 'Feta, chilli oil, black onion seeds, flat bread ', 'Red wine-garlic salami, bourbon-cascabel chorizo, porcini-truffle salami, cornichon, marinated olives, bocconcini, grilled peppers, ciabatta, extra virgin olive oil ', 'none', '5.00', '3.00', '11.00', 'MainCourses', 'beetroot.jpg'),
(10, 'nombre update', 'Feta, chilli oil, black onion seeds, flat bread ', 'Red wine-garlic salami, bourbon-cascabel chorizo, porcini-truffle salami, cornichon, marinated olives, bocconcini, grilled peppers, ciabatta, extra virgin olive oil ', 'none', '5.00', '3.00', '11.00', 'MainCourses', '');

-- --------------------------------------------------------

--
-- Table structure for table `Milkshakes`
--

CREATE TABLE `Milkshakes` (
  `ID` int(255) NOT NULL,
  `Name` varchar(1000) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Ingredients` varchar(1000) NOT NULL,
  `Allergens` varchar(1000) NOT NULL,
  `Cost` decimal(10,2) NOT NULL,
  `Tax` decimal(10,2) NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Milkshakes`
--

INSERT INTO `Milkshakes` (`ID`, `Name`, `Description`, `Ingredients`, `Allergens`, `Cost`, `Tax`, `Price`, `Category`, `Image`) VALUES
(8, 'nombre', 'description ', 'ingredients', 'allergens', '5.00', '3.00', '11.00', 'Milkshakes', 'badboys.jpg'),
(9, 'nombre2', 'Feta, chilli oil, black onion seeds, flat bread ', 'Red wine-garlic salami, bourbon-cascabel chorizo, porcini-truffle salami, cornichon, marinated olives, bocconcini, grilled peppers, ciabatta, extra virgin olive oil ', 'allergens', '10.00', '0.95', '25.00', 'Milkshakes', 'fetatomatosalad.jpg'),
(10, 'nombre', 'Feta, chilli oil, black onion seeds, flat bread ', 'Red wine-garlic salami, bourbon-cascabel chorizo, porcini-truffle salami, cornichon, marinated olives, bocconcini, grilled peppers, ciabatta, extra virgin olive oil ', 'none', '5.00', '3.00', '11.00', 'Milkshakes', 'beetroot.jpg'),
(11, 'nombre', 'Feta, chilli oil, black onion seeds, flat bread ', 'Red wine-garlic salami, bourbon-cascabel chorizo, porcini-truffle salami, cornichon, marinated olives, bocconcini, grilled peppers, ciabatta, extra virgin olive oil ', 'none', '5.00', '3.00', '11.00', 'Milkshakes', 'beetroot.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `Promotions`
--

CREATE TABLE `Promotions` (
  `ID` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` varchar(10) NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Promotions`
--

INSERT INTO `Promotions` (`ID`, `title`, `description`, `price`, `Image`) VALUES
(2, 'Milkshake for two', 'Two milkshakes of choice', '15.00', 'milkshake.red.png'),
(3, 'Burger for TWO', '2 burgers of choice', '15.00', '2burger.jpg'),
(18, 'Voucher', 'Enjoy at the restaurant', '50', 'burguer&fries.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `Starters`
--

CREATE TABLE `Starters` (
  `ID` int(255) NOT NULL,
  `Name` varchar(1000) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Ingredients` varchar(1000) NOT NULL,
  `Allergens` varchar(1000) NOT NULL,
  `Cost` decimal(10,2) NOT NULL,
  `Tax` decimal(10,2) NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `Category` text NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Starters`
--

INSERT INTO `Starters` (`ID`, `Name`, `Description`, `Ingredients`, `Allergens`, `Cost`, `Tax`, `Price`, `Category`, `Image`) VALUES
(17, 'CHEESY NACHOS (v) ', 'Corn tortillas, cheddar, Monterey jack, sour cream, jalapenos, coriander salsa, guacamole ', 'Corn tortillas, cheddar, Monterey jack, sour cream, jalapenos, coriander salsa, guacamole ', 'none', '5.00', '0.95', '5.95', 'Starters', 'nachos.jpg'),
(18, 'BEETROOT HUMMUS (v) ', 'Feta, chilli oil, black onion seeds, flat bread ', 'Feta, chilli oil, black onion seeds, flat bread ', 'none', '5.00', '0.25', '5.25', 'Starters', 'beetroot.jpg'),
(19, 'EAST COAST CURED CHARCUTERIE ', 'Red wine-garlic salami, bourbon-cascabel chorizo, porcini-truffle salami, cornichon, marinated olives, bocconcini, grilled peppers, ciabatta, extra virgin olive oil ', 'Red wine-garlic salami, bourbon-cascabel chorizo, porcini-truffle salami, cornichon, marinated olives, bocconcini, grilled peppers, ciabatta, extra virgin olive oil ', 'none', '8.00', '0.95', '8.95', 'Starters', 'charcutery.jpg'),
(28, 'nombre2', 'Feta, chilli oil, black onion seeds, flat bread ', 'Red wine-garlic salami, bourbon-cascabel chorizo, porcini-truffle salami, cornichon, marinated olives, bocconcini, grilled peppers, ciabatta, extra virgin olive oil ', 'allergens', '5.00', '3.00', '11.00', 'Starters', 'cakedessert.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `Subscribe`
--

CREATE TABLE `Subscribe` (
  `id` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Subscribe`
--

INSERT INTO `Subscribe` (`id`, `Email`) VALUES
(1, '$suscribe_email'),
(2, 'ricardomarmarino@gmail.com'),
(3, 'alvaro@kkk.mp'),
(4, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Booking`
--
ALTER TABLE `Booking`
  ADD UNIQUE KEY `ID` (`ID`) USING BTREE;

--
-- Indexes for table `Burgers`
--
ALTER TABLE `Burgers`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `Customers`
--
ALTER TABLE `Customers`
  ADD UNIQUE KEY `Customer.ID` (`ID`),
  ADD KEY `Customer.Email` (`Email`);

--
-- Indexes for table `Desserts`
--
ALTER TABLE `Desserts`
  ADD UNIQUE KEY `ID` (`ID`) USING BTREE,
  ADD KEY `Name` (`Name`) USING BTREE;

--
-- Indexes for table `Drinks`
--
ALTER TABLE `Drinks`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `ExtraIngredients`
--
ALTER TABLE `ExtraIngredients`
  ADD UNIQUE KEY `ID` (`ID`) USING BTREE,
  ADD KEY `Name` (`Name`) USING BTREE;

--
-- Indexes for table `Hotdogs`
--
ALTER TABLE `Hotdogs`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `MainCourses`
--
ALTER TABLE `MainCourses`
  ADD UNIQUE KEY `ID` (`ID`) USING BTREE;

--
-- Indexes for table `Milkshakes`
--
ALTER TABLE `Milkshakes`
  ADD UNIQUE KEY `ID` (`ID`) USING BTREE,
  ADD KEY `Name` (`Name`) USING BTREE;

--
-- Indexes for table `Promotions`
--
ALTER TABLE `Promotions`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Starters`
--
ALTER TABLE `Starters`
  ADD UNIQUE KEY `ID` (`ID`) USING BTREE;

--
-- Indexes for table `Subscribe`
--
ALTER TABLE `Subscribe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Booking`
--
ALTER TABLE `Booking`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `Burgers`
--
ALTER TABLE `Burgers`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `Customers`
--
ALTER TABLE `Customers`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `Desserts`
--
ALTER TABLE `Desserts`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `Drinks`
--
ALTER TABLE `Drinks`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ExtraIngredients`
--
ALTER TABLE `ExtraIngredients`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Hotdogs`
--
ALTER TABLE `Hotdogs`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `MainCourses`
--
ALTER TABLE `MainCourses`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `Milkshakes`
--
ALTER TABLE `Milkshakes`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `Promotions`
--
ALTER TABLE `Promotions`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `Starters`
--
ALTER TABLE `Starters`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `Subscribe`
--
ALTER TABLE `Subscribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
