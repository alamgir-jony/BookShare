-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2018 at 02:22 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookshare`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `authorname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `name`, `authorname`) VALUES
(1, 'Manobi-Humayun Ahmed', 'Humayun Ahmed'),
(2, 'Maa-Anisul Haque', 'Anisul Haque'),
(3, 'Kobi-Humayun Ahmed', 'Humayun Ahmed'),
(4, 'Jol Jochona-Humayun Ahmed', 'Humayun Ahmed'),
(5, 'Paradoxical Sajid-Arif Azad', 'Arif Azad'),
(6, 'Aroj Ali Somipe-Arif Azad', 'Arif Azad'),
(7, 'Himu Rimande-Humayun Ahmed', 'Humayun Ahmed'),
(8, 'Ebong HimuHumayun Ahmed', 'Humayun Ahmed'),
(9, 'Debdash-Saratchandra', 'Saratchandra'),
(10, 'Geetanjali-Rabindranath Tagore', 'Rabindranath Tagore'),
(11, 'Hajar Bochor Dhore-J. Rayhan', 'Dhore-J. Rayhan'),
(12, 'Ami Topu-Mohammad Jafar Iqbal', 'Jafor Iqbal');

-- --------------------------------------------------------

--
-- Table structure for table `catagory`
--

CREATE TABLE `catagory` (
  `catagoryid` int(11) NOT NULL,
  `catagoryname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reviewbook`
--

CREATE TABLE `reviewbook` (
  `review_id` int(11) NOT NULL,
  `bookname` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `r_desc` text NOT NULL,
  `ratings` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviewbook`
--

INSERT INTO `reviewbook` (`review_id`, `bookname`, `author`, `r_desc`, `ratings`) VALUES
(15, 'Manobi-Humayun Ahmed', 'Humayun Ahmed', 'A science fiction book by Humayun Ahmed', 4),
(16, 'Maa Anisul Haque', 'sdsdsdsd', 'dsdsdsdsd', 5),
(23, 'Manobi-Humayun Ahmed', '', '', 0),
(26, 'Maa-Anisul Haque', 'Anisul Haque', 'fssfs', 5),
(30, 'Kobi-Humayun Ahmed', 'Humayun Ahmed', 'aaaaaaaaa', 3),
(32, 'Maa-Anisul Haque', 'Anisul Haque', '', 4),
(35, 'Kobi-Humayun Ahmed', 'Humayun Ahmed', '', 5),
(36, 'Kobi-Humayun Ahmed', 'Humayun Ahmed', '', 1),
(38, 'Maa-Anisul Haque', 'Anisul Haque', 'great', 5),
(42, 'Kobi-Humayun Ahmed', 'Humayun Ahmed', 'aaaa', 3),
(43, 'Maa-Anisul Haque', 'Anisul Haque', 'nnn', 2),
(45, 'Manobi-Humayun Ahmed', 'Humayun Ahmed', 'new review', 5),
(47, 'Manobi-Humayun Ahmed', 'Humayun Ahmed', 'aagggg', 5);

-- --------------------------------------------------------

--
-- Table structure for table `sharedbook`
--

CREATE TABLE `sharedbook` (
  `bookid` int(11) NOT NULL,
  `bookname` varchar(50) NOT NULL,
  `bookdescription` varchar(500) NOT NULL,
  `bookimage` varchar(500) NOT NULL,
  `booklocation` varchar(30) NOT NULL,
  `userid` int(11) NOT NULL,
  `catagoryname` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` int(11) NOT NULL,
  `userlocation` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userpass`
--

CREATE TABLE `userpass` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userpass`
--

INSERT INTO `userpass` (`id`, `user`, `pass`) VALUES
(1001, 'Jony', 1234);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `catagory`
--
ALTER TABLE `catagory`
  ADD PRIMARY KEY (`catagoryid`);

--
-- Indexes for table `reviewbook`
--
ALTER TABLE `reviewbook`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `sharedbook`
--
ALTER TABLE `sharedbook`
  ADD PRIMARY KEY (`bookid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `reviewbook`
--
ALTER TABLE `reviewbook`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
