-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 21, 2021 lúc 06:28 PM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlymau`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoitinhnguyen`
--

CREATE TABLE `nguoitinhnguyen` (
  `bd_id` int(11) NOT NULL,
  `bd_name` varchar(30) NOT NULL,
  `bd_sex` varchar(5) NOT NULL,
  `bd_age` int(11) NOT NULL,
  `bd_bgroup` varchar(3) NOT NULL,
  `bd_reg_date` date NOT NULL,
  `bd_phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nguoitinhnguyen`
--

INSERT INTO `nguoitinhnguyen` (`bd_id`, `bd_name`, `bd_sex`, `bd_age`, `bd_bgroup`, `bd_reg_date`, `bd_phone`) VALUES
(1, 'manh', 'on', 20, 'A', '2001-08-27', 946741530),
(2, 'test', 'nu', 69, 'A', '1999-08-12', 2147483647),
(4, 'thanh', 'nu', 19, 'o', '2001-09-01', 123456),
(7, 'hanh', 'nu', 4, 'B', '2003-12-23', 647950334),
(8, 'van', 'nu', 69, 'B', '1974-06-27', 12212121);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `nguoitinhnguyen`
--
ALTER TABLE `nguoitinhnguyen`
  ADD PRIMARY KEY (`bd_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `nguoitinhnguyen`
--
ALTER TABLE `nguoitinhnguyen`
  MODIFY `bd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
