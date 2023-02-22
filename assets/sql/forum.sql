-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 22 fév. 2023 à 23:06
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
-- Structure de la table `follow`
--

CREATE TABLE `follow` (
  `id` int(11) NOT NULL,
  `id_follower` int(11) NOT NULL,
  `id_following` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id_post` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `content` text NOT NULL,
  `media` varchar(255) ,
  `post_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id_post`, `id_user`, `content`, `media`, `post_date`) VALUES
(17, 2, 'hhhhhhh', '8421a9b1-7b61-4f17-ae45-ec021988184b.jpg', '2023-02-22 22:26:37'),
(18, 2, 'gggggggggggg', '8421a9b1-7b61-4f17-ae45-ec021988184b.jpg', '2023-02-22 22:28:08'),
(19, 2, 'gggggggggggg', '8421a9b1-7b61-4f17-ae45-ec021988184b.jpg', '2023-02-22 22:29:41'),
(20, 2, 'hhhhh', '8421a9b1-7b61-4f17-ae45-ec021988184b.jpg', '2023-02-22 22:44:18');

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
(1, 'amil', 'fattah', 'fattah.ptech2020@gmail.com', 'fattah2004', 0, '', NULL, 'Unknown'),
(2, 'eddakoui', 'reda', 'reda@gmail.com', 'reda1234', 0, '', NULL, 'Unknown'),
(3, 'belmoauddine', 'meriem', 'meriem@gmail.com', 'meriem1234', 0, '', NULL, 'Unknown');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `follow`
--
ALTER TABLE `follow`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Fk_idfollow` (`id_follower`),
  ADD KEY `fk_following` (`id_following`);

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
-- AUTO_INCREMENT pour la table `follow`
--
ALTER TABLE `follow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `follow`
--
ALTER TABLE `follow`
  ADD CONSTRAINT `Fk_idfollow` FOREIGN KEY (`id_follower`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `fk_following` FOREIGN KEY (`id_following`) REFERENCES `users` (`id_user`);

--
-- Contraintes pour la table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
