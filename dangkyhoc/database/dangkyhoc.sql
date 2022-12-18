-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2022 at 02:02 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dangkyhoc`
--

-- --------------------------------------------------------

--
-- Table structure for table `dsdangky`
--

CREATE TABLE `dsdangky` (
  `mamonhoc` varchar(50) NOT NULL,
  `masinhvien` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dstenmonhoc` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dsgiangvien` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dssotinchi` int(10) NOT NULL,
  `dshocphi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dsdangky`
--

INSERT INTO `dsdangky` (`mamonhoc`, `masinhvien`, `dstenmonhoc`, `dsgiangvien`, `dssotinchi`, `dshocphi`) VALUES
('CNTT8', '1954802010044', 'Tin học đại cương', 'TS. Phùng Văn Ổn', 3, '1500000'),
('CT13', '1954802010044', 'Trí tuệ nhân tạo', 'Nguyễn Mạnh Thưởng', 2, '1000000');

-- --------------------------------------------------------

--
-- Table structure for table `khoa`
--

CREATE TABLE `khoa` (
  `makhoa` varchar(50) NOT NULL,
  `tenkhoa` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `khoa`
--

INSERT INTO `khoa` (`makhoa`, `tenkhoa`) VALUES
('CNTT', 'Công nghệ thông tin'),
('CT', 'Ngôn ngữ Anh'),
('KT', 'Luật Kinh Tế');

-- --------------------------------------------------------

--
-- Table structure for table `lophoc`
--

CREATE TABLE `lophoc` (
  `lop` varchar(50) NOT NULL,
  `makhoa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lophoc`
--

INSERT INTO `lophoc` (`lop`, `makhoa`) VALUES
('D08.48.01', 'CNTT'),
('D09.48.01', 'CNTT'),
('D09.48.02', 'CNTT'),
('D10.48.01', 'CT'),
('D10.48.02', 'CT'),
('D10.48.03', 'CT'),
('D10.48.04', 'KT'),
('D10.48.05', 'KT'),
('D10.48.06', 'KT');

-- --------------------------------------------------------

--
-- Table structure for table `monhoc`
--

CREATE TABLE `monhoc` (
  `mamonhoc` varchar(50) NOT NULL,
  `tenmonhoc` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `giangvien` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `lichhoc` varchar(50) DEFAULT NULL,
  `sotinchi` int(10) NOT NULL,
  `hocphi` varchar(50) DEFAULT NULL,
  `makhoa` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `monhoc`
--

INSERT INTO `monhoc` (`mamonhoc`, `tenmonhoc`, `giangvien`, `lichhoc`, `sotinchi`, `hocphi`, `makhoa`) VALUES
('CNTT8', 'Tin học đại cương', 'TS. Phùng Văn Ổn', NULL, 3, '1500000', 'CNTT'),
('CNTT9', 'An toàn và bảo mật hệ thống thông tin', 'Th. S Bùi Đức Tiến', NULL, 2, '1000000', 'CNTT'),
('CNTT10', 'Hệ quản trị Cơ sở dữ liệu', 'Đào Thị Lê Na', NULL, 3, '1500000', 'CNTT'),
('KT4', 'Pháp luật kinh tế', 'Lê Thị Hoa', NULL, 3, '1500000', 'KT'),
('KT6', 'Kinh tế vĩ mô', 'Nguyễn Văn Sắc', NULL, 3, '500000', 'KT'),
('CT13', 'Trí tuệ nhân tạo', 'Nguyễn Mạnh Thưởng', NULL, 2, '1000000', 'CNTT');

-- --------------------------------------------------------

--
-- Table structure for table `sinhvien`
--

CREATE TABLE `sinhvien` (
  `masinhvien` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `hoten` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `gioitinh` varchar(50) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL,
  `lop` varchar(50) NOT NULL,
  `quequan` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `avatar` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sinhvien`
--

INSERT INTO `sinhvien` (`masinhvien`, `username`, `password`, `hoten`, `ngaysinh`, `gioitinh`, `lop`, `quequan`, `avatar`) VALUES
('1954802010044', 'demosinhvien1', '123456789', 'Dev Nguyen', '2001-04-19', 'Nam', 'D08.48.01', 'Hà Nội', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dsdangky`
--
ALTER TABLE `dsdangky`
  ADD PRIMARY KEY (`mamonhoc`),
  ADD KEY `masinhvien` (`masinhvien`);

--
-- Indexes for table `khoa`
--
ALTER TABLE `khoa`
  ADD PRIMARY KEY (`makhoa`);

--
-- Indexes for table `lophoc`
--
ALTER TABLE `lophoc`
  ADD PRIMARY KEY (`lop`),
  ADD KEY `makhoa` (`makhoa`);

--
-- Indexes for table `monhoc`
--
ALTER TABLE `monhoc`
  ADD KEY `makhoa` (`makhoa`);

--
-- Indexes for table `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`masinhvien`),
  ADD KEY `malop` (`lop`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dsdangky`
--
ALTER TABLE `dsdangky`
  ADD CONSTRAINT `dsdangky_ibfk_1` FOREIGN KEY (`masinhvien`) REFERENCES `sinhvien` (`masinhvien`);

--
-- Constraints for table `lophoc`
--
ALTER TABLE `lophoc`
  ADD CONSTRAINT `lophoc_ibfk_1` FOREIGN KEY (`makhoa`) REFERENCES `khoa` (`makhoa`);

--
-- Constraints for table `monhoc`
--
ALTER TABLE `monhoc`
  ADD CONSTRAINT `monhoc_ibfk_1` FOREIGN KEY (`makhoa`) REFERENCES `khoa` (`makhoa`);

--
-- Constraints for table `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD CONSTRAINT `sinhvien_ibfk_1` FOREIGN KEY (`lop`) REFERENCES `lophoc` (`lop`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
