-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2017 at 12:13 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pwp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(1) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `apt_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mob` bigint(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `apt_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`apt_id`, `user_id`, `name`, `mob`, `address`, `apt_date`) VALUES
(1, 1, 'shruty', 9876543210, 'dlw', '2017-04-29'),
(2, 2, 'kashif', 9898959491, 'varanasi', '2017-04-29');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `ID` int(11) NOT NULL,
  `pic_id` int(4) NOT NULL,
  `name` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `comments` varchar(60000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`ID`, `pic_id`, `name`, `date`, `comments`) VALUES
(1, 1, 'kashif', '04-27-2017', 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_doc`
--

CREATE TABLE `tbl_doc` (
  `id` int(10) NOT NULL,
  `pdf` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_doc`
--

INSERT INTO `tbl_doc` (`id`, `pdf`) VALUES
(1, 'Marksheet.pdf'),
(2, 'Another.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `g_id` int(200) NOT NULL,
  `g_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`g_id`, `g_name`) VALUES
(1, 'fantasy-art-311286.jpg'),
(2, 'beautiful-girl-5331.jpg'),
(3, 'cellphone-754007.jpg'),
(4, 'city-664128.jpg'),
(5, 'fantasy-art-311286.jpg'),
(6, 'landscape-511694.jpg'),
(7, 'beautiful.jpg'),
(9, 'cellphone-754007 - Copy.jpg'),
(10, 'city-664128 - Copy.jpg'),
(11, 'fantasy-art-311286 - Copy.jpg'),
(12, 'landscape-511694 - Copy.jpg'),
(13, 'B612_20170308_055258.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pic`
--

CREATE TABLE `tbl_pic` (
  `pic_id` int(20) NOT NULL,
  `pic_name` varchar(500) NOT NULL,
  `profile1` varchar(500) NOT NULL,
  `profile2` varchar(500) NOT NULL,
  `profile3` varchar(500) NOT NULL,
  `procmnt1` varchar(500) NOT NULL,
  `procmnt2` varchar(500) NOT NULL,
  `procmnt3` varchar(500) NOT NULL,
  `pro_cap1` varchar(500) NOT NULL,
  `pro_cap2` varchar(500) NOT NULL,
  `pro_cap3` varchar(500) NOT NULL,
  `caption` varchar(500) NOT NULL,
  `cap_detail` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pic`
--

INSERT INTO `tbl_pic` (`pic_id`, `pic_name`, `profile1`, `profile2`, `profile3`, `procmnt1`, `procmnt2`, `procmnt3`, `pro_cap1`, `pro_cap2`, `pro_cap3`, `caption`, `cap_detail`) VALUES
(1, 'B612_20170308_055258.jpg', 'B612_20170309_103443.jpg', 'B612_20170309_104742.jpg', 'B612_20170309_103602.jpg', 'aloo mausi me', 'me mausi aloo', 'image3 ka caption', 'baraf he baraf hai', 'bht baraf hai bhut maaza hai', 'kitchen masti', 'Shruty Alokita', 'Our great experience in manali one the best time we friends ever had'),
(2, 'beautiful.jpg', 'cellphone-754007 - Copy.jpg', 'city-664128 - Copy.jpg', 'landscape-511694.jpg', 'The hand', 'Effile tower', 'Death valley ', 'hand of god', 'Paris', 'Nevada', 'Sea side', 'girl at sea side');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_touch`
--

CREATE TABLE `tbl_touch` (
  `tid` int(2) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mob` varchar(10) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_touch`
--

INSERT INTO `tbl_touch` (`tid`, `name`, `mob`, `email`, `subject`, `message`) VALUES
(2, 'kashif', '9559154483', 'kashif2910@gmail.com', 'party', 'gold package'),
(5, 'Altair', '8601948773', 'example@hotmail.com', 'Looking for Appointment', 'I want a gold package marriage service for my son he getting married on 30 feb 8888 it would be great if your just meet with us and discuss our needs and facilities and cost.\r\nhow long would it take for your to respond we are in a hurry the time is running.\r\nthanks'),
(6, 'shruty', '9573486125', 'molu@gmail.com', 'Birthday Party', 'surprise birthday party on 3rd may 2017'),
(15, 'sani', '9559158888', 'sani@gmail.com', 'marrige', 'shaadi krwado');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `address` varchar(70) NOT NULL,
  `pic` varchar(500) NOT NULL,
  `mob` bigint(10) NOT NULL,
  `dor` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `name`, `email`, `pass`, `gender`, `address`, `pic`, `mob`, `dor`) VALUES
(1, 'shruty', 'shruty@molu.com', '1234', 'female', 'dlw', 'beautiful.jpg', 9876543210, '2017-04-29'),
(2, 'kashif', 'kashif@gmail.com', '1234', 'male', 'varanasi', 'cellphone-754007 - Copy.jpg', 2222222222, '2017-04-29');

-- --------------------------------------------------------

--
-- Table structure for table `upload_img`
--

CREATE TABLE `upload_img` (
  `img_id` int(255) NOT NULL,
  `img_name` varchar(500) NOT NULL,
  `img_path` varchar(500) NOT NULL,
  `img_type` varchar(500) NOT NULL,
  `vchar` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `upload_img`
--

INSERT INTO `upload_img` (`img_id`, `img_name`, `img_path`, `img_type`, `vchar`) VALUES
(7, 'fantasy-art-311286.jpg', '../photo/fantasy-art-311286.jpg', 'image/jpeg', 'https://www.youtube.com/watch?v=QoEVfALqrzA'),
(8, 'beautiful.jpg', '../photo/beautiful.jpg', 'image/jpeg', 'https://www.youtube.com/watch?v=Z1Nrw0SV9aY'),
(9, 'cellphone-754007 - Copy.jpg', '../photo/cellphone-754007 - Copy.jpg', 'image/jpeg', 'https://www.youtube.com/watch?v=uvxPMp-ZoEA'),
(10, 'city-664128.jpg', '../photo/city-664128.jpg', 'image/jpeg', 'https://www.youtube.com/watch?v=CiqWnqyYfaM'),
(11, 'landscape-511694.jpg', '../photo/landscape-511694.jpg', 'image/jpeg', 'https://www.youtube.com/watch?v=rk9WaFhXaAE'),
(12, '1.jpg', '../photo/1.jpg', 'image/jpeg', 'https://www.youtube.com/watch?v=D0je15bOPIE'),
(13, '3.jpg', '../photo/3.jpg', 'image/jpeg', 'https://www.youtube.com/watch?v=JGwWNGJdvx8'),
(14, '4.jpg', '../photo/4.jpg', 'image/jpeg', 'https://www.youtube.com/watch?v=RNXb6BvRyvg'),
(15, '14727560_210538252717947_3436276670649073664_a.jpg', '../photo/14727560_210538252717947_3436276670649073664_a.jpg', 'image/jpeg', 'https://www.youtube.com/watch?v=bzSTpdcs-EI'),
(16, 'B612_20170308_055258.jpg', '../photo/B612_20170308_055258.jpg', 'image/jpeg', 'https://www.youtube.com/watch?v=hXh35CtnSyU'),
(17, 'cellphone-754007 - Copy.jpg', '../photo/cellphone-754007 - Copy.jpg', 'image/jpeg', 'https://www.youtube.com/watch?v=VZwUhHukQC4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`apt_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_doc`
--
ALTER TABLE `tbl_doc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `tbl_pic`
--
ALTER TABLE `tbl_pic`
  ADD PRIMARY KEY (`pic_id`);

--
-- Indexes for table `tbl_touch`
--
ALTER TABLE `tbl_touch`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `upload_img`
--
ALTER TABLE `upload_img`
  ADD PRIMARY KEY (`img_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `apt_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_doc`
--
ALTER TABLE `tbl_doc`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `g_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tbl_pic`
--
ALTER TABLE `tbl_pic`
  MODIFY `pic_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_touch`
--
ALTER TABLE `tbl_touch`
  MODIFY `tid` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `upload_img`
--
ALTER TABLE `upload_img`
  MODIFY `img_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
