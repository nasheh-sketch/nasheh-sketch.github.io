-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Feb 2023 pada 01.43
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bappedalitbang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_jabatan`
--

CREATE TABLE `data_jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_jabatan`
--

INSERT INTO `data_jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
(1, 'Kepala Bidang'),
(2, 'Perencana'),
(3, 'Analis'),
(4, 'Staf'),
(5, 'Honor'),
(6, 'Magang'),
(7, 'Peneliti'),
(8, 'Pengelola'),
(9, 'Bendahara');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pegawai`
--

CREATE TABLE `data_pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nip` varchar(16) NOT NULL,
  `nama_pegawai` varchar(100) NOT NULL,
  `username` varchar(120) NOT NULL,
  `password` varchar(32) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `golongan` varchar(10) NOT NULL,
  `foto` varchar(500) NOT NULL,
  `hak_akses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_pegawai`
--

INSERT INTO `data_pegawai` (`id_pegawai`, `nip`, `nama_pegawai`, `username`, `password`, `jenis_kelamin`, `jabatan`, `golongan`, `foto`, `hak_akses`) VALUES
(1, '123456789', 'Fauzi', 'fauzi', '0bd9897bf12294ce35fdc0e21065c8a7', 'Laki-Laki', 'Admin', '2020-12-26', '', 1),
(7, '13579987654', 'Muhammad Nasheh', 'nasheh', '7024e0a98ca03b5db41eb74b9a43f5d0', 'Laki-Laki', 'Magang', '', 'pegawai-230208-b7730f2fd1.png', 1),
(10, '1973100720050120', 'Indriani Fitri, ST', 'indri', '71f7be7b8496f7ece8454b1bcdcd2162', 'Perempuan', 'Kepala Bidang', 'IV/a', 'pegawai-230208-5773ff03f9.jpg', 2),
(11, '1971091719970320', 'Dr. Ida Hastutiningsih, S.Pd M.PH', 'ida', '7f78f270e3e1129faf118ed92fdf54db', 'Perempuan', 'Kepala Bidang', 'IV/a', 'pegawai-230208-233cae98d6.jpg', 1),
(12, '1968070219890310', 'Marpi\'e, S. AP', 'marpie', '08f926b2eac913184415ec6444019127', 'Laki-Laki', 'Kepala Bidang', 'IV/a', 'pegawai-230208-40e9d687b3.png', 1),
(13, '1976051920031220', 'Jelita Anggraini Meisarah, ST, M.Eng', 'jelita', '222609554b94fcf8a0befd7c3ce47b03', 'Perempuan', 'Kepala Bidang', 'IV/a', 'pegawai-230208-680a8115b2.jpg', 1),
(14, '1966041119880310', 'Abidin, SKM. MM', 'abidin', '1cec0427556f3e2adf3ecde9c0026ca6', 'Laki-Laki', 'Perencana', 'IV/a', 'pegawai-230208-1c8f9ecb34.png', 1),
(15, '1977050220050110', 'Subhan, SE, M.Si', 'subhan', 'f9f8c03639a119299c4179e7a1797642', 'Laki-Laki', 'Perencana', 'IV/a', 'pegawai-230208-4d48a5a7c0.png', 2),
(16, '1979040920000320', 'Ida Lusia Wahyuti, S.Sos, MM', 'idalusia', 'a053f72dda9c522566185ec0fbac276e', 'Perempuan', '', 'IV/a', 'pegawai-230208-f5510460aa.jpg', 1),
(17, '1974060619980320', 'Nurliasti, SE, MM', 'nurliasti', '1e18d30315ff01ad96205439c27e7aa4', 'Perempuan', '', 'IV/a', 'pegawai-230208-3083a0fb95.jpg', 2),
(18, '1979060920060410', 'Yunizarrahman, SE, M. Ec.Dev', 'yuniza', '3464bbd59feddf040689e5c09c14aa46', 'Laki-Laki', 'Perencana', 'III/d', 'pegawai-230209-d6d87144ce.png', 2),
(19, '1970080719930320', 'Hj. Nureleta, SE', 'rita', '2794d223f90059c9f705c73a99384085', 'Perempuan', '', 'III/d', 'pegawai-230209-5524b8cf0d.jpg', 1),
(20, '1985032020090410', 'Muhammad Tabrani, S.Si', 'tabrani', 'be0f12ca26157bfd0dfab525385c4f28', 'Laki-Laki', 'Perencana', 'III/d', 'pegawai-230209-02b50a1ddc.png', 1),
(21, '1982061020201001', 'Andi Pranata, S.Psi', 'andi', 'ce0e5bf55e4f71749eade7a8b95c4e46', 'Laki-Laki', 'Perencana', 'III/d', 'pegawai-230209-5250348e13.png', 1),
(22, '1979020820100120', 'Hj. Norlailah, S.Sos.I', 'nor', '57c7d11cd49333e3f722204c63016da9', 'Perempuan', 'Peneliti', 'III/d', 'pegawai-230209-dbb31934d1.jpg', 1),
(23, '1984080120100110', 'Agus Salami, SE', 'agus', 'fdf169558242ee051cca1479770ebac3', 'Laki-Laki', 'Peneliti', 'III/d', 'pegawai-230209-7df5912e2b.png', 1),
(24, '1987062520100110', 'Rahmat Imani, S.Pt', 'rahmat', 'af2a4c9d4c4956ec9d6ba62213eed568', 'Laki-Laki', 'Perencana', 'III/d', 'pegawai-230209-aa7e1653b0.png', 1),
(25, '1987020420100120', 'Erwinda Sari, SKM,MKM', 'winda', 'aed2aec41bfd7ddb55b21f3ce206c66b', 'Perempuan', 'Perencana', 'III/d', 'pegawai-230209-50941fcaa5.jpg', 1),
(26, '1982011920150310', 'Heri Setiawan, ST', 'heri', '6812af90c6a1bbec134e323d7e70587b', 'Laki-Laki', 'Perencana', 'III/b', 'pegawai-230209-3dcec1e748.png', 1),
(27, '1977071220001220', 'Dr. Katharina Dike Sovia Luci, S.Pd,M.Hum', 'katharina', 'a93c58c35188f879f07b7d599db98687', 'Perempuan', 'Analis', 'IV/b', 'pegawai-230209-de53503542.jpg', 2),
(28, '1983092620080320', 'Gusti Dini Eka Cahyani, ST', 'dini', '83476316a972856163fb987b861a0a2c', 'Perempuan', 'Analis', 'III/d', 'pegawai-230209-59bf02922c.jpg', 2),
(29, '1991110420150320', 'Endah Tri Wahyuni, S.Pd', 'endah', '577da97478381ef57136a7d0b79b54c3', 'Perempuan', 'Perencana', 'III/b', 'pegawai-230209-cb0457e5e8.jpg', 1),
(30, '1991111620150320', 'Hj. Andini Putri Titasari, ST', 'andin', '4c991e90b0dddd87d0ae8f38c544d8e9', 'Perempuan', 'Peneliti', 'III/b', 'pegawai-230209-c7a01941de.jpg', 2),
(31, '1987091720150320', 'Nurul Izzati, SKM', 'nurul', '6968a2c57c3a4fee8fadc79a80355e4d', 'Perempuan', 'Peneliti', 'III/b', 'pegawai-230209-4d061dd1b3.jpg', 2),
(32, '1968121020070110', 'Hurni, S.AP', 'hurni', '5195e5a17a9993eba29939536135865f', 'Laki-Laki', 'Pengelola', 'III/b', 'pegawai-230209-2ac3968588.png', 2),
(33, '1978031420100120', 'Merry Irawati, A.Md', 'merry', 'a1ce8e1c43bc97259557379589e051af', 'Perempuan', 'Pengelola', 'III/b', 'pegawai-230209-4a356c1979.jpg', 2),
(34, '1978041520070110', 'Saiful Rachman, SE', 'saiful', '4eeccab0e8c08e16a1d08296265e38fa', 'Laki-Laki', 'Analis', 'III/b', 'pegawai-230209-04aab15084.png', 2),
(35, '1978092820070110', 'Mahyudin, SE', 'mahyu', 'b60888db33360fe7db93166c977f59d1', 'Laki-Laki', 'Analis', 'III/b', 'pegawai-230209-a4b7b7eec0.png', 2),
(36, '1982102220090120', 'Erni Yulianti, S.AP', 'erni', '6e59bb96b06c40e477ba58d02cbe2b84', 'Perempuan', 'Analis', 'III/a', 'pegawai-230209-6b79cf667c.jpg', 2),
(37, '1992022820190310', 'Febry Erfin Wardhana, SE', 'erfin', '4e15ff1a12750e37248ed60e0fae58b8', 'Laki-Laki', 'Analis', 'III/a', 'pegawai-230209-7725963724.png', 2),
(38, '1992091620190310', 'Muhammad Aulia Ramzan, ST', 'ramzan', '383473c229ecc0ae87d2e0ac46b88b6b', 'Laki-Laki', 'Analis', 'III/a', 'pegawai-230209-af910e2917.png', 2),
(39, '1983110720100120', 'Anna Trisnayanti, A.Md', 'anna', 'a70f9e38ff015afaa9ab0aacabee2e13', 'Perempuan', 'Pengelola', 'III/a', 'pegawai-230209-b9d230d2bd.jpg', 2),
(40, '1980101920070120', 'Susilawati, A.Md', 'susi', '536931d80decb18c33db9612bdd004d4', 'Perempuan', 'Bendahara', 'III/a', 'pegawai-230209-d83ba3ca12.jpg', 1),
(41, '1980041820070120', 'Siti Juhriah, A.Md', 'siti', 'db04eb4b07e0aaf8d1d477ae342bdff9', 'Perempuan', 'Pengelola', 'II/d', 'pegawai-230209-ac8b9241b9.jpg', 2),
(42, '1971110620060420', 'Hayati', 'hayati', '73e405227c02a626e66f0dc4dd3a53a3', 'Perempuan', '', 'III/a', 'pegawai-230209-ad2ed5b577.jpg', 2),
(43, '1979012520070110', 'Mulngadi, A.Md', 'mul', '353942263d1bedfbe06b7bfa78226253', 'Laki-Laki', 'Pengelola', 'II/d', 'pegawai-230209-63b75d46e6.png', 2),
(44, '1984122120140820', 'Desi Ervina, A.Md', 'desi', '069e2dd171f61ecffb845190a7adf425', 'Perempuan', 'Pengelola', 'II/c', 'pegawai-230209-ef4edd937d.jpg', 2),
(45, '1985080720080110', 'Amirudin', 'amir', '63eefbd45d89e8c91f24b609f7539942', 'Laki-Laki', 'Pengelola', 'II/b', 'pegawai-230209-bbbde4d1d7.png', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_suratkeluarpik`
--

