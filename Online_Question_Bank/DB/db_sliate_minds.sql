-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2022 at 06:27 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sliate_minds`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `aid` int(11) NOT NULL,
  `answer` varchar(100) NOT NULL,
  `qid` int(11) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`aid`, `answer`, `qid`, `status`) VALUES
(1, 'Microsoft Word', 1, 'incorrect'),
(2, 'Linux', 1, 'incorrect'),
(3, 'Windows', 1, 'incorrect'),
(4, 'Trojan horses', 1, 'correct'),
(5, ' Malware', 2, 'correct'),
(6, 'Open Source Software', 2, 'incorrect'),
(7, 'Operating System', 2, 'incorrect'),
(8, 'Application software', 2, 'incorrect'),
(9, 'Word document', 3, 'correct'),
(10, 'Online ads', 3, 'incorrect'),
(11, 'instant messaging', 3, 'incorrect'),
(12, 'Form downloaded software', 3, 'incorrect'),
(13, 'Input control', 4, 'incorrect'),
(14, 'Process Control', 4, 'incorrect'),
(15, 'Output Control', 4, 'incorrect'),
(16, 'Software Control', 4, 'correct'),
(17, 'Can’t Unauthorized access', 5, 'incorrect'),
(18, 'Protects from Viruses ', 5, 'incorrect'),
(19, 'static packet filtering', 5, 'incorrect'),
(20, 'Harmful', 5, 'correct'),
(21, 'The emerging mobile digital platform', 6, 'incorrect'),
(22, 'The growing business use of big data', 6, 'incorrect'),
(23, 'Define a user interface', 6, 'correct'),
(24, 'The growth in cloud computing,', 6, 'incorrect'),
(25, 'sunglass', 7, 'incorrect'),
(26, 'smart watch', 7, 'correct'),
(27, 'LED watch', 7, 'incorrect'),
(28, 'Ring', 7, 'incorrect'),
(29, 'Infrastructure as a service (IAAS)', 8, 'incorrect'),
(30, 'Platform as a service(PAAS) ', 8, 'incorrect'),
(31, 'Server less computing(SC)', 8, 'incorrect'),
(32, 'All Above', 8, 'correct'),
(33, 'CRM', 9, 'correct'),
(34, 'CAD system', 9, 'incorrect'),
(35, 'Inteligent techniques', 9, 'incorrect'),
(36, 'Enterprise system', 9, 'incorrect'),
(37, 'inflexibility', 10, 'incorrect'),
(38, 'Cloud database', 10, 'incorrect'),
(39, 'Datamining', 10, 'correct'),
(40, 'File organization', 10, 'incorrect'),
(41, 'inflexibility', 11, 'incorrect'),
(42, 'Cloud database', 11, 'incorrect'),
(43, 'Datamining', 11, 'correct'),
(44, 'File organization', 11, 'incorrect');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(64) NOT NULL,
  `nic` varchar(12) NOT NULL,
  `userType` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `nic`, `userType`) VALUES
(1, 'admin@sminds', 'psdg$24323334', 'admin-Id', 'admin'),
(11, 'Aviya', '678678', '200040603103', 'student'),
(12, 'upul55', '2345', '200040603123', 'student'),
(13, 'kamal$', '123kamal', '200054603103', 'student'),
(14, 'user', '123kamal', '200045603103', 'student'),
(15, 'sumedaB@ndara', '1234', '200040603122', 'student'),
(16, 'lal', '5555', '200040603122', 'student'),
(17, 'Aviya', '678678', '200040603103', 'student'),
(18, 'Aviya', '678678', '200040603103', 'student'),
(19, 'Sunimal', '4545', '200022603103', 'student'),
(20, 'Aviya', '678678', '200040603103', 'student'),
(21, 'Aviya', '678678', '200040603103', 'student'),
(22, 'Aviya', '678678', '200040603103', 'student'),
(23, 'user22', '44', '200040603102', 'student'),
(24, 'user22', '34', '200040633102', 'student'),
(25, 'user123', '456', '200040603104', 'student'),
(26, 'binuka', '1234', '200040603108', 'student'),
(27, 'binuka', '123', '200040603188', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `log_file`
--

CREATE TABLE `log_file` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nameWithInitials` varchar(50) NOT NULL,
  `userType` varchar(10) NOT NULL,
  `dateAndTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log_file`
--

