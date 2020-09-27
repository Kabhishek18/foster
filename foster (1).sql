-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 27, 2020 at 02:29 PM
-- Server version: 10.3.22-MariaDB-1ubuntu1
-- PHP Version: 7.4.3

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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `users_id` int(11) NOT NULL DEFAULT 0,
  `users_name` varchar(255) NOT NULL,
  `users_email` varchar(255) NOT NULL,
  `users_email_verify` enum('0','1') NOT NULL DEFAULT '1',
  `users_image` text NOT NULL,
  `users_password` text NOT NULL,
  `users_token` text DEFAULT NULL,
  `users_type` enum('0','1','2','3') NOT NULL,
  `users_account` enum('0','1') NOT NULL,
  `users_status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`users_id`, `users_name`, `users_email`, `users_email_verify`, `users_image`, `users_password`, `users_token`, `users_type`, `users_account`, `users_status`) VALUES
(1, 'Kumar ', 'kabhishek18@gmail.com', '0', '', 'e10adc3949ba59abbe56e057f20f883e', '4364a9e6-ae39-daec-09cc-d5911b8f7f85', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `batches`
--

CREATE TABLE `batches` (
  `batch_id` int(11) NOT NULL,
  `batch_name` text NOT NULL,
  `batch_token` text NOT NULL,
  `batch_start` date NOT NULL,
  `batch_type` text NOT NULL,
  `batch_end` date NOT NULL,
  `tutor_id` text NOT NULL,
  `user_id` text DEFAULT NULL,
  `batch_description` text NOT NULL,
  `batch_timestart` time NOT NULL,
  `batch_timeend` time NOT NULL,
  `batch_status` enum('0','1') NOT NULL,
  `batch_cancel` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `batches`
--

INSERT INTO `batches` (`batch_id`, `batch_name`, `batch_token`, `batch_start`, `batch_type`, `batch_end`, `tutor_id`, `user_id`, `batch_description`, `batch_timestart`, `batch_timeend`, `batch_status`, `batch_cancel`) VALUES
(2, 'Kumar', '1b704e19-a5e2-dd6f-d139-b10929e170c1', '2020-08-27', 'Demo (45 min free trial)', '2020-08-27', '', '1', '{\"number\":\"7897897465411\",\"email\":\"dsnjkan@asdsadd.asdug\",\"plan\":\"b\",\"join\":\"As soon as possible\",\"message\":\"hbb\"}', '04:00:00', '04:00:00', '0', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_parent_id` int(11) NOT NULL,
  `category_name` text NOT NULL,
  `category_description` text DEFAULT NULL,
  `category_status` enum('0','1') NOT NULL DEFAULT '0',
  `category_created` date NOT NULL,
  `category_modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_parent_id`, `category_name`, `category_description`, `category_status`, `category_created`, `category_modified`) VALUES
(1, 0, 'IELTS General', 'The IELTS General Training test is for those who aim to settle abroad in an English speaking country. This test counts for 60% of the total eligibility criteria required to get permanent residency in such countries.', '0', '2020-08-06', '2020-08-06 14:47:56'),
(2, 0, 'IELTS Academic', 'The IELTS Academic test is for people applying for higher education or professional registration in an English speaking environment.', '0', '2020-08-06', '2020-08-06 14:50:02'),
(3, 0, 'CELPIP', 'Unkown', '0', '2020-08-06', '2020-08-06 14:51:54'),
(4, 0, 'PTE', 'PTE Academic is the world’s leading computer-based test of English for study abroad and immigration.', '0', '2020-08-06', '2020-08-06 14:51:59'),
(16, 0, 'Test', '<p>test</p>\r\n', '0', '2020-08-23', '2020-08-23 06:14:26');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `course_parent_id` int(11) NOT NULL,
  `course_name` text NOT NULL,
  `course_image` text DEFAULT NULL,
  `regular_price` int(11) DEFAULT NULL,
  `sale_price` int(11) NOT NULL,
  `course_type` text NOT NULL,
  `course_hours` text NOT NULL,
  `course_session` text DEFAULT NULL,
  `course_tenure` text DEFAULT NULL,
  `course_timing` text NOT NULL,
  `course_complimentary` text NOT NULL,
  `course_access` text NOT NULL,
  `course_information` text NOT NULL,
  `course_short_desc` text NOT NULL,
  `course_description` text NOT NULL,
  `course_status` enum('0','1') NOT NULL DEFAULT '0',
  `course_created` date NOT NULL,
  `course_modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_parent_id`, `course_name`, `course_image`, `regular_price`, `sale_price`, `course_type`, `course_hours`, `course_session`, `course_tenure`, `course_timing`, `course_complimentary`, `course_access`, `course_information`, `course_short_desc`, `course_description`, `course_status`, `course_created`, `course_modified`) VALUES
