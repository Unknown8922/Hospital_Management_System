-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2023 at 09:42 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medical_appointment`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `full_name`) VALUES
('admin', '1234', ''),
('admin2', '9876', 'billy marsh'),
('admin3', 'viewer', 'Creed Bratton');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `patient_email` varchar(255) NOT NULL,
  `doctor_speciality` varchar(255) NOT NULL,
  `doctor_name` varchar(255) NOT NULL,
  `appdate` varchar(255) NOT NULL,
  `apptime` time NOT NULL,
  `symptoms` varchar(255) NOT NULL,
  `date_registered` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `patient_email`, `doctor_speciality`, `doctor_name`, `appdate`, `apptime`, `symptoms`, `date_registered`) VALUES
(17, '0', 'Dentist', 'Dr Magdy Thelad', '2019-05-31', '11:27:00', 'dizy', '2019-05-28 09:27:48'),
(19, '0', 'Dentist', 'Dr Abdurrahman Maihula', '2023-02-17', '12:49:00', 'SDHDSHJ', '2023-02-11 19:50:01'),
(24, '0', 'Dentist', 'Dr Abdurrahman Maihula ', '2023-04-25', '16:20:00', 'Homw', '2023-04-19 16:21:12'),
(26, '0', 'Dentist', 'Dr Santhini John', '2023-04-24', '21:27:00', 'walk', '2023-04-24 19:27:48'),
(35, '0', 'Dentist', 'Dr Abdurrahman Maihula ', '2023-05-12', '15:43:00', 'sans', '2023-05-03 13:39:59'),
(37, '0', 'Dentist', 'Dr Santhini John', '2023-05-18', '15:00:00', 'sans', '2023-05-03 13:56:49'),
(38, '0', 'Cardiology', 'Dr Abdurrahman Maihula ', '2023-05-24', '16:08:00', 'mo', '2023-05-03 14:04:28'),
(39, '', 'Dentist', 'Dr Santhini John', '2023-05-16', '20:07:00', 'lacerations', '2023-05-03 14:07:38'),
(41, 'craig@gmail.com', 'Accidents', 'Dr Santhini John', '2023-05-24', '20:26:00', 'swollen gums', '2023-05-03 14:26:25'),
(43, '', 'Dermatology', 'Dr Joshua Park', '2023-05-22', '18:34:00', 'rosaca', '2023-05-03 16:30:17'),
(44, 'waleedmaihula@gmail.com', 'Dentist', 'Dr Santhini John', '2023-05-25', '22:09:00', 'fever', '2023-05-04 20:06:01'),
(45, 'craig@gmail.com', 'Cardiology', 'Dr Magdy Thelad', '2023-05-22', '07:35:00', 'sprain', '2023-05-05 05:32:16'),
(46, 'craig@gmail.com', 'Accidents', 'Dr Abdurrahman Maihula ', '2023-05-15', '20:57:00', 'Abdominal Pain', '2023-05-05 18:54:48'),
(47, 'craig@gmail.com', 'Dentist', 'Dr Abdurrahman Maihula ', '2023-05-17', '21:06:00', 'teeth hurt', '2023-05-05 19:04:43'),
(49, 'omar@gmail.com', 'Surgery', 'Dr Kyle Broflovski', '2023-05-10', '09:30:00', 'need appendix surgery', '2023-05-07 07:26:31'),
(50, 'craig@gmail.com', 'Cardiology', 'Dr Abdurrahman Maihula ', '2023-05-19', '15:31:00', 'fatigue', '2023-05-07 20:28:36'),
(51, 'sonu@gmail.com', 'Dentist', 'Dr Magdy Thelad', '2023-05-18', '16:44:00', 'burn', '2023-05-07 21:44:37'),
(52, 'sonu@gmail.com', 'Dermatology', 'Dr Joshua Park', '2023-06-01', '17:47:00', 'acne', '2023-05-07 21:47:21'),
(53, 'omar@gmail.com', 'Cardiology', 'Dr Abdurrahman Maihula ', '2023-05-18', '17:59:00', 'feels sick', '2023-05-08 16:00:38');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `speciality` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `profile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `fullname`, `speciality`, `email`, `phone_number`, `profile`, `password`, `image`) VALUES
(1, 'Dr Abdurrahman Maihula ', 'Cardiology', 'waleedmaihula@gmail.com', 563037724, 'A specialized doctor with 10 years of experience in the medical industry.', '123456', 'images/pi_image1_19959598.png'),
(2, 'Dr Santhini John', 'Dentist', 'snt@yahoo.com', 23455677, '10 years of experience', '123456', 'images/Dr-Santhini-John.jpg'),
(3, 'Dr Magdy Thelad', 'Accidents', 'ss@gmail.com', 9712233, '20 Years of experience ', '1234', 'images/mag.jpg'),
(4, 'Dr Joshua Park', 'Dermatology', 'joshua@gmail.com', 2309239, '1 Year of experience', 'helloworld', 'images/confident-young-doctor-posing_1459-5943.avif'),
(5, 'Dr Kyle Broflovski', 'Surgery', 'kyle@gmail.com', 3483942, '3 Years of surgical experience', 'surgerys', 'images/kyle.jpg'),
(6, 'Dr Edmund Burns', 'Surgery', 'edmund@gmail.com', 34839492, '6 years of surgical experience ', 'surgery1', 'images/african-male-doctor-happy-tablet-computer-34481166.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `drug`
--

CREATE TABLE `drug` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `barcode` int(11) NOT NULL,
  `insured` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `Registered_By` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drug`
--

INSERT INTO `drug` (`id`, `name`, `barcode`, `insured`, `status`, `price`, `quantity`, `Registered_By`, `date`) VALUES
(11, 'Xanax', 94953, 'Yes', 'Available', 1000, 20, 'Dr Magdy Thelad', '2023-05-07'),
(12, 'Lofexidine', 45352, 'No', 'unAvailable', 190, 123, 'Sonu Krishnan', '2023-05-07'),
(13, 'Tramadol', 3482, 'No', 'Available', 190, 100, 'Dr Edmund Burns', '2023-05-08');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `patient_email` varchar(255) NOT NULL,
  `drug_name` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `patient_name` varchar(255) NOT NULL,
  `order_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `patient_email`, `drug_name`, `quantity`, `address`, `patient_name`, `order_date`) VALUES
