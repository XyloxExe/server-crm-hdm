<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230726073724 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE contract (id INT AUTO_INCREMENT NOT NULL, client_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, pdf VARCHAR(255) NOT NULL, INDEX IDX_E98F285919EB6921 (client_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE project (id INT AUTO_INCREMENT NOT NULL, status_id INT DEFAULT NULL, pole_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, date DATE NOT NULL, INDEX IDX_2FB3D0EE6BF700BD (status_id), INDEX IDX_2FB3D0EE419C3385 (pole_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE contract ADD CONSTRAINT FK_E98F285919EB6921 FOREIGN KEY (client_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE project ADD CONSTRAINT FK_2FB3D0EE6BF700BD FOREIGN KEY (status_id) REFERENCES status (id)');
        $this->addSql('ALTER TABLE project ADD CONSTRAINT FK_2FB3D0EE419C3385 FOREIGN KEY (pole_id) REFERENCES pole (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contract DROP FOREIGN KEY FK_E98F285919EB6921');
        $this->addSql('ALTER TABLE project DROP FOREIGN KEY FK_2FB3D0EE6BF700BD');
        $this->addSql('ALTER TABLE project DROP FOREIGN KEY FK_2FB3D0EE419C3385');
        $this->addSql('DROP TABLE contract');
        $this->addSql('DROP TABLE project');
    }
}
