/*
Navicat MySQL Data Transfer

Source Server         : 云乐互联
Source Server Version : 50557
Source Host           : 47.106.203.209:3306
Source Database       : hao

Target Server Type    : MYSQL
Target Server Version : 50557
File Encoding         : 65001

Date: 2019-01-14 19:50:55
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for aboutme
-- ----------------------------
DROP TABLE IF EXISTS `aboutme`;
CREATE TABLE `aboutme` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) DEFAULT NULL COMMENT '标题',
  `addtime` varchar(50) DEFAULT NULL COMMENT '添加时间',
  `contents` text COMMENT '内容',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='关于我表';

-- ----------------------------
-- Table structure for addserorder
-- ----------------------------
DROP TABLE IF EXISTS `addserorder`;
CREATE TABLE `addserorder` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `phone` varchar(100) DEFAULT NULL,
  `payprice` varchar(100) DEFAULT NULL,
  `paytime` varchar(50) DEFAULT NULL COMMENT '支付时间',
  `types` varchar(50) DEFAULT NULL COMMENT '购买类型',
  `uid` varchar(50) DEFAULT NULL,
  `ordernum` varchar(200) DEFAULT NULL,
  `isdel` int(2) DEFAULT '0' COMMENT '1-删除',
  `sid` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='购买增值服务表';

-- ----------------------------
-- Table structure for addserver
-- ----------------------------
DROP TABLE IF EXISTS `addserver`;
CREATE TABLE `addserver` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) DEFAULT NULL COMMENT '标题',
  `addtime` varchar(50) DEFAULT NULL COMMENT '添加时间',
  `contents` text COMMENT '服务内容',
  `titleimg` varchar(200) DEFAULT NULL COMMENT '首图',
  `price` decimal(50,2) DEFAULT NULL COMMENT '价格',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COMMENT='增值服务表';

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `adminname` varchar(50) DEFAULT NULL,
  `psw` varchar(50) DEFAULT NULL,
  `rolename` varchar(100) DEFAULT NULL COMMENT '角色名称',
  `rootnum` varchar(50) DEFAULT NULL COMMENT '所分配的权限标志',
  `rootname` varchar(200) DEFAULT NULL COMMENT '权限名称',
  `state` int(2) DEFAULT '0' COMMENT '是否停用 0-停用 1正常',
  `num` int(2) DEFAULT '0' COMMENT '受理数目',
  `iskf` int(2) DEFAULT '1' COMMENT '是否客服',
  `phone` varchar(12) DEFAULT NULL,
  `qq` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for banner
-- ----------------------------
DROP TABLE IF EXISTS `banner`;
CREATE TABLE `banner` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `imgs` text COMMENT '轮播图',
  `tourl` text COMMENT '跳转地址',
  `comment` varchar(200) DEFAULT NULL COMMENT '备注',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for baseinfo
-- ----------------------------
DROP TABLE IF EXISTS `baseinfo`;
CREATE TABLE `baseinfo` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `logo` text COMMENT '网站logo',
  `kfcode` text COMMENT '客服二维码',
  `gzhcode` text COMMENT '公众号二维码',
  `copyright` text,
  `ICPname` varchar(150) DEFAULT NULL,
  `ICPurl` varchar(150) DEFAULT NULL,
  `footinfo` varchar(220) DEFAULT NULL,
  `serphone` varchar(150) DEFAULT NULL COMMENT '客服热线',
  `serqq` varchar(150) DEFAULT NULL COMMENT '客服qq',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='网站基础信息表';

-- ----------------------------
-- Table structure for buyinfo
-- ----------------------------
DROP TABLE IF EXISTS `buyinfo`;
CREATE TABLE `buyinfo` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `buytype` varchar(20) DEFAULT NULL COMMENT '账号类型',
  `price` varchar(50) DEFAULT NULL COMMENT '价格范围',
  `fansnum` varchar(50) DEFAULT NULL COMMENT '粉丝数量',
  `rztype` varchar(5) DEFAULT NULL COMMENT '认证类型',
  `comments` text COMMENT '账号描述',
  `phone` varchar(12) DEFAULT NULL COMMENT '手机号',
  `qq` varchar(20) DEFAULT NULL COMMENT 'qq',
  `wechats` varchar(12) DEFAULT NULL COMMENT '微信',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for configs
-- ----------------------------
DROP TABLE IF EXISTS `configs`;
CREATE TABLE `configs` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `appid` varchar(100) DEFAULT NULL,
  `appSecret` varchar(120) DEFAULT NULL,
  `paynum` varchar(50) DEFAULT NULL,
  `paykey` varchar(200) DEFAULT NULL,
  `smscode` varchar(100) DEFAULT NULL,
  `smssign` varchar(50) DEFAULT NULL,
  `accesskeyid` varchar(100) DEFAULT NULL,
  `accesskeyseret` varchar(100) DEFAULT NULL,
  `addtime` int(50) DEFAULT NULL,
  `cpaddress` varchar(200) DEFAULT NULL COMMENT '公司地址',
  `phone` varchar(20) DEFAULT NULL COMMENT '网站客服电话',
  `icp` varchar(200) DEFAULT NULL COMMENT 'icp备案信息',
  `wxcode` varchar(200) DEFAULT NULL COMMENT '网站客服微信二维码',
  `kfqq` varchar(20) DEFAULT NULL COMMENT '网站客服qq',
  `mothprice` decimal(5,2) DEFAULT NULL,
  `jiprice` decimal(5,2) DEFAULT NULL,
  `yearprice` decimal(5,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for guzhi
-- ----------------------------
DROP TABLE IF EXISTS `guzhi`;
CREATE TABLE `guzhi` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL COMMENT '公众号名称',
  `wx` varchar(50) DEFAULT NULL COMMENT '公众号的微信号',
  `fansnum` varchar(50) DEFAULT NULL COMMENT '粉丝数量',
  `fansinfo` varchar(100) DEFAULT NULL COMMENT '粉丝分布',
  `hendernum` varchar(20) DEFAULT NULL COMMENT '头条阅读量',
  `chuanorzan` varchar(50) DEFAULT NULL COMMENT '原创赞赏',
  `body` varchar(32) DEFAULT NULL COMMENT '主体变更',
  `qq` varchar(20) DEFAULT NULL COMMENT 'qq',
  `wechats` varchar(12) DEFAULT NULL COMMENT '微信',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for haotype
-- ----------------------------
DROP TABLE IF EXISTS `haotype`;
CREATE TABLE `haotype` (
  `htid` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`htid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='卖号类型';

-- ----------------------------
-- Table structure for newslist
-- ----------------------------
DROP TABLE IF EXISTS `newslist`;
CREATE TABLE `newslist` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) DEFAULT NULL COMMENT '标题',
  `addtime` varchar(50) DEFAULT NULL COMMENT '添加时间',
  `contents` text COMMENT '新闻内容',
  `titleimg` varchar(200) DEFAULT NULL COMMENT '首图',
  `desc` varchar(200) DEFAULT NULL COMMENT '简要',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COMMENT='行业新闻表';

-- ----------------------------
-- Table structure for payorder
-- ----------------------------
DROP TABLE IF EXISTS `payorder`;
CREATE TABLE `payorder` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `payprice` varchar(100) DEFAULT NULL,
  `paytime` varchar(50) DEFAULT NULL COMMENT '支付时间',
  `types` varchar(50) DEFAULT NULL COMMENT '购买类型',
  `uid` varchar(50) DEFAULT NULL,
  `gid` varchar(50) DEFAULT NULL,
  `state` int(2) DEFAULT '0' COMMENT '0-待支付 1已支付',
  `ordernum` varchar(200) DEFAULT NULL,
  `isdel` int(2) DEFAULT '0' COMMENT '1-删除',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='买号表';

-- ----------------------------
-- Table structure for problist
-- ----------------------------
DROP TABLE IF EXISTS `problist`;
CREATE TABLE `problist` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) DEFAULT NULL COMMENT '标题',
  `addtime` varchar(50) DEFAULT NULL COMMENT '添加时间',
  `contents` text COMMENT '问题内容',
  `titleimg` varchar(200) DEFAULT NULL COMMENT '问题logo',
  `desc` varchar(200) DEFAULT NULL COMMENT '简要',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='疑难解答表';

-- ----------------------------
-- Table structure for roots
-- ----------------------------
DROP TABLE IF EXISTS `roots`;
CREATE TABLE `roots` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `num` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for sellinfo
-- ----------------------------
DROP TABLE IF EXISTS `sellinfo`;
CREATE TABLE `sellinfo` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `zhname` varchar(100) DEFAULT NULL COMMENT '公众号名称',
  `price` decimal(20,2) DEFAULT NULL COMMENT '价格',
  `fansnum` int(50) DEFAULT NULL COMMENT '粉丝数量',
  `regtime` varchar(50) DEFAULT NULL COMMENT '注册时间',
  `type` int(2) DEFAULT '1' COMMENT '账号类型 1-订阅号 2-服务号',
  `fortype` varchar(50) DEFAULT NULL COMMENT '所属类目',
  `fortypetext` varchar(100) DEFAULT NULL COMMENT '行业文字描述',
  `isrz` int(5) DEFAULT '0' COMMENT '0-未认证 -1个人认证 2-企业认证',
  `yuanorzan` varchar(50) DEFAULT '0' COMMENT '0-未开通原创 1-原创 2-赞赏 3-原创赞赏',
  `sexbli` varchar(12) DEFAULT '0' COMMENT '男女比例 0-平衡 1-男居多 2-女居多',
  `isliu` int(20) DEFAULT '0' COMMENT '0-未开通 1-已开通',
  `getmonth` varchar(12) DEFAULT NULL COMMENT '流量主月收入',
  `phone` varchar(12) DEFAULT NULL COMMENT '手机号',
  `UV` varchar(20) DEFAULT NULL COMMENT 'uv值',
  `headernum` int(20) DEFAULT NULL COMMENT '头条阅读',
  `weiguinum` varchar(12) DEFAULT NULL COMMENT '违规数量',
  `desc` text COMMENT '卖家说',
  `imgs` text COMMENT '账号截图',
  `kefuid` int(10) DEFAULT NULL COMMENT '所属客服id',
  `uid` int(20) DEFAULT NULL COMMENT '用户id',
  `state` int(2) DEFAULT '1' COMMENT '1-待审核 2-已通过 3-被拒绝',
  `nopassdesc` varchar(200) DEFAULT NULL COMMENT '拒绝理由',
  `istj` int(2) DEFAULT '0' COMMENT '1推荐号',
  `addtime` varchar(50) DEFAULT NULL COMMENT '发布时间',
  `oneprice` varchar(50) DEFAULT NULL COMMENT '单粉价格',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COMMENT='卖号详细表，没完';

-- ----------------------------
-- Table structure for smscode
-- ----------------------------
DROP TABLE IF EXISTS `smscode`;
CREATE TABLE `smscode` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `code` varchar(20) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `addtime` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for type
-- ----------------------------
DROP TABLE IF EXISTS `type`;
CREATE TABLE `type` (
  `tid` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COMMENT='类目类型';

-- ----------------------------
-- Table structure for userinfo
-- ----------------------------
DROP TABLE IF EXISTS `userinfo`;
CREATE TABLE `userinfo` (
  `uid` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `psw` varchar(100) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `wx` varchar(50) DEFAULT NULL,
  `qq` varchar(50) DEFAULT NULL,
  `addtime` varchar(30) DEFAULT NULL,
  `paytime` varchar(50) DEFAULT NULL COMMENT '开通会员时间',
  `vipstate` int(3) DEFAULT '0' COMMENT '会员状态 0-普通会员 1-月卡会员 2-季卡会员 3-终身会员 ',
  `logintime` varchar(50) DEFAULT NULL,
  `loginip` varchar(50) DEFAULT NULL,
  `qqemail` varchar(50) DEFAULT NULL,
  `looknum` int(2) DEFAULT '0' COMMENT '查看商家联系方式的次数',
  `lookid` int(2) DEFAULT NULL COMMENT '当前查看的账号id',
  `openid` varchar(200) DEFAULT NULL,
  `headimg` varchar(200) DEFAULT NULL,
  `nickname` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COMMENT='用户信息表';

-- ----------------------------
-- Table structure for viporder
-- ----------------------------
DROP TABLE IF EXISTS `viporder`;
CREATE TABLE `viporder` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `phone` varchar(100) DEFAULT NULL,
  `payprice` varchar(100) DEFAULT NULL,
  `paytime` varchar(50) DEFAULT NULL COMMENT '支付时间',
  `types` varchar(50) DEFAULT NULL COMMENT '购买类型',
  `uid` varchar(50) DEFAULT NULL,
  `ordernum` varchar(200) DEFAULT NULL,
  `isdel` int(2) DEFAULT '0' COMMENT '1-删除',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COMMENT='会员购买表';

-- ----------------------------
-- Table structure for xieyi
-- ----------------------------
DROP TABLE IF EXISTS `xieyi`;
CREATE TABLE `xieyi` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) DEFAULT NULL COMMENT '标题',
  `addtime` varchar(50) DEFAULT NULL COMMENT '添加时间',
  `contents` text COMMENT '协议内容',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='协议表';
