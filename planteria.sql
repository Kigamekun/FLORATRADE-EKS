-- phpMyAdmin SQL Dump
-- version 4.9.7deb1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 09, 2022 at 11:00 AM
-- Server version: 8.0.27-0ubuntu0.21.04.1
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `planteria`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int NOT NULL,
  `phone_code` int NOT NULL,
  `country_code` char(2) NOT NULL,
  `country_name` varchar(80) NOT NULL,
  `file_lisensi` tinyint(1) NOT NULL DEFAULT '0',
  `latitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `phone_code`, `country_code`, `country_name`, `file_lisensi`, `latitude`, `longitude`, `created_at`, `updated_at`) VALUES
(1, 93, 'AF', 'Afghanistan', 1, '33', '65', NULL, NULL),
(2, 358, 'AX', 'Aland Islands', 1, NULL, NULL, NULL, NULL),
(3, 355, 'AL', 'Albania', 0, '41', '20', NULL, NULL),
(4, 213, 'DZ', 'Algeria', 0, '28', '3', NULL, NULL),
(5, 1684, 'AS', 'American Samoa', 0, '-14.33', '-170', NULL, NULL),
(6, 376, 'AD', 'Andorra', 0, '42.5', '1.5', NULL, NULL),
(7, 244, 'AO', 'Angola', 0, '-12.5', '18.5', NULL, NULL),
(8, 1264, 'AI', 'Anguilla', 0, '18.25', '-63.17', NULL, NULL),
(9, 672, 'AQ', 'Antarctica', 0, '-90', '0', NULL, NULL),
(10, 1268, 'AG', 'Antigua and Barbuda', 0, '17.05', '-61.8', NULL, NULL),
(11, 54, 'AR', 'Argentina', 0, '-34', '-64', NULL, NULL),
(12, 374, 'AM', 'Armenia', 0, '40', '45', NULL, NULL),
(13, 297, 'AW', 'Aruba', 0, '12.5', '-69.97', NULL, NULL),
(14, 61, 'AU', 'Australia', 0, '-27', '133', NULL, NULL),
(15, 43, 'AT', 'Austria', 0, '47.33', '13.33', NULL, NULL),
(16, 994, 'AZ', 'Azerbaijan', 0, '40.5', '47.5', NULL, NULL),
(17, 1242, 'BS', 'Bahamas', 0, '24.25', '-76', NULL, NULL),
(18, 973, 'BH', 'Bahrain', 0, '26', '50.55', NULL, NULL),
(19, 880, 'BD', 'Bangladesh', 0, '24', '90', NULL, NULL),
(20, 1246, 'BB', 'Barbados', 0, '13.17', '-59.53', NULL, NULL),
(21, 375, 'BY', 'Belarus', 0, '53', '28', NULL, NULL),
(22, 32, 'BE', 'Belgium', 0, '50.83', '4', NULL, NULL),
(23, 501, 'BZ', 'Belize', 0, '17.25', '-88.75', NULL, NULL),
(24, 229, 'BJ', 'Benin', 0, '9.5', '2.25', NULL, NULL),
(25, 1441, 'BM', 'Bermuda', 0, '32.33', '-64.75', NULL, NULL),
(26, 975, 'BT', 'Bhutan', 0, '27.5', '90.5', NULL, NULL),
(27, 591, 'BO', 'Bolivia', 0, '-17', '-65', NULL, NULL),
(28, 599, 'BQ', 'Bonaire, Sint Eustatius and Saba', 0, NULL, NULL, NULL, NULL),
(29, 387, 'BA', 'Bosnia and Herzegovina', 0, '44', '18', NULL, NULL),
(30, 267, 'BW', 'Botswana', 0, '-22', '24', NULL, NULL),
(31, 55, 'BV', 'Bouvet Island', 0, '-54.43', '3.4', NULL, NULL),
(32, 55, 'BR', 'Brazil', 0, '-10', '-55', NULL, NULL),
(33, 246, 'IO', 'British Indian Ocean Territory', 0, '-6', '71.5', NULL, NULL),
(34, 673, 'BN', 'Brunei Darussalam', 0, '4.5', '114.67', NULL, NULL),
(35, 359, 'BG', 'Bulgaria', 0, '43', '25', NULL, NULL),
(36, 226, 'BF', 'Burkina Faso', 0, '13', '-2', NULL, NULL),
(37, 257, 'BI', 'Burundi', 0, '-3.5', '30', NULL, NULL),
(38, 855, 'KH', 'Cambodia', 0, '13', '105', NULL, NULL),
(39, 237, 'CM', 'Cameroon', 0, '6', '12', NULL, NULL),
(40, 1, 'CA', 'Canada', 0, '60', '-95', NULL, NULL),
(41, 238, 'CV', 'Cape Verde', 0, '16', '-24', NULL, NULL),
(42, 1345, 'KY', 'Cayman Islands', 0, '19.5', '-80.5', NULL, NULL),
(43, 236, 'CF', 'Central African Republic', 0, '7', '21', NULL, NULL),
(44, 235, 'TD', 'Chad', 0, '15', '19', NULL, NULL),
(45, 56, 'CL', 'Chile', 0, '-30', '-71', NULL, NULL),
(46, 86, 'CN', 'China', 0, '35', '105', NULL, NULL),
(47, 61, 'CX', 'Christmas Island', 0, '-10.5', '105.67', NULL, NULL),
(48, 672, 'CC', 'Cocos (Keeling) Islands', 0, '-12.5', '96.83', NULL, NULL),
(49, 57, 'CO', 'Colombia', 0, '4', '-72', NULL, NULL),
(50, 269, 'KM', 'Comoros', 0, '-12.17', '44.25', NULL, NULL),
(51, 242, 'CG', 'Congo', 0, '-1', '15', NULL, NULL),
(52, 242, 'CD', 'Congo, Democratic Republic of the Congo', 0, '0', '25', NULL, NULL),
(53, 682, 'CK', 'Cook Islands', 0, '-21.23', '-159.77', NULL, NULL),
(54, 506, 'CR', 'Costa Rica', 0, '10', '-84', NULL, NULL),
(55, 225, 'CI', 'Cote D\'Ivoire', 0, '8', '-5', NULL, NULL),
(56, 385, 'HR', 'Croatia', 0, '45.17', '15.5', NULL, NULL),
(57, 53, 'CU', 'Cuba', 0, '21.5', '-80', NULL, NULL),
(58, 599, 'CW', 'Curacao', 0, NULL, NULL, NULL, NULL),
(59, 357, 'CY', 'Cyprus', 0, '35', '33', NULL, NULL),
(60, 420, 'CZ', 'Czech Republic', 0, '49.75', '15.5', NULL, NULL),
(61, 45, 'DK', 'Denmark', 0, '56', '10', NULL, NULL),
(62, 253, 'DJ', 'Djibouti', 0, '11.5', '43', NULL, NULL),
(63, 1767, 'DM', 'Dominica', 0, '15.42', '-61.33', NULL, NULL),
(64, 1809, 'DO', 'Dominican Republic', 0, '19', '-70.67', NULL, NULL),
(65, 593, 'EC', 'Ecuador', 0, '-2', '-77.5', NULL, NULL),
(66, 20, 'EG', 'Egypt', 0, '27', '30', NULL, NULL),
(67, 503, 'SV', 'El Salvador', 0, '13.83', '-88.92', NULL, NULL),
(68, 240, 'GQ', 'Equatorial Guinea', 0, '2', '10', NULL, NULL),
(69, 291, 'ER', 'Eritrea', 0, '15', '39', NULL, NULL),
(70, 372, 'EE', 'Estonia', 0, '59', '26', NULL, NULL),
(71, 251, 'ET', 'Ethiopia', 0, '8', '38', NULL, NULL),
(72, 500, 'FK', 'Falkland Islands (Malvinas)', 0, '-51.75', '-59', NULL, NULL),
(73, 298, 'FO', 'Faroe Islands', 0, '62', '-7', NULL, NULL),
(74, 679, 'FJ', 'Fiji', 0, '-18', '175', NULL, NULL),
(75, 358, 'FI', 'Finland', 0, '64', '26', NULL, NULL),
(76, 33, 'FR', 'France', 0, '46', '2', NULL, NULL),
(77, 594, 'GF', 'French Guiana', 0, '4', '-53', NULL, NULL),
(78, 689, 'PF', 'French Polynesia', 0, '-15', '-140', NULL, NULL),
(79, 262, 'TF', 'French Southern Territories', 0, '-43', '67', NULL, NULL),
(80, 241, 'GA', 'Gabon', 0, '-1', '11.75', NULL, NULL),
(81, 220, 'GM', 'Gambia', 0, '13.47', '-16.57', NULL, NULL),
(82, 995, 'GE', 'Georgia', 0, '42', '43.5', NULL, NULL),
(83, 49, 'DE', 'Germany', 0, '51', '9', NULL, NULL),
(84, 233, 'GH', 'Ghana', 0, '8', '-2', NULL, NULL),
(85, 350, 'GI', 'Gibraltar', 0, '36.18', '-5.37', NULL, NULL),
(86, 30, 'GR', 'Greece', 0, '39', '22', NULL, NULL),
(87, 299, 'GL', 'Greenland', 0, '72', '-40', NULL, NULL),
(88, 1473, 'GD', 'Grenada', 0, '12.12', '-61.67', NULL, NULL),
(89, 590, 'GP', 'Guadeloupe', 0, '16.25', '-61.58', NULL, NULL),
(90, 1671, 'GU', 'Guam', 0, '13.47', '144.78', NULL, NULL),
(91, 502, 'GT', 'Guatemala', 0, '15.5', '-90.25', NULL, NULL),
(92, 44, 'GG', 'Guernsey', 0, NULL, NULL, NULL, NULL),
(93, 224, 'GN', 'Guinea', 0, '11', '-10', NULL, NULL),
(94, 245, 'GW', 'Guinea-Bissau', 0, '12', '-15', NULL, NULL),
(95, 592, 'GY', 'Guyana', 0, '5', '-59', NULL, NULL),
(96, 509, 'HT', 'Haiti', 0, '19', '-72.42', NULL, NULL),
(97, 0, 'HM', 'Heard Island and Mcdonald Islands', 0, '-53.1', '72.52', NULL, NULL),
(98, 39, 'VA', 'Holy See (Vatican City State)', 0, '41.9', '12.45', NULL, NULL),
(99, 504, 'HN', 'Honduras', 0, '15', '-86.5', NULL, NULL),
(100, 852, 'HK', 'Hong Kong', 0, '22.25', '114.17', NULL, NULL),
(101, 36, 'HU', 'Hungary', 0, '47', '20', NULL, NULL),
(102, 354, 'IS', 'Iceland', 0, '65', '-18', NULL, NULL),
(103, 91, 'IN', 'India', 0, '20', '77', NULL, NULL),
(104, 62, 'ID', 'Indonesia', 1, '-5', '120', NULL, NULL),
(105, 98, 'IR', 'Iran, Islamic Republic of', 0, '32', '53', NULL, NULL),
(106, 964, 'IQ', 'Iraq', 0, '33', '44', NULL, NULL),
(107, 353, 'IE', 'Ireland', 0, '53', '-8', NULL, NULL),
(108, 44, 'IM', 'Isle of Man', 0, NULL, NULL, NULL, NULL),
(109, 972, 'IL', 'Israel', 0, '31.5', '34.75', NULL, NULL),
(110, 39, 'IT', 'Italy', 0, '42.83', '12.83', NULL, NULL),
(111, 1876, 'JM', 'Jamaica', 0, '18.25', '-77.5', NULL, NULL),
(112, 81, 'JP', 'Japan', 0, '36', '138', NULL, NULL),
(113, 44, 'JE', 'Jersey', 0, NULL, NULL, NULL, NULL),
(114, 962, 'JO', 'Jordan', 0, '31', '36', NULL, NULL),
(115, 7, 'KZ', 'Kazakhstan', 0, '48', '68', NULL, NULL),
(116, 254, 'KE', 'Kenya', 0, '1', '38', NULL, NULL),
(117, 686, 'KI', 'Kiribati', 0, '1.42', '173', NULL, NULL),
(118, 850, 'KP', 'Korea, Democratic People\'s Republic of', 0, '40', '127', NULL, NULL),
(119, 82, 'KR', 'Korea, Republic of', 0, '37', '127.5', NULL, NULL),
(120, 381, 'XK', 'Kosovo', 0, NULL, NULL, NULL, NULL),
(121, 965, 'KW', 'Kuwait', 0, '29.34', '47.66', NULL, NULL),
(122, 996, 'KG', 'Kyrgyzstan', 0, '41', '75', NULL, NULL),
(123, 856, 'LA', 'Lao People\'s Democratic Republic', 0, '18', '105', NULL, NULL),
(124, 371, 'LV', 'Latvia', 0, '57', '25', NULL, NULL),
(125, 961, 'LB', 'Lebanon', 0, '33.83', '35.83', NULL, NULL),
(126, 266, 'LS', 'Lesotho', 0, '-29.5', '28.5', NULL, NULL),
(127, 231, 'LR', 'Liberia', 0, '6.5', '-9.5', NULL, NULL),
(128, 218, 'LY', 'Libyan Arab Jamahiriya', 0, '25', '17', NULL, NULL),
(129, 423, 'LI', 'Liechtenstein', 0, '47.17', '9.53', NULL, NULL),
(130, 370, 'LT', 'Lithuania', 0, '56', '24', NULL, NULL),
(131, 352, 'LU', 'Luxembourg', 0, '49.75', '6.17', NULL, NULL),
(132, 853, 'MO', 'Macao', 0, '22.17', '113.55', NULL, NULL),
(133, 389, 'MK', 'Macedonia, the Former Yugoslav Republic of', 0, '41.83', '22', NULL, NULL),
(134, 261, 'MG', 'Madagascar', 0, '-20', '47', NULL, NULL),
(135, 265, 'MW', 'Malawi', 0, '-13.5', '34', NULL, NULL),
(136, 60, 'MY', 'Malaysia', 0, '2.5', '112.5', NULL, NULL),
(137, 960, 'MV', 'Maldives', 0, '3.25', '73', NULL, NULL),
(138, 223, 'ML', 'Mali', 0, '17', '-4', NULL, NULL),
(139, 356, 'MT', 'Malta', 0, '35.83', '14.58', NULL, NULL),
(140, 692, 'MH', 'Marshall Islands', 0, '9', '168', NULL, NULL),
(141, 596, 'MQ', 'Martinique', 0, '14.67', '-61', NULL, NULL),
(142, 222, 'MR', 'Mauritania', 0, '20', '-12', NULL, NULL),
(143, 230, 'MU', 'Mauritius', 0, '-20.28', '57.55', NULL, NULL),
(144, 269, 'YT', 'Mayotte', 0, '-12.83', '45.17', NULL, NULL),
(145, 52, 'MX', 'Mexico', 0, '23', '-102', NULL, NULL),
(146, 691, 'FM', 'Micronesia, Federated States of', 0, '6.92', '158.25', NULL, NULL),
(147, 373, 'MD', 'Moldova, Republic of', 0, '47', '29', NULL, NULL),
(148, 377, 'MC', 'Monaco', 0, '43.73', '7.4', NULL, NULL),
(149, 976, 'MN', 'Mongolia', 0, '46', '105', NULL, NULL),
(150, 382, 'ME', 'Montenegro', 0, '42', '19', NULL, NULL),
(151, 1664, 'MS', 'Montserrat', 0, '16.75', '-62.2', NULL, NULL),
(152, 212, 'MA', 'Morocco', 0, '32', '-5', NULL, NULL),
(153, 258, 'MZ', 'Mozambique', 0, '-18.25', '35', NULL, NULL),
(154, 95, 'MM', 'Myanmar', 0, '22', '98', NULL, NULL),
(155, 264, 'NA', 'Namibia', 0, '-22', '17', NULL, NULL),
(156, 674, 'NR', 'Nauru', 0, '-0.53', '166.92', NULL, NULL),
(157, 977, 'NP', 'Nepal', 0, '28', '84', NULL, NULL),
(158, 31, 'NL', 'Netherlands', 0, '52.5', '5.75', NULL, NULL),
(159, 599, 'AN', 'Netherlands Antilles', 0, '12.25', '-68.75', NULL, NULL),
(160, 687, 'NC', 'New Caledonia', 0, '-21.5', '165.5', NULL, NULL),
(161, 64, 'NZ', 'New Zealand', 0, '-41', '174', NULL, NULL),
(162, 505, 'NI', 'Nicaragua', 0, '13', '-85', NULL, NULL),
(163, 227, 'NE', 'Niger', 0, '16', '8', NULL, NULL),
(164, 234, 'NG', 'Nigeria', 0, '10', '8', NULL, NULL),
(165, 683, 'NU', 'Niue', 0, '-19.03', '-169.87', NULL, NULL),
(166, 672, 'NF', 'Norfolk Island', 0, '-29.03', '167.95', NULL, NULL),
(167, 1670, 'MP', 'Northern Mariana Islands', 0, '15.2', '145.75', NULL, NULL),
(168, 47, 'NO', 'Norway', 0, '62', '10', NULL, NULL),
(169, 968, 'OM', 'Oman', 0, '21', '57', NULL, NULL),
(170, 92, 'PK', 'Pakistan', 0, '30', '70', NULL, NULL),
(171, 680, 'PW', 'Palau', 0, '7.5', '134.5', NULL, NULL),
(172, 970, 'PS', 'Palestinian Territory, Occupied', 0, '32', '35.25', NULL, NULL),
(173, 507, 'PA', 'Panama', 0, '9', '-80', NULL, NULL),
(174, 675, 'PG', 'Papua New Guinea', 0, '-6', '147', NULL, NULL),
(175, 595, 'PY', 'Paraguay', 0, '-23', '-58', NULL, NULL),
(176, 51, 'PE', 'Peru', 0, '-10', '-76', NULL, NULL),
(177, 63, 'PH', 'Philippines', 0, '13', '122', NULL, NULL),
(178, 64, 'PN', 'Pitcairn', 0, NULL, NULL, NULL, NULL),
(179, 48, 'PL', 'Poland', 0, '52', '20', NULL, NULL),
(180, 351, 'PT', 'Portugal', 0, '39.5', '-8', NULL, NULL),
(181, 1787, 'PR', 'Puerto Rico', 0, '18.25', '-66.5', NULL, NULL),
(182, 974, 'QA', 'Qatar', 0, '25.5', '51.25', NULL, NULL),
(183, 262, 'RE', 'Reunion', 0, '-21.1', '55.6', NULL, NULL),
(184, 40, 'RO', 'Romania', 0, '46', '25', NULL, NULL),
(185, 70, 'RU', 'Russian Federation', 0, '60', '100', NULL, NULL),
(186, 250, 'RW', 'Rwanda', 0, '-2', '30', NULL, NULL),
(187, 590, 'BL', 'Saint Barthelemy', 0, NULL, NULL, NULL, NULL),
(188, 290, 'SH', 'Saint Helena', 0, '-15.93', '-5.7', NULL, NULL),
(189, 1869, 'KN', 'Saint Kitts and Nevis', 0, '17.33', '-62.75', NULL, NULL),
(190, 1758, 'LC', 'Saint Lucia', 0, '13.88', '-61.13', NULL, NULL),
(191, 590, 'MF', 'Saint Martin', 0, NULL, NULL, NULL, NULL),
(192, 508, 'PM', 'Saint Pierre and Miquelon', 0, '46.83', '-56.33', NULL, NULL),
(193, 1784, 'VC', 'Saint Vincent and the Grenadines', 0, '13.25', '-61.2', NULL, NULL),
(194, 684, 'WS', 'Samoa', 0, '-13.58', '-172.33', NULL, NULL),
(195, 378, 'SM', 'San Marino', 0, '43.77', '12.42', NULL, NULL),
(196, 239, 'ST', 'Sao Tome and Principe', 0, '1', '7', NULL, NULL),
(197, 966, 'SA', 'Saudi Arabia', 0, '25', '45', NULL, NULL),
(198, 221, 'SN', 'Senegal', 0, '14', '-14', NULL, NULL),
(199, 381, 'RS', 'Serbia', 0, '44', '21', NULL, NULL),
(200, 381, 'CS', 'Serbia and Montenegro', 0, NULL, NULL, NULL, NULL),
(201, 248, 'SC', 'Seychelles', 0, '-4.58', '55.67', NULL, NULL),
(202, 232, 'SL', 'Sierra Leone', 0, '8.5', '-11.5', NULL, NULL),
(203, 65, 'SG', 'Singapore', 0, '1.37', '103.8', NULL, NULL),
(204, 1, 'SX', 'Sint Maarten', 0, NULL, NULL, NULL, NULL),
(205, 421, 'SK', 'Slovakia', 0, '48.67', '19.5', NULL, NULL),
(206, 386, 'SI', 'Slovenia', 0, '46', '15', NULL, NULL),
(207, 677, 'SB', 'Solomon Islands', 0, '-8', '159', NULL, NULL),
(208, 252, 'SO', 'Somalia', 0, '10', '49', NULL, NULL),
(209, 27, 'ZA', 'South Africa', 0, '-29', '24', NULL, NULL),
(210, 500, 'GS', 'South Georgia and the South Sandwich Islands', 0, '-54.5', '-37', NULL, NULL),
(211, 211, 'SS', 'South Sudan', 0, NULL, NULL, NULL, NULL),
(212, 34, 'ES', 'Spain', 0, '40', '-4', NULL, NULL),
(213, 94, 'LK', 'Sri Lanka', 0, '7', '81', NULL, NULL),
(214, 249, 'SD', 'Sudan', 0, '15', '30', NULL, NULL),
(215, 597, 'SR', 'Suriname', 0, '4', '-56', NULL, NULL),
(216, 47, 'SJ', 'Svalbard and Jan Mayen', 0, '78', '20', NULL, NULL),
(217, 268, 'SZ', 'Swaziland', 0, '-26.5', '31.5', NULL, NULL),
(218, 46, 'SE', 'Sweden', 0, '62', '15', NULL, NULL),
(219, 41, 'CH', 'Switzerland', 0, '47', '8', NULL, NULL),
(220, 963, 'SY', 'Syrian Arab Republic', 0, '35', '38', NULL, NULL),
(221, 886, 'TW', 'Taiwan, Province of China', 0, '23.5', '121', NULL, NULL),
(222, 992, 'TJ', 'Tajikistan', 0, '39', '71', NULL, NULL),
(223, 255, 'TZ', 'Tanzania, United Republic of', 0, '-6', '35', NULL, NULL),
(224, 66, 'TH', 'Thailand', 0, '15', '100', NULL, NULL),
(225, 670, 'TL', 'Timor-Leste', 0, NULL, NULL, NULL, NULL),
(226, 228, 'TG', 'Togo', 0, '8', '1.17', NULL, NULL),
(227, 690, 'TK', 'Tokelau', 0, '-9', '-172', NULL, NULL),
(228, 676, 'TO', 'Tonga', 0, '-20', '-175', NULL, NULL),
(229, 1868, 'TT', 'Trinidad and Tobago', 0, '11', '-61', NULL, NULL),
(230, 216, 'TN', 'Tunisia', 0, '34', '9', NULL, NULL),
(231, 90, 'TR', 'Turkey', 0, '39', '35', NULL, NULL),
(232, 7370, 'TM', 'Turkmenistan', 0, '40', '60', NULL, NULL),
(233, 1649, 'TC', 'Turks and Caicos Islands', 0, '21.75', '-71.58', NULL, NULL),
(234, 688, 'TV', 'Tuvalu', 0, '-8', '178', NULL, NULL),
(235, 256, 'UG', 'Uganda', 0, '1', '32', NULL, NULL),
(236, 380, 'UA', 'Ukraine', 0, '49', '32', NULL, NULL),
(237, 971, 'AE', 'United Arab Emirates', 0, '24', '54', NULL, NULL),
(238, 44, 'GB', 'United Kingdom', 0, '54', '-2', NULL, NULL),
(239, 1, 'US', 'United States', 0, '38', '-97', NULL, NULL),
(240, 1, 'UM', 'United States Minor Outlying Islands', 0, '19.28', '166.6', NULL, NULL),
(241, 598, 'UY', 'Uruguay', 0, '-33', '-56', NULL, NULL),
(242, 998, 'UZ', 'Uzbekistan', 0, '41', '64', NULL, NULL),
(243, 678, 'VU', 'Vanuatu', 0, '-16', '167', NULL, NULL),
(244, 58, 'VE', 'Venezuela', 0, '8', '-66', NULL, NULL),
(245, 84, 'VN', 'Viet Nam', 0, '16', '106', NULL, NULL),
(246, 1284, 'VG', 'Virgin Islands, British', 0, '18.5', '-64.5', NULL, NULL),
(247, 1340, 'VI', 'Virgin Islands, U.s.', 0, '18.33', '-64.83', NULL, NULL),
(248, 681, 'WF', 'Wallis and Futuna', 0, '-13.3', '-176.2', NULL, NULL),
(249, 212, 'EH', 'Western Sahara', 0, '24.5', '-13', NULL, NULL),
(250, 967, 'YE', 'Yemen', 0, '15', '48', NULL, NULL),
(251, 260, 'ZM', 'Zambia', 0, '-15', '30', NULL, NULL),
(252, 263, 'ZW', 'Zimbabwe', 0, '-20', '30', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_01_11_165832_create_tanaman_table', 1),
(6, '2022_01_11_165838_create_pengajuan_table', 1),
(7, '2022_01_12_080857_create_sub_pengajuan_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `for` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan`
--

