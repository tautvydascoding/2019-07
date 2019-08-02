-- uzduotis:
-- 0. istrinti paskutine nuotrauka
delete from img where id=4;
-- 0. Pakeisti Litos pavarde i Litaitė
update doctors set lname='litaite' where id=4;
-- 1. ISVESTI SURIKIUOTUS GYTYTOJUS PAGAL pavarde
select * from doctors order by lname asc;
-- 2. ISVESTI GYTYTOJUS kuriu id mazesnis uz 3
select * from doctors where id<3;
-- 3. ISVESTI paciantus kuriu vardas is raides "A"
select * from patients where name like '%a';
-- UZDUOTIS  1.1  (SELECT) : ISVESTI 4 IR 5 gydytoja
select * from doctors where id=4 or id=5;
-- UZDUOTIS  1.2  (SELECT) : ISVESTI visus gydytojus, kuriu vardas: 'Tim' ARBA pavarde 'Leo'
select * from doctors where name like 'tom' or lname 'leo';
-- UZDUOTIS  1.3  (SELECT): isvesti visus gydytojus, kuriu 'id' mazesnis uz 4
select * from doctors where id<4;
-- UZDUOTIS  1.4  (SELECT): isvesti visus gydytojus, bet ne 'Ona'
select * from doctors where not name='ona';
-- UZDUOTIS  1.5  (SELECT): isvesti visus paciantus, surikiuotus pagal varda
select * from patients order by name asc;
-- // UZDUOTIS 2: pervadinti gydytoja 'Lita' i 'Litas'
update doctors set name='litas' where id=4;



-- UZDUOTIS UPDATE- pakeisti Koris pavarde i Makalas (suradus pagal id)
update (table) set lname='makalas' where id=x;
-- UZDUOTIS UPDATE- pakeisti Koris pavarde i Paulaitis (suradus pagal id ir pavarde)
update (table) set lname='paulaitis' where id=x and lname='koris';
-- UZDUOTIS (select LIKE)- paimti visus gydytojus, kuriu pavarde parsideda is "L" raides
select * from doctors where lname like 'L%';
