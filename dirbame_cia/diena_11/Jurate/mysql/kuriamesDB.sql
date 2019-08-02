-- Kuriames duomenų bazę:
CREATE DATABASE JuratesPetrukaitytesDB;

-- Įeinam į mūsų sukurtą duomenų bazę:
use JuratesPetrukaitytesDB;

-- Susikuriam pirmąją lentelę:
CREATE TABLE Clinics (
    ID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Clinic VARCHAR(255) NOT NULL, 
    City VARCHAR(100) NOT NULL,
    Location VARCHAR(255) NOT NULL,
    Reception INT,
    Email_Address VARCHAR(255) NOT NULL
	  );

-- Pasikrinam ar mūsų lentelė tikrai sukurta
show tables;

-- Įdedam duomenis į lentelę
INSERT INTO Clinics  VALUES  (NULL, 
    'Saulės Šeimos Medicinos Centras', 
    'Kaunas', 
    'Baršausko g. 66', 
    837200532, 
    'info@ssmc.lt');

INSERT INTO Clinics  VALUES  (NULL, 
    'Aušros Medicinos centras', 
    'Klaipėda', 
    'P. Lukšio g. 3', 
    37709904, 
    'info@ausrosmedicinoscentras.lt');

INSERT INTO Clinics  VALUES  (NULL, 
    'Ąžuolyno Medicinos centras', 
    'Vilnius', 
    'Sporto g. 3', 
    837332719, 
    'info@azuolynospa.lt');

-- Susikuriam antrąją lentelę:
CREATE TABLE Doctors (
    ID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(255) NOT NULL, 
    LastName VARCHAR(255) NOT NULL, 
    Location VARCHAR(255) NOT NULL,
    Practitioner VARCHAR(255) NOT NULL,
    Experience VARCHAR(255) NOT NULL
	  );

-- Įdedam duomenis į lentelę
INSERT INTO Doctors  VALUES  (NULL, 
    'Joana', 
    'Kukienė', 
    'Saulės Šeimos Medicinos Centras', 
    'Šeimos Gydytoja', 
    '4 metai');

INSERT INTO Doctors  VALUES  (NULL, 
    'Gintarė', 
    'Belozarienė', 
    'Saulės Šeimos Medicinos Centras', 
    'Šeimos Gydytoja', 
    '17 metų');

INSERT INTO Doctors  VALUES  (NULL, 
    'Svetlana', 
    'Petrauskienė', 
    'Saulės Šeimos Medicinos Centras', 
    'Šeimos Gydytoja', 
    '13 metų');


INSERT INTO Doctors  VALUES  (NULL, 
    'Vilma', 
    'Kaušienė', 
    'Aušros Medicinos centras', 
    'Šeimos Gydytoja', 
    '7 metai');

INSERT INTO Doctors  VALUES  (NULL, 
    'Virginija', 
    'Grybienė', 
    'Aušros Medicinos centras', 
    'Šeimos Gydytoja', 
    '16 metų');

INSERT INTO Doctors  VALUES  (NULL, 
    'Agnė', 
    'Rimaitienė', 
    'Aušros Medicinos centras', 
    'Šeimos Gydytoja', 
    '1 metai');


INSERT INTO Doctors  VALUES  (NULL, 
    'Dovilė', 
    'Kuktienė', 
    'Ąžuolyno Medicinos centras', 
    'Šeimos Gydytoja', 
    '11 metų');

INSERT INTO Doctors  VALUES  (NULL, 
    'Jugeta', 
    'Kaupienė', 
    'Ąžuolyno Medicinos centras', 
    'Šeimos Gydytoja', 
    '18 metų');

INSERT INTO Doctors  VALUES  (NULL, 
    'Kąstytis', 
    'Jurkus', 
    'Ąžuolyno Medicinos centras', 
    'Šeimos Gydytojas', 
    '20 metų');
