-- MariaDB dump 10.18  Distrib 10.5.7-MariaDB, for osx10.15 (x86_64)
--
-- Host: localhost    Database: laravel
-- ------------------------------------------------------
-- Server version	10.5.7-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blogs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `price` int(10) unsigned DEFAULT NULL,
  `old_price` int(11) DEFAULT NULL,
  `sorder` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slides` varchar(2047) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogs`
--

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `category_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sorder` int(11) DEFAULT 0,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category_product`
--

DROP TABLE IF EXISTS `category_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category_product` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `category_id` (`category_id`,`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category_product`
--

LOCK TABLES `category_product` WRITE;
/*!40000 ALTER TABLE `category_product` DISABLE KEYS */;
/*!40000 ALTER TABLE `category_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `configs`
--

DROP TABLE IF EXISTS `configs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `configs` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `page` varchar(255) NOT NULL DEFAULT '',
  `key` varchar(255) NOT NULL DEFAULT '',
  `type` enum('text','image','slide') NOT NULL DEFAULT 'text',
  `value` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `page` (`page`,`key`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `configs`
--

LOCK TABLES `configs` WRITE;
/*!40000 ALTER TABLE `configs` DISABLE KEYS */;
INSERT INTO `configs` VALUES (1,'home','title','text','EVN FC',NULL,NULL),(2,'home','welcome.title','text','Chào mừng bạn đến với',NULL,NULL),(3,'home','welcome.text','text','Giải pháp tài chính toàn diện cho Điện mặt trời mái nhà',NULL,NULL),(4,'home','welcome.button_text','text','Đăng ký vay',NULL,'2020-11-13 19:41:26'),(5,'home','welcome.button_url','text','#dang-ky',NULL,NULL),(6,'home','navigation','slide','[{    \"image_url\" : \"\",    \"text\" : \"Giải pháp\",    \"url\" : \"\"},{    \"image_url\" : \"\",    \"text\" : \"Lợi ích\",    \"url\" : \"\"},{    \"image_url\" : \"\",    \"text\" : \"Thủ tục\",    \"url\" : \"\"}]',NULL,'2020-11-13 19:25:39'),(8,'home','customer','slide','[{\"image_url\":\"/images/icon-23.png\",\"text\":\"CBCNV Nghành điện\",\"url\":\"\"},{\"image_url\":\"/images/icon-24.png\",\"text\":\"Khách hàng ngoài nghành điện\",\"url\":\"\"},{\"image_url\":\"/images/icon-25.png\",\"text\":\"CBCNV Nghành điện\",\"url\":\"\"}]',NULL,'2020-11-14 23:06:36'),(10,'home','slides','slide','[{    \"image_url\" : \"./images/Giải_pháp_tài_chính_toàn_diện.png\",    \"text\" : \"Giải pháp tài chính toàn diện\",    \"url\" : \"\"},{    \"image_url\" : \"./images/Giải_Pháp_kết_nối_hiệu_quả.png\",    \"text\" : \"Giải pháp Kết nối hiệu quả\",    \"url\" : \"\"},{    \"image_url\" : \"./images/Giải_pháp_tư_vấn_thông_minh.png\",    \"text\" : \"Giải pháp Tư vấn thông minh\",    \"url\" : \"\"}]',NULL,'2020-11-13 19:25:39'),(11,'home','reason','text','  Easy Solar là gói sản phẩm được thiết kế chuyên biệt\n                dành riêng cho\n                các khách hàng có nhu cầu đầu tư trong lĩnh vực điện mặt trời áp mái mang lại nhiều lợi ích cho khách\n                hàng.\n                <br>\n              Cơ chế Một cửa – Một chính sách – Một chất lượng nhằm\n                mang tới cho\n                khách hàng giải pháp vay với thủ tục đơn giản, chính sách giá tối ưu và chất lượng sản phẩm được đảm bảo\n                bởi sự đồng hành trong dài hạn của EVNFinance và các nhà cung cấp uy tín',NULL,'2020-11-13 19:25:39'),(13,'home','reason.text1','text','Hạn mức lên đến',NULL,'2020-11-13 19:25:39'),(15,'home','reason.text2','text','500 triệu',NULL,'2020-11-13 19:25:39'),(16,'home','reason.text3','text','Thủ tục',NULL,'2020-11-13 19:25:39'),(17,'home','reason.text4','text','Đơn giản',NULL,'2020-11-13 19:25:39'),(19,'home','reason.text5','text','Giá trị vay dự án tối đa',NULL,'2020-11-13 19:25:39'),(20,'home','reason.text6','text','  Giá trị vay dự án',NULL,'2020-11-13 19:25:39'),(21,'home','reason.text7','text','85%',NULL,'2020-11-13 19:25:39'),(22,'home','reason.text8','text','  Tối đa 85%',NULL,'2020-11-13 19:25:39'),(23,'home','reason.text9','text','Chất lượng',NULL,'2020-11-13 19:25:39'),(24,'home','reason.text10','text','Đảm bảo',NULL,'2020-11-13 19:25:39'),(25,'home','partners','slide','[{    \"image_url\" : \"images/p1.png\",    \"text\" : \"\",    \"url\" : \"\"},{    \"image_url\" : \"images/p3.png\",    \"text\" : \"\",    \"url\" : \"\"},{    \"image_url\" : \"images/p4.png\",    \"text\" : \"\",    \"url\" : \"\"}]',NULL,'2020-11-13 19:25:39'),(27,'global','steps','slide','[\n	{ \"text\" : \"Khách hàng trải nghiệm – hình thành nhu cầu và gửi  đăng ký\", \"title\" : \"Trải nghiệm\"},\n	{ \"text\" : \"Khách hàng trải nghiệm – hình thành nhu cầu và gửi  đăng ký\", \"title\" : \"Trải nghiệm\"},\n	{ \"text\" : \"Khách hàng trải nghiệm – hình thành nhu cầu và gửi  đăng ký\", \"title\" : \"Trải nghiệm\"},\n	{ \"text\" : \"Khách hàng trải nghiệm – hình thành nhu cầu và gửi  đăng ký\", \"title\" : \"Trải nghiệm\"},\n	{ \"text\" : \"Khách hàng trải nghiệm – hình thành nhu cầu và gửi  đăng ký\", \"title\" : \"Trải nghiệm\"},\n	{ \"text\" : \"Khách hàng trải nghiệm – hình thành nhu cầu và gửi  đăng ký\", \"title\" : \"Trải nghiệm\"},\n	{ \"text\" : \"Khách hàng trải nghiệm – hình thành nhu cầu và gửi  đăng ký\", \"title\" : \"Trải nghiệm\"}\n	\n]',NULL,'2020-11-13 19:25:39'),(28,'global','footer1','text','<div class=\"text-20 text-bold text-blue mb-20\">Công ty Tài chính Cổ phần Điện lực</div>\n                <div class=\"text-14 text-bold text-blue\">Tầng 14,15 & 16 Tháp B, tòa nhà EVN</div>\n                <div class=\"text-14  text-blue\">11 Cửa Bắc, P. Trúc Bạch, Q. Ba Đình, TP. Hà Nội</div>\n                <div class=\"text-14  text-blue\">Điện thoại: (84-24) 2222.9999</div>\n                <div class=\"text-14  text-blue\">Fax: (84-24) 2222.1999</div>\n                <div class=\"text-14  text-blue mt-40\">Giấy phép số 90/GP-TTĐT cấp ngày 29/08/2008</div>',NULL,NULL),(29,'global','footer2','text','<div class=\"text-20 text-bold text-blue mb-20\">Chi nhánh Thành phố Đà Nẵng</div>\n                <div class=\"text-14  text-blue\">Lô A2.12, Đường 30 tháng 4, P. Hoà Cường Bắc, Q. Hải Châu, TP. Đà Nẵng\n                </div>\n                <div class=\"text-14  text-blue\">Điện thoại: (84-236) 222.3456</div>\n                <div class=\"text-14  text-blue\">Fax: (84-236) 222.22409</div>',NULL,NULL),(30,'global','footer3','text','  <div class=\"text-20 text-bold text-blue mb-20\">Chi nhánh Thành phố Hồ Chí Minh</div>\n                <div class=\"text-14  text-blue\">Lô H (ii) và I (i), Tầng 9, Tòa nhà Sunwah Tower, 115 Đại lộ Nguyễn Huệ,\n                  P. Bến Nghé, Q. 1, TP. HCM\n                </div>\n                <div class=\"text-14  text-blue\">Điện thoại: (84-28) 2222.9999</div>\n                <div class=\"text-14  text-blue\">Fax: (84-28) 2222.8999</div>',NULL,NULL),(31,'gioi-thieu','title','text','Giới thiệu',NULL,NULL),(32,'gioi-thieu','about.text1','text','<div class=\"text-14 text-justify mb-40\">\nCông ty Tài chính Cổ phần Điện lực được chính thức thành lập và\n                hoạt\n                động từ ngày 01\n                tháng 9 năm 2008 với sứ mệnh là đầu mối thu xếp vốn, quản trị vốn cho các dự án điện thuộc Tập đoàn Điện\n                lực Việt nam và các đơn vị thành viên, đồng thời cung cấp các sản phẩm dịch vụ tài chính chuyên nghiệp\n                cho các đơn vị trong ngành điện và các đơn vị thuộc các thành phần kinh tế khác. Trải qua hơn 10 năm\n                hoạt động, Công ty đã không ngừng lớn mạnh cả về số lượng và chất lượng với uy tín và vị thế ngày càng\n                được khẳng định trên thị trường tài chính trong và ngoài nước.</div>\n\n              <div class=\"text-14 text-justify\">Với tầm nhìn “Trở thành một định chế tài chính tổng hợp cung cấp các\n                dịch vụ với chất\n                lượng tốt nhất trên nền tảng công nghệ hiện đại”, EVNFinance đã và đang đưa ra những giải pháp tài chính\n                tốt nhất, phù hợp với nhu cầu ngày càng đa dạng của thị trường, mang lại những giá trị về kinh tế và\n                cộng đồng cho đất nước.\n              </div>',NULL,NULL),(33,'gioi-thieu','about.text2','text','      Easy Solar là sản phẩm tài chính được thiết kế nhằm hỗ trợ tối đa về tài chính, kết nối và tư\n            vấn cho khách hàng trong lĩnh vực Điện mặt trời mái nhà',NULL,NULL),(34,'gioi-thieu','solutions','slide','[{\n  \"image_url\": \"images/icon-1.png\",\n  \"text\": \"Bên cạnh cam kết đồng hành cùng khách hàng trong xây dựng và đáp ứng  nhu cầu vốn triển khai dự án, Easy Solar còn đem đến các dịch vụ hữu ích như bảo hiểm, đánh giá kỹ thuật, thiết bị chất lượng, giá cả cạnh tranh… tạo nên một giải pháp tài chính đồng bộ, toàn diện.\",\n  \"title\": \"Tài chính toàn diện\"\n}, {\n  \"image_url\": \"images/icon-2.png\",\n  \"text\": \"Với ưu thế là một định chế tài chính có nhiều kinh nghiệm trong    lĩnh    vực    điện năng,    khi đến với sản phẩn EasySolar khách hàng sẽ được phục vụ bởi quy trình nhanh gọn,    thủ tục    đơn giản,    thông tin tổng hợp.    \",\n  \"title\": \"Kết nối hiệu quả\"\n}, {\n  \"image_url\": \"images/icon-3.png\",\n  \"text\": \"Easy Solar được thiết kế để thấu hiểu khách hàng, do đó với hỗ    trợ của    công nghệ số đã biến kinh nghiệm của chúng tôi thành sự trải nghiệm thông minh của khách hàng qua các    thông tin tư vấn đơn giản nhưng đem đến sự hài lòng cao nhất \",\n  \"title\": \"Tư vấn thông minh\"\n}]',NULL,NULL),(35,'global','email','text','solar@evnfc.vn',NULL,NULL),(37,'gioi-thieu','loiich','slide','[{ \"image_url\": \"images/icon-4.png\", \"title\": \"1 cửa\", \"text\": \"Tương tác khách hàng đều được thực hiện thông qua công nghệ, giúp tối giản và đơn giản hóa quy trình , thủ tục cho khách hàng\"}, { \"image_url\": \"images/icon-5.png\", \"title\": \"1 chính sách\", \"text\": \"Chính sách bán hàng nhất quán và thống nhất trên cơ sở sự hợp tác giữa tổ chức tín dụng với nhà cung cấp có năng lực trong suốt quá trình vay sẽ đem tới cho khách hàng điều kiện tín dụng cạnh tranh, giá cả thiết bị rẻ, có chất lượng qua đó đem tới cho khách hàng lợi ích cao nhất.\"}, { \"image_url\": \"images/icon-6.png\", \"title\": \"1 chất lượng\", \"text\": \"Khách hàng được lựa chọn những sản phẩm chất lương phù hợp với nhu cầu và còn được trải nghiệm chất lượng phục vụ với thái độ nhiệt tình,chu đáo,chuyên nghiệp của đội ngũ nhân viên từ bên cho vay tới nhà cung cấp.\"}]\n',NULL,NULL),(38,'global','hotline.text','text','Máy lẻ 761 hoặc 762 hoặc 763',NULL,NULL),(39,'global','hotline','text','024.2222.9999',NULL,NULL),(40,'lien-he','title','text','Liên hệ',NULL,NULL),(41,'lien-he','map','text','        <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.703557953814!2d105.84139231598635!3d21.04454419261289!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abf505b07987%3A0x790ac61919d4bcaf!2sEVNFinance!5e0!3m2!1sen!2s!4v1605424874534!5m2!1sen!2s\" width=\"100%\" height=\"100%\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>\n',NULL,NULL),(42,'ho-tro','faq','slide','[{\"title\":\"Tôi muốn tìm hiểu đối tượng cho vay của gói Easy Solar?\",\"text\":\"Đối tượng áp dụng CBCNV Đã ký hợp đồng lao động không xác định thời hạn với ngành điện, hiện đang công tác tại EVNHCMC.\"},{\"title\":\"Tôi có thể được vay tối đa bao nhiêu để lắp đặt Hệ thống Điện mặt trời mái nhà EVNSOLAR?\",\"text\":\"Hạn mức cho vay tối đa của chương trình đến 85% tổng mức đầu tư hệ thống.\"},{\"title\":\"Tôi cần có hồ sơ/ giấy tờ gì của cơ quan quản lý để xác nhận quá trình làm việc tại EVN hoặc đơn vị thành viên?\",\"text\":\"Nếu Quý khách hàng là CBCNV có nhu cầu vay, Quý khách hàng có thể thực hiện theo mẫu được cung cấp bởi EVNFinance hoặc yêu cầu EVNFinance thực hiện xác nhận với cơ quan quản lý của Quý khách hàng.\"},{\"title\":\"Tôi muốn biết các điều kiện về mái nhà để lắp đặt hệ thống Điện mặt trời mái nhà EVNSOLAR?\",\"text\":\"Quý khách hàng có thể liên hệ ngay với EVNFinance để kết nối với nhà cung cấp. Đơn vị khảo sát của Nhà cung cấp sẽ đến tận nơi địa chỉ lắp đặt để tư vấn cho Quý khách hàng.\"},{\"title\":\"Trong trường hợp tôi muốn bán điện từ hệ thống Điện mặt trời mái nhà EVNSOLAR thì tôi cần thực hiện những thủ tục như thế nào?\",\"text\":\"Quý khách hàng sẽ được Nhà cung cấp phối hợp với cơ quan Điện lực địa phương thực hiện thủ tục này\"},{\"title\":\"Tôi cần chuẩn bị những hồ sơ/ thủ tục gì để được xác nhận đủ điều kiện lắp đặt và đấu nối của chương trình Điện mặt trời mái nhà EVNSOLAR?\",\"text\":\"Quý khách hàng sẽ được Nhà cung cấp phối hợp với cơ quan Điện lực địa phương thực hiện thủ tục này.\"}]',NULL,'2020-11-15 00:40:37');
/*!40000 ALTER TABLE `configs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2018_06_09_033536_entrust_setup_tables',1),(4,'2018_06_13_084509_create_posts_table',1),(5,'2018_08_19_082139_create_products_table',1),(6,'2018_09_10_222535_create_categories_table',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `address` varchar(1023) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,'0974040092','Quan Le',NULL,NULL,1,'2018-09-19 02:57:58','2018-09-19 02:57:58'),(2,'0974040092','Lê Văn Quân','Đại chỉ','quanbka.cntt2@gmail.com',30,'2018-09-19 03:39:32','2018-09-19 03:39:32'),(3,'0974040092','',NULL,NULL,33,'2018-09-19 04:15:50','2018-09-19 04:15:50'),(4,'0974040092','Quan Le',NULL,NULL,33,'2018-09-20 07:39:00','2018-09-20 07:39:00'),(5,'0974040092','Quan Le',NULL,NULL,33,'2018-09-20 07:44:19','2018-09-20 07:44:19'),(6,'0974040092','Le Van Quan',NULL,NULL,32,'2018-09-21 14:22:40','2018-09-21 14:22:40');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permission_role`
--

