-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2020 �?07 �?02 �?11:26
-- 服务器版本: 5.5.47
-- PHP 版本: 5.5.30

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
-- 表的结构 `m_course`
--

CREATE TABLE IF NOT EXISTS `m_course` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `cno` varchar(20) NOT NULL COMMENT '课程号',
  `cname` varchar(30) NOT NULL COMMENT '课程名称',
  `ctno` varchar(20) NOT NULL COMMENT '授课老师工号',
  `cprofile` varchar(50) NOT NULL COMMENT '课程简介',
  `cpic` varchar(200) NOT NULL COMMENT '课程封面',
  `ctime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '发布时间',
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `m_course`
--

INSERT INTO `m_course` (`cid`, `cno`, `cname`, `ctno`, `cprofile`, `cpic`, `ctime`) VALUES
(1, '201705', 'C++程序设计', '2017051604333', '关于C++学习', '1.jpg', '2020-01-19 19:42:40'),
(2, '201706', 'Python程序设计', '2017051604033', '关于python学习', '1.jpg', '2020-01-19 19:42:40'),
(3, '201707', 'C语言程序设计', '2017051604003', '关于C语言学习', '1.jpg', '2020-02-24 19:42:40'),
(4, '201700', '数据结构程序设计', '2017051604112', '关于数据结构学习', '1.jpg', '2019-12-24 19:42:40'),
(5, '201720', '计算机网络', '2017051604112', '关于计算网络学习', '1.jpg', '2019-12-24 19:42:40');

-- --------------------------------------------------------

--
-- 表的结构 `m_firm`
--

CREATE TABLE IF NOT EXISTS `m_firm` (
  `gid` int(11) NOT NULL AUTO_INCREMENT,
  `glicheng` varchar(300) NOT NULL,
  `gname` varchar(20) NOT NULL COMMENT '公司名',
  `gprofile` varchar(80) NOT NULL COMMENT '公司简介',
  `glocation` varchar(20) NOT NULL COMMENT '总部地点',
  `gearn` varchar(20) NOT NULL COMMENT '经营范围',
  `gnumber` varchar(50) NOT NULL COMMENT '员工数',
  `gfounder` varchar(5) NOT NULL DEFAULT '0' COMMENT '创始人姓名',
  `gpic` varchar(20) NOT NULL DEFAULT '0' COMMENT '图片路径',
  `glinian` varchar(200) NOT NULL,
  PRIMARY KEY (`gid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `m_firm`
--

