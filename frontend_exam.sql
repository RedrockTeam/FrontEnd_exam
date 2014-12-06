/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : frontend_exam

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2014-12-06 21:38:46
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for answer
-- ----------------------------
DROP TABLE IF EXISTS `answer`;
CREATE TABLE `answer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `test1_1` text,
  `test1_2` text,
  `test1_3` text,
  `test2_1` text,
  `test2_2` text,
  `test3_1` text,
  `test3_2` text,
  `test3_3` text,
  `test4_1` text,
  `test4_2` text,
  `test5_1` text,
  `test5_2` text,
  `test5_3` text,
  `test5_4` text,
  `test6_1` text,
  `test6_2` text,
  `test7_1` text,
  `test8_1` text,
  `test8_2` text,
  `test8_3` text,
  `test9_1` text,
  `test10_1` text,
  `user_number` varchar(11) DEFAULT NULL,
  `start_time` int(11) DEFAULT NULL,
  `end_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `user_number` varchar(11) NOT NULL,
  `user_session` varchar(255) DEFAULT NULL,
  `user_ip` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8;
