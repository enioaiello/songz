DROP TABLE IF EXISTS categorie;
DROP TABLE IF EXISTS chanson;
DROP TABLE IF EXISTS chanteur;

CREATE TABLE categorie (
                           id_categorie int not null,
                           libelle_categorie varchar(20) not null,
                           primary key (id_categorie)
);

CREATE TABLE chanteur (
                          id_chanteur int not null,
                          nom_chanteur varchar(20) not null,
                          primary key (id_chanteur)
);

CREATE TABLE chanson (
                         id_chanson int not null,
                         titre varchar(30) not null,
                         date date not null,
                         id_chanteur int not null,
                         id_categorie int not null,
                         primary key (id_chanson),
                         FOREIGN KEY (id_categorie) REFERENCES categorie(id_categorie),
                         FOREIGN KEY (id_chanteur) REFERENCES chanteur(id_chanteur)
);

INSERT INTO categorie (id_categorie, libelle_categorie) VALUES (1, 'Pop');
INSERT INTO categorie (id_categorie, libelle_categorie) VALUES (2, 'Rock');
INSERT INTO categorie (id_categorie, libelle_categorie) VALUES (3, 'Rap');
INSERT INTO chanteur (id_chanteur, nom_chanteur) VALUES (1, 'Akhenaton');
INSERT INTO chanteur (id_chanteur, nom_chanteur) VALUES (2, 'IAM');
INSERT INTO chanteur (id_chanteur, nom_chanteur) VALUES (3, 'Black Eyed Peas');
INSERT INTO chanson (id_chanson, titre, date, id_chanteur, id_categorie) VALUES (1, 'Meet me halfway', NOW(), 3, 1);
INSERT INTO chanson (id_chanson, titre, date, id_chanteur, id_categorie) VALUES (2, 'Pump it', NOW(), 3, 1);
INSERT INTO chanson (id_chanson, titre, date, id_chanteur, id_categorie) VALUES (3, 'Petit frère', NOW(), 2, 3);
INSERT INTO chanson (id_chanson, titre, date, id_chanteur, id_categorie) VALUES (4, 'Dangerous', NOW(), 2, 3);
INSERT INTO chanson (id_chanson, titre, date, id_chanteur, id_categorie) VALUES (5, 'Nid de guêpe', NOW(), 1, 2);
INSERT INTO chanson (id_chanson, titre, date, id_chanteur, id_categorie) VALUES (6, 'New York City Transit', NOW(), 1, 2);