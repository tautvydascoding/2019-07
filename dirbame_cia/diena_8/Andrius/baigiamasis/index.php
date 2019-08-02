<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Elektroninių cigarečių parduotuvė</title>
    </head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Cabin&display=swap" rel="stylesheet">



    <link rel="stylesheet" href="css/styles.css">


    <body >
        <header>
            <a href="index.html"><img src="css/company_logo.jpg" alt="company logo" width="20%" height="15%;" class="company-logo"></a>
            <div class="Login">
                <form class="" action="index.html" method="post">
                    <input type="text" name="Username" value="" placeholder="Username" id="login_username" class="form-control">

                    <input type="password" name="Password" value="" placeholder="Password" id="login_password" class="form-control">

                    <button type="button" name="button" class="btn btn-success" onclick="loginTest()">Login</button>
                    <p id="error_code"></p>
                </form>
            </div>
        </header>

        <nav class="nav">
            <ul class="menu-content">
                <li><img src="css/home_icon.svg" alt="home icon"></li>
                <li class="show"><a href="#">Naujienos</a>
                    <div class="DropDownContent">
                        <a href="#"></a>
                        <a href="#"></a>
                        <a href="#"></a>
                        <a href="#"></a>
                    </div>
                </li>
                <li class="show"><a href="#">E.skysčiai</a>
                    <!-- <img src="css/liqua.jpg" height="200px" width="200px"> -->
                    <div class="DropDownContent">
                        <a href="#">Klasikiniai skysčiai</a>
                        <a href="#">Nikotino druskos skysčiai</a>
                        <a href="#">Premium klasės skysčiai</a>
                        <a href="#">CBD skysčiai</a>
                    </div>
                </li>
                <li class="show"><a href="#">Modai</a>
                    <div class="DropDownContent">
                        <a href="#">Starter kit'ai</a>
                        <a href="#">Pod sistemos</a>
                        <a href="#">Full size modai</a>
                        <a href="#">Mechaniniai modai</a>
                    </div>
                </li>
                <li class="show"><a href="#">Kaitikliai</a>
                    <div class="DropDownContent">
                        <a href="#">RDA</a>
                        <a href="#">RTA</a>
                        <a href="#">RDTA</a>
                        <a href="#">MTL</a>
                    </div>
                </li>
                <li class="show"><a href="#">Aksesuarai</a>
                    <div class="DropDownContent">
                        <a href="#">Kandikliai</a>
                        <a href="#">Deklai</a>
                        <a href="#">Gumytes</a>
                        <a href="#">Wrap'ai</a>
                    </div>
                </li>
                <li class="show"><a href="#">Priedai</a>
                    <div class="DropDownContent">
                        <a href="#">Stikliukai</a>
                        <a href="#">Kaitinimo galvutes</a>
                        <a href="#">Baterijos</a>
                        <a href="#">Bateriju ikrovikliai</a>
                    </div>
                </li>
            </ul>
        </nav>

        <div class="container">

        <div class="main-content">
            <!-- side-bar-menu -->
            <div class="col-3 border d-inline-flex">
                meniuu
            </div>
            <!-- products-paragraph -->
            <div class="col-8 border d-inline-flex ml-5 products-paragraph">
                produktai
                <?php include "products_info.php"; ?>
            </div>
            <div class="row ">

            </div>
        </div>


        </div>




    </body>

<script type="text/javascript" src="main.js">

</script>

</html>
