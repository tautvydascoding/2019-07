<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>DELETE patient</h1>
        <?php
        include_once('patient-db-functions.php');
        // print_r($GET);
        $x = $_GET['nr'];
        deletePatient($x);
        ?>

        <h3 class='bg-success'>
            Sekmingai istrintas pacientas nr:
            <?php echo $x; ?>
        </h3>

        <?php
            header('Location: '.'index.php');
         ?>
    </body>
</html>
