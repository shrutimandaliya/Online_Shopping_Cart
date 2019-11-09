-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2018 at 10:18 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: ` kcampusdrive`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(10) NOT NULL,
  `state_id` int(10) DEFAULT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `state_id`, `name`) VALUES
(1, 1, 'Ahmedabad'),
(2, 1, 'Surat'),
(3, 1, 'Vadodara	'),
(4, 1, 'Rajkot'),
(5, 1, 'Bhavnagar'),
(6, 1, 'Jamnagar'),
(7, 1, 'Junagadh'),
(8, 1, 'Anand'),
(9, 1, 'Navsari'),
(10, 1, 'Surendranagar'),
(11, 1, 'Morbi');

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `short_name` varchar(50) DEFAULT NULL,
  `type` enum('tech','mang') NOT NULL DEFAULT 'tech',
  `address` text,
  `authority` varchar(75) DEFAULT NULL,
  `contact_person` varchar(155) DEFAULT NULL,
  `phoneno` int(11) DEFAULT NULL,
  `emailid` varchar(155) DEFAULT NULL,
  `pincode` int(11) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `configuration`
--

CREATE TABLE `configuration` (
  `conf_id` int(11) NOT NULL,
  `conf_name` varchar(100) NOT NULL,
  `conf_value` text NOT NULL,
  `status` enum('Y','N') NOT NULL DEFAULT 'Y',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `configuration`
--

INSERT INTO `configuration` (`conf_id`, `conf_name`, `conf_value`, `status`, `created_at`, `updated_at`) VALUES
(1, 'footer', '2018 © All rights reserved.', 'Y', NULL, '2018-09-19 10:38:32'),
(2, 'site_name', 'Kaushalam KPI', 'Y', NULL, '2018-09-19 10:38:32'),
(3, 'site_url', 'http://10.0.10.52/iWebSquareKRAKPI/', 'Y', NULL, '2018-09-19 10:38:32'),
(4, 'smtp_host', 'smtp.gmail.com', 'Y', NULL, '2018-08-27 06:41:33'),
(5, 'smtp_port', '587', 'Y', NULL, '2018-08-27 06:41:33'),
(6, 'smtp_from_name', 'Kaushalam KPI', 'Y', NULL, '2018-08-27 06:41:33'),
(7, 'smtp_driver', 'smtp', 'Y', NULL, '2018-08-27 06:41:33'),
(8, 'smtp_encryption', 'tls', 'Y', NULL, '2018-08-27 06:41:33'),
(9, 'smtp_username', 'kaushalamkpi@gmail.com', 'Y', NULL, '2018-08-27 06:41:33'),
(10, 'smtp_password', 'test@7600', 'Y', NULL, '2018-08-27 06:41:33'),
(11, 'store_name', 'EXL Service', 'Y', NULL, '2018-05-14 06:31:05'),
(12, 'store_shortname', 'EXL Service', 'Y', NULL, '2018-05-14 06:31:05'),
(13, 'placeholder_image', 'https://www.exlservice.com/resources/assets/front/images/no-image.jpg', 'Y', '2018-04-09 18:59:47', '2018-04-09 18:59:45'),
(14, 'email', 'nancybrownus8@gmail.com', 'Y', '2018-04-13 00:00:01', '2018-06-14 05:59:35'),
(15, 'TWITT_CONSUMER_KEY', '3RSrbGlL5Di8FXYasdHBE2Qi9', 'Y', NULL, '2018-04-19 09:31:23'),
(16, 'TWITT_CONSUMER_SECRET', 'eMjZc3AFLJjLBQheWhN9ff5WFQeUJZdd9E4s1XpqbWVszx2e6l', 'Y', NULL, '2018-04-19 09:31:23'),
(17, 'TWITT_ACCESS_TOKEN', '1111320127-MjmXZJLqGV9UFVPxsgL0qbI5832gDFsu9swvF6d', 'Y', NULL, '2018-04-19 09:31:23'),
(18, 'TWITT_ACCESS_TOKEN_SECRET', 'YWDEyFk7Iu9q9sSevqQBKponfOS6h9aNhxxmS9IoxCYw8', 'Y', NULL, '2018-04-19 09:31:23'),
(20, 'facebook_link', 'https://www.facebook.com/ExlService/', 'Y', NULL, '2018-05-10 13:53:26'),
(23, 'hapikey', '04cf378a-14a0-4981-b174-c0ae06a166f7', 'Y', NULL, '2018-04-20 05:01:57'),
(24, 'main_menu', '118,458,459,464,465', 'Y', NULL, '2018-05-01 13:17:46'),
(25, 'linkedin_link', 'https://in.linkedin.com/company/exl-service', 'Y', NULL, '2018-05-10 13:53:26'),
(26, 'twitter_link', 'https://twitter.com/exl_service', 'Y', NULL, NULL),
(27, 'mainmenu1', '<div class=\"dropdown-menu submenu-wrapper\">\r\n    <div class=\"submenu-links p-25\">\r\n        <div class=\"row\">\r\n            <div class=\"col-12 col-lg-6\">\r\n                <ul>\r\n                    <li><a href=\"BASE_URL/digital-intelligence\" title=\"Digital Intelligence\">Digital Intelligence</a></li>\r\n                    <li><a href=\"BASE_URL/customer-experience\" title=\"Customer Experience\">Customer Experience</a></li>\r\n                    <li><a href=\"BASE_URL/artificial-intelligence\" title=\"Artificial Intelligence\">Artificial Intelligence</a></li>\r\n                </ul>\r\n            </div>\r\n            <div class=\"col-12 col-lg-6\">\r\n                <ul>\r\n                    <li><a href=\"BASE_URL/analytics-intelligence\" title=\"Analytics\">Analytics</a></li>\r\n                    <li><a href=\"BASE_URL/advanced-technologies\" title=\"Advanced Technologies\">Advanced Technologies</a></li>\r\n                    <li><a href=\"BASE_URL/digital-products\" title=\"Digital Products\">Digital Products</a></li>\r\n                </ul>\r\n            </div>\r\n        </div>\r\n    </div>\r\n    <div class=\"bg-secondary text-white submenu-content d-none d-sm-none d-md-none d-lg-block p-25\">\r\n        <div class=\"row\">\r\n            <div class=\"col-md-6\">\r\n                <h6>INDUSTRIES</h6>\r\n                <ul class=\"p-t-5\">\r\n                    <li><a href=\"BASE_URL/banking-financial-services\" title=\"Banking & Financial Services\">Banking &amp; Financial Services</a></li>\r\n                    <li><a href=\"BASE_URL/healthcare\" title=\"Healthcare\">Healthcare</a></li>\r\n                    <li><a href=\"BASE_URL/insurance\" title=\"Insurance\">Insurance</a></li>\r\n                    <li><a href=\"BASE_URL/transportation-logistics\" title=\"Transportation & Logistics\">Transportation &amp; Logistics</a></li>\r\n                    <li><a href=\"BASE_URL/travel-leisure\" title=\"Travel & Leisure\">Travel &amp; Leisure</a></li>\r\n                    <li><a href=\"BASE_URL/utilities\" title=\"Utilities\">Utilities</a></li>\r\n                </ul>\r\n            </div>\r\n            <div class=\"col-md-6\">\r\n                <div class=\"row\">\r\n                    <div class=\"col-sm-12 m-b-15\"> <img src=\"BASE_URL/resources/assets/front/images/how_real-time_data_and_analytics_drive_customer_retention.jpg\" alt=\"Thought Leadership Titile\" title=\"Thought Leadership Titile\" /> </div>\r\n                    <div class=\"col-sm-12\">\r\n                        <h6>Thought Leadership</h6>\r\n                        <p class=\"m-b-0\">How digital technology transforms the sales process <a href=\"BASE_URL/leveraging-digital-transformation-to-find-new-revenue--more-profitability\" title=\"Read paper\">Read paper</a></p>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n        </div>\r\n    </div>\r\n</div>', 'Y', NULL, '2018-05-11 12:24:47'),
(28, 'mainmenu2', '<div class=\"dropdown-menu submenu-wrapper\">\r\n    <div class=\"submenu-links p-25\">\r\n        <ul>\r\n            <li><a href=\"BASE_URL/banking-financial-services\" title=\"Banking & Financial Services\">Banking &amp; Financial Services</a></li>\r\n            <li><a href=\"BASE_URL/healthcare\" title=\"Healthcare\">Healthcare</a></li>\r\n            <li><a href=\"BASE_URL/insurance\" title=\"Insurance\">Insurance</a></li>\r\n            <li><a href=\"BASE_URL/transportation-logistics\" title=\"Transportation & Logistics\">Transportation &amp; Logistics</a></li>\r\n            <li><a href=\"BASE_URL/travel-leisure\" title=\"Travel & Leisure\">Travel &amp; Leisure</a></li>\r\n            <li><a href=\"BASE_URL/utilities\" title=\"Utilities\">Utilities</a></li>\r\n        </ul>\r\n    </div>\r\n    <div class=\"bg-secondary text-white submenu-content d-none d-sm-none d-md-none d-lg-block p-20\">\r\n        <div class=\"row\">\r\n            <div class=\"col-sm-6\"> <img src=\"BASE_URL/resources/assets/front/images/industry-img.jpg\" alt=\"LEARN. Experience. Develop\" title=\"LEARN. Experience. Develop\" /> </div>\r\n            <div class=\"col-sm-6 p-l-0\">\r\n                <h6>Innovate. Collaborate. Develop.</h6>\r\n                <p>Visit an EXL digital lab today.</p>\r\n                <a href=\"BASE_URL/contact-us\" title=\"Schedule your visit\">Get in Touch</a> </div>\r\n        </div>\r\n    </div>\r\n</div>', 'Y', NULL, '2018-05-11 12:26:10'),
(29, 'mainmenu3', '<div class=\"dropdown-menu submenu-wrapper\">\r\n  <div class=\"submenu-links p-25\">\r\n  <div class=\"row\">\r\n  <div class=\"col flex-basis-auto\">\r\n  <ul>\r\n    <li class=\"has-sub-submenu\">\r\n    <h6><strong>Digital</strong><span class=\"arrow-wrapper d-inline-block d-lg-none d-xl-none\"><i class=\"fa fa-angle-down\"></i></span></h6>\r\n\r\n    <ul>\r\n      <li><a href=\"BASE_URL/digital\" title=\"Overview\">Overview</a></li>\r\n      <li><a href=\"BASE_URL/digital-exlerator-framework\" title=\"Digital EXLerator Framework\">Digital EXLerator Framework</a></li>\r\n      <li><a href=\"BASE_URL/solution-suite\" title=\"Solution Center\">Solution Suite</a></li>\r\n      <li><a href=\"BASE_URL/digital-transformation-platform\" title=\"Platform\">Platform</a></li>\r\n      <li><a href=\"BASE_URL/digital-products-overview\" title=\"Products\">Products</a></li>\r\n    </ul>\r\n    </li>\r\n  </ul>\r\n  </div>\r\n\r\n  <div class=\"col flex-basis-auto\">\r\n  <ul>\r\n    <li class=\"has-sub-submenu\">\r\n    <h6><strong>Data</strong><span class=\"arrow-wrapper d-inline-block d-lg-none d-xl-none\"><i class=\"fa fa-angle-down\"></i></span></h6>\r\n\r\n    <ul>\r\n      <li><a href=\"BASE_URL/data-capabilities\" title=\"Data Overview\">Overview</a></li>\r\n      <li><a href=\"BASE_URL/data-strategy\" title=\"Data Strategy\">Data Strategy</a></li>\r\n      <li><a href=\"BASE_URL/data-architecture\" title=\"Data Architecture\">Data Architecture</a></li>\r\n      <li><a href=\"BASE_URL/master-data-management\" title=\"Master Data Management\">Master Data Management</a></li>\r\n      <li><a href=\"BASE_URL/data-enrichment\" title=\"Data Enrichment\">Data Enrichment</a></li>\r\n      <li><a href=\"BASE_URL/data-governance\" title=\"Data Governance\">Data Governance</a></li>\r\n      <li><a href=\"BASE_URL/cloud-bi-solutions\" title=\"Cloud BI Solutions\">Cloud BI Solutions</a></li>\r\n    </ul>\r\n    </li>\r\n  </ul>\r\n  </div>\r\n\r\n  <div class=\"col flex-basis-auto\">\r\n  <ul>\r\n    <li class=\"has-sub-submenu\">\r\n    <h6>Analytics<span class=\"arrow-wrapper d-inline-block d-lg-none d-xl-none\"><i class=\"fa fa-angle-down\"></i></span></h6>\r\n\r\n    <ul>\r\n      <li><a href=\"BASE_URL/analytics\" title=\"Overview\">Overview</a></li>\r\n      <li><a href=\"BASE_URL/analytics-marketing\" title=\"Marketing\">Marketing</a></li>\r\n      <li><a href=\"BASE_URL/customer-analytics\" title=\"Customer\">Customer</a></li>\r\n      <li><a href=\"BASE_URL/risk-compliance\" title=\"Risk and Compliance\">Risk and Compliance</a></li>\r\n      <li><a href=\"BASE_URL/operations-analytics\" title=\"Operations\">Operations</a></li>\r\n      <li><a href=\"BASE_URL/nextgen-capabilities\" title=\"NextGen Capabilities\">NextGen Capabilities</a></li>\r\n    </ul>\r\n    </li>\r\n  </ul>\r\n  </div>\r\n\r\n  <div class=\"col flex-basis-auto\">\r\n  <ul>\r\n    <li class=\"has-sub-submenu\">\r\n    <h6>Consulting<span class=\"arrow-wrapper d-inline-block d-lg-none d-xl-none\"><i class=\"fa fa-angle-down\"></i></span></h6>\r\n\r\n    <ul>\r\n      <li><a href=\"BASE_URL/consulting\" title=\"Overview\">Overview</a></li>\r\n      <li><a href=\"BASE_URL/finance-transformation\" title=\"Finance Transformation\">Finance Transformation</a></li>\r\n      <li><a href=\"BASE_URL/risk-transformation\" title=\"Risk Transformation\">Risk Transformation</a></li>\r\n      <li><a href=\"BASE_URL/compliance-transformation\" title=\"Compliance Transformation\">Compliance Transformation</a></li>\r\n      <li><a href=\"BASE_URL/digital-transformation\" title=\"Digital Transformation\">Digital Transformation</a></li>\r\n      <li><a href=\"BASE_URL/nextgen-operations\" title=\"NextGen Operations\">NextGen Operations</a></li>\r\n    </ul>\r\n    </li>\r\n  </ul>\r\n  </div>\r\n\r\n  <div class=\"col flex-basis-auto\">\r\n  <ul>\r\n    <li class=\"has-sub-submenu\">\r\n    <h6>Operations Management<span class=\"arrow-wrapper d-inline-block d-lg-none d-xl-none\"><i class=\"fa fa-angle-down\"></i></span></h6>\r\n\r\n    <ul class=\"m-b-30\">\r\n      <li><a href=\"BASE_URL/operations-management\" title=\"Overview\">Overview</a></li>\r\n      <li><a href=\"BASE_URL/banking-financial-services-operations-management\" title=\"Banking &amp; Financial Services\">Banking &amp; Financial Services</a></li>\r\n      <li><a href=\"BASE_URL/healthcare-operations-management\" title=\"Healthcare\">Healthcare</a></li>\r\n      <li><a href=\"BASE_URL/insurance-operations-management\" title=\"Insurance\">Insurance</a></li>\r\n      <li><a href=\"BASE_URL/transportation-logistics-operations-management\" title=\"Transportation &amp; Logistics\">Transportation &amp; Logistics</a></li>\r\n      <li><a href=\"BASE_URL/travel-leisure-operations-management\" title=\"Travel &amp; Luisure\">Travel &amp; Leisure</a></li>\r\n      <li><a href=\"BASE_URL/utilities\" title=\"Utilities\">Utilities</a></li>\r\n    </ul>\r\n    </li>\r\n  </ul>\r\n  </div>\r\n\r\n  <div class=\"col flex-basis-auto\">\r\n  <ul>\r\n    <li class=\"has-sub-submenu\">\r\n    <h6>Finance &amp; Accounting<span class=\"arrow-wrapper d-inline-block d-lg-none d-xl-none\"><i class=\"fa fa-angle-down\"></i></span></h6>\r\n\r\n    <ul>\r\n      <li><a href=\"BASE_URL/finance-accounting\" title=\"Overview\">Overview</a></li>\r\n      <li><a href=\"BASE_URL/finance-transformation\" title=\"Finance Transformation\">Finance Transformation</a></li>\r\n      <li><a href=\"BASE_URL/technical-accounting\" title=\"Technical Accounting\">Technical Accounting</a></li>\r\n      <li><a href=\"BASE_URL/corporate-accounting\" title=\"Corporate Accounting\">Corporate Accounting</a></li>\r\n    </ul>\r\n    </li>\r\n  </ul>\r\n  </div>\r\n  </div>\r\n  </div>\r\n\r\n  <div class=\"bg-secondary text-white submenu-content d-none d-sm-none d-md-none d-lg-block p-25\">\r\n  <div class=\"row\">\r\n  <div class=\"col-md-3\">\r\n  <div class=\"row\">\r\n  <div class=\"col-sm-12 m-b-15\"><img alt=\"Unlock the full value of cutting edge analytics by moving from Big Data to Right Data.\" src=\"BASE_URL/resources/assets/front/images/how_predictive_analytics_is_disrupting_the_travel_industry.jpg\" title=\"Unlock the full value of cutting edge analytics by moving from Big Data to Right Data.\" /></div>\r\n\r\n  <div class=\"col-sm-12\">\r\n  <h6>Thought Leadership</h6>\r\n\r\n  <p class=\"m-b-0\">Unlock the full value of cutting edge analytics by moving from Big Data to Right Data. <a href=\"BASE_URL/big-problems-with-big-data-the-case-for-right-data-vs-big-data\" title=\"Read paper\">Read paper</a></p>\r\n  </div>\r\n  </div>\r\n  </div>\r\n\r\n  <div class=\"col-md-3\">\r\n  <div class=\"row\">\r\n  <div class=\"col-sm-12 m-b-15\"><img alt=\"Insurers must adapt as pillars of the industry face disruption.\" src=\"BASE_URL/resources/assets/front/images/gdpr_and_its_impact_on_insurance_companies.jpg\" title=\"Insurers must adapt as pillars of the industry face disruption.\" /></div>\r\n\r\n  <div class=\"col-sm-12\">\r\n  <h6>Thought Leadership</h6>\r\n\r\n  <p class=\"m-b-0\">Insurers must adapt as pillars of the industry face disruption. <a href=\"BASE_URL/five-levels-of-digital-disruption-in-insurance\" title=\"Read paper\">Read paper</a></p>\r\n  </div>\r\n  </div>\r\n  </div>\r\n\r\n  <div class=\"col-md-3\">\r\n  <div class=\"row\">\r\n  <div class=\"col-sm-12 m-b-15\"><img alt=\"AI and machine learning are the next major evolution for CFOs.\" src=\"BASE_URL/resources/assets/front/images/blockchain_the_next_big_digital_disruptor_for_cfos.jpg\" title=\"AI and machine learning are the next major evolution for CFOs.\" /></div>\r\n\r\n  <div class=\"col-sm-12\">\r\n  <h6>Thought Leadership</h6>\r\n\r\n  <p class=\"m-b-0\">AI and machine learning are the next major evolution for CFOs. <a href=\"BASE_URL/rise-of-machines-artificial-intelligence-and-machine-learning-for-digital-cfos\" title=\"Read Paper\">Read Paper</a></p>\r\n  </div>\r\n  </div>\r\n  </div>\r\n\r\n  <div class=\"col-md-3\">\r\n  <h6>INDUSTRIES</h6>\r\n\r\n  <ul class=\"p-t-5\">\r\n    <li><a href=\"BASE_URL/banking-financial-services\" title=\"Banking &amp; Financial Services\">Banking &amp; Financial Services</a></li>\r\n    <li><a href=\"BASE_URL/healthcare\" title=\"Healthcare\">Healthcare</a></li>\r\n    <li><a href=\"BASE_URL/insurance\" title=\"Insurance\">Insurance</a></li>\r\n    <li><a href=\"BASE_URL/transportation-logistics\" title=\"Transportation &amp; Logistics\">Transportation &amp; Logistics</a></li>\r\n    <li><a href=\"BASE_URL/travel-leisure\" title=\"Travel &amp; Leisure\">Travel &amp; Leisure</a></li>\r\n    <li><a href=\"BASE_URL/utilities\" title=\"Utilities\">Utilities</a></li>\r\n  </ul>\r\n  </div>\r\n  </div>\r\n  </div>\r\n  </div>', 'Y', NULL, '2018-05-11 12:59:44'),
(30, 'mainmenu4', '<div class=\"dropdown-menu submenu-wrapper\">\r\n    <div class=\"submenu-links p-25\">\r\n        <ul>\r\n            <li><a href=\"BASE_URL/about-exl\" title=\"Overview\">Overview</a></li>\r\n            <li><a href=\"BASE_URL/board-of-directors\" title=\"Board Of Directors\">Board of Directors</a></li>\r\n            <li><a href=\"BASE_URL/global-leadership\" title=\"Leadership\">Leadership</a></li>\r\n            <li><a href=\"BASE_URL/diversity-and-inclusion\" title=\"Inclusion & Diversity\">Inclusion &amp; Diversity</a></li>\r\n            <li><a href=\"BASE_URL/global-responsibility\" title=\"Global Responsibility\">Global Responsibility</a></li>\r\n            <li><a href=\"http://ir.exlservice.com/\" title=\"Investors\">Investors</a></li>\r\n            <li><a href=\"BASE_URL/partners-alliances\" title=\"Partnerships\">Partnerships</a></li>\r\n            <li><a href=\"BASE_URL/news/list\" title=\"Newsroom\">Newsroom</a></li>\r\n            <li><a href=\"BASE_URL/locations\" title=\"Locations\">Locations</a></li>\r\n        </ul>\r\n    </div>\r\n    <div class=\"bg-secondary text-white submenu-content d-none d-sm-none d-md-none d-lg-block p-20\">\r\n        <div class=\"row\">\r\n            <div class=\"col-sm-6\"> <img src=\"BASE_URL/resources/assets/front/images/industry-img.jpg\" alt=\"LEARN. Experience. Develop\" title=\"LEARN. Experience. Develop\" /> </div>\r\n            <div class=\"col-sm-6 p-l-0\">\r\n                <h6>Thought Leadership</h6>\r\n                <p>AI and machine learning are the next major evolution for CFOs.</p>\r\n                <a href=\"BASE_URL/rise-of-machines-artificial-intelligence-and-machine-learning-for-digital-cfos\" title=\"Read Paper\">Read Paper</a>\r\n            </div>\r\n        </div>\r\n    </div>\r\n</div>', 'Y', NULL, NULL),
(32, 'RECAPTCHA_SITE_KEY', '6LcwhUkUAAAAAJ5ZNEuO5sAcS2bJKUuaMdnktatw', 'Y', NULL, NULL),
(33, 'RECAPTCHA_SECRET_KEY', '6LcwhUkUAAAAAL-DCFEh-s3bqRytyjRsMohZ62dC', 'Y', NULL, NULL),
(34, 'site_title', 'Kaushalam KPI', 'Y', NULL, '2018-09-19 10:38:32'),
(35, 'dateformat', 'M d, Y h:i:s', 'Y', NULL, '2018-09-19 10:38:32');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_id` int(11) UNSIGNED NOT NULL,
  `dept_name` varchar(196) NOT NULL,
  `dept_desc` varchar(196) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `dept_name`, `dept_desc`, `updated_at`, `created_at`) VALUES
(1, 'php', 'php', '2018-08-27 06:40:52', '2018-08-28 17:24:03'),
(3, '.net', '.net', '2018-08-27 06:41:32', '2018-08-17 12:33:27'),
(6, 'edasda', NULL, '2018-09-04 10:11:51', '2018-08-23 09:03:05'),
(8, 'Project', 'sd\r\nsd\r\nsd\r\nsd\r\nsd', '2018-09-11 08:21:14', '2018-09-11 08:21:14');

-- --------------------------------------------------------

--
-- Table structure for table `permission`
--

CREATE TABLE `permission` (
  `permission_id` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `display_name` varchar(255) NOT NULL,
  `module_name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `question_lib`
--

CREATE TABLE `question_lib` (
  `id` int(50) NOT NULL,
  `department` int(11) NOT NULL,
  `question` text NOT NULL,
  `type` enum('tech','apti') NOT NULL DEFAULT 'tech',
  `description` text,
  `optiona` varchar(250) NOT NULL,
  `optionb` varchar(250) NOT NULL,
  `optionc` varchar(250) NOT NULL,
  `optiond` varchar(250) NOT NULL,
  `answer` varchar(250) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `question_template`
--

CREATE TABLE `question_template` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `department` int(11) NOT NULL,
  `tech_queslib_id` text NOT NULL,
  `apti_queslib_id` text NOT NULL,
  `status` enum('Y','N','T') NOT NULL DEFAULT 'Y',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(100) NOT NULL,
  `role_description` text,
  `status` enum('Y','N','T') NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_name`, `role_description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', NULL, 'Y', '2018-08-16 09:12:18', '2018-08-16 09:12:18');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state_id` int(11) NOT NULL,
  `country` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `country`, `name`) VALUES
(1, 'india', 'Gujrat');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `uuid` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `profile` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) UNSIGNED DEFAULT NULL,
  `forgot_password_bool` enum('Y','N') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `forgot_password_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `forgot_password_time` datetime DEFAULT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department` int(11) UNSIGNED DEFAULT NULL,
  `status` enum('Y','N','T') COLLATE utf8mb4_unicode_ci DEFAULT 'N',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uuid`, `name`, `username`, `first_name`, `last_name`, `email`, `password`, `role_id`, `profile`, `parent_id`, `forgot_password_bool`, `forgot_password_token`, `forgot_password_time`, `remember_token`, `department`, `status`, `created_at`, `updated_at`) VALUES
(1, '', 'admin', 'admin', 'Super', 'admin', 'admin@gmail.com', '$2y$10$WhMpDK0XByNEM7OfYyYg5Oc33VC5j1teHtKUcqUYdy1Rb3GQXItVq', 1, 'http://10.0.10.52/iWebSquareKRAKPI/resources/assets/userprofile/1/profile.png', NULL, 'Y', 'MUtLRUNQN3BhWExSM2RhVjBoRTNUZz09', '2018-09-12 13:39:58', 'zXcppwU9jf1f3s8hJobeANIH864DBa4Admyhi4EEnE5LlBLmc6xVroC0Aatu', 6, 'Y', '2018-02-07 13:00:00', '2018-09-14 03:47:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `configuration`
--
ALTER TABLE `configuration`
  ADD PRIMARY KEY (`conf_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_id`),
  ADD UNIQUE KEY `dept_id_UNIQUE` (`dept_id`);

--
-- Indexes for table `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`permission_id`);

--
-- Indexes for table `question_lib`
--
ALTER TABLE `question_lib`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question_template`
--
ALTER TABLE `question_template`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `dept_Foriegn` (`department`,`parent_id`,`role_id`,`email`(191),`username`,`uuid`),
  ADD KEY `FK_RoleUser_idx` (`role_id`),
  ADD KEY `FK_ParentUser_idx` (`parent_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `configuration`
--
ALTER TABLE `configuration`
  MODIFY `conf_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dept_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `permission`
--
ALTER TABLE `permission`
  MODIFY `permission_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `question_lib`
--
ALTER TABLE `question_lib`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `question_template`
--
ALTER TABLE `question_template`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FK_DepartmentUser` FOREIGN KEY (`department`) REFERENCES `department` (`dept_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_RoleUser` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
