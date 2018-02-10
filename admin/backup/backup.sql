DROP TABLE activitylog;

CREATE TABLE `activitylog` (
  `AL_Code` int(8) NOT NULL AUTO_INCREMENT,
  `CLIENT_ID` int(8) DEFAULT NULL,
  `COACH_ID` int(8) NOT NULL,
  `Activity` text NOT NULL,
  `AL_Date` date NOT NULL,
  `AL_StartTime` time NOT NULL,
  `AL_EndTime` time NOT NULL,
  PRIMARY KEY (`AL_Code`)
) ENGINE=InnoDB AUTO_INCREMENT=120 DEFAULT CHARSET=latin1;

INSERT INTO activitylog VALUES("75","","22","Studio Class Session","2018-02-06","16:01:00","18:01:00"); 
INSERT INTO activitylog VALUES("76","69","23","Personal Training Session","2018-02-06","14:00:00","15:59:00"); 
INSERT INTO activitylog VALUES("77","68","22","Studio Class Session","2018-02-06","14:01:00","16:00:00"); 
INSERT INTO activitylog VALUES("78","68","23","Personal Training Session","2018-02-06","08:01:00","09:01:00"); 
INSERT INTO activitylog VALUES("79","72","22","Studio Class Session","2018-02-04","14:01:00","16:00:00"); 
INSERT INTO activitylog VALUES("80","68","22","Studio Class Session","2018-02-05","16:01:00","18:01:00"); 
INSERT INTO activitylog VALUES("81","68","22","Studio Class Session","2018-02-05","16:01:00","18:01:00"); 
INSERT INTO activitylog VALUES("82","68","22","Studio Class Session","2018-02-05","16:01:00","18:01:00"); 
INSERT INTO activitylog VALUES("83","69","22","Studio Class Session","2018-02-05","16:01:00","18:01:00"); 
INSERT INTO activitylog VALUES("84","73","22","Studio Class Session","2018-02-05","16:01:00","18:01:00"); 
INSERT INTO activitylog VALUES("85","69","22","Studio Class Session","2018-02-05","16:01:00","18:01:00"); 
INSERT INTO activitylog VALUES("86","69","22","Studio Class Session","2018-02-05","16:01:00","18:01:00"); 
INSERT INTO activitylog VALUES("87","71","22","Studio Class Session","2018-02-05","16:01:00","18:01:00"); 
INSERT INTO activitylog VALUES("88","76","23","Personal Training Session","2018-02-07","14:01:00","15:04:00"); 
INSERT INTO activitylog VALUES("89","77","23","Personal Training Session","2018-02-07","14:00:00","15:01:00"); 
INSERT INTO activitylog VALUES("90","78","23","Personal Training Session","2018-02-07","15:02:00","17:03:00"); 
INSERT INTO activitylog VALUES("91","68","23","Personal Training Session","2018-02-07","14:02:00","16:01:00"); 
INSERT INTO activitylog VALUES("92","69","23","Personal Training Session","2018-02-08","14:01:00","15:02:00"); 
INSERT INTO activitylog VALUES("93","69","23","Personal Training Session","2018-02-09","14:01:00","14:03:00"); 
INSERT INTO activitylog VALUES("94","69","23","Personal Training Session","2018-02-10","14:01:00","15:01:00"); 
INSERT INTO activitylog VALUES("95","69","23","Personal Training Session","2018-02-15","14:01:00","14:02:00"); 
INSERT INTO activitylog VALUES("96","69","23","Personal Training Session","2018-02-11","15:03:00","17:02:00"); 
INSERT INTO activitylog VALUES("97","69","23","Personal Training Session","2018-02-16","15:02:00","16:01:00"); 
INSERT INTO activitylog VALUES("98","69","23","Personal Training Session","2018-02-23","15:00:00","16:02:00"); 
INSERT INTO activitylog VALUES("99","69","23","Personal Training Session","2018-02-28","14:01:00","16:02:00"); 
INSERT INTO activitylog VALUES("100","68","22","Studio Class Session","2018-02-04","14:01:00","16:00:00"); 
INSERT INTO activitylog VALUES("101","68","22","Studio Class Session","2018-02-04","14:01:00","16:00:00"); 
INSERT INTO activitylog VALUES("102","68","22","Studio Class Session","2018-02-04","14:01:00","16:00:00"); 
INSERT INTO activitylog VALUES("103","68","22","Studio Class Session","2018-02-04","14:01:00","16:00:00"); 
INSERT INTO activitylog VALUES("104","68","22","Studio Class Session","2018-02-04","14:01:00","16:00:00"); 
INSERT INTO activitylog VALUES("105","69","22","Studio Class Session","2018-02-04","14:01:00","16:00:00"); 
INSERT INTO activitylog VALUES("106","68","22","Studio Class Session","2018-02-04","14:01:00","16:00:00"); 
INSERT INTO activitylog VALUES("107","69","22","Studio Class Session","2018-02-04","14:01:00","16:00:00"); 
INSERT INTO activitylog VALUES("108","68","22","Studio Class Session","2018-02-04","14:01:00","16:00:00"); 
INSERT INTO activitylog VALUES("109","68","22","Studio Class Session","2018-02-04","14:01:00","16:00:00"); 
INSERT INTO activitylog VALUES("110","69","22","Studio Class Session","2018-02-04","14:01:00","16:00:00"); 
INSERT INTO activitylog VALUES("111","70","22","Studio Class Session","2018-02-04","14:01:00","16:00:00"); 
INSERT INTO activitylog VALUES("112","69","22","Studio Class Session","2018-02-04","14:01:00","16:00:00"); 
INSERT INTO activitylog VALUES("113","","23","Studio Class Session","2018-02-10","07:00:00","18:00:00"); 
INSERT INTO activitylog VALUES("114","76","23","Studio Class Session","2018-02-10","07:00:00","18:00:00"); 
INSERT INTO activitylog VALUES("115","69","23","Studio Class Session","2018-02-10","07:00:00","18:00:00"); 
INSERT INTO activitylog VALUES("116","78","23","Studio Class Session","2018-02-10","07:00:00","18:00:00"); 
INSERT INTO activitylog VALUES("117","68","23","Studio Class Session","2018-02-10","07:00:00","18:00:00"); 
INSERT INTO activitylog VALUES("118","78","23","Studio Class Session","2018-02-10","07:00:00","18:00:00"); 
INSERT INTO activitylog VALUES("119","77","23","Studio Class Session","2018-02-10","07:00:00","18:00:00"); 



