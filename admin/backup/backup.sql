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
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=latin1;

INSERT INTO activitylog VALUES("75","","22","Studio Class Session","2018-02-05","16:01:00","18:01:00"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=410 DEFAULT CHARSET=latin1;

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
INSERT INTO attendance VALUES("397","68","02:24:57","","2","0","1","","2018","Feb","2018-02-02","Member"); 
INSERT INTO attendance VALUES("398","68","20:25:54","20:30:09","2","2","1","","2018","Feb","2018-02-03","Member"); 
INSERT INTO attendance VALUES("399","69","20:28:47","","2","0","2","","2018","Feb","2018-02-03","Member"); 
INSERT INTO attendance VALUES("400","68","20:35:16","","2","0","1","","2018","Feb","2018-02-03","Member"); 
INSERT INTO attendance VALUES("401","70","20:36:23","","3","0","6","","2018","Feb","2018-02-03","Walk-in"); 
INSERT INTO attendance VALUES("402","72","20:54:23","","4","0","10","","2018","Feb","2018-02-03","Walk-in"); 
INSERT INTO attendance VALUES("403","68","20:01:31","20:52:01","2","2","1","Returned","2018","Feb","2018-02-04","Member"); 
INSERT INTO attendance VALUES("404","69","20:46:19","20:49:38","2","2","3","Returned","2018","Feb","2018-02-04","Member"); 
INSERT INTO attendance VALUES("405","69","20:51:13","20:51:55","2","2","4","Returned","2018","Feb","2018-02-04","Member"); 
INSERT INTO attendance VALUES("406","68","20:52:07","20:53:17","2","2","1","Returned","2018","Feb","2018-02-04","Member"); 
INSERT INTO attendance VALUES("407","68","20:53:34","","2","0","1","","2018","Feb","2018-02-04","Member"); 
INSERT INTO attendance VALUES("408","69","20:53:41","","2","0","5","","2018","Feb","2018-02-04","Member"); 
INSERT INTO attendance VALUES("409","73","00:26:03","","1","0","7","","2018","Feb","2018-02-04","Walk-in"); 



DROP TABLE backuphistory;

CREATE TABLE `backuphistory` (
  `backup_id` int(8) NOT NULL AUTO_INCREMENT,
  `backup_type` varchar(6) NOT NULL,
  `backup_date` date NOT NULL,
  `backup_time` time NOT NULL,
  PRIMARY KEY (`backup_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

INSERT INTO backuphistory VALUES("2","Export","2018-01-27","02:14:00"); 
INSERT INTO backuphistory VALUES("3","Import","2018-01-27","02:19:00"); 
INSERT INTO backuphistory VALUES("4","Export","2018-01-27","02:20:00"); 
INSERT INTO backuphistory VALUES("5","Import","2018-01-27","02:49:00"); 
INSERT INTO backuphistory VALUES("11","Export","2018-01-27","03:25:00"); 
INSERT INTO backuphistory VALUES("12","Export","2018-02-02","07:51:00"); 
INSERT INTO backuphistory VALUES("13","Import","2018-02-06","11:53:00"); 
INSERT INTO backuphistory VALUES("14","Import","2018-02-06","11:53:00"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=latin1;

INSERT INTO client VALUES("68","Ivan Ray","Maple","Buglosa","Male","ivanraybuglosa@gmail","Member","","09123456768","ivanbuglosa","1954-08-08","1954","08","08","2018-01-27","",""); 
INSERT INTO client VALUES("69","Brix Rodman","ads","Nessia","Male","brixaissen@gmail.com","Member","","1111","","1955-08-10","1955","10","08","2018-01-27","",""); 
INSERT INTO client VALUES("70","dasd","asd","asd","Male","asd","Member","","asd","asd","1948-06-01","1948","06","01","2018-01-28","",""); 
INSERT INTO client VALUES("71","d","d","dsadd","Male","d","Walk-in","","d","d","1955-09-09","1955","09","09","2018-01-28","",""); 
INSERT INTO client VALUES("72","d","d","d","Male","d","Walk-in","","d","d","1951-02-01","1951","02","01","2018-01-29","",""); 
INSERT INTO client VALUES("73","d","d","d","Male","d","Walk-in","","d","d","1954-08-07","1954","08","07","2018-01-29","",""); 
INSERT INTO client VALUES("74","d","d","d","Male","d","Walk-in","","d","d","1955-09-07","1955","09","07","2018-01-29","Jan","2018"); 
INSERT INTO client VALUES("75","d","d","d","Male","d","Member","","d","d","1954-09-08","1954","09","08","2018-01-29","Jan","2018"); 



DROP TABLE clientassignment;

CREATE TABLE `clientassignment` (
  `CA_Code` int(8) NOT NULL AUTO_INCREMENT,
  `CLIENT_ID` int(8) NOT NULL,
  `SCS_Code` int(8) NOT NULL,
  `CA_RegDate` date NOT NULL,
  `month` char(3) NOT NULL,
  `year` char(4) NOT NULL,
  PRIMARY KEY (`CA_Code`)
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=latin1;

INSERT INTO clientassignment VALUES("75","68","32","2018-01-27","Jan","2018"); 
INSERT INTO clientassignment VALUES("76","68","32","2018-01-27","Jan","2018"); 
INSERT INTO clientassignment VALUES("77","68","32","2018-01-27","Jan","2018"); 
INSERT INTO clientassignment VALUES("78","68","32","2018-01-27","Jan","2018"); 
INSERT INTO clientassignment VALUES("87","68","32","2018-01-27","Jan","2018"); 
INSERT INTO clientassignment VALUES("88","68","35","2018-01-29","Jan","2018"); 
INSERT INTO clientassignment VALUES("89","68","35","2018-01-29","Jan","2018"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

INSERT INTO coach VALUES("22","buglosaaaah","aaa","Male","0","ivanbuglosa@gmail.com","fitness","","66"); 



DROP TABLE equipment;

CREATE TABLE `equipment` (
  `E_Code` int(8) NOT NULL AUTO_INCREMENT,
  `E_Type` text NOT NULL,
  `E_Model` varchar(15) NOT NULL,
  PRIMARY KEY (`E_Code`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

INSERT INTO equipment VALUES("18","Barbel","CaptainBarbel10"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO equipmentinventory VALUES("1","18","100","2018-02-15","14:02:00","Korea International","","","0"); 
INSERT INTO equipmentinventory VALUES("2","18","100","2018-02-23","18:02:00","japan international","","","0"); 
INSERT INTO equipmentinventory VALUES("3","18","1000","2018-02-24","10:02:00","Ph","","","0"); 
INSERT INTO equipmentinventory VALUES("7","18","500","2018-02-21","13:01:00","asd","","","0"); 
INSERT INTO equipmentinventory VALUES("8","18","1000","2018-02-23","15:02:00","alson","","","0"); 



DROP TABLE measurements;

CREATE TABLE `measurements` (
  `M_Code` int(11) NOT NULL AUTO_INCREMENT,
  `TL_Code` int(11) DEFAULT NULL,
  `M_Weight` int(11) DEFAULT NULL,
  `M_SkeletalMass` int(11) DEFAULT NULL,
  `M_BodyFatMass` int(11) DEFAULT NULL,
  `M_FatFreeMass` int(11) DEFAULT NULL,
  `M_BodyMassIndex` int(11) DEFAULT NULL,
  `M_PercentBodyFat` int(11) DEFAULT NULL,
  `M_WaistHipRatio` int(11) DEFAULT NULL,
  `M_BasalMetabolicRate` int(11) DEFAULT NULL,
  `M_LeftUpperArm` int(11) DEFAULT NULL,
  `M_RightUpperArm` int(11) DEFAULT NULL,
  `M_Chest` int(11) DEFAULT NULL,
  `M_Waist` int(11) DEFAULT NULL,
  `M_Hips` int(11) DEFAULT NULL,
  `M_LeftUpperThigh` int(11) DEFAULT NULL,
  `M_RightUpperThigh` int(11) DEFAULT NULL,
  `M_RestingHR` int(11) DEFAULT NULL,
  `M_DateMeasured` date DEFAULT NULL,
  `M_MeasurementType` text,
  `M_Classification` text NOT NULL,
  `month` text NOT NULL,
  `year` int(4) NOT NULL,
  PRIMARY KEY (`M_Code`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

INSERT INTO measurements VALUES("48","31","2","2","2","2","2","22","2","2","2","2","2","2","2","2","2","2","2018-01-29","Initial","Underweight","","0"); 
INSERT INTO measurements VALUES("49","31","2","2","2","2","2","2","2","2","2","2","2","2","2","2","2","2","2018-01-29","Final","Underweight","","0"); 
INSERT INTO measurements VALUES("50","33","12","2","3","4","5","1","2","3","31","1","4","1","2","1","12","4","2018-02-04","Initial","Underweight","","0"); 
INSERT INTO measurements VALUES("51","33","1","2","3","4","3","2","5","6","4","15","6","2","1","2","4","3","2018-02-04","Final","Underweight","","0"); 



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
  PRIMARY KEY (`M_Code`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

INSERT INTO membershiptype VALUES("44","68","1","2018-01-28","2018-04-28",""); 
INSERT INTO membershiptype VALUES("45","69","11","2018-01-29","2017-07-29","Active"); 
INSERT INTO membershiptype VALUES("46","75","11","2018-01-29","2018-07-29",""); 
INSERT INTO membershiptype VALUES("47","69","1","2018-02-02","2018-05-02",""); 
INSERT INTO membershiptype VALUES("48","70","11","2018-02-03","2017-08-03","Active"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

INSERT INTO studioclasssession VALUES("34","6","17","13:00:00.000000","14:00:00.000000","2018-01-29","","","",""); 
INSERT INTO studioclasssession VALUES("35","8","15","14:01:00.000000","14:03:00.000000","2018-01-28","","","","On-Going"); 
INSERT INTO studioclasssession VALUES("36","9","18","14:01:00.000000","14:01:00.000000","2018-01-25","","","","On-Going"); 
INSERT INTO studioclasssession VALUES("37","6","17","13:00:00.000000","13:02:00.000000","2018-01-25","","","","On-Going"); 
INSERT INTO studioclasssession VALUES("38","8","15","13:00:00.000000","13:01:00.000000","2018-01-04","","","","On-Going"); 
INSERT INTO studioclasssession VALUES("39","7","18","13:01:00.000000","13:03:00.000000","2018-01-19","","","","On-Going"); 
INSERT INTO studioclasssession VALUES("40","8","15","13:01:00.000000","15:01:00.000000","2018-01-31","","","","On-Going"); 
INSERT INTO studioclasssession VALUES("41","9","15","14:01:00.000000","15:02:00.000000","2018-01-20","","","","On-Going"); 
INSERT INTO studioclasssession VALUES("42","8","15","14:00:00.000000","15:01:00.000000","2018-01-31","","","",""); 
INSERT INTO studioclasssession VALUES("43","5","15","14:01:00.000000","14:04:00.000000","2018-01-26","","","",""); 
INSERT INTO studioclasssession VALUES("44","9","15","14:01:00.000000","15:01:00.000000","2018-01-27","","","",""); 
INSERT INTO studioclasssession VALUES("45","6","22","14:01:00.000000","16:00:00.000000","2018-02-04","","","",""); 
INSERT INTO studioclasssession VALUES("46","6","22","15:02:00.000000","16:01:00.000000","2018-02-05","","","",""); 
INSERT INTO studioclasssession VALUES("47","5","22","15:02:00.000000","17:02:00.000000","2018-02-05","","","",""); 
INSERT INTO studioclasssession VALUES("48","5","22","16:01:00.000000","18:01:00.000000","2018-02-05","","","",""); 



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
) ENGINE=InnoDB AUTO_INCREMENT=125 DEFAULT CHARSET=latin1;

INSERT INTO towelinventory VALUES("124","2018-02-04","01:53:00","100","","95","5","0","Supply","Feb","2018"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

INSERT INTO traininglog VALUES("29","17","68","13","2018-01-27","2018-01-27","","","","","Completed"); 
INSERT INTO traininglog VALUES("31","16","69","13","2018-03-25","2018-01-28","","","","","On-Going"); 
INSERT INTO traininglog VALUES("32","16","68","13","2018-03-25","2018-01-28","","","","","On-Going"); 
INSERT INTO traininglog VALUES("33","15","71","10","2018-02-05","2018-01-29","Jan","2018","","","On-Going"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

INSERT INTO traininglogsession VALUES("48","29","2018-01-27","00:31:00.0000","02:13:00.0000","pushups","3","15","","0"); 
INSERT INTO traininglogsession VALUES("49","30","2018-01-27","13:00:00.0000","14:00:00.0000","pushups","3","15","","0"); 
INSERT INTO traininglogsession VALUES("50","31","2018-01-28","13:00:00.0000","13:01:00.0000","","0","0","","0"); 



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
INSERT INTO trainingpackage VALUES("18","30","Senior","5555555","250"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=113 DEFAULT CHARSET=latin1;

INSERT INTO transaction VALUES("40","70","Walk-in","400","2018-01-28","unpaid","2018","Jan"); 
INSERT INTO transaction VALUES("41","70","Walk-in","400","2018-01-29","unpaid","2018","Jan"); 
INSERT INTO transaction VALUES("42","71","Walk-in","400","2018-01-29","paid","2018","Jan"); 
INSERT INTO transaction VALUES("43","70","Walk-in","400","2018-01-29","unpaid","2018","Jan"); 
INSERT INTO transaction VALUES("44","71","Walk-in","400","2018-01-29","paid","2018","Jan"); 
INSERT INTO transaction VALUES("45","71","Walk-in","400","2018-01-29","paid","2018","Jan"); 
INSERT INTO transaction VALUES("46","70","Walk-in","400","2018-01-29","unpaid","2018","Jan"); 
INSERT INTO transaction VALUES("47","71","Walk-in","400","2018-01-29","paid","2018","Jan"); 
INSERT INTO transaction VALUES("48","70","Walk-in","400","2018-01-29","unpaid","2018","Jan"); 
INSERT INTO transaction VALUES("49","70","Walk-in","400","2018-01-29","unpaid","2018","Jan"); 
INSERT INTO transaction VALUES("50","71","Walk-in","400","2018-01-29","paid","2018","Jan"); 
INSERT INTO transaction VALUES("51","70","Walk-in","400","2018-01-29","unpaid","2018","Jan"); 
INSERT INTO transaction VALUES("52","71","Walk-in","400","2018-01-29","paid","2018","Jan"); 
INSERT INTO transaction VALUES("53","70","Walk-in","400","2018-01-29","unpaid","2018","Jan"); 
INSERT INTO transaction VALUES("54","69","Membership","7194","2018-01-29","paid","2018","Jan"); 
INSERT INTO transaction VALUES("55","75","Membership","7194","2018-01-29","paid","2018","Jan"); 
INSERT INTO transaction VALUES("56","72","Walk-in","400","2018-01-29","paid","2018","Jan"); 
INSERT INTO transaction VALUES("57","71","Personal Training","600","2018-01-29","paid","2018","Jan"); 
INSERT INTO transaction VALUES("58","73","Walk-in","400","2018-01-29","paid","2018","Jan"); 
INSERT INTO transaction VALUES("59","74","Walk-in","400","2018-01-29","paid","2018","Jan"); 
INSERT INTO transaction VALUES("60","70","Walk-in","400","2018-01-29","unpaid","2018","Jan"); 
INSERT INTO transaction VALUES("61","71","Walk-in","400","2018-01-29","paid","2018","Jan"); 
INSERT INTO transaction VALUES("62","72","Walk-in","400","2018-01-29","paid","2018","Jan"); 
INSERT INTO transaction VALUES("63","70","Walk-in","400","2018-01-29","unpaid","2018","Jan"); 
INSERT INTO transaction VALUES("64","70","Walk-in","400","2018-01-29","unpaid","2018","Jan"); 
INSERT INTO transaction VALUES("65","71","Walk-in","400","2018-01-29","paid","2018","Jan"); 
INSERT INTO transaction VALUES("66","70","Walk-in","400","2018-01-29","unpaid","2018","Jan"); 
INSERT INTO transaction VALUES("67","71","Walk-in","400","2018-01-29","unpaid","2018","Jan"); 
INSERT INTO transaction VALUES("68","70","Walk-in","400","2018-01-29","unpaid","2018","Jan"); 
INSERT INTO transaction VALUES("69","70","Walk-in","400","2018-01-29","unpaid","2018","Jan"); 
INSERT INTO transaction VALUES("70","71","Walk-in","400","2018-01-29","unpaid","2018","Jan"); 
INSERT INTO transaction VALUES("71","70","Walk-in","400","2018-01-29","unpaid","2018","Jan"); 
INSERT INTO transaction VALUES("72","71","Walk-in","400","2018-01-29","unpaid","2018","Jan"); 
INSERT INTO transaction VALUES("73","70","Walk-in","400","2018-01-29","unpaid","2018","Jan"); 
INSERT INTO transaction VALUES("74","73","Walk-in","400","2018-01-29","paid","2018","Jan"); 
INSERT INTO transaction VALUES("75","70","Walk-in","400","2018-01-29","unpaid","2018","Jan"); 
INSERT INTO transaction VALUES("76","72","Walk-in","400","2018-01-29","paid","2018","Jan"); 
INSERT INTO transaction VALUES("77","71","Walk-in","400","2018-01-29","unpaid","2018","Jan"); 
INSERT INTO transaction VALUES("78","70","Walk-in","400","2018-01-29","unpaid","2018","Jan"); 
INSERT INTO transaction VALUES("79","71","Walk-in","400","2018-01-29","unpaid","2018","Jan"); 
INSERT INTO transaction VALUES("80","71","Walk-in","400","2018-01-29","unpaid","2018","Jan"); 
INSERT INTO transaction VALUES("81","70","Walk-in","400","2018-01-31","unpaid","2018","Feb"); 
INSERT INTO transaction VALUES("82","70","Walk-in","400","2018-02-01","unpaid","2018","Feb"); 
INSERT INTO transaction VALUES("83","72","Walk-in","400","2018-02-02","paid","2018","Feb"); 
INSERT INTO transaction VALUES("84","73","Walk-in","400","2018-02-02","paid","2018","Feb"); 
INSERT INTO transaction VALUES("85","70","Walk-in","400","2018-02-02","unpaid","2018","Feb"); 
INSERT INTO transaction VALUES("86","71","Walk-in","400","2018-02-02","unpaid","2018","Feb"); 
INSERT INTO transaction VALUES("87","70","Walk-in","400","2018-02-02","unpaid","2018","Feb"); 
INSERT INTO transaction VALUES("88","71","Walk-in","400","2018-02-02","unpaid","2018","Feb"); 
INSERT INTO transaction VALUES("89","74","Walk-in","400","2018-02-02","paid","2018","Feb"); 
INSERT INTO transaction VALUES("90","70","Walk-in","400","2018-02-02","unpaid","2018","Feb"); 
INSERT INTO transaction VALUES("91","70","Walk-in","400","2018-02-02","unpaid","2018","Feb"); 
INSERT INTO transaction VALUES("92","70","Walk-in","400","2018-02-02","unpaid","2018","Feb"); 
INSERT INTO transaction VALUES("93","70","Walk-in","400","2018-02-02","unpaid","2018","Feb"); 
INSERT INTO transaction VALUES("94","71","Walk-in","400","2018-02-02","unpaid","2018","Feb"); 
INSERT INTO transaction VALUES("95","69","Membership","5697","2018-02-02","paid","2018","Feb"); 
INSERT INTO transaction VALUES("96","71","Walk-in","400","2018-02-02","unpaid","2018","Feb"); 
INSERT INTO transaction VALUES("97","69","Lost Towel","400","2018-02-02","paid","2018","Feb"); 
INSERT INTO transaction VALUES("98","71","Lost Towel","400","2018-02-02","unpaid","2018","Feb"); 
INSERT INTO transaction VALUES("99","68","Lost Towel(s) ","0","2018-02-02","unpaid","2018","Feb"); 
INSERT INTO transaction VALUES("100","68","Lost Locker Key","200","2018-02-02","unpaid","2018","Feb"); 
INSERT INTO transaction VALUES("101","70","Walk-in","400","2018-02-02","unpaid","2018","Feb"); 
INSERT INTO transaction VALUES("102","73","Walk-in","400","2018-02-02","paid","2018","Feb"); 
INSERT INTO transaction VALUES("103","68","Lost Towel(s) ","0","2018-02-03","unpaid","2018","Feb"); 
INSERT INTO transaction VALUES("104","68","Lost Locker Key","200","2018-02-03","unpaid","2018","Feb"); 
INSERT INTO transaction VALUES("105","68","Lost Towel(s) ","0","2018-02-03","unpaid","2018","Feb"); 
INSERT INTO transaction VALUES("106","68","Lost Locker Key","200","2018-02-03","unpaid","2018","Feb"); 
INSERT INTO transaction VALUES("107","68","Lost Towel(s) ","50","2018-02-03","unpaid","2018","Feb"); 
INSERT INTO transaction VALUES("108","68","Lost Locker Key","200","2018-02-03","unpaid","2018","Feb"); 
INSERT INTO transaction VALUES("109","70","Walk-in","400","2018-02-03","unpaid","2018","Feb"); 
INSERT INTO transaction VALUES("110","72","Walk-in","400","2018-02-03","paid","2018","Feb"); 
INSERT INTO transaction VALUES("111","70","Membership","7194","2018-02-03","unpaid","2018","Feb"); 
INSERT INTO transaction VALUES("112","73","Walk-in","400","2018-02-04","unpaid","2018","Feb"); 



DROP TABLE users;

CREATE TABLE `users` (
  `userID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `userType` enum('admin','receptionist','coach','') NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=latin1;

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