(1, 1, 'Universal Program', '', NULL, 7499, 'Classroom / Online Group', '24+', '12', '4-6 weeks', 'Weekdays or Weekends with a fixed schedule – click here for available slots', '3 (Near Exam Date)', '3 months effective joining date', '<p>Classroom/Online program covering all 4 Modules i.e. Listening, Reading, Writing, and Speaking. This program enables participants to gain IELTS structural understanding along with useful strategies &amp; tips to score a higher Band. *1x 1 session is conducted over wide-ranging video calling platforms. * It is highly recommended that you have a broadband connection for uninterrupted live streaming for online learning.</p>\r\n', '<p>Classroom/Online program covering all 4 Modules i.e. Listening, Reading, Writing, and Speaking.</p>\r\n', '<p>Key Takeaways &bull; Band 9 answer structure for the Speaking module and strategies to prolong task response&nbsp;&nbsp; &bull; Appropriate Lexical Resource (vocabulary) along with accurate idioms and phrases usage &bull; Excellent strategies to solve each section of the Listening module to achieve superior band &bull; Section-wise strategies &amp; tips to score greater band in the Reading module &bull; Abundance of practice material for continuous preparation &bull; 1x1 writing evaluation and Speaking assessment/practice &bull; Band 9 answer structure for Writing Task 1 &amp; Task 2 &bull; Sessions availability on weekdays and on weekends &bull; Correct pronunciation of important words &bull; Unlimited mock tests &bull; Personal Attention &bull; Flexible schedule</p>\r\n', '0', '2020-08-22', '2020-08-07 15:31:00'),
(2, 1, 'Universal Program', '', NULL, 10999, 'Online Personal', '24+', '12', '4-6 weeks', 'Flexible', '3 (Near Exam Date)', '3 months effective joining date', 'Classroom/Online program covering all 4 Modules i.e. Listening, Reading, Writing, and Speaking.\r\nThis program enables participants to gain IELTS structural understanding along with useful strategies & tips to score a higher Band.\r\n*1x 1 session is conducted over wide-ranging video calling platforms.\r\n* It is highly recommended that you have a broadband connection for uninterrupted live streaming for online learning.', 'Classroom/Online program covering all 4 Modules i.e. Listening, Reading, Writing, and Speaking.', 'Key Takeaways \r\n    • Band 9 answer structure for the Speaking module and strategies to prolong task response  \r\n    • Appropriate Lexical Resource (vocabulary) along with accurate idioms and phrases usage\r\n    • Excellent strategies to solve each section of the Listening module to achieve superior band\r\n    • Section-wise strategies & tips to score greater band in the Reading module\r\n    • Abundance of practice material for continuous preparation\r\n    • 1x1 writing evaluation and Speaking assessment/practice\r\n    • Band 9 answer structure for Writing Task 1 & Task 2\r\n    • Sessions availability on weekdays and on weekends\r\n    • Correct pronunciation of important words\r\n    • Unlimited mock tests \r\n    • Personal Attention\r\n    • Flexible schedule', '0', '2020-08-07', '2020-08-07 15:31:00'),
(3, 1, 'Supreme Program', '', NULL, 14999, 'Online Personal', '36+', '18', '6-8 weeks', 'Flexible', '4 (Near Exam Date)', '3 months effective joining date', 'Classroom/Online thorough program, covering parts of speech, grammar, and other basic necessities to enable average students to achieve their desired band.*1x 1 session is conducted over wide-ranging video calling platforms.\r\n* It is highly recommended that you have a broadband connection for uninterrupted live streaming.', 'Classroom/Online program covering all 4 Modules i.e. Listening, Reading, Writing, and Speaking.', 'Key Takeaways \r\n    • Band 9 answer structure for the Speaking module and strategies to prolong task response  \r\n    • Appropriate Lexical Resource (vocabulary) along with accurate idioms and phrases usage\r\n    • Excellent strategies to solve each section of the Listening module to achieve superior band\r\n    • Section-wise strategies & tips to score greater band in the Reading module\r\n    • Abundance of practice material for continuous preparation\r\n    • 1x1 writing evaluation and Speaking assessment/practice\r\n    • Band 9 answer structure for Writing Task 1 & Task 2\r\n    • Sessions availability on weekdays and on weekends\r\n    • Correct pronunciation of important words\r\n    • Unlimited mock tests \r\n    • Personal Attention\r\n    • Flexible schedule', '0', '2020-08-07', '2020-08-07 15:31:00'),
(4, 1, 'Supreme Program', '', NULL, 12499, 'Classroom / Online Group', '36+', '18', '6-8 weeks', 'Weekdays or Weekends with a fixed schedule – click here for available slots', '4 (Near Exam Date)', '3 months effective joining date', 'Classroom/Online thorough program, covering parts of speech, grammar, and other basic necessities to enable average students to achieve their desired band.*1x 1 session is conducted over wide-ranging video calling platforms.\r\n* It is highly recommended that you have a broadband connection for uninterrupted live streaming.', 'Classroom/Online program covering all 4 Modules i.e. Listening, Reading, Writing, and Speaking.', 'Key Takeaways \r\n    • Band 9 answer structure for the Speaking module and strategies to prolong task response  \r\n    • Appropriate Lexical Resource (vocabulary) along with accurate idioms and phrases usage\r\n    • Excellent strategies to solve each section of the Listening module to achieve superior band\r\n    • Section-wise strategies & tips to score greater band in the Reading module\r\n    • Abundance of practice material for continuous preparation\r\n    • 1x1 writing evaluation and Speaking assessment/practice\r\n    • Band 9 answer structure for Writing Task 1 & Task 2\r\n    • Sessions availability on weekdays and on weekends\r\n    • Correct pronunciation of important words\r\n    • Unlimited mock tests \r\n    • Personal Attention\r\n    • Flexible schedule', '0', '2020-08-07', '2020-08-07 15:31:00'),
(5, 1, 'Rapid Program', '', NULL, 5499, 'Classroom / Online Group', '12+', '6+', '1-2 weeks', 'Weekdays or Weekends with a fixed schedule – click here for available slots', '2 (Near Exam Date)', '1 month effective joining date (Limited Mock Tests)', 'Classroom/Online thorough program, covering parts of speech, grammar, and other basic necessities to enable average students to achieve their desired band.*1x 1 session is conducted over wide-ranging video calling platforms.\r\n* It is highly recommended that you have a broadband connection for uninterrupted live streaming.', 'Classroom/Online program covering all 4 Modules i.e. Listening, Reading, Writing, and Speaking.', 'Key Takeaways \r\n    • Band 9 answer structure for the Speaking module and strategies to prolong task response  \r\n    • Appropriate Lexical Resource (vocabulary) along with accurate idioms and phrases usage\r\n    • Excellent strategies to solve each section of the Listening module to achieve superior band\r\n    • Section-wise strategies & tips to score greater band in the Reading module\r\n    • Abundance of practice material for continuous preparation\r\n    • 1x1 writing evaluation and Speaking assessment/practice\r\n    • Band 9 answer structure for Writing Task 1 & Task 2\r\n    • Sessions availability on weekdays and on weekends\r\n    • Correct pronunciation of important words\r\n    • Unlimited mock tests \r\n    • Personal Attention\r\n    • Flexible schedule', '0', '2020-08-07', '2020-08-07 15:31:00'),
(6, 1, 'Rapid Program', '', NULL, 5499, 'Online Personal', '12+', '6+', '1-2 weeks', 'Weekdays or Weekends with a fixed schedule – click here for available slots', '2 (Near Exam Date)', '1 month effective joining date (Limited Mock Tests)', 'Classroom/Online thorough program, covering parts of speech, grammar, and other basic necessities to enable average students to achieve their desired band.*1x 1 session is conducted over wide-ranging video calling platforms.\r\n* It is highly recommended that you have a broadband connection for uninterrupted live streaming.', 'Classroom/Online program covering all 4 Modules i.e. Listening, Reading, Writing, and Speaking.', 'Key Takeaways \r\n    • Band 9 answer structure for the Speaking module and strategies to prolong task response  \r\n    • Appropriate Lexical Resource (vocabulary) along with accurate idioms and phrases usage\r\n    • Excellent strategies to solve each section of the Listening module to achieve superior band\r\n    • Section-wise strategies & tips to score greater band in the Reading module\r\n    • Abundance of practice material for continuous preparation\r\n    • 1x1 writing evaluation and Speaking assessment/practice\r\n    • Band 9 answer structure for Writing Task 1 & Task 2\r\n    • Sessions availability on weekdays and on weekends\r\n    • Correct pronunciation of important words\r\n    • Unlimited mock tests \r\n    • Personal Attention\r\n    • Flexible schedule', '0', '2020-08-07', '2020-08-07 15:31:00'),
(7, 2, 'Universal Program', '', NULL, 7499, 'Classroom / Online Group', '24+', '12', '4-6 weeks', 'Weekdays or Weekends with a fixed schedule – click here for available slots', '3 (Near Exam Date)', '3 months effective joining date', 'Classroom/Online program covering all 4 Modules i.e. Listening, Reading, Writing, and Speaking.\r\nThis program enables participants to gain IELTS structural understanding along with useful strategies & tips to score a higher Band.\r\n*1x 1 session is conducted over wide-ranging video calling platforms.\r\n* It is highly recommended that you have a broadband connection for uninterrupted live streaming for online learning.', 'Classroom/Online program covering all 4 Modules i.e. Listening, Reading, Writing, and Speaking.', 'Key Takeaways \r\n    • Band 9 answer structure for the Speaking module and strategies to prolong task response  \r\n    • Appropriate Lexical Resource (vocabulary) along with accurate idioms and phrases usage\r\n    • Excellent strategies to solve each section of the Listening module to achieve superior band\r\n    • Section-wise strategies & tips to score greater band in the Reading module\r\n    • Abundance of practice material for continuous preparation\r\n    • 1x1 writing evaluation and Speaking assessment/practice\r\n    • Band 9 answer structure for Writing Task 1 & Task 2\r\n    • Sessions availability on weekdays and on weekends\r\n    • Correct pronunciation of important words\r\n    • Unlimited mock tests \r\n    • Personal Attention\r\n    • Flexible schedule', '0', '2020-08-07', '2020-08-07 15:31:00'),
(8, 2, 'Universal Program', '', NULL, 10999, 'Online Personal', '24+', '12', '4-6 weeks', 'Flexible', '3 (Near Exam Date)', '3 months effective joining date', 'Classroom/Online program covering all 4 Modules i.e. Listening, Reading, Writing, and Speaking.\r\nThis program enables participants to gain IELTS structural understanding along with useful strategies & tips to score a higher Band.\r\n*1x 1 session is conducted over wide-ranging video calling platforms.\r\n* It is highly recommended that you have a broadband connection for uninterrupted live streaming for online learning.', 'Classroom/Online program covering all 4 Modules i.e. Listening, Reading, Writing, and Speaking.', 'Key Takeaways \r\n    • Band 9 answer structure for the Speaking module and strategies to prolong task response  \r\n    • Appropriate Lexical Resource (vocabulary) along with accurate idioms and phrases usage\r\n    • Excellent strategies to solve each section of the Listening module to achieve superior band\r\n    • Section-wise strategies & tips to score greater band in the Reading module\r\n    • Abundance of practice material for continuous preparation\r\n    • 1x1 writing evaluation and Speaking assessment/practice\r\n    • Band 9 answer structure for Writing Task 1 & Task 2\r\n    • Sessions availability on weekdays and on weekends\r\n    • Correct pronunciation of important words\r\n    • Unlimited mock tests \r\n    • Personal Attention\r\n    • Flexible schedule', '0', '2020-08-07', '2020-08-07 15:31:00'),
(11, 16, 'TEst', NULL, 789, 455, '123', '312', '123', '3123', 'asd', 'asdasdas', 'asd', '<p>asdasd</p>\r\n', '<p>asdasd</p>\r\n', '<p>adsasd</p>\r\n', '0', '2020-09-11', '2020-09-11 12:08:56');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `order_amount` varchar(255) NOT NULL,
  `order_detail` text NOT NULL,
  `order_course` text NOT NULL,
  `order_token` varchar(255) NOT NULL,
  `order_status` enum('0','1') NOT NULL,
  `order_created` datetime NOT NULL,
  `order_modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `student_id`, `order_amount`, `order_detail`, `order_course`, `order_token`, `order_status`, `order_created`, `order_modified`) VALUES
(1, 1, '7499', '{\"fullname\":\"Test\",\"company_name\":\"TEST PVT LTD\",\"country\":\"Saint Helena\",\"street_1\":\"ASi \",\"street_2\":\"adsk\",\"zip\":\"789456123\",\"town\":\"asd\",\"state\":\"asd\",\"phone\":\"213223\",\"email\":\"sad@asd.asd\",\"message\":\"vcghbcvch\"}', '1', '', '0', '2020-09-11 13:27:40', '2020-09-11 07:57:40'),
(2, 1, '7499', '{\"fullname\":\"kumari akriti\",\"company_name\":\"\",\"country\":\"India\",\"street_1\":\"D 212 GANPATI ROAD\",\"street_2\":\"MAHARAJA APARTMENT\",\"zip\":\"100003\",\"town\":\"XYZ\",\"state\":\"ABCDEE\",\"phone\":\"3322565613\",\"email\":\"FDSGFSFFG@GMAIL.COM\",\"message\":\"SHKFDJFHLHEIFH\"}', '1', '', '0', '2020-09-11 13:32:09', '2020-09-11 08:02:09'),
(3, 1, '10999', '{\"fullname\":\"RAGHU RAJAN\",\"company_name\":\"XXXYZ PVT LTD\",\"country\":\"Argentina\",\"street_1\":\"R 420\\/ LIFELINE COLONY\",\"street_2\":\"ANTILA\",\"zip\":\"500152\",\"town\":\"TTTTTT\",\"state\":\"CHGGFHD\",\"phone\":\"1214542412\",\"email\":\"GXGHCCSJG@YAHOO.COM\",\"message\":\"FCVDVFVDFVCUDVFVEU\"}', '8', '', '0', '2020-09-11 13:35:39', '2020-09-11 08:05:39'),
(4, 1, '7499', '{\"fullname\":\"PANKAJ TRIPATHI\",\"company_name\":\"SDGV PVT LTD\",\"country\":\"Austria\",\"street_1\":\"22 SVDHYGGH\",\"street_2\":\"DVDYFEWU\",\"zip\":\"251560\",\"town\":\"EFFEFG\",\"state\":\"EGFGFFG\",\"phone\":\"1515120\",\"email\":\"EWGGGGGWG@OUTLOOK.COM\",\"message\":\"FWDEVFV\"}', '7', '', '0', '2020-09-11 13:37:28', '2020-09-11 08:07:28'),
(5, 1, '7499', '{\"fullname\":\"CKGJFK FJYHFJ\",\"company_name\":\"JFVGKUG GGHGK\",\"country\":\"Bahamas\",\"street_1\":\"JVJHFGKBJB\",\"street_2\":\"BJFFKB,\",\"zip\":\"12132\",\"town\":\"BVJGDCHGC\",\"state\":\"VGHXFVJ\",\"phone\":\"135131313\",\"email\":\"MNJHCDFJGKGK@BBDJHBKB\",\"message\":\"NVHJHCVJHCV\"}', '7', '', '0', '2020-09-11 13:38:36', '2020-09-11 08:08:36'),
(6, 1, '7499', '{\"fullname\":\"SHIVSENA\",\"company_name\":\"MUMBAI APNA H\",\"country\":\"Australia\",\"street_1\":\"002 DFHGTF\",\"street_2\":\"KUCH B\",\"zip\":\"165412\",\"town\":\"GFCSWFFCV\",\"state\":\"DWQVJ\",\"phone\":\"156416584\",\"email\":\"JSDVKBBHV@VDHJVF\",\"message\":\"SVDJVDVK\"}', '7', '', '0', '2020-09-11 13:40:00', '2020-09-11 08:10:00'),
(7, 1, '455', '{\"fullname\":\"Kukbajsdb\",\"company_name\":\"\",\"country\":\"Iceland\",\"street_1\":\"asdas\",\"street_2\":\"asdasd\",\"zip\":\"78989\",\"town\":\"asdasd\",\"state\":\"asdasd\",\"phone\":\"7897897\",\"email\":\"asd@asdasd.asd\",\"message\":\"asd\"}', '11', '', '0', '2020-09-11 17:40:04', '2020-09-11 12:10:04');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `tutor_id` int(11) NOT NULL,
  `review_val` int(11) NOT NULL,
  `review_description` text NOT NULL,
  `date_created` date NOT NULL,
  `date_modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `student_id`, `tutor_id`, `review_val`, `review_description`, `date_created`, `date_modified`) VALUES
