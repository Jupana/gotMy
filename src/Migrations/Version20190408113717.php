<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190408113717 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE gotmy_users (id INT AUTO_INCREMENT NOT NULL, user_username VARCHAR(50) NOT NULL, user_password VARCHAR(255) NOT NULL, user_email VARCHAR(30) NOT NULL, user_name VARCHAR(255) DEFAULT NULL, user_surname_1 VARCHAR(255) DEFAULT NULL, user_surname_2 VARCHAR(255) DEFAULT NULL, user_perfil_img VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_82AC373718D3E277 (user_username), UNIQUE INDEX UNIQ_82AC3737550872C (user_email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('DROP TABLE fsu_users');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE fsu_users (id INT AUTO_INCREMENT NOT NULL, user_username VARCHAR(50) NOT NULL COLLATE utf8mb4_unicode_ci, user_password VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, user_email VARCHAR(30) NOT NULL COLLATE utf8mb4_unicode_ci, user_name VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, user_surname_1 VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, user_surname_2 VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, user_birth_date DATETIME DEFAULT NULL, user_sex VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, user_street_type VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, user_street_name VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, user_street_number VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, user_block VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, user_apartment VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, user_city VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, user_postal_code VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, user_provincie VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, user_country VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, user_perfil_img VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, user_team_search VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, user_proyect_search VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, user_phone_number VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, user_inscription_date DATETIME DEFAULT NULL, user_latitud VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, user_longitud VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, user_IP VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, UNIQUE INDEX UNIQ_7A866DA9550872C (user_email), UNIQUE INDEX UNIQ_7A866DA918D3E277 (user_username), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE gotmy_users');
    }
}
