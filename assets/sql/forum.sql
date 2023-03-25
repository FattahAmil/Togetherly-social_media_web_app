-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 25 mars 2023 à 14:10
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
(7, 25, 2, 'yhhhh', NULL, '2023-02-26 15:42:22'),
(8, 25, 2, 'hbbbbb', NULL, '2023-02-26 15:42:29'),
(9, 25, 2, 'Comment', NULL, '2023-02-26 15:45:03'),
(10, 25, 2, 'Comment', NULL, '2023-02-26 15:45:50'),
(11, 25, 2, 'Comment', NULL, '2023-02-26 15:46:09'),
(12, 25, 2, '', NULL, '2023-02-26 16:02:15'),
(13, 25, 2, 'hhh', NULL, '2023-02-26 16:24:29'),
(14, 25, 2, 'nnn', NULL, '2023-02-26 17:32:08'),
(15, 26, 3, 'jj', NULL, '2023-02-26 22:52:46'),
(16, 27, 3, 'hyyyyy', NULL, '2023-02-27 11:04:13'),
(17, 27, 3, '', NULL, '2023-02-27 12:03:37'),
(18, 28, 3, 'hdjh', NULL, '2023-02-27 18:10:09'),
(19, 28, 3, 'hjj', NULL, '2023-03-01 12:23:54'),
(20, 27, 1, 'hy\n', NULL, '2023-03-13 17:28:12'),
(21, 28, 1, 'hy', NULL, '2023-03-13 17:29:02'),
(22, 26, 1, 'hiii', NULL, '2023-03-13 17:34:36'),
(23, 18, 3, 'hhhh\n', NULL, '2023-03-25 12:42:26'),
(24, 29, 1, 'hyy\n', NULL, '2023-03-25 13:35:16'),
(25, 29, 1, 'hyy\n', NULL, '2023-03-25 13:35:19'),
(26, 29, 1, 'hyy\n', NULL, '2023-03-25 13:35:20'),
(27, 29, 1, 'hyy\n', NULL, '2023-03-25 13:35:20'),
(28, 29, 1, 'hyy\n', NULL, '2023-03-25 13:35:21'),
(29, 30, 1, 'hy', NULL, '2023-03-25 13:48:41'),
(30, 30, 1, 'the new commenti ', NULL, '2023-03-25 13:52:50'),
(31, 30, 1, 'the new commenti 22', NULL, '2023-03-25 13:56:32'),
(32, 30, 1, 'the new commenti 22', NULL, '2023-03-25 13:57:43'),
(33, 30, 1, 'weee', NULL, '2023-03-25 13:57:58'),
(34, 30, 1, 'dd', NULL, '2023-03-25 13:59:07'),
(35, 31, 1, 'ssssssssssssssssssss', NULL, '2023-03-25 14:02:18');

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
(27, 'like', '2023-03-25 11:57:35', 27, 1),
(34, 'like', '2023-03-25 11:57:35', 26, 1),
(35, 'love', '2023-03-25 11:57:35', 28, 3),
(36, 'like', '2023-03-25 11:57:35', 29, 3),
(37, 'like', '2023-03-25 11:57:35', 29, 1);

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
(1, 'amil', 'fattah', 'fattah.ptech2020@gmail.com', 'fattah2004', 0, './imgprofile/musk.jpg', NULL, 'Unknown'),
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
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT pour la table `follow`
--
ALTER TABLE `follow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `likes`
--
ALTER TABLE `likes`
  MODIFY `id_like` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT pour la table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id_notification` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  ADD CONSTRAINT `notifications_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `notifications_ibfk_2` FOREIGN KEY (`id_type`) REFERENCES `likes` (`id_like`) ON DELETE CASCADE,
  ADD CONSTRAINT `notifications_ibfk_3` FOREIGN KEY (`id_type`) REFERENCES `comments` (`id_comment`) ON DELETE CASCADE,
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