INSERT INTO `m_firm` (`gid`, `glicheng`, `gname`, `gprofile`, `glocation`, `gearn`, `gnumber`, `gfounder`, `gpic`, `glinian`) VALUES
(1, '爱奇艺于2010年4月22日正式上线，秉承“悦享品质”的品牌口号，积极推动产品、技术、内容、营销等全方位创新，为用户提供丰富、高清、流畅的专业视频体验，致力于让人们平等、便捷地获得更多、更好的视频。截止到2015年7月，爱奇艺已成功构建了包含电商、游戏、电影票等业务在内、连接人与服务的视频商业生态，引领视频网站商业模式的多元化发展。爱奇艺品质、青春、时尚的品牌调性深入人心，网罗了中国最广大的年轻用户群体。爱奇艺打造涵盖电影、电视剧、综艺、动漫在内的十余种类型的中国最大正版视频内容库，并通过“爱奇艺出品”战略的持续推动，让“纯网内容”进入真正意义上的全类别、高品质时代。同时，作为中国付费用户规模', '爱奇艺', '北京爱奇艺科技有限公司（IQIYI）是一家独立视频服务公司，有龚宇与2010年4月22日在背景成立', '中国北京', '网络信息服务，互联网信息服务业务', '约20000人', '龚宇', 'g001.png', '全屏时代，媒体与用户绝非简单传受关系，而是真正尊重用户所需，给予用户自主选择与话语权利，基于互动、沟通、关爱基础上的信息内容服务。“爱”，是“关爱”，是洞悉用户所需，让用户悦享品质视频及服务的使命体现；“爱”，是“喜爱”，期待以产品、内容、服务赢得用户，建立用户认同品牌；对 I 的放大，充分体现对个体用户（I）的尊重，互动特性（Interaction）及革新精神（Innovation）。“悦享品质'),
(2, '2010年4月22日正式上线，秉承“悦享品质”的品牌口号，积极推动产品、技术、内容、营销等全方位创新，为用户提供丰富、高清、流畅的专业视频体验，致力于让人们平等、便捷地获得更多、更好的视频。截止到2015年7月，爱奇艺已成功构建了包含电商、游戏、电影票等业务在内、连接人与服务的视频商业生态，引领视频网站商业模式的多元化发展。爱奇艺品质、青春、时尚的品牌调性深入人心，网罗了中国最广大的年轻用户群体。爱奇艺打造涵盖电影、电视剧、综艺、动漫在内的十余种类型的中国最大正版视频内容库，并通过“爱奇艺出品”战略的持续推动，让“纯网内容”进入真正意义上的全类别、高品质时代。同时，作为中国付费用户规模最大的视', '乐华娱乐', '乐华娱乐成立于2009年6月，目前主要分为乐华音乐，乐华经济，乐华影视和乐华综艺四大板块，不仅是一家娱乐个数，更是一家在海外多家顶级无论，影视合作的跨国型娱乐公', '中国北京', '乐华音乐，乐华经纪，乐华影视，乐华综艺', '暂无', '暂无', 'g002.png', '全屏时代，媒体与用户绝非简单传受关系，而是真正尊重用户所需，给予用户自主选择与话语权利，基于互动、沟通、关爱基础上的信息内容服务。“爱”，是“关爱”，是洞悉用户所需，让用户悦享品质视频及服务的使命体现；“爱”，是“喜爱”，期待以产品、内容、服务赢得用户，建立用户认同品牌；对 I 的放大，充分体现对个体用户（I）的尊重，互动特性（Interaction）及革新精神（Innovation）。“悦享品质'),
(3, '2010年4月22日正式上线，秉承“悦享品质”的品牌口号，积极推动产品、技术、内容、营销等全方位创新，为用户提供丰富、高清、流畅的专业视频体验，致力于让人们平等、便捷地获得更多、更好的视频。截止到2015年7月，爱奇艺已成功构建了包含电商、游戏、电影票等业务在内、连接人与服务的视频商业生态，引领视频网站商业模式的多元化发展。爱奇艺品质、青春、时尚的品牌调性深入人心，网罗了中国最广大的年轻用户群体。爱奇艺打造涵盖电影、电视剧、综艺、动漫在内的十余种类型的中国最大正版视频内容库，并通过“爱奇艺出品”战略的持续推动，让“纯网内容”进入真正意义上的全类别、高品质时代。同时，作为中国付费用户规模最大的视', '华为', '华为技术有限公司在2007年合同销售额为160亿美元，其中海外销售额为115亿美元，并且是当年中国国内电子行业盈利和纳税第一，截止到2008年，华为在国际市场上', '中国广东', 'IT,无线电，微电子，通讯，路由，交换等', '180000+人', '任正非', 'g003.png', '全屏时代，媒体与用户绝非简单传受关系，而是真正尊重用户所需，给予用户自主选择与话语权利，基于互动、沟通、关爱基础上的信息内容服务。“爱”，是“关爱”，是洞悉用户所需，让用户悦享品质视频及服务的使命体现；“爱”，是“喜爱”，期待以产品、内容、服务赢得用户，建立用户认同品牌；对 I 的放大，充分体现对个体用户（I）的尊重，互动特性（Interaction）及革新精神（Innovation）。“悦享品质'),
(4, '2010年4月22日正式上线，秉承“悦享品质”的品牌口号，积极推动产品、技术、内容、营销等全方位创新，为用户提供丰富、高清、流畅的专业视频体验，致力于让人们平等、便捷地获得更多、更好的视频。截止到2015年7月，爱奇艺已成功构建了包含电商、游戏、电影票等业务在内、连接人与服务的视频商业生态，引领视频网站商业模式的多元化发展。爱奇艺品质、青春、时尚的品牌调性深入人心，网罗了中国最广大的年轻用户群体。爱奇艺打造涵盖电影、电视剧、综艺、动漫在内的十余种类型的中国最大正版视频内容库，并通过“爱奇艺出品”战略的持续推动，让“纯网内容”进入真正意义上的全类别、高品质时代。同时，作为中国付费用户规模最大的视', '抖音', '抖音短视频，是一款音乐创意短视频社交软件，由今日头条孵化，该软件与2006年9月20日上限，是一个专注以年轻人音乐视频社区平台', '中国北京', '网络信息服务，互联网信息服务业务', '暂无', '暂无', 'g004.png', '全屏时代，媒体与用户绝非简单传受关系，而是真正尊重用户所需，给予用户自主选择与话语权利，基于互动、沟通、关爱基础上的信息内容服务。“爱”，是“关爱”，是洞悉用户所需，让用户悦享品质视频及服务的使命体现；“爱”，是“喜爱”，期待以产品、内容、服务赢得用户，建立用户认同品牌；对 I 的放大，充分体现对个体用户（I）的尊重，互动特性（Interaction）及革新精神（Innovation）。“悦享品质'),
(5, '2010年4月22日正式上线，秉承“悦享品质”的品牌口号，积极推动产品、技术、内容、营销等全方位创新，为用户提供丰富、高清、流畅的专业视频体验，致力于让人们平等、便捷地获得更多、更好的视频。截止到2015年7月，爱奇艺已成功构建了包含电商、游戏、电影票等业务在内、连接人与服务的视频商业生态，引领视频网站商业模式的多元化发展。爱奇艺品质、青春、时尚的品牌调性深入人心，网罗了中国最广大的年轻用户群体。爱奇艺打造涵盖电影、电视剧、综艺、动漫在内的十余种类型的中国最大正版视频内容库，并通过“爱奇艺出品”战略的持续推动，让“纯网内容”进入真正意义上的全类别、高品质时代。同时，作为中国付费用户规模最大的视', '百度网盘', '北京百度网讯科技有限公司于20012年3月23日推出一项个人云储存服务，利用百度网盘用户可以将自己的文件上传到网盘上，并且可以跨终端随时随地的查看和分享', '中国北京', '云储存服务', '暂无', '暂无', 'g005.png', '全屏时代，媒体与用户绝非简单传受关系，而是真正尊重用户所需，给予用户自主选择与话语权利，基于互动、沟通、关爱基础上的信息内容服务。“爱”，是“关爱”，是洞悉用户所需，让用户悦享品质视频及服务的使命体现；“爱”，是“喜爱”，期待以产品、内容、服务赢得用户，建立用户认同品牌；对 I 的放大，充分体现对个体用户（I）的尊重，互动特性（Interaction）及革新精神（Innovation）。“悦享品质'),
(6, '2010年4月22日正式上线，秉承“悦享品质”的品牌口号，积极推动产品、技术、内容、营销等全方位创新，为用户提供丰富、高清、流畅的专业视频体验，致力于让人们平等、便捷地获得更多、更好的视频。截止到2015年7月，爱奇艺已成功构建了包含电商、游戏、电影票等业务在内、连接人与服务的视频商业生态，引领视频网站商业模式的多元化发展。爱奇艺品质、青春、时尚的品牌调性深入人心，网罗了中国最广大的年轻用户群体。爱奇艺打造涵盖电影、电视剧、综艺、动漫在内的十余种类型的中国最大正版视频内容库，并通过“爱奇艺出品”战略的持续推动，让“纯网内容”进入真正意义上的全类别、高品质时代。同时，作为中国付费用户规模最大的视', '支付宝', '支付宝是中国国内的第三方支付平台，致力于提供简单，快捷，迅速的支付解决方案', '中国北京', '电子支付，移动支付', '暂无', '暂无', 'g006.png', '全屏时代，媒体与用户绝非简单传受关系，而是真正尊重用户所需，给予用户自主选择与话语权利，基于互动、沟通、关爱基础上的信息内容服务。“爱”，是“关爱”，是洞悉用户所需，让用户悦享品质视频及服务的使命体现；“爱”，是“喜爱”，期待以产品、内容、服务赢得用户，建立用户认同品牌；对 I 的放大，充分体现对个体用户（I）的尊重，互动特性（Interaction）及革新精神（Innovation）。“悦享品质'),
(7, 'VC你发的还能躺热火人头都', '哈哈哈', '回复过得很不规范', '是舍不得放', '梵蒂冈地方的', '4000', '邓姗', '1593183366.jpg', '方便的话凤凰于飞交一份技能有');

-- --------------------------------------------------------

--
-- 表的结构 `m_huati`
--

