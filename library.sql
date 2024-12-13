CREATE DATABASE IF NOT EXISTS `library`;
USE `library`;

CREATE TABLE `data_kategori` (
  `id_kategori` varchar(14) NOT NULL PRIMARY KEY,
  `nama` varchar(30) NOT NULL
);

INSERT INTO `data_kategori` (`id_kategori`, `nama`) VALUES
('67559a523a260', 'Pemrograman'),
('67559a523a2aa', 'Database');

CREATE TABLE `data_buku` (
  `id_buku` varchar(14) NOT NULL PRIMARY KEY,
  `judul` varchar(50) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `kode_isbn` varchar(13) NOT NULL,
  `id_kategori` varchar(14) DEFAULT NULL,
  `stok` int NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `tgl_ditambahkan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (`id_kategori`) REFERENCES `data_kategori` (`id_kategori`) ON DELETE SET NULL ON UPDATE CASCADE
);

INSERT INTO `data_buku` (`id_buku`, `judul`, `pengarang`, `penerbit`, `kode_isbn`, `id_kategori`, `stok`, `deskripsi`, `gambar`, `tgl_ditambahkan`) VALUES
('67559a523a2f3', 'Pemrograman Web Modern', 'John Doe', 'Tech Press', '978-1234567890', '67559a523a260', 10, 'Buku ini mengajarkan dasar-dasar pemrograman web menggunakan teknologi terbaru, seperti HTML5, CSS3, JavaScript, dan framework populer seperti React dan Angular. Buku ini cocok untuk pemula yang ingin belajar membuat situs web interaktif dan responsif. Setiap bab dalam buku ini dilengkapi dengan contoh kode dan penjelasan yang mendalam untuk memudahkan pembaca memahami konsep-konsep dasar. Penulis memberikan tips praktis dan saran terbaik yang dapat diterapkan dalam pengembangan web sehari-hari. Buku ini juga membahas tentang pengoptimalan situs web dan penerapan desain UI/UX agar situs yang dibangun menjadi lebih menarik dan mudah digunakan. Selain itu, buku ini juga menyertakan materi lanjutan mengenai pemrograman web seperti penggunaan API, pengelolaan basis data dengan MySQL, dan penerapan keamanan dalam situs web. Di akhir setiap bab, terdapat latihan yang bisa digunakan pembaca untuk menguji pemahaman mereka terhadap materi yang baru saja dipelajari. Buku ini juga menyediakan akses ke situs web pembelajaran interaktif yang memungkinkan pembaca untuk mengunduh kode sumber dan berlatih secara langsung. Dengan mengikuti petunjuk yang ada dalam buku ini, pembaca diharapkan dapat membuat situs web profesional yang siap digunakan di dunia industri.', 'https://example.com/gambar3.jpg', '2024-12-08 13:12:55'),
('67559a523a33c', 'Belajar Database MySQL', 'Jane Smith', 'Data Books', '978-9876543210', '67559a523a2aa', 5, 'Buku ini adalah panduan lengkap untuk memahami konsep dasar dan lanjutan tentang MySQL, salah satu sistem manajemen basis data yang paling banyak digunakan di dunia. Buku ini dimulai dengan pengenalan tentang SQL (Structured Query Language) dan bagaimana cara membuat dan mengelola database menggunakan MySQL. Pembaca akan diajarkan cara membuat tabel, melakukan query untuk mengambil data, serta bagaimana melakukan pembaruan dan penghapusan data. Penulis menjelaskan setiap langkah secara rinci dengan contoh yang mudah diikuti, sehingga buku ini cocok baik untuk pemula maupun mereka yang sudah berpengalaman dalam bidang pengelolaan basis data. Selain itu, buku ini juga membahas topik-topik lanjutan seperti pengoptimalan query, penggunaan indeks, dan teknik normalisasi untuk memastikan basis data yang dibangun tetap efisien dan bebas dari redundansi. Pembaca juga akan mempelajari bagaimana cara mengelola transaksi, mengatasi masalah pemblokiran data, serta menjaga integritas data menggunakan konsep-konsep seperti kunci primer, kunci asing, dan constraint. Buku ini juga menyediakan bab khusus mengenai pengelolaan basis data dalam skala besar, termasuk penggunaan MySQL di aplikasi web dan integrasi dengan teknologi lain seperti PHP dan Python. Dengan buku ini, pembaca diharapkan dapat menguasai MySQL dan siap mengelola basis data dengan percaya diri.', 'https://example.com/gambar4.jpg', '2024-12-08 13:12:55');

CREATE TABLE `data_peminjaman` (
  `id_peminjaman` varchar(14) NOT NULL PRIMARY KEY,
  `id_buku` varchar(14) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `status` enum('dipinjam', 'dikembalikan') NOT NULL,
  FOREIGN KEY (`id_buku`) REFERENCES `data_buku` (`id_buku`) ON DELETE CASCADE ON UPDATE CASCADE
);

INSERT INTO `data_peminjaman` (`id_peminjaman`, `id_buku`, `nama_siswa`, `kelas`, `tgl_pinjam`, `tgl_kembali`) VALUES
('67559a523a385', '67559a523a2f3', 'Ali Budi', 'X-A', '2024-12-01', '2024-12-15', 'dipinjam'),
('67559a523a3ce', '67559a523a33c', 'Siti Nura', 'XI-B', '2024-12-05', '2024-12-20', 'dikembalikan');

CREATE TABLE `data_user` (
  `id_user` varchar(14) NOT NULL PRIMARY KEY, 
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(35) NOT NULL, 
  `level` enum('pustakawan','admin') NOT NULL,
  `status` enum('active','non-active') NOT NULL,
  `tgl_pendaftaran` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO `data_user` (`id_user`, `nama`, `email`, `password`, `level`, `status`, `tgl_pendaftaran`) VALUES
('67559a523a417', 'Fahmi Rahman', 'admin@email.com', '0192023a7bbd73250516f069df18b500', 'admin', 'active', '2024-12-08 13:12:55'),
('67559a523a460', 'Rina Sari', 'pustakawan@email.com', '1fa3f5ae016e4b0691eb5c1b4fd9b951', 'pustakawan', 'non-active', '2024-12-08 13:12:55');

CREATE TABLE `data_log` (
  `id_log` varchar(14) NOT NULL PRIMARY KEY,
  `id_user` varchar(14) NOT NULL,
  `informasi` enum('login','logout') NOT NULL,
  `tgl_log` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (`id_user`) REFERENCES `data_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE
);

