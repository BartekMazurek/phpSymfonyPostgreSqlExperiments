<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20210221211436 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        $this->addSql("CREATE VIEW v_users AS
                                SELECT
                                    u.id AS userId,
                                    CONCAT(u.firstname, ' ', u.lastname) AS userFullName,
                                    ut.name AS userTypeName
                                FROM users u
                                JOIN user_type ut 
                                    ON u.user_type_id = ut.id
        ");
    }

    public function down(Schema $schema) : void
    {
        $this->addSql('DROP VIEW v_users');
    }
}
