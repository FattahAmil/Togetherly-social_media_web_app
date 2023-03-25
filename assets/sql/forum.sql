-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 25 mars 2023 à 14:31
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `forum`
--

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id_comment` int(11) NOT NULL,
  `id_post` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `comment` text NOT NULL,
  `media-comment` text DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id_comment`, `id_post`, `id_user`, `comment`, `created_at`) VALUES
(64, 23, 1, 'hy', '2023-03-03 10:40:51'),
(65, 23, 1, 'hyyyyy', '2023-03-03 10:41:00'),
(66, 23, 1, 'malak', '2023-03-03 10:58:38'),
(67, 23, 2, 'broo', '2023-03-03 13:55:34'),
(68, 23, 2, 'hello', '2023-03-03 15:58:54'),
(69, 20, 1, 'hy', '2023-03-03 16:55:27'),
(70, 18, 2, 'hyyy', '2023-03-04 13:08:55'),
(71, 22, 2, 'hhhhhhh', '2023-03-08 10:44:01'),
(72, 25, 3, 'hyy', '2023-03-16 22:58:03'),
(73, 25, 1, 'ghhh', '2023-03-17 13:29:34'),
(74, 26, 1, 'hyy\n', '2023-03-17 23:18:23'),
(75, 23, 1, 'hy', '2023-03-19 03:51:00'),
(76, 27, 1, 'hyy\n', '2023-03-23 22:48:07'),
(77, 28, 1, 'hyyy', '2023-03-23 22:48:49'),
(78, 27, 1, 'hy\n', '2023-03-23 23:54:48'),
(79, 23, 3, 'hy', '2023-03-25 02:33:20'),
(80, 30, 1, 'nice tof', '2023-03-25 08:55:20'),
(81, 30, 1, 'nice tofe a derarriii', '2023-03-25 08:55:41'),
(82, 34, 1, 'hy', '2023-03-25 11:10:55'),
(83, 33, 1, 'hy', '2023-03-25 14:17:23'),
(84, 33, 1, 'hy', '2023-03-25 14:19:30'),
(85, 33, 1, 'hy', '2023-03-25 14:19:31'),
(86, 19, 1, 'hy', '2023-03-25 14:28:57'),
(87, 27, 1, 'merieme', '2023-03-25 14:29:51');

-- --------------------------------------------------------

--
-- Structure de la table `follow`
--

