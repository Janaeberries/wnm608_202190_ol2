-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 07, 2021 at 12:03 PM
-- Server version: 5.7.35-cll-lve
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `janaeAAU_WNM`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `category` varchar(32) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `date_create` datetime NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `price`, `date_create`, `description`, `thumbnail`, `images`) VALUES
(1, 'hydrating face wash', 'cleanser', 10.00, '2021-11-07 10:54:59', 'The hydrating face wash is great for those with dry skin or looking for extra moisture during the colder seasons. Try pairing with hydrating serums and a toner for a full hydration routine.', 'img/hydrating_cleanser.jpeg', 'img/cleanser_bottle.jpeg'),
(2, 'h2o toner', 'toners', 15.00, '2021-11-07 10:54:09', 'The h2o toner is a great solution for those with dry skin and wanting to stay away from harmful ingredients in other toners.', 'img/h2o_toner_thumb.jpeg', 'img/h2o_toner.jpeg'),
(3, 'foaming cleanser', 'cleanser', 12.00, '2021-11-07 11:39:59', 'The foaming cleanser is great for those mornings when you feel like you\'re having a hard time waking up. The foams draws out dirt to reveal a fresh face.', 'img/foaming_cleanser_thumb.jpeg', 'img/foaming_cleanser.jpeg'),
(4, 'rosewater toner', 'toners', 12.00, '2021-11-07 11:44:38', 'The rosewater toner is great for acne prone skin and has antibacterial properties for healing wounds on the skin.', 'img/rosewater_thumb.jpeg', 'img/rosewater_toner.jpeg'),
(5, 'aha toner', 'toners', 15.00, '2021-11-07 11:47:46', 'aha\'s are great for getting rid of dead/damaged layers of skin and bringing fresh, even skin to the surface. Skin becomes smoother and brighter.', 'img/aha_toner_thumb.jpeg', 'img/aha_toner.jpeg'),
(6, 'vitamin c serum', 'serum', 12.00, '2021-11-07 11:49:22', 'vitamin c is best when used before moisturizer and sunscreen. skin appears brighter and more even with continued use.', 'img/vitaminc_thumb.jpeg', 'img.vitaminc.jpeg'),
(7, 'night repair serum', 'serum', 15.00, '2021-11-07 11:50:59', 'the night repair serum is great when used during the night routine and provides repair to the skin while you sleep. you will wake up with brighter, fuller skin.', 'img/night_repair_thumb.jpeg', 'img/night_repair.jpeg'),
(8, 'daytime serum', 'serum', 12.00, '2021-11-07 11:52:43', 'daytime serum is great for extra brightness for the skin in the mornings. Best when followed up with sunscreen and moisturizer.', 'img/daytime_thumb.jpeg', 'img/daytime_serum.jpeg'),
(9, 'hydrating moisturizer', 'moisturizers', 12.00, '2021-11-07 11:54:14', 'the hydrating moisturizer works best for those with dry skin and is a great solution during colder months.', 'img/hydrate_thumb.jpeg', 'img/hydrate_moisture.jpeg'),
(10, 'night time moisturizer', 'moisturizers', 12.00, '2021-11-07 11:55:41', 'best when used during the night time with the night repair serum. reveals smoother, brighter skin.', 'img/night_moisture_thumb.jpeg', 'img/night_moisture.jpeg'),
(11, 'daytime moisturizer', 'moisturizers', 12.00, '2021-11-07 12:00:42', 'the daytime moisturizer is a great one that can be used daily and can even be used at night for those with oily skin.', 'img/daytime_thumbnail.jpeg', 'img/daytime_moitsurizer.jpeg'),
(12, 'sunscreen', 'moisturizers', 10.00, '2021-11-07 12:02:07', 'sunscreen must be utilized daily and is great when used with the daytime routine.', 'img/sunscreen_thumb.jpeg', 'img/sunscreen.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