DROP TABLE IF EXISTS `permission_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permission_role` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_role_id_foreign` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission_role`
--

LOCK TABLES `permission_role` WRITE;
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;
/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post_categories`
--

DROP TABLE IF EXISTS `post_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `post_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `parent_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post_categories`
--

LOCK TABLES `post_categories` WRITE;
/*!40000 ALTER TABLE `post_categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `post_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `price` int(10) unsigned DEFAULT NULL,
  `old_price` int(11) DEFAULT NULL,
  `sorder` int(11) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slides` varchar(2047) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(2047) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_user`
--

DROP TABLE IF EXISTS `role_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role_user` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `role_user_role_id_foreign` (`role_id`),
  CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_user`
--

LOCK TABLES `role_user` WRITE;
/*!40000 ALTER TABLE `role_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `role_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `api_token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_api_token_unique` (`api_token`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (3,'Le Van Quan','quanbka.cntt@gmail.com','2y109uJeSUnAdC05L4gPUuvXmuKJTKgUmUr3SWHdDea2ZJl6DUDsfUsRW','$2y$10$qg2WFJY9cIHQTKI4s6REjugiq/HbHoElA8xTfdahBIg8ahgDYA4Oy','kqtLw58tt696uXHYBC74d6xSpfzKkdLOs23r9NQ1LbJOwFJkBE0EUNztQB1G','2018-09-11 00:40:40','2018-09-11 00:40:40'),(7,'Quan Le','quanbka.cntt2@gmail.com','2y10Jq1ge8bbu2iHZ1XI5tZOyXFJLg80wdi1VoKy1vDIWkNNySEVCMe','$2y$10$qXlsd2laSfkAzMeJMqhdzOdO/kYpxnP4JZVTrOX5tJvlHJFYp19/S','3zmImk2ivnJnbdJoRKkU605unTgZ54VSCBhcgVuOreeoE2PKq6dyYxGeys8W','2018-09-14 00:38:50','2018-09-14 00:38:50');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-15 14:41:23
