CREATE DATABASE IF NOT EXISTS sterrenstelsel;
USE sterrenstelsel;

CREATE TABLE IF NOT EXISTS planeten (
    id INT AUTO_INCREMENT PRIMARY KEY,
    naam VARCHAR(50) NOT NULL,
    diameter INT NOT NULL,
    afstand INT NOT NULL,
    massa FLOAT NOT NULL,
    bezoek_datum DATE NULL
);

INSERT INTO planeten (naam, diameter, afstand, massa, bezoek_datum)
VALUES 
    ('Zon', 1391000, 0, 333000, '2023-01-01'),
    ('Mercurius', 4879, 57910000, 0.055, '2023-01-02'),
    ('Venus', 12104, 108200000, 0.815, '2023-01-03'),
    ('Aarde', 12742, 149600000, 1, '2023-01-04'),
    ('Mars', 6779, 227900000, 0.107, '2023-01-05'),
    ('Maan', 3474, 384400, 0.0123, '1969-07-20'),
    ('Mars', 6779, 227900000, 0.107, '2023-01-05');