=======menu========
id    name   pozicija
1    Contact    3
2    Home       1
3    About      2

=======kontaktu puslapis========
id    miestas   adresas    tel_1    tel_2  email
1     Kaunas    Staybu g. 2  86xxx          info@pop.lt
2     London    Wood str. 4  86xxx          info@pop.com


=======about ========
id    antraste        turinys   pozicija   ar_rodyti
1     Musu Istorija    Lorem...  2          true
2     Ka gaminame?     Lorem...  1         true
3     Mes spaudoje     Lorem...  3         false
SELECT * FROM about
        WHERE ar_rodyti = true
        ORDER BY pozicija
        LIMIT 5;

=======vartotoju klausimai ========
id    vardas   klausimas    tel_1              email
1     Tomas   Lorem....     86xxx          info@pop.lt
2     Julius  Lorem....                   info@pop.com

=======vartotoju atsiliepimai/komentarai ========
id    vardas   user_id   atsiliepimas/komentaras      ar_rodyti   data              email
1     Tomas       13        Lorem....                    true     2010-06-06          Tomas@tomas.lt
2     Julius      64        Lorem....                    false    2010-06-05         julius@julius.lt

======= Prekes/ straisniai   ========
id    pavadinimas   aprasymas      kaina    nuolaida  pozicija      data   kiekis    ar_rodyti   pozicija
1     Dviratis       Lorem....      659          0                               5       true       999
2     Paspirtukas     Lorem....     49.99       5           99999               11       false        10
3     Rieduciai       Lorem....     359         20          2                   8       true        900

======= Paveiksliukai   ========
id    pavadinimas     aprasymas              pozicija      prekes_id
1     foto1.jpg       Lorem....                3              1
2     foto2123123.PNG Lorem....                99999            18
3     foto123.jpg     Lorem....                2              5



======= Reklamos / sukiai  ========
id    pavadinimas               Turinys              pozicija           ar_rodyti
1     pagrindine                  Lorem....                  3            false
2     velykine                    Lorem....                99999           false
3    registraciju skatinimo        Lorem....                2                true


========uzsakymo_duomenys=====
id     uzsakymo_id    prekes_id         kiekis
1           2           11              2
2           2           204             4
3           1            5              10
==========uzsakymai============
id       date     ar_apmoketa   user_id / vardas pavarde    shipping_id / arba -> gavejo_vardas   gavejo_pavarde   miestas adresas
1       NOW()        true          8    /   Tom  TOmaitis        13                ....
