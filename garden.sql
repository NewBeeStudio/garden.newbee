-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2015-02-22 03:47:14
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `garden`
--

-- --------------------------------------------------------

--
-- 表的结构 `think_chat`
--

CREATE TABLE IF NOT EXISTS `think_chat` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `time` int(10) unsigned NOT NULL,
  `username` varchar(127) CHARACTER SET gbk NOT NULL,
  `title` varchar(127) CHARACTER SET gbk NOT NULL,
  `content` varchar(255) CHARACTER SET gbk NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `think_chat`
--

INSERT INTO `think_chat` (`id`, `time`, `username`, `title`, `content`) VALUES
(1, 1422843786, 'Hunter_Lin', 'test', 'test'),
(2, 1422845479, '1', 'my turn', '我爱你啊啊啊'),
(3, 1423540928, 'Hunter_Lin', 'aha', 'little happiness');

-- --------------------------------------------------------

--
-- 表的结构 `think_chat_reply`
--

CREATE TABLE IF NOT EXISTS `think_chat_reply` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `chat_id` int(10) unsigned NOT NULL,
  `time` int(10) unsigned NOT NULL,
  `from_user` varchar(127) CHARACTER SET gbk NOT NULL,
  `to_user` varchar(127) CHARACTER SET gbk NOT NULL,
  `content` varchar(255) CHARACTER SET gbk NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- 转存表中的数据 `think_chat_reply`
--

INSERT INTO `think_chat_reply` (`id`, `chat_id`, `time`, `from_user`, `to_user`, `content`) VALUES
(2, 1, 1422845024, 'Hunter_Lin', 'Hunter_Lin', 'test'),
(5, 1, 1422845425, 'Hunter_Lin', 'Hunter_Lin', 'another test'),
(6, 1, 1422845452, '1', 'Hunter_Lin', '1'),
(7, 2, 1422845486, '1', '1', '我也爱你啊啊啊'),
(8, 1, 1422845831, '1', 'Hunter_Lin', '阿斯顿'),
(10, 3, 1423540938, 'Hunter_Lin', 'Hunter_Lin', 'I think so!'),
(11, 3, 1423540951, 'Hunter_Lin', 'Hunter_Lin', 'me too too');

-- --------------------------------------------------------

--
-- 表的结构 `think_chat_reply2`
--

CREATE TABLE IF NOT EXISTS `think_chat_reply2` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `reply_id` int(10) unsigned NOT NULL,
  `from_user` varchar(127) CHARACTER SET gbk NOT NULL,
  `to_user` varchar(127) CHARACTER SET gbk NOT NULL,
  `time` int(10) unsigned NOT NULL,
  `content` varchar(255) CHARACTER SET gbk NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- 转存表中的数据 `think_chat_reply2`
--

INSERT INTO `think_chat_reply2` (`id`, `reply_id`, `from_user`, `to_user`, `time`, `content`) VALUES
(21, 5, 'Hunter_Lin', 'Hunter_Lin', 1423369610, 'for another test'),
(22, 7, 'Hunter_Lin', '1', 1423369626, 'for woyeainiaaa'),
(23, 5, 'Hunter_Lin', 'Hunter_Lin', 1423375094, 'again!'),
(24, 8, 'Hunter_Lin', '1', 1423375109, 'Finally okay now!'),
(25, 2, 'Hunter_Lin', 'Hunter_Lin', 1423538706, 'I''m here'),
(26, 10, 'Hunter_Lin', 'Hunter_Lin', 1423540944, 'me too!');

-- --------------------------------------------------------

--
-- 表的结构 `think_command`
--

CREATE TABLE IF NOT EXISTS `think_command` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(127) CHARACTER SET gbk NOT NULL,
  `content` text CHARACTER SET gbk NOT NULL,
  `time` int(10) unsigned NOT NULL,
  `title` varchar(255) CHARACTER SET gbk NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- 转存表中的数据 `think_command`
--

INSERT INTO `think_command` (`id`, `username`, `content`, `time`, `title`) VALUES
(29, '1', 'test', 2014, '12'),
(30, '1', 'test', 1416147443, '231'),
(31, '1', 'Tomorrow is another day!', 1416228949, 'Hi'),
(32, '1', 'Long time no see.!', 1416725536, 'Hi,There'),
(34, '1', '\\n喵&lt;/em&gt;', 1416725884, 'Untitled'),
(35, '1', 'test\r\n   TEST\r\n      test', 1416726207, 'aha'),
(36, '1', '修改 HTML 元素\r\n修改 HTML DOM 意味着许多不同的方面：\r\n改变 HTML 内容\r\n改变 CSS 样式\r\n改变 HTML 属性\r\n创建新的 HTML 元素\r\n删除已有的 HTML 元素\r\n改变事件（处理程序）\r\n在接下来的章节，我们会深入学习修改 HTML DOM 的常用方法。', 1416730228, 'Be active!'),
(37, '1', 'Just think for yourself!\r\n Everything will be Okay.\r\n  ^_^', 1416747001, 'Be happy'),
(38, '1', 'I walk this lonely road, the only way that I have ever known.', 1417440783, 'Broad Way'),
(39, '1', '&lt;!-- Modal --&gt;\r\n&lt;div class=&quot;modal fade&quot; id=&quot;myModal&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot; aria-labelledby=&quot;myModalLabel&quot; aria-hidden=&quot;true&quot;&gt;\r\n  &lt;div class=&quot;modal-dialog&quot;&gt;\r\n    &lt;div class=&quot;modal-content&quot;&gt;\r\n      &lt;div class=&quot;modal-header&quot;&gt;\r\n        &lt;button type=&quot;button&quot; class=&quot;close&quot; data-dismiss=&quot;modal&quot;&gt;&lt;span aria-hidden=&quot;true&quot;&gt;&amp;times;&lt;/span&gt;&lt;span class=&quot;sr-only&quot;&gt;Close&lt;/span&gt;&lt;/button&gt;\r\n        &lt;h4 class=&quot;modal-title&quot; id=&quot;myModalLabel&quot;&gt;Modal title&lt;/h4&gt;\r\n      &lt;/div&gt;\r\n      &lt;div class=&quot;modal-body&quot;&gt;\r\n        ...\r\n      &lt;/div&gt;\r\n      &lt;div class=&quot;modal-footer&quot;&gt;\r\n        &lt;button type=&quot;button&quot; class=&quot;btn btn-default&quot; data-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;\r\n        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Save changes&lt;/button&gt;\r\n      &lt;/div&gt;\r\n    &lt;/div&gt;\r\n  &lt;/div&gt;\r\n&lt;/div&gt;', 1417441330, 'a tutoial');

