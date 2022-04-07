-- phpMyAdmin SQL Dump
-- version 4.9.7deb1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 07, 2022 at 05:52 PM
-- Server version: 8.0.27-0ubuntu0.21.04.1
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `application`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `id` int NOT NULL,
  `DEPTNUM` int NOT NULL,
  `FAMNAME` char(20) DEFAULT NULL,
  `GIVENAME` char(20) DEFAULT NULL,
  `INITIALS` char(10) DEFAULT NULL,
  `TITLE` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`id`, `DEPTNUM`, `FAMNAME`, `GIVENAME`, `INITIALS`, `TITLE`) VALUES
(100, 100, 'Kornreich', 'Jeroen', 'J D', 'AProf'),
(101, 100, 'Yee', 'Mark', 'M D', 'Dr'),
(102, 100, 'Fernandes', 'Russell', 'R T J', 'Mr'),
(103, 100, 'Cohen', 'Richard', 'R R A', 'AProf'),
(104, 100, 'Polemitis', 'Joe', 'J L', 'Miss'),
(105, 100, 'Brower', 'Tony', 'T B', 'AProf'),
(106, 100, 'Royce', 'Mel', 'M P', 'Prof'),
(107, 100, 'Christine', 'Leonardo', 'L T P', 'Mr'),
(108, 100, 'Brandon', 'Chuck', 'C A', 'Dr'),
(109, 101, 'Gustafsson', 'Hakan', 'H O Y', 'Dr'),
(113, 101, 'Sadhal', 'Sharanya', 'S B', 'Dr'),
(114, 101, 'Morley', 'Chris', 'C M T', 'Ms'),
(117, 101, 'Baliga', 'Lance', 'L G C', 'Dr'),
(119, 102, 'Lamkin', 'Bas', 'B M', 'Dr'),
(120, 102, 'Tang', 'Greg', 'G J', 'Mr'),
(121, 102, 'Skelton', 'Robert', 'R R S', 'Mr'),
(123, 102, 'Wyld', 'Mitchell', 'M S', 'Dr'),
(124, 102, 'Haenssgen', 'Francis', 'F A', 'Mr'),
(125, 102, 'Ahlberg', 'Grosek', 'G F', 'Ms'),
(126, 102, 'Bodoh', 'Anne', 'A S', 'Dr'),
(127, 102, 'Hathaway', 'Walley', 'W J', 'Dr');

-- --------------------------------------------------------

--
-- Table structure for table `interest`
--

