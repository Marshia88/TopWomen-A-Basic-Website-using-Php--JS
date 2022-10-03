-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2021 at 12:40 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `topwomen`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `comment_sender_name` varchar(40) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `userinfodata`
--

CREATE TABLE `userinfodata` (
  `id` int(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `comments` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfodata`
--

INSERT INTO `userinfodata` (`id`, `user`, `email`, `mobile`, `comments`) VALUES
(1, 'Marshia', 'marshia.n88@gmail.com', '01794266733', 'Nice work');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_name`, `password`) VALUES
('Azwaad', 'azwaadlabiba'),
('Marshia', 'marshianujhat'),
('Nayna', 'naynajahan');

-- --------------------------------------------------------

--
-- Table structure for table `women`
--

CREATE TABLE `women` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(10) NOT NULL,
  `business` varchar(60) NOT NULL,
  `startyear` int(10) NOT NULL,
  `details` varchar(500) NOT NULL,
  `aspirations` varchar(450) NOT NULL,
  `linkedin` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `socialmedia` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `women`
--

INSERT INTO `women` (`id`, `name`, `age`, `business`, `startyear`, `details`, `aspirations`, `linkedin`, `email`, `image`, `socialmedia`) VALUES
(1, 'Marshia Nujhat', 21, 'KidsDreams', 2020, 'I have started a business where you will find exclusive collections of dresses for children, both girls and boys through my facebook page. I am also recently planning on making shoes for the wonderful kids in Bangladesh!', 'I think people focus a lot less on kids fashion and so I want to highlight that sector of fashion and keep on growing my business.', 'linkedin.com/in/marshia-nujhat-9717ab1b0', 'marshia.n88@gmail.com', 'Me.jpg', 'Not applicable'),
(2, 'Nayna Jahan', 25, 'ForHer', 2015, 'I am the owner and creative director of \"ForHer\", a Bangladeshi shoe brand for women. I have been managing this business for a couple of years now and I am very happy to let you know my business has expanded well over the years all over Bangladesh.', 'I think wearing the right shoes can boost a womans confidence and give her the comfort she needs everyday. So, I have been looking forward to collaborating with other brands to aspire women to be confident and elegant with their outfit choice.', 'linkedin.com/in/naynajahan', 'naynajahan@gmail.com', 'Neha.jpg', 'www.facebook.com/pages/ForHer'),
(3, 'Azwaad Labiba', 24, 'CateringForAll', 2018, 'In 2018, I started my catering business in my own neighborhood. I started selling daily home meals at first. And now, I also sell various snacks, shakes and a few bakery items.', 'I have always loved it when people appreciated my food, starting from my family to any guests who would come to my house. A hobby gradually turned into a passion and now, I hope to extend my business all across Dhaka and share delicious and healthy snacks and meals with more people!', 'linkedin.com/azwaadlabiba', 'azwaad.labiba@gmail.com', 'Azwaad.jpg', 'www.facebook.com/groups/cateringforall');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `userinfodata`
--
ALTER TABLE `userinfodata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_name`);

--
-- Indexes for table `women`
--
ALTER TABLE `women`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `userinfodata`
--
ALTER TABLE `userinfodata`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `women`
--
ALTER TABLE `women`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
