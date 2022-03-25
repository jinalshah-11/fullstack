-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 25, 2022 at 10:34 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jinaldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `ArtGallery`
--

CREATE TABLE `ArtGallery` (
  `art_id` bigint(5) NOT NULL,
  `artist_name` varchar(30) NOT NULL,
  `style_of_work` varchar(40) NOT NULL DEFAULT 'Abstract',
  `price` bigint(10) NOT NULL,
  `date_of_making` date NOT NULL,
  `mobile_no` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ArtGallery`
--

INSERT INTO `ArtGallery` (`art_id`, `artist_name`, `style_of_work`, `price`, `date_of_making`, `mobile_no`) VALUES
(11, 'Rembrandt', 'Abstract', 100000, '1642-10-07', 9854632107),
(12, 'Albrecht Durer', 'Blending', 200000, '1502-11-12', 8467891230),
(13, 'Michelangelo', 'Cubism', 250000, '1860-12-24', 8745632109),
(14, 'Amrita SherGill', 'Expressionism', 350000, '1930-10-15', 8745632110),
(15, 'Rabindranath Tagore', 'Grotesque', 400000, '1890-12-11', 12345698770),
(16, 'Nandalal Bose', 'Baroque', 150000, '1990-07-15', 7896523104),
(17, 'Sunil Das', 'Minimalism', 280000, '1880-11-07', 6547893210),
(18, 'Silpi', 'Land Art', 270000, '1945-08-15', 7894563012),
(19, 'MF Hussain', 'Rococo', 178000, '2005-04-18', 6325147890),
(20, 'Ananta Mandal', 'WaterColorist', 80000, '2004-06-28', 7896542103);

-- --------------------------------------------------------

--
-- Table structure for table `BloodBank`
--

CREATE TABLE `BloodBank` (
  `donor_id` bigint(10) NOT NULL,
  `donor_name` varchar(20) NOT NULL,
  `bloodgroup` varchar(3) NOT NULL,
  `bloodtaken_dt` date NOT NULL,
  `centre_name` varchar(30) NOT NULL,
  `Mobile_No` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `BloodBank`
--

INSERT INTO `BloodBank` (`donor_id`, `donor_name`, `bloodgroup`, `bloodtaken_dt`, `centre_name`, `Mobile_No`) VALUES
(24, 'AaqibShaikh', 'AB-', '2015-04-19', 'Navrangpura', 9754213601),
(123, 'AmilShah', 'AB-', '2020-05-09', 'Shyamal', 9898639701),
(126, 'NidhiJain', 'O+', '2018-08-19', 'Dehgam', 9985460210),
(251, 'RujulShah', '0-', '2022-03-18', 'Shantivan', 9898009342),
(386, 'Ravi Vaghela', 'A+', '2016-10-29', 'Narol', 9989456320),
(789, 'JinalShah', 'A+', '2020-03-15', 'Paldi', 9874563210),
(1107, 'RajShah', 'A-', '2019-06-28', 'Vasna', 9865483210),
(1897, 'KhushiShukla', 'AB+', '2019-11-07', 'Bopal', 9878954156),
(9325, 'TakshShah', '0+', '2015-12-11', 'ManekChawk', 9898170758),
(9654, 'PrachiShah', 'B-', '2021-04-28', 'Satellite', 9874512036);

-- --------------------------------------------------------

--
-- Table structure for table `Car_Rental_System`
--

CREATE TABLE `Car_Rental_System` (
  `booking_id` bigint(5) NOT NULL,
  `car_name` varchar(30) NOT NULL DEFAULT 'Audi',
  `amount` bigint(10) NOT NULL,
  `customer_mobile_no` bigint(10) NOT NULL,
  `customer_location` varchar(50) NOT NULL,
  `booking_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Car_Rental_System`
--

INSERT INTO `Car_Rental_System` (`booking_id`, `car_name`, `amount`, `customer_mobile_no`, `customer_location`, `booking_date`) VALUES
(1, 'AUDI', 37000, 7845691230, 'Ahmedabad', '2020-09-20'),
(2, 'BMW', 50000, 7849871230, 'Delhi', '2021-11-07'),
(3, 'I20', 25000, 7945612700, 'Mumbai', '2019-10-20'),
(4, 'JAGUAR', 40000, 9898561230, 'Hyderabad', '2015-12-11'),
(5, 'LAMBORGHINI', 20000, 9898003956, 'Banglore', '2004-03-18'),
(6, 'KIA', 25000, 9898009342, 'Rajasthan', '2002-06-24'),
(7, 'BREZZA', 30000, 7227377233, 'Assam', '1999-05-28'),
(8, 'HONDACITY', 15000, 7227977299, 'WestBengal', '2012-11-25'),
(9, 'MERCEDES', 24000, 9409882045, 'Manali', '1996-12-05'),
(10, 'FERARRI', 45000, 6398745620, 'AndhraPradesh', '2007-07-15');

-- --------------------------------------------------------

--
-- Table structure for table `Company`
--

CREATE TABLE `Company` (
  `company_id` bigint(5) NOT NULL,
  `company_name` varchar(30) NOT NULL,
  `company_mail` varchar(30) NOT NULL,
  `company_mobile_no` bigint(10) NOT NULL,
  `company_location` varchar(50) NOT NULL,
  `company_type` varchar(30) NOT NULL DEFAULT 'IT'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Company`
--

INSERT INTO `Company` (`company_id`, `company_name`, `company_mail`, `company_mobile_no`, `company_location`, `company_type`) VALUES
(1, 'AddWeb Solution', 'addweb@gmail.com', 7894563211, 'Ahmedabad', 'IT'),
(2, 'Reliance', 'reliance@gmail.com', 9874563211, 'Jamnagar', 'telecommunications'),
(3, 'Tata', 'tata@gmail.com', 7854123098, 'Mumbai', 'Motors'),
(4, 'Adani', 'adani@gmail.com', 6547893210, 'Ahmedabad', 'Green Energy'),
(5, 'Hindustan_Unilever', 'hinduni@gmail.com', 8745632910, 'Mumbai', 'Personal Care'),
(6, 'HDFC Bank', 'hdfc@gmail.com', 7845693201, 'Mumbai', 'Finance'),
(7, 'Infosys', 'infosys@gmail.com', 6389745610, 'Banglore', 'IT'),
(8, 'Apollo Tyres', 'apollo@gmail.com', 7894563210, 'Kerala', 'ConsumerGoods'),
(9, 'ICICI Bank', 'icici@gmail.com', 6325410789, 'Vadodara', 'Finance'),
(10, 'Cipla Limited', 'ciple@gmail.com', 7845630912, 'Mumbai', 'HealthCare');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `emp_id` bigint(10) NOT NULL,
  `dept_id` bigint(10) NOT NULL,
  `emp_name` varchar(30) NOT NULL,
  `emp_job` varchar(20) NOT NULL,
  `salary` bigint(10) NOT NULL,
  `annual_salary` bigint(10) NOT NULL,
  `commission` bigint(10) DEFAULT NULL,
  `joining_date` date NOT NULL,
  `experience_year` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`emp_id`, `dept_id`, `emp_name`, `emp_job`, `salary`, `annual_salary`, `commission`, `joining_date`, `experience_year`) VALUES
