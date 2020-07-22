-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 12, 2020 at 01:30 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mumbai`
--
CREATE DATABASE IF NOT EXISTS `mumbai` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mumbai`;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `cid` int(8) NOT NULL AUTO_INCREMENT,
  `reportnum` int(8) NOT NULL,
  `repstatus` varchar(8) NOT NULL,
  `cdatetime` int(16) NOT NULL,
  `headcom` varchar(2048) NOT NULL,
  `opercom` varchar(2048) NOT NULL,
  `sboardcom` varchar(2048) NOT NULL,
  `boilercom` varchar(2048) NOT NULL,
  `systemcom` varchar(2048) NOT NULL,
  `runhrscom` varchar(2048) NOT NULL,
  `consumpcom` varchar(2048) NOT NULL,
  `bunkercom` varchar(2048) NOT NULL,
  `stockcom` varchar(2048) NOT NULL,
  `tankcom` varchar(2048) NOT NULL,
  `dcargocom` varchar(2048) NOT NULL,
  `dsystemscom` varchar(2048) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `dapproval`
--

CREATE TABLE IF NOT EXISTS `dapproval` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reportnum` int(8) NOT NULL,
  `ddatetime` varchar(16) NOT NULL,
  `enteredby` varchar(32) NOT NULL,
  `approvedby` varchar(32) NOT NULL,
  `comments` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `dballsystems`
--

CREATE TABLE IF NOT EXISTS `dballsystems` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reportnum` int(11) NOT NULL,
  `repstatus` varchar(8) NOT NULL,
  `voynum` varchar(8) NOT NULL,
  `ddatetime` varchar(16) NOT NULL,
  `ballsystem` varchar(16) NOT NULL,
  `balldeball` varchar(4) NOT NULL,
  `typeofoper` varchar(16) NOT NULL,
  `ballstart` varchar(16) NOT NULL,
  `ballstop` varchar(16) NOT NULL,
  `deballstart` varchar(16) NOT NULL,
  `deballstop` varchar(16) NOT NULL,
  `ballwateron` int(8) NOT NULL,
  `ballwaterin` int(8) NOT NULL,
  `ballwaterdis` int(8) NOT NULL,
  `ballwatersamp` int(8) NOT NULL,
  `ballwaterseal` int(8) NOT NULL,
  `ballwatercount` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `reportnum` (`reportnum`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=155 ;

-- --------------------------------------------------------

--
-- Table structure for table `dballtank`
--

CREATE TABLE IF NOT EXISTS `dballtank` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `reportnum` int(8) NOT NULL,
  `repstatus` varchar(8) NOT NULL,
  `voynum` varchar(8) NOT NULL,
  `ddatetime` varchar(16) NOT NULL,
  `tank1` int(8) NOT NULL,
  `tank2` int(8) NOT NULL,
  `tank3` int(8) NOT NULL,
  `tank4` int(8) NOT NULL,
  `tank5` int(8) NOT NULL,
  `tank6` int(8) NOT NULL,
  `tank7` int(8) NOT NULL,
  `tank8` int(8) NOT NULL,
  `tank9` int(8) NOT NULL,
  `tank10` int(8) NOT NULL,
  `tank11` int(8) NOT NULL,
  `tank12` int(8) NOT NULL,
  `tank13` int(8) NOT NULL,
  `tank14` int(8) NOT NULL,
  `tank15` int(8) NOT NULL,
  `tank16` int(8) NOT NULL,
  `tank17` int(8) NOT NULL,
  `tank18` int(8) NOT NULL,
  `tank19` int(8) NOT NULL,
  `tank20` int(8) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `reportnum` (`reportnum`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=211 ;

-- --------------------------------------------------------

--
-- Table structure for table `dcargo`
--

CREATE TABLE IF NOT EXISTS `dcargo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reportnum` int(8) NOT NULL,
  `reptype` varchar(16) NOT NULL,
  `repstatus` varchar(8) NOT NULL,
  `voynum` varchar(16) NOT NULL,
  `ddatetime` varchar(16) NOT NULL,
  `contai` varchar(8) NOT NULL,
  `totunits` int(8) NOT NULL,
  `reeferunits` int(8) NOT NULL,
  `numteu` int(8) NOT NULL,
  `numcranes` int(8) NOT NULL,
  `cargowt` int(8) NOT NULL,
  `lashings` varchar(8) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `reportnum` (`reportnum`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=200 ;

-- --------------------------------------------------------

--
-- Table structure for table `dcomments`
--

CREATE TABLE IF NOT EXISTS `dcomments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reportnum` int(8) NOT NULL,
  `ddatetime` varchar(16) NOT NULL,
  `enterby` varchar(32) NOT NULL,
  `appby` varchar(32) NOT NULL,
  `comments` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `dfwatersys`
--

CREATE TABLE IF NOT EXISTS `dfwatersys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reportnum` int(8) NOT NULL,
  `repstatus` varchar(8) NOT NULL,
  `voynum` varchar(8) NOT NULL,
  `ddatetime` varchar(16) NOT NULL,
  `fwbunkstart` varchar(16) NOT NULL,
  `fwbunkstop` varchar(16) NOT NULL,
  `fwintake` int(8) NOT NULL,
  `fwtank1` int(8) NOT NULL,
  `fwtank2` int(8) NOT NULL,
  `fwtank3` int(8) NOT NULL,
  `fwtank4` int(8) NOT NULL,
  `fwtank5` int(8) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `reportnum` (`reportnum`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=211 ;

-- --------------------------------------------------------

--
-- Table structure for table `dlog`
--

CREATE TABLE IF NOT EXISTS `dlog` (
  `dlogid` int(8) NOT NULL AUTO_INCREMENT,
  `aftdraft` int(8) NOT NULL,
  `fwddraft` int(8) NOT NULL,
  `dtrim` int(8) NOT NULL,
  `mcheight` int(8) NOT NULL,
  `mrangle` int(8) NOT NULL,
  `ballwater` int(8) NOT NULL,
  `loadcons` int(8) NOT NULL,
  PRIMARY KEY (`dlogid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `dobservation`
--

CREATE TABLE IF NOT EXISTS `dobservation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reportnum` int(8) NOT NULL,
  `ddatetime` varchar(16) NOT NULL,
  `dtimezone` int(8) NOT NULL,
  `gyrocourse` int(8) NOT NULL,
  `gyroerror` int(8) NOT NULL,
  `magcourse` int(8) NOT NULL,
  `deviation` int(8) NOT NULL,
  `variation` int(8) NOT NULL,
  `truecourse` int(8) NOT NULL,
  `heading` int(8) NOT NULL,
  `seaswell` int(8) NOT NULL,
  `wavehght` int(8) NOT NULL,
  `wavedir` int(8) NOT NULL,
  `truecurrspeed` int(8) NOT NULL,
  `truecurrdir` int(8) NOT NULL,
  `relcurrspeed` int(8) NOT NULL,
  `relcurrdir` int(8) NOT NULL,
  `waterdepth` int(8) NOT NULL,
  `oow` int(8) NOT NULL,
  `voynum` varchar(8) NOT NULL,
  `repstatus` varchar(8) NOT NULL,
  `observenum` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=142 ;

-- --------------------------------------------------------

--
-- Table structure for table `dobserve`
--

CREATE TABLE IF NOT EXISTS `dobserve` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reportnum` int(8) NOT NULL,
  `repstatus` varchar(8) NOT NULL,
  `voynum` varchar(8) NOT NULL,
  `ddatetime` varchar(16) NOT NULL,
  `dtimezone` int(8) NOT NULL,
  `airtemp` int(8) NOT NULL,
  `swtemp` int(8) NOT NULL,
  `barpress` int(8) NOT NULL,
  `visibility` int(8) NOT NULL,
  `gyrocourse` int(8) NOT NULL,
  `gyroerror` int(8) NOT NULL,
  `magcourse` int(8) NOT NULL,
  `deviation` int(8) NOT NULL,
  `variation` int(8) NOT NULL,
  `truecourse` int(8) NOT NULL,
  `heading` int(8) NOT NULL,
  `seaswell` varchar(8) NOT NULL,
  `wavehght` int(8) NOT NULL,
  `wavedir` int(8) NOT NULL,
  `truecurrspeed` int(8) NOT NULL,
  `truecurrdir` int(8) NOT NULL,
  `relcurrspeed` int(8) NOT NULL,
  `relcurrdir` int(8) NOT NULL,
  `waterdepth` int(8) NOT NULL,
  `oow` varchar(8) NOT NULL,
  `speedlog` varchar(8) NOT NULL,
  `tripcountgps` int(8) NOT NULL,
  `tripcountlog` int(8) NOT NULL,
  `logspeed` int(8) NOT NULL,
  `logdist` int(8) NOT NULL,
  `obsdist` int(8) NOT NULL,
  `obsspeed` int(8) NOT NULL,
  `obsdistpass` int(8) NOT NULL,
  `remdist` int(8) NOT NULL,
  `windrep` varchar(8) NOT NULL,
  `truewinspeed` int(8) NOT NULL,
  `truewinforce` int(8) NOT NULL,
  `truewindir` int(8) NOT NULL,
  `truewindirhead` int(8) NOT NULL,
  `relwinspeed` int(8) NOT NULL,
  `relwindir` int(8) NOT NULL,
  `ltdeg` int(4) NOT NULL,
  `ltmin` int(2) NOT NULL,
  `ltsec` int(2) NOT NULL,
  `ltdir` varchar(2) NOT NULL,
  `lgdeg` int(4) NOT NULL,
  `lgmin` int(4) NOT NULL,
  `lgsec` int(4) NOT NULL,
  `lgdir` varchar(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=203 ;

-- --------------------------------------------------------

--
-- Table structure for table `dposition`
--

CREATE TABLE IF NOT EXISTS `dposition` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reportnum` int(8) NOT NULL,
  `voynum` varchar(8) NOT NULL,
  `repstatus` varchar(8) NOT NULL,
  `observenum` int(2) NOT NULL,
  `ddatetime` varchar(16) NOT NULL,
  `ltdeg` int(4) NOT NULL,
  `ltmin` int(2) NOT NULL,
  `ltsec` int(2) NOT NULL,
  `ltdir` varchar(2) NOT NULL,
  `lgdeg` int(4) NOT NULL,
  `lgmin` int(4) NOT NULL,
  `lgsec` int(4) NOT NULL,
  `lgdir` varchar(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=142 ;

-- --------------------------------------------------------

--
-- Table structure for table `dspeeddist`
--

CREATE TABLE IF NOT EXISTS `dspeeddist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reportnum` int(8) NOT NULL,
  `ddatetime` varchar(16) NOT NULL,
  `speedlog` int(8) NOT NULL,
  `tripcountgps` int(8) NOT NULL,
  `tripcountlog` int(8) NOT NULL,
  `logspeed` int(8) NOT NULL,
  `logdist` int(8) NOT NULL,
  `obsdist` int(8) NOT NULL,
  `obsspeed` int(8) NOT NULL,
  `obsdistpass` int(8) NOT NULL,
  `remdist` int(8) NOT NULL,
  `voynum` varchar(8) NOT NULL,
  `repstatus` varchar(8) NOT NULL,
  `observenum` int(2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `reportnum` (`reportnum`),
  UNIQUE KEY `reportnum_2` (`reportnum`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=142 ;

-- --------------------------------------------------------

--
-- Table structure for table `dstoppages`
--

CREATE TABLE IF NOT EXISTS `dstoppages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reportnum` int(8) NOT NULL,
  `repstatus` varchar(8) NOT NULL,
  `voynum` varchar(8) NOT NULL,
  `ddatetime` varchar(8) NOT NULL,
  `category` varchar(32) NOT NULL,
  `reason` varchar(32) NOT NULL,
  `comments` varchar(64) NOT NULL,
  `startevent` varchar(16) NOT NULL,
  `stopevent` varchar(16) NOT NULL,
  `numhrs` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

-- --------------------------------------------------------

--
-- Table structure for table `dsystems`
--

CREATE TABLE IF NOT EXISTS `dsystems` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reportnum` int(8) NOT NULL,
  `repstatus` varchar(8) NOT NULL,
  `voynum` varchar(8) NOT NULL,
  `ddatetime` varchar(16) NOT NULL,
  `fwbunkstart` varchar(16) NOT NULL,
  `fwbunkstop` varchar(16) NOT NULL,
  `fwintake` int(8) NOT NULL,
  `fwtank1` int(8) NOT NULL,
  `fwtank2` int(8) NOT NULL,
  `fwtank3` int(8) NOT NULL,
  `fwtank4` int(8) NOT NULL,
  `fwtank5` int(8) NOT NULL,
  `ballsystem` varchar(16) NOT NULL,
  `balldeball` varchar(4) NOT NULL,
  `typeofoper` varchar(16) NOT NULL,
  `ballstart` varchar(16) NOT NULL,
  `ballstop` varchar(16) NOT NULL,
  `deballstart` varchar(16) NOT NULL,
  `deballstop` varchar(16) NOT NULL,
  `ballwateron` int(8) NOT NULL,
  `ballwaterin` int(8) NOT NULL,
  `ballwaterdis` int(8) NOT NULL,
  `ballwatersamp` int(8) NOT NULL,
  `ballwaterseal` int(8) NOT NULL,
  `ballwatercount` int(11) NOT NULL,
  `tank1` int(8) NOT NULL,
  `tank2` int(8) NOT NULL,
  `tank3` int(8) NOT NULL,
  `tank4` int(8) NOT NULL,
  `tank5` int(8) NOT NULL,
  `tank6` int(8) NOT NULL,
  `tank7` int(8) NOT NULL,
  `tank8` int(8) NOT NULL,
  `tank9` int(8) NOT NULL,
  `tank10` int(8) NOT NULL,
  `tank11` int(8) NOT NULL,
  `tank12` int(8) NOT NULL,
  `tank13` int(8) NOT NULL,
  `tank14` int(8) NOT NULL,
  `tank15` int(8) NOT NULL,
  `tank16` int(8) NOT NULL,
  `tank17` int(8) NOT NULL,
  `tank18` int(8) NOT NULL,
  `tank19` int(8) NOT NULL,
  `tank20` int(8) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `reportnum` (`reportnum`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=209 ;

-- --------------------------------------------------------

--
-- Table structure for table `dwind`
--

CREATE TABLE IF NOT EXISTS `dwind` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ddatetime` varchar(16) NOT NULL,
  `windrep` int(8) NOT NULL,
  `truewinspeed` int(8) NOT NULL,
  `truewinforce` int(8) NOT NULL,
  `truewindir` int(8) NOT NULL,
  `truewindirhead` int(8) NOT NULL,
  `relwinspeed` int(8) NOT NULL,
  `relwindir` int(8) NOT NULL,
  `repstatus` varchar(8) NOT NULL,
  `voynum` varchar(8) NOT NULL,
  `observenum` int(2) NOT NULL,
  `reportnum` int(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=142 ;

-- --------------------------------------------------------

--
-- Table structure for table `dworkdone`
--

CREATE TABLE IF NOT EXISTS `dworkdone` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reportnum` int(8) NOT NULL,
  `repstatus` varchar(8) NOT NULL,
  `voynum` varchar(8) NOT NULL,
  `ddatetime` varchar(16) NOT NULL,
  `testing` varchar(32) NOT NULL,
  `freq` varchar(32) NOT NULL,
  `testby` varchar(32) NOT NULL,
  `appby` varchar(32) NOT NULL,
  `comments` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

-- --------------------------------------------------------

--
-- Table structure for table `elog`
--

CREATE TABLE IF NOT EXISTS `elog` (
  `elogid` int(4) NOT NULL AUTO_INCREMENT,
  `revcounter` varchar(8) NOT NULL,
  `rpm` int(8) NOT NULL,
  `power` int(8) NOT NULL,
  `torque` int(8) NOT NULL,
  PRIMARY KEY (`elogid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Table structure for table `engauxacsystems`
--

CREATE TABLE IF NOT EXISTS `engauxacsystems` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `reportnum` int(8) NOT NULL,
  `repstatus` varchar(8) NOT NULL,
  `acsuctpress1` int(8) NOT NULL,
  `acsuctpress2` int(8) NOT NULL,
  `acdispress1` int(8) NOT NULL,
  `acdispress2` int(8) NOT NULL,
  `aclopress1` int(8) NOT NULL,
  `aclopress2` int(8) NOT NULL,
  `acoillevel1` varchar(16) NOT NULL,
  `acoillevel2` varchar(16) NOT NULL,
  `acliqlevel1` varchar(16) NOT NULL,
  `acliqlevel2` varchar(16) NOT NULL,
  `reefdispress1` int(8) NOT NULL,
  `reefdispress2` int(8) NOT NULL,
  `reeflopress1` int(8) NOT NULL,
  `reeflopress2` int(8) NOT NULL,
  `reefoillevel1` varchar(16) NOT NULL,
  `reefoillevel2` varchar(16) NOT NULL,
  `reefliqlevel1` varchar(16) NOT NULL,
  `reefliqlevel2` varchar(16) NOT NULL,
  `reefsucpress1` int(8) NOT NULL,
  `reefsucpress2` int(8) NOT NULL,
  `vegrtemp1` int(8) NOT NULL,
  `vegrtemp2` int(8) NOT NULL,
  `vegrtemp3` int(8) NOT NULL,
  `vegrtemp4` int(8) NOT NULL,
  `vegrtemp5` int(8) NOT NULL,
  `vegrtemp6` int(8) NOT NULL,
  `meatrtemp1` int(8) NOT NULL,
  `meatrtemp2` int(8) NOT NULL,
  `meatrtemp3` int(8) NOT NULL,
  `meatrtemp4` int(8) NOT NULL,
  `meatrtemp5` int(8) NOT NULL,
  `meatrtemp6` int(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=88 ;

-- --------------------------------------------------------

--
-- Table structure for table `engauxaircon`
--

CREATE TABLE IF NOT EXISTS `engauxaircon` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `engdatetime` varchar(16) NOT NULL,
  `reportnum` int(8) NOT NULL,
  `airconnum` int(4) NOT NULL,
  `inoper` varchar(4) NOT NULL,
  `suctionpress` int(4) NOT NULL,
  `dischargepress` int(4) NOT NULL,
  `lopress` int(4) NOT NULL,
  `oillevel` int(4) NOT NULL,
  `liquidlevel` int(4) NOT NULL,
  `accomairintemp` int(4) NOT NULL,
  `accomairouttemp` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `engauxboiler`
--

CREATE TABLE IF NOT EXISTS `engauxboiler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `engdatetime` varchar(16) NOT NULL,
  `reportnum` int(8) NOT NULL,
  `oilfired` varchar(8) NOT NULL,
  `exhgasoper` varchar(8) NOT NULL,
  `sersteampress` int(8) NOT NULL,
  `oilfiredsteampress` int(8) NOT NULL,
  `exhsteampress` int(8) NOT NULL,
  `lpsteampress` int(8) NOT NULL,
  `hpsteampress` int(8) NOT NULL,
  `feedwaterinpress` int(8) NOT NULL,
  `hotwelltemp` int(8) NOT NULL,
  `draintanktemp` int(8) NOT NULL,
  `exhsteampres` int(8) NOT NULL,
  `ph` int(4) NOT NULL,
  `conductivity` int(4) NOT NULL,
  `salinity` int(4) NOT NULL,
  `chloride` int(4) NOT NULL,
  `hydalk` int(4) NOT NULL,
  `blowdown` int(4) NOT NULL,
  `dosage` int(4) NOT NULL,
  `repstatus` varchar(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=164 ;

-- --------------------------------------------------------

--
-- Table structure for table `engauxgen1`
--

CREATE TABLE IF NOT EXISTS `engauxgen1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `engauxdatetime` varchar(16) NOT NULL,
  `reportnum` int(8) NOT NULL,
  `repstatus` varchar(8) NOT NULL,
  `foilinpress` int(8) NOT NULL,
  `loilinpress` int(8) NOT NULL,
  `cwaterpress` int(8) NOT NULL,
  `scavairpress` int(8) NOT NULL,
  `foilintemp` int(8) NOT NULL,
  `loilintemp` int(8) NOT NULL,
  `cwaterintemp` int(8) NOT NULL,
  `cwateroutavg` int(8) NOT NULL,
  `cwatertempoutlow` int(8) NOT NULL,
  `exhtemplow` int(8) NOT NULL,
  `cwatertempouthigh` int(8) NOT NULL,
  `scavairtemp` int(8) NOT NULL,
  `exhtempavg` int(8) NOT NULL,
  `exhtemphigh` int(8) NOT NULL,
  `tcintemp` int(8) NOT NULL,
  `tcouttemp` int(8) NOT NULL,
  `sumplevel` int(8) NOT NULL,
  `engpower` int(8) NOT NULL,
  `engload` int(8) NOT NULL,
  `pfactor` int(4) NOT NULL,
  `bearingtemp` int(4) NOT NULL,
  `windingtemp` int(4) NOT NULL,
  `engcurrent` int(8) NOT NULL,
  `engvoltage` int(8) NOT NULL,
  `cpowerreading` int(8) NOT NULL,
  `ppowerreading` int(8) NOT NULL,
  `dpowerreading` int(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=95 ;

-- --------------------------------------------------------

--
-- Table structure for table `engauxgen2`
--

CREATE TABLE IF NOT EXISTS `engauxgen2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `engauxdatetime` varchar(16) NOT NULL,
  `reportnum` int(8) NOT NULL,
  `foilinpress2` int(8) NOT NULL,
  `loilinpress` int(8) NOT NULL,
  `cwaterpress` int(8) NOT NULL,
  `scavairpress` int(8) NOT NULL,
  `foilintemp` int(8) NOT NULL,
  `loilintemp` int(8) NOT NULL,
  `cwaterintemp` int(8) NOT NULL,
  `cwateroutavg` int(8) NOT NULL,
  `cwatertempoutlow` int(8) NOT NULL,
  `cwatertempouthigh` int(8) NOT NULL,
  `scavairtemp` int(8) NOT NULL,
  `exhtempavg` int(8) NOT NULL,
  `exhtemplow` int(8) NOT NULL,
  `exhtemphigh` int(8) NOT NULL,
  `tcintemp` int(8) NOT NULL,
  `tcouttemp` int(8) NOT NULL,
  `sumplevel` int(8) NOT NULL,
  `repstatus` varchar(8) NOT NULL,
  `engpower` int(8) NOT NULL,
  `engload` int(8) NOT NULL,
  `pfactor` int(4) NOT NULL,
  `altbearingtemp` int(4) NOT NULL,
  `engcurrent` int(8) NOT NULL,
  `engvoltage` int(8) NOT NULL,
  `cpowerreading` int(8) NOT NULL,
  `ppowerreading` int(8) NOT NULL,
  `dpowerreading` int(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=95 ;

-- --------------------------------------------------------

--
-- Table structure for table `engauxgen3`
--

CREATE TABLE IF NOT EXISTS `engauxgen3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `engauxdatetime` varchar(16) NOT NULL,
  `reportnum` int(8) NOT NULL,
  `foilinpress3` int(8) NOT NULL,
  `loilinpress` int(8) NOT NULL,
  `cwaterpress` int(8) NOT NULL,
  `scavairpress` int(8) NOT NULL,
  `foilintemp` int(8) NOT NULL,
  `loilintemp` int(8) NOT NULL,
  `cwaterintemp` int(8) NOT NULL,
  `cwateroutavg` int(8) NOT NULL,
  `cwatertempoutlow` int(8) NOT NULL,
  `cwatertempouthigh` int(8) NOT NULL,
  `scavairtemp` int(8) NOT NULL,
  `exhtempavg` int(8) NOT NULL,
  `exhtemplow` int(8) NOT NULL,
  `exhtemphigh` int(8) NOT NULL,
  `tcintemp` int(8) NOT NULL,
  `tcouttemp` int(8) NOT NULL,
  `sumplevel` int(8) NOT NULL,
  `repstatus` varchar(8) NOT NULL,
  `engpower` int(8) NOT NULL,
  `engload` int(8) NOT NULL,
  `pfactor` int(4) NOT NULL,
  `altbearingtemp` int(4) NOT NULL,
  `engcurrent` int(8) NOT NULL,
  `engvoltage` int(8) NOT NULL,
  `cpowerreading` int(8) NOT NULL,
  `ppowerreading` int(8) NOT NULL,
  `dpowerreading` int(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=95 ;

-- --------------------------------------------------------

--
-- Table structure for table `engauxgen4`
--

CREATE TABLE IF NOT EXISTS `engauxgen4` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `engauxdatetime` varchar(16) NOT NULL,
  `reportnum` int(8) NOT NULL,
  `foilinpress` int(8) NOT NULL,
  `loilinpress` int(8) NOT NULL,
  `cwaterpress` int(8) NOT NULL,
  `scavairpress` int(8) NOT NULL,
  `foilintemp` int(8) NOT NULL,
  `loilintemp` int(8) NOT NULL,
  `cwaterintemp` int(8) NOT NULL,
  `cwateroutavg` int(8) NOT NULL,
  `cwatertempoutlow` int(8) NOT NULL,
  `cwatertempouthigh` int(8) NOT NULL,
  `scavairtemp` int(8) NOT NULL,
  `exhtempavg` int(8) NOT NULL,
  `exhtemplow` int(8) NOT NULL,
  `exhtemphigh` int(8) NOT NULL,
  `tcintemp` int(8) NOT NULL,
  `tcouttemp` int(8) NOT NULL,
  `sumplevel` int(8) NOT NULL,
  `repstatus` varchar(8) NOT NULL,
  `engpower` int(8) NOT NULL,
  `engload` int(8) NOT NULL,
  `pfactor` int(4) NOT NULL,
  `altbearingtemp` int(4) NOT NULL,
  `engcurrent` int(8) NOT NULL,
  `engvoltage` int(8) NOT NULL,
  `cpowerreading` int(8) NOT NULL,
  `ppowerreading` int(8) NOT NULL,
  `dpowerreading` int(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=95 ;

-- --------------------------------------------------------

--
-- Table structure for table `engauxgen5`
--

CREATE TABLE IF NOT EXISTS `engauxgen5` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `engauxdatetime` varchar(16) NOT NULL,
  `reportnum` int(8) NOT NULL,
  `foilinpress` int(8) NOT NULL,
  `loilinpress` int(8) NOT NULL,
  `cwaterpress` int(8) NOT NULL,
  `scavairpress` int(8) NOT NULL,
  `foilintemp` int(8) NOT NULL,
  `loilintemp` int(8) NOT NULL,
  `cwaterintemp` int(8) NOT NULL,
  `cwateroutavg` int(8) NOT NULL,
  `cwatertempoutlow` int(8) NOT NULL,
  `cwatertempouthigh` int(8) NOT NULL,
  `scavairtemp` int(8) NOT NULL,
  `exhtempavg` int(8) NOT NULL,
  `exhtemplow` int(8) NOT NULL,
  `exhtemphigh` int(8) NOT NULL,
  `tcintemp` int(8) NOT NULL,
  `tcouttemp` int(8) NOT NULL,
  `sumplevel` int(8) NOT NULL,
  `repstatus` varchar(8) NOT NULL,
  `engpower` int(8) NOT NULL,
  `engload` int(8) NOT NULL,
  `pfactor` int(4) NOT NULL,
  `altbearingtemp` int(4) NOT NULL,
  `engcurrent` int(8) NOT NULL,
  `engvoltage` int(8) NOT NULL,
  `cpowerreading` int(8) NOT NULL,
  `ppowerreading` int(8) NOT NULL,
  `dpowerreading` int(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=95 ;

-- --------------------------------------------------------

--
-- Table structure for table `engauxpurifiersystems`
--

CREATE TABLE IF NOT EXISTS `engauxpurifiersystems` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `engdatetime` varchar(16) NOT NULL,
  `reportnum` int(8) NOT NULL,
  `repstatus` varchar(8) NOT NULL,
  `foilpurifiertemp1` int(4) NOT NULL,
  `foilpurifiertemp2` int(4) NOT NULL,
  `foilpurifiertemp3` int(4) NOT NULL,
  `foilpurifiertemp4` int(4) NOT NULL,
  `loilpurifiertemp1` int(4) NOT NULL,
  `loilpurifiertemp2` int(4) NOT NULL,
  `loilpurifiertemp3` int(4) NOT NULL,
  `loilpurifiertemp4` int(4) NOT NULL,
  `foilpurifierpress1` int(4) NOT NULL,
  `foilpurifierpress2` int(4) NOT NULL,
  `foilpurifierpress3` int(4) NOT NULL,
  `foilpurifierpress4` int(4) NOT NULL,
  `loilpurifierpress1` int(4) NOT NULL,
  `loilpurifierpress2` int(4) NOT NULL,
  `loilpurifierpress3` int(4) NOT NULL,
  `loilpurifierpress4` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=88 ;

-- --------------------------------------------------------

--
-- Table structure for table `engauxscrubsystems`
--

CREATE TABLE IF NOT EXISTS `engauxscrubsystems` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `engdatetime` varchar(16) NOT NULL,
  `reportnum` int(8) NOT NULL,
  `repstatus` varchar(8) NOT NULL,
  `scruboper` varchar(8) NOT NULL,
  `sox` int(8) NOT NULL,
  `swflow` int(8) NOT NULL,
  `sfan` int(4) NOT NULL,
  `swinph` int(4) NOT NULL,
  `swinpah` int(4) NOT NULL,
  `swintemp` int(4) NOT NULL,
  `swinturb` int(4) NOT NULL,
  `swoutph` int(4) NOT NULL,
  `swoutpah` int(4) NOT NULL,
  `swoutturb` int(4) NOT NULL,
  `swouttemp` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=88 ;

-- --------------------------------------------------------

--
-- Table structure for table `engauxshafteng1`
--

CREATE TABLE IF NOT EXISTS `engauxshafteng1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `engdatetime` varchar(16) NOT NULL,
  `reportnum` int(8) NOT NULL,
  `engpower` int(8) NOT NULL,
  `engload` int(8) NOT NULL,
  `altbearingtemp` int(4) NOT NULL,
  `pfactor` int(4) NOT NULL,
  `repstatus` varchar(8) NOT NULL,
  `engcurrent` int(8) NOT NULL,
  `engvoltage` int(8) NOT NULL,
  `cpowerreading` int(8) NOT NULL,
  `ppowerreading` int(8) NOT NULL,
  `dpowerreading` int(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `engauxshafteng2`
--

CREATE TABLE IF NOT EXISTS `engauxshafteng2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `engdatetime` varchar(16) NOT NULL,
  `reportnum` int(8) NOT NULL,
  `power` int(8) NOT NULL,
  `engload` int(8) NOT NULL,
  `altbearingtemp` int(4) NOT NULL,
  `powerfact` int(4) NOT NULL,
  `repstatus` varchar(8) NOT NULL,
  `engcurrent` int(8) NOT NULL,
  `engvoltage` int(8) NOT NULL,
  `cpowerreading` int(8) NOT NULL,
  `ppowerreading` int(8) NOT NULL,
  `dpowerreading` int(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `engauxsysreefer`
--

CREATE TABLE IF NOT EXISTS `engauxsysreefer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `engdatetime` varchar(16) NOT NULL,
  `reportnum` int(8) NOT NULL,
  `reefernum` int(4) NOT NULL,
  `inoper` varchar(4) NOT NULL,
  `suctionpress` int(4) NOT NULL,
  `dischargepress` int(4) NOT NULL,
  `lopress` int(4) NOT NULL,
  `oillevel` int(4) NOT NULL,
  `liqlevel` int(4) NOT NULL,
  `provisionlevel` int(4) NOT NULL,
  `vegroom1` int(4) NOT NULL,
  `vegroom2` int(4) NOT NULL,
  `vegroom3` int(4) NOT NULL,
  `vegroom4` int(4) NOT NULL,
  `meatroom1` int(4) NOT NULL,
  `meatroom2` int(4) NOT NULL,
  `meatroom3` int(4) NOT NULL,
  `meatroom4` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `engauxtanksystems`
--

CREATE TABLE IF NOT EXISTS `engauxtanksystems` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `engdatetime` varchar(16) NOT NULL,
  `reportnum` int(8) NOT NULL,
  `repstatus` varchar(8) NOT NULL,
  `hshfosr` int(8) NOT NULL,
  `vlsfosr` int(8) NOT NULL,
  `ulsfosr` int(8) NOT NULL,
  `hsmgosr` int(8) NOT NULL,
  `hsmdosr` int(8) NOT NULL,
  `lsmgosr` int(8) NOT NULL,
  `lsmdosr` int(8) NOT NULL,
  `hshfost` int(8) NOT NULL,
  `vlsfost` int(8) NOT NULL,
  `ulsfost` int(8) NOT NULL,
  `hsmgost` int(8) NOT NULL,
  `hsmdost` int(8) NOT NULL,
  `lsmgost` int(8) NOT NULL,
  `lsmdost` int(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=88 ;

-- --------------------------------------------------------

--
-- Table structure for table `engauxwatersystems`
--

CREATE TABLE IF NOT EXISTS `engauxwatersystems` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `engdatetime` varchar(16) NOT NULL,
  `reportnum` int(8) NOT NULL,
  `repstatus` varchar(8) NOT NULL,
  `swsyspress` int(4) NOT NULL,
  `swsystemp` int(4) NOT NULL,
  `firelinepress` int(4) NOT NULL,
  `engroompress` int(4) NOT NULL,
  `engroomtemp` int(4) NOT NULL,
  `acairintemp` int(8) NOT NULL,
  `acairouttemp` int(8) NOT NULL,
  `ltcwsyspress` int(4) NOT NULL,
  `ltcwsystemp` int(4) NOT NULL,
  `htcwsyspress` int(8) NOT NULL,
  `htcwsystemp` int(8) NOT NULL,
  `workairpress` int(4) NOT NULL,
  `ctrlairpress` int(4) NOT NULL,
  `airrecpress1` int(4) NOT NULL,
  `airrecpress2` int(4) NOT NULL,
  `airrecpress3` int(4) NOT NULL,
  `jwintemp` int(8) NOT NULL,
  `jwouttemp` int(8) NOT NULL,
  `condswin` int(8) NOT NULL,
  `condswout` int(8) NOT NULL,
  `shelltemp` int(8) NOT NULL,
  `ejpumppress` int(8) NOT NULL,
  `fwpumppress` int(8) NOT NULL,
  `flowmeter` int(8) NOT NULL,
  `tonsprod` int(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=88 ;

-- --------------------------------------------------------

--
-- Table structure for table `engbearing`
--

CREATE TABLE IF NOT EXISTS `engbearing` (
  `engbrid` int(11) NOT NULL AUTO_INCREMENT,
  `engnum` int(2) NOT NULL,
  `tbheadtemp` int(4) NOT NULL,
  `tbastemp` int(4) NOT NULL,
  `sb1` int(4) NOT NULL,
  `sb2` int(11) NOT NULL,
  `sb3` int(11) NOT NULL,
  `sb4` int(11) NOT NULL,
  `sb5` int(11) NOT NULL,
  `sb6` int(11) NOT NULL,
  `sb7` int(11) NOT NULL,
  `sb8` int(11) NOT NULL,
  `engdatetime` varchar(16) NOT NULL,
  `reportnum` int(8) NOT NULL,
  `repstatus` varchar(8) NOT NULL,
  PRIMARY KEY (`engbrid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=167 ;

-- --------------------------------------------------------

--
-- Table structure for table `engconsfoilloss`
--

CREATE TABLE IF NOT EXISTS `engconsfoilloss` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `engdatetime` int(8) NOT NULL,
  `reportnum` int(8) NOT NULL,
  `repstatus` int(8) NOT NULL,
  `hshfosg` int(8) NOT NULL,
  `vlsfosg` int(8) NOT NULL,
  `ulsfosg` int(8) NOT NULL,
  `hsmgosg` int(8) NOT NULL,
  `hsmdosg` int(8) NOT NULL,
  `lsmgosg` int(8) NOT NULL,
  `lsmdosg` int(8) NOT NULL,
  `totalsg` int(8) NOT NULL,
  `hshfobg` int(8) NOT NULL,
  `vlsfobg` int(8) NOT NULL,
  `ulsfobg` int(8) NOT NULL,
  `hsmgobg` int(8) NOT NULL,
  `hsmdobg` int(8) NOT NULL,
  `lsmgobg` int(8) NOT NULL,
  `lsmdobg` int(8) NOT NULL,
  `totalbg` int(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=79 ;

-- --------------------------------------------------------

--
-- Table structure for table `engconsfuel`
--

CREATE TABLE IF NOT EXISTS `engconsfuel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `engdatetime` varchar(16) NOT NULL,
  `reportnum` int(4) NOT NULL,
  `repstatus` varchar(8) NOT NULL,
  `engtype` varchar(8) NOT NULL,
  `hshfo` int(4) NOT NULL,
  `vlsfo` int(4) NOT NULL,
  `ulsfo` int(4) NOT NULL,
  `hsmgo` int(4) NOT NULL,
  `hsmdo` int(4) NOT NULL,
  `lsmgo` int(4) NOT NULL,
  `lsmdo` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=410 ;

-- --------------------------------------------------------

--
-- Table structure for table `engconsloilloss`
--

CREATE TABLE IF NOT EXISTS `engconsloilloss` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `engdatetime` varchar(16) NOT NULL,
  `reportnum` int(8) NOT NULL,
  `repstatus` varchar(8) NOT NULL,
  `melubeoilsg` int(8) NOT NULL,
  `lowbncyloilsg` int(8) NOT NULL,
  `highbncyloilsg` int(8) NOT NULL,
  `additivessg` int(8) NOT NULL,
  `aeloilsg` int(8) NOT NULL,
  `stgearloilsg` int(8) NOT NULL,
  `sttubeloilsg` int(8) NOT NULL,
  `hydoilsg` int(8) NOT NULL,
  `otheroilsg` int(8) NOT NULL,
  `totalsg` int(8) NOT NULL,
  `melubeoilbg` int(8) NOT NULL,
  `lowbncyloilbg` int(8) NOT NULL,
  `highbncyloilbg` int(8) NOT NULL,
  `additivesbg` int(8) NOT NULL,
  `aeloilbg` int(8) NOT NULL,
  `stgearloilbg` int(8) NOT NULL,
  `sttubeloilbg` int(8) NOT NULL,
  `hydoilbg` int(8) NOT NULL,
  `otheroilbg` int(8) NOT NULL,
  `totalbg` int(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=67 ;

-- --------------------------------------------------------

--
-- Table structure for table `engconslubecyloil`
--

CREATE TABLE IF NOT EXISTS `engconslubecyloil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `engdatetime` varchar(16) NOT NULL,
  `reportnum` int(8) NOT NULL,
  `repstatus` varchar(8) NOT NULL,
  `melubeoil` int(4) NOT NULL,
  `lbncyloil` int(4) NOT NULL,
  `hbncyloil` int(4) NOT NULL,
  `additives` int(4) NOT NULL,
  `aelubeoil` int(4) NOT NULL,
  `stgearloil` int(4) NOT NULL,
  `sttubeloil` int(4) NOT NULL,
  `hydoil` int(4) NOT NULL,
  `otheroil` int(4) NOT NULL,
  `typeofoper` varchar(8) NOT NULL,
  `baseno` int(8) NOT NULL,
  `density15` int(8) NOT NULL,
  `fuseds` int(8) NOT NULL,
  `clotanktemp` int(8) NOT NULL,
  `actconsl` int(8) NOT NULL,
  `actconskg` int(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=79 ;

-- --------------------------------------------------------

--
-- Table structure for table `engconsprop`
--

CREATE TABLE IF NOT EXISTS `engconsprop` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `engdatetime` varchar(16) NOT NULL,
  `reportnum` int(8) NOT NULL,
  `repstatus` varchar(8) NOT NULL,
  `lhshfo` int(8) NOT NULL,
  `lvlsfo` int(8) NOT NULL,
  `lulsfo` int(8) NOT NULL,
  `lhsmgo` int(8) NOT NULL,
  `lhsmdo` int(8) NOT NULL,
  `llsmgo` int(8) NOT NULL,
  `llsmdo` int(8) NOT NULL,
  `shshfo` int(8) NOT NULL,
  `svlsfo` int(8) NOT NULL,
  `sulsfo` int(8) NOT NULL,
  `shsmgo` int(8) NOT NULL,
  `shsmdo` int(8) NOT NULL,
  `slsmgo` int(8) NOT NULL,
  `slsmdo` int(8) NOT NULL,
  `dhshfo` int(8) NOT NULL,
  `dvlsfo` int(8) NOT NULL,
  `dulsfo` int(8) NOT NULL,
  `dhsmgo` int(8) NOT NULL,
  `dhsmdo` int(8) NOT NULL,
  `dlsmgo` int(8) NOT NULL,
  `dlsmdo` int(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=79 ;

-- --------------------------------------------------------

--
-- Table structure for table `engcoolwater`
--

CREATE TABLE IF NOT EXISTS `engcoolwater` (
  `engid` int(11) NOT NULL AUTO_INCREMENT,
  `engnum` int(2) NOT NULL,
  `cwinpress` int(4) NOT NULL,
  `cwintemp` int(4) NOT NULL,
  `cwcyltemp1` int(4) NOT NULL,
  `cwcyltemp2` int(4) NOT NULL,
  `cwcyltemp3` int(4) NOT NULL,
  `cwcyltemp4` int(4) NOT NULL,
  `cwcyltemp5` int(4) NOT NULL,
  `cwcyltemp6` int(4) NOT NULL,
  `cwcyltemp7` int(4) NOT NULL,
  `cwcyltemp8` int(4) NOT NULL,
  `cwcyltemp9` int(4) NOT NULL,
  `cwcyltemp10` int(4) NOT NULL,
  `cwcyltemp11` int(4) NOT NULL,
  `cwcyltemp12` int(4) NOT NULL,
  `cwcyltemp13` int(4) NOT NULL,
  `cwcyltemp14` int(4) NOT NULL,
  `cwcyltemp15` int(4) NOT NULL,
  `cwcyltempavg` int(4) NOT NULL,
  `engdatetime` varchar(16) NOT NULL,
  `reportnum` int(8) NOT NULL,
  `repstatus` varchar(8) NOT NULL,
  PRIMARY KEY (`engid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=167 ;

-- --------------------------------------------------------

--
-- Table structure for table `engcyloilconsump`
--

CREATE TABLE IF NOT EXISTS `engcyloilconsump` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `engdatetime` varchar(16) NOT NULL,
  `reportnum` int(8) NOT NULL,
  `typeofoper` varchar(16) NOT NULL,
  `bn` int(4) NOT NULL,
  `density` int(4) NOT NULL,
  `clotanktemp` int(4) NOT NULL,
  `actconsl` int(4) NOT NULL,
  `actconskg` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `engexhsystem`
--

CREATE TABLE IF NOT EXISTS `engexhsystem` (
  `repstatus` varchar(8) NOT NULL,
  `engid` int(11) NOT NULL AUTO_INCREMENT,
  `engnum` int(2) NOT NULL,
  `excyltemp1` int(4) NOT NULL,
  `excyltemp2` int(4) NOT NULL,
  `excyltemp3` int(4) NOT NULL,
  `excyltemp4` int(4) NOT NULL,
  `excyltemp5` int(4) NOT NULL,
  `excyltemp6` int(4) NOT NULL,
  `excyltemp7` int(4) NOT NULL,
  `excyltemp8` int(4) NOT NULL,
  `excyltemp9` int(4) NOT NULL,
  `excyltemp10` int(4) NOT NULL,
  `excyltemp11` int(4) NOT NULL,
  `excyltemp12` int(4) NOT NULL,
  `excyltemp13` int(4) NOT NULL,
  `excyltemp14` int(4) NOT NULL,
  `excyltemp15` int(4) NOT NULL,
  `excyltempavg` int(4) NOT NULL,
  `engdatetime` varchar(16) NOT NULL,
  `reportnum` int(8) NOT NULL,
  PRIMARY KEY (`engid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=167 ;

-- --------------------------------------------------------

--
-- Table structure for table `engfoilbunk`
--

CREATE TABLE IF NOT EXISTS `engfoilbunk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `engdatetime` varchar(16) NOT NULL,
  `reportnum` int(4) NOT NULL,
  `repstatus` varchar(8) NOT NULL,
  `startbunk` varchar(16) NOT NULL,
  `stopbunk` varchar(16) NOT NULL,
  `fueltype1` varchar(8) NOT NULL,
  `fordered1` int(8) NOT NULL,
  `received1` int(8) NOT NULL,
  `qtybdn1` int(8) NOT NULL,
  `lcvbdn1` int(8) NOT NULL,
  `sulphurbdn1` int(8) NOT NULL,
  `denbdn1` int(8) NOT NULL,
  `deviation1` int(8) NOT NULL,
  `lop1` varchar(4) NOT NULL,
  `fueltype2` varchar(8) NOT NULL,
  `fordered2` int(8) NOT NULL,
  `received2` int(8) NOT NULL,
  `qtybdn2` int(8) NOT NULL,
  `lcvbdn2` int(8) NOT NULL,
  `sulphurbdn2` int(8) NOT NULL,
  `denbdn2` int(8) NOT NULL,
  `deviation2` int(8) NOT NULL,
  `lop2` varchar(4) NOT NULL,
  `fueltype3` varchar(8) NOT NULL,
  `fordered3` int(8) NOT NULL,
  `received3` int(8) NOT NULL,
  `qtybdn3` int(8) NOT NULL,
  `lcvbdn3` int(8) NOT NULL,
  `sulphurbdn3` int(8) NOT NULL,
  `denbdn3` int(8) NOT NULL,
  `deviation3` int(8) NOT NULL,
  `lop3` varchar(4) NOT NULL,
  `fueltype4` varchar(8) NOT NULL,
  `fordered4` int(8) NOT NULL,
  `received4` int(8) NOT NULL,
  `qtybdn4` int(8) NOT NULL,
  `lcvbdn4` int(8) NOT NULL,
  `sulphurbdn4` int(8) NOT NULL,
  `denbdn4` int(8) NOT NULL,
  `deviation4` int(8) NOT NULL,
  `lop4` varchar(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=87 ;

-- --------------------------------------------------------

--
-- Table structure for table `engfoildebunk`
--

CREATE TABLE IF NOT EXISTS `engfoildebunk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `engdatetime` varchar(16) NOT NULL,
  `reportnum` int(4) NOT NULL,
  `repstatus` varchar(8) NOT NULL,
  `startdbunk` varchar(16) NOT NULL,
  `stopdbunk` varchar(16) NOT NULL,
  `fueltyped1` varchar(8) NOT NULL,
  `fdebunk1` int(8) NOT NULL,
  `fueltyped2` varchar(8) NOT NULL,
  `fdebunk2` int(8) NOT NULL,
  `fueltyped3` varchar(8) NOT NULL,
  `fdebunk3` int(8) NOT NULL,
  `fueltyped4` varchar(8) NOT NULL,
  `fdebunk4` int(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=87 ;

-- --------------------------------------------------------

--
-- Table structure for table `engfoilstock`
--

CREATE TABLE IF NOT EXISTS `engfoilstock` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `engdatetime` varchar(16) NOT NULL,
  `reportnum` int(4) NOT NULL,
  `repstatus` varchar(8) NOT NULL,
  `hshfoprev` int(8) NOT NULL,
  `hshfocur` int(8) NOT NULL,
  `hshfodev` int(8) NOT NULL,
  `ulsfoprev` int(8) NOT NULL,
  `ulsfocur` int(8) NOT NULL,
  `ulsfodev` int(8) NOT NULL,
  `hsmgoprev` int(8) NOT NULL,
  `hsmgocur` int(8) NOT NULL,
  `hsmgodev` int(8) NOT NULL,
  `hsmdoprev` int(8) NOT NULL,
  `hsmdocur` int(8) NOT NULL,
  `hsmdodev` int(8) NOT NULL,
  `lsmdoprev` int(8) NOT NULL,
  `lsmdocur` int(8) NOT NULL,
  `lsmdodev` int(8) NOT NULL,
  `vlsfoprev` int(8) NOT NULL,
  `vlsfocur` int(8) NOT NULL,
  `vlsfodev` int(8) NOT NULL,
  `lsmgoprev` int(8) NOT NULL,
  `lsmgocur` int(8) NOT NULL,
  `lsmgodev` int(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=86 ;

-- --------------------------------------------------------

--
-- Table structure for table `engloilbunk`
--

CREATE TABLE IF NOT EXISTS `engloilbunk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `engdatetime` varchar(16) NOT NULL,
  `reportnum` int(4) NOT NULL,
  `repstatus` varchar(8) NOT NULL,
  `lstartbunk` varchar(16) NOT NULL,
  `lstopbunk` varchar(16) NOT NULL,
  `lubetype1` varchar(32) NOT NULL,
  `lordered1` int(8) NOT NULL,
  `lreceived1` int(8) NOT NULL,
  `lqtybdn1` int(8) NOT NULL,
  `ldenbdn1` int(8) NOT NULL,
  `ldeviation1` int(8) NOT NULL,
  `llop1` varchar(4) NOT NULL,
  `lubetype2` varchar(32) NOT NULL,
  `lordered2` int(8) NOT NULL,
  `lreceived2` int(8) NOT NULL,
  `lqtybdn2` int(8) NOT NULL,
  `ldenbdn2` int(8) NOT NULL,
  `ldeviation2` int(8) NOT NULL,
  `llop2` varchar(4) NOT NULL,
  `lubetype3` varchar(32) NOT NULL,
  `lordered3` int(8) NOT NULL,
  `lreceived3` int(8) NOT NULL,
  `lqtybdn3` int(8) NOT NULL,
  `lcvbdn3` int(8) NOT NULL,
  `ldenbdn3` int(8) NOT NULL,
  `ldeviation3` int(8) NOT NULL,
  `llop3` varchar(4) NOT NULL,
  `lubetype4` varchar(32) NOT NULL,
  `lordered4` int(8) NOT NULL,
  `lreceived4` int(8) NOT NULL,
  `lqtybdn4` int(8) NOT NULL,
  `ldenbdn4` int(8) NOT NULL,
  `ldeviation4` int(8) NOT NULL,
  `llop4` varchar(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=87 ;

-- --------------------------------------------------------

--
-- Table structure for table `engloildebunk`
--

CREATE TABLE IF NOT EXISTS `engloildebunk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `engdatetime` varchar(16) NOT NULL,
  `reportnum` int(4) NOT NULL,
  `repstatus` varchar(8) NOT NULL,
  `lstartdbunk` varchar(16) NOT NULL,
  `lstopdbunk` varchar(16) NOT NULL,
  `lubetyped1` varchar(8) NOT NULL,
  `ldebunk1` int(8) NOT NULL,
  `lubetyped2` varchar(8) NOT NULL,
  `ldebunk2` int(8) NOT NULL,
  `lubetyped3` varchar(8) NOT NULL,
  `ldebunk3` int(8) NOT NULL,
  `lubetyped4` varchar(8) NOT NULL,
  `ldebunk4` int(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=87 ;

-- --------------------------------------------------------

--
-- Table structure for table `engloilstock`
--

CREATE TABLE IF NOT EXISTS `engloilstock` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `engdatetime` varchar(16) NOT NULL,
  `reportnum` int(4) NOT NULL,
  `repstatus` varchar(8) NOT NULL,
  `melubeest` int(8) NOT NULL,
  `melubeact` int(8) NOT NULL,
  `melubedev` int(8) NOT NULL,
  `lowcylest` int(8) NOT NULL,
  `lowcylact` int(8) NOT NULL,
  `lowcyldev` int(8) NOT NULL,
  `highcylest` int(8) NOT NULL,
  `highcylact` int(8) NOT NULL,
  `highcyldev` int(8) NOT NULL,
  `addest` int(8) NOT NULL,
  `addact` int(8) NOT NULL,
  `adddev` int(8) NOT NULL,
  `aelubeest` int(8) NOT NULL,
  `aelubeact` int(8) NOT NULL,
  `aelubedev` int(8) NOT NULL,
  `steergearest` int(8) NOT NULL,
  `steergearact` int(8) NOT NULL,
  `steergeardev` int(8) NOT NULL,
  `sterntubeest` int(8) NOT NULL,
  `sterntubeact` int(8) NOT NULL,
  `sterntubedev` int(8) NOT NULL,
  `hydrest` int(8) NOT NULL,
  `hydract` int(8) NOT NULL,
  `hydrdev` int(8) NOT NULL,
  `otheroilest` int(8) NOT NULL,
  `otheroilact` int(8) NOT NULL,
  `otheroildev` int(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=86 ;

-- --------------------------------------------------------

--
-- Table structure for table `engobservation`
--

CREATE TABLE IF NOT EXISTS `engobservation` (
  `engid` int(11) NOT NULL AUTO_INCREMENT,
  `engnum` varchar(8) NOT NULL,
  `revcounter` int(8) NOT NULL,
  `engrpm` int(8) NOT NULL,
  `torque` int(8) NOT NULL,
  `engpower` int(8) NOT NULL,
  `fuellevel` int(8) NOT NULL,
  `loadindex` int(8) NOT NULL,
  `govindex` int(8) NOT NULL,
  `eow` varchar(16) NOT NULL,
  `engdatetime` varchar(16) NOT NULL,
  `reportnum` int(8) NOT NULL,
  `repstatus` varchar(8) NOT NULL,
  PRIMARY KEY (`engid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=177 ;

-- --------------------------------------------------------

--
-- Table structure for table `engoilloses`
--

CREATE TABLE IF NOT EXISTS `engoilloses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `engdatetime` varchar(16) NOT NULL,
  `reportnum` int(4) NOT NULL,
  `oiltype` varchar(16) NOT NULL,
  `sludge` int(4) NOT NULL,
  `bilge` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `engoilsystems`
--

CREATE TABLE IF NOT EXISTS `engoilsystems` (
  `engosid` int(11) NOT NULL AUTO_INCREMENT,
  `engnum` int(2) NOT NULL,
  `lotemp` int(4) NOT NULL,
  `lopress` int(4) NOT NULL,
  `lochtemp` int(4) NOT NULL,
  `lochpress` int(4) NOT NULL,
  `losumplevel` int(4) NOT NULL,
  `fointemp` int(4) NOT NULL,
  `foinpress` int(4) NOT NULL,
  `fodp` int(4) NOT NULL,
  `fovisc` int(4) NOT NULL,
  `cwinpress` int(4) NOT NULL,
  `cwintemp` int(4) NOT NULL,
  `pcinpress` int(4) NOT NULL,
  `pcintemp` int(4) NOT NULL,
  `oildatetime` varchar(16) NOT NULL,
  `reportnum` int(8) NOT NULL,
  `repstatus` varchar(8) NOT NULL,
  PRIMARY KEY (`engosid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=167 ;

-- --------------------------------------------------------

--
-- Table structure for table `engperfcyl`
--

CREATE TABLE IF NOT EXISTS `engperfcyl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `engdatetime` varchar(16) NOT NULL,
  `reportnum` int(4) NOT NULL,
  `mip` int(11) NOT NULL,
  `compr` int(11) NOT NULL,
  `pmax` int(11) NOT NULL,
  `exhtemp` int(11) NOT NULL,
  `coolwatertemp` int(11) NOT NULL,
  `fuelpumpind` int(11) NOT NULL,
  `cylinders` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `engperfparm`
--

CREATE TABLE IF NOT EXISTS `engperfparm` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `engdatetime` varchar(16) NOT NULL,
  `reportnum` int(4) NOT NULL,
  `startperf` varchar(16) NOT NULL,
  `stopperf` varchar(16) NOT NULL,
  `ambpress` int(4) NOT NULL,
  `fuelpress` int(4) NOT NULL,
  `shaftpower` int(4) NOT NULL,
  `indpower` int(4) NOT NULL,
  `rpm` int(4) NOT NULL,
  `fueltemp` int(4) NOT NULL,
  `fueltype` varchar(8) NOT NULL,
  `lcv` int(4) NOT NULL,
  `sulphur` int(4) NOT NULL,
  `density` int(4) NOT NULL,
  `consumed` int(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `engperfscav`
--

CREATE TABLE IF NOT EXISTS `engperfscav` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `engdatetime` varchar(16) NOT NULL,
  `reportnum` int(4) NOT NULL,
  `airincool` int(4) NOT NULL,
  `airoutcool` int(4) NOT NULL,
  `coolwaterin` int(4) NOT NULL,
  `coolwaterout` int(4) NOT NULL,
  `scavcooldp` int(4) NOT NULL,
  `scavrecpress` int(4) NOT NULL,
  `scavrectemp` int(4) NOT NULL,
  `scav` varchar(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `engperftbcharge`
--

CREATE TABLE IF NOT EXISTS `engperftbcharge` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `engdatetime` varchar(16) NOT NULL,
  `reportnum` int(4) NOT NULL,
  `exhrecpress` int(4) NOT NULL,
  `exhrectemp` int(4) NOT NULL,
  `exhintemp` int(4) NOT NULL,
  `exhouttemp` int(4) NOT NULL,
  `inletair` int(4) NOT NULL,
  `rpm` int(4) NOT NULL,
  `airfilterdp` int(4) NOT NULL,
  `tbcharge` varchar(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `engpistoncool`
--

CREATE TABLE IF NOT EXISTS `engpistoncool` (
  `engid` int(11) NOT NULL AUTO_INCREMENT,
  `engnum` int(2) NOT NULL,
  `pcinpress` int(4) NOT NULL,
  `pcintemp` int(4) NOT NULL,
  `pccyltemp1` int(4) NOT NULL,
  `pccyltemp2` int(4) NOT NULL,
  `pccyltemp3` int(4) NOT NULL,
  `pccyltemp4` int(4) NOT NULL,
  `pccyltemp5` int(4) NOT NULL,
  `pccyltemp6` int(4) NOT NULL,
  `pccyltemp7` int(4) NOT NULL,
  `pccyltemp8` int(4) NOT NULL,
  `pccyltemp9` int(4) NOT NULL,
  `pccyltemp10` int(4) NOT NULL,
  `pccyltemp11` int(4) NOT NULL,
  `pccyltemp12` int(4) NOT NULL,
  `pccyltemp13` int(4) NOT NULL,
  `pccyltemp14` int(4) NOT NULL,
  `pccyltemp15` int(4) NOT NULL,
  `pccyltempavg` int(4) NOT NULL,
  `engdatetime` varchar(16) NOT NULL,
  `reportnum` int(8) NOT NULL,
  `repstatus` varchar(8) NOT NULL,
  PRIMARY KEY (`engid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=167 ;

-- --------------------------------------------------------

--
-- Table structure for table `engrunhrsmain`
--

CREATE TABLE IF NOT EXISTS `engrunhrsmain` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `repdate` varchar(16) NOT NULL,
  `reportnum` int(4) NOT NULL,
  `repstatus` varchar(8) NOT NULL,
  `maineng1` int(4) NOT NULL,
  `maineng2` int(4) NOT NULL,
  `auxeng1` int(4) NOT NULL,
  `auxeng2` int(4) NOT NULL,
  `auxeng3` int(4) NOT NULL,
  `auxeng4` int(4) NOT NULL,
  `auxeng5` int(4) NOT NULL,
  `sg1` int(4) NOT NULL,
  `sg2` int(4) NOT NULL,
  `tg` int(4) NOT NULL,
  `emg` int(8) NOT NULL,
  `stg1` int(8) NOT NULL,
  `stg2` int(8) NOT NULL,
  `stg3` int(8) NOT NULL,
  `stg4` int(8) NOT NULL,
  `fwg` int(8) NOT NULL,
  `boiler1` int(8) NOT NULL,
  `boiler2` int(8) NOT NULL,
  `comp1` int(8) NOT NULL,
  `comp2` int(8) NOT NULL,
  `comp3` int(8) NOT NULL,
  `fopurifier1` int(8) NOT NULL,
  `fopurifier2` int(8) NOT NULL,
  `fopurifier3` int(8) NOT NULL,
  `fopurifier4` int(8) NOT NULL,
  `lopurifier1` int(8) NOT NULL,
  `lopurifier2` int(8) NOT NULL,
  `lopurifier3` int(8) NOT NULL,
  `lopurifier4` int(8) NOT NULL,
  `lopurifier5` int(8) NOT NULL,
  `lopurifier6` int(8) NOT NULL,
  `crane1` int(8) NOT NULL,
  `crane2` int(8) NOT NULL,
  `crane3` int(8) NOT NULL,
  `crane4` int(8) NOT NULL,
  `crane5` int(8) NOT NULL,
  `winch1` int(8) NOT NULL,
  `winch2` int(8) NOT NULL,
  `winch3` int(8) NOT NULL,
  `winch4` int(8) NOT NULL,
  `winch5` int(8) NOT NULL,
  `readings` varchar(16) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=356 ;

-- --------------------------------------------------------

--
-- Table structure for table `engrunhrspower`
--

CREATE TABLE IF NOT EXISTS `engrunhrspower` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `engdatetime` varchar(16) NOT NULL,
  `reportnum` int(8) NOT NULL,
  `eng1` int(8) NOT NULL,
  `eng2` int(8) NOT NULL,
  `auxeng1` int(8) NOT NULL,
  `auxeng2` int(8) NOT NULL,
  `auxeng3` int(8) NOT NULL,
  `auxeng4` int(8) NOT NULL,
  `auxeng5` int(8) NOT NULL,
  `sg1` int(8) NOT NULL,
  `sg2` int(8) NOT NULL,
  `tg` int(8) NOT NULL,
  `reeder` int(8) NOT NULL,
  `readings` varchar(16) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `engrunhrspump`
--

CREATE TABLE IF NOT EXISTS `engrunhrspump` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `repdate` varchar(16) NOT NULL,
  `reportnum` int(8) NOT NULL,
  `repstatus` varchar(8) NOT NULL,
  `swpump1` int(8) NOT NULL,
  `swpump2` int(8) NOT NULL,
  `melopump1` int(8) NOT NULL,
  `melopump2` int(8) NOT NULL,
  `htpump1` int(8) NOT NULL,
  `htpump2` int(8) NOT NULL,
  `ltpump1` int(8) NOT NULL,
  `ltpump2` int(8) NOT NULL,
  `fofeedpump1` int(8) NOT NULL,
  `fofeedpump2` int(8) NOT NULL,
  `foboospump1` int(8) NOT NULL,
  `foboospump2` int(8) NOT NULL,
  `boilerfedpump1` int(8) NOT NULL,
  `boilerfedpump2` int(8) NOT NULL,
  `firepump1` int(8) NOT NULL,
  `firepump2` int(8) NOT NULL,
  `emgfirepump1` int(8) NOT NULL,
  `emgfirepump2` int(8) NOT NULL,
  `hydrophore1` int(8) NOT NULL,
  `hydrophore2` int(11) NOT NULL,
  `readings` varchar(16) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=356 ;

-- --------------------------------------------------------

--
-- Table structure for table `engscav`
--

CREATE TABLE IF NOT EXISTS `engscav` (
  `engid` int(11) NOT NULL AUTO_INCREMENT,
  `engnum` int(2) NOT NULL,
  `airin1` int(4) NOT NULL,
  `airout1` int(4) NOT NULL,
  `coolwaterin1` int(4) NOT NULL,
  `coolwaterout1` int(4) NOT NULL,
  `scavcooldp1` int(4) NOT NULL,
  `airin2` int(4) NOT NULL,
  `airout2` int(4) NOT NULL,
  `coolwaterin2` int(4) NOT NULL,
  `coolwaterout2` int(4) NOT NULL,
  `scavcooldp2` int(4) NOT NULL,
  `airin3` int(4) NOT NULL,
  `airout3` int(4) NOT NULL,
  `coolwaterin3` int(4) NOT NULL,
  `coolwaterout3` int(4) NOT NULL,
  `scavcooldp3` int(4) NOT NULL,
  `airin4` int(4) NOT NULL,
  `airout4` int(4) NOT NULL,
  `coolwaterin4` int(4) NOT NULL,
  `coolwaterout4` int(4) NOT NULL,
  `scavcooldp4` int(4) NOT NULL,
  `scavrecpress` int(4) NOT NULL,
  `scavrectemp` int(4) NOT NULL,
  `engdatetime` varchar(16) NOT NULL,
  `reportnum` int(8) NOT NULL,
  `repstatus` varchar(8) NOT NULL,
  PRIMARY KEY (`engid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=167 ;

-- --------------------------------------------------------

--
-- Table structure for table `engscav1`
--

CREATE TABLE IF NOT EXISTS `engscav1` (
  `engid` int(11) NOT NULL AUTO_INCREMENT,
  `engnum` int(2) NOT NULL,
  `airin` int(4) NOT NULL,
  `airout` int(4) NOT NULL,
  `coolwaterin` int(4) NOT NULL,
  `coolwaterout` int(4) NOT NULL,
  `scavcooldp` int(4) NOT NULL,
  `scavrecpress` int(4) NOT NULL,
  `scavrectemp` int(4) NOT NULL,
  `engdatetime` varchar(16) NOT NULL,
  `reportnum` int(8) NOT NULL,
  `repstatus` varchar(8) NOT NULL,
  PRIMARY KEY (`engid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=162 ;

-- --------------------------------------------------------

--
-- Table structure for table `engscav2`
--

CREATE TABLE IF NOT EXISTS `engscav2` (
  `engid` int(11) NOT NULL AUTO_INCREMENT,
  `engnum` int(2) NOT NULL,
  `airin` int(4) NOT NULL,
  `airout` int(4) NOT NULL,
  `coolwaterin` int(4) NOT NULL,
  `coolwaterout` int(4) NOT NULL,
  `scavcooldp` int(4) NOT NULL,
  `scavrecpress` int(4) NOT NULL,
  `scavrectemp` int(4) NOT NULL,
  `engdatetime` varchar(16) NOT NULL,
  `reportnum` int(8) NOT NULL,
  `repstatus` varchar(8) NOT NULL,
  PRIMARY KEY (`engid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=167 ;

-- --------------------------------------------------------

--
-- Table structure for table `engscav3`
--

CREATE TABLE IF NOT EXISTS `engscav3` (
  `engid` int(11) NOT NULL AUTO_INCREMENT,
  `engnum` int(2) NOT NULL,
  `airin` int(4) NOT NULL,
  `airout` int(4) NOT NULL,
  `coolwaterin` int(4) NOT NULL,
  `coolwaterout` int(4) NOT NULL,
  `scavcooldp` int(4) NOT NULL,
  `scavrecpress` int(4) NOT NULL,
  `scavrectemp` int(4) NOT NULL,
  `engdatetime` varchar(16) NOT NULL,
  `reportnum` int(8) NOT NULL,
  `repstatus` varchar(8) NOT NULL,
  PRIMARY KEY (`engid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=168 ;

-- --------------------------------------------------------

--
-- Table structure for table `engscav4`
--

CREATE TABLE IF NOT EXISTS `engscav4` (
  `engid` int(11) NOT NULL AUTO_INCREMENT,
  `engnum` int(2) NOT NULL,
  `airin` int(4) NOT NULL,
  `airout` int(4) NOT NULL,
  `coolwaterin` int(4) NOT NULL,
  `coolwaterout` int(4) NOT NULL,
  `scavcooldp` int(4) NOT NULL,
  `scavrecpress` int(4) NOT NULL,
  `scavrectemp` int(4) NOT NULL,
  `engdatetime` varchar(16) NOT NULL,
  `reportnum` int(8) NOT NULL,
  `repstatus` varchar(8) NOT NULL,
  PRIMARY KEY (`engid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=166 ;

-- --------------------------------------------------------

--
-- Table structure for table `engsystems`
--

CREATE TABLE IF NOT EXISTS `engsystems` (
  `engsysid` int(11) NOT NULL AUTO_INCREMENT,
  `engnum` int(2) NOT NULL,
  `startairpress` int(8) NOT NULL,
  `conairpress` int(8) NOT NULL,
  `spairpress` int(8) NOT NULL,
  `stloinpress` int(8) NOT NULL,
  `stanklevel` int(8) NOT NULL,
  `stgravityh` int(8) NOT NULL,
  `stgravityl` int(8) NOT NULL,
  `stbr1temp` int(4) NOT NULL,
  `stbr2temp` int(4) NOT NULL,
  `engdatetime` varchar(16) NOT NULL,
  `reportnum` int(8) NOT NULL,
  `repstatus` varchar(8) NOT NULL,
  PRIMARY KEY (`engsysid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=167 ;

-- --------------------------------------------------------

--
-- Table structure for table `engtankbilge`
--

CREATE TABLE IF NOT EXISTS `engtankbilge` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lastdate` varchar(16) NOT NULL,
  `reportnum` int(8) NOT NULL,
  `repstatus` varchar(8) NOT NULL,
  `lsbtank1` int(8) NOT NULL,
  `dabtank1` int(8) NOT NULL,
  `csbtank1` int(8) NOT NULL,
  `lsbtank2` int(8) NOT NULL,
  `dabtank2` int(8) NOT NULL,
  `csbtank2` int(8) NOT NULL,
  `lsbtank3` int(8) NOT NULL,
  `dabtank3` int(8) NOT NULL,
  `csbtank3` int(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=85 ;

-- --------------------------------------------------------

--
-- Table structure for table `engtanksludge`
--

CREATE TABLE IF NOT EXISTS `engtanksludge` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lastdate` varchar(16) NOT NULL,
  `reportnum` int(8) NOT NULL,
  `repstatus` varchar(8) NOT NULL,
  `lsstank1` int(8) NOT NULL,
  `dastank1` int(8) NOT NULL,
  `csstank1` int(8) NOT NULL,
  `lsstank2` int(8) NOT NULL,
  `dastank2` int(8) NOT NULL,
  `csstank2` int(8) NOT NULL,
  `lsstank3` int(8) NOT NULL,
  `dastank3` int(8) NOT NULL,
  `csstank3` int(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=85 ;

-- --------------------------------------------------------

--
-- Table structure for table `engtankstock`
--

CREATE TABLE IF NOT EXISTS `engtankstock` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `engdatetime` varchar(16) NOT NULL,
  `lastdate` varchar(16) NOT NULL,
  `reportnum` int(4) NOT NULL,
  `repstatus` varchar(8) NOT NULL,
  `tankname` varchar(16) NOT NULL,
  `bunk` varchar(4) NOT NULL,
  `fgrade` varchar(8) NOT NULL,
  `lcv` int(4) NOT NULL,
  `sulphur` int(4) NOT NULL,
  `density` int(4) NOT NULL,
  `temp` int(4) NOT NULL,
  `prestock` int(8) NOT NULL,
  `curstock` int(8) NOT NULL,
  `deviation` int(4) NOT NULL,
  `bunkerqty` int(8) NOT NULL,
  `differ` int(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1849 ;

-- --------------------------------------------------------

--
-- Table structure for table `engtc`
--

CREATE TABLE IF NOT EXISTS `engtc` (
  `engid` int(11) NOT NULL AUTO_INCREMENT,
  `engnum` int(2) NOT NULL,
  `exrecpress` int(4) NOT NULL,
  `exrectemp` int(4) NOT NULL,
  `inletair` int(4) NOT NULL,
  `extemptcin1` int(4) NOT NULL,
  `extemptcout1` int(4) NOT NULL,
  `tcrpm1` int(4) NOT NULL,
  `airfilterdp1` int(4) NOT NULL,
  `extemptcin2` int(4) NOT NULL,
  `extemptcout2` int(4) NOT NULL,
  `tcrpm2` int(4) NOT NULL,
  `airfilterdp2` int(4) NOT NULL,
  `extemptcin3` int(4) NOT NULL,
  `extemptcout3` int(4) NOT NULL,
  `tcrpm3` int(4) NOT NULL,
  `airfilterdp3` int(4) NOT NULL,
  `extemptcin4` int(4) NOT NULL,
  `extemptcout4` int(4) NOT NULL,
  `tcrpm4` int(4) NOT NULL,
  `airfilterdp4` int(4) NOT NULL,
  `engdatetime` varchar(16) NOT NULL,
  `reportnum` int(8) NOT NULL,
  `repstatus` varchar(8) NOT NULL,
  PRIMARY KEY (`engid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=167 ;

-- --------------------------------------------------------

--
-- Table structure for table `engtc1`
--

CREATE TABLE IF NOT EXISTS `engtc1` (
  `engid` int(11) NOT NULL AUTO_INCREMENT,
  `engnum` int(2) NOT NULL,
  `exrecpress` int(4) NOT NULL,
  `exrectemp` int(4) NOT NULL,
  `extemptcin` int(4) NOT NULL,
  `extemptcout` int(4) NOT NULL,
  `inletair` int(4) NOT NULL,
  `tcrpm` int(4) NOT NULL,
  `airfilterdp` int(4) NOT NULL,
  `engdatetime` varchar(16) NOT NULL,
  `reportnum` int(8) NOT NULL,
  `repstatus` varchar(8) NOT NULL,
  PRIMARY KEY (`engid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=162 ;

-- --------------------------------------------------------

--
-- Table structure for table `engtc2`
--

CREATE TABLE IF NOT EXISTS `engtc2` (
  `engid` int(11) NOT NULL AUTO_INCREMENT,
  `engnum` int(2) NOT NULL,
  `exrecpress` int(4) NOT NULL,
  `exrectemp` int(4) NOT NULL,
  `extemptcin` int(4) NOT NULL,
  `extemptcout` int(4) NOT NULL,
  `inletair` int(4) NOT NULL,
  `tcrpm` int(4) NOT NULL,
  `airfilterdp` int(4) NOT NULL,
  `engdatetime` varchar(16) NOT NULL,
  `reportnum` int(8) NOT NULL,
  `repstatus` varchar(8) NOT NULL,
  PRIMARY KEY (`engid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=167 ;

-- --------------------------------------------------------

--
-- Table structure for table `engtc3`
--

CREATE TABLE IF NOT EXISTS `engtc3` (
  `engid` int(11) NOT NULL AUTO_INCREMENT,
  `engnum` int(2) NOT NULL,
  `exrecpress` int(4) NOT NULL,
  `exrectemp` int(4) NOT NULL,
  `extemptcin` int(4) NOT NULL,
  `extemptcout` int(4) NOT NULL,
  `inletair` int(4) NOT NULL,
  `tcrpm` int(4) NOT NULL,
  `airfilterdp` int(4) NOT NULL,
  `engdatetime` varchar(16) NOT NULL,
  `reportnum` int(8) NOT NULL,
  `repstatus` varchar(8) NOT NULL,
  PRIMARY KEY (`engid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=167 ;

-- --------------------------------------------------------

--
-- Table structure for table `engtc4`
--

CREATE TABLE IF NOT EXISTS `engtc4` (
  `engid` int(11) NOT NULL AUTO_INCREMENT,
  `engnum` int(2) NOT NULL,
  `exrecpress` int(4) NOT NULL,
  `exrectemp` int(4) NOT NULL,
  `extemptcin` int(4) NOT NULL,
  `extemptcout` int(4) NOT NULL,
  `inletair` int(4) NOT NULL,
  `tcrpm` int(4) NOT NULL,
  `airfilterdp` int(4) NOT NULL,
  `engdatetime` varchar(16) NOT NULL,
  `reportnum` int(8) NOT NULL,
  `repstatus` varchar(8) NOT NULL,
  PRIMARY KEY (`engid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=167 ;

-- --------------------------------------------------------

--
-- Table structure for table `engworkdone`
--

CREATE TABLE IF NOT EXISTS `engworkdone` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reportnum` int(8) NOT NULL,
  `repstatus` varchar(8) NOT NULL,
  `voynum` varchar(8) NOT NULL,
  `ddatetime` varchar(16) NOT NULL,
  `testing` varchar(32) NOT NULL,
  `freq` varchar(32) NOT NULL,
  `testby` varchar(32) NOT NULL,
  `appby` varchar(32) NOT NULL,
  `comments` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL,
  `usertype` varchar(25) NOT NULL,
  `entry` enum('yes','no') NOT NULL,
  `edit` enum('yes','no') NOT NULL,
  `report` enum('yes','no') NOT NULL,
  `status` enum('open','closed') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

-- --------------------------------------------------------

--
-- Table structure for table `operparam`
--

CREATE TABLE IF NOT EXISTS `operparam` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reportnum` int(8) NOT NULL,
  `voynum` int(8) NOT NULL,
  `repstatus` varchar(8) NOT NULL,
  `opertype` varchar(16) NOT NULL,
  `starttimeloc` varchar(16) NOT NULL,
  `closetimeloc` varchar(16) NOT NULL,
  `startzone` varchar(8) NOT NULL,
  `closezone` varchar(8) NOT NULL,
  `starttimeutc` varchar(16) NOT NULL,
  `closetimeutc` varchar(16) NOT NULL,
  `lastrep` int(8) NOT NULL,
  `cargowt` int(8) NOT NULL,
  `ballwater` int(8) NOT NULL,
  `loadconst` varchar(4) NOT NULL,
  `draftaft` varchar(8) NOT NULL,
  `draftfwd` varchar(8) NOT NULL,
  `trim` int(8) NOT NULL,
  `metacentricht` int(8) NOT NULL,
  `deadwtres` int(8) NOT NULL,
  `maxrollang` int(4) NOT NULL,
  `sailingplan` varchar(32) NOT NULL,
  `portdest` varchar(32) NOT NULL,
  `portdestcode` varchar(16) NOT NULL,
  `desttimezone` varchar(8) NOT NULL,
  `etastationlt` varchar(16) NOT NULL,
  `etaportlt` varchar(16) NOT NULL,
  `disteosp` varchar(8) NOT NULL,
  `timeeosp` varchar(8) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `reportnum` (`reportnum`),
  UNIQUE KEY `reportnum_2` (`reportnum`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=203 ;

-- --------------------------------------------------------

--
-- Table structure for table `operposition`
--

CREATE TABLE IF NOT EXISTS `operposition` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reportnum` int(8) NOT NULL,
  `voynum` varchar(8) NOT NULL,
  `repstatus` varchar(8) NOT NULL,
  `ltdeg` int(4) NOT NULL,
  `ltmin` int(2) NOT NULL,
  `ltsec` int(2) NOT NULL,
  `ltdir` varchar(2) NOT NULL,
  `lgdeg` int(4) NOT NULL,
  `lgmin` int(4) NOT NULL,
  `lgsec` int(4) NOT NULL,
  `lgdir` varchar(4) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `reportnum` (`reportnum`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=202 ;

-- --------------------------------------------------------

--
-- Table structure for table `reportnumb`
--

CREATE TABLE IF NOT EXISTS `reportnumb` (
  `reportnum` int(11) NOT NULL AUTO_INCREMENT,
  `startdatetime` varchar(16) NOT NULL,
  `closedatetime` varchar(16) NOT NULL,
  `createdby` varchar(32) NOT NULL,
  `closedby` varchar(32) NOT NULL,
  `repstatus` varchar(18) NOT NULL,
  `reptype` varchar(16) NOT NULL,
  `voynum` varchar(8) NOT NULL,
  PRIMARY KEY (`reportnum`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=205 ;

-- --------------------------------------------------------

--
-- Table structure for table `tempengaux`
--

CREATE TABLE IF NOT EXISTS `tempengaux` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reportnum` int(8) NOT NULL,
  `items` varchar(36) NOT NULL,
  `auxeng1` int(8) NOT NULL,
  `auxeng2` int(8) NOT NULL,
  `auxeng3` int(8) NOT NULL,
  `auxeng4` int(8) NOT NULL,
  `auxeng5` int(8) NOT NULL,
  `observno` int(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1806 ;

-- --------------------------------------------------------

--
-- Table structure for table `tempengauxp`
--

CREATE TABLE IF NOT EXISTS `tempengauxp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reportnum` int(8) NOT NULL,
  `items` varchar(36) NOT NULL,
  `auxeng1` int(8) NOT NULL,
  `auxeng2` int(8) NOT NULL,
  `auxeng3` int(8) NOT NULL,
  `auxeng4` int(8) NOT NULL,
  `auxeng5` int(8) NOT NULL,
  `sgen1` int(8) NOT NULL,
  `sgen2` int(8) NOT NULL,
  `tgen` int(8) NOT NULL,
  `reefer` int(8) NOT NULL,
  `observno` int(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=753 ;

-- --------------------------------------------------------

--
-- Table structure for table `tempengrunhrs`
--

CREATE TABLE IF NOT EXISTS `tempengrunhrs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reportnum` int(8) NOT NULL,
  `repstatus` varchar(8) NOT NULL,
  `repdate` varchar(16) NOT NULL,
  `items` varchar(16) NOT NULL,
  `prevreading` int(8) NOT NULL,
  `curreading` int(8) NOT NULL,
  `runhrs` int(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tempengtc`
--

CREATE TABLE IF NOT EXISTS `tempengtc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reportnum` int(8) NOT NULL,
  `items` varchar(36) NOT NULL,
  `auxeng1` int(8) NOT NULL,
  `auxeng2` int(8) NOT NULL,
  `auxeng3` int(8) NOT NULL,
  `auxeng4` int(8) NOT NULL,
  `observno` int(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
