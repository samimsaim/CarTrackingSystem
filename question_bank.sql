-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2016 at 01:05 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `question_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `ans_list`
--

CREATE TABLE IF NOT EXISTS `ans_list` (
`ID` int(11) NOT NULL,
  `Ques_id` int(11) NOT NULL,
  `Cor_ans` varchar(200) NOT NULL,
  `Form_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=119 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ans_list`
--

INSERT INTO `ans_list` (`ID`, `Ques_id`, `Cor_ans`, `Form_id`) VALUES
(19, 12, '7', 100073),
(20, 4, '24', 100073),
(21, 1, '20', 100073),
(22, 4, '24', 100073),
(23, 12, '7', 100073),
(24, 10, 'جواب سوم', 100073),
(25, 10, 'جواب سوم', 100073),
(26, 10, 'جواب سوم', 100073),
(27, 5, '7', 100074),
(28, 12, '7', 100074),
(29, 4, '24', 100074),
(30, 12, '7', 100074),
(31, 4, '24', 100074),
(32, 5, '7', 100074),
(33, 1, '20', 100074),
(34, 5, '7', 100074),
(35, 4, '24', 100074),
(36, 12, '7', 100074),
(37, 10, 'جواب سوم', 100074),
(38, 10, 'جواب سوم', 100074),
(39, 10, 'جواب سوم', 100074),
(40, 4, '24', 100075),
(41, 1, '20', 100075),
(42, 5, '7', 100075),
(43, 1, '20', 100075),
(44, 4, '24', 100075),
(45, 5, '7', 100075),
(46, 12, '7', 100075),
(47, 4, '24', 100075),
(48, 12, '7', 100075),
(49, 5, '7', 100075),
(50, 10, 'جواب سوم', 100075),
(51, 10, 'جواب سوم', 100075),
(52, 10, 'جواب سوم', 100075),
(53, 1, '20', 100076),
(54, 5, '7', 100076),
(55, 4, '24', 100076),
(56, 1, '20', 100076),
(57, 5, '7', 100076),
(58, 4, '24', 100076),
(59, 12, '7', 100076),
(60, 1, '20', 100076),
(61, 12, '7', 100076),
(62, 5, '7', 100076),
(63, 10, 'جواب سوم', 100076),
(64, 10, 'جواب سوم', 100076),
(65, 10, 'جواب سوم', 100076),
(66, 4, '24', 100077),
(67, 5, '7', 100077),
(68, 12, '7', 100077),
(69, 12, '7', 100077),
(70, 4, '24', 100077),
(71, 1, '20', 100077),
(72, 5, '7', 100077),
(73, 4, '24', 100077),
(74, 1, '20', 100077),
(75, 5, '7', 100077),
(76, 10, 'جواب سوم', 100077),
(77, 10, 'جواب سوم', 100077),
(78, 10, 'جواب سوم', 100077),
(79, 12, '7', 100078),
(80, 5, '7', 100078),
(81, 4, '24', 100078),
(82, 1, '20', 100078),
(83, 5, '7', 100078),
(84, 4, '24', 100078),
(85, 1, '20', 100078),
(86, 12, '7', 100078),
(87, 5, '7', 100078),
(88, 4, '24', 100078),
(89, 12, '7', 100078),
(90, 1, '20', 100078),
(91, 19, '1', 100078),
(92, 10, 'جواب سوم', 100078),
(93, 15, '3', 100078),
(94, 20, '6', 100078),
(95, 15, '3', 100078),
(96, 10, 'جواب سوم', 100078),
(97, 20, '6', 100078),
(98, 19, '1', 100078),
(99, 20, '6', 100078),
(100, 19, '1', 100078),
(101, 15, '3', 100078),
(102, 10, 'جواب سوم', 100078),
(103, 5, '7', 100079),
(104, 1, '20', 100079),
(105, 4, '24', 100079),
(106, 12, '7', 100079),
(107, 5, '7', 100079),
(108, 12, '7', 100079),
(109, 1, '20', 100079),
(110, 4, '24', 100079),
(111, 5, '7', 100079),
(112, 4, '24', 100079),
(113, 1, '20', 100079),
(114, 12, '7', 100079),
(115, 20, '6', 100079),
(116, 15, '3', 100079),
(117, 19, '1', 100079),
(118, 10, 'جواب سوم', 100079);

-- --------------------------------------------------------

--
-- Table structure for table `cover_page`
--

CREATE TABLE IF NOT EXISTS `cover_page` (
`ID` int(11) NOT NULL,
  `University` varchar(250) NOT NULL,
  `Faculty` varchar(250) NOT NULL,
  `Department` varchar(250) NOT NULL,
  `Ques_count` int(11) NOT NULL,
  `Time` int(11) NOT NULL,
  `Accept` int(11) NOT NULL,
  `Year` varchar(250) NOT NULL,
  `Date` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cover_page`
--

INSERT INTO `cover_page` (`ID`, `University`, `Faculty`, `Department`, `Ques_count`, `Time`, `Accept`, `Year`, `Date`) VALUES
(1, 'پوهنتون پوليتخنيک کابل', 'پوهنحئی انجنيری کمپيوتر و انفورماتيک', 'کمپيوتر', 100, 100, 6, 'سال هشتم', '7 - حمل - 1395');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE IF NOT EXISTS `form` (
`ID` int(11) NOT NULL,
  `Form_ID` varchar(8) DEFAULT NULL,
  `Ques_count` int(11) DEFAULT NULL,
  `Form_count` int(11) DEFAULT NULL,
  `Form_jumble` int(11) DEFAULT NULL,
  `Stu_count` int(11) DEFAULT NULL,
  `Multiform` tinyint(1) DEFAULT NULL,
  `Share_ques` tinyint(1) DEFAULT NULL,
  `Type_E` int(3) DEFAULT NULL,
  `Type_M` int(3) DEFAULT NULL,
  `Type_H` varchar(3) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`ID`, `Form_ID`, `Ques_count`, `Form_count`, `Form_jumble`, `Stu_count`, `Multiform`, `Share_ques`, `Type_E`, `Type_M`, `Type_H`) VALUES
