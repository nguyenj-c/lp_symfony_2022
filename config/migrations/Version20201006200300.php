<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201006200300 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Library data';
    }

    public function up(Schema $schema): void
    {
$this->addSql("insert into library (id, name) values (1, 'Miguel Hidalgo');");
$this->addSql("insert into library (id, name) values (2, 'Leonidovo');");
$this->addSql("insert into library (id, name) values (3, 'Chonghe');");
$this->addSql("insert into library (id, name) values (4, 'Berezayka');");
$this->addSql("insert into library (id, name) values (5, 'Kolç');");
$this->addSql("insert into library (id, name) values (6, 'Kadusimbar');");
$this->addSql("insert into library (id, name) values (7, 'Biny Selo');");
$this->addSql("insert into library (id, name) values (8, 'Cabittaogan');");
$this->addSql("insert into library (id, name) values (9, 'Nine');");
$this->addSql("insert into library (id, name) values (10, 'Puyang');");
$this->addSql("insert into library (id, name) values (11, 'Pantang');");
$this->addSql("insert into library (id, name) values (12, 'Little Rock');");
$this->addSql("insert into library (id, name) values (13, 'Zangzhai');");
$this->addSql("insert into library (id, name) values (14, 'Pamplona/Iruña');");
$this->addSql("insert into library (id, name) values (15, 'Lille');");
$this->addSql("insert into library (id, name) values (16, 'Xinchengzi');");
$this->addSql("insert into library (id, name) values (17, 'Ash Shuyūkh');");
$this->addSql("insert into library (id, name) values (18, 'Vlachovice');");
$this->addSql("insert into library (id, name) values (19, 'Židlochovice');");
$this->addSql("insert into library (id, name) values (20, 'Lacombe');");
$this->addSql("insert into library (id, name) values (21, 'Krajan Tengah');");
$this->addSql("insert into library (id, name) values (22, 'Ōno-hara');");
$this->addSql("insert into library (id, name) values (23, 'Santana');");
$this->addSql("insert into library (id, name) values (24, 'Sumusţā as Sulţānī');");
$this->addSql("insert into library (id, name) values (25, 'Mauhao');");
$this->addSql("insert into library (id, name) values (26, 'San Rafael');");
$this->addSql("insert into library (id, name) values (27, 'Vera Cruz');");
$this->addSql("insert into library (id, name) values (28, 'Manalad');");
$this->addSql("insert into library (id, name) values (29, 'Kembang');");
$this->addSql("insert into library (id, name) values (30, 'Baltimore');");
$this->addSql("insert into library (id, name) values (31, 'Lagoa Santa');");
$this->addSql("insert into library (id, name) values (32, 'Kayakent');");
$this->addSql("insert into library (id, name) values (33, 'Umeå');");
$this->addSql("insert into library (id, name) values (34, 'São Paio de Seide');");
$this->addSql("insert into library (id, name) values (35, 'Chociwel');");
$this->addSql("insert into library (id, name) values (36, 'Herzliya Pituah');");
$this->addSql("insert into library (id, name) values (37, 'Kalianget');");
$this->addSql("insert into library (id, name) values (38, 'Cincinnati');");
$this->addSql("insert into library (id, name) values (39, 'Maroa');");
$this->addSql("insert into library (id, name) values (40, 'Zhonghechang');");
$this->addSql("insert into library (id, name) values (41, 'Douane');");
$this->addSql("insert into library (id, name) values (42, 'Gaotai');");
$this->addSql("insert into library (id, name) values (43, 'Takari');");
$this->addSql("insert into library (id, name) values (44, 'Kafr Sawm');");
$this->addSql("insert into library (id, name) values (45, 'Golug');");
$this->addSql("insert into library (id, name) values (46, 'Tunggar');");
$this->addSql("insert into library (id, name) values (47, 'Caomiao');");
$this->addSql("insert into library (id, name) values (48, 'Lecherías');");
$this->addSql("insert into library (id, name) values (49, 'Parintins');");
$this->addSql("insert into library (id, name) values (50, 'Baofeng');");
$this->addSql("insert into library (id, name) values (51, 'Malaryta');");
$this->addSql("insert into library (id, name) values (52, 'Linshui');");
$this->addSql("insert into library (id, name) values (53, 'Coripata');");
$this->addSql("insert into library (id, name) values (54, 'Novokuybyshevsk');");
$this->addSql("insert into library (id, name) values (55, 'Karkkila');");
$this->addSql("insert into library (id, name) values (56, 'Jingang');");
$this->addSql("insert into library (id, name) values (57, 'Lesnoye');");
$this->addSql("insert into library (id, name) values (58, 'Ayotupas');");
$this->addSql("insert into library (id, name) values (59, 'Francisco Villa');");
$this->addSql("insert into library (id, name) values (60, 'Orekhovo-Zuyevo');");
$this->addSql("insert into library (id, name) values (61, 'Yanaoca');");
$this->addSql("insert into library (id, name) values (62, 'Dijon');");
$this->addSql("insert into library (id, name) values (63, 'Piteå');");
$this->addSql("insert into library (id, name) values (64, 'Komorniki');");
$this->addSql("insert into library (id, name) values (65, 'Ban Tak');");
$this->addSql("insert into library (id, name) values (66, 'Rāwandūz');");
$this->addSql("insert into library (id, name) values (67, 'Yatsuomachi-higashikumisaka');");
$this->addSql("insert into library (id, name) values (68, 'Buseresere');");
$this->addSql("insert into library (id, name) values (69, 'Wonokerto');");
$this->addSql("insert into library (id, name) values (70, 'Qal‘eh-ye Khvājeh');");
$this->addSql("insert into library (id, name) values (71, 'Três Passos');");
$this->addSql("insert into library (id, name) values (72, 'Itatuba');");
$this->addSql("insert into library (id, name) values (73, 'Goyang-si');");
$this->addSql("insert into library (id, name) values (74, 'Nizhyn');");
$this->addSql("insert into library (id, name) values (75, 'Haiyanmiao');");
$this->addSql("insert into library (id, name) values (76, 'Lipin Bor');");
$this->addSql("insert into library (id, name) values (77, 'Borbon');");
$this->addSql("insert into library (id, name) values (78, 'Pervomayskoye');");
$this->addSql("insert into library (id, name) values (79, 'Kuilehe');");
$this->addSql("insert into library (id, name) values (80, 'Raemude');");
$this->addSql("insert into library (id, name) values (81, 'Kanugrahan');");
$this->addSql("insert into library (id, name) values (82, 'Unity');");
$this->addSql("insert into library (id, name) values (83, 'Zarrīn Shahr');");
$this->addSql("insert into library (id, name) values (84, 'Constantia');");
$this->addSql("insert into library (id, name) values (85, 'Biggar');");
$this->addSql("insert into library (id, name) values (86, 'Cobre');");
$this->addSql("insert into library (id, name) values (87, 'Bamusso');");
$this->addSql("insert into library (id, name) values (88, 'Vista Hermosa');");
$this->addSql("insert into library (id, name) values (89, 'Dangbigih');");
$this->addSql("insert into library (id, name) values (90, 'Wu’erbu Baolige');");
$this->addSql("insert into library (id, name) values (91, 'Sañgay');");
$this->addSql("insert into library (id, name) values (92, 'Mazra‘at Bayt Jinn');");
$this->addSql("insert into library (id, name) values (93, 'Jiepai');");
$this->addSql("insert into library (id, name) values (94, 'Zhantang');");
$this->addSql("insert into library (id, name) values (95, 'Quillabamba');");
$this->addSql("insert into library (id, name) values (96, 'Muraharjo');");
$this->addSql("insert into library (id, name) values (97, 'Ziyang');");
$this->addSql("insert into library (id, name) values (98, 'Sangiang');");
$this->addSql("insert into library (id, name) values (99, 'Liuhe');");
$this->addSql("insert into library (id, name) values (100, 'Mascote');");
$this->addSql("insert into library (id, name) values (101, 'Huwan');");
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
    }
}