(1, '', 'BB', 77, 'FF', 'EE', '2019-05-08'),
(2, '', 'GHB', 556, 'RFGTHYJ', 'RAK234', '2019-05-16'),
(3, '', 'Ttt', 22, 'Ffff', 'RAK234', '2019-05-16'),
(4, '', 'Vitamin C', 20, 'RAK', 'RAK234', '2019-05-17'),
(5, '', 'panadol', 50, 'RAK', 'RAK567', '2019-05-26'),
(7, '', 'NNN', 30, 'NNN', 'RAK234', '2019-05-27'),
(8, '', 'vitamin', 50, 'Dubai', 'RAK234', '2019-05-28'),
(9, '', 'panadol', 80, 'RAK MALL', 'RAK234', '2019-05-28'),
(10, '', 'BBBB', 22, 'DD', 'RAK234', '2020-05-31'),
(11, '', 'VITAMIN C', 20, 'RAK', 'ww', '2023-04-18'),
(12, '', 'VITAMIN', 3, 'jjj', 'Maihula', '2023-04-24'),
(13, '', 'AMALAR', 3, 'RAK', 'Maihula', '2023-04-24'),
(14, '', 'Vitamin e', 79, 'hij', 'ijo', '2023-05-03'),
(15, '', 'Vitamin d3', 23, 'qusais', 'Craig', '2023-05-03'),
(16, '', 'tynol', 23, 'qusais ', 'Craig Brook', '2023-05-03'),
(17, '', '', 10, 'RAK', '', '2023-05-05'),
(18, '', '', 56, 'rak', '', '2023-05-05'),
(19, '', '', 23, 'RAK', '', '2023-05-05'),
(20, 'craig@gmail.com', 'Adderall', 12, 'Ajman', 'Craig Brook', '0000-00-00'),
(21, 'craig@gmail.com', 'Beclometasone inhalers', 12, 'Dubai', 'Craig Brook', '2023-05-09'),
(22, 'craig@gmail.com', 'Pantoprazole', 10, 'Dubai', 'Craig Brook', '2023-05-17'),
(23, 'craig@gmail.com', 'Amitriptyline.', 23, 'Dubai', 'Craig Brook', '2023-05-18'),
(24, 'omar@gmail.com', 'Zubsolv', 90, 'RAK ', 'Mohammad Omar', '2023-05-18');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `RAK_no` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `RAK_no`, `fullname`, `phone_number`, `email`, `address`, `gender`) VALUES
(1, 'RAK123', 'Musa Nuhu', 2147483647, 'aam@gmail.com', 'Rak', 'Male'),
(6, 'RAK234', 'Aliyu Hamisu', 223344, 'aas@gmail.com', 'KD', 'Male'),
(7, 'RAK567', 'Ibrahim Salis', 223344, 'ib3@gmail.com', 'JOS', 'Male'),
(8, 'RAK789', 'Craig Brook', 23892, 'craig@gmail.com', 'random street', 'male '),
(9, 'RAK112', 'Mohammad Zaid', 934032323, 'zaid@gmail.com', 'sharjah', 'Male'),
(10, 'RAK2345', 'Mohammad Omar', 3482934, 'omar@gmail.com', 'RAK', 'Male'),
(11, 'RAK110', 'Robin Rodriguez', 3482943, 'robin@gmail.com', 'Dubai', 'Female'),
(12, 'RAK786', 'Iza Caitlyn', 342435, 'iza@gmail.com', 'Sharjah', 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacist`
--

CREATE TABLE `pharmacist` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pharmacist`
--

INSERT INTO `pharmacist` (`id`, `fullname`, `phone_number`, `email`, `password`) VALUES
(1, 'Aisha Salisu', 234998822, 'aas@yahoo.com', '1234'),
(2, 'Halima Alliyu', 22334455, 'ahh@gmail.com', '1234'),
(3, 'Ahmad Khairi', 563680, 'ghu@gmail.com', '1234'),
(4, 'Sonu Krishna', 23902031, 'sonu@gmail.com', 'medicines'),
(5, 'Stan Marsh', 45943459, 'stan@gmail.com', 'hello23'),
(6, 'Jenny Sutton', 3492349, 'jenny@gmail.com', 'pharmacy');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(255) NOT NULL,
  `patient_email` varchar(255) NOT NULL,
  `doctor_name` varchar(255) NOT NULL,
  `diagnosis` varchar(255) NOT NULL,
  `psyc_status` varchar(255) NOT NULL,
  `chronic_disease` varchar(255) NOT NULL,
  `medications` varchar(255) NOT NULL,
  `advice` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `patient_email`, `doctor_name`, `diagnosis`, `psyc_status`, `chronic_disease`, `medications`, `advice`, `date`) VALUES
