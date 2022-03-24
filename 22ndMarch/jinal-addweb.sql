-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 24, 2022 at 07:43 AM
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
-- Database: `jinal-addweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `Bank`
--

CREATE TABLE `Bank` (
  `Cust_Id` int(5) NOT NULL,
  `Cust_Name` varchar(20) NOT NULL,
  `Account_No.` bigint(15) NOT NULL,
  `Mobile_No.` bigint(10) NOT NULL,
  `Transaction_No.` bigint(15) NOT NULL,
  `Balance` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Bank`
--

INSERT INTO `Bank` (`Cust_Id`, `Cust_Name`, `Account_No.`, `Mobile_No.`, `Transaction_No.`, `Balance`) VALUES
(1001, 'Jinal Shah', 3587451262, 7856941230, 2587, 100000),
(1250, 'Prachi Shah', 89745632100, 8745632150, 558, 58000),
(2112, 'Khushi Shukla', 879546321045, 9874563210, 125, 85000),
(1580, 'Nidhi Jain', 98745632, 9876214530, 689, 75000),
(1785, 'Aaqib Shaikh', 8745962134, 9874563210, 145, 87000),
(110, 'Taksh Shah', 11078965412, 9874563211, 111, 65000),
(213, 'Amil Shah', 875469213, 5468712390, 121, 56000),
(123, 'Preet Jethaliya', 879456321, 9874563021, 136, 97000),
(1458, 'Raj Shah', 879657894, 8745632100, 875, 99000),
(154, 'Rujul Shah', 987456321, 214569876, 1568, 86000);

-- --------------------------------------------------------

--
-- Table structure for table `Blog_Post`
--

