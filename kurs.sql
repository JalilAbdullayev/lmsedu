-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2021 at 07:46 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kurs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `AdSoyad` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `pass` varchar(150) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0',
  `icaze` enum('1','2') NOT NULL,
  `sekil` varchar(150) NOT NULL,
  `tarix` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `AdSoyad`, `email`, `pass`, `status`, `icaze`, `sekil`, `tarix`) VALUES
(7, 'Jalil Abdullayev', 'abdullacelil00@gmail.com', '$B8A2_4d522c6994eddd883ef830c8111f3f61', '1', '1', 'img/user.png', '2021-09-08 20:16:18');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kat_id` bigint(20) NOT NULL,
  `Basliq` varchar(255) NOT NULL,
  `mezmun` text NOT NULL,
  `tarix` datetime NOT NULL,
  `sekil` varchar(255) NOT NULL,
  `tags` text NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0',
  `slug` varchar(355) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `kat_id`, `Basliq`, `mezmun`, `tarix`, `sekil`, `tags`, `status`, `slug`) VALUES
(5, 1, 'JavaScript Təlimləri', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p> </p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p> </p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '2020-04-20 13:44:35', 'sekil/blog/9467-js.png', '[\"js\",\"javascript\",\"telim\",\"2020\"]', '1', 'javascript-telimleri'),
(6, 1, 'Node.js Təlimlərinə Start Veriləcək', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p> </p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p> </p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p> </p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '2020-04-27 16:48:37', 'sekil/blog/9875-node.jpeg', '[\"nodejs\",\"javascript\",\"proqramlasdirma\"]', '1', 'node-js-telimlerine-start-verilecek'),
(7, 1, 'PHP Haqqında Bilinməyənlər', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p> </p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '2020-04-27 16:51:20', 'sekil/blog/5852-php.png', '[\"php\",\"proqramlasdirma\",\"php7\",\"oop\"]', '1', 'php-haqqinda-bilinmeyenler'),
(8, 1, 'Angular JS Nədir?', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p> </p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '2020-04-27 16:52:28', 'sekil/blog/199-angular.png', '[\"angular\",\"javascript\",\"fw\"]', '1', 'angular-js-nedir'),
(9, 1, 'Bootstrap 4 və imkanları', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '2020-04-27 16:54:00', 'sekil/blog/3039-bootstrap-social.png', '[\"css\",\"bootstrap\"]', '1', 'bootstrap-4-ve-imkanlari'),
(10, 1, 'Javascript Nədir?', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p> </p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p> </p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '2020-04-27 16:55:06', 'sekil/blog/8113-js.png', '[\"javascript\",\"js\"]', '1', 'javascript-nedir'),
(13, 1, 'C# Kurslarına Qeydiyyat Başladı', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '2020-05-27 15:48:02', 'sekil/blog/6980-Csharp.png', '[\"\"]', '1', 'c-kurslarina-qeydiyyat-basladi'),
(14, 7, 'Web Design', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '2020-05-27 16:19:27', 'sekil/blog/5777-web-design.jpg', '[\"\"]', '1', 'web-design');

-- --------------------------------------------------------

--
-- Table structure for table `blog_kat`
--

CREATE TABLE `blog_kat` (
  `id` bigint(20) NOT NULL,
  `Ad` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog_kat`
--

INSERT INTO `blog_kat` (`id`, `Ad`, `slug`, `status`) VALUES
(1, 'Development', 'development', '1'),
(7, 'Design', 'design', '1'),
(8, 'Software', 'software', '0');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` bigint(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `text` text NOT NULL,
  `phone` varchar(50) NOT NULL,
  `tarix` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `text`, `phone`, `tarix`) VALUES
(4, 'User', 'example@mail.com', 'Message', '+XXXXXXXXXXXX', '2020-09-03 13:51:55');

-- --------------------------------------------------------

--
-- Table structure for table `haqqinda`
--

CREATE TABLE `haqqinda` (
  `id` int(11) NOT NULL,
  `Basliq` varchar(255) NOT NULL,
  `Mezmun` text NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `haqqinda`
--

INSERT INTO `haqqinda` (`id`, `Basliq`, `Mezmun`, `img`) VALUES
(1, 'Mənim haqqımda kiçik bir informasiya', '<p class=\"title-small font-weight-300\"><strong>Lorem</strong> ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p class=\"title-small font-weight-300\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum industry\'s standard dummy text.</p>\r\n<p class=\"title-small font-weight-300\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.</p>', 'sekil/about-us-img-12.png');

-- --------------------------------------------------------

--
-- Table structure for table `kurslar`
--

CREATE TABLE `kurslar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kat_id` bigint(20) NOT NULL,
  `Basliq` varchar(255) NOT NULL,
  `Mezmun` text NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0',
  `sekil` varchar(255) NOT NULL,
  `slug` varchar(355) NOT NULL,
  `qiymet` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kurslar`
