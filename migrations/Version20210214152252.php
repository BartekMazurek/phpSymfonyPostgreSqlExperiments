<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20210214152252 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        $this->addSql('CREATE SEQUENCE "public"."user_type_id_seq" INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE "public"."user_type" (
                                            id INT NOT NULL, 
                                            name VARCHAR(50) NOT NULL, 
                                            PRIMARY KEY(id))'
        );
    }

    public function down(Schema $schema) : void
    {
        $this->addSql('DROP SEQUENCE "public"."user_type_id_seq" CASCADE');
        $this->addSql('DROP TABLE "public"."user_type"');
    }
}
