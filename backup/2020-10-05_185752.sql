DROP TABLE tbl_asesmen;

CREATE TABLE `tbl_asesmen` (
  `id_asesmen` int(10) NOT NULL AUTO_INCREMENT,
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
  `id_user` tinyint(2) NOT NULL,
  PRIMARY KEY (`id_asesmen`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

INSERT INTO tbl_asesmen VALUES("53","1","1. Asesmen lanjutan / mendalam","2","2","2","2","2","sip","ok","yes","Negatif","19","0","1");
INSERT INTO tbl_asesmen VALUES("54","8","3. Program Detoksifikasi","8","9","8","7","8","ndnd","jdjd","ndnd","Negatif","21","0","1");
INSERT INTO tbl_asesmen VALUES("55","8","2. Evaluasi Psikologis","9","6","5","6","6","dd","dd","ddd","Positif","16","0","1");



DROP TABLE tbl_disposisi;

CREATE TABLE `tbl_disposisi` (
  `id_disposisi` int(10) NOT NULL AUTO_INCREMENT,
  `tujuan` varchar(250) NOT NULL,
  `isi_disposisi` mediumtext NOT NULL,
  `sifat` varchar(100) NOT NULL,
  `batas_waktu` date NOT NULL,
  `catatan` varchar(250) NOT NULL,
  `id_surat` int(10) NOT NULL,
  `id_user` tinyint(2) NOT NULL,
  PRIMARY KEY (`id_disposisi`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

INSERT INTO tbl_disposisi VALUES("16","","lll","08:00 Wib","2020-09-28","","32","1");
INSERT INTO tbl_disposisi VALUES("19","","test
","08:00 Wib","2020-10-03","","33","1");
INSERT INTO tbl_disposisi VALUES("20","","fff","09:00 Wib","2020-10-04","","0","1");
INSERT INTO tbl_disposisi VALUES("21","","et","08:00 Wib","2020-10-04","","31","1");
INSERT INTO tbl_disposisi VALUES("22","","fff","08:00 Wib","2020-10-04","","0","1");
INSERT INTO tbl_disposisi VALUES("23","","DDDD","08:00 Wib","2020-10-04","","33","1");
INSERT INTO tbl_disposisi VALUES("24","","SMS","08:00 Wib","2020-10-04","","33","1");



DROP TABLE tbl_instansi;

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
  `id_user` tinyint(2) NOT NULL,
  PRIMARY KEY (`id_instansi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO tbl_instansi VALUES("1","Prov KEPRI","Sistem Informasi Rehabilitasi Rawat Jalan","Rehabilitasi","Jalan Hang Jebat KM.3, Batu Besar, Nongsa, Batu Besar, Kecamatan Nongsa, Kota Batam, Kepulauan Riau 29465","melly puspita","-","https://batamkepri.com","imron@gmail.com","Logo_BNN_kepri.png","1");



DROP TABLE tbl_jdl_kon_kelompok;

CREATE TABLE `tbl_jdl_kon_kelompok` (
  `id_jad_kon_kelompok` int(10) NOT NULL AUTO_INCREMENT,
  `isi_jad_kelompok` mediumtext NOT NULL,
  `jam_acara_kelompok` varchar(100) NOT NULL,
  `batas_waktu` date NOT NULL,
  `id_surat` int(10) NOT NULL,
  `id_user` tinyint(2) NOT NULL,
  PRIMARY KEY (`id_jad_kon_kelompok`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO tbl_jdl_kon_kelompok VALUES("7","kelompok","08:00 Wib","2020-10-01","0","1");
INSERT INTO tbl_jdl_kon_kelompok VALUES("9","cc","08:00 Wib","2020-10-01","0","1");
INSERT INTO tbl_jdl_kon_kelompok VALUES("10","kdkdkd
","10:00 Wib","2020-10-01","30","1");
INSERT INTO tbl_jdl_kon_kelompok VALUES("11","DFDFD","08:00 Wib","2020-10-04","33","1");



DROP TABLE tbl_jdl_kon_keluarga;

CREATE TABLE `tbl_jdl_kon_keluarga` (
  `id_jad_kon_keluarga` int(10) NOT NULL AUTO_INCREMENT,
  `isi_jad_keluarga` mediumtext NOT NULL,
  `jam_acara` varchar(100) NOT NULL,
  `batas_waktu` date NOT NULL,
  `id_surat` int(10) NOT NULL,
  `id_user` tinyint(2) NOT NULL,
  PRIMARY KEY (`id_jad_kon_keluarga`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

INSERT INTO tbl_jdl_kon_keluarga VALUES("4","DDDDDD","08:00 Wib","2020-09-30","0","1");
INSERT INTO tbl_jdl_kon_keluarga VALUES("5","DF","10:30 Wib","2020-09-30","0","1");
INSERT INTO tbl_jdl_kon_keluarga VALUES("11","kkkk","08:00 Wib","2020-10-01","30","1");
INSERT INTO tbl_jdl_kon_keluarga VALUES("12","GGGG","08:00 Wib","2020-10-04","33","1");



DROP TABLE tbl_jenis_zat;

CREATE TABLE `tbl_jenis_zat` (
  `id_zat` int(10) NOT NULL AUTO_INCREMENT,
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
  `id_user` tinyint(2) NOT NULL,
  PRIMARY KEY (`id_zat`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

INSERT INTO tbl_jenis_zat VALUES("22","jj","","Sedang","","","","Berat","","","","","33","1");
INSERT INTO tbl_jenis_zat VALUES("24",".","","Sedang","Sedang","","","","","","","","32","1");



DROP TABLE tbl_kategori;

CREATE TABLE `tbl_kategori` (
  `id_katego` tinyint(1) NOT NULL,
  `nama_katego` varchar(50) NOT NULL,
  PRIMARY KEY (`id_katego`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO tbl_kategori VALUES("0","");
INSERT INTO tbl_kategori VALUES("1","HIV/AIDS");
INSERT INTO tbl_kategori VALUES("2","TBC");
INSERT INTO tbl_kategori VALUES("3","Sistem Saluran Pembuluh Darah");
INSERT INTO tbl_kategori VALUES("4","Hepatitis B  ");
INSERT INTO tbl_kategori VALUES("5","Penyakit Kulit");
INSERT INTO tbl_kategori VALUES("6","Hepatitis C");
INSERT INTO tbl_kategori VALUES("7","Sistem Pernapasan");
INSERT INTO tbl_kategori VALUES("8","Penyakit Lainnya");
INSERT INTO tbl_kategori VALUES("9","Sistem Saluran Kandung Kemih");
INSERT INTO tbl_kategori VALUES("10","Sistem Pencernaan");
INSERT INTO tbl_kategori VALUES("20","Alkohol");
INSERT INTO tbl_kategori VALUES("21","Barbiturat");
INSERT INTO tbl_kategori VALUES("22","Cannabis");
INSERT INTO tbl_kategori VALUES("23","Lebih dari 3 zat per hari (termasuk alcohol)");
INSERT INTO tbl_kategori VALUES("24","Heroin");
INSERT INTO tbl_kategori VALUES("25","Kokain");
INSERT INTO tbl_kategori VALUES("26","Inhalan");
INSERT INTO tbl_kategori VALUES("27","Metadin/Buprenofin");
INSERT INTO tbl_kategori VALUES("28","Sedatif/Hinotik");
INSERT INTO tbl_kategori VALUES("29","Halusinogen");
INSERT INTO tbl_kategori VALUES("30","Opiat lain/Analgesik");
INSERT INTO tbl_kategori VALUES("31","Amfetamin");
INSERT INTO tbl_kategori VALUES("41","0");
INSERT INTO tbl_kategori VALUES("42","1");
INSERT INTO tbl_kategori VALUES("43","2");
INSERT INTO tbl_kategori VALUES("44","3");
INSERT INTO tbl_kategori VALUES("45","4");
INSERT INTO tbl_kategori VALUES("46","5");
INSERT INTO tbl_kategori VALUES("47","6");
INSERT INTO tbl_kategori VALUES("48","7");
INSERT INTO tbl_kategori VALUES("49","8");
INSERT INTO tbl_kategori VALUES("50","9");
INSERT INTO tbl_kategori VALUES("60","1. Asesmen lanjutan / mendalam");
INSERT INTO tbl_kategori VALUES("61","2. Evaluasi Psikologis");
INSERT INTO tbl_kategori VALUES("62","3. Program Detoksifikasi");
INSERT INTO tbl_kategori VALUES("63","4. Wawancara Motivasional");
INSERT INTO tbl_kategori VALUES("64","5. Intervensi Singkat");
INSERT INTO tbl_kategori VALUES("65","6. Terapi Rumatan");
INSERT INTO tbl_kategori VALUES("66","7. Rehabilitasi rawat inap");
INSERT INTO tbl_kategori VALUES("67","8. Konseling");
INSERT INTO tbl_kategori VALUES("68","9. Lain-lain");
INSERT INTO tbl_kategori VALUES("70","Ringan");
INSERT INTO tbl_kategori VALUES("71","Sedang");
INSERT INTO tbl_kategori VALUES("72","Berat");
INSERT INTO tbl_kategori VALUES("73","Negatif");
INSERT INTO tbl_kategori VALUES("74","Positif");



DROP TABLE tbl_klasifikasi;

CREATE TABLE `tbl_klasifikasi` (
  `id_klasifikasi` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `kode` varchar(30) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `uraian` mediumtext NOT NULL,
  `kota` int(11) unsigned NOT NULL,
  `id_user` tinyint(2) unsigned NOT NULL,
  PRIMARY KEY (`id_klasifikasi`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO tbl_klasifikasi VALUES("3","004","Klink awalbros","Jalan Nongsa batam","6","1");
INSERT INTO tbl_klasifikasi VALUES("4","003","Klinik BNN Batam","Jl imperium batam","6","1");
INSERT INTO tbl_klasifikasi VALUES("5","002","Klink Kimia Farma batu aji","jln batu aji simpang lampu merah","2","1");
INSERT INTO tbl_klasifikasi VALUES("7","001","Klik Pratama anugrah allah","Jl Bintan center","1","1");



DROP TABLE tbl_kota;

CREATE TABLE `tbl_kota` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nama_kota` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO tbl_kota VALUES("1","Kabupaten Bintan");
INSERT INTO tbl_kota VALUES("2","Kabupaten Karimun");
INSERT INTO tbl_kota VALUES("3","Kabupaten Kepulauan Anambas");
INSERT INTO tbl_kota VALUES("4","Kabupaten Lingga");
INSERT INTO tbl_kota VALUES("5","Kabupaten Natuna");
INSERT INTO tbl_kota VALUES("6","Kota Batam");
INSERT INTO tbl_kota VALUES("7","Kota Tanjungpinang");



DROP TABLE tbl_scrining;

CREATE TABLE `tbl_scrining` (
  `id_scrining` int(10) NOT NULL AUTO_INCREMENT,
  `level_candu` varchar(250) NOT NULL,
  `isi_scrining` mediumtext NOT NULL,
  `jenis_zat` text NOT NULL,
  `pendidikan` text NOT NULL,
  `penyakit` text NOT NULL,
  `usia_pakai` varchar(12) NOT NULL,
  `jenis_zat_akhir` text NOT NULL,
  `id_surat` int(10) NOT NULL,
  `id_user` tinyint(2) NOT NULL,
  PRIMARY KEY (`id_scrining`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=latin1;

INSERT INTO tbl_scrining VALUES("50","Ringan","kakak","Alkohol,Lebih dari 3 zat per hari (termasuk alcohol)","imron","Sistem Saluran Pembuluh Darah","23","TBC","31","1");
INSERT INTO tbl_scrining VALUES("58","Ringan","KJADNJADKNDKAD","Inhalan","SMA","Penyakit Kulit","28","Alkohol","0","1");
INSERT INTO tbl_scrining VALUES("60","Sedang","uji coba","Barbiturat","SMA","Hepatitis B  ","21","Alkohol","0","1");
INSERT INTO tbl_scrining VALUES("61","Ringan","dddd","Barbiturat","kdkd","Sistem Saluran Pembuluh Darah","21","Alkohol","0","1");
INSERT INTO tbl_scrining VALUES("62","Sedang","tes","Alkohol","SMA","Sistem Pernapasan","21","Heroin","0","1");
INSERT INTO tbl_scrining VALUES("64","Sedang","ff","Cannabis","ff","Hepatitis C","dff","Cannabis","33","1");



DROP TABLE tbl_sett;

CREATE TABLE `tbl_sett` (
  `id_sett` tinyint(1) NOT NULL,
  `surat_masuk` tinyint(2) NOT NULL,
  `surat_keluar` tinyint(2) NOT NULL,
  `referensi` tinyint(2) NOT NULL,
  `id_user` tinyint(2) NOT NULL,
  PRIMARY KEY (`id_sett`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO tbl_sett VALUES("1","10","10","10","1");



DROP TABLE tbl_surat_masuk;

CREATE TABLE `tbl_surat_masuk` (
  `id_surat` int(10) NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`id_surat`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

INSERT INTO tbl_surat_masuk VALUES("28","Fajar Antono","Indramayu","Laki-laki","Islam","Menikah","IT Development","WNI","2","1","Jl","asasas","082112066865","999","2020-09-11","2020-09-11","","asasasas","1","0");
INSERT INTO tbl_surat_masuk VALUES("29","tesrt","asas","Perempuan","Islam","Menikah","as","asas","3","11","Perempuan","sdsd","11","1","2020-09-11","2020-09-11","","Suku Batak","4","7");
INSERT INTO tbl_surat_masuk VALUES("30","ahmad bayu","batam","Laki-laki","Islam","Menikah","pengusaha","indo","4","0823009021","batam","uji coba","082388009021","0823009021","2020-08-26","2020-09-12","","uji coba","11","7");
INSERT INTO tbl_surat_masuk VALUES("31","rauf","rauf","Perempuan","Kristen Katolik","Menikah","rauf","rauf","5","9399393","rauf","rauf","393939","93939","2020-09-14","2020-09-14","","Suku Sunda","1","4");
INSERT INTO tbl_surat_masuk VALUES("32","IMRON SIMANJUNTAK 3","simangalam","Laki-laki","Islam","Menikah","kpu","082388009021","6","0823880090210","Jalan Kebahagian semu","polres","082388009021","082388009021","1994-12-27","2020-09-17","5081-android_logo_PNG35.png","Suku Jawa","1","3");
INSERT INTO tbl_surat_masuk VALUES("33","nia","nia","nia","Islam","Menikah","nia","nia","7","123456","nia","nia","123456","123456","2020-09-17","2020-09-17","4302-disposisiksn.jpg","Suku Jawa","11","3");



DROP TABLE tbl_user;

CREATE TABLE `tbl_user` (
  `id_user` tinyint(2) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(35) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nip` varchar(25) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

INSERT INTO tbl_user VALUES("1","adminbnnkepri","c03d10791bdacfee3589587533706e41","Super Admin Siraja BNNP KEPRI","-","1");
INSERT INTO tbl_user VALUES("2","MellyPuspitasari","21232f297a57a5a743894a0e4a801fc3","Melly Puspitasari","-","2");
INSERT INTO tbl_user VALUES("7","klinik","18ab944f1946f6cb9c322bb119d9a500","Klinik","-","3");
INSERT INTO tbl_user VALUES("8","imron3","1b6ca11d319d9e8b7521a4671f9d47a4","imron pasien","-","5");
INSERT INTO tbl_user VALUES("9","11","45eb1c1c5b0a57550e005301208837ac","tesrt","-","5");
INSERT INTO tbl_user VALUES("10","11","45eb1c1c5b0a57550e005301208837ac","tesrt","-","5");
INSERT INTO tbl_user VALUES("11","imron2","0528040afc86af8a3256af5341a789f5","imron klinik","-","3");
INSERT INTO tbl_user VALUES("12","0823009021","19e72a1d69001fe375dbd187ac9f2933","ahmad bayu","-","5");
INSERT INTO tbl_user VALUES("13","9399393","3465831a96b4a595114704b5e3ff0fb0","rauf","-","5");
INSERT INTO tbl_user VALUES("14","0823880090210","8bcd1f3ae90bb4a27b0ad2eb3619fd9e","IMRON SIMANJUNTAK 3","-","5");
INSERT INTO tbl_user VALUES("15","rauf","7e693ef06b03ff67ebd9d7d746f9082b","rauf","-","15");
INSERT INTO tbl_user VALUES("16","123456","79db875f1503511e1d9ab3dc48875d45","nia","-","5");
INSERT INTO tbl_user VALUES("17","imrondokter","97d52ce731525e8be5c7b248271c0ee0","Imron Dokter","JL. Menuju keberkahan","4");
INSERT INTO tbl_user VALUES("18","mellypuspitasari2","24a3d0afe863ddf257bee0a3efb2a10c","melly puspitasari","sukajadi perum casablanca","2");



DROP TABLE tbl_wali_klien;

CREATE TABLE `tbl_wali_klien` (
  `id_wali` int(10) NOT NULL AUTO_INCREMENT,
  `nama_wali` varchar(40) NOT NULL,
  `alamat_wali` mediumtext NOT NULL,
  `hubungan` varchar(100) NOT NULL,
  `tempat_lahir_wali` varchar(35) NOT NULL,
  `batas_waktu` date NOT NULL,
  `no_telp` varchar(25) NOT NULL,
  `nik` varchar(25) NOT NULL,
  `pekerjaan_wali` varchar(35) NOT NULL,
  `id_surat` int(10) NOT NULL,
  `id_user` tinyint(2) NOT NULL,
  PRIMARY KEY (`id_wali`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

INSERT INTO tbl_wali_klien VALUES("16","DINO","JL SAMA","Abang Kandung","","2020-09-08","08230000000000","","","22","1");
INSERT INTO tbl_wali_klien VALUES("17","duka","9393","Abang Kandung","simangala","2020-10-01","08222","batam","dosen","32","1");
INSERT INTO tbl_wali_klien VALUES("18","coba","314","Adik Kandung","sima","2020-10-02","323","jl maju","ffff","33","1");



