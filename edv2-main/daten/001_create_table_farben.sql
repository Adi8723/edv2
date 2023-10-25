-- SELECT titel, preis,ort,raum FROM seminare
-- JOIN termine
-- ON seminare.id = seminare_id;

USE inf2;

CREATE TABLE IF NOT EXISTS daten
(
	id INT PRIMARY KEY AUTO_INCREMENT,
	benutzer_id INT NOT NULL,
	farbe VARCHAR(20) NOT NULL
);

INSERT INTO daten(benutzer_id, farbe) VALUES(1,'rot');

INSERT INTO daten(benutzer_id, farbe) VALUES(2,'blau');


SELECT login,farbe FROM benutzer
JOIN daten
ON benutzer.id = benutzer_id;