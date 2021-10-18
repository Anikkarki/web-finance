-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2021 at 04:26 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finance`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `Ab_id` int(11) NOT NULL,
  `Ab_title` varchar(50) DEFAULT NULL,
  `Ab_content` varchar(1000) DEFAULT NULL,
  `Ab_img` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`Ab_id`, `Ab_title`, `Ab_content`, `Ab_img`) VALUES
(1, 'This is first', 'hello lets see what happens here and in this page', NULL),
(2, 'to check', 'this is second section to this table', NULL),
(3, 'Introduction', '  Om Bindabasini Saving and Credit Co-operative Limited established under the Nepalese Co-operative Act 2048, is a financial institution permitted to carry out financial transactions. The head office of which is situated in Indrachowk , Kathmandu. This institution is managed by hilly skilled personnel who have involved in different financial sector over the country.\r\nThe aim of the institution is to provide attractive interest rates to the collected principle and provide loans to honest professionals and entrepreneurs to promote their business, making them capable and independent in competitive financial environment  with the motto of “My Trust, My Future And…My Secured saving”.', NULL),
(4, 'Management Team', 'To honestly fulfill the responsibilities by obeying the rules and regulations is the reflection of a successful management. The management of the institution gives high priority to this fact and is committed in fulfilling duties. The employees and staff are committed to implement rules and program.', NULL),
(5, 'Share Capital', 'The share capital of the institution is maintained at Rs. 15,00,00,000/-. The amount will be fully converted to paid- up capital under the “Decade collection and Support” within fiscal year 2076/77.', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `A_id` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `admin_id` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`A_id`, `email`, `admin_id`, `password`) VALUES
(1, 'admin@gmail.com', 'admin', 'admin'),
(3, 'test2@gmamil.com', 'test2', '098f6bcd4621d373cade4e832627b4f6');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `type` varchar(20) DEFAULT NULL,
  `detail` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `type`, `detail`) VALUES
(1, 'Call', '014219095'),
(2, 'address', ' Indrachowk');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(11) DEFAULT NULL,
  `name` varchar(15) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `number` int(15) DEFAULT NULL,
  `subject` varchar(20) DEFAULT NULL,
  `message` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `days_365`
--

CREATE TABLE `days_365` (
  `id` int(11) NOT NULL,
  `daily` varchar(8) DEFAULT NULL,
  `all_day` varchar(10) DEFAULT NULL,
  `bonus` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `days_365`
--

INSERT INTO `days_365` (`id`, `daily`, `all_day`, `bonus`) VALUES
(1, '525', '202000', '2000'),
(2, '1025', '404000', '4000'),
(3, '2100', '808000', '8000'),
(4, '3150', '1216000', '12000'),
(5, '4250', '1620000', '16000'),
(6, '5500', '2105000', '20000');

-- --------------------------------------------------------

--
-- Table structure for table `days_730`
--

CREATE TABLE `days_730` (
  `id` int(11) NOT NULL,
  `daily` varchar(10) DEFAULT NULL,
  `all_days` varchar(15) DEFAULT NULL,
  `bonus` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `days_730`
--

INSERT INTO `days_730` (`id`, `daily`, `all_days`, `bonus`) VALUES
(1, '500', '380000', '10000'),
(2, '1000', '760000', '20000'),
(3, '2000', '1520000', '40000'),
(4, '4000', '3040000', '80000');

-- --------------------------------------------------------

--
-- Table structure for table `kopila_bachat`
--

CREATE TABLE `kopila_bachat` (
  `id` int(11) NOT NULL,
  `time` varchar(6) DEFAULT NULL,
  `intrest` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kopila_bachat`
--

