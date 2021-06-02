-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jun 2021 pada 07.42
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nusantaratama`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `sub_about` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `about`
--

INSERT INTO `about` (`id`, `deskripsi`, `sub_about`) VALUES
(1, 'About Nusantara Tama', 'Nusantara Tama merupakan Sebuah perusahaan di bidang konsultansi dan perencanaan dengan memfokuskan pada bidang Teknologi Informasi (IT). Nusantara Tama merupakan perusahaan konsultan IT yang bernaung pada IKATAN KONSULTAN INDONESIA (INKINDO).\r\nPerusahaan ini berdiri pada tanggal 01 April 2016 merupakan cita-cita untuk mengembangkan dan memajukan dunia IT di Indonesia khususnya, team kami memang fokus pada dunia teknologi dan informasi sehingga mampu membantu berbagai latar belakang usaha yan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `banner`
--

CREATE TABLE `banner` (
  `judul_banner` varchar(255) NOT NULL,
  `ket` varchar(255) NOT NULL,
  `upload` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `banner`
--

INSERT INTO `banner` (`judul_banner`, `ket`, `upload`) VALUES
('Perusahaan IT di Indonesia Terpercaya', 'Memberikan Solusi dan Manfaat di Era New Digital, membuat semua menjadi online dan gampang', 'hand-mockup.png'),
('Perencana dan Pengembaangan Smart City', 'Membantu Pemerintah Membangun Kota Pintar Dengan Aplikasi Yang Terintegrasi, membuat kerja semakin mudah, efektif dan efisien', 'hand-mockup.png'),
('Konsultasi Berbagai Jenis Usaha', 'Kami Membantu Mencakup Berbagai Bidang Usaha, Pemerintahan, BUMN, BUMD, Swasta, Perorangan. Konsultasikan permasalahan anda, akan kami berikan solusi yang tepat guna', 'hand-mockup.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `client`
--

CREATE TABLE `client` (
  `nama_client` varchar(255) NOT NULL,
  `logo_client` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `client`
--

INSERT INTO `client` (`nama_client`, `logo_client`, `link`) VALUES
('kementerian Pekerjaan Umum dan Rakyat', 'Kementerian Pekerjaan Umum dan Perumahan Rakyat.jpg', 'https://www.pu.go.id/'),
('Kementerian Perhubungan', 'kementrian Perhubungan.png', 'http://dephub.go.id/'),
('Kabupaten Pasuruan', '1200px-Lambang_Kabupaten_Pasuruan.png', 'https://www.pasuruankab.go.id/'),
('Kabupaten Jembrana', 'jembrana.png', 'https://jembranakab.go.id/'),
('Kabupaten Jember', 'jember.png', 'https://www.jemberkab.go.id/'),
('Kabupaten Lumajang', 'Lambang_Kabupaten_Lumajang.png', 'https://lumajangkab.go.id/'),
('Kabupaten Bondowoso', 'BONDOWOSO.jfif', 'https://bondowosokab.go.id/'),
('Kabupaten Banyuwangi', 'Logo_banyuwangi.png', 'https://banyuwangikab.go.id/'),
('Pertamina', 'Logo_pertamina.jpg', 'https://www.pertamina.com/'),
('Angkasan Pura II', 'angkasa pura II.jfif', 'https://angkasapura2.co.id/id'),
('PT. MITRATANI DUA PULUH TUJUH', 'MitraTANI.png', 'https://mitratani27.co.id/'),
('PT.TELEKOMUNIKASI INDONESIA', 'TELEKOMUNIKASI INDONESIA.png', 'https://telkom.co.id/sites'),
('Perpenas Banyuwangi', 'lambang-universitas-17-agustus-1945-banyuwangi.jpg', '-'),
('Jawa Pos', 'jawa pos.png', 'https://www.jawapos.com/'),
('BIN CIGAR', 'bincigar.png', 'https://bincigar.com/'),
('Sorong News', 'sorong news.jpg', 'https://berita.mascitra.co.id/'),
('Universitas Muhammaddiyah Surabaya', 'Universitas-Muhammadiyah-Surabaya.png', 'https://um-surabaya.ac.id/'),
('Universitas Airlangga', 'universitas Airlangga.png', 'https://www.unair.ac.id/'),
('Universitas Jember', 'UNEJ.png', 'https://unej.ac.id/'),
('Universitas Brawijaya', 'universitas Brawijaya.jfif', 'https://ub.ac.id/'),
('Politeknik Negeri Surabaya', 'pens.jfif', '-'),
('Politeknik Negeri Banyuwangi', 'pliteknik negeri banyuwangi.png', 'https://www.poliwangi.ac.id/'),
('Politeknik Negeri Madura', 'POLTERA.png', 'https://www.poltera.ac.id/'),
('Telkom Univercity', 'TELKOM UNIVERSITAS.png', 'https://telkomuniversity.ac.id/'),
('Politeknik Negeri Tanah Laut', 'PoliteknikNegeriTanahLaut.png', 'https://politala.ac.id/'),
('Politeknik Negeri Jember', 'POLITEKNIK NEGERI JEMBER.png', 'https://polije.ac.id/'),
('SMKN 1 LUMAJANG', 'SMKN ! LUMAJANG.png', 'https://smkn1lmj.sch.id/');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `nama` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `pesan` varchar(500) NOT NULL,
  `komentar` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`nama`, `email`, `pesan`, `komentar`) VALUES
('danang rezna', 'fandidul92@gamail.com', 'ini pesan saya', 'jhfwqywfxjywdHFCUWYfduyWUDYQEUYQUWAFJA'),
('logo pemerintah', 'fandidul92@gmail.com', 'ini pesan saya', 'yuruyfhfgdyuihiefhihqihwierhhguhwoejhf'),
('jembercyty', 'danangrezna@gmail.com', 'ini pesan saya', 'hvwjhxshxgsftdytxhgwsutiuGISfgEIYFgIEUYGFkrgituf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `partmenu`
--

CREATE TABLE `partmenu` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `konten` varchar(255) NOT NULL,
  `sub_menu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `portofolio`
--

CREATE TABLE `portofolio` (
  `kode` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `ket` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `portofolio`
--

INSERT INTO `portofolio` (`kode`, `nama`, `logo`, `ket`) VALUES
('2018-02-25', 'Simpeg Perpenas Kabupaten Banyuwangi', 'simpegperpenas.jpg', '-'),
('2018-02-21', 'Sampul E-PUKESMAS', 'simpul.jpg', '-'),
('2018-02-21', 'Smep Kabupaten Lumajang', 'smep.jpg', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `screenshot`
--

CREATE TABLE `screenshot` (
  `kode` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `screenshot`
--

INSERT INTO `screenshot` (`kode`, `judul`, `gambar`) VALUES
(1, 'Screenshot 1', 'screenshot1.jpg'),
(2, 'Screenshot 2', 'screenshot2.jpg'),
(3, 'Screenshot 3', 'screenshot3.jpg'),
(4, 'Screenshot 4', 'screenshot4.jpg'),
(5, 'Screenshot 5', 'screenshot5.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimoni`
--

CREATE TABLE `testimoni` (
  `nama` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `ket` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `testimoni`
--

INSERT INTO `testimoni` (`nama`, `logo`, `ket`) VALUES
('Kepala Diskominfo Pemda Lumajang', 'logo-kominfo-transparent.png', 'Aplikasi yang terintegrasi yang sangat membantu dan dipakai semua pengguna di lingkungan Pemerintah Kabupaten Lumajang.'),
('Kementerian Pekerjaan Umum dan Perumahan Rakyat (PUPR)', 'Logo_PU_(RGB).jpg', 'Senang bekerjasama dengan kami karena memberikan pelayanan yang optimal dan prima, semoga bisa berkesempatan mengembangkan aplikasi lain yang bermanfaat lebih banyak lagi'),
('Kepala Bidang Keuangan dan Aset Pemda Kabupaten Pasuruan', '1200px-Lambang_Kabupaten_Pasuruan.png', 'Terimakasih sudah mengembangkan aplikasi SIMBMD Online dengan pelayanan yang bagus, semoga tambah sukses');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'test1', '1@null.com', '2021-04-29 06:27:33', '1234', NULL, '2021-04-29 06:22:56', '2021-04-29 06:22:56'),
(4, 'lmao', 'lmao@null.com', NULL, '$2y$10$fyQhcywcY/agBBcazMbpleP7zVso7B3p1s3JAUas5cNsKgXmQCtyy', NULL, '2021-04-29 00:43:59', '2021-04-29 00:43:59'),
(5, 'ppp', 'fandidul92@gamail.com', NULL, 'm sholeh a', NULL, '2021-05-17 07:06:49', '2021-05-17 07:06:49');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `partmenu`
--
ALTER TABLE `partmenu`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `partmenu`
--
ALTER TABLE `partmenu`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
