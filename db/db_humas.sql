-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2023 at 09:13 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_humas`
--

-- --------------------------------------------------------

--
-- Table structure for table `aspirasi`
--

CREATE TABLE `aspirasi` (
  `id_aspirasi` int(11) NOT NULL,
  `nm_lengkap` varchar(50) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` varchar(10) NOT NULL,
  `id_kategori_aspirasi` int(11) NOT NULL,
  `pesan` text NOT NULL,
  `status` char(1) NOT NULL,
  `tindakan` varchar(100) DEFAULT NULL,
  `id_unit_kerja` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aspirasi`
--

INSERT INTO `aspirasi` (`id_aspirasi`, `nm_lengkap`, `no_hp`, `tanggal`, `jam`, `id_kategori_aspirasi`, `pesan`, `status`, `tindakan`, `id_unit_kerja`) VALUES
(4, 'Noor Aina', '+6208765499977', '2023-02-27', '01:59', 2, 'KEPADA YTH : KETUA DEWAN PERWAKILAN RAKYAT DAERAH\r\nKALIMANTAN SELATAN\r\nDi -\r\nTempat.\r\nPERIHAL : ASPIRASI MASYARAKAT\r\n\r\nDengan Hormat,\r\nSalam sejahtera untuk kita sekalian, sering doâ€™a semoga kita semua selalu sehat walafiat dan senantiasa dalam lindungan Allah SWT. Dalam melaksanakan tugas dan aktivitas keseharian kita. Amin.\r\nSehubung dengan maraknya banjir di beberapa daerah, saya selaku perwakilan masyarakat ingin pemerintah segera menyediakan tempat pembuangan sampah di sekitar wilayah penduduk, serta memberikan penyuluhan akan bahayanya membuang sampah sembarangan agar tidak terjadinya penyumbatan saluran irigasi\r\nDemikian aspirasi aduan saya sampaikan berharap mendapatkan solusi dari DPRD KAL-SEL\r\n\r\nTerima Kasih.', '1', NULL, NULL),
(5, 'Natiqah Al-Hajidin', '+6208765934681', '2023-02-27', '02:37', 2, 'KEPADA YTH : KETUA DEWAN PERWAKILAN RAKYAT DAERAH\r\nKALIMANTAN SELATAN\r\nDi -\r\nTempat.\r\nPERIHAL : ASPIRASI MASYARAKAT\r\n\r\nDengan Hormat,\r\nSalam sejahtera untuk kita sekalian, seiring doâ€™a semoga kita semua selalu sehat walafiat dan senantiasa dalam lindungan Allah SWT. Dalam melaksanakan tugas dan aktivitas keseharian kita. Amin.\r\nSelanjutnya dalam rangka meningkatkan infrastruktur lingkungan pemukiman, salah satunya jalan lingkungan, merupakan salah satu penunjang pertumbuhan ekonomi masyarakat, dengan tersedianya jalan yang memadai maka akan mempengaruhi berbagai aspek kehidupan masyarakat.untuk itu kami warga masyarakat RW 005 beserta tokoh masyarakat bermaksud mengajukan permohonan peningkatan jalan lingkungan dengan panjang 1000 M. adapun biaya yang kami butuhkan sekitar Rp.767.380.000 ( Tujuh Ratus Enam Puluh Tujuh Juta Tiga Ratus Delapan Puluh Ribu Rupiah ).RAB Terlampir.\r\nDemikian aspirasi aduan saya sampaikan berharap mendapatkan solusi dari DPRD KAL-SEL\r\n\r\nTerima Kasih.', '1', NULL, NULL),
(6, 'Sugianor', '+6285248113466', '2023-02-28', '00:28', 4, 'KEPADA YTH : KETUA DEWAN PERWAKILAN RAKYAT DAERAH\r\nKALIMANTAN SELATAN\r\nDi -\r\nTempat.\r\nPERIHAL : ASPIRASI MASYARAKAT\r\n\r\nDengan Hormat,\r\nSalam sejahtera untuk kita sekalian, seiring doâ€™a semoga kita semua selalu sehat walafiat dan senantiasa dalam lindungan Allah SWT. Dalam melaksanakan tugas dan aktivitas keseharian kita. Amin.\r\npermasalahan sulitnya masyarakat di Kecamatan Arcamanik melanjutkan ke Sekolah Menengah Pertama (SMP) dan Sekolah Menengah Atas (SMA). \r\n\"SMP dan SMA Negeri di Kecamatan Arcamanik ini ada di perbatasan dengan kecamatan lain sehingga dengan sistem zonasi yang dipakai, tidak semua masyarakat di Kecamatan Arcamanik bisa sekolah di sana.\r\nDemikian aspirasi aduan saya sampaikan berharap mendapatkan solusi dari DPRD KAL-SEL\r\n\r\nTerima Kasih.', '1', NULL, NULL),
(7, 'Nitha putri', '+6287654218723', '2023-02-28', '00:35', 3, 'KEPADA YTH : KETUA DEWAN PERWAKILAN RAKYAT DAERAH\r\nKALIMANTAN SELATAN\r\nDi -\r\nTempat.\r\nPERIHAL : ASPIRASI MASYARAKAT\r\n\r\nDengan Hormat,\r\nSalam sejahtera untuk kita sekalian, seiring doâ€™a semoga kita semua selalu sehat walafiat dan senantiasa dalam lindungan Allah SWT. Dalam melaksanakan tugas dan aktivitas keseharian kita. Amin.\r\nSelanjutnya masyarakat mengeluhkan pengangguran di Kota Banjarmasin yang cukup tinggi, serta adanya temuan perusahaan yang membayar upah dibawah batas minimum.\r\n\r\nDemikian aspirasi aduan saya sampaikan berharap mendapatkan solusi dari DPRD KAL-SEL\r\n\r\nTerima Kasih.', '1', NULL, NULL),
(8, 'Irwansyah', '+6282012765478', '2023-02-28', '00:53', 4, 'KEPADA YTH : KETUA DEWAN PERWAKILAN RAKYAT DAERAH\r\nKALIMANTAN SELATAN\r\nDi -\r\nTempat.\r\nPERIHAL : ASPIRASI MASYARAKAT\r\n\r\nDengan Hormat,\r\nSalam sejahtera untuk kita sekalian, seiring doâ€™a semoga kita semua selalu sehat walafiat dan senantiasa dalam lindungan Allah SWT. Dalam melaksanakan tugas dan aktivitas keseharian kita. Amin.\r\nDemikian saya memaparkan aspirasi masyarakat di bidang perekonomian diantaranya adalah pembuatan pasar tradisional di Pondok Kelapa dan Cipayung, pembinaan UKM hingga mendapat modal dari bank DKI, penertiban PKL yang berjualan di trotoar, penyediaan penjaga persimpangan rel di Jalan Delman Kelurahan Kebayoran Lama Utara, dan pembenahan kebijakan jalan satu arah di Jalan Bintaro Permai.\r\n\r\nDemikian aspirasi aduan saya sampaikan berharap mendapatkan solusi dari DPRD\r\n\r\nTerima Kasih.', '1', NULL, NULL),
(9, 'Yuda Pratama', '+6284521785430', '2023-02-28', '01:12', 4, 'KEPADA YTH : KETUA DEWAN PERWAKILAN RAKYAT DAERAH\r\nKALIMANTAN SELATAN\r\nDi -\r\nTempat.\r\nPERIHAL : ASPIRASI MASYARAKAT\r\n\r\nDengan Hormat,\r\nSalam sejahtera untuk kita sekalian, seiring doâ€™a semoga kita semua selalu sehat walafiat dan senantiasa dalam lindungan Allah SWT. Dalam melaksanakan tugas dan aktivitas keseharian kita. Amin.\r\nSementara itu di bidang pembangunan banyak fasos fasum, taman-taman yang tidak terawat. Untuk itu warga masyarakat mengharapkan agar pemda merawat dengan baik. \r\nDemikian aspirasi aduan saya sampaikan berharap mendapatkan solusi dari DPRD\r\n\r\nTerima Kasih.', '1', NULL, NULL),
(10, 'Siti Rahmi', '+62856218972390', '2023-02-28', '01:24', 3, 'KEPADA YTH : KETUA DEWAN PERWAKILAN RAKYAT DAERAH\r\nKALIMANTAN SELATAN\r\nDi -\r\nTempat.\r\nPERIHAL : ASPIRASI MASYARAKAT\r\n\r\nDengan Hormat,\r\nSalam sejahtera untuk kita sekalian, seiring doâ€™a semoga kita semua selalu sehat walafiat dan senantiasa dalam lindungan Allah SWT. Dalam melaksanakan tugas dan aktivitas keseharian kita. Amin.\r\nMasyarakat meminta agar normalisasi kali dilanjutkan di tiap wilayah, program kampung kumuh juga harus dilanjutkan karena akan bermanfaat bagi masyarakat. Sementara itu, penataan jalur hijau, penertiban bangunan, pembuatan rusunawa, pembangunan RSUD, perbaikan dan pembangunan jalan.\r\nDemikian aspirasi aduan saya sampaikan berharap mendapatkan solusi dari DPRD KAL-SEL\r\n\r\nTerima Kasih.', '1', NULL, NULL),
(11, 'Gustiana', '+628324152678', '2023-02-28', '01:34', 3, 'KEPADA YTH : KETUA DEWAN PERWAKILAN RAKYAT DAERAH\r\nKALIMANTAN SELATAN\r\nDi -\r\nTempat.\r\nPERIHAL : ASPIRASI MASYARAKAT\r\n\r\nDengan Hormat,\r\nSalam sejahtera untuk kita sekalian, seiring doâ€™a semoga kita semua selalu sehat walafiat dan senantiasa dalam lindungan Allah SWT. Dalam melaksanakan tugas dan aktivitas keseharian kita. Amin.\r\nHal-hal lain yang juga diminta warga diantaranya adalah memberantas preman atau oknum dalam mengurus pemakaman, meningkatkan anggaran terhadap PAUD, membantu pembangunan tempat ibadah dan puskesmas, penyediaan ambulans, dan rehabilitasi sekolah.\r\nDemikian aspirasi aduan saya sampaikan berharap mendapatkan solusi dari DPRD KAL-SEL\r\n\r\nTerima Kasih.', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `disposisi`
--

CREATE TABLE `disposisi` (
  `id_disposisi` int(11) NOT NULL,
  `id_surat_masuk` int(11) NOT NULL,
  `id_unit_kerja` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disposisi`
