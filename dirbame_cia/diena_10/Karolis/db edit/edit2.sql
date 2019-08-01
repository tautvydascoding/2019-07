--// uzduotis 1: istrinti gydytoja "Koris"
--// uzduotis 3.1: visu pacientu, kuriu vardas yra "Tom" -  varda pakeisti i "Tomas"
--// uzduotis 3.2: visu pacientu, kuriu vardas prasideda "T" -  docotor_id pakeisti i "4"
update patients set doctor_id=4 where name like 'T%';
--// uzduotis 4: gauti paciento "Mark" daktaro pavarde
select lname from doctors left join patients on doctors.id=patients.id
