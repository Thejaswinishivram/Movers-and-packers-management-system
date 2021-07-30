-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2019 at 07:15 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mpmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `AdminName` varchar(50) DEFAULT NULL,
  `UserName` varchar(50) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'Admin', 'admin', 8979555596, 'admin@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2019-11-18 06:57:43');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontact`
--

CREATE TABLE `tblcontact` (
  `ID` int(10) NOT NULL,
  `Name` varchar(200) DEFAULT NULL,
  `Telephone` bigint(10) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Subject` mediumtext DEFAULT NULL,
  `Message` mediumtext DEFAULT NULL,
  `RequestDate` timestamp NULL DEFAULT current_timestamp(),
  `IsRead` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcontact`
--

INSERT INTO `tblcontact` (`ID`, `Name`, `Telephone`, `Email`, `Subject`, `Message`, `RequestDate`, `IsRead`) VALUES
(1, 'Vishu Singh', 4646544654, 'vishu@gmail.com', 'Quotation For XYZ', 'Send me price of moving bike from Allahabad to varanasi', '2019-11-19 09:20:13', 1),
(2, 'Ria', 6546498798, 'ria@gmail.com', 'Enquiry', 'Told me the cost of shifting local area', '2019-12-16 08:57:56', 1),
(3, 'Kishan', 2131131311, 'k@gmail.com', 'scooty transport', 'Message...', '2019-12-20 11:36:49', NULL),
(4, 'Anuj', 1234567890, 'anuj@gmail.com', 'test', 'Test for testing.', '2019-12-21 05:42:35', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblpage`
--

