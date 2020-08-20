-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 21, 2020 at 12:28 AM
-- Server version: 8.0.21-0ubuntu0.20.04.4
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foster`
--

-- --------------------------------------------------------

--
-- Table structure for table `batches`
--

CREATE TABLE `batches` (
  `batch_id` int NOT NULL,
  `batch_name` text COLLATE utf8mb4_general_ci NOT NULL,
  `batch_token` text COLLATE utf8mb4_general_ci NOT NULL,
  `batch_start` date NOT NULL,
  `batch_end` date NOT NULL,
  `tutor_id` text COLLATE utf8mb4_general_ci NOT NULL,
  `user_id` text COLLATE utf8mb4_general_ci NOT NULL,
  `batch_description` text COLLATE utf8mb4_general_ci NOT NULL,
  `batch_timestart` time NOT NULL,
  `batch_timeend` time NOT NULL,
  `batch_status` enum('0','1') COLLATE utf8mb4_general_ci NOT NULL,
  `batch_state` enum('0','1','2','3') COLLATE utf8mb4_general_ci NOT NULL,
  `batch_cancel` enum('0','1','2','3') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `batches`
--

INSERT INTO `batches` (`batch_id`, `batch_name`, `batch_token`, `batch_start`, `batch_end`, `tutor_id`, `user_id`, `batch_description`, `batch_timestart`, `batch_timeend`, `batch_status`, `batch_state`, `batch_cancel`) VALUES
(1, 'dsdas', 'd4b7fdc9-8092-a582-50fc-c36f8eb02e6e', '2020-08-20', '2020-08-20', '', '1', '{\"email\":\"789123\",\"plan\":\"asd\",\"join\":\"As soon as possible\",\"message\":\"sad\"}', '01:00:00', '01:00:00', '0', '0', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int NOT NULL,
  `category_parent_id` int NOT NULL,
  `category_name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `category_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `category_status` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '0',
  `category_created` date NOT NULL,
  `category_modified` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_parent_id`, `category_name`, `category_description`, `category_status`, `category_created`, `category_modified`) VALUES
