<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210402151203 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE posting ADD nombre_pieces INT NOT NULL, ADD superficie INT NOT NULL, ADD loyer INT NOT NULL, ADD caution INT NOT NULL, ADD date_debut DATE NOT NULL, ADD duree_bail INT DEFAULT NULL, ADD cave TINYINT(1) NOT NULL, ADD place_parking TINYINT(1) NOT NULL, ADD ascenseur TINYINT(1) NOT NULL, ADD gardien TINYINT(1) NOT NULL, ADD balcon TINYINT(1) NOT NULL, ADD cuisine_equipee TINYINT(1) NOT NULL, ADD toilette_separee TINYINT(1) NOT NULL, ADD photos VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE posting DROP nombre_pieces, DROP superficie, DROP loyer, DROP caution, DROP date_debut, DROP duree_bail, DROP cave, DROP place_parking, DROP ascenseur, DROP gardien, DROP balcon, DROP cuisine_equipee, DROP toilette_separee, DROP photos');
    }
}
