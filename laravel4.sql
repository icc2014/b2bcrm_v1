/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50516
Source Host           : localhost:3306
Source Database       : laravel4

Target Server Type    : MYSQL
Target Server Version : 50516
File Encoding         : 65001

Date: 2014-02-28 15:54:13
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `blogs`
-- ----------------------------
DROP TABLE IF EXISTS `blogs`;
CREATE TABLE `blogs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(128) NOT NULL,
  `description` varchar(250) NOT NULL,
  `content` text NOT NULL,
  `author_id` int(11) NOT NULL,
  `views` int(11) NOT NULL,
  `pictrue` varchar(280) NOT NULL,
  `tags` varchar(128) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of blogs
-- ----------------------------
INSERT INTO `blogs` VALUES ('1', '习近平首次到访 特多总统总理冒雨到机场迎接', '习近平首次到访 特多总统总理冒雨到机场迎接', '　中新网西班牙港5月31日电 (记者 张朔)当地时间5月31日晚7时许，中国国家主席习近平乘坐的专机平稳降落在西班牙港皮亚科国际机场，开始对特立尼达和多巴哥进行国事访问。\r\n　　这是中国最高领导人首次对特立尼达和多巴哥以及英语加勒比国家进行国事访问。特立尼达和多巴哥总统卡莫纳夫妇、总理比塞萨尔冒雨亲自到机场迎接习近平和夫人彭丽媛的到来。\r\n　　卡莫纳在机场举行隆重欢迎仪式。习近平登上检阅台。军乐队奏中特两国国歌，鸣礼炮21响。习近平在特立尼达和多巴哥国防军总参谋长马哈拉吉陪同下检阅了仪仗队。特立尼达和多巴哥大法官、内阁成员、主要政党领袖等政要也到机场欢迎。\r\n　　习近平代表中国人民向特立尼达和多巴哥人民致以诚挚问候和良好祝愿。习近平表示，特立尼达和多巴哥是加勒比地区具有重要影响的国家。巩固和发展中特关系，不仅造福两国人民，也有利于促进中国同加勒比地区国家乃至发展中国家团结合作。我期待着同卡莫纳总统、比塞萨尔总理等特方领导人就双边关系及共同关心的国际和地区问题交换意见。访问期间，我还将同其他一些加勒比国家领导人举行会晤，共商合作大计，将中加友好合作关系提升到新水平。\r\n王沪宁、栗战书、杨洁篪等陪同人员同机抵达。\r\n　　中国驻特立尼达和多巴哥大使黄星原也到机场迎接。\r\n　　访问特立尼达和多巴哥后，习近平还将访问哥斯达黎加、墨西哥并赴美国举行中美元首会晤。\r\n　　特立尼达和多巴哥位于加勒比海小安的列斯群岛东南端，与委内瑞拉隔海相望。尽管国土面积仅有五千多平方公里，但这个岛国可谓“地小物博”，不仅拥有储量巨大的天然气和石油、世界最大的天然沥青湖，还是世界最大的氨肥和甲醇出口国，是英语加勒比地区经济实力最强的国家。\r\n　　中特两国1974年6月20日建交，2005年建立互利发展的友好合作关系，政治、经贸、文化等各领域友好关系稳步发展。特别是，中特两国虽相距遥远，但人文交流可谓丰富多彩。中国人早在两百多年前就抵达特多，此后华侨华人和特多各民族民众相互融合、和谐共处，中华文化日益成为特多多元文化的一部分。\r\n　　中方近日表示，中国国家主席首次访问特多，体现了中国致力于发展与特多以及加勒比地区关系的意愿和决心，将推动中特两国间深厚的友谊转化为合作的动力。', '1', '10', '', '', '2013-06-02 02:01:35', '2014-02-28 09:46:50');

-- ----------------------------
-- Table structure for `events`
-- ----------------------------
DROP TABLE IF EXISTS `events`;
CREATE TABLE `events` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `description` varchar(250) NOT NULL,
  `author_id` int(11) NOT NULL,
  `logo` varchar(250) NOT NULL,
  `views` int(11) NOT NULL,
  `tags` varchar(300) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of events
-- ----------------------------
INSERT INTO `events` VALUES ('1', '周日深圳一日游', '周日深圳一日游', '1', '53b0845a21aff6269b38404b99186c8b.jpeg', '25', '', '2013-06-02 01:37:14', '2013-06-03 20:28:03');

-- ----------------------------
-- Table structure for `events_user`
-- ----------------------------
DROP TABLE IF EXISTS `events_user`;
CREATE TABLE `events_user` (
  `user_id` int(11) NOT NULL,
  `events_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of events_user
-- ----------------------------
INSERT INTO `events_user` VALUES ('1', '1');

-- ----------------------------
-- Table structure for `groups`
-- ----------------------------
DROP TABLE IF EXISTS `groups`;
CREATE TABLE `groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `description` varchar(250) NOT NULL,
  `author_id` int(11) NOT NULL,
  `logo` varchar(250) NOT NULL,
  `views` int(11) NOT NULL,
  `tags` varchar(300) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of groups
-- ----------------------------
INSERT INTO `groups` VALUES ('1', '深圳LAMP技术圈', '深圳LAMP技术圈', '2', 'df85832d5da8bf2df42988c7dd00459c.jpeg', '47', 'LAMP', '2013-06-02 00:02:43', '2013-06-02 23:03:01');
INSERT INTO `groups` VALUES ('2', '深圳Django圈子', '深圳Django圈子', '1', '53b0845a21aff6269b38404b99186c8b.jpeg', '6', '深圳Django圈子', '2013-06-02 01:04:11', '2013-06-02 22:50:47');

-- ----------------------------
-- Table structure for `group_user`
-- ----------------------------
DROP TABLE IF EXISTS `group_user`;
CREATE TABLE `group_user` (
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of group_user
-- ----------------------------
INSERT INTO `group_user` VALUES ('2', '1');
INSERT INTO `group_user` VALUES ('3', '1');
INSERT INTO `group_user` VALUES ('1', '1');

-- ----------------------------
-- Table structure for `laravel_migrations`
-- ----------------------------
DROP TABLE IF EXISTS `laravel_migrations`;
CREATE TABLE `laravel_migrations` (
  `bundle` varchar(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`bundle`,`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of laravel_migrations
