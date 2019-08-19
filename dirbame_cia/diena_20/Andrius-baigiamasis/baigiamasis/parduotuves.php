<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <?php include "styles.php" ?>

    <body>
        <?php include "header.php" ?>

        <?php include "nav.php"?>

        <div class="container">
            <h1>Musu Parduotuves</h1>

            <?php include ("parduotuves_api.php"); ?>

            <?php include "parduotuves_results.php"; ?>



        </div>
    </body>
</html>
