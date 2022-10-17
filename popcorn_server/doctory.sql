/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 50642
 Source Host           : localhost:3306
 Source Schema         : water

 Target Server Type    : MySQL
 Target Server Version : 50642
 File Encoding         : 65001

 Date: 15/09/2022 17:40:22
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for alarm_config
-- ----------------------------
DROP TABLE IF EXISTS `alarm_config`;
CREATE TABLE `alarm_config`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `instance_id` int(11) DEFAULT NULL COMMENT '设备Id',
  `height_min` double(11, 3) DEFAULT 0.000 COMMENT '水位/米',
  `ph_min` double(11, 2) DEFAULT 0.00 COMMENT 'ph',
  `temp_min` double(11, 1) DEFAULT 0.0 COMMENT '温度',
  `tds_min` int(11) DEFAULT 0 COMMENT 'tds',
  `height_max` double(11, 3) DEFAULT 0.000 COMMENT '水位/米',
  `ph_max` double(11, 2) DEFAULT 0.00 COMMENT 'ph',
  `temp_max` double(11, 1) DEFAULT 0.0 COMMENT '温度',
  `tds_max` int(11) DEFAULT 0 COMMENT 'tds',
  `updated_at` datetime(0) NOT NULL,
  `created_at` datetime(0) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of alarm_config
-- ----------------------------
INSERT INTO `alarm_config` VALUES (7, 7, 30.330, 1.10, 10.5, 40, 40.880, 9.90, 40.5, 50, '2022-08-29 14:08:07', '2022-08-29 12:24:57');

-- ----------------------------
-- Table structure for alarm_data
-- ----------------------------
DROP TABLE IF EXISTS `alarm_data`;
CREATE TABLE `alarm_data`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `instance_id` int(11) DEFAULT NULL COMMENT '设备id',
  `data_id` int(11) DEFAULT NULL COMMENT '设备的数据id',
  `type` int(11) DEFAULT NULL COMMENT '指标名称 0 水温 1 水位 2 ph 3 tds',
  `alarm_range` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL COMMENT '告警范围，需要加单位',
  `alarm_value` double(11, 3) DEFAULT NULL COMMENT '告警值',
  `alarm_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL COMMENT '告警类型：上限、下限',
  `updated_at` datetime(0) NOT NULL,
  `created_at` datetime(0) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 20 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of alarm_data
-- ----------------------------
INSERT INTO `alarm_data` VALUES (17, 7, 16, 1, '30.33~40.88', 100.000, '超上限预警', '2022-08-31 01:31:58', '2022-08-31 01:31:58');
INSERT INTO `alarm_data` VALUES (18, 7, 16, 2, '1.1~9.9', 0.000, '超下限预警', '2022-08-31 01:31:58', '2022-08-31 01:31:58');
INSERT INTO `alarm_data` VALUES (19, 7, 16, 3, '40~50', 0.000, '超下限预警', '2022-08-31 01:31:58', '2022-08-31 01:31:58');

-- ----------------------------
-- Table structure for category
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `desc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `sort` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `updated_at` datetime(0) DEFAULT NULL,
  `created_at` datetime(0) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES (1, '中药', '1', '2', '2022-09-14 16:25:10', NULL);
INSERT INTO `category` VALUES (3, '西药', '1', '0', '2022-09-14 16:25:31', '2022-09-14 16:25:25');

-- ----------------------------
-- Table structure for customer
-- ----------------------------
DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `avatar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `age` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `sex` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL COMMENT '男0 女1',
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL COMMENT '手机号',
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL COMMENT '家庭住址',
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL COMMENT '邮箱',
  `desc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL COMMENT '描述',
  `updated_at` datetime(0) NOT NULL,
  `created_at` datetime(0) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of customer
-- ----------------------------
INSERT INTO `customer` VALUES (1, '张三', '/public/uploads/avatar/20229/202291508bd73991c252d2.jpg', '69', '男', '17394067121', '阿斯顿撒的', '123@qq.com', '122121', '2022-09-14 16:09:35', '2022-09-14 16:08:39');