INSERT INTO `log_file` (`id`, `username`, `nameWithInitials`, `userType`, `dateAndTime`) VALUES
(170, 'KAN/IT/2020/F/4', 'K. G. K. D. Ariyarathna', 'student', '2022-12-05 22:40:05'),
(171, 'KAN/IT/2020/F/4', 'K. G. K. D. Ariyarathna', 'student', '2022-12-05 22:52:10');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `qid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `question` varchar(200) NOT NULL,
  `ans_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`qid`, `sid`, `question`, `ans_id`) VALUES
(1, 1, 'select malware form these', 4),
(2, 1, 'What is worms software?', 5),
(3, 1, 'How worms and viruses do not enter the computer system', 9),
(4, 1, 'What is the mode that does not belong to application control?', 16),
(5, 1, 'Which of the following is not feature of firewalls?', 20),
(6, 1, 'Select the wrong answer about interrelated changes in the technology area?', 23),
(7, 1, 'What is the example for wearable computer?', 26),
(8, 1, 'What are the types of cloud services?', 32),
(9, 1, '_ _ _ _ _ _ _ _ _ _ _ System to help manage their relationships with their customers.', 33),
(10, 1, '_ _ _ _ _ _ _ _is a process of finding potentially useful patterns from huge data sets.', 39),
(11, 1, '_ _ _ _ _ _ _ _is a process of finding potentially useful patterns from huge data sets.', 43);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `sid` int(11) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `semester` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sid`, `sname`, `category`, `course`, `semester`) VALUES
(1, 'MIS', 'none', 'HNDIT', 'semester1');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(10) NOT NULL,
  `nameWithInitials` varchar(100) NOT NULL,
  `fullName` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `gender` text NOT NULL,
  `nic` varchar(12) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `regNo` varchar(50) NOT NULL,
  `center` varchar(50) NOT NULL,
  `course` varchar(100) NOT NULL,
  `image` varchar(500) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(64) NOT NULL,
  `userType` varchar(10) NOT NULL,
  `active_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `nameWithInitials`, `fullName`, `dob`, `gender`, `nic`, `phone`, `email`, `regNo`, `center`, `course`, `image`, `username`, `password`, `userType`, `active_status`) VALUES
