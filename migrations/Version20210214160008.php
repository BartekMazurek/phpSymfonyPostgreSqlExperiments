<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20210214160008 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        $this->addSql('ALTER TABLE "public"."users" ADD COLUMN user_type_id INT');
        $this->addSql('CREATE INDEX IDX_2552C48D9D419299 ON "public"."users" (user_type_id)');
        $this->addSql('ALTER TABLE "public"."users" 
                                            ADD CONSTRAINT FK_2552C48D9D419299 
                                            FOREIGN KEY (user_type_id) 
                                            REFERENCES "public"."user_type" (id)
                                            NOT DEFERRABLE INITIALLY IMMEDIATE'
        );
    }

    public function down(Schema $schema) : void
    {
        $this->addSql('ALTER TABLE "public"."users" DROP CONSTRAINT FK_2552C48D9D419299');
        $this->addSql('ALTER TABLE "public"."users" DROP CONSTRAINT user_type_id');
    }
}
