-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Jun 2021 pada 16.25
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbkasus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi_berita` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `tgl_posting` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `id_kategori`, `id_user`, `judul`, `isi_berita`, `gambar`, `tgl_posting`) VALUES
(1, 2, 2, 'Kasus Harian Covid-19 di Indonesia Tembus Angka 1.000, Hasil Pemeriksaan 16.181 Spesimen', 'JAKARTA, KOMPAS.com - Penularan Covid-19 di Indonesia masih terus terjadi. Pada Selasa (9/6/2020), penambahan pasien positif Covid-19 di Indonesia mencapai 1.043 orang. Angka ini merupakan jumlah kasus baru tertinggi sejak kasus pertama diumumkan pada 2 Maret 2020. Dengan penambahan tersebut, Juru Bicara Pemerintah untuk Penanganan Virus Corona Achmad Yurianto mengungkapkan, total ada 33.076 kasus Covid-19 di Tanah Air. \"Kita dapatkan konfirmasi kasus baru positif sebanyak 1.043 orang sehingga menjadi 33.076 orang,\" kata Yurianto dalam konferensi pers dari Graha BNPB, Selasa sore.\r\nPenambahan 1.043 kasus baru ini merupakan hasil pemeriksaan dari 16.181 spesimen. Tambahan kasus tertinggi sebelumnya yakni 993 kasus, pada tanggal 6 Juni 2020. Saat itu, kasus Covid-19 di Indonesia mencapai 30.154. Adapun penambahan kasus baru terbanyak terjadi di DKI Jakarta dengan 232 kasus. Setelah itu disusul Jawa Timur dengan 220 kasus baru dan Sulawesi Selatan dengan 180 kasus baru. Sementara itu, penularan Covid-19 secara keseluruhan hingga saat ini terjadi di 422 kabupaten/kota yang berada di 34 provinsi.\r\nSelanjutnya, berdasarkan data Gugus Tugas Percepatan Penanganan Covid-19, Selasa (9/6/2020) pukul 12.00 WIB, jumlah pasien meninggal bertambah sebanyak 40 kasus.\r\n\r\n\"Meninggal 40 orang sehingga total (akumulasi) menjadi 1.923 orang,\" kata Yurianto\r\n\r\nDalam data itu, penambahan kasus meninggal dunia dalam 24 jam terakhir tersebar di 11 provinsi.\r\n\r\nPenambahan kasus tertinggi terjadi di Jawa Timur sebanyak 12 kasus. Kemudian, Jawa Tengah juga mencatat terjadi penambahan lima kasus.\r\n\r\nSelanjutnya DKI Jakarta, Sumatera Utara dan Kalimantan Selatan juga sama-sama mengalami penambahan empat kasus meninggal dunia.\r\nSedangkan pasien yang terkonfimasi sembuh bertambah 510 orang. Sehingga akumulasi pasien sembuh hingga saat ini sebanyak 11.414 orang.\r\n\r\nBerdasarkan data pemerintah, penambahan kasus pasien sembuh tersebar di 23 provinsi.\r\n\r\nPenambahan terbanyak terjadi di DKI Jakarta dengan 165 orang, disusul Jawa Timur dengan 85 orang dan Jawa Tengah 80 orang.\r\n\r\nKemudian, pemerintah mencatat ada 38.394 orang dengan status dalam pemantauan (ODP).\r\n\r\nSelain itu, ada pula pasien berstatus dalam pengawasan (PDP) sebanyak 14.108 orang.', '403470civid-19.jpg', '2021-05-03 10:12:25'),
(8, 4, 2, 'Rachmawati Tolak RUU HIP, Anggap BPIP Tak Diperlukan ', 'Padang Pariaman, Alfarissy News --\r\n\r\nPendiri Yayasan Pendidikan Soekarno, Rachmawati Soekarnoputri menyebut pembahasan Rancangan Undang-undang Haluan Ideologi Pancasila (RUU HIP) harus dihentikan. Pembentukan UU mengenai Pancasila ini dinilai malah akan menurunkan nilai dan makna Pancasila.\r\n\r\nHal tersebut disampaikan Rachmawati dalam peringatan Haul ke-50 Bung Karno di kediamannya di kawasan Pasar Minggu, Jakarta Selatan, Sabtu (20/6).\r\n\r\n\"Saya rasa tidak perlu UU HIP itu. Pertama, alasannya begini, kita ini sudah berkomitmen dan konsensus kita sudah final,\" kata Rachmawati.\r\n\r\nRUU HIP pertama kali diajukan oleh Fraksi PDI Perjuangan di DPR. Pada rapat paripurna pertengahan Mei 2020 DPR kemudian menyetujui pembahasan RUU HIP sebagai inisiatif DPR.\r\nDalam draf RUU HIP terdapat 58 pasal dan delapan peraturan yang dijadikan konsideran. Sementara TAP MPRS Larangan Ajaran Komunisme/Marxisme-Leninisme tak masuk pada peraturan di dalamnya.\r\n\r\nMenurut Rachmawati, pembahasan mengenai wacana RUU HIP justru akan menurunkan makna Pancasila yang telah disepakati para pendiri bangsa.\r\n\r\n\"Sekarang untuk apa bikin UU lagi, dan itu men-downgrade, baik Pancasila maupun UUD 45 kita. Ini yang menjadi masalah,\" jelas Rachmawati.\r\n\r\n\"Jadi, saya pribadi, saya menolak, karena ini bertentangan dengan apa yang dikatakan Bung Karno,\" lanjut dia.\r\nPutri Sukarno itu juga menilai, wacana pembahasan RUU HIP ini memiliki agenda terselubung. Malah, menurutnya, jika RUU HIP diloloskan menjadi undang-undang, maka aturan tersebut justru akan memecah belah NKRI.\r\n\r\n\"Mohon maaf, saya lihat ada hidden agenda. Ini yang akan menghancurkan NKRI, kita akan terpecah belah lagi. Padahal sebetulnya, Bung Karno mengharapkan, ingin agar kita ini punya suatu kekuatan dalam persatuan bangsa kita ini,\" tuturnya.\r\n\r\nBPIP Tidak Diperlukan\r\n\r\nRachmawati juga menyoroti sejumlah pandangan bahwa RUU HIP ini menjadi alat untuk memperkuat legalitas Badan Pembinaan Ideologi Pancasila (BPIP).\r\n\r\nSelama ini, keberadaan BPIP diatur dalam Peraturan Presiden Nomor 7 Tahun 2018 tentang BPIP. Ketua Dewan Pengarah BPIP diisi oleh Megawati Soekarnoputri yang juga merupakan Ketua Umum PDIP.\r\n\r\nKeberadaan BPIP diatur kembali dalam draf RUU HIP. Dengan demikian, Perpres No. 7 tahun 2018 kemungkinan besar tidak akan berlaku lagi jika RUU HIP disahkan menjadi undang-undang.\r\nMengenai BPIP, dalam RUU HIP diatur mulai dari Pasal 43. Beleid tersebut menyatakan bahwa presiden membentuk BPIP dan BPIP bertanggung jawab kepada presiden.\r\n\r\nTugas BPIP diatur dalam Pasal 44 RUU HIP. Tugas BPIP dalam pasal terdiri dari 5 poin. Kemudian, kewenangan BPIP diatur dalam Pasal 45. BPIP memiliki 3 kewenangan dalam pasal tersebut.\r\n\r\n\"Kalau menurut saya, menurut saya pribadi enggak usah (ada BPIP). Jadi nanti kita maunya cuma bikin tambal sulam enggak jelas,\" tuturnya.\r\n\r\nMenurut Rachmawati, yang diperlukan saat ini bukan lembaga seperti BPIP, melainkan mengembalikan UUD 45. Ia menegaskan, pemerintah seharusnya menguatkan pemikiran Pancasila dan UUD 45.', '625384racma.jpg', '2020-06-20 15:10:00'),
(9, 6, 1, '      HomeLifestyle  Sontek Gaya Busana Tara Basro yang Kasual nan Stylish', 'Liputan6.com, Jakarta - Aktris Tara Basro tengah jadi perbincangan hangat di jagat maya. Pemain film A Copy of My Mind ini dikabarkan mengikat janji suci pernikahan dengan Daniel Adnan, setelah keduanya kompak mengunggah potret cincin telah melingkar di jari manis.\r\n\r\nPotret yang dibagikan di akun Instagram pribadi Tara dan Daniel pada 18 Juni 2020 itu seketika membuat heboh dan mengejutkan warganet.  \"Semesta menyatukan,\" tulis keduanya dalam kolom keterangan potret itu.\r\n\r\nSementara busana di hari bahagiia itu belum terkuak, pada keseharian, \r\n\r\nTak heran bila gaya kasualnya ini bisa jadi inspirasi berbusana.\r\n\r\nSebut saja ketika ia mengunggah sebuah potret tengah terduduk dengan tampilan effortless, namun sukses menciptakan sisi keren. Dengan rambut yang diikat tinggi, ia mengenakan printed t-shirt dengan dasar warna putih.\r\n\r\nAtasan itu lantas dipadukan dengan striped overall dengan paduan warna putih dan biru. Tak ketinggalan, Tara Basro melengkapi gayanya dengan boots warna hitam dari Dr. Martens.\r\n\r\nTampilan tak kalah kece lainnya dari Tara Basro adalah potret yang menampilkan dirinya tengah duduk di kawasan yang menjual banyak makanan. Potret itu berlatarkan gedung-gedung tinggi dengan suasana menuju senja.\r\n\r\nTara mengenakan tie dye print boxy fit t-shirt dari Daily Paper yang dipadukan dengan high waisted jeans dengan bagian bawah jeans yang digulung. Ia terlihat memakai sepatu dari Nike dengan paduan warna hitam dan putih.\r\n\r\nTara turut membawa tas tangan dari rumah mode mewah, Chanel. Sementara, rambut panjangnya dibiarkan tergerai indah.\r\n\r\nInspirasi gaya simpel lainnya juga bisa dilihat dari pilihan Tara Basro memadukan kaus putih polos dengan celana panjang high waisted dengan bagian bawah celana dengan detail unfinished.\r\n\r\nTara melengkapi penampilannya dengan boots warna hitam dari Maison Margiela, tas hitam dari Chanel, serta topi cokelat sebagai pemanis gaya simpelnya.', '1982461.jpeg', '2020-06-22 18:08:21'),
(10, 7, 1, 'Lagu Lathi Viral, Sara Fajira Banjir Tawaran Kolaborasi', 'Suara.com - Sara Fajira banyak mendapat tawaran kolaborasi dan rekaman lagu baru usai kolaborasinya bersama kelompok musik Weird Genius lewat lagu Lathi sukses besar. Titi DJ salah satu penyanyi yang mengajaknya berkolaborasi.\r\n\r\nHal ini terungkap dalam obrolan Sara dengan Ganjar Pranowo di live Instagram baru-baru ini. Ganjar yang merupakan Gubernur Jawa Tengah itu bertanya apakah ada yang mengajaknya rekaman setelah lagu Lathi viral.\r\n\r\n\"Setelah Lathi booming sekarang, pernah nggak kamu ditelepon orang dan diajak rekaman?,\" tanya Ganjar Pranowo.\r\n\r\n\"Pernah pak, beberapa kali ini udah banyak juga yang ngajakin kolaborasi setelah Lathi ini,\" jawab Sara Fajira.\r\n\r\n\"Banyakan orang Indonesia sih pak yang ajak kolaborasi, salah satunya mami Titi DJ, kalau luar negeri belum ada,\" katanya lagi.\r\n\r\nGanjar Pranowo menilai lagu Lathi ini jadi momentum Sara Fajira untuk terus mengembangkan karier di industri musik. Karenanya, dia berpesan agar tak menyia-nyiakan jika ada tawaran datang Kepada Ganjar, Sara juga ungkap sosok panutan bermusiknya.\r\n\"Idola saya Rihana pak,\" kata Sara.', '7629422.jpg', '2020-06-22 18:11:20'),
(11, 5, 3, 'Rekor Baru Ronaldo Setelah Bobol Gawang Bologna', 'Jakarta, CNN Indonesia --\r\n\r\nCristiano Ronaldo kembali mengukir rekor baru setelah membantu Juventus mengalahkan Bologna dalam lanjutan Liga Italia, Selasa (23/6) dini hari waktu Indonesia.\r\n\r\nRonaldo yang bermain sejak menit pertama kerap mendapat bola. CR7 yang sering berada di sayap kiri sudah mencoba membuat gol pada menit ketujuh.', '5962425.jpg', '2020-06-23 02:58:49'),
(12, 5, 3, 'Momen Langka Ronaldo dan Dybala Cetak Gol Bersama', 'Jakarta, CNN Indonesia --\r\n\r\nCristiano Ronaldo dan Paulo Dybala berhasil mencetak gol dalam laga lawan Bologna di Liga Italia. Keberhasilan Ronaldo dan Dybala mencetak gol bersamaan adalah sebuah momen langka.\r\n\r\nRonaldo dan Dybala kerap jadi pilihan utama Juventus di lini depan meski terkadang Dybala dirotasi oleh Gonzalo Higuain yang juga jadi andalan di lini depan. Namun Ronaldo dan Dybala sudah tercatat 68 kali bermain bersama di seluruh kompetisi.', '3369636.jpg', '2020-06-23 02:55:19'),
(13, 3, 3, 'Restoran, Hotel, Tempat Wisata di Daerah Ini Paling Inovatif Siapkan New Normal', ' Lomba Inovasi Daerah Penyiapan Tatanan Normal Baru Produktif dan Aman Covid-19 digelar. Lomba ini diadakan untuk menyosialisasikan penerapan skema New Normal di seluruh daerah. Kementerian Dalam Negeri (Kemendagri) resmi mengumumkan para pemenang. \r\nMenteri Dalam Negeri (Mendagri) Tito Karnavian menuturkan, ada tujuh sektor yang dilombakan. Ppasar tradisional, pasar modern atau minimarket dan supermarket, hotel, restoran, tempat pariwisata, transportasi umum, sampai Pelayanan Terpadu Satu Pintu (PTSP). Total ada 84 pemenang lomba.\r\n\"Lomba inovasi daerah ini bertujuan untuk menyosialisasikan New Normal bagi masyarakat. Utamanya agar terbiasa untuk menerapkan protokol kesehatan di segala aktivitas kesehariannya,\" kata Tito dalam konferensi pers via YouTube Kemendagri, Senin 22 Juni 2020.\r\n\r\nPenilaian lomba dilakukan pada 16 - 19 Juni 2020. Tim penilai terdiri dari bidang terkait asal Kemendagri, Kementerian Keuangan, Kementerian Kesehatan, Kementerian Pendayagunaan Aparatur Sipil Negara dan Reformasi Birokrasi, Kementerian Pariwisata dan Ekonomi Kreatif, Kementerian Perdagangan, Badan Nasional Pengelola Perbatasan, Badan Nasional Penanggulangan Bencana, serta Gugus Tugas Penanganan Covid-19.\r\n\r\nPara pemenang lomba mendapat piagam penghargaaan dan Dana Insentif Daerah (DID) dengan nilai total Rp 164 miliar. Rinciannya, pemenang pertama mendapat Rp 3 miliar, pemenang kedua Rp 2 miliar, dan pemenang ketiga 1 Rp miliar pada setiap sektor dan masing-masing klaster.\r\n\r\nBerikut ini rincian Pemenang Lomba Inovasi Daerah Penyiapan Tatanan Normal Baru atau New Normal Produktif dan Aman Covid-19:', '8138437.jpg', '2020-06-23 05:55:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`, `keterangan`) VALUES
(2, 'Covid-19', 'Penyakit berbahaya yang ada di dunia'),
(3, 'Hiburan', 'Hiburan terkini'),
(4, 'politik', 'politiki indonesia'),
(5, 'sport', 'olahraga terkini'),
(6, 'Lifestyle', 'gaya hidup'),
(7, 'entertaiment', 'terkenal');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_berita` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `isi_komentar` tinytext NOT NULL,
  `data_create` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `id_berita`, `nama`, `email`, `isi_komentar`, `data_create`) VALUES
(27, 8, 'Salman Alfarissy', 'salman@gmail.com', ' yess berhasil............', '2020-06-22 08:06:38'),
(28, 1, 'salman', 'salman.riduan@yahoo.com', ' alhamdulillah selesai juga....:)', '2020-06-22 08:45:45'),
(29, 8, 'Alfarissy', 'Salman.Alfarissy26@gmail.com', ' sadadfa', '2020-06-22 08:47:28'),
(30, 8, 'Salman Alfarissy', 'salman.riduan@yahoo.com', 'yess...selesai sudah...Web akuu..', '2020-06-22 17:19:57'),
(31, 8, 'Salman Alfarissye', 'salman.riduan@yahoo.com', ' saaga', '2020-06-22 17:39:53'),
(32, 1, 'yesss..indonesia kuu..', '', ' ', '2020-06-22 17:40:37'),
(33, 1, 'yaya', 'yaya@gmail.com', ' alhamdulillah ...', '2020-06-22 17:41:18'),
(34, 10, 'Salman Alfarissy', 'Salman.Alfarissy26@gmail.com', ' Kerennn...:)', '2020-06-22 18:26:08'),
(35, 13, 'Salman Alfarissy', 'salman@gmail.com', ' ini baru destinasi wisata...:)', '2020-06-23 06:03:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(1, 'salman', '827ccb0eea8a706c4c34a16891f84e7b', 'Operator'),
(2, 'alfarissy', 'e807f1fcf82d132f9bb018ca6738a19f', 'Administrator'),
(3, 'salman alfarissy', '827ccb0eea8a706c4c34a16891f84e7b', 'Moderator'),
(4, 'alfarissy salman', '827ccb0eea8a706c4c34a16891f84e7b', 'Administrator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `view`
--

CREATE TABLE `view` (
  `id_berita` int(10) NOT NULL,
  `dilihat` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `view`
--

INSERT INTO `view` (`id_berita`, `dilihat`) VALUES
(8, 1),
(8, 1),
(1, 0),
(1, 1),
(8, 1),
(8, 0),
(1, 1),
(8, 1),
(8, 1),
(8, 1),
(8, 1),
(1, 1),
(8, 1),
(1, 1),
(8, 1),
(8, 1),
(8, 1),
(8, 1),
(8, 1),
(8, 1),
(8, 1),
(1, 1),
(8, 1),
(8, 1),
(8, 1),
(8, 1),
(8, 1),
(8, 1),
(8, 1),
(8, 1),
(8, 1),
(8, 1),
(8, 1),
(8, 1),
(8, 1),
(8, 1),
(8, 1),
(8, 1),
(8, 1),
(1, 1),
(8, 1),
(8, 1),
(8, 1),
(8, 1),
(1, 1),
(1, 1),
(8, 1),
(8, 1),
(8, 0),
(8, 1),
(8, 1),
(8, 1),
(8, 1),
(8, 1),
(8, 1),
(8, 1),
(8, 1),
(1, 1),
(1, 1),
(1, 1),
(1, 1),
(1, 1),
(1, 1),
(1, 1),
(10, 1),
(10, 1),
(10, 1),
(12, 1),
(12, 1),
(1, 1),
(1, 1),
(1, 1),
(12, 1),
(10, 1),
(9, 1),
(9, 1),
(14, 1),
(13, 1),
(13, 1),
(8, 1),
(13, 1),
(13, 1),
(13, 1),
(8, 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
