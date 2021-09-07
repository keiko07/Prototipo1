<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210901152139 extends AbstractMigration
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
        $this->addSql('ALTER TABLE TbEstadosInforme CHANGE CodigoEstado CodigoEstado INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE TbNovedadesInformes CHANGE CodigoNovedad CodigoNovedad INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE auditoria CHANGE id_interfaz id_interfaz TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE auxiliar CHANGE grupo1 grupo1 TINYINT(1) DEFAULT NULL, CHANGE orden1 orden1 INT DEFAULT NULL, CHANGE orden2 orden2 INT DEFAULT NULL, CHANGE auxiliar1 auxiliar1 INT DEFAULT NULL, CHANGE auxiliar2 auxiliar2 INT DEFAULT NULL, CHANGE auxiliar3 auxiliar3 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE banco CHANGE orden orden INT DEFAULT NULL');
        $this->addSql('ALTER TABLE criterio CHANGE id id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE cuenta CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE chequeo chequeo TINYINT(1) DEFAULT NULL, CHANGE categoria3 categoria3 INT DEFAULT NULL, CHANGE orden1 orden1 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE estado CHANGE cod_estado cod_estado VARCHAR(1) NOT NULL, CHANGE id id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE estado_gestion_pago_efectivo CHANGE id id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE forma CHANGE orden_categoria_forma orden_categoria_forma TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE gestion_registro CHANGE chequeo chequeo TINYINT(1) DEFAULT NULL, CHANGE mk mk TINYINT(1) DEFAULT NULL, CHANGE id_interfaz id_interfaz TINYINT(1) DEFAULT NULL, CHANGE importe importe DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE objeto CHANGE IdObjeto IdObjeto VARCHAR(10) NOT NULL, CHANGE codigo_objeto codigo_objeto TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE pago_efectivo CHANGE Chequeo Chequeo TINYINT(1) DEFAULT NULL, CHANGE NumeroPago NumeroPago INT DEFAULT NULL, CHANGE importe importe INT DEFAULT NULL');
        $this->addSql('ALTER TABLE periodo CHANGE id_referencia id_referencia INT DEFAULT NULL');
        $this->addSql('ALTER TABLE permiso CHANGE id id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE secuencia_registro CHANGE id_interfaz id_interfaz TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE soporte_aplicacion CHANGE chequeo chequeo TINYINT(1) DEFAULT NULL, CHANGE importe_soporte importe_soporte INT DEFAULT NULL, CHANGE importe_niquel importe_niquel INT DEFAULT NULL, CHANGE importe_otros importe_otros INT DEFAULT NULL, CHANGE importe_aplicar importe_aplicar INT DEFAULT NULL, CHANGE importe_aplicado_rm importe_aplicado_rm INT DEFAULT NULL, CHANGE importe_aplicado importe_aplicado INT DEFAULT NULL');
        $this->addSql('ALTER TABLE tiempo CHANGE id_referencia id_referencia INT DEFAULT NULL, CHANGE tiempo tiempo INT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE Cias1 CHANGE Id Id VARCHAR(5) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`');
        $this->addSql('ALTER TABLE TbCasilla CHANGE UsuarioCasilla UsuarioCasilla VARCHAR(30) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`');
        $this->addSql('ALTER TABLE TbEstadosInforme CHANGE CodigoEstado CodigoEstado INT NOT NULL');
        $this->addSql('ALTER TABLE TbNovedadesInformes CHANGE CodigoNovedad CodigoNovedad INT NOT NULL');
        $this->addSql('ALTER TABLE auditoria CHANGE id_interfaz id_interfaz TINYINT(1) DEFAULT \'0\'');
        $this->addSql('ALTER TABLE auxiliar DROP FOREIGN KEY FK_407BE8B2B6E7F4B5');
        $this->addSql('ALTER TABLE auxiliar CHANGE grupo1 grupo1 TINYINT(1) DEFAULT \'0\', CHANGE orden1 orden1 INT DEFAULT 0, CHANGE orden2 orden2 INT DEFAULT 0, CHANGE auxiliar1 auxiliar1 INT DEFAULT 0, CHANGE auxiliar2 auxiliar2 INT DEFAULT 0, CHANGE auxiliar3 auxiliar3 INT DEFAULT 0');
        $this->addSql('ALTER TABLE banco CHANGE orden orden INT DEFAULT 0');
        $this->addSql('ALTER TABLE criterio CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE cuenta CHANGE id id INT NOT NULL, CHANGE chequeo chequeo TINYINT(1) DEFAULT \'0\', CHANGE categoria3 categoria3 INT DEFAULT 0, CHANGE orden1 orden1 INT DEFAULT 0');
        $this->addSql('ALTER TABLE estado CHANGE cod_estado cod_estado VARCHAR(1) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, CHANGE id id INT DEFAULT 0');
        $this->addSql('ALTER TABLE estado_gestion_pago_efectivo CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE forma CHANGE orden_categoria_forma orden_categoria_forma TINYINT(1) DEFAULT \'0\'');
        $this->addSql('ALTER TABLE gestion_registro CHANGE chequeo chequeo TINYINT(1) DEFAULT \'0\', CHANGE mk mk TINYINT(1) DEFAULT \'0\', CHANGE id_interfaz id_interfaz TINYINT(1) DEFAULT \'0\', CHANGE importe importe DOUBLE PRECISION DEFAULT \'0\'');
        $this->addSql('ALTER TABLE objeto CHANGE IdObjeto IdObjeto VARCHAR(10) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, CHANGE codigo_objeto codigo_objeto TINYINT(1) DEFAULT \'0\'');
        $this->addSql('ALTER TABLE pago_efectivo CHANGE Chequeo Chequeo TINYINT(1) DEFAULT \'0\', CHANGE NumeroPago NumeroPago INT DEFAULT 0, CHANGE importe importe INT DEFAULT 0');
        $this->addSql('ALTER TABLE periodo CHANGE id_referencia id_referencia INT DEFAULT 0');
        $this->addSql('ALTER TABLE permiso CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE secuencia_registro CHANGE id_interfaz id_interfaz TINYINT(1) DEFAULT \'0\'');
        $this->addSql('ALTER TABLE soporte_aplicacion CHANGE chequeo chequeo TINYINT(1) DEFAULT \'0\', CHANGE importe_soporte importe_soporte INT DEFAULT 0, CHANGE importe_niquel importe_niquel INT DEFAULT 0, CHANGE importe_otros importe_otros INT DEFAULT 0, CHANGE importe_aplicar importe_aplicar INT DEFAULT 0, CHANGE importe_aplicado_rm importe_aplicado_rm INT DEFAULT 0, CHANGE importe_aplicado importe_aplicado INT DEFAULT 0');
        $this->addSql('ALTER TABLE tiempo CHANGE id_referencia id_referencia INT DEFAULT 0, CHANGE tiempo tiempo INT DEFAULT 0');
    }
}