DROP TABLE attendance;

CREATE TABLE `attendance` (
  `A_Code` int(8) NOT NULL AUTO_INCREMENT,
  `CLIENT_ID` int(8) NOT NULL,
  `A_TimeIn` time NOT NULL,
  `A_TimeOut` text,
  `A_TowelQty` int(2) NOT NULL,
  `A_TowelReturn` int(2) NOT NULL,
  `A_LockerKey` int(2) NOT NULL,
  `A_ReturnedKey` text NOT NULL,
  `A_Year` varchar(10) NOT NULL,
  `A_Month` varchar(10) NOT NULL,
  `A_Date` date NOT NULL,
  `A_status` varchar(10) NOT NULL,
  PRIMARY KEY (`A_Code`)
) ENGINE=InnoDB AUTO_INCREMENT=453 DEFAULT CHARSET=latin1;

INSERT INTO attendance VALUES("374","68","23:05:03","23:09:07","2","2","1","Returned","2018","Feb","2018-02-02","Member"); 
INSERT INTO attendance VALUES("375","71","23:05:17","23:09:03","3","3","5","Returned","2018","Feb","2018-02-02","Walk-in"); 
INSERT INTO attendance VALUES("376","69","23:07:35","23:08:56","2","2","7","Returned","2018","Feb","2018-02-02","Member"); 
INSERT INTO attendance VALUES("377","68","23:09:29","23:09:41","1","1","1","Returned","2018","Feb","2018-02-02","Member"); 
INSERT INTO attendance VALUES("378","68","00:24:16","01:55:07","4","4","1","Returned","2018","Feb","2018-02-02","Member"); 
INSERT INTO attendance VALUES("379","71","00:47:13","01:06:13","3","3","3","Returned","2018","Feb","2018-02-02","Walk-in"); 
INSERT INTO attendance VALUES("380","69","00:47:21","00:59:56","4","2","8","Returned","2018","Feb","2018-02-02","Member"); 
INSERT INTO attendance VALUES("381","69","01:17:03","01:54:52","1","1","2","Returned","2018","Feb","2018-02-02","Member"); 
INSERT INTO attendance VALUES("382","70","01:34:20","01:55:04","2","2","3","Returned","2018","Feb","2018-02-02","Walk-in"); 
INSERT INTO attendance VALUES("383","75","01:36:58","01:54:56","1","1","8","Returned","2018","Feb","2018-02-02","Member"); 
INSERT INTO attendance VALUES("384","72","01:41:12","01:55:01","3","3","14","Returned","2018","Feb","2018-02-02","Walk-in"); 
INSERT INTO attendance VALUES("385","68","01:55:11","01:56:15","2","2","1","Returned","2018","Feb","2018-02-02","Member"); 
INSERT INTO attendance VALUES("386","68","01:56:21","01:56:42","1","1","1","Returned","2018","Feb","2018-02-02","Member"); 
INSERT INTO attendance VALUES("387","68","01:56:45","02:18:02","1","1","1","Returned","2018","Feb","2018-02-02","Member"); 
INSERT INTO attendance VALUES("388","69","02:01:32","","2","0","6","","2018","Feb","2018-02-02","Member"); 
INSERT INTO attendance VALUES("389","70","02:07:16","","2","0","7","","2018","Feb","2018-02-02","Walk-in"); 
INSERT INTO attendance VALUES("390","73","02:14:59","","2","0","12","","2018","Feb","2018-02-02","Walk-in"); 
INSERT INTO attendance VALUES("391","75","02:15:20","","2","0","10","","2018","Feb","2018-02-02","Member"); 
INSERT INTO attendance VALUES("392","68","02:18:07","02:18:49","2","2","1","Returned","2018","Feb","2018-02-02","Member"); 
INSERT INTO attendance VALUES("393","68","02:18:55","02:20:08","2","2","1","Returned","2018","Feb","2018-02-02","Member"); 
INSERT INTO attendance VALUES("394","68","02:20:12","02:23:07","1","1","1","Returned","2018","Feb","2018-02-02","Member"); 
INSERT INTO attendance VALUES("395","68","02:23:15","02:23:48","2","2","1","Returned","2018","Feb","2018-02-02","Member"); 
INSERT INTO attendance VALUES("396","68","02:24:05","02:24:54","2","2","1","Returned","2018","Feb","2018-02-02","Member"); 
INSERT INTO attendance VALUES("398","68","20:25:54","20:30:09","2","2","1","","2018","Feb","2018-02-03","Member"); 
INSERT INTO attendance VALUES("399","69","20:28:47","","2","0","2","","2018","Feb","2018-02-03","Member"); 
INSERT INTO attendance VALUES("401","70","20:36:23","","3","0","6","","2018","Feb","2018-02-03","Walk-in"); 
INSERT INTO attendance VALUES("402","72","20:54:23","","4","0","10","","2018","Feb","2018-02-03","Walk-in"); 
INSERT INTO attendance VALUES("403","68","20:01:31","20:52:01","2","2","1","Returned","2018","Feb","2018-02-04","Member"); 
INSERT INTO attendance VALUES("404","69","20:46:19","20:49:38","2","2","3","Returned","2018","Feb","2018-02-04","Member"); 
INSERT INTO attendance VALUES("405","69","20:51:13","20:51:55","2","2","4","Returned","2018","Feb","2018-02-04","Member"); 
INSERT INTO attendance VALUES("406","68","20:52:07","20:53:17","2","2","1","Returned","2018","Feb","2018-02-04","Member"); 
INSERT INTO attendance VALUES("408","69","20:53:41","","2","0","5","","2018","Feb","2018-02-04","Member"); 
INSERT INTO attendance VALUES("409","73","00:26:03","","1","0","7","","2018","Feb","2018-02-04","Walk-in"); 
INSERT INTO attendance VALUES("411","69","16:09:24","","2","0","6","","2018","Feb","2018-02-06","Member"); 
INSERT INTO attendance VALUES("423","68","17:20:09","17:42:24","2","2","1","","2018","Feb","2018-02-06","Member"); 
INSERT INTO attendance VALUES("429","68","17:43:53","17:45:45","2","2","1","Returned","2018","Feb","2018-02-06","Member"); 
INSERT INTO attendance VALUES("430","68","17:45:27","17:45:49","2","2","1","Returned","2018","Feb","2018-02-06","Member"); 
INSERT INTO attendance VALUES("431","68","17:45:39","17:45:51","2","2","1","","2018","Feb","2018-02-06","Member"); 
INSERT INTO attendance VALUES("432","68","17:47:20","17:48:32","1","1","1","Returned","2018","Feb","2018-02-06","Member"); 
INSERT INTO attendance VALUES("433","68","17:48:03","17:48:35","1","1","1","Returned","2018","Feb","2018-02-06","Member"); 
INSERT INTO attendance VALUES("434","68","17:48:26","17:48:40","1","1","1","Returned","2018","Feb","2018-02-06","Member"); 
INSERT INTO attendance VALUES("435","68","17:51:49","19:21:39","1","1","1","Returned","2018","Feb","2018-02-06","Member"); 
INSERT INTO attendance VALUES("436","68","17:52:34","19:21:54","1","1","1","Returned","2018","Feb","2018-02-06","Member"); 
INSERT INTO attendance VALUES("437","68","17:53:04","19:22:00","1","1","1","Returned","2018","Feb","2018-02-06","Member"); 
INSERT INTO attendance VALUES("438","68","17:53:48","","1","0","1","","2018","Feb","2018-02-06","Member"); 
INSERT INTO attendance VALUES("439","70","19:24:18","23:26:05","3","3","5","Returned","2018","Feb","2018-02-06","Member"); 
INSERT INTO attendance VALUES("440","70","19:24:32","","3","0","5","","2018","Feb","2018-02-06","Member"); 
INSERT INTO attendance VALUES("441","73","19:25:01","","2","0","10","","2018","Feb","2018-02-06","Walk-in"); 
INSERT INTO attendance VALUES("442","74","04:27:01","","3","0","13","","2018","Feb","2018-02-06","Walk-in"); 
INSERT INTO attendance VALUES("443","68","19:23:02","23:01:33","2","2","1","Returned","2018","Feb","2018-02-07","Member"); 
INSERT INTO attendance VALUES("444","72","22:18:32","","2","0","4","","2018","Feb","2018-02-07","Walk-in"); 
INSERT INTO attendance VALUES("445","68","18:37:07","18:48:07","2","2","1","Unreturned","2018","Feb","2018-02-08","Member"); 
INSERT INTO attendance VALUES("446","68","18:48:28","18:48:43","2","1","1","Returned","2018","Feb","2018-02-08","Member"); 
INSERT INTO attendance VALUES("447","68","03:53:13","03:53:37","2","1","4","Returned","2018","Feb","2018-02-08","Member"); 
INSERT INTO attendance VALUES("448","69","03:55:06","03:55:18","4","1","1","Returned","2018","Feb","2018-02-08","Member"); 
INSERT INTO attendance VALUES("449","79","04:05:31","04:07:13","3","3","7","Returned","2018","Feb","2018-02-08","Walk-in"); 
INSERT INTO attendance VALUES("450","68","17:08:16","","3","0","1","","2018","Feb","2018-02-10","Member"); 
INSERT INTO attendance VALUES("451","69","17:09:27","17:10:36","4","4","3","Returned","2018","Feb","2018-02-10","Member"); 
INSERT INTO attendance VALUES("452","76","17:11:19","23:59:44","2","2","3","Unreturned","2018","Feb","2018-02-10","Member"); 



