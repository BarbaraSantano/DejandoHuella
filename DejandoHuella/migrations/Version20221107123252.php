<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221107123252 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE acoge ADD nombre VARCHAR(255) NOT NULL, ADD email VARCHAR(255) NOT NULL, ADD apellido VARCHAR(255) NOT NULL, ADD telefono VARCHAR(255) NOT NULL, ADD direccion VARCHAR(255) NOT NULL, ADD fecha_nacimiento VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE acoge DROP nombre, DROP email, DROP apellido, DROP telefono, DROP direccion, DROP fecha_nacimiento');
    }
}
