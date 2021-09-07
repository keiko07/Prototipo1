<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210903195323 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE Cias1 CHANGE Id Id VARCHAR(5) NOT NULL');
        $this->addSql('ALTER TABLE TbCasilla CHANGE UsuarioCasilla UsuarioCasilla VARCHAR(30) NOT NULL');
        $this->addSql('ALTER TABLE estado CHANGE cod_estado cod_estado VARCHAR(1) NOT NULL');
        $this->addSql('ALTER TABLE objeto CHANGE IdObjeto IdObjeto VARCHAR(10) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE Cias1 CHANGE Id Id VARCHAR(5) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`');
        $this->addSql('ALTER TABLE TbCasilla CHANGE UsuarioCasilla UsuarioCasilla VARCHAR(30) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`');
        $this->addSql('ALTER TABLE auxiliar DROP FOREIGN KEY FK_407BE8B2F6939175');
        $this->addSql('ALTER TABLE auxiliar DROP FOREIGN KEY FK_407BE8B297DD048E');
        $this->addSql('ALTER TABLE auxiliar DROP FOREIGN KEY FK_407BE8B2B11A452F');
        $this->addSql('ALTER TABLE auxiliar DROP FOREIGN KEY FK_407BE8B2B6E7F4B5');
        $this->addSql('ALTER TABLE estado CHANGE cod_estado cod_estado VARCHAR(1) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`');
        $this->addSql('ALTER TABLE objeto CHANGE IdObjeto IdObjeto VARCHAR(10) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`');
    }
}
