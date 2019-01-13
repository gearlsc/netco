-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2019 at 04:31 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sma3`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `nama` varchar(20) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `nomorhp` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `jk` char(15) NOT NULL,
  `ekskul` varchar(50) NOT NULL,
  `jenis_ekskul` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`nama`, `username`, `password`, `nomorhp`, `email`, `jk`, `ekskul`, `jenis_ekskul`) VALUES
('Erica Alvionita', 'erica', '060696', '088909022914', 'alvionitaerica@yahoo.co.id', 'Perempuan', 'Ekstrakulikuler Keilmuan', 'Kimia'),
('Gea Rulisca Kandora', 'gearlsc', '290797', '085288934413', 'gearuliscaa@gmail.com', 'Perempuan', 'Ekstrakulikuler Keilmuan', 'Matematika');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `kode_berita` int(5) NOT NULL,
  `tanggal_berita` date NOT NULL,
  `gbr_berita` varchar(200) NOT NULL,
  `judul_berita` text NOT NULL,
  `category_berita` varchar(25) NOT NULL,
  `isi_berita` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`kode_berita`, `tanggal_berita`, `gbr_berita`, `judul_berita`, `category_berita`, `isi_berita`) VALUES
(2, '2017-07-13', 'berita1.jpg', '10 Siswa SMAN 3 Ini Wakili Jambi Lomba LCC tingkat Nasional', 'BERITA', 'bisa karena biasa. Itulah yang menjadi modal dasar 10 siswa SMAN 3 Kota Jambi dalam menghadapi Lomba Cerdas Cermat (LCC) 4 Pilar MPR RI tingkat nasional yang akan dimulai besok, Minggu (9/8) di Jakarta.\r\n\r\nTiara Meldy, satu diantara 10 siswa tersebut mengatakan mereka sudah mempersiapkan untuk perlombaan itu jauh-jauh hari. Kala memenangkan lomba tingkat Kota Jambi dan di pastikan melaku ke nasional, setiap hari mereka selalu belajar.\r\n\r\n"Materi UUD, Tap MPR, Bhineka Tunggal Ika dan NKRI semua harus hapal. Tiap hari kami latihan. Diulang-ulang terus. Dijadikan kebiasaan. Pokoknya sehari jangan sampai tidak buka buku dan materi," ungkapnya kala ditemui Tribun di sekolahnya, Jumat (7/8).\r\n\r\nHal senada juga diungkapkan rekannya, Nurul Hakiki. Ia menegaskan bahwa perlombaan tersebut bukanlah bersifat individual. Melainkan kerja tim. Semua harus bisa dan harus saling mendukung.\r\n\r\n"Ketika ada satu yang lagi malas latihan, yang lain mengingatkan untuk belajar. Ayo kita latihan. Karena target kita juara 1 nasional. Grand Final adalah harga mati," sebutnya.'),
(3, '2017-07-01', 'berita2.jpg', 'Lulus 100 Persen, SMAN 3 Jambi Raih Nilai Rata-rata Tertinggi UN', 'BERITA', 'Kepala SMAN 3 Kota Jambi Zul Asri mengaku bahagia karena seluruh anak didiknya lulus 100 persen.\r\n\r\nIa juga sangat bersyukur karena rata-rata nilai UN siswa di sekolahnya merupakan yang tertinggi dibanding sekolah negeri lain di Kota Jambi.\r\n\r\n"Alhamdulillah. Kita lulus 100 persen. Sekolah kita juga meraih rata-rata nilai UN tertinggi dibanding sekolah negeri lain yaitu 77,87," ungkapnya, Jumat (15/5).'),
(4, '2017-08-17', 'pengumuman.png', 'PENDAFTARAN EKSTRAKURIKULER SMA NEGERI 3 KOTA JAMBI', 'PENDAFTARAN', 'Ekstrakurikuler SMA Negeri 3 Kota Jambi membuka pendaftaran bagi siswa/i yang ingin berpartisipasi dalam kegiatan Ekstrakurikuler tahun ajaran 2017-2018.\r\n\r\nBagi siswa/i yang berminat dapat mengambil dan mengisi formulir pendaftaran yang ada di ruang Tata Usaha.\r\n\r\nFormulir yang telah diisi dapat dikembalikan ke Staff Tata Usaha.\r\n\r\nPeriode pengambilan formulir dapat dimulai pada 01 September 2017 - 14 September 2017.');

-- --------------------------------------------------------

--
-- Table structure for table `ekskul_keilmuan`
--

CREATE TABLE `ekskul_keilmuan` (
  `kode_ekskul` varchar(20) NOT NULL,
  `nama_ekskul` varchar(20) NOT NULL,
  `tentang_ekskul` text NOT NULL,
  `struktur` text NOT NULL,
  `jadwal` text NOT NULL,
  `img1` varchar(200) NOT NULL,
  `img2` varchar(200) NOT NULL,
  `img3` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ekskul_keilmuan`
