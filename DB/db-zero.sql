-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 17, 2023 at 01:05 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db-zero`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'taqwa_majed@gmail.com', '1041999');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `qty` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `name`, `price`, `size`, `qty`) VALUES
(40, 'Glitter Round Decor Chain Bracelet 1pc', '26.0 JOD', 'S', '3'),
(38, 'Alexander Knot Decor Buckle Belt', '6.0 JOD', 'XL', '1');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fullname`, `email`, `message`) VALUES
(1, 'taqwa', 'tqwa1999@gmail.com', 'wwwww'),
(6, 'taqwa', 'tqwa1999@gmail.com', 'thank you'),
(7, 'taqwa majed', 'tqwa1999@gmail.com', 'thank you');

-- --------------------------------------------------------

--
-- Table structure for table `prodect`
--

DROP TABLE IF EXISTS `prodect`;
CREATE TABLE IF NOT EXISTS `prodect` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prodect`
--

INSERT INTO `prodect` (`id`, `name`, `price`, `image`, `category`) VALUES
(1, 'Alexander Knot Decor Buckle Belt', '6.0 JOD', 'images/alexander-knot.jpeg', 'Accessories'),
(2, 'Allover Print Open Front Kimono', '26.0 JOD', 'images/allover.jpeg', 'Women'),
(3, 'Glitter Round Decor Chain Bracelet 1pc', '26.0 JOD', 'images/glitter-round-decor.jpeg', 'Accessories'),
(23, 'Metal Decor Bracelet', '4.0 JOD', 'images/metal-decor.jpeg', 'Accessories'),
(5, 'Floral Print Shirred Smock Dress', '20.0 JOD', 'images/dress-baby.jpg', 'Kids'),
(24, 'Lapel Collar Belted Blazer', '15.0 JOD', 'images/lapel-collar.jpeg', 'Women'),
(7, 'Eyelet Decor Metal Buckle Belt', '5.0 JOD', 'images/eyelet-decor.jpeg', 'Accessories'),
(22, 'Contrast Tape Belted Kimono', '10.00 JOD', 'images/contrast-tape.jpeg', 'Women'),
(9, 'Rhinestone Decor Ring 2pcs', '3.0 JOD', 'images/rhinestone-decor-ring.jpeg', 'Accessories'),
(21, 'Contrast Lace Ruffle Hem Dress', '15.0 JOD', 'images/dress-black-baby.jpg', 'Kids'),
(11, 'Bag & Chain Decor Belt', '6.0 JOD', 'images/bag-chain.jpeg', 'Accessories'),
(13, 'Geo Print Button Front Shirt & Pants', '29.0 JOD', 'images/geo-print-button.jpeg', 'Women'),
(14, 'Zircon Decor Cuff Bangle', '4.0 JOD', 'images/zircon-decor.jpeg', 'Accessories'),
(15, 'Tie Front Longline Blouse', '13.0 JOD', 'images/tie-front.jpeg', 'Women'),
(16, 'Mock Neck Belted Jumpsuit With Cape', '43.0 JOD', 'images/mock-neck-belted.jpeg', 'Women'),
(17, 'Solid Rhinestone Detail Blouse', '15.0 JOD', 'images/solid-rhinestone.jpeg', 'Women'),
(18, 'Belted Solid Dress & Open Front Kimono', '47.0 JOD', 'images/belted-solid-dress.jpeg', 'Women'),
(19, 'Tiered Cotton Dress', '17.66 JOD', 'images/dress-pink2-baby.jpg', 'Kids'),
(20, 'Neon Tiered Dress', '38.0 JOD', 'images/dress-pink.jpg', 'Kids'),
(25, 'Pleated V-Neck Belted Jumpsuit FMK', '24.0 JOD', 'images/jamsoot-baby.jpg', 'Kids'),
(26, 'Slant Pocket Straight Leg Jeans', '7.99 JOD', 'images/junis-baby.jpg', 'Kids');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirmpassword` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `fname`, `lname`, `password`, `confirmpassword`) VALUES
(39, 'taqwasalah@gmail.com', 'taqwa', 'salah', '$2y$10$6h1kBOPx75hLb8gI/jpC9u7JwMZqesVVM7XFMN78NqS7hyyB8CjHW', '$2y$10$G.jLsFQCTvGsMxAHbdGgTuE2vV3dK4KAAIF7IqxHtiSdrIzNwQyFm'),
(36, 'tqwa1999@gmail.com', 'taqwa', 'majed', '$2y$10$wDjFALmivqd0p.VrHrPKcOnHDfzbaGyCLi/bu65tlW8dxtCub5pti', '$2y$10$1u.JW29y1eC3YFWu2RqG.O8iJElCui0EZEeBlVWzeDpRu7Dbb3ToW'),
(37, 'mira@gmail.com', 'mira', 'sami', '$2y$10$4AfEfCP1kBWC2xk/rYdHg.NufGUq4nmM/T/WS2fNMISgurz3y8cte', '$2y$10$vxDnHVC66OTmnE5l2fBXp..JDP/m1TtKEN7lc5jfffMV8oXelVgtC'),
(41, 'majed1@gmail.com', 'taqwa', 'ahmad', '$2y$10$5bBp67WdHeLon6XA.i904Osn5yuzQZtxYZtvSQ.0./kurMiZPe4LS', '$2y$10$rLMrqnyPH.S61EVK4kJGneA6eWlBUKNLSSJbA2uWRCppfySztdieK'),
(42, 'mai88@gmail.com', 'mai', 'amro', '$2y$10$OoV8BxmladpkEhjPkf6/ruAv5RmD31j64QVM8nxknGtmxLDD23zWK', '$2y$10$hhmbjvT3mkuECn8CyYhGDuPukYtzYU3XItRgPqjomZZY6VHrtZKtS'),
(43, 'taqwa_majed@gmail.com', 'taqwa', 'majed', '$2y$10$Ckl6s9hvv324fzx0./AnGepeRgSZ6eBi6ks4ZcZq5kOaG3NthXmUC', '$2y$10$P.7G8raJJXuJZsP4eA3zLOCujUoysDIPfW5ptOv84TTf6JN.AV7oa');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
