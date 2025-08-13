-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2024 at 09:31 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant_erp`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_transactions`
--

CREATE TABLE `account_transactions` (
  `ID` int(11) NOT NULL,
  `transaction_date` date DEFAULT current_timestamp(),
  `transaction_type` enum('deposit','withdrawal') DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `purpose` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account_transactions`
--

INSERT INTO `account_transactions` (`ID`, `transaction_date`, `transaction_type`, `amount`, `purpose`) VALUES
(75, '2024-08-01', 'deposit', '887.00', 'Food/Drink'),
(76, '2024-08-01', 'withdrawal', '3183.00', 'Food '),
(77, '2024-08-01', 'deposit', '440.00', 'Food/Drink'),
(79, '2024-08-01', 'deposit', '1184.00', 'Food/Drink'),
(80, '2024-08-01', 'deposit', '17.00', 'Food/Drink'),
(81, '2024-08-01', 'deposit', '1247.00', 'Food/Drink'),
(82, '2024-08-01', 'deposit', '478.00', 'Food/Drink'),
(83, '2024-08-01', 'deposit', '856.00', 'Food/Drink'),
(84, '2024-08-01', 'deposit', '609.00', 'Food/Drink'),
(85, '2024-08-01', 'deposit', '1390.00', 'Food/Drink'),
(86, '2024-08-01', 'deposit', '1680.00', 'Food/Drink'),
(87, '2024-08-01', 'deposit', '560.00', 'Food/Drink'),
(88, '2024-08-01', 'deposit', '1031.00', 'Food/Drink'),
(89, '2024-08-01', 'deposit', '912.00', 'Food/Drink'),
(90, '2024-08-01', 'deposit', '608.00', 'Food/Drink'),
(91, '2024-08-01', 'deposit', '256.80', 'Food/Drink'),
(92, '2024-08-01', 'deposit', '369.60', 'Food/Drink'),
(93, '2024-08-01', 'deposit', '970.00', 'Food/Drink'),
(94, '2024-08-01', 'deposit', '672.00', 'Food/Drink'),
(95, '2024-08-01', 'deposit', '176.29', 'Food/Drink'),
(96, '2024-08-01', 'deposit', '840.00', 'Food/Drink'),
(97, '2024-08-01', 'deposit', '864.00', 'Food/Drink'),
(98, '2024-08-01', 'deposit', '434.70', 'Food/Drink'),
(99, '2024-08-01', 'deposit', '127.80', 'Food/Drink'),
(100, '2024-08-01', 'deposit', '529.20', 'Food/Drink'),
(101, '2024-08-01', 'deposit', '630.00', 'Food/Drink'),
(102, '2024-08-01', 'deposit', '700.00', 'Food/Drink'),
(103, '2024-08-01', 'deposit', '1385.00', 'Food/Drink'),
(104, '2024-08-01', 'deposit', '680.00', 'Food/Drink'),
(105, '2024-08-01', 'deposit', '980.00', 'Food/Drink'),
(106, '2024-08-01', 'deposit', '352.00', 'Food/Drink'),
(107, '2024-08-01', 'deposit', '1140.00', 'Food/Drink'),
(108, '2024-08-01', 'deposit', '1960.00', 'Food/Drink'),
(109, '2024-08-01', 'deposit', '630.00', 'Food/Drink'),
(110, '2024-08-01', 'deposit', '1655.00', 'Food/Drink'),
(111, '2024-08-01', 'deposit', '37.00', 'Food/Drink'),
(112, '2024-08-01', 'deposit', '184.00', 'Food/Drink'),
(113, '2024-08-01', 'deposit', '248.00', 'Food/Drink'),
(114, '2024-08-01', 'deposit', '231.20', 'Food/Drink'),
(115, '2024-08-01', 'deposit', '1071.20', 'Food/Drink'),
(116, '2024-08-01', 'deposit', '320.00', 'Food/Drink'),
(117, '2024-08-01', 'deposit', '929.00', 'Food/Drink'),
(118, '2024-08-01', 'deposit', '719.00', 'Food/Drink'),
(119, '2024-08-01', 'deposit', '2070.00', 'Food/Drink'),
(120, '2024-08-01', 'deposit', '350.00', 'Food/Drink'),
(121, '2024-08-01', 'deposit', '1445.00', 'Food/Drink'),
(122, '2024-08-01', 'deposit', '2340.00', 'Food/Drink'),
(123, '2024-08-01', 'deposit', '130.00', 'Food/Drink'),
(124, '2024-08-01', 'deposit', '873.00', 'Food/Drink'),
(125, '2024-08-01', 'deposit', '620.00', 'Food/Drink'),
(126, '2024-08-01', 'deposit', '520.80', 'Food/Drink'),
(127, '2024-08-01', 'withdrawal', '1619.00', 'Other '),
(128, '2024-08-02', 'deposit', '462.00', 'Food/Drink'),
(129, '2024-08-02', 'deposit', '172.66', 'Food/Drink'),
(130, '2024-08-02', 'deposit', '546.00', 'Food/Drink'),
(131, '2024-08-02', 'deposit', '95.00', 'Food/Drink'),
(132, '2024-08-02', 'deposit', '340.00', 'Food/Drink'),
(133, '2024-08-02', 'deposit', '241.86', 'Food/Drink'),
(134, '2024-08-02', 'deposit', '305.20', 'Food/Drink'),
(135, '2024-08-02', 'deposit', '307.02', 'Food/Drink'),
(136, '2024-08-02', 'deposit', '194.00', 'Food/Drink'),
(137, '2024-08-02', 'deposit', '184.00', 'Food/Drink'),
(138, '2024-08-02', 'deposit', '251.86', 'Food/Drink'),
(139, '2024-08-02', 'deposit', '340.00', 'Food/Drink'),
(140, '2024-08-02', 'deposit', '1440.00', 'Food/Drink'),
(141, '2024-08-02', 'deposit', '795.00', 'Food/Drink'),
(142, '2024-08-02', 'deposit', '803.00', 'Food/Drink'),
(143, '2024-08-02', 'deposit', '1040.00', 'Food/Drink'),
(144, '2024-08-03', 'deposit', '840.00', 'Food/Drink'),
(145, '2024-08-03', 'deposit', '841.60', 'Food/Drink'),
(146, '2024-08-03', 'deposit', '138.40', 'Food/Drink'),
(147, '2024-08-03', 'deposit', '464.07', 'Food/Drink'),
(148, '2024-08-03', 'deposit', '280.00', 'Food/Drink'),
(149, '2024-08-03', 'deposit', '327.00', 'Food/Drink'),
(150, '2024-08-03', 'deposit', '469.56', 'Food/Drink'),
(151, '2024-08-03', 'deposit', '510.30', 'Food/Drink'),
(152, '2024-08-03', 'deposit', '3345.00', 'Food/Drink'),
(153, '2024-08-03', 'deposit', '1671.00', 'Food/Drink'),
(154, '2024-08-03', 'deposit', '353.16', 'Food/Drink'),
(155, '2024-08-03', 'deposit', '462.00', 'Food/Drink'),
(156, '2024-08-03', 'deposit', '185.00', 'Food/Drink'),
(157, '2024-08-03', 'deposit', '920.00', 'Food/Drink'),
(158, '2024-08-03', 'deposit', '625.00', 'Food/Drink'),
(159, '2024-08-03', 'deposit', '299.00', 'Food/Drink'),
(160, '2024-08-03', 'deposit', '470.00', 'Food/Drink'),
(161, '2024-08-03', 'deposit', '299.00', 'Food/Drink'),
(162, '2024-08-03', 'deposit', '1885.00', 'Food/Drink'),
(163, '2024-08-03', 'deposit', '630.00', 'Food/Drink'),
(164, '2024-08-03', 'deposit', '530.00', 'Food/Drink'),
(165, '2024-08-03', 'deposit', '2328.00', 'Food/Drink'),
(166, '2024-08-03', 'deposit', '830.00', 'Food/Drink'),
(167, '2024-08-03', 'deposit', '743.00', 'Food/Drink'),
(168, '2024-08-03', 'deposit', '332.00', 'Food/Drink'),
(169, '2024-08-03', 'deposit', '2020.00', 'Food/Drink'),
(170, '2024-08-03', 'deposit', '219.45', 'Food/Drink'),
(171, '2024-08-03', 'deposit', '550.76', 'Food/Drink'),
(172, '2024-08-03', 'deposit', '2266.00', 'Food/Drink'),
(173, '2024-08-03', 'deposit', '938.00', 'Food/Drink'),
(174, '2024-08-03', 'deposit', '3938.00', 'Food/Drink'),
(175, '2024-08-03', 'deposit', '1523.00', 'Food/Drink'),
(176, '2024-08-03', 'deposit', '1972.00', 'Food/Drink'),
(177, '2024-08-03', 'deposit', '4120.00', 'Food/Drink'),
(178, '2024-08-03', 'deposit', '5019.00', 'Food/Drink'),
(179, '2024-08-03', 'deposit', '1703.00', 'Food/Drink'),
(180, '2024-08-03', 'deposit', '2417.00', 'Food/Drink'),
(181, '2024-08-03', 'deposit', '648.00', 'Food/Drink'),
(182, '2024-08-03', 'deposit', '750.00', 'Food/Drink'),
(183, '2024-08-03', 'deposit', '1110.00', 'Food/Drink'),
(184, '2024-08-03', 'deposit', '2318.00', 'Food/Drink'),
(185, '2024-08-03', 'deposit', '945.00', 'Food/Drink'),
(186, '2024-08-03', 'deposit', '1150.00', 'Food/Drink'),
(187, '2024-08-03', 'deposit', '346.72', 'Food/Drink'),
(189, '2024-08-04', 'deposit', '201.60', 'Food/Drink'),
(190, '2024-08-04', 'deposit', '750.00', 'Food/Drink'),
(191, '2024-08-04', 'deposit', '656.00', 'Food/Drink'),
(192, '2024-08-04', 'deposit', '1259.00', 'Food/Drink'),
(193, '2024-08-04', 'deposit', '1970.00', 'Food/Drink'),
(194, '2024-08-04', 'deposit', '641.00', 'Food/Drink'),
(195, '2024-08-04', 'deposit', '4450.00', 'Food/Drink'),
(196, '2024-08-04', 'deposit', '515.00', 'Food/Drink'),
(197, '2024-08-04', 'deposit', '462.00', 'Food/Drink'),
(198, '2024-08-04', 'deposit', '1423.00', 'Food/Drink'),
(199, '2024-08-04', 'deposit', '1244.00', 'Food/Drink'),
(200, '2024-08-04', 'deposit', '840.00', 'Food/Drink'),
(201, '2024-08-04', 'deposit', '914.00', 'Food/Drink'),
(202, '2024-08-04', 'deposit', '2121.00', 'Food/Drink'),
(203, '2024-08-04', 'deposit', '1059.00', 'Food/Drink'),
(204, '2024-08-04', 'deposit', '210.00', 'Food/Drink'),
(205, '2024-08-04', 'deposit', '2562.00', 'Food/Drink'),
(206, '2024-08-04', 'deposit', '2896.00', 'Food/Drink'),
(207, '2024-08-04', 'deposit', '1801.00', 'Food/Drink'),
(208, '2024-08-04', 'deposit', '280.00', 'Food/Drink'),
(209, '2024-08-04', 'deposit', '400.00', 'Food/Drink'),
(210, '2024-08-04', 'deposit', '280.00', 'Food/Drink'),
(211, '2024-08-04', 'deposit', '880.00', 'Food/Drink'),
(212, '2024-08-04', 'deposit', '264.10', 'Food/Drink'),
(213, '2024-08-04', 'deposit', '315.00', 'Food/Drink'),
(214, '2024-08-04', 'deposit', '1268.00', 'Food/Drink'),
(215, '2024-08-04', 'deposit', '1400.00', 'Food/Drink'),
(216, '2024-08-04', 'deposit', '4728.00', 'Food/Drink'),
(217, '2024-08-04', 'deposit', '3204.00', 'Food/Drink'),
(218, '2024-08-04', 'deposit', '400.00', 'Food/Drink'),
(219, '2024-08-04', 'deposit', '420.00', 'Food/Drink'),
(220, '2024-08-04', 'deposit', '1336.00', 'Food/Drink'),
(221, '2024-08-04', 'deposit', '630.00', 'Food/Drink'),
(222, '2024-08-04', 'deposit', '248.00', 'Food/Drink'),
(223, '2024-08-04', 'deposit', '530.00', 'Food/Drink'),
(224, '2024-08-04', 'deposit', '1362.00', 'Food/Drink'),
(225, '2024-08-04', 'deposit', '420.00', 'Food/Drink'),
(226, '2024-08-04', 'deposit', '680.00', 'Food/Drink'),
(227, '2024-08-04', 'deposit', '415.84', 'Food/Drink'),
(228, '2024-08-04', 'deposit', '320.00', 'Food/Drink'),
(229, '2024-08-04', 'deposit', '1213.00', 'Food/Drink'),
(230, '2024-08-04', 'deposit', '1944.00', 'Food/Drink'),
(231, '2024-08-04', 'deposit', '2350.00', 'Food/Drink'),
(232, '2024-08-04', 'deposit', '1013.00', 'Food/Drink'),
(233, '2024-08-04', 'deposit', '2003.00', 'Food/Drink'),
(234, '2024-08-04', 'deposit', '210.00', 'Food/Drink'),
(235, '2024-08-04', 'deposit', '315.00', 'Food/Drink'),
(236, '2024-08-04', 'deposit', '622.00', 'Food/Drink'),
(237, '2024-08-04', 'deposit', '1041.00', 'Food/Drink'),
(238, '2024-08-04', 'deposit', '982.00', 'Food/Drink'),
(239, '2024-08-04', 'deposit', '1001.00', 'Food/Drink'),
(240, '2024-08-04', 'deposit', '1480.00', 'Food/Drink'),
(241, '2024-08-04', 'deposit', '152.00', 'Food/Drink'),
(242, '2024-08-04', 'deposit', '3852.00', 'Food/Drink'),
(243, '2024-08-05', 'deposit', '1078.00', 'Food/Drink'),
(244, '2024-08-05', 'deposit', '693.00', 'Food/Drink'),
(245, '2024-08-05', 'deposit', '2059.00', 'Food/Drink'),
(246, '2024-08-05', 'deposit', '315.00', 'Food/Drink'),
(247, '2024-08-05', 'deposit', '560.00', 'Food/Drink'),
(248, '2024-08-05', 'deposit', '131.00', 'Food/Drink'),
(249, '2024-08-05', 'deposit', '1092.00', 'Food/Drink'),
(250, '2024-08-05', 'withdrawal', '2106.00', 'Other biplab agency copld drinks'),
(251, '2024-08-05', 'withdrawal', '281.00', 'Other grocery milk  doi'),
(252, '2024-08-05', 'deposit', '520.00', 'Food/Drink'),
(253, '2024-08-05', 'deposit', '205.00', 'Food/Drink'),
(254, '2024-08-05', 'deposit', '259.35', 'Food/Drink'),
(255, '2024-08-05', 'deposit', '230.00', 'Food/Drink'),
(256, '2024-08-05', 'deposit', '315.00', 'Food/Drink'),
(257, '2024-08-05', 'deposit', '224.00', 'Food/Drink'),
(258, '2024-08-05', 'deposit', '273.00', 'Food/Drink'),
(259, '2024-08-05', 'deposit', '448.00', 'Food/Drink'),
(260, '2024-08-05', 'deposit', '630.00', 'Food/Drink'),
(261, '2024-08-05', 'deposit', '142.00', 'Food/Drink'),
(262, '2024-08-05', 'deposit', '504.00', 'Food/Drink'),
(263, '2024-08-05', 'deposit', '2335.20', 'Food/Drink'),
(264, '2024-08-05', 'deposit', '866.00', 'Food/Drink'),
(265, '2024-08-05', 'deposit', '1536.00', 'Food/Drink'),
(266, '2024-08-05', 'deposit', '504.00', 'Food/Drink'),
(267, '2024-08-05', 'deposit', '504.00', 'Food/Drink'),
(268, '2024-08-05', 'deposit', '336.00', 'Food/Drink'),
(269, '2024-08-05', 'deposit', '142.00', 'Food/Drink'),
(270, '2024-08-05', 'deposit', '416.00', 'Food/Drink'),
(271, '2024-08-05', 'deposit', '504.00', 'Food/Drink'),
(272, '2024-08-05', 'deposit', '42.00', 'Food/Drink'),
(273, '2024-08-05', 'deposit', '616.00', 'Food/Drink'),
(274, '2024-08-05', 'deposit', '1240.00', 'Food/Drink'),
(275, '2024-08-05', 'deposit', '347.00', 'Food/Drink'),
(276, '2024-08-05', 'deposit', '262.30', 'Food/Drink'),
(277, '2024-08-05', 'deposit', '528.00', 'Food/Drink'),
(278, '2024-08-05', 'deposit', '504.00', 'Food/Drink'),
(279, '2024-08-05', 'deposit', '400.44', 'Food/Drink'),
(280, '2024-08-05', 'deposit', '487.20', 'Food/Drink'),
(281, '2024-08-05', 'deposit', '110.00', 'Food/Drink'),
(282, '2024-08-05', 'deposit', '1088.00', 'Food/Drink'),
(283, '2024-08-05', 'deposit', '1252.00', 'Food/Drink'),
(284, '2024-08-05', 'deposit', '672.00', 'Food/Drink'),
(285, '2024-08-05', 'withdrawal', '1500.00', 'Other sajal sir cash withdraw'),
(286, '2024-08-05', 'withdrawal', '1100.00', 'Eletricity staf room electric bill'),
(287, '2024-08-05', 'withdrawal', '120.00', 'Other spoon tissue travelling'),
(288, '2024-08-05', 'withdrawal', '1321.00', 'Other grocery'),
(289, '2024-08-05', 'withdrawal', '500.00', 'Other ashit furniture'),
(290, '2024-08-05', 'deposit', '1449.00', 'Food/Drink'),
(291, '2024-08-05', 'deposit', '2247.00', 'Food/Drink'),
(292, '2024-08-05', 'deposit', '272.00', 'Food/Drink'),
(293, '2024-08-05', 'deposit', '1808.00', 'Food/Drink'),
(294, '2024-08-05', 'withdrawal', '100.00', 'Other sajal sir paratha'),
(295, '2024-08-05', 'deposit', '305.60', 'Food/Drink'),
(296, '2024-08-05', 'deposit', '977.00', 'Food/Drink'),
(297, '2024-08-05', 'deposit', '1000.00', 'Food/Drink'),
(298, '2024-08-05', 'withdrawal', '1640.00', 'Salary anjan bhatta'),
(299, '2024-08-05', 'withdrawal', '140.00', 'Other cash back to tips'),
(300, '2024-08-05', 'withdrawal', '4046.00', 'Vegetables sapan veg '),
(301, '2024-08-05', 'withdrawal', '2000.00', 'Other maa variety store');

-- --------------------------------------------------------

--
-- Table structure for table `admin_master`
--

CREATE TABLE `admin_master` (
  `admin_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `page_id` longtext DEFAULT NULL,
  `del_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_master`
--

INSERT INTO `admin_master` (`admin_id`, `role_id`, `email_id`, `password`, `page_id`, `del_status`) VALUES
(1, 1, 'admin@gmail.com', 'MTIzNA==', '1,2,3,4,5,7,8,10,11,12,13,20,21,22', 0),
(2, 2, 'chef@gmail.com', 'MTIzNDU2', NULL, 1),
(3, 2, 'test@chef.com', 'MTIzNA==', '7,10', 1),
(4, 2, 'account@gmail.com', 'MTIzNA==', '1,12,21', 0),
(5, 3, 'cashier@gmail.com', 'MTIzNA==', '1,11,12,20,21,22', 0);

-- --------------------------------------------------------

--
-- Table structure for table `category_master`
--

CREATE TABLE `category_master` (
  `category_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `cat_desc` longtext NOT NULL,
  `cat_img` varchar(255) NOT NULL,
  `del_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_master`
--

INSERT INTO `category_master` (`category_id`, `cat_name`, `cat_desc`, `cat_img`, `del_status`) VALUES
(1, 'Food', 'Food', '1626094550istockphoto-930271208-612x612.jpg', 0),
(2, 'Drinks', 'Drinks ', '1716998548drink.png', 0),
(3, 'Others', 'Others', '1717151275stock-photo-five-cocktails-on-the-bar-counter-167718563.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `content_master`
--

CREATE TABLE `content_master` (
  `content_id` int(11) NOT NULL,
  `section` varchar(255) NOT NULL COMMENT '1:-Event,2:-Gallery, 3:Notice,4:Testimonial(Franchise),5:-Blog,6:-Class,7:-parents Message',
  `page` varchar(255) NOT NULL,
  `header` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `extra_content` longtext NOT NULL,
  `image` longtext NOT NULL,
  `video` longtext NOT NULL,
  `academicimage` varchar(255) DEFAULT NULL,
  `del_status` int(11) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content_master`
--

INSERT INTO `content_master` (`content_id`, `section`, `page`, `header`, `content`, `extra_content`, `image`, `video`, `academicimage`, `del_status`, `created_date`) VALUES
(1, '1', '', 'Banner1', '<p>&lt;h1&gt;A fully outsourced catering provision for their &lt;b&gt;schools and colleges.&lt;/b&gt;&lt;/h1&gt;</p>\n', '', 'upload problem', 'undefined', '', 1, '2024-05-27 18:43:32'),
(2, '1', '', 'Banner2', '<p>&nbsp;</p>\n\n<h1>A fully outsourced catering provision for their <strong>schools and colleges.</strong></h1>\n\n<p>&nbsp;</p>\n', '', '1628767025banner-img.jpg', 'undefined', NULL, 0, '2024-05-27 18:43:32'),
(3, '2', '', 'We Provide', '<h3>Heathy Eating and Nutrition</h3>\n', '', '1628767908weprovide-1.png', 'undefined', '', 1, '2024-05-27 18:43:32'),
(4, '3', '', 'A Brief About us', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\n', '', '1628768032about-img.png', 'undefined', '', 0, '2024-05-27 18:43:32'),
(5, '4', '', 'What company does', '<h4>Vending machines on a full service basis to the education, workplace, health and leisure sectors</h4>\n', '', '1628768182what_company_does.jpg', 'undefined', '', 0, '2024-05-27 18:43:32'),
(6, '4', '', 'What company does', '<h4>19 litre bottle water coolers at no charge to clients with a re-stocking supply of 19 litre bottled water as demand dictates.</h4>\n', '', '1628768251what_company_does-2.jpg', 'undefined', NULL, 0, '2024-05-27 18:43:32'),
(7, '6', '', 'For School or colleges', '<ul>\n	<li>Exciting menus each term to utilise seasonal produce</li>\n	<li>Freshly cooked meals using raw ingredients</li>\n	<li>Freshly baked puddings and biscuits</li>\n	<li>Theme days and Christmas dinners</li>\n	<li>Packed lunches for school outings</li>\n	<li>Online pre-ordering with access to all our recipes</li>\n	<li>Payments by card (pre-pay top up) or Direct Debit (post payment, monthly)</li>\n</ul>\n', '', '', 'undefined', NULL, 0, '2024-05-27 18:43:32'),
(8, '7', '', 'For Parents', '<ul>\n	<li>Exciting menus each term to utilise seasonal produce</li>\n	<li>Freshly cooked meals using raw ingredients</li>\n	<li>Freshly baked puddings and biscuits</li>\n	<li>Theme days and Christmas dinners</li>\n	<li>Packed lunches for school outings</li>\n	<li>Online pre-ordering with access to all our recipes</li>\n	<li>Payments by card (pre-pay top up) or Direct Debit (post payment, monthly)</li>\n</ul>\n', '', '', 'undefined', NULL, 0, '2024-05-27 18:43:32'),
(9, '5', '', 'Client Says', '<p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. cumsan lacus vel facilisis.</p>\n', '', '1628768662clients-1.jpg', 'undefined', '', 1, '2024-05-27 18:43:32'),
(10, '8', '', 'About Us', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\n', '', '1628847491about-banner.jpg', 'undefined', '', 0, '2024-05-27 18:43:32'),
(11, '9', '', 'Employee Recognition', '<p>We operate in a seamless fashion and ensure that the efficiency of our workforce benefits them as well.</p>\n', '', '1628847571about1.jpg', 'undefined', '', 0, '2024-05-27 18:43:32'),
(12, '9', '', 'Operational Excellence', '<p>We operate in a seamless fashion and ensure that the efficiency of our workforce benefits them as well.</p>\n', '', '1628847653about2.jpg', 'undefined', '', 0, '2024-05-27 18:43:32'),
(13, '9', '', 'Responsibility', '<p>We operate in a seamless fashion and ensure that the efficiency of our workforce benefits them as well.</p>\n', '', '1628847698about3.jpg', 'undefined', '', 0, '2024-05-27 18:43:32'),
(14, '10', '', ' Allergens and Dietary Information', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\n', '', '1628853783about-banner.jpg', 'undefined', '', 0, '2024-05-27 18:43:32'),
(15, '11', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\n', '', '1628853931about-banner.jpg', 'undefined', '', 0, '2024-05-27 18:43:32'),
(16, '13', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853783about-banner.jpg', 'undefined', '', 0, '2024-05-27 18:43:32'),
(17, '14', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853931about-banner.jpg', 'undefined', '', 0, '2024-05-27 18:43:32'),
(18, '15', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853783about-banner.jpg', 'undefined', '', 0, '2024-05-27 18:43:32'),
(19, '16', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853931about-banner.jpg', 'undefined', '', 0, '2024-05-27 18:43:32'),
(20, '17', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853783about-banner.jpg', 'undefined', '', 0, '2024-05-27 18:43:32'),
(21, '18', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853931about-banner.jpg', 'undefined', '', 0, '2024-05-27 18:43:32'),
(22, '19', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853783about-banner.jpg', 'undefined', '', 0, '2024-05-27 18:43:32'),
(23, '20', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853931about-banner.jpg', 'undefined', '', 0, '2024-05-27 18:43:32'),
(24, '21', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853783about-banner.jpg', 'undefined', '', 0, '2024-05-27 18:43:32'),
(25, '22', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853931about-banner.jpg', 'undefined', '', 0, '2024-05-27 18:43:32'),
(26, '23', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853783about-banner.jpg', 'undefined', '', 0, '2024-05-27 18:43:32'),
(27, '24', '', 'Headings', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\n', '', '1628853931about-banner.jpg', 'undefined', NULL, 0, '2024-05-27 18:43:32'),
(1, '1', '', 'Banner1', '<p>&lt;h1&gt;A fully outsourced catering provision for their &lt;b&gt;schools and colleges.&lt;/b&gt;&lt;/h1&gt;</p>\n', '', 'upload problem', 'undefined', '', 1, '2024-05-27 18:45:19'),
(2, '1', '', 'Banner2', '<p>&nbsp;</p>\n\n<h1>A fully outsourced catering provision for their <strong>schools and colleges.</strong></h1>\n\n<p>&nbsp;</p>\n', '', '1628767025banner-img.jpg', 'undefined', NULL, 0, '2024-05-27 18:45:19'),
(3, '2', '', 'We Provide', '<h3>Heathy Eating and Nutrition</h3>\n', '', '1628767908weprovide-1.png', 'undefined', '', 1, '2024-05-27 18:45:19'),
(4, '3', '', 'A Brief About us', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\n', '', '1628768032about-img.png', 'undefined', '', 0, '2024-05-27 18:45:19'),
(5, '4', '', 'What company does', '<h4>Vending machines on a full service basis to the education, workplace, health and leisure sectors</h4>\n', '', '1628768182what_company_does.jpg', 'undefined', '', 0, '2024-05-27 18:45:19'),
(6, '4', '', 'What company does', '<h4>19 litre bottle water coolers at no charge to clients with a re-stocking supply of 19 litre bottled water as demand dictates.</h4>\n', '', '1628768251what_company_does-2.jpg', 'undefined', NULL, 0, '2024-05-27 18:45:19'),
(7, '6', '', 'For School or colleges', '<ul>\n	<li>Exciting menus each term to utilise seasonal produce</li>\n	<li>Freshly cooked meals using raw ingredients</li>\n	<li>Freshly baked puddings and biscuits</li>\n	<li>Theme days and Christmas dinners</li>\n	<li>Packed lunches for school outings</li>\n	<li>Online pre-ordering with access to all our recipes</li>\n	<li>Payments by card (pre-pay top up) or Direct Debit (post payment, monthly)</li>\n</ul>\n', '', '', 'undefined', NULL, 0, '2024-05-27 18:45:19'),
(8, '7', '', 'For Parents', '<ul>\n	<li>Exciting menus each term to utilise seasonal produce</li>\n	<li>Freshly cooked meals using raw ingredients</li>\n	<li>Freshly baked puddings and biscuits</li>\n	<li>Theme days and Christmas dinners</li>\n	<li>Packed lunches for school outings</li>\n	<li>Online pre-ordering with access to all our recipes</li>\n	<li>Payments by card (pre-pay top up) or Direct Debit (post payment, monthly)</li>\n</ul>\n', '', '', 'undefined', NULL, 0, '2024-05-27 18:45:19'),
(9, '5', '', 'Client Says', '<p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. cumsan lacus vel facilisis.</p>\n', '', '1628768662clients-1.jpg', 'undefined', '', 1, '2024-05-27 18:45:19'),
(10, '8', '', 'About Us', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\n', '', '1628847491about-banner.jpg', 'undefined', '', 0, '2024-05-27 18:45:19'),
(11, '9', '', 'Employee Recognition', '<p>We operate in a seamless fashion and ensure that the efficiency of our workforce benefits them as well.</p>\n', '', '1628847571about1.jpg', 'undefined', '', 0, '2024-05-27 18:45:19'),
(12, '9', '', 'Operational Excellence', '<p>We operate in a seamless fashion and ensure that the efficiency of our workforce benefits them as well.</p>\n', '', '1628847653about2.jpg', 'undefined', '', 0, '2024-05-27 18:45:19'),
(13, '9', '', 'Responsibility', '<p>We operate in a seamless fashion and ensure that the efficiency of our workforce benefits them as well.</p>\n', '', '1628847698about3.jpg', 'undefined', '', 0, '2024-05-27 18:45:19'),
(14, '10', '', ' Allergens and Dietary Information', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\n', '', '1628853783about-banner.jpg', 'undefined', '', 0, '2024-05-27 18:45:19'),
(15, '11', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\n', '', '1628853931about-banner.jpg', 'undefined', '', 0, '2024-05-27 18:45:19'),
(16, '13', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853783about-banner.jpg', 'undefined', '', 0, '2024-05-27 18:45:19'),
(17, '14', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853931about-banner.jpg', 'undefined', '', 0, '2024-05-27 18:45:19'),
(18, '15', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853783about-banner.jpg', 'undefined', '', 0, '2024-05-27 18:45:19'),
(19, '16', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853931about-banner.jpg', 'undefined', '', 0, '2024-05-27 18:45:19'),
(20, '17', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853783about-banner.jpg', 'undefined', '', 0, '2024-05-27 18:45:19'),
(21, '18', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853931about-banner.jpg', 'undefined', '', 0, '2024-05-27 18:45:19'),
(22, '19', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853783about-banner.jpg', 'undefined', '', 0, '2024-05-27 18:45:19'),
(23, '20', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853931about-banner.jpg', 'undefined', '', 0, '2024-05-27 18:45:19'),
(24, '21', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853783about-banner.jpg', 'undefined', '', 0, '2024-05-27 18:45:19'),
(25, '22', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853931about-banner.jpg', 'undefined', '', 0, '2024-05-27 18:45:19'),
(26, '23', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853783about-banner.jpg', 'undefined', '', 0, '2024-05-27 18:45:19'),
(27, '24', '', 'Headings', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\n', '', '1628853931about-banner.jpg', 'undefined', NULL, 0, '2024-05-27 18:45:19'),
(1, '1', '', 'Banner1', '<p>&lt;h1&gt;A fully outsourced catering provision for their &lt;b&gt;schools and colleges.&lt;/b&gt;&lt;/h1&gt;</p>\n', '', 'upload problem', 'undefined', '', 1, '2024-05-27 18:59:01'),
(2, '1', '', 'Banner2', '<p>&nbsp;</p>\n\n<h1>A fully outsourced catering provision for their <strong>schools and colleges.</strong></h1>\n\n<p>&nbsp;</p>\n', '', '1628767025banner-img.jpg', 'undefined', NULL, 0, '2024-05-27 18:59:01'),
(3, '2', '', 'We Provide', '<h3>Heathy Eating and Nutrition</h3>\n', '', '1628767908weprovide-1.png', 'undefined', '', 1, '2024-05-27 18:59:01'),
(4, '3', '', 'A Brief About us', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\n', '', '1628768032about-img.png', 'undefined', '', 0, '2024-05-27 18:59:01'),
(5, '4', '', 'What company does', '<h4>Vending machines on a full service basis to the education, workplace, health and leisure sectors</h4>\n', '', '1628768182what_company_does.jpg', 'undefined', '', 0, '2024-05-27 18:59:01'),
(6, '4', '', 'What company does', '<h4>19 litre bottle water coolers at no charge to clients with a re-stocking supply of 19 litre bottled water as demand dictates.</h4>\n', '', '1628768251what_company_does-2.jpg', 'undefined', NULL, 0, '2024-05-27 18:59:01'),
(7, '6', '', 'For School or colleges', '<ul>\n	<li>Exciting menus each term to utilise seasonal produce</li>\n	<li>Freshly cooked meals using raw ingredients</li>\n	<li>Freshly baked puddings and biscuits</li>\n	<li>Theme days and Christmas dinners</li>\n	<li>Packed lunches for school outings</li>\n	<li>Online pre-ordering with access to all our recipes</li>\n	<li>Payments by card (pre-pay top up) or Direct Debit (post payment, monthly)</li>\n</ul>\n', '', '', 'undefined', NULL, 0, '2024-05-27 18:59:01'),
(8, '7', '', 'For Parents', '<ul>\n	<li>Exciting menus each term to utilise seasonal produce</li>\n	<li>Freshly cooked meals using raw ingredients</li>\n	<li>Freshly baked puddings and biscuits</li>\n	<li>Theme days and Christmas dinners</li>\n	<li>Packed lunches for school outings</li>\n	<li>Online pre-ordering with access to all our recipes</li>\n	<li>Payments by card (pre-pay top up) or Direct Debit (post payment, monthly)</li>\n</ul>\n', '', '', 'undefined', NULL, 0, '2024-05-27 18:59:01'),
(9, '5', '', 'Client Says', '<p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. cumsan lacus vel facilisis.</p>\n', '', '1628768662clients-1.jpg', 'undefined', '', 1, '2024-05-27 18:59:01'),
(10, '8', '', 'About Us', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\n', '', '1628847491about-banner.jpg', 'undefined', '', 0, '2024-05-27 18:59:01'),
(11, '9', '', 'Employee Recognition', '<p>We operate in a seamless fashion and ensure that the efficiency of our workforce benefits them as well.</p>\n', '', '1628847571about1.jpg', 'undefined', '', 0, '2024-05-27 18:59:01'),
(12, '9', '', 'Operational Excellence', '<p>We operate in a seamless fashion and ensure that the efficiency of our workforce benefits them as well.</p>\n', '', '1628847653about2.jpg', 'undefined', '', 0, '2024-05-27 18:59:01'),
(13, '9', '', 'Responsibility', '<p>We operate in a seamless fashion and ensure that the efficiency of our workforce benefits them as well.</p>\n', '', '1628847698about3.jpg', 'undefined', '', 0, '2024-05-27 18:59:01'),
(14, '10', '', ' Allergens and Dietary Information', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\n', '', '1628853783about-banner.jpg', 'undefined', '', 0, '2024-05-27 18:59:01'),
(15, '11', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\n', '', '1628853931about-banner.jpg', 'undefined', '', 0, '2024-05-27 18:59:01'),
(16, '13', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853783about-banner.jpg', 'undefined', '', 0, '2024-05-27 18:59:01'),
(17, '14', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853931about-banner.jpg', 'undefined', '', 0, '2024-05-27 18:59:01'),
(18, '15', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853783about-banner.jpg', 'undefined', '', 0, '2024-05-27 18:59:01'),
(19, '16', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853931about-banner.jpg', 'undefined', '', 0, '2024-05-27 18:59:01'),
(20, '17', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853783about-banner.jpg', 'undefined', '', 0, '2024-05-27 18:59:01'),
(21, '18', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853931about-banner.jpg', 'undefined', '', 0, '2024-05-27 18:59:01'),
(22, '19', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853783about-banner.jpg', 'undefined', '', 0, '2024-05-27 18:59:01'),
(23, '20', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853931about-banner.jpg', 'undefined', '', 0, '2024-05-27 18:59:01'),
(24, '21', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853783about-banner.jpg', 'undefined', '', 0, '2024-05-27 18:59:01'),
(25, '22', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853931about-banner.jpg', 'undefined', '', 0, '2024-05-27 18:59:01'),
(26, '23', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853783about-banner.jpg', 'undefined', '', 0, '2024-05-27 18:59:01'),
(27, '24', '', 'Headings', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\n', '', '1628853931about-banner.jpg', 'undefined', NULL, 0, '2024-05-27 18:59:01'),
(1, '1', '', 'Banner1', '<p>&lt;h1&gt;A fully outsourced catering provision for their &lt;b&gt;schools and colleges.&lt;/b&gt;&lt;/h1&gt;</p>\n', '', 'upload problem', 'undefined', '', 1, '2024-05-29 05:41:21'),
(2, '1', '', 'Banner2', '<p>&nbsp;</p>\n\n<h1>A fully outsourced catering provision for their <strong>schools and colleges.</strong></h1>\n\n<p>&nbsp;</p>\n', '', '1628767025banner-img.jpg', 'undefined', NULL, 0, '2024-05-29 05:41:21'),
(3, '2', '', 'We Provide', '<h3>Heathy Eating and Nutrition</h3>\n', '', '1628767908weprovide-1.png', 'undefined', '', 1, '2024-05-29 05:41:21'),
(4, '3', '', 'A Brief About us', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\n', '', '1628768032about-img.png', 'undefined', '', 0, '2024-05-29 05:41:21'),
(5, '4', '', 'What company does', '<h4>Vending machines on a full service basis to the education, workplace, health and leisure sectors</h4>\n', '', '1628768182what_company_does.jpg', 'undefined', '', 0, '2024-05-29 05:41:21'),
(6, '4', '', 'What company does', '<h4>19 litre bottle water coolers at no charge to clients with a re-stocking supply of 19 litre bottled water as demand dictates.</h4>\n', '', '1628768251what_company_does-2.jpg', 'undefined', NULL, 0, '2024-05-29 05:41:21'),
(7, '6', '', 'For School or colleges', '<ul>\n	<li>Exciting menus each term to utilise seasonal produce</li>\n	<li>Freshly cooked meals using raw ingredients</li>\n	<li>Freshly baked puddings and biscuits</li>\n	<li>Theme days and Christmas dinners</li>\n	<li>Packed lunches for school outings</li>\n	<li>Online pre-ordering with access to all our recipes</li>\n	<li>Payments by card (pre-pay top up) or Direct Debit (post payment, monthly)</li>\n</ul>\n', '', '', 'undefined', NULL, 0, '2024-05-29 05:41:21'),
(8, '7', '', 'For Parents', '<ul>\n	<li>Exciting menus each term to utilise seasonal produce</li>\n	<li>Freshly cooked meals using raw ingredients</li>\n	<li>Freshly baked puddings and biscuits</li>\n	<li>Theme days and Christmas dinners</li>\n	<li>Packed lunches for school outings</li>\n	<li>Online pre-ordering with access to all our recipes</li>\n	<li>Payments by card (pre-pay top up) or Direct Debit (post payment, monthly)</li>\n</ul>\n', '', '', 'undefined', NULL, 0, '2024-05-29 05:41:21'),
(9, '5', '', 'Client Says', '<p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. cumsan lacus vel facilisis.</p>\n', '', '1628768662clients-1.jpg', 'undefined', '', 1, '2024-05-29 05:41:21'),
(10, '8', '', 'About Us', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\n', '', '1628847491about-banner.jpg', 'undefined', '', 0, '2024-05-29 05:41:21'),
(11, '9', '', 'Employee Recognition', '<p>We operate in a seamless fashion and ensure that the efficiency of our workforce benefits them as well.</p>\n', '', '1628847571about1.jpg', 'undefined', '', 0, '2024-05-29 05:41:21'),
(12, '9', '', 'Operational Excellence', '<p>We operate in a seamless fashion and ensure that the efficiency of our workforce benefits them as well.</p>\n', '', '1628847653about2.jpg', 'undefined', '', 0, '2024-05-29 05:41:21'),
(13, '9', '', 'Responsibility', '<p>We operate in a seamless fashion and ensure that the efficiency of our workforce benefits them as well.</p>\n', '', '1628847698about3.jpg', 'undefined', '', 0, '2024-05-29 05:41:21'),
(14, '10', '', ' Allergens and Dietary Information', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\n', '', '1628853783about-banner.jpg', 'undefined', '', 0, '2024-05-29 05:41:21'),
(15, '11', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\n', '', '1628853931about-banner.jpg', 'undefined', '', 0, '2024-05-29 05:41:21'),
(16, '13', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853783about-banner.jpg', 'undefined', '', 0, '2024-05-29 05:41:21'),
(17, '14', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853931about-banner.jpg', 'undefined', '', 0, '2024-05-29 05:41:21'),
(18, '15', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853783about-banner.jpg', 'undefined', '', 0, '2024-05-29 05:41:21'),
(19, '16', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853931about-banner.jpg', 'undefined', '', 0, '2024-05-29 05:41:21'),
(20, '17', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853783about-banner.jpg', 'undefined', '', 0, '2024-05-29 05:41:21'),
(21, '18', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853931about-banner.jpg', 'undefined', '', 0, '2024-05-29 05:41:21'),
(22, '19', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853783about-banner.jpg', 'undefined', '', 0, '2024-05-29 05:41:21'),
(23, '20', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853931about-banner.jpg', 'undefined', '', 0, '2024-05-29 05:41:21'),
(24, '21', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853783about-banner.jpg', 'undefined', '', 0, '2024-05-29 05:41:21'),
(25, '22', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853931about-banner.jpg', 'undefined', '', 0, '2024-05-29 05:41:21'),
(26, '23', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853783about-banner.jpg', 'undefined', '', 0, '2024-05-29 05:41:21'),
(27, '24', '', 'Headings', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\n', '', '1628853931about-banner.jpg', 'undefined', NULL, 0, '2024-05-29 05:41:21'),
(1, '1', '', 'Banner1', '<p>&lt;h1&gt;A fully outsourced catering provision for their &lt;b&gt;schools and colleges.&lt;/b&gt;&lt;/h1&gt;</p>\n', '', 'upload problem', 'undefined', '', 1, '2024-05-29 05:42:19'),
(2, '1', '', 'Banner2', '<p>&nbsp;</p>\n\n<h1>A fully outsourced catering provision for their <strong>schools and colleges.</strong></h1>\n\n<p>&nbsp;</p>\n', '', '1628767025banner-img.jpg', 'undefined', NULL, 0, '2024-05-29 05:42:19'),
(3, '2', '', 'We Provide', '<h3>Heathy Eating and Nutrition</h3>\n', '', '1628767908weprovide-1.png', 'undefined', '', 1, '2024-05-29 05:42:19'),
(4, '3', '', 'A Brief About us', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\n', '', '1628768032about-img.png', 'undefined', '', 0, '2024-05-29 05:42:19'),
(5, '4', '', 'What company does', '<h4>Vending machines on a full service basis to the education, workplace, health and leisure sectors</h4>\n', '', '1628768182what_company_does.jpg', 'undefined', '', 0, '2024-05-29 05:42:19'),
(6, '4', '', 'What company does', '<h4>19 litre bottle water coolers at no charge to clients with a re-stocking supply of 19 litre bottled water as demand dictates.</h4>\n', '', '1628768251what_company_does-2.jpg', 'undefined', NULL, 0, '2024-05-29 05:42:19'),
(7, '6', '', 'For School or colleges', '<ul>\n	<li>Exciting menus each term to utilise seasonal produce</li>\n	<li>Freshly cooked meals using raw ingredients</li>\n	<li>Freshly baked puddings and biscuits</li>\n	<li>Theme days and Christmas dinners</li>\n	<li>Packed lunches for school outings</li>\n	<li>Online pre-ordering with access to all our recipes</li>\n	<li>Payments by card (pre-pay top up) or Direct Debit (post payment, monthly)</li>\n</ul>\n', '', '', 'undefined', NULL, 0, '2024-05-29 05:42:19'),
(8, '7', '', 'For Parents', '<ul>\n	<li>Exciting menus each term to utilise seasonal produce</li>\n	<li>Freshly cooked meals using raw ingredients</li>\n	<li>Freshly baked puddings and biscuits</li>\n	<li>Theme days and Christmas dinners</li>\n	<li>Packed lunches for school outings</li>\n	<li>Online pre-ordering with access to all our recipes</li>\n	<li>Payments by card (pre-pay top up) or Direct Debit (post payment, monthly)</li>\n</ul>\n', '', '', 'undefined', NULL, 0, '2024-05-29 05:42:19'),
(9, '5', '', 'Client Says', '<p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. cumsan lacus vel facilisis.</p>\n', '', '1628768662clients-1.jpg', 'undefined', '', 1, '2024-05-29 05:42:19'),
(10, '8', '', 'About Us', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\n', '', '1628847491about-banner.jpg', 'undefined', '', 0, '2024-05-29 05:42:19'),
(11, '9', '', 'Employee Recognition', '<p>We operate in a seamless fashion and ensure that the efficiency of our workforce benefits them as well.</p>\n', '', '1628847571about1.jpg', 'undefined', '', 0, '2024-05-29 05:42:19'),
(12, '9', '', 'Operational Excellence', '<p>We operate in a seamless fashion and ensure that the efficiency of our workforce benefits them as well.</p>\n', '', '1628847653about2.jpg', 'undefined', '', 0, '2024-05-29 05:42:19'),
(13, '9', '', 'Responsibility', '<p>We operate in a seamless fashion and ensure that the efficiency of our workforce benefits them as well.</p>\n', '', '1628847698about3.jpg', 'undefined', '', 0, '2024-05-29 05:42:19'),
(14, '10', '', ' Allergens and Dietary Information', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\n', '', '1628853783about-banner.jpg', 'undefined', '', 0, '2024-05-29 05:42:19'),
(15, '11', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\n', '', '1628853931about-banner.jpg', 'undefined', '', 0, '2024-05-29 05:42:19'),
(16, '13', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853783about-banner.jpg', 'undefined', '', 0, '2024-05-29 05:42:19'),
(17, '14', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853931about-banner.jpg', 'undefined', '', 0, '2024-05-29 05:42:19'),
(18, '15', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853783about-banner.jpg', 'undefined', '', 0, '2024-05-29 05:42:19'),
(19, '16', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853931about-banner.jpg', 'undefined', '', 0, '2024-05-29 05:42:19'),
(20, '17', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853783about-banner.jpg', 'undefined', '', 0, '2024-05-29 05:42:19'),
(21, '18', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853931about-banner.jpg', 'undefined', '', 0, '2024-05-29 05:42:19'),
(22, '19', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853783about-banner.jpg', 'undefined', '', 0, '2024-05-29 05:42:19'),
(23, '20', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853931about-banner.jpg', 'undefined', '', 0, '2024-05-29 05:42:19'),
(24, '21', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853783about-banner.jpg', 'undefined', '', 0, '2024-05-29 05:42:19'),
(25, '22', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853931about-banner.jpg', 'undefined', '', 0, '2024-05-29 05:42:19'),
(26, '23', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853783about-banner.jpg', 'undefined', '', 0, '2024-05-29 05:42:19'),
(27, '24', '', 'Headings', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\n', '', '1628853931about-banner.jpg', 'undefined', NULL, 0, '2024-05-29 05:42:19'),
(1, '1', '', 'Banner1', '<p>&lt;h1&gt;A fully outsourced catering provision for their &lt;b&gt;schools and colleges.&lt;/b&gt;&lt;/h1&gt;</p>\n', '', 'upload problem', 'undefined', '', 1, '2024-05-29 05:44:27'),
(2, '1', '', 'Banner2', '<p>&nbsp;</p>\n\n<h1>A fully outsourced catering provision for their <strong>schools and colleges.</strong></h1>\n\n<p>&nbsp;</p>\n', '', '1628767025banner-img.jpg', 'undefined', NULL, 0, '2024-05-29 05:44:27'),
(3, '2', '', 'We Provide', '<h3>Heathy Eating and Nutrition</h3>\n', '', '1628767908weprovide-1.png', 'undefined', '', 1, '2024-05-29 05:44:27'),
(4, '3', '', 'A Brief About us', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\n', '', '1628768032about-img.png', 'undefined', '', 0, '2024-05-29 05:44:27'),
(5, '4', '', 'What company does', '<h4>Vending machines on a full service basis to the education, workplace, health and leisure sectors</h4>\n', '', '1628768182what_company_does.jpg', 'undefined', '', 0, '2024-05-29 05:44:27'),
(6, '4', '', 'What company does', '<h4>19 litre bottle water coolers at no charge to clients with a re-stocking supply of 19 litre bottled water as demand dictates.</h4>\n', '', '1628768251what_company_does-2.jpg', 'undefined', NULL, 0, '2024-05-29 05:44:27'),
(7, '6', '', 'For School or colleges', '<ul>\n	<li>Exciting menus each term to utilise seasonal produce</li>\n	<li>Freshly cooked meals using raw ingredients</li>\n	<li>Freshly baked puddings and biscuits</li>\n	<li>Theme days and Christmas dinners</li>\n	<li>Packed lunches for school outings</li>\n	<li>Online pre-ordering with access to all our recipes</li>\n	<li>Payments by card (pre-pay top up) or Direct Debit (post payment, monthly)</li>\n</ul>\n', '', '', 'undefined', NULL, 0, '2024-05-29 05:44:27'),
(8, '7', '', 'For Parents', '<ul>\n	<li>Exciting menus each term to utilise seasonal produce</li>\n	<li>Freshly cooked meals using raw ingredients</li>\n	<li>Freshly baked puddings and biscuits</li>\n	<li>Theme days and Christmas dinners</li>\n	<li>Packed lunches for school outings</li>\n	<li>Online pre-ordering with access to all our recipes</li>\n	<li>Payments by card (pre-pay top up) or Direct Debit (post payment, monthly)</li>\n</ul>\n', '', '', 'undefined', NULL, 0, '2024-05-29 05:44:27'),
(9, '5', '', 'Client Says', '<p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. cumsan lacus vel facilisis.</p>\n', '', '1628768662clients-1.jpg', 'undefined', '', 1, '2024-05-29 05:44:27'),
(10, '8', '', 'About Us', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\n', '', '1628847491about-banner.jpg', 'undefined', '', 0, '2024-05-29 05:44:27'),
(11, '9', '', 'Employee Recognition', '<p>We operate in a seamless fashion and ensure that the efficiency of our workforce benefits them as well.</p>\n', '', '1628847571about1.jpg', 'undefined', '', 0, '2024-05-29 05:44:27'),
(12, '9', '', 'Operational Excellence', '<p>We operate in a seamless fashion and ensure that the efficiency of our workforce benefits them as well.</p>\n', '', '1628847653about2.jpg', 'undefined', '', 0, '2024-05-29 05:44:27'),
(13, '9', '', 'Responsibility', '<p>We operate in a seamless fashion and ensure that the efficiency of our workforce benefits them as well.</p>\n', '', '1628847698about3.jpg', 'undefined', '', 0, '2024-05-29 05:44:27'),
(14, '10', '', ' Allergens and Dietary Information', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\n', '', '1628853783about-banner.jpg', 'undefined', '', 0, '2024-05-29 05:44:27'),
(15, '11', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\n', '', '1628853931about-banner.jpg', 'undefined', '', 0, '2024-05-29 05:44:27'),
(16, '13', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853783about-banner.jpg', 'undefined', '', 0, '2024-05-29 05:44:27'),
(17, '14', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853931about-banner.jpg', 'undefined', '', 0, '2024-05-29 05:44:27'),
(18, '15', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853783about-banner.jpg', 'undefined', '', 0, '2024-05-29 05:44:27'),
(19, '16', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853931about-banner.jpg', 'undefined', '', 0, '2024-05-29 05:44:27');
INSERT INTO `content_master` (`content_id`, `section`, `page`, `header`, `content`, `extra_content`, `image`, `video`, `academicimage`, `del_status`, `created_date`) VALUES
(20, '17', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853783about-banner.jpg', 'undefined', '', 0, '2024-05-29 05:44:27'),
(21, '18', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853931about-banner.jpg', 'undefined', '', 0, '2024-05-29 05:44:27'),
(22, '19', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853783about-banner.jpg', 'undefined', '', 0, '2024-05-29 05:44:27'),
(23, '20', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853931about-banner.jpg', 'undefined', '', 0, '2024-05-29 05:44:27'),
(24, '21', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853783about-banner.jpg', 'undefined', '', 0, '2024-05-29 05:44:27'),
(25, '22', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853931about-banner.jpg', 'undefined', '', 0, '2024-05-29 05:44:27'),
(26, '23', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853783about-banner.jpg', 'undefined', '', 0, '2024-05-29 05:44:27'),
(27, '24', '', 'Headings', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\n', '', '1628853931about-banner.jpg', 'undefined', NULL, 0, '2024-05-29 05:44:27'),
(1, '1', '', 'Banner1', '<p>&lt;h1&gt;A fully outsourced catering provision for their &lt;b&gt;schools and colleges.&lt;/b&gt;&lt;/h1&gt;</p>\n', '', 'upload problem', 'undefined', '', 1, '2024-05-29 05:45:42'),
(2, '1', '', 'Banner2', '<p>&nbsp;</p>\n\n<h1>A fully outsourced catering provision for their <strong>schools and colleges.</strong></h1>\n\n<p>&nbsp;</p>\n', '', '1628767025banner-img.jpg', 'undefined', NULL, 0, '2024-05-29 05:45:42'),
(3, '2', '', 'We Provide', '<h3>Heathy Eating and Nutrition</h3>\n', '', '1628767908weprovide-1.png', 'undefined', '', 1, '2024-05-29 05:45:42'),
(4, '3', '', 'A Brief About us', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\n', '', '1628768032about-img.png', 'undefined', '', 0, '2024-05-29 05:45:42'),
(5, '4', '', 'What company does', '<h4>Vending machines on a full service basis to the education, workplace, health and leisure sectors</h4>\n', '', '1628768182what_company_does.jpg', 'undefined', '', 0, '2024-05-29 05:45:42'),
(6, '4', '', 'What company does', '<h4>19 litre bottle water coolers at no charge to clients with a re-stocking supply of 19 litre bottled water as demand dictates.</h4>\n', '', '1628768251what_company_does-2.jpg', 'undefined', NULL, 0, '2024-05-29 05:45:42'),
(7, '6', '', 'For School or colleges', '<ul>\n	<li>Exciting menus each term to utilise seasonal produce</li>\n	<li>Freshly cooked meals using raw ingredients</li>\n	<li>Freshly baked puddings and biscuits</li>\n	<li>Theme days and Christmas dinners</li>\n	<li>Packed lunches for school outings</li>\n	<li>Online pre-ordering with access to all our recipes</li>\n	<li>Payments by card (pre-pay top up) or Direct Debit (post payment, monthly)</li>\n</ul>\n', '', '', 'undefined', NULL, 0, '2024-05-29 05:45:42'),
(8, '7', '', 'For Parents', '<ul>\n	<li>Exciting menus each term to utilise seasonal produce</li>\n	<li>Freshly cooked meals using raw ingredients</li>\n	<li>Freshly baked puddings and biscuits</li>\n	<li>Theme days and Christmas dinners</li>\n	<li>Packed lunches for school outings</li>\n	<li>Online pre-ordering with access to all our recipes</li>\n	<li>Payments by card (pre-pay top up) or Direct Debit (post payment, monthly)</li>\n</ul>\n', '', '', 'undefined', NULL, 0, '2024-05-29 05:45:42'),
(9, '5', '', 'Client Says', '<p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. cumsan lacus vel facilisis.</p>\n', '', '1628768662clients-1.jpg', 'undefined', '', 1, '2024-05-29 05:45:42'),
(10, '8', '', 'About Us', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\n', '', '1628847491about-banner.jpg', 'undefined', '', 0, '2024-05-29 05:45:42'),
(11, '9', '', 'Employee Recognition', '<p>We operate in a seamless fashion and ensure that the efficiency of our workforce benefits them as well.</p>\n', '', '1628847571about1.jpg', 'undefined', '', 0, '2024-05-29 05:45:42'),
(12, '9', '', 'Operational Excellence', '<p>We operate in a seamless fashion and ensure that the efficiency of our workforce benefits them as well.</p>\n', '', '1628847653about2.jpg', 'undefined', '', 0, '2024-05-29 05:45:42'),
(13, '9', '', 'Responsibility', '<p>We operate in a seamless fashion and ensure that the efficiency of our workforce benefits them as well.</p>\n', '', '1628847698about3.jpg', 'undefined', '', 0, '2024-05-29 05:45:42'),
(14, '10', '', ' Allergens and Dietary Information', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\n', '', '1628853783about-banner.jpg', 'undefined', '', 0, '2024-05-29 05:45:42'),
(15, '11', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\n', '', '1628853931about-banner.jpg', 'undefined', '', 0, '2024-05-29 05:45:42'),
(16, '13', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853783about-banner.jpg', 'undefined', '', 0, '2024-05-29 05:45:42'),
(17, '14', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853931about-banner.jpg', 'undefined', '', 0, '2024-05-29 05:45:42'),
(18, '15', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853783about-banner.jpg', 'undefined', '', 0, '2024-05-29 05:45:42'),
(19, '16', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853931about-banner.jpg', 'undefined', '', 0, '2024-05-29 05:45:42'),
(20, '17', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853783about-banner.jpg', 'undefined', '', 0, '2024-05-29 05:45:42'),
(21, '18', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853931about-banner.jpg', 'undefined', '', 0, '2024-05-29 05:45:42'),
(22, '19', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853783about-banner.jpg', 'undefined', '', 0, '2024-05-29 05:45:42'),
(23, '20', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853931about-banner.jpg', 'undefined', '', 0, '2024-05-29 05:45:42'),
(24, '21', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853783about-banner.jpg', 'undefined', '', 0, '2024-05-29 05:45:42'),
(25, '22', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853931about-banner.jpg', 'undefined', '', 0, '2024-05-29 05:45:42'),
(26, '23', '', 'Heading', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n', '', '1628853783about-banner.jpg', 'undefined', '', 0, '2024-05-29 05:45:42'),
(27, '24', '', 'Headings', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\n', '', '1628853931about-banner.jpg', 'undefined', NULL, 0, '2024-05-29 05:45:42');

-- --------------------------------------------------------

--
-- Table structure for table `csvhelp_master`
--

CREATE TABLE `csvhelp_master` (
  `csvhelp_id` int(11) NOT NULL,
  `order_id` varchar(255) DEFAULT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `school_name` varchar(255) DEFAULT NULL,
  `timeslot_name` varchar(200) DEFAULT NULL,
  `food_name` varchar(200) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `date_of_food` date NOT NULL,
  `details_order_date` date NOT NULL,
  `del_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `daily_expense_details_master`
--

CREATE TABLE `daily_expense_details_master` (
  `daily_expense_details_id` int(11) NOT NULL,
  `daily_expense_id` int(11) NOT NULL,
  `food_id` int(11) DEFAULT NULL,
  `item_name` varchar(255) NOT NULL,
  `size_id` int(11) DEFAULT NULL,
  `unit_price` decimal(10,2) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `quantity_in_ml` int(11) NOT NULL,
  `del_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daily_expense_details_master`
--

INSERT INTO `daily_expense_details_master` (`daily_expense_details_id`, `daily_expense_id`, `food_id`, `item_name`, `size_id`, `unit_price`, `amount`, `quantity_in_ml`, `del_status`) VALUES
(1, 1, NULL, 'CARLSBERG PREMIUM ELEPHANT DANISH PILSNER BEER\n, 650 Ml.', NULL, '153.44', '11047.68', 72, 0),
(2, 1, NULL, 'Seagram\'s Imperial Blue Blended Grain Whisky , 180 Ml.', NULL, '138.63', '6654.24', 48, 0),
(3, 9, 0, 'vegetable', 0, '159.15', '3183.00', 20, 0);

-- --------------------------------------------------------

--
-- Table structure for table `daily_expense_master`
--

CREATE TABLE `daily_expense_master` (
  `daily_expense_id` int(11) NOT NULL,
  `invoice_no` varchar(255) NOT NULL,
  `purchase_total_price` decimal(10,2) NOT NULL,
  `total_quantity` int(11) NOT NULL,
  `stock_entry_date` datetime NOT NULL DEFAULT current_timestamp(),
  `bill_date` date NOT NULL DEFAULT current_timestamp(),
  `type` varchar(255) NOT NULL,
  `purchase_bill` varchar(255) NOT NULL,
  `comments` longtext DEFAULT NULL,
  `del_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daily_expense_master`
--

INSERT INTO `daily_expense_master` (`daily_expense_id`, `invoice_no`, `purchase_total_price`, `total_quantity`, `stock_entry_date`, `bill_date`, `type`, `purchase_bill`, `comments`, `del_status`) VALUES
(9, 'F2024', '3183.00', 20, '2024-08-01 12:29:14', '2024-08-01', 'Food', '172251535423.pdf', '', 0),
(10, 'F-23', '1619.00', 0, '2024-08-01 18:07:11', '2024-08-01', 'Other', '1722535631expense.csv', '', 0),
(11, 'v010601582', '2106.00', 0, '2024-08-05 14:45:21', '2024-08-05', 'Other', '1722869121WhatsApp_Image_2024-08-05_at_8.13.47_PM.jpeg', 'biplab agency copld drinks', 0),
(12, 'g1', '281.00', 0, '2024-08-05 14:56:55', '2024-08-05', 'Other', '1722869814WhatsApp_Image_2024-08-04_at_12.02.05_AMWhatsApp_Image_2024-08-04_at_12.02.05_AM.jpeg', 'grocery milk  doi', 0),
(15, 'e-01', '1100.00', 0, '2024-08-05 16:48:02', '2024-08-05', 'Eletricity', '1722876482WhatsApp_Image_2024-08-05_at_10.16.05_PM.jpeg', 'staf room electric bill', 0),
(16, 's-10', '120.00', 0, '2024-08-05 16:52:34', '2024-08-05', 'Other', '1722876754WhatsApp_Image_2024-08-05_at_10.21.43_PM.jpeg', 'spoon tissue travelling', 0),
(17, 's-9', '1321.00', 0, '2024-08-05 16:55:18', '2024-08-05', 'Other', '1722876918WhatsApp_Image_2024-08-05_at_9.45.46_PM.jpeg', 'grocery', 0),
(18, 's-8', '500.00', 0, '2024-08-05 17:04:56', '2024-08-05', 'Other', '1722877496WhatsApp_Image_2024-08-05_at_10.34.08_PM.jpeg', 'ashit furniture', 0),
(19, 's-7', '100.00', 0, '2024-08-05 17:26:11', '2024-08-05', 'Other', '1722878771WhatsApp_Image_2024-08-05_at_10.55.52_PM.jpeg', 'sajal sir paratha', 0),
(20, 's-6', '1640.00', 0, '2024-08-05 17:41:03', '2024-08-05', 'Salary', '1722879663WhatsApp_Image_2024-08-05_at_11.10.34_PM.jpeg', 'anjan bhatta', 0),
(21, 's-5', '140.00', 0, '2024-08-05 17:44:33', '2024-08-05', 'Other', '1722879873WhatsApp_Image_2024-08-05_at_11.13.41_PM.jpeg', 'cash back to tips', 0),
(22, 's-4', '4046.00', 0, '2024-08-05 17:46:04', '2024-08-05', 'Vegetables', '1722879964WhatsApp_Image_2024-08-05_at_11.13.41_PM.jpeg', 'sapan veg ', 0),
(23, 's-3', '2000.00', 0, '2024-08-05 17:47:26', '2024-08-05', 'Other', '1722880046WhatsApp_Image_2024-08-05_at_10.55.52_PM.jpeg', 'maa variety store', 0);

-- --------------------------------------------------------

--
-- Table structure for table `food_master`
--

CREATE TABLE `food_master` (
  `food_id` int(11) NOT NULL,
  `food_item_code` int(11) NOT NULL,
  `food_name` varchar(255) NOT NULL,
  `food_description` varchar(255) NOT NULL,
  `category_id` varchar(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `food_image` varchar(255) NOT NULL,
  `del_status` int(11) NOT NULL DEFAULT 0,
  `food_status` varchar(11) NOT NULL DEFAULT '0' COMMENT '0-Active , 1 -Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `food_master`
--

INSERT INTO `food_master` (`food_id`, `food_item_code`, `food_name`, `food_description`, `category_id`, `sub_category_id`, `food_image`, `del_status`, `food_status`) VALUES
(1, 1, 'Paneer Malai Tikka\n', 'Paneer Malai Tikka\n', '1', 1, '1.jpg', 0, '0'),
(2, 2, 'Achari Paneer Tikka', 'Achari Paneer Tikka', '1', 1, '1.jpg', 0, '0'),
(3, 3, 'Hara Bhara Kebab', 'Hara Bhara Kebab', '1', 1, '1.jpg', 0, '0'),
(4, 4, 'Dahi Kabab', 'Dahi Kabab', '1', 1, '1.jpg', 0, '0'),
(5, 5, 'Tandoori Aloo', 'Tandoori Aloo', '1', 1, '1.jpg', 0, '0'),
(6, 6, 'Chatpata Mushroom', 'Chatpata Mushroom', '1', 1, '1.jpg', 0, '0'),
(7, 7, 'Tandoori Babycorn', 'Tandoori Babycorn', '1', 1, '1.jpg', 0, '0'),
(8, 8, 'Palak Paneer', 'Palak Paneer', '1', 1, '1.jpg', 0, '0'),
(9, 9, 'Paneer Tikka Masala', 'Paneer Tikka Masala', '1', 1, '1.jpg', 0, '0'),
(10, 10, 'Paneer Butter Masala', 'Paneer Butter Masala', '1', 1, '1.jpg', 0, '0'),
(11, 11, 'Veg Jaipuri', 'Veg Jaipuri', '1', 1, '1.jpg', 0, '0'),
(12, 12, 'Kadai Sabji', 'Kadai Sabji', '1', 1, '1.jpg', 0, '0'),
(13, 13, 'Tawa Sabji', 'Tawa Sabji', '1', 1, '1.jpg', 0, '0'),
(14, 14, 'Sabji Mili Jhuli', 'Sabji Mili Jhuli', '1', 1, '1.jpg', 0, '0'),
(15, 15, 'Veg Kofta', 'Veg Kofta', '1', 1, '1.jpg', 0, '0'),
(16, 16, 'Navaratan Korma', 'Navaratan Korma', '1', 1, '1.jpg', 0, '0'),
(17, 17, 'Paneer Lababdar', 'Paneer Lababdar', '1', 1, '1.jpg', 0, '0'),
(18, 18, 'Paneer Taka Tak', 'Paneer Taka Tak', '1', 1, '1.jpg', 0, '0'),
(19, 19, 'Methi Malai Corn', 'Methi Malai Corn', '1', 1, '1.jpg', 0, '0'),
(20, 20, 'Corn Hara Masala', 'Corn Hara Masala', '1', 1, '1.jpg', 0, '0'),
(21, 21, 'Kashmiri Dum Aloo', 'Kashmiri Dum Aloo', '1', 1, '1.jpg', 0, '0'),
(22, 22, 'Dum Aloo Achari', 'Dum Aloo Achari', '1', 1, '1.jpg', 0, '0'),
(23, 23, 'Dal Tadkawali', 'Dal Tadkawali', '1', 1, '1.jpg', 0, '0'),
(24, 24, 'Kali Dal', 'Kali Dal', '1', 1, '1.jpg', 0, '0'),
(25, 25, 'Dal Fry', 'Dal Fry', '1', 1, '1.jpg', 0, '0'),
(26, 26, 'Jeera Dal', 'Jeera Dal', '1', 1, '1.jpg', 0, '0'),
(27, 27, 'Mushroom Takatak', 'Mushroom Takatak', '1', 1, '1.jpg', 0, '0'),
(28, 55, 'Mutton Masala', 'Mutton Masala', '1', 1, '1.jpg', 0, '0'),
(29, 56, 'Gosht Dahiwala', 'Gosht Dahiwala', '1', 1, '1.jpg', 0, '0'),
(30, 57, 'Mutton Do Piaza', 'Mutton Do Piaza', '1', 1, '1.jpg', 0, '0'),
(31, 58, 'Gosht Dum Handi', 'Gosht Dum Handi', '1', 1, '1.jpg', 0, '0'),
(32, 59, 'Mutton Kasa', 'Mutton Kasa', '1', 1, '1.jpg', 0, '0'),
(33, 60, 'Rara Gosht', 'Rara Gosht', '1', 1, '1.jpg', 0, '0'),
(34, 61, 'Bhuna Gosht', 'Bhuna Gosht', '1', 1, '1.jpg', 0, '0'),
(35, 99, 'Chinese Salad', 'Chinese Salad', '1', 1, '1.jpg', 0, '0'),
(36, 100, 'Green Salad', 'Green Salad', '1', 1, '1.jpg', 0, '0'),
(37, 101, 'Cucumber Salad', 'Cucumber Salad', '1', 1, '1.jpg', 0, '0'),
(38, 102, 'Russian Salad (Veg)', 'Russian Salad (Veg)', '1', 1, '1.jpg', 0, '0'),
(39, 103, 'Russian Salad (Non- Veg)', 'Russian Salad (Non- Veg)', '1', 1, '1.jpg', 0, '0'),
(40, 104, 'Mixed Raita', 'Mixed Raita', '1', 1, '1.jpg', 0, '0'),
(41, 105, 'Pinapple Raita', 'Pinapple Raita', '1', 1, '1.jpg', 0, '0'),
(42, 106, 'Boondi Raita', 'Boondi Raita', '1', 1, '1.jpg', 0, '0'),
(43, 107, 'Kachumber Salad', 'Kachumber Salad', '1', 1, '1.jpg', 0, '0'),
(44, 108, 'Plain Raita', 'Plain Raita', '1', 1, '1.jpg', 0, '0'),
(45, 92, 'Veg Pulao', 'Veg Pulao', '1', 1, '1.jpg', 0, '0'),
(46, 93, 'Peas Pulao', 'Peas Pulao', '1', 1, '1.jpg', 0, '0'),
(47, 94, 'Jeera Pulao', 'Jeera Pulao', '1', 1, '1.jpg', 0, '0'),
(48, 95, 'Chicken Pulao', 'Chicken Pulao', '1', 1, '1.jpg', 0, '0'),
(49, 96, 'Mutton Pulao', 'Mutton Pulao', '1', 1, '1.jpg', 0, '0'),
(50, 28, 'Tandoori Chicken (Full-4 pcs)', 'Tandoori Chicken (Full-4 pcs)', '1', 1, '1.jpg', 0, '0'),
(51, 29, 'Tandoori Chicken (Half-2', 'Tandoori Chicken (Half-2', '1', 1, '1.jpg', 0, '0'),
(52, 30, 'Chicken Tikka Kebab (6pcs)', 'Chicken Tikka Kebab (6pcs)', '1', 1, '1.jpg', 0, '0'),
(53, 31, 'Chicken MALAI Kebab (6 pcs)', 'Chicken MALAI Kebab (6 pcs)', '1', 1, '1.jpg', 0, '0'),
(54, 32, 'Chicken Banjara Kebab pcs)', 'Chicken Banjara Kebab pcs)', '1', 1, '1.jpg', 0, '0'),
(55, 33, 'Chicken Pudina Kebab (6 pcs)', 'Chicken Pudina Kebab (6 pcs)', '1', 1, '1.jpg', 0, '0'),
(56, 34, 'Tangri Kebab (3 pcs)', 'Tangri Kebab (3 pcs)', '1', 1, '1.jpg', 0, '0'),
(57, 35, 'Tandoori Bhetki (full-', 'Tandoori Bhetki (full-', '1', 1, '1.jpg', 0, '0'),
(58, 36, 'Tandoori Prawn', 'Tandoori Prawn', '1', 1, '1.jpg', 0, '0'),
(59, 37, 'Mutton Seekh Kebab', 'Mutton Seekh Kebab', '1', 1, '1.jpg', 0, '0'),
(60, 38, 'Palki Bada Thali', 'Palki Bada Thali', '1', 1, '1.jpg', 0, '0'),
(61, 39, 'Achari Murgh', 'Achari Murgh', '1', 1, '1.jpg', 0, '0'),
(62, 40, 'Chicken Piaza', 'Chicken Piaza', '1', 1, '1.jpg', 0, '0'),
(63, 41, 'Murgh Lahori Masala', 'Murgh Lahori Masala', '1', 1, '1.jpg', 0, '0'),
(64, 42, 'Murgh Makhani', 'Murgh Makhani', '1', 1, '1.jpg', 0, '0'),
(65, 43, 'Chicken Jhalfrezi', 'Chicken Jhalfrezi', '1', 1, '1.jpg', 0, '0'),
(66, 44, 'Chicken Reshmi Butter Masala', 'Chicken Reshmi Butter Masala', '1', 1, '1.jpg', 0, '0'),
(67, 45, 'Chicken Bharta', 'Chicken Bharta', '1', 1, '1.jpg', 0, '0'),
(68, 46, 'Tawa Murgh', 'Tawa Murgh', '1', 1, '1.jpg', 0, '0'),
(69, 47, 'Chicken Kassa', 'Chicken Kassa', '1', 1, '1.jpg', 0, '0'),
(70, 48, 'Chicken Lababdar', 'Chicken Lababdar', '1', 1, '1.jpg', 0, '0'),
(71, 49, 'Hydrabadi Murgh', 'Hydrabadi Murgh', '1', 1, '1.jpg', 0, '0'),
(72, 50, 'Kadai Chicken', 'Kadai Chicken', '1', 1, '1.jpg', 0, '0'),
(73, 51, 'Fish Tawa Masala', 'Fish Tawa Masala', '1', 1, '1.jpg', 0, '0'),
(74, 52, 'Gulzar -E- Machli', 'Gulzar -E- Machli', '1', 1, '1.jpg', 0, '0'),
(75, 53, 'Kadai Fish', 'Kadai Fish', '1', 1, '1.jpg', 0, '0'),
(76, 54, 'Kolkata Bhetki Masala', 'Kolkata Bhetki Masala', '1', 1, '1.jpg', 0, '0'),
(77, 88, 'Tandoori Prawn Masala', 'Tandoori Prawn Masala', '1', 1, '1.jpg', 0, '0'),
(78, 89, 'Prawn Malai Carry', 'Prawn Malai Carry', '1', 1, '1.jpg', 0, '0'),
(79, 90, 'Prawn Lahori Masala', 'Prawn Lahori Masala', '1', 1, '1.jpg', 0, '0'),
(80, 74, 'Roasted Papad', 'Roasted Papad', '1', 1, '1.jpg', 0, '0'),
(81, 75, 'Fried Papad', 'Fried Papad', '1', 1, '1.jpg', 0, '0'),
(82, 76, 'Roasted Masala Papad', 'Roasted Masala Papad', '1', 1, '1.jpg', 0, '0'),
(83, 77, 'Fried Masala Papad', 'Fried Masala Papad', '1', 1, '1.jpg', 0, '0'),
(84, 62, 'Tandoori Roti', 'Tandoori Roti', '1', 1, '1.jpg', 0, '0'),
(85, 63, 'Butter Tandoori Roti', 'Butter Tandoori Roti', '1', 1, '1.jpg', 0, '0'),
(86, 64, 'Methi Roti', 'Methi Roti', '1', 1, '1.jpg', 0, '0'),
(87, 65, 'Plain Naan', 'Plain Naan', '1', 1, '1.jpg', 0, '0'),
(88, 66, 'Butter Naan', 'Butter Naan', '1', 1, '1.jpg', 0, '0'),
(89, 67, 'Cheese Naan', 'Cheese Naan', '1', 1, '1.jpg', 0, '0'),
(90, 68, 'Kashmiri Naan', 'Kashmiri Naan', '1', 1, '1.jpg', 0, '0'),
(91, 69, 'Plain Kulcha', 'Plain Kulcha', '1', 1, '1.jpg', 0, '0'),
(92, 70, 'Masala Kulcha', 'Masala Kulcha', '1', 1, '1.jpg', 0, '0'),
(93, 71, 'Lachedar Parantha', 'Lachedar Parantha', '1', 1, '1.jpg', 0, '0'),
(94, 72, 'Methi Paratha', 'Methi Paratha', '1', 1, '1.jpg', 0, '0'),
(95, 73, 'Roti Ki Tokri', 'Roti Ki Tokri', '1', 1, '1.jpg', 0, '0'),
(96, 97, 'Chicken Dum Biriyani', 'Chicken Dum Biriyani', '1', 1, '1.jpg', 0, '0'),
(97, 98, 'Mutton Dum Biriyani', 'Mutton Dum Biriyani', '1', 1, '1.jpg', 0, '0'),
(98, 91, 'Steam Rice', 'Steam Rice', '1', 1, '1.jpg', 0, '0'),
(99, 390, 'Ches Cherry Pineapple', 'Ches Cherry Pineapple', '1', 1, '1.jpg', 0, '0'),
(100, 109, 'Mexican Fried Ice cream', 'Mexican Fried Ice cream', '1', 1, '1.jpg', 0, '0'),
(101, 110, 'Tutti Fruity', 'Tutti Fruity', '1', 1, '1.jpg', 0, '0'),
(102, 111, 'Single Sundae', 'Single Sundae', '1', 1, '1.jpg', 0, '0'),
(103, 112, 'Double Sundae', 'Double Sundae', '1', 1, '1.jpg', 0, '0'),
(104, 113, 'Plain Ice Cream', 'Plain Ice Cream', '1', 1, '1.jpg', 0, '0'),
(105, 114, 'Gulab Jamun', 'Gulab Jamun', '1', 1, '1.jpg', 0, '0'),
(106, 115, 'Rasgulla', 'Rasgulla', '1', 1, '1.jpg', 0, '0'),
(107, 78, 'Aerated Drinks', 'Aerated Drinks', '1', 1, '1.jpg', 0, '0'),
(108, 79, 'Mango', 'Mango', '1', 1, '1.jpg', 0, '0'),
(109, 80, 'Orange', 'Orange', '1', 1, '1.jpg', 0, '0'),
(110, 81, 'Pineapple', 'Pineapple', '1', 1, '1.jpg', 0, '0'),
(111, 82, 'Mixed Fruit', 'Mixed Fruit', '1', 1, '1.jpg', 0, '0'),
(112, 83, 'Fresh Lime Soda', 'Fresh Lime Soda', '1', 1, '1.jpg', 0, '0'),
(113, 84, 'Lassi', 'Lassi', '1', 1, '1.jpg', 0, '0'),
(114, 85, 'Masala Cola', 'Masala Cola', '1', 1, '1.jpg', 0, '0'),
(115, 86, 'Jal jeera', 'Jal jeera', '1', 1, '1.jpg', 0, '0'),
(116, 87, 'Cucumber Mint Punch', 'Cucumber Mint Punch', '1', 1, '1.jpg', 0, '0'),
(117, 116, 'Shikari Aloo', 'Shikari Aloo', '1', 1, '1.jpg', 0, '0'),
(118, 124, 'Lasuni Murgh Tikka', 'Lasuni Murgh Tikka', '1', 1, '1.jpg', 0, '0'),
(119, 125, 'Machli Ajwain Tikka', 'Machli Ajwain Tikka', '1', 1, '1.jpg', 0, '0'),
(120, 126, 'Mutton Boti Kebab', 'Mutton Boti Kebab', '1', 1, '1.jpg', 0, '0'),
(121, 120, 'Punjabi Dum Aloo', 'Punjabi Dum Aloo', '1', 1, '1.jpg', 0, '0'),
(122, 121, 'Subji Milloni', 'Subji Milloni', '1', 1, '1.jpg', 0, '0'),
(123, 122, 'Dal Haryali', 'Dal Haryali', '1', 1, '1.jpg', 0, '0'),
(124, 123, 'Dal Pancharatni', 'Dal Pancharatni', '1', 1, '1.jpg', 0, '0'),
(125, 129, 'Chicken Tandoori Butter Masala', 'Chicken Tandoori Butter Masala', '1', 1, '1.jpg', 0, '0'),
(126, 130, 'Rajasthani Hara Murgh', 'Rajasthani Hara Murgh', '1', 1, '1.jpg', 0, '0'),
(127, 131, 'Mutton Rogan Josh', 'Mutton Rogan Josh', '1', 1, '1.jpg', 0, '0'),
(128, 132, 'Fish Begam Bahar', 'Fish Begam Bahar', '1', 1, '1.jpg', 0, '0'),
(129, 117, 'Kashmiri Pulao', 'Kashmiri Pulao', '1', 1, '1.jpg', 0, '0'),
(130, 118, 'Chicken Hydrabadi Biriyani', 'Chicken Hydrabadi Biriyani', '1', 1, '1.jpg', 0, '0'),
(131, 119, 'Chelo Kebab', 'Chelo Kebab', '1', 1, '1.jpg', 0, '0'),
(132, 127, 'Jeera Roti', 'Jeera Roti', '1', 1, '1.jpg', 0, '0'),
(133, 128, 'Hara Lasuni Naan', 'Hara Lasuni Naan', '1', 1, '1.jpg', 0, '0'),
(134, 140, 'Veg Clear Soup', 'Veg Clear Soup', '1', 1, '1.jpg', 0, '0'),
(135, 141, 'Veg Sweet Corn Soup', 'Veg Sweet Corn Soup', '1', 1, '1.jpg', 0, '0'),
(136, 142, 'Veg Hot & Sour Soup', 'Veg Hot & Sour Soup', '1', 1, '1.jpg', 0, '0'),
(137, 143, 'Veg Burnt Garlic Soup', 'Veg Burnt Garlic Soup', '1', 1, '1.jpg', 0, '0'),
(138, 144, 'Veg Lemon Corrinder Soup', 'Veg Lemon Corrinder Soup', '1', 1, '1.jpg', 0, '0'),
(139, 145, 'Veg Manchow Soup', 'Veg Manchow Soup', '1', 1, '1.jpg', 0, '0'),
(140, 146, 'Eight Treasure Soup', 'Eight Treasure Soup', '1', 1, '1.jpg', 0, '0'),
(141, 147, 'Paneer Yaki Tori (Full)', 'Paneer Yaki Tori (Full)', '1', 1, '1.jpg', 0, '0'),
(142, 148, 'Paneer Yaki Tori (Half)', 'Paneer Yaki Tori (Half)', '1', 1, '1.jpg', 0, '0'),
(143, 149, 'Paneer Cheese Ball (Full)', 'Paneer Cheese Ball (Full)', '1', 1, '1.jpg', 0, '0'),
(144, 150, 'Paneer Cheese Ball (Half)', 'Paneer Cheese Ball (Half)', '1', 1, '1.jpg', 0, '0'),
(145, 151, 'Pan Fried Chilli Paneer', 'Pan Fried Chilli Paneer', '1', 1, '1.jpg', 0, '0'),
(146, 152, 'American Corn Spinach', 'American Corn Spinach', '1', 1, '1.jpg', 0, '0'),
(147, 153, 'Stir Fry Veg', 'Stir Fry Veg', '1', 1, '1.jpg', 0, '0'),
(148, 154, 'Chilly Babycorn Mushroom', 'Chilly Babycorn Mushroom', '1', 1, '1.jpg', 0, '0'),
(149, 155, 'Chilly Babycorn', 'Chilly Babycorn', '1', 1, '1.jpg', 0, '0'),
(150, 156, 'French Fry', 'French Fry', '1', 1, '1.jpg', 0, '0'),
(151, 157, 'Chilly Finger Chips', 'Chilly Finger Chips', '1', 1, '1.jpg', 0, '0'),
(152, 158, 'Devil Mushroom', 'Devil Mushroom', '1', 1, '1.jpg', 0, '0'),
(153, 159, 'Crispy Mushroom Pepper Salt', 'Crispy Mushroom Pepper Salt', '1', 1, '1.jpg', 0, '0'),
(154, 160, 'Chicken Clear Soup', 'Chicken Clear Soup', '1', 1, '1.jpg', 0, '0'),
(155, 161, 'Chicken Burnt Garlic Soup', 'Chicken Burnt Garlic Soup', '1', 1, '1.jpg', 0, '0'),
(156, 162, 'Chicken Lemon Corrinder Soup', 'Chicken Lemon Corrinder Soup', '1', 1, '1.jpg', 0, '0'),
(157, 163, 'Chicken Sweet Corn Soup', 'Chicken Sweet Corn Soup', '1', 1, '1.jpg', 0, '0'),
(158, 164, 'Chicken Hot & Sour Soup', 'Chicken Hot & Sour Soup', '1', 1, '1.jpg', 0, '0'),
(159, 165, 'Chicken Manchow Soup', 'Chicken Manchow Soup', '1', 1, '1.jpg', 0, '0'),
(160, 166, 'Fish Meat Ball Soup', 'Fish Meat Ball Soup', '1', 1, '1.jpg', 0, '0'),
(161, 167, 'Mixed Thai Soup', 'Mixed Thai Soup', '1', 1, '1.jpg', 0, '0'),
(162, 168, 'Chicken Noodles Soup', 'Chicken Noodles Soup', '1', 1, '1.jpg', 0, '0'),
(163, 169, 'Diced Chicken pepper Ginger & Garlic', 'Diced Chicken pepper Ginger & Garlic', '1', 1, '1.jpg', 0, '0'),
(164, 170, 'Chicken Konjee', 'Chicken Konjee', '1', 1, '1.jpg', 0, '0'),
(165, 171, 'Palki Triple Delight', 'Palki Triple Delight', '1', 1, '1.jpg', 0, '0'),
(166, 172, 'Takrai Chicken', 'Takrai Chicken', '1', 1, '1.jpg', 0, '0'),
(167, 173, 'Pan fried Chicken', 'Pan fried Chicken', '1', 1, '1.jpg', 0, '0'),
(168, 174, 'Drums of Heaven', 'Drums of Heaven', '1', 1, '1.jpg', 0, '0'),
(169, 175, 'Chicken Lollypop', 'Chicken Lollypop', '1', 1, '1.jpg', 0, '0'),
(170, 176, 'Bali Chicken', 'Bali Chicken', '1', 1, '1.jpg', 0, '0'),
(171, 177, 'Green Land Chicken', 'Green Land Chicken', '1', 1, '1.jpg', 0, '0'),
(172, 295, 'Shreeded Chicken', 'Shreeded Chicken', '1', 1, '1.jpg', 0, '0'),
(173, 296, 'Mountain Chicken', 'Mountain Chicken', '1', 1, '1.jpg', 0, '0'),
(174, 297, 'Salt & Pepper Fish', 'Salt & Pepper Fish', '1', 1, '1.jpg', 0, '0'),
(175, 298, 'Crispy Fish Garlic pepper', 'Crispy Fish Garlic pepper', '1', 1, '1.jpg', 0, '0'),
(176, 299, 'Fish Fry', 'Fish Fry', '1', 1, '1.jpg', 0, '0'),
(177, 300, 'Fish Finger', 'Fish Finger', '1', 1, '1.jpg', 0, '0'),
(178, 301, 'Golden Prawn', 'Golden Prawn', '1', 1, '1.jpg', 0, '0'),
(179, 302, 'Prawn Salt & Pepper', 'Prawn Salt & Pepper', '1', 1, '1.jpg', 0, '0'),
(180, 303, 'Veg Cantones', 'Veg Cantones', '1', 1, '1.jpg', 0, '0'),
(181, 304, 'Veg Sweet & Sour', 'Veg Sweet & Sour', '1', 1, '1.jpg', 0, '0'),
(182, 305, 'Veg Manchurian', 'Veg Manchurian', '1', 1, '1.jpg', 0, '0'),
(183, 306, 'Hot Garlic Veg', 'Hot Garlic Veg', '1', 1, '1.jpg', 0, '0'),
(184, 307, 'Chilly Paneer', 'Chilly Paneer', '1', 1, '1.jpg', 0, '0'),
(185, 308, 'Garlic Paneer', 'Garlic Paneer', '1', 1, '1.jpg', 0, '0'),
(186, 309, 'Chilly Mushroom', 'Chilly Mushroom', '1', 1, '1.jpg', 0, '0'),
(187, 310, 'Chilly Potato', 'Chilly Potato', '1', 1, '1.jpg', 0, '0'),
(188, 311, 'Szechwan Veg', 'Szechwan Veg', '1', 1, '1.jpg', 0, '0'),
(189, 312, 'Veg In Fire Sauce', 'Veg In Fire Sauce', '1', 1, '1.jpg', 0, '0'),
(190, 335, 'Chilly Chicken', 'Chilly Chicken', '1', 1, '1.jpg', 0, '0'),
(191, 336, 'Chicken Sweet & Sour', 'Chicken Sweet & Sour', '1', 1, '1.jpg', 0, '0'),
(192, 337, 'Babycorn Mushroom Chicken', 'Babycorn Mushroom Chicken', '1', 1, '1.jpg', 0, '0'),
(193, 338, 'Chicken Manchurian', 'Chicken Manchurian', '1', 1, '1.jpg', 0, '0'),
(194, 339, 'Hot & Galic Chicken', 'Hot & Galic Chicken', '1', 1, '1.jpg', 0, '0'),
(195, 340, 'Kung Pao Chicken', 'Kung Pao Chicken', '1', 1, '1.jpg', 0, '0'),
(196, 341, 'Hong Kang Chicken', 'Hong Kang Chicken', '1', 1, '1.jpg', 0, '0'),
(197, 342, 'Chicken Chilly Oyster Sauce', 'Chicken Chilly Oyster Sauce', '1', 1, '1.jpg', 0, '0'),
(198, 343, 'Sweet Galic chicken', 'Sweet Galic chicken', '1', 1, '1.jpg', 0, '0'),
(199, 344, 'Szechwan Chicken', 'Szechwan Chicken', '1', 1, '1.jpg', 0, '0'),
(200, 345, 'Palki Signature Chicken', 'Palki Signature Chicken', '1', 1, '1.jpg', 0, '0'),
(201, 313, 'Chilly Fish', 'Chilly Fish', '1', 1, '1.jpg', 0, '0'),
(202, 314, 'Hot Garlic Fish', 'Hot Garlic Fish', '1', 1, '1.jpg', 0, '0'),
(203, 315, 'Sweet Garlic Fish', 'Sweet Garlic Fish', '1', 1, '1.jpg', 0, '0'),
(204, 316, 'Szechwan Fish', 'Szechwan Fish', '1', 1, '1.jpg', 0, '0'),
(205, 317, 'Manchurian Fish', 'Manchurian Fish', '1', 1, '1.jpg', 0, '0'),
(206, 318, 'Whole Bhetki Chilly Oyster sauce', 'Whole Bhetki Chilly Oyster sauce', '1', 1, '1.jpg', 0, '0'),
(207, 319, 'Fish In exotic Veg', 'Fish In exotic Veg', '1', 1, '1.jpg', 0, '0'),
(208, 346, 'Chilly Prawn', 'Chilly Prawn', '1', 1, '1.jpg', 0, '0'),
(209, 347, 'Garlic Prawn', 'Garlic Prawn', '1', 1, '1.jpg', 0, '0'),
(210, 348, 'Red wine Prawn', 'Red wine Prawn', '1', 1, '1.jpg', 0, '0'),
(211, 349, 'Szechwan Prawn', 'Szechwan Prawn', '1', 1, '1.jpg', 0, '0'),
(212, 350, 'Hunan Prawn', 'Hunan Prawn', '1', 1, '1.jpg', 0, '0'),
(213, 351, 'Kung Pao Prawn', 'Kung Pao Prawn', '1', 1, '1.jpg', 0, '0'),
(214, 352, 'Hot Garlic Prawn', 'Hot Garlic Prawn', '1', 1, '1.jpg', 0, '0'),
(215, 353, 'Sweet & Sour prawn', 'Sweet & Sour prawn', '1', 1, '1.jpg', 0, '0'),
(216, 320, 'Veg Fried Rice', 'Veg Fried Rice', '1', 1, '1.jpg', 0, '0'),
(217, 321, 'Veg Szechwan Rice', 'Veg Szechwan Rice', '1', 1, '1.jpg', 0, '0'),
(218, 322, 'Veg Burnt Garlic Rice', 'Veg Burnt Garlic Rice', '1', 1, '1.jpg', 0, '0'),
(219, 323, 'Veg Chilly Dark Rice', 'Veg Chilly Dark Rice', '1', 1, '1.jpg', 0, '0'),
(220, 324, 'Veg Corainder Fried Rice', 'Veg Corainder Fried Rice', '1', 1, '1.jpg', 0, '0'),
(221, 325, 'Veg Chilly Garlic Rice', 'Veg Chilly Garlic Rice', '1', 1, '1.jpg', 0, '0'),
(222, 326, 'Veg Mushroom Onion Rice', 'Veg Mushroom Onion Rice', '1', 1, '1.jpg', 0, '0'),
(223, 354, 'Chicken Fried Rice', 'Chicken Fried Rice', '1', 1, '1.jpg', 0, '0'),
(224, 355, 'Egg Fried Rice', 'Egg Fried Rice', '1', 1, '1.jpg', 0, '0'),
(225, 356, 'Chicken szechwan Rice', 'Chicken szechwan Rice', '1', 1, '1.jpg', 0, '0'),
(226, 357, 'Chicken Burnt Garlic Rice', 'Chicken Burnt Garlic Rice', '1', 1, '1.jpg', 0, '0'),
(227, 358, 'Chicken Chilly Dark Rice', 'Chicken Chilly Dark Rice', '1', 1, '1.jpg', 0, '0'),
(228, 359, 'Chicken Corainder Fried Rice', 'Chicken Corainder Fried Rice', '1', 1, '1.jpg', 0, '0'),
(229, 360, 'Chicken Chilly Garlic Rice', 'Chicken Chilly Garlic Rice', '1', 1, '1.jpg', 0, '0'),
(230, 361, 'Chicken Mushroom Onion Rice', 'Chicken Mushroom Onion Rice', '1', 1, '1.jpg', 0, '0'),
(231, 362, 'Mixed Fried Rice', 'Mixed Fried Rice', '1', 1, '1.jpg', 0, '0'),
(232, 327, 'Veg Hakka Noodles', 'Veg Hakka Noodles', '1', 1, '1.jpg', 0, '0'),
(233, 328, 'Veg Singapore Noodles', 'Veg Singapore Noodles', '1', 1, '1.jpg', 0, '0'),
(234, 329, 'Veg Chilly Garlic Noodles', 'Veg Chilly Garlic Noodles', '1', 1, '1.jpg', 0, '0'),
(235, 330, 'Veg Pan fried Noodles', 'Veg Pan fried Noodles', '1', 1, '1.jpg', 0, '0'),
(236, 331, 'Veg Cantones Noodles', 'Veg Cantones Noodles', '1', 1, '1.jpg', 0, '0'),
(237, 332, 'Veg American Chopsuey', 'Veg American Chopsuey', '1', 1, '1.jpg', 0, '0'),
(238, 333, 'Veg Chinese Chopsuey', 'Veg Chinese Chopsuey', '1', 1, '1.jpg', 0, '0'),
(239, 334, 'Veg Maifaoon', 'Veg Maifaoon', '1', 1, '1.jpg', 0, '0'),
(240, 363, 'Chicken Hakka Noodles', 'Chicken Hakka Noodles', '1', 1, '1.jpg', 0, '0'),
(241, 364, 'Egg Hakka Noodles', 'Egg Hakka Noodles', '1', 1, '1.jpg', 0, '0'),
(242, 365, 'Chicken Singapore Noodles', 'Chicken Singapore Noodles', '1', 1, '1.jpg', 0, '0'),
(243, 366, 'Chicken Chilly Garlic Noodles', 'Chicken Chilly Garlic Noodles', '1', 1, '1.jpg', 0, '0'),
(244, 367, 'Chicken Pan fried Noodles', 'Chicken Pan fried Noodles', '1', 1, '1.jpg', 0, '0'),
(245, 368, 'Chicken Cantones Noodles', 'Chicken Cantones Noodles', '1', 1, '1.jpg', 0, '0'),
(246, 369, 'Chicken American Chopsuey', 'Chicken American Chopsuey', '1', 1, '1.jpg', 0, '0'),
(247, 370, 'Chicken Chinese Chopsuey', 'Chicken Chinese Chopsuey', '1', 1, '1.jpg', 0, '0'),
(248, 371, 'Chicken Maifaoon', 'Chicken Maifaoon', '1', 1, '1.jpg', 0, '0'),
(249, 372, 'Mixed Noodles', 'Mixed Noodles', '1', 1, '1.jpg', 0, '0'),
(250, 373, 'Minarel Water', 'Minarel Water', '1', 1, '1.jpg', 0, '0'),
(251, 374, 'Container', 'Container', '1', 1, '1.jpg', 0, '0'),
(252, 590, 'Soda', 'Soda', '1', 1, '1.jpg', 0, '0'),
(273, 750, 'SINGLE MALT', 'SINGLE MALT', '2', 5, '', 0, '0'),
(274, 506, 'CHIVAS REGAL', 'CHIVAS REGAL', '2', 5, '', 0, '0'),
(275, 514, 'JOHNNIE WALKER BLACK LABEL', 'JOHNNIE WALKER BLACK LABEL', '2', 5, '', 0, '0'),
(276, 600, 'BLACK DOG TRIPLE GOLD RESERVE ', 'BLACK DOG TRIPLE GOLD RESERVE ', '2', 5, '', 0, '0'),
(277, 512, '100 PIPER 12 YEARS ', '100 PIPER 12 YEARS ', '2', 5, '', 0, '0'),
(278, 520, 'JOHNNIE WALKER RED LABEL', 'JOHNNIE WALKER RED LABEL', '2', 5, '', 0, '0'),
(279, 516, 'TEACHER 50', 'TEACHER 50', '2', 5, '', 0, '0'),
(280, 528, 'VAT 69', 'VAT 69', '2', 5, '', 0, '0'),
(281, 524, 'TEACHER HIGHLAND CREAM ', 'TEACHER HIGHLAND CREAM ', '2', 5, '', 0, '0'),
(282, 530, '1OO PIPERS ', '1OO PIPERS ', '2', 5, '', 0, '0'),
(283, 534, 'ANTIQUITY BLUE ', 'ANTIQUITY BLUE ', '2', 8, '', 0, '0'),
(284, 544, 'BLENDERS PRIDE', 'BLENDERS PRIDE', '2', 8, '', 0, '0'),
(285, 610, 'BLENDERS PRIDE RESERVE ', 'BLENDERS PRIDE RESERVE ', '2', 8, '', 0, '0'),
(286, 620, 'SIGNATURE PREMIER', 'SIGNATURE PREMIER', '2', 8, '', 0, '0'),
(287, 622, 'OAKSMITH GOLD', 'OAKSMITH GOLD', '2', 8, '', 0, '0'),
(288, 566, 'BACARDI ', 'BACARDI ', '2', 9, '', 0, '0'),
(289, 570, 'OLD MONK', 'OLD MONK', '2', 9, '', 0, '0'),
(290, 571, 'OLD MONK RESERVE', 'OLD MONK RESERVE', '2', 9, '', 0, '0'),
(291, 574, 'CARLSBERG PREMIUM SMOOTH', 'CARLSBERG PREMIUM SMOOTH', '2', 11, '', 0, '0'),
(292, 575, 'BUDWEISER PREMIUM', 'BUDWEISER PREMIUM', '2', 11, '', 0, '0'),
(293, 576, 'KINGFISHER PREMIUM', 'KINGFISHER PREMIUM', '2', 11, '', 0, '0'),
(294, 578, 'TUBORG PREMIUM', 'TUBORG PREMIUM', '2', 11, '', 0, '0'),
(295, 545, 'CARLSBERG ELEPHENT STRONG', 'CARLSBERG ELEPHENT STRONG', '2', 9, '', 0, '0'),
(296, 593, 'BUDWEISER MAGNUM STRONG', 'BUDWEISER MAGNUM STRONG', '2', 11, '', 0, '0'),
(297, 546, 'TUBORG STRONG ', 'TUBORG STRONG ', '2', 11, '', 0, '0'),
(298, 547, 'KINGFISHER STRONG', 'KINGFISHER STRONG', '2', 11, '', 0, '0'),
(299, 596, 'KINGFISHER STROM ', 'KINGFISHER STROM ', '2', 11, '', 0, '0'),
(300, 504, 'TEQUILLA SILVER', 'TEQUILLA SILVER', '2', 6, '', 0, '0'),
(301, 502, 'TEQUILLA GOLD', 'TEQUILLA GOLD', '2', 6, '', 0, '0'),
(302, 558, 'ABSOLUT ', 'ABSOLUT ', '2', 7, '', 0, '0'),
(303, 560, 'SMIRNOFF', 'SMIRNOFF', '2', 7, '', 0, '0'),
(304, 608, 'MAGIC MOMENTS VERVE', 'MAGIC MOMENTS VERVE', '2', 7, '', 0, '0'),
(305, 564, 'MAGIC MOMENTS', 'MAGIC MOMENTS', '2', 7, '', 0, '0'),
(306, 584, 'BLUE HAWAIAAN', 'BLUE LAGOON', '2', 14, '', 0, '0'),
(307, 376, 'quik bite non veg', 'quick bite nonveg180', '1', 1, '', 0, '0'),
(308, 381, ' TandoriWings', 'TandoriWings', '1', 1, '', 0, '0'),
(309, 463, 'Tandori promfret ', 'Tandori promfret', '1', 1, '', 0, '0'),
(310, 384, 'peanuts masala', 'peanuts masala', '1', 1, '', 0, '0'),
(311, 377, 'veg quick bite', 'veg quick bite', '1', 1, '', 0, '0');

-- --------------------------------------------------------

--
-- Table structure for table `food_price_master`
--

CREATE TABLE `food_price_master` (
  `food_price_id` int(11) NOT NULL,
  `food_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `selling_price` decimal(10,2) NOT NULL,
  `type_id` int(11) NOT NULL,
  `del_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food_price_master`
--

INSERT INTO `food_price_master` (`food_price_id`, `food_id`, `size_id`, `selling_price`, `type_id`, `del_status`) VALUES
(1, 1, 1, '275.00', 1, 0),
(2, 2, 1, '275.00', 1, 0),
(3, 3, 1, '225.00', 1, 0),
(4, 4, 1, '230.00', 1, 0),
(5, 5, 1, '220.00', 1, 0),
(6, 6, 1, '275.00', 1, 0),
(7, 7, 1, '275.00', 1, 0),
(8, 8, 1, '275.00', 1, 0),
(9, 9, 1, '275.00', 1, 0),
(10, 10, 1, '280.00', 1, 0),
(11, 11, 1, '240.00', 1, 0),
(12, 12, 1, '240.00', 1, 0),
(13, 13, 1, '240.00', 1, 0),
(14, 14, 1, '245.00', 1, 0),
(15, 15, 1, '250.00', 1, 0),
(16, 16, 1, '260.00', 1, 0),
(17, 17, 1, '270.00', 1, 0),
(18, 18, 1, '280.00', 1, 0),
(19, 19, 1, '265.00', 1, 0),
(20, 20, 1, '265.00', 1, 0),
(21, 21, 1, '265.00', 1, 0),
(22, 22, 1, '245.00', 1, 0),
(23, 23, 1, '210.00', 1, 0),
(24, 24, 1, '225.00', 1, 0),
(25, 25, 1, '190.00', 1, 0),
(26, 26, 1, '190.00', 1, 0),
(27, 27, 1, '265.00', 1, 0),
(28, 28, 1, '390.00', 1, 0),
(29, 29, 1, '390.00', 1, 0),
(30, 30, 1, '390.00', 1, 0),
(31, 31, 1, '390.00', 1, 0),
(32, 32, 1, '390.00', 1, 0),
(33, 33, 1, '390.00', 1, 0),
(34, 34, 1, '390.00', 1, 0),
(35, 35, 1, '90.00', 1, 0),
(36, 36, 1, '90.00', 1, 0),
(37, 37, 1, '100.00', 1, 0),
(38, 38, 1, '140.00', 1, 0),
(39, 39, 1, '160.00', 1, 0),
(40, 40, 1, '105.00', 1, 0),
(41, 41, 1, '120.00', 1, 0),
(42, 42, 1, '100.00', 1, 0),
(43, 43, 1, '85.00', 1, 0),
(44, 44, 1, '95.00', 1, 0),
(45, 45, 1, '170.00', 1, 0),
(46, 46, 1, '180.00', 1, 0),
(47, 47, 1, '155.00', 1, 0),
(48, 48, 1, '200.00', 1, 0),
(49, 49, 1, '210.00', 1, 0),
(50, 50, 1, '400.00', 1, 0),
(51, 51, 1, '265.00', 1, 0),
(52, 52, 1, '325.00', 1, 0),
(53, 53, 1, '325.00', 1, 0),
(54, 54, 1, '335.00', 1, 0),
(55, 55, 1, '335.00', 1, 0),
(56, 56, 1, '330.00', 1, 0),
(57, 57, 1, '520.00', 1, 0),
(58, 58, 1, '590.00', 1, 0),
(59, 59, 1, '360.00', 1, 0),
(60, 60, 1, '490.00', 1, 0),
(61, 61, 1, '370.00', 1, 0),
(62, 62, 1, '350.00', 1, 0),
(63, 63, 1, '340.00', 1, 0),
(64, 64, 1, '340.00', 1, 0),
(65, 65, 1, '350.00', 1, 0),
(66, 66, 1, '355.00', 1, 0),
(67, 67, 1, '340.00', 1, 0),
(68, 68, 1, '340.00', 1, 0),
(69, 69, 1, '340.00', 1, 0),
(70, 70, 1, '355.00', 1, 0),
(71, 71, 1, '365.00', 1, 0),
(72, 72, 1, '365.00', 1, 0),
(73, 73, 1, '365.00', 1, 0),
(74, 74, 1, '365.00', 1, 0),
(75, 75, 1, '365.00', 1, 0),
(76, 76, 1, '465.00', 1, 0),
(77, 77, 1, '570.00', 1, 0),
(78, 78, 1, '570.00', 1, 0),
(79, 79, 1, '570.00', 1, 0),
(80, 80, 1, '35.00', 1, 0),
(81, 81, 1, '35.00', 1, 0),
(82, 82, 1, '45.00', 1, 0),
(83, 83, 1, '50.00', 1, 0),
(84, 84, 1, '50.00', 1, 0),
(85, 85, 1, '55.00', 1, 0),
(86, 86, 1, '60.00', 1, 0),
(87, 87, 1, '55.00', 1, 0),
(88, 88, 1, '60.00', 1, 0),
(89, 89, 1, '140.00', 1, 0),
(90, 90, 1, '80.00', 1, 0),
(91, 91, 1, '60.00', 1, 0),
(92, 92, 1, '80.00', 1, 0),
(93, 93, 1, '75.00', 1, 0),
(94, 94, 1, '80.00', 1, 0),
(95, 95, 1, '220.00', 1, 0),
(96, 96, 1, '250.00', 1, 0),
(97, 97, 1, '260.00', 1, 0),
(98, 98, 1, '120.00', 1, 0),
(99, 99, 1, '0.00', 1, 0),
(100, 100, 1, '145.00', 1, 0),
(101, 101, 1, '195.00', 1, 0),
(102, 102, 1, '95.00', 1, 0),
(103, 103, 1, '120.00', 1, 0),
(104, 104, 1, '85.00', 1, 0),
(105, 105, 1, '85.00', 1, 0),
(106, 106, 1, '85.00', 1, 0),
(107, 107, 1, '60.00', 1, 0),
(108, 108, 1, '110.00', 1, 0),
(109, 109, 1, '110.00', 1, 0),
(110, 110, 1, '110.00', 1, 0),
(111, 111, 1, '130.00', 1, 0),
(112, 112, 1, '85.00', 1, 0),
(113, 113, 1, '95.00', 1, 0),
(114, 114, 1, '95.00', 1, 0),
(115, 115, 1, '70.00', 1, 0),
(116, 116, 1, '110.00', 1, 0),
(117, 117, 1, '0.00', 1, 0),
(118, 118, 1, '0.00', 1, 0),
(119, 119, 1, '380.00', 1, 0),
(120, 120, 1, '0.00', 1, 0),
(121, 121, 1, '0.00', 1, 0),
(122, 122, 1, '0.00', 1, 0),
(123, 123, 1, '0.00', 1, 0),
(124, 124, 1, '0.00', 1, 0),
(125, 125, 1, '415.00', 1, 0),
(126, 126, 1, '0.00', 1, 0),
(127, 127, 1, '0.00', 1, 0),
(128, 128, 1, '0.00', 1, 0),
(129, 129, 1, '0.00', 1, 0),
(130, 130, 1, '0.00', 1, 0),
(131, 131, 1, '0.00', 1, 0),
(132, 132, 1, '40.00', 1, 0),
(133, 133, 1, '0.00', 1, 0),
(134, 134, 1, '0.00', 1, 0),
(135, 135, 1, '125.00', 1, 0),
(136, 136, 1, '125.00', 1, 0),
(137, 137, 1, '0.00', 1, 0),
(138, 138, 1, '0.00', 1, 0),
(139, 139, 1, '125.00', 1, 0),
(140, 140, 1, '130.00', 1, 0),
(141, 141, 1, '225.00', 1, 0),
(142, 142, 1, '135.00', 1, 0),
(143, 143, 1, '225.00', 1, 0),
(144, 144, 1, '135.00', 1, 0),
(145, 145, 1, '225.00', 1, 0),
(146, 146, 1, '0.00', 1, 0),
(147, 147, 1, '225.00', 1, 0),
(148, 148, 1, '225.00', 1, 0),
(149, 149, 1, '255.00', 1, 0),
(150, 150, 1, '160.00', 1, 0),
(151, 151, 1, '0.00', 1, 0),
(152, 152, 1, '0.00', 1, 0),
(153, 153, 1, '225.00', 1, 0),
(154, 154, 1, '130.00', 1, 0),
(155, 155, 1, '135.00', 1, 0),
(156, 156, 1, '135.00', 1, 0),
(157, 157, 1, '135.00', 1, 0),
(158, 158, 1, '135.00', 1, 0),
(159, 159, 1, '135.00', 1, 0),
(160, 160, 1, '0.00', 1, 0),
(161, 161, 1, '150.00', 1, 0),
(162, 162, 1, '0.00', 1, 0),
(163, 163, 1, '290.00', 1, 0),
(164, 164, 1, '290.00', 1, 0),
(165, 165, 1, '0.00', 1, 0),
(166, 166, 1, '0.00', 1, 0),
(167, 167, 1, '290.00', 1, 0),
(168, 168, 1, '300.00', 1, 0),
(169, 169, 1, '300.00', 1, 0),
(170, 170, 1, '290.00', 1, 0),
(171, 171, 1, '310.00', 1, 0),
(172, 172, 1, '310.00', 1, 0),
(173, 173, 1, '0.00', 1, 0),
(174, 174, 1, '305.00', 1, 0),
(175, 175, 1, '305.00', 1, 0),
(176, 176, 1, '285.00', 1, 0),
(177, 177, 1, '295.00', 1, 0),
(178, 178, 1, '540.00', 1, 0),
(179, 179, 1, '540.00', 1, 0),
(180, 180, 1, '215.00', 1, 0),
(181, 181, 1, '205.00', 1, 0),
(182, 182, 1, '205.00', 1, 0),
(183, 183, 1, '0.00', 1, 0),
(184, 184, 1, '235.00', 1, 0),
(185, 185, 1, '0.00', 1, 0),
(186, 186, 1, '235.00', 1, 0),
(187, 187, 1, '0.00', 1, 0),
(188, 188, 1, '0.00', 1, 0),
(189, 189, 1, '215.00', 1, 0),
(190, 190, 1, '300.00', 1, 0),
(191, 191, 1, '300.00', 1, 0),
(192, 192, 1, '290.00', 1, 0),
(193, 193, 1, '290.00', 1, 0),
(194, 194, 1, '290.00', 1, 0),
(195, 195, 1, '290.00', 1, 0),
(196, 196, 1, '290.00', 1, 0),
(197, 197, 1, '0.00', 1, 0),
(198, 198, 1, '300.00', 1, 0),
(199, 199, 1, '290.00', 1, 0),
(200, 200, 1, '290.00', 1, 0),
(201, 201, 1, '300.00', 1, 0),
(202, 202, 1, '300.00', 1, 0),
(203, 203, 1, '300.00', 1, 0),
(204, 204, 1, '300.00', 1, 0),
(205, 205, 1, '300.00', 1, 0),
(206, 206, 1, '405.00', 1, 0),
(207, 207, 1, '0.00', 1, 0),
(208, 208, 1, '555.00', 1, 0),
(209, 209, 1, '555.00', 1, 0),
(210, 210, 1, '0.00', 1, 0),
(211, 211, 1, '555.00', 1, 0),
(212, 212, 1, '0.00', 1, 0),
(213, 213, 1, '555.00', 1, 0),
(214, 214, 1, '555.00', 1, 0),
(215, 215, 1, '555.00', 1, 0),
(216, 216, 1, '165.00', 1, 0),
(217, 217, 1, '170.00', 1, 0),
(218, 218, 1, '170.00', 1, 0),
(219, 219, 1, '170.00', 1, 0),
(220, 220, 1, '170.00', 1, 0),
(221, 221, 1, '170.00', 1, 0),
(222, 222, 1, '180.00', 1, 0),
(223, 223, 1, '195.00', 1, 0),
(224, 224, 1, '0.00', 1, 0),
(225, 225, 1, '200.00', 1, 0),
(226, 226, 1, '200.00', 1, 0),
(227, 227, 1, '0.00', 1, 0),
(228, 228, 1, '200.00', 1, 0),
(229, 229, 1, '200.00', 1, 0),
(230, 230, 1, '205.00', 1, 0),
(231, 231, 1, '220.00', 1, 0),
(232, 232, 1, '165.00', 1, 0),
(233, 233, 1, '175.00', 1, 0),
(234, 234, 1, '175.00', 1, 0),
(235, 235, 1, '200.00', 1, 0),
(236, 236, 1, '200.00', 1, 0),
(237, 237, 1, '0.00', 1, 0),
(238, 238, 1, '195.00', 1, 0),
(239, 239, 1, '0.00', 1, 0),
(240, 240, 1, '185.00', 1, 0),
(241, 241, 1, '0.00', 1, 0),
(242, 242, 1, '185.00', 1, 0),
(243, 243, 1, '195.00', 1, 0),
(244, 244, 1, '205.00', 1, 0),
(245, 245, 1, '215.00', 1, 0),
(246, 246, 1, '195.00', 1, 0),
(247, 247, 1, '210.00', 1, 0),
(248, 248, 1, '0.00', 1, 0),
(249, 249, 1, '220.00', 1, 0),
(250, 250, 1, '40.00', 1, 0),
(251, 251, 1, '16.00', 1, 0),
(252, 252, 1, '50.00', 1, 0),
(262, 273, 2, '450.00', 1, 0),
(263, 274, 2, '380.00', 1, 0),
(267, 275, 3, '720.00', 1, 0),
(268, 275, 2, '380.00', 1, 0),
(269, 277, 2, '250.00', 1, 0),
(270, 277, 3, '480.00', 1, 0),
(271, 278, 2, '240.00', 1, 0),
(272, 278, 3, '420.00', 1, 0),
(273, 279, 2, '240.00', 1, 0),
(274, 279, 3, '420.00', 1, 0),
(275, 280, 2, '190.00', 1, 0),
(276, 280, 3, '330.00', 1, 0),
(277, 281, 2, '200.00', 1, 0),
(278, 281, 3, '370.00', 1, 0),
(279, 282, 2, '190.00', 1, 0),
(280, 282, 3, '330.00', 1, 0),
(289, 287, 2, '150.00', 1, 0),
(290, 287, 3, '250.00', 1, 0),
(291, 288, 2, '130.00', 1, 0),
(292, 288, 3, '210.00', 1, 0),
(295, 290, 2, '130.00', 1, 0),
(296, 290, 3, '210.00', 1, 0),
(297, 291, 5, '330.00', 1, 0),
(298, 292, 5, '350.00', 1, 0),
(299, 293, 5, '280.00', 1, 0),
(300, 294, 5, '280.00', 1, 0),
(301, 295, 5, '350.00', 1, 0),
(302, 296, 5, '380.00', 1, 0),
(303, 297, 5, '280.00', 1, 0),
(304, 298, 5, '280.00', 1, 0),
(305, 299, 5, '320.00', 1, 0),
(308, 300, 2, '260.00', 1, 0),
(309, 300, 3, '480.00', 1, 0),
(310, 301, 2, '240.00', 1, 0),
(311, 301, 3, '430.00', 1, 0),
(312, 302, 2, '190.00', 1, 0),
(313, 302, 3, '330.00', 1, 0),
(316, 304, 2, '130.00', 1, 0),
(317, 304, 3, '210.00', 1, 0),
(318, 305, 2, '120.00', 1, 0),
(319, 305, 3, '180.00', 1, 0),
(320, 276, 3, '480.00', 1, 0),
(321, 276, 2, '250.00', 1, 0),
(323, 306, 3, '160.00', 2, 0),
(330, 286, 3, '230.00', 1, 0),
(331, 286, 2, '140.00', 1, 0),
(342, 285, 3, '230.00', 1, 0),
(343, 285, 2, '140.00', 1, 0),
(346, 283, 3, '240.00', 1, 0),
(347, 283, 2, '145.00', 1, 0),
(348, 303, 3, '210.00', 1, 0),
(349, 303, 2, '130.00', 1, 0),
(350, 289, 3, '170.00', 1, 0),
(351, 289, 2, '125.00', 1, 0),
(354, 284, 2, '130.00', 1, 0),
(355, 284, 3, '210.00', 1, 0),
(356, 307, 1, '180.00', 0, 0),
(357, 308, 1, '260.00', 0, 0),
(358, 309, 1, '560.00', 1, 0),
(359, 310, 1, '100.00', 1, 0),
(360, 311, 1, '145.00', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `gst_master`
--

CREATE TABLE `gst_master` (
  `gst_id` int(11) NOT NULL,
  `cgst` decimal(10,1) NOT NULL,
  `sgst` decimal(10,1) NOT NULL,
  `igst` int(11) NOT NULL,
  `del_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gst_master`
--

INSERT INTO `gst_master` (`gst_id`, `cgst`, `sgst`, `igst`, `del_status`) VALUES
(1, '2.5', '2.5', 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `live_stock_master`
--

CREATE TABLE `live_stock_master` (
  `live_stock_id` int(11) NOT NULL,
  `food_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `stock_in_ml` int(11) NOT NULL,
  `del_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `live_stock_master`
--

INSERT INTO `live_stock_master` (`live_stock_id`, `food_id`, `size_id`, `stock_in_ml`, `del_status`) VALUES
(1, 1, 4, 7500, 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_details_master`
--

CREATE TABLE `order_details_master` (
  `order_details_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `food_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `food_information` varchar(600) NOT NULL,
  `size_id` int(11) NOT NULL,
  `sub_total` decimal(10,2) NOT NULL,
  `food_unit_price` decimal(10,2) NOT NULL,
  `food_comments` varchar(20000) DEFAULT NULL,
  `del_status` int(11) NOT NULL DEFAULT 0,
  `kitchen_status` int(11) NOT NULL DEFAULT 0,
  `kitchen_quantity` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_details_master`
--

INSERT INTO `order_details_master` (`order_details_id`, `order_id`, `food_id`, `quantity`, `food_information`, `size_id`, `sub_total`, `food_unit_price`, `food_comments`, `del_status`, `kitchen_status`, `kitchen_quantity`) VALUES
(10, 5, 271, 1, 'Drinks Test DATA  60 ml', 3, '456.00', '456.00', '', 0, 0, 0),
(11, 5, 271, 2, 'Drinks Test DATA  30 ml', 2, '90.00', '45.00', '', 0, 0, 0),
(12, 6, 271, 10, 'Drinks Test DATA  30 ml', 2, '450.00', '45.00', '', 0, 0, 0),
(13, 6, 271, 4, 'Drinks Test DATA  60 ml', 3, '1824.00', '456.00', '', 0, 0, 0),
(58, 10, 3, 1, 'Hara Bhara Kebab ', 1, '225.00', '225.00', '', 0, 0, 0),
(59, 10, 271, 3, 'Drinks Test DATA  30 ml', 2, '135.00', '45.00', '', 0, 0, 0),
(60, 11, 2, 1, 'Achari Paneer Tikka ', 1, '275.00', '275.00', '', 0, 0, 0),
(61, 6, 2, 3, 'Achari Paneer Tikka ', 1, '825.00', '275.00', '', 0, 0, 0),
(66, 5, 275, 3, 'JOHNNIE WALKER BLACK LABEL  30 ml', 2, '380.00', '380.00', '', 0, 0, 0),
(67, 5, 275, 1, 'JOHNNIE WALKER BLACK LABEL  60 ml', 3, '720.00', '720.00', '', 0, 0, 0),
(68, 5, 1, 1, 'Paneer Malai Tikka\n ', 1, '275.00', '275.00', '', 0, 0, 0),
(69, 5, 2, 1, 'Achari Paneer Tikka ', 1, '275.00', '275.00', '', 0, 0, 0),
(71, 14, 1, 1, 'Paneer Malai Tikka\n ', 1, '275.00', '275.00', '', 0, 0, 0),
(72, 11, 1, 1, 'Paneer Malai Tikka\n ', 1, '275.00', '275.00', '', 0, 0, 0),
(73, 18, 1, 1, 'Paneer Malai Tikka\n ', 1, '275.00', '275.00', 'Without Gravy', 0, 1, 0),
(74, 16, 2, 1, 'Achari Paneer Tikka ', 1, '275.00', '275.00', '', 0, 0, 0),
(75, 16, 10, 1, 'Paneer Butter Masala ', 1, '280.00', '280.00', '', 0, 0, 0),
(76, 16, 22, 1, 'Dum Aloo Achari ', 1, '245.00', '245.00', '', 0, 0, 0),
(77, 15, 23, 1, 'Dal Tadkawali ', 1, '210.00', '210.00', '', 0, 0, 0),
(78, 15, 276, 1, 'BLACK DOG TRIPLE GOLD RESERVE   30 ml', 2, '250.00', '250.00', '', 0, 0, 0),
(79, 12, 275, 1, 'JOHNNIE WALKER BLACK LABEL  60 ml', 3, '720.00', '720.00', '', 0, 0, 0),
(85, 18, 12, 1, 'Kadai Sabji ', 1, '240.00', '240.00', 'Normal', 0, 1, 0),
(86, 26, 273, 4, 'SINGLE MALT  30 ml', 2, '1800.00', '450.00', '', 0, 0, 4),
(87, 26, 275, 3, 'JOHNNIE WALKER BLACK LABEL  60 ml', 3, '2160.00', '720.00', '', 0, 0, 3),
(88, 26, 280, 5, 'VAT 69  60 ml', 3, '1650.00', '330.00', '', 0, 0, 5),
(89, 9, 274, 1, 'CHIVAS REGAL  30 ml', 2, '380.00', '380.00', '', 0, 1, 0),
(90, 9, 276, 1, 'BLACK DOG TRIPLE GOLD RESERVE   30 ml', 2, '250.00', '250.00', '', 0, 1, 0),
(91, 27, 177, 3, 'Fish Finger ', 1, '885.00', '295.00', 'More Spicy', 0, 1, 0),
(92, 27, 4, 2, 'Dahi Kabab ', 1, '460.00', '230.00', 'Without Gravy', 0, 1, 0),
(94, 28, 84, 1, 'Tandoori Roti ', 1, '50.00', '50.00', '', 0, 1, 0),
(95, 28, 250, 1, 'Minarel Water ', 1, '40.00', '40.00', '', 0, 1, 0),
(96, 28, 192, 2, 'Babycorn Mushroom Chicken ', 1, '580.00', '290.00', '', 0, 1, 0),
(97, 28, 190, 1, 'Chilly Chicken ', 1, '300.00', '300.00', '', 0, 1, 0),
(98, 28, 184, 1, 'Chilly Paneer ', 1, '235.00', '235.00', '', 0, 1, 0),
(99, 28, 88, 6, 'Butter Naan ', 1, '360.00', '60.00', '', 0, 1, 0),
(100, 8, 216, 1, 'Veg Fried Rice ', 1, '82.50', '165.00', '', 0, 1, 0),
(101, 8, 184, 1, 'Chilly Paneer ', 1, '117.50', '235.00', '', 0, 1, 0),
(102, 29, 177, 2, 'Fish Finger ', 1, '590.00', '295.00', '', 0, 0, 2),
(103, 25, 177, 2, 'Fish Finger ', 1, '590.00', '295.00', '', 0, 1, 0),
(104, 25, 251, 2, 'Container ', 1, '32.00', '16.00', '', 0, 0, 2),
(105, 7, 284, 1, 'BLENDERS PRIDE  30 ml', 2, '130.00', '130.00', '', 0, 0, 1),
(106, 30, 177, 1, 'Fish Finger ', 1, '295.00', '295.00', '', 0, 0, 1),
(107, 19, 8, 1, 'Palak Paneer ', 1, '275.00', '275.00', '', 0, 0, 1),
(108, 22, 274, 1, 'CHIVAS REGAL  30 ml', 2, '380.00', '380.00', '', 0, 0, 1),
(109, 21, 273, 1, 'SINGLE MALT  30 ml', 2, '450.00', '450.00', '', 0, 0, 1),
(110, 20, 3, 1, 'Hara Bhara Kebab ', 1, '225.00', '225.00', '', 0, 0, 1),
(111, 23, 274, 1, 'CHIVAS REGAL  30 ml', 2, '380.00', '380.00', '', 0, 0, 1),
(112, 17, 273, 1, 'SINGLE MALT  30 ml', 2, '450.00', '450.00', '', 0, 0, 1),
(113, 24, 274, 1, 'CHIVAS REGAL  30 ml', 2, '380.00', '380.00', '', 0, 0, 1),
(114, 31, 177, 1, 'Fish Finger ', 1, '295.00', '295.00', '', 0, 0, 1),
(118, 13, 177, 1, 'Fish Finger ', 1, '295.00', '295.00', 'Less Spicy', 0, 0, 1),
(119, 13, 21, 1, 'Kashmiri Dum Aloo ', 1, '265.00', '265.00', 'Without Gravy', 0, 0, 1),
(121, 34, 2, 2, 'Achari Paneer Tikka ', 1, '550.00', '275.00', '', 0, 0, 2),
(122, 35, 37, 1, 'Cucumber Salad ', 1, '100.00', '100.00', '', 0, 0, 1),
(123, 35, 250, 1, 'Minarel Water ', 1, '40.00', '40.00', '', 0, 0, 3),
(125, 36, 283, 4, 'ANTIQUITY BLUE   60 ml', 3, '960.00', '240.00', '', 0, 0, 4),
(126, 37, 282, 2, '1OO PIPERS   60 ml', 3, '660.00', '330.00', '', 0, 0, 2),
(127, 37, 282, 1, '1OO PIPERS   30 ml', 2, '190.00', '190.00', '', 0, 0, 1),
(128, 38, 184, 1, 'Chilly Paneer ', 1, '235.00', '235.00', '', 0, 0, 1),
(129, 38, 36, 1, 'Green Salad ', 1, '90.00', '90.00', '', 0, 0, 1),
(130, 39, 288, 2, 'BACARDI   60 ml', 3, '420.00', '210.00', '', 0, 0, 2),
(131, 40, 284, 2, 'BLENDERS PRIDE  60 ml', 3, '420.00', '210.00', '', 0, 0, 2),
(132, 41, 144, 1, 'Paneer Cheese Ball ', 1, '135.00', '135.00', '', 0, 0, 1),
(133, 41, 164, 1, 'Chicken Konjee ', 1, '290.00', '290.00', '', 0, 0, 1),
(134, 41, 107, 1, 'Aerated Drinks ', 1, '60.00', '60.00', '', 0, 0, 1),
(135, 42, 192, 1, 'Babycorn Mushroom Chicken ', 1, '290.00', '290.00', '', 0, 0, 1),
(136, 43, 297, 2, 'TUBORG STRONG   650 ml', 5, '560.00', '280.00', '', 0, 0, 2),
(137, 43, 282, 5, '1OO PIPERS   60 ml', 3, '1650.00', '330.00', '', 0, 0, 5),
(138, 43, 288, 4, 'BACARDI   60 ml', 3, '840.00', '210.00', '', 0, 0, 6),
(139, 43, 282, 2, '1OO PIPERS   30 ml', 2, '380.00', '190.00', '', 0, 0, 2),
(140, 43, 288, 1, 'BACARDI   30 ml', 2, '130.00', '130.00', '', 0, 0, 1),
(141, 44, 176, 1, 'Fish Fry ', 1, '285.00', '285.00', '', 0, 0, 1),
(142, 32, 176, 1, 'Fish Fry ', 1, '285.00', '285.00', '', 0, 0, 1),
(143, 45, 119, 1, 'Machli Ajwain Tikka ', 1, '380.00', '380.00', '', 0, 0, 1),
(144, 46, 289, 10, 'OLD MONK  60 ml', 3, '1700.00', '170.00', '', 0, 0, 5),
(146, 48, 80, 1, 'Roasted Papad ', 1, '35.00', '35.00', '', 0, 0, 1),
(147, 49, 297, 1, 'TUBORG STRONG   650 ml', 5, '280.00', '280.00', '', 0, 0, 1),
(148, 49, 303, 4, 'SMIRNOFF  60 ml', 3, '840.00', '210.00', '', 0, 0, 4),
(149, 50, 50, 1, 'Tandoori Chicken ', 1, '400.00', '400.00', '', 0, 0, 1),
(150, 44, 250, 1, 'Minarel Water ', 1, '40.00', '40.00', '', 0, 0, 1),
(151, 44, 251, 1, 'Container ', 1, '16.00', '16.00', '', 0, 0, 1),
(152, 47, 276, 3, 'BLACK DOG TRIPLE GOLD RESERVE   60 ml', 3, '1440.00', '480.00', '', 0, 0, 3),
(153, 47, 250, 1, 'Minarel Water ', 1, '40.00', '40.00', '', 0, 0, 1),
(154, 51, 303, 2, 'SMIRNOFF  60 ml', 3, '420.00', '210.00', '', 0, 0, 2),
(155, 52, 51, 1, 'Tandoori Chicken ', 1, '265.00', '265.00', '', 0, 0, 1),
(156, 53, 295, 1, 'CARLSBERG ELEPHENT STRONG  650 ml', 5, '350.00', '350.00', '', 0, 0, 1),
(157, 54, 284, 1, 'BLENDERS PRIDE  60 ml', 3, '210.00', '210.00', '', 0, 0, 1),
(158, 33, 284, 2, 'BLENDERS PRIDE  60 ml', 3, '420.00', '210.00', '', 0, 0, 2),
(159, 55, 282, 4, '1OO PIPERS   60 ml', 3, '1320.00', '330.00', '', 0, 0, 4),
(161, 55, 252, 1, 'Soda ', 1, '50.00', '50.00', '', 0, 0, 1),
(162, 56, 250, 1, 'Minarel Water ', 1, '40.00', '40.00', '', 0, 0, 1),
(163, 56, 177, 1, 'Fish Finger ', 1, '295.00', '295.00', '', 0, 0, 1),
(164, 56, 223, 1, 'Chicken Fried Rice ', 1, '195.00', '195.00', '', 0, 0, 1),
(165, 56, 198, 1, 'Sweet Galic chicken ', 1, '300.00', '300.00', '', 0, 0, 1),
(166, 56, 251, 2, 'Container ', 1, '32.00', '16.00', '', 0, 0, 2),
(167, 57, 225, 1, 'Chicken szechwan Rice ', 1, '200.00', '200.00', '', 0, 0, 1),
(168, 58, 4, 1, 'Dahi Kabab ', 1, '230.00', '230.00', '', 0, 0, 1),
(170, 50, 218, 1, 'Veg Burnt Garlic Rice ', 1, '170.00', '170.00', '', 0, 0, 1),
(172, 59, 208, 1, 'Chilly Prawn ', 1, '555.00', '555.00', '', 0, 0, 1),
(173, 59, 190, 1, 'Chilly Chicken ', 1, '300.00', '300.00', '', 0, 0, 1),
(174, 59, 249, 1, 'Mixed Noodles ', 1, '220.00', '220.00', '', 0, 0, 1),
(175, 59, 251, 5, 'Container ', 1, '80.00', '16.00', '', 0, 0, 5),
(176, 61, 190, 1, 'Chilly Chicken ', 1, '300.00', '300.00', '', 0, 0, 1),
(180, 62, 240, 1, 'Chicken Hakka Noodles ', 1, '185.00', '185.00', '', 0, 0, 1),
(181, 60, 190, 1, 'Chilly Chicken ', 1, '300.00', '300.00', '', 0, 0, 1),
(182, 60, 251, 1, 'Container ', 1, '16.00', '16.00', '', 0, 0, 1),
(183, 63, 190, 1, 'Chilly Chicken ', 1, '300.00', '300.00', '', 0, 0, 1),
(184, 63, 48, 1, 'Chicken Pulao ', 1, '200.00', '200.00', '', 0, 0, 1),
(185, 64, 231, 1, 'Mixed Fried Rice ', 1, '220.00', '220.00', '', 0, 0, 1),
(186, 64, 195, 1, 'Kung Pao Chicken ', 1, '290.00', '290.00', '', 0, 0, 1),
(187, 64, 190, 1, 'Chilly Chicken ', 1, '300.00', '300.00', '', 0, 0, 1),
(189, 66, 223, 1, 'Chicken Fried Rice ', 1, '195.00', '195.00', '', 0, 1, 0),
(194, 65, 177, 1, 'Fish Finger ', 1, '295.00', '295.00', '', 0, 1, 0),
(195, 65, 276, 1, 'BLACK DOG TRIPLE GOLD RESERVE   60 ml', 3, '480.00', '480.00', '', 0, 1, 0),
(196, 67, 2, 1, 'Achari Paneer Tikka ', 1, '275.00', '275.00', '', 0, 0, 1),
(197, 68, 3, 1, 'Hara Bhara Kebab ', 1, '225.00', '225.00', '', 0, 0, 1),
(198, 70, 232, 1, 'Veg Hakka Noodles ', 1, '165.00', '165.00', '', 0, 1, 0),
(200, 70, 240, 1, 'Chicken Hakka Noodles ', 1, '185.00', '185.00', '', 0, 1, 0),
(201, 70, 195, 1, 'Kung Pao Chicken ', 1, '290.00', '290.00', '', 0, 1, 0),
(202, 70, 181, 1, 'Veg Sweet & Sour ', 1, '205.00', '205.00', '', 0, 1, 0),
(203, 71, 2, 1, 'Achari Paneer Tikka ', 1, '275.00', '275.00', '', 0, 0, 1),
(204, 69, 3, 1, 'Hara Bhara Kebab ', 1, '225.00', '225.00', '', 0, 0, 1),
(206, 72, 298, 1, 'KINGFISHER STRONG  650 ml', 5, '280.00', '280.00', '', 0, 0, 1),
(207, 72, 306, 1, 'BLUE HAWAIAAN  60 ml', 3, '160.00', '160.00', '', 0, 0, 1),
(208, 75, 281, 4, 'TEACHER HIGHLAND CREAM   60 ml', 3, '1480.00', '370.00', '', 0, 0, 4),
(209, 76, 51, 2, 'Tandoori Chicken ', 1, '530.00', '265.00', '', 0, 0, 2),
(216, 77, 149, 1, 'Chilly Babycorn ', 1, '0.00', '0.00', '', 0, 0, 1),
(217, 77, 251, 1, 'Container ', 1, '16.00', '16.00', '', 0, 0, 1),
(220, 76, 286, 3, 'SIGNATURE PREMIER 60 ml  ', 0, '690.00', '230.00', '', 0, 0, 3),
(221, 78, 149, 1, 'Chilly Babycorn ', 1, '255.00', '255.00', '', 0, 0, 1),
(225, 78, 303, 1, 'SMIRNOFF 60 ml  ', 0, '210.00', '210.00', '', 0, 0, 1),
(226, 79, 73, 1, 'Fish Tawa Masala ', 1, '365.00', '365.00', '', 0, 0, 1),
(227, 79, 167, 1, 'Pan fried Chicken ', 1, '290.00', '290.00', '', 0, 0, 1),
(228, 79, 150, 1, 'French Fry ', 1, '160.00', '160.00', '', 0, 0, 1),
(230, 80, 163, 2, 'Diced Chicken pepper Ginger & Garlic ', 1, '580.00', '290.00', '', 0, 0, 2),
(233, 82, 295, 2, 'CARLSBERG ELEPHENT STRONG 650 ml  ', 0, '700.00', '350.00', '', 0, 0, 2),
(238, 82, 285, 3, 'BLENDERS PRIDE RESERVE  60 ml  ', 0, '690.00', '230.00', '', 0, 0, 3),
(239, 81, 284, 8, 'BLENDERS PRIDE 60 ml  ', 0, '1680.00', '210.00', '', 0, 0, 8),
(240, 83, 298, 2, 'KINGFISHER STRONG 650 ml  ', 0, '560.00', '280.00', '', 0, 0, 6),
(241, 84, 249, 1, 'Mixed Noodles ', 1, '220.00', '220.00', '', 0, 0, 1),
(242, 84, 202, 1, 'Hot Garlic Fish ', 1, '300.00', '300.00', '', 0, 0, 1),
(243, 84, 251, 2, 'Container ', 1, '32.00', '16.00', '', 0, 0, 2),
(244, 84, 177, 1, 'Fish Finger ', 1, '295.00', '295.00', '', 0, 0, 1),
(245, 84, 158, 1, 'Chicken Hot & Sour Soup ', 1, '135.00', '135.00', '', 0, 0, 1),
(246, 85, 296, 3, 'BUDWEISER MAGNUM STRONG 650 ml  ', 0, '1140.00', '380.00', '', 0, 0, 3),
(247, 86, 296, 2, 'BUDWEISER MAGNUM STRONG 650 ml  ', 0, '760.00', '380.00', '', 0, 0, 2),
(251, 87, 163, 1, 'Diced Chicken pepper Ginger & Garlic ', 1, '290.00', '290.00', '', 0, 0, 1),
(252, 87, 251, 1, 'Container ', 1, '16.00', '16.00', '', 0, 0, 1),
(253, 88, 284, 2, 'BLENDERS PRIDE 60 ml  ', 0, '420.00', '210.00', '', 0, 0, 2),
(254, 88, 250, 1, 'Minarel Water ', 1, '40.00', '40.00', '', 0, 0, 1),
(255, 89, 284, 4, 'BLENDERS PRIDE 60 ml  ', 0, '840.00', '210.00', '', 0, 0, 4),
(257, 89, 284, 1, 'BLENDERS PRIDE 30 ml  ', 0, '130.00', '130.00', '', 0, 0, 1),
(259, 91, 297, 3, 'TUBORG STRONG  650 ml  ', 0, '840.00', '280.00', '', 0, 0, 3),
(261, 93, 297, 3, 'TUBORG STRONG  650 ml  ', 0, '840.00', '280.00', '', 0, 0, 3),
(263, 90, 283, 4, 'ANTIQUITY BLUE  60 ml  ', 0, '960.00', '240.00', '', 0, 0, 4),
(264, 94, 303, 2, 'SMIRNOFF 60 ml  ', 0, '420.00', '210.00', '', 0, 0, 2),
(265, 94, 107, 1, 'Aerated Drinks ', 1, '60.00', '60.00', '', 0, 0, 1),
(266, 96, 144, 1, 'Paneer Cheese Ball ', 1, '135.00', '135.00', '', 0, 0, 1),
(267, 97, 113, 1, 'Lassi ', 1, '95.00', '95.00', '', 0, 0, 1),
(268, 97, 82, 1, 'Roasted Masala Papad ', 1, '45.00', '45.00', '', 0, 0, 1),
(269, 97, 36, 1, 'Green Salad ', 1, '90.00', '90.00', '', 0, 0, 1),
(270, 97, 192, 1, 'Babycorn Mushroom Chicken ', 1, '290.00', '290.00', '', 0, 0, 1),
(271, 97, 250, 1, 'Minarel Water ', 1, '40.00', '40.00', '', 0, 0, 1),
(273, 98, 303, 3, 'SMIRNOFF 60 ml  ', 0, '630.00', '210.00', '', 0, 0, 3),
(274, 99, 295, 2, 'CARLSBERG ELEPHENT STRONG 650 ml  ', 0, '700.00', '350.00', '', 0, 0, 2),
(275, 100, 240, 1, 'Chicken Hakka Noodles ', 1, '185.00', '185.00', '', 0, 0, 1),
(276, 100, 50, 1, 'Tandoori Chicken ', 1, '400.00', '400.00', '', 0, 0, 1),
(277, 100, 150, 1, 'French Fry ', 1, '160.00', '160.00', '', 0, 0, 1),
(278, 100, 306, 1, 'BLUE HAWAIAAN 60 ml  ', 0, '160.00', '160.00', '', 0, 0, 1),
(279, 100, 32, 1, 'Mutton Kasa ', 1, '390.00', '390.00', '', 0, 0, 1),
(280, 100, 251, 2, 'Container ', 1, '32.00', '16.00', '', 0, 0, 2),
(282, 101, 289, 4, 'OLD MONK 60 ml  ', 0, '680.00', '170.00', '', 0, 0, 4),
(283, 102, 295, 2, 'CARLSBERG ELEPHENT STRONG 650 ml  ', 0, '700.00', '350.00', '', 0, 0, 2),
(284, 102, 298, 1, 'KINGFISHER STRONG 650 ml  ', 0, '280.00', '280.00', '', 0, 0, 1),
(285, 103, 55, 1, 'Chicken Pudina Kebab ', 1, '335.00', '335.00', '', 0, 0, 1),
(286, 104, 296, 3, 'BUDWEISER MAGNUM STRONG 650 ml  ', 0, '1140.00', '380.00', '', 0, 0, 3),
(287, 105, 297, 7, 'TUBORG STRONG  650 ml  ', 0, '1960.00', '280.00', '', 0, 0, 7),
(288, 106, 190, 2, 'Chilly Chicken ', 1, '600.00', '300.00', '', 0, 0, 2),
(289, 107, 231, 1, 'Mixed Fried Rice ', 1, '220.00', '220.00', '', 0, 0, 1),
(290, 92, 231, 4, 'Mixed Fried Rice ', 1, '880.00', '220.00', '', 0, 0, 4),
(291, 92, 201, 2, 'Chilly Fish ', 1, '600.00', '300.00', '', 0, 0, 2),
(292, 92, 251, 6, 'Container ', 1, '96.00', '16.00', '', 0, 0, 6),
(293, 108, 80, 1, 'Roasted Papad ', 1, '35.00', '35.00', '', 0, 0, 1),
(294, 95, 158, 1, 'Chicken Hot & Sour Soup ', 1, '135.00', '135.00', '', 0, 0, 1),
(295, 95, 250, 1, 'Minarel Water ', 1, '40.00', '40.00', '', 0, 0, 1),
(296, 109, 9, 1, 'Paneer Tikka Masala ', 1, '275.00', '275.00', '', 0, 0, 1),
(297, 107, 251, 1, 'Container ', 1, '16.00', '16.00', '', 0, 0, 1),
(299, 111, 84, 8, 'Tandoori Roti ', 1, '400.00', '50.00', '', 0, 0, 8),
(300, 111, 66, 1, 'Chicken Reshmi Butter Masala ', 1, '355.00', '355.00', '', 0, 0, 1),
(302, 111, 36, 1, 'Green Salad ', 1, '90.00', '90.00', '', 0, 0, 1),
(303, 111, 12, 1, 'Kadai Sabji ', 1, '240.00', '240.00', '', 0, 0, 1),
(304, 111, 26, 1, 'Jeera Dal ', 1, '190.00', '190.00', '', 0, 0, 1),
(306, 110, 251, 1, 'Container ', 1, '16.00', '16.00', '', 0, 0, 1),
(307, 110, 72, 1, 'Kadai Chicken ', 1, '365.00', '365.00', '', 0, 0, 1),
(308, 113, 177, 1, 'Fish Finger ', 1, '295.00', '295.00', '', 0, 0, 1),
(309, 73, 177, 2, 'Fish Finger ', 1, '590.00', '295.00', '', 0, 0, 2),
(310, 73, 80, 2, 'Roasted Papad ', 1, '70.00', '35.00', '', 0, 0, 2),
(312, 73, 147, 1, 'Stir Fry Veg ', 1, '225.00', '225.00', '', 0, 0, 1),
(313, 114, 169, 1, 'Chicken Lollypop ', 1, '300.00', '300.00', '', 0, 0, 1),
(314, 114, 177, 1, 'Fish Finger ', 1, '295.00', '295.00', '', 0, 0, 1),
(315, 114, 36, 1, 'Green Salad ', 1, '90.00', '90.00', '', 0, 0, 1),
(316, 115, 285, 9, 'BLENDERS PRIDE RESERVE  60 ml  ', 0, '2070.00', '230.00', '', 0, 0, 9),
(317, 116, 295, 1, 'CARLSBERG ELEPHENT STRONG 650 ml  ', 0, '350.00', '350.00', '', 0, 0, 1),
(318, 117, 34, 2, 'Bhuna Gosht ', 1, '780.00', '390.00', '', 0, 0, 2),
(319, 117, 88, 3, 'Butter Naan ', 1, '180.00', '60.00', '', 0, 0, 3),
(320, 117, 201, 1, 'Chilly Fish ', 1, '300.00', '300.00', '', 0, 0, 1),
(321, 117, 250, 1, 'Minarel Water ', 1, '40.00', '40.00', '', 0, 0, 1),
(322, 117, 107, 1, 'Aerated Drinks ', 1, '60.00', '60.00', '', 0, 0, 1),
(323, 117, 251, 1, 'Container ', 1, '16.00', '16.00', '', 0, 0, 1),
(325, 113, 289, 5, 'OLD MONK 60 ml  ', 0, '850.00', '170.00', '', 0, 0, 5),
(327, 113, 284, 5, 'BLENDERS PRIDE 60 ml  ', 0, '1050.00', '210.00', '', 0, 0, 5),
(329, 113, 284, 1, 'BLENDERS PRIDE 30 ml  ', 0, '130.00', '130.00', '', 0, 0, 1),
(331, 118, 284, 1, 'BLENDERS PRIDE 30 ml  ', 0, '130.00', '130.00', '', 0, 0, 1),
(332, 120, 177, 1, 'Fish Finger ', 1, '295.00', '295.00', '', 0, 0, 1),
(333, 120, 249, 1, 'Mixed Noodles ', 1, '220.00', '220.00', '', 0, 0, 1),
(334, 120, 190, 1, 'Chilly Chicken ', 1, '300.00', '300.00', '', 0, 0, 1),
(335, 120, 251, 1, 'Container ', 1, '16.00', '16.00', '', 0, 0, 1),
(336, 121, 45, 1, 'Veg Pulao ', 1, '170.00', '170.00', '', 0, 0, 1),
(337, 121, 16, 1, 'Navaratan Korma ', 1, '260.00', '260.00', '', 0, 0, 1),
(338, 121, 92, 2, 'Masala Kulcha ', 1, '160.00', '80.00', '', 0, 0, 2),
(340, 112, 45, 2, 'Veg Pulao ', 1, '340.00', '170.00', '', 0, 0, 2),
(341, 112, 10, 1, 'Paneer Butter Masala ', 1, '280.00', '280.00', '', 0, 0, 1),
(344, 124, 284, 2, 'BLENDERS PRIDE 60 ml  ', 3, '420.00', '210.00', '', 0, 0, 2),
(345, 124, 250, 1, 'Minarel Water ', 1, '40.00', '40.00', '', 0, 0, 1),
(347, 122, 240, 1, 'Chicken Hakka Noodles ', 1, '185.00', '185.00', '', 0, 0, 1),
(349, 125, 125, 1, 'Chicken Tandoori Butter Masala ', 1, '0.00', '0.00', '', 0, 0, 1),
(350, 125, 201, 1, 'Chilly Fish ', 1, '300.00', '300.00', '', 0, 0, 1),
(351, 125, 231, 1, 'Mixed Fried Rice ', 1, '220.00', '220.00', '', 0, 0, 1),
(352, 127, 36, 1, 'Green Salad ', 1, '90.00', '90.00', '', 0, 0, 1),
(353, 128, 284, 1, 'BLENDERS PRIDE 60 ml  ', 3, '210.00', '210.00', '', 0, 0, 1),
(354, 128, 284, 1, 'BLENDERS PRIDE 30 ml  ', 2, '130.00', '130.00', '', 0, 0, 1),
(356, 126, 51, 1, 'Tandoori Chicken ', 1, '265.00', '265.00', '', 0, 0, 1),
(359, 129, 125, 1, 'Chicken Tandoori Butter Masala ', 1, '415.00', '415.00', '', 0, 0, 1),
(361, 130, 88, 1, 'Butter Naan ', 1, '60.00', '60.00', '', 0, 0, 1),
(362, 130, 10, 1, 'Paneer Butter Masala ', 1, '280.00', '280.00', '', 0, 0, 1),
(363, 134, 240, 1, 'Chicken Hakka Noodles ', 1, '185.00', '185.00', '', 0, 0, 1),
(364, 133, 144, 1, 'Paneer Cheese Ball ', 1, '135.00', '135.00', '', 0, 0, 1),
(365, 133, 250, 1, 'Minarel Water ', 1, '40.00', '40.00', '', 0, 0, 1),
(369, 135, 161, 1, 'Mixed Thai Soup ', 1, '150.00', '150.00', '', 0, 0, 1),
(370, 135, 87, 1, 'Plain Naan ', 1, '55.00', '55.00', '', 0, 0, 1),
(371, 135, 250, 1, 'Minarel Water ', 1, '40.00', '40.00', '', 0, 0, 1),
(372, 136, 284, 1, 'BLENDERS PRIDE 30 ml  ', 2, '130.00', '130.00', '', 0, 0, 1),
(373, 136, 284, 1, 'BLENDERS PRIDE 60 ml  ', 3, '210.00', '210.00', '', 0, 0, 1),
(374, 137, 276, 3, 'BLACK DOG TRIPLE GOLD RESERVE  60 ml  ', 3, '1440.00', '480.00', '', 0, 0, 3),
(375, 138, 80, 1, 'Roasted Papad ', 1, '35.00', '35.00', '', 0, 0, 1),
(376, 138, 107, 1, 'Aerated Drinks ', 1, '60.00', '60.00', '', 0, 0, 1),
(377, 138, 250, 1, 'Minarel Water ', 1, '40.00', '40.00', '', 0, 0, 1),
(378, 138, 51, 1, 'Tandoori Chicken ', 1, '265.00', '265.00', '', 0, 0, 1),
(379, 138, 52, 1, 'Chicken Tikka Kebab ', 1, '325.00', '325.00', '', 0, 0, 1),
(380, 138, 251, 2, 'Container ', 1, '32.00', '16.00', '', 0, 0, 2),
(381, 139, 51, 1, 'Tandoori Chicken ', 1, '265.00', '265.00', '', 0, 0, 1),
(382, 139, 107, 1, 'Aerated Drinks ', 1, '60.00', '60.00', '', 0, 0, 1),
(383, 139, 250, 1, 'Minarel Water ', 1, '40.00', '40.00', '', 0, 0, 1),
(384, 139, 288, 2, 'BACARDI  60 ml  ', 3, '420.00', '210.00', '', 0, 0, 2),
(386, 140, 133, 2, 'Hara Lasuni Naan ', 1, '0.00', '0.00', '', 0, 0, 2),
(387, 140, 88, 1, 'Butter Naan ', 1, '60.00', '60.00', '', 0, 0, 1),
(388, 140, 14, 1, 'Sabji Mili Jhuli ', 1, '245.00', '245.00', '', 0, 0, 1),
(389, 140, 149, 1, 'Chilly Babycorn ', 1, '255.00', '255.00', '', 0, 0, 1),
(390, 140, 232, 1, 'Veg Hakka Noodles ', 1, '165.00', '165.00', '', 0, 0, 1),
(391, 140, 27, 1, 'Mushroom Takatak ', 1, '265.00', '265.00', '', 0, 0, 1),
(397, 142, 297, 3, 'TUBORG STRONG  650 ml  ', 5, '840.00', '280.00', '', 0, 0, 3),
(398, 131, 72, 2, 'Kadai Chicken ', 1, '730.00', '365.00', '', 0, 0, 2),
(399, 131, 88, 4, 'Butter Naan ', 1, '240.00', '60.00', '', 0, 0, 4),
(400, 131, 251, 2, 'Container ', 1, '32.00', '16.00', '', 0, 0, 2),
(402, 132, 87, 3, 'Plain Naan ', 1, '165.00', '55.00', '', 0, 0, 3),
(403, 144, 307, 1, 'quik bite non veg ', 1, '180.00', '180.00', '', 0, 0, 1),
(404, 144, 177, 1, 'Fish Finger ', 1, '295.00', '295.00', '', 0, 0, 1),
(405, 145, 297, 1, 'TUBORG STRONG  650 ml  ', 5, '280.00', '280.00', '', 0, 0, 1),
(407, 143, 177, 1, 'Fish Finger ', 1, '295.00', '295.00', '', 0, 0, 1),
(408, 143, 251, 1, 'Container ', 1, '16.00', '16.00', '', 0, 0, 1),
(410, 146, 308, 2, ' TandoriWings ', 1, '520.00', '260.00', '', 0, 0, 2),
(412, 147, 96, 1, 'Chicken Dum Biriyani ', 1, '250.00', '250.00', '', 0, 0, 1),
(413, 147, 163, 1, 'Diced Chicken pepper Ginger & Garlic ', 1, '290.00', '290.00', '', 0, 0, 1),
(415, 148, 231, 5, 'Mixed Fried Rice ', 1, '1100.00', '220.00', '', 0, 0, 5),
(416, 148, 66, 2, 'Chicken Reshmi Butter Masala ', 1, '710.00', '355.00', '', 0, 0, 2),
(417, 148, 190, 2, 'Chilly Chicken ', 1, '600.00', '300.00', '', 0, 0, 2),
(418, 148, 168, 2, 'Drums of Heaven ', 1, '600.00', '300.00', '', 0, 0, 2),
(419, 148, 251, 11, 'Container ', 1, '176.00', '16.00', '', 0, 0, 11),
(420, 150, 190, 3, 'Chilly Chicken ', 1, '900.00', '300.00', '', 0, 0, 3),
(421, 150, 251, 1, 'Container ', 1, '16.00', '16.00', '', 0, 0, 1),
(422, 150, 223, 3, 'Chicken Fried Rice ', 1, '585.00', '195.00', '', 0, 0, 3),
(424, 150, 82, 2, 'Roasted Masala Papad ', 1, '90.00', '45.00', '', 0, 0, 2),
(426, 151, 284, 2, 'BLENDERS PRIDE 60 ml  ', 3, '420.00', '210.00', '', 0, 0, 8),
(427, 151, 250, 1, 'Minarel Water ', 1, '40.00', '40.00', '', 0, 0, 1),
(429, 149, 125, 1, 'Chicken Tandoori Butter Masala ', 1, '415.00', '415.00', '', 0, 0, 1),
(430, 153, 150, 1, 'French Fry ', 1, '160.00', '160.00', '', 0, 0, 1),
(431, 153, 251, 1, 'Container ', 1, '16.00', '16.00', '', 0, 0, 1),
(432, 154, 298, 1, 'KINGFISHER STRONG 650 ml  ', 5, '280.00', '280.00', '', 0, 0, 1),
(433, 154, 299, 2, 'KINGFISHER STROM  650 ml  ', 5, '640.00', '320.00', '', 0, 0, 2),
(435, 152, 66, 1, 'Chicken Reshmi Butter Masala ', 1, '355.00', '355.00', '', 0, 0, 1),
(436, 152, 88, 4, 'Butter Naan ', 1, '240.00', '60.00', '', 0, 0, 4),
(438, 156, 176, 1, 'Fish Fry ', 1, '285.00', '285.00', '', 0, 0, 1),
(439, 157, 289, 2, 'OLD MONK 60 ml  ', 3, '340.00', '170.00', '', 0, 0, 2),
(440, 157, 288, 1, 'BACARDI  30 ml  ', 2, '130.00', '130.00', '', 0, 0, 1),
(442, 155, 231, 3, 'Mixed Fried Rice ', 1, '660.00', '220.00', '', 0, 0, 3),
(443, 155, 251, 3, 'Container ', 1, '48.00', '16.00', '', 0, 0, 3),
(444, 159, 176, 1, 'Fish Fry ', 1, '285.00', '285.00', '', 0, 0, 1),
(445, 160, 88, 2, 'Butter Naan ', 1, '120.00', '60.00', '', 0, 0, 2),
(446, 160, 53, 1, 'Chicken MALAI Kebab ', 1, '325.00', '325.00', '', 0, 0, 1),
(447, 160, 172, 1, 'Shreeded Chicken ', 1, '310.00', '310.00', '', 0, 0, 1),
(448, 160, 224, 1, 'Egg Fried Rice ', 1, '0.00', '0.00', '', 0, 0, 1),
(449, 160, 28, 1, 'Mutton Masala ', 1, '390.00', '390.00', '', 0, 0, 1),
(450, 160, 284, 3, 'BLENDERS PRIDE 60 ml  ', 3, '630.00', '210.00', '', 0, 0, 3),
(451, 160, 252, 1, 'Soda ', 1, '50.00', '50.00', '', 0, 0, 1),
(452, 141, 284, 3, 'BLENDERS PRIDE 60 ml  ', 3, '630.00', '210.00', '', 0, 0, 3),
(453, 161, 299, 2, 'KINGFISHER STROM  650 ml  ', 5, '640.00', '320.00', '', 0, 0, 2),
(454, 161, 282, 1, '1OO PIPERS  30 ml  ', 2, '190.00', '190.00', '', 0, 0, 1),
(455, 162, 144, 1, 'Paneer Cheese Ball ', 1, '135.00', '135.00', '', 0, 0, 1),
(456, 162, 100, 1, 'Mexican Fried Ice cream ', 1, '145.00', '145.00', '', 0, 0, 1),
(457, 162, 148, 1, 'Chilly Babycorn Mushroom ', 1, '225.00', '225.00', '', 0, 0, 1),
(458, 163, 54, 1, 'Chicken Banjara Kebab pcs) ', 1, '335.00', '335.00', '', 0, 0, 1),
(459, 163, 168, 1, 'Drums of Heaven ', 1, '300.00', '300.00', '', 0, 0, 1),
(460, 163, 174, 1, 'Salt & Pepper Fish ', 1, '305.00', '305.00', '', 0, 0, 1),
(461, 163, 36, 1, 'Green Salad ', 1, '90.00', '90.00', '', 0, 0, 1),
(462, 163, 107, 2, 'Aerated Drinks ', 1, '120.00', '60.00', '', 0, 0, 2),
(463, 163, 297, 1, 'TUBORG STRONG  650 ml  ', 5, '280.00', '280.00', '', 0, 0, 1),
(464, 163, 284, 4, 'BLENDERS PRIDE 60 ml  ', 3, '840.00', '210.00', '', 0, 0, 4),
(466, 158, 190, 1, 'Chilly Chicken ', 1, '300.00', '300.00', '', 0, 0, 1),
(467, 158, 251, 1, 'Container ', 1, '16.00', '16.00', '', 0, 0, 1),
(468, 119, 167, 1, 'Pan fried Chicken ', 1, '290.00', '290.00', '', 0, 0, 1),
(469, 119, 190, 1, 'Chilly Chicken ', 1, '300.00', '300.00', '', 0, 0, 1),
(470, 119, 297, 5, 'TUBORG STRONG  650 ml  ', 5, '1400.00', '280.00', '', 0, 0, 5),
(472, 164, 249, 1, 'Mixed Noodles ', 1, '220.00', '220.00', '', 0, 0, 1),
(475, 165, 8, 1, 'Palak Paneer ', 1, '275.00', '275.00', '', 0, 0, 1),
(476, 165, 16, 1, 'Navaratan Korma ', 1, '260.00', '260.00', '', 0, 0, 1),
(477, 167, 309, 2, 'Tandori promfret  ', 1, '1120.00', '560.00', '', 0, 0, 2),
(478, 167, 54, 1, 'Chicken Banjara Kebab pcs) ', 1, '335.00', '335.00', '', 0, 0, 1),
(479, 167, 150, 1, 'French Fry ', 1, '160.00', '160.00', '', 0, 0, 1),
(480, 167, 192, 1, 'Babycorn Mushroom Chicken ', 1, '290.00', '290.00', '', 0, 0, 1),
(481, 167, 295, 2, 'CARLSBERG ELEPHENT STRONG 650 ml  ', 5, '700.00', '350.00', '', 0, 0, 2),
(482, 167, 276, 1, 'BLACK DOG TRIPLE GOLD RESERVE  60 ml  ', 3, '480.00', '480.00', '', 0, 0, 1),
(483, 167, 276, 3, 'BLACK DOG TRIPLE GOLD RESERVE  30 ml  ', 2, '750.00', '250.00', '', 0, 0, 3),
(484, 167, 280, 1, 'VAT 69 30 ml  ', 2, '190.00', '190.00', '', 0, 0, 1),
(485, 168, 84, 7, 'Tandoori Roti ', 1, '350.00', '50.00', '', 0, 0, 7),
(486, 168, 201, 1, 'Chilly Fish ', 1, '300.00', '300.00', '', 0, 0, 1),
(487, 168, 113, 1, 'Lassi ', 1, '95.00', '95.00', '', 0, 0, 1),
(488, 168, 88, 1, 'Butter Naan ', 1, '60.00', '60.00', '', 0, 0, 1),
(489, 168, 10, 1, 'Paneer Butter Masala ', 1, '280.00', '280.00', '', 0, 0, 1),
(490, 168, 216, 2, 'Veg Fried Rice ', 1, '330.00', '165.00', '', 0, 0, 2),
(491, 168, 222, 1, 'Veg Mushroom Onion Rice ', 1, '180.00', '180.00', '', 0, 0, 1),
(492, 168, 24, 1, 'Kali Dal ', 1, '225.00', '225.00', '', 0, 0, 1),
(493, 168, 195, 1, 'Kung Pao Chicken ', 1, '290.00', '290.00', '', 0, 0, 1),
(494, 168, 251, 3, 'Container ', 1, '48.00', '16.00', '', 0, 0, 3),
(495, 169, 34, 1, 'Bhuna Gosht ', 1, '390.00', '390.00', '', 0, 0, 1),
(496, 169, 88, 1, 'Butter Naan ', 1, '60.00', '60.00', '', 0, 0, 1),
(497, 169, 284, 5, 'BLENDERS PRIDE 60 ml  ', 3, '1050.00', '210.00', '', 0, 0, 5),
(498, 170, 224, 2, 'Egg Fried Rice ', 1, '0.00', '0.00', '', 0, 0, 2),
(499, 170, 190, 1, 'Chilly Chicken ', 1, '300.00', '300.00', '', 0, 0, 1),
(500, 170, 297, 2, 'TUBORG STRONG  650 ml  ', 5, '560.00', '280.00', '', 0, 0, 2),
(501, 170, 107, 1, 'Aerated Drinks ', 1, '60.00', '60.00', '', 0, 0, 1),
(502, 171, 88, 2, 'Butter Naan ', 1, '120.00', '60.00', '', 0, 0, 2),
(503, 171, 62, 1, 'Chicken Piaza ', 1, '350.00', '350.00', '', 0, 0, 1),
(504, 171, 192, 1, 'Babycorn Mushroom Chicken ', 1, '290.00', '290.00', '', 0, 0, 1),
(505, 171, 174, 1, 'Salt & Pepper Fish ', 1, '305.00', '305.00', '', 0, 0, 1),
(506, 171, 297, 3, 'TUBORG STRONG  650 ml  ', 5, '840.00', '280.00', '', 0, 0, 3),
(508, 172, 231, 1, 'Mixed Fried Rice ', 1, '220.00', '220.00', '', 0, 0, 1),
(509, 172, 190, 1, 'Chilly Chicken ', 1, '300.00', '300.00', '', 0, 0, 1),
(510, 172, 251, 1, 'Container ', 1, '16.00', '16.00', '', 0, 0, 1),
(511, 172, 202, 1, 'Hot Garlic Fish ', 1, '300.00', '300.00', '', 0, 0, 1),
(512, 172, 167, 1, 'Pan fried Chicken ', 1, '290.00', '290.00', '', 0, 0, 1),
(513, 172, 306, 1, 'BLUE HAWAIAAN 60 ml  ', 3, '160.00', '160.00', '', 0, 0, 1),
(514, 172, 284, 3, 'BLENDERS PRIDE 60 ml  ', 3, '630.00', '210.00', '', 0, 0, 3),
(515, 171, 280, 6, 'VAT 69 60 ml  ', 3, '1980.00', '330.00', '', 0, 0, 6),
(516, 173, 80, 1, 'Roasted Papad ', 1, '35.00', '35.00', '', 0, 0, 1),
(517, 173, 150, 1, 'French Fry ', 1, '160.00', '160.00', '', 0, 0, 1),
(518, 173, 250, 1, 'Minarel Water ', 1, '40.00', '40.00', '', 0, 0, 1),
(519, 173, 280, 6, 'VAT 69 60 ml  ', 3, '1980.00', '330.00', '', 0, 0, 6),
(520, 174, 12, 1, 'Kadai Sabji ', 1, '240.00', '240.00', '', 0, 0, 1),
(521, 174, 107, 12, 'Aerated Drinks ', 1, '720.00', '60.00', '', 0, 0, 12),
(522, 174, 90, 4, 'Kashmiri Naan ', 1, '320.00', '80.00', '', 0, 0, 4),
(523, 174, 249, 1, 'Mixed Noodles ', 1, '220.00', '220.00', '', 0, 0, 1),
(524, 174, 32, 1, 'Mutton Kasa ', 1, '390.00', '390.00', '', 0, 0, 1),
(525, 174, 66, 1, 'Chicken Reshmi Butter Masala ', 1, '355.00', '355.00', '', 0, 0, 1),
(526, 174, 150, 1, 'French Fry ', 1, '160.00', '160.00', '', 0, 0, 1),
(527, 174, 36, 1, 'Green Salad ', 1, '90.00', '90.00', '', 0, 0, 1),
(528, 174, 82, 2, 'Roasted Masala Papad ', 1, '90.00', '45.00', '', 0, 0, 2),
(529, 174, 190, 1, 'Chilly Chicken ', 1, '300.00', '300.00', '', 0, 0, 1),
(530, 174, 177, 1, 'Fish Finger ', 1, '295.00', '295.00', '', 0, 0, 1),
(532, 173, 280, 1, 'VAT 69 30 ml  ', 2, '190.00', '190.00', '', 0, 0, 1),
(534, 175, 231, 1, 'Mixed Fried Rice ', 1, '220.00', '220.00', '', 0, 0, 1),
(535, 175, 107, 2, 'Aerated Drinks ', 1, '120.00', '60.00', '', 0, 0, 2),
(536, 175, 54, 1, 'Chicken Banjara Kebab pcs) ', 1, '335.00', '335.00', '', 0, 0, 1),
(538, 175, 167, 1, 'Pan fried Chicken ', 1, '290.00', '290.00', '', 0, 0, 1),
(539, 175, 285, 3, 'BLENDERS PRIDE RESERVE  60 ml  ', 3, '690.00', '230.00', '', 0, 0, 7),
(544, 174, 303, 8, 'SMIRNOFF 60 ml  ', 3, '1680.00', '210.00', '', 0, 0, 8),
(545, 177, 194, 1, 'Hot & Galic Chicken ', 1, '290.00', '290.00', '', 0, 0, 1),
(546, 177, 88, 1, 'Butter Naan ', 1, '60.00', '60.00', '', 0, 0, 1),
(547, 177, 297, 1, 'TUBORG STRONG  650 ml  ', 5, '280.00', '280.00', '', 0, 0, 1),
(548, 176, 284, 2, 'BLENDERS PRIDE 60 ml  ', 3, '420.00', '210.00', '', 0, 0, 2),
(549, 176, 284, 1, 'BLENDERS PRIDE 30 ml  ', 2, '130.00', '130.00', '', 0, 0, 1),
(550, 178, 177, 1, 'Fish Finger ', 1, '295.00', '295.00', '', 0, 0, 1),
(551, 123, 177, 1, 'Fish Finger ', 1, '295.00', '295.00', '', 0, 0, 1),
(552, 123, 201, 1, 'Chilly Fish ', 1, '300.00', '300.00', '', 0, 0, 1),
(553, 123, 107, 1, 'Aerated Drinks ', 1, '60.00', '60.00', '', 0, 0, 1),
(554, 123, 288, 4, 'BACARDI  60 ml  ', 3, '840.00', '210.00', '', 0, 0, 4),
(555, 123, 303, 1, 'SMIRNOFF 30 ml  ', 2, '130.00', '130.00', '', 0, 0, 1),
(556, 123, 282, 2, '1OO PIPERS  60 ml  ', 3, '660.00', '330.00', '', 0, 0, 2),
(557, 179, 177, 1, 'Fish Finger ', 1, '295.00', '295.00', '', 0, 0, 1),
(558, 179, 297, 3, 'TUBORG STRONG  650 ml  ', 5, '840.00', '280.00', '', 0, 0, 3),
(559, 176, 144, 1, 'Paneer Cheese Ball ', 1, '135.00', '135.00', '', 0, 0, 1),
(560, 176, 87, 1, 'Plain Naan ', 1, '55.00', '55.00', '', 0, 0, 1),
(562, 180, 281, 3, 'TEACHER HIGHLAND CREAM  60 ml  ', 3, '1110.00', '370.00', '', 0, 0, 3),
(563, 181, 177, 1, 'Fish Finger ', 1, '295.00', '295.00', '', 0, 0, 1),
(564, 181, 289, 3, 'OLD MONK 60 ml  ', 3, '510.00', '170.00', '', 0, 0, 7),
(565, 181, 289, 1, 'OLD MONK 30 ml  ', 2, '125.00', '125.00', '', 0, 0, 1),
(566, 182, 51, 1, 'Tandoori Chicken ', 1, '265.00', '265.00', '', 0, 0, 1),
(567, 166, 85, 2, 'Butter Tandoori Roti ', 1, '110.00', '55.00', '', 0, 0, 2),
(568, 166, 51, 1, 'Tandoori Chicken ', 1, '265.00', '265.00', '', 0, 0, 1),
(569, 183, 275, 4, 'JOHNNIE WALKER BLACK LABEL 60 ml  ', 3, '2880.00', '720.00', NULL, 0, 0, 1),
(570, 183, 275, 2, 'JOHNNIE WALKER BLACK LABEL 30 ml  ', 2, '760.00', '380.00', NULL, 0, 0, 1),
(571, 183, 273, 1, 'SINGLE MALT,30 ml', 2, '450.00', '450.00', NULL, 0, 0, 1),
(572, 183, 274, 2, 'CHIVAS REGAL,30 ml', 2, '760.00', '380.00', NULL, 0, 0, 1),
(573, 183, 1, 4, 'Paneer Malai Tikka\n', 1, '1100.00', '275.00', 'More Spicy', 0, 0, 1),
(574, 183, 2, 3, 'Achari Paneer Tikka', 1, '825.00', '275.00', 'More Spicy', 0, 0, 1),
(575, 183, 8, 1, 'Palak Paneer', 1, '275.00', '275.00', 'More Spicy', 0, 0, 1),
(576, 183, 9, 1, 'Paneer Tikka Masala', 1, '275.00', '275.00', 'More Spicy', 0, 0, 1),
(577, 184, 1, 2, 'Paneer Malai Tikka\n,NA', 1, '550.00', '275.00', 'More Spicy', 0, 0, 1),
(578, 184, 2, 2, 'Achari Paneer Tikka,NA', 1, '550.00', '275.00', 'More Spicy', 0, 0, 1),
(579, 185, 273, 1, 'SINGLE MALT,30 ml', 2, '450.00', '450.00', NULL, 0, 0, 1),
(580, 185, 274, 1, 'CHIVAS REGAL,30 ml', 2, '380.00', '380.00', NULL, 0, 0, 1),
(581, 185, 1, 1, 'Paneer Malai Tikka\n,NA', 1, '275.00', '275.00', 'More Spicy', 0, 0, 1),
(582, 185, 2, 1, 'Achari Paneer Tikka,NA', 1, '275.00', '275.00', 'More Spicy', 0, 0, 1),
(583, 186, 273, 1, 'SINGLE MALT,30 ml', 2, '450.00', '450.00', NULL, 0, 0, 1),
(584, 186, 275, 1, 'JOHNNIE WALKER BLACK LABEL,30 ml', 2, '380.00', '380.00', NULL, 0, 0, 1),
(585, 186, 1, 1, 'Paneer Malai Tikka\n,NA', 1, '275.00', '275.00', 'More Spicy', 0, 0, 1),
(586, 186, 4, 1, 'Dahi Kabab,NA', 1, '230.00', '230.00', 'More Spicy', 0, 0, 1),
(587, 187, 292, 8, 'BUDWEISER PREMIUM,650 ml', 5, '2800.00', '350.00', NULL, 0, 0, 4),
(588, 187, 12, 4, 'Kadai Sabji,NA', 1, '960.00', '240.00', 'More Spicy', 0, 0, 2),
(589, 187, 273, 1, 'SINGLE MALT,30 ml', 2, '450.00', '450.00', NULL, 0, 0, 1),
(590, 187, 5, 1, 'Tandoori Aloo', 1, '220.00', '220.00', 'More Spicy', 0, 0, 1),
(591, 188, 273, 12, 'SINGLE MALT,30 ml', 2, '10800.00', '450.00', NULL, 0, 1, 0),
(592, 188, 3, 23, 'Hara Bhara Kebab', 1, '10575.00', '225.00', 'More Spicy', 0, 1, 0),
(593, 188, 4, 3, 'Dahi Kabab', 1, '1610.00', '230.00', 'More Spicy', 0, 1, 0),
(594, 188, 6, 4, 'Chatpata Mushroom', 1, '1100.00', '275.00', 'More Spicy', 0, 1, 0),
(595, 189, 273, 2, 'SINGLE MALT,30 ml', 2, '900.00', '450.00', NULL, 0, 0, 0),
(596, 189, 274, 2, 'CHIVAS REGAL,30 ml', 2, '760.00', '380.00', NULL, 0, 0, 0),
(597, 189, 1, 2, 'Paneer Malai Tikka\n', 1, '550.00', '275.00', 'More Spicy', 0, 0, 0),
(598, 189, 2, 2, 'Achari Paneer Tikka', 1, '550.00', '275.00', 'More Spicy', 0, 0, 0),
(599, 189, 3, 5, 'Hara Bhara Kebab', 1, '1125.00', '225.00', 'More Spicy', 0, 0, 0),
(600, 189, 4, 2, 'Dahi Kabab', 1, '460.00', '230.00', 'More Spicy', 0, 0, 0),
(601, 190, 1, 1, 'Paneer Malai Tikka\n', 1, '275.00', '275.00', NULL, 0, 0, 1),
(602, 190, 1, 1, 'Paneer Malai Tikka\n', 1, '275.00', '275.00', 'More Spicy', 0, 0, 1),
(603, 191, 1, 1, 'Paneer Malai Tikka\n', 1, '275.00', '275.00', 'More Spicy', 0, 0, 0),
(604, 191, 2, 1, 'Achari Paneer Tikka', 1, '275.00', '275.00', 'More Spicy', 0, 0, 0),
(605, 191, 1, 1, 'Paneer Malai Tikka\n', 1, '275.00', '275.00', 'More Spicy', 0, 0, 1),
(606, 191, 2, 1, 'Achari Paneer Tikka', 1, '275.00', '275.00', 'More Spicy', 0, 0, 1),
(611, 193, 1, 1, 'Paneer Malai Tikka\n', 1, '275.00', '275.00', NULL, 0, 0, 1),
(612, 193, 1, 1, 'Paneer Malai Tikka\n', 1, '275.00', '275.00', 'More Spicy', 0, 0, 1),
(619, 192, 88, 4, 'Butter Naan ', 1, '240.00', '60.00', '', 0, 0, 4),
(620, 196, 287, 3, 'OAKSMITH GOLD 60 ml  ', 3, '750.00', '250.00', NULL, 0, 0, 3),
(621, 197, 52, 1, 'Chicken Tikka Kebab ', 1, '325.00', '325.00', '', 0, 0, 1),
(622, 197, 190, 1, 'Chilly Chicken ', 1, '300.00', '300.00', '', 0, 0, 1),
(623, 198, 32, 1, 'Mutton Kasa ', 1, '390.00', '390.00', '', 0, 0, 1),
(624, 198, 84, 2, 'Tandoori Roti ', 1, '100.00', '50.00', '', 0, 0, 2),
(625, 198, 251, 1, 'Container ', 1, '16.00', '16.00', '', 0, 0, 1),
(626, 198, 150, 1, 'French Fry ', 1, '160.00', '160.00', '', 0, 0, 1),
(627, 198, 297, 2, 'TUBORG STRONG  650 ml  ', 5, '560.00', '280.00', NULL, 0, 0, 4),
(628, 199, 283, 7, 'ANTIQUITY BLUE  60 ml  ', 3, '1680.00', '240.00', NULL, 0, 0, 7),
(629, 199, 283, 2, 'ANTIQUITY BLUE  30 ml  ', 2, '290.00', '145.00', NULL, 0, 0, 2),
(630, 201, 284, 2, 'BLENDERS PRIDE 60 ml  ', 3, '420.00', '210.00', NULL, 0, 0, 18),
(631, 201, 250, 1, 'Minarel Water ', 1, '40.00', '40.00', '', 0, 0, 1),
(632, 200, 240, 1, 'Chicken Hakka Noodles ', 1, '185.00', '185.00', '', 0, 0, 1),
(633, 200, 250, 1, 'Minarel Water ', 1, '40.00', '40.00', '', 0, 0, 1),
(634, 200, 51, 1, 'Tandoori Chicken ', 1, '265.00', '265.00', '', 0, 0, 1),
(635, 202, 231, 1, 'Mixed Fried Rice ', 1, '220.00', '220.00', '', 0, 0, 1),
(636, 202, 190, 1, 'Chilly Chicken ', 1, '300.00', '300.00', '', 0, 0, 1),
(637, 202, 36, 1, 'Green Salad ', 1, '90.00', '90.00', '', 0, 0, 1),
(638, 203, 280, 10, 'VAT 69 60 ml  ', 3, '3300.00', '330.00', NULL, 0, 0, 10),
(639, 203, 286, 5, 'SIGNATURE PREMIER 60 ml  ', 3, '1150.00', '230.00', NULL, 0, 0, 5),
(643, 205, 174, 1, 'Salt & Pepper Fish ', 1, '305.00', '305.00', '', 0, 0, 1),
(644, 205, 250, 2, 'Minarel Water ', 1, '80.00', '40.00', '', 0, 0, 4),
(645, 205, 231, 1, 'Mixed Fried Rice ', 1, '220.00', '220.00', '', 0, 0, 1),
(646, 205, 196, 1, 'Hong Kang Chicken ', 1, '290.00', '290.00', '', 0, 0, 1),
(647, 205, 163, 1, 'Diced Chicken pepper Ginger & Garlic ', 1, '290.00', '290.00', '', 0, 0, 1),
(648, 205, 112, 2, 'Fresh Lime Soda ', 1, '170.00', '85.00', '', 0, 0, 2),
(649, 206, 223, 3, 'Chicken Fried Rice ', 1, '585.00', '195.00', '', 0, 0, 3),
(650, 206, 190, 2, 'Chilly Chicken ', 1, '600.00', '300.00', '', 0, 0, 2),
(651, 207, 167, 1, 'Pan fried Chicken ', 1, '290.00', '290.00', '', 0, 0, 1),
(652, 207, 177, 2, 'Fish Finger ', 1, '590.00', '295.00', '', 0, 0, 2),
(653, 207, 251, 1, 'Container ', 1, '16.00', '16.00', '', 0, 0, 1),
(654, 207, 282, 1, '1OO PIPERS  30 ml  ', 2, '190.00', '190.00', NULL, 0, 0, 11),
(655, 207, 282, 3, '1OO PIPERS  60 ml  ', 3, '990.00', '330.00', NULL, 0, 0, 7),
(656, 208, 303, 2, 'SMIRNOFF 60 ml  ', 3, '420.00', '210.00', NULL, 0, 0, 2),
(658, 208, 284, 2, 'BLENDERS PRIDE 60 ml  ', 3, '420.00', '210.00', NULL, 0, 0, 2),
(665, 209, 144, 1, 'Paneer Cheese Ball ', 1, '135.00', '135.00', '', 0, 0, 1),
(666, 209, 32, 1, 'Mutton Kasa ', 1, '390.00', '390.00', '', 0, 0, 1),
(667, 209, 216, 1, 'Veg Fried Rice ', 1, '165.00', '165.00', '', 0, 0, 1),
(668, 209, 88, 2, 'Butter Naan ', 1, '120.00', '60.00', '', 0, 0, 2),
(669, 209, 107, 1, 'Aerated Drinks ', 1, '60.00', '60.00', '', 0, 0, 1),
(670, 210, 176, 1, 'Fish Fry ', 1, '285.00', '285.00', '', 0, 0, 1),
(671, 210, 296, 2, 'BUDWEISER MAGNUM STRONG 650 ml  ', 5, '760.00', '380.00', NULL, 0, 0, 2),
(672, 211, 303, 1, 'SMIRNOFF 60 ml  ', 3, '210.00', '210.00', NULL, 0, 0, 1),
(673, 204, 231, 4, 'Mixed Fried Rice ', 1, '880.00', '220.00', '', 0, 0, 4),
(674, 204, 177, 2, 'Fish Finger ', 1, '590.00', '295.00', '', 0, 0, 6),
(675, 204, 190, 2, 'Chilly Chicken ', 1, '600.00', '300.00', '', 0, 0, 2),
(676, 204, 194, 1, 'Hot & Galic Chicken ', 1, '290.00', '290.00', '', 0, 0, 1),
(677, 204, 250, 2, 'Minarel Water ', 1, '80.00', '40.00', '', 0, 0, 2),
(678, 212, 223, 1, 'Chicken Fried Rice ', 1, '195.00', '195.00', '', 0, 0, 1),
(679, 212, 49, 1, 'Mutton Pulao ', 1, '210.00', '210.00', '', 0, 0, 1),
(680, 212, 251, 3, 'Container ', 1, '48.00', '16.00', '', 0, 0, 3),
(681, 212, 150, 1, 'French Fry ', 1, '160.00', '160.00', '', 0, 0, 1),
(682, 212, 102, 1, 'Single Sundae ', 1, '95.00', '95.00', '', 0, 0, 1),
(683, 212, 154, 1, 'Chicken Clear Soup ', 1, '130.00', '130.00', '', 0, 0, 1),
(684, 212, 169, 1, 'Chicken Lollypop ', 1, '300.00', '300.00', '', 0, 0, 1),
(685, 212, 288, 8, 'BACARDI  30 ml  ', 2, '1040.00', '130.00', NULL, 0, 0, 8),
(687, 212, 107, 4, 'Aerated Drinks ', 1, '240.00', '60.00', '', 0, 0, 4),
(688, 212, 31, 1, 'Gosht Dum Handi ', 1, '390.00', '390.00', '', 0, 0, 1),
(690, 213, 98, 1, 'Steam Rice ', 1, '120.00', '120.00', '', 0, 0, 1),
(691, 213, 28, 1, 'Mutton Masala ', 1, '390.00', '390.00', '', 0, 0, 1),
(692, 213, 251, 2, 'Container ', 1, '32.00', '16.00', '', 0, 0, 2),
(693, 213, 36, 2, 'Green Salad ', 1, '180.00', '90.00', '', 0, 0, 2),
(694, 213, 252, 1, 'Soda ', 1, '50.00', '50.00', '', 0, 0, 1),
(695, 213, 282, 3, '1OO PIPERS  60 ml  ', 3, '990.00', '330.00', NULL, 0, 0, 3),
(696, 214, 298, 1, 'KINGFISHER STRONG 650 ml  ', 5, '280.00', '280.00', NULL, 0, 0, 1),
(697, 215, 284, 1, 'BLENDERS PRIDE 60 ml  ', 3, '210.00', '210.00', NULL, 0, 0, 1),
(698, 215, 282, 1, '1OO PIPERS  30 ml  ', 2, '190.00', '190.00', NULL, 0, 0, 1),
(699, 216, 297, 1, 'TUBORG STRONG  650 ml  ', 5, '280.00', '280.00', NULL, 0, 0, 1),
(700, 217, 297, 2, 'TUBORG STRONG  650 ml  ', 5, '560.00', '280.00', NULL, 0, 0, 2),
(701, 217, 299, 1, 'KINGFISHER STROM  650 ml  ', 5, '320.00', '320.00', NULL, 0, 0, 1),
(703, 195, 51, 1, 'Tandoori Chicken ', 1, '265.00', '265.00', '', 0, 0, 1),
(704, 219, 87, 1, 'Plain Naan ', 1, '55.00', '55.00', '', 0, 0, 1),
(705, 219, 176, 1, 'Fish Fry ', 1, '285.00', '285.00', '', 0, 0, 1),
(706, 219, 169, 1, 'Chicken Lollypop ', 1, '300.00', '300.00', '', 0, 0, 1),
(707, 219, 84, 2, 'Tandoori Roti ', 1, '100.00', '50.00', '', 0, 0, 2),
(708, 219, 25, 1, 'Dal Fry ', 1, '190.00', '190.00', '', 0, 0, 1),
(709, 219, 135, 1, 'Veg Sweet Corn Soup ', 1, '125.00', '125.00', '', 0, 0, 1),
(710, 219, 306, 1, 'BLUE HAWAIAAN 60 ml  ', 3, '160.00', '160.00', NULL, 0, 0, 1),
(712, 220, 190, 1, 'Chilly Chicken ', 1, '300.00', '300.00', '', 0, 0, 1),
(713, 194, 88, 4, 'Butter Naan ', 1, '240.00', '60.00', '', 0, 0, 4),
(714, 194, 251, 1, 'Container ', 1, '16.00', '16.00', '', 0, 0, 1),
(715, 194, 67, 1, 'Chicken Bharta ', 1, '340.00', '340.00', '', 0, 0, 1),
(716, 194, 36, 1, 'Green Salad ', 1, '90.00', '90.00', '', 0, 0, 1),
(717, 194, 176, 1, 'Fish Fry ', 1, '285.00', '285.00', '', 0, 0, 1),
(718, 194, 296, 1, 'BUDWEISER MAGNUM STRONG 650 ml  ', 5, '380.00', '380.00', NULL, 0, 0, 1),
(719, 221, 190, 2, 'Chilly Chicken ', 1, '600.00', '300.00', '', 0, 0, 2),
(720, 221, 177, 2, 'Fish Finger ', 1, '590.00', '295.00', '', 0, 0, 2),
(721, 221, 170, 2, 'Bali Chicken ', 1, '580.00', '290.00', '', 0, 0, 2),
(722, 221, 250, 1, 'Minarel Water ', 1, '40.00', '40.00', '', 0, 0, 1),
(723, 221, 107, 3, 'Aerated Drinks ', 1, '180.00', '60.00', '', 0, 0, 3),
(724, 221, 150, 1, 'French Fry ', 1, '160.00', '160.00', '', 0, 0, 1),
(725, 221, 158, 1, 'Chicken Hot & Sour Soup ', 1, '135.00', '135.00', '', 0, 0, 1),
(726, 221, 112, 2, 'Fresh Lime Soda ', 1, '170.00', '85.00', '', 0, 0, 2),
(727, 221, 276, 3, 'BLACK DOG TRIPLE GOLD RESERVE  60 ml  ', 3, '1440.00', '480.00', NULL, 0, 0, 3),
(729, 221, 289, 2, 'OLD MONK 60 ml  ', 3, '340.00', '170.00', NULL, 0, 0, 4),
(730, 221, 281, 1, 'TEACHER HIGHLAND CREAM  60 ml  ', 3, '370.00', '370.00', NULL, 0, 0, 1),
(731, 222, 177, 2, 'Fish Finger ', 1, '590.00', '295.00', '', 0, 0, 2),
(732, 222, 167, 1, 'Pan fried Chicken ', 1, '290.00', '290.00', '', 0, 0, 1),
(733, 222, 296, 6, 'BUDWEISER MAGNUM STRONG 650 ml  ', 5, '2280.00', '380.00', NULL, 0, 0, 6),
(734, 224, 50, 1, 'Tandoori Chicken ', 1, '400.00', '400.00', '', 0, 0, 1),
(735, 224, 231, 1, 'Mixed Fried Rice ', 1, '220.00', '220.00', '', 0, 0, 1),
(737, 224, 196, 1, 'Hong Kang Chicken ', 1, '290.00', '290.00', '', 0, 0, 1),
(738, 224, 296, 1, 'BUDWEISER MAGNUM STRONG 650 ml  ', 5, '380.00', '380.00', NULL, 0, 0, 1),
(739, 223, 281, 2, 'TEACHER HIGHLAND CREAM  30 ml  ', 2, '400.00', '200.00', NULL, 0, 0, 2),
(740, 225, 284, 2, 'BLENDERS PRIDE 60 ml  ', 3, '420.00', '210.00', NULL, 0, 0, 2),
(742, 226, 284, 3, 'BLENDERS PRIDE 60 ml  ', 3, '630.00', '210.00', NULL, 0, 0, 3),
(743, 227, 249, 1, 'Mixed Noodles ', 1, '220.00', '220.00', '', 0, 0, 1),
(744, 227, 251, 1, 'Container ', 1, '16.00', '16.00', '', 0, 0, 1),
(745, 228, 177, 1, 'Fish Finger ', 1, '295.00', '295.00', '', 0, 0, 1),
(746, 228, 250, 1, 'Minarel Water ', 1, '40.00', '40.00', '', 0, 0, 1),
(747, 228, 252, 1, 'Soda ', 1, '50.00', '50.00', '', 0, 0, 1),
(748, 228, 107, 2, 'Aerated Drinks ', 1, '120.00', '60.00', '', 0, 0, 2),
(749, 229, 282, 4, '1OO PIPERS  60 ml  ', 3, '1320.00', '330.00', NULL, 0, 0, 8),
(750, 229, 250, 1, 'Minarel Water ', 1, '40.00', '40.00', '', 0, 0, 1),
(751, 230, 284, 2, 'BLENDERS PRIDE 60 ml  ', 3, '420.00', '210.00', NULL, 0, 0, 2),
(752, 231, 284, 2, 'BLENDERS PRIDE 30 ml  ', 2, '260.00', '130.00', NULL, 0, 0, 2),
(753, 231, 284, 2, 'BLENDERS PRIDE 60 ml  ', 3, '420.00', '210.00', NULL, 0, 0, 2),
(754, 232, 249, 1, 'Mixed Noodles ', 1, '220.00', '220.00', '', 0, 0, 1),
(755, 232, 251, 1, 'Container ', 1, '16.00', '16.00', '', 0, 0, 1),
(756, 232, 177, 1, 'Fish Finger ', 1, '295.00', '295.00', '', 0, 0, 1),
(757, 232, 107, 2, 'Aerated Drinks ', 1, '120.00', '60.00', '', 0, 0, 2),
(758, 232, 284, 6, 'BLENDERS PRIDE 60 ml  ', 3, '1260.00', '210.00', NULL, 0, 0, 6),
(760, 218, 93, 1, 'Lachedar Parantha ', 1, '75.00', '75.00', '', 0, 0, 1),
(761, 218, 5, 1, 'Tandoori Aloo ', 1, '220.00', '220.00', '', 0, 0, 1),
(762, 218, 144, 1, 'Paneer Cheese Ball ', 1, '135.00', '135.00', '', 0, 0, 1),
(763, 234, 299, 1, 'KINGFISHER STROM  650 ml  ', 5, '320.00', '320.00', NULL, 0, 0, 1),
(764, 235, 169, 1, 'Chicken Lollypop ', 1, '300.00', '300.00', '', 0, 0, 1),
(765, 235, 171, 1, 'Green Land Chicken ', 1, '310.00', '310.00', '', 0, 0, 1),
(766, 235, 297, 5, 'TUBORG STRONG  650 ml  ', 5, '1400.00', '280.00', NULL, 0, 0, 5),
(767, 235, 177, 1, 'Fish Finger ', 1, '295.00', '295.00', '', 0, 0, 1),
(768, 236, 51, 1, 'Tandoori Chicken ', 1, '265.00', '265.00', '', 0, 0, 1),
(769, 236, 288, 2, 'BACARDI  60 ml  ', 3, '420.00', '210.00', NULL, 0, 0, 2),
(770, 236, 297, 1, 'TUBORG STRONG  650 ml  ', 5, '280.00', '280.00', NULL, 0, 0, 1),
(771, 236, 107, 1, 'Aerated Drinks ', 1, '60.00', '60.00', '', 0, 0, 1),
(772, 237, 216, 1, 'Veg Fried Rice ', 1, '165.00', '165.00', '', 0, 0, 1),
(773, 237, 223, 2, 'Chicken Fried Rice ', 1, '390.00', '195.00', '', 0, 0, 2),
(774, 237, 201, 1, 'Chilly Fish ', 1, '300.00', '300.00', '', 0, 0, 1),
(775, 237, 190, 1, 'Chilly Chicken ', 1, '300.00', '300.00', '', 0, 0, 1),
(776, 238, 80, 1, 'Roasted Papad ', 1, '35.00', '35.00', '', 0, 0, 1),
(777, 238, 24, 1, 'Kali Dal ', 1, '225.00', '225.00', '', 0, 0, 1),
(778, 238, 88, 3, 'Butter Naan ', 1, '180.00', '60.00', '', 0, 0, 3),
(779, 238, 10, 1, 'Paneer Butter Masala ', 1, '280.00', '280.00', '', 0, 0, 1),
(780, 238, 216, 1, 'Veg Fried Rice ', 1, '165.00', '165.00', '', 0, 0, 1),
(781, 238, 153, 1, 'Crispy Mushroom Pepper Salt ', 1, '225.00', '225.00', '', 0, 0, 1),
(782, 238, 250, 1, 'Minarel Water ', 1, '40.00', '40.00', '', 0, 0, 1),
(783, 238, 107, 1, 'Aerated Drinks ', 1, '60.00', '60.00', '', 0, 0, 1),
(784, 238, 284, 3, 'BLENDERS PRIDE 60 ml  ', 3, '630.00', '210.00', NULL, 0, 0, 3),
(785, 238, 252, 1, 'Soda ', 1, '50.00', '50.00', '', 0, 0, 1),
(786, 239, 201, 1, 'Chilly Fish ', 1, '300.00', '300.00', '', 0, 0, 1),
(787, 239, 231, 1, 'Mixed Fried Rice ', 1, '220.00', '220.00', '', 0, 0, 1),
(788, 239, 177, 1, 'Fish Finger ', 1, '295.00', '295.00', '', 0, 0, 1),
(791, 238, 251, 3, 'Container ', 1, '48.00', '16.00', '', 0, 0, 3),
(792, 239, 161, 1, 'Mixed Thai Soup ', 1, '150.00', '150.00', '', 0, 0, 1),
(793, 240, 284, 1, 'BLENDERS PRIDE 60 ml  ', 3, '210.00', '210.00', NULL, 0, 0, 1),
(795, 233, 190, 1, 'Chilly Chicken ', 1, '300.00', '300.00', '', 0, 0, 1),
(797, 241, 45, 1, 'Veg Pulao ', 1, '170.00', '170.00', '', 0, 0, 1),
(798, 241, 32, 1, 'Mutton Kasa ', 1, '390.00', '390.00', '', 0, 0, 1),
(799, 241, 251, 2, 'Container ', 1, '32.00', '16.00', '', 0, 0, 2),
(801, 244, 184, 1, 'Chilly Paneer ', 1, '235.00', '235.00', '', 0, 0, 1),
(802, 244, 310, 1, 'peanuts masala ', 1, '100.00', '100.00', '', 0, 0, 1),
(803, 244, 288, 3, 'BACARDI  60 ml  ', 3, '630.00', '210.00', NULL, 0, 0, 3),
(804, 243, 192, 1, 'Babycorn Mushroom Chicken ', 1, '290.00', '290.00', '', 0, 0, 1),
(805, 243, 251, 1, 'Container ', 1, '16.00', '16.00', '', 0, 0, 1),
(806, 243, 284, 2, 'BLENDERS PRIDE 30 ml  ', 2, '260.00', '130.00', NULL, 0, 0, 2),
(807, 243, 284, 2, 'BLENDERS PRIDE 60 ml  ', 3, '420.00', '210.00', NULL, 0, 0, 2),
(808, 245, 177, 1, 'Fish Finger ', 1, '295.00', '295.00', '', 0, 0, 1),
(809, 245, 51, 1, 'Tandoori Chicken ', 1, '265.00', '265.00', '', 0, 0, 1),
(810, 245, 201, 1, 'Chilly Fish ', 1, '300.00', '300.00', '', 0, 0, 1),
(811, 245, 112, 1, 'Fresh Lime Soda ', 1, '85.00', '85.00', '', 0, 0, 1),
(812, 245, 296, 3, 'BUDWEISER MAGNUM STRONG 650 ml  ', 5, '1140.00', '380.00', NULL, 0, 0, 3),
(813, 245, 297, 5, 'TUBORG STRONG  650 ml  ', 5, '1400.00', '280.00', NULL, 0, 0, 5),
(814, 245, 299, 1, 'KINGFISHER STROM  650 ml  ', 5, '320.00', '320.00', NULL, 0, 0, 1),
(815, 246, 311, 1, 'veg quick bite ', 1, '145.00', '145.00', '', 0, 0, 1),
(816, 247, 281, 5, 'TEACHER HIGHLAND CREAM  60 ml  ', 3, '1850.00', '370.00', NULL, 0, 0, 7),
(838, 242, 177, 2, 'Fish Finger ', 1, '590.00', '295.00', '', 0, 0, 2),
(839, 242, 9, 2, 'Paneer Tikka Masala ', 1, '550.00', '275.00', '', 0, 0, 2),
(840, 242, 50, 1, 'Tandoori Chicken ', 1, '400.00', '400.00', '', 0, 0, 1),
(841, 242, 53, 1, 'Chicken MALAI Kebab ', 1, '325.00', '325.00', '', 0, 0, 1),
(842, 242, 251, 6, 'Container ', 1, '96.00', '16.00', '', 0, 0, 8),
(843, 250, 82, 1, 'Roasted Masala Papad ', 1, '45.00', '45.00', '', 0, 0, 1),
(844, 250, 84, 2, 'Tandoori Roti ', 1, '100.00', '50.00', '', 0, 0, 2),
(845, 250, 85, 2, 'Butter Tandoori Roti ', 1, '110.00', '55.00', '', 0, 0, 2),
(846, 250, 216, 1, 'Veg Fried Rice ', 1, '165.00', '165.00', '', 0, 0, 1),
(847, 250, 190, 1, 'Chilly Chicken ', 1, '300.00', '300.00', '', 0, 0, 1),
(848, 250, 6, 1, 'Chatpata Mushroom ', 1, '275.00', '275.00', '', 0, 0, 1),
(850, 251, 46, 1, 'Peas Pulao ', 1, '180.00', '180.00', '', 0, 0, 1),
(851, 251, 96, 1, 'Chicken Dum Biriyani ', 1, '250.00', '250.00', '', 0, 0, 1),
(852, 251, 36, 1, 'Green Salad ', 1, '90.00', '90.00', '', 0, 0, 1),
(853, 250, 251, 2, 'Container ', 1, '32.00', '16.00', '', 0, 0, 9),
(854, 251, 115, 2, 'Jal jeera ', 1, '140.00', '70.00', '', 0, 0, 2),
(861, 253, 190, 1, 'Chilly Chicken ', 1, '300.00', '300.00', '', 0, 0, 1),
(862, 254, 295, 2, 'CARLSBERG ELEPHENT STRONG 650 ml  ', 5, '700.00', '350.00', NULL, 0, 0, 2),
(863, 255, 36, 1, 'Green Salad ', 1, '90.00', '90.00', '', 0, 0, 7),
(864, 255, 80, 1, 'Roasted Papad ', 1, '35.00', '35.00', '', 0, 0, 1),
(865, 256, 284, 5, 'BLENDERS PRIDE 60 ml  ', 3, '1050.00', '210.00', NULL, 0, 0, 5),
(866, 256, 250, 1, 'Minarel Water ', 1, '40.00', '40.00', '', 0, 0, 1),
(867, 252, 291, 1, 'CARLSBERG PREMIUM SMOOTH 650 ml  ', 5, '330.00', '330.00', NULL, 0, 0, 1),
(868, 252, 299, 1, 'KINGFISHER STROM  650 ml  ', 5, '320.00', '320.00', NULL, 0, 0, 1),
(869, 257, 150, 1, 'French Fry ', 1, '160.00', '160.00', '', 0, 0, 1),
(870, 257, 80, 1, 'Roasted Papad ', 1, '35.00', '35.00', '', 0, 0, 1),
(872, 249, 308, 1, ' TandoriWings ', 1, '260.00', '260.00', '', 0, 0, 1),
(873, 259, 285, 1, 'BLENDERS PRIDE RESERVE  60 ml  ', 3, '230.00', '230.00', NULL, 0, 0, 1),
(874, 260, 190, 1, 'Chilly Chicken ', 1, '300.00', '300.00', '', 0, 0, 1),
(875, 261, 297, 1, 'TUBORG STRONG  650 ml  ', 5, '280.00', '280.00', NULL, 0, 0, 1),
(876, 262, 308, 1, ' TandoriWings ', 1, '260.00', '260.00', '', 0, 0, 1),
(877, 263, 298, 2, 'KINGFISHER STRONG 650 ml  ', 5, '560.00', '280.00', NULL, 0, 0, 2),
(878, 264, 231, 1, 'Mixed Fried Rice ', 1, '220.00', '220.00', '', 0, 0, 1),
(879, 264, 177, 1, 'Fish Finger ', 1, '295.00', '295.00', '', 0, 0, 1),
(880, 264, 112, 1, 'Fresh Lime Soda ', 1, '85.00', '85.00', '', 0, 0, 1),
(882, 265, 284, 3, 'BLENDERS PRIDE 60 ml  ', 3, '630.00', '210.00', NULL, 0, 0, 3),
(883, 266, 144, 1, 'Paneer Cheese Ball ', 1, '135.00', '135.00', '', 0, 0, 1);
INSERT INTO `order_details_master` (`order_details_id`, `order_id`, `food_id`, `quantity`, `food_information`, `size_id`, `sub_total`, `food_unit_price`, `food_comments`, `del_status`, `kitchen_status`, `kitchen_quantity`) VALUES
(884, 267, 284, 3, 'BLENDERS PRIDE 60 ml  ', 3, '630.00', '210.00', NULL, 0, 0, 3),
(885, 268, 303, 13, 'SMIRNOFF 60 ml  ', 3, '2730.00', '210.00', NULL, 0, 0, 13),
(886, 268, 107, 3, 'Aerated Drinks ', 1, '180.00', '60.00', '', 0, 0, 3),
(888, 248, 249, 1, 'Mixed Noodles ', 1, '220.00', '220.00', '', 0, 0, 1),
(889, 248, 10, 1, 'Paneer Butter Masala ', 1, '280.00', '280.00', '', 0, 0, 1),
(890, 248, 84, 2, 'Tandoori Roti ', 1, '100.00', '50.00', '', 0, 0, 2),
(891, 248, 148, 1, 'Chilly Babycorn Mushroom ', 1, '225.00', '225.00', '', 0, 0, 1),
(892, 269, 276, 4, 'BLACK DOG TRIPLE GOLD RESERVE  60 ml  ', 3, '1920.00', '480.00', NULL, 0, 0, 4),
(893, 270, 284, 3, 'BLENDERS PRIDE 60 ml  ', 3, '630.00', '210.00', NULL, 0, 0, 3),
(894, 271, 284, 2, 'BLENDERS PRIDE 60 ml  ', 3, '420.00', '210.00', NULL, 0, 0, 2),
(895, 272, 144, 1, 'Paneer Cheese Ball ', 1, '135.00', '135.00', '', 0, 0, 1),
(897, 273, 282, 1, '1OO PIPERS  30 ml  ', 2, '190.00', '190.00', NULL, 0, 0, 1),
(898, 273, 282, 1, '1OO PIPERS  60 ml  ', 3, '330.00', '330.00', NULL, 0, 0, 1),
(899, 274, 284, 3, 'BLENDERS PRIDE 60 ml  ', 3, '630.00', '210.00', NULL, 0, 0, 3),
(900, 275, 250, 1, 'Minarel Water ', 1, '40.00', '40.00', '', 0, 0, 1),
(901, 276, 26, 1, 'Jeera Dal ', 1, '190.00', '190.00', '', 0, 0, 1),
(902, 276, 73, 1, 'Fish Tawa Masala ', 1, '365.00', '365.00', '', 0, 0, 1),
(903, 276, 251, 2, 'Container ', 1, '32.00', '16.00', '', 0, 0, 2),
(904, 277, 291, 3, 'CARLSBERG PREMIUM SMOOTH 650 ml  ', 5, '990.00', '330.00', NULL, 0, 0, 3),
(905, 277, 298, 2, 'KINGFISHER STRONG 650 ml  ', 5, '560.00', '280.00', NULL, 0, 0, 2),
(906, 278, 192, 1, 'Babycorn Mushroom Chicken ', 1, '290.00', '290.00', '', 0, 0, 1),
(907, 278, 250, 1, 'Minarel Water ', 1, '40.00', '40.00', '', 0, 0, 1),
(909, 258, 164, 1, 'Chicken Konjee ', 1, '290.00', '290.00', '', 0, 0, 1),
(910, 280, 282, 2, '1OO PIPERS  60 ml  ', 3, '660.00', '330.00', NULL, 0, 0, 2),
(911, 281, 284, 3, 'BLENDERS PRIDE 60 ml  ', 3, '630.00', '210.00', NULL, 0, 0, 3),
(913, 279, 251, 1, 'Container ', 1, '16.00', '16.00', '', 0, 0, 1),
(914, 279, 31, 1, 'Gosht Dum Handi ', 1, '390.00', '390.00', '', 0, 0, 1),
(915, 283, 125, 1, 'Chicken Tandoori Butter Masala ', 1, '415.00', '415.00', 'More Spicy', 0, 0, 0),
(916, 282, 125, 1, 'Chicken Tandoori Butter Masala ', 1, '415.00', '415.00', '', 0, 0, 1),
(917, 282, 216, 1, 'Veg Fried Rice ', 1, '165.00', '165.00', '', 0, 0, 1),
(918, 284, 82, 1, 'Roasted Masala Papad ', 1, '45.00', '45.00', '', 0, 0, 1),
(919, 284, 107, 1, 'Aerated Drinks ', 1, '60.00', '60.00', '', 0, 0, 1),
(920, 285, 289, 8, 'OLD MONK 60 ml  ', 3, '1360.00', '170.00', NULL, 0, 0, 8),
(921, 286, 168, 2, 'Drums of Heaven ', 1, '600.00', '300.00', '', 0, 0, 2),
(922, 286, 251, 2, 'Container ', 1, '32.00', '16.00', '', 0, 0, 2),
(923, 286, 231, 1, 'Mixed Fried Rice ', 1, '220.00', '220.00', '', 0, 0, 1),
(924, 286, 190, 1, 'Chilly Chicken ', 1, '300.00', '300.00', '', 0, 0, 1),
(925, 286, 250, 1, 'Minarel Water ', 1, '40.00', '40.00', '', 0, 0, 1),
(926, 287, 297, 1, 'TUBORG STRONG  650 ml  ', 5, '280.00', '280.00', NULL, 0, 0, 1),
(927, 287, 298, 2, 'KINGFISHER STRONG 650 ml  ', 5, '560.00', '280.00', NULL, 0, 0, 2),
(928, 288, 177, 1, 'Fish Finger ', 1, '295.00', '295.00', '', 0, 0, 1),
(929, 288, 1, 2, 'Paneer Malai Tikka\n ', 1, '550.00', '275.00', '', 0, 0, 2),
(930, 288, 82, 1, 'Roasted Masala Papad ', 1, '45.00', '45.00', '', 0, 0, 1),
(931, 288, 149, 1, 'Chilly Babycorn ', 1, '255.00', '255.00', '', 0, 0, 1),
(932, 288, 186, 1, 'Chilly Mushroom ', 1, '235.00', '235.00', '', 0, 0, 1),
(933, 289, 72, 1, 'Kadai Chicken ', 1, '365.00', '365.00', '', 0, 0, 1),
(934, 289, 36, 1, 'Green Salad ', 1, '90.00', '90.00', '', 0, 0, 1),
(935, 289, 216, 2, 'Veg Fried Rice ', 1, '330.00', '165.00', '', 0, 0, 2),
(936, 289, 182, 1, 'Veg Manchurian ', 1, '205.00', '205.00', '', 0, 0, 1),
(937, 289, 107, 2, 'Aerated Drinks ', 1, '120.00', '60.00', '', 0, 0, 2),
(938, 289, 88, 6, 'Butter Naan ', 1, '360.00', '60.00', '', 0, 0, 6),
(939, 289, 28, 1, 'Mutton Masala ', 1, '390.00', '390.00', '', 0, 0, 1),
(940, 289, 10, 1, 'Paneer Butter Masala ', 1, '280.00', '280.00', '', 0, 0, 1),
(941, 290, 289, 2, 'OLD MONK 60 ml  ', 3, '340.00', '170.00', NULL, 0, 0, 2),
(942, 291, 291, 6, 'CARLSBERG PREMIUM SMOOTH 650 ml  ', 5, '1980.00', '330.00', NULL, 0, 0, 6),
(943, 291, 298, 1, 'KINGFISHER STRONG 650 ml  ', 5, '280.00', '280.00', NULL, 0, 0, 1),
(947, 292, 250, 1, 'Minarel Water ', 1, '40.00', '40.00', '', 0, 0, 1),
(948, 292, 284, 1, 'BLENDERS PRIDE 30 ml  ', 2, '130.00', '130.00', NULL, 0, 0, 1),
(949, 292, 284, 1, 'BLENDERS PRIDE 60 ml  ', 3, '210.00', '210.00', NULL, 0, 0, 1),
(950, 293, 175, 1, 'Crispy Fish Garlic pepper ', 1, '305.00', '305.00', '', 0, 0, 1),
(951, 293, 177, 1, 'Fish Finger ', 1, '295.00', '295.00', '', 0, 0, 1),
(952, 293, 195, 1, 'Kung Pao Chicken ', 1, '290.00', '290.00', '', 0, 0, 1),
(953, 293, 250, 1, 'Minarel Water ', 1, '40.00', '40.00', '', 0, 0, 1),
(954, 294, 287, 5, 'OAKSMITH GOLD 60 ml  ', 3, '1250.00', '250.00', NULL, 0, 0, 5),
(955, 295, 1, 1, 'Paneer Malai Tikka\n', 1, '275.00', '275.00', 'More Spicy', 0, 0, 0),
(956, 295, 2, 1, 'Achari Paneer Tikka', 1, '275.00', '275.00', 'More Spicy', 0, 0, 0),
(957, 295, 1, 1, 'Paneer Malai Tikka\n', 1, '275.00', '275.00', 'More Spicy', 0, 0, 1),
(958, 295, 2, 1, 'Achari Paneer Tikka', 1, '275.00', '275.00', 'More Spicy', 0, 0, 1),
(959, 296, 7, 1, 'Tandoori Babycorn', 1, '275.00', '275.00', 'More Spicy', 0, 0, 0),
(960, 296, 8, 1, 'Palak Paneer', 1, '275.00', '275.00', NULL, 0, 0, 1),
(961, 296, 7, 1, 'Tandoori Babycorn', 1, '275.00', '275.00', 'More Spicy', 0, 0, 1),
(962, 296, 8, 1, 'Palak Paneer', 1, '275.00', '275.00', 'More Spicy', 0, 0, 1),
(963, 297, 1, 1, 'Paneer Malai Tikka\n', 1, '275.00', '275.00', NULL, 0, 0, 1),
(964, 297, 1, 1, 'Paneer Malai Tikka\n', 1, '275.00', '275.00', 'More Spicy', 0, 0, 1),
(965, 298, 3, 1, 'Hara Bhara Kebab ', 1, '225.00', '225.00', '', 0, 0, 1),
(966, 298, 275, 1, 'JOHNNIE WALKER BLACK LABEL 30 ml  ', 2, '380.00', '380.00', NULL, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_master`
--

CREATE TABLE `order_master` (
  `order_id` int(11) NOT NULL,
  `table_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `order_date` datetime DEFAULT current_timestamp(),
  `food_total` decimal(10,2) NOT NULL,
  `food_total_with_gst` decimal(10,2) NOT NULL,
  `drinks_total` decimal(10,2) NOT NULL,
  `food_gst` decimal(10,2) NOT NULL,
  `grand_total` decimal(10,2) NOT NULL,
  `discount` decimal(10,2) NOT NULL,
  `discount_percentage` int(11) NOT NULL DEFAULT 0,
  `bill_invoice_number` varchar(255) NOT NULL,
  `customer_info` varchar(1000) NOT NULL,
  `payment_info` longtext NOT NULL,
  `status_id` int(11) NOT NULL DEFAULT 1,
  `order_comments` varchar(2000) NOT NULL,
  `order_update_datetime` datetime NOT NULL DEFAULT current_timestamp(),
  `order_only_date` date DEFAULT current_timestamp(),
  `del_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_master`
--

INSERT INTO `order_master` (`order_id`, `table_id`, `payment_id`, `order_date`, `food_total`, `food_total_with_gst`, `drinks_total`, `food_gst`, `grand_total`, `discount`, `discount_percentage`, `bill_invoice_number`, `customer_info`, `payment_info`, `status_id`, `order_comments`, `order_update_datetime`, `order_only_date`, `del_status`) VALUES
(54, 1, 0, '2024-07-30 17:28:22', '0.00', '0.00', '210.00', '0.00', '210.00', '0.00', 0, 'PAL-0000000054-2024-2025', '', '', 3, '', '2024-07-30 17:28:22', '2024-08-01', 0),
(69, 18, 0, '2024-07-31 14:59:43', '225.00', '236.25', '0.00', '11.25', '236.00', '0.00', 0, 'PAL-0000000069-2024-2025', '', '', 3, '', '2024-07-31 14:59:43', '2024-08-01', 0),
(70, 7, 3, '2024-08-01 12:19:04', '845.00', '887.25', '0.00', '42.25', '887.00', '0.00', 0, 'PAL-0000000070-2024-2025', '', '', 2, '', '2024-08-01 12:19:04', '2024-08-01', 0),
(71, 18, 4, '2024-08-01 12:51:35', '275.00', '288.75', '0.00', '13.75', '176.00', '68.75', 39, 'PAL-0000000071-2024-2025', '', '', 2, 'zomato', '2024-08-01 12:51:35', '2024-08-01', 0),
(72, 9, 3, '2024-08-01 13:01:52', '0.00', '0.00', '440.00', '0.00', '440.00', '0.00', 0, 'PAL-0000000072-2024-2025', '', '', 2, '', '2024-08-01 13:01:52', '2024-08-01', 0),
(73, 1, 3, '2024-08-01 13:09:36', '885.00', '929.25', '0.00', '44.25', '929.00', '0.00', 0, 'PAL-0000000073-2024-2025', '', '', 2, '', '2024-08-01 13:09:36', '2024-08-01', 0),
(75, 4, 1, '2024-08-01 13:57:54', '0.00', '0.00', '1480.00', '0.00', '1184.00', '236.80', 20, 'PAL-0000000075-2024-2025', '', '', 2, '', '2024-08-01 13:57:54', '2024-08-01', 0),
(76, 8, 1, '2024-08-01 14:03:44', '530.00', '556.50', '690.00', '26.50', '1247.00', '0.00', 0, 'PAL-0000000076-2024-2025', '', '', 2, '', '2024-08-01 14:03:44', '2024-08-01', 0),
(77, 10, 1, '2024-08-01 14:18:50', '16.00', '16.80', '0.00', '0.80', '17.00', '0.00', 0, 'PAL-0000000077-2024-2025', '', '', 2, '', '2024-08-01 14:18:50', '2024-08-01', 0),
(78, 10, 1, '2024-08-01 14:20:15', '255.00', '267.75', '210.00', '12.75', '478.00', '0.00', 0, 'PAL-0000000078-2024-2025', '', '', 2, '', '2024-08-01 14:20:15', '2024-08-01', 0),
(79, 3, 3, '2024-08-01 15:02:15', '815.00', '855.75', '0.00', '40.75', '856.00', '0.00', 0, 'PAL-0000000079-2024-2025', '', '', 2, '', '2024-08-01 15:02:15', '2024-08-01', 0),
(80, 7, 3, '2024-08-01 15:03:45', '580.00', '609.00', '0.00', '29.00', '609.00', '0.00', 0, 'PAL-0000000080-2024-2025', '', '', 2, '', '2024-08-01 15:03:45', '2024-08-01', 0),
(81, 7, 3, '2024-08-01 15:12:31', '0.00', '0.00', '1680.00', '0.00', '1680.00', '0.00', 0, 'PAL-0000000081-2024-2025', '', '', 2, '', '2024-08-01 15:12:31', '2024-08-01', 0),
(82, 3, 3, '2024-08-01 15:21:44', '0.00', '0.00', '1390.00', '0.00', '1390.00', '0.00', 0, 'PAL-0000000082-2024-2025', '', '', 2, '', '2024-08-01 15:21:44', '2024-08-01', 0),
(83, 3, 3, '2024-08-01 15:36:57', '0.00', '0.00', '560.00', '0.00', '560.00', '0.00', 0, 'PAL-0000000083-2024-2025', '', '', 2, '', '2024-08-01 15:36:57', '2024-08-01', 0),
(84, 3, 3, '2024-08-01 15:38:48', '982.00', '1031.10', '0.00', '49.10', '1031.00', '0.00', 0, 'PAL-0000000084-2024-2025', '', '', 2, '', '2024-08-01 15:38:48', '2024-08-01', 0),
(85, 14, 1, '2024-08-01 15:41:38', '0.00', '0.00', '1140.00', '0.00', '912.00', '182.40', 20, 'PAL-0000000085-2024-2025', '', '', 2, '', '2024-08-01 15:41:38', '2024-08-01', 0),
(86, 14, 3, '2024-08-01 15:43:17', '0.00', '0.00', '760.00', '0.00', '608.00', '121.60', 20, 'PAL-0000000086-2024-2025', '', '', 2, '', '2024-08-01 15:43:17', '2024-08-01', 0),
(87, 14, 1, '2024-08-01 15:44:49', '306.00', '321.30', '0.00', '15.30', '257.00', '51.36', 20, 'PAL-0000000087-2024-2025', '', '', 2, '', '2024-08-01 15:44:49', '2024-08-01', 0),
(88, 10, 1, '2024-08-01 15:48:21', '40.00', '42.00', '420.00', '2.00', '370.00', '73.92', 20, 'PAL-0000000088-2024-2025', '', '', 2, '', '2024-08-01 15:48:21', '2024-08-01', 0),
(89, 3, 3, '2024-08-01 15:53:11', '0.00', '0.00', '970.00', '0.00', '970.00', '0.00', 0, 'PAL-0000000089-2024-2025', '', '', 2, '', '2024-08-01 15:53:11', '2024-08-01', 0),
(90, 4, 3, '2024-08-01 16:04:21', '0.00', '0.00', '960.00', '0.00', '864.00', '86.40', 10, 'PAL-0000000090-2024-2025', '', '', 2, '', '2024-08-01 16:04:21', '2024-08-01', 0),
(91, 9, 4, '2024-08-01 16:06:05', '0.00', '0.00', '840.00', '0.00', '672.00', '134.40', 20, 'PAL-0000000091-2024-2025', '', '', 2, 'HAYWARDS 5000', '2024-08-01 16:06:05', '2024-08-01', 0),
(92, 18, 1, '2024-08-01 16:22:36', '1576.00', '1654.80', '0.00', '78.80', '1655.00', '0.00', 0, 'PAL-0000000092-2024-2025', '', '', 2, '', '2024-08-01 16:22:36', '2024-08-01', 0),
(93, 9, 4, '2024-08-01 16:25:05', '0.00', '0.00', '840.00', '0.00', '840.00', '0.00', 0, 'PAL-0000000093-2024-2025', '', '', 2, '', '2024-08-01 16:25:05', '2024-08-01', 0),
(94, 3, 3, '2024-08-01 16:34:31', '60.00', '63.00', '420.00', '3.00', '435.00', '43.47', 10, 'PAL-0000000094-2024-2025', '', '', 2, '', '2024-08-01 16:34:31', '2024-08-01', 0),
(95, 4, 3, '2024-08-01 16:36:12', '175.00', '183.75', '0.00', '8.75', '184.00', '0.00', 0, 'PAL-0000000095-2024-2025', '', '', 2, '', '2024-08-01 16:36:12', '2024-08-01', 0),
(96, 8, 1, '2024-08-01 16:44:25', '135.00', '141.75', '0.00', '6.75', '128.00', '12.78', 10, 'PAL-0000000096-2024-2025', '', '', 2, '', '2024-08-01 16:44:25', '2024-08-01', 0),
(97, 15, 1, '2024-08-01 16:45:23', '560.00', '588.00', '0.00', '28.00', '529.00', '52.92', 10, 'PAL-0000000097-2024-2025', '', '', 2, '', '2024-08-01 16:45:23', '2024-08-01', 0),
(98, 15, 1, '2024-08-01 16:47:08', '0.00', '0.00', '630.00', '0.00', '630.00', '0.00', 0, 'PAL-0000000098-2024-2025', '', '', 2, '', '2024-08-01 16:47:08', '2024-08-01', 0),
(99, 8, 1, '2024-08-01 16:51:59', '0.00', '0.00', '700.00', '0.00', '700.00', '0.00', 0, 'PAL-0000000099-2024-2025', '', '', 2, '', '2024-08-01 16:51:59', '2024-08-01', 0),
(100, 14, 1, '2024-08-01 16:56:20', '1167.00', '1225.35', '160.00', '58.35', '1385.00', '0.00', 0, 'PAL-0000000100-2024-2025', '', '', 2, '', '2024-08-01 16:56:20', '2024-08-01', 0),
(101, 14, 1, '2024-08-01 17:01:48', '0.00', '0.00', '680.00', '0.00', '680.00', '0.00', 0, 'PAL-0000000101-2024-2025', '', '', 2, '', '2024-08-01 17:01:48', '2024-08-01', 0),
(102, 10, 1, '2024-08-01 17:05:08', '0.00', '0.00', '980.00', '0.00', '980.00', '0.00', 0, 'PAL-0000000102-2024-2025', '', '', 2, '', '2024-08-01 17:05:08', '2024-08-01', 0),
(103, 10, 1, '2024-08-01 17:06:01', '335.00', '351.75', '0.00', '16.75', '352.00', '0.00', 0, 'PAL-0000000103-2024-2025', '', '', 2, '', '2024-08-01 17:06:01', '2024-08-01', 0),
(104, 10, 1, '2024-08-01 17:06:35', '0.00', '0.00', '1140.00', '0.00', '1140.00', '0.00', 0, 'PAL-0000000104-2024-2025', '', '', 2, '', '2024-08-01 17:06:35', '2024-08-01', 0),
(105, 11, 1, '2024-08-01 17:07:58', '0.00', '0.00', '1960.00', '0.00', '1960.00', '0.00', 0, 'PAL-0000000105-2024-2025', '', '', 2, '', '2024-08-01 17:07:58', '2024-08-01', 0),
(106, 11, 1, '2024-08-01 17:09:18', '600.00', '630.00', '0.00', '30.00', '630.00', '0.00', 0, 'PAL-0000000106-2024-2025', '', '', 2, '', '2024-08-01 17:09:18', '2024-08-01', 0),
(107, 18, 4, '2024-08-01 17:10:15', '236.00', '247.80', '0.00', '11.80', '248.00', '0.00', 0, 'PAL-0000000107-2024-2025', '', '', 2, '', '2024-08-01 17:10:15', '2024-08-01', 0),
(108, 9, 4, '2024-08-01 17:16:04', '35.00', '36.75', '0.00', '1.75', '37.00', '0.00', 0, 'PAL-0000000108-2024-2025', '', '', 2, '', '2024-08-01 17:16:04', '2024-08-01', 0),
(109, 18, 4, '2024-08-01 17:19:12', '275.00', '288.75', '0.00', '13.75', '231.00', '46.24', 20, 'PAL-0000000109-2024-2025', '', '', 2, 'zomato', '2024-08-01 17:19:12', '2024-08-01', 0),
(110, 18, 4, '2024-08-01 17:20:07', '381.00', '400.05', '0.00', '19.05', '320.00', '64.00', 20, 'PAL-0000000110-2024-2025', '', '', 2, 'zomato', '2024-08-01 17:20:07', '2024-08-01', 0),
(111, 3, 3, '2024-08-01 17:21:22', '1275.00', '1338.75', '0.00', '63.75', '1071.00', '214.24', 20, 'PAL-0000000111-2024-2025', '', '', 2, 'zomato', '2024-08-01 17:21:22', '2024-08-01', 0),
(112, 18, 4, '2024-08-01 17:26:06', '620.00', '651.00', '0.00', '31.00', '521.00', '104.16', 20, 'PAL-0000000112-2024-2025', '', '', 2, 'zomato', '2024-08-01 17:26:06', '2024-08-01', 0),
(113, 1, 3, '2024-08-01 17:30:18', '295.00', '309.75', '2030.00', '14.75', '2340.00', '0.00', 0, 'PAL-0000000113-2024-2025', '', '', 2, '', '2024-08-01 17:30:18', '2024-08-01', 0),
(114, 7, 1, '2024-08-01 17:46:48', '685.00', '719.25', '0.00', '34.25', '719.00', '0.00', 0, 'PAL-0000000114-2024-2025', '', '', 2, '', '2024-08-01 17:46:48', '2024-08-01', 0),
(115, 3, 3, '2024-08-01 17:48:19', '0.00', '0.00', '2070.00', '0.00', '2070.00', '0.00', 0, 'PAL-0000000115-2024-2025', '', '', 2, '', '2024-08-01 17:48:19', '2024-08-01', 0),
(116, 7, 1, '2024-08-01 17:49:29', '0.00', '0.00', '350.00', '0.00', '350.00', '0.00', 0, 'PAL-0000000116-2024-2025', '', '', 2, '', '2024-08-01 17:49:29', '2024-08-01', 0),
(117, 3, 3, '2024-08-01 17:50:31', '1376.00', '1444.80', '0.00', '68.80', '1445.00', '0.00', 0, 'PAL-0000000117-2024-2025', '', '', 2, '', '2024-08-01 17:50:31', '2024-08-01', 0),
(118, 1, 3, '2024-08-01 17:52:23', '0.00', '0.00', '130.00', '0.00', '130.00', '0.00', 0, 'PAL-0000000118-2024-2025', '', '', 2, '', '2024-08-01 17:52:23', '2024-08-01', 0),
(119, 1, 1, '2024-08-01 17:56:38', '590.00', '619.50', '1400.00', '29.50', '2020.00', '0.00', 0, 'PAL-0000000119-2024-2025', '', '', 2, '', '2024-08-01 17:56:38', '2024-08-03', 0),
(120, 9, 3, '2024-08-01 17:57:24', '831.00', '872.55', '0.00', '41.55', '873.00', '0.00', 0, 'PAL-0000000120-2024-2025', '', '', 2, '', '2024-08-01 17:57:24', '2024-08-01', 0),
(121, 8, 3, '2024-08-01 17:59:05', '590.00', '619.50', '0.00', '29.50', '620.00', '0.00', 0, 'PAL-0000000121-2024-2025', '', '', 2, '', '2024-08-01 17:59:05', '2024-08-01', 0),
(122, 18, 4, '2024-08-01 18:01:36', '185.00', '194.25', '0.00', '9.25', '173.00', '18.99', 11, 'PAL-0000000122-2024-2025', '', '', 2, '', '2024-08-01 18:01:36', '2024-08-02', 0),
(123, 1, 1, '2024-08-02 16:09:28', '655.00', '687.75', '1630.00', '32.75', '2318.00', '0.00', 0, 'PAL-0000000123-2024-2025', '', '', 2, '', '2024-08-02 16:09:28', '2024-08-03', 0),
(124, 14, 1, '2024-08-02 16:13:52', '40.00', '42.00', '420.00', '2.00', '462.00', '0.00', 0, 'PAL-0000000124-2024-2025', '', '', 2, '', '2024-08-02 16:13:52', '2024-08-02', 0),
(125, 18, 4, '2024-08-02 16:19:20', '520.00', '546.00', '0.00', '26.00', '546.00', '0.00', 0, 'PAL-0000000125-2024-2025', '', '', 2, 'SIWIGY', '2024-08-02 16:19:20', '2024-08-02', 0),
(126, 18, 4, '2024-08-02 16:22:07', '265.00', '278.25', '0.00', '13.25', '242.00', '31.44', 13, 'PAL-0000000126-2024-2025', '', '', 2, 'SIWIGY', '2024-08-02 16:22:07', '2024-08-02', 0),
(127, 11, 1, '2024-08-02 16:25:28', '90.00', '94.50', '0.00', '4.50', '95.00', '0.00', 0, 'PAL-0000000127-2024-2025', '', '', 2, '', '2024-08-02 16:25:28', '2024-08-02', 0),
(128, 11, 1, '2024-08-02 16:26:47', '0.00', '0.00', '340.00', '0.00', '340.00', '0.00', 0, 'PAL-0000000128-2024-2025', '', '', 2, '', '2024-08-02 16:26:47', '2024-08-02', 0),
(129, 18, 4, '2024-08-02 16:27:35', '415.00', '435.75', '0.00', '20.75', '305.00', '91.56', 30, 'PAL-0000000129-2024-2025', '', '', 2, 'SIWIGY', '2024-08-02 16:27:35', '2024-08-02', 0),
(130, 18, 4, '2024-08-02 16:38:39', '340.00', '357.00', '0.00', '17.00', '307.00', '42.98', 14, 'PAL-0000000130-2024-2025', '', '', 2, 'zomato', '2024-08-02 16:38:39', '2024-08-02', 0),
(131, 18, 1, '2024-08-02 16:43:25', '1002.00', '1052.10', '0.00', '50.10', '842.00', '168.32', 20, 'PAL-0000000131-2024-2025', '', '', 2, '', '2024-08-02 16:43:25', '2024-08-03', 0),
(132, 18, 1, '2024-08-02 16:47:30', '165.00', '173.25', '0.00', '8.25', '138.00', '27.68', 20, 'PAL-0000000132-2024-2025', '', '', 2, '', '2024-08-02 16:47:30', '2024-08-03', 0),
(133, 11, 1, '2024-08-02 16:48:15', '175.00', '183.75', '0.00', '8.75', '184.00', '0.00', 0, 'PAL-0000000133-2024-2025', '', '', 2, '', '2024-08-02 16:48:15', '2024-08-02', 0),
(134, 9, 1, '2024-08-02 16:50:46', '185.00', '194.25', '0.00', '9.25', '194.00', '0.00', 0, 'PAL-0000000134-2024-2025', '', '', 2, '', '2024-08-02 16:50:46', '2024-08-02', 0),
(135, 4, 3, '2024-08-02 16:54:23', '245.00', '257.25', '0.00', '12.25', '252.00', '5.04', 2, 'PAL-0000000135-2024-2025', '', '', 2, '', '2024-08-02 16:54:23', '2024-08-02', 0),
(136, 11, 1, '2024-08-02 17:01:17', '0.00', '0.00', '340.00', '0.00', '340.00', '0.00', 0, 'PAL-0000000136-2024-2025', '', '', 2, '', '2024-08-02 17:01:17', '2024-08-02', 0),
(137, 4, 3, '2024-08-02 17:02:12', '0.00', '0.00', '1440.00', '0.00', '1440.00', '0.00', 0, 'PAL-0000000137-2024-2025', '', '', 2, '', '2024-08-02 17:02:12', '2024-08-02', 0),
(138, 14, 3, '2024-08-02 17:03:04', '757.00', '794.85', '0.00', '37.85', '795.00', '0.00', 0, 'PAL-0000000138-2024-2025', '', '', 2, '', '2024-08-02 17:03:04', '2024-08-02', 0),
(139, 2, 1, '2024-08-02 17:05:50', '365.00', '383.25', '420.00', '18.25', '803.00', '0.00', 0, 'PAL-0000000139-2024-2025', '', '', 2, '', '2024-08-02 17:05:50', '2024-08-02', 0),
(140, 12, 3, '2024-08-02 17:11:10', '990.00', '1039.50', '0.00', '49.50', '1040.00', '0.00', 0, 'PAL-0000000140-2024-2025', '', '', 2, '', '2024-08-02 17:11:10', '2024-08-02', 0),
(141, 4, 3, '2024-08-02 17:15:15', '0.00', '0.00', '630.00', '0.00', '630.00', '0.00', 0, 'PAL-0000000141-2024-2025', '', '', 2, '', '2024-08-02 17:15:15', '2024-08-03', 0),
(142, 10, 1, '2024-08-03 14:14:25', '0.00', '0.00', '840.00', '0.00', '840.00', '0.00', 0, 'PAL-0000000142-2024-2025', '', '', 2, '', '2024-08-03 14:14:25', '2024-08-03', 0),
(143, 18, 1, '2024-08-03 14:23:37', '311.00', '326.55', '0.00', '15.55', '327.00', '0.00', 0, 'PAL-0000000143-2024-2025', '', '', 2, '', '2024-08-03 14:23:37', '2024-08-03', 0),
(144, 10, 1, '2024-08-03 14:35:08', '475.00', '498.75', '0.00', '23.75', '464.00', '32.48', 7, 'PAL-0000000144-2024-2025', '', '', 2, '', '2024-08-03 14:35:08', '2024-08-03', 0),
(145, 11, 1, '2024-08-03 14:37:09', '0.00', '0.00', '280.00', '0.00', '280.00', '0.00', 0, 'PAL-0000000145-2024-2025', '', '', 2, '', '2024-08-03 14:37:09', '2024-08-03', 0),
(146, 18, 4, '2024-08-03 14:51:04', '520.00', '546.00', '0.00', '26.00', '470.00', '65.74', 14, 'PAL-0000000146-2024-2025', '', '', 2, 'zomato', '2024-08-03 14:51:04', '2024-08-03', 0),
(147, 18, 4, '2024-08-03 14:55:18', '540.00', '567.00', '0.00', '27.00', '510.00', '51.03', 10, 'PAL-0000000147-2024-2025', '', '', 2, 'zomato', '2024-08-03 14:55:18', '2024-08-03', 0),
(148, 18, 4, '2024-08-03 14:57:02', '3186.00', '3345.30', '0.00', '159.30', '3345.00', '0.00', 0, 'PAL-0000000148-2024-2025', '', '', 2, 'zomato', '2024-08-03 14:57:02', '2024-08-03', 0),
(149, 18, 4, '2024-08-03 14:58:52', '415.00', '435.75', '0.00', '20.75', '353.00', '67.10', 19, 'PAL-0000000149-2024-2025', '', '', 2, '', '2024-08-03 14:58:52', '2024-08-03', 0),
(150, 5, 3, '2024-08-03 15:01:03', '1591.00', '1670.55', '0.00', '79.55', '1671.00', '0.00', 0, 'PAL-0000000150-2024-2025', '', '', 2, 'zomato', '2024-08-03 15:01:03', '2024-08-03', 0),
(151, 14, 1, '2024-08-03 15:06:35', '40.00', '42.00', '420.00', '2.00', '462.00', '0.00', 0, 'PAL-0000000151-2024-2025', '', '', 2, '', '2024-08-03 15:06:35', '2024-08-03', 0),
(152, 18, 4, '2024-08-03 15:10:02', '595.00', '624.75', '0.00', '29.75', '625.00', '0.00', 0, 'PAL-0000000152-2024-2025', '', '', 2, '', '2024-08-03 15:10:02', '2024-08-03', 0),
(153, 8, 3, '2024-08-03 15:11:42', '176.00', '184.80', '0.00', '8.80', '185.00', '0.00', 0, 'PAL-0000000153-2024-2025', '', '', 2, '', '2024-08-03 15:11:42', '2024-08-03', 0),
(154, 8, 3, '2024-08-03 15:15:06', '0.00', '0.00', '920.00', '0.00', '920.00', '0.00', 0, 'PAL-0000000154-2024-2025', '', '', 2, '', '2024-08-03 15:15:06', '2024-08-03', 0),
(155, 18, 1, '2024-08-03 15:16:47', '708.00', '743.40', '0.00', '35.40', '743.00', '0.00', 0, 'PAL-0000000155-2024-2025', '', '', 2, 'SIWIGY', '2024-08-03 15:16:47', '2024-08-03', 0),
(156, 9, 4, '2024-08-03 15:19:01', '285.00', '299.25', '0.00', '14.25', '299.00', '0.00', 0, 'PAL-0000000156-2024-2025', '', '', 2, '', '2024-08-03 15:19:01', '2024-08-03', 0),
(157, 9, 4, '2024-08-03 15:20:02', '0.00', '0.00', '470.00', '0.00', '470.00', '0.00', 0, 'PAL-0000000157-2024-2025', '', '', 2, '', '2024-08-03 15:20:02', '2024-08-03', 0),
(158, 18, 3, '2024-08-03 15:29:08', '316.00', '331.80', '0.00', '15.80', '332.00', '0.00', 0, 'PAL-0000000158-2024-2025', '', '', 2, '', '2024-08-03 15:29:08', '2024-08-03', 0),
(159, 9, 3, '2024-08-03 15:34:41', '285.00', '299.25', '0.00', '14.25', '299.00', '0.00', 0, 'PAL-0000000159-2024-2025', '', '', 2, '', '2024-08-03 15:34:41', '2024-08-03', 0),
(160, 2, 3, '2024-08-03 15:38:14', '1195.00', '1254.75', '630.00', '59.75', '1885.00', '0.00', 0, 'PAL-0000000160-2024-2025', '', '', 2, '', '2024-08-03 15:38:14', '2024-08-03', 0),
(161, 11, 1, '2024-08-03 15:46:29', '0.00', '0.00', '830.00', '0.00', '830.00', '0.00', 0, 'PAL-0000000161-2024-2025', '', '', 2, 'SIWIGY', '2024-08-03 15:46:29', '2024-08-03', 0),
(162, 17, 4, '2024-08-03 15:49:40', '505.00', '530.25', '0.00', '25.25', '530.00', '0.00', 0, 'PAL-0000000162-2024-2025', '', '', 2, 'SIWIGY', '2024-08-03 15:49:40', '2024-08-03', 0),
(163, 3, 1, '2024-08-03 15:51:25', '1150.00', '1207.50', '1120.00', '57.50', '2328.00', '0.00', 0, 'PAL-0000000163-2024-2025', '', '', 2, 'SIWIGY', '2024-08-03 15:51:25', '2024-08-03', 0),
(164, 18, 4, '2024-08-03 16:05:19', '220.00', '231.00', '0.00', '11.00', '219.00', '10.97', 5, 'PAL-0000000164-2024-2025', '', '', 2, 'zomato', '2024-08-03 16:05:19', '2024-08-03', 0),
(165, 18, 4, '2024-08-03 16:22:40', '535.00', '561.75', '0.00', '26.75', '551.00', '11.02', 2, 'PAL-0000000165-2024-2025', '', '', 2, 'zomato', '2024-08-03 16:22:40', '2024-08-03', 0),
(166, 18, 4, '2024-08-03 16:25:17', '375.00', '393.75', '0.00', '18.75', '347.00', '41.61', 12, 'PAL-0000000166-2024-2025', '', '', 2, 'SIWIGY', '2024-08-03 16:25:17', '2024-08-03', 0),
(167, 7, 3, '2024-08-03 16:33:48', '1905.00', '2000.25', '2120.00', '95.25', '4120.00', '0.00', 0, 'PAL-0000000167-2024-2025', '', '', 2, '', '2024-08-03 16:33:48', '2024-08-03', 0),
(168, 12, 1, '2024-08-03 16:44:11', '2158.00', '2265.90', '0.00', '107.90', '2266.00', '0.00', 0, 'PAL-0000000168-2024-2025', '', '', 2, '', '2024-08-03 16:44:11', '2024-08-03', 0),
(169, 3, 1, '2024-08-03 16:48:52', '450.00', '472.50', '1050.00', '22.50', '1523.00', '0.00', 0, 'PAL-0000000169-2024-2025', '', '', 2, '', '2024-08-03 16:48:52', '2024-08-03', 0),
(170, 14, 1, '2024-08-03 16:51:24', '360.00', '378.00', '560.00', '18.00', '938.00', '0.00', 0, 'PAL-0000000170-2024-2025', '', '', 2, '', '2024-08-03 16:51:24', '2024-08-03', 0),
(171, 9, 3, '2024-08-03 16:58:01', '1065.00', '1118.25', '2820.00', '53.25', '3938.00', '0.00', 0, 'PAL-0000000171-2024-2025', '', '', 2, '', '2024-08-03 16:58:01', '2024-08-03', 0),
(172, 15, 3, '2024-08-03 17:02:00', '1126.00', '1182.30', '790.00', '56.30', '1972.00', '0.00', 0, 'PAL-0000000172-2024-2025', '', '', 2, '', '2024-08-03 17:02:00', '2024-08-03', 0),
(173, 10, 1, '2024-08-03 17:10:50', '235.00', '246.75', '2170.00', '11.75', '2417.00', '0.00', 0, 'PAL-0000000173-2024-2025', '', '', 2, '', '2024-08-03 17:10:50', '2024-08-03', 0),
(174, 5, 1, '2024-08-03 17:14:42', '3180.00', '3339.00', '1680.00', '159.00', '5019.00', '0.00', 0, 'PAL-0000000174-2024-2025', '', '', 2, '', '2024-08-03 17:14:42', '2024-08-03', 0),
(175, 2, 1, '2024-08-03 17:20:36', '965.00', '1013.25', '690.00', '48.25', '1703.00', '0.00', 0, 'PAL-0000000175-2024-2025', '', '', 2, '', '2024-08-03 17:20:36', '2024-08-03', 0),
(176, 4, 1, '2024-08-03 17:22:49', '190.00', '199.50', '550.00', '9.50', '750.00', '0.00', 0, 'PAL-0000000176-2024-2025', '', '', 2, '', '2024-08-03 17:22:49', '2024-08-03', 0),
(177, 11, 1, '2024-08-03 17:31:16', '350.00', '367.50', '280.00', '17.50', '648.00', '0.00', 0, 'PAL-0000000177-2024-2025', '', '', 2, '', '2024-08-03 17:31:16', '2024-08-03', 0),
(178, 1, 2, '2024-08-03 17:37:44', '295.00', '309.75', '0.00', '14.75', '310.00', '0.00', 0, 'PAL-0000000178-2024-2025', '', '', 3, '', '2024-08-03 17:37:44', '2024-08-04', 0),
(179, 8, 4, '2024-08-03 17:43:42', '295.00', '309.75', '840.00', '14.75', '1150.00', '0.00', 0, 'PAL-0000000179-2024-2025', '', '', 2, '', '2024-08-03 17:43:42', '2024-08-03', 0),
(180, 4, 1, '2024-08-03 17:48:17', '0.00', '0.00', '1110.00', '0.00', '1110.00', '0.00', 0, 'PAL-0000000180-2024-2025', '', '', 2, '', '2024-08-03 17:48:17', '2024-08-03', 0),
(181, 9, 3, '2024-08-03 17:52:24', '295.00', '309.75', '635.00', '14.75', '945.00', '0.00', 0, 'PAL-0000000181-2024-2025', '', '', 2, '', '2024-08-03 17:52:24', '2024-08-03', 0),
(182, 18, 2, '2024-08-03 17:57:29', '265.00', '278.25', '0.00', '13.25', '278.00', '0.00', 0, 'PAL-0000000182-2024-2025', '', '', 3, '', '2024-08-03 17:57:29', '2024-08-04', 0),
(183, 5, 1, '2024-08-03 18:36:20', '2475.00', '2598.75', '4850.00', '123.75', '7449.00', '0.00', 0, 'PAL-0000000183-2024-2025', '', '', 3, '', '2024-08-03 18:36:20', '2024-08-04', 0),
(184, 2, 4, '2024-08-04 06:38:47', '1100.00', '1155.00', '0.00', '55.00', '1155.00', '0.00', 0, 'PAL-0000000184-2024-2025', '', '', 3, '', '2024-08-04 06:38:47', '2024-08-04', 0),
(185, 1, 1, '2024-08-04 07:00:40', '550.00', '577.50', '830.00', '27.50', '1408.00', '0.00', 0, 'PAL-0000000185-2024-2025', '', '', 3, '', '2024-08-04 07:00:40', '2024-08-04', 0),
(186, 1, 0, '2024-08-04 07:17:03', '505.00', '530.25', '830.00', '25.25', '1360.00', '0.00', 0, 'PAL-0000000186-2024-2025', '', '', 3, '', '2024-08-04 07:17:03', '2024-08-04', 0),
(187, 9, 1, '2024-08-04 07:22:53', '1180.00', '1239.00', '3250.00', '59.00', '4489.00', '0.00', 0, 'PAL-0000000187-2024-2025', '', '', 3, '', '2024-08-04 07:22:53', '2024-08-04', 0),
(188, 1, 1, '2024-08-04 07:33:40', '13285.00', '13949.25', '10800.00', '664.25', '24749.00', '0.00', 0, 'PAL-0000000188-2024-2025', '', '', 3, '', '2024-08-04 07:33:40', '2024-08-04', 0),
(189, 1, 2, '2024-08-04 07:42:31', '2685.00', '2819.25', '1660.00', '134.25', '4479.00', '0.00', 0, 'PAL-0000000189-2024-2025', '', '', 3, '', '2024-08-04 07:42:31', '2024-08-04', 0),
(190, 1, 1, '2024-08-04 08:12:56', '550.00', '577.50', '0.00', '27.50', '578.00', '0.00', 0, 'PAL-0000000190-2024-2025', '', '', 3, '', '2024-08-04 08:12:56', '2024-08-04', 0),
(191, 3, 1, '2024-08-04 08:18:51', '1100.00', '1155.00', '0.00', '55.00', '1155.00', '0.00', 0, 'PAL-0000000191-2024-2025', '', '', 3, '', '2024-08-04 08:18:51', '2024-08-04', 0),
(192, 18, 4, '2024-08-04 08:31:27', '240.00', '252.00', '0.00', '12.00', '202.00', '40.32', 20, 'PAL-0000000192-2024-2025', '', '', 2, 'SIWIGY', '2024-08-04 08:31:27', '2024-08-04', 0),
(193, 2, 1, '2024-08-04 08:35:07', '550.00', '577.50', '0.00', '27.50', '578.00', '0.00', 0, 'PAL-0000000193-2024-2025', '', '', 3, '', '2024-08-04 08:35:07', '2024-08-04', 0),
(194, 1, 3, '2024-08-04 08:40:31', '971.00', '1019.55', '380.00', '48.55', '1400.00', '0.00', 0, 'PAL-0000000194-2024-2025', '', '', 2, 'zomato', '2024-08-04 08:40:31', '2024-08-04', 0),
(195, 18, 4, '2024-08-04 14:13:35', '265.00', '278.25', '0.00', '13.25', '264.00', '13.21', 5, 'PAL-0000000195-2024-2025', '', '', 2, 'zomato', '2024-08-04 14:13:35', '2024-08-04', 0),
(196, 8, 3, '2024-08-04 14:15:34', '0.00', '0.00', '750.00', '0.00', '750.00', '0.00', 0, 'PAL-0000000196-2024-2025', '', '', 2, 'SIWIGY', '2024-08-04 14:15:34', '2024-08-04', 0),
(197, 8, 3, '2024-08-04 14:16:56', '625.00', '656.25', '0.00', '31.25', '656.00', '0.00', 0, 'PAL-0000000197-2024-2025', '', '', 2, '', '2024-08-04 14:16:56', '2024-08-04', 0),
(198, 10, 1, '2024-08-04 14:18:03', '666.00', '699.30', '560.00', '33.30', '1259.00', '0.00', 0, 'PAL-0000000198-2024-2025', '', '', 2, '', '2024-08-04 14:18:03', '2024-08-04', 0),
(199, 11, 3, '2024-08-04 14:21:22', '0.00', '0.00', '1970.00', '0.00', '1970.00', '0.00', 0, 'PAL-0000000199-2024-2025', '', '', 2, '', '2024-08-04 14:21:22', '2024-08-04', 0),
(200, 11, 4, '2024-08-04 14:22:31', '490.00', '514.50', '0.00', '24.50', '515.00', '0.00', 0, 'PAL-0000000200-2024-2025', '', '', 2, '', '2024-08-04 14:22:31', '2024-08-04', 0),
(201, 4, 1, '2024-08-04 14:24:19', '40.00', '42.00', '420.00', '2.00', '462.00', '0.00', 0, 'PAL-0000000201-2024-2025', '', '', 2, '', '2024-08-04 14:24:19', '2024-08-04', 0),
(202, 12, 3, '2024-08-04 14:27:51', '610.00', '640.50', '0.00', '30.50', '641.00', '0.00', 0, 'PAL-0000000202-2024-2025', '', '', 2, '', '2024-08-04 14:27:51', '2024-08-04', 0),
(203, 7, 3, '2024-08-04 14:28:57', '0.00', '0.00', '4450.00', '0.00', '4450.00', '0.00', 0, 'PAL-0000000203-2024-2025', '', '', 2, '', '2024-08-04 14:28:57', '2024-08-04', 0),
(204, 2, 4, '2024-08-04 14:29:59', '2440.00', '2562.00', '0.00', '122.00', '2562.00', '0.00', 0, 'PAL-0000000204-2024-2025', '', '', 2, '', '2024-08-04 14:29:59', '2024-08-04', 0),
(205, 7, 3, '2024-08-04 14:33:02', '1355.00', '1422.75', '0.00', '67.75', '1423.00', '0.00', 0, 'PAL-0000000205-2024-2025', '', '', 2, '', '2024-08-04 14:33:02', '2024-08-04', 0),
(206, 7, 4, '2024-08-04 14:35:22', '1185.00', '1244.25', '0.00', '59.25', '1244.00', '0.00', 0, 'PAL-0000000206-2024-2025', '', '', 2, '', '2024-08-04 14:35:22', '2024-08-04', 0),
(207, 12, 1, '2024-08-04 14:36:47', '896.00', '940.80', '1180.00', '44.80', '2121.00', '0.00', 0, 'PAL-0000000207-2024-2025', '', '', 2, '', '2024-08-04 14:36:47', '2024-08-04', 0),
(208, 4, 1, '2024-08-04 14:39:06', '0.00', '0.00', '840.00', '0.00', '840.00', '0.00', 0, 'PAL-0000000208-2024-2025', '', '', 2, '', '2024-08-04 14:39:06', '2024-08-04', 0),
(209, 15, 3, '2024-08-04 14:47:21', '870.00', '913.50', '0.00', '43.50', '914.00', '0.00', 0, 'PAL-0000000209-2024-2025', '', '', 2, '', '2024-08-04 14:47:21', '2024-08-04', 0),
(210, 9, 3, '2024-08-04 15:04:49', '285.00', '299.25', '760.00', '14.25', '1059.00', '0.00', 0, 'PAL-0000000210-2024-2025', '', '', 2, '', '2024-08-04 15:04:49', '2024-08-04', 0),
(211, 4, 1, '2024-08-04 15:12:44', '0.00', '0.00', '210.00', '0.00', '210.00', '0.00', 0, 'PAL-0000000211-2024-2025', '', '', 2, '', '2024-08-04 15:12:44', '2024-08-04', 0),
(212, 2, 1, '2024-08-04 15:16:15', '1768.00', '1856.40', '1040.00', '88.40', '2896.00', '0.00', 0, 'PAL-0000000212-2024-2025', '', '', 2, '', '2024-08-04 15:16:15', '2024-08-04', 0),
(213, 4, 1, '2024-08-04 15:25:49', '772.00', '810.60', '990.00', '38.60', '1801.00', '0.00', 0, 'PAL-0000000213-2024-2025', '', '', 2, '', '2024-08-04 15:25:49', '2024-08-04', 0),
(214, 9, 4, '2024-08-04 15:34:45', '0.00', '0.00', '280.00', '0.00', '280.00', '0.00', 0, 'PAL-0000000214-2024-2025', '', '', 2, '', '2024-08-04 15:34:45', '2024-08-04', 0),
(215, 8, 1, '2024-08-04 15:35:21', '0.00', '0.00', '400.00', '0.00', '400.00', '0.00', 0, 'PAL-0000000215-2024-2025', '', '', 2, '', '2024-08-04 15:35:21', '2024-08-04', 0),
(216, 4, 1, '2024-08-04 15:36:19', '0.00', '0.00', '280.00', '0.00', '280.00', '0.00', 0, 'PAL-0000000216-2024-2025', '', '', 2, '', '2024-08-04 15:36:19', '2024-08-04', 0),
(217, 7, 3, '2024-08-04 15:36:57', '0.00', '0.00', '880.00', '0.00', '880.00', '0.00', 0, 'PAL-0000000217-2024-2025', '', '', 2, '', '2024-08-04 15:36:57', '2024-08-04', 0),
(218, 18, 4, '2024-08-04 15:37:40', '430.00', '451.50', '0.00', '21.50', '416.00', '33.27', 8, 'PAL-0000000218-2024-2025', '', '', 2, 'SIWIGY', '2024-08-04 15:37:40', '2024-08-04', 0),
(219, 11, 3, '2024-08-04 15:39:36', '1055.00', '1107.75', '160.00', '52.75', '1268.00', '0.00', 0, 'PAL-0000000219-2024-2025', '', '', 2, 'zomato', '2024-08-04 15:39:36', '2024-08-04', 0),
(220, 7, 3, '2024-08-04 15:43:08', '300.00', '315.00', '0.00', '15.00', '315.00', '0.00', 0, 'PAL-0000000220-2024-2025', '', '', 2, 'zomato', '2024-08-04 15:43:08', '2024-08-04', 0),
(221, 3, 3, '2024-08-04 15:47:02', '2455.00', '2577.75', '2150.00', '122.75', '4728.00', '0.00', 0, 'PAL-0000000221-2024-2025', '', '', 2, '', '2024-08-04 15:47:02', '2024-08-04', 0),
(222, 5, 3, '2024-08-04 15:56:41', '880.00', '924.00', '2280.00', '44.00', '3204.00', '0.00', 0, 'PAL-0000000222-2024-2025', '', '', 2, '', '2024-08-04 15:56:41', '2024-08-04', 0),
(223, 11, 2, '2024-08-04 15:59:05', '0.00', '0.00', '400.00', '0.00', '400.00', '0.00', 0, 'PAL-0000000223-2024-2025', '', '', 2, '', '2024-08-04 15:59:05', '2024-08-04', 0),
(224, 12, 3, '2024-08-04 16:02:03', '910.00', '955.50', '380.00', '45.50', '1336.00', '0.00', 0, 'PAL-0000000224-2024-2025', '', '', 2, '', '2024-08-04 16:02:03', '2024-08-04', 0),
(225, 10, 4, '2024-08-04 16:04:31', '0.00', '0.00', '420.00', '0.00', '420.00', '0.00', 0, 'PAL-0000000225-2024-2025', '', '', 2, '', '2024-08-04 16:04:31', '2024-08-04', 0),
(226, 11, 3, '2024-08-04 16:05:42', '0.00', '0.00', '630.00', '0.00', '630.00', '0.00', 0, 'PAL-0000000226-2024-2025', '', '', 2, '', '2024-08-04 16:05:42', '2024-08-04', 0),
(227, 8, 1, '2024-08-04 16:06:31', '236.00', '247.80', '0.00', '11.80', '248.00', '0.00', 0, 'PAL-0000000227-2024-2025', '', '', 2, '', '2024-08-04 16:06:31', '2024-08-04', 0),
(228, 5, 1, '2024-08-04 16:07:11', '505.00', '530.25', '0.00', '25.25', '530.00', '0.00', 0, 'PAL-0000000228-2024-2025', '', '', 2, '', '2024-08-04 16:07:11', '2024-08-04', 0),
(229, 5, 1, '2024-08-04 16:08:35', '40.00', '42.00', '1320.00', '2.00', '1362.00', '0.00', 0, 'PAL-0000000229-2024-2025', '', '', 2, '', '2024-08-04 16:08:35', '2024-08-04', 0),
(230, 9, 1, '2024-08-04 16:10:03', '0.00', '0.00', '420.00', '0.00', '420.00', '0.00', 0, 'PAL-0000000230-2024-2025', '', '', 2, '', '2024-08-04 16:10:03', '2024-08-04', 0),
(231, 5, 1, '2024-08-04 16:10:40', '0.00', '0.00', '680.00', '0.00', '680.00', '0.00', 0, 'PAL-0000000231-2024-2025', '', '', 2, '', '2024-08-04 16:10:40', '2024-08-04', 0),
(232, 10, 1, '2024-08-04 16:12:28', '651.00', '683.55', '1260.00', '32.55', '1944.00', '0.00', 0, 'PAL-0000000232-2024-2025', '', '', 2, '', '2024-08-04 16:12:28', '2024-08-04', 0),
(233, 18, 1, '2024-08-04 16:14:32', '300.00', '315.00', '0.00', '15.00', '315.00', '0.00', 0, 'PAL-0000000233-2024-2025', '', '', 2, '', '2024-08-04 16:14:32', '2024-08-04', 0),
(234, 11, 1, '2024-08-04 16:16:57', '0.00', '0.00', '320.00', '0.00', '320.00', '0.00', 0, 'PAL-0000000234-2024-2025', '', '', 2, '', '2024-08-04 16:16:57', '2024-08-04', 0),
(235, 15, 3, '2024-08-04 16:17:46', '905.00', '950.25', '1400.00', '45.25', '2350.00', '0.00', 0, 'PAL-0000000235-2024-2025', '', '', 2, '', '2024-08-04 16:17:46', '2024-08-04', 0),
(236, 7, 4, '2024-08-04 16:21:27', '325.00', '341.25', '700.00', '16.25', '1041.00', '0.00', 0, 'PAL-0000000236-2024-2025', '', '', 2, '', '2024-08-04 16:21:27', '2024-08-04', 0),
(237, 2, 1, '2024-08-04 16:23:13', '1155.00', '1212.75', '0.00', '57.75', '1213.00', '0.00', 0, 'PAL-0000000237-2024-2025', '', '', 2, '', '2024-08-04 16:23:13', '2024-08-04', 0),
(238, 8, 4, '2024-08-04 16:26:14', '1308.00', '1373.40', '630.00', '65.40', '2003.00', '0.00', 0, 'PAL-0000000238-2024-2025', '', '', 2, '', '2024-08-04 16:26:14', '2024-08-04', 0),
(239, 3, 1, '2024-08-04 16:31:25', '965.00', '1013.25', '0.00', '48.25', '1013.00', '0.00', 0, 'PAL-0000000239-2024-2025', '', '', 2, '', '2024-08-04 16:31:25', '2024-08-04', 0),
(240, 11, 1, '2024-08-04 16:36:45', '0.00', '0.00', '210.00', '0.00', '210.00', '0.00', 0, 'PAL-0000000240-2024-2025', '', '', 2, '', '2024-08-04 16:36:45', '2024-08-04', 0),
(241, 18, 1, '2024-08-04 16:37:34', '592.00', '621.60', '0.00', '29.60', '622.00', '0.00', 0, 'PAL-0000000241-2024-2025', '', '', 2, '', '2024-08-04 16:37:34', '2024-08-04', 0),
(242, 18, 1, '2024-08-04 16:39:33', '1961.00', '2059.05', '0.00', '98.05', '2059.00', '0.00', 0, 'PAL-0000000242-2024-2025', '', '', 2, '', '2024-08-04 16:39:33', '2024-08-05', 0),
(243, 3, 1, '2024-08-04 16:45:38', '306.00', '321.30', '680.00', '15.30', '1001.00', '0.00', 0, 'PAL-0000000243-2024-2025', '', '', 2, '', '2024-08-04 16:45:38', '2024-08-04', 0),
(244, 4, 1, '2024-08-04 16:52:05', '335.00', '351.75', '630.00', '16.75', '982.00', '0.00', 0, 'PAL-0000000244-2024-2025', '', '', 2, '', '2024-08-04 16:52:05', '2024-08-04', 0),
(245, 14, 1, '2024-08-04 16:59:56', '945.00', '992.25', '2860.00', '47.25', '3852.00', '0.00', 0, 'PAL-0000000245-2024-2025', '', '', 2, '', '2024-08-04 16:59:56', '2024-08-04', 0),
(246, 4, 1, '2024-08-04 17:03:21', '145.00', '152.25', '0.00', '7.25', '152.00', '0.00', 0, 'PAL-0000000246-2024-2025', '', '', 2, '', '2024-08-04 17:03:21', '2024-08-04', 0),
(247, 3, 1, '2024-08-04 17:06:22', '0.00', '0.00', '1850.00', '0.00', '1480.00', '296.00', 20, 'PAL-0000000247-2024-2025', '', '', 2, '', '2024-08-04 17:06:22', '2024-08-04', 0),
(248, 1, 1, '2024-08-05 03:04:29', '825.00', '866.25', '0.00', '41.25', '866.00', '0.00', 0, 'PAL-0000000248-2024-2025', '', '', 2, '', '2024-08-05 03:04:29', '2024-08-05', 0),
(249, 18, 4, '2024-08-05 07:33:06', '260.00', '273.00', '0.00', '13.00', '259.00', '12.97', 5, 'PAL-0000000249-2024-2025', '', '', 2, '', '2024-08-05 07:33:06', '2024-08-05', 0),
(250, 5, 5, '2024-08-05 08:58:44', '1027.00', '1078.35', '0.00', '51.35', '1078.00', '0.00', 0, 'PAL-0000000250-2024-2025', '', '', 2, '', '2024-08-05 08:58:44', '2024-08-05', 0),
(251, 3, 5, '2024-08-05 09:01:02', '660.00', '693.00', '0.00', '33.00', '693.00', '0.00', 0, 'PAL-0000000251-2024-2025', '', '', 2, '', '2024-08-05 09:01:02', '2024-08-05', 0),
(252, 14, 3, '2024-08-05 13:30:14', '0.00', '0.00', '650.00', '0.00', '520.00', '104.00', 20, 'PAL-0000000252-2024-2025', '', '', 2, '', '2024-08-05 13:30:14', '2024-08-05', 0),
(253, 8, 4, '2024-08-05 14:31:52', '300.00', '315.00', '0.00', '15.00', '315.00', '0.00', 0, 'PAL-0000000253-2024-2025', '', '', 2, '', '2024-08-05 14:31:52', '2024-08-05', 0),
(254, 8, 4, '2024-08-05 14:32:47', '0.00', '0.00', '700.00', '0.00', '560.00', '112.00', 20, 'PAL-0000000254-2024-2025', '', '', 2, '', '2024-08-05 14:32:47', '2024-08-05', 0),
(255, 11, 4, '2024-08-05 14:33:37', '125.00', '131.25', '0.00', '6.25', '131.00', '0.00', 0, 'PAL-0000000255-2024-2025', '', '', 2, '', '2024-08-05 14:33:37', '2024-08-05', 0),
(256, 11, 4, '2024-08-05 14:35:35', '40.00', '42.00', '1050.00', '2.00', '1092.00', '0.00', 0, 'PAL-0000000256-2024-2025', '', '', 2, '', '2024-08-05 14:35:35', '2024-08-05', 0),
(257, 14, 3, '2024-08-05 15:02:47', '195.00', '204.75', '0.00', '9.75', '205.00', '0.00', 0, 'PAL-0000000257-2024-2025', '', '', 2, '', '2024-08-05 15:02:47', '2024-08-05', 0),
(258, 18, 4, '2024-08-05 15:03:30', '290.00', '304.50', '0.00', '14.50', '262.00', '36.72', 14, 'PAL-0000000258-2024-2025', '', '', 2, 'SIWIGY', '2024-08-05 15:03:30', '2024-08-05', 0),
(259, 9, 1, '2024-08-05 15:04:37', '0.00', '0.00', '230.00', '0.00', '230.00', '0.00', 0, 'PAL-0000000259-2024-2025', '', '', 2, '', '2024-08-05 15:04:37', '2024-08-05', 0),
(260, 9, 1, '2024-08-05 15:06:24', '300.00', '315.00', '0.00', '15.00', '315.00', '0.00', 0, 'PAL-0000000260-2024-2025', '', '', 2, '', '2024-08-05 15:06:24', '2024-08-05', 0),
(261, 11, 1, '2024-08-05 15:06:54', '0.00', '0.00', '280.00', '0.00', '224.00', '44.80', 20, 'PAL-0000000261-2024-2025', '', '', 2, '', '2024-08-05 15:06:54', '2024-08-05', 0),
(262, 11, 1, '2024-08-05 15:07:56', '260.00', '273.00', '0.00', '13.00', '273.00', '0.00', 0, 'PAL-0000000262-2024-2025', '', '', 2, '', '2024-08-05 15:07:56', '2024-08-05', 0),
(263, 11, 1, '2024-08-05 15:08:38', '0.00', '0.00', '560.00', '0.00', '448.00', '89.60', 20, 'PAL-0000000263-2024-2025', '', '', 2, '', '2024-08-05 15:08:38', '2024-08-05', 0),
(264, 12, 1, '2024-08-05 15:09:39', '600.00', '630.00', '0.00', '30.00', '630.00', '0.00', 0, 'PAL-0000000264-2024-2025', '', '', 2, '', '2024-08-05 15:09:39', '2024-08-05', 0),
(265, 9, 1, '2024-08-05 15:15:16', '0.00', '0.00', '630.00', '0.00', '504.00', '100.80', 20, 'PAL-0000000265-2024-2025', '', '', 2, '', '2024-08-05 15:15:16', '2024-08-05', 0),
(266, 4, 1, '2024-08-05 15:19:09', '135.00', '141.75', '0.00', '6.75', '142.00', '0.00', 0, 'PAL-0000000266-2024-2025', '', '', 2, '', '2024-08-05 15:19:09', '2024-08-05', 0),
(267, 4, 1, '2024-08-05 15:21:55', '0.00', '0.00', '630.00', '0.00', '504.00', '100.80', 20, 'PAL-0000000267-2024-2025', '', '', 2, '', '2024-08-05 15:21:55', '2024-08-05', 0),
(268, 12, 1, '2024-08-05 15:22:44', '180.00', '189.00', '2730.00', '9.00', '2335.00', '467.04', 20, 'PAL-0000000268-2024-2025', '', '', 2, '', '2024-08-05 15:22:44', '2024-08-05', 0),
(269, 1, 1, '2024-08-05 15:36:20', '0.00', '0.00', '1920.00', '0.00', '1536.00', '307.20', 20, 'PAL-0000000269-2024-2025', '', '', 2, '', '2024-08-05 15:36:20', '2024-08-05', 0),
(270, 10, 3, '2024-08-05 15:37:34', '0.00', '0.00', '630.00', '0.00', '504.00', '100.80', 20, 'PAL-0000000270-2024-2025', '', '', 2, '', '2024-08-05 15:37:34', '2024-08-05', 0),
(271, 4, 1, '2024-08-05 15:42:06', '0.00', '0.00', '420.00', '0.00', '336.00', '67.20', 20, 'PAL-0000000271-2024-2025', '', '', 2, '', '2024-08-05 15:42:06', '2024-08-05', 0),
(272, 3, 1, '2024-08-05 15:42:48', '135.00', '141.75', '0.00', '6.75', '142.00', '0.00', 0, 'PAL-0000000272-2024-2025', '', '', 2, '', '2024-08-05 15:42:48', '2024-08-05', 0),
(273, 3, 1, '2024-08-05 15:44:01', '0.00', '0.00', '520.00', '0.00', '416.00', '83.20', 20, 'PAL-0000000273-2024-2025', '', '', 2, '', '2024-08-05 15:44:01', '2024-08-05', 0),
(274, 4, 1, '2024-08-05 15:48:38', '0.00', '0.00', '630.00', '0.00', '504.00', '100.80', 20, 'PAL-0000000274-2024-2025', '', '', 2, '', '2024-08-05 15:48:38', '2024-08-05', 0),
(275, 4, 1, '2024-08-05 15:49:47', '40.00', '42.00', '0.00', '2.00', '42.00', '0.00', 0, 'PAL-0000000275-2024-2025', '', '', 2, '', '2024-08-05 15:49:47', '2024-08-05', 0),
(276, 8, 1, '2024-08-05 15:50:34', '587.00', '616.35', '0.00', '29.35', '616.00', '0.00', 0, 'PAL-0000000276-2024-2025', '', '', 2, '', '2024-08-05 15:50:34', '2024-08-05', 0),
(277, 8, 1, '2024-08-05 15:51:27', '0.00', '0.00', '1550.00', '0.00', '1240.00', '248.00', 20, 'PAL-0000000277-2024-2025', '', '', 2, '', '2024-08-05 15:51:27', '2024-08-05', 0),
(278, 15, 1, '2024-08-05 15:57:23', '330.00', '346.50', '0.00', '16.50', '347.00', '0.00', 0, 'PAL-0000000278-2024-2025', '', '', 2, '', '2024-08-05 15:57:23', '2024-08-05', 0),
(279, 18, 3, '2024-08-05 16:01:24', '406.00', '426.30', '0.00', '20.30', '400.00', '24.03', 6, 'PAL-0000000279-2024-2025', '', '', 2, 'SIWIGY', '2024-08-05 16:01:24', '2024-08-05', 0),
(280, 1, 1, '2024-08-05 16:02:43', '0.00', '0.00', '660.00', '0.00', '528.00', '105.60', 20, 'PAL-0000000280-2024-2025', '', '', 2, 'SIWIGY', '2024-08-05 16:02:43', '2024-08-05', 0),
(281, 15, 1, '2024-08-05 16:03:26', '0.00', '0.00', '630.00', '0.00', '504.00', '100.80', 20, 'PAL-0000000281-2024-2025', '', '', 2, 'SIWIGY', '2024-08-05 16:03:26', '2024-08-05', 0),
(282, 18, 4, '2024-08-05 16:04:03', '580.00', '609.00', '0.00', '29.00', '487.00', '97.44', 20, 'PAL-0000000282-2024-2025', '', '', 2, 'SIWIGY', '2024-08-05 16:04:03', '2024-08-05', 0),
(283, 18, 0, '2024-08-05 16:24:27', '830.00', '871.50', '0.00', '41.50', '872.00', '0.00', 0, 'PAL-0000000283-2024-2025', '', '', 1, '', '2024-08-05 16:24:27', '2024-08-05', 0),
(284, 12, 3, '2024-08-05 16:25:53', '105.00', '110.25', '0.00', '5.25', '110.00', '0.00', 0, 'PAL-0000000284-2024-2025', '', '', 2, 'SIWIGY', '2024-08-05 16:25:53', '2024-08-05', 0),
(285, 12, 3, '2024-08-05 16:26:38', '0.00', '0.00', '1360.00', '0.00', '1088.00', '217.60', 20, 'PAL-0000000285-2024-2025', '', '', 2, 'SIWIGY', '2024-08-05 16:26:38', '2024-08-05', 0),
(286, 14, 1, '2024-08-05 16:28:30', '1192.00', '1251.60', '0.00', '59.60', '1252.00', '0.00', 0, 'PAL-0000000286-2024-2025', '', '', 2, 'SIWIGY', '2024-08-05 16:28:30', '2024-08-05', 0),
(287, 14, 1, '2024-08-05 16:30:06', '0.00', '0.00', '840.00', '0.00', '672.00', '134.40', 20, 'PAL-0000000287-2024-2025', '', '', 2, 'SIWIGY', '2024-08-05 16:30:06', '2024-08-05', 0),
(288, 11, 1, '2024-08-05 17:08:48', '1380.00', '1449.00', '0.00', '69.00', '1449.00', '0.00', 0, 'PAL-0000000288-2024-2025', '', '', 2, '', '2024-08-05 17:08:48', '2024-08-05', 0),
(289, 7, 3, '2024-08-05 17:10:44', '2140.00', '2247.00', '0.00', '107.00', '2247.00', '0.00', 0, 'PAL-0000000289-2024-2025', '', '', 2, '', '2024-08-05 17:10:44', '2024-08-05', 0),
(290, 12, 4, '2024-08-05 17:12:28', '0.00', '0.00', '340.00', '0.00', '272.00', '54.40', 20, 'PAL-0000000290-2024-2025', '', '', 2, '', '2024-08-05 17:12:28', '2024-08-05', 0),
(291, 11, 1, '2024-08-05 17:13:10', '0.00', '0.00', '2260.00', '0.00', '1808.00', '361.60', 20, 'PAL-0000000291-2024-2025', '', '', 2, '', '2024-08-05 17:13:10', '2024-08-05', 0),
(292, 9, 1, '2024-08-05 17:27:29', '40.00', '42.00', '340.00', '2.00', '306.00', '61.12', 20, 'PAL-0000000292-2024-2025', '', '', 2, '', '2024-08-05 17:27:29', '2024-08-05', 0),
(293, 3, 3, '2024-08-05 17:31:49', '930.00', '976.50', '0.00', '46.50', '977.00', '0.00', 0, 'PAL-0000000293-2024-2025', '', '', 2, '', '2024-08-05 17:31:49', '2024-08-05', 0),
(294, 3, 3, '2024-08-05 17:32:54', '0.00', '0.00', '1250.00', '0.00', '1000.00', '200.00', 20, 'PAL-0000000294-2024-2025', '', '', 2, '', '2024-08-05 17:32:54', '2024-08-05', 0),
(295, 1, 0, '2024-08-05 18:42:23', '550.00', '577.50', '0.00', '27.50', '578.00', '0.00', 0, 'PAL-0000000295-2024-2025', '', '', 1, '', '2024-08-05 18:42:23', '2024-08-05', 0),
(296, 6, 0, '2024-08-06 02:42:05', '550.00', '577.50', '0.00', '27.50', '578.00', '0.00', 0, 'PAL-0000000296-2024-2025', '', '', 1, '', '2024-08-06 02:42:05', '2024-08-06', 0),
(297, 18, 0, '2024-08-06 02:52:57', '550.00', '577.50', '0.00', '27.50', '578.00', '0.00', 0, 'PAL-0000000297-2024-2025', '', '', 1, '', '2024-08-06 02:52:57', '2024-08-06', 0);

-- --------------------------------------------------------

--
-- Table structure for table `page_master`
--

CREATE TABLE `page_master` (
  `page_id` int(11) NOT NULL,
  `group` int(11) NOT NULL,
  `page_name` varchar(255) NOT NULL,
  `controller` varchar(255) NOT NULL,
  `fav_icon` longtext NOT NULL,
  `del_status` int(11) NOT NULL,
  `display_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page_master`
--

INSERT INTO `page_master` (`page_id`, `group`, `page_name`, `controller`, `fav_icon`, `del_status`, `display_status`) VALUES
(1, 0, 'Dashboard', 'Dashboard', '<i class=\"zmdi zmdi-home\"></i>', 0, 1),
(2, 0, 'Role', 'Role', '<i class=\"zmdi zmdi-cast zmdi-hc-fw\"></i>', 0, 2),
(3, 0, 'Manage User', 'ManageUser', '<i class=\"zmdi zmdi-account-add zmdi-hc-fw\"></i>', 0, 3),
(4, 0, 'User Access', 'UserAccess', '<i class=\"zmdi zmdi-wrench zmdi-hc-fw\"></i>', 0, 4),
(5, 0, 'Sub Category', 'SubCategory', '<i class=\"zmdi zmdi-wrench zmdi-hc-fw\"></i>', 0, 5),
(7, 0, 'Size', 'Size', '<i class=\"zmdi zmdi-tv-alt-play zmdi-hc-fw\"></i>', 0, NULL),
(8, 0, 'Category', 'Category', '<i class=\"zmdi zmdi-widgets zmdi-hc-fw\"></i>', 0, 6),
(10, 0, 'Food', 'Food', '<i class=\"zmdi zmdi-accounts zmdi-hc-fw\"></i>', 0, NULL),
(11, 0, 'Expense', 'Expense', '<i class=\"zmdi zmdi-collection-pdf zmdi-hc-fw\"></i>', 0, 8),
(12, 0, 'Table ', 'TableManagement', '<i class=\"zmdi zmdi-collection-pdf zmdi-hc-fw\"></i>', 0, 9),
(13, 0, 'Drinks', 'Drinks', '<i class=\"zmdi zmdi-collection-pdf zmdi-hc-fw\"></i>', 0, 9),
(19, 0, 'Content Management', 'ContentManagement', '<i class=\"zmdi zmdi-collection-pdf zmdi-hc-fw\"></i>', 1, 9),
(20, 0, 'Transaction', 'Transaction', '<i class=\"zmdi zmdi-collection-pdf zmdi-hc-fw\"></i>', 0, 9),
(21, 0, 'Orders', 'OrderMangement', '<i class=\"zmdi zmdi-collection-pdf zmdi-hc-fw\"></i>', 0, NULL),
(22, 0, 'Collection', 'CollectionManagement', '<i class=\"zmdi zmdi-collection-pdf zmdi-hc-fw\"></i>', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `payment_master`
--

CREATE TABLE `payment_master` (
  `payment_id` int(11) NOT NULL,
  `payment_name` varchar(255) NOT NULL,
  `del_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_master`
--

INSERT INTO `payment_master` (`payment_id`, `payment_name`, `del_status`) VALUES
(1, 'CASH', 0),
(2, 'CREDIT CARD', 0),
(3, 'DEBIT CARD', 0),
(4, 'PHONEPE', 0),
(5, 'PAYTM', 0),
(6, 'GPAY', 0);

-- --------------------------------------------------------

--
-- Table structure for table `role_master`
--

CREATE TABLE `role_master` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(255) NOT NULL,
  `del_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role_master`
--

INSERT INTO `role_master` (`role_id`, `role_name`, `del_status`) VALUES
(1, 'Super Admin', 0),
(2, 'Admin', 0),
(3, 'Cashier', 0);

-- --------------------------------------------------------

--
-- Table structure for table `size_master`
--

CREATE TABLE `size_master` (
  `size_id` int(11) NOT NULL,
  `size_name` varchar(255) NOT NULL,
  `del_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `size_master`
--

INSERT INTO `size_master` (`size_id`, `size_name`, `del_status`) VALUES
(1, 'NA', 0),
(2, '30 ml', 0),
(3, '60 ml', 0),
(4, '500 ml', 0),
(5, '650 ml', 0);

-- --------------------------------------------------------

--
-- Table structure for table `status_master`
--

CREATE TABLE `status_master` (
  `status_id` int(11) NOT NULL,
  `status_name` varchar(255) NOT NULL,
  `del_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status_master`
--

INSERT INTO `status_master` (`status_id`, `status_name`, `del_status`) VALUES
(1, 'Ongoing', 0),
(2, 'Done', 0),
(3, 'Cancelled', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sub_category_master`
--

CREATE TABLE `sub_category_master` (
  `sub_category_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_name` varchar(255) NOT NULL,
  `del_status` int(11) NOT NULL DEFAULT 0,
  `sub_category_description` varchar(255) DEFAULT NULL,
  `sub_category_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_category_master`
--

INSERT INTO `sub_category_master` (`sub_category_id`, `category_id`, `sub_category_name`, `del_status`, `sub_category_description`, `sub_category_image`) VALUES
(1, 1, 'Shandar Kebab', 0, 'Shandar Kebabs', 'blank'),
(2, 1, 'Main Course', 0, 'Main Course', 'blank'),
(3, 1, 'Soup', 0, 'Soup', 'blank'),
(4, 1, 'Starters', 0, 'Starters', 'blank'),
(5, 2, 'Scotch/Whiskey', 0, 'Scotch/Whiskey', 'blank'),
(6, 2, 'Teqilla', 0, 'Teqilla', 'blank'),
(7, 2, 'Vodka', 0, 'Vodka', 'blank'),
(8, 2, 'Indian Whiskey', 0, 'Indian Whiskey', 'blank'),
(9, 2, 'Rum', 0, 'Rum', 'blank'),
(10, 2, 'Brezzer', 0, 'Brezzer', 'blank'),
(11, 2, 'Beer', 0, 'Beer', 'blank'),
(12, 2, 'Wine', 0, 'Wine', 'blank'),
(13, 2, 'Cocktails', 0, 'Cocktails', 'blank'),
(14, 2, 'Mocktails', 0, 'Mocktails', 'blank'),
(15, 3, 'Container ', 0, 'Container ', 'Blank');

-- --------------------------------------------------------

--
-- Table structure for table `table_master`
--

CREATE TABLE `table_master` (
  `table_id` int(11) NOT NULL,
  `table_name` varchar(600) DEFAULT NULL,
  `table_status` enum('active','deactive') NOT NULL,
  `del_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_master`
--

INSERT INTO `table_master` (`table_id`, `table_name`, `table_status`, `del_status`) VALUES
(1, 'Take Away', 'active', 0),
(2, 'Table 1', 'active', 0),
(3, 'Table 2', 'active', 0),
(4, 'Table 3', 'active', 0),
(5, 'Table 4', 'active', 0),
(6, 'Table 5', 'active', 0),
(7, 'Table 6', 'active', 0),
(8, 'Table 7', 'active', 0),
(9, 'Table 8', 'active', 0),
(10, 'Table 9', 'active', 0),
(11, 'Table 10', 'active', 0),
(12, 'Table 11', 'active', 0),
(13, 'Table 12', 'active', 0),
(14, 'Table 13', 'active', 0),
(15, 'Table 14', 'active', 0),
(16, 'Table 15', 'active', 0),
(17, 'Table 16', 'active', 0),
(18, 'Table 17', 'active', 0),
(19, 'Table 18', 'active', 0),
(20, 'Table 19', 'active', 0),
(21, 'Table 20', 'active', 0),
(22, 'Table 21', 'active', 0),
(23, 'Table 22', 'active', 0),
(24, 'Table 23', 'active', 0),
(25, 'Table 24', 'active', 0),
(26, 'Table 25', 'active', 0);

-- --------------------------------------------------------

--
-- Table structure for table `type_master`
--

CREATE TABLE `type_master` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(255) NOT NULL,
  `added_date` datetime NOT NULL DEFAULT current_timestamp(),
  `del_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `type_master`
--

INSERT INTO `type_master` (`type_id`, `type_name`, `added_date`, `del_status`) VALUES
(1, 'N/A', '2024-06-08 21:03:54', 0),
(2, 'Type 2', '2024-06-08 21:03:54', 0);

-- --------------------------------------------------------

--
-- Table structure for table `website_master`
--

CREATE TABLE `website_master` (
  `website_id` int(11) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `company_logo` varchar(250) NOT NULL,
  `company_favicon` varchar(250) NOT NULL,
  `site_url` varchar(200) NOT NULL,
  `support_contact` varchar(155) NOT NULL,
  `support_email` varchar(50) NOT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `alternative_email` varchar(255) DEFAULT NULL,
  `address` varchar(250) NOT NULL,
  `address_map` text DEFAULT NULL,
  `working_hours` varchar(255) DEFAULT NULL,
  `country_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `pincode` varchar(8) NOT NULL,
  `copy_right` text NOT NULL,
  `meta_title` text NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_description` text NOT NULL,
  `sms_username` varchar(30) NOT NULL,
  `sms_password` varchar(30) NOT NULL,
  `sms_sender_id` varchar(20) NOT NULL,
  `email_protocal` varchar(20) NOT NULL,
  `from_email_id` varchar(50) NOT NULL,
  `bcc_email_id` text NOT NULL,
  `smtp_host_name` varchar(100) NOT NULL,
  `smtp_port` int(11) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `email_password` varchar(50) NOT NULL,
  `facebook_link` text NOT NULL,
  `linkedin_link` text NOT NULL,
  `instagram_link` text NOT NULL,
  `twitter_link` text NOT NULL,
  `google_plus_link` text NOT NULL,
  `youtube_link` text NOT NULL,
  `pinterest_link` text NOT NULL,
  `footer_description` text DEFAULT NULL,
  `del_status` int(11) NOT NULL DEFAULT 0,
  `website_brochure` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='manage website';

--
-- Dumping data for table `website_master`
--

INSERT INTO `website_master` (`website_id`, `company_name`, `company_logo`, `company_favicon`, `site_url`, `support_contact`, `support_email`, `phone_number`, `alternative_email`, `address`, `address_map`, `working_hours`, `country_id`, `state_id`, `city_id`, `pincode`, `copy_right`, `meta_title`, `meta_keyword`, `meta_description`, `sms_username`, `sms_password`, `sms_sender_id`, `email_protocal`, `from_email_id`, `bcc_email_id`, `smtp_host_name`, `smtp_port`, `email_id`, `email_password`, `facebook_link`, `linkedin_link`, `instagram_link`, `twitter_link`, `google_plus_link`, `youtube_link`, `pinterest_link`, `footer_description`, `del_status`, `website_brochure`) VALUES
(1, 'Santipur Public School', '1605168221sps-logo2.png', '1605167943sps-logo.png', 'Website', '+91 1234/5678', 'info@santipurpublicschool.com', '9851290794 /  9153135804', 'santipurpublicschool@gmail.com', 'Vill - Babla, Dakshinpara, P.O. - Babla, Gobindapur, P.S. - Santipur, Nadia, West Bengal 741404, India', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8972.998177306134!2d88.43280146227943!3d23.2692691723223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f8e6d7e2f7be13%3A0x39255af0ee8b2bd2!2sSantipur%20Public%20School!5e0!3m2!1sen!2sin!4v1607110683662!5m2!1sen!2sin\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 'CLICK HERE FOR NEW ADMISSION GUIDELINE', 101, 41, 5312, '110039', 'Copyright © 2020 Santipur Public School | All Rights Reserved.', 'Santipur Public School', '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        Santipur Public School, sps, public school, santipur school, nadia school, school near ranaghat', '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                Santipur Public School is a premium school in nadia district.', '', '', '', 'SMTP Email', 'injamamulhaqueinfimonk@gmail.com', '', 'ssl://smtp.gmail.com', 465, 'injamamulhaqueinfimonk@gmail.com', 'injamam@!23', 'https://www.facebook.com/Santipur-Public-School-352195944977821/', '', '', '', '', 'https://www.youtube.com/channel/UCZGs07ksNoP2FIiHfhF_KhA', '', 'Subscribe to our news letter', 0, '1606892666P-18.jpg'),
(1, 'Santipur Public School', '1605168221sps-logo2.png', '1605167943sps-logo.png', 'Website', '+91 1234/5678', 'info@santipurpublicschool.com', '9851290794 /  9153135804', 'santipurpublicschool@gmail.com', 'Vill - Babla, Dakshinpara, P.O. - Babla, Gobindapur, P.S. - Santipur, Nadia, West Bengal 741404, India', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8972.998177306134!2d88.43280146227943!3d23.2692691723223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f8e6d7e2f7be13%3A0x39255af0ee8b2bd2!2sSantipur%20Public%20School!5e0!3m2!1sen!2sin!4v1607110683662!5m2!1sen!2sin\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 'CLICK HERE FOR NEW ADMISSION GUIDELINE', 101, 41, 5312, '110039', 'Copyright © 2020 Santipur Public School | All Rights Reserved.', 'Santipur Public School', '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        Santipur Public School, sps, public school, santipur school, nadia school, school near ranaghat', '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                Santipur Public School is a premium school in nadia district.', '', '', '', 'SMTP Email', 'injamamulhaqueinfimonk@gmail.com', '', 'ssl://smtp.gmail.com', 465, 'injamamulhaqueinfimonk@gmail.com', 'injamam@!23', 'https://www.facebook.com/Santipur-Public-School-352195944977821/', '', '', '', '', 'https://www.youtube.com/channel/UCZGs07ksNoP2FIiHfhF_KhA', '', 'Subscribe to our news letter', 0, '1606892666P-18.jpg'),
(1, 'Santipur Public School', '1605168221sps-logo2.png', '1605167943sps-logo.png', 'Website', '+91 1234/5678', 'info@santipurpublicschool.com', '9851290794 /  9153135804', 'santipurpublicschool@gmail.com', 'Vill - Babla, Dakshinpara, P.O. - Babla, Gobindapur, P.S. - Santipur, Nadia, West Bengal 741404, India', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8972.998177306134!2d88.43280146227943!3d23.2692691723223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f8e6d7e2f7be13%3A0x39255af0ee8b2bd2!2sSantipur%20Public%20School!5e0!3m2!1sen!2sin!4v1607110683662!5m2!1sen!2sin\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 'CLICK HERE FOR NEW ADMISSION GUIDELINE', 101, 41, 5312, '110039', 'Copyright © 2020 Santipur Public School | All Rights Reserved.', 'Santipur Public School', '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        Santipur Public School, sps, public school, santipur school, nadia school, school near ranaghat', '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                Santipur Public School is a premium school in nadia district.', '', '', '', 'SMTP Email', 'injamamulhaqueinfimonk@gmail.com', '', 'ssl://smtp.gmail.com', 465, 'injamamulhaqueinfimonk@gmail.com', 'injamam@!23', 'https://www.facebook.com/Santipur-Public-School-352195944977821/', '', '', '', '', 'https://www.youtube.com/channel/UCZGs07ksNoP2FIiHfhF_KhA', '', 'Subscribe to our news letter', 0, '1606892666P-18.jpg'),
(1, 'Santipur Public School', '1605168221sps-logo2.png', '1605167943sps-logo.png', 'Website', '+91 1234/5678', 'info@santipurpublicschool.com', '9851290794 /  9153135804', 'santipurpublicschool@gmail.com', 'Vill - Babla, Dakshinpara, P.O. - Babla, Gobindapur, P.S. - Santipur, Nadia, West Bengal 741404, India', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8972.998177306134!2d88.43280146227943!3d23.2692691723223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f8e6d7e2f7be13%3A0x39255af0ee8b2bd2!2sSantipur%20Public%20School!5e0!3m2!1sen!2sin!4v1607110683662!5m2!1sen!2sin\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 'CLICK HERE FOR NEW ADMISSION GUIDELINE', 101, 41, 5312, '110039', 'Copyright © 2020 Santipur Public School | All Rights Reserved.', 'Santipur Public School', '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        Santipur Public School, sps, public school, santipur school, nadia school, school near ranaghat', '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                Santipur Public School is a premium school in nadia district.', '', '', '', 'SMTP Email', 'injamamulhaqueinfimonk@gmail.com', '', 'ssl://smtp.gmail.com', 465, 'injamamulhaqueinfimonk@gmail.com', 'injamam@!23', 'https://www.facebook.com/Santipur-Public-School-352195944977821/', '', '', '', '', 'https://www.youtube.com/channel/UCZGs07ksNoP2FIiHfhF_KhA', '', 'Subscribe to our news letter', 0, '1606892666P-18.jpg'),
(1, 'Santipur Public School', '1605168221sps-logo2.png', '1605167943sps-logo.png', 'Website', '+91 1234/5678', 'info@santipurpublicschool.com', '9851290794 /  9153135804', 'santipurpublicschool@gmail.com', 'Vill - Babla, Dakshinpara, P.O. - Babla, Gobindapur, P.S. - Santipur, Nadia, West Bengal 741404, India', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8972.998177306134!2d88.43280146227943!3d23.2692691723223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f8e6d7e2f7be13%3A0x39255af0ee8b2bd2!2sSantipur%20Public%20School!5e0!3m2!1sen!2sin!4v1607110683662!5m2!1sen!2sin\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 'CLICK HERE FOR NEW ADMISSION GUIDELINE', 101, 41, 5312, '110039', 'Copyright © 2020 Santipur Public School | All Rights Reserved.', 'Santipur Public School', '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        Santipur Public School, sps, public school, santipur school, nadia school, school near ranaghat', '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                Santipur Public School is a premium school in nadia district.', '', '', '', 'SMTP Email', 'injamamulhaqueinfimonk@gmail.com', '', 'ssl://smtp.gmail.com', 465, 'injamamulhaqueinfimonk@gmail.com', 'injamam@!23', 'https://www.facebook.com/Santipur-Public-School-352195944977821/', '', '', '', '', 'https://www.youtube.com/channel/UCZGs07ksNoP2FIiHfhF_KhA', '', 'Subscribe to our news letter', 0, '1606892666P-18.jpg');
INSERT INTO `website_master` (`website_id`, `company_name`, `company_logo`, `company_favicon`, `site_url`, `support_contact`, `support_email`, `phone_number`, `alternative_email`, `address`, `address_map`, `working_hours`, `country_id`, `state_id`, `city_id`, `pincode`, `copy_right`, `meta_title`, `meta_keyword`, `meta_description`, `sms_username`, `sms_password`, `sms_sender_id`, `email_protocal`, `from_email_id`, `bcc_email_id`, `smtp_host_name`, `smtp_port`, `email_id`, `email_password`, `facebook_link`, `linkedin_link`, `instagram_link`, `twitter_link`, `google_plus_link`, `youtube_link`, `pinterest_link`, `footer_description`, `del_status`, `website_brochure`) VALUES
(1, 'Santipur Public School', '1605168221sps-logo2.png', '1605167943sps-logo.png', 'Website', '+91 1234/5678', 'info@santipurpublicschool.com', '9851290794 /  9153135804', 'santipurpublicschool@gmail.com', 'Vill - Babla, Dakshinpara, P.O. - Babla, Gobindapur, P.S. - Santipur, Nadia, West Bengal 741404, India', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8972.998177306134!2d88.43280146227943!3d23.2692691723223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f8e6d7e2f7be13%3A0x39255af0ee8b2bd2!2sSantipur%20Public%20School!5e0!3m2!1sen!2sin!4v1607110683662!5m2!1sen!2sin\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 'CLICK HERE FOR NEW ADMISSION GUIDELINE', 101, 41, 5312, '110039', 'Copyright © 2020 Santipur Public School | All Rights Reserved.', 'Santipur Public School', '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        Santipur Public School, sps, public school, santipur school, nadia school, school near ranaghat', '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                Santipur Public School is a premium school in nadia district.', '', '', '', 'SMTP Email', 'injamamulhaqueinfimonk@gmail.com', '', 'ssl://smtp.gmail.com', 465, 'injamamulhaqueinfimonk@gmail.com', 'injamam@!23', 'https://www.facebook.com/Santipur-Public-School-352195944977821/', '', '', '', '', 'https://www.youtube.com/channel/UCZGs07ksNoP2FIiHfhF_KhA', '', 'Subscribe to our news letter', 0, '1606892666P-18.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_transactions`
--
ALTER TABLE `account_transactions`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `admin_master`
--
ALTER TABLE `admin_master`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `category_master`
--
ALTER TABLE `category_master`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `daily_expense_details_master`
--
ALTER TABLE `daily_expense_details_master`
  ADD PRIMARY KEY (`daily_expense_details_id`);

--
-- Indexes for table `daily_expense_master`
--
ALTER TABLE `daily_expense_master`
  ADD PRIMARY KEY (`daily_expense_id`),
  ADD UNIQUE KEY `invoice_no` (`invoice_no`);

--
-- Indexes for table `food_master`
--
ALTER TABLE `food_master`
  ADD PRIMARY KEY (`food_id`),
  ADD UNIQUE KEY `food_item_code` (`food_item_code`);

--
-- Indexes for table `food_price_master`
--
ALTER TABLE `food_price_master`
  ADD PRIMARY KEY (`food_price_id`);

--
-- Indexes for table `gst_master`
--
ALTER TABLE `gst_master`
  ADD PRIMARY KEY (`gst_id`);

--
-- Indexes for table `live_stock_master`
--
ALTER TABLE `live_stock_master`
  ADD PRIMARY KEY (`live_stock_id`);

--
-- Indexes for table `order_details_master`
--
ALTER TABLE `order_details_master`
  ADD PRIMARY KEY (`order_details_id`);

--
-- Indexes for table `order_master`
--
ALTER TABLE `order_master`
  ADD PRIMARY KEY (`order_id`),
  ADD UNIQUE KEY `bill_invoice_number` (`bill_invoice_number`);

--
-- Indexes for table `page_master`
--
ALTER TABLE `page_master`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `payment_master`
--
ALTER TABLE `payment_master`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `role_master`
--
ALTER TABLE `role_master`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `size_master`
--
ALTER TABLE `size_master`
  ADD PRIMARY KEY (`size_id`);

--
-- Indexes for table `status_master`
--
ALTER TABLE `status_master`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `sub_category_master`
--
ALTER TABLE `sub_category_master`
  ADD PRIMARY KEY (`sub_category_id`);

--
-- Indexes for table `table_master`
--
ALTER TABLE `table_master`
  ADD PRIMARY KEY (`table_id`);

--
-- Indexes for table `type_master`
--
ALTER TABLE `type_master`
  ADD PRIMARY KEY (`type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_transactions`
--
ALTER TABLE `account_transactions`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=303;

--
-- AUTO_INCREMENT for table `admin_master`
--
ALTER TABLE `admin_master`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category_master`
--
ALTER TABLE `category_master`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `daily_expense_details_master`
--
ALTER TABLE `daily_expense_details_master`
  MODIFY `daily_expense_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `daily_expense_master`
--
ALTER TABLE `daily_expense_master`
  MODIFY `daily_expense_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `food_master`
--
ALTER TABLE `food_master`
  MODIFY `food_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=312;

--
-- AUTO_INCREMENT for table `food_price_master`
--
ALTER TABLE `food_price_master`
  MODIFY `food_price_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=361;

--
-- AUTO_INCREMENT for table `gst_master`
--
ALTER TABLE `gst_master`
  MODIFY `gst_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `live_stock_master`
--
ALTER TABLE `live_stock_master`
  MODIFY `live_stock_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_details_master`
--
ALTER TABLE `order_details_master`
  MODIFY `order_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=967;

--
-- AUTO_INCREMENT for table `order_master`
--
ALTER TABLE `order_master`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=299;

--
-- AUTO_INCREMENT for table `payment_master`
--
ALTER TABLE `payment_master`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `size_master`
--
ALTER TABLE `size_master`
  MODIFY `size_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `status_master`
--
ALTER TABLE `status_master`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sub_category_master`
--
ALTER TABLE `sub_category_master`
  MODIFY `sub_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `table_master`
--
ALTER TABLE `table_master`
  MODIFY `table_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `type_master`
--
ALTER TABLE `type_master`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
