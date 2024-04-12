<?php

?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dierenasiel</title>
    <link rel="stylesheet" href="../style/login.css">
    <link rel="stylesheet" href="../style/site.css">
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
                        <a class="active" href="dierenkaart.php">Dierenkaart</a>
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
                <h1>Word jij onze nieuwe baasje?</h1>
            </div>
            <div class="text-container bottom">
                <h1>Adopteer ons hier</h1>
            </div>
        </div>
    </div>
    </div>

        <a href="../db/test.php">klik op mij ofzo</a>
        <form action="klantenkaart.php" method="POST">  
            <p>Voornaam</p>
            <label for="voornaam"></label>
            <input type="text" name="voornaam" id="voornaam" required placeholder="Jan">
            <p>Tussenvoegsel</p>
            <label for="tussenvoegsel"></label>
            <input type="text" name="tussenvoegsel" placeholder="van der" id="tussenvoegsel">
            <p>Achternaam</p>
            <label for="achternaam"></label>
            <input type="text" name="achternaam" id="achternaam" required placeholder="Sloot">
            <p>Email-adres</p>
            <label for="mailAdres"></label>
            <input type="email" name="mailAdres" id="mailAdres" required placeholder="janvandersloot@gmail.com">
            <p>Adres</p>
            <label for="adres"></label>
            <input type="text" name="adres" id="adres" required placeholder="Afrikaweg 25">
            <p>Telefoonnummer</p>
            <label for="telefoonNummer"></label>
            <input type="tel" name="telefoonNummer" id="telefoonNummer" required placeholder="+06 52683893">
            <p>Legitimatienummer</p>
            <label for="legimatieNummer"></label>
            <input type="number" name="legimatieNummer" id="legimatieNummer" required placeholder="BSN nummer"
                maxlength="9" minlength="9">
                <p>Wachtwoord</p>
            <label for="wachtwoord"></label>
            <input type="password" name="wachtwoord" id="wachtwoord" required placeholder="wachtwoord123"
                autocomplete="on" minlength="4" maxlength="15">
            <input class="button" type="submit" value="Submit">
            <input type="hidden" name="submitted" value="true">

        </form>
        <?php
if (isset($_POST['submitted'])) {
    $voornaam = $_POST['voornaam'];
    $tussenvoegsel = $_POST['tussenvoegsel'];
    $achternaam = $_POST['achternaam'];
    $email = $_POST['mailAdres'];
    $adres = $_POST['adres'];
    $telefoonnummer = $_POST['telefoonNummer'];
    $legitimatienummer = $_POST['legimatieNummer'];
    $wachtwoord = $_POST['wachtwoord'];

    echo "<p>Voornaam: $voornaam</p>";
    echo "<p>Tussenvoegsel: $tussenvoegsel</p>";
    echo "<p>Achternaam: $achternaam</p>";
    echo "<p>Email-adres: $email</p>";
    echo "<p>Adres: $adres</p>";
    echo "<p>Telefoonnummer: $telefoonnummer</p>";
    echo "<p>Legitimatienummer: $legitimatienummer</p>";
    echo "<p>Wachtwoord: $wachtwoord</p>";
}
?>


            </html>
            
    <div id="footer">
        <div class="footer_links">
            <a class="policy" href="pages/policy.html">Privacy Policy</a>
            <a class="terms" href="pages/terms.html">Terms & Conditions</a>
            <!--- Voeg hier meer links toe naarmate het nodig is --->
        </div>
        <div class="filler3"></div>
        <div class="footer_cont" id="footer_main2">
            <div class="footer_img">
                <a href="https://www.postcodeloterij.nl/goede-doelen/overzicht/dierenbescherming" target="_blank">
                    <img src="media/img/PostcodeLoterij.png" alt="PostcodeLoterij" width="64px" height="42px">
                </a>
                <a href="https://www.playstation.com/en-us/" target="_blank">
                    <img src="media/img/Playstation.png" alt="Playstation" width="60px" height="42px">
                </a>
                <a href="https://www.bp.com/" target="_blank">
                    <img src="media/img/bp.png" alt="Shell" width="60px" height="80px">
                </a>
                <a href="https://www.remarms.com/" target="_blank">
                    <img src="media/img/REM-L.png" alt="Shell" width="150px" height="80px">
                </a>
                <a href="https://gta.fandom.com/wiki/Los_Santos_Customs" target="_blank">
                    <img src="media/img/LosSantosCustoms.webp" alt="Shell" width="150px" height="80px">
                </a>
            </div>
        </div>
        <div class="filler3"></div>
    </div>
            <script src="../script/doneer.js"></script>
        </body>

        </html>