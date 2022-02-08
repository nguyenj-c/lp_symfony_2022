<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201006200100 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Category data';
    }

    public function up(Schema $schema): void
    {
$this->addSql("insert into category (id, label) values (1, 'Documentary');");
$this->addSql("insert into category (id, label) values (2, 'Children|Comedy');");
$this->addSql("insert into category (id, label) values (3, 'Comedy');");
$this->addSql("insert into category (id, label) values (4, 'Film-Noir|Thriller');");
$this->addSql("insert into category (id, label) values (5, 'Comedy|War');");
$this->addSql("insert into category (id, label) values (6, 'Drama');");
$this->addSql("insert into category (id, label) values (7, 'Drama');");
$this->addSql("insert into category (id, label) values (8, 'Action');");
$this->addSql("insert into category (id, label) values (9, 'Drama|Romance');");
$this->addSql("insert into category (id, label) values (10, 'Documentary');");
$this->addSql("insert into category (id, label) values (11, 'Adventure|Western');");
$this->addSql("insert into category (id, label) values (12, 'Comedy|Crime|Thriller');");
$this->addSql("insert into category (id, label) values (13, 'Documentary');");
$this->addSql("insert into category (id, label) values (14, 'Action|Adventure|Comedy|Drama|War');");
$this->addSql("insert into category (id, label) values (15, 'Drama|Romance|War');");
$this->addSql("insert into category (id, label) values (16, 'Drama|Mystery|Thriller');");
$this->addSql("insert into category (id, label) values (17, 'Drama|Romance|War');");
$this->addSql("insert into category (id, label) values (18, 'Comedy|Horror');");
$this->addSql("insert into category (id, label) values (19, 'Drama');");
$this->addSql("insert into category (id, label) values (20, 'Comedy|Drama|Musical');");
$this->addSql("insert into category (id, label) values (21, 'Crime|Drama');");
$this->addSql("insert into category (id, label) values (22, 'Action|Crime');");
$this->addSql("insert into category (id, label) values (23, 'Comedy');");
$this->addSql("insert into category (id, label) values (24, 'Adventure|Children|Fantasy');");
$this->addSql("insert into category (id, label) values (25, 'Drama');");
$this->addSql("insert into category (id, label) values (26, 'Action|Drama|Mystery');");
$this->addSql("insert into category (id, label) values (27, 'Horror');");
$this->addSql("insert into category (id, label) values (28, 'Comedy|Horror');");
$this->addSql("insert into category (id, label) values (29, 'Drama|Horror|Thriller');");
$this->addSql("insert into category (id, label) values (30, 'Comedy|Musical');");
$this->addSql("insert into category (id, label) values (31, 'Comedy');");
$this->addSql("insert into category (id, label) values (32, 'Action|Mystery|Thriller');");
$this->addSql("insert into category (id, label) values (33, 'Thriller|War');");
$this->addSql("insert into category (id, label) values (34, 'Action|Children|Sci-Fi|IMAX');");
$this->addSql("insert into category (id, label) values (35, 'Comedy');");
$this->addSql("insert into category (id, label) values (36, 'Drama');");
$this->addSql("insert into category (id, label) values (37, 'Horror');");
$this->addSql("insert into category (id, label) values (38, 'Drama');");
$this->addSql("insert into category (id, label) values (39, 'Drama');");
$this->addSql("insert into category (id, label) values (40, 'Drama|Film-Noir|Thriller');");
$this->addSql("insert into category (id, label) values (41, 'Documentary|Musical');");
$this->addSql("insert into category (id, label) values (42, 'Comedy|Fantasy');");
$this->addSql("insert into category (id, label) values (43, 'Crime|Thriller');");
$this->addSql("insert into category (id, label) values (44, 'Drama');");
$this->addSql("insert into category (id, label) values (45, 'Drama');");
$this->addSql("insert into category (id, label) values (46, 'Documentary');");
$this->addSql("insert into category (id, label) values (47, 'Drama|Musical|Romance');");
$this->addSql("insert into category (id, label) values (48, 'Action|Horror|Thriller');");
$this->addSql("insert into category (id, label) values (49, 'Comedy|Drama');");
$this->addSql("insert into category (id, label) values (50, 'Drama');");
$this->addSql("insert into category (id, label) values (51, 'Action|Crime');");
$this->addSql("insert into category (id, label) values (52, 'Drama');");
$this->addSql("insert into category (id, label) values (53, 'Comedy');");
$this->addSql("insert into category (id, label) values (54, 'Adventure|Comedy|Fantasy');");
$this->addSql("insert into category (id, label) values (55, 'Action|Sci-Fi');");
$this->addSql("insert into category (id, label) values (56, 'Crime|Drama|Mystery');");
$this->addSql("insert into category (id, label) values (57, 'Comedy|Drama');");
$this->addSql("insert into category (id, label) values (58, 'Drama|Romance');");
$this->addSql("insert into category (id, label) values (59, 'Crime|Drama|Thriller');");
$this->addSql("insert into category (id, label) values (60, 'Comedy');");
$this->addSql("insert into category (id, label) values (61, 'Drama|Horror|Thriller');");
$this->addSql("insert into category (id, label) values (62, 'Drama');");
$this->addSql("insert into category (id, label) values (63, 'Drama|Romance');");
$this->addSql("insert into category (id, label) values (64, 'Action|Thriller');");
$this->addSql("insert into category (id, label) values (65, 'Drama');");
$this->addSql("insert into category (id, label) values (66, 'Animation');");
$this->addSql("insert into category (id, label) values (67, 'Crime|Drama|Mystery|Thriller');");
$this->addSql("insert into category (id, label) values (68, 'Comedy|Mystery|Romance');");
$this->addSql("insert into category (id, label) values (69, 'Documentary');");
$this->addSql("insert into category (id, label) values (70, 'Drama');");
$this->addSql("insert into category (id, label) values (71, '(no genres listed)');");
$this->addSql("insert into category (id, label) values (72, 'Documentary');");
$this->addSql("insert into category (id, label) values (73, 'Comedy|Romance');");
$this->addSql("insert into category (id, label) values (74, 'Horror|Sci-Fi|Thriller');");
$this->addSql("insert into category (id, label) values (75, 'Comedy');");
$this->addSql("insert into category (id, label) values (76, 'Comedy|Crime');");
$this->addSql("insert into category (id, label) values (77, 'Comedy|Drama');");
$this->addSql("insert into category (id, label) values (78, 'Comedy|Crime|Mystery|Thriller');");
$this->addSql("insert into category (id, label) values (79, 'Comedy|Drama');");
$this->addSql("insert into category (id, label) values (80, 'Comedy|Drama');");
$this->addSql("insert into category (id, label) values (81, 'Horror');");
$this->addSql("insert into category (id, label) values (82, 'Romance|Western');");
$this->addSql("insert into category (id, label) values (83, 'Comedy|Drama|Romance');");
$this->addSql("insert into category (id, label) values (84, 'Drama|Sci-Fi|Thriller');");
$this->addSql("insert into category (id, label) values (85, 'Musical');");
$this->addSql("insert into category (id, label) values (86, 'Adventure|Fantasy|Romance');");
$this->addSql("insert into category (id, label) values (87, 'Sci-Fi');");
$this->addSql("insert into category (id, label) values (88, 'Drama|Musical');");
$this->addSql("insert into category (id, label) values (89, 'Drama|Horror');");
$this->addSql("insert into category (id, label) values (90, 'Action|Drama|Sci-Fi|Thriller');");
$this->addSql("insert into category (id, label) values (91, 'Drama|Romance');");
$this->addSql("insert into category (id, label) values (92, 'Comedy|Musical');");
$this->addSql("insert into category (id, label) values (93, 'Drama');");
$this->addSql("insert into category (id, label) values (94, 'Action|Comedy|Crime');");
$this->addSql("insert into category (id, label) values (95, 'Comedy|Fantasy');");
$this->addSql("insert into category (id, label) values (96, 'Action|Comedy');");
$this->addSql("insert into category (id, label) values (97, 'Comedy');");
$this->addSql("insert into category (id, label) values (98, 'Drama|Romance');");
$this->addSql("insert into category (id, label) values (99, 'Action|Adventure');");
$this->addSql("insert into category (id, label) values (100, 'Drama|Horror|Thriller');");
$this->addSql("insert into category (id, label) values (101, 'Thriller');");

    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
    }
}
