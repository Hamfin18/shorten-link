-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for db_shorten_link
CREATE DATABASE IF NOT EXISTS `db_shorten_link` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `db_shorten_link`;

-- Dumping structure for table db_shorten_link.link_list
CREATE TABLE IF NOT EXISTS `link_list` (
  `p_link` varchar(255) NOT NULL,
  `r_link` varchar(255) NOT NULL,
  PRIMARY KEY (`p_link`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table db_shorten_link.link_list: ~3 rows (approximately)
DELETE FROM `link_list`;
/*!40000 ALTER TABLE `link_list` DISABLE KEYS */;
INSERT INTO `link_list` (`p_link`, `r_link`) VALUES
	('2Xwzf7', 'www.google.com'),
	('TcvCJIt4tO', 'www.youtube.com'),
	('xyVQIt57Lh', 'tokopedia.com');
/*!40000 ALTER TABLE `link_list` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
