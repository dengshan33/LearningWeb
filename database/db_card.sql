-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2020 �?07 �?02 �?11:27
-- 服务器版本: 5.5.47
-- PHP 版本: 5.5.30

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `db_card`
--

-- --------------------------------------------------------

--
-- 表的结构 `oc_admin`
--

CREATE TABLE IF NOT EXISTS `oc_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `password` varchar(32) NOT NULL,
  `truename` varchar(40) DEFAULT NULL,
  `sex` varchar(10) NOT NULL,
  `birthday` date NOT NULL,
  `tel` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `addtime` int(11) DEFAULT NULL,
  `role_id` int(11) DEFAULT '2',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `oc_admin`
--

INSERT INTO `oc_admin` (`id`, `username`, `password`, `truename`, `sex`, `birthday`, `tel`, `email`, `addtime`, `role_id`) VALUES
(1, 'ly', '123456', NULL, '', '0000-00-00', '', '', NULL, 0);

-- --------------------------------------------------------

--
-- 表的结构 `oc_borrow`
--

CREATE TABLE IF NOT EXISTS `oc_borrow` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `card_id` varchar(11) NOT NULL,
  `book_id` varchar(11) NOT NULL,
  `bookname` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `oc_borrow`
--

INSERT INTO `oc_borrow` (`id`, `username`, `card_id`, `book_id`, `bookname`) VALUES
(1, 'Ly', '20170516040', '123456', '1111'),
(2, 'cj', '20170516040', '112', '数学'),
(3, 'cj', '20170516040', '113', '语文'),
(4, 'cj', '20170516040', '114', '英语');

-- --------------------------------------------------------

--
-- 表的结构 `oc_card`
--

CREATE TABLE IF NOT EXISTS `oc_card` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `card_id` varchar(11) NOT NULL,
  `card_state` varchar(10) NOT NULL,
  `card_cost` int(11) DEFAULT NULL,
  `card_in` int(11) NOT NULL,
  `card_surplus` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `oc_card`
--

INSERT INTO `oc_card` (`id`, `card_id`, `card_state`, `card_cost`, `card_in`, `card_surplus`) VALUES
(1, '132', '', 10, 0, NULL),
(2, '01', '', 10, 0, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `oc_college`
--

CREATE TABLE IF NOT EXISTS `oc_college` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `profession` varchar(50) NOT NULL,
  `college` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `oc_email`
--

CREATE TABLE IF NOT EXISTS `oc_email` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from_id` int(11) NOT NULL COMMENT '发送者ID',
  `to_id` int(11) NOT NULL COMMENT '接收者ID',
  `title` varchar(50) NOT NULL COMMENT '标题',
  `file` varchar(255) DEFAULT NULL COMMENT '文件',
  `hasfile` smallint(1) DEFAULT '0' COMMENT '是否有附件',
  `filename` varchar(255) DEFAULT NULL COMMENT '文件原始名',
  `content` text COMMENT '内容',
  `addtime` int(11) DEFAULT NULL COMMENT '添加时间',
  `isread` smallint(1) DEFAULT '0' COMMENT '是否已读',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `oc_notice`
--

CREATE TABLE IF NOT EXISTS `oc_notice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL COMMENT '标题',
  `thumb` varchar(255) DEFAULT NULL COMMENT '缩略图',
  `picture` varchar(255) DEFAULT NULL COMMENT '图片',
  `description` varchar(255) DEFAULT NULL COMMENT '描述',
  `content` text COMMENT '内容',
  `author` varchar(40) NOT NULL COMMENT '作者',
  `addtime` int(11) DEFAULT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `oc_notice`
--

INSERT INTO `oc_notice` (`id`, `title`, `thumb`, `picture`, `description`, `content`, `author`, `addtime`) VALUES
(5, '计算机', NULL, NULL, NULL, '请今天之内交上作业', 'ly', 2020),
(3, '语文', NULL, NULL, NULL, '家庭作业', 'ly', 2020),
(4, '数学', NULL, NULL, NULL, '111', 'ly', 2020);

-- --------------------------------------------------------

--
-- 表的结构 `oc_student`
--

CREATE TABLE IF NOT EXISTS `oc_student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `truename` varchar(40) DEFAULT NULL,
  `password` char(32) NOT NULL,
  `card_id` varchar(11) NOT NULL,
  `profession` varchar(11) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `birthday` date NOT NULL,
  `tel` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `addtime` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `oc_student`
--

INSERT INTO `oc_student` (`id`, `username`, `truename`, `password`, `card_id`, `profession`, `sex`, `birthday`, `tel`, `email`, `credit`, `addtime`) VALUES
(1, 'cj', 'cj', '123456', '20170510404', 'computer', 'man', '2000-10-02', '13594359175', '513@qq.com', '1', '2017-12-01');

-- --------------------------------------------------------

--
-- 表的结构 `oc_view`
--

CREATE TABLE IF NOT EXISTS `oc_view` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL COMMENT '标题',
  `content` text COMMENT '内容',
  `author` varchar(40) NOT NULL COMMENT '作者',
  `addtime` int(11) DEFAULT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `oc_view`
--

INSERT INTO `oc_view` (`id`, `title`, `content`, `author`, `addtime`) VALUES
(1, '意见反馈', '123456', 'Ly', 2020),
(2, '意见反馈', '123456', 'Ly', 2020),
(3, '意见反馈', '456123', 'cj', 2020),
(4, '意见反馈', '456123', 'cj', 2020),
(5, '意见反馈', '456789', 'cj', 2020),
(6, '意见反馈', '456789', 'cj', 2020);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
