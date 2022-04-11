-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2022 at 04:09 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `regno` varchar(255) NOT NULL,
  `firstname` varchar(111) NOT NULL,
  `lastname` varchar(111) NOT NULL,
  `email` varchar(111) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `level` varchar(111) NOT NULL,
  `term` varchar(111) NOT NULL,
  `contact` varchar(111) NOT NULL,
  `dept` varchar(111) NOT NULL,
  `gname` varchar(111) NOT NULL,
  `grelation` varchar(111) NOT NULL,
  `gcontact` varchar(111) NOT NULL,
  `address` varchar(111) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `regno`, `firstname`, `lastname`, `email`, `gender`, `level`, `term`, `contact`, `dept`, `gname`, `grelation`, `gcontact`, `address`, `religion`, `password`) VALUES
(25, '854632', 'Kamal ', 'Hossain', 'kamal@gmail.com', 'Male', '4', '2', '01754532695', 'EEE', 'Jalal Hossain', 'Father', '014785632', 'Cumilla', 'muslim', '123'),
(30, '785412', 'Razu', 'Ahmed', 'razu@gmail.com', 'Male', '1', '2', '01745236951', 'EEE', 'Harun Ahmed', 'Father', '0174569823', 'Hazigong', 'Islam', '789'),
(31, '123456', 'Fahad', 'Ahamed', 'Fahad@gmail.com', 'Male', '2', '1', '017458632', 'BBA', 'Fajzal Ahamed', 'Father', '017526598', 'Dhaka', 'Islam', '1234'),
(32, '789425', 'Abdul', 'Salam', 'abdulsalam@gmail.com', 'Male', '2', '2', '017458632', 'Cse', 'Abdul Jabbar', 'Father', '01745863', 'Dhaka', 'Islam', '452');

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `id` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`id`, `Username`, `Pass`) VALUES
(11, 'baiust@gmail.com', '2222');

-- --------------------------------------------------------

--
-- Table structure for table `building_add`
--

