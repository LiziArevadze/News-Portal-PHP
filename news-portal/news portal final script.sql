-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2024 at 08:22 PM
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
-- Database: `news`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `idComment` int(5) NOT NULL,
  `idnews` int(11) NOT NULL,
  `idusers` int(11) NOT NULL,
  `comment` text NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`idComment`, `idnews`, `idusers`, `comment`, `time`) VALUES
(4, 17, 3, 'sgsdgsdgadg', '2024-06-06 22:07:23'),
(14, 17, 3, 'adfadfadfdafadfadfdafdaf', '2024-06-06 22:10:24'),
(15, 17, 3, 'comment', '2024-06-06 22:12:40'),
(16, 17, 3, 'comment', '2024-06-06 22:12:44'),
(17, 17, 3, 'comment', '2024-06-06 22:14:40'),
(18, 17, 3, 'rae', '2024-06-06 22:14:45'),
(19, 17, 3, 'comment', '2024-06-06 22:15:10'),
(20, 21, 3, 'comment', '2024-06-06 22:15:29'),
(21, 21, 3, 'add new comment', '2024-06-06 22:20:11'),
(22, 21, 4, 'rame comment', '2024-06-06 22:21:55');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(4) NOT NULL,
  `img` varchar(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `fullStory` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `img`, `title`, `description`, `fullStory`) VALUES
(15, 'health.jpg', 'More than half of US adults will have cardiovascular disease by\r\n            2050, research finds', 'About 61% of US adults will have cardiovascular disease by\r\n          2050, new research from the American Heart Association predicts.', ''),
(16, 'art.jpg', 'Gauging the Art Market’s Health', 'Auctions of Impressionist, modern and Surrealist art at\r\n          Sotheby’s and Christie’s will be the first major test of buoyancy since the inauguration in the U.S.', ''),
(17, 'apple.png', '20 Years Ago, Steve Jobs Built the ‘Coolest Computer Ever.’ ', 'This month marks the 20th anniversary of the Power Mac G4\r\n          Cube, which debuted July 19, 2000. It also marks the 19th anniversary of Apple’s announcement that it was\r\n          putting the Cube on ice.', ''),
(18, 'tornado.png', 'Tornado and tide warnings as Storm Hanna lashes Texas', 'The body of the late US Rep. John Lewis on Sunday will make\r\n          the final journey across the famous bridge in Selma, Alabama.', ''),
(19, 'ზვიანგი.jpg', 'KOBU', 'KOOOOOBUUUU', ''),
(21, 'ლიზაზო.jpg', '2222222221111111111The body of the late US Rep. John Lewis on Sunday will make the final journey across the famous bridge in Selma, Alabama.The body of the late US Rep. John Lewis on Sunday will make the final journey across the famous bridge in Selm', 'The body of the late US Rep. John Lewis on Sunday will make the final journey across the famous bridge in Selma, Alabama.\r\nThe body of the late US Rep. John Lewis on Sunday will make the final journey across the famous bridge in Selma, Alabama.\r\nThe body of the late US Rep. John Lewis on Sunday will make the final journey across the famous bridge in Selma, Alabama.', ''),
(22, 'ზვიანგი.jpg', 'containercontainerco ntainercontai nercontainercontainercontainerc ontainercontainercontainercontainer', 'containercontainerco ntainercontainercontainer \r\n containercontainerc ontainer\r\ncontainercontainercon tainercontainercontainerco ntainercontainercontainer \r\n containercontainerc ontainer\r\ncontainercontainercon tainercontainercontainerco ntainercontainercontainer \r\n containercontainerc ontainer\r\ncontainercontainercon tainercontainercontainerco ntainercontainercontainer \r\n containercontainerc ontainer\r\ncontainercontainercon tainer', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(5) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `adminOrUser` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `firstname`, `lastname`, `email`, `password`, `adminOrUser`) VALUES
(1, 'admin', 'adminadze', 'admin@admin.ge', '123456', 1),
(3, 'sa', 'rrr', 'user@user.ge', '123', 0),
(4, 'vinme', 'vinmedze', 'user3@user.ge', '123', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`idComment`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `idComment` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