-- ----------------------------
INSERT INTO `laravel_migrations` VALUES ('application', '2012_09_21_111421_create_posts', '1');
INSERT INTO `laravel_migrations` VALUES ('application', '2012_09_21_114246_create_users', '1');
INSERT INTO `laravel_migrations` VALUES ('application', '2012_09_26_104000_create_blog', '1');
INSERT INTO `laravel_migrations` VALUES ('application', '2012_09_26_104012_create_events', '1');
INSERT INTO `laravel_migrations` VALUES ('application', '2012_09_26_104019_create_group', '1');
INSERT INTO `laravel_migrations` VALUES ('application', '2012_09_26_104030_create_photo', '1');
INSERT INTO `laravel_migrations` VALUES ('application', '2012_09_26_104743_create_category', '1');
INSERT INTO `laravel_migrations` VALUES ('application', '2012_09_27_094026_add_user_id_to_posts_table', '2');
INSERT INTO `laravel_migrations` VALUES ('application', '2012_09_27_200149_add_name_to_users_table', '3');

-- ----------------------------
-- Table structure for `members`
-- ----------------------------
DROP TABLE IF EXISTS `members`;
CREATE TABLE `members` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of members
-- ----------------------------
INSERT INTO `members` VALUES ('2', 'steven9801', 'steven9801@163.com', '2014-02-28 14:49:39', '2014-02-28 14:49:39');
INSERT INTO `members` VALUES ('3', 'fx9801', 'fx9801@163.com', '2014-02-28 14:51:15', '2014-02-28 14:51:15');

-- ----------------------------
-- Table structure for `photos`
-- ----------------------------
DROP TABLE IF EXISTS `photos`;
CREATE TABLE `photos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(128) NOT NULL,
  `description` varchar(250) NOT NULL,
  `author_id` int(11) NOT NULL,
  `pictrue` varchar(250) NOT NULL,
  `views` int(11) NOT NULL,
  `tags` varchar(300) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of photos
-- ----------------------------
INSERT INTO `photos` VALUES ('30', 'dddddd', 'dddddd', '4', '33c0fe9bf28037cf872fad1e7a6bb544.png', '1', 'dddddd', '2014-02-28 15:48:54', '2014-02-28 15:48:54');
INSERT INTO `photos` VALUES ('31', '4353', '435', '4', 'df85832d5da8bf2df42988c7dd00459c.jpeg', '1', '43534', '2014-02-28 15:49:08', '2014-02-28 15:49:08');
INSERT INTO `photos` VALUES ('32', '56756', '6575', '4', 'd3aa59dbf00ace1801409385a5bad79c.jpeg', '1', '56767', '2014-02-28 15:49:16', '2014-02-28 15:49:16');
INSERT INTO `photos` VALUES ('33', '7687', '7686', '4', '53b0845a21aff6269b38404b99186c8b.jpeg', '1', '7687', '2014-02-28 15:49:24', '2014-02-28 15:49:24');
INSERT INTO `photos` VALUES ('34', '87978', '87978', '4', 'f6600100167f427aaa3ec90c523c5159.jpeg', '1', '8798', '2014-02-28 15:49:31', '2014-02-28 15:49:32');

-- ----------------------------
-- Table structure for `posts`
-- ----------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(128) NOT NULL,
  `body` text NOT NULL,
  `author_id` int(11) NOT NULL,
  `views` int(11) NOT NULL,
  `pictrue` varchar(280) NOT NULL,
  `test` varchar(280) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of posts
-- ----------------------------

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(64) NOT NULL,
  `email` varchar(320) NOT NULL,
  `password` varchar(64) NOT NULL,
  `role` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', '白衣居士', 'nnair@qq.com', '$2a$08$VFdWTXFIbWFucGl0UnlsZuqCg6FKZBexXuaGUaPN2ASISgZzz75ti', '1', '1', '0000-00-00 00:00:00', '2013-06-01 21:55:05');
INSERT INTO `users` VALUES ('2', '六少', 'cecoo@126.com', '$2y$08$mHf6U8Pnp..yHBABWVam2..8.pA.Efc9WRGKC5Rr7oKUWPFXzND9u', '1', '1', '2013-05-31 09:50:29', '2013-06-01 21:58:59');
INSERT INTO `users` VALUES ('3', '堕落猪', 'lutenking@gmail.com', '$2y$08$2mzu9h9YSUsrtuRDu6ISkOLQYJA4.RsAuDFgYRZnRatGbIwE1I6ym', '1', '1', '2013-06-01 21:00:59', '2013-06-01 21:59:22');
INSERT INTO `users` VALUES ('4', 'steven9801', 'steven9801@163.com', '$2y$08$apg8tCcEM5yvtwN5s2kzm.GVA3TfsW1wRNv6B3SM7HElEOJu9UEA.', '1', '1', '2014-02-28 15:48:18', '2014-02-28 15:48:18');

-- ----------------------------
-- Table structure for `votes`
-- ----------------------------
DROP TABLE IF EXISTS `votes`;
CREATE TABLE `votes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `votes_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of votes
-- ----------------------------
