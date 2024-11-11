-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2024 at 04:16 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `du_an_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `id` int(11) NOT NULL,
  `name_bank` varchar(255) NOT NULL,
  `num_bank` varchar(255) NOT NULL,
  `name_num` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id_bill` int(11) NOT NULL,
  `bill_code` varchar(255) DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  `id_pro` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `name_pro` varchar(255) NOT NULL,
  `full_name` varchar(55) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` int(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `payment` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1.Thanh toán khi nhận hàng 2.Chuyển khoản ngân hàng 3.Thanh toán online',
  `order_date` datetime NOT NULL,
  `total_amount` int(10) NOT NULL,
  `status` tinyint(4) NOT NULL COMMENT '0.Đơn hàng mới \r\n1.Đang xử lý\r\n2.Đang giao hàng\r\n3.Đã giao hàng',
  `status_pay` varchar(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id_bill`, `bill_code`, `id_user`, `id_pro`, `user_name`, `name_pro`, `full_name`, `address`, `phone`, `email`, `payment`, `order_date`, `total_amount`, `status`, `status_pay`) VALUES
(196, '39461', 29, 0, 'hanh2k4', '', 'Hoàng Anh', 'số 4 hào nam', 335248857, 'hung6fd@gmail.com', 1, '2024-04-05 04:55:08', 2400000, 0, '0'),
(197, '25986', 29, 0, 'hanh2k4', '', 'Hoàng anh', 'Hà Đông', 335248856, 'hung6fd@gmail.com', 1, '2024-04-06 12:35:55', 9700300, 3, '1'),
(198, '73486', 30, 0, 'hanh2k4', '', 'Hoàng Anh', 'Số 4 Hào Nam', 335248856, 'hung6fd@gmail.com', 1, '2024-04-10 08:48:16', 3200000, 3, '1'),
(199, '32591', 30, 0, 'hanh2k4', '', 'Hoàng Anh', 'Số 4 Hào Nam', 335248856, 'hung6fd@gmail.com', 1, '2024-04-10 09:28:29', 3300300, 0, '0'),
(200, '52938', 30, 0, 'hanh2k4', '', 'Hoàng Anh', 'Số 4 Hào Nam', 335248856, 'hung6fd@gmail.com', 1, '2024-04-11 12:11:29', 6400000, 3, '1'),
(201, '25893', 30, 0, 'hanh2k4', '', 'Hoàng Anh', 'Số 4 Hào Nam', 335248856, 'hung6fd@gmail.com', 2, '2024-04-11 10:01:46', 7200000, 0, '0'),
(202, '56374', 30, 0, 'hanh2k4', '', 'Hoàng Anh', 'Số 4 Hào Nam', 335248856, 'hung6fd@gmail.com', 3, '2024-04-11 10:07:12', 3200000, 0, '1'),
(203, '91562', 30, 0, 'hanh2k4', '', 'Hoàng Anh', 'Số 4 Hào Nam', 335248856, 'hung6fd@gmail.com', 2, '2024-04-11 10:11:21', 3200000, 0, '0'),
(204, '52679', 30, 0, 'hanh2k4', '', 'Hoàng Anh', 'Số 4 Hào Nam', 335248856, 'hung6fd@gmail.com', 2, '2024-04-11 10:16:13', 3200000, 0, '0'),
(205, '16892', 30, 0, 'hanh2k4', '', 'Hoàng Anh', 'Số 4 Hào Nam', 335248856, 'hung6fd@gmail.com', 1, '2024-04-12 10:32:48', 3200000, 0, '0'),
(206, '84731', 31, 0, 'hanhne', '', 'Hoang Em', 'tổ 8 yên nghĩa', 358714581, 'hung7fd@gmail.com', 1, '2024-04-13 12:39:29', 1650000000, 0, '0'),
(207, '51829', 30, 0, 'hanh2k4', '', 'Hoàng Anh', 'Số 4 Hào Nam', 335248856, 'hung6fd@gmail.com', 2, '2024-04-13 01:11:32', 332430000, 0, '0'),
(208, '45321', 30, 0, 'hanh2k4', '', 'Hoàng Anh', 'Số 4 Hào Nam', 335248856, 'hung6fd@gmail.com', 1, '2024-04-13 01:13:32', 332430000, 3, '1'),
(209, '34689', 30, 0, 'hanh2k4', '', 'Hoàng Anh', 'Số 4 Hào Nam', 335248856, 'hung6fd@gmail.com', 2, '2024-09-22 09:52:18', 1650000, 1, '1'),
(210, '12463', 30, 0, 'hanh2k4', '', 'Hoàng Anh', 'Số 4 Hào Nam', 335248856, 'hung6fd@gmail.com', 1, '2024-09-22 09:52:55', 4300000, 0, '0');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `id_pro` int(11) NOT NULL,
  `img_pro` varchar(255) NOT NULL,
  `name_pro` varchar(255) NOT NULL,
  `price_pro` int(10) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_amount` int(10) NOT NULL,
  `id_bill` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `id_user`, `user_name`, `id_pro`, `img_pro`, `name_pro`, `price_pro`, `quantity`, `total_amount`, `id_bill`) VALUES
(122, 29, 'hanh2k4', 8, 'anh5.jpg', 'Nước Hoa Dior Sauvage', 2400000, 1, 2400000, 196),
(123, 29, 'hanh2k4', 10, 'anh8.jpg', 'Kem nền diorrrr', 3200000, 2, 6400000, 197),
(124, 29, 'hanh2k4', 9, 'anh6.jpg', 'Nước hoa nữ dior', 3300300, 1, 3300300, 197),
(125, 30, 'hanh2k4', 10, 'anh8.jpg', 'Kem nền diorrrr', 3200000, 1, 3200000, 198),
(126, 30, 'hanh2k4', 9, 'anh6.jpg', 'Nước hoa nữ dior', 3300300, 1, 3300300, 199),
(127, 30, 'hanh2k4', 10, 'anh8.jpg', 'Kem nền diorrrr', 3200000, 2, 6400000, 200),
(128, 30, 'hanh2k4', 8, 'anh5.jpg', 'Nước Hoa Dior Sauvage', 2400000, 3, 7200000, 201),
(129, 30, 'hanh2k4', 10, 'anh8.jpg', 'Kem nền diorrrr', 3200000, 1, 3200000, 202),
(130, 30, 'hanh2k4', 10, 'anh8.jpg', 'Kem nền diorrrr', 3200000, 1, 3200000, 203),
(131, 30, 'hanh2k4', 10, 'anh8.jpg', 'Kem nền diorrrr', 3200000, 1, 3200000, 204),
(132, 30, 'hanh2k4', 10, 'anh8.jpg', 'Kem nền diorrrr', 3200000, 1, 3200000, 205),
(133, 31, 'hanhne', 14, 'anh2.jpg', 'Sữa Rửa Mặt Kết Hợp Tẩy Trang Dior', 1650000, 1000, 1650000000, 206),
(134, 30, 'hanh2k4', 9, 'anh6.jpg', 'Nước hoa nữ dior', 3300300, 100, 330030000, 207),
(135, 30, 'hanh2k4', 8, 'anh5.jpg', 'Nước Hoa Dior Sauvage', 2400000, 1, 2400000, 207),
(136, 30, 'hanh2k4', 9, 'anh6.jpg', 'Nước hoa nữ dior', 3300300, 100, 330030000, 208),
(137, 30, 'hanh2k4', 8, 'anh5.jpg', 'Nước Hoa Dior Sauvage', 2400000, 1, 2400000, 208),
(138, 30, 'hanh2k4', 14, 'anh2.jpg', 'Sữa Rửa Mặt Kết Hợp Tẩy Trang Dior', 1650000, 1, 1650000, 209),
(139, 30, 'hanh2k4', 13, 'anh4.jpg', 'Dior Capture Totale ', 4300000, 1, 4300000, 210);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_cate` int(11) NOT NULL,
  `name_cate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_cate`, `name_cate`) VALUES
