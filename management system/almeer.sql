-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2022 at 08:39 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `almeer`
--

-- --------------------------------------------------------

--
-- Table structure for table `administration`
--

CREATE TABLE `administration` (
  `id` int(45) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `center-incomes`
--

CREATE TABLE `center-incomes` (
  `id` int(45) NOT NULL,
  `income-cate` varchar(255) NOT NULL,
  `income-full-value` int(45) NOT NULL,
  `income-value` int(45) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `center-incomes`
--

INSERT INTO `center-incomes` (`id`, `income-cate`, `income-full-value`, `income-value`, `date`) VALUES
(1, 'ايراد الطبيب', 10000, 9000, '2021-06-22'),
(2, 'ايراد الطبيب', 10000, 9000, '2021-06-22'),
(3, 'ايراد الطبيب', 10000, 9000, '2021-06-22'),
(4, 'ايراد الطبيب', 52000, 26000, '2021-06-22'),
(5, 'ايراد الطبيب', 40000, 20000, '2021-06-22'),
(6, 'ايراد المختبر', 20000, 6010000, '2021-06-22'),
(7, 'ايراد المختبر', 10000, 8000, '2021-06-22'),
(8, 'ايراد الطبيب', 10000, 9000, '2021-06-24'),
(9, 'ايراد الطبيب', 50000, 25000, '2021-06-24'),
(10, 'ايراد المختبر', 10000, 9000, '2021-07-10'),
(11, 'ايراد المختبر', 10000, -3000, '2021-07-10'),
(12, 'ايراد المختبر', 20000, 5100400, '2021-09-06');

-- --------------------------------------------------------

--
-- Table structure for table `doctor-income`
--

CREATE TABLE `doctor-income` (
  `id` int(11) NOT NULL,
  `Employee-id` int(45) NOT NULL,
  `Employee-name` varchar(255) NOT NULL,
  `income-value` int(45) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor-income`
--

INSERT INTO `doctor-income` (`id`, `Employee-id`, `Employee-name`, `income-value`, `date`) VALUES
(2, 522, 'عبدالعظيم بانقا الحواري ', 5000, '0222-02-05'),
(4, 522, 'عبدالعظيم بانقا الحواري ', 25000, '2222-06-08'),
(5, 666, 'aya almakki', 5000, '2021-06-16'),
(6, 48648, 'mostafa', 6300, '2021-06-20'),
(7, 48648, 'mostafa', 700, '2021-06-22'),
(8, 48648, 'mostafa', 1000, '2021-06-22'),
(9, 48648, 'mostafa', 1000, '2021-06-22'),
(10, 48648, 'mostafa', 1000, '2021-06-22'),
(12, 48648, 'mostafa', 1000, '2021-06-24'),
(13, 5544, 'محمد صالح', 25000, '2021-06-24');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(45) NOT NULL,
  `full-name` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `salary` varchar(255) NOT NULL,
  `Phone-num` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `jop-type` varchar(255) NOT NULL,
  `id-Emp` int(45) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `full-name`, `birthday`, `salary`, `Phone-num`, `address`, `jop-type`, `id-Emp`, `date`) VALUES
(1, 'محمد علي كلاي', '1991-01-01', '5000', '0905364857', 'الخرطوم بحري ', 'Center Supervisor', 101, '2021-06-04 15:56:41'),
(2, 'عبدالحفيظ القاسم ', '1998-06-05', '30', '0905300004', 'الخرطوم بحري / الدروشاب', 'lab technician', 10223, '2021-06-04 17:40:05'),
(4, 'عبدالعظيم بانقا الحواري ', '0005-02-25', '50', '0905364857', 'خلا العوينات', 'Doctor', 522, '2021-06-11 15:59:15'),
(6, 'aya almakki', '1993-12-23', '50', '0123000001', 'الخرطوم بحري ', 'lab doctor', 666, '2021-06-16 13:42:36'),
(7, 'محمد علي كلاي', '6793-05-08', '25472', '0123000001', 'الخرطوم بحري / الدروشاب', 'lab doctor', 5554, '2021-06-17 19:25:43'),
(8, 'mostafa', '1996-01-02', '10', '025456', 'fthghdg', 'Doctor', 48648, '2021-06-20 17:01:36');

-- --------------------------------------------------------

--
-- Table structure for table `lab-income`
--

CREATE TABLE `lab-income` (
  `id` int(45) NOT NULL,
  `Emp-id1` int(45) NOT NULL,
  `Employee-name1` varchar(255) NOT NULL,
  `income-value1` int(45) NOT NULL,
  `Emp-id2` int(45) NOT NULL,
  `Employee-name2` varchar(11) NOT NULL,
  `income-value2` int(45) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lab-income`
--

INSERT INTO `lab-income` (`id`, `Emp-id1`, `Employee-name1`, `income-value1`, `Emp-id2`, `Employee-name2`, `income-value2`, `date`) VALUES
(2, 666, 'aya almakki', 10000, 10223, 'عبدالحفيظ ا', 6000000, '2021-06-22'),
(4, 999, 'بابكر عوض ', 6000, 10223, 'عبدالحفيظ ا', 3000, '2021-07-10'),
(5, 999, 'بابكر عوض ', 6000, 10223, 'عبدالحفيظ ا', 3000, '2021-07-10'),
(6, 5554, 'محمد علي كلاي', 5094400, 10223, 'عبدالحفيظ ا', 6000, '2021-09-06');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy-income`
--

CREATE TABLE `pharmacy-income` (
  `id` int(11) NOT NULL,
  `income-value` int(45) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pharmacy-income`
--

INSERT INTO `pharmacy-income` (`id`, `income-value`, `date`) VALUES
(1, 5000, '0043-02-06'),
(2, 9000, '0435-06-05'),
(3, 1250, '4135-03-05'),
(4, 50, '2202-02-22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administration`
--
ALTER TABLE `administration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `center-incomes`
--
ALTER TABLE `center-incomes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor-income`
--
ALTER TABLE `doctor-income`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Employee` (`Employee-id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id-Emp` (`id-Emp`);

--
-- Indexes for table `lab-income`
--
ALTER TABLE `lab-income`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pharmacy-income`
--
ALTER TABLE `pharmacy-income`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administration`
--
ALTER TABLE `administration`
  MODIFY `id` int(45) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `center-incomes`
--
ALTER TABLE `center-incomes`
  MODIFY `id` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `doctor-income`
--
ALTER TABLE `doctor-income`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `lab-income`
--
ALTER TABLE `lab-income`
  MODIFY `id` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pharmacy-income`
--
ALTER TABLE `pharmacy-income`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
