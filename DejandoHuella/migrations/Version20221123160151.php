<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221123160151 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE gato CHANGE fecha_nacimiento fecha_nacimiento VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE perro CHANGE fecha_nacimiento fecha_nacimiento VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE socio ADD iban VARCHAR(255) NOT NULL, CHANGE cantidad cantidad VARCHAR(255) NOT NULL, CHANGE telefono telefono INT NOT NULL, CHANGE fecha_nacimiento fecha_nacimiento DATETIME DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE socio DROP iban, CHANGE cantidad cantidad INT NOT NULL, CHANGE telefono telefono VARCHAR(255) NOT NULL, CHANGE fecha_nacimiento fecha_nacimiento VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE perro CHANGE fecha_nacimiento fecha_nacimiento DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE gato CHANGE fecha_nacimiento fecha_nacimiento DATETIME DEFAULT NULL');
    }
}