CREATE TABLE `pengajuan` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `pengajuan_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `negara_tujuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_penerima` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_penerima` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notelp_penerima` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_penerima` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_resi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_resi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_lisensi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `no_sip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_pyhto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_pyhto` date DEFAULT NULL,
  `invoice_usd` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_tanaman` int DEFAULT NULL,
  `terealisasi` int DEFAULT NULL,
  `ongkir` int DEFAULT NULL,
  `biaya_karantina` int DEFAULT NULL,
  `status_ongkir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `courier` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `airplane` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int NOT NULL DEFAULT '0' COMMENT '-1 = Declined ,0 = menunggu approval, 1 = menunggu pembayaran, 2 = verifikasi teknis, 3 = persetujuan dirjen, 4 = masa inkubasi, 5 = mendapat resi, 6 = tahap ekspor, 7 = selesai',
  `payment_status` enum('1','2','3','4') COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '1 = menunggu pembayaran, 2 = sudah dibayar, 3 = kadaluarsa, 4 = gagal / batal',
  `jumlah_pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_status_message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_time` timestamp NULL DEFAULT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `approval_code_payment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `snap_token` varchar(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `snap_token_tambahan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengajuan`
--

INSERT INTO `pengajuan` (`id`, `user_id`, `pengajuan_id`, `negara_tujuan`, `nama_penerima`, `alamat_penerima`, `notelp_penerima`, `email_penerima`, `no_resi`, `file_resi`, `file_lisensi`, `no_sip`, `no_pyhto`, `date_pyhto`, `invoice_usd`, `total_tanaman`, `terealisasi`, `ongkir`, `biaya_karantina`, `status_ongkir`, `courier`, `airplane`, `date`, `status`, `payment_status`, `jumlah_pembayaran`, `transaction_id`, `payment_status_message`, `transaction_time`, `payment_type`, `approval_code_payment`, `snap_token`, `snap_token_tambahan`, `keterangan`, `created_at`, `updated_at`) VALUES
(37, 39, '37/PA/SPm/P1/II/2022', 'Aland Islands', 'Test', 'TokyoKondi Island', '089667773456', 'test@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-05', 3, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-05 12:47:10', '2022-02-06 02:28:51');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pricing`
--

