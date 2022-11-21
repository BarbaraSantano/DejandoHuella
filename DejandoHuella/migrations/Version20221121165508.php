<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221121165508 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE gato (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(255) NOT NULL, fecha_nacimiento VARCHAR(255) NOT NULL, sexo VARCHAR(255) NOT NULL, raza VARCHAR(255) NOT NULL, esterilizado TINYINT(1) NOT NULL, test TINYINT(1) NOT NULL, edad VARCHAR(255) NOT NULL, tamano VARCHAR(255) NOT NULL, descripcion VARCHAR(1500) NOT NULL, imagen VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE gato_padrino (gato_id INT NOT NULL, padrino_id INT NOT NULL, INDEX IDX_A50AFFECE6C2CC92 (gato_id), INDEX IDX_A50AFFEC82317B83 (padrino_id), PRIMARY KEY(gato_id, padrino_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE perro (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(255) NOT NULL, fecha_nacimiento VARCHAR(255) NOT NULL, sexo VARCHAR(255) NOT NULL, raza VARCHAR(255) NOT NULL, esterilizado TINYINT(1) NOT NULL, test TINYINT(1) NOT NULL, edad VARCHAR(255) NOT NULL, tamano VARCHAR(255) NOT NULL, descripcion VARCHAR(1500) NOT NULL, imagen VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE perro_padrino (perro_id INT NOT NULL, padrino_id INT NOT NULL, INDEX IDX_BD6E4F972F41C9A9 (perro_id), INDEX IDX_BD6E4F9782317B83 (padrino_id), PRIMARY KEY(perro_id, padrino_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE gato_padrino ADD CONSTRAINT FK_A50AFFECE6C2CC92 FOREIGN KEY (gato_id) REFERENCES gato (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE gato_padrino ADD CONSTRAINT FK_A50AFFEC82317B83 FOREIGN KEY (padrino_id) REFERENCES padrino (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE perro_padrino ADD CONSTRAINT FK_BD6E4F972F41C9A9 FOREIGN KEY (perro_id) REFERENCES perro (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE perro_padrino ADD CONSTRAINT FK_BD6E4F9782317B83 FOREIGN KEY (padrino_id) REFERENCES padrino (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE socio ADD iban VARCHAR(255) NOT NULL, CHANGE cantidad cantidad VARCHAR(255) NOT NULL, CHANGE fecha_nacimiento fecha_nacimiento DATETIME DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE gato_padrino DROP FOREIGN KEY FK_A50AFFECE6C2CC92');
        $this->addSql('ALTER TABLE gato_padrino DROP FOREIGN KEY FK_A50AFFEC82317B83');
        $this->addSql('ALTER TABLE perro_padrino DROP FOREIGN KEY FK_BD6E4F972F41C9A9');
        $this->addSql('ALTER TABLE perro_padrino DROP FOREIGN KEY FK_BD6E4F9782317B83');
        $this->addSql('DROP TABLE gato');
        $this->addSql('DROP TABLE gato_padrino');
        $this->addSql('DROP TABLE perro');
        $this->addSql('DROP TABLE perro_padrino');
        $this->addSql('ALTER TABLE socio DROP iban, CHANGE cantidad cantidad INT NOT NULL, CHANGE fecha_nacimiento fecha_nacimiento VARCHAR(255) NOT NULL');
    }
}