(1, 12, 'JinalShah', 'FullStackTrainee', 25000, 300000, 5000, '2022-02-02', 2),
(2, 15, 'PrachiShah', 'WebDeveloper', 35000, 300000, 5000, '2021-10-11', 1),
(3, 18, 'RajShah', 'Finance', 20000, 240000, 3000, '2021-12-11', 1),
(4, 22, 'RujulShah', 'Marketing', 30000, 360000, 5000, '2020-11-07', 2),
(5, 7, 'AmilShah', 'QA', 35000, 420000, 5000, '2018-12-11', 4),
(6, 5, 'KhushiShukla', 'Trainee', 20000, 240000, 3000, '2015-07-16', 7),
(7, 32, 'Deep Vakharia', 'FullStackTrainee', 25000, 300000, 5000, '2012-11-24', 10),
(8, 450, 'JinalShah', 'SystemAnalyst', 15000, 180000, 3000, '2010-09-25', 11),
(9, 560, 'NidhiJain', 'FullStackTrainee', 25000, 300000, 5000, '2009-05-10', 12),
(10, 350, 'GhanshyamPandya', 'FullStackTrainee', 25000, 300000, 5000, '2004-10-09', 17),
(11, 260, 'AaqibShaikh', 'FullStackTrainee', 25000, 300000, 5000, '2002-12-28', 20),
(12, 540, 'RaviVaghela', 'FullStackTrainee', 25000, 300000, 5000, '2020-01-02', 20),
(13, 360, 'TakshShah', 'CRManager', 50000, 600000, 10000, '2021-11-07', 1),
(14, 210, 'JinayShah', 'QATrainee', 33000, 3960000, 7000, '2019-10-16', 3),
(15, 110, 'PreetJethaliya', 'CTO', 100000, 1200000, 50000, '2006-02-18', 16);

