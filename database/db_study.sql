-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2020 年 06 月 07 日 19:14
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
-- 表的结构 `m_administrator`
--

CREATE TABLE IF NOT EXISTS `m_administrator` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL COMMENT '管理员名称',
  `pwd` char(32) NOT NULL COMMENT '密码',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `m_administrator`
--

INSERT INTO `m_administrator` (`id`, `name`, `pwd`) VALUES
(1, 'wangjun', 'fcea920f7412b5da7be0cf42b8c93759'),
(2, 'dengshan', 'e10adc3949ba59abbe56e057f20f883e'),
(3, 'asd', 'c44a471bd78cc6c2fea32b9fe028d30a');

-- --------------------------------------------------------

--
-- 表的结构 `m_complaint`
--

CREATE TABLE IF NOT EXISTS `m_complaint` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `post_sort` enum('0','1') NOT NULL DEFAULT '0' COMMENT '帖子类别',
  `post_id` int(10) unsigned NOT NULL COMMENT '被投诉帖子的ID',
  `bcomuser` varchar(20) NOT NULL COMMENT '被投诉用户',
  `comuser` varchar(20) NOT NULL COMMENT '投诉用户',
  `reason` text COMMENT '投诉原因',
  `comtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '投诉时间',
  `flag` enum('0','1') NOT NULL DEFAULT '0' COMMENT '是否已经处理',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `m_complaint`
--

INSERT INTO `m_complaint` (`id`, `post_sort`, `post_id`, `bcomuser`, `comuser`, `reason`, `comtime`, `flag`) VALUES
(1, '0', 1, '1234', 'aaa', '违规信息', '2019-12-21 22:12:45', '0'),
(4, '0', 15, '5555', '666', '6666', '2019-12-21 22:14:46', '0'),
(3, '0', 15, 'aaa', 'bbb', 'sssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss', '2019-12-21 22:12:35', '0'),
(5, '0', 66, '666', '66666', '6666', '2019-12-21 22:14:46', '0'),
(6, '0', 15, '5555', '666', '6666', '2019-12-21 22:14:54', '0'),
(7, '0', 66, '666', '66666', '6666', '2019-12-21 22:14:54', '0');

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
-- 表的结构 `m_findthings`
--

CREATE TABLE IF NOT EXISTS `m_findthings` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL COMMENT '丢失物品名称',
  `fdescrip` varchar(200) NOT NULL COMMENT '物品描述',
  `fpicture` varchar(200) NOT NULL COMMENT '物品图片',
  `fphone` varchar(30) NOT NULL COMMENT '发起人联系方式',
  `fser` varchar(30) NOT NULL COMMENT '发起用户名',
  `ftime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '发表时间',
  `isfind` varchar(5) NOT NULL DEFAULT '0' COMMENT '是否已经找到',
  `isflag` varchar(5) NOT NULL DEFAULT '0' COMMENT '是否封禁',
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- 转存表中的数据 `m_findthings`
--

