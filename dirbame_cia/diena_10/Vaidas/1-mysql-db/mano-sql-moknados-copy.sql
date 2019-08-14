-- parodo visas db
show databases;

-- !!! pasirinkti DB darbui
use duomenu-baz-pavadinimas;
use mysql;

--parodo visas kokios yra lenteles (sioje db)
show tables;

-- !!! paimti duomenis
--     ka paimti   is   lent. pav.
SELECT    *      FROM     user;
SELECT   User,  Grant_priv   FROM     user;

CREATE USER 'tautvydas11'@'localhost' IDENTIFIED BY 'tratata';
ALTER USER 'tautvydas11'@'localhost' PASSWORD EXPIRE NEVER;
GRANT ALL PRIVILEGES ON * . * TO 'tautvydas11'@'localhost' WITH GRANT OPTION;

-- DB kurimas
CREATE DATABASE Hospital7;
-- pasitikrinti
show databases;
-- !!!!! pasirinkti DB kurioje dirbsiu
use Hospital7;
-- pasitikrinti
show tables;

-- sukuriu lentele 'doctors'
CREATE TABLE   doctors (
         id INT       AUTO_INCREMENT    PRIMARY KEY,
         name VARCHAR(30) not NULL,
         lname VARCHAR(30) NOT NULL
     );
-- pasitikrinti:
 show tables;
 -- duomenu idejimas:
 INSERT INTO doctors VALUES ('', 'Tom', 'Opsa');
-- pasitikrinti
SELECT * FROM doctors;

 INSERT INTO doctors VALUES ('', 'Paul', 'Tor');
 INSERT INTO doctors VALUES ('', 'Jo', 'oto');
 INSERT INTO doctors VALUES ('', 'Lili', 'Lekso');
 INSERT INTO doctors VALUES ('', 'Timy', 'So');
 -- pasitikrinti
 SELECT * FROM doctors;

--
CREATE TABLE IF NOT EXISTS patients (
     id INT(6)       AUTO_INCREMENT PRIMARY KEY,
     name VARCHAR(30) not NULL,
     lname VARCHAR(30) NOT NULL,
     doctor_id INT(6) NOT NULL
     );
-- pasirinkti
show tables;

INSERT INTO patients  VALUES  (NULL, 'Marks', 'Jonh', '2');
INSERT INTO patients  VALUES  (NULL, 'Tom', 'Karlos', '2');
INSERT INTO patients  VALUES  (NULL, 'Aris', 'Tiedo', '1');
INSERT INTO patients  VALUES  (NULL, 'Tom', 'Kopo', '3');
INSERT INTO patients  VALUES  (NULL, 'Co', 'John', '1');
INSERT INTO patients  VALUES  (NULL, 'Tom', 'Naro', '5');
INSERT INTO patients  VALUES  (NULL, 'Lili', 'Jato', '4');
-- pasitikrinti
SELECT * FROM patients;

CREATE TABLE IF NOT EXISTS img (
	 id INT(6) UNSIGNED     AUTO_INCREMENT PRIMARY KEY,
	 name VARCHAR(200) not NULL,
	 doctor_id INT(6) NOT NULL
	 );
-- uzduotis:
-- 0. istrinti paskutine nuotrauka
DELETE FROM img WHERE id = 5;
-- pasirinkti
 select * FROM img;
-- 0. Pakeisti Litos pavarde i Litaitė
UPDATE doctors
SET   lname = "Litaite"
WHERE name = "Lili";

-- 1. ISVESTI SURIKIUOTUS GYTYTOJUS PAGAL pavarde
SELECT * FROM doctors ORDER BY lname ASC;
-- 2. ISVESTI GYTYTOJUS kuriu id mazesnis uz 3
SELECT * FROM doctors WHERE   id < 3;
-- 3. ISVESTI paciantus kuriu vardas is raides "A"
SELECT * FROM patients WHERE  name  LIKE "A%";

-- UZDUOTIS  1.1  (SELECT) : ISVESTI 4 IR 5 gydytoja
SELECT * FROM doctors WHERE   id = 4  OR id = 5;
-- UZDUOTIS  1.2  (SELECT) : ISVESTI visus gydytojus,
-- kuriu vardas: 'Tim' ARBA pavarde 'Leo'
SELECT * FROM doctors WHERE   name = "Timy"  OR lname = "Opsa";
-- UZDUOTIS  1.3  (SELECT): isvesti visus gydytojus, kuriu 'id' mazesnis uz 4
SELECT * FROM doctors WHERE id < 4;
-- UZDUOTIS  1.4  (SELECT): isvesti visus gydytojus, bet ne 'Jo Oto'
SELECT * FROM doctors WHERE  name != "Jo";
-- UZDUOTIS  1.5  (SELECT): isvesti visus paciantus, surikiuotus pagal varda
SELECT * FROM patients ORDER BY patients.name;
-- // UZDUOTIS 2: pervadinti gydytoja 'Lita' i 'Litas'



-- UZDUOTIS UPDATE- pakeisti 'Paul' pavarde i Makalas (suradus pagal id)
-- UZDUOTIS UPDATE- pakeisti 'Paul' pavarde i Paulaitis (suradus pagal id ir pavarde)
-- UZDUOTIS (select LIKE)- paimti visus gydytojus, kuriu pavarde parsideda is "L" raides
SELECT * FROM doctors WHERE lname LIKE "L%";


// uzduotis 1: istrinti gydytoja "Koris"
// uzduotis 2:  Pakeisti Paciento "Co" varda i "Karolis"
// uzduotis 3.1: visu pacientu, kuriu vardas yra "Tom" -  varda pakeisti i "Tomas"
// uzduotis 3.2: visu pacientu, kuriu vardas prasideda "T" -  docotor_id pakeisti i "4"
// uzduotis 4: gauti paciento "Mark" daktaro pavarde

SELECT *
    FROM doctors
    INNER JOIN patients
    ON doctors.id = patients.doctor_id
    WHERE patients.name = "Marks";

SELECT table1.column_name(s)
    FROM table1
    INNER JOIN table2
    ON table1.column_name = table2.column_name;
