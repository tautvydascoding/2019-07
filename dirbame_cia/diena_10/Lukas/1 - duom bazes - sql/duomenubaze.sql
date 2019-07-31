-- komentaras --
show databases; -- parodyti visas db - kiek duomenu baziu turime --
-- !!! pasirinkti DB darbui --
use duomenu-bazes-pavadinimas
use mysql;
-- pasirinkus db, galima pamatyt excelio sheetus --
show tables;
-- sita komanda show tables; veiks tik pasirinkus baze, kurioje dirbame --

-- !! paimti duomenis !! galima ir mazosiomis raidemis, bet rekomenduoja is didziosios --
SELECT * FROM user;
-- * reiskia ka paimti( siuo atveju viska) FROM reiskia is kur ir user is ko --


SELECT User, Grant_priv FROM user;


CREATE USER "Lukas"@"localhost" IDENTIFIED BY "tratata" PASSWORD EXPIRE NEVER;
ALTER USER 'Lukas'@'localhost' PASSWORD EXPIRE NEVER;
GRANT ALL PRIVILEGES ON * . * TO "Lukas"@"localhost" WITH GRANT OPTION;

-- uzduotis --

-- 1. Sukuriam duomenu baze --

CREATE DATABASE hospital7; -- Sukuriam duomenu baze --

-- galima pasitikrinti ar sukureme - show databases; --
-- sukurus pasirinkti, kad dirbtume sioje bazeje use hospital7; --

-- 2. Sukuriam lenteles --

CREATE TABLE IF NOT EXISTS doctors ( -- sukuriam lentele --
    id int AUTO_INCREMENT PRIMARY KEY, -- sukuriam stulpeli su tipu int (skaicius)--
    name varchar(30) NOT NULL, -- The LastName, FirstName, Address, and City columns are of type varchar --
    lname varchar(30) NOT NULL-- and will hold characters, and the maximum length for these fields is (howmany) characters. --
);

-- pasitikrinti ar sukurem show tables; --

-- uzpildyti doctors lentele (table) --

INSERT INTO doctors  VALUES  ('', 'Tom', 'Opsa'); -- numerio nepaduodam, nes naudojam AUTO_INCREMENT
INSERT INTO doctors  VALUES  ('', 'Paul', 'Tor');
INSERT INTO doctors  VALUES  ('', 'Jo', 'Oto');
INSERT INTO doctors  VALUES  ('', 'Lili', 'Lekso');
INSERT INTO doctors  VALUES  ('', 'Timy', 'So');
-- jei tuscias stringas '' kaip reiksme meta error, paduoti vietoj '' NULL --
-- INSERT INTO doctors  VALUES  (NULL, 'Tom', 'Opsa'); --


-- pasitikrinti ar uzpildeme su SELECT * FROM doctors;

CREATE TABLE IF NOT EXISTS patients (
    id int AUTO_INCREMENT PRIMARY KEY,
    name varchar(30) NOT NULL,
    lname varchar(30) NOT NULL,
    doctor_id int NOT NULL -- nededam AUTO_INCREMENT nes cia nurodom patys koks id skaicius --
);

-- patients lentele (table) --
INSERT INTO patients VALUES (NULL, 'Ari', 'Amon', '3');
INSERT INTO patients VALUES (NULL, 'Tim', 'Taros', '2');
INSERT INTO patients VALUES (NULL, 'Ana', 'Tomson', '2');
INSERT INTO patients VALUES (NULL, 'Tom', 'Alis', '3');
INSERT INTO patients VALUES (NULL, 'Karis', 'Katis', '1');
INSERT INTO patients VALUES (NULL, 'Jo', 'Oporas', '5');

CREATE TABLE img (
    id int AUTO_INCREMENT PRIMARY KEY,
    name varchar(250), NOT NULL
    patient_id int NOT NULL -- nededam AUTO_INCREMENT nes cia nurodom patys koks id skaicius --
);

-- NOT NULL jei neivestume patient_id value rodytu tuscia stringa vietoje NULL

-- img table (lentele) --
INSERT INTO img VALUES (NULL, 'pic-46.jpg', '5');
INSERT INTO img VALUES (NULL, 'pic-46.PNG', '1');
INSERT INTO img VALUES (NULL, 'pic-456.jpg', '3');
INSERT INTO img VALUES (NULL, 'pic-4234234.GIF', '2');
INSERT INTO img VALUES (NULL, 'pic-4622.GIF', '4');

-- uzduotis:
-- 0. istrinti paskutine nuotrauka
DELETE FROM img WHERE patient_id = "4";
-- 0. Pakeisti Lili pavarde i Litaitė
UPDATE doctors SET lname = "Litaitė" WHERE name = "Lili";
-- 1. ISVESTI SURIKIUOTUS GYTYTOJUS PAGAL pavarde
SELECT * FROM doctors ORDER BY lname ASC;
-- 2. ISVESTI GYTYTOJUS kuriu id mazesnis uz 3
SELECT * FROM doctors WHERE id < 3;
-- 3. ISVESTI paciantus kuriu vardas is raides "A"
SELECT * FROM patients WHERE name LIKE "A%";

-- UZDUOTIS  1.1  (SELECT) : ISVESTI 4 IR 5 gydytoja
SELECT * FROM doctors WHERE id > 3;
-- UZDUOTIS  1.2  (SELECT) : ISVESTI visus gydytojus, kuriu vardas: 'Timy' ARBA pavarde 'Leo'
SELECT * FROM doctors WHERE name = "Timy" OR lname = "Oto";
-- UZDUOTIS  1.3  (SELECT): isvesti visus gydytojus, kuriu 'id' mazesnis uz 4
SELECT * FROM doctors WHERE id < 4;
-- UZDUOTIS  1.4  (SELECT): isvesti visus gydytojus, bet ne 'Jo'
SELECT * FROM doctors WHERE NOT name = "Jo";
-- UZDUOTIS  1.5  (SELECT): isvesti visus paciantus, surikiuotus pagal varda
SELECT * FROM patients ORDER BY name ASC;
-- // UZDUOTIS 2: pervadinti gydytoja 'Lili' i 'Litas'
UPDATE doctors SET name = "Litas" WHERE name = "Lili";


-- UZDUOTIS UPDATE- pakeisti Koris pavarde i Makalas (suradus pagal id)
UPDATE patients SET lname = "Makalas" WHERE id = 5;
-- UZDUOTIS UPDATE- pakeisti Koris pavarde i Paulaitis (suradus pagal id ir pavarde)
UPDATE patients SET lname = "Paulaitis" WHERE id = 5 && lname = "Makalas";
-- UZDUOTIS (select LIKE)- paimti visus gydytojus, kuriu pavarde parsideda is "L" raides
SELECT * FROM doctors WHERE lname LIKE "L%";
