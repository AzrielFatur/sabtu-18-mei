-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Bulan Mei 2019 pada 15.05
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `listrik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `about`
--

INSERT INTO `about` (`id`, `text`, `gambar`, `visi`, `misi`) VALUES
(1, 'PT. Anugrah Insan Madani merupakan sebuah perusahaan yang bergerak di bidang jasa layanan kelistrikan serta dilakukan oleh tenaga yang profesional dan ahli di bidangnya agar menjadikan perusahaan ini bisa di jadikan pilihan bagi siapa saja yang membutuhkan.', 'https://3.bp.blogspot.com/-4_6i0J664oM/XNb_Jt-n_YI/AAAAAAAAAZc/NpF7rtsFMv4GeRg-dyI1jleAjV-hTtuHgCLcBGAs/s1600/img-about.png', 'Menjadi perusahaan terkemuka di bidang pakan ternak dan turunannya dan dikenal sebagai mitra usaha yang terbuka, profesional serta penyedia jasa dan produk pakan ternak yang unggul.', 'Membangun usaha di bidang ternak dan turunannya dengan upaya untuk mengejar menjadi yang terdepan, Menganekaragamkan dan menanamkan modal pada usaha strategis, yang dapat menguntungkan peningkatan posisi bisnis Global Group, Mempromosikan serta ikut andil.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datapt`
--

