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
  `professional_id` INT UNSIGNED NULL,
  `patient_id` INT UNSIGNED NULL,
    FOREIGN KEY (`patient_id`)
    REFERENCES `patient` (`id`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION,
    FOREIGN KEY (`professional_id`)
    REFERENCES `professional` (`id`)
    ON DELETE SET NULL
    ON UPDATE NO ACTION)
ENGINE = InnoDB;
CREATE TABLE IF NOT EXISTS `patient` (
  `id` INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NULL,
  `cpf` VARCHAR(255) UNIQUE NULL,
  `birth` DATE,
  `how_known` VARCHAR(255))
ENGINE = InnoDB;

INSERT INTO specialtie (id, name) VALUES
(1, 'Cardiologia'),
(2, 'Neurologia'),
(3, 'Ortopedia'),
(4, 'Oftalmologia'),
(5, 'Geriatria'),
(6, 'Pediatria');

INSERT INTO professional (name, crm, specialtie_id) VALUES
("César Lattes", "CRM 66648", 1),
("Oswaldo Cruz", "CRM 17170", 1),
("Carlos Chagas", "CRM 95623", 2),
("Duilia de Mello", "CRM 48666", 2),
("José Leite Lopes", "CRM 26262", 3),
("Monteiro Lobato", "CRM 58456", 3),
("Cecília Meireles", "CRM 59813", 4),
("Cora Coralina", "CRM 99966", 4),
("Carolina de Jesus", "CRM 55661", 5),
("Lygia Fagundes Telles", "CRM 99511", 5),
("Ana Miranda", "CRM 70171", 6);