<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <h1> Naujos prekes ivedimas  </h1>
        <form action="prekes-create.php" method="get">
            <label for="pavadinimas"> Prekes pavadinimas </label> <br />
            <input type="text" name="pavadinimas">         <br />

            <label for="aprasymas"> Prekes aprasymas </label> <br />
            <input type="text" name="aprasymas" >         <br />

            <label for="kaina"> Prekes kaina </label> <br />
            <input type="text" name="kaina" >         <br />

            <label for="nuolaida"> Prekes nuolaida </label> <br />
            <input type="text" name="nuolaida" >         <br />

            <label for="pozicija"> Prekes pozicija </label> <br />
            <input type="text" name="pozicija" >         <br />

            <label for="kiekis"> Prekes kiekis </label> <br />
            <input type="text" name="kiekis" >         <br />

            <label for="ar_rodyti"> Preke rodyti-1, nerodyti-0 </label> <br />
            <input type="text" name="ar_rodyti" >         <br />



            <!-- <input type="submit" value="Registruotis"> -->
            <button type="submit" > Irasyti preke </button>

        </form>

    </body>
</html>
