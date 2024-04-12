<?php
$servername = "localhost";
$username = "88695";
$password = "Shailesh2006";
$dbname = "Pootjesparadijs";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}   

$soort = isset($_GET['soort']) ? $_GET['soort'] : '';

// Aanpassen van de SQL-query op basis van de geselecteerde soort
if ($soort == 'alle') {
    $sql = "SELECT * FROM Dierenkaart";
} else {
    $sql = "SELECT * FROM Dierenkaart WHERE Soort = '$soort'";
}

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
    <link rel="icon" href="../media/img/Logo.png" type="image/x-icon">
</head>
<body>
<header>
        <div class="wrapper">
            <a href="../index.php" id="logo_header">
                <img src="../media/img/Logo.png" alt="Logo Pootjesparadijs" id="logo">
            </a>
            <div id="menuWrapper">
            <a href="../index.php">Hoofdpagina</a>
                <a href="about_us.html">Over Ons</a>
                <a class="active" href="dierenkaart.php?soort=alle">Dierenkaart</a>
                <a href="klantenkaart.php">Klantenkaart</a>
            </div>
            <div id="buttons">
                <a href="login.php">
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
    <div id="selectie">
        <?php
        $count = 0; 

        foreach ($data as $item) {
            if ($count % 4 == 0) { 
                echo '<div class="wrapper2">';
            }
            ?>
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
            <?php
            $count++; 

            if ($count % 4 == 0) { 
                echo '</div>';
            }
        }

        if ($count % 4 != 0) {
            echo '</div>';
        }
        ?>
    </div>
</main>

<div id="footer">
        <div class="footer_links">
            <a class="policy" href="policy.html">Privacy Policy</a>
            <a class="terms" href="terms.html">Terms & Conditions</a>
            <!--- Voeg hier meer links toe naarmate het nodig is --->
        </div>
        <div class="filler3"></div>
        <div class="footer_cont" id="footer_main2">
            <div class="footer_img">
                <a href="https://www.postcodeloterij.nl/goede-doelen/overzicht/dierenbescherming" target="_blank">
                    <img src="../media/img/PostcodeLoterij.png" alt="PostcodeLoterij" width="64px" height="42px">
                </a>
                <a href="https://www.playstation.com/en-us/" target="_blank">
                    <img src="../media/img/Playstation.png" alt="Playstation" width="60px" height="42px">
                </a>
                <a href="https://www.bp.com/" target="_blank">
                    <img src="../media/img/bp.png" alt="Shell" width="60px" height="80px">
                </a>
                <a href="https://www.remarms.com/" target="_blank">
                    <img src="../media/img/REM-L.png" alt="Shell" width="150px" height="80px">
                </a>
                <a href="https://gta.fandom.com/wiki/Los_Santos_Customs" target="_blank">
                    <img src="../media/img/LosSantosCustoms.webp" alt="Shell" width="150px" height="80px">
                </a>
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