(1, 'admin', 'admin', '1994-07-16', 'male', 'admin-Id', '-', 'admin@sminds.com', '-', '-', '-', '-', 'admin@sminds', 'psdg$24323334', 'admin', 1),
(6, 'K.D Ariyarathna', 'Kavishka Dilshan Ariyarahna', '1999-09-24', 'Male', '997856342v', '07756234552', 'abc@gamil.com', 'KAN/IT/2020/F/0004', 'Kandy', 'Information Technology', '', 'KavishDil', '200078Kavish', 'student', 0),
(126, 'W. P. S. Wijegunawardana', 'Shehan Wijegunawardana', '2000-01-01', 'Male', '200080568977', '745898345', 'abc@gmail.com', 'KAN/IT/2020/F/1', 'Kandy', 'Informatin Technology', '', 'KAN/IT/2020/F/1', 'user$Sminds', 'student', 1),
(127, 'G. A. H. Kothmini', 'Hasara Kothmini', '1999-08-02', 'Female', '998767888v', '717898345', 'abc@gmail.com', 'KAN/IT/2020/F/2', 'Kandy', 'Informatin Technology', '', 'KAN/IT/2020/F/2', 'user$Sminds', 'student', 1),
(128, 'V. J. Pilawala', 'Virajini Pilawala', '1999-05-02', 'FeMale', '998767788v', '767898345', 'abc@gmail.com', 'KAN/IT/2020/F/3', 'Kandy', 'Informatin Technology', '', 'KAN/IT/2020/F/3', 'user$Sminds', 'student', 1),
(129, 'K. G. K. D. Ariyarathna', 'Kavishka Ariyarathna', '1999-09-24', 'Male', '998767688v', '727898345', 'abc@gmail.com', 'KAN/IT/2020/F/4', 'Kandy', 'Informatin Technology', '', 'KAN/IT/2020/F/4', 'user$Sminds', 'student', 1),
(131, 'I. G. R. G. Kumari', 'Gayathri Kumari', '1998-08-02', 'Female', '984576768v', '777558345', 'abc@gmail.com', 'KAN/IT/2020/F/6', 'Kandy', 'Informatin Technology', '', 'KAN/IT/2020/F/6', 'user$Sminds', 'student', 1),
(132, 'M. N. I. Ahamed', 'Inas Ahamed', '2000-04-23', 'Male', '200080565477', '777823345', 'abc@gmail.com', 'KAN/IT/2020/F/7', 'Kandy', 'Informatin Technology', '', 'KAN/IT/2020/F/7', 'user$Sminds', 'student', 1),
(133, 'M. N. M. Nasik', 'Mohomed Nasik', '2000-04-01', 'Male', '200080568966', '777898385', 'abc@gmail.com', 'KAN/IT/2020/F/8', 'Kandy', 'Informatin Technology', '', 'KAN/IT/2020/F/8', 'user$Sminds', 'student', 1),
(134, 'M. F. M. Nilshad', 'Mohomed Nilshad', '2000-05-12', 'Male', '200080568937', '777898315', 'abc@gmail.com', 'KAN/IT/2020/F/9', 'Kandy', 'Informatin Technology', '', 'KAN/IT/2020/F/9', 'user$Sminds', 'student', 1),
(135, 'M. R. N. Ahamed', 'Nakeeb Ahamed', '2000-03-12', 'Male', '200080568957', '777898245', 'abc@gmail.com', 'KAN/IT/2020/F/10', 'Kandy', 'Informatin Technology', '', 'KAN/IT/2020/F/10', 'user$Sminds', 'student', 1),
(136, 'W. P. S. Wijegunawardana', 'Shehan Wijegunawardana', '2000-01-01', 'Male', '200080568977', '745898345', 'abc@gmail.com', 'KAN/IT/2020/F/1', 'Kandy', 'Informatin Technology', '', 'KAN/IT/2020/F/1', 'user$Sminds', 'student', 1),
(137, 'G. A. H. Kothmini', 'Hasara Kothmini', '1999-08-02', 'Female', '998767888v', '717898345', 'abc@gmail.com', 'KAN/IT/2020/F/2', 'Kandy', 'Informatin Technology', '', 'KAN/IT/2020/F/2', 'user$Sminds', 'student', 1),
(138, 'V. J. Pilawala', 'Virajini Pilawala', '1999-05-02', 'FeMale', '998767788v', '767898345', 'abc@gmail.com', 'KAN/IT/2020/F/3', 'Kandy', 'Informatin Technology', '', 'KAN/IT/2020/F/3', 'user$Sminds', 'student', 1),
(139, 'K. G. K. D. Ariyarathna', 'Kavishka Ariyarathna', '1999-09-24', 'Male', '998767688v', '727898345', 'abc@gmail.com', 'KAN/IT/2020/F/4', 'Kandy', 'Informatin Technology', '', 'KAN/IT/2020/F/4', 'user$Sminds', 'student', 1),
(140, 'M. H. Zahra', 'Zahara', '2000-08-02', 'Female', '200070568977', '777890345', 'abc@gmail.com', 'KAN/IT/2020/F/5', 'Kandy', 'Informatin Technology', '', 'KAN/IT/2020/F/5', 'user$Sminds', 'student', 1),
(141, 'I. G. R. G. Kumari', 'Gayathri Kumari', '1998-08-02', 'Female', '984576768v', '777558345', 'abc@gmail.com', 'KAN/IT/2020/F/6', 'Kandy', 'Informatin Technology', '', 'KAN/IT/2020/F/6', 'user$Sminds', 'student', 1),
(142, 'M. N. I. Ahamed', 'Inas Ahamed', '2000-04-23', 'Male', '200080565477', '777823345', 'abc@gmail.com', 'KAN/IT/2020/F/7', 'Kandy', 'Informatin Technology', '', 'KAN/IT/2020/F/7', 'user$Sminds', 'student', 1),
(143, 'M. N. M. Nasik', 'Mohomed Nasik', '2000-04-01', 'Male', '200080568966', '777898385', 'abc@gmail.com', 'KAN/IT/2020/F/8', 'Kandy', 'Informatin Technology', '', 'KAN/IT/2020/F/8', 'user$Sminds', 'student', 1),
(144, 'M. F. M. Nilshad', 'Mohomed Nilshad', '2000-05-12', 'Male', '200080568937', '777898315', 'abc@gmail.com', 'KAN/IT/2020/F/9', 'Kandy', 'Informatin Technology', '', 'KAN/IT/2020/F/9', 'user$Sminds', 'student', 1),
(145, 'M. R. N. Ahamed', 'Nakeeb Ahamed', '2000-03-12', 'Male', '200080568957', '777898245', 'abc@gmail.com', 'KAN/IT/2020/F/10', 'Kandy', 'Informatin Technology', '', 'KAN/IT/2020/F/10', 'user$Sminds', 'student', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`,`nic`);

--
-- Indexes for table `log_file`
--
ALTER TABLE `log_file`
  ADD PRIMARY KEY (`id`,`username`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`,`nic`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `log_file`
--
ALTER TABLE `log_file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
