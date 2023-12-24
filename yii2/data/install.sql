/*
 Navicat Premium Data Transfer

 Source Server         : MyTest01
 Source Server Type    : MySQL
 Source Server Version : 80032
 Source Host           : localhost:3306
 Source Schema         : yii2advanced

 Target Server Type    : MySQL
 Target Server Version : 80032
 File Encoding         : 65001

 Date: 24/12/2023 21:31:54
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for ch_element
-- ----------------------------
DROP TABLE IF EXISTS `ch_element`;
CREATE TABLE `ch_element`  (
  `ceid` int(0) NOT NULL,
  `cename` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `cesymbol` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NULL DEFAULT NULL,
  `cedescription` text CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NULL,
  PRIMARY KEY (`ceid`) USING BTREE,
  INDEX `cename`(`cename`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb3 COLLATE = utf8mb3_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ch_element
-- ----------------------------
INSERT INTO `ch_element` VALUES (1, '铀', 'U', '铀是一种重金属，自然界中存在两种主要同位素：铀-235和铀-238。铀-235是一种关键的核裂变材料，用于核反应堆和核武器。铀矿开采和铀燃料的使用会产生放射性废物。');
INSERT INTO `ch_element` VALUES (2, '钚', 'Pu', '钚是一种人工合成的放射性元素，主要由铀-238在核反应堆中吸收中子而产生。钚-239是一种重要的核裂变材料，用于核武器和某些类型的核反应堆。');
INSERT INTO `ch_element` VALUES (3, '铯', 'Cs', '铯-137是一种常见的核裂变产物，具有较长的半衰期（约30年）。它在核事故中释放，如切尔诺贝利和福岛核灾难，对环境和人类健康构成长期威胁。');
INSERT INTO `ch_element` VALUES (4, '碘', 'I', '碘-131是另一种常见的核裂变产物，以气体形式释放，半衰期约8天。碘-131主要影响甲状腺，是核事故后急需关注的放射性污染物。');
INSERT INTO `ch_element` VALUES (5, '锶', 'Sr', '锶-90是一种危险的核裂变产物，其半衰期约为28年。它在生物体中的行为类似于钙，因此可能积累在骨骼中，引发癌症等健康问题。');
INSERT INTO `ch_element` VALUES (6, '钴', 'Co', '钴-60是一种放射性同位素，产生于核反应堆中。它在医疗放射治疗和工业测量中有应用，但不当处理会导致环境污染。');
INSERT INTO `ch_element` VALUES (7, '钍', 'Th', '钍是一种自然放射性元素，可作为核燃料使用。钍的潜在应用在于它比铀更丰富且产生的核废料较少，但仍然需要妥善处理。');
INSERT INTO `ch_element` VALUES (8, '镅', 'Am', '镅是一种人工放射性元素，主要来源于钚和其他重元素的衰变。它在一些工业和研究应用中有用途，但其放射性特性要求严格的安全措施。');
INSERT INTO `ch_element` VALUES (9, '氚', 'H', '氚是氢的一种放射性同位素，通常在核反应堆中通过中子轰击产生。它被用于氢弹的制造和某些科学研究中。由于其生物相容性，氚泄漏对环境和人类健康有潜在影响。');
INSERT INTO `ch_element` VALUES (10, '锔', 'Cm', '锔是一种人工合成的放射性元素，属于锕系元素。它是在核反应堆中产生的，主要用于某些研究和工业应用，例如作为辐射源。');
INSERT INTO `ch_element` VALUES (11, '镎', 'Np', '镎是一种人工放射性元素，通常在铀核燃料的核反应过程中产生。镎-237是最常见的同位素，用于某些高级核研究和可能的燃料循环应用。');
INSERT INTO `ch_element` VALUES (12, '钷', 'Po', '钷是一种高放射性元素，由天然铀和钍衰变产生。它在自然界中含量很少，但由于其放射性特性，对环境和健康构成潜在风险。');
INSERT INTO `ch_element` VALUES (13, '镭', 'Ra', '镭是一种天然放射性元素，由铀和钍衰变产生。尽管在早期的科学研究中广泛使用，但其放射性导致严重的健康问题。');
INSERT INTO `ch_element` VALUES (14, '钆', 'Gd', '钆是一种稀土元素，其某些同位素（如钆-157）在核反应堆中可吸收中子。它在某些类型的核反应堆的设计中被考虑用作控制棒材料。');
INSERT INTO `ch_element` VALUES (15, '钼', 'Mo', '钼-99是一种在核反应堆中通过铀裂变产生的放射性同位素，其衰变产物锝-99m在医学诊断中广泛使用。不当处理这些物质可能对环境造成污染。');
INSERT INTO `ch_element` VALUES (16, '铋', 'Bi', '铋-213是一种放射性同位素，可通过锕系元素的衰变链产生。它在放射性药物开发中有潜在应用，但也需妥善处理以避免环境污染。');

-- ----------------------------
-- Table structure for comment
-- ----------------------------
DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment`  (
  `cid` int(0) NOT NULL AUTO_INCREMENT,
  `cdate` datetime(0) NULL DEFAULT NULL,
  `ccomment` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NULL DEFAULT NULL,
  `cuser` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  PRIMARY KEY (`cid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb3 COLLATE = utf8mb3_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of comment
-- ----------------------------
INSERT INTO `comment` VALUES (4, '2023-12-23 00:00:00', '乜神，永远的哥！', '纪潇洋');
INSERT INTO `comment` VALUES (5, '2023-12-23 18:03:04', '乜神，永远滴哥！', '武桐西');

-- ----------------------------
-- Table structure for detection
-- ----------------------------
DROP TABLE IF EXISTS `detection`;
CREATE TABLE `detection`  (
  `deid` int(0) NOT NULL AUTO_INCREMENT,
  `deplace` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NULL DEFAULT NULL,
  `dejingwei` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NULL DEFAULT NULL,
  `deaverage` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NULL DEFAULT NULL,
  PRIMARY KEY (`deid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8mb3 COLLATE = utf8mb3_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of detection
-- ----------------------------
INSERT INTO `detection` VALUES (12, '北京', '46，116', '100');

-- ----------------------------
-- Table structure for event
-- ----------------------------
DROP TABLE IF EXISTS `event`;
CREATE TABLE `event`  (
  `eid` int(0) NOT NULL AUTO_INCREMENT,
  `ename` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `eplace` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NULL DEFAULT NULL,
  `ecount` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NULL DEFAULT NULL,
  `econtent` text CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NULL,
  PRIMARY KEY (`eid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb3 COLLATE = utf8mb3_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of event
-- ----------------------------
INSERT INTO `event` VALUES (1, '乌拉尔存储罐核爆炸', '苏联', '上万人死亡', '1957年9月29日，在苏联的大型核工业聚集区乌拉尔地区，克什特姆、车里雅宾斯克两城之间的一个地下核废料存储罐突然发生爆炸，其威力相当于美国投在广岛的原子弹的100倍。\r\n\r\n一片直径l0公里的带有放射元素锶90的烟云升空。1万多居民当即撤离污染区。由于天气极端恶劣，狂风把放射性烟云刮到数百公里之外，结果造成南乌拉尔地区3000平方公里的核污染。但是，当受核辐射的居民被送到医院后，由于医生不懂放射性核医学，导致很多患者濒于死亡。事故一年之后死了几千人，三年之后死了几万人。\r\n\r\n这次事故引发的起因，是在核废料处理环节还没有解决好的时候，赫鲁晓夫为了跟美国人争高低，不顾科学家们的反对，下令提前开炉运转。为了节省核废物处理费用，苏联当局便把核废物都堆积在乌拉尔的林区之中。核废物中的钚，大部分被土壤所吸收。当水浸透蓄积着钚的土壤，钚与水作用，触发链式反应，水被迅速加热成水蒸气，水蒸气压力增大而产生强烈的爆炸，从而造成了这场骇人听闻的核灾难的发生。\r\n\r\n通往该区的所有公路、铁路被封闭了长达一年之久。一年后，有进入该区(有限度地开放)的机动车辆都必须接受检查，关闭所有车窗，不许拍照，要以最高车速通过，不得停车逗留。1958年到1968年，不许该区居民生育子女。');
INSERT INTO `event` VALUES (2, '比基尼事件', '太平洋', '使岛上居民患疾病，污染海洋生物', '1949年，苏联的第一颗原子弹试爆成功。消息传到美国，引起美国朝野的震惊和不安。于是，美国开始研制威力更大的核武器——氢弹。1946年1月，美国原子能委员会选定了太平洋上的马绍尔群岛作为新的原子弹试验场\r\n\r\n1952年11月1日凌晨，世界第一枚氢弹“迈克”在这里被引爆。然而过了不久，苏联第一枚氢弹也试爆成功，于是美国决定爆炸更大威力的氢弹。\r\n\r\n两个国家就像两个小孩子一样在较劲。1954年3月1日，美国将一颗预测为600万吨TNT当量的氢弹放置在马绍尔群岛比基尼环礁。6时45分许，氢弹在离地面大约两米的地方爆炸。爆炸场景很快让观测人员傻眼了：这绝不可能是600万吨的爆炸当量！因为他们发现，氢弹所在的那个小岛和附近两座小岛在爆炸的一瞬间就从视线中消失了。美军的空中观测飞机发现，原先放置氢弹的地方忽然成了一个大深湖。大湖宽近2公里，深达80米。\r\n\r\n事后，据美国科学家们测算，这枚氢弹的爆炸当量高达1500万吨，比原先的估计要大2倍多。\r\n\r\n由于没有估计到如此大的爆炸威力，美军没有及时通知附近的居民和在海上作业的各国渔船事先撤离，造成了太平洋上最大的核污染事件。其中，致命的永久核污染区近2万平方公里。这些核爆炸的放射性散落物飘落到了群岛的其他地区，使许多人都出现了皮肤烧伤、头发脱落、恶心、呕吐等现象，甲状腺疾病和恶性肿瘤也成为当地的常见病。如今，当地的人们还不得不从外地运来必需的生活用品。');
INSERT INTO `event` VALUES (3, '切尔诺贝利核事件', '乌克兰', '170000人患疾病', '1986年4月26日，切尔诺贝利核电站的第四号反应堆发生了严重事故。事故是由于反应堆爆炸引发的，导致大规模的核辐射泄漏。爆炸释放出大量的放射性物质，包括铯、锶和碘等核素，污染了广泛的地区。切尔诺贝利核事件导致了大规模的伤亡和影响。最初的爆炸造成了两名工人立即死亡，但随后的辐射泄漏导致了更多的伤亡。数千名救援人员和工作人员受到高剂量辐射暴露，其中许多人在事故后不久就因辐射病而死亡。此外，大量的居民被迫疏散，周边地区受到了持续的辐射污染。切尔诺贝利核事件被认为是迄今为止最严重的核事故，对环境和人类健康产生了长期和广泛的影响。\r\n\r\n切尔诺贝利核事件引发了国际社会对核能安全的关注，并导致了改进核能工业的法规和安全措施。这次事故也成为了核能领域的一个重要教训，提醒我们核能的潜在危险性和必要的预防措施。');
INSERT INTO `event` VALUES (4, '福岛核电站泄漏', '日本', '200000人被迫疏散', '福岛核电站泄漏，也被称为福岛核灾难，是2011年3月11日发生在日本福岛县东北部的一次严重核事故。这次事故是由于9级地震和海啸导致福岛第一核电站的多个核反应堆失去冷却功能而引发的。失去冷却功能后，核反应堆产生了过热，最终导致氢气爆炸和核反应堆的部分熔融。福岛核电站泄漏导致了严重的辐射泄漏，造成了以下影响和伤亡：\r\n\r\n直接伤亡：事故期间，没有立即死亡的直接伤亡报告，但一名核电站工人在事故中不久因辐射暴露导致死亡。此外，大约1600名居民因疏散和应对措施而丧生，其中大部分是老年人。\r\n\r\n持续的辐射：事故导致了广泛的核辐射泄漏，使周边地区成为高度污染区域。大约160,000名居民被迫疏散，并且有一些区域至今仍然无法居住。核辐射对人类健康和环境造成了持续的影响。\r\n\r\n经济影响：福岛核灾难引发了日本政府巨额的救援和清理成本，以及核电站的关闭。此外，日本国内外的核能政策和公众对核能安全的看法都受到了影响。\r\n\r\n福岛核电站泄漏被认为是自切尔诺贝利核事件以来最严重的核事故，对国际社会产生了广泛的关注，加强了核能安全标准，并引发了全球范围内对核能政策和发展的重新审视。');

-- ----------------------------
-- Table structure for group
-- ----------------------------
DROP TABLE IF EXISTS `group`;
CREATE TABLE `group`  (
  `gid` int(0) NOT NULL AUTO_INCREMENT,
  `gname` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NULL DEFAULT NULL,
  `gdate` datetime(0) NULL DEFAULT NULL,
  `gschool` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NULL DEFAULT NULL,
  `gdescription` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NULL DEFAULT NULL,
  PRIMARY KEY (`gid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb3 COLLATE = utf8mb3_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of group
-- ----------------------------
INSERT INTO `group` VALUES (1, 'NKU Data Titans', '2023-12-20 15:43:52', 'NKU', 'We are NKU Data Titans, we build impossible out of nothing.');

-- ----------------------------
-- Table structure for measures
-- ----------------------------
DROP TABLE IF EXISTS `measures`;
CREATE TABLE `measures`  (
  `mid` int(0) NOT NULL AUTO_INCREMENT,
  `mname` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NULL DEFAULT NULL,
  `mdescription` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NULL DEFAULT NULL COMMENT '单日损失',
  PRIMARY KEY (`mid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = utf8mb3 COLLATE = utf8mb3_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of measures
-- ----------------------------
INSERT INTO `measures` VALUES (1, '提高核设施的安全标准', '措施内容：增强核电站和其他核设施的安全设计，包括提高抗震能力、防洪措施、冗余安全系统等。定期对核设施进行安全检查和升级，确保其能够抵御自然灾害和人为错误。');
INSERT INTO `measures` VALUES (2, '应急响应与事故管理', '措施内容：建立快速有效的应急响应机制，包括及时的事故警报、紧急疏散计划、专业的辐射事故应对团队。在事故发生后，迅速评估情况，限制污染的扩散，并向公众提供准确信息。');
INSERT INTO `measures` VALUES (3, '放射性废物的安全处理和存储', '措施内容：发展安全可靠的放射性废物处理和存储技术，包括深地质处置、安全容器以及长期监测系统。确保放射性废物被妥善隔离，减少对环境和人类的潜在威胁。');
INSERT INTO `measures` VALUES (4, '环境监测和污染清理', '措施内容：实施全面的环境监测，以早期识别和评估核污染风险。对受污染地区进行彻底清理，包括去除污染土壤、净化受污染水源，以及恢复受影响的生态系统。');
INSERT INTO `measures` VALUES (5, '公众教育和意识提高', '措施内容：提高公众对核安全和核污染的意识，教育公众如何在核事故发生时采取适当措施。通过公众教育，增强社会对核安全重要性的认识，促进透明和负责任的核技术应用。');

-- ----------------------------
-- Table structure for members
-- ----------------------------
DROP TABLE IF EXISTS `members`;
CREATE TABLE `members`  (
  `mid` int(0) NOT NULL,
  `mname` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NULL DEFAULT NULL,
  `mdescription` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NULL DEFAULT NULL,
  `mgroup` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb3 COLLATE = utf8mb3_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of members
-- ----------------------------
INSERT INTO `members` VALUES (1, '周钰宸', '我生来就是我自己', 'NKU Data Titans');
INSERT INTO `members` VALUES (2, '武桐西', '从一到无穷大Infinity', 'NKU Data Titans');
INSERT INTO `members` VALUES (3, '胡亚飞', '恰似草木对光阴的钟情', 'NKU Data Titans');
INSERT INTO `members` VALUES (4, '纪潇洋', '小子认识我头像吗？', 'NKU Data Titans');

-- ----------------------------
-- Table structure for migration
-- ----------------------------
DROP TABLE IF EXISTS `migration`;
CREATE TABLE `migration`  (
  `version` varchar(180) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `apply_time` int(0) NULL DEFAULT NULL,
  PRIMARY KEY (`version`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb3 COLLATE = utf8mb3_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migration
-- ----------------------------
INSERT INTO `migration` VALUES ('m000000_000000_base', 1675841612);
INSERT INTO `migration` VALUES ('m130524_201442_init', 1675841615);
INSERT INTO `migration` VALUES ('m190124_110200_add_verification_token_column_to_user_table', 1675841615);

-- ----------------------------
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news`  (
  `nid` int(0) NOT NULL AUTO_INCREMENT,
  `ntitle` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NULL DEFAULT NULL,
  `nauthor` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NULL DEFAULT NULL,
  `ndate` datetime(0) NULL DEFAULT NULL,
  `ncontent` text CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NULL,
  PRIMARY KEY (`nid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb3 COLLATE = utf8mb3_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES (1, '7800吨！日本核污染水排海又要开始了', '《光明网》', '2023-12-19 07:50:00', '据日本广播协会（NHK）当地时间18日报道，东京电力公司当天称，福岛第一核电站第四轮核污染水排海将于2024年2月下旬开始，排海总量预计为7800吨。\r\n据央视新闻客户端12月16日报道，近日，日本三重县志摩市波切渔港发现大量死鱼冲上岸边，死鱼多到渔船寸步难行。当地渔业工作者正在进行回收处理，截至14日已回收85吨。\r\n此前报道\r\n离奇！日本渔船已寸步难行……日本官员：与核污染水无关\r\n而据日本《朝日新闻》报道，东京电力公司11日发布消息称，在福岛第一核电站内进行废炉作业的一名工人面部受到放射性物质污染。\r\n东电公司称，遭放射性物质污染的工人为一名20多岁的男子，当日在福岛第一核电站2号机组附近对已解体的围栏进行除污作业。他在除污作业结束后，被发现鼻腔受到了放射性物质污染，其体内可能吸入了放射性物质。\r\n据《每日新闻》报道，东电公司称，当日14时42分左右，该名工人被确认其鼻腔受到了放射性物质污染。据福岛中央电视台报道，该名工人被检测出的数值约为正常情况下的17倍。\r\n东电公司推测该名工人可能是在摘除口罩时受到放射性物质污染。报道称，东电公司正在对此事进行详细调查。\r\n10月25日，福岛第一核电站发生放射性废液溅射事件，进行核污染水处理工作的5名作业员被放射性废液溅射，其中2人被紧急送医。\r\n综合：央视网、中新网\r\n来源：浙江在线');
INSERT INTO `news` VALUES (2, '日本的核废水安全吗？日本核废水排海的“前世今生” ', '搜狐网', '2023-08-20 13:29:00', '2011年3月11日，日本发生了历史上最强烈的地震——311大地震。这场地震和随之而来的海啸导致福岛第一核电厂发生核事故。海啸发生后，日本东京电力公司未能立即停止反应堆的运行，导致大量海水涌入，最终导致反应堆全部报废。然而，机堆芯中的核燃料仍在不断进行核反应，需要持续冷却。\r\n如果不能及时冷却，就可能引发更严重的核事故。因此，东电公司决定利用海水和被污染的水对核反应堆进行冷却。冷却后，这些水将被储存在巨大的储存罐中。\r\n据东电公司统计，福岛核电站每天会产生大约几百吨的核废水，而核电站原有的1000个储存罐已经不够用了。因此，日本开始研究如何处理这些水，并提出了五种方案，包括蒸汽法、电信法、掩埋法、铸心法和排海法。但由于这些方法存在风险，因此只剩下蒸汽法和排海法。\r\n然而，核废水中还有一种无法处理的氢同位素——氚。虽然放射性不高，但由于氚的性质与氢太接近，难以与水分子分离，因此很难在核污染水中被处理。东电公司表示，他们会将处理水稀释到日本核电厂排放标准的1/40，日本法规标准为60000bq/L，而WHO饮用水标准为10000贝克。因此，日本政府认为这个含量对人体的影响较小，不会产生很大的问题。\r\n然而，许多国家和地区对日本政府的说法并不认可。尤其是与日本有较多海产品贸易往来的中国、韩国和中国的港澳台地区。同时，也有部分日本民众对排海表示抗议。他们质疑的理由有两点：\r\n第一，根据核电站的预测，核废水需要大约三十至四十年才能排完。东电公司如何保证每一次排放的都是经过严格排放标准的处理水？毕竟，东电公司之前曾出现过处理的核废水中存在放射性元素超标的问题。\r\n第二，长期持续的向大海排放核废水可能会带来潜在风险，谁都无法预测。即使日本处理核废水的方法被证明符合标准，我们仍然希望日本政府能够放弃排海的决定，因为没有人愿意承担潜在的风险。对普通民众来说，今后购买海鲜时需要更加谨慎，避免购买来自日本的产品。如果排海已成定局，我们也呼吁更多国家派遣专业人员对日本的排放进行监督，确保核废水的安全。\r\n');
INSERT INTO `news` VALUES (3, '日本海岸现大量死鱼，专家：核污水没这么大毒性', '《九派新闻》', '2023-12-18 15:19:31', '近日，日本再次上演了一场大规模“鱼出海”喜剧，这一次是在三重县志摩市波切渔港，大量死鱼尸体令人唏嘘。这不禁让人思考，为什么这种“鱼出海”的闹剧总是在日本上演，而其他国家似乎很少有这样的“自然剧情”呢？\r\n这是本月继北海道出现大量死鱼后，日本海岸第二次出现该情况。当地渔民担忧，短期内频繁出现大量死鱼可能意味着海洋生态系统正在发生变化。日本官员则解释称，鱼可能死于缺氧，与福岛核电站核污染水排海无关。\r\n此前，据日本电视台报道，当地时间7日上午，日本北海道函馆市海岸，大量沙丁鱼尸体被冲上沙滩。目前原因不明。\r\n一位目击者用无人机拍摄的画面显示，一片海滩上铺满了死鱼，长度约有1公里，还有很多死鱼漂浮在海面上。由于死鱼数量巨大，海滩和水面都变成了银白色。有当地居民表示，第一次见到这么多死鱼被冲上岸。\r\n当地官员在一份声明中说，死鱼主要是沙丁鱼，死因尚不清楚。声明还敦促当地居民不要将死鱼带回家食用。目前相关人员正在进行详细调查，并将讨论处理方案。函馆市水产研究所的研究人员表示，这一事件发生的时间恰逢沙丁鱼从北海道向南迁徙的季节。\r\n日本函馆市水产研究所研究员藤冈崇表示，一个可能的原因是，这群鱼被一条大鱼追赶捕食，筋疲力尽后被海浪冲了上来；另一个可能的原因是，鱼群在迁徙过程中，跟着冰冷的洋流移动，被冲上了岸，但具体细节尚不确定。\r\n12月18日上午，九派新闻联系到中国水产科学研究院南海水产研究所研究员、渔业环境研究室主任黄洪辉，他介绍，虽然自己并不了解该事件的具体情况，不能对此情况作具体判断，但此次死鱼数量庞大，一般来说和地震或核污水并没有太大关系，也不可能是被大鱼追赶后冲上岸。\r\n他解释，核污水不可能有这么大的毒性，一下将这些鱼都毒死，核污染废水的影响是一个缓慢的过程。不太可能出现这么高强度的、长时间持续的污染水域。鱼有回避行为，如果该处有污染排放口，它们会自主地避开，游到别的干净水域去。\r\n黄洪辉告诉九派新闻，实际上，海岸上出现大量死鱼是一种较普遍的自然现象，南海也经常出现，一般是喜好聚群的鱼，如沙丁鱼。而这种情况大部分与缺氧水团有关，大海里的水团和水流相当于陆地上的江河，水团规模的不一、有大有小，如此庞大数量的死鱼也并不罕见。\r\n“只有大自然的缺氧水团或是低温水团会让鱼群无法避免，这是大自然的力量，相当于陆地上的雪灾、洪涝等自然灾害，是海洋里一种常见的自然灾害。”他说，如果某低氧水团持续影响，将鱼群围困，或是鱼群自行陷入，鱼群便会因缺氧而死，随即浮上水面、被冲到岸边。\r\n他还称，这种死鱼或死虾都不能食用，它们死亡后会腐败变质，尸体都浮上水面了，肯定含有微生物、致病菌等，质量不安全。建议大家遇到这种情况不要盲目拾捡、食用。\r\n\r\n\r\n\r\n');
INSERT INTO `news` VALUES (4, '日本究竟为何要将核污水排放入海？会带来哪些影响？专家解读', '央广网', '2023-08-23 21:18:00', '央广网北京8月23日消息（记者黄玉玲）近日，日本政府宣布将开始核污染水排海。据日本朝日电视台报道，东京电力（东电）公司正为24日福岛第一核电站核污染水排海进行准备，但若气象条件不合适，24日的排海计划可能取消。\r\n据悉，日本核污染水排海至少要持续30年，将会影响整个太平洋乃至全球海域。由于时间跨度大，影响范围广，日本政府这一决定一经公布，引起多方反对。\r\n日本核污染水排海会带来哪些影响？23日，央广网记者就此采访相关专家。有专家表示，日本政府并没有采取负责任方式去处置核污染水，而是将这种环境风险转嫁给了全世界。\r\n日本究竟为何要选择将核污水排放海洋？\r\n大连海事大学法学院教授、博士生导师、大连海事大学黄渤海研究院院长张晏瑲在接受央广网采访时表示，2011年日本东北部太平洋海域发生地震，引发海啸。大量的水冲击到日本福岛核电站，后来引发爆炸，当时日本东京电力公司为了冷却烧毁的核反应堆，用大量的海水将核反应堆降温，实际上在那时就有超过1万吨的受污染海水排放。之后，日本将受污染的海水通过储水罐方式储存起来。从2011年到2023年，12年时间，日本建筑了超1100个储水罐。每个储水罐平均能够储存1000~1300吨水。到目前为止，储水罐容量基本上已经达到饱和，为此他们选择将核污水排到太平洋去。\r\n除了将核污水排放大海，是否还有其它处理方式？张晏瑲介绍，比如蒸发释放、电解排放、地下掩埋等，这些都是选项。但是，日本最终选择通过海底管道的方式把核污染水排出去，是由于其他的方式都需要非常高的技术含量，经济成本会很高，因此选择成本最低的一个方案。这样将污染源转嫁到全世界各地，是极端不负责任的。\r\n22日，外交部例行记者会上，外交部新闻发言人汪文斌表示，两年多来，福岛核污染水排海计划的正当性、合法性、安全性一直受到国际社会质疑，日方迄今未解决国际社会关于核污染水净化装置长期可靠性、核污染水数据真实和准确性、排海监测安排的有效性等重大关切。中方等利益攸关方多次指出，如果核污染水是安全的，就没有必要排海，如果不安全，就更不应该排海。日本强推核污染水排海，不正当、不合理、不必要。\r\n福岛核污水预计多久影响我国？\r\n日本此次核污水排放多久会影响到我国？北京师范大学国家安全与应急管理学院研究员余雯对此问题向央广网记者解释，核污染水在进入海洋环境之后，首先是通过洋流的输运，会扩散传播到不同的大洋。此外还会通过海洋的生态系统，例如食物链的传播而不断传递，并且也有可能通过公众摄入海产品的方式进入到人体里，从而对海洋生态系统或人体健康带来一定的潜在影响。\r\n余雯表示，据之前对福岛核事故的监测，大部分污染物是会向东传播，然后跨越整个太平洋。其中也有一小部分污染物会通过西太平洋膜态水的传播向西南方向进入，大概一年半到两年的时间进入我国海域。\r\n中国原子能科学研究院研究员刘森林告诉记者，日本核污染水经过一圈后，与我国接触的水域核放射量会降低很多。但放射量低，不代表影响不大，尤其是对当地影响，例如日本经济、当地渔民生计问题、周边韩国海产品等等。从社会角度来看，它会影响全球的经济发展。\r\n刘森林表示，我国民众也不需要太过恐慌，我国一直高度重视事故导致的日本输华食品放射性污染问题，持续开展对日本食品放射性污染风险的评估并及时应对。近日，海关总署也提到为防范受到放射性污染的日本食品输华，保护中国消费者进口食品安全，中国海关禁止进口日本福岛等十个县（都）食品，对来自日本其他地区的食品特别是水产品（含食用水生动物）严格审核随附证明文件，强化监管，严格实施100%查验，持续加强对放射性物质的检测监测力度。确保日本输华食品安全，严防存在风险的产品输入。\r\n记者注意到，近日，韩国海盐需求量激增。受日本福岛核污染水排海计划等因素影响，部分消费者和零售商开始囤积海盐。韩国政府向市场投放储备海盐，以应对海盐市场的波动。对此，张晏瑲表示，我国食用盐与韩国不同，主要来自井盐，不会涉及污染区域，居民不用过度囤盐。');
INSERT INTO `news` VALUES (5, 'Anger at Fukushima’s wastewater; hope in its renewables', 'The JapanTimes', '2023-10-07 15:17:00', 'Good news and bad news out of Fukushima. First, the bad news: Anika Osaki Exum and Gabriele Ninivaggi join us to discuss the reaction to the treated wastewater release plan (China’s not happy). Then, Francesco Bassetti gets us caught up on the good news: There has been a boom in renewable energies there.\r\n(For more details please view it at the original page https://www.japantimes.co.jp/podcast/2023/09/07/deep-dive/fukushima-wastewater-renewables/)');
INSERT INTO `news` VALUES (6, 'What to Know About Japan’s Plan to Release Fukushima Water Into the Ocean', 'US News', '2023-08-23 13:42:00', 'Weather conditions permitting, Japan plans to begin releasing treated water contaminated from a 2011 nuclear meltdown into the Pacific Ocean on Thursday.\r\nJapan as soon as this week will begin the controversial release of treated water from the Fukushima nuclear power plant into the ocean.\r\nThe Japanese government approved the plan two years ago, saying it is necessary to decommission the power plant, which is operated by Tokyo Electric Power Company. Releases will start Thursday “if they encounter no obstacles,” Prime Minister Fumio Kishida announced this week.\r\n  “I have asked TEPCO to swiftly prepare for the water discharge in accordance with the plan approved by the Nuclear Regulation Authority, and expect the water release to start on Aug. 24, weather conditions permitting,” Kishida said.\r\nDespite pushback from neighboring nations and fishing groups, Japanese officials said the plan is safe.');
INSERT INTO `news` VALUES (7, 'Fukushima disaster: What happened at the nuclear plant?', 'BBC ', '2023-08-23 10:38:00', 'On Thursday, Japan will release treated radioactive wastewater from its Fukushima nuclear power plant - the site of a meltdown disaster 12 years ago.\r\nThe United Nations atomic energy regulator says the discharge of filtered water into the Pacific Ocean is safe and will have \"negligible\" impact on people and the environment.\r\nBut the move has drawn fierce criticism from citizens of countries in the region. It is the latest development in the continuing saga of one of the world\'s worst-ever nuclear disasters.\r\nIt began on 11 March 2011, when the most powerful earthquake ever recorded in Japan struck off the country\'s eastern coast.\r\nThe 9.0-magnitude quake was so forceful it shifted the Earth off its axis. It triggered a tsunami which swept over Japan\'s main island of Honshu, killing more than 18,000 people and wiping entire towns off the map.\r\nAt the Fukushima nuclear power plant, the gigantic wave surged over coastal defences and flooded the reactors, sparking a major disaster. Authorities set up an exclusion zone which grew larger and larger as radiation leaked from the plant, forcing more than 150,000 people to evacuate from the area.\r\nMore than a decade later, that zone remains in place and many residents have not returned. Authorities believe it will take up to 40 years to finish the work of decontamination, which has already cost Japan trillions of yen.\r\nThe Fukushima Disaster is classified as a level seven event by the International Atomic Energy Agency, the highest such event and only the second event to meet this classification after the 1986 Chernobyl disaster.');

-- ----------------------------
-- Table structure for sea
-- ----------------------------
DROP TABLE IF EXISTS `sea`;
CREATE TABLE `sea`  (
  `wid` int(0) NOT NULL AUTO_INCREMENT,
  `wname` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NULL DEFAULT NULL,
  `wsymbol` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NULL DEFAULT NULL,
  `wdescription` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NULL DEFAULT NULL,
  `wimg` text CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NULL,
  PRIMARY KEY (`wid`) USING BTREE,
  INDEX `sea`(`wname`) USING BTREE,
  CONSTRAINT `sea` FOREIGN KEY (`wname`) REFERENCES `ch_element` (`cename`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb3 COLLATE = utf8mb3_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sea
-- ----------------------------
INSERT INTO `sea` VALUES (1, '铯', 'Cs', '在核废水中，铯的含量可能占总放射性污染物的较高比例，尤其是铯-137同位素。\n性质和危害：铯-137是一种β射线发射体，具有约30年的半衰期。它在海洋环境中可以通过食物链累积，影响海洋生物，最终可能影响人类健康，特别是通过影响肌肉组织和心脏功能。', 'images/Cs.png');
INSERT INTO `sea` VALUES (2, '碘', 'I', '碘-131在新鲜的核废水中占有显著比例，但由于其半衰期较短（约8天），会相对快速衰减。\n性质和危害：碘-131是一种放射性同位素，主要通过甲状腺吸收，可能导致甲状腺癌。它对海洋生态系统的直接影响较小，但对人类健康构成严重威胁。', 'images/I.png');
INSERT INTO `sea` VALUES (3, '锶', 'Sr', '锶-90在核废水中的含量较低，但由于其半衰期长（约28年），对环境的长期影响显著。\n性质和危害：锶-90是β射线发射体，可在人体骨骼中替代钙，引发骨癌和血液疾病。在海洋中，它可能影响骨骼形成的海洋生物。', 'images/Sr.png');
INSERT INTO `sea` VALUES (4, '钴', 'Co', '钴-60在某些类型的核废水中可能存在，但通常其含量相对较低。\n性质和危害：钴-60是一种强γ射线发射体，具有5年的半衰期。它在环境中可以影响生物组织，尤其是肝脏和肾脏，并可能导致癌症。', 'images/Co.png');
INSERT INTO `sea` VALUES (5, '氚', 'H', '氚的含量在核废水中通常较低，但由于其化学性质类似于水，容易在环境中扩散。\n性质和危害：氚是一种弱β射线发射体，半衰期约12年。由于其化学性质，氚能在生物体内广泛分布，尽管其放射性相对较低，但长期暴露仍然可能对人类健康造成风险。', 'images/H.png');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id` int(0) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `auth_key` varchar(32) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `password_hash` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `status` smallint(0) NOT NULL DEFAULT 10,
  `created_at` int(0) NOT NULL,
  `updated_at` int(11) UNSIGNED ZEROFILL NOT NULL,
  `verification_token` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `username`(`username`) USING BTREE,
  UNIQUE INDEX `email`(`email`) USING BTREE,
  UNIQUE INDEX `password_reset_token`(`password_reset_token`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb3 COLLATE = utf8mb3_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (3, 'admin', 'wbvdLjiKHkUcemN8ShRpg1nKgv64ZPWG', '$2y$13$gkcFSrmA91YgXDzbtdbDwe0rJ3G7jzULmiznLg0iyVbt.MzQg5Vfq', NULL, 'admin@qq.com', 10, 1676215999, 01676215999, 'cClo4NjqfB8RWyc3qHoZDYRFFRM-Fjau_1676215999');
INSERT INTO `user` VALUES (4, 'Test', 'IU9GvoXQpR9vKpk-oLo8d1vwRmXAopmR', '$2y$13$YL7I2oQhF6s2FDkn41FsU.iyM.KjtxYuC6eZPOWYzLHJvNFdHSisi', NULL, '999@qq.com', 10, 1703414957, 01703414957, 'G8vC3ciZsMet0c8w8ickdfRA4owUfNli_1703414957');
INSERT INTO `user` VALUES (5, 'Test2', 'bvpaYLf40-pCVDECbk8zFWbeOj-Kzz7z', '$2y$13$iqVawpzC6BUn/vUKOOb5jO.CbzhmzRFXg0Y51fRcR2f5QkWYa4nOO', NULL, '5@qq.com', 10, 1703416281, 01703416281, '28wI11FYMKBQl48ZfKLr52Ab3l4zb0AT_1703416281');

SET FOREIGN_KEY_CHECKS = 1;
