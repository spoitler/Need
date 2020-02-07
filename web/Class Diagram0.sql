DROP TABLE categories;
DROP TABLE civilites;
DROP TABLE clients;
DROP TABLE couleurs;
DROP TABLE familles;
DROP TABLE reference;
DROP TABLE tailles;
DROP TABLE commandes;
DROP TABLE produits;


CREATE TABLE categories (
 id_categorie INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
 categorie CHAR(25)
);

CREATE TABLE civilites (
 id_civilite INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
 civilite CHAR(25)
);

CREATE TABLE couleurs (
 id_couleur INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
 couleur CHAR(25)
);

CREATE TABLE familles (
 id_famille INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
 famille CHAR(25)
);

CREATE TABLE reference (
 id_reference INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
 reference CHAR(25)
);

CREATE TABLE tailles (
 id_taille INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
 taille CHAR(25)
);

CREATE TABLE clients (
 id_client INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
 nom CHAR(100),
 prenom CHAR(100),
 email CHAR(100),
 civilite INT,
 date_naissance date,
 date_inscription date,
 password INT,
 CONSTRAINT fk_clients_civilites FOREIGN KEY (civilite) REFERENCES civilites(civilite)
);

CREATE TABLE commandes (
   id_commande INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
   client INT NOT NULL,
   produit INT NOT NULL,
   quantite INT NOT NULL,
   CONSTRAINT fk_commandes_clients FOREIGN KEY (client) REFERENCES clients(id_client),
   CONSTRAINT fk_commandes_produits FOREIGN KEY (produit) REFERENCES produits(id_produit)
);

CREATE TABLE produits (
 id_produit INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
 taille INT,
 couleur INT,
 stock INT,
 reference INT,
 categories INT,
 famille INT,
 prix INT,
 CONSTRAINT fk_produits_tailles FOREIGN KEY (taille) REFERENCES tailles(taille),
 CONSTRAINT fk_produits_couleurs FOREIGN KEY (couleur) REFERENCES couleurs(couleur),
 CONSTRAINT fk_produits_reference FOREIGN KEY (reference) REFERENCES reference(reference),
 CONSTRAINT fk_produits_categories FOREIGN KEY (categories) REFERENCES categories(categories),
 CONSTRAINT fk_produits_familles FOREIGN KEY (famille) REFERENCES familles(famille)
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

INSERT INTO familles (fammile) VALUES ("t-shirt");
INSERT INTO fammiles (fammile) VALUES ("pantalon");
INSERT INTO fammiles (fammile) VALUES ("pull");
INSERT INTO fammiles (fammile) VALUES ("vestes");
INSERT INTO fammiles (fammile) VALUES ("chaussures");
INSERT INTO fammiles (fammile) VALUES ("accessoires");

INSERT INTO reference (reference) VALUES ("jo1932rum");
INSERT INTO reference (reference) VALUES ("jo2056rum");
INSERT INTO reference (reference) VALUES ("jo1282rum");
INSERT INTO reference (reference) VALUES ("jo5678rum");
INSERT INTO reference (reference) VALUES ("jo4125rum");
INSERT INTO reference (reference) VALUES ("jo4685rum");

INSERT INTO reference (reference) VALUES ("xs");
INSERT INTO reference (reference) VALUES ("s");
INSERT INTO reference (reference) VALUES ("m");
INSERT INTO reference (reference) VALUES ("l");
INSERT INTO reference (reference) VALUES ("xl");
INSERT INTO reference (reference) VALUES ("xxl");
INSERT INTO reference (reference) VALUES ("3xl");
INSERT INTO reference (reference) VALUES ("4xl");