CREATE TABLE `interest` (
  `FIELDNUM` int NOT NULL,
  `id` int NOT NULL,
  `DESCRIP` char(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `interest`
--

INSERT INTO `interest` (`FIELDNUM`, `id`, `DESCRIP`) VALUES
(292, 100, 'Multiprocessor and Special purpose computer design'),
(293, 100, 'General (HW)'),
(293, 197, 'Computer architecture'),
(293, 365, 'Computer Design'),
(293, 425, 'Parallel Computer Architecture'),
(293, 443, 'Performance Analysis - Reliability and Fault Tolerance'),
(294, 100, 'Control Structures and Microprogramming'),
(295, 130, 'Networks'),
(296, 168, 'Microcode - Numerical Analysis'),
(296, 213, 'TAILORED MICRO-ENGINES - PROGRAMMABLE MICROENGINES'),
(296, 440, 'Microcode - Numerical Analysis'),
(297, 100, 'Arithmetic and Logic Structures'),
(297, 356, NULL),
(297, 357, NULL),
(297, 464, 'Arithmetic and Logic Structures'),
(299, 100, 'Memory Structures'),
(299, 313, 'Memory structures - persistent systems - VM architectures'),
(300, 128, 'Distributed Shared Memory - memory consistency.'),
(300, 213, 'VIRTUAL MEMORY ADDRESSING SCHEMES'),
(301, 128, 'Performance of memory systems for DSM.'),
(301, 249, 'Hardware Description Languages - VHDL - Parallel Simulation'),
(302, 209, 'Disc Drive Systems and Interfaces'),
(303, 119, 'Multistage and Multiple Bus interconnection networks'),
(303, 128, 'Multiprocessor interconnection networks - design - evaluation.'),
(303, 130, 'Performance'),
(303, 287, 'Optical interconnection networks'),
(304, 130, 'Interconnections'),
(305, 100, 'Register Transfer Level Implementation'),
(306, 100, 'Logic Design'),
(306, 302, NULL),
(306, 356, NULL),
(306, 357, NULL),
(306, 464, 'Logic Design'),
(307, 100, 'Integrated Circuits'),
(307, 356, NULL),
(307, 357, NULL),
(307, 464, 'Integrated Circuits'),
(311, 100, 'dfdscsd'),
(312, 100, 'dfdscsd'),
(315, 100, 'dfdscsd');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(12, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(13, '2014_10_12_000000_create_users_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 2, 'my-app-token', '528347852f18b3b9cad8701aa88e1dea9b1d1bac683b4fa1d53a054360a03aed', '[\"*\"]', NULL, '2022-04-04 17:17:34', '2022-04-04 17:17:34'),
(2, 'App\\Models\\User', 2, 'my-app-token', 'db2678ef4f454e50081d4a87324aa18ec9c9cdd062b09730dc19009ed3a91f69', '[\"*\"]', NULL, '2022-04-04 16:45:43', '2022-04-04 16:45:43'),
(3, 'App\\Models\\User', 2, 'my-app-token', 'b9202af76b256abd4b005827917665e23af4a81a96c3be9847bb27e146edd2a4', '[\"*\"]', NULL, '2022-04-04 16:45:50', '2022-04-04 16:45:50'),
(4, 'App\\Models\\User', 2, 'my-app-token', '216a23d3813ce8da6dbe8f10c4042ac0ad5e5b7eb7b3523b962880ee07fddbf5', '[\"*\"]', NULL, '2022-04-04 16:54:32', '2022-04-04 16:54:32'),
(5, 'App\\Models\\User', 2, 'my-app-token', '67f46d58aba353027be578ac1016764b6468664413a2fdecb83733b42b3f45fc', '[\"*\"]', NULL, '2022-04-06 18:51:18', '2022-04-06 18:51:18');

-- --------------------------------------------------------

--
-- Table structure for table `seeders`
--

CREATE TABLE `seeders` (
  `id` int NOT NULL,
  `LastName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `FirstName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `seeders`
--

INSERT INTO `seeders` (`id`, `LastName`, `FirstName`, `email`) VALUES
(1, 'adkyUXc', 'a54E4L0KGR', 'bJEF8jaDAq@gmail.com'),
(2, 'aflJarzkuj', 'y2EYV8h6kZ', 'noa7lO5LQk@gmail.com'),
(3, 'abeRvRpQFj', 'PG2GHUj3aY', 'O8SNGzWkDz@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `DEPTNUM` int NOT NULL,
  `DESCRIP` char(10) DEFAULT NULL,
  `INSTNAME` char(80) DEFAULT NULL,
  `DEPTNAME` char(80) DEFAULT NULL,
  `STATE` char(4) DEFAULT NULL,
  `POSTCODE` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`DEPTNUM`, `DESCRIP`, `INSTNAME`, `DEPTNAME`, `STATE`, `POSTCODE`) VALUES
(100, 'GU CIT', 'Griffith University', 'School of Computing and Information Technology', 'Qld', 4111),
(101, 'JCU CS', 'James Cook University of North Queensland', 'Computer Science', 'Qld', 4811),
(102, 'LTU CSCE', 'La Trobe University', 'Computer Science and Computer Engineering', 'VIC', 3083),
(104, 'MQU RCASE', 'Macquarie University', 'JRCASE', 'NSW', 2109),
(105, 'MNU CS', 'Monash University (Clayton)', 'Computer Science', 'Vic', 3168),
(106, 'MRU CS', 'Murdoch University', 'Computer Science', 'WA', 6150),
(107, 'NUS ISCS', 'National University of Singapore', 'Information Systems and Computer Science', '', 0),
(108, 'QUT CS', 'Queensland University of Technology', 'Computing Science', 'QLD', 4000),
(109, 'SUT IT', 'Swinburne University of Technology', 'School of Information Technology', 'Vic', 3122),
(110, 'ANU CSL', 'Australian National University', 'Computer Science Laboratory', 'ACT', 200),
(666, 'IS dff', 'fd', 'dfd', 'dfdf', 33),
(874, 'IS cvwedf', 'dfg', 'dfg', 'sdf', 10),
(999, 'IS osdcsd', 'sd', 'ferdf', 'sdfe', 45);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'John Doe', 'john@doe.com', NULL, '$2y$10$Zj51iGYSUh4M6Tqs0lgYyO/W4Edgywd6FYYfuxeDuqMbt8897C8u6', NULL, NULL, NULL),
(2, 'John Doe', 'anilsidhu@doe.com', NULL, '$2y$10$FjKUtIj2xnsbCo4MSgKlp./1f80l9IiolFAKc/vtgXMPTZXj2.0By', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `seeders`
--
ALTER TABLE `seeders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`DEPTNUM`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `seeders`
--
ALTER TABLE `seeders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
