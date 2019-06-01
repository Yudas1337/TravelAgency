-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2019 at 09:06 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_travelagency`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_artikel`
--

CREATE TABLE `tb_artikel` (
  `id_artikel` int(10) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `artikel` varchar(3000) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `status` int(1) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_artikel`
--

INSERT INTO `tb_artikel` (`id_artikel`, `judul`, `tanggal`, `artikel`, `foto`, `status`, `username`) VALUES
(1, 'Wisata Coban Rondo', 'Tuesday 02 April 2019', '<p>Kota Malang Jawa Timur merupakan salah satu kota yang memiliki banyak kawasan wisata yang diincar oleh para wisatawan. Ada banyak obyek wisata yang sekarang ini sudah mulai digemari oleh wisatawan baik lokal dan juga mancanegara.  Ada banyak obyek wisata yang bisa dikunjungi bersama keluarga dan pasangan.Di sini sudah ada taman rekreasi keluarga yang sangat menarik yang tentu saja sudah bisa dikunjungi dengan mudah. Apalagi dengan banyaknya fasilitas yang ada di dalamnya. Semuanya terletak di kota Batu yang cukup dingin dan sejuk. Salah satunya adalah Museum Angkut dan juga Eco Green Park yang tentu saja bisa memberikan rekreasi serta tamasya keluarga nan mengasyikkan. Kawasan wisata keluarga, ternyata Malang juga mampu menyajikan keindahan alam yang tentu saja sangat mempesona. Salah satunya adalah Coban Rondo. Kawasan wisata ini menyajikan panorama eksotis dengan adanya waterfall dan juga tebing hijau yang indah dan menyegarkan. Arti dari Coban sendiri adalah air terjun  yang menjadi pesona utama di kawasan wisata ini.\\r\\n\\r\\n \\r\\n\\r\\n \\r\\n\\r\\n \\r\\n\\r\\n \\r\\n\\r\\n \\r\\n</p>', '1549796846.jpg', 1, 'Yudas Malabi'),
(2, 'Tanah Lot Bali', 'Tuesday 02 April 2019', '<p>Tanah lot ini merupakan objek wisata yang sangat terkenal karena tanah lot merupakan objek yang mempunyai bongkahan tebing yang berada ditengah pantai yang di atasnya terdapat pura. Bongkahan tebing tersebut pada sore hari tidak dapat dinikmati secara dekat karena adanya gejala alam yang disebut pasang surut. Selain itu, gerakan gelombangnya yang unik dan struktur geologinya yang menarik untuk dikaji. </p>\r\n\r\n<p> </p>\r\n\r\n<p> </p>\r\n\r\n<p> </p>\r\n\r\n<h2>Pengertian Tanah Lot</h2>\r\n\r\n<p>Tanah lot berasal dari dua kata yaitu tanah dan laut.  Tanah yang diartikan sebagai karang seperti pulau kecil (gili), sedangkan Lot atau lod berarti Laut. Tetapi karena suatu pengucapan yang dianggap terlalu panjang dan tidak efektif maka disingkat dengan tanah lot. Jadi Tanah Lot adalah pulau kecil yang terapung di laut. Tanah lot tersebut merupakan tanah yang berupa tebing yang berada di tengah pantai atau tebing yang berada di pinggir laut. Dan di atas tebing tersebut terdapat pura. Pura Luhur Tanah Lot atau biasa disingkat menjadi Pura Tanah Lot merupakan salah satu Pura Sad Kahyangan, yaitu pura yang dipercaya oleh orang Hindu sebagai sendi-sendi penjaga pulau dewata. </p>', '1551701754.jpg', 1, 'Aminulloh'),
(3, 'Candi Borobudur', 'Tuesday 02 April 2019', 'Borobudur adalah sebuah candi Buddha yang terletak di Borobudur, Magelang, Jawa Tengah, Indonesia. Lokasi candi adalah kurang lebih 100 km di sebelah barat daya Semarang, 86 km di sebelah barat Surakarta, dan 40 km di sebelah barat laut Yogyakarta. Candi berbentuk stupa ini didirikan oleh para penganut agama Buddha Mahayana sekitar tahun 800-an Masehi pada masa pemerintahan wangsa Syailendra. Borobudur adalah candi atau kuil Buddha terbesar di dunia,sekaligus salah satu monumen Buddha terbesar di dunia.</p>\r\n\r\n<p> </p>\r\n\r\n<p>Monumen ini terdiri atas enam teras berbentuk bujur sangkar yang diatasnya terdapat tiga pelataran melingkar, pada dindingnya dihiasi dengan 2.672 panel relief dan aslinya terdapat 504 arca Buddha.[4] Borobudur memiliki koleksi relief Buddha terlengkap dan terbanyak di dunia.[3] Stupa utama terbesar teletak di tengah sekaligus memahkotai bangunan ini, dikelilingi oleh tiga barisan melingkar 72 stupa berlubang yang di dalamnya terdapat arca buddha tengah duduk bersila dalam posisi teratai sempurna dengan <em>mudra</em> (sikap tangan) <em>Dharmachakra mudra</em> (memutar roda dharma).</p>\r\n\r\n<p>Monumen ini merupakan model alam semesta dan dibangun sebagai tempat suci untuk memuliakan Buddha sekaligus berfungsi sebagai tempat ziarah untuk menuntun umat manusia beralih dari alam nafsu duniawi menuju pencerahan dan kebijaksanaan sesuai ajaran Buddha.Para peziarah masuk melalui sisi timur memulai ritual di dasar candi dengan berjalan melingkari bangunan suci ini searah jarum jam, sambil terus naik ke undakan berikutnya melalui tiga tingkatan ranah dalam kosmologi Buddha. Ketiga tingkatan itu adalah <em>KÄmadhÄtu</em> (ranah hawa nafsu), <em>Rupadhatu</em> (ranah berwujud), dan <em>Arupadhatu</em> (ranah tak berwujud). Dalam perjalanannya ini peziarah berjalan melalui serangkaian lorong dan tangga dengan menyaksikan tak kurang dari 1.460 panel relief indah yang terukir pada dinding dan pagar langkan.</p>', '15542218581549798464.jpg', 1, 'AllisaNahla');

-- --------------------------------------------------------

--
-- Table structure for table `tb_berlangganan`
--

CREATE TABLE `tb_berlangganan` (
  `id_langganan` int(10) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_berlangganan`
--

INSERT INTO `tb_berlangganan` (`id_langganan`, `email`) VALUES
(1, 'yudasmalabi@gmail.com'),
(2, 'aminulloh@gmail.com'),
(3, 'test@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_inbox`
--

CREATE TABLE `tb_inbox` (
  `id_inbox` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pesan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_inbox`
--

INSERT INTO `tb_inbox` (`id_inbox`, `nama`, `email`, `pesan`) VALUES
(1, 'Yudas Malabi', 'yudasmalabi@gmail.com', 'TES KONTAK'),
(2, 'Aminulloh', 'aminulloh@gmail.com', 'Mantep Banget Gan Website nya :)'),
(3, 'test', 'test@gmail.com', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `tb_komentar`
--

CREATE TABLE `tb_komentar` (
  `id_komentar` int(10) NOT NULL,
  `id_artikel` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `komentar` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_komentar`
--

INSERT INTO `tb_komentar` (`id_komentar`, `id_artikel`, `nama`, `email`, `komentar`) VALUES
(1, 3, 'Yudas', 'yudasmalabi@gmail.com', 'mantul'),
(2, 3, 'Yudas', 'yudasmalabi@gmail.com', 'test'),
(3, 1, 'Yudas', 'yudasmalabi@gmail.com', 'test komentar');

-- --------------------------------------------------------

--
-- Table structure for table `tb_maskapai`
--

CREATE TABLE `tb_maskapai` (
  `id_maskapai` int(10) NOT NULL,
  `maskapai` varchar(50) NOT NULL,
  `gambar_maskapai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_maskapai`
--

INSERT INTO `tb_maskapai` (`id_maskapai`, `maskapai`, `gambar_maskapai`) VALUES
(1, 'Garuda Indonesia', '15547427321.png'),
(2, 'Lion Air', '2.jpg'),
(3, 'Citilink', '3.png'),
(4, 'Batik Air', '4.png'),
(5, 'Sriwijaya Air', '5.png'),
(6, 'AirAsia', '6.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_testimoni`
--

CREATE TABLE `tb_testimoni` (
  `id_testimoni` int(11) NOT NULL,
  `testimoni` varchar(225) NOT NULL,
  `nama_user` varchar(150) NOT NULL,
  `email_user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_testimoni`
--

INSERT INTO `tb_testimoni` (`id_testimoni`, `testimoni`, `nama_user`, `email_user`) VALUES
(3, 'Awalnya saya coba2 , lama - lama ketagihan . terimakasih travel agency', 'Dara Maulana', 'daramaulana@gmail.com'),
(4, 'Mantap sekali travel agency , pelayanan cepat dan professional', 'Vivi Aini', 'viviaini@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tiket`
--

CREATE TABLE `tb_tiket` (
  `id_tiket` int(10) NOT NULL,
  `id_maskapai` int(10) NOT NULL,
  `maskapai` varchar(30) NOT NULL,
  `jenis_penerbangan` varchar(30) NOT NULL,
  `nomor_penerbangan` varchar(50) NOT NULL,
  `tiket_berangkat` varchar(50) NOT NULL,
  `tiket_tujuan` varchar(30) NOT NULL,
  `tanggal_berangkat` varchar(30) NOT NULL,
  `tanggal_datang` varchar(30) NOT NULL,
  `waktu_keberangkatan` varchar(10) NOT NULL,
  `waktu_datang` varchar(10) NOT NULL,
  `harga_tiket` double NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `stok_tiket` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tiket`
--

INSERT INTO `tb_tiket` (`id_tiket`, `id_maskapai`, `maskapai`, `jenis_penerbangan`, `nomor_penerbangan`, `tiket_berangkat`, `tiket_tujuan`, `tanggal_berangkat`, `tanggal_datang`, `waktu_keberangkatan`, `waktu_datang`, `harga_tiket`, `kelas`, `stok_tiket`) VALUES
(1, 1, 'Garuda Indonesia', 'International', 'GA-212', 'Jakarta', 'Arab', 'Saturday 20 April 2019', 'Sunday 21 April 2019', '18:00', '00:00', 10200000, 'First Class', 200),
(2, 1, 'Garuda Indonesia', 'Domestik', 'GA-50', 'Jakarta', 'Surabaya', 'Friday 19 April 2019', 'Friday 19 April 2019', '10:06', '11:06', 400000, 'Ekonomi', 200),
(3, 2, 'Lion Air', 'Domestik', 'JT-330', 'Denpasar', 'Balikpapan', 'Thursday 25 April 2019', 'Thursday 25 April 2019', '13:08', '14:30', 800000, 'Ekonomi', 200),
(4, 2, 'Lion Air', 'International', 'JT-GG0', 'Jakarta', 'Kuala Lumpur', 'Wednesday 24 April 2019', 'Wednesday 24 April 2019', '04:11', '06:11', 1100000, 'Eksekutif', 200),
(5, 3, 'Citilink', 'Domestik', 'QG-552', 'Jawa Barat', 'Jambi', 'Tuesday 23 April 2019', 'Tuesday 23 April 2019', '20:23', '21:50', 600000, 'Bisnis', 200),
(6, 3, 'Citilink', 'International', 'QG-666', 'Jakarta', 'Singapura', 'Tuesday 23 April 2019', 'Tuesday 23 April 2019', '20:26', '22:26', 2250000, 'First Class', 200),
(7, 4, 'Batik Air', 'Domestik', 'ID-474', 'Aceh', 'Semarang', 'Saturday 27 April 2019', 'Saturday 27 April 2019', '06:50', '09:30', 400000, 'Ekonomi', 200),
(8, 4, 'Batik Air', 'International', 'ID-527', 'Jakarta', 'Thailand', 'Wednesday 24 April 2019', 'Wednesday 24 April 2019', '01:39', '05:10', 3950000, 'Bisnis', 200),
(9, 5, 'Sriwijaya Air', 'Domestik', 'SJ-1337', 'Aceh', 'Jakarta', 'Thursday 25 April 2019', 'Thursday 25 April 2019', '20:30', '22:30', 900000, 'Bisnis', 200),
(10, 5, 'Sriwijaya Air', 'International', 'SJ-888', 'Jakarta', 'Singapura', 'Tuesday 23 April 2019', 'Tuesday 23 April 2019', '15:30', '20:25', 1100000, 'First Class', 200),
(11, 6, 'AirAsia', 'Domestik', 'QZ-921', 'Surabaya', 'Papua', 'Thursday 18 April 2019', 'Thursday 18 April 2019', '13:16', '17:30', 500000, 'Bisnis', 200),
(12, 6, 'AirAsia', 'International', 'QZ-828', 'Jakarta', 'Malaysia', 'Tuesday 30 April 2019', 'Tuesday 30 April 2019', '15:30', '18:30', 1000000, 'Bisnis', 200),
(13, 1, 'Garuda Indonesia', 'Domestik', 'GA- 157', 'Balikpapan', 'Makassar', 'Saturday 20 April 2019', 'Saturday 20 April 2019', '18:10', '20:11', 1500000, 'Ekonomi', 150),
(14, 2, 'Lion Air', 'Domestik', 'JT-666', 'Denpasar', 'Malang', 'Tuesday 23 April 2019', 'Tuesday 23 April 2019', '15:15', '16:15', 1000000, 'Bisnis', 150),
(15, 3, 'Citilink', 'Domestik', 'QG-967', 'Palembang', 'Papua', 'Monday 22 April 2019', 'Monday 22 April 2019', '20:19', '23:19', 1100000, 'Ekonomi', 125);

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` int(10) NOT NULL,
  `id_tiket` int(10) NOT NULL,
  `kode_tiket` varchar(255) NOT NULL,
  `id_user` int(10) NOT NULL,
  `title` varchar(10) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `alamat_user` varchar(125) NOT NULL,
  `jumlah_pembelian` varchar(4) NOT NULL,
  `gambar_pembayaran` varchar(100) NOT NULL,
  `harga_total` double NOT NULL,
  `tanggal_pembelian` date NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(10) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `foto_user` varchar(128) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `alamat_user` varchar(255) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `password_user` varchar(130) NOT NULL,
  `role_id` varchar(1) NOT NULL,
  `date_created` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `foto_user`, `email_user`, `alamat_user`, `no_telepon`, `gender`, `password_user`, `role_id`, `date_created`) VALUES
(1, 'Yudas Malabi', 'yudas.png', 'yudasmalabi@gmail.com', 'Jl Welirang No 74', '081359158535', 'Male', '$2y$10$/iBDZ4q7w.R5DU0uy4QXN.8LbCVpImu/aE2mUAgFfoPWbYdj5DKw2', '1', '1553620289'),
(2, 'Nasrullah', 'nasrul.png', 'nasrullah@gmail.com', 'Mojo', '0895630696536', 'Male', '$2y$10$pl46CbpsWXMxjSlIJ8kjruoCgQZNTGTMhFnpM4dsvIKKAFs3EfWvu', '1', '1553820289'),
(3, 'Aminulloh', 'amin.png', 'aminulloh@gmail.com', 'Brongkal', '089650116606', 'Male', '$2y$10$.PTnAhdb1QrkY26gTYbxouctfcMR8aZHKcvXAaamdCLNfhwp7hWLS', '1', '1554008448'),
(4, 'Allisanahla', 'default_female.jpg', 'allisanahla@gmail.com', 'Turen', '083813139801', 'Female', '$2y$10$wxTphnHcfMW7yxh2lBEP7uQzNdHxE8UH934JLX2aFWuS9l/9x5Q8e', '2', '1554008817'),
(5, 'Dara Maulana', 'default_male.jpg', 'daramaulana@gmail.com', 'Sukun', '082139135758', 'Male', '$2y$10$8qEhTIQ./0Icoi2sadWzhO8XN.O4XK37pvVRt/0XSH5y0Fot6p9e6', '2', '1554023710'),
(6, 'Vivi Aini', 'default_female.jpg', 'viviaini@gmail.com', 'Kepanjen', '08984168008', 'Female', '$2y$10$jTUC65rXUWqq5oAjZcQtsOIE7KKjJdgPEllM9DB2vSL/2ld4UC5im', '2', '1554025572'),
(7, 'Ferdinand', 'default_male.jpg', 'conge@gmail.com', 'Kauman', '089680275280', 'Male', '$2y$10$FPj4UzF3CxSXyDMgDGu0neObXgwHhwX4gvmPtcEHVw1OYkElkkZiK', '1', '1555545387'),
(8, 'Alif', 'yudas11.png', 'alif@gmail.com', 'Kromengan', '08125343206', 'Male', '$2y$10$93rMDKUSCXum5PEIVRjW7OYwSD1fFTF/pYwEuvGi4WjTEBDR/FHA6', '2', '1555570156');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `tb_berlangganan`
--
ALTER TABLE `tb_berlangganan`
  ADD PRIMARY KEY (`id_langganan`);

--
-- Indexes for table `tb_inbox`
--
ALTER TABLE `tb_inbox`
  ADD PRIMARY KEY (`id_inbox`);

--
-- Indexes for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `tb_maskapai`
--
ALTER TABLE `tb_maskapai`
  ADD PRIMARY KEY (`id_maskapai`);

--
-- Indexes for table `tb_testimoni`
--
ALTER TABLE `tb_testimoni`
  ADD PRIMARY KEY (`id_testimoni`);

--
-- Indexes for table `tb_tiket`
--
ALTER TABLE `tb_tiket`
  ADD PRIMARY KEY (`id_tiket`),
  ADD KEY `id_maskapai` (`id_maskapai`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_tiket` (`id_tiket`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  MODIFY `id_artikel` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_berlangganan`
--
ALTER TABLE `tb_berlangganan`
  MODIFY `id_langganan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_inbox`
--
ALTER TABLE `tb_inbox`
  MODIFY `id_inbox` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
  MODIFY `id_komentar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_maskapai`
--
ALTER TABLE `tb_maskapai`
  MODIFY `id_maskapai` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_testimoni`
--
ALTER TABLE `tb_testimoni`
  MODIFY `id_testimoni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_tiket`
--
ALTER TABLE `tb_tiket`
  MODIFY `id_tiket` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_transaksi` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
