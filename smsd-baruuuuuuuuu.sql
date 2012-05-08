-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 08, 2012 at 05:48 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `smsd`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `master_id` int(11) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `pasar_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `master_id`, `harga`, `pasar_id`) VALUES
(1, 1, '1000', 41),
(2, 1, '50000', 43),
(3, 2, '20000', 43),
(4, 1, '60000', 44);

-- --------------------------------------------------------

--
-- Table structure for table `daemons`
--

CREATE TABLE IF NOT EXISTS `daemons` (
  `Start` text NOT NULL,
  `Info` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `daemons`
--


-- --------------------------------------------------------

--
-- Table structure for table `gammu`
--

CREATE TABLE IF NOT EXISTS `gammu` (
  `Version` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gammu`
--

INSERT INTO `gammu` (`Version`) VALUES
(10);

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE IF NOT EXISTS `inbox` (
  `UpdatedInDB` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ReceivingDateTime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `Text` text NOT NULL,
  `SenderNumber` varchar(20) NOT NULL DEFAULT '',
  `Coding` enum('Default_No_Compression','Unicode_No_Compression','8bit','Default_Compression','Unicode_Compression') NOT NULL DEFAULT 'Default_No_Compression',
  `UDH` text NOT NULL,
  `SMSCNumber` varchar(20) NOT NULL DEFAULT '',
  `Class` int(11) NOT NULL DEFAULT '-1',
  `TextDecoded` varchar(160) NOT NULL DEFAULT '',
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `RecipientID` text NOT NULL,
  `Processed` enum('false','true') NOT NULL DEFAULT 'false',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=76 ;

--
-- Dumping data for table `inbox`
--


-- --------------------------------------------------------

--
-- Table structure for table `koordinator`
--

CREATE TABLE IF NOT EXISTS `koordinator` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_koordinator` varchar(20) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `pasar_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `koordinator`
--

INSERT INTO `koordinator` (`id`, `kode_koordinator`, `no_hp`, `pasar_id`, `user_id`) VALUES
(1, 'kd-001', '082345352', 41, 2),
(2, 'kd-002', '0823452344534', 43, 3);

-- --------------------------------------------------------

--
-- Table structure for table `master`
--

CREATE TABLE IF NOT EXISTS `master` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `kode_barang` varchar(20) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jenis_barang` enum('beras','telur','minyak_goreng','daging','susu','minyak_tanah','gula_pasir','garam','jagung') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `master`
--

INSERT INTO `master` (`id`, `kode_barang`, `nama_barang`, `jenis_barang`) VALUES
(1, 'BR-0001', 'Beras Kepala', 'beras'),
(2, 'TL.0001', 'Telur 0001', 'telur'),
(3, 'BR-Daging', 'Daging Ayam', 'daging'),
(4, 'BR-MinyakTanah', 'MinyakTanah', 'minyak_goreng');

-- --------------------------------------------------------

--
-- Table structure for table `outbox`
--

CREATE TABLE IF NOT EXISTS `outbox` (
  `UpdatedInDB` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `InsertIntoDB` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `SendingDateTime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `Text` text,
  `DestinationNumber` varchar(20) NOT NULL DEFAULT '',
  `Coding` enum('Default_No_Compression','Unicode_No_Compression','8bit','Default_Compression','Unicode_Compression') NOT NULL DEFAULT 'Default_No_Compression',
  `UDH` text,
  `Class` int(11) DEFAULT '-1',
  `TextDecoded` varchar(160) NOT NULL DEFAULT '',
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `MultiPart` enum('false','true') DEFAULT 'false',
  `RelativeValidity` int(11) DEFAULT '-1',
  `SenderID` varchar(255) DEFAULT NULL,
  `SendingTimeOut` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `DeliveryReport` enum('default','yes','no') DEFAULT 'default',
  `CreatorID` text NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `outbox_date` (`SendingDateTime`,`SendingTimeOut`),
  KEY `outbox_sender` (`SenderID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=80 ;

--
-- Dumping data for table `outbox`
--


-- --------------------------------------------------------

--
-- Table structure for table `outbox_multipart`
--

CREATE TABLE IF NOT EXISTS `outbox_multipart` (
  `Text` text,
  `Coding` enum('Default_No_Compression','Unicode_No_Compression','8bit','Default_Compression','Unicode_Compression') NOT NULL DEFAULT 'Default_No_Compression',
  `UDH` text,
  `Class` int(11) DEFAULT '-1',
  `TextDecoded` varchar(160) DEFAULT NULL,
  `ID` int(10) unsigned NOT NULL DEFAULT '0',
  `SequencePosition` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`ID`,`SequencePosition`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `outbox_multipart`
--


-- --------------------------------------------------------

--
-- Table structure for table `pasar`
--

CREATE TABLE IF NOT EXISTS `pasar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_pasar` varchar(20) NOT NULL,
  `nama_pasar` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `pasar`
--

INSERT INTO `pasar` (`id`, `kode_pasar`, `nama_pasar`, `alamat`) VALUES
(41, 'P-2', 'Cipta Puri', 'Tiban Koperasis'),
(43, 'P-32', 'Pasar Baru 1 ', 'Jl. Pasar Baru '),
(44, 'P-3', 'Pasar Malam', 'Jl. Malam');

-- --------------------------------------------------------

--
-- Table structure for table `pbk`
--

CREATE TABLE IF NOT EXISTS `pbk` (
  `GroupID` int(11) NOT NULL DEFAULT '-1',
  `Name` text NOT NULL,
  `Number` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pbk`
--


-- --------------------------------------------------------

--
-- Table structure for table `pbk_groups`
--

CREATE TABLE IF NOT EXISTS `pbk_groups` (
  `Name` text NOT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `pbk_groups`
--


-- --------------------------------------------------------

--
-- Table structure for table `phones`
--

CREATE TABLE IF NOT EXISTS `phones` (
  `ID` text NOT NULL,
  `UpdatedInDB` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `InsertIntoDB` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `TimeOut` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `Send` enum('yes','no') NOT NULL DEFAULT 'no',
  `Receive` enum('yes','no') NOT NULL DEFAULT 'no',
  `IMEI` varchar(35) NOT NULL,
  `Client` text NOT NULL,
  `Battery` int(11) NOT NULL DEFAULT '0',
  `Signal` int(11) NOT NULL DEFAULT '0',
  `Sent` int(11) NOT NULL DEFAULT '0',
  `Received` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`IMEI`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `phones`
--

INSERT INTO `phones` (`ID`, `UpdatedInDB`, `InsertIntoDB`, `TimeOut`, `Send`, `Receive`, `IMEI`, `Client`, `Battery`, `Signal`, `Sent`, `Received`) VALUES
('MyPhone1', '2012-05-03 17:37:33', '2012-05-03 17:36:59', '2012-05-03 17:37:43', 'yes', 'yes', '356408037982571', 'Gammu 1.25.0, Windows Server 2007, GCC 4.3, MinGW 3.15', 0, 30, 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `sentitems`
--

CREATE TABLE IF NOT EXISTS `sentitems` (
  `UpdatedInDB` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `InsertIntoDB` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `SendingDateTime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `DeliveryDateTime` timestamp NULL DEFAULT NULL,
  `Text` text NOT NULL,
  `DestinationNumber` varchar(20) NOT NULL DEFAULT '',
  `Coding` enum('Default_No_Compression','Unicode_No_Compression','8bit','Default_Compression','Unicode_Compression') NOT NULL DEFAULT 'Default_No_Compression',
  `UDH` text NOT NULL,
  `SMSCNumber` varchar(20) NOT NULL DEFAULT '',
  `Class` int(11) NOT NULL DEFAULT '-1',
  `TextDecoded` varchar(160) NOT NULL DEFAULT '',
  `ID` int(10) unsigned NOT NULL DEFAULT '0',
  `SenderID` varchar(255) NOT NULL,
  `SequencePosition` int(11) NOT NULL DEFAULT '1',
  `Status` enum('SendingOK','SendingOKNoReport','SendingError','DeliveryOK','DeliveryFailed','DeliveryPending','DeliveryUnknown','Error') NOT NULL DEFAULT 'SendingOK',
  `StatusError` int(11) NOT NULL DEFAULT '-1',
  `TPMR` int(11) NOT NULL DEFAULT '-1',
  `RelativeValidity` int(11) NOT NULL DEFAULT '-1',
  `CreatorID` text NOT NULL,
  PRIMARY KEY (`ID`,`SequencePosition`),
  KEY `sentitems_date` (`DeliveryDateTime`),
  KEY `sentitems_tpmr` (`TPMR`),
  KEY `sentitems_dest` (`DestinationNumber`),
  KEY `sentitems_sender` (`SenderID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sentitems`
--

INSERT INTO `sentitems` (`UpdatedInDB`, `InsertIntoDB`, `SendingDateTime`, `DeliveryDateTime`, `Text`, `DestinationNumber`, `Coding`, `UDH`, `SMSCNumber`, `Class`, `TextDecoded`, `ID`, `SenderID`, `SequencePosition`, `Status`, `StatusError`, `TPMR`, `RelativeValidity`, `CreatorID`) VALUES
('2012-05-03 18:35:56', '0000-00-00 00:00:00', '2012-05-03 18:35:56', NULL, '', '', '8bit', '', '+62816124', 0, '', 79, 'MyPhone1', 1, 'SendingError', -1, -1, 0, ''),
('2012-05-03 18:34:48', '0000-00-00 00:00:00', '2012-05-03 18:34:48', NULL, '', '', '8bit', '', '+62816124', 0, '', 76, 'MyPhone1', 1, 'SendingError', -1, -1, 0, ''),
('2012-05-03 18:35:22', '0000-00-00 00:00:00', '2012-05-03 18:35:22', NULL, '', '', '8bit', '', '+62816124', 0, '', 78, 'MyPhone1', 1, 'SendingError', -1, -1, 0, ''),
('2012-05-03 18:34:14', '0000-00-00 00:00:00', '2012-05-03 18:34:14', NULL, '', '', '8bit', '', '+62816124', 0, '', 77, 'MyPhone1', 1, 'SendingError', -1, -1, 0, ''),
('2012-05-03 17:54:59', '0000-00-00 00:00:00', '2012-05-03 17:54:59', NULL, '0036003000300030', '+6285668010331', 'Default_No_Compression', '', '+62816124', -1, '6000', 75, 'MyPhone1', 1, 'SendingOKNoReport', -1, 116, 0, ''),
('2012-05-03 17:47:56', '0000-00-00 00:00:00', '2012-05-03 17:47:56', NULL, '0036003000300030', '+6285364896911', 'Default_No_Compression', '', '+62816124', -1, '6000', 74, 'MyPhone1', 1, 'SendingOKNoReport', -1, 115, 0, ''),
('2012-05-03 17:45:50', '0000-00-00 00:00:00', '2012-05-03 17:45:50', NULL, '0036003000300030', '085668010331', 'Default_No_Compression', '', '+62816124', -1, '6000', 73, 'MyPhone1', 1, 'SendingOKNoReport', -1, 114, 0, ''),
('2012-05-03 17:43:11', '0000-00-00 00:00:00', '2012-05-03 17:43:11', NULL, '00620065006C0061006A00610072', '085668010331', 'Default_No_Compression', '', '+62816124', -1, 'belajar', 72, 'MyPhone1', 1, 'SendingOKNoReport', -1, 113, 0, ''),
('2012-05-03 17:39:33', '0000-00-00 00:00:00', '2012-05-03 17:39:33', NULL, '004100790061006D0034', '085668010331', 'Default_No_Compression', '', '+62816124', -1, 'Ayam4', 69, 'MyPhone1', 1, 'SendingOKNoReport', -1, 112, 0, ''),
('2012-05-03 17:32:36', '0000-00-00 00:00:00', '2012-05-03 17:32:36', NULL, '0049006B0061006E', '085668010331', 'Default_No_Compression', '', '+62816124', -1, 'Ikan', 66, 'MyPhone1', 1, 'SendingOKNoReport', -1, 111, 0, ''),
('2012-05-03 17:30:41', '0000-00-00 00:00:00', '2012-05-03 17:30:41', NULL, '0031', '085668010331', 'Default_No_Compression', '', '+62816124', -1, '1', 65, 'MyPhone1', 1, 'SendingOKNoReport', -1, 110, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('admin','koordinator') NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'bd74ca062259673a1078df41a2f38d4bc5a275e6', 'admin'),
(2, 'Saudara Koordinator', 'koordinator', 'bd74ca062259673a1078df41a2f38d4bc5a275e6', 'koordinator'),
(3, 'Teplan', 'teplan', 'bd74ca062259673a1078df41a2f38d4bc5a275e6', 'koordinator');
