SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


CREATE TABLE `appointment` (
  `appointment_id` int(11) NOT NULL,
  `appointment_start` datetime NOT NULL,
  `appointment_end` datetime NOT NULL,
  `appointment_patient_name` varchar(100) DEFAULT NULL,
  `appointment_status` varchar(100) NOT NULL DEFAULT 'free',
  `appointment_patient_session` varchar(100) DEFAULT NULL,
  `doctor_id` int(11) NOT NULL,
  `pat_gwid` int(5) NOT NULL DEFAULT '40001'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `appointment` (`appointment_id`, `appointment_start`, `appointment_end`, `appointment_patient_name`, `appointment_status`, `appointment_patient_session`, `doctor_id`, `pat_gwid`) VALUES
(1, '2020-07-06 11:00:00', '2020-07-06 12:00:00', 'Back Pain', 'confirmed', 'kq1nufsb41899hmqefvjulg8fp', 30012, 40001),
(3, '2020-07-01 14:00:00', '2020-07-01 15:00:00', 'PTSD', 'confirmed', NULL, 30004, 40001),
(4, '2020-07-06 10:00:00', '2020-07-06 11:00:00', NULL, 'free', NULL, 30004, 40001),
(5, '2020-07-06 09:00:00', '2020-07-06 10:00:00', NULL, 'free', NULL, 30006, 40001),
(6, '2020-07-06 15:00:00', '2020-07-06 16:00:00', 'Flu Shot', 'confirmed', 'kq1nufsb41899hmqefvjulg8fp', 30006, 40001),
(7, '2020-07-06 16:00:00', '2020-07-06 17:00:00', NULL, 'free', NULL, 30007, 40001),
(9, '2020-07-06 11:00:00', '2020-07-06 12:00:00', NULL, 'free', NULL, 30003, 40001),
(10, '2020-07-06 11:00:00', '2020-07-06 12:00:00', NULL, 'free', NULL, 30010, 40001),
(11, '2020-07-06 15:00:00', '2020-07-06 16:00:00', NULL, 'free', NULL, 30002, 40001),
(12, '2020-07-06 14:00:00', '2020-07-06 15:00:00', NULL, 'free', NULL, 30001, 40001),
(14, '2020-07-05 09:00:00', '2020-07-05 10:00:00', 'Fever', 'confirmed', 'kq1nufsb41899hmqefvjulg8fp', 30009, 40001),
(15, '2020-07-07 10:00:00', '2020-07-07 11:00:00', NULL, 'free', NULL, 30011, 40001),
(16, '2020-07-07 11:00:00', '2020-07-07 12:00:00', NULL, 'free', NULL, 30005, 40001),
(17, '2020-07-07 12:00:00', '2020-07-07 13:00:00', NULL, 'free', NULL, 30008, 40001),
(18, '2020-07-07 14:00:00', '2020-07-07 15:00:00', NULL, 'free', NULL, 30004, 40001),
(20, '2020-07-07 16:00:00', '2020-07-07 17:00:00', NULL, 'free', NULL, 30007, 40001),
(22, '2020-07-07 14:00:00', '2020-07-07 15:00:00', NULL, 'free', NULL, 30012, 40001),
(23, '2020-07-07 12:00:00', '2020-07-07 13:00:00', NULL, 'free', NULL, 30002, 40001),
(24, '2020-07-07 11:00:00', '2020-07-07 12:00:00', NULL, 'free', NULL, 30010, 40001),
(26, '2020-07-08 11:00:00', '2020-07-08 12:00:00', NULL, 'free', NULL, 30011, 40001),
(27, '2020-07-09 15:00:00', '2020-07-09 16:00:00', NULL, 'free', NULL, 30003, 40001),
(29, '2020-07-09 16:00:00', '2020-07-09 17:00:00', NULL, 'free', NULL, 30002, 40001),
(30, '2020-07-10 09:00:00', '2020-07-10 10:00:00', NULL, 'free', NULL, 30009, 40001),
(31, '2020-07-10 10:00:00', '2020-07-10 11:00:00', NULL, 'free', NULL, 30011, 40001),
(32, '2020-07-10 11:00:00', '2020-07-10 12:00:00', NULL, 'free', NULL, 30005, 40001),
(34, '2020-07-10 14:00:00', '2020-07-10 15:00:00', NULL, 'free', NULL, 30004, 40001),
(35, '2020-07-10 15:00:00', '2020-07-10 16:00:00', NULL, 'free', NULL, 30006, 40001),
(36, '2020-07-10 16:00:00', '2020-07-10 17:00:00', NULL, 'free', NULL, 30007, 40001),
(37, '2020-07-13 17:00:00', '2020-07-13 18:00:00', 'uyr', 'free', 'kq1nufsb41899hmqefvjulg8fp', 30009, 40001),
(38, '2020-07-13 16:00:00', '2020-07-13 17:00:00', NULL, 'free', NULL, 30011, 40001),
(39, '2020-07-13 15:00:00', '2020-07-13 16:00:00', NULL, 'free', NULL, 30005, 40001),
(40, '2020-07-13 14:00:00', '2020-07-13 15:00:00', NULL, 'free', NULL, 30008, 40001),
(41, '2020-07-13 12:00:00', '2020-07-13 13:00:00', NULL, 'free', NULL, 30004, 40001),
(45, '2020-07-13 09:00:00', '2020-07-13 10:00:00', 'iyioy', 'free', 'kq1nufsb41899hmqefvjulg8fp', 30003, 40001),
(46, '2020-07-13 14:00:00', '2020-07-13 15:00:00', NULL, 'free', NULL, 30001, 40001),
(47, '2020-07-13 15:00:00', '2020-07-13 16:00:00', NULL, 'free', NULL, 30010, 40001),
(48, '2020-07-13 16:00:00', '2020-07-13 17:00:00', NULL, 'free', NULL, 30002, 40001),
(49, '2020-07-16 11:00:00', '2020-07-16 12:00:00', NULL, 'free', NULL, 30002, 40001),
(51, '2020-07-16 14:00:00', '2020-07-16 15:00:00', NULL, 'free', NULL, 30003, 40001),
(52, '2020-07-16 15:00:00', '2020-07-16 16:00:00', NULL, 'free', NULL, 30007, 40001),
(53, '2020-07-16 16:00:00', '2020-07-16 17:00:00', NULL, 'free', NULL, 30006, 40001),
(54, '2020-07-16 17:00:00', '2020-07-16 18:00:00', NULL, 'free', NULL, 30004, 40001),
(55, '2020-07-17 09:00:00', '2020-07-17 10:00:00', NULL, 'free', NULL, 30002, 40001),
(56, '2020-07-17 10:00:00', '2020-07-17 11:00:00', NULL, 'free', NULL, 30010, 40001),
(57, '2020-07-17 11:00:00', '2020-07-17 12:00:00', NULL, 'free', NULL, 30001, 40001),
(58, '2020-07-17 12:00:00', '2020-07-17 13:00:00', NULL, 'free', NULL, 30003, 40001),
(59, '2020-07-17 14:00:00', '2020-07-17 15:00:00', NULL, 'free', NULL, 30007, 40001),
(60, '2020-07-17 15:00:00', '2020-07-17 16:00:00', NULL, 'free', NULL, 30006, 40001),
(61, '2020-07-17 16:00:00', '2020-07-17 17:00:00', NULL, 'free', NULL, 30004, 40001),
(63, '2020-07-17 16:00:00', '2020-07-17 17:00:00', NULL, 'free', NULL, 30008, 40001),
(64, '2020-07-17 15:00:00', '2020-07-17 16:00:00', NULL, 'free', NULL, 30005, 40001),
(65, '2020-07-17 14:00:00', '2020-07-17 15:00:00', NULL, 'free', NULL, 30011, 40001),
(95, '2020-07-21 09:00:00', '2020-07-21 10:00:00', NULL, 'free', NULL, 30009, 40001),
(96, '2020-07-21 10:00:00', '2020-07-21 11:00:00', NULL, 'free', NULL, 30005, 40001),
(97, '2020-07-21 12:00:00', '2020-07-21 13:00:00', NULL, 'free', NULL, 30011, 40001),
(98, '2020-07-21 14:00:00', '2020-07-21 15:00:00', NULL, 'free', NULL, 30008, 40001),
(101, '2020-07-21 16:00:00', '2020-07-21 17:00:00', NULL, 'free', NULL, 30006, 40001),
(102, '2020-07-21 17:00:00', '2020-07-21 18:00:00', NULL, 'free', NULL, 30004, 40001),
(103, '2020-07-21 11:00:00', '2020-07-21 12:00:00', NULL, 'free', NULL, 30003, 40001),
(104, '2020-07-21 15:00:00', '2020-07-21 16:00:00', NULL, 'free', NULL, 30010, 40001),
(105, '2020-07-21 17:00:00', '2020-07-21 18:00:00', NULL, 'free', NULL, 30012, 40001),
(108, '2020-07-21 16:00:00', '2020-07-21 17:00:00', NULL, 'free', NULL, 30012, 40001),
(110, '2020-07-22 15:00:00', '2020-07-22 16:00:00', NULL, 'free', NULL, 30012, 40001),
(111, '2020-07-22 16:00:00', '2020-07-22 17:00:00', NULL, 'free', NULL, 30012, 40001),
(112, '2020-07-22 17:00:00', '2020-07-22 18:00:00', 'Body Ache', 'waiting', 'kq1nufsb41899hmqefvjulg8fp', 30012, 40001),
(113, '2020-07-24 09:00:00', '2020-07-24 10:00:00', NULL, 'free', NULL, 30009, 40001),
(114, '2020-07-24 11:00:00', '2020-07-24 12:00:00', NULL, 'free', NULL, 30005, 40001),
(117, '2020-07-24 10:00:00', '2020-07-24 11:00:00', NULL, 'free', NULL, 30007, 40001),
(118, '2020-07-24 14:00:00', '2020-07-24 15:00:00', NULL, 'free', NULL, 30008, 40001),
(120, '2020-07-24 17:00:00', '2020-07-24 18:00:00', 'Sprain', 'confirmed', 'kq1nufsb41899hmqefvjulg8fp', 30012, 40001),
(121, '2020-07-24 16:00:00', '2020-07-24 17:00:00', NULL, 'free', NULL, 30006, 40001),
(122, '2020-07-24 09:00:00', '2020-07-24 10:00:00', NULL, 'free', NULL, 30004, 40001),
(123, '2020-07-24 15:00:00', '2020-07-24 16:00:00', NULL, 'free', NULL, 30010, 40001),
(124, '2020-07-24 12:00:00', '2020-07-24 13:00:00', NULL, 'free', NULL, 30003, 40001),
(125, '2020-07-27 14:00:00', '2020-07-27 15:00:00', 'Follow Up', 'confirmed', 'kq1nufsb41899hmqefvjulg8fp', 30012, 40001),
(129, '2020-07-27 09:00:00', '2020-07-27 10:00:00', NULL, 'free', NULL, 30009, 40001),
(130, '2020-07-27 10:00:00', '2020-07-27 11:00:00', NULL, 'free', NULL, 30005, 40001),
(132, '2020-07-27 12:00:00', '2020-07-27 13:00:00', NULL, 'free', NULL, 30011, 40001),
(133, '2020-07-27 11:00:00', '2020-07-27 12:00:00', NULL, 'free', NULL, 30008, 40001),
(134, '2020-07-27 14:00:00', '2020-07-27 15:00:00', NULL, 'free', NULL, 30004, 40001),
(135, '2020-07-27 17:00:00', '2020-07-27 18:00:00', NULL, 'free', NULL, 30007, 40001),
(136, '2020-07-27 16:00:00', '2020-07-27 17:00:00', NULL, 'free', NULL, 30006, 40001),
(137, '2020-07-27 15:00:00', '2020-07-27 16:00:00', NULL, 'free', NULL, 30001, 40001),
(138, '2020-07-27 11:00:00', '2020-07-27 12:00:00', NULL, 'free', NULL, 30010, 40001),
(139, '2020-07-27 09:00:00', '2020-07-27 10:00:00', NULL, 'free', NULL, 30002, 40001),
(144, '2020-07-28 12:00:00', '2020-07-28 13:00:00', NULL, 'free', NULL, 30002, 40001),
(145, '2020-07-28 15:00:00', '2020-07-28 16:00:00', NULL, 'free', NULL, 30010, 40001),
(146, '2020-07-28 11:00:00', '2020-07-28 12:00:00', NULL, 'free', NULL, 30001, 40001),
(147, '2020-07-28 16:00:00', '2020-07-28 17:00:00', NULL, 'free', NULL, 30003, 40001),
(150, '2020-07-28 10:00:00', '2020-07-28 11:00:00', NULL, 'free', NULL, 30007, 40001),
(151, '2020-07-28 09:00:00', '2020-07-28 10:00:00', NULL, 'free', NULL, 30004, 40001),
(152, '2020-07-28 17:00:00', '2020-07-28 18:00:00', NULL, 'free', NULL, 30004, 40001),
(155, '2020-07-28 14:00:00', '2020-07-28 15:00:00', NULL, 'free', NULL, 30008, 40001),
(156, '2020-07-29 10:00:00', '2020-07-29 11:00:00', NULL, 'free', NULL, 30011, 40001),
(157, '2020-07-29 14:00:00', '2020-07-29 15:00:00', NULL, 'free', NULL, 30004, 40001),
(158, '2020-07-29 16:00:00', '2020-07-29 17:00:00', NULL, 'free', NULL, 30005, 40001),
(160, '2020-07-29 09:00:00', '2020-07-29 10:00:00', NULL, 'free', NULL, 30004, 40001),
(161, '2020-07-29 11:00:00', '2020-07-29 12:00:00', NULL, 'free', NULL, 30006, 40001),
(162, '2020-07-29 12:00:00', '2020-07-29 13:00:00', NULL, 'free', NULL, 30003, 40001),
(164, '2020-07-29 15:00:00', '2020-07-29 16:00:00', NULL, 'free', NULL, 30001, 40001),
(165, '2020-07-29 17:00:00', '2020-07-29 18:00:00', NULL, 'free', NULL, 30010, 40001),
(167, '2020-07-28 15:00:00', '2020-07-28 16:00:00', NULL, 'free', NULL, 30012, 40001),
(168, '2020-07-28 16:00:00', '2020-07-28 17:00:00', NULL, 'free', NULL, 30012, 40001),
(169, '2020-07-28 17:00:00', '2020-07-28 18:00:00', NULL, 'free', NULL, 30012, 40001);

CREATE TABLE `doctor` (
  `doctor_id` int(11) NOT NULL,
  `doctor_name` varchar(100) NOT NULL,
  `sp_id` int(11) NOT NULL,
  `webex_link` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `doctor` (`doctor_id`, `doctor_name`, `sp_id`, `webex_link`) VALUES
(30001, 'Pierce Martin', 70001, NULL),
(30002, 'Skye Kussmann', 70001, NULL),
(30003, 'Paul Florentino', 70001, ''),
(30004, 'Jarad Lipman', 70001, NULL),
(30005, 'Cristina Kling', 70002, NULL),
(30006, 'Ken Gannetta', 70002, ''),
(30007, 'Olivia Gant', 70002, ''),
(30008, 'Eunji Kang', 70002, NULL),
(30009, 'Andrew Bauer', 70003, NULL),
(30010, 'Siddartha Mitra', 70003, NULL),
(30011, 'Chris Montilla', 70004, NULL),
(30012, 'Steven Babb', 70004, 'https://gwstudent.webex.com/meet/babb');

CREATE TABLE `healthcare_provider` (
  `doctor_id` int(11) NOT NULL,
  `doctor_name` varchar(255) DEFAULT NULL,
  `sp_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `healthcare_provider` (`doctor_id`, `doctor_name`, `sp_id`) VALUES
(30001, 'Pierce Martin', 70001),
(30002, 'Skye Kussmann', 70001),
(30003, 'Paul Florentino', 70001),
(30004, 'Jarad Lipman', 70001),
(30005, 'Cristina Kling', 70002),
(30006, 'Ken Gannetta', 70002),
(30007, 'Olivia Gant', 70002),
(30008, 'Eunji Kang', 70002),
(30009, 'Andrew Bauer', 70003),
(30010, 'Siddartha Mitra', 70003),
(30011, 'Chris Montilla', 70004),
(30012, 'Fares Albana', 70004);

CREATE TABLE `patient` (
  `pat_gwid` int(11) NOT NULL COMMENT 'patient id',
  `pat_email` varchar(255) NOT NULL COMMENT 'patient email',
  `pat_firstname` varchar(255) NOT NULL COMMENT 'first name for patient',
  `pat_lastname` varchar(255) NOT NULL COMMENT 'last name for patient',
  `pat_phoneno` varchar(255) NOT NULL COMMENT 'patient contact number',
  `pat_dob` date NOT NULL COMMENT 'date of birth of the patient',
  `patient_history` varchar(255) DEFAULT NULL COMMENT 'history of the patient'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `patient` (`pat_gwid`, `pat_email`, `pat_firstname`, `pat_lastname`, `pat_phoneno`, `pat_dob`, `patient_history`) VALUES
(40001, 'pjayavaradhan@gwu.edu', 'Prashanth', ' Jayavaradhan', '571-000-0005', '1999-01-01', '11001'),
(40002, 'Betty@istm.edu', 'Betty', 'Kendigia', '571-000-0006', '1999-01-02', '11002'),
(40003, 'Geoff@istm.edu', 'Geoff ', 'Greeley', '571-000-0007', '1999-01-03', '11003'),
(40004, 'Susan@istm.edu', 'Susan', 'Sabin', '571-000-0008', '1999-01-04', '11004'),
(40005, 'Don@istm.edu', 'Don', 'Fenno', '571-000-0009', '1999-01-05', '11005'),
(40006, 'Lauren@istm.edu', 'Lauren', 'Ramirez', '571-000-0010', '1999-01-06', '11006'),
(40007, 'Patty@istm.edu', 'Patty', 'Wollner', '571-000-0011', '1999-01-07', '11007'),
(40008, 'Jeani@istm.edu', 'Jeani', 'Foster', '571-000-0012', '1999-01-08', '11008'),
(40009, 'Jennifer@istm.edu', 'Jennifer', 'Cechvala', '571-000-0013', '1999-01-09', '11009'),
(40010, 'Maurie@istm.edu', 'Maurie', 'Saffarrans', '571-000-0014', '1999-01-10', '11010'),
(40011, 'Linda@istm.edu', 'Linda', 'Thomas', '571-000-0015', '1999-01-11', '11011'),
(40012, 'Julian@istm.edu', 'Julian', 'Hills', '571-000-0016', '1999-01-12', '11012'),
(40013, 'Luann@istm.edu', 'Luann', 'Retzer', '571-000-0017', '1999-01-13', '11013'),
(40014, 'Carol@istm.edu', 'Carol', 'Crowley', '571-000-0018', '1999-01-14', '11014'),
(40015, 'Mary.@istm.edu', 'Mary R.', 'Pain', '571-000-0019', '1999-01-15', '11015'),
(40016, 'Rick@istm.edu', 'Rick', 'Doaner', '571-000-0020', '1999-01-16', '11016'),
(40017, 'Tiffany@istm.edu', 'Tiffany', 'Kindschy', '571-000-0021', '1999-01-17', '11017'),
(40018, 'Carly@istm.edu', 'Carly', 'Hokans', '571-000-0022', '1999-01-18', '11018'),
(40019, 'Leigh@istm.edu', 'Leigh', 'Travanty', '571-000-0023', '1999-01-19', '11019'),
(40020, 'Laurie@istm.edu', 'Laurie', 'Mislle', '571-000-0024', '1999-01-20', '11020'),
(40021, 'Donald@istm.edu', 'Donald', 'McClain', '571-000-0025', '1999-01-21', '11021'),
(40022, 'Naemi@istm.edu', 'Naemi', 'Murray', '571-000-0026', '1999-01-22', '11022'),
(40023, 'Peggy@istm.edu', 'Peggy', 'Murra', '571-000-0027', '1999-01-23', '11023'),
(40024, 'Martin@istm.edu', 'Martin', 'Ganschaw', '571-000-0028', '1999-01-24', '11024'),
(40025, 'Marian@istm.edu', 'Marian', 'Byers', '571-000-0029', '1999-01-25', '11025'),
(40026, 'Joan@istm.edu', 'Joan', 'Lamson', '571-000-0030', '1999-01-26', ''),
(40027, 'Shane@istm.edu', 'Shane', 'McCook', '571-000-0031', '1999-01-27', ''),
(40028, 'Gayle@istm.edu', 'Gayle', 'Radivich', '571-000-0032', '1999-01-28', ''),
(40029, 'Michael@istm.edu', 'Michael', 'Brooker', '571-000-0033', '1999-01-29', ''),
(40030, 'Betsy@istm.edu', 'Betsy', 'Jeffery', '571-000-0034', '1999-01-30', ''),
(40031, 'Jean@istm.edu', 'Jean', 'Langenberg', '571-000-0035', '1999-01-31', ''),
(40032, 'Christina@istm.edu', 'Christina', 'Burzinski', '571-000-0036', '1999-02-01', ''),
(40033, 'Andrew@istm.edu', 'Andrew', 'Boland', '571-000-0037', '1999-02-02', ''),
(40034, 'Margaret@istm.edu', 'Margaret', 'Frain', '571-000-0038', '1999-02-03', ''),
(40035, 'Erika@istm.edu', 'Erika', 'Stoving', '571-000-0039', '1999-02-04', ''),
(40036, 'Paul@istm.edu', 'Paul', 'Stoving', '571-000-0040', '1999-02-05', ''),
(40037, 'Sean@istm.edu', 'Sean', 'O\'Connell', '571-000-0041', '1999-02-06', ''),
(40038, 'Caroline@istm.edu', 'Caroline', 'Senn', '571-000-0042', '1999-02-07', ''),
(40039, 'Jen@istm.edu', 'Jen ', 'Devers', '571-000-0043', '1999-02-08', ''),
(40040, 'Skrap@istm.edu', 'Skrap', 'Haus', '571-000-0044', '1999-02-09', ''),
(40041, 'Janean@istm.edu', 'Janean', 'Bratz', '571-000-0045', '1999-02-10', ''),
(40042, 'Bruce@istm.edu', 'Bruce', 'Davis', '571-000-0046', '1999-02-11', ''),
(40043, 'Sara@istm.edu', 'Sara', 'Bitner', '571-000-0047', '1999-02-12', ''),
(40044, 'Georgia@istm.edu', 'Georgia', 'Irre', '571-000-0048', '1999-02-13', ''),
(40045, 'Erica@istm.edu', 'Erica', 'Cross', '571-000-0049', '1999-02-14', ''),
(40046, 'Donna@istm.edu', 'Donna', 'Celsor', '571-000-0050', '1999-02-15', ''),
(40047, 'Lorraine@istm.edu', 'Lorraine', 'Brathwaite', '571-000-0051', '1999-02-16', ''),
(40048, 'Daniel@istm.edu', 'Daniel', 'Cross', '571-000-0052', '1999-02-17', ''),
(40049, 'Terrie@istm.edu', 'Terrie', 'Knox', '571-000-0053', '1999-02-18', '');

CREATE TABLE `questionnaire` (
  `questionnaire_id` int(11) NOT NULL COMMENT 'questionnaire id',
  `question1` varchar(255) NOT NULL COMMENT 'question',
  `question2` varchar(500) DEFAULT NULL,
  `question3` varchar(500) DEFAULT NULL,
  `question4` varchar(500) DEFAULT NULL,
  `question5` varchar(500) DEFAULT NULL,
  `question6` varchar(500) DEFAULT NULL,
  `question7` varchar(500) DEFAULT NULL,
  `question8` varchar(500) DEFAULT NULL,
  `question9` varchar(500) DEFAULT NULL,
  `question10` varchar(500) DEFAULT NULL,
  `question11` varchar(500) DEFAULT NULL,
  `question12` varchar(500) DEFAULT NULL,
  `question13` varchar(500) DEFAULT NULL,
  `question14` varchar(500) DEFAULT NULL,
  `app_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `questionnaire` (`questionnaire_id`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `question11`, `question12`, `question13`, `question14`, `app_id`) VALUES
(36, 'jkknkll', 'dslf', 'Never', '1 or 2', 'Yes', 'fhh', 'Yes', 'nkjn', 'Yes', 'nlkj', 'Yes', 'klfg', 'fdyk', 'tyu', 125);

CREATE TABLE `report` (
  `appointment_id` int(4) NOT NULL,
  `diagnosis` varchar(1000) NOT NULL,
  `prescription` varchar(1000) NOT NULL,
  `course_of_action` varchar(1000) NOT NULL,
  `next_visit` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `report` (`appointment_id`, `diagnosis`, `prescription`, `course_of_action`, `next_visit`) VALUES
(1, 'Strained muscles because of standing or sitting for unusually long periods', 'Tramadol - 10ct', 'Proper sleeping positions that cause less strain on the spine', '2020-07-21'),
(6, 'Regular Flu shot', 'Fluzone Intradermal(R):\r\n0.1 mL, intradermally, once', 'Keep track of any and all side effects you have after receiving this vaccine.', '2020-09-30');

CREATE TABLE `specialty` (
  `sp_id` int(11) NOT NULL,
  `sp_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `specialty` (`sp_id`, `sp_type`) VALUES
(70001, 'Mental Health Counseling'),
(70002, 'Vaccinations'),
(70003, 'Medical General Practice'),
(70004, 'Physicals');


ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appointment_id`);

ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doctor_id`);

ALTER TABLE `patient`
  ADD PRIMARY KEY (`pat_gwid`);
ALTER TABLE `patient` ADD FULLTEXT KEY `pat_firstname` (`pat_firstname`,`pat_lastname`);

ALTER TABLE `questionnaire`
  ADD PRIMARY KEY (`questionnaire_id`);

ALTER TABLE `report`
  ADD PRIMARY KEY (`appointment_id`);


ALTER TABLE `appointment`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;

ALTER TABLE `doctor`
  MODIFY `doctor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30013;

ALTER TABLE `questionnaire`
  MODIFY `questionnaire_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'questionnaire id', AUTO_INCREMENT=37;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
