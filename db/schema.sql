
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
DROP TABLE IF EXISTS `apply_cv`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `apply_cv` (
  `id_apply_cv` int NOT NULL AUTO_INCREMENT,
  `date_apply` varchar(50) DEFAULT NULL,
  `no_ktp` varchar(16) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `sex` varchar(25) DEFAULT NULL,
  `place_birth` varchar(100) DEFAULT NULL,
  `date_birth` date DEFAULT NULL,
  `last_degree` varchar(100) DEFAULT NULL,
  `school` varchar(100) DEFAULT NULL,
  `major` varchar(100) DEFAULT NULL,
  `jurusan_det` varchar(100) DEFAULT NULL,
  `gpa` float DEFAULT NULL,
  `no_tlp` varchar(100) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `job_experience` varchar(500) DEFAULT NULL,
  `age` int DEFAULT NULL,
  `code` varchar(50) DEFAULT NULL,
  `tb` int DEFAULT NULL,
  `bb` int DEFAULT NULL,
  `gambar` varchar(250) DEFAULT NULL,
  `gambar_ijazah` varchar(250) DEFAULT NULL,
  `gambar_nilai` varchar(250) DEFAULT NULL,
  `follow` varchar(200) DEFAULT NULL,
  `confirm_by` varchar(250) DEFAULT NULL,
  `confirm_date` date DEFAULT NULL,
  `notes` varchar(250) DEFAULT NULL,
  `kb1` varchar(20) DEFAULT NULL,
  `kb2` varchar(20) DEFAULT NULL,
  `kb3` varchar(20) DEFAULT NULL,
  `kb4` varchar(20) DEFAULT NULL,
  `kb5` varchar(20) DEFAULT NULL,
  `kb6` varchar(20) DEFAULT NULL,
  `kb7` varchar(20) DEFAULT NULL,
  `kb8` varchar(20) DEFAULT NULL,
  `kb9` varchar(20) DEFAULT NULL,
  `kb10` varchar(20) DEFAULT NULL,
  `p1` varchar(20) DEFAULT NULL,
  `p2` varchar(20) DEFAULT NULL,
  `status_print` int DEFAULT NULL,
  `skill` varchar(1000) DEFAULT NULL,
  `academic` varchar(1000) DEFAULT NULL,
  `non_academic` varchar(1000) DEFAULT NULL,
  KEY `id_apply_cv` (`id_apply_cv`)
) ENGINE=InnoDB AUTO_INCREMENT=31280 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `career`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `career` (
  `id_career` int NOT NULL AUTO_INCREMENT,
  `title_career` varchar(100) NOT NULL,
  `ket_career` varchar(1000) DEFAULT NULL,
  `date` varchar(25) DEFAULT NULL,
  `show_unshow` varchar(21) NOT NULL,
  `code` varchar(50) DEFAULT NULL,
  `age_min` int DEFAULT NULL,
  `age_max` int DEFAULT NULL,
  `last_degree` varchar(200) DEFAULT NULL,
  `major` varchar(600) DEFAULT NULL,
  `closed` varchar(25) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `jenis_kelamin` varchar(100) DEFAULT NULL,
  `peserta_limit` int DEFAULT NULL,
  PRIMARY KEY (`id_career`)
) ENGINE=InnoDB AUTO_INCREMENT=259 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `career_backup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `career_backup` (
  `id_career_backup` int NOT NULL AUTO_INCREMENT,
  `title_career` varchar(100) DEFAULT NULL,
  `ket_career` varchar(1000) DEFAULT NULL,
  `date` varchar(25) DEFAULT NULL,
  `show_unshow` varchar(21) DEFAULT NULL,
  `code` varchar(50) DEFAULT NULL,
  `age_min` int DEFAULT NULL,
  `age_max` int DEFAULT NULL,
  `last_degree` varchar(200) DEFAULT NULL,
  `major` varchar(600) DEFAULT NULL,
  `closed` varchar(25) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `jenis_kelamin` varchar(100) DEFAULT NULL,
  `peserta_limit` int DEFAULT NULL,
  PRIMARY KEY (`id_career_backup`)
) ENGINE=MyISAM AUTO_INCREMENT=261 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `cities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cities` (
  `city_id` int NOT NULL AUTO_INCREMENT,
  `city_name` varchar(255) DEFAULT NULL,
  `prov_id` int DEFAULT NULL,
  `city_type` enum('kota','kabupaten') NOT NULL DEFAULT 'kabupaten',
  PRIMARY KEY (`city_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=476 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `contact_us`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact_us` (
  `id_contact` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `message` varchar(1200) DEFAULT NULL,
  `date_contact` varchar(100) DEFAULT NULL,
  `to` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_contact`)
) ENGINE=InnoDB AUTO_INCREMENT=6316 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `districts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `districts` (
  `dis_id` int NOT NULL AUTO_INCREMENT,
  `dis_name` varchar(255) DEFAULT NULL,
  `city_id` int DEFAULT NULL,
  PRIMARY KEY (`dis_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=6995 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `employee_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employee_data` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `date` datetime DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `jenis_kelamin` enum('Pria','Wanita') DEFAULT NULL,
  `gol_darah` enum('A','B','AB','O') DEFAULT NULL,
  `umur` int DEFAULT NULL,
  `tempat_lahir` varchar(100) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `no_ktp` varchar(20) DEFAULT NULL,
  `no_npwp` varchar(25) DEFAULT NULL,
  `no_kk` varchar(20) DEFAULT NULL,
  `alamat_ktp` text,
  `rt_rw_ktp` varchar(10) DEFAULT NULL,
  `kelurahan_ktp` varchar(100) DEFAULT NULL,
  `kecamatan_ktp` varchar(100) DEFAULT NULL,
  `kota_ktp` varchar(100) DEFAULT NULL,
  `provinsi_ktp` varchar(100) DEFAULT NULL,
  `alamat_tinggal` text,
  `rt_rw_tinggal` varchar(10) DEFAULT NULL,
  `kelurahan_tinggal` varchar(100) DEFAULT NULL,
  `kecamatan_tinggal` varchar(100) DEFAULT NULL,
  `kota_tinggal` varchar(100) DEFAULT NULL,
  `provinsi_tinggal` varchar(100) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `agama` varchar(50) DEFAULT NULL,
  `tinggi_badan` int DEFAULT NULL,
  `berat_badan` int DEFAULT NULL,
  `status_tempat_tinggal` varchar(50) DEFAULT NULL,
  `status_pernikahan` varchar(50) DEFAULT NULL,
  `golongan` varchar(20) DEFAULT NULL,
  `posisi` varchar(50) DEFAULT NULL,
  `gaji` decimal(15,2) DEFAULT NULL,
  `jenjang1` varchar(50) DEFAULT NULL,
  `nama_sekolah1` varchar(100) DEFAULT NULL,
  `jurusan1` varchar(100) DEFAULT NULL,
  `tahun1` int DEFAULT NULL,
  `nilai_akhir1` decimal(5,2) DEFAULT NULL,
  `kota1` varchar(100) DEFAULT NULL,
  `jenjang2` varchar(50) DEFAULT NULL,
  `nama_sekolah2` varchar(100) DEFAULT NULL,
  `jurusan2` varchar(100) DEFAULT NULL,
  `tahun2` int DEFAULT NULL,
  `nilai_akhir2` decimal(5,2) DEFAULT NULL,
  `kota2` varchar(100) DEFAULT NULL,
  `jenjang3` varchar(50) DEFAULT NULL,
  `nama_sekolah3` varchar(100) DEFAULT NULL,
  `jurusan3` varchar(100) DEFAULT NULL,
  `tahun3` int DEFAULT NULL,
  `nilai_akhir3` decimal(5,2) DEFAULT NULL,
  `kota3` varchar(100) DEFAULT NULL,
  `jenjang4` varchar(50) DEFAULT NULL,
  `nama_sekolah4` varchar(100) DEFAULT NULL,
  `jurusan4` varchar(100) DEFAULT NULL,
  `tahun4` int DEFAULT NULL,
  `nilai_akhir4` decimal(5,2) DEFAULT NULL,
  `kota4` varchar(100) DEFAULT NULL,
  `nama_training1` varchar(100) DEFAULT NULL,
  `lembaga1` varchar(100) DEFAULT NULL,
  `kota_training1` varchar(100) DEFAULT NULL,
  `tahun_training1` int DEFAULT NULL,
  `skill_training1` text,
  `nama_training2` varchar(100) DEFAULT NULL,
  `lembaga2` varchar(100) DEFAULT NULL,
  `kota_training2` varchar(100) DEFAULT NULL,
  `tahun_training2` int DEFAULT NULL,
  `skill_training2` text,
  `nama_training3` varchar(100) DEFAULT NULL,
  `lembaga3` varchar(100) DEFAULT NULL,
  `kota_training3` varchar(100) DEFAULT NULL,
  `tahun_training3` int DEFAULT NULL,
  `skill_training3` text,
  `nama_training4` varchar(100) DEFAULT NULL,
  `lembaga4` varchar(100) DEFAULT NULL,
  `kota_training4` varchar(100) DEFAULT NULL,
  `tahun_training4` int DEFAULT NULL,
  `skill_training4` text,
  `bahasa1` varchar(50) DEFAULT NULL,
  `lisan1` varchar(20) DEFAULT NULL,
  `tulisan1` varchar(20) DEFAULT NULL,
  `bahasa2` varchar(50) DEFAULT NULL,
  `lisan2` varchar(20) DEFAULT NULL,
  `tulisan2` varchar(20) DEFAULT NULL,
  `bahasa3` varchar(50) DEFAULT NULL,
  `lisan3` varchar(20) DEFAULT NULL,
  `tulisan3` varchar(20) DEFAULT NULL,
  `keterampilan1` varchar(100) DEFAULT NULL,
  `keterangan1` varchar(50) DEFAULT NULL,
  `deskripsi1` text,
  `keterampilan2` varchar(100) DEFAULT NULL,
  `keterangan2` varchar(50) DEFAULT NULL,
  `deskripsi2` text,
  `keterampilan3` varchar(100) DEFAULT NULL,
  `keterangan3` varchar(50) DEFAULT NULL,
  `deskripsi3` text,
  `keterampilan4` varchar(100) DEFAULT NULL,
  `keterangan4` varchar(50) DEFAULT NULL,
  `deskripsi4` text,
  `keterampilan5` varchar(100) DEFAULT NULL,
  `keterangan5` varchar(50) DEFAULT NULL,
  `deskripsi5` text,
  `nama_perusahaan` varchar(100) DEFAULT NULL,
  `bidang_usaha` varchar(100) DEFAULT NULL,
  `kota_perusahaan` varchar(100) DEFAULT NULL,
  `jabatan_perusahaan` varchar(100) DEFAULT NULL,
  `awal_kerja` date DEFAULT NULL,
  `akhir_kerja` date DEFAULT NULL,
  `gaji_terakhir` decimal(15,2) DEFAULT NULL,
  `alasan_berhenti` text,
  `tugas_tgg_jawab` text,
  `alasan_bekerja` text,
  `fasilitas_bekerja` text,
  `kapan_mulai_bekerja` date DEFAULT NULL,
  `kenalan_perusahaan` varchar(100) DEFAULT NULL,
  `nama_kenalan1` varchar(100) DEFAULT NULL,
  `jabatan_kenalan1` varchar(100) DEFAULT NULL,
  `bagian_kenalan1` varchar(100) DEFAULT NULL,
  `hubungan_kenalan1` varchar(100) DEFAULT NULL,
  `nama_kenalan2` varchar(100) DEFAULT NULL,
  `jabatan_kenalan2` varchar(100) DEFAULT NULL,
  `bagian_kenalan2` varchar(100) DEFAULT NULL,
  `hubungan_kenalan2` varchar(100) DEFAULT NULL,
  `kelebihan` text,
  `kekurangan` text,
  `pernah_sakit` varchar(20) DEFAULT NULL,
  `nama_penyakit1` varchar(100) DEFAULT NULL,
  `lama_sakit1` varchar(50) DEFAULT NULL,
  `akibat_ditimbulkan1` text,
  `nama_penyakit2` varchar(100) DEFAULT NULL,
  `lama_sakit2` varchar(50) DEFAULT NULL,
  `akibat_ditimbulkan2` text,
  `buta_warna` varchar(20) DEFAULT NULL,
  `check1` varchar(50) DEFAULT NULL,
  `check2` varchar(50) DEFAULT NULL,
  `foto_formal` varchar(255) DEFAULT NULL,
  `ijazah` varchar(255) DEFAULT NULL,
  `transkrip_nilai` varchar(255) DEFAULT NULL,
  `ktp` varchar(255) DEFAULT NULL,
  `npwp` varchar(255) DEFAULT NULL,
  `kartu_keluarga` varchar(255) DEFAULT NULL,
  `spk1` varchar(255) DEFAULT NULL,
  `spk2` varchar(255) DEFAULT NULL,
  `spk3` varchar(255) DEFAULT NULL,
  `sertif_keahlian1` varchar(255) DEFAULT NULL,
  `sertif_keahlian2` varchar(255) DEFAULT NULL,
  `skck` varchar(255) DEFAULT NULL,
  `kartu_disnaker` varchar(255) DEFAULT NULL,
  `surat_sehat` varchar(255) DEFAULT NULL,
  `sertif_keahlian3` varchar(255) DEFAULT NULL,
  `kelengkapan_berkas` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `confirm_by` varchar(100) DEFAULT NULL,
  `confirm_date` datetime DEFAULT NULL,
  `note` text,
  `status_print` varchar(50) DEFAULT NULL,
  `jenis_prestasi1` varchar(100) DEFAULT NULL,
  `peringkat1` varchar(50) DEFAULT NULL,
  `tingkat_prestasi1` varchar(50) DEFAULT NULL,
  `tahun_prestasi1` int DEFAULT NULL,
  `keterangan_prestasi1` text,
  `jenis_prestasi2` varchar(100) DEFAULT NULL,
  `peringkat2` varchar(50) DEFAULT NULL,
  `tingkat_prestasi2` varchar(50) DEFAULT NULL,
  `tahun_prestasi2` int DEFAULT NULL,
  `keterangan_prestasi2` text,
  `jenis_prestasi3` varchar(100) DEFAULT NULL,
  `peringkat3` varchar(50) DEFAULT NULL,
  `tingkat_prestasi3` varchar(50) DEFAULT NULL,
  `tahun_prestasi3` int DEFAULT NULL,
  `keterangan_prestasi3` text,
  `jenis_prestasi4` varchar(100) DEFAULT NULL,
  `peringkat4` varchar(50) DEFAULT NULL,
  `tingkat_prestasi4` varchar(50) DEFAULT NULL,
  `tahun_prestasi4` int DEFAULT NULL,
  `keterangan_prestasi4` text,
  `jenis_prestasi5` varchar(100) DEFAULT NULL,
  `peringkat5` varchar(50) DEFAULT NULL,
  `tingkat_prestasi5` varchar(50) DEFAULT NULL,
  `tahun_prestasi5` int DEFAULT NULL,
  `keterangan_prestasi5` text,
  `nama_organisasi1` varchar(100) DEFAULT NULL,
  `jenis_organisasi1` varchar(100) DEFAULT NULL,
  `jabatan_organisasi1` varchar(100) DEFAULT NULL,
  `periode_organisasi1` varchar(50) DEFAULT NULL,
  `nama_organisasi2` varchar(100) DEFAULT NULL,
  `jenis_organisasi2` varchar(100) DEFAULT NULL,
  `jabatan_organisasi2` varchar(100) DEFAULT NULL,
  `periode_organisasi2` varchar(50) DEFAULT NULL,
  `nama_organisasi3` varchar(100) DEFAULT NULL,
  `jenis_organisasi3` varchar(100) DEFAULT NULL,
  `jabatan_organisasi3` varchar(100) DEFAULT NULL,
  `periode_organisasi3` varchar(50) DEFAULT NULL,
  `nama_referensi1` varchar(100) DEFAULT NULL,
  `alamat_referensi1` text,
  `no_telp_referensi1` varchar(20) DEFAULT NULL,
  `pekerjaan_referensi1` varchar(100) DEFAULT NULL,
  `hubungan_referensi1` varchar(50) DEFAULT NULL,
  `nama_referensi2` varchar(100) DEFAULT NULL,
  `alamat_referensi2` text,
  `no_telp_referensi2` varchar(20) DEFAULT NULL,
  `pekerjaan_referensi2` varchar(100) DEFAULT NULL,
  `hubungan_referensi2` varchar(50) DEFAULT NULL,
  `nama_dihubungi1` varchar(100) DEFAULT NULL,
  `alamat_dihubungi1` text,
  `no_telp_dihubungi1` varchar(20) DEFAULT NULL,
  `pekerjaan_dihubungi1` varchar(100) DEFAULT NULL,
  `hubungan_dihubungi1` varchar(50) DEFAULT NULL,
  `nama_dihubungi2` varchar(100) DEFAULT NULL,
  `alamat_dihubungi2` text,
  `no_telp_dihubungi2` varchar(20) DEFAULT NULL,
  `pekerjaan_dihubungi2` varchar(100) DEFAULT NULL,
  `hubungan_dihubungi2` varchar(50) DEFAULT NULL,
  `sertifikat_vaksin` varchar(255) DEFAULT NULL,
  `kode_pos` varchar(10) DEFAULT NULL,
  `surat_pernyataan` varchar(255) DEFAULT NULL,
  `ibu_kandung` varchar(100) DEFAULT NULL,
  `sudah_proses` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=554 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `gallery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gallery` (
  `id` int NOT NULL AUTO_INCREMENT,
  `text` varchar(1000) DEFAULT NULL,
  `subtext` varchar(1000) DEFAULT NULL,
  `gambar` varchar(250) DEFAULT NULL,
  `category` varchar(200) DEFAULT NULL,
  `member` varchar(200) DEFAULT NULL,
  `show_unshow` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=122 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `karir`;
/*!50001 DROP VIEW IF EXISTS `karir`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `karir` AS SELECT 
 1 AS `id`,
 1 AS `date`,
 1 AS `division_name`,
 1 AS `division_code`,
 1 AS `keterangan_job`,
 1 AS `close`,
 1 AS `jabatan`,
 1 AS `last_degree`,
 1 AS `major`,
 1 AS `location`,
 1 AS `limit`*/;
SET character_set_client = @saved_cs_client;
DROP TABLE IF EXISTS `karir_bak`;
/*!50001 DROP VIEW IF EXISTS `karir_bak`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `karir_bak` AS SELECT 
 1 AS `id`,
 1 AS `date`,
 1 AS `division_name`,
 1 AS `division_code`,
 1 AS `keterangan_job`,
 1 AS `close`,
 1 AS `jabatan`,
 1 AS `last_degree`,
 1 AS `major`,
 1 AS `location`,
 1 AS `limit`,
 1 AS `posisi`,
 1 AS `total_pelamar`,
 1 AS `sisa`*/;
SET character_set_client = @saved_cs_client;
DROP TABLE IF EXISTS `keyvalues`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `keyvalues` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(50) NOT NULL,
  `value` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1001 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `major`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `major` (
  `id` int NOT NULL AUTO_INCREMENT,
  `major_name` varchar(100) DEFAULT NULL,
  `kat_degree` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `major_backup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `major_backup` (
  `id_major_backup` int NOT NULL AUTO_INCREMENT,
  `major_name` varchar(100) DEFAULT NULL,
  `kat_degree` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_major_backup`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `provinces`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `provinces` (
  `prov_id` int NOT NULL AUTO_INCREMENT,
  `prov_name` varchar(255) DEFAULT NULL,
  `locationid` int DEFAULT NULL,
  `status` int DEFAULT '1',
  PRIMARY KEY (`prov_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `req_employee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `req_employee` (
  `id_req` int NOT NULL AUTO_INCREMENT,
  `position` varchar(50) DEFAULT NULL,
  `division` varchar(50) DEFAULT NULL,
  `responsible` varchar(50) DEFAULT NULL,
  `reason` varchar(100) DEFAULT NULL,
  `total` int DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `source` varchar(100) DEFAULT NULL,
  `qualification` varchar(100) DEFAULT NULL,
  `additional` varchar(100) DEFAULT NULL,
  `start_work` varchar(30) DEFAULT NULL,
  `struktur` varchar(100) DEFAULT NULL,
  `duty` varchar(100) DEFAULT NULL,
  `notes` varchar(100) DEFAULT NULL,
  `date` varchar(30) DEFAULT NULL,
  KEY `id_req` (`id_req`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `subdistricts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subdistricts` (
  `subdis_id` int NOT NULL AUTO_INCREMENT,
  `subdis_name` varchar(255) DEFAULT NULL,
  `dis_id` int DEFAULT NULL,
  PRIMARY KEY (`subdis_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=81226 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `tb_audit_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_audit_log` (
  `id` int NOT NULL AUTO_INCREMENT,
  `action` enum('create','update','delete') NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `record_id` varchar(64) DEFAULT NULL,
  `data_before` longtext,
  `data_after` longtext,
  `user_identifier` varchar(128) DEFAULT 'guest',
  `action_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_address` varchar(45) DEFAULT NULL,
  `computer_name` varchar(255) DEFAULT NULL,
  `user_agent` varchar(512) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_action` (`action`),
  KEY `idx_table` (`table_name`),
  KEY `idx_user` (`user_identifier`),
  KEY `idx_action_at` (`action_at`)
) ENGINE=InnoDB AUTO_INCREMENT=4203 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `tb_contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_contact` (
  `id` int NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` varchar(800) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8197 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `tb_disclaimer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_disclaimer` (
  `id_disclaimer` int NOT NULL AUTO_INCREMENT,
  `content` text,
  PRIMARY KEY (`id_disclaimer`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `tb_faq`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_faq` (
  `id_faq` int NOT NULL AUTO_INCREMENT,
  `question` text,
  `answer` text,
  PRIMARY KEY (`id_faq`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `tb_home`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_home` (
  `id` int NOT NULL AUTO_INCREMENT,
  `text` varchar(30) NOT NULL,
  `slider1` varchar(255) NOT NULL,
  `slider2` varchar(255) NOT NULL,
  `slider3` varchar(255) NOT NULL,
  `slider4` varchar(255) DEFAULT NULL,
  `slider5` varchar(255) DEFAULT NULL,
  `slider6` varchar(255) DEFAULT NULL,
  `slider7` varchar(255) DEFAULT NULL,
  `slider8` varchar(255) DEFAULT NULL,
  `about` text NOT NULL,
  `client1` varchar(255) NOT NULL,
  `client2` varchar(255) NOT NULL,
  `client3` varchar(255) NOT NULL,
  `client4` varchar(255) NOT NULL,
  `client5` varchar(255) NOT NULL,
  `client6` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `tb_lob`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_lob` (
  `id` int NOT NULL AUTO_INCREMENT,
  `judul` enum('STAMPING DIVISION','INJECTION DIVISION','MACHINING DIVISION','ASSEMBLY DIVISION','TOOLING DIVISION','SILICON RUBBER DIVISION') NOT NULL,
  `deskripsi` text NOT NULL,
  `img_besar` varchar(255) NOT NULL,
  `product1_name` varchar(30) NOT NULL,
  `product1` varchar(255) NOT NULL,
  `product2_name` varchar(30) NOT NULL,
  `product2` varchar(255) NOT NULL,
  `product3_name` varchar(30) NOT NULL,
  `product3` varchar(255) NOT NULL,
  `product4_name` varchar(30) NOT NULL,
  `product4` varchar(255) NOT NULL,
  `product5_name` varchar(30) NOT NULL,
  `product5` varchar(255) NOT NULL,
  `product6_name` varchar(30) NOT NULL,
  `product6` varchar(255) NOT NULL,
  `machine1_name` varchar(30) NOT NULL,
  `machine1` varchar(255) NOT NULL,
  `machine2_name` varchar(30) NOT NULL,
  `machine2` varchar(255) NOT NULL,
  `machine3_name` varchar(30) NOT NULL,
  `machine3` varchar(255) NOT NULL,
  `machine4_name` varchar(30) NOT NULL,
  `machine4` varchar(255) NOT NULL,
  `machine5_name` varchar(30) NOT NULL,
  `machine5` varchar(255) NOT NULL,
  `machine6_name` varchar(30) NOT NULL,
  `machine6` varchar(255) NOT NULL,
  `tech1_name` varchar(30) NOT NULL,
  `tech1` varchar(255) NOT NULL,
  `tech2_name` varchar(30) NOT NULL,
  `tech2` varchar(255) NOT NULL,
  `tech3_name` varchar(30) NOT NULL,
  `tech3` varchar(255) NOT NULL,
  `tech4_name` varchar(30) NOT NULL,
  `tech4` varchar(255) NOT NULL,
  `tech5_name` varchar(30) NOT NULL,
  `tech5` varchar(255) NOT NULL,
  `tech6_name` varchar(30) NOT NULL,
  `tech6` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `tb_master_major`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_master_major` (
  `id` int NOT NULL AUTO_INCREMENT,
  `position` varchar(50) NOT NULL,
  `category_major` varchar(50) NOT NULL,
  `major_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `tb_pelamar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_pelamar` (
  `id` int NOT NULL AUTO_INCREMENT,
  `date` datetime DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `jenis_kelamin` varchar(30) DEFAULT NULL,
  `gol_darah` enum('A','B','AB','O') DEFAULT NULL,
  `umur` int DEFAULT NULL,
  `tempat_lahir` varchar(100) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `no_ktp` bigint DEFAULT NULL,
  `no_npwp` varchar(25) DEFAULT NULL,
  `no_kk` varchar(30) DEFAULT NULL,
  `alamat_ktp` varchar(400) DEFAULT NULL,
  `rt_rw_ktp` varchar(50) DEFAULT NULL,
  `kelurahan_ktp` varchar(100) DEFAULT NULL,
  `kecamatan_ktp` varchar(100) DEFAULT NULL,
  `kota_ktp` varchar(100) DEFAULT NULL,
  `provinsi_ktp` varchar(100) DEFAULT NULL,
  `alamat_tinggal` varchar(100) DEFAULT NULL,
  `rt_rw_tinggal` varchar(50) DEFAULT NULL,
  `kelurahan_tinggal` varchar(100) DEFAULT NULL,
  `kecamatan_tinggal` varchar(100) DEFAULT NULL,
  `kota_tinggal` varchar(100) DEFAULT NULL,
  `provinsi_tinggal` varchar(100) DEFAULT NULL,
  `no_hp` bigint DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `agama` enum('Islam','Kristen Protestan','Kristen Katolik','Hindu','Buddha','Konghucu') DEFAULT NULL,
  `tinggi_badan` int DEFAULT NULL,
  `berat_badan` int DEFAULT NULL,
  `status_tempat_tinggal` enum('Milik Orang Tua','Kost','Pribadi') DEFAULT NULL,
  `status_pernikahan` varchar(30) DEFAULT NULL,
  `golongan` varchar(30) DEFAULT NULL,
  `posisi` varchar(100) DEFAULT NULL,
  `gaji` int DEFAULT NULL,
  `jenjang1` enum('SMP','SMA/SMK','D1','D2','D3','D4','S1','S2','S3') DEFAULT NULL,
  `nama_sekolah1` varchar(100) DEFAULT NULL,
  `jurusan1` varchar(100) DEFAULT NULL,
  `tahun1` int DEFAULT NULL,
  `nilai_akhir1` varchar(5) DEFAULT NULL,
  `kota1` varchar(100) DEFAULT NULL,
  `jenjang2` enum('SMP','SMA/SMK','D1','D2','D3','D4','S1','S2','S3') DEFAULT NULL,
  `nama_sekolah2` varchar(100) DEFAULT NULL,
  `jurusan2` varchar(100) DEFAULT NULL,
  `tahun2` int DEFAULT NULL,
  `nilai_akhir2` double DEFAULT NULL,
  `kota2` varchar(100) DEFAULT NULL,
  `jenjang3` enum('SMP','SMA/SMK','D1','D2','D3','D4','S1','S2','S3') DEFAULT NULL,
  `nama_sekolah3` varchar(100) DEFAULT NULL,
  `jurusan3` varchar(100) DEFAULT NULL,
  `tahun3` int DEFAULT NULL,
  `nilai_akhir3` double DEFAULT NULL,
  `kota3` varchar(255) DEFAULT NULL,
  `jenjang4` enum('SMP','SMA/SMK','D1','D2','D3','D4','S1','S2','S3') DEFAULT NULL,
  `nama_sekolah4` varchar(100) DEFAULT NULL,
  `jurusan4` varchar(100) DEFAULT NULL,
  `tahun4` int DEFAULT NULL,
  `nilai_akhir4` double DEFAULT NULL,
  `kota4` varchar(100) DEFAULT NULL,
  `nama_training1` varchar(100) DEFAULT NULL,
  `lembaga1` varchar(100) DEFAULT NULL,
  `kota_training1` varchar(100) DEFAULT NULL,
  `tahun_training1` int DEFAULT NULL,
  `skill_training1` varchar(100) DEFAULT NULL,
  `nama_training2` varchar(100) DEFAULT NULL,
  `lembaga2` varchar(100) DEFAULT NULL,
  `kota_training2` varchar(100) DEFAULT NULL,
  `tahun_training2` int DEFAULT NULL,
  `skill_training2` varchar(255) DEFAULT NULL,
  `nama_training3` varchar(100) DEFAULT NULL,
  `lembaga3` varchar(100) DEFAULT NULL,
  `kota_training3` varchar(100) DEFAULT NULL,
  `tahun_training3` int DEFAULT NULL,
  `skill_training3` varchar(100) DEFAULT NULL,
  `nama_training4` varchar(100) DEFAULT NULL,
  `lembaga4` varchar(100) DEFAULT NULL,
  `kota_training4` varchar(100) DEFAULT NULL,
  `tahun_training4` int DEFAULT NULL,
  `skill_training4` varchar(100) DEFAULT NULL,
  `bahasa1` enum('Indonesia','Inggris','Jepang') DEFAULT NULL,
  `lisan1` varchar(100) DEFAULT NULL,
  `tulisan1` varchar(100) DEFAULT NULL,
  `bahasa2` enum('Indonesia','Inggris','Jepang') DEFAULT NULL,
  `lisan2` varchar(100) DEFAULT NULL,
  `tulisan2` varchar(100) DEFAULT NULL,
  `bahasa3` enum('Indonesia','Inggris','Jepang') DEFAULT NULL,
  `lisan3` varchar(100) DEFAULT NULL,
  `tulisan3` varchar(100) DEFAULT NULL,
  `keterampilan1` varchar(100) DEFAULT NULL,
  `keterangan1` varchar(100) DEFAULT NULL,
  `deskripsi1` varchar(100) DEFAULT NULL,
  `keterampilan2` varchar(100) DEFAULT NULL,
  `keterangan2` varchar(100) DEFAULT NULL,
  `deskripsi2` varchar(100) DEFAULT NULL,
  `keterampilan3` varchar(100) DEFAULT NULL,
  `keterangan3` varchar(100) DEFAULT NULL,
  `deskripsi3` varchar(100) DEFAULT NULL,
  `keterampilan4` varchar(100) DEFAULT NULL,
  `keterangan4` varchar(100) DEFAULT NULL,
  `deskripsi4` varchar(100) DEFAULT NULL,
  `keterampilan5` varchar(100) DEFAULT NULL,
  `keterangan5` varchar(100) DEFAULT NULL,
  `deskripsi5` varchar(100) DEFAULT NULL,
  `nama_perusahaan` varchar(100) DEFAULT NULL,
  `bidang_usaha` varchar(100) DEFAULT NULL,
  `kota_perusahaan` varchar(100) DEFAULT NULL,
  `jabatan_perusahaan` varchar(100) DEFAULT NULL,
  `awal_kerja` date DEFAULT NULL,
  `akhir_kerja` date DEFAULT NULL,
  `gaji_terakhir` int DEFAULT NULL,
  `alasan_berhenti` varchar(100) DEFAULT NULL,
  `tugas_tgg_jawab` varchar(150) DEFAULT NULL,
  `alasan_bekerja` varchar(100) DEFAULT NULL,
  `fasilitas_bekerja` varchar(100) DEFAULT NULL,
  `kapan_mulai_bekerja` date DEFAULT NULL,
  `kenalan_perusahaan` varchar(100) DEFAULT NULL,
  `nama_kenalan1` varchar(100) DEFAULT NULL,
  `jabatan_kenalan1` varchar(100) DEFAULT NULL,
  `bagian_kenalan1` varchar(100) DEFAULT NULL,
  `hubungan_kenalan1` varchar(100) DEFAULT NULL,
  `nama_kenalan2` varchar(100) DEFAULT NULL,
  `jabatan_kenalan2` varchar(100) DEFAULT NULL,
  `bagian_kenalan2` varchar(100) DEFAULT NULL,
  `hubungan_kenalan2` varchar(100) DEFAULT NULL,
  `kelebihan` varchar(100) DEFAULT NULL,
  `kekurangan` varchar(100) DEFAULT NULL,
  `pernah_sakit` varchar(100) DEFAULT NULL,
  `nama_penyakit1` varchar(100) DEFAULT NULL,
  `lama_sakit1` varchar(100) DEFAULT NULL,
  `akibat_ditimbulkan1` varchar(100) DEFAULT NULL,
  `nama_penyakit2` varchar(100) DEFAULT NULL,
  `lama_sakit2` varchar(100) DEFAULT NULL,
  `akibat_ditimbulkan2` varchar(100) DEFAULT NULL,
  `buta_warna` varchar(100) DEFAULT NULL,
  `check1` varchar(100) DEFAULT NULL,
  `check2` varchar(100) DEFAULT NULL,
  `foto_formal` varchar(255) DEFAULT NULL,
  `ijazah` varchar(255) DEFAULT NULL,
  `transkrip_nilai` varchar(255) DEFAULT NULL,
  `ktp` varchar(255) DEFAULT NULL,
  `npwp` varchar(255) DEFAULT NULL,
  `kartu_keluarga` varchar(255) DEFAULT NULL,
  `spk1` varchar(255) DEFAULT NULL,
  `spk2` varchar(255) DEFAULT NULL,
  `spk3` varchar(255) DEFAULT NULL,
  `sertif_keahlian1` varchar(255) DEFAULT NULL,
  `sertif_keahlian2` varchar(255) DEFAULT NULL,
  `skck` varchar(255) DEFAULT NULL,
  `kartu_disnaker` varchar(255) DEFAULT NULL,
  `surat_sehat` varchar(255) DEFAULT NULL,
  `sertif_keahlian3` varchar(255) DEFAULT NULL,
  `kelengkapan_berkas` varchar(200) DEFAULT NULL,
  `status` enum('','Approve','Not Approve','None') DEFAULT NULL,
  `confirm_by` varchar(30) DEFAULT NULL,
  `confirm_date` date DEFAULT NULL,
  `note` varchar(50) DEFAULT NULL,
  `status_print` enum('Belum Print','Sudah Print') DEFAULT NULL,
  `jenis_prestasi1` varchar(50) DEFAULT NULL,
  `peringkat1` varchar(50) DEFAULT NULL,
  `tingkat_prestasi1` varchar(50) DEFAULT NULL,
  `tahun_prestasi1` varchar(50) DEFAULT NULL,
  `keterangan_prestasi1` varchar(50) DEFAULT NULL,
  `jenis_prestasi2` varchar(50) DEFAULT NULL,
  `peringkat2` varchar(50) DEFAULT NULL,
  `tingkat_prestasi2` varchar(50) DEFAULT NULL,
  `tahun_prestasi2` varchar(50) DEFAULT NULL,
  `keterangan_prestasi2` varchar(50) DEFAULT NULL,
  `jenis_prestasi3` varchar(50) DEFAULT NULL,
  `peringkat3` varchar(50) DEFAULT NULL,
  `tingkat_prestasi3` varchar(50) DEFAULT NULL,
  `tahun_prestasi3` varchar(50) DEFAULT NULL,
  `keterangan_prestasi3` varchar(50) DEFAULT NULL,
  `jenis_prestasi4` varchar(50) DEFAULT NULL,
  `peringkat4` varchar(50) DEFAULT NULL,
  `tingkat_prestasi4` varchar(50) DEFAULT NULL,
  `tahun_prestasi4` varchar(50) DEFAULT NULL,
  `keterangan_prestasi4` varchar(50) DEFAULT NULL,
  `jenis_prestasi5` varchar(50) DEFAULT NULL,
  `peringkat5` varchar(50) DEFAULT NULL,
  `tingkat_prestasi5` varchar(50) DEFAULT NULL,
  `tahun_prestasi5` varchar(50) DEFAULT NULL,
  `keterangan_prestasi5` varchar(50) DEFAULT NULL,
  `nama_organisasi1` varchar(50) DEFAULT NULL,
  `jenis_organisasi1` varchar(50) DEFAULT NULL,
  `jabatan_organisasi1` varchar(50) DEFAULT NULL,
  `periode_organisasi1` varchar(50) DEFAULT NULL,
  `nama_organisasi2` varchar(50) DEFAULT NULL,
  `jenis_organisasi2` varchar(50) DEFAULT NULL,
  `jabatan_organisasi2` varchar(50) DEFAULT NULL,
  `periode_organisasi2` varchar(50) DEFAULT NULL,
  `nama_organisasi3` varchar(50) DEFAULT NULL,
  `jenis_organisasi3` varchar(50) DEFAULT NULL,
  `jabatan_organisasi3` varchar(50) DEFAULT NULL,
  `periode_organisasi3` varchar(50) DEFAULT NULL,
  `nama_referensi1` varchar(50) DEFAULT NULL,
  `alamat_referensi1` varchar(50) DEFAULT NULL,
  `no_telp_referensi1` varchar(50) DEFAULT NULL,
  `pekerjaan_referensi1` varchar(50) DEFAULT NULL,
  `hubungan_referensi1` varchar(50) DEFAULT NULL,
  `nama_referensi2` varchar(50) DEFAULT NULL,
  `alamat_referensi2` varchar(50) DEFAULT NULL,
  `no_telp_referensi2` varchar(50) DEFAULT NULL,
  `pekerjaan_referensi2` varchar(50) DEFAULT NULL,
  `hubungan_referensi2` varchar(50) DEFAULT NULL,
  `nama_dihubungi1` varchar(50) DEFAULT NULL,
  `alamat_dihubungi1` varchar(50) DEFAULT NULL,
  `no_telp_dihubungi1` varchar(50) DEFAULT NULL,
  `pekerjaan_dihubungi1` varchar(50) DEFAULT NULL,
  `hubungan_dihubungi1` varchar(50) DEFAULT NULL,
  `nama_dihubungi2` varchar(50) DEFAULT NULL,
  `alamat_dihubungi2` varchar(50) DEFAULT NULL,
  `no_telp_dihubungi2` varchar(50) DEFAULT NULL,
  `pekerjaan_dihubungi2` varchar(50) DEFAULT NULL,
  `hubungan_dihubungi2` varchar(50) DEFAULT NULL,
  `sertifikat_vaksin` varchar(255) DEFAULT NULL,
  `kode_pos` int DEFAULT NULL,
  `surat_pernyataan` varchar(255) DEFAULT NULL,
  `ibu_kandung` varchar(255) DEFAULT NULL,
  `sudah_proses` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_pelamar_posisi` (`posisi`,`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41200 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `tb_pengguna`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_pengguna` (
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `level` int DEFAULT NULL,
  `bagian` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `tb_recruitment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_recruitment` (
  `id` int NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `division_name` varchar(255) NOT NULL,
  `division_code` varchar(50) NOT NULL,
  `keterangan_job` text NOT NULL,
  `close` date NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `last_degree` varchar(30) NOT NULL,
  `major` varchar(50) NOT NULL,
  `location` varchar(100) NOT NULL,
  `limit` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=129 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `tb_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `tb_vision_mission`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_vision_mission` (
  `id` int NOT NULL AUTO_INCREMENT,
  `vision` text NOT NULL,
  `mission` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `total`;
/*!50001 DROP VIEW IF EXISTS `total`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `total` AS SELECT 
 1 AS `code`,
 1 AS `total`*/;
SET character_set_client = @saved_cs_client;
DROP TABLE IF EXISTS `v_pelamar`;
/*!50001 DROP VIEW IF EXISTS `v_pelamar`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `v_pelamar` AS SELECT 
 1 AS `id`,
 1 AS `date`,
 1 AS `name`,
 1 AS `jenis_kelamin`,
 1 AS `gol_darah`,
 1 AS `umur`,
 1 AS `tempat_lahir`,
 1 AS `tanggal_lahir`,
 1 AS `no_ktp`,
 1 AS `no_kk`,
 1 AS `no_npwp`,
 1 AS `alamat_ktp`,
 1 AS `rt_rw_ktp`,
 1 AS `kelurahan_ktp`,
 1 AS `kecamatan_ktp`,
 1 AS `kota_ktp`,
 1 AS `provinsi_ktp`,
 1 AS `alamat_tinggal`,
 1 AS `rt_rw_tinggal`,
 1 AS `kelurahan_tinggal`,
 1 AS `kecamatan_tinggal`,
 1 AS `kota_tinggal`,
 1 AS `provinsi_tinggal`,
 1 AS `kode_pos`,
 1 AS `no_hp`,
 1 AS `email`,
 1 AS `agama`,
 1 AS `tinggi_badan`,
 1 AS `berat_badan`,
 1 AS `status_tempat_tinggal`,
 1 AS `status_pernikahan`,
 1 AS `golongan`,
 1 AS `posisi`,
 1 AS `gaji`,
 1 AS `ibu_kandung`,
 1 AS `jenjang1`,
 1 AS `nama_sekolah1`,
 1 AS `jurusan1`,
 1 AS `tahun1`,
 1 AS `nilai_akhir1`,
 1 AS `kota1`,
 1 AS `jenjang2`,
 1 AS `nama_sekolah2`,
 1 AS `jurusan2`,
 1 AS `tahun2`,
 1 AS `nilai_akhir2`,
 1 AS `kota2`,
 1 AS `jenjang3`,
 1 AS `nama_sekolah3`,
 1 AS `jurusan3`,
 1 AS `tahun3`,
 1 AS `nilai_akhir3`,
 1 AS `kota3`,
 1 AS `jenjang4`,
 1 AS `nama_sekolah4`,
 1 AS `jurusan4`,
 1 AS `tahun4`,
 1 AS `nilai_akhir4`,
 1 AS `kota4`,
 1 AS `nama_training1`,
 1 AS `lembaga1`,
 1 AS `kota_training1`,
 1 AS `tahun_training1`,
 1 AS `skill_training1`,
 1 AS `nama_training2`,
 1 AS `lembaga2`,
 1 AS `kota_training2`,
 1 AS `tahun_training2`,
 1 AS `skill_training2`,
 1 AS `nama_training3`,
 1 AS `lembaga3`,
 1 AS `kota_training3`,
 1 AS `tahun_training3`,
 1 AS `skill_training3`,
 1 AS `nama_training4`,
 1 AS `lembaga4`,
 1 AS `kota_training4`,
 1 AS `tahun_training4`,
 1 AS `skill_training4`,
 1 AS `bahasa1`,
 1 AS `lisan1`,
 1 AS `tulisan1`,
 1 AS `bahasa2`,
 1 AS `lisan2`,
 1 AS `tulisan2`,
 1 AS `bahasa3`,
 1 AS `lisan3`,
 1 AS `tulisan3`,
 1 AS `keterampilan1`,
 1 AS `keterangan1`,
 1 AS `deskripsi1`,
 1 AS `keterampilan2`,
 1 AS `keterangan2`,
 1 AS `deskripsi2`,
 1 AS `keterampilan3`,
 1 AS `keterangan3`,
 1 AS `deskripsi3`,
 1 AS `keterampilan4`,
 1 AS `keterangan4`,
 1 AS `deskripsi4`,
 1 AS `keterampilan5`,
 1 AS `keterangan5`,
 1 AS `deskripsi5`,
 1 AS `jenis_prestasi1`,
 1 AS `peringkat1`,
 1 AS `tingkat_prestasi1`,
 1 AS `tahun_prestasi1`,
 1 AS `keterangan_prestasi1`,
 1 AS `jenis_prestasi2`,
 1 AS `peringkat2`,
 1 AS `tingkat_prestasi2`,
 1 AS `tahun_prestasi2`,
 1 AS `keterangan_prestasi2`,
 1 AS `jenis_prestasi3`,
 1 AS `peringkat3`,
 1 AS `tingkat_prestasi3`,
 1 AS `tahun_prestasi3`,
 1 AS `keterangan_prestasi3`,
 1 AS `jenis_prestasi4`,
 1 AS `peringkat4`,
 1 AS `tingkat_prestasi4`,
 1 AS `tahun_prestasi4`,
 1 AS `keterangan_prestasi4`,
 1 AS `jenis_prestasi5`,
 1 AS `peringkat5`,
 1 AS `tingkat_prestasi5`,
 1 AS `tahun_prestasi5`,
 1 AS `keterangan_prestasi5`,
 1 AS `nama_perusahaan`,
 1 AS `bidang_usaha`,
 1 AS `kota_perusahaan`,
 1 AS `jabatan_perusahaan`,
 1 AS `awal_kerja`,
 1 AS `akhir_kerja`,
 1 AS `gaji_terakhir`,
 1 AS `alasan_berhenti`,
 1 AS `tugas_tgg_jawab`,
 1 AS `alasan_bekerja`,
 1 AS `fasilitas_bekerja`,
 1 AS `kapan_mulai_bekerja`,
 1 AS `kenalan_perusahaan`,
 1 AS `nama_kenalan1`,
 1 AS `jabatan_kenalan1`,
 1 AS `bagian_kenalan1`,
 1 AS `hubungan_kenalan1`,
 1 AS `nama_kenalan2`,
 1 AS `jabatan_kenalan2`,
 1 AS `bagian_kenalan2`,
 1 AS `hubungan_kenalan2`,
 1 AS `kelebihan`,
 1 AS `kekurangan`,
 1 AS `pernah_sakit`,
 1 AS `nama_penyakit1`,
 1 AS `lama_sakit1`,
 1 AS `akibat_ditimbulkan1`,
 1 AS `nama_penyakit2`,
 1 AS `lama_sakit2`,
 1 AS `akibat_ditimbulkan2`,
 1 AS `nama_dihubungi1`,
 1 AS `alamat_dihubungi1`,
 1 AS `no_telp_dihubungi1`,
 1 AS `pekerjaan_dihubungi1`,
 1 AS `hubungan_dihubungi1`,
 1 AS `nama_dihubungi2`,
 1 AS `alamat_dihubungi2`,
 1 AS `no_telp_dihubungi2`,
 1 AS `pekerjaan_dihubungi2`,
 1 AS `hubungan_dihubungi2`,
 1 AS `nama_referensi1`,
 1 AS `alamat_referensi1`,
 1 AS `no_telp_referensi1`,
 1 AS `pekerjaan_referensi1`,
 1 AS `hubungan_referensi1`,
 1 AS `nama_referensi2`,
 1 AS `alamat_referensi2`,
 1 AS `no_telp_referensi2`,
 1 AS `pekerjaan_referensi2`,
 1 AS `hubungan_referensi2`,
 1 AS `nama_organisasi1`,
 1 AS `jenis_organisasi1`,
 1 AS `jabatan_organisasi1`,
 1 AS `periode_organisasi1`,
 1 AS `nama_organisasi2`,
 1 AS `jenis_organisasi2`,
 1 AS `jabatan_organisasi2`,
 1 AS `periode_organisasi2`,
 1 AS `nama_organisasi3`,
 1 AS `jenis_organisasi3`,
 1 AS `jabatan_organisasi3`,
 1 AS `periode_organisasi3`,
 1 AS `buta_warna`,
 1 AS `check1`,
 1 AS `check2`,
 1 AS `foto_formal`,
 1 AS `ijazah`,
 1 AS `transkrip_nilai`,
 1 AS `sertifikat_vaksin`,
 1 AS `surat_pernyataan`,
 1 AS `spk1`,
 1 AS `spk2`,
 1 AS `spk3`,
 1 AS `sertif_keahlian1`,
 1 AS `sertif_keahlian2`,
 1 AS `ktp`,
 1 AS `npwp`,
 1 AS `kartu_keluarga`,
 1 AS `kartu_disnaker`,
 1 AS `skck`,
 1 AS `surat_sehat`,
 1 AS `sertif_keahlian3`,
 1 AS `kelengkapan_berkas`,
 1 AS `status`,
 1 AS `confirm_by`,
 1 AS `confirm_date`,
 1 AS `note`,
 1 AS `status_print`,
 1 AS `sudah_proses`,
 1 AS `total_hari_daftar`,
 1 AS `total_bulan`*/;
SET character_set_client = @saved_cs_client;
DROP TABLE IF EXISTS `wilayah`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wilayah` (
  `kode` varchar(13) NOT NULL,
  `nama` varchar(100) NOT NULL,
  PRIMARY KEY (`kode`),
  KEY `wilayah_name_idx` (`nama`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!50001 DROP VIEW IF EXISTS `karir`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = cp850 */;
/*!50001 SET character_set_results     = cp850 */;
/*!50001 SET collation_connection      = cp850_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 SQL SECURITY INVOKER */
/*!50001 VIEW `karir` AS select `r`.`id` AS `id`,`r`.`date` AS `date`,`r`.`division_name` AS `division_name`,`r`.`division_code` AS `division_code`,`r`.`keterangan_job` AS `keterangan_job`,`r`.`close` AS `close`,`r`.`jabatan` AS `jabatan`,`r`.`last_degree` AS `last_degree`,`r`.`major` AS `major`,`r`.`location` AS `location`,`r`.`limit` AS `limit` from `tb_recruitment` `r` group by `r`.`division_code` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!50001 DROP VIEW IF EXISTS `karir_bak`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = cp850 */;
/*!50001 SET character_set_results     = cp850 */;
/*!50001 SET collation_connection      = cp850_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 SQL SECURITY INVOKER */
/*!50001 VIEW `karir_bak` AS select `r`.`id` AS `id`,`r`.`date` AS `date`,`r`.`division_name` AS `division_name`,`r`.`division_code` AS `division_code`,`r`.`keterangan_job` AS `keterangan_job`,`r`.`close` AS `close`,`r`.`jabatan` AS `jabatan`,`r`.`last_degree` AS `last_degree`,`r`.`major` AS `major`,`r`.`location` AS `location`,`r`.`limit` AS `limit`,`t`.`posisi` AS `posisi`,count(`t`.`id`) AS `total_pelamar`,(`r`.`limit` - count(`t`.`id`)) AS `sisa` from (`tb_recruitment` `r` left join `tb_pelamar` `t` on((`t`.`posisi` = `r`.`division_code`))) group by `r`.`division_code` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!50001 DROP VIEW IF EXISTS `total`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = cp850 */;
/*!50001 SET character_set_results     = cp850 */;
/*!50001 SET collation_connection      = cp850_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 SQL SECURITY INVOKER */
/*!50001 VIEW `total` AS select `a`.`code` AS `code`,count(`a`.`id_apply_cv`) AS `total` from `apply_cv` `a` group by `a`.`code` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!50001 DROP VIEW IF EXISTS `v_pelamar`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = cp850 */;
/*!50001 SET character_set_results     = cp850 */;
/*!50001 SET collation_connection      = cp850_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 SQL SECURITY INVOKER */
/*!50001 VIEW `v_pelamar` AS select `q`.`id` AS `id`,`q`.`date` AS `date`,`q`.`name` AS `name`,`q`.`jenis_kelamin` AS `jenis_kelamin`,`q`.`gol_darah` AS `gol_darah`,`q`.`umur` AS `umur`,`q`.`tempat_lahir` AS `tempat_lahir`,`q`.`tanggal_lahir` AS `tanggal_lahir`,`q`.`no_ktp` AS `no_ktp`,`q`.`no_kk` AS `no_kk`,`q`.`no_npwp` AS `no_npwp`,`q`.`alamat_ktp` AS `alamat_ktp`,`q`.`rt_rw_ktp` AS `rt_rw_ktp`,`q`.`kelurahan_ktp` AS `kelurahan_ktp`,`q`.`kecamatan_ktp` AS `kecamatan_ktp`,`q`.`kota_ktp` AS `kota_ktp`,`q`.`provinsi_ktp` AS `provinsi_ktp`,`q`.`alamat_tinggal` AS `alamat_tinggal`,`q`.`rt_rw_tinggal` AS `rt_rw_tinggal`,`q`.`kelurahan_tinggal` AS `kelurahan_tinggal`,`q`.`kecamatan_tinggal` AS `kecamatan_tinggal`,`q`.`kota_tinggal` AS `kota_tinggal`,`q`.`provinsi_tinggal` AS `provinsi_tinggal`,`q`.`kode_pos` AS `kode_pos`,`q`.`no_hp` AS `no_hp`,`q`.`email` AS `email`,`q`.`agama` AS `agama`,`q`.`tinggi_badan` AS `tinggi_badan`,`q`.`berat_badan` AS `berat_badan`,`q`.`status_tempat_tinggal` AS `status_tempat_tinggal`,`q`.`status_pernikahan` AS `status_pernikahan`,`q`.`golongan` AS `golongan`,`q`.`posisi` AS `posisi`,`q`.`gaji` AS `gaji`,`q`.`ibu_kandung` AS `ibu_kandung`,`q`.`jenjang1` AS `jenjang1`,`q`.`nama_sekolah1` AS `nama_sekolah1`,`q`.`jurusan1` AS `jurusan1`,`q`.`tahun1` AS `tahun1`,`q`.`nilai_akhir1` AS `nilai_akhir1`,`q`.`kota1` AS `kota1`,`q`.`jenjang2` AS `jenjang2`,`q`.`nama_sekolah2` AS `nama_sekolah2`,`q`.`jurusan2` AS `jurusan2`,`q`.`tahun2` AS `tahun2`,`q`.`nilai_akhir2` AS `nilai_akhir2`,`q`.`kota2` AS `kota2`,`q`.`jenjang3` AS `jenjang3`,`q`.`nama_sekolah3` AS `nama_sekolah3`,`q`.`jurusan3` AS `jurusan3`,`q`.`tahun3` AS `tahun3`,`q`.`nilai_akhir3` AS `nilai_akhir3`,`q`.`kota3` AS `kota3`,`q`.`jenjang4` AS `jenjang4`,`q`.`nama_sekolah4` AS `nama_sekolah4`,`q`.`jurusan4` AS `jurusan4`,`q`.`tahun4` AS `tahun4`,`q`.`nilai_akhir4` AS `nilai_akhir4`,`q`.`kota4` AS `kota4`,`q`.`nama_training1` AS `nama_training1`,`q`.`lembaga1` AS `lembaga1`,`q`.`kota_training1` AS `kota_training1`,`q`.`tahun_training1` AS `tahun_training1`,`q`.`skill_training1` AS `skill_training1`,`q`.`nama_training2` AS `nama_training2`,`q`.`lembaga2` AS `lembaga2`,`q`.`kota_training2` AS `kota_training2`,`q`.`tahun_training2` AS `tahun_training2`,`q`.`skill_training2` AS `skill_training2`,`q`.`nama_training3` AS `nama_training3`,`q`.`lembaga3` AS `lembaga3`,`q`.`kota_training3` AS `kota_training3`,`q`.`tahun_training3` AS `tahun_training3`,`q`.`skill_training3` AS `skill_training3`,`q`.`nama_training4` AS `nama_training4`,`q`.`lembaga4` AS `lembaga4`,`q`.`kota_training4` AS `kota_training4`,`q`.`tahun_training4` AS `tahun_training4`,`q`.`skill_training4` AS `skill_training4`,`q`.`bahasa1` AS `bahasa1`,`q`.`lisan1` AS `lisan1`,`q`.`tulisan1` AS `tulisan1`,`q`.`bahasa2` AS `bahasa2`,`q`.`lisan2` AS `lisan2`,`q`.`tulisan2` AS `tulisan2`,`q`.`bahasa3` AS `bahasa3`,`q`.`lisan3` AS `lisan3`,`q`.`tulisan3` AS `tulisan3`,`q`.`keterampilan1` AS `keterampilan1`,`q`.`keterangan1` AS `keterangan1`,`q`.`deskripsi1` AS `deskripsi1`,`q`.`keterampilan2` AS `keterampilan2`,`q`.`keterangan2` AS `keterangan2`,`q`.`deskripsi2` AS `deskripsi2`,`q`.`keterampilan3` AS `keterampilan3`,`q`.`keterangan3` AS `keterangan3`,`q`.`deskripsi3` AS `deskripsi3`,`q`.`keterampilan4` AS `keterampilan4`,`q`.`keterangan4` AS `keterangan4`,`q`.`deskripsi4` AS `deskripsi4`,`q`.`keterampilan5` AS `keterampilan5`,`q`.`keterangan5` AS `keterangan5`,`q`.`deskripsi5` AS `deskripsi5`,`q`.`jenis_prestasi1` AS `jenis_prestasi1`,`q`.`peringkat1` AS `peringkat1`,`q`.`tingkat_prestasi1` AS `tingkat_prestasi1`,`q`.`tahun_prestasi1` AS `tahun_prestasi1`,`q`.`keterangan_prestasi1` AS `keterangan_prestasi1`,`q`.`jenis_prestasi2` AS `jenis_prestasi2`,`q`.`peringkat2` AS `peringkat2`,`q`.`tingkat_prestasi2` AS `tingkat_prestasi2`,`q`.`tahun_prestasi2` AS `tahun_prestasi2`,`q`.`keterangan_prestasi2` AS `keterangan_prestasi2`,`q`.`jenis_prestasi3` AS `jenis_prestasi3`,`q`.`peringkat3` AS `peringkat3`,`q`.`tingkat_prestasi3` AS `tingkat_prestasi3`,`q`.`tahun_prestasi3` AS `tahun_prestasi3`,`q`.`keterangan_prestasi3` AS `keterangan_prestasi3`,`q`.`jenis_prestasi4` AS `jenis_prestasi4`,`q`.`peringkat4` AS `peringkat4`,`q`.`tingkat_prestasi4` AS `tingkat_prestasi4`,`q`.`tahun_prestasi4` AS `tahun_prestasi4`,`q`.`keterangan_prestasi4` AS `keterangan_prestasi4`,`q`.`jenis_prestasi5` AS `jenis_prestasi5`,`q`.`peringkat5` AS `peringkat5`,`q`.`tingkat_prestasi5` AS `tingkat_prestasi5`,`q`.`tahun_prestasi5` AS `tahun_prestasi5`,`q`.`keterangan_prestasi5` AS `keterangan_prestasi5`,`q`.`nama_perusahaan` AS `nama_perusahaan`,`q`.`bidang_usaha` AS `bidang_usaha`,`q`.`kota_perusahaan` AS `kota_perusahaan`,`q`.`jabatan_perusahaan` AS `jabatan_perusahaan`,`q`.`awal_kerja` AS `awal_kerja`,`q`.`akhir_kerja` AS `akhir_kerja`,`q`.`gaji_terakhir` AS `gaji_terakhir`,`q`.`alasan_berhenti` AS `alasan_berhenti`,`q`.`tugas_tgg_jawab` AS `tugas_tgg_jawab`,`q`.`alasan_bekerja` AS `alasan_bekerja`,`q`.`fasilitas_bekerja` AS `fasilitas_bekerja`,`q`.`kapan_mulai_bekerja` AS `kapan_mulai_bekerja`,`q`.`kenalan_perusahaan` AS `kenalan_perusahaan`,`q`.`nama_kenalan1` AS `nama_kenalan1`,`q`.`jabatan_kenalan1` AS `jabatan_kenalan1`,`q`.`bagian_kenalan1` AS `bagian_kenalan1`,`q`.`hubungan_kenalan1` AS `hubungan_kenalan1`,`q`.`nama_kenalan2` AS `nama_kenalan2`,`q`.`jabatan_kenalan2` AS `jabatan_kenalan2`,`q`.`bagian_kenalan2` AS `bagian_kenalan2`,`q`.`hubungan_kenalan2` AS `hubungan_kenalan2`,`q`.`kelebihan` AS `kelebihan`,`q`.`kekurangan` AS `kekurangan`,`q`.`pernah_sakit` AS `pernah_sakit`,`q`.`nama_penyakit1` AS `nama_penyakit1`,`q`.`lama_sakit1` AS `lama_sakit1`,`q`.`akibat_ditimbulkan1` AS `akibat_ditimbulkan1`,`q`.`nama_penyakit2` AS `nama_penyakit2`,`q`.`lama_sakit2` AS `lama_sakit2`,`q`.`akibat_ditimbulkan2` AS `akibat_ditimbulkan2`,`q`.`nama_dihubungi1` AS `nama_dihubungi1`,`q`.`alamat_dihubungi1` AS `alamat_dihubungi1`,`q`.`no_telp_dihubungi1` AS `no_telp_dihubungi1`,`q`.`pekerjaan_dihubungi1` AS `pekerjaan_dihubungi1`,`q`.`hubungan_dihubungi1` AS `hubungan_dihubungi1`,`q`.`nama_dihubungi2` AS `nama_dihubungi2`,`q`.`alamat_dihubungi2` AS `alamat_dihubungi2`,`q`.`no_telp_dihubungi2` AS `no_telp_dihubungi2`,`q`.`pekerjaan_dihubungi2` AS `pekerjaan_dihubungi2`,`q`.`hubungan_dihubungi2` AS `hubungan_dihubungi2`,`q`.`nama_referensi1` AS `nama_referensi1`,`q`.`alamat_referensi1` AS `alamat_referensi1`,`q`.`no_telp_referensi1` AS `no_telp_referensi1`,`q`.`pekerjaan_referensi1` AS `pekerjaan_referensi1`,`q`.`hubungan_referensi1` AS `hubungan_referensi1`,`q`.`nama_referensi2` AS `nama_referensi2`,`q`.`alamat_referensi2` AS `alamat_referensi2`,`q`.`no_telp_referensi2` AS `no_telp_referensi2`,`q`.`pekerjaan_referensi2` AS `pekerjaan_referensi2`,`q`.`hubungan_referensi2` AS `hubungan_referensi2`,`q`.`nama_organisasi1` AS `nama_organisasi1`,`q`.`jenis_organisasi1` AS `jenis_organisasi1`,`q`.`jabatan_organisasi1` AS `jabatan_organisasi1`,`q`.`periode_organisasi1` AS `periode_organisasi1`,`q`.`nama_organisasi2` AS `nama_organisasi2`,`q`.`jenis_organisasi2` AS `jenis_organisasi2`,`q`.`jabatan_organisasi2` AS `jabatan_organisasi2`,`q`.`periode_organisasi2` AS `periode_organisasi2`,`q`.`nama_organisasi3` AS `nama_organisasi3`,`q`.`jenis_organisasi3` AS `jenis_organisasi3`,`q`.`jabatan_organisasi3` AS `jabatan_organisasi3`,`q`.`periode_organisasi3` AS `periode_organisasi3`,`q`.`buta_warna` AS `buta_warna`,`q`.`check1` AS `check1`,`q`.`check2` AS `check2`,`q`.`foto_formal` AS `foto_formal`,`q`.`ijazah` AS `ijazah`,`q`.`transkrip_nilai` AS `transkrip_nilai`,`q`.`sertifikat_vaksin` AS `sertifikat_vaksin`,`q`.`surat_pernyataan` AS `surat_pernyataan`,`q`.`spk1` AS `spk1`,`q`.`spk2` AS `spk2`,`q`.`spk3` AS `spk3`,`q`.`sertif_keahlian1` AS `sertif_keahlian1`,`q`.`sertif_keahlian2` AS `sertif_keahlian2`,`q`.`ktp` AS `ktp`,`q`.`npwp` AS `npwp`,`q`.`kartu_keluarga` AS `kartu_keluarga`,`q`.`kartu_disnaker` AS `kartu_disnaker`,`q`.`skck` AS `skck`,`q`.`surat_sehat` AS `surat_sehat`,`q`.`sertif_keahlian3` AS `sertif_keahlian3`,`q`.`kelengkapan_berkas` AS `kelengkapan_berkas`,`q`.`status` AS `status`,`q`.`confirm_by` AS `confirm_by`,`q`.`confirm_date` AS `confirm_date`,`q`.`note` AS `note`,`q`.`status_print` AS `status_print`,`q`.`sudah_proses` AS `sudah_proses`,(to_days(curdate()) - to_days(`q`.`date`)) AS `total_hari_daftar`,round(((to_days(curdate()) - to_days(`q`.`date`)) / (365.25 / 12)),2) AS `total_bulan` from `tb_pelamar` `q` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

