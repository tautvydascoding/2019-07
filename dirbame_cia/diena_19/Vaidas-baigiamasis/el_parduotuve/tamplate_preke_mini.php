<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>





            <div class="preke plotis-30 mr-4 mb-4 float-kaire">


<!-- zemiau pakeiciau foto pavadinima -->
<?php
// print_r ($fotosARRAY)
?>

                    <!-- <img src="img\prekes\"
                    <?php
                    // echo $fotos$ARRAY['pav_pavadinimas']
                    ?>
                    class=""  style=" "> -->


                    <img src="img\prekes\fotofonas.jpg" onkeypress="" class=""  style=" ">

                    <h4> <?php echo $prekesARRAY['pavadinimas']  ?> </h4>

                    <p> Kaina:  </p>

                    <span class="kaina">
                        <span> <?php echo $prekesARRAY['kaina']  ?> </span>
                        <span>€</span>
                        <span class="amount">/ vnt.</span>
                    </span>
                    <br>
                    <br>

                    <button class="  " onclick="()" type="submit">
                        <span class="ck-icon ck-icon-cart"></span>
                        <span>Įdėti į krepšelį</span>
                    </button>

            </div>        <!-- uzdariau preke -->






        </body>
        </html>
