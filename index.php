<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dierenasiel</title>

    <link rel="stylesheet" href="./style/site.css">
    <link rel="stylesheet" href="./style/style.css">

</head>

<body>
    <header>
        <div class="wrapper">
            <a href="index.php" id="logo_header">
                <img src="media/img/Logo.png" alt="Logo Pootjesparadijs" id="logo">
            </a>
            <div id="menuWrapper">
                        <a class="active" href="index.php">Hoofdpagina</a>
                        <a href="pages/about_us.html">Over Ons</a>
                        <a href="pages/dierenkaart.php">Dierenkaart</a>
                        <a href="pages/klantenkaart.php">Klantenkaart</a>
            </div>
            <div id="buttons">
                <a href="pages/login.php">
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

    <div class="tile-container">
        <div class="tile" style="background-image: url('media/img/AlleDieren.png');">
            <div class="tile-colour" id="tile1">
                <div class="tile-text">Alle Dieren</div>
            </div>
        </div>
        <div class="tile" style="background-image: url('media/img/Honden.jpeg');">
            <div class="tile-colour" id="tile2">
                <div class="tile-text">Honden</div>
            </div>
        </div>
        <div class="tile" style="background-image: url('media/img/Katten.jpeg');">
            <div class="tile-colour" id="tile3">
                <div class="tile-text">Katten</div>
            </div>
        </div>
        <div class="tile" style="background-image: url('media/img/Vogel.jpeg');">
            <div class="tile-colour" id="tile4">
                <div class="tile-text">Vogels</div>
            </div>
        </div>
        <div class="tile" style="background-image: url('media/img/Konijnen.jpeg');">
            <div class="tile-colour" id="tile5">
                <div class="tile-text">Konijnen</div>
            </div>
        </div>
    </div>

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

    </div>
    <script src="./script/doneer.js"></script>
</body>

</html>