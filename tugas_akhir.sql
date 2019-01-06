-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2019 at 11:54 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tugas_akhir`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'nikenlarasati765@gmail.com', 'niken1998');

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE IF NOT EXISTS `alumni` (
`id` int(10) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `tempat_tgl_lahir` varchar(150) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `tahun_lulus` int(10) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`id`, `nama`, `tempat_tgl_lahir`, `jurusan`, `tahun_lulus`, `email`) VALUES
(2, 'syayaalala', 'Sidoarjo, 13 September 1994', 'Teknik Informatika', 2015, 'yuhuuu@gmail.com'),
(5, 'dimas arif', 'jepara, 23 maret 1997', 'ti', 2019, 'd.masprasetya@gmail.com'),
(10, 'dasdasd', 'Jepara, 23 Maret 1997', 'ti', 2019, '123@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
`id` int(10) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `tanggal` date NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `link` varchar(500) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `nama`, `tanggal`, `kategori`, `isi`, `link`, `gambar`) VALUES
(1, 'Samsung Kembangkan Fitur Kamera Malam Mirip Google Pixel', 'Fatimah Kartini Bohang', '2018-12-25', 'nasional', 'Samsung tengah mengembangkan teknologi kamera baru untuk meningkatkan hasil pembidikan di malam hari. Informasi ini diumbar komunitas XDA Developers pasca menemukan kode khusus pada pembaruan Android Pie untuk Galaxy Note 9.', 'https://tekno.kompas.com/read/2018/12/25/11120067/samsung-kembangkan-fitur-kamera-malam-mirip-google-pixel', 'samsung.png'),
(2, 'Google Rilis Chrome Canvas, Tools Menggambar Berbasis Web', 'Cut Annisa Embun Sari', '2018-12-23', 'nasional', 'Membuat gambar atau ilustrasi menjadi salah satu hobi setiap orang di dunia, khususnya seniman. Google baru-baru ini telah meluncurkan aplikasi desain berbasis browser, yakni Chrome Canvas.', 'https://techno.okezone.com/read/2018/12/23/207/1995027/google-rilis-chrome-canvas-tools-menggambar-berbasis-web', 'canvas.jpg'),
(14, 'Portal, Perangkat Video Chat Buatan Facebook Resmi Diluncurkan', 'Pernita Hestin Untari, Jurnalis', '2018-12-08', 'nasional', 'Kamu pengguna Android? Tentunya kamu pernah mendengar atau bahkan pernah melakukan root. Sebagai informasi yang perlu kamu ketahui, root ini merupakan suatu kegiatan di mana pengguna smartphone Android berhasil mendapatkan kendali atau akses penuh dari perangkatnya tersebut.', 'https://techno.okezone.com/read/2018/11/08/207/1975121/portal-perangkat-video-chat-buatan-facebook-resmi-diluncurkan', 'fb.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bidang_kajian`
--

