/*
Navicat MySQL Data Transfer

Source Server         : EWMANACC
Source Server Version : 100410
Source Host           : localhost:3306
Source Database       : mvc_assignment

Target Server Type    : MYSQL
Target Server Version : 100410
File Encoding         : 65001

Date: 2021-08-15 03:35:18
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `number` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `user_password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`number`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'Yohan', 'Nayanajith', '123');
INSERT INTO `users` VALUES ('2', 'Minura', 'Rathnayake', '456');
INSERT INTO `users` VALUES ('3', 'Kumud', 'Nethmal', '789');
INSERT INTO `users` VALUES ('4', 'Suwasana', 'Dammithu', '4752');
INSERT INTO `users` VALUES ('5', 'saman', 'Rathana', '78+');
INSERT INTO `users` VALUES ('6', 'Rohitha', 'Dias', 'tyah');
INSERT INTO `users` VALUES ('7', 'Bathiya', 'Silva', '785');
INSERT INTO `users` VALUES ('8', 'PKN', 'Perera', '222');
INSERT INTO `users` VALUES ('9', 'Renumala', 'Alwis', '754');
INSERT INTO `users` VALUES ('10', 'Ajith', 'Athukorala', '1111');
