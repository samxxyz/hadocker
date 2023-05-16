-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2023 at 10:32 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE `detail` (
  `iddetail` int(11) NOT NULL,
  `idjenispakaian` int(11) NOT NULL,
  `kd_transaksi` int(11) NOT NULL,
  `berat` double DEFAULT NULL,
  `jumlah` double DEFAULT NULL,
  `bayar` double DEFAULT NULL,
  `biayaambil` double DEFAULT NULL,
  `biayaantar` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`iddetail`, `idjenispakaian`, `kd_transaksi`, `berat`, `jumlah`, `bayar`, `biayaambil`, `biayaantar`) VALUES
(27, 1, 31, 6, 4, 100000, 5000, 5000),
(28, 2, 31, 5, 5, 135000, 5000, 5000),
(29, 3, 32, 5, 5, 260000, 5000, 5000),
(30, 2, 32, 5, 6, 160000, 5000, 5000),
(31, 3, 34, 0, 2, 100000, 0, 0),
(32, 4, 34, 0, 1, 30000, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `detailpemesanan`
--

CREATE TABLE `detailpemesanan` (
  `iddetailpemesanan` int(11) NOT NULL,
  `pemesanan_id` int(11) NOT NULL,
  `idjenispakaian` int(11) NOT NULL,
  `jumlah` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `detailpemesanan`
--

INSERT INTO `detailpemesanan` (`iddetailpemesanan`, `pemesanan_id`, `idjenispakaian`, `jumlah`) VALUES
(5, 25, 1, 4),
(6, 25, 2, 5),
(7, 26, 3, 5),
(8, 26, 2, 6),
(9, 27, 2, 8),
(10, 28, 3, 2),
(11, 28, 4, 1),
(12, 29, 1, 10),
(13, 31, 9, 10);

-- --------------------------------------------------------

--
-- Table structure for table `jenispakaian`
--

CREATE TABLE `jenispakaian` (
  `idjenispakaian` int(11) NOT NULL,
  `jenis` varchar(45) DEFAULT NULL,
  `harga` double DEFAULT NULL,
  `statusbiaya` enum('perkilo','perpotong') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jenispakaian`
--

INSERT INTO `jenispakaian` (`idjenispakaian`, `jenis`, `harga`, `statusbiaya`) VALUES
(1, 'Blouse/Kaos', 15000, 'perkilo'),
(2, 'Selimut Tebal', 25000, 'perpotong'),
(3, 'Bad Cover', 50000, 'perpotong'),
(4, 'Pakaian Pengantin', 30000, 'perpotong'),
(5, 'Tas Cover', 25000, 'perpotong'),
(6, 'Boneka Jumbo', 25000, 'perpotong'),
(7, 'Bed Cover Besar', 16000, 'perpotong'),
(8, 'Bed Cover Kecil', 15000, 'perpotong'),
(9, 'Long Dress', 14000, 'perpotong'),
(10, 'Jaket Kulit', 14000, 'perpotong'),
(11, 'Selimut Tipis', 14000, 'perkilo'),
(12, 'Rok & Celana Bahan', 15000, 'perkilo'),
(13, 'Mukena ', 12000, 'perkilo'),
(14, 'Tas Besar', 11000, 'perpotong'),
(15, 'Celana Jeans', 9000, 'perkilo'),
(16, 'Taplak Meja', 10000, 'perkilo'),
(17, 'Boneka Kecil', 9000, 'perpotong'),
(18, 'Sprei Panjang', 10000, 'perkilo'),
(19, 'Baju Anak', 10000, 'perkilo'),
(20, 'Stelan Jas', 9000, 'perpotong'),
(21, 'Kebaya', 12000, 'perpotong'),
(22, 'Baju Tidur Wanita', 8000, 'perkilo'),
(23, 'Handuk Besar', 15000, 'perkilo'),
(24, 'Sajadah', 7000, 'perpotong'),
(25, 'Sarung Bantal Kursi', 10000, 'perkilo'),
(26, 'Jaket Biasa', 8000, 'perpotong'),
(27, 'Karpet Buludru', 17000, 'perpotong'),
(28, 'Karpet Biasa', 14000, 'perpotong'),
(29, 'Kasur Besar', 35000, 'perpotong'),
(30, 'Kasur Tipis', 20000, 'perpotong');

-- --------------------------------------------------------

--
-- Table structure for table `listharga`
--

CREATE TABLE `listharga` (
  `NamaBarang` varchar(45) CHARACTER SET utf8 NOT NULL,
  `DryClean` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `listharga`
--

INSERT INTO `listharga` (`NamaBarang`, `DryClean`) VALUES
('Baju Kaos', 9000),
('Baju Anak/Gaun', 9000),
('Baju Muslim', 11000),
('Blus', 9000),
('Baju Tidur Wanita', 8000),
('Celana Jeans', 9000),
('Celana Panjang', 8000),
('Celana Pendek', 7000),
('Jacket/Jeans', 1000),
('Jacket Kulit', 14000),
('Jas Pria', 1000),
('Jas Wanita', 9000),
('Kebaya', 9000),
('Kemeja', 9000),
('Kimono', 8000),
('Long Dress', 14000),
('Mukena Stelan', 12000),
('Pakaian Pengantin', 30000),
('Rok & Blus', 12000),
('Rok Bawah Biasa', 9000),
('Rok Bawah Plisket', 10000),
('Rompi', 7000),
('Bed Cover Besar', 16000),
('Bed Cover Kecil', 15000),
('Boneka Jumbo', 25000),
('Boneka Kecil', 9000),
('Gordyn/M2', 4000),
('Handuk Besar', 8000),
('Handuk Kecil', 7000),
('Karpet Tebal/M2', 0),
('Karpet Tipis/M2', 0),
('Kasur Besar', 0),
('Kasur Kecil', 0),
('Sarung Bantal Guling', 2500),
('Sarung Bantal Kursi', 6000),
('Selimut Tipis', 14000),
('Selimut Tebal', 17000),
('Sprei Panjang', 9000),
('Sprei Pendek', 8000),
('Sajadah', 7000),
('Taplak Meja', 9000),
('Tas Kecil', 9000),
('Tas Besar', 11000),
('Tas Cover', 25000),
('Tiker', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `kd_pegawai` int(11) NOT NULL,
  `nama_pegawai` varchar(45) DEFAULT NULL,
  `bagian` varchar(45) DEFAULT NULL,
  `iduser` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`kd_pegawai`, `nama_pegawai`, `bagian`, `iduser`) VALUES
(5, 'admin', 'administrasi', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `kd_pelanggan` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `no_hp` varchar(45) DEFAULT NULL,
  `jk` varchar(45) DEFAULT NULL,
  `iduser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`kd_pelanggan`, `nama`, `alamat`, `no_hp`, `jk`, `iduser`) VALUES
(8, 'Deni Malik', 'Entrop', '08112121', 'Pria', 1),
(9, 'Bagus', 'Entrop', '08111111', 'Pria', 6),
(10, 'Davis Wtimena', 'Hamadi', '0813116546', 'Pria', 7),
(11, 'Hisyam Mudova', 'Jl.H.Haris No.47K RT.01 RW.11 Kel. Baros Kec. Cimahi Tengah, Jawa Barat', '083822458352', 'Pria', 8),
(12, 'Rike', 'Cijerah 1 Blok 2, Bandung', '0895360949925', 'Wanita', 9),
(13, 'Rike ', 'Cijerah 1 Blok 2, Bandung', '0895360949925', 'Wanita', 10);

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id` int(11) NOT NULL,
  `kd_pemesanan` varchar(20) NOT NULL,
  `tgl_pemesanan` date DEFAULT NULL,
  `kd_pelanggan` int(11) NOT NULL,
  `status` enum('Boking','Proses','Selesai','Batal') DEFAULT 'Boking'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id`, `kd_pemesanan`, `tgl_pemesanan`, `kd_pelanggan`, `status`) VALUES
(25, 'LNY-00001', '2020-07-31', 10, 'Selesai'),
(26, 'LNY-00002', '2020-07-31', 10, 'Selesai'),
(27, 'LNY-00003', '2023-01-23', 11, 'Batal'),
(28, 'LNY-00004', '2023-02-01', 13, 'Selesai'),
(29, 'LNY-00005', '2023-02-04', 11, 'Boking'),
(30, 'LNY-00006', '2023-02-04', 11, 'Selesai'),
(31, 'LNY-00007', '2023-02-04', 11, 'Boking');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `kd_profile` int(11) NOT NULL,
  `nama_laundry` varchar(45) DEFAULT NULL,
  `alamat_laundry` varchar(45) DEFAULT NULL,
  `no_tlp` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`kd_profile`, `nama_laundry`, `alamat_laundry`, `no_tlp`) VALUES