INSERT INTO `kopila_bachat` (`id`, `time`, `intrest`) VALUES
(1, '1 Year', '10%'),
(2, '2 Year', '11%'),
(3, '3 Year', '12%'),
(4, '4 Year', '12.5%'),
(5, '5 Year', '13%'),
(6, '6 Year', '14.5%'),
(7, '7 Year', '15%');

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE `loan` (
  `l_ID` int(11) NOT NULL,
  `l_title` varchar(25) DEFAULT NULL,
  `intrest` varchar(10) DEFAULT NULL,
  `l_range` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loan`
--

INSERT INTO `loan` (`l_ID`, `l_title`, `intrest`, `l_range`) VALUES
(1, 'Samuhik jamani loan', '16%', '21-23%'),
(2, 'Management loan', '16%', '20-22%'),
(3, 'Mudhati mortgage loan', '', '+3%'),
(4, 'Share mortgage loan', '19%', '22%'),
(5, ' Mortgage loan', '100000', '22%'),
(6, 'Higher Purchase Loan', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `mudhati`
--

CREATE TABLE `mudhati` (
  `c_id` int(11) NOT NULL,
  `period` varchar(20) DEFAULT NULL,
  `three_month` varchar(10) DEFAULT NULL,
  `six_month` varchar(10) DEFAULT NULL,
  `yearly` varchar(10) DEFAULT NULL,
  `after_maturity` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mudhati`
--

INSERT INTO `mudhati` (`c_id`, `period`, `three_month`, `six_month`, `yearly`, `after_maturity`) VALUES
(1, '6 month', '10%', '11%', '', '11%'),
(2, '1 year', '10%', '11%', '12%', '12%'),
(3, '2 year', '11.25%', '12%', '12%', '14%'),
(4, '3 year', '12%', '13%', '14%', '15%'),
(5, '4 year', '13%', '14%', '15%', '16%');

-- --------------------------------------------------------

--
-- Table structure for table `nari_bachat`
--

CREATE TABLE `nari_bachat` (
  `id` int(11) NOT NULL,
  `monthly` varchar(10) DEFAULT NULL,
  `maturity` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nari_bachat`
--

INSERT INTO `nari_bachat` (`id`, `monthly`, `maturity`) VALUES
(1, '2000', '56000'),
(2, '3000', '82000'),
(3, '6000', '164000'),
(4, '9000', '246000'),
(5, '12000', '328000');

-- --------------------------------------------------------

--
-- Table structure for table `narnari_bachat`
--

CREATE TABLE `narnari_bachat` (
  `id` int(11) NOT NULL,
  `monthly` varchar(8) DEFAULT NULL,
  `days_730` varchar(10) DEFAULT NULL,
  `bonus` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `narnari_bachat`
--

INSERT INTO `narnari_bachat` (`id`, `monthly`, `days_730`, `bonus`) VALUES
(1, '2000', '80000', '1500'),
(2, '3000', '120000', '3000'),
(3, '6000', '240000', '6000'),
(4, '9000', '360000', '9000');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `N_id` int(11) NOT NULL,
  `N_img` longblob DEFAULT NULL,
  `N_des` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE `rate` (
  `r_id` int(11) DEFAULT NULL,
  `r_title` varchar(50) DEFAULT NULL,
  `rate` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `S_ID` int(11) DEFAULT NULL,
  `s_title` varchar(50) DEFAULT NULL,
  `s_content` varchar(500) DEFAULT NULL,
  `S_img` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `time_duration_bachat`
--

CREATE TABLE `time_duration_bachat` (
  `id` int(11) NOT NULL,
  `time` varchar(10) DEFAULT NULL,
  `intrest` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `time_duration_bachat`
--

INSERT INTO `time_duration_bachat` (`id`, `time`, `intrest`) VALUES
(1, '6 month', '10%'),
(2, '1 Year', '12%'),
(3, '2 Year', '13%'),
(4, '3 Year', '14%'),
(5, '4 Year', '14.5%'),
(6, '5 Year', '15%');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`Ab_id`);

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`A_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `days_365`
--
ALTER TABLE `days_365`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `days_730`
--
ALTER TABLE `days_730`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kopila_bachat`
--
ALTER TABLE `kopila_bachat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loan`
--
ALTER TABLE `loan`
  ADD PRIMARY KEY (`l_ID`);

--
-- Indexes for table `mudhati`
--
ALTER TABLE `mudhati`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `nari_bachat`
--
ALTER TABLE `nari_bachat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `narnari_bachat`
--
ALTER TABLE `narnari_bachat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`N_id`);

--
-- Indexes for table `time_duration_bachat`
--
ALTER TABLE `time_duration_bachat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `Ab_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `A_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `days_365`
--
ALTER TABLE `days_365`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `days_730`
--
ALTER TABLE `days_730`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kopila_bachat`
--
ALTER TABLE `kopila_bachat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `loan`
--
ALTER TABLE `loan`
  MODIFY `l_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mudhati`
--
ALTER TABLE `mudhati`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `nari_bachat`
--
ALTER TABLE `nari_bachat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `narnari_bachat`
--
ALTER TABLE `narnari_bachat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `N_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `time_duration_bachat`
--
ALTER TABLE `time_duration_bachat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