CREATE TABLE `datapt` (
  `id` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `telp` varchar(255) NOT NULL,
  `fax` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `datapt`
--

INSERT INTO `datapt` (`id`, `location`, `telp`, `fax`, `mail`) VALUES
(1, 'Grand Wisata, Bekasi Timur', '+6298234712123', '+21878298213', 'info@jasalisrikk.id');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail`
--

CREATE TABLE `detail` (
  `id` int(11) NOT NULL,
  `daya` varchar(255) NOT NULL,
  `biayaperiksa` varchar(255) NOT NULL,
  `biayaurus` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail`
--

INSERT INTO `detail` (`id`, `daya`, `biayaperiksa`, `biayaurus`, `total`) VALUES
(1, '450W', 'Rp. 60.000', 'Rp. 50.000', 'Rp. 110.000'),
(2, '900W', 'Rp. 70.000', 'Rp. 50.000', 'Rp. 120.000'),
(3, '1300W', 'Rp. 95.000', 'Rp. 100.000', 'Rp. 185.000'),
(4, '2200W', 'Rp. 110.000', 'Rp. 100.000', 'Rp. 210.000'),
(5, '3500W', 'Rp. 105.000', 'Rp. 150.000', 'Rp. 255.000'),
(6, '4400W', 'Rp. 132.000', 'Rp. 200.000', 'Rp. 332.000'),
(7, '5500W', 'Rp. 165.000', 'Rp. 250.000', 'Rp. 415.000'),
(8, '6600W', 'Rp. 198.000', 'Rp. 300.000', 'Rp. 498.000'),
(9, '7700W', 'Rp. 231.000', 'Rp. 300.000', 'Rp. 531.000'),
(10, '450W', 'Rp. 60.000', 'Rp. 50.000', 'Rp. 110.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `gallery` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gallery`
--

INSERT INTO `gallery` (`id`, `gallery`) VALUES
(1, 'https://4.bp.blogspot.com/-0R5-Wse9uFk/XNed8ZzHeWI/AAAAAAAAAZ8/bJMN8Xd9WSwkL0lXGpdCJwG3F3qv4k4hACLcBGAs/s1600/gallery-1.png'),
(2, 'https://1.bp.blogspot.com/-vG0kHm0tBbE/XNfkBNmXNKI/AAAAAAAAAbI/hlBI_udkiAIXhctO-VpkxNK0NUCJy3BuACEwYBhgL/s1600/lg-gallery-2.png'),
(3, 'https://1.bp.blogspot.com/-PTgjip1J45Y/XNfkBHS7abI/AAAAAAAAAbA/65axppgUpuACXkY5gLnr6gsiyea28bIhACEwYBhgL/s1600/lg-gallery-3.png'),
(4, 'https://2.bp.blogspot.com/-KHeAL--pOnI/XNfkCRiAIAI/AAAAAAAAAbE/W0qWbz4o0rkr6kZJfzzBZsf8ZYnPb61iQCEwYBhgL/s1600/lg-gallery-4.png'),
(5, 'https://3.bp.blogspot.com/-ZXhcLwOEwCU/XNfkCjDYmKI/AAAAAAAAAbM/tk5i4jes9ow1RfApfbXe4st-M7xTLm9tgCEwYBhgL/s1600/lg-gallery-5.png'),
(6, 'https://4.bp.blogspot.com/-HdeEIa5ky7s/XNflKogSRpI/AAAAAAAAAbc/zXSndZEqotcfh2IbQDphkiWibODM9RqsACLcBGAs/s1600/lg-gallery-6.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lowongankerja`
--

CREATE TABLE `lowongankerja` (
  `id` int(11) NOT NULL,
  `namalengkap` varchar(255) NOT NULL,
  `namapanggilan` varchar(255) NOT NULL,
  `ava` varchar(255) NOT NULL,
  `keahlian` varchar(255) NOT NULL,
  `ttl` varchar(255) NOT NULL,
  `jeniskelamin` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `telp` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kelulusan` varchar(255) NOT NULL,
  `ditempatkan` varchar(255) NOT NULL,
  `tekanan` varchar(255) NOT NULL,
  `sertifikat` varchar(255) NOT NULL,
  `sertifikasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lowongankerja`
--

INSERT INTO `lowongankerja` (`id`, `namalengkap`, `namapanggilan`, `ava`, `keahlian`, `ttl`, `jeniskelamin`, `agama`, `kota`, `status`, `telp`, `alamat`, `kelulusan`, `ditempatkan`, `tekanan`, `sertifikat`, `sertifikasi`) VALUES
(5, 'Rifki Firdaus', 'Rifki', 'https://cdn-images-1.medium.com/max/2400/1*wD_pWV3M0ZnAAimGMD_i0g.jpeg', 'Teknisi Jaringan', 'Banjit, 23 October 2001', 'Laki laki', 'Islam', 'Lampung', 'Pengangguran', '082282166044', 'Griya Persada Elok\r\nBlok K/29', 'Baru lulus', 'Keberatan', 'Siap', 'Lagi proses', 'Mau'),
(9, 'Azriel Muhammad', 'Azriel', 'https://2.bp.blogspot.com/-WpDoUSsY5X0/XN5O4fdWJgI/AAAAAAAAAcI/W_xzIHx-5CcOXMHdx-CBBv8mp9IS0VzuwCLcBGAs/s1600/pelamar2.png', 'Web Designer', 'Bekasi, 17 Februari 2001', 'Laki laki', 'Islam', 'Bekasi', 'Belum Menikah', '087883730944', 'Blok K/29', 'Baru lulus', 'Siap', 'Keberatan', 'Tidak punya', 'Mau'),
(10, 'Ahmad nur Ahmat', 'Masnur', 'https://2.bp.blogspot.com/-w4SHEOiRKsQ/XN5O4v5tZYI/AAAAAAAAAcM/OriLDQmePeg_y_Gxdoovulj9Dpw_t9FbgCLcBGAs/s1600/pelamar3.png', 'Programmer, Graphic Design', 'Gresik, 19 Agustus 1945', 'Laki laki', 'Islam', 'Gresik', 'Lajang', '087883730944', 'Blok K/29', 'Baru lulus', 'Siap', 'Siap', 'Punya', 'Mau'),
(11, 'Aldy Suherman', 'Adly', 'https://flatworld.com.vn/wp-content/uploads/2017/11/confident-businessman.jpg', 'Professional Programmer', 'Banjit, 19 Oktober 1965', 'Laki laki', 'Islam', 'Banjit', 'Belum Menikah', '081293692875', 'Banjit Lampung utara kesana dikit naik perahu', 'Tahun kemarin', 'Siap', 'Tidak siap', 'Punya', 'Mau'),
(15, 'Robert Downey Junior', 'RDJ', 'https://flatworld.com.vn/wp-content/uploads/2017/11/confident-businessman.jpg', 'IT Support, Web Designer, Professional Photo & Video Editing', 'London, 23 April 1989', 'Laki laki', 'Kristen', 'London', 'Menikah', '099213212386', 'London Utara, Amerika Serikat', 'Beberapa tahun lalu', 'Siap', 'Siap', 'Punya', 'Tidak usah'),
(16, 'Duha Al Qautsar', 'Duha', 'https://ak5.picdn.net/shutterstock/videos/23553025/thumb/1.jpg', 'Backend, Web & Mobile Developer', 'Jakarta, 19 Agustus 1945', 'Laki laki', 'Islam', 'Padang', 'Menikah', '0987654426624', 'Padang barat geser dikit, Sumatra Barat', 'Baru lulus', 'Siap', 'Siap', 'Punya', 'Mau'),
(17, 'Armando Tad', 'Tad', 'https://www.avepoint.com/blog/wp-content/uploads/2018/09/thoughtful-businessman-in-office-working-on-laptop-picture-id909203328.jpg', 'Professional Programmer, Freelance', 'Banjit, 23 October 2001', 'Laki laki', 'Islam', 'Bekasi', 'Pengangguran', '098097928164', 'Phasellus In Felis PC Phasellus In Felis PC', 'Tahun kemarin', 'Siap', 'Tidak siap', 'Lagi proses', 'Mau'),
(18, 'Siti Atkinson', 'Siti', 'https://agcdn-2mrybbgckm7omi0k.netdna-ssl.com/wp-content/uploads/2016/04/alphagamma-20-largest-communities-for-women-entrepreneurs-startups-entrepreneurship-1021x580.jpg', 'Backend, Web & Mobile Developer', 'Gresik, 19 Agustus 1945', 'Perempuan', 'Kristen', 'Jogjakarta', 'Belum Menikah', '087883730944', 'London selatan, sana dikit pake helm', 'Baru lulus', 'Siap', 'Tidak siap', 'Punya', 'Mikir dulu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `daya` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telp` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id`, `daya`, `nama`, `email`, `telp`, `alamat`) VALUES
(1, '2200W', 'Muhammad Azrial Faturrachman', 'azriel.fatur1@gmail.com', '087883730944', 'Griya Persada Elok\r\nBlok K/29'),
(8, '2200W', 'Rifki Firdaus', 'rifkyuhuy@gmail.com', '082282166044', 'Banjit Utara, Lampung Pusat, Sumartra'),
(9, '900W', 'Ahmad Jumadi', 'yoyon1970@gmail.com', '0987218414969', 'Gresik, Babat, Pekalongan'),
(10, '450W', 'Aldy Suherman', 'aldyuhuyysquad@gmail.com', '096969696969', 'Disamping rumah pak rt, Pesanggrahan, Jakarta Selatan'),
(11, '4400W', 'Duhaaa', 'duhauhuy@gmail.com', '098762542741749', 'Padang barat geser sanaan dikit');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sertifikaat`
--

CREATE TABLE `sertifikaat` (
  `id` int(11) NOT NULL,
  `paragraf` text NOT NULL,
  `judul` varchar(255) NOT NULL,
  `alert` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sertifikaat`
--

INSERT INTO `sertifikaat` (`id`, `paragraf`, `judul`, `alert`) VALUES
(1, 'Surat Laik Operasi disebut SLO adalah surat keterangan yang menyatakan bahwa listrik yang akan di aliri listrik oleh PLN telah memenuhi persyaratan administrasi dan kelayakan teknis.', 'Regulasi Terkait SLO', 'Undang-Undang Nomor 30 Tahun 2009 tentang Ketenagalistrikan. Peraturan Pemerintah Nomor 14 Tahun 2012 tentang Kegiatan Usaha Penyediaan Tenaga Listrik. Peraturan Menteri ESDM No. 5 Tahun 2014 tentang Tata Cara Akreditasi dan Sertifikasi Ketenagalistrikan. Peraturan Direktur Jenderal Ketenagalistrikan No. 556K/20/DJL.1/2014 Tahun 2014 tentang Tara Cara Penomoran dan Registrasi Sertifikat di Bidang Ketenagalistrikan.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `service`
--

INSERT INTO `service` (`id`, `gambar`, `judul`, `keterangan`) VALUES
(1, 'https://4.bp.blogspot.com/-dLzWqN_fJXc/XNbQNE-r6SI/AAAAAAAAAY4/MBFBk40jE8QAhxXakSkfdMI8LTrB9ZwxACLcBGAs/s1600/installasi-listrik.png', 'Installasi Listrik', 'Instalasi listrik merupakan salah satu bagian terpenting dari suatu bangunan yang berpungsi sebagai penunjang kenyamanan'),
(2, 'https://1.bp.blogspot.com/-Mx8RBPv6baI/XNbQNLmuLsI/AAAAAAAAAY0/LxPWWzAZsiInCwtHSMlBw8b3fOsIk0zQgCLcBGAs/s1600/installasi-baru.png', 'Pemasangan Baru', 'Instalasi listrik merupakan salah satu bagian terpenting dari suatu bangunan yang berpungsi sebagai penunjang kenyamanan'),
(3, 'https://4.bp.blogspot.com/-tJEEjh-VdfU/XNbQN7s75gI/AAAAAAAAAY8/tOxvosJubl8esx_AJinrOdOMgOQimLp4QCLcBGAs/s1600/penambahan-daya.png', 'Penambahan Daya', 'Instalasi listrik merupakan salah satu bagian terpenting dari suatu bangunan yang berpungsi sebagai penunjang kenyamanan'),
(4, 'https://1.bp.blogspot.com/-vcnI4Yj6apA/XNbQOicvTkI/AAAAAAAAAZE/_LXV-3l4EQsiVYnVsDMyJCozw44_fh9eQCLcBGAs/s1600/sertifikat-laik-operasi.png', 'Sertifikat Laik Operasi (SLO)', 'Instalasi listrik merupakan salah satu bagian terpenting dari suatu bangunan yang berpungsi sebagai penunjang kenyamanan'),
(5, 'https://3.bp.blogspot.com/-ierCmf7WwnQ/XNbQOSKyBrI/AAAAAAAAAZA/qXP4z8wxxtUiFRNoMz8Q2SriLd-NE9LXACLcBGAs/s1600/penangkal-petir.png', 'Penangkal Petir', 'Instalasi listrik merupakan salah satu bagian terpenting dari suatu bangunan yang berpungsi sebagai penunjang kenyamanan'),
(6, 'https://1.bp.blogspot.com/-V9Irxnnqfl0/XNbQMwLqvpI/AAAAAAAAAYw/rATCtqpASnw49rvYKdJn9xEjPeFZ5WbEgCLcBGAs/s1600/genset.png', 'Genset', 'Instalasi listrik merupakan salah satu bagian terpenting dari suatu bangunan yang berpungsi sebagai penunjang kenyamanan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testi`
--

CREATE TABLE `testi` (
  `id` int(11) NOT NULL,
  `pesan` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `testi`
--

INSERT INTO `testi` (`id`, `pesan`, `nama`) VALUES
(1, 'Lorem Ipsum dolor sit amet, consectetur adipisicing elit,sed do euismod tempor incididunt ut labore et dolore magnaaliqua, ut enim. Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'Ahmad Jumadi'),
(2, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id, adipisci consectetur blanditiis voluptatum eius culpa tempore reiciendis? Nostrum nihil a fugiat eum maxime optio, aliquam sapiente, officia sequi ea provident.', 'Risky Uhuy'),
(3, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate dolore culpa sunt vero sed nihil recusandae deleniti maiores similique quis hic dignissimos vel nisi maxime, exercitationem, dolores blanditiis, inventore architecto?', 'Azriel Muhammad'),
(4, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam assumenda culpa rem modi ad veritatis reiciendis, aperiam beatae dignissimos nostrum mollitia debitis, neque illum maiores optio minus laboriosam quae dolorem.', 'Duha Atkinson'),
(5, 'Lorem Ipsum dolor sit amet, consectetur adipisicing elit,sed do euismod tempor incididunt ut labore et dolore magnaaliqua, ut enim. Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'Muhammad Azrial Faturrachman');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tim`
--

CREATE TABLE `tim` (
  `id` int(11) NOT NULL,
  `nama` varchar(2555) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tim`
--

INSERT INTO `tim` (`id`, `nama`, `gambar`, `jabatan`) VALUES
(1, 'Ahmad Charles', 'https://1.bp.blogspot.com/-JIkoskSQaAI/XNt6frPlMqI/AAAAAAAAAbw/tGErG-lWu_Q5ahFQS7ksOQv6JNPUzsq7wCLcBGAs/s1600/directur.png', 'Directur'),
(2, 'Marzuki Adhock\r\n', 'https://3.bp.blogspot.com/-TtDBNrXKEpg/XNt5xo3EOTI/AAAAAAAAAbo/SG-CoGuXtjwKBIUo-5ywuHt-0nodFHyNQCLcBGAs/s1600/manager.png', 'Manager'),
(3, 'Siti Atkinson', 'https://4.bp.blogspot.com/-TmAOHXhPlRU/XNt64TYPGWI/AAAAAAAAAb4/mRtZnWFdcd8gxK2XlQqyXCiJDYsYL0wDACLcBGAs/s1600/marketing.png', 'Assistant');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `gambar`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Azriel Muhammad', 'azriel.fatur1@gmail.com', 'https://2.bp.blogspot.com/-sGhyFZjnnxs/XN_6y3PE3bI/AAAAAAAAAcg/cU-vuSJF7ZUV2W9BrXcQWqcnCLjNB0HZQCLcBGAs/s1600/1555131722078.png', NULL, '$2y$10$M2bKMI3y5UGsMZsEKA9FLeJaxDJO4x5rNTy17OunMZhtyaHCfs2jS', NULL, '2019-05-10 23:27:17', '2019-05-10 23:27:17');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `datapt`
--
ALTER TABLE `datapt`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `lowongankerja`
--
ALTER TABLE `lowongankerja`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sertifikaat`
--
ALTER TABLE `sertifikaat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `testi`
--
ALTER TABLE `testi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tim`
--
ALTER TABLE `tim`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `datapt`
--
ALTER TABLE `datapt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `detail`
--
ALTER TABLE `detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `lowongankerja`
--
ALTER TABLE `lowongankerja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `sertifikaat`
--
ALTER TABLE `sertifikaat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `testi`
--
ALTER TABLE `testi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tim`
--
ALTER TABLE `tim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
