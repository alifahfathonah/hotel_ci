-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 11 Jan 2017 pada 06.46
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hotel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jenis_ruangan`
--

CREATE TABLE `tb_jenis_ruangan` (
  `id_jenis_ruangan` int(11) NOT NULL,
  `jenis_ruangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jenis_ruangan`
--

INSERT INTO `tb_jenis_ruangan` (`id_jenis_ruangan`, `jenis_ruangan`) VALUES
(5, 'Ballroom'),
(6, 'Mini Ballroom');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kamar`
--

CREATE TABLE `tb_kamar` (
  `id_kamar` int(11) NOT NULL,
  `no_kamar` varchar(5) NOT NULL,
  `id_lantai` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_tipe_kamar` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `kondisi` enum('Kosong','Terpakai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kamar`
--

INSERT INTO `tb_kamar` (`id_kamar`, `no_kamar`, `id_lantai`, `id_kelas`, `id_tipe_kamar`, `harga`, `kondisi`) VALUES
(1, '201', 4, 4, 5, 500000, 'Kosong'),
(2, '202', 4, 4, 4, 600000, 'Kosong'),
(3, '203', 4, 4, 3, 0, 'Kosong'),
(4, '204', 4, 4, 2, 0, 'Kosong'),
(5, '205', 4, 4, 2, 0, 'Kosong'),
(6, '206', 4, 5, 5, 0, 'Kosong'),
(7, '207', 4, 5, 4, 0, 'Kosong'),
(8, '208', 4, 5, 3, 0, 'Kosong'),
(9, '209', 4, 5, 2, 0, 'Kosong'),
(10, '210', 4, 5, 2, 0, 'Kosong'),
(11, '211', 4, 6, 5, 0, 'Kosong'),
(12, '212', 4, 6, 4, 0, 'Kosong'),
(13, '213', 4, 6, 3, 0, 'Kosong'),
(14, '214', 4, 6, 2, 0, 'Kosong'),
(15, '215', 4, 6, 2, 0, 'Kosong'),
(16, '216', 4, 7, 5, 0, 'Kosong'),
(17, '217', 4, 7, 4, 0, 'Kosong'),
(18, '218', 4, 7, 3, 0, 'Kosong'),
(19, '219', 4, 7, 2, 0, 'Kosong'),
(20, '220', 4, 7, 2, 0, 'Kosong'),
(21, '301', 5, 3, 5, 0, 'Kosong'),
(22, '302', 5, 3, 5, 0, 'Kosong'),
(23, '303', 5, 3, 5, 0, 'Kosong'),
(24, '304', 5, 3, 4, 0, 'Kosong'),
(25, '305', 5, 3, 4, 0, 'Kosong'),
(26, '306', 5, 3, 4, 0, 'Kosong'),
(27, '307', 5, 3, 3, 0, 'Kosong'),
(28, '308', 5, 3, 3, 0, 'Kosong'),
(29, '309', 5, 3, 3, 0, 'Kosong'),
(30, '310', 5, 3, 3, 0, 'Kosong'),
(31, '311', 5, 3, 3, 0, 'Kosong'),
(32, '312', 5, 3, 2, 0, 'Kosong'),
(33, '313', 5, 3, 2, 0, 'Kosong'),
(34, '314', 5, 3, 2, 0, 'Kosong'),
(35, '315', 5, 3, 2, 0, 'Kosong'),
(36, '316', 5, 4, 5, 0, 'Kosong'),
(37, '317', 5, 4, 4, 0, 'Kosong'),
(38, '318', 5, 4, 3, 0, 'Kosong'),
(39, '319', 5, 4, 2, 0, 'Kosong'),
(40, '320', 5, 4, 2, 0, 'Kosong'),
(41, '401', 6, 8, 5, 0, 'Kosong'),
(42, '402', 6, 8, 5, 0, 'Kosong');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kelas`
--

INSERT INTO `tb_kelas` (`id_kelas`, `nama_kelas`) VALUES
(3, 'Standar Room'),
(4, 'Premium Room'),
(5, 'Deluxe Room'),
(6, 'Studio Room'),
(7, 'Suite Room'),
(8, 'President Room');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_lantai`
--

CREATE TABLE `tb_lantai` (
  `id_lantai` int(11) NOT NULL,
  `nama_lantai` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_lantai`
--

INSERT INTO `tb_lantai` (`id_lantai`, `nama_lantai`) VALUES
(3, 'Lantai 1'),
(4, 'Lantai 2'),
(5, 'Lantai 3'),
(6, 'Lantai 4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_menu`
--

CREATE TABLE `tb_menu` (
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(50) NOT NULL,
  `link` varchar(100) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `level` enum('Resepsionis','Manajemen','Super Admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_menu`
--

INSERT INTO `tb_menu` (`id_menu`, `nama_menu`, `link`, `icon`, `level`) VALUES
(3, 'Lantai kamar', 'lantai_kamar', 'fa fa-building', 'Super Admin'),
(4, 'Tipe kamar', 'tipe_kamar', 'fa fa-tv', 'Super Admin'),
(5, 'Kelas kamar', 'kelas_kamar', 'fa fa-star-o', 'Super Admin'),
(6, 'Kamar', 'kamar', 'fa fa-bookmark-o', 'Super Admin'),
(7, 'Jenis ruangan', 'jenis_ruangan', 'fa fa-list', 'Super Admin'),
(8, 'Ruangan', 'ruangan', 'fa fa-bookmark-o', 'Super Admin'),
(9, 'User', 'user', 'fa fa-users', 'Super Admin'),
(10, 'Transaksi kamar', 'transaksi', 'fa fa-exchange', 'Resepsionis'),
(11, 'Transaksi ruangan', 'transaksi_ruangan', 'fa fa-exchange', 'Resepsionis'),
(12, 'Laporan kamar', 'transaksi/laporan_kamar', 'fa fa-print', 'Manajemen'),
(13, 'Laporan ruangan', 'transaksi_ruangan/laporan_ruangan', 'fa fa-print', 'Manajemen'),
(14, 'Manajemen menu', 'manajemen_menu', 'fa fa-gear', 'Super Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ruangan`
--

CREATE TABLE `tb_ruangan` (
  `id_ruangan` int(11) NOT NULL,
  `nama_ruangan` varchar(100) NOT NULL,
  `id_jenis_ruangan` int(11) NOT NULL,
  `kapasitas` varchar(5) NOT NULL,
  `id_lantai` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_ruangan`
--

INSERT INTO `tb_ruangan` (`id_ruangan`, `nama_ruangan`, `id_jenis_ruangan`, `kapasitas`, `id_lantai`, `harga`) VALUES
(2, 'Cornelia', 6, '30', 3, 500000),
(3, 'Akasa', 6, '30', 3, 500000),
(4, 'Grand Sera', 5, '500', 4, 2000000),
(5, 'Grand Siliwangi', 5, '500', 5, 2000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tipe_kamar`
--

CREATE TABLE `tb_tipe_kamar` (
  `id_tipe_kamar` int(11) NOT NULL,
  `tipe_kamar` varchar(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_tipe_kamar`
--

INSERT INTO `tb_tipe_kamar` (`id_tipe_kamar`, `tipe_kamar`, `keterangan`) VALUES
(2, 'Single Room', '1 Ranjang 1 Orang'),
(3, 'Twin Room', '2 Ranjang 2 orang'),
(4, 'Double Room', '1 Ranjang 2 orang'),
(5, 'Triple Room', '2 Ranjang 3 orang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `kontak` varchar(16) NOT NULL,
  `id_kamar` int(11) NOT NULL,
  `lama_tinggal` int(11) NOT NULL,
  `check_in` datetime NOT NULL,
  `check_out` datetime NOT NULL,
  `jml_orang` int(11) NOT NULL,
  `tipe_pembayaran` enum('Tunai','Transfer') NOT NULL,
  `total_bayar` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaksi_ruangan`
--

CREATE TABLE `tb_transaksi_ruangan` (
  `id_transaksi_ruangan` int(11) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `kontak` varchar(15) NOT NULL,
  `id_ruangan` int(11) NOT NULL,
  `lama_sewa` int(11) NOT NULL,
  `lama_waktu` int(11) NOT NULL,
  `tanggal_sewa` datetime NOT NULL,
  `tanggal_selesai` datetime NOT NULL,
  `tipe_pembayaran` enum('tunai','transfer') NOT NULL,
  `total_bayar` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_transaksi_ruangan`
--

INSERT INTO `tb_transaksi_ruangan` (`id_transaksi_ruangan`, `nama_pelanggan`, `alamat`, `kontak`, `id_ruangan`, `lama_sewa`, `lama_waktu`, `tanggal_sewa`, `tanggal_selesai`, `tipe_pembayaran`, `total_bayar`, `status`, `id_user`) VALUES
(1, 'Fajar Surahman', 'Bogor', '0857-1747-0247', 2, 3, 5, '2017-01-12 13:00:00', '2017-01-15 18:00:00', 'tunai', 7500000, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(32) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(50) NOT NULL,
  `last_login` date NOT NULL,
  `level` enum('Resepsionis','Manajemen','Super Admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_lengkap`, `username`, `password`, `last_login`, `level`) VALUES
(1, 'Fajar Surahman', 'fajar', '8fa14cdd754f91cc6554c9e71929cce7', '2017-01-11', 'Super Admin'),
(2, 'Roben Togo', 'roben', '4b43b0aee35624cd95b910189b3dc231', '2017-01-11', 'Resepsionis'),
(3, 'Fahmi', 'fahmi', '8fa14cdd754f91cc6554c9e71929cce7', '2017-01-11', 'Manajemen'),
(4, 'Kiasatina', 'asa', '0cc175b9c0f1b6a831c399e269772661', '2017-01-03', 'Super Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_jenis_ruangan`
--
ALTER TABLE `tb_jenis_ruangan`
  ADD PRIMARY KEY (`id_jenis_ruangan`);

--
-- Indexes for table `tb_kamar`
--
ALTER TABLE `tb_kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indexes for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `tb_lantai`
--
ALTER TABLE `tb_lantai`
  ADD PRIMARY KEY (`id_lantai`);

--
-- Indexes for table `tb_menu`
--
ALTER TABLE `tb_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `tb_ruangan`
--
ALTER TABLE `tb_ruangan`
  ADD PRIMARY KEY (`id_ruangan`);

--
-- Indexes for table `tb_tipe_kamar`
--
ALTER TABLE `tb_tipe_kamar`
  ADD PRIMARY KEY (`id_tipe_kamar`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `tb_transaksi_ruangan`
--
ALTER TABLE `tb_transaksi_ruangan`
  ADD PRIMARY KEY (`id_transaksi_ruangan`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_jenis_ruangan`
--
ALTER TABLE `tb_jenis_ruangan`
  MODIFY `id_jenis_ruangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_kamar`
--
ALTER TABLE `tb_kamar`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tb_lantai`
--
ALTER TABLE `tb_lantai`
  MODIFY `id_lantai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_menu`
--
ALTER TABLE `tb_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tb_ruangan`
--
ALTER TABLE `tb_ruangan`
  MODIFY `id_ruangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_tipe_kamar`
--
ALTER TABLE `tb_tipe_kamar`
  MODIFY `id_tipe_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_transaksi_ruangan`
--
ALTER TABLE `tb_transaksi_ruangan`
  MODIFY `id_transaksi_ruangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