--

INSERT INTO `ekskul_keilmuan` (`kode_ekskul`, `nama_ekskul`, `tentang_ekskul`, `struktur`, `jadwal`, `img1`, `img2`, `img3`) VALUES
('eks2', 'Fisika', 'Ekstrakurikuler Fisika  merupakan wadah bagi siswa yang memiliki potensi dalam bidang fisika agar dapat berkembang secara optimal.\r\n\r\nTujuan :\r\nAgar siswa dapat mempersiapkan diri untuk untuk selalu siap berkompetensi sebagai uji kemampuan pemahaman materi matematika, baik di tingkat sekolah, kabupaten, provinsi, maupun tingkat nasional.\r\n\r\nMateri :\r\n1)    Pelajaran fisika tingkat SMA\r\n2)    fisika olimpiade\r\n', '>>SUSUNAN PENGURUS\r\n\r\n- Ketua: Wini Nafisyah\r\n- Wakil Ketua 1:Seprian \r\n- Wakil Ketua 2: Inggrid debora\r\n- Sekretaris 1: Novela Kusumawti\r\n- Sekretaris 2: Mutiara azzah\r\n- Bendahara 1 : Nur Elva Zuhrah\r\n- Bendahara 2 : Ester Juniartha\r\n- Kabid 1 : chris sandi\r\n- Wakabid 1 : Seilla Angelina\r\n- Kabid 2: Shofrie Satya Graha\r\n- Wakabid 2: Sonya Tri Maria\r\n', 'Pelaksanaan kegiatan rutin pertama dilakukan setiap hari Sabtu dimulai pukul 14.00 – 15.00', 'fisika1.jpg', 'fisika2.jpg', 'fisika3.jpg'),
('eks3', 'Ekonomi', 'Ekstrakurikuler Ekonomi merupakan wadah bagi siswa yang memiliki bakat/minat dalam bidang Ekonomi.\r\n\r\nTujuan :\r\nAgar siswa dapat mempersiapkan diri untuk untuk selalu siap berkompetensi sebagai uji kemampuan pemahaman materi Ekonomi, baik di tingkat sekolah, kabupaten, provinsi, maupun tingkat nasional.\r\n\r\nMateri :\r\n1)    Pelajaran Ekonomi tingkat SMA\r\n2)    Ekonomi olimpiade\r\n', '>>SUSUNAN PENGURUS\r\n\r\n- Ketua: Lidya Febriani\r\n- Wakil Ketua 1: Dwi Kurnia\r\n- Wakil Ketua 2: Febriansyah Putra\r\n- Sekretaris 1: Sri Hikmah\r\n- Sekretaris 2: Mutiara Azzah\r\n- Bendahara 1 : Vegi Resta\r\n- Bendahara 2 : Restu Wahyuni\r\n', 'Kegiatan pembinaan anggota diselenggarakan secara rutin setiap satu minggu sekali yaitu pada hari Kamis untuk siswa kelas X dan XI dan pada hari Jum’at  untuk siswa kelas XII pukul 14.30', 'ekonomi1.jpg', 'ekonomi2.jpg', 'ekonomi3.jpg'),
('eks4', 'Biologi', 'Ekstrakurikuler Biologi merupakan wadah bagi siswa yang memiliki bakat/minat dalam bidang Biologi.\r\n\r\nTujuan :\r\nAgar siswa dapat mempersiapkan diri untuk untuk selalu siap berkompetensi sebagai uji kemampuan pemahaman materi Biologi, baik di tingkat sekolah, kabupaten, provinsi, maupun tingkat nasional.\r\n\r\nMateri :\r\n1)    Pelajaran Biologi tingkat SMA\r\n2)    Biologi olimpiade\r\n', '>>SUSUNAN PENGURUS\r\n\r\n- Ketua: Rosdiana\r\n- Wakil Ketua 1: Vina Nicke\r\n- Wakil Ketua 2: Rut Yesika\r\n- Sekretaris 1: Andi Nur\r\n- Sekretaris 2: Mutiara Azzah\r\n- Bendahara 1 : Paulina\r\n- Bendahara 2 : Rezky Ilham\r\n- Kabid 1 : Gema Anugrah\r\n- Wakabid 1 : Eri Irawan\r\n', 'Kegiatan pembinaan anggota diselenggarakan secara rutin setiap satu minggu sekali yaitu pada hari Selasa untuk siswa kelas X dan XI dan pada hari Rabu untuk siswa kelas XII pukul 14.30', 'biologi1.jpg', 'biologi2.jpg', 'biologi3.jpg'),
('eks5', 'Kimia', 'Ekstrakurikuler Kimia merupakan wadah bagi siswa yang memiliki bakat/minat dalam bidang Kimia.\r\nTujuan :\r\n\r\nAgar siswa dapat mempersiapkan diri untuk untuk selalu siap berkompetensi sebagai uji kemampuan pemahaman materi Kimia, baik di tingkat sekolah, kabupaten, provinsi, maupun tingkat nasional.\r\n\r\nMateri :\r\n1)    Pelajaran Kimia tingkat SMA\r\n2)    Kimia olimpiade\r\n', '>>SUSUNAN PENGURUS\r\n\r\n\r\n- Ketua: Salomo\r\n- Wakil Ketua 1: Puspa Oktafiani\r\n- Wakil Ketua 2: Rico Ferdi\r\n- Sekretaris 1: M. Imam Maulana\r\n- Sekretaris 2: Firgi Anjas\r\n- Bendahara 1 : Sulfa Ratna\r\n- Bendahara 2 : Rani Nurfitriana\r\n- Kabid 1 : Charis Ahmad\r\n- Wakabid 1 : Ali Akbar\r\n- Kabid 2: Devi Siswani\r\n- Wakabid 2: Lili Indah Sari\r\n', 'Kegiatan pembinaan anggota diselenggarakan secara rutin setiap satu minggu sekali yaitu pada hari Rabu untuk siswa kelas X dan XI dan pada hari Kamis untuk siswa kelas XII pukul 15.00', 'kimia1.jpg', 'kimia2.jpg', 'kimia3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ekskul_non_keilmuan`
--

CREATE TABLE `ekskul_non_keilmuan` (
  `kode_ekskul` varchar(20) NOT NULL,
  `nama_ekskul` varchar(20) NOT NULL,
  `tentang_ekskul` text NOT NULL,
  `struktur` text NOT NULL,
  `jadwal` text NOT NULL,
  `img1` varchar(200) NOT NULL,
  `img2` varchar(200) NOT NULL,
  `img3` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ekskul_non_keilmuan`
--

INSERT INTO `ekskul_non_keilmuan` (`kode_ekskul`, `nama_ekskul`, `tentang_ekskul`, `struktur`, `jadwal`, `img1`, `img2`, `img3`) VALUES
('neks1', 'Paskibraka', 'Ekstrakurikuler Paskibra merupakan wadah bagi siswa yang memiliki minat dalam bidang upacara bendera, khususnya petugas dan pengibar bendera.\r\n\r\nTujuan :\r\n1)    Tujuan Umum:\r\na)    Membentuk manusia yang bertakwa terhadap Tuhan Yang Maha Esa\r\nb)    Meningkatkan rasa cinta tanah air, bangsa dan negara\r\nc)    Meningkatkan rasa disiplin dan percaya diri\r\nd)    Mengetahui aturan baris berbaris\r\n\r\n2)    Tujuan Khusus:\r\na)    Setiap anggota Paskibra dapat melaksanakan baris berbaris dengan benar\r\nb)    Setiap anggota Paskibra sanggup menjadi petugas upacara.\r\n\r\nMateri:\r\n1)    PBB I s.d. PBB X\r\n2)    Sejarah Paskibra\r\n3)    Aturan Tata Upacara Bendera\r\n4)    Pola variasi dan formasi PBB\r\n', '>>SUSUNAN PENGURUS\r\n\r\n- Ketua: Agung Ramadhan\r\n- Wakil Ketua 1: Ahmad Ramadhan \r\n- Wakil Ketua 2: Anugerah Fadhil\r\n- Sekretaris 1: Rizki Maharani\r\n- Sekretaris 2: Memito Nigel\r\n- Bendahara 1 : Diska Andini\r\n- Bendahara 2 : Nugraha Nansyah\r\n- Kabid 1 : Muhammad Yusuf\r\n- Wakabid 1 : Teja Bagus\r\n- Kabid 2: Wilson\r\n- Wakabid 2: Putri Maharani\r\n', 'Latihan Rutin (senin, rabu, jum’at,sabtu),  Pukul  15.00\r\nTempat : Lapangan Upacara SMA Negeri 3 Kota Jambi\r\n', 'paskib1.jpg', 'paskib2.jpg', 'paskib3.jpg'),
('neks2', 'Basket', 'Ekstrakurikuler olah raga bola basket merupakan wadah bagi siswa yang memiliki bakat/minat dalam bidang bola basket.\r\n\r\nTujuan \r\n1)    Tujuan Umum:\r\nMenjadikan manusia Indonesia pada umumnya dan siswa SMA Negeri 3 Kota Jambi pada khususnya memiliki jasmani dan rohani yang sehat dan berani menegakkan kebenaran dan kejujuran, meningkatkan prestasi dan menjunjung nama baik SMA Negeri 3 Kota Jambi.\r\n2)    Tujuan Khusus:\r\nUntuk memberikan kesempatan kepada peserta didik dalam mengembangkan bakat dan minat di bidang olah raga bola basket hingga mencapai prestasi yang diharapkan, baik di tingkat kabupaten maupun di tingkat provinsi.\r\n\r\nMateri:\r\n1)    Olah raga yang sifatnya untuk pembentukan, penguatan dan ketahanan fisik.\r\n2)    Teknik permainan bola basket.\r\n', '>>SUSUNAN PENGURUS\r\n\r\n- Ketua: Selamet Kurniawan\r\n- Wakil Ketua 1: Adhi Saputra \r\n- Wakil Ketua 2: Febriansyah Putra\r\n- Sekretaris 1: Bagus Dwi Saputro\r\n- Sekretaris 2: Jaka Prasaja\r\n- Bendahara 1 : Fezi Rahma\r\n- Bendahara 2 : Dina Juliana\r\n- Kabid 1 : Muhammad Yusuf\r\n- Wakabid 1 : Teja Bagus\r\n- Kabid 2: putra Wijaya\r\n- Wakabid 2: Budi Jaya\r\n', '1)    Latihan rutin setiap hari Sabtu pada jadwal pengembangan diri\r\n2)    Latihan pada hari Selasa dan Jumat pukul : 16.00\r\n\r\nTempat : Lapangan  Olahraga SMA Negeri 3 Kota jambi\r\n', 'basket1.jpg', 'basket2.jpg', 'basket3.jpg'),
('neks3', 'Sepak Bola', 'Ekstrakurikuler olah raga sepak bola merupakan wadah bagi siswa yang memiliki bakat/minat dalam bidang sepak bola.\r\n\r\nTujuan \r\n1)    Tujuan Umum:\r\nMenjadikan manusia Indonesia pada umumnya dan siswa SMA Negeri 3 Kota Jambi pada khususnya memiliki jasmani dan rohani yang sehat dan berani menegakkan kebenaran dan kejujuran, meningkatkan prestasi dan menjunjung nama baik SMA Negeri 3 Kota Jambi\r\n\r\n2)    Tujuan Khusus:\r\nUntuk memberikan kesempatan kepada peserta didik dalam mengembangkan bakat dan minat di bidang olah raga sepak bola hingga mencapai prestasi yang diharapkan, baik di tingkat kabupaten maupun di tingkat provinsi.\r\n\r\nMateri:\r\n1)    Olah raga yang sifatnya untuk pembentukan, penguatan dan ketahanan fisik.\r\n2)    Teknik permainan sepak bola.\r\n\r\n', '>>SUSUNAN PENGURUS\r\n\r\n- Ketua: Aldrian Adithia\r\n- Wakil Ketua 1: Alfadoly Wafi \r\n- Wakil Ketua 2: Agung Ramadhan\r\n- Sekretaris 1: Ilham Ramadiargo\r\n- Sekretaris 2: Muhammad Prima\r\n- Bendahara 1 : Muhammad Ridho \r\n- Bendahara 2 : Subiyakto Tegar\r\n- Kabid 1 : Agus Riyadi\r\n- Wakabid 1 : Teja Bagus\r\n- Kabid 2: Kevin Muttaqin\r\n- Wakabid 2: Budi Jaya\r\n', '1)    Latihan rutin setiap hari Sabtu pada jadwal pengembangan diri\r\n2)    Latihan pada hari Selasa sore hari pukul 16.00\r\n', 'sepak_bola1.jpg', 'sepak_bola2.jpg', 'sepak_bola3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`kode_berita`);

--
-- Indexes for table `ekskul_keilmuan`
--
ALTER TABLE `ekskul_keilmuan`
  ADD PRIMARY KEY (`kode_ekskul`);

--
-- Indexes for table `ekskul_non_keilmuan`
--
ALTER TABLE `ekskul_non_keilmuan`
  ADD PRIMARY KEY (`kode_ekskul`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `kode_berita` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
