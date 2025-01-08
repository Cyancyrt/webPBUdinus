-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jan 2025 pada 09.24
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `a11202315022`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(150) NOT NULL,
  `penulis` varchar(150) NOT NULL,
  `isi` text NOT NULL,
  `excerpt` varchar(50) DEFAULT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `penulis`, `isi`, `excerpt`, `gambar`, `tanggal`) VALUES
(1, 'JUUJIKA NO ROKUNIN', 'test', 'Jūjika no Rokunin depicts the vengeance of the main character on his bullies. Uruma Shun, a sixth-grade student, is named \"Experimental body: A\" by five of his classmates and is severely bullied. His only peace was with his brother, who loved him, and his', 'Jūjika no Rokunin depicts the vengeance ', 'jk.jpeg', '2024-12-17'),
(2, 'lily', 'cyret', 'Lily (リリィ) is a Japanese VOCALOID developed and distributed by Internet Co., Ltd., done in collaboration with Avex Management Inc. and YAMAHA Corporation, and was initially released in August 2010 for the VOCALOID2 engine. There has since been a second in', 'Lily (リリィ) is a Japanese VOCALOID developed and', 'Lily.(VOCALOID).600.3699832.jpg', '2024-12-02'),
(3, 'lily', 'cyret', 'Lily (リリィ) is a Japanese VOCALOID developed and distributed by Internet Co., Ltd., done in collaboration with Avex Management Inc. and YAMAHA Corporation, and was initially released in August 2010 for the VOCALOID2 engine. There has since been a second installment developed for the VOCALOID3 engine and dubbed V3 Lily. Her voice is provided by the Japanese female singer, musician and performance artist, Yuri Masuda (益田祐里; Masuda Yuri).', 'Lily (リリィ) is a Japanese VOCALOID developed and', 'Lily.(VOCALOID).600.3699832.jpg', '1910-06-03'),
(5, 'dsad', 'test', 'sadsad', NULL, '20241223072216.png', '2024-12-23'),
(7, 'ultra rocket', 'danny', 'Japanese	Romaji\r\n空に落ちた時は歌うよ	sora ni ochita toki wa utau yo	\r\n可哀想な誰かを灯して	kawaisou na dareka o tomoshite	\r\n君に愛されたいから	kimi ni aisaretai kara	\r\n頭グルグルなんだナ	atama guruguru na nda na	\r\n丸い惑星だって振り切れそうじゃない？そうでしょ	marui wakusei datte furikiresou ja nai? sou desho', 'Japanese	Romaji\r\n空に落ちた時は歌うよ	so...', '20250104085528.jpg', '2025-01-04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `kode_barang` char(5) NOT NULL,
  `nama_barang` varchar(30) DEFAULT NULL,
  `harga_barang` int(10) DEFAULT NULL,
  `stok_barang` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`kode_barang`, `nama_barang`, `harga_barang`, `stok_barang`) VALUES
('B0001', 'STRIKA', 200000, 100),
('B0002', 'KOMPOR GAS', 350000, 56),
('B0003', 'RICE COOKER', 425000, 79),
('B0004', 'KIPAS ANGIN', 500000, 35);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail`
--

CREATE TABLE `detail` (
  `kode_penjualan` char(5) NOT NULL,
  `kode_barang` char(5) NOT NULL,
  `Jumlah_penjualan` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `detail`
--

INSERT INTO `detail` (`kode_penjualan`, `kode_barang`, `Jumlah_penjualan`) VALUES
('P0001', 'B0001', 4),
('P0001', 'B0002', 2),
('P0002', 'B0003', 1),
('P0003', 'B0003', 2),
('P0004', 'B0001', 2),
('P0004', 'B0004', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `URL` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id`, `URL`, `deskripsi`, `tanggal`) VALUES
(3, '20250104070741.jpg', 'lily', '2025-01-04'),
(4, '20250104070814.jpg', 'model lily', '2025-01-04'),
(5, '20250104070829.jpg', 'lily-2', '2025-01-04'),
(6, '20250104070853.jpg', 'kafu', '2025-01-04'),
(8, '20250104072717.jpg', 'kaf-2', '2025-01-04'),
(9, '20250104072732.jpg', 'meiko', '2025-01-04'),
(10, '20250104073230.jpg', 'una', '2025-01-04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konsumen`
--

CREATE TABLE `konsumen` (
  `kode_konsumen` char(5) NOT NULL,
  `nama_konsumen` varchar(30) DEFAULT NULL,
  `alamat_konsumen` varchar(30) DEFAULT NULL,
  `telp_konsumen` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `konsumen`
--

INSERT INTO `konsumen` (`kode_konsumen`, `nama_konsumen`, `alamat_konsumen`, `telp_konsumen`) VALUES
('K0001', 'Ali', 'Semarang', '0811000001'),
('K0002', 'Bakri', 'Kendal', '0811000002'),
('K0003', 'Cita', 'Jakarta', '0811000003'),
('K0004', 'Dedi', 'Pemalang', '0811000004');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE `penjualan` (
  `kode_penjualan` char(5) NOT NULL,
  `tanggal_penjualan` date DEFAULT NULL,
  `kode_konsumen` char(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `penjualan`
--

INSERT INTO `penjualan` (`kode_penjualan`, `tanggal_penjualan`, `kode_konsumen`) VALUES
('P0001', '2022-10-21', 'K0001'),
('P0002', '2022-10-21', 'K0003'),
('P0003', '2022-10-21', 'K0002'),
('P0004', '2022-10-22', 'K0004');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `password` varchar(225) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `password`, `foto`) VALUES
(1, 'test', '202cb962ac59075b964b07152d234b70', ''),
(2, 'danny', '21232f297a57a5a743894a0e4a801fc3', '20250104084708.png'),
(3, 'joko', '21232f297a57a5a743894a0e4a801fc3', '20250104084800.png'),
(4, 'danendra', '202cb962ac59075b964b07152d234b70', ''),
(5, 'cyret', '21232f297a57a5a743894a0e4a801fc3', '20250104084846.jpg'),
(6, 'abdul', '2b625238c9be9020589479e4b07ab203', '20250104084954.jpg'),
(7, 'jane_doe', 'd41d8cd98f00b204e9800998ecf8427e', '20250104085322.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indeks untuk tabel `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`kode_penjualan`,`kode_barang`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `konsumen`
--
ALTER TABLE `konsumen`
  ADD PRIMARY KEY (`kode_konsumen`);

--
-- Indeks untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`kode_penjualan`),
  ADD KEY `kode_konsumen` (`kode_konsumen`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `penjualan_ibfk_1` FOREIGN KEY (`kode_konsumen`) REFERENCES `konsumen` (`kode_konsumen`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