-- ----------------------------
-- Table structure for customer_record
-- ----------------------------
DROP TABLE IF EXISTS `customer_record`;
CREATE TABLE `customer_record`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `updated_at` datetime(0) NOT NULL,
  `created_at` datetime(0) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for instance
-- ----------------------------
DROP TABLE IF EXISTS `instance`;
CREATE TABLE `instance`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '设备名称',
  `updated_at` datetime(0) DEFAULT NULL COMMENT '更新时间',
  `created_at` datetime(0) DEFAULT NULL COMMENT '创建时间',
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '在线状态0 离线 1在线',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of instance
-- ----------------------------
INSERT INTO `instance` VALUES (7, '1号设备', '2022-08-29 12:24:16', '2022-08-29 12:24:16', 1);

-- ----------------------------
-- Table structure for instance_data
-- ----------------------------
DROP TABLE IF EXISTS `instance_data`;
CREATE TABLE `instance_data`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `instance_id` int(11) DEFAULT NULL COMMENT '设备Id',
  `height` double(11, 3) NOT NULL DEFAULT 0.000 COMMENT '水位/米',
  `ph` double(11, 2) NOT NULL COMMENT 'ph',
  `temp` double(11, 1) NOT NULL COMMENT '温度',
  `tds` int(11) NOT NULL COMMENT 'tds',
  `date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '数据产生时间',
  `updated_at` datetime(0) NOT NULL,
  `created_at` datetime(0) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 17 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of instance_data
-- ----------------------------
INSERT INTO `instance_data` VALUES (16, 7, 100.000, 0.00, 40.0, 0, '1', '2022-08-31 01:31:58', '2022-08-31 01:31:58');

-- ----------------------------
-- Table structure for instance_data_future
-- ----------------------------
DROP TABLE IF EXISTS `instance_data_future`;
CREATE TABLE `instance_data_future`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `instance_id` int(11) DEFAULT NULL COMMENT '设备Id',
  `height` double(11, 3) NOT NULL DEFAULT 0.000 COMMENT '水位/米',
  `ph` double(11, 2) NOT NULL COMMENT 'ph',
  `temp` double(11, 1) NOT NULL COMMENT '温度',
  `tds` int(11) NOT NULL COMMENT 'tds',
  `date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '数据产生时间',
  `updated_at` datetime(0) NOT NULL,
  `created_at` datetime(0) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for map
-- ----------------------------
DROP TABLE IF EXISTS `map`;
CREATE TABLE `map`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `long` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `lat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `updated_at` datetime(0) DEFAULT NULL,
  `created_at` datetime(0) DEFAULT NULL,
  `desc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of map
-- ----------------------------
INSERT INTO `map` VALUES (1, '设备1', '119.687522', '32.558174', '2022-08-29 05:37:22', '2022-08-29 04:59:52', '1221', '0001');

