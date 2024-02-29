-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2023 at 12:27 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `placement`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

-- CREATE TABLE `admin` (
--   `u_name` varchar(20) NOT NULL,
--   `password` varchar(30) NOT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--



-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

-- CREATE TABLE `branch` (
--   `bid` varchar(10) NOT NULL,
--   `branchname` varchar(40) NOT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch`
--



-- --------------------------------------------------------

--
-- Table structure for table `company`
--

-- CREATE TABLE `company` (
--   -- `cid` varchar(20) NOT NULL,
--   -- `name` varchar(30) NOT NULL,
--   -- `type` varchar(34) NOT NULL,
--   -- `package` varchar(15) NOT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--


-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

-- CREATE TABLE `feedback` (
--   `sid` varchar(20) NOT NULL,
--   `feedback` varchar(200) NOT NULL,
--   `ratings` varchar(30) NOT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--


-- --------------------------------------------------------

--
-- Table structure for table `placed`
--

-- CREATE TABLE `placed` (
--   `sid` varchar(20) NOT NULL,
--   `name` varchar(30) NOT NULL,
--   `cid` varchar(30) NOT NULL,
--   `cname` varchar(30) NOT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `placed`
--



-- --------------------------------------------------------

--
-- Table structure for table `registered`
--

-- CREATE TABLE `registered` (
--   `sid` varchar(20) NOT NULL,
 
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registered`
--



-- --------------------------------------------------------

--
-- Stand-in structure for view `rr`
-- (See below for the actual view)
--
-- CREATE TABLE `rr` (
-- `sid` varchar(10)
-- ,`name` varchar(20)
-- ,`tid` varchar(30)
-- ,`coursename` varchar(35)
-- );

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `name` varchar(20) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `sid` varchar(10) NOT NULL,
  `pass` varchar(15) NOT NULL,
  `sem` int(3) NOT NULL,
  `branch` varchar(25) NOT NULL,
  `bid` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(30) NOT NULL,
  `email` varchar(25) NOT NULL,
  `feedback` varchar(200) NOT NULL,
  `ratings` varchar(30) NOT NULL,
  `tid` varchar(30) NOT NULL,
  `cid` varchar(20) NOT NULL,
  `cname` varchar(30) NOT NULL,
  `type` varchar(34) NOT NULL,
  `package` varchar(15) NOT NULL,
  `coursename` varchar(35) NOT NULL,
  `start_date` date NOT NULL,
  `link` varchar(100) NOT NULL


) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--



-- --------------------------------------------------------

--
-- Table structure for table `training`
--

-- CREATE TABLE `training` (
--   `tid` varchar(20) NOT NULL,
--   `coursename` varchar(35) NOT NULL,
--   `start_date` date NOT NULL,
--   `link` varchar(100) NOT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `training`
--



-- --------------------------------------------------------

--
-- Structure for view `rr`
--
-- DROP TABLE IF EXISTS `rr`;

-- CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `rr`  AS SELECT `s`.`sid` AS `sid`, `s`.`name` AS `name`, `r`.`tid` AS `tid`, `t`.`coursename` AS `coursename` FROM ((`student` `s` join `registered` `r`) join `training` `t`) WHERE `s`.`sid` = `r`.`sid` AND `r`.`tid` = `t`.`tid` ;

--
-- Indexes for dumped tables
--

-- --
-- -- Indexes for table `branch`
-- --
-- ALTER TABLE `branch`
--   ADD PRIMARY KEY (`bid`,`branchname`);

-- --
-- -- Indexes for table `company`
-- --
-- ALTER TABLE `company`
--   ADD PRIMARY KEY (`cid`);

-- --
-- -- Indexes for table `feedback`
-- --
-- -- ALTER TABLE `feedback`
-- --   ADD KEY `fk9` (`sid`);

-- -- --
-- -- -- Indexes for table `placed`
-- -- --
-- -- ALTER TABLE `placed`
-- --   ADD KEY `fk7` (`cid`),
-- --   ADD KEY `fk6` (`sid`);

-- --
-- -- Indexes for table `registered`
-- --
-- -- ALTER TABLE `registered`
-- --   ADD KEY `fk8` (`sid`);

-- --
-- -- Indexes for table `student`
-- --
-- ALTER TABLE `student`
--   ADD PRIMARY KEY (`sid`,`name`),
--   ADD UNIQUE KEY `email` (`email`),
--   ADD UNIQUE KEY `pass` (`pass`),
--   ADD UNIQUE KEY `sid` (`sid`);

-- --
-- -- Indexes for table `training`
-- --
-- ALTER TABLE `training`
--   ADD PRIMARY KEY (`tid`);

-- --
-- -- Constraints for dumped tables
-- --

-- --
-- -- Constraints for table `feedback`
-- --
-- -- ALTER TABLE `feedback`
-- --   ADD CONSTRAINT `fk9` FOREIGN KEY (`sid`) REFERENCES `student` (`sid`) ON DELETE CASCADE;

-- --
-- -- Constraints for table `placed`
-- --
-- -- ALTER TABLE `placed`
-- --   ADD CONSTRAINT `fk6` FOREIGN KEY (`sid`) REFERENCES `student` (`sid`) ON DELETE CASCADE,
-- --   ADD CONSTRAINT `fk7` FOREIGN KEY (`cid`) REFERENCES `company` (`cid`) ON DELETE CASCADE;

-- -- --
-- -- -- Constraints for table `registered`
-- -- --
-- -- -- ALTER TABLE `registered`
-- -- --   ADD CONSTRAINT `fk8` FOREIGN KEY (`sid`) REFERENCES `student` (`sid`) ON DELETE CASCADE;
-- COMMIT;

-- /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
-- /*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
-- /*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