(1, 1, 2, 1, 'asd', '2010-09-20', '2020-09-10 17:16:00'),
(2, 1, 1, 5, '', '2010-09-20', '2020-09-10 17:17:53'),
(3, 1, 1, 5, 'asd', '2010-09-20', '2020-09-10 17:18:38'),
(4, 1, 1, 1, 'asdasd', '2010-09-20', '2020-09-10 17:37:49'),
(5, 1, 1, 3, 'asdasd', '2010-09-20', '2020-09-10 17:37:54');

-- --------------------------------------------------------

--
-- Table structure for table `slot`
--

CREATE TABLE `slot` (
  `id` int(11) NOT NULL,
  `sdate_slot` date NOT NULL,
  `eslot_date` date NOT NULL,
  `time_slot` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `users_id` int(11) NOT NULL,
  `users_name` varchar(255) NOT NULL,
  `users_email` varchar(255) NOT NULL,
  `users_email_verify` enum('0','1') NOT NULL DEFAULT '1',
  `users_image` text NOT NULL,
  `users_mobile` text NOT NULL,
  `users_bankaccount` text NOT NULL,
  `users_pancard` text NOT NULL,
  `users_aadhar` text NOT NULL,
  `users_password` text NOT NULL,
  `users_token` text DEFAULT NULL,
  `users_type` enum('0','1','2','3') NOT NULL,
  `users_account` enum('0','1') NOT NULL DEFAULT '1',
  `users_status` enum('0','1') NOT NULL,
  `date_created` date NOT NULL,
  `date_modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutors`
--

INSERT INTO `tutors` (`users_id`, `users_name`, `users_email`, `users_email_verify`, `users_image`, `users_mobile`, `users_bankaccount`, `users_pancard`, `users_aadhar`, `users_password`, `users_token`, `users_type`, `users_account`, `users_status`, `date_created`, `date_modified`) VALUES
(1, 'Abhishek', 'kabhishek18@gmail.com', '0', 'user-0411.jpg', '7053948103', '{\"account_number\":\"789456132132\",\"account_name\":\"Kumar Abhishek\",\"ifsc_code\":\"WES10054\"}', 'Screenshot_from_2020-05-05_17-04-54.png', '', 'e10adc3949ba59abbe56e057f20f883e', 'c5ad13b2-8cff-d75b-ce1f-ef6c0d357ac7', '0', '0', '0', '2020-08-05', '2020-08-10 06:28:00'),
(2, 'Kumar', 'test@gmail.com', '0', 'user-0411.jpg', '7053948103', '{\"account_number\":\"789456132132\",\"account_name\":\"Kumar Abhishek\",\"ifsc_code\":\"WES10054\"}', 'Screenshot_from_2020-05-05_17-04-54.png', '', 'e10adc3949ba59abbe56e057f20f883e', 'c5ad13b2-8cff-d75b-ce1f-ef6c0d357ac7', '0', '0', '0', '2020-08-13', '2020-08-28 06:28:17');

-- --------------------------------------------------------

--
-- Table structure for table `tutors_avail`
--

CREATE TABLE `tutors_avail` (
  `id` int(11) NOT NULL,
  `tutor_id` int(11) NOT NULL,
  `avail_type` enum('0','1') NOT NULL DEFAULT '1',
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutors_avail`
--

INSERT INTO `tutors_avail` (`id`, `tutor_id`, `avail_type`, `start_date`, `end_date`, `start_time`, `end_time`) VALUES
(1, 1, '0', '2020-08-27', '2020-08-30', '01:26:00', '04:26:00'),
(2, 2, '1', '2020-08-27', '2020-08-30', '01:26:00', '04:26:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `users_name` varchar(255) NOT NULL,
  `users_email` varchar(255) NOT NULL,
  `users_email_verify` enum('0','1') NOT NULL DEFAULT '1',
  `users_image` text NOT NULL,
  `users_password` text NOT NULL,
  `users_token` text DEFAULT NULL,
  `users_type` enum('0','1','2','3') NOT NULL,
  `users_account` enum('0','1') NOT NULL,
  `users_status` enum('0','1') NOT NULL,
  `date_created` date NOT NULL,
  `date_modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `users_name`, `users_email`, `users_email_verify`, `users_image`, `users_password`, `users_token`, `users_type`, `users_account`, `users_status`, `date_created`, `date_modified`) VALUES
(1, 'Abhishek', 'kabhishek18@gmail.com', '0', 's', 'e10adc3949ba59abbe56e057f20f883e', 'e1ef5301-1296-82d9-20fe-f746efdfb046', '0', '0', '0', '2020-08-06', '2020-09-17 16:10:48');

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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `batch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `slot`
--
ALTER TABLE `slot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tutors`
--
ALTER TABLE `tutors`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tutors_avail`
--
ALTER TABLE `tutors_avail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
