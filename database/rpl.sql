-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Des 2019 pada 13.08
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rpl`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_kerjasama`
--

CREATE TABLE `hasil_kerjasama` (
  `id` int(11) NOT NULL,
  `judul_kegiatan` text NOT NULL,
  `lembaga_mitra` text NOT NULL,
  `tingkat` enum('Dalam Kampus','Antar Kampus','Kabupaten / Kota','Provinsi','Nasional','Internasional') NOT NULL,
  `tanggal` date NOT NULL,
  `durasi` varchar(50) NOT NULL,
  `manfaat` text NOT NULL,
  `file` text NOT NULL,
  `image` text NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hasil_kerjasama`
--

INSERT INTO `hasil_kerjasama` (`id`, `judul_kegiatan`, `lembaga_mitra`, `tingkat`, `tanggal`, `durasi`, `manfaat`, `file`, `image`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 'ESQ Berbagi', 'Aksi Cepat Tanggap (ACT)', 'Dalam Kampus', '2019-11-16', '90 Menit', 'Mengajak Mahasiswa ESQ Business School untuk berbagi kebaikan', '', '', 2, '2019-11-22 17:49:56', '2019-12-13 09:18:52'),
(2, 'ESQ Donor Darah', 'Lembaga Ansuransi Jakarta Selatan', 'Dalam Kampus', '2019-11-03', '300 Menit', 'Memberikan bantuan donor darah kepada yang membutuhkan', 'Donor-Darah-Desy.pdf', '', 3, '2019-11-22 17:49:56', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `matakuliah`
--

CREATE TABLE `matakuliah` (
  `id` int(11) NOT NULL,
  `kode_matakuliah` varchar(50) NOT NULL,
  `matakuliah` text NOT NULL,
  `semester` enum('1','2','3','4','5','6','7','8','Pilihan','Pendek') NOT NULL,
  `sks_teori` enum('0','1','2','3','4','5','6') NOT NULL,
  `sks_lab` enum('0','1','2') NOT NULL,
  `jenis` enum('Wajib','Peminatan AI','Peminatan SE','Pilihan') NOT NULL,
  `file` text NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `matakuliah`
--

INSERT INTO `matakuliah` (`id`, `kode_matakuliah`, `matakuliah`, `semester`, `sks_teori`, `sks_lab`, `jenis`, `file`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 'ESQC101', 'Pengembangan dan Manajemen Diri 1', '1', '2', '1', 'Wajib', '', 1, '2019-11-22 16:50:03', '2019-12-03 15:52:22'),
(2, 'ESQU101', 'Pendidikan Agama Islam', '1', '2', '0', 'Wajib', 'Pendidikan Agama Islam.pdf', 1, '2019-11-22 16:50:03', '0000-00-00 00:00:00'),
(3, 'ESQU105', 'Pendidikan Pancasila', '1', '2', '0', 'Wajib', 'Pendidikan Pancasila.pdf', 1, '2019-11-22 16:50:03', '0000-00-00 00:00:00'),
(4, 'KKIN101', 'Komputasi dan Design Thinking', '1', '3', '0', 'Wajib', 'Komputasi dan Design Thinking.pdf', 1, '2019-11-22 16:50:03', '0000-00-00 00:00:00'),
(5, 'CSAP110', 'Dasar Pemrograman', '1', '3', '1', 'Wajib', 'Dasar Pemrograman.pdf', 1, '2019-11-22 16:50:03', '0000-00-00 00:00:00'),
(6, 'CSMT100', 'Matematika Diskrit 1', '1', '3', '0', 'Wajib', 'Matematika Diskrit 1.pdf', 1, '2019-11-22 16:50:03', '0000-00-00 00:00:00'),
(7, 'CSAR110', 'Pengantar Sistem Digital', '1', '3', '0', 'Wajib', 'Pengantar Sistem Digital.pdf', 1, '2019-11-22 16:50:03', '0000-00-00 00:00:00'),
(8, 'ESQC102', 'Pengembangan dan Manajemen Diri 2', '2', '2', '1', 'Wajib', 'Pengembangan dan Manajemen Diri 2.pdf', 1, '2019-11-22 16:54:38', '0000-00-00 00:00:00'),
(9, 'ESBH101', 'Komunikasi dan Presentasi', '2', '3', '0', 'Wajib', 'Komunikasi dan Presentasi.pdf', 1, '2019-11-22 16:54:38', '0000-00-00 00:00:00'),
(10, 'ESQU106', 'Pendidikan Kewarganegaraan', '2', '2', '0', 'Wajib', 'Pendidikan Kewarganegaraan.pdf', 1, '2019-11-22 16:54:38', '0000-00-00 00:00:00'),
(11, 'CSAP121', 'Pemrograman Berorientasi Objek', '2', '3', '1', 'Wajib', 'Pemrograman Berorientasi Objek.pdf', 1, '2019-11-22 16:54:38', '0000-00-00 00:00:00'),
(12, 'CSMT101', 'Matematika Diskrit 2', '2', '3', '0', 'Wajib', 'Matematika Diskrit 2.pdf', 1, '2019-11-22 16:54:38', '0000-00-00 00:00:00'),
(13, 'CSMT104', 'Matematika', '2', '3', '0', 'Wajib', 'Matematika.pdf', 1, '2019-11-22 16:54:38', '0000-00-00 00:00:00'),
(14, 'KBMM101', 'Pengantar Multimedia', '2', '2', '1', 'Wajib', 'Pengantar Multimedia.pdf', 1, '2019-11-22 16:54:38', '0000-00-00 00:00:00'),
(15, 'ESQC203', 'Kepemimpinan Berbasis Karakter 1', '3', '3', '0', 'Wajib', 'Kepemimpinan Berbasis Karakter 1.pdf', 1, '2019-11-22 16:59:37', '0000-00-00 00:00:00'),
(16, 'CSAP200', 'Teori Bahasa dan  Otomata', '3', '3', '0', 'Wajib', 'Teori Bahasa dan  Otomata.pdf', 1, '2019-11-22 16:59:37', '0000-00-00 00:00:00'),
(17, 'CSMT202', 'Aljabar Linier', '3', '3', '0', 'Wajib', 'Aljabar Linier.pdf', 1, '2019-11-22 16:59:37', '0000-00-00 00:00:00'),
(18, 'CSMT203', 'Statistika dan Probabilitas', '3', '3', '0', 'Wajib', 'Statistika dan Probabilitas.pdf', 1, '2019-11-22 16:59:37', '0000-00-00 00:00:00'),
(19, 'CSAP202', 'Algoritma dan Struktur Data', '3', '3', '1', 'Wajib', '', 1, '2019-11-22 16:59:37', '2019-12-03 15:52:30'),
(20, 'CSAP100', 'Perancangan Web', '3', '2', '1', 'Wajib', 'Perancangan Web.pdf', 1, '2019-11-22 16:59:37', '0000-00-00 00:00:00'),
(21, 'ESQC204', 'Kepemimpinan Berbasis Karakter 2', '4', '2', '1', 'Wajib', 'Kepemimpinan Berbasis Karakter 2.pdf', 1, '2019-11-22 17:03:54', '0000-00-00 00:00:00'),
(22, 'CSAI300', 'Kecerdasan Buatan', '4', '3', '0', 'Wajib', 'Kecerdasan Buatan.pdf', 1, '2019-11-22 17:03:54', '0000-00-00 00:00:00'),
(23, 'KKIN202', 'Technopreneurship', '4', '3', '0', 'Wajib', 'Technopreneurship.pdf', 1, '2019-11-22 17:03:54', '0000-00-00 00:00:00'),
(24, 'CSAP203', 'Pemrograman Lanjut', '4', '2', '1', 'Wajib', 'Pemrograman Lanjut.pdf', 1, '2019-11-22 17:03:54', '0000-00-00 00:00:00'),
(25, 'CSAP201', 'Pemrograman Web ', '4', '2', '1', 'Wajib', 'Pemrograman Web.pdf', 1, '2019-11-22 17:03:54', '0000-00-00 00:00:00'),
(26, 'CSSE200', 'Basis Data', '4', '3', '1', 'Wajib', 'Basis Data.pdf', 1, '2019-11-22 17:03:54', '0000-00-00 00:00:00'),
(27, 'ESQC305', 'Kepemimpinan Perubahan 1', '5', '3', '0', 'Wajib', 'Kepemimpinan Perubahan 1.pdf', 1, '2019-11-22 17:11:48', '0000-00-00 00:00:00'),
(28, 'ESQU103', 'Bahasa Indonesia', '5', '3', '0', 'Wajib', 'Bahasa Indonesia.pdf', 1, '2019-11-22 17:11:48', '0000-00-00 00:00:00'),
(29, 'CSSE301', 'Interaksi Manusia dengan Komputer', '5', '3', '0', 'Wajib', 'Interaksi Manusia dengan Komputer.pdf', 1, '2019-11-22 17:11:48', '0000-00-00 00:00:00'),
(30, 'KKES201', 'Analisis dan Perancangan Berorientasi Objek', '5', '2', '1', 'Wajib', 'Analisis dan Perancangan Berorientasi Objek.pdf', 1, '2019-11-22 17:11:48', '0000-00-00 00:00:00'),
(31, 'CSDS301', 'Jaringan Komputer', '5', '3', '0', 'Wajib', 'Jaringan Komputer.pdf', 1, '2019-11-22 17:11:48', '0000-00-00 00:00:00'),
(32, 'CSAP303', 'Pemrograman Mobile', '5', '1', '2', 'Wajib', 'Pemrograman Mobile.pdf', 1, '2019-11-22 17:11:48', '0000-00-00 00:00:00'),
(33, 'CSAI304', 'Data Mining', '5', '2', '1', 'Peminatan AI', 'Data Mining.pdf', 1, '2019-11-22 17:11:48', '0000-00-00 00:00:00'),
(34, 'CSSE304', 'Web Framework', '5', '2', '1', 'Peminatan SE', 'Web Framework.pdf', 1, '2019-11-22 17:11:48', '0000-00-00 00:00:00'),
(35, 'ESQC306', 'Kepemimpinan Perubahan 2', '6', '3', '0', 'Wajib', 'Kepemimpinan Perubahan 2.pdf', 1, '2019-11-22 17:17:38', '0000-00-00 00:00:00'),
(36, 'ESQU104', 'Bahasa Inggris', '6', '3', '0', 'Wajib', 'Bahasa Inggris.pdf', 1, '2019-11-22 17:17:38', '0000-00-00 00:00:00'),
(37, 'CSSE303', 'Rekayasa Perangkat Lunak', '6', '3', '0', 'Wajib', 'Rekayasa Perangkat Lunak.pdf', 1, '2019-11-22 17:17:38', '0000-00-00 00:00:00'),
(38, 'CSAI301', 'Data Science', '6', '3', '0', 'Pilihan', 'Data Science.pdf', 1, '2019-11-22 17:17:38', '0000-00-00 00:00:00'),
(39, 'CSGR300', 'Komputer Grafik', '6', '3', '0', 'Pilihan', 'Komputer Grafik.pdf', 1, '2019-11-22 17:17:38', '0000-00-00 00:00:00'),
(40, 'CSAI305', 'Pengolahan Sinyal dan Citra Digital', '6', '2', '1', 'Peminatan AI', 'Pengolahan Sinyal dan Citra Digital.pdf', 1, '2019-11-22 17:17:38', '0000-00-00 00:00:00'),
(41, 'CSSE401', 'Software Quality Assurance', '6', '2', '1', 'Peminatan SE', 'Software Quality Assurance.pdf', 1, '2019-11-22 17:17:38', '0000-00-00 00:00:00'),
(42, 'CSAI405', 'Machine Learning', '6', '2', '1', 'Peminatan AI', 'Machine Learning.pdf', 1, '2019-11-22 17:17:38', '0000-00-00 00:00:00'),
(43, 'CSSE305', 'Game Development', '6', '2', '1', 'Peminatan SE', 'Game Development.pdf', 1, '2019-11-22 17:17:38', '0000-00-00 00:00:00'),
(58, 'ESQC407', 'Kepemimpinan Lintas Budaya', '7', '2', '0', 'Wajib', 'Kepemimpinan Lintas Budaya.pdf', 1, '2019-11-22 17:24:25', '0000-00-00 00:00:00'),
(59, 'CSCE401', 'Kerja Praktik', '7', '3', '0', 'Wajib', 'Kerja Praktik.pdf', 1, '2019-11-22 17:24:25', '0000-00-00 00:00:00'),
(60, 'CSCE400', 'Metodologi Penelitian dan Penulisan Ilmiah', '7', '3', '0', 'Wajib', 'Metodologi Penelitian dan Penulisan Ilmiah.pdf', 1, '2019-11-22 17:24:25', '2019-11-22 17:24:25'),
(61, 'CSAP301', 'Analisis Algoritma', '7', '3', '0', 'Wajib', 'Analisis Algoritma.pdf', 1, '2019-11-22 17:24:25', '0000-00-00 00:00:00'),
(62, 'CSAI402', 'Expert System', '7', '2', '1', 'Peminatan AI', 'Expert System.pdf', 1, '2019-11-22 17:24:25', '0000-00-00 00:00:00'),
(63, 'CSSE402', 'Manajemen Proyek', '7', '2', '1', 'Peminatan SE', 'Manajemen Proyek.pdf', 1, '2019-11-22 17:24:25', '0000-00-00 00:00:00'),
(64, 'CSXX000', 'Mata Kuliah Pilihan', '7', '3', '0', 'Pilihan', 'Mata Kuliah Pilihan.pdf', 1, '2019-11-22 17:24:25', '0000-00-00 00:00:00'),
(65, 'ESQC408', 'Pemberdayaan Masyarakat', '8', '1', '2', 'Wajib', 'Pemberdayaan Masyarakat.pdf', 1, '2019-11-22 17:26:07', '0000-00-00 00:00:00'),
(66, 'CSCE402', 'Skripsi', '8', '6', '0', 'Wajib', 'Skripsi.pdf', 1, '2019-11-22 17:26:07', '0000-00-00 00:00:00'),
(67, 'PBRS404', 'Etika Profesi', '8', '2', '0', 'Wajib', 'Etika Profesi.pdf', 1, '2019-11-22 17:26:07', '0000-00-00 00:00:00'),
(73, 'CSAI403', 'Temu Kembali Informasi', 'Pilihan', '3', '0', 'Pilihan', 'Temu Kembali Informasi.pdf', 1, '2019-11-22 17:31:13', '0000-00-00 00:00:00'),
(74, 'CSAI404', 'Bioinformatika', 'Pilihan', '3', '0', 'Pilihan', 'Bioinformatika.pdf', 1, '2019-11-22 17:31:13', '0000-00-00 00:00:00'),
(75, 'CSAIXXX', 'Pengolahan Data Besar (Big Data)', 'Pilihan', '3', '0', 'Pilihan', 'Pengolahan Data Besar (Big Data).pdf', 1, '2019-11-22 17:31:13', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penelitian`
--

CREATE TABLE `penelitian` (
  `id` int(11) NOT NULL,
  `tema` text NOT NULL,
  `judul` text NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal` date NOT NULL,
  `tempat` text NOT NULL,
  `sumber_pembiayaan` text NOT NULL,
  `biaya` double NOT NULL,
  `evaluasi` text NOT NULL,
  `file` text NOT NULL,
  `image` text NOT NULL,
  `id_matakuliah` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penelitian`
--

INSERT INTO `penelitian` (`id`, `tema`, `judul`, `deskripsi`, `tanggal`, `tempat`, `sumber_pembiayaan`, `biaya`, `evaluasi`, `file`, `image`, `id_matakuliah`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 'Tumbuhan', 'Penelitian Kelapa Sawit', 'Penelitan tentang kelapa sawit dengan menggunakan Artificial Intellegent dalam proses penanaman dan panen kelapa sawit di daerah Pekan Baru', '2019-12-12', 'Jakarta', 'ESQ Business School', 10000000, 'Penelitian harus didasarkan oleh metodologi yang sesuai', '', '', 33, 2, '2019-11-22 18:00:12', '2019-12-13 09:27:23'),
(2, 'Web', 'Penelitian Perancangan Web dengan Laravel', 'Penelitian Perancangan Web menggunakan framework laravel dalam membangun sistem informasi penjualan didaerah Bekasi', '2019-10-15', 'Halal Mart Bekasi', 'ESQ Business School', 5000000, 'Tidak ada', 'perancangan-web-desy.pdf', '', 34, 3, '2019-11-22 18:00:12', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengabdian_masyarakat`
--

CREATE TABLE `pengabdian_masyarakat` (
  `id` int(11) NOT NULL,
  `tema` text NOT NULL,
  `judul` text NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal` date NOT NULL,
  `tempat` text NOT NULL,
  `sumber_pembiayaan` text NOT NULL,
  `biaya` double NOT NULL,
  `evaluasi` text NOT NULL,
  `file` text NOT NULL,
  `image` text NOT NULL,
  `id_matakuliah` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengabdian_masyarakat`
--

INSERT INTO `pengabdian_masyarakat` (`id`, `tema`, `judul`, `deskripsi`, `tanggal`, `tempat`, `sumber_pembiayaan`, `biaya`, `evaluasi`, `file`, `image`, `id_matakuliah`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 'Aplikasi Pendidikan', 'Sistem Pendidikan di Daerah Tangerang', 'Membantu sekolah SMPN Tangerang 107 untuk membuat sistem pendidikan internal', '2019-12-28', 'SMPN Tangerang 107', 'ESQ Business School', 2000000, 'Perlu belajar lagi untuk mengajari orang-orang yang awam', '', '', 25, 2, '2019-11-22 18:04:35', '2019-12-13 09:16:53'),
(2, 'Pembangunan Jembatan', 'Pembangunan Jembatan di Daerah Lampung', 'Membantu membangun jembatan yang menghubungkan dua desa di daerah Lampung', '2019-04-15', 'Bandar Lampung', 'Pemerintah Lampung', 25000000, 'Sumber daya manusia yang kurang mumpuni', 'Jembatan-Lampung-Desy.pdf', '', 65, 3, '2019-11-22 18:04:35', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prestasi_dosen`
--

CREATE TABLE `prestasi_dosen` (
  `id` int(11) NOT NULL,
  `bidang_keahlian` text NOT NULL,
  `tingkat` enum('Dalam Kampus','Antar Kampus','Kabupaten / Kota','Provinsi','Nasional','Internasional') NOT NULL,
  `tahun` year(4) NOT NULL,
  `file` text NOT NULL,
  `image` text NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `prestasi_dosen`
--

INSERT INTO `prestasi_dosen` (`id`, `bidang_keahlian`, `tingkat`, `tahun`, `file`, `image`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 'Artificial Intelegent', 'Internasional', 2019, 'prestasi-dosen-edo.pdf', '', 2, '2019-11-22 16:41:58', '0000-00-00 00:00:00'),
(2, 'Machine Learning', 'Internasional', 2019, 'prestasi-dosen-desy.pdf', '', 3, '2019-11-22 16:41:58', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prestasi_mahasiswa`
--

CREATE TABLE `prestasi_mahasiswa` (
  `id` int(11) NOT NULL,
  `nama_kegiatan` text NOT NULL,
  `prestasi` text NOT NULL,
  `tingkat` enum('Dalam Kampus','Antar Kampus','Kabupaten / Kota','Provinsi','Nasional','Internasional') NOT NULL,
  `tahun` year(4) NOT NULL,
  `keterangan` text NOT NULL,
  `file` text NOT NULL,
  `image` text NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `prestasi_mahasiswa`
--

INSERT INTO `prestasi_mahasiswa` (`id`, `nama_kegiatan`, `prestasi`, `tingkat`, `tahun`, `keterangan`, `file`, `image`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 'Lomba Essay', 'Juara Umum 1', 'Nasional', 2019, 'Juara Lomba Essay Tingkat Umum Nasional 2019', 'prestasi-mahasiswa-mita.pdf', '', 5, '2019-11-22 16:40:50', '0000-00-00 00:00:00'),
(2, 'Lomba Menggambar', 'Juara 1', 'Nasional', 2019, 'Juara Lomba Menggambar 3D Animation', 'prestasi-mahasiswa-rizky.pdf', '', 8, '2019-11-22 16:40:50', '0000-00-00 00:00:00'),
(3, 'Competitive Poster Design', 'Juara 1', 'Nasional', 2019, 'Juara 1 Competitive Design Poster se-Indonesia', 'prestasi-mahasiswa-ammar.pdf', '', 7, '2019-11-22 16:40:50', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('1','2','3') NOT NULL,
  `nama` varchar(100) NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `level`, `nama`, `image`, `created_at`, `updated_at`) VALUES
(1, 'ahlijati.nuraminah@esqbs.ac.id', 'esqbs165', '1', 'Ahlijati Nuraminah', '', '2019-11-22 16:33:36', '2019-11-29 19:02:33'),
(2, 'edo.surya@esqbs.ac.id', 'esqbs165', '2', 'Edo Surya', '', '2019-11-22 16:33:36', '2019-11-29 19:05:48'),
(3, 'desy.komalasari@esqbs.ac.id', 'esqbs165', '2', 'Desy Komalasari', '', '2019-11-22 16:33:36', '2019-11-29 19:02:33'),
(4, 'm.billah@students.esqbs.ac.id', 'esqbs165', '3', 'Mu\'tashim Billah', '', '2019-11-22 16:34:40', '2019-11-29 19:02:33'),
(5, 'm.nurul.y@students.esqbs.ac.id', 'esqbs165', '3', 'Mitha Nurul Y', '', '2019-11-22 16:34:40', '2019-11-29 19:05:48'),
(6, 'a.rasyid.y@students.esqbs.ac.id', 'esqbs165', '3', 'Ahmad Rasyid Y', '', '2019-11-22 16:34:40', '2019-11-29 19:05:48'),
(7, 'abdullah.a@students.esqbs.ac.id', 'esqbs165', '3', 'Abdullah Ammar', '', '2019-11-22 16:36:54', '2019-11-29 19:02:33'),
(8, 'm.rizky.p@students.esqbs.ac.id', 'esqbs165', '3', 'Muhammad Rizky P', '', '2019-11-22 16:36:54', '2019-11-29 19:05:48'),
(9, 'a.fadia.h@students.esqbs.ac.id', 'esqbs165', '3', 'Aqila Fadia H', '', '2019-11-22 16:36:54', '2019-11-29 19:02:33'),
(10, 'm.akbar.w@students.esqbs.ac.id', 'esqbs165', '3', 'Muhammad Akbar W', '', '2019-11-22 16:36:54', '2019-11-29 19:02:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_penelitian`
--

CREATE TABLE `user_penelitian` (
  `id` int(11) NOT NULL,
  `jabatan` text NOT NULL,
  `id_penelitian` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_penelitian`
--

INSERT INTO `user_penelitian` (`id`, `jabatan`, `id_penelitian`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 'Staff Web Programming', 2, 4, '2019-11-22 18:06:59', '0000-00-00 00:00:00'),
(2, 'Staff Web Designing', 2, 7, '2019-11-22 18:06:59', '0000-00-00 00:00:00'),
(3, 'Staff Web Consulting', 2, 5, '2019-11-22 18:06:59', '0000-00-00 00:00:00'),
(4, 'Staff Konsumsi', 1, 8, '2019-11-22 18:06:59', '2019-11-22 18:06:59'),
(5, 'Staff Akomodasi', 1, 6, '2019-11-22 18:06:59', '0000-00-00 00:00:00'),
(6, 'Staff Distribusi', 1, 10, '2019-11-22 18:06:59', '0000-00-00 00:00:00'),
(7, 'Staff Pelayanan', 1, 9, '2019-11-22 18:06:59', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_pengabdian_masyarakat`
--

CREATE TABLE `user_pengabdian_masyarakat` (
  `id` int(11) NOT NULL,
  `jabatan` text NOT NULL,
  `id_pengabdian_masyarakat` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_pengabdian_masyarakat`
--

INSERT INTO `user_pengabdian_masyarakat` (`id`, `jabatan`, `id_pengabdian_masyarakat`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 'Staff Web Programming', 1, 4, '2019-11-22 18:09:30', '0000-00-00 00:00:00'),
(2, 'Staff Web Designing', 1, 5, '2019-11-22 18:09:30', '0000-00-00 00:00:00'),
(3, 'Staff Web Analysis', 1, 6, '2019-11-22 18:09:30', '0000-00-00 00:00:00'),
(4, 'Staff Konsumsi', 2, 8, '2019-11-22 18:09:30', '0000-00-00 00:00:00'),
(5, 'Staff Akomodasi', 2, 9, '2019-11-22 18:09:30', '0000-00-00 00:00:00'),
(6, 'Staff Pelayanan', 2, 7, '2019-11-22 18:09:30', '0000-00-00 00:00:00'),
(7, 'Staff Penyaluran', 2, 10, '2019-11-22 18:09:30', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `hasil_kerjasama`
--
ALTER TABLE `hasil_kerjasama`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_matakuliah` (`kode_matakuliah`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `penelitian`
--
ALTER TABLE `penelitian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_matakuliah` (`id_matakuliah`);

--
-- Indeks untuk tabel `pengabdian_masyarakat`
--
ALTER TABLE `pengabdian_masyarakat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_matakuliah` (`id_matakuliah`);

--
-- Indeks untuk tabel `prestasi_dosen`
--
ALTER TABLE `prestasi_dosen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `prestasi_mahasiswa`
--
ALTER TABLE `prestasi_mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indeks untuk tabel `user_penelitian`
--
ALTER TABLE `user_penelitian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_penelitian` (`id_penelitian`);

--
-- Indeks untuk tabel `user_pengabdian_masyarakat`
--
ALTER TABLE `user_pengabdian_masyarakat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_pengabdian_masyarakat` (`id_pengabdian_masyarakat`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `hasil_kerjasama`
--
ALTER TABLE `hasil_kerjasama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `matakuliah`
--
ALTER TABLE `matakuliah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT untuk tabel `penelitian`
--
ALTER TABLE `penelitian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pengabdian_masyarakat`
--
ALTER TABLE `pengabdian_masyarakat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `prestasi_dosen`
--
ALTER TABLE `prestasi_dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `prestasi_mahasiswa`
--
ALTER TABLE `prestasi_mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `user_penelitian`
--
ALTER TABLE `user_penelitian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user_pengabdian_masyarakat`
--
ALTER TABLE `user_pengabdian_masyarakat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `hasil_kerjasama`
--
ALTER TABLE `hasil_kerjasama`
  ADD CONSTRAINT `hasil_kerjasama_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Ketidakleluasaan untuk tabel `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD CONSTRAINT `matakuliah_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Ketidakleluasaan untuk tabel `penelitian`
--
ALTER TABLE `penelitian`
  ADD CONSTRAINT `penelitian_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `penelitian_ibfk_2` FOREIGN KEY (`id_matakuliah`) REFERENCES `matakuliah` (`id`);

--
-- Ketidakleluasaan untuk tabel `pengabdian_masyarakat`
--
ALTER TABLE `pengabdian_masyarakat`
  ADD CONSTRAINT `pengabdian_masyarakat_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `pengabdian_masyarakat_ibfk_2` FOREIGN KEY (`id_matakuliah`) REFERENCES `matakuliah` (`id`);

--
-- Ketidakleluasaan untuk tabel `prestasi_dosen`
--
ALTER TABLE `prestasi_dosen`
  ADD CONSTRAINT `prestasi_dosen_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Ketidakleluasaan untuk tabel `prestasi_mahasiswa`
--
ALTER TABLE `prestasi_mahasiswa`
  ADD CONSTRAINT `prestasi_mahasiswa_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Ketidakleluasaan untuk tabel `user_penelitian`
--
ALTER TABLE `user_penelitian`
  ADD CONSTRAINT `user_penelitian_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `user_penelitian_ibfk_2` FOREIGN KEY (`id_penelitian`) REFERENCES `penelitian` (`id`);

--
-- Ketidakleluasaan untuk tabel `user_pengabdian_masyarakat`
--
ALTER TABLE `user_pengabdian_masyarakat`
  ADD CONSTRAINT `user_pengabdian_masyarakat_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `user_pengabdian_masyarakat_ibfk_2` FOREIGN KEY (`id_pengabdian_masyarakat`) REFERENCES `pengabdian_masyarakat` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