--

INSERT INTO `disposisi` (`id_disposisi`, `id_surat_masuk`, `id_unit_kerja`) VALUES
(1, 10, 3),
(2, 9, 4),
(3, 8, 3),
(4, 7, 3),
(5, 6, 6),
(6, 5, 4),
(7, 4, 2),
(8, 3, 3),
(9, 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kegiatan`
--

CREATE TABLE `jenis_kegiatan` (
  `id_jenis_kegiatan` int(11) NOT NULL,
  `nm_jenis_kegiatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_kegiatan`
--

INSERT INTO `jenis_kegiatan` (`id_jenis_kegiatan`, `nm_jenis_kegiatan`) VALUES
(2, 'Publikasi'),
(3, 'Protokol dan Aspirasi'),
(4, 'Pengajuan dan Pengembangan');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_surat`
--

CREATE TABLE `jenis_surat` (
  `id_jenis_surat` int(11) NOT NULL,
  `nm_jenis_surat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_surat`
--

INSERT INTO `jenis_surat` (`id_jenis_surat`, `nm_jenis_surat`) VALUES
(2, 'Surat Keputusan'),
(3, 'Surat Edaran'),
(5, 'Surat Permohonan'),
(6, 'Surat Tugas'),
(7, 'Surat Dinas'),
(8, 'Surat Perintah');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_aspirasi`
--

CREATE TABLE `kategori_aspirasi` (
  `id_kategori_aspirasi` int(11) NOT NULL,
  `nm_kategori_aspirasi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_aspirasi`
--

INSERT INTO `kategori_aspirasi` (`id_kategori_aspirasi`, `nm_kategori_aspirasi`) VALUES
(2, 'Layanan'),
(3, 'Kesejahteraan'),
(4, 'Informasi');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `nm_kegiatan` varchar(100) NOT NULL,
  `id_jenis_kegiatan` int(11) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `nm_kegiatan`, `id_jenis_kegiatan`, `tgl_mulai`, `tgl_selesai`, `tempat`, `ket`) VALUES
(1, 'RAPAT PARIPURNA AGENDA PENGUCAPAN SUMPAH / JANJI ANGGOTA DPRD', 2, '2023-02-19', '2023-02-19', 'KANTOR DPRD KAL-SEL', 'Dalam Rapat Paripurna dengan agenda pengucapan sumpah janji anggota DPRD Kalsel pada Rabu (19/10) pagi, H. Risdianto Haleng HB resmi dilantik menggantikan almarhum H. Hamsyuri dari fraksi PKB. Hal tersebut berdasarkan Surat Keputusan Menteri Dalam Negeri Republik Indonesia nomor 161.63-5825'),
(2, 'MELIPUTI ACARA RAMAH TAMAH SEKRETARIAT DPRD PROVINSI KALSEL DENGAN KAFILAH PROVINSI BALI PADA MTQ NA', 2, '2023-02-17', '2023-02-17', 'KANTOR DPRD KAL-SEL', 'Sekretariat DPRD Provinsi Kalimantan Selatan (Kalsel) mendapat apresiasi dari Kafilah Provinsi Bali selama pelaksanaan Musabaqah Tilawatil Quran (MTQ) Tingkat Nasional XXIX Tahun 2022, yang diselenggarakan dari 10-19 Oktober 2022 di Bumi Lambung Mangkurat.'),
(3, 'RAPAT BAPEMPERDA', 3, '2023-02-15', '2023-02-18', 'KANTOR DPRD KAL-SEL', 'Saat ini sedang dilakukan penyusunan di masing-masing komisi, rencana jadwal terdekat tanggal 15&18 Februari, komisi akan bertemu dengan tenaga ahli penyusun untuk membuat rumusan-rumusan permasalahan yang nantinya akan dimasukkan sebagai materi ranperda'),
(4, 'Undangan Kecamatan Buabatu Acara Musrenbang RKPD 2024 Tingkat Kec. Buahbatu di Hotel Fox Harris Lite', 4, '2023-02-02', '2023-02-02', 'Hotel Fox Harris Lite Metro Indah Bandung.', 'Dihadiri Ketua DPRD Kota Bandung H. Tedy Rusmawan, AT, MM dan Anggota DPRD Kota Bandung Dapil V.'),
(5, 'Rapat Kerja Komisi B terkait Evaluasi Kinerja T.A.2022 & Rencana Kinerja T.A 2023 bersama Dinas Keta', 2, '2023-02-07', '2023-02-07', 'KANTOR DPRD KAL-SEL', 'Dihadiri Pimpinan dan Anggota Komisi B DPRD'),
(6, 'Acara Silaturahmi dengan HMI Cabang Bandung di Ruang Rapat Komisi B.', 2, '2023-01-10', '2023-01-10', 'KANTOR DPRD KAL-SEL', 'Dihadiri Pimpinan dan Anggota Komisi B DPRD.'),
(7, 'Kunjungan kerja dari DPRD Kota Mojokerto (Komisi III)', 3, '2023-02-13', '2023-02-13', 'KANTOR DPRD KAL-SEL', 'Konsultasi tentang Pemberian ASI eksklusif Untuk Menjamin Pemenuhan Hak Bayi.'),
(8, 'Acara Rapat Terbatas Forkopimda/Satuan Tugas Percepatan Penanganan Covid-19 Kota Banjarmasin terkait', 4, '2023-02-17', '2023-02-17', 'ZOOM MEETING', 'Dihadiri Ketua DPRD');

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id_pengaduan` int(11) NOT NULL,
  `nm_lengkap` varchar(50) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` varchar(10) NOT NULL,
  `pesan` text NOT NULL,
  `status` char(1) NOT NULL,
  `tindakan` varchar(100) DEFAULT NULL,
  `id_unit_kerja` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id_pengaduan`, `nm_lengkap`, `no_hp`, `tanggal`, `jam`, `pesan`, `status`, `tindakan`, `id_unit_kerja`) VALUES
(4, 'Febry Agustina', '+628765499977', '2023-02-26', '23:29', 'KEPADA YTH : KETUA DEWAN PERWAKILAN RAKYAT DAERAH\r\nKALIMANTAN SELATAN\r\nDi -\r\nTempat.\r\nPERIHAL : PENGADUAN MASYARAKAT\r\nDengan Hormat,\r\nSalam sejahtera untuk kita sekalian, sering doâ€™a semoga kita semua selalu sehat walafiat dan senantiasa dalam lindungan Allah SWT.\r\nDalam melaksanakan tugas dan aktivitas keseharian kita. Amin.\r\nSehubungan dengan pengambil alihan lahan masyarakat menjadi lahan hutan tanaman industri (HTI) kami tidak akan keberatan akan tetapi yang menjadi pertanyaan dan juga sebagai aduan adalah proses atau realisasi pembayaran lahan sudah tidak sesuai dengan hasil sosialisasi yang di lakukan oleh pihak perusahaan yang mengelola Hutan Tanaman Industri\r\n(HTI)/\r\nPada saat sosialisasi yang di sampaikan adalah bahwa setiap lahan masyarakat yang masuk pada kawasan HTI akan di hargai dengan uang sebesar Rp. 450.000 perhektarnya.\r\nAkan tetapi pada saat proses pembayaran perusahaan membayar lahan masyarakat termasuk lahan saya di bayar hanya 9 Hektar dari keseluruhan lahan milik saya sebesar 23,5 H. Jadi luas lahan yang di gelapkan adalah 14,5 H.\r\nBedasarkan permasalahan yang saya alami di atas maka saya merasa sudah di tipu dan di rugikan. oleh pihak â€“ pihak yang sudah masuk di dalamya.\r\nDalam hal ini saya merasa sudah di tipu dan di rampok oleh pihak â€“ pihak atas oknum-oknum yang memanfaatkan kebodohan saya. oleh sebab itu saya mengadu pada Dewan Perwakilan Rakyat untuk mendapatkan kembali hak saya yang harus di penuhi oleh Perusahaan HTI.\r\nDemikian aspirasi aduan saya sampaikan berharap mendapatkan solusi dari DPRD KAL-SEL\r\n\r\nTerima Kasih.', '1', NULL, NULL),
(6, 'Shafira Azzahra', '+6208765990007', '2023-02-27', '00:08', 'KEPADA YTH : KETUA DEWAN PERWAKILAN RAKYAT DAERAH\r\nKALIMANTAN SELATAN\r\nDi -\r\nTempat.\r\nPERIHAL : PENGADUAN MASYARAKAT\r\nDengan Hormat,\r\nSalam sejahtera untuk kita sekalian, sering doâ€™a semoga kita semua selalu sehat walafiat dan senantiasa dalam lindungan Allah SWT. Dalam melaksanakan tugas dan aktivitas keseharian kita. Amin.\r\nSehubung dengan melonjaknya kenaikan BBM bersubsidi yang mempengaruhi perekonomian seluruh masyarakat Dampaknya cukup besar karena tidak hanya berdampak pada putaran pertama pada inflasi ekonomi tetapi juga berdampak pada putaran kedua pada transportasi serta barang dan jasa lainnya\r\nDemikian aspirasi aduan saya sampaikan berharap mendapatkan solusi dari DPRD KAL-SEL\r\n\r\nTerima Kasih.', '1', NULL, NULL),
(8, 'Naila putri', '+628231029387', '2023-02-28', '01:49', 'Kepada YTH Bagian Pengaduan Masyarakat DPRD.\r\n\r\nDengan hormat\r\nsaya mengeluhkan gaji saya dan teman teman sesama PTT yang mulai tahun 2019 ini turun dari sebelumnya bagi lulusan sarjana gaji sebesar Rp.2.450.000 turun menjadi Rp.1.750.000 begitu juga bagi PTT lulusan SMA turun dari sebelumnya Rp.2.250.000 turun menjadi Rp 1.750.000p, terus terang kami bingung dengan penurunan gaji saya dan teman teman PTT, lebih lebih gaji kami yang terbaru tidak mempertimbangkan tingkat pendidikan kami,jadi besaran gaji per tahun 2019 ini antara yang pendidikan SMA(tenaga driver,satpam,loundry) dan yang pendidikan sarjana(perawat,radiografer,fisioterapis) disamaratakan sebesar Rp.1.750.000 kami sdh mencoba menanyakan ke direktur dan manajemen tapi sampai saat ini belum ada kejelasan dan kepastian dan di suruh menunggu sampai waktu yang tidak pasti tentang kejelasan permasalahan kami. Lewat surel ini saya dan teman teman PTT pemda DIY memohon kepada bapak ibu di dewan bisa membantu permasalahan yang kami alami alami\r\nTerimakasih.', '1', NULL, NULL),
(9, 'Masitah', '+6287625140928', '2023-02-28', '01:50', 'Kepada YTH Bagian Pengaduan Masyarakat DPRD.\r\n\r\nDengan hormat\r\nSaya selaku masyarakat akan melaporkan tentang adanya pelaksanaan proyek perbaikan jalan yang di biayai oleh APBD Kabupaten yang dilaksanakan oleh Dinas Pekerjaan Umum, yaitu adanya penyimpangan tentang pelaksanaan proyek yang melakukan pelebaran jalan tetapi tidak memberikan ganti rugi kepada warga yang tanahnya terdampak proyek tersebut tempatnya di RT 40 RW 20. Terus ada lagi proyek pengerasan jalan yang digunakan untuk memperbaiki jalan pribadi yang di biayai dari dana gotong royong kabupaten. Saya minta anggota DPR yang memiliki fungsi pengawasan melakukan tindakan sesuai dengan fungsinya.\r\nDemikian terima kasih atas perhatiannnya.', '1', NULL, NULL),
(10, 'Indra Krisnawan', '+628637191028', '2023-02-28', '01:53', 'Kepada Anggota Dewan yang terhormat,mohon untuk ditinjau kembali sebagai Bank Daerah BPD DIY yang akan melakukan lelang agunan kepada nasabahnya yang belum bisa memenuhi kewajibannya di masa pandemi ini secara nasional maupun internasional,apakah sudah benar dalam kondisi seperti ini.Disaat pemerintah memberikan relaksasi kepada pada nasabah yang terdampak.\r\nTerima kasih', '1', NULL, NULL),
(11, 'Okto', '+628761920387', '2023-02-28', '01:55', 'MOHON UNTUK DI TINJAU KEMBALI KEBERADAAN PENGAMEN YANG SUDAH MERESAHKAN DI SEPUTARAN PASAR BANJARMASIN, KARENA PADA SAAT SAYA SEDANG BERBELANJA DISUATU TEMPAT PARA PENGAMEN TERSEBUT MELAKSANAKAN KEGIATANNYA SETELAH DIBERIKAN UANG TIPS DATANG LAGI PENGAMEN YANG LAIN DAN SETERUSNYA SEHINGGA SANGAT MENGGANGGU KENYAMANAN DALAM BERAKTIVITAS DI PASAR BANJARMASIN.\r\nTerimakasih.', '1', NULL, NULL),
(12, 'Margareth', '+628543789085', '2023-02-28', '01:59', 'Bagaimana tanggapan Bapak Ibu anggota DPRD menanggapi permasalahan penutupan Tempat Pembuangan Sampah? Apakah ada tindak lanjut melihat banyak tumpukan sampah di beberapa titik tempat pembuangan sampah sampai menutupi jalan serta bau yang menyengat?', '1', NULL, NULL),
(13, 'Eko Agus', '+628345162789', '2023-02-28', '02:05', 'Yang terhormat bapak/ibu anggota dprd kalsel, maaf selumnya saya sudah mengadu ke kantor BPJS cab terkait, ke kantor dinas kesehatan propinsi, saya sebagai masyarakat banjarmasin merasa kecewa, bingung harus kemana saya mengadu,\r\nsaat saya priksakan sakit saya, di salah satu RS rujukan, saya sudah menjalani pemeriksaan lengkap dan sudah diagnosa tapi tidak ada kelanjutannya, padahal penyakit saya harus dioperasi sebagai jalan keluarnya, saya menunggu dari bulan oktober 2021-mei 2022 belum juga ada panggilan untuk operasi, dari pihak RS tidak ada kata tidak sanggup tapi tidak di laksanakan, dari pihak BPJS RS sudah banyak dan mumpuni kenapa harus dirujuk ke luar propinsi, tapi kenyataannya sampai sekarang tidak ada kelanjutannya untuk penyakit saya, mohon bapak ibu dewan yang terhormat bagaimana solusinya?', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `id_surat_masuk` int(11) NOT NULL,
  `no_surat` varchar(30) NOT NULL,
  `tgl_surat` date NOT NULL,
  `perihal` text NOT NULL,
  `pengirim` varchar(50) NOT NULL,
  `id_jenis_surat` int(11) NOT NULL,
  `tgl_terima` date NOT NULL,
  `bukti` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_masuk`
--

INSERT INTO `surat_masuk` (`id_surat_masuk`, `no_surat`, `tgl_surat`, `perihal`, `pengirim`, `id_jenis_surat`, `tgl_terima`, `bukti`) VALUES
(3, '1223232', '2023-02-01', 'SURAT DINAS ', 'HUMAS', 7, '2023-01-02', '88079.jpg'),
(4, '1223233', '2023-01-25', 'UNDANGAN RAPAT KOORDINASI PROGRAM PEMBERDAYAAN MASYARAKAT DAN DESA', 'PEMPROV KAL-SEL', 3, '2023-01-27', '70241.jpeg'),
(5, '1223234', '2023-01-06', 'UNDANGAN RAPAT PARIPURNA DPRD KAL-SEL ', 'DPRD KAL-SEL', 3, '2023-01-09', '89427.jpeg'),
(6, '1223235', '2023-01-14', 'RAPAT PEMBAHASAN / PERBAIKAN RKA', 'BADAN LINGKUNGAN HIDUP', 3, '2023-01-15', '54455.jpg'),
(7, '1223236', '2023-02-15', 'KUNJUNGAN KERJA KOMISI IV', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 7, '2023-02-16', '9114.jpeg'),
(8, '1223237', '2023-02-08', 'RESES ANGGOTA DPRD', 'KEPALA DESA PULAU GADANG ', 3, '2023-02-09', '71846.jpg'),
(9, '1223238', '2023-01-17', 'SURAT PERMOHONAN KERJA KE BUPATI BARU', 'PENSOSBUD', 5, '2023-01-20', '87261.jpg'),
(10, '1223239', '2023-01-28', 'RAPAT ANGGOTA TAHUNAN', 'KOPERASI KREDIT BINA SERDJA', 3, '2023-02-28', '3524.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `unit_kerja`
--

CREATE TABLE `unit_kerja` (
  `id_unit_kerja` int(11) NOT NULL,
  `nm_unit_kerja` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit_kerja`
--

INSERT INTO `unit_kerja` (`id_unit_kerja`, `nm_unit_kerja`) VALUES
(2, 'Humas'),
(3, 'Tata Usaha'),
(4, 'Kepegawaian'),
(5, 'Keprotokolan'),
(6, 'Perencanaan dan Keuangan'),
(7, 'Persidangan'),
(8, 'Perundang-Undangan'),
(9, 'Layanan Aspirasi dan Pengaduan'),
(10, 'Kelengkapan Dewan dan Rapat');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nm_user` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nm_user`, `username`, `password`, `level`) VALUES
(1, 'Administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3', '1'),
(2, 'Kabag Humas', 'humas', '94da7343e47802652a24444298012b8c', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aspirasi`
--
ALTER TABLE `aspirasi`
  ADD PRIMARY KEY (`id_aspirasi`),
  ADD KEY `id_kategori_aspirasi` (`id_kategori_aspirasi`);

--
-- Indexes for table `disposisi`
--
ALTER TABLE `disposisi`
  ADD PRIMARY KEY (`id_disposisi`);

--
-- Indexes for table `jenis_kegiatan`
--
ALTER TABLE `jenis_kegiatan`
  ADD PRIMARY KEY (`id_jenis_kegiatan`);

--
-- Indexes for table `jenis_surat`
--
ALTER TABLE `jenis_surat`
  ADD PRIMARY KEY (`id_jenis_surat`);

--
-- Indexes for table `kategori_aspirasi`
--
ALTER TABLE `kategori_aspirasi`
  ADD PRIMARY KEY (`id_kategori_aspirasi`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`);

--
-- Indexes for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`id_surat_masuk`);

--
-- Indexes for table `unit_kerja`
--
ALTER TABLE `unit_kerja`
  ADD PRIMARY KEY (`id_unit_kerja`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aspirasi`
--
ALTER TABLE `aspirasi`
  MODIFY `id_aspirasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `disposisi`
--
ALTER TABLE `disposisi`
  MODIFY `id_disposisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `jenis_kegiatan`
--
ALTER TABLE `jenis_kegiatan`
  MODIFY `id_jenis_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `jenis_surat`
--
ALTER TABLE `jenis_surat`
  MODIFY `id_jenis_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `kategori_aspirasi`
--
ALTER TABLE `kategori_aspirasi`
  MODIFY `id_kategori_aspirasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  MODIFY `id_surat_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `unit_kerja`
--
ALTER TABLE `unit_kerja`
  MODIFY `id_unit_kerja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `aspirasi`
--
ALTER TABLE `aspirasi`
  ADD CONSTRAINT `aspirasi_ibfk_1` FOREIGN KEY (`id_kategori_aspirasi`) REFERENCES `kategori_aspirasi` (`id_kategori_aspirasi`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
