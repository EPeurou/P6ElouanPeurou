-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 02, 2022 at 03:42 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `p6bdd`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `trick_id` int(11) DEFAULT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `creation_date` datetime DEFAULT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `trick_id`, `content`, `creation_date`, `author`) VALUES
(53, 138, 'super!!', '2022-03-02 15:56:30', 'elouan'),
(54, 140, 'WOW', '2022-03-02 16:05:50', 'elouan');

-- --------------------------------------------------------

--
-- Table structure for table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20211020092135', '2021-10-20 09:31:37', 19),
('DoctrineMigrations\\Version20211027085813', '2021-10-27 09:00:43', 343),
('DoctrineMigrations\\Version20211102162106', '2021-11-02 16:21:58', 123),
('DoctrineMigrations\\Version20211117081627', '2021-11-17 08:16:48', 88),
('DoctrineMigrations\\Version20211117082927', '2021-11-17 08:41:22', 109),
('DoctrineMigrations\\Version20211117083642', '2021-11-17 08:41:22', 4),
('DoctrineMigrations\\Version20211117095439', '2021-11-17 09:54:45', 99),
('DoctrineMigrations\\Version20211124105816', '2021-11-24 10:58:27', 381),
('DoctrineMigrations\\Version20211125074332', '2021-11-25 07:43:46', 186),
('DoctrineMigrations\\Version20211201132112', '2021-12-01 13:21:24', 99),
('DoctrineMigrations\\Version20211201132424', '2021-12-01 13:24:33', 97),
('DoctrineMigrations\\Version20211208094114', '2021-12-08 09:41:28', 104),
('DoctrineMigrations\\Version20211208154724', '2021-12-08 15:47:34', 186),
('DoctrineMigrations\\Version20211209090001', '2021-12-09 09:00:14', 121),
('DoctrineMigrations\\Version20211209100343', '2021-12-09 10:03:52', 146),
('DoctrineMigrations\\Version20211209100507', '2021-12-09 10:05:15', 143),
('DoctrineMigrations\\Version20211209100551', '2021-12-09 10:05:56', 129),
('DoctrineMigrations\\Version20211222161850', '2021-12-22 16:19:03', 141),
('DoctrineMigrations\\Version20220101151520', '2022-01-01 16:22:44', 66),
('DoctrineMigrations\\Version20220101162226', '2022-01-01 16:22:44', 33),
('DoctrineMigrations\\Version20220101162926', '2022-01-01 16:29:36', 67),
('DoctrineMigrations\\Version20220101163014', '2022-01-01 16:30:21', 67),
('DoctrineMigrations\\Version20220112080040', '2022-01-12 08:00:50', 151),
('DoctrineMigrations\\Version20220112100737', '2022-01-12 10:07:45', 138),
('DoctrineMigrations\\Version20220112130651', '2022-01-12 13:07:01', 91),
('DoctrineMigrations\\Version20220112150930', '2022-01-12 15:09:35', 100),
('DoctrineMigrations\\Version20220119082242', '2022-01-19 08:23:01', 201),
('DoctrineMigrations\\Version20220119084129', '2022-01-19 08:41:36', 195),
('DoctrineMigrations\\Version20220119084239', '2022-01-19 08:42:44', 176),
('DoctrineMigrations\\Version20220119100907', '2022-01-19 10:09:12', 173),
('DoctrineMigrations\\Version20220119125156', '2022-01-19 12:52:02', 130),
('DoctrineMigrations\\Version20220119133101', '2022-01-19 13:31:05', 34),
('DoctrineMigrations\\Version20220120083816', '2022-01-20 08:38:32', 100),
('DoctrineMigrations\\Version20220120094010', '2022-01-20 09:40:14', 57),
('DoctrineMigrations\\Version20220120141155', '2022-01-20 14:12:00', 202),
('DoctrineMigrations\\Version20220120143822', '2022-01-20 14:38:27', 114),
('DoctrineMigrations\\Version20220126174308', '2022-01-26 17:47:52', 135),
('DoctrineMigrations\\Version20220126174521', '2022-01-26 17:47:53', 47),
('DoctrineMigrations\\Version20220126174747', '2022-01-26 17:47:53', 5),
('DoctrineMigrations\\Version20220202074852', '2022-02-02 07:49:05', 208),
('DoctrineMigrations\\Version20220202101458', '2022-02-02 10:17:04', 108),
('DoctrineMigrations\\Version20220217093333', '2022-02-17 09:33:42', 183),
('DoctrineMigrations\\Version20220223080553', '2022-02-23 08:06:09', 172),
('DoctrineMigrations\\Version20220223081422', '2022-02-23 08:14:27', 259),
('DoctrineMigrations\\Version20220302125315', '2022-03-02 12:53:27', 167),
('DoctrineMigrations\\Version20220302125608', '2022-03-02 12:56:13', 250),
('DoctrineMigrations\\Version20220302130833', '2022-03-02 13:08:38', 152),
('DoctrineMigrations\\Version20220302131219', '2022-03-02 13:12:23', 173),
('DoctrineMigrations\\Version20220302131455', '2022-03-02 13:15:06', 197),
('DoctrineMigrations\\Version20220302131711', '2022-03-02 13:17:16', 266),
('DoctrineMigrations\\Version20220302150922', '2022-03-02 15:09:25', 42);

