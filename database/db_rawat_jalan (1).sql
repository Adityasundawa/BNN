-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Okt 2020 pada 01.06
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rawat_jalan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_asesmen`
--

CREATE TABLE `tbl_asesmen` (
  `id_asesmen` int(10) NOT NULL,
  `pekerjaan_dukungan` varchar(10) NOT NULL,
  `resume_masalah` mediumtext NOT NULL,
  `medis` varchar(10) NOT NULL,
  `napza` varchar(10) NOT NULL,
  `legal` varchar(10) NOT NULL,
  `keluarga_sosial` varchar(10) NOT NULL,
  `psikiatris` varchar(10) NOT NULL,
  `kriteria_diagnosis_napza` varchar(100) NOT NULL,
  `diagnosis_lainnya` varchar(100) NOT NULL,
  `rencana_terapi` varchar(200) NOT NULL,
  `periksa_urine` varchar(20) NOT NULL,
  `id_disposisi` int(20) NOT NULL,
  `id_surat` int(10) NOT NULL,
  `id_user` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_asesmen`
--

INSERT INTO `tbl_asesmen` (`id_asesmen`, `pekerjaan_dukungan`, `resume_masalah`, `medis`, `napza`, `legal`, `keluarga_sosial`, `psikiatris`, `kriteria_diagnosis_napza`, `diagnosis_lainnya`, `rencana_terapi`, `periksa_urine`, `id_disposisi`, `id_surat`, `id_user`) VALUES
(53, '1', '1. Asesmen lanjutan / mendalam', '2', '2', '2', '2', '2', 'sip', 'ok', 'yes', 'Negatif', 19, 0, 1),
(54, '8', '3. Program Detoksifikasi', '8', '9', '8', '7', '8', 'ndnd', 'jdjd', 'ndnd', 'Negatif', 21, 0, 1),
(55, '8', '2. Evaluasi Psikologis', '9', '6', '5', '6', '6', 'dd', 'dd', 'ddd', 'Positif', 16, 0, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_disposisi`
--

CREATE TABLE `tbl_disposisi` (
  `id_disposisi` int(10) NOT NULL,
  `tujuan` varchar(250) NOT NULL,
  `isi_disposisi` mediumtext NOT NULL,
  `sifat` varchar(100) NOT NULL,
  `batas_waktu` date NOT NULL,
  `catatan` varchar(250) NOT NULL,
  `id_surat` int(10) NOT NULL,
  `id_user` tinyint(2) NOT NULL,
  `id_konseling` varchar(225) NOT NULL,
  `status_konseling` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_disposisi`
--

INSERT INTO `tbl_disposisi` (`id_disposisi`, `tujuan`, `isi_disposisi`, `sifat`, `batas_waktu`, `catatan`, `id_surat`, `id_user`, `id_konseling`, `status_konseling`) VALUES
(16, '', 'lll', '08:00 Wib', '2020-09-28', '', 32, 1, '', 'PROSS'),
(20, '', 'fff', '09:00 Wib', '2020-10-04', '', 0, 1, '', 'PROSES'),
(21, '', 'et', '08:00 Wib', '2020-10-04', '', 31, 1, '', 'PROSS'),
(22, '', 'fff', '08:00 Wib', '2020-10-04', '', 0, 1, '', 'SELESAI'),
(26, '', 'asd', '09:00 Wib', '2020-10-06', '', 0, 1, '3', 'SELESAI'),
(28, '', 'dsa', '08:30 Wib', '2020-10-06', '', 34, 1, '5', 'SELESAI'),
(29, '', 'Hai', '08:00 Wib', '2020-10-06', '', 34, 1, '8', 'PROSES');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_instansi`
--

CREATE TABLE `tbl_instansi` (
  `id_instansi` tinyint(1) NOT NULL,
  `institusi` varchar(150) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `status` varchar(150) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `kepsek` varchar(50) NOT NULL,
  `nip` varchar(25) NOT NULL,
  `website` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `logo` varchar(250) NOT NULL,
  `id_user` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_instansi`
--

INSERT INTO `tbl_instansi` (`id_instansi`, `institusi`, `nama`, `status`, `alamat`, `kepsek`, `nip`, `website`, `email`, `logo`, `id_user`) VALUES
(1, 'Prov KEPRI', 'Sistem Informasi Rehabilitasi Rawat Jalan', 'Rehabilitasi', 'Jalan Hang Jebat KM.3, Batu Besar, Nongsa, Batu Besar, Kecamatan Nongsa, Kota Batam, Kepulauan Riau 29465', 'melly puspita', '-', 'https://batamkepri.com', 'imron@gmail.com', 'Logo_BNN_kepri.png', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jdl_kon_kelompok`
--

CREATE TABLE `tbl_jdl_kon_kelompok` (
  `id_jad_kon_kelompok` int(10) NOT NULL,
  `isi_jad_kelompok` mediumtext NOT NULL,
  `jam_acara_kelompok` varchar(100) NOT NULL,
  `batas_waktu` date NOT NULL,
  `id_surat` int(10) NOT NULL,
  `id_user` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_jdl_kon_kelompok`
--

INSERT INTO `tbl_jdl_kon_kelompok` (`id_jad_kon_kelompok`, `isi_jad_kelompok`, `jam_acara_kelompok`, `batas_waktu`, `id_surat`, `id_user`) VALUES
(7, 'kelompok', '08:00 Wib', '2020-10-01', 0, 1),
(9, 'cc', '08:00 Wib', '2020-10-01', 0, 1),
(10, 'kdkdkd\r\n', '10:00 Wib', '2020-10-01', 30, 1),
(11, 'DFDFD', '08:00 Wib', '2020-10-04', 33, 1),
(12, 'das', '08:00 Wib', '2020-10-16', 34, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jdl_kon_keluarga`
--

CREATE TABLE `tbl_jdl_kon_keluarga` (
  `id_jad_kon_keluarga` int(10) NOT NULL,
  `isi_jad_keluarga` mediumtext NOT NULL,
  `jam_acara` varchar(100) NOT NULL,
  `batas_waktu` date NOT NULL,
  `id_surat` int(10) NOT NULL,
  `id_user` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_jdl_kon_keluarga`
--

INSERT INTO `tbl_jdl_kon_keluarga` (`id_jad_kon_keluarga`, `isi_jad_keluarga`, `jam_acara`, `batas_waktu`, `id_surat`, `id_user`) VALUES
(4, 'DDDDDD', '08:00 Wib', '2020-09-30', 0, 1),
(5, 'DF', '10:30 Wib', '2020-09-30', 0, 1),
(11, 'kkkk', '08:00 Wib', '2020-10-01', 30, 1),
(12, 'GGGG', '08:00 Wib', '2020-10-04', 33, 1),
(13, 'asd', '08:00 Wib', '2020-10-17', 34, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jenis_zat`
--

CREATE TABLE `tbl_jenis_zat` (
  `id_zat` int(10) NOT NULL,
  `nama_zat` varchar(50) NOT NULL,
  `tembakau` varchar(50) NOT NULL,
  `minuman_berakohol` varchar(50) NOT NULL,
  `kanabis` varchar(50) NOT NULL,
  `kokain` varchar(50) NOT NULL,
  `stimulant` varchar(50) NOT NULL,
  `inhalansia` varchar(50) NOT NULL,
  `sedaktiva_obti` varchar(50) NOT NULL,
  `halusinogens` varchar(50) NOT NULL,
  `opioida` varchar(50) NOT NULL,
  `zat_lain` varchar(50) NOT NULL,
  `id_surat` int(10) NOT NULL,
  `id_user` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_jenis_zat`
--

INSERT INTO `tbl_jenis_zat` (`id_zat`, `nama_zat`, `tembakau`, `minuman_berakohol`, `kanabis`, `kokain`, `stimulant`, `inhalansia`, `sedaktiva_obti`, `halusinogens`, `opioida`, `zat_lain`, `id_surat`, `id_user`) VALUES
(22, 'jj', '', 'Sedang', '', '', '', 'Berat', '', '', '', '', 33, 1),
(24, '.', '', 'Sedang', 'Sedang', '', '', '', '', '', '', '', 32, 1),
(25, 'dsa', '', '', '', '', '', '', '', '', '', 'Ringan', 34, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_katego` tinyint(1) NOT NULL,
  `nama_katego` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_katego`, `nama_katego`) VALUES
(0, ''),
(1, 'HIV/AIDS'),
(2, 'TBC'),
(3, 'Sistem Saluran Pembuluh Darah'),
(4, 'Hepatitis B  '),
(5, 'Penyakit Kulit'),
(6, 'Hepatitis C'),
(7, 'Sistem Pernapasan'),
(8, 'Penyakit Lainnya'),
(9, 'Sistem Saluran Kandung Kemih'),
(10, 'Sistem Pencernaan'),
(20, 'Alkohol'),
(21, 'Barbiturat'),
(22, 'Cannabis'),
(23, 'Lebih dari 3 zat per hari (termasuk alcohol)'),
(24, 'Heroin'),
(25, 'Kokain'),
(26, 'Inhalan'),
(27, 'Metadin/Buprenofin'),
(28, 'Sedatif/Hinotik'),
(29, 'Halusinogen'),
(30, 'Opiat lain/Analgesik'),
(31, 'Amfetamin'),
(41, '0'),
(42, '1'),
(43, '2'),
(44, '3'),
(45, '4'),
(46, '5'),
(47, '6'),
(48, '7'),
(49, '8'),
(50, '9'),
(60, '1. Asesmen lanjutan / mendalam'),
(61, '2. Evaluasi Psikologis'),
(62, '3. Program Detoksifikasi'),
(63, '4. Wawancara Motivasional'),
(64, '5. Intervensi Singkat'),
(65, '6. Terapi Rumatan'),
(66, '7. Rehabilitasi rawat inap'),
(67, '8. Konseling'),
(68, '9. Lain-lain'),
(70, 'Ringan'),
(71, 'Sedang'),
(72, 'Berat'),
(73, 'Negatif'),
(74, 'Positif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_klasifikasi`
--

CREATE TABLE `tbl_klasifikasi` (
  `id_klasifikasi` int(5) UNSIGNED NOT NULL,
  `kode` varchar(30) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `uraian` mediumtext NOT NULL,
  `kota` int(11) UNSIGNED NOT NULL,
  `id_user` tinyint(2) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_klasifikasi`
--

INSERT INTO `tbl_klasifikasi` (`id_klasifikasi`, `kode`, `nama`, `uraian`, `kota`, `id_user`) VALUES
(3, '004', 'Klink awalbros', 'Jalan Nongsa batam', 6, 1),
(4, '003', 'Klinik BNN Batam', 'Jl imperium batam', 6, 1),
(5, '002', 'Klink Kimia Farma batu aji', 'jln batu aji simpang lampu merah', 2, 1),
(7, '001', 'Klik Pratama anugrah allah', 'Jl Bintan center', 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_konseling`
--

CREATE TABLE `tbl_konseling` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `jenis_kelamin` varchar(200) NOT NULL,
  `pndkn_akhir` varchar(200) NOT NULL,
  `tgl_lahir` varchar(200) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `agama` varchar(120) NOT NULL,
  `usia` varchar(11) NOT NULL,
  `ses_tgl` varchar(225) NOT NULL DEFAULT current_timestamp(),
  `konseling` text NOT NULL,
  `rencana_terapi` text NOT NULL,
  `tinjau_kesejahteraan` text NOT NULL,
  `gambaran_fisik` varchar(200) NOT NULL,
  `gambaran_perilaku` varchar(200) NOT NULL,
  `gambaran_kognitif` varchar(200) NOT NULL,
  `gambaran_emosi` varchar(200) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_surat` int(11) DEFAULT NULL,
  `id_disposisi` int(11) DEFAULT NULL,
  `diagnosa` text DEFAULT NULL,
  `status` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_konseling`
--

INSERT INTO `tbl_konseling` (`id`, `nama`, `jenis_kelamin`, `pndkn_akhir`, `tgl_lahir`, `alamat`, `no_telp`, `agama`, `usia`, `ses_tgl`, `konseling`, `rencana_terapi`, `tinjau_kesejahteraan`, `gambaran_fisik`, `gambaran_perilaku`, `gambaran_kognitif`, `gambaran_emosi`, `id_user`, `id_surat`, `id_disposisi`, `diagnosa`, `status`) VALUES
(1, 'nias\r\n', 'laki-laki', 'asdada', '1231231', '123', '08989942', 'sad', '234', '2020-10-06 03:03:14', 'das', 'asd', 'sad', 'yg', 'ygth', 'asd', 'ads', NULL, 33, 19, 'asd', 'belum'),
(2, 'tester', '', '', '', '', '', '', '0', '2020-10-06 03:19:25', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, ''),
(3, 'tester', '', '', '', '', '', '', '', '2020-10-06 03:57:55', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, ''),
(4, 'tester', '', '', '', '', '', '', '', '2020-10-06 04:01:56', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, ''),
(5, 'Adityaasd', 'laki-laki', 'asd', '2020-10-06', 'asd', '08989942', ',asd', '23', '', 'das', 'dsa', '10', 'ads', 'ads', 'ads', 'asd', NULL, NULL, NULL, 'sad', ''),
(6, 'Adityadsa', 'laki-lakisad', 'asdadadas', '1231231sda', 'hs', '08989942', 'sfd', '324', '', 'sfd', 'sfd', 'fsd', 'sfd', 'dfs', 'fds', 'fsd', NULL, 0, 0, 'sdf', 'belum'),
(7, 'Aditya', 'laki-laki', 'asdada', '1231231', 'hs', '08989942', 'sfd', '324', '', 'sfd', 'sfd', 'fsd', 'sfd', 'dfs', 'fds', 'fsd', NULL, 0, 0, 'sdf', 'belum'),
(8, '-', '', '', '', '', '', '', '', '2020-10-06 05:48:05', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kota`
--

CREATE TABLE `tbl_kota` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama_kota` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kota`
--

INSERT INTO `tbl_kota` (`id`, `nama_kota`) VALUES
(1, 'Kabupaten Bintan'),
(2, 'Kabupaten Karimun'),
(3, 'Kabupaten Kepulauan Anambas'),
(4, 'Kabupaten Lingga'),
(5, 'Kabupaten Natuna'),
(6, 'Kota Batam'),
(7, 'Kota Tanjungpinang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_scrining`
--

CREATE TABLE `tbl_scrining` (
  `id_scrining` int(10) NOT NULL,
  `level_candu` varchar(250) NOT NULL,
  `isi_scrining` mediumtext NOT NULL,
  `jenis_zat` text NOT NULL,
  `pendidikan` text NOT NULL,
  `penyakit` text NOT NULL,
  `usia_pakai` varchar(12) NOT NULL,
  `jenis_zat_akhir` text NOT NULL,
  `id_surat` int(10) NOT NULL,
  `id_user` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_scrining`
--

INSERT INTO `tbl_scrining` (`id_scrining`, `level_candu`, `isi_scrining`, `jenis_zat`, `pendidikan`, `penyakit`, `usia_pakai`, `jenis_zat_akhir`, `id_surat`, `id_user`) VALUES
(50, 'Ringan', 'kakak', 'Alkohol,Lebih dari 3 zat per hari (termasuk alcohol)', 'imron', 'Sistem Saluran Pembuluh Darah', '23', 'TBC', 31, 1),
(58, 'Ringan', 'KJADNJADKNDKAD', 'Inhalan', 'SMA', 'Penyakit Kulit', '28', 'Alkohol', 0, 1),
(60, 'Sedang', 'uji coba', 'Barbiturat', 'SMA', 'Hepatitis B  ', '21', 'Alkohol', 0, 1),
(61, 'Ringan', 'dddd', 'Barbiturat', 'kdkd', 'Sistem Saluran Pembuluh Darah', '21', 'Alkohol', 0, 1),
(62, 'Sedang', 'tes', 'Alkohol', 'SMA', 'Sistem Pernapasan', '21', 'Heroin', 0, 1),
(64, 'Sedang', 'ff', 'Cannabis', 'ff', 'Hepatitis C', 'dff', 'Cannabis', 33, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_sett`
--

CREATE TABLE `tbl_sett` (
  `id_sett` tinyint(1) NOT NULL,
  `surat_masuk` tinyint(2) NOT NULL,
  `surat_keluar` tinyint(2) NOT NULL,
  `referensi` tinyint(2) NOT NULL,
  `id_user` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_sett`
--

INSERT INTO `tbl_sett` (`id_sett`, `surat_masuk`, `surat_keluar`, `referensi`, `id_user`) VALUES
(1, 10, 10, 10, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_surat_masuk`
--

CREATE TABLE `tbl_surat_masuk` (
  `id_surat` int(10) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `jenis_kelamin` text NOT NULL,
  `agama` varchar(50) NOT NULL,
  `status_perkawinan` varchar(20) NOT NULL,
  `pekerjaan` text NOT NULL,
  `kewarganegaraan` varchar(20) NOT NULL,
  `no_agenda` int(10) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `asal_surat` varchar(250) NOT NULL,
  `isi` mediumtext NOT NULL,
  `kode` varchar(30) NOT NULL,
  `indeks` varchar(30) NOT NULL,
  `tgl_surat` date NOT NULL,
  `tgl_diterima` date NOT NULL,
  `file` varchar(250) NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `id_user` tinyint(2) NOT NULL,
  `klinik` int(11) NOT NULL,
  `status` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_surat_masuk`
--

INSERT INTO `tbl_surat_masuk` (`id_surat`, `nama`, `tempat_lahir`, `jenis_kelamin`, `agama`, `status_perkawinan`, `pekerjaan`, `kewarganegaraan`, `no_agenda`, `no_surat`, `asal_surat`, `isi`, `kode`, `indeks`, `tgl_surat`, `tgl_diterima`, `file`, `keterangan`, `id_user`, `klinik`, `status`) VALUES
(28, 'Fajar Antono', 'Indramayu', 'Laki-laki', 'Islam', 'Menikah', 'IT Development', 'WNI', 2, '1', 'Jl', 'asasas', '082112066865', '999', '2020-09-11', '2020-09-11', '', 'asasasas', 1, 0, ''),
(29, 'tesrt', 'asas', 'Perempuan', 'Islam', 'Menikah', 'as', 'asas', 3, '11', 'Perempuan', 'sdsd', '11', '1', '2020-09-11', '2020-09-11', '', 'Suku Batak', 4, 7, ''),
(30, 'ahmad bayu', 'batam', 'Laki-laki', 'Islam', 'Menikah', 'pengusaha', 'indo', 4, '0823009021', 'batam', 'uji coba', '082388009021', '0823009021', '2020-08-26', '2020-09-12', '', 'uji coba', 11, 7, 'TERMINASI'),
(31, 'rauf', 'rauf', 'Perempuan', 'Kristen Katolik', 'Menikah', 'rauf', 'rauf', 5, '9399393', 'rauf', 'rauf', '393939', '93939', '2020-09-14', '2020-09-14', '', 'Suku Sunda', 1, 4, 'SIRENA'),
(32, 'IMRON SIMANJUNTAK 3', 'simangalam', 'Laki-laki', 'Islam', 'Menikah', 'kpu', '082388009021', 6, '0823880090210', 'Jalan Kebahagian semu', 'polres', '082388009021', '082388009021', '1994-12-27', '2020-09-17', '5081-android_logo_PNG35.png', 'Suku Jawa', 1, 3, 'TERMINASI'),
(33, 'niaads', 'nia', 'nia', 'Islam', 'Menikah', 'nia', 'nia', 7, '123456', 'nia', 'nia', '123456', '123456', '2020-09-17', '2020-09-17', '4302-disposisiksn.jpg', 'Suku Jawa', 1, 3, 'SIRENA'),
(34, 'Aditya', 'Malang', 'Laki-laki', 'Kristen Katolik', 'Lajang', 'sad', 'hygtj', 82342424, '324444444', 'Jl Malang', '4234', '354545454545454', '2344444444', '2020-10-06', '2020-10-06', '7368-satanic-1.jpg', 'Suku Jawa', 1, 3, 'on Process'),
(35, 'Aditya', 'Malang', 'Perempuan', 'Islam', 'Menikah', 'W', '234', 82342425, '32', 'das', 'wer', '2343', '342', '2020-10-20', '2020-10-06', '822-satanic-1.jpg', 'Suku Sunda', 1, 3, 'on Process');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` tinyint(2) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(35) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nip` varchar(25) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `nama`, `nip`, `admin`) VALUES
(1, 'adminbnnkepri', 'c03d10791bdacfee3589587533706e41', 'Super Admin Siraja BNNP KEPRI', '-', 1),
(2, 'MellyPuspitasari', '21232f297a57a5a743894a0e4a801fc3', 'Melly Puspitasari', '-', 2),
(7, 'klinik', '18ab944f1946f6cb9c322bb119d9a500', 'Klinik', '-', 3),
(8, 'imron3', '1b6ca11d319d9e8b7521a4671f9d47a4', 'imron pasien', '-', 5),
(9, '11', '45eb1c1c5b0a57550e005301208837ac', 'tesrt', '-', 5),
(10, '11', '45eb1c1c5b0a57550e005301208837ac', 'tesrt', '-', 5),
(11, 'imron2', '0528040afc86af8a3256af5341a789f5', 'imron klinik', '-', 3),
(12, '0823009021', '19e72a1d69001fe375dbd187ac9f2933', 'ahmad bayu', '-', 5),
(13, '9399393', '3465831a96b4a595114704b5e3ff0fb0', 'rauf', '-', 5),
(14, '0823880090210', '8bcd1f3ae90bb4a27b0ad2eb3619fd9e', 'IMRON SIMANJUNTAK 3', '-', 5),
(15, 'rauf', '7e693ef06b03ff67ebd9d7d746f9082b', 'rauf', '-', 15),
(16, '123456', '79db875f1503511e1d9ab3dc48875d45', 'nia', '-', 5),
(17, 'imrondokter', '97d52ce731525e8be5c7b248271c0ee0', 'Imron Dokter', 'JL. Menuju keberkahan', 4),
(18, 'mellypuspitasari2', '24a3d0afe863ddf257bee0a3efb2a10c', 'melly puspitasari', 'sukajadi perum casablanca', 2),
(19, '324444444', '5142c7546d3100ca3a68cad6895f13f1', 'Aditya', '-', 5),
(20, '32', '9a4a6fefef8d0a5503b3bdaa6b6c4cae', 'Aditya', '-', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_wali_klien`
--

CREATE TABLE `tbl_wali_klien` (
  `id_wali` int(10) NOT NULL,
  `nama_wali` varchar(40) NOT NULL,
  `alamat_wali` mediumtext NOT NULL,
  `hubungan` varchar(100) NOT NULL,
  `tempat_lahir_wali` varchar(35) NOT NULL,
  `batas_waktu` date NOT NULL,
  `no_telp` varchar(25) NOT NULL,
  `nik` varchar(25) NOT NULL,
  `pekerjaan_wali` varchar(35) NOT NULL,
  `id_surat` int(10) NOT NULL,
  `id_user` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_wali_klien`
--

INSERT INTO `tbl_wali_klien` (`id_wali`, `nama_wali`, `alamat_wali`, `hubungan`, `tempat_lahir_wali`, `batas_waktu`, `no_telp`, `nik`, `pekerjaan_wali`, `id_surat`, `id_user`) VALUES
(16, 'DINO', 'JL SAMA', 'Abang Kandung', '', '2020-09-08', '08230000000000', '', '', 22, 1),
(17, 'duka', '9393', 'Abang Kandung', 'simangala', '2020-10-01', '08222', 'batam', 'dosen', 32, 1),
(18, 'coba', '314', 'Adik Kandung', 'sima', '2020-10-02', '323', 'jl maju', 'ffff', 33, 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_asesmen`
--
ALTER TABLE `tbl_asesmen`
  ADD PRIMARY KEY (`id_asesmen`);

--
-- Indeks untuk tabel `tbl_disposisi`
--
ALTER TABLE `tbl_disposisi`
  ADD PRIMARY KEY (`id_disposisi`);

--
-- Indeks untuk tabel `tbl_instansi`
--
ALTER TABLE `tbl_instansi`
  ADD PRIMARY KEY (`id_instansi`);

--
-- Indeks untuk tabel `tbl_jdl_kon_kelompok`
--
ALTER TABLE `tbl_jdl_kon_kelompok`
  ADD PRIMARY KEY (`id_jad_kon_kelompok`);

--
-- Indeks untuk tabel `tbl_jdl_kon_keluarga`
--
ALTER TABLE `tbl_jdl_kon_keluarga`
  ADD PRIMARY KEY (`id_jad_kon_keluarga`);

--
-- Indeks untuk tabel `tbl_jenis_zat`
--
ALTER TABLE `tbl_jenis_zat`
  ADD PRIMARY KEY (`id_zat`);

--
-- Indeks untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_katego`);

--
-- Indeks untuk tabel `tbl_klasifikasi`
--
ALTER TABLE `tbl_klasifikasi`
  ADD PRIMARY KEY (`id_klasifikasi`);

--
-- Indeks untuk tabel `tbl_konseling`
--
ALTER TABLE `tbl_konseling`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_kota`
--
ALTER TABLE `tbl_kota`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_scrining`
--
ALTER TABLE `tbl_scrining`
  ADD PRIMARY KEY (`id_scrining`);

--
-- Indeks untuk tabel `tbl_sett`
--
ALTER TABLE `tbl_sett`
  ADD PRIMARY KEY (`id_sett`);

--
-- Indeks untuk tabel `tbl_surat_masuk`
--
ALTER TABLE `tbl_surat_masuk`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `tbl_wali_klien`
--
ALTER TABLE `tbl_wali_klien`
  ADD PRIMARY KEY (`id_wali`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_asesmen`
--
ALTER TABLE `tbl_asesmen`
  MODIFY `id_asesmen` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT untuk tabel `tbl_disposisi`
--
ALTER TABLE `tbl_disposisi`
  MODIFY `id_disposisi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `tbl_jdl_kon_kelompok`
--
ALTER TABLE `tbl_jdl_kon_kelompok`
  MODIFY `id_jad_kon_kelompok` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tbl_jdl_kon_keluarga`
--
ALTER TABLE `tbl_jdl_kon_keluarga`
  MODIFY `id_jad_kon_keluarga` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tbl_jenis_zat`
--
ALTER TABLE `tbl_jenis_zat`
  MODIFY `id_zat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `tbl_klasifikasi`
--
ALTER TABLE `tbl_klasifikasi`
  MODIFY `id_klasifikasi` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tbl_konseling`
--
ALTER TABLE `tbl_konseling`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbl_kota`
--
ALTER TABLE `tbl_kota`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tbl_scrining`
--
ALTER TABLE `tbl_scrining`
  MODIFY `id_scrining` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT untuk tabel `tbl_surat_masuk`
--
ALTER TABLE `tbl_surat_masuk`
  MODIFY `id_surat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `tbl_wali_klien`
--
ALTER TABLE `tbl_wali_klien`
  MODIFY `id_wali` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