CREATE TABLE `Blog_Post` (
  `Post_Id` int(5) NOT NULL,
  `Post_Type` varchar(20) NOT NULL,
  `Post_Location` varchar(25) NOT NULL,
  `Post_Comment` bigint(10) NOT NULL,
  `Post_Like` bigint(10) NOT NULL,
  `Post_Author` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Blog_Post`
--

INSERT INTO `Blog_Post` (`Post_Id`, `Post_Type`, `Post_Location`, `Post_Comment`, `Post_Like`, `Post_Author`) VALUES
(11, 'Biography', 'Bharuch', 100, 150, 'Amil Shah'),
(12, 'Entertainment', 'Ahmedabad', 180, 250, 'Jinal Shah'),
(18, 'Motivational', 'Mumbai', 150, 300, 'Nidhi Jain'),
(24, 'Travelling', 'Kashmir', 260, 9800, 'Aaqib Shaikh'),
(27, 'Motivational', 'Delhi', 160, 170, 'Raj Shah'),
(38, 'Travelling', 'Surat', 80, 300, 'Khushi Shukla'),
(45, 'Food', 'Baroda', 160, 400, 'Prachi Shah'),
(55, 'Entertainment', 'Delhi', 560, 1200, 'Preet Jethaliya'),
(78, 'Adventure', 'Jaipur', 56, 480, 'Rujul Shah'),
(89, 'Movies', 'Rajkot', 89, 600, 'Taksh Shah');

-- --------------------------------------------------------

--
-- Table structure for table `Employee`
--

CREATE TABLE `Employee` (
  `Emp_Id` int(5) NOT NULL,
  `Emp_Name` varchar(20) NOT NULL,
  `Emp_Designation` varchar(25) NOT NULL,
  `Emp_Salary` bigint(8) NOT NULL,
  `Emp_MobileNo` bigint(10) NOT NULL,
  `Emp_Location` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Employee`
--

INSERT INTO `Employee` (`Emp_Id`, `Emp_Name`, `Emp_Designation`, `Emp_Salary`, `Emp_MobileNo`, `Emp_Location`) VALUES
(1, 'Jinal', 'Full Stack Trainee', 50000, 8974561235, 'Ahmedabad'),
(2, 'Nidhi', 'Full Stack Trainee', 50000, 7845632198, 'Ahmedabad'),
(3, 'Prachi', 'Web Developer', 45000, 7894562548, 'Mumbai'),
(4, 'Khushi', 'QA', 30000, 9647892536, 'Ahmedabad'),
(5, 'Aastha', 'Business Analyst', 25000, 7896541235, 'Rajkot'),
(6, 'Kirmi', 'Interior Designer', 45000, 8754632154, 'Vadodara'),
(7, 'Amil', 'Cloth Merchant', 25000, 1239874560, 'Surat'),
(8, 'Rujul', 'C-R Manager', 35000, 7845123698, 'Delhi'),
(9, 'Preet', 'C.A.', 45000, 7845369214, 'Rajasthan'),
(10, 'Raj', 'Marketing ', 30000, 7845123697, 'Ahmedabad');

-- --------------------------------------------------------

--
-- Table structure for table `Hospital`
--

CREATE TABLE `Hospital` (
  `Patient_ID` int(5) NOT NULL,
  `Patient_Name` varchar(20) NOT NULL,
  `Ward_No` int(5) NOT NULL,
  `Doctor_Name` varchar(25) NOT NULL,
  `Admit_Date` date NOT NULL,
  `Disease_Name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Hospital`
--

INSERT INTO `Hospital` (`Patient_ID`, `Patient_Name`, `Ward_No`, `Doctor_Name`, `Admit_Date`, `Disease_Name`) VALUES
(1206, 'Mahee Gandhi', 8, 'Dr. Nagpal', '2022-03-02', 'Typhoid'),
(5205, 'Amil Shah', 11, 'Dr. Aniruddh Shah', '2022-03-10', 'Appendix'),
(1101, 'Dhruvi Shah', 5, 'Dr. Saurabh Shah', '2022-03-11', 'Dengue'),
(3602, 'Rujul Shah', 4, 'Dr. Kalpit Shah', '2022-02-11', 'Jaundice'),
(805, 'Maurvi Shah', 2, 'Dr. Saurabh Shah', '2022-03-11', 'Typhoid'),
(611, 'Kashish Shah', 7, 'Dr. Amit Sangvi', '2022-01-08', 'Teeth Implantment'),
(1111, 'Deep Vakharia', 15, 'Dr. R.R. Gupta', '2021-12-02', 'Laser Treatment'),
(2085, 'Raj Shah', 4, 'Dr. Yogen Thakkar', '2022-01-06', 'Jaundice'),
(2503, 'Khushi Shah', 1, 'Dr. Amit Sanghavi', '2021-11-10', 'Laser Treatment'),
(5724, 'Parshwa Shah', 7, 'Dr. Aniruddh Shah', '2021-12-15', 'Fever');

-- --------------------------------------------------------

--
-- Table structure for table `Movies`
--

CREATE TABLE `Movies` (
  `Movie_Name` varchar(20) NOT NULL,
  `IMDB_Ratings` float(3,2) NOT NULL,
  `Actor_Name` varchar(20) NOT NULL,
  `Actress_Name` varchar(25) NOT NULL,
  `BoxOffice_Collection` bigint(15) NOT NULL,
  `Producer_Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Movies`
--

INSERT INTO `Movies` (`Movie_Name`, `IMDB_Ratings`, `Actor_Name`, `Actress_Name`, `BoxOffice_Collection`, `Producer_Name`) VALUES
('Luka Chuppi', 4.40, 'Kartik Aaryan', 'Kriti Sanon', 100, 'Dinesh Vijan'),
('SherShaah', 4.80, 'Siddharth Malhotra', 'Kiara Advani', 136, 'Karan Johar'),
('Kashmir Files', 4.87, 'Anupam Kher', 'Pallavi Joshi', 200, 'Vivek Agnihotri'),
('Dhamaka', 3.00, 'Kartik Aaryan', 'Mrunal Thakkar', 55, 'Amruta Subhash'),
('DDLJ', 4.90, 'Shahrukh Khan', 'Kajol', 250, 'Karan Johar'),
('Pushpa', 4.30, 'Allu Arjun', 'Rashmika Mandanna', 100, 'Naveen Yerneni'),
('Bahubali', 4.60, 'Prabhas', 'Anushka Shetty', 280, 'S.S.Rajamouli'),
('YehJawanihaiDeewani', 4.30, 'Ranbir Kapoor', 'Deepika Padukone', 260, 'Ayan Mukherjee'),
('VeerZaara', 4.10, 'Shahrukh Khan', 'Preity Zinta', 78, 'Yash Chopra'),
('Swades', 4.20, 'Shahrukh Khan', 'Gayatri Joshi', 100, 'Ashutosh Gowarikar');

-- --------------------------------------------------------

--
-- Table structure for table `Order_Table`
--

CREATE TABLE `Order_Table` (
  `Order_Id` int(5) NOT NULL,
  `Postal_Code` varchar(20) NOT NULL,
  `Order_Quantity` bigint(10) NOT NULL,
  `Customer_Id` int(5) NOT NULL,
  `Order_Status` varchar(20) NOT NULL,
  `Order_Price` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Order_Table`
--

INSERT INTO `Order_Table` (`Order_Id`, `Postal_Code`, `Order_Quantity`, `Customer_Id`, `Order_Status`, `Order_Price`) VALUES
(125, '380007', 15, 135, 'Shipped', 850),
(111, '380001', 10, 230, 'Pending', 250),
(251, '380006', 20, 156, 'Shipped', 250),
(125, '380005', 20, 235, 'Pending', 450),
(874, '350001', 960, 563, 'Shipped', 560),
(135, '430001', 56, 125, 'Pending', 250),
(189, '360007', 258, 117, 'Pending', 145),
(189, '380015', 89, 891, 'Pending', 156),
(561, '380002', 35, 258, 'Shipped', 300),
(257, '380009', 58, 354, 'Pending', 130);

-- --------------------------------------------------------

--
-- Table structure for table `Product`
--

CREATE TABLE `Product` (
  `Product_Id` int(5) NOT NULL,
  `Product_Name` varchar(20) NOT NULL,
  `Product_Quantity` bigint(10) NOT NULL,
  `Product_Price` bigint(10) NOT NULL,
  `In_Stock` bigint(10) NOT NULL,
  `Total_Quantity_Sold` bigint(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Product`
--

INSERT INTO `Product` (`Product_Id`, `Product_Name`, `Product_Quantity`, `Product_Price`, `In_Stock`, `Total_Quantity_Sold`) VALUES
(123, 'Foundation', 3, 500, 100, 1500),
(154, 'CC Cream', 3, 110, 125, 500),
(115, 'EyeLiner', 3, 80, 250, 560),
(165, 'Mascara', 2, 120, 300, 265),
(145, 'Lipstick', 5, 299, 240, 630),
(78, 'Scrunchies', 15, 20, 350, 450),
(58, 'Kajal', 3, 70, 80, 500),
(78, 'Moisturizer', 2, 250, 360, 560),
(11, 'Blender', 5, 10, 540, 640),
(58, 'Eye Lashes', 3, 80, 150, 350);

-- --------------------------------------------------------

--
-- Table structure for table `Restaurant`
--

CREATE TABLE `Restaurant` (
  `Table_No` int(5) NOT NULL,
  `Order_Id` int(10) NOT NULL,
  `Items_Name` varchar(30) NOT NULL,
  `Item_Price` int(15) NOT NULL,
  `Quantity` bigint(6) NOT NULL,
  `Total_Bill` bigint(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Restaurant`
--

INSERT INTO `Restaurant` (`Table_No`, `Order_Id`, `Items_Name`, `Item_Price`, `Quantity`, `Total_Bill`) VALUES
(12, 156, 'Cheese Butter Masala', 300, 3, 900),
(35, 123, 'Burger', 80, 5, 400),
(28, 453, 'Dosa', 250, 10, 2500),
(7, 11, 'PaniPuri', 50, 15, 600),
(26, 136, 'Bhaji-Pav', 240, 6, 3000),
(64, 789, 'Pizza', 450, 8, 5000),
(60, 45, 'Mexican Hotpot', 560, 9, 4000),
(11, 27, 'IceCream', 200, 10, 2700),
(56, 37, 'Bruschetta', 360, 5, 1800),
(43, 67, 'Alfredo Pasta', 340, 7, 3000);

-- --------------------------------------------------------

--
-- Table structure for table `Student`
--

CREATE TABLE `Student` (
  `Roll No.` int(5) NOT NULL,
  `Student_Name` varchar(20) NOT NULL,
  `Division` varchar(5) NOT NULL,
  `Mobile_No` bigint(10) NOT NULL,
  `School Name` varchar(20) NOT NULL,
  `Percentage` float(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Student`
--

INSERT INTO `Student` (`Roll No.`, `Student_Name`, `Division`, `Mobile_No`, `School Name`, `Percentage`) VALUES
(11, 'Jinal Shah', 'A', 7845963214, 'GLS ', 87.84),
(24, 'Prachi Shah', 'B', 7865412030, 'A-One', 84.86),
(15, 'Khushi Shukla', 'B', 7845632140, 'A.G.High School', 84.58),
(45, 'Nidhi Jain', 'A', 7845693210, 'SomLalit', 88.86),
(7, 'Taksh Shah', 'A', 7845693210, 'St.Xaviers', 94.64),
(65, 'Amil Shah', 'B', 8754691230, 'D.P.S', 75.64),
(12, 'Preet Jethaliya', 'B', 7845694320, 'AmrutJyoti', 75.85),
(56, 'Raj Shah', 'B', 7845697250, 'Sarvayogam', 78.65),
(35, 'Parshwa Shah', 'B', 7845632150, 'M.K. High School', 87.65),
(25, 'Tirth Shah', 'B', 8403521090, 'St.Xaviers School', 75.86);

-- --------------------------------------------------------

--
-- Table structure for table `Travel`
--

CREATE TABLE `Travel` (
  `Booking_Id` int(5) NOT NULL,
  `Passenger_Name` varchar(20) NOT NULL,
  `Source` varchar(25) NOT NULL,
  `Destination` varchar(25) NOT NULL,
  `Departure` date NOT NULL,
  `Arrival` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Travel`
--

INSERT INTO `Travel` (`Booking_Id`, `Passenger_Name`, `Source`, `Destination`, `Departure`, `Arrival`) VALUES
(1001, 'Jinal Shah', 'Ahmedabad', 'Thailand', '2022-03-30', '2022-04-07'),
(1002, 'Prachi Shah', 'Surat', 'Maldives', '2022-03-28', '2022-03-05'),
(1003, 'Khushi Shukla', 'Rajkot', 'Dubai', '2022-05-11', '2022-05-19'),
(1004, 'Nidhi Jain', 'Mumbai', 'Phuket', '2022-04-28', '2022-05-07'),
(1005, 'Taksh', 'Ahmedabad', 'USA', '2022-03-28', '2022-04-08'),
(1006, 'Amil', 'Rajkot', 'Canada', '2022-03-31', '2022-04-08'),
(1007, 'Rujul Shah', 'Ahmedabad', 'London', '2022-04-12', '2022-03-19'),
(1008, 'Preet Jethaliya', 'Mumbai', 'Manali', '2022-03-26', '2022-04-08'),
(1009, 'Parshwa Shah', 'Ahmedabad', 'Tibet', '2022-05-09', '2022-05-19'),
(1010, 'Hardik Shah', 'Canada', 'Gujarat', '2022-05-12', '2022-05-31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Blog_Post`
--
ALTER TABLE `Blog_Post`
  ADD PRIMARY KEY (`Post_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Blog_Post`
--
ALTER TABLE `Blog_Post`
  MODIFY `Post_Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
