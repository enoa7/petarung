-- phpMyAdmin SQL Dump
-- version 2.11.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 06, 2015 at 05:32 PM
-- Server version: 5.0.67
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `testberita`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
  `artikelID` int(5) NOT NULL auto_increment,
  `foto` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `tanggal_terbit` date NOT NULL,
  `tanggal_ubah` date NOT NULL,
  `username` varchar(11) NOT NULL,
  `kategori1` varchar(20) NOT NULL,
  `kategori2` varchar(20) NOT NULL,
  `kategori3` varchar(20) NOT NULL,
  `kategori4` varchar(20) NOT NULL,
  `dilihat` int(6) NOT NULL,
  PRIMARY KEY  (`artikelID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `artikel`
--


-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `beritaID` int(5) NOT NULL auto_increment,
  `foto1` varchar(100) NOT NULL,
  `foto2` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `tanggal_terbit` date NOT NULL,
  `tanggal_ubah` date NOT NULL,
  `username` varchar(11) NOT NULL,
  `kategori1` varchar(20) NOT NULL,
  `kategori2` varchar(20) NOT NULL,
  `kategori3` varchar(20) NOT NULL,
  `kategori4` varchar(20) NOT NULL,
  `kategori5` varchar(20) NOT NULL,
  `kategori6` varchar(20) NOT NULL,
  `kategori7` varchar(20) NOT NULL,
  `subkategori` varchar(20) NOT NULL,
  `dilihat` int(6) NOT NULL,
  `topper` int(2) NOT NULL default '0',
  PRIMARY KEY  (`beritaID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`beritaID`, `foto1`, `foto2`, `judul`, `isi`, `tanggal_terbit`, `tanggal_ubah`, `username`, `kategori1`, `kategori2`, `kategori3`, `kategori4`, `kategori5`, `kategori6`, `kategori7`, `subkategori`, `dilihat`, `topper`) VALUES
(7, 'banner.jpg', 'banner.jpg', 'Pengadaan Mesin Antrian MCU', '<p>Mungkin memunculkan jendela Pop Up atau Overlay hanya bisa dilakukan oleh javascript saja. Tapi dengan semakin pesatnya kehebatan CSS, kita bisa membuat jendela Pop Up sederhana. Bagaimana Caranya? Check it out.</p>\r\n\r\n<p>Pertama dan yang paling utama sudah pasti membuat markup html nya dulu lah. Tanpa adanya file html, mana mungkin bisa dibuat.</p>\r\n', '2015-11-15', '2015-11-27', 'admin', 'tinju', '', '', '', 'karate', '', 'pencaksilat', 'regional', 0, 0),
(9, 'Untitled-1 copy.jpg', 'Untitled-1 copy.jpg', 'Pembuatan Logo Terbaru Pertamedika 10', '<p><span style="color:rgb(84, 84, 84); font-family:arial,sans-serif; font-size:small">More often than not, I find myself wanting to&nbsp;</span><strong>upload</strong><span style="color:rgb(84, 84, 84); font-family:arial,sans-serif; font-size:small">&nbsp;more than one file at a time. &Acirc; Having to use&nbsp;</span><strong>multiple</strong><span style="color:rgb(84, 84, 84); font-family:arial,sans-serif; font-size:small">&nbsp;&quot;file&quot; INPUT elements is annoying, slow, and inefficient.</span></p>\r\n', '2015-11-25', '2015-11-27', 'admin', 'tinju', '', 'mma', '', '', '', '', 'nasional', 0, 0),
(10, 'banner_gloves.png', 'banner-gloves2.jpg', 'Pengadaan Mesin Antrian MCU1', '<p><span style="color:rgb(84, 84, 84); font-family:arial,sans-serif; font-size:small">More often than not, I find myself wanting to&nbsp;</span><strong>upload</strong><span style="color:rgb(84, 84, 84); font-family:arial,sans-serif; font-size:small">&nbsp;more than one file at a time. &Acirc; Having to use&nbsp;</span><strong>multiple</strong><span style="color:rgb(84, 84, 84); font-family:arial,sans-serif; font-size:small">&nbsp;&quot;file&quot; INPUT elements is annoying, slow, and inefficient.</span></p>\r\n', '2015-11-25', '2015-12-06', 'admin', '', 'muaythai', '', '', 'karate', '', '', 'internasional', 0, 0),
(11, 'banner_gloves.png', 'banner-gloves2.jpg', 'Pembuatan Logo Terbaru Pertamedika 1', '<p>haaaaaaaaaaai</p>\r\n', '2015-11-27', '2015-12-06', 'admin', 'tinju', 'muaythai', '', '', '', '', '', 'internasional', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `gym`
--

CREATE TABLE IF NOT EXISTS `gym` (
  `ugymID` int(5) NOT NULL auto_increment,
  `foto` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `tanggal_terbit` date NOT NULL,
  `tanggal_ubah` date NOT NULL,
  `username` varchar(11) NOT NULL,
  `kategori1` varchar(20) NOT NULL,
  `kategori2` varchar(20) NOT NULL,
  `kategori3` varchar(20) NOT NULL,
  `kategori4` varchar(20) NOT NULL,
  `dilihat` int(6) NOT NULL,
  PRIMARY KEY  (`ugymID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `gym`
--


-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int(3) unsigned NOT NULL auto_increment,
  `nm_kategori` varchar(30) NOT NULL default '',
  PRIMARY KEY  (`id_kategori`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nm_kategori`) VALUES
(3, 'Tinju'),
(4, 'Muaythai'),
(5, 'MMA'),
(6, 'Lain-lain');

-- --------------------------------------------------------

--
-- Table structure for table `perlengkapan`
--

CREATE TABLE IF NOT EXISTS `perlengkapan` (
  `uperlengkapanID` int(5) NOT NULL auto_increment,
  `foto` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `tanggal_terbit` date NOT NULL,
  `tanggal_ubah` date NOT NULL,
  `username` varchar(11) NOT NULL,
  `kategori1` varchar(20) NOT NULL,
  `kategori2` varchar(20) NOT NULL,
  `kategori3` varchar(20) NOT NULL,
  `kategori4` varchar(20) NOT NULL,
  `dilihat` int(6) NOT NULL,
  PRIMARY KEY  (`uperlengkapanID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `perlengkapan`
--


-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userID` int(5) NOT NULL auto_increment,
  `username` varchar(11) NOT NULL,
  `password` varchar(32) NOT NULL,
  `id_level` varchar(2) NOT NULL,
  PRIMARY KEY  (`userID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `username`, `password`, `id_level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '1'),
(2, 'member', 'aa08769cdcb26674c6706093503ff0a3', '2');
