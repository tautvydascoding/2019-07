


--parodo visas duomenu bazes
show databases;


--isisrenki duomenu baze


use duomenu bazes pavadinimas;
use mysql;

---pasiziureti kokios yra lenteles(sioje duomenu bazeje
show tables;


--!!!paimti duomenis
-- ka paimti is kokios lenteles(from)
SELECT   *   FROM   user;

SELECT `User`, `Grant_priv` FROM `user`;
$mm = mysqli_query("SELECT User Grant_priv FROM user");




-- tratata - spaltazodis   ----isimenama--slaptazodis, kas puse metu baigia galiot
-- username - pas kai kuriuos negali tureti skaiciu!!!
CREATE USER 'vaida'@'localhost' IDENTIFIED BY 'tratata'  PASSWORD EXPIRE NEVER;
ALTER USER 'vaida'@'localhost' PASSWORD EXPIRE NEVER;
GRANT ALL PRIVILEGES ON * . * TO 'vaida'@'localhost' WITH GRANT OPTION;


--duomenu bazes kurimas--
CREATE DATABASE  Hospital7;

--pasitikrinti--
show databases;

---!!!!!pasirinkti duomenu baze kurioje dirbsim---
use Hospital7;

--sukuriu lentele 'doctors'
CREATE TABLE doctors (
     id INT  AUTO_INCREMENT PRIMARY KEY,
     name VARCHAR(30) not NULL,
     lname VARCHAR(30) NOT NULL
     );


--pasitikrinti--
show tables;

--duomenu idejimas--
INSERT INTO doctors  VALUES  (NULL, 'Tom', 'Opsa');
--pasitikrinti--
SELECT * FROM doctors;

INSERT INTO doctors  VALUES  (NULL, 'Paul', 'Tor');
INSERT INTO doctors  VALUES  (NULL, 'Jo', 'Oto');
INSERT INTO doctors  VALUES  (NULL, 'Lili', 'Lekso');
INSERT INTO doctors  VALUES  (NULL, 'Timy', 'So');


--pasitikrinti--
SELECT * FROM doctors;




--susikuriu lentele 'pacients' isidedu i terminala
CREATE TABLE patients (
     id INT  AUTO_INCREMENT PRIMARY KEY,
     name VARCHAR(30) not NULL,
     lname VARCHAR(30) NOT NULL,
     doctor_id INT(6) NOT NULL
     );

    --pasitikrinti--
    show tables;

---isidedu pacientu duomenis---
INSERT INTO patients  VALUES  (NULL, 'Ari', 'Amon', '3');
INSERT INTO patients  VALUES  (NULL, 'Tim', 'Taros', '2');
INSERT INTO patients  VALUES  (NULL, 'Ana', 'Tomson', '2');
INSERT INTO patients  VALUES  (NULL, 'Tom', 'Pomi', '3');
INSERT INTO patients  VALUES  (NULL, 'Karis', 'Katis', '1');
INSERT INTO patients  VALUES  (NULL, 'Jo', 'Oporas', '5');
--pasitikrinti--
SELECT * FROM patients;




-------SUKURIU img lentele----
CREATE TABLE img (
	 id INT AUTO_INCREMENT PRIMARY KEY,
	 name VARCHAR(60) not NULL,
	 doctor_id INT(6) NOT NULL
	 );

--pasitikrinti--
show tables;


---isidedu img duomenis i teminala---
INSERT INTO img  VALUES  (NULL, 'pic-46.jpg', '5');
INSERT INTO img  VALUES  (NULL, 'pic-46.PNG', '1');
INSERT INTO img  VALUES  (NULL, 'pic-456.jpg', '3');
INSERT INTO img  VALUES  (NULL, 'pic-4234234.GIF', '2');
INSERT INTO img  VALUES  (NULL, 'pic-4622.GIF', '4');
--pasitikrinti terminale--
SELECT * FROM img;



------------UZDAVINYS------
-- uzduotis:
-- 0. istrinti paskutine nuotrauka

DELETE FROM img WHERE id = 5;
----pasitikrinti terminale--
SELECT * FROM img;


-- 0. Pakeisti Litos pavarde i Litaitė

UPDATE doctors
SET lname = "Litaite"
WHERE name = "Lili";


-- 1. ISVESTI SURIKIUOTUS GYTYTOJUS PAGAL pavarde
SELECT * FROM doctors ORDER BY 1name ASC;

-- 2. ISVESTI GYTYTOJUS kuriu id mazesnis uz 3
SELECT * FROM doctors WHERE id < 3;

-- 3. ISVESTI paciantus kuriu vardas is raides "A"
SELECT * FROM patients WHERE name LIKE "A%";

-- UZDUOTIS  1.1  (SELECT) : ISVESTI 4 IR 5 gydytoja
SELECT * FROM doctors WHERE id = 4 OR id = 5;

-- UZDUOTIS  1.2  (SELECT) : ISVESTI visus gydytojus, kuriu vardas: 'Tim' ARBA pavarde 'Leo'
SELECT * FROM doctors WHERE id = "Timy" OR 1name = "Opsa";

-- UZDUOTIS  1.3  (SELECT): isvesti visus gydytojus, kuriu 'id' mazesnis uz 4
SELECT * FROM doctors WHERE id <4;

-- UZDUOTIS  1.4  (SELECT): isvesti visus gydytojus, bet ne 'Jo'
SELECT * FROM doctors WHERE name != "Jo";

-- UZDUOTIS  1.5  (SELECT): isvesti visus paciantus, surikiuotus pagal varda
SELECT * FROM patients ORDER BY name;


-- // UZDUOTIS 2: pervadinti gydytoja 'LitI' i 'Litas'
UPDATE doctors
SET lname = "Litaite"
WHERE name = "Lili";


--- pakeisti Tor pavarde i Makalas (suradus pagal id)
UPDATE doctors
SET lname = "Makalas"
WHERE lname = "Tor";


-- UZDUOTIS UPDATE- pakeisti Koris pavarde i Paulaitis (suradus pagal id ir pavarde)
UPDATE pacients
SET lname = ""
WHERE lname = "";

-- UZDUOTIS (select LIKE)- paimti visus gydytojus, kuriu pavarde parsideda is "L" raides
SELECT * FROM doctors WHERE name LIKE "L%";


---gauti paciento "Mark" daktaro pavarde;
-- SELECT column_name(s)
-- FROM table1
-- INNER JOIN table2

SELECT doctors.lname
FROM doctors
INNER JOIN patients
ON doctors.id = patiens.doctor_id
WHERE patients.name = "Jo";
