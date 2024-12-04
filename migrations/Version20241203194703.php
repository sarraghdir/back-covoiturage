<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241203194703 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE notification_preferences (id INT AUTO_INCREMENT NOT NULL, receive_booking_reminders TINYINT(1) NOT NULL, receive_new_trip_alerts TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user ADD notification_preferences_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6499E23A769 FOREIGN KEY (notification_preferences_id) REFERENCES notification_preferences (id)');
        $this->addSql('CREATE INDEX IDX_8D93D6499E23A769 ON user (notification_preferences_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6499E23A769');
        $this->addSql('DROP TABLE notification_preferences');
        $this->addSql('DROP INDEX IDX_8D93D6499E23A769 ON user');
        $this->addSql('ALTER TABLE user DROP notification_preferences_id');
    }
}
