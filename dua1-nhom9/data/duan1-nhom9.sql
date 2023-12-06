-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2023 at 12:31 AM
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
-- Database: `duan1-nhom9`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitietsanpham`
--

CREATE TABLE `chitietsanpham` (
  `idCTSP` int(11) NOT NULL,
  `giaSP` int(11) NOT NULL,
  `chitietsp` text NOT NULL,
  `name` text NOT NULL,
  `idGH` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `idCMT` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `idUSER` int(11) NOT NULL,
  `ten` varchar(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `noiDung` text NOT NULL,
  `ngayCMT` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `danhmucsanpham`
--

CREATE TABLE `danhmucsanpham` (
  `idDM` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `soLuong` int(11) NOT NULL,
  `home` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `danhmucsanpham`
--

INSERT INTO `danhmucsanpham` (`idDM`, `name`, `soLuong`, `home`) VALUES
(7, 'iPhone', 0, 0),
(8, 'Samsung', 0, 0),
(9, 'Xiaomi', 0, 0),
(10, 'OPPO', 0, 0),
(11, 'Nokia', 10, 0);

-- --------------------------------------------------------

--
-- Table structure for table `giohang`
--

CREATE TABLE `giohang` (
  `idGH` int(11) NOT NULL,
  `idSP` int(11) NOT NULL,
  `idTT` int(11) NOT NULL,
  `giaSP` float NOT NULL,
  `name` text NOT NULL,
  `image` text NOT NULL,
  `soLuong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `idSP` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` text NOT NULL,
  `mota` text NOT NULL,
  `giasp` float NOT NULL,
  `view` int(11) NOT NULL DEFAULT 0,
  `idCTSP` int(11) NOT NULL,
  `idDM` int(11) NOT NULL,
  `idCMT` int(11) NOT NULL,
  `idGH` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`idSP`, `name`, `image`, `mota`, `giasp`, `view`, `idCTSP`, `idDM`, `idCMT`, `idGH`) VALUES
(15, 'iPhone 14', 'iPhone.png', 'hello im Phong', 10000000, 10, 0, 7, 0, 0),
(16, 'Samsung Galaxy S23', 'samsung.png', '', 0, 11, 0, 8, 0, 0),
(17, 'Oppo Reno 10 Pro', 'oppo.png', '', 0, 12, 0, 10, 0, 0),
(18, 'Xiaomi 14 (5G)', 'xiaomi.jpg', '', 0, 0, 0, 9, 0, 0),
(19, 'Nokia 110 4G Pro ', 'nokia.png', '', 0, 5, 0, 11, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `thanhtoan`
--

CREATE TABLE `thanhtoan` (
  `idTT` int(11) NOT NULL,
  `madh` varchar(20) NOT NULL,
  `idUSER` int(11) NOT NULL,
  `idSP` int(11) NOT NULL,
  `nguoiNhan_ten` varchar(20) DEFAULT NULL,
  `nguoiNhan_diaChi` varchar(200) DEFAULT NULL,
  `nguoiNhan_dienThoai` varchar(13) NOT NULL,
  `nguoiDat_ten` varchar(20) NOT NULL,
  `nguoiDat_diaChi` varchar(200) NOT NULL,
  `nguoiDat_dienThoai` varchar(13) NOT NULL,
  `ghiChu` text NOT NULL,
  `maGiamGia` int(11) NOT NULL DEFAULT 0,
  `phiShip` int(11) NOT NULL DEFAULT 0,
  `pttt` tinyint(1) NOT NULL COMMENT '0: COD; 1:CK; 2: Vi dien tu',
  `tongThanhToan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUSER` int(11) NOT NULL,
  `idTT` int(11) NOT NULL,
  `image` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `pass` int(11) NOT NULL,
  `tenUser` varchar(50) DEFAULT NULL,
  `diaChi` text DEFAULT NULL,
  `email` varchar(39) NOT NULL,
  `sdt` varchar(13) NOT NULL,
  `note` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitietsanpham`
--
ALTER TABLE `chitietsanpham`
  ADD PRIMARY KEY (`idCTSP`),
  ADD KEY `fk_GH` (`idGH`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`idCMT`),
  ADD KEY `fk_idUSER` (`idUSER`);

--
-- Indexes for table `danhmucsanpham`
--
ALTER TABLE `danhmucsanpham`
  ADD PRIMARY KEY (`idDM`);

--
-- Indexes for table `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`idGH`),
  ADD KEY `fk_TT` (`idTT`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`idSP`),
  ADD KEY `fk_DM` (`idDM`);

--
-- Indexes for table `thanhtoan`
--
ALTER TABLE `thanhtoan`
  ADD PRIMARY KEY (`idTT`),
  ADD KEY `fk_USER` (`idUSER`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUSER`),
  ADD KEY `fk_idTT` (`idTT`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chitietsanpham`
--
ALTER TABLE `chitietsanpham`
  MODIFY `idCTSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `idCMT` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `danhmucsanpham`
--
ALTER TABLE `danhmucsanpham`
  MODIFY `idDM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `giohang`
--
ALTER TABLE `giohang`
  MODIFY `idGH` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `idSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `thanhtoan`
--
ALTER TABLE `thanhtoan`
  MODIFY `idTT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUSER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitietsanpham`
--
ALTER TABLE `chitietsanpham`
  ADD CONSTRAINT `fk_GH` FOREIGN KEY (`idGH`) REFERENCES `giohang` (`idGH`);

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `fk_idUSER` FOREIGN KEY (`idUSER`) REFERENCES `user` (`idUSER`);

--
-- Constraints for table `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `fk_TT` FOREIGN KEY (`idTT`) REFERENCES `thanhtoan` (`idTT`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk_DM` FOREIGN KEY (`idDM`) REFERENCES `danhmucsanpham` (`idDM`);

--
-- Constraints for table `thanhtoan`
--
ALTER TABLE `thanhtoan`
  ADD CONSTRAINT `fk_USER` FOREIGN KEY (`idUSER`) REFERENCES `user` (`idUSER`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_idTT` FOREIGN KEY (`idTT`) REFERENCES `thanhtoan` (`idTT`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