(1, 0, 'IELTS General', 'The IELTS General Training test is for those who aim to settle abroad in an English speaking country. This test counts for 60% of the total eligibility criteria required to get permanent residency in such countries.', '0', '2020-08-06', '2020-08-06 14:47:56'),
(2, 0, 'IELTS Academic', 'The IELTS Academic test is for people applying for higher education or professional registration in an English speaking environment.', '0', '2020-08-06', '2020-08-06 14:50:02'),
(3, 0, 'CELPIP', 'Unkown', '0', '2020-08-06', '2020-08-06 14:51:54'),
(4, 0, 'PTE', 'PTE Academic is the world’s leading computer-based test of English for study abroad and immigration.', '0', '2020-08-06', '2020-08-06 14:51:59');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int NOT NULL,
  `course_parent_id` int NOT NULL,
  `course_name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `course_image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `regular_price` int DEFAULT NULL,
  `sale_price` int NOT NULL,
  `course_type` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `course_hours` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `course_session` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `course_tenure` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `course_timing` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `course_complimentary` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `course_access` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `course_information` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `course_short_desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `course_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `course_status` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '0',
  `course_created` date NOT NULL,
  `course_modified` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_parent_id`, `course_name`, `course_image`, `regular_price`, `sale_price`, `course_type`, `course_hours`, `course_session`, `course_tenure`, `course_timing`, `course_complimentary`, `course_access`, `course_information`, `course_short_desc`, `course_description`, `course_status`, `course_created`, `course_modified`) VALUES
(1, 1, 'Universal Program', '', NULL, 7499, 'Classroom / Online Group', '24+', '12', '4-6 weeks', 'Weekdays or Weekends with a fixed schedule – click here for available slots', '3 (Near Exam Date)', '3 months effective joining date', 'Classroom/Online program covering all 4 Modules i.e. Listening, Reading, Writing, and Speaking.\r\nThis program enables participants to gain IELTS structural understanding along with useful strategies & tips to score a higher Band.\r\n*1x 1 session is conducted over wide-ranging video calling platforms.\r\n* It is highly recommended that you have a broadband connection for uninterrupted live streaming for online learning.', 'Classroom/Online program covering all 4 Modules i.e. Listening, Reading, Writing, and Speaking.', 'Key Takeaways \r\n    • Band 9 answer structure for the Speaking module and strategies to prolong task response  \r\n    • Appropriate Lexical Resource (vocabulary) along with accurate idioms and phrases usage\r\n    • Excellent strategies to solve each section of the Listening module to achieve superior band\r\n    • Section-wise strategies & tips to score greater band in the Reading module\r\n    • Abundance of practice material for continuous preparation\r\n    • 1x1 writing evaluation and Speaking assessment/practice\r\n    • Band 9 answer structure for Writing Task 1 & Task 2\r\n    • Sessions availability on weekdays and on weekends\r\n    • Correct pronunciation of important words\r\n    • Unlimited mock tests \r\n    • Personal Attention\r\n    • Flexible schedule', '0', '2020-08-07', '2020-08-07 15:31:00'),
(2, 1, 'Universal Program', '', NULL, 10999, 'Online Personal', '24+', '12', '4-6 weeks', 'Flexible', '3 (Near Exam Date)', '3 months effective joining date', 'Classroom/Online program covering all 4 Modules i.e. Listening, Reading, Writing, and Speaking.\r\nThis program enables participants to gain IELTS structural understanding along with useful strategies & tips to score a higher Band.\r\n*1x 1 session is conducted over wide-ranging video calling platforms.\r\n* It is highly recommended that you have a broadband connection for uninterrupted live streaming for online learning.', 'Classroom/Online program covering all 4 Modules i.e. Listening, Reading, Writing, and Speaking.', 'Key Takeaways \r\n    • Band 9 answer structure for the Speaking module and strategies to prolong task response  \r\n    • Appropriate Lexical Resource (vocabulary) along with accurate idioms and phrases usage\r\n    • Excellent strategies to solve each section of the Listening module to achieve superior band\r\n    • Section-wise strategies & tips to score greater band in the Reading module\r\n    • Abundance of practice material for continuous preparation\r\n    • 1x1 writing evaluation and Speaking assessment/practice\r\n    • Band 9 answer structure for Writing Task 1 & Task 2\r\n    • Sessions availability on weekdays and on weekends\r\n    • Correct pronunciation of important words\r\n    • Unlimited mock tests \r\n    • Personal Attention\r\n    • Flexible schedule', '0', '2020-08-07', '2020-08-07 15:31:00'),
(3, 1, 'Supreme Program', '', NULL, 14999, 'Online Personal', '36+', '18', '6-8 weeks', 'Flexible', '4 (Near Exam Date)', '3 months effective joining date', 'Classroom/Online thorough program, covering parts of speech, grammar, and other basic necessities to enable average students to achieve their desired band.*1x 1 session is conducted over wide-ranging video calling platforms.\r\n* It is highly recommended that you have a broadband connection for uninterrupted live streaming.', 'Classroom/Online program covering all 4 Modules i.e. Listening, Reading, Writing, and Speaking.', 'Key Takeaways \r\n    • Band 9 answer structure for the Speaking module and strategies to prolong task response  \r\n    • Appropriate Lexical Resource (vocabulary) along with accurate idioms and phrases usage\r\n    • Excellent strategies to solve each section of the Listening module to achieve superior band\r\n    • Section-wise strategies & tips to score greater band in the Reading module\r\n    • Abundance of practice material for continuous preparation\r\n    • 1x1 writing evaluation and Speaking assessment/practice\r\n    • Band 9 answer structure for Writing Task 1 & Task 2\r\n    • Sessions availability on weekdays and on weekends\r\n    • Correct pronunciation of important words\r\n    • Unlimited mock tests \r\n    • Personal Attention\r\n    • Flexible schedule', '0', '2020-08-07', '2020-08-07 15:31:00'),
(4, 1, 'Supreme Program', '', NULL, 12499, 'Classroom / Online Group', '36+', '18', '6-8 weeks', 'Weekdays or Weekends with a fixed schedule – click here for available slots', '4 (Near Exam Date)', '3 months effective joining date', 'Classroom/Online thorough program, covering parts of speech, grammar, and other basic necessities to enable average students to achieve their desired band.*1x 1 session is conducted over wide-ranging video calling platforms.\r\n* It is highly recommended that you have a broadband connection for uninterrupted live streaming.', 'Classroom/Online program covering all 4 Modules i.e. Listening, Reading, Writing, and Speaking.', 'Key Takeaways \r\n    • Band 9 answer structure for the Speaking module and strategies to prolong task response  \r\n    • Appropriate Lexical Resource (vocabulary) along with accurate idioms and phrases usage\r\n    • Excellent strategies to solve each section of the Listening module to achieve superior band\r\n    • Section-wise strategies & tips to score greater band in the Reading module\r\n    • Abundance of practice material for continuous preparation\r\n    • 1x1 writing evaluation and Speaking assessment/practice\r\n    • Band 9 answer structure for Writing Task 1 & Task 2\r\n    • Sessions availability on weekdays and on weekends\r\n    • Correct pronunciation of important words\r\n    • Unlimited mock tests \r\n    • Personal Attention\r\n    • Flexible schedule', '0', '2020-08-07', '2020-08-07 15:31:00'),
(5, 1, 'Rapid Program', '', NULL, 5499, 'Classroom / Online Group', '12+', '6+', '1-2 weeks', 'Weekdays or Weekends with a fixed schedule – click here for available slots', '2 (Near Exam Date)', '1 month effective joining date (Limited Mock Tests)', 'Classroom/Online thorough program, covering parts of speech, grammar, and other basic necessities to enable average students to achieve their desired band.*1x 1 session is conducted over wide-ranging video calling platforms.\r\n* It is highly recommended that you have a broadband connection for uninterrupted live streaming.', 'Classroom/Online program covering all 4 Modules i.e. Listening, Reading, Writing, and Speaking.', 'Key Takeaways \r\n    • Band 9 answer structure for the Speaking module and strategies to prolong task response  \r\n    • Appropriate Lexical Resource (vocabulary) along with accurate idioms and phrases usage\r\n    • Excellent strategies to solve each section of the Listening module to achieve superior band\r\n    • Section-wise strategies & tips to score greater band in the Reading module\r\n    • Abundance of practice material for continuous preparation\r\n    • 1x1 writing evaluation and Speaking assessment/practice\r\n    • Band 9 answer structure for Writing Task 1 & Task 2\r\n    • Sessions availability on weekdays and on weekends\r\n    • Correct pronunciation of important words\r\n    • Unlimited mock tests \r\n    • Personal Attention\r\n    • Flexible schedule', '0', '2020-08-07', '2020-08-07 15:31:00'),
(6, 1, 'Rapid Program', '', NULL, 5499, 'Online Personal', '12+', '6+', '1-2 weeks', 'Weekdays or Weekends with a fixed schedule – click here for available slots', '2 (Near Exam Date)', '1 month effective joining date (Limited Mock Tests)', 'Classroom/Online thorough program, covering parts of speech, grammar, and other basic necessities to enable average students to achieve their desired band.*1x 1 session is conducted over wide-ranging video calling platforms.\r\n* It is highly recommended that you have a broadband connection for uninterrupted live streaming.', 'Classroom/Online program covering all 4 Modules i.e. Listening, Reading, Writing, and Speaking.', 'Key Takeaways \r\n    • Band 9 answer structure for the Speaking module and strategies to prolong task response  \r\n    • Appropriate Lexical Resource (vocabulary) along with accurate idioms and phrases usage\r\n    • Excellent strategies to solve each section of the Listening module to achieve superior band\r\n    • Section-wise strategies & tips to score greater band in the Reading module\r\n    • Abundance of practice material for continuous preparation\r\n    • 1x1 writing evaluation and Speaking assessment/practice\r\n    • Band 9 answer structure for Writing Task 1 & Task 2\r\n    • Sessions availability on weekdays and on weekends\r\n    • Correct pronunciation of important words\r\n    • Unlimited mock tests \r\n    • Personal Attention\r\n    • Flexible schedule', '0', '2020-08-07', '2020-08-07 15:31:00'),
(7, 2, 'Universal Program', '', NULL, 7499, 'Classroom / Online Group', '24+', '12', '4-6 weeks', 'Weekdays or Weekends with a fixed schedule – click here for available slots', '3 (Near Exam Date)', '3 months effective joining date', 'Classroom/Online program covering all 4 Modules i.e. Listening, Reading, Writing, and Speaking.\r\nThis program enables participants to gain IELTS structural understanding along with useful strategies & tips to score a higher Band.\r\n*1x 1 session is conducted over wide-ranging video calling platforms.\r\n* It is highly recommended that you have a broadband connection for uninterrupted live streaming for online learning.', 'Classroom/Online program covering all 4 Modules i.e. Listening, Reading, Writing, and Speaking.', 'Key Takeaways \r\n    • Band 9 answer structure for the Speaking module and strategies to prolong task response  \r\n    • Appropriate Lexical Resource (vocabulary) along with accurate idioms and phrases usage\r\n    • Excellent strategies to solve each section of the Listening module to achieve superior band\r\n    • Section-wise strategies & tips to score greater band in the Reading module\r\n    • Abundance of practice material for continuous preparation\r\n    • 1x1 writing evaluation and Speaking assessment/practice\r\n    • Band 9 answer structure for Writing Task 1 & Task 2\r\n    • Sessions availability on weekdays and on weekends\r\n    • Correct pronunciation of important words\r\n    • Unlimited mock tests \r\n    • Personal Attention\r\n    • Flexible schedule', '0', '2020-08-07', '2020-08-07 15:31:00'),
(8, 2, 'Universal Program', '', NULL, 10999, 'Online Personal', '24+', '12', '4-6 weeks', 'Flexible', '3 (Near Exam Date)', '3 months effective joining date', 'Classroom/Online program covering all 4 Modules i.e. Listening, Reading, Writing, and Speaking.\r\nThis program enables participants to gain IELTS structural understanding along with useful strategies & tips to score a higher Band.\r\n*1x 1 session is conducted over wide-ranging video calling platforms.\r\n* It is highly recommended that you have a broadband connection for uninterrupted live streaming for online learning.', 'Classroom/Online program covering all 4 Modules i.e. Listening, Reading, Writing, and Speaking.', 'Key Takeaways \r\n    • Band 9 answer structure for the Speaking module and strategies to prolong task response  \r\n    • Appropriate Lexical Resource (vocabulary) along with accurate idioms and phrases usage\r\n    • Excellent strategies to solve each section of the Listening module to achieve superior band\r\n    • Section-wise strategies & tips to score greater band in the Reading module\r\n    • Abundance of practice material for continuous preparation\r\n    • 1x1 writing evaluation and Speaking assessment/practice\r\n    • Band 9 answer structure for Writing Task 1 & Task 2\r\n    • Sessions availability on weekdays and on weekends\r\n    • Correct pronunciation of important words\r\n    • Unlimited mock tests \r\n    • Personal Attention\r\n    • Flexible schedule', '0', '2020-08-07', '2020-08-07 15:31:00');

-- --------------------------------------------------------

--
-- Table structure for table `slot`
--

CREATE TABLE `slot` (
  `id` int NOT NULL,
  `sdate_slot` date NOT NULL,
  `eslot_date` date NOT NULL,
  `time_slot` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slot`
