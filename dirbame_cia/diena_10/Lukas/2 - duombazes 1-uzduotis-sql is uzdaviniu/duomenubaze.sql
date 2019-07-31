-- uzduotis 1: istrinti gydytoja "Koris" --
DELETE FROM doctors WHERE name = "Koris";
-- uzduotis 2:  Pakeisti Paciento "Co" varda i "Karolis" --
UPDATE patients SET name = "Karolis" WHERE name = "Co";
-- uzduotis 3.1: visu pacientu, kuriu vardas yra "Tom" -  varda pakeisti i "Tomas" --
UPDATE patients SET name = "Tomas" WHERE name LIKE "%tom%";
-- uzduotis 3.2: visu pacientu, kuriu vardas prasideda "T" -  docotor_id pakeisti i "4" --
UPDATE patients SET doctor_id = 4 WHERE name LIKE "T%";
-- uzduotis 4: gauti paciento "Mark" daktaro pavarde --
SELECT doctors.lname
FROM doctors
INNER JOIN patients
ON doctors.id = patients.doctor_id;
WHERE patients.name = "Marks";
