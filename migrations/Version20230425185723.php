<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230425185723 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE client CHANGE nom_client nom_client VARCHAR(255) NOT NULL, CHANGE prenom_client prenom_client VARCHAR(255) NOT NULL, CHANGE ville_client ville_client VARCHAR(255) NOT NULL, CHANGE email_client email_client VARCHAR(255) NOT NULL, CHANGE mdp_client mdp_client VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE conducteur CHANGE nom_conducteur nom_conducteur VARCHAR(255) NOT NULL, CHANGE prenom_conducteur prenom_conducteur VARCHAR(255) NOT NULL, CHANGE ville_conducteur ville_conducteur VARCHAR(255) NOT NULL, CHANGE email_conducteur email_conducteur VARCHAR(255) NOT NULL, CHANGE mdp_conducteur mdp_conducteur VARCHAR(255) NOT NULL, CHANGE type_de_permis type_de_permis VARCHAR(255) NOT NULL, CHANGE image_conducteur image_conducteur VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE client CHANGE nom_client nom_client VARCHAR(30) NOT NULL, CHANGE prenom_client prenom_client VARCHAR(30) NOT NULL, CHANGE ville_client ville_client VARCHAR(30) NOT NULL, CHANGE email_client email_client VARCHAR(200) NOT NULL, CHANGE mdp_client mdp_client VARCHAR(30) NOT NULL');
        $this->addSql('ALTER TABLE conducteur CHANGE nom_conducteur nom_conducteur VARCHAR(50) NOT NULL, CHANGE prenom_conducteur prenom_conducteur VARCHAR(50) NOT NULL, CHANGE email_conducteur email_conducteur VARCHAR(200) NOT NULL, CHANGE ville_conducteur ville_conducteur VARCHAR(50) NOT NULL, CHANGE mdp_conducteur mdp_conducteur VARCHAR(50) NOT NULL, CHANGE type_de_permis type_de_permis VARCHAR(11) DEFAULT NULL, CHANGE image_conducteur image_conducteur VARCHAR(255) DEFAULT NULL');
    }
}