(1, 'H&M LAUNDRY', 'CIMAHI - BANDUNG', '082238281801');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_pemesanan` int(11) NOT NULL,
  `kd_transaksi` int(11) NOT NULL,
  `kd_pegawai` int(11) NOT NULL,
  `tgl_ambil` date DEFAULT NULL,
  `total` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_pemesanan`, `kd_transaksi`, `kd_pegawai`, `tgl_ambil`, `total`) VALUES
(25, 31, 5, '2020-07-30', 235000),
(26, 32, 5, '2020-07-30', 420000),
(30, 33, 5, '2023-02-04', 0),
(28, 34, 5, '2023-02-03', 130000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `jenis` enum('Admin','Member') NOT NULL DEFAULT 'Member'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `username`, `password`, `jenis`) VALUES
(1, 'deni', '21232f297a57a5a743894a0e4a801fc3', 'Member'),
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin'),
(6, 'bagus', '17b38fc02fd7e92f3edeb6318e3066d8', 'Member'),
(7, 'david', '172522ec1028ab781d9dfd17eaca4427', 'Member'),
(8, 'sam', '332532dcfaa1cbf61e2a266bd723612c', 'Member'),
(9, 'rikerhy', 'd41d8cd98f00b204e9800998ecf8427e', 'Member'),
(10, 'rikerhy', '698d51a19d8a121ce581499d7b701668', 'Member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`iddetail`),
  ADD KEY `fk_detail_jenispakaian1_idx` (`idjenispakaian`),
  ADD KEY `fk_detail_transaksi1_idx` (`kd_transaksi`);

--
-- Indexes for table `detailpemesanan`
--
ALTER TABLE `detailpemesanan`
  ADD PRIMARY KEY (`iddetailpemesanan`),
  ADD KEY `fk_detailpemesanan_pemesanan1_idx` (`pemesanan_id`),
  ADD KEY `fk_detailpemesanan_jenispakaian1_idx` (`idjenispakaian`);

--
-- Indexes for table `jenispakaian`
--
ALTER TABLE `jenispakaian`
  ADD PRIMARY KEY (`idjenispakaian`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`kd_pegawai`),
  ADD KEY `fk_pegawai_user1_idx` (`iduser`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`kd_pelanggan`),
  ADD KEY `fk_pelanggan_user1_idx` (`iduser`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pemesanan_pelanggan_idx` (`kd_pelanggan`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`kd_profile`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`kd_transaksi`),
  ADD KEY `fk_transaksi_pegawai1_idx` (`kd_pegawai`),
  ADD KEY `fk_transaksi_pemesanan1_idx` (`id_pemesanan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail`
--
ALTER TABLE `detail`
  MODIFY `iddetail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `detailpemesanan`
--
ALTER TABLE `detailpemesanan`
  MODIFY `iddetailpemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `jenispakaian`
--
ALTER TABLE `jenispakaian`
  MODIFY `idjenispakaian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `kd_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `kd_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `kd_profile` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `kd_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail`
--
ALTER TABLE `detail`
  ADD CONSTRAINT `fk_detail_jenispakaian1` FOREIGN KEY (`idjenispakaian`) REFERENCES `jenispakaian` (`idjenispakaian`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_detail_transaksi1` FOREIGN KEY (`kd_transaksi`) REFERENCES `transaksi` (`kd_transaksi`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `detailpemesanan`
--
ALTER TABLE `detailpemesanan`
  ADD CONSTRAINT `fk_detailpemesanan_jenispakaian1` FOREIGN KEY (`idjenispakaian`) REFERENCES `jenispakaian` (`idjenispakaian`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_detailpemesanan_pemesanan1` FOREIGN KEY (`pemesanan_id`) REFERENCES `pemesanan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `fk_pegawai_user1` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD CONSTRAINT `fk_pelanggan_user1` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `fk_pemesanan_pelanggan` FOREIGN KEY (`kd_pelanggan`) REFERENCES `pelanggan` (`kd_pelanggan`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `fk_transaksi_pegawai1` FOREIGN KEY (`kd_pegawai`) REFERENCES `pegawai` (`kd_pegawai`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_transaksi_pemesanan1` FOREIGN KEY (`id_pemesanan`) REFERENCES `pemesanan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
