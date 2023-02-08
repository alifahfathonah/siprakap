-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Feb 2023 pada 13.53
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `profile` text NOT NULL,
  `s_kelurahan` varchar(225) NOT NULL,
  `s_lpm` varchar(225) NOT NULL,
  `s_linmas` varchar(225) NOT NULL,
  `s_pemuda` varchar(225) NOT NULL,
  `k_rtrw` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gallery`
--

INSERT INTO `gallery` (`id`, `profile`, `s_kelurahan`, `s_lpm`, `s_linmas`, `s_pemuda`, `k_rtrw`) VALUES
(1, 'Kerja Praktek merupakan salah satu mata kuliah dan program dari PENS PSDKU Lamongan yang harus diikuti oleh setiap mahasiswa sebagai syarat untuk kelulusannya. Kerja Praktek (KP) merupakan suatu bentuk implementasi perkuliahan yang dilakukan secara langsung ke suatu Instansi atau suatu Perusahaan.\r\n<br><br>\r\n       Bagaimana proses kerja praktek? Mahasiswa yang telah mengambil matakuliah kerja praktek selanjutnya mencari tempat, instansi atau perusahaan untuk menyelesaikan matakuliah ini. Mahasiswa membuat surat permohonan kerja praktek ke kampus, kampus mengeluarkan surat keterangan sesuai dengan surat\r\npermohonan. Selanjutnya instansi atau perusahaan mengeluarkan surat balasan bahwa mahasiswa yang dimaksud melakukan kerja praktek pada instansi atau perusahaan tersebut.', '3.png', '4.png', '5.png', 'Pedoman_Kerja_Praktek.png', 'bagan12.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penduduk`
--

