-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2018 at 02:41 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voting_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `aadharcard`
--

CREATE TABLE `aadharcard` (
  `aadharno` bigint(10) NOT NULL,
  `phoneno` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aadharcard`
--

INSERT INTO `aadharcard` (`aadharno`, `phoneno`) VALUES
(1111111111, 9470937667),
(2222222222, 1234567890);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `title` varchar(30) NOT NULL,
  `content` varchar(500) NOT NULL,
  `state` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`title`, `content`, `state`) VALUES
('Voting Rally in Ranchi', 'Qasim Ansari of Nayasarai village on the outskirts of Ranchi received a two-page letter from Prime Minister Narendra Modi on Wednesday afternoon. In his letter, Modi outlined the Union government’s new Ayushman Bharat health scheme', 'jharkhand'),
('New Scheme in MP', 'Government of Madhya Pradesh is committed to ensuring welfare and happiness of every single citizens life in the state. This clearly reflects in its initiatives. Lok Seva Guarantee Act, Ladli Laxmi Yojna, Mukhyamantri Kanyadan Yojna, Mukhyamantri Ki Panchayaten, On-line Samadhan, Beti Bachao Campaign are among the best examples of the state', 'madhya pradesh'),
('Electionns Coming Soon', 'The Bharatiya Janata Party and Jharkhand Mukti Morcha have been the most dominant parties in the state since its formation. Other major parties include Indian National Congress, Jharkhand Vikas Morcha (Prajatantrik), Rashtriya Janata Dal, Communist Party of India, Janata Dal (United) and All Jharkhand Students Union.', 'jharkhand'),
('Re-Elections soon', 'The ruling BJP in Madhya Pradesh might have to face trouble during the elections.There is still a sizeable population of unemployed youth and there is farmers issue, all after the 15 years of BJP in power.And people seem to ready to question CMs Shivraj Singh Chouhans performance.', 'madhya pradesh');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `title` varchar(200) NOT NULL,
  `state` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`title`, `state`) VALUES
('Out of 113 Zila Parishad seats of Jharkhand:out of a total of 354-for which results have been declared, the Congress won 106, the BJP-Akali combine six and independents won one.', 'jharkhand'),
('Elections Results of Rajya Sabha seats of Jharkhand', 'jharkhand'),
('Zila-Panchayat results declared of Madhya Pradesh state of some districts :BJP tops the list with a clear margin', 'madhya pradesh');

-- --------------------------------------------------------

--
-- Table structure for table `upcoming_votes`
--

CREATE TABLE `upcoming_votes` (
  `title` varchar(100) NOT NULL,
  `state` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `upcoming_votes`
--

INSERT INTO `upcoming_votes` (`title`, `state`) VALUES
('Rajya Sabha Elections in jharkhand on 1st October wrt Elections Comission', 'jharkhand'),
('Re-Elections for gaining party majoirity in the Parliament', 'madhya pradesh'),
('Elections for two seats of Jharkhand Rajya Sabha on 6/10/18', 'jharkhand'),
('Madhya Pradesh Panchayat Elections rescheduled to 7/10/18', 'madhya pradesh'),
('Voting for 22 seats of Ranchi district active', 'jharkhand');

-- --------------------------------------------------------

--
-- Table structure for table `voterid`
--

CREATE TABLE `voterid` (
  `voteridno` varchar(20) NOT NULL,
  `state` varchar(15) NOT NULL,
  `city` varchar(15) NOT NULL,
  `aadharno` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `voterid`
--

INSERT INTO `voterid` (`voteridno`, `state`, `city`, `aadharno`) VALUES
('JSR-831011-111', 'jharkhand', 'jamshedpur', 1111111111),
('MP-474015-111', 'madhya pradesh', 'gwalior', 222222222);

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `id` int(11) NOT NULL,
  `party` varchar(100) NOT NULL,
  `state` varchar(40) NOT NULL,
  `city` varchar(40) NOT NULL,
  `candidate` varchar(40) NOT NULL,
  `number` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`id`, `party`, `state`, `city`, `candidate`, `number`) VALUES
(1, 'bjp', 'jharkhand', 'jamshedpur', 'raghubar das', 43),
(1, 'congress', 'jharkhand', 'jamshedpur', 'Banna Gupta', 23),
(1, 'Aap', 'jharkhand', 'jamshedpur', 'Sukhpal khaira', 41);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aadharcard`
--
ALTER TABLE `aadharcard`
  ADD PRIMARY KEY (`aadharno`);

--
-- Indexes for table `voterid`
--
ALTER TABLE `voterid`
  ADD PRIMARY KEY (`voteridno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
