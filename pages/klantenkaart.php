<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/site.css">
    <link rel="stylesheet" href="../style/klantenkaart.css">
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
   
    <div class="formulier"> 
        <form action="klantenkaart.php" method="POST">
            <p>Voornaam</p>
            <input type="text" name="voornaam" id="voornaam" required placeholder="Jan"
                value="<?php echo isset($_POST['voornaam']) ? $_POST['voornaam'] : ''; ?>" readonly>
            <p>Tussenvoegsel</p>
            <input type="text" name="tussenvoegsel" placeholder="van der" id="tussenvoegsel"
                value="<?php echo isset($_POST['tussenvoegsel']) ? $_POST['tussenvoegsel'] : ''; ?>" readonly>
            <p>Achternaam</p>
            <input type="text" name="achternaam" id="achternaam" required placeholder="Sloot"
                value="<?php echo isset($_POST['achternaam']) ? $_POST['achternaam'] : ''; ?>" readonly>
            <p>Email-adres</p>
            <input type="email" name="mailAdres" id="mailAdres" required placeholder="janvandersloot@gmail.com"
                value="<?php echo isset($_POST['mailAdres']) ? $_POST['mailAdres'] : ''; ?>" readonly>
            <p>Adres</p>
            <input type="text" name="adres" id="adres" required placeholder="Afrikaweg 25"
                value="<?php echo isset($_POST['adres']) ? $_POST['adres'] : ''; ?>" readonly>
            <p>Telefoonnummer</p>
            <input type="tel" name="telefoonNummer" id="telefoonNummer" required placeholder="+06 52683893"
                value="<?php echo isset($_POST['telefoonNummer']) ? $_POST['telefoonNummer'] : ''; ?>" readonly>
            <p>Legitimatienummer</p>
            <input type="number" name="legimatieNummer" id="legimatieNummer" required placeholder="BSN nummer"
                maxlength="9" minlength="9"
                value="<?php echo isset($_POST['legimatieNummer']) ? $_POST['legimatieNummer'] : ''; ?>" readonly>
                <p>Wachtwoord</p>
<input type="password" name="wachtwoord" id="wachtwoord" required placeholder="wachtwoord123"
    autocomplete="on" minlength="4" maxlength="15" readonly value="<?php echo str_repeat('*', strlen($_POST['wachtwoord'])); ?>">
            <input type="hidden" name="submitted" value="true">
    </div>
    </form>

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

</body>

</html>