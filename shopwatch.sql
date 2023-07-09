-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 06, 2022 lúc 05:05 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shopwatch`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `anh_gt`
--

CREATE TABLE `anh_gt` (
  `id_anh` int(11) NOT NULL,
  `ten_anh` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tieu_de` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `anh_gt`
--

INSERT INTO `anh_gt` (`id_anh`, `ten_anh`, `Tieu_de`) VALUES
(1, 'anh_1.png', ''),
(2, 'anh_2.png', ''),
(3, 'anh_3.png', ''),
(4, 'anh_4.png', ''),
(5, 'anh_5.png', ''),
(6, 'anh_6.png', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `hinhanh` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tieu_de` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`id`, `hinhanh`, `tieu_de`, `mota`, `path`) VALUES
(1, 'tham_dinh_dong_ho.png', 'Thẩm định đồng hồ Thật,giả', 'Thẩm Định Đồng Hồ Thật Giả-với mong muốn giúp người tiêu dùng phân biệt được đồng hồ thật giả - bảo vệ quyền lợi người tiêu dùng–Tẩy chay đồng hồ Fake.', 'thẩm định'),
(2, 'banner-citizen-15.png', 'Siêu giảm giá,giảm 15% các mặt hàng Citizen', 'Đợt giảm giá cuối năm lên đến 15%', 'shop');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietphukien`
--

CREATE TABLE `chitietphukien` (
  `idpk` int(11) NOT NULL,
  `idlpk` int(11) NOT NULL,
  `tenpk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia` int(11) NOT NULL,
  `hinhanh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mausac` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chatlieu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` int(11) NOT NULL,
  `thoigian` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietphukien`
--

INSERT INTO `chitietphukien` (`idpk`, `idlpk`, `tenpk`, `gia`, `hinhanh`, `mausac`, `chatlieu`, `size`, `thoigian`) VALUES
(1, 1, 'Dây đồng hồ Nato 3 vạch Đỏ-Trắng-Xanh size 20', 250000, 'pk-daynato-3v-do-trang-xanh.png\r\n', 'Đỏ-Trắng-Xanh', 'Dây vãi', 20, '2022-12-05 07:42:10'),
(2, 1, 'Dây đồng hồ Nato 5 vạch Đỏ-Trắng-Xanh size 20', 250000, 'pk-daynato-5v-do-tran-xanh.png', 'Đỏ-Trắng-Xanh', 'Dây vãi', 20, '2022-12-05 07:43:27'),
(3, 1, 'Dây da bò PK-ĐH_DDB-Đ size 20', 400000, 'day-da-bo-pk-dd-bo-den.png', 'Màu đen', 'Da bò', 20, '2022-12-05 07:43:27'),
(4, 2, 'Khóa bướm size 16 PK-KB-16v', 300000, 'pk-khoabuom-s16vang.png', 'Vàng', 'Kim loại', 16, '2022-12-05 07:48:39'),
(5, 2, 'Khóa bướm size 16 PK-KB-16t', 300000, 'pk-khoabuom-s16trang.png', 'Trắng', 'Kim loại', 16, '2022-12-05 07:50:53'),
(6, 2, 'Khóa bướm Ogival size 18 KB-OR-18T', 600000, 'pk-khoabuom-ogival-s18trang.png', 'Trắng', 'Kim loại', 18, '2022-12-05 07:53:04'),
(7, 3, 'Hộp đựng đồng hồ màu đen PK-HĐ-Đ', 350000, 'hop-dung-pk-hopcamtay-den.png', 'Đen', 'Da', 20, '2022-12-05 07:54:56'),
(8, 3, 'Hộp đựng đồng hồ màu Nâu PK-HĐ-N', 350000, 'hop-dung-pk-hopcamtay-nau.png', 'Nâu', 'Da', 20, '2022-12-05 07:57:24'),
(9, 4, 'Bộ dụng cụ làm sạch đồng hồ', 300000, 'bo-dungcu-ve-sinh-dong-ho.png', 'Đen', 'Kim loại', 20, '2022-12-05 07:58:44');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiet_hoadon`
--

CREATE TABLE `chitiet_hoadon` (
  `id_cthd` int(11) NOT NULL,
  `MaHD` int(11) NOT NULL,
  `Masp` int(11) NOT NULL,
  `code` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soluong` int(11) NOT NULL,
  `Gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitiet_hoadon`
--

INSERT INTO `chitiet_hoadon` (`id_cthd`, `MaHD`, `Masp`, `code`, `soluong`, `Gia`) VALUES
(62, 69, 8, '4325', 2, 11340000),
(63, 69, 4, '4325', 1, 7577000),
(64, 70, 4, '1230', 1, 7577000),
(65, 71, 3, '3237', 1, 8775000),
(66, 72, 2, '6953', 3, 5500000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `idDanhmuc` int(11) NOT NULL,
  `tenDanhmuc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`idDanhmuc`, `tenDanhmuc`, `mota`) VALUES
(1, 'Thương hiệu', ''),
(2, 'Loại dây', ''),
(3, 'Loại máy', ''),
(4, 'Khoảng giá', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `MaHD` int(11) NOT NULL,
  `code` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Ngaytao` datetime NOT NULL,
  `nguoinhan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sodienthoai` int(11) NOT NULL,
  `trangthai` int(11) NOT NULL,
  `tongtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`MaHD`, `code`, `Ngaytao`, `nguoinhan`, `diachi`, `sodienthoai`, `trangthai`, `tongtien`) VALUES
(69, '4325', '2022-11-30 18:35:57', 'Phạm Hoàng', 'Đội 2 Trường Phước Hải Lâm.Hải Lăng,Quảng Trị', 2147483647, 0, 30257000),
(70, '1230', '2022-11-30 18:36:29', 'Phạm Hoàng', 'K19,Huỳnh Bá Chánh,Hòa Hải Ngũ Hành Sơn,Đà Nẵng', 2147483647, 0, 7577000),
(71, '3237', '2022-12-04 20:21:06', 'Phạm Hoàng', 'K19,Huỳnh Bá Chánh,Hòa Hải Ngũ Hành Sơn,Đà Nẵng', 2147483647, 0, 8775000),
(72, '6953', '2022-12-04 21:04:23', 'Phạm Hoàng', 'K19,Huỳnh Bá Chánh,Hòa Hải Ngũ Hành Sơn,Đà Nẵng', 2147483647, 0, 16500000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoanggia`
--

CREATE TABLE `khoanggia` (
  `idKG` int(11) NOT NULL,
  `khoangGia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gt_1` int(20) NOT NULL,
  `gt_2` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khoanggia`
--

INSERT INTO `khoanggia` (`idKG`, `khoangGia`, `gt_1`, `gt_2`) VALUES
(1, 'Từ 2 triệu - 5 triệu', 2000000, 5000000),
(2, 'Từ 5 triệu - 10 triệu', 5000000, 10000000),
(3, 'Từ 10 triệu - 20 triệu', 10000000, 20000000),
(4, 'Từ 20 triệu - 50 triệu', 20000000, 50000000),
(5, 'Từ 50 triệu - 100  triệu', 50000000, 100000000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaiday`
--

CREATE TABLE `loaiday` (
  `idLD` int(11) NOT NULL,
  `tenLD` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhanh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaiday`
--

INSERT INTO `loaiday` (`idLD`, `tenLD`, `mota`, `hinhanh`) VALUES
(1, 'Dây da', '', 'day-da-dong-ho.png'),
(2, 'Dây thép không gỉ', '', 'logo-day-thep-khong-gi.jpg'),
(3, 'Dây cao su', '', 'logo-day-cao-su.jpg'),
(4, 'Dây titanium', '', 'logo-day-titanum.png'),
(5, 'Dây vải', '', 'logo-day-vai.png'),
(6, 'Dây nhựa', '', 'logo-day-nhua.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaimay`
--

CREATE TABLE `loaimay` (
  `idLM` int(11) NOT NULL,
  `tenLM` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhanh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaimay`
--

INSERT INTO `loaimay` (`idLM`, `tenLM`, `mota`, `hinhanh`) VALUES
(1, 'Automatic', '', ''),
(2, 'Quartz', '', ''),
(3, 'Kinetic', '', ''),
(4, 'Năng lượng mặt trời', '', ''),
(21, 'máy cày', '', 'logo-mb.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaishop`
--

CREATE TABLE `loaishop` (
  `idLS` int(11) NOT NULL,
  `ten` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tieude` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Loai_shop` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaishop`
--

INSERT INTO `loaishop` (`idLS`, `ten`, `tieude`, `Loai_shop`, `path`) VALUES
(5, 'watch_nam.png', 'Lịch lãm,Sang trọng', 'Shop đồng hồ nam', 'Nam'),
(6, 'watch_nu.jpg', 'Quý phái,Trang nhã', 'Shop đồng hồ nữ', 'Nu'),
(7, 'watch_cap.png', 'Sự hòa hợp,Kết nối', 'Shop đồng hồ cặp', 'Capdoi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `maDD` int(11) NOT NULL,
  `Ho` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Ten` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tendangnhap` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachiemail` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matkhau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` int(50) NOT NULL,
  `Ma_quyen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`maDD`, `Ho`, `Ten`, `tendangnhap`, `diachiemail`, `matkhau`, `sdt`, `Ma_quyen`) VALUES
(71, 'Phạm', 'Hoàng', 'hoang111', 'hoang123@gmail.com', '$2y$10$La5WJksjjc4h4ZOLPzT/QutPvczpll/WrLH2YAaGLCms0rp8IMsg.', 2147483647, 2),
(73, 'admin', 'admin', 'admin', 'admin@gmail.com', '$2y$10$WV6uQx/RrsL7qk54wE8ateKe6OcVDpBDNw8WdVUdPvWiL0HUVYuua', 215468744, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phukien`
--

CREATE TABLE `phukien` (
  `idlpk` int(11) NOT NULL,
  `loaipk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota_lpk` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phukien`
--

INSERT INTO `phukien` (`idlpk`, `loaipk`, `mota_lpk`) VALUES
(1, 'Dây đồng hồ', ''),
(2, 'Khóa đồng hồ', ''),
(3, 'Hộp đựng đồng hồ', ''),
(4, 'Dụng cụ vệ sinh', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `idsp` int(11) NOT NULL,
  `idTH` int(11) NOT NULL,
  `idLM` int(11) NOT NULL,
  `idLD` int(11) NOT NULL,
  `gioi_tinh` int(11) NOT NULL,
  `ten_sp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia_sp` int(20) NOT NULL,
  `hinhanh_1` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhanh_2` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhanh_3` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota_sp` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sizemat` int(10) NOT NULL,
  `matkinh` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nguon_goc` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chiu_nuoc` int(50) NOT NULL,
  `chuc_nang_khac` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bao_hiem` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bao_hanh_QT` int(50) NOT NULL,
  `thoigian_them` datetime NOT NULL,
  `So_luong` int(11) NOT NULL,
  `khuyenMai` int(11) NOT NULL,
  `trangThai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`idsp`, `idTH`, `idLM`, `idLD`, `gioi_tinh`, `ten_sp`, `gia_sp`, `hinhanh_1`, `hinhanh_2`, `hinhanh_3`, `mota_sp`, `sizemat`, `matkinh`, `nguon_goc`, `chiu_nuoc`, `chuc_nang_khac`, `bao_hiem`, `bao_hanh_QT`, `thoigian_them`, `So_luong`, `khuyenMai`, `trangThai`) VALUES
(2, 1, 1, 1, 1, 'NH8353-00H', 5500000, 'NH8353-00H-1.png', 'NH8353-00H-2.png', 'NH8353-00H-3.png', '', 40, 'Kính Cứng', 'Nhật Bản', 50, 'Lịch ngày,lịch thứ', '5 năm cả lỗi người dùng tại watchTran', 1, '2022-10-28 11:07:02', 3, 15, 0),
(3, 1, 1, 1, 1, 'NY4053-05A', 8775000, 'NY4053-05A-1.png', 'NY4053-05A-2.png', 'NY4053-05A-3.png', '', 40, 'Kính Sapphire', 'Nhật Bản', 50, 'Lịch ngày,lịch thứ', 'Bảo hành 5 năm cả lỗi người dùng tại watchTran', 1, '2022-10-28 11:11:26', 3, 15, 0),
(4, 1, 1, 1, 1, 'NH8390-20L', 7577000, 'NH8390-20L-1.png', 'NH8390-20L-2.png', 'NH8390-20L-3.png', '', 40, 'Kính Cứng', 'Nhật Bản', 50, 'Lịch ngày,lịch thứ', 'Bảo hành 5 năm cả lỗi người dùng tại watchTran', 1, '2022-10-28 11:14:21', 0, 0, 0),
(5, 1, 1, 1, 0, 'NK0001-17X', 11240000, 'NK0001-17X-1.png', 'NK0001-17X-2.png', 'NK0001-17X-3.png', '', 41, 'Kính cứng', 'Nhật Bản', 50, 'Lịch ngày,Lịch thứ', 'bảo hành 5 năm cả lỗi của người dùng tại watchaTran', 1, '2022-10-28 11:14:21', 2, 0, 0),
(6, 1, 1, 1, 0, 'NK5000-12P', 13570000, 'NK5000-12P-1.png', 'NK5000-12P-2.png', 'NK5000-12P-3.png', '', 41, 'Kính Cứng', 'Nhật Bản', 50, 'Lịch ngày,lịch thứ', 'Bảo hành 5 năm cả lỗi người dùng tại watchtran', 1, '2022-10-28 11:22:53', 4, 0, 0),
(7, 1, 1, 1, 0, 'NH8350-08B', 5595000, 'NH8350-08B-1.png', '', '', '', 40, 'Kính cứng', 'Nhật Bản', 50, 'Lịch ngày,lịch thứ', 'Bảo hành 5 năm cả lỗi  người dùng tại watchTran', 1, '2022-10-28 11:25:15', 1, 0, 0),
(8, 1, 1, 1, 0, 'NK0001-25X', 11440000, 'NK0001-25X-1.png', 'NK0001-25X-2.png', 'NK0001-25X-3.png', '', 41, 'Kính Cứng', 'Nhật Bản', 50, 'Lịch ngày,lịch thứ', 'Bảo hành 5 năm cả lỗi người dùng tai watchTran', 1, '2022-10-28 11:28:08', 0, 0, 0),
(10, 1, 1, 1, 0, 'RA-AK0007S10B', 13940000, 'RA-AK0007S10B-1.png', 'RA-AK0007S10B-2.png', 'RA-AK0007S10B-3.png', '', 43, 'Kính Sapphire', 'Nhật Bản', 50, 'Lịch ngày,lịch thứ,Lịch ngày đêm', '5 năm cả lỗi người dùng tại Watch_Tran', 1, '2022-11-17 10:02:24', 2, 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanphamnam`
--

CREATE TABLE `sanphamnam` (
  `idSP` int(11) NOT NULL,
  `gioi_tinh` bit(1) NOT NULL,
  `idTH` int(11) NOT NULL,
  `idLD` int(11) NOT NULL,
  `idLM` int(11) NOT NULL,
  `tenSP` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia` int(20) NOT NULL,
  `mota` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tinhtrang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thoigian1` datetime DEFAULT NULL,
  `hinhanh_1` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhanh_2` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhanh_3` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanphamnam`
--

INSERT INTO `sanphamnam` (`idSP`, `gioi_tinh`, `idTH`, `idLD`, `idLM`, `tenSP`, `gia`, `mota`, `tinhtrang`, `thoigian1`, `hinhanh_1`, `hinhanh_2`, `hinhanh_3`) VALUES
(1, b'1', 1, 3, 1, 'ĐỒNG HỒ CITIZEN NJ0080-50E', 10100000, '', 'Còn hàng', NULL, 'NJ0129-10X.png', 'NJ0129-10X-2.png', 'NJ0129-10X-3.png'),
(2, b'1', 1, 3, 1, 'NY0080-12X', 13440000, '', 'CÒn hàng', '0000-00-00 00:00:00', 'NY0080-12X-1.png', 'NY0080-12X-2', 'NY0080-12X-3'),
(3, b'1', 1, 3, 1, 'NJ0125-11E', 12320000, '', 'Còn hàng', NULL, 'NJ0125-11E-1.png', 'NJ0125-11E-2.png', 'NJ0125-11E-3.png'),
(4, b'1', 1, 3, 1, 'NH8380-15E', 10010000, '', 'CÒn hàng', NULL, 'NH8380-15E-1.png', 'NH8380-15E-2.png', 'NH8380-15E-3.png'),
(5, b'1', 1, 3, 1, 'NY0040-09E', 7750000, '', 'CÒn hàng', NULL, 'NY0040-09E-1.png', 'NY0040-09E-2.png', 'NY0040-09E-3.png'),
(6, b'1', 1, 3, 1, 'NY0040-09WB', 7540000, '', 'Còn hàng', NULL, 'NY0040-09WB-1.png', 'NY0040-09WB-2.png', 'NY0040-09WB-3.png'),
(7, b'1', 1, 3, 1, 'NH8381-12L', 13480000, '', 'Còn hàng', NULL, 'NH8381-12L-1.png', '', ''),
(8, b'1', 1, 3, 1, 'NY0083-14X', 8690000, '', 'Còn hàng', NULL, 'NY0083-14X-1.png', 'NY0083-14X-2.png', 'NY0083-14X-3.png'),
(9, b'1', 1, 3, 1, 'NY0088-11E\r\n', 9050000, '', 'Còn hàng', NULL, 'NY0088-11E-1.png', 'NY0088-11E-2.png', 'NY0088-11E-3.png'),
(10, b'1', 1, 1, 1, 'NH8390-11X', 13480000, '', 'Còn hàng', NULL, 'NH8390-11X-1.png', 'NH8390-11X-2.png', 'NH8390-11X-3.png'),
(11, b'1', 1, 1, 1, 'NH8353-00H', 8690000, '', 'Còn hàng', NULL, 'NH8353-00H-1.png', 'NH8353-00H-2.png', 'NH8353-00H-3.png'),
(12, b'1', 1, 1, 1, 'NY4053-05A', 28560000, '', 'Còn hàng', NULL, 'NY4053-05A-1.png', 'NY4053-05A-2.png', 'NY4053-05A-3.png'),
(13, b'1', 1, 1, 1, 'NK0001-17X', 9050000, '', 'Còn hàng', NULL, 'NK0001-17X-1.png', 'NK0001-17X-2.png', 'NK0001-17X-3.png'),
(14, b'1', 1, 1, 1, 'NK5000-12P', 13480000, '', 'Còn hàng', NULL, 'NK5000-12P-1.png', 'NK5000-12P-2.png', 'NK5000-12P-3.png'),
(15, b'1', 1, 1, 1, '\r\n', 9117000, '', 'Còn hàng', NULL, 'NH8350-08B-1.png', '', ''),
(16, b'1', 1, 1, 1, 'NK0001-25X', 5520000, '', 'CÒn hàng', NULL, 'NK0001-25X-1.png', 'NK0001-25X-2.png', 'NK0001-25X-3.png'),
(17, b'1', 1, 1, 1, 'NJ0113-10A', 8950000, '', 'Còn hàng', NULL, 'NJ0113-10A-1.png', 'NJ0113-10A-2.png', 'NJ0113-10A-3.png'),
(18, b'1', 1, 1, 1, 'NH8393-05A', 25700000, '', 'Còn hàng', NULL, 'NH8393-05A-1.png', 'NH8393-05A-2.png', 'NH8393-05A-3.png'),
(19, b'1', 1, 2, 1, 'NJ0080-50E', 10100000, '', 'Còn hàng', NULL, 'NJ0080-50E-1.png', 'NJ0080-50E-2.png', 'NJ0080-50E-3.png'),
(20, b'1', 2, 2, 1, 'RE-AV0114E00B', 24880000, '', 'Còn hàng', NULL, 'RE-AV0114E00B.png', '', ''),
(21, b'1', 3, 2, 1, 'BL1831-15MTWI-AMSK-T', 8360000, '', 'Còn hàng', NULL, 'BL1831-15MTWI-AMSK-T.png', '', ''),
(22, b'1', 3, 2, 1, 'BL1850-15MTWI-AMSK-T', 8450000, '', 'Còn hàng', NULL, 'BL1850-15MTWI-AMSK-T.png', '', ''),
(23, b'1', 3, 2, 1, 'BL1832-25MTWI-R-AMSR-T', 6140000, '', 'Còn hàng', NULL, 'BL1832-25MTWI-R-AMSR-T.png', '', ''),
(24, b'1', 4, 2, 1, 'OG358.652AGSR-T', 28660000, '', 'CÒn hàng', NULL, 'OG358.652AGSR-T.png', '', ''),
(25, b'1', 4, 2, 1, 'OG1929-24AGSR-T', 16970000, '', 'Còn hàng', NULL, 'Ogival-OG1929-24AGK-T-Gold-v.png', '', ''),
(26, b'1', 1, 2, 1, 'NK0008-85L', 13450000, '', '', '0000-00-00 00:00:00', 'NK0008-85L-1.png', 'NK0008-85L-2.png', 'NK0008-85L-3.png'),
(27, b'1', 1, 2, 1, 'NH8390-71L', 8750000, '', '', NULL, 'NH8390-71L-1.png', 'NH8390-71L-2.png', 'NH8390-71L-3.png'),
(28, b'1', 1, 2, 1, 'NH8394-70H', 9117000, '', '', '0000-00-00 00:00:00', 'NH8394-70H-1.png', 'NH8394-70H-2.png', 'NH8394-70H-3.png'),
(29, b'1', 1, 1, 1, 'NH8390-20L', 9050000, '', 'Còn hàng', NULL, 'NH8390-20L-1.png', 'NH8390-20L-2.png', 'NH8390-20L-3.png'),
(30, b'1', 1, 2, 1, 'NJ0080-50E', 10010000, '', '', '0000-00-00 00:00:00', 'NJ0080-50E-1.png', 'NJ0080-50E-2.png', 'NJ0080-50E-3.png'),
(31, b'1', 1, 2, 1, 'NK0008-85L', 13450000, '', '', '0000-00-00 00:00:00', 'NK0008-85L-1.png', 'NK0008-85L-2.png', 'NK0008-85L-3.png'),
(32, b'1', 1, 2, 1, 'NH7514-59E', 9512000, '', '', NULL, 'NH7514-59E-1.png', '', ''),
(33, b'1', 1, 2, 1, 'NH7506-81A', 9330000, '', '', NULL, 'NH7506-81A-1.png', 'NH7506-81A-2.png', 'NH7506-81A-3.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thuonghieu`
--

CREATE TABLE `thuonghieu` (
  `idTH` int(11) NOT NULL,
  `tenTH` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhanh` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `khuyenmai_TH` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thuonghieu`
--

INSERT INTO `thuonghieu` (`idTH`, `tenTH`, `mota`, `hinhanh`, `khuyenmai_TH`) VALUES
(1, 'Citizen', 'Phần lớn những mẫu đồng hồ của Citizen sử dụng máy Quartz hoặc Eco-Drive. Eco-Drive là công nghệ chuyển hóa năng lượng từ những nguồn năng lượng tự nhiên như mặt trời hoặc nhiệt năng. Mẫu đồng hồ Eco-Drive đầu tiên ra đời vào năm 1995.', 'citizen.png', 15),
(2, 'Orient', '', 'Orient.png', 0),
(3, 'Bentley', '', 'Bentley.png', 0),
(4, 'Ogival', '', 'Ogival.png', 0),
(5, 'Freelock', '', 'Freelock.png', 0),
(6, 'SRwatch', '', 'SRwatch.png', 0),
(7, 'Seiko', '', 'Seiko.png', 0),
(8, 'Bulova', '', 'Bulova.png', 0),
(9, 'Candio', '', 'Candio.png', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `idtt` int(11) NOT NULL,
  `tentt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tieudett` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhanh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thoigianthem` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tintuc`
--

INSERT INTO `tintuc` (`idtt`, `tentt`, `tieudett`, `mota`, `hinhanh`, `thoigianthem`) VALUES
(1, 'Đồng hồ nữ món quà ý nghĩa cho các ngày lễ', '20/10 sắp đến gần và bạn đang tìm một món quà vừa độc đáo, vừa ý nghĩa cho người phụ nữ đời mình? Bạn nghĩ...', '', 'dong-ho-nu.jpg', '2022-12-05 09:47:11'),
(2, 'Hướng dẫn chọn đồng hồ cho nam,nữ từ chuyên gia', 'Một chiếc đồng hồ dù có sang xịn, đẳng cấp đến đâu mà khi đeo lên tay không vừa vặn, quá rộng hay quá chật...', '', 'cach-chon-size-dong-ho.png\r\n', '2022-12-05 09:47:11'),
(3, '10 gợi ý đồng hồ cho chú rễ vào ngày cưới', 'Ngày cưới, nếu cô dâu lộng lẫy trong chiếc váy trắng tinh khôi, chú rể cũng phải thật bảnh bao trước quan viên hai họ....', '', 'dong-ho-cho-chu-re.png', '2022-12-05 09:47:11'),
(4, 'Top 10 mẫu đồng hồ nữ bán chạy nhất 2022', 'Mỗi năm, dòng chảy thời trang liên tục thay đổi và thị hiếu mua sắm của chị em phụ nữ cũng biến hóa khôn lường!..', '', 'top-dong-ho-nu-ban-chay-nhat.png', '2022-12-05 09:47:11'),
(5, 'Truy tìm 10 đồng hồ nữ bán chạy nhất 2021', 'Thế kỷ 21 đánh dấu nhiều thay đổi lớn trong thẩm mỹ của con người, đặc biệt là chị em phụ nữ. Ngày xưa, nhắc...', '', 'nhung-mau-dong-ho-nu-dep.png', '2022-12-05 09:47:11');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `anh_gt`
--
ALTER TABLE `anh_gt`
  ADD PRIMARY KEY (`id_anh`);

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chitietphukien`
--
ALTER TABLE `chitietphukien`
  ADD PRIMARY KEY (`idpk`);

--
-- Chỉ mục cho bảng `chitiet_hoadon`
--
ALTER TABLE `chitiet_hoadon`
  ADD PRIMARY KEY (`id_cthd`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`idDanhmuc`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`MaHD`);

--
-- Chỉ mục cho bảng `khoanggia`
--
ALTER TABLE `khoanggia`
  ADD PRIMARY KEY (`idKG`);

--
-- Chỉ mục cho bảng `loaiday`
--
ALTER TABLE `loaiday`
  ADD PRIMARY KEY (`idLD`);

--
-- Chỉ mục cho bảng `loaimay`
--
ALTER TABLE `loaimay`
  ADD PRIMARY KEY (`idLM`);

--
-- Chỉ mục cho bảng `loaishop`
--
ALTER TABLE `loaishop`
  ADD PRIMARY KEY (`idLS`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`maDD`);

--
-- Chỉ mục cho bảng `phukien`
--
ALTER TABLE `phukien`
  ADD PRIMARY KEY (`idlpk`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`idsp`);

--
-- Chỉ mục cho bảng `sanphamnam`
--
ALTER TABLE `sanphamnam`
  ADD PRIMARY KEY (`idSP`);

--
-- Chỉ mục cho bảng `thuonghieu`
--
ALTER TABLE `thuonghieu`
  ADD PRIMARY KEY (`idTH`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`idtt`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `anh_gt`
--
ALTER TABLE `anh_gt`
  MODIFY `id_anh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `chitietphukien`
--
ALTER TABLE `chitietphukien`
  MODIFY `idpk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `chitiet_hoadon`
--
ALTER TABLE `chitiet_hoadon`
  MODIFY `id_cthd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `idDanhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `MaHD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT cho bảng `khoanggia`
--
ALTER TABLE `khoanggia`
  MODIFY `idKG` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `loaiday`
--
ALTER TABLE `loaiday`
  MODIFY `idLD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `loaimay`
--
ALTER TABLE `loaimay`
  MODIFY `idLM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `loaishop`
--
ALTER TABLE `loaishop`
  MODIFY `idLS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `maDD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT cho bảng `phukien`
--
ALTER TABLE `phukien`
  MODIFY `idlpk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `idsp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `sanphamnam`
--
ALTER TABLE `sanphamnam`
  MODIFY `idSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `thuonghieu`
--
ALTER TABLE `thuonghieu`
  MODIFY `idTH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `idtt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
