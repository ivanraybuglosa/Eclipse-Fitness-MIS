DROP TABLE activitylog;

CREATE TABLE `activitylog` (
  `AL_Code` int(8) NOT NULL AUTO_INCREMENT,
  `CLIENT_ID` int(8) NOT NULL,
  `COACH_ID` int(8) NOT NULL,
  `Activity` text NOT NULL,
  `AL_Date` date NOT NULL,
  `AL_StartTime` time NOT NULL,
  `AL_EndTime` time NOT NULL,
  PRIMARY KEY (`AL_Code`)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=latin1;

INSERT INTO activitylog VALUES("23","68","17","Personal Training Session","2018-01-27","00:31:00","02:13:00"); 
INSERT INTO activitylog VALUES("24","68","15","Studio Class Session","2018-01-29","00:32:00","00:31:00"); 
INSERT INTO activitylog VALUES("25","68","15","Studio Class Session","2018-01-29","00:32:00","00:31:00"); 
INSERT INTO activitylog VALUES("26","68","15","Studio Class Session","2018-01-29","00:32:00","00:31:00"); 
INSERT INTO activitylog VALUES("27","68","15","Studio Class Session","2018-01-29","00:32:00","00:31:00"); 
INSERT INTO activitylog VALUES("28","68","15","Studio Class Session","2018-01-29","00:32:00","00:31:00"); 
INSERT INTO activitylog VALUES("29","68","15","Studio Class Session","2018-01-29","00:32:00","00:31:00"); 
INSERT INTO activitylog VALUES("30","68","16","Studio Class Session","2018-01-29","00:31:00","03:31:00"); 
INSERT INTO activitylog VALUES("31","68","16","Studio Class Session","2018-01-29","00:31:00","03:31:00"); 
INSERT INTO activitylog VALUES("32","68","16","Studio Class Session","2018-01-29","00:31:00","03:31:00"); 
INSERT INTO activitylog VALUES("33","68","16","Studio Class Session","2018-01-29","00:31:00","03:31:00"); 
INSERT INTO activitylog VALUES("34","68","16","Studio Class Session","2018-01-29","00:31:00","03:31:00"); 
INSERT INTO activitylog VALUES("35","68","16","Studio Class Session","2018-01-29","00:31:00","03:31:00"); 
INSERT INTO activitylog VALUES("36","68","16","Studio Class Session","2018-01-29","00:31:00","03:31:00"); 
INSERT INTO activitylog VALUES("37","68","16","Studio Class Session","2018-01-29","00:31:00","03:31:00"); 
INSERT INTO activitylog VALUES("38","68","16","Studio Class Session","2018-01-29","00:31:00","03:31:00"); 
INSERT INTO activitylog VALUES("39","68","16","Studio Class Session","2018-01-29","00:31:00","03:31:00"); 
INSERT INTO activitylog VALUES("40","68","16","Studio Class Session","2018-01-29","00:31:00","03:31:00"); 
INSERT INTO activitylog VALUES("41","68","16","Studio Class Session","2018-01-29","00:31:00","03:31:00"); 
INSERT INTO activitylog VALUES("42","68","16","Studio Class Session","2018-01-29","00:31:00","03:31:00"); 
INSERT INTO activitylog VALUES("43","68","16","Studio Class Session","2018-01-29","00:31:00","03:31:00"); 
INSERT INTO activitylog VALUES("44","68","16","Studio Class Session","2018-01-29","00:31:00","03:31:00"); 
INSERT INTO activitylog VALUES("45","68","16","Studio Class Session","2018-01-29","00:31:00","03:31:00"); 
INSERT INTO activitylog VALUES("46","68","16","Studio Class Session","2018-01-29","00:31:00","03:31:00"); 
INSERT INTO activitylog VALUES("47","68","16","Studio Class Session","2018-01-29","00:31:00","03:31:00"); 
INSERT INTO activitylog VALUES("48","68","16","Studio Class Session","2018-01-29","00:31:00","03:31:00"); 
INSERT INTO activitylog VALUES("49","68","16","Studio Class Session","2018-01-29","00:31:00","03:31:00"); 
INSERT INTO activitylog VALUES("50","68","16","Studio Class Session","2018-01-29","00:31:00","03:31:00"); 
INSERT INTO activitylog VALUES("51","68","16","Studio Class Session","2018-01-29","00:31:00","03:31:00"); 
INSERT INTO activitylog VALUES("52","68","16","Studio Class Session","2018-01-29","00:31:00","03:31:00"); 
INSERT INTO activitylog VALUES("53","68","16","Studio Class Session","2018-01-29","00:31:00","03:31:00"); 
INSERT INTO activitylog VALUES("54","68","16","Studio Class Session","2018-01-29","00:31:00","03:31:00"); 
INSERT INTO activitylog VALUES("55","68","16","Studio Class Session","2018-01-29","00:31:00","03:31:00"); 
INSERT INTO activitylog VALUES("56","68","16","Studio Class Session","2018-01-29","00:31:00","03:31:00"); 
INSERT INTO activitylog VALUES("57","68","16","Studio Class Session","2018-01-29","00:31:00","03:31:00"); 
INSERT INTO activitylog VALUES("58","68","16","Studio Class Session","2018-01-29","00:31:00","03:31:00"); 
INSERT INTO activitylog VALUES("59","68","16","Studio Class Session","2018-01-29","00:31:00","03:31:00"); 
INSERT INTO activitylog VALUES("60","68","16","Studio Class Session","2018-01-29","00:31:00","03:31:00"); 
INSERT INTO activitylog VALUES("61","69","15","Personal Training Session","2018-01-27","13:00:00","14:00:00"); 
INSERT INTO activitylog VALUES("62","69","15","Personal Training Session","2018-01-27","14:01:00","02:01:00"); 
INSERT INTO activitylog VALUES("63","69","16","Personal Training Session","2018-01-28","13:00:00","13:01:00"); 
INSERT INTO activitylog VALUES("64","68","15","Studio Class Session","2018-01-28","13:00:00","14:00:00"); 
INSERT INTO activitylog VALUES("65","68","15","Studio Class Session","2018-01-28","13:00:00","14:00:00"); 
INSERT INTO activitylog VALUES("66","70","15","Studio Class Session","2018-01-28","14:01:00","14:03:00"); 
INSERT INTO activitylog VALUES("67","72","15","Studio Class Session","2018-01-28","14:01:00","14:03:00"); 
INSERT INTO activitylog VALUES("68","72","15","Studio Class Session","2018-01-28","14:01:00","14:03:00"); 
INSERT INTO activitylog VALUES("69","68","15","Studio Class Session","2018-01-28","14:01:00","14:03:00"); 
INSERT INTO activitylog VALUES("70","68","15","Studio Class Session","2018-01-28","14:01:00","14:03:00"); 
INSERT INTO activitylog VALUES("71","68","15","Studio Class Session","2018-01-28","14:01:00","14:03:00"); 
INSERT INTO activitylog VALUES("72","68","15","Studio Class Session","2018-01-28","14:01:00","14:03:00"); 
INSERT INTO activitylog VALUES("73","68","15","Studio Class Session","2018-01-28","14:01:00","14:03:00"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=333 DEFAULT CHARSET=latin1;

INSERT INTO attendance VALUES("326","68","19:52:33","19:53:05","1","1","1","","2018","Feb","2018-02-01","Member"); 
INSERT INTO attendance VALUES("327","68","21:07:07","","2","0","1","","2018","Feb","2018-02-01","Member"); 
INSERT INTO attendance VALUES("328","68","08:52:44","19:46:19","1","1","1","","2018","Feb","2018-02-02","Member"); 
INSERT INTO attendance VALUES("329","69","18:25:53","19:48:14","3","3","1","Returned","2018","Feb","2018-02-02","Member"); 
INSERT INTO attendance VALUES("330","72","19:14:07","","2","0","1","","2018","Feb","2018-02-02","Walk-in"); 
INSERT INTO attendance VALUES("331","73","19:14:18","","2","0","1","","2018","Feb","2018-02-02","Walk-in"); 
INSERT INTO attendance VALUES("332","75","19:39:25","","4","0","1","","2018","Feb","2018-02-02","Member"); 



DROP TABLE backuphistory;

CREATE TABLE `backuphistory` (
  `backup_id` int(8) NOT NULL AUTO_INCREMENT,
  `backup_type` varchar(6) NOT NULL,
  `backup_date` date NOT NULL,
  `backup_time` time NOT NULL,
  PRIMARY KEY (`backup_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO backuphistory VALUES("2","Export","2018-01-27","02:14:00"); 
INSERT INTO backuphistory VALUES("3","Import","2018-01-27","02:19:00"); 
INSERT INTO backuphistory VALUES("4","Export","2018-01-27","02:20:00"); 
INSERT INTO backuphistory VALUES("5","Import","2018-01-27","02:49:00"); 
INSERT INTO backuphistory VALUES("11","Export","2018-01-27","03:25:00"); 



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
INSERT INTO client VALUES("69","Brix Rodman","ads","Nessia","Male","brixaissen@gmail.com","Member","","091231421","brixnessia","1948-02-03","1948","02","03","2018-01-27","",""); 
INSERT INTO client VALUES("70","dasd","asd","asd","Male","asd","Walk-in","","asd","asd","1948-06-01","1948","06","01","2018-01-28","",""); 
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
) ENGINE=InnoDB AUTO_INCREMENT=98 DEFAULT CHARSET=latin1;

INSERT INTO clientassignment VALUES("75","68","32","2018-01-27","Jan","2018"); 
INSERT INTO clientassignment VALUES("76","68","32","2018-01-27","Jan","2018"); 
INSERT INTO clientassignment VALUES("77","68","32","2018-01-27","Jan","2018"); 
INSERT INTO clientassignment VALUES("78","68","32","2018-01-27","Jan","2018"); 
INSERT INTO clientassignment VALUES("87","68","32","2018-01-27","Jan","2018"); 
INSERT INTO clientassignment VALUES("88","68","35","2018-01-29","Jan","2018"); 
INSERT INTO clientassignment VALUES("89","68","35","2018-01-29","Jan","2018"); 
INSERT INTO clientassignment VALUES("90","70","35","2018-01-29","Jan","2018"); 
INSERT INTO clientassignment VALUES("91","72","35","2018-01-29","Jan","2018"); 
INSERT INTO clientassignment VALUES("92","72","35","2018-01-29","Jan","2018"); 
INSERT INTO clientassignment VALUES("93","68","35","2018-01-29","Jan","2018"); 
INSERT INTO clientassignment VALUES("94","68","35","2018-01-29","Jan","2018"); 
INSERT INTO clientassignment VALUES("95","68","35","2018-01-29","Jan","2018"); 
INSERT INTO clientassignment VALUES("96","68","35","2018-01-29","Jan","2018"); 
INSERT INTO clientassignment VALUES("97","68","35","2018-01-29","Jan","2018"); 



DROP TABLE coach;

CREATE TABLE `coach` (
  `COACH_ID` int(8) NOT NULL AUTO_INCREMENT,
  `Coach_LastName` text NOT NULL,
  `Coach_FirstName` text NOT NULL,
  `Coach_Gender` text NOT NULL,
  `Coach_ContactNumber` int(11) NOT NULL,
  `Coach_EmailAddress` varchar(20) NOT NULL,
  `Coach_Specialty` text NOT NULL,
  `Coach_Type` text NOT NULL,
  `userID` int(11) NOT NULL,
  PRIMARY KEY (`COACH_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

INSERT INTO coach VALUES("15","Benjamin","Mark","Male","2147483647","markbenjamin@gmail.c","fitness coach","Senior","66"); 
INSERT INTO coach VALUES("16","Ang","Cherniguin","Female","912345678","cherniguinang@gmail.","Fitness Coach","Junior","66"); 
INSERT INTO coach VALUES("17","Arellano","Nelson","Male","2147483647","nelsonarellano@gmail","Fitness Coach","Senior","66"); 
INSERT INTO coach VALUES("18","Morales","Paul Jake","Male","2147483647","pauljakemorales@gmai","Fitness Coach","Junior","66"); 
INSERT INTO coach VALUES("19","Fernandez","Samryl","Female","2147483647","samrylfernandez@gmai","Fitness Coach","Junior","66"); 
INSERT INTO coach VALUES("21","Buglosa","Ivan","Male","912345667","ivanraybuglosa@gmail","Fitness Coach","Junior","66"); 



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
  PRIMARY KEY (`EI_Code`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO equipmentinventory VALUES("1","18","100","2018-02-15","14:02:00","Korea International",""); 
INSERT INTO equipmentinventory VALUES("2","18","100","2018-02-23","18:02:00","japan international",""); 
INSERT INTO equipmentinventory VALUES("3","18","1000","2018-02-24","10:02:00","Ph",""); 
INSERT INTO equipmentinventory VALUES("7","18","500","2018-02-21","13:01:00","asd",""); 



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
  PRIMARY KEY (`M_Code`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

INSERT INTO measurements VALUES("48","31","2","2","2","2","2","22","2","2","2","2","2","2","2","2","2","2","2018-01-29","Initial","Underweight"); 
INSERT INTO measurements VALUES("49","31","2","2","2","2","2","2","2","2","2","2","2","2","2","2","2","2","2018-01-29","Final","Underweight"); 



DROP TABLE membership;

CREATE TABLE `membership` (
  `MS_Code` int(8) NOT NULL AUTO_INCREMENT,
  `MS_Type` varchar(8) NOT NULL,
  `MS_Duration` varchar(9) NOT NULL,
  `MS_Price` int(5) NOT NULL,
  PRIMARY KEY (`MS_Code`)
) ENGINE=InnoDB AUTO_INCREMENT=113 DEFAULT CHARSET=latin1;

INSERT INTO membership VALUES("1","Regular","3","5697"); 
INSERT INTO membership VALUES("6","Regular","6","10794"); 
INSERT INTO membership VALUES("7","Regular","12","20388"); 
INSERT INTO membership VALUES("9","Student","3","3597"); 
INSERT INTO membership VALUES("11","Student","6","7194"); 
INSERT INTO membership VALUES("12","Student","12","11988"); 
INSERT INTO membership VALUES("13","sa","5","41"); 
INSERT INTO membership VALUES("112","Walk-In","0","400"); 



DROP TABLE membershiptype;

CREATE TABLE `membershiptype` (
  `M_Code` int(5) NOT NULL AUTO_INCREMENT,
  `CLIENT_ID` int(8) NOT NULL,
  `MS_Code` int(8) NOT NULL,
  `M_regDate` date NOT NULL,
  `M_expiryDate` date NOT NULL,
  PRIMARY KEY (`M_Code`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

INSERT INTO membershiptype VALUES("44","68","1","2018-01-28","2018-04-28"); 
INSERT INTO membershiptype VALUES("45","69","11","2018-01-29","2018-07-29"); 
INSERT INTO membershiptype VALUES("46","75","11","2018-01-29","2018-07-29"); 



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

INSERT INTO studioclass VALUES("5","Aqua Zumba","5","room1"); 
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
INSERT INTO studioclass VALUES("16","Abs Clinic","15",""); 
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
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=118 DEFAULT CHARSET=latin1;

INSERT INTO towelinventory VALUES("114","2018-02-01","12:52:00","10","","7","2","0","Supply","02","2018"); 
INSERT INTO towelinventory VALUES("115","2018-02-01","12:53:00","","1","7","2","0","Laundry","02","2018"); 
INSERT INTO towelinventory VALUES("116","2018-02-02","12:14:00","10","","17","2","3","Supply","02","2018"); 
INSERT INTO towelinventory VALUES("117","2018-02-02","12:18:00","14","","17","2","3","Supply","02","2018"); 



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
  PRIMARY KEY (`TLS_Code`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

INSERT INTO traininglogsession VALUES("48","29","2018-01-27","00:31:00.0000","02:13:00.0000","pushups","3","15"); 
INSERT INTO traininglogsession VALUES("49","30","2018-01-27","13:00:00.0000","14:00:00.0000","pushups","3","15"); 
INSERT INTO traininglogsession VALUES("50","31","2018-01-28","13:00:00.0000","13:01:00.0000","","0","0"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=latin1;

INSERT INTO transaction VALUES("40","70","Walk-in","400","2018-01-28","unpaid","2018","Jan"); 
INSERT INTO transaction VALUES("41","70","Walk-in","400","2018-01-29","unpaid","2018","Jan"); 
INSERT INTO transaction VALUES("42","71","Walk-in","400","2018-01-29","unpaid","2018","Jan"); 
INSERT INTO transaction VALUES("43","70","Walk-in","400","2018-01-29","unpaid","2018","Jan"); 
INSERT INTO transaction VALUES("44","71","Walk-in","400","2018-01-29","unpaid","2018","Jan"); 
INSERT INTO transaction VALUES("45","71","Walk-in","400","2018-01-29","unpaid","2018","Jan"); 
INSERT INTO transaction VALUES("46","70","Walk-in","400","2018-01-29","unpaid","2018","Jan"); 
INSERT INTO transaction VALUES("47","71","Walk-in","400","2018-01-29","unpaid","2018","Jan"); 
INSERT INTO transaction VALUES("48","70","Walk-in","400","2018-01-29","unpaid","2018","Jan"); 
INSERT INTO transaction VALUES("49","70","Walk-in","400","2018-01-29","unpaid","2018","Jan"); 
INSERT INTO transaction VALUES("50","71","Walk-in","400","2018-01-29","unpaid","2018","Jan"); 
INSERT INTO transaction VALUES("51","70","Walk-in","400","2018-01-29","unpaid","2018","Jan"); 
INSERT INTO transaction VALUES("52","71","Walk-in","400","2018-01-29","unpaid","2018","Jan"); 
INSERT INTO transaction VALUES("53","70","Walk-in","400","2018-01-29","unpaid","2018","Jan"); 
INSERT INTO transaction VALUES("54","69","Membership","7194","2018-01-29","unpaid","2018","Jan"); 
INSERT INTO transaction VALUES("55","75","Membership","7194","2018-01-29","unpaid","2018","Jan"); 
INSERT INTO transaction VALUES("56","72","Walk-in","400","2018-01-29","unpaid","2018","Jan"); 
INSERT INTO transaction VALUES("57","71","Personal Training","600","2018-01-29","unpaid","2018","Jan"); 
INSERT INTO transaction VALUES("58","73","Walk-in","400","2018-01-29","unpaid","2018","Jan"); 
INSERT INTO transaction VALUES("59","74","Walk-in","400","2018-01-29","unpaid","2018","Jan"); 
INSERT INTO transaction VALUES("60","70","Walk-in","400","2018-01-29","unpaid","2018","Jan"); 
INSERT INTO transaction VALUES("61","71","Walk-in","400","2018-01-29","unpaid","2018","Jan"); 
INSERT INTO transaction VALUES("62","72","Walk-in","400","2018-01-29","unpaid","2018","Jan"); 
INSERT INTO transaction VALUES("63","70","Walk-in","400","2018-01-29","unpaid","2018","Jan"); 
INSERT INTO transaction VALUES("64","70","Walk-in","400","2018-01-29","unpaid","2018","Jan"); 
INSERT INTO transaction VALUES("65","71","Walk-in","400","2018-01-29","unpaid","2018","Jan"); 
INSERT INTO transaction VALUES("66","70","Walk-in","400","2018-01-29","unpaid","2018","Jan"); 
INSERT INTO transaction VALUES("67","71","Walk-in","400","2018-01-29","unpaid","2018","Jan"); 
INSERT INTO transaction VALUES("68","70","Walk-in","400","2018-01-29","unpaid","2018","Jan"); 
INSERT INTO transaction VALUES("69","70","Walk-in","400","2018-01-29","unpaid","2018","Jan"); 
INSERT INTO transaction VALUES("70","71","Walk-in","400","2018-01-29","unpaid","2018","Jan"); 
INSERT INTO transaction VALUES("71","70","Walk-in","400","2018-01-29","unpaid","2018","Jan"); 
INSERT INTO transaction VALUES("72","71","Walk-in","400","2018-01-29","unpaid","2018","Jan"); 
INSERT INTO transaction VALUES("73","70","Walk-in","400","2018-01-29","unpaid","2018","Jan"); 
INSERT INTO transaction VALUES("74","73","Walk-in","400","2018-01-29","unpaid","2018","Jan"); 
INSERT INTO transaction VALUES("75","70","Walk-in","400","2018-01-29","unpaid","2018","Jan"); 
INSERT INTO transaction VALUES("76","72","Walk-in","400","2018-01-29","unpaid","2018","Jan"); 
INSERT INTO transaction VALUES("77","71","Walk-in","400","2018-01-29","unpaid","2018","Jan"); 
INSERT INTO transaction VALUES("78","70","Walk-in","400","2018-01-29","unpaid","2018","Jan"); 
INSERT INTO transaction VALUES("79","71","Walk-in","400","2018-01-29","unpaid","2018","Jan"); 
INSERT INTO transaction VALUES("80","71","Walk-in","400","2018-01-29","unpaid","2018","Jan"); 
INSERT INTO transaction VALUES("81","70","Walk-in","400","2018-01-31","unpaid","2018","Feb"); 
INSERT INTO transaction VALUES("82","70","Walk-in","400","2018-02-01","unpaid","2018","Feb"); 
INSERT INTO transaction VALUES("83","72","Walk-in","400","2018-02-02","unpaid","2018","Feb"); 
INSERT INTO transaction VALUES("84","73","Walk-in","400","2018-02-02","unpaid","2018","Feb"); 



DROP TABLE users;

CREATE TABLE `users` (
  `userID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `userType` enum('admin','receptionist','coach','') NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=latin1;

INSERT INTO users VALUES("1","aaaa","4c14a808735abb4b205d1c8cb54ec845","admin"); 
INSERT INTO users VALUES("65","admin","21232f297a57a5a743894a0e4a801fc3","admin"); 
INSERT INTO users VALUES("66","","1f16a6c017f12c1539c4947e234de78a","coach"); 
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