(24, 'Trang điểm nền'),
(25, 'Làm sạch'),
(26, 'Dưỡng da'),
(27, 'Chăm sóc cơ thể'),
(28, 'Dược mỹ phẩm'),
(29, 'Nước hoa'),
(30, 'cà phê'),
(31, 'nước ngọt');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id_cmt` int(11) NOT NULL,
  `content` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `id_pro` int(11) NOT NULL,
  `comment_date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id_cmt`, `content`, `id_user`, `user_name`, `full_name`, `id_pro`, `comment_date`) VALUES
(24, 'sản phẩm rất tốt', 30, 'hanh2k4', 'Hoàng Anh', 8, '04/10/2024 09:02:59pm'),
(25, 'huhuhu', 30, 'hanh2k4', 'Hoàng Anh', 9, '04/11/2024 10:36:25pm');

-- --------------------------------------------------------

--
-- Table structure for table `history_bank`
--

CREATE TABLE `history_bank` (
  `id` int(11) NOT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `tranid` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_pro` int(11) NOT NULL,
  `name_pro` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `img_pro` varchar(255) NOT NULL,
  `short_des` text NOT NULL,
  `detail_des` text NOT NULL,
  `view` int(11) NOT NULL DEFAULT 0,
  `idcate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_pro`, `name_pro`, `price`, `discount`, `img_pro`, `short_des`, `detail_des`, `view`, `idcate`) VALUES
