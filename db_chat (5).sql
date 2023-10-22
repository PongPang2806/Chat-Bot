-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2023 at 08:11 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `building_`
--

CREATE TABLE `building_` (
  `id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `building_name` varchar(100) NOT NULL,
  `image_link` varchar(100) NOT NULL,
  `map_link` varchar(100) NOT NULL,
  `image_file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `building_`
--

INSERT INTO `building_` (`id`, `name`, `building_name`, `image_link`, `map_link`, `image_file`) VALUES
(1, 'อาคารบริหาร', 'อาคาร 1', 'https://www.csc.ku.ac.th/th/wp-content/uploads/2016/09/Panorama4-351x185.jpg', 'https://goo.gl/maps/p5FWHYcDC1rYJ6A68', '1.jpg'),
(2, 'อาคารเรียนรวม', 'อาคาร 2', 'https://www.csc.ku.ac.th/th/wp-content/uploads/2016/09/bu2-351x185.jpg', 'https://goo.gl/maps/rXv1DfuPxgxe4sV87', '2.jpg'),
(3, 'อาคารชุดพักอาศัย', 'อาคาร 3', 'https://www.csc.ku.ac.th/th/wp-content/uploads/2016/09/IMG_1379-351x185.jpg', 'https://goo.gl/maps/qsGQdnhSyLsXt6nA9', '3.jpg'),
(4, 'หอพักนิสิตชาย', 'อาคาร 4', 'https://www.csc.ku.ac.th/th/wp-content/uploads/2016/09/DSC02087-351x185.jpg', 'https://goo.gl/maps/F74PEwcCJfVBkGhJ8', '4.jpg'),
(5, 'หอพักนิสิตหญิง', 'อาคาร 5', 'https://www.csc.ku.ac.th/th/wp-content/uploads/2016/09/DSC_0093-351x185.jpg', 'https://goo.gl/maps/61JjcKmjWFsrAeTR7', '5.jpg'),
(6, 'อาคารปฏิบัติการรวม', 'อาคาร 6', 'https://www.csc.ku.ac.th/th/wp-content/uploads/2016/09/P1020078-351x185.jpg', 'https://goo.gl/maps/h2N6TGWdSgFXQ9zh6', '6.jpg'),
(7, 'อาคารวิทยาศาสตร์และเทคโนโลยี', 'อาคาร 7', 'https://www.csc.ku.ac.th/th/wp-content/uploads/2016/09/goody-67-351x185.jpg', 'https://goo.gl/maps/bTsSsSiW42NEGvyo8', '7.jpg'),
(8, 'อาคารปฏิบัติการวิศวกรรมเครื่องกล/เทคโนโลยีการอาหาร', 'อาคาร 8 ', 'https://www.csc.ku.ac.th/th/wp-content/uploads/2016/09/DSC00518-351x185.jpg', 'https://goo.gl/maps/mkdiFCvEvaYLj8m57', '8.jpg'),
(9, 'อาคารเทคโนโลยีสารสนเทศ', 'อาคาร 9', 'https://www.csc.ku.ac.th/th/wp-content/uploads/2016/09/P1020791-351x185.jpg', 'https://goo.gl/maps/FJ5nxG7FcykRUbwP7', '9.jpg'),
(10, 'โรงอาหารกลาง', 'อาคาร 10', 'https://www.csc.ku.ac.th/th/wp-content/uploads/2016/09/P1010738-351x185.jpg', 'https://goo.gl/maps/RrGD47UENRFm5Dz27', '10.jpg'),
(11, 'โรงกรองน้ำและหอวิทยาเขต', 'อาคาร 11', 'https://www.csc.ku.ac.th/th/wp-content/uploads/2016/09/DSC_01091-351x185.jpg', 'https://goo.gl/maps/7KxiZcXAPhacwpd3A', '11.jpg'),
(12, 'อาคารสนามกีฬา', 'อาคาร 12', 'https://www.csc.ku.ac.th/th/wp-content/uploads/2016/09/IMG_1191-351x185.jpg', 'https://goo.gl/maps/EXGJpdSpdi5zv6Qy8', '12.jpg'),
(13, 'พิพิธภัณฑ์องค์ความรู้', 'อาคาร 13', 'https://www.csc.ku.ac.th/th/wp-content/uploads/2016/09/IMG_9398-351x185.jpg', 'https://goo.gl/maps/mUSEWSjsxPiXrGpw9', '13.jpg'),
(14, 'อาคารวิทยาเขตเฉลิมพระเกียรติ', 'อาคาร 14', 'https://www.csc.ku.ac.th/th/wp-content/uploads/2016/09/goody-78-351x185.jpg', 'https://goo.gl/maps/dvpnZFQnE9WTVZ6G7', '14.jpg'),
(15, 'อาคารถิ่นมันในพุทธธรรม', 'อาคาร 15', 'https://www.csc.ku.ac.th/th/wp-content/uploads/2016/09/DSC_01031-351x185.jpg', 'https://goo.gl/maps/R6HJNR9JwK7Bfc6c7', '15.jpg'),
(16, 'อาคารสถานพยาบาล', 'อาคาร 16', 'https://www.csc.ku.ac.th/th/wp-content/uploads/2016/09/goody-3-351x185.jpg', 'https://goo.gl/maps/ehSWrdHPEuNb2j4E6', '16.jpg'),
(17, 'อาคารชุดพักอาศัยบุคลากร 2', 'อาคาร 17', 'https://www.csc.ku.ac.th/th/wp-content/uploads/2016/09/DSC_0148-351x185.jpg', 'https://goo.gl/maps/toD2kve9LST6jhnS6', '17.jpg'),
(18, 'หอพักนิสิตหญิงตาลฟ้า', 'อาคาร 18', 'https://www.csc.ku.ac.th/th/wp-content/uploads/2016/09/DSC_0184-351x185.jpg', 'https://goo.gl/maps/2Q4sSQfFfwDbzgvU9', '18.jpg'),
(19, 'อาคารปฏิบัติการด้านวิทยาศาสตร์การกีฬา', 'อาคาร 19 ', 'https://www.csc.ku.ac.th/th/wp-content/uploads/2021/02/DJI_00173-351x185.jpg', 'https://goo.gl/maps/4SwKXtqnKEgZcS6L9', '19.jpg'),
(20, 'อาคารปฏิบัติการด้านวิทยาศาสตร์สุขภาพ', 'อาคาร 20', 'https://www.csc.ku.ac.th/th/wp-content/uploads/2021/02/DJI_002031-351x185.jpg', 'https://goo.gl/maps/BJRTWYhcuSkfT4RC7', '20.jpg'),
(21, 'อาคารปฏิบัติการด้านทรัพยากรสิ่งแวดล้อม', 'อาคาร 21', 'https://www.csc.ku.ac.th/th/wp-content/uploads/2021/02/DJI_002031-351x185.jpg', 'https://goo.gl/maps/wmaTL5HKufbmSpft8', '21.jpg'),
(22, 'อาคารปฏิบัติการและวิจัยทางวิทยาศาสตร์', 'อาคาร 22 ', 'https://www.csc.ku.ac.th/th/wp-content/uploads/2021/02/IMG_9606-702x336.jpg', 'https://goo.gl/maps/buQb8mTSqjT43QjcA', '22.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `conversation_history`
--

CREATE TABLE `conversation_history` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `text` varchar(255) NOT NULL,
  `intent` varchar(255) NOT NULL,
  `datetime` datetime NOT NULL,
  `botResponse` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `conversation_history`
--

INSERT INTO `conversation_history` (`id`, `user_id`, `text`, `intent`, `datetime`, `botResponse`) VALUES
(308, 0, '18', 'building18', '2023-08-26 17:57:27', ''),
(309, 0, 'ไปอ่างสกล', 'location21', '2023-08-26 17:58:49', ''),
(310, 0, 'ไปอ่างสกล', 'place9', '2023-08-26 17:59:37', ''),
(311, 0, 'ฟาร์มพืช', 'place6', '2023-08-26 18:00:00', ''),
(312, 0, 'อาคาร7', 'building7', '2023-09-17 16:32:30', ''),
(313, 0, 'อาคารเรียนรวม', 'number2', '2023-09-17 16:34:09', ''),
(314, 0, 'อาคารเรียนรวม', 'number2', '2023-09-17 16:34:10', ''),
(315, 0, 'อาคารเรียนรวม', 'number2', '2023-09-17 16:34:24', ''),
(316, 0, 'อาคารเรียนรวม', 'number2', '2023-09-17 16:34:25', ''),
(317, 0, 'อาคารบริหาร', 'number1', '2023-09-17 16:35:16', ''),
(318, 0, 'อาคารบริหาร', 'number1', '2023-09-17 16:35:17', ''),
(319, 0, 'อาคาร7อยู่ไหน', 'location7', '2023-09-17 16:37:53', ''),
(320, 0, 'อาคาร22อยู่ไหน', 'location22', '2023-09-17 16:38:12', ''),
(321, 0, 'บริหาร', 'number1', '2023-09-17 16:38:29', ''),
(322, 0, 'บริหาร', 'number1', '2023-09-17 16:38:30', ''),
(323, 0, 'ร้านอาหารตามสั่ง', 'pharmacy', '2023-09-17 16:39:33', ''),
(324, 0, 'ร้านอาหารตามสั่ง', 'pharmacy', '2023-09-17 16:39:34', ''),
(325, 0, 'ร้านอาหารฮาลาล', 'halalfood', '2023-09-17 16:39:42', ''),
(326, 0, 'ร้านอาหารฮาลาล', 'halalfood', '2023-09-17 16:39:43', ''),
(327, 0, 'ร้านก๋วยเตี๋ยว', 'noodles', '2023-10-04 17:22:12', ''),
(328, 0, '1', 'number7', '2023-10-04 17:22:42', ''),
(329, 0, '8', 'number7', '2023-10-04 17:22:53', ''),
(330, 0, 'อาคาร1', 'building1', '2023-10-04 17:23:34', ''),
(331, 0, 'บริหาร', 'number1', '2023-10-04 17:23:54', ''),
(332, 0, 'ตึก8', 'location20', '2023-10-04 17:24:10', ''),
(333, 0, 'อาคาร7', 'location7', '2023-10-04 17:24:25', ''),
(334, 0, 'ลานพระพิรุณ', 'place1', '2023-10-04 17:24:48', ''),
(335, 0, 'CSC Sunflower Field', 'place9', '2023-10-04 17:24:58', ''),
(336, 0, 'BoxZone.s', 'location8', '2023-10-04 17:25:02', ''),
(337, 0, 'สวนเสลา-อินทนิลน้ำ', 'location8', '2023-10-04 17:25:04', ''),
(338, 0, 'สวนเสลา-อินทนิลน้ำ', 'location8', '2023-10-04 17:25:04', ''),
(339, 0, 'ฟาร์มพืช', 'place6', '2023-10-04 17:25:37', ''),
(340, 0, 'สวนเสลา-อินทนิลน้ำ', 'place2', '2023-10-04 17:25:44', ''),
(341, 0, 'อุทยานบัว', 'location8', '2023-10-04 17:26:01', ''),
(342, 0, 'อาคาร9', 'location9', '2023-10-04 17:26:22', ''),
(343, 0, 'อาคาร6', 'location6', '2023-10-05 08:30:27', ''),
(344, 0, 'อาคารบริหาร', 'number1', '2023-10-05 08:30:40', ''),
(345, 0, 'อาคาร6', 'location6', '2023-10-05 08:30:54', ''),
(346, 0, 'อาคาร1', 'building1', '2023-10-05 08:57:35', ''),
(347, 0, 'โอเคชั่นอาคาร1', 'building1', '2023-10-05 08:57:51', ''),
(348, 0, 'อาคาร1', 'location1', '2023-10-05 08:58:18', ''),
(349, 0, 'อาคาร7', 'building7', '2023-10-05 09:15:27', ''),
(350, 0, 'ร้านอาหารตามสั่ง', 'noodles', '2023-10-05 09:16:01', ''),
(351, 0, 'ร้านอาหารฮาลาล', 'halalfood', '2023-10-05 09:16:04', ''),
(352, 0, 'อาคาร7', 'building7', '2023-10-06 18:06:14', ''),
(353, 0, 'อาคาร1', 'building1', '2023-10-06 18:06:30', ''),
(354, 0, 'อาคาร2', 'location2', '2023-10-06 18:09:31', ''),
(355, 0, 'อาคาร3', 'location3', '2023-10-06 18:11:21', ''),
(356, 0, 'อาคาร4', 'location4', '2023-10-06 18:13:09', ''),
(357, 0, 'อาคาร5', 'location5', '2023-10-06 18:13:38', ''),
(358, 0, 'อาคาร6', 'location6', '2023-10-06 18:14:32', ''),
(359, 0, 'อาคาร7', 'location7', '2023-10-06 18:15:18', ''),
(360, 0, '8', 'location12', '2023-10-06 18:15:40', ''),
(361, 0, 'อาคาร8', 'location8', '2023-10-06 18:16:06', ''),
(362, 0, 'อาคาร9', 'location9', '2023-10-06 18:16:36', ''),
(363, 0, 'อาคาร 9', 'location9', '2023-10-06 18:16:43', ''),
(364, 0, 'อาคาร11', 'location8', '2023-10-06 18:17:29', ''),
(365, 0, 'อาคาร 11', 'location8', '2023-10-06 18:17:42', ''),
(366, 0, 'อาคาร11', 'location8', '2023-10-06 18:18:41', ''),
(367, 0, 'อาคาร11', 'number8', '2023-10-06 18:20:30', ''),
(368, 0, 'อาคาร11', 'location8', '2023-10-06 18:21:07', ''),
(369, 0, 'ไปอาคาร11', 'location11', '2023-10-06 18:21:36', ''),
(370, 0, 'อาคาร8', 'location8', '2023-10-06 18:21:58', ''),
(371, 0, 'ชื่อ13', 'building13', '2023-10-06 18:22:30', ''),
(372, 0, 'ไปอาคาร14', 'location14', '2023-10-06 18:23:07', ''),
(373, 0, 'ไปอาคาร15', 'location15', '2023-10-06 18:23:41', ''),
(374, 0, 'ไปอาคาร16', 'location16', '2023-10-06 18:23:52', ''),
(375, 0, 'ไปอาคาร17', 'location17', '2023-10-06 18:24:15', ''),
(376, 0, 'ไปอาคาร18', 'location18', '2023-10-06 18:24:31', ''),
(377, 0, 'ไปอาคาร19', 'location19', '2023-10-06 18:24:52', ''),
(378, 0, 'ไปอาคาร20', 'location20', '2023-10-06 18:25:17', ''),
(379, 0, 'ไปอาคาร21', 'location21', '2023-10-06 18:25:44', ''),
(380, 0, 'ไปอาคาร20', 'location20', '2023-10-06 18:25:55', ''),
(381, 0, 'ไปอาคาร22', 'location22', '2023-10-06 18:26:36', ''),
(382, 0, 'ตึก1', 'building1', '2023-10-06 18:27:05', ''),
(383, 0, 'ตึก3', 'building3', '2023-10-06 18:27:36', ''),
(384, 0, 'อาคาร3', 'building3', '2023-10-06 18:29:06', ''),
(385, 0, 'อาคาร5', 'location5', '2023-10-06 18:29:25', ''),
(386, 0, 'อาคาร6', 'location6', '2023-10-06 18:29:30', ''),
(387, 0, 'อาคาร7', 'location7', '2023-10-06 18:29:41', ''),
(388, 0, 'ชื่ออาคาร5', 'location5', '2023-10-06 18:34:14', ''),
(389, 0, 'อาคาร5', 'building5', '2023-10-06 18:34:42', ''),
(390, 0, 'อาคาร6', 'building6', '2023-10-06 18:36:03', ''),
(391, 0, 'อาคาร8', 'building8', '2023-10-06 18:36:55', ''),
(392, 0, 'อาคาร7', 'building7', '2023-10-06 18:37:33', ''),
(393, 0, 'อาคาร5', 'building5', '2023-10-06 18:37:49', ''),
(394, 0, 'อาคาร7', 'building7', '2023-10-06 18:38:16', ''),
(395, 0, 'อาคาร10', 'building10', '2023-10-06 18:39:13', ''),
(396, 0, 'อาคาร11', 'building11', '2023-10-06 18:39:49', ''),
(397, 0, 'อาคาร11', 'building11', '2023-10-06 18:40:33', ''),
(398, 0, 'อาคาร13', 'building13', '2023-10-06 18:42:12', ''),
(399, 0, 'อาคาร14', 'building14', '2023-10-06 18:42:28', ''),
(400, 0, 'อาคาร15', 'building15', '2023-10-06 18:42:40', ''),
(401, 0, 'อาคาร16', 'building16', '2023-10-06 18:43:04', ''),
(402, 0, 'อาคาร17', 'building17', '2023-10-06 18:43:32', ''),
(403, 0, 'อาคาร18', 'building18', '2023-10-06 18:43:52', ''),
(404, 0, 'อาคาร19', 'building19', '2023-10-06 18:43:59', ''),
(405, 0, 'อาคาร20', 'building20', '2023-10-06 18:44:16', ''),
(406, 0, '21', 'building21', '2023-10-06 18:44:18', ''),
(407, 0, '22', 'building22', '2023-10-06 18:44:39', ''),
(408, 0, 'สนามเดบต', 'location22', '2023-10-06 18:46:24', ''),
(409, 0, 'หอพักตาลฟ้า', 'number8', '2023-10-06 18:47:11', ''),
(410, 0, 'หอพัก', 'number8', '2023-10-06 18:47:21', ''),
(411, 0, 'หอพักชาย', 'number4', '2023-10-06 18:47:42', ''),
(412, 0, 'โรงอาหาร', 'number8', '2023-10-06 18:48:01', ''),
(413, 0, 'โรงอาหาร', 'number8', '2023-10-06 18:51:00', ''),
(414, 0, 'อาคารโรงอาหารคือเลข', 'number10', '2023-10-06 18:51:26', ''),
(415, 0, 'อ่างสกล/ท่าน้ำพงษ์ศักดิ์สุริยวนากุล', 'place9', '2023-10-06 18:53:05', ''),
(416, 0, 'อ่างสกล/ท่าน้ำพงษ์ศักดิ์สุริยวนากุล', 'place9', '2023-10-06 18:53:16', ''),
(417, 0, 'อุทยานบัว', 'place10', '2023-10-06 18:53:45', ''),
(418, 0, 'สถานที่นั่งเล่น', 'place1', '2023-10-06 18:54:59', ''),
(419, 0, 'CSC Sunflower Field', 'location8', '2023-10-06 18:55:28', ''),
(420, 0, 'CSC Sunflower Field', 'place9', '2023-10-06 18:55:50', ''),
(421, 0, 'BoxZone.s', 'place7', '2023-10-06 18:56:06', ''),
(422, 0, 'สวนหลังมอ', 'place2', '2023-10-06 18:57:26', ''),
(423, 0, 'โรงเรือนแกะ', 'place5', '2023-10-06 18:59:18', ''),
(424, 0, 'อุทยานบัว', 'place10', '2023-10-06 18:59:42', ''),
(425, 0, 'ร้านขายยา', 'pharmacy', '2023-10-06 19:00:45', ''),
(426, 0, 'ร้านขายยา', 'pharmacy', '2023-10-06 19:00:45', ''),
(427, 0, 'ร้านน้ำปั่น-ของหวาน', 'dessert-smoothie', '2023-10-06 19:01:44', ''),
(428, 0, 'ร้านน้ำปั่น-ของหวาน', 'dessert-smoothie', '2023-10-06 19:02:00', ''),
(429, 0, 'หาร้านยา', 'location8', '2023-10-06 19:02:53', ''),
(430, 0, 'ร้านอาหารตามสั่ง', 'noodles', '2023-10-06 19:03:23', ''),
(431, 0, 'ร้านอาหารตามสั่ง', 'noodles', '2023-10-06 19:03:39', ''),
(432, 0, 'ห้องทะเบียน', 'room13', '2023-10-06 19:04:19', ''),
(433, 0, 'สหกิจ', 'room4', '2023-10-06 19:05:11', ''),
(434, 0, 'อาคารพยาบาล', 'location8', '2023-10-06 19:05:40', ''),
(435, 0, 'อาคารพยาบาล', 'number8', '2023-10-06 19:06:49', ''),
(436, 0, 'อาคารพยาบาล', 'number8', '2023-10-06 19:07:11', ''),
(437, 0, 'อาคารเรียนรวม', 'number2', '2023-10-06 19:09:02', ''),
(438, 0, 'ลานพระพิรุณ', 'place1', '2023-10-06 19:09:21', ''),
(439, 0, 'ร้านค้าแนะนำ', 'location8', '2023-10-06 19:10:00', ''),
(440, 0, 'ร้านค้า', 'location8', '2023-10-06 19:10:28', ''),
(441, 0, 'อาคารวิทยาศาสตร์อยู่ที่ไหน', 'number7', '2023-10-06 19:11:39', ''),
(442, 0, 'อาคารเรียนแลป', 'number2', '2023-10-06 19:11:56', ''),
(443, 0, 'อาคารเรียนแลป', 'number2', '2023-10-06 19:12:15', ''),
(444, 0, 'ห้องระพี', 'room12', '2023-10-06 19:14:49', ''),
(445, 0, 'ห้องสว่างแดนดิน', 'room10', '2023-10-06 19:15:16', ''),
(446, 0, 'ห้องพยาบาล', 'room9', '2023-10-06 19:15:43', ''),
(447, 0, 'หอนนทรีย์', 'number8', '2023-10-06 19:16:10', ''),
(448, 0, 'หอ', 'number8', '2023-10-06 19:16:19', ''),
(449, 0, 'สถานที่นั่งเล่น', 'place1', '2023-10-06 19:17:00', ''),
(450, 0, 'อาคาร7', 'building7', '2023-10-12 16:11:04', ''),
(451, 0, 'อาคาร 7', 'building7', '2023-10-12 16:34:39', ''),
(452, 0, 'ร้านอาหารตามสั่ง', 'noodles', '2023-10-12 16:35:12', ''),
(453, 0, 'ร้านอาหารฮาลาล', 'halalfood', '2023-10-12 16:35:21', '');

-- --------------------------------------------------------

--
-- Table structure for table `dessert_`
--

CREATE TABLE `dessert_` (
  `id` int(20) NOT NULL,
  `name` varchar(250) NOT NULL,
  `map_link` varchar(250) NOT NULL,
  `image_link` varchar(250) NOT NULL,
  `image_file` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `dessert_`
--

INSERT INTO `dessert_` (`id`, `name`, `map_link`, `image_link`, `image_file`) VALUES
(1, 'ไผ่หวาน ', 'https://goo.gl/maps/9uC7nAM5MsphHsdB6', '1', '1.jpg'),
(2, 'ร้านฟองนม', 'https://goo.gl/maps/zkQib3qsG6Q1RaHf7', '2', '2.jpg'),
(3, 'COFFEE BEE', 'https://goo.gl/maps/N6NNSQ6QaZnyp3uTA', '3', '3.jpg'),
(4, 'ภูหวาน', 'https://goo.gl/maps/mShkAZ6Qo9UVGfdt5', '4', '4.jpg'),
(5, 'ชงดึกชงดื่น', 'https://goo.gl/maps/JBMtTne6RcnggHqK6', '5', '5.jpg'),
(6, 'Café Amazon', 'https://goo.gl/maps/TMoMBfgfLyYS7M6C8', '6', '6.jpg'),
(7, 'Checkpoint Fresh Cafe', 'https://goo.gl/maps/M1tRVbaWbeDyvRNTA', '7', '7.jpg'),
(8, 'ฮูกคาเฟ่ Hook cafe\'', 'https://maps.app.goo.gl/W75A1aNbQms1QHMp8', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `grilled_shabu`
--

CREATE TABLE `grilled_shabu` (
  `id` int(30) NOT NULL,
  `name` varchar(250) NOT NULL,
  `map_link` varchar(250) NOT NULL,
  `image_link` varchar(250) NOT NULL,
  `image_file` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `grilled_shabu`
--

INSERT INTO `grilled_shabu` (`id`, `name`, `map_link`, `image_link`, `image_file`) VALUES
(1, 'ตุ๊ ปุ๊ หมูกระทะ', 'https://goo.gl/maps/F8T9nD9xzfvxuawD8', '1', '1.jpg'),
(2, 'Me หมูกระทะ', 'https://goo.gl/maps/7W7ikP88bvvqKija9', '2', '2.jpg'),
(3, 'จุ่ม ดีย์', 'https://goo.gl/maps/T74ugg5UXpg2Lufy5', '3', '3.jpg'),
(4, 'ร้านแจ่วฮ้อน​ BigMilk', 'https://goo.gl/maps/94jmHhutVdDrvi1m9', '4', '4.jpg'),
(5, 'ชายกะชาม ', 'https://goo.gl/maps/Zn7syeicxg2rqTHD9', '5', '5.jpg'),
(6, 'จ.แจ จิ้มจุ่ม', 'https://goo.gl/maps/Vighzqdddvd3nTgk9', '234', '234'),
(7, 'ร้านล่ะเบ๋อ', 'https://goo.gl/maps/QQdPPsY9TXTP2nTF7', '234', '789'),
(8, 'หมูกระทะ at ห้องสมุด', 'https://goo.gl/maps/aQ3BuCAicgLJfjB58', '234', '231'),
(9, 'ดวงแข เนื้อย่าง สาขา 1', 'https://goo.gl/maps/NdZAZxtwkGt7zweH6', '123', '567'),
(10, 'สามพี่น้องหมูกระทะ', 'https://maps.app.goo.gl/9PFa5aZE53ovcqYG9', '1', '22.jpg'),
(11, 'ปาร์ตี้หมูกระทะบุฟเฟต์', 'https://maps.app.goo.gl/udq8B24Gbb83pA2P6', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `location_`
--

CREATE TABLE `location_` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `map_link` varchar(250) NOT NULL,
  `image_link` varchar(250) NOT NULL,
  `image_file` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `location_`
--

INSERT INTO `location_` (`id`, `name`, `map_link`, `image_link`, `image_file`) VALUES
(1, 'ลานพระพิรุณ', 'https://goo.gl/maps/3q5DtYpqoxR4YGUD7', 'https://shorturl.asia/r32tO', 'พระพิรุณ.jpg'),
(2, 'สวนเสลา-อินทนิลน้ำ', 'https://goo.gl/maps/BogtK1DqJmQdt4bf9', 'https://shorturl.asia/7XqFx                                                                                                                                                                                       ', 'สวนเสลา.jpg'),
(3, 'ลานปรัชญา', 'https://goo.gl/maps/EoMm5iEVJwRw2YZM7', 'https://shorturl.asia/Sc0Nn', 'ลานปรัชญๅ.jpg'),
(4, 'อุทยานธรรมชาติ วิทยาป่าเต็งรัง', 'https://goo.gl/maps/rvL4eBosPiFW4Ku39', 'https://shorturl.asia/S9Mn0', 'ป่าเต็งรัง.jpg'),
(5, 'โรงเรือนแกะ', 'https://goo.gl/maps/HtBPyGqfvAhfGDVLA', 'https://shorturl.asia/HVd5r', 'แกะ.jpg'),
(6, 'ฟาร์มพืช', 'https://goo.gl/maps/xYY88KujhkyzYphF8', 'https://shorturl.asia/4bOeM', 'ฟาร์มพืช.jpg'),
(7, 'BoxZone.s', 'https://goo.gl/maps/WaTXJ1GerFMvT87S9', 'https://shorturl.asia/FAZWG', 'Box.jpg'),
(8, 'CSC Sunflower Field', 'https://goo.gl/maps/BMUNj5J6kMiDjoQW9', 'https://shorturl.asia/7WIj2', 'ตะวัน.jpg'),
(9, 'อ่างสกล/ท่าน้ำพงษ์ศักดิ์สุริยวนากุล', 'https://goo.gl/maps/m1iuEdiLmP9e8UuSA', 'https://shorturl.asia/WziRZ', 'อ่างสกล.jpg'),
(10, 'อุทยานบัว', 'https://goo.gl/maps/ME8KjDh9VNH75BgZ7', 'https://shorturl.asia/pGylR', 'สวนบัว.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `muslim_`
--

CREATE TABLE `muslim_` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `map_link` varchar(250) NOT NULL,
  `image_link` varchar(250) NOT NULL,
  `image_file` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `muslim_`
--

INSERT INTO `muslim_` (`id`, `name`, `map_link`, `image_link`, `image_file`) VALUES
(1, 'ร้านอาหารอิสลามมะห์มาเรียม', 'https://goo.gl/maps/C1MeUA6RjRoxnwTA6', '123.000', '000.png'),
(2, 'ครัวอามีนะห์ นาอ้อย(สกลนคร)', 'https://goo.gl/maps/uAhondBCxUovp2R68', '', '455'),
(3, 'ร้านก๋วยเตี๋ยว​อิสลามน้องฟาติน', 'https://maps.app.goo.gl/DDBKTTQJnKRipUkG7', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `noodles_`
--

CREATE TABLE `noodles_` (
  `id` int(30) NOT NULL,
  `name` varchar(250) NOT NULL,
  `map_link` varchar(250) NOT NULL,
  `image_link` varchar(250) NOT NULL,
  `image_file` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `noodles_`
--

INSERT INTO `noodles_` (`id`, `name`, `map_link`, `image_link`, `image_file`) VALUES
(1, 'ร้านยาหน้ามอ (ยาชุมชนเภสัชกร)', 'https://goo.gl/maps/1gk1PjNAmETU1YM770', '234', '567'),
(2, 'ร้านเตี๋ยวเตี๋ยว', 'https://goo.gl/maps/ZqKWAPFZZVVRu8f18', '123', '456'),
(3, 'ร้านอาหารจันทร์มณี', 'https://goo.gl/maps/mtbcmMrm7PbykzqU9', '156', '798'),
(4, 'ร้านก๋วยเตี๋ยวแคป หมูยายเพ็ญ สาขา1', 'https://goo.gl/maps/HLmgZ2ouMKLNeEZx8', '213', '897'),
(5, 'ก๋วยเตี๋ยว​บ้านบ้าน', 'https://goo.gl/maps/uRpY7jRfwn1ynyxW8', '324', '231'),
(6, 'ล้านรัก ก๋วยเตี๋ยวสูตรโบราณ อร่อยที่สุด ท่าแร่', 'https://maps.app.goo.gl/3JFCrE46NbyHJDAR8', '4', '16.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy_`
--

CREATE TABLE `pharmacy_` (
  `id` int(30) NOT NULL,
  `name` varchar(250) NOT NULL,
  `map_link` varchar(250) NOT NULL,
  `image_link` varchar(250) NOT NULL,
  `image_file` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `pharmacy_`
--

INSERT INTO `pharmacy_` (`id`, `name`, `map_link`, `image_link`, `image_file`) VALUES
(1, 'ร้านยาหน้ามอ (ยาชุมชนเภสัชกร)', 'https://goo.gl/maps/1gk1PjNAmETU1YM77', '222', '333'),
(2, 'ร้านขายยาตั้งเจริญฟาร์มา', 'https://maps.app.goo.gl/J1oGK3okYzjobQYF6', '', ''),
(3, 'ร้านขายยา เสรีฟาร์มาซี', 'https://maps.app.goo.gl/KdCcwKNGwUC5KZrW8', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_`
--

CREATE TABLE `restaurant_` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `map_link` varchar(250) NOT NULL,
  `image_link` varchar(250) NOT NULL,
  `image_file` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `restaurant_`
--

INSERT INTO `restaurant_` (`id`, `name`, `map_link`, `image_link`, `image_file`) VALUES
(1, 'ครัวเจ๊แหม่ม อาหาร ตามสั่ง', 'https://goo.gl/maps/R3RAs5kfuUTFNNw57', '222', '777'),
(2, 'ร้านป้านกอาหารตามสั่ง', 'https://goo.gl/maps/h1u23wgco5iYr7wN9', '058', '654'),
(3, 'กล่อง กับข้าว ChaaGuChill', 'https://goo.gl/maps/HqvGXmiPAfigjG3UA', '453', '132'),
(4, 'ร้านข้าวเหนียวหมู ห่อ', 'https://goo.gl/maps/SheeFXzVMAJVA5cCA', '233', '455'),
(5, 'ร้านป้าอร อร่อยเด็ด!', 'https://goo.gl/maps/sYhH35m9Jd5VzLpt5', '232', '345'),
(6, 'ครัวรุ่งฟ้า', 'https://goo.gl/maps/VrRV7sL1UnvVTSjn9', '345', '789'),
(7, 'ณะณัว', 'https://maps.app.goo.gl/ijVDecH5T4rwVkLc7', '', ''),
(8, 'ร้านอาหารพรวนา', 'https://maps.app.goo.gl/qpGj3oSeN7oFHpXH9', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `room_`
--

CREATE TABLE `room_` (
  `id` int(30) NOT NULL,
  `name` varchar(250) NOT NULL,
  `map_link` varchar(250) NOT NULL,
  `image_link` varchar(250) NOT NULL,
  `image_file` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `room_`
--

INSERT INTO `room_` (`id`, `name`, `map_link`, `image_link`, `image_file`) VALUES
(1, 'ปฏิบัติการวิศวกรรมไฟฟ้า4', 'https://goo.gl/maps/bTsSsSiW42NEGvyo8', ' https://shorturl.asia/3ymiY', 'ฟ้าไฟ4.jpeg'),
(2, 'ปฏิบัติการวิศวกรรมไฟฟ้า2', 'https://goo.gl/maps/bTsSsSiW42NEGvyo8', 'https://shorturl.asia/HDAw4', 'ฟ้าไฟ2.jpeg'),
(3, 'ปฏิบัติการวิศวกรรมไฟฟ้า3', 'https://goo.gl/maps/bTsSsSiW42NEGvyo8', 'https://shorturl.asia/civqk', 'ไฟ 3.jpeg'),
(4, 'ฝึกงาน-สหกิจ', 'https://goo.gl/maps/bTsSsSiW42NEGvyo8', 'https://shorturl.asia/vjgrS', 'ฝึกงาน.jpeg'),
(5, 'งานวิชาการ-การเรียนการสอน', 'https://goo.gl/maps/bTsSsSiW42NEGvyo8', 'https://shorturl.asia/vjgrS', 'การเรียน.jpeg'),
(6, 'ห้องสาขาวิศวกรรมไฟฟ้าและคอมพิวเตอร์', 'https://goo.gl/maps/bTsSsSiW42NEGvyo8', ' https://shorturl.asia/A2kEz', 'คอม ไฟฟ้า.jpeg'),
(7, 'ปฏิบัติการจุลชีววิทยา', 'https://goo.gl/maps/bTsSsSiW42NEGvyo8', ' https://shorturl.asia/8mj5W', 'จุล.jpeg'),
(8, 'ห้องพรรณานิคม', 'https://goo.gl/maps/bTsSsSiW42NEGvyo8', ' https://shorturl.asia/TV7xG', 'พรรณา.jpeg'),
(9, 'ห้องกุสุมาลย์', 'https://goo.gl/maps/bTsSsSiW42NEGvyo8', 'https://shorturl.asia/SlpXj', 'กุล.jpeg'),
(10, 'ห้องสว่างแดนดิน', 'https://goo.gl/maps/bTsSsSiW42NEGvyo8', 'https://shorturl.asia/T79wF', 'สว่าง.jpeg'),
(11, 'ห้องแลปวิทยาศาสตร์', 'https://goo.gl/maps/buQb8mTSqjT43QjcA', 'https://shorturl.asia/YysR3', 'แลป.jpeg'),
(12, 'ห้องระพี สาคริก', 'https://shorturl.asia/B7Vmu', '123.000', 'รพี.jpeg'),
(13, 'งานทะเบียนและประมวลผล', 'https://goo.gl/maps/FJ5nxG7FcykRUbwP7', 'https://shorturl.asia/0Inxc', 'ทะเบียน.jpeg'),
(14, 'งานเทคโนโลยีสารสนเทศ', 'https://goo.gl/maps/FJ5nxG7FcykRUbwP7', 'https://shorturl.asia/tEYTC', 'สนเทศ.jpeg'),
(15, 'งานกิจการนิสิต กองบริหารวิชาการและนิสิต', 'https://goo.gl/maps/FJ5nxG7FcykRUbwP7', 'https://shorturl.asia/mo0LM', 'กิจการ.jpeg'),
(16, 'หน่วยแนะแนวและรับเข้า', 'https://goo.gl/maps/FJ5nxG7FcykRUbwP7', 'https://shorturl.asia/4DsJe', 'แนะแนว.jpeg'),
(17, 'งานกิจการนิสิต แนะแนวทุนการศึกษา', 'https://goo.gl/maps/FJ5nxG7FcykRUbwP7', 'https://shorturl.asia/U4xDq', 'กิจการงานนิสิต.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `urole` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `urole`, `created_at`) VALUES
(1, 'Ponchanistha', 'Sawangarom', 'a.1@email.com', '$2y$10$XMDM2I0J4WjO0TtOD5vNs.nZtzN6adsUUSaXwbSVnGo.CIhS9qQum', 'admin', '2023-04-18 21:51:54'),
(2, 'Ponchanistha', 'Sawangarom', 'a.2@email.com', '$2y$10$I5tmamI6bCyhl9881qEU6.lN00s47fqVC42E6MBaopIj.XTFKQDEi', 'admin', '2023-04-18 22:27:46'),
(7, 'Ponchanistha', 'Sawangarom', 'a.6@email.com', '123456', 'admin', '2023-08-05 11:44:00'),
(10, 'Nittaya', 'Muangnak', 'nittaya.mu@ku.th', '12345678', 'admin', '2023-09-20 04:53:22'),
(12, 'Thanaporn', 'Sirisuwan', 'pang@gmail.com', '$2y$10$RCg0sC49zn7kndnzEaN/SOMzud3H0hiylTPvLVaD9LqwN.LzwQZT.', 'admin', '2023-09-22 17:59:42'),
(13, 'Thanaporn', 'Sirisuwan', 'a.4@email.com', '$2y$10$URurPvhqfxf.vKlA9hmxaetTT61KEaZdSAWJwhoWBOV/b8hQ21usq', 'admin', '2023-09-22 18:56:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `building_`
--
ALTER TABLE `building_`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conversation_history`
--
ALTER TABLE `conversation_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dessert_`
--
ALTER TABLE `dessert_`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grilled_shabu`
--
ALTER TABLE `grilled_shabu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location_`
--
ALTER TABLE `location_`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `muslim_`
--
ALTER TABLE `muslim_`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `noodles_`
--
ALTER TABLE `noodles_`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pharmacy_`
--
ALTER TABLE `pharmacy_`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurant_`
--
ALTER TABLE `restaurant_`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_`
--
ALTER TABLE `room_`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `building_`
--
ALTER TABLE `building_`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `conversation_history`
--
ALTER TABLE `conversation_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=454;

--
-- AUTO_INCREMENT for table `dessert_`
--
ALTER TABLE `dessert_`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `grilled_shabu`
--
ALTER TABLE `grilled_shabu`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `location_`
--
ALTER TABLE `location_`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `muslim_`
--
ALTER TABLE `muslim_`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `noodles_`
--
ALTER TABLE `noodles_`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pharmacy_`
--
ALTER TABLE `pharmacy_`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `restaurant_`
--
ALTER TABLE `restaurant_`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `room_`
--
ALTER TABLE `room_`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
