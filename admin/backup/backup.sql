DROP TABLE activitylog;

CREATE TABLE `activitylog` (
  `AL_Code` int(8) NOT NULL AUTO_INCREMENT,
  `CLIENT_ID` int(8) NOT NULL,
  `COACH_ID` int(8) NOT NULL,
  `Activity` int(8) NOT NULL,
  `AL_RegType` text NOT NULL,
  `AL_Date` date NOT NULL,
  PRIMARY KEY (`AL_Code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE attendance;

CREATE TABLE `attendance` (
  `A_Code` int(8) NOT NULL AUTO_INCREMENT,
  `CLIENT_ID` int(8) NOT NULL,
  `GA_Code` int(8) NOT NULL,
  `A_TimeIn` varchar(10) NOT NULL,
  `A_TimeOut` varchar(10) NOT NULL,
  `A_TowelQty` int(2) NOT NULL,
  `A_TowelReturn` int(2) NOT NULL,
  `A_LockerKey` int(2) NOT NULL,
  `A_Year` varchar(10) NOT NULL,
  `A_Month` varchar(10) NOT NULL,
  `A_fdate` date NOT NULL,
  `A_id` int(2) NOT NULL,
  `A_status` varchar(10) NOT NULL,
  PRIMARY KEY (`A_Code`)
) ENGINE=InnoDB AUTO_INCREMENT=149 DEFAULT CHARSET=latin1;

INSERT INTO attendance VALUES("100","54","0","19:09:58","11:03:34","2","2","1","2018","Jan","2018-01-17","2",""); 
INSERT INTO attendance VALUES("101","54","0","19:10:02","11:03:34","2","2","1","2018","Jan","2018-01-18","2",""); 
INSERT INTO attendance VALUES("102","56","0","03:35:19","16:37:34","3","4","1","2018","Jan","2018-01-19","2",""); 
INSERT INTO attendance VALUES("108","55","0","03:44:17","12:07:56","2","4","12","2018","Jan","2018-01-20","2","Unpaid"); 
INSERT INTO attendance VALUES("109","56","0","03:45:07","16:37:34","2","4","3","2018","Jan","2018-01-23","2","Walk-in"); 
INSERT INTO attendance VALUES("111","58","0","21:47:19","10:31:59","3","0","2","2018","Jan","2018-01-23","2",""); 
INSERT INTO attendance VALUES("112","57","0","21:50:40","16:34:48","4","0","7","2018","Jan","2018-01-23","2",""); 
INSERT INTO attendance VALUES("113","54","0","10:27:33","11:03:34","2","2","1","2018","Jan","2018-01-24","2","Walk-in"); 
INSERT INTO attendance VALUES("114","55","0","10:28:18","12:07:56","2","4","12","2018","Jan","2018-01-24","2","Walk-in"); 
INSERT INTO attendance VALUES("115","57","0","10:29:37","16:34:48","3","0","3","2018","Jan","2018-01-24","2","Walk-in"); 
INSERT INTO attendance VALUES("116","58","0","10:29:43","10:31:59","5","0","8","2018","Jan","2018-01-24","2","Walk-in"); 
INSERT INTO attendance VALUES("117","57","0","16:34:41","16:34:48","2","0","1","2018","Jan","2018-01-24","2","Walk-in"); 
INSERT INTO attendance VALUES("118","56","0","16:37:29","16:37:34","5","4","1","2018","Jan","2018-01-24","2","Walk-in"); 
INSERT INTO attendance VALUES("140","54","0","11:02:53","11:03:34","2","2","1","2018","Jan","2018-01-25","2","Walk-in"); 
INSERT INTO attendance VALUES("148","55","0","11:25:57","12:07:56","4","4","1","2018","Jan","2018-01-25","2","Walk-in"); 



DROP TABLE backuphistory;

CREATE TABLE `backuphistory` (
  `backup_id` int(8) NOT NULL AUTO_INCREMENT,
  `backup_type` varchar(6) NOT NULL,
  `backup_date` date NOT NULL,
  `backup_time` time NOT NULL,
  PRIMARY KEY (`backup_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

INSERT INTO backuphistory VALUES("2","Export","2018-01-27","02:14:00"); 
INSERT INTO backuphistory VALUES("3","Import","2018-01-27","02:19:00"); 
INSERT INTO backuphistory VALUES("4","Export","2018-01-27","02:20:00"); 
INSERT INTO backuphistory VALUES("5","Import","2018-01-27","02:49:00"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;

INSERT INTO client VALUES("54","Brix","Rodman","Nessia","Male","brixaissen@gmail.com","Member","","9954144982","brix123","1954-08-09","1954","08","09","2018-01-22","Jan","2018"); 
INSERT INTO client VALUES("55","Ivan","Maple","Buglosa","Male","ivan@yahoo.com","Member","","09919273231","ivan123","1958-11-13","1958","11","13","2018-01-22","Jan","2018"); 
INSERT INTO client VALUES("56","Nina","Lynn","Garcia","Female","nina@yahoo.com","Member","","0993897232","nina12","1958-10-12","1958","10","12","2018-01-17","Jan","2018"); 
INSERT INTO client VALUES("57","Hans","Muyco","Legislador","Male","hans@yaho.com","Member","","9993808653","hans","1959-11-13","1959","11","13","","Jan","2018"); 
INSERT INTO client VALUES("58","Vicmar","Josephino","Yanson","Male","vicmaryanson@gmail.c","Walk-in","","09123142151","vicmaryanson","1948-01-02","1948","01","02","","Jan","2018"); 



DROP TABLE clientassignment;

CREATE TABLE `clientassignment` (
  `CA_Code` int(8) NOT NULL AUTO_INCREMENT,
  `CLIENT_ID` int(8) NOT NULL,
  `SCS_Code` int(8) NOT NULL,
  `CA_RegDate` date NOT NULL,
  `month` char(3) NOT NULL,
  `year` char(4) NOT NULL,
  PRIMARY KEY (`CA_Code`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

INSERT INTO clientassignment VALUES("24","58","20","2018-01-13","Jan","2017"); 
INSERT INTO clientassignment VALUES("25","54","15","2018-01-13","Feb","2017"); 
INSERT INTO clientassignment VALUES("26","54","16","2018-01-13","Mar","2017"); 
INSERT INTO clientassignment VALUES("27","58","15","2018-01-13","Apr","2017"); 
INSERT INTO clientassignment VALUES("28","54","16","2018-01-13","Apr","2017"); 
INSERT INTO clientassignment VALUES("29","58","16","2018-01-13","Oct","2017"); 
INSERT INTO clientassignment VALUES("30","58","16","2018-01-13","Nov","2017"); 
INSERT INTO clientassignment VALUES("31","58","16","2018-01-13","Jul","2017"); 
INSERT INTO clientassignment VALUES("32","57","16","2018-01-13","Dec","2018"); 
INSERT INTO clientassignment VALUES("33","56","16","2018-01-13","Jan","2018"); 
INSERT INTO clientassignment VALUES("34","56","16","2018-01-13","Dec","2018"); 
INSERT INTO clientassignment VALUES("35","55","16","2018-01-13","Feb","2018"); 
INSERT INTO clientassignment VALUES("36","57","21","2018-01-13","Jul","2018"); 
INSERT INTO clientassignment VALUES("37","56","15","2018-01-13","Oct","2018"); 
INSERT INTO clientassignment VALUES("38","55","27","2018-01-17","Nov","2018"); 
INSERT INTO clientassignment VALUES("39","54","27","2018-01-17","Oct","2018"); 



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



DROP TABLE conditionassignment;

CREATE TABLE `conditionassignment` (
  `Condition_Code` int(8) NOT NULL AUTO_INCREMENT,
  `CLIENT_ID` int(8) NOT NULL,
  `HC_Code` int(8) NOT NULL,
  PRIMARY KEY (`Condition_Code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE equipment;

CREATE TABLE `equipment` (
  `E_Code` int(8) NOT NULL AUTO_INCREMENT,
  `E_Name` text NOT NULL,
  `E_Type` text NOT NULL,
  `E_Quantity` int(3) NOT NULL,
  `E_Status` text NOT NULL,
  `E_DateChecked` date NOT NULL,
  PRIMARY KEY (`E_Code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE healthcondition;

CREATE TABLE `healthcondition` (
  `HC_Code` int(8) NOT NULL AUTO_INCREMENT,
  `TL_Code` int(11) NOT NULL,
  `HC_Name` text NOT NULL,
  PRIMARY KEY (`HC_Code`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO healthcondition VALUES("1","15","on,on,on"); 
INSERT INTO healthcondition VALUES("2","15","Osteoporosis,Seizure,Paralysis,Fibromyalgia,sample"); 



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
  PRIMARY KEY (`M_Code`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

INSERT INTO measurements VALUES("4","15","12","2","1","3","1","6","5","4","3","2","5","6","5","4","3","2","2018-01-17","Initial"); 
INSERT INTO measurements VALUES("5","15","2","3","1","4","2","7","5","6","6","3","4","5","6","7","3","3","2018-01-17","Final"); 
INSERT INTO measurements VALUES("6","17","23","1","2","3","7","6","4","5","8","1","3","2","5","2","3","4","2018-01-19","Initial"); 
INSERT INTO measurements VALUES("7","16","2","3","2","3","6","1","2","1","5","2","3","2","3","4","5","4","2018-01-19","Initial"); 
INSERT INTO measurements VALUES("8","17","4","2","1","2","6","5","3","4","2","5","3","4","1","3","5","6","2018-01-20","Final"); 
INSERT INTO measurements VALUES("9","19","3","2","1","3","7","6","4","5","3","2","1","2","4","3","2","3","2018-01-22","Initial"); 
INSERT INTO measurements VALUES("10","19","2","2","2","5","2","3","4","6","3","1","7","2","4","5","6","2","2018-01-22","Final"); 



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
INSERT INTO membership VALUES("13","Walk-In","0","400"); 



DROP TABLE membershiptype;

CREATE TABLE `membershiptype` (
  `M_Code` int(5) NOT NULL AUTO_INCREMENT,
  `CLIENT_ID` int(8) NOT NULL,
  `MS_Code` int(8) NOT NULL,
  `M_classType` varchar(15) NOT NULL,
  `M_regDate` date NOT NULL,
  `M_expiryDate` date NOT NULL,
  PRIMARY KEY (`M_Code`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

INSERT INTO membershiptype VALUES("3","0","12","","2018-01-22","0000-00-00"); 
INSERT INTO membershiptype VALUES("4","0","12","","2018-01-22","0000-00-00"); 
INSERT INTO membershiptype VALUES("5","0","7","","2018-01-22","0000-00-00"); 
INSERT INTO membershiptype VALUES("6","69","11","","2018-01-22","0000-00-00"); 
INSERT INTO membershiptype VALUES("7","69","12","","2018-01-22","0000-00-00"); 
INSERT INTO membershiptype VALUES("8","69","12","","2018-01-22","0000-00-00"); 
INSERT INTO membershiptype VALUES("9","69","6","","2018-01-22","0000-00-00"); 
INSERT INTO membershiptype VALUES("10","69","11","","2018-01-22","0000-00-00"); 
INSERT INTO membershiptype VALUES("11","69","11","","2018-01-22","0000-00-00"); 
INSERT INTO membershiptype VALUES("12","69","11","","2018-01-22","0000-00-00"); 
INSERT INTO membershiptype VALUES("13","69","12","","2018-01-22","0000-00-00"); 
INSERT INTO membershiptype VALUES("14","54","11","","2018-01-22","0000-00-00"); 
INSERT INTO membershiptype VALUES("15","54","11","","2018-01-22","0000-00-00"); 



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
  PRIMARY KEY (`SC_Code`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

INSERT INTO studioclass VALUES("5","Aqua Zumba","5"); 
INSERT INTO studioclass VALUES("6","Spinning","39"); 
INSERT INTO studioclass VALUES("7","HIIT","5"); 
INSERT INTO studioclass VALUES("8","Yoga","10"); 
INSERT INTO studioclass VALUES("9","F360","10"); 
INSERT INTO studioclass VALUES("10","TRX","10"); 
INSERT INTO studioclass VALUES("11","Dance Aero","10"); 
INSERT INTO studioclass VALUES("12","Pound Fit","15"); 
INSERT INTO studioclass VALUES("13","Pilates","12"); 
INSERT INTO studioclass VALUES("14","Swimming","5"); 
INSERT INTO studioclass VALUES("15","Zumba","10"); 
INSERT INTO studioclass VALUES("16","Abs Clinic","15"); 



DROP TABLE studioclasssession;

CREATE TABLE `studioclasssession` (
  `SCS_Code` int(8) NOT NULL AUTO_INCREMENT,
  `SC_Code` int(8) NOT NULL,
  `COACH_ID` int(8) NOT NULL,
  `SCS_StartTime` varchar(6) NOT NULL,
  `SCS_EndTime` varchar(6) NOT NULL,
  `SCS_Date` date NOT NULL,
  `SCS_Venue` text NOT NULL,
  `month` char(3) NOT NULL,
  `year` char(4) NOT NULL,
  PRIMARY KEY (`SCS_Code`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

INSERT INTO studioclasssession VALUES("15","7","17","00:11","01:01","0000-00-00","3sdadada","",""); 
INSERT INTO studioclasssession VALUES("16","11","18","00:11","00:12","2123-12-13","r12121","",""); 
INSERT INTO studioclasssession VALUES("20","12","18","","","1965-12-11","q","",""); 
INSERT INTO studioclasssession VALUES("21","10","21","00:00","13:00","2017-12-27","trx room","",""); 
INSERT INTO studioclasssession VALUES("22","8","19","","","0000-00-00","","",""); 
INSERT INTO studioclasssession VALUES("23","0","15","","","0000-00-00","","",""); 
INSERT INTO studioclasssession VALUES("24","10","21","01:12","00:12","2018-01-03","trx room","",""); 
INSERT INTO studioclasssession VALUES("25","13","19","","","0000-00-00","","",""); 
INSERT INTO studioclasssession VALUES("26","7","17","23:21","14:11","2018-01-23","Studio Area","",""); 
INSERT INTO studioclasssession VALUES("27","6","15","12:21","00:12","2018-01-23","Hall Room","",""); 
INSERT INTO studioclasssession VALUES("28","12","21","","","0000-00-00","","",""); 
INSERT INTO studioclasssession VALUES("29","5","15","","","0000-00-00","","",""); 



DROP TABLE towels;

CREATE TABLE `towels` (
  `towel_ID` int(8) NOT NULL AUTO_INCREMENT,
  `towel_date` varchar(11) NOT NULL,
  `towel_type` varchar(10) NOT NULL,
  `towel_amount` int(10) NOT NULL,
  `towel_time` varchar(11) NOT NULL,
  `towel_suppLeft` int(5) NOT NULL,
  `month` char(3) NOT NULL,
  `year` char(4) NOT NULL,
  PRIMARY KEY (`towel_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;




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
  `month` char(3) NOT NULL,
  `year` char(4) NOT NULL,
  PRIMARY KEY (`TLS_Code`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

INSERT INTO traininglogsession VALUES("15","0","2018-01-16","12:12:00.0000","00:12:00.0000","","0","0","Jan","2017"); 
INSERT INTO traininglogsession VALUES("16","0","2018-01-16","00:31:00.0000","00:31:00.0000","","0","0","Feb","2017"); 
INSERT INTO traininglogsession VALUES("17","0","2018-01-16","01:21:00.0000","00:31:00.0000","","0","0","Mar","2017"); 
INSERT INTO traininglogsession VALUES("18","0","2018-01-16","00:31:00.0000","00:01:00.0000","","0","0","Apr","2017"); 



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
INSERT INTO trainingpackage VALUES("18","30","Senior","5000","250"); 



DROP TABLE transaction;

CREATE TABLE `transaction` (
  `TR_Code` int(8) NOT NULL AUTO_INCREMENT,
  `A_Code` int(8) NOT NULL,
  `CLIENT_ID` int(8) NOT NULL,
  `TL_Code` int(8) NOT NULL,
  `TP_Code` int(8) NOT NULL,
  `M_Code` int(8) NOT NULL,
  `TR_status` varchar(10) NOT NULL,
  `TR_type` varchar(15) NOT NULL,
  `TR_Price` varchar(11) NOT NULL,
  `TR_Date` varchar(15) NOT NULL,
  `TR_f` int(2) NOT NULL,
  `month` char(3) NOT NULL,
  `year` char(4) NOT NULL,
  PRIMARY KEY (`TR_Code`)
) ENGINE=InnoDB AUTO_INCREMENT=124 DEFAULT CHARSET=latin1;

INSERT INTO transaction VALUES("76","164","54","0","0","1","Member","","400","2018-01-10","2","",""); 
INSERT INTO transaction VALUES("77","165","55","0","0","2","Walk-in","","400","2018-01-15","2","",""); 
INSERT INTO transaction VALUES("78","108","55","0","0","0","Unpaid","","400","2018-01-22","2","","2018"); 
INSERT INTO transaction VALUES("79","109","56","0","0","0","Walk-in","","400","2018-01-22","2","","2018"); 
INSERT INTO transaction VALUES("80","0","69","0","0","12","","","","2018-01-11","0","",""); 
INSERT INTO transaction VALUES("81","0","69","0","0","6","Member","","","2018-01-23","0","",""); 
INSERT INTO transaction VALUES("82","0","69","0","0","11","Member","","7194","2018-01-07","0","",""); 
INSERT INTO transaction VALUES("83","0","69","0","0","7","Member","","11988","2018-01-05","0","",""); 
INSERT INTO transaction VALUES("84","110","54","0","0","0","Member","","400","2018-01-22","2","","2018"); 
INSERT INTO transaction VALUES("85","0","54","0","0","14","Member","","7194","2018-01-02","2","",""); 
INSERT INTO transaction VALUES("86","111","58","0","0","0","","","400","2018-01-23","1","","2018"); 
INSERT INTO transaction VALUES("87","112","57","0","0","0","","","400","2018-01-23","1","","2018"); 
INSERT INTO transaction VALUES("88","113","54","0","0","0","Walk-in","","400","2018-24-01","1","",""); 
INSERT INTO transaction VALUES("89","114","55","0","0","0","Walk-in","","400","2018-01-24","1","",""); 
INSERT INTO transaction VALUES("90","115","57","0","0","0","Walk-in","","400","2018-01-24","1","",""); 
INSERT INTO transaction VALUES("91","116","58","0","0","0","Walk-in","","400","2018-01-24","1","",""); 
INSERT INTO transaction VALUES("92","117","57","0","0","0","Walk-in","","400","2018-01-24","1","",""); 
INSERT INTO transaction VALUES("93","118","56","0","0","0","Walk-in","","400","2018-01-24","1","",""); 
INSERT INTO transaction VALUES("94","119","54","0","0","0","Walk-in","","400","2018-01-25","1","",""); 
INSERT INTO transaction VALUES("95","120","54","0","0","0","Walk-in","","400","2018-01-25","1","",""); 
INSERT INTO transaction VALUES("96","121","54","0","0","0","Walk-in","","400","2018-01-25","1","",""); 
INSERT INTO transaction VALUES("97","122","54","0","0","0","Walk-in","","400","2018-01-25","1","",""); 
INSERT INTO transaction VALUES("98","123","54","0","0","0","Walk-in","","400","2018-01-25","1","",""); 
INSERT INTO transaction VALUES("99","124","54","0","0","0","Walk-in","","400","2018-01-25","1","",""); 
INSERT INTO transaction VALUES("100","125","54","0","0","0","Walk-in","","400","2018-01-25","1","",""); 
INSERT INTO transaction VALUES("101","126","54","0","0","0","Walk-in","","400","2018-01-25","1","",""); 
INSERT INTO transaction VALUES("102","127","54","0","0","0","Walk-in","","400","2018-01-25","1","",""); 
INSERT INTO transaction VALUES("103","128","54","0","0","0","Walk-in","","400","2018-01-25","1","",""); 
INSERT INTO transaction VALUES("104","129","54","0","0","0","Walk-in","","400","2018-01-25","1","",""); 
INSERT INTO transaction VALUES("105","130","54","0","0","0","Walk-in","","400","2018-01-25","1","",""); 
INSERT INTO transaction VALUES("106","131","54","0","0","0","Walk-in","","400","2018-01-25","1","",""); 
INSERT INTO transaction VALUES("107","132","54","0","0","0","Walk-in","","400","2018-01-25","1","",""); 
INSERT INTO transaction VALUES("108","133","54","0","0","0","Walk-in","","400","2018-01-25","1","",""); 
INSERT INTO transaction VALUES("109","133","54","0","0","0","Walk-in","","400","2018-01-25","1","",""); 
INSERT INTO transaction VALUES("110","135","54","0","0","0","Walk-in","","400","2018-01-25","1","",""); 
INSERT INTO transaction VALUES("111","136","54","0","0","0","Walk-in","","400","2018-01-25","1","",""); 
INSERT INTO transaction VALUES("112","137","54","0","0","0","Walk-in","","400","2018-01-25","1","",""); 
INSERT INTO transaction VALUES("113","138","54","0","0","0","Walk-in","","400","2018-01-25","1","",""); 
INSERT INTO transaction VALUES("114","139","54","0","0","0","Walk-in","","400","2018-01-25","1","",""); 
INSERT INTO transaction VALUES("115","140","54","0","0","0","Walk-in","","400","2018-01-25","1","",""); 
INSERT INTO transaction VALUES("116","141","55","0","0","0","Walk-in","","400","2018-01-25","1","",""); 
INSERT INTO transaction VALUES("117","142","58","0","0","0","Walk-in","","400","2018-01-25","1","",""); 
INSERT INTO transaction VALUES("118","143","54","0","0","0","Walk-in","","400","2018-01-25","1","",""); 
INSERT INTO transaction VALUES("119","144","54","0","0","0","Walk-in","","400","2018-01-25","1","",""); 
INSERT INTO transaction VALUES("120","145","56","0","0","0","Walk-in","","400","2018-01-25","1","",""); 
INSERT INTO transaction VALUES("121","146","54","0","0","0","Walk-in","","400","2018-01-25","1","",""); 
INSERT INTO transaction VALUES("122","147","54","0","0","0","Walk-in","","400","2018-01-25","1","",""); 
INSERT INTO transaction VALUES("123","148","55","0","0","0","Walk-in","","400","2018-01-25","1","",""); 



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



