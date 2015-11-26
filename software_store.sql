-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2015 at 09:32 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `software_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE IF NOT EXISTS `download` (
  `user_id` int(10) NOT NULL,
  `s_id` int(10) NOT NULL,
  `date` date NOT NULL,
  KEY `user_id` (`user_id`),
  KEY `s_id` (`s_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `download`
--

INSERT INTO `download` (`user_id`, `s_id`, `date`) VALUES
(3, 5, '2015-11-25'),
(3, 5, '2015-11-25'),
(3, 5, '2015-11-25'),
(3, 5, '2015-11-25'),
(3, 6, '2015-11-25'),
(3, 7, '2015-11-25'),
(3, 6, '2015-11-25'),
(3, 7, '2015-11-25'),
(3, 7, '2015-11-25'),
(5, 7, '2015-11-25');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
  `rid` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `sid` int(10) NOT NULL,
  `date` date NOT NULL,
  `comment` varchar(100) NOT NULL,
  PRIMARY KEY (`rid`),
  KEY `user_id` (`user_id`),
  KEY `user_id_2` (`user_id`),
  KEY `sid` (`sid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `software`
--

CREATE TABLE IF NOT EXISTS `software` (
  `sid` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `catagory` varchar(50) NOT NULL,
  `discription` varchar(500) NOT NULL,
  `rating` int(5) NOT NULL,
  `amount` int(5) NOT NULL,
  `likes` int(10) NOT NULL,
  `unlike` int(10) NOT NULL,
  `link` varchar(250) NOT NULL,
  `image` varchar(20) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `software`
--

INSERT INTO `software` (`sid`, `name`, `catagory`, `discription`, `rating`, `amount`, `likes`, `unlike`, `link`, `image`) VALUES
(5, 'torrent', 'internet', 'Torrentz is a free, fast and powerful meta-search engine combining results from dozens of search engines.', 80, 0, 7, 0, 'https://www.dropbox.com/s/azawbva8gasvfqq/uTorrent', 'download.png'),
(6, 'WinRAR', 'ZIP', 'WinRAR and RAR archiver downloads. Get WinRAR FREE with TrialPay ... WinRAR x86 (32 bit) 5.30, Graphical and command line, Trial, 1744 KB. ', 90, 0, 1, 1, 'https://www.dropbox.com/s/otvx8z180a5tcmi/winrar-x', 'download.jpg'),
(7, 'torrent', 'internet', 'Torrentz is a free, fast and powerful meta-search engine combining results from dozens of search engines.', 95, 0, 0, 1, 'https://www.dropbox.com/s/azawbva8gasvfqq/uTorrent.exe?dl=0', 'download.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `name`, `email`) VALUES
(3, 'Kapila', 'kapilaranasinghe@gmail.com'),
(4, 'Saduni Nimalka', 'undefined'),
(5, 'Saduni Nimalka', 'softwarestorelk@gmail.com');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `download`
--
ALTER TABLE `download`
  ADD CONSTRAINT `download_ibfk_2` FOREIGN KEY (`s_id`) REFERENCES `software` (`sid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `download_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`ID`),
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`sid`) REFERENCES `software` (`sid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