(1, NULL, 100, 1, 2, NULL, 0, 0, 30, 40, '30');

-- --------------------------------------------------------

--
-- Table structure for table `form_created`
--

CREATE TABLE IF NOT EXISTS `form_created` (
`ID` int(11) NOT NULL,
  `form_ID` int(11) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=100002 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `form_created`
--

INSERT INTO `form_created` (`ID`, `form_ID`, `Date`) VALUES
(100000, 1, '2016-11-18'),
(100001, 1, '2016-11-18');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
`ID` int(11) NOT NULL,
  `Question` longtext CHARACTER SET utf8 NOT NULL,
  `Answer_1` longtext CHARACTER SET utf8 NOT NULL,
  `Answer_2` longtext CHARACTER SET utf8 NOT NULL,
  `Answer_3` longtext CHARACTER SET utf8 NOT NULL,
  `Answer_4` longtext CHARACTER SET utf8 NOT NULL,
  `Correct_An` longtext CHARACTER SET utf8 NOT NULL,
  `Type` varchar(1) CHARACTER SET utf8 NOT NULL,
  `Subject_ID` int(11) DEFAULT NULL,
  `Add_by` int(11) NOT NULL,
  `Author_name` varchar(250) CHARACTER SET utf8 NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`ID`, `Question`, `Answer_1`, `Answer_2`, `Answer_3`, `Answer_4`, `Correct_An`, `Type`, `Subject_ID`, `Add_by`, `Author_name`, `Date`) VALUES
