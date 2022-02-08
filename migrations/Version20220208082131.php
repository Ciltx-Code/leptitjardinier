<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220208082131 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE categorie (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE client (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, ville VARCHAR(255) NOT NULL, cp INT NOT NULL, type_client VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE recap (id INT AUTO_INCREMENT NOT NULL, cif2_id INT DEFAULT NULL, date DATE NOT NULL, INDEX IDX_8B27C52BDD997971 (cif2_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE haie (id INT AUTO_INCREMENT NOT NULL, categorie_id INT DEFAULT NULL, code VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, prix NUMERIC(5, 2) NOT NULL, INDEX IDX_1F24E4DEBCF5E72D (categorie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tailler (num_haie INT NOT NULL, num_devis INT NOT NULL, INDEX IDX_447D17882E5AED30 (num_haie), INDEX IDX_447D1788CCA4745D (num_devis), PRIMARY KEY(num_haie, num_devis)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE recap ADD CONSTRAINT FK_8B27C52BDD997971 FOREIGN KEY (cif2_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE haie ADD CONSTRAINT FK_1F24E4DEBCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id)');
        $this->addSql('ALTER TABLE tailler ADD CONSTRAINT FK_447D17882E5AED30 FOREIGN KEY (num_haie) REFERENCES haie (id)');
        $this->addSql('ALTER TABLE tailler ADD CONSTRAINT FK_447D1788CCA4745D FOREIGN KEY (num_devis) REFERENCES recap (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE haie DROP FOREIGN KEY FK_1F24E4DEBCF5E72D');
        $this->addSql('ALTER TABLE recap DROP FOREIGN KEY FK_8B27C52BDD997971');
        $this->addSql('ALTER TABLE tailler DROP FOREIGN KEY FK_447D1788CCA4745D');
        $this->addSql('ALTER TABLE tailler DROP FOREIGN KEY FK_447D17882E5AED30');
        $this->addSql('DROP TABLE categorie');
        $this->addSql('DROP TABLE client');
        $this->addSql('DROP TABLE recap');
        $this->addSql('DROP TABLE haie');
        $this->addSql('DROP TABLE tailler');
    }
}
