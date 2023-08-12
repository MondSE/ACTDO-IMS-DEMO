-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2023 at 06:26 PM
-- Server version: 8.0.33
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schema_test_actdo`
--

-- --------------------------------------------------------

--
-- Table structure for table `accidents`
--

CREATE TABLE `accidents` (
  `id` int NOT NULL,
  `code` text NOT NULL,
  `date_time` datetime NOT NULL,
  `location` text NOT NULL,
  `damage` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fatality` int NOT NULL,
  `injured` int NOT NULL,
  `cctv` varchar(225) NOT NULL,
  `involved` text NOT NULL,
  `name_operator` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `single` int NOT NULL,
  `sedan` int NOT NULL,
  `truck` int NOT NULL,
  `puj` int NOT NULL,
  `tricycle` int NOT NULL,
  `bus` int NOT NULL,
  `suv` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint NOT NULL,
  `name` text NOT NULL,
  `designation` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `contact_no` char(22) NOT NULL,
  `date_hired` date DEFAULT NULL,
  `status` text NOT NULL,
  `sss_no` char(22) NOT NULL,
  `gsis_no` char(22) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `phil_health_no` char(22) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `tin_no` char(22) NOT NULL,
  `pag_ibig_no` char(22) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `salary_rate` bigint NOT NULL,
  `img_status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `legal_complaint`
--

CREATE TABLE `legal_complaint` (
  `id` int NOT NULL,
  `Ticket_Type` text NOT NULL,
  `Ticket_No` bigint NOT NULL,
  `Full_Name` varchar(225) NOT NULL,
  `violation` text NOT NULL,
  `Officer` varchar(225) NOT NULL,
  `Location` text NOT NULL,
  `Date_Complaint` text NOT NULL,
  `Remarks` text NOT NULL,
  `Explaination_Complain` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `license`
--

CREATE TABLE `license` (
  `Id` bigint NOT NULL,
  `Ticket_No` bigint NOT NULL,
  `Ticket_Types` varchar(30) NOT NULL,
  `Driver_License_No` text NOT NULL,
  `Plate_No` text NOT NULL,
  `Vehicle_Model` text NOT NULL,
  `Vehicle_Color` text NOT NULL,
  `Full_Name` text NOT NULL,
  `Violation` text NOT NULL,
  `Location` text NOT NULL,
  `Date_Apprehend` date DEFAULT NULL,
  `Type_Vehicle` varchar(10) NOT NULL,
  `Office` varchar(10) NOT NULL,
  `Amount_Payment` bigint NOT NULL,
  `Discount_Amount_Payment` bigint NOT NULL,
  `Date_Transaction` date DEFAULT NULL,
  `Official_Receipt_No` bigint NOT NULL,
  `Discount_Ticket_No` text NOT NULL,
  `Responsible_Name` text NOT NULL,
  `Transaction` text,
  `Officer_Name` varchar(255) NOT NULL,
  `Remarks` text NOT NULL,
  `City` text NOT NULL,
  `Public_Transport_State` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint NOT NULL,
  `users` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `office` varchar(255) NOT NULL,
  `general_key` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `users`, `fullname`, `password`, `status`, `office`, `general_key`) VALUES
(1, 'admin', 'Admin Developer', 'admin', 'active', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accidents`
--
ALTER TABLE `accidents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `legal_complaint`
--
ALTER TABLE `legal_complaint`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `license`
--
ALTER TABLE `license`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accidents`
--
ALTER TABLE `accidents`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `legal_complaint`
--
ALTER TABLE `legal_complaint`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `license`
--
ALTER TABLE `license`
  MODIFY `Id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
