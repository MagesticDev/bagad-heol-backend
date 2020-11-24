<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201030092530 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE forum DROP FOREIGN KEY FK_852BBECD12469DE2');
        $this->addSql('DROP INDEX IDX_852BBECD12469DE2 ON forum');
        $this->addSql('ALTER TABLE forum ADD category INT NOT NULL, DROP category_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE forum ADD category_id INT DEFAULT NULL, DROP category');
        $this->addSql('ALTER TABLE forum ADD CONSTRAINT FK_852BBECD12469DE2 FOREIGN KEY (category_id) REFERENCES forum_categories (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_852BBECD12469DE2 ON forum (category_id)');
    }
}
