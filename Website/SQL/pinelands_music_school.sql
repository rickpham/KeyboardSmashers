-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2016 at 04:30 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
CREATE DATABASE IF NOT EXISTS pinelands_music_school;
USE pinelands_music_school;


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pinelands_music_school`
--


-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `studentID` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(30) NOT NULL,
  `familyName` varchar(30) NOT NULL,
  `gender` enum('Male','Female','Other') NOT NULL,
  `DOB` date NOT NULL,
  `street` varchar(50) NOT NULL,
  `suburb` varchar(30) NOT NULL,
  `state` enum('QLD','NSW','ACT','VIC','TAS','SA','WA','NT') NOT NULL,
  `postcode` char(4) NOT NULL,
  `emailAddress` varchar(255) NOT NULL,
  `mobileNumber` varchar(11) DEFAULT NULL,
  `preferredDay` varchar(9) DEFAULT NULL,
  `preferredTime` char(7) DEFAULT NULL,
  `preferredTeacher` varchar(60) DEFAULT NULL,
  `preferredLanguage` text,
  `preferredGender` varchar(10) DEFAULT NULL,
  `guardianFirstName` varchar(30),
  `guardianLastName` varchar(30),
  `guardianEmail` varchar(255),
  `guardianPhoneNumber` varchar(11),
  `enroled` char(1) NOT NULL,
  PRIMARY KEY (`studentID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`studentID`, `firstName`, `familyName`, `gender`, `DOB`, `street`, `suburb`, `state`, `postcode`, `emailAddress`, `mobileNumber`, `preferredDay`, `preferredTime`, `preferredTeacher`, `preferredLanguage`, `preferredGender`, `guardianFirstName`, `guardianLastName`, `guardianEmail`, `guardianPhoneNumber`, `enroled`) VALUES
