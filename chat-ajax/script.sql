CREATE TABLE utilisateurs(
	id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    nom VARCHAR(255),
    prenom VARCHAR(255),
    mail VARCHAR(255),
    mdp VARCHAR(255)
);

CREATE TABLE messages(
	idEnvoyeur INT NOT NULL,
    idDestinataire INT NOT NULL,
    message VARCHAR(255),
    dateEnvoie DATE,
    heureEnvoie TIME(0),
    FOREIGN KEY (idEnvoyeur) REFERENCES utilisateurs(id),
    FOREIGN KEY (idDestinataire) REFERENCES utilisateurs(id)
);

INSERT INTO utilisateurs (nom, prenom, mail, mdp) VALUES ("AUBERT", "Jean", "aubert.jean@gmail.com", "aubert.jean"); 
INSERT INTO utilisateurs (nom, prenom, mail, mdp) VALUES ("VIVIER", "Fabrice", "vivier.fabrice@gmail.com", "vivier.fabrice"); 
INSERT INTO utilisateurs (nom, prenom, mail, mdp) VALUES ("GAUROT", "Jacques", "gaurot.jacques@gmail.com", "gaurot.jacques");
INSERT INTO utilisateurs (nom, prenom, mail, mdp) VALUES ("BENOIT", "André", "benoit.andre@gmail.com", "benoit.andre"); 
INSERT INTO utilisateurs (nom, prenom, mail, mdp) VALUES ("MARIN", "Gilles", "marin.gilles@gmail.com", "marin.gilles"); 
INSERT INTO utilisateurs (nom, prenom, mail, mdp) VALUES ("MERLE", "Francis", "merle.francis@gmail.com", "merle.francis"); 

INSERT INTO messages (idEnvoyeur, idDestinataire, message, dateEnvoie, heureEnvoie) VALUES (1, 2, "Salut Fabrice, tu vas bien ?", "2020-10-10", "12:13:56"); 
INSERT INTO messages (idEnvoyeur, idDestinataire, message, dateEnvoie, heureEnvoie) VALUES (2, 1, "Coucou Jean, ça va et toi ? Quoi de neuf ?", "2020-10-10", "12:15:12"); 
INSERT INTO messages (idEnvoyeur, idDestinataire, message, dateEnvoie, heureEnvoie) VALUES (1, 2, "Je vais bien, merci. Je suis à la retraite maintenant et toi ?", "2020-10-10", "12:17:43"); 
INSERT INTO messages (idEnvoyeur, idDestinataire, message, dateEnvoie, heureEnvoie) VALUES (2, 1, "Ah c'est super, moi aussi, depuis 2 ans", "2020-10-10", "12:19:16"); 
INSERT INTO messages (idEnvoyeur, idDestinataire, message, dateEnvoie, heureEnvoie) VALUES (1, 2, "Ah oui déjà, le temps pas si vite", "2020-10-10", "12:23:24"); 
INSERT INTO messages (idEnvoyeur, idDestinataire, message, dateEnvoie, heureEnvoie) VALUES (2, 1, "Et oui, bon aller à plus Jean", "2020-10-10", "12:25:35"); 

INSERT INTO messages (idEnvoyeur, idDestinataire, message, dateEnvoie, heureEnvoie) VALUES (3, 4, "Salut André, tu vas bien ?", "2020-10-12", "10:13:56"); 
INSERT INTO messages (idEnvoyeur, idDestinataire, message, dateEnvoie, heureEnvoie) VALUES (4, 3, "Coucou Jacques, ça va et toi ? Quoi de neuf ?", "2020-10-12", "10:15:56"); 
INSERT INTO messages (idEnvoyeur, idDestinataire, message, dateEnvoie, heureEnvoie) VALUES (3, 4, "Je vais bien, merci. Je suis à la retraite maintenant et toi ?", "2020-10-12", "10:17:56"); 
INSERT INTO messages (idEnvoyeur, idDestinataire, message, dateEnvoie, heureEnvoie) VALUES (4, 3, "Ah c'est super, moi aussi, depuis 2 ans", "2020-10-12", "10:19:56"); 
INSERT INTO messages (idEnvoyeur, idDestinataire, message, dateEnvoie, heureEnvoie) VALUES (3, 4, "Ah oui déjà, le temps pas si vite", "2020-10-12", "10:21:56"); 
INSERT INTO messages (idEnvoyeur, idDestinataire, message, dateEnvoie, heureEnvoie) VALUES (4, 3, "Et oui, bon aller à plus Jacques", "2020-10-12", "10:23:56"); 

INSERT INTO messages (idEnvoyeur, idDestinataire, message, dateEnvoie, heureEnvoie) VALUES (5, 6, "Salut Francis, tu vas bien ?", "2020-10-14", "16:33:56"); 
INSERT INTO messages (idEnvoyeur, idDestinataire, message, dateEnvoie, heureEnvoie) VALUES (6, 5, "Coucou Gilles, ça va et toi ? Quoi de neuf ?", "2020-10-14", "16:35:56"); 
INSERT INTO messages (idEnvoyeur, idDestinataire, message, dateEnvoie, heureEnvoie) VALUES (5, 6, "Je vais bien, merci. Je suis à la retraite maintenant et toi ?", "2020-10-14", "16:37:56"); 
INSERT INTO messages (idEnvoyeur, idDestinataire, message, dateEnvoie, heureEnvoie) VALUES (6, 5, "Ah c'est super, moi aussi, depuis 2 ans", "2020-10-14", "16:39:56"); 
INSERT INTO messages (idEnvoyeur, idDestinataire, message, dateEnvoie, heureEnvoie) VALUES (5, 6, "Ah oui déjà, le temps pas si vite", "2020-10-14", "16:41:56"); 
INSERT INTO messages (idEnvoyeur, idDestinataire, message, dateEnvoie, heureEnvoie) VALUES (6, 5, "Et oui, bon aller à plus Gilles", "2020-10-14", "16:43:56"); 


