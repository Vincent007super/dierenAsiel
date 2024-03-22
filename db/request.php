<?php 

    $servername = "localhost";
    $username = "88695";
    $password = "Shailesh2006";
    $dbname = "Pootjesparadijs";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("". $conn->connect_error);
}   

echo "Connected succesfully";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Do something with the form data (e.g., save to a database, send an email, etc.)
    // For this example, let's just print the submitted data
    echo "Name: $name <br>";
    echo "Email: $email <br>";
    echo "Message: $message <br>";
}

?>