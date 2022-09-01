

CREATE TABLE `profileimg` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `unique_id` int(11) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT '',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

#
# Data for table "profileimg"
#

INSERT INTO `profileimg` VALUES (16,687994284,'AFS/profile/68799428419_07_2022.jpg','1'),(17,20051207,'AFS/profile/2005120719_07_2022.jpg','1');

#
# Structure for table "rasm"
#

CREATE TABLE `rasm` (
  `rasm_id` int(11) NOT NULL AUTO_INCREMENT,
  `unique_id` varchar(255) DEFAULT NULL,
  `rasm_name` varchar(255) DEFAULT NULL,
  `rasm_status` text,
  `location` varchar(255) DEFAULT NULL,
  `sahifa` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`rasm_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

#
# Data for table "rasm"
#

INSERT INTO `rasm` VALUES (15,'558410318','Sizni deb dostlarim','Bu rasm сербияни qozgolonga olib keldi','AFS/rasm/558410318Sizni deb dostlarim.jpg','bosh sahifa','2022-07-19'),(17,'1407610983','Afg&#039;onistonda','???????????????????????????????????????????????????????????????????????????pphp/???','AFS/rasm/1407610983.jpg','bosh sahifa','2022-07-19'),(18,'1277650508','O&#039;zbekiston/','/br&gt;&lt;input type=&quot;text&quot;&gt;&lt;?php ?&gt;','AFS/rasm/1277650508.jpg','bosh sahifa','2022-07-19'),(20,'989003888','Afg&#039;onistonda','&lt;Bu mening rasmim&gt;','AFS/rasm/989003888bosh sahifa19_07_2022.jpg','bosh sahifa','2022-07-19'),(21,'542311167','Ismoilov Farrux','Instagram login 1.isma1loff\r\nfollow me','AFS/rasm/542311167Kashfiyot20_07_2022.jpg','Kashfiyot','2022-07-20'),(23,'1066866192','Sizni deb dostlarim','Photodesigner.uz Logotip','AFS/rasm/1066866192Kashfiyot20_07_2022.png','Kashfiyot','2022-07-20'),(24,'810206540','Afg&#039;onistonda','asd','AFS/rasm/810206540Dunyo tabiiy geografiyasi20_07_2022.png','Dunyo tabiiy geografiyasi','2022-07-20'),(25,'1200501523','Afgonistonda','asd','AFS/rasm/1200501523Orta osiyo tabiiy geografiyasi20_07_2022.png','Orta osiyo tabiiy geografiyasi','2022-07-20'),(26,'328650941','Afgonistonda','ad','AFS/rasm/328650941Ozbekiston tabiiy geografiyasi20_07_2022.png','Ozbekiston tabiiy geografiyasi','2022-07-20');

#
# Structure for table "sms"
#

CREATE TABLE `sms` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) DEFAULT NULL,
  `xabar` text,
  `email` varchar(255) DEFAULT NULL,
  `sana` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

#
# Data for table "sms"
#

INSERT INTO `sms` VALUES (5,'Farruxbek','Mening birinchi saytga tashrifim juda qiziq bo&#039;ldi bu esa juda qiziq :)','umidjonismoilov47@gmail.com','08/06/2022'),(6,'Farruxbek','Salom mening yaxshi dostim sizga shuni malum qilamanki siz iflos yaramas it bolasisiz','123@gmail.com','10/06/2022'),(7,'Farruxbek','Farrucbek okasining saytiga xush kelibsiz birodar aziz nimlar qilyapsz iflos haromi\r\n','umidjonismoilov47@gmail.com','16/06/2022');

#
# Structure for table "status"
#

CREATE TABLE `status` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `nomi` varchar(255) DEFAULT NULL,
  `snomi` varchar(255) DEFAULT NULL,
  `mnomi` varchar(255) DEFAULT '',
  `mnomi2` varchar(255) DEFAULT '',
  `mnomi3` varchar(255) DEFAULT '',
  `mnomi4` varchar(255) DEFAULT '',
  `mnomi5` varchar(255) DEFAULT '',
  `mnomi6` varchar(255) DEFAULT '',
  `mnomi7` varchar(255) DEFAULT '',
  `mnomi8` varchar(255) DEFAULT '',
  `mnomi9` varchar(255) DEFAULT '',
  `mnomi10` varchar(255) DEFAULT '',
  `soni` varchar(255) DEFAULT '',
  `soni2` varchar(255) DEFAULT NULL,
  `soni3` varchar(255) DEFAULT NULL,
  `soni4` varchar(255) DEFAULT NULL,
  `soni5` varchar(255) DEFAULT NULL,
  `soni6` varchar(255) DEFAULT NULL,
  `soni7` varchar(255) DEFAULT NULL,
  `soni8` varchar(255) DEFAULT NULL,
  `soni9` varchar(255) DEFAULT NULL,
  `soni10` varchar(255) DEFAULT NULL,
  `sahifa` varchar(255) DEFAULT NULL,
  `sana` date DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

#
# Data for table "status"
#

INSERT INTO `status` VALUES (1,'Pullar uchun ochilgan stata','Ozb pulllar','Ozbekiston','Navoiy','Buxoro','samarqand','Andijon','ViloyaT','Ozbekiston','qorq','qwe','wqee','100','123','111','222','333','444','499','555','666','777','statistika','2022-07-19'),(2,'Mobile statistika','Mobile price dollar $','Xiomi','Nokia','Samsung','Microsoft','Iphone ','','','','','','2140','3230','5472','6849','9834','','','','','','bosh sahifa','2022-07-18');

#
# Structure for table "users"
#

CREATE TABLE `users` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `unique_id` int(11) DEFAULT NULL,
  `Ism` varchar(55) DEFAULT NULL,
  `fam` varchar(55) DEFAULT NULL,
  `email` varchar(55) DEFAULT NULL,
  `tel` bigint(9) DEFAULT '998902581812',
  `manzil` varchar(255) DEFAULT NULL,
  `Jinsi` varchar(5) DEFAULT NULL,
  `Login` varchar(25) DEFAULT NULL,
  `parol` varchar(255) DEFAULT '0',
  `daraja` int(1) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `sana` date DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8;

#
# Data for table "users"
#

INSERT INTO `users` VALUES (44,20051207,'Farrux','Ismoilov','farrux@gmail.com',902581812,'Toshkent','Erkak','Farruxbek','9539cfc62cf3caa7c0de0ffa829c71d5',3,'Onlayn','2022-07-16'),(46,687994284,'Islom','Farruxbekovich','farrux@gmail.com',902581812,'Namangan','Erkak','Bekbek','81dc9bdb52d04dc20036dbd8313ed055',3,'Onlayn','2022-07-16'),(47,865277436,'Sara','sara','sara@gmail.com',9907770000,'Fargona','Ayol','GirlSara','81dc9bdb52d04dc20036dbd8313ed055',3,'Aktiv','2022-07-20');

#
# Structure for table "video"
#

CREATE TABLE `video` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `unique_id` varchar(255) DEFAULT NULL,
  `video_name` varchar(100) NOT NULL,
  `video_status` text,
  `location` varchar(100) NOT NULL,
  `sahifa` varchar(255) DEFAULT NULL,
  `sana` date DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

#
# Data for table "video"
#

INSERT INTO `video` VALUES (60,'1063420316','Faqatgina farruxbek','Bu video sasytimizni videosi','AFS/video/1063420316bosh sahifaFaqatgina farruxbek.mp4','bosh sahifa','2022-07-16'),(61,'472721234','Menga baribir qanaqa video bolishidan qayit nazar joyloraman','bariribir seum.php','AFS/video/472721234bosh sahifa19_07_2022.mp4','bosh sahifa','2022-07-19'),(63,'420006220','Photodesigner.uz','Photodesigner.uz','AFS/video/420006220Kashfiyot20_07_2022.mp4','Kashfiyot','2022-07-20');
