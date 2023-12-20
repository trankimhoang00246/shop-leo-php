-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th12 20, 2023 lúc 06:11 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shop-leo`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Ao bong da'),
(2, 'Giay bong da'),
(3, 'Qua bong da'),
(4, 'Balo'),
(5, 'Gang tay'),
(6, 'Boc ong dong'),
(7, 'Vo');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` double NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `category` int(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `price`, `image`, `category`) VALUES
(33, 'Ao Argentina', 'Lionel Messi Argentina Soccer Jersey with 22/23 World Cup Patch', 150000, 'https://cdn-amz.woka.io/images/I/61v9K+tWHDL._SR900,900_.jpg', 1),
(39, 'MANCHESTER UNITED', 'Chat lieu min mang', 120000, 'https://product.hstatic.net/1000061481/product/5c6cdc7f169f4773a69524e28bce0509_0d15d98f52fe45f487f3a41f398cc009_1024x1024.jpeg', 1),
(40, 'Ao Liverpool ', 'Beautiful in white', 200000, 'https://product.hstatic.net/1000391653/product/db2560-688.1_2fcc11547d52401e9aa33dfe8ece3890_1024x1024.jpg', 1),
(41, 'Ao ARSENAL', 'Beautiful in white', 200000, 'https://product.hstatic.net/1000061481/product/f7d25c3ba4e2435cbb0cea04de9a6af5_7d78e07ac6714a729fc8eaa1d4ad0978_1024x1024.jpeg', 1),
(42, 'Ao Croatia', 'Beautiful in white', 300000, 'https://product.hstatic.net/1000061481/product/debf2df415ee4a9ab3a4a72843fc12ed_b54ca9a144f14fd19f4f60c9b39ca70a_1024x1024.jpeg', 1),
(43, 'Ao Chelsea ', 'Beautiful in white', 200000, 'https://product.hstatic.net/1000061481/product/a4213aef9dee40c992555abe899bf056_1e4e7d3162b2461a85536f8f281e5cb8_1024x1024.jpg', 1),
(44, 'Ao Real ', 'Beautiful in white', 200000, 'https://product.hstatic.net/1000061481/product/d5d3af82b6344e5a9dac6a6f54522b37_f589d776f3144a48804e125b4503e727_1024x1024.jpeg', 1),
(45, 'Ao Duc', 'Beautiful in white', 250000, 'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/39a7ed27fd9f4d7a93b0ab2100c7502d_9366/Ao_djau_san_khach_djoi_tuyen_DJuc_DJen_EH6117_01_laydown.jpg', 1),
(46, 'Ao Brazil ', 'Beautiful in white', 230000, 'https://www.sporter.vn/wp-content/uploads/2017/07/Ao-bong-da-brazil-san-nha-1.jpg', 1),
(47, 'Ao Bo Dao Nha', 'Beautiful in white', 200000, 'https://www.sporter.vn/wp-content/uploads/2017/06/Ao-bong-da-bo-dau-nha-san-khach-hang-viet-nam-2.jpg', 1),
(48, 'Ao Tay Ban Nha ', 'Beautiful in white', 240000, 'https://assets.adidas.com/images/w_600,f_auto,q_auto/53c802aacfa34ac9826faadc00e0f57f_9366/Ao_thi_djau_san_nha_djoi_Tay_Ban_Nha_DJo_FR8361_01_laydown.jpg', 1),
(49, 'Ao Doi Tuyen Anh ', 'Beautiful in white', 200000, 'https://makan.vn/wp-content/uploads/2022/09/BD988.png', 1),
(50, 'Ao Ha Lan ', 'Beautiful in white', 200000, 'https://www.sporter.vn/wp-content/uploads/2017/06/Ao-bong-da-ha-lan-san-nha-hang-viet-nam-1.jpg', 1),
(51, 'Ao Chelsea ', 'blue', 150000, 'https://dothethao.net.vn/wp-content/uploads/2020/12/ao-bong-da-chelsea-san-nha-2021-2022.jpg', 1),
(52, 'Balo egan ', 'black', 100000, 'https://product.hstatic.net/200000145547/product/balo-4_c5e16d5880dc4d27afbc3e7079dd3dee_large.jpg', 4),
(53, 'Balo Bulbal ', 'Beautiful in black', 120000, 'https://bulbal.vn/wp-content/uploads/2022/09/balo-bulbal-compact-1024x1024.jpg', 4),
(54, 'Balo Bulbal ', 'Beautiful in white black', 150000, 'https://bulbal.vn/wp-content/uploads/2022/08/BALO-BULBAL-COMPACT-DO-1-scaled.jpg', 4),
(55, 'Balo Bulbal ', 'Beautiful in red', 270000, 'https://laypas.vn/wp-content/uploads/2023/08/ba-lo-bong-da-002-mau-do-690x676.jpg', 4),
(56, 'Giay QH', 'Beautiful in pink', 120000, 'https://thegioithethao.vn/images/products/2021/12/07/resized/adidas-copa-204-tf-greymatte-silversolar-yellow_1638849753.jpeg', 2),
(57, 'Giay AKKA', 'Beautiful in red', 129000, 'https://pos.nvncdn.com/b0b717-26181/ps/20200703_FGNYnIKW9iFUVfhsWMkgyBPz.jpg', 2),
(58, 'Giay new', 'Beautiful in white', 120000, 'https://file.hstatic.net/1000339709/file/adidas-x-ghosted-fg__4__f4a9cfa08d4143b7aa4d35d493c02af6_1024x1024.jpg', 2),
(59, 'Giay CT3', 'Beautiful in white', 120000, 'https://bizweb.dktcdn.net/thumb/1024x1024/100/301/479/products/z2011871709306-173667361cfcf18b39aa35c6a383e5e6.jpg', 2),
(60, 'Qua bong da C1', 'Beautiful in blue', 120000, 'https://pos.nvncdn.com/6a2bd9-54198/ps/20220524_icodKwxxC7nDQoRsV9pYAX1v.jpg', 3),
(61, 'Qua bong da UVH', 'Beautiful', 130000, 'https://file.hstatic.net/1000061481/file/bong_world_cup_adidas__al_rihla___7__66d2a4b304814712978cefe6972c5d5e.jpg', 3),
(62, 'Qua bong da C2', 'Beautiful in ', 140000, 'https://contents.mediadecathlon.com/p2154031/ac223227635ca157982fc8b2e70fe20c/p2154031.jpg', 3),
(63, 'Qua bong da V-league', 'Beautiful in ', 150000, 'https://thegioithethao.vn/images/products/2021/12/09/large/qua-bong-da-world-cup-2014_1639025342.jpg', 3),
(67, 'Gang tay', 'Beautiful in white', 200000, 'https://thegioithethao.vn/images/products/2021/12/03/large/kipsta-f500-nguoi-lon-1-_1638525373.jpg', 5),
(68, 'Gang tay A1', 'Beautiful in white', 200000, 'https://thegioithethao.vn/images/products/2021/02/02/large/ho-soccer-inital-flat_large_1612249789.jpg', 5),
(69, 'Gang tay C2', 'Beautiful in white', 170000, 'https://thegioithethao.vn/images/products/2021/02/02/large/gang-tay-thu-mon-eepro-eg1035-hong_large_1612250928.jpg', 5),
(70, 'Gang tay B1', 'Beautiful in white', 200000, 'https://thegioithethao.vn/images/products/2021/02/02/large/gang-tay-thu-mon-eepro-eg1034-xanh1_large_1612250766.jpg', 5),
(71, 'Boc ong dong N2', 'Beautiful in white', 200000, 'https://thegioithethao.vn/images/products/2021/12/03/large/kipsta-f500-tre-em-1-_1638523896.jpg', 6),
(72, 'Boc ong dong B1', 'Beautiful in white', 190000, 'https://thegioithethao.vn/images/products/2021/12/03/large/kipsta-540-trx-nguoi-lon-1-_1638522560.jpg', 6),
(73, 'Boc ong dong V2', 'Beautiful in white', 200000, 'https://thegioithethao.vn/images/products/2021/02/03/large/adidas-guards-x-youth-s90376_5791824c81b143ca88e836217e0b15aa_master_1612320190.jpg', 6),
(74, 'Boc ong dong Q1', 'Beautiful in white', 180000, 'https://thegioithethao.vn/images/products/2021/12/03/large/kipsta-f140-nguoi-lon-1-_1638522859.jpg', 6),
(75, 'Vo Nike', 'Beautiful in white', 15000, 'https://sporthouse.vn/images/products/2021/12/27/original/s-l1600%20(5).jpg', 7),
(76, 'Vo Adidas', 'Beautiful in white', 15000, 'https://assets.adidas.com/images/w_600,f_auto,q_auto/6c5c3698ec414f23a1aeaf10009bb0c7_9366/Tat_The_Thao_Co_Cao_Co_DJem_trang_HT3444_03_standard.jpg', 7),
(77, 'Vo Puma', 'Beautiful in white', 15000, 'https://vn-live-01.slatic.net/p/9dc9425e8a2b7a7b4319a589de7baebf.jpg', 7),
(78, 'Vo Epp', 'Beautiful in white', 20000, 'https://cdn.shopify.com/s/files/1/0456/5070/6581/products/70343803-2_797d6acd-b11e-4934-b92f-3c601a326b3b.jpg', 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `idUser` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`idUser`, `username`, `pass`, `email`, `role`) VALUES
(3, 'admin', '$2y$10$8Xsw.fQh9pe2AMZqinL1k.O6SlFctHbNZ3pD7zQ/V.0vOKdxfVj12', 'admin@gmail.com', 1),
(20, 'hoang', '$2y$10$1wx6DRNThbRj8fubl4NMn.in2Tteyuy8A8Z9fKGH1EirPKJ67lxGW', 'trankimhoang1710@gmail.com', 0),
(21, 'phuoc', '$2y$10$LLE76D2BVUH73DqUT6QAXeJXJhHv46njBY/t4YOJ0XDCxSTM5Jx7i', 'phuoc@gmail.com', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUser`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;