(8, 'Nước Hoa Dior Sauvage', 2400000, 10, 'anh5.jpg', 'Dior Sauvage là vậy, có tật, Bad boy nhưng ai cũng yêu quý và phục tùng.', '<p><strong>Dior</strong>&nbsp;ra mắt&nbsp;<a href=\"https://nuochoagiagoc.com/danh-muc-san-pham/christian-dior/\">nước hoa Dior Sauvage</a>&nbsp;EDT 100ml&nbsp;mới của m&igrave;nh với t&ecirc;n c&oacute; nguồn gốc từ c&aacute;c loại nước hoa<strong>&nbsp;Eau Sauvage</strong>&nbsp;từ năm 1966, mặc d&ugrave; cả hai kh&ocirc;ng c&ugrave;ng chung bộ sưu tập.&nbsp;<strong>Dior Sauvage for men</strong>&nbsp;được lấy cảm hứng từ kh&ocirc;ng gian mở tự nhi&ecirc;n với bầu trời xanh, n&uacute;i đ&aacute; dưới &aacute;nh mặt trời, ra mắt v&agrave;o năm 2015 v&agrave; thuộc hương cam chanh thơm ng&aacute;t đem lại cảm gi&aacute;c tự tin, mạnh mẽ v&agrave; cuốn h&uacute;t.</p>\r\n', 7, 29),
(9, 'Nước hoa nữ dior', 3300300, 15, 'anh6.jpg', 'Dior Addict Eau Fraiche của Christian Dior là chai nước hoa mang hương hoa cỏ trái cây dành cho phụ nữ.', '<p>Nước hoa nữ&nbsp;<strong>Dior Addict Eau Fraiche</strong>&nbsp;c&oacute; th&agrave;nh phần l&agrave; hương hoa cỏ tr&aacute;i c&acirc;y tươi mới, sinh động v&agrave; đầy năng lượng t&iacute;ch cực. Hương thơm mở đầu phong ph&uacute; với hương bưởi lấp l&aacute;nh, nổi bật hơn với hương cam bergamot ngọt ng&agrave;o, xen ch&uacute;t vị đắng. Lớp hương giữa bao gồm cả hương hoa cỏ v&agrave; tr&aacute;i c&acirc;y, hương thơm tinh tế từ những b&ocirc;ng hoa lan Nam Phi v&agrave; hoa linh lan trắng h&ograve;a quyện với hương thơm từ quả lựu ngon ngọt v&agrave; hấp dẫn. Sau c&ugrave;ng l&agrave; hỗn hợp hương thơm tuyệt mỹ của c&aacute;c loại gỗ v&agrave; xạ hương trắng.</p>\r\n', 7, 29),
(10, 'Kem nền diorrrr', 3200000, 10, 'anh8.jpg', 'Kem nền Dior Forever', '<p>Kem nền&nbsp;<em><strong>Dior Forever Natural Nude</strong></em>&nbsp;mang lại lớp nền s&aacute;ng v&agrave; tự nhi&ecirc;n m&agrave; kh&ocirc;ng c&oacute; hiệu ứng như mặt nạ, cho ph&eacute;p l&agrave;n da thoải m&aacute;i từ s&aacute;ng đến tối. L&agrave;n da ho&agrave;n hảo ngay cả trong 24 giờ li&ecirc;n tục.&nbsp;<em><strong>Dior Forever Natural Nude</strong></em>&nbsp;với c&ocirc;ng thức được l&agrave;m gi&agrave;u từ c&aacute;c th&agrave;nh phần chăm s&oacute;c da được lựa chọn tỉ mỉ để l&agrave;m l&agrave;n da được ngậm nước v&agrave; rạng rỡ, căng mọng.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 3, 24),
(12, 'Son DIOR', 3500000, 10, 'anh3.jpg', 'Son Dưỡng Dior Addict Lip Maximizer 009 Intense Rosewood – Màu Hồng Đất', '<p><strong>Son Dưỡng Dior Addict Lip Maximizer 009 Intense Rosewood &ndash; M&agrave;u Hồng Đất&nbsp;</strong>l&agrave; thỏi son dưỡng cao cấp của thương hiệu Dior, sở hữu chức năng k&eacute;p vừa l&agrave;m đẹp cho đ&ocirc;i m&ocirc;i với m&agrave;u hồng đất quyến rũ, vừa c&oacute; khả năng chăm s&oacute;c đ&ocirc;i m&ocirc;i từ s&acirc;u b&ecirc;n trong khiến c&aacute;c t&iacute;n đồ m&ecirc; l&agrave;m đẹp săn đ&oacute;n ngay từ khi mới ra mắt.</p>\r\n', 0, 28),
(13, 'Dior Capture Totale ', 4300000, 20, 'anh4.jpg', 'DIOR CAPTURE TOTALE – THÀNH TỰU CHỐNG LÃO HÓA VỚI PHƯƠNG THỨC DẪN TRUYỀN CHỌN LỌC', '<p>Dior Sience hay Viện Khoa học Dior gồm 260 nh&agrave; khoa học từ 3 trung t&acirc;m nghi&ecirc;n cứu của Dior ở Ph&aacute;p, Trung Quốc v&agrave; Nhật Bản. Tất cả c&aacute;c th&agrave;nh vi&ecirc;n đều l&agrave; chuy&ecirc;n gia trong c&aacute;c ng&agrave;nh khoa học lớn: sinh học ph&acirc;n tử, da liễu, h&oacute;a học, hệ gen học v&agrave; thực vật học. Sự hợp t&aacute;c chặt chẽ của họ với những trường Đại học nổi tiếng tr&ecirc;n thế giới như Đại học Stanford ở Mỹ,&nbsp;Đại học Bradford ở Anh, Đại học Modena ở &Yacute;, Viện nghi&ecirc;n cứu Pierre &amp; Marie Curie ở Ph&aacute;p&hellip; đ&atilde; đưa Dior trở th&agrave;nh một trong những h&atilde;ng mỹ phẩm ti&ecirc;n phong trong lĩnh vực ứng dụng nghi&ecirc;n cứu khoa học v&agrave;o dưỡng da.&nbsp;Năm 2020, Dior Capture Totale Cell Energy ra đời, chứa đựng b&iacute; mật về phương thức dẫn truyền chọn lọc trong một d&ograve;ng sản phẩm chống l&atilde;o h&oacute;a đỉnh cao.</p>\r\n', 0, 27),
(14, 'Sữa Rửa Mặt Kết Hợp Tẩy Trang Dior', 1650000, 5, 'anh2.jpg', 'Sữa Rửa Mặt Kết Hợp Tẩy Trang Dior Prestige La Mousse Micellaire Nettoyant 120G', '<p><em><strong><a href=\"https://thegioisonmoi.com/products/sua-rua-mat-bat-nhat-dior-prestige-la-mousse-micellaire-nettoyant-120g\">Dior Prestige La Mousse Micellaire Nettoyant</a></strong></em>&nbsp;đ&atilde; tạo ra một bước tiến mới cho l&agrave;n da, sữa rửa mặt kết hợp tẩy trang.&nbsp;<strong><a href=\"https://thegioisonmoi.com/products/sua-rua-mat-dior-prestige-la-mousse-micellaire-nettoyant-120g/\">Sữa rửa mặt Dior&nbsp;</a></strong><em><strong><strong><a href=\"https://thegioisonmoi.com/products/sua-rua-mat-dior-prestige-la-mousse-micellaire-nettoyant-120g/\">Prestige&nbsp;</a></strong>La Mousse</strong></em>&nbsp;<em><strong>Micellaire Nettoyant</strong></em>&nbsp;l&agrave; bước thiết yếu của chu tr&igrave;nh l&agrave;m sạch da, l&agrave; một liệu ph&aacute;p thanh lọc sẽ loại bỏ lớp trang điểm, loại bỏ bụi bẩn v&agrave; l&agrave;m mới l&agrave;n da.</p>\r\n', 2, 25);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id_ques` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `contennt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `sex` tinyint(4) NOT NULL DEFAULT 0,
  `email_user` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_user` varchar(25) NOT NULL,
  `img_user` varchar(255) NOT NULL,
  `register_date` date DEFAULT NULL,
  `last_login` date DEFAULT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `user_name`, `password`, `full_name`, `sex`, `email_user`, `address`, `phone_user`, `img_user`, `register_date`, `last_login`, `role`) VALUES
(30, 'hanh2k4', 'hoanganhanh', 'Hoàng Anh', 0, 'hung6fd@gmail.com', 'Số 4 Hào Nam', '0335248856', '338526082_137095652660924_6994110956195215953_n.jpg', NULL, NULL, 1),
(31, 'hanhne', 'hoanganhanh', 'Hoang Em', 0, 'hung7fd@gmail.com', '', '', '', NULL, NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id_bill`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_pro_cart` (`id_pro`),
  ADD KEY `lk_bill_cart` (`id_bill`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_cate`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_cmt`),
  ADD KEY `lk_user_cmt` (`id_user`),
  ADD KEY `lk_pro_cmt` (`id_pro`);

--
-- Indexes for table `history_bank`
--
ALTER TABLE `history_bank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_pro`),
  ADD KEY `lk_cate_product` (`idcate`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id_ques`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id_bill` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=211;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_cate` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id_cmt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `history_bank`
--
ALTER TABLE `history_bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_pro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id_ques` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `lk_bill_cart` FOREIGN KEY (`id_bill`) REFERENCES `bill` (`id_bill`),
  ADD CONSTRAINT `lk_pro_cart` FOREIGN KEY (`id_pro`) REFERENCES `product` (`id_pro`);

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `lk_pro_cmt` FOREIGN KEY (`id_pro`) REFERENCES `product` (`id_pro`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `lk_cate_product` FOREIGN KEY (`idcate`) REFERENCES `category` (`id_cate`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