--

INSERT INTO `slot` (`id`, `sdate_slot`, `eslot_date`, `time_slot`) VALUES
(1, '2020-08-20', '2020-08-31', '[\"1:00\",\"2:00\",\"3:00\",\"4:00\",\"5:00\",\"6:00\",\"7:00\"]');

-- --------------------------------------------------------

--
-- Table structure for table `tutors`
--

CREATE TABLE `tutors` (
  `users_id` int NOT NULL,
  `users_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `users_email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `users_email_verify` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '1',
  `users_image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `users_mobile` text COLLATE utf8mb4_general_ci NOT NULL,
  `users_bankaccount` text COLLATE utf8mb4_general_ci NOT NULL,
  `users_pancard` text COLLATE utf8mb4_general_ci NOT NULL,
  `users_aadhar` text COLLATE utf8mb4_general_ci NOT NULL,
  `users_password` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `users_token` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `users_type` enum('0','1','2','3') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `users_account` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '1',
  `users_status` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tutors`
--

INSERT INTO `tutors` (`users_id`, `users_name`, `users_email`, `users_email_verify`, `users_image`, `users_mobile`, `users_bankaccount`, `users_pancard`, `users_aadhar`, `users_password`, `users_token`, `users_type`, `users_account`, `users_status`) VALUES
(1, 'Abhishek', 'kabhishek18@gmail.com', '0', 'user-0411.jpg', '7053948103', '{\"account_number\":\"789456132132\",\"account_name\":\"Kumar Abhishek\",\"ifsc_code\":\"WES10054\"}', 'Screenshot_from_2020-05-05_17-04-54.png', '', 'e10adc3949ba59abbe56e057f20f883e', 'c5ad13b2-8cff-d75b-ce1f-ef6c0d357ac7', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tutors_avail`
--

CREATE TABLE `tutors_avail` (
  `id` int NOT NULL,
  `tutor_id` int NOT NULL,
  `avail_type` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '1',
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tutors_avail`
--

INSERT INTO `tutors_avail` (`id`, `tutor_id`, `avail_type`, `start_date`, `end_date`, `start_time`, `end_time`) VALUES
(1, 1, '1', '2020-08-27', '2020-08-30', '01:26:00', '04:26:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int NOT NULL,
  `users_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `users_email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `users_email_verify` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '1',
  `users_image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `users_password` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `users_token` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `users_type` enum('0','1','2','3') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `users_account` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `users_status` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `users_name`, `users_email`, `users_email_verify`, `users_image`, `users_password`, `users_token`, `users_type`, `users_account`, `users_status`) VALUES
(1, 'Kumar ', 'kabhishek18@gmail.com', '0', '', 'e10adc3949ba59abbe56e057f20f883e', '4364a9e6-ae39-daec-09cc-d5911b8f7f85', '0', '0', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `batches`
--
ALTER TABLE `batches`
  ADD PRIMARY KEY (`batch_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `slot`
--
ALTER TABLE `slot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutors`
--
ALTER TABLE `tutors`
  ADD PRIMARY KEY (`users_id`);

--
-- Indexes for table `tutors_avail`
--
ALTER TABLE `tutors_avail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `batches`
--
ALTER TABLE `batches`
  MODIFY `batch_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `slot`
--
ALTER TABLE `slot`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tutors`
--
ALTER TABLE `tutors`
  MODIFY `users_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tutors_avail`
--
ALTER TABLE `tutors_avail`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
