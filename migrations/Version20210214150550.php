<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20210214150550 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        $this->addSql('CREATE SEQUENCE "public"."users_id_seq" INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE "public"."users" (
                                            id INT NOT NULL, 
                                            firstname VARCHAR(50) NOT NULL, 
                                            lastname VARCHAR(50) NOT NULL, 
                                            email VARCHAR(100) NOT NULL, 
                                            created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, 
                                            modified_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, 
                                            PRIMARY KEY(id))'
        );
    }

    public function down(Schema $schema) : void
    {
        $this->addSql('DROP SEQUENCE "public"."users_id_seq" CASCADE');
        $this->addSql('DROP TABLE "public"."users"');
    }
}
