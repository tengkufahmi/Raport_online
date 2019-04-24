DROP TABLE absensi;

CREATE TABLE `absensi` (
  `ID_ABSEN` int(11) NOT NULL AUTO_INCREMENT,
  `NO_INDUK` varchar(10) DEFAULT NULL,
  `SUBUH` varchar(5) DEFAULT NULL,
  `MAGHRIB` varchar(5) DEFAULT NULL,
  `ISYAK` varchar(5) DEFAULT NULL,
  `TANGGAL` date NOT NULL,
  `THN_AJARAN` varchar(10) NOT NULL,
  PRIMARY KEY (`ID_ABSEN`),
  KEY `NO_INDUK` (`NO_INDUK`),
  CONSTRAINT `absensi_ibfk_1` FOREIGN KEY (`NO_INDUK`) REFERENCES `siswa` (`NO_INDUK`)
) ENGINE=InnoDB AUTO_INCREMENT=151 DEFAULT CHARSET=latin1;

INSERT INTO absensi VALUES("36","A15004","Hadir","Izin","Izin","2018-12-01","2017/2018");
INSERT INTO absensi VALUES("37","A15009","Alfa","Alfa","Hadir","2018-12-01","2017/2018");
INSERT INTO absensi VALUES("38","A15011","Alfa","Sakit","Izin","2018-12-01","2017/2018");
INSERT INTO absensi VALUES("40","A15005","Hadir","Izin","Hadir","2018-12-02","2017/2018");
INSERT INTO absensi VALUES("41","A15008","Hadir","Sakit","Hadir","2018-12-02","2017/2018");
INSERT INTO absensi VALUES("42","A15013","Sakit","Hadir","Hadir","2018-12-02","2017/2018");
INSERT INTO absensi VALUES("43","A15015","Hadir","Hadir","Alfa","2018-12-02","2017/2018");
INSERT INTO absensi VALUES("44","A15005","Sakit","Sakit","Hadir","2018-12-03","2017/2018");
INSERT INTO absensi VALUES("45","A15008","Hadir","Izin","Sakit","2018-12-03","2017/2018");
INSERT INTO absensi VALUES("46","A15013","Alfa","Sakit","Hadir","2018-12-03","2017/2018");
INSERT INTO absensi VALUES("47","A15015","Sakit","Sakit","Sakit","2018-12-03","2017/2018");
INSERT INTO absensi VALUES("49","A15005","Hadir","Hadir","Hadir","2018-12-04","2017/2018");
INSERT INTO absensi VALUES("50","A15008","Hadir","Hadir","Hadir","2018-12-04","2017/2018");
INSERT INTO absensi VALUES("51","A15013","Hadir","Hadir","Hadir","2018-12-04","2017/2018");
INSERT INTO absensi VALUES("52","A15015","Hadir","Hadir","Hadir","2018-12-04","2017/2018");
INSERT INTO absensi VALUES("54","A15005","Hadir","Hadir","Hadir","2018-12-04","2017/2018");
INSERT INTO absensi VALUES("55","A15008","Hadir","Hadir","Hadir","2018-12-04","2017/2018");
INSERT INTO absensi VALUES("56","A15013","Hadir","Hadir","Hadir","2018-12-04","2017/2018");
INSERT INTO absensi VALUES("57","A15015","Hadir","Hadir","Hadir","2018-12-04","2017/2018");
INSERT INTO absensi VALUES("59","A15005","Hadir","Hadir","Hadir","2018-12-05","2017/2018");
INSERT INTO absensi VALUES("60","A15008","Hadir","Hadir","Hadir","2018-12-05","2017/2018");
INSERT INTO absensi VALUES("61","A15013","Hadir","Hadir","Hadir","2018-12-05","2017/2018");
INSERT INTO absensi VALUES("62","A15015","Hadir","Hadir","Hadir","2018-12-05","2017/2018");
INSERT INTO absensi VALUES("65","A15005","Hadir","Hadir","Hadir","2018-12-05","2017/2018");
INSERT INTO absensi VALUES("66","A15008","Hadir","Hadir","Hadir","2018-12-05","2017/2018");
INSERT INTO absensi VALUES("67","A15013","Hadir","Hadir","Hadir","2018-12-05","2017/2018");
INSERT INTO absensi VALUES("68","A15015","Hadir","Hadir","Hadir","2018-12-05","2017/2018");
INSERT INTO absensi VALUES("69","A15000","Hadir","Hadir","Hadir","2018-12-06","2017/2018");
INSERT INTO absensi VALUES("70","A15005","Hadir","Hadir","Hadir","2018-12-06","2017/2018");
INSERT INTO absensi VALUES("71","A15008","Hadir","Hadir","Hadir","2018-12-06","2017/2018");
INSERT INTO absensi VALUES("72","A15013","Hadir","Hadir","Hadir","2018-12-06","2017/2018");
INSERT INTO absensi VALUES("73","A15015","Hadir","Hadir","Hadir","2018-12-06","2017/2018");
INSERT INTO absensi VALUES("74","A15002","Hadir","Hadir","Hadir","2018-12-06","2017/2018");
INSERT INTO absensi VALUES("75","A15004","Hadir","Hadir","Hadir","2018-12-06","2017/2018");
INSERT INTO absensi VALUES("76","A15009","Hadir","Hadir","Hadir","2018-12-06","2017/2018");
INSERT INTO absensi VALUES("77","A15011","Hadir","Hadir","Hadir","2018-12-06","2017/2018");
INSERT INTO absensi VALUES("78","A15001","Hadir","Hadir","Hadir","2018-12-07","2017/2018");
INSERT INTO absensi VALUES("79","A15003","Hadir","Hadir","Hadir","2018-12-07","2017/2018");
INSERT INTO absensi VALUES("80","A15006","Hadir","Hadir","Hadir","2018-12-07","2017/2018");
INSERT INTO absensi VALUES("81","A15007","Hadir","Hadir","Hadir","2018-12-07","2017/2018");
INSERT INTO absensi VALUES("82","A15010","Hadir","Hadir","Hadir","2018-12-07","2017/2018");
INSERT INTO absensi VALUES("83","A15012","Hadir","Hadir","Hadir","2018-12-07","2017/2018");
INSERT INTO absensi VALUES("84","A15000","Hadir","Hadir","Hadir","2018-12-07","2017/2018");
INSERT INTO absensi VALUES("85","A15005","Hadir","Hadir","Hadir","2018-12-07","2017/2018");
INSERT INTO absensi VALUES("86","A15008","Hadir","Hadir","Hadir","2018-12-07","2017/2018");
INSERT INTO absensi VALUES("87","A15013","Hadir","Hadir","Hadir","2018-12-07","2017/2018");
INSERT INTO absensi VALUES("88","A15015","Hadir","Hadir","Hadir","2018-12-07","2017/2018");
INSERT INTO absensi VALUES("89","A15000","Hadir","Hadir","Hadir","2018-12-08","2017/2018");
INSERT INTO absensi VALUES("90","A15005","Hadir","Hadir","Hadir","0000-00-00","2017/2018");
INSERT INTO absensi VALUES("91","A15008","Hadir","Hadir","Hadir","0000-00-00","2017/2018");
INSERT INTO absensi VALUES("92","A15013","Hadir","Hadir","Hadir","0000-00-00","2017/2018");
INSERT INTO absensi VALUES("93","A15015","Hadir","Hadir","Hadir","0000-00-00","2017/2018");
INSERT INTO absensi VALUES("94","A15000","Hadir","Hadir","Hadir","2018-12-09","2017/2018");
INSERT INTO absensi VALUES("95","A15005","Hadir","Hadir","Hadir","2018-12-09","2017/2018");
INSERT INTO absensi VALUES("96","A15008","Hadir","Hadir","Hadir","2018-12-09","2017/2018");
INSERT INTO absensi VALUES("97","A15013","Hadir","Hadir","Hadir","2018-12-09","2017/2018");
INSERT INTO absensi VALUES("98","A15015","Hadir","Hadir","Hadir","2018-12-09","2017/2018");
INSERT INTO absensi VALUES("99","A15002","Hadir","Hadir","Hadir","2018-12-10","2017/2018");
INSERT INTO absensi VALUES("100","A15004","Hadir","Hadir","Hadir","0000-00-00","2017/2018");
INSERT INTO absensi VALUES("101","A15009","Hadir","Hadir","Hadir","0000-00-00","2017/2018");
INSERT INTO absensi VALUES("102","A15011","Hadir","Hadir","Hadir","0000-00-00","2017/2018");
INSERT INTO absensi VALUES("103","A15002","Hadir","Hadir","Hadir","2018-12-11","2017/2018");
INSERT INTO absensi VALUES("104","A15004","Hadir","Hadir","Hadir","0000-00-00","2017/2018");
INSERT INTO absensi VALUES("105","A15009","Hadir","Hadir","Hadir","0000-00-00","2017/2018");
INSERT INTO absensi VALUES("106","A15011","Hadir","Hadir","Hadir","0000-00-00","2017/2018");
INSERT INTO absensi VALUES("107","A15002","Hadir","Hadir","Hadir","0000-00-00","2017/2018");
INSERT INTO absensi VALUES("108","A15004","Hadir","Hadir","Hadir","0000-00-00","2017/2018");
INSERT INTO absensi VALUES("109","A15009","Hadir","Hadir","Hadir","0000-00-00","2017/2018");
INSERT INTO absensi VALUES("110","A15011","Hadir","Hadir","Hadir","0000-00-00","2017/2018");
INSERT INTO absensi VALUES("111","A15000","Hadir","Hadir","Hadir","2018-12-13","2017/2018");
INSERT INTO absensi VALUES("112","A15000","Hadir","Hadir","Hadir","2018-12-13","2017/2018");
INSERT INTO absensi VALUES("113","A15000","Hadir","Hadir","Hadir","2018-12-13","2017/2018");
INSERT INTO absensi VALUES("114","A15000","Hadir","Hadir","Hadir","2018-12-13","2017/2018");
INSERT INTO absensi VALUES("115","A15002","Hadir","Sakit","Hadir","0000-00-00","2017/2018");
INSERT INTO absensi VALUES("116","A15004","Hadir","Izin","Hadir","0000-00-00","2017/2018");
INSERT INTO absensi VALUES("117","A15009","Hadir","Hadir","Hadir","0000-00-00","2017/2018");
INSERT INTO absensi VALUES("118","A15011","Hadir","Hadir","Hadir","0000-00-00","2017/2018");
INSERT INTO absensi VALUES("119","A15002","Hadir","Hadir","Hadir","0000-00-00","2017/2018");
INSERT INTO absensi VALUES("120","A15004","Hadir","Hadir","Hadir","0000-00-00","2017/2018");
INSERT INTO absensi VALUES("121","A15009","Hadir","Hadir","Hadir","0000-00-00","2017/2018");
INSERT INTO absensi VALUES("122","A15011","Hadir","Hadir","Hadir","0000-00-00","2017/2018");
INSERT INTO absensi VALUES("123","A15002","Izin","Hadir","Hadir","2018-12-15","2017/2018");
INSERT INTO absensi VALUES("124","A15004","Hadir","Izin","Hadir","0000-00-00","2017/2018");
INSERT INTO absensi VALUES("125","A15009","Hadir","Hadir","Izin","0000-00-00","2017/2018");
INSERT INTO absensi VALUES("126","A15011","Hadir","Izin","Hadir","0000-00-00","2017/2018");
INSERT INTO absensi VALUES("127","A15002","Hadir","Hadir","Hadir","2018-12-16","2017/2018");
INSERT INTO absensi VALUES("128","A15004","Hadir","Hadir","Hadir","0000-00-00","2017/2018");
INSERT INTO absensi VALUES("129","A15009","Hadir","Hadir","Hadir","0000-00-00","2017/2018");
INSERT INTO absensi VALUES("130","A15011","Hadir","Hadir","Hadir","0000-00-00","2017/2018");
INSERT INTO absensi VALUES("131","A15002","Hadir","Hadir","Hadir","2018-12-17","2017/2018");
INSERT INTO absensi VALUES("132","A15004","Hadir","Hadir","Hadir","2018-12-17","2017/2018");
INSERT INTO absensi VALUES("133","A15009","Hadir","Hadir","Hadir","2018-12-17","2017/2018");
INSERT INTO absensi VALUES("134","A15011","Hadir","Hadir","Hadir","2018-12-17","2017/2018");
INSERT INTO absensi VALUES("135","A15000","Hadir","Hadir","Hadir","2018-12-11","2017/2018");
INSERT INTO absensi VALUES("136","A15005","Hadir","Hadir","Hadir","2018-12-11","2017/2018");
INSERT INTO absensi VALUES("137","A15008","Hadir","Hadir","Hadir","2018-12-11","2017/2018");
INSERT INTO absensi VALUES("138","A15013","Hadir","Hadir","Hadir","2018-12-11","2017/2018");
INSERT INTO absensi VALUES("139","A15015","Hadir","Hadir","Hadir","2018-12-11","2017/2018");
INSERT INTO absensi VALUES("140","A15001","Hadir","Hadir","Hadir","2018-12-11","2017/2018");
INSERT INTO absensi VALUES("141","A15003","Hadir","Hadir","Hadir","2018-12-11","2017/2018");
INSERT INTO absensi VALUES("142","A15006","Hadir","Hadir","Hadir","2018-12-11","2017/2018");
INSERT INTO absensi VALUES("143","A15007","Hadir","Hadir","Hadir","2018-12-11","2017/2018");
INSERT INTO absensi VALUES("144","A15010","Hadir","Hadir","Hadir","2018-12-11","2017/2018");
INSERT INTO absensi VALUES("145","A15012","Hadir","Hadir","Hadir","2018-12-11","2017/2018");
INSERT INTO absensi VALUES("146","A15000","Hadir","Hadir","Hadir","2018-12-19","2017/2018");
INSERT INTO absensi VALUES("147","A15005","Hadir","Hadir","Hadir","2018-12-19","2017/2018");
INSERT INTO absensi VALUES("148","A15008","Hadir","Hadir","Hadir","2018-12-19","2017/2018");
INSERT INTO absensi VALUES("149","A15013","Sakit","Hadir","Hadir","2018-12-19","2017/2018");
INSERT INTO absensi VALUES("150","A15015","Hadir","Hadir","Alfa","2018-12-19","2017/2018");



