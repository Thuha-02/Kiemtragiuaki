-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 24, 2021 lúc 04:23 AM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dhtl_2021`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `can_bo`
--

CREATE TABLE `can_bo` (
  `id` int(11) NOT NULL,
  `ho_ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chuc_vu_id` int(11) DEFAULT NULL,
  `sdt_co_quan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `can_bo`
--

INSERT INTO `can_bo` (`id`, `ho_ten`, `chuc_vu_id`, `sdt_co_quan`, `email`, `sdt`) VALUES
(1, 'Nguyễn Thanh Tùng', 3, '1235664648', 'ptt@edu.vn', '4548796565'),
(2, 'Đặng Thị Thu Hiền ', 6, '123546848', 'dtth.edu.vn', '8475965445'),
(3, 'Nguyễn Khánh Linh', 4, '569842135', 'nkl.edu.vn', '8698452554'),
(9, 'Nguyễn Hữu Thọ', 6, '123668554', 'nht@edu.vn', '7895151445');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chuc_vu`
--

CREATE TABLE `chuc_vu` (
  `id` int(11) NOT NULL,
  `don_vi_id` int(11) NOT NULL,
  `ten_chuc_vu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chuc_vu`
--

INSERT INTO `chuc_vu` (`id`, `don_vi_id`, `ten_chuc_vu`) VALUES
(1, 1, 'Hiệu Trưởng'),
(2, 1, 'Hiệu Phó'),
(3, 1, 'Trưởng khoa'),
(4, 1, 'Trợ lý khoa'),
(5, 1, 'Trưởng bộ môn\r\n'),
(6, 1, 'Phó bộ môn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `don_vi`
--

CREATE TABLE `don_vi` (
  `id` int(11) NOT NULL,
  `ten_don_vi` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dia_chi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `may_truc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `don_vi`
--

INSERT INTO `don_vi` (`id`, `ten_don_vi`, `dia_chi`, `email`, `may_truc`, `website`) VALUES
(1, 'Khoa CNTT', 'Tầng 3, nhà C1', 'khoacntt@dhtl.edu.vn', '0123456789', 'khoacntt.dhtl.edu.vn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoi_dung`
--

CREATE TABLE `nguoi_dung` (
  `id` int(11) NOT NULL,
  `tai_khoan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mat_khau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoi_dung`
--

INSERT INTO `nguoi_dung` (`id`, `tai_khoan`, `mat_khau`) VALUES
(1, 'admin', '12345678');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `can_bo`
--
ALTER TABLE `can_bo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `can_bo_ibfk_1` (`chuc_vu_id`);

--
-- Chỉ mục cho bảng `chuc_vu`
--
ALTER TABLE `chuc_vu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chuc_vu_ibfk_1` (`don_vi_id`);

--
-- Chỉ mục cho bảng `don_vi`
--
ALTER TABLE `don_vi`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `can_bo`
--
ALTER TABLE `can_bo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `chuc_vu`
--
ALTER TABLE `chuc_vu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `don_vi`
--
ALTER TABLE `don_vi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `can_bo`
--
ALTER TABLE `can_bo`
  ADD CONSTRAINT `can_bo_ibfk_1` FOREIGN KEY (`chuc_vu_id`) REFERENCES `chuc_vu` (`id`);

--
-- Các ràng buộc cho bảng `chuc_vu`
--
ALTER TABLE `chuc_vu`
  ADD CONSTRAINT `chuc_vu_ibfk_1` FOREIGN KEY (`don_vi_id`) REFERENCES `don_vi` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
