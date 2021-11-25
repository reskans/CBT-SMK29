-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 11, 2021 at 10:24 AM
-- Server version: 8.0.23-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flyexam`
--

-- --------------------------------------------------------

--
-- Table structure for table `tce_analisis`
--

CREATE TABLE `tce_analisis` (
  `id_analisis` bigint NOT NULL,
  `id_materi_id_test` bigint NOT NULL,
  `id_materi_nama_test` varchar(200) DEFAULT NULL,
  `a_username` varchar(50) NOT NULL,
  `a_fullname` varchar(200) DEFAULT NULL,
  `a_group_id` int DEFAULT NULL,
  `a_group` varchar(200) DEFAULT NULL,
  `a_kesimpulan_p` text,
  `a_kesimpulan_k` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tce_analisis`
--

INSERT INTO `tce_analisis` (`id_analisis`, `id_materi_id_test`, `id_materi_nama_test`, `a_username`, `a_fullname`, `a_group_id`, `a_group`, `a_kesimpulan_p`, `a_kesimpulan_k`, `created_at`, `updated_at`) VALUES
(57, 461, 'Assesmen Pemrograman Python', 'gilang', 'GILANG MHS', 63, 'MHS', 'Perlu pengulangan  Materi Aturan penulisan program Pada KD 4.3,  Materi Tipe data Pada KD 4.4,  Materi Menerjemahkan program untuk perhitungan numerik Pada KD 4.5,  Materi Operator Aritmatika Pada KD 4.5,  Materi Percabangan Pada KD 4.6', '-', '2021-01-27 16:59:35', '2021-01-27 16:59:35'),
(58, 461, 'Assesmen Pemrograman Python', 'ilhamdi', 'ILHAMDI MHS', 63, 'MHS', 'Perlu pengulangan  Materi Tipe data Pada KD 4.4,  Materi Percabangan Pada KD 4.6,  Materi Perulagan Pada KD 4.6', '-', '2021-01-27 16:59:35', '2021-01-27 16:59:35'),
(59, 461, 'Assesmen Pemrograman Python', 'mhs-10', 'MHS-10 MHS', 63, 'MHS', 'Perlu pengulangan  Materi Aturan penulisan program Pada KD 4.3,  Materi Operator dan expresi Pada KD 4.4,  Materi Menerjemahkan program untuk perhitungan numerik Pada KD 4.5', '-', '2021-01-27 16:59:35', '2021-01-27 16:59:35'),
(60, 461, 'Assesmen Pemrograman Python', 'mhs-11', 'MHS-11 MHS', 63, 'MHS', 'Perlu pengulangan  Materi Aturan penulisan program Pada KD 4.3,  Materi Variable Pada KD 4.4,  Materi Operator Aritmatika Pada KD 4.5,  Materi Percabangan Pada KD 4.6', '-', '2021-01-27 16:59:35', '2021-01-27 16:59:35'),
(61, 461, 'Assesmen Pemrograman Python', 'mhs-12', 'MHS-12 MHS', 63, 'MHS', 'Perlu pengulangan  Materi Aturan penulisan program Pada KD 4.3,  Materi Variable Pada KD 4.4,  Materi Perulangan Pada KD 4.7', '-', '2021-01-27 16:59:35', '2021-01-27 16:59:35'),
(62, 461, 'Assesmen Pemrograman Python', 'mhs-13', 'MHS-13 MHS', 63, 'MHS', 'Perlu pengulangan  Materi Aturan penulisan program Pada KD 4.3,  Materi Operator dan expresi Pada KD 4.4,  Materi Menerjemahkan program untuk perhitungan numerik Pada KD 4.5,  Materi Percabangan Pada KD 4.6,  Materi Percabangan Pada KD 4.6', '-', '2021-01-27 16:59:35', '2021-01-27 16:59:35'),
(63, 461, 'Assesmen Pemrograman Python', 'mhs-14', 'MHS-14 MHS', 63, 'MHS', 'Perlu pengulangan  Materi Aturan penulisan program Pada KD 4.3', '-', '2021-01-27 16:59:35', '2021-01-27 16:59:35'),
(64, 461, 'Assesmen Pemrograman Python', 'mhs-16', 'MHS-16 MHS', 63, 'MHS', 'Perlu pengulangan  Materi Tipe data Pada KD 4.4', '-', '2021-01-27 16:59:35', '2021-01-27 16:59:35'),
(65, 461, 'Assesmen Pemrograman Python', 'mhs-17', 'MHS-17 MHS', 63, 'MHS', 'Perlu pengulangan  Materi Operator dan expresi Pada KD 4.4,  Materi Operator Aritmatika Pada KD 4.5', '-', '2021-01-27 16:59:35', '2021-01-27 16:59:35'),
(66, 461, 'Assesmen Pemrograman Python', 'mhs-18', 'MHS-18 MHS', 63, 'MHS', 'Perlu pengulangan  Materi Aturan penulisan program Pada KD 4.3,  Materi Operator dan expresi Pada KD 4.4,  Materi Tipe data Pada KD 4.4,  Materi Variable Pada KD 4.4,  Materi Menerjemahkan program untuk perhitungan numerik Pada KD 4.5,  Materi Percabangan Pada KD 4.6,  Materi Perulagan Pada KD 4.6', '-', '2021-01-27 16:59:35', '2021-01-27 16:59:35'),
(67, 461, 'Assesmen Pemrograman Python', 'mhs-19', 'MHS-19 MHS', 63, 'MHS', 'Perlu pengulangan  Materi Tipe data Pada KD 4.4,  Materi Menerjemahkan program untuk perhitungan numerik Pada KD 4.5,  Materi Percabangan Pada KD 4.6,  Materi Perulagan Pada KD 4.6,  Materi Perulangan Pada KD 4.7', '-', '2021-01-27 16:59:35', '2021-01-27 16:59:35'),
(68, 461, 'Assesmen Pemrograman Python', 'mhs-2', 'MHS-2 MHS', 63, 'MHS', 'Perlu pengulangan  Materi Aturan penulisan program Pada KD 4.3,  Materi Tipe data Pada KD 4.4,  Materi Percabangan Pada KD 4.6', '-', '2021-01-27 16:59:35', '2021-01-27 16:59:35'),
(69, 461, 'Assesmen Pemrograman Python', 'mhs-20', 'MHS-20 MHS', 63, 'MHS', 'Perlu pengulangan  Materi Operator dan expresi Pada KD 4.4,  Materi Tipe data Pada KD 4.4,  Materi Menerjemahkan program untuk perhitungan numerik Pada KD 4.5,  Materi Percabangan Pada KD 4.6', '-', '2021-01-27 16:59:35', '2021-01-27 16:59:35'),
(70, 461, 'Assesmen Pemrograman Python', 'mhs-3', 'MHS-3 MHS', 63, 'MHS', 'Perlu pengulangan  Materi Variable Pada KD 4.4', '-', '2021-01-27 16:59:35', '2021-01-27 16:59:35'),
(71, 461, 'Assesmen Pemrograman Python', 'mhs-4', 'MHS-4 MHS', 63, 'MHS', 'Perlu pengulangan  Materi Operator dan expresi Pada KD 4.4,  Materi Tipe data Pada KD 4.4,  Materi Operator Aritmatika Pada KD 4.5,  Materi Percabangan Pada KD 4.6,  Materi Percabangan Pada KD 4.6,  Materi Perulagan Pada KD 4.6,  Materi Perulangan Pada KD 4.7', '-', '2021-01-27 16:59:35', '2021-01-27 16:59:35'),
(72, 461, 'Assesmen Pemrograman Python', 'mhs-5', 'MHS-5 MHS', 63, 'MHS', 'Perlu pengulangan  Materi Operator dan expresi Pada KD 4.4,  Materi Tipe data Pada KD 4.4,  Materi Menerjemahkan program untuk perhitungan numerik Pada KD 4.5,  Materi Operator Aritmatika Pada KD 4.5,  Materi Percabangan Pada KD 4.6', '-', '2021-01-27 16:59:35', '2021-01-27 16:59:35'),
(73, 461, 'Assesmen Pemrograman Python', 'mhs-6', 'MHS-6 MHS', 63, 'MHS', 'Perlu pengulangan  Materi Percabangan Pada KD 4.6', '-', '2021-01-27 16:59:35', '2021-01-27 16:59:35'),
(74, 461, 'Assesmen Pemrograman Python', 'mhs-7', 'MHS-7 MHS', 63, 'MHS', 'Perlu pengulangan  Materi Operator dan expresi Pada KD 4.4,  Materi Tipe data Pada KD 4.4,  Materi Menerjemahkan program untuk perhitungan numerik Pada KD 4.5,  Materi Perulagan Pada KD 4.6', '-', '2021-01-27 16:59:35', '2021-01-27 16:59:35'),
(75, 461, 'Assesmen Pemrograman Python', 'mhs-8', 'MHS-8 MHS', 63, 'MHS', 'Perlu pengulangan  Materi Aturan penulisan program Pada KD 4.3,  Materi Operator dan expresi Pada KD 4.4,  Materi Tipe data Pada KD 4.4,  Materi Variable Pada KD 4.4,  Materi Menerjemahkan program untuk perhitungan numerik Pada KD 4.5,  Materi Operator Aritmatika Pada KD 4.5,  Materi Percabangan Pada KD 4.6,  Materi Perulagan Pada KD 4.6,  Materi Perulangan Pada KD 4.7', '-', '2021-01-27 16:59:35', '2021-01-27 16:59:35'),
(76, 461, 'Assesmen Pemrograman Python', 'mhs-9', 'MHS-9 MHS', 63, 'MHS', 'Perlu pengulangan  Materi Percabangan Pada KD 4.6', '-', '2021-01-27 16:59:35', '2021-01-27 16:59:35'),
(77, 461, 'Assesmen Pemrograman Python', 'najwa', 'NAJWA MHS', 63, 'MHS', 'Perlu pengulangan  Materi Aturan penulisan program Pada KD 4.3,  Materi Tipe data Pada KD 4.4,  Materi Perulagan Pada KD 4.6', '-', '2021-01-27 16:59:35', '2021-01-27 16:59:35'),
(78, 461, 'Assesmen Pemrograman Python', 'prajasena', 'PRAJASENA MHS', 63, 'MHS', 'Perlu pengulangan  Materi Variable Pada KD 4.4', '-', '2021-01-27 16:59:35', '2021-01-27 16:59:35'),
(79, 461, 'Assesmen Pemrograman Python', 'rifqi', 'RIFQI MHS', 63, 'MHS', 'Perlu pengulangan  Materi Aturan penulisan program Pada KD 4.3,  Materi Tipe data Pada KD 4.4,  Materi Percabangan Pada KD 4.6', '-', '2021-01-27 16:59:35', '2021-01-27 16:59:35'),
(80, 461, 'Assesmen Pemrograman Python', 'rizky', 'RIZKY MHS', 63, 'MHS', 'Lulus pada semua materi.', '-', '2021-01-27 16:59:35', '2021-01-27 16:59:35'),
(81, 461, 'Assesmen Pemrograman Python', 'sri', 'SRI MHS', 63, 'MHS', 'Lulus pada semua materi.', '-', '2021-01-27 16:59:35', '2021-01-27 16:59:35'),
(82, 461, 'Assesmen Pemrograman Python', 'syifa', 'SYIFA MHS', 63, 'MHS', 'Perlu pengulangan  Materi Aturan penulisan program Pada KD 4.3', '-', '2021-01-27 16:59:35', '2021-01-27 16:59:35'),
(83, 461, 'Assesmen Pemrograman Python', 'vera', 'VERA MHS', 63, 'MHS', 'Perlu pengulangan  Materi Aturan penulisan program Pada KD 4.3,  Materi Tipe data Pada KD 4.4', '-', '2021-01-27 16:59:35', '2021-01-27 16:59:35'),
(84, 492, 'test proses', 'admin', 'Admin FlyExam', 1, 'default', 'Lulus pada semua materi.', '-', '2021-02-18 21:01:45', '2021-02-18 21:01:45'),
(85, 495, 'test Never ending', 'admin', 'Admin FlyExam', 1, 'default', 'Perlu pengulangan  Materi Materi 2 Pada KD 3.1', '-', '2021-02-23 18:46:48', '2021-02-23 18:46:48'),
(86, 498, 'DEBUGGING', 'admin', 'Admin FlyExam', 1, 'default', 'Lulus pada semua materi.', '-', '2021-03-05 09:59:41', '2021-03-05 09:59:41'),
(87, 499, 'test', 'admin', 'Admin FlyExam', 1, 'default', 'Perlu pengulangan  Materi Blok program berisi materi variabel, operator numerik, operator logika, perulangan dan IF Pada KD Pengukuran Pengetahuan Pemrograman,  Materi Blok program berisi materi variabel, operator numerik, operator logika, perulangan dan IF Pada KD Pengukuran Pengetahuan Pemrograman,  Materi Blok program dengan while dengan if Pada KD Pengukuran Pengetahuan Pemrograman,  Materi Blok program dengan while dengan if Pada KD Pengukuran Pengetahuan Pemrograman,  Materi Operator Aritmatika, logika dan Ekspresi Pada KD Pengukuran Pengetahuan Pemrograman,  Materi Operator Aritmatika, logika dan Ekspresi Pada KD Pengukuran Pengetahuan Pemrograman,  Materi Operator Aritmatika, logika dan Ekspresi Pada KD Pengukuran Pengetahuan Pemrograman,  Materi Pengambilan keputusan dengan IF-Elif-Else Pada KD Pengukuran Pengetahuan Pemrograman,  Materi Pengambilan keputusan dengan IF-Elif-Else Pada KD Pengukuran Pengetahuan Pemrograman,  Materi Sintaks IF - Else Pada KD Pengukuran Pengetahuan Pemrograman,  Materi Sintaks IF - Else Pada KD Pengukuran Pengetahuan Pemrograman,  Materi Sintaks Penulisan Program Pada KD Pengukuran Pengetahuan Pemrograman,  Materi Sintaks Penulisan Program Pada KD Pengukuran Pengetahuan Pemrograman,  Materi Sintaks perulangan For Pada KD Pengukuran Pengetahuan Pemrograman,  Materi Sintaks perulangan For Pada KD Pengukuran Pengetahuan Pemrograman,  Materi Sintaks perulangan While Pada KD Pengukuran Pengetahuan Pemrograman,  Materi Sintaks perulangan While Pada KD Pengukuran Pengetahuan Pemrograman,  Materi Type Data Pada KD Pengukuran Pengetahuan Pemrograman,  Materi Variabel Pada KD Pengukuran Pengetahuan Pemrograman,  Materi Variabel Pada KD Pengukuran Pengetahuan Pemrograman', '-', '2021-03-09 09:24:37', '2021-03-09 09:24:37'),
(88, 503, 'Kimia Ujian Harian', '20.03.870', 'Abditia Nopandri X TGP 2', 8, 'X TGP 2', 'Perlu pengulangan  Materi Perubahan Fisika Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Penggolongan Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9', '-', '2021-03-10 10:55:39', '2021-03-10 10:55:39'),
(89, 503, 'Kimia Ujian Harian', '20.03.871', 'Ade Nando X TGP 2', 8, 'X TGP 2', 'Perlu pengulangan  Materi Perubahan Kimia Pada KD 3.1,  Materi Lambang Unsur Pada KD 3.2,  Materi Lambang Unsur Pada KD 3.2,  Materi Penggolongan Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9', '-', '2021-03-10 10:55:39', '2021-03-10 10:55:39'),
(90, 503, 'Kimia Ujian Harian', '20.03.872', 'Aden Andelas Prayoga X TGP 2', 8, 'X TGP 2', 'Perlu pengulangan  Materi Perubahan Fisika Pada KD 3.1,  Materi Perubahan Fisika Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Lambang Unsur Pada KD 3.2,  Materi Lambang Unsur Pada KD 3.2,  Materi Lambang Unsur Pada KD 3.2,  Materi Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9', '-', '2021-03-10 10:55:39', '2021-03-10 10:55:39'),
(91, 503, 'Kimia Ujian Harian', 'admin', 'Admin FlyExam', 1, 'default', 'Perlu pengulangan  Materi Perubahan Fisika Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Lambang Unsur Pada KD 3.2,  Materi Lambang Unsur Pada KD 3.2,  Materi Lambang Unsur Pada KD 3.2,  Materi Lambang Unsur Pada KD 3.2,  Materi Penggolongan Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9', '-', '2021-03-10 10:55:39', '2021-03-10 10:55:39'),
(92, 503, 'Kimia Ujian Harian', '20.02.804', 'Agung Pratama X TKR', 6, 'X TKR', 'Perlu pengulangan  Materi Perubahan Fisika Pada KD 3.1,  Materi Perubahan Fisika Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Lambang Unsur Pada KD 3.2,  Materi Lambang Unsur Pada KD 3.2,  Materi Lambang Unsur Pada KD 3.2,  Materi Penggolongan Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9', '-', '2021-03-10 10:55:39', '2021-03-10 10:55:39'),
(93, 503, 'Kimia Ujian Harian', '20.03.874', 'Akmad Sholihin Pramono X TGP 2', 8, 'X TGP 2', 'Perlu pengulangan  Materi Perubahan Fisika Pada KD 3.1,  Materi Perubahan Fisika Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Lambang Unsur Pada KD 3.2,  Materi Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9', '-', '2021-03-10 10:55:39', '2021-03-10 10:55:39'),
(94, 503, 'Kimia Ujian Harian', '20.02.806', 'Alvin Syahputra X TKR', 6, 'X TKR', 'Perlu pengulangan  Materi Perubahan Fisika Pada KD 3.1,  Materi Perubahan Fisika Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Lambang Unsur Pada KD 3.2,  Materi Lambang Unsur Pada KD 3.2,  Materi Lambang Unsur Pada KD 3.2,  Materi Lambang Unsur Pada KD 3.2,  Materi Penggolongan Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9', '-', '2021-03-10 10:55:39', '2021-03-10 10:55:39'),
(95, 503, 'Kimia Ujian Harian', '20.02.808', 'Ari Palengga X TKR', 6, 'X TKR', 'Perlu pengulangan  Materi Perubahan Fisika Pada KD 3.1,  Materi Perubahan Fisika Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Lambang Unsur Pada KD 3.2,  Materi Penggolongan Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9', '-', '2021-03-10 10:55:39', '2021-03-10 10:55:39'),
(96, 503, 'Kimia Ujian Harian', '20.03.877', 'Asrihan Naturadin X TGP 2', 8, 'X TGP 2', 'Perlu pengulangan  Materi Perubahan Fisika Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Penggolongan Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9', '-', '2021-03-10 10:55:39', '2021-03-10 10:55:39'),
(97, 503, 'Kimia Ujian Harian', '20.02.812', 'Bhazil Ariangga X TKR', 6, 'X TKR', 'Perlu pengulangan  Materi Perubahan Fisika Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Penggolongan Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9', '-', '2021-03-10 10:55:39', '2021-03-10 10:55:39'),
(98, 503, 'Kimia Ujian Harian', '20.02.813', 'Charles Peter Putra X TKR', 6, 'X TKR', 'Perlu pengulangan  Materi Perubahan Fisika Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Lambang Unsur Pada KD 3.2,  Materi Lambang Unsur Pada KD 3.2,  Materi Penggolongan Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9', '-', '2021-03-10 10:55:39', '2021-03-10 10:55:39'),
(99, 503, 'Kimia Ujian Harian', '20.03.878', 'Dimas Ahmad Al Khadafi X TGP 2', 8, 'X TGP 2', 'Perlu pengulangan  Materi Perubahan Fisika Pada KD 3.1,  Materi Perubahan Fisika Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Lambang Unsur Pada KD 3.2,  Materi Lambang Unsur Pada KD 3.2,  Materi Penggolongan Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9', '-', '2021-03-10 10:55:39', '2021-03-10 10:55:39'),
(100, 503, 'Kimia Ujian Harian', '20.03.879', 'Ersa Apriadi X TGP 2', 8, 'X TGP 2', 'Perlu pengulangan  Materi Perubahan Kimia Pada KD 3.1,  Materi Lambang Unsur Pada KD 3.2,  Materi Lambang Unsur Pada KD 3.2,  Materi Penggolongan Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9', '-', '2021-03-10 10:55:39', '2021-03-10 10:55:39'),
(101, 503, 'Kimia Ujian Harian', '20.02.818', 'Galang Pandwi Putra X TKR', 6, 'X TKR', 'Perlu pengulangan  Materi Perubahan Fisika Pada KD 3.1,  Materi Perubahan Fisika Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Lambang Unsur Pada KD 3.2,  Materi Lambang Unsur Pada KD 3.2,  Materi Lambang Unsur Pada KD 3.2,  Materi Lambang Unsur Pada KD 3.2,  Materi Penggolongan Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9', '-', '2021-03-10 10:55:39', '2021-03-10 10:55:39'),
(102, 503, 'Kimia Ujian Harian', '20.03.882', 'Hedo Saputra X TGP 2', 8, 'X TGP 2', 'Perlu pengulangan  Materi Perubahan Fisika Pada KD 3.1,  Materi Perubahan Fisika Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Lambang Unsur Pada KD 3.2,  Materi Penggolongan Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9', '-', '2021-03-10 10:55:39', '2021-03-10 10:55:39'),
(103, 503, 'Kimia Ujian Harian', '20.02.819', 'Ilham Akbari X TKR', 6, 'X TKR', 'Perlu pengulangan  Materi Perubahan Fisika Pada KD 3.1,  Materi Perubahan Fisika Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Lambang Unsur Pada KD 3.2,  Materi Lambang Unsur Pada KD 3.2,  Materi Lambang Unsur Pada KD 3.2,  Materi Lambang Unsur Pada KD 3.2,  Materi Penggolongan Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9', '-', '2021-03-10 10:55:39', '2021-03-10 10:55:39'),
(104, 503, 'Kimia Ujian Harian', '20.02.823', 'Keven Andre Anto X TKR', 6, 'X TKR', 'Perlu pengulangan  Materi Perubahan Fisika Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Lambang Unsur Pada KD 3.2,  Materi Lambang Unsur Pada KD 3.2,  Materi Lambang Unsur Pada KD 3.2,  Materi Lambang Unsur Pada KD 3.2,  Materi Penggolongan Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9', '-', '2021-03-10 10:55:39', '2021-03-10 10:55:39'),
(105, 503, 'Kimia Ujian Harian', '20.03.885', 'Kurnia Sekar Ayu X TGP 2', 8, 'X TGP 2', 'Perlu pengulangan  Materi Perubahan Fisika Pada KD 3.1,  Materi Perubahan Fisika Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Lambang Unsur Pada KD 3.2,  Materi Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9', '-', '2021-03-10 10:55:39', '2021-03-10 10:55:39'),
(106, 503, 'Kimia Ujian Harian', '20.02.824', 'Leo Wanas Putra  X TKR', 6, 'X TKR', 'Perlu pengulangan  Materi Perubahan Fisika Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Lambang Unsur Pada KD 3.2,  Materi Lambang Unsur Pada KD 3.2,  Materi Lambang Unsur Pada KD 3.2,  Materi Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9', '-', '2021-03-10 10:55:39', '2021-03-10 10:55:39'),
(107, 503, 'Kimia Ujian Harian', '20.03.886', 'Muhammad Alfareno X TGP 2', 8, 'X TGP 2', 'Perlu pengulangan  Materi Perubahan Fisika Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Lambang Unsur Pada KD 3.2,  Materi Lambang Unsur Pada KD 3.2,  Materi Lambang Unsur Pada KD 3.2,  Materi Penggolongan Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9', '-', '2021-03-10 10:55:39', '2021-03-10 10:55:39'),
(108, 503, 'Kimia Ujian Harian', '20.03.887', 'Muhammad Dani Jimar  X TGP 2', 8, 'X TGP 2', 'Perlu pengulangan  Materi Perubahan Fisika Pada KD 3.1,  Materi Perubahan Fisika Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Lambang Unsur Pada KD 3.2,  Materi Lambang Unsur Pada KD 3.2,  Materi Lambang Unsur Pada KD 3.2,  Materi Lambang Unsur Pada KD 3.2,  Materi Penggolongan Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9', '-', '2021-03-10 10:55:39', '2021-03-10 10:55:39'),
(109, 503, 'Kimia Ujian Harian', '20.03.889', 'Rafli Valenzaki Taufina X TGP 2', 8, 'X TGP 2', 'Perlu pengulangan  Materi Perubahan Fisika Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Lambang Unsur Pada KD 3.2,  Materi Penggolongan Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9', '-', '2021-03-10 10:55:39', '2021-03-10 10:55:39'),
(110, 503, 'Kimia Ujian Harian', '20.03.892', 'Redho Putra Ramadhan X TGP 2', 8, 'X TGP 2', 'Perlu pengulangan  Materi Perubahan Fisika Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Lambang Unsur Pada KD 3.2,  Materi Lambang Unsur Pada KD 3.2,  Materi Lambang Unsur Pada KD 3.2,  Materi Lambang Unsur Pada KD 3.2,  Materi Penggolongan Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9', '-', '2021-03-10 10:55:39', '2021-03-10 10:55:39'),
(111, 503, 'Kimia Ujian Harian', '20.02.831', 'Restu Adji Putra Ramadhan X TKR', 6, 'X TKR', 'Perlu pengulangan  Materi Perubahan Fisika Pada KD 3.1,  Materi Perubahan Fisika Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Lambang Unsur Pada KD 3.2,  Materi Lambang Unsur Pada KD 3.2,  Materi Lambang Unsur Pada KD 3.2,  Materi Lambang Unsur Pada KD 3.2,  Materi Penggolongan Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9', '-', '2021-03-10 10:55:39', '2021-03-10 10:55:39'),
(112, 503, 'Kimia Ujian Harian', '20.03.893', 'Rianto Sejahtera X TGP 2', 8, 'X TGP 2', 'Perlu pengulangan  Materi Perubahan Fisika Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Penggolongan Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9', '-', '2021-03-10 10:55:39', '2021-03-10 10:55:39'),
(113, 503, 'Kimia Ujian Harian', '20.03.894', 'Ridho Aidil Adha  X TGP 2', 8, 'X TGP 2', 'Perlu pengulangan  Materi Perubahan Fisika Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Lambang Unsur Pada KD 3.2,  Materi Lambang Unsur Pada KD 3.2,  Materi Penggolongan Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9', '-', '2021-03-10 10:55:39', '2021-03-10 10:55:39'),
(114, 503, 'Kimia Ujian Harian', '20.02.832', 'Rifki Reza Putra X TKR', 6, 'X TKR', 'Perlu pengulangan  Materi Perubahan Fisika Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Lambang Unsur Pada KD 3.2,  Materi Lambang Unsur Pada KD 3.2,  Materi Lambang Unsur Pada KD 3.2,  Materi Lambang Unsur Pada KD 3.2,  Materi Penggolongan Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9', '-', '2021-03-10 10:55:39', '2021-03-10 10:55:39'),
(115, 503, 'Kimia Ujian Harian', '20.03.895', 'Riska Agustina X TGP 2', 8, 'X TGP 2', 'Perlu pengulangan  Materi Perubahan Fisika Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Lambang Unsur Pada KD 3.2,  Materi Lambang Unsur Pada KD 3.2,  Materi Penggolongan Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9', '-', '2021-03-10 10:55:39', '2021-03-10 10:55:39'),
(116, 503, 'Kimia Ujian Harian', '20.02.836', 'Sisi Saputra X TKR', 6, 'X TKR', 'Perlu pengulangan  Materi Perubahan Fisika Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Lambang Unsur Pada KD 3.2,  Materi Lambang Unsur Pada KD 3.2,  Materi Lambang Unsur Pada KD 3.2,  Materi Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9', '-', '2021-03-10 10:55:39', '2021-03-10 10:55:39'),
(117, 503, 'Kimia Ujian Harian', '20.03.896', 'Sri Angraini X TGP 2', 8, 'X TGP 2', 'Perlu pengulangan  Materi Perubahan Fisika Pada KD 3.1,  Materi Perubahan Fisika Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Lambang Unsur Pada KD 3.2,  Materi Lambang Unsur Pada KD 3.2,  Materi Lambang Unsur Pada KD 3.2,  Materi Penggolongan Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9', '-', '2021-03-10 10:55:39', '2021-03-10 10:55:39'),
(118, 503, 'Kimia Ujian Harian', '20.02.837', 'Tirta Eza Pamel Noveran X TKR', 6, 'X TKR', 'Perlu pengulangan  Materi Perubahan Fisika Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Perubahan Kimia Pada KD 3.1,  Materi Lambang Unsur Pada KD 3.2,  Materi Lambang Unsur Pada KD 3.2,  Materi Lambang Unsur Pada KD 3.2,  Materi Lambang Unsur Pada KD 3.2,  Materi Penggolongan Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9', '-', '2021-03-10 10:55:39', '2021-03-10 10:55:39'),
(119, 503, 'Kimia Ujian Harian', '20.03.898', 'Yerian Duta Anggara X TGP 2', 8, 'X TGP 2', 'Perlu pengulangan  Materi Perubahan Kimia Pada KD 3.1,  Materi Penggolongan Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9,  Materi Senyawa Hidrokarbon Pada KD 3.9', '-', '2021-03-10 10:55:39', '2021-03-10 10:55:39'),
(120, 501, 'Ujian Kimia', '20.03.875', 'Apin Deski X TGP 2', 8, 'X TGP 2', 'Perlu pengulangan  Materi Blok program berisi materi variabel, operator numerik, operator logika, perulangan dan IF Pada KD Pengukuran Pengetahuan Pemrograman,  Materi Operator Aritmatika, logika dan Ekspresi Pada KD Pengukuran Pengetahuan Pemrograman,  Materi Operator Aritmatika, logika dan Ekspresi Pada KD Pengukuran Pengetahuan Pemrograman,  Materi Operator Aritmatika, logika dan Ekspresi Pada KD Pengukuran Pengetahuan Pemrograman,  Materi Sintaks IF - Else Pada KD Pengukuran Pengetahuan Pemrograman,  Materi Sintaks IF - Else Pada KD Pengukuran Pengetahuan Pemrograman,  Materi Sintaks Penulisan Program Pada KD Pengukuran Pengetahuan Pemrograman,  Materi Sintaks Penulisan Program Pada KD Pengukuran Pengetahuan Pemrograman,  Materi Sintaks perulangan For Pada KD Pengukuran Pengetahuan Pemrograman,  Materi Type Data Pada KD Pengukuran Pengetahuan Pemrograman,  Materi Variabel Pada KD Pengukuran Pengetahuan Pemrograman', '-', '2021-03-10 11:58:27', '2021-03-10 11:58:27'),
(121, 501, 'Ujian Kimia', '20.02.835', 'Rizky Yudha Pratama X TKR', 6, 'X TKR', 'Perlu pengulangan  Materi Blok program dengan while dengan if Pada KD Pengukuran Pengetahuan Pemrograman,  Materi Blok program dengan while dengan if Pada KD Pengukuran Pengetahuan Pemrograman,  Materi Operator Aritmatika, logika dan Ekspresi Pada KD Pengukuran Pengetahuan Pemrograman,  Materi Operator Aritmatika, logika dan Ekspresi Pada KD Pengukuran Pengetahuan Pemrograman,  Materi Operator Aritmatika, logika dan Ekspresi Pada KD Pengukuran Pengetahuan Pemrograman,  Materi Sintaks IF - Else Pada KD Pengukuran Pengetahuan Pemrograman,  Materi Sintaks IF - Else Pada KD Pengukuran Pengetahuan Pemrograman,  Materi Sintaks Penulisan Program Pada KD Pengukuran Pengetahuan Pemrograman,  Materi Sintaks Penulisan Program Pada KD Pengukuran Pengetahuan Pemrograman,  Materi Sintaks perulangan While Pada KD Pengukuran Pengetahuan Pemrograman,  Materi Type Data Pada KD Pengukuran Pengetahuan Pemrograman,  Materi Variabel Pada KD Pengukuran Pengetahuan Pemrograman,  Materi Variabel Pada KD Pengukuran Pengetahuan Pemrograman', '-', '2021-03-10 11:58:27', '2021-03-10 11:58:27'),
(122, 506, 'Pemrograman Python - Dasar', 'admin', 'Admin FlyExam', 1, 'default', 'Lulus pada semua materi.', '-', '2021-03-10 19:07:38', '2021-03-10 19:07:38'),
(123, 506, 'Pemrograman Python - Dasar', 'prajesena', 'Prajasena Purnama MHS UNP', 64, 'Mahasiswa FT UNP', 'Perlu pengulangan  Materi Blok program dengan while dengan if Pada KD Pengukuran Pengetahuan Pemrograman,  Materi Operator Aritmatika, logika dan Ekspresi Pada KD Pengukuran Pengetahuan Pemrograman,  Materi Sintaks IF - Else Pada KD Pengukuran Pengetahuan Pemrograman,  Materi Sintaks IF - Else Pada KD Pengukuran Pengetahuan Pemrograman,  Materi Sintaks Penulisan Program Pada KD Pengukuran Pengetahuan Pemrograman,  Materi Sintaks Penulisan Program Pada KD Pengukuran Pengetahuan Pemrograman,  Materi Sintaks perulangan For Pada KD Pengukuran Pengetahuan Pemrograman,  Materi Sintaks perulangan For Pada KD Pengukuran Pengetahuan Pemrograman', '-', '2021-03-10 19:07:38', '2021-03-10 19:07:38'),
(124, 506, 'Pemrograman Python - Dasar', 'putri', 'Putri Afifah MHS UNP', 64, 'Mahasiswa FT UNP', 'Perlu pengulangan  Materi Blok program berisi materi variabel, operator numerik, operator logika, perulangan dan IF Pada KD Pengukuran Pengetahuan Pemrograman,  Materi Blok program dengan while dengan if Pada KD Pengukuran Pengetahuan Pemrograman,  Materi Operator Aritmatika, logika dan Ekspresi Pada KD Pengukuran Pengetahuan Pemrograman,  Materi Sintaks IF - Else Pada KD Pengukuran Pengetahuan Pemrograman,  Materi Sintaks Penulisan Program Pada KD Pengukuran Pengetahuan Pemrograman,  Materi Sintaks Penulisan Program Pada KD Pengukuran Pengetahuan Pemrograman,  Materi Variabel Pada KD Pengukuran Pengetahuan Pemrograman', '-', '2021-03-10 19:07:38', '2021-03-10 19:07:38'),
(125, 506, 'Pemrograman Python - Dasar', 'rukyah', 'Rukyah Saputri MHS UNP', 64, 'Mahasiswa FT UNP', 'Perlu pengulangan  Materi Blok program dengan while dengan if Pada KD Pengukuran Pengetahuan Pemrograman,  Materi Sintaks IF - Else Pada KD Pengukuran Pengetahuan Pemrograman,  Materi Sintaks Penulisan Program Pada KD Pengukuran Pengetahuan Pemrograman,  Materi Sintaks Penulisan Program Pada KD Pengukuran Pengetahuan Pemrograman,  Materi Sintaks perulangan While Pada KD Pengukuran Pengetahuan Pemrograman', '-', '2021-03-10 19:07:38', '2021-03-10 19:07:38');

