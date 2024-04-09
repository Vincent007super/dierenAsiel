<?php 

$servername = "localhost";
$username = "88695";
$password = "Shailesh2006";
$dbname = "Pootjesparadijs";

$conn = new mysqli($servername, $username, $password, $dbname);

// $query = "SELECT COUNT(ID) FROM Dierenkaar";
// $aantal = mysqli_query($conn, $query);

$query = "SELECT * FROM Dierenkaart";
$result = mysqli_query($conn, $query);

if ($conn->connect_error) {
    echo "skill issue.";
 }
//  else {
//     foreach ($variable as $key => $value) {
//         # code...
//     }
// }