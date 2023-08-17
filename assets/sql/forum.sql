-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 17 mai 2023 à 15:07
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

INSERT INTO `comments` (`id_comment`, `id_post`, `id_user`, `comment`, `media-comment`, `created_at`) VALUES
(72, 29, 1, 'fffffff', NULL, '2023-04-02 16:16:15'),
(73, 29, 1, 'rrrrrrrrrrrrrrrrrrrrrr', NULL, '2023-04-02 16:16:20'),
(74, 29, 1, 'cccc', NULL, '2023-04-02 16:16:28'),
(75, 29, 1, 'mn mewbf', NULL, '2023-04-02 16:16:33'),
(76, 29, 1, 'dddddddddddddddddddddd', NULL, '2023-04-02 16:16:37'),
(77, 29, 1, 'ccccccccccccc', NULL, '2023-04-02 16:16:41'),
(78, 29, 1, 'ccccccccccccccccccccc', NULL, '2023-04-02 16:16:46'),
(79, 29, 1, 'dccccccccccccccwedwed', NULL, '2023-04-02 16:16:53'),
(80, 29, 1, 'dsqavbb', NULL, '2023-04-02 16:16:58'),
(81, 31, 3, 'hy fettah', NULL, '2023-04-05 00:25:09'),
(82, 29, 1, 'ewaa', NULL, '2023-04-05 00:26:12'),
(83, 29, 1, 'jhj\n', NULL, '2023-05-15 16:24:34');

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
(11, 1, 2),
(12, 1, 3),
(13, 3, 2),
(14, 3, 1);

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

INSERT INTO `likes` (`id_like`, `likeType`, `created_at`, `id_post`, `id_user`) VALUES
(1, 'like', '2023-03-25 11:57:35', 24, 3),
(2, '', '2023-03-25 11:57:35', 24, 1),
(4, 'like', '2023-03-25 11:57:35', 20, 2),
(6, 'like', '2023-03-25 11:57:35', 17, 2),
(13, 'like', '2023-03-25 11:57:35', 24, 2),
(20, 'like', '2023-03-25 11:57:35', 25, 2),
(22, 'like', '2023-03-25 11:57:35', 19, 3),
(34, 'like', '2023-03-25 11:57:35', 26, 1),
(35, 'love', '2023-03-25 11:57:35', 28, 3),
(36, 'like', '2023-03-25 11:57:35', 29, 3),
(88, 'like', '2023-05-15 15:16:31', 31, 3),
(90, 'like', '2023-05-15 16:16:24', 31, 1),
(91, 'like', '2023-05-15 16:16:33', 27, 1),
(92, 'like', '2023-05-15 16:16:38', 23, 1),
(93, 'like', '2023-05-17 13:29:04', 30, 3),
(94, 'like', '2023-05-17 13:52:05', 29, 1),
(114, 'like', '2023-05-17 14:01:17', 17, 1);

-- --------------------------------------------------------

--
-- Structure de la table `notifications`
--