-- --------------------------------------------------------

--
-- Table structure for table `tce_answers`
--

CREATE TABLE `tce_answers` (
  `answer_id` bigint UNSIGNED NOT NULL,
  `answer_question_id` bigint UNSIGNED NOT NULL,
  `answer_description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `answer_explanation` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `answer_isright` tinyint(1) NOT NULL DEFAULT '0',
  `answer_enabled` tinyint(1) NOT NULL DEFAULT '0',
  `answer_position` bigint UNSIGNED DEFAULT NULL,
  `answer_keyboard_key` smallint UNSIGNED DEFAULT NULL,
  `answer_score` decimal(10,1) NOT NULL DEFAULT '0.0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tce_answers`
--

INSERT INTO `tce_answers` (`answer_id`, `answer_question_id`, `answer_description`, `answer_explanation`, `answer_isright`, `answer_enabled`, `answer_position`, `answer_keyboard_key`, `answer_score`, `created_at`, `updated_at`) VALUES
(3920, 1036, 'Perubahan fisika', NULL, 0, 1, NULL, NULL, '0.0', '2021-03-09 10:10:58', '2021-03-09 10:10:58'),
(3921, 1036, 'Perubahan kimia', NULL, 1, 1, NULL, NULL, '1.0', '2021-03-09 10:10:58', '2021-03-09 10:10:58'),
(3922, 1036, 'Perubahan bentuk', NULL, 0, 1, NULL, NULL, '0.0', '2021-03-09 10:10:58', '2021-03-09 10:10:58'),
(3923, 1036, 'Perubahan massa', NULL, 0, 1, NULL, NULL, '0.0', '2021-03-09 10:10:58', '2021-03-09 10:10:58'),
(3924, 1036, 'Perubahan volume', NULL, 0, 1, NULL, NULL, '0.0', '2021-03-09 10:10:58', '2021-03-09 10:10:58'),
(3925, 1037, 'fisika', NULL, 0, 1, NULL, NULL, '0.0', '2021-03-09 10:10:58', '2021-03-09 10:10:58'),
(3926, 1037, 'kimia', NULL, 1, 1, NULL, NULL, '1.0', '2021-03-09 10:10:58', '2021-03-09 10:10:58'),
(3927, 1037, 'biologi', NULL, 0, 1, NULL, NULL, '0.0', '2021-03-09 10:10:58', '2021-03-09 10:10:58'),
(3928, 1037, 'bentuk', NULL, 0, 1, NULL, NULL, '0.0', '2021-03-09 10:10:58', '2021-03-09 10:10:58'),
(3929, 1037, 'fisika dan kimia', NULL, 0, 1, NULL, NULL, '0.0', '2021-03-09 10:10:58', '2021-03-09 10:10:58'),
(3930, 1038, 'Peristiwa 1,2,dan 3 perubahan fisika; 4 dan 5 perubahan kimia', NULL, 0, 1, NULL, NULL, '0.0', '2021-03-09 10:10:58', '2021-03-09 10:10:58'),
(3931, 1038, 'Peristiwa 1,2,dan 3 perubahan kimia; 4 dan 5 perubahan fisika', NULL, 0, 1, NULL, NULL, '0.0', '2021-03-09 10:10:58', '2021-03-09 10:10:58'),
(3932, 1038, 'Peristiwa 1,2,dan 4 perubahan fisika; 2 dan 5 perubahan kimia', NULL, 0, 1, NULL, NULL, '0.0', '2021-03-09 10:10:58', '2021-03-09 10:10:58'),
(3933, 1038, 'Peristiwa 1,2,dan 4 perubahan kimia; 2 dan 5 perubahan fisika', NULL, 0, 1, NULL, NULL, '0.0', '2021-03-09 10:10:58', '2021-03-09 10:10:58'),
(3934, 1038, 'Peristiwa 2,3,dan 4 perubahan kimia; 1 dan 5 perubahan fisika', NULL, 1, 1, NULL, NULL, '1.0', '2021-03-09 10:10:58', '2021-03-09 10:10:58'),
(3935, 1039, 'Makanan yang dibiarkan akan menjadi busuk', NULL, 0, 1, NULL, NULL, '0.0', '2021-03-09 10:10:58', '2021-03-09 10:10:58'),
(3936, 1039, 'Besi yang dibiarkan diudara terbuka akan berkarat', NULL, 0, 1, NULL, NULL, '0.0', '2021-03-09 10:10:58', '2021-03-09 10:10:58'),
(3937, 1039, 'Air yang didinginkan sampai 0&lt;sup&gt;o&lt;/sup&gt;C akan berwujud padat', NULL, 1, 1, NULL, NULL, '1.0', '2021-03-09 10:10:58', '2021-03-09 10:10:58'),
(3938, 1039, 'Kotoran ternak yang diolah dalam disgester berubah menjadi biogas', NULL, 0, 1, NULL, NULL, '0.0', '2021-03-09 10:10:58', '2021-03-09 10:10:58'),
(3939, 1039, 'Batang singkong yang ditanam akan menghasilkan singkong sebagai sumber karbohidrat', NULL, 0, 1, NULL, NULL, '0.0', '2021-03-09 10:10:58', '2021-03-09 10:10:58'),
(3940, 1040, 'perubahan warna&lt;br&gt;', NULL, 0, 1, NULL, NULL, '0.0', '2021-03-09 10:10:58', '2021-03-09 10:10:58'),
(3941, 1040, 'terjadi endapan&lt;br&gt;', NULL, 0, 1, NULL, NULL, '0.0', '2021-03-09 10:10:58', '2021-03-09 10:10:58'),
(3942, 1040, 'perubahan massa&lt;br&gt;', NULL, 1, 1, NULL, NULL, '1.0', '2021-03-09 10:10:58', '2021-03-09 10:10:58'),
(3943, 1040, 'timbul gas&lt;br&gt;', NULL, 0, 1, NULL, NULL, '0.0', '2021-03-09 10:10:58', '2021-03-09 10:10:58'),
(3944, 1040, 'perubahan suhu', NULL, 0, 1, NULL, NULL, '0.0', '2021-03-09 10:10:58', '2021-03-09 10:10:58'),
(3945, 1041, 'pembentukan padatan arang hitam', NULL, 1, 1, NULL, NULL, '1.0', '2021-03-09 10:10:58', '2021-03-09 10:10:58'),
(3946, 1041, 'keluar gas yang sangat beracun', NULL, 0, 1, NULL, NULL, '0.0', '2021-03-09 10:10:58', '2021-03-09 10:10:58'),
(3947, 1041, 'gula yang mencair', NULL, 0, 1, NULL, NULL, '0.0', '2021-03-09 10:10:58', '2021-03-09 10:10:58'),
(3948, 1041, 'perubahan bentuk', NULL, 0, 1, NULL, NULL, '0.0', '2021-03-09 10:10:58', '2021-03-09 10:10:58'),
(3949, 1041, 'perubahan massa', NULL, 0, 1, NULL, NULL, '0.0', '2021-03-09 10:10:58', '2021-03-09 10:10:58'),
(3950, 1042, 'Ca, Na, H', NULL, 0, 1, NULL, NULL, '0.0', '2021-03-09 10:10:58', '2021-03-09 10:10:58'),
(3951, 1042, 'C, Na, H', NULL, 1, 1, NULL, NULL, '1.0', '2021-03-09 10:10:58', '2021-03-09 10:10:58'),
(3952, 1042, 'K, Na, H', NULL, 0, 1, NULL, NULL, '0.0', '2021-03-09 10:10:58', '2021-03-09 10:10:58'),
(3953, 1042, 'Ka, Na, H', NULL, 0, 1, NULL, NULL, '0.0', '2021-03-09 10:10:58', '2021-03-09 10:10:58'),
(3954, 1042, 'C, N, Hi', NULL, 0, 1, NULL, NULL, '0.0', '2021-03-09 10:10:58', '2021-03-09 10:10:58'),
(3955, 1043, 'M', NULL, 0, 1, NULL, NULL, '0.0', '2021-03-09 10:10:58', '2021-03-09 10:10:58'),
(3956, 1043, 'Ma', NULL, 0, 1, NULL, NULL, '0.0', '2021-03-09 10:10:58', '2021-03-09 10:10:58'),
(3957, 1043, 'Mg', NULL, 1, 1, NULL, NULL, '1.0', '2021-03-09 10:10:58', '2021-03-09 10:10:58'),
(3958, 1043, 'Mn', NULL, 0, 1, NULL, NULL, '0.0', '2021-03-09 10:10:58', '2021-03-09 10:10:58'),
(3959, 1043, 'Mi', NULL, 0, 1, NULL, NULL, '0.0', '2021-03-09 10:10:58', '2021-03-09 10:10:58'),
(3960, 1044, 'Natrium, kripton, krom', NULL, 1, 1, NULL, NULL, '1.0', '2021-03-09 10:10:58', '2021-03-09 10:10:58'),
(3961, 1044, 'Kalium, krom, natrium', NULL, 0, 1, NULL, NULL, '0.0', '2021-03-09 10:10:58', '2021-03-09 10:10:58'),
(3962, 1044, 'Neon, kripton, krom', NULL, 0, 1, NULL, NULL, '0.0', '2021-03-09 10:10:58', '2021-03-09 10:10:58'),
(3963, 1044, 'Natrium, krom, kripton', NULL, 0, 1, NULL, NULL, '0.0', '2021-03-09 10:10:58', '2021-03-09 10:10:58'),
(3964, 1044, 'Neon, krom, kalium', NULL, 0, 1, NULL, NULL, '0.0', '2021-03-09 10:10:58', '2021-03-09 10:10:58'),
(3965, 1045, 'Fe dan Ca', NULL, 0, 1, NULL, NULL, '0.0', '2021-03-09 10:10:58', '2021-03-09 10:10:58'),
(3966, 1045, 'Fe dan C', NULL, 1, 1, NULL, NULL, '1.0', '2021-03-09 10:10:58', '2021-03-09 10:10:58'),
(3967, 1045, 'Fe dan Cu', NULL, 0, 1, NULL, NULL, '0.0', '2021-03-09 10:10:58', '2021-03-09 10:10:58'),
(3968, 1045, 'F dan C', NULL, 0, 1, NULL, NULL, '0.0', '2021-03-09 10:10:58', '2021-03-09 10:10:58'),
(3969, 1045, 'Be dan Ca', NULL, 0, 1, NULL, NULL, '0.0', '2021-03-09 10:10:58', '2021-03-09 10:10:58'),
(3975, 1047, 'atom karbon mempunyai enam elektron valensi', NULL, 0, 1, NULL, NULL, '0.0', '2021-03-09 10:10:59', '2021-03-09 10:10:59'),
(3976, 1047, 'atom karbon relatif besar', NULL, 0, 1, NULL, NULL, '0.0', '2021-03-09 10:10:59', '2021-03-09 10:10:59'),
(3977, 1047, 'atom karbon dapat membentuk rantai karbon dengan cara berikatan dengan atom karbon lainnya', NULL, 1, 1, NULL, NULL, '1.0', '2021-03-09 10:10:59', '2021-03-09 10:10:59'),
(3978, 1047, 'mempunyai jari-jari atom yang besar', NULL, 0, 1, NULL, NULL, '0.0', '2021-03-09 10:10:59', '2021-03-09 10:10:59'),
(3979, 1047, 'atom karbon dapat membentuk ikatan kovalen', NULL, 0, 1, NULL, NULL, '0.0', '2021-03-09 10:10:59', '2021-03-09 10:10:59'),
(3980, 1048, 'lebih mudah larut dalam pelarut polar', NULL, 0, 1, NULL, NULL, '0.0', '2021-03-09 10:10:59', '2021-03-09 10:10:59'),
(3981, 1048, 'mempunyai titik didih lebih tingi', NULL, 0, 1, NULL, NULL, '0.0', '2021-03-09 10:10:59', '2021-03-09 10:10:59'),
(3982, 1048, 'lebih reaktif', NULL, 0, 1, NULL, NULL, '0.0', '2021-03-09 10:10:59', '2021-03-09 10:10:59'),
(3983, 1048, 'lebih stabil terhadap pemanasan', NULL, 0, 1, NULL, NULL, '0.0', '2021-03-09 10:10:59', '2021-03-09 10:10:59'),
(3984, 1048, 'mudah terbakar', NULL, 1, 1, NULL, NULL, '1.0', '2021-03-09 10:10:59', '2021-03-09 10:10:59'),
(3985, 1049, 'alkana lebih ringan dibandingkan air', NULL, 0, 1, NULL, NULL, '0.0', '2021-03-09 10:10:59', '2021-03-09 10:10:59'),
(3986, 1049, 'alkana mudah larut dalam pelarut non polar', NULL, 0, 1, NULL, NULL, '0.0', '2021-03-09 10:10:59', '2021-03-09 10:10:59'),
(3987, 1049, 'semakin panjang rantai struktur maka titik didih semakin meningkat', NULL, 1, 1, NULL, NULL, '1.0', '2021-03-09 10:10:59', '2021-03-09 10:10:59'),
(3988, 1049, 'kenaikan titik didih karena ikatan hidrogen', NULL, 0, 1, NULL, NULL, '0.0', '2021-03-09 10:10:59', '2021-03-09 10:10:59'),
(3989, 1049, 'semakin panjang rantai struktur maka titik didih semakin menurun', NULL, 0, 1, NULL, NULL, '0.0', '2021-03-09 10:10:59', '2021-03-09 10:10:59'),
(3990, 1050, 'C&lt;sub&gt;2&lt;/sub&gt;H&lt;sub&gt;6&lt;/sub&gt; dan C&lt;sub&gt;12&lt;/sub&gt;H&lt;sub&gt;22&lt;/sub&gt;O&lt;sub&gt;11&lt;/sub&gt;', NULL, 0, 1, NULL, NULL, '0.0', '2021-03-09 10:10:59', '2021-03-09 10:10:59'),
(3991, 1050, 'C&lt;sub&gt;2&lt;/sub&gt;H&lt;sub&gt;6&lt;/sub&gt; dan C&lt;sub&gt;3&lt;/sub&gt;H&lt;sub&gt;6&lt;/sub&gt;', NULL, 1, 1, NULL, NULL, '1.0', '2021-03-09 10:10:59', '2021-03-09 10:10:59'),
(3992, 1050, 'CO dan CO&lt;sub&gt;2&lt;/sub&gt;', NULL, 0, 1, NULL, NULL, '0.0', '2021-03-09 10:10:59', '2021-03-09 10:10:59'),
(3993, 1050, 'C&lt;sub&gt;6&lt;/sub&gt;H&lt;sub&gt;12&lt;/sub&gt;O&lt;sub&gt;6&lt;/sub&gt; dan CO&lt;sub&gt;2&lt;/sub&gt;', NULL, 0, 1, NULL, NULL, '0.0', '2021-03-09 10:10:59', '2021-03-09 10:10:59'),
(3994, 1050, 'CH&lt;sub&gt;3&lt;/sub&gt;COOH dan H&lt;sub&gt;2&lt;/sub&gt;O', NULL, 0, 1, NULL, NULL, '0.0', '2021-03-09 10:10:59', '2021-03-09 10:10:59');

-- --------------------------------------------------------

--
-- Table structure for table `tce_detil_taxonomy`
--

CREATE TABLE `tce_detil_taxonomy` (
  `id_detil_taxonomy` int NOT NULL,
  `detil_id_taxonomy` int NOT NULL,
  `nama_detail_taxonomy` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tce_detil_taxonomy`
--

INSERT INTO `tce_detil_taxonomy` (`id_detil_taxonomy`, `detil_id_taxonomy`, `nama_detail_taxonomy`) VALUES
(1, 1, 'Remember'),
(2, 1, 'Understand'),
(3, 1, 'Apply'),
(4, 1, 'Analyze'),
(5, 1, 'Evaluate'),
(6, 1, 'Create'),
(56, 2, 'Prestructural'),
(57, 2, 'Unistructural'),
(58, 2, 'Multistructural'),
(59, 2, 'Relational'),
(60, 2, 'Extended Abstract');

-- --------------------------------------------------------

--
-- Table structure for table `tce_komp_dasar`
--

CREATE TABLE `tce_komp_dasar` (
  `id_kd` int NOT NULL,
  `kd_module_id` int NOT NULL,
  `kd_kode` varchar(100) DEFAULT NULL,
  `kd_desk` text,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tce_komp_dasar`
--

INSERT INTO `tce_komp_dasar` (`id_kd`, `kd_module_id`, `kd_kode`, `kd_desk`, `created_at`, `updated_at`) VALUES
(59, 270, '3.1', 'Deskripsi 3.1', '2021-03-09 09:28:19', '2021-03-09 09:28:19'),
(60, 270, '3.2', 'Deskripsi 3.2', '2021-03-09 09:28:35', '2021-03-09 09:28:35'),
(61, 270, '3.9', 'Deskripsi 3.9', '2021-03-09 09:28:50', '2021-03-09 09:28:50');

-- --------------------------------------------------------

--
-- Table structure for table `tce_laporan`
--

CREATE TABLE `tce_laporan` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tce_laporan`
--

INSERT INTO `tce_laporan` (`id`, `name`, `value`) VALUES
(1, 'namaSekolah', 'FLYEXAM SERVER V5'),
(2, 'kotaKabupaten', 'LAHAT KOTA 1'),
(3, 'ruangUjian', 'Lab 1'),
(4, 'sesiUjian', 'Sesi 31'),
(5, 'kodeKabupaten', 'JSKSHAJAHAN'),
(6, 'kodeSekolah', 'JKSHSKAJAAGHHAJ'),
(7, 'hari', 'Senin'),
(8, 'tanggal', '27-07-2020'),
(9, 'jam', '09:26-09:26'),
(10, 'mapel', 'MATEMATIKA1'),
(11, 'judulLaporan', 'UJIAN MID SEMESTER 1'),
(12, 'namaKepsek', 'Kepala Sekolah'),
(13, 'nipKepsek', '1234 567890 123456'),
(14, 'pengawas1', 'BUDI MATONDANG'),
(15, 'nipPengawas1', '1234567890'),
(16, 'pengawas2', 'BUDI HATORY'),
(17, 'nipPengawas2', '1234567890'),
(18, 'logoLaporan1', 'b0x.png'),
(19, 'logoLaporan2', 'nouser.png'),
(20, 'lokasiCetak', 'Lahat'),
(21, 'namaServer', 'JSKSHSNSM'),
(22, 'keterangan', 'Dibuat rangkap 3 (tiga), masing-masing untuk sekolah, kota/kab dan provinsi.1'),
(23, 'tingkat', 'SMK'),
(24, 'tahunAjaran', '2019/2020'),
(25, 'keterangan2', '-'),
(26, 'keterangan3', '-'),
(27, 'judulLaporan2', 'UJIAN MID SEMESTER 1');

-- --------------------------------------------------------

--
-- Table structure for table `tce_materi`
--

CREATE TABLE `tce_materi` (
  `id_materi` int NOT NULL,
  `materi_id_kd` int DEFAULT NULL,
  `nama_materi` varchar(200) DEFAULT NULL,
  `materi_id_detailtaxo` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tce_materi`
--

INSERT INTO `tce_materi` (`id_materi`, `materi_id_kd`, `nama_materi`, `materi_id_detailtaxo`) VALUES
(40, 59, 'Perubahan Kimia', 2),
(41, 61, 'Senyawa Hidrokarbon', 2),
(42, 59, 'Perubahan Fisika', 3),
(43, 59, 'Perubahan Kimia', 3),
(44, 60, 'Lambang Unsur', 3),
(45, 61, 'Senyawa Hidrokarbon', 3),
(46, 61, 'Penggolongan Senyawa Hidrokarbon', 3),
(47, 61, 'Senyawa Hidrokarbon', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tce_modules`
--

CREATE TABLE `tce_modules` (
  `module_id` bigint UNSIGNED NOT NULL,
  `module_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `module_enabled` tinyint(1) NOT NULL DEFAULT '0',
  `module_user_id` bigint UNSIGNED NOT NULL DEFAULT '1',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tce_modules`
--

INSERT INTO `tce_modules` (`module_id`, `module_name`, `module_enabled`, `module_user_id`, `created_at`, `updated_at`) VALUES
(270, 'Simulasi Kimia', 1, 4000, '2021-03-09 09:25:49', '2021-03-09 14:04:51');

-- --------------------------------------------------------

--
-- Table structure for table `tce_modules_taxonomy`
--

CREATE TABLE `tce_modules_taxonomy` (
  `id_modules_taxonomy` bigint NOT NULL,
  `id_mt_idmodule` bigint NOT NULL,
  `id_mt_idtaxonomy` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tce_modules_taxonomy`
--

INSERT INTO `tce_modules_taxonomy` (`id_modules_taxonomy`, `id_mt_idmodule`, `id_mt_idtaxonomy`) VALUES
(37, 270, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tce_pengumuman`
--

CREATE TABLE `tce_pengumuman` (
  `id_pengumuman` int NOT NULL,
  `id_user` int NOT NULL,
  `judul` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `isi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` smallint NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tce_pengumuman`
--

INSERT INTO `tce_pengumuman` (`id_pengumuman`, `id_user`, `judul`, `deskripsi`, `isi`, `created_at`, `updated_at`, `status`) VALUES
(1, 4000, '#JagaJarak #PakaiMasker', 'Pengumuman Penting', 'Ulangan menggunakan <b>FlyExam</b> dari rumah!<br>\r\nPilih <code>daftar test</code> yang tersedia dan <code>mulailah ujian.</code>\r\n<br>\r\nMintalah <code>TOKEN TEST</code> masing-masing pelajaran kepada PENGAWAS/WALI KELAS untuk bisa memulai ujian!\r\n<br>\r\n<small class=\"text-muted\">@admin</small>', '2020-03-25 03:58:26', '2021-03-09 14:19:49', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tce_questions`
--

CREATE TABLE `tce_questions` (
  `question_id` bigint UNSIGNED NOT NULL,
  `question_subject_id` bigint UNSIGNED NOT NULL,
  `question_description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `question_explanation` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `question_type` smallint UNSIGNED NOT NULL DEFAULT '1',
  `question_difficulty` smallint NOT NULL DEFAULT '1',
  `question_enabled` tinyint(1) NOT NULL DEFAULT '0',
  `question_position` bigint UNSIGNED DEFAULT NULL,
  `question_timer` smallint DEFAULT NULL,
  `question_fullscreen` tinyint(1) NOT NULL DEFAULT '0',
  `question_inline_answers` tinyint(1) NOT NULL DEFAULT '0',
  `question_auto_next` tinyint(1) NOT NULL DEFAULT '0',
  `question_kd` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tce_questions`
--

INSERT INTO `tce_questions` (`question_id`, `question_subject_id`, `question_description`, `question_explanation`, `question_type`, `question_difficulty`, `question_enabled`, `question_position`, `question_timer`, `question_fullscreen`, `question_inline_answers`, `question_auto_next`, `question_kd`, `created_at`, `updated_at`) VALUES
(1036, 75, 'Perubahan materi yang bersifat kekal dan tidak dapat kembali kebentuk semula, merupakan definisi dari ...', NULL, 1, 1, 1, NULL, 0, 0, 0, 0, '40', '2021-03-09 10:10:58', '2021-03-09 10:10:58'),
(1037, 75, 'Hujan asam selalu membuat pagar besi yang terdapat dihalaman rumah Toni rusak dan berkarat. Peristiwa tersebut merupakan contoh dari perubahan...', NULL, 1, 1, 1, NULL, 0, 0, 0, 0, '40', '2021-03-09 10:10:58', '2021-03-09 10:10:58'),
(1038, 75, '&lt;p&gt;Perubahan materi dapat dibedakan menjadi perubahan kimia dan perubahan fisika.&lt;/p&gt;&lt;p&gt;Perhatikan perubahan materi berikut :&lt;/p&gt;&lt;p&gt;&lt;em&gt;1. Kapur barus menyublim&lt;/em&gt;&lt;/p&gt;&lt;p&gt;&lt;em&gt;2. Batu baterai habis terpakai&lt;/em&gt;&lt;/p&gt;&lt;p&gt;&lt;em&gt;3. Bensin terbakar&lt;/em&gt;&lt;/p&gt;&lt;p&gt;&lt;em&gt;4. Tomat membusuk&lt;/em&gt;&lt;/p&gt;&lt;p&gt;&lt;em&gt;5. Air menguap&lt;/em&gt;&lt;/p&gt;&lt;p&gt;Pernyataan berikut yang tepat adalah...&lt;/p&gt;', NULL, 1, 1, 1, 0, 0, 0, 0, 0, '42', '2021-03-09 10:10:58', '2021-03-09 10:43:32'),
(1039, 75, 'Pernyataan berikut ini yang menunjukkan perubahan fisika adalah...', NULL, 1, 1, 1, NULL, 0, 0, 0, 0, '42', '2021-03-09 10:10:58', '2021-03-09 10:10:58'),
(1040, 75, 'Seorang siswa mencampur dua zat kimia.pernyataan berikut yang tidak menunjukkan terjadinya reaksi kimia adalah...', NULL, 1, 1, 1, NULL, 0, 0, 0, 0, '40', '2021-03-09 10:10:58', '2021-03-09 10:10:58'),
(1041, 75, 'Gula pasir ketika dipanaskan dalam api pembakar spritus akan mengalami perubahan kimia. Hal tersebut terlihat dengan terjadinya...', NULL, 1, 1, 1, NULL, 0, 0, 0, 0, '40', '2021-03-09 10:10:58', '2021-03-09 10:10:58'),
(1042, 75, 'Lambang atom dari karbon,natriun, dan hidrogen berturut-turut adalah...', NULL, 1, 1, 1, NULL, 0, 0, 0, 0, '44', '2021-03-09 10:10:58', '2021-03-09 10:10:58'),
(1043, 75, 'Lambang atom dari unsur Magnesium adalah....', NULL, 1, 1, 1, NULL, 0, 0, 0, 0, '44', '2021-03-09 10:10:58', '2021-03-09 10:10:58'),
(1044, 75, 'Nama unsur yang memiliki lambang Na, Kr, Cr berturut-turut adalah....', NULL, 1, 1, 1, NULL, 0, 0, 0, 0, '44', '2021-03-09 10:10:58', '2021-03-09 10:10:58'),
(1045, 75, 'Salah satu jenis baja yang terdapat dalam bidang teknik adalah baja karbon. Yang dimaksud dengan baja karbon adalah baja yang hanya terdiri dari besi dan karbon saja tanpa adanya bahan pemadu. Rumus kimia yang tepat untuk&lt;b&gt;&lt;i&gt;besi dan karbon&lt;/i&gt;&lt;/b&gt; adalah...', NULL, 1, 1, 1, NULL, 0, 0, 0, 0, '44', '2021-03-09 10:10:58', '2021-03-09 10:10:58'),
(1047, 75, 'karbon banyak dijumpai dalam kehidupan sehari-hari karena kekhasan yang dimiliki oleh atom karbon. Berikut ini adalah sifat khas yang dimiliki oleh atom karbon', NULL, 1, 1, 1, NULL, 0, 0, 0, 0, '41', '2021-03-09 10:10:59', '2021-03-09 10:10:59'),
(1048, 75, 'Diantara pernyataan berkut, yang benar tentang senyawa organik jika dibandingkan dengan senyawa anorganik adalah&hellip;', NULL, 1, 1, 1, NULL, 0, 0, 0, 0, '41', '2021-03-09 10:10:59', '2021-03-09 10:10:59'),
(1049, 75, 'Berdasarkan data percobaan didapat bahwa metana dan etana memiliki titik didih yang berbeda. Metana memiliki titik didih -162&lt;sup&gt;o&lt;/sup&gt;C dan etana -88,5&lt;sup&gt;o&lt;/sup&gt;C. Kesimpulan berikut yang sesuai dengan perolehan data tersebut adalah...', NULL, 1, 1, 1, NULL, 0, 0, 0, 0, '41', '2021-03-09 10:10:59', '2021-03-09 10:10:59'),
(1050, 75, 'Pasangan zat di bawah ini yang merupakan golongan senyawa hidrokarbon adalah&hellip;', NULL, 1, 1, 1, NULL, 0, 0, 0, 0, '46', '2021-03-09 10:10:59', '2021-03-09 10:10:59');

-- --------------------------------------------------------

--
-- Table structure for table `tce_sessions`
--

CREATE TABLE `tce_sessions` (
  `cpsession_id` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cpsession_expiry` datetime NOT NULL,
  `cpsession_data` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tce_sessions`
--

INSERT INTO `tce_sessions` (`cpsession_id`, `cpsession_expiry`, `cpsession_data`) VALUES
('f1340bdcaa846a8f08d3d9de465dcfe2', '2020-06-22 13:55:17', 'session_hash|s:32:\"a2c16e93dc9c93b9fff775507cb08c3f\";session_user_id|i:1;session_user_name|s:12:\"- [6a8f08d3]\";session_user_ip|s:39:\"0000:0000:0000:0000:0000:ffff:7f00:0001\";session_user_level|i:0;session_user_firstname|s:0:\"\";session_user_lastname|s:0:\"\";session_test_login|s:0:\"\";session_last_visit|i:1592750348;');

-- --------------------------------------------------------

--
-- Table structure for table `tce_setting`
--

CREATE TABLE `tce_setting` (
  `id` int NOT NULL,
  `nama` varchar(50) NOT NULL,
  `value` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tce_setting`
--

INSERT INTO `tce_setting` (`id`, `nama`, `value`) VALUES
(1, 'settingheader', 'FLYEXAM SERVER'),
(2, 'namaJalan', 'Jl.Mayor Ruslan III No.17 Pasar Lama Lahat, Kabupaten lahat, Sumatera Selatan'),
(3, 'tokenAplikasi', '2112'),
(4, 'flyExam', '1'),
(5, 'allowMobile', '1'),
(6, 'logoHeader', 'b0x.png'),
(7, 'timeZone', 'Asia/Jakarta'),
(8, 'versi', '5.0.0'),
(9, 'bgLogo', 'b0x.png'),
(10, 'resetLogin', '1'),
(11, 'db_version', '5.2'),
(12, 'theme', 'default');

-- --------------------------------------------------------

--
-- Table structure for table `tce_sslcerts`
--

CREATE TABLE `tce_sslcerts` (
  `ssl_id` bigint UNSIGNED NOT NULL,
  `ssl_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ssl_hash` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ssl_end_date` datetime NOT NULL,
  `ssl_enabled` tinyint(1) NOT NULL DEFAULT '0',
  `ssl_user_id` bigint UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tce_subjects`
--

CREATE TABLE `tce_subjects` (
  `subject_id` bigint UNSIGNED NOT NULL,
  `subject_module_id` bigint UNSIGNED NOT NULL DEFAULT '1',
  `subject_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `subject_description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `subject_enabled` tinyint(1) NOT NULL DEFAULT '0',
  `subject_user_id` bigint UNSIGNED NOT NULL DEFAULT '1',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tce_subjects`
--

INSERT INTO `tce_subjects` (`subject_id`, `subject_module_id`, `subject_name`, `subject_description`, `subject_enabled`, `subject_user_id`, `created_at`, `updated_at`) VALUES
(75, 270, 'Simulasi Kimia', 'Ujian Simulasi Kimia', 1, 4000, '2021-03-09 09:39:37', '2021-03-09 09:39:37');

-- --------------------------------------------------------

--
-- Table structure for table `tce_taxonomy`
--

CREATE TABLE `tce_taxonomy` (
  `id_taxonomy` int NOT NULL,
  `nama_taxonomy` varchar(200) NOT NULL,
  `taxonomy_uid` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tce_taxonomy`
--

INSERT INTO `tce_taxonomy` (`id_taxonomy`, `nama_taxonomy`, `taxonomy_uid`, `created_at`, `updated_at`) VALUES
(1, 'Bloom', 4000, '2021-02-05 03:17:36', '2021-03-04 13:56:52'),
(2, 'Solo', 4000, '2021-02-05 03:17:36', '2021-03-01 05:52:47');

-- --------------------------------------------------------

--
-- Table structure for table `tce_testgroups`
--

CREATE TABLE `tce_testgroups` (
  `tstgrp_test_id` bigint UNSIGNED NOT NULL,
  `tstgrp_group_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tce_tests`
--

CREATE TABLE `tce_tests` (
  `test_id` bigint UNSIGNED NOT NULL,
  `test_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `test_description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `test_begin_time` datetime DEFAULT NULL,
  `test_end_time` datetime DEFAULT NULL,
  `test_duration_time` smallint UNSIGNED NOT NULL DEFAULT '0',
  `test_ip_range` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '*.*.*.*',
  `test_results_to_users` tinyint(1) NOT NULL DEFAULT '0',
  `test_report_to_users` tinyint(1) NOT NULL DEFAULT '0',
  `test_score_right` decimal(10,3) DEFAULT '1.000',
  `test_score_wrong` decimal(10,3) DEFAULT '0.000',
  `test_score_unanswered` decimal(10,3) DEFAULT '0.000',
  `test_max_score` decimal(10,3) NOT NULL DEFAULT '0.000',
  `test_user_id` bigint UNSIGNED NOT NULL DEFAULT '1',
  `test_score_threshold` decimal(10,3) DEFAULT '0.000',
  `test_random_questions_select` tinyint(1) NOT NULL DEFAULT '1',
  `test_random_questions_order` tinyint(1) NOT NULL DEFAULT '1',
  `test_questions_order_mode` smallint UNSIGNED NOT NULL DEFAULT '0',
  `test_random_answers_select` tinyint(1) NOT NULL DEFAULT '1',
  `test_random_answers_order` tinyint(1) NOT NULL DEFAULT '1',
  `test_answers_order_mode` smallint UNSIGNED NOT NULL DEFAULT '0',
  `test_comment_enabled` tinyint(1) NOT NULL DEFAULT '1',
  `test_menu_enabled` tinyint(1) NOT NULL DEFAULT '1',
  `test_noanswer_enabled` tinyint(1) NOT NULL DEFAULT '1',
  `test_mcma_radio` tinyint(1) NOT NULL DEFAULT '1',
  `test_repeatable` tinyint(1) NOT NULL DEFAULT '0',
  `test_mcma_partial_score` tinyint(1) NOT NULL DEFAULT '1',
  `test_logout_on_timeout` tinyint(1) NOT NULL DEFAULT '0',
  `test_password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `token` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tce_testsslcerts`
--

CREATE TABLE `tce_testsslcerts` (
  `tstssl_test_id` bigint UNSIGNED NOT NULL,
  `tstssl_ssl_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tce_tests_logs`
--

CREATE TABLE `tce_tests_logs` (
  `testlog_id` bigint UNSIGNED NOT NULL,
  `testlog_testuser_id` bigint UNSIGNED NOT NULL,
  `testlog_user_ip` varchar(39) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `testlog_question_id` bigint UNSIGNED NOT NULL,
  `testlog_answer_text` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `testlog_score` decimal(10,3) DEFAULT NULL,
  `testlog_creation_time` datetime DEFAULT NULL,
  `testlog_display_time` datetime DEFAULT NULL,
  `testlog_change_time` datetime DEFAULT NULL,
  `testlog_reaction_time` bigint UNSIGNED NOT NULL DEFAULT '0',
  `testlog_order` smallint NOT NULL DEFAULT '1',
  `testlog_num_answers` smallint UNSIGNED NOT NULL DEFAULT '0',
  `testlog_comment` text CHARACTER SET utf8 COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tce_tests_logs_answers`
--

CREATE TABLE `tce_tests_logs_answers` (
  `logansw_testlog_id` bigint UNSIGNED NOT NULL,
  `logansw_answer_id` bigint UNSIGNED NOT NULL,
  `logansw_selected` smallint NOT NULL DEFAULT '-1',
  `logansw_order` smallint NOT NULL DEFAULT '1',
  `logansw_position` bigint UNSIGNED DEFAULT NULL,
  `logansw_score` decimal(10,1) NOT NULL DEFAULT '0.0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tce_tests_result`
--

CREATE TABLE `tce_tests_result` (
  `result_id` bigint UNSIGNED NOT NULL,
  `testlog_testuser_id` bigint UNSIGNED NOT NULL,
  `test_id` bigint UNSIGNED NOT NULL,
  `test_name` varchar(200) NOT NULL,
  `test_description` text,
  `test_begin_time` datetime DEFAULT NULL,
  `test_end_time` datetime DEFAULT NULL,
  `test_duration_time` smallint UNSIGNED NOT NULL DEFAULT '60',
  `test_max_score` decimal(10,3) NOT NULL DEFAULT '0.000',
  `testuser_user_id` bigint UNSIGNED NOT NULL,
  `testuser_updated_time` datetime DEFAULT NULL,
  `testuser_comment` text,
  `testlog_question_id` bigint UNSIGNED NOT NULL,
  `question_subject_id` bigint DEFAULT NULL,
  `question_description` text,
  `question_type` tinyint DEFAULT NULL,
  `testlog_answer_text` text,
  `testlog_score` decimal(10,3) DEFAULT NULL,
  `testlog_order` bigint DEFAULT NULL,
  `testlog_num_answers` smallint DEFAULT NULL,
  `logansw_answer_id` text,
  `logansw_selected` text,
  `logansw_order` text,
  `answer_description` text,
  `answer_isright` varchar(200) DEFAULT NULL,
  `subject_name` varchar(100) DEFAULT NULL,
  `module_name` varchar(100) DEFAULT NULL,
  `kode_kd` varchar(100) DEFAULT NULL,
  `test_user_id` bigint DEFAULT NULL,
  `tstgrp_test_id` bigint DEFAULT NULL,
  `test_score_right` text,
  `test_score_wrong` int DEFAULT NULL COMMENT 'jbenar',
  `test_score_unanswered` int DEFAULT NULL COMMENT 'jsalah',
  `testlog_display_time` datetime DEFAULT NULL,
  `testlog_change_time` datetime DEFAULT NULL,
  `testlog_reaction_time` bigint UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tce_tests_users`
--

CREATE TABLE `tce_tests_users` (
  `testuser_id` bigint UNSIGNED NOT NULL,
  `testuser_test_id` bigint UNSIGNED NOT NULL,
  `testuser_user_id` bigint UNSIGNED NOT NULL,
  `testuser_status` smallint UNSIGNED NOT NULL DEFAULT '0',
  `testuser_creation_time` datetime NOT NULL,
  `testuser_updated_time` datetime DEFAULT NULL,
  `testuser_comment` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `testlevel` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tce_testuser_stat`
--

CREATE TABLE `tce_testuser_stat` (
  `tus_id` bigint UNSIGNED NOT NULL,
  `tus_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tce_test_level`
--

CREATE TABLE `tce_test_level` (
  `id_test_level` bigint NOT NULL,
  `test_level_test_log_id` bigint UNSIGNED NOT NULL,
  `test_level` int NOT NULL DEFAULT '2',
  `test_level_n1` decimal(10,3) DEFAULT NULL,
  `test_level_n2` decimal(10,3) DEFAULT NULL,
  `test_level_n3` decimal(10,3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tce_test_subjects`
--

CREATE TABLE `tce_test_subjects` (
  `subjset_tsubset_id` bigint UNSIGNED NOT NULL,
  `subjset_subject_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tce_test_subject_set`
--

CREATE TABLE `tce_test_subject_set` (
  `tsubset_id` bigint UNSIGNED NOT NULL,
  `tsubset_test_id` bigint UNSIGNED NOT NULL,
  `tsubset_type` smallint NOT NULL DEFAULT '1',
  `tsubset_difficulty` smallint NOT NULL DEFAULT '1',
  `tsubset_quantity` smallint NOT NULL DEFAULT '1',
  `tsubset_answers` smallint NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tce_token`
--

CREATE TABLE `tce_token` (
  `id` int NOT NULL,
  `test_id` bigint NOT NULL,
  `test_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mulai_test` datetime NOT NULL,
  `akhir_test` datetime NOT NULL,
  `token` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tce_users`
--

CREATE TABLE `tce_users` (
  `user_id` bigint UNSIGNED NOT NULL,
  `user_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_regdate` datetime NOT NULL,
  `user_ip` varchar(39) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_firstname` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_lastname` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_birthdate` date DEFAULT NULL,
  `user_birthplace` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_gender` enum('L','P') CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT 'L',
  `user_level` smallint UNSIGNED NOT NULL DEFAULT '1',
  `user_token` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tce_users`
--

INSERT INTO `tce_users` (`user_id`, `user_name`, `user_password`, `user_email`, `user_regdate`, `user_ip`, `user_firstname`, `user_lastname`, `user_birthdate`, `user_birthplace`, `user_gender`, `user_level`, `user_token`) VALUES
(4000, 'admin', '$.]RrN}56|.FOR}15.V}9PQ??*', 'admin@gmail.com', '2018-05-10 08:27:53', '0.0.0.0', 'Admin', 'FlyExam', '2018-01-01', 'Lahat', 'L', 10, '4e1e79911bf89e43f124b3ee56fda9ba879998003c7ad4e120200919121759'),
(125096, 'guru', '$.]RrN}56|.FOR}15.V}9PQ??*', 'guru@gmail.com', '2021-03-11 17:02:31', '0.0.0.0', 'Guru', 'Bindo', '2019-03-11', 'Lahat', 'L', 5, '0eeb2c3c953ef0ec2e711e09a484c42e09771bc5637e66af20210311170231'),
(125097, 'pengawas', '$.]RrN}56|.FOR}15.V}9PQ??*', 'pengawas@gmail.com', '2021-03-11 17:03:13', '0.0.0.0', 'Pengawas', 'Lapangan', '2021-03-11', '', 'L', 3, '2d46cf7d3c36eb3a1a74b92dc05e27cc39581dfddf9f8e6d20210311170313'),
(125098, 'siswa', '$.]RrN}56|.FOR}15.V}9PQ??*', 'siswa@gmail.com', '2021-03-11 17:03:42', '0.0.0.0', 'Siswa', 'Baru', '2021-03-11', '', 'L', 1, '8c9eab7fe1678e56e81d4720a5df4bf651b9da0bf4d4e02920210311170342'),
(125099, 'user1', '$.]RrN}56|.FOR}15.V}9PQ??*', 'user@gmail.com', '2021-03-11 17:06:24', '0.0.0.0', 'User 1', 'Baru', '1993-01-09', 'Lahat', 'P', 1, '3e75d4c869b8019e302a9ec6f689778972dba808852d7dbe20210311170624'),
(125100, 'user2', '$.]RrN}56|.FOR}15.V}9PQ??*', 'user@gmail.com', '2021-03-11 17:06:24', '0.0.0.0', 'User 2', 'Baru', '1994-01-09', 'Lahat', 'L', 1, 'dd0edb7425f70a8aa4c7ebe0ab89e823e2af0719cca5df2b20210311170624'),
(125101, 'user3', '$.]RrN}56|.FOR}15.V}9PQ??*', 'user@gmail.com', '2021-03-11 17:06:24', '0.0.0.0', 'User 3', 'Baru', '1994-01-09', 'Lahat', 'P', 1, '8190c41a7ddb848343d2f63883cc354b4420f7ec6dbc31b120210311170624'),
(125102, 'user4', '$.]RrN}56|.FOR}15.V}9PQ??*', 'user@gmail.com', '2021-03-11 17:06:24', '0.0.0.0', 'User 4', 'Baru', '1994-12-29', 'Lahat', 'L', 1, '9f28b2f119018670dffdf257954b351e45cc66dfe480fccb20210311170624');

-- --------------------------------------------------------

--
-- Table structure for table `tce_user_groups`
--

CREATE TABLE `tce_user_groups` (
  `group_id` bigint UNSIGNED NOT NULL,
  `group_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tce_user_groups`
--

INSERT INTO `tce_user_groups` (`group_id`, `group_name`, `created_at`, `updated_at`) VALUES
(1, 'default', '2020-07-09 10:24:04', '2020-07-09 11:19:49');

-- --------------------------------------------------------

--
-- Table structure for table `tce_user_log`
--

CREATE TABLE `tce_user_log` (
  `id_log` int NOT NULL,
  `id_user` int NOT NULL,
  `log_level` int NOT NULL,
  `log_time` datetime DEFAULT NULL,
  `log_update` datetime DEFAULT NULL,
  `log_status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tce_user_log`
--

INSERT INTO `tce_user_log` (`id_log`, `id_user`, `log_level`, `log_time`, `log_update`, `log_status`) VALUES
(1, 125098, 1, '2021-03-11 17:19:28', '2021-03-11 17:19:28', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tce_user_photos`
--

CREATE TABLE `tce_user_photos` (
  `id` int NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_photo` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tce_user_photos`
--

INSERT INTO `tce_user_photos` (`id`, `user_name`, `user_photo`) VALUES
(101, 'nicedream1337', 'nicedream1337.jpg'),
(102, 'admin', 'admin.png'),
(103, 'guru', 'guru.jpg'),
(104, 'siswa', 'siswa.png');

-- --------------------------------------------------------

--
-- Table structure for table `tce_usrgroups`
--

CREATE TABLE `tce_usrgroups` (
  `usrgrp_user_id` bigint UNSIGNED NOT NULL,
  `usrgrp_group_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tce_usrgroups`
--

INSERT INTO `tce_usrgroups` (`usrgrp_user_id`, `usrgrp_group_id`) VALUES
(4000, 1),
(125096, 1),
(125097, 1),
(125098, 1),
(125099, 1),
(125100, 1),
(125101, 1),
(125102, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tmp_passwd`
--

CREATE TABLE `tmp_passwd` (
  `id` int NOT NULL,
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `kode` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tmp_skor`
--

CREATE TABLE `tmp_skor` (
  `idTemp` int NOT NULL,
  `idTest` int NOT NULL,
  `idUser` int NOT NULL,
  `idGroup` int NOT NULL,
  `tglDibuat` datetime NOT NULL,
  `tglBerakhir` datetime NOT NULL,
  `jawaban` varchar(250) NOT NULL,
  `totalSkor` int NOT NULL,
  `status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tce_analisis`
--
ALTER TABLE `tce_analisis`
  ADD PRIMARY KEY (`id_analisis`),
  ADD KEY `a_username` (`a_username`),
  ADD KEY `id_materi_id_test` (`id_materi_id_test`);

--
-- Indexes for table `tce_answers`
--
ALTER TABLE `tce_answers`
  ADD PRIMARY KEY (`answer_id`),
  ADD KEY `p_answer_question_id` (`answer_question_id`);

--
-- Indexes for table `tce_detil_taxonomy`
--
ALTER TABLE `tce_detil_taxonomy`
  ADD PRIMARY KEY (`id_detil_taxonomy`),
  ADD KEY `detil_id_taxonomy` (`detil_id_taxonomy`);

--
-- Indexes for table `tce_komp_dasar`
--
ALTER TABLE `tce_komp_dasar`
  ADD PRIMARY KEY (`id_kd`),
  ADD KEY `kd_module_id` (`kd_module_id`);

--
-- Indexes for table `tce_laporan`
--
ALTER TABLE `tce_laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tce_materi`
--
ALTER TABLE `tce_materi`
  ADD PRIMARY KEY (`id_materi`),
  ADD KEY `materi_id_kd` (`materi_id_kd`),
  ADD KEY `materi_id_detailtaxo` (`materi_id_detailtaxo`);

--
-- Indexes for table `tce_modules`
--
ALTER TABLE `tce_modules`
  ADD PRIMARY KEY (`module_id`),
  ADD UNIQUE KEY `ak_module_name` (`module_name`),
  ADD KEY `p_module_user_id` (`module_user_id`);

--
-- Indexes for table `tce_modules_taxonomy`
--
ALTER TABLE `tce_modules_taxonomy`
  ADD PRIMARY KEY (`id_modules_taxonomy`),
  ADD KEY `id_mt_idmodule` (`id_mt_idmodule`),
  ADD KEY `id_mt_idtaxonomy` (`id_mt_idtaxonomy`);

--
-- Indexes for table `tce_pengumuman`
--
ALTER TABLE `tce_pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `tce_questions`
--
ALTER TABLE `tce_questions`
  ADD PRIMARY KEY (`question_id`),
  ADD KEY `p_question_subject_id` (`question_subject_id`);

--
-- Indexes for table `tce_sessions`
--
ALTER TABLE `tce_sessions`
  ADD PRIMARY KEY (`cpsession_id`);

--
-- Indexes for table `tce_setting`
--
ALTER TABLE `tce_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tce_sslcerts`
--
ALTER TABLE `tce_sslcerts`
  ADD PRIMARY KEY (`ssl_id`);

--
-- Indexes for table `tce_subjects`
--
ALTER TABLE `tce_subjects`
  ADD PRIMARY KEY (`subject_id`),
  ADD KEY `p_subject_user_id` (`subject_user_id`),
  ADD KEY `ak_subject_name` (`subject_module_id`,`subject_name`) USING BTREE;

--
-- Indexes for table `tce_taxonomy`
--
ALTER TABLE `tce_taxonomy`
  ADD PRIMARY KEY (`id_taxonomy`);

--
-- Indexes for table `tce_testgroups`
--
ALTER TABLE `tce_testgroups`
  ADD PRIMARY KEY (`tstgrp_test_id`,`tstgrp_group_id`),
  ADD KEY `p_tstgrp_test_id` (`tstgrp_test_id`),
  ADD KEY `p_tstgrp_group_id` (`tstgrp_group_id`);

--
-- Indexes for table `tce_tests`
--
ALTER TABLE `tce_tests`
  ADD PRIMARY KEY (`test_id`),
  ADD UNIQUE KEY `ak_test_name` (`test_name`),
  ADD KEY `p_test_user_id` (`test_user_id`);

--
-- Indexes for table `tce_testsslcerts`
--
ALTER TABLE `tce_testsslcerts`
  ADD PRIMARY KEY (`tstssl_test_id`,`tstssl_ssl_id`),
  ADD KEY `p_tstssl_test_id` (`tstssl_test_id`),
  ADD KEY `p_tstssl_ssl_id` (`tstssl_ssl_id`);

--
-- Indexes for table `tce_tests_logs`
--
ALTER TABLE `tce_tests_logs`
  ADD PRIMARY KEY (`testlog_id`),
  ADD UNIQUE KEY `ak_testuser_question` (`testlog_testuser_id`,`testlog_question_id`),
  ADD KEY `p_testlog_question_id` (`testlog_question_id`),
  ADD KEY `p_testlog_testuser_id` (`testlog_testuser_id`);

--
-- Indexes for table `tce_tests_logs_answers`
--
ALTER TABLE `tce_tests_logs_answers`
  ADD PRIMARY KEY (`logansw_testlog_id`,`logansw_answer_id`),
  ADD KEY `p_logansw_answer_id` (`logansw_answer_id`),
  ADD KEY `p_logansw_testlog_id` (`logansw_testlog_id`);

--
-- Indexes for table `tce_tests_result`
--
ALTER TABLE `tce_tests_result`
  ADD PRIMARY KEY (`result_id`),
  ADD KEY `testuser_user_id` (`testuser_user_id`),
  ADD KEY `testlog_question_id` (`testlog_question_id`),
  ADD KEY `question_subject_id` (`question_subject_id`),
  ADD KEY `kode_kd` (`kode_kd`),
  ADD KEY `testlog_testuser_id` (`testlog_testuser_id`),
  ADD KEY `test_id` (`test_id`);

--
-- Indexes for table `tce_tests_users`
--
ALTER TABLE `tce_tests_users`
  ADD PRIMARY KEY (`testuser_id`),
  ADD UNIQUE KEY `ak_testuser` (`testuser_test_id`,`testuser_user_id`,`testuser_status`),
  ADD KEY `p_testuser_user_id` (`testuser_user_id`),
  ADD KEY `p_testuser_test_id` (`testuser_test_id`);

--
-- Indexes for table `tce_testuser_stat`
--
ALTER TABLE `tce_testuser_stat`
  ADD PRIMARY KEY (`tus_id`);

--
-- Indexes for table `tce_test_level`
--
ALTER TABLE `tce_test_level`
  ADD PRIMARY KEY (`id_test_level`),
  ADD KEY `test_level_id_user` (`test_level_test_log_id`);

--
-- Indexes for table `tce_test_subjects`
--
ALTER TABLE `tce_test_subjects`
  ADD PRIMARY KEY (`subjset_tsubset_id`,`subjset_subject_id`),
  ADD KEY `p_subjset_subject_id` (`subjset_subject_id`),
  ADD KEY `p_subjset_tsubset_id` (`subjset_tsubset_id`);

--
-- Indexes for table `tce_test_subject_set`
--
ALTER TABLE `tce_test_subject_set`
  ADD PRIMARY KEY (`tsubset_id`),
  ADD KEY `p_tsubset_test_id` (`tsubset_test_id`);

--
-- Indexes for table `tce_token`
--
ALTER TABLE `tce_token`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tce_users`
--
ALTER TABLE `tce_users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `ak_user_name` (`user_name`);

--
-- Indexes for table `tce_user_groups`
--
ALTER TABLE `tce_user_groups`
  ADD PRIMARY KEY (`group_id`),
  ADD UNIQUE KEY `group_name` (`group_name`);

--
-- Indexes for table `tce_user_log`
--
ALTER TABLE `tce_user_log`
  ADD PRIMARY KEY (`id_log`);

--
-- Indexes for table `tce_user_photos`
--
ALTER TABLE `tce_user_photos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- Indexes for table `tce_usrgroups`
--
ALTER TABLE `tce_usrgroups`
  ADD PRIMARY KEY (`usrgrp_user_id`,`usrgrp_group_id`),
  ADD KEY `p_usrgrp_user_id` (`usrgrp_user_id`),
  ADD KEY `p_usrgrp_group_id` (`usrgrp_group_id`);

--
-- Indexes for table `tmp_skor`
--
ALTER TABLE `tmp_skor`
  ADD PRIMARY KEY (`idTemp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tce_analisis`
--
ALTER TABLE `tce_analisis`
  MODIFY `id_analisis` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `tce_answers`
--
ALTER TABLE `tce_answers`
  MODIFY `answer_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4070;

--
-- AUTO_INCREMENT for table `tce_detil_taxonomy`
--
ALTER TABLE `tce_detil_taxonomy`
  MODIFY `id_detil_taxonomy` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `tce_komp_dasar`
--
ALTER TABLE `tce_komp_dasar`
  MODIFY `id_kd` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `tce_laporan`
--
ALTER TABLE `tce_laporan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tce_materi`
--
ALTER TABLE `tce_materi`
  MODIFY `id_materi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `tce_modules`
--
ALTER TABLE `tce_modules`
  MODIFY `module_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=271;

--
-- AUTO_INCREMENT for table `tce_modules_taxonomy`
--
ALTER TABLE `tce_modules_taxonomy`
  MODIFY `id_modules_taxonomy` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tce_pengumuman`
--
ALTER TABLE `tce_pengumuman`
  MODIFY `id_pengumuman` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tce_questions`
--
ALTER TABLE `tce_questions`
  MODIFY `question_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1066;

--
-- AUTO_INCREMENT for table `tce_setting`
--
ALTER TABLE `tce_setting`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tce_sslcerts`
--
ALTER TABLE `tce_sslcerts`
  MODIFY `ssl_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tce_subjects`
--
ALTER TABLE `tce_subjects`
  MODIFY `subject_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `tce_taxonomy`
--
ALTER TABLE `tce_taxonomy`
  MODIFY `id_taxonomy` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tce_tests`
--
ALTER TABLE `tce_tests`
  MODIFY `test_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=508;

--
-- AUTO_INCREMENT for table `tce_tests_logs`
--
ALTER TABLE `tce_tests_logs`
  MODIFY `testlog_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111111111186300;

--
-- AUTO_INCREMENT for table `tce_tests_result`
--
ALTER TABLE `tce_tests_result`
  MODIFY `result_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1350;

--
-- AUTO_INCREMENT for table `tce_tests_users`
--
ALTER TABLE `tce_tests_users`
  MODIFY `testuser_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28743;

--
-- AUTO_INCREMENT for table `tce_testuser_stat`
--
ALTER TABLE `tce_testuser_stat`
  MODIFY `tus_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tce_test_level`
--
ALTER TABLE `tce_test_level`
  MODIFY `id_test_level` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tce_test_subject_set`
--
ALTER TABLE `tce_test_subject_set`
  MODIFY `tsubset_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=585;

--
-- AUTO_INCREMENT for table `tce_token`
--
ALTER TABLE `tce_token`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tce_users`
--
ALTER TABLE `tce_users`
  MODIFY `user_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125103;

--
-- AUTO_INCREMENT for table `tce_user_groups`
--
ALTER TABLE `tce_user_groups`
  MODIFY `group_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `tce_user_log`
--
ALTER TABLE `tce_user_log`
  MODIFY `id_log` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tce_user_photos`
--
ALTER TABLE `tce_user_photos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `tmp_skor`
--
ALTER TABLE `tmp_skor`
  MODIFY `idTemp` int NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tce_answers`
--
ALTER TABLE `tce_answers`
  ADD CONSTRAINT `tce_answers_ibfk_1` FOREIGN KEY (`answer_question_id`) REFERENCES `tce_questions` (`question_id`) ON DELETE CASCADE;

--
-- Constraints for table `tce_modules`
--
ALTER TABLE `tce_modules`
  ADD CONSTRAINT `tce_modules_ibfk_1` FOREIGN KEY (`module_user_id`) REFERENCES `tce_users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `tce_questions`
--
ALTER TABLE `tce_questions`
  ADD CONSTRAINT `tce_questions_ibfk_1` FOREIGN KEY (`question_subject_id`) REFERENCES `tce_subjects` (`subject_id`) ON DELETE CASCADE;

--
-- Constraints for table `tce_subjects`
--
ALTER TABLE `tce_subjects`
  ADD CONSTRAINT `tce_subjects_ibfk_1` FOREIGN KEY (`subject_user_id`) REFERENCES `tce_users` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tce_subjects_ibfk_2` FOREIGN KEY (`subject_module_id`) REFERENCES `tce_modules` (`module_id`) ON DELETE CASCADE;

--
-- Constraints for table `tce_testgroups`
--
ALTER TABLE `tce_testgroups`
  ADD CONSTRAINT `tce_testgroups_ibfk_1` FOREIGN KEY (`tstgrp_test_id`) REFERENCES `tce_tests` (`test_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tce_testgroups_ibfk_2` FOREIGN KEY (`tstgrp_group_id`) REFERENCES `tce_user_groups` (`group_id`) ON DELETE CASCADE;

--
-- Constraints for table `tce_tests`
--
ALTER TABLE `tce_tests`
  ADD CONSTRAINT `tce_tests_ibfk_1` FOREIGN KEY (`test_user_id`) REFERENCES `tce_users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `tce_testsslcerts`
--
ALTER TABLE `tce_testsslcerts`
  ADD CONSTRAINT `tce_testsslcerts_ibfk_1` FOREIGN KEY (`tstssl_test_id`) REFERENCES `tce_tests` (`test_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tce_testsslcerts_ibfk_2` FOREIGN KEY (`tstssl_ssl_id`) REFERENCES `tce_sslcerts` (`ssl_id`) ON DELETE CASCADE;

--
-- Constraints for table `tce_tests_logs`
--
ALTER TABLE `tce_tests_logs`
  ADD CONSTRAINT `tce_tests_logs_ibfk_1` FOREIGN KEY (`testlog_question_id`) REFERENCES `tce_questions` (`question_id`),
  ADD CONSTRAINT `tce_tests_logs_ibfk_2` FOREIGN KEY (`testlog_testuser_id`) REFERENCES `tce_tests_users` (`testuser_id`) ON DELETE CASCADE;

--
-- Constraints for table `tce_tests_logs_answers`
--
ALTER TABLE `tce_tests_logs_answers`
  ADD CONSTRAINT `tce_tests_logs_answers_ibfk_1` FOREIGN KEY (`logansw_answer_id`) REFERENCES `tce_answers` (`answer_id`),
  ADD CONSTRAINT `tce_tests_logs_answers_ibfk_2` FOREIGN KEY (`logansw_testlog_id`) REFERENCES `tce_tests_logs` (`testlog_id`) ON DELETE CASCADE;

--
-- Constraints for table `tce_tests_users`
--
ALTER TABLE `tce_tests_users`
  ADD CONSTRAINT `tce_tests_users_ibfk_1` FOREIGN KEY (`testuser_user_id`) REFERENCES `tce_users` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tce_tests_users_ibfk_2` FOREIGN KEY (`testuser_test_id`) REFERENCES `tce_tests` (`test_id`) ON DELETE CASCADE;

--
-- Constraints for table `tce_test_level`
--
ALTER TABLE `tce_test_level`
  ADD CONSTRAINT `tce_test_level_ibfk_1` FOREIGN KEY (`test_level_test_log_id`) REFERENCES `tce_tests_users` (`testuser_id`);

--
-- Constraints for table `tce_test_subjects`
--
ALTER TABLE `tce_test_subjects`
  ADD CONSTRAINT `tce_test_subjects_ibfk_1` FOREIGN KEY (`subjset_subject_id`) REFERENCES `tce_subjects` (`subject_id`),
  ADD CONSTRAINT `tce_test_subjects_ibfk_2` FOREIGN KEY (`subjset_tsubset_id`) REFERENCES `tce_test_subject_set` (`tsubset_id`) ON DELETE CASCADE;

--
-- Constraints for table `tce_test_subject_set`
--
ALTER TABLE `tce_test_subject_set`
  ADD CONSTRAINT `tce_test_subject_set_ibfk_1` FOREIGN KEY (`tsubset_test_id`) REFERENCES `tce_tests` (`test_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