CREATE TABLE `tblpage` (
  `ID` int(10) NOT NULL,
  `PageType` varchar(50) DEFAULT NULL,
  `PageTitle` mediumtext DEFAULT NULL,
  `PageDescription` mediumtext DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblpage`
--

INSERT INTO `tblpage` (`ID`, `PageType`, `PageTitle`, `PageDescription`, `Email`, `MobileNumber`, `UpdationDate`) VALUES
(1, 'aboutus', 'About Us', 'Welcome To Movers &amp; Packers, We are among-st the top packing moving Express companies. Provide our services in all over India. With more and more real estate development and people buying new apartments, shifting houses for work, business or personal reasons has increased over the years. We at All India Packers guarantee high quality packing and moving service so that your shifting remains tension free. We are experts in offering high quality packing material and transport facility. We have developed our reputation over the last 15 years for being reliable and efficient. We have with us, skilled professionals, who are able to handle the consignments and deliver them timely. We provide hassle free shifting service with great care. We are also very cautious of the safety and security of the cargo. test&nbsp;', NULL, NULL, '2019-12-21 05:41:11'),
(2, 'contactus', 'Contact Us', 'D-204, Hole Town South West,Delhi-110096,India', 'info@gmail.com', 8529631239, '2019-12-20 12:01:50');

-- --------------------------------------------------------

--
-- Table structure for table `tblservices`
--

CREATE TABLE `tblservices` (
  `ID` int(10) NOT NULL,
  `Title` varchar(200) DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `Image` varchar(200) DEFAULT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblservices`
--

INSERT INTO `tblservices` (`ID`, `Title`, `Description`, `Image`, `CreationDate`) VALUES
(1, 'Packers and Movers', 'Movers & Packers is one and Only Good Packers and Movers in Delhi/NCR which Provide a Complete Solution for your moving Needs either in Local or Domestic.\r\n\r\nWe also provide services that include transferring of Household goods and we are known as the best House Relocation Services Delhi/NCR. Our Company has shifted more than 40,000 Customers since last few years.\r\n\r\nThere are many customers repeating the service behalf of their last experience.\r\n\r\nHouse shifting services are very easy nowadays with the help of packers and movers in New Delhi.\r\n\r\nBeing one of the best House Relocation Services Delhi, Ganpati Cargo Movers helps you with this service.\r\n\r\nWe are the best packers and movers in Delhi because of our professionalism and work flow in a proper way and we are handling all kinds of House Relocation Services New Delhi.\r\n\r\nDelivering goods damage free and on time, we also help in relocating house hold goods.\r\n\r\nWe Pack all your household items like furniture, vessels, glassware ,electronics, etc with extra care and safety. Jai packers use high quality packing materials to protect your valuable items.\r\n\r\nBest Packers and Movers always follow the complete process of packing and moving and that makes us best Packers and Movers in New Delhi and House Relocation Services in New Delhi.\r\n\r\nWe transfer all your household items and relocate them in the desired location without any damage or loss.\r\n\r\nThen we also help in Unpacking them and arranging them in desired place and help you set in the new environment quicker and easier.\r\n\r\nOur team is have a long run experience in this field and have trained professionals to perform this work.\r\n\r\nWe deliver in a perfect way and deliver it upon customer satisfaction and we are known as the best House Relocation Service in New Delhi.', 'b9fb9d37bdf15a699bc071ce49baea531574162628.jpg', '2019-11-19 11:23:48'),
(2, 'Car Transport', 'Car Transport New Delhi\r\nIf your relocating from your place, don’t worry about moving your car. we at Ganpati Cargo Movers will help you in transporting your car safely to any cities in India. We are known as the best Movers and Packers Delhi/NCR.\r\n\r\nSo to get your Car at your destination place without and damages on it, to happen that Contact Ganpati Cargo Movers who are known as the best Movers and Packers New Delhi.', '373eac9b763bb2e45bb04551c4a9ed5e1574078680.jpg', '2019-11-18 12:04:40'),
(3, 'Bike and Scooty Transport', 'Best Bike & Scooty Transporter\r\nWe know the attachment of the rider with their bike and by shifting it in safe and sound condition we respect their feelings attached. Our Packaging consists of three layers to give a strong cover to secure it from unexpected damages and scratches. Our containers contain only Bike Inquiries not like others who shift the it with Household or Industrial goods to earn more on Shifting. Our Motto is to earn reasonable and satisfy more to our customers. If you need to find a best packers and movers in any location just call Ganpati Cargo Movers, Our wide network spread all over India to Shift or Relocate your bike anywhere you want. Our experts provide you the best shifting Experience you ever had while moving with others.', 'b9fb9d37bdf15a699bc071ce49baea531574078814.jpg', '2019-11-18 12:06:54'),
(4, 'Loading and Unloading', 'Ganpati Cargo Movers Gives you a solution for highly Safe Loading and Unloading Service for Your Local and Domestic household shifting Services. Ganpati Cargo Movers offer well thought-out, organized and dependable Loading and Unloading services preventing goods from any kind of scratches and breakage during the process of Loading and Unloading.\r\n\r\nWe ensure you safety and prompt delivery of your valuables. Once the goods have reached your respective destination, our staffs also unload, unpack and rearrange your goods with utmost care and attention. So avail loading and unloading services by registered packers and movers.\r\n\r\nGanpati Cargo Movers and get yourself assured that all valuable goods will arrive at their respective destination with no damage at all. Ganpati Cargo Movers is one of the most innovative and proactive platform that energizes interaction between packers & movers service providers and individuals, businesses, corporate and organizations that are in search to avail Packing Moving and related services in all over India.', '4f9f36d575450e9c1997a4b8a590cb8d1574078908.jpg', '2019-11-18 12:08:28'),
(5, 'Packing and Unpacking', 'Ganpati Cargo Movers Gives you a solution for highly Safe Loading and Unloading Service for Your Local and Domestic household shifting Services. Ganpati Cargo Movers offer well thought-out, organized and dependable Loading and Unloading services preventing goods from any kind of scratches and breakage during the process of Loading and Unloading.\r\n\r\nWe ensure you safety and prompt delivery of your valuables. Once the goods have reached your respective destination, our staffs also unload, unpack and rearrange your goods with utmost care and attention. So avail loading and unloading services by registered packers and movers.\r\n\r\nGanpati Cargo Movers and get yourself assured that all valuable goods will arrive at their respective destination with no damage at all. Ganpati Cargo Movers is one of the most innovative and proactive platform that energizes interaction between packers & movers service providers and individuals, businesses, corporate and organizations that are in search to avail Packing Moving and related services in all over India.', 'b9fb9d37bdf15a699bc071ce49baea531574078983.jpg', '2019-11-18 12:09:43'),
(6, 'Local Shifting', 'Local Shifting Packers and Movers in Delhi/NCR.\r\nDue to some reason people need to change their home from one area to another or next home,  they are in needs of packers and movers service provider who can help them to move their heavy furniture or pack their other belongings. Local shifting similar to a domestic just a change of distance. Ganpati Cargo Movers help in Local Shifting of goods and furniture’s and they are the best Local Shifting Packers and Movers in New Delhi.\r\n\r\nShift easily anywhere in New Delhi and leave all household goods packing and moving services near you to our professional home shifting experts in New Delhi.\r\n\r\nWhen your are moving locally, you should prefer local packers and movers, who provide local house shifting services from start to end.\r\n\r\nDuring a local house shifting service in New Delhi your cost depends on the amount of time it takes to load and unload and the driving time between locations.\r\n\r\nThis means that unless you require our professional packing services, you should be prepared to have the loading of your move started as soon as your movers and packers team arrives.', 'f6bc643b25dcfa0b88589c156640fbb51574079128.jpg', '2019-11-18 12:12:08'),
(7, 'Test1', 'Local Shifting Packers and Movers in Delhi/NCR.\r\nDue to some reason people need to change their home from one area to another or next home,  they are in needs of packers and movers service provider who can help them to move their heavy furniture or pack their other belongings. Local shifting similar to a domestic just a change of distance. Ganpati Cargo Movers help in Local Shifting of goods and furniture’s and they are the best Local Shifting Packers and Movers in New Delhi.\r\n\r\nShift easily anywhere in New Delhi and leave all household goods packing and moving services near you to our professional home shifting experts in New Delhi.\r\n\r\nWhen your are moving locally, you should prefer local packers and movers, who provide local house shifting services from start to end.\r\n\r\nDuring a local house shifting service in New Delhi your cost depends on the amount of time it takes to load and unload and the driving time between locations.\r\n\r\nThis means that unless you require our professional packing services, you should be prepared to have the loading of your move started as soon as your movers and packers team arrives.', 'c1cf2f36d4624c2f6d61eb64c0fe450b1576843176.jpg', '2019-12-20 12:00:21');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `ID` int(10) NOT NULL,
  `Name` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Location` varchar(200) DEFAULT NULL,
  `ShiftingLoc` varchar(200) DEFAULT NULL,
  `ShiftingDate` varchar(200) DEFAULT NULL,
  `BreifItems` mediumtext DEFAULT NULL,
  `Items` mediumtext DEFAULT NULL,
  `Professional` varchar(200) DEFAULT NULL,
  `RequestDate` timestamp NULL DEFAULT current_timestamp(),
  `Remark` varchar(200) DEFAULT NULL,
  `Status` varchar(50) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`ID`, `Name`, `MobileNumber`, `Email`, `Location`, `ShiftingLoc`, `ShiftingDate`, `BreifItems`, `Items`, `Professional`, `RequestDate`, `Remark`, `Status`, `UpdationDate`) VALUES
(1, 'Nikita Jha', 9898989898, 'nik@gmail.com', 'New Delhi', 'Aligarh', '2019-11-24', 'Very Few items($65-$75)', '2 Beds,Sofa,2 tables 1 freeze', 'Handpicked professionals(Only 3% of packers and movers meet our quality criteria))', '2019-11-19 11:17:18', 'Done', '1', '2019-11-25 18:04:14'),
(2, 'Harish', 4654987894, 'h@gmail.com', 'Noida Sector 67', 'Ghaziabad', '2019-12-18', 'Very Few items($65-$75)', 'uyiivyiiuyu\'l;fckewyiuyiuedcjsdv iuyv r3iu yibiergerwyt8 utuw ev ur3urew7uyfwe b e7yrewu', 'Handpicked professionals(Only 3% of packers and movers meet our quality criteria))', '2019-12-16 08:59:07', 'Ok', '1', '2019-12-16 12:50:53'),
(3, 'Jahan kumar', 8755487864, 'jahan@gmail.com', 'Jalandar', 'Noida', '2019-12-18', 'Very Few items($65-$75)', 'jgjgjgjgjgbhggdkn h iulkjijf  hfiue  ud h sdkchdsk i ihedk icksnfse ., wh k diuy ksjf. hrwe kw  iuhdesndc  dhynx iudhzk hduie  bsdmn', 'Trusted & Reliable professionals(Professionals are background verified)', '2019-12-17 05:01:04', NULL, NULL, NULL),
(4, 'Anuj', 1234567890, 'anuj@gmail.com', 'Delhi', 'Noida', '2019-12-24', 'Very Few items($65-$75)', 'This is for testing.', 'Handpicked professionals(Only 3% of packers and movers meet our quality criteria))', '2019-12-21 05:48:17', 'this is for testing.', '1', '2019-12-21 05:48:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcontact`
--
ALTER TABLE `tblcontact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblpage`
--
ALTER TABLE `tblpage`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblservices`
--
ALTER TABLE `tblservices`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblcontact`
--
ALTER TABLE `tblcontact`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblpage`
--
ALTER TABLE `tblpage`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblservices`
--
ALTER TABLE `tblservices`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
