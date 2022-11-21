<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221121164746 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE gato (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(255) NOT NULL, fecha_nacimiento VARCHAR(255) NOT NULL, sexo VARCHAR(255) NOT NULL, raza VARCHAR(255) NOT NULL, esterilizado TINYINT(1) NOT NULL, test TINYINT(1) NOT NULL, edad VARCHAR(255) NOT NULL, tamano VARCHAR(255) NOT NULL, descripcion VARCHAR(1500) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE perro (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(255) NOT NULL, fecha_nacimiento VARCHAR(255) NOT NULL, sexo VARCHAR(255) NOT NULL, raza VARCHAR(255) NOT NULL, esterilizado TINYINT(1) NOT NULL, test TINYINT(1) NOT NULL, edad VARCHAR(255) NOT NULL, tamano VARCHAR(255) NOT NULL, descripcion VARCHAR(1500) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE socio ADD iban VARCHAR(255) NOT NULL, CHANGE cantidad cantidad VARCHAR(255) NOT NULL, CHANGE fecha_nacimiento fecha_nacimiento DATETIME DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE gato');
        $this->addSql('DROP TABLE perro');
        $this->addSql('ALTER TABLE socio DROP iban, CHANGE cantidad cantidad INT NOT NULL, CHANGE fecha_nacimiento fecha_nacimiento VARCHAR(255) NOT NULL');
    }
}
