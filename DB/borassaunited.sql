-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2022 at 02:40 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

CREATE DATABASE IF NOT EXISTS borassaunited;
USE borassaunited;


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `borassaunited`
--

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `ContentID` int(11) NOT NULL,
  `fkRouteID` int(11) NOT NULL,
  `Page` varchar(100) NOT NULL,
  `PageIndex` int(11) DEFAULT NULL,
  `PageContent` longtext DEFAULT NULL,
  `Deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`ContentID`, `fkRouteID`, `Page`, `PageIndex`, `PageContent`, `Deleted`) VALUES
(1, 6, 'History', 0, '<p class=\"ql-align-center\"><strong style=\"background-color: rgb(255, 255, 255); color: rgb(40, 40, 40);\">Barossa United History</strong></p><p>In 1989 Rory Champion, Siggy Pihodnya and Julie Andersen got together and decided that it was time that they did something to start soccer for kids in the Barossa region. They started a team up that played only â€œfriendlyâ€ uncompetitive games for their first season. The club was named the Greenock Town Junior Soccer Club and the team was called the Barossa Hotspurs. It was an Under 10 team with players ranging down to 5 year olds. Their games were against Adelaide Hills Association teams.</p><p>In 1990 they played competitive soccer in the Adelaide Hills Association. The first coach was Jeff Taylor, who had experience in English soccer and who was a Physical Education teacher at Nuriootpa High School. Their home ground was at Greenock Recreation Park where an adult team was already based.</p><p>By 1992 there were four teams with a total of 50 players. Club colours were then red, white and black. The team emblem was â€œAngry Chicksâ€. The Under 11\'s team took out the league premiership this year.</p><p>At the end of the 1994 season the Club became an incorporated body and changed to being a member of the Elizabeth and Districts Junior Soccer Association. Reasons included less travel and a perceived stronger competition. In 1995 the club changed its name to Greenock Barossa United Junior Soccer Club. Club colours changed to green, burgundy and black. The Under13 team took out the Div2 Premiership.</p><p>In 1996 the name was changed to Barossa United Junior Soccer Club. There were six teams including a development squad. The club also moved to new grounds due to Greenock Oval being deemed as overworked with Greenock Town seniors also playing there. They moved to the back â€œcricketâ€ oval at Nuriootpa Centennial Park and due to poor drainage also set up a pitch at Nuriootpa High School. As there was no buildings at the oval the club purchased an old Highways Department caravan which they set up as a canteen. The main fundraiser was operating the canteen during the Barossa Hot Air Balloon Regatta.</p><p>By 1997 there were 120 players and the club was looking again for a new pitch due to the ongoing drainage issues and clashes with other sporting clubs wanting to use the grounds. Efforts began to set up a new pitch by the neighbouring existing Scouts Hall area and a â€œmodifiedâ€ pitch nearby. In 1998 the club worked with the Nuriootpa Centennial Park Committee, the Lions Club, the Nuriootpa Cricket Club and the Scouts to finance and build a shared â€œshedâ€ with many volunteer hours involved. The soccer club would use their portion of the shed for clubrooms and storage. In 1999 the new pitch and clubrooms were in full use.</p><p>The club has continued to grow with 15 mixed Junior Teams, 1 womenâ€™s senior team and two senior men\'s teams playing the 2018 season. Players come from surrounding areas as far as Owen, Marrabel, Riverton and Eden Valley. Barossa United prides itself on its hospitality to travelling teams, supporters and referees. It also has a culture and reputation for a high level of sportsmanship always achieving highly in the Referees Association Club Award, the Dennis Moore Trophy, basing this success on active parent involvement and a family atmosphere.</p>', 0),
(2, 8, 'Newsletters', 0, '<p><strong>Newsletters</strong></p><p>Barossa United Junior Soccer Club produced Newsletters during the playing season. You can find our previous editions here:</p><p class=\"ql-indent-1\">rjejfdk</p><p><br></p><hr><p class=\"ql-indent-1\"><br></p><p class=\"ql-indent-1\"><a href=\"https://spark.adobe.com/page/Geca8QAmSUbL6/\" rel=\"noopener noreferrer\" target=\"_blank\" style=\"color: rgb(40, 40, 40);\">October 2021</a></p><p class=\"ql-indent-1\"><a href=\"https://spark.adobe.com/page/mHENwiTq9XQu4/\" rel=\"noopener noreferrer\" target=\"_blank\" style=\"color: rgb(40, 40, 40);\">February 2021</a></p><p class=\"ql-indent-1\"><a href=\"https://spark.adobe.com/page/ixIXimhjxomQN/\" rel=\"noopener noreferrer\" target=\"_blank\" style=\"color: rgb(40, 40, 40);\">August 2020</a></p><p class=\"ql-indent-1\"><a href=\"https://spark.adobe.com/page/aVXPy0SJ27YFC/\" rel=\"noopener noreferrer\" target=\"_blank\" style=\"color: rgb(40, 40, 40);\">September 2019</a></p><p class=\"ql-indent-1\"><a href=\"https://spark.adobe.com/page/EohgnCm8k1RLL/\" rel=\"noopener noreferrer\" target=\"_blank\" style=\"color: rgb(40, 40, 40);\">June 2019</a></p><p class=\"ql-indent-1\"><a href=\"https://spark.adobe.com/page/I1XBVlyZzgdW7/\" rel=\"noopener noreferrer\" target=\"_blank\" style=\"color: rgb(40, 40, 40);\">April 2019</a></p><p class=\"ql-indent-1\"><a href=\"https://spark.adobe.com/page/7cqZUIwj4qe9a/\" rel=\"noopener noreferrer\" target=\"_blank\" style=\"color: rgb(40, 40, 40);\">September 2018</a></p><p class=\"ql-indent-1\"><a href=\"https://spark.adobe.com/page/weOPHFNOlWf1w/\" rel=\"noopener noreferrer\" target=\"_blank\" style=\"color: rgb(40, 40, 40);\">August 2018</a></p><p class=\"ql-indent-1\"><a href=\"https://spark.adobe.com/page/ZxzEaFhUQaTXr/\" rel=\"noopener noreferrer\" target=\"_blank\" style=\"color: rgb(40, 40, 40);\">July 2018</a></p><p class=\"ql-indent-1\">rtjygjghjb</p><blockquote class=\"ql-indent-1\"><span style=\"color: rgb(40, 40, 40);\">ghjjhkhjkhjkjh</span></blockquote><blockquote class=\"ql-indent-1\"><span style=\"color: rgb(40, 40, 40);\">ghjjlkjljl</span></blockquote><blockquote class=\"ql-indent-1\"><span style=\"color: rgb(40, 40, 40);\">jhgkjkkh</span></blockquote><p><br></p>', 0),
(4, 3, 'Presidents Welcome!', 0, '<p class=\"ql-align-center\"><strong>Presidents Welcome!!</strong></p><p><br></p><h4><strong>Welcome to a unique Barossa United season, delayed due to the COVID-19 pandemic. We are providing a historic first local competition for soccer in the Barossa, commencing Saturday 27 June. Every game will be played at our Nuriootpa home ground. Boys, girls and women will be participating, while our menâ€™s side will play in the Adelaide-based SAASL competition.</strong></h4><p>The ethos of Barossa United continues to be its hallmark â€“ creating opportunities for every interested person possible to participate in the world game. This ethos is at the core of how the B20 competition runs this year. Players of all ages get the maximum enjoyment by everyone helping out, so please ask around how you can help.</p><p>Join us for an exciting experimental format for soccer in the Barossa to get us active and playing again, building our strength for a full season in 2022.</p><p>George Triandafyllidis, President</p>', 0),
(10, 4, 'Fees & Registration', 0, '<h2 class=\"ql-align-center\"><strong style=\"background-color: rgb(255, 255, 255);\"><u>Season 2022 Fees and Registration Details</u></strong></h2><p><br></p><p><strong>Registrations will open for Season 2022 on October 5th!</strong></p><p>Registrations for the 2022 season is from 5th October 2021 to 5th November 2021.</p><p>Registration fees for the 2022 season have been set by the BUFC Committee at the following:</p><p>U6 / U7 Local Competition: $60</p><p>U6 - U8: $195</p><p>U9 - U17, including the girls teams: $260</p><p>Senior Women and Men: $250</p><p>The above is inclusive of all SAASL / FSA affiliation fees but kit costs are additional.</p><p>Second and subsequent family discount will continue in the 2022 season, this is a 10% discount for second and subsequent family members.</p><p>There is no requirement to pay your 2022 fees now. Invoices will be issued in early 2022.</p><h6>Please contact admin@barossaunited.com.au for further enquiries.</h6><h6>We are looking forward to another amazing season for all our teams.</h6><hr><p><span style=\"background-color: rgb(255, 255, 255);\">To register online please visit the&nbsp;</span><a href=\"https://www.revolutionise.com.au/bujsc/registration/\" rel=\"noopener noreferrer\" target=\"_blank\" style=\"background-color: rgb(255, 255, 255); color: rgb(40, 40, 40);\">Revolutionise Registration Page</a></p><hr><p><strong>Sports Voucher</strong></p><p>The Sports Vouchers program is a Government of South Australia initiative administered by the Office for Recreation, Sport and Racing. As part of the State Budget for 2021-22, the Government announced the expansion of Sports Vouches to students in Years 8 and 9. This will commence from 1 January 2022.The program provides an opportunity to receive up to a $100 discount on sports or dance membership/registration fees. The purpose is to increase the number of children playing organised sport or participating in dance activities by reducing cost as a barrier. Once the 2022 sports voucher has been released we will send this to all families to be used against your fees for the 2022 season.</p><h6><br></h6><hr><p><br></p><p><br></p><p>If using a Sports Voucher the Barossa United Junior Soccer Club require fees to be paid upfront in full, then Club will then facilitate the Sports Voucher refund on your behalf. You can read more about the Sports Voucher Program&nbsp;<a href=\"http://www.sportsvouchers.sa.gov.au/\" rel=\"noopener noreferrer\" target=\"_blank\" style=\"color: rgb(40, 40, 40);\">here</a>. You can return the completed form to treasurer@barossaunited.com.au</p><p><br></p>', 0),
(15, 5, 'Player Info', 0, '<h2 class=\"ql-align-center\"><strong>Player Info</strong></h2><p><br></p><p>Welcome to a unique Barossa United season, delayed due to the COVID-19 pandemic. We are providing a historic first local competition for soccer in the Barossa, commencing Saturday 27 June. Every game will be played at our Nuriootpa home ground. Boys, girls and women will be participating, while our menâ€™s side will play in the Adelaide-based SAASL competition.</p><p>The ethos of Barossa United continues to be its hallmark â€“ creating opportunities for every interested person possible to participate in the world game. This ethos is at the core of how the B20 competition runs this year. Players of all ages get the maximum enjoyment by everyone helping out, so please ask around how you can help.</p><p>Join us for an exciting experimental format for soccer in the Barossa to get us active and playing again, building our strength for a full season in 2021.</p><h3><span style=\"color: rgb(0, 102, 204);\">George Triandafyllidis</span></h3><p>President</p>', 0),
(18, 7, 'Policies', 0, '<h1 class=\"ql-align-center\"><strong style=\"background-color: rgb(255, 255, 255);\">Policies</strong></h1><p><br></p><p class=\"ql-indent-2\"><strong>Code of Conduct</strong></p><p class=\"ql-indent-1\"><strong><span class=\"ql-cursor\">ï»¿</span></strong></p><p class=\"ql-align-justify ql-indent-2\">To be able to provide all members, spectators, parents and visitors a positive and safe environment, we expect everyone to conduct themselves in a manner worthy of the Barossa United Soccer Club at all times. The role of the Code of Conduct is to outline these expectations to ensure we are providing the best possible environment for children to play Soccer.</p><p class=\"ql-align-justify ql-indent-2\">The Code of Conduct includes:</p><p><br></p><ol><li class=\"ql-indent-2 ql-align-justify\">Members Code of Conduct</li><li class=\"ql-indent-2 ql-align-justify\">Players Code of Conduct</li><li class=\"ql-indent-2 ql-align-justify\">Parents &amp; Spectators Code of Conduct</li><li class=\"ql-indent-2 ql-align-justify\">Child Safe Policy</li><li class=\"ql-indent-2 ql-align-justify\">Alcohol &amp; Smoking Policy</li><li class=\"ql-indent-2 ql-align-justify\">Weather Policy</li><li class=\"ql-indent-2 ql-align-justify\">Vision Correction Equipment Policy</li><li class=\"ql-indent-2 ql-align-justify\">Wearing of Jewellery</li><li class=\"ql-indent-2 ql-align-justify\">Communications and Use of Technology</li></ol><hr><p>The full Code Of Conduct can be read&nbsp;<a href=\"https://s3-ap-southeast-2.amazonaws.com/piano.revolutionise.com.au/site/aiemstgd5i8afjmd.pdf\" rel=\"noopener noreferrer\" target=\"_blank\" style=\"color: rgb(40, 40, 40);\">here</a></p><hr><p><strong>Child Safe Environment Policy</strong></p><p>Barossa United Junior Soccer Club is committed to the safety and well-being of all children and young people accessing our Soccer Club and the welfare of the children in our care will always be our first priority. We aim to create a child safe and child friendly environment where all children are valued and feel safe.</p><p>We have appointed Child Safe Officers who are the first point of contact to provide advice and support to children, parents, committee members and volunteers regarding the safety and well-being of children at our Club. Those officers contact details are:</p><p>NamePhoneEmailVicky Ireland0422 048 546<a href=\"mailto:vicepresident@barossaunited.com.au?subject=Barossa%20United%20Childsafe%20Contact\" rel=\"noopener noreferrer\" target=\"_blank\" style=\"color: rgb(40, 40, 40);\">vicepresident@barossaunited.com.au</a>Kirsty Rosenzweig0405 485 595<a href=\"mailto:registrar@barossaunited.com.au?subject=Barossa%20United%20Childsafe%20Contact\" rel=\"noopener noreferrer\" target=\"_blank\" style=\"color: rgb(40, 40, 40);\">registrar@barossaunited.com.au</a></p><hr><p>The full Child Safe Environment Policy can be read&nbsp;<a href=\"https://s3-ap-southeast-2.amazonaws.com/piano.revolutionise.com.au/site/yx5iflwaws3hgxee.pdf\" rel=\"noopener noreferrer\" target=\"_blank\" style=\"color: rgb(40, 40, 40);\">here.</a>&nbsp;</p><hr><p><br></p><p><br></p>', 0),
(27, 2, 'Home', 0, '<p><strong>Welcome to Barossa United Football Club</strong></p><p>Barossa United Football Club is committed to the positive promotion of soccer for men, women, boys and girls through its teams and development programs.</p><p><strong>Registrations for Season 2022 will open on October 5th! For all registrations,&nbsp;</strong><a href=\"https://www.revolutionise.com.au/bujsc/registration/\" rel=\"noopener noreferrer\" target=\"_blank\" style=\"color: rgb(40, 40, 40);\"><strong>click here.</strong></a></p><h1>With Soccer\'s ever growing popularity, the aim of the club is to make the game fun to play, and help our players promote and develop teamwork, positive sporting behaviour and skills in the beautiful game.</h1>', 0),
(32, 0, '', 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `RouteID` int(11) NOT NULL,
  `RouteName` varchar(20) NOT NULL,
  `RoutePath` varchar(20) NOT NULL,
  `Public` tinyint(1) NOT NULL,
  `Deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`RouteID`, `RouteName`, `RoutePath`, `Public`, `Deleted`) VALUES
(2, 'Home', '/', 1, 0),
(3, 'Presidents Welcome!', '/presidents-welcome', 1, 0),
(4, 'Fees & Registration', '/fees-registration', 1, 0),
(5, 'Player Info', '/player-info', 1, 0),
(6, 'History', '/history', 1, 0),
(7, 'Policies', '/policies', 1, 0),
(8, 'Newsletters', '/newsletters', 1, 0),
(9, 'Contact', '/contact', 1, 0),
(10, 'Admin Login', '/admin-portal', 0, 0),
(11, 'Admin Page', '/admin-page', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`ContentID`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`RouteID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `ContentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `route`
--
ALTER TABLE `route`
  MODIFY `RouteID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