CREATE TABLE `follow` (
  `id` int(11) NOT NULL,
  `id_follower` int(11) NOT NULL,
  `id_following` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `follow`
--

INSERT INTO `follow` (`id`, `id_follower`, `id_following`) VALUES
(62, 1, 3),
(63, 2, 1),
(64, 2, 3),
(66, 3, 2),
(67, 4, 1),
(74, 1, 2),
(75, 3, 1),
(76, 2, 4);

-- --------------------------------------------------------

--
-- Structure de la table `likes`
--

CREATE TABLE `likes` (
  `id_like` int(11) NOT NULL,
  `likeType` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `id_post` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `likes`
--

INSERT INTO `likes` (`id_like`, `likeType`, `id_post`, `id_user`) VALUES
(371, 'like', 22, 1),
(374, 'like', 22, 2),
(375, 'like', 21, 2),
(376, 'like', 18, 2),
(380, 'like', 19, 2),
(381, 'like', 17, 2),
(382, 'like', 23, 2),
(384, 'like', 20, 1),
(397, 'like', 23, 3),
(434, 'like', 26, 1),
(437, 'like', 29, 1),
(438, 'like', 28, 1),
(439, 'like', 27, 1),
(448, 'like', 21, 1),
(452, 'like', 18, 1),
(453, 'like', 19, 1),
(456, 'like', 25, 1),
(457, 'like', 23, 1),
(458, 'like', 25, 3),
(459, 'like', 29, 3),
(460, 'like', 18, 3),
(461, 'like', 19, 3),
(462, 'like', 30, 1),
(464, 'like', 34, 1),
(465, 'like', 33, 1),
(466, 'like', 32, 1),
(467, 'like', 31, 1);

-- --------------------------------------------------------

--
-- Structure de la table `notifications`
--

CREATE TABLE `notifications` (
  `id_notification` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `notification_type` enum('post','comment','like') NOT NULL,
  `id_type` int(11) NOT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `notifications`
--

INSERT INTO `notifications` (`id_notification`, `id_user`, `notification_type`, `id_type`, `is_read`, `created_at`) VALUES
(8, 1, 'comment', 18, 0, '2023-03-25 13:26:58'),
(9, 1, 'comment', 19, 0, '2023-03-25 13:28:57'),
(10, 1, 'comment', 27, 0, '2023-03-25 13:29:51');

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id_post` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `content` text NOT NULL,
  `media` varchar(255) DEFAULT NULL,
  `post_date` datetime NOT NULL,
  `num_likes` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id_post`, `id_user`, `content`, `media`, `post_date`) VALUES
(17, 2, 'hhhhhhh', '8421a9b1-7b61-4f17-ae45-ec021988184b.jpg', '2023-02-22 22:26:37'),
(18, 2, 'gggggggggggg', '8421a9b1-7b61-4f17-ae45-ec021988184b.jpg', '2023-02-22 22:28:08'),
(19, 2, 'gggggggggggg', '8421a9b1-7b61-4f17-ae45-ec021988184b.jpg', '2023-02-22 22:29:41'),
(20, 2, 'hhhhh', '8421a9b1-7b61-4f17-ae45-ec021988184b.jpg', '2023-02-22 22:44:18'),
(21, 2, 'jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj', NULL, '2023-02-22 23:57:19'),
(22, 1, 'jjjjjjj', 'MTA_ San Andreas 2022-10-10 01-41-21.mp4', '2023-02-23 20:56:53'),
(23, 2, 'mounire', 'Untitled Video - Google Chrome 2022-12-18 13-54-40.mp4', '2023-02-25 13:14:11'),
(25, 3, 'hyyy how are you mercuary', NULL, '2023-03-16 22:57:49'),
(26, 1, 'sincara', NULL, '2023-03-17 23:18:09'),
(27, 1, 'bash', NULL, '2023-03-19 03:49:17'),
(28, 1, 'koki', NULL, '2023-03-23 21:48:38'),
(29, 1, 'hy', 'logo draganov.jfif', '2023-03-23 21:50:02'),
(30, 1, 'hy mercyry', NULL, '2023-03-23 22:55:10'),
(31, 1, 'ajax fetch', NULL, '2023-03-25 09:10:27'),
(32, 1, 'hy', NULL, '2023-03-25 09:13:10'),
(33, 1, 'hy', NULL, '2023-03-25 09:18:29'),
(34, 1, 'bash', NULL, '2023-03-25 09:18:39');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nom_user` varchar(60) NOT NULL,
  `prenom_user` varchar(60) NOT NULL,
  `email_user` varchar(150) NOT NULL,
  `pass_user` varchar(20) NOT NULL,
  `admin_user` int(11) NOT NULL,
  `imgprfl_user` varchar(200) NOT NULL,
  `phone_user` varchar(20) DEFAULT NULL,
  `gender_user` varchar(20) DEFAULT 'Unknown'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_user`, `nom_user`, `prenom_user`, `email_user`, `pass_user`, `admin_user`, `imgprfl_user`, `phone_user`, `gender_user`) VALUES
(1, 'amil', 'fattah', 'fattah.ptech2020@gmail.com', 'fattah2004', 0, './imgprofile/daraganov2.png', NULL, 'Unknown'),
(2, 'eddakoui', 'reda', 'reda@gmail.com', 'reda1234', 0, './imgprofile/avatar.svg', NULL, 'Unknown'),
(3, 'belmoauddine', 'meriem', 'meriem@gmail.com', 'meriem1234', 0, './imgprofile/mia2.jpg', NULL, 'Unknown');

--
-- Index pour les tables déchargées
--


--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `id_post` (`id_post`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `follow`
--
ALTER TABLE `follow`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Fk_idfollow` (`id_follower`),
  ADD KEY `fk_following` (`id_following`);

--
-- Index pour la table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id_like`),
  ADD UNIQUE KEY `post_user` (`id_post`,`id_user`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id_notification`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_type` (`id_type`);

--
-- Index pour la table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id_notification`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_type` (`id_type`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT pour la table `follow`
--
ALTER TABLE `follow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT pour la table `likes`
--
ALTER TABLE `likes`
  MODIFY `id_like` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=468;

--
-- AUTO_INCREMENT pour la table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id_notification` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`id_post`) REFERENCES `posts` (`id_post`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE;

--
-- Contraintes pour la table `follow`
--
ALTER TABLE `follow`
  ADD CONSTRAINT `Fk_idfollow` FOREIGN KEY (`id_follower`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `fk_following` FOREIGN KEY (`id_following`) REFERENCES `users` (`id_user`);

--
-- Contraintes pour la table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`id_post`) REFERENCES `posts` (`id_post`) ON DELETE CASCADE,
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE;

--
-- Contraintes pour la table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `notifications_ibfk_4` FOREIGN KEY (`id_type`) REFERENCES `comments` (`id_post`) ON DELETE CASCADE;

--
-- Contraintes pour la table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