-- ----------------------------
-- Table structure for permissions
-- ----------------------------
DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `desc` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '' COMMENT '权限描述',
  `type` tinyint(1) UNSIGNED NOT NULL DEFAULT 0 COMMENT '权限类型(0:路由权限 1:api权限)',
  `method` char(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL COMMENT '请求方式get,post等(仅api权限生效)',
  `icon` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT '' COMMENT '菜单图标(仅路由权限生效, 如果为空则不会显示在侧边栏)',
  `path` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL COMMENT '权限地址(type=0前端url, type=1服务端api地址)',
  `status` tinyint(1) UNSIGNED DEFAULT 0 COMMENT '权限状态(0: 正常 1:锁定)',
  `pid` int(10) UNSIGNED DEFAULT 0 COMMENT '路由的上级路由ID(0:表示顶级路由)',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 54 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci COMMENT = 'rbac-权限表' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of permissions
-- ----------------------------
INSERT INTO `permissions` VALUES (46, '门诊管理', 0, '', 'el-icon-phone-outline', '', 0, 0);
INSERT INTO `permissions` VALUES (2, '用户列表', 0, NULL, '', '/users', 0, 31);
INSERT INTO `permissions` VALUES (4, '角色管理', 0, NULL, '', '/roles', 0, 31);
INSERT INTO `permissions` VALUES (5, '权限管理', 0, NULL, '', '/permissions', 0, 31);
INSERT INTO `permissions` VALUES (31, '后台管理', 0, '', 'el-icon-s-tools', '', 0, 0);
INSERT INTO `permissions` VALUES (47, '挂号列表', 0, '', '', '/doctor-register', 0, 46);
INSERT INTO `permissions` VALUES (48, '药品管理', 0, '', 'el-icon-s-goods el-i', '', 0, 0);
INSERT INTO `permissions` VALUES (49, '药品分类', 0, '', '', '/category', 0, 48);
INSERT INTO `permissions` VALUES (50, '药品列表', 0, '', '', '/product', 0, 48);
INSERT INTO `permissions` VALUES (51, '客户管理', 0, '', 'el-icon-user-solid', '', 0, 0);
INSERT INTO `permissions` VALUES (52, '客户列表', 0, '', '', '/customer', 0, 51);
INSERT INTO `permissions` VALUES (53, '病历管理', 0, '', '', '/doctor-rx', 0, 46);

-- ----------------------------
-- Table structure for product
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `sub_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL COMMENT '别名',
  `category_id` int(11) NOT NULL,
  `unit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL COMMENT '单位',
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL COMMENT '规格',
  `price` decimal(10, 2) DEFAULT NULL COMMENT '价格',
  `count` int(11) DEFAULT NULL COMMENT '数量',
  `start_time` datetime(0) DEFAULT NULL,
  `end_time` datetime(0) DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `desc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL COMMENT '描述',
  `avatar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `updated_at` datetime(0) NOT NULL,
  `created_at` datetime(0) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` VALUES (2, '当归', '当归', 1, '克', '10', 12.00, NULL, '2022-09-14 17:34:11', '2022-09-14 17:34:15', '', '', '/public/uploads/avatar/20229/2022915134f55a8bf48bc68.jpg', '2022-09-14 17:34:22', '2022-09-14 17:34:22');

-- ----------------------------
-- Table structure for product_record
-- ----------------------------
DROP TABLE IF EXISTS `product_record`;
CREATE TABLE `product_record`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `doctor_id` int(11) DEFAULT NULL COMMENT '处理人id',
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL COMMENT '0 减 1加',
  `product_id` int(11) DEFAULT NULL,
  `count` int(11) DEFAULT NULL,
  `desc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL COMMENT '0手动修改库存/ 1医生开处方',
  `updated_at` datetime(0) NOT NULL,
  `created_at` datetime(0) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for register
-- ----------------------------
DROP TABLE IF EXISTS `register`;
CREATE TABLE `register`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `doctor_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `rx_id` int(11) DEFAULT NULL,
  `updated_at` datetime(0) NOT NULL,
  `created_at` datetime(0) NOT NULL,
  `state` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL COMMENT '是否就诊 是或者否\r\n',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of register
-- ----------------------------
INSERT INTO `register` VALUES (1, '1234', NULL, 0, NULL, '2022-09-15 05:16:11', '2022-09-15 05:16:11', '否');
INSERT INTO `register` VALUES (2, '1234', NULL, 1, NULL, '2022-09-15 09:21:57', '2022-09-15 05:16:50', '是');
INSERT INTO `register` VALUES (3, '1234', NULL, 1, NULL, '2022-09-15 08:45:50', '2022-09-15 08:45:50', '否');
INSERT INTO `register` VALUES (4, '2022091516595235291', NULL, 1, NULL, '2022-09-15 09:17:59', '2022-09-15 08:59:52', '是');

-- ----------------------------
-- Table structure for role_permission
-- ----------------------------
DROP TABLE IF EXISTS `role_permission`;
CREATE TABLE `role_permission`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `permission_id` int(10) UNSIGNED NOT NULL COMMENT '权限ID',
  `role_id` int(10) UNSIGNED NOT NULL COMMENT '角色ID',
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `role_key`(`role_id`) USING BTREE,
  INDEX `permission_key`(`permission_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 453 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci COMMENT = 'rbac-角色权限多对多中间表' ROW_FORMAT = Fixed;

-- ----------------------------
-- Records of role_permission
-- ----------------------------
INSERT INTO `role_permission` VALUES (440, 52, 2);
INSERT INTO `role_permission` VALUES (439, 51, 2);
INSERT INTO `role_permission` VALUES (452, 52, 1);
INSERT INTO `role_permission` VALUES (451, 51, 1);
INSERT INTO `role_permission` VALUES (450, 50, 1);
INSERT INTO `role_permission` VALUES (449, 49, 1);
INSERT INTO `role_permission` VALUES (448, 48, 1);
INSERT INTO `role_permission` VALUES (438, 53, 2);
INSERT INTO `role_permission` VALUES (437, 47, 2);
INSERT INTO `role_permission` VALUES (436, 46, 2);
INSERT INTO `role_permission` VALUES (447, 5, 1);
INSERT INTO `role_permission` VALUES (446, 4, 1);
INSERT INTO `role_permission` VALUES (445, 2, 1);
INSERT INTO `role_permission` VALUES (444, 31, 1);
INSERT INTO `role_permission` VALUES (443, 53, 1);
INSERT INTO `role_permission` VALUES (442, 47, 1);
INSERT INTO `role_permission` VALUES (441, 46, 1);

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles`  (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '角色名称',
  `role_desc` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL COMMENT '角色描述',
  `status` tinyint(1) UNSIGNED NOT NULL DEFAULT 0 COMMENT '角色状态(0: 可用 1:不可用)',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci COMMENT = 'rbac-角色表' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES (1, '超级管理员', '拥有所有权限', 0);
INSERT INTO `roles` VALUES (2, '普通用户', '查看一些数据', 0);

-- ----------------------------
-- Table structure for rx
-- ----------------------------
DROP TABLE IF EXISTS `rx`;
CREATE TABLE `rx`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) DEFAULT NULL,
  `doctor_id` int(11) DEFAULT NULL,
  `register_id` int(11) DEFAULT NULL,
  `value1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `value2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `value3` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `value4` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `product_list` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci COMMENT '处方药品',
  `updated_at` datetime(0) NOT NULL,
  `created_at` datetime(0) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of rx
-- ----------------------------
INSERT INTO `rx` VALUES (1, 1, 1, 4, '1', '1', '1', '', NULL, '2022-09-15 09:14:50', '2022-09-15 09:14:50');
INSERT INTO `rx` VALUES (2, 1, 1, 4, '1', '1', '1', '', '[{\"id\":2,\"category_id\":1,\"name\":\"当归\",\"sub_name\":\"当归\",\"type\":\"10\",\"unit\":\"克\",\"price\":\"12.00\",\"count\":1,\"desc\":\"\",\"start_time\":\"2022-09-14T17:34:11.000Z\",\"end_time\":\"2022-09-14T17:34:15.000Z\",\"address\":\"\",\"avatar\":\"/public/uploads/avatar/20229/2022915134f55a8bf48bc68.jpg\",\"created_at\":\"2022-09-14T17:34:22.000Z\",\"updated_at\":\"2022-09-14T17:34:22.000Z\"}]', '2022-09-15 09:15:26', '2022-09-15 09:15:26');
INSERT INTO `rx` VALUES (3, 1, 1, 4, '1', '1', '1', '', '[{\"id\":2,\"category_id\":1,\"name\":\"当归\",\"sub_name\":\"当归\",\"type\":\"10\",\"unit\":\"克\",\"price\":\"12.00\",\"count\":1,\"desc\":\"\",\"start_time\":\"2022-09-14T17:34:11.000Z\",\"end_time\":\"2022-09-14T17:34:15.000Z\",\"address\":\"\",\"avatar\":\"/public/uploads/avatar/20229/2022915134f55a8bf48bc68.jpg\",\"created_at\":\"2022-09-14T17:34:22.000Z\",\"updated_at\":\"2022-09-14T17:34:22.000Z\"}]', '2022-09-15 09:17:09', '2022-09-15 09:17:09');
INSERT INTO `rx` VALUES (4, 1, 1, 4, '1', '1', '1', '', '[{\"id\":2,\"category_id\":1,\"name\":\"当归\",\"sub_name\":\"当归\",\"type\":\"10\",\"unit\":\"克\",\"price\":\"12.00\",\"count\":1,\"desc\":\"\",\"start_time\":\"2022-09-14T17:34:11.000Z\",\"end_time\":\"2022-09-14T17:34:15.000Z\",\"address\":\"\",\"avatar\":\"/public/uploads/avatar/20229/2022915134f55a8bf48bc68.jpg\",\"created_at\":\"2022-09-14T17:34:22.000Z\",\"updated_at\":\"2022-09-14T17:34:22.000Z\"}]', '2022-09-15 09:17:59', '2022-09-15 09:17:59');
INSERT INTO `rx` VALUES (5, 1, 1, 2, '', '', '', '', '[]', '2022-09-15 09:21:57', '2022-09-15 09:21:57');

-- ----------------------------
-- Table structure for user_role
-- ----------------------------
DROP TABLE IF EXISTS `user_role`;
CREATE TABLE `user_role`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL COMMENT '用户ID',
  `role_id` int(11) DEFAULT NULL COMMENT '角色ID',
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `user_id`(`user_id`) USING BTREE,
  INDEX `role_id`(`role_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 86 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci COMMENT = 'rbac-用户角色多对多中间表' ROW_FORMAT = Fixed;

-- ----------------------------
-- Records of user_role
-- ----------------------------
INSERT INTO `user_role` VALUES (83, 3, 1);
INSERT INTO `user_role` VALUES (82, 2, 2);
INSERT INTO `user_role` VALUES (81, 1, 1);
INSERT INTO `user_role` VALUES (85, 10, 2);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '用户名',
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL COMMENT '用户密码',
  `email` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '用户邮箱',
  `created_at` datetime(0) NOT NULL ON UPDATE CURRENT_TIMESTAMP(0) COMMENT '注册时间',
  `status` tinyint(1) UNSIGNED NOT NULL DEFAULT 0 COMMENT '0:正常 1:锁定',
  `avatar` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT '' COMMENT '用户头像',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci COMMENT = 'rbac-用户表' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'admin', '$2b$10$RgbaCU24JbeyoRN6o7ntn.qA3Zc2o2khe6W38gYU4vwipFG37KxnG', 'admin@qq.com', '2020-12-18 07:08:56', 0, 'http://localhost:7001/public/uploads/avatar/20228/20228271122aecf335051159.jpeg');
INSERT INTO `users` VALUES (2, 'test', '$2b$10$q9lJwDLqPqrN76sVUx8Wl.jq/j1IWFoj3A1G55nguB8M0WvIZmfaW', 'test@qq.com', '2020-12-09 12:33:05', 0, 'http://localhost:7001/public/uploads/avatar/20228/2022828226249911b51d6c6.jpeg');
INSERT INTO `users` VALUES (10, 'zhangsan', '$2a$10$RYIQNjuMgZOXJUNeREsmu.HjcbLCt.c.GexXAX3vxjtWgofHw7.DG', 'zhangsan@qq.com', '2022-08-31 01:06:35', 0, '/public/uploads/avatar/20228/2022831916d603a6e3303e9.jpeg');

SET FOREIGN_KEY_CHECKS = 1;
