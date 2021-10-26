-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2021 at 09:23 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `questions`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `surnamename` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `vkey` varchar(150) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `name`, `surnamename`, `email`, `vkey`, `status`) VALUES
(1, '', '', 'admin@gamil.com', 'c7b7d00762eb788d6683a57352cfcb60', 0);

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `name` varchar(25) DEFAULT NULL,
  `surname` varchar(25) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `vkey` varchar(150) DEFAULT NULL,
  `pass` varchar(125) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `name`, `surname`, `email`, `vkey`, `pass`, `status`) VALUES
(1, 'benson', 'lubasi', 'thamu@gmail.com', '1004a6c44a6c4013fbf18d4560811b6e', '1234', 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `surname` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `pass` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `surname`, `email`, `pass`) VALUES
(1, 'admin', 'admin', 'admin@mail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(11) NOT NULL,
  `vkey` varchar(150) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `one` text DEFAULT NULL,
  `two` text DEFAULT NULL,
  `three` text DEFAULT NULL,
  `four` text DEFAULT NULL,
  `five` text DEFAULT NULL,
  `score` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `vkey`, `email`, `one`, `two`, `three`, `four`, `five`, `score`) VALUES
(4, '1004a6c44a6c4013fbf18d4560811b6e', NULL, 'A', 'A', 'A', 'C', 'C', 20),
(5, '1004a6c44a6c4013fbf18d4560811b6e', NULL, 'B', 'C', 'C', 'A', 'A', 60),
(6, '1004a6c44a6c4013fbf18d4560811b6e', NULL, 'B', 'C', 'C', 'C', 'C', 80),
(7, '1004a6c44a6c4013fbf18d4560811b6e', NULL, 'B', 'C', 'C', 'C', 'B', 100),
(8, '1004a6c44a6c4013fbf18d4560811b6e', NULL, 'B', 'C', '', '', '', 40),
(9, '1004a6c44a6c4013fbf18d4560811b6e', NULL, 'B', 'C', 'B', 'C', 'A', 60),
(10, '1004a6c44a6c4013fbf18d4560811b6e', NULL, 'B', 'C', 'B', 'C', 'A', 60),
(11, '1004a6c44a6c4013fbf18d4560811b6e', NULL, 'B', 'A', 'C', 'A', 'C', 40);

-- --------------------------------------------------------

--
-- Table structure for table `sample_questions`
--

CREATE TABLE `sample_questions` (
  `id` int(11) NOT NULL,
  `test_id` int(100) NOT NULL,
  `question_number` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `parent_question` longtext COLLATE utf8_unicode_ci NOT NULL,
  `question` longtext COLLATE utf8_unicode_ci NOT NULL,
  `option_a` longtext COLLATE utf8_unicode_ci NOT NULL,
  `option_b` longtext COLLATE utf8_unicode_ci NOT NULL,
  `option_c` longtext COLLATE utf8_unicode_ci NOT NULL,
  `answer` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sample_questions`
--

INSERT INTO `sample_questions` (`id`, `test_id`, `question_number`, `parent_question`, `question`, `option_a`, `option_b`, `option_c`, `answer`) VALUES
(1, 1, '1', '<p>The project was ambitious in its size, complexity, triparty nature, and in its pioneering of the Private Finance Initiative. This difficulty was unavoidable and contributed to the project’s failure.\r\n\r\nHowever, a more thorough estimate of the unknown difficulties and timescales would have enabled the Department of Infrastructure to better prepare for the project and increase its chances of success.\r\n\r\nIn December 1997, XSoft, the company tasked with completing the project on behalf of the Department of Infrastructure, had asked for an extension of the deadline because they could already see that the project would not meet the promised January 1998 deadline and would not be completed until June 1999, at the earliest.\r\n\r\nIf the Department had known from the start the true scale of the project, it is likely they would have chosen another smaller project. Accountants have reported that the delay has already had negative effects on the Profit & Loss sheets for both parties.</p>', '<p>If more care had been put into estimating the difficulties, it is less likely the project would have failed.\r\n</p>', 'TRUE', 'FALSE', 'YOU CANNOT SAY', 'B'),
(2, 1, '2', '<p>The project was ambitious in its size, complexity, triparty nature, and in its pioneering of the Private Finance Initiative. This difficulty was unavoidable and contributed to the project’s failure.\r\n\r\nHowever, a more thorough estimate of the unknown difficulties and timescales would have enabled the Department of Infrastructure to better prepare for the project and increase its chances of success.\r\n\r\nIn December 1997, XSoft, the company tasked with completing the project on behalf of the Department of Infrastructure, had asked for an extension of the deadline because they could already see that the project would not meet the promised January 1998 deadline and would not be completed until June 1999, at the earliest.\r\n\r\nIf the Department had known from the start the true scale of the project, it is likely they would have chosen another smaller project. Accountants have reported that the delay has already had negative effects on the Profit & Loss sheets for both parties.</p>', '<p>XSoft withheld information from the Department regarding how long the project would take.</p>', 'TRUE', 'FALSE', 'YOU CANNOT SAY', 'C'),
(3, 1, '3', '<p>The project was ambitious in its size, complexity, triparty nature, and in its pioneering of the Private Finance Initiative. This difficulty was unavoidable and contributed to the project’s failure.\r\n\r\nHowever, a more thorough estimate of the unknown difficulties and timescales would have enabled the Department of Infrastructure to better prepare for the project and increase its chances of success.\r\n\r\nIn December 1997, XSoft, the company tasked with completing the project on behalf of the Department of Infrastructure, had asked for an extension of the deadline because they could already see that the project would not meet the promised January 1998 deadline and would not be completed until June 1999, at the earliest.\r\n\r\nIf the Department had known from the start the true scale of the project, it is likely they would have chosen another smaller project. Accountants have reported that the delay has already had negative effects on the Profit & Loss sheets for both parties.</p>', '<p>The Department of Infrastructure\'s profits were affected by the project\'s delay.</p>', 'TRUE', 'FALSE', 'YOU CANNOT SAY', 'C'),
(4, 1, '4', '<p>Ever since the gun’s invention it has been changing the world in many different ways. Many of the developments in gun design have been brought about by man’s desire to protect himself, and the challenge of inventing bigger and more accurate weapons.\r\n\r\nEach time there has been a major innovation in the development of the gun, there has been a profound effect on the world. The gun helped in the exploration of the world, it has also helped in the development of society as we know it.</p>', '<p>The gun was invented because the human race needs to protect themselves.</p>', 'TRUE', 'FALSE', 'YOU CANNOT SAY', 'C'),
(5, 1, '5', '<p>Ever since the gun’s invention it has been changing the world in many different ways. Many of the developments in gun design have been brought about by man’s desire to protect himself, and the challenge of inventing bigger and more accurate weapons.\r\n\r\nEach time there has been a major innovation in the development of the gun, there has been a profound effect on the world. The gun helped in the exploration of the world, it has also helped in the development of society as we know it.</p>', '<p>Guns are the reason our society is the way it is today.</p>', 'TRUE', 'FALSE', 'YOU CANNOT SAY', 'B');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sample_questions`
--
ALTER TABLE `sample_questions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sample_questions`
--
ALTER TABLE `sample_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