-- --------------------------------------------------------

--
-- 表的结构 `think_file`
--

CREATE TABLE IF NOT EXISTS `think_file` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `filename` varchar(255) CHARACTER SET gbk NOT NULL,
  `storename` varchar(255) CHARACTER SET gbk NOT NULL,
  `size` int(10) unsigned NOT NULL,
  `fruit_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=86 ;

--
-- 转存表中的数据 `think_file`
--

INSERT INTO `think_file` (`id`, `filename`, `storename`, `size`, `fruit_id`) VALUES
(65, '2010_2011_2期末考卷A.doc', '54ced661c57d4.doc', 120832, 122),
(66, '2013试卷.doc', '54ced661c5f65.doc', 109056, 122),
(67, '2009试卷.doc', '54ced6c668b08.doc', 109568, 123),
(68, '2010_2011_2_期中试卷A.doc', '54ced6c66928c.doc', 111616, 123),
(69, '2010_2011_2期末考卷A.doc', '54ced6c669938.doc', 120832, 123),
(70, '2011-2012-2期中试卷A.doc', '54ced7b0a9940.doc', 96768, 124),
(71, '2011-2012-2期中试卷A.doc', '54ced7b784328.doc', 96768, 125),
(72, '2013试卷.doc', '54ced7b7849ec.doc', 109056, 125),
(73, '2013试卷.doc', '54ced7bcecdc8.doc', 109056, 126),
(74, '2011-2012-2期中试卷A.doc', '54ceec1cba562.doc', 96768, 127),
(75, '2013试卷.doc', '54ceec1cbae09.doc', 109056, 127),
(76, '2f738bd4b31c87014d66a02b277f9e2f0608ff2f.jpg', '54d970c91dfc0.jpg', 100078, 128),
(77, '1-140211153931293.png', '54d971195550f.png', 66543, 129),
(78, 'EI232Fall2013C10.pptx', '', 2458992, 130),
(79, 'EI232Fall2013C08.pptx', '', 1319499, 131),
(80, 'EI232Fall2013C08.pptx', '', 1319499, 132),
(81, 'EI232Fall2013C08.pptx', './Public/Uploads/file/133/', 1319499, 133),
(82, 'EI232Fall2013C08.pptx', '0', 1319499, 134),
(83, 'EI232Fall2013C08.pptx', './Public/Uploads/file/135/', 1319499, 135),
(84, 'EI232Fall2013C08.pptx', './Public/Uploads/file/136/', 1319499, 136),
(85, 'EI232Fall2013C08.pptx', './Public/Uploads/file/137/54d97693eb4c0.pptx', 1319499, 137);

-- --------------------------------------------------------

--
-- 表的结构 `think_fruit`
--

CREATE TABLE IF NOT EXISTS `think_fruit` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `time` int(10) unsigned NOT NULL,
  `username` varchar(127) CHARACTER SET gbk NOT NULL,
  `content` varchar(255) CHARACTER SET gbk NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=138 ;

--
-- 转存表中的数据 `think_fruit`
--

INSERT INTO `think_fruit` (`id`, `time`, `username`, `content`) VALUES
(121, 1422841280, 'Hunter_Lin', 'sad'),
(122, 1422841441, 'Hunter_Lin', 'final_test!'),
(123, 1422841542, 'Hunter_Lin', 'fds'),
(124, 1422841776, 'Hunter_Lin', 'dsfs'),
(125, 1422841783, 'Hunter_Lin', 'sda'),
(126, 1422841789, 'Hunter_Lin', 'sda'),
(127, 1422847004, '1', '喵'),
(128, 1423536329, 'Hunter_Lin', 'ad'),
(129, 1423536409, 'Hunter_Lin', 'ADS'),
(130, 1423537569, 'Hunter_Lin', 'dsf'),
(131, 1423537642, 'Hunter_Lin', 'sad'),
(132, 1423537686, 'Hunter_Lin', 'sad'),
(133, 1423537708, 'Hunter_Lin', 'sad'),
(134, 1423537722, 'Hunter_Lin', 'sad'),
(135, 1423537725, 'Hunter_Lin', 'sad'),
(136, 1423537731, 'Hunter_Lin', 'sad'),
(137, 1423537812, 'Hunter_Lin', 'sad');

-- --------------------------------------------------------

--
-- 表的结构 `think_user`
--

CREATE TABLE IF NOT EXISTS `think_user` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(25) NOT NULL,
  `loginip` varchar(127) NOT NULL,
  `logintime` int(10) NOT NULL,
  `user_img` varchar(127) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `think_user`
--

INSERT INTO `think_user` (`id`, `username`, `password`, `loginip`, `logintime`, `user_img`) VALUES
(3, '1', '1', '', 0, ''),
(4, 'Hunter_Lin', 'adqezcf950321', '0.0.0.0', 1423621511, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