--

INSERT INTO `kurslar` (`id`, `kat_id`, `Basliq`, `Mezmun`, `status`, `sekil`, `slug`, `qiymet`) VALUES
(5, 7, 'Web Design Course', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Enim nec dui nunc mattis. Lorem sed risus ultricies tristique nulla. Tincidunt eget nullam non nisi est. Tincidunt ornare massa eget egestas purus viverra accumsan in. Nisl nisi scelerisque eu ultrices vitae. Justo donec enim diam vulputate ut pharetra sit amet. Quis eleifend quam adipiscing vitae proin sagittis. Facilisi nullam vehicula ipsum a arcu cursus vitae congue. Eget felis eget nunc lobortis. Lectus nulla at volutpat diam. Ut tortor pretium viverra suspendisse potenti nullam ac tortor vitae. Venenatis tellus in metus vulputate eu scelerisque. Viverra suspendisse potenti nullam ac tortor vitae purus faucibus. Sed risus pretium quam vulputate dignissim suspendisse in. Elementum nibh tellus molestie nunc non blandit massa enim nec. Vulputate dignissim suspendisse in est ante in nibh mauris cursus. Egestas tellus rutrum tellus pellentesque eu tincidunt tortor aliquam nulla. Adipiscing elit pellentesque habitant morbi tristique senectus et. Lorem sed risus ultricies tristique nulla.</p>\r\n<p>Bibendum at varius vel pharetra vel turpis nunc eget lorem. Vel risus commodo viverra maecenas accumsan lacus vel facilisis. Laoreet suspendisse interdum consectetur libero id faucibus nisl tincidunt. Aenean vel elit scelerisque mauris pellentesque pulvinar. Amet justo donec enim diam. Diam sit amet nisl suscipit adipiscing. Viverra accumsan in nisl nisi scelerisque eu ultrices vitae auctor. Dolor sit amet consectetur adipiscing elit pellentesque. Tristique sollicitudin nibh sit amet commodo nulla facilisi. Nulla facilisi morbi tempus iaculis urna id volutpat lacus laoreet. Ultrices eros in cursus turpis massa tincidunt dui.</p>\r\n<p>Quis blandit turpis cursus in hac habitasse. Faucibus interdum posuere lorem ipsum dolor sit amet. Volutpat sed cras ornare arcu dui vivamus. Enim nulla aliquet porttitor lacus luctus accumsan tortor posuere. Scelerisque varius morbi enim nunc faucibus a pellentesque sit amet. Adipiscing tristique risus nec feugiat in. Nunc mattis enim ut tellus elementum sagittis vitae et. Sit amet justo donec enim diam. Tellus id interdum velit laoreet id donec ultrices. Non consectetur a erat nam. Arcu cursus vitae congue mauris rhoncus aenean vel. Commodo ullamcorper a lacus vestibulum sed. Sit amet tellus cras adipiscing enim eu turpis egestas.</p>\r\n<p>Sagittis id consectetur purus ut faucibus pulvinar. Scelerisque fermentum dui faucibus in ornare quam viverra. Arcu ac tortor dignissim convallis aenean et tortor at risus. Pulvinar sapien et ligula ullamcorper. Egestas pretium aenean pharetra magna ac placerat vestibulum. Sed augue lacus viverra vitae congue eu consequat ac. Et ultrices neque ornare aenean euismod elementum. Quam adipiscing vitae proin sagittis nisl rhoncus. Lorem donec massa sapien faucibus et molestie. Eget nunc scelerisque viverra mauris in aliquam sem.</p>\r\n<p>Pellentesque pulvinar pellentesque habitant morbi tristique senectus. Erat imperdiet sed euismod nisi porta lorem mollis aliquam. Nibh sit amet commodo nulla facilisi nullam. Vestibulum rhoncus est pellentesque elit. Id diam maecenas ultricies mi eget mauris pharetra et. Potenti nullam ac tortor vitae. Sed felis eget velit aliquet. Urna nunc id cursus metus aliquam eleifend mi in. Nullam eget felis eget nunc lobortis mattis aliquam faucibus. Viverra adipiscing at in tellus integer feugiat scelerisque. Faucibus et molestie ac feugiat sed. Velit scelerisque in dictum non consectetur a. Arcu vitae elementum curabitur vitae nunc sed velit.</p>\r\n<p>Sed cras ornare arcu dui vivamus arcu felis bibendum. Lorem dolor sed viverra ipsum nunc aliquet bibendum enim. Enim nec dui nunc mattis enim ut tellus. Tortor id aliquet lectus proin nibh nisl condimentum. Nibh sed pulvinar proin gravida hendrerit lectus. Faucibus turpis in eu mi bibendum neque. Urna neque viverra justo nec ultrices. Auctor urna nunc id cursus metus aliquam eleifend mi. Morbi quis commodo odio aenean sed. Tortor dignissim convallis aenean et tortor at. Condimentum vitae sapien pellentesque habitant. Ipsum suspendisse ultrices gravida dictum fusce ut placerat orci nulla. Sagittis eu volutpat odio facilisis mauris sit. Diam sit amet nisl suscipit. Id faucibus nisl tincidunt eget nullam non nisi est sit. Magna etiam tempor orci eu lobortis elementum nibh tellus. Aliquam etiam erat velit scelerisque in. Luctus accumsan tortor posuere ac ut consequat semper viverra. Non diam phasellus vestibulum lorem sed risus ultricies tristique nulla.</p>\r\n<p>Mauris rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar. Massa tincidunt dui ut ornare lectus. Non quam lacus suspendisse faucibus interdum posuere lorem ipsum dolor. Consectetur libero id faucibus nisl tincidunt. Ac orci phasellus egestas tellus rutrum tellus pellentesque. In ornare quam viverra orci sagittis eu volutpat odio facilisis. Accumsan lacus vel facilisis volutpat est velit egestas. Nibh sit amet commodo nulla facilisi nullam. Auctor neque vitae tempus quam. Diam vulputate ut pharetra sit amet. Mattis molestie a iaculis at erat. Etiam tempor orci eu lobortis elementum nibh tellus. A iaculis at erat pellentesque adipiscing. Lectus urna duis convallis convallis tellus. Placerat duis ultricies lacus sed turpis tincidunt. Sit amet mauris commodo quis imperdiet massa tincidunt. Velit ut tortor pretium viverra suspendisse potenti nullam ac. Quis eleifend quam adipiscing vitae proin sagittis nisl. Tristique sollicitudin nibh sit amet commodo nulla facilisi. Condimentum vitae sapien pellentesque habitant morbi tristique senectus et.</p>\r\n<p>Sagittis orci a scelerisque purus semper eget duis at. Nibh venenatis cras sed felis. In cursus turpis massa tincidunt dui ut ornare lectus sit. Velit aliquet sagittis id consectetur purus ut faucibus pulvinar. Amet commodo nulla facilisi nullam vehicula ipsum a arcu. Eu ultrices vitae auctor eu augue ut. Non arcu risus quis varius quam quisque id diam vel. Leo vel orci porta non. Pellentesque sit amet porttitor eget dolor morbi non. Sagittis id consectetur purus ut faucibus pulvinar elementum. Vestibulum lectus mauris ultrices eros in cursus turpis massa. Ullamcorper eget nulla facilisi etiam dignissim diam quis. Sit amet aliquam id diam maecenas ultricies.</p>\r\n<p>Ut diam quam nulla porttitor massa. Tincidunt vitae semper quis lectus nulla at volutpat diam ut. Sed vulputate odio ut enim. Nibh praesent tristique magna sit amet purus gravida quis. Euismod in pellentesque massa placerat duis ultricies. Id interdum velit laoreet id donec ultrices tincidunt arcu. Sapien eget mi proin sed libero enim sed faucibus turpis. Nec feugiat in fermentum posuere urna nec tincidunt praesent semper. Accumsan tortor posuere ac ut consequat semper viverra. Laoreet suspendisse interdum consectetur libero id. Auctor urna nunc id cursus metus aliquam eleifend mi in. Amet justo donec enim diam vulputate ut pharetra.</p>\r\n<p>Quisque egestas diam in arcu cursus euismod quis viverra. Ipsum nunc aliquet bibendum enim facilisis gravida neque. Vitae congue mauris rhoncus aenean vel elit scelerisque. Elementum nibh tellus molestie nunc non. Sit amet facilisis magna etiam tempor orci. Pharetra et ultrices neque ornare aenean euismod elementum. Aenean euismod elementum nisi quis eleifend quam adipiscing vitae. Enim tortor at auctor urna nunc. Neque viverra justo nec ultrices dui sapien. Blandit volutpat maecenas volutpat blandit aliquam. Tristique senectus et netus et malesuada fames ac turpis. Tincidunt tortor aliquam nulla facilisi cras fermentum.</p>', '1', 'sekil/kurslar/5405-The-Difference-between-Web-Designer-Web-Developer-and-Web-Programmer-1024x682-978x651.jpg', 'web-design-course', '60'),
(6, 1, 'Web Development', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '1', 'sekil/kurslar/2854-8182-New Project (5).png', 'web-development', '120'),
(7, 1, 'Laravel', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '1', 'sekil/kurslar/8715-2970-laravel-logo.png', 'laravel', '100'),
(8, 1, 'Angular', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '1', 'sekil/kurslar/9220-1346-Angular_full_color_logo.svg.png', 'angular', '80'),
(9, 7, 'Graphic Design Course', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '1', 'sekil/kurslar/3870-1116-graphic-design.jpg', 'graphic-design-course', '50'),
(10, 8, 'English Course', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '1', 'sekil/kurslar/5157-606-52351011-english-british-england-language-education-concept.jpg', 'english-course', '70');

-- --------------------------------------------------------

--
-- Table structure for table `kurslar_kat`
--

CREATE TABLE `kurslar_kat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Ad` varchar(100) NOT NULL,
  `sira` int(2) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kurslar_kat`
--

INSERT INTO `kurslar_kat` (`id`, `Ad`, `sira`, `slug`, `status`) VALUES
(1, 'Programming', 1, 'programming', '1'),
(2, 'Software', 2, 'software', '1'),
(7, 'Design', 3, 'design', '1'),
(8, 'Language', 0, 'language', '1');

-- --------------------------------------------------------

--
-- Table structure for table `nizamlamalar`
--

CREATE TABLE `nizamlamalar` (
  `id` int(11) NOT NULL,
  `Basliq` varchar(255) NOT NULL,
  `Aciqlama` varchar(255) NOT NULL,
  `robots` varchar(255) NOT NULL,
  `AcarSozler` varchar(255) NOT NULL,
  `tel` varchar(25) NOT NULL,
  `unvan` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fb` varchar(255) NOT NULL,
  `ins` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `tw` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nizamlamalar`
--

INSERT INTO `nizamlamalar` (`id`, `Basliq`, `Aciqlama`, `robots`, `AcarSozler`, `tel`, `unvan`, `email`, `fb`, `ins`, `link`, `tw`) VALUES
(1, 'Kurs', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum accusamus nulla dolorem aut? Impedit, aliquid facere voluptas ratione minus rem?', 'robots.txt', 'kurs, təhsil', '077 251 14 15', 'Ş.Qurbanov 1. Yasamal ray. Bakı Şəhəri Azərbaycan', 'abdullacelil00@gmail.com', 'https://www.facebook.com/calil.abdullayev00', 'https://www.instagram.com/', 'https://www.linkedin.com/', 'https://www.twitter.com/');

-- --------------------------------------------------------

--
-- Table structure for table `slider_header`
--

CREATE TABLE `slider_header` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Basliq` varchar(100) NOT NULL,
  `Mezmun` varchar(150) NOT NULL,
  `sekil` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider_header`
--

INSERT INTO `slider_header` (`id`, `Basliq`, `Mezmun`, `sekil`, `status`) VALUES
(1, 'C#', '<p>bvfdbn yuygfn vc dghjrt</p>', 'sekil/slider/7291-5120-f1b4d8b97c237d3d03da0c5c32fa416b.jpg', '1'),
(3, 'Web Design', '<p>fygnjkyrjng ujhyerdfxcvn</p>', 'sekil/slider/217-3899-Web-Design-Image-1.jpg', '1'),
(4, 'Kurs', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Imperdiet nulla malesua', 'sekil/slider/7967-slider4.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `ustunlukler`
--

CREATE TABLE `ustunlukler` (
  `id` int(11) NOT NULL,
  `Basliq` varchar(255) NOT NULL,
  `mezmun` text NOT NULL,
  `sekil` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ustunlukler`
--

INSERT INTO `ustunlukler` (`id`, `Basliq`, `mezmun`, `sekil`, `status`) VALUES
(1, 'Expand Skill Development', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ac vulputate</p>', 'sekil/ustunlukler/5900-skill.png', '1'),
(2, 'Tech Jobs', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ac vulputate</p>', 'sekil/ustunlukler/4687-techjobs.png', '1'),
(4, 'Self Learn', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ac vulputate</p>', 'sekil/ustunlukler/728-selflearn.png', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_kat`
--
ALTER TABLE `blog_kat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `haqqinda`
--
ALTER TABLE `haqqinda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kurslar`
--
ALTER TABLE `kurslar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kurslar_kat`
--
ALTER TABLE `kurslar_kat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nizamlamalar`
--
ALTER TABLE `nizamlamalar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_header`
--
ALTER TABLE `slider_header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ustunlukler`
--
ALTER TABLE `ustunlukler`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `blog_kat`
--
ALTER TABLE `blog_kat`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `haqqinda`
--
ALTER TABLE `haqqinda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kurslar`
--
ALTER TABLE `kurslar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kurslar_kat`
--
ALTER TABLE `kurslar_kat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `nizamlamalar`
--
ALTER TABLE `nizamlamalar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider_header`
--
ALTER TABLE `slider_header`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ustunlukler`
--
ALTER TABLE `ustunlukler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
