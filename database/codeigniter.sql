-- phpMyAdmin SQL Dump
-- version 4.2.6deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 19, 2015 at 01:38 PM
-- Server version: 5.5.40-0ubuntu1
-- PHP Version: 5.5.12-2ubuntu4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `codeigniter`
--
DROP DATABASE `codeigniter`;
CREATE DATABASE IF NOT EXISTS `codeigniter` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `codeigniter`;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--
-- Creation: Jan 10, 2015 at 05:57 PM
-- Last update: Jan 10, 2015 at 05:57 PM
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
`comment_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `comment_username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comment_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comment_content` text COLLATE utf8_unicode_ci NOT NULL,
  `comment_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Truncate table before insert `comments`
--

TRUNCATE TABLE `comments`;
-- --------------------------------------------------------

--
-- Table structure for table `posts`
--
-- Creation: Jan 10, 2015 at 05:57 PM
-- Last update: Jan 16, 2015 at 08:54 PM
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
`post_id` int(11) NOT NULL,
  `post_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post_content` text COLLATE utf8_unicode_ci NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `post_author_id` int(11) DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=30 ;

--
-- Truncate table before insert `posts`
--

TRUNCATE TABLE `posts`;
--
-- Dumping data for table `posts`
--

INSERT DELAYED IGNORE INTO `posts` (`post_id`, `post_title`, `post_content`, `post_date`, `post_author_id`) VALUES
(2, 'Devbook', 'Devbook is one of my projects using CodeIgniter.', '2015-01-06 09:29:13', 1),
(4, 'Maya Notes', 'Maya Notes is a cloud based note taking web app using Dropbox Cloud.', '2015-01-06 09:31:04', 1),
(28, 'Social Network', 'Social Network built with Laravel', '2015-01-12 18:37:37', 1),
(1, 'MimosaTek - Vĩnh Tân Company', '<div>C&ocirc;ng ty <strong>MimosaTek</strong><br />\nĐịa điểm: <strong>Khu CNPM ĐHQG TPHCM ITP</strong>.<br />\nDự &aacute;n: <em>Hệ thống quản l&yacute; trang trại Vĩnh T&acirc;n</em>.</div>\n\n<p><u>Ng&agrave;y 12/01/2015:</u></p>\n\n<ol>\n <li>Đến c&ocirc;ng ty l&uacute;c 9h30.</li>\n <li>10h00 bắt đầu training về dự &aacute;n.\n <ol>\n  <li>Trainning về qui tr&igrave;nh quản l&yacute; heo.</li>\n  <li>Training về database, source code hiện tại, git.</li>\n </ol>\n </li>\n <li>12h30: ra về.</li>\n</ol>\n\n<p><u>Ng&agrave;y 13/01/2015:</u></p>\n\n<ol>\n <li>Đến c&ocirc;ng ty l&uacute;c 14h00.</li>\n <li>Chỉnh theme cho tương th&iacute;ch với Bootstrap.</li>\n <li>17h30: ra về.</li>\n</ol>\n\n<p><u>Ng&agrave;y 14/01/2015:</u></p>\n\n<ol>\n <li>Đến c&ocirc;ng ty l&uacute;c 13h00.</li>\n <li>Fix theme responsive, sidebar icon.</li>\n <li>17h00: ra về.</li>\n <li>L&agrave;m tại nh&agrave;: 18h00 - 22h30.</li>\n</ol>\n\n<p><strong>Tổng thời gian</strong>: 10h00 + 4h30.</p>\n', '2015-01-12 08:35:14', 1),
(29, 'ansidev.github.io', '<p>A blog built with <strong>GitHub</strong> + <strong>Ruby on Rails</strong> + <strong>Jekyll</strong>.</p>\n', '2015-01-14 04:08:26', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--
-- Creation: Jan 10, 2015 at 05:57 PM
-- Last update: Jan 13, 2015 at 05:12 PM
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
`user_id` int(11) NOT NULL,
  `user_fullname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user_username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user_password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user_protected_updates` tinyint(4) NOT NULL DEFAULT '0',
  `user_location` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user_web` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user_bio` varchar(160) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Truncate table before insert `users`
--

TRUNCATE TABLE `users`;
--
-- Dumping data for table `users`
--

INSERT DELAYED IGNORE INTO `users` (`user_id`, `user_fullname`, `user_username`, `user_email`, `user_password`, `user_protected_updates`, `user_location`, `user_web`, `user_bio`) VALUES
(1, 'Lê Minh Trí', 'ansidev', 'ansidev@gmail.com', '123456', 0, 'Vietnam', 'https://ansidev.github.io/', 'I am a developer!'),
(2, 'Le Nguyen Bich Nga', 'bichnga.ln', 'bichnga.ln@yahoo.com', '123456', 0, '', '', ''),
(3, 'Nguyen Hoang Dung', 'hdunguit', 'hdung.uit@gmail.com', 'hdunguit', 0, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
 ADD PRIMARY KEY (`comment_id`), ADD UNIQUE KEY `post_id` (`post_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
 ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
