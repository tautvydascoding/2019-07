<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "product_info";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT ID, Pavadinimas, Aprasymas, Nuotrauka, Kaina, Ivertinimas, Kategorija FROM product_info";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> ID: ". $row["ID"]. " - Name: ". $row["Pavadinimas"]. " " . $row["Aprasymas"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
