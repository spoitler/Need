DROP TABLE IF EXISTS categories;
DROP TABLE IF EXISTS civilites;
DROP TABLE IF EXISTS couleurs;
DROP TABLE IF EXISTS types;
DROP TABLE IF EXISTS reference;
DROP TABLE IF EXISTS tailles;
DROP TABLE IF EXISTS commandes;
DROP TABLE IF EXISTS clients;
DROP TABLE IF EXISTS produits;
DROP TABLE IF EXISTS compose;


CREATE TABLE categories (
 id_categorie INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
 categorie VARCHAR(25)
);

CREATE TABLE civilites (
 id_civilite INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
 civilite VARCHAR(25)
);

CREATE TABLE couleurs (
 id_couleur INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
 couleur VARCHAR(25)
);

CREATE TABLE types (
 id_type INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
 type VARCHAR(25)
);

CREATE TABLE reference (
 id_reference INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
 reference VARCHAR(25)
);

CREATE TABLE tailles (
 id_taille INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
 taille VARCHAR(25),
 id_type int,
 CONSTRAINT fk_taille_type FOREIGN KEY (id_type) REFERENCES types(id_type)
);

CREATE TABLE clients (
 id_client INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
 nom VARCHAR(100) NOT NULL,
 prenom VARCHAR(100) NOT NULL,
 email VARCHAR(100) NOT NULL,
 id_civilite INT NOT NULL,
 date_naissance date NOT NULL,
 date_inscription date NOT NULL,
 password TEXT NOT NULL,
 CONSTRAINT fk_clients_civilites FOREIGN KEY (id_civilite) REFERENCES civilites(id_civilite)
);

CREATE TABLE commandes (
   id_commande INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
   id_client INT NOT NULL,
   date_commande date NOT NULL,
   CONSTRAINT fk_commandes_clients FOREIGN KEY (id_client) REFERENCES clients(id_client)
);

CREATE TABLE compose(
  id_compose INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  id_commande INT NOT NULL,
  id_produit INT NOT NULL,
  quantite INT NOT NULL
);

CREATE TABLE produits (
 id_produit INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
 id_taille INT NOT NULL,
 id_couleur INT NOT NULL,
 stock INT NOT NULL,
 id_reference VARCHAR(100) NOT NULL,
 id_categories VARCHAR(50) NOT NULL,
 id_type INT NOT NULL,
 prix INT NOT NULL,
 CONSTRAINT fk_produits_tailles FOREIGN KEY (id_taille) REFERENCES tailles(id_taille),
 CONSTRAINT fk_produits_couleurs FOREIGN KEY (id_couleur) REFERENCES couleurs(id_couleur),
 CONSTRAINT fk_produits_reference FOREIGN KEY (id_reference) REFERENCES reference(id_reference),
 CONSTRAINT fk_produits_categories FOREIGN KEY (id_categories) REFERENCES categories(id_categorie),
 CONSTRAINT fk_produits_types FOREIGN KEY (id_type) REFERENCES types(id_type)
);

INSERT INTO categories (categorie) VALUES ("haut");
INSERT INTO categories (categorie) VALUES ("bas");
INSERT INTO categories (categorie) VALUES ("robes");


INSERT INTO civilites (civilite) VALUES ("homme");
INSERT INTO civilites (civilite) VALUES ("femme");


INSERT INTO couleurs (couleur) VALUES ("marron");
INSERT INTO couleurs (couleur) VALUES ("bleu");
INSERT INTO couleurs (couleur) VALUES ("rouge");
INSERT INTO couleurs (couleur) VALUES ("noir");
INSERT INTO couleurs (couleur) VALUES ("vert");
INSERT INTO couleurs (couleur) VALUES ("beige");
INSERT INTO couleurs (couleur) VALUES ("gris");


INSERT INTO types (type) VALUES ("t-shirt");
INSERT INTO types (type) VALUES ("pantalon");
INSERT INTO types (type) VALUES ("pull");
INSERT INTO types (type) VALUES ("vestes");
INSERT INTO types (type) VALUES ("chaussures");
INSERT INTO types (type) VALUES ("accessoires");


INSERT INTO reference (reference) VALUES ("jo1932rum");
INSERT INTO reference (reference) VALUES ("jo2056rum");
INSERT INTO reference (reference) VALUES ("jo1282rum");
INSERT INTO reference (reference) VALUES ("jo5678rum");
INSERT INTO reference (reference) VALUES ("jo4125rum");
INSERT INTO reference (reference) VALUES ("jo4685rum");


INSERT INTO tailles (taille, type) VALUES ("xs", 1);
INSERT INTO tailles (taille, type) VALUES ("s", 1);
INSERT INTO tailles (taille, type) VALUES ("m", 1);
INSERT INTO tailles (taille, type) VALUES ("l", 1);
INSERT INTO tailles (taille, type) VALUES ("xl", 1);
INSERT INTO tailles (taille, type) VALUES ("xxl", 1);
INSERT INTO tailles (taille, type) VALUES ("3xl", 1);
INSERT INTO tailles (taille, type) VALUES ("4xl", 1);


INSERT INTO tailles (taille, type) VALUES ("35", 5);
INSERT INTO tailles (taille, type) VALUES ("36", 5);
INSERT INTO tailles (taille, type) VALUES ("37", 5);
INSERT INTO tailles (taille, type) VALUES ("38", 5);
INSERT INTO tailles (taille, type) VALUES ("39", 5);
INSERT INTO tailles (taille, type) VALUES ("41", 5);
INSERT INTO tailles (taille, type) VALUES ("42", 5);
INSERT INTO tailles (taille, type) VALUES ("43", 5);
INSERT INTO tailles (taille, type) VALUES ("44", 5);
INSERT INTO tailles (taille, type) VALUES ("45", 5);
INSERT INTO tailles (taille, type) VALUES ("46", 5);
INSERT INTO tailles (taille, type) VALUES ("47", 5);
INSERT INTO tailles (taille, type) VALUES ("48", 5);


INSERT INTO tailles (taille) VALUES ("28", 2);
INSERT INTO tailles (taille) VALUES ("29", 2);
INSERT INTO tailles (taille) VALUES ("30", 2);
INSERT INTO tailles (taille) VALUES ("31", 2);
INSERT INTO tailles (taille) VALUES ("32", 2);
INSERT INTO tailles (taille) VALUES ("33", 2);
INSERT INTO tailles (taille) VALUES ("34", 2);
INSERT INTO tailles (taille) VALUES ("36", 2);
INSERT INTO tailles (taille) VALUES ("38", 2);
