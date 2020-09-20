<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200919230154 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE userr (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_6384957FE7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE base CHANGE user_id_id user_id_id INT DEFAULT NULL, CHANGE bedrijfsnaam bedrijfsnaam VARCHAR(255) DEFAULT NULL, CHANGE logo logo VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE btw CHANGE percentage percentage INT DEFAULT NULL');
        $this->addSql('ALTER TABLE factuur CHANGE user_id_id user_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE factuur_regel CHANGE factuur_id_id factuur_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE image CHANGE product_id_id product_id_id INT DEFAULT NULL, CHANGE image_name image_name VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE meno CHANGE user_id_id user_id_id INT DEFAULT NULL, CHANGE title title VARCHAR(100) DEFAULT NULL, CHANGE content content VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE product CHANGE btw_id_id btw_id_id INT DEFAULT NULL, CHANGE naam naam VARCHAR(255) DEFAULT NULL, CHANGE prijs prijs DOUBLE PRECISION DEFAULT NULL, CHANGE frontpage frontpage VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE user CHANGE roles roles VARCHAR(255) DEFAULT NULL, CHANGE naw naw VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE userr');
        $this->addSql('ALTER TABLE base CHANGE user_id_id user_id_id INT DEFAULT NULL, CHANGE bedrijfsnaam bedrijfsnaam VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE logo logo VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE btw CHANGE percentage percentage INT DEFAULT NULL');
        $this->addSql('ALTER TABLE factuur CHANGE user_id_id user_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE factuur_regel CHANGE factuur_id_id factuur_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE image CHANGE product_id_id product_id_id INT DEFAULT NULL, CHANGE image_name image_name VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE meno CHANGE user_id_id user_id_id INT DEFAULT NULL, CHANGE title title VARCHAR(100) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE content content VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE product CHANGE btw_id_id btw_id_id INT DEFAULT NULL, CHANGE naam naam VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE prijs prijs DOUBLE PRECISION DEFAULT \'NULL\', CHANGE frontpage frontpage VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE user CHANGE roles roles VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE naw naw VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
    }
}