DROP TABLE guru;

CREATE TABLE `guru` (
  `ID_GURU` int(11) NOT NULL AUTO_INCREMENT,
  `NAMA_GURU` varchar(40) DEFAULT NULL,
  `TGL_LAHIR_GURU` date DEFAULT NULL,
  `NO_HP_GURU` varchar(13) DEFAULT NULL,
  `EMAIL_GURU` varchar(35) DEFAULT NULL,
  PRIMARY KEY (`ID_GURU`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO guru VALUES("1","Saifudin","1957-03-09","0812345566778","saifudin@polije.ac.id");
INSERT INTO guru VALUES("2","Deny Setiawan","1973-05-25","081332334335","setiawan@polije.ac.id");
INSERT INTO guru VALUES("3","Rike Nurmala","1978-11-08","0822232242251","nurmala@polije.ac.id");
INSERT INTO guru VALUES("4","Vita Atmala","1980-09-09","081234234234","atmala@polije.ac.id");
INSERT INTO guru VALUES("5","Budi Santoso","1977-12-19","0873577878735","santoso@polije.ac.id");



DROP TABLE kelas;

CREATE TABLE `kelas` (
  `ID_KELAS` int(11) NOT NULL,
  `NAMA_KELAS` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`ID_KELAS`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO kelas VALUES("1","Bacaan");
INSERT INTO kelas VALUES("2","Lambatan");
INSERT INTO kelas VALUES("3","Cepatan");



DROP TABLE mapel;

CREATE TABLE `mapel` (
  `KD_MAPEL` varchar(10) NOT NULL,
  `MAPEL` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`KD_MAPEL`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO mapel VALUES("M01","Surat Al-Baqarah");
INSERT INTO mapel VALUES("M02","Bahasa Inggris");
INSERT INTO mapel VALUES("M03","Bahasa Arab");
INSERT INTO mapel VALUES("M04","Surat Al-Mulks");
INSERT INTO mapel VALUES("M05","Thaharah");
INSERT INTO mapel VALUES("M06","Tajwid");
INSERT INTO mapel VALUES("M07","Adab Pencari Ilmu");
INSERT INTO mapel VALUES("M08","Qira\'ah Al-Qur\'an");
INSERT INTO mapel VALUES("M09","Hafalan Surat Pendek");
INSERT INTO mapel VALUES("M10","Hafalan Do\'a");
INSERT INTO mapel VALUES("M12"," Bahasa Inggris 3");



DROP TABLE nilai;

CREATE TABLE `nilai` (
  `ID_NILAI` int(11) NOT NULL AUTO_INCREMENT,
  `ID_GURU` int(11) DEFAULT NULL,
  `NO_INDUK` varchar(10) DEFAULT NULL,
  `KD_MAPEL` varchar(10) DEFAULT NULL,
  `NILAI` varchar(5) DEFAULT NULL,
  `SEMESTER` varchar(6) NOT NULL,
  `THN_AJAR` varchar(10) NOT NULL,
  PRIMARY KEY (`ID_NILAI`),
  KEY `FK_RELATIONSHIP_5` (`NO_INDUK`),
  KEY `FK_RELATIONSHIP_3` (`KD_MAPEL`),
  KEY `FK_RELATIONSHIP_4` (`ID_GURU`),
  CONSTRAINT `FK_RELATIONSHIP_3` FOREIGN KEY (`KD_MAPEL`) REFERENCES `mapel` (`KD_MAPEL`),
  CONSTRAINT `FK_RELATIONSHIP_4` FOREIGN KEY (`ID_GURU`) REFERENCES `guru` (`ID_GURU`),
  CONSTRAINT `FK_RELATIONSHIP_5` FOREIGN KEY (`NO_INDUK`) REFERENCES `siswa` (`NO_INDUK`)
) ENGINE=InnoDB AUTO_INCREMENT=114 DEFAULT CHARSET=latin1;

INSERT INTO nilai VALUES("1","1","A15000","M01","80","genap","2017/2018");
INSERT INTO nilai VALUES("2","2","A15000","M02","85","genap","2017/2018");
INSERT INTO nilai VALUES("3","3","A15000","M03","85","genap","2017/2018");
INSERT INTO nilai VALUES("4","4","A15000","M04","80","genap","2017/2018");
INSERT INTO nilai VALUES("6","1","A15000","M06","87","genap","2017/2018");
INSERT INTO nilai VALUES("7","2","A15000","M07","78","genap","2017/2018");
INSERT INTO nilai VALUES("8","3","A15000","M08","85","genap","2017/2018");
INSERT INTO nilai VALUES("9","4","A15000","M09","90","genap","2017/2018");
INSERT INTO nilai VALUES("10","5","A15000","M10","95","genap","2017/2018");
INSERT INTO nilai VALUES("11","1","A15001","M01","82","genap","2017/2018");
INSERT INTO nilai VALUES("12","2","A15001","M02","86","genap","2017/2018");
INSERT INTO nilai VALUES("13","3","A15001","M03","80","genap","2017/2018");
INSERT INTO nilai VALUES("14","4","A15001","M04","75","genap","2017/2018");
INSERT INTO nilai VALUES("15","5","A15001","M05","90","genap","2017/2018");
INSERT INTO nilai VALUES("16","1","A15001","M06","87","genap","2017/2018");
INSERT INTO nilai VALUES("17","2","A15001","M07","88","genap","2017/2018");
INSERT INTO nilai VALUES("18","3","A15001","M08","80","genap","2017/2018");
INSERT INTO nilai VALUES("19","4","A15001","M09","85","genap","2017/2018");
INSERT INTO nilai VALUES("20","5","A15001","M10","83","genap","2017/2018");
INSERT INTO nilai VALUES("21","1","A15002","M01","89","genap","2017/2018");
INSERT INTO nilai VALUES("22","2","A15002","M02","84","genap","2017/2018");
INSERT INTO nilai VALUES("23","3","A15002","M03","76","genap","2017/2018");
INSERT INTO nilai VALUES("24","4","A15002","M04","78","genap","2017/2018");
INSERT INTO nilai VALUES("25","5","A15002","M05","80","genap","2017/2018");
INSERT INTO nilai VALUES("26","1","A15002","M06","85","genap","2017/2018");
INSERT INTO nilai VALUES("27","2","A15002","M07","85","genap","2017/2018");
INSERT INTO nilai VALUES("28","3","A15002","M08","90","genap","2017/2018");
INSERT INTO nilai VALUES("29","4","A15002","M09","75","genap","2017/2018");
INSERT INTO nilai VALUES("30","5","A15002","M10","80","genap","2017/2018");
INSERT INTO nilai VALUES("31","1","A15003","M01","85","genap","2017/2018");
INSERT INTO nilai VALUES("32","2","A15003","M02","87","genap","2017/2018");
INSERT INTO nilai VALUES("33","3","A15003","M03","87","genap","2017/2018");
INSERT INTO nilai VALUES("34","4","A15003","M04","88","genap","2017/2018");
INSERT INTO nilai VALUES("35","5","A15003","M05","88","genap","2017/2018");
INSERT INTO nilai VALUES("36","1","A15003","M06","80","genap","2017/2018");
INSERT INTO nilai VALUES("37","2","A15003","M07","90","genap","2017/2018");
INSERT INTO nilai VALUES("38","3","A15003","M08","85","genap","2017/2018");
INSERT INTO nilai VALUES("39","4","A15003","M09","85","genap","2017/2018");
INSERT INTO nilai VALUES("40","5","A15003","M10","70","genap","2017/2018");
INSERT INTO nilai VALUES("41","1","A15004","M01","82","genap","2017/2018");
INSERT INTO nilai VALUES("42","2","A15004","M02","77","genap","2017/2018");
INSERT INTO nilai VALUES("43","3","A15004","M03","87","genap","2017/2018");
INSERT INTO nilai VALUES("44","4","A15004","M04","85","genap","2017/2018");
INSERT INTO nilai VALUES("45","5","A15004","M05","85","genap","2017/2018");
INSERT INTO nilai VALUES("46","1","A15004","M06","80","genap","2017/2018");
INSERT INTO nilai VALUES("47","2","A15004","M07","80","genap","2017/2018");
INSERT INTO nilai VALUES("48","3","A15004","M08","75","genap","2017/2018");
INSERT INTO nilai VALUES("49","4","A15004","M09","75","genap","2017/2018");
INSERT INTO nilai VALUES("50","5","A15004","M10","80","genap","2017/2018");
INSERT INTO nilai VALUES("51","1","A15005","M01","80","genap","2017/2018");
INSERT INTO nilai VALUES("52","2","A15005","M02","87","genap","2017/2018");
INSERT INTO nilai VALUES("53","3","A15005","M03","88","genap","2017/2018");
INSERT INTO nilai VALUES("54","4","A15005","M04","88","genap","2017/2018");
INSERT INTO nilai VALUES("55","5","A15005","M05","79","genap","2017/2018");
INSERT INTO nilai VALUES("56","1","A15005","M06","85","genap","2017/2018");
INSERT INTO nilai VALUES("57","2","A15005","M07","82","genap","2017/2018");
INSERT INTO nilai VALUES("58","3","A15005","M08","85","genap","2017/2018");
INSERT INTO nilai VALUES("59","4","A15005","M09","85","genap","2017/2018");
INSERT INTO nilai VALUES("60","5","A15005","M10","87","genap","2017/2018");
INSERT INTO nilai VALUES("61","1","A15006","M01","90","genap","2017/2018");
INSERT INTO nilai VALUES("62","2","A15006","M02","85","genap","2017/2018");
INSERT INTO nilai VALUES("63","3","A15006","M03","85","genap","2017/2018");
INSERT INTO nilai VALUES("64","4","A15006","M04","82","genap","2017/2018");
INSERT INTO nilai VALUES("65","5","A15006","M05","80","genap","2017/2018");
INSERT INTO nilai VALUES("66","1","A15006","M06","79","genap","2017/2018");
INSERT INTO nilai VALUES("67","2","A15006","M07","87","genap","2017/2018");
INSERT INTO nilai VALUES("68","3","A15006","M08","75","genap","2017/2018");
INSERT INTO nilai VALUES("69","4","A15006","M09","90","genap","2017/2018");
INSERT INTO nilai VALUES("70","5","A15006","M10","85","genap","2017/2018");
INSERT INTO nilai VALUES("71","1","A15007","M01","85","genap","2017/2018");
INSERT INTO nilai VALUES("72","2","A15007","M02","83","genap","2017/2018");
INSERT INTO nilai VALUES("73","3","A15007","M03","82","genap","2017/2018");
INSERT INTO nilai VALUES("74","4","A15007","M04","82","genap","2017/2018");
INSERT INTO nilai VALUES("75","5","A15007","M05","80","genap","2017/2018");
INSERT INTO nilai VALUES("76","1","A15007","M06","85","genap","2017/2018");
INSERT INTO nilai VALUES("77","2","A15007","M07","78","genap","2017/2018");
INSERT INTO nilai VALUES("78","3","A15007","M08","78","genap","2017/2018");
INSERT INTO nilai VALUES("79","4","A15007","M09","85","genap","2017/2018");
INSERT INTO nilai VALUES("80","5","A15007","M10","85","genap","2017/2018");
INSERT INTO nilai VALUES("81","1","A15008","M01","82","genap","2017/2018");
INSERT INTO nilai VALUES("82","2","A15008","M02","80","genap","2017/2018");
INSERT INTO nilai VALUES("83","3","A15008","M03","79","genap","2017/2018");
INSERT INTO nilai VALUES("84","4","A15008","M04","90","genap","2017/2018");
INSERT INTO nilai VALUES("86","1","A15008","M06","92","genap","2017/2018");
INSERT INTO nilai VALUES("87","2","A15008","M07","81","genap","2017/2018");
INSERT INTO nilai VALUES("88","3","A15008","M08","87","genap","2017/2018");
INSERT INTO nilai VALUES("89","4","A15008","M09","82","genap","2017/2018");
INSERT INTO nilai VALUES("90","5","A15008","M10","85","genap","2017/2018");
INSERT INTO nilai VALUES("91","1","A15009","M01","77","genap","2017/2018");
INSERT INTO nilai VALUES("92","2","A15009","M02","87","genap","2017/2018");
INSERT INTO nilai VALUES("93","3","A15009","M03","87","genap","2017/2018");
INSERT INTO nilai VALUES("94","4","A15009","M04","90","genap","2017/2018");
INSERT INTO nilai VALUES("95","5","A15009","M05","92","genap","2017/2018");
INSERT INTO nilai VALUES("96","1","A15009","M06","85","genap","2017/2018");
INSERT INTO nilai VALUES("97","2","A15009","M07","76","genap","2017/2018");
INSERT INTO nilai VALUES("98","3","A15009","M08","87","genap","2017/2018");
INSERT INTO nilai VALUES("99","4","A15009","M09","81","genap","2017/2018");
INSERT INTO nilai VALUES("100","5","A15009","M10","90","genap","2017/2018");
INSERT INTO nilai VALUES("101","2","A15002","M02","85","ganjil","2018/2019");
INSERT INTO nilai VALUES("102","2","A15004","M02","79","ganjil","2018/2019");
INSERT INTO nilai VALUES("103","2","A15009","M02","90","ganjil","2018/2019");
INSERT INTO nilai VALUES("104","2","A15011","M02","80","ganjil","2018/2019");
INSERT INTO nilai VALUES("105","3","A15000","M03","78","ganjil","2018/2019");
INSERT INTO nilai VALUES("106","3","A15005","M03","78","ganjil","2018/2019");
INSERT INTO nilai VALUES("107","3","A15008","M03","78","ganjil","2018/2019");
INSERT INTO nilai VALUES("108","3","A15013","M03","78","ganjil","2018/2019");
INSERT INTO nilai VALUES("109","3","A15015","M03","78","ganjil","2018/2019");
INSERT INTO nilai VALUES("110","1","A15002","M02","90","ganjil","2017/2018");
INSERT INTO nilai VALUES("111","1","A15004","M02","80","ganjil","2017/2018");
INSERT INTO nilai VALUES("112","1","A15009","M02","95","ganjil","2017/2018");
INSERT INTO nilai VALUES("113","1","A15011","M02","86","ganjil","2017/2018");



DROP TABLE orang_tua;

CREATE TABLE `orang_tua` (
  `ID_ORTU` int(11) NOT NULL AUTO_INCREMENT,
  `USER_ORTU` int(11) DEFAULT NULL,
  `NAMA_AYAH` varchar(30) DEFAULT NULL,
  `NAMA_IBU` varchar(30) DEFAULT NULL,
  `NAMA_WALI` varchar(30) DEFAULT NULL,
  `NO_HP_ORTU` varchar(13) DEFAULT NULL,
  PRIMARY KEY (`ID_ORTU`),
  KEY `USER_ORTU` (`USER_ORTU`),
  CONSTRAINT `orang_tua_ibfk_1` FOREIGN KEY (`USER_ORTU`) REFERENCES `user` (`ID_USER`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

INSERT INTO orang_tua VALUES("1","","Mahfud","Juminah","Mahfud","085123456789");
INSERT INTO orang_tua VALUES("2","9","Hendra","Siti Aminah","Hendra","083123281");
INSERT INTO orang_tua VALUES("3","","Jefri","Rahma","Jefri","087337338339");
INSERT INTO orang_tua VALUES("4","","Rahmat","Jumintem","Rahmat","081223224228");
INSERT INTO orang_tua VALUES("5","46","Kamilur","Setyawati","Kamilur","085227228229");
INSERT INTO orang_tua VALUES("6","48","Nurhasan","Yunita","Nurhasan","089765764763");
INSERT INTO orang_tua VALUES("7","","Prayogo","Preyta","Prayogo","7777777777");
INSERT INTO orang_tua VALUES("8","","Joko Trisno","Heni","Joko Trisno","087375344900");
INSERT INTO orang_tua VALUES("9","","Entus Susmono","Yanti","Entus Susmono","");
INSERT INTO orang_tua VALUES("10","","Yoga","Kinanti","Yoga","");
INSERT INTO orang_tua VALUES("11","","Test6","Test6","walim","hpo");
INSERT INTO orang_tua VALUES("12","","","","walim","hpo");
INSERT INTO orang_tua VALUES("13","","Test6","Test6","walim","hpo");
INSERT INTO orang_tua VALUES("14","","Test6","Test6","walim","hpo");
INSERT INTO orang_tua VALUES("15","","qweq","qweq","qweq","qweq");
INSERT INTO orang_tua VALUES("16","","qweq","qweq","qweq","qweq");
INSERT INTO orang_tua VALUES("17","","qweq","qweq","qweq","qweqo");
INSERT INTO orang_tua VALUES("18","","qweq","qweq","qweq","qweqo");
INSERT INTO orang_tua VALUES("19","","Test6","Test6","Test6","87581723");
INSERT INTO orang_tua VALUES("21","","Test6","Test6","Test6","87581723");
INSERT INTO orang_tua VALUES("22","","Test7","Test7","Test7","1239812");
INSERT INTO orang_tua VALUES("23","","Test7","Test7","Test7","1239812");



DROP TABLE pengumuman;

CREATE TABLE `pengumuman` (
  `ID_PENGUMUMAN` int(11) NOT NULL AUTO_INCREMENT,
  `JUDUL` varchar(100) DEFAULT NULL,
  `ISI` text,
  `TIME` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID_PENGUMUMAN`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO pengumuman VALUES("1","Pembayaran SPP","Dimohon untuk seluruh santri segera melakukan pelunasan SPP bulanan paling lambat tanggal 10","2018-12-24 23:04:59");



DROP TABLE siswa;

CREATE TABLE `siswa` (
  `NO_INDUK` varchar(10) NOT NULL,
  `ID_KELAS` int(11) DEFAULT NULL,
  `ID_USER` int(11) DEFAULT NULL,
  `ID_GURU` int(11) DEFAULT NULL,
  `ID_ORTU` int(11) DEFAULT NULL,
  `NAMA_SISWA` varchar(30) DEFAULT NULL,
  `TEMPAT_LAHIR` varchar(15) DEFAULT NULL,
  `TANGGAL_LAHIR` date DEFAULT NULL,
  `JENIS_KELAMIN` varchar(10) DEFAULT NULL,
  `GOL_DARAH` varchar(5) DEFAULT NULL,
  `STATUS` varchar(7) NOT NULL,
  `ANGKATAN` varchar(10) NOT NULL,
  `ALAMAT` varchar(100) NOT NULL,
  `HP` varchar(13) DEFAULT NULL,
  `EMAIL` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`NO_INDUK`),
  KEY `FK_RELATIONSHIP_11` (`ID_KELAS`),
  KEY `FK_RELATIONSHIP_8` (`ID_ORTU`),
  KEY `FK_RELATIONSHIP_10` (`ID_GURU`),
  KEY `ID_USER` (`ID_USER`),
  CONSTRAINT `FK_RELATIONSHIP_10` FOREIGN KEY (`ID_GURU`) REFERENCES `guru` (`ID_GURU`),
  CONSTRAINT `FK_RELATIONSHIP_11` FOREIGN KEY (`ID_KELAS`) REFERENCES `kelas` (`ID_KELAS`),
  CONSTRAINT `FK_RELATIONSHIP_8` FOREIGN KEY (`ID_ORTU`) REFERENCES `orang_tua` (`ID_ORTU`),
  CONSTRAINT `siswa_ibfk_2` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO siswa VALUES("A15000","2","5","1","1","Ahmad Taufik","Jember","1999-03-08","Laki-laki","B","Aktif","2017/2018","Jl. in aja dulu, Kec. Kepo , Kabupaten Jomblo","082334332338","taufik@polije.ac.id");
INSERT INTO siswa VALUES("A15001","3","6","2","2","Ahmad Zainuri","Situbondo","1998-09-12","Laki-laki","AB","Aktif","2017/2018","Jl.in aja dulu, Desa Kaliaja jodoh rt/rw. 01/01","082345678901","zainuri@polije.ac.id");
INSERT INTO siswa VALUES("A15002","1","7","3","3","Budi Doremi","Jakarta","1998-09-12","Laki-laki","O","Aktif","2017/2018","","081223344559","doremi@polije.ac.id");
INSERT INTO siswa VALUES("A15003","3","44","4","4","Celine Anita","Bandung","1999-03-14","Perempuan","A","Aktif","2017/2018","","082334455660","anita@polije.ac.id");
INSERT INTO siswa VALUES("A15004","1","45","5","5","Dina Tarisa","Surabaya","1999-03-25","Perempuan","O","Aktif","2017/2018","","08523451234","tarisa@polije.ac.id");
INSERT INTO siswa VALUES("A15005","2","47","1","6","Endang Astuti","Bojonegoro","1998-12-12","Perempuan","AB","Aktif","2017/2018","","085258411122","astuti@polije.ac.id");
INSERT INTO siswa VALUES("A15006","3","","2","7","Fadlan Aziz","Medan ","1998-10-12","Laki-laki","B","Aktif","2017/2018","","081234455667","aziz@polije.ac.id");
INSERT INTO siswa VALUES("A15007","3","8","3","8","Iqbal Fauzi","Kalisat","1999-03-08","Laki-laki","B","Aktif","2017/2018","","082334332338","fauzi@polije.ac.id");
INSERT INTO siswa VALUES("A15008","2","","4","9","Mina Ursia","Situbondo","1999-04-18","Perempuan","O","Aktif","2018/2019","","087331931987","ursia@polije.ac.id");
INSERT INTO siswa VALUES("A15009","1","10","2","10","UBAH DATA","Jember","1998-10-09","Laki-laki","B","Aktif","2018/2019","hjdsatuyiuoi","085244255277","UBAH@polije.ac.id");
INSERT INTO siswa VALUES("A15010","3","","4","5","Coba Insert","Coba Insert","2000-10-12","Laki-laki","A","BELUM K","2015/2016","","08523456718","coba@insert.com");
INSERT INTO siswa VALUES("A15011","1","","2","4","Coba Insert Kedua","Coba Insert Ked","2000-10-13","Perempuan","O","Lulus","2015/2016","","08523456719","coba_kedua@insert.com");
INSERT INTO siswa VALUES("A15012","3","","1","10","Coba Insert Ketiga","Coba Insert Ket","2000-10-14","Laki-laki","O","Berhent","2017/2018","","02378127387","tuapayers@gmail.com");
INSERT INTO siswa VALUES("A15013","2","","5","13","Test","Jember","0000-00-00","Laki-laki","B","Aktif","2017/2018","","082338227116","test@progres.com");
INSERT INTO siswa VALUES("A15014","","","","","Test 5","Test5","0000-00-00","Laki-laki","B","Aktif","2016/2017","","93826498","aduaigsd@373481");
INSERT INTO siswa VALUES("A15015","2","","1","23","Test7","Test7","1997-12-14","Laki-laki","A","Aktif","2015/2016","","18293971","asdhao");



DROP TABLE user;

CREATE TABLE `user` (
  `ID_USER` int(11) NOT NULL AUTO_INCREMENT,
  `USERNAME` varchar(20) DEFAULT NULL,
  `PASSWORD` varchar(20) DEFAULT NULL,
  `AKSES` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`ID_USER`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

INSERT INTO user VALUES("1","admin","admin","admin");
INSERT INTO user VALUES("2","guru1","guru1ASDA","guru");
INSERT INTO user VALUES("3","guru2","guru2","guru");
INSERT INTO user VALUES("4","guru3","guru3","guru");
INSERT INTO user VALUES("5","A15000@siswa","siswa1","siswa");
INSERT INTO user VALUES("6","siswa2","siswa2","siswa");
INSERT INTO user VALUES("7","siswa3","siswa3","siswa");
INSERT INTO user VALUES("8","ortu1","ortu1","ortu");
INSERT INTO user VALUES("9","ortu2","ortu2","ortu");
INSERT INTO user VALUES("10","ortu3","ortu3","ortu");
INSERT INTO user VALUES("44","A15003@siswa","siswa","siswa");
INSERT INTO user VALUES("45","A15004@siswa","siswa","siswa");
INSERT INTO user VALUES("46","A15004@wali","orangtua","ortu");
INSERT INTO user VALUES("47","A15005@siswa","siswa","siswa");
INSERT INTO user VALUES("48","A15005@wali","orangtua","ortu");
INSERT INTO user VALUES("49","admin3","admin3","admin");
INSERT INTO user VALUES("50","","d41d8cd98f00b204e980","admin");
INSERT INTO user VALUES("51","andmi","ee10c315eba2c75b403e","admin");