CREATE TABLE `building_add` (
  `id` int(111) NOT NULL,
  `Building_Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `building_add`
--

INSERT INTO `building_add` (`id`, `Building_Name`) VALUES
(1, 'male 1'),
(5, 'male 2');

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `id` int(111) NOT NULL,
  `regno` varchar(255) NOT NULL,
  `roomno` varchar(255) NOT NULL,
  `comname` varchar(255) NOT NULL,
  `comdescript` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`id`, `regno`, `roomno`, `comname`, `comdescript`) VALUES
(16, '854632', '1C', 'Food', '45632klkm'),
(17, '789425', '2A', 'Cleaning', 'loremsum ipsaum');

-- --------------------------------------------------------

--
-- Table structure for table `frequests`
--

CREATE TABLE `frequests` (
  `id` int(11) NOT NULL,
  `regno` varchar(255) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` text NOT NULL,
  `gender` varchar(111) NOT NULL,
  `contact` varchar(111) NOT NULL,
  `dept` varchar(111) NOT NULL,
  `religion` varchar(111) NOT NULL,
  `address` varchar(111) NOT NULL,
  `password` text NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `f_accounts`
--

CREATE TABLE `f_accounts` (
  `id` int(11) NOT NULL,
  `regno` varchar(255) NOT NULL,
  `firstname` varchar(111) NOT NULL,
  `lastname` varchar(111) NOT NULL,
  `email` varchar(111) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `contact` varchar(111) NOT NULL,
  `dept` varchar(111) NOT NULL,
  `religion` varchar(111) NOT NULL,
  `address` varchar(111) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `f_accounts`
--

INSERT INTO `f_accounts` (`id`, `regno`, `firstname`, `lastname`, `email`, `gender`, `contact`, `dept`, `religion`, `address`, `password`) VALUES
(28, '785612', 'Abul', 'Kalam', 'abulkalam@gmail.com', 'Male', '0145796', 'BBA', 'Isalm', 'Faridpur', '123'),
(29, '45213', 'Liton', 'Kumer', 'liton@gmail.com', 'Male', '01745632145', 'CSE', 'Hindu', 'Dhaka', '456'),
(30, '452187', 'Kumar', 'Sanu', 'sanu@gmail.com', 'Male', '01478563254', 'CIVIL', 'Hinu', 'Faridpur', '147');

-- --------------------------------------------------------

--
-- Table structure for table `f_complain`
--

CREATE TABLE `f_complain` (
  `id` int(111) NOT NULL,
  `regno` varchar(255) NOT NULL,
  `roomno` varchar(255) NOT NULL,
  `comname` varchar(255) NOT NULL,
  `comdescript` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `f_complain`
--

INSERT INTO `f_complain` (`id`, `regno`, `roomno`, `comname`, `comdescript`) VALUES
(1, '785612', '102', 'Food', 'lorem ipsum');

-- --------------------------------------------------------

--
-- Table structure for table `f_room`
--

CREATE TABLE `f_room` (
  `id` int(111) NOT NULL,
  `regno` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `Building_Name` varchar(255) NOT NULL,
  `floor_no` varchar(255) NOT NULL,
  `room_no` varchar(255) NOT NULL,
  `bed_no` varchar(255) NOT NULL,
  `bed_location` varchar(255) NOT NULL,
  `bed_rent` varchar(255) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `f_room`
--

INSERT INTO `f_room` (`id`, `regno`, `firstname`, `Building_Name`, `floor_no`, `room_no`, `bed_no`, `bed_location`, `bed_rent`, `msg`) VALUES
(5, '45698', 'Kamrul', 'male 1', '6', '6A', '6A-1-I', 'INNER', '2500', 'ID-45698 ,  Name-Kamrul Hasan   , taken this room.'),
(6, '45213', 'Liton', 'male 1', '6', '6A', '6C-4-O', 'INNER', '1900', 'ID-45213 ,  Name-Liton  , taken this room.');

-- --------------------------------------------------------

--
-- Table structure for table `f_room_add`
--

CREATE TABLE `f_room_add` (
  `id` int(111) NOT NULL,
  `Building_Name` varchar(255) NOT NULL,
  `floor_no` varchar(255) NOT NULL,
  `room_no` varchar(255) NOT NULL,
  `bed_no` varchar(255) NOT NULL,
  `bed_location` varchar(255) NOT NULL,
  `bed_rent` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `f_room_add`
--

INSERT INTO `f_room_add` (`id`, `Building_Name`, `floor_no`, `room_no`, `bed_no`, `bed_location`, `bed_rent`) VALUES
(1, 'male 1', '6', '6A', '6A-1-I', 'INNER', '2500'),
(2, 'male 1', '6', '6A', '6A-2-I', 'INNER', '2500'),
(3, 'male 1', '6', '6C', '6C-4-O', 'OUTTER', '1900'),
(4, 'male 1', '6', '6B', '6B-3-O', 'OUTTER', '1900');

-- --------------------------------------------------------

--
-- Table structure for table `f_room_request`
--

CREATE TABLE `f_room_request` (
  `id` int(111) NOT NULL,
  `regno` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `Building_Name` varchar(255) NOT NULL,
  `floor_no` varchar(255) NOT NULL,
  `room_no` varchar(255) NOT NULL,
  `bed_no` varchar(255) NOT NULL,
  `bed_location` varchar(255) NOT NULL,
  `bed_rent` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `msg` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `id` int(111) NOT NULL,
  `perdaybill` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`id`, `perdaybill`) VALUES
(1, '150');

-- --------------------------------------------------------

--
-- Table structure for table `guestdetails`
--

CREATE TABLE `guestdetails` (
  `id` int(111) NOT NULL,
  `regno` varchar(255) NOT NULL,
  `roomno` varchar(255) NOT NULL,
  `num_of_day` varchar(255) NOT NULL,
  `num_of_guest` varchar(255) NOT NULL,
  `perdaybill` varchar(111) NOT NULL,
  `room_bill` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guestdetails`
--

INSERT INTO `guestdetails` (`id`, `regno`, `roomno`, `num_of_day`, `num_of_guest`, `perdaybill`, `room_bill`, `timestamp`) VALUES
(15, '854632', '1A', '2', '2', '150', '600', '2022-05-06 11:21:34'),
(16, '854632', '1A', '2', '2', '150', '600', '2022-04-07 18:48:41'),
(17, '45213', '6A', '2', '1', '150', '300', '2022-04-09 10:32:48'),
(18, '789425', '2A', '5', '1', '150', '750', '2022-04-09 16:39:25'),
(19, '854632', '1A', '2', '2', '150', '600', '2022-04-09 18:34:37'),
(21, '45213', '6A', '1', '1', '150', '150', '2022-04-10 11:22:15'),
(22, '854632', '1A', '2', '1', '150', '300', '2022-04-10 12:59:59'),
(23, '45213', '6A', '1', '1', '150', '150', '2022-04-10 13:12:54');

-- --------------------------------------------------------

--
-- Table structure for table `meal_bill`
--

CREATE TABLE `meal_bill` (
  `mb_id` int(11) NOT NULL,
  `regno` varchar(255) NOT NULL,
  `personal` int(11) NOT NULL,
  `guest` int(11) NOT NULL,
  `guest_no` int(11) NOT NULL,
  `meal_type` varchar(255) NOT NULL,
  `place` varchar(255) NOT NULL,
  `sub_date` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meal_bill`
--

INSERT INTO `meal_bill` (`mb_id`, `regno`, `personal`, `guest`, `guest_no`, `meal_type`, `place`, `sub_date`, `timestamp`) VALUES
(26, '45612387', 70, 70, 1, 'Dinner', 'Canteen', '2022/03/22', '2022-03-22 12:47:15'),
(27, '45612387', 20, 100, 5, 'Breakfast', 'Hall', '2022/04/09', '2022-04-09 14:18:10'),
(31, '854632', 100, 500, 5, 'Dinner', 'Hall', '2022/03/09', '2022-03-09 13:00:42'),
(36, '854632', 75, 225, 3, 'Lunch', 'Canteen', '2022/04/09', '2022-04-09 09:33:46'),
(37, '789425', 75, 75, 1, 'Dinner', 'Hall', '2022/04/09', '2022-04-09 16:46:02'),
(38, '854632', 70, 280, 4, 'Lunch', 'Canteen', '2022/04/10', '2022-04-10 08:14:51'),
(40, '854632', 70, 0, 0, 'Dinner', 'Hall', '2022/04/10', '2022-04-10 14:02:18');

-- --------------------------------------------------------

--
-- Table structure for table `meal_menu`
--

CREATE TABLE `meal_menu` (
  `id` int(111) NOT NULL,
  `dayy` varchar(255) NOT NULL,
  `breakfast_menu` varchar(255) NOT NULL,
  `breakfast_price` varchar(255) NOT NULL,
  `lunch_menu` varchar(255) NOT NULL,
  `lunch_price` varchar(255) NOT NULL,
  `dinner_menu` varchar(255) NOT NULL,
  `dinner_price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meal_menu`
--

INSERT INTO `meal_menu` (`id`, `dayy`, `breakfast_menu`, `breakfast_price`, `lunch_menu`, `lunch_price`, `dinner_menu`, `dinner_price`) VALUES
(1, 'Saturday', 'Bread, Butter', '35', 'chicken,Rice', '75', 'chicken,Rice', '75'),
(2, 'Sunday', 'Khuchuri', '50', 'Rice,Fish,Dal', '70', 'Rice,Fish,Dal', '70'),
(3, 'Monday', 'Porota, EGG ,dal', '20', 'Rice,fish,Dal', '70', 'Rice,Chicken,Dal', '70'),
(4, 'Tuesday', 'Khichuri', '20', 'Rice,Fish,Dal', '70', 'Rice,Beef,Dal', '120'),
(5, 'Wednesday', 'Porota, Egg', '20', 'Rice,Fish,Dal', '70', 'Rice,Fish,Dal', '70'),
(6, 'Thursday', 'Porota, Egg', '20', 'Rice,Egg,Dal', '70', 'Rice,Fish,Dal', '70'),
(7, 'Friday', 'Khichuri', '50', 'Fried Rice, Chicken', '100', 'Khichuri,Chicken,Egg', '100');

-- --------------------------------------------------------

--
-- Table structure for table `meal_time`
--

CREATE TABLE `meal_time` (
  `id` int(111) NOT NULL,
  `meal_nme` varchar(255) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meal_time`
--

INSERT INTO `meal_time` (`id`, `meal_nme`, `start_time`, `end_time`) VALUES
(1, 'Breakfast', '07:00:00', '10:15:00'),
(2, 'Lunch', '13:00:00', '17:00:00'),
(3, 'Dinner', '20:00:00', '23:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(11) NOT NULL,
  `regno` varchar(255) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` text NOT NULL,
  `gender` varchar(111) NOT NULL,
  `level` varchar(111) NOT NULL,
  `term` varchar(111) NOT NULL,
  `contact` varchar(111) NOT NULL,
  `dept` varchar(111) NOT NULL,
  `gname` varchar(111) NOT NULL,
  `grelation` varchar(111) NOT NULL,
  `gcontact` varchar(111) NOT NULL,
  `address` varchar(111) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(111) NOT NULL,
  `regno` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `level` int(255) NOT NULL,
  `term` int(255) NOT NULL,
  `Building_Name` varchar(255) NOT NULL,
  `floor_no` varchar(255) NOT NULL,
  `room_no` varchar(255) NOT NULL,
  `bed_no` varchar(255) NOT NULL,
  `bed_location` varchar(255) NOT NULL,
  `bed_rent` varchar(255) NOT NULL,
  `contact` varchar(111) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `regno`, `firstname`, `level`, `term`, `Building_Name`, `floor_no`, `room_no`, `bed_no`, `bed_location`, `bed_rent`, `contact`, `msg`) VALUES
(8, '45612387', 'Golam', 2, 2, 'male 1', '3', '3A', '3A-1-I', 'INNER', '2500', '', 'ID-45612387 ,  Name-Golam ,  Level-2  Term-2 , taken this room.'),
(9, '854632', 'Kamal ', 4, 2, 'male 1', '1', '1A', '1A-1-I', 'INNER', '2500', '', 'ID-854632 ,  Name-Kamal  ,  Level-4  Term-2 , taken this room.'),
(10, '789425', 'Abdul', 2, 2, 'male 1', '2', '2A', '2A-1-I', 'INNER', '2500', '017542639', 'ID-789425 ,  Name-Abdul ,  Level-2  Term-2 , taken this room.');

-- --------------------------------------------------------

--
-- Table structure for table `room_add`
--

CREATE TABLE `room_add` (
  `id` int(111) NOT NULL,
  `Building_Name` varchar(255) NOT NULL,
  `floor_no` varchar(255) NOT NULL,
  `room_no` varchar(255) NOT NULL,
  `bed_no` varchar(255) NOT NULL,
  `bed_location` varchar(255) NOT NULL,
  `bed_rent` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_add`
--

INSERT INTO `room_add` (`id`, `Building_Name`, `floor_no`, `room_no`, `bed_no`, `bed_location`, `bed_rent`) VALUES
(10, 'male 1', '1', '1A', '1A-1-I', 'INNER', '2500'),
(11, 'male 1', '1', '1A', '1A-2-I', 'INNER', '2500'),
(12, 'male 1', '1', '1A', '1A-2-O', 'OUTTER', '1900'),
(13, 'male 1', '2', '2A', '2A-1-I', 'INNER', '2500'),
(14, 'male 1', '2', '2A', '2A-2-I', 'INNER', '2500'),
(15, 'male 1', '3', '3A', '3A-1-I', 'INNER', '2500'),
(16, 'male 1', '4', '4A', '4A-1-I', 'INNER', '2500'),
(20, 'male 1', '5', '5C', '5C-1-I', 'INNER', '2500');

-- --------------------------------------------------------

--
-- Table structure for table `room_request`
--

CREATE TABLE `room_request` (
  `id` int(111) NOT NULL,
  `regno` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `level` int(255) NOT NULL,
  `term` int(255) NOT NULL,
  `Building_Name` varchar(255) NOT NULL,
  `floor_no` varchar(255) NOT NULL,
  `room_no` varchar(255) NOT NULL,
  `bed_no` varchar(255) NOT NULL,
  `bed_location` varchar(255) NOT NULL,
  `bed_rent` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `msg` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `s_bill`
--

CREATE TABLE `s_bill` (
  `id` int(11) NOT NULL,
  `regno` varchar(111) DEFAULT NULL,
  `t_bill` varchar(11) DEFAULT NULL,
  `p_bill` varchar(111) DEFAULT NULL,
  `due` varchar(111) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `s_bill`
--

INSERT INTO `s_bill` (`id`, `regno`, `t_bill`, `p_bill`, `due`, `date`) VALUES
(5, '854632', '3100', '800', '2300', '2022-04-09 17:01:49'),
(6, '45213', '1900', '800', '1100', '2022-04-09 15:34:58');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `userIp` varbinary(16) NOT NULL,
  `loginTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `userId`, `userEmail`, `userIp`, `loginTime`) VALUES
(16, 9, 'tamim@gmail.com', 0x3132372e302e302e31, '2022-02-25 20:38:34'),
(17, 9, 'tamim@gmail.com', 0x3132372e302e302e31, '2022-02-25 20:41:37'),
(18, 9, 'tamim@gmail.com', 0x3132372e302e302e31, '2022-02-25 20:46:24'),
(19, 9, 'tamim@gmail.com', 0x3132372e302e302e31, '2022-02-25 20:50:06'),
(20, 9, 'tamim@gmail.com', 0x3132372e302e302e31, '2022-02-26 02:58:15'),
(21, 10, 'Aklima@gmail.com', 0x3132372e302e302e31, '2022-02-26 03:17:11'),
(22, 9, 'tamim@gmail.com', 0x3132372e302e302e31, '2022-02-26 04:58:47'),
(23, 9, 'tamim@gmail.com', 0x3132372e302e302e31, '2022-02-26 05:37:11'),
(25, 9, 'tamim@gmail.com', 0x3132372e302e302e31, '2022-02-26 14:03:51'),
(26, 9, 'tamim@gmail.com', 0x3132372e302e302e31, '2022-02-26 14:06:56'),
(27, 9, 'tamim@gmail.com', 0x3132372e302e302e31, '2022-02-26 16:25:46'),
(28, 9, 'tamim@gmail.com', 0x3132372e302e302e31, '2022-02-26 16:49:04'),
(29, 9, 'tamim@gmail.com', 0x3132372e302e302e31, '2022-02-27 04:07:00'),
(31, 17, 'hasan@gmail.com', 0x3a3a31, '2022-02-28 11:34:04'),
(32, 17, 'hasan@gmail.com', 0x3a3a31, '2022-02-28 12:17:38'),
(33, 17, 'hasan@gmail.com', 0x3a3a31, '2022-02-28 13:55:46'),
(34, 17, 'hasan@gmail.com', 0x3a3a31, '2022-02-28 14:10:38'),
(35, 17, 'hasan@gmail.com', 0x3a3a31, '2022-02-28 14:12:08'),
(36, 10, 'Aklima@gmail.com', 0x3a3a31, '2022-02-28 14:36:05'),
(37, 22, 'anamul134@gmail.com', 0x3a3a31, '2022-02-28 16:50:20'),
(38, 22, 'anamul134@gmail.com', 0x3a3a31, '2022-02-28 16:54:35'),
(39, 23, 'rahmat@gmail.com', 0x3a3a31, '2022-02-28 17:14:11'),
(40, 24, 'kamal@gmail.com', 0x3a3a31, '2022-02-28 17:22:49'),
(41, 10, 'Aklima@gmail.com', 0x3a3a31, '2022-02-28 17:25:32'),
(42, 25, 'kamal@gmail.com', 0x3a3a31, '2022-02-28 17:37:02'),
(43, 25, 'kamal@gmail.com', 0x3a3a31, '2022-02-28 17:40:02'),
(44, 25, 'kamal@gmail.com', 0x3132372e302e302e31, '2022-03-01 03:22:22'),
(45, 28, 'Abulkalam@gmail.com', 0x3132372e302e302e31, '2022-03-01 08:14:57'),
(46, 28, 'abulkalam@gmail.com', 0x3132372e302e302e31, '2022-03-01 09:37:54'),
(47, 25, 'kamal@gmail.com', 0x3132372e302e302e31, '2022-03-01 09:38:54'),
(48, 25, 'kamal@gmail.com', 0x3132372e302e302e31, '2022-03-01 09:42:08'),
(49, 28, 'sakib@gmail.com', 0x3a3a31, '2022-03-01 12:14:28'),
(50, 28, 'sakib@gmail.com', 0x3a3a31, '2022-03-01 12:16:37'),
(51, 29, 'polash@gmail.com', 0x3a3a31, '2022-03-01 12:27:49'),
(52, 29, 'polash@gmail.com', 0x3a3a31, '2022-03-01 12:29:29'),
(53, 29, 'liton@gmail.com', 0x3a3a31, '2022-03-01 12:32:16'),
(54, 30, 'razu@gmail.com', 0x3a3a31, '2022-03-01 12:55:32'),
(55, 30, 'sanu@gmail.com', 0x3a3a31, '2022-03-01 13:02:40'),
(56, 29, 'polash@gmail.com', 0x3a3a31, '2022-03-01 13:04:12'),
(57, 29, 'polash@gmail.com', 0x3a3a31, '2022-03-08 16:53:10'),
(58, 25, 'kamal@gmail.com', 0x3a3a31, '2022-03-08 16:57:33'),
(59, 25, 'kamal@gmail.com', 0x3a3a31, '2022-03-08 17:29:45'),
(60, 25, 'kamal@gmail.com', 0x3a3a31, '2022-03-09 04:17:01'),
(61, 30, 'razu@gmail.com', 0x3a3a31, '2022-03-19 12:10:35'),
(62, 28, 'sakib@gmail.com', 0x3a3a31, '2022-03-19 17:13:05'),
(63, 25, 'kamal@gmail.com', 0x3a3a31, '2022-03-19 17:20:06'),
(64, 25, 'kamal@gmail.com', 0x3a3a31, '2022-03-20 02:43:28'),
(65, 25, 'kamal@gmail.com', 0x3a3a31, '2022-03-20 02:50:58'),
(66, 25, 'kamal@gmail.com', 0x3a3a31, '2022-03-20 02:51:47'),
(67, 0, 'kamal@gmail.com', 0x3a3a31, '2022-03-20 02:54:23'),
(68, 0, 'sakib@gmail.com', 0x3a3a31, '2022-03-20 03:32:06'),
(69, 0, 'polash@gmail.com', 0x3a3a31, '2022-03-20 03:33:19'),
(70, 0, 'kamal@gmail.com', 0x3a3a31, '2022-03-20 10:08:42'),
(71, 0, 'kamal@gmail.com', 0x3a3a31, '2022-03-20 12:53:52'),
(72, 0, 'kamal@gmail.com', 0x3a3a31, '2022-03-20 17:24:41'),
(73, 0, 'razu@gmail.com', 0x3a3a31, '2022-03-20 17:44:53'),
(74, 25, 'kamal@gmail.com', 0x3a3a31, '2022-03-21 12:44:08'),
(75, 0, 'kamal@gmail.com', 0x3a3a31, '2022-03-21 13:18:47'),
(76, 0, 'kamal@gmail.com', 0x3a3a31, '2022-03-21 15:35:43'),
(77, 0, 'kamal@gmail.com', 0x3a3a31, '2022-03-21 16:55:13'),
(78, 0, 'sakib@gmail.com', 0x3a3a31, '2022-03-22 05:44:38'),
(79, 28, 'abulkalam@gmail.com', 0x3a3a31, '2022-03-22 06:05:39'),
(80, 0, 'kamal@gmail.com', 0x3a3a31, '2022-03-22 10:04:48'),
(81, 0, 'sakib@gmail.com', 0x3a3a31, '2022-03-22 11:45:24'),
(82, 0, 'kamal@gmail.com', 0x3132372e302e302e31, '2022-03-22 12:22:03'),
(83, 0, 'kamal@gmail.com', 0x3132372e302e302e31, '2022-03-22 14:17:25'),
(84, 0, 'sakib@gmail.com', 0x3a3a31, '2022-03-22 14:17:54'),
(85, 0, 'polash@gmail.com', 0x3a3a31, '2022-03-22 14:19:25'),
(86, 0, 'sakib@gmail.com', 0x3a3a31, '2022-03-22 16:07:36'),
(87, 0, 'kamal@gmail.com', 0x3a3a31, '2022-03-23 10:50:49'),
(88, 28, 'abulkalam@gmail.com', 0x3a3a31, '2022-03-23 11:01:11'),
(89, 0, 'kamal@gmail.com', 0x3132372e302e302e31, '2022-03-23 11:21:17'),
(90, 0, 'kamal@gmail.com', 0x3a3a31, '2022-03-23 11:43:44'),
(91, 29, 'liton@gmail.com', 0x3a3a31, '2022-03-23 12:33:42'),
(92, 29, 'liton@gmail.com', 0x3a3a31, '2022-03-23 12:47:37'),
(93, 29, 'liton@gmail.com', 0x3a3a31, '2022-03-23 12:49:27'),
(94, 29, 'liton@gmail.com', 0x3a3a31, '2022-03-23 13:05:16'),
(95, 0, 'kamal@gmail.com', 0x3a3a31, '2022-03-23 13:07:32'),
(96, 0, 'polash@gmail.com', 0x3a3a31, '2022-03-23 13:19:53'),
(97, 0, 'kamal@gmail.com', 0x3a3a31, '2022-03-23 13:27:15'),
(98, 28, 'abulkalam@gmail.com', 0x3a3a31, '2022-04-01 12:26:26'),
(99, 0, 'kamal@gmail.com', 0x3a3a31, '2022-04-01 12:27:17'),
(100, 0, 'kamal@gmail.com', 0x3a3a31, '2022-04-01 12:32:05'),
(104, 0, 'kamal@gmail.com', 0x3a3a31, '2022-04-01 13:54:29'),
(106, 0, 'kamrulhasn@gmail.com', 0x3a3a31, '2022-04-02 09:48:51'),
(107, 0, 'kamal@gmail.com', 0x3a3a31, '2022-04-02 12:38:05'),
(108, 0, 'kamrulhasn@gmail.com', 0x3a3a31, '2022-04-02 12:39:00'),
(109, 33, 'kamrulhasan@gmail.com', 0x3a3a31, '2022-04-02 12:44:09'),
(110, 0, 'kamrulhasan@gmail.com', 0x3a3a31, '2022-04-02 13:39:53'),
(111, 0, 'abulkalam@gmail.com', 0x3a3a31, '2022-04-02 13:43:28'),
(112, 0, 'kamal@gmail.com', 0x3a3a31, '2022-04-03 08:29:47'),
(113, 0, 'kamal@gmail.com', 0x3a3a31, '2022-04-03 08:53:18'),
(114, 0, 'kamal@gmail.com', 0x3a3a31, '2022-04-03 18:08:39'),
(115, 0, 'kamal@gmail.com', 0x3a3a31, '2022-04-04 06:11:24'),
(116, 0, 'kamal@gmail.com', 0x3a3a31, '2022-04-04 13:05:36'),
(117, 0, 'kamal@gmail.com', 0x3a3a31, '2022-04-04 17:27:52'),
(118, 0, 'kamal@gmail.com', 0x3a3a31, '2022-04-05 08:38:21'),
(119, 0, 'kamal@gmail.com', 0x3a3a31, '2022-04-05 10:01:32'),
(120, 0, 'kamal@gmail.com', 0x3a3a31, '2022-04-05 10:24:24'),
(121, 0, 'kamal@gmail.com', 0x3a3a31, '2022-04-05 12:53:00'),
(122, 0, 'kamal@gmail.com', 0x3a3a31, '2022-04-05 13:01:56'),
(123, 0, 'kamal@gmail.com', 0x3a3a31, '2022-04-05 14:37:59'),
(124, 0, 'sakib@gmail.com', 0x3a3a31, '2022-04-05 14:50:46'),
(125, 0, 'kamal@gmail.com', 0x3a3a31, '2022-04-05 15:12:23'),
(126, 0, 'kamal@gmail.com', 0x3a3a31, '2022-04-05 18:05:10'),
(127, 0, 'kamal@gmail.com', 0x3a3a31, '2022-04-06 08:09:39'),
(128, 0, 'kamal@gmail.com', 0x3a3a31, '2022-04-07 11:16:39'),
(129, 0, 'kamal@gmail.com', 0x3a3a31, '2022-04-07 15:27:19'),
(130, 25, 'kamal@gmail.com', 0x3a3a31, '2022-04-08 08:42:41'),
(131, 25, 'kamal@gmail.com', 0x3a3a31, '2022-04-08 08:48:12'),
(132, 0, 'kamal@gmail.com', 0x3a3a31, '2022-04-08 08:50:50'),
(133, 0, 'kamal@gmail.com', 0x3a3a31, '2022-04-08 08:51:46'),
(134, 0, 'kamal@gmail.com', 0x3a3a31, '2022-04-08 09:10:53'),
(135, 0, 'kamal@gmail.com', 0x3a3a31, '2022-04-08 10:06:38'),
(136, 25, 'kamal@gmail.com', 0x3a3a31, '2022-04-08 10:35:06'),
(137, 0, 'kamal@gmail.com', 0x3a3a31, '2022-04-08 13:19:31'),
(138, 0, 'kamal@gmail.com', 0x3a3a31, '2022-04-08 14:55:40'),
(139, 0, 'kamal@gmail.com', 0x3a3a31, '2022-04-08 15:46:15'),
(140, 25, 'kamal@gmail.com', 0x3a3a31, '2022-04-08 18:50:29'),
(141, 25, 'kamal@gmail.com', 0x3a3a31, '2022-04-08 19:12:57'),
(142, 25, 'kamal@gmail.com', 0x3a3a31, '2022-04-08 19:15:56'),
(143, 0, 'kamal@gmail.com', 0x3a3a31, '2022-04-08 19:19:42'),
(144, 0, 'kamal@gmail.com', 0x3a3a31, '2022-04-08 19:33:08'),
(145, 29, 'liton@gmail.com', 0x3a3a31, '2022-04-08 19:39:55'),
(146, 0, 'liton@gmail.com', 0x3a3a31, '2022-04-08 19:42:06'),
(147, 29, 'liton@gmail.com', 0x3a3a31, '2022-04-08 19:45:19'),
(148, 0, 'kamal@gmail.com', 0x3a3a31, '2022-04-09 06:09:29'),
(149, 0, 'kamal@gmail.com', 0x3a3a31, '2022-04-09 09:30:24'),
(150, 0, 'kamal@gmail.com', 0x3a3a31, '2022-04-09 10:23:31'),
(151, 0, 'liton@gmail.com', 0x3a3a31, '2022-04-09 10:30:19'),
(152, 0, 'kamal@gmail.com', 0x3a3a31, '2022-04-09 10:43:11'),
(153, 0, 'liton@gmail.com', 0x3a3a31, '2022-04-09 12:07:26'),
(154, 0, 'abulkalam@gmail.com', 0x3a3a31, '2022-04-09 15:18:42'),
(155, 0, 'abulkalam@gmail.com', 0x3a3a31, '2022-04-09 15:19:58'),
(156, 0, 'liton@gmail.com', 0x3a3a31, '2022-04-09 15:20:14'),
(157, 0, 'kamal@gmail.com', 0x3a3a31, '2022-04-09 15:57:47'),
(158, 29, 'liton@gmail.com', 0x3a3a31, '2022-04-09 15:58:07'),
(159, 0, 'liton@gmail.com', 0x3a3a31, '2022-04-09 16:01:30'),
(160, 0, 'liton@gmail.com', 0x3a3a31, '2022-04-09 16:02:35'),
(161, 0, 'liton@gmail.com', 0x3a3a31, '2022-04-09 16:04:13'),
(162, 0, 'Fahad@gmail.com', 0x3a3a31, '2022-04-09 16:26:34'),
(163, 0, 'Fahad@gmail.com', 0x3a3a31, '2022-04-09 16:29:18'),
(164, 0, 'liton@gmail.com', 0x3a3a31, '2022-04-09 16:31:03'),
(165, 0, 'abdulsalam@gmail.com', 0x3a3a31, '2022-04-09 16:37:22'),
(166, 0, 'kamal@gmail.com', 0x3a3a31, '2022-04-09 16:57:46'),
(167, 0, 'kamal@gmail.com', 0x3a3a31, '2022-04-09 17:02:52'),
(168, 0, 'kamal@gmail.com', 0x3a3a31, '2022-04-09 17:12:54'),
(169, 0, 'kamal@gmail.com', 0x3a3a31, '2022-04-09 18:34:19'),
(170, 0, 'kamal@gmail.com', 0x3a3a31, '2022-04-09 18:46:33'),
(171, 0, 'kamal@gmail.com', 0x3a3a31, '2022-04-10 08:07:00'),
(172, 0, 'kamal@gmail.com', 0x3a3a31, '2022-04-10 08:13:32'),
(173, 0, 'kamal@gmail.com', 0x3a3a31, '2022-04-10 10:06:11'),
(174, 0, 'kamal@gmail.com', 0x3a3a31, '2022-04-10 10:17:47'),
(175, 0, 'liton@gmail.com', 0x3a3a31, '2022-04-10 10:49:01'),
(176, 0, 'liton@gmail.com', 0x3a3a31, '2022-04-10 10:52:39'),
(177, 0, 'kamal@gmail.com', 0x3a3a31, '2022-04-10 10:57:41'),
(178, 0, 'liton@gmail.com', 0x3a3a31, '2022-04-10 10:58:31'),
(179, 0, 'liton@gmail.com', 0x3a3a31, '2022-04-10 11:02:00'),
(180, 0, 'liton@gmail.com', 0x3a3a31, '2022-04-10 11:08:39'),
(181, 0, 'liton@gmail.com', 0x3a3a31, '2022-04-10 11:10:51'),
(182, 0, 'liton@gmail.com', 0x3a3a31, '2022-04-10 11:22:01'),
(183, 0, 'kamal@gmail.com', 0x3a3a31, '2022-04-10 12:59:42'),
(184, 0, 'liton@gmail.com', 0x3a3a31, '2022-04-10 13:12:38'),
(185, 0, 'kamal@gmail.com', 0x3a3a31, '2022-04-10 13:56:11'),
(186, 0, 'kamal@gmail.com', 0x3a3a31, '2022-04-10 13:57:21'),
(187, 0, 'liton@gmail.com', 0x3a3a31, '2022-04-10 13:57:58'),
(188, 0, 'liton@gmail.com', 0x3a3a31, '2022-04-10 13:58:57'),
(189, 0, 'kamal@gmail.com', 0x3a3a31, '2022-04-10 14:01:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `building_add`
--
ALTER TABLE `building_add`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `frequests`
--
ALTER TABLE `frequests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f_accounts`
--
ALTER TABLE `f_accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f_complain`
--
ALTER TABLE `f_complain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f_room`
--
ALTER TABLE `f_room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f_room_add`
--
ALTER TABLE `f_room_add`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f_room_request`
--
ALTER TABLE `f_room_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guestdetails`
--
ALTER TABLE `guestdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meal_bill`
--
ALTER TABLE `meal_bill`
  ADD PRIMARY KEY (`mb_id`);

--
-- Indexes for table `meal_menu`
--
ALTER TABLE `meal_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meal_time`
--
ALTER TABLE `meal_time`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_add`
--
ALTER TABLE `room_add`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_request`
--
ALTER TABLE `room_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_bill`
--
ALTER TABLE `s_bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `building_add`
--
ALTER TABLE `building_add`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `frequests`
--
ALTER TABLE `frequests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `f_accounts`
--
ALTER TABLE `f_accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `f_complain`
--
ALTER TABLE `f_complain`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `f_room`
--
ALTER TABLE `f_room`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `f_room_add`
--
ALTER TABLE `f_room_add`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `f_room_request`
--
ALTER TABLE `f_room_request`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `guest`
--
ALTER TABLE `guest`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `guestdetails`
--
ALTER TABLE `guestdetails`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `meal_bill`
--
ALTER TABLE `meal_bill`
  MODIFY `mb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `meal_menu`
--
ALTER TABLE `meal_menu`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `meal_time`
--
ALTER TABLE `meal_time`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `room_add`
--
ALTER TABLE `room_add`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `room_request`
--
ALTER TABLE `room_request`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `s_bill`
--
ALTER TABLE `s_bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=190;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
