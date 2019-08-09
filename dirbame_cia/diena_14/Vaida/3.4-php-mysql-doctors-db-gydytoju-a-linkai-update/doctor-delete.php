<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>DELETE doctor</h1>
        <?php
        include_once('doctor-db-functions.php');
        // print_r($GET);
        $x = $_GET['nr'];
        deleteDoctor($x);
        ?>

        <h3 class='bg-success'>
            Sekmingai istrintas gydytojas nr:
            <?php echo $x; ?>
        </h3>

        <?php
            header('Location: '.'index.php');
         ?>
    </body>
</html>
