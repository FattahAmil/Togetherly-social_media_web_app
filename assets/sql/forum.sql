-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 28 fév. 2023 à 22:43
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
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id_comment`, `id_post`, `id_user`, `comment`, `created_at`) VALUES
(27, 19, 1, 'hyy', '2023-02-27 12:36:19'),
(28, 19, 1, 'hy', '2023-02-27 12:37:42'),
(29, 19, 1, 'how are you', '2023-02-27 12:40:23'),
(30, 19, 1, 'yyye', '2023-02-27 12:41:10'),
(31, 18, 1, 'holla', '2023-02-27 12:44:45'),
(32, 18, 1, 'hello', '2023-02-27 12:45:51'),
(33, 17, 1, 'broo', '2023-02-27 12:46:37'),
(34, 17, 1, 'mero', '2023-02-27 12:47:12'),
(35, 20, 1, 'hy', '2023-02-27 16:27:53'),
(36, 20, 1, 'howe are uu', '2023-02-27 16:28:04'),
(37, 20, 3, 'hello\n', '2023-02-27 17:55:34'),
(38, 23, 1, 'hhh', '2023-02-27 18:46:03');

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
(61, 1, 2),
(62, 1, 3),
(63, 2, 1),
(64, 2, 3),
(65, 3, 1),
(66, 3, 2),
(67, 4, 1),
(68, 4, 2),
(69, 4, 3),
(70, 1, 4),
(71, 3, 4);

-- --------------------------------------------------------

--
-- Structure de la table `likes`
--

CREATE TABLE `likes` (
  `id_like` int(11) NOT NULL,
  `likeType` varchar(50) NOT NULL,
  `id_post` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `likes`
--

INSERT INTO `likes` (`id_like`, `likeType`, `id_post`, `id_user`) VALUES
(133, 'like', 23, 1),
(140, 'like', 22, 2),
(144, 'love', 22, 4),
(170, 'haha', 20, 1),
(171, 'like', 21, 1),
(173, 'like', 22, 1);

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id_post` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `content` text NOT NULL,
  `media` varchar(255) DEFAULT NULL,
  `post_date` datetime NOT NULL
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
(23, 2, 'mounire', 'Untitled Video - Google Chrome 2022-12-18 13-54-40.mp4', '2023-02-25 13:14:11');

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
  `imgprfl_user` varchar(200) NOT NULL DEFAULT 'assets/images/user/user-32.jpg',
  `phone_user` varchar(20) DEFAULT NULL,
  `gender_user` varchar(20) DEFAULT 'Unknown'
) ;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_user`, `nom_user`, `prenom_user`, `email_user`, `pass_user`, `admin_user`, `imgprfl_user`, `phone_user`, `gender_user`) VALUES
(1, 'amil', 'fattah', 'fattah.ptech2020@gmail.com', 'fattah2004', 0, 'assets/images/user/user-32.jpg', NULL, 'Unknown'),
(2, 'eddakoui', 'reda', 'reda@gmail.com', 'reda1234', 0, './imgprofile/avatar.svg', NULL, 'Unknown'),
(3, 'belmoauddine', 'meriem', 'meriem@gmail.com', 'meriem1234', 0, 'assets/images/user/user-32.jpg', NULL, 'Unknown'),
(4, 'hamli', 'mounire', 'mounire@gmail.com', 'mounire1234', 0, 'assets/images/user/user-32.jpg', NULL, 'Unknown');

--
-- Index pour les tables déchargées
--
CREATE TABLE notifications ( id_notification INT AUTO_INCREMENT PRIMARY KEY, id_user INT NOT NULL, notification_type ENUM( 'post', 'comment', 'like') NOT NULL, id_type INT NOT NULL, is_read TINYINT(1) NOT NULL DEFAULT 0, created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP, FOREIGN KEY (id_user) REFERENCES users(id_user), FOREIGN KEY (id_type) REFERENCES likes(id_like) ON DELETE CASCADE, FOREIGN KEY (id_type) REFERENCES comments(id_comment) ON DELETE CASCADE, FOREIGN KEY (id_type) REFERENCES comments(id_post) ON DELETE CASCADE );
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
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT pour la table `follow`
--
ALTER TABLE `follow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT pour la table `likes`
--
ALTER TABLE `likes`
  MODIFY `id_like` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=174;

--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

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
-- Contraintes pour la table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
