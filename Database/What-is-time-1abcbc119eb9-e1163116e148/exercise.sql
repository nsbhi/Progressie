ALTER TABLE planeten
MODIFY COLUMN naam VARCHAR(50) NOT NULL,
MODIFY COLUMN diameter INT NOT NULL,
MODIFY COLUMN afstand INT NOT NULL,
MODIFY COLUMN massa FLOAT NOT NULL;

ALTER TABLE planeten
ADD COLUMN bezoek_datum DATE NULL;

INSERT INTO planeten (naam, diameter, afstand, massa, bezoek_datum)
VALUES ('Maan', 3474, 384400, 0.0123, '1969-07-20');