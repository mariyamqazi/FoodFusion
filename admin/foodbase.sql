-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2026 at 07:38 PM
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
-- Database: `foodbase`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'mariyam', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `customerlogin`
--

CREATE TABLE `customerlogin` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `fullname` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customerlogin`
--

INSERT INTO `customerlogin` (`id`, `username`, `email`, `password`, `fullname`) VALUES
(1, 'harry_potter', 'harry@yahoo.com', '$2y$10$ZfQU3XaALukBOwRM9sKd3.G7kHxkw6ApJ7da44ye/DVymXbvTwzEa', 'harrypotter'),
(2, 'john _clerk', 'johnkhan@gmail.com', '$2y$10$MrYA/qEXl7ALSJRwHy5M9.AtgdnE1AYJANbvYP9DK8X8GePkM613.', 'john clerk'),
(3, 'zainabqazi2', 'zainab@gmail.com', '$2y$10$YnS8eIGlI3X3/wdax7Qm9eUeRJe1CLw/BezwtPo57KTAl/puGhMM2', 'Zainab Qazi'),
(4, 'mariyam_qazii', 'mariyamqazi@gmail.com', '$2y$10$hCqp1618uWEnl7Hk50D81OASO16X.ht.jU32ojXjRUbY4JjwjMRta', 'mariyamqazi'),
(5, 'alex', 'alex@2gmail.com', '$2y$10$n1rTdrEiezOT3n78ZD6nm.W8c3D9PyGrLxxu3.RGIXrjvS.bLBe4W', 'Alex Robin'),
(6, 'alex12', 'alex12@gmail.com', '$2y$10$EDLZWs3arOQx0OzROqQP0uecyX/Cdgenk7yteXjnEzZQF3IjxgkZy', 'Alex Robin'),
(7, 'saba00', 'saba@gmail.com', '$2y$10$sJ3i7fX6Iq.xMTEFXe9U.OVnD48ZB5yxyjU91rARX1XXDd7iDsygG', 'sabakhan'),
(8, 'hamzaqazi66', 'hamzaqazi@gmail.com', '$2y$10$Nq2In1r0Yp8g0DdE4NJaZOomzi8KsxSDKmSFYyTul0492o23Es4N.', 'hamzaqazi'),
(9, 'ayezakhan77', 'ayeza@gmail.com', '$2y$10$H2WACfPd10s6px41k8w.Gee8hXWoZ5HCLj73YXbcbI1FGxEYyPSI.', 'ayezakhan'),
(10, 'alexrobin', 'alexr@gmail.com', '$2y$10$rL3jBmPfLZQYI8MEZGq8puohrkjJcbx7U2f4WZNB7ik7NASWGyRCi', 'Alex Robin'),
(11, 'alexa9', 'alexa@gmail.com', '$2y$10$INF0/41VYy0gNnfZfIooIe86IqGuOpglRzoGS0BrrMicCO2C7ogw.', 'alexa');

-- --------------------------------------------------------

--
-- Table structure for table `customerorder`
--

CREATE TABLE `customerorder` (
  `id` int(11) NOT NULL,
  `emailaddress` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `phonenumber` int(11) NOT NULL,
  `reservedate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customerorder`
--

INSERT INTO `customerorder` (`id`, `emailaddress`, `password`, `phonenumber`, `reservedate`) VALUES
(9, 'alex9@gmail.com', '123', 2147483647, '2026-04-02 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `textbox` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `email`, `password`, `textbox`) VALUES
(1, 'harry@yahoo.com', '1234', 'good'),
(2, 'hamzaqazi@gmail.com', '66', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `foodorders`
--

CREATE TABLE `foodorders` (
  `id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `item` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `food_desc` varchar(200) NOT NULL,
  `image` varchar(250) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `address` text NOT NULL,
  `price` int(11) NOT NULL DEFAULT 2000,
  `total_price` int(11) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Pending',
  `order_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `foodorders`
--

INSERT INTO `foodorders` (`id`, `username`, `email`, `phone`, `item`, `name`, `food_desc`, `image`, `quantity`, `address`, `price`, `total_price`, `status`, `order_time`) VALUES
(1, 'zainabqazi2', 'zainab@gmail.com', '0829892', 'gril8', 'Grill Food', 'Delicious grilled food made with fresh ingredients.\r\n        sauce & garlic bread/chappati + jambo soft drink', './Images/gril8.avif', 2, 'Karachi', 2000, 4000, 'Cancelled', '2026-04-14 22:11:50'),
(2, 'zainabqazi2', 'zainab@gmail.com', '0829892', 'grill3', 'Grill Food', 'Delicious grilled food made with fresh ingredients.\r\n        sauce & garlic bread/chappati + jambo soft drink', './Images/grill3.jpg', 1, 'st.colony', 2000, 2000, 'Cancelled', '2026-04-14 22:17:25'),
(3, 'zainabqazi2', 'martiin@gmail.com', '0829892', 'desi3', 'Curry Dishes', 'Delicious Italian food made with fresh ingredients.\r\n        sauce & garlic bread/chappati + jambo soft drink', './Images/desi3.jpg', 4, 'Karachi', 2000, 8000, 'Pending', '2026-04-14 22:26:23'),
(4, 'mariyam_qazii', 'martiin@gmail.com', '0829892', 'grill1', 'Grill Food', 'Delicious grilled food made with fresh ingredients.\r\n        sauce & garlic bread/chappati + jambo soft drink', './Images/grill1.jpg', 1, 'Karachi', 2000, 2000, 'Cancelled', '2026-04-14 22:28:18'),
(5, 'alex', 'alex@gmail.com', '03313985489', 'grill3', 'Grill Food', 'Delicious grilled food made with fresh ingredients.\r\n        sauce & garlic bread/chappati + jambo soft drink', './Images/grill3.jpg', 3, 'st.colony', 2000, 6000, 'Cancelled', '2026-04-15 19:14:31'),
(6, 'alex12', 'alex2@gmail.com', '03313985489', 'food4', 'Curry Dishes', 'Delicious Italian food made with fresh ingredients.\r\n        sauce & garlic bread/chappati + jambo soft drink', './Images/food4.jpg', 5, 'st.colony', 2000, 10000, 'Pending', '2026-04-15 19:27:52'),
(7, 'alex12', 'alex2@gmail.com', '03313985489', 'food4', 'Curry Dishes', 'Delicious Italian food made with fresh ingredients.\r\n        sauce & garlic bread/chappati + jambo soft drink', './Images/food4.jpg', 5, 'st.colony', 2000, 10000, 'Cancelled', '2026-04-15 19:28:37'),
(8, 'alex12', 'alex2@gmail.com', '03313985489', 'food4', 'Curry Dishes', 'Delicious Italian food made with fresh ingredients.\r\n        sauce & garlic bread/chappati + jambo soft drink', './Images/food4.jpg', 5, 'st.colony', 2000, 10000, 'Pending', '2026-04-15 19:29:41'),
(9, 'saba00', 'saba@gmail.com', '03313985489', 'restaurant', 'Grill Food', 'A variety of grilled dishes for every taste.\r\n        sauce & garlic bread/chappati + jambo soft drink', './Images/restaurant.jpg', 3, 'st.colony', 2000, 6000, 'Cancelled', '2026-04-15 19:42:15'),
(10, 'saba00', 'saba@gmail.com', '03313985489', 'restaurant', 'Grill Food', 'A variety of grilled dishes for every taste.\r\n        sauce & garlic bread/chappati + jambo soft drink', './Images/restaurant.jpg', 2, 'st.colony', 2000, 4000, 'Cancelled', '2026-04-15 19:50:59'),
(11, 'hamzaqazi66', 'hamzaqazi@gmail.com', '0902909029', 'restaurant', 'Grill Food', 'A variety of grilled dishes for every taste.\r\n        sauce & garlic bread/chappati + jambo soft drink', './Images/restaurant.jpg', 2, 'Karachi', 2000, 4000, 'Cancelled', '2026-04-15 19:55:45'),
(12, 'hamzaqazi66', 'hamzaqazi@gmail.com', '0902909029', 'Italian food5', 'Italian food', 'Delicious Italian food made with fresh ingredients.\r\n        sauce & garlic bread/chappati + jambo soft drink', './Images/Italian food5.jpg', 1, 'st.colony', 2000, 2000, 'Cancelled', '2026-04-15 19:57:01'),
(13, 'hamzaqazi66', 'hamzaqazi@gmail.com', '0902909029', 'Italian food5', 'Italian food', 'Delicious Italian food made with fresh ingredients.\r\n        sauce & garlic bread/chappati + jambo soft drink', './Images/Italian food5.jpg', 1, 'Karachi', 2000, 2000, 'Cancelled', '2026-04-15 20:03:43'),
(14, 'hamzaqazi66', 'hamzaqazi@gmail.com', '0902909029', 'pasta2', 'Italian food', 'Delicious Italian food made with fresh ingredients.\r\n        sauce & garlic bread/chappati + jambo soft drink', './Images/pasta2.avif', 1, 'Karachi', 2000, 2000, 'Cancelled', '2026-04-15 20:04:35'),
(15, 'hamzaqazi66', 'hamzaqazi@gmail.com', '9203940822', 'grill6', 'Grill Food', 'Savory and spicy grilled options.\r\n        sauce & garlic bread/chappati + jambo soft drink', './Images/grill6.jpg', 1, 'Karachi', 2000, 2000, 'Cancelled', '2026-04-15 20:07:01'),
(16, 'hamzaqazi66', 'hamzaqazi@gmail.com', '0902909029', 'Italian food2', 'Italian food', 'Delicious Italian food made with fresh ingredients.\r\n        sauce & garlic bread/chappati + jambo soft drink', './Images/Italian food2.jpg', 1, 'Karachi', 2000, 2000, 'Cancelled', '2026-04-15 20:10:01'),
(17, 'hamzaqazi66', 'alex12@gmail.com', '03313985489', 'Italian food2', 'Italian food', 'Delicious Italian food made with fresh ingredients.\r\n        sauce & garlic bread/chappati + jambo soft drink', './Images/Italian food2.jpg', 1, 'st.colony', 2000, 2000, 'Cancelled', '2026-04-15 20:14:05'),
(19, 'ayezakhan77', 'ayza@gmail.com', '03313985489', 'grill6', 'Grill Food', 'Savory and spicy grilled options.\r\n        sauce & garlic bread/chappati + jambo soft drink', './Images/grill6.jpg', 2, 'st.colony', 2000, 4000, 'Cancelled', '2026-04-15 20:16:57'),
(20, 'alexrobin', 'hamzaqazi@gmail.com', '0902909029', 'restaurant', 'Grill Food', 'A variety of grilled dishes for every taste.\r\n        sauce & garlic bread/chappati + jambo soft drink', './Images/restaurant.jpg', 1, 'st.colony', 2000, 2000, 'Pending', '2026-04-15 21:18:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customerlogin`
--
ALTER TABLE `customerlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customerorder`
--
ALTER TABLE `customerorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foodorders`
--
ALTER TABLE `foodorders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customerlogin`
--
ALTER TABLE `customerlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `customerorder`
--
ALTER TABLE `customerorder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `foodorders`
--
ALTER TABLE `foodorders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
