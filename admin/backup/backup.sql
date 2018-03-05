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
) ENGINE=InnoDB AUTO_INCREMENT=196 DEFAULT CHARSET=latin1;

INSERT INTO activitylog VALUES("1","37","50","Personal Training Session","2012-08-04","13:30:50","14:30:50"); 
INSERT INTO activitylog VALUES("2","13","48","Personal Training Session","2014-01-03","09:30:50","10:30:50"); 
INSERT INTO activitylog VALUES("3","21","44","Personal Training Session","2014-06-06","10:30:50","11:30:50"); 
INSERT INTO activitylog VALUES("4","16","48","Personal Training Session","2015-05-10","11:30:50","12:30:50"); 
INSERT INTO activitylog VALUES("5","33","39","Personal Training Session","2013-05-29","12:30:50","13:30:50"); 
INSERT INTO activitylog VALUES("6","42","42","Personal Training Session","2013-09-29","13:30:50","14:30:50"); 
INSERT INTO activitylog VALUES("7","6","41","Personal Training Session","2013-06-07","14:30:50","15:30:50"); 
INSERT INTO activitylog VALUES("8","44","49","Personal Training Session","2006-02-03","15:30:50","16:30:50"); 
INSERT INTO activitylog VALUES("9","48","50","Personal Training Session","2008-12-09","16:30:50","17:30:50"); 
INSERT INTO activitylog VALUES("10","22","45","Personal Training Session","2012-10-31","17:30:50","18:30:50"); 
INSERT INTO activitylog VALUES("11","2","38","Personal Training Session","2006-07-23","18:30:50","19:30:50"); 
INSERT INTO activitylog VALUES("12","13","43","Personal Training Session","2015-07-23","19:30:50","20:30:50"); 
INSERT INTO activitylog VALUES("13","1","39","Personal Training Session","2014-02-13","20:30:50","21:30:50"); 
INSERT INTO activitylog VALUES("14","49","39","Personal Training Session","2007-03-06","21:30:50","22:30:50"); 
INSERT INTO activitylog VALUES("15","5","46","Personal Training Session","2017-11-10","22:30:50","13:30:50"); 
INSERT INTO activitylog VALUES("16","17","47","Personal Training Session","2016-12-03","13:30:50","14:30:50"); 
INSERT INTO activitylog VALUES("17","23","38","Personal Training Session","2017-06-08","09:30:50","10:30:50"); 
INSERT INTO activitylog VALUES("18","10","45","Personal Training Session","2012-08-02","10:30:50","11:30:50"); 
INSERT INTO activitylog VALUES("19","27","39","Personal Training Session","2016-07-01","11:30:50","12:30:50"); 
INSERT INTO activitylog VALUES("20","45","39","Personal Training Session","2011-07-23","12:30:50","13:30:50"); 
INSERT INTO activitylog VALUES("21","12","45","Personal Training Session","2008-10-05","13:30:50","14:30:50"); 
INSERT INTO activitylog VALUES("22","37","46","Personal Training Session","2010-11-21","14:30:50","15:30:50"); 
INSERT INTO activitylog VALUES("23","45","46","Personal Training Session","2007-07-05","15:30:50","16:30:50"); 
INSERT INTO activitylog VALUES("24","40","42","Personal Training Session","2008-04-29","16:30:50","17:30:50"); 
INSERT INTO activitylog VALUES("25","24","46","Studio Class Session","2017-02-22","17:30:50","18:30:50"); 
INSERT INTO activitylog VALUES("26","37","48","Studio Class Session","2012-05-12","18:30:50","19:30:50"); 
INSERT INTO activitylog VALUES("27","0","39","Studio Class Session","2013-08-29","19:30:50","20:30:50"); 
INSERT INTO activitylog VALUES("28","47","50","Studio Class Session","2011-01-10","20:30:50","21:30:50"); 
INSERT INTO activitylog VALUES("29","25","39","Studio Class Session","2013-12-22","21:30:50","22:30:50"); 
INSERT INTO activitylog VALUES("30","50","42","Studio Class Session","2009-06-28","22:30:50","13:30:50"); 
INSERT INTO activitylog VALUES("31","0","40","Studio Class Session","2008-01-28","13:30:50","14:30:50"); 
INSERT INTO activitylog VALUES("32","8","48","Studio Class Session","2017-06-04","09:30:50","10:30:50"); 
INSERT INTO activitylog VALUES("33","15","48","Studio Class Session","2006-12-12","10:30:50","11:30:50"); 
INSERT INTO activitylog VALUES("34","41","41","Studio Class Session","2006-02-13","11:30:50","12:30:50"); 
INSERT INTO activitylog VALUES("35","0","41","Studio Class Session","2006-03-05","12:30:50","13:30:50"); 
INSERT INTO activitylog VALUES("36","44","40","Studio Class Session","2016-02-27","13:30:50","14:30:50"); 
INSERT INTO activitylog VALUES("37","43","48","Studio Class Session","2010-10-18","14:30:50","15:30:50"); 
INSERT INTO activitylog VALUES("38","9","48","Studio Class Session","2007-08-06","15:30:50","16:30:50"); 
INSERT INTO activitylog VALUES("39","11","44","Studio Class Session","2008-09-23","16:30:50","17:30:50"); 
INSERT INTO activitylog VALUES("40","1","39","Studio Class Session","2007-11-25","17:30:50","18:30:50"); 
INSERT INTO activitylog VALUES("41","0","49","Studio Class Session","2009-01-14","18:30:50","19:30:50"); 
INSERT INTO activitylog VALUES("42","26","40","Studio Class Session","2014-09-24","19:30:50","20:30:50"); 
INSERT INTO activitylog VALUES("43","14","44","Studio Class Session","2009-05-26","20:30:50","21:30:50"); 
INSERT INTO activitylog VALUES("44","50","38","Studio Class Session","2008-07-25","21:30:50","22:30:50"); 
INSERT INTO activitylog VALUES("45","0","45","Studio Class Session","2014-11-04","22:30:50","13:30:50"); 
INSERT INTO activitylog VALUES("46","44","45","Studio Class Session","2014-01-28","13:30:50","14:30:50"); 
INSERT INTO activitylog VALUES("47","19","50","Studio Class Session","2006-06-08","09:30:50","10:30:50"); 
INSERT INTO activitylog VALUES("48","43","41","Studio Class Session","2012-05-11","10:30:50","11:30:50"); 
INSERT INTO activitylog VALUES("49","37","44","Studio Class Session","2016-12-04","11:30:50","12:30:50"); 
INSERT INTO activitylog VALUES("50","36","46","Studio Class Session","2015-06-11","12:30:50","13:30:50"); 
INSERT INTO activitylog VALUES("51","4","46","Personal Training Session","2015-09-21","13:30:50","14:30:50"); 
INSERT INTO activitylog VALUES("52","26","43","Personal Training Session","2015-07-28","14:30:50","15:30:50"); 
INSERT INTO activitylog VALUES("53","0","42","Studio Class Session","2012-03-28","15:30:50","16:30:50"); 
INSERT INTO activitylog VALUES("54","35","50","Personal Training Session","2011-08-17","16:30:50","17:30:50"); 
INSERT INTO activitylog VALUES("55","38","48","Personal Training Session","2016-11-18","17:30:50","18:30:50"); 
INSERT INTO activitylog VALUES("56","44","48","Personal Training Session","2010-02-25","18:30:50","19:30:50"); 
INSERT INTO activitylog VALUES("57","1","47","Personal Training Session","2009-04-30","19:30:50","20:30:50"); 
INSERT INTO activitylog VALUES("58","50","42","Personal Training Session","2008-09-15","20:30:50","21:30:50"); 
INSERT INTO activitylog VALUES("59","19","48","Personal Training Session","2013-03-10","21:30:50","22:30:50"); 
INSERT INTO activitylog VALUES("60","9","47","Personal Training Session","2017-04-09","22:30:50","13:30:50"); 
INSERT INTO activitylog VALUES("61","37","39","Studio Class Session","2006-04-01","13:30:50","14:30:50"); 
INSERT INTO activitylog VALUES("62","4","39","Studio Class Session","2009-10-03","09:30:50","10:30:50"); 
INSERT INTO activitylog VALUES("63","34","39","Studio Class Session","2008-06-14","10:30:50","11:30:50"); 
INSERT INTO activitylog VALUES("64","4","49","Personal Training Session","2008-10-30","11:30:50","12:30:50"); 
INSERT INTO activitylog VALUES("65","21","46","Personal Training Session","2018-02-14","12:30:50","13:30:50"); 
INSERT INTO activitylog VALUES("66","0","48","Studio Class Session","2010-04-15","13:30:50","14:30:50"); 
INSERT INTO activitylog VALUES("67","23","50","Studio Class Session","2017-11-20","14:30:50","15:30:50"); 
INSERT INTO activitylog VALUES("68","13","38","Studio Class Session","2009-07-30","15:30:50","16:30:50"); 
INSERT INTO activitylog VALUES("69","26","39","Studio Class Session","2013-07-03","16:30:50","17:30:50"); 
INSERT INTO activitylog VALUES("70","26","45","Studio Class Session","2017-04-28","17:30:50","18:30:50"); 
INSERT INTO activitylog VALUES("71","49","45","Studio Class Session","2009-05-28","18:30:50","19:30:50"); 
INSERT INTO activitylog VALUES("72","22","39","Studio Class Session","2010-04-04","19:30:50","20:30:50"); 
INSERT INTO activitylog VALUES("73","3","44","Studio Class Session","2011-04-15","20:30:50","21:30:50"); 
INSERT INTO activitylog VALUES("74","46","46","Studio Class Session","2012-08-17","21:30:50","22:30:50"); 
INSERT INTO activitylog VALUES("75","20","40","Personal Training Session","2010-05-13","22:30:50","13:30:50"); 
INSERT INTO activitylog VALUES("76","40","48","Personal Training Session","2008-09-25","13:30:50","14:30:50"); 
INSERT INTO activitylog VALUES("77","37","41","Personal Training Session","2008-04-10","09:30:50","10:30:50"); 
INSERT INTO activitylog VALUES("78","49","41","Personal Training Session","2006-11-23","10:30:50","11:30:50"); 
INSERT INTO activitylog VALUES("79","27","45","Personal Training Session","2007-03-23","11:30:50","12:30:50"); 
INSERT INTO activitylog VALUES("80","25","38","Personal Training Session","2007-06-20","12:30:50","13:30:50"); 
INSERT INTO activitylog VALUES("81","41","46","Personal Training Session","2007-02-17","13:30:50","14:30:50"); 
INSERT INTO activitylog VALUES("82","12","38","Personal Training Session","2005-12-24","14:30:50","15:30:50"); 
INSERT INTO activitylog VALUES("83","26","39","Personal Training Session","2005-06-09","15:30:50","16:30:50"); 
INSERT INTO activitylog VALUES("84","43","44","Personal Training Session","2015-01-27","16:30:50","17:30:50"); 
INSERT INTO activitylog VALUES("85","47","38","Personal Training Session","2005-05-17","17:30:50","18:30:50"); 
INSERT INTO activitylog VALUES("86","21","47","Personal Training Session","2007-04-23","18:30:50","19:30:50"); 
INSERT INTO activitylog VALUES("87","28","40","Personal Training Session","2005-08-26","19:30:50","20:30:50"); 
INSERT INTO activitylog VALUES("88","4","42","Studio Class Session","2008-03-26","20:30:50","21:30:50"); 
INSERT INTO activitylog VALUES("89","18","40","Studio Class Session","2007-09-02","21:30:50","22:30:50"); 
INSERT INTO activitylog VALUES("90","17","42","Studio Class Session","2012-08-22","22:30:50","13:30:50"); 
INSERT INTO activitylog VALUES("91","45","43","Studio Class Session","2011-08-02","13:30:50","14:30:50"); 
INSERT INTO activitylog VALUES("92","21","46","Studio Class Session","2007-07-25","09:30:50","10:30:50"); 
INSERT INTO activitylog VALUES("93","49","48","Studio Class Session","2005-06-27","10:30:50","11:30:50"); 
INSERT INTO activitylog VALUES("94","17","38","Studio Class Session","2010-06-05","11:30:50","12:30:50"); 
INSERT INTO activitylog VALUES("95","14","39","Studio Class Session","2013-03-17","12:30:50","13:30:50"); 
INSERT INTO activitylog VALUES("96","2","39","Personal Training Session","2017-01-12","13:30:50","14:30:50"); 
INSERT INTO activitylog VALUES("97","11","46","Personal Training Session","2006-04-07","14:30:50","15:30:50"); 
INSERT INTO activitylog VALUES("98","48","45","Personal Training Session","2011-07-12","15:30:50","16:30:50"); 
INSERT INTO activitylog VALUES("99","1","45","Studio Class Session","2005-08-23","16:30:50","17:30:50"); 
INSERT INTO activitylog VALUES("100","10","47","Studio Class Session","2006-10-20","17:30:50","18:30:50"); 
INSERT INTO activitylog VALUES("187","83","38","Personal Training Session","2018-02-16","14:01:00","15:02:00"); 
INSERT INTO activitylog VALUES("188","","39","Studio Class Session","2018-02-16","14:01:00","14:02:00"); 
INSERT INTO activitylog VALUES("189","83","39","Studio Class Session","2018-02-16","14:01:00","14:05:00"); 
INSERT INTO activitylog VALUES("190","1","39","Studio Class Session","2018-02-16","14:01:00","14:05:00"); 
INSERT INTO activitylog VALUES("191","2","39","Studio Class Session","2018-02-16","14:01:00","14:05:00"); 
INSERT INTO activitylog VALUES("192","9","39","Studio Class Session","2018-02-16","14:01:00","14:05:00"); 
INSERT INTO activitylog VALUES("193","2","39","Studio Class Session","2018-02-16","14:01:00","14:05:00"); 
INSERT INTO activitylog VALUES("194","1","39","Studio Class Session","2018-02-16","14:01:00","14:05:00"); 
INSERT INTO activitylog VALUES("195","","38","Studio Class Session","2018-02-09","15:02:00","16:00:00"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=631 DEFAULT CHARSET=latin1;

INSERT INTO attendance VALUES("481","68","03:24:55","03:25:01","1","1","1","Returned","2018","Feb","2018-02-11","Member"); 
INSERT INTO attendance VALUES("482","68","03:25:08","","2","0","1","","2018","Feb","2018-02-11","Member"); 
INSERT INTO attendance VALUES("483","78","03:25:27","03:25:39","2","2","2","Returned","2018","Feb","2018-02-11","Walk-in"); 
INSERT INTO attendance VALUES("484","78","03:25:46","","4","0","2","","2018","Feb","2018-02-11","Walk-in"); 
INSERT INTO attendance VALUES("485","80","03:37:15","03:37:39","2","2","3","Returned","2018","Feb","2018-02-11","Walk-in"); 
INSERT INTO attendance VALUES("486","80","03:37:42","03:38:01","2","2","3","Returned","2018","Feb","2018-02-11","Walk-in"); 
INSERT INTO attendance VALUES("487","80","03:38:04","03:39:35","2","2","3","Returned","2018","Feb","2018-02-11","Walk-in"); 
INSERT INTO attendance VALUES("488","80","03:39:38","03:41:33","2","2","3","Returned","2018","Feb","2018-02-11","Walk-in"); 
INSERT INTO attendance VALUES("489","80","03:41:36","03:42:44","2","2","3","Returned","2018","Feb","2018-02-11","Walk-in"); 
INSERT INTO attendance VALUES("490","80","03:42:48","03:50:36","1","1","3","Returned","2018","Feb","2018-02-11","Walk-in"); 
INSERT INTO attendance VALUES("491","80","03:49:53","03:50:39","1","1","3","Returned","2018","Feb","2018-02-11","Walk-in"); 
INSERT INTO attendance VALUES("492","80","03:50:08","03:50:43","1","1","3","Returned","2018","Feb","2018-02-11","Walk-in"); 
INSERT INTO attendance VALUES("493","80","03:50:30","03:50:46","1","1","3","Returned","2018","Feb","2018-02-11","Walk-in"); 
INSERT INTO attendance VALUES("494","80","03:50:49","03:51:42","2","2","3","Returned","2018","Feb","2018-02-11","Walk-in"); 
INSERT INTO attendance VALUES("495","80","03:51:39","03:51:47","2","2","3","Returned","2018","Feb","2018-02-11","Walk-in"); 
INSERT INTO attendance VALUES("496","80","03:51:52","03:52:21","2","2","3","Returned","2018","Feb","2018-02-11","Walk-in"); 
INSERT INTO attendance VALUES("497","80","03:52:23","03:57:01","2","2","3","Returned","2018","Feb","2018-02-11","Walk-in"); 
INSERT INTO attendance VALUES("498","80","03:57:03","03:59:08","2","2","3","Returned","2018","Feb","2018-02-11","Walk-in"); 
INSERT INTO attendance VALUES("499","80","03:59:10","03:59:15","2","2","3","Returned","2018","Feb","2018-02-11","Walk-in"); 
INSERT INTO attendance VALUES("500","80","04:00:15","04:00:20","2","2","3","Returned","2018","Feb","2018-02-11","Member"); 
INSERT INTO attendance VALUES("501","80","04:00:45","04:01:15","1","1","3","Returned","2018","Feb","2018-02-11","Member"); 
INSERT INTO attendance VALUES("502","80","04:01:17","04:01:25","2","2","3","Returned","2018","Feb","2018-02-11","Member"); 
INSERT INTO attendance VALUES("503","1","08:00:00","9:00:00AM","1","1","1","Returned","2017","Jan","2017-01-01","Walk-in"); 
INSERT INTO attendance VALUES("504","2","09:00:00","10:00:00AM","1","1","2","Returned","2017","Feb","2017-02-02","Walk-in"); 
INSERT INTO attendance VALUES("505","3","10:00:00","11:00:00AM","2","2","3","Returned","2017","Mar","2017-03-03","Walk-in"); 
INSERT INTO attendance VALUES("506","4","11:00:00","12:00:00PM","3","3","4","Returned","2017","Apr","2017-04-04","Walk-in"); 
INSERT INTO attendance VALUES("507","5","12:00:00","1:00:00PM","2","2","5","Returned","2017","May","2017-05-05","Walk-in"); 
INSERT INTO attendance VALUES("508","6","01:00:00","2:00:00PM","1","1","6","Returned","2017","Jun","2017-06-06","Walk-in"); 
INSERT INTO attendance VALUES("509","7","02:00:00","3:00:00PM","2","2","7","Returned","2017","Jul","2017-07-07","Walk-in"); 
INSERT INTO attendance VALUES("510","8","03:00:00","4:00:00PM","3","3","8","Returned","2017","Aug","2017-08-08","Walk-in"); 
INSERT INTO attendance VALUES("511","9","04:00:00","5:00:00PM","2","2","9","Returned","2017","Sep","2017-09-09","Walk-in"); 
INSERT INTO attendance VALUES("512","10","05:00:00","6:00:00PM","1","1","10","Returned","2017","Oct","2017-10-10","Walk-in"); 
INSERT INTO attendance VALUES("513","11","06:00:00","7:00:00PM","2","2","11","Returned","2017","Nov","2017-11-11","Walk-in"); 
INSERT INTO attendance VALUES("514","12","07:00:00","8:00:00PM","3","3","12","Returned","2017","Dec","2017-12-12","Walk-in"); 
INSERT INTO attendance VALUES("515","13","08:00:00","9:00:00PM","2","2","13","Returned","2017","Jan","2017-01-13","Walk-in"); 
INSERT INTO attendance VALUES("516","14","09:00:00","10:00:00PM","1","1","14","Returned","2017","Feb","2017-02-14","Walk-in"); 
INSERT INTO attendance VALUES("517","15","10:00:00","11:00:00PM","1","1","15","Returned","2017","Mar","2017-03-15","Walk-in"); 
INSERT INTO attendance VALUES("518","16","11:00:00","9:00:00AM","2","2","16","Returned","2017","Apr","2017-04-16","Walk-in"); 
INSERT INTO attendance VALUES("519","17","08:00:00","10:00:00AM","3","3","17","Returned","2017","May","2017-05-17","Walk-in"); 
INSERT INTO attendance VALUES("520","18","09:00:00","11:00:00AM","2","2","18","Returned","2017","Jun","2017-06-18","Walk-in"); 
INSERT INTO attendance VALUES("521","19","10:00:00","12:00:00PM","1","1","19","Returned","2017","Jul","2017-07-19","Walk-in"); 
INSERT INTO attendance VALUES("522","20","11:00:00","1:00:00PM","2","2","20","Returned","2017","Aug","2017-08-20","Walk-in"); 
INSERT INTO attendance VALUES("523","21","12:00:00","2:00:00PM","3","3","21","Returned","2017","Sep","2017-09-21","Walk-in"); 
INSERT INTO attendance VALUES("524","22","01:00:00","3:00:00PM","2","2","22","Returned","2017","Oct","2017-10-22","Walk-in"); 
INSERT INTO attendance VALUES("525","23","02:00:00","4:00:00PM","1","1","23","Returned","2017","Nov","2017-11-23","Walk-in"); 
INSERT INTO attendance VALUES("526","24","03:00:00","5:00:00PM","2","2","24","Returned","2017","Dec","2017-12-24","Walk-in"); 
INSERT INTO attendance VALUES("527","25","04:00:00","6:00:00PM","3","3","25","Returned","2017","Jan","2017-01-25","Walk-in"); 
INSERT INTO attendance VALUES("528","26","05:00:00","7:00:00PM","2","2","26","Returned","2017","Feb","2017-02-26","Walk-in"); 
INSERT INTO attendance VALUES("529","27","06:00:00","8:00:00PM","1","1","27","Returned","2017","Mar","2017-03-27","Walk-in"); 
INSERT INTO attendance VALUES("530","28","07:00:00","9:00:00PM","1","1","28","Returned","2017","Apr","2017-04-28","Walk-in"); 
INSERT INTO attendance VALUES("531","29","08:00:00","10:00:00PM","2","2","29","Returned","2017","May","2017-05-29","Walk-in"); 
INSERT INTO attendance VALUES("532","30","09:00:00","11:00:00PM","3","3","30","Returned","2017","May","2017-05-30","Walk-in"); 
INSERT INTO attendance VALUES("533","31","10:00:00","9:00:00AM","2","2","31","Returned","2017","May","2017-05-31","Walk-in"); 
INSERT INTO attendance VALUES("534","32","11:00:00","10:00:00AM","1","1","32","Returned","2017","Aug","2017-06-01","Walk-in"); 
INSERT INTO attendance VALUES("535","33","08:00:00","11:00:00AM","2","2","33","Returned","2017","Aug","2017-06-02","Walk-in"); 
INSERT INTO attendance VALUES("536","34","09:00:00","12:00:00PM","3","3","34","Returned","2017","Aug","2017-06-03","Walk-in"); 
INSERT INTO attendance VALUES("537","35","10:00:00","1:00:00PM","2","2","35","Returned","2017","Aug","2017-06-04","Walk-in"); 
INSERT INTO attendance VALUES("538","36","11:00:00","2:00:00PM","1","1","36","Returned","2017","Dec","2017-12-04","Walk-in"); 
INSERT INTO attendance VALUES("539","37","12:00:00","3:00:00PM","2","2","37","Returned","2017","Dec","2017-12-05","Walk-in"); 
INSERT INTO attendance VALUES("540","38","01:00:00","4:00:00PM","3","3","38","Returned","2017","Dec","2017-12-06","Walk-in"); 
INSERT INTO attendance VALUES("541","39","02:00:00","5:00:00PM","2","2","39","Returned","2017","Dec","2017-12-07","Walk-in"); 
INSERT INTO attendance VALUES("542","40","03:00:00","6:00:00PM","1","1","40","Returned","2017","Dec","2017-12-08","Walk-in"); 
INSERT INTO attendance VALUES("543","41","04:00:00","7:00:00PM","1","1","41","Returned","2017","Dec","2017-12-09","Walk-in"); 
INSERT INTO attendance VALUES("544","42","05:00:00","8:00:00PM","2","2","42","Returned","2017","Dec","2017-12-10","Walk-in"); 
INSERT INTO attendance VALUES("545","43","06:00:00","9:00:00PM","3","3","43","Returned","2017","Jul","2017-07-10","Walk-in"); 
INSERT INTO attendance VALUES("546","44","07:00:00","10:00:00PM","2","2","44","Returned","2017","Jul","2017-07-11","Walk-in"); 
INSERT INTO attendance VALUES("547","45","08:00:00","11:00:00PM","1","1","45","Returned","2017","Jul","2017-07-12","Walk-in"); 
INSERT INTO attendance VALUES("548","46","09:00:00","9:00:00AM","2","2","46","Returned","2017","Jul","2017-07-13","Walk-in"); 
INSERT INTO attendance VALUES("549","47","10:00:00","10:00:00AM","3","3","47","Returned","2017","Jul","2017-07-14","Walk-in"); 
INSERT INTO attendance VALUES("550","48","11:00:00","11:00:00AM","2","2","48","Returned","2017","Jul","2017-07-15","Walk-in"); 
INSERT INTO attendance VALUES("551","49","08:00:00","12:00:00PM","1","1","49","Returned","2017","Jul","2017-07-16","Walk-in"); 
INSERT INTO attendance VALUES("552","50","09:00:00","1:00:00PM","2","2","50","Returned","2017","Jul","2017-07-17","Walk-in"); 
INSERT INTO attendance VALUES("553","1","10:00:00","2:00:00PM","3","3","51","Returned","2017","Jul","2017-07-18","Member"); 
INSERT INTO attendance VALUES("554","2","11:00:00","3:00:00PM","2","2","52","Returned","2017","Jul","2017-07-19","Member"); 
INSERT INTO attendance VALUES("555","3","12:00:00","4:00:00PM","1","1","53","Returned","2017","Jul","2017-07-20","Member"); 
INSERT INTO attendance VALUES("556","4","01:00:00","5:00:00PM","1","1","54","Returned","2017","Jun","2017-06-20","Member"); 
INSERT INTO attendance VALUES("557","5","02:00:00","6:00:00PM","2","2","55","Returned","2017","Jun","2017-06-21","Member"); 
INSERT INTO attendance VALUES("558","6","03:00:00","7:00:00PM","3","3","56","Returned","2017","Jun","2017-06-22","Member"); 
INSERT INTO attendance VALUES("559","7","04:00:00","8:00:00PM","2","2","57","Returned","2017","Jun","2017-06-23","Member"); 
INSERT INTO attendance VALUES("560","8","05:00:00","9:00:00PM","1","1","58","Returned","2017","Jun","2017-06-24","Member"); 
INSERT INTO attendance VALUES("561","9","06:00:00","10:00:00PM","2","2","59","Returned","2017","Jun","2017-06-25","Member"); 
INSERT INTO attendance VALUES("562","10","07:00:00","11:00:00PM","3","3","60","Returned","2017","Jun","2017-06-26","Member"); 
INSERT INTO attendance VALUES("563","11","08:00:00","9:00:00AM","2","2","61","Returned","2017","Jan","2017-01-27","Member"); 
INSERT INTO attendance VALUES("564","12","09:00:00","10:00:00AM","1","1","62","Returned","2017","Jan","2017-01-28","Member"); 
INSERT INTO attendance VALUES("565","13","10:00:00","11:00:00AM","2","2","63","Returned","2017","Jan","2017-01-29","Member"); 
INSERT INTO attendance VALUES("566","14","11:00:00","12:00:00PM","3","3","64","Returned","2017","Jan","2017-01-30","Member"); 
INSERT INTO attendance VALUES("567","15","08:00:00","1:00:00PM","2","2","100","Returned","2017","Jan","2017-01-31","Member"); 
INSERT INTO attendance VALUES("568","16","09:00:00","2:00:00PM","1","1","101","Returned","2017","Feb","2017-02-01","Member"); 
INSERT INTO attendance VALUES("569","17","10:00:00","3:00:00PM","1","1","102","Returned","2017","Feb","2017-02-02","Member"); 
INSERT INTO attendance VALUES("570","18","11:00:00","4:00:00PM","2","2","103","Returned","2017","Feb","2017-02-03","Member"); 
INSERT INTO attendance VALUES("571","19","12:00:00","5:00:00PM","3","3","104","Returned","2017","Feb","2017-02-04","Member"); 
INSERT INTO attendance VALUES("572","20","01:00:00","6:00:00PM","2","2","105","Returned","2017","Feb","2017-02-05","Member"); 
INSERT INTO attendance VALUES("573","21","02:00:00","7:00:00PM","1","1","106","Returned","2017","Feb","2017-02-06","Member"); 
INSERT INTO attendance VALUES("574","22","03:00:00","8:00:00PM","2","2","107","Returned","2017","Feb","2017-02-07","Member"); 
INSERT INTO attendance VALUES("575","23","04:00:00","9:00:00PM","3","3","108","Returned","2017","Feb","2017-02-08","Member"); 
INSERT INTO attendance VALUES("576","24","05:00:00","10:00:00PM","2","2","109","Returned","2017","Feb","2017-02-09","Member"); 
INSERT INTO attendance VALUES("577","25","06:00:00","11:00:00PM","1","1","110","Returned","2017","Mar","2017-03-10","Member"); 
INSERT INTO attendance VALUES("578","26","07:00:00","9:00:00AM","2","2","111","Returned","2017","Mar","2017-03-11","Member"); 
INSERT INTO attendance VALUES("579","27","08:00:00","10:00:00AM","3","3","112","Returned","2017","Mar","2017-03-12","Member"); 
INSERT INTO attendance VALUES("580","28","09:00:00","11:00:00AM","2","2","113","Returned","2017","Mar","2017-03-13","Member"); 
INSERT INTO attendance VALUES("581","29","10:00:00","12:00:00PM","1","1","114","Returned","2017","Mar","2017-03-14","Member"); 
INSERT INTO attendance VALUES("582","30","11:00:00","1:00:00PM","1","1","115","Returned","2017","Mar","2017-03-15","Member"); 
INSERT INTO attendance VALUES("583","31","08:00:00","2:00:00PM","2","2","116","Returned","2017","Mar","2017-03-16","Member"); 
INSERT INTO attendance VALUES("584","32","09:00:00","3:00:00PM","3","3","117","Returned","2017","Mar","2017-03-17","Member"); 
INSERT INTO attendance VALUES("585","33","10:00:00","4:00:00PM","2","2","118","Returned","2017","Mar","2017-03-18","Member"); 
INSERT INTO attendance VALUES("586","34","11:00:00","5:00:00PM","1","1","119","Returned","2017","Mar","2017-03-19","Member"); 
INSERT INTO attendance VALUES("587","35","12:00:00","6:00:00PM","2","2","120","Returned","2017","Apr","2017-04-19","Member"); 
INSERT INTO attendance VALUES("588","36","01:00:00","7:00:00PM","3","3","121","Returned","2017","Apr","2017-04-20","Member"); 
INSERT INTO attendance VALUES("589","37","02:00:00","8:00:00PM","2","2","122","Returned","2017","Apr","2017-04-21","Member"); 
INSERT INTO attendance VALUES("590","38","03:00:00","9:00:00PM","1","1","123","Returned","2017","Apr","2017-04-22","Member"); 
INSERT INTO attendance VALUES("591","39","04:00:00","10:00:00PM","2","2","124","Returned","2017","May","2017-05-23","Member"); 
INSERT INTO attendance VALUES("592","40","05:00:00","11:00:00PM","3","3","125","Returned","2017","May","2017-05-24","Member"); 
INSERT INTO attendance VALUES("593","41","06:00:00","9:00:00AM","2","2","126","Returned","2017","May","2017-05-25","Member"); 
INSERT INTO attendance VALUES("594","42","07:00:00","10:00:00AM","1","1","127","Returned","2017","May","2017-05-26","Member"); 
INSERT INTO attendance VALUES("595","43","08:00:00","11:00:00AM","1","1","128","Returned","2017","May","2017-05-27","Member"); 
INSERT INTO attendance VALUES("596","44","09:00:00","12:00:00PM","2","2","129","Returned","2017","May","2017-05-28","Member"); 
INSERT INTO attendance VALUES("597","45","10:00:00","1:00:00PM","3","3","130","Returned","2017","May","2017-05-29","Member"); 
INSERT INTO attendance VALUES("598","46","11:00:00","2:00:00PM","2","2","131","Returned","2017","May","2017-05-30","Member"); 
INSERT INTO attendance VALUES("599","47","08:00:00","3:00:00PM","1","1","132","Returned","2017","Jun","2017-05-31","Member"); 
INSERT INTO attendance VALUES("600","48","09:00:00","4:00:00PM","2","2","133","Returned","2017","Jun","2017-06-01","Member"); 
INSERT INTO attendance VALUES("601","49","10:00:00","5:00:00PM","3","3","134","Returned","2017","Jun","2017-06-02","Member"); 
INSERT INTO attendance VALUES("602","50","11:00:00","6:00:00PM","2","2","135","Returned","2017","Jun","2017-06-03","Member"); 
INSERT INTO attendance VALUES("630","1","03:05:22","03:06:12","4","3","1","Returned","2018","Feb","2018-02-14","Member"); 



DROP TABLE backuphistory;

CREATE TABLE `backuphistory` (
  `backup_id` int(8) NOT NULL AUTO_INCREMENT,
  `backup_type` varchar(6) NOT NULL,
  `backup_date` date NOT NULL,
  `backup_time` time NOT NULL,
  PRIMARY KEY (`backup_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=latin1;

INSERT INTO client VALUES("1","Abigail","Castillo","Ball","Male","Abigail Ball@gmail.c","Member","","09371481926","","1984-08-10","1984","08","10","2013-08-15","Aug","2013"); 
INSERT INTO client VALUES("2","Aiza","Bell","College","Male","Aiza College@gmail.c","Member","","09737992613","","1990-04-15","1990","04","15","2011-02-01","Feb","2011"); 
INSERT INTO client VALUES("3","Alden","Smith","Mary","Male","Alden Mary@gmail.com","Member","","09659482157","","1996-05-30","1996","05","30","2011-04-29","Apr","2011"); 
INSERT INTO client VALUES("4","Amihan","Jones","Hayes","Male","Amihan Hayes@gmail.c","Member","","09691780421","","1999-05-11","1999","05","11","2006-03-19","Mar","2006"); 
INSERT INTO client VALUES("5","Amparo","Brown","Page","Male","Amparo Page@gmail.co","Member","","09353615042","","1988-09-20","1988","09","20","2016-09-24","Sep","2016"); 
INSERT INTO client VALUES("6","Apolinario","Johnson","Rose","Male","Apolinario Rose@gmai","Member","","09791359392","","2005-09-29","2005","09","29","2011-10-26","Oct","2011"); 
INSERT INTO client VALUES("7","Amado","Williams","Patterson","Male","Amado Patterson@gmai","Member","","09390787081","","1983-09-23","1983","09","23","2016-06-15","Jun","2016"); 
INSERT INTO client VALUES("8","Alejandro","Miller","Ann","Male","Alejandro Ann@gmail.","Member","","09708880925","","2004-11-10","2004","11","10","2015-06-20","Jun","2015"); 
INSERT INTO client VALUES("9","Andres","Taylor","Crawford","Male","Andres Crawford@gmai","Member","","09929659028","","2002-03-21","2002","03","21","2010-08-29","Aug","2010"); 
INSERT INTO client VALUES("10","Armando","Wilson","Arnold","Male","Armando Arnold@gmail","Member","","09507625599","","1995-03-20","1995","03","20","2007-07-05","Jul","2007"); 
INSERT INTO client VALUES("11","Angel","Davis","House","Male","Angel House@gmail.co","Member","","09370609024","","1987-09-16","1987","09","16","2007-03-26","Mar","2007"); 
INSERT INTO client VALUES("12","Antonio","White","Fletcher","Male","Antonio Fletcher@gma","Member","","09427705188","","1997-01-10","1997","01","10","2015-01-15","Jan","2015"); 
INSERT INTO client VALUES("13","Aquilino","Clark","Harvey","Male","Aquilino Harvey@gmai","Member","","09715926994","","2002-04-20","2002","04","20","2005-06-17","Jul","2005"); 
INSERT INTO client VALUES("14","Arnel","Hall","Fuller","Male","Arnel Fuller@gmail.c","Member","","09944723323","","2002-04-29","2002","04","29","2006-05-30","May","2006"); 
INSERT INTO client VALUES("15","Avelino","Thomas","Elliott","Male","Avelino Elliott@gmai","Member","","09499283209","","1991-01-13","1991","01","13","2016-10-29","Oct","2016"); 
INSERT INTO client VALUES("16","Aaron","Thompson","Carpenter","Male","Aaron Carpenter@gmai","Member","","09491266302","","1996-03-19","1996","03","19","2006-03-15","Mar","2006"); 
INSERT INTO client VALUES("17","Abigail","Moore","Perkins","Male","Abigail Perkins@gmai","Member","","09409696357","","2005-12-23","2005","12","23","2013-06-29","Jun","2013"); 
INSERT INTO client VALUES("18","Abraham","Hill","Morrison","Male","Abraham Morrison@gma","Member","","09633901659","","2004-07-19","2004","07","19","2007-02-06","Feb","2007"); 
INSERT INTO client VALUES("19","Adonis","Walker","Peterson","Male","Adonis Peterson@gmai","Member","","09939382893","","2005-02-17","2005","02","17","2010-01-30","Jan","2010"); 
INSERT INTO client VALUES("20","Adrian","Anderson","Davidson","Male","Adrian Davidson@gmai","Member","","09708120524","","1984-09-30","1984","09","30","2011-01-15","Jan","2011"); 
INSERT INTO client VALUES("21","Dalisay","Wright","Ferguson","Male","Dalisay Ferguson@gma","Member","","09444465535","","1990-01-23","1990","01","23","2006-08-07","Aug","2006"); 
INSERT INTO client VALUES("22","Danilo","Martin","Park","Male","Danilo Park@gmail.co","Member","","09590550552","","2003-11-29","2003","11","29","2009-11-04","Nov","2009"); 
INSERT INTO client VALUES("23","Divina","Wood","Myers","Male","Divina Myers@gmail.c","Member","","09835449302","","1992-04-19","1992","04","19","2009-05-05","May","2009"); 
INSERT INTO client VALUES("24","Daisy","Allen","Ryan","Male","Daisy Ryan@gmail.com","Member","","09393101629","","1988-09-19","1988","09","19","2016-05-05","May","2016"); 
INSERT INTO client VALUES("25","Damien","Robinson","Freeman","Male","Damien Freeman@gmail","Member","","09364648600","","2003-06-27","2003","06","27","2016-10-24","Oct","2016"); 
INSERT INTO client VALUES("26","Danica","Lewis","Pierce","Female","Danica Pierce@gmail.","Member","","09400809511","","2005-12-13","2005","12","13","2012-02-08","Feb","2012"); 
INSERT INTO client VALUES("27","Daniel","Scott","Fellows","Female","Daniel Fellows@gmail","Walk-in","","09457851001","","1993-05-30","1993","05","30","2007-07-21","Jul","2007"); 
INSERT INTO client VALUES("28","Daniela, Danielle","Young","Douglas","Female","Daniela, Danielle Do","Walk-in","","09567091921","","2002-05-25","2002","05","25","2011-07-10","Jul","2011"); 
INSERT INTO client VALUES("29","Danika","Jackson","Tucker","Female","Danika Tucker@gmail.","Walk-in","","09523142577","","1990-05-13","1990","05","13","2017-08-30","Aug","2017"); 
INSERT INTO client VALUES("30","Dante","Adams","Dixon","Female","Dante Dixon@gmail.co","Walk-in","","09926301688","","1996-04-19","1996","04","19","2012-02-15","Feb","2012"); 
INSERT INTO client VALUES("31","Daphne","Tryniski","Bradley","Female","Daphne Bradley@gmail","Walk-in","","09735399423","","2001-03-19","2001","03","19","2007-01-26","Jan","2007"); 
INSERT INTO client VALUES("32","Daria","Green","Hopkins","Female","Daria Hopkins@gmail.","Walk-in","","09396207172","","2004-03-20","2004","03","20","2005-10-11","Oct","2005"); 
INSERT INTO client VALUES("33","Darius","Evans","Potter","Female","Darius Potter@gmail.","Walk-in","","09965980473","","1997-06-17","1997","06","17","2011-12-22","Dec","2011"); 
INSERT INTO client VALUES("34","Darlene","King","Lloyd","Female","Darlene Lloyd@gmail.","Walk-in","","09412261059","","1999-11-19","1999","11","19","2011-04-26","Apr","2011"); 
INSERT INTO client VALUES("35","Darryl","Baker","Owen","Female","Darryl Owen@gmail.co","Walk-in","","09595939557","","2000-07-11","2000","07","11","2010-01-09","Jan","2010"); 
INSERT INTO client VALUES("36","Darwin","John","Payne","Female","Darwin Payne@gmail.c","Walk-in","","09529824616","","1979-08-12","1979","08","12","2017-02-16","Feb","2017"); 
INSERT INTO client VALUES("37","David","Harris","Curtis","Female","David Curtis@gmail.c","Walk-in","","09449666107","","1996-07-11","1996","07","11","2010-12-12","Dec","2010"); 
INSERT INTO client VALUES("38","Dean","Roberts","Newton","Female","Dean Newton@gmail.co","Walk-in","","09935668380","","1986-07-21","1986","07","21","2014-05-08","May","2014"); 
INSERT INTO client VALUES("39","Deither","Campbell","Woods","Female","Deither Woods@gmail.","Walk-in","","09454096138","","1993-04-13","1993","04","13","2014-11-15","Nov","2014"); 
INSERT INTO client VALUES("40","Delila","James","Carr","Female","Delila Carr@gmail.co","Walk-in","","09516039339","","1982-03-22","1982","03","22","2016-05-24","May","2016"); 
INSERT INTO client VALUES("41","Demetria","Stewart","Duncan","Female","Demetria Duncan@gmai","Walk-in","","09634371167","","1978-09-11","1978","09","11","2015-10-20","Oct","2015"); 
INSERT INTO client VALUES("42","Denis, Dennis","Lee","French","Female","Denis, Dennis French","Walk-in","","09464812233","","1978-03-30","1978","03","30","2015-05-31","May","2015"); 
INSERT INTO client VALUES("43","Denise","County","Baldwin","Female","Denise Baldwin@gmail","Walk-in","","09734494051","","1990-02-13","1990","02","13","2006-08-14","Aug","2006"); 
INSERT INTO client VALUES("44","Pablo","Turner","Field","Female","Pablo Field@gmail.co","Walk-in","","09660653609","","1989-09-13","1989","09","13","2013-02-22","Feb","2013"); 
INSERT INTO client VALUES("45","Paco","Parker","Bishop","Female","Paco Bishop@gmail.co","Walk-in","","09418806282","","1998-11-16","1998","11","16","2009-09-05","Sep","2009"); 
INSERT INTO client VALUES("46","Palma","Cook","Pearson","Female","Palma Pearson@gmail.","Walk-in","","09921192741","","1993-10-12","1993","10","12","2010-05-26","May","2010"); 
INSERT INTO client VALUES("47","Palmer","Mc","Brien","Female","Palmer Brien@gmail.c","Walk-in","","09817084254","","1997-08-28","1997","08","28","2015-06-19","Jun","2015"); 
INSERT INTO client VALUES("48","Paloma","Edwards","Williamson","Female","Paloma Williamson@gm","Walk-in","","09684663643","","1981-07-16","1981","07","16","2005-12-09","Dec","2005"); 
INSERT INTO client VALUES("49","Pamela","Morris","Nichols","Female","Pamela Nichols@gmail","Walk-in","","09633278399","","1989-09-22","1989","09","22","2012-08-28","Aug","2012"); 
INSERT INTO client VALUES("50","Pancho","Mitchell","Wilkinson","Female","Pancho Wilkinson@gma","Walk-in","","09844105713","","2001-10-29","2001","10","29","2005-07-19","Jul","2005"); 
INSERT INTO client VALUES("83","Ivan","Maple","Buglosa","Male","ivanraybuglosa@gmail","Member","","09123132123","","1996-10-23","1996","10","23","2018-02-14","Feb","2018"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=122 DEFAULT CHARSET=latin1;

INSERT INTO clientassignment VALUES("110","68","45","2018-02-07","36","Feb","2018"); 
INSERT INTO clientassignment VALUES("111","69","45","2018-02-09","36","Feb","2018"); 
INSERT INTO clientassignment VALUES("112","70","45","2018-02-09","36","Feb","2018"); 
INSERT INTO clientassignment VALUES("114","69","50","2018-02-10","38","Feb","2018"); 
INSERT INTO clientassignment VALUES("115","68","51","2018-02-10","4","Feb","2018"); 



DROP TABLE coach;

CREATE TABLE `coach` (
  `COACH_ID` int(8) NOT NULL AUTO_INCREMENT,
  `Coach_LastName` text NOT NULL,
  `Coach_FirstName` text NOT NULL,
  `Coach_Gender` text NOT NULL,
  `Coach_ContactNumber` varchar(13) NOT NULL,
  `Coach_EmailAddress` varchar(50) NOT NULL,
  `Coach_Specialty` text NOT NULL,
  `Coach_Type` text NOT NULL,
  `userID` int(11) NOT NULL,
  PRIMARY KEY (`COACH_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

INSERT INTO coach VALUES("38","Ang","Minmin","Female","09993898752","minmin@gmail.com","Spinning Coach","Senior","1"); 
INSERT INTO coach VALUES("39","Uy","Jan Nicole","Female","0999876253","jannicole@gmail.com","Spinning Coach","Senior","2"); 
INSERT INTO coach VALUES("40","Arellano","Nelson","Male","09998276312","arellano@gmail.com","Boxing Coach","Senior","3"); 
INSERT INTO coach VALUES("41","Morales","Rey","Male","09992763123","rey@gmail.com","Boxing Coach","Junior","4"); 
INSERT INTO coach VALUES("42","Fernandez","Samryl","Male","0999281231","samryl@gmail.com","Fitness Coach","Junior","5"); 
INSERT INTO coach VALUES("43","Pilalpi","Michelle","Female","0999231231","michelle@gmail.com","Fitness Coach","Senior","6"); 
INSERT INTO coach VALUES("44","Benjamin","Angelo","Male","0999872631","angelo@gmail.com","Fitness Coach","Junior","7"); 
INSERT INTO coach VALUES("45","Magbanua","Henrel","Male","09992371232","Henrel@gmail.com","Fitness Coach","Senior","8"); 
INSERT INTO coach VALUES("46","Prado","Ivan","Male","09928327122","ivan@gmail.com","Fitness Coach","Junior","9"); 
INSERT INTO coach VALUES("47","Divinagracia","Jay","Male","0999281723","jay@gmail.com","Fitness Coach","Senior","10"); 
INSERT INTO coach VALUES("48","Larry","Bril","Male","09992731232","bril@gmail.com","Mad Dog Spinning","Senior","11"); 
INSERT INTO coach VALUES("49","Menosa","Keeward","Male","09993892761","keeward@gmail.com","Boxing Instructor","Senior","12"); 
INSERT INTO coach VALUES("50","Olis","Keiven","Male","099276351232","keiven@gmail.com","Fitness Coach","Junior","13"); 
INSERT INTO coach VALUES("51","Legislador","Hans","Male","09123131222","hans@gmail.com","fitness coach","Senior","107"); 



DROP TABLE equipment;

CREATE TABLE `equipment` (
  `E_Code` int(8) NOT NULL AUTO_INCREMENT,
  `E_Type` text NOT NULL,
  `E_Model` varchar(15) NOT NULL,
  PRIMARY KEY (`E_Code`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

INSERT INTO equipment VALUES("1","SQR001","SQUAT RACK"); 
INSERT INTO equipment VALUES("2","BB001","BARBELLS"); 
INSERT INTO equipment VALUES("3","BP001","BENCH PRESS"); 
INSERT INTO equipment VALUES("4","IBP001","INCLINE BENCH P"); 
INSERT INTO equipment VALUES("5","HSM001","HAMMER STRENGTH"); 
INSERT INTO equipment VALUES("6","CP001","CABLES AND PULL"); 
INSERT INTO equipment VALUES("7","DB001","DUMBBELLS"); 
INSERT INTO equipment VALUES("8","PB001","PULLUP BAR"); 
INSERT INTO equipment VALUES("9","LPD001","LAT PULLDOWN MA"); 
INSERT INTO equipment VALUES("10","LEM001","LEG EXTENSION M"); 
INSERT INTO equipment VALUES("11","LGM001","LEG CURL MACHIN"); 
INSERT INTO equipment VALUES("12","SQR002","SQUAT RACK"); 
INSERT INTO equipment VALUES("13","BB002","BARBELLS"); 
INSERT INTO equipment VALUES("14","BP002","BENCH PRESS"); 
INSERT INTO equipment VALUES("15","IBP002","INCLINE BENCH P"); 
INSERT INTO equipment VALUES("16","HSM002","HAMMER STRENGTH"); 
INSERT INTO equipment VALUES("17","CP002","CABLES AND PULL"); 
INSERT INTO equipment VALUES("18","DB002","DUMBBELLS"); 
INSERT INTO equipment VALUES("19","PB002","PULLUP BAR"); 
INSERT INTO equipment VALUES("20","LPD002","LAT PULLDOWN MA"); 
INSERT INTO equipment VALUES("21","LEM002","LEG EXTENSION M"); 
INSERT INTO equipment VALUES("22","LGM002","LEG CURL MACHIN"); 
INSERT INTO equipment VALUES("23","HEB001","HYPER EXTENSION"); 
INSERT INTO equipment VALUES("24","DP001","DIPPING BARS"); 
INSERT INTO equipment VALUES("25","SM001","SMITH MACHINE"); 
INSERT INTO equipment VALUES("26","PRB001","PREACHER BENCH"); 
INSERT INTO equipment VALUES("27","ABB001","ABDOMINAL BENCH"); 
INSERT INTO equipment VALUES("28","LPM001","LEG PRESS MACHI"); 
INSERT INTO equipment VALUES("29","HSQM001","HACK SQUAT MACH"); 
INSERT INTO equipment VALUES("30","CM001","CALF MACHINE"); 
INSERT INTO equipment VALUES("31","LAM001","LEG ADDUCTION M"); 
INSERT INTO equipment VALUES("32","KB001","KETTLEBELLS"); 
INSERT INTO equipment VALUES("33","WB001","WALL BALL"); 
INSERT INTO equipment VALUES("34","FR001","FOAM ROLLER"); 
INSERT INTO equipment VALUES("35","SB001","STABILITY BALL"); 
INSERT INTO equipment VALUES("36","HEB002","HYPER EXTENSION"); 
INSERT INTO equipment VALUES("37","DP002","DIPPING BARS"); 
INSERT INTO equipment VALUES("38","SM002","SMITH MACHINE"); 
INSERT INTO equipment VALUES("40","DUMBBELLS","du002"); 



DROP TABLE equipmentinventory;

CREATE TABLE `equipmentinventory` (
  `EI_Code` int(8) NOT NULL AUTO_INCREMENT,
  `E_Code` int(8) NOT NULL,
  `EI_Quantity` int(4) NOT NULL,
  `EI_DeliveryDate` date NOT NULL,
  `EI_DeliveryTime` time NOT NULL,
  `EI_Activity` text NOT NULL,
  `month` char(3) NOT NULL,
  `year` char(4) NOT NULL,
  PRIMARY KEY (`EI_Code`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

INSERT INTO equipmentinventory VALUES("1","1","13","2007-12-14","08:54:33","Restock","Dec","2017"); 
INSERT INTO equipmentinventory VALUES("2","2","10","2008-09-30","06:10:39","Restock","Sep","2008"); 
INSERT INTO equipmentinventory VALUES("3","3","9","2016-09-29","08:13:19","Restock","Sep","2016"); 
INSERT INTO equipmentinventory VALUES("4","4","13","2010-11-09","08:41:47","Restock","Nov","2010"); 
INSERT INTO equipmentinventory VALUES("5","5","13","2016-04-27","08:13:38","Restock","Apr","2016"); 
INSERT INTO equipmentinventory VALUES("6","6","14","2007-08-28","08:38:17","Restock","Aug","2007"); 
INSERT INTO equipmentinventory VALUES("7","7","12","2017-01-10","08:10:48","Restock","Jan","2017"); 
INSERT INTO equipmentinventory VALUES("8","8","10","2010-02-11","08:41:08","Restock","Feb","2010"); 
INSERT INTO equipmentinventory VALUES("9","9","14","2011-06-28","06:38:13","Restock","Jun","2011"); 
INSERT INTO equipmentinventory VALUES("10","10","12","2005-08-19","07:35:49","Restock","Aug","2005"); 
INSERT INTO equipmentinventory VALUES("11","11","8","2006-06-22","07:45:02","Restock","Jun","2006"); 
INSERT INTO equipmentinventory VALUES("12","12","14","2016-05-10","06:01:55","Restock","May","2016"); 
INSERT INTO equipmentinventory VALUES("13","13","6","2007-11-07","06:30:23","Restock","Nov","2007"); 
INSERT INTO equipmentinventory VALUES("14","14","11","2008-07-17","08:15:24","Restock","Jul","2008"); 
INSERT INTO equipmentinventory VALUES("15","15","7","2017-01-16","07:37:17","Restock","Jan","2017"); 
INSERT INTO equipmentinventory VALUES("16","16","7","2014-08-25","06:31:40","Restock","Aug","2014"); 
INSERT INTO equipmentinventory VALUES("17","17","7","2009-02-10","07:03:28","Restock","Feb","2009"); 
INSERT INTO equipmentinventory VALUES("18","18","10","2011-08-14","08:42:53","Restock","Aug","2011"); 
INSERT INTO equipmentinventory VALUES("19","19","6","2008-01-01","06:05:08","Restock","Jan","2008"); 
INSERT INTO equipmentinventory VALUES("20","20","5","2013-07-04","07:22:31","Restock","Jul","2013"); 
INSERT INTO equipmentinventory VALUES("21","21","14","2016-06-04","06:49:04","Restock","Jun","2016"); 
INSERT INTO equipmentinventory VALUES("22","22","10","2008-11-02","08:26:45","Restock","Nov","2008"); 
INSERT INTO equipmentinventory VALUES("23","23","5","2018-02-10","07:55:10","Restock","Feb","2018"); 
INSERT INTO equipmentinventory VALUES("24","24","8","2005-05-22","07:57:30","Restock","May","2005"); 
INSERT INTO equipmentinventory VALUES("25","25","15","2014-07-08","08:28:42","Restock","Jul","2014"); 
INSERT INTO equipmentinventory VALUES("26","26","12","2012-06-04","06:47:43","Restock","Jun","2012"); 
INSERT INTO equipmentinventory VALUES("27","27","8","2012-07-29","08:44:44","Restock","Jul","2012"); 
INSERT INTO equipmentinventory VALUES("28","28","9","2011-07-28","06:31:50","Restock","Jul","2011"); 
INSERT INTO equipmentinventory VALUES("29","29","15","2014-10-07","06:11:10","Restock","Oct","2014"); 
INSERT INTO equipmentinventory VALUES("30","30","6","2008-04-13","07:42:29","Restock","Apr","2008"); 
INSERT INTO equipmentinventory VALUES("31","31","14","2010-03-24","06:54:13","Restock","Mar","2010"); 
INSERT INTO equipmentinventory VALUES("32","32","10","2007-11-05","07:55:13","Restock","Nov","2007"); 
INSERT INTO equipmentinventory VALUES("33","33","8","2008-08-24","06:41:42","Restock","Aug","2008"); 
INSERT INTO equipmentinventory VALUES("34","34","7","2011-03-31","06:13:28","Restock","Mar","2011"); 
INSERT INTO equipmentinventory VALUES("35","35","5","2015-03-15","06:20:17","Restock","Mar","2015"); 
INSERT INTO equipmentinventory VALUES("36","36","8","2010-02-04","07:50:49","Restock","Feb","2010"); 
INSERT INTO equipmentinventory VALUES("37","37","14","2014-05-12","08:57:23","Restock","May","2014"); 
INSERT INTO equipmentinventory VALUES("38","38","8","2011-07-29","06:48:48","Restock","Jul","2011"); 
INSERT INTO equipmentinventory VALUES("39","39","12","2014-08-01","07:33:24","Restock","Aug","2014"); 
INSERT INTO equipmentinventory VALUES("40","40","8","2016-08-05","07:27:04","Restock","Aug","2016"); 
INSERT INTO equipmentinventory VALUES("41","10","7","2007-07-26","08:24:16","Restock","Jul","2007"); 
INSERT INTO equipmentinventory VALUES("42","9","11","2015-03-04","06:58:31","Restock","Mar","2015"); 
INSERT INTO equipmentinventory VALUES("43","24","8","2006-11-22","07:21:49","Restock","Nov","2006"); 
INSERT INTO equipmentinventory VALUES("44","32","15","2007-09-02","06:32:22","Restock","Sep","2007"); 
INSERT INTO equipmentinventory VALUES("45","3","7","2015-08-29","06:26:59","Restock","Aug","2015"); 
INSERT INTO equipmentinventory VALUES("46","34","10","2006-01-31","06:36:16","Restock","Jan","2006"); 
INSERT INTO equipmentinventory VALUES("47","24","14","2012-11-12","07:51:09","Restock","Nov","2012"); 
INSERT INTO equipmentinventory VALUES("48","3","5","2010-10-01","06:14:55","Restock","Oct","2010"); 
INSERT INTO equipmentinventory VALUES("49","27","6","2011-02-18","07:10:42","Restock","Feb","2011"); 
INSERT INTO equipmentinventory VALUES("50","39","9","2009-12-11","06:05:23","Restock","Dec","2009"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=208 DEFAULT CHARSET=latin1;

INSERT INTO measurements VALUES("69","40","150","4","1","1","15","4","2","3","2","5","3","4","2","3","2","5","2018-02-07","Initial","Class III Obesity","Feb","2018"); 
INSERT INTO measurements VALUES("70","40","50","3","2","1","2","2","3","2","1","3","2","3","2","5","4","3","2018-02-07","Final","Class III Obesity","Feb","2018"); 
INSERT INTO measurements VALUES("72","39","27","2","3","4","5","6","7","8","9","10","11","12","1","1","1","1","2018-02-07","Initial","Overweight","Feb","2018"); 
INSERT INTO measurements VALUES("73","39","60","5","5","5","5","5","5","5","5","5","5","5","5","5","5","5","2018-02-07","Final","Class III Obesity","Feb","2018"); 
INSERT INTO measurements VALUES("74","41","1","2","3","4","5","23","31","12","2","3","23","23","23","31","23","32","2018-02-09","Initial","Underweight","Feb","2018"); 
INSERT INTO measurements VALUES("75","42","1","2","3","4","5","5","5","5","5","5","5","5","55","5","5","5","2018-02-09","Initial","Underweight","Feb","2018"); 
INSERT INTO measurements VALUES("76","42","2","21","22","212","12","2","121","2","121","2","12","12","12","12","12","12","2018-02-09","Initial","Underweight","Feb","2018"); 
INSERT INTO measurements VALUES("77","43","1","2","2","2","2","2","2","2","2","2","2","2","2","2","2","2","2018-02-09","Initial","Underweight","Feb","2018"); 
INSERT INTO measurements VALUES("78","43","33","333","3","3","3","3","3","3","3","3","3","3","3","3","3","3","2018-02-09","Final","Class I Obesity","Feb","2018"); 
INSERT INTO measurements VALUES("79","90","1","1111110","1","1","1","1","1","1","1","11","12","1","1","1","1","1","2018-02-13","Initial","Underweight","Feb","2018"); 
INSERT INTO measurements VALUES("80","90","111","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","2018-02-13","Final","Class III Obesity","Feb","2018"); 
INSERT INTO measurements VALUES("81","88","120","12","15","32","12","15","32","32","32","11","22","33","21","22","31","31","2018-01-01","Initial","ClassIIIObesity","Jan","2018"); 
INSERT INTO measurements VALUES("82","88","65","17","18","30","22","20","20","20","31","12","29","31","22","31","41","41","2018-01-02","Final","Overweigh","Jan","2018"); 
INSERT INTO measurements VALUES("83","89","120","12","15","32","12","15","32","32","32","11","22","33","21","22","31","31","2018-01-03","Initial","ClassIIIObesity","Jan","2018"); 
INSERT INTO measurements VALUES("84","89","65","17","18","30","22","20","20","20","31","12","29","31","22","31","41","41","2018-01-04","Final","Overweigh","Jan","2018"); 
INSERT INTO measurements VALUES("85","90","120","12","15","32","12","15","32","32","32","11","22","33","21","22","31","31","2018-01-05","Initial","ClassIIIObesity","Jan","2018"); 
INSERT INTO measurements VALUES("86","90","65","17","18","30","22","20","20","20","31","12","29","31","22","31","41","41","2018-01-06","Final","Overweigh","Jan","2018"); 
INSERT INTO measurements VALUES("87","91","60","12","15","32","12","15","32","32","32","11","22","33","21","22","31","31","2018-01-07","Initial","ClassIIIObesity","Jan","2018"); 
INSERT INTO measurements VALUES("88","91","80","17","18","30","22","20","20","20","31","12","29","31","22","31","41","41","2018-01-08","Final","Overweigh","Jan","2018"); 
INSERT INTO measurements VALUES("89","92","60","12","15","32","12","15","32","32","32","11","22","33","21","22","31","31","2018-01-09","Initial","ClassIIIObesity","Jan","2018"); 
INSERT INTO measurements VALUES("90","92","80","17","18","30","22","20","20","20","31","12","29","31","22","31","41","41","2018-01-10","Final","Overweigh","Jan","2018"); 
INSERT INTO measurements VALUES("91","93","120","12","15","32","12","15","32","32","32","11","22","33","21","22","31","31","2018-01-11","Initial","ClassIIIObesity","Jan","2018"); 
INSERT INTO measurements VALUES("92","93","65","17","18","30","22","20","20","20","31","12","29","31","22","31","41","41","2018-01-12","Final","Overweigh","Jan","2018"); 
INSERT INTO measurements VALUES("93","94","60","12","15","32","12","15","32","32","32","11","22","33","21","22","31","31","2018-01-13","Initial","ClassIIIObesity","Jan","2018"); 
INSERT INTO measurements VALUES("94","94","80","17","18","30","22","20","20","20","31","12","29","31","22","31","41","41","2018-01-14","Final","Overweigh","Jan","2018"); 
INSERT INTO measurements VALUES("95","95","120","12","15","32","12","15","32","32","32","11","22","33","21","22","31","31","2018-01-15","Initial","ClassIIIObesity","Jan","2018"); 
INSERT INTO measurements VALUES("96","95","65","17","18","30","22","20","20","20","31","12","29","31","22","31","41","41","2018-01-16","Final","Overweigh","Jan","2018"); 
INSERT INTO measurements VALUES("97","96","120","12","15","32","12","15","32","32","32","11","22","33","21","22","31","31","2018-01-17","Initial","ClassIIIObesity","Jan","2018"); 
INSERT INTO measurements VALUES("98","96","100","17","18","30","22","20","20","20","31","12","29","31","22","31","41","41","2018-01-18","Final","Overweigh","Jan","2018"); 
INSERT INTO measurements VALUES("99","97","60","12","15","32","12","15","32","32","32","11","22","33","21","22","31","31","2018-01-19","Initial","ClassIIIObesity","Jan","2018"); 
INSERT INTO measurements VALUES("100","97","80","17","18","30","22","20","20","20","31","12","29","31","22","31","41","41","2018-01-20","Final","Overweigh","Jan","2018"); 
INSERT INTO measurements VALUES("101","98","50","12","15","32","12","15","32","32","32","11","22","33","21","22","31","31","2018-01-21","Initial","ClassIIIObesity","Jan","2018"); 
INSERT INTO measurements VALUES("102","98","80","17","18","30","22","20","20","20","31","12","29","31","22","31","41","41","2018-01-22","Final","Overweigh","Jan","2018"); 
INSERT INTO measurements VALUES("103","99","60","12","15","32","12","15","32","32","32","11","22","33","21","22","31","31","2018-01-23","Initial","ClassIIIObesity","Jan","2018"); 
INSERT INTO measurements VALUES("104","99","80","17","18","30","22","20","20","20","31","12","29","31","22","31","41","41","2018-01-24","Final","Overweigh","Jan","2018"); 
INSERT INTO measurements VALUES("105","100","120","12","15","32","12","15","32","32","32","11","22","33","21","22","31","31","2018-01-25","Initial","ClassIIIObesity","Jan","2018"); 
INSERT INTO measurements VALUES("106","100","65","17","18","30","22","20","20","20","31","12","29","31","22","31","41","41","2018-01-26","Final","Overweigh","Jan","2018"); 
INSERT INTO measurements VALUES("107","101","60","12","15","32","12","15","32","32","32","11","22","33","21","22","31","31","2018-01-27","Initial","ClassIIIObesity","Jan","2018"); 
INSERT INTO measurements VALUES("108","101","80","17","18","30","22","20","20","20","31","12","29","31","22","31","41","41","2018-01-28","Final","Overweigh","Jan","2018"); 
INSERT INTO measurements VALUES("109","102","120","12","15","32","12","15","32","32","32","11","22","33","21","22","31","31","2018-01-29","Initial","ClassIIIObesity","Jan","2018"); 
INSERT INTO measurements VALUES("110","102","65","17","18","30","22","20","20","20","31","12","29","31","22","31","41","41","2018-01-30","Final","Overweigh","Jan","2018"); 
INSERT INTO measurements VALUES("111","103","111","12","15","32","12","15","32","32","32","11","22","33","21","22","31","31","2018-01-31","Initial","ClassIIIObesity","Jan","2018"); 
INSERT INTO measurements VALUES("112","103","50","17","18","30","22","20","20","20","31","12","29","31","22","31","41","41","2018-02-01","Final","Overweigh","Feb","2018"); 
INSERT INTO measurements VALUES("113","104","80","12","15","32","12","15","32","32","32","11","22","33","21","22","31","31","2018-02-02","Initial","ClassIIIObesity","Feb","2018"); 
INSERT INTO measurements VALUES("114","104","60","17","18","30","22","20","20","20","31","12","29","31","22","31","41","41","2018-02-03","Final","Overweigh","Feb","2018"); 
INSERT INTO measurements VALUES("115","105","120","12","15","32","12","15","32","32","32","11","22","33","21","22","31","31","2018-02-04","Initial","ClassIIIObesity","Feb","2018"); 
INSERT INTO measurements VALUES("116","105","50","17","18","30","22","20","20","20","31","12","29","31","22","31","41","41","2018-02-05","Final","Overweigh","Feb","2018"); 
INSERT INTO measurements VALUES("117","106","120","12","15","32","12","15","32","32","32","11","22","33","21","22","31","31","2018-02-06","Initial","ClassIIIObesity","Feb","2018"); 
INSERT INTO measurements VALUES("118","106","65","17","18","30","22","20","20","20","31","12","29","31","22","31","41","41","2018-02-07","Final","Overweigh","Feb","2018"); 
INSERT INTO measurements VALUES("119","107","65","12","15","32","12","15","32","32","32","11","22","33","21","22","31","31","2018-02-08","Initial","ClassIIIObesity","Feb","2018"); 
INSERT INTO measurements VALUES("120","107","45","17","18","30","22","20","20","20","31","12","29","31","22","31","41","41","2018-02-09","Final","Overweigh","Feb","2018"); 
INSERT INTO measurements VALUES("121","108","120","12","15","32","12","15","32","32","32","11","22","33","21","22","31","31","2018-02-10","Initial","ClassIIIObesity","Feb","2018"); 
INSERT INTO measurements VALUES("122","108","65","17","18","30","22","20","20","20","31","12","29","31","22","31","41","41","2018-02-11","Final","Overweigh","Feb","2018"); 
INSERT INTO measurements VALUES("123","109","65","12","15","32","12","15","32","32","32","11","22","33","21","22","31","31","2018-02-12","Initial","Overweigh","Feb","2018"); 
INSERT INTO measurements VALUES("124","109","45","17","18","30","22","20","20","20","31","12","29","31","22","31","41","41","2018-02-13","Final","Overweigh","Feb","2018"); 
INSERT INTO measurements VALUES("125","110","65","12","15","32","12","15","32","32","32","11","22","33","21","22","31","31","2018-02-14","Initial","Overweigh","Feb","2018"); 
INSERT INTO measurements VALUES("126","110","45","17","18","30","22","20","20","20","31","12","29","31","22","31","41","41","2018-02-15","Final","Overweigh","Feb","2018"); 
INSERT INTO measurements VALUES("127","111","65","12","15","32","12","15","32","32","32","11","22","33","21","22","31","31","2018-02-16","Initial","ClassIIIObesity","Feb","2018"); 
INSERT INTO measurements VALUES("128","11","45","17","18","30","22","20","20","20","31","12","29","31","22","31","41","41","2018-02-17","Final","Overweigh","Feb","2018"); 
INSERT INTO measurements VALUES("129","112","55","12","15","32","12","15","32","32","32","11","22","33","21","22","31","31","2018-02-18","Initial","ClassIIIObesity","Feb","2018"); 
INSERT INTO measurements VALUES("130","112","45","17","18","30","22","20","20","20","31","12","29","31","22","31","41","41","2018-02-19","Final","Overweigh","Feb","2018"); 
INSERT INTO measurements VALUES("131","113","55","12","15","32","12","15","32","32","32","11","22","33","21","22","31","31","2018-02-20","Initial","ClassIIIObesity","Feb","2018"); 
INSERT INTO measurements VALUES("132","113","50","17","18","30","22","20","20","20","31","12","29","31","22","31","41","41","2018-02-21","Final","Overweigh","Feb","2018"); 
INSERT INTO measurements VALUES("133","114","80","12","15","32","12","15","32","32","32","11","22","33","21","22","31","31","2018-02-22","Initial","ClassIIIObesity","Feb","2018"); 
INSERT INTO measurements VALUES("134","114","50","17","18","30","22","20","20","20","31","12","29","31","22","31","41","41","2018-02-23","Final","Overweigh","Feb","2018"); 
INSERT INTO measurements VALUES("135","115","80","12","15","32","12","15","32","32","32","11","22","33","21","22","31","31","2018-02-24","Initial","ClassIIIObesity","Feb","2018"); 
INSERT INTO measurements VALUES("136","115","45","17","18","30","22","20","20","20","31","12","29","31","22","31","41","41","2018-02-25","Final","Overweigh","Feb","2018"); 
INSERT INTO measurements VALUES("137","116","55","12","15","32","12","15","32","32","32","11","22","33","21","22","31","31","2018-02-26","Initial","ClassIIIObesity","Feb","2018"); 
INSERT INTO measurements VALUES("138","116","65","17","18","30","22","20","20","20","31","12","29","31","22","31","41","41","2018-02-27","Final","Overweigh","Feb","2018"); 
INSERT INTO measurements VALUES("139","117","45","12","15","32","12","15","32","32","32","11","22","33","21","22","31","31","2018-02-28","Initial","ClassIIIObesity","Feb","2018"); 
INSERT INTO measurements VALUES("140","117","45","17","18","30","22","20","20","20","31","12","29","31","22","31","41","41","2018-03-01","Final","Overweigh","Mar","2018"); 
INSERT INTO measurements VALUES("141","118","55","12","15","32","12","15","32","32","32","11","22","33","21","22","31","31","2018-03-02","Initial","ClassIIIObesity","Mar","2018"); 
INSERT INTO measurements VALUES("142","118","65","17","18","30","22","20","20","20","31","12","29","31","22","31","41","41","2018-03-03","Final","Overweigh","Mar","2018"); 
INSERT INTO measurements VALUES("143","120","45","12","15","32","12","15","32","32","32","11","22","33","21","22","31","31","2018-03-04","Initial","ClassIIIObesity","Mar","2018"); 
INSERT INTO measurements VALUES("144","120","80","17","18","30","22","20","20","20","31","12","29","31","22","31","41","41","2018-03-05","Final","Overweigh","Mar","2018"); 
INSERT INTO measurements VALUES("145","121","45","12","15","32","12","15","32","32","32","11","22","33","21","22","31","31","2018-03-06","Initial","Overweigh","Mar","2018"); 
INSERT INTO measurements VALUES("146","121","55","17","18","30","22","20","20","20","31","12","29","31","22","31","41","41","2018-03-07","Final","Overweigh","Mar","2018"); 
INSERT INTO measurements VALUES("147","122","45","12","15","32","12","15","32","32","32","11","22","33","21","22","31","31","2018-03-08","Initial","ClassIIIObesity","Mar","2018"); 
INSERT INTO measurements VALUES("148","122","55","17","18","30","22","20","20","20","31","12","29","31","22","31","41","41","2018-03-09","Final","Overweigh","Mar","2018"); 
INSERT INTO measurements VALUES("149","123","65","12","15","32","12","15","32","32","32","11","22","33","21","22","31","31","2018-03-10","Initial","ClassIIIObesity","Mar","2018"); 
INSERT INTO measurements VALUES("150","123","45","17","18","30","22","20","20","20","31","12","29","31","22","31","41","41","2018-03-11","Final","Overweigh","Mar","2018"); 
INSERT INTO measurements VALUES("151","124","50","12","15","32","12","15","32","32","32","11","22","33","21","22","31","31","2018-03-12","Initial","ClassIIIObesity","Mar","2018"); 
INSERT INTO measurements VALUES("152","124","80","17","18","30","22","20","20","20","31","12","29","31","22","31","41","41","2018-03-13","Final","Overweigh","Mar","2018"); 
INSERT INTO measurements VALUES("153","125","45","12","15","32","12","15","32","32","32","11","22","33","21","22","31","31","2018-03-14","Initial","ClassIIIObesity","Mar","2018"); 
INSERT INTO measurements VALUES("154","125","55","17","18","30","22","20","20","20","31","12","29","31","22","31","41","41","2018-03-15","Final","Overweigh","Mar","2018"); 
INSERT INTO measurements VALUES("155","126","120","12","15","32","12","15","32","32","32","11","22","33","21","22","31","31","2018-03-16","Initial","ClassIIIObesity","Mar","2018"); 
INSERT INTO measurements VALUES("156","126","100","17","18","30","22","20","20","20","31","12","29","31","22","31","41","41","2018-03-17","Final","Overweigh","Mar","2018"); 
INSERT INTO measurements VALUES("157","127","50","12","15","32","12","15","32","32","32","11","22","33","21","22","31","31","2018-03-18","Initial","ClassIIIObesity","Mar","2018"); 
INSERT INTO measurements VALUES("158","127","80","17","18","30","22","20","20","20","31","12","29","31","22","31","41","41","2018-03-19","Final","ClassIIIObesity","Mar","2018"); 
INSERT INTO measurements VALUES("159","128","120","12","15","32","12","15","32","32","32","11","22","33","21","22","31","31","2018-03-20","Initial","Overweigh","Mar","2018"); 
INSERT INTO measurements VALUES("160","128","100","17","18","30","22","20","20","20","31","12","29","31","22","31","41","41","2018-03-21","Final","ClassIIIObesity","Mar","2018"); 
INSERT INTO measurements VALUES("161","129","120","12","15","32","12","15","32","32","32","11","22","33","21","22","31","31","2018-03-22","Initial","Overweigh","Mar","2018"); 
INSERT INTO measurements VALUES("162","129","100","17","18","30","22","20","20","20","31","12","29","31","22","31","41","41","2018-03-23","Final","ClassIIIObesity","Mar","2018"); 
INSERT INTO measurements VALUES("163","130","50","12","15","32","12","15","32","32","32","11","22","33","21","22","31","31","2018-03-24","Initial","Overweigh","Mar","2018"); 
INSERT INTO measurements VALUES("164","130","80","17","18","30","22","20","20","20","31","12","29","31","22","31","41","41","2018-03-25","Final","ClassIIIObesity","Mar","2018"); 
INSERT INTO measurements VALUES("165","131","120","12","15","32","12","15","32","32","32","11","22","33","21","22","31","31","2018-03-26","Initial","Overweigh","Mar","2018"); 
INSERT INTO measurements VALUES("166","131","100","17","18","30","22","20","20","20","31","12","29","31","22","31","41","41","2018-03-27","Final","ClassIIIObesity","Mar","2018"); 
INSERT INTO measurements VALUES("167","132","120","12","15","32","12","15","32","32","32","11","22","33","21","22","31","31","2018-03-28","Initial","Overweigh","Mar","2018"); 
INSERT INTO measurements VALUES("168","132","100","17","18","30","22","20","20","20","31","12","29","31","22","31","41","41","2018-03-29","Final","ClassIIIObesity","Mar","2018"); 
INSERT INTO measurements VALUES("169","133","120","12","15","32","12","15","32","32","32","11","22","33","21","22","31","31","2018-03-30","Initial","Overweigh","Mar","2018"); 
INSERT INTO measurements VALUES("170","133","100","17","18","30","22","20","20","20","31","12","29","31","22","31","41","41","2018-03-31","Final","ClassIIIObesity","Mar","2018"); 
INSERT INTO measurements VALUES("171","134","120","12","15","32","12","15","32","32","32","11","22","33","21","22","31","31","2018-04-01","Initial","Overweigh","Apr","2018"); 
INSERT INTO measurements VALUES("172","134","100","17","18","30","22","20","20","20","31","12","29","31","22","31","41","41","2018-04-02","Final","ClassIIIObesity","Apr","2018"); 
INSERT INTO measurements VALUES("173","135","120","12","15","32","12","15","32","32","32","11","22","33","21","22","31","31","2018-04-03","Initial","Overweigh","Apr","2018"); 
INSERT INTO measurements VALUES("174","135","100","17","18","30","22","20","20","20","31","12","29","31","22","31","41","41","2018-04-04","Final","ClassIIIObesity","Apr","2018"); 
INSERT INTO measurements VALUES("175","136","50","12","15","32","12","15","32","32","32","11","22","33","21","22","31","31","2018-04-05","Initial","Overweigh","Apr","2018"); 
INSERT INTO measurements VALUES("176","136","80","17","18","30","22","20","20","20","31","12","29","31","22","31","41","41","2018-04-06","Final","ClassIIIObesity","Apr","2018"); 
INSERT INTO measurements VALUES("177","137","120","12","15","32","12","15","32","32","32","11","22","33","21","22","31","31","2018-04-07","Initial","Overweigh","Apr","2018"); 
INSERT INTO measurements VALUES("178","137","100","17","18","30","22","20","20","20","31","12","29","31","22","31","41","41","2018-04-08","Final","ClassIIIObesity","Apr","2018"); 
INSERT INTO measurements VALUES("179","138","50","12","15","32","12","15","32","32","32","11","22","33","21","22","31","31","2018-04-09","Initial","Overweigh","Apr","2018"); 
INSERT INTO measurements VALUES("180","138","80","17","18","30","22","20","20","20","31","12","29","31","22","31","41","41","2018-04-10","Final","ClassIIIObesity","Apr","2018"); 
INSERT INTO measurements VALUES("181","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0000-00-00","","","","0"); 
INSERT INTO measurements VALUES("182","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0000-00-00","","","","0"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

INSERT INTO membershiptype VALUES("52","80","1","2018-02-11","2018-02-13","Active","Feb","2018"); 
INSERT INTO membershiptype VALUES("53","25","6","2018-02-12","2018-02-17","Active","Feb","2018"); 
INSERT INTO membershiptype VALUES("54","3","6","2018-02-12","2018-02-14","Active","Feb","2018"); 
INSERT INTO membershiptype VALUES("55","26","6","2018-02-14","2018-08-14","Active","Feb","2018"); 
INSERT INTO membershiptype VALUES("56","83","1","2018-02-14","2018-05-14","Active","Feb","2018"); 



DROP TABLE payment;

CREATE TABLE `payment` (
  `Pay_ID` int(8) NOT NULL AUTO_INCREMENT,
  `TR_ID` int(8) NOT NULL,
  `Pay_amount` float NOT NULL,
  `Pay_date` date NOT NULL,
  `Pay_time` time NOT NULL,
  `month` char(3) NOT NULL,
  `year` char(4) NOT NULL,
  PRIMARY KEY (`Pay_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

INSERT INTO payment VALUES("1","51","400","2017-03-15","08:45:35","Jan","2017"); 
INSERT INTO payment VALUES("2","52","400","2006-05-27","07:16:39","Feb","2006"); 
INSERT INTO payment VALUES("3","53","400","2008-08-24","06:51:53","Mar","2008"); 
INSERT INTO payment VALUES("4","54","400","2005-04-06","07:22:56","May","2005"); 
INSERT INTO payment VALUES("5","55","400","2014-03-16","06:17:09","Jun","2014"); 
INSERT INTO payment VALUES("6","56","400","2014-12-29","07:16:09","Jul","2014"); 
INSERT INTO payment VALUES("7","57","400","2007-09-07","06:44:07","Aug","2007"); 
INSERT INTO payment VALUES("8","58","400","2015-04-14","07:54:13","Sep","2015"); 
INSERT INTO payment VALUES("9","59","400","2005-08-17","06:59:09","Oct","2005"); 
INSERT INTO payment VALUES("10","60","400","2006-05-15","08:43:30","Nov","2006"); 
INSERT INTO payment VALUES("11","61","400","2007-05-28","08:59:17","Dec","2007"); 
INSERT INTO payment VALUES("12","62","400","2014-09-21","07:06:32","Jan","2014"); 
INSERT INTO payment VALUES("13","63","400","2010-03-31","06:28:35","Feb","2010"); 
INSERT INTO payment VALUES("14","64","400","2009-01-19","08:32:05","Mar","2009"); 
INSERT INTO payment VALUES("15","65","400","2008-03-20","06:08:46","May","2008"); 
INSERT INTO payment VALUES("16","66","400","2006-03-30","08:01:58","Jun","2006"); 
INSERT INTO payment VALUES("17","67","400","2010-04-09","06:25:13","Jul","2010"); 
INSERT INTO payment VALUES("18","68","400","2013-04-06","08:09:57","Aug","2013"); 
INSERT INTO payment VALUES("19","69","400","2015-09-12","08:45:10","Sep","2015"); 
INSERT INTO payment VALUES("20","70","400","2005-11-12","06:50:02","Oct","2005"); 
INSERT INTO payment VALUES("21","71","400","2012-02-20","07:07:32","Nov","2012"); 
INSERT INTO payment VALUES("22","72","400","2016-08-07","07:48:51","Dec","2016"); 
INSERT INTO payment VALUES("23","73","400","2011-05-09","08:34:20","Jan","2011"); 
INSERT INTO payment VALUES("24","74","400","2007-08-04","06:36:35","Feb","2007"); 
INSERT INTO payment VALUES("25","75","400","2006-04-16","08:43:11","Mar","2006"); 
INSERT INTO payment VALUES("26","76","400","2016-03-16","06:19:52","May","2016"); 
INSERT INTO payment VALUES("27","77","400","2010-03-17","07:45:26","Jun","2010"); 
INSERT INTO payment VALUES("28","78","400","2009-10-26","07:47:07","Jul","2009"); 
INSERT INTO payment VALUES("29","79","400","2008-02-16","07:10:36","Aug","2008"); 
INSERT INTO payment VALUES("30","80","400","2007-08-29","08:07:53","Sep","2007"); 
INSERT INTO payment VALUES("31","81","400","2013-06-17","06:41:07","Oct","2013"); 
INSERT INTO payment VALUES("32","82","400","2015-10-01","06:41:07","Nov","2015"); 
INSERT INTO payment VALUES("33","83","400","2011-07-16","07:05:18","Dec","2011"); 
INSERT INTO payment VALUES("34","84","400","2006-06-15","08:22:35","Jan","2006"); 
INSERT INTO payment VALUES("35","85","400","2007-09-27","08:27:57","Feb","2007"); 
INSERT INTO payment VALUES("36","86","400","2016-02-25","07:30:58","Mar","2016"); 
INSERT INTO payment VALUES("37","87","400","2013-11-25","06:23:21","May","2013"); 
INSERT INTO payment VALUES("38","88","400","2011-04-13","06:22:38","Jun","2011"); 
INSERT INTO payment VALUES("39","89","400","2017-04-11","07:58:04","Jul","2017"); 
INSERT INTO payment VALUES("40","90","400","2009-01-20","08:58:57","Aug","2009"); 
INSERT INTO payment VALUES("41","91","400","2010-04-29","06:17:34","Sep","2010"); 
INSERT INTO payment VALUES("42","92","400","2011-05-08","06:40:16","Oct","2011"); 
INSERT INTO payment VALUES("43","93","400","2015-10-26","08:38:29","Nov","2015"); 
INSERT INTO payment VALUES("44","94","400","2005-06-17","07:07:34","Dec","2005"); 
INSERT INTO payment VALUES("45","95","400","2016-10-27","08:51:42","Jan","2016"); 
INSERT INTO payment VALUES("46","96","400","2014-09-07","07:12:40","Feb","2014"); 
INSERT INTO payment VALUES("47","97","400","2009-09-26","06:23:11","Mar","2009"); 
INSERT INTO payment VALUES("48","98","400","2011-03-01","07:11:14","May","2011"); 
INSERT INTO payment VALUES("49","99","400","2011-10-12","06:45:48","Jun","2011"); 
INSERT INTO payment VALUES("50","100","400","2015-03-30","06:34:15","Jul","2015"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

INSERT INTO studioclass VALUES("6","Spinning","39","Spinning Room"); 
INSERT INTO studioclass VALUES("7","HIIT","5","Center"); 
INSERT INTO studioclass VALUES("8","Yoga","10","Studio"); 
INSERT INTO studioclass VALUES("9","F360","10","Studio"); 
INSERT INTO studioclass VALUES("10","TRX","10","Studio"); 
INSERT INTO studioclass VALUES("11","Dance Aero","10","Center"); 
INSERT INTO studioclass VALUES("12","Pound Fit","15","Center"); 
INSERT INTO studioclass VALUES("13","Pilates","12","Center"); 
INSERT INTO studioclass VALUES("14","Swimming","5","Pool"); 
INSERT INTO studioclass VALUES("15","Zumba","10","Center"); 



DROP TABLE studioclasssession;

CREATE TABLE `studioclasssession` (
  `SCS_Code` int(8) NOT NULL AUTO_INCREMENT,
  `SC_Code` int(8) NOT NULL,
  `COACH_ID` int(8) NOT NULL,
  `SCS_StartTime` time(6) NOT NULL,
  `SCS_EndTime` time(6) NOT NULL,
  `SCS_Date` date NOT NULL,
  `month` char(3) NOT NULL,
  `year` char(4) NOT NULL,
  PRIMARY KEY (`SCS_Code`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=latin1;

INSERT INTO studioclasssession VALUES("1","6","38","09:00:00.000000","10:00:00.000000","2014-06-11","Jun","2014"); 
INSERT INTO studioclasssession VALUES("2","7","39","10:00:00.000000","11:00:00.000000","2017-05-29","May","2017"); 
INSERT INTO studioclasssession VALUES("3","8","40","11:00:00.000000","12:00:00.000000","2011-05-26","May","2011"); 
INSERT INTO studioclasssession VALUES("4","9","41","12:00:00.000000","13:00:00.000000","2010-06-02","Jun","2010"); 
INSERT INTO studioclasssession VALUES("5","10","42","13:00:00.000000","14:00:00.000000","2013-05-18","May","2013"); 
INSERT INTO studioclasssession VALUES("6","11","43","14:00:00.000000","15:00:00.000000","2006-02-04","Feb","2006"); 
INSERT INTO studioclasssession VALUES("7","12","44","15:00:00.000000","16:00:00.000000","2015-08-12","Aug","2015"); 
INSERT INTO studioclasssession VALUES("8","13","45","16:00:00.000000","17:00:00.000000","2006-10-23","Oct","2006"); 
INSERT INTO studioclasssession VALUES("9","14","46","17:00:00.000000","18:00:00.000000","2006-02-18","Feb","2006"); 
INSERT INTO studioclasssession VALUES("10","15","47","09:00:00.000000","10:00:00.000000","2016-12-04","Dec","2016"); 
INSERT INTO studioclasssession VALUES("11","6","48","10:00:00.000000","11:00:00.000000","2012-08-16","Aug","2012"); 
INSERT INTO studioclasssession VALUES("12","7","49","11:00:00.000000","12:00:00.000000","2012-01-23","Jan","2012"); 
INSERT INTO studioclasssession VALUES("13","8","50","12:00:00.000000","13:00:00.000000","2014-08-15","Aug","2014"); 
INSERT INTO studioclasssession VALUES("14","9","51","13:00:00.000000","14:00:00.000000","2016-04-30","Apr","2016"); 
INSERT INTO studioclasssession VALUES("15","10","38","14:00:00.000000","15:00:00.000000","2015-12-22","Dec","2015"); 
INSERT INTO studioclasssession VALUES("16","11","39","15:00:00.000000","16:00:00.000000","2013-09-25","Sep","2013"); 
INSERT INTO studioclasssession VALUES("17","12","40","16:00:00.000000","17:00:00.000000","2005-03-15","Mar","2005"); 
INSERT INTO studioclasssession VALUES("18","13","41","17:00:00.000000","18:00:00.000000","2009-07-13","Jul","2009"); 
INSERT INTO studioclasssession VALUES("19","14","42","09:00:00.000000","10:00:00.000000","2015-09-26","Sep","2015"); 
INSERT INTO studioclasssession VALUES("20","15","43","10:00:00.000000","11:00:00.000000","2007-07-27","Jul","2007"); 
INSERT INTO studioclasssession VALUES("21","6","44","11:00:00.000000","12:00:00.000000","2006-11-22","Nov","2006"); 
INSERT INTO studioclasssession VALUES("22","7","45","12:00:00.000000","13:00:00.000000","2013-11-30","Nov","2013"); 
INSERT INTO studioclasssession VALUES("23","8","46","13:00:00.000000","14:00:00.000000","2006-12-29","Dec","2006"); 
INSERT INTO studioclasssession VALUES("24","9","47","14:00:00.000000","15:00:00.000000","2006-06-13","Jun","2006"); 
INSERT INTO studioclasssession VALUES("25","10","48","15:00:00.000000","16:00:00.000000","2012-06-12","Jun","2012"); 
INSERT INTO studioclasssession VALUES("26","11","49","16:00:00.000000","17:00:00.000000","2009-01-31","Jan","2009"); 
INSERT INTO studioclasssession VALUES("27","12","50","17:00:00.000000","18:00:00.000000","2006-12-07","Dec","2006"); 
INSERT INTO studioclasssession VALUES("28","13","51","09:00:00.000000","10:00:00.000000","2014-09-23","Sep","2014"); 
INSERT INTO studioclasssession VALUES("29","14","38","10:00:00.000000","11:00:00.000000","2008-06-22","Jun","2008"); 
INSERT INTO studioclasssession VALUES("30","15","39","11:00:00.000000","12:00:00.000000","2006-12-09","Dec","2006"); 
INSERT INTO studioclasssession VALUES("31","6","40","12:00:00.000000","13:00:00.000000","2017-01-04","Jan","2017"); 
INSERT INTO studioclasssession VALUES("32","7","41","13:00:00.000000","14:00:00.000000","2005-12-14","Dec","2005"); 
INSERT INTO studioclasssession VALUES("33","8","42","14:00:00.000000","15:00:00.000000","2010-10-28","Oct","2010"); 
INSERT INTO studioclasssession VALUES("34","9","43","15:00:00.000000","16:00:00.000000","2008-09-13","Sep","2008"); 
INSERT INTO studioclasssession VALUES("35","10","44","16:00:00.000000","17:00:00.000000","2011-02-18","Feb","2011"); 
INSERT INTO studioclasssession VALUES("36","11","45","17:00:00.000000","18:00:00.000000","2012-11-23","Nov","2012"); 
INSERT INTO studioclasssession VALUES("37","12","46","09:00:00.000000","10:00:00.000000","2011-01-24","Jan","2011"); 
INSERT INTO studioclasssession VALUES("38","13","47","10:00:00.000000","11:00:00.000000","2007-03-30","Mar","2007"); 
INSERT INTO studioclasssession VALUES("39","14","48","11:00:00.000000","12:00:00.000000","2005-07-03","Jul","2005"); 
INSERT INTO studioclasssession VALUES("40","15","49","12:00:00.000000","13:00:00.000000","2009-02-25","Feb","2009"); 
INSERT INTO studioclasssession VALUES("41","6","50","13:00:00.000000","14:00:00.000000","2012-03-21","Mar","2012"); 
INSERT INTO studioclasssession VALUES("42","7","51","14:00:00.000000","15:00:00.000000","2009-04-15","Apr","2009"); 
INSERT INTO studioclasssession VALUES("43","8","38","15:00:00.000000","16:00:00.000000","2005-12-05","Dec","2005"); 
INSERT INTO studioclasssession VALUES("44","9","39","16:00:00.000000","17:00:00.000000","2014-06-13","Jun","2014"); 
INSERT INTO studioclasssession VALUES("45","10","40","17:00:00.000000","18:00:00.000000","2012-10-29","Oct","2012"); 
INSERT INTO studioclasssession VALUES("46","11","41","09:00:00.000000","10:00:00.000000","2014-11-14","Nov","2014"); 
INSERT INTO studioclasssession VALUES("47","12","42","10:00:00.000000","11:00:00.000000","2014-09-19","Sep","2014"); 
INSERT INTO studioclasssession VALUES("48","13","43","11:00:00.000000","12:00:00.000000","2016-04-20","Apr","2016"); 
INSERT INTO studioclasssession VALUES("49","14","44","12:00:00.000000","13:00:00.000000","2015-09-26","Sep","2015"); 
INSERT INTO studioclasssession VALUES("50","15","45","13:00:00.000000","14:00:00.000000","2011-12-03","Dec","2011"); 
INSERT INTO studioclasssession VALUES("51","6","46","14:00:00.000000","15:00:00.000000","2012-11-17","Nov","2012"); 
INSERT INTO studioclasssession VALUES("52","7","47","15:00:00.000000","16:00:00.000000","2017-08-31","Aug","2017"); 
INSERT INTO studioclasssession VALUES("53","8","48","16:00:00.000000","17:00:00.000000","2005-10-24","Oct","2005"); 
INSERT INTO studioclasssession VALUES("54","9","49","17:00:00.000000","18:00:00.000000","2009-07-07","Jul","2009"); 
INSERT INTO studioclasssession VALUES("55","10","50","09:00:00.000000","10:00:00.000000","2012-06-29","Jun","2012"); 
INSERT INTO studioclasssession VALUES("56","11","51","10:00:00.000000","11:00:00.000000","2008-08-26","Aug","2008"); 
INSERT INTO studioclasssession VALUES("57","12","38","11:00:00.000000","12:00:00.000000","2009-07-07","Jul","2009"); 
INSERT INTO studioclasssession VALUES("58","13","39","12:00:00.000000","13:00:00.000000","2016-01-05","Jan","2016"); 
INSERT INTO studioclasssession VALUES("59","14","40","13:00:00.000000","14:00:00.000000","2008-02-14","Feb","2008"); 
INSERT INTO studioclasssession VALUES("60","15","41","14:00:00.000000","15:00:00.000000","2015-11-25","Nov","2015"); 
INSERT INTO studioclasssession VALUES("61","6","42","15:00:00.000000","16:00:00.000000","2014-05-25","May","2014"); 
INSERT INTO studioclasssession VALUES("62","7","43","16:00:00.000000","17:00:00.000000","2008-03-27","Mar","2008"); 
INSERT INTO studioclasssession VALUES("63","8","44","17:00:00.000000","18:00:00.000000","2008-12-30","Dec","2008"); 
INSERT INTO studioclasssession VALUES("64","9","45","09:00:00.000000","10:00:00.000000","2017-11-04","Nov","2017"); 
INSERT INTO studioclasssession VALUES("65","10","46","10:00:00.000000","11:00:00.000000","2011-06-28","Jun","2011"); 
INSERT INTO studioclasssession VALUES("66","11","47","11:00:00.000000","12:00:00.000000","2016-08-02","Aug","2016"); 
INSERT INTO studioclasssession VALUES("67","12","48","12:00:00.000000","13:00:00.000000","2006-07-13","Jul","2006"); 
INSERT INTO studioclasssession VALUES("68","13","49","13:00:00.000000","14:00:00.000000","2017-10-05","Oct","2017"); 
INSERT INTO studioclasssession VALUES("69","14","50","14:00:00.000000","15:00:00.000000","2012-09-20","Sep","2012"); 
INSERT INTO studioclasssession VALUES("70","15","51","15:00:00.000000","16:00:00.000000","2016-04-08","Apr","2016"); 
INSERT INTO studioclasssession VALUES("71","6","38","16:00:00.000000","17:00:00.000000","2013-07-21","Jul","2013"); 
INSERT INTO studioclasssession VALUES("72","7","39","17:00:00.000000","18:00:00.000000","2009-08-23","Aug","2009"); 
INSERT INTO studioclasssession VALUES("73","8","40","09:00:00.000000","10:00:00.000000","2017-06-12","Jun","2017"); 
INSERT INTO studioclasssession VALUES("74","9","41","10:00:00.000000","11:00:00.000000","2013-03-10","Mar","2013"); 
INSERT INTO studioclasssession VALUES("75","10","42","11:00:00.000000","12:00:00.000000","2016-06-04","Jun","2016"); 
INSERT INTO studioclasssession VALUES("76","11","43","12:00:00.000000","13:00:00.000000","2008-09-12","Sep","2008"); 
INSERT INTO studioclasssession VALUES("77","12","44","13:00:00.000000","14:00:00.000000","2010-10-30","Oct","2010"); 
INSERT INTO studioclasssession VALUES("78","13","45","14:00:00.000000","15:00:00.000000","2008-10-22","Oct","2008"); 
INSERT INTO studioclasssession VALUES("79","14","46","15:00:00.000000","16:00:00.000000","2009-03-17","Mar","2009"); 
INSERT INTO studioclasssession VALUES("80","15","47","16:00:00.000000","17:00:00.000000","2007-06-07","Jun","2007"); 
INSERT INTO studioclasssession VALUES("81","0","0","00:00:00.000000","00:00:00.000000","0000-00-00","",""); 



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
) ENGINE=InnoDB AUTO_INCREMENT=141 DEFAULT CHARSET=latin1;

INSERT INTO towelinventory VALUES("1","2017-07-09","09:00:00","100","0","2200","0","0","Supply","Jul","2017"); 
INSERT INTO towelinventory VALUES("2","2017-02-25","10:00:00","100","0","2200","0","0","Supply","Feb","2017"); 
INSERT INTO towelinventory VALUES("3","2017-09-19","11:00:00","100","0","2200","0","0","Supply","Sep","2017"); 
INSERT INTO towelinventory VALUES("4","2017-04-07","12:00:00","100","0","2200","0","0","Supply","Apr","2017"); 
INSERT INTO towelinventory VALUES("5","2017-04-06","13:00:00","100","0","2200","0","0","Supply","Apr","2017"); 
INSERT INTO towelinventory VALUES("6","2017-03-24","14:00:00","100","0","2200","0","0","Supply","Mar","2017"); 
INSERT INTO towelinventory VALUES("7","2017-09-24","15:00:00","100","0","2200","0","0","Supply","Sep","2017"); 
INSERT INTO towelinventory VALUES("8","2017-11-30","16:00:00","100","0","2200","0","0","Supply","Nov","2017"); 
INSERT INTO towelinventory VALUES("9","2017-11-30","17:00:00","100","0","2200","0","0","Supply","Nov","2017"); 
INSERT INTO towelinventory VALUES("10","2017-03-23","18:00:00","100","0","2200","0","0","Supply","Mar","2017"); 
INSERT INTO towelinventory VALUES("11","2017-09-01","19:00:00","100","0","2200","0","0","Supply","Sep","2017"); 
INSERT INTO towelinventory VALUES("12","2017-02-24","20:00:00","100","0","2200","0","0","Supply","Feb","2017"); 
INSERT INTO towelinventory VALUES("13","2017-09-28","09:00:00","100","0","2200","0","0","Supply","Sep","2017"); 
INSERT INTO towelinventory VALUES("14","2017-11-15","10:00:00","100","0","2200","0","0","Supply","Nov","2017"); 
INSERT INTO towelinventory VALUES("15","2017-12-03","11:00:00","100","0","2200","0","0","Supply","Dec","2017"); 
INSERT INTO towelinventory VALUES("16","2017-07-11","12:00:00","0","100","2200","0","0","Laundry","Jul","2017"); 
INSERT INTO towelinventory VALUES("17","2017-05-23","13:00:00","0","100","2200","0","0","Laundry","May","2017"); 
INSERT INTO towelinventory VALUES("18","2017-12-10","14:00:00","0","100","2200","0","0","Laundry","Dec","2017"); 
INSERT INTO towelinventory VALUES("19","2017-07-14","15:00:00","0","100","2200","0","0","Laundry","Jul","2017"); 
INSERT INTO towelinventory VALUES("20","2017-12-12","16:00:00","0","100","2200","0","0","Laundry","Dec","2017"); 
INSERT INTO towelinventory VALUES("21","2017-07-14","17:00:00","0","100","2200","0","0","Laundry","Jul","2017"); 
INSERT INTO towelinventory VALUES("22","2017-02-20","18:00:00","0","100","2200","0","0","Laundry","Feb","2017"); 
INSERT INTO towelinventory VALUES("23","2017-11-25","19:00:00","100","0","2200","0","0","Supply","Nov","2017"); 
INSERT INTO towelinventory VALUES("24","2018-01-25","20:00:00","100","0","2200","0","0","Supply","Jan","2018"); 
INSERT INTO towelinventory VALUES("25","2017-12-24","09:00:00","100","0","2200","0","0","Supply","Dec","2017"); 
INSERT INTO towelinventory VALUES("26","2017-09-18","10:00:00","100","0","2200","0","0","Supply","Sep","2017"); 
INSERT INTO towelinventory VALUES("27","2018-01-19","11:00:00","100","0","2200","0","0","Supply","Jan","2018"); 
INSERT INTO towelinventory VALUES("28","2017-05-15","12:00:00","100","0","2200","0","0","Supply","May","2017"); 
INSERT INTO towelinventory VALUES("29","2017-07-24","13:00:00","100","0","2200","0","0","Supply","Jul","2017"); 
INSERT INTO towelinventory VALUES("30","2017-10-16","14:00:00","100","0","2200","0","0","Supply","Oct","2017"); 
INSERT INTO towelinventory VALUES("31","2017-02-19","15:00:00","100","0","2200","0","0","Supply","Feb","2017"); 
INSERT INTO towelinventory VALUES("32","2018-01-13","16:00:00","100","0","2200","0","0","Supply","Jan","2018"); 
INSERT INTO towelinventory VALUES("33","2017-03-25","17:00:00","0","100","2200","0","0","Laundry","Mar","2017"); 
INSERT INTO towelinventory VALUES("34","2017-11-01","18:00:00","0","100","2200","0","0","Laundry","Nov","2017"); 
INSERT INTO towelinventory VALUES("35","2017-05-21","19:00:00","0","100","2200","0","0","Laundry","May","2017"); 
INSERT INTO towelinventory VALUES("36","2017-09-24","20:00:00","0","100","2200","0","0","Laundry","Sep","2017"); 
INSERT INTO towelinventory VALUES("37","2017-08-28","09:00:00","0","100","2200","0","0","Laundry","Aug","2017"); 
INSERT INTO towelinventory VALUES("38","2017-02-16","10:00:00","0","100","2200","0","0","Laundry","Feb","2017"); 
INSERT INTO towelinventory VALUES("39","2017-02-18","11:00:00","0","100","2200","0","0","Laundry","Feb","2017"); 
INSERT INTO towelinventory VALUES("40","2017-08-15","12:00:00","100","0","2200","0","0","Supply","Aug","2017"); 
INSERT INTO towelinventory VALUES("41","2017-03-16","13:00:00","100","0","2200","0","0","Supply","Mar","2017"); 
INSERT INTO towelinventory VALUES("42","2017-04-02","14:00:00","100","0","2200","0","0","Supply","Apr","2017"); 
INSERT INTO towelinventory VALUES("43","2017-11-06","15:00:00","100","0","2200","0","0","Supply","Nov","2017"); 
INSERT INTO towelinventory VALUES("44","2017-03-23","16:00:00","100","0","2200","0","0","Supply","Mar","2017"); 
INSERT INTO towelinventory VALUES("45","2017-07-23","17:00:00","100","0","2200","0","0","Supply","Jul","2017"); 
INSERT INTO towelinventory VALUES("46","2017-07-25","18:00:00","100","0","2200","0","0","Supply","Jul","2017"); 
INSERT INTO towelinventory VALUES("47","2017-08-22","19:00:00","100","0","2200","0","0","Supply","Aug","2017"); 
INSERT INTO towelinventory VALUES("48","2017-10-18","20:00:00","100","0","2200","0","0","Supply","Oct","2017"); 
INSERT INTO towelinventory VALUES("49","2017-10-08","09:00:00","100","0","2200","0","0","Supply","Oct","2017"); 
INSERT INTO towelinventory VALUES("50","2017-06-30","10:00:00","100","0","2200","0","0","Supply","Jun","2017"); 
INSERT INTO towelinventory VALUES("140","2018-02-14","09:20:00","100","","2300","0","0","Supply","Feb","2018"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=223 DEFAULT CHARSET=latin1;

INSERT INTO traininglog VALUES("88","23","69","10","2018-02-18","2018-02-11","Feb","2018","","","On-Going"); 
INSERT INTO traininglog VALUES("89","23","72","10","2018-02-18","2018-02-11","Feb","2018","","","On-Going"); 
INSERT INTO traininglog VALUES("90","23","16","10","2018-02-19","2018-02-12","Feb","2018","Osteoporosis,Seizure,Anemia,","Beginner","On-Going"); 
INSERT INTO traininglog VALUES("91","23","1","10","2018-02-19","2018-02-12","Feb","2018","","","On-Going"); 
INSERT INTO traininglog VALUES("92","23","19","10","2018-02-20","2018-02-13","Feb","2018","","","On-Going"); 
INSERT INTO traininglog VALUES("93","23","8","10","2018-02-20","2018-02-13","Feb","2018","","","Completed"); 
INSERT INTO traininglog VALUES("94","23","20","10","2018-02-20","2018-02-13","Feb","2018","","","Completed"); 
INSERT INTO traininglog VALUES("95","38","50","10","2018-02-21","2018-02-14","Feb","2018","","","On-Going"); 
INSERT INTO traininglog VALUES("96","38","1","10","2017-02-01","2017-01-01","Jan","2017","Osteoporosis","Beginner","Completed"); 
INSERT INTO traininglog VALUES("97","39","2","11","2017-03-02","2017-01-02","Jan","2017","Osteoporosis","Beginner","Completed"); 
INSERT INTO traininglog VALUES("98","40","3","12","2017-04-03","2017-01-03","Jan","2017","","Intermediate","Completed"); 
INSERT INTO traininglog VALUES("99","41","4","13","2017-08-04","2017-01-04","Jan","2017","","Intermediate","Completed"); 
INSERT INTO traininglog VALUES("100","42","5","14","2017-05-05","2017-01-05","Jan","2017","","Intermediate","Completed"); 
INSERT INTO traininglog VALUES("101","43","6","15","2017-05-05","2017-01-06","Jan","2017","","Advance","Completed"); 
INSERT INTO traininglog VALUES("102","44","7","16","2017-12-07","2017-01-07","Jan","2017","","Advance","Completed"); 
INSERT INTO traininglog VALUES("103","45","8","17","2017-11-08","2017-01-08","Jan","2017","Anemia","Beginner","Completed"); 
INSERT INTO traininglog VALUES("104","46","9","10","2017-03-09","2017-01-09","Jan","2017","Anemia","Beginner","Completed"); 
INSERT INTO traininglog VALUES("105","47","10","11","2017-03-10","2017-01-10","Jan","2017","Anemia","Beginner","Completed"); 
INSERT INTO traininglog VALUES("106","48","11","12","2017-08-20","2017-02-20","Feb","2017","Anemia","Beginner","Completed"); 
INSERT INTO traininglog VALUES("107","49","12","13","2017-07-21","2017-02-21","Feb","2017","","Intermediate","Completed"); 
INSERT INTO traininglog VALUES("108","50","13","14","2017-06-22","2017-02-22","Feb","2017","","Advance","Completed"); 
INSERT INTO traininglog VALUES("109","38","14","15","2018-02-23","2017-02-23","Feb","2017","","Intermediate","On-Going"); 
INSERT INTO traininglog VALUES("110","39","15","16","2018-02-24","2017-02-24","Feb","2017","","Advance","On-Going"); 
INSERT INTO traininglog VALUES("111","40","16","17","2018-02-25","2017-02-25","Feb","2017","","Intermediate","On-Going"); 
INSERT INTO traininglog VALUES("112","41","17","10","2018-02-26","2017-02-26","Feb","2017","","Advance","On-Going"); 
INSERT INTO traininglog VALUES("113","42","18","11","2018-02-27","2017-02-27","Feb","2017","","Intermediate","On-Going"); 
INSERT INTO traininglog VALUES("114","43","19","12","2018-02-28","2017-02-28","Feb","2017","","Advance","On-Going"); 
INSERT INTO traininglog VALUES("115","44","20","13","2018-03-01","2017-03-01","Mar","2017","","Intermediate","On-Going"); 
INSERT INTO traininglog VALUES("116","45","21","14","2018-03-02","2017-03-02","Mar","2017","Seizure","Beginner","On-Going"); 
INSERT INTO traininglog VALUES("117","46","22","15","2018-03-03","2017-03-03","Mar","2017","Seizure","Beginner","On-Going"); 
INSERT INTO traininglog VALUES("118","47","23","16","2018-03-04","2017-03-04","Mar","2017","Seizure","Beginner","On-Going"); 
INSERT INTO traininglog VALUES("119","48","24","17","2018-03-05","2017-03-05","Mar","2017","Seizure","Beginner","On-Going"); 
INSERT INTO traininglog VALUES("120","49","25","10","2018-03-06","2017-03-06","Mar","2017","Seizure","Beginner","On-Going"); 
INSERT INTO traininglog VALUES("121","50","26","11","2018-03-07","2017-03-07","Mar","2017","Seizure","Beginner","On-Going"); 
INSERT INTO traininglog VALUES("122","38","27","12","2018-03-08","2017-03-08","Mar","2017","","Advance","On-Going"); 
INSERT INTO traininglog VALUES("123","39","28","13","2018-03-09","2017-03-09","Mar","2017","","Intermediate","On-Going"); 
INSERT INTO traininglog VALUES("124","40","29","14","2018-03-10","2017-03-10","Mar","2017","","Advance","On-Going"); 
INSERT INTO traininglog VALUES("125","41","30","15","2018-03-11","2017-03-11","Mar","2017","","Intermediate","On-Going"); 
INSERT INTO traininglog VALUES("126","42","31","16","2018-03-12","2017-03-12","Mar","2017","Anemia","Beginner","On-Going"); 
INSERT INTO traininglog VALUES("127","43","32","17","2018-03-13","2017-04-12","Apr","2017","Osteoporosis","Beginner","On-Going"); 
INSERT INTO traininglog VALUES("128","44","33","10","2018-03-14","2017-04-13","Apr","2017","","Intermediate","On-Going"); 
INSERT INTO traininglog VALUES("129","45","34","11","2018-03-15","2017-04-14","Apr","2017","","Advance","On-Going"); 
INSERT INTO traininglog VALUES("130","46","35","12","2018-03-16","2017-04-15","Apr","2017","","Advance","On-Going"); 
INSERT INTO traininglog VALUES("131","47","36","13","2018-03-17","2017-04-16","Apr","2017","","Advance","On-Going"); 
INSERT INTO traininglog VALUES("132","48","37","14","2017-12-01","2017-04-17","Apr","2017","Seizure","Beginner","Completed"); 
INSERT INTO traininglog VALUES("133","49","38","15","2017-12-02","2017-04-18","Apr","2017","","Intermediate","Completed"); 
INSERT INTO traininglog VALUES("134","50","39","16","2017-12-03","2017-04-19","Apr","2017","","Intermediate","Completed"); 
INSERT INTO traininglog VALUES("135","38","40","17","2017-12-04","2017-04-20","Apr","2017","","Intermediate","Completed"); 
INSERT INTO traininglog VALUES("136","39","41","10","2017-12-05","2017-04-21","Apr","2017","","Intermediate","Completed"); 
INSERT INTO traininglog VALUES("137","40","42","11","2017-12-06","2017-05-21","May","2017","","Intermediate","Completed"); 
INSERT INTO traininglog VALUES("138","41","43","12","2017-12-07","2017-05-22","May","2017","","Intermediate","Completed"); 
INSERT INTO traininglog VALUES("139","42","44","13","2017-12-08","2017-05-23","May","2017","Seizure","Beginner","Completed"); 
INSERT INTO traininglog VALUES("140","43","45","14","2017-12-09","2017-05-24","May","2017","","Intermediate","Completed"); 
INSERT INTO traininglog VALUES("141","44","46","15","2017-12-10","2017-05-25","May","2017","","Intermediate","Completed"); 
INSERT INTO traininglog VALUES("142","45","47","16","2017-12-11","2017-05-26","May","2017","","Intermediate","Completed"); 
INSERT INTO traininglog VALUES("143","46","48","17","2017-12-12","2017-06-26","Jun","2017","","Intermediate","Completed"); 
INSERT INTO traininglog VALUES("144","47","49","10","2017-12-13","2017-06-27","Jun","2017","","Intermediate","Completed"); 
INSERT INTO traininglog VALUES("145","48","50","11","2017-12-14","2017-06-28","Jun","2017","Seizure","Beginner","Completed"); 
INSERT INTO traininglog VALUES("146","49","1","12","2017-12-15","2017-06-29","Jun","2017","","Intermediate","Completed"); 
INSERT INTO traininglog VALUES("147","50","2","13","2017-12-16","2017-06-30","Jun","2017","","Intermediate","Completed"); 
INSERT INTO traininglog VALUES("148","38","3","14","2017-12-17","2017-07-01","Jul","2017","","Intermediate","Completed"); 
INSERT INTO traininglog VALUES("149","39","4","15","2017-12-18","2017-07-02","Jul","2017","Seizure","Beginner","Completed"); 
INSERT INTO traininglog VALUES("150","40","5","16","2017-12-19","2017-07-03","Jul","2017","","Intermediate","Completed"); 
INSERT INTO traininglog VALUES("151","41","6","17","2017-12-20","2017-07-04","Jul","2017","","Intermediate","Completed"); 
INSERT INTO traininglog VALUES("152","42","7","15","2017-12-21","2017-07-05","Jul","2017","","Intermediate","Completed"); 
INSERT INTO traininglog VALUES("153","43","8","16","2017-12-22","2017-08-05","Aug","2017","","Intermediate","Completed"); 
INSERT INTO traininglog VALUES("154","44","9","17","2017-12-23","2017-08-06","Aug","2017","Seizure","Beginner","Completed"); 
INSERT INTO traininglog VALUES("155","45","10","10","2017-12-24","2017-08-07","Aug","2017","","Intermediate","Completed"); 
INSERT INTO traininglog VALUES("156","46","11","11","2017-12-25","2017-08-08","Aug","2017","","Intermediate","Completed"); 
INSERT INTO traininglog VALUES("157","47","12","12","2017-12-26","2017-08-09","Aug","2017","Seizure","Beginner","Completed"); 
INSERT INTO traininglog VALUES("158","48","13","13","2017-12-27","2017-08-10","Aug","2017","","Intermediate","Completed"); 
INSERT INTO traininglog VALUES("159","49","14","14","2017-12-28","2017-08-11","Aug","2017","","Intermediate","Completed"); 
INSERT INTO traininglog VALUES("160","50","15","15","2017-12-29","2017-08-12","Aug","2017","","Intermediate","Completed"); 
INSERT INTO traininglog VALUES("161","38","16","16","2017-12-30","2017-08-13","Aug","2017","","Intermediate","Completed"); 
INSERT INTO traininglog VALUES("162","39","17","17","2017-12-31","2017-09-13","Sep","2017","Seizure","Beginner","Completed"); 
INSERT INTO traininglog VALUES("163","40","18","10","2018-01-01","2017-09-14","Sep","2017","","Intermediate","Completed"); 
INSERT INTO traininglog VALUES("164","41","19","11","2018-01-02","2017-09-15","Sep","2017","","Intermediate","Completed"); 
INSERT INTO traininglog VALUES("165","42","20","12","2018-01-03","2017-09-16","Sep","2017","","Intermediate","Completed"); 
INSERT INTO traininglog VALUES("166","43","21","13","2018-01-04","2017-09-17","Sep","2017","","Intermediate","Completed"); 
INSERT INTO traininglog VALUES("167","44","22","14","2018-01-05","2017-09-18","Sep","2017","","Intermediate","Completed"); 
INSERT INTO traininglog VALUES("168","45","23","15","2018-01-06","2017-09-19","Sep","2017","Seizure","Beginner","Completed"); 
INSERT INTO traininglog VALUES("169","46","24","16","2018-01-07","2017-09-20","Sep","2017","","Intermediate","Completed"); 
INSERT INTO traininglog VALUES("170","47","25","17","2018-01-08","2017-09-21","Sep","2017","Seizure","Beginner","Completed"); 
INSERT INTO traininglog VALUES("171","48","26","10","2018-01-09","2017-09-22","Sep","2017","","Intermediate","Completed"); 
INSERT INTO traininglog VALUES("172","49","27","11","2018-01-10","2017-09-22","Sep","2017","","Intermediate","Completed"); 
INSERT INTO traininglog VALUES("173","50","28","12","2018-01-11","2017-10-22","Oct","2017","","Intermediate","Completed"); 
INSERT INTO traininglog VALUES("174","38","29","13","2018-01-12","2017-10-23","Oct","2017","","Intermediate","Completed"); 
INSERT INTO traininglog VALUES("175","39","30","14","2018-01-13","2017-10-24","Oct","2017","","Intermediate","Completed"); 
INSERT INTO traininglog VALUES("176","40","31","15","2018-01-14","2017-10-25","Oct","2017","Seizure","Beginner","Completed"); 
INSERT INTO traininglog VALUES("177","41","32","16","2018-01-15","2017-10-26","Oct","2017","","Intermediate","Completed"); 
INSERT INTO traininglog VALUES("178","42","33","17","2018-01-16","2017-10-27","Oct","2017","","Intermediate","Completed"); 
INSERT INTO traininglog VALUES("179","43","34","10","2018-01-17","2017-10-28","Oct","2017","","Intermediate","Completed"); 
INSERT INTO traininglog VALUES("180","44","35","11","2018-01-18","2017-10-29","Oct","2017","","Intermediate","Completed"); 
INSERT INTO traininglog VALUES("181","45","36","12","2018-01-19","2017-10-30","Oct","2017","","Intermediate","Completed"); 
INSERT INTO traininglog VALUES("182","46","37","13","2018-01-01","2017-11-30","Nov","2017","","Intermediate","Completed"); 
INSERT INTO traininglog VALUES("183","47","38","14","2018-01-02","2017-12-01","Dec","2017","Seizure","Beginner","Completed"); 
INSERT INTO traininglog VALUES("184","48","39","15","2018-01-03","2017-12-02","Dec","2017","","Intermediate","Completed"); 
INSERT INTO traininglog VALUES("185","49","40","16","2018-01-04","2017-12-03","Dec","2017","","Intermediate","Completed"); 
INSERT INTO traininglog VALUES("186","50","41","17","2018-01-05","2017-12-04","Dec","2017","","Intermediate","Completed"); 
INSERT INTO traininglog VALUES("187","38","42","10","2018-01-06","2017-12-05","Dec","2017","","Intermediate","Completed"); 
INSERT INTO traininglog VALUES("188","39","43","11","2018-01-07","2017-11-05","Nov","2017","","Intermediate","Completed"); 
INSERT INTO traininglog VALUES("189","40","44","12","2018-01-08","2017-11-06","Nov","2017","","Intermediate","Completed"); 
INSERT INTO traininglog VALUES("190","41","45","13","2018-01-09","2017-11-07","Nov","2017","Seizure","Beginner","Completed"); 
INSERT INTO traininglog VALUES("191","42","46","14","2018-01-10","2017-11-08","Nov","2017","","Intermediate","Completed"); 
INSERT INTO traininglog VALUES("192","43","47","15","2018-01-11","2017-11-09","Nov","2017","","Intermediate","Completed"); 
INSERT INTO traininglog VALUES("193","44","48","16","2018-01-12","2017-11-10","Nov","2017","","Intermediate","Completed"); 
INSERT INTO traininglog VALUES("194","45","49","17","2018-01-13","2017-11-11","Nov","2017","","Intermediate","Completed"); 
INSERT INTO traininglog VALUES("195","46","50","12","2018-01-14","2017-11-12","Nov","2017","","Intermediate","Completed"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=252 DEFAULT CHARSET=latin1;

INSERT INTO traininglogsession VALUES("118","88","2018-02-13","13:01:00.0000","14:02:00.0000","push-up","2","1","Feb","2018"); 
INSERT INTO traininglogsession VALUES("119","89","2018-02-08","13:01:00.0000","13:00:00.0000","chestup","1","11","Feb","2018"); 
INSERT INTO traininglogsession VALUES("121","91","2018-02-15","13:02:00.0000","14:01:00.0000","push-ups","2","1","Feb","2018"); 
INSERT INTO traininglogsession VALUES("122","92","2018-02-15","14:00:00.0000","14:01:00.0000","push-ups","1","2","Feb","2018"); 
INSERT INTO traininglogsession VALUES("123","93","2018-02-09","15:02:00.0000","15:03:00.0000","push-ups","3","2","Feb","2018"); 
INSERT INTO traininglogsession VALUES("124","94","2018-02-15","13:02:00.0000","13:02:00.0000","push-ups","2","1","Feb","2018"); 
INSERT INTO traininglogsession VALUES("125","88","2017-01-01","08:00:00.0000","09:00:00.0000","Push-up","1","12","Jan","2017"); 
INSERT INTO traininglogsession VALUES("126","89","2017-01-02","09:00:00.0000","10:00:00.0000","Push-up","2","12","Jan","2017"); 
INSERT INTO traininglogsession VALUES("127","90","0000-00-00","10:00:00.0000","11:00:00.0000","Push-up","3","12","Jan","2017"); 
INSERT INTO traininglogsession VALUES("128","91","2017-01-04","11:00:00.0000","12:00:00.0000","Push-up","1","12","Jan","2017"); 
INSERT INTO traininglogsession VALUES("129","92","2017-01-05","12:00:00.0000","01:00:00.0000","Push-up","2","12","Jan","2017"); 
INSERT INTO traininglogsession VALUES("130","93","2017-01-06","01:00:00.0000","02:00:00.0000","Push-up","3","12","Jan","2017"); 
INSERT INTO traininglogsession VALUES("131","94","2017-01-07","02:00:00.0000","03:00:00.0000","Push-up","1","12","Jan","2017"); 
INSERT INTO traininglogsession VALUES("132","95","2017-01-08","03:00:00.0000","04:00:00.0000","Push-up","2","12","Jan","2017"); 
INSERT INTO traininglogsession VALUES("133","96","2017-01-09","04:00:00.0000","05:00:00.0000","KettleBell","3","12","Jan","2017"); 
INSERT INTO traininglogsession VALUES("134","97","2017-01-10","05:00:00.0000","06:00:00.0000","KettleBell","1","12","Jan","2017"); 
INSERT INTO traininglogsession VALUES("135","98","2017-02-20","06:00:00.0000","07:00:00.0000","KettleBell","2","12","Feb","2017"); 
INSERT INTO traininglogsession VALUES("136","99","2017-02-21","07:00:00.0000","08:00:00.0000","KettleBell","3","12","Feb","2017"); 
INSERT INTO traininglogsession VALUES("137","100","2017-02-22","08:00:00.0000","09:00:00.0000","KettleBell","1","12","Feb","2017"); 
INSERT INTO traininglogsession VALUES("138","101","2017-02-23","09:00:00.0000","10:00:00.0000","KettleBell","2","12","Feb","2017"); 
INSERT INTO traininglogsession VALUES("139","102","2017-02-24","10:00:00.0000","11:00:00.0000","KettleBell","3","12","Feb","2017"); 
INSERT INTO traininglogsession VALUES("140","103","2017-02-25","11:00:00.0000","09:00:00.0000","KettleBell","1","12","Feb","2017"); 
INSERT INTO traininglogsession VALUES("141","104","2017-02-26","08:00:00.0000","10:00:00.0000","KettleBell","2","12","Feb","2017"); 
INSERT INTO traininglogsession VALUES("142","105","2017-02-27","09:00:00.0000","11:00:00.0000","Deadlift","3","12","Feb","2017"); 
INSERT INTO traininglogsession VALUES("143","106","2017-02-28","10:00:00.0000","12:00:00.0000","LegCurl","1","12","Feb","2017"); 
INSERT INTO traininglogsession VALUES("144","107","2017-03-01","11:00:00.0000","01:00:00.0000","BenchPress","2","12","Mar","2017"); 
INSERT INTO traininglogsession VALUES("145","108","2017-03-02","12:00:00.0000","02:00:00.0000","ChestFly","3","12","Mar","2017"); 
INSERT INTO traininglogsession VALUES("146","109","2017-03-03","01:00:00.0000","03:00:00.0000","BicepsCurl","1","12","Mar","2017"); 
INSERT INTO traininglogsession VALUES("147","110","2017-03-04","02:00:00.0000","04:00:00.0000","Legraise","2","12","Mar","2017"); 
INSERT INTO traininglogsession VALUES("148","111","2017-03-05","03:00:00.0000","05:00:00.0000","KettleBell","3","12","Mar","2017"); 
INSERT INTO traininglogsession VALUES("149","112","2017-03-06","04:00:00.0000","06:00:00.0000","Deadlift","1","12","Mar","2017"); 
INSERT INTO traininglogsession VALUES("150","113","2017-03-07","05:00:00.0000","07:00:00.0000","LegCurl","2","12","Mar","2017"); 
INSERT INTO traininglogsession VALUES("151","114","2017-03-08","06:00:00.0000","08:00:00.0000","BenchPress","3","12","Mar","2017"); 
INSERT INTO traininglogsession VALUES("152","115","2017-03-09","07:00:00.0000","09:00:00.0000","ChestFly","1","12","Mar","2017"); 
INSERT INTO traininglogsession VALUES("153","116","2017-03-10","08:00:00.0000","10:00:00.0000","BicepsCurl","2","12","Mar","2017"); 
INSERT INTO traininglogsession VALUES("154","117","2017-03-11","09:00:00.0000","11:00:00.0000","Legraise","3","12","Mar","2017"); 
INSERT INTO traininglogsession VALUES("155","118","2017-03-12","10:00:00.0000","09:00:00.0000","KettleBell","1","12","Mar","2017"); 
INSERT INTO traininglogsession VALUES("156","119","2017-04-12","11:00:00.0000","10:00:00.0000","Deadlift","2","12","Apr","2017"); 
INSERT INTO traininglogsession VALUES("157","120","2017-04-13","08:00:00.0000","11:00:00.0000","LegCurl","3","12","Apr","2017"); 
INSERT INTO traininglogsession VALUES("158","121","2017-04-14","09:00:00.0000","12:00:00.0000","BenchPress","1","12","Apr","2017"); 
INSERT INTO traininglogsession VALUES("159","122","2017-04-15","10:00:00.0000","01:00:00.0000","ChestFly","2","12","Apr","2017"); 
INSERT INTO traininglogsession VALUES("160","123","2017-04-16","11:00:00.0000","02:00:00.0000","BicepsCurl","3","12","Apr","2017"); 
INSERT INTO traininglogsession VALUES("161","124","2017-04-17","12:00:00.0000","03:00:00.0000","Legraise","1","12","Apr","2017"); 
INSERT INTO traininglogsession VALUES("162","125","2017-04-18","01:00:00.0000","04:00:00.0000","KettleBell","2","12","Apr","2017"); 
INSERT INTO traininglogsession VALUES("163","126","2017-04-19","02:00:00.0000","05:00:00.0000","Deadlift","3","12","Apr","2017"); 
INSERT INTO traininglogsession VALUES("164","127","2017-04-20","03:00:00.0000","06:00:00.0000","LegCurl","1","12","Apr","2017"); 
INSERT INTO traininglogsession VALUES("165","128","2017-04-21","04:00:00.0000","07:00:00.0000","BenchPress","2","12","Apr","2017"); 
INSERT INTO traininglogsession VALUES("166","129","2017-05-21","05:00:00.0000","08:00:00.0000","ChestFly","3","12","May","2017"); 
INSERT INTO traininglogsession VALUES("167","130","2017-05-22","06:00:00.0000","09:00:00.0000","BicepsCurl","1","12","May","2017"); 
INSERT INTO traininglogsession VALUES("168","131","2017-05-23","07:00:00.0000","10:00:00.0000","Legraise","2","12","May","2017"); 
INSERT INTO traininglogsession VALUES("169","132","2017-05-24","08:00:00.0000","11:00:00.0000","KettleBell","3","12","May","2017"); 
INSERT INTO traininglogsession VALUES("170","133","2017-05-25","09:00:00.0000","09:00:00.0000","Deadlift","1","12","May","2017"); 
INSERT INTO traininglogsession VALUES("171","134","2017-05-26","10:00:00.0000","10:00:00.0000","LegCurl","2","12","May","2017"); 
INSERT INTO traininglogsession VALUES("172","135","2017-06-26","11:00:00.0000","11:00:00.0000","BenchPress","3","12","Jun","2017"); 
INSERT INTO traininglogsession VALUES("173","136","2017-06-27","08:00:00.0000","12:00:00.0000","ChestFly","1","12","Jun","2017"); 
INSERT INTO traininglogsession VALUES("174","137","2017-06-28","09:00:00.0000","01:00:00.0000","BicepsCurl","2","12","Jun","2017"); 
INSERT INTO traininglogsession VALUES("175","138","2017-06-29","10:00:00.0000","02:00:00.0000","Legraise","3","12","Jun","2017"); 
INSERT INTO traininglogsession VALUES("176","139","2017-06-30","11:00:00.0000","03:00:00.0000","KettleBell","1","12","Jun","2017"); 
INSERT INTO traininglogsession VALUES("177","140","2017-07-01","12:00:00.0000","04:00:00.0000","Deadlift","2","12","Jul","2017"); 
INSERT INTO traininglogsession VALUES("178","141","2017-07-02","01:00:00.0000","05:00:00.0000","LegCurl","3","12","Jul","2017"); 
INSERT INTO traininglogsession VALUES("179","142","2017-07-03","02:00:00.0000","06:00:00.0000","BenchPress","1","12","Jul","2017"); 
INSERT INTO traininglogsession VALUES("180","143","2017-07-04","03:00:00.0000","07:00:00.0000","ChestFly","2","12","Jul","2017"); 
INSERT INTO traininglogsession VALUES("181","144","2017-07-05","04:00:00.0000","08:00:00.0000","BicepsCurl","3","12","Jul","2017"); 
INSERT INTO traininglogsession VALUES("182","145","2017-08-05","05:00:00.0000","09:00:00.0000","Legraise","1","12","Aug","2017"); 
INSERT INTO traininglogsession VALUES("183","146","2017-08-06","06:00:00.0000","10:00:00.0000","KettleBell","2","12","Aug","2017"); 
INSERT INTO traininglogsession VALUES("184","147","2017-08-07","07:00:00.0000","11:00:00.0000","Deadlift","3","12","Aug","2017"); 
INSERT INTO traininglogsession VALUES("185","148","2017-08-08","08:00:00.0000","09:00:00.0000","LegCurl","1","12","Aug","2017"); 
INSERT INTO traininglogsession VALUES("186","149","2017-08-09","09:00:00.0000","10:00:00.0000","BenchPress","2","12","Aug","2017"); 
INSERT INTO traininglogsession VALUES("187","150","2017-08-10","10:00:00.0000","11:00:00.0000","ChestFly","3","12","Aug","2017"); 
INSERT INTO traininglogsession VALUES("188","151","2017-08-11","11:00:00.0000","12:00:00.0000","BicepsCurl","1","12","Aug","2017"); 
INSERT INTO traininglogsession VALUES("189","152","2017-08-12","08:00:00.0000","01:00:00.0000","Legraise","2","12","Aug","2017"); 
INSERT INTO traininglogsession VALUES("190","153","2017-08-13","09:00:00.0000","02:00:00.0000","KettleBell","3","12","Aug","2017"); 
INSERT INTO traininglogsession VALUES("191","154","2017-09-13","10:00:00.0000","03:00:00.0000","Deadlift","1","12","Sep","2017"); 
INSERT INTO traininglogsession VALUES("192","155","2017-09-14","11:00:00.0000","04:00:00.0000","LegCurl","2","12","Sep","2017"); 
INSERT INTO traininglogsession VALUES("193","156","2017-09-15","12:00:00.0000","05:00:00.0000","BenchPress","3","12","Sep","2017"); 
INSERT INTO traininglogsession VALUES("194","157","2017-09-16","01:00:00.0000","06:00:00.0000","ChestFly","1","12","Sep","2017"); 
INSERT INTO traininglogsession VALUES("195","158","2017-09-17","02:00:00.0000","07:00:00.0000","BicepsCurl","2","12","Sep","2017"); 
INSERT INTO traininglogsession VALUES("196","159","2017-09-18","03:00:00.0000","08:00:00.0000","Legraise","3","12","Sep","2017"); 
INSERT INTO traininglogsession VALUES("197","160","2017-09-19","04:00:00.0000","09:00:00.0000","KettleBell","1","12","Sep","2017"); 
INSERT INTO traininglogsession VALUES("198","161","2017-09-20","05:00:00.0000","10:00:00.0000","Deadlift","2","12","Sep","2017"); 
INSERT INTO traininglogsession VALUES("199","162","2017-09-21","06:00:00.0000","11:00:00.0000","LegCurl","3","12","Sep","2017"); 
INSERT INTO traininglogsession VALUES("200","163","2017-09-22","07:00:00.0000","09:00:00.0000","BenchPress","1","12","Sep","2017"); 
INSERT INTO traininglogsession VALUES("201","164","2017-09-22","08:00:00.0000","10:00:00.0000","ChestFly","2","12","Sep","2017"); 
INSERT INTO traininglogsession VALUES("202","165","2017-10-22","09:00:00.0000","11:00:00.0000","BicepsCurl","3","12","Oct","2017"); 
INSERT INTO traininglogsession VALUES("203","166","2017-10-23","10:00:00.0000","12:00:00.0000","Legraise","1","12","Oct","2017"); 
INSERT INTO traininglogsession VALUES("204","167","2017-10-24","11:00:00.0000","01:00:00.0000","KettleBell","2","12","Oct","2017"); 
INSERT INTO traininglogsession VALUES("205","168","2017-10-25","08:00:00.0000","02:00:00.0000","Deadlift","3","12","Oct","2017"); 
INSERT INTO traininglogsession VALUES("206","169","2017-10-26","09:00:00.0000","03:00:00.0000","LegCurl","1","12","Oct","2017"); 
INSERT INTO traininglogsession VALUES("207","170","2017-10-27","10:00:00.0000","04:00:00.0000","BenchPress","2","12","Oct","2017"); 
INSERT INTO traininglogsession VALUES("208","171","2017-10-28","11:00:00.0000","05:00:00.0000","ChestFly","3","12","Oct","2017"); 
INSERT INTO traininglogsession VALUES("209","172","2017-10-29","12:00:00.0000","06:00:00.0000","BicepsCurl","1","12","Oct","2017"); 
INSERT INTO traininglogsession VALUES("210","173","2017-10-30","01:00:00.0000","07:00:00.0000","Legraise","2","12","Oct","2017"); 
INSERT INTO traininglogsession VALUES("211","174","2017-11-30","02:00:00.0000","08:00:00.0000","KettleBell","3","12","Nov","2017"); 
INSERT INTO traininglogsession VALUES("212","175","2017-12-01","03:00:00.0000","09:00:00.0000","Deadlift","1","12","Dec","2017"); 
INSERT INTO traininglogsession VALUES("213","176","2017-12-02","04:00:00.0000","10:00:00.0000","LegCurl","2","12","Dec","2017"); 
INSERT INTO traininglogsession VALUES("214","177","2017-12-03","05:00:00.0000","11:00:00.0000","BenchPress","3","12","Dec","2017"); 
INSERT INTO traininglogsession VALUES("215","178","2017-12-04","06:00:00.0000","09:00:00.0000","ChestFly","1","12","Dec","2017"); 
INSERT INTO traininglogsession VALUES("216","179","2017-12-05","07:00:00.0000","10:00:00.0000","BicepsCurl","2","12","Dec","2017"); 
INSERT INTO traininglogsession VALUES("217","180","2017-11-05","08:00:00.0000","11:00:00.0000","Legraise","3","12","Nov","2017"); 
INSERT INTO traininglogsession VALUES("218","181","2017-11-06","09:00:00.0000","12:00:00.0000","KettleBell","1","12","Nov","2017"); 
INSERT INTO traininglogsession VALUES("219","182","2017-11-07","10:00:00.0000","01:00:00.0000","Deadlift","2","12","Nov","2017"); 
INSERT INTO traininglogsession VALUES("220","183","2017-11-08","11:00:00.0000","02:00:00.0000","LegCurl","3","12","Nov","2017"); 
INSERT INTO traininglogsession VALUES("221","184","2017-11-09","08:00:00.0000","03:00:00.0000","BenchPress","1","12","Nov","2017"); 
INSERT INTO traininglogsession VALUES("222","185","2017-11-10","09:00:00.0000","04:00:00.0000","ChestFly","2","12","Nov","2017"); 
INSERT INTO traininglogsession VALUES("223","186","2017-11-11","10:00:00.0000","05:00:00.0000","BicepsCurl","3","12","Nov","2017"); 
INSERT INTO traininglogsession VALUES("224","187","2017-11-12","11:00:00.0000","06:00:00.0000","KettleBell","1","12","Nov","2017"); 



DROP TABLE trainingpackage;

CREATE TABLE `trainingpackage` (
  `TP_Code` int(8) NOT NULL AUTO_INCREMENT,
  `TP_PackageType` int(2) NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=211 DEFAULT CHARSET=latin1;

INSERT INTO transaction VALUES("1","1","Membership","5697","2017-10-11","unpaid","2017","Jan"); 
INSERT INTO transaction VALUES("2","2","Membership","5697","2017-07-04","unpaid","2017","Feb"); 
INSERT INTO transaction VALUES("3","3","Membership","5697","2014-07-16","unpaid","2014","Mar"); 
INSERT INTO transaction VALUES("4","4","Membership","5697","2013-10-31","unpaid","2013","May"); 
INSERT INTO transaction VALUES("5","5","Membership","5697","2014-01-14","unpaid","2014","Jun"); 
INSERT INTO transaction VALUES("6","6","Membership","5697","2015-01-18","unpaid","2015","Jul"); 
INSERT INTO transaction VALUES("7","7","Membership","5697","2018-01-04","unpaid","2018","Aug"); 
INSERT INTO transaction VALUES("8","8","Membership","5697","2014-08-12","unpaid","2014","Sep"); 
INSERT INTO transaction VALUES("9","9","Membership","5697","2015-11-24","unpaid","2015","Oct"); 
INSERT INTO transaction VALUES("10","10","Membership","5697","2014-05-16","unpaid","2014","Nov"); 
INSERT INTO transaction VALUES("11","11","Membership","5697","2013-10-20","unpaid","2013","Dec"); 
INSERT INTO transaction VALUES("12","12","Membership","5697","2017-04-03","unpaid","2017","Jan"); 
INSERT INTO transaction VALUES("13","13","Membership","5697","2016-10-03","unpaid","2016","Feb"); 
INSERT INTO transaction VALUES("14","14","Membership","5697","2015-07-19","unpaid","2015","Mar"); 
INSERT INTO transaction VALUES("15","15","Membership","5697","2016-06-27","unpaid","2016","May"); 
INSERT INTO transaction VALUES("16","16","Membership","5697","2016-02-20","unpaid","2016","Jun"); 
INSERT INTO transaction VALUES("17","17","Membership","5697","2017-12-05","unpaid","2017","Jul"); 
INSERT INTO transaction VALUES("18","18","Membership","5697","2014-12-23","unpaid","2014","Aug"); 
INSERT INTO transaction VALUES("19","19","Membership","5697","2016-02-27","unpaid","2016","Sep"); 
INSERT INTO transaction VALUES("20","20","Membership","5697","2016-08-04","unpaid","2016","Oct"); 
INSERT INTO transaction VALUES("21","21","Membership","5697","2017-08-24","unpaid","2017","Nov"); 
INSERT INTO transaction VALUES("22","22","Membership","5697","2016-01-31","unpaid","2016","Dec"); 
INSERT INTO transaction VALUES("23","23","Membership","5697","2013-03-11","unpaid","2013","Jan"); 
INSERT INTO transaction VALUES("24","24","Membership","5697","2017-01-10","unpaid","2017","Feb"); 
INSERT INTO transaction VALUES("25","25","Membership","5697","2014-07-29","unpaid","2014","Mar"); 
INSERT INTO transaction VALUES("26","26","Personal Training","4000","2014-05-25","unpaid","2014","May"); 
INSERT INTO transaction VALUES("27","27","Personal Training","4000","2014-01-25","unpaid","2014","Jun"); 
INSERT INTO transaction VALUES("28","28","Personal Training","4000","2014-06-28","unpaid","2014","Jul"); 
INSERT INTO transaction VALUES("29","29","Personal Training","4000","2015-06-29","unpaid","2015","Aug"); 
INSERT INTO transaction VALUES("30","30","Personal Training","4000","2016-06-10","unpaid","2016","Sep"); 
INSERT INTO transaction VALUES("31","31","Personal Training","4000","2016-04-18","unpaid","2016","Oct"); 
INSERT INTO transaction VALUES("32","32","Personal Training","4000","2017-01-12","unpaid","2017","Nov"); 
INSERT INTO transaction VALUES("33","33","Personal Training","4000","2016-02-16","unpaid","2016","Dec"); 
INSERT INTO transaction VALUES("34","34","Personal Training","4000","2015-01-25","unpaid","2015","Jan"); 
INSERT INTO transaction VALUES("35","35","Personal Training","4000","2013-10-27","unpaid","2013","Feb"); 
INSERT INTO transaction VALUES("36","36","Personal Training","4000","2017-07-27","unpaid","2017","Mar"); 
INSERT INTO transaction VALUES("37","37","Personal Training","4000","2015-09-20","unpaid","2015","May"); 
INSERT INTO transaction VALUES("38","38","Personal Training","4000","2016-10-30","unpaid","2016","Jun"); 
INSERT INTO transaction VALUES("39","39","Personal Training","4000","2016-07-18","unpaid","2016","Jul"); 
INSERT INTO transaction VALUES("40","40","Personal Training","4000","2017-06-04","unpaid","2017","Aug"); 
INSERT INTO transaction VALUES("41","41","Personal Training","4000","2018-01-04","unpaid","2018","Sep"); 
INSERT INTO transaction VALUES("42","42","Personal Training","4000","2017-05-18","unpaid","2017","Oct"); 
INSERT INTO transaction VALUES("43","43","Personal Training","4000","2016-06-06","unpaid","2016","Nov"); 
INSERT INTO transaction VALUES("44","44","Personal Training","4000","2015-09-25","unpaid","2015","Dec"); 
INSERT INTO transaction VALUES("45","45","Personal Training","4000","2016-07-09","unpaid","2016","Jan"); 
INSERT INTO transaction VALUES("46","46","Personal Training","4000","2015-12-28","unpaid","2015","Feb"); 
INSERT INTO transaction VALUES("47","47","Personal Training","4000","2015-10-09","unpaid","2015","Mar"); 
INSERT INTO transaction VALUES("48","48","Personal Training","4000","2015-02-17","unpaid","2015","May"); 
INSERT INTO transaction VALUES("49","49","Personal Training","4000","2017-02-01","unpaid","2017","Jun"); 
INSERT INTO transaction VALUES("50","50","Personal Training","4000","2013-11-17","unpaid","2013","Jul"); 
INSERT INTO transaction VALUES("51","1","Lost Locker Key","400","2015-06-19","paid","2015","Aug"); 
INSERT INTO transaction VALUES("52","2","Lost Towel(s)","400","2014-07-30","paid","2014","Sep"); 
INSERT INTO transaction VALUES("53","3","Lost Towel(s)","400","2017-07-05","paid","2017","Oct"); 
INSERT INTO transaction VALUES("54","4","Walk-in","400","2013-06-04","paid","2013","Nov"); 
INSERT INTO transaction VALUES("55","5","Walk-in","400","2015-06-30","paid","2015","Dec"); 
INSERT INTO transaction VALUES("56","6","Lost Towel(s)","400","2015-12-24","paid","2015","Jan"); 
INSERT INTO transaction VALUES("57","7","Lost Towel(s)","200","2015-06-25","paid","2015","Feb"); 
INSERT INTO transaction VALUES("58","8","Walk-in","400","2015-09-11","paid","2015","Mar"); 
INSERT INTO transaction VALUES("59","9","Lost Towel(s)","200","2014-01-16","paid","2014","May"); 
INSERT INTO transaction VALUES("60","10","Lost Locker Key","200","2017-03-29","paid","2017","Jun"); 
INSERT INTO transaction VALUES("61","11","Lost Locker Key","200","2015-06-07","paid","2015","Jul"); 
INSERT INTO transaction VALUES("62","12","Lost Locker Key","200","2013-09-17","paid","2013","Aug"); 
INSERT INTO transaction VALUES("63","13","Walk-in","400","2013-11-09","paid","2013","Sep"); 
INSERT INTO transaction VALUES("64","14","Walk-in","400","2013-09-11","paid","2013","Oct"); 
INSERT INTO transaction VALUES("65","15","Lost Towel(s)","50","2017-09-24","paid","2017","Nov"); 
INSERT INTO transaction VALUES("66","16","Lost Locker Key","200","2015-12-25","paid","2015","Dec"); 
INSERT INTO transaction VALUES("67","17","Lost Towel(s)","200","2014-11-08","paid","2014","Jan"); 
INSERT INTO transaction VALUES("68","18","Lost Towel(s)","200","2016-10-18","paid","2016","Feb"); 
INSERT INTO transaction VALUES("69","19","Walk-in","200","2016-03-20","paid","2016","Mar"); 
INSERT INTO transaction VALUES("70","20","Lost Towel(s)","200","2013-12-28","paid","2013","May"); 
INSERT INTO transaction VALUES("71","21","Lost Locker Key","200","2015-11-22","paid","2015","Jun"); 
INSERT INTO transaction VALUES("72","22","Walk-in","400","2013-07-31","paid","2013","Jul"); 
INSERT INTO transaction VALUES("73","23","Lost Towel(s)","200","2015-08-15","paid","2015","Aug"); 
INSERT INTO transaction VALUES("74","24","Lost Locker Key","200","2015-11-17","paid","2015","Sep"); 
INSERT INTO transaction VALUES("75","25","Lost Towel(s)","200","2015-10-01","paid","2015","Oct"); 
INSERT INTO transaction VALUES("76","26","Walk-in","400","2013-04-20","paid","2013","Nov"); 
INSERT INTO transaction VALUES("77","27","Walk-in","400","2017-12-24","paid","2017","Dec"); 
INSERT INTO transaction VALUES("78","28","Walk-in","400","2015-07-03","paid","2015","Jan"); 
INSERT INTO transaction VALUES("79","29","Walk-in","400","2015-10-12","paid","2015","Feb"); 
INSERT INTO transaction VALUES("80","30","Walk-in","400","2017-10-04","paid","2017","Mar"); 
INSERT INTO transaction VALUES("81","31","Walk-in","400","2017-09-05","paid","2017","May"); 
INSERT INTO transaction VALUES("82","32","Walk-in","400","2015-03-22","paid","2015","Jun"); 
INSERT INTO transaction VALUES("83","33","Walk-in","400","2017-05-14","paid","2017","Jul"); 
INSERT INTO transaction VALUES("84","34","Walk-in","400","2015-08-12","paid","2015","Aug"); 
INSERT INTO transaction VALUES("85","35","Walk-in","400","2013-07-19","paid","2013","Sep"); 
INSERT INTO transaction VALUES("86","36","Walk-in","400","2013-03-14","paid","2013","Oct"); 
INSERT INTO transaction VALUES("87","37","Walk-in","400","2017-04-09","paid","2017","Nov"); 
INSERT INTO transaction VALUES("88","38","Walk-in","400","2015-03-18","paid","2015","Dec"); 
INSERT INTO transaction VALUES("89","39","Walk-in","400","2017-09-23","paid","2017","Jan"); 
INSERT INTO transaction VALUES("90","40","Walk-in","400","2014-10-11","paid","2014","Feb"); 
INSERT INTO transaction VALUES("91","41","Walk-in","400","2016-06-15","paid","2016","Mar"); 
INSERT INTO transaction VALUES("92","42","Walk-in","400","2015-09-02","paid","2015","May"); 
INSERT INTO transaction VALUES("93","43","Walk-in","400","2016-08-28","paid","2016","Jun"); 
INSERT INTO transaction VALUES("94","44","Walk-in","400","2016-06-16","paid","2016","Jul"); 
INSERT INTO transaction VALUES("95","45","Walk-in","400","2017-07-15","paid","2017","Aug"); 
INSERT INTO transaction VALUES("96","46","Walk-in","400","2015-07-13","paid","2015","Sep"); 
INSERT INTO transaction VALUES("97","47","Walk-in","400","2014-10-18","paid","2014","Oct"); 
INSERT INTO transaction VALUES("98","48","Walk-in","400","2016-08-31","paid","2016","Nov"); 
INSERT INTO transaction VALUES("99","49","Walk-in","400","2017-11-06","paid","2017","Dec"); 
INSERT INTO transaction VALUES("100","50","Walk-in","400","2013-10-25","paid","2013","Jan"); 



DROP TABLE users;

CREATE TABLE `users` (
  `userID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `userType` enum('admin','receptionist','coach','') NOT NULL,
  `stat` int(1) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB AUTO_INCREMENT=108 DEFAULT CHARSET=latin1;

INSERT INTO users VALUES("1","Ang","81dc9bdb52d04dc20036dbd8313ed055","coach","0"); 
INSERT INTO users VALUES("2","Uy","81dc9bdb52d04dc20036dbd8313ed055","coach","0"); 
INSERT INTO users VALUES("3","Arellano","81dc9bdb52d04dc20036dbd8313ed055","coach","0"); 
INSERT INTO users VALUES("4","Morales","81dc9bdb52d04dc20036dbd8313ed055","coach","0"); 
INSERT INTO users VALUES("5","Fernandez","81dc9bdb52d04dc20036dbd8313ed055","coach","0"); 
INSERT INTO users VALUES("6","Pilalpi","81dc9bdb52d04dc20036dbd8313ed055","coach","0"); 
INSERT INTO users VALUES("7","Benjamin","81dc9bdb52d04dc20036dbd8313ed055","coach","0"); 
INSERT INTO users VALUES("8","Magbanua","81dc9bdb52d04dc20036dbd8313ed055","coach","0"); 
INSERT INTO users VALUES("9","Prado","81dc9bdb52d04dc20036dbd8313ed055","coach","0"); 
INSERT INTO users VALUES("10","Divinagracia","81dc9bdb52d04dc20036dbd8313ed055","coach","0"); 
INSERT INTO users VALUES("11","Larry","81dc9bdb52d04dc20036dbd8313ed055","coach","0"); 
INSERT INTO users VALUES("12","Menosa","81dc9bdb52d04dc20036dbd8313ed055","coach","0"); 
INSERT INTO users VALUES("13","Olis","81dc9bdb52d04dc20036dbd8313ed055","coach","0"); 
INSERT INTO users VALUES("65","admin","21232f297a57a5a743894a0e4a801fc3","admin","1"); 
INSERT INTO users VALUES("103","receptionist","81dc9bdb52d04dc20036dbd8313ed055","receptionist","0"); 
INSERT INTO users VALUES("107","Hans","1234","coach","0"); 



