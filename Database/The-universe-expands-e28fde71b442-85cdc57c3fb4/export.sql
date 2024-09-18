CREATE DATABASE sterrenstelsel;

USE sterrenstelsel;

CREATE TABLE planeten (
    id INT AUTO_INCREMENT PRIMARY KEY,
    naam VARCHAR(255) NOT NULL
);

INSERT INTO planeten (Zon) VALUES ('Zon');
INSERT INTO planeten (Mercurius) VALUES ('Mercurius');
INSERT INTO planeten (Venus) VALUES ('Venus');
INSERT INTO planeten (Aarde) VALUES ('Aarde');
INSERT INTO planeten (Mars) VALUES ('Mars');