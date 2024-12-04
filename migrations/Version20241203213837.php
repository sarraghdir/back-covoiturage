<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241203213837 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE notification_preferences ADD user_id INT NOT NULL');
        $this->addSql('ALTER TABLE notification_preferences ADD CONSTRAINT FK_3CAA95B4A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_3CAA95B4A76ED395 ON notification_preferences (user_id)');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6499E23A769');
        $this->addSql('DROP INDEX IDX_8D93D6499E23A769 ON user');
        $this->addSql('ALTER TABLE user DROP notification_preferences_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user ADD notification_preferences_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6499E23A769 FOREIGN KEY (notification_preferences_id) REFERENCES notification_preferences (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_8D93D6499E23A769 ON user (notification_preferences_id)');
        $this->addSql('ALTER TABLE notification_preferences DROP FOREIGN KEY FK_3CAA95B4A76ED395');
        $this->addSql('DROP INDEX IDX_3CAA95B4A76ED395 ON notification_preferences');
        $this->addSql('ALTER TABLE notification_preferences DROP user_id');
    }
}