CREATE TABLE `notifications` (
  `id_notification` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `notification_type` enum('post','comment','like') NOT NULL,
  `id_comment` int(11) DEFAULT NULL,
  `id_like` int(11) DEFAULT NULL,
  `id_post` int(11) DEFAULT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `notifications`
--

INSERT INTO `notifications` (`id_notification`, `id_user`, `notification_type`, `id_comment`, `id_like`, `id_post`, `is_read`, `created_at`) VALUES
(32, 1, 'comment', 72, NULL, NULL, 0, '2023-04-02 14:16:15'),
(33, 1, 'comment', 73, NULL, NULL, 0, '2023-04-02 14:16:20'),
(34, 1, 'comment', 74, NULL, NULL, 0, '2023-04-02 14:16:28'),
(35, 1, 'comment', 75, NULL, NULL, 0, '2023-04-02 14:16:33'),
(36, 1, 'comment', 76, NULL, NULL, 0, '2023-04-02 14:16:37'),
(37, 1, 'comment', 77, NULL, NULL, 0, '2023-04-02 14:16:41'),
(38, 1, 'comment', 78, NULL, NULL, 0, '2023-04-02 14:16:46'),
(39, 1, 'comment', 79, NULL, NULL, 0, '2023-04-02 14:16:53'),
(40, 1, 'comment', 80, NULL, NULL, 0, '2023-04-02 14:16:58'),
(41, 3, 'comment', 81, NULL, NULL, 0, '2023-04-04 22:25:09'),
(63, 3, 'like', NULL, NULL, 31, 0, '2023-05-15 14:16:31'),
(66, 1, 'like', NULL, NULL, 27, 0, '2023-05-15 15:16:33'),
(67, 1, 'like', NULL, NULL, 23, 0, '2023-05-15 15:16:38'),
(68, 3, 'like', NULL, NULL, 30, 0, '2023-05-17 12:29:04'),
(69, 1, 'like', NULL, NULL, 29, 0, '2023-05-17 12:52:05'),
(89, 1, 'like', NULL, NULL, 17, 0, '2023-05-17 13:01:17');

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

INSERT INTO `posts` (`id_post`, `id_user`, `content`, `media`, `post_date`, `num_likes`) VALUES
(17, 2, 'hhhhhhh', '8421a9b1-7b61-4f17-ae45-ec021988184b.jpg', '2023-02-22 22:26:37', 0),
(18, 2, 'gggggggggggg', '8421a9b1-7b61-4f17-ae45-ec021988184b.jpg', '2023-02-22 22:28:08', 0),
(19, 2, 'gggggggggggg', '8421a9b1-7b61-4f17-ae45-ec021988184b.jpg', '2023-02-22 22:29:41', 0),
(20, 2, 'hhhhh', '8421a9b1-7b61-4f17-ae45-ec021988184b.jpg', '2023-02-22 22:44:18', 0),
(22, 2, 'nnnnnnnnnnnnnnnnnnnn', NULL, '2023-02-22 23:24:26', 0),
(23, 2, 'ddddddddddddddd', NULL, '2023-02-22 23:26:03', 0),
(24, 2, 'video', 'MTA_ San Andreas 2022-10-10 01-41-21.mp4', '2023-02-24 12:06:20', 0),
(25, 3, 'nnnnnnnnnnnn', NULL, '2023-02-24 13:28:55', 0),
(26, 3, 'hello there', '8421a9b1-7b61-4f17-ae45-ec021988184b.jpg', '2023-02-26 22:42:54', NULL),
(27, 3, 'saaaaaaaaaaaaaalaaaaaaaaaaaaaaaaaaaaaaaaam', 'lettre.jpg', '2023-02-27 11:04:03', NULL),
(28, 3, 'salut mohammed amine', 'musk.jpg', '2023-02-27 18:09:56', NULL),
(29, 3, 'hhhhh fuck you a ftah', NULL, '2023-03-25 11:39:43', NULL),
(30, 1, 'jnjj\r\n', NULL, '2023-03-25 12:48:33', NULL),
(31, 1, 'ddddddddddddd ', NULL, '2023-03-25 12:59:33', NULL);

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
(1, 'amil', 'fattah', 'fattah.ptech2020@gmail.com', 'fattah2004', 0, './imgprofile/avatar.svg', NULL, 'Unknown'),
(3, 'belmoauddine', 'meriem', 'meriem@gmail.com', 'meriem1234', 0, './imgprofile/avatar.svg', NULL, 'Unknown');

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
  ADD KEY `fk_comments` (`id_comment`),
  ADD KEY `fk_posts` (`id_post`);

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
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT pour la table `follow`
--
ALTER TABLE `follow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `likes`
--
ALTER TABLE `likes`
  MODIFY `id_like` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT pour la table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id_notification` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

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
  ADD CONSTRAINT `fk_posts` FOREIGN KEY (`id_post`) REFERENCES `posts` (`id_post`),
  ADD CONSTRAINT `notifications_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `notifications_ibfk_3` FOREIGN KEY (`id_comment`) REFERENCES `comments` (`id_comment`) ON DELETE CASCADE;

--
-- Contraintes pour la table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
