
create database muftijst_db;

SET NAMES UTF8;
SET character_set_client='utf8';
SET character_set_results='utf8';
SET collation_connection='utf8_general_ci';

use muftijst_db;



CREATE TABLE `biografija` (
  `Id` int(11) NOT NULL auto_increment,
  `Naslov` varchar(100) NOT NULL,
  `Vrijeme` datetime NOT NULL,
  `Sadrzaj` text NOT NULL,
  `ImgPath1` varchar(100) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8  AUTO_INCREMENT=1;



CREATE TABLE `hadz` (
  `Id` int(11) NOT NULL auto_increment,
  `Naslov` varchar(100) NOT NULL,
  `Vrijeme` datetime NOT NULL,
  `Sadrzaj` text NOT NULL,
  `ImgPath1` varchar(100) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8  AUTO_INCREMENT=1;

CREATE TABLE `medzlisi` (
  `Id` int(11) NOT NULL auto_increment,
  `Naslov` varchar(100) NOT NULL,
  `Vrijeme` datetime NOT NULL,
  `Sadrzaj` text NOT NULL,
  `ImgPath1` varchar(100) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8  AUTO_INCREMENT=1;

CREATE TABLE `omuftijstvu` (
  `Id` int(11) NOT NULL auto_increment,
  `Naslov` varchar(100) NOT NULL,
  `Vrijeme` datetime NOT NULL,
  `Sadrzaj` text NOT NULL,
  `ImgPath1` varchar(100) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8  AUTO_INCREMENT=1;


CREATE TABLE `city` (
  `Id` int(11) NOT NULL auto_increment,
  `Naslov` varchar(100) NOT NULL,
  `Vrijeme` datetime NOT NULL,
  `Sadrzaj` text NOT NULL,
  `ImgPath1` varchar(100) NOT NULL,
  `ImgPath2` varchar(100) NOT NULL,
  `ImgPath3` varchar(100) NOT NULL,
  `Polazak` datetime NOT NULL,
  `Dolazak` datetime NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8  AUTO_INCREMENT=1;

CREATE TABLE `smjestaj` (
  `Id` int(11) NOT NULL auto_increment,
  `Naslov` varchar(100) NOT NULL,
  `Vrijeme` datetime NOT NULL,
  `Sadrzaj` text NOT NULL,
  `ImgPath1` varchar(100) NOT NULL,
  `ImgPath2` varchar(100) NOT NULL,
  `ImgPath3` varchar(100) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8  AUTO_INCREMENT=1;

CREATE TABLE `rentacar` (
  `Id` int(11) NOT NULL auto_increment,
  `Naslov` varchar(100) NOT NULL,
  `Vrijeme` datetime NOT NULL,
  `Sadrzaj` text NOT NULL,
  `ImgPath1` varchar(100) NOT NULL,
  `ImgPath2` varchar(100) NOT NULL,
  `ImgPath3` varchar(100) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8  AUTO_INCREMENT=1;

CREATE TABLE `kombinacija` (
  `Id` int(11) NOT NULL auto_increment,
  `Naslov` varchar(100) NOT NULL,
  `Vrijeme` datetime NOT NULL,
  `Sadrzaj` text NOT NULL,
  `ImgPath1` varchar(100) NOT NULL,
  `ImgPath2` varchar(100) NOT NULL,
  `ImgPath3` varchar(100) NOT NULL,
  `Polazak` datetime NOT NULL,
  `Dolazak` datetime NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8  AUTO_INCREMENT=1;

CREATE TABLE `rezervacije` (
  `Id` int(11) NOT NULL auto_increment,
  `Naslov` varchar(100) NOT NULL,  
  `Sadrzaj` text NOT NULL,
  `ImgPath1` varchar(100) NOT NULL,
  `ImgPath2` varchar(100) NOT NULL,
  `ImgPath3` varchar(100) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8  AUTO_INCREMENT=1;

CREATE TABLE `posebnaponuda` (
  `Id` int(11) NOT NULL auto_increment,
  `Naslov` varchar(100) NOT NULL,
  `Vrijeme` datetime NOT NULL,
  `Sadrzaj` text NOT NULL,
    `ImgPath1` varchar(100) NOT NULL,
  `ImgPath2` varchar(100) NOT NULL,
  `ImgPath3` varchar(100) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8  AUTO_INCREMENT=1;

CREATE TABLE `onama` (
  `Id` int(11) NOT NULL auto_increment,
  `Naslov` varchar(100) NOT NULL,
  `Vrijeme` datetime NOT NULL,
  `Sadrzaj` text NOT NULL,
  `ImgPath1` varchar(100) NOT NULL,
  `ImgPath2` varchar(100) NOT NULL,
  `ImgPath3` varchar(100) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8  AUTO_INCREMENT=1;

CREATE TABLE `kontakt` (
  `Id` int(11) NOT NULL auto_increment,
  `adresa` varchar(100) NOT NULL,
  `Vrijeme` datetime NOT NULL,
  `telefon` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,  
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8  AUTO_INCREMENT=1;

CREATE TABLE `sigurnost` (
  `Id` int(11) NOT NULL auto_increment,
  `Naslov` varchar(100) NOT NULL,
  `Vrijeme` datetime NOT NULL,
  `Sadrzaj` text NOT NULL,
  `ImgPath1` varchar(100) NOT NULL,
  `ImgPath2` varchar(100) NOT NULL,
  `ImgPath3` varchar(100) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8  AUTO_INCREMENT=1;

CREATE TABLE `impresije` (
  `Id` int(11) NOT NULL auto_increment,
  `Naslov` varchar(100) NOT NULL,
  `Vrijeme` datetime NOT NULL,
  `Sadrzaj` text NOT NULL,
  `ImgPath1` varchar(100) NOT NULL,
  `ImgPath2` varchar(100) NOT NULL,
  `ImgPath3` varchar(100) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8  AUTO_INCREMENT=1;

CREATE TABLE `lokacije` (
  `Id` int(11) NOT NULL auto_increment,
  `Naziv` varchar(100) NOT NULL,
  `Vrijeme` datetime NOT NULL,
  `Sadrzaj` text NOT NULL,
  `ImgPath1` varchar(100) NOT NULL,
  `ImgPath2` varchar(100) NOT NULL,
  `ImgPath3` varchar(100) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8  AUTO_INCREMENT=1;



