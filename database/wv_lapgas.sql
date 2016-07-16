DROP DATABASE IF EXISTS lapgas;
CREATE DATABASE lapgas;
USE lapgas;

CREATE TABLE IF NOT EXISTS `admin` (
  `kode` varchar(3) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `admin` (`kode`, `Nama`, `Password`, `level`) VALUES
('A01', 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `dashboard`
--

CREATE TABLE IF NOT EXISTS `dashboard` (
  `Code` varchar(100) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Content` text NOT NULL,
  `Date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dashboard`
--

INSERT INTO `dashboard` (`Code`, `Title`, `Content`, `Date`) VALUES
('Admin', 'Percobaan 1', 'Isi Sembarang', '23-06-2016');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `NPM` bigint(14) PRIMARY KEY NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Angkatan` int(4) NOT NULL,
  `Kelas` varchar(2) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Telfon` bigint(14) NOT NULL,
  `Alamat` text NOT NULL,
  `pic` varchar(250) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS person (
  name varchar(100) NOT NULL,
  age TINYINT
);

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`NPM`, `Nama`, `Password`, `Gender`, `Angkatan`, `Kelas`, `Email`, `Telfon`, `Alamat`, `pic`, `level`) VALUES
(41155050170001, 'Mhs-1-A1', 'mahasiswa', 'laki-laki', 2017, 'A1', '', 0, '', 'http://localhost/lapgas/uploads/pics_member/hodor.jpg', 'mahasiswa'),
(41155050170002, 'Mhs-2-A1', 'mahasiswa', 'perempuan', 2017, 'A1', '', 0, '', 'http://localhost/lapgas/uploads/pics_member/majestic.png', 'mahasiswa'),
(41155050170003, 'Mhs-1-A2', 'mahasiswa', 'laki-laki', 2017, 'A2', '', 0, '', 'http://localhost/lapgas/uploads/pics_member/cry2.jpg', 'mahasiswa'),
(41155050170004, 'Mhs-2-A2', 'mahasiswa', 'perempuan', 2017, 'A2', '', 0, '', 'http://localhost/lapgas/uploads/pics_member/eris.jpg', 'mahasiswa'),
(41155050170005, 'Mhs-1-B', 'mahasiswa', 'laki-laki', 2017, 'B', '', 0, '', 'http://localhost/lapgas/uploads/pics_member/misogi.jpg', 'mahasiswa'),
(41155050170006, 'Mhs-2-B', 'mahasiswa', 'perempuan', 2017, 'B', '', 0, '', 'http://localhost/lapgas/uploads/pics_member/the-ring-of-power.jpg', 'mahasiswa');

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE IF NOT EXISTS `matakuliah` (
  `Kode_mk` varchar(10) PRIMARY KEY NOT NULL,
  `Nama_mk` varchar(250) NOT NULL,
  `Semester` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`Kode_mk`, `Nama_mk`, `Semester`) VALUES
('TIF1231', 'Algoritma Pemograman I (C++)', 1),
('TIF1321', 'Konsep Bahasa & Pemograman I (JAVA)', 1),
('TIF2231', 'Algoritma Pemograman II (Bahasa C)', 2),
('TIF2321', 'Pemograman Basis Data', 2),
('TIF2331', 'Konsep Bahasa & Pemograman II (Java II)', 2),
('TIF3431', 'Sistem Operasi (Linux)', 3),
('TIF3441', 'Praktikum Jaringan Komputer', 3),
('TIF4431', 'Pemograman Internet Dasar', 4),
('TIF4441', 'Sistem Client / Server', 4),
('TIF5421', 'Pemograman Internet Lanjut', 5);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE IF NOT EXISTS `pembayaran` (
  `Kode` varchar(5) NOT NULL,
  `Angkatan` varchar(4) NOT NULL,
  `Kelas` varchar(2) NOT NULL,
  `Nama_mhs` varchar(250) NOT NULL,
  `Nama_mk` varchar(250) NOT NULL,
  `Nilai` varchar(1) NOT NULL,
  `Nominal` varchar(100) NOT NULL,
  `tgl_bayar` varchar(20) NOT NULL,
  `tgl_input` varchar(20) NOT NULL,
  `pic` varchar(250) NOT NULL,
  `Status` varchar(1) NOT NULL,
  `admin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`Kode`, `Angkatan`, `Kelas`, `Nama_mhs`, `Nama_mk`, `Nilai`, `Nominal`, `tgl_bayar`, `tgl_input`, `pic`, `Status`, `admin`) VALUES
('K0000', '2017', 'A1', 'Mhs-1-A1', 'Algoritma Pemograman I (C++)', 'A', '200.000', '19-06-2016', '26-06-2016', 'http://localhost/lapgas/uploads/struk/batman-arkham-origins-wallpaper-6.jpg', 'A', 'admin'),
('K0001', '2017', 'A1', 'Mhs-1-A1', 'Konsep Bahasa & Pemograman I (JAVA)', 'B', '200.000', '19-06-2016', '26-06-2016', 'http://localhost/lapgas/uploads/struk/batman-arkham-origins-wallpaper-6.jpg', 'A', 'admin'),
('K0001', '2017', 'A1', 'Mhs-2-A1', 'Algoritma Pemograman II (Bahasa C)', 'C', '200.000', '25-06-2016', '26-06-2016', 'http://localhost/lapgas/uploads/struk/batman-arkham-origins-wallpaper-10.jpg', 'B', 'admin'),
('K0002', '2017', 'A1', 'Mhs-2-A1', 'Pemograman Basis Data', 'D', '200.000', '25-06-2016', '26-06-2016', 'http://localhost/lapgas/uploads/struk/batman-arkham-origins-wallpaper-10.jpg', 'B', 'admin');