-- --------------------------------------------------------

--
-- Table structure for table `FruitSellingSystem`
--

CREATE TABLE `FruitSellingSystem` (
  `customer_id` int(3) NOT NULL,
  `customer_name` varchar(20) NOT NULL,
  `mobile_no` bigint(10) NOT NULL,
  `fruit_quantity` bigint(5) NOT NULL,
  `fruit_price` bigint(6) NOT NULL,
  `delivery_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `FruitSellingSystem`
--

INSERT INTO `FruitSellingSystem` (`customer_id`, `customer_name`, `mobile_no`, `fruit_quantity`, `fruit_price`, `delivery_date`) VALUES
(1, 'JinalShah', 9874563210, 30, 400, '2021-03-29'),
(2, 'PrachiShah', 8745632100, 50, 500, '2021-11-30'),
(3, 'RujulShah', 8804032100, 40, 400, '2021-10-11'),
(4, 'TakshShah', 8734562100, 65, 605, '2021-10-11'),
(5, 'RajShah', 9409587632, 80, 700, '2021-12-30'),
(6, 'KhushiShukla', 9403502100, 45, 502, '2020-10-28'),
(7, 'AmilShah', 8745602100, 30, 560, '2021-08-28'),
(8, 'NidhiJain', 9874562100, 45, 870, '2021-10-21'),
(9, 'AaqibShaikh', 8744562100, 65, 780, '2020-12-31'),
(10, 'RaviVaghela', 8874562100, 25, 800, '2021-11-28');

-- --------------------------------------------------------

--
-- Table structure for table `HotelManagementSystem`
--

CREATE TABLE `HotelManagementSystem` (
  `room_no` int(3) NOT NULL,
  `guest_name` varchar(20) NOT NULL,
  `mobile_no` bigint(10) NOT NULL,
  `room_type` varchar(30) NOT NULL DEFAULT 'A.C.',
  `check_in` date NOT NULL,
  `check_out` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `HotelManagementSystem`
--

INSERT INTO `HotelManagementSystem` (`room_no`, `guest_name`, `mobile_no`, `room_type`, `check_in`, `check_out`) VALUES
(11, 'JinalShah', 9874563210, 'A.C', '2020-03-15', '2021-03-29'),
(12, 'PrachiShah', 8745632100, 'Non A.C', '2021-11-12', '2021-11-30'),
(13, 'RujulShah', 8804032100, 'Non A.C.', '2021-11-12', '2021-11-30'),
(14, 'TakshShah', 8734562100, 'A.C.', '2021-09-28', '2021-10-11'),
(15, 'RajShah', 9409587632, 'Non A.C.', '2021-12-12', '2021-12-30'),
(16, 'KhushiShukla', 9403502100, 'Non A.C.', '2020-10-11', '2020-10-28'),
(17, 'AmilShah', 8745602100, 'A.C.', '2021-10-11', '2021-10-21'),
(18, 'NidhiJain', 9874562100, 'Non A.C.', '2021-08-17', '2021-08-28'),
(19, 'AaqibShaikh', 8744562100, 'A.C.', '2020-12-28', '2020-12-31'),
(20, 'RaviVaghela', 8874562100, 'Non A.C.', '2021-11-14', '2021-11-28');

-- --------------------------------------------------------

--
-- Table structure for table `Online_Phone_Shop`
--

CREATE TABLE `Online_Phone_Shop` (
  `model_no` bigint(12) NOT NULL,
  `phone_name` varchar(30) NOT NULL,
  `Availability` char(1) DEFAULT 'Y',
  `Price` float(8,2) DEFAULT NULL,
  `in_stock` bigint(6) DEFAULT NULL,
  `ratings` float(4,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Online_Phone_Shop`
--

INSERT INTO `Online_Phone_Shop` (`model_no`, `phone_name`, `Availability`, `Price`, `in_stock`, `ratings`) VALUES
(1, 'Samsung', 'Y', 30000.00, 300, 4.40),
(2, 'Apple', 'N', 100000.00, 0, 4.80),
(3, 'RealMe', 'Y', 25000.00, 400, 3.90),
(4, 'Xiaomi', 'Y', 20000.00, 605, 3.50),
(5, 'Vivo', 'N', 25000.00, 700, 4.00),
(6, 'Oppo', 'N', 25000.00, 502, 4.10),
(7, 'OnePlus', 'Y', 45000.00, 560, 4.30),
(8, 'Nokia', 'N', 15000.00, 870, 3.80),
(9, 'Poco', 'Y', 24000.00, 780, 3.20),
(10, 'Jio', 'Y', 2000.00, 300, 3.70);

-- --------------------------------------------------------

--
-- Table structure for table `PayrollManagementSystem`
--

CREATE TABLE `PayrollManagementSystem` (
  `emp_id` int(3) NOT NULL,
  `emp_name` varchar(20) NOT NULL,
  `mobile_no` bigint(10) NOT NULL,
  `salary` bigint(10) NOT NULL,
  `designation` varchar(15) NOT NULL,
  `leaves` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `PayrollManagementSystem`
--

INSERT INTO `PayrollManagementSystem` (`emp_id`, `emp_name`, `mobile_no`, `salary`, `designation`, `leaves`) VALUES
(1, 'JinalShah', 9874563210, 30000, 'Trainee', 0),
(2, 'PrachiShah', 8745632100, 25000, 'WebDeveloper', 3),
(3, 'RujulShah', 8804032100, 20000, 'FinanceManager', 2),
(4, 'TakshShah', 8734562100, 50000, 'CivilEngineer', 4),
(5, 'RajShah', 9409587632, 65000, 'BusinessAnalyst', 5),
(6, 'KhushiShukla', 9403502100, 25000, 'QA', 2),
(7, 'AmilShah', 8745602100, 45000, 'HR', 2),
(8, 'NidhiJain', 9874562100, 25000, 'MobDeveloper', 1),
(9, 'AaqibShaikh', 8744562100, 30000, 'Trainee', 1),
(10, 'RaviVaghela', 8874562100, 25000, 'WebDeveloper', 5);

-- --------------------------------------------------------

--
-- Table structure for table `railwaysystem`
--

CREATE TABLE `railwaysystem` (
  `platform_number` bigint(10) NOT NULL,
  `train_no` varchar(20) NOT NULL,
  `source` varchar(30) NOT NULL,
  `destination` varchar(30) NOT NULL,
  `departure` date NOT NULL,
  `arrival` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `railwaysystem`
--

INSERT INTO `railwaysystem` (`platform_number`, `train_no`, `source`, `destination`, `departure`, `arrival`) VALUES
(54679, 'E7597', 'Ahmedabad', 'TamilNadu', '2022-03-27', '2022-04-07'),
(78964, 'A78954', 'Baroda', 'WestBengal', '2022-04-11', '2022-04-27'),
(87954, 'R87896', 'Delhi', 'AndhraPradesh', '2022-04-09', '2022-05-18'),
(95644, 'J87896', 'Rajasthan', 'Manali', '2022-05-17', '2022-06-28'),
(96587, 'HP74565', 'HimachalPradesh', 'Rajasthan', '2022-02-28', '2022-03-13'),
(98456, 'B5467', 'Rajkot', 'Kerala', '2022-04-27', '2022-05-09'),
(110720, 'T89747', 'Mumbai', 'MadhyaPradesh', '2022-04-18', '2022-05-11'),
(257869, 'B78531', 'Bihar', 'Assam', '2022-01-30', '2022-04-23'),
(789654, 'Jk8974', 'Kashmir', 'Kanyakumari', '2022-06-21', '2022-07-05'),
(985412, 'GJ78965', 'Gujarat', 'WestBengal', '2022-05-28', '2022-06-11');

-- --------------------------------------------------------

--
-- Table structure for table `University`
--

CREATE TABLE `University` (
  `dept_id` int(3) NOT NULL,
  `dept_name` varchar(30) NOT NULL DEFAULT 'IT',
  `college_name` varchar(40) NOT NULL,
  `course` varchar(30) NOT NULL,
  `Fees` bigint(10) NOT NULL,
  `college_mobile_no` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `University`
--

INSERT INTO `University` (`dept_id`, `dept_name`, `college_name`, `course`, `Fees`, `college_mobile_no`) VALUES
(21, 'LAW', 'GLS', 'LLB', 500000, 9874563210),
(22, 'IT', 'K.S.School of Business Management', 'DataScience', 800000, 8745632100),
(23, 'Sociology', 'School of Social Science', 'PHD in Sociology', 300000, 8804032100),
(24, 'MBBS', 'BJ Medical College', 'MBBS', 4000000, 8734562100),
(25, 'Management', 'B.K.School of Management', 'MBA', 300000, 9409587632),
(26, 'ARTS', 'H.K.School of ARTS', 'BA', 250000, 9403502100),
(27, 'Business Studies', 'IIM', 'BusinessManagementStudies', 560000, 8745602100),
(28, 'Design', 'GLS', 'FashionDesigning', 1000000, 9874562100),
(29, 'IT', 'HNGU', 'Cyber Security', 500000, 8744562100),
(30, 'LAW', 'GLS', 'LLM', 800000, 8874562100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ArtGallery`
--
ALTER TABLE `ArtGallery`
  ADD PRIMARY KEY (`art_id`),
  ADD UNIQUE KEY `mobile_no` (`mobile_no`);

--
-- Indexes for table `BloodBank`
--
ALTER TABLE `BloodBank`
  ADD PRIMARY KEY (`donor_id`),
  ADD UNIQUE KEY `Mobile_No` (`Mobile_No`);

--
-- Indexes for table `Car_Rental_System`
--
ALTER TABLE `Car_Rental_System`
  ADD PRIMARY KEY (`booking_id`),
  ADD UNIQUE KEY `customer_mobile_no` (`customer_mobile_no`);

--
-- Indexes for table `Company`
--
ALTER TABLE `Company`
  ADD PRIMARY KEY (`company_id`),
  ADD UNIQUE KEY `company_mobile_no` (`company_mobile_no`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `FruitSellingSystem`
--
ALTER TABLE `FruitSellingSystem`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `mobile_no` (`mobile_no`);

--
-- Indexes for table `HotelManagementSystem`
--
ALTER TABLE `HotelManagementSystem`
  ADD PRIMARY KEY (`room_no`),
  ADD UNIQUE KEY `mobile_no` (`mobile_no`);

--
-- Indexes for table `Online_Phone_Shop`
--
ALTER TABLE `Online_Phone_Shop`
  ADD PRIMARY KEY (`model_no`);

--
-- Indexes for table `PayrollManagementSystem`
--
ALTER TABLE `PayrollManagementSystem`
  ADD PRIMARY KEY (`emp_id`),
  ADD UNIQUE KEY `mobile_no` (`mobile_no`);

--
-- Indexes for table `railwaysystem`
--
ALTER TABLE `railwaysystem`
  ADD PRIMARY KEY (`platform_number`);

--
-- Indexes for table `University`
--
ALTER TABLE `University`
  ADD PRIMARY KEY (`dept_id`),
  ADD UNIQUE KEY `college_mobile_no` (`college_mobile_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ArtGallery`
--
ALTER TABLE `ArtGallery`
  MODIFY `art_id` bigint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `BloodBank`
--
ALTER TABLE `BloodBank`
  MODIFY `donor_id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9655;

--
-- AUTO_INCREMENT for table `Car_Rental_System`
--
ALTER TABLE `Car_Rental_System`
  MODIFY `booking_id` bigint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `Company`
--
ALTER TABLE `Company`
  MODIFY `company_id` bigint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `emp_id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `FruitSellingSystem`
--
ALTER TABLE `FruitSellingSystem`
  MODIFY `customer_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `HotelManagementSystem`
--
ALTER TABLE `HotelManagementSystem`
  MODIFY `room_no` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `Online_Phone_Shop`
--
ALTER TABLE `Online_Phone_Shop`
  MODIFY `model_no` bigint(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `PayrollManagementSystem`
--
ALTER TABLE `PayrollManagementSystem`
  MODIFY `emp_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `railwaysystem`
--
ALTER TABLE `railwaysystem`
  MODIFY `platform_number` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=985413;

--
-- AUTO_INCREMENT for table `University`
--
ALTER TABLE `University`
  MODIFY `dept_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
