-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 15, 2022 at 08:20 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
/*!40101 
SET @OLD_CHARACTER_SET_CLIENT = @@CHARACTER_SET_CLIENT */;
/*!40101 
SET @OLD_CHARACTER_SET_RESULTS = @@CHARACTER_SET_RESULTS */;
/*!40101 
SET @OLD_COLLATION_CONNECTION = @@COLLATION_CONNECTION */;
/*!40101 
SET NAMES utf8 */;--
-- Database: `webportal`
--
-- --------------------------------------------------------
--
-- Table structure for table `dosen`
--
CREATE TABLE
IF
	NOT EXISTS `dosen` (
		`kd_dos` INT ( 2 ) NOT NULL AUTO_INCREMENT,
		`NIP` VARCHAR ( 18 ) NOT NULL,
		`nama` VARCHAR ( 30 ) NOT NULL,
		`alamat` VARCHAR ( 30 ) NOT NULL,
		PRIMARY KEY ( `kd_dos` ) 
	) ENGINE = MyISAM DEFAULT CHARSET = latin1 AUTO_INCREMENT = 1;--
-- Dumping data for table `dosen`
--
-- --------------------------------------------------------
--
-- Table structure for table `jadwal`
--
CREATE TABLE
IF
	NOT EXISTS `jadwal` (
		`kd_mk` CHAR ( 6 ) NOT NULL,
		`kd_dos` CHAR ( 2 ) NOT NULL,
		`hari` VARCHAR ( 6 ) NOT NULL,
		`jam` time NOT NULL,
		PRIMARY KEY ( `kd_mk` ) 
	) ENGINE = MyISAM DEFAULT CHARSET = latin1;--
-- Dumping data for table `jadwal`
--
-- --------------------------------------------------------
--
-- Table structure for table `mahasiswa`
--
CREATE TABLE
IF
	NOT EXISTS `mahasiswa` (
		`NIM` CHAR ( 10 ) NOT NULL,
		`nama` VARCHAR ( 35 ) NOT NULL,
		`jkl` VARCHAR ( 1 ) NOT NULL,
		`alamat` VARCHAR ( 30 ) NOT NULL,
		PRIMARY KEY ( `NIM` ) 
	) ENGINE = MyISAM DEFAULT CHARSET = latin1;--
-- Dumping data for table `mahasiswa`
--
-- --------------------------------------------------------
--
-- Table structure for table `matakuliah`
--
CREATE TABLE
IF
	NOT EXISTS `matakuliah` (
		`kd_mk` CHAR ( 6 ) NOT NULL,
		`nama_mk` VARCHAR ( 35 ) NOT NULL,
		`sks` INT ( 1 ) NOT NULL,
		`semester` INT ( 1 ) NOT NULL,
		`kd_dos` CHAR ( 2 ) NOT NULL,
		PRIMARY KEY ( `kd_mk` ) 
	) ENGINE = MyISAM DEFAULT CHARSET = latin1;--
-- Dumping data for table `matakuliah`
--
-- --------------------------------------------------------
--
-- Table structure for table `nilaimhs`
--
CREATE TABLE
IF
	NOT EXISTS `nilaimhs` (
		`kd_mk` CHAR ( 6 ) NOT NULL,
		`NIM` CHAR ( 10 ) NOT NULL,
		`nama_mk` VARCHAR ( 30 ) NOT NULL,
		`nilai` VARCHAR ( 5 ) NOT NULL,
		PRIMARY KEY ( `kd_mk` ) 
	) ENGINE = MyISAM DEFAULT CHARSET = latin1;--
-- Dumping data for table `nilaimhs`
--
-- --------------------------------------------------------
--
-- Table structure for table `user`
--
CREATE TABLE
IF
	NOT EXISTS `user` (
		`id_user` INT ( 5 ) NOT NULL AUTO_INCREMENT,
		`username` VARCHAR ( 20 ) NOT NULL,
		`password` VARCHAR ( 32 ) NOT NULL,
		`nama` VARCHAR ( 30 ) NOT NULL,
		PRIMARY KEY ( `id_user` ) 
	) ENGINE = MyISAM DEFAULT CHARSET = latin1 AUTO_INCREMENT = 1;--
-- Dumping data for table `user`
--
/*!40101 
SET CHARACTER_SET_CLIENT = @OLD_CHARACTER_SET_CLIENT */;
/*!40101 
SET CHARACTER_SET_RESULTS = @OLD_CHARACTER_SET_RESULTS */;
/*!40101 
SET COLLATION_CONNECTION = @OLD_COLLATION_CONNECTION */;