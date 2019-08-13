<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <h1> Naujos foto ivedimas  </h1>
        <form action="fotos-create.php" method="get">
            <label for="pav_pavadinimas"> Foto pavadinimas </label> <br />
            <input type="text" name="pav_pavadinimas">         <br />

            <label for="pav_aprasymas"> Foto aprasymas </label> <br />
            <input type="text" name="pav_aprasymas" >         <br />

            <label for="pozicija"> Foto pozicija </label> <br />
            <input type="text" name="pozicija" >         <br />

            <label for="prekes_id"> Prekes id </label> <br />
            <input type="text" name="prekes_id" >         <br />



            <!-- <input type="submit" value="Registruotis"> -->
            <button type="submit" > Irasyti foto </button>

        </form>

    </body>
</html>
