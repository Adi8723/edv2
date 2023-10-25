
classen
Seminar = {id, titel, beschreibung, preis}
metode= setter/getter_constr
Termin = {id, seminar_id, ort, raum, anfang; ende}
Student = {id, anrede, vorname, nachname, strasse, haus, ort, plz, email, passwort}
Student_termine={Student_id, Termin_id}

uml Datenbank 


register/ login
autocomplete = "off"


SELECT titel , preis, ort, raum FROM seminare
JOIN termine
ON seminare.id = seminare_id


 CREATE TABLE IF NOT EXISTS daten
(
    id INT PRIMARY KEY AUTO_INCREMENT,
    farbe VARCHAR(30) NOT NULL,
  
)DEFAULT CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci';