-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th8 24, 2021 lúc 11:26 AM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ktra`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `canbo`
--

CREATE TABLE `canbo` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `chucvu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `coquan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` int(11) NOT NULL,
  `id_donvi` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `canbo`
--

INSERT INTO `canbo` (`id`, `name`, `thumbnail`, `chucvu`, `coquan`, `email`, `sdt`, `id_donvi`) VALUES
(1, 'Kiều Tuấn Dũng ', 'http://cse.tlu.edu.vn/Portals/0/2016/Kieu%20Tuan%20Dung.jpg', 'Trưởng Ban', '123456789', 'kitudu@e.tlu.edu.vn', 123456789, 1),
(2, 'Lê Nguyễn Tuấn Thành', 'http://cse.tlu.edu.vn/Portals/0/a%20thanh.png', 'Trưởng Ban', '0353037823', 'thanhlnt@tlu.edu.vn\n', 123456789, 2),
(3, 'Nguyễn Khánh Linh', 'http://sie.tlu.edu.vn/Portals/0/Nguyen%20Khanh%20Linh.jpg', 'Phó Ban', '0353037823', 'nkl@gmail.com', 123456789, 3),
(4, 'Nguyễn Thị Thu Hương', 'http://cse.tlu.edu.vn/Portals/0/2016/HuongNT.jpg', 'Trợ Lý Hội Đồng', '0353037823', 'ntth@gmail.com', 369852741, 2),
(5, 'Trần Thị Ngân', 'http://cse.tlu.edu.vn/Portals/0/c%20ngan.jpg', 'Trưởng VPĐ', '0353037823', 'ngantt@tlu.edu.vn\n', 123456789, 4),
(6, 'Lưu Đức Trung', 'http://cse.tlu.edu.vn/Portals/0/Users/TrungLD.png', 'Phó VPĐ', '0353037823', 'luuductrung@tlu.edu.vn\n', 1236547856, 4),
(7, 'Nguyễn Đức Hậu', 'http://cse.tlu.edu.vn/Portals/0/Users/Nguyen%20duc%20hau.jpg', 'Phó VPĐ', '0353037823', 'NDH@gmail.com', 369852654, 5),
(8, 'Bùi Văn Huyến', 'http://cse.tlu.edu.vn/Portals/0/Users/huyen.jpg', 'Phó Phòng', '0353037823', 'bvhuyen@tlu.edu.vn\n', 753412344, 6),
(9, 'Phan Thị Thanh Huyền', 'http://cse.tlu.edu.vn/Portals/0/2016/phan%20thanh%20huyen.jpg', 'Trưởng Phòng', '0353037823', 'PTTH@e.tlu.edu.vn', 369854123, 6),
(10, 'Nguyễn Hằng Phương', 'http://cse.tlu.edu.vn/Portals/0/Users/HPhuong.jpg', 'Trưởng Phòng', '0353037823', 'NVD@e.tlu.edu.vn', 536987125, 7),
(12, 'Đặng Thị Thu Hiền', 'http://cse.tlu.edu.vn/Portals/0/Users/DangThuHien.jpg', 'Trưởng Phòng', '0363214862', 'DTTH@e.tlu.edu.vn', 123456789, 8),
(23, 'Nguyễn Quỳnh Diệp', 'http://cse.tlu.edu.vn/Portals/0/Users/%e1%ba%a3nh%20th%e1%ba%bb.png', 'Phó Phòng', '0363123654', 'diepnq@tlu.edu.vn', 123654125, 8),
(24, 'Trần Thị Hà Trang', 'http://cse.tlu.edu.vn/Portals/0/Trang%20Tran.jpg', 'Phó Phòng', '0363123654', 'doanhnn@tlu.edu.vn', 641564916, 8),
(25, '	Phạm Thanh Bình', 'http://cse.tlu.edu.vn/Portals/0/Images/2016/A%20Binh.jpg', 'Trưởng Văn Phòng Đoàn', '0363123654', 'binhpt@tlu.edu.vn', 315192969, 9),
(26, '	Lý Anh Tuấn', 'http://cse.tlu.edu.vn/Portals/0/Users/Ly_Anh_Tuan.jpg', 'Trưởng Phòng Khảo Thí', '0315929266', 'tuanla@tlu.edu.vn', 123654125, 10),
(27, '	Nguyễn Thị Phương Thảo', 'http://cse.tlu.edu.vn/Portals/0/Users/thao.jpg', 'Trưởng Phòng Tài Chính', '0315929266', 'thaont@tlu.edu.vn', 365266967, 11),
(28, '	Phạm Xuân Đồng', 'http://cse.tlu.edu.vn/Portals/0/Users/phamxuandong.jpg', 'Trưởng Phòng Hợp Tác Quốc Tế', '0363123654', 'dongpx@tlu.edu.vn', 321758521, 12),
(29, '	Nguyễn Ngọc Hà', 'http://cse.tlu.edu.vn/Portals/0/Users/ha.jpg', 'Thư Kí Phòng CT-CTSV', '0362321456', 'hantn@tlu.edu.vn', 2147483647, 13),
(30, '	Vũ Mạnh Tới', 'http://cse.tlu.edu.vn/Portals/0/Users/Vu_Manh_Toi.jpg', 'Trưởng Phòng KHCN', '0369851421', 'toivm@tlu.edu.vn', 966452145, 14),
(31, '	Nguyễn Hằng Phương', 'http://cse.tlu.edu.vn/Portals/0/Users/HPhuong.jpg', 'Thư Kí Thư Viện', '0369851421', 'phuongnh@tlu.edu.vn', 641564916, 15),
(32, '	Nguyễn Mạnh Hiển', 'http://cse.tlu.edu.vn/Portals/0/Users/nguyen%20manh%20hien%201.jpg', 'Trưởng BM', '0363123654', 'hiennm@tlu.edu.vn', 353037823, 19),
(33, '	Đỗ Văn Hải', 'http://cse.tlu.edu.vn/Portals/0/2016/Do%20Van%20Hai.jpg', 'Giảng viên', '0363123654', 'dvh@e.tlu.edu.vn', 123654125, 20),
(37, '	Nguyễn Văn Nam', 'http://cse.tlu.edu.vn/Portals/0/Users/ngvannam.jpg', 'Giảng Viên', '0362321456', 'NVN@e.tlu.edu.vn', 315192969, 24),
(38, '	Nguyễn Ngọc Quỳnh Châu ', 'http://cse.tlu.edu.vn/Portals/0/Users/chau.jpg', 'Giảng viên', '0363123654', 'nnqc@e.tlu.edu.vn', 369852147, 24);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donvi`
--

CREATE TABLE `donvi` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sophong` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `maytruc` int(255) DEFAULT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_parent` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donvi`
--

INSERT INTO `donvi` (`id`, `name`, `sophong`, `maytruc`, `diachi`, `email`, `website`, `id_parent`) VALUES
(1, 'Ban Giám Hiệu', 'P202', 368236741, 'Tầng2  toà A1', 'vpkdhtl@e.tlu.edu.vn', 'http://cse.tlu.edu.vn', 1),
(2, 'Hội Đồng Trường', 'P102', 36974512, 'Tầng 1 nhà B2', 'vpkdhtl@e.tlu.edu.vn', 'http://cse.tlu.edu.vn', 2),
(3, 'Văn Phòng Đảng Uỷ', 'P407', 427241274, 'tầng 4 nhà  A2', 'vpkdhtl@e.tlu.edu.vn', 'http://cse.tlu.edu.vn', 3),
(4, 'Văn Phòng Công Đoàn', 'P453', 124852741, 'tầng 4 nhà  A2', 'vpkdhtl@e.tlu.edu.vn', 'http://cse.tlu.edu.vn', 3),
(5, 'Văn Phòng Đoàn Thanh Niên', 'P410', 124785963, 'tầng 4 nhà  A2', 'vpkdhtl@e.tlu.edu.vn', 'http://cse.tlu.edu.vn', 3),
(6, 'Phòng Hành Chính Tổng Hợp', 'P114', 564127851, 'tầng 1 nhà A4', 'vpkdhtl@e.tlu.edu.vn', 'http://cse.tlu.edu.vn', 6),
(7, 'Phòng Quản Trị', 'P136', 784963245, 'tầng 1 nhà A4', 'vpkdhtl@e.tlu.edu.vn', 'http://cse.tlu.edu.vn', 6),
(8, 'Phòng Tổ Chức Cán Bộ', 'P101', 364235124, 'tầng 1 nhà A4', 'vpkdhtl@e.tlu.edu.vn', 'http://cse.tlu.edu.vn', 6),
(9, 'Phòng Đào Tạo', 'P102', 963258753, 'tầng 1 nhà A4', 'vpkdhtl@e.tlu.edu.vn', 'http://cse.tlu.edu.vn', 6),
(10, 'Phòng Khảo Thí Và Đảm Bảo Chất Lượng', 'P105', 305896352, 'tầng 1 nhà A4', 'vpkdhtl@e.tlu.edu.vn', 'http://cse.tlu.edu.vn', 6),
(11, 'Phòng Tài Chinh-Kế Toán', 'P113', 312654861, 'tầng 1 nhà A4', 'vpkdhtl@e.tlu.edu.vn', 'http://cse.tlu.edu.vn', 6),
(12, 'Phòng Hợp Tác Quốc Tế', 'P124', 236984360, 'tầng 1 nhà A4', 'vpkdhtl@e.tlu.edu.vn', 'http://cse.tlu.edu.vn', 6),
(13, 'Phòng Chính Trị & Công Tác Sinh Viên', 'P131', 145302753, 'tầng 1 nhà A4', 'vpkdhtl@e.tlu.edu.vn', 'http://cse.tlu.edu.vn', 6),
(14, 'Phòng Khoa Học Công Nghệ', 'P145', 141239751, 'tầng 1 nhà A4', 'vpkdhtl@e.tlu.edu.vn', 'http://cse.tlu.edu.vn', 6),
(15, 'Thư Viện', 'P159', 420364850, 'tầng 1 nhà A4', 'vpkdhtl@e.tlu.edu.vn', 'http://cse.tlu.edu.vn', 6),
(19, 'Trạm y tế', 'P164', 301425762, 'tầng 1 nhà A4', 'vpkdhtl@e.tlu.edu.vn', 'http://cse.tlu.edu.vn', 6),
(20, 'Khoa Công Nghệ Thông Tin', 'P230', 363951364, 'Tầng 2 Toà C5 ', 'CNTTtlu@e.tlu.edu.vn', 'CTNTT.edu.vn', 20),
(22, 'BM Toán Học', 'p201', NULL, NULL, NULL, NULL, 20),
(23, 'BM Kỹ thuật MT & Mạng', 'P207', NULL, NULL, NULL, NULL, 20),
(24, 'BM Hệ Thống Thông Tin', 'P223', NULL, NULL, NULL, NULL, 20);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `taikhoan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `trangthai` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `taikhoan`, `matkhau`, `trangthai`) VALUES
(1, 'admin', '1', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `canbo`
--
ALTER TABLE `canbo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Fk_donvi` (`id_donvi`);

--
-- Chỉ mục cho bảng `donvi`
--
ALTER TABLE `donvi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_child` (`id_parent`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `canbo`
--
ALTER TABLE `canbo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT cho bảng `donvi`
--
ALTER TABLE `donvi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `canbo`
--
ALTER TABLE `canbo`
  ADD CONSTRAINT `Fk_donvi` FOREIGN KEY (`id_donvi`) REFERENCES `donvi` (`id`);

--
-- Các ràng buộc cho bảng `donvi`
--
ALTER TABLE `donvi`
  ADD CONSTRAINT `FK_child` FOREIGN KEY (`id_parent`) REFERENCES `donvi` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