(1, '<p>معادله ذیل را y = 2x + 3y حل کنید درصورتیکه قیمت x = 4 باشد</p>\r\n', '20', '12', '16', '19', '1', 'E', 8, 9, 'میرزا محمد میرزا', '2016-11-11'),
(2, '<p>فورمول محمد بن موسی خوارزمی یکی از جوابات ذیل میباشد</p>\r\n', 'y = 2x^2 + 2bx + c', 'y = 2x^2 + 2b + c ', 'y = 2x^3 + 2bx + c ', 'y = 2x^0 + 2bx + c ', '1', 'M', 8, 9, 'میرزا محمد میرزا', '2016-11-11'),
(4, '<p>معادله ذیل را y = 2x + 4x حل کنید در صورتیکه x = 4 باشد</p>\r\n', '20', '10', '24', '34', '3', 'E', 8, 9, 'میرزا محمد میرزا', '2016-11-11'),
(5, '<p>معادله ذیل y = 2x+3 را حل کنید در صورتیکه قیمت x=2 باشد</p>\r\n', '4', '6', '7', '9', '3', 'E', 8, 9, 'میرزا محمد میرزا', '2016-11-11'),
(8, '<p>سوال</p>\r\n', 'جواب اول', 'جواب دوم', 'جواب سوم', 'جواب چهارم', '3', 'M', 9, 9, 'میرزا محمد میرزا', '2016-11-11'),
(9, '<p>سوال</p>\r\n', 'جواب اول', 'جواب دوم', 'جواب سوم', 'جواب چهارم', '3', 'H', 9, 9, 'میرزا محمد میرزا', '2016-11-11'),
(10, '<p>سوال</p>\r\n', 'جواب اول', 'جواب دوم', 'جواب سوم', 'جواب چهارم', '3', 'E', 9, 9, 'نصرت', '2016-11-11'),
(11, '<p>سوال</p>\r\n', 'جواب اول', 'جواب دوم', 'جواب سوم', 'جواب چهارم', '3', 'M', 9, 9, 'میرزا محمد میرزا', '2016-11-11'),
(12, '<p>معادله ذیل y = 2x+3 را حل کنید در صورتیکه قیمت x=2 باشد</p>\r\n', '4', '6', '7', '9', '3', 'E', 8, 9, 'میرزا محمد میرزا', '2016-11-11'),
(13, '<p dir="rtl">در دوره سلطنت کدام پادشاه افغانستان نظام شاهی مشروطه به وجود آمد:</p>\r\n', 'امیر عبدالرحمن خان', 'غازی امان الله خان', 'محمد داود خان', 'محمد ظاهر شاه', '4', 'E', 10, 9, 'نصرت', '2016-11-17'),
(14, '<p dir="rtl">معادله ذیل را&nbsp; <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASAAAAAlCAYAAADiOTSHAAAAAXNSR0IArs4c6QAAAAlwSFlzAAAOxAAADsQBlSsOGwAAABl0RVh0U29mdHdhcmUATWljcm9zb2Z0IE9mZmljZX/tNXEAAAqlSURBVHhe7V2/byJJFn7VN7k3XlKagCVlJJuJlzNOJlmvRMIkCxOd2WCSkwWG8Uaz0uCJFjbYJfFovclcAN7JDScNG1ojDZCSH3+Au+69qm5+Nu7G0N0YqiVLlt3d79XXVV+/+uq96ielUgnUoRBQCCgEgkDgSRBGlU2FgEJAIUAIKALasH5QiA84S9WkVwcV6LVO4LJcZn65WSjEeY6lwPQgEB/8aquyEzwCioCCfwYjDwrpPZ7I7EGPcwjDNRARvLk+gZDfPprEJ304h0b/xG8PlL0dQUAR0AY96PLlkCWTQBEPFAppHj3IQuQQoNPxz8lyucNClg9IiLfZUwhd+heB+ddSZWkTEFAEtAlPwcaH/kUGPp+2YOjj9Mtyw5qGsSLNwHoAQx8ZcEOfh3LLGwQUAXmD60p3Te995BmoQ7ITTOQhoiBcHeVCD9Jh0OQ8FJAvKwGpLt54BHaagITmouehPaV5oACbbUIp1Fm78OvG3oh8hpeMBOkcVGGdg9/JB6lDAdRR/AboQ/QA4PPGd2Pl4GNFYGcJiDSWi1wD6rwJb4TQegSQ+QDPUQAOeTDtcWNPkkMb2qDjD3CcAUG2WV1b33LjA+lQp7Ei11le2iUyVtHP2p6ButE0AjtLQOXyJaPlpTDoKPa2Ia9noNJrQccD8iHI3dgTIjROfVADHh+d8tr6rBsfyFgnVGLj/FSl/6ztAagbzSGwswRkIUGDMn18wPOxUxj6sNrjtz27Pr8JPqixqBAgBHaegKxpDxx0IV0tcK+T/vy2Z9fNN8EHNfwUAjtPQGK5OdGFeq8CGf1KJNzFBwMO1aonUzG/7dmSj89tVsNMIXAfAjsbAcUHRc5YFpq8ijpQH44P8qgDMdRcvRGh/bZn99A3wQc1HBUCkwjsLAFZQiuKziBk1mQJSqT+rlH0ndKSTWHXL3t23dzvNquhphBwQsAVAdGbM1U7EKtEJ70cULGkiBQ8XJ6V2bjnEEWbfojDTkCp/ysEFALrR8CRgIgIrq859KIJyLzJwRU8B96MwoXuXYY+JeMxqgMAnCKFMShx0e6gCCsou5OQKB9cdJAtPqVQeGrktNcs+qWFMgJopXKZe9Vc7Gto6xxt3ZBksbItRwKitHyigMP0MUf2wQzZQ8xpwb95NFWhaCuz10OSe4ORllcwqvsqBB4/AoWnA0M7rLFiEV/URgtSzDvywax8QzuSthqmLaxTXJnoRgQ0uw8MFSEmsRwgvrfHdUwSTmSQfTA9lzKG9/bifDhcf6kCdQnSKdAu/bpy4x5/F1Mt2BYEpseXXPygpFeK9vU8Diw6XO7/lP7qoxE5abMiZqkD1LRSKcQ7r8uwaG/TQvorIxE5Ye39CnSxxEanbVY0LDn6Aa+vpfD60sKxNrbVwBFZxXPL/G+09fc9D4aipJfaEatiVQHNYhrGL0iOTOu/S9yR38IYtrV7cyLzgEReCIYbMdR1KO1egPK5B60qliskdEhd0cZYLejlGKTMjGG4tJ8YiXR/vMbC1N5PqScpbWdbhpdqx30IWGMCWUeML0lGOYhWbgX5WHpqfJDnmYuj6Ux488Z4D+MiEWH5NoePlS6+nXWtFMIIxGFLZXFdrsHqBpYcaefQ7GE08QJLjgxOm87hPebJR1zzDG21Zm3dRzvSUeta3rgDOGQah+u7l9pL1nt7a+SprQ0DOY9pzRy7e/EuxZ6MwMGIh0RlCU4RCUqX5QO0OgRDsUcNhPB3pFkkjoV4j66ZqieYP/2+e7jpzrNEVyTJiA5cSsfDZPR5oisWi0tFVvh2mCpK9cvuJAbb5MMIPxjv9mjtAmkNxNE5MW+Kgt30L6dzlnnRQv8C1YsK1HFvJ3pvk4RR7UWx7m96MefwVQXOMw1It6YTYiX5ZBjUDaod0pI49cFh6erA8aiZJUdGdP+/LB/BkqMuTteIfGymUJJA0NbvSCBhtpQt4VC/CX/CW/jtnwzLqEVbtV+63xjPIjVmkQ/ZPXx1AT+9aGIE1G/AFUaA7bZZAIkDmTpCUFtBuEJVNMwkR5PoFgmxs0Q3O5jd2rPOC8rupJ+P2Ydl8d7U85d60eIMY7Yd/cYVKhpZOJ3ccC4cgRh055pMJFJo1ZGENAZtblAE1M5jBITTIbf40D3S3+8bP8ZOkYRQPF4w7RK2btDWs38waD3M1lxbm3+g21n4N7ZVkBKdENZFW00NaDwnFRevIDAv82ZQUzC33Wd7zpuLqqlDdkJY/IqvdLPfjc9xs/75CLAJH8ExKi/W9roy4gOo4Gryee4akuaeu/2Lc7g9rtvuAS4imeSZyFVLsxdGBNpGceCs4VjoSB0I9Zf9LnQ5N3ARWysvEJGFrW/R1reTtlADEnqRA+mFU/AdRODnv/4FtUMGXIjXwN42ovDTy7/gqHYoZlH9d9jW7363COgWun3pqowkaFuKh5UjLPVmcOw7Y78cT1Un7AwClqBLmoqXuWjrApTGRKHVxHHFACcYuM3KWBpoPf9AHyEQkUxRiNBhJKD7LV/+L6mdIRMVnn4wtBoYxeIAV8GqC1fBxDJ94gurd7HkKHKFOtAJRH7OGXEsOVo0FbM8GNmK/8fQfj1CWyQqS1t2BCYjqAaK0BhBIdExamtXLtlzlrvTfk3hPWRbuzc6PKEtIOoV4LqpnYglvQeSzzoemKUHWJIOlUegZM6VaL0OdNU9gkLA2mXSkm4saWAU/QnHTK3VpZPlTyEkohIGDZQHlGCVLy0jXyhMaTtPB0UDS44YEVSYYcnR/o+AUzCUWVAMpmV7p4jG9AX91M7OyBblASVY78uNUZyxZblNus/XZxhBmX8Yvn8tfi+DvIc8hvAeV9PEFOxymMQQeKwaU7lAUMf0Axl74SRaywecvFcgn23TIt1ILo3GXBHxQ+zKzHLLm3mhfBn7dJfH6sOD+1i/C7ez+smDb/b4LyyXP2mhM+z77+eX4j+FSkgyOLvFwS5LjuQ0Dv/gtIBmCwyRi7QlSWXVwzERcVUDm3q9Y7b1QRRn7e6ysN220dLHzo97+PAxLLdSFjIXGHrPbAXigX3yc9YH+psgRB99cIuX3XnS/wwce7h53Cr+qWuXQ2AnCSiobGtLHzMTLcVKntgMLf8Z8NsTvhyzPpBRnTZ+vvXF/MpGpP/iu0Er30vdIHgEdpKAXGVbxyL+fZHULtrxyb7U3Gi6afMFVp98CH4YKA+CQmAnCcgJ7HAk5sunIKykz2yzNUV2fti3SgCE2I8rErPTTT98cHoO6v/bj4AioAXP+CDqYbn/hBazaCnZa/vWwoO1pK0nYE6H8tqH7R9eqoVOCCgCckLIo/9f53S4QjE66IxzURbQzPJaSm5Jqw6FgJ8IKAKyQZtSAZIgKvI9OUgEP4/K3QbsDHht375RMYhM7L0UjA+ewK1uusEIKALC5R8rC9x6TkIfuTrGKYmNMLviwxSiL6bQlybIJz74yLuvxrsDeGpfZLpj/quZRTwqRsatHSa/iealDytCqC7fIgR2koCCyra2RGcsqhEp+eN+hNnnWKXnR+WTrMSuYCU2o+0YOO4OIL9+6sGnqLdonKimeITAThKQU7a1EGiTy6XFu3k+s+n4k9dMZp97Zd+yN/8F1nnq89oHN3ipc7YfgZ0koO1/rKqFCoHHgcD/Ae4GY6PahWsVAAAAAElFTkSuQmCC" style="height:37px; width:288px" />&nbsp;&nbsp;&nbsp;حل نماید در صورتیکه قیمت x = 4 باشد</p>\r\n', '34', '45', '67', '78', '3', 'M', 8, 9, 'میرزا محمد میرزا', '2016-11-18'),
(15, '<div dir="rtl">فورمول ذیل&nbsp; <img src="data:image/png;base64,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" style="height:49px; width:266px" />&nbsp;مربوط کدام جواب میشود</div>\r\n', '1', '2', '3', '4', '3', 'E', 9, 9, 'میرزا محمد میرزا', '2016-11-18'),
(19, '<p><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAKkAAAAxCAMAAACWPnkzAAAAAXNSR0IArs4c6QAAAHtQTFRFAAAAAAAAAAA6AABmADqQAGa2OgAAOgA6OgBmOjqQOma2OpDbZgAAZgA6ZgBmZjqQZmZmZrb/kDoAkDo6kDpmkGaQkJA6kNvbkNv/tmYAtmY6tmZmtpCQtra2tv//25A629uQ2/+22////7Zm/7a2/9uQ/9vb//+2///biRlh3gAAAAF0Uk5TAEDm2GYAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAZdEVYdFNvZnR3YXJlAE1pY3Jvc29mdCBPZmZpY2V/7TVxAAADO0lEQVRoQ+1YgXKbMAw1TaHbSNaGbgveutCWMfj/L5xk2cYWJvjoOuAWXa/XxsF6lp6eJYT4X63J0jq5fd3A8Z+es7S93wJSUaWiTjcQUiHkEX6eNhDU9lAKmRw3EdQryGsE1hyBKmF2U64Ubrv37ybpI+2Km7JOduc1oG+yJHdwNHdOTH92j6fiIW33R/FrBWCrxA1j92iRIkDR7lOBaqv+WdpkOLuEuflwFjX2Ls4RFgMMVA1d+dAKgFWAkv5qPi5/2TKqUsgw5WAyF12R15h6+HOm4XGnTEY1SD5VaU8KpKKnpJgrEjjGZIJDsctw0imYavsYhemKQRvdFYMK0lG2XtvPF/XALldRQHUkpnr6IVU9tSJwPDbNJzhhfx7uwyzzA7rc8mKtgjPZ09cJ6/lCuWBUqnJPD7QPID0YCJ9Z5qQZRUqFMNnTV0yqQkXAPpOeEA98mGU6X5PdvqI2a3MDDWfbfcPcqP0ne3pOVRkoV4qz8dkeTkX+G4tMu/J92GUVqe7ry+H0pee1g7TJjqJWlw9G3+npARIZa0XavfdBSDQUUusT9JXmWe2KzQ12WYsbdhCG7y6CroBAE0OCPBnKhnqit1GkWFnemRxXQTEyO5HsDbKvSre/ZYJb+B9WvpxdQKr3NY87roJudKSQNEGkcF3rpoL5HMk+pjAypr5P1Rlc6l+Iku398135wxK15ykcFJP0vYRcxTRB7Z7J83jtM5+idzWSOVR+uTt74utUFGjESelyHE0HpR7SU1IR5hMvW+1qBGlcrFRupo1UwjVzR7mSMLtFCUkeBxXzHdIZZpZ5fU5W0EwzgSLMQ3GJS890At/wDSZQtJMhKtw8FXV9niC+wd38R4ckxb10HWCRUtsW7Inme53xJBMoWzaUbPitP5ldTzMwhR/xi85pQtULVXhzQZfX8q9XGUlrp0/Fspc56dXyJKXG1zVPsECZcOCLnC/+Wp4DG9kuwGL17wAkqy7994Rx3XuhCLCpHXgb9YpgAbQ0lpuJEqbNyNbn30P1p3asoOUlPhwFf2rH12TLS+fIFaWGVJN9pUorUM8A1n5qV4tK6WPGmQVoaqZ27Rpe+6y19t85OH8Abq9HYdawbTwAAAAASUVORK5CYII=" style="height:49px; width:169px" /></p>\r\n', '2', '3', '1', '4', '2', 'E', 9, 9, 'نصرت', '2016-11-11'),
(20, '<p>حل معادله ذیل <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAKkAAAAxCAMAAACWPnkzAAAAAXNSR0IArs4c6QAAAHtQTFRFAAAAAAAAAAA6AABmADqQAGa2OgAAOgA6OgBmOjqQOma2OpDbZgAAZgA6ZgBmZjqQZmZmZrb/kDoAkDo6kDpmkGaQkJA6kNvbkNv/tmYAtmY6tmZmtpCQtra2tv//25A629uQ2/+22////7Zm/7a2/9uQ/9vb//+2///biRlh3gAAAAF0Uk5TAEDm2GYAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAZdEVYdFNvZnR3YXJlAE1pY3Jvc29mdCBPZmZpY2V/7TVxAAADO0lEQVRoQ+1YgXKbMAw1TaHbSNaGbgveutCWMfj/L5xk2cYWJvjoOuAWXa/XxsF6lp6eJYT4X63J0jq5fd3A8Z+es7S93wJSUaWiTjcQUiHkEX6eNhDU9lAKmRw3EdQryGsE1hyBKmF2U64Ubrv37ybpI+2Km7JOduc1oG+yJHdwNHdOTH92j6fiIW33R/FrBWCrxA1j92iRIkDR7lOBaqv+WdpkOLuEuflwFjX2Ls4RFgMMVA1d+dAKgFWAkv5qPi5/2TKqUsgw5WAyF12R15h6+HOm4XGnTEY1SD5VaU8KpKKnpJgrEjjGZIJDsctw0imYavsYhemKQRvdFYMK0lG2XtvPF/XALldRQHUkpnr6IVU9tSJwPDbNJzhhfx7uwyzzA7rc8mKtgjPZ09cJ6/lCuWBUqnJPD7QPID0YCJ9Z5qQZRUqFMNnTV0yqQkXAPpOeEA98mGU6X5PdvqI2a3MDDWfbfcPcqP0ne3pOVRkoV4qz8dkeTkX+G4tMu/J92GUVqe7ry+H0pee1g7TJjqJWlw9G3+npARIZa0XavfdBSDQUUusT9JXmWe2KzQ12WYsbdhCG7y6CroBAE0OCPBnKhnqit1GkWFnemRxXQTEyO5HsDbKvSre/ZYJb+B9WvpxdQKr3NY87roJudKSQNEGkcF3rpoL5HMk+pjAypr5P1Rlc6l+Iku398135wxK15ykcFJP0vYRcxTRB7Z7J83jtM5+idzWSOVR+uTt74utUFGjESelyHE0HpR7SU1IR5hMvW+1qBGlcrFRupo1UwjVzR7mSMLtFCUkeBxXzHdIZZpZ5fU5W0EwzgSLMQ3GJS890At/wDSZQtJMhKtw8FXV9niC+wd38R4ckxb10HWCRUtsW7Inme53xJBMoWzaUbPitP5ldTzMwhR/xi85pQtULVXhzQZfX8q9XGUlrp0/Fspc56dXyJKXG1zVPsECZcOCLnC/+Wp4DG9kuwGL17wAkqy7994Rx3XuhCLCpHXgb9YpgAbQ0lpuJEqbNyNbn30P1p3asoOUlPhwFf2rH12TLS+fIFaWGVJN9pUorUM8A1n5qV4tK6WPGmQVoaqZ27Rpe+6y19t85OH8Abq9HYdawbTwAAAAASUVORK5CYII=" style="height:49px; width:169px" />&nbsp;یکی از جوابات زیر میباشد</p>\r\n', '2', '5', '6', '7', '3', 'E', 9, 9, 'میرزا', '2016-11-11'),
(21, '<p dir="rtl">&nbsp; حل کنید <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAKUAAACFCAYAAAA6hzjsAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAkNSURBVHhe7Z3Na11FGManVgOFFkKFVFESlYi2qR8BbWtjIlaIgpoUzaJuunIVBLsS/wZXCpKVC+nGLkppqoIWrJiYWqsQP5qoGLQNijVgKLRQiJaa573n5ia59+bOOWfOnPl4fpvS0+3Te2be83tmNt1cRhHiELckf5IcLP13Q711bFJdu76UPCF5YCgNcPyLC2ruz3/Uex9/mzwheWAoc3J58Zo6/c2cevf1FyWYs5cWkn8hWWEoc/L28Sk1enCvart1szoysl+NnfxaXuckOwxlDs5M/6a2bmlTex68W/7efdft6tHuO+V1TrLDUGYEv4ZYQ44e3Jc8qXD42V710Ve/qMWr15MnJC0MZUYQyJf6d6nt27YkTyrgNT46vFde6yQbDGUGsKH5bu4vNfLU7uTJWp58qEv+/PLHS/InSQdDmQHMJN841J/8rTFHRvrU2Dg3PVlgKFOCTQw2M9jUbARe63i9c3aZHoYyBdi8YBNzeLA3ebIxQ3071ezFBXndE30YyhSMnTwnu2uMgXSQTc9BbHrOJk+IDgylJud//kO+bR/ovS95oseurg551Z86+1PyhLSCodQAmxV8qcHmJQuvPv+YOjExy9mlJgylBkc/nVaDj3erO7ZvTZ6kA697vPbx+ietYShbML9wRV7dzWaSuuC1j19KzDfJxjCULcAmBV9osGnJiwgbnF22hKHcgE/O/7r8yt4mc0kTdHa0q77dneqDz75PnpBGMJRNwKv2xOSMbFJM8sozj6ipC/OyLCCNYSibgM3NC088UCdc5AXLAAQdu3nSGIayAbDH8RVmaP/O5IlZ4F9iRw4fk9TDUK6jNpPcnzwpBniY+DVm2awehnIdusJFXkTYGKCw0QiGchXVEhgG3TbA8oBls3oYylWMjZ+TTYiJmaQuWCZQ2FgLQ5lQtcSr1rgtWDarh6FcRjY349mFi7yIsDFJYaMKQ7lMsxKYLVg2W0v0oWxVArMFy2Y1og8lNhlFzyR1GR3eJ7/asQsbUYcSNjg2GrDDXQC+JrxNDNVjJtpQinAxMWtcuMgLlhFYTsRcNos2lGlLYLZg2SzSUGYtgdkCy4nOHe3ic8ZIdKHEJgKbCfwauUxldjkT5ewyulDC+ob9DQvcZSonbPREKWxEFUrY3rC+YX/7wHN77leXF69GVzaLKpQmS2C2iLFsFk0oYXnjlWiqBGYLLDNgqsckbEQRSuy0MZBef+quL2B0Bc8TvmcMRBFKES4GyhMu8lKbXcYhbAQfyqJLYLaIqWwWfChdEi7yguVHDMJG0KG0VQKzRWV2GX7ZLNhQVk64cE+4yEsMwkawoZSbwDybSeqCSwBwGUCoBBnKskpgtgi9bBZcKMsugdki5LJZcKEs6mAq18CyBMEM8XTgoELpSgnMFvBB8bUKfmhIBBVKES6Sa45jQW42C+w652BC6VoJzBYhls2CCCUW+3ITmKWDqVwDyxW8wkM5HTiIUIpw0d8T/OamGSJsyAkbYZTNvA8lNjaws2Fpxwzmlrg0IISymdehrM0kwxAu8hJK2czrUPpSArNFRdjwv2zmbShhYX8+/bs3JTBbYBkz//cVr08H9jaUIlxENpPURcpmHs8uvQwl7GtY2LCxST2+CxvehdL3EpgtfC6beRfKo6fjEC7ysiJsjPsnbHgVytiEi7z4ejqwV6GEbQ3rmugjwoZnJ2x4E8rQSmC28LFs5kUoQy2B2cK3spkXoQy5BGYLzC59ETacDyWUrKV/bwRbArMFPFMsfeCduo7ToRThQq45DrsEZgsRNibcL5s5HUoMyWFVw64m+cFXMAzVXS+bORtKziSLwYeymbOhxGwNrxtubswDkcXlg7KcDCXsaVjUmEsS88A/hYcKH9VFnAtlZSY5w5lkwcBDxaUELpbNnAtl7CUwW7hcNnMqlLClYU3HXgKzBZZH+M/v2unAzoSyNpNkCcwm8FIxesOO3BWcCSWFi3IQYWPALWHDiVDCjoYlHesJF2WDSwowF3albOZEKFkCKx+XymalhxJWdNttm1kCKxk5HOyeDnVqqnxho9RQyuYmglN3fUGEDQdOBy41lJWZpL83gYVGbXZZ7s1mpYWSwoWbuFA2Ky2ULIG5S9lls1JCCfu5akIT98ByCt36sk4Hth5KES4mWAJznTLLZtZDCesZQ3JY0MRdZNMj1znbFzashhK2M76xwn4m7lNW2cxaKGvCBWeSPlFG2cxaKGE5P917L0tgnoFl1qEDD1sVNqyEEnYzLGeeuusn8Ftx2QE2PjawEkq5CYwnXHiNCBuWZpeFh5IlsDCwWTYrNJTYaR878wNnkoGA5RcuPyj6dOBCQynCxQCFi1CozS6LFTYKCyUsZnwNgNVMwgHeK3bkRZbNCgllbSbJEliIFF02KySULIGFzYqwcboYYcN4KDH5j/ma41goUtgwHkqeuhsP8GHhxZrGaCirtjJP3Y0DLM+wTDN9s5mxULIEFidFlM2MhZIlsDgpomxmJJRyusLFBTXUx5lkjGC5hssSTJ0ObCSUIlzwhIuokbKZoRM2cocSVrKcrtDVkTwhMQJPFpcmmCib5QolS2BkNaZml7lCic0NrGSWwAjA8g0/UJjC5CFzKPE/AjYyT90lq8HcEv4sPNqsZAplbSZJ4YLUU5ldzmSeXWYKJexjWMiwkQlZD2bVuEwha9ksdShZAiM65CmbpQ4lZlH4eeZMkrQCX3rwa5l2dpkqlLCNsdPmqbtEh6zChnYoYRljMArrmBBd4NXikoU0ZTPtULIERrIgwkbKsplWKEW4uLTAEhjJBJZ7uGxB93RgrVDy1F2SlzSnA7cMJUtgxASV2aXezWYbhlKEi0kKF8QMusLGhqFkCYyYRqds1jSULIGRItCZXTYMJRajePePDnMmScxzeLBXzgZoJmw0DCWG5LCIeeouKQJ8FcRQHZcyNKIulFiEYjHKm8BIkeAyBnwlbFQ2qwslS2DEFs3KZmtCCVu4c0c7S2DEClge4nKG9acDr4SyMpOc4UySWAVeLvxceLpVVkIpwkV/D4ULYhURNuSEjdrNZhJKlsBImawvm226ucxr73woFhAhZYLO1/tvvqz+B343iOAjuK8jAAAAAElFTkSuQmCC" />&nbsp;در صورتیکه قیمت x = 5 باشد</p>\r\n', '3', '5', '6', '7', '4', 'M', 9, 9, 'میرز', '2016-11-17'),
(22, '<p><img src="data:image/png;base64,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" style="height:137px; width:206px" /></p>\r\n', '6', '8', '9', '10', '3', 'E', 9, 9, 'میرزا', '2016-11-17'),
(24, '<div dir="rtl">حل معادله <span style="background-color:rgb(255, 255, 0)">ذیل&nbsp;</span> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOkAAAAlCAMAAACQwz4eAAAAAXNSR0IArs4c6QAAAGxQTFRFAAAAAAAAAAA6AABmADqQAGa2OgAAOgA6OgBmOjqQOpDbZgAAZgA6ZjqQZmZmZrb/kDoAkDoBkDo6kDpmkGaQkNvbkNv/tmYAtmY6tmZmtpCQtv//25A629uQ2/+22////7Zm/9uQ//+2///bCew6WwAAAAF0Uk5TAEDm2GYAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAZdEVYdFNvZnR3YXJlAE1pY3Jvc29mdCBPZmZpY2V/7TVxAAAC9ElEQVRoQ+1ZiVLcMAx1ClkoRwm0bFo2gBP//z/i+xYybvBuZnaHGSYgyXqW9PycJeT8Oe/At+/AdPmOrTH2kQXtOtwLi9r4/2y4KViRXhx8q/nn+3L7UOB3SiYTAnS524t0aVxC9jvAfkqQ8rloIGCiU6eqyYaohNPWSprUKsQ83pi+HcPaY63QpMZs+LGnshTz7pLPU8wmskLGRHKNe0wTNEglb9mAHCg9elHZ0/PwqxeEwf683T3nxsmZEFEq7xFGKopvA867ruuOjpQQUUY1f6JY2T6yJqopfQ+OQXyMo6mpanMwYJNuTRaZrw+GK6dM6wp7a6JOSs8jjhZ0LyFQwOMgFSOlMhJzlc3BmqhSOY/E2jLS5wGPg5R3JNcDnDGW+9er/b/cuedMZJfbx8ycqjZWpwwcEEBaoL9IIsCKd02ql7HryXhxYEOWOKwJLycfVO8xWoWrPjWysvZwwHxyZfqLRAKsGOgXDRNJkPUXg/z1jz50MXWitnHe9RQU02iIouRGXKsXmGSW0ukZmSUtsinL3X553fXLPUArWqnBIYLl19mXFBEYV7Gdk1kgUnmqCxKl+aOiJISfV3Okhmr8OfSTcBJOEtf4wH9e8kWFQuSbtj1SLZWBND0JJ6ov0hsVf3IeDeVLQFo4DtyiaKwTIzCuuRQYpAkAq7iQewanfn0/DkPo/XC/0l1KTKr+kMZlAy8O5YVhj3zisO51igs9dk+ue0OkplJgmlbCReJhc91r2pp61wy/1a3iws90KMSJMJLUX7yZvZuRf546xYWNKRgCIJbmjJS+kslnVifATCyjT8J3eoXkOiqtO1U5B2uUiKsSGzhxo8BQUsuEELpcUkuNc+FermZm5VN1sqKe1c6r4SgJpJm9+hXBJ3fzkuUb2mikgGRGE5E31lpnNPqqBgZpyVcR6cLqgKN1zqviwIP9H1KlWDeFFN+SnEX0vr4uSCsvLZ+q6FPO59/9JrjXyqcapMut0G+bOWVa9c55HUI+AO0cQCQN+UTaAAAAAElFTkSuQmCC" style="height:37px; width:233px" />&nbsp;<span style="color:rgb(255, 0, 0)">یکی از جوابات </span>میباشد</div>\r\n', '2', '4', '7', '9', '1', 'M', 9, 9, 'میرزا', '2016-11-12'),
(25, '<div dir="rtl">معادله ذیل <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIIAAAAnCAMAAAD0DGCSAAAAAXNSR0IArs4c6QAAAH5QTFRFAAAAAAAAAAA6AABmADqQAGa2OgAAOgA6OgBmOjqQOma2OpDbZgAAZgA6ZgBmZjqQZmYAZmY6Zma2ZpC2ZpDbZrb/kDoAkDpmkGaQkJA6kLaQkNvbkNv/tmYAtmY6tmZmtrZmtv//25A629uQ2/+22////7Zm/9uQ//+2///b2x/q8AAAAAF0Uk5TAEDm2GYAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAZdEVYdFNvZnR3YXJlAE1pY3Jvc29mdCBPZmZpY2V/7TVxAAACC0lEQVRYR+1Xa1fCMAztmAOVIYpuqKzoJvTx//+gSctYOzbco1iPh37ZYUvSm5ubNhByXf+LARYMXc54KBJnoQYGkuu88gRGbvYDAw134/eVL7/bi9g9KSKeZAZAsTB/wQc2J8SwsUgx/Iox7DDL+QTCFiFVNi3K4NMxEIrIrFIdglhi7Y82BXDSsOT6cwwEmlBDYwYEqDwh/AV3LG0AAWvSQpFonvg0CN/AAJ6BldlZLYqHx4TPlABkejgBlDpoEEAwRXxpg5HxZX2xSJeKTxPCwBmfP/SyuReaGzI3C0EjotVXs6mDFQ85QNitZAqZAxb17LGwzAcW0MuEAAmJFb6s2dSjF5q8SIUBWyNcJyAU2a60ZEKAbLAlUQqWTVNcLAS/zRWh+Oyx0IUZ9bU6goVPqIq6TSuEWSbTSbZ9BzaUlrst/pwG1tlkuolY6/ycjbYHoUJBaTDZpJAPVGZgj9odUYqgWypXqz/NAF4dIu53SrhNSL7uFpvDvHEqNLd7tUbDJm38OHQY7Oentrbv4V9K3NqmmiN8FUIsv2bZR6/j2jFRNMwheffDpmOYHcLB5NJ6h3RwH28i0zkMUwPvnPHbHyMUoU9B6d7Wc6GeTL0sNVmWk6kXBDIFBOVk6gUBoTg+lpOpFwgKwXEy9QEB/qUQss2ABTWZNl97FwUmYrwdoSnLyfSiu7kP/g0Amin4jx7S/AAAAABJRU5ErkJggg==" style="height:39px; width:130px" />&nbsp; <span style="font-size:16px">چند حل دارد</span></div>\r\n', '3', '5', '8', '7', '3', 'E', 8, 9, 'میرزا', '2016-11-17');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
`ID` int(11) NOT NULL,
  `Name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `L_Name` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `F_Name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `G_F_Name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Province` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Which_college` varchar(80) CHARACTER SET utf8 NOT NULL,
  `Year_leisure` int(4) NOT NULL,
  `Avg_scor` double NOT NULL,
  `Telephone_NO` varchar(10) CHARACTER SET utf8 NOT NULL,
  `Tazkira_NO` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `Photo` text CHARACTER SET utf8,
  `Date` date NOT NULL,
  `Scor_of_kankor` double DEFAULT NULL,
  `Which_department` varchar(50) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=100017 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`ID`, `Name`, `L_Name`, `F_Name`, `G_F_Name`, `Province`, `Which_college`, `Year_leisure`, `Avg_scor`, `Telephone_NO`, `Tazkira_NO`, `Photo`, `Date`, `Scor_of_kankor`, `Which_department`) VALUES
(100000, 'عبدلفتاح', 'نصرت', 'بسم الله', 'نصرالله', 'کندز', 'atvi', 1392, 92, '0792989103', '300878', 'assets/bootstrap/image/student/9f44a38d474bd0bf1f6811589c4bdfdc.jpeg', '2016-11-15', 89, 'it'),
(100001, 'عبیدالله', 'نصرت', 'بسم الله', 'نصرالله', 'کندز', 'atvi', 1395, 92, '0792919098', '896709', 'assets/bootstrap/image/student/313b5a87e768f287b4cbc2b4b704e4f7.jpeg', '2016-11-15', 301, 'ce'),
(100002, 'فرهاد', 'علمی', 'عبدالله', 'عبدالخالق', 'فاریاب', 'تکنالوژی افغان', 1395, 94, '0790123456', '893456', 'assets/bootstrap/image/student/01535c7e180db7d95f10302bd6111c0f.jpeg', '2016-11-15', 290, 'cis'),
(100012, 'عبدلغفور', 'عتماد', 'حیدر', 'احمد', 'غور', 'تکنالوژی افغان', 1395, 91.4, '0790123456', '563478', 'assets/bootstrap/image/student/60f705452282f4097ea2ae9327961911032202.jpeg', '2016-11-17', 301.4, ''),
(100016, 'امین', 'جلال', 'کمالدین', 'عبدالله', 'فاریاب', 'atvi', 1395, 91.4, '0789234567', '672342', 'assets/bootstrap/image/student/60f705452282f4097ea2ae9327961911032412.jpeg', '2016-11-17', 301.3, '');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
`ID` int(11) NOT NULL,
  `Name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Date` date NOT NULL,
  `Add_by` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`ID`, `Name`, `Date`, `Add_by`) VALUES
(8, 'ریاضیات عالی 1', '2016-10-12', 1),
(9, 'ریاضیات عالی 2', '2016-11-17', 9),
(10, 'تاریخ', '2016-10-22', 9),
(11, 'جغرافیه', '2016-10-22', 9),
(12, 'دینی', '2016-10-22', 9),
(13, 'دری', '2016-10-22', 9),
(14, 'پشتو', '2016-10-22', 9),
(15, 'جیولوژی', '2016-11-17', 9);

-- --------------------------------------------------------

--
-- Table structure for table `subject_detail`
--

CREATE TABLE IF NOT EXISTS `subject_detail` (
`ID` int(11) NOT NULL,
  `Subject_id` int(11) NOT NULL,
  `Ques_count` int(11) DEFAULT NULL,
  `Form_ID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=115 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subject_detail`
--

INSERT INTO `subject_detail` (`ID`, `Subject_id`, `Ques_count`, `Form_ID`) VALUES
(97, 8, 10, 69),
(98, 9, 10, 69),
(99, 8, 5, 70),
(100, 9, 5, 70),
(101, 8, 10, 71),
(102, 9, 10, 71),
(103, 8, NULL, 72),
(104, 9, NULL, 72),
(105, 8, NULL, 73),
(106, 8, 10, 74),
(107, 8, 10, 75),
(108, 9, 10, 75),
(109, 8, 5, 76),
(110, 9, 5, 76),
(111, 8, 10, 77),
(112, 9, 10, 77),
(113, 8, 50, 1),
(114, 9, 50, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
`ID` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(80) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Date` date NOT NULL,
  `Name` varchar(255) NOT NULL,
  `F_Name` varchar(255) NOT NULL,
  `Telephone_NO` int(11) NOT NULL,
  `User_level` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`ID`, `Username`, `Password`, `Email`, `Date`, `Name`, `F_Name`, `Telephone_NO`, `User_level`) VALUES
