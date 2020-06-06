-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2020 年 06 月 04 日 16:04
-- 服务器版本: 5.5.47
-- PHP 版本: 5.3.29

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `db_study`
--

-- --------------------------------------------------------

--
-- 表的结构 `m_course`
--

CREATE TABLE IF NOT EXISTS `m_course` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `cno` varchar(20) NOT NULL COMMENT '课程号',
  `cname` varchar(30) NOT NULL COMMENT '课程名称',
  `ctno` varchar(20) NOT NULL COMMENT '授课老师工号',
  `cprofile` varchar(50) NOT NULL COMMENT '课程简介',
  `ispick` varchar(5) NOT NULL DEFAULT '0' COMMENT '是否已选',
  `cstuno` varchar(20) NOT NULL DEFAULT '0' COMMENT '选课学生学号',
  `cpic` varchar(200) NOT NULL COMMENT '课程封面',
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `m_rcollect`
--

CREATE TABLE IF NOT EXISTS `m_rcollect` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `rno` varchar(20) NOT NULL COMMENT '学号',
  `rtype` varchar(5) NOT NULL COMMENT '收藏类型',
  `ridentify` varchar(30) NOT NULL COMMENT '相应id',
  `rtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '收藏时间',
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `m_students`
--

CREATE TABLE IF NOT EXISTS `m_students` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `sno` varchar(20) NOT NULL COMMENT '学号',
  `spwd` varchar(50) NOT NULL COMMENT '登录密码',
  `sname` varchar(20) NOT NULL COMMENT '姓名',
  `ssex` varchar(10) NOT NULL COMMENT '性别',
  `sphone` varchar(20) NOT NULL COMMENT '电话号',
  `semail` varchar(20) NOT NULL COMMENT '邮箱',
  `school` varchar(30) NOT NULL COMMENT '学校',
  `scolle` varchar(20) NOT NULL COMMENT '学院',
  `syear` varchar(10) NOT NULL COMMENT '年级',
  `smajor` varchar(30) NOT NULL COMMENT '专业',
  `sclass` varchar(20) NOT NULL COMMENT '班级',
  `stime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '注册时间',
  `spic` varchar(200) NOT NULL DEFAULT '0' COMMENT '头像',
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `m_teachers`
--

CREATE TABLE IF NOT EXISTS `m_teachers` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `tno` varchar(20) NOT NULL COMMENT '老师工号',
  `tpwd` varchar(50) NOT NULL COMMENT '密码',
  `tname` varchar(20) NOT NULL COMMENT '姓名',
  `tsex` varchar(10) NOT NULL COMMENT '性别',
  `tphone` varchar(20) NOT NULL COMMENT '电话号码',
  `temail` varchar(20) NOT NULL COMMENT '邮箱',
  `tschool` varchar(30) NOT NULL COMMENT '学校',
  `tcolle` varchar(20) NOT NULL COMMENT '学院',
  `ttime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '注册时间',
  `tpic` varchar(200) NOT NULL DEFAULT '0' COMMENT '头像',
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `m_work` 
--

CREATE TABLE IF NOT EXISTS `m_work` (
  `wid` int(11) NOT NULL AUTO_INCREMENT,
  `wno` varchar(20) NOT NULL COMMENT '所属课程号',
  `wcontent` varchar(100) NOT NULL COMMENT '作业内容',
  `wtno` varchar(20) NOT NULL COMMENT '老师工号',
  `wtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '发布时间',
  PRIMARY KEY (`wid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