(1, '0', 'Dr Abdurrahman Maihula', 'Frequent Eating', 'Cooperative', 'None', 'Panadol, DOSAGE 100ml', 'Sleep Properly', '2019-05-08'),
(2, '0', 'Dr Magdy Thelad', 'Diabetis', 'Cooperative', 'None', 'palmol', 'Take proper diet', '2019-05-28'),
(3, '0', 'Dr Magdy Thelad', 'Cancer', 'Cooperative', 'None', 'Vitamin', 'work properly', '2019-05-28'),
(4, '0', 'Dr Abdurrahman Maihula ', 'yy', 'good', 'no', 'vitamin', 'sleep well', '2023-04-18'),
(5, 'craig@gmail.com', 'Dr Abdurrahman Maihula ', 'cancer', 'positive', 'no', 'Vitamin and amalar', 'Please sleep at least 6 hours day and night', '2023-04-24'),
(7, '', '', 'Bruises', 'uncooperative', 'chronic fever', 'tynol', 'take medicines not more than 5 times', '2023-05-04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `patient_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `patient_name`) VALUES
(3, 'RAK234', '81dc9bdb52d04dc20036dbd8313ed055', 'aas@gmail.com', 'Aliyu Hamisu'),
(4, 'RAK567', '81dc9bdb52d04dc20036dbd8313ed055', 'ib3@gmail.com', 'Ibrahim Salis'),
(6, 'RAK123', '81dc9bdb52d04dc20036dbd8313ed055', 'aam@gmail.com', 'Aliyu Hamisu'),
(9, 'world12', 'hello', 'craig@gmail.com', 'Craig Brook'),
(10, 'pandas23', 'patient1', 'omar@gmail.com', 'Mohammad Omar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drug`
--
ALTER TABLE `drug`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pat_no` (`RAK_no`);

--
-- Indexes for table `pharmacist`
--
ALTER TABLE `pharmacist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `drug`
--
ALTER TABLE `drug`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pharmacist`
--
ALTER TABLE `pharmacist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