CREATE TABLE IF NOT EXISTS `m_huati` (
  `hid` int(11) NOT NULL AUTO_INCREMENT,
  `htitle` varchar(20) NOT NULL COMMENT '话题标题名',
  `hprofile` varchar(30) NOT NULL COMMENT '话题简短的介绍',
  `hfounderid` varchar(20) NOT NULL COMMENT '发布人id',
  `hfoundername` varchar(20) NOT NULL COMMENT '发布人姓名',
  `hfenlei` varchar(50) NOT NULL COMMENT '话题分类',
  `hhot` varchar(20) NOT NULL DEFAULT '0' COMMENT '热度',
  `hneirong` varchar(200) NOT NULL COMMENT '话题内容',
  `htime` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`hid`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `m_huati`
--

INSERT INTO `m_huati` (`hid`, `htitle`, `hprofile`, `hfounderid`, `hfoundername`, `hfenlei`, `hhot`, `hneirong`, `htime`) VALUES
(1, 'CSS总结', '前端项目中可能用到的CSS总结，（容易忘的CSS总结）', '1', '牟菁菁', '前端开发', '0', '前端时间我在我的博客中总结了一下CSS的常用效果，希望大家指正http://www.haorooms.com/post/css_common', '2020-06-28 18:16:59'),
(2, 'github上的源码不是最新的吗？我看跟', 'github上的源码不是最新的吗？我看跟现在的网站有出入', '2', '陈婧', '前端开发', '0', 'github上的源码不是最新的吗？我看跟现在的网站有出入', '2020-06-28 18:17:05'),
(3, 'F2E 仓库池的代码看时间是3年前版本？', 'F2E 仓库池的代码看时间是3年前版本？', '2', '陈婧', '前端开发', '0', 'F2E 仓库池的代码看时间是3年前版本？', '2020-06-28 18:17:10');

-- --------------------------------------------------------

--
-- 表的结构 `m_imploye`
--

CREATE TABLE IF NOT EXISTS `m_imploye` (
  `mid` int(11) NOT NULL,
  `mpic` varchar(8) NOT NULL COMMENT '图片路径',
  `mname` varchar(30) NOT NULL COMMENT '职业名',
  `mrequire` varchar(70) NOT NULL COMMENT '基本要求',
  `mlocation` varchar(10) NOT NULL COMMENT '工作区域',
  `msalary` varchar(10) NOT NULL COMMENT '工作薪水',
  `mfirm` varchar(20) NOT NULL COMMENT '招聘公司',
  `mfirmleixing` varchar(10) NOT NULL COMMENT '公司类型',
  `mzhizhe` varchar(100) NOT NULL COMMENT '岗位职责',
  `mtime` varchar(20) NOT NULL COMMENT '工作时间',
  `mlocate` varchar(20) NOT NULL COMMENT '工作具体地址',
  `mform` varchar(20) NOT NULL COMMENT '通知时间',
  `mxueli` varchar(20) NOT NULL COMMENT '学历要求',
  `mpeople` varchar(8) NOT NULL COMMENT '招聘人数',
  `mnumber` varchar(50) NOT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `m_imploye`
--

INSERT INTO `m_imploye` (`mid`, `mpic`, `mname`, `mrequire`, `mlocation`, `msalary`, `mfirm`, `mfirmleixing`, `mzhizhe`, `mtime`, `mlocate`, `mform`, `mxueli`, `mpeople`, `mnumber`) VALUES
(1, 'm001.png', '银行坐席员', '熟练使用office等办公软件', '中国成都', '5000K-8000', '中国民生银行', '金融类', '向客户寻求办理业务的满意度，使用专业的术语向客户推荐相应的信用卡增值服务', '8:00-20:00', '成都市青羊区南路2号', '电话通知', '大专以上', '10人', '电话13364068425，邮箱：1747495714@qq.com'),
(2, 'm002.png', '物理老师', '热爱教育事业，爱学习，有一定的经验和教师资格证', '中国重庆', '100元一小时', '暂无', '教育类', '负责学生的学习辅导及行为习惯纠正，负责学生情况分析，安排辅导进程及辅导效果记录', '下午4：30-6：10', '成都市龙泉一经开区男2路', '电话通知', '本科遇上学历', '10人', '电话13364068425，邮箱：1747495714@qq.com');

-- --------------------------------------------------------

--
-- 表的结构 `m_industry`
--

CREATE TABLE IF NOT EXISTS `m_industry` (
  `iid` int(11) NOT NULL AUTO_INCREMENT,
  `ijob` varchar(100) NOT NULL COMMENT '行业职位',
  `ipic` varchar(20) NOT NULL COMMENT '图片路径',
  `iprofile` varchar(200) NOT NULL COMMENT '行业简介',
  `inow` varchar(500) NOT NULL COMMENT '行业现状',
  `iindustry` varchar(20) NOT NULL,
  `ifazhan` varchar(200) NOT NULL,
  PRIMARY KEY (`iid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `m_industry`
--

INSERT INTO `m_industry` (`iid`, `ijob`, `ipic`, `iprofile`, `inow`, `iindustry`, `ifazhan`) VALUES
(1, 'K12教育,STEAM教育,应试教育培训,课程顾问,助教', 'i001.png', '教育培训是近年来逐渐兴起的一种将知识教育资源信息化的机构或在线学习系统。一般来说，这种机构或网站会包含从幼教到大学，甚至博士或者出国等各个阶层的教育信息。也有包括对现任职位的工作者或者下岗人员等类别的技能培训', '2012年，整个中国的教育培训市场总值已经达到9600亿元，平均每年的复合增长率达到12%，教育培训业总量快速膨胀的同时。竞争也变得更加剧烈。以北京为例，北京市每年新增教育培训机构300多家，同期自然"死亡"的也有300家左右。', '教育培训', '学前教育“从无到有、从有到优”。2018年，中国幼儿园数从1950年的1799所增加到26.67万所，在园幼儿数从14万人增长到4656万人；学前教育毛入园率从0.4%提高到81.7%，已经超过世界中高收入国家平均水平。  义务教育颁布实施义务教育法，全面完成普及九年义务教育的战略任务，中国加速走过了西方国家近百年的义务教育普及之路，实现了对世界的庄严承诺。2018年，全国共有义务教育学校21.4'),
(2, '计算机游戏制作,网络系统管理,物流管理,软件测试，程序设计', 'i002.png', '计算机行业的发展前景计算机专业一直是人们口中的热门专业，近年来，高校的计算机专业也不断扩招。随着互联网的发展，计算机专业人才的缺乏也没有得到有效缓解。', '国内的软件开发人才，网络技术、信息安全等方面的人才缺乏比较严重。那些高水平的系统分析师，资深项目策划人员非常少，从事程序开发的程序员也比较缺乏。计算机就业方向软件方向，软件就业方向有软件开发，软件架构师，软件测试，应用软件(包括手机程序)的调试、运行、测试、维护及质量管理等技术岗位的工作。', '计算机行业', '1946年2月14日，由美国军方定制的世界上第一台电子计算机"电子数字积分计算机"(ENIAC Eletronic Numerical Integrator And Calculator)在美国宾夕法尼亚大学问世了。 ENIAC是美国奥伯丁武器试验场为了满足计算弹道需要而研制成的。其主要发明人是电气工程师普雷斯波·埃克特(J.Prespen Eckert)和物理学家约翰·莫奇勒(John W.Ma'),
(3, '精算、核保、理赔、档案、培训、险种推广、设计、体检、财务、勘察', 'i003.png', '保险行业是指将通过契约形式集中起来的资金，用以补偿被保险人的经济利益业务的行业。保险市场是买卖保险即双方签订保险合同的场所。它可以是集中的有形市场，也可以是分散的无形市场。', '2004年12月11号，保险业加入世贸的过渡期已结束，标志着我国保险业进入全面对外开放的新时期。加入世贸组织以来，保险业对外开放的进程日益加快。对外开放的广度和深度不断扩大。呈现出几个特点，加入世贸以前中国市场有28家外资保险公司，2004年外资保险公司已达到37家，另外还有3家正在筹建。二是开放的质量，财富杂志2003年公布的世界五百强企业共有46家保险公司，其中27家已在华设立外资机构', '保险行业', '改革开放以来，我国保险市场的发展取得了令人瞩目的成就。1980 年，国内保险业务恢复，全国保费收入仅4.6亿元。2000年,全国保费收入达1596亿元，年均增长34%，但是在发展过程中还存在许多问题。从世界保险业现状看，我国保险业发展水平还相当低。1999年，我国人均保费（保险密度）才110.58元（约合11.4美元）,与瑞士的4654.3美元、美国的2722.7美元和香港的1072.8美元相比,'),
(9, '厨师', '1593180761.jpg', '餐饮行业，其主要内容是，从事该行业的组织（如餐厅、酒店、食品加工厂）或个人，通过对食品进行加工处理，满足食客的饮食需要，从而获取相应的服务收入。', ' 餐饮服务只能一次使用，当场享受，这就是说只有当客人进入餐厅后报务才能进行，当客人离店时，服务也就自然终止。', '餐饮行业', ' 餐饮服务只能一次使用，当场享受，这就是说只有当客人进入餐厅后报务才能进行，当客人离店时，服务也就自然终止。');

-- --------------------------------------------------------

--
-- 表的结构 `m_kschool`
--

CREATE TABLE IF NOT EXISTS `m_kschool` (
  `kid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kname` varchar(32) NOT NULL COMMENT '学校名称',
  `kpic` char(32) NOT NULL COMMENT '学校图片',
  `tprofile` char(100) NOT NULL COMMENT '学校简介',
  `klication` varchar(20) NOT NULL,
  `txiaoshun` varchar(30) NOT NULL,
  `kpresident` varchar(20) NOT NULL,
  `kleixing` varchar(20) NOT NULL,
  `ktime` varchar(5) NOT NULL,
  `kshuoshi` int(3) NOT NULL,
  `khistory` varchar(150) NOT NULL,
  `kcondition` varchar(150) NOT NULL,
  PRIMARY KEY (`kid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- 转存表中的数据 `m_kschool`
--

INSERT INTO `m_kschool` (`kid`, `kname`, `kpic`, `tprofile`, `klication`, `txiaoshun`, `kpresident`, `kleixing`, `ktime`, `kshuoshi`, `khistory`, `kcondition`) VALUES
(1, '温州大学', 'k001.png', '温州大学是一所地方综合性大学，办学历史可追溯到温州近代著名爱国爱乡人士黄溯初先生1933年创办的温州师范学校。1987年升格为温州师范学院。', '中国浙江温州', '求学问是、敢为人先', '张明', '综合类', '1938', 24, '1933年，国民党中央颁布《师范学校法》及《师范学校规程》，要求各省划定师范区，每区设置师范学校一所。浙江省教育厅当局“感浙南师资缺乏，教育落后，拟在浙南创办独立学校，已在计划中，因省库支绌，一时未能实现”。是时，溯初先生在上海经商，闻讯后即将私立郑楼小学校舍（估价约三万一千九百银元）捐归省有，以创', '根据2016年1月学校官网显示，南通大学设有99个本科专业，23个二级学院、1个独立学院、1个国际教育学院和1个继续教育学院，拥有1所近百年历史的大型综合三级甲等附属医院'),
(2, '大连大学', 'k002.png', '大连大学(Dalian University)简称连大(DLU)，坐落于大连市，是大连市属重点建设大学。所拥有哲、法、经济、教育、文、史、理、工、医、管理10大学科门类的综合性普通高等学校', '大连', '今天不走，明天即使跑也不一定跟得上', '李伟', '文理类', '1924', 53, '1974年，浙江财政银行学校成立。1975年，学校迁至杭州市郊七堡蚕种场。1966年，学校迁至清泰门外一堡乌龙庙。1977年6月，学校迁至文一街，成为浙江师范学院杭州分校分部。1978年，改名为浙江财政学校。1987年，经原国家教委批准正式成立浙江财经学院。1991年，获学士学位授予权。2003年，', '学校师资力量雄厚，现有教职工3044人，其中高级职称以上1486人，博士、硕士生导师1143人，拥有国家有突出贡献的中青年专家、国家杰出青年科学基金获得者、首届江海杰出英才奖获得者、享受国务院特殊津贴人员、教育部优秀骨干教师、江苏省有突出贡献的中青年专家、江苏特聘教授、博士计划、省六大人才高峰、省“'),
(3, '北京大学', 'k003.png', '北京大学（英文：Peking University），简称北大，诞生于1898年，初名京师大学堂，是中国近代第一所国立大学，也是最早以“大学”身份及名称而建立的学校，其成立标志着中国近代高等教育的开端', '中国北京', '天行健，君子当自强不息，地势坤，君子以厚德载物', '陈婧', '理科类', '1976', 35, '1933年，江苏科技大学江苏科技大学的前身——上海私立大公职业学校在上海市乔家浜创立。创办人林美衍先生“鉴于我国生产事业之落后，专门技术人才之缺乏，不能使中国工业化而跻于世界列强之林”，专门与当时的上海市党部委员吴开先商议，并召集志同道合者许恒、张桐等，秉承实业报国信念，以“培植中等技能促进生产教育', '根据2016年1月学校官网显示，学校设有99个本科专业，建有3个一级学科博士学位授权点，二级学科博士学位授权点有20余个，17个一级学科硕士学位授权点和105个二级学科硕士学位授权点。拥有1个江苏省高校国家重点学科培育建设点，6个江苏省一级学科重点学科，3个江苏省一级学科重点建设学科，5个省优秀学科'),
(4, '西南大学', 'k004.png', '西南大学（Southwest University）简称西大，坐落于重庆市，是中华人民共和国教育部直属高校，由教育部、农业部与重庆市人民政府共建，是“双一流”世界一流学科建设高校，位列211工程、98', '重庆市沙坪坝区', '珍惜现在，别在毫无意义是事情上浪费时间', '陈明星', '文科类', '1354', 38, '1970年3月，在林彪1号令的背景下，学校上级主管单位第六机械工业部军管会下令将学校搬迁至江苏省镇江市（原总后勤部252汽车管理学校旧址）。建设了17年的上海船校校舍无偿移交给上海柴油机厂作油嘴油泵分厂。学校办学自此陷入困局。1971年2月，移师镇江的上海船舶工业学校正式更名为镇江船舶工业学校，次年', '6个江苏省一级学科重点学科，3个江苏省一级学科重点建设学科，5个省优秀学科梯队，2个江苏省高校优势学科建设工程一期项目。根据2014年6月学校官网显示，学校拥有5个国家特色专业建设点，20个江苏省品牌专业、省科教兴卫工程重点学科、省临床医学重点专科；拥有以国家级教学成果奖、国家级精品课程、国家级精品'),
(5, '河南科技大学', 'k005.png', '河南科技大学（Henan University of Science and Technology），简称“河科大”，坐落于“千年帝都，牡丹花城”、中原城市群副中心城市—洛阳，是国家国防科工局与河南省', '中国上海', '伟大不是凭空来的，而是赢得的', '张杰', '理学类', '1756', 75, '01年3月，中国农业科学院蚕业研究所（1951年建所，1979年开始招收硕士生，1986年招收博士生，50年来培养了大批高层次蚕业科技人才，建有世界上最大的国家桑蚕种资源库，是国内外蚕业科技交流中心，是我国桑蚕研究唯一的国家队）与学校合并，并继续保留中国农业科学院蚕业研究所名称。', '省高校基础课实验教学示范中心（建设点）（11个）：基础物理实验中心、心理实验中心、电工电子实验中心、EDA实验教学中心、生命化学实验中心、临床技能训练中心、计算机实验教学中心、信息与通讯工程实验教学中心、基础医学实验教学中心、数字媒体实验中心、生物技术实验中心'),
(6, '大连理工大学', 'k006.png', '大连理工大学（Dalian University of Technology），简称大工，坐落于滨城大连，是中央直管、教育部直属的副部级全国重点大学，中国著名的“四大工学院”之一。', '中国河南', '如果你不能好好的珍惜时间，南无就看看对手在不停翻动书页的手把', '王涛', '工学类', '1865', 37, '2002年3月，经省教育厅批准，学校建立民办二级学院——南徐学院，并于当年招生。同月，海军政治部与学校签定了“关于海军依托华东船舶工业学院选拔培养干部协议书”，并设立“中国人民解放军驻华东船舶工业学院后备军官选拔培训工作办公室”，学校成为当时江苏省唯一的海军后备军官培养基地。', '学校是全国精神文明建设先进单位，全国精神文明建设典型“莫文隋”精神的发源地，江苏省思想政治工作优秀单位，江苏省文明单位标兵，江苏省文明学校，全国普通高等学校毕业生就业工作先进集体和江苏省研究生招生管理工作优秀单位。校党委被评为“江苏省高校先进基层党组织”，校党校获得“江苏省红旗基层党校”称号。'),
(7, '燕山大学', 'k007.png', '燕山大学是河北省人民政府、教育部、工业和信息化部、国家国防科技工业局四方共建的全国重点大学，河北省重点支持的国家一流大学和世界一流学科建设高校，北京高科大学联盟成员。', '中国四川成都', '世界上那些最容易的事情中，浪费时间最不费力', '李梅', '农学类', '1786', 78, '2004年由原南通医学南通大学院、南通工学院、南通师范学院三所公办本科院校合并组建而成。原南通医学院、南通工学院的前身分别是私立南通医学专门学校和南通纺织专门学校，由近代著名实业家、教育家张謇先生于1912年创办。', '截止2014年6月，学校与英国、美国、德国、加拿大、澳大利亚、日本、韩国等国的34所高校和科研院所建立了友好合作关系，与美国、英国、澳大利亚等国高校合作办学，开展多个国际交流项目。'),
(8, '浙江工业大学', 'k008.png', '浙江工业大学是教育部和浙江省共建高校，浙江省属重点大学，国家"2011计划"首批14所牵头高校，首批"卓越计划"入选高校，亚洲规划院校联盟(APSA)成员(大陆仅8所)。', '中国新疆', '不抱怨不公平，一切只因履历还不够', '张静态', '医学类', '1897', 79, '南通师范学院是由原南通师范专科学校和南通教育学院于1999年3月经国家教育部批准合并组建的本科高等院校。南通师范专科学校创建于1958年，1962年停办。1976年12月经省政府批准以“扬州师范学院南通分院”名称恢复办学，1979年2月经国务院批准，恢复“南通师专科学校”校名。南通教育学院前身是南通', '学校是全国精神文明建设先进单位，全国精神文明建设典型“莫文隋”精神的发源地，江苏省思想政治工作优秀单位，江苏省文明单位标兵，江苏省文明学校，全国普通高等学校毕业生就业工作先进集体和江苏省研究生招生管理工作优秀单位。校党委被评为“江苏省高校先进基层党组织”，校党校获得“江苏省红旗基层党校”称号'),
(11, 'kkk', '1593428670.PNG', '徒呼奈何GVvv', '吃饭饭付', 'VB你 ', '吃饭饭', '返回', '9999', 88, '的法国红酒', '非常棒那就买');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `m_rcollect`
--

INSERT INTO `m_rcollect` (`rid`, `rno`, `rtype`, `ridentify`, `rtime`) VALUES
(2, '2017051604071', '1', '201705', '2020-06-27 14:19:50'),
(3, '2017051604071', '1', '201700', '2020-06-27 14:20:46'),
(7, '2017051604071', '1', '201720', '2020-06-27 14:22:32'),
(8, '2017051604071', '1', '201707', '2020-06-27 14:22:32');

-- --------------------------------------------------------

--
-- 表的结构 `m_rcollecttj`
--

CREATE TABLE IF NOT EXISTS `m_rcollecttj` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `rno` varchar(20) NOT NULL COMMENT '学号',
  `ridentify` varchar(30) NOT NULL COMMENT '相应id',
  `rtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '收藏时间',
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- 转存表中的数据 `m_rcollecttj`
--

INSERT INTO `m_rcollecttj` (`rid`, `rno`, `ridentify`, `rtime`) VALUES
(1, '2017051604071', '001', '2020-06-27 06:19:50'),
(2, '2017051604071', '002', '2020-06-27 06:20:46'),
(3, '2017051604071', '003', '2020-06-27 06:22:32'),
(4, '2017051604071', '004', '2020-06-27 06:22:32'),
(5, '2017051604071', '006', '2020-06-28 13:13:53'),
(6, '2017051604071', '009', '2020-06-28 13:13:53'),
(7, '2017051604071', '008', '2020-06-28 13:14:39'),
(8, '2017051604010', '003', '2020-06-29 04:37:01'),
(9, '2017051604010', '001', '2020-06-29 04:38:27'),
(10, '2017051604010', '014', '2020-06-29 04:51:04'),
(12, '2017051604071', '007', '2020-06-29 05:34:49'),
(13, '2017051604071', '011', '2020-07-01 07:05:38');

-- --------------------------------------------------------

--
-- 表的结构 `m_reply`
--

CREATE TABLE IF NOT EXISTS `m_reply` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `rtitleid` varchar(10) NOT NULL COMMENT '讨论序号',
  `rtitlrname` varchar(30) NOT NULL COMMENT '讨论名',
  `replyname` varchar(20) NOT NULL COMMENT '回复人姓名',
  `replyinformation` varchar(100) NOT NULL COMMENT '回复信息',
  `replytime` varchar(20) NOT NULL DEFAULT '0' COMMENT '回复时间',
  `replyhot` varchar(20) NOT NULL DEFAULT '0' COMMENT '回复热度',
  `replypersonid` varchar(5) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `m_reply`
--

INSERT INTO `m_reply` (`rid`, `rtitleid`, `rtitlrname`, `replyname`, `replyinformation`, `replytime`, `replyhot`, `replypersonid`) VALUES
(1, '1', 'CSS总结', '陈婧', '总结的太好了，鼓掌', '2020-06-28 18:29:39', '0', '1'),
(2, '1', 'CSS总结', '牟菁菁', '正好需要总结，谢谢楼主', '2020-06-28 18:30:17', '0', '2'),
(3, '1', 'CSS总结', '邓姗', '+1', '2020-06-28 18:30:46', '0', '3'),
(4, '1', 'CSS总结', '牟菁菁', '正好在找，谢谢楼主', ' ', '0', '2'),
(5, '1.htitle=', '', '邓姗', '很好，谢谢', '1593583445', '0', '3'),
(6, '1', '', '邓姗', '很有用，谢谢', '1593583742', '0', '3'),
(7, '1', '', '邓姗', '真好', '1593583978', '0', '3'),
(8, '1', '', '邓姗', '很棒', '1593587480', '0', '3');

-- --------------------------------------------------------

--
-- 表的结构 `m_selectcour`
--

CREATE TABLE IF NOT EXISTS `m_selectcour` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `sno` varchar(20) NOT NULL COMMENT '课程号',
  `sstuno` varchar(20) NOT NULL COMMENT '选课学生学号',
  `stime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '选课时间',
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- 转存表中的数据 `m_selectcour`
--

INSERT INTO `m_selectcour` (`sid`, `sno`, `sstuno`, `stime`) VALUES
(1, '201705', '2017051604071', '2020-06-27 04:38:33'),
(3, '201707', '2017051604078', '2020-02-24 15:32:49'),
(4, '201700', '2017051604071', '2020-04-24 14:32:19'),
(6, '201720', '2017051604071', '2020-02-23 23:35:29'),
(7, '201720', '2017051604003', '2020-04-24 00:39:39'),
(8, '201720', '2017051604010', '2020-02-24 07:32:49'),
(9, '201720', '2017051605101', '2020-04-24 06:32:19'),
(10, '201720', '2017051604090', '2020-02-24 05:31:49'),
(11, '201720', '2017051505021', '2020-02-24 05:31:49');

-- --------------------------------------------------------

--
-- 表的结构 `m_selectcourtj`
--

CREATE TABLE IF NOT EXISTS `m_selectcourtj` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `sno` varchar(20) NOT NULL COMMENT '课程号',
  `sstuno` varchar(20) NOT NULL COMMENT '选课学生学号',
  `stime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '选课时间',
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- 转存表中的数据 `m_selectcourtj`
--

INSERT INTO `m_selectcourtj` (`sid`, `sno`, `sstuno`, `stime`) VALUES
(16, '011', '2017051604071', '2020-06-29 04:24:05'),
(17, '001', '2017051604071', '2020-06-29 04:24:55'),
(18, '002', '2017051604071', '2020-06-29 04:25:13'),
(20, '008', '2017051604071', '2020-06-29 04:27:36'),
(21, '004', '2017051604010', '2020-06-29 04:29:58'),
(22, '001', '2017051604010', '2020-06-29 04:30:06'),
(23, '003', '2017051604010', '2020-06-29 04:41:56'),
(24, '013', '2017051604010', '2020-06-29 05:12:20'),
(25, '003', '2017051604071', '2020-07-01 06:52:59'),
(26, '007', '2017051604071', '2020-07-01 06:54:46');

-- --------------------------------------------------------

--
-- 表的结构 `m_shuji`
--

CREATE TABLE IF NOT EXISTS `m_shuji` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `sname` varchar(20) NOT NULL COMMENT '书籍名',
  `sprice` varchar(10) NOT NULL COMMENT '书籍价格',
  `spic` varchar(20) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `m_shuji`
--

INSERT INTO `m_shuji` (`sid`, `sname`, `sprice`, `spic`) VALUES
(2, '六级词汇', '23.24', 's002.png'),
(3, '核心高频词汇', '29.2', 's003.png'),
(4, '4级词汇练习', '29.2', 's004.png'),
(5, '常考词组必备', '29.2', 's005.png'),
(6, '英语阅读', '29.2', 's006.png'),
(7, '四六级写作', '29.2', 's007.png'),
(8, '奋斗', '55', '1593431498.PNG'),
(9, '热狗', '333', '1593431654.PNG');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `m_students`
--

INSERT INTO `m_students` (`sid`, `sno`, `spwd`, `salt`, `sname`, `ssex`, `sphone`, `semail`, `school`, `scolle`, `syear`, `smajor`, `sclass`, `stime`, `freeze`, `spic`) VALUES
(1, '2017051604010', 'deeae99027b128d577e4e5444a2384a4', 'f8185a', '哒哒哒', '女', '13370716041', '2836692252@qq.com', '重庆师范大学', '计算机与信息科学学院', '2017', '软件工程', '3班', '2020-06-07 03:08:47', '0', '0'),
(2, '2017051604071', 'deeae99027b128d577e4e5444a2384a4', 'f8185a', '邓姗', '女', '12345652222', '2443654765@qq.com', '重庆师范大学', '计信', '2018', '软件工程', '3班', '2020-06-07 03:08:47', '0', '1593409111.jpg'),
(3, '2017051604003', 'fd8344750226c0b9ad5631ae98b52e32', '9b8aa6', '事实上', '男', '12345652222', '2443654745@qq.com', '重庆师范大学', '地理与旅游学院', '2016', '地理', '4班', '2020-06-24 06:30:49', '0', '0'),
(4, '2017051604007', '16aff54e6ca57a8c339be63a0343d8a7', 'a6a83c', '的是', '男', '12345652222', '2443654745@qq.com', '重庆师范大学', '地理与旅游学院', '2016', '地理', '4班', '2020-06-24 06:33:14', '0', '0'),
(5, '2017051605101', 'fd8344750226c0b9ad5631ae98b52e32', '9b8aa6', '青儿', '男', '12345652222', '2443654745@qq.com', '重庆师范大学', '地理与旅游学院', '2016', '地理', '4班', '2020-06-24 06:30:49', '0', '0'),
(6, '2017051604090', '16aff54e6ca57a8c339be63a0343d8a7', 'a6a83c', '是', '男', '12345652222', '2443654745@qq.com', '重庆师范大学', '地理与旅游学院', '2016', '地理', '4班', '2020-06-24 06:33:14', '0', '0'),
(7, '2017051505021', '16aff54e6ca57a8c339be63a0343d8a7', 'a6a83c', '不是', '男', '12345652222', '2443654745@qq.com', '重庆师范大学', '地理与旅游学院', '2016', '地理', '4班', '2020-06-24 06:33:14', '1', '0');

-- --------------------------------------------------------

--
-- 表的结构 `m_tcourse`
--

CREATE TABLE IF NOT EXISTS `m_tcourse` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `tleixing` varchar(50) NOT NULL,
  `tno` varchar(20) NOT NULL,
  `tname` varchar(30) NOT NULL,
  `teachername` varchar(20) NOT NULL,
  `tprofile` varchar(50) NOT NULL,
  `tspick` varchar(5) NOT NULL DEFAULT '0',
  `tstuno` varchar(20) NOT NULL DEFAULT '0',
  `tpic` varchar(200) NOT NULL,
  `tschool` varchar(50) NOT NULL,
  `ttime` varchar(50) NOT NULL,
  `thot` varchar(50) NOT NULL,
  `tnowtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- 转存表中的数据 `m_tcourse`
--

INSERT INTO `m_tcourse` (`tid`, `tleixing`, `tno`, `tname`, `teachername`, `tprofile`, `tspick`, `tstuno`, `tpic`, `tschool`, `ttime`, `thot`, `tnowtime`) VALUES
(1, 'xihuan', '001', 'Excel+PowerBI零基础搞定数据分析', '李全龙', '办公室使用最高效率的软件，基本的数据处理，通用的数据统计，边界的可视化呈现', '0', '0', '001.png', '哈尔滨工业大学', '2020年04月27日 ~ 2021年04月27日', '1', '2020-06-12 09:10:39'),
(2, 'xihuan', '002', '网络安全', '晏怀之', '网络攻防是网络空间这个看不见硝烟的战场的永恒主题，保护网络安全需要构建完善的防御体系。课程从技术和工', '0', '0', '002.png', '北京理工大学', '2020年04月27日-2021年04月27日', '1', '2020-06-12 09:14:58'),
(3, 'xihuan', '003', '数据结构与算法', '戴博', '本课程针对学习程序设计语言之后，需要开发软件而遇到问题不知怎么处理，怎么寻找解决问题的方法，怎么存储', '0', '0', '003.png', '重庆邮电大学', '2020年04月27日-2021年04月27日', '5', '2020-06-12 09:12:19'),
(4, 'xihuan', '004', '计算思维的结构', '李凤英', '本课程是国家级精品课程“计算机科学导论”的拓展课程,课程注重计算思维核心概念之间的逻辑关系,并借助大', '0', '0', '004.png', '桂林电子科技大学', '2020年04月27日-2021年04月27日', '1', '2020-06-12 09:12:34'),
(5, 'jinrong', '005', 'Mini CFA 精品课', '王春燕', 'CFA Institute Investment Foundation Program是美国特许金融', '0', '0', '005.png', '金融修会', '2020年04月27日 ~ 2021年04月27日', '1', '2020-06-12 09:12:39'),
(6, 'jinrong', '006', '公司金融学', '徐志', '本门课程从公司这种所有制形式入手，解读公司的投资决策、融资决策以及分配决策的内在逻辑，探索公司价值最', '0', '0', '006.png', '国家精品', '2020年04月27日 ~ 2021年04月27日', '1', '2020-06-12 09:12:45'),
(7, 'jinrong', '007', '公司金融学', '徐庶祯', '江西财经大学程淑珍教授领衔的《会计学原理》课程拥有一流教学团队，本课程为国家级精品在线开放课程、省精', '0', '0', '007.png', '江西财经大学', '2020年04月27日 ~ 2021年04月27日', '1', '2020-06-12 09:12:51'),
(8, 'jinrong', '008', '经济心理学', '于永红', '为什么股民倾向出售盈利的股票而持有着亏损股票？为什么消费者会被商家的各种促销手段所套路？', '0', '0', '008.png', '中央财经大学', '2020年04月27日 ~ 2021年04月27日', '1', '2020-06-12 09:12:58'),
(9, 'yingyu', '009', '从0到20000+词汇速记营', '陈正康', '同学你真的会背单词吗？快来和我们学习吧', '0', '0', '009.png', '新东方', '2020年04月27日 ~ 2021年04月27日', '1', '2020-06-12 09:13:03'),
(10, 'yingyu', '010', '口语与演讲', '李全龙', '一语定乾坤！这是一个竞争激烈的时代，也是一个通过语言魅力展示才华和价值的时代！慧于心而秀于言,质于内', '0', '0', '010.png', '西北农业科技大学', '2020年04月27日 ~ 2021年04月27日', '1', '2020-06-12 09:13:09'),
(11, 'yingyu', '011', '大学英语词汇解析', '刘则华', '格“词”穷理，刘教授带你寻踪词汇的来龙去脉、发掘词汇的文化故事、拓展词汇的灵活运用、解码词汇的学习策', '0', '0', '011.png', '华中科技大学', '2020年04月27日 ~ 2021年04月27日', '1', '2020-06-12 09:13:15'),
(12, 'yingyu', '012', '英语文学导读', '陈婧', '面对浩瀚的英国文学作品，我们常常会疑惑从何着手。有哪些作家，我们应该了解一点点？因为如果不知道他们，', '0', '0', '012.png', '华中农业大学', '2020年04月27日 ~ 2021年04月27日', '1', '2020-06-12 09:13:21'),
(13, 'foursix', '013', '2020专八全程班', '王春燕', '深圳四级考试培训浓缩20年教学教研精华，拥有业内的知识库和教师教研队伍，设有灵活多样的课程，1对1、', '0', '0', 'f001.png', '新东方', '2020.2.4-2020.7.6', '0', '2020-06-25 01:38:48'),
(14, 'foursix', '014', '2020四级极速通关班', '邓姗', '教学中注重巩固提高与应试技巧的结合，帮你增强实力，顺利过级，冲刺高分。', '0', '0', 'f002.png', '新东方', '2020.2.4-2020.7.6', '0', '2020-06-25 01:40:22'),
(15, 'foursix', '015', '2020六级全程班', '牟菁菁', '以历年真题为基础分项教学，提炼技巧，分项突破，强化考点，总结考试规律并传授复习方法和重点。', '0', '0', 'f003.png', '新东方', '2020.2.4-2020.7.6', '0', '2020-06-25 01:41:20'),
(16, 'foursix', '016', '六级考试班', '萨芬', '用词汇基础结合考试技巧，用全面的状态突破考试。归纳解题技巧，把握考试动态，调整应试心理。', '0', '0', 'f004.png', '新东方', '2020.2.4-2020.7.6', '0', '2020-06-25 01:42:10'),
(18, 'foursix', '018', '四级小白', '秦数', '用词汇基础结合考试技巧，用全面的状态突破考试。归纳解题技巧，把握考试动态，调整应试心理。', '0', '0', 'f006.png', '新东方', '2020.2.4-2020.7.6', '0', '2020-06-25 01:44:02'),
(19, 'foursix', '019', '四级学习全程班', '李聪', '用词汇基础结合考试技巧，用全面的状态突破考试。归纳解题技巧，把握考试动态，调整应试心理。', '0', '0', 'f007.png', '新东方', '2020.2.4-2020.7.6', '0', '2020-06-25 01:44:40'),
(23, 'xihuan', '222', '的是v时代', '的的发v地方', '而儿童和他', '0', '0', '1593419636.jpg', '哥儿', '各位', '1', '2020-06-29 08:33:58');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `m_teachers`
--

INSERT INTO `m_teachers` (`tid`, `tno`, `tpwd`, `salt`, `tname`, `tsex`, `tphone`, `temail`, `tschool`, `tcolle`, `ttime`, `freeze`, `tpic`) VALUES
(1, '2017051604112', 'e70ca18890e797df0b35125e94a84c30', '6a2208', '牟菁菁', '男', '13355667788', '2845657567@qq.com', '重庆师范大学', '计算机与信息科学学院', '2020-06-10 23:26:14', '0', '0'),
(2, '2017051604333', 'e70ca18890e797df0b35125e94a84c30', '6a2208', '张煜青', '男', '13355667788', '2845657567@qq.com', '重庆师范大学', '大使馆的地方', '2020-06-10 23:26:14', '0', '0'),
(3, '2017051604033', 'e70ca18890e797df0b35125e94a84c30', '6a2208', '张三', '男', '13355667788', '2845657567@qq.com', '重庆师范大学', '大使馆的地方', '2020-06-10 23:26:14', '0', '0'),
(4, '2017051604003', 'e70ca18890e797df0b35125e94a84c30', '6a2208', '牟菁菁', '男', '13355667788', '2845657567@qq.com', '重庆师范大学', '大使馆的地方', '2020-06-10 23:26:14', '0', '0'),
(6, '4454654643511', 'e70ca18890e797df0b35125e94a84c30', '6a2208', '第三关', '男', '13355667788', '2845657567@qq.com', '重庆师范大学', '大使馆的地方', '2020-06-11 07:26:14', '1', '0');

-- --------------------------------------------------------

--
-- 表的结构 `m_tjteacher`
--

CREATE TABLE IF NOT EXISTS `m_tjteacher` (
  `jid` int(11) NOT NULL AUTO_INCREMENT,
  `jname` varchar(32) NOT NULL COMMENT '老师名称',
  `jpic` varchar(20) NOT NULL COMMENT '老师图片地址',
  `jprofile` varchar(50) NOT NULL COMMENT '老师简介',
  `tspec` varchar(50) NOT NULL COMMENT '老师主攻',
  `jjingli` varchar(500) NOT NULL,
  `teacherid` varchar(6) NOT NULL,
  PRIMARY KEY (`jid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `m_tjteacher`
--

INSERT INTO `m_tjteacher` (`jid`, `jname`, `jpic`, `jprofile`, `tspec`, `jjingli`, `teacherid`) VALUES
(1, '杨家成', 's1.jpg', '教你见词就能读，一站解决英语听读难关', '考研英语词汇', '路国平，会计学教授，硕士生导师，中国注册会计师(非执业会员)，南京审计大学瑞华审计与会计学院副院长，国家精品在线开放课程《高级财务会计》负责人,“四大”培训讲师；注册会计师考试《会计》课程江苏省主讲教师；江苏省注册会计师协会注册会计师后续教育兼职教授；教育部教师网络培训中心兼职教授。主讲《会计学基础》、《中级财务会计》、《高级财务会计》、《企业会计准则专题》等本科专业课程；《高级财务会计理论与实务》硕士研究生课程及审计署审计干部教育学院《财务会计》等课程；全国注册会计师考试《会计》课程。参与完成国家社科基金资助项目以及省部级科研项目4项，发表学术论文20余篇；主编《中级财务会计》《高级财务会计》等教材10余部。2005～2018年连续多次获得南京审计大学教学质量奖，2008年和2014年获南京审计大学校长奖教金；2008～2017年度均被评为南京审计大学学生心目中“我最喜爱的老师”； 2011年获得南京审计大学优秀共产党员；2014年获江苏省优秀教育工作者称号；制作的《高级财务会计》课件2011年获第十一届全国多媒体课件大赛优秀奖和2016年全国教育教学信息化展示高等学校多媒体要件二等', '001'),
(2, '张文丽', 's2.jpg', '为你开启词汇学习的多级火箭', '考研英语词汇', '董必荣南京审计大学 - 教授 董必荣，博士/教授，南京审计大学党委常委、副校长，财政部内部控制标准委员会咨询专家，中国高等教育学会理事会理事，教育部会计学专业教学指导委员会委员。', '002'),
(3, '李永乐', 's4.jpg', '考研数学线性代数精确导航，快乐复习，高效复习', '考研数学线性代数', '从事大学英语教学26年，主讲大学英语读写、大学英语听说等课程；由教育部、外交部借调分别前往中国驻纽约总领馆（2003-2008）和中国驻丹麦大使馆（2014-2016）随任常驻，并担任内聘工作（教育组、领事部、政治处）；担任大学英语综合教研室团队负责人，担任TED英语视听说(II)团队负责人；荣获“西安交通大学第十五届教学成果一等奖”（2017，主要成员），“西安交通大学第十六届教学成果二等奖”（2018，主要成员），“西安交通大学第十六届优秀教材二等奖”（2018，主要编者）；主持校级教改项目3项，参与校、省部级教改项目10余项；主持校级科研项目2项，省级1项，参与校、省部级科研项目10余项；主、参编教材10余部：《新思维大学英语读写教程1》（“十二五”国家级规划教材，2019，外文出版社），《大学体验英语听说教程1》（2018，高等教育出版社），《新一代大学英语基础篇2》（2018，外语教学与研究出版社），《大学英语阅读教程人文篇》（“十二五”国家级规划教材，2014，北京大学出版社），《21世纪大学英语视听说教程3》（“十二五”国家级规划教材，2011，复旦大学出版社）；主讲《新', '003'),
(4, '汤家辉', 's3.jpg', '考研数学基础复习强烈推荐，知识点基础且清晰', '考研数学高等数学', '西安交通大学外国语学院副教授，语言文化系统学在读博士。具有丰富的教学经验，2018年获得省级外语竞赛优秀指导教师特等奖、全国外语竞赛指导教师一等奖，2017-2018年作为主要成员分获校级教学成果奖一等奖和省级教学成果奖二等奖。善于在英语教学中启发学生的逻辑分析和学术写作能力，鼓励学生运用语言展示思辨能力，强调任务教学法；在多年从教过程中，形成了新颖的教学思路和主张，独特的教学风格深受学生喜爱和同行认可。研究领域为语言能力动态评估及认知诊断。', '004'),
(5, '田静', 's5.jpg', '考研英语语法权威老师，三十多年一直立足与语法讲解', '考研英语语法', '中国医师协会放射医师分会全国委员，中国医学影像技术研究会放射学分会委员，中华医学会放射学分会胸心学组成员，中华医学会消化学分会消化介入协作组成员，中华医学会浙江分会放射学会副主任委员、常委，浙江省医学会医学鉴定专家库成员，中国抗癌协会浙江分会肿瘤介入诊疗专业委员会副主任委员，浙江省生物医学工程学会放射学专业委员会副主任委员，绍兴文理学院医学院兼职教授，北美放射学会会员，', '005'),
(6, '张宇', 's6.jpg', '考研数学线性代数，讲解幽默，偏向实战', '考研数学线性代数', '自1984年开始从事医学影像学工作三十余年，期间获浙江医科大学医学硕士（1992）和医学博士（1998）学位，曾赴美国Loma Linda University Medical Center(2000年)、Mayo Clinic(2008)和Cleveland Clinic(2014)学习，掌握包括普通X线诊断学、CT、MRI、介入放射学在内的各门影像医学技术，擅长肿瘤的影像学诊断和介入放射学治疗，尤其对胸腹部病变有较深入的研究，在肺动脉栓塞的影像诊断、原发性肺隐球菌病的影像诊断、经皮肝动脉置管术、经皮中心静脉置管＋埋泵术和影像导引经皮穿刺活检/引流术等方面积累了丰富的实践经验。迄今发表学术论文100余篇，主持国家自然基金、浙江省自然基金杰出青年团队和浙江省重大科技专项计划等科研项目10余项，主编、参编电子教程、著作数部。作为一名长期服务在临床工作一线的医生，其敬业和负责的精神在院内和同行间享有一定的声誉。  ', '006'),
(7, '肖秀荣', 's7.jpg', '考研政治前命题人，历年考试大纲和政治红宝书的编写者之一', '考研政治', '1990年工作于同济大学经济与管理学院管理科学与工程系，博士，副教授研究领域：管理信息系统，电子商务，数据分析', '007'),
(8, '何凯文', 's8.jpg', '文都英语辅导教师，考研英语每日一句的笔者，主要讲授考研英语的阅读，写作', '考研英语', '1990年工作于同济大学经济与管理学院管理科学与工程系，博士，副教授研究领域：管理信息系统，电子商务，数据分析', '008'),
(9, '归还单', '1593432336.jpg', '的奋斗你放过那个船', ' 给你个发你', '然后地铁惊魂腾飞高级研究员GV看好每一个', '333');

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
