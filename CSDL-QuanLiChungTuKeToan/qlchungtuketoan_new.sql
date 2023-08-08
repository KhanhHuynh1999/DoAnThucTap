-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 05, 2023 lúc 02:50 AM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlchungtuketoan_new`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2023_04_12_022458_create_tbl__quan_ly_tai_khoan_table', 1),
(5, '2023_04_12_022915_create_tbl__quan_ly_nguoi_dung_table', 2),
(6, '2023_04_12_022952_create_tbl__quan_ly_tai_khoan_table', 2),
(7, '2023_04_12_023148_create_tbl__quan_ly_phieu_chi_table', 3),
(8, '2023_04_12_023223_create_tbl__quan_ly_nha_cung_cap_table', 3),
(9, '2023_04_12_023544_create_tbl__quan_ly_thong_tin_khach_hang_table', 4),
(10, '2023_04_12_024147_create_tbl__quan_ly_thong_tin_cong_ty_table', 4),
(11, '2023_04_12_025548_create_tbl__quan_ly_phieu_thu_table', 5),
(12, '2023_04_12_032016_create_tbl__quan_ly_hoa_don_dien_tu_table', 6),
(13, '2023_04_12_033033_create_tbl__quan_ly_hoa_don_dien_tu_table', 7),
(14, '2023_04_12_033209_create_tbl__quan_ly_phieu_thu_table', 8),
(15, '2023_04_12_033257_create_tbl__quan_ly_phieu_chi_table', 8),
(16, '2023_04_13_030513_create_tbl__quan_ly_phieu_chi_table', 9),
(17, '2023_04_13_030755_create_tbl__quan_ly_khach_hang_table', 10),
(18, '2023_04_13_072333_create_tbl__quan_ly_thong_tin_cong_ty_table', 11),
(19, '2023_04_14_080552_create_tbl__quan_ly_nhan_vien_ke_toan_table', 12),
(20, '2023_04_14_082201_create_tbl__quan_ly_nhan_vien_ke_toan_table', 13),
(21, '2023_04_14_082322_create_tbl__quan_ly_tai_khoan_table', 13),
(22, '2023_04_14_094109_create_tbl__quan_ly_tai_khoan_table', 14),
(23, '2023_04_14_235154_create_tbl__quan_ly_phieu_thu_table', 15),
(24, '2023_04_15_002045_create_tbl__quan_ly_phieu_thu_table', 16),
(25, '2023_04_15_002506_create_tbl__quan_ly_phieu_thu_table', 17),
(26, '2023_04_15_003043_create_tbl__quan_ly_phieu_thu_table', 18),
(27, '2023_04_15_005939_create_tbl__quan_ly_phieu_thu_table', 19),
(28, '2023_04_15_031112_create_tbl__quan_ly_phieu_thu_table', 20),
(29, '2023_04_17_083827_create_tbl__quan_ly_phieu_thu_table', 21),
(30, '2023_04_18_025955_create_tbl__quan_ly_phieu_thu_table', 22),
(31, '2023_04_18_033038_create_tbl__quan_ly_phieu_thu_table', 23),
(32, '2023_04_18_034228_create_tbl__quan_ly_phieu_thu_table', 24),
(33, '2023_04_19_083355_create_tbl__quan_ly_phieu_thu_table', 25),
(34, '2023_04_19_090741_create_tbl__quan_ly_phieu_thu_table', 26),
(35, '2023_04_19_091627_create_tbl__quan_ly_phieu_thu_table', 27),
(36, '2023_04_19_091928_create_tbl__quan_ly_phieu_thu_table', 28),
(37, '2023_04_19_135131_create_tbl__quan_ly_hoa_don_dien_tu_table', 29),
(38, '2023_04_19_145034_create_tbl__quan_ly_hoa_don_dien_tu_table', 30),
(39, '2023_04_19_145157_create_tbl__quan_ly_hoa_don_dien_tu_table', 31),
(40, '2023_04_19_145420_create_tbl__quan_ly_hoa_don_dien_tu_table', 32),
(41, '2023_04_19_151344_create_tbl__quan_ly_hoa_don_dien_tu_table', 33),
(42, '2023_04_19_163159_create_tbl__quan_ly_hoa_don_dien_tu_table', 34),
(43, '2023_04_19_163822_create_tbl__quan_ly_hoa_don_dien_tu_table', 35),
(44, '2023_04_20_014157_create_tbl__quan_ly_hoa_don_dien_tu_table', 36),
(45, '2023_04_20_020344_create_tbl__quan_ly_phieu_thu_table', 37),
(46, '2023_04_20_023230_create_tbl__quan_ly_phieu_thu_table', 38),
(47, '2023_04_21_005806_create_tbl__quan_ly_phieu_chi_table', 39),
(48, '2023_04_21_011054_create_tbl__quan_ly_phieu_chi_table', 40),
(49, '2023_04_21_024016_create_tbl__quan_ly_phieu_chi_table', 41),
(50, '2023_04_21_024350_create_tbl__quan_ly_phieu_chi_table', 42),
(51, '2023_04_21_134730_create_tbl__quan_ly_nhat_ky_chung_table', 43);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_quanlyhoadondientu`
--

