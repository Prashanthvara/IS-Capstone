Database Done by: Abdullah Alotibi



-- Table structure for table `APPOINTMENTS`
--

CREATE TABLE `APPOINTMENTS` (
  `AP_ID` int(11) NOT NULL,
  `AP_Date` date DEFAULT NULL,
  `AP_Time` time DEFAULT NULL,
  `AP_Type` varchar(255) DEFAULT NULL,
  `AP_Reason` varchar(255) DEFAULT NULL,
  `AP_Status` varchar(255) DEFAULT NULL,
  `Online_Session_Link` varchar(255) DEFAULT NULL,
  `QU_Result` varchar(255) DEFAULT NULL,
  `Report` varchar(255) DEFAULT NULL,
  `HP_GWID` int(11) DEFAULT NULL,
  `PAT_GWID` int(11) DEFAULT NULL,
  `QU_ID` int(11) DEFAULT NULL,
  `CHC_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `APPOINTMENTS`
--

INSERT INTO `APPOINTMENTS` (`AP_ID`, `AP_Date`, `AP_Time`, `AP_Type`, `AP_Reason`, `AP_Status`, `Online_Session_Link`, `QU_Result`, `Report`, `HP_GWID`, `PAT_GWID`, `QU_ID`, `CHC_ID`) VALUES
(10001, '0007-01-20', '10:15:00', 'Mental', 'Extremely high and low moods', 'Approved', 'Link.Link.com', '', '', 30001, 40001, 50002, 20001),
(10002, '0008-01-20', '11:15:00', 'Vaccination', 'Maintain Good Health', 'Pending', 'Link.Link.com', '', '', 30002, 40002, 50001, 20002),
(10003, '0009-01-20', '12:15:00', 'Dental', 'Cavities', 'Requested', 'Link.Link.com', '', '', 30003, 40003, 50001, 20003),
(10004, '2010-01-20', '13:15:00', 'Cardiology', 'Arrhythmia', 'Approved', 'Link.Link.com', '', '', 30004, 40004, 50001, 20004),
(10005, '2011-01-20', '14:15:00', 'Mental', 'Excessive fear', 'Pending', 'Link.Link.com', '', '', 30001, 40005, 50002, 20001),
(10006, '2012-01-20', '15:15:00', 'Vaccination', 'Maintain Good Health', 'Requested', 'Link.Link.com', '', '', 30002, 40006, 50001, 20002),
(10007, '2013-01-20', '16:15:00', 'Dental', 'Broken teeth', 'Approved', 'Link.Link.com', '', '', 30003, 40007, 50001, 20003),
(10008, '2014-01-20', '17:15:00', 'Cardiology', 'Cardiomyopathy', 'Pending', 'Link.Link.com', '', '', 30004, 40008, 50001, 20004),
(10009, '2015-01-20', '10:15:00', 'Mental', 'Dramatic changes in eating or sleeping habits', 'Requested', 'Link.Link.com', '', '', 30001, 40009, 50002, 20001),
(10010, '2016-01-20', '11:15:00', 'Vaccination', 'Maintain Good Health', 'Approved', 'Link.Link.com', '', '', 30002, 40010, 50001, 20002),
(10011, '2017-01-20', '12:15:00', 'Dental', 'Sensitive teeth', 'Pending', 'Link.Link.com', '', '', 30003, 40011, 50001, 20003),
(10012, '2018-01-20', '13:15:00', 'Cardiology', 'Heart failure', 'Requested', 'Link.Link.com', '', '', 30004, 40012, 50001, 20004),
(10013, '2019-01-20', '14:15:00', 'Mental', 'Worry', 'Approved', 'Link.Link.com', '', '', 30001, 40013, 50002, 20001),
(10014, '2020-01-20', '15:15:00', 'Vaccination', 'Maintain Good Health', 'Pending', 'Link.Link.com', '', '', 30002, 40014, 50001, 20002),
(10015, '2021-01-20', '16:15:00', 'Dental', 'Toothache', 'Requested', 'Link.Link.com', '', '', 30003, 40015, 50001, 20003),
(10016, '2022-01-20', '17:15:00', 'Cardiology', 'Heart valve problems', 'Approved', 'Link.Link.com', '', '', 30004, 40016, 50001, 20004),
(10017, '2023-01-20', '10:15:00', 'Mental', 'Anxiety', 'Pending', 'Link.Link.com', '', '', 30001, 40017, 50002, 20001),
(10018, '2024-01-20', '11:15:00', 'Vaccination', 'Maintain Good Health', 'Requested', 'Link.Link.com', '', '', 30002, 40018, 50001, 20002),
(10019, '2025-01-20', '12:15:00', 'Dental', 'Sensitive to Cold', 'Approved', 'Link.Link.com', '', '', 30003, 40019, 50001, 20003);

-- --------------------------------------------------------

--
-- Table structure for table `CHC_STAFF`
--

CREATE TABLE `CHC_STAFF` (
  `CHC_ID` int(11) NOT NULL,
  `CHC_FirstName` varchar(255) DEFAULT NULL,
  `CHC_LastName` varchar(255) DEFAULT NULL,
  `CHC_Position` varchar(255) DEFAULT NULL,
  `CHC_JobRole` varchar(255) DEFAULT NULL,
  `CHC_PhoneNo` varchar(255) DEFAULT NULL,
  `CHC_Email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `CHC_STAFF`
--

INSERT INTO `CHC_STAFF` (`CHC_ID`, `CHC_FirstName`, `CHC_LastName`, `CHC_Position`, `CHC_JobRole`, `CHC_PhoneNo`, `CHC_Email`) VALUES
(20001, 'Andrew', 'Yan', 'Coordinator', 'Maintaining schedules', '571-000-0054', 'Andrew@CHC.istm.edu'),
(20002, 'Rebecca', 'Anderson', 'Administrator', 'Managing filing', '571-000-0055', 'Rebecca@CHC.istm.edu'),
(20003, 'Anna', 'Doherty', 'Assistant', 'Maintaining schedules', '571-000-0056', 'Anna@CHC.istm.edu'),
(20004, 'Rebecca', 'Hennen', 'Manager', 'Confirming appointment', '571-000-0057', 'Rebecca@CHC.istm.edu');

-- --------------------------------------------------------

--
-- Table structure for table `HEALTHCARE_PROVIDER`
--

CREATE TABLE `HEALTHCARE_PROVIDER` (
  `HP_GWID` int(11) NOT NULL,
  `HP_FirstName` varchar(255) DEFAULT NULL,
  `HP_LastName` varchar(255) DEFAULT NULL,
  `HP_Title` varchar(255) DEFAULT NULL,
  `HP_Position` varchar(255) DEFAULT NULL,
  `HP_PhoneNo` varchar(255) DEFAULT NULL,
  `HP_Pic` varchar(255) DEFAULT NULL,
  `HP_Email` varchar(255) DEFAULT NULL,
  `SP_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `HEALTHCARE_PROVIDER`
--

INSERT INTO `HEALTHCARE_PROVIDER` (`HP_GWID`, `HP_FirstName`, `HP_LastName`, `HP_Title`, `HP_Position`, `HP_PhoneNo`, `HP_Pic`, `HP_Email`, `SP_ID`) VALUES
(30001, 'Pierce', 'Martin', 'Doctor', 'Mental', '571-000-0001', '', 'Pierce@HP.istm.edu', 70001),
(30002, 'Skye', 'Florentino', 'Nurse', 'Vaccination', '571-000-0002', '', 'Skye@HP.istm.edu', 70002),
(30003, 'Paul', 'Kussmann', 'Doctor', 'Dental', '571-000-0003', '', 'Paul@HP.istm.edu', 70003),
(30004, 'Jarad', 'Lipman', 'Doctor', 'Cardiology', '571-000-0004', '', 'Jarad@HP.istm.edu', 70004);

-- --------------------------------------------------------

--
-- Table structure for table `PATIENT`
--

CREATE TABLE `PATIENT` (
  `PAT_GWID` int(11) NOT NULL,
  `PAT_Email` varchar(255) DEFAULT NULL,
  `PAT_FirstName` varchar(255) DEFAULT NULL,
  `PAT_LastName` varchar(255) DEFAULT NULL,
  `PAT_PhoneNo` varchar(255) DEFAULT NULL,
  `PAT_DOB` date DEFAULT NULL,
  `Pationt_History` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `PATIENT`
--

INSERT INTO `PATIENT` (`PAT_GWID`, `PAT_Email`, `PAT_FirstName`, `PAT_LastName`, `PAT_PhoneNo`, `PAT_DOB`, `Pationt_History`) VALUES
(40001, 'Joan@istm.edu', 'Joan', 'Noren', '571-000-0005', '1999-01-01', ''),
(40002, 'Betty@istm.edu', 'Betty', 'Kendigia', '571-000-0006', '1999-01-02', ''),
(40003, 'Geoff@istm.edu', 'Geoff ', 'Greeley', '571-000-0007', '1999-01-03', ''),
(40004, 'Susan@istm.edu', 'Susan', 'Sabin', '571-000-0008', '1999-01-04', ''),
(40005, 'Don@istm.edu', 'Don', 'Fenno', '571-000-0009', '1999-01-05', ''),
(40006, 'Lauren@istm.edu', 'Lauren', 'Ramirez', '571-000-0010', '1999-01-06', ''),
(40007, 'Patty@istm.edu', 'Patty', 'Wollner', '571-000-0011', '1999-01-07', ''),
(40008, 'Jeani@istm.edu', 'Jeani', 'Foster', '571-000-0012', '1999-01-08', ''),
(40009, 'Jennifer@istm.edu', 'Jennifer', 'Cechvala', '571-000-0013', '1999-01-09', ''),
(40010, 'Maurie@istm.edu', 'Maurie', 'Saffarrans', '571-000-0014', '1999-01-10', ''),
(40011, 'Linda@istm.edu', 'Linda', 'Thomas', '571-000-0015', '1999-01-11', ''),
(40012, 'Julian@istm.edu', 'Julian', 'Hills', '571-000-0016', '1999-01-12', ''),
(40013, 'Luann@istm.edu', 'Luann', 'Retzer', '571-000-0017', '1999-01-13', ''),
(40014, 'Carol@istm.edu', 'Carol', 'Crowley', '571-000-0018', '1999-01-14', ''),
(40015, 'Mary.@istm.edu', 'Mary R.', 'Pain', '571-000-0019', '1999-01-15', ''),
(40016, 'Rick@istm.edu', 'Rick', 'Doaner', '571-000-0020', '1999-01-16', ''),
(40017, 'Tiffany@istm.edu', 'Tiffany', 'Kindschy', '571-000-0021', '1999-01-17', ''),
(40018, 'Carly@istm.edu', 'Carly', 'Hokans', '571-000-0022', '1999-01-18', ''),
(40019, 'Leigh@istm.edu', 'Leigh', 'Travanty', '571-000-0023', '1999-01-19', ''),
(40020, 'Laurie@istm.edu', 'Laurie', 'Mislle', '571-000-0024', '1999-01-20', ''),
(40021, 'Donald@istm.edu', 'Donald', 'McClain', '571-000-0025', '1999-01-21', ''),
(40022, 'Naemi@istm.edu', 'Naemi', 'Murray', '571-000-0026', '1999-01-22', ''),
(40023, 'Peggy@istm.edu', 'Peggy', 'Murra', '571-000-0027', '1999-01-23', ''),
(40024, 'Martin@istm.edu', 'Martin', 'Ganschaw', '571-000-0028', '1999-01-24', ''),
(40025, 'Marian@istm.edu', 'Marian', 'Byers', '571-000-0029', '1999-01-25', ''),
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

-- --------------------------------------------------------

--
-- Table structure for table `QUESTIONNAIRE`
--

CREATE TABLE `QUESTIONNAIRE` (
  `QU_ID` int(11) NOT NULL,
  `QU_Type` varchar(255) DEFAULT NULL,
  `Question` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `QUESTIONNAIRE`
--

INSERT INTO `QUESTIONNAIRE` (`QU_ID`, `QU_Type`, `Question`) VALUES
(50001, 'Physical', ''),
(50002, 'Mental', '');

-- --------------------------------------------------------

--
-- Table structure for table `SCHEDULE`
--

CREATE TABLE `SCHEDULE` (
  `SCH_ID` int(11) NOT NULL,
  `SCH_Month` varbinary(255) DEFAULT NULL,
  `SCH_Day` varchar(255) DEFAULT NULL,
  `SCH_Hour` time DEFAULT NULL,
  `HP_GWID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `SCHEDULE`
--

INSERT INTO `SCHEDULE` (`SCH_ID`, `SCH_Month`, `SCH_Day`, `SCH_Hour`, `HP_GWID`) VALUES
(60001, 0x37, '1', '10:15:00', 70001),
(60002, 0x37, '2', '11:15:00', 70001),
(60003, 0x37, '3', '12:15:00', 70001),
(60004, 0x38, '4', '13:15:00', 70001),
(60005, 0x38, '5', '14:15:00', 70001),
(60006, 0x38, '6', '15:15:00', 70002),
(60007, 0x39, '7', '16:15:00', 70002),
(60008, 0x39, '8', '17:15:00', 70002),
(60009, 0x39, '9', '10:15:00', 70002),
(60010, 0x37, '10', '11:15:00', 70002),
(60011, 0x37, '11', '12:15:00', 70002),
(60012, 0x37, '12', '13:15:00', 70002),
(60013, 0x38, '13', '14:15:00', 70003),
(60014, 0x38, '14', '15:15:00', 70003),
(60015, 0x38, '15', '16:15:00', 70003),
(60016, 0x39, '16', '17:15:00', 70003),
(60017, 0x39, '17', '10:15:00', 70003),
(60018, 0x39, '18', '11:15:00', 70003),
(60019, 0x37, '19', '12:15:00', 70004),
(60020, 0x37, '20', '13:15:00', 70004),
(60021, 0x37, '21', '14:15:00', 70004),
(60022, 0x38, '22', '15:15:00', 70004),
(60023, 0x38, '23', '16:15:00', 70004),
(60024, 0x38, '24', '17:15:00', 70004),
(60025, 0x39, '25', '10:15:00', 70004),
(60026, 0x39, '26', '11:15:00', 70004),
(60027, 0x39, '27', '12:15:00', 70004);

-- --------------------------------------------------------

--
-- Table structure for table `SPECIALTY`
--

CREATE TABLE `SPECIALTY` (
  `SP_ID` int(11) NOT NULL,
  `SP_Type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `SPECIALTY`
--

INSERT INTO `SPECIALTY` (`SP_ID`, `SP_Type`) VALUES
(70001, 'Mental'),
(70002, 'Vaccination'),
(70003, 'Dental'),
(70004, 'Cardiology');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `APPOINTMENTS`
--
ALTER TABLE `APPOINTMENTS`
  ADD PRIMARY KEY (`AP_ID`),
  ADD KEY `FK` (`HP_GWID`,`PAT_GWID`,`QU_ID`,`CHC_ID`);

--
-- Indexes for table `CHC_STAFF`
--
ALTER TABLE `CHC_STAFF`
  ADD PRIMARY KEY (`CHC_ID`);

--
-- Indexes for table `HEALTHCARE_PROVIDER`
--
ALTER TABLE `HEALTHCARE_PROVIDER`
  ADD PRIMARY KEY (`HP_GWID`),
  ADD KEY `FK` (`SP_ID`);

--
-- Indexes for table `PATIENT`
--
ALTER TABLE `PATIENT`
  ADD PRIMARY KEY (`PAT_GWID`);

--
-- Indexes for table `QUESTIONNAIRE`
--
ALTER TABLE `QUESTIONNAIRE`
  ADD PRIMARY KEY (`QU_ID`);

--
-- Indexes for table `SCHEDULE`
--
ALTER TABLE `SCHEDULE`
  ADD PRIMARY KEY (`SCH_ID`),
  ADD KEY `FK` (`HP_GWID`);

--
-- Indexes for table `SPECIALTY`
--
ALTER TABLE `SPECIALTY`
  ADD PRIMARY KEY (`SP_ID`);
