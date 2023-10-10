-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2017 at 11:51 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rent_info_dbt`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads_post`
--

CREATE TABLE `ads_post` (
  `id` int(10) NOT NULL,
  `user_id` varchar(10) NOT NULL,
  `category` varchar(200) NOT NULL,
  `title` varchar(100) NOT NULL,
  `division` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `information` varchar(500) NOT NULL,
  `address` varchar(200) NOT NULL,
  `rentcost` varchar(30) NOT NULL,
  `image1` varchar(100) NOT NULL,
  `image2` varchar(100) NOT NULL,
  `image3` varchar(100) NOT NULL,
  `image4` varchar(100) NOT NULL,
  `post_date` varchar(50) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ads_post`
--

INSERT INTO `ads_post` (`id`, `user_id`, `category`, `title`, `division`, `city`, `information`, `address`, `rentcost`, `image1`, `image2`, `image3`, `image4`, `post_date`, `status`) VALUES
(7, '1', 'House', 'nur alom mention', 'Dhaka', 'Dhaka', '3 bed , 2 bath ,1 dinning attractive looking ', 'sukharabad 41/1 dhanmondi 32', '10000', 'dddd.jpg', 'dddd.jpg', 'dddd.jpg', 'dddd.jpg', '2017-08-28', '1'),
(9, '1', 'Vehicle', 'Rent Car', 'Dhaka', 'Dhaka', 'X corolla old model ac condition  carry 4 people par day rent.', 'East Rajabazar Dhaka-1215 mobile:-01710780329', '10000', '01w.jpg', '01w.jpg', '01w.jpg', '01w.jpg', '2017-09-11', '1'),
(10, '1', 'Event Management Instrument', 'Instrument', 'Dhaka', 'Dhaka', 'Guitar, electric  Guitar harmonica, trumpet, drum,octopad, keyboard for rent  ', 'Science lab mirpur road Dhaka-1215', '50000', '1448104539.jpg', '1448104539.jpg', '1448104539.jpg', '1448104539.jpg', '2017-09-11', '1'),
(11, '1', 'House', 'House', 'Dhaka', 'Dhaka', '1 bath 1 dining attractive look', 'rajabajr', '15000', '4.jpg', 'dddd.jpg', '48_big.jpg', '4.jpg', '10/09/2017', '1'),
(12, '1', 'House', 'habib vila', 'Dhaka', 'Dhaka', '1 bath 1 dinigng 1 becony attractive look full tilse room.', 'East bazaar  98 house 2nd floor \r\ncontact:01710780329', '10000', 'post_794-1_resize.jpg', 'post_794-1_resize.jpg', 'house.jpg', 'house.jpg', '2017-09-12', '1'),
(14, '1', 'House', 'habib vila', 'Dhaka', 'Dhaka', 'dhanmondi 32', 'dhanmondi 32', '20000', 'house room.jpg', 'house.jpg', 'images2.jpg', 'images3.jpg', '2017-09-13', '1');

-- --------------------------------------------------------

--
-- Table structure for table `blog_post`
--

CREATE TABLE `blog_post` (
  `id` int(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(400) NOT NULL,
  `image` varchar(100) NOT NULL,
  `post_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_post`
--

INSERT INTO `blog_post` (`id`, `user_id`, `title`, `description`, `image`, `post_date`) VALUES
(5, 1, 'car', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ', 'toyota-corolla-axio-1-5-g-2007-13826462.jpg', '2017-08-23'),
(6, 1, 'car', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ', 'toyota-corolla-axio-1-5-g-2007-13826462.jpg', '2017-08-23'),
(7, 1, 'House', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using', '1505169208images3.jpg', ''),
(8, 1, 'House', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using amamamamamamam', '1505158986exterior11.jpg', '2017-09-12');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `img_title` varchar(100) NOT NULL,
  `image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `user_id`, `img_title`, `image`) VALUES
(19, 1, 'House', '1505251379c.jpg'),
(20, 0, 'Car', '150525133323.jpg'),
(21, 0, 'Rent car', '150525134916874_large.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `profile_pic`
--

CREATE TABLE `profile_pic` (
  `id` int(15) NOT NULL,
  `user_id` varchar(16) NOT NULL,
  `image` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile_pic`
--

INSERT INTO `profile_pic` (`id`, `user_id`, `image`) VALUES
(1, '10', '1504976166user2-160x160.jpg'),
(2, '3', '1505064178IMG_4440.jpg'),
(3, '13', '1505279229depu.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `roll` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `mobile`, `roll`) VALUES
(3, 'admin', 'admin@gmail.com', '123', '0147892233', 'admin'),
(4, 'depu', 'jghghjgjhg', '22', '5121212', 'user'),
(5, 'depu', 'jhjhjhjhj', '123', '111313131', 'user'),
(6, 'depu', 'jghghjgjhg', '123', '01710780329', 'user'),
(7, 'sydur', 'hhhh', '123', '096555', 'user'),
(8, 'saiful', 'hhhh', '123', '096555', 'user'),
(9, 'sydur', 'md.depu@yahoo.com', '123', '01710780329', 'user'),
(10, 'depu', 'md.depu@yahoo.com', '123', '01717080329', 'user'),
(11, 'depu', 'md.depu@yahoo.com', '123', '01717080329', 'user'),
(12, 'depu', 'md.depu@yahoo.com', '123', '01717080329', 'user'),
(13, 'depu', 'depu@gmail.com', '123', '01717080329', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads_post`
--
ALTER TABLE `ads_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_post`
--
ALTER TABLE `blog_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile_pic`
--
ALTER TABLE `profile_pic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads_post`
--
ALTER TABLE `ads_post`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `blog_post`
--
ALTER TABLE `blog_post`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `profile_pic`
--
ALTER TABLE `profile_pic`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