(1, 'Tom', 'Santos', 'Male', '2000-07-12', '39 main St', 'Sunnybank', 'QLD', '4012', 'tomsantos@gmail.com', '0426256076', NULL, NULL, NULL, NULL, NULL, 'John', 'Santos', 'john.santos@gmail.com', '0411348021', 'Y'),
(2, 'Hang', 'Su', 'Male', '1995-02-12', '64 cook st', 'Brisbane', 'QLD', '4075', 'suhangj123@gmail.com', '422893716', 'Monday', NULL, NULL,  'English', NULL, NULL, NULL, NULL, NULL, 'N'),
(3, 'Hang', 'Su', 'Male', '1995-12-24', '64 cook st', 'Brisbane', 'QLD', '4075', 'suhangj@sohu.com', '0422893716', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Y'),
(4,'Rick','Pham','Male','1994-03-12','32','Forest','VIC','1234','haha@pinelands.com','','title','','','','','','','','','Y'),
(5,'saldkfjsadf','alskdfjsadf','Male','1996-02-18','alskdfj','alskdjf','NSW','3333','asldkf@gmail.com','','','','','','','','','','','Y'),
(7,'Rick','Pham','Male','1995-12-31','39 melbane','Forest Lake','QLD','1234','suhangj@jj.com','','title','','','','','','','','','Y');
-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `teacherID` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(30) NOT NULL,
  `familyName` varchar(30) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `DOB` date NOT NULL,
  `street` varchar(50),
  `suburb` varchar(30),
  `state` enum('QLD','NSW','ACT','VIC','TAS','SA','WA','NT'),
  `postcode` char(4),
  `qualifications` text,
  `emailAddress` varchar(255) NOT NULL,
  `mobileNumber` varchar(11) DEFAULT NULL,
  `otherNumber` varchar(11) DEFAULT NULL,
  `instrumentType` varchar(30) NOT NULL,
  `spokenLanguage` text NOT NULL,
  `skillLevel` enum('1','2','3','4','5') DEFAULT NULL,        -- ---------- THIS NEEDS IMPROVEMENT FOR CLARITY
  `comments` text,
  PRIMARY KEY (`teacherID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`teacherID`, `firstName`, `familyName`, `gender`, `DOB`, `street`, `suburb`, `state`, `postcode`, `qualifications`, `emailAddress`, `mobileNumber`, `otherNumber`, `instrumentType`, `spokenLanguage`, `skillLevel`, `comments`) VALUES
(1, 'bob', 'bobby', 'Male', '1983-02-15', '43 Turkey Street', 'Hawthorne', 'QLD', '4444', 'Graduated', 'bob.bobby@gmail.com', NULL, '07123456', 'Piano,Guitar', 'English, Spanish', NULL, 'Great teacher'),
(2, 'Hang', 'Su', 'Male', '1983-01-10', '42 Turkey Street', 'Hawthorne', 'QLD', '4444', 'Graduated', 'suhang@gmail.com', NULL, '07234567', 'Guitar,Violin', 'English,Chinese', NULL, 'Great teacher'),
(3, 'Luna', 'Brown', 'Female', '1990-10-22', '41 Turkey Street', 'Hawthorne', 'QLD', '4444', 'Graduated', 'Luna123@gmail.com', NULL, '07134565', 'Piano', 'English', NULL, 'Great teacher');


-- --------------------------------------------------------

--
-- Table structure for table `instruments`
--

CREATE TABLE `instruments` (
  `instrumentID` int(11) NOT NULL AUTO_INCREMENT,
  `instrumentType` varchar(30) NOT NULL,
  `hireCost` decimal(5,2) DEFAULT NULL,
  `hireCostLesson` decimal(5,2) DEFAULT NULL,
  `instrumentSize` varchar(50),
  `brand` varchar(50),
  `conditionQuality` varchar(250) NOT NULL,
  `Quantity` int(3) NOT NULL,
  PRIMARY KEY (`instrumentID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `instruments`
--

INSERT INTO `instruments` (`instrumentID`, `instrumentType`, `hireCost`, `hireCostLesson`, `instrumentSize`, `brand`, `conditionQuality`, `Quantity`) VALUES
(1, 'Guitar', '50.00', '5.00', 'Standard', 'Tanglewood', 'New', 0),
(2, 'Violin', '20.00', '2.00', '3 quarters', 'Stentor', 'Good - slight wear on D string', 50);

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `classID` int(11) NOT NULL AUTO_INCREMENT,
  `teacherID` int(11) NOT NULL,
  `className` varchar(255) NOT NULL,
  `classIdname` varchar(6) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `classDay` enum('Monday','Tuesday','Wednesday','Thursday','Friday') NOT NULL,
  `startTime` time NOT NULL,
  `endTime` time NOT NULL,
  `roomNumber` char(4) DEFAULT NULL,
  `classCapacity` int(2) NOT NULL,
  PRIMARY KEY (`classID`),
  FOREIGN KEY (`teacherID`) REFERENCES `teachers` (`teacherID`)
  ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`classID`, `teacherID`, `className`, `classIdname`, `startDate`, `endDate`, `classDay`, `startTime`, `endTime`, `roomNumber`, `classCapacity`) VALUES
(1, 1, 'Introduction to Piano', 'PIA101', '2016-10-20', '2017-01-31', 'Tuesday', '13:00:00', '14:00:00', 'F303', 0),
(2, 1, 'Advanced Guitar', 'GUI201', '2016-10-20', '2017-01-31', 'Thursday', '09:00:00', '10:00:00', 'P505', 26),
(3, 2, 'Introduction to Vilolin', 'VIL101', '2016-10-20', '2017-01-31', 'Tuesday', '13:00:00', '14:00:00', 'S303', 25),
(4, 3, 'Advanced Piano', 'PIA201', '2016-10-20', '2017-01-31', 'Friday', '13:00:00', '14:00:00', 'S304', 23),
(5, 2, 'Introduction to Violin', 'VIL101', '2016-10-20', '2017-01-31', 'Wednesday', '11:00:00', '12:00:00', 'S303', 25);


-- --------------------------------------------------------

--
-- Table structure for table `studentclass`
--

CREATE TABLE `studentclass` (
  `ID` int(3) NOT NULL AUTO_INCREMENT,
  `studentID` int(3) NOT NULL,
  `classID` int(3) NOT NULL,
  PRIMARY KEY (`ID`),
  FOREIGN KEY (`studentID`) REFERENCES `students` (`studentID`)
  ON DELETE CASCADE,
  FOREIGN KEY (`classID`) REFERENCES `classes` (`classID`)
  ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentclass`
--

INSERT INTO `studentclass` (`ID`, `studentID`, `classID`) VALUES
(1, 1, 4),
(2, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `instrumenthire`
--

CREATE TABLE `instrumenthire` (
  `hireID` int(11) NOT NULL AUTO_INCREMENT,
  `studentID` int(11) NOT NULL,
  `instrumentID` int(11) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `quantity` varchar(20),
  PRIMARY KEY (`hireID`),
  FOREIGN KEY (`studentID`) REFERENCES `students` (`studentID`)
  ON DELETE CASCADE,
  FOREIGN KEY (`instrumentID`) REFERENCES `instruments` (`instrumentID`)
  ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `instrumenthire`
--

INSERT INTO `instrumenthire` (`hireID`, `studentID`, `instrumentID`, `startDate`, `endDate`, `quantity`) VALUES
(68, 1, 2, '2016-10-06', '2017-01-06', '2'),
(69, 3, 1, '2016-09-06', '2017-09-06', '1');


-- Removing the following table because group decided it was easier to put it in students table.
/* -- --------------------------------------------------------

--
-- Table structure for table `studentguardian`
--

CREATE TABLE `studentguardian` (
  `guardianID` int(11) NOT NULL AUTO_INCREMENT,
  `studentID` int(11) NOT NULL,
  `guardianFirstName` varchar(30) NOT NULL,
  `guardianLastName` varchar(30) NOT NULL,
  `guardianEmail` varchar(255) NOT NULL,
  `guardianPhoneNumber` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`guardianID`),
  FOREIGN KEY (`studentID`) REFERENCES `students` (`studentID`)
  ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `studentguardian`
--

INSERT INTO `studentguardian` (`guardianID`, `studentID`, `guardianFirstName`, `guardianLastName`, `guardianEmail`, `guardianPhoneNumber`) VALUES
(4, 2, 'Bobbette', 'Fett', 'bobbette@gmail.com', '0422396716'),
(5, 1, 'Rudy', 'Rudyson', 'rudy@gmail.com', '0422893316');



 */
-- --------------------------------------------------------

--
-- Table structure for table `teachingcontract`
--

CREATE TABLE `teachingcontract` (
  `contractID` int(11) NOT NULL AUTO_INCREMENT,
  `studentID` int(11) NOT NULL,
  `teacherID` int(11) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `lessonType` varchar(30) DEFAULT NULL,
  `lessonDuration` enum('30','60') NOT NULL,
  `lessonCost` decimal(5,2) NOT NULL,
  `lessonFrequency` tinyint(4) NOT NULL,
  PRIMARY KEY (`contractID`),
  FOREIGN KEY (`studentID`) REFERENCES `Students` (`studentID`)
  ON DELETE CASCADE,
  FOREIGN KEY (`teacherID`) REFERENCES `Teachers` (`teacherID`)
  ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `teachingcontract`
--

INSERT INTO `teachingcontract` (`contractID`, `studentID`, `teacherID`, `startDate`, `endDate`, `lessonType`, 
	`lessonDuration`, `lessonCost`, `lessonFrequency`) VALUES
(1, 2, 3, '2016-02-06', '2017-01-06', 'Violin', '30', '50.00', '2'),
(2, 3, 3, '2016-02-06', '2017-01-06', 'Piano', '60', '40.00', '1');





-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `id` int(11) NOT NULL AUTO_INCREMENT,            -- THIS ID SHOULD BE RENAMED TO "managerID"
  `Username` varchar(45) UNIQUE NOT NULL,
  `Password` char(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`id`, `Username`, `Password`) VALUES
(1, 'm1234567', 'a329844518755c6987500cc3791e88e2d3b2722fc4a9944facc3d7fafbfbe533'); -- Unhashed password is "pinelands"


-- --------------------------------------------------------

--
-- Table structure for table `studentlogin`
--

CREATE TABLE `studentlogin` (
  `studentID` int(11) NOT NULL,
  `studentUsername` char(8) NOT NULL,
  `Password` char(64) NOT NULL,
  PRIMARY KEY (`studentUsername`),
  FOREIGN KEY (`studentID`) REFERENCES `students` (`studentID`)
  ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `studentlogin`
--

INSERT INTO `studentlogin` (`studentID`, `studentUsername`, `Password`) VALUES
(1, 'n1234567', '0b14d501a594442a01c6859541bcb3e8164d183d32937b851835442f69d5c94e'), -- Unhashed password is "password1"
(3, 'n1944332', '0034d29e693a3c6cd6cbc55a984e2504709309535bde828cdda1cc2966d6451f'), -- Unhashed password is "57fcf0819b6dd"
(4, 'n0111241', 'f484d6dc2a68603c77bd165e8598e30a3cf9c5d022c6e2d96172ed5fb6814a3a'),
(5, 'n0114154', 'ad7a3f21f068766d8a1d1f91d11d7189ff5ac84a6974d6471098c4bc11e65f20'),
(7, 'n0571081', 'baef7106ebb42465df59bb63b0fc58097d853724e0bf1cba14aa6faea83e8ee0');

-- --------------------------------------------------------

--
-- Table structure for table `teacherlogin`
--

CREATE TABLE `teacherlogin` (
  `teacherID` int(11) NOT NULL,
  `teacherUsername` varchar(8) NOT NULL,
  `Password` char(64) NOT NULL,
  PRIMARY KEY (`teacherUsername`),
  FOREIGN KEY (`teacherID`) REFERENCES `teachers` (`teacherID`)
  ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teacherlogin`
--

INSERT INTO `teacherlogin` (`teacherID`, `teacherUsername`, `Password`) VALUES
(1, 't1234567', '0b14d501a594442a01c6859541bcb3e8164d183d32937b851835442f69d5c94e'), -- Unhashed password is "password1"
(2, 't2345678', '948edbe7ede5aa7423476ae29dcd7d61e7711a071aea0d83698377effa896525'), -- Unhashed password is "Hello1"
(3, 't3456789', 'be98c2510e417405647facb89399582fc499c3de4452b3014857f92e6baad9a9'); -- Unhashed password is "Hello2"




-- --------------------------------------------------------

--
-- Table structure for table `publicAnnouncements`
--

CREATE TABLE `publicAnnouncements` (
  `announcementID` int NOT NULL AUTO_INCREMENT,
  `title` varchar(40),
  `content` text NOT NULL,
  PRIMARY KEY (`announcementID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `publicAnnouncements`
--

INSERT INTO `publicAnnouncements` (`announcementID`, `title`, `content`) VALUES
(1, 'Dead servers', 'asdlfjasdklfjaslkdjfalksdjf servers are down alsdkf. Go you troopers'),
(2, 'New parking', 'We made new motorbike parks for lols. Cars dont need parks.');




-- --------------------------------------------------------

--
-- Table structure for table `classAnnouncements`
--

CREATE TABLE `classAnnouncements` (
  `announcementID` int NOT NULL AUTO_INCREMENT,
  `classID` int NOT NULL,
  `title` varchar(40),
  `content` text NOT NULL,
  PRIMARY KEY (`announcementID`),
  FOREIGN KEY (`classID`) REFERENCES `classes` (`classID`)
  ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `classAnnouncements`
--

INSERT INTO `classAnnouncements` (`announcementID`, `classID`, `title`, `content`) VALUES
(1, 1, 'Class tomorrow', 'Despite the public holiday tomorrow, we are pushing on with class. Go you troopers'),
(2, 3, 'No class tomorrow', 'In spite of the public holiday tomorrow, we are having a break. Rest you troopers');




-- --------------------------------------------------------

--
-- Table structure for table `availableJobs`
--

CREATE TABLE `availableJobs` (
  `jobID` int NOT NULL AUTO_INCREMENT,
  `role` varchar(40),
  `description` text,
  `postDate` date,
  PRIMARY KEY (`jobID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `availableJobs`
--

INSERT INTO `availableJobs` (`jobID`, `role`, `description`, `postDate`) VALUES
(1, 'Piano teacher', 'Teaching students how to git gud', '2016-10-14'),
(2, 'Assistant Manager', 'Help out the manager. Need help. Halp', '2016-10-20');





-- --------------------------------------------------------

--
-- Table structure for table `jobSeekers`
--

CREATE TABLE `jobSeekers` (
  `seekerID` int NOT NULL AUTO_INCREMENT,
  `jobID` int NOT NULL,
  `firstName` varchar(45),
  `lastName` varchar(45),
  `emailAddress` varchar(45),
  `phoneNumber` varchar(15),
  `street` varchar(45),
  `suburb` varchar(45),
  `state` enum('QLD','NSW','ACT','VIC','TAS','SA','WA','NT') DEFAULT NULL,
  `postcode` char(4) NOT NULL,
  `cvPath` text,
  `accepted` enum('Yes', 'No', 'Pending'),
  PRIMARY KEY (`seekerID`),
  FOREIGN KEY (`jobID`) REFERENCES `availableJobs` (`jobID`)
  ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jobSeekers`
--

INSERT INTO `jobSeekers` (`seekerID`, `jobID`, `firstName`, `lastName`, `emailAddress`, `phoneNumber`, `street`, `suburb`, `state`, `postcode`, `cvPath`, `accepted`) VALUES
(1, 1, 'Stevo', 'Bongo', 'stevo@gmail.com', '0433333333', '1/11 Bro Street', 'Vale', 'QLD', '4011', '../images/file1.doc', 'Pending'),
(2, 1, 'Roggo', 'Nart', 'roggo@gmail.com', '0477777777', '2/11 Bro Street', 'Vale', 'QLD', '4011', '../images/file2.doc', 'Pending'),
(3, 2, 'Uli', 'Williamson', 'uli@gmail.com', '0422222222', '44 Sis Street', 'Treet', 'QLD', '4011', '../images/file3.pdf', 'No');



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
