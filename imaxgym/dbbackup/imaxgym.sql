-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2018 at 12:17 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imaxgym`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `article` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `article`, `url`, `image`, `updated_at`, `created_at`) VALUES
(1, 'Health Supplements', 'Organic, Keto, Raw', 'health-supplements', 'sup_1.jpg', '2017-12-20 10:49:28', '2017-12-05 09:06:25'),
(2, 'Fitness Equipment', 'Durable, Lasting, Working ', 'fitness-equipment', 'equip.jpg', '2017-12-05 09:10:07', '2017-12-05 09:10:07'),
(3, 'Sport Apparel', 'Yoga, Running ,Biking', 'sport-apparel', 'apparel.jpg', '2017-12-20 10:47:01', '2017-12-05 09:11:30');

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `article` text NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `menu_id`, `title`, `article`, `updated_at`, `created_at`) VALUES
(2, 1, 'Our shop in Israel', ' the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing', '2017-12-11 17:33:38', '2017-12-11 17:33:38'),
(4, 3, 'My services page title', '<p>here is my <b>article</b> text for <span style=\"color: rgb(255, 0, 0);\"><a href=\"http://services\" target=\"_blank\">services</a></span></p>', '2017-12-16 11:49:00', '2017-12-16 11:03:16'),
(6, 4, 'genie title', '<p>genie body</p>', '2017-12-20 07:56:42', '2017-12-20 07:56:42'),
(9, 4, 'goo', '<p>gfjfj</p>', '2017-12-20 09:17:27', '2017-12-20 09:17:27'),
(10, 6, 'goo123', '<p>gfjfj</p>', '2017-12-21 14:12:11', '2017-12-20 09:18:02'),
(11, 2, '', '<section>\r\n        <div class=\"container\">\r\n            <div class=\"row\">\r\n                <div class=\"col-sm-12\">\r\n                    <h1 class=\"text-weight-800 text-size-xsmall text-center\">Choose Membership Plan</h1>\r\n                    <p class=\"text-center margin-bottom-medium\">Nullam quis ante etiam sit amet orci eget eros fabus tincidunt duis leo sed fringilla mauris sit amet donec sodales sagittis magna.<br>sed consequat leo eget sodales. ntesque habitant morbi que senectus.</p>\r\n                </div>\r\n            </div>\r\n            <div class=\"row\">\r\n                <div class=\"col-md-3 col-sm-6\">\r\n                    <div class=\"pricing-table box-shadow-hover dark white-bg\">\r\n                        <div class=\"price-detail\">\r\n                            <div class=\"price text-white\"><i class=\"fa fa-usd\"></i>12</div>\r\n                        </div>\r\n                        <div class=\"time\"><i>Per Month</i></div>\r\n                        <ul>\r\n                            <li class=\"text-black\"><h3 class=\"text-weight-600\">Basic</h3></li>\r\n                            <li><div class=\"separator dark\"><i class=\"short-line\"></i><i class=\"fa fa-circle-o\"></i><i class=\"fa fa-circle\"></i><i class=\"fa fa-circle-o\"></i><span class=\"short-line\"></span></div></li>\r\n                            <li>Open Gym</li>\r\n                            <li><del>Gymnastics</del></li>\r\n                            <li><del>CrossFit</del></li>\r\n                            <li><del>Yoga</del></li>\r\n                            <li><del>Personal Trainer</del></li>\r\n                            <li class=\"button\"><button type=\"button\" class=\"btn btn-dark btn-lg text-weight-700 text-uppercase box-shadow-active\">Purchase</button></li>\r\n                        </ul>\r\n                    </div>\r\n                </div>\r\n                <div class=\"col-md-3 col-sm-6\">\r\n                    <div class=\"pricing-table box-shadow-hover dark white-bg\">\r\n                        <div class=\"price-detail\">\r\n                            <div class=\"price text-white\"><i class=\"fa fa-usd\"></i>32</div>\r\n                        </div>\r\n                        <div class=\"time\"><i>Per Month</i></div>\r\n                        <ul>\r\n                            <li class=\"text-black\"><h3>Standard</h3></li>\r\n                            <li><div class=\"separator dark\"><i class=\"short-line\"></i><i class=\"fa fa-circle-o\"></i><i class=\"fa fa-circle\"></i><i class=\"fa fa-circle-o\"></i><span class=\"short-line\"></span></div></li>\r\n                            <li>Open Gym</li>\r\n                            <li>Gymnastics</li>\r\n                            <li><del>CrossFit</del></li>\r\n                            <li><del>Yoga</del></li>\r\n                            <li><del>Personal Trainer</del></li>\r\n                            <li class=\"button\"><button type=\"button\" class=\"btn btn-dark btn-lg text-weight-700 text-uppercase box-shadow-active\">Purchase</button></li>\r\n                        </ul>\r\n                    </div>\r\n                </div>\r\n                <div class=\"col-md-3 col-sm-6\">\r\n                    <div class=\"pricing-table box-shadow-hover box-shadow-active base white-bg border-light\">\r\n                        <div class=\"price-detail\">\r\n                            <div class=\"price text-white\"><i class=\"fa fa-usd\"></i>45</div>\r\n                        </div>\r\n                        <div class=\"time\"><i>Per Month</i></div>\r\n                        <ul>\r\n                            <li class=\"text-black\"><h3>Professional</h3></li>\r\n                            <li><div class=\"separator dark\"><i class=\"short-line\"></i><i class=\"fa fa-circle-o\"></i><i class=\"fa fa-circle\"></i><i class=\"fa fa-circle-o\"></i><span class=\"short-line\"></span></div></li>\r\n                            <li>Open Gym</li>\r\n                            <li>Gymnastics</li>\r\n                            <li>CrossFit</li>\r\n                            <li><del>Yoga</del></li>\r\n                            <li><del>Personal Trainer</del></li>\r\n                            <li class=\"button\"><button type=\"button\" class=\"btn btn-base btn-lg text-weight-700 text-uppercase box-shadow-active\">Purchase</button></li>\r\n                        </ul>\r\n                    </div>\r\n                </div>\r\n                <div class=\"col-md-3 col-sm-6\">\r\n                    <div class=\"pricing-table box-shadow-hover dark white-bg\">\r\n                        <div class=\"price-detail\">\r\n                            <div class=\"price text-white\"><i class=\"fa fa-usd\"></i>90</div>\r\n                        </div>\r\n                        <div class=\"time\"><i>Per Month</i></div>\r\n                        <ul>\r\n                            <li class=\"text-black\"><h3>Enterprise</h3></li>\r\n                            <li><div class=\"separator dark\"><i class=\"short-line\"></i><i class=\"fa fa-circle-o\"></i><i class=\"fa fa-circle\"></i><i class=\"fa fa-circle-o\"></i><span class=\"short-line\"></span></div></li>\r\n                            <li>Open Gym</li>\r\n                            <li>Gymnastics</li>\r\n                            <li>CrossFit</li>\r\n                            <li>Yoga</li>\r\n                            <li>Personal Trainer</li>\r\n                            <li class=\"button\"><button type=\"button\" class=\"btn btn-dark btn-lg text-weight-700 text-uppercase box-shadow-active\">Purchase</button></li>\r\n                        </ul>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n        </div>\r\n    </section>', '2018-01-15 19:03:46', '2018-01-15 19:05:55'),
(12, 5, '', '<section class=\"padding-top-medium padding-bottom-medium\">\r\n        <div class=\"container\">\r\n            <div class=\"row\">\r\n                <div class=\"col-sm-12\">\r\n                    <h1 class=\"text-weight-800 text-size-xsmall text-center\">GYM Schedule time</h1>\r\n                    <p class=\"text-center margin-bottom-medium\">Nullam quis ante etiam sit amet orci eget eros fabus tincidunt duis leo sed fringilla mauris sit amet donec sodales sagittis magna.<br>sed consequat leo eget sodales. ntesque habitant morbi que senectus.</p>\r\n                </div>\r\n            </div>\r\n        </div>\r\n        <div class=\"container-fluid\">\r\n            <div class=\"table-responsive\">\r\n                <table class=\"table\">\r\n                    <thead>\r\n                        <tr class=\"text-uppercase dark-bg text-white\">\r\n                            <th> </th>\r\n                            <th class=\"text-center\"><h2 class=\"text-weight-700\">Monday</h2></th>\r\n                            <th class=\"text-center\"><h2 class=\"text-weight-700\">Tuesday</h2></th>\r\n                            <th class=\"text-center\"><h2 class=\"text-weight-700\">Wednesday</h2></th>\r\n                            <th class=\"text-center\"><h2 class=\"text-weight-700\">Thursday</h2></th>\r\n                            <th class=\"text-center\"><h2 class=\"text-weight-700\">Friday</h2></th>\r\n                            <th class=\"text-center\"><h2 class=\"text-weight-700\">Saturday</h2></th>\r\n                        </tr>\r\n                    </thead>\r\n                    <tbody>\r\n                        <tr>\r\n                            <th scope=\"row\" class=\"dark-bg text-white text-center\"><h4 class=\"text-weight-700\">09:30</h4></th>\r\n                            <td class=\"text-center base-bg\"><h4>Fitness Class</h4></td>\r\n                            <td class=\"text-center light-bg\"><h4> </h4></td>\r\n                            <td class=\"text-center light-bg\"><h4> </h4></td>\r\n                            <td class=\"text-center light-bg\"><h4> </h4></td>\r\n                            <td class=\"text-center base-bg\"><h4>Personal Training</h4></td>\r\n                            <td class=\"text-center light-bg\"><h4> </h4></td>\r\n                        </tr>\r\n                        <tr>\r\n                            <th scope=\"row\" class=\"dark-bg text-white text-center\"><h4 class=\"text-weight-700\">10:00</h4></th>\r\n                            <td class=\"text-center light-bg\"><h4> </h4></td>\r\n                            <td class=\"text-center base-bg\"><h4>Yoga Class</h4></td>\r\n                            <td class=\"text-center light-bg\"><h4> </h4></td>\r\n                            <td class=\"text-center light-bg\"><h4> </h4></td>\r\n                            <td class=\"text-center light-bg\"><h4> </h4></td>\r\n                            <td class=\"text-center light-bg\"><h4> </h4></td>\r\n                        </tr>\r\n                        <tr>\r\n                            <th scope=\"row\" class=\"dark-bg text-white text-center\"><h4 class=\"text-weight-700\">10:30</h4></th>\r\n                            <td class=\"text-center light-bg\"><h4> </h4></td>\r\n                            <td class=\"text-center light-bg\"><h4> </h4></td>\r\n                            <td class=\"text-center light-bg\"><h4> </h4></td>\r\n                            <td class=\"text-center base-bg\"><h4>Personal Training</h4></td>\r\n                            <td class=\"text-center light-bg\"><h4> </h4></td>\r\n                            <td class=\"text-center base-bg\"><h4>Group Class</h4></td>\r\n                        </tr>\r\n                        <tr>\r\n                            <th scope=\"row\" class=\"dark-bg text-white text-center\"><h4 class=\"text-weight-700\">11:00</h4></th>\r\n                            <td class=\"text-center light-bg\"><h4> </h4></td>\r\n                            <td class=\"text-center light-bg\"><h4> </h4></td>\r\n                            <td class=\"text-center base-bg\"><h4>Group Class</h4></td>\r\n                            <td class=\"text-center light-bg\"><h4> </h4></td>\r\n                            <td class=\"text-center light-bg\"><h4> </h4></td>\r\n                            <td class=\"text-center light-bg\"><h4> </h4></td>\r\n                        </tr>\r\n                        <tr>\r\n                            <th scope=\"row\" class=\"dark-bg text-white text-center\"><h4 class=\"text-weight-700\">11:30</h4></th>\r\n                            <td class=\"text-center light-bg\"><h4> </h4></td>\r\n                            <td class=\"text-center base-bg\"><h4>Fitness Class</h4></td>\r\n                            <td class=\"text-center light-bg\"><h4> </h4></td>\r\n                            <td class=\"text-center light-bg\"><h4> </h4></td>\r\n                            <td class=\"text-center base-bg\"><h4>Yoga Class</h4></td>\r\n                            <td class=\"text-center light-bg\"><h4> </h4></td>\r\n                        </tr>\r\n                        <tr>\r\n                            <th scope=\"row\" class=\"dark-bg text-white text-center\"><h4 class=\"text-weight-700\">12:00</h4></th>\r\n                            <td class=\"text-center light-bg\"><h4> </h4></td>\r\n                            <td class=\"text-center light-bg\"><h4> </h4></td>\r\n                            <td class=\"text-center light-bg\"><h4> </h4></td>\r\n                            <td class=\"text-center base-bg\"><h4>Group Class</h4></td>\r\n                            <td class=\"text-center light-bg\"><h4> </h4></td>\r\n                            <td class=\"text-center light-bg\"><h4> </h4></td>\r\n                        </tr>\r\n                        <tr>\r\n                            <th scope=\"row\" class=\"dark-bg text-white text-center\"><h4 class=\"text-weight-700\">12:30</h4></th>\r\n                            <td class=\"text-center base-bg\"><h4>Group Class</h4></td>\r\n                            <td class=\"text-center light-bg\"><h4> </h4></td>\r\n                            <td class=\"text-center base-bg\"><h4>Yoga Class</h4></td>\r\n                            <td class=\"text-center light-bg\"><h4> </h4></td>\r\n                            <td class=\"text-center light-bg\"><h4> </h4></td>\r\n                            <td class=\"text-center light-bg\"><h4> </h4></td>\r\n                        </tr>\r\n                        <tr>\r\n                            <th scope=\"row\" class=\"dark-bg text-white text-center\"><h4 class=\"text-weight-700\">01:00</h4></th>\r\n                            <td class=\"text-center light-bg\"><h4> </h4></td>\r\n                            <td class=\"text-center light-bg\"><h4> </h4></td>\r\n                            <td class=\"text-center light-bg\"><h4> </h4></td>\r\n                            <td class=\"text-center light-bg\"><h4> </h4></td>\r\n                            <td class=\"text-center base-bg\"><h4>Personal Training</h4></td>\r\n                            <td class=\"text-center light-bg\"><h4> </h4></td>\r\n                        </tr>\r\n                        <tr>\r\n                            <th scope=\"row\" class=\"dark-bg text-white text-center\"><h4 class=\"text-weight-700\">01:30</h4></th>\r\n                            <td class=\"text-center light-bg\"><h4> </h4></td>\r\n                            <td class=\"text-center base-bg\"><h4>Group Class</h4></td>\r\n                            <td class=\"text-center light-bg\"><h4> </h4></td>\r\n                            <td class=\"text-center light-bg\"><h4> </h4></td>\r\n                            <td class=\"text-center light-bg\"><h4> </h4></td>\r\n                            <td class=\"text-center base-bg\"><h4>Group Class</h4></td>\r\n                        </tr>\r\n                        <tr>\r\n                            <th scope=\"row\" class=\"dark-bg text-white text-center\"><h4 class=\"text-weight-700\">02:00</h4></th>\r\n                            <td class=\"text-center light-bg\"><h4> </h4></td>\r\n                            <td class=\"text-center light-bg\"><h4> </h4></td>\r\n                            <td class=\"text-center base-bg\"><h4>Personal Training</h4></td>\r\n                            <td class=\"text-center light-bg\"><h4> </h4></td>\r\n                            <td class=\"text-center light-bg\"><h4> </h4></td>\r\n                            <td class=\"text-center light-bg\"><h4> </h4></td>\r\n                        </tr>\r\n                        <tr>\r\n                            <th scope=\"row\" class=\"dark-bg text-white text-center\"><h4 class=\"text-weight-700\">02:30</h4></th>\r\n                            <td class=\"text-center light-bg\"><h4> </h4></td>\r\n                            <td class=\"text-center light-bg\"><h4> </h4></td>\r\n                            <td class=\"text-center light-bg\"><h4> </h4></td>\r\n                            <td class=\"text-center base-bg\"><h4>Group Class</h4></td>\r\n                            <td class=\"text-center light-bg\"><h4> </h4></td>\r\n                            <td class=\"text-center light-bg\"><h4> </h4></td>\r\n                        </tr>\r\n                    </tbody>\r\n                </table>\r\n            </div>\r\n        </div>\r\n    </section>', '2018-01-15 19:03:21', '2018-01-15 19:13:24');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `mtitle` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `link`, `mtitle`, `url`, `updated_at`, `created_at`) VALUES
(2, 'Membership', 'Membership', 'gym-memberships', '2017-12-20 10:46:25', '2017-12-11 16:46:29'),
(5, 'Schedule', 'schedule', 'gym-schedule', '2018-01-15 19:11:28', '2018-01-15 19:11:28');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `data` text NOT NULL,
  `total` decimal(8,0) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `data`, `total`, `updated_at`, `created_at`) VALUES
(1, 5, 'a:2:{i:1;a:6:{s:2:\"id\";s:1:\"1\";s:4:\"name\";s:16:\"ashton-martin-xl\";s:5:\"price\";d:120000;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}i:2;a:6:{s:2:\"id\";s:1:\"2\";s:4:\"name\";s:11:\"mercedes-ls\";s:5:\"price\";d:150000;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}}', '270000', '2017-12-21 06:01:28', '2017-12-21 06:01:28'),
(2, 5, 'a:1:{i:3;a:6:{s:2:\"id\";s:1:\"3\";s:4:\"name\";s:16:\"porshe-cayene-ds\";s:5:\"price\";d:165000;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}}', '165000', '2017-12-21 06:04:06', '2017-12-21 06:04:06'),
(3, 3, 'a:1:{i:1;a:6:{s:2:\"id\";s:1:\"1\";s:4:\"name\";s:16:\"ashton-martin-xl\";s:5:\"price\";d:120000;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}}', '120000', '2017-12-21 17:02:09', '2017-12-21 17:02:09'),
(4, 5, 'a:2:{i:3;a:6:{s:2:\"id\";s:1:\"3\";s:4:\"name\";s:16:\"porshe-cayene-ds\";s:5:\"price\";d:165000;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}i:4;a:6:{s:2:\"id\";s:1:\"4\";s:4:\"name\";s:11:\"audi-lux-sm\";s:5:\"price\";d:145000;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}}', '310000', '2017-12-21 17:27:46', '2017-12-21 17:27:46'),
(5, 5, 'a:1:{i:1;a:6:{s:2:\"id\";s:1:\"1\";s:4:\"name\";s:16:\"ashton-martin-xl\";s:5:\"price\";d:120000;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}}', '120000', '2017-12-23 12:52:21', '2017-12-23 12:52:21'),
(6, 5, 'a:1:{i:1;a:6:{s:2:\"id\";s:1:\"1\";s:4:\"name\";s:16:\"ashton-martin-xl\";s:5:\"price\";d:120000;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}}', '120000', '2017-12-23 13:25:14', '2017-12-23 13:25:14'),
(7, 3, 'a:2:{i:1;a:6:{s:2:\"id\";s:1:\"1\";s:4:\"name\";s:16:\"ashton-martin-xl\";s:5:\"price\";d:120000;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}i:2;a:6:{s:2:\"id\";s:1:\"2\";s:4:\"name\";s:11:\"mercedes-ls\";s:5:\"price\";d:150000;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}}', '270000', '2017-12-27 12:18:34', '2017-12-27 12:18:34'),
(8, 3, 'a:1:{i:3;a:6:{s:2:\"id\";s:1:\"3\";s:4:\"name\";s:16:\"porshe-cayene-ds\";s:5:\"price\";d:165000;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}}', '165000', '2017-12-27 12:19:56', '2017-12-27 12:19:56'),
(9, 3, 'a:3:{i:4;a:6:{s:2:\"id\";s:1:\"4\";s:4:\"name\";s:11:\"audi-lux-sm\";s:5:\"price\";d:145000;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}i:11;a:6:{s:2:\"id\";s:2:\"11\";s:4:\"name\";s:3:\"sss\";s:5:\"price\";d:333;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}i:3;a:6:{s:2:\"id\";s:1:\"3\";s:4:\"name\";s:16:\"porshe-cayene-ds\";s:5:\"price\";d:165000;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}}', '310333', '2017-12-27 13:06:00', '2017-12-27 13:06:00'),
(10, 3, 'a:1:{i:11;a:6:{s:2:\"id\";s:2:\"11\";s:4:\"name\";s:15:\"bowflex-weights\";s:5:\"price\";d:70;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:5:\"image\";s:11:\"bowflex.jpg\";s:3:\"url\";s:7:\"bowflex\";}s:10:\"conditions\";a:0:{}}}', '70', '2018-01-12 13:45:07', '2018-01-12 13:45:07'),
(11, 3, 'a:2:{i:19;a:6:{s:2:\"id\";s:2:\"19\";s:4:\"name\";s:10:\"yoga block\";s:5:\"price\";d:18;s:8:\"quantity\";i:3;s:10:\"attributes\";a:2:{s:5:\"image\";s:14:\"yoga-block.jpg\";s:3:\"url\";s:10:\"yoga-block\";}s:10:\"conditions\";a:0:{}}i:4;a:6:{s:2:\"id\";s:1:\"4\";s:4:\"name\";s:8:\"yoga-mat\";s:5:\"price\";d:24;s:8:\"quantity\";i:2;s:10:\"attributes\";a:2:{s:5:\"image\";s:8:\"mat1.jpg\";s:3:\"url\";s:8:\"yoga-mat\";}s:10:\"conditions\";a:0:{}}}', '102', '2018-01-13 01:08:10', '2018-01-13 01:08:10'),
(12, 3, 'a:2:{i:19;a:6:{s:2:\"id\";s:2:\"19\";s:4:\"name\";s:10:\"yoga block\";s:5:\"price\";d:18;s:8:\"quantity\";i:3;s:10:\"attributes\";a:2:{s:5:\"image\";s:14:\"yoga-block.jpg\";s:3:\"url\";s:10:\"yoga-block\";}s:10:\"conditions\";a:0:{}}i:4;a:6:{s:2:\"id\";s:1:\"4\";s:4:\"name\";s:8:\"yoga-mat\";s:5:\"price\";d:24;s:8:\"quantity\";i:2;s:10:\"attributes\";a:2:{s:5:\"image\";s:8:\"mat1.jpg\";s:3:\"url\";s:8:\"yoga-mat\";}s:10:\"conditions\";a:0:{}}}', '102', '2018-01-13 01:58:26', '2018-01-13 01:58:26'),
(13, 3, 'a:2:{i:19;a:6:{s:2:\"id\";s:2:\"19\";s:4:\"name\";s:10:\"yoga block\";s:5:\"price\";d:18;s:8:\"quantity\";i:3;s:10:\"attributes\";a:2:{s:5:\"image\";s:14:\"yoga-block.jpg\";s:3:\"url\";s:10:\"yoga-block\";}s:10:\"conditions\";a:0:{}}i:4;a:6:{s:2:\"id\";s:1:\"4\";s:4:\"name\";s:8:\"yoga-mat\";s:5:\"price\";d:24;s:8:\"quantity\";i:2;s:10:\"attributes\";a:2:{s:5:\"image\";s:8:\"mat1.jpg\";s:3:\"url\";s:8:\"yoga-mat\";}s:10:\"conditions\";a:0:{}}}', '102', '2018-01-13 02:47:01', '2018-01-13 02:47:01'),
(14, 3, 'a:2:{i:19;a:6:{s:2:\"id\";s:2:\"19\";s:4:\"name\";s:10:\"yoga block\";s:5:\"price\";d:18;s:8:\"quantity\";i:3;s:10:\"attributes\";a:2:{s:5:\"image\";s:14:\"yoga-block.jpg\";s:3:\"url\";s:10:\"yoga-block\";}s:10:\"conditions\";a:0:{}}i:4;a:6:{s:2:\"id\";s:1:\"4\";s:4:\"name\";s:8:\"yoga-mat\";s:5:\"price\";d:24;s:8:\"quantity\";i:2;s:10:\"attributes\";a:2:{s:5:\"image\";s:8:\"mat1.jpg\";s:3:\"url\";s:8:\"yoga-mat\";}s:10:\"conditions\";a:0:{}}}', '102', '2018-01-13 02:47:56', '2018-01-13 02:47:56'),
(15, 3, 'a:2:{i:19;a:6:{s:2:\"id\";s:2:\"19\";s:4:\"name\";s:10:\"yoga block\";s:5:\"price\";d:18;s:8:\"quantity\";i:3;s:10:\"attributes\";a:2:{s:5:\"image\";s:14:\"yoga-block.jpg\";s:3:\"url\";s:10:\"yoga-block\";}s:10:\"conditions\";a:0:{}}i:4;a:6:{s:2:\"id\";s:1:\"4\";s:4:\"name\";s:8:\"yoga-mat\";s:5:\"price\";d:24;s:8:\"quantity\";i:2;s:10:\"attributes\";a:2:{s:5:\"image\";s:8:\"mat1.jpg\";s:3:\"url\";s:8:\"yoga-mat\";}s:10:\"conditions\";a:0:{}}}', '102', '2018-01-13 02:48:50', '2018-01-13 02:48:50'),
(16, 3, 'a:2:{i:19;a:6:{s:2:\"id\";s:2:\"19\";s:4:\"name\";s:10:\"yoga block\";s:5:\"price\";d:18;s:8:\"quantity\";i:3;s:10:\"attributes\";a:2:{s:5:\"image\";s:14:\"yoga-block.jpg\";s:3:\"url\";s:10:\"yoga-block\";}s:10:\"conditions\";a:0:{}}i:4;a:6:{s:2:\"id\";s:1:\"4\";s:4:\"name\";s:8:\"yoga-mat\";s:5:\"price\";d:24;s:8:\"quantity\";i:2;s:10:\"attributes\";a:2:{s:5:\"image\";s:8:\"mat1.jpg\";s:3:\"url\";s:8:\"yoga-mat\";}s:10:\"conditions\";a:0:{}}}', '102', '2018-01-13 02:49:21', '2018-01-13 02:49:21'),
(17, 3, 'a:2:{i:19;a:6:{s:2:\"id\";s:2:\"19\";s:4:\"name\";s:10:\"yoga block\";s:5:\"price\";d:18;s:8:\"quantity\";i:3;s:10:\"attributes\";a:2:{s:5:\"image\";s:14:\"yoga-block.jpg\";s:3:\"url\";s:10:\"yoga-block\";}s:10:\"conditions\";a:0:{}}i:4;a:6:{s:2:\"id\";s:1:\"4\";s:4:\"name\";s:8:\"yoga-mat\";s:5:\"price\";d:24;s:8:\"quantity\";i:2;s:10:\"attributes\";a:2:{s:5:\"image\";s:8:\"mat1.jpg\";s:3:\"url\";s:8:\"yoga-mat\";}s:10:\"conditions\";a:0:{}}}', '102', '2018-01-13 02:50:02', '2018-01-13 02:50:02'),
(18, 3, 'a:2:{i:19;a:6:{s:2:\"id\";s:2:\"19\";s:4:\"name\";s:10:\"yoga block\";s:5:\"price\";d:18;s:8:\"quantity\";i:3;s:10:\"attributes\";a:2:{s:5:\"image\";s:14:\"yoga-block.jpg\";s:3:\"url\";s:10:\"yoga-block\";}s:10:\"conditions\";a:0:{}}i:4;a:6:{s:2:\"id\";s:1:\"4\";s:4:\"name\";s:8:\"yoga-mat\";s:5:\"price\";d:24;s:8:\"quantity\";i:2;s:10:\"attributes\";a:2:{s:5:\"image\";s:8:\"mat1.jpg\";s:3:\"url\";s:8:\"yoga-mat\";}s:10:\"conditions\";a:0:{}}}', '102', '2018-01-13 02:52:06', '2018-01-13 02:52:06'),
(19, 3, 'a:2:{i:19;a:6:{s:2:\"id\";s:2:\"19\";s:4:\"name\";s:10:\"yoga block\";s:5:\"price\";d:18;s:8:\"quantity\";i:3;s:10:\"attributes\";a:2:{s:5:\"image\";s:14:\"yoga-block.jpg\";s:3:\"url\";s:10:\"yoga-block\";}s:10:\"conditions\";a:0:{}}i:4;a:6:{s:2:\"id\";s:1:\"4\";s:4:\"name\";s:8:\"yoga-mat\";s:5:\"price\";d:24;s:8:\"quantity\";i:2;s:10:\"attributes\";a:2:{s:5:\"image\";s:8:\"mat1.jpg\";s:3:\"url\";s:8:\"yoga-mat\";}s:10:\"conditions\";a:0:{}}}', '102', '2018-01-13 02:53:30', '2018-01-13 02:53:30'),
(20, 3, 'a:2:{i:19;a:6:{s:2:\"id\";s:2:\"19\";s:4:\"name\";s:10:\"yoga block\";s:5:\"price\";d:18;s:8:\"quantity\";i:3;s:10:\"attributes\";a:2:{s:5:\"image\";s:14:\"yoga-block.jpg\";s:3:\"url\";s:10:\"yoga-block\";}s:10:\"conditions\";a:0:{}}i:4;a:6:{s:2:\"id\";s:1:\"4\";s:4:\"name\";s:8:\"yoga-mat\";s:5:\"price\";d:24;s:8:\"quantity\";i:2;s:10:\"attributes\";a:2:{s:5:\"image\";s:8:\"mat1.jpg\";s:3:\"url\";s:8:\"yoga-mat\";}s:10:\"conditions\";a:0:{}}}', '102', '2018-01-13 02:54:02', '2018-01-13 02:54:02'),
(21, 3, 'a:2:{i:19;a:6:{s:2:\"id\";s:2:\"19\";s:4:\"name\";s:10:\"yoga block\";s:5:\"price\";d:18;s:8:\"quantity\";i:3;s:10:\"attributes\";a:2:{s:5:\"image\";s:14:\"yoga-block.jpg\";s:3:\"url\";s:10:\"yoga-block\";}s:10:\"conditions\";a:0:{}}i:4;a:6:{s:2:\"id\";s:1:\"4\";s:4:\"name\";s:8:\"yoga-mat\";s:5:\"price\";d:24;s:8:\"quantity\";i:2;s:10:\"attributes\";a:2:{s:5:\"image\";s:8:\"mat1.jpg\";s:3:\"url\";s:8:\"yoga-mat\";}s:10:\"conditions\";a:0:{}}}', '102', '2018-01-13 02:56:53', '2018-01-13 02:56:53'),
(22, 3, 'a:2:{i:19;a:6:{s:2:\"id\";s:2:\"19\";s:4:\"name\";s:10:\"yoga block\";s:5:\"price\";d:18;s:8:\"quantity\";i:3;s:10:\"attributes\";a:2:{s:5:\"image\";s:14:\"yoga-block.jpg\";s:3:\"url\";s:10:\"yoga-block\";}s:10:\"conditions\";a:0:{}}i:4;a:6:{s:2:\"id\";s:1:\"4\";s:4:\"name\";s:8:\"yoga-mat\";s:5:\"price\";d:24;s:8:\"quantity\";i:2;s:10:\"attributes\";a:2:{s:5:\"image\";s:8:\"mat1.jpg\";s:3:\"url\";s:8:\"yoga-mat\";}s:10:\"conditions\";a:0:{}}}', '102', '2018-01-13 02:59:59', '2018-01-13 02:59:59'),
(23, 3, 'a:2:{i:19;a:6:{s:2:\"id\";s:2:\"19\";s:4:\"name\";s:10:\"yoga block\";s:5:\"price\";d:18;s:8:\"quantity\";i:3;s:10:\"attributes\";a:2:{s:5:\"image\";s:14:\"yoga-block.jpg\";s:3:\"url\";s:10:\"yoga-block\";}s:10:\"conditions\";a:0:{}}i:4;a:6:{s:2:\"id\";s:1:\"4\";s:4:\"name\";s:8:\"yoga-mat\";s:5:\"price\";d:24;s:8:\"quantity\";i:2;s:10:\"attributes\";a:2:{s:5:\"image\";s:8:\"mat1.jpg\";s:3:\"url\";s:8:\"yoga-mat\";}s:10:\"conditions\";a:0:{}}}', '102', '2018-01-13 03:02:26', '2018-01-13 03:02:26'),
(24, 3, 'a:2:{i:19;a:6:{s:2:\"id\";s:2:\"19\";s:4:\"name\";s:10:\"yoga block\";s:5:\"price\";d:18;s:8:\"quantity\";i:3;s:10:\"attributes\";a:2:{s:5:\"image\";s:14:\"yoga-block.jpg\";s:3:\"url\";s:10:\"yoga-block\";}s:10:\"conditions\";a:0:{}}i:4;a:6:{s:2:\"id\";s:1:\"4\";s:4:\"name\";s:8:\"yoga-mat\";s:5:\"price\";d:24;s:8:\"quantity\";i:2;s:10:\"attributes\";a:2:{s:5:\"image\";s:8:\"mat1.jpg\";s:3:\"url\";s:8:\"yoga-mat\";}s:10:\"conditions\";a:0:{}}}', '102', '2018-01-13 03:03:50', '2018-01-13 03:03:50'),
(25, 3, 'a:2:{i:19;a:6:{s:2:\"id\";s:2:\"19\";s:4:\"name\";s:10:\"yoga block\";s:5:\"price\";d:18;s:8:\"quantity\";i:3;s:10:\"attributes\";a:2:{s:5:\"image\";s:14:\"yoga-block.jpg\";s:3:\"url\";s:10:\"yoga-block\";}s:10:\"conditions\";a:0:{}}i:4;a:6:{s:2:\"id\";s:1:\"4\";s:4:\"name\";s:8:\"yoga-mat\";s:5:\"price\";d:24;s:8:\"quantity\";i:2;s:10:\"attributes\";a:2:{s:5:\"image\";s:8:\"mat1.jpg\";s:3:\"url\";s:8:\"yoga-mat\";}s:10:\"conditions\";a:0:{}}}', '102', '2018-01-13 03:04:15', '2018-01-13 03:04:15'),
(26, 3, 'a:1:{i:1;a:6:{s:2:\"id\";s:1:\"1\";s:4:\"name\";s:8:\"turmeric\";s:5:\"price\";d:25;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:5:\"image\";s:12:\"turmeric.jpg\";s:3:\"url\";s:8:\"turmeric\";}s:10:\"conditions\";a:0:{}}}', '25', '2018-01-14 10:44:21', '2018-01-14 10:44:21'),
(27, 4, 'a:4:{i:23;a:6:{s:2:\"id\";s:2:\"23\";s:4:\"name\";s:10:\"probiotics\";s:5:\"price\";d:18;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:5:\"image\";s:14:\"probiotics.jpg\";s:3:\"url\";s:9:\"probiotic\";}s:10:\"conditions\";a:0:{}}i:10;a:6:{s:2:\"id\";s:2:\"10\";s:4:\"name\";s:7:\"raw-bar\";s:5:\"price\";d:15;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:5:\"image\";s:7:\"bar.jpg\";s:3:\"url\";s:7:\"raw-bar\";}s:10:\"conditions\";a:0:{}}i:16;a:6:{s:2:\"id\";s:2:\"16\";s:4:\"name\";s:10:\"spirullina\";s:5:\"price\";d:20;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:5:\"image\";s:14:\"spirullina.jpg\";s:3:\"url\";s:10:\"spirullina\";}s:10:\"conditions\";a:0:{}}i:19;a:6:{s:2:\"id\";s:2:\"19\";s:4:\"name\";s:10:\"yoga block\";s:5:\"price\";d:18;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:5:\"image\";s:14:\"yoga-block.jpg\";s:3:\"url\";s:10:\"yoga-block\";}s:10:\"conditions\";a:0:{}}}', '71', '2018-01-15 18:43:55', '2018-01-15 18:43:55'),
(28, 4, 'a:4:{i:23;a:6:{s:2:\"id\";s:2:\"23\";s:4:\"name\";s:10:\"probiotics\";s:5:\"price\";d:18;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:5:\"image\";s:14:\"probiotics.jpg\";s:3:\"url\";s:9:\"probiotic\";}s:10:\"conditions\";a:0:{}}i:10;a:6:{s:2:\"id\";s:2:\"10\";s:4:\"name\";s:7:\"raw-bar\";s:5:\"price\";d:15;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:5:\"image\";s:7:\"bar.jpg\";s:3:\"url\";s:7:\"raw-bar\";}s:10:\"conditions\";a:0:{}}i:16;a:6:{s:2:\"id\";s:2:\"16\";s:4:\"name\";s:10:\"spirullina\";s:5:\"price\";d:20;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:5:\"image\";s:14:\"spirullina.jpg\";s:3:\"url\";s:10:\"spirullina\";}s:10:\"conditions\";a:0:{}}i:19;a:6:{s:2:\"id\";s:2:\"19\";s:4:\"name\";s:10:\"yoga block\";s:5:\"price\";d:18;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:5:\"image\";s:14:\"yoga-block.jpg\";s:3:\"url\";s:10:\"yoga-block\";}s:10:\"conditions\";a:0:{}}}', '71', '2018-01-15 18:44:11', '2018-01-15 18:44:11'),
(29, 4, 'a:4:{i:23;a:6:{s:2:\"id\";s:2:\"23\";s:4:\"name\";s:10:\"probiotics\";s:5:\"price\";d:18;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:5:\"image\";s:14:\"probiotics.jpg\";s:3:\"url\";s:9:\"probiotic\";}s:10:\"conditions\";a:0:{}}i:10;a:6:{s:2:\"id\";s:2:\"10\";s:4:\"name\";s:7:\"raw-bar\";s:5:\"price\";d:15;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:5:\"image\";s:7:\"bar.jpg\";s:3:\"url\";s:7:\"raw-bar\";}s:10:\"conditions\";a:0:{}}i:16;a:6:{s:2:\"id\";s:2:\"16\";s:4:\"name\";s:10:\"spirullina\";s:5:\"price\";d:20;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:5:\"image\";s:14:\"spirullina.jpg\";s:3:\"url\";s:10:\"spirullina\";}s:10:\"conditions\";a:0:{}}i:19;a:6:{s:2:\"id\";s:2:\"19\";s:4:\"name\";s:10:\"yoga block\";s:5:\"price\";d:18;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:5:\"image\";s:14:\"yoga-block.jpg\";s:3:\"url\";s:10:\"yoga-block\";}s:10:\"conditions\";a:0:{}}}', '71', '2018-01-15 18:56:26', '2018-01-15 18:56:26'),
(30, 3, 'a:1:{i:20;a:6:{s:2:\"id\";s:2:\"20\";s:4:\"name\";s:10:\"yoga pants\";s:5:\"price\";d:39;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:5:\"image\";s:14:\"yoga-pants.jpg\";s:3:\"url\";s:10:\"yoga-pants\";}s:10:\"conditions\";a:0:{}}}', '39', '2018-01-15 19:15:23', '2018-01-15 19:15:23'),
(31, 3, 'a:1:{i:20;a:6:{s:2:\"id\";s:2:\"20\";s:4:\"name\";s:10:\"yoga pants\";s:5:\"price\";d:39;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:5:\"image\";s:14:\"yoga-pants.jpg\";s:3:\"url\";s:10:\"yoga-pants\";}s:10:\"conditions\";a:0:{}}}', '39', '2018-01-15 19:18:12', '2018-01-15 19:18:12'),
(32, 3, 'a:1:{i:20;a:6:{s:2:\"id\";s:2:\"20\";s:4:\"name\";s:10:\"yoga pants\";s:5:\"price\";d:39;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:5:\"image\";s:14:\"yoga-pants.jpg\";s:3:\"url\";s:10:\"yoga-pants\";}s:10:\"conditions\";a:0:{}}}', '39', '2018-01-15 19:24:32', '2018-01-15 19:24:32'),
(33, 3, 'a:1:{i:20;a:6:{s:2:\"id\";s:2:\"20\";s:4:\"name\";s:10:\"yoga pants\";s:5:\"price\";d:39;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:5:\"image\";s:14:\"yoga-pants.jpg\";s:3:\"url\";s:10:\"yoga-pants\";}s:10:\"conditions\";a:0:{}}}', '39', '2018-01-15 19:24:53', '2018-01-15 19:24:53'),
(34, 3, 'a:1:{i:20;a:6:{s:2:\"id\";s:2:\"20\";s:4:\"name\";s:10:\"yoga pants\";s:5:\"price\";d:39;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:5:\"image\";s:14:\"yoga-pants.jpg\";s:3:\"url\";s:10:\"yoga-pants\";}s:10:\"conditions\";a:0:{}}}', '39', '2018-01-15 19:25:51', '2018-01-15 19:25:51'),
(35, 3, 'a:1:{i:20;a:6:{s:2:\"id\";s:2:\"20\";s:4:\"name\";s:10:\"yoga pants\";s:5:\"price\";d:39;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:5:\"image\";s:14:\"yoga-pants.jpg\";s:3:\"url\";s:10:\"yoga-pants\";}s:10:\"conditions\";a:0:{}}}', '39', '2018-01-15 19:35:29', '2018-01-15 19:35:29'),
(36, 3, 'a:1:{i:20;a:6:{s:2:\"id\";s:2:\"20\";s:4:\"name\";s:10:\"yoga pants\";s:5:\"price\";d:39;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:5:\"image\";s:14:\"yoga-pants.jpg\";s:3:\"url\";s:10:\"yoga-pants\";}s:10:\"conditions\";a:0:{}}}', '39', '2018-01-15 19:38:53', '2018-01-15 19:38:53'),
(37, 3, 'a:1:{i:20;a:6:{s:2:\"id\";s:2:\"20\";s:4:\"name\";s:10:\"yoga pants\";s:5:\"price\";d:39;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:5:\"image\";s:14:\"yoga-pants.jpg\";s:3:\"url\";s:10:\"yoga-pants\";}s:10:\"conditions\";a:0:{}}}', '39', '2018-01-15 19:39:50', '2018-01-15 19:39:50'),
(38, 3, 'a:1:{i:20;a:6:{s:2:\"id\";s:2:\"20\";s:4:\"name\";s:10:\"yoga pants\";s:5:\"price\";d:39;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:5:\"image\";s:14:\"yoga-pants.jpg\";s:3:\"url\";s:10:\"yoga-pants\";}s:10:\"conditions\";a:0:{}}}', '39', '2018-01-15 19:40:11', '2018-01-15 19:40:11'),
(39, 3, 'a:1:{i:20;a:6:{s:2:\"id\";s:2:\"20\";s:4:\"name\";s:10:\"yoga pants\";s:5:\"price\";d:39;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:5:\"image\";s:14:\"yoga-pants.jpg\";s:3:\"url\";s:10:\"yoga-pants\";}s:10:\"conditions\";a:0:{}}}', '39', '2018-01-15 19:40:26', '2018-01-15 19:40:26'),
(40, 3, 'a:1:{i:20;a:6:{s:2:\"id\";s:2:\"20\";s:4:\"name\";s:10:\"yoga pants\";s:5:\"price\";d:39;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:5:\"image\";s:14:\"yoga-pants.jpg\";s:3:\"url\";s:10:\"yoga-pants\";}s:10:\"conditions\";a:0:{}}}', '39', '2018-01-15 19:47:12', '2018-01-15 19:47:12'),
(41, 3, 'a:1:{i:20;a:6:{s:2:\"id\";s:2:\"20\";s:4:\"name\";s:10:\"yoga pants\";s:5:\"price\";d:39;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:5:\"image\";s:14:\"yoga-pants.jpg\";s:3:\"url\";s:10:\"yoga-pants\";}s:10:\"conditions\";a:0:{}}}', '39', '2018-01-15 19:53:31', '2018-01-15 19:53:31'),
(42, 3, 'a:1:{i:20;a:6:{s:2:\"id\";s:2:\"20\";s:4:\"name\";s:10:\"yoga pants\";s:5:\"price\";d:39;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:5:\"image\";s:14:\"yoga-pants.jpg\";s:3:\"url\";s:10:\"yoga-pants\";}s:10:\"conditions\";a:0:{}}}', '39', '2018-01-15 19:55:14', '2018-01-15 19:55:14'),
(43, 3, 'a:1:{i:20;a:6:{s:2:\"id\";s:2:\"20\";s:4:\"name\";s:10:\"yoga pants\";s:5:\"price\";d:39;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:5:\"image\";s:14:\"yoga-pants.jpg\";s:3:\"url\";s:10:\"yoga-pants\";}s:10:\"conditions\";a:0:{}}}', '39', '2018-01-15 19:59:21', '2018-01-15 19:59:21'),
(44, 3, 'a:1:{i:20;a:6:{s:2:\"id\";s:2:\"20\";s:4:\"name\";s:10:\"yoga pants\";s:5:\"price\";d:39;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:5:\"image\";s:14:\"yoga-pants.jpg\";s:3:\"url\";s:10:\"yoga-pants\";}s:10:\"conditions\";a:0:{}}}', '39', '2018-01-15 20:02:32', '2018-01-15 20:02:32'),
(45, 3, 'a:1:{i:20;a:6:{s:2:\"id\";s:2:\"20\";s:4:\"name\";s:10:\"yoga pants\";s:5:\"price\";d:39;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:5:\"image\";s:14:\"yoga-pants.jpg\";s:3:\"url\";s:10:\"yoga-pants\";}s:10:\"conditions\";a:0:{}}}', '39', '2018-01-15 20:04:37', '2018-01-15 20:04:37'),
(46, 3, 'a:1:{i:20;a:6:{s:2:\"id\";s:2:\"20\";s:4:\"name\";s:10:\"yoga pants\";s:5:\"price\";d:39;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:5:\"image\";s:14:\"yoga-pants.jpg\";s:3:\"url\";s:10:\"yoga-pants\";}s:10:\"conditions\";a:0:{}}}', '39', '2018-01-15 20:06:22', '2018-01-15 20:06:22'),
(47, 3, 'a:1:{i:20;a:6:{s:2:\"id\";s:2:\"20\";s:4:\"name\";s:10:\"yoga pants\";s:5:\"price\";d:39;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:5:\"image\";s:14:\"yoga-pants.jpg\";s:3:\"url\";s:10:\"yoga-pants\";}s:10:\"conditions\";a:0:{}}}', '39', '2018-01-15 20:06:27', '2018-01-15 20:06:27'),
(48, 3, 'a:1:{i:20;a:6:{s:2:\"id\";s:2:\"20\";s:4:\"name\";s:10:\"yoga pants\";s:5:\"price\";d:39;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:5:\"image\";s:14:\"yoga-pants.jpg\";s:3:\"url\";s:10:\"yoga-pants\";}s:10:\"conditions\";a:0:{}}}', '39', '2018-01-15 20:15:46', '2018-01-15 20:15:46'),
(49, 3, 'a:1:{i:20;a:6:{s:2:\"id\";s:2:\"20\";s:4:\"name\";s:10:\"yoga pants\";s:5:\"price\";d:39;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:5:\"image\";s:14:\"yoga-pants.jpg\";s:3:\"url\";s:10:\"yoga-pants\";}s:10:\"conditions\";a:0:{}}}', '39', '2018-01-15 20:17:49', '2018-01-15 20:17:49'),
(50, 3, 'a:1:{i:20;a:6:{s:2:\"id\";s:2:\"20\";s:4:\"name\";s:10:\"yoga pants\";s:5:\"price\";d:39;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:5:\"image\";s:14:\"yoga-pants.jpg\";s:3:\"url\";s:10:\"yoga-pants\";}s:10:\"conditions\";a:0:{}}}', '39', '2018-01-15 20:18:58', '2018-01-15 20:18:58'),
(51, 3, 'a:1:{i:20;a:6:{s:2:\"id\";s:2:\"20\";s:4:\"name\";s:10:\"yoga pants\";s:5:\"price\";d:39;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:5:\"image\";s:14:\"yoga-pants.jpg\";s:3:\"url\";s:10:\"yoga-pants\";}s:10:\"conditions\";a:0:{}}}', '39', '2018-01-15 20:19:39', '2018-01-15 20:19:39'),
(52, 3, 'a:1:{i:4;a:6:{s:2:\"id\";s:1:\"4\";s:4:\"name\";s:8:\"yoga-mat\";s:5:\"price\";d:24;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:5:\"image\";s:8:\"mat1.jpg\";s:3:\"url\";s:8:\"yoga-mat\";}s:10:\"conditions\";a:0:{}}}', '24', '2018-01-15 20:22:40', '2018-01-15 20:22:40'),
(53, 3, 'a:1:{i:4;a:6:{s:2:\"id\";s:1:\"4\";s:4:\"name\";s:8:\"yoga-mat\";s:5:\"price\";d:24;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:5:\"image\";s:8:\"mat1.jpg\";s:3:\"url\";s:8:\"yoga-mat\";}s:10:\"conditions\";a:0:{}}}', '24', '2018-01-15 20:29:08', '2018-01-15 20:29:08'),
(54, 3, 'a:1:{i:4;a:6:{s:2:\"id\";s:1:\"4\";s:4:\"name\";s:8:\"yoga-mat\";s:5:\"price\";d:24;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:5:\"image\";s:8:\"mat1.jpg\";s:3:\"url\";s:8:\"yoga-mat\";}s:10:\"conditions\";a:0:{}}}', '24', '2018-01-15 20:31:21', '2018-01-15 20:31:21'),
(55, 3, 'a:1:{i:4;a:6:{s:2:\"id\";s:1:\"4\";s:4:\"name\";s:8:\"yoga-mat\";s:5:\"price\";d:24;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:5:\"image\";s:8:\"mat1.jpg\";s:3:\"url\";s:8:\"yoga-mat\";}s:10:\"conditions\";a:0:{}}}', '24', '2018-01-15 20:32:06', '2018-01-15 20:32:06'),
(56, 3, 'a:1:{i:4;a:6:{s:2:\"id\";s:1:\"4\";s:4:\"name\";s:8:\"yoga-mat\";s:5:\"price\";d:24;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:5:\"image\";s:8:\"mat1.jpg\";s:3:\"url\";s:8:\"yoga-mat\";}s:10:\"conditions\";a:0:{}}}', '24', '2018-01-15 20:33:49', '2018-01-15 20:33:49'),
(57, 3, 'a:1:{i:4;a:6:{s:2:\"id\";s:1:\"4\";s:4:\"name\";s:8:\"yoga-mat\";s:5:\"price\";d:24;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:5:\"image\";s:8:\"mat1.jpg\";s:3:\"url\";s:8:\"yoga-mat\";}s:10:\"conditions\";a:0:{}}}', '24', '2018-01-15 20:34:25', '2018-01-15 20:34:25'),
(58, 3, 'a:1:{i:12;a:6:{s:2:\"id\";s:2:\"12\";s:4:\"name\";s:10:\"swim-pants\";s:5:\"price\";d:38;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:5:\"image\";s:8:\"swim.jpg\";s:3:\"url\";s:10:\"swim-pants\";}s:10:\"conditions\";a:0:{}}}', '38', '2018-01-15 20:36:05', '2018-01-15 20:36:05'),
(59, 3, 'a:1:{i:3;a:6:{s:2:\"id\";s:1:\"3\";s:4:\"name\";s:9:\"sand-ball\";s:5:\"price\";d:32;s:8:\"quantity\";i:2;s:10:\"attributes\";a:2:{s:5:\"image\";s:8:\"ball.jpg\";s:3:\"url\";s:9:\"sand-ball\";}s:10:\"conditions\";a:0:{}}}', '64', '2018-01-15 20:37:42', '2018-01-15 20:37:42'),
(60, 3, 'a:3:{i:4;a:6:{s:2:\"id\";s:1:\"4\";s:4:\"name\";s:8:\"yoga-mat\";s:5:\"price\";d:24;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:5:\"image\";s:8:\"mat1.jpg\";s:3:\"url\";s:8:\"yoga-mat\";}s:10:\"conditions\";a:0:{}}i:3;a:6:{s:2:\"id\";s:1:\"3\";s:4:\"name\";s:9:\"sand-ball\";s:5:\"price\";d:32;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:5:\"image\";s:8:\"ball.jpg\";s:3:\"url\";s:9:\"sand-ball\";}s:10:\"conditions\";a:0:{}}i:23;a:6:{s:2:\"id\";s:2:\"23\";s:4:\"name\";s:10:\"probiotics\";s:5:\"price\";d:18;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:5:\"image\";s:14:\"probiotics.jpg\";s:3:\"url\";s:9:\"probiotic\";}s:10:\"conditions\";a:0:{}}}', '74', '2018-01-15 23:15:01', '2018-01-15 23:15:01');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `categorie_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `article` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `price` decimal(8,0) NOT NULL,
  `rating` int(10) NOT NULL,
  `stock` int(255) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `categorie_id`, `title`, `article`, `image`, `url`, `price`, `rating`, `stock`, `updated_at`, `created_at`) VALUES
