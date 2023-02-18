-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 28, 2022 at 03:58 AM
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
-- Database: `travelpartner`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `imgid` int(10) NOT NULL,
  `cartid` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `price` int(10) NOT NULL,
  `Image` varchar(1000) NOT NULL,
  PRIMARY KEY (`cartid`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`imgid`, `cartid`, `email`, `Description`, `price`, `Image`) VALUES
(9, 1, 'nevindu@gmail.com', 'cam view', 0, ''),
(8, 2, 'nevindu@gmail.com', 'Camera', 0, ''),
(9, 3, 'nevindu@gmail.com', 'cam view', 0, ''),
(9, 14, 'aaaa@gmail.com', 'cam view', 0, '../Uploads/cam4.jpg'),
(9, 15, 'nevindu@gmail.com', 'cam view', 0, '../Uploads/cam4.jpg'),
(6, 16, 'aaaa@gmail.com', 'Cam lense', 20, '../Uploads/cam1.jpg'),
(11, 17, 'aaaa@gmail.com', 'tent', 0, '../Uploads/tent2.png'),
(13, 18, 'aaaa@gmail.com', 'tent', 0, '../Uploads/tent4.jpg'),
(20, 19, 'aaaa@gmail.com', 'DSLR camera', 20, '../Uploads/andrew-hutchings-W2Dta_Yiwfw-unsplash.jpg'),
(10, 20, 'aaaa@gmail.com', 'tent', 0, '../Uploads/tent1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `guider`
--

DROP TABLE IF EXISTS `guider`;
CREATE TABLE IF NOT EXISTS `guider` (
  `g_id` int(50) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `pp` varchar(1000) NOT NULL,
  `bio` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`g_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guider`
--

INSERT INTO `guider` (`g_id`, `email`, `pp`, `bio`, `name`) VALUES
(5, 'nevindu@gmail.com', '../guidpp/guider4.jpg', 'The best guider', 'John'),
(6, 'nevindu@gmail.com', '../guidpp/man-300x300.png', 'wwww', 'John');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `imgid` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(20) NOT NULL,
  `Title` varchar(20) NOT NULL,
  `Image` varchar(1000) NOT NULL,
  `Category` varchar(10) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `price` int(10) NOT NULL,
  PRIMARY KEY (`imgid`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`imgid`, `email`, `Title`, `Image`, `Category`, `Description`, `price`) VALUES
(9, 'nevindu@gmail.com', 'cam4', '../Uploads/cam4.jpg', 'cam', 'cam view', 0),
(8, 'nevindu@gmail.com', 'cam3', '../Uploads/cam3.jpg', 'cam', 'Camera', 0),
(7, 'nevindu@gmail.com', 'cam2', '../Uploads/cam2.jpg', 'cam', 'Try pod', 0),
(6, 'nevindu@gmail.com', 'cam1', '../Uploads/cam1.jpg', 'cam', 'Cam lense', 20),
(10, 'nevindu@gmail.com', 'tent1', '../Uploads/tent1.jpg', 'tent', 'tent', 0),
(11, 'nevindu@gmail.com', 'tent2', '../Uploads/tent2.png', 'tent', 'tent', 0),
(12, 'nevindu@gmail.com', 'tent3', '../Uploads/tent3.jpg', 'tent', 'tent', 0),
(13, 'nevindu@gmail.com', 'tent4', '../Uploads/tent4.jpg', 'tent', 'tent', 0),
(14, 'nevindu@gmail.com', 'guid1', '../Uploads/guid1.jpg', 'guid', 'guid', 0),
(15, 'nevindu@gmail.com', 'guid2', '../Uploads/guid2.jpg', 'guid', 'guid', 0),
(16, 'nevindu@gmail.com', 'guid3', '../Uploads/guid3.jpg', 'guid', 'guid', 0),
(17, 'nevindu@gmail.com', 'guid4', '../Uploads/guid4.jpg', 'guid', 'guid', 0),
(20, 'nevindu@gmail.com', 'cam6', '../Uploads/andrew-hutchings-W2Dta_Yiwfw-unsplash.jpg', 'cam', 'DSLR camera', 20),
(21, 'nevindu@gmail.com', 'cam new', '../Uploads/baikang-yuan-VDYAsdbHVhc-unsplash.jpg', 'cam', 'aaaaa', 20);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

DROP TABLE IF EXISTS `signup`;
CREATE TABLE IF NOT EXISTS `signup` (
  `f_name` varchar(10) NOT NULL,
  `l_name` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` int(15) NOT NULL,
  `user_type` varchar(10) NOT NULL DEFAULT 'user',
  `path` varchar(1000) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`f_name`, `l_name`, `email`, `password`, `user_type`, `path`) VALUES
('supun', 'kavindu', 'aaaa@gmail.com', 123456, 'user', '../userpp/photo-1535713875002-d1d0cf377fde.jpg'),
('nevindu', 'nilangith', 'nevindu@gmail.com', 123456, 'admin', '../userpp/man-300x300.png'),
('dddd', 'dddd', 'aaaasss@gmail.com', 123456, 'user', ''),
('mmmm', 'mmmm', 'qqqqq@gmail.com', 123456, 'user', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
