-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2022 at 02:09 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dqsalary_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `dqadmin_tbl`
--

CREATE TABLE `dqadmin_tbl` (
  `id` int(10) UNSIGNED NOT NULL,
  `Role` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dq_keyword` varchar(255) NOT NULL,
  `phone` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dqadmin_tbl`
--

INSERT INTO `dqadmin_tbl` (`id`, `Role`, `username`, `password`, `dq_keyword`, `phone`) VALUES
(1, 'My Admin', 'admin', '$2y$12$/uMrKp8T5bURj3xWn82jlu4WPsTcW91mw3sjcs.VXCnD00q4aqZvW', '$2y$12$/P09vJFilAeBrs0qBoLt0eRM5jAvqs7Wr1X1TXZQwOtwWuyipdduK', '09569718264');

-- --------------------------------------------------------

--
-- Table structure for table `dqemp_tbl`
--

CREATE TABLE `dqemp_tbl` (
  `id` int(11) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `civil_status` varchar(255) NOT NULL,
  `height` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `email_address_personal` varchar(255) NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `place_of_birth` varchar(255) NOT NULL,
  `home_address` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `id_number` varchar(255) NOT NULL,
  `email_address_company` varchar(255) NOT NULL,
  `employment_type` varchar(255) NOT NULL,
  `employment_status` varchar(255) NOT NULL,
  `date_hired` date NOT NULL,
  `date_registered` date NOT NULL,
  `tin_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dqemp_tbl`
--

INSERT INTO `dqemp_tbl` (`id`, `first_name`, `middle_name`, `last_name`, `gender`, `civil_status`, `height`, `weight`, `email_address_personal`, `mobile_number`, `age`, `date_of_birth`, `place_of_birth`, `home_address`, `company`, `department`, `position`, `id_number`, `email_address_company`, `employment_type`, `employment_status`, `date_hired`, `date_registered`, `tin_number`) VALUES
(21, 'Three ar', 'Acido', 'Sempron', 'MALE', 'SINGLE', '150', '20', 'sempronthreear@gmail.com', '09569718264', '20', '2019-01-01', 'Quezon City', 'villa ilagan sitio panaklayan b-6 l-6 phase-2 city of san jose del monte bulacan', 'DATASTIQ', 'GENERAL', 'cmo', '1800', 'three.ar.sempron@datastiq.com', 'Regular', 'Active', '2019-01-01', '2019-01-01', '1655465'),
(22, 'Rica', 'Alquiros', 'Echaluce', 'FEMALE', 'MARRIED', '160', '50', 'rica@gmail.com', '123123', '12', '2022-03-13', '12312', '12312', 'DATASTIQ', 'TECHNICAL SUPPORT', 'hr', '456', 'roc@gmail.com', 'Regular', 'Active', '2022-03-07', '2022-03-10', '123');

-- --------------------------------------------------------

--
-- Table structure for table `dqreports_tbl`
--

CREATE TABLE `dqreports_tbl` (
  `id` int(10) UNSIGNED NOT NULL,
  `employee_id` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `tin_number` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `sss_contribution` varchar(255) NOT NULL,
  `philhealth` varchar(255) NOT NULL,
  `pagibig` varchar(255) NOT NULL,
  `add_ons` varchar(255) NOT NULL,
  `basic_salary` varchar(255) NOT NULL,
  `net_pay` varchar(255) NOT NULL,
  `salary_slip_from` date NOT NULL,
  `salary_slip_to` date NOT NULL,
  `total_deduction` varchar(255) NOT NULL,
  `total_earnings` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dqreports_tbl`
--

INSERT INTO `dqreports_tbl` (`id`, `employee_id`, `first_name`, `middle_name`, `last_name`, `tin_number`, `position`, `sss_contribution`, `philhealth`, `pagibig`, `add_ons`, `basic_salary`, `net_pay`, `salary_slip_from`, `salary_slip_to`, `total_deduction`, `total_earnings`) VALUES
(14, '1800', 'Three ar', 'Acido', 'Sempron', '1655465', 'cmo', '100', '100', '100', '0', '20000', '19700', '2019-01-01', '2019-01-01', '300', '20000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dqadmin_tbl`
--
ALTER TABLE `dqadmin_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dqemp_tbl`
--
ALTER TABLE `dqemp_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dqreports_tbl`
--
ALTER TABLE `dqreports_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dqadmin_tbl`
--
ALTER TABLE `dqadmin_tbl`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dqemp_tbl`
--
ALTER TABLE `dqemp_tbl`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `dqreports_tbl`
--
ALTER TABLE `dqreports_tbl`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