CREATE TABLE IF NOT EXISTS `bidang_kajian` (
`id` int(10) NOT NULL,
  `tahun` varchar(10) NOT NULL,
  `bidang_kajian` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bidang_kajian`
--

INSERT INTO `bidang_kajian` (`id`, `tahun`, `bidang_kajian`) VALUES
(1, '2019', 'Data mining, Opinion mining dan analysis, Clasification.'),
(3, '2019', 'Software project management, IT governance.'),
(4, '2019', 'Semantic web dan ontologies: mencari data atau dokumen berdasarkan dengan arti semantik.');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE IF NOT EXISTS `dosen` (
`id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_tgl_lahir` varchar(150) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `nama`, `tempat_tgl_lahir`, `email`) VALUES
(1, 'Azmarie Rania Dini Prasetya, P.hd', 'Pemalang, 14 Oktober 1992', 'azmarie.rania@gmail.com'),
(2, 'Azga Rayga Dini Prasetya, M.CS', 'Jepara, 23 Maret 1989', 'prasetyarayga@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE IF NOT EXISTS `download` (
`id` int(10) NOT NULL,
  `judul` varchar(300) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` text NOT NULL,
  `link` varchar(500) NOT NULL,
  `tipe` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `download`
--

INSERT INTO `download` (`id`, `judul`, `tanggal`, `keterangan`, `link`, `tipe`) VALUES
(2, 'PELAKSANAAN AUDIT SISTEM INFORMASI', '2016-05-01', 'Rekayasa perangkat lunak berbasis sumber terubuka untuk membantu pelaksanaan audit sistem informasi ', 'PELAKSANAAN AUDIT SISTEM INFORMASI.pdf', 'jurnal'),
(12, 'SISTEM E-LEARNING DETEKSI DAN KOREKSI KESALAHAN BIT ', '0000-00-00', 'ANALISA REKAYASA PERANGKAT LUNAK SISTEM E-LEARNING DETEKSI DAN KOREKSI KESALAHAN BIT PADA KOMUNIKASI DATA DENGAN MODEL PROBLEM BASED LEARNING', 'e-learning dekteksi kesalahan.pdf', 'jurnal');

-- --------------------------------------------------------

--
-- Table structure for table `ebook`
--

CREATE TABLE IF NOT EXISTS `ebook` (
`id` int(10) NOT NULL,
  `judul` varchar(300) NOT NULL,
  `tanggal` date NOT NULL,
  `isi` text NOT NULL,
  `link` varchar(300) NOT NULL,
  `jenis` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ebook`
--

INSERT INTO `ebook` (`id`, `judul`, `tanggal`, `isi`, `link`, `jenis`) VALUES
(1, 'ebooks - Rekayasa Perangkat Lunak', '2018-12-31', 'berisi ebooks tentang RPL', 'http://budiswift.blogspot.com/2013/02/ebook-rekayasa-perangkat-lunak.html', 'ebooks'),
(4, 'kumpulan ebook RPL', '2018-12-30', 'kumpulan ebook RPL lengkap', 'http://firman-rpl.blogspot.com/2012/07/kumpulan-e-book-tentang-rpl-rekayasa.html%22', 'ebook');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE IF NOT EXISTS `kegiatan` (
`id` int(10) NOT NULL,
  `nama_kegiatan` varchar(150) NOT NULL,
  `tanggal` date NOT NULL,
  `peserta` varchar(150) NOT NULL,
  `keterangan` text NOT NULL,
  `waktu` varchar(100) NOT NULL,
  `tempat` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `nama_kegiatan`, `tanggal`, `peserta`, `keterangan`, `waktu`, `tempat`) VALUES
(1, 'Workshop RPL 1', '2019-01-14', 'Mahasiswa Teknik Informatika Udinus', 'Workshop pertama tentang WebApps (Web applications) untuk meningkatkan kualitas tentang WebApps', 'Jam 10.30-selesai ', 'Ruang Serba Guna Gedung H lantai 1'),
(3, 'lala', '2019-01-08', 'siswa', 'lala', '08.00', 'tempat');

-- --------------------------------------------------------

--
-- Table structure for table `klinik`
--

CREATE TABLE IF NOT EXISTS `klinik` (
`id` int(11) NOT NULL,
  `nama_kegiatan` varchar(300) NOT NULL,
  `tanggal` date NOT NULL,
  `peserta` varchar(100) NOT NULL,
  `waktu` varchar(100) NOT NULL,
  `tempat` varchar(300) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `klinik`
--

INSERT INTO `klinik` (`id`, `nama_kegiatan`, `tanggal`, `peserta`, `waktu`, `tempat`) VALUES
(1, 'Klinik 1', '2019-01-15', 'mahasiswa TI', 'Jam 09.30-selesai', 'Tempat lobby gedung H lantai 1');

-- --------------------------------------------------------

--
-- Table structure for table `lomba`
--

CREATE TABLE IF NOT EXISTS `lomba` (
`id` int(11) NOT NULL,
  `nama_kegiatan` varchar(300) NOT NULL,
  `tanggal` date NOT NULL,
  `peserta` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `waktu` varchar(100) NOT NULL,
  `tempat` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lomba`
--

INSERT INTO `lomba` (`id`, `nama_kegiatan`, `tanggal`, `peserta`, `keterangan`, `waktu`, `tempat`) VALUES
(1, 'Dinus Fest 2019', '2019-01-23', 'SMA/SMK SeJateng DIY', 'dinus fest', '08.00 WIB - selesai', 'aula gedung E lantai 3');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
`id` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `tempat_tgl_lahir` varchar(150) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `tempat_tgl_lahir`, `jurusan`, `nim`, `email`) VALUES
(1, 'Darrelda Ruliansyah', 'Bandung, 11 Januari 1998', 'Teknik Informatika', 'A11.2017.09989', 'darrelda1998@gmail.com'),
(2, 'Marcelia Crenata Yuwono', 'Semarang, 12 Desember 1999', 'Teknik Informatika', 'A11.2017.10990', 'crenata.ichel@gmail.com'),
(3, 'Harlina Nurlita', 'Jepara, 12 April 1992', 'Kedokteran', 'sasa', 'syalalala@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE IF NOT EXISTS `materi` (
`id` int(10) NOT NULL,
  `judul` varchar(300) NOT NULL,
  `tanggal` date NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`id`, `judul`, `tanggal`, `isi`) VALUES
(1, 'Introduction to Software Engineering', '2018-12-15', 'a. Perkembangan rekayasa perangkat lunak \r\nb. Perkembangan perangkat lunak \r\nc. Permasalahan perangkat lunak \r\nd. Jenis Aplikasi Perangkat Lunak \r\ne. Mitos Perangkat Lunak \r\nf. Perbedaan Software, Software Engineering, System Engineering, Computer System  \r\ng. Isu dari Tanggungjawab Profesional '),
(2, 'Software Process', '2018-12-15', 'a. Process Framework \r\nb. CMMI (Capability Maturity Model Integration) \r\nc. Process Assessment \r\nd. Process Model (Waterfall Model, Increment Model, RAD Model), Evolutionary Process Model (Prototyping Model, Spiral Model) \r\ne. An Agile View of Process'),
(3, 'Software Engineering Practice', '2018-12-15', 'a. Core and the essence of practice Software Engineering \r\nb. Planning Practices \r\nc. Modeling Practices \r\nd. Construction Practices \r\ne. Computer-Based System Element f. System Engineering Hierarchy \r\ng. System Model Process \r\n'),
(4, 'Requirement Engineering ', '2018-12-15', 'a. Requirement Engineering Task (inception, elicitation, elaboration, negotiation, specification, validation, requirement management) \r\nb. Initiating The Requirements Engineering Process. \r\nc. Collaborative Requirements Gathering \r\nd. Developing Use Case'),
(5, 'Analysis Modeling', '2018-12-15', 'a. Requirement Analysis \r\nb. Analysis Modeling Approaches \r\nc. Data Modeling Concepts\r\nd.?Object Oriented Analysis\r\n'),
(6, 'Design Modeling', '2018-12-15', 'a.Scenario-Based Modeling \r\nb.?Flow Oriented Modeling \r\nc.?Class-Based Modeling \r\nd.?Class-Responsibility (CRC) Modeling ');

-- --------------------------------------------------------

--
-- Table structure for table `publikasi`
--

CREATE TABLE IF NOT EXISTS `publikasi` (
`id` int(11) NOT NULL,
  `judul` varchar(300) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `isi` text NOT NULL,
  `link` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publikasi`
--

INSERT INTO `publikasi` (`id`, `judul`, `nama`, `tanggal`, `isi`, `link`) VALUES
(1, 'ANALISA REKAYASA PERANGKAT LUNAK SISTEM ELEARNING DETEKSI DAN KOREKSI KESALAHAN BIT PADA KOMUNIKASI DATA DENGAN MODEL PROBLEM BASED LEARNING ', '(1)MY Teguh Sulistyono, (2)Sudaryanto', '2018-12-29', '- Abstrak \r\nAnalisa sistem e-learning deteksi dan koreksi kesalahan bit pada komunikasi data dengan model problem based learning diperlukan sebuah teknologi pembelajaran untuk computer-base training, electric performance support systems, computer assisted instruction, intelligent tutoring, education dan training technology dengan area subyek meliputi  reference model, leaner model, task model, student identifiers, competency definitions, user interface, learning content interchange, learning content packaging, content sequencing, localization, learning content cataloging information, data exchange and interchange, protocols, web interchange, web browser platforms, tool/agent communication, course management, enterprise interface. Dimana analisa sistem e-learning membutuhkan teknologi pembelajaran yang bertujuan agar analisa pengembangan berbagai sistem untuk teknologi pembelajaran memiliki platform yang sama, sistemik dan sistematis, sehingga komunikasi, integrasi dan kolaborasi antar sistem dapat berlangsung dengan baik. Problem Based Learning melalui arsitektur Learning Technology System yang diimplementasikan dalam proses belajar mengajar. Segala macam pendukung pembelajaran dapat saling berintegrasi dengan pengguna sehingga hubungan antara aplikasi dengan pemakai dapat saling berintegrasi dengan baik sehingga dapat membantu proses belajar mengajar dan bagi peserta didik membantu mempercepat proses pemahaman terhadap materi pembelajaran yang diajarkan, sehingga tujuan pembelajaran akan mudah dicapai.\r\n....\r\n\r\n', 'http://publikasi.dinus.ac.id/index.php/technoc/article/download/563/332.html');

-- --------------------------------------------------------

--
-- Table structure for table `topik`
--

CREATE TABLE IF NOT EXISTS `topik` (
`id` int(20) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(10) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topik`
--

INSERT INTO `topik` (`id`, `judul`, `tanggal`, `nama`, `isi`) VALUES
(1, '1. Software Requirements ', '2018-12-29', 'Niken Octa', 'Merupakan hubungan dengan spesifikasi kebutuhan dan persyaratan perangkat lunak.\r\n'),
(2, '2. Software desain', '2018-12-29', 'Niken Octa', 'mencakup proses penampilan arsitektur, komponen, antar muka, dan karakteristik lain dari perangkat lunak.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bidang_kajian`
--
ALTER TABLE `bidang_kajian`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `download`
--
ALTER TABLE `download`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ebook`
--
ALTER TABLE `ebook`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `klinik`
--
ALTER TABLE `klinik`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lomba`
--
ALTER TABLE `lomba`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publikasi`
--
ALTER TABLE `publikasi`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topik`
--
ALTER TABLE `topik`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `bidang_kajian`
--
ALTER TABLE `bidang_kajian`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `download`
--
ALTER TABLE `download`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `ebook`
--
ALTER TABLE `ebook`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `klinik`
--
ALTER TABLE `klinik`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `lomba`
--
ALTER TABLE `lomba`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `publikasi`
--
ALTER TABLE `publikasi`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `topik`
--
ALTER TABLE `topik`
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
