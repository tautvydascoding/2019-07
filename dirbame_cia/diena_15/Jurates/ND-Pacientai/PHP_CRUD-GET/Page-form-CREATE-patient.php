<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/master.css">
    <title>Namų darbas su pacientais 08-07</title>
</head>
<body>
    <h1>Naujo paciento užregistravimas</h1>
    <form action="Patient-create.php" method="GET">

        <label for="vardas">Paciento vardas</label><br/>
        <input type="text" name="vardas"><br/>

        <label for="pavarde">Paciento pavardė</label><br/>
        <input type="text" name="pavarde"><br/>
    
        <label for="pavarde">Paciento Adresas</label><br/>
        <input type="text" name="adresas"><br/>

        <label for="pavarde">Paciento Mobilaus Telefono Numeris</label><br/>
        <input type="text" name="mobNr"><br/>

        <label for="pavarde">Paciento El.paštas</label><br/>
        <input type="text" name="elPastas"><br/>

        <button type="submit">Registruoti</button>
    </form>
    <script src="libs/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="main.js"></script>
</body>
</html>