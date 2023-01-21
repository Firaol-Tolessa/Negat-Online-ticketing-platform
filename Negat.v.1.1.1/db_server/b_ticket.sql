-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2022 at 06:14 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `b_ticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `Cust_ID` int(11) NOT NULL,
  `t_number` int(11) NOT NULL,
  `t-type` varchar(10) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `b_user`
--

CREATE TABLE `b_user` (
  `userID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `b_user`
--

INSERT INTO `b_user` (`userID`, `username`, `password`) VALUES
(1, '', ''),
(2, 'firaol', '1'),
(3, '2323', 'dwd'),
(4, '', ''),
(5, '', ''),
(6, '', ''),
(7, '', ''),
(8, '', ''),
(9, '', ''),
(10, '', ''),
(11, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `concert`
--

CREATE TABLE `concert` (
  `Concert_ID` int(11) NOT NULL,
  `ConcertName` varchar(50) NOT NULL,
  `Presenter` varchar(30) NOT NULL,
  `Location` varchar(30) NOT NULL,
  `Capacity` varchar(15) NOT NULL,
  `Date` varchar(200) NOT NULL,
  `Price` varchar(15) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `Discount` varchar(10) NOT NULL,
  `Description` varchar(250) NOT NULL,
  `Time` varchar(200) NOT NULL,
  `t_available` varchar(15) NOT NULL,
  `image` varchar(100) NOT NULL,
  `video` varchar(150) NOT NULL,
  `video_descr` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `concert`
--

INSERT INTO `concert` (`Concert_ID`, `ConcertName`, `Presenter`, `Location`, `Capacity`, `Date`, `Price`, `Status`, `Discount`, `Description`, `Time`, `t_available`, `image`, `video`, `video_descr`) VALUES
(1, 'AN AWSOME EXPERIENCE FOR ALL', 'Aster Awoke', 'Sheraten Addiss', '1000', '<span>MONDAY</span>\n<span class=\"september-29\">JUNE 29TH</span>        <span>2022</span>', '8', 'Available', '15', 'This concert is very aguagi since it will be the final concert for aster awoke in her life and it is unique in kind .there are so many popular and  famous Ethiopian artists in the concert.', '<p>12:00 PM <span>TO</span> 2:00 PM</p> ', '400', 'aster.jpg', 'https://www.youtube.com/embed/ULgwcno7gZs', 'Singer/songwriter Aster Aweke has been entertaining international audiences for over 30 years and winning the hearts and minds of world music lovers everywhere. Her songs are anthems to Ethiopian fans and throughout the Ethiopian Diaspora.  Ćhewa  (Decent) her 25th album, was produced with emerging music producers, Tamiru Amare and Wendimeneh Assefa.  Kabu Records is pleased to present this new and exhilarating album to dedicated and new fans alike.'),
(2, 'WHAT IS GOING ', 'Tsehaye Yohannes', 'Biherawi Theater', '500', '<span>TUESDAY</span>\r\n<span class=\"september-29\">JUNE 29TH</span> <span>2022</span>', '10', 'Available', '0', 'Tsehaye Yohannes is best ehtiopian singer and he sets his ashara in each and every ethiopian heart .', '<p>12:00 PM <span>TO</span> 2:00 PM</p> ', '272', 'tsehaye.jpg', 'https://www.youtube.com/embed/lUkOfeKk4zM', 'ወደር የማይገኝላቸው ምርጥ የሙዚቃ ስራዎቹ ከትውልድ ትውልድ እየተተላለፉ ዛሬም ይደመጣሉ፡፡ በሚያምረው አዘፋፈኑ ያልዳሰሰው ሃሳብ የለም ፣ ዘላለም በሙያቸው ከምናከብራቸው ድምፃዊያን መካከል አንዱ ነው፡፡ ተውዳጁና አንጋፉው ድምፃዊ \"ፀሃዬ_ዩሃንስ\"  ስለሃገር_ፍቅር ስለመተባበርና መከባበር ማዜም ከጀመረ አመታት ተቆጥረዋል፡፡ የሃገር ፍቅር ምንነትንና የሙዚቃ አቅምን በህዝብ ለህዝብ መድረክ ካሳዩን ድምፃዊያን መካከል አንዱ ነው ፡፡  ●● ማን እንደ እናት ማን እንደሃገር●●  ይህ ዘፈን ዳግም የቤተሰብ እና የሃገር ፍቅርን ይቀሰቅሳል፡፡ ናፍቆትን አብሶ ጉንጭን በእንባ ያርሳል፡፡ ይህ ተወዳጅ ስራም ሁላችንም በተደመርንበት በአሁን ጊዜ የዚህ ዘፈን የሙዚቃ ቪዲዮው ተሰርቶ ተጠናቋል፡፡ ምነው ሸዋ ትዩብ');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Cust_ID` int(11) NOT NULL,
  `Name` varchar(10) NOT NULL,
  `Bank_Acc` int(11) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Date` varchar(15) NOT NULL,
  `Ccv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Cust_ID`, `Name`, `Bank_Acc`, `Email`, `Date`, `Ccv`) VALUES
(982096381, 'firaol', 1, 'firaoltoless@gmail.com', '1', 1),
(1965851634, 'firaol', 0, 'admin@central.com', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `Type` varchar(15) NOT NULL,
  `Time` varchar(20) NOT NULL,
  `place` varchar(50) NOT NULL,
  `presenter` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`Type`, `Time`, `place`, `presenter`) VALUES
('Music festival', '12:00', 'OAKA', '10110');

-- --------------------------------------------------------

--
-- Table structure for table `football`
--

CREATE TABLE `football` (
  `Playoff` varchar(100) NOT NULL,
  `Stadium` varchar(150) NOT NULL,
  `Date` varchar(30) NOT NULL,
  `Price` int(11) NOT NULL,
  `Capacity` int(11) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `F_ID` int(11) NOT NULL,
  `img1` varchar(70) NOT NULL,
  `img2` varchar(70) NOT NULL,
  `Description` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `football`
--

INSERT INTO `football` (`Playoff`, `Stadium`, `Date`, `Price`, `Capacity`, `Status`, `F_ID`, `img1`, `img2`, `Description`) VALUES
('st.Georg vs et.Bunna', 'Bahirdar in;.stadium', '2014:12:10', 100, 1000, 'Available', 1, '', '', 'This is the match we have been waiting for. With the end of priemer league upon us dont miss it. The new head coach has given a comment about the macht saying,\"playoffs will be like a traing for our boys\"'),
('Jimma vs arbaminch', 'AddisAbaba', '2014:11:05', 100, 1000, 'Postponed', 12, '[value-8]', '[value-9]', 'Hold on and get you tickets for free. Thats right a free pass is being given away fort free.The division is ever becoming tighter');

-- --------------------------------------------------------

--
-- Table structure for table `f_clubs`
--

CREATE TABLE `f_clubs` (
  `name` varchar(50) NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `f_clubs`
--

INSERT INTO `f_clubs` (`name`, `image`) VALUES
('st.george', 'image/match/Giorgis/club.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `Name` varchar(50) NOT NULL,
  `Capacity` int(11) NOT NULL,
  `Descr` varchar(150) NOT NULL,
  `Review` varchar(50) NOT NULL,
  `city` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`Name`, `Capacity`, `Descr`, `Review`, `city`, `phone`) VALUES
('Millinum', 50000, 'Come and enjoy your time with us', '5 star', 'Addis Ababa', '+251911223111'),
('OAKA', 100000, 'A place of full enjoyment', '5 star', 'Addis Ababa', '+251911716151');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `User_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `team` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`team`, `name`, `image`) VALUES
('[value-1]', '[value-2]', 'image/match/Giorgis/7.jpg'),
('[value-1]', '[value-2]', 'image/match/Giorgis/20.jpg'),
('[value-1]', '[value-2]', 'image/match/Giorgis/8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `presenter`
--

CREATE TABLE `presenter` (
  `P_ID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Review` varchar(30) NOT NULL,
  `Descr` varchar(500) NOT NULL,
  `Image` varchar(60) NOT NULL,
  `Video_url` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `presenter`
--

INSERT INTO `presenter` (`P_ID`, `Name`, `Review`, `Descr`, `Image`, `Video_url`) VALUES
(1025, 'Tedy Afro', 'I cant wait for the next album', 'Tewodros Kassahun Germamo, known professionally as Teddy Afro, is an Ethiopian singer-songwriter. Known by his revolutionary songs and political dissent sentiment, Teddy is considered one of the most significant Ethiopian artists of all time', 'image/presenters/teddy.jpg', 'youtube.com'),
(10110, 'Sami dan', 'He is back!!!', 'One of ethiopias selected few artist came back with.LoremLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labor', 'image/presenters/sami-dan.jpg', 'youtube.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `Role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `User_ID`, `Role`) VALUES
('admin', '343001391', 982096381, 'ADMIN'),
('firaol', '373174671', 1965851634, 'USER');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `b_user`
--
ALTER TABLE `b_user`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `concert`
--
ALTER TABLE `concert`
  ADD PRIMARY KEY (`Concert_ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Cust_ID`);

--
-- Indexes for table `football`
--
ALTER TABLE `football`
  ADD PRIMARY KEY (`F_ID`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`Name`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`User_ID`);

--
-- Indexes for table `presenter`
--
ALTER TABLE `presenter`
  ADD PRIMARY KEY (`P_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `b_user`
--
ALTER TABLE `b_user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `concert`
--
ALTER TABLE `concert`
  MODIFY `Concert_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5449;

--
-- AUTO_INCREMENT for table `football`
--
ALTER TABLE `football`
  MODIFY `F_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `fk_ID` FOREIGN KEY (`Cust_ID`) REFERENCES `user` (`User_ID`) ON DELETE CASCADE;

--
-- Constraints for table `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `notification_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `customer` (`Cust_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
