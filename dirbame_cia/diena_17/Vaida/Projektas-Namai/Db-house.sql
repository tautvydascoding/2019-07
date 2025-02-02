

--Duomenu baze sukurimas House--
CREATE DATABASE  ProjectHouse;

--pasitikrinti--
show databases;

---!!!!!pasirinkti duomenu baze kurioje dirbsim---
use projectHouse;

DROP TABLE houses;

use projectHouse;

-------SUKURIU NAMU lentele----
CREATE TABLE houses (
     id INT  AUTO_INCREMENT PRIMARY KEY,
     name VARCHAR(30) not NULL,
     adresas VARCHAR(30) NOT NULL,
     plotas VARCHAR(30) NOT NULL,
     metai VARCHAR(30) NOT NULL,
     kaina VARCHAR(30) NOT NULL
     );


--pasitikrinti--
show tables;

--duomenu idejimas--
INSERT INTO houses  VALUES  (NULL, 'Žemynos namai', ' Žemynos g', '106 m2', '2018 m.', '98000 eur.');
--pasitikrinti--
SELECT * FROM houses;

DELETE FROM houses WHERE id = 1;



INSERT INTO houses  VALUES  (NULL, 'Žemynos namai', 'Žemynos g', 106, 2018, 98000);
INSERT INTO houses  VALUES  (NULL, 'Bajorų kvartalas', 'Margirio g.', 90, 2018, 81000);
INSERT INTO houses  VALUES  (NULL, 'Šilainių slėnis', 'Šalčininkų g.', 85, 2018, 95000);
INSERT INTO houses  VALUES  (NULL, 'Kotedžas Aleksote', 'Svirbygalos g.', 110, 2019, 119000);
INSERT INTO houses  VALUES  (NULL, 'Nemuno šlaito', 'Skrydžio g.', 78, 2019, 57000);
INSERT INTO houses  VALUES  (NULL, 'Kamšos kotedžai', 'Aušros g.', 76, 2019, 65000);

--pasitikrinti--
SELECT * FROM houses;



-------SUKURIU KONTAKTU lentele----

 CREATE TABLE contacts (
      id INT  AUTO_INCREMENT PRIMARY KEY,
      name VARCHAR(30) not NULL,
      lname VARCHAR(30) not NULL,
      pareigos VARCHAR(30) NOT NULL,
      tel VARCHAR(30) NOT NULL,
      pastas VARCHAR(30) NOT NULL
      );


INSERT INTO contacts  VALUES  (NULL, 'Darius', 'Darulis', 'Darbų vadovas', 868772227, 'darius@status.lt');
INSERT INTO contacts  VALUES  (NULL, 'Marius', 'Lazauskas', 'Pardavimų vadovas', 868551131, 'marius@status.lt');
INSERT INTO contacts  VALUES  (NULL, 'Rita', 'Ritkūnaitė', 'Architektė', 868766255, 'rita@status.lt');
INSERT INTO contacts  VALUES  (NULL, 'Agnė', 'Daugela', 'Interjero dizainerė', 868119878, 'agne@status.lt');

--pasitikrinti--
SELECT * FROM contacts;


-------SUKURIU Namu foto lentele----
CREATE TABLE img (
	 id INT AUTO_INCREMENT PRIMARY KEY,
	 name VARCHAR(60) not NULL,
	 house_id INT(6) NOT NULL
	 );

--pasitikrinti--
show tables;


-- -isidedu img duomenis i teminala---
INSERT INTO img  VALUES  (NULL, 'zemynos1.jpg', '1');
INSERT INTO img  VALUES  (NULL, 'zemynos2.jpg', '1');
INSERT INTO img  VALUES  (NULL, 'zemynos3.jpg', '1');
INSERT INTO img  VALUES  (NULL, 'zemynos4.jpg', '1');
INSERT INTO img  VALUES  (NULL, 'zemynos5.jpg', '1');
INSERT INTO img  VALUES  (NULL, 'zemynos6.jpg', '1');




-- pasitikrinti terminale--
SELECT * FROM img;


INSERT INTO img  VALUES  (NULL, 'bajoru1.jpg', '2');
INSERT INTO img  VALUES  (NULL, 'bajoru2.jpg', '2');
INSERT INTO img  VALUES  (NULL, 'bajoru3.jpg', '2');
INSERT INTO img  VALUES  (NULL, 'bajoru4.jpg', '2');

INSERT INTO img  VALUES  (NULL, 'silainiu1.jpg', '3');
INSERT INTO img  VALUES  (NULL, 'silainiu2.jpg', '3');
INSERT INTO img  VALUES  (NULL, 'silainiu3.jpg', '3');
INSERT INTO img  VALUES  (NULL, 'silainiu4.jpg', '3');
INSERT INTO img  VALUES  (NULL, 'silainiu5.jpg', '3');
INSERT INTO img  VALUES  (NULL, 'silainiu6.jpg', '3');

INSERT INTO img  VALUES  (NULL, 'aleksoto1.jpg', '4');
INSERT INTO img  VALUES  (NULL, 'aleksoto2.jpg', '4');
INSERT INTO img  VALUES  (NULL, 'aleksoto3.jpg', '4');
INSERT INTO img  VALUES  (NULL, 'aleksoto4.jpg', '4');

INSERT INTO img  VALUES  (NULL, 'nemuno1.jpg', '5');
INSERT INTO img  VALUES  (NULL, 'nemuno2.jpg', '5');
INSERT INTO img  VALUES  (NULL, 'nemuno3.jpg', '5');
INSERT INTO img  VALUES  (NULL, 'nemuno4.jpg', '5');
INSERT INTO img  VALUES  (NULL, 'nemuno5.jpg', '5');
INSERT INTO img  VALUES  (NULL, 'nemuno6.jpg', '5');

INSERT INTO img  VALUES  (NULL, 'kamsos1.jpg', '6');
INSERT INTO img  VALUES  (NULL, 'kamsos2.jpg', '6');
INSERT INTO img  VALUES  (NULL, 'kamsos3.jpg', '6');
INSERT INTO img  VALUES  (NULL, 'kamsos4.jpg', '6');
INSERT INTO img  VALUES  (NULL, 'kamsos5.jpg', '6');
INSERT INTO img  VALUES  (NULL, 'kamsos6.jpg', '6');












----------