-- --------------------------------------------------------

--
-- Table structure for table `tricks`
--

CREATE TABLE `tricks` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `creation_date` datetime NOT NULL,
  `media` longtext COLLATE utf8mb4_unicode_ci COMMENT '(DC2Type:simple_array)',
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_image` longtext COLLATE utf8mb4_unicode_ci COMMENT '(DC2Type:simple_array)',
  `update_date` datetime DEFAULT NULL,
  `embedsingle` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tricks`
--

INSERT INTO `tricks` (`id`, `name`, `description`, `creation_date`, `media`, `category`, `main_image`, `update_date`, `embedsingle`, `slug`, `user_id`) VALUES
(138, 'front flip', 'rotations en avant', '2022-03-02 15:54:26', 'video621f8522cf023.mp4,video621f8522d0f52.mp4,video621f8522d2029.mp4,video621f8522d2f16.mp4,image621f8522d5515.jpg,image621f8522d644e.jpg', 'flip', 'image621f8522d8dd1.jpg', NULL, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/gMfmjr-kuOg\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'front-flip', 46),
(139, 'back flip', 'rotations en arrière', '2022-03-02 15:59:25', 'video621f864d9eee5.mp4,image621f864da4dea.jpg', 'flip', NULL, NULL, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/SlhGVnFPTDE\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'back-flip', 46),
(140, 'slide', 'Un slide consiste à glisser sur une barre de slide. Le slide se fait soit avec la planche dans l\'axe de la barre, soit perpendiculaire, soit plus ou moins désaxé.', '2022-03-02 16:05:24', 'image621f87b4352d2.jpg', 'slides', 'image621f87b435def.jpg', NULL, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/gO5GLk7oQhU\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'slide', 46),
(141, 'one foot', 'Figures réalisée avec un pied décroché de la fixation, afin de tendre la jambe correspondante pour mettre en évidence le fait que le pied n\'est pas fixé. Ce type de figure est extrêmement dangereuse pour les ligaments du genou en cas de mauvaise réception.', '2022-03-02 16:09:29', 'image621f88aa1b00e.jpg', 'flip', 'image621f88aa1ca51.jpg', NULL, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/jyWiHFrIeH4\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'one-foot', 46),
(142, 'japan air', 'Le terme old school désigne un style de freestyle caractérisée par en ensemble de figure et une manière de réaliser des figures passée de mode, qui fait penser au freestyle des années 1980 - début 1990 (par opposition à new school)', '2022-03-02 16:12:39', 'image621f8967c1adc.jpg', 'old school', 'image621f8967c259a.jpg', '2022-03-02 16:14:43', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/jH76540wSqU\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'old-school', 46),
(143, 'rail to switch', 'Un « rail to switch » signifie que le rider est sorti de la barre avec un quart de tour qui l\'a amené de son côté non naturel. De même, le « switch to rail » consiste à entrer sur la barre en partant en arrière et en effectuant un quart de tour.', '2022-03-02 16:17:57', 'image621f8aa58c2a6.png', 'slides', 'image621f8aa58d96e.png', NULL, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/slWCAZijWTI\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'rail-to-switch', 46),
(144, 'Hakon Flip', 'rotation désaxée', '2022-03-02 16:31:40', 'image621f8ddc57110.jpg', 'rotations désaxées', 'image621f8ddc57b85.jpg', NULL, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/vUf0ynXU7mo\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Hakon-Flip', 46),
(145, '360', 'On désigne par le mot « rotation » uniquement des rotations horizontales ; les rotations verticales sont des flips. Le principe est d\'effectuer une rotation horizontale pendant le saut, puis d\'attérir en position switch ou normal', '2022-03-02 16:34:05', 'image621f8e6d9044d.jpg', 'rotation', 'image621f8e6d911c0.jpg', NULL, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/T59sdEX8PLU\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '360', 46),
(146, 'big foot', 'rotation 1080°', '2022-03-02 16:36:47', 'image621f8f0fe24d9.jpg', 'rotation', 'image621f8f0fe3161.jpg', NULL, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Me6Ti5nsK-Y\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'big-foot', 46),
(147, 'Mac Twist', 'Les flips agrémentés d\'une vrille', '2022-03-02 16:39:12', 'image621f8fa114853.jpg', 'flip', 'image621f8fa115cd9.jpg', NULL, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/cuaJlr1DTMk\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Mac-Twist', 46);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json DEFAULT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `validate` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `user_name`, `password`, `validate`) VALUES
(46, 'elouan.peurou@gmail.com', '[]', 'elouan', '$2y$10$CtKfaiFj1Dl/7uwKd/2isOn3K.4M66t0oi2PPn.L.A39ZcO4MXT8a', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_9474526CB281BE2E` (`trick_id`);

--
-- Indexes for table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `tricks`
--
ALTER TABLE `tricks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_E1D902C15E237E06` (`name`),
  ADD KEY `IDX_E1D902C1A76ED395` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`),
  ADD UNIQUE KEY `UNIQ_8D93D64924A232CF` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `tricks`
--
ALTER TABLE `tricks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `FK_9474526CB281BE2E` FOREIGN KEY (`trick_id`) REFERENCES `tricks` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tricks`
--
ALTER TABLE `tricks`
  ADD CONSTRAINT `FK_E1D902C1A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
