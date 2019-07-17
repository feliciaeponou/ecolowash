-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 17 juil. 2019 à 20:42
-- Version du serveur :  10.1.38-MariaDB
-- Version de PHP :  7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ecolowash`
--

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `numero_res` int(11) NOT NULL,
  `formule` varchar(255) NOT NULL,
  `prestation_supp` varchar(255) NOT NULL,
  `cat_vehicule` varchar(255) NOT NULL,
  `lieu` varchar(255) NOT NULL,
  `date_heure` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`numero_res`, `formule`, `prestation_supp`, `cat_vehicule`, `lieu`, `date_heure`, `id_user`) VALUES
(1, 'interieur_complet', 'desinc_hab', '4x4', 'centre', '24/06/2019 9:30:03', 0),
(2, 'interieur_complet', 'desinc_hab', 'berline', 'domicile', '22/06/2019 17:04:13', 0),
(3, 'interieur_complet', 'desinc_hab', '4x4', 'domicile', '25/06/2019 11:13:55', 0),
(4, 'interieur_complet', 'Aucune', '4x4', 'centre', '', 0),
(5, 'IntÃ©rieur complet', 'DÃ©sinfection de lâ€™habitacle', '4x4', 'centre', '10/07/2019 17:14:38', 1),
(6, 'IntÃ©rieur complet', 'DÃ©sinfection de lâ€™habitacle', 'Berline', 'En Centre', '17/07/2019 11:30:24', 1),
(7, 'IntÃ©rieur complet', 'DÃ©sinfection de lâ€™habitacle', '4x4', 'En Centre', '25/07/2019 10:00:29', 1);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `sexe` varchar(10) NOT NULL,
  `dat_nais` varchar(10) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `pays` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `datesignup` varchar(10) NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'standard',
  `photo_user` longtext NOT NULL,
  `num_cni` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `nom`, `prenom`, `sexe`, `dat_nais`, `numero`, `email`, `password`, `pays`, `ville`, `datesignup`, `type`, `photo_user`, `num_cni`) VALUES
(1, 'Eponou', 'Felicia ', 'F', '', '09682009', 'fliciaroselinestaxy2@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '110', 'Abidjan', '12-06-2019', 'standard', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `vehicule`
--

CREATE TABLE `vehicule` (
  `id_vehicule` int(11) NOT NULL,
  `cat_vehicule` varchar(255) NOT NULL,
  `imm_vehicule` varchar(255) NOT NULL,
  `mar_vehicule` varchar(255) NOT NULL,
  `model_vehicule` varchar(255) NOT NULL,
  `phot_vehicule` longtext NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`numero_res`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Index pour la table `vehicule`
--
ALTER TABLE `vehicule`
  ADD PRIMARY KEY (`id_vehicule`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `numero_res` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `vehicule`
--
ALTER TABLE `vehicule`
  MODIFY `id_vehicule` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
