-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2022 at 04:36 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `phone` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`, `email`, `image`, `phone`) VALUES
(5, 'asmaa', '12345', 'asmaa@gmail.com', 'asmaapic.jpg', 1553641865),
(6, 'CEO manager', '2', 'CEO@outlook.com', 'manager1pic.jpg', 1236598416);

-- --------------------------------------------------------

--
-- Table structure for table `customer_service`
--

CREATE TABLE `customer_service` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` bigint(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` enum('female','male','','') NOT NULL,
  `age` int(11) NOT NULL,
  `acc_number` bigint(11) NOT NULL,
  `nid` int(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_service`
--

INSERT INTO `customer_service` (`id`, `name`, `email`, `phone`, `image`, `password`, `gender`, `age`, `acc_number`, `nid`) VALUES
(1, 'Ahmed mohamed', 'ahmed25@gmail.com', 1553641865, 'ahmedphoto.jpg', '111', 'male', 25, 234579856, 2142373844),
(3, 'salma aly', 'salma.aly@gmail.com', 126762325, 'salmaphoto.jpg', '333', 'female', 25, 25394579855, 397237312);

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `therapist_id` int(11) NOT NULL,
  `feedback` text NOT NULL,
  `rate` float NOT NULL,
  `reservations_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `patient_id`, `therapist_id`, `feedback`, `rate`, `reservations_id`) VALUES
(28, 25, 47, 'very good dr', 5, 1),
(29, 49, 46, 'شكرا للدكتور على سعة صدره', 5, 1),
(30, 35, 35, 'دكتور محترم ومستمع جيد', 5, 1),
(112, 33, 36, 'دكتور ممتاز كالعاده كل مره بروح له فيها برجع احسن كتير دكتور محترم ومستمع جيد والعياده علطول زحمه عنده ماشاءالله شكرا دكتور محمد ربنا يبارك لك', 5, 1),
(115, 34, 45, 'دكتو فعلا عبقري وشاطر جدا بصراحه', 5, 1),
(117, 49, 33, 'كويس جدا', 5, 1),
(118, 49, 46, 'دكتور بيسمع الشخص ويحتويه', 5, 1),
(119, 49, 35, 'دكتور ممتاز جدا وصبور جدا', 5, 1),
(120, 33, 35, 'دكتور فاهم شغله', 5, 4),
(121, 45, 42, 'دكتور فاهم ومتجاوب حتى بعد مواعيد الكشف بيرد على المريض', 5, 1),
(122, 33, 40, 'دكتور كويس ومستمع كويس', 5, 4),
(123, 46, 34, 'دكتور ممتاز وشاطر وعنده طوله بال ومتفاهم جدا ', 5, 1),
(124, 37, 52, 'professional , well educated and so decent', 5, 1),
(125, 25, 45, 'دكتور ممتاز ', 5, 4),
(126, 39, 36, 'الدكتور كويس جدا والجلسة فرقت معايا', 5, 4),
(127, 44, 35, 'He is very gentle and caring doctor', 5, 4),
(128, 34, 40, 'أنسان محترم وخلوق', 5, 1),
(129, 50, 49, 'دكتور كويس وبيتكلم مع المرضي ومريح ', 5, 1),
(130, 47, 51, 'الدكتور لطيف جدا', 5, 4),
(131, 42, 49, 'دكتور ممتاز جدا وصابور', 5, 1),
(132, 49, 33, 'دكتوره ذوق جدا وبالها طويل وبتتعامل', 5, 1),
(133, 35, 33, 'دكتورة ممتازة وكويسه وذوق جدا', 5, 1),
(134, 33, 47, 'دكتورة ربنا يبارك فيها ومحترمه', 5, 1),
(135, 41, 37, 'دكتوره ممتازه ومقابلتها ممتازه وانسانه محترمه وبشوشه', 5, 1),
(136, 43, 41, 'دكتوره محترمه اوي', 5, 1),
(137, 25, 41, 'دكتوره كويسه ومعاملتها حلوه', 5, 1),
(138, 48, 39, 'ربنا يبارك في الدكتور ممتازه', 5, 1),
(139, 36, 50, 'دكتور جميله جدا و تعاملها كويس بتعالج الناس كده بكلامها', 5, 4),
(140, 34, 48, ' الدكتوره كويسه جدا و التعامل بتاعها كويس جدا و بتتعامل بشكل طبيعي ', 5, 1),
(141, 39, 37, 'دكتوره شاطره و 10 علي 10', 5, 1),
(142, 42, 48, 'دكتورة محترمه جدا وذوق جدا فى الكلام ومجتهده جدا فى شغلها ', 5, 4),
(143, 44, 38, 'دكتورة كويسه جدا وسلسه', 5, 1),
(144, 51, 43, 'دكتوره مريحه ف الكلام', 5, 4),
(145, 47, 44, 'دكتوره شاطره جدا', 5, 1),
(146, 38, 43, 'الدكتوره مشاء الله عليها وعلى طريقه استقبلها كلمها يريح المريض ربنا يزيدها من فضله وعلمه ', 5, 1),
(147, 48, 48, 'دكتوره محترمه جدا ربنا يجازيها كل خير', 5, 1),
(148, 25, 38, 'محترمة جدا بتسمع المريض بهدوء واستقبالها ممتاز', 5, 1),
(149, 51, 43, 'شكرا جدا ليكي دكتورة ممتازة جدا بارك الله فيكي', 5, 4),
(150, 33, 47, 'دكتورة ممتازة', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `mental_test`
--

CREATE TABLE `mental_test` (
  `id` int(11) NOT NULL,
  `test_report` varchar(300) NOT NULL,
  `test_result` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mental_test`
--

INSERT INTO `mental_test` (`id`, `test_report`, `test_result`) VALUES
(1, 'good ', '10');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` bigint(30) NOT NULL,
  `age` int(30) NOT NULL,
  `mental_test_id` int(11) NOT NULL,
  `gender` enum('Male','Female','','') NOT NULL,
  `nid` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `name`, `email`, `password`, `phone`, `age`, `mental_test_id`, `gender`, `nid`) VALUES
(25, 'malak', 'malak@gmail.com', '1234', 12345678, 20, 1, 'Female', 22606760331271),
(33, 'Asmaa Abdel-Mohsen', 'asmaa.abdelmohsen25@outlook.com', '22322', 1555541865, 25, 1, 'Female', 1236520597236953),
(34, 'maryam aly', 'maryam22@gmail.com', '203985', 12365985166, 16, 1, 'Female', 28506260101817),
(35, 'Ahmed Mohamed aly', 'ahmedaly30@skype.com', 'ahmed2010', 1212583212, 33, 1, 'Male', 28506220101877),
(36, 'manar kamel hussin', 'manark.22@gmail.com', 'manar2362000', 11626372223, 24, 1, 'Female', 26502260801817),
(37, 'Mahmoud bakr Mohamed', 'mahmoud.bakr10@outlook.com', '309014', 11256281658, 35, 1, 'Male', 23606260131811),
(38, 'Saly mustafa', 'salym20@skype.com', '479503360', 15626772250, 40, 1, 'Female', 25606760331889),
(39, 'Mohamed Ezzat', 'mohamedezzat50@gmail.com', 'mohamed2036842', 1258769852, 32, 1, 'Male', 23652059723691),
(40, 'Yasser hegazy', 'yasserh10@gmail.com', '26415', 1558769888, 29, 1, 'Male', 27552029723699),
(41, 'Aya Amgd', 'aya77@outloook.com', '215219926', 1158779822, 25, 1, 'Male', 25651159723683),
(42, 'nour ziad', 'nourziad.10@gmail.com', '36971032652', 1155569844, 25, 1, 'Female', 27651159723635),
(43, 'Hesham Abdel-fatah', 'hesham92@outlook.com', '262626', 1558769432, 30, 1, 'Male', 29252059103691),
(44, 'nasser el-maghraby', 'nasser34@skype.com', 'nasser@150559', 1158760052, 36, 1, 'Male', 28753041723622),
(45, 'Gamal sobhy', 'gamal.sobhy@outlook.com', 'g1546', 1228023578, 32, 1, 'Male', 21653027723761),
(46, 'Hana Abdelrahman Kamel', 'hana36@gmail.com', '2626', 1158033277, 33, 1, 'Female', 23351056723681),
(47, 'salma ezz hossam', 'salma12@gmail.com', '123456789', 1144577148, 24, 1, 'Female', 27622058823622),
(48, 'mariam mahmoud hassan', 'mariammahmoud176@gmail.com', '3652210', 116545356, 19, 1, 'Female', 23622029783621),
(49, 'Ahmed hamdy', 'ahmed11@gmail.com', '12456523', 1528519528, 23, 1, 'Male', 30005972369155),
(50, 'Said mahdy ', 'said.mahdy@gmail.com', '3624155', 117713522, 27, 1, 'Male', 23652059723693),
(51, 'Ramy yahya', 'tamy22@gmail.com', '12165', 1253985234, 20, 1, 'Male', 25126760331813),
(62, 'pola salem', 'pola@gmail.com', '59562', 1543641866, 36, 1, 'Male', 28506260101877),
(63, 'yossef aly', 'yossef@gmail.com', '262153', 1236598422, 23, 1, 'Male', 26532260801811),
(64, 'amira fathy', 'amira597@gmail.com', '411632', 1258762852, 20, 1, 'Female', 23642059723620),
(65, 'mohamed aly gamal', 'mo12@gmail.com', '2626666', 1558769814, 29, 1, 'Male', 24552029777691),
(66, 'marco gerges', 'marco.7@gmail.com', '262626', 1188279821, 25, 1, 'Male', 25651151723613),
(67, 'ahmed gamal', 'ahmed@gmail.com', '26515', 1255469873, 35, 1, 'Male', 2764115974635),
(68, 'menna ayman', 'mena@gmail', '261526', 1558769443, 30, 1, 'Female', 23606262131833),
(69, 'Amin hazem', 'amin@gmail.com', '362515', 1158710077, 33, 1, 'Male', 28713041723642),
(70, 'lily kamel ', 'lili33@gmail.com\r\n', '262626', 1228123573, 33, 1, 'Female', 25653027723712),
(71, 'nada ahmed', 'nada99@gmail.com', '2659596', 1152033224, 40, 1, 'Female', 23351056723653);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `payment_value` float NOT NULL,
  `session_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `therapist_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `payment_value`, `session_date`, `therapist_id`, `patient_id`) VALUES
(1, 450, '2022-06-26 23:12:29', 37, 25),
(2, 250, '2022-06-26 23:12:01', 43, 70),
(3, 150, '2022-06-26 23:14:12', 34, 45),
(4, 800, '2022-06-26 23:16:13', 40, 68),
(5, 800, '2022-06-26 23:17:10', 41, 49),
(6, 600, '2022-06-26 23:17:43', 49, 71),
(7, 300, '2022-06-26 23:18:10', 36, 63),
(8, 300, '2022-06-26 23:18:57', 35, 50),
(9, 500, '2022-06-26 23:21:30', 33, 34),
(10, 500, '2022-06-26 23:23:05', 52, 47),
(11, 150, '2022-06-26 23:23:05', 39, 62),
(16, 150, '2022-06-26 23:26:15', 39, 69),
(17, 250, '2022-06-26 23:28:15', 45, 33),
(18, 250, '2022-06-26 23:28:15', 44, 36),
(19, 600, '2022-06-26 23:30:06', 51, 39),
(20, 600, '2022-06-26 23:30:06', 49, 41),
(21, 800, '2022-06-26 23:32:08', 40, 42),
(22, 800, '2022-06-26 23:32:08', 41, 44),
(23, 450, '2022-06-26 23:32:44', 38, 45),
(24, 450, '2022-06-26 23:33:05', 37, 51),
(25, 500, '2022-06-26 23:35:23', 33, 64),
(26, 500, '2022-06-26 23:35:23', 52, 66);

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `therapist_id` int(11) NOT NULL,
  `session_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `from` time(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `payment_id`, `patient_id`, `therapist_id`, `session_date`, `from`) VALUES
(1, 1, 25, 47, '2022-06-26 22:29:09', '00:00:00.00000'),
(4, 1, 25, 33, '2022-06-08 22:29:17', '36:29:17.00000'),
(5, 2, 70, 43, '2022-06-27 01:40:40', '00:00:00.00000'),
(6, 3, 45, 34, '2022-06-27 01:42:12', '00:00:00.00000'),
(7, 4, 68, 40, '2022-06-27 01:42:57', '00:00:00.00000'),
(8, 5, 49, 40, '2022-06-27 01:42:57', '00:00:00.00000'),
(9, 6, 71, 49, '2022-06-27 01:43:41', '00:00:00.00000'),
(10, 7, 63, 36, '2022-06-27 01:43:41', '00:00:00.00000'),
(11, 8, 50, 35, '2022-06-27 01:44:28', '00:00:00.00000'),
(12, 9, 43, 33, '2022-06-27 01:44:28', '00:00:00.00000'),
(13, 10, 47, 52, '2022-06-27 01:46:05', '00:00:00.00000'),
(14, 11, 62, 39, '2022-06-27 01:46:05', '00:00:00.00000'),
(15, 16, 69, 39, '2022-06-27 01:49:17', '00:00:00.00000'),
(16, 17, 33, 45, '2022-06-27 01:49:17', '00:00:00.00000'),
(17, 18, 36, 44, '2022-06-27 02:03:31', '00:00:00.00000'),
(18, 19, 39, 51, '2022-06-27 02:03:31', '00:00:00.00000'),
(19, 21, 41, 49, '2022-06-27 02:04:39', '00:00:00.00000'),
(20, 22, 44, 41, '2022-06-27 02:04:39', '00:00:00.00000'),
(21, 24, 51, 37, '2022-06-27 02:05:48', '00:00:00.00000'),
(22, 25, 64, 33, '2022-06-27 02:05:48', '00:00:00.00000'),
(23, 26, 66, 52, '2022-06-27 02:06:06', '00:00:00.00000');

-- --------------------------------------------------------

--
-- Table structure for table `therapist`
--

CREATE TABLE `therapist` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` bigint(30) NOT NULL,
  `acc_number` bigint(30) NOT NULL,
  `image` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `about` text NOT NULL,
  `price` float NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `gender` enum('Male','Female','','') NOT NULL,
  `nid` int(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `therapist`
--

INSERT INTO `therapist` (`id`, `name`, `email`, `phone`, `acc_number`, `image`, `age`, `password`, `about`, `price`, `created_at`, `gender`, `nid`) VALUES
(33, 'Dr. Dalia Adel ElSamni', 'dalia1@gmail.com', 1143482009, 3260824792840427, '', 50, '221354', '-Main focus : Anxiety Disorders, Personality disorders\r\n\r\n-Master of Neurology and Psychiatry,\r\nAlexandria University\r\nAug 2013 – Feb 2016\r\n\r\n-Bachelor of Medicine and Surgery (MBBcH)\r\nAlexandria University\r\nAug 1998 – Apr 2005', 500, '2022-06-26 00:49:46', 'Female', 0),
(34, 'Dr. Mahmoud Rashed', 'mahmoud88@gmail.com', 1183663792, 1369163891276352, '', 30, '55555', 'Main focus : Posttraumatic Stress Disorder, Addiction.\r\n\r\nA researcher in Master Program\r\nAlexandria University\r\nFeb 2019 – Present\r\n\r\nProfessional Diploma\r\nAlexandria University\r\nSep 2011 – Jun 2012\r\n\r\nBachelor of Arts and Education\r\nAlexandria University\r\nSep 2006 – May 2010', 150, '2022-06-26 00:50:10', 'Male', 0),
(35, 'Dr. Hesham Hegazy', 'hesham55@gmail.com', 1228454762, 1653786286229736, '', 45, '725372', 'Main focus : Mood Disorders, Schizophrenia.\r\n\r\nDoctorate Degree in Psychiatry\r\nAl - Azhar University\r\nSep 2000 – Apr 2004\r\n\r\nMaster degree in Neuropsychiatry\r\nAl - Azhar University\r\nApr 1996 – Nov 1999\r\n\r\nBachelor degree of Medicine and Surgery\r\nfaculty of Medicine, Al - Azhar university\r\nSep 1989 – Dec 1995', 300, '2022-06-26 00:50:25', 'Male', 0),
(36, 'Dr. Mohamed Hesham', 'mohamed76@gmail.com', 1162382889, 35172635929100182, '', 30, '00000', 'Main focus : Couple therapy, Anger management.\r\n\r\nMRCPSYCH Paper A\r\nRoyal College of psychiatry\r\nJan 2020 – Jul 2020\r\n\r\nMaster Degree in Neuropsychiatry Medicine\r\nAl Azhar University\r\nJan 2016 – Nov 2018\r\n\r\nBachelor of Medicine and Surgery\r\nAl Azhar University\r\nOct 2007 – Dec 2013', 300, '2022-06-26 00:51:05', 'Male', 0),
(37, 'Dr. Heba Saleh', 'hebasaleh@gmail.com', 1000724552, 3728015562183409, '', 45, '3290', 'Main focus : Anxiety Disorders, Posttraumatic Stress Disorder.\r\n\r\nDiploma in Psychology\r\nCairo University\r\nSep 2014 – Oct 2015\r\n\r\nBachelor\'s in Psychology\r\nHelwan University\r\nSep 2004 – Oct 2007', 450, '2022-06-26 00:50:43', 'Female', 0),
(38, 'Dr. Nermin lewiz', 'nermin@gmail.com', 1224371736, 3625372917001273, '', 29, '55555', 'Main focus : Addiction, Sexual disorders.\r\n\r\nMaster of Arts, Department of Psychology\r\nAlexandria University\r\nJan 2012 – Jan 2015\r\n\r\nBachelor of Arts in Psychology\r\nAlexandria University\r\nOct 2004 – May 2008', 450, '2022-06-26 00:51:26', 'Female', 0),
(39, 'Dr. Mariam Mahmoud', 'mariam@gmail.com', 1135424614, 2534143153433172, '', 29, '', 'Main focus : Anxiety Disorders, Adolescence problems.\r\n\r\nDiploma in Human Resources\r\nBridge Business College, Australia\r\nAug 2017 – Oct 2018\r\n\r\nMaster of education (counselling)\r\nUniversity of Granada, Spain\r\nJul 2014 – May 2015\r\n\r\nBachelor degree in psychology\r\nUniversity de Salamanca, Spain\r\nApr 2009 – Aug 2014\r\n\r\n\r\n', 150, '2022-06-26 02:21:10', 'Female', 0),
(40, 'Dr. Hussein Haj Ahmad', 'hussien55@gmail.com', 1223162415, 2547153615316271, '', 39, 'mmmm', 'Main focus : Depression, Anxiety Disorders.\r\n\r\nDoctorate degree of philosophy in education (Mental health Psychological counseling)\r\nAin Shams University\r\nJan 2016 – Sep 2018\r\n\r\nMaster\'s degree department of Educational research (Mental health specialty)\r\nInstitute of Arab research and studies\r\nOct 2014 – Nov 2015\r\n\r\nBachelor of arts department of psychology counselling\r\nUniversity of Aleppo\r\nDec 2008 – Dec 2011', 800, '2022-06-26 00:53:41', 'Male', 0),
(41, 'Dr. Laura Jimenez', 'laura@gmail.com', 1135424614, 2534143153433172, '', 27, '2222', 'Main focus : Anxiety Disorders, Adolescence problems.\r\n\r\nDiploma in Human Resources\r\nBridge Business College, Australia\r\nAug 2017 – Oct 2018\r\n\r\nMaster of education (counselling)\r\nUniversity of Granada, Spain\r\nJul 2014 – May 2015\r\n\r\nBachelor degree in psychology\r\nUniversity de Salamanca, Spain\r\nApr 2009 – Aug 2014\r\n\r\n\r\n', 800, '2022-06-26 00:54:22', 'Female', 0),
(42, 'Dr. Hussein Haj Ahmad', 'hussien55@gmail.com', 1223162415, 2547153615316271, '', 39, 'mmmm', 'Main focus : Depression, Anxiety Disorders.\r\n\r\nDoctorate degree of philosophy in education (Mental health Psychological counseling)\r\nAin Shams University\r\nJan 2016 – Sep 2018\r\n\r\nMaster\'s degree department of Educational research (Mental health specialty)\r\nInstitute of Arab research and studies\r\nOct 2014 – Nov 2015\r\n\r\nBachelor of arts department of psychology counselling\r\nUniversity of Aleppo\r\nDec 2008 – Dec 2011', 800, '2022-06-26 00:54:05', 'Male', 0),
(43, 'Dr Omnia Ahmed Mohamed', 'omnia4@gmail.com', 15573158427, 5355742256855213, '', 29, '45321', 'Main focus : Depression, Adolescence problems.\r\n\r\nDiploma\r\nDiploma in Clinical Psychology\r\nJan 2018 – Jan 2018\r\n\r\nBachelor of Psychology\r\nFaculty of Arts - Department of Psychology\r\nJan 2006 – Jan 2009', 250, '2022-06-26 00:27:40', 'Female', 0),
(44, 'Dr Sahar Daoud', 'sahar55@gmail.com', 1265853423, 6426653426685326, '', 45, '64742', 'Main focus : Learning Disorders, Autistic Spectrum Disorders.\r\n\r\nThe Degree Ph.D. in childhood studies\r\nAin Shams University\r\nSep 2011 – Mar 2014\r\n\r\nMaster degree in pediatric,\r\nFaculty of Medicine, Ain Shams University\r\nAug 2004 – Nov 2006\r\n\r\nBachelor ‘s degree in medicine and surgery\r\nFaculty of Medicine, Mansoura University\r\nSep 1995 – Nov 2001', 250, '2022-06-26 00:40:46', 'Female', 0),
(45, 'Dr. Mina Aziz', 'mina22@gmail.com', 1264374322, 7544353242422579, '', 35, 'hgfst5', 'Main focus : Depression, Anxiety Disorders.\r\n\r\nMRCPSYCH Paper A\r\nRoyal College of psychiatry\r\nJan 2020 – Jul 2020\r\n\r\nMaster Degree in Neuropsychiatry Medicine\r\nAl Azhar University\r\nJan 2016 – Nov 2018\r\n\r\nBachelor of Medicine and Surgery\r\nAl Azhar University\r\nOct 2007 – Dec 2013\r\n\r\n', 250, '2022-06-26 00:52:15', 'Male', 0),
(46, 'Dr. Ahmed Mohamed Mansour Hashish', 'ahmed@gmail.com', 1000443643, 6574242453643286, '', 39, '8537', 'Main focus : Anxiety Disorders, Posttraumatic Stress Disorder.\r\n\r\nBachelor of arts,Psychology Department\r\nMenofia University\r\n– Jan 2011', 250, '2022-06-26 00:51:59', 'Male', 0),
(47, 'Dr. Hanaa Niazii', 'hanaa@gmail.com', 1179697689, 6537466475865864, '', 45, 'bfshtvm', 'Main focus : Depression, Anxiety Disorders\r\n\r\n\r\nBachelor in International Studies\r\nDamascus University\r\n– Jan 2013', 250, '2022-06-26 00:51:43', 'Female', 0),
(48, 'Dr. Merry Akiki', 'merry@gmail.com', 1057555776, 5863234646546679, '', 34, 'yhid35g', 'Main focus : Anxiety Disorders, Sexual disorders.\r\n\r\nCertified Hypnotherapist\r\nLebanese Syndicate Of Hypnotherapists\r\nAug 2020 – Present\r\n\r\nCertified Hypnotherapist\r\nNational Guild Of Hypnosis USA\r\nAug 2020 – Present\r\n\r\nHypnotherapist\r\nHypnotherapy Training International London\r\nMay 2017 – Present', 600, '2022-06-26 00:48:56', 'Female', 0),
(49, 'Dr. Walid Talat', 'walid@yahoo.com', 1223646557, 2534647546457536, '', 47, 'hdbtul', 'Main focus : Mood Disorders, Psychosis.\r\n\r\nBA of medicine and surgery\r\nCairo University\r\nJan 1992 – Jan 1999', 600, '2022-06-26 00:48:56', 'Male', 0),
(50, 'Dr. Mayada Essam Eldin', 'mayada@yahoo.com', 1045757668, 4657687974657858, '', 50, '264768', 'Main focus : Depression, Anxiety Disorders.\r\n\r\nMasters of Neuropsychiatry\r\nFaculty of Medicine, Ain Shams University\r\nSep 2015 – Nov 2017\r\n\r\nBachelor of Medicine & Surgery\r\nFaculty of Medicine, Cairo University\r\nSep 2003 – Dec 2010', 600, '2022-06-26 00:59:59', 'Female', 0),
(51, 'Dr. Wassim ashraf', 'wassim@gmail.com', 1197462863, 2921737439474971, '', 49, '3937197', 'Main focus : Separation Anxiety Disorder, Generalized Anxiety Disorder, and Social Phobia, Depression.\r\n\r\nClinical Psychology Diploma\r\nAlexandria University\r\nFeb 2017 – Feb 2019\r\n\r\nBachelor of Arts in Psychology\r\nAlexandria University\r\nSep 2013 – Jul 2016', 600, '2022-06-26 01:00:46', 'Male', 0),
(52, 'Dr. Michel Sfeir', 'michel@gmail.com', 1224244121, 3846239374692742, '', 32, '38166', 'Main focus : Depression, Posttraumatic Stress Disorder.\r\n\r\nMasters in Clinical Psychology\r\nUniversity of Lausanne\r\nJan 2020 – Present\r\n\r\nBachelor of Arts in Clinical Psychology\r\nHoly Spirit University of Kaslik\r\nAug 2017 – Dec 2019', 500, '2022-06-26 13:18:43', 'Male', 0);

-- --------------------------------------------------------

--
-- Table structure for table `work_dates`
--

CREATE TABLE `work_dates` (
  `id` int(11) NOT NULL,
  `day` enum('Saturday','Sunday','Monday','Tuesday','Wednesday','Thursday','Friday') NOT NULL,
  `therapist_id` int(11) NOT NULL,
  `from` time NOT NULL,
  `to` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `work_dates`
--

INSERT INTO `work_dates` (`id`, `day`, `therapist_id`, `from`, `to`) VALUES
(31, 'Tuesday', 33, '08:00:00', '09:00:00'),
(32, 'Sunday', 33, '01:00:00', '02:00:00'),
(33, 'Sunday', 33, '06:30:00', '07:30:00'),
(34, 'Tuesday', 33, '03:30:00', '04:30:00'),
(35, 'Monday', 33, '10:00:00', '11:00:00'),
(36, 'Saturday', 51, '09:00:00', '10:00:00'),
(37, 'Tuesday', 51, '01:00:00', '02:00:00'),
(38, 'Wednesday', 51, '03:30:00', '04:30:00'),
(39, 'Wednesday', 51, '12:00:00', '01:00:00'),
(40, 'Friday', 51, '06:00:00', '07:00:00'),
(41, 'Saturday', 50, '02:00:00', '03:00:00'),
(42, 'Saturday', 50, '03:30:00', '04:30:00'),
(43, 'Thursday', 50, '06:00:00', '07:00:00'),
(44, 'Thursday', 50, '08:00:00', '09:00:00'),
(45, 'Friday', 50, '02:00:00', '03:00:00'),
(46, 'Sunday', 49, '01:00:00', '02:00:00'),
(47, 'Sunday', 49, '04:30:00', '05:30:00'),
(48, 'Wednesday', 49, '06:30:00', '07:30:00'),
(49, 'Wednesday', 49, '09:30:00', '10:30:00'),
(50, 'Thursday', 49, '01:30:00', '02:30:00'),
(51, 'Saturday', 48, '02:00:00', '03:00:00'),
(52, 'Saturday', 48, '12:00:00', '01:00:00'),
(53, 'Monday', 48, '11:30:00', '12:30:00'),
(54, 'Monday', 48, '02:30:00', '03:30:00'),
(55, 'Monday', 48, '07:00:00', '08:00:00'),
(60, 'Thursday', 46, '05:00:00', '06:00:00'),
(61, 'Thursday', 46, '02:00:00', '03:00:00'),
(62, 'Friday', 45, '04:00:00', '05:00:00'),
(63, 'Wednesday', 45, '02:00:00', '03:00:00'),
(64, 'Sunday', 47, '04:30:00', '05:30:00'),
(65, 'Saturday', 47, '06:30:00', '07:30:00'),
(66, 'Monday', 47, '02:30:00', '03:30:00'),
(67, 'Tuesday', 47, '01:30:00', '02:30:00'),
(68, 'Wednesday', 47, '11:00:00', '12:00:00'),
(69, 'Wednesday', 46, '11:30:00', '12:30:00'),
(70, 'Friday', 46, '04:30:00', '05:30:00'),
(71, 'Friday', 46, '02:30:00', '03:30:00'),
(72, 'Thursday', 45, '02:30:00', '03:30:00'),
(73, 'Sunday', 45, '08:00:00', '09:00:00'),
(74, 'Wednesday', 45, '01:30:00', '02:30:00'),
(75, 'Saturday', 44, '01:00:00', '02:00:00'),
(76, 'Saturday', 44, '03:00:00', '04:00:00'),
(77, 'Saturday', 44, '04:00:00', '05:00:00'),
(78, 'Saturday', 44, '06:00:00', '07:00:00'),
(79, 'Saturday', 44, '09:00:00', '10:00:00'),
(80, 'Monday', 43, '02:30:00', '03:30:00'),
(81, 'Monday', 43, '04:00:00', '05:00:00'),
(82, 'Tuesday', 43, '06:00:00', '07:00:00'),
(83, 'Wednesday', 43, '05:00:00', '06:00:00'),
(84, 'Sunday', 43, '05:00:00', '06:00:00'),
(85, 'Sunday', 42, '01:00:00', '02:00:00'),
(86, 'Sunday', 42, '03:00:00', '04:00:00'),
(87, 'Tuesday', 42, '11:00:00', '12:00:00'),
(88, 'Tuesday', 42, '01:00:00', '02:00:00'),
(89, 'Thursday', 42, '08:00:00', '09:00:00'),
(90, 'Saturday', 39, '01:00:00', '02:00:00'),
(91, 'Saturday', 39, '03:00:00', '04:00:00'),
(92, 'Saturday', 39, '05:00:00', '06:00:00'),
(93, 'Saturday', 39, '07:00:00', '08:00:00'),
(94, 'Saturday', 39, '09:00:00', '10:00:00'),
(95, 'Wednesday', 38, '04:00:00', '05:00:00'),
(96, 'Sunday', 38, '03:00:00', '04:00:00'),
(97, 'Monday', 37, '03:00:00', '04:00:00'),
(98, 'Monday', 37, '01:00:00', '02:00:00'),
(99, 'Thursday', 37, '12:30:00', '01:30:00'),
(100, 'Wednesday', 37, '04:30:00', '05:30:00'),
(101, 'Wednesday', 37, '06:30:00', '07:30:00'),
(102, 'Tuesday', 38, '01:30:00', '02:30:00'),
(103, 'Tuesday', 38, '03:30:00', '04:30:00'),
(104, 'Friday', 38, '11:00:00', '12:00:00'),
(105, 'Tuesday', 36, '10:00:00', '11:00:00'),
(106, 'Tuesday', 36, '12:00:00', '01:00:00'),
(107, 'Wednesday', 36, '01:00:00', '02:00:00'),
(108, 'Wednesday', 36, '03:00:00', '04:00:00'),
(109, 'Saturday', 36, '11:00:00', '12:00:00'),
(110, 'Saturday', 35, '01:30:00', '02:30:00'),
(111, 'Saturday', 35, '03:00:00', '04:00:00'),
(112, 'Saturday', 35, '05:00:00', '06:00:00'),
(113, 'Saturday', 35, '07:00:00', '08:00:00'),
(114, 'Saturday', 35, '09:00:00', '10:00:00'),
(115, 'Saturday', 34, '01:30:00', '02:30:00'),
(116, 'Saturday', 34, '03:30:00', '04:30:00'),
(117, 'Tuesday', 34, '12:00:00', '01:00:00'),
(118, 'Tuesday', 34, '01:30:00', '02:30:00'),
(119, 'Friday', 34, '11:00:00', '12:00:00'),
(120, 'Friday', 52, '02:30:00', '03:30:00'),
(121, 'Friday', 52, '04:30:00', '05:30:00'),
(122, 'Friday', 52, '06:00:00', '07:00:00'),
(123, 'Friday', 52, '07:30:00', '08:30:00'),
(124, 'Friday', 52, '09:00:00', '10:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_service`
--
ALTER TABLE `customer_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservations_id` (`reservations_id`),
  ADD KEY `patient_id` (`patient_id`) USING BTREE,
  ADD KEY `therapist_id` (`therapist_id`) USING BTREE;

--
-- Indexes for table `mental_test`
--
ALTER TABLE `mental_test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mental_test_id` (`mental_test_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_id` (`patient_id`),
  ADD KEY `therapist_id` (`therapist_id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_id` (`patient_id`),
  ADD KEY `payment_id` (`payment_id`),
  ADD KEY `therapist_id` (`therapist_id`);

--
-- Indexes for table `therapist`
--
ALTER TABLE `therapist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work_dates`
--
ALTER TABLE `work_dates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `therapist_id` (`therapist_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customer_service`
--
ALTER TABLE `customer_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT for table `mental_test`
--
ALTER TABLE `mental_test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `therapist`
--
ALTER TABLE `therapist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `work_dates`
--
ALTER TABLE `work_dates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD CONSTRAINT `feedbacks_ibfk_1` FOREIGN KEY (`therapist_id`) REFERENCES `therapist` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `feedbacks_ibfk_2` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `feedbacks_ibfk_3` FOREIGN KEY (`reservations_id`) REFERENCES `reservations` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `patient_ibfk_1` FOREIGN KEY (`mental_test_id`) REFERENCES `mental_test` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`therapist_id`) REFERENCES `therapist` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `payments_ibfk_2` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_ibfk_1` FOREIGN KEY (`therapist_id`) REFERENCES `therapist` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservations_ibfk_2` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservations_ibfk_3` FOREIGN KEY (`payment_id`) REFERENCES `payments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `work_dates`
--
ALTER TABLE `work_dates`
  ADD CONSTRAINT `work_dates_ibfk_1` FOREIGN KEY (`therapist_id`) REFERENCES `therapist` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
