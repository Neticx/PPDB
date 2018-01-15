-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 13, 2018 at 02:17 PM
-- Server version: 10.0.31-MariaDB-0ubuntu0.16.04.2
-- PHP Version: 5.6.32-1+ubuntu16.04.1+deb.sury.org+2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `binainsani`
--

-- --------------------------------------------------------

--
-- Table structure for table `adm`
--

CREATE TABLE `adm` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(70) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ayah_siswa`
--

CREATE TABLE `ayah_siswa` (
  `id_ayah` int(10) UNSIGNED NOT NULL,
  `id_siswa` int(11) DEFAULT NULL,
  `nl_ayah` varchar(50) DEFAULT NULL,
  `ttl_ayah` varchar(50) DEFAULT NULL,
  `agama_ayah` varchar(20) DEFAULT NULL,
  `warga_ayah` varchar(30) DEFAULT NULL,
  `pend_ayah` varchar(30) DEFAULT NULL,
  `kerja_ayah` varchar(30) DEFAULT NULL,
  `gaji_ayah` varchar(30) DEFAULT NULL,
  `rumah_ayah` text,
  `kantor_ayah` text,
  `organisasi_ayah` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `calon_siswa`
--

CREATE TABLE `calon_siswa` (
  `id_siswa` int(10) UNSIGNED NOT NULL,
  `tahun` varchar(5) NOT NULL,
  `nl_siswa` varchar(255) DEFAULT NULL,
  `np_siswa` varchar(20) DEFAULT NULL,
  `jk_siswa` varchar(10) DEFAULT NULL,
  `ttl` varchar(50) DEFAULT NULL,
  `agama_siswa` varchar(10) DEFAULT NULL,
  `asal_sekolah` varchar(40) DEFAULT NULL,
  `ijazah` varchar(30) DEFAULT NULL,
  `nisn` varchar(20) DEFAULT NULL,
  `nik` varchar(30) DEFAULT NULL,
  `skhun` varchar(30) DEFAULT NULL,
  `warga_siswa` varchar(70) DEFAULT NULL,
  `anak_ke` varchar(5) DEFAULT NULL,
  `sdr_knd` varchar(5) DEFAULT NULL,
  `sdr_tir` varchar(5) DEFAULT NULL,
  `sdr_ang` varchar(5) DEFAULT NULL,
  `bahasa` varchar(30) DEFAULT NULL,
  `berat` int(11) DEFAULT NULL,
  `tinggi` int(11) DEFAULT NULL,
  `gol_dar` varchar(5) DEFAULT NULL,
  `penyakit` varchar(50) DEFAULT NULL,
  `alamat` text,
  `kode_pos` varchar(10) DEFAULT NULL,
  `hp_siswa` varchar(20) DEFAULT NULL,
  `tinggal` varchar(20) DEFAULT NULL,
  `photo` char(50) NOT NULL DEFAULT 'sample.png'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ibu_siswa`
--

CREATE TABLE `ibu_siswa` (
  `id_ibu` int(10) UNSIGNED NOT NULL,
  `id_siswa` int(11) DEFAULT NULL,
  `nl_ibu` varchar(50) DEFAULT NULL,
  `ttl_ibu` varchar(50) DEFAULT NULL,
  `agama_ibu` varchar(20) DEFAULT NULL,
  `warga_ibu` varchar(30) DEFAULT NULL,
  `pend_ibu` varchar(30) DEFAULT NULL,
  `kerja_ibu` varchar(30) DEFAULT NULL,
  `gaji_ibu` varchar(30) DEFAULT NULL,
  `rumah_ibu` char(30) DEFAULT NULL,
  `kantor_ibu` text,
  `organisasi_ibu` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kemampuan_siswa`
--

CREATE TABLE `kemampuan_siswa` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_siswa` int(11) DEFAULT NULL,
  `sholat` text,
  `hafalan` text,
  `bacaan` text,
  `hobi` text,
  `prestasi` text,
  `sifat` text,
  `penyakit_keras` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kode`
--

CREATE TABLE `kode` (
  `id` int(11) NOT NULL,
  `id_siswa` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

CREATE TABLE `surat` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_siswa` int(11) DEFAULT NULL,
  `nama_ortu` varchar(50) DEFAULT NULL,
  `alamat` text,
  `handphone` varchar(20) DEFAULT NULL,
  `ortu_dari` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wali_siswa`
--

CREATE TABLE `wali_siswa` (
  `id_wali` int(10) UNSIGNED NOT NULL,
  `id_siswa` int(11) DEFAULT NULL,
  `nl_wali` varchar(50) DEFAULT NULL,
  `ttl_wali` varchar(50) DEFAULT NULL,
  `agama_wali` varchar(20) DEFAULT NULL,
  `warga_wali` varchar(30) DEFAULT NULL,
  `pend_wali` varchar(30) DEFAULT NULL,
  `kerja_wali` varchar(30) DEFAULT NULL,
  `gaji_wali` varchar(30) DEFAULT NULL,
  `rumah_wali` char(40) DEFAULT NULL,
  `kantor_wali` text,
  `organisasi_wali` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ayah_siswa`
--
ALTER TABLE `ayah_siswa`
  ADD PRIMARY KEY (`id_ayah`);

--
-- Indexes for table `calon_siswa`
--
ALTER TABLE `calon_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `ibu_siswa`
--
ALTER TABLE `ibu_siswa`
  ADD PRIMARY KEY (`id_ibu`);

--
-- Indexes for table `kemampuan_siswa`
--
ALTER TABLE `kemampuan_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kode`
--
ALTER TABLE `kode`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wali_siswa`
--
ALTER TABLE `wali_siswa`
  ADD PRIMARY KEY (`id_wali`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adm`
--
ALTER TABLE `adm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ayah_siswa`
--
ALTER TABLE `ayah_siswa`
  MODIFY `id_ayah` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `calon_siswa`
--
ALTER TABLE `calon_siswa`
  MODIFY `id_siswa` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ibu_siswa`
--
ALTER TABLE `ibu_siswa`
  MODIFY `id_ibu` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kemampuan_siswa`
--
ALTER TABLE `kemampuan_siswa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kode`
--
ALTER TABLE `kode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `surat`
--
ALTER TABLE `surat`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wali_siswa`
--
ALTER TABLE `wali_siswa`
  MODIFY `id_wali` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