INSERT INTO `m_findthings` (`fid`, `fname`, `fdescrip`, `fpicture`, `fphone`, `fser`, `ftime`, `isfind`, `isflag`) VALUES
(17, '大V干事东方宾馆发生的', '发不发达再找不到房', '1576920293.jpg', '13370716041', 'bbb', '2019-12-21 01:24:54', '0', '1'),
(18, '任何人山东省', '而为人服务eager还是先热负荷班上人', '1576920326.jpg', '342353634', 'bbb', '2019-12-21 01:25:26', '0', '0'),
(19, '羊肉汤东湖街道继续发', '三分我问他供热很担心', '1576920344.jpg', '4375865469', 'bbb', '2019-12-21 01:25:44', '0', '0'),
(20, '让我和他一人交通费', '登革热射手', '1576920386.jpg', '325236347', 'bbb', '2019-12-21 01:26:26', '0', '0'),
(21, '一堂课缘分海洋贵妃椅', '124235的舒适感更深入她和你好像是', '1576920423.jpg', '2345678945', 'bbb', '2019-12-21 01:27:03', '0', '0'),
(22, '让人大股东不定时', ' 而过任务热狗或过热十多个', '1576998318.jpg', '214252353', 'aaa', '2019-12-21 23:05:18', '0', '1'),
(23, '686754', ' 额昂热无花果认识的个人还跟我', '1576998359.jpg', '4363745754', 'aaa', '2019-12-21 23:05:59', '0', '0'),
(24, '动感二人', '隔热隔热喝热水内容是', '1576999598.jpg', '2352365346', 'aaa', '2019-12-21 23:26:38', '1', '0'),
(25, '还是', '爱国社会公认的好人头都', '1576999872.jpg', '132142353', 'aaa', '2019-12-21 23:31:12', '1', '0'),
(26, 'U盘', '银色的小U盘', '1577248286.jpg', '133780544544', 'aaa', '2019-12-24 20:31:26', '0', '0'),
(27, '鼠标', '白色的小鼠标', '1577248341.jpg', '54374586786', 'aaa', '2019-12-24 20:32:21', '0', '0'),
(28, '水杯', '就是水杯', '1577248377.jpg', '6559543235', 'aaa', '2019-12-24 20:32:57', '0', '0'),
(29, '提问人家说', '浩特和他分公司吧', '1577248469.jpg', '45648567978', 'aaa', '2019-12-24 20:34:29', '0', '0'),
(30, '大红包飞个回复', '第三关是v色如歌虽然粉红色', '1577274160.jpg', '2532543', 'aaa', '2019-12-25 03:42:40', '0', '0');

-- --------------------------------------------------------

--
-- 表的结构 `m_liuyan`
--

