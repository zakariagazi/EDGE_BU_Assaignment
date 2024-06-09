-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2024 at 11:19 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edge-1`
--

-- --------------------------------------------------------

--
-- Table structure for table `instractor`
--

CREATE TABLE `instractor` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `salary` decimal(8,2) NOT NULL,
  `joining_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `instractor`
--

INSERT INTO `instractor` (`id`, `name`, `phone`, `email`, `designation`, `salary`, `joining_date`) VALUES
(1, 'Md Samsuddoha', '+8801737-349075', 'sams.csebu@gmail.com', 'Assistant Professor\r\nComputer Science & Engineering\r\nUniversity of Barisal', 500000.00, '2019-06-17'),
(2, 'Dr. Tania Islam', '01059505136', 'tania.bd.09@gmail.com ', 'Assistant Professor\r\nComputer Science & Engineering\r\nUniversity of Barisal', 600000.00, '2019-06-12'),
(7, 'Dr. Rahat Hossain Faisal', '+8801733977761', 'rhfaisal@gmail.com', ' Associate Professor, University of Barishal', 500003.22, '2024-06-11'),
(8, 'Dr. Md Manjur Ahmed', '01851924944 ', 'mmahmed@bu.ac.bd', 'Associate Professor, University of Barishal', 485627.78, '2024-06-25'),
(9, 'Sohely Jahan ', '01317419066', 'sohely.cse@gmail', 'Assistant Professor , University of Barishal', 451263.46, '2024-06-04'),
(10, 'Md Mostafijur Rahman', '8801739097182', 'mostafij.csebu@gmail', ' Assistant Professor, University of Barishal', 785493.25, '2024-06-10'),
(11, 'Md. Rashid Al Asif ', '01734528367', 'rashid.al.asif@gmail', 'Assistant Professor , University of Barishal', 879654.36, '2024-06-18'),
(12, 'Md Mahbub E Noor ', '+8801734094560', 'mahbub0601001@gmail', 'Lecturer,University of Barisal', 125423.33, '2024-06-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `instractor`
--
ALTER TABLE `instractor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `instractor`
--
ALTER TABLE `instractor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
