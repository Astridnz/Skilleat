CREATE TABLE `Cours`(
    `id_cours` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `titre_cours` VARCHAR(255) NOT NULL,
    `description_cours` TEXT NOT NULL COMMENT 'spécialité culinaire',
    `categorie_cours` VARCHAR(255) NOT NULL COMMENT 'spécialité culinaire',
    `niveau_cours` VARCHAR(255) NOT NULL,
    `duree` INT NOT NULL,
    `prix` DECIMAL(8, 2) NOT NULL,
    `photo_cours` VARCHAR(255) NOT NULL,
    `id_chef` BIGINT NOT NULL
);
CREATE TABLE `Chef`(
    `id_chef` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `biographie` TEXT NOT NULL,
    `specialites` VARCHAR(255) NOT NULL,
    `cours_propose` BIGINT NOT NULL,
    `id_user` BIGINT NOT NULL
);
CREATE TABLE `User`(
    `id_user` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `nom_user` VARCHAR(255) NOT NULL,
    `prenom_user` VARCHAR(255) NOT NULL,
    `email_user` VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `photo_user` VARCHAR(255) NOT NULL,
    `est_actif` BOOLEAN NOT NULL,
    `date_inscription` BIGINT NOT NULL
);
CREATE TABLE `reservation`(
    `id_resa` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `id_user` INT NOT NULL,
    `id_cours` INT NOT NULL,
    `date_resa` DATETIME NOT NULL,
    `statut` VARCHAR(255) NOT NULL
);
CREATE TABLE `avis`(
    `id_avis` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `id_user` INT NOT NULL,
    `id_cours` INT NOT NULL,
    `commentaire` TEXT NOT NULL,
    `date_avis` DATETIME NOT NULL
);
ALTER TABLE
    `avis` ADD CONSTRAINT `avis_id_user_foreign` FOREIGN KEY(`id_user`) REFERENCES `User`(`id_user`);
ALTER TABLE
    `avis` ADD CONSTRAINT `avis_id_cours_foreign` FOREIGN KEY(`id_cours`) REFERENCES `Cours`(`id_cours`);
ALTER TABLE
    `reservation` ADD CONSTRAINT `reservation_id_user_foreign` FOREIGN KEY(`id_user`) REFERENCES `User`(`id_user`);
ALTER TABLE
    `reservation` ADD CONSTRAINT `reservation_id_cours_foreign` FOREIGN KEY(`id_cours`) REFERENCES `Cours`(`id_cours`);
ALTER TABLE
    `Chef` ADD CONSTRAINT `chef_id_user_foreign` FOREIGN KEY(`id_user`) REFERENCES `User`(`id_user`);
ALTER TABLE
    `Cours` ADD CONSTRAINT `cours_id_chef_foreign` FOREIGN KEY(`id_chef`) REFERENCES `Chef`(`id_chef`);