CREATE TABLE IF NOT EXISTS `m_liuyan` (
  `lid` int(11) NOT NULL AUTO_INCREMENT,
  `ltitle` varchar(500) CHARACTER SET utf8 NOT NULL COMMENT '标题',
  `lcontent` text CHARACTER SET utf8 NOT NULL COMMENT '内容',
  `lname` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '姓名',
  `ltel` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '电话',
  `lmail` varchar(60) CHARACTER SET utf8 NOT NULL COMMENT '邮箱',
  `lser` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '用户名',
  `ltime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '留言时间',
  `reply` varchar(100) CHARACTER SET utf8 NOT NULL DEFAULT '0' COMMENT '回复',
  PRIMARY KEY (`lid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='留言表' AUTO_INCREMENT=35 ;

--
-- 转存表中的数据 `m_liuyan`
--

INSERT INTO `m_liuyan` (`lid`, `ltitle`, `lcontent`, `lname`, `ltel`, `lmail`, `lser`, `ltime`, `reply`) VALUES
(4, '32游戏游戏游戏游戏', '游戏游戏游戏游戏游戏游戏游戏游戏游戏游戏游戏游戏游戏游戏游戏游戏游戏游戏游戏游戏', '游戏', '154641564', '165465456@qq.com', '127.0.0.1', '2016-04-03 18:21:12', '热火人头都和'),
(25, '32游戏游戏游戏游戏', '游戏游戏游戏游戏游戏游戏游戏游戏游戏游戏游戏游戏游戏游戏游戏游戏游戏游戏游戏游戏', '游戏', '154641564', '165465456@qq.com', '127.0.0.1', '2016-04-03 18:21:12', '见个面分v'),
(27, '的粉红色', '耳温贝多芬枪同位语', '任务范围', '13370715334', '24325346@qq.com', 'aaa', '2019-12-18 21:47:12', '0'),
(30, '达人公社如何', '的十多个虽然很不舒服', '是当个', '1333703463', '2435232@qq.com', 'bbb', '2019-12-21 01:11:04', '通融通融和'),
(32, '放的地方和诉讼费', '提货人太难染色体', '辅导费都不舍得放', '13370716041', '235252@qq.com', 'aaa', '2019-12-21 05:09:09', '0'),
(33, '的撒DVD失败', '热乎日报投入和别人的', '额发热', '1242353346', '21432534@qq.com', 'aaa', '2019-12-22 22:01:25', '然后国色入'),
(34, '的士速递', '辅导班水电费更深入', '第三方', '213243543', '235354@qq.com', '445', '2020-05-12 22:54:20', '0');

-- --------------------------------------------------------

--
-- 表的结构 `m_member`
--

CREATE TABLE IF NOT EXISTS `m_member` (
  `mid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user` varchar(20) NOT NULL,
  `phone` char(11) NOT NULL DEFAULT '' COMMENT '联系电话',
  `email` varchar(30) NOT NULL DEFAULT '',
  `pwd` char(32) NOT NULL COMMENT '登录密码',
  `salt` char(6) NOT NULL COMMENT '密码salt',
  `freeze` int(5) NOT NULL DEFAULT '0' COMMENT '是否冻结',
  `reg_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '注册时间',
  PRIMARY KEY (`mid`),
  UNIQUE KEY `user` (`user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- 转存表中的数据 `m_member`
--

INSERT INTO `m_member` (`mid`, `user`, `phone`, `email`, `pwd`, `salt`, `freeze`, `reg_time`) VALUES
(1, '1234', '13370716041', '12345678@qq.com', '123456789', '', 0, '2019-12-17 04:57:22'),
(2, '123456789', '13370716041', '2836692252@qq.com', 'df18fceec8ae1723f779c2f56baa5e6f', 'd6a154', 0, '2019-12-17 05:35:41'),
(3, 'aaa', '13370716041', '2836692252@qq.com', 'b4009307caebcf3b9d58aa5bf1d423da', 'b4364b', 0, '2019-12-17 23:00:59'),
(4, 'bbb', '12345678901', '1234567@qq.com', '88c93695cc52f763850da341f986e1b7', 'e99400', 0, '2019-12-21 00:15:10'),
(5, 'ww', '12423534642', '12345654@qq.com', '52bf73d387fd05ed5dcbdf9bdc74fa4e', '100131', 1, '2019-12-22 17:01:52'),
(6, '222', '12345678912', '325353@qq.com', 'bc398f0b3ccc47ba05f2d9c53a37ee4e', '734537', 0, '2019-12-22 17:03:03'),
(7, 'asd', '23432536', '2353452@qq.com', 'cf7e0a1780cfc524ede73caba6ad3a2d', '59f667', 0, '2019-12-24 20:36:37'),
(8, 'shan', '1233444444', '2836692252@qq.com', '4f37ef3c9d9f5fcf473cea294d4f5d2d', 'be9ca8', 0, '2020-04-01 22:23:55'),
(9, '445', '12444555213', '12345678@qq.com', 'b0c87dfebb1fb018679b3cf17fc2b62b', 'c7f351', 0, '2020-05-12 22:52:28'),
(10, '11111111111', '123456789', '123456@qq.com', '1c26ed35686888b916826e0b48700500', 'f9c603', 0, '2020-05-12 23:26:55'),
(11, 'ppp', '13370716041', '2836692252@qq.com', 'c3032dcf9d67dc872c09b7b8b9990e24', 'f72ffa', 0, '2020-05-27 16:44:15');

-- --------------------------------------------------------

--
-- 表的结构 `m_news`
--

CREATE TABLE IF NOT EXISTS `m_news` (
  `nid` int(11) NOT NULL AUTO_INCREMENT,
  `ntitle` varchar(600) CHARACTER SET utf8 NOT NULL COMMENT '标题',
  `nauthor` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT '作者',
  `ncontent` text CHARACTER SET utf8 NOT NULL COMMENT '内容',
  `ntime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '时间',
  PRIMARY KEY (`nid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='公司新闻' AUTO_INCREMENT=22 ;

--
-- 转存表中的数据 `m_news`
--

INSERT INTO `m_news` (`nid`, `ntitle`, `nauthor`, `ncontent`, `ntime`) VALUES
(10, '79878911111111111', '79878', '<p>798789798789798789798789798789798789798789798789798789798789798789798789798789798789 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>', '2016-04-01 22:40:19'),
(11, '复活了僵尸游戏出版了', '复活了僵尸', '<p>复活了僵尸游戏出版了复活了僵尸游戏出版了复活了僵尸游戏出版了复活了僵尸游戏出版了复活了僵尸游戏出版了复活了僵尸游戏出版了复活了僵尸游戏出版了复活了僵尸游戏出版了复活了僵尸游戏出版了复活了僵尸游戏出版了复活了僵尸游戏出版了复活了僵尸游戏出版了复活了僵尸游戏出版了复活了僵尸游戏出版了复活了僵尸游戏出版了复活了僵尸游戏出版了&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>', '2016-04-02 00:43:01'),
(12, '谷歌CEO来华和柯洁下棋', 'admin', '<p>&nbsp;</p><p>阿法狗将挑战柯洁？谷歌还没有太认真提及</p><p>昨天，柯洁（左）与“阿法狗”的老板（右）下了一盘围棋。</p><p>北京晨报讯（记者 韩元佳）“阿法狗”和人类谁更聪明的讨论还在甚嚣尘上，心直口快，段子频出的围棋九段、世界冠军柯洁就与“阿法狗”的老板下了一盘围棋。昨日，谷歌CEO桑达尔·皮查伊首次访华，在“棋圣”聂卫平的带领下参观了围棋道场。</p><p>“今天去聂道很开心，见到了古哥还有聂老，还见到了传说中的新任CEO皮查伊。甚至还下了盘……嗯……勉强就叫他围棋吧。”昨日，柯洁在其官方微博调侃自己跟皮查伊的对弈经历。</p><p>3\r\n月15日，谷歌旗下人工智能公司Deep \r\nMind开发的智能系统AlphaGo与韩国棋手李世石九段展开了“人机大战”，最终李世石以总比分1比4输掉比赛，轰动全球。被称为“中国围棋天才”的\r\n柯洁在赛前先是乐观地预测李世石将以5比0的成绩全胜，在李世石输掉首盘比赛后，柯洁在微博上表示：“来吧！管你是阿法狗还是阿法猫！”</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <br/></p>', '2016-04-03 20:11:27'),
(13, '请问请问请问请问请问请问请问请问请问请问请问请问', '请问', '<p>请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>', '2016-04-03 21:30:44'),
(15, '6456486', '请问', '<p>请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>', '2016-04-03 21:30:44'),
(16, '798123123qq', '请问', '<p>请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>', '2016-04-03 21:30:44'),
(17, 'cxvbbg213', '请问', '<p>请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问请问 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>', '2016-04-03 21:30:44'),
(18, '详解HTTPS是如何确保安全性的？', 'admin', '<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="color: rgb(0, 0, 0); font-family: &#39;microsoft yahei&#39;; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 26px; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important; float: none; background-color: rgb(255, 255, 255);">出于安全考虑，浏览器不会在本地保存HTTPS缓存。实际上，只要在HTTP头中使用特定命令，HTTPS是可以缓存的。Firefox默认只在内存中缓存HTTPS。但是，只要头命令中有Cache-Control: Public，缓存就会被写到硬盘上。 IE只要http头允许就可以缓存https内容，缓存策略与是否使用HTTPS协议无关。</span><span style="color: rgb(0, 0, 0); font-family: &#39;microsoft yahei&#39;; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 26px; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important; float: none; background-color: rgb(255, 255, 255);">出于安全考虑，浏览器不会在本地保存HTTPS缓存。实际上，只要在HTTP头中使用特定命令，HTTPS是可以缓存的。Firefox默认只在内存中缓存HTTPS。但是，只要头命令中有Cache-Control: Public，缓存就会被写到硬盘上。 IE只要http头允许就可以缓存https内容，</span></p><p><span style="color: rgb(0, 0, 0); font-family: &#39;microsoft yahei&#39;; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 26px; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important; float: none; background-color: rgb(255, 255, 255);">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 缓存策略与是否使用HTTPS协议无关。</span><span style="color: rgb(0, 0, 0); font-family: &#39;microsoft yahei&#39;; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 26px; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important; float: none; background-color: rgb(255, 255, 255);">出于安全考虑，浏览器不会在本地保存HTTPS缓存。实际上，只要在HTTP头中使用特定命令，HTTPS是可以缓存的。Firefox默认只在内存中缓存HTTPS。但是，只要头命令中有Cache-Control: Public，缓存就会被写到硬盘上。 IE只要http头允许就可以缓存https内容，缓存策略与是否使用HTTPS协议无关。</span><span style="color: rgb(0, 0, 0); font-family: &#39;microsoft yahei&#39;; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 26px; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important; float: none; background-color: rgb(255, 255, 255);">出于安全考虑，浏览器不会在本地保存HTTPS缓存。实际上，只要在HTTP头中使用特定命令，HTTPS是可以缓存的。Firefox默认只在内存中缓存HTTPS。但是，只要头命令中有Cache-Control: Public，缓存就会被写到硬盘上。 IE只要http头允许就可以缓存https内容，缓存策略与是否使用HTTPS协议无关。</span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>', '2016-04-04 03:17:16'),
(19, 'HTTPS和HTTP的区别', 'admin', '<h2 id="摘要算法" style="margin: 0.8em 0px; padding: 0px; box-sizing: border-box; font-weight: 100; color: rgb(0, 0, 0); font-family: &#39;microsoft yahei&#39;; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: 26px; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">摘要算法</h2><p style="margin: 0px 0px 1.1em; padding: 0px; box-sizing: border-box; color: rgb(0, 0, 0); font-family: &#39;microsoft yahei&#39;; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 26px; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">数字摘要是采用单项Hash函数将需要加密的明文“摘要”成一串固定长度（128位）的密文，这一串密文又称为数字指纹，它有固定的长度，而且不同的明文摘要成密文，其结果总是不同的，而同样的明文其摘要必定一致。“数字摘要“是https能确保数据完整性和防篡改的根本原因。</p><h2 id="数字签名" style="margin: 0.8em 0px; padding: 0px; box-sizing: border-box; font-weight: 100; color: rgb(0, 0, 0); font-family: &#39;microsoft yahei&#39;; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: 26px; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);"><a name="t9" style="color: rgb(255, 153, 0); text-decoration: none; box-sizing: border-box;" href="http://"></a>数字签名</h2><p style="margin: 0px 0px 1.1em; padding: 0px; box-sizing: border-box; color: rgb(0, 0, 0); font-family: &#39;microsoft yahei&#39;; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 26px; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">数字签名技术就是对“非对称密钥加解密”和“数字摘要“两项技术的应用，它将摘要信息用发送者的私钥加密，与原文一起传送给接收者。接收者只有用发送者的公钥才能解密被加密的摘要信息，然后用HASH函数对收到的原文产生一个摘要信息，与解密的摘要信息对比。如果相同，则说明收到的信息是完整的，在传输过程中没有被修改，否则说明信息被修改过，因此数字签名能够验证信息的完整性。<span class="Apple-converted-space">&nbsp;</span><br style="box-sizing: border-box;"/>数字签名的过程如下：<span class="Apple-converted-space">&nbsp;</span><br style="box-sizing: border-box;"/><code style="box-sizing: border-box; font-family: &#39;Source Code Pro&#39;, monospace; padding: 2px 4px; font-size: 12.6px; color: rgb(63, 63, 63); white-space: nowrap; border-radius: 0px; background-color: rgba(128, 128, 128, 0.0745098);">明文 --&gt; hash运算 --&gt; 摘要 --&gt; 私钥加密 --&gt; 数字签名</code></p><p style="margin: 0px 0px 1.1em; padding: 0px; box-sizing: border-box; color: rgb(0, 0, 0); font-family: &#39;microsoft yahei&#39;; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 26px; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">数字签名有两种功效：<span class="Apple-converted-space">&nbsp;</span><br style="box-sizing: border-box;"/>一、能确定消息确实是由发送方签名并发出来的，因为别人假冒不了发送方的签名。<span class="Apple-converted-space">&nbsp;</span><br style="box-sizing: border-box;"/>二、数字签名能确定消息的完整性。</p><blockquote style="box-sizing: border-box; margin: 0px 0px 1.1em; padding: 15px 20px; border-left-width: 10px; border-left-style: solid; border-left-color: rgba(128, 128, 128, 0.0745098); border-radius: 0px 5px 5px 0px; color: rgb(0, 0, 0); font-family: &#39;microsoft yahei&#39;; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 26px; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgba(128, 128, 128, 0.0470588);"><p style="margin: 0px; padding: 0px; box-sizing: border-box; line-height: 1.25;"><strong style="box-sizing: border-box;">注意：</strong><span class="Apple-converted-space">&nbsp;</span><br style="box-sizing: border-box;"/>数字签名只能验证数据的完整性，数据本身是否加密不属于数字签名的控制范围</p></blockquote><h2 id="数字证书" style="margin: 0.8em 0px; padding: 0px; box-sizing: border-box; font-weight: 100; color: rgb(0, 0, 0); font-family: &#39;microsoft yahei&#39;; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: 26px; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);"><a name="t10" style="color: rgb(255, 153, 0); text-decoration: none; box-sizing: border-box;" href="http://"></a>数字证书</h2><h3 id="为什么要有数字证书" style="margin: 0.8em 0px; padding: 0px; box-sizing: border-box; font-weight: 100; color: rgb(0, 0, 0); font-family: &#39;microsoft yahei&#39;; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: 26px; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);"><a name="t11" style="color: rgb(255, 153, 0); text-decoration: none; box-sizing: border-box;" href="http://"></a>为什么要有数字证书？</h3><p style="margin: 0px 0px 1.1em; padding: 0px; box-sizing: border-box; color: rgb(0, 0, 0); font-family: &#39;microsoft yahei&#39;; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 26px; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">对于请求方来说，它怎么能确定它所得到的公钥一定是从目标主机那里发布的，而且没有被篡改过呢？亦或者请求的目标主机本本身就从事窃取用户信息的不正当行为呢？这时候，我们需要有一个权威的值得信赖的第三方机构(一般是由政府审核并授权的机构)来统一对外发放主机机构的公钥，只要请求方这种机构获取公钥，就避免了上述问题的发生。</p><h3 id="数字证书的颁发过程" style="margin: 0.8em 0px; padding: 0px; box-sizing: border-box; font-weight: 100; color: rgb(0, 0, 0); font-family: &#39;microsoft yahei&#39;; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: 26px; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);"><a name="t12" style="color: rgb(255, 153, 0); text-decoration: none; box-sizing: border-box;" href="http://"></a>数字证书的颁发过程</h3><p style="margin: 0px 0px 1.1em; padding: 0px; box-sizing: border-box; color: rgb(0, 0, 0); font-family: &#39;microsoft yahei&#39;; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 26px; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">用户首先产生自己的密钥对，并将公共密钥及部分个人身份信息传送给认证中心。认证中心在核实身份后，将执行一些必要的步骤，以确信请求确实由用户发送而来，然后，认证中心将发给用户一个数字证书，该证书内包含用户的个人信息和他的公钥信息，同时还附有认证中心的签名信息(根证书私钥签名)。用户就可以使用自己的数字证书进行相关的各种活动。数字证书由独立的证书发行机构发布，数字证书各不相同，每种证书可提供不同级别的可信度。</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <br/></p>', '2016-04-04 03:18:20'),
(20, '郭敬明大公鸡没拿过的处境年代初', '3254亚热带如今的', '<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p><p>阿法狗将挑战柯洁？谷歌还没有太认真提及</p><p>昨天，柯洁（左）与“阿法狗”的老板（右）下了一盘围棋。</p><p>北京晨报讯（记者 韩元佳）“阿法狗”和人类谁更聪明的讨论还在甚嚣尘上，心直口快，段子频出的围棋九段、世界冠军柯洁就与“阿法狗”的老板下了一盘围棋。昨日，谷歌CEO桑达尔·皮查伊首次访华，在“棋圣”聂卫平的带领下参观了围棋道场。</p><p>“今天去聂道很开心，见到了古哥还有聂老，还见到了传说中的新任CEO皮查伊。甚至还下了盘……嗯……勉强就叫他围棋吧。”昨日，柯洁在其官方微博调侃自己跟皮查伊的对弈经历。</p><p>3 月15日，谷歌旗下人工智能公司Deep Mind开发的智能系统AlphaGo与韩国棋手李世石九段展开了“人机大战”，最终李世石以总比分1比4输掉比赛，轰动全球。被称为“中国围棋天才”的柯洁在赛前先是乐观地预测李世石将以5比0的成绩全胜，在李世石输掉首盘比赛后，柯洁在微博上表示：“来吧！管你是阿法狗还是阿法猫！”</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>', '2019-12-17 21:51:42'),
(21, '推荐你提到过今年', '格式', '挺合适的输入接听电话今天的加拿大通过几年个体经营你发给他那个那个承诺', '2019-12-25 03:15:31');

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
-- 表的结构 `m_returns`
--

CREATE TABLE IF NOT EXISTS `m_returns` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `rpname` varchar(50) NOT NULL COMMENT '归还物品名称',
  `rdescrip` varchar(100) NOT NULL COMMENT '归还物品描述',
  `rpicture` varchar(200) NOT NULL COMMENT '物品图片',
  `raddress` varchar(50) NOT NULL COMMENT '捡到物品的地址',
  `rphone` varchar(30) NOT NULL COMMENT '发起者联系方式',
  `rser` varchar(30) NOT NULL COMMENT '捡到者用户名',
  `rtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '发表时间',
  `isreturn` varchar(5) NOT NULL DEFAULT '0' COMMENT '是否已经归还',
  `isflag` varchar(5) NOT NULL DEFAULT '0' COMMENT '是否封禁',
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- 转存表中的数据 `m_returns`
--

INSERT INTO `m_returns` (`rid`, `rpname`, `rdescrip`, `rpicture`, `raddress`, `rphone`, `rser`, `rtime`, `isreturn`, `isflag`) VALUES
(1, '奋斗是不受任何', '二个人维护个人社会', '1576919036.jpg', '的方式保护色挺好玩', '86655625', 'bbb', '2019-12-21 01:03:56', '0', '1'),
(14, '问题胃癌已核实', '而非rag大V的故事各睡各的', '1576921440.jpg', '如歌也恢复现代化', '12423543645', 'bbb', '2019-12-21 01:44:00', '0', '0'),
(15, '然后骚扰电话大润发', '世博会让他加核桃仁电话费贵', '1576929665.jpg', '个收到货更多人', '13370716041', 'aaa', '2019-12-21 04:01:05', '0', '0'),
(16, '然后把说的很对', '是当个道德风尚个人生活', '1576930283.jpg', '谁过生日的感受到', '123456789', 'aaa', '2019-12-21 04:11:23', '0', '0'),
(17, '千万人委托人为', '214哥说的很对一人说一声', '1576930311.jpg', '二鹅公社合适', '112436436', 'aaa', '2019-12-21 04:11:51', '0', '0'),
(18, '污染物区分为', '各色如何不认识他', '1577004085.jpg', '打发顺丰笔画输入五花肉', '13370716041', 'aaa', '2019-12-22 00:41:25', '0', '0'),
(19, '多个大V是当个', '维特热死个人', '1577004138.jpg', '热火人头都', '21532534', 'aaa', '2019-12-22 00:42:18', '0', '0'),
(20, '要偷塔加一条', '额扔扔扔收入收入', '1577004176.jpg', '人士认同和', '325346456', 'aaa', '2019-12-22 00:42:56', '1', '0'),
(21, '矮个人收入', '让我去退高热商业化', '1577004232.jpg', '防晒乳的活动', '2535436', 'aaa', '2019-12-22 00:43:52', '1', '0'),
(22, '的撒女生', '瑞风和染色五花肉', '1577004859.jpg', '二娃违规设任何', '5223634', 'aaa', '2019-12-22 00:54:19', '1', '1'),
(23, '鼠标', '风格不舒服瘦腿袜', '1577248519.jpg', '学院机房', '3426537647', 'aaa', '2019-12-24 20:35:19', '1', '0'),
(24, '优盘', '而部分是不是分别', '1577248638.jpg', '机房', '3465376547', 'asd', '2019-12-24 20:37:18', '0', '0'),
(25, '而请各位热舞会', '替换tetjy6r7jmndg国防生非弄死你大部分', '1577248818.jpg', '古巴是', '214325436', 'asd', '2019-12-24 20:40:18', '0', '0'),
(26, '的粉红色风格', '第三个电风扇听得见', '1577274214.jpg', '我还是白癜风回复', '2365347645', 'aaa', '2019-12-25 03:43:34', '0', '0');

-- --------------------------------------------------------

--
-- 表的结构 `m_students`
--

CREATE TABLE IF NOT EXISTS `m_students` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `sno` varchar(20) NOT NULL COMMENT '学号',
  `spwd` varchar(50) NOT NULL COMMENT '登录密码',
  `salt` varchar(10) NOT NULL COMMENT '密码salt',
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
  `freeze` varchar(5) NOT NULL DEFAULT '0',
  `spic` varchar(200) NOT NULL DEFAULT '0' COMMENT '头像',
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `m_students`
--

INSERT INTO `m_students` (`sid`, `sno`, `spwd`, `salt`, `sname`, `ssex`, `sphone`, `semail`, `school`, `scolle`, `syear`, `smajor`, `sclass`, `stime`, `freeze`, `spic`) VALUES
(2, '2017051604071', '5cf6250ef5c67a1e218b38084d83bbb2', 'f8185a', '邓姗', '女', '13370716041', '2836692252@qq.com', '重庆师范大学', '计算机与信息科学学院', '2017', '软件工程', '3班', '2020-06-07 11:08:47', '0', '0');

-- --------------------------------------------------------

--
-- 表的结构 `m_teachers`
--

CREATE TABLE IF NOT EXISTS `m_teachers` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `tno` varchar(20) NOT NULL COMMENT '老师工号',
  `tpwd` varchar(50) NOT NULL COMMENT '密码',
  `salt` varchar(10) NOT NULL COMMENT '密码salt',
  `tname` varchar(20) NOT NULL COMMENT '姓名',
  `tsex` varchar(10) NOT NULL COMMENT '性别',
  `tphone` varchar(20) NOT NULL COMMENT '电话号码',
  `temail` varchar(20) NOT NULL COMMENT '邮箱',
  `tschool` varchar(30) NOT NULL COMMENT '学校',
  `tcolle` varchar(20) NOT NULL COMMENT '学院',
  `ttime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '注册时间',
  `freeze` varchar(5) NOT NULL DEFAULT '0',
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
