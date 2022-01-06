-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th1 06, 2022 lúc 05:57 AM
-- Phiên bản máy phục vụ: 5.7.31
-- Phiên bản PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nhom2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `carts`
--

DROP TABLE IF EXISTS `carts`;
CREATE TABLE IF NOT EXISTS `carts` (
  `cart_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `payment_method_id` int(11) NOT NULL,
  `shipping_fee` int(11) NOT NULL,
  `fullname` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`cart_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `carts`
--

INSERT INTO `carts` (`cart_id`, `user_id`, `total`, `payment_method_id`, `shipping_fee`, `fullname`, `email`, `address`, `telephone`, `order_date`) VALUES
(5, 6, 19579000, 0, 0, 'Quynh Anh', 'quynhanh0298@gmail.com', '19 Nguyễn Văn Lượng, phường 17, Gò Vấp', '0984333636', '2021-12-23 23:09:54'),
(6, 8, 43490000, 0, 0, 'Quynh Anh Nguyen', 'quynhanh0298@gmail.com', 'Gò Vấp', '0984123456', '2021-12-24 01:42:08'),
(7, 8, 14270000, 0, 0, 'Quynh Anh Nguyen', 'quynhanh0298@gmail.com', 'Gò Vấp', '0984123456', '2021-12-24 01:42:35'),
(8, 8, 27078000, 0, 0, 'Quynh Anh Nguyen', 'quynhanh0298@gmail.com', 'Gò Vấp', '0984123456', '2021-12-24 01:54:11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart_details`
--

DROP TABLE IF EXISTS `cart_details`;
CREATE TABLE IF NOT EXISTS `cart_details` (
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  PRIMARY KEY (`cart_id`,`product_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cart_details`
--

INSERT INTO `cart_details` (`cart_id`, `product_id`, `product_name`, `price`, `qty`, `total`) VALUES
(5, 30, 'Tai nghe Bluetooth True Wireless Earphones 2 Basic Xiaomi BHR4089GL Trắng', 1399000, 1, 1399000),
(5, 28, 'Máy tính bảng Samsung Galaxy Tab S6 Lite', 9090000, 2, 18180000),
(6, 24, 'Điện thoại Samsung Galaxy A52s 5G', 10900000, 2, 21800000),
(6, 27, 'Laptop Asus TUF Gaming FX506LH i5 10300H/8GB/512GB/144Hz/4GB GTX1650/Win10 (HN002T)', 21690000, 1, 21690000),
(7, 28, 'Máy tính bảng Samsung Galaxy Tab S6 Lite', 9090000, 1, 9090000),
(7, 29, 'Đồng hồ thông minh Mi Watch', 2590000, 2, 5180000),
(8, 27, 'Laptop Asus TUF Gaming FX506LH i5 10300H/8GB/512GB/144Hz/4GB GTX1650/Win10 (HN002T)', 21690000, 1, 21690000),
(8, 29, 'Đồng hồ thông minh Mi Watch', 2590000, 1, 2590000),
(8, 30, 'Tai nghe Bluetooth True Wireless Earphones 2 Basic Xiaomi BHR4089GL Trắng', 1399000, 2, 2798000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `manufactures`
--

DROP TABLE IF EXISTS `manufactures`;
CREATE TABLE IF NOT EXISTS `manufactures` (
  `manu_id` int(11) NOT NULL AUTO_INCREMENT,
  `manu_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`manu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `manufactures`
--

INSERT INTO `manufactures` (`manu_id`, `manu_name`) VALUES
(1, 'Apple'),
(2, 'Samsung'),
(3, 'Oppo'),
(4, 'Xiaomi'),
(5, 'Asus');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `payment_methods`
--

DROP TABLE IF EXISTS `payment_methods`;
CREATE TABLE IF NOT EXISTS `payment_methods` (
  `payment_method_id` int(11) NOT NULL AUTO_INCREMENT,
  `payment_method_name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`payment_method_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `payment_methods`
--

INSERT INTO `payment_methods` (`payment_method_id`, `payment_method_name`) VALUES
(1, 'ATM'),
(2, 'Zalo Pay'),
(3, 'Momo'),
(4, 'COD');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `manu_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `pro_image` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `feature` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=113 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `manu_id`, `type_id`, `price`, `pro_image`, `description`, `feature`, `created_at`) VALUES
(1, 'Điện thoại iPhone 12 Pro Max 128GB', 1, 1, 32990000, '1_iphone_12_pro_max.jpg', 'Màn hình: OLED6.7\"Super Retina XDR\r\nChip: Apple A14 Bionic\r\nRAM: 6 GB\r\nBộ nhớ trong: 128 GB', 1, '2021-10-22 03:45:43'),
(2, 'Laptop Asus ZenBook UX325EA i5 1135G7/8GB/512GB/OLED/Cáp/Túi/Win10 (KG363T)', 5, 2, 23790000, '2_asus-zenbook.jpg', 'CPU: i51135G72.4GHz\r\nRAM: 8 GB, LPDDR4X (On board), 4267 MHz\r\nỔ cứng: 512 GB SSD NVMe PCIe (Có thể tháo ra, lắp thanh khác tối đa 1TB)', 1, '2021-10-22 03:47:33'),
(3, 'Máy tính bảng Samsung Galaxy Tab S7', 2, 3, 15990000, '3_samsung-galaxy-tab-s7.jpg', 'Màn hình: 11\"LTPS IPS LCD\r\nHệ điều hành: Android 10\r\nRAM: 6 GB\r\nCamera sau: Chính 13 MP & Phụ 5 MP\r\nCamera trước: 8 MP', 1, '2021-10-22 04:30:50'),
(4, 'Vòng đeo tay thông minh Mi Band 6', 4, 4, 990000, '4_mi-band-6.jpg', 'Kết nối với hệ điều hành: Android 5.0 trở lêniOS 10 trở lên\r\nTính năng cho sức khỏe: Đo nồng độ oxy (SpO2)Đếm số bước chân...', 0, '2021-10-22 04:33:22'),
(5, 'Tai nghe Bluetooth AirPods Pro Wireless Charge Apple MWP22', 1, 5, 4990000, '5_airpods-pro.jpg', 'Công nghệ âm thanh: Active Noise Cancellation Adaptive EQ\r\nTương thích: AndroidiOS (iPhone)', 1, '2021-10-22 04:35:53'),
(6, 'Điện thoại OPPO Reno6 Pro 5G', 3, 1, 17990000, '6_oppo-reno6.jpg', 'Màn hình: AMOLED6.55\"Full HD+\r\nHệ điều hành: Android 11\r\nCamera sau: Chính 50 MP & Phụ 16 MP, 13 MP, 2 MP\r\nCamera trước: 32 MP', 0, '2021-10-22 04:37:35'),
(7, 'Điện thoại Xiaomi 11 Lite 5G NE', 4, 1, 9490000, '7_xiaomi-11-lite-5g.jpg', 'Màn hình: AMOLED6.55\"Full HD+\r\nCamera sau: Chính 64 MP & Phụ 8 MP, 5 MP\r\nCamera trước: 20 MP', 0, '2021-10-24 02:01:57'),
(8, 'Laptop Apple MacBook Air M1 2020 16GB/512GB/7-core GPU (Z12A00050)', 1, 2, 39490000, '8_apple-macbook-air.jpg', 'CPU: Apple M1\r\nRAM: 16 GB\r\nỔ cứng: 512 GB SSD\r\nMàn hình: 13.3\"Retina (2560 x 1600)', 1, '2021-10-24 02:05:10'),
(9, 'Máy tính bảng iPad Pro M1 12.9 inch WiFi Cellular 256GB (2021)', 1, 3, 38490000, '9_ipad-pro.jpg', 'Màn hình: 12.9\"Liquid Retina XDR mini-LED LCD\r\nHệ điều hành: iPadOS 14\r\nChip: Apple M1 8 nhân\r\nRAM: 8 GB', 1, '2021-10-24 02:08:52'),
(10, 'Điện thoại iPhone 11 64GB', 1, 1, 16990000, '11_iphone-xi.jpg', 'Màn hình: IPS LCD6.1\"Liquid Retina\r\nHệ điều hành: iOS 14\r\nCamera sau: 2 camera 12 MP\r\nCamera trước: 12 MP', 1, '2021-10-25 15:09:47'),
(11, 'Điện thoại iPhone 13 Pro Max 128GB', 1, 1, 33990000, '12_iphone-13-pro-max.jpg', 'Màn hình: OLED6.7\"Super Retina XDR\r\nHệ điều hành: iOS 15\r\nCamera sau: 3 camera 12 MP\r\nCamera trước: 12 MP', 1, '2021-10-25 15:11:31'),
(12, 'Samsung Galaxy Watch 4 44mm', 2, 4, 6640000, '10_samsung-galaxy-watch-4.jpg', 'Màn hình: SUPER AMOLED 1.36 inch\r\nThời lượng pin: Khoảng 1.5 ngày\r\nKết nối với hệ điều hành: Android dùng Google Mobile Service', 1, '2021-10-24 02:11:54'),
(13, 'Điện thoại Samsung Galaxy Z Fold3 5G 256GB', 2, 1, 40990000, '13_samsung-galaxy-z-fold-3.jpg', 'Màn hình: Dynamic AMOLED 2XChính 7.6\" & Phụ 6.2\"Full HD+\r\nHệ điều hành: Android 11\r\nCamera sau: 3 camera 12 MP\r\nCamera trước: 10 MP & 4 MP', 0, '2021-10-25 15:13:48'),
(14, 'Điện thoại Samsung Galaxy Z Flip3 5G 128GB', 2, 1, 23990000, '14_samsung-galaxy-z-flip-3.jpg', 'Màn hình: Dynamic AMOLED 2XChính 6.7\" & Phụ 1.9\"Full HD+\r\nHệ điều hành: Android 11\r\nCamera sau: 2 camera 12 MP\r\nCamera trước: 10 MP', 0, '2021-10-25 15:15:32'),
(15, 'Oppo Watch 46mm dây silicone đen', 3, 4, 5752000, '15_oppo-watch.jpg', 'Màn hình: AMOLED1.91 inch\r\nKết nối với hệ điều hành: Android 6.0 trở lêniOS 12 trở lên', 1, '2021-10-25 15:17:14'),
(16, 'Điện thoại OPPO Find X3 Pro 5G', 3, 1, 23990000, '16_oppo-find-x3-pro.jpg', 'Màn hình: AMOLED6.7\"Quad HD+ (2K+)\r\nHệ điều hành: Android 11\r\nCamera sau: Chính 50 MP & Phụ 50 MP, 13 MP, 3 MP\r\nCamera trước: 32 MP', 1, '2021-10-25 15:20:07'),
(17, 'Điện thoại Xiaomi 11T Pro 5G', 4, 1, 14990000, '17_xiaomi-11t-pro.jpg', 'Màn hình: AMOLED6.67\"Full HD+\r\nHệ điều hành: Android 11\r\nCamera sau: Chính 108 MP & Phụ 8 MP, 5 MP\r\nCamera trước: 16 MP', 0, '2021-10-25 15:22:37'),
(18, 'Tai nghe chụp tai Gaming Asus TUF H3 Đen Đỏ', 5, 5, 891000, '18_tai-nghe-chup-tai-gaming-asus-tuf-h3.jpg', 'Jack cắm: 3.5 mm\r\nCông nghệ âm thanh: Âm thanh vòm 7.1\r\nTương thích: AndroidWindows\r\nTiện ích: Âm thanh 7.1', 0, '2021-10-25 15:25:10'),
(19, 'Điện thoại Asus ROG Phone 5s Pro', 5, 1, 7990000, '19_asus-rog-phone-5s-pro.jpg', 'Màn hình: AMOLED6.78\"Full HD+\r\nHệ điều hành: Android 11\r\nCamera sau: Chính 64 MP & Phụ 13 MP, 5 MP\r\nCamera trước: 24 MP', 0, '2021-10-25 15:26:50'),
(20, 'Apple Watch S6 44mm viền nhôm dây cao su', 1, 4, 11041000, '20_apple-watch-s6-44mm.jpg', 'Màn hình: OLED1.78 inch\r\nThời lượng pin: Khoảng 1.5 ngày\r\nKết nối với hệ điều hành: iOS 14 trở lên', 1, '2021-10-25 15:28:33'),
(21, 'Máy tính bảng Xiaomi Pad 5 128GB', 4, 3, 8990000, '21_xiaomi-pad-5.jpg', 'Màn hình: 11\"IPS LCD\r\nHệ điều hành: Android 11\r\nChip: Snapdragon 860 8 nhân\r\nRAM: 6 GB', 0, '2021-10-25 15:32:40'),
(22, 'Tai nghe Bluetooth True Wireless OPPO ENCO Buds ETI81', 3, 5, 711000, '22_bluetooth-tws-oppo-enco-buds.jpg', 'Thời gian tai nghe: Dùng 6 giờ - Sạc 2.5 giờ\r\nThời gian hộp sạc: Dùng 24 giờ - Sạc 2.5 giờ\r\nCổng sạc: Type-C', 0, '2021-10-25 15:37:04'),
(23, 'Máy tính bảng iPad Pro M1 12.9 inch WiFi Cellular 256GB (2021)', 1, 3, 38490000, '23_ipad-pro-m1-129-inch-wifi.jpg', 'Màn hình: 12.9\"Liquid Retina XDR mini-LED LCD\r\nHệ điều hành: iPadOS 14\r\nChip: Apple M1 8 nhân\r\nRAM: 8 GB\r\nBộ nhớ trong: 256 GB', 1, '2021-10-25 15:40:24'),
(24, 'Điện thoại Samsung Galaxy A52s 5G', 2, 1, 10900000, '24_samsung-galaxy-a52s-5g.jpg', 'Màn hình: Super AMOLED6.5\"Full HD+\r\nHệ điều hành: Android 11\r\nCamera sau: Chính 64 MP & Phụ 12 MP, 5 MP, 5 MP\r\nCamera trước: 32 MP', 0, '2021-10-25 15:42:42'),
(25, 'Máy tính bảng Asus Zenpad Z10 ZT500KL', 5, 3, 5990000, '25_asus-zenpad-z10.jpg', 'Màn hình: 9.7\"IPS LCD\r\nHệ điều hành: Android 6.0\r\nChip: Snapdragon 650\r\nRAM: 3 GB\r\nBộ nhớ trong: 32 GB', 0, '2021-10-25 15:45:31'),
(26, 'Tai nghe Bluetooth True Wireless Samsung Galaxy Buds 2 R177N', 2, 5, 2990000, '26_bluetooth-true-wireless-samsung-buds-2.jpg', 'Thời gian tai nghe: Dùng 7.5 giờ - Sạc 1.5 giờ\r\nThời gian hộp sạc: Dùng 29 giờ - Sạc 1.5 giờ\r\nCổng sạc: Type-C', 1, '2021-10-25 15:48:09'),
(27, 'Laptop Asus TUF Gaming FX506LH i5 10300H/8GB/512GB/144Hz/4GB GTX1650/Win10 (HN002T)', 5, 2, 21690000, '27_asus-uf-gaming-fx506lh-i5g.jpg', 'CPU: i510300H2.5GHz\r\nRAM: 8 GBDDR4 2 khe (1 khe 8GB + 1 khe rời)2933 MHz\r\nMàn hình: 15.6\"Full HD (1920 x 1080)144Hz', 0, '2021-10-25 15:50:19'),
(28, 'Máy tính bảng Samsung Galaxy Tab S6 Lite', 2, 3, 9090000, '28_samsung-galaxy-tab-s6-lite.jpg', 'Màn hình: 10.4\"PLS LCD\r\nHệ điều hành: Android 10\r\nChip: Exynos 9611\r\nRAM: 4 GB\r\nBộ nhớ trong: 64 GB', 0, '2021-10-25 15:53:16'),
(29, 'Đồng hồ thông minh Mi Watch', 4, 4, 2590000, '29_Mi-watch.jpg', 'Màn hình: AMOLED1.39 inch\r\nThời lượng pin: Khoảng 16 ngày\r\nKết nối với hệ điều hành: Android 5.0 trở lêniOS 11 trở lên', 0, '2021-10-25 15:56:08'),
(30, 'Tai nghe Bluetooth True Wireless Earphones 2 Basic Xiaomi BHR4089GL Trắng', 4, 5, 1399000, '30_tai-nghe-true-wireless-earphones-2-basic-xiaomi.jpg', 'Thời gian tai nghe: Dùng 5 giờ - Sạc 1.5 giờ\r\nThời gian hộp sạc: Dùng 20 giờ - Sạc 1.5 giờ\r\nCổng sạc: Type-C\r\nCông nghệ âm thanh: codecAAC', 1, '2021-10-25 15:58:29');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `protypes`
--

DROP TABLE IF EXISTS `protypes`;
CREATE TABLE IF NOT EXISTS `protypes` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `protypes`
--

INSERT INTO `protypes` (`type_id`, `type_name`) VALUES
(1, 'Điện thoại'),
(2, 'Laptop'),
(3, 'Tablet'),
(4, 'Đồng hồ thông minh'),
(5, 'Tai nghe');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`) VALUES
(1, 'admin'),
(2, 'customer');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL,
  `fullname` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `role_id`, `fullname`, `email`, `address`, `telephone`) VALUES
(1, 'quynhanh', '827ccb0eea8a706c4c34a16891f84e7b', 1, '', '', '', ''),
(7, 'user', '202cb962ac59075b964b07152d234b70', 2, 'ABC', 'quynhanh0298@gmail.com', '19 Nguyễn Văn Lượng, phường 17, Gò Vấp', '0984333636'),
(6, 'qa123', '202cb962ac59075b964b07152d234b70', 2, 'Quynh Anh Nguyen', 'quynhanh0298@gmail.com', '19 Nguyen Van Luong, phuong 17, Go Vap', '0984333636'),
(8, 'user123', '202cb962ac59075b964b07152d234b70', 2, 'Quynh Anh Nguyen', 'quynhanh0298@gmail.com', 'Gò Vấp', '0984123456');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