INSERT INTO `data_log` (`id_log`, `id_user`, `informasi`, `tgl_log`) VALUES
('67559a523a4a9', '67559a523a417', 'login', '2024-12-08 13:12:55'),
('67559a523a4fb', '67559a523a460', 'logout', '2024-12-08 13:12:55');

CREATE TABLE `data_berita_acara` (
  `id_berita` varchar(14) NOT NULL PRIMARY KEY,
  `judul` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `tgl_acara` date DEFAULT NULL,
  `waktu` time DEFAULT NULL,
  `tempat` varchar(100) DEFAULT NULL,
  `gambar` varchar(100) NOT NULL,
  `jenis` enum('berita','acara') NOT NULL,
  `tgl_ditambahkan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO `data_berita_acara` (`id_berita`, `judul`, `deskripsi`, `tgl_acara`, `waktu`, `tempat`, `gambar`, `jenis`, `tgl_ditambahkan`) VALUES
('5f9d3d0e4a5f1', 'Acara Penghargaan Tahunan', 'Acara penghargaan tahunan adalah kegiatan yang diselenggarakan setiap tahun untuk memberikan apresiasi kepada para siswa yang telah menunjukkan prestasi luar biasa di berbagai bidang, seperti akademik, olahraga, dan seni. Dalam acara ini, para siswa yang berhasil meraih prestasi terbaik akan mendapatkan penghargaan sebagai bentuk penghormatan atas usaha dan kerja keras mereka selama setahun. Selain itu, acara ini juga menjadi momen untuk menginspirasi siswa lainnya agar terus berprestasi dan berusaha lebih baik di tahun berikutnya. Acara ini akan dihadiri oleh para guru, orang tua siswa, serta seluruh peserta didik yang ada di sekolah. Tujuan utama dari acara penghargaan tahunan ini adalah untuk memotivasi siswa agar terus berkompetisi secara sehat dan meningkatkan kualitas pendidikan di sekolah. Setiap tahun, acara ini semakin meriah dan banyak dihadiri oleh tamu undangan penting, seperti alumni dan pejabat pendidikan. Penghargaan tidak hanya diberikan untuk siswa dengan prestasi akademik terbaik, tetapi juga untuk mereka yang telah menunjukkan dedikasi luar biasa dalam kegiatan ekstrakurikuler. Diharapkan dengan adanya acara ini, para siswa akan semakin percaya diri dan termotivasi untuk mengukir prestasi lebih banyak lagi di masa depan.', '2024-12-15', '10:00:00', 'Auditorium Sekolah', 'https://example.com/gambar1.jpg', 'acara', '2024-12-08 13:04:12'),
('5f9d3d0e4a5f2', 'Berita Ujian Semester', 'Berita ujian semester adalah informasi yang berkaitan dengan jadwal dan persiapan ujian akhir semester yang diadakan setiap semester di sekolah. Ujian semester merupakan evaluasi penting untuk mengukur pemahaman siswa terhadap materi pelajaran yang telah diajarkan selama satu semester. Oleh karena itu, persiapan yang matang sangat diperlukan agar siswa dapat mengikuti ujian dengan baik. Setiap tahun, ujian semester menjadi momen yang menegangkan bagi siswa, tetapi juga memberikan kesempatan untuk menunjukkan kemampuan mereka. Dalam berita ini, pihak sekolah akan memberikan informasi terkait tanggal ujian, materi yang akan diujikan, serta beberapa tips agar siswa dapat mempersiapkan ujian dengan optimal. Selain itu, berita ini juga memberikan informasi tentang perubahan-perubahan penting terkait ujian semester, seperti pengaturan ruang ujian, tata tertib selama ujian, serta waktu yang diperlukan untuk setiap sesi ujian. Para siswa juga diingatkan untuk mempersiapkan diri secara fisik dan mental agar dapat memberikan performa terbaik. Dalam konteks ini, pihak sekolah memberikan dukungan penuh kepada para siswa, dengan menyediakan waktu khusus untuk sesi konsultasi bagi mereka yang membutuhkan bantuan dalam memahami materi ujian. Harapan dari berita ini adalah agar seluruh siswa dapat mengikuti ujian semester dengan percaya diri dan meraih hasil yang memuaskan.', '2024-12-20', NULL, NULL, 'https://example.com/gambar2.jpg', 'berita', '2024-12-08 13:04:12'),
('5f9d3d0e4a5f3', 'Peluncuran Aplikasi Pembelajaran Baru', 'Pemerintah meluncurkan aplikasi pembelajaran baru yang dapat diakses oleh semua pelajar di Indonesia. Aplikasi ini dirancang untuk memudahkan proses pembelajaran di luar sekolah, dengan fitur-fitur interaktif seperti video pembelajaran, kuis, dan forum diskusi. Tujuan dari peluncuran aplikasi ini adalah untuk meningkatkan kualitas pendidikan di era digital dan menyediakan bahan ajar yang dapat diakses secara bebas oleh seluruh pelajar. Aplikasi ini dapat digunakan di berbagai perangkat, termasuk smartphone, dan diharapkan dapat menjangkau daerah-daerah yang selama ini kesulitan dalam akses pendidikan. Para guru juga dapat memanfaatkan aplikasi ini untuk memberikan tugas dan ujian secara online kepada siswa mereka.', '2024-12-12', NULL, NULL, 'https://example.com/gambar3.jpg', 'berita', '2024-12-09 10:22:34'),
('5f9d3d0e4a5f4', 'Festival Seni dan Budaya 2024', 'Festival Seni dan Budaya 2024 merupakan acara tahunan yang diselenggarakan oleh Pemerintah Kota untuk merayakan keberagaman budaya dan seni lokal. Acara ini melibatkan berbagai pertunjukan seni, seperti tari tradisional, musik daerah, pameran seni rupa, dan bazar kuliner khas daerah. Festival ini tidak hanya bertujuan untuk melestarikan seni dan budaya lokal, tetapi juga untuk menarik wisatawan dan meningkatkan pariwisata daerah. Diharapkan acara ini dapat memperkenalkan lebih banyak orang pada kekayaan budaya Indonesia dan mendorong pelestariannya agar tetap hidup di tengah masyarakat modern. Selain itu, festival ini juga menjadi ajang bagi seniman muda untuk menunjukkan karya-karya mereka kepada publik.', '2024-12-20', '08:00:00', 'Taman Kota XYZ', 'https://example.com/gambar4.jpg', 'acara', '2024-12-09 10:25:47');

CREATE TABLE `data_informasi` (
  `id_informasi` varchar(14) NOT NULL PRIMARY KEY,
  `judul` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `tgl_pembuatan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO `data_informasi` (`id_informasi`, `judul`, `deskripsi`, `gambar`, `tgl_pembuatan`) VALUES
('67559a523a1b9', 'Informasi Layanan Peminjaman Buku', 'Peminjaman buku di perpustakaan sekolah merupakan layanan yang sangat penting untuk mendukung kegiatan belajar mengajar di sekolah. Perpustakaan menyediakan berbagai jenis buku, mulai dari buku pelajaran, buku referensi, hingga buku bacaan ringan yang dapat membantu siswa meningkatkan pengetahuan dan keterampilan mereka. Informasi mengenai prosedur peminjaman buku akan memudahkan siswa dalam mengakses berbagai buku yang dibutuhkan untuk mendalami materi pelajaran atau sekadar menambah wawasan umum. Setiap siswa dapat meminjam buku sesuai dengan ketentuan yang berlaku, yang tentunya bertujuan untuk menjaga ketersediaan buku bagi semua siswa. Selain itu, perpustakaan juga memberikan kemudahan bagi siswa untuk melakukan peminjaman secara online melalui sistem peminjaman berbasis web. Melalui sistem ini, siswa dapat mengecek ketersediaan buku yang ingin dipinjam dan melakukan reservasi buku sebelum mengunjungi perpustakaan. Hal ini diharapkan dapat mengurangi antrian panjang di perpustakaan dan memberikan kenyamanan lebih bagi pengguna layanan. Setiap siswa juga diingatkan untuk menjaga buku yang dipinjam agar tetap dalam kondisi baik, serta mengembalikan buku tepat waktu sesuai dengan tenggat yang telah ditentukan. Dengan adanya informasi ini, diharapkan seluruh siswa dapat memanfaatkan layanan perpustakaan secara maksimal.', 'https://example.com/gambar5.jpg', '2024-12-08 13:04:12'),
('67559a523a215', 'Pengumuman Libur Sekolah', 'Pengumuman libur sekolah adalah informasi yang sangat ditunggu oleh seluruh siswa dan orang tua. Sekolah akan libur selama dua minggu pada akhir bulan ini, tepatnya dari tanggal 24 Desember hingga 7 Januari. Libur sekolah ini biasanya digunakan oleh para siswa untuk beristirahat, berkumpul dengan keluarga, atau mengikuti kegiatan luar sekolah yang bermanfaat. Selain itu, liburan akhir tahun juga menjadi waktu yang tepat untuk mempersiapkan diri menghadapi ujian semester yang akan datang. Meskipun libur panjang, sekolah tetap memberikan perhatian pada kegiatan belajar melalui tugas-tugas mandiri yang harus diselesaikan selama liburan. Selama liburan, pihak sekolah juga menyarankan agar siswa memanfaatkan waktu luang mereka untuk melakukan aktivitas yang bermanfaat, seperti membaca buku, mengikuti kursus tambahan, atau melakukan kegiatan fisik yang mendukung kesehatan. Dengan demikian, liburan bukan hanya menjadi waktu untuk beristirahat, tetapi juga untuk menambah pengetahuan dan keterampilan. Pengumuman ini juga mencakup informasi tentang jadwal pembagian rapor yang akan dilakukan setelah liburan, sehingga para siswa dapat mempersiapkan diri untuk menerima hasil evaluasi belajar mereka.', 'https://example.com/gambar6.jpg', '2024-12-08 13:04:12');