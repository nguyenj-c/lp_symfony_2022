<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201006200400 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Library data';
    }

    public function up(Schema $schema): void
    {
        $this->addSql("insert into utilisateur (id, first_name, last_name) values (1, 'Pénélope', 'Braunes');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (2, 'Cécile', 'Mackro');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (3, 'Styrbjörn', 'Henfre');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (4, 'Lorène', 'Bly');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (5, 'Måns', 'Enga');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (6, 'Vénus', 'Tuckett');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (7, 'Mélys', 'Bedberry');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (8, 'Nadège', 'Balsdon');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (9, 'Mélina', 'Scothorn');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (10, 'Loïca', 'Iggulden');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (11, 'Kù', 'Hanratty');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (12, 'Åslög', 'Hounsham');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (13, 'Marie-hélène', 'Bachelor');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (14, 'Méryl', 'Whitlow');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (15, 'Anaëlle', 'Barttrum');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (16, 'Méng', 'Norkett');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (17, 'Mahélie', 'Leishman');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (18, 'Méng', 'Tytler');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (19, 'Kallisté', 'Gaytor');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (20, 'Görel', 'Mattioli');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (21, 'Maïté', 'Balling');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (22, 'Märta', 'Brunnen');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (23, 'Björn', 'Loweth');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (24, 'Marie-thérèse', 'Dallimare');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (25, 'Gérald', 'Kase');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (26, 'Håkan', 'Blazi');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (27, 'Célia', 'Sketh');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (28, 'Vénus', 'Hugli');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (29, 'Léana', 'Gawke');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (30, 'Maïlis', 'Tonge');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (31, 'Ophélie', 'Jonke');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (32, 'Inès', 'Mandrier');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (33, 'Françoise', 'Creaney');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (34, 'Alizée', 'MacBain');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (35, 'Simplifiés', 'Divell');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (36, 'Yóu', 'Adamiec');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (37, 'Maïté', 'Normavill');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (38, 'Rachèle', 'Callaghan');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (39, 'Alizée', 'Birmingham');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (40, 'Andréanne', 'Mollin');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (41, 'Mélanie', 'Pennycuick');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (42, 'Cécilia', 'Dyerson');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (43, 'Tú', 'Dawidman');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (44, 'Réservés', 'Nestor');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (45, 'Anaël', 'Scorton');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (46, 'Réservés', 'Atkin');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (47, 'Liè', 'Hargroves');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (48, 'Maëly', 'Neachell');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (49, 'Mén', 'Hasely');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (50, 'Tán', 'Willden');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (51, 'Clémence', 'Halpeine');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (52, 'Nuó', 'Simacek');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (53, 'Méline', 'Happel');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (54, 'Léana', 'Leavy');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (55, 'Mylène', 'Atwill');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (56, 'Annotée', 'Cleevely');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (57, 'Mélissandre', 'Iacomi');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (58, 'Maï', 'Aizikov');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (59, 'Mélodie', 'Ingley');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (60, 'Maéna', 'Hache');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (61, 'Maëlyss', 'Leat');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (62, 'Yè', 'Coughan');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (63, 'Mélodie', 'Kelsow');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (64, 'Irène', 'Rivel');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (65, 'Kallisté', 'Dunrige');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (66, 'Danièle', 'Madelin');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (67, 'Tán', 'Mc Gaughey');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (68, 'Annotés', 'Northway');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (69, 'Esbjörn', 'Cuberley');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (70, 'Eliès', 'Skocroft');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (71, 'Geneviève', 'Bullocke');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (72, 'Océanne', 'Cribbins');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (73, 'Dà', 'Clayden');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (74, 'Vénus', 'MacKimm');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (75, 'Simplifiés', 'Chape');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (76, 'Gérald', 'Giles');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (77, 'Aloïs', 'Fields');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (78, 'Maëline', 'Lorraway');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (79, 'Maïwenn', 'Thominga');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (80, 'Lucrèce', 'Benne');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (81, 'Geneviève', 'Littefair');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (82, 'Göran', 'Mityashev');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (83, 'Séverine', 'Jelliman');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (84, 'Valérie', 'Bister');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (85, 'Inès', 'Ianiello');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (86, 'Eliès', 'Perulli');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (87, 'Océanne', 'Smith');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (88, 'Marylène', 'Darcey');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (89, 'Frédérique', 'Rowson');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (90, 'Yú', 'Leopold');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (91, 'Léone', 'Prawle');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (92, 'Loïc', 'Gerckens');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (93, 'Cécile', 'Bettam');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (94, 'Renée', 'Felder');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (95, 'Bérénice', 'Ciobotaro');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (96, 'Mén', 'Closs');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (97, 'Léandre', 'Marsden');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (98, 'Uò', 'Elliott');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (99, 'Laïla', 'Biaggioli');");
$this->addSql("insert into utilisateur (id, first_name, last_name) values (100, 'Véronique', 'Meenehan');");
                
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
    }
}