CREATE TABLE `data_suratkeluarpik` (
  `id` int(11) NOT NULL,
  `no_berkas` varchar(120) NOT NULL,
  `alamat_penerima` varchar(128) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `perihal` varchar(120) NOT NULL,
  `no_petunjuk` varchar(120) NOT NULL,
  `no_paket` varchar(120) NOT NULL,
  `file` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_suratkeluarpik`
--

INSERT INTO `data_suratkeluarpik` (`id`, `no_berkas`, `alamat_penerima`, `tanggal_surat`, `perihal`, `no_petunjuk`, `no_paket`, `file`) VALUES
(5, '8888', 'kominfo', '2023-02-08', 'undangan', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_suratkeluarsekre`
--

CREATE TABLE `data_suratkeluarsekre` (
  `id` int(11) NOT NULL,
  `no_berkas` varchar(120) NOT NULL,
  `alamat_penerima` varchar(120) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `perihal` varchar(120) NOT NULL,
  `no_petunjuk` varchar(120) NOT NULL,
  `no_paket` varchar(120) NOT NULL,
  `file` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_suratmasukpik`
--

CREATE TABLE `data_suratmasukpik` (
  `id` int(11) NOT NULL,
  `no_berkas` varchar(120) NOT NULL,
  `alamat_pengirim` varchar(120) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `no_surat` varchar(120) NOT NULL,
  `perihal` varchar(120) NOT NULL,
  `no_petunjuk` varchar(15) NOT NULL,
  `no_paket` varchar(15) NOT NULL,
  `file` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_suratmasukpik`
--

INSERT INTO `data_suratmasukpik` (`id`, `no_berkas`, `alamat_pengirim`, `tanggal_surat`, `no_surat`, `perihal`, `no_petunjuk`, `no_paket`, `file`) VALUES
(9, '555', 'Dinas Pekerjaan Umum Penataan Ruang', '2022-10-31', 'B.3365/DPUPR/PR/005/10/2022 31 oktober 2022', 'Rapat Kordinasi', '', '', '1.jpeg'),
(10, '821', 'Setda Kabupaten Tabalong', '2022-11-11', 'B.1957-setda-bistan/G20-11/22', 'Undangan Pelaksanaan Penempatan Taman Padi', '', '', '2.jpeg'),
(11, '554', 'Dinas Pekerjaan Umum dan Penataan Ruang', '2022-10-31', 'B.3366/DPUPR/PR/10/2022 31 Oktober 2022', 'Undangan Rapat', '', '', '3.jpeg'),
(12, '784', 'PABPDSI (Kecamatan Kelua)', '2022-10-13', '007/PABPDSI/KK/10/2022', 'Permohonan Pembuatan Tanggul/Siring di tepi jalan raya untuk atasi banjir', '', '', '41.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_suratmasuksekre`
--

CREATE TABLE `data_suratmasuksekre` (
  `id` int(11) NOT NULL,
  `no_berkas` varchar(120) NOT NULL,
  `alamat_pengirim` varchar(120) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `no_surat` varchar(120) NOT NULL,
  `perihal` varchar(120) NOT NULL,
  `no_petunjuk` varchar(120) NOT NULL,
  `no_paket` varchar(120) NOT NULL,
  `file` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_suratmasuksekre`
--

INSERT INTO `data_suratmasuksekre` (`id`, `no_berkas`, `alamat_pengirim`, `tanggal_surat`, `no_surat`, `perihal`, `no_petunjuk`, `no_paket`, `file`) VALUES
(1, '', 'Persatuan Olahraga Balogo Seluruh Indonesia Cabang Tabalong', '2022-12-28', '001/PORGOSI.Tab/11/2022', 'Permohonan Bantuan Lomba Balogo', '', '', 'sekre_11.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hak_akses`
--

CREATE TABLE `hak_akses` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `hak_akses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hak_akses`
--

INSERT INTO `hak_akses` (`id`, `keterangan`, `hak_akses`) VALUES
(1, 'admin', 1),
(2, 'user', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_jabatan`
--
ALTER TABLE `data_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indeks untuk tabel `data_pegawai`
--
ALTER TABLE `data_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indeks untuk tabel `data_suratkeluarpik`
--
ALTER TABLE `data_suratkeluarpik`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_suratmasukpik`
--
ALTER TABLE `data_suratmasukpik`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_suratmasuksekre`
--
ALTER TABLE `data_suratmasuksekre`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hak_akses`
--
ALTER TABLE `hak_akses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_jabatan`
--
ALTER TABLE `data_jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `data_pegawai`
--
ALTER TABLE `data_pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `data_suratkeluarpik`
--
ALTER TABLE `data_suratkeluarpik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `data_suratmasukpik`
--
ALTER TABLE `data_suratmasukpik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `data_suratmasuksekre`
--
ALTER TABLE `data_suratmasuksekre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `hak_akses`
--
ALTER TABLE `hak_akses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
