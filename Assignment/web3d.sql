/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 80012 (8.0.12)
 Source Host           : localhost:3306
 Source Schema         : web3d

 Target Server Type    : MySQL
 Target Server Version : 80012 (8.0.12)
 File Encoding         : 65001

 Date: 14/05/2024 09:06:55
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for company
-- ----------------------------
DROP TABLE IF EXISTS `company`;
CREATE TABLE `company`  (
  `company_id` int(11) NOT NULL AUTO_INCREMENT,
  `company_history` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `company_slogan` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`company_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of company
-- ----------------------------
INSERT INTO `company` VALUES (1, 'On May 8, 1886, Dr. John Pemberton served the world’s first Coca-Cola at Jacobs\' Pharmacy in Atlanta, Ga. From that one iconic drink, we’ve evolved into a total beverage company. More than 1.9 billion servings of our drinks are enjoyed in more than 200 countries each day. And it’s the 700,000 individuals employed by The Coca-Cola Company and 225+ bottling partners that help to deliver refreshment across the globe.\r\n\r\nOur people are as diverse as our communities, with 700,000+ employees across company and bottling partners.\r\n\r\nPrioritizing sustainability in our operations and communities. We do business the right way, not just the easy way. Learn more about our sustainable and ethical ways of working.The Coca-Cola System Local bottlers work with us to bring our Coca‑Cola brand drinks to wherever you are in the world. Over 225 bottling partners across 900 bottling plants make up the Coca‑Cola system and help us deliver refreshment globally.\r\n\r\nDiversity, Equity and Inclusion Our people create a culture of inclusion, curiosity and diversity — at work and in our communities.History of The Coca-Cola Company We celebrate our company’s rich history. Since its birth at a soda fountain in downtown Atlanta in 1886, Coca‑Cola has been a catalyst for social interaction and inspired innovation. Discover the unique moments from our past, like the evolution of the iconic Coca-Cola bottle, the lovable Coca-Cola Santa Claus, and more.', 'Our purpose and passion have always been refreshment');

-- ----------------------------
-- Table structure for contacts
-- ----------------------------
DROP TABLE IF EXISTS `contacts`;
CREATE TABLE `contacts`  (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `contact_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `contact_info` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `contact_subject` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `contact_content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  PRIMARY KEY (`contact_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 16 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of contacts
-- ----------------------------
INSERT INTO `contacts` VALUES (1, '111', '222', '333', '444');
INSERT INTO `contacts` VALUES (2, 'test', 'test', 'test', 'test');
INSERT INTO `contacts` VALUES (3, 'hah', 'HAA', 'AHSD', 'ASDKHFA');
INSERT INTO `contacts` VALUES (4, '12', '12', '12', '12');
INSERT INTO `contacts` VALUES (5, '555', '555', '555', '555');
INSERT INTO `contacts` VALUES (6, '11111111', '11111111', '11111111', '11111111');
INSERT INTO `contacts` VALUES (7, '121', '1212', '1212', '121 2');
INSERT INTO `contacts` VALUES (8, '2', '2', '2', '2');
INSERT INTO `contacts` VALUES (9, '1', '1', '1', '1');
INSERT INTO `contacts` VALUES (10, '', '', '', '');
INSERT INTO `contacts` VALUES (11, '', '', '', '');
INSERT INTO `contacts` VALUES (12, '', '', '', '');
INSERT INTO `contacts` VALUES (13, '12', '12', '12', '12');
INSERT INTO `contacts` VALUES (14, 'hello', 'hello', 'hello', 'hello');
INSERT INTO `contacts` VALUES (15, '', '', '', '');

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products`  (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_image_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `product_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `product_description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `product_model_path` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`product_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES (1, 'aimg.png', 'BARQ\'S ROOT BEER', 'Barq’s has bite! Do you know why? Well, it’s unique Barq’s spice is what makes this root beer soda truly original and truly tasty, complete with a caffeine kick. Not to mention the full-bodied flavor that is so distinct and different it can only be Barq’s', 'amodel.x3d');
INSERT INTO `products` VALUES (2, 'bimg.png', 'TOPO CHICO MINERAL WATER', 'Topo Chico Sparkling Mineral Water has been bottled at the source in Monterrey, Mexico, since 1985. Its natural mineral composition is great for quenching thirst.', 'bmodel.x3d');
INSERT INTO `products` VALUES (3, 'cimg.png', 'PEACH CITRUS', 'It\'s the grapefruit flavor you know with a crisp peach taste you\'ll love. It\'s a flavor experience born of sweet and citrus blends, with no sugar, no caffeine, and no calories.', 'cmodel.x3d');

SET FOREIGN_KEY_CHECKS = 1;
