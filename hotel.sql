-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Mar 2022 pada 02.38
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_fasilitas`
--

CREATE TABLE `tb_fasilitas` (
  `no` int(3) NOT NULL,
  `nama` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_fasilitas`
--

INSERT INTO `tb_fasilitas` (`no`, `nama`, `gambar`, `keterangan`) VALUES
(1, 'Swiming Pool', 'pool.jpg', 'Nikmati hari Anda berenang di kolam renang terbuka dengan tekanan lembut untuk pijat relaksasi yang menghadap ke lembah yang indah, kami menjamin kebersihan air kolam di Shine Hotel<br><br>Open : 06.00 <br>Close : 21.00'),
(2, 'Restaurant', 'dapur.jfif', 'Terletak di atas keindahan kota yang memberi Anda angin segar. Puaskan momen Anda bersama orang terkasih dengan menikmati makan malam romantis restaurant kami yang dilengkapi dengan pemandangan kota yang menakjubkan.\r\n<br>\r\n<br>\r\nBreakfast :     06.00 - 11.00<br>\r\nLunch	:	12.00 - 14.00<br>\r\nDinner	:	18.30 - 22.00<br>'),
(3, 'View', 'window.jpg', 'Hotel kami terdapat di tengah tengah keindahan kota sehingga membuat anda dapat secara langsung melihat pemandangan menakjubkan dari jendela'),
(4, 'Lahan Parkir', 'parkir.jpeg', 'Kami menyediakan lahan parkir untuk anda yang membawa kendaraan pribadi saat berada di Shine hotel, ditambah dengan lahan yang luas dan terhindar dari terik matahari atau pun guyuran hujan demi menambah kepuasan anda'),
(5, 'Food', 'food2.jpg', 'Setiap hidangan dibuat dengan indah menjadi sebuah karya seni, dijamin akan memberikan cita rasa yang luar biasa. Suasana romantis ini akan memberi Anda suasana berbeda sambil menikmati masakan Asia dan Eropa terbaik kami. ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_fasilitas_kamar`
--

CREATE TABLE `tb_fasilitas_kamar` (
  `id` int(2) NOT NULL,
  `tipe_kamar` text NOT NULL,
  `fitur` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_fasilitas_kamar`
--

INSERT INTO `tb_fasilitas_kamar` (`id`, `tipe_kamar`, `fitur`) VALUES
(1, 'Single Room', 'Meja, Kursi, Flat LCD TV, AC'),
(2, 'Standard Room', 'Meja Kerja, Kursi, Flat LCD TV, AC'),
(3, 'Superior Room', 'Meja Kerja, Kursi, Flat LCD TV, AC, Minibar, <br> Coffe Maker, Jubah Mandi, Free Smoking'),
(4, 'Deluxe Room', 'Meja Kerja, Kursi, Flat LCD TV, AC, Coffe Maker, <br> Minibar, Jubah Mandi, Brankas, Free Smoking');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_harga`
--

CREATE TABLE `tb_harga` (
  `id_kamar` int(2) NOT NULL,
  `tipe_kamar` text NOT NULL,
  `harga` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_harga`
--

INSERT INTO `tb_harga` (`id_kamar`, `tipe_kamar`, `harga`) VALUES
(1, 'Single Room', 'Rp.500.000,-'),
(2, 'Standard Room', 'Rp. 800.000,-'),
(3, 'Superior Room', 'Rp. 1.000.000'),
(4, 'Deluxe Room', 'Rp. 1.400.000,-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesan`
--

CREATE TABLE `tb_pesan` (
  `id_pesan` int(5) NOT NULL,
  `nama_tamu` text NOT NULL,
  `telp_tamu` int(20) NOT NULL,
  `tipe_kamar` text NOT NULL,
  `tgl_checkin` date NOT NULL,
  `tgl_checkout` date NOT NULL,
  `jumlah_tamu` int(5) NOT NULL,
  `jumlah_kamar` int(5) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pesan`
--

INSERT INTO `tb_pesan` (`id_pesan`, `nama_tamu`, `telp_tamu`, `tipe_kamar`, `tgl_checkin`, `tgl_checkout`, `jumlah_tamu`, `jumlah_kamar`, `status`) VALUES
(11, 'tst', 345354, 'standar', '2022-03-02', '2022-03-03', 2, 1, 'Check in'),
(12, 'virgi', 896576, 'standar', '2022-03-02', '2022-03-03', 2, 1, 'Check in'),
(13, 'riski', 8989, 'single', '2022-03-20', '2022-03-21', 2, 1, 'Check out'),
(16, 'arpan', 8989, 'standar', '2022-03-16', '2022-03-22', 1, 1, 'Check in');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_room`
--

CREATE TABLE `tb_room` (
  `id_kamar` int(10) NOT NULL,
  `tipe_kamar` enum('Single Room','Standar Room','Superior Room','Deluxe Room') NOT NULL,
  `stok` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_room`
--

INSERT INTO `tb_room` (`id_kamar`, `tipe_kamar`, `stok`) VALUES
(1, 'Single Room', '20'),
(2, 'Standar Room', '35'),
(3, 'Superior Room', '30'),
(4, 'Deluxe Room', '25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('admin','petugas','tamu') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `username`, `password`, `level`) VALUES
(32, 'virgi', 'virgiawan@gmail.com', '35b635238a58bce6a095ebfaf2416108', 'tamu'),
(35, 'virgi', 'virgi@gmail.com', '35b635238a58bce6a095ebfaf2416108', 'tamu'),
(37, 'admin4', 'admin4', 'fc1ebc848e31e0a68e868432225e3c82', 'admin'),
(39, 'petugas4', 'petugas4', '95c477e4932b3b16500674c18fb6f9a4', 'petugas'),
(42, 'radit', 'radit@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'tamu');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_fasilitas`
--
ALTER TABLE `tb_fasilitas`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `tb_fasilitas_kamar`
--
ALTER TABLE `tb_fasilitas_kamar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_harga`
--
ALTER TABLE `tb_harga`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indeks untuk tabel `tb_pesan`
--
ALTER TABLE `tb_pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indeks untuk tabel `tb_room`
--
ALTER TABLE `tb_room`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_fasilitas`
--
ALTER TABLE `tb_fasilitas`
  MODIFY `no` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_fasilitas_kamar`
--
ALTER TABLE `tb_fasilitas_kamar`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_harga`
--
ALTER TABLE `tb_harga`
  MODIFY `id_kamar` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_pesan`
--
ALTER TABLE `tb_pesan`
  MODIFY `id_pesan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tb_room`
--
ALTER TABLE `tb_room`
  MODIFY `id_kamar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
