/*
Navicat MySQL Data Transfer

Source Server         : mydemo
Source Server Version : 50547
Source Host           : localhost:3306
Source Database       : hao

Target Server Type    : MYSQL
Target Server Version : 50547
File Encoding         : 65001

Date: 2018-12-15 19:37:28
*/

SET FOREIGN_KEY_CHECKS=0;

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'admin', 'admin', '超级管理员', '1,2,3,4,5', '管理员管理--配置管理--轮播图管理--用户管理--类型管理', '1');
INSERT INTO `admin` VALUES ('4', '小龙', '123456', '管理员', '2,3', '配置管理--轮播图管理', '0');
INSERT INTO `admin` VALUES ('5', '小龙哥', '111111', '客服', '3,4', '轮播图管理--用户管理', '0');
INSERT INTO `admin` VALUES ('6', 'login', '111111', '测试角色', '1,3,4', '管理员管理--轮播图管理--用户管理', '0');

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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of banner
-- ----------------------------
INSERT INTO `banner` VALUES ('8', '/yikehao/public/static/upLoder/20181215/201812151530122d2a145c2fabf60b.png', 'http://cao.itxiaolong.cn', '');
INSERT INTO `banner` VALUES ('10', '/yikehao/public/static/upLoder/20181215/2018121515312713ee695a2e779584.jpeg', 'http://www.baidu.com', '');

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
-- Records of baseinfo
-- ----------------------------

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
-- Records of buyinfo
-- ----------------------------

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of configs
-- ----------------------------

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
-- Records of guzhi
-- ----------------------------

-- ----------------------------
-- Table structure for haotype
-- ----------------------------
DROP TABLE IF EXISTS `haotype`;
CREATE TABLE `haotype` (
  `htid` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`htid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='卖号类型';

-- ----------------------------
-- Records of haotype
-- ----------------------------

-- ----------------------------
-- Table structure for newslist
-- ----------------------------
DROP TABLE IF EXISTS `newslist`;
CREATE TABLE `newslist` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) DEFAULT NULL COMMENT '标题',
  `addtime` varchar(50) DEFAULT NULL COMMENT '添加时间',
  `contents` text COMMENT '新闻内容',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='行业新闻表';

-- ----------------------------
-- Records of newslist
-- ----------------------------

-- ----------------------------
-- Table structure for problist
-- ----------------------------
DROP TABLE IF EXISTS `problist`;
CREATE TABLE `problist` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) DEFAULT NULL COMMENT '标题',
  `addtime` varchar(50) DEFAULT NULL COMMENT '添加时间',
  `contents` text COMMENT '问题内容',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='疑难解答表';

-- ----------------------------
-- Records of problist
-- ----------------------------

-- ----------------------------
-- Table structure for roots
-- ----------------------------
DROP TABLE IF EXISTS `roots`;
CREATE TABLE `roots` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `num` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of roots
-- ----------------------------
INSERT INTO `roots` VALUES ('1', '管理员管理', '1');
INSERT INTO `roots` VALUES ('2', '配置管理', '2');
INSERT INTO `roots` VALUES ('3', '轮播图管理', '3');
INSERT INTO `roots` VALUES ('4', '用户管理', '4');
INSERT INTO `roots` VALUES ('5', '类型管理', null);

-- ----------------------------
-- Table structure for sellinfo
-- ----------------------------
DROP TABLE IF EXISTS `sellinfo`;
CREATE TABLE `sellinfo` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `fansnum` varchar(50) DEFAULT NULL COMMENT '粉丝数量',
  `type` varchar(20) DEFAULT NULL COMMENT '账号类型',
  `sexbli` varchar(12) DEFAULT NULL COMMENT '男女比例',
  `istrue` varchar(5) DEFAULT NULL COMMENT '是否认证',
  `regtime` varchar(50) DEFAULT NULL COMMENT '注册时间',
  `isliu` varchar(20) DEFAULT NULL COMMENT '是否开启流量主',
  `getmonth` varchar(12) DEFAULT NULL COMMENT '流量主月收入',
  `weiguinum` varchar(12) DEFAULT NULL COMMENT '违规数量',
  `body` varchar(12) DEFAULT NULL COMMENT '主体类型',
  `yuanorzan` varchar(50) DEFAULT NULL COMMENT '原创还是赞赏',
  `fortype` varchar(50) DEFAULT NULL COMMENT '所属类目',
  `headernum` int(20) DEFAULT NULL COMMENT '头条阅读',
  `price` varchar(20) DEFAULT NULL COMMENT '价格',
  `desc` text COMMENT '卖家说',
  `imgs` text COMMENT '账号截图',
  `kefuid` int(10) DEFAULT NULL COMMENT '所属客服id',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='卖号详细表，没完';

-- ----------------------------
-- Records of sellinfo
-- ----------------------------

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
-- Records of type
-- ----------------------------
INSERT INTO `type` VALUES ('1', '搞笑');
INSERT INTO `type` VALUES ('2', '娱乐');
INSERT INTO `type` VALUES ('3', '汽车');
INSERT INTO `type` VALUES ('4', '财经');
INSERT INTO `type` VALUES ('5', '母婴');
INSERT INTO `type` VALUES ('6', '电商');
INSERT INTO `type` VALUES ('7', '本地');
INSERT INTO `type` VALUES ('8', '两性');
INSERT INTO `type` VALUES ('9', '电影');
INSERT INTO `type` VALUES ('10', '视频');
INSERT INTO `type` VALUES ('11', '教育');
INSERT INTO `type` VALUES ('12', '美食');
INSERT INTO `type` VALUES ('13', '旅游');
INSERT INTO `type` VALUES ('14', '情感');
INSERT INTO `type` VALUES ('15', '健身');
INSERT INTO `type` VALUES ('16', '养生');
INSERT INTO `type` VALUES ('17', '金融');
INSERT INTO `type` VALUES ('18', '游戏');

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
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户信息表';

-- ----------------------------
-- Records of userinfo
-- ----------------------------
