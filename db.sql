-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2017 at 07:30 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bacorsuicide`
--

-- --------------------------------------------------------

--
-- Table structure for table `cat_menu`
--

CREATE TABLE `cat_menu` (
  `label` varchar(60) NOT NULL,
  `title` varchar(60) NOT NULL,
  `position` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cat_menu`
--

INSERT INTO `cat_menu` (`label`, `title`, `position`) VALUES
('category_1', 'Category_1', 0),
('category_2', 'Category_2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` tinyint(4) NOT NULL,
  `cat_label` varchar(60) NOT NULL,
  `title` varchar(100) NOT NULL,
  `header` varchar(100) NOT NULL,
  `body` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `cat_label`, `title`, `header`, `body`) VALUES
(1, 'category_1', 'A Shit Page', 'This is my shit page', 'Lorem ipsum dolor sit amet, sanctus consulatu sea et. Te elit nusquam est, qui et explicari similique, cu usu suas aliquando referrentur. Eum vero scaevola persequeris ex. Eros affert oratio in nec, exerci epicurei usu no. Ut sumo minim has, aeque ocurreret cu his, facete tritani imperdiet te sit. Cum te dicam graecis honestatis, cu per enim adolescens theophrastus. Ut instructior disputationi deterruisset pri, natum iriure has an. An sit dicat molestie dissentiet, vim et graeci tamquam dolores, vel salutandi intellegebat an. Et iudico scripta eam, cum te congue tempor oblique. Id ius vero prompta aliquam, reprimique eloquentiam no qui, iuvaret aliquid voluptua sea eu. Nam eu rationibus accommodare. Alia natum mnesarchum eu nam, ut qui blandit sententiae, vix at deserunt intellegat abhorreant. Et ius accumsan inimicus erroribus, mel ne quando ignota pertinax. Modus mnesarchum dissentiunt ea mel, altera nominavi in mel. Impetus iuvaret fabulas pri eu. Pro ei mucius possit noluisse. Mei tantas labores id. Nam an aperiri expetendis efficiendi, est odio possit corpora at. Ipsum dicam deserunt ut mea, quo nonumy adversarium et. Duo ignota numquam consequat in, percipit intellegebat per ex. Et nulla animal bonorum mei, repudiandae concludaturque duo et. Nec iusto tation viderer no. Qui an suas clita tollit, diam maiorum molestie eos at, pertinax expetenda eum ne. Appetere incorrupte ea qui, eos eu clita debitis commune. Omnes iisque in nec. Ubique eripuit alterum ut per, putent iisque vis in, ut inani homero sed. Per labore nostrud albucius cu. Ne quo mutat reque. '),
(2, 'category_1', 'Yet another shit Page', 'Guess waht, I\'ve decided to make another shit page', 'Lorem ipsum dolor sit amet, sanctus consulatu sea et. Te elit nusquam est, qui et explicari similique, cu usu suas aliquando referrentur. Eum vero scaevola persequeris ex. Eros affert oratio in nec, exerci epicurei usu no. Ut sumo minim has, aeque ocurreret cu his, facete tritani imperdiet te sit. Cum te dicam graecis honestatis, cu per enim adolescens theophrastus. Ut instructior disputationi deterruisset pri, natum iriure has an. An sit dicat molestie dissentiet, vim et graeci tamquam dolores, vel salutandi intellegebat an. Et iudico scripta eam, cum te congue tempor oblique. Id ius vero prompta aliquam, reprimique eloquentiam no qui, iuvaret aliquid voluptua sea eu. Nam eu rationibus accommodare. Alia natum mnesarchum eu nam, ut qui blandit sententiae, vix at deserunt intellegat abhorreant. Et ius accumsan inimicus erroribus, mel ne quando ignota pertinax. Modus mnesarchum dissentiunt ea mel, altera nominavi in mel. Impetus iuvaret fabulas pri eu. Pro ei mucius possit noluisse. Mei tantas labores id. Nam an aperiri expetendis efficiendi, est odio possit corpora at. Ipsum dicam deserunt ut mea, quo nonumy adversarium et. Duo ignota numquam consequat in, percipit intellegebat per ex. Et nulla animal bonorum mei, repudiandae concludaturque duo et. Nec iusto tation viderer no. Qui an suas clita tollit, diam maiorum molestie eos at, pertinax expetenda eum ne. Appetere incorrupte ea qui, eos eu clita debitis commune. Omnes iisque in nec. Ubique eripuit alterum ut per, putent iisque vis in, ut inani homero sed. Per labore nostrud albucius cu. Ne quo mutat reque. '),
(3, 'category_2', 'The last Shit page', 'I promise, this is the last shit page', 'Lorem ipsum dolor sit amet, sanctus consulatu sea et. Te elit nusquam est, qui et explicari similique, cu usu suas aliquando referrentur. Eum vero scaevola persequeris ex. Eros affert oratio in nec, exerci epicurei usu no. Ut sumo minim has, aeque ocurreret cu his, facete tritani imperdiet te sit. Cum te dicam graecis honestatis, cu per enim adolescens theophrastus. Ut instructior disputationi deterruisset pri, natum iriure has an. An sit dicat molestie dissentiet, vim et graeci tamquam dolores, vel salutandi intellegebat an. Et iudico scripta eam, cum te congue tempor oblique. Id ius vero prompta aliquam, reprimique eloquentiam no qui, iuvaret aliquid voluptua sea eu. Nam eu rationibus accommodare. Alia natum mnesarchum eu nam, ut qui blandit sententiae, vix at deserunt intellegat abhorreant. Et ius accumsan inimicus erroribus, mel ne quando ignota pertinax. Modus mnesarchum dissentiunt ea mel, altera nominavi in mel. Impetus iuvaret fabulas pri eu. Pro ei mucius possit noluisse. Mei tantas labores id. Nam an aperiri expetendis efficiendi, est odio possit corpora at. Ipsum dicam deserunt ut mea, quo nonumy adversarium et. Duo ignota numquam consequat in, percipit intellegebat per ex. Et nulla animal bonorum mei, repudiandae concludaturque duo et. Nec iusto tation viderer no. Qui an suas clita tollit, diam maiorum molestie eos at, pertinax expetenda eum ne. Appetere incorrupte ea qui, eos eu clita debitis commune. Omnes iisque in nec. Ubique eripuit alterum ut per, putent iisque vis in, ut inani homero sed. Per labore nostrud albucius cu. Ne quo mutat reque. ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cat_menu`
--
ALTER TABLE `cat_menu`
  ADD PRIMARY KEY (`label`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
