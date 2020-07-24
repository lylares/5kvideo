-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2020-07-24 17:26:56
-- 服务器版本： 5.6.45-log
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `www_5kvideo_cc`
--

-- --------------------------------------------------------

--
-- 表的结构 `wudu_360_vod_ct`
--

CREATE TABLE `wudu_360_vod_ct` (
  `id` int(11) UNSIGNED NOT NULL,
  `pid` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL DEFAULT '',
  `cover` varchar(255) NOT NULL DEFAULT '',
  `description` tinytext,
  `score` varchar(255) NOT NULL,
  `director` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `cat` varchar(255) NOT NULL DEFAULT '',
  `area` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `playcount` mediumint(9) DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  `islimit` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `wudu_360_vod_m`
--

CREATE TABLE `wudu_360_vod_m` (
  `id` int(11) UNSIGNED NOT NULL,
  `pid` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL DEFAULT '',
  `cover` varchar(255) NOT NULL DEFAULT '',
  `description` tinytext,
  `score` varchar(255) NOT NULL,
  `director` varchar(255) DEFAULT NULL,
  `actor` varchar(255) DEFAULT NULL,
  `cat` varchar(255) NOT NULL DEFAULT '',
  `area` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `playcount` mediumint(9) DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  `islimit` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `wudu_360_vod_tv`
--

CREATE TABLE `wudu_360_vod_tv` (
  `id` int(11) UNSIGNED NOT NULL,
  `pid` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL DEFAULT '',
  `cover` varchar(255) NOT NULL DEFAULT '',
  `description` tinytext,
  `score` varchar(255) NOT NULL,
  `director` varchar(255) DEFAULT NULL,
  `actor` varchar(255) DEFAULT NULL,
  `cat` varchar(255) NOT NULL DEFAULT '',
  `area` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `playcount` mediumint(9) DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  `islimit` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `wudu_360_vod_va`
--

CREATE TABLE `wudu_360_vod_va` (
  `id` int(11) UNSIGNED NOT NULL,
  `pid` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL DEFAULT '',
  `cover` varchar(255) NOT NULL DEFAULT '',
  `description` tinytext,
  `score` varchar(255) NOT NULL,
  `playorigin` varchar(255) DEFAULT NULL,
  `actor` varchar(255) DEFAULT NULL,
  `cat` varchar(255) NOT NULL DEFAULT '',
  `area` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `playcount` mediumint(9) DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  `islimit` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `wudu_ad`
--

CREATE TABLE `wudu_ad` (
  `id` smallint(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `pic` varchar(255) NOT NULL,
  `catid` varchar(255) DEFAULT NULL,
  `miaoshu` varchar(255) DEFAULT NULL,
  `picurl` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `wudu_adclass`
--

CREATE TABLE `wudu_adclass` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `wudu_book`
--

CREATE TABLE `wudu_book` (
  `id` int(11) NOT NULL,
  `content` text,
  `userid` varchar(11) DEFAULT NULL,
  `Reply` text,
  `time` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `wudu_fav`
--

CREATE TABLE `wudu_fav` (
  `id` int(10) UNSIGNED NOT NULL,
  `userid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `types` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `site` varchar(255) NOT NULL,
  `times` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `wudu_link`
--

CREATE TABLE `wudu_link` (
  `l_id` smallint(6) UNSIGNED NOT NULL,
  `l_name` varchar(64) NOT NULL DEFAULT '',
  `l_url` varchar(255) NOT NULL DEFAULT '',
  `l_logo` varchar(255) NOT NULL DEFAULT '',
  `l_type` tinyint(1) NOT NULL DEFAULT '0',
  `l_sort` smallint(6) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `wudu_manager`
--

CREATE TABLE `wudu_manager` (
  `m_id` smallint(6) UNSIGNED NOT NULL,
  `m_name` varchar(32) NOT NULL DEFAULT '',
  `m_password` varchar(32) NOT NULL DEFAULT '',
  `m_levels` varchar(32) NOT NULL DEFAULT '',
  `m_random` varchar(32) NOT NULL DEFAULT '',
  `m_status` tinyint(1) NOT NULL DEFAULT '0',
  `m_logintime` int(10) NOT NULL DEFAULT '0',
  `m_loginip` int(10) NOT NULL DEFAULT '0',
  `m_loginnum` smallint(6) NOT NULL DEFAULT '0',
  `createuser` varchar(255) NOT NULL,
  `createtime` datetime NOT NULL,
  `createip` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `wudu_nav`
--

CREATE TABLE `wudu_nav` (
  `id` int(11) NOT NULL,
  `n_name` varchar(255) DEFAULT NULL,
  `n_url` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `wudu_play`
--

CREATE TABLE `wudu_play` (
  `id` int(10) UNSIGNED NOT NULL,
  `display` tinyint(1) NOT NULL DEFAULT '1',
  `userid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `types` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `site` varchar(255) NOT NULL,
  `times` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `wudu_player`
--

CREATE TABLE `wudu_player` (
  `id` smallint(6) UNSIGNED NOT NULL,
  `n_name` varchar(64) NOT NULL DEFAULT '',
  `n_url` varchar(255) DEFAULT '0',
  `order` smallint(6) NOT NULL DEFAULT '0',
  `biaoshi` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `wudu_slideshow`
--

CREATE TABLE `wudu_slideshow` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `parent` varchar(255) DEFAULT NULL,
  `sorder` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `url` varchar(255) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `content` longtext,
  `type` varchar(255) NOT NULL,
  `vtype` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `wudu_system`
--

CREATE TABLE `wudu_system` (
  `id` int(11) NOT NULL,
  `sitename` varchar(255) DEFAULT NULL,
  `domain` varchar(255) DEFAULT NULL,
  `seoname` varchar(255) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `spnum` int(11) NOT NULL,
  `recnum` int(11) NOT NULL,
  `cache` varchar(255) DEFAULT NULL,
  `static` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `wxqrcode` varchar(255) DEFAULT NULL,
  `reward` varchar(255) DEFAULT NULL,
  `wuduapi` varchar(255) DEFAULT NULL,
  `playapi` text,
  `copyright` text,
  `changyan` text,
  `theme` varchar(255) DEFAULT NULL,
  `tongji` text,
  `recaton` varchar(255) DEFAULT NULL,
  `movie` varchar(255) DEFAULT NULL,
  `tv` varchar(255) DEFAULT NULL,
  `va` varchar(255) DEFAULT NULL,
  `ct` varchar(255) DEFAULT NULL,
  `pc` varchar(255) DEFAULT NULL,
  `security` varchar(255) DEFAULT NULL,
  `post` tinyint(1) DEFAULT '0',
  `postinfo` text NOT NULL,
  `info` varchar(255) DEFAULT NULL,
  `hctime` varchar(255) DEFAULT NULL,
  `background` varchar(255) DEFAULT NULL,
  `movienew` varchar(255) DEFAULT NULL,
  `ctnew` varchar(255) DEFAULT NULL,
  `vanew` varchar(255) DEFAULT NULL,
  `pay` varchar(255) DEFAULT NULL,
  `recitem` text,
  `des` varchar(255) DEFAULT NULL,
  `partner` varchar(255) DEFAULT NULL,
  `invite` varchar(255) DEFAULT NULL,
  `displayerror` tinyint(1) NOT NULL DEFAULT '0',
  `adtime` int(11) NOT NULL,
  `links` tinyint(1) NOT NULL DEFAULT '1',
  `offline` text NOT NULL,
  `qrapi` varchar(255) NOT NULL,
  `smtp` varchar(255) NOT NULL,
  `smtp_port` int(11) NOT NULL,
  `smtp_user` varchar(255) NOT NULL,
  `smtp_pwd` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `wudu_topic`
--

CREATE TABLE `wudu_topic` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `des` mediumtext NOT NULL,
  `cover` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `createtime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `wudu_topic_cat`
--

CREATE TABLE `wudu_topic_cat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `des` mediumtext NOT NULL,
  `cover` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `createtime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `wudu_topic_detail`
--

CREATE TABLE `wudu_topic_detail` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `des` mediumtext NOT NULL,
  `cover` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `cid` bigint(20) NOT NULL,
  `aid` varchar(255) NOT NULL,
  `mtype` varchar(255) NOT NULL,
  `createtime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `wudu_tvlive`
--

CREATE TABLE `wudu_tvlive` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `player` varchar(255) NOT NULL,
  `integral` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `rec` tinyint(1) NOT NULL DEFAULT '1',
  `hot` tinyint(1) NOT NULL,
  `dsc` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `score` int(11) NOT NULL,
  `seoname` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `wudu_tvlive_class`
--

CREATE TABLE `wudu_tvlive_class` (
  `c_id` smallint(6) UNSIGNED NOT NULL,
  `c_name` varchar(64) NOT NULL DEFAULT '',
  `c_pid` smallint(6) NOT NULL DEFAULT '0',
  `c_sort` smallint(6) NOT NULL DEFAULT '0',
  `c_hide` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `wudu_user`
--

CREATE TABLE `wudu_user` (
  `u_id` mediumint(8) UNSIGNED NOT NULL,
  `u_qid` varchar(32) NOT NULL DEFAULT '',
  `u_name` varchar(32) NOT NULL DEFAULT '',
  `u_email` varchar(32) NOT NULL DEFAULT '',
  `u_password` varchar(32) NOT NULL DEFAULT '',
  `role` varchar(255) NOT NULL DEFAULT 'user' COMMENT '角色',
  `activation` varchar(255) NOT NULL DEFAULT 'n' COMMENT '是否激活',
  `activatecode` varchar(255) NOT NULL,
  `u_status` tinyint(1) NOT NULL DEFAULT '1',
  `u_createtime` datetime NOT NULL,
  `u_createuser` varchar(255) NOT NULL,
  `u_createip` varchar(255) NOT NULL,
  `u_nickname` varchar(255) NOT NULL,
  `u_avatar` varchar(255) NOT NULL DEFAULT '',
  `u_qq` varchar(16) NOT NULL DEFAULT '',
  `u_phone` varchar(16) NOT NULL DEFAULT '',
  `u_flag` tinyint(1) NOT NULL DEFAULT '0',
  `u_question` varchar(255) NOT NULL DEFAULT '',
  `u_answer` varchar(255) NOT NULL DEFAULT '',
  `u_group` smallint(6) NOT NULL DEFAULT '0',
  `u_points` bigint(6) NOT NULL DEFAULT '0',
  `u_regtime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `u_logintime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `u_loginnum` smallint(6) NOT NULL DEFAULT '0',
  `u_extend` smallint(6) NOT NULL DEFAULT '0',
  `u_loginip` varchar(255) NOT NULL DEFAULT '0',
  `u_random` varchar(32) NOT NULL DEFAULT '',
  `u_fav` text NOT NULL,
  `u_plays` text NOT NULL,
  `u_downs` text NOT NULL,
  `u_start` int(10) NOT NULL DEFAULT '0',
  `u_end` int(10) NOT NULL DEFAULT '0',
  `is_vip` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `wudu_userka`
--

CREATE TABLE `wudu_userka` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `day` varchar(255) DEFAULT NULL,
  `money` varchar(255) DEFAULT NULL,
  `jifen` varchar(255) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `wudu_user_card`
--

CREATE TABLE `wudu_user_card` (
  `c_id` int(11) UNSIGNED NOT NULL,
  `c_number` varchar(16) NOT NULL DEFAULT '',
  `c_pass` varchar(8) NOT NULL DEFAULT '' COMMENT '分类',
  `c_money` int(11) NOT NULL DEFAULT '0' COMMENT '天数',
  `c_used` tinyint(1) NOT NULL DEFAULT '0',
  `c_sale` tinyint(1) NOT NULL DEFAULT '0',
  `c_user` varchar(255) DEFAULT '0',
  `c_addtime` int(10) NOT NULL DEFAULT '0',
  `c_usetime` int(10) NOT NULL DEFAULT '0',
  `c_userid` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `wudu_user_cardclass`
--

CREATE TABLE `wudu_user_cardclass` (
  `id` int(11) NOT NULL,
  `uniacid` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `card_id` varchar(255) DEFAULT NULL,
  `num` int(11) DEFAULT NULL,
  `day` int(11) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `wudu_user_group`
--

CREATE TABLE `wudu_user_group` (
  `ug_id` smallint(6) NOT NULL,
  `ug_name` varchar(32) NOT NULL DEFAULT '',
  `ug_type` varchar(255) NOT NULL DEFAULT '',
  `ug_popedom` varchar(32) NOT NULL DEFAULT '',
  `ug_upgrade` smallint(6) NOT NULL DEFAULT '0',
  `ug_popvalue` smallint(6) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `wudu_user_pay`
--

CREATE TABLE `wudu_user_pay` (
  `p_id` int(11) NOT NULL,
  `p_order` varchar(255) NOT NULL DEFAULT '0',
  `p_uid` varchar(255) NOT NULL DEFAULT '0',
  `p_price` varchar(255) NOT NULL DEFAULT '0',
  `p_time` int(10) NOT NULL DEFAULT '0',
  `p_point` varchar(255) NOT NULL DEFAULT '0',
  `p_status` tinyint(1) NOT NULL DEFAULT '0',
  `p_group` smallint(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `wudu_user_visit`
--

CREATE TABLE `wudu_user_visit` (
  `uv_id` int(11) NOT NULL,
  `uv_uid` int(11) DEFAULT '0',
  `uv_ip` int(10) NOT NULL DEFAULT '0',
  `uv_ly` varchar(128) NOT NULL DEFAULT '',
  `uv_time` int(10) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `wudu_vod`
--

CREATE TABLE `wudu_vod` (
  `id` int(11) UNSIGNED NOT NULL,
  `pid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '',
  `updated` datetime NOT NULL,
  `aname` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL DEFAULT '',
  `score` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT '',
  `director` varchar(255) NOT NULL,
  `actor` varchar(255) DEFAULT NULL,
  `content` text,
  `scontent` text,
  `seoname` varchar(255) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `integral` varchar(255) DEFAULT NULL,
  `user` varchar(11) DEFAULT NULL,
  `parent` char(11) NOT NULL DEFAULT '',
  `rec` varchar(255) DEFAULT NULL,
  `hot` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `language` varchar(255) NOT NULL,
  `mtype` varchar(255) NOT NULL,
  `player` varchar(255) NOT NULL DEFAULT '',
  `espoid` varchar(255) NOT NULL,
  `types` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `wudu_vod_class`
--

CREATE TABLE `wudu_vod_class` (
  `c_id` smallint(6) UNSIGNED NOT NULL,
  `c_name` varchar(64) NOT NULL DEFAULT '',
  `c_pid` smallint(6) NOT NULL DEFAULT '0',
  `c_sort` smallint(6) NOT NULL DEFAULT '0',
  `c_hide` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wudu_360_vod_ct`
--
ALTER TABLE `wudu_360_vod_ct`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `d_name_2` (`title`),
  ADD UNIQUE KEY `pid` (`pid`),
  ADD KEY `d_letter` (`role`),
  ADD KEY `d_name` (`title`),
  ADD KEY `d_enname` (`director`);

--
-- Indexes for table `wudu_360_vod_m`
--
ALTER TABLE `wudu_360_vod_m`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `d_name_2` (`title`),
  ADD UNIQUE KEY `pid` (`pid`),
  ADD KEY `d_letter` (`actor`),
  ADD KEY `d_name` (`title`),
  ADD KEY `d_enname` (`director`);

--
-- Indexes for table `wudu_360_vod_tv`
--
ALTER TABLE `wudu_360_vod_tv`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `d_name_2` (`title`),
  ADD UNIQUE KEY `pid` (`pid`),
  ADD KEY `d_letter` (`actor`),
  ADD KEY `d_name` (`title`),
  ADD KEY `d_enname` (`director`);

--
-- Indexes for table `wudu_360_vod_va`
--
ALTER TABLE `wudu_360_vod_va`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `d_name_2` (`title`),
  ADD UNIQUE KEY `pid` (`pid`),
  ADD KEY `d_letter` (`actor`),
  ADD KEY `d_name` (`title`),
  ADD KEY `d_enname` (`playorigin`);

--
-- Indexes for table `wudu_ad`
--
ALTER TABLE `wudu_ad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wudu_adclass`
--
ALTER TABLE `wudu_adclass`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wudu_book`
--
ALTER TABLE `wudu_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wudu_fav`
--
ALTER TABLE `wudu_fav`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `url` (`url`);

--
-- Indexes for table `wudu_link`
--
ALTER TABLE `wudu_link`
  ADD PRIMARY KEY (`l_id`),
  ADD KEY `l_sort` (`l_sort`),
  ADD KEY `l_type` (`l_type`);

--
-- Indexes for table `wudu_manager`
--
ALTER TABLE `wudu_manager`
  ADD PRIMARY KEY (`m_id`),
  ADD KEY `m_status` (`m_status`);

--
-- Indexes for table `wudu_nav`
--
ALTER TABLE `wudu_nav`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wudu_play`
--
ALTER TABLE `wudu_play`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `url` (`url`);

--
-- Indexes for table `wudu_player`
--
ALTER TABLE `wudu_player`
  ADD PRIMARY KEY (`id`),
  ADD KEY `c_sort` (`order`),
  ADD KEY `c_pid` (`n_url`);

--
-- Indexes for table `wudu_slideshow`
--
ALTER TABLE `wudu_slideshow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wudu_system`
--
ALTER TABLE `wudu_system`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wudu_topic`
--
ALTER TABLE `wudu_topic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wudu_topic_cat`
--
ALTER TABLE `wudu_topic_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wudu_topic_detail`
--
ALTER TABLE `wudu_topic_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wudu_tvlive`
--
ALTER TABLE `wudu_tvlive`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tl_name` (`name`),
  ADD UNIQUE KEY `tl_url` (`url`),
  ADD UNIQUE KEY `pid` (`pid`);

--
-- Indexes for table `wudu_tvlive_class`
--
ALTER TABLE `wudu_tvlive_class`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `c_sort` (`c_sort`),
  ADD KEY `c_pid` (`c_pid`),
  ADD KEY `c_hide` (`c_hide`);

--
-- Indexes for table `wudu_user`
--
ALTER TABLE `wudu_user`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `u_name` (`u_name`),
  ADD UNIQUE KEY `u_email` (`u_email`),
  ADD UNIQUE KEY `u_nickname` (`u_nickname`),
  ADD KEY `u_group` (`u_group`),
  ADD KEY `u_status` (`u_status`);

--
-- Indexes for table `wudu_userka`
--
ALTER TABLE `wudu_userka`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wudu_user_card`
--
ALTER TABLE `wudu_user_card`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `c_used` (`c_used`),
  ADD KEY `c_sale` (`c_sale`),
  ADD KEY `c_user` (`c_user`),
  ADD KEY `c_addtime` (`c_addtime`),
  ADD KEY `c_usetime` (`c_usetime`);

--
-- Indexes for table `wudu_user_cardclass`
--
ALTER TABLE `wudu_user_cardclass`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wudu_user_group`
--
ALTER TABLE `wudu_user_group`
  ADD PRIMARY KEY (`ug_id`),
  ADD KEY `ug_upgrade` (`ug_upgrade`),
  ADD KEY `ug_popvalue` (`ug_popvalue`);

--
-- Indexes for table `wudu_user_pay`
--
ALTER TABLE `wudu_user_pay`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `p_order` (`p_order`),
  ADD KEY `p_uid` (`p_uid`),
  ADD KEY `p_status` (`p_status`);

--
-- Indexes for table `wudu_user_visit`
--
ALTER TABLE `wudu_user_visit`
  ADD PRIMARY KEY (`uv_id`);

--
-- Indexes for table `wudu_vod`
--
ALTER TABLE `wudu_vod`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `d_name_2` (`name`),
  ADD UNIQUE KEY `pid` (`pid`),
  ADD KEY `d_letter` (`user`),
  ADD KEY `d_name` (`name`),
  ADD KEY `d_enname` (`integral`);

--
-- Indexes for table `wudu_vod_class`
--
ALTER TABLE `wudu_vod_class`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `c_sort` (`c_sort`),
  ADD KEY `c_pid` (`c_pid`),
  ADD KEY `c_hide` (`c_hide`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `wudu_360_vod_ct`
--
ALTER TABLE `wudu_360_vod_ct`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=175;

--
-- 使用表AUTO_INCREMENT `wudu_360_vod_m`
--
ALTER TABLE `wudu_360_vod_m`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2568;

--
-- 使用表AUTO_INCREMENT `wudu_360_vod_tv`
--
ALTER TABLE `wudu_360_vod_tv`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=759;

--
-- 使用表AUTO_INCREMENT `wudu_360_vod_va`
--
ALTER TABLE `wudu_360_vod_va`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=289;

--
-- 使用表AUTO_INCREMENT `wudu_ad`
--
ALTER TABLE `wudu_ad`
  MODIFY `id` smallint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- 使用表AUTO_INCREMENT `wudu_adclass`
--
ALTER TABLE `wudu_adclass`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- 使用表AUTO_INCREMENT `wudu_book`
--
ALTER TABLE `wudu_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用表AUTO_INCREMENT `wudu_fav`
--
ALTER TABLE `wudu_fav`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `wudu_link`
--
ALTER TABLE `wudu_link`
  MODIFY `l_id` smallint(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用表AUTO_INCREMENT `wudu_manager`
--
ALTER TABLE `wudu_manager`
  MODIFY `m_id` smallint(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用表AUTO_INCREMENT `wudu_nav`
--
ALTER TABLE `wudu_nav`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用表AUTO_INCREMENT `wudu_play`
--
ALTER TABLE `wudu_play`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=472;

--
-- 使用表AUTO_INCREMENT `wudu_player`
--
ALTER TABLE `wudu_player`
  MODIFY `id` smallint(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- 使用表AUTO_INCREMENT `wudu_slideshow`
--
ALTER TABLE `wudu_slideshow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- 使用表AUTO_INCREMENT `wudu_system`
--
ALTER TABLE `wudu_system`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用表AUTO_INCREMENT `wudu_topic`
--
ALTER TABLE `wudu_topic`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用表AUTO_INCREMENT `wudu_topic_cat`
--
ALTER TABLE `wudu_topic_cat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- 使用表AUTO_INCREMENT `wudu_topic_detail`
--
ALTER TABLE `wudu_topic_detail`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用表AUTO_INCREMENT `wudu_tvlive`
--
ALTER TABLE `wudu_tvlive`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=207;

--
-- 使用表AUTO_INCREMENT `wudu_tvlive_class`
--
ALTER TABLE `wudu_tvlive_class`
  MODIFY `c_id` smallint(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `wudu_user`
--
ALTER TABLE `wudu_user`
  MODIFY `u_id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- 使用表AUTO_INCREMENT `wudu_userka`
--
ALTER TABLE `wudu_userka`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用表AUTO_INCREMENT `wudu_user_card`
--
ALTER TABLE `wudu_user_card`
  MODIFY `c_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=360;

--
-- 使用表AUTO_INCREMENT `wudu_user_cardclass`
--
ALTER TABLE `wudu_user_cardclass`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- 使用表AUTO_INCREMENT `wudu_user_group`
--
ALTER TABLE `wudu_user_group`
  MODIFY `ug_id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用表AUTO_INCREMENT `wudu_user_pay`
--
ALTER TABLE `wudu_user_pay`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用表AUTO_INCREMENT `wudu_user_visit`
--
ALTER TABLE `wudu_user_visit`
  MODIFY `uv_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `wudu_vod`
--
ALTER TABLE `wudu_vod`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=654;

--
-- 使用表AUTO_INCREMENT `wudu_vod_class`
--
ALTER TABLE `wudu_vod_class`
  MODIFY `c_id` smallint(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
