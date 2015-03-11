-- phpMyAdmin SQL Dump
-- version 4.2.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Nov 16, 2014 at 12:53 PM
-- Server version: 5.5.38
-- PHP Version: 5.5.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `garden`
--

-- --------------------------------------------------------

--
-- Table structure for table `think_user`
--

CREATE TABLE `think_user` (
`id` int(10) unsigned NOT NULL,
  `username` varchar(20) NOT NULL DEFAULT '''''',
  `password` varchar(32) NOT NULL DEFAULT '''''',
  `logintime` int(10) unsigned NOT NULL DEFAULT '0',
  `loginip` varchar(32) NOT NULL DEFAULT ''''''
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `think_user`
--

INSERT INTO `think_user` (`id`, `username`, `password`, `logintime`, `loginip`) VALUES
(9, 'hlzhang', 'mxhx931211', 1413956240, '0.0.0.0'),
(10, 'keerecles', 'keenewbee', 1412145758, '0.0.0.0'),
(11, 'zhounanshu', '123456', 1412157007, '0.0.0.0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `think_user`
--
ALTER TABLE `think_user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `think_user`
--
ALTER TABLE `think_user`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;