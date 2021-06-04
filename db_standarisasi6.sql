-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jun 2021 pada 06.25
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.4.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_standarisasi6`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bagian`
--

CREATE TABLE `bagian` (
  `id` int(11) NOT NULL,
  `kode_divisi` varchar(255) DEFAULT NULL,
  `kode_bagian` varchar(255) DEFAULT NULL,
  `nama_bagian` varchar(255) DEFAULT NULL,
  `pref_bagian` varchar(255) DEFAULT NULL,
  `level_bagian` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `bagian`
--

INSERT INTO `bagian` (`id`, `kode_divisi`, `kode_bagian`, `nama_bagian`, `pref_bagian`, `level_bagian`) VALUES
(1, '0000', '0000', 'Semua Bagian (Khusus Admin PTPN VI)', 'Semua Bagian (Khusus Admin PTPN VI)', 'Korporat'),
(2, 'N06.KD', 'N06.KD.01', 'Tanaman', 'TN06.01', 'Korporat'),
(3, 'N06.KD', 'N06.KD.02', 'Teknik & Pengolahan', 'TK06.02', 'Korporat'),
(4, 'N06.KD', 'N06.KD.03', 'Pembiayaan', 'PB06.03', 'Korporat'),
(5, 'N06.KD', 'N06.KD.04', 'Pengadaan dan TI', 'KM06.04', 'Korporat'),
(6, 'N06.KD', 'N06.KD.05', 'SDM', 'SD06.05', 'Korporat'),
(7, 'N06.KD', 'N06.KD.06', 'Sekretariat Perusahaan', 'SU06.06', 'Korporat'),
(8, 'N06.KD', 'N06.KD.07', 'SPI', 'SP06.07', 'Korporat'),
(9, 'N06.KD', 'N06.KD.08', 'Perencanaan dan Sustainability', 'RB06.08', 'Korporat'),
(10, 'N06.KD', 'N06.KD.09', 'Transformasi Bisnis', 'TB06.09', 'Korporat'),
(11, 'N06.KD', 'N06.UUS.01', 'Unit Usaha Bunut', 'BNT06', 'Operasional'),
(12, 'N06.KD', 'N06.UUS.02', 'Unit Usaha Tanjung Lebar', 'TLB06', 'Operasional'),
(13, 'N06.KD', 'N06.UUS.03', 'Unit Usaha Batang Hari/ISS', 'BHR06', 'Operasional'),
(14, 'N06.KD', 'N06.UUS.04', 'Unit Usaha Durian Luncuk', 'DRL06', 'Operasional'),
(15, 'N06.KD', 'N06.UUS.05', 'Unit Usaha Bukit Cermin', 'BKC06', 'Operasional'),
(16, 'N06.KD', 'N06.UUS.06', 'Unit Usaha Rimsa', 'RSA06', 'Operasional'),
(17, 'N06.KD', 'N06.UUS.07', 'Unit Usaha Rimdu', 'RDU06', 'Operasional'),
(18, 'N06.KD', 'N06.UUS.08', 'Unit Usaha Kayu Aro', 'ARO06', 'Operasional'),
(19, 'N06.KD', 'N06.UUS.09', 'Unit Usaha Danau Kembar', 'DAR06', 'Operasional'),
(20, 'N06.KD', 'N06.UUS.10', 'Unit Usaha Ophir', 'OPH06', 'Operasional'),
(21, 'N06.KD', 'N06.UUS.11', 'Unit Usaha Solok Selatan', 'SSL06', 'Operasional'),
(22, 'N06.KD', 'N06.UUS.12', 'Unit Usaha Pangkalan Lima Puluh Kota', 'PLK06', 'Operasional'),
(23, '0000', 'N06.PKS.01', 'PKS Sungai Bahar', 'PSB06', 'Operasional'),
(24, '0000', 'N06.PKS.02', 'PKS Pengabuan', 'PGB06', 'Operasional'),
(25, '0000', 'N06.PKS.03', 'PKS Aur Gading', 'PAG06', 'Operasional'),
(26, '0000', 'N06.HPS', 'Urusan Harga Perkiraan Sendiri (HPS)', 'HPS.06', 'Korporat'),
(27, '0000', '06.04', 'pengadaan & ti', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bidang`
--

CREATE TABLE `bidang` (
  `id` int(11) NOT NULL,
  `kode_katalog` varchar(255) DEFAULT NULL,
  `nomor_bidang` varchar(255) DEFAULT NULL,
  `nama_bidang` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `bidang`
--

INSERT INTO `bidang` (`id`, `kode_katalog`, `nomor_bidang`, `nama_bidang`, `created_at`, `updated_at`) VALUES
(1, '002', 'KM.06', 'PEMASARAN KELAPA SAWIT', NULL, NULL),
(2, '002', 'KM.07', 'PEMASARAN TEH', NULL, NULL),
(3, '002', 'KM.08', 'PEMASARAN TEH KEMASAN', NULL, NULL),
(4, '002', 'KM.09', 'PEMASARAN KARET', NULL, NULL),
(5, '002', 'KM.10', 'PENGADAAN', NULL, NULL),
(6, '002', 'KM.11', 'HARGA KOMODITI', NULL, NULL),
(7, '002', 'KM.12', 'PENETAPAN HARGA PERKIRAAN SENDIRI (HPS)', NULL, NULL),
(8, '001', 'PB.06', 'KEUANGAN', NULL, NULL),
(9, '001', 'PB.07', 'AKUNTANSI', NULL, NULL),
(10, '001', 'PB.08', 'VERIFIKASI', NULL, NULL),
(11, '001', 'PB.09', 'ANGGARAN', NULL, NULL),
(12, '006', 'RB.06', 'PENGKAJIAN & PENGEMBANGAN TANAMAN', NULL, NULL),
(13, '006', 'RB.07', 'LINGKUNGAN, PROPER', NULL, NULL),
(14, '006', 'RB.08', 'IMPLEMENTASI ISPO', NULL, NULL),
(15, '006', 'RB.09', 'SMK3', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `divisi`
--

CREATE TABLE `divisi` (
  `id` int(11) NOT NULL,
  `kode_divisi` varchar(255) DEFAULT NULL,
  `nama_divisi` varchar(255) DEFAULT NULL,
  `pref_divisi` varchar(255) DEFAULT NULL,
  `perusahaan` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `divisi`
--

INSERT INTO `divisi` (`id`, `kode_divisi`, `nama_divisi`, `pref_divisi`, `perusahaan`, `created_at`, `updated_at`) VALUES
(1, '0000', 'Semua Divisi (Khusus Admin Utama)', 'Semua Divisi (Khusus Admin Utama)', 'PT PERKEBUNAN NUSANTARA VI', NULL, NULL),
(2, 'N06', 'PTPN 6', 'N06', 'PT PERKEBUNAN NUSANTARA VI', NULL, NULL),
(3, 'N06.KD', 'KANTOR DIREKSI', 'KD', 'PT PERKEBUNAN NUSANTARA VI', NULL, NULL),
(4, 'N06.UUS', 'UNIT USAHA', 'UUS', 'PT PERKEBUNAN NUSANTARA VI', NULL, NULL),
(5, 'N06.PKS', 'PABRIK KELAPA SAWIT', 'PKS', 'PT PERKEBUNAN NUSANTARA VI', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `id` int(11) NOT NULL,
  `nama_jabatan` varchar(255) NOT NULL,
  `kode_jabatan` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`id`, `nama_jabatan`, `kode_jabatan`, `created_at`, `updated_at`) VALUES
(1, 'mandorrr', 'man2', '2021-06-02 01:53:23', '2021-06-02 01:53:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `katalog`
--

CREATE TABLE `katalog` (
  `id` int(11) NOT NULL,
  `kode_katalog` varchar(255) DEFAULT NULL,
  `nama_katalog` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `katalog`
--

INSERT INTO `katalog` (`id`, `kode_katalog`, `nama_katalog`, `created_at`, `updated_at`) VALUES
(1, '001', 'KATALOG RISIKO KEUANGAN DAN PASAR', NULL, NULL),
(2, '002', 'KATALOG RISIKO KEPUASAN PELANGGAN', NULL, NULL),
(3, '003', 'KATALOG RISIKO EFEKTIVITAS PRODUKSI DAN PROSES', NULL, NULL),
(4, '004', 'KATALOG RISIKO TENAGA KERJA', NULL, NULL),
(5, '005', 'KATALOG RISIKO KEPEMIMPINAN, TATA KELOLA & TANGGUNG JAWAB KEMASYARAKATAN', NULL, NULL),
(6, '006', 'KATALOG RISIKO PENGEMBANGAN PERUSAHAAN', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kepegawaian`
--

CREATE TABLE `kepegawaian` (
  `id` int(11) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kode_bagian` varchar(255) NOT NULL,
  `jenkel` varchar(255) NOT NULL,
  `kode_jabatan` varchar(255) NOT NULL,
  `organization` varchar(255) NOT NULL,
  `tgl_lahir` varchar(255) NOT NULL,
  `umur` varchar(255) NOT NULL,
  `kriteria` varchar(255) NOT NULL,
  `status_karyawan` varchar(255) NOT NULL,
  `pensiun` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kepegawaian`
--

INSERT INTO `kepegawaian` (`id`, `nik`, `nama`, `kode_bagian`, `jenkel`, `kode_jabatan`, `organization`, `tgl_lahir`, `umur`, `kriteria`, `status_karyawan`, `pensiun`, `created_at`, `updated_at`) VALUES
(6, '891999', 'asep', 'N06.UUS.01', 'laki-laki', 'man2', 'afdeling', '01/06/2021', '21', '1', 'pkwt', '2021', '2021-06-02 01:59:12', '2021-06-02 01:59:12');

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
-- Struktur dari tabel `nomenklatur`
--

CREATE TABLE `nomenklatur` (
  `id` int(11) NOT NULL,
  `kode_bagian` varchar(255) NOT NULL,
  `kode_jabatan` varchar(255) NOT NULL,
  `level_bod` varchar(255) NOT NULL,
  `standar_formasi` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `norma_jmlh` varchar(255) NOT NULL,
  `standar_status` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nomenklatur`
--

INSERT INTO `nomenklatur` (`id`, `kode_bagian`, `kode_jabatan`, `level_bod`, `standar_formasi`, `keterangan`, `norma_jmlh`, `standar_status`, `created_at`, `updated_at`) VALUES
(8, 'N06.KD.01', 'man2', 'bod-1', '2', 'per unit usaha', '16', 'PKWT/KNG', '2021-06-02 09:20:46', '2021-06-02 09:20:46'),
(9, 'N06.KD.02', 'man2', 'bod-4', '6', 'per unit usaha', '16', 'Karyawan Sendiri', '2021-06-02 09:22:32', '2021-06-02 09:22:32'),
(11, 'N06.KD.01', 'man2', 'bod-3', '3', 'per unit usaha', '16', 'PKWT/KNG', '2021-06-02 09:26:52', '2021-06-02 09:26:52'),
(12, 'N06.KD.01', 'man2', 'bod-3', '3', 'per unit usaha', '16', 'Ahli daya', '2021-06-02 09:27:52', '2021-06-02 09:27:52'),
(13, 'N06.KD.05', 'man2', 'bod-1', '1', 'per unit usaha', '16', 'Karyawan Sendiri', '2021-06-02 09:30:03', '2021-06-02 09:30:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `risiko`
--

CREATE TABLE `risiko` (
  `id` int(11) NOT NULL,
  `nomor_bidang` varchar(255) DEFAULT NULL,
  `risiko` varchar(255) DEFAULT NULL,
  `nomor_register` varchar(255) DEFAULT NULL,
  `usulan_mitigasi` varchar(255) DEFAULT NULL,
  `likelihood` varchar(255) DEFAULT NULL,
  `impact` varchar(255) DEFAULT NULL,
  `score` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `triwulan` varchar(255) DEFAULT NULL,
  `tahun` varchar(255) DEFAULT NULL,
  `kode_bagian` varchar(255) DEFAULT NULL,
  `pemilik` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `risiko`
--

INSERT INTO `risiko` (`id`, `nomor_bidang`, `risiko`, `nomor_register`, `usulan_mitigasi`, `likelihood`, `impact`, `score`, `status`, `triwulan`, `tahun`, `kode_bagian`, `pemilik`, `created_at`, `updated_at`) VALUES
(2, 'KM.06', 'ABC', 'ABC', 'ABC', '1', '3', '3', 'sedang', '1', '2020', 'N06.UUS.02', 'ABC', '2021-05-25 17:13:42', '2021-05-25 17:13:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `unitusaha`
--

CREATE TABLE `unitusaha` (
  `id` int(11) NOT NULL,
  `kode_unit` varchar(255) NOT NULL,
  `kode_jabatan` varchar(255) NOT NULL,
  `nama_unit` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `norma_jmlh` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `unitusaha`
--

INSERT INTO `unitusaha` (`id`, `kode_unit`, `kode_jabatan`, `nama_unit`, `keterangan`, `norma_jmlh`, `created_at`, `updated_at`) VALUES
(1, 'DRL', 'man2', 'Durian Luncuk', 'per unit usaha', '15', '2021-06-02 08:05:13', '2021-06-02 08:05:13'),
(2, 'BHR', 'man2', 'BAHAR', 'per unit usaha', '16', '2021-06-02 09:04:35', '2021-06-02 09:04:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(6, 'admin', 'admin', '$2y$10$ns7TNh.b4nA9tXQ.NxREhe5wTDSV92IZPGp/KLmFYgYv4cyIyJUIy', NULL, '2021-05-18 05:59:39', '2021-05-18 05:59:39');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bagian`
--
ALTER TABLE `bagian`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `bidang`
--
ALTER TABLE `bidang`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `katalog`
--
ALTER TABLE `katalog`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `kepegawaian`
--
ALTER TABLE `kepegawaian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nomenklatur`
--
ALTER TABLE `nomenklatur`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `risiko`
--
ALTER TABLE `risiko`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `unitusaha`
--
ALTER TABLE `unitusaha`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bagian`
--
ALTER TABLE `bagian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `bidang`
--
ALTER TABLE `bidang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `divisi`
--
ALTER TABLE `divisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `katalog`
--
ALTER TABLE `katalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kepegawaian`
--
ALTER TABLE `kepegawaian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `nomenklatur`
--
ALTER TABLE `nomenklatur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `risiko`
--
ALTER TABLE `risiko`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `unitusaha`
--
ALTER TABLE `unitusaha`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