(1, 1, 'turmeric', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using', 'turmeric.jpg', 'turmeric', '25', 4, 19, '2017-12-06 15:32:45', '2017-12-06 15:32:45'),
(2, 1, 'protein-shake', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using', 'protein.jpg', 'protein-shake', '35', 5, 14, '2017-12-06 15:34:00', '2017-12-06 15:34:00'),
(3, 2, 'sand-ball', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using', 'ball.jpg', 'sand-ball', '32', 4, 9, '2017-12-06 15:35:14', '2017-12-06 15:35:14'),
(4, 2, 'yoga-mat', 'Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors now use', 'mat1.jpg', 'yoga-mat', '24', 3, 3, '2017-12-06 15:36:53', '2017-12-06 15:36:53'),
(10, 1, 'raw-bar', 'raw bars are healthy snack choice Nullam quis ante etiam sit amet orci eget eros fabus tincidunt duis leo sed fringilla mauris sit amet. donec sodales sagittis magna. Sed consequat leo eget sodales. nullam quis ante etiam sit amet orci eget eros fabus tincidunt duis leo sed. orci eget eros fabus tincidunt duis leo sed fringilla mauris sit amet. amet orci eget eros fabus tincidunt duis leo sed. orci eget eros fabus. duis leo sed fringilla mauris sit amet.', 'bar.jpg', 'raw-bar', '15', 4, 50, '2017-12-21 14:43:29', '2017-12-21 14:43:29'),
(11, 2, 'bowflex-weights', 'interchangable weights Nullam quis ante etiam sit amet orci eget eros fabus tincidunt duis leo sed fringilla mauris sit amet. donec sodales sagittis magna. Sed consequat leo eget sodales. nullam quis ante etiam sit amet orci eget eros fabus tincidunt duis leo sed. orci eget eros fabus tincidunt duis leo sed fringilla mauris sit amet. amet orci eget eros fabus tincidunt duis leo sed. orci eget eros fabus. duis leo sed fringilla mauris sit amet', 'bowflex.jpg', 'bowflex', '70', 5, 4, '2017-12-21 14:44:57', '2017-12-21 14:44:57'),
(12, 3, 'swim-pants', 'high quality,chlorox resistant Nullam quis ante etiam sit amet orci eget eros fabus tincidunt duis leo sed fringilla mauris sit amet. donec sodales sagittis magna. Sed consequat leo eget sodales. nullam quis ante etiam sit amet orci eget eros fabus tincidunt duis leo sed. orci eget eros fabus tincidunt duis leo sed fringilla mauris sit amet. amet orci eget eros fabus tincidunt duis leo sed. orci eget eros fabus. duis leo sed fringilla mauris sit amet', 'swim.jpg', 'swim-pants', '38', 5, 9, '2017-12-30 21:22:33', '2017-12-30 21:22:33'),
(13, 3, 'nike-running-shoe', 'nike running shoe Nullam quis ante etiam sit amet orci eget eros fabus tincidunt duis leo sed fringilla mauris sit amet. donec sodales sagittis magna. Sed consequat leo eget sodales. nullam quis ante etiam sit amet orci eget eros fabus tincidunt duis leo sed. orci eget eros fabus tincidunt duis leo sed fringilla mauris sit amet. amet orci eget eros fabus tincidunt duis leo sed. orci eget eros fabus. duis leo sed fringilla mauris sit amet', 'nike.jpg', 'nike-running', '86', 5, 5, '2017-12-30 21:25:43', '2017-12-30 21:25:43'),
(14, 3, 'cycle-wear', 'cycle wear high quality Nullam quis ante etiam sit amet orci eget eros fabus tincidunt duis leo sed fringilla mauris sit amet. donec sodales sagittis magna. Sed consequat leo eget sodales. nullam quis ante etiam sit amet orci eget eros fabus tincidunt duis leo sed. orci eget eros fabus tincidunt duis leo sed fringilla mauris sit amet. amet orci eget eros fabus tincidunt duis leo sed. orci eget eros fabus. duis leo sed fringilla mauris sit amet', 'cycling.jpg', 'cycle-wear', '120', 3, 6, '2017-12-30 21:27:41', '2017-12-30 21:27:41'),
(15, 1, 'krill oil', 'krill oil untinflamatory Nullam quis ante etiam sit amet orci eget eros fabus tincidunt duis leo sed fringilla mauris sit amet. donec sodales sagittis magna. Sed consequat leo eget sodales. nullam quis ante etiam sit amet orci eget eros fabus tincidunt duis leo sed. orci eget eros fabus tincidunt duis leo sed fringilla mauris sit amet. amet orci eget eros fabus tincidunt duis leo sed. orci eget eros fabus. duis leo sed fringilla mauris sit amet', 'krill.jpg', 'krill-oil', '25', 2, 9, '2017-12-30 23:04:26', '2017-12-30 23:04:26'),
(16, 1, 'spirullina', 'algae natural from hawai Nullam quis ante etiam sit amet orci eget eros fabus tincidunt duis leo sed fringilla mauris sit amet. donec sodales sagittis magna. Sed consequat leo eget sodales. nullam quis ante etiam sit amet orci eget eros fabus tincidunt duis leo sed. orci eget eros fabus tincidunt duis leo sed fringilla mauris sit amet. amet orci eget eros fabus tincidunt duis leo sed. orci eget eros fabus. duis leo sed fringilla mauris sit amet', 'spirullina.jpg', 'spirullina', '20', 3, 12, '2017-12-30 23:05:53', '2017-12-30 23:05:53'),
(17, 2, 'boxing gloves', 'boxing gloves Nullam quis ante etiam sit amet orci eget eros fabus tincidunt duis leo sed fringilla mauris sit amet. donec sodales sagittis magna. Sed consequat leo eget sodales. nullam quis ante etiam sit amet orci eget eros fabus tincidunt duis leo sed. orci eget eros fabus tincidunt duis leo sed fringilla mauris sit amet. amet orci eget eros fabus tincidunt duis leo sed. orci eget eros fabus. duis leo sed fringilla mauris sit amet', 'gloves.jpg', 'boxing-glove', '40', 3, 6, '2017-12-30 23:08:23', '2017-12-30 23:08:23'),
(18, 2, 'rod', 'weight lifting rod Nullam quis ante etiam sit amet orci eget eros fabus tincidunt duis leo sed fringilla mauris sit amet. donec sodales sagittis magna. Sed consequat leo eget sodales. nullam quis ante etiam sit amet orci eget eros fabus tincidunt duis leo sed. orci eget eros fabus tincidunt duis leo sed fringilla mauris sit amet. amet orci eget eros fabus tincidunt duis leo sed. orci eget eros fabus. duis leo sed fringilla mauris sit amet', 'roller.jpg', 'rod-lifting', '86', 4, 18, '2017-12-30 23:09:28', '2017-12-30 23:09:28'),
(19, 2, 'yoga block', 'block for excercize yoga Nullam quis ante etiam sit amet orci eget eros fabus tincidunt duis leo sed fringilla mauris sit amet. donec sodales sagittis magna. Sed consequat leo eget sodales. nullam quis ante etiam sit amet orci eget eros fabus tincidunt duis leo sed. orci eget eros fabus tincidunt duis leo sed fringilla mauris sit amet. amet orci eget eros fabus tincidunt duis leo sed. orci eget eros fabus. duis leo sed fringilla mauris sit amet', 'yoga-block.jpg', 'yoga-block', '18', 4, -2, '2017-12-30 23:13:29', '2017-12-30 23:13:29'),
(20, 3, 'yoga pants', 'tights comfortable Nullam quis ante etiam sit amet orci eget eros fabus tincidunt duis leo sed fringilla mauris sit amet. donec sodales sagittis magna. Sed consequat leo eget sodales. nullam quis ante etiam sit amet orci eget eros fabus tincidunt duis leo sed. orci eget eros fabus tincidunt duis leo sed fringilla mauris sit amet. amet orci eget eros fabus tincidunt duis leo sed. orci eget eros fabus. duis leo sed fringilla mauris sit amet', 'yoga-pants.jpg', 'yoga-pants', '39', 1, -11, '2017-12-30 23:15:48', '2017-12-30 23:15:48'),
(21, 3, 'soccer-shoe', 'top brand soccer shoe Nullam quis ante etiam sit amet orci eget eros fabus tincidunt duis leo sed fringilla mauris sit amet. donec sodales sagittis magna. Sed consequat leo eget sodales. nullam quis ante etiam sit amet orci eget eros fabus tincidunt duis leo sed. orci eget eros fabus tincidunt duis leo sed fringilla mauris sit amet. amet orci eget eros fabus tincidunt duis leo sed. orci eget eros fabus. duis leo sed fringilla mauris sit amet', 'soccer-shoe.jpg', 'soccer-shoe', '104', 2, 9, '2017-12-30 23:35:00', '2017-12-30 23:35:00'),
(22, 3, 'tennis shirt', 'wilson shirt Nullam quis ante etiam sit amet orci eget eros fabus tincidunt duis leo sed fringilla mauris sit amet. donec sodales sagittis magna. Sed consequat leo eget sodales. nullam quis ante etiam sit amet orci eget eros fabus tincidunt duis leo sed. orci eget eros fabus tincidunt duis leo sed fringilla mauris sit amet. amet orci eget eros fabus tincidunt duis leo sed. orci eget eros fabus. duis leo sed fringilla mauris sit amet', 'wilson-shirt.jpg', 'tennis-shirt', '42', 0, 4, '2017-12-30 23:36:17', '2017-12-30 23:36:17'),
(23, 1, 'probiotics', 'probiotics supplements Nullam quis ante etiam sit amet orci eget eros fabus tincidunt duis leo sed fringilla mauris sit amet. donec sodales sagittis magna. Sed consequat leo eget sodales. nullam quis ante etiam sit amet orci eget eros fabus tincidunt duis leo sed. orci eget eros fabus tincidunt duis leo sed fringilla mauris sit amet. amet orci eget eros fabus tincidunt duis leo sed. orci eget eros fabus. duis leo sed fringilla mauris sit amet', 'probiotics.jpg', 'probiotic', '18', 0, 26, '2017-12-30 23:37:45', '2017-12-30 23:37:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `updated_at`, `created_at`) VALUES
(1, '-', '-', '-', '2017-12-07 08:28:17', '2017-12-07 08:28:17'),
(2, '--', '--', '--', '2017-12-07 08:28:41', '2017-12-07 08:28:41'),
(3, 'Admin', 'admin@gmail.com', '$2y$10$8PeZpIcwhmeXkevbfjLDTeHe9hflopYF7O24crJjZ77IQzaZXhc3W', '2017-12-07 08:29:04', '2017-12-07 08:29:04'),
(4, 'Avi Cohen', 'avi@gmail.com', '$2y$10$8PeZpIcwhmeXkevbfjLDTeHe9hflopYF7O24crJjZ77IQzaZXhc3W', '2017-12-09 19:28:54', '2017-12-09 19:28:54'),
(5, 'Shimi Levi', 'shimi@gmail.com', '$2y$10$8PeZpIcwhmeXkevbfjLDTeHe9hflopYF7O24crJjZ77IQzaZXhc3W', '2017-12-09 19:29:59', '2017-12-09 19:29:59'),
(6, 'pop', 'pop@gmail.com', '$2y$10$gjg/zDSUn8zND7v1n0qym.1b0C2nlPRivhbmqRze2fGkJmDMF.N2O', '2017-12-11 12:03:47', '2017-12-11 12:03:47'),
(7, 'bugs bunny', 'bugs@gmail.com', '$2y$10$cULx/7X74uOLC3q/S4XM0ONGj8T5w2h0SIzXijlBSN7ShmaBKzg4q', '2017-12-12 15:11:55', '2017-12-12 15:11:55'),
(8, 'ddd', 'ddd@gmail.com', '$2y$10$wZEw.gjv9FJoGZ08O1q5GO5G2u425Y7D2oQY5wLiSrwo/9KlyH1rK', '2017-12-25 09:07:33', '2017-12-25 09:07:33');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `uid` int(11) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`uid`, `role`) VALUES
(3, 6),
(4, 7),
(5, 7),
(6, 7),
(7, 7),
(8, 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `url` (`url`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `url` (`url`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `url` (`url`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
