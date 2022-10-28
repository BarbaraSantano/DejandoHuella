<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221028114933 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE animal_padrino (animal_id INT NOT NULL, padrino_id INT NOT NULL, INDEX IDX_F182CF458E962C16 (animal_id), INDEX IDX_F182CF4582317B83 (padrino_id), PRIMARY KEY(animal_id, padrino_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE animal_padrino ADD CONSTRAINT FK_F182CF458E962C16 FOREIGN KEY (animal_id) REFERENCES animal (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE animal_padrino ADD CONSTRAINT FK_F182CF4582317B83 FOREIGN KEY (padrino_id) REFERENCES padrino (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE acoge ADD animal_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE acoge ADD CONSTRAINT FK_1F0C15A78E962C16 FOREIGN KEY (animal_id) REFERENCES animal (id)');
        $this->addSql('CREATE INDEX IDX_1F0C15A78E962C16 ON acoge (animal_id)');
        $this->addSql('ALTER TABLE adopta ADD animal_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE adopta ADD CONSTRAINT FK_588ACEE88E962C16 FOREIGN KEY (animal_id) REFERENCES animal (id)');
        $this->addSql('CREATE INDEX IDX_588ACEE88E962C16 ON adopta (animal_id)');
        $this->addSql('ALTER TABLE usuario ADD acoge_id INT DEFAULT NULL, ADD adopta_id INT DEFAULT NULL, ADD padrino_id INT DEFAULT NULL, ADD socio_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE usuario ADD CONSTRAINT FK_2265B05D847524F5 FOREIGN KEY (acoge_id) REFERENCES acoge (id)');
        $this->addSql('ALTER TABLE usuario ADD CONSTRAINT FK_2265B05D99A4D48E FOREIGN KEY (adopta_id) REFERENCES adopta (id)');
        $this->addSql('ALTER TABLE usuario ADD CONSTRAINT FK_2265B05D82317B83 FOREIGN KEY (padrino_id) REFERENCES padrino (id)');
        $this->addSql('ALTER TABLE usuario ADD CONSTRAINT FK_2265B05DDA04E6A9 FOREIGN KEY (socio_id) REFERENCES socio (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_2265B05D847524F5 ON usuario (acoge_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_2265B05D99A4D48E ON usuario (adopta_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_2265B05D82317B83 ON usuario (padrino_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_2265B05DDA04E6A9 ON usuario (socio_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE animal_padrino DROP FOREIGN KEY FK_F182CF458E962C16');
        $this->addSql('ALTER TABLE animal_padrino DROP FOREIGN KEY FK_F182CF4582317B83');
        $this->addSql('DROP TABLE animal_padrino');
        $this->addSql('ALTER TABLE usuario DROP FOREIGN KEY FK_2265B05D847524F5');
        $this->addSql('ALTER TABLE usuario DROP FOREIGN KEY FK_2265B05D99A4D48E');
        $this->addSql('ALTER TABLE usuario DROP FOREIGN KEY FK_2265B05D82317B83');
        $this->addSql('ALTER TABLE usuario DROP FOREIGN KEY FK_2265B05DDA04E6A9');
        $this->addSql('DROP INDEX UNIQ_2265B05D847524F5 ON usuario');
        $this->addSql('DROP INDEX UNIQ_2265B05D99A4D48E ON usuario');
        $this->addSql('DROP INDEX UNIQ_2265B05D82317B83 ON usuario');
        $this->addSql('DROP INDEX UNIQ_2265B05DDA04E6A9 ON usuario');
        $this->addSql('ALTER TABLE usuario DROP acoge_id, DROP adopta_id, DROP padrino_id, DROP socio_id');
        $this->addSql('ALTER TABLE acoge DROP FOREIGN KEY FK_1F0C15A78E962C16');
        $this->addSql('DROP INDEX IDX_1F0C15A78E962C16 ON acoge');
        $this->addSql('ALTER TABLE acoge DROP animal_id');
        $this->addSql('ALTER TABLE adopta DROP FOREIGN KEY FK_588ACEE88E962C16');
        $this->addSql('DROP INDEX IDX_588ACEE88E962C16 ON adopta');
        $this->addSql('ALTER TABLE adopta DROP animal_id');
    }
}