CREATE TABLE `tbl_quanlyhoadondientu` (
  `idHoaDonDienTu` bigint(20) UNSIGNED NOT NULL,
  `KyHieu` varchar(255) NOT NULL,
  `So` int(11) NOT NULL,
  `NgayLap` date NOT NULL,
  `TenDonVi` varchar(255) NOT NULL,
  `DiaChi` varchar(255) NOT NULL,
  `MaSoThueDienTu` varchar(255) NOT NULL,
  `SoHopDong` int(11) NOT NULL,
  `KyCuoc` date NOT NULL,
  `HinhThucThanhToan` varchar(255) NOT NULL,
  `DienGiai` varchar(255) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `TienDichVu` int(11) NOT NULL,
  `ThueSuat` int(11) NOT NULL,
  `TienThue` decimal(18,2) NOT NULL,
  `Cong` decimal(18,2) NOT NULL,
  `XacNhanThanhToan` tinyint(1) NOT NULL,
  `HinhAnhDienTu` varchar(255) NOT NULL,
  `idThongTinCongTy` int(11) NOT NULL,
  `idKhachHang` int(11) NOT NULL,
  `idNhanVienKeToan` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_quanlyhoadondientu`
--

INSERT INTO `tbl_quanlyhoadondientu` (`idHoaDonDienTu`, `KyHieu`, `So`, `NgayLap`, `TenDonVi`, `DiaChi`, `MaSoThueDienTu`, `SoHopDong`, `KyCuoc`, `HinhThucThanhToan`, `DienGiai`, `SoLuong`, `TienDichVu`, `ThueSuat`, `TienThue`, `Cong`, `XacNhanThanhToan`, `HinhAnhDienTu`, `idThongTinCongTy`, `idKhachHang`, `idNhanVienKeToan`, `created_at`, `updated_at`) VALUES
(14, 'BK/19E', 3561924, '2023-04-20', 'TẬP ĐOÀN CÔNG NGHIỆP - VIỄN THÔNG QUÂN ĐỘI', 'Lô D26 Khu đô thị mới Cầu Giấy, P. Yên Hòa, Quận Cầu Giấy, Thành Phố HÀ NỘI', '01001091106', 1000101100, '2023-03-27', 'TM/CK', 'Dịch Vụ HomePhone', 1, 23323233, 10, '2332323.30', '25655556.30', 0, '31801952541.jpg', 1, 1, 1, NULL, NULL),
(15, 'BK/19E', 3561924, '2023-04-20', 'TẬP ĐOÀN CÔNG NGHIỆP - VIỄN THÔNG QUÂN ĐỘI', 'Lô D26 Khu đô thị mới Cầu Giấy, P. Yên Hòa, Quận Cầu Giấy, Thành Phố HÀ NỘI', '01001091106', 1000101100, '2023-03-27', 'TM/CK', 'Dịch Vụ HomePhone 1', 2, 222, 10, '22.20', '244.20', 0, 'chợ đêm33.jpg', 1, 1, 1, NULL, NULL),
(16, 'BK/19E', 3561924, '2023-04-20', 'TẬP ĐOÀN CÔNG NGHIỆP - VIỄN THÔNG QUÂN ĐỘI', 'Lô D26 Khu đô thị mới Cầu Giấy, P. Yên Hòa, Quận Cầu Giấy, Thành Phố HÀ NỘI', '01001091106', 1000101100, '2023-03-27', 'TM/CK', 'Dịch Vụ HomePhone', 1, 43, 10, '4.30', '47.30', 1, 'cong-vien-hoa-da-lat-1-1024x768-167.jpg', 1, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_quanlykhachhang`
--

CREATE TABLE `tbl_quanlykhachhang` (
  `idKhachHang` bigint(20) UNSIGNED NOT NULL,
  `DonViKH` varchar(255) NOT NULL,
  `MaSoThueKH` int(11) NOT NULL,
  `SoTaiKhoanKH` int(20) NOT NULL,
  `SDT` int(20) NOT NULL,
  `DiaChiKH` varchar(255) NOT NULL,
  `NguoiLienHeKH` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_quanlykhachhang`
--

INSERT INTO `tbl_quanlykhachhang` (`idKhachHang`, `DonViKH`, `MaSoThueKH`, `SoTaiKhoanKH`, `SDT`, `DiaChiKH`, `NguoiLienHeKH`, `Email`, `created_at`, `updated_at`) VALUES
(1, 'CÔNG TY TNHH PA VIỆT NAM', 0, 123, 337997167, 'Long Xuyên - An Giang', 'Công Ty TNHH PA Việt Nam', 'Congtypavn@gmail.com', NULL, NULL),
(2, 'CÔNG TY TNHH PA VIỆT NAM', 0, 123456, 337997167, 'Long Xuyên - An Giang', 'Công Ty TNHH PA Việt Nam 1', 'sadasdasd123', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_quanlynhacungcap`
--

CREATE TABLE `tbl_quanlynhacungcap` (
  `idNhaCungCap` bigint(20) UNSIGNED NOT NULL,
  `DonViNCC` varchar(255) NOT NULL,
  `MaSoThueNCC` int(11) NOT NULL,
  `SoTaiKhoanNCC` int(20) NOT NULL,
  `SDT` int(20) NOT NULL,
  `DiaChiNCC` varchar(255) NOT NULL,
  `NguoiLienHeNCC` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Loai` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_quanlynhacungcap`
--

INSERT INTO `tbl_quanlynhacungcap` (`idNhaCungCap`, `DonViNCC`, `MaSoThueNCC`, `SoTaiKhoanNCC`, `SDT`, `DiaChiNCC`, `NguoiLienHeNCC`, `Email`, `Loai`, `created_at`, `updated_at`) VALUES
(1, 'Long Xuyên - An Giang', 1601223524, 0, 1602088557, '66 Phạm Hồng Thái, P.Mỹ Long, TP.Long Xuyên, An Giang', 'Của Hàng Uyên Khanh', 'UyenKhanh123@gmail.com', 'Điện Sinh Hoạt', NULL, NULL),
(8, 'Châu Đốc - An Giang', 1601223524, 0, 123456789, '66 Phạm Hồng Thái, P.Mỹ Long, TP.Long Xuyên, An Giang', 'Của Hàng Uyên Khanh 1', 'sdsdsdsd@23123.com', 'Nước Sinh Hoạt', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_quanlynhanvienketoan`
--

CREATE TABLE `tbl_quanlynhanvienketoan` (
  `idNhanVienKeToan` bigint(20) UNSIGNED NOT NULL,
  `HoVaTenNV` varchar(255) NOT NULL,
  `DiaChi` varchar(255) NOT NULL,
  `SDT` int(11) NOT NULL,
  `NamSinh` date NOT NULL,
  `BangCap` varchar(255) NOT NULL,
  `CMND` int(11) NOT NULL,
  `SoLaoDong` int(11) NOT NULL,
  `QuocTich` varchar(255) NOT NULL,
  `ThoiGianKiHopDong` date NOT NULL,
  `ThoiGianKetThucHopDong` date NOT NULL,
  `LoaiHopDong` varchar(255) NOT NULL,
  `ThoiGianThuViec` date NOT NULL,
  `ThoiGianKetThucThuViec` date NOT NULL,
  `HinhAnh` varchar(255) NOT NULL,
  `CongViecPhaiLam` varchar(255) NOT NULL,
  `GhiChu` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_quanlynhanvienketoan`
--

INSERT INTO `tbl_quanlynhanvienketoan` (`idNhanVienKeToan`, `HoVaTenNV`, `DiaChi`, `SDT`, `NamSinh`, `BangCap`, `CMND`, `SoLaoDong`, `QuocTich`, `ThoiGianKiHopDong`, `ThoiGianKetThucHopDong`, `LoaiHopDong`, `ThoiGianThuViec`, `ThoiGianKetThucThuViec`, `HinhAnh`, `CongViecPhaiLam`, `GhiChu`, `created_at`, `updated_at`) VALUES
(1, 'Huỳnh Tấn Khanh', 'An Giang', 337997167, '2023-04-12', 'Đại Học', 123456789, 123, 'Việt Nam', '0001-01-01', '0001-01-01', '1', '2023-03-27', '2023-05-07', 'chợ đêm69.jpg', 'Lập Trình', 'Thực Tập', NULL, NULL),
(9, 'Trần Văn A', 'An Giang', 337997167, '2023-04-13', 'Đại Học', 123456789, 123, 'Việt Nam', '0001-01-01', '0001-01-01', '1', '2023-03-27', '2023-05-06', 'cafe71.jpg', 'Lập Trình', 'ádasdasd', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_quanlynhatkychung`
--

CREATE TABLE `tbl_quanlynhatkychung` (
  `idNhatKyChung` bigint(20) UNSIGNED NOT NULL,
  `idPhieuChi` int(11) NOT NULL,
  `idPhieuThu` int(11) NOT NULL,
  `idHoaDonDienTu` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_quanlyphieuchi`
--

CREATE TABLE `tbl_quanlyphieuchi` (
  `idPhieuChi` bigint(20) UNSIGNED NOT NULL,
  `KyHieu` varchar(255) NOT NULL,
  `So` int(11) NOT NULL,
  `NgayThangNam` date NOT NULL,
  `HinhThucThanhToan` varchar(255) NOT NULL,
  `MST` int(11) NOT NULL,
  `HinhAnhChi` varchar(255) NOT NULL,
  `DonViTinh` varchar(255) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `DonGia` decimal(18,2) NOT NULL,
  `TongThanhTien` decimal(18,2) NOT NULL,
  `XacNhanThanhToan` tinyint(1) NOT NULL,
  `idNhaCungCap` int(11) NOT NULL,
  `idThongTinCongTy` int(11) NOT NULL,
  `idNhanVienKeToan` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_quanlyphieuchi`
--

INSERT INTO `tbl_quanlyphieuchi` (`idPhieuChi`, `KyHieu`, `So`, `NgayThangNam`, `HinhThucThanhToan`, `MST`, `HinhAnhChi`, `DonViTinh`, `SoLuong`, `DonGia`, `TongThanhTien`, `XacNhanThanhToan`, `idNhaCungCap`, `idThongTinCongTy`, `idNhanVienKeToan`, `created_at`, `updated_at`) VALUES
(1, '16AC/19P', 86414, '2023-04-21', 'TM', 1601223524, 'chợ đêm18.jpg', 'VND', 1, '12323.00', '12323.00', 1, 1, 1, 1, NULL, NULL),
(3, '16AC/19P', 80162, '2023-04-21', 'TM/CK', 1601223524, 'cafe60.jpg', 'VND', 1, '1111.00', '1111.00', 1, 1, 1, 1, NULL, NULL),
(4, '16AC/19P', 80162, '2023-04-21', 'TM/CK', 1601223524, 'cafe60.jpg', 'VND', 1, '2222.00', '2222.00', 0, 8, 1, 1, NULL, NULL),
(5, '16AC/19P', 80162, '2023-04-19', 'TM/CK', 1601223524, 'chợ đêm97.jpg', 'VND', 1, '2222.00', '2222.00', 0, 1, 1, 1, NULL, NULL),
(6, '16AC/19P', 80162, '2023-04-19', 'TM/CK', 1601223524, 'dac-san-cho-dem-da-lat-1-600x39782.jpg', 'VND', 1, '22235.00', '22235.00', 0, 1, 1, 1, NULL, NULL),
(7, '16AC/19P', 80162, '2023-04-19', 'TM/CK', 1601223524, 'banh-uot-xep-chong-da-lat-255.jpg', 'VND', 1, '22276.00', '22276.00', 0, 1, 1, 1, NULL, NULL),
(8, '16AC/19P', 80162, '2023-04-19', 'TM/CK', 1601223524, 'danh-sach-15-mon-an-ngon-o-da-lat-khong-nen-bo-qua-h453.jpg', 'VND', 1, '22235.00', '22235.00', 0, 1, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_quanlyphieuthu`
--

CREATE TABLE `tbl_quanlyphieuthu` (
  `idPhieuThu` bigint(20) UNSIGNED NOT NULL,
  `KyHieu` varchar(255) NOT NULL,
  `So` int(11) NOT NULL,
  `NgayThangNam` date NOT NULL,
  `HinhThucThanhToan` varchar(255) NOT NULL,
  `MST` int(11) NOT NULL,
  `HinhAnhThu` varchar(255) NOT NULL,
  `TenHangHoaDichVu` varchar(255) NOT NULL,
  `DonViTinh` varchar(255) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `DonGia` int(11) NOT NULL,
  `ThueSuat` int(11) NOT NULL,
  `ThanhTien` decimal(18,2) NOT NULL,
  `ThueGTGT` decimal(18,2) NOT NULL,
  `TongCongThanhTien` decimal(18,2) NOT NULL,
  `XacNhanThanhToan` tinyint(1) NOT NULL,
  `idNhanVienKeToan` int(11) NOT NULL,
  `idKhachHang` int(11) NOT NULL,
  `idThongTinCongTy` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_quanlyphieuthu`
--

INSERT INTO `tbl_quanlyphieuthu` (`idPhieuThu`, `KyHieu`, `So`, `NgayThangNam`, `HinhThucThanhToan`, `MST`, `HinhAnhThu`, `TenHangHoaDichVu`, `DonViTinh`, `SoLuong`, `DonGia`, `ThueSuat`, `ThanhTien`, `ThueGTGT`, `TongCongThanhTien`, `XacNhanThanhToan`, `idNhanVienKeToan`, `idKhachHang`, `idThongTinCongTy`, `created_at`, `updated_at`) VALUES
(13, 'PA/19E', 80162, '2023-04-21', 'TM/CK', 1601223524, 'chợ đêm28.jpg', 'Tiền Duy Trì Dịch Vu', 'VND', 4, 33, 5504, '132.00', '7263.96', '7395.96', 1, 1, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_quanlytaikhoan`
--

CREATE TABLE `tbl_quanlytaikhoan` (
  `idTaiKhoan` bigint(20) UNSIGNED NOT NULL,
  `TenDangNhap` varchar(255) NOT NULL,
  `MatKhau` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Quyen` tinyint(1) NOT NULL,
  `idNhanVienKeToan` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_quanlytaikhoan`
--

INSERT INTO `tbl_quanlytaikhoan` (`idTaiKhoan`, `TenDangNhap`, `MatKhau`, `Email`, `Quyen`, `idNhanVienKeToan`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$5kBowN3CvMXW/LdCN8ULROmIwP11DPSOYInMs3mAyLnKTgkg3w3SW', 'admin123@gmail.com', 0, 1, NULL, NULL),
(3, 'htkhanh123', '$2y$10$ho/xsZaFaE/eVgwHESjoKuhjF3tKBLV/JziwIcqh3Aj8j8/eh7QFe', 'huynhtuankhanh123@gmail.com', 1, 9, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_quanlythongtincongty`
--

CREATE TABLE `tbl_quanlythongtincongty` (
  `idThongTinCongTy` bigint(20) UNSIGNED NOT NULL,
  `NguoiLienHeCongTy` varchar(255) NOT NULL,
  `DonViCongTy` varchar(255) NOT NULL,
  `SDT` int(20) NOT NULL,
  `DiaChiCongTy` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `SoTaiKhoan` int(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_quanlythongtincongty`
--

INSERT INTO `tbl_quanlythongtincongty` (`idThongTinCongTy`, `NguoiLienHeCongTy`, `DonViCongTy`, `SDT`, `DiaChiCongTy`, `Email`, `SoTaiKhoan`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Thị Út', 'CÔNG TY TNHH TƯ VẤN & DỊCH VỤ KỸ THUẬT CÔNG NGHỆ XANH AN GIANG', 296655522, '34A Bùi Văn Danh, P Mỹ Xuyên, TP Long Xuyên, Tỉnh An Giang', 'contact@agitech.com.vn', 700133969, NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `tbl_quanlyhoadondientu`
--
ALTER TABLE `tbl_quanlyhoadondientu`
  ADD PRIMARY KEY (`idHoaDonDienTu`);

--
-- Chỉ mục cho bảng `tbl_quanlykhachhang`
--
ALTER TABLE `tbl_quanlykhachhang`
  ADD PRIMARY KEY (`idKhachHang`);

--
-- Chỉ mục cho bảng `tbl_quanlynhacungcap`
--
ALTER TABLE `tbl_quanlynhacungcap`
  ADD PRIMARY KEY (`idNhaCungCap`);

--
-- Chỉ mục cho bảng `tbl_quanlynhanvienketoan`
--
ALTER TABLE `tbl_quanlynhanvienketoan`
  ADD PRIMARY KEY (`idNhanVienKeToan`);

--
-- Chỉ mục cho bảng `tbl_quanlynhatkychung`
--
ALTER TABLE `tbl_quanlynhatkychung`
  ADD PRIMARY KEY (`idNhatKyChung`);

--
-- Chỉ mục cho bảng `tbl_quanlyphieuchi`
--
ALTER TABLE `tbl_quanlyphieuchi`
  ADD PRIMARY KEY (`idPhieuChi`);

--
-- Chỉ mục cho bảng `tbl_quanlyphieuthu`
--
ALTER TABLE `tbl_quanlyphieuthu`
  ADD PRIMARY KEY (`idPhieuThu`);

--
-- Chỉ mục cho bảng `tbl_quanlytaikhoan`
--
ALTER TABLE `tbl_quanlytaikhoan`
  ADD PRIMARY KEY (`idTaiKhoan`);

--
-- Chỉ mục cho bảng `tbl_quanlythongtincongty`
--
ALTER TABLE `tbl_quanlythongtincongty`
  ADD PRIMARY KEY (`idThongTinCongTy`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_quanlyhoadondientu`
--
ALTER TABLE `tbl_quanlyhoadondientu`
  MODIFY `idHoaDonDienTu` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `tbl_quanlykhachhang`
--
ALTER TABLE `tbl_quanlykhachhang`
  MODIFY `idKhachHang` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tbl_quanlynhacungcap`
--
ALTER TABLE `tbl_quanlynhacungcap`
  MODIFY `idNhaCungCap` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tbl_quanlynhanvienketoan`
--
ALTER TABLE `tbl_quanlynhanvienketoan`
  MODIFY `idNhanVienKeToan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `tbl_quanlynhatkychung`
--
ALTER TABLE `tbl_quanlynhatkychung`
  MODIFY `idNhatKyChung` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_quanlyphieuchi`
--
ALTER TABLE `tbl_quanlyphieuchi`
  MODIFY `idPhieuChi` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tbl_quanlyphieuthu`
--
ALTER TABLE `tbl_quanlyphieuthu`
  MODIFY `idPhieuThu` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `tbl_quanlytaikhoan`
--
ALTER TABLE `tbl_quanlytaikhoan`
  MODIFY `idTaiKhoan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tbl_quanlythongtincongty`
--
ALTER TABLE `tbl_quanlythongtincongty`
  MODIFY `idThongTinCongTy` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
