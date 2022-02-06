CREATE TABLE IF NOT EXISTS `specialtie` (
  `id` INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NULL
)ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `professional` (
  `id` INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NULL,
  `crm` VARCHAR(20) NULL UNIQUE,
  `specialtie_id` INT UNSIGNED NOT NULL,
    FOREIGN KEY (`specialtie_id`)
    REFERENCES `specialtie` (`id`)
    ON DELETE RESTRICT
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `schedule` (
  `id` INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `consultation` DATETIME NULL,
  `how_known` VARCHAR(255),
  `professional_id` INT UNSIGNED NULL,
    FOREIGN KEY (`professional_id`)
    REFERENCES `professional` (`id`)
    ON DELETE SET NULL
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

INSERT INTO specialtie (id, name) VALUES
(1, 'Cardiologia'),
(2, 'Neurologia'),
(3, 'Ortopedia'),
(4, 'Oftalmologia'),
(5, 'Geriatria'),
(6, 'Pediatria');

INSERT INTO professional (name, crm, specialtie_id) VALUES
("Malganis", "CRM 66648", 1),
("Arkturus Mengsk", "CRM 17170", 1),
("Overmind", "CRM 95623", 2),
("Diablo", "CRM 48666", 2),
("Sarah Kerrigan", "CRM 26262", 3),
("Zeratul", "CRM 58456", 3),
("Mephisto", "CRM 59813", 4),
("Azmodan", "CRM 99966", 4),
("Lord Maldazzar", "CRM 55661", 5),
("Tassadar", "CRM 99511", 5),
("Tychus Frindlay", "CRM 70171", 6);