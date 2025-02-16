<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250216104713 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Create house table with title, description, address, price_per_night, house_type, status, and created_at fields.';
    }

    public function up(Schema $schema): void
    {
        // Creating the house table
        $this->addSql('CREATE TABLE house (
            id INT AUTO_INCREMENT NOT NULL,
            title VARCHAR(255) NOT NULL,
            description LONGTEXT DEFAULT NULL,
            address VARCHAR(255) NOT NULL,
            price_per_night DECIMAL(10, 2) NOT NULL,
            house_type ENUM("apartment", "house", "villa", "studio") NOT NULL,
            status ENUM("available", "booked", "inactive") DEFAULT "available" NOT NULL,
            created_at DATETIME NOT NULL,
            PRIMARY KEY(id)
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // Dropping the house table
        $this->addSql('DROP TABLE house');
    }
}