CREATE TABLE `penduduk` (
  `nik` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `tmpt_lhr` varchar(50) NOT NULL,
  `tgl_lhr` date NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `rt` int(11) NOT NULL,
  `rw` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penduduk`
--

INSERT INTO `penduduk` (`nik`, `nama`, `no_hp`, `tmpt_lhr`, `tgl_lhr`, `pekerjaan`, `alamat`, `rt`, `rw`) VALUES
('116511', 'Rifki Ilmi', '0882443818', '', '0000-00-00', '', '', 0, 0),
('1234', 'Tita', '085843510263', 'Lamonga', '2001-08-12', 'Mahasiswa', 'Lamongan', 5, 1),
('1262332', 'Ikus', '08646757', '', '0000-00-00', '', '', 0, 0),
('1547', 'Inggih Permono', '0987655456', 'Ujung Kulon', '1987-10-10', 'IUVDGVH', 'Jl. Inttah', 6, 6),
('192618', 'Hengki Wibana', '0972655112', 'Durian Jatuh', '1998-10-10', 'Copet', 'Jl. enten', 1, 12),
('3120521001', 'Ayuu', '085638245765', '', '0000-00-00', '', '', 0, 0),
('3120521005', 'Dwi Wahyuni', 'PT Digital Telematika', '', '0000-00-00', '', '', 0, 0),
('3120521006', 'Cicilia Ayuningdias Saputri', 'Badan Pusat Statistika Lamongan', '', '0000-00-00', '', '', 0, 0),
('3120521009', 'Amalia Rizqi Putri', 'PT Digital Telematika', '', '0000-00-00', '', '', 0, 0),
('3120521010', 'Yovie Andrian', 'PT Otak Kanan', '', '0000-00-00', '', '', 0, 0),
('3120521017', 'Anggi Fransiska Putri Hartanti', 'PT Otak Kanan', '', '0000-00-00', '', '', 0, 0),
('3120521019', 'Ramadhanita Putri', 'Dinas Komunikasi dan Informatika Lamongan', '', '0000-00-00', '', '', 0, 0),
('3120521023', 'Nizam', 'PT Bank Rakyat Indonesia', '', '0000-00-00', '', '', 0, 0),
('5120521005', 'Rosyida Sasdza Afifah', 'PT Indihome', '', '0000-00-00', '', '', 0, 0),
('5120521013', 'Aninda Rahmawati', 'PT Indihome', '', '0000-00-00', '', '', 0, 0),
('5120521015', 'Nur Alifia', 'PT Sisfomedia Indonesia', '', '0000-00-00', '', '', 0, 0),
('5120521020', 'Yusril Untung Kamali', 'Radio Suara Mojokerto', '', '0000-00-00', '', '', 0, 0),
('5678', 'Alifia', '085842654123', '', '0000-00-00', '', '', 0, 0),
('6789', 'Putri', '08584510263', '', '0000-00-00', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuan_surat`
--

CREATE TABLE `pengajuan_surat` (
  `id` varchar(100) NOT NULL,
  `NIK` varchar(200) NOT NULL,
  `jenis_surat` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `file` varchar(225) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengajuan_surat`
--

INSERT INTO `pengajuan_surat` (`id`, `NIK`, `jenis_surat`, `tanggal`, `file`, `status`) VALUES
('IT-3387580023', '3120521019', 'IT', '2023-01-03', 'IT63b3ca3041ab2_kp.pdf', '3'),
('IT-3555015023', '3120521010', 'IT', '2023-01-20', 'IT63c9faceaa1fa KP.doc', '1'),
('IT-4e28116023', '3120521009', 'IT', '2023-01-20', 'IT63ca008d45080(1).doc', '1'),
('IT-5c16580023', '3120521017', 'IT', '2023-01-03', 'IT63b3cf4eece18_kp.pdf', '1'),
('IT-6c34017023', '3120521005', 'IT', '2023-02-01', 'IT63da463e8a41aN_1.pdf', '1'),
('MMB-3168311023', '5120521013', 'MMB', '2023-01-08', 'MMB63ba29af056e8PPA.pdf', '4'),
('MMB-5b67812023', '5120521020', 'MMB', '2023-01-08', 'MMB63ba3b3e90afdPPA.pdf', '5'),
('MMB-5Mb3813023', '5120521015', 'MMB', '2023-01-09', 'MMB63bb819186455PPA.pdf', '3'),
('MMB-81e3914023', '5120521005', 'MMB', '2023-01-14', 'MMB63c2c51566d82Web.pdf', '1'),
('MMB-ab26190023', '3120521023', 'MMB', '2023-01-03', 'MMB63b42ba2ec28a_kp.pdf', '5'),
('MMB-f885110023', '3120521006', 'MMB', '2023-01-08', 'MMB63ba28db5fa23PPA.pdf', '5'),
('SKGG-Gd86230021', '1262332  ', 'SKGG', '2021-01-24', 'SKGG600cddd411d5aAM.xlsx', '5'),
('SKKL-d215520021', '116511', 'SKKL', '2021-01-24', 'SKKL600cdd55ae17e12.xlsx', '5'),
('SKM-6cM8310021', '1547', 'SKM', '2021-01-23', 'SKM600c2ada17dcdoof.pdf', '5'),
('SKPH-3H54560023', '6789', 'SKPH', '2023-01-03', 'SKPH63b3c30a9a623_kp.pdf', '5'),
('SKU-b267250023', '5678', 'SKU', '2023-01-02', 'SKU63b2e622ec4fd_kp.pdf', '5'),
('SPKK-42P3340023', '3120521019', 'SPKK', '2023-01-02', 'SPKK63b27c0b2ca63_kp.pdf', '5');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_keluar`
--

CREATE TABLE `surat_keluar` (
  `id_surat_keluar` int(11) NOT NULL,
  `nama_surat_keluar` varchar(100) NOT NULL,
  `tanggal_surat_keluar` date NOT NULL,
  `keterangan_surat_keluar` varchar(100) NOT NULL,
  `file_surat_keluar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `surat_keluar`
--

INSERT INTO `surat_keluar` (`id_surat_keluar`, `nama_surat_keluar`, `tanggal_surat_keluar`, `keterangan_surat_keluar`, `file_surat_keluar`) VALUES
(12, '[Alifia-5678]-Surat Usaha', '2023-01-02', 'ID: SKU-b267250023', ''),
(15, '[Putri-6789]-Surat ', '2023-01-03', 'ID: SKPH-3H54560023', ''),
(16, '[Nizam-3120521023]-Surat Multimedia Broadcasting', '2023-01-03', 'ID: MMB-ab26190023', ''),
(17, '[Cicilia Ayuningdias Saputri-3120521006]-Surat Multimedia Broadcasting', '2023-01-08', 'ID: MMB-f885110023', ''),
(18, '[Yusril Untung Kamali - 5120521020] - Multimedia Broadcasting', '2023-01-08', 'ID: MMB-5b67812023', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_keterangan`
--

CREATE TABLE `surat_keterangan` (
  `id_surat_keterangan` int(11) NOT NULL,
  `nama_surat_keterangan` varchar(100) NOT NULL,
  `tanggal_surat_keterangan` date NOT NULL,
  `keterangan_surat_keterangan` varchar(100) NOT NULL,
  `file_surat_keterangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `surat_keterangan`
--

INSERT INTO `surat_keterangan` (`id_surat_keterangan`, `nama_surat_keterangan`, `tanggal_surat_keterangan`, `keterangan_surat_keterangan`, `file_surat_keterangan`) VALUES
(2, 'Surat Persetujuan Pimpinan', '2022-01-09', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lampiran_3_SURAT_Persetujuan_Atasan.pdf'),
(3, 'Surat Balasan', '2023-01-08', 'Ini adalah surat balasan kerja praktek', 'Revisi_Proposal_SPPA1.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `id_surat_masuk` int(11) NOT NULL,
  `nama_surat_masuk` varchar(100) NOT NULL,
  `tanggal_surat_masuk` date NOT NULL DEFAULT current_timestamp(),
  `keterangan_surat_masuk` varchar(100) NOT NULL,
  `file_surat_masuk` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `surat_masuk`
--

INSERT INTO `surat_masuk` (`id_surat_masuk`, `nama_surat_masuk`, `tanggal_surat_masuk`, `keterangan_surat_masuk`, `file_surat_masuk`) VALUES
(5, 'Surat Pernyataan', '2022-02-09', 'Lorem Ipsum is ', 'Rancang_Bangun_Sistem_Pengajuan_Surat_Kerja_Praktek_PENS_PSDKU_Lamongan_Berbasis_Web.pdf'),
(7, 'Surat Dinas Penting', '2022-06-09', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Surat_Pernyataan_5_Poin_CPNS_20182.pdf'),
(8, 'BDL', '2023-08-01', 'surat balasan', 'Form_Persetujuan_Maju_SPPA.pdf'),
(9, 'Diskominfo', '2023-07-01', 'surat balasan', 'Form_Persetujuan_Maju_SPPA1.pdf'),
(10, 'PT Otak Kanan', '2023-01-08', 'surat balasan', 'Form_Persetujuan_Maju_SPPA2.pdf'),
(11, 'PT Bank Rakyat Indonesia', '2023-01-09', 'surat balasan', 'Form_Persetujuan_Maju_SPPA3.pdf'),
(12, 'PT Digital Telematika', '2023-01-09', 'surat balasan', 'Form_Persetujuan_Maju_SPPA4.pdf'),
(13, 'PT Sisfomedia Indonesia', '2023-01-09', 'surat balasan', 'Revisi_Proposal_SPPA.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'koordinator'),
(8, 'baak', 'baak', 'baak'),
(10, 'mahasiswa', 'mahasiswa', 'mahasiswa'),
(11, '3120521019', '3120521019', 'mahasiswa');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `pengajuan_surat`
--
ALTER TABLE `pengajuan_surat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD PRIMARY KEY (`id_surat_keluar`);

--
-- Indeks untuk tabel `surat_keterangan`
--
ALTER TABLE `surat_keterangan`
  ADD PRIMARY KEY (`id_surat_keterangan`);

--
-- Indeks untuk tabel `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`id_surat_masuk`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `surat_keluar`
--
ALTER TABLE `surat_keluar`
  MODIFY `id_surat_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `surat_keterangan`
--
ALTER TABLE `surat_keterangan`
  MODIFY `id_surat_keterangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `surat_masuk`
--
ALTER TABLE `surat_masuk`
  MODIFY `id_surat_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