DROP TABLE backuphistory;

CREATE TABLE `backuphistory` (
  `backup_id` int(8) NOT NULL AUTO_INCREMENT,
  `backup_type` varchar(6) NOT NULL,
  `backup_date` date NOT NULL,
  `backup_time` time NOT NULL,
  PRIMARY KEY (`backup_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

INSERT INTO backuphistory VALUES("2","Export","2018-01-27","02:14:00"); 
INSERT INTO backuphistory VALUES("3","Import","2018-01-27","02:19:00"); 
INSERT INTO backuphistory VALUES("4","Export","2018-01-27","02:20:00"); 
INSERT INTO backuphistory VALUES("5","Import","2018-01-27","02:49:00"); 
INSERT INTO backuphistory VALUES("11","Export","2018-01-27","03:25:00"); 
INSERT INTO backuphistory VALUES("12","Export","2018-02-02","07:51:00"); 
INSERT INTO backuphistory VALUES("13","Import","2018-02-06","11:53:00"); 
INSERT INTO backuphistory VALUES("14","Import","2018-02-06","11:53:00"); 
INSERT INTO backuphistory VALUES("15","Export","2018-02-06","11:53:00"); 
INSERT INTO backuphistory VALUES("16","Import","2018-02-06","05:01:00"); 
INSERT INTO backuphistory VALUES("17","Import","2018-02-06","05:01:00"); 
INSERT INTO backuphistory VALUES("18","Import","2018-02-06","08:00:00"); 
INSERT INTO backuphistory VALUES("19","Export","2018-02-09","04:26:00"); 



DROP TABLE client;

CREATE TABLE `client` (
  `CLIENT_ID` int(8) NOT NULL AUTO_INCREMENT,
  `CLIENT_FirstName` text NOT NULL,
  `CLIENT_MiddleName` text NOT NULL,
  `CLIENT_LastName` text NOT NULL,
  `CLIENT_Gender` text NOT NULL,
  `CLIENT_Email` varchar(20) NOT NULL,
  `CLIENT_RegStatus` text NOT NULL,
  `CLIENT_StatusDuration` varchar(11) NOT NULL,
  `CLIENT_ContactNumber` text NOT NULL,
  `CLIENT_userAccount` text NOT NULL,
  `CLIENT_bday` date NOT NULL,
  `CLIENT_year` varchar(10) NOT NULL,
  `CLIENT_month` varchar(10) NOT NULL,
  `CLIENT_day` varchar(10) NOT NULL,
  `CLIENT_regDATE` varchar(11) NOT NULL,
  `month` char(3) NOT NULL,
  `year` char(4) NOT NULL,
  PRIMARY KEY (`CLIENT_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=latin1;

INSERT INTO client VALUES("68","Ivan Ray","Maple","Buglosa","Male","ivanraybuglosa@gmail","Member","","09123456768","ivanbuglosa","1954-08-08","1954","08","08","2018-01-27","",""); 
INSERT INTO client VALUES("69","Brix Rodman","ads","Nessia","Male","brixaissen@gmail.com","Member","","1111","","1955-08-10","1955","10","08","2018-01-27","",""); 
INSERT INTO client VALUES("70","dasd","asd","asd","Male","asd","Member","","asd","asd","1948-06-01","1948","06","01","2018-01-28","",""); 
INSERT INTO client VALUES("71","d","d","dsadd","Male","d","Walk-in","","d","d","1955-09-09","1955","09","09","2018-01-28","",""); 
INSERT INTO client VALUES("72","d","d","d","Male","d","Walk-in","","d","d","1951-02-01","1951","02","01","2018-01-29","",""); 
INSERT INTO client VALUES("73","d","d","d","Male","d","Walk-in","","d","d","1954-08-07","1954","08","07","2018-01-29","",""); 
INSERT INTO client VALUES("74","d","d","d","Male","d","Walk-in","","d","d","1955-09-07","1955","09","07","2018-01-29","Jan","2018"); 
INSERT INTO client VALUES("75","d","d","d","Male","d","Member","","d","d","1954-09-08","1954","09","08","2018-01-29","Jan","2018"); 
INSERT INTO client VALUES("76","Hans","Patrick","Legislador","Male","hanslegislador@gmail","Member","","09124412142","","1963-03-06","1963","03","06","2018-02-07","Feb","2018"); 
INSERT INTO client VALUES("77","maria","labo","labo","Female","mariagoestogym@gmail","Walk-in","","01231331","","1955-09-09","1955","09","09","2018-02-07","Feb","2018"); 
INSERT INTO client VALUES("78","Mico ","Catibog","Catibog","Male","migocatibog@gmail.co","Walk-in","","091231341412","","1954-07-08","1954","07","08","2018-02-07","Feb","2018"); 
INSERT INTO client VALUES("79","Steve","Salu","Dares","Male","steveeeeeee@gmail.co","Walk-in","","09284326383","","1996-07-10","1996","07","10","2018-02-08","Feb","2018"); 



DROP TABLE clientassignment;

CREATE TABLE `clientassignment` (
  `CA_Code` int(8) NOT NULL AUTO_INCREMENT,
  `CLIENT_ID` int(8) NOT NULL,
  `SCS_Code` int(8) NOT NULL,
  `CA_RegDate` date NOT NULL,
  `CA_Remaining` int(2) NOT NULL,
  `month` char(3) NOT NULL,
  `year` char(4) NOT NULL,
  PRIMARY KEY (`CA_Code`)
) ENGINE=InnoDB AUTO_INCREMENT=117 DEFAULT CHARSET=latin1;

INSERT INTO clientassignment VALUES("110","68","45","2018-02-07","37","Feb","2018"); 
INSERT INTO clientassignment VALUES("111","76","49","2018-02-10","35","Feb","2018"); 
INSERT INTO clientassignment VALUES("112","69","49","2018-02-10","35","Feb","2018"); 
INSERT INTO clientassignment VALUES("114","68","49","2018-02-10","35","Feb","2018"); 
INSERT INTO clientassignment VALUES("116","77","49","2018-02-10","35","Feb","2018"); 



DROP TABLE coach;

CREATE TABLE `coach` (
  `COACH_ID` int(8) NOT NULL AUTO_INCREMENT,
  `Coach_LastName` text NOT NULL,
  `Coach_FirstName` text NOT NULL,
  `Coach_Gender` text NOT NULL,
  `Coach_ContactNumber` int(11) NOT NULL,
  `Coach_EmailAddress` varchar(50) NOT NULL,
  `Coach_Specialty` text NOT NULL,
  `Coach_Type` text NOT NULL,
  `userID` int(11) NOT NULL,
  PRIMARY KEY (`COACH_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

INSERT INTO coach VALUES("22","buglosaaaah","aaa","Male","0","ivanbuglosa@gmail.com","fitness","","66"); 
INSERT INTO coach VALUES("23","Benjamin","Mark","Male","2147483647","markbenjamin@gmail.com","fitness coach","Senior","66"); 
INSERT INTO coach VALUES("25","a","a","Male","2131232","a@g.com","a","a","66"); 
INSERT INTO coach VALUES("26","a","a","Male","123","a@g.com","a","a","66"); 
INSERT INTO coach VALUES("27","a","a","Male","231","a@g.com","a","s","66"); 
INSERT INTO coach VALUES("28","a","a","Male","22","a@g.com","a","d1","66"); 
INSERT INTO coach VALUES("29","asd","asd","Male","11","a@g.com","asd","ds","66"); 
INSERT INTO coach VALUES("30","a","a","Male","231","a@g.com","a","sd","66"); 
INSERT INTO coach VALUES("31","a","a","Male","213","a@g.com","a","sd","66"); 
INSERT INTO coach VALUES("32","s","s","Male","123","a@g.com","d","sda","66"); 
INSERT INTO coach VALUES("33","sd","sad","Male","123","a@g.com","d","d","66"); 



DROP TABLE equipment;

CREATE TABLE `equipment` (
  `E_Code` int(8) NOT NULL AUTO_INCREMENT,
  `E_Type` text NOT NULL,
  `E_Model` varchar(15) NOT NULL,
  PRIMARY KEY (`E_Code`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

INSERT INTO equipment VALUES("18","Barbel","CaptainBarbel10"); 
INSERT INTO equipment VALUES("19","THREADMIL","trm2018"); 
INSERT INTO equipment VALUES("20","Fitness Gear","FG001231"); 
INSERT INTO equipment VALUES("21","Kettlebell","FakeBell"); 



DROP TABLE equipmentinventory;

CREATE TABLE `equipmentinventory` (
  `EI_Code` int(8) NOT NULL AUTO_INCREMENT,
  `E_Code` int(8) NOT NULL,
  `EI_Quantity` int(4) NOT NULL,
  `EI_DeliveryDate` date NOT NULL,
  `EI_DeliveryTime` time NOT NULL,
  `EI_Supplier` text NOT NULL,
  `EI_Status` text NOT NULL,
  `month` text NOT NULL,
  `year` int(4) NOT NULL,
  PRIMARY KEY (`EI_Code`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

INSERT INTO equipmentinventory VALUES("1","18","5","2018-02-15","14:02:00","Korea International","","","2018"); 
INSERT INTO equipmentinventory VALUES("2","18","5","2018-02-23","18:02:00","japan international","","","2018"); 
INSERT INTO equipmentinventory VALUES("3","18","10","2018-02-24","10:02:00","Ph","","","2018"); 
INSERT INTO equipmentinventory VALUES("7","18","15","2018-02-21","13:01:00","asd","","","2018"); 
INSERT INTO equipmentinventory VALUES("8","18","10","2018-02-23","15:02:00","alson","","","2018"); 
INSERT INTO equipmentinventory VALUES("9","19","5","2018-02-06","15:01:00","korean enterprise","","","2018"); 
INSERT INTO equipmentinventory VALUES("10","19","50","2018-02-08","14:02:00","japan enterprise","","","2018"); 
INSERT INTO equipmentinventory VALUES("11","20","15","2018-02-15","14:01:00","korean enterprise","","","2018"); 
INSERT INTO equipmentinventory VALUES("12","20","20","2018-02-22","14:01:00","japan enterprise","","","2018"); 
INSERT INTO equipmentinventory VALUES("13","21","20","2018-12-31","12:59:00","Bornok\'s Kettle Bellzxc","","","0"); 
INSERT INTO equipmentinventory VALUES("14","21","50","2018-02-11","10:00:00","Bornoks\' Competitor","","","0"); 



DROP TABLE measurements;

CREATE TABLE `measurements` (
  `M_Code` int(11) NOT NULL AUTO_INCREMENT,
  `TL_Code` int(11) DEFAULT NULL,
  `M_Weight` float DEFAULT NULL,
  `M_SkeletalMass` float DEFAULT NULL,
  `M_BodyFatMass` float DEFAULT NULL,
  `M_FatFreeMass` float DEFAULT NULL,
  `M_BodyMassIndex` float DEFAULT NULL,
  `M_PercentBodyFat` float DEFAULT NULL,
  `M_WaistHipRatio` float DEFAULT NULL,
  `M_BasalMetabolicRate` float DEFAULT NULL,
  `M_LeftUpperArm` float DEFAULT NULL,
  `M_RightUpperArm` float DEFAULT NULL,
  `M_Chest` float DEFAULT NULL,
  `M_Waist` float DEFAULT NULL,
  `M_Hips` float DEFAULT NULL,
  `M_LeftUpperThigh` float DEFAULT NULL,
  `M_RightUpperThigh` float DEFAULT NULL,
  `M_RestingHR` float DEFAULT NULL,
  `M_DateMeasured` date DEFAULT NULL,
  `M_MeasurementType` text,
  `M_Classification` text NOT NULL,
  `month` text NOT NULL,
  `year` int(4) NOT NULL,
  PRIMARY KEY (`M_Code`)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=latin1;

INSERT INTO measurements VALUES("69","40","150","4","1","1","15","4","2","3","2","5","3","4","2","3","2","5","2018-02-07","Initial","Class III Obesity","Feb","2018"); 
INSERT INTO measurements VALUES("70","40","50","3","2","1","2","2","3","2","1","3","2","3","2","5","4","3","2018-02-07","Final","Class III Obesity","Feb","2018"); 
INSERT INTO measurements VALUES("72","39","27","2","3","4","5","6","7","8","9","10","11","12","1","1","1","1","2018-02-07","Initial","Overweight","Feb","2018"); 
INSERT INTO measurements VALUES("73","39","60","5","5","5","5","5","5","5","5","5","5","5","5","5","5","5","2018-02-07","Final","Class III Obesity","Feb","2018"); 



DROP TABLE membership;

CREATE TABLE `membership` (
  `MS_Code` int(8) NOT NULL AUTO_INCREMENT,
  `MS_Type` varchar(8) NOT NULL,
  `MS_Duration` varchar(9) NOT NULL,
  `MS_Price` int(5) NOT NULL,
  PRIMARY KEY (`MS_Code`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

INSERT INTO membership VALUES("1","Regular","3","5697"); 
INSERT INTO membership VALUES("6","Regular","6","10794"); 
INSERT INTO membership VALUES("7","Regular","12","20388"); 
INSERT INTO membership VALUES("9","Student","3","3597"); 
INSERT INTO membership VALUES("11","Student","6","7194"); 
INSERT INTO membership VALUES("12","Student","12","11988"); 
INSERT INTO membership VALUES("13","sa","5","41"); 



DROP TABLE membershiptype;

CREATE TABLE `membershiptype` (
  `M_Code` int(5) NOT NULL AUTO_INCREMENT,
  `CLIENT_ID` int(8) NOT NULL,
  `MS_Code` int(8) NOT NULL,
  `M_regDate` date NOT NULL,
  `M_expiryDate` date NOT NULL,
  `M_membershipStatus` text NOT NULL,
  `month` char(3) NOT NULL,
  `year` char(4) NOT NULL,
  PRIMARY KEY (`M_Code`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

INSERT INTO membershiptype VALUES("50","69","1","2018-02-08","2018-05-08","Active","Jan","2018"); 



DROP TABLE payment;

CREATE TABLE `payment` (
  `Pay_ID` int(8) NOT NULL AUTO_INCREMENT,
  `TR_ID` int(8) NOT NULL,
  `Pay_amount` float NOT NULL,
  `Pay_date` date NOT NULL,
  `Pay_time` time NOT NULL,
  `month` char(3) NOT NULL,
  `year` int(4) NOT NULL,
  PRIMARY KEY (`Pay_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

INSERT INTO payment VALUES("7","135","400","2018-02-10","14:01:00","","2018"); 
INSERT INTO payment VALUES("8","135","200","2018-02-08","15:01:00","","2018"); 
INSERT INTO payment VALUES("9","138","150","2018-02-09","02:50:00","","2018"); 
INSERT INTO payment VALUES("10","139","100","2018-02-09","03:57:00","","2018"); 
INSERT INTO payment VALUES("11","139","100","2018-02-09","04:50:00","","2018"); 
INSERT INTO payment VALUES("12","140","200","2018-02-09","04:17:00","","2018"); 
INSERT INTO payment VALUES("13","140","200","2018-02-09","04:53:00","","2018"); 
INSERT INTO payment VALUES("14","142","200","2018-02-11","12:00:00","","0"); 



DROP TABLE penalties;

CREATE TABLE `penalties` (
  `P_ID` int(8) NOT NULL,
  `P_Type` text NOT NULL,
  `P_Fee` int(4) NOT NULL,
  PRIMARY KEY (`P_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO penalties VALUES("1","Lost Towel(s)","50"); 
INSERT INTO penalties VALUES("2","Lost Locker Key","200"); 
INSERT INTO penalties VALUES("3","Walk-in","400"); 



DROP TABLE receptionist;

CREATE TABLE `receptionist` (
  `Rec_id` int(8) NOT NULL AUTO_INCREMENT,
  `Rec_lastName` text NOT NULL,
  `Rec_FirstName` text NOT NULL,
  `Rec_contact` int(11) NOT NULL,
  `Rec_emailAdd` text NOT NULL,
  `Rec_gender` text NOT NULL,
  `userID` int(11) unsigned NOT NULL,
  PRIMARY KEY (`Rec_id`),
  KEY `userID` (`userID`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

INSERT INTO receptionist VALUES("32","ivan","buglosa","1234","ivanbuglosa","Male","40"); 
INSERT INTO receptionist VALUES("33","buglosan","a","123","aaaa","Male","1"); 
INSERT INTO receptionist VALUES("34","buglosa","ivan","3131312","ivanraybuglosa@gmail.com","Female","64"); 
INSERT INTO receptionist VALUES("35","","","0","","Male","66"); 
INSERT INTO receptionist VALUES("36","lll","","0","","Male","66"); 
INSERT INTO receptionist VALUES("37","asd","","0","","Male","66"); 



DROP TABLE studioclass;

CREATE TABLE `studioclass` (
  `SC_Code` int(8) NOT NULL AUTO_INCREMENT,
  `SC_Name` text NOT NULL,
  `SC_Capacity` int(2) NOT NULL,
  `SC_Venue` text NOT NULL,
  PRIMARY KEY (`SC_Code`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

INSERT INTO studioclass VALUES("5","aaa","5","room1"); 
INSERT INTO studioclass VALUES("6","Spinning","39","room2"); 
INSERT INTO studioclass VALUES("7","HIIT","5",""); 
INSERT INTO studioclass VALUES("8","Yoga","10",""); 
INSERT INTO studioclass VALUES("9","F360","10",""); 
INSERT INTO studioclass VALUES("10","TRX","10",""); 
INSERT INTO studioclass VALUES("11","Dance Aero","10",""); 
INSERT INTO studioclass VALUES("12","Pound Fit","15",""); 
INSERT INTO studioclass VALUES("13","Pilates","12",""); 
INSERT INTO studioclass VALUES("14","Swimming","5",""); 
INSERT INTO studioclass VALUES("15","Zumba","10",""); 
INSERT INTO studioclass VALUES("16","aa","15",""); 
INSERT INTO studioclass VALUES("17","","0",""); 



DROP TABLE studioclasssession;

CREATE TABLE `studioclasssession` (
  `SCS_Code` int(8) NOT NULL AUTO_INCREMENT,
  `SC_Code` int(8) NOT NULL,
  `COACH_ID` int(8) NOT NULL,
  `SCS_StartTime` time(6) NOT NULL,
  `SCS_EndTime` time(6) NOT NULL,
  `SCS_Date` date NOT NULL,
  `SCS_Venue` text NOT NULL,
  `month` char(3) NOT NULL,
  `year` char(4) NOT NULL,
  `SCS_Status` text NOT NULL,
  PRIMARY KEY (`SCS_Code`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

INSERT INTO studioclasssession VALUES("34","6","17","13:00:00.000000","14:00:00.000000","2018-01-29","","","2018",""); 
INSERT INTO studioclasssession VALUES("35","8","15","14:01:00.000000","14:03:00.000000","2018-01-28","","","2018","On-Going"); 
INSERT INTO studioclasssession VALUES("36","9","18","14:01:00.000000","14:01:00.000000","2018-01-25","","","2018","On-Going"); 
INSERT INTO studioclasssession VALUES("37","6","17","13:00:00.000000","13:02:00.000000","2018-01-25","","","2018","On-Going"); 
INSERT INTO studioclasssession VALUES("38","8","15","13:00:00.000000","13:01:00.000000","2018-01-04","","","2018","On-Going"); 
INSERT INTO studioclasssession VALUES("39","7","18","13:01:00.000000","13:03:00.000000","2018-01-19","","","2018","On-Going"); 
INSERT INTO studioclasssession VALUES("40","8","15","13:01:00.000000","15:01:00.000000","2018-01-31","","","2018","On-Going"); 
INSERT INTO studioclasssession VALUES("41","9","15","14:01:00.000000","15:02:00.000000","2018-01-20","","","2018","On-Going"); 
INSERT INTO studioclasssession VALUES("42","8","15","14:00:00.000000","15:01:00.000000","2018-01-31","","","2018",""); 
INSERT INTO studioclasssession VALUES("43","5","15","14:01:00.000000","14:04:00.000000","2018-01-26","","","2018",""); 
INSERT INTO studioclasssession VALUES("44","9","15","14:01:00.000000","15:01:00.000000","2018-01-27","","","2018",""); 
INSERT INTO studioclasssession VALUES("45","6","22","14:01:00.000000","16:00:00.000000","2018-02-04","","","2018",""); 
INSERT INTO studioclasssession VALUES("46","6","22","15:02:00.000000","16:01:00.000000","2018-02-05","","","2018",""); 
INSERT INTO studioclasssession VALUES("47","5","22","15:02:00.000000","17:02:00.000000","2018-02-05","","","2018",""); 
INSERT INTO studioclasssession VALUES("48","5","22","16:01:00.000000","18:01:00.000000","2018-02-05","","","2018",""); 
INSERT INTO studioclasssession VALUES("49","6","23","07:00:00.000000","18:00:00.000000","2018-02-10","","","2018",""); 



DROP TABLE towelinventory;

CREATE TABLE `towelinventory` (
  `TI_Code` int(8) NOT NULL AUTO_INCREMENT,
  `TI_Date` date NOT NULL,
  `TI_Time` time NOT NULL,
  `TI_Supplied` int(4) DEFAULT NULL,
  `TI_Laundry` int(4) DEFAULT NULL,
  `TI_Available` int(4) NOT NULL,
  `TI_Borrowed` int(4) DEFAULT NULL,
  `TI_Returned` int(4) DEFAULT NULL,
  `TI_Type` text,
  `month` varchar(3) NOT NULL,
  `year` varchar(4) NOT NULL,
  PRIMARY KEY (`TI_Code`)
) ENGINE=InnoDB AUTO_INCREMENT=128 DEFAULT CHARSET=latin1;

INSERT INTO towelinventory VALUES("124","2018-02-04","01:53:00","100","","56","35","0","Supply","Feb","2018"); 
INSERT INTO towelinventory VALUES("125","2018-02-06","09:10:00","10","","78","57","3","Supply","Feb","2018"); 
INSERT INTO towelinventory VALUES("126","2018-02-06","12:22:00","50","","78","57","3","Supply","Feb","2018"); 
INSERT INTO towelinventory VALUES("127","2018-02-08","09:06:00","250","","319","63","3","Supply","Feb","2018"); 



DROP TABLE traininglog;

CREATE TABLE `traininglog` (
  `TL_Code` int(8) NOT NULL AUTO_INCREMENT,
  `COACH_ID` int(8) NOT NULL,
  `CLIENT_ID` int(8) NOT NULL,
  `TP_Code` int(8) NOT NULL,
  `TL_Expiry` date NOT NULL,
  `TL_RegDate` date NOT NULL,
  `month` varchar(11) NOT NULL,
  `year` char(4) NOT NULL,
  `TL_HealthConditions` text NOT NULL,
  `TL_ClientPerformance` text NOT NULL,
  `TL_TrainingStatus` text NOT NULL,
  PRIMARY KEY (`TL_Code`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

INSERT INTO traininglog VALUES("39","23","68","10","2018-02-14","2018-02-07","Feb","2018","Anemia,Sclerosis,","Beginner","Completed"); 
INSERT INTO traininglog VALUES("40","22","69","10","2018-02-15","2018-02-08","Feb","2018","","Intermediate","On-Going"); 



DROP TABLE traininglogsession;

CREATE TABLE `traininglogsession` (
  `TLS_Code` int(8) NOT NULL AUTO_INCREMENT,
  `TL_Code` int(11) NOT NULL,
  `TLS_Date` date NOT NULL,
  `TLS_StartTime` time(4) NOT NULL,
  `TLS_EndTime` time(4) NOT NULL,
  `TLS_Exercise` varchar(15) NOT NULL,
  `TLS_Sets` int(2) NOT NULL,
  `TLS_Reps` int(2) NOT NULL,
  `month` text NOT NULL,
  `year` int(4) NOT NULL,
  PRIMARY KEY (`TLS_Code`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=latin1;

INSERT INTO traininglogsession VALUES("56","39","2018-02-07","14:02:00.0000","16:01:00.0000","pushups","3","15","","0"); 
INSERT INTO traininglogsession VALUES("57","40","2018-02-08","14:01:00.0000","15:02:00.0000","Chestups","5","3","","0"); 
INSERT INTO traininglogsession VALUES("58","40","2018-02-09","14:01:00.0000","14:03:00.0000","Chestups","5","13","","0"); 
INSERT INTO traininglogsession VALUES("59","40","2018-02-10","14:01:00.0000","15:01:00.0000","running","5","15","","0"); 
INSERT INTO traininglogsession VALUES("60","40","2018-02-15","14:01:00.0000","14:02:00.0000","pushups","5","15","","0"); 
INSERT INTO traininglogsession VALUES("61","40","2018-02-11","15:03:00.0000","17:02:00.0000","chestups","5","3","","0"); 
INSERT INTO traininglogsession VALUES("62","40","2018-02-16","15:02:00.0000","16:01:00.0000","pushups","5","15","","0"); 
INSERT INTO traininglogsession VALUES("63","40","2018-02-23","15:00:00.0000","16:02:00.0000","pushups","5","15","","0"); 
INSERT INTO traininglogsession VALUES("64","40","2018-02-28","14:01:00.0000","16:02:00.0000","pushups","5","15","","0"); 



DROP TABLE trainingpackage;

CREATE TABLE `trainingpackage` (
  `TP_Code` int(8) NOT NULL AUTO_INCREMENT,
  `TP_PackageType` text NOT NULL,
  `TP_CoachType` text NOT NULL,
  `TP_Price` int(6) NOT NULL,
  `TP_Validity` int(3) NOT NULL,
  PRIMARY KEY (`TP_Code`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

INSERT INTO trainingpackage VALUES("10","1","Senior","600","7"); 
INSERT INTO trainingpackage VALUES("11","1","Junior","500","7"); 
INSERT INTO trainingpackage VALUES("12","8","Senior","4800","56"); 
INSERT INTO trainingpackage VALUES("13","8","Junior","4000","56"); 
INSERT INTO trainingpackage VALUES("14","12","Senior","6600","84"); 
INSERT INTO trainingpackage VALUES("15","12","Junior","5400","84"); 
INSERT INTO trainingpackage VALUES("16","24","Senior","12000","168"); 
INSERT INTO trainingpackage VALUES("17","24","Junior","9600","168"); 
INSERT INTO trainingpackage VALUES("18","30","Senior","10000","250"); 



DROP TABLE transaction;

CREATE TABLE `transaction` (
  `TR_ID` int(8) NOT NULL AUTO_INCREMENT,
  `CLIENT_ID` int(8) NOT NULL,
  `TR_Type` text NOT NULL,
  `TR_Bill` int(6) NOT NULL,
  `TR_TransactionDate` date NOT NULL,
  `TR_status` text NOT NULL,
  `year` varchar(4) NOT NULL,
  `month` varchar(10) NOT NULL,
  PRIMARY KEY (`TR_ID`),
  KEY `TR_ID` (`TR_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=143 DEFAULT CHARSET=latin1;

INSERT INTO transaction VALUES("134","69","Membership","5697","2018-02-08","paid","2018","Feb"); 
INSERT INTO transaction VALUES("135","69","Personal Training","600","2018-02-08","paid","2018","Feb"); 
INSERT INTO transaction VALUES("136","68","Lost Towel(s) ","50","2018-02-08","unpaid","2018","Feb"); 
INSERT INTO transaction VALUES("137","68","Lost Locker Key","200","2018-02-08","unpaid","2018","Feb"); 
INSERT INTO transaction VALUES("138","69","Lost Towel(s) ","150","2018-02-08","paid","2018","Feb"); 
INSERT INTO transaction VALUES("139","69","Lost Locker Key","200","2018-02-08","paid","2018","Feb"); 
INSERT INTO transaction VALUES("140","79","Walk-in","400","2018-02-08","paid","2018","Feb"); 
INSERT INTO transaction VALUES("141","76","Lost Towel(s) ","0","2018-02-10","unpaid","2018","Feb"); 
INSERT INTO transaction VALUES("142","76","Lost Locker Key","200","2018-02-10","paid","2018","Feb"); 



DROP TABLE users;

CREATE TABLE `users` (
  `userID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `userType` enum('admin','receptionist','coach','') NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB AUTO_INCREMENT=93 DEFAULT CHARSET=latin1;

INSERT INTO users VALUES("1","aaaa","4c14a808735abb4b205d1c8cb54ec845","admin"); 
INSERT INTO users VALUES("65","admin","21232f297a57a5a743894a0e4a801fc3","admin"); 
INSERT INTO users VALUES("66","","bf6982fbf3fc390e68ec90ceb101033f","coach"); 
INSERT INTO users VALUES("67","","d41d8cd98f00b204e9800998ecf8427e","coach"); 
INSERT INTO users VALUES("68","","d41d8cd98f00b204e9800998ecf8427e","receptionist"); 
INSERT INTO users VALUES("69","coach1","1bf06497729c4c55cb24a10c99ce4525","coach"); 
INSERT INTO users VALUES("70","leki","e1ef1a8976bd53dd748c15632e64fe8c","coach"); 
INSERT INTO users VALUES("71","","d41d8cd98f00b204e9800998ecf8427e","coach"); 
INSERT INTO users VALUES("72","","d41d8cd98f00b204e9800998ecf8427e","receptionist"); 
INSERT INTO users VALUES("73","markbenjamin","81dc9bdb52d04dc20036dbd8313ed055","coach"); 
INSERT INTO users VALUES("74","cherniguinang","81dc9bdb52d04dc20036dbd8313ed055","coach"); 
INSERT INTO users VALUES("75","nelsonarellano","81dc9bdb52d04dc20036dbd8313ed055","coach"); 
INSERT INTO users VALUES("76","pauljakemorales","81dc9bdb52d04dc20036dbd8313ed055","coach"); 
INSERT INTO users VALUES("77","samrylfernandez","81dc9bdb52d04dc20036dbd8313ed055","coach"); 
INSERT INTO users VALUES("78","","d41d8cd98f00b204e9800998ecf8427e","coach"); 
INSERT INTO users VALUES("79","","d41d8cd98f00b204e9800998ecf8427e","receptionist"); 
INSERT INTO users VALUES("80","ivanbuglosa","000f8670aeebb215cb60c2e5ed72b153","coach"); 
INSERT INTO users VALUES("81","","d41d8cd98f00b204e9800998ecf8427e","coach"); 
INSERT INTO users VALUES("82","mark","5d9f71b71b207b9e665820c0dce67bdb","coach"); 
INSERT INTO users VALUES("83","d","8277e0910d750195b448797616e091ad","coach"); 
INSERT INTO users VALUES("84","a","7815696ecbf1c96e6894b779456d330e","coach"); 
INSERT INTO users VALUES("85","a","0cc175b9c0f1b6a831c399e269772661","coach"); 
INSERT INTO users VALUES("86","a","03c7c0ace395d80182db07ae2c30f034","coach"); 
INSERT INTO users VALUES("87","asd","7815696ecbf1c96e6894b779456d330e","coach"); 
INSERT INTO users VALUES("88","a","03c7c0ace395d80182db07ae2c30f034","coach"); 
INSERT INTO users VALUES("89","ds","522748524ad010358705b6852b81be4c","coach"); 
INSERT INTO users VALUES("90","asd","49f0bad299687c62334182178bfd75d8","coach"); 
INSERT INTO users VALUES("91","sd","03c7c0ace395d80182db07ae2c30f034","coach"); 
INSERT INTO users VALUES("92","ad","7815696ecbf1c96e6894b779456d330e","coach"); 



