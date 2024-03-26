<?php 

    $servername = "localhost";
    $username = "88695";
    $password = "Shailesh2006";
    $dbname = "Pootjesparadijs";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        echo "skill issue.";
}   

if ($conn->connect_succes) {
    echo "Connected succesfully";
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Voornaam = $_POST["Voornaam"];
    $tussenvoegsel = $_POST["tussenvoegsel"];
    $Achternaam = $_POST["Achternaam"];
    $Adres = $_POST["Adres"];
    $Telefoonnummer = $_POST["Telefoonnummer"];
    $email = $_POST["email"];
    $legimatieSoort = $_POST["legimatieSoort"];

    // Do something with the form data (e.g., save to a database, send an email, etc.)
    // For this example, let's just print the submitted data
    echo "Voornaam: $Voornaam <br>";
    echo "tussenvoegsel: $tussenvoegsel <br>";
}
