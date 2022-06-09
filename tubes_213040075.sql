-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jun 2022 pada 19.04
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_213040075`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_profil`
--

CREATE TABLE `data_profil` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_profil`
--

INSERT INTO `data_profil` (`id`, `nama`, `username`, `password`, `email`, `alamat`) VALUES
(4, 'Muhammad Anggi Kusuma', 'admin', 'admin123', 'anggi.213040075@mail.unpas.ac.id', 'Jl. Gg. H. Ridho II, Setiabudi, Bandung.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal_dibuat` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `kategori`, `nama_produk`, `harga`, `deskripsi`, `gambar`, `tanggal_dibuat`) VALUES
(3, 'Mouse', 'Rexus Aviator', '99,000', 'Mouse nirkabel yang praktis dan mudah dibawa ke mana-mana. Menggunakan daya baterai AA 1 buah yang hemat dan mudah dicari. Tingkatan DPI 800 – 2400, dengan presisi yang tinggi. Material terbuat dari plastik ABS berkualitas yang awet. Menggunakan nano USB receiver yang ringkas dan praktis.', 'produk2.jpg', '2022-06-04 16:28:00'),
(4, 'Keyboard', 'MSI Gaming mekanis Keyboard GK50Z', '699,000', 'Sakelar mekanis biru memberikan kecepatan, akurasi, dan daya tahan. Desain ramping dan ringan melengkapi tampilan bergaya MSI Gaming mekanis Keyboard GK50Z.  Pencahayaan RGB per-key yang memukau dan beragam efek. Basis permainan yang mantap memberikan umpan balik yang luar biasa dan performa anti-selip', 'produk9.jpg', '2022-06-04 16:30:09'),
(7, 'Handphone', 'Vivo S1', '3,099,000', 'Ram 4 gb / Memori Penyimpanan 128 gb / Prosesor 2,0 GHz Octa-core / Screen Touch ID / 32 MP Al Selfie / 4500mAh', 'produk3.jpg', '0000-00-00 00:00:00'),
(16, 'Headphone', 'REXUS THUNDERVOX HX9', '249,000', '1) Virtual 7.1 Sound Headset gaming ini memiliki virtual 7.1 yang membuat detail arah suara lebih jelas. Cocok digunakan saat bermain game FPS dimana anda dapat mengetahui langkah kaki musuh dengan lebih jelas.  2) Anti Noise Microphone Sebuah headset gaming tidak lengkap rasanya apabila tidak memiliki sebuah mikrofon. Sensitivitas yang tinggi pada mikrofon headset ini sehingga memberikan output yang menakjubkan, memberikan komunikasi kerja sama yang solid pada tim anda pada saat bermain game.', 'produk1.jpg', '0000-00-00 00:00:00'),
(17, 'Laptop', 'ASUS A516', '5,499,000', 'Layar NanoEdge-nya menawarkan sudut pandang 178° yang luas dan lapisan anti-glare untuk pengalaman yang benar-benar menarik. Di dalam, ini didukung oleh prosesor Intel® Core™ i5 generasi ke-10 dengan RAM 8GB, dan grafis diskrit NVIDIA® MX330. Desain penyimpanan ganda dengan pilihan SSD PCIe® hinggai 256GB dan HDD hingga 1TB memberi Anda kombinasi sempurna antara kapasitas penyimpanan besar dan kecepatan baca/tulis data yang cepat.', 'produk4.jpg', '0000-00-00 00:00:00'),
(18, 'Earphone', 'ECLE i7 TWS', '269,000', '1. Dengan desain wireless compact yang ringan sehingga earphone mudah untuk dibawa.  2. Earbuds yang ergonomis dan ringan , nyaman dan pas ditelinga anda ,memberikan kenyamanan sepanjang hari setiap anda menggunakannya  3. Earbuds yang menggunakan teknologi bluetooth tercanggih 5.0 , yang menawarkan transmisi yang cepat dan stabil tanpa kusut.  4. Case charging dengan baterai built-in 400 mAh , dapat diisi secara otomatis setelah earbud dimasukkan ke case charging.', '629cddacc24ca', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$74gTG.WyYHhhs3lzfq2x0OB8BfCjlZNwULMQjMNx6pXt0MX1SOpFS'),
(2, 'anggi', '$2y$10$4GdWssWh/eQOcMxZZrfBHeCdOIjQxL3fxmlyWOsQ1VsGgI72LQRaq');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_profil`
--
ALTER TABLE `data_profil`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_profil`
--
ALTER TABLE `data_profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
