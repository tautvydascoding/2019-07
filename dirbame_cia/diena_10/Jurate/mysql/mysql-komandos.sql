-- parodo visa duomenu baze
show databases;

-- Pasirinkti duomenu baze darbui, labai svarbu!!!!
-- use duomenu-baz-pavadinimas;
use mysql;

-- Tik dabar veiks komanda, kuri parodo visas lenteles, nes mes isijungeme konkrecia duomenu baze
show tables;

-- Paimam duomenis
-- * reiskia ka paimam, from reiskia is kurios lenteles paimam duomenis
SELECT * FROM user;

-- paimam duomenis is user lenteles
SELECT `User`, `Grant_priv` FROM `user`;


-- username - pas kai kuriuos negali tureti skaiciu!!!
-- kuriames asmenine db
 CREATE USER 'username'@'localhost' IDENTIFIED BY 'password'  PASSWORD EXPIRE NEVER;
 ALTER USER 'username'@'localhost' PASSWORD EXPIRE NEVER;
 GRANT ALL PRIVILEGES ON * . * TO 'username'@'localhost' WITH GRANT OPTION;

--  Kuriam duomenu baze
CREATE DATABASE Hospital7;

-- Ieinam i Hospital7 duomenu baze, kurioje ir dirbsim
use Hospital7;

-- lentele nr 1 - doctors, stulpelis1 = ID, stulpelis2 = name, stulpelis3 = last_name
-- lentele nr 2 - patients, stulpelis1 = ID, stulpelis2 = patient_name, stulpelis3 = patient_last_name, stulpelis4 = doctor_ID
-- lentele nr 3 - img, stulpelis1 = ID, stulpelis2 = img_name, stulpelis3 = patient_id

-- Kuriam lentele1
CREATE TABLE Doctors (
      id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      name VARCHAR(30) not NULL, 
      lastName VARCHAR(30) NOT NULL
	  );
-- pasikrinam ar susikure lentele
show tables;

//-------------DOCTORS----------
INSERT INTO Doctors  VALUES  (NULL, 'Tom', 'Opsa');
INSERT INTO Doctors  VALUES  (NULL, 'Jo', 'Oto');
INSERT INTO Doctors  VALUES  (NULL, 'Lili', 'Lekso');
INSERT INTO Doctors  VALUES  (NULL, 'Timy', 'So');
INSERT INTO Doctors  VALUES  (NULL, 'Paul', 'Tor');

-- Kuriam lentele2
CREATE TABLE Patients (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) not NULL, 
    lastName VARCHAR(30) NOT NULL,
    doctor_id INT
);

//-------------PATIENTS----------
INSERT INTO Patients  VALUES  (NULL, 'Marks', 'Jonh', '2');
INSERT INTO Patients  VALUES  (NULL, 'Tom', 'Karlos', '2');
INSERT INTO Patients  VALUES  (NULL, 'Aris', 'Tiedo', '1');
INSERT INTO Patients  VALUES  (NULL, 'Tom', 'Kopo', '3');
INSERT INTO Patients  VALUES  (NULL, 'Co', 'John', '1');
INSERT INTO Patients  VALUES  (NULL, 'Tom', 'Naro', '5');
INSERT INTO Patients  VALUES  (NULL, 'Lili', 'Jato', '4');

-- Kuriam lentele3
CREATE TABLE Img (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) not NULL,-- not NULL, kad neišspausdinti NULL, o tiesiog palikti tuscia eilute
    patient_id INT
);
//-------------IMG---------------
INSERT INTO Img  VALUES  (NULL, 'pic-46.jpg', '5');
INSERT INTO Img  VALUES  (NULL, 'pic-46.PNG', '1');
INSERT INTO Img  VALUES  (NULL, 'pic-456.jpg', '3');
INSERT INTO Img  VALUES  (NULL, 'pic-4234234.GIF', '2');

// ====== naudingos kitos:
// reset autoincreament :
ALTER TABLE Doctors AUTO_INCREMENT = 1;   // A) budas
DBCC CHECKIDENT (mytable, RESEED, 0);       // B) budas

-- uzduotis:
-- 0. istrinti paskutine nuotrauka
DELETE FROM Img WHERE name='pic-4234234.GIF';

-- 0. Pakeisti Litos pavarde i Litaitė
UPDATE Doctors SET lastName='Litaitė' WHERE name='Lili';

-- 1. ISVESTI SURIKIUOTUS GYTYTOJUS PAGAL pavarde
SELECT * FROM Doctors ORDER BY lastName ASC;

-- 2. ISVESTI GYTYTOJUS kuriu id mazesnis uz 3
SELECT * FROM Doctors WHERE id < 10;

-- 3. ISVESTI paciantus kuriu vardas is raides "A"
SELECT * FROM Patients WHERE name LIKE 'A%';

-- UZDUOTIS  1.1  (SELECT) : ISVESTI 4 IR 5 gydytoja
SELECT * FROM Doctors WHERE id BETWEEN 10 AND 11;

-- UZDUOTIS  1.2  (SELECT) : ISVESTI visus gydytojus, kuriu vardas: 'Tim' ARBA pavarde 'Lili'
SELECT * FROM Doctors WHERE name='Tom' OR lastName='Oto';

-- UZDUOTIS  1.3  (SELECT): isvesti visus gydytojus, kuriu 'id' mazesnis uz 4
SELECT * FROM Doctors WHERE id < 9;

-- UZDUOTIS  1.4  (SELECT): isvesti visus gydytojus, bet ne 'Jo Oto'
SELECT * FROM Doctors WHERE NOT lastName="Oto";

-- UZDUOTIS  1.5  (SELECT): isvesti visus paciantus, surikiuotus pagal varda
SELECT * FROM Patients ORDER BY name ASC;

-- // UZDUOTIS 2: pervadinti gydytoja 'Lita' i 'Litas'
UPDATE Doctors SET lastName='Litas' WHERE name='Paul';

-- UZDUOTIS UPDATE- pakeisti Karlos pavarde i Makalas (suradus pagal id)
UPDATE Patients SET lastName='Makalas' WHERE id=2;

-- UZDUOTIS UPDATE- pakeisti Tom pavarde i Paulaitis (suradus pagal id ir pavarde)
UPDATE Patients SET lastName='Paulaitis' WHERE id=4 AND lastName='Kopo';

-- UZDUOTIS (select LIKE)- paimti visus gydytojus, kuriu pavarde parsideda is "L" raides
SELECT * FROM Doctors WHERE lastName LIKE 'L%';

-- uzduotis 1: istrinti gydytoja "Koris"
-- uzduotis 2:  Pakeisti Paciento "Co" varda i "Karolis"
-- uzduotis 3.1: visu pacientus, kuriu vardas yra "Tom" -  varda pakeisti i "Tomas"
UPDATE Patients SET name='Tomas' WHERE name='Tom';

-- uzduotis 3.2: visu pacientu, kuriu vardas prasideda "T" -  docotor_id pakeisti i "4"
UPDATE Patients SET doctor_id=4 WHERE name LIKE 'T%';

-- uzduotis 4: gauti paciento "Mark" daktaro pavarde
UPDATE Patients SET doctor_id=8 WHERE name='Marks';

SELECT Patients.name, Doctors.name, Doctors.lastName
FROM Patients
INNER JOIN Doctors ON Patients.doctor_id=Doctors.id;

-- destytojo variantas 
SELECT Doctors.lastName 
FROM Doctors 
INNER JOIN Patients ON Doctors.id=Patients.doctor_id 
WHERE Patients.name='Marks';