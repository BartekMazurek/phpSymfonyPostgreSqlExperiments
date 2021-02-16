<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20210215175236 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        $this->addSql('CREATE SEQUENCE "shop"."product_id_seq" INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE "shop"."product" (
                                            id INT NOT NULL, 
                                            name VARCHAR(50) NOT NULL, 
                                            description TEXT NOT NULL, 
                                            amount INT NOT NULL, 
                                            price DOUBLE PRECISION NOT NULL, 
                                            created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, 
                                            modified_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, 
                                            PRIMARY KEY(id))'
        );
    }

    public function down(Schema $schema) : void
    {
        $this->addSql('DROP TABLE "shop"."product"');
    }
}
