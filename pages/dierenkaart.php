<?php
$servername = "localhost";
$username = "88695";
$password = "Shailesh2006";
$dbname = "Pootjesparadijs";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}   

$sql = "SELECT * FROM Dierenkaart"; 
$result = $conn->query($sql);

$data = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
} else {
    echo "No data found";
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dierenasiel</title>
    <link rel="stylesheet" href="../style/Dierenkaart.css">
    <link rel="stylesheet" href="../style/site.css">
</head>
<body>
    <header>
        <div id="buttons">
            <a href="login.html">
                <div id="log" class="header_bttn">
                    <span class="span_buttons">Inloggen</span>
                </div>
            </a>
            <div onclick="doneer()">
                <div id="don" class="header_bttn">
                    <span class="span_buttons">Doneren</span>
                </div>
            </div>
        </div>
    </header>
    <div class="header_img">
        <div id="filler1"></div>
        <div id="wrapper1">
            <div class="text-container top">
                <h1>Kies ons hier uit!</h1>
            </div>
        </div>
    </div>
    <main>
        <div id="menu"></div>
        <div id="selectie">
            <?php
            foreach ($data as $item) {
                ?>
                <div class="wrapper2">
                    <div class="hyper">
                        <div class="overlay"></div>
                        <a class="dierLink">
                            <img class="dierFoto" src="../media/dieren/<?php echo $item['Foto']; ?>">
                            <div class="wrapper3">
                                <h3 class="dierSoort"><?php echo $item['Soort']; ?></h3>
                                <p class="dierRas"><?php echo $item['Ras']; ?></p>
                                <p class="dierKleur"><?php echo $item['Kleur']; ?></p>
                                <p class="dierGeslacht"><?php echo $item['Geslacht']; ?></p>
                            </div>
                        </a>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </main>
    <div id="footer">
        <div class="footer_links">
            <a class="policy" href="policy.html">Privacy Policy</a>
            <a class="terms" href="terms.html">Terms & Conditions</a>
        </div>
        <div class="filler3"></div>
        <div class="footer_cont" id="footer_main2">
            <div class="footer_img">
                <a href="https://www.postcodeloterij.nl" target="_blank">
                    <img src="../media/img/PostcodeLoterij.png" alt="PostcodeLoterij" width="64px" height="42px">
                </a>
                <!-- Add other footer links -->
            </div>
        </div>
        <div class="filler3"></div>
    </div>
    <script src="../script/doneer.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var dierGeslacht = document.querySelectorAll('.dierGeslacht');

            dierGeslacht.forEach(function(element) {
                var geslacht = element.textContent;
                if (geslacht === 'M') {
                    element.style.color = 'blue';
                } else if (geslacht === 'V') {
                    element.style.color = 'pink';
                }
            });
        });
    </script>
</body>
</html>