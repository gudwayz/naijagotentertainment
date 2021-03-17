-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 23, 2020 at 04:29 AM
-- Server version: 5.7.31-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `naijago7_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `com_id` int(11) NOT NULL,
  `ref_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `c_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `p_id` int(11) NOT NULL,
  `p_cat_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `p_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `img_1` varchar(255) NOT NULL,
  `p_cont` mediumtext NOT NULL,
  `status` varchar(255) NOT NULL,
  `pop_cont` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`p_id`, `p_cat_id`, `title`, `author`, `p_date`, `img_1`, `p_cont`, `status`, `pop_cont`) VALUES
(1, 5, 'Four Nigerians Feature For Genk In Win Vs Excelsior Rotterdam', 'U.C', '2020-09-17 05:20:58', 'ifeanyi.JPG', 'Four players of Nigerian descent were in action for Racing Genk in their 4-1 rout of Excelsior Rotterdam in a pre-season friendly on Friday, July 17, allnigeriasoccer.com reports.\r\n\r\nFew days after testing negative for COVID-19, Paul Onuachu was named in the starting lineup and he was joined by young center back Shawn Adewoye and Stephen Odey.\r\n\r\nSummer signing from Heracles Almelo, Cyriel Dessers made his second pre-season appearance for his new team when he came off the bench for the second half, and opened his goalscoring account for his new employer after firing blanks against Union Sint-Gillis .\r\n\r\nRacing Genk established a two-goal lead thanks to a first half brace from Bongonda, Omarsson halved the deficit in the 73rd minute, before goals from Borges and Dessers on 88 minutes sealed the win.\r\n\r\nOnuachu, who resumed training on Friday, understandably made way for Luca Oyen after 30 minutes in today\'s friendly.\r\n\r\nRacing Genk have lined up friendlies against AZ and Lens before their first competitive match of the 2020-2021 season against KV Oostende on August 8, 2020.', 'published', 'onuachu, Heracles Almelo, Cyriel Dessers, '),
(2, 5, 'QPR\'s Nigerian-Born Winger Closing In On Move To Belgium Side Club Brugge', 'U.C', '2020-09-17 05:23:23', 'qpr.JPG', 'Nigerian-born winger Bright Osayi-Samuel is closing in on a transfer to Club Brugge after Queens Park Rangers accepted an offer from the Belgian First Division A champions, according to matching press reports in England and Belgium.\r\n\r\nWest London Sport claims that Queens Park Rangers have agreed to sell Osayi-Samuel for a fee in the region of five million euros.\r\n\r\nThe winger has been watched by scouts representing Premier League clubs Arsenal, West Ham, Wolverhampton Wanderers and Everton plus Championship teams Leeds United, West Brom, Fulham and Stoke City this term but it appears his future is abroad.\r\n\r\nClub Brugge are in the market for a winger as a replacement for Nigeria international Emmanuel Dennis and Osayi-Samuel fits the bill.\r\n\r\nThe 22-year-old could be left out of the Rangers squad to face Millwall in their last home game this season on Saturday.\r\n\r\nEver since joining QPR from Blackpool in the summer of 2017, he has had a direct hand in 20 goals (10 goals, 10 assists) in 91 appearances across all competitions.\r\n', 'published', 'Osayi-Samuel, Queens Park Rangers, Club Brugge, Club Brugge'),
(3, 5, 'Man City Coach Guardiola Runs The Rule Over Nigeria-Eligible Teenager Pre', 'U.C', '2020-10-26 14:06:49', 'guardiola.JPG', 'Manchester City coach Pep Guardiola monitored Nigeria-eligible teenager Felix Nmecha at close quarters in his team\'s final workout before the visit to the English capital, where they face Arsenal in the FA Cup on Saturday, July 18, allnigeriasoccer.com reports.\r\n\r\nAn England U19 international born in Hamburg, Germany, Nmecha is challenging for a squad place against the Gunners.\r\n\r\nThe 19-year-old has been spotted training with the deposed Premier League champions since the season restarted but has not been included in any of the matchday squads.\r\n\r\nHaving run the rule over Nmecha, it remains to be seen whether Guardiola will include him in the squad as he is behind more experienced players such as Ilkay Gundogan, Rodri, Fernandinho and Kevin De Bruyne in the pecking order of midfielders.\r\n\r\nInjury limited Nmecha\'s appearances in the curtailed academy season, making four appearances in the Premier League 2 and scoring two goals.\r\n\r\nHe made his professional debut for the Citizens in a League Cup clash against Burton Albion in January 2019 and was an unused substitute vs Hoffeheim in the Champions League last term.\r\n\r\nYoung Nigerian goalkeeper Gavin Bazunu also trained with City\'s first team but it is looking likely that he will not make his debut against Arsenal, with Pep Guardiola confirming at today\'s pre-match conference that Ederson will be in goal at Wembley.\r\n', 'published', '1'),
(4, 5, 'Nwakali Celebrates Huesca Promotion; Eligible To Play In La Liga Super Eagle', 'U.C', '2020-10-26 14:06:30', 'laliga.JPG', 'Former Arsenal midfielder Kelechi Nwakali was delighted after SD Huesca sealed promotion to the top-flight of Spanish football on Friday evening following their 3-0 rout of Numancia at Estadio El Alcoraz, allnigeriasoccer.com reports.\r\n\r\nThe Azulgranas have an unassailable four-point lead over third-placed Almeria with one game to the end of the Segunda Division season.\r\n\r\nSD Huesca are making an immediate return to La Liga after they were demoted at the end of the 2018-2019 season and Nwakali was one of the players brought in to bolster the squad last summer.\r\n\r\nThe former Golden Eaglets and Flying Eagles skipper has gone on to four appearances off the bench after overcoming a work permit obstacle, logging 58 minutes.\r\n\r\nWriting on Instagram, Kelechi Nwakali stated : \"It can only be God 🙏🙏🙏🙏🙏🙏 i am forever grateful\".\r\n\r\nNwakali could not feature for Arsenal in the Premier League because he has yet make his competitive debut for the Super Eagles but the Spanish Football Federation will give the attacking midfielder the green light to play in La Liga next season because of the Cotonou Agreement.', 'published', '1'),
(7, 1, 'Whitney Houston\'s hubby Bobby Brown says he \'scooped poo\' out of wife\'s bum', 'U.C', '2020-10-26 14:06:22', 'whitney.JPG', 'The shocking moment that he made the confession was aired back in 2005 on the reality Being Bobby Brown when he spoke about how he \'scooped poo\' out of his wife\'s \'bum\'Whitney Houston\'s husband Bobby Brown said boldly on his reality TV show that he once used his finger to \"scoop poo\" out of his wife\'s bum.\r\n\r\nThe disgusting confession was caught on camera and used in his old reality TV show, Being Bobby Brown.\r\n\r\nIt was aired back in 2005 and despite it being 15 years on, its still rather shocking.\r\n\r\nOne can imagine legendary singer Whitney wasn\'t too happy about the filthy little secret being broadcast to the entire world on TV.\r\n\r\nHowever, she did say once that the confession proved how much her husband loved her during their marriage.The vile confession was spilled while Whitney sat peacefully having her make-up professionally done as her hubby sat next to her on top of a closed toilet.\r\n\r\nHe said: \"I\'ve had to dig a doodie bubble out of your butt.\"\r\n\r\nIn an hilarious fashion the late star said, \"Okay, alright\" as she turned away from her husband clearly shocked that he had said the remark out loud in front of cameras.\r\n\r\nThe star then looked directly into the camera as she looked like she was hiding a slight smile.As she turned to the camera she said: \"He\'s trippin.\"\r\n\r\nThe scene then cut there and the next shows them sitting across from one-another at a restaurant.\r\n\r\nFidgeting while sat in her chair, Whitney said: \"I\'m about to do the doo. I\'m about to drop it on the one.\r\n\r\n\"A boatload.\"\r\n\r\nFlashing back to the original setting, Whitney held her hand up towards her husband as if signalling him to stop talking.', 'published', '1'),
(8, 1, 'Dan Osborne admits to making mistakes following cheating allegations', 'U.C', '2020-10-26 14:06:12', 'osborne.JPG', 'Former Towie star Dan Osborne admitted I’ve made mistakes following years of allegations he cheated on wife Jacqueline Jossa.\r\n\r\nOsborne and \'I’m A Celebrity\' winner Jossa tied the knot in 2017 but their marriage has been dogged by reports of his infidelity.\r\n\r\nLast year Jossa was left devastated when her \'I’m A Celebrity\' co-star Myles Stephenson said his ex-girlfriend and Osborne had got together.Now, 29-year-old Osborne has said he takes full responsibility for his behaviour while married.\r\n\r\nHe told the Sun newspaper: I’ve made mistakes, yeah. I’ve done things I shouldn’t have done. Me and Jac have spoken about that and she has forgiven me.\r\n I know in the past I’ve denied things when they’re not true, then when something has been true, I probably just kept my mouth shut. I was a different person.\r\n\r\nIt seems a cliche to say, but I was a young lad and on TV and stuff. I’m not saying you get big headed, but you get dug out for things anyway and then you’re feeling shit in yourself.\r\nAnd then you get a bit of attention… then things are bad at home, so you go out and get pissed instead of working on fixing things.\r\n\r\nIt’s a bunch of mistakes all built into one that made it bad. So, I take full responsibility for being crap.\r\nIn May, former EastEnders star Jossa, 27, denied she and Osborne, with whom she has two daughters, had split.\r\n\r\nAmid reports she had moved out of the family home, Jossa wrote on Instagram: “I need some time. There is no split. No divorce.\r\n\r\nThis is not the first time Osborne, who rose to fame on The Only Way Is Essex before appearing on Celebrity Big Brother, has admitting to making mistakes during his marriage.\r\n\r\nIn December, he publicly apologised to Jossa and said his mistakes had almost cost me my family.\r\n\r\n', 'published', '1');

-- --------------------------------------------------------

--
-- Table structure for table `p_cat`
--

CREATE TABLE `p_cat` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `p_cat`
--

INSERT INTO `p_cat` (`cat_id`, `cat_name`) VALUES
(1, 'Music'),
(2, 'African Story'),
(3, 'Hot News'),
(4, 'Buisiness News'),
(5, 'Sports'),
(6, 'Advertisement');

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `slide_id` int(11) NOT NULL,
  `slide_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `username`, `firstname`, `lastname`, `email`, `phone`, `pass`, `role`) VALUES
(1, 'gudwayz', 'uzoma', 'Njoku', 'uzomski@gmail.com', '0293838278287', 'chibueze', 'superadmin'),
(2, 'lomsi', 'rose', 'okolo', 'uzo@yahoo.com', '33445p244', 'rosemary', 'admin'),
(3, 'fwest', 'Festus', 'West', 'west@naijagotentertainment.com', ' 08037348920', 'buguma', 'superadmin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`com_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `p_cat`
--
ALTER TABLE `p_cat`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`slide_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `com_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `p_cat`
--
ALTER TABLE `p_cat`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `slide_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
