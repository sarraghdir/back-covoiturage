<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241203210342 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE trajet ADD passager_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE trajet ADD CONSTRAINT FK_2B5BA98C71A51189 FOREIGN KEY (passager_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_2B5BA98C71A51189 ON trajet (passager_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE trajet DROP FOREIGN KEY FK_2B5BA98C71A51189');
        $this->addSql('DROP INDEX IDX_2B5BA98C71A51189 ON trajet');
        $this->addSql('ALTER TABLE trajet DROP passager_id');
    }
}
