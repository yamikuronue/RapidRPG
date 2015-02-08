--
-- Create Database: `rapidrpgtest`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `rapidrpgtest` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `rapidrpgtest`;
SET FOREIGN_KEY_CHECKS=0;

--
-- Users tables
--

DROP TABLE IF EXISTS `users`;
 CREATE TABLE `users` (
  `username` varchar(20) NOT NULL,
  `Pass` char(60) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `userID` int(8) NOT NULL AUTO_INCREMENT,
  `mature` enum('FALSE','TRUE') NOT NULL,
  `tagger` enum('FALSE','TRUE') NOT NULL,
  `admin` enum('FALSE','TRUE') NOT NULL,
  `receiveMail` enum('FALSE','TRUE') NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB AUTO_INCREMENT=2272 DEFAULT CHARSET=latin1;


--
-- Characters
--

DROP TABLE IF EXISTS `chars`;
CREATE TABLE `chars` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `owner` int(8) NOT NULL,
  `fName` varchar(128) NOT NULL,
  `lName` varchar(128) NOT NULL,
  `gender` enum('male','female','other') DEFAULT NULL,
  `bday` date DEFAULT NULL,
  `description` mediumtext NOT NULL,
  `personality` mediumtext NOT NULL,
  `history` mediumtext NOT NULL,
  `notes` mediumtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE chars
    ADD FOREIGN KEY
    (owner)
    REFERENCES users (userID);

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE `pages` (
  `name` varchar(20) NOT NULL,
  `slug` varchar(20) NOT NULL,
  `content` longtext NOT NULL,
  `menu` enum('true','false') DEFAULT 'false',
  `menu_order` int(3),
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

SET FOREIGN_KEY_CHECKS=1;

