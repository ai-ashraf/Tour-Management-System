-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 17, 2022 at 02:08 PM
-- Server version: 5.7.33
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tour`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(100) NOT NULL,
  `package_id` int(100) NOT NULL,
  `package_name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `amount` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `package_id`, `package_name`, `price`, `start_date`, `end_date`, `user_id`, `name`, `mobile`, `address`, `amount`) VALUES
(1, 1, 'Saint Martin', 10000, '2022-09-13', '2022-09-28', 1, 'Md Ashraful Islam', 1989578370, 'Bashundhara gate matbor bari goli', 5),
(2, 3, 'Remakri Fall', 10000, '2022-09-29', '2022-10-05', 2, 'Alex Park', 1622795221, 'Bashundhara gate matbor bari goli', 2),
(3, 1, 'Saint Martin', 10000, '2022-09-13', '2022-09-28', 3, 'A I Ashraf', 1989578370, 'Bashundhara gate matbor bari goli', 5),
(4, 5, 'Coxs Bazar', 5000, '2022-09-20', '2022-09-24', 4, 'Mark Juckerbarg', 1555585555, 'Dhaka', 1),
(5, 4, 'Amiyakhum Waterfall', 9000, '2022-09-27', '2022-10-03', 5, 'Alon  Musk', 1521411947, 'USA', 2);

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `package_id` int(100) NOT NULL,
  `package_name` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `price` int(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`package_id`, `package_name`, `type`, `location`, `start_date`, `end_date`, `price`, `image`, `description`) VALUES
(1, 'Saint Martin', 'Regular', 'Teknaf', '2022-09-13', '2022-09-28', 10000, 'smartin.png', 'Saint Martin\'s Island is located at the mouth of the Naff River, about 9 km south of Teknaf Upazila in Cox\'s Bazar, the southernmost district of Bangladesh. It is a strong island located in the north eastern part of the Bay of Bengal. The island is also known as Coconut Ginger because of the abundance of coconuts found in Saint Martin.'),
(2, 'Sadapathor', 'Regular', 'Shyhlet', '2022-09-27', '2022-10-01', 8000, 'sadapathor.JPG', ''),
(3, 'Remakri Fall', 'Regular', 'Thanchi', '2022-09-29', '2022-10-05', 10000, 'remakri.jpg', 'A trip usually involving a series of stops and ending at the point where it started a tour of the city. 2 : a fixed period of duty. tour. verb. toured; touring.'),
(4, 'Amiyakhum Waterfall', 'Student', 'Bandorban', '2022-09-27', '2022-10-03', 9000, 'amiyakhum.jpg', 'A trip usually involving a series of stops and ending at the point where it started a tour of the city. 2 : a fixed period of duty. tour. verb. toured; touring.'),
(5, 'Coxs Bazar', 'Regular', 'Coxs Bazar', '2022-09-20', '2022-09-24', 5000, 'coxbazar.jpg', 'A trip usually involving a series of stops and ending at the point where it started a tour of the city. 2 : a fixed period of duty. tour. verb. toured; touring.');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_rating` int(100) NOT NULL,
  `user_review` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review_id`, `user_name`, `user_rating`, `user_review`) VALUES
(1, 'Md Ashraful\r\nIslam', 5, 'Good'),
(2, 'Alex', 4, 'czddsvsdawfzc'),
(3, 'A I', 5, 'This is good agency. Recommended'),
(4, 'Mark', 4, 'That was nice trip'),
(5, 'Alon ', 5, 'Good. wjyegfhnsujhsjfkd,v  huef ufh suofh'),
(6, 'Md Ashraful', 2, 'Not reccomended');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `mobile` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `mobile`, `email`, `password`) VALUES
(1, 'Md Ashraful', 'Islam', 1989578370, 'iashraful801@gmail.com', '111111'),
(2, 'Alex', 'Park', 1622795221, 'alx@gmail.com', '111'),
(3, 'A I', 'Ashraf', 1989578370, 'ai22524@gmail.com', '111'),
(4, 'Mark', 'Juckerbarg', 1555585555, 'mark@gmail.com', '111'),
(5, 'Alon ', 'Musk', 1521411947, 'alon@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `package_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
