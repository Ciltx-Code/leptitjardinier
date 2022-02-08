<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220208093717 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE devis ADD type_haie_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE devis ADD CONSTRAINT FK_8B27C52BCF6660D9 FOREIGN KEY (type_haie_id) REFERENCES haie (id)');
        $this->addSql('CREATE INDEX IDX_8B27C52BCF6660D9 ON devis (type_haie_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE devis DROP FOREIGN KEY FK_8B27C52BCF6660D9');
        $this->addSql('DROP INDEX IDX_8B27C52BCF6660D9 ON devis');
        $this->addSql('ALTER TABLE devis DROP type_haie_id');
    }
}
