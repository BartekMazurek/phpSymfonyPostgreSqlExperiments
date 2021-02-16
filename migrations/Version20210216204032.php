<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20210216204032 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        $this->addSql('CREATE SEQUENCE "shop"."product_subcategory_id_seq" INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE "shop"."product_subcategory" (
                                            id INT NOT NULL, 
                                            product_category_id INT NOT NULL, 
                                            name VARCHAR(50) NOT NULL, PRIMARY KEY(id))'
        );
        $this->addSql('CREATE INDEX IDX_955175A1BE6903FD ON "shop"."product_subcategory" (product_category_id)');
        $this->addSql('ALTER TABLE "shop"."product_subcategory" 
                                    ADD CONSTRAINT FK_955175A1BE6903FD 
                                    FOREIGN KEY (product_category_id) 
                                    REFERENCES "shop"."product_category" (id) NOT DEFERRABLE INITIALLY IMMEDIATE'
        );
    }

    public function down(Schema $schema) : void
    {
        $this->addSql('ALTER TABLE "shop"."product_subcategory" DROP CONSTRAINT FK_955175A1BE6903FD');
        $this->addSql('DROP SEQUENCE "shop"."product_subcategory_id_seq" CASCADE');
        $this->addSql('DROP TABLE "shop"."product_subcategory"');
    }
}