CREATE TABLE `pricing` (
  `id` int NOT NULL,
  `count` int NOT NULL,
  `value` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pricing`
--

INSERT INTO `pricing` (`id`, `count`, `value`) VALUES
(1, 1, '50000'),
(2, 50, '45000');

-- --------------------------------------------------------

--
-- Table structure for table `pricing_bak`
--

CREATE TABLE `pricing_bak` (
  `id` int NOT NULL,
  `count` int NOT NULL,
  `value` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pricing_bak`
--

INSERT INTO `pricing_bak` (`id`, `count`, `value`) VALUES
(1, 12, '12'),
(2, 50, '50');

-- --------------------------------------------------------

--
-- Table structure for table `sub_pengajuan`
--

CREATE TABLE `sub_pengajuan` (
  `id` bigint UNSIGNED NOT NULL,
  `pengajuan_id` bigint UNSIGNED NOT NULL,
  `tanaman_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `varietas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_pengajuan`
--

INSERT INTO `sub_pengajuan` (`id`, `pengajuan_id`, `tanaman_id`, `user_id`, `varietas`, `jumlah`, `created_at`, `updated_at`) VALUES
(1, 37, 245, 39, 'ds', 1, '2022-02-05 05:47:10', '2022-02-05 05:47:10');

-- --------------------------------------------------------

--
-- Table structure for table `tanaman`
--

CREATE TABLE `tanaman` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_indonesia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_latin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `price` float NOT NULL DEFAULT '150000',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tanaman`
--

INSERT INTO `tanaman` (`id`, `nama_indonesia`, `name_latin`, `confirmed`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Aeradachnis', 'Aeridachnis spp', 1, 150000, '2022-01-10 06:03:09', NULL),
(2, 'Akalipa', 'Acalypha spp', 1, 150000, '2022-01-10 06:03:09', NULL),
(3, 'Agave', 'Agave spp', 1, 150000, '2022-01-10 06:03:09', NULL),
(4, 'Alamanda', 'Allamanda spp', 1, 150000, '2022-01-10 06:03:09', NULL),
(5, 'Alpinia', 'Alpinia spp', 1, 150000, '2022-01-10 06:03:09', NULL),
(6, 'Alstromeria', 'Alstroemeria spp', 1, 150000, '2022-01-10 06:03:09', NULL),
(7, 'Anggrek', 'Orchidaceae', 1, 150000, '2022-01-10 06:03:09', NULL),
(8, 'Anyelir', 'Dianthus spp', 1, 150000, '2022-01-10 06:03:09', NULL),
(9, 'Sri Rejeki', 'Aglaonema spp', 1, 150000, '2022-01-10 06:03:09', NULL),
(10, 'Amarantus', 'Amaranthus spp', 1, 150000, '2022-01-10 06:03:09', NULL),
(11, 'Ascocenda', 'Ascocenda spp', 1, 150000, '2022-01-10 06:03:09', NULL),
(12, 'Bahagia', 'Dieffenbachia spp', 1, 150000, '2022-01-10 06:03:09', NULL),
(13, 'Bambu hias', 'Chamaedorea spp', 1, 150000, '2022-01-10 06:03:09', NULL),
(14, 'Bambu kuning', 'Phyllostachys aurea', 1, 150000, '2022-01-10 06:03:09', NULL),
(15, 'Beringin', 'Ficus spp', 1, 150000, '2022-01-10 06:03:09', NULL),
(16, 'Amarilis', 'Amaryllis spp', 1, 150000, '2022-01-10 06:03:09', NULL),
(17, 'Banga bokor', 'Hydrangea sp  ', 1, 150000, '2022-01-10 06:03:09', NULL),
(18, 'Bunga kertas', 'Bougainvillea spp', 1, 150000, '2022-01-10 06:03:09', NULL),
(19, 'Bunga matahari', 'Helianthus annuus', 1, 150000, '2022-01-10 06:03:09', NULL),
(20, 'Bunga pisang', 'Musa uranoscopus', 1, 150000, '2022-01-10 06:03:09', NULL),
(21, 'Melati air', 'Echinodorus sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(22, 'Bunga pukul empat', 'Mirabilis jalapa', 1, 150000, '2022-01-10 06:03:09', NULL),
(23, 'Bunga tasbih', 'Canna sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(24, 'Calistemon', 'Callistemon spp', 1, 150000, '2022-01-10 06:03:09', NULL),
(25, 'Bambu air/ lidi air', 'Equisetum hyemale', 1, 150000, '2022-01-10 06:03:09', NULL),
(26, 'Celosia', 'Celosia spp', 1, 150000, '2022-01-10 06:03:09', NULL),
(27, 'Bakung rimba', 'Hanguana malayana', 1, 150000, '2022-01-10 06:03:09', NULL),
(28, 'Cemara irian', 'Cupressus spp', 1, 150000, '2022-01-10 06:03:09', NULL),
(29, 'Limut', 'Hydrilla verticillata', 1, 150000, '2022-01-10 06:03:09', NULL),
(30, 'Cemara laut', 'Casuarina spp', 1, 150000, '2022-01-10 06:03:09', NULL),
(31, 'Cemara susun', 'Araucaria spp', 1, 150000, '2022-01-10 06:03:09', NULL),
(32, 'Ciplukan', 'Physalis peruviana', 1, 150000, '2022-01-10 06:03:09', NULL),
(33, 'Crosandra', 'Crossandra spp', 1, 150000, '2022-01-10 06:03:09', NULL),
(34, 'Kaktus', 'Cactaceae', 1, 150000, '2022-01-10 06:03:09', NULL),
(35, 'Iris air', 'Iris versicolor', 1, 150000, '2022-01-10 06:03:09', NULL),
(36, 'Lotus/ seroja', 'Nelumbo nucifera', 1, 150000, '2022-01-10 06:03:09', NULL),
(37, 'Cyperus', 'Cyperus spp', 1, 150000, '2022-01-10 06:03:09', NULL),
(38, 'Cocor bebek', 'Kalanchoe spp', 1, 150000, '2022-01-10 06:03:09', NULL),
(39, 'Hanjuang/Andong', 'Cordyline spp', 1, 150000, '2022-01-10 06:03:09', NULL),
(40, 'Daun beludru', 'Episcia spp', 1, 150000, '2022-01-10 06:03:09', NULL),
(41, 'Parrotfeather', 'Myriophyllum aquaticum', 1, 150000, '2022-01-10 06:03:09', NULL),
(42, 'Sirih Gading', 'Philodendron spp', 1, 150000, '2022-01-10 06:03:09', NULL),
(43, 'Pisang brazil', 'Typhonodorum lindZeyanum', 1, 150000, '2022-01-10 06:03:09', NULL),
(44, 'Dracaena', 'Dracaena spp', 1, 150000, '2022-01-10 06:03:09', NULL),
(45, 'Tape grass', 'Vallisneria spiralis', 1, 150000, '2022-01-10 06:03:09', NULL),
(46, 'Fitonia', 'Fittonia spp', 1, 150000, '2022-01-10 06:03:09', NULL),
(47, 'Bunga Lipstik', 'Aeschynanthus Radicans Jack', 1, 150000, '2022-01-10 06:03:09', NULL),
(48, 'Gipsophila', 'Gypsophila spp', 1, 150000, '2022-01-10 06:03:09', NULL),
(49, 'Air Mata Pengantin', 'Antigonon Leptopus Hook. & Arne', 1, 150000, '2022-01-10 06:03:09', NULL),
(50, 'Gladiol', 'Gladiolus spp', 1, 150000, '2022-01-10 06:03:09', NULL),
(51, 'Hoya', 'Hoya spp', 1, 150000, '2022-01-10 06:03:09', NULL),
(52, 'Asparagus Sangga Langit', 'Asparagus Setaceus (Kunth) Jessop', 1, 150000, '2022-01-10 06:03:09', NULL),
(53, 'Herbras', 'Gerbera spp', 1, 150000, '2022-01-10 06:03:09', NULL),
(54, 'Kongea', 'Congea Tomentosa Roxb.', 1, 150000, '2022-01-10 06:03:09', NULL),
(55, 'Bunga Wijayakusuma', 'Ephipillum Anguliger (Lem.) G. Don', 1, 150000, '2022-01-10 06:03:09', NULL),
(56, 'Dollar-dollaran', 'Ficus Repens Roxb. Ex Sm.', 1, 150000, '2022-01-10 06:03:09', NULL),
(57, 'Ranggis', 'Lonicera Japonica', 1, 150000, '2022-01-10 06:03:09', NULL),
(58, 'Bunga Terompet', 'Mandevilla Sanderi sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(59, 'Stephanut Ungu', 'Mansoa Hymenaea', 1, 150000, '2022-01-10 06:03:09', NULL),
(60, 'Ivy', 'Hedera helix', 1, 150000, '2022-01-10 06:03:09', NULL),
(61, 'Janggut musa', 'Cissus discolor', 1, 150000, '2022-01-10 06:03:09', NULL),
(62, 'Jawer kotok', 'Coleus scutellarioides', 1, 150000, '2022-01-10 06:03:09', NULL),
(63, 'Kala lili', 'Zanthedeschicia spp ', 1, 150000, '2022-01-10 06:03:09', NULL),
(64, 'Kamboja jepang', 'Adenium spp', 1, 150000, '2022-01-10 06:03:09', NULL),
(65, 'Pandorea', 'Pandorea Jasminoides', 1, 150000, '2022-01-10 06:03:09', NULL),
(66, 'Kastuba', 'Euphorbia pulcherima', 1, 150000, '2022-01-10 06:03:09', NULL),
(67, 'Passiflora', 'Passiflora sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(68, 'Kembang Api', 'Pyrostegia Venusta', 1, 150000, '2022-01-10 06:03:09', NULL),
(69, 'Udani, Bidani, Ceguk', 'Quisqualis Indica L', 1, 150000, '2022-01-10 06:03:09', NULL),
(70, 'Kuku Macan/Jade Flower', 'Strongyłodon Macrobotrys', 1, 150000, '2022-01-10 06:03:09', NULL),
(71, 'Tillandsia', 'Tillandsia sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(72, 'Kecombrang', 'Zingiber officinela', 1, 150000, '2022-01-10 06:03:09', NULL),
(73, 'Tanaman Jade', 'Crassula sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(74, 'Kedondong laup', 'Nothopanax fruticosum', 1, 150000, '2022-01-10 06:03:09', NULL),
(75, 'Sukulen', 'Echeveria sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(76, 'Bunga kancing', 'Gomphrena globosa', 1, 150000, '2022-01-10 06:03:09', NULL),
(77, 'Mahkota duri', 'Euphorbia milii', 1, 150000, '2022-01-10 06:03:09', NULL),
(78, 'Haworthia', 'Haworthia sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(79, 'Bunga nona makan sirih', 'Clerodendron spp', 1, 150000, '2022-01-10 06:03:09', NULL),
(80, 'Portulacaria', 'Portulacaria sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(81, 'Kembang sepatu', 'Hibiscus spp', 1, 150000, '2022-01-10 06:03:09', NULL),
(82, 'Tradescantia', 'Tradescantia sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(83, 'Kembang sungsang', 'Gloriosa superba L.', 1, 150000, '2022-01-10 06:03:09', NULL),
(84, 'Kembang telang', 'Clitoria ternatea L.', 1, 150000, '2022-01-10 06:03:09', NULL),
(85, 'Tem belekan / Marigold', 'Tagetes spp ', 1, 150000, '2022-01-10 06:03:09', NULL),
(86, 'Kolojengking', 'Aranthera spp', 1, 150000, '2022-01-10 06:03:09', NULL),
(87, 'Kuping gajah', 'Anthurium spp', 1, 150000, '2022-01-10 06:03:09', NULL),
(88, 'Lantana', 'Lantana camara', 1, 150000, '2022-01-10 06:03:09', NULL),
(89, 'Tanaman Zebra', 'Aphelandra Squarrosa', 1, 150000, '2022-01-10 06:03:09', NULL),
(90, 'Lilin emas', 'Pachystachys lutea', 1, 150000, '2022-01-10 06:03:09', NULL),
(91, 'Calatea', 'Calathea sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(92, 'Mawar', 'Rosa spp', 1, 150000, '2022-01-10 06:03:09', NULL),
(93, 'Puring', 'Codiaeum Variegatum', 1, 150000, '2022-01-10 06:03:09', NULL),
(94, 'Melati', 'Jasminum spp', 1, 150000, '2022-01-10 06:03:09', NULL),
(95, 'Sambang Darah', 'Exocaria Cochinencis', 1, 150000, '2022-01-10 06:03:09', NULL),
(96, 'Anting-anting', 'Fuchsia speciosa', 1, 150000, '2022-01-10 06:03:09', NULL),
(97, 'Leather leaf', 'Leather leaf', 1, 150000, '2022-01-10 06:03:09', NULL),
(98, 'Lomandra', 'Lomandra sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(99, 'Aralia Kuning', 'Osmoxilon Liniare', 1, 150000, '2022-01-10 06:03:09', NULL),
(100, 'Mirten', 'Malphigia spp', 1, 150000, '2022-01-10 06:03:09', NULL),
(101, 'Pachira (pohon uang)', 'Pachira aquatica', 1, 150000, '2022-01-10 06:03:09', NULL),
(102, 'Patah Tulang', 'Pedilanthus Tithymaloides', 1, 150000, '2022-01-10 06:03:09', NULL),
(103, 'Monstera', 'Monstera spp', 1, 150000, '2022-01-10 06:03:09', NULL),
(104, 'Pilea', 'Pilea peperomioides', 1, 150000, '2022-01-10 06:03:09', NULL),
(105, 'Nanas-nanasan', 'Bromelia spp.', 1, 150000, '2022-01-10 06:03:09', NULL),
(106, 'Pulmonaria', 'Pulmonaria sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(107, 'Oxalys', 'Oxalis spp', 1, 150000, '2022-01-10 06:03:09', NULL),
(108, 'Kamboja', 'Plumeria spp', 1, 150000, '2022-01-10 06:03:09', NULL),
(109, 'Pacar air', 'Impatiens spp', 1, 150000, '2022-01-10 06:03:09', NULL),
(110, 'Glodokan Tiang', 'Polyalthia longifolia', 1, 150000, '2022-01-10 06:03:09', NULL),
(111, 'Pacing', 'Costus spp', 1, 150000, '2022-01-10 06:03:09', NULL),
(112, 'Air mancur', 'Russelia equisetifonnis', 1, 150000, '2022-01-10 06:03:09', NULL),
(113, 'Pakis haji', 'Cycas revoluta', 1, 150000, '2022-01-10 06:03:09', NULL),
(114, 'Paku-pakuan', 'Nephrolepis spp', 1, 150000, '2022-01-10 06:03:09', NULL),
(115, 'Palm j epang', 'Ptychosperrna macarthurii', 1, 150000, '2022-01-10 06:03:09', NULL),
(116, 'Palm kuning', 'Chrysalidocarpus lutescens', 1, 150000, '2022-01-10 06:03:09', NULL),
(117, 'Palm merah', 'Cyrtostachys lakka', 1, 150000, '2022-01-10 06:03:09', NULL),
(118, 'Sage', 'Salvia Officinałis', 1, 150000, '2022-01-10 06:03:09', NULL),
(119, 'Walisongo', 'Schefflera Arboricola', 1, 150000, '2022-01-10 06:03:09', NULL),
(120, 'Pucuk Merah', 'Syzygium oleana', 1, 150000, '2022-01-10 06:03:09', NULL),
(121, 'Tabebuya', 'Tabebuia spp', 1, 150000, '2022-01-10 06:03:09', NULL),
(122, 'Taberna', 'Tabemaemontana Corimbosa', 1, 150000, '2022-01-10 06:03:09', NULL),
(123, 'Anting Putri Kuning', 'Wrightia Religiosa', 1, 150000, '2022-01-10 06:03:09', NULL),
(124, 'Tumbak Raja', 'Yucca sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(125, 'Zamia', 'Zamia Furfuraceae', 1, 150000, '2022-01-10 06:03:09', NULL),
(126, 'Mukgenia', 'Mukgenia sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(127, 'Palm waregu', 'Rhapis excelsa', 1, 150000, '2022-01-10 06:03:09', NULL),
(128, 'Echinacea', 'Echinacea', 1, 150000, '2022-01-10 06:03:09', NULL),
(129, 'Pandan kuning', 'Pandanus pygmaeus', 1, 150000, '2022-01-10 06:03:09', NULL),
(130, 'Agaphantus', 'Agapanthus sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(131, 'Pentas', 'Pentas lanceolata', 1, 150000, '2022-01-10 06:03:09', NULL),
(132, 'Ctenanthe', 'Ctenanthe sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(133, 'Peperomia', 'Peperomia spp', 1, 150000, '2022-01-10 06:03:09', NULL),
(134, 'Tacca', 'Tacca sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(135, 'Petrea', 'Petrea spp', 1, 150000, '2022-01-10 06:03:09', NULL),
(136, 'Aridarum', 'Aridarum sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(137, 'Pinus', 'Pinus merkusii', 1, 150000, '2022-01-10 06:03:09', NULL),
(138, 'Otellia', 'Ottelia sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(139, 'Burung Surga', 'Sterilitza spp', 1, 150000, '2022-01-10 06:03:09', NULL),
(140, 'Eriocaulon', 'Eriocaulon sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(141, 'Pisang-pisangan', 'Heliconia spp', 1, 150000, '2022-01-10 06:03:09', NULL),
(142, 'Pisang hias', 'Ravenala madagascariensis', 1, 150000, '2022-01-10 06:03:09', NULL),
(143, 'Pohon dollar', 'Eucalyptus gunnii', 1, 150000, '2022-01-10 06:03:09', NULL),
(144, 'Ponix', 'Phoenix roebelenii', 1, 150000, '2022-01-10 06:03:09', NULL),
(145, 'Pteris', 'Pteris spp', 1, 150000, '2022-01-10 06:03:09', NULL),
(146, 'Rushes', 'Juncus sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(147, 'Pakis-pakisan', 'Polypodiaceae', 1, 150000, '2022-01-10 06:03:09', NULL),
(148, 'Cryptocoryne', 'Cryptocoryne sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(149, 'Pedang-pedangan', 'Sansevieria spp', 1, 150000, '2022-01-10 06:03:09', NULL),
(150, 'Homalomena', 'Homalomena sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(151, 'Pule pandak', 'Plumbago spp', 1, 150000, '2022-01-10 06:03:09', NULL),
(152, 'Sonerilla', 'Sonerila sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(153, 'Polyscias', 'Polyscias spp  ', 1, 150000, '2022-01-10 06:03:09', NULL),
(154, 'Senggani', 'Melastoma sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(155, 'Rose bombay', 'Portulaca grandifiora', 1, 150000, '2022-01-10 06:03:09', NULL),
(156, 'Gardenia', 'Gardenia sp  ', 1, 150000, '2022-01-10 06:03:09', NULL),
(157, 'Murdania', 'Murdannia sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(158, 'Rumput embun', 'Polytrias amaura Hacky', 1, 150000, '2022-01-10 06:03:09', NULL),
(159, 'Flamboyan', 'Delonix sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(160, 'Rumput golf', 'Poa pratensis', 1, 150000, '2022-01-10 06:03:09', NULL),
(161, 'Rumput bermuda', 'Panicum dactylon', 1, 150000, '2022-01-10 06:03:09', NULL),
(162, 'Bauhinia', 'Bauhinia sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(163, 'Hosta', 'Hosta sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(164, 'Rumput Hutan Jepang', 'Hakonechloa sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(165, 'Mischanthus', 'Mischanthus sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(166, 'Arecaceae', 'Arecaceae', 1, 150000, '2022-01-10 06:03:09', NULL),
(167, 'Sage merah', 'Salvia splendens', 1, 150000, '2022-01-10 06:03:09', NULL),
(168, 'Violet bertanduk', 'Viola cornuta', 1, 150000, '2022-01-10 06:03:09', NULL),
(169, 'Petunia', 'Petunia sp.', 1, 150000, '2022-01-10 06:03:09', NULL),
(170, 'Rumput jarum', 'Andropogon aciculatus Retz', 1, 150000, '2022-01-10 06:03:09', NULL),
(171, 'Pansy', 'Viola wittrockiana', 1, 150000, '2022-01-10 06:03:09', NULL),
(172, 'Snappy', 'Antirrhinum snappy', 1, 150000, '2022-01-10 06:03:09', NULL),
(173, 'Rumput manila', 'Zoysia matrella Merr.', 1, 150000, '2022-01-10 06:03:09', NULL),
(174, 'Floss flower', 'Ageratum houstonianum', 1, 150000, '2022-01-10 06:03:09', NULL),
(175, 'Rumput paitan', 'Axonopus commpressus', 1, 150000, '2022-01-10 06:03:09', NULL),
(176, 'Bakung biru', 'Agapanthus sp.', 1, 150000, '2022-01-10 06:03:09', NULL),
(177, 'Rumput peking', 'Agrostis canina', 1, 150000, '2022-01-10 06:03:09', NULL),
(178, 'Mata boneka', 'Actaea', 1, 150000, '2022-01-10 06:03:09', NULL),
(179, 'Scindapsus', 'Scindapsus spp', 1, 150000, '2022-01-10 06:03:09', NULL),
(180, 'Aralia', 'Aralia sp.', 1, 150000, '2022-01-10 06:03:09', NULL),
(181, 'Sirih-sirihan', 'Syngonium spp', 1, 150000, '2022-01-10 06:03:09', NULL),
(182, 'Aster', 'Aster sp.', 1, 150000, '2022-01-10 06:03:09', NULL),
(183, 'Sedap malam', 'Polianthes tuberosa', 1, 150000, '2022-01-10 06:03:09', NULL),
(184, 'Bergenia', 'Bergenia sp.', 1, 150000, '2022-01-10 06:03:09', NULL),
(185, 'Bellflower', 'Campanula sp.', 1, 150000, '2022-01-10 06:03:09', NULL),
(186, 'Krisan / Seruni', 'Chrysanthemum spp', 1, 150000, '2022-01-10 06:03:09', NULL),
(187, 'Sedges', 'Carex sp.', 1, 150000, '2022-01-10 06:03:09', NULL),
(188, 'Soka', 'Ixora spp', 1, 150000, '2022-01-10 06:03:09', NULL),
(189, 'Corydalis', 'Corydalis sp.', 1, 150000, '2022-01-10 06:03:09', NULL),
(190, 'Solidago', 'Solidago spp', 1, 150000, '2022-01-10 06:03:09', NULL),
(191, 'Crocosmia', 'Crocosmia sp.', 1, 150000, '2022-01-10 06:03:09', NULL),
(192, 'Spathipyllum', 'Spathiphyllum spp', 1, 150000, '2022-01-10 06:03:09', NULL),
(193, 'Bleeding heart', 'Dicentra sp.', 1, 150000, '2022-01-10 06:03:09', NULL),
(194, 'Eryngium', 'Eryngium sp.', 1, 150000, '2022-01-10 06:03:09', NULL),
(195, 'Melati Madagaskar', 'Stephanotis spp', 1, 150000, '2022-01-10 06:03:09', NULL),
(196, 'Suplir', 'Adiantum spp', 1, 150000, '2022-01-10 06:03:09', NULL),
(197, 'Teratai', 'Nymphaea lotus', 1, 150000, '2022-01-10 06:03:09', NULL),
(198, 'Fatsia', 'Fatsia sp.', 1, 150000, '2022-01-10 06:03:09', NULL),
(199, 'Talas-talasan', 'Alocasia spp', 1, 150000, '2022-01-10 06:03:09', NULL),
(200, 'Typa', 'Typha spp', 1, 150000, '2022-01-10 06:03:09', NULL),
(201, 'Verbena', 'Verbena tenera', 1, 150000, '2022-01-10 06:03:09', NULL),
(202, 'Jacobinia', 'Jacobinia spp', 1, 150000, '2022-01-10 06:03:09', NULL),
(203, 'Gaillardia', 'Gaillardia sp.', 1, 150000, '2022-01-10 06:03:09', NULL),
(204, 'Anigozanthos', 'Anigozanthos flavidus', 1, 150000, '2022-01-10 06:03:09', NULL),
(205, 'Geranium', 'Geranium sp.', 1, 150000, '2022-01-10 06:03:09', NULL),
(206, 'Kamelia', 'Camellia japonica L.', 1, 150000, '2022-01-10 06:03:09', NULL),
(207, 'Avens', 'Geum sp.', 1, 150000, '2022-01-10 06:03:09', NULL),
(208, 'Bunga pagoda', 'Clerodendnurn paniculatum', 1, 150000, '2022-01-10 06:03:09', NULL),
(209, 'Heucherella', 'Heucherella sp.', 1, 150000, '2022-01-10 06:03:09', NULL),
(210, 'Heuchera', 'Heuchera sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(211, 'Poker panas', 'Kniphofia sp.', 1, 150000, '2022-01-10 06:03:09', NULL),
(212, 'Hemerocallis (Daylili)', 'Hemerocallis sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(213, 'Aster Leucanthemum', 'Leucanthemum sp.', 1, 150000, '2022-01-10 06:03:09', NULL),
(214, 'Bunga udang', 'Justicia brandegeana', 1, 150000, '2022-01-10 06:03:09', NULL),
(215, 'Persicaria', 'Persicaria sp.', 1, 150000, '2022-01-10 06:03:09', NULL),
(216, 'Bunga Lily', 'Lilium sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(217, 'Nusa indah', 'Mussaenda phylippica', 1, 150000, '2022-01-10 06:03:09', NULL),
(218, 'Phormium', 'Phormium sp.', 1, 150000, '2022-01-10 06:03:09', NULL),
(219, 'Pulmonaria', 'Pulmonaria sp.', 1, 150000, '2022-01-10 06:03:09', NULL),
(220, 'Bunga oleander', 'Nerium oleander', 1, 150000, '2022-01-10 06:03:09', NULL),
(221, 'Pelargonium', 'Pelargonium sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(222, 'Corimbosa', 'Tabemaemontana corymbosa', 1, 150000, '2022-01-10 06:03:09', NULL),
(223, 'Jasmin star', 'Trachelospermu m jasminoides', 1, 150000, '2022-01-10 06:03:09', NULL),
(224, 'Sambung Colok', 'Aerva Sanguinolenta', 1, 150000, '2022-01-10 06:03:09', NULL),
(225, 'Coneflower', 'Rudbeckia sp.', 1, 150000, '2022-01-10 06:03:09', NULL),
(226, 'Scabiosa', 'Scabiosa sp.', 1, 150000, '2022-01-10 06:03:09', NULL),
(227, 'Thalictrum', 'Thalictrum sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(228, 'Krokot', 'Alternantera Ficoidea', 1, 150000, '2022-01-10 06:03:09', NULL),
(229, 'Begonia', 'Begonia sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(230, 'Brojo lintang', 'Belamcanda chinensis', 1, 150000, '2022-01-10 06:03:09', NULL),
(231, 'Foam flower', 'Tiarella sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(232, 'Brunnera', 'Brunnera sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(233, 'Lily Tricyrtis', 'Tricyrtis sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(234, 'Keladi', 'Caladium spp', 1, 150000, '2022-01-10 06:03:09', NULL),
(235, 'Jeruju', 'Acanthus sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(236, 'Tapak darah', 'Catharanthus sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(237, 'Mapel', 'Acer sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(238, 'Palisota', 'Chlorophytum Amaniense', 1, 150000, '2022-01-10 06:03:09', NULL),
(239, 'Actaea', 'Actaea sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(240, 'Cryptantus', 'Cwptantus spp', 1, 150000, '2022-01-10 06:03:09', NULL),
(241, 'Flannel flower', 'Actinotus helianthi', 1, 150000, '2022-01-10 06:03:09', NULL),
(242, 'Lili Brazil', 'Dianella sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(243, 'Aeonium', 'Aeonium sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(244, 'Bakung', 'Hymenocallis Littoralis Variegata', 1, 150000, '2022-01-10 06:03:09', NULL),
(245, 'Aloe hybrid', 'Aloe hybHds', 1, 150000, '2022-01-10 06:03:09', NULL),
(246, 'Ubi Kuning', 'Ipomoea Potato Vine', 1, 150000, '2022-01-10 06:03:09', NULL),
(247, 'Anubias', 'Anubias sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(248, 'Aponogeton', 'Aponogeton sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(249, 'Paris daisy', 'Argyranthemum frutescens', 1, 150000, '2022-01-10 06:03:09', NULL),
(250, 'Kaktus bintang', 'Astrophytum sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(251, 'Bayam-bayaman', 'Iresine Herbstii', 1, 150000, '2022-01-10 06:03:09', NULL),
(252, 'Aztekium', 'Aztekium sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(253, 'Meranti Sepat', 'Marantha Leuconeura', 1, 150000, '2022-01-10 06:03:09', NULL),
(254, 'Calibrachoa', 'Calibrachoa hybrida', 1, 150000, '2022-01-10 06:03:09', NULL),
(255, 'Jeruk Nagami', 'Citrus kumquat', 1, 150000, '2022-01-10 06:03:09', NULL),
(256, 'Cotyledon', 'Cotyledon sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(257, 'Conophytum', 'Conophytum sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(258, 'Kaktus sarang lebah', 'Coryphanta sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(259, 'Copiapoa', 'Copiapoa sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(260, 'Iris', 'Neornarica longifolia', 1, 150000, '2022-01-10 06:03:09', NULL),
(261, 'Kucai Jepang, Kucai Mini, Rumput Mondo', 'Ophiopogon Japonicus Nana', 1, 150000, '2022-01-10 06:03:09', NULL),
(262, 'Adam Hawa', 'Rhoeo Discolor', 1, 150000, '2022-01-10 06:03:09', NULL),
(263, 'Spatipilum', 'Spatiphyllum sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(264, 'Bunga pukul delapan', 'mrnera subulata', 1, 150000, '2022-01-10 06:03:09', NULL),
(265, 'Violces/ Saintpaulia', 'Saintpaulia ionantha', 1, 150000, '2022-01-10 06:03:09', NULL),
(266, 'Cryptocoryne', 'Cryptocoryne sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(267, 'Suruni ambat', 'Wedelia triloba', 1, 150000, '2022-01-10 06:03:09', NULL),
(268, 'Bunga Larkspur', 'Delphinium sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(269, 'Bunga bawang', 'Zephyrantes rosea', 1, 150000, '2022-01-10 06:03:09', NULL),
(270, 'Dietes', 'Dietes sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(271, 'Bacopa', 'Bacopa caroliniana', 1, 150000, '2022-01-10 06:03:09', NULL),
(272, 'Tanaman Buce', 'Bucephalandra sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(273, 'Discocactus', 'Discocactus sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(274, 'Dorstenia', 'Dorstenia sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(275, 'Dudleya', 'Dudleya sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(276, 'Echinocactus', 'Echinocactus sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(277, 'Echinopsis', 'Echinopsis sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(278, 'Button cactus', 'Epithelantha sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(279, 'Tanaman ekor naga', 'Epipremnum pinnatum', 1, 150000, '2022-01-10 06:03:09', NULL),
(280, 'Araucaria', 'Araucaria sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(281, 'Perocactus', 'Ferocactus sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(282, 'Firewheel', 'Gaillardia sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(283, 'Garcinia', 'Garcinia sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(284, 'Gastrolea', 'Gastrolea sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(285, 'Geranium', 'Geranium sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(286, 'Graptoveria', 'Graptovena sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(287, 'Gymnocalycium', 'Gymnocalycium sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(288, 'Tanaman beludru', 'Gynura aurantiaca', 1, 150000, '2022-01-10 06:03:09', NULL),
(289, 'Hamatocactus', 'Hamatocactus sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(290, 'Rumput mutiara', 'Hemianthus micranthemoides', 1, 150000, '2022-01-10 06:03:09', NULL),
(291, 'Brazilian pennywort', 'Hydrocotyle leucocephala', 1, 150000, '2022-01-10 06:03:09', NULL),
(292, 'Lepidosperma', 'Lepidosperma effusum', 1, 150000, '2022-01-10 06:03:09', NULL),
(293, 'Lithops', 'Lithops sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(294, 'Liriope', 'Liriope muscari', 1, 150000, '2022-01-10 06:03:09', NULL),
(295, 'Cardinal flower', 'Lobelia cardinalis', 1, 150000, '2022-01-10 06:03:09', NULL),
(296, 'Lysimachia', 'Lysimachia nummularia', 1, 150000, '2022-01-10 06:03:09', NULL),
(297, 'Macropedia', 'Macropedia fulignosa', 1, 150000, '2022-01-10 06:03:09', NULL),
(298, 'Mammilaria', 'Mammillaria sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(299, 'Medinilla', 'Medinilla sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(300, 'Mimulus', 'Mimulus sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(301, 'Monadenium', 'Monadenium sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(302, 'Yangmei', 'Myrica rubra', 1, 150000, '2022-01-10 06:03:09', NULL),
(303, 'Nandina', 'Nandina domestica', 1, 150000, '2022-01-10 06:03:09', NULL),
(304, 'Notocactus', 'Notocactus sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(305, 'Obregonia', 'Obregonia sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(306, 'Opuntia', 'Opuntia sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(307, 'Ortegocactus', 'Ortegocactus sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(308, 'Osteospermum', 'Osteospermum ecklonis', 1, 150000, '2022-01-10 06:03:09', NULL),
(309, 'Pachypodium', 'Pachypodium sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(310, 'Platycodon', 'Platycodon grandiflorus', 1, 150000, '2022-01-10 06:03:09', NULL),
(311, 'Podocarpus', 'Podocarpus sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(312, 'Pseudolithos', 'Pseudolithos sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(313, 'Rhubarb', 'Rhubarb \'glaskins perpetual\'', 1, 150000, '2022-01-10 06:03:09', NULL),
(314, 'Crystalwort', 'Riccia fluitans', 1, 150000, '2022-01-10 06:03:09', NULL),
(315, 'Rodgersia', 'Rodgersia sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(316, 'Schlumbergera', 'Schlumbergera sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(317, 'Sedum', 'Sedum spp', 1, 150000, '2022-01-10 06:03:09', NULL),
(318, 'Senecio', 'Senecio sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(319, 'Sinningia', 'Sinningia sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(320, 'Anggrek tanah', 'Spathoglottis plicata', 1, 150000, '2022-01-10 06:03:09', NULL),
(321, 'Brain cactus', 'Stenocactus sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(322, 'Sticherus', 'Sticherus flabellatus', 1, 150000, '2022-01-10 06:03:09', NULL),
(323, 'Stromanthe', 'Stromanthe sanguine', 1, 150000, '2022-01-10 06:03:09', NULL),
(324, 'Sulcorebutia', 'Sulcorebutia sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(325, 'Sempervivum', 'Sempervivum sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(326, 'Ketapang kencana', 'Terminalia Mantaly', 1, 150000, '2022-01-10 06:03:09', NULL),
(327, 'Tephrocactus', 'Tephrocactus sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(328, 'Bunga kertas', 'Zinnia elegans', 1, 150000, '2022-01-10 06:03:09', NULL),
(329, 'Anemone', 'Anemone sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(330, 'Fritillaria', 'Fritillaria sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(331, 'Gasteria', 'Gasteria sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(332, 'Rain lily', 'Habranthus sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(333, 'Amarilis', 'Hippeastrum sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(334, 'Limonium', 'Limonium caspea', 1, 150000, '2022-01-10 06:03:09', NULL),
(335, 'Liriope', 'Liriope sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(336, 'Sandersonia', 'Sandersonia aurantiaca', 1, 150000, '2022-01-10 06:03:09', NULL),
(337, 'Statice', 'Statice sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(338, 'Catchfly', 'Silene sp', 1, 150000, '2022-01-10 06:03:09', NULL),
(339, 'Cyclamen', 'Cyclamen spp', 1, 150000, '2022-01-10 06:03:09', NULL),
(340, 'Kerudung pengantin', 'Asparagus asparagoides (smilax)', 1, 150000, '2022-01-10 06:03:09', NULL),
(341, 'Lily Paris', 'Chlorophytum comosum', 1, 150000, '2022-01-10 06:03:09', NULL),
(342, 'Tulip siam', 'Curcuma siam', 1, 150000, '2022-01-10 06:03:09', NULL),
(343, 'Bambu', 'Bambusa balcooa', 1, 150000, '2022-01-10 06:03:09', NULL),
(344, 'Bambu', 'Bambusa chungii barbellata', 1, 150000, '2022-01-10 06:03:09', NULL),
(345, 'B ambu', 'Bambusa eutuldoides viridi vittata', 1, 150000, '2022-01-10 06:03:09', NULL),
(346, 'Bambu', 'Bambusa heterostachya', 1, 150000, '2022-01-10 06:03:09', NULL),
(347, 'Bambu', 'Bambusa lako', 1, 150000, '2022-01-10 06:03:09', NULL),
(348, 'Bambu', 'Bambusa oldhamii', 1, 150000, '2022-01-10 06:03:09', NULL),
(349, 'Bambu', 'Bambusa textilis gracilis', 1, 150000, '2022-01-10 06:03:09', NULL),
(350, 'Bambu', 'Dendrocalamus brandisii', 1, 150000, '2022-01-10 06:03:09', NULL),
(351, 'Bambu', 'Dendrocalamus hamiltonii', 1, 150000, '2022-01-10 06:03:09', NULL),
(352, 'Bambu', 'Dendrocalamus minor amoenus', 1, 150000, '2022-01-10 06:03:09', NULL),
(353, 'Bambu', 'Guadua amplexifolia', 1, 150000, '2022-01-10 06:03:09', NULL),
(354, 'Bambu', 'Guaaua angustifolia', 1, 150000, '2022-01-10 06:03:09', NULL),
(355, 'Bambu', 'Himalayacałamus porcatus   ', 1, 150000, '2022-01-10 06:03:09', NULL),
(356, 'Bambu', 'Oxytenanthera abyssinica', 1, 150000, '2022-01-10 06:03:09', NULL),
(357, 'Bambu', 'Phyllostachys atrovaginata', 1, 150000, '2022-01-10 06:03:09', NULL),
(358, 'Bambu', 'Phyllostachys aureosułcata aureocaulis', 1, 150000, '2022-01-10 06:03:09', NULL),
(359, 'Bambu', 'Phyllostachys nigra', 1, 150000, '2022-01-10 06:03:09', NULL),
(360, 'Bambu', 'Pleioblastus variegatus', 1, 150000, '2022-01-10 06:03:09', NULL),
(361, 'Bambu', 'Semiarundinariafastuosa', 1, 150000, '2022-01-10 06:03:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tanaman_master`
--

CREATE TABLE `tanaman_master` (
  `id` int NOT NULL,
  `nama_indonesia` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_latin` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tanaman_master`
--

INSERT INTO `tanaman_master` (`id`, `nama_indonesia`, `name_latin`, `created_at`, `updated_at`) VALUES
(1, 'Aeradachnis', 'Aeridachnis spp', '2022-01-10 06:03:09', NULL),
(2, 'Akalipa', 'Acalypha spp', '2022-01-10 06:03:09', NULL),
(3, 'Agave', 'Agave spp', '2022-01-10 06:03:09', NULL),
(4, 'Alamanda', 'Allamanda spp', '2022-01-10 06:03:09', NULL),
(5, 'Alpinia', 'Alpinia spp', '2022-01-10 06:03:09', NULL),
(6, 'Alstromeria', 'Alstroemeria spp', '2022-01-10 06:03:09', NULL),
(7, 'Anggrek', 'Orchidaceae', '2022-01-10 06:03:09', NULL),
(8, 'Anyelir', 'Dianthus spp', '2022-01-10 06:03:09', NULL),
(9, 'Sri Rejeki', 'Aglaonema spp', '2022-01-10 06:03:09', NULL),
(10, 'Amarantus', 'Amaranthus spp', '2022-01-10 06:03:09', NULL),
(11, 'Ascocenda', 'Ascocenda spp', '2022-01-10 06:03:09', NULL),
(12, 'Bahagia', 'Dieffenbachia spp', '2022-01-10 06:03:09', NULL),
(13, 'Bambu hias', 'Chamaedorea spp', '2022-01-10 06:03:09', NULL),
(14, 'Bambu kuning', 'Phyllostachys aurea', '2022-01-10 06:03:09', NULL),
(15, 'Beringin', 'Ficus spp', '2022-01-10 06:03:09', NULL),
(16, 'Amarilis', 'Amaryllis spp', '2022-01-10 06:03:09', NULL),
(17, 'Banga bokor', 'Hydrangea sp  ', '2022-01-10 06:03:09', NULL),
(18, 'Bunga kertas', 'Bougainvillea spp', '2022-01-10 06:03:09', NULL),
(19, 'Bunga matahari', 'Helianthus annuus', '2022-01-10 06:03:09', NULL),
(20, 'Bunga pisang', 'Musa uranoscopus', '2022-01-10 06:03:09', NULL),
(21, 'Melati air', 'Echinodorus sp', '2022-01-10 06:03:09', NULL),
(22, 'Bunga pukul empat', 'Mirabilis jalapa', '2022-01-10 06:03:09', NULL),
(23, 'Bunga tasbih', 'Canna sp', '2022-01-10 06:03:09', NULL),
(24, 'Calistemon', 'Callistemon spp', '2022-01-10 06:03:09', NULL),
(25, 'Bambu air/ lidi air', 'Equisetum hyemale', '2022-01-10 06:03:09', NULL),
(26, 'Celosia', 'Celosia spp', '2022-01-10 06:03:09', NULL),
(27, 'Bakung rimba', 'Hanguana malayana', '2022-01-10 06:03:09', NULL),
(28, 'Cemara irian', 'Cupressus spp', '2022-01-10 06:03:09', NULL),
(29, 'Limut', 'Hydrilla verticillata', '2022-01-10 06:03:09', NULL),
(30, 'Cemara laut', 'Casuarina spp', '2022-01-10 06:03:09', NULL),
(31, 'Cemara susun', 'Araucaria spp', '2022-01-10 06:03:09', NULL),
(32, 'Ciplukan', 'Physalis peruviana', '2022-01-10 06:03:09', NULL),
(33, 'Crosandra', 'Crossandra spp', '2022-01-10 06:03:09', NULL),
(34, 'Kaktus', 'Cactaceae', '2022-01-10 06:03:09', NULL),
(35, 'Iris air', 'Iris versicolor', '2022-01-10 06:03:09', NULL),
(36, 'Lotus/ seroja', 'Nelumbo nucifera', '2022-01-10 06:03:09', NULL),
(37, 'Cyperus', 'Cyperus spp', '2022-01-10 06:03:09', NULL),
(38, 'Cocor bebek', 'Kalanchoe spp', '2022-01-10 06:03:09', NULL),
(39, 'Hanjuang/Andong', 'Cordyline spp', '2022-01-10 06:03:09', NULL),
(40, 'Daun beludru', 'Episcia spp', '2022-01-10 06:03:09', NULL),
(41, 'Parrotfeather', 'Myriophyllum aquaticum', '2022-01-10 06:03:09', NULL),
(42, 'Sirih Gading', 'Philodendron spp', '2022-01-10 06:03:09', NULL),
(43, 'Pisang brazil', 'Typhonodorum lindZeyanum', '2022-01-10 06:03:09', NULL),
(44, 'Dracaena', 'Dracaena spp', '2022-01-10 06:03:09', NULL),
(45, 'Tape grass', 'Vallisneria spiralis', '2022-01-10 06:03:09', NULL),
(46, 'Fitonia', 'Fittonia spp', '2022-01-10 06:03:09', NULL),
(47, 'Bunga Lipstik', 'Aeschynanthus Radicans Jack', '2022-01-10 06:03:09', NULL),
(48, 'Gipsophila', 'Gypsophila spp', '2022-01-10 06:03:09', NULL),
(49, 'Air Mata Pengantin', 'Antigonon Leptopus Hook. & Arne', '2022-01-10 06:03:09', NULL),
(50, 'Gladiol', 'Gladiolus spp', '2022-01-10 06:03:09', NULL),
(51, 'Hoya', 'Hoya spp', '2022-01-10 06:03:09', NULL),
(52, 'Asparagus Sangga Langit', 'Asparagus Setaceus (Kunth) Jessop', '2022-01-10 06:03:09', NULL),
(53, 'Herbras', 'Gerbera spp', '2022-01-10 06:03:09', NULL),
(54, 'Kongea', 'Congea Tomentosa Roxb.', '2022-01-10 06:03:09', NULL),
(55, 'Bunga Wijayakusuma', 'Ephipillum Anguliger (Lem.) G. Don', '2022-01-10 06:03:09', NULL),
(56, 'Dollar-dollaran', 'Ficus Repens Roxb. Ex Sm.', '2022-01-10 06:03:09', NULL),
(57, 'Ranggis', 'Lonicera Japonica', '2022-01-10 06:03:09', NULL),
(58, 'Bunga Terompet', 'Mandevilla Sanderi sp', '2022-01-10 06:03:09', NULL),
(59, 'Stephanut Ungu', 'Mansoa Hymenaea', '2022-01-10 06:03:09', NULL),
(60, 'Ivy', 'Hedera helix', '2022-01-10 06:03:09', NULL),
(61, 'Janggut musa', 'Cissus discolor', '2022-01-10 06:03:09', NULL),
(62, 'Jawer kotok', 'Coleus scutellarioides', '2022-01-10 06:03:09', NULL),
(63, 'Kala lili', 'Zanthedeschicia spp ', '2022-01-10 06:03:09', NULL),
(64, 'Kamboja jepang', 'Adenium spp', '2022-01-10 06:03:09', NULL),
(65, 'Pandorea', 'Pandorea Jasminoides', '2022-01-10 06:03:09', NULL),
(66, 'Kastuba', 'Euphorbia pulcherima', '2022-01-10 06:03:09', NULL),
(67, 'Passiflora', 'Passiflora sp', '2022-01-10 06:03:09', NULL),
(68, 'Kembang Api', 'Pyrostegia Venusta', '2022-01-10 06:03:09', NULL),
(69, 'Udani, Bidani, Ceguk', 'Quisqualis Indica L', '2022-01-10 06:03:09', NULL),
(70, 'Kuku Macan/Jade Flower', 'Strongyłodon Macrobotrys', '2022-01-10 06:03:09', NULL),
(71, 'Tillandsia', 'Tillandsia sp', '2022-01-10 06:03:09', NULL),
(72, 'Kecombrang', 'Zingiber officinela', '2022-01-10 06:03:09', NULL),
(73, 'Tanaman Jade', 'Crassula sp', '2022-01-10 06:03:09', NULL),
(74, 'Kedondong laup', 'Nothopanax fruticosum', '2022-01-10 06:03:09', NULL),
(75, 'Sukulen', 'Echeveria sp', '2022-01-10 06:03:09', NULL),
(76, 'Bunga kancing', 'Gomphrena globosa', '2022-01-10 06:03:09', NULL),
(77, 'Mahkota duri', 'Euphorbia milii', '2022-01-10 06:03:09', NULL),
(78, 'Haworthia', 'Haworthia sp', '2022-01-10 06:03:09', NULL),
(79, 'Bunga nona makan sirih', 'Clerodendron spp', '2022-01-10 06:03:09', NULL),
(80, 'Portulacaria', 'Portulacaria sp', '2022-01-10 06:03:09', NULL),
(81, 'Kembang sepatu', 'Hibiscus spp', '2022-01-10 06:03:09', NULL),
(82, 'Tradescantia', 'Tradescantia sp', '2022-01-10 06:03:09', NULL),
(83, 'Kembang sungsang', 'Gloriosa superba L.', '2022-01-10 06:03:09', NULL),
(84, 'Kembang telang', 'Clitoria ternatea L.', '2022-01-10 06:03:09', NULL),
(85, 'Tem belekan / Marigold', 'Tagetes spp ', '2022-01-10 06:03:09', NULL),
(86, 'Kolojengking', 'Aranthera spp', '2022-01-10 06:03:09', NULL),
(87, 'Kuping gajah', 'Anthurium spp', '2022-01-10 06:03:09', NULL),
(88, 'Lantana', 'Lantana camara', '2022-01-10 06:03:09', NULL),
(89, 'Tanaman Zebra', 'Aphelandra Squarrosa', '2022-01-10 06:03:09', NULL),
(90, 'Lilin emas', 'Pachystachys lutea', '2022-01-10 06:03:09', NULL),
(91, 'Calatea', 'Calathea sp', '2022-01-10 06:03:09', NULL),
(92, 'Mawar', 'Rosa spp', '2022-01-10 06:03:09', NULL),
(93, 'Puring', 'Codiaeum Variegatum', '2022-01-10 06:03:09', NULL),
(94, 'Melati', 'Jasminum spp', '2022-01-10 06:03:09', NULL),
(95, 'Sambang Darah', 'Exocaria Cochinencis', '2022-01-10 06:03:09', NULL),
(96, 'Anting-anting', 'Fuchsia speciosa', '2022-01-10 06:03:09', NULL),
(97, 'Leather leaf', 'Leather leaf', '2022-01-10 06:03:09', NULL),
(98, 'Lomandra', 'Lomandra sp', '2022-01-10 06:03:09', NULL),
(99, 'Aralia Kuning', 'Osmoxilon Liniare', '2022-01-10 06:03:09', NULL),
(100, 'Mirten', 'Malphigia spp', '2022-01-10 06:03:09', NULL),
(101, 'Pachira (pohon uang)', 'Pachira aquatica', '2022-01-10 06:03:09', NULL),
(102, 'Patah Tulang', 'Pedilanthus Tithymaloides', '2022-01-10 06:03:09', NULL),
(103, 'Monstera', 'Monstera spp', '2022-01-10 06:03:09', NULL),
(104, 'Pilea', 'Pilea peperomioides', '2022-01-10 06:03:09', NULL),
(105, 'Nanas-nanasan', 'Bromelia spp.', '2022-01-10 06:03:09', NULL),
(106, 'Pulmonaria', 'Pulmonaria sp', '2022-01-10 06:03:09', NULL),
(107, 'Oxalys', 'Oxalis spp', '2022-01-10 06:03:09', NULL),
(108, 'Kamboja', 'Plumeria spp', '2022-01-10 06:03:09', NULL),
(109, 'Pacar air', 'Impatiens spp', '2022-01-10 06:03:09', NULL),
(110, 'Glodokan Tiang', 'Polyalthia longifolia', '2022-01-10 06:03:09', NULL),
(111, 'Pacing', 'Costus spp', '2022-01-10 06:03:09', NULL),
(112, 'Air mancur', 'Russelia equisetifonnis', '2022-01-10 06:03:09', NULL),
(113, 'Pakis haji', 'Cycas revoluta', '2022-01-10 06:03:09', NULL),
(114, 'Paku-pakuan', 'Nephrolepis spp', '2022-01-10 06:03:09', NULL),
(115, 'Palm j epang', 'Ptychosperrna macarthurii', '2022-01-10 06:03:09', NULL),
(116, 'Palm kuning', 'Chrysalidocarpus lutescens', '2022-01-10 06:03:09', NULL),
(117, 'Palm merah', 'Cyrtostachys lakka', '2022-01-10 06:03:09', NULL),
(118, 'Sage', 'Salvia Officinałis', '2022-01-10 06:03:09', NULL),
(119, 'Walisongo', 'Schefflera Arboricola', '2022-01-10 06:03:09', NULL),
(120, 'Pucuk Merah', 'Syzygium oleana', '2022-01-10 06:03:09', NULL),
(121, 'Tabebuya', 'Tabebuia spp', '2022-01-10 06:03:09', NULL),
(122, 'Taberna', 'Tabemaemontana Corimbosa', '2022-01-10 06:03:09', NULL),
(123, 'Anting Putri Kuning', 'Wrightia Religiosa', '2022-01-10 06:03:09', NULL),
(124, 'Tumbak Raja', 'Yucca sp', '2022-01-10 06:03:09', NULL),
(125, 'Zamia', 'Zamia Furfuraceae', '2022-01-10 06:03:09', NULL),
(126, 'Mukgenia', 'Mukgenia sp', '2022-01-10 06:03:09', NULL),
(127, 'Palm waregu', 'Rhapis excelsa', '2022-01-10 06:03:09', NULL),
(128, 'Echinacea', 'Echinacea', '2022-01-10 06:03:09', NULL),
(129, 'Pandan kuning', 'Pandanus pygmaeus', '2022-01-10 06:03:09', NULL),
(130, 'Agaphantus', 'Agapanthus sp', '2022-01-10 06:03:09', NULL),
(131, 'Pentas', 'Pentas lanceolata', '2022-01-10 06:03:09', NULL),
(132, 'Ctenanthe', 'Ctenanthe sp', '2022-01-10 06:03:09', NULL),
(133, 'Peperomia', 'Peperomia spp', '2022-01-10 06:03:09', NULL),
(134, 'Tacca', 'Tacca sp', '2022-01-10 06:03:09', NULL),
(135, 'Petrea', 'Petrea spp', '2022-01-10 06:03:09', NULL),
(136, 'Aridarum', 'Aridarum sp', '2022-01-10 06:03:09', NULL),
(137, 'Pinus', 'Pinus merkusii', '2022-01-10 06:03:09', NULL),
(138, 'Otellia', 'Ottelia sp', '2022-01-10 06:03:09', NULL),
(139, 'Burung Surga', 'Sterilitza spp', '2022-01-10 06:03:09', NULL),
(140, 'Eriocaulon', 'Eriocaulon sp', '2022-01-10 06:03:09', NULL),
(141, 'Pisang-pisangan', 'Heliconia spp', '2022-01-10 06:03:09', NULL),
(142, 'Pisang hias', 'Ravenala madagascariensis', '2022-01-10 06:03:09', NULL),
(143, 'Pohon dollar', 'Eucalyptus gunnii', '2022-01-10 06:03:09', NULL),
(144, 'Ponix', 'Phoenix roebelenii', '2022-01-10 06:03:09', NULL),
(145, 'Pteris', 'Pteris spp', '2022-01-10 06:03:09', NULL),
(146, 'Rushes', 'Juncus sp', '2022-01-10 06:03:09', NULL),
(147, 'Pakis-pakisan', 'Polypodiaceae', '2022-01-10 06:03:09', NULL),
(148, 'Cryptocoryne', 'Cryptocoryne sp', '2022-01-10 06:03:09', NULL),
(149, 'Pedang-pedangan', 'Sansevieria spp', '2022-01-10 06:03:09', NULL),
(150, 'Homalomena', 'Homalomena sp', '2022-01-10 06:03:09', NULL),
(151, 'Pule pandak', 'Plumbago spp', '2022-01-10 06:03:09', NULL),
(152, 'Sonerilla', 'Sonerila sp', '2022-01-10 06:03:09', NULL),
(153, 'Polyscias', 'Polyscias spp  ', '2022-01-10 06:03:09', NULL),
(154, 'Senggani', 'Melastoma sp', '2022-01-10 06:03:09', NULL),
(155, 'Rose bombay', 'Portulaca grandifiora', '2022-01-10 06:03:09', NULL),
(156, 'Gardenia', 'Gardenia sp  ', '2022-01-10 06:03:09', NULL),
(157, 'Murdania', 'Murdannia sp', '2022-01-10 06:03:09', NULL),
(158, 'Rumput embun', 'Polytrias amaura Hacky', '2022-01-10 06:03:09', NULL),
(159, 'Flamboyan', 'Delonix sp', '2022-01-10 06:03:09', NULL),
(160, 'Rumput golf', 'Poa pratensis', '2022-01-10 06:03:09', NULL),
(161, 'Rumput bermuda', 'Panicum dactylon', '2022-01-10 06:03:09', NULL),
(162, 'Bauhinia', 'Bauhinia sp', '2022-01-10 06:03:09', NULL),
(163, 'Hosta', 'Hosta sp', '2022-01-10 06:03:09', NULL),
(164, 'Rumput Hutan Jepang', 'Hakonechloa sp', '2022-01-10 06:03:09', NULL),
(165, 'Mischanthus', 'Mischanthus sp', '2022-01-10 06:03:09', NULL),
(166, 'Arecaceae', 'Arecaceae', '2022-01-10 06:03:09', NULL),
(167, 'Sage merah', 'Salvia splendens', '2022-01-10 06:03:09', NULL),
(168, 'Violet bertanduk', 'Viola cornuta', '2022-01-10 06:03:09', NULL),
(169, 'Petunia', 'Petunia sp.', '2022-01-10 06:03:09', NULL),
(170, 'Rumput jarum', 'Andropogon aciculatus Retz', '2022-01-10 06:03:09', NULL),
(171, 'Pansy', 'Viola wittrockiana', '2022-01-10 06:03:09', NULL),
(172, 'Snappy', 'Antirrhinum snappy', '2022-01-10 06:03:09', NULL),
(173, 'Rumput manila', 'Zoysia matrella Merr.', '2022-01-10 06:03:09', NULL),
(174, 'Floss flower', 'Ageratum houstonianum', '2022-01-10 06:03:09', NULL),
(175, 'Rumput paitan', 'Axonopus commpressus', '2022-01-10 06:03:09', NULL),
(176, 'Bakung biru', 'Agapanthus sp.', '2022-01-10 06:03:09', NULL),
(177, 'Rumput peking', 'Agrostis canina', '2022-01-10 06:03:09', NULL),
(178, 'Mata boneka', 'Actaea', '2022-01-10 06:03:09', NULL),
(179, 'Scindapsus', 'Scindapsus spp', '2022-01-10 06:03:09', NULL),
(180, 'Aralia', 'Aralia sp.', '2022-01-10 06:03:09', NULL),
(181, 'Sirih-sirihan', 'Syngonium spp', '2022-01-10 06:03:09', NULL),
(182, 'Aster', 'Aster sp.', '2022-01-10 06:03:09', NULL),
(183, 'Sedap malam', 'Polianthes tuberosa', '2022-01-10 06:03:09', NULL),
(184, 'Bergenia', 'Bergenia sp.', '2022-01-10 06:03:09', NULL),
(185, 'Bellflower', 'Campanula sp.', '2022-01-10 06:03:09', NULL),
(186, 'Krisan / Seruni', 'Chrysanthemum spp', '2022-01-10 06:03:09', NULL),
(187, 'Sedges', 'Carex sp.', '2022-01-10 06:03:09', NULL),
(188, 'Soka', 'Ixora spp', '2022-01-10 06:03:09', NULL),
(189, 'Corydalis', 'Corydalis sp.', '2022-01-10 06:03:09', NULL),
(190, 'Solidago', 'Solidago spp', '2022-01-10 06:03:09', NULL),
(191, 'Crocosmia', 'Crocosmia sp.', '2022-01-10 06:03:09', NULL),
(192, 'Spathipyllum', 'Spathiphyllum spp', '2022-01-10 06:03:09', NULL),
(193, 'Bleeding heart', 'Dicentra sp.', '2022-01-10 06:03:09', NULL),
(194, 'Eryngium', 'Eryngium sp.', '2022-01-10 06:03:09', NULL),
(195, 'Melati Madagaskar', 'Stephanotis spp', '2022-01-10 06:03:09', NULL),
(196, 'Suplir', 'Adiantum spp', '2022-01-10 06:03:09', NULL),
(197, 'Teratai', 'Nymphaea lotus', '2022-01-10 06:03:09', NULL),
(198, 'Fatsia', 'Fatsia sp.', '2022-01-10 06:03:09', NULL),
(199, 'Talas-talasan', 'Alocasia spp', '2022-01-10 06:03:09', NULL),
(200, 'Typa', 'Typha spp', '2022-01-10 06:03:09', NULL),
(201, 'Verbena', 'Verbena tenera', '2022-01-10 06:03:09', NULL),
(202, 'Jacobinia', 'Jacobinia spp', '2022-01-10 06:03:09', NULL),
(203, 'Gaillardia', 'Gaillardia sp.', '2022-01-10 06:03:09', NULL),
(204, 'Anigozanthos', 'Anigozanthos flavidus', '2022-01-10 06:03:09', NULL),
(205, 'Geranium', 'Geranium sp.', '2022-01-10 06:03:09', NULL),
(206, 'Kamelia', 'Camellia japonica L.', '2022-01-10 06:03:09', NULL),
(207, 'Avens', 'Geum sp.', '2022-01-10 06:03:09', NULL),
(208, 'Bunga pagoda', 'Clerodendnurn paniculatum', '2022-01-10 06:03:09', NULL),
(209, 'Heucherella', 'Heucherella sp.', '2022-01-10 06:03:09', NULL),
(210, 'Heuchera', 'Heuchera sp', '2022-01-10 06:03:09', NULL),
(211, 'Poker panas', 'Kniphofia sp.', '2022-01-10 06:03:09', NULL),
(212, 'Hemerocallis (Daylili)', 'Hemerocallis sp', '2022-01-10 06:03:09', NULL),
(213, 'Aster Leucanthemum', 'Leucanthemum sp.', '2022-01-10 06:03:09', NULL),
(214, 'Bunga udang', 'Justicia brandegeana', '2022-01-10 06:03:09', NULL),
(215, 'Persicaria', 'Persicaria sp.', '2022-01-10 06:03:09', NULL),
(216, 'Bunga Lily', 'Lilium sp', '2022-01-10 06:03:09', NULL),
(217, 'Nusa indah', 'Mussaenda phylippica', '2022-01-10 06:03:09', NULL),
(218, 'Phormium', 'Phormium sp.', '2022-01-10 06:03:09', NULL),
(219, 'Pulmonaria', 'Pulmonaria sp.', '2022-01-10 06:03:09', NULL),
(220, 'Bunga oleander', 'Nerium oleander', '2022-01-10 06:03:09', NULL),
(221, 'Pelargonium', 'Pelargonium sp', '2022-01-10 06:03:09', NULL),
(222, 'Corimbosa', 'Tabemaemontana corymbosa', '2022-01-10 06:03:09', NULL),
(223, 'Jasmin star', 'Trachelospermu m jasminoides', '2022-01-10 06:03:09', NULL),
(224, 'Sambung Colok', 'Aerva Sanguinolenta', '2022-01-10 06:03:09', NULL),
(225, 'Coneflower', 'Rudbeckia sp.', '2022-01-10 06:03:09', NULL),
(226, 'Scabiosa', 'Scabiosa sp.', '2022-01-10 06:03:09', NULL),
(227, 'Thalictrum', 'Thalictrum sp', '2022-01-10 06:03:09', NULL),
(228, 'Krokot', 'Alternantera Ficoidea', '2022-01-10 06:03:09', NULL),
(229, 'Begonia', 'Begonia sp', '2022-01-10 06:03:09', NULL),
(230, 'Brojo lintang', 'Belamcanda chinensis', '2022-01-10 06:03:09', NULL),
(231, 'Foam flower', 'Tiarella sp', '2022-01-10 06:03:09', NULL),
(232, 'Brunnera', 'Brunnera sp', '2022-01-10 06:03:09', NULL),
(233, 'Lily Tricyrtis', 'Tricyrtis sp', '2022-01-10 06:03:09', NULL),
(234, 'Keladi', 'Caladium spp', '2022-01-10 06:03:09', NULL),
(235, 'Jeruju', 'Acanthus sp', '2022-01-10 06:03:09', NULL),
(236, 'Tapak darah', 'Catharanthus sp', '2022-01-10 06:03:09', NULL),
(237, 'Mapel', 'Acer sp', '2022-01-10 06:03:09', NULL),
(238, 'Palisota', 'Chlorophytum Amaniense', '2022-01-10 06:03:09', NULL),
(239, 'Actaea', 'Actaea sp', '2022-01-10 06:03:09', NULL),
(240, 'Cryptantus', 'Cwptantus spp', '2022-01-10 06:03:09', NULL),
(241, 'Flannel flower', 'Actinotus helianthi', '2022-01-10 06:03:09', NULL),
(242, 'Lili Brazil', 'Dianella sp', '2022-01-10 06:03:09', NULL),
(243, 'Aeonium', 'Aeonium sp', '2022-01-10 06:03:09', NULL),
(244, 'Bakung', 'Hymenocallis Littoralis Variegata', '2022-01-10 06:03:09', NULL),
(245, 'Aloe hybrid', 'Aloe hybHds', '2022-01-10 06:03:09', NULL),
(246, 'Ubi Kuning', 'Ipomoea Potato Vine', '2022-01-10 06:03:09', NULL),
(247, 'Anubias', 'Anubias sp', '2022-01-10 06:03:09', NULL),
(248, 'Aponogeton', 'Aponogeton sp', '2022-01-10 06:03:09', NULL),
(249, 'Paris daisy', 'Argyranthemum frutescens', '2022-01-10 06:03:09', NULL),
(250, 'Kaktus bintang', 'Astrophytum sp', '2022-01-10 06:03:09', NULL),
(251, 'Bayam-bayaman', 'Iresine Herbstii', '2022-01-10 06:03:09', NULL),
(252, 'Aztekium', 'Aztekium sp', '2022-01-10 06:03:09', NULL),
(253, 'Meranti Sepat', 'Marantha Leuconeura', '2022-01-10 06:03:09', NULL),
(254, 'Calibrachoa', 'Calibrachoa hybrida', '2022-01-10 06:03:09', NULL),
(255, 'Jeruk Nagami', 'Citrus kumquat', '2022-01-10 06:03:09', NULL),
(256, 'Cotyledon', 'Cotyledon sp', '2022-01-10 06:03:09', NULL),
(257, 'Conophytum', 'Conophytum sp', '2022-01-10 06:03:09', NULL),
(258, 'Kaktus sarang lebah', 'Coryphanta sp', '2022-01-10 06:03:09', NULL),
(259, 'Copiapoa', 'Copiapoa sp', '2022-01-10 06:03:09', NULL),
(260, 'Iris', 'Neornarica longifolia', '2022-01-10 06:03:09', NULL),
(261, 'Kucai Jepang, Kucai Mini, Rumput Mondo', 'Ophiopogon Japonicus Nana', '2022-01-10 06:03:09', NULL),
(262, 'Adam Hawa', 'Rhoeo Discolor', '2022-01-10 06:03:09', NULL),
(263, 'Spatipilum', 'Spatiphyllum sp', '2022-01-10 06:03:09', NULL),
(264, 'Bunga pukul delapan', 'mrnera subulata', '2022-01-10 06:03:09', NULL),
(265, 'Violces/ Saintpaulia', 'Saintpaulia ionantha', '2022-01-10 06:03:09', NULL),
(266, 'Cryptocoryne', 'Cryptocoryne sp', '2022-01-10 06:03:09', NULL),
(267, 'Suruni ambat', 'Wedelia triloba', '2022-01-10 06:03:09', NULL),
(268, 'Bunga Larkspur', 'Delphinium sp', '2022-01-10 06:03:09', NULL),
(269, 'Bunga bawang', 'Zephyrantes rosea', '2022-01-10 06:03:09', NULL),
(270, 'Dietes', 'Dietes sp', '2022-01-10 06:03:09', NULL),
(271, 'Bacopa', 'Bacopa caroliniana', '2022-01-10 06:03:09', NULL),
(272, 'Tanaman Buce', 'Bucephalandra sp', '2022-01-10 06:03:09', NULL),
(273, 'Discocactus', 'Discocactus sp', '2022-01-10 06:03:09', NULL),
(274, 'Dorstenia', 'Dorstenia sp', '2022-01-10 06:03:09', NULL),
(275, 'Dudleya', 'Dudleya sp', '2022-01-10 06:03:09', NULL),
(276, 'Echinocactus', 'Echinocactus sp', '2022-01-10 06:03:09', NULL),
(277, 'Echinopsis', 'Echinopsis sp', '2022-01-10 06:03:09', NULL),
(278, 'Button cactus', 'Epithelantha sp', '2022-01-10 06:03:09', NULL),
(279, 'Tanaman ekor naga', 'Epipremnum pinnatum', '2022-01-10 06:03:09', NULL),
(280, 'Araucaria', 'Araucaria sp', '2022-01-10 06:03:09', NULL),
(281, 'Perocactus', 'Ferocactus sp', '2022-01-10 06:03:09', NULL),
(282, 'Firewheel', 'Gaillardia sp', '2022-01-10 06:03:09', NULL),
(283, 'Garcinia', 'Garcinia sp', '2022-01-10 06:03:09', NULL),
(284, 'Gastrolea', 'Gastrolea sp', '2022-01-10 06:03:09', NULL),
(285, 'Geranium', 'Geranium sp', '2022-01-10 06:03:09', NULL),
(286, 'Graptoveria', 'Graptovena sp', '2022-01-10 06:03:09', NULL),
(287, 'Gymnocalycium', 'Gymnocalycium sp', '2022-01-10 06:03:09', NULL),
(288, 'Tanaman beludru', 'Gynura aurantiaca', '2022-01-10 06:03:09', NULL),
(289, 'Hamatocactus', 'Hamatocactus sp', '2022-01-10 06:03:09', NULL),
(290, 'Rumput mutiara', 'Hemianthus micranthemoides', '2022-01-10 06:03:09', NULL),
(291, 'Brazilian pennywort', 'Hydrocotyle leucocephala', '2022-01-10 06:03:09', NULL),
(292, 'Lepidosperma', 'Lepidosperma effusum', '2022-01-10 06:03:09', NULL),
(293, 'Lithops', 'Lithops sp', '2022-01-10 06:03:09', NULL),
(294, 'Liriope', 'Liriope muscari', '2022-01-10 06:03:09', NULL),
(295, 'Cardinal flower', 'Lobelia cardinalis', '2022-01-10 06:03:09', NULL),
(296, 'Lysimachia', 'Lysimachia nummularia', '2022-01-10 06:03:09', NULL),
(297, 'Macropedia', 'Macropedia fulignosa', '2022-01-10 06:03:09', NULL),
(298, 'Mammilaria', 'Mammillaria sp', '2022-01-10 06:03:09', NULL),
(299, 'Medinilla', 'Medinilla sp', '2022-01-10 06:03:09', NULL),
(300, 'Mimulus', 'Mimulus sp', '2022-01-10 06:03:09', NULL),
(301, 'Monadenium', 'Monadenium sp', '2022-01-10 06:03:09', NULL),
(302, 'Yangmei', 'Myrica rubra', '2022-01-10 06:03:09', NULL),
(303, 'Nandina', 'Nandina domestica', '2022-01-10 06:03:09', NULL),
(304, 'Notocactus', 'Notocactus sp', '2022-01-10 06:03:09', NULL),
(305, 'Obregonia', 'Obregonia sp', '2022-01-10 06:03:09', NULL),
(306, 'Opuntia', 'Opuntia sp', '2022-01-10 06:03:09', NULL),
(307, 'Ortegocactus', 'Ortegocactus sp', '2022-01-10 06:03:09', NULL),
(308, 'Osteospermum', 'Osteospermum ecklonis', '2022-01-10 06:03:09', NULL),
(309, 'Pachypodium', 'Pachypodium sp', '2022-01-10 06:03:09', NULL),
(310, 'Platycodon', 'Platycodon grandiflorus', '2022-01-10 06:03:09', NULL),
(311, 'Podocarpus', 'Podocarpus sp', '2022-01-10 06:03:09', NULL),
(312, 'Pseudolithos', 'Pseudolithos sp', '2022-01-10 06:03:09', NULL),
(313, 'Rhubarb', 'Rhubarb \'glaskins perpetual\'', '2022-01-10 06:03:09', NULL),
(314, 'Crystalwort', 'Riccia fluitans', '2022-01-10 06:03:09', NULL),
(315, 'Rodgersia', 'Rodgersia sp', '2022-01-10 06:03:09', NULL),
(316, 'Schlumbergera', 'Schlumbergera sp', '2022-01-10 06:03:09', NULL),
(317, 'Sedum', 'Sedum spp', '2022-01-10 06:03:09', NULL),
(318, 'Senecio', 'Senecio sp', '2022-01-10 06:03:09', NULL),
(319, 'Sinningia', 'Sinningia sp', '2022-01-10 06:03:09', NULL),
(320, 'Anggrek tanah', 'Spathoglottis plicata', '2022-01-10 06:03:09', NULL),
(321, 'Brain cactus', 'Stenocactus sp', '2022-01-10 06:03:09', NULL),
(322, 'Sticherus', 'Sticherus flabellatus', '2022-01-10 06:03:09', NULL),
(323, 'Stromanthe', 'Stromanthe sanguine', '2022-01-10 06:03:09', NULL),
(324, 'Sulcorebutia', 'Sulcorebutia sp', '2022-01-10 06:03:09', NULL),
(325, 'Sempervivum', 'Sempervivum sp', '2022-01-10 06:03:09', NULL),
(326, 'Ketapang kencana', 'Terminalia Mantaly', '2022-01-10 06:03:09', NULL),
(327, 'Tephrocactus', 'Tephrocactus sp', '2022-01-10 06:03:09', NULL),
(328, 'Bunga kertas', 'Zinnia elegans', '2022-01-10 06:03:09', NULL),
(329, 'Anemone', 'Anemone sp', '2022-01-10 06:03:09', NULL),
(330, 'Fritillaria', 'Fritillaria sp', '2022-01-10 06:03:09', NULL),
(331, 'Gasteria', 'Gasteria sp', '2022-01-10 06:03:09', NULL),
(332, 'Rain lily', 'Habranthus sp', '2022-01-10 06:03:09', NULL),
(333, 'Amarilis', 'Hippeastrum sp', '2022-01-10 06:03:09', NULL),
(334, 'Limonium', 'Limonium caspea', '2022-01-10 06:03:09', NULL),
(335, 'Liriope', 'Liriope sp', '2022-01-10 06:03:09', NULL),
(336, 'Sandersonia', 'Sandersonia aurantiaca', '2022-01-10 06:03:09', NULL),
(337, 'Statice', 'Statice sp', '2022-01-10 06:03:09', NULL),
(338, 'Catchfly', 'Silene sp', '2022-01-10 06:03:09', NULL),
(339, 'Cyclamen', 'Cyclamen spp', '2022-01-10 06:03:09', NULL),
(340, 'Kerudung pengantin', 'Asparagus asparagoides (smilax)', '2022-01-10 06:03:09', NULL),
(341, 'Lily Paris', 'Chlorophytum comosum', '2022-01-10 06:03:09', NULL),
(342, 'Tulip siam', 'Curcuma siam', '2022-01-10 06:03:09', NULL),
(343, 'Bambu', 'Bambusa balcooa', '2022-01-10 06:03:09', NULL),
(344, 'Bambu', 'Bambusa chungii barbellata', '2022-01-10 06:03:09', NULL),
(345, 'B ambu', 'Bambusa eutuldoides viridi vittata', '2022-01-10 06:03:09', NULL),
(346, 'Bambu', 'Bambusa heterostachya', '2022-01-10 06:03:09', NULL),
(347, 'Bambu', 'Bambusa lako', '2022-01-10 06:03:09', NULL),
(348, 'Bambu', 'Bambusa oldhamii', '2022-01-10 06:03:09', NULL),
(349, 'Bambu', 'Bambusa textilis gracilis', '2022-01-10 06:03:09', NULL),
(350, 'Bambu', 'Dendrocalamus brandisii', '2022-01-10 06:03:09', NULL),
(351, 'Bambu', 'Dendrocalamus hamiltonii', '2022-01-10 06:03:09', NULL),
(352, 'Bambu', 'Dendrocalamus minor amoenus', '2022-01-10 06:03:09', NULL),
(353, 'Bambu', 'Guadua amplexifolia', '2022-01-10 06:03:09', NULL),
(354, 'Bambu', 'Guaaua angustifolia', '2022-01-10 06:03:09', NULL),
(355, 'Bambu', 'Himalayacałamus porcatus   ', '2022-01-10 06:03:09', NULL),
(356, 'Bambu', 'Oxytenanthera abyssinica', '2022-01-10 06:03:09', NULL),
(357, 'Bambu', 'Phyllostachys atrovaginata', '2022-01-10 06:03:09', NULL),
(358, 'Bambu', 'Phyllostachys aureosułcata aureocaulis', '2022-01-10 06:03:09', NULL),
(359, 'Bambu', 'Phyllostachys nigra', '2022-01-10 06:03:09', NULL),
(360, 'Bambu', 'Pleioblastus variegatus', '2022-01-10 06:03:09', NULL),
(361, 'Bambu', 'Semiarundinariafastuosa', '2022-01-10 06:03:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int NOT NULL DEFAULT '1',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `confirmed` tinyint(1) DEFAULT '0',
  `address` text COLLATE utf8mb4_unicode_ci,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `phone`, `confirmed`, `address`, `country`, `remember_token`, `created_at`, `updated_at`) VALUES
(39, 'Admin', 'admin@gmail.com', 0, '2022-02-05 11:24:19', '$2y$10$3hIdVoLNjTnw8n9kBO4q6Od12N5vm8CDYlci3wJ.wYJ5gItdga5mu', '0895331493506', 1, NULL, NULL, NULL, '2022-02-05 04:24:02', '2022-02-05 04:24:02'),
(40, 'user', 'user@gmail.com', 1, NULL, '$2y$10$wCuhkG3sUEfu7uQ1DTHmkuaK8VbGF1TAntkK6xdXqIAuZhyMSFrtG', '0895331493506', 1, NULL, NULL, NULL, '2022-02-06 23:20:16', '2022-02-06 23:20:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pengajuan_user_id_foreign` (`user_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pricing`
--
ALTER TABLE `pricing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pricing_bak`
--
ALTER TABLE `pricing_bak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_pengajuan`
--
ALTER TABLE `sub_pengajuan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_pengajuan_pengajuan_id_foreign` (`pengajuan_id`),
  ADD KEY `sub_pengajuan_tanaman_id_foreign` (`tanaman_id`),
  ADD KEY `sub_pengajuan_user_id_foreign` (`user_id`);

--
-- Indexes for table `tanaman`
--
ALTER TABLE `tanaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tanaman_master`
--
ALTER TABLE `tanaman_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=253;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pengajuan`
--
ALTER TABLE `pengajuan`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pricing`
--
ALTER TABLE `pricing`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pricing_bak`
--
ALTER TABLE `pricing_bak`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sub_pengajuan`
--
ALTER TABLE `sub_pengajuan`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tanaman`
--
ALTER TABLE `tanaman`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=364;

--
-- AUTO_INCREMENT for table `tanaman_master`
--
ALTER TABLE `tanaman_master`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=362;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD CONSTRAINT `pengajuan_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sub_pengajuan`
--
ALTER TABLE `sub_pengajuan`
  ADD CONSTRAINT `sub_pengajuan_pengajuan_id_foreign` FOREIGN KEY (`pengajuan_id`) REFERENCES `pengajuan` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sub_pengajuan_tanaman_id_foreign` FOREIGN KEY (`tanaman_id`) REFERENCES `tanaman` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sub_pengajuan_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