(1, 'nasrat', '0f837ae5d0ed640dfd615c4ea21d5f5c', 'fatah.nasrat@gmail.com', '2016-04-21', '', '', 0, ''),
(7, 'fatah', '0f837ae5d0ed640dfd615c4ea21d5f5c', 'fatah.nasrat@yahoo.com', '2016-04-21', '', '', 0, ''),
(8, 'admin', '0f837ae5d0ed640dfd615c4ea21d5f5c', 'admin@gmail.com', '2016-04-21', '', '', 0, ''),
(9, 'nasrat', '912ec803b2ce49e4a541068d495ab570', 'asdf@gmail.com', '2016-09-23', 'fatah', 'nasrat', 1234566, 'admin_level'),
(10, 'fatah', 'e7f0091c12ac7436212046ba9b2d5c87', 'fatah.nasrat@gmail.com', '2016-10-15', 'fatah', 'bismullah', 799009090, 'write_level'),
(11, 'ghafoor', 'd9d4823b96dc94bc6bdaa8a93dd93a67', 'ghafoor@gmail.com', '2016-11-17', 'ghafoor', 'haidre', 79298934, 'write_level');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ans_list`
--
ALTER TABLE `ans_list`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `cover_page`
--
ALTER TABLE `cover_page`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `form_created`
--
ALTER TABLE `form_created`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
 ADD PRIMARY KEY (`ID`), ADD KEY `Subject_ID` (`Subject_ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `subject_detail`
--
ALTER TABLE `subject_detail`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ans_list`
--
ALTER TABLE `ans_list`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=119;
--
-- AUTO_INCREMENT for table `cover_page`
--
ALTER TABLE `cover_page`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `form_created`
--
ALTER TABLE `form_created`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=100002;
--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=100017;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `subject_detail`
--
ALTER TABLE `subject_detail`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=115;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `question`
--
ALTER TABLE `question`
ADD CONSTRAINT `question_ibfk_1` FOREIGN KEY (`Subject_ID`) REFERENCES `subject